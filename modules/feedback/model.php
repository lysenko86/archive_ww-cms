<?php
/*
    Моудль сообщений обратной связи
*/
    class classFeedback extends classModule{
        public function __construct(){
            parent::__construct('feedback');
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
        public function getItems($lng){
            global $Db;
            $where = $this->genDBwhere();
            $limit = $this->genDBlimit("mod_{$this->module}_items", '', $where);
            $order = $this->genDBorder("mod_{$this->module}_items", $where);
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`fio` AS `items_fio`, `items`.`email` AS `items_email`, `items`.`message` AS `items_message`
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