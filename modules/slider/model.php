<?php
/*
    Модуль слайдера картинок
*/
    class classSlider extends classModule{
        public function __construct(){ parent::__construct('slider'); }
        public function getItem($id=false, $lng){
            global $Db, $Img;
            $item = array();
            if ($id){
                $sql = $Db->query("
                    SELECT `items`.`type` AS `items_type`, `items`.`link` AS `items_link`, `items`.`public` AS `items_public`, `descr`.`lng` AS `descr_lng`, `descr`.`title` AS `descr_title`, `descr`.`descr` AS `descr_descr`
                    FROM `mod_{$this->module}_items` AS `items`
                        LEFT JOIN `mod_{$this->module}_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
                    WHERE `items`.`id` = '$id'
                ");
                $item          = $sql->fetch();
            }
            else{
                $item['items_type']   = 'main';
                $item['items_link']   = '';
                $item['items_public'] = 1;
                $item['descr_lng']    = $lng;
                $item['descr_title']  = '';
                $item['descr_descr']  = '';
            }
            $item = $this->arrSQLtoHTML($this->replaceDot($item));
            $item['photo'] = $Img->getImages($id, $this->module);
            return $item;
        }
        public function editItem($id=false, $item){
            global $Db, $Img;
            $item = $this->arrHTMLtoSQL($item);
            if ($id){
                $update = $this->genUpdateVarsVals($item, 'items');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_items` SET $update WHERE `id` = '$id'");
                $sql->execute($this->addKeyColon($item, 'items'));
                $update = $this->genUpdateVarsVals($item, 'descr');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_descr` SET $update WHERE `id` = '$id' AND `lng` = '{$item['descr_lng']}'");
                $sql->execute($this->addKeyColon($item, 'descr'));
            }
            else{
                $item['items_ord'] = $this->genItemOrder("mod_{$this->module}_items", "WHERE `type` = '{$item['items_type']}'");
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
            if ($item['photo']) $Img->addImage($id, 'slider', 'photo');
            return $id;
        }
        public function getItems($lng, $public=false, $type='main'){
            global $Db, $Img;
            $sql = $Db->query("
                SELECT `items`.`id` AS `items_id`, `items`.`link` AS `items_link`, `items`.`public` AS `items_public`, `descr`.`title` AS `descr_title`, `descr`.`descr` AS `descr_descr`
                FROM `mod_{$this->module}_items` AS `items`
                    LEFT JOIN `mod_{$this->module}_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
                WHERE `items`.`type` = '$type'".($public ? " AND `items`.`public` = '1'" : "")."
                ORDER BY `items`.`ord` ASC
            ");
            $items = array();
            while ($row = $sql->fetch()){
                $row          = $this->arrSQLtoHTML($row);
                $row['photo'] = $Img->getImages($row['items_id'], 'slider');
                $items[]      = $row;
            }
            return $items;
        }
        public function __destruct(){}
    }
?>