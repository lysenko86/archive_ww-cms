<?php
    class classAjax{
        private $action = '';
        public function __construct($action){
            header("Content-type: text/html; charset=utf-8");
            $this->action = $action;
        }
        public function getAction(){ return $this->action; }
        public function clientsChangeAccess($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql    = $Db->query("SELECT `access` FROM `mod_storemanicure_clients` WHERE `id` = '$id'");
            $row    = $sql->fetch();
            $access = $row['access'] == 1 ? 0 : 1;
            $Db->query("UPDATE `mod_storemanicure_clients` SET `access` = '$access' WHERE `id` = '$id'");
            return $access;
        }
        public function clientsDelItem($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $Db->query("DELETE FROM `mod_storemanicure_clients` WHERE `id` = '$id'");
            return true;
        }
        public function mastersChangeAccess($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql    = $Db->query("SELECT `access` FROM `mod_storemanicure_masters` WHERE `id` = '$id'");
            $row    = $sql->fetch();
            $access = $row['access'] == 1 ? 0 : 1;
            $Db->query("UPDATE `mod_storemanicure_masters` SET `access` = '$access' WHERE `id` = '$id'");
            return $access;
        }
        public function mastersDelItem($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $Db->query("DELETE FROM `mod_storemanicure_masters` WHERE `id` = '$id'");
            return true;
        }
        public function servicesChangePublic($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql    = $Db->query("SELECT `public` FROM `mod_storemanicure_services` WHERE `id` = '$id'");
            $row    = $sql->fetch();
            $public = $row['public'] == 1 ? 0 : 1;
            $Db->query("UPDATE `mod_storemanicure_services` SET `public` = '$public' WHERE `id` = '$id'");
            return $public;
        }
        public function servicesDelItem($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $Db->query("DELETE FROM `mod_storemanicure_services` WHERE `id` = '$id'");
            return true;
        }
        public function clientsGetDiscount($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql = $Db->query("SELECT `discount` FROM `mod_storemanicure_clients` WHERE `id` = '$id'");
            $row = $sql->fetch();
            return $row['discount'];
        }
        public function financeGetShould($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $type = substr($id, 0, 1);
            $id   = substr($id, 2);
            $type = $type == 'a' ? 'admins' : 'mod_storemanicure_masters';
            $sql  = $Db->query("SELECT `sumSelf`, `sumPaid` FROM `$type` WHERE `id` = '$id'");
            $row  = $sql->fetch();
            return $row['sumSelf'] - $row['sumPaid'];
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
    $act     = $Request->get('action');
    $Ajax    = new classAjax($act);
    $result  = $Ajax->$act($Request->get());
    if ($result !== true) echo $result;
    $Db = NULL;
?>