<?php
/*
    Моудль стандартных HTML-страниц
*/
    class classPages extends classModule{
        public function __construct(){ parent::__construct('pages'); }
        public function getItem($id=false, $lng){
            global $Db;
            $item = array();
            if ($id){
                $sql = $Db->query("
                    SELECT `items`.`public` AS `items_public`, `descr`.`lng` AS `descr_lng`, `descr`.`title` AS `descr_title`, `descr`.`descr` AS `descr_descr`, `descr`.`keywords` AS `descr_keywords`, `descr`.`content` AS `descr_content`
                    FROM `mod_{$this->module}_items` AS `items`
                        LEFT JOIN `mod_{$this->module}_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
                    WHERE `items`.`id` = '$id'
                ");
                $item = $sql->fetch();
            }
            else{
                $item['items_public'] = 1;
                $item['descr_lng']    = $lng;
                $item['descr_title']  = $item['descr_descr'] = $item['descr_keywords'] = $item['descr_content'] = '';
            }
            return $this->replaceDot($item);
        }
        public function editItem($id=false, $item){
            $item = $this->arrHTMLtoSQL($item);
            global $Db;
            if ($id){
                $update = $this->genUpdateVarsVals($item, 'descr');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_descr` SET $update WHERE `id` = '$id' AND `lng` = '{$item['descr_lng']}'");
                $sql->execute($this->addKeyColon($item, 'descr'));
            }
            else{
                $arr  = $this->genInsertVarsVals($item, 'items');
                $sql  = $Db->prepare("INSERT INTO `mod_{$this->module}_items` ($arr->vars) VALUES($arr->vals)");
                $sql->execute($this->addKeyColon($item, 'items'));
                $id   = $Db->lastInsertId();

                $sql  = $Db->query("SELECT `key` FROM `languages`");
                $arr  = $this->genInsertVarsVals($item, 'descr');
                $ssql = $Db->prepare("INSERT INTO `mod_{$this->module}_descr` (`id`, $arr->vars) VALUES('$id', $arr->vals)");
                while ($row = $sql->fetch()){
                    if ($row['key'] == $item['descr_lng']) $ssql->execute($this->addKeyColon($item, 'descr'));
                    else $Db->query("INSERT INTO `mod_{$this->module}_descr` (`id`, `lng`) VALUES('$id', '{$row['key']}')");
                }
            }
            return $id;
        }
        public function getItems($lng){
            global $Db;
            $where = $this->genDBwhere('`items`.`type`');
            $limit = $this->genDBlimit("mod_{$this->module}_items", '', $where);
            $order = $this->genDBorder("mod_{$this->module}_items", $where);
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`public` AS `items_public`, `descr`.`title` AS `descr_title`, `descr`.`descr` AS `descr_descr`, `descr`.`keywords` AS `descr_keywords`, `descr`.`content` AS `descr_content`
                FROM `mod_{$this->module}_items` AS `items`
                    LEFT JOIN `mod_{$this->module}_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
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