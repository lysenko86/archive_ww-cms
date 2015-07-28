<?php
    class classAjax{
        private $action        = '';
        private $admMenuSesVar = 'admMenu';
        public function __construct($action){
            header("Content-type: text/html; charset=utf-8");
            $this->action = $action;
        }
        public function getAction(){ return $this->action; }
        public function leftMenuOpen($arr){
            extract($arr, EXTR_OVERWRITE);
            $_SESSION[$this->admMenuSesVar][$name] = true;
            return true;
        }
        public function leftMenuClose($arr){
            extract($arr, EXTR_OVERWRITE);
            $_SESSION[$this->admMenuSesVar][$name] = false;
            return true;
        }
        public function adminsChangeAccess($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql    = $Db->query("SELECT `access` FROM `admins` WHERE `id` = '$id'");
            $row    = $sql->fetch();
            $access = $row['access'] == 1 ? 0 : 1;
            $Db->query("UPDATE `admins` SET `access` = '$access' WHERE `id` = '$id'");
            return $access;
        }
        public function adminsDelItem($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $Db->query("DELETE FROM `admins` WHERE `id` = '$id'");
            $Db->query("DELETE FROM `admins_rights` WHERE `aid` = '$id'");
            return true;
        }
        public function modulesChangeActive($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql    = $Db->query("SELECT `active` FROM `modules` WHERE `name` = '$name'");
            $row    = $sql->fetch();
            $active = $row['active'] == 1 ? 0 : 1;
            $Db->query("UPDATE `modules` SET `active` = '$active' WHERE `name` = '$name'");
            return $active;
        }
        public function titlesEditItem($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql    = $Db->prepare("UPDATE `$table` SET `val` = :val WHERE `var` = '$var' AND `key` = '$key'");
            $sql->execute(array(':val'=>$value));
            return true;
        }
        public function titlesDelItem($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $Db->query("DELETE FROM `$table` WHERE `var` = '$var' AND `key` = '$key'");
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