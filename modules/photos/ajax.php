<?php
    class classAjax{
        private $action = '';
        public function __construct($action){
            header("Content-type: text/html; charset=utf-8");
            $this->action = $action;
        }
        public function getAction(){ return $this->action; }
        public function catsChangePublic($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql    = $Db->query("SELECT `public` FROM `mod_photos_cats` WHERE `id` = '$id'");
            $row    = $sql->fetch();
            $public = $row['public'] == 1 ? 0 : 1;
            $Db->query("UPDATE `mod_photos_cats` SET `public` = '$public' WHERE `id` = '$id'");
            return $public;
        }
        public function itemsChangePublic($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql    = $Db->query("SELECT `public` FROM `mod_photos_items` WHERE `id` = '$id'");
            $row    = $sql->fetch();
            $public = $row['public'] == 1 ? 0 : 1;
            $Db->query("UPDATE `mod_photos_items` SET `public` = '$public' WHERE `id` = '$id'");
            return $public;
        }
        public function itemsMoveItem($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $way     = $step;
            $step    = $step == 'down' ? +1 : -1;
            $sql     = $Db->query("SELECT `ord`, `cid` FROM `mod_photos_items` WHERE `id` = '$id_old'");
            $row     = $sql->fetch();
            $cid     = $row['cid'];
            $ord_old = $row['ord'];
            $ord_new = $ord_old + $step;
            $sql     = $Db->query("SELECT `id` FROM `mod_photos_items` WHERE `ord` = '$ord_new' AND `cid` = '$cid'");
            $row     = $sql->fetch();
            $id_new  = $row['id'];
            $sql     = $Db->query("SELECT MAX(`ord`) AS `ord` FROM `mod_photos_items` WHERE `cid` = '$cid'");
            $row     = $sql->fetch();
            $ord_max = $row['ord'];
            $ord_min = 1;
            if ($ord_new >= $ord_min && $ord_new <= $ord_max){
                $Db->query("UPDATE `mod_photos_items` SET `ord` = '$ord_new' WHERE `id` = '$id_old'");
                $Db->query("UPDATE `mod_photos_items` SET `ord` = '$ord_old' WHERE `id` = '$id_new'");
            }
            else $way = 'none';
            return $way;
        }
        public function itemsDelItem($arr){
            global $Db, $Img;
            extract($arr, EXTR_OVERWRITE);
            $sql  = $Db->query("SELECT `cid` FROM `mod_photos_items` WHERE `id` = '$id'");
            $row  = $sql->fetch();
            $cid  = $row['cid'];
            $Db->query("DELETE FROM `mod_photos_items` WHERE `id` = '$id'");
            $Db->query("DELETE FROM `mod_photos_descr` WHERE `id` = '$id'");
            $sql = $Db->query("SELECT `id` FROM `mod_photos_items` WHERE `cid` = '$cid' ORDER BY `ord` ASC");
            $index = 1;
            while ($row = $sql->fetch()) $Db->query("UPDATE `mod_photos_items` SET `ord` = '".$index++."' WHERE `id` = '{$row['id']}'");
            $Img->delImage($id, 'photos');
            return true;
        }
        public function __destruct(){}
    }





    $ROOT_DIR = $_SERVER['SCRIPT_FILENAME'];
    $ROOT_DIR = substr($ROOT_DIR, 0, strlen($ROOT_DIR)-9).'/../../';
    if (!include_once "{$ROOT_DIR}kernel/wwcms.php") exit('Не могу подключить ядро "/kernel/wwcms.php"');
    $WWcms   = new classWWcms();
    $Db      = $WWcms->initClass('Db');
    $Session = $WWcms->initClass('Session');
    $Request = $WWcms->initClass('Request');
    $Img     = $WWcms->initClass('Img');
    $act     = $Request->get('action');
    $Ajax    = new classAjax($act);
    $result  = $Ajax->$act($Request->get());
    if ($result !== true) echo $result;
    $Db = NULL;
?>