<?php
/*
    Моудль пользователей
*/
    class classUsers extends classModule{
        public function __construct(){ parent::__construct('users'); }
        public function getItem($id=false){
            global $Db;
            $item = array();
            if ($id){
                $sql = $Db->query("
                    SELECT `items`.`type` AS `items_type`, `items`.`login` AS `items_login`, `items`.`password` AS `items_password`, `items`.`fio` AS `items_fio`, `items`.`email` AS `items_email`, `items`.`access` AS `items_access`
                    FROM `mod_{$this->module}_items` AS `items`
                    WHERE `items`.`id` = '$id'
                ");
                $item = $sql->fetch();
            }
            else{
                $item['items_access'] = 1;
                $item['items_type']   = 'users';
                $item['items_login']  = $item['items_password'] = $item['items_fio'] = $item['items_email'] = '';
            }
            return $this->replaceDot($item);
        }
        public function editItem($id=false, $item){
            $item = $this->arrHTMLtoSQL($item);
            global $Db;
            if ($id){
                $update = $this->genUpdateVarsVals($item, 'items');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_items` SET $update WHERE `id` = '$id'");
                $sql->execute($this->addKeyColon($item, 'items'));
            }
            else{
                $arr  = $this->genInsertVarsVals($item, 'items');
                $sql  = $Db->prepare("INSERT INTO `mod_{$this->module}_items` ($arr->vars) VALUES($arr->vals)");
                $sql->execute($this->addKeyColon($item, 'items'));
                $id   = $Db->lastInsertId();
            }
            return $id;
        }
        public function getItems(){
            global $Db;
            $like = !empty($this->GETvars['GVsearchValue']) ? '`'.str_replace('_', '`.`', $this->GETvars['GVsearchField']).'` LIKE :GVsearchValue' : false;
            if ($like != false) $where = 'WHERE';
            else $where = '';

            $sql = $Db->prepare("
                SELECT COUNT(`items`.`id`) AS `count`
                FROM `mod_{$this->module}_items` AS `items`
                $where $like
            ");
            $sql->execute($this->addKeyColonGETvars());
            $row = $sql->fetch();
            $this->count = $row['count'];
            if ($this->GETvars['GVpage'] * 1 < 1) $this->GETvars['GVpage'] = 1;
            if ($this->GETvars['GVpage'] * 1 > ceil($this->count / $this->rows)) $this->GETvars['GVpage'] = ceil($this->count / $this->rows);

            $order = !empty($this->GETvars['GVorderField']) ? 'ORDER BY `'.str_replace('_', '`.`', $this->GETvars['GVorderField']).'` '.($this->GETvars['GVorderValue'] == 'up' ? 'ASC' : 'DESC') : false;
            $limit = (!empty($this->GETvars['GVpage']) ? ($this->GETvars['GVpage'] - 1) * $this->rows : 0).", $this->rows";
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`type` AS `items_type`, `items`.`login` AS `items_login`, `items`.`password` AS `items_password`, `items`.`fio` AS `items_fio`, `items`.`email` AS `items_email`, `items`.`access` AS `items_access`
                FROM `mod_{$this->module}_items` AS `items`
                $where $like
                $order
                LIMIT $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function getTypes(){
            global $Db;
            $sql   = $Db->query("SELECT * FROM `mod_{$this->module}_types` ORDER BY `title` ASC");
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function isLogin($id, $login){
            global $Db;
            return $Db->checkIsValueInDB("mod_{$this->module}_items", "WHERE `id` <> '$id' AND `login` = '$login'");
        }
        public function isEmail($id, $email){
            global $Db;
            return $Db->checkIsValueInDB("mod_{$this->module}_items", "WHERE `id` <> '$id' AND `email` = '$email'");
        }
        public function login($login, $password){
            global $Db;
            $sql = $Db->prepare("SELECT `id`, `access` FROM `mod_{$this->module}_items` WHERE `login` = :login AND `password` = :password");
            $sql->execute(array(
                ':login'    => $login,
                ':password' => $password
            ));
            $row  = $sql->fetch();
            $auth = '';
            if (!$row) $auth = 'none';
            elseif ($row['access'] == '0') $auth = 'access';
            else $auth = $row['id'];
            return $auth;
        }
        public function getUserByEmail($email){
            global $Db;
            $sql = $Db->prepare("SELECT * FROM `mod_{$this->module}_items` WHERE `email` = :email");
            $sql->execute(array(':email' => $email));
            return $sql->fetch();
        }
        public function __destruct(){}
    }
?>