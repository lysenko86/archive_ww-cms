<?php
    class classAjax{
        private $action = '';
        public function __construct($action){
            header("Content-type: text/html; charset=utf-8");
            $this->action = $action;
        }
        public function getAction(){ return $this->action; }
        public function tasksChangePublic($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql    = $Db->query("SELECT `public` FROM `mod_tasks_items` WHERE `id` = '$id'");
            $row    = $sql->fetch();
            $public = $row['public'] == 1 ? 0 : 1;
            $Db->query("UPDATE `mod_tasks_items` SET `public` = '$public' WHERE `id` = '$id'");
            return $public;
        }
        public function tasksChangeHome($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql  = $Db->query("SELECT `home` FROM `mod_tasks_items` WHERE `id` = '$id'");
            $row  = $sql->fetch();
            $home = $row['home'] == 1 ? 0 : 1;
            $Db->query("UPDATE `mod_tasks_items` SET `home` = '$home' WHERE `id` = '$id'");
            return $home;
        }
        public function pagesDelItem($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $Db->query("DELETE FROM `mod_tasks_items` WHERE `id` = '$id'");
            $Db->query("DELETE FROM `mod_tasks_descr` WHERE `id` = '$id'");
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
    $act     = $Request->get('action');
    $Ajax    = new classAjax($act);
    $result  = $Ajax->$act($Request->get());
    if ($result !== true) echo $result;
    $Db = NULL;
?>