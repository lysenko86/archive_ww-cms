<?php
/*
    Моудль комментариев
*/
    class classComments extends classModule{
        public function __construct(){
            parent::__construct('comments');
            $this->rows = 30;
        }
        public function editItem($item){
            $item = $this->arrHTMLtoSQL($item);
            global $Db;
            $arr  = $this->genInsertVarsVals($item, 'items');
            $sql  = $Db->prepare("INSERT INTO `mod_{$this->module}_items` ($arr->vars) VALUES($arr->vals)");
            $sql->execute($this->addKeyColon($item, 'items'));
            $id   = $Db->lastInsertId();
            return $id;
        }
        public function getItems($p=false, $w=false, $l=true){
            global $Db;
            $where = $this->genDBwhere(false, false, $p ? '`items`.`public`' : '');
            $where = $where ? $where.($w ? ' AND '.$w : '') : ($w ? 'WHERE '.$w : '');
            $limit = $l ? $this->genDBlimit("mod_{$this->module}_items", '', $where) : '';
            $order = $this->genDBorder("mod_{$this->module}_items", $where);
            $order = !empty($order) ? $order : 'ORDER BY `items`.`date` DESC';
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, DATE_FORMAT(`items`.`date`, '%d.%m.%Y %H:%i:%s') AS `items_date`, `items`.`type` AS `items_type`, `items`.`mid` AS `items_mid`, `items`.`uid` AS `items_uid`, `items`.`fio` AS `items_fio`, `items`.`comment` AS `items_comment`, `items`.`public` AS `items_public`
                FROM `mod_{$this->module}_items` AS `items`
                $where
                $order
                $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function __destruct(){}
    }
?>