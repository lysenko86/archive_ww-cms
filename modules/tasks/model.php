<?php
/*
    Моудль задач (стандартные HTML-страницы с датой публикации и доп контент полем)
*/
    class classTasks extends classModule{
        public function __construct(){
            parent::__construct('tasks');
            $this->rows = 6;
        }
        public function getItem($id=false, $lng){
            global $Db;
            $item = array();
            if ($id){
                $sql = $Db->query("
                    SELECT `items`.`date` AS `items_date`, `items`.`public` AS `items_public`, `items`.`home` AS `items_home`, `descr`.`lng` AS `descr_lng`, `descr`.`title` AS `descr_title`, `descr`.`descr` AS `descr_descr`, `descr`.`keywords` AS `descr_keywords`, `descr`.`content` AS `descr_content`, `descr`.`report` AS `descr_report`
                    FROM `mod_{$this->module}_items` AS `items`
                        LEFT JOIN `mod_{$this->module}_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
                    WHERE `items`.`id` = '$id'
                ");
                $item = $sql->fetch();
                $item['items_date'] = substr($Db->dateTimeFromSQL($item['items_date']), 0, 10);
            }
            else{
                $item['items_public'] = 1;
                $item['items_home']   = 0;
                $item['items_date']   = date("d.m.Y");
                $item['descr_lng']    = $lng;
                $item['descr_title']  = $item['descr_descr'] = $item['descr_keywords'] = $item['descr_content'] = $item['descr_report'] = '';
            }
            return $this->replaceDot($item);
        }
        public function editItem($id=false, $item){
            $item = $this->arrHTMLtoSQL($item);
            global $Db;
            $item['items_date'] = $Db->dateTimeToSQL($item['items_date']).date(" H:i:s");
            if ($id){
                $update = $this->genUpdateVarsVals($item, 'items');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_items` SET $update WHERE `id` = '$id'");
                $sql->execute($this->addKeyColon($item, 'items'));

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
        public function getItems($lng, $w=false, $l=true){
            global $Db;
            $like     = !empty($this->GETvars['GVsearchValue']) ? '`'.str_replace('_', '`.`', $this->GETvars['GVsearchField']).'` LIKE :GVsearchValue' : false;
            $dateFrom = !empty($this->GETvars['GVdateFrom']) ? "`date` >= '".$Db->dateTimeToSQL($this->GETvars['GVdateFrom'])." 00:00:00'" : false;
            $dateTo   = !empty($this->GETvars['GVdateTo']) ? "`date` <= '".$Db->dateTimeToSQL($this->GETvars['GVdateTo'])." 23:59:59'" : false;
            if ($like || $dateFrom || $dateTo || $w) $where = 'WHERE';
            else $where = '';
            $dateFrom = $dateFrom && $like ? "AND $dateFrom" : $dateFrom;
            $dateTo   = $dateTo && ($like || $dateFrom) ? "AND $dateTo" : $dateTo;
            $w        = $w && ($like || $dateFrom || $dateTo) ? "AND $w" : $w;

            if ($l) {
                $sql = $Db->prepare("
                    SELECT COUNT(`items`.`id`) AS `count`
                    FROM `mod_{$this->module}_items` AS `items`
                        LEFT JOIN `mod_{$this->module}_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
                    $where $like $dateFrom $dateTo $w
                ");
                $sql->execute($this->addKeyColonGETvars());
                $row = $sql->fetch();
                $this->count = $row['count'];
                if ($this->GETvars['GVpage'] * 1 < 1) $this->GETvars['GVpage'] = 1;
                if ($this->GETvars['GVpage'] * 1 > ceil($this->count / $this->rows)) $this->GETvars['GVpage'] = ceil($this->count / $this->rows);
            }

            $order = !empty($this->GETvars['GVorderField']) ? 'ORDER BY `'.str_replace('_', '`.`', $this->GETvars['GVorderField']).'` '.($this->GETvars['GVorderValue'] == 'up' ? 'ASC' : 'DESC') : false;
            $limit = (!empty($this->GETvars['GVpage']) ? ($this->GETvars['GVpage'] - 1) * $this->rows : 0).", $this->rows";
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`date` AS `items_date`, `items`.`public` AS `items_public`, `items`.`home` AS `items_home`, `descr`.`title` AS `descr_title`, `descr`.`descr` AS `descr_descr`, `descr`.`keywords` AS `descr_keywords`, `descr`.`content` AS `descr_content`, `descr`.`report` AS `descr_report`
                FROM `mod_{$this->module}_items` AS `items`
                    LEFT JOIN `mod_{$this->module}_descr` AS `descr` ON `descr`.`id` = `items`.`id` AND `descr`.`lng` = '$lng'
                $where $like $dateFrom $dateTo $w
                $order
                ".($l ? "LIMIT $limit" : '')."
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()){
                $row['items_date'] = $Db->dateTimeFromSQL($row['items_date']);
                $items[]           = $this->arrSQLtoHTML($row);
            }
            return $items;
        }
        public function __destruct(){}
    }
?>