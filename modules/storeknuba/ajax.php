<?php
    class classAjax{
        private $action = '';
        public function __construct($action){
            header("Content-type: text/html; charset=utf-8");
            $this->action = $action;
        }
        public function getAction(){ return $this->action; }
        public function registryDelItem($arr){ global $Db;
            extract($arr, EXTR_OVERWRITE);
            $Db->query("DELETE FROM `mod_storeknuba_registry` WHERE `id` = '$id'");
            return true;
        }
        public function productDelItem($arr){ global $Db;
            extract($arr, EXTR_OVERWRITE);
            $Db->query("DELETE FROM `mod_storeknuba_products` WHERE `id` = '$id'");
            return true;
        }
        public function getRegistryAutocomplete($arr){ global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql = $Db->query("SELECT * FROM `mod_storeknuba_registry` WHERE `title` LIKE '%$term%'");
            $arr = '[';
            while ($row = $sql->fetch()) $arr .= '{"value": '.$row['id'].', "label": "'.$row['title'].'"}, ';
            $arr = substr($arr, 0, strlen($arr)-2);
            $arr .= ']';
            return $arr;
        }
        public function getRegistry($arr){ global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql = $Db->query("SELECT `title` FROM `mod_storeknuba_registry` WHERE `id` = '$id'");
            $row = $sql->fetch();
            return $row['title'];
        }
        public function getBidDetails($arr){ global $Db;
            extract($arr, EXTR_OVERWRITE);
            $items = array();
            $sql   = $Db->query("
                SELECT `b`.*,
                    (SELECT IF(SUM(`count`) IS NULL, 0, SUM(`count`)) FROM `mod_storeknuba_products` WHERE `rid` = `b`.`rid`) AS `totalCount`
                FROM `mod_storeknuba_bids_registry` AS `b`
                WHERE `b`.`bid` = '$id'
            ");
            while ($row = $sql->fetch()){
                $ssql = $Db->query("
                    SELECT `brp`.*, `r`.`title`
                    FROM `mod_storeknuba_bids_registry_products` AS `brp`
                        LEFT JOIN `mod_storeknuba_products` AS `p` ON `p`.`id` = `brp`.`pid`
                        LEFT JOIN `mod_storeknuba_registry` AS `r` ON `r`.`id` = `p`.`rid`
                    WHERE `brp`.`brid` = '{$row['id']}'
                ");
                $rrow            = $ssql->fetchAll();
                $row['products'] = $rrow;
                $items[]         = $row;
            }
            return json_encode($items);
        }
        public function setBidDetails($arr){ global $Db;
            extract($arr, EXTR_OVERWRITE);
            foreach ($allows as $v) $Db->query("UPDATE `mod_storeknuba_bids_registry` SET `allow` = '{$v['val']}' WHERE `id` = '{$v['id']}'");
            $sql = $Db->query("SELECT `bid` FROM `mod_storeknuba_bids_registry` WHERE `id` = '{$allows[0]['id']}'");
            $row = $sql->fetch();
            $Db->query("UPDATE `mod_storeknuba_bids` SET `status` = 'confirm' WHERE `id` = '{$row['bid']}'");
            return true;
        }
        public function getSupplyDetails($arr){ global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql   = $Db->query("
                SELECT `sp`.*, `r`.`title` AS `rTitle`
                FROM `mod_storeknuba_supplies_products` AS `sp`
                    LEFT JOIN `mod_storeknuba_registry` AS `r` ON `r`.`id` = `sp`.`rid`
                WHERE `sp`.`sid` = '$id'
            ");
            $items = $sql->fetchAll();
            return json_encode($items);
        }
        public function setSupplyDetails($arr){ global $Db;
            extract($arr, EXTR_OVERWRITE);
            $check = true;
            foreach ($supply as $v) foreach ($supply as $vv) if (($v['id'] != $vv['id']) && ($v['code'] == $vv['code'])) $check = false;
            if ($check) foreach ($supply as $v){
                $sql = $Db->query("SELECT COUNT(*) AS `count` FROM `mod_storeknuba_products` WHERE `code` = '{$v['code']}'");
                $row = $sql->fetch();
                if ($row['count'] > 0) $check = false;
            }
            if ($check){
                $sql  = $Db->query("SELECT `sid` FROM `mod_storeknuba_supplies_products` WHERE `id` = '{$supply[0]['id']}'");
                $row  = $sql->fetch();
                $sid  = $row['sid'];
                $sql  = $Db->query("SELECT DATE_FORMAT(`date`, '%Y-%m-%d') AS `date` FROM `mod_storeknuba_supplies` WHERE `id` = '$sid'");
                $row  = $sql->fetch();
                $date = $row['date'];
                foreach ($supply as $v) $Db->query("UPDATE `mod_storeknuba_supplies_products` SET `code` = '{$v['code']}' WHERE `id` = '{$v['id']}'");
                $Db->query("UPDATE `mod_storeknuba_supplies` SET `status` = 'done' WHERE `id` = '$sid'");
                foreach ($supply as $v){
                    $sql = $Db->query("SELECT * FROM `mod_storeknuba_supplies_products` WHERE `id` = '{$v['id']}'");
                    $row = $sql->fetch();
                    $Db->query("INSERT INTO `mod_storeknuba_products` (`code`, `rid`, `date`, `count`) VALUES('{$row['code']}', '{$row['rid']}', '$date', '{$row['count']}')");
                }
            }
            return $check ? true : 'error';
        }
        public function getProductsAutocomplete($arr){ global $Db, $Langs;
            extract($arr, EXTR_OVERWRITE);
            $sql = $Db->query("
                SELECT `p`.*, CONCAT(`r`.`title`, '. ".$Langs->getTitle('form_count')." ', CAST(`p`.`count` AS CHAR), ' (', DATE_FORMAT(`p`.`date`, '%d/%m%/%Y'), ')') AS `title`
                FROM `mod_storeknuba_products` AS `p`
                    LEFT JOIN `mod_storeknuba_registry` AS `r` ON `r`.`id` = `p`.`rid`
                WHERE `r`.`title` LIKE '%$term%'
                ORDER BY `r`.`title` ASC, `p`.`date` ASC
            ");
            $arr = '[';
            while ($row = $sql->fetch()) $arr .= '{"value": '.$row['id'].', "label": "'.$row['title'].'"}, ';
            $arr = substr($arr, 0, strlen($arr)-2);
            $arr .= ']';
            return $arr;
        }
        public function getProduct($arr){ global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql = $Db->query("
                SELECT `r`.`title`
                FROM `mod_storeknuba_products` AS `p`
                    LEFT JOIN `mod_storeknuba_registry` AS `r` ON `r`.`id` = `p`.`rid`
                WHERE `p`.`id` = '$id'
            ");
            $row = $sql->fetch();
            return $row['title'];
        }
        public function setBidProducts($arr){ global $Db;
            extract($arr, EXTR_OVERWRITE);
            $check = true;
            $sums  = array();
            foreach ($products as $v) $sums[$v['brid']] += $v['count']*1;
            foreach ($sums as $k=>$v){
                $sql = $Db->query("SELECT `allow` FROM `mod_storeknuba_bids_registry` WHERE `id` = '$k'");
                $row = $sql->fetch();
                if ($row['allow']*1 != $v*1) $check = 'errorAllow';
            }
            if ($check === true){
                $sums = array();
                foreach ($products as $v) $sums[$v['pid']] += $v['count']*1;
                unset($sums[0]);
                foreach ($sums as $k=>$v){
                    $sql = $Db->query("SELECT `count` FROM `mod_storeknuba_products` WHERE `id` = '$k'");
                    $row = $sql->fetch();
                    if ($row['count']*1 < $v*1) $check = 'errorCount';
                }
            }
            if ($check === true){
                $sql  = $Db->query("SELECT `bid` FROM `mod_storeknuba_bids_registry` WHERE `id` = '{$products[0]['brid']}'");
                $row  = $sql->fetch();
                $bid  = $row['bid'];
                $sql  = $Db->query("SELECT `gid` FROM `mod_storeknuba_bids` WHERE `id` = '$bid'");
                $row  = $sql->fetch();
                $gid  = $row['gid'];
                foreach ($products as $v) if ($v['pid'] > 0){
                    $Db->query("INSERT INTO `mod_storeknuba_bids_registry_products` (`brid`, `pid`, `count`) VALUES('{$v['brid']}', '{$v['pid']}', '{$v['count']}')");
                    $sql   = $Db->query("SELECT * FROM `mod_storeknuba_products` WHERE `id` = '{$v['pid']}'");
                    $row   = $sql->fetch();
                    $brpid = $Db->lastInsertId();
                    $Db->query("INSERT INTO `mod_storeknuba_products_groups` (`code`, `brpid`, `rid`, `gid`, `date`, `count`) VALUES('{$row['code']}', '$brpid', '{$row['rid']}', '$gid', '{$row['date']}', '{$v['count']}')");
                    $Db->query("UPDATE `mod_storeknuba_products` SET `count` = `count` - '{$v['count']}' WHERE `id` = '{$v['pid']}'");
                    $Db->query("INSERT INTO `mod_storeknuba_products_motions` (`date`, `rid`, `countAct`, `gid`, `bid`) VALUES('".date("Y-m-d H:i:s")."', '{$row['rid']}', '{$v['count']}', '$gid', '$bid')");
                }
                $Db->query("UPDATE `mod_storeknuba_bids` SET `status` = 'need' WHERE `id` = '$bid'");
            }
            return $check;
        }
        public function doneBid($arr){ global $Db;
            extract($arr, EXTR_OVERWRITE);
            $sql = $Db->query("SELECT `id` FROM `mod_storeknuba_bids_registry` WHERE `bid` = '$id'");
            while ($row = $sql->fetch()){
                $ssql = $Db->query("SELECT `id` FROM `mod_storeknuba_bids_registry_products` WHERE `brid` = '{$row['id']}'");
                while ($rrow = $ssql->fetch()) $Db->query("UPDATE `mod_storeknuba_products_groups` SET `done` = '1' WHERE `brpid` = '{$rrow['id']}'");
            }
            $Db->query("UPDATE `mod_storeknuba_bids` SET `status` = 'done' WHERE `id` = '$id'");
            $Db->query("DELETE FROM `mod_storeknuba_products` WHERE `count` = '0'");
            return true;
        }
        public function deleteProduct($arr){
            global $Db;
            extract($arr, EXTR_OVERWRITE);
            $Db->query("UPDATE `mod_storeknuba_products_groups` SET `deleted` = '1' WHERE `id` = '$id'");
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
    $Langs   = $WWcms->initClass('Langs');
    $act     = $Request->get('action');
    $Ajax    = new classAjax($act);
    $result  = $Ajax->$act($Request->get() + $Request->post());
    if ($result !== true) echo $result;
    $Db = NULL;
?>