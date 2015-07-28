<?php
/*
    Модуль фотогалереи
*/
    class classPhotos extends classModule{
        public function __construct(){
            parent::__construct('photos');
            $this->depth = 2;
        }
        public function getCatItem($id=false, $lng){
            global $Db;
            $item = array();
            if ($id){
                $sql = $Db->query("
                    SELECT `items`.`pid` AS `items_pid`, `items`.`type` AS `items_type`, `items`.`public` AS `items_public`, `descr`.`lng` AS `descr_lng`, `descr`.`title` AS `descr_title`, `descr`.`descr` AS `descr_descr`
                    FROM `mod_{$this->module}_cats` AS `items`
                        LEFT JOIN `mod_{$this->module}_cats_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
                    WHERE `items`.`id` = '$id'
                ");
                $item = $sql->fetch();
            }
            else{
                $item['items_pid']    = 0;
                $item['items_type']   = 'gallery';
                $item['items_public'] = 1;
                $item['descr_lng']    = $lng;
                $item['descr_title']  = $item['descr_descr'] = '';
            }
            return $this->arrSQLtoHTML($this->replaceDot($item));
        }
        public function editCatsItem($id=false, $item){
            global $Db;
            $item = $this->arrHTMLtoSQL($item);
            $item['items_level'] = $this->genItemLevel("mod_{$this->module}_cats", "WHERE `id` = '{$item['items_pid']}'");
            if ($id){
                $sql    = $Db->query("SELECT `pid` FROM `mod_{$this->module}_cats` WHERE `id` = '$id'");
                $row    = $sql->fetch();
                $pid    = $row['pid'];
                if ($pid != $item['items_pid']) $item['items_ord'] = $this->genItemOrder("mod_{$this->module}_cats", "WHERE `pid` = '{$item['items_pid']}'");
                $update = $this->genUpdateVarsVals($item, 'items');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_cats` SET $update WHERE `id` = '$id'");
                $sql->execute($this->addKeyColon($item, 'items'));
                $update = $this->genUpdateVarsVals($item, 'descr');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_cats_descr` SET $update WHERE `id` = '$id' AND `lng` = '{$item['descr_lng']}'");
                $sql->execute($this->addKeyColon($item, 'descr'));
                $this->changeItemLevel("mod_{$this->module}_cats", $id, $item['items_level']);
                if ($pid != $item['items_pid']) $this->changeItemOrder("mod_{$this->module}_cats", "WHERE `pid` = '$pid'");
            }
            else{
                $item['items_ord'] = $this->genItemOrder("mod_{$this->module}_cats", "WHERE `type` = '{$item['items_type']}' AND `pid` = '{$item['items_pid']}'");
                $arr  = $this->genInsertVarsVals($item, 'items');
                $sql  = $Db->prepare("INSERT INTO `mod_{$this->module}_cats` ($arr->vars) VALUES($arr->vals)");
                $sql->execute($this->addKeyColon($item, 'items'));
                $id   = $Db->lastInsertId();
                $sql  = $Db->query("SELECT `key` FROM `languages`");
                $arr  = $this->genInsertVarsVals($item, 'descr');
                $ssql = $Db->prepare("INSERT INTO `mod_{$this->module}_cats_descr` (`id`, $arr->vars) VALUES('$id', $arr->vals)");
                while ($row = $sql->fetch()){
                    if ($row['key'] == $item['descr_lng']) $ssql->execute($this->addKeyColon($item, 'descr'));
                    else $Db->query("INSERT INTO `mod_{$this->module}_cats_descr` (`id`, `lng`) VALUES('$id', '{$row['key']}')");
                }
            }
            return $id;
        }
        public function getCatsItems($lng, $type='gallery'){
            global $Db;
            $join   = $this->getItemsJOIN("mod_{$this->module}_cats", "mod_{$this->module}_cats_descr", $lng);
            $select = $this->getItemsSELECT(array('items_id', 'items_pid', 'items_level', 'items_public', 'descr_title'));
            $order  = $this->getItemsORDER();
            $sql    = $Db->query("
                SELECT `items`.`id` AS `items_id`, `items`.`level` AS `items_level`, `items`.`public` AS `items_public`, `descr`.`title` AS `descr_title`$select
                FROM `mod_{$this->module}_cats` AS `items`
                    LEFT JOIN `mod_{$this->module}_cats_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
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
        public function delCatsItem($id){
            global $Db, $Img;
            $sql = $Db->query("SELECT `pid` FROM `mod_{$this->module}_cats` WHERE `id` = '$id'");
            $row = $sql->fetch();
            $pid = $row['pid'];
            $sql = $Db->query("SELECT `id` FROM `mod_{$this->module}_cats` WHERE `pid` = '$id'");
            while ($row = $sql->fetch()) $this->delCatsItem($row['id']);
            $Db->query("DELETE FROM `mod_{$this->module}_cats` WHERE `id` = '$id'");
            $Db->query("DELETE FROM `mod_{$this->module}_cats_descr` WHERE `id` = '$id'");
            $this->changeItemOrder("mod_{$this->module}_cats", "WHERE `pid` = '$pid'");
            $sql = $Db->query("SELECT `id` FROM `mod_{$this->module}_items` WHERE `cid` = '$id'");
            while ($row = $sql->fetch()){
                $Db->query("DELETE FROM `mod_{$this->module}_descr` WHERE `id` = '{$row['id']}'");
                $Img->delImage($row['id'], 'photos');
            }
            $Db->query("DELETE FROM `mod_{$this->module}_items` WHERE `cid` = '$id'");
            return true;
        }
        public function getItem($id=false, $lng){
            global $Db, $Img;
            $item = array();
            if ($id){
                $sql = $Db->query("
                    SELECT `items`.`cid` AS `items_cid`, `items`.`public` AS `items_public`, `descr`.`lng` AS `descr_lng`, `descr`.`title` AS `descr_title`, `descr`.`descr` AS `descr_descr`
                    FROM `mod_{$this->module}_items` AS `items`
                        LEFT JOIN `mod_{$this->module}_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
                    WHERE `items`.`id` = '$id'
                ");
                $item          = $sql->fetch();
                $photos        = $Img->getImages($id, 'photos');
                $item['photo'] = $photos['200'];
            }
            else{
                $item['items_cid']    = '';
                $item['items_public'] = 1;
                $item['descr_lng']    = $lng;
                $item['descr_title']  = '';
                $item['descr_descr']  = '';
                $item['photo']        = false;
            }
            return $this->arrSQLtoHTML($this->replaceDot($item));
        }
        public function editItem($id=false, $item){
            global $Db, $Img;
            $item = $this->arrHTMLtoSQL($item);
            if ($id){
                $sql    = $Db->query("SELECT `cid` FROM `mod_{$this->module}_items` WHERE `id` = '$id'");
                $row    = $sql->fetch();
                $cid    = $row['cid'];
                if ($cid != $item['items_cid']) $item['items_ord'] = $this->genItemOrder("mod_{$this->module}_items", "WHERE `cid` = '{$item['items_cid']}'");
                $update = $this->genUpdateVarsVals($item, 'items');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_items` SET $update WHERE `id` = '$id'");
                $sql->execute($this->addKeyColon($item, 'items'));
                $update = $this->genUpdateVarsVals($item, 'descr');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_descr` SET $update WHERE `id` = '$id' AND `lng` = '{$item['descr_lng']}'");
                $sql->execute($this->addKeyColon($item, 'descr'));
                if ($cid != $item['items_cid']) $this->changeItemOrder("mod_{$this->module}_items", "WHERE `cid` = '$cid'");
            }
            else{
                $item['items_ord'] = $this->genItemOrder("mod_{$this->module}_items", "WHERE `cid` = '{$item['items_cid']}'");
                $arr               = $this->genInsertVarsVals($item, 'items');
                $sql               = $Db->prepare("INSERT INTO `mod_{$this->module}_items` ($arr->vars) VALUES($arr->vals)");
                $sql->execute($this->addKeyColon($item, 'items'));
                $id                = $Db->lastInsertId();

                $sql  = $Db->query("SELECT `key` FROM `languages`");
                $arr  = $this->genInsertVarsVals($item, 'descr');
                $ssql = $Db->prepare("INSERT INTO `mod_{$this->module}_descr` (`id`, $arr->vars) VALUES('$id', $arr->vals)");
                while ($row = $sql->fetch()){
                    if ($row['key'] == $item['descr_lng']) $ssql->execute($this->addKeyColon($item, 'descr'));
                    else $Db->query("INSERT INTO `mod_{$this->module}_descr` (`id`, `lng`) VALUES('$id', '{$row['key']}')");
                }
            }
            if ($item['photo']) $Img->addImage($id, 'photos', 'photo');
            return $id;
        }
        public function getItems($lng, $type='gallery'){
            global $Db, $Img;
            $sql = $Db->query("
                SELECT `items`.`id` AS `items_id`, `cats`.`title` AS `cats_title`, `items`.`public` AS `items_public`, `descr`.`title` AS `descr_title`, `descr`.`descr` AS `descr_descr`
                FROM `mod_{$this->module}_items` AS `items`
                    LEFT JOIN `mod_{$this->module}_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
                    LEFT JOIN `mod_{$this->module}_cats_descr` AS `cats` ON `cats`.`id` = `items`.`cid` AND `cats`.`lng` = '$lng'
                ORDER BY `items`.`cid` ASC, `items`.`ord` ASC
            ");
            $items = array();
            while ($row = $sql->fetch()){
                $row          = $this->arrSQLtoHTML($row);
                $row['photo'] = $Img->getImages($row['items_id'], 'photos');
                $items[]      = $row;
            }
            return $items;
        }
        public function __destruct(){}
    }
?>