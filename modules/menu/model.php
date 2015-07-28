<?php
/*
    Модуль многоуровневого меню
*/
    class classMenu extends classModule{
        private $activeItem = false;
        public function __construct(){ parent::__construct('menu'); }
        public function getItem($id=false, $lng){
            global $Db;
            $item = array();
            if ($id){
                $sql = $Db->query("
                    SELECT `items`.`pid` AS `items_pid`, `items`.`type` AS `items_type`, `items`.`link` AS `items_link`, `items`.`public` AS `items_public`, `descr`.`lng` AS `descr_lng`, `descr`.`title` AS `descr_title`
                    FROM `mod_{$this->module}_items` AS `items`
                        LEFT JOIN `mod_{$this->module}_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
                    WHERE `items`.`id` = '$id'
                ");
                $item = $sql->fetch();
            }
            else{
                $item['items_pid']    = 0;
                $item['items_type']   = 'top';
                $item['items_link']   = '';
                $item['items_public'] = 1;
                $item['descr_lng']    = $lng;
                $item['descr_title']  = '';
            }
            return $this->arrSQLtoHTML($this->replaceDot($item));
        }
        public function editItem($id=false, $item){
            global $Db;
            $item = $this->arrHTMLtoSQL($item);
            $item['items_level'] = $this->genItemLevel("mod_{$this->module}_items", "WHERE `id` = '{$item['items_pid']}'");
            if ($id){
                $sql    = $Db->query("SELECT `pid` FROM `mod_{$this->module}_items` WHERE `id` = '$id'");
                $row    = $sql->fetch();
                $pid    = $row['pid'];
                if ($pid != $item['items_pid']) $item['items_ord'] = $this->genItemOrder("mod_{$this->module}_items", "WHERE `pid` = '{$item['items_pid']}'");
                $update = $this->genUpdateVarsVals($item, 'items');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_items` SET $update WHERE `id` = '$id'");
                $sql->execute($this->addKeyColon($item, 'items'));
                $update = $this->genUpdateVarsVals($item, 'descr');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_descr` SET $update WHERE `id` = '$id' AND `lng` = '{$item['descr_lng']}'");
                $sql->execute($this->addKeyColon($item, 'descr'));
                $this->changeItemLevel("mod_{$this->module}_items", $id, $item['items_level']);
                if ($pid != $item['items_pid']) $this->changeItemOrder("mod_{$this->module}_items", "WHERE `pid` = '$pid'");
            }
            else{
                $item['items_ord'] = $this->genItemOrder("mod_{$this->module}_items", "WHERE `type` = '{$item['items_type']}' AND `pid` = '{$item['items_pid']}'");
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
        public function getItems($lng, $type='top'){
            global $Db;
            $join   = $this->getItemsJOIN("mod_{$this->module}_items", "mod_{$this->module}_descr", $lng);
            $select = $this->getItemsSELECT(array('items_id', 'items_pid', 'items_level', 'items_public', 'items_link', 'descr_title'));
            $order  = $this->getItemsORDER();
            $sql    = $Db->query("
                SELECT `items`.`id` AS `items_id`, `items`.`level` AS `items_level`, `items`.`public` AS `items_public`, `descr`.`title` AS `descr_title`$select
                FROM `mod_{$this->module}_items` AS `items`
                    LEFT JOIN `mod_{$this->module}_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
                $join
                WHERE `items`.`type` = '$type' AND `items`.`level` = 1
                ORDER BY `items`.`ord` ASC $order
            ");
            $items = array();
            while ($row = $sql->fetch()){
                $row = $this->arrSQLtoHTML($row);
                $items[$row['items_id']] = array('items_level'=>$row['items_level'], 'items_public'=>$row['items_public'], 'descr_title'=>$row['descr_title']);
                for ($i=1; $i<$this->depth; $i++) if ($row["items{$i}_id"] != NULL) $items[$row["items{$i}_id"]] = array('items_level'=>$row["items{$i}_level"], 'items_public'=>$row["items{$i}_public"], 'descr_title'=>$row["descr{$i}_title"]);
            }
            $arr = array();
            foreach ($items as $k=>$v) $arr[] = array('items_id'=>$k, 'items_level'=>$v['items_level'], 'items_public'=>$v['items_public'], 'descr_title'=>$v['descr_title']);
            return $arr;
        }
        public function getItemsTPL($lng, $type='top'){
            global $Db;
            $join   = $this->getItemsJOIN("mod_{$this->module}_items", "mod_{$this->module}_descr", $lng);
            $select = $this->getItemsSELECT(array('items_id', 'items_pid', 'items_level', 'items_public', 'items_link', 'descr_title'));
            $order  = $this->getItemsORDER();
            $sql    = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`pid` AS `items_pid`, `items`.`level` AS `items_level`, `items`.`public` AS `items_public`, `items`.`link` AS `items_link`, `descr`.`title` AS `descr_title`$select
                FROM `mod_{$this->module}_items` AS `items`
                    LEFT JOIN `mod_{$this->module}_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
                $join
                WHERE `items`.`type` = '$type' AND `items`.`level` = 1 AND `items`.`public` = '1'
                ORDER BY `items`.`ord` ASC $order
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()){
                $row     = $this->arrSQLtoHTML($row);
                $items[$row['items_id']] = array('pid'=>$row['items_pid'], 'level'=>$row['items_level'], 'public'=>$row['items_public'], 'link'=>$row['items_link'], 'title'=>$row['descr_title']);
                for ($i=1; $i<$this->depth; $i++) if ($row["items{$i}_id"] != NULL) $items[$row["items{$i}_id"]] = array('pid'=>$row["items{$i}_pid"], 'level'=>$row["items{$i}_level"], 'public'=>$row["items{$i}_public"], 'link'=>$row["items{$i}_link"], 'title'=>$row["descr{$i}_title"]);
            }
            $arr = array();
            foreach ($items as $k=>$v) $arr[] = array('id'=>$k, 'pid'=>$v['pid'], 'level'=>$v['level'], 'public'=>$v['public'], 'link'=>$v['link'], 'title'=>$v['title']);
            return $arr;
        }
        public function delItem($id){
            global $Db;
            $sql = $Db->query("SELECT `pid` FROM `mod_{$this->module}_items` WHERE `id` = '$id'");
            $row = $sql->fetch();
            $pid = $row['pid'];
            $sql = $Db->query("SELECT `id` FROM `mod_{$this->module}_items` WHERE `pid` = '$id'");
            while ($row = $sql->fetch()) $this->delItem($row['id']);
            $Db->query("DELETE FROM `mod_{$this->module}_items` WHERE `id` = '$id'");
            $Db->query("DELETE FROM `mod_{$this->module}_descr` WHERE `id` = '$id'");
            $this->changeItemOrder("mod_{$this->module}_items", "WHERE `pid` = '$pid'");
            return true;
        }
        public function setActiveItem($id){ $this->activeItem = $id; }
        public function getActiveItem(){ return $this->activeItem; }
        public function __destruct(){}
    }
?>