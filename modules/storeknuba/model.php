<?php
/*
    Модуль электронного документооборота
*/
    class classStoreknuba extends classModule{
        public function __construct(){
            $this->rows = 50;
            parent::__construct('storeknuba');
        }
        public function getRegistry($id=false){ global $Db;
            $item = array();
            if ($id){
                $sql  = $Db->query("SELECT `items`.`title` AS `items_title` FROM `mod_{$this->module}_registry` AS `items` WHERE `items`.`id` = '$id'");
                $item = $sql->fetch();
            }
            else $item['items_title'] = '';
            return $this->replaceDot($item);
        }
        public function editRegistry($id=false, $item){ global $Db;
            $item = $this->arrHTMLtoSQL($item);
            if ($id){
                $update = $this->genUpdateVarsVals($item, 'items');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_registry` SET $update WHERE `id` = '$id'");
                $sql->execute($this->addKeyColon($item, 'items'));
            }
            else{
                $arr = $this->genInsertVarsVals($item, 'items');
                $sql = $Db->prepare("INSERT INTO `mod_{$this->module}_registry` ($arr->vars) VALUES($arr->vals)");
                $sql->execute($this->addKeyColon($item, 'items'));
                $id  = $Db->lastInsertId();
            }
            return $id;
        }
        public function getRegistries($limit=true, $order='', $public=false){ global $Db;
            $where = $this->genDBwhere('', '', $public);
            $limit = $limit ? $this->genDBlimit("mod_{$this->module}_registry", '', $where) : '';
            $order = !$order ? $this->genDBorder() : 'ORDER BY '.$order;
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`title` AS `items_title` 
                FROM `mod_{$this->module}_registry` AS `items`
                $where
                $order
                $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function isRegistryTitle($id, $title){ global $Db;
            $id  = $id ? "AND `id` <> '$id'" : '';
            $sql = $Db->query("SELECT COUNT(*) AS `count` FROM `mod_{$this->module}_registry` WHERE `title` = '$title' $id");
            $row = $sql->fetch();
            return $row['count'] > 0 ? true : false;
        }
        public function getProduct($id=false){ global $Db;
            $item = array();
            if ($id){
                $sql  = $Db->query("SELECT `items`.`code` AS `items_code`, `items`.`rid` AS `items_rid`, DATE_FORMAT(`items`.`date`, '%d.%m.%Y') AS `items_date`, `items`.`count` AS `items_count` FROM `mod_{$this->module}_products` AS `items` WHERE `items`.`id` = '$id'");
                $item = $sql->fetch();
            }
            else{
                $item['items_code']  = '';
                $item['items_rid']   = $item['items_count'] = 0;
                $item['items_date']  = date("d.m.Y");
            }
            return $this->replaceDot($item);
        }
        public function editProduct($id=false, $item){ global $Db;
            $item = $this->arrHTMLtoSQL($item);
            $item['items_date'] = $Db->dateTimeToSQL($item['items_date']);
            if ($id){
                $update = $this->genUpdateVarsVals($item, 'items');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_products` SET $update WHERE `id` = '$id'");
                $sql->execute($this->addKeyColon($item, 'items'));
            }
            else{
                $arr = $this->genInsertVarsVals($item, 'items');
                $sql = $Db->prepare("INSERT INTO `mod_{$this->module}_products` ($arr->vars) VALUES($arr->vals)");
                $sql->execute($this->addKeyColon($item, 'items'));
                $id  = $Db->lastInsertId();
            }
            return $id;
        }
        public function getProducts($limit=true, $order='', $public=false, $addWhere=''){ global $Db;
            $where = $this->genDBwhere('', '`items`.`date`', $public, $addWhere);
            $limit = $limit ? $this->genDBlimit("mod_{$this->module}_products", '', $where) : '';
            $order = !$order ? $this->genDBorder() : 'ORDER BY '.$order;
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`code` AS `items_code`, `items`.`rid` AS `items_rid`, DATE_FORMAT(`items`.`date`, '%d.%m.%Y') AS `items_date`, `items`.`count` AS `items_count`, `r`.`title` AS `items_title`
                FROM `mod_{$this->module}_products` AS `items`
                    LEFT JOIN `mod_{$this->module}_registry` AS `r` ON `r`.`id` = `items`.`rid`
                $where
                $order
                $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function getProductsGroups($limit=true, $order='', $public=false, $addWhere=''){ global $Db;
            $where = $this->genDBwhere('', '`items`.`date`', $public, $addWhere);
            $limit = $limit ? $this->genDBlimit("mod_{$this->module}_products_groups", '', $where) : '';
            $order = !$order ? $this->genDBorder() : 'ORDER BY '.$order;
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`code` AS `items_code`, `items`.`rid` AS `items_rid`, DATE_FORMAT(`items`.`date`, '%d.%m.%Y') AS `items_date`, `items`.`count` AS `items_count`, `r`.`title` AS `items_title`
                FROM `mod_{$this->module}_products_groups` AS `items`
                    LEFT JOIN `mod_{$this->module}_registry` AS `r` ON `r`.`id` = `items`.`rid`
                $where
                $order
                $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function isProductCode($id, $code){ global $Db;
            $id  = $id ? "AND `id` <> '$id'" : '';
            $sql = $Db->query("SELECT COUNT(*) AS `count` FROM `mod_{$this->module}_products` WHERE `code` = '$code' $id");
            $row = $sql->fetch();
            return $row['count'] > 0 ? true : false;
        }
        public function getProductsMotions($limit=true, $order='', $public=false, $addWhere=''){ global $Db;
            $where = $this->genDBwhere('', '`items`.`date`', $public, $addWhere);
            $limit = $limit ? $this->genDBlimit("mod_{$this->module}_products_motions", '', $where) : '';
            $order = !$order ? $this->genDBorder() : 'ORDER BY '.$order;
            $sql   = $Db->prepare("
                SELECT
                    `ug`.`title` AS `gTitle`,
                    `r`.`title` AS `pTitle`,
                    (SELECT IF(SUM(`countAct`) IS NOT NULL, SUM(`countAct`), 0) FROM `mod_{$this->module}_products_motions` WHERE `gid` = `items`.`gid` AND `rid` = `items`.`rid` AND `date` <= '".(!empty($this->GETvars['GVdateFrom']) ? $Db->dateTimeToSQL($this->GETvars['GVdateFrom']).' 00:00:00' : '0000-00-00 00:00:00')."') AS `countBegin`,
                    SUM(`items`.`countAct`) AS `countAct`,
                    (SELECT IF(SUM(`countAct`) IS NOT NULL, SUM(`countAct`), 0) FROM `mod_{$this->module}_products_motions` WHERE `gid` = `items`.`gid` AND `rid` = `items`.`rid` AND `date` <= '".(!empty($this->GETvars['GVdateTo']) ? $Db->dateTimeToSQL($this->GETvars['GVdateTo']).' 23:59:59' : '3000-12-31 23:59:59')."') AS `countEnd`
                FROM `mod_{$this->module}_products_motions` AS `items`
                    LEFT JOIN `mod_users_groups` AS `ug` ON `ug`.`id` = `items`.`gid`
                    LEFT JOIN `mod_{$this->module}_registry` AS `r` ON `r`.`id` = `items`.`rid`
                $where
                GROUP BY `items`.`gid`, `items`.`rid`
                $order
                $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function getBids($limit=true, $order='', $public=false, $addWhere=''){ global $Db;
            $where = $this->genDBwhere('`items`.`status`', '`items`.`date`', $public, $addWhere);
            $limit = $limit ? $this->genDBlimit("mod_{$this->module}_bids", '', $where) : '';
            $order = !$order ? $this->genDBorder() : 'ORDER BY '.$order;
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`gid` AS `items_gid`, `g`.`title` AS `tGroup`, DATE_FORMAT(`items`.`date`, '%d.%m.%Y, %H:%i:%s') AS `items_date`, `items`.`comment` AS `items_comment`, `items`.`status` AS `items_status`, `s`.`title` AS `tStatus`
                FROM `mod_{$this->module}_bids` AS `items`
                    LEFT JOIN `mod_users_groups` AS `g` ON `g`.`id` = `items`.`gid`
                    LEFT JOIN `mod_{$this->module}_bids_status` AS `s` ON `s`.`key` = `items`.`status`
                $where
                $order
                $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function getBidsStatus(){ global $Db;
            $sql = $Db->query("SELECT * FROM `mod_{$this->module}_bids_status`");
            $arr = array();
            while ($row = $sql->fetch()) $arr[$row['key']] = $row['title'];
            return $arr;
        }
        public function addBid($item){ global $Db;
            $item['items_date']    = date("Y-m-d H:I:s");
            $item['items_comment'] = $this->varHTMLtoSQL($item['items_comment']);
            $IDs                   = $item['IDs'];
            $titles                = $item['titles'];
            $counts                = $item['counts'];
            unset($item['IDs'], $item['titles'], $item['counts']);
            $arr = $this->genInsertVarsVals($item, 'items');
            $sql = $Db->prepare("INSERT INTO `mod_{$this->module}_bids` ($arr->vars) VALUES($arr->vals)");
            $sql->execute($this->addKeyColon($item, 'items'));
            $id  = $Db->lastInsertId();
            foreach ($IDs as $k=>$v) $Db->query("INSERT INTO `mod_{$this->module}_bids_registry` (`bid`, `rid`, `title`, `count`) VALUES('$id', '{$IDs[$k]}', '{$titles[$k]}', '{$counts[$k]}')");
            return $id;
        }
        public function getSupplies($limit=true, $order='', $public=false, $addWhere=''){ global $Db;
            $where = $this->genDBwhere('`items`.`status`', '`items`.`date`', $public, $addWhere);
            $limit = $limit ? $this->genDBlimit("mod_{$this->module}_supplies", '', $where) : '';
            $order = !$order ? $this->genDBorder() : 'ORDER BY '.$order;
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, DATE_FORMAT(`items`.`date`, '%d.%m.%Y, %H:%i:%s') AS `items_date`, `items`.`comment` AS `items_comment`, `items`.`status` AS `items_status`, `items`.`sum` AS `items_sum`, `s`.`title` AS `tStatus`
                FROM `mod_{$this->module}_supplies` AS `items`
                    LEFT JOIN `mod_{$this->module}_supplies_status` AS `s` ON `s`.`key` = `items`.`status`
                $where
                $order
                $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function getSuppliesStatus(){ global $Db;
            $sql = $Db->query("SELECT * FROM `mod_{$this->module}_supplies_status`");
            $arr = array();
            while ($row = $sql->fetch()) $arr[$row['key']] = $row['title'];
            return $arr;
        }
        public function addSupply($item){ global $Db;
            $item['items_date']    = date("Y-m-d H:I:s");
            $item['items_comment'] = $this->varHTMLtoSQL($item['items_comment']);
            $item['items_sum']     = 0;
            foreach ($item['counts'] as $k=>$v) $item['items_sum'] += $item['counts'][$k] * $item['prices'][$k];
            $IDs                   = $item['IDs'];
            $titles                = $item['titles'];
            $counts                = $item['counts'];
            $prices                = $item['prices'];
            unset($item['IDs'], $item['titles'], $item['counts'], $item['prices']);
            $arr = $this->genInsertVarsVals($item, 'items');
            $sql = $Db->prepare("INSERT INTO `mod_{$this->module}_supplies` ($arr->vars) VALUES($arr->vals)");
            $sql->execute($this->addKeyColon($item, 'items'));
            $id  = $Db->lastInsertId();
            foreach ($IDs as $k=>$v) $Db->query("INSERT INTO `mod_{$this->module}_supplies_products` (`sid`, `rid`, `count`, `price`) VALUES('$id', '{$IDs[$k]}', '{$counts[$k]}', '{$prices[$k]}')");
            return $id;
        }
        public function importProducts($file){ global $Db;
            $countCells = 7;   // Количество ячеек в строке, по этому признаку отделяю строки с данными, остальные строки удаляю
            $arr        = file_get_contents($file);
            $arr        = substr($arr, strpos($arr, '<Worksheet'));
            $arr        = explode('</Table>', $arr);
            unset($arr[count($arr)-1]);
            $rows = array();
            foreach ($arr as $k=>$v){
                $v    = substr($v, strpos($v, '<Table'));
                $v    = substr($v, strpos($v, '<Row'));
                $rows = array_merge($rows, explode('</Row>', $v));
            }
            $arr = array();
            foreach ($rows as $k=>$v){
                $cells = explode('<Cell', $v);
                if (count($cells) == $countCells+1) $arr[] = array(
                    'code'  => trim(substr($cells[2], strpos($cells[2], '>')+1)),
                    'title' => trim(substr($cells[3], strpos($cells[3], '>')+1)),
                    'date'  => trim(substr($cells[4], strpos($cells[4], '>')+1)),
                    'count' => trim(substr($cells[5], strpos($cells[5], '>')+1))
                );
            }
            foreach ($arr as $k=>$v){
                $v['code']  = trim(str_replace('</Data></Cell>', '', substr($v['code'], strpos($v['code'], '>')+1)));
                $v['title'] = trim(str_replace('</Data></Cell>', '', substr($v['title'], strpos($v['title'], '>')+1)));
                if (substr($v['title'], strlen($v['title'])-1) == '.') $v['title'] = trim(substr($v['title'], 0, strlen($v['title'])-1));
                if (substr($v['title'], strlen($v['title'])-1) == '.') $v['title'] = trim(substr($v['title'], 0, strlen($v['title'])-1));
                if (substr($v['title'], strlen($v['title'])-1) == '.') $v['title'] = trim(substr($v['title'], 0, strlen($v['title'])-1));
                $v['title'] = str_replace('\\', '/', $v['title']);
                $v['title'] = str_replace('"', '&quot;', $v['title']);
                $v['title'] = str_replace("'", '&quot;', $v['title']);
                $v['date']  = trim(str_replace('</Data></Cell>', '', substr($v['date'], strpos($v['date'], '>')+1)));
                $v['date']  = substr($v['date'], 6, 4).'-'.substr($v['date'], 3, 2).'-'.substr($v['date'], 0, 2);
                $v['count'] = trim(str_replace('</Data></Cell>', '', substr($v['count'], strpos($v['count'], '>')+1)));
                $v['count'] = substr($v['count'], 0, strlen($v['count'])-1);
                $arr[$k]    = $v;
            }
            $errors = array();
            foreach ($arr as $k=>$v){
                $sql = $Db->query("SELECT `id` FROM `mod_storeknuba_registry` WHERE `title` = '{$v['title']}'");
                if (!$row = $sql->fetch()){
                    $Db->query("INSERT INTO `mod_storeknuba_registry` (`title`) VALUES('{$v['title']}')");
                    $rid = $Db->lastInsertId();
                }
                else $rid = $row['id'];
                $sql = $Db->query("SELECT COUNT(*) AS `count` FROM `mod_storeknuba_products` WHERE `code` = '{$v['code']}'");
                $row = $sql->fetch();
                if ($row['count'] == 0) $Db->query("INSERT INTO `mod_storeknuba_products` (`code`, `rid`, `date`, `count`) VALUES('{$v['code']}', $rid, '{$v['date']}', '{$v['count']}')");
                else $errors[] = $v['code'];
            }
            return $errors;
        }
        public function __destruct(){}
    }
?>