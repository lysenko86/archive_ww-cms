<?php
/*
    Модуль учета и управления маникюрным салоном
*/
    class classStoremanicure extends classModule{
        public function __construct(){
            parent::__construct('storemanicure');
            $this->rows = 50;
        }
        public function getClient($id=false){ global $Db;
            $item = array();
            if ($id){
                $sql = $Db->query("
                    SELECT `items`.`fio` AS `items_fio`, `items`.`name` AS `items_name`, DATE_FORMAT(`items`.`birthday`, '%d.%m.%Y') AS `items_birthday`, `items`.`email` AS `items_email`, `items`.`phone` AS `items_phone`, `items`.`male` AS `items_male`, `items`.`discount` AS `items_discount`
                    FROM `mod_{$this->module}_clients` AS `items`
                    WHERE `items`.`id` = '$id'
                ");
                $item = $sql->fetch();
            }
            else{
                $item['items_fio']      = $item['items_name'] = $item['items_email'] = $item['items_phone'] = $item['items_male'] = '';
                $item['items_birthday'] = '00.00.0000';
                $item['items_access']   = '1';
                $item['items_discount'] = '0';
            }
            return $this->replaceDot($item);
        }
        public function editClient($id=false, $item){ global $Db;
            $item                   = $this->arrHTMLtoSQL($item);
            $item['items_birthday'] = $Db->dateTimeToSQL($item['items_birthday']);
            if (!$item['items_email']) $item['items_email'] = NULL;
            if (!$item['items_phone']) $item['items_phone'] = NULL;
            if ($id){
                $update = $this->genUpdateVarsVals($item, 'items');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_clients` SET $update WHERE `id` = '$id'");
                $sql->execute($this->addKeyColon($item, 'items'));
            }
            else{
                $arr = $this->genInsertVarsVals($item, 'items');
                $sql = $Db->prepare("INSERT INTO `mod_{$this->module}_clients` ($arr->vars) VALUES($arr->vals)");
                $sql->execute($this->addKeyColon($item, 'items'));
                $id  = $Db->lastInsertId();
            }
            return $id;
        }
        public function getClients($limit=true, $order='', $public=false){ global $Db;
            $where = $this->genDBwhere('', '', $public);
            $limit = $limit ? $this->genDBlimit("mod_{$this->module}_clients", '', $where) : '';
            $order = !$order ? $this->genDBorder() : 'ORDER BY '.$order;
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`fio` AS `items_fio`, `items`.`name` AS `items_name`, DATE_FORMAT(`items`.`birthday`, '%d.%m.%Y') AS `items_birthday`, `items`.`email` AS `items_email`, `items`.`phone` AS `items_phone`, `items`.`access` AS `items_access`, `items`.`discount` AS `items_discount`, `items`.`sum` AS `items_sum` 
                FROM `mod_{$this->module}_clients` AS `items`
                $where
                $order
                $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function getMaster($id=false){ global $Db;
            $item = array();
            if ($id){
                $sql = $Db->query("
                    SELECT `items`.`fio` AS `items_fio`, `items`.`phone` AS `items_phone`, `items`.`percent` AS `items_percent`, `items`.`percentMat` AS `items_percentMat`
                    FROM `mod_{$this->module}_masters` AS `items`
                    WHERE `items`.`id` = '$id'
                ");
                $item = $sql->fetch();
            }
            else{
                $item['items_fio']     = $item['items_phone'] = '';
                $item['items_access']  = '1';
                $item['items_percent'] = $item['items_percentMat'] = '0';
            }
            return $this->replaceDot($item);
        }
        public function editMaster($id=false, $item){ global $Db;
            $item = $this->arrHTMLtoSQL($item);
            if ($id){
                $update = $this->genUpdateVarsVals($item, 'items');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_masters` SET $update WHERE `id` = '$id'");
                $sql->execute($this->addKeyColon($item, 'items'));
            }
            else{
                $arr = $this->genInsertVarsVals($item, 'items');
                $sql = $Db->prepare("INSERT INTO `mod_{$this->module}_masters` ($arr->vars) VALUES($arr->vals)");
                $sql->execute($this->addKeyColon($item, 'items'));
                $id  = $Db->lastInsertId();
            }
            return $id;
        }
        public function getMasters($limit=true, $order='', $public=false){ global $Db;
            $where = $this->genDBwhere('', '', $public);
            $limit = $limit ? $this->genDBlimit("mod_{$this->module}_masters", '', $where) : '';
            $order = !$order ? $this->genDBorder() : 'ORDER BY '.$order;
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`fio` AS `items_fio`, `items`.`phone` AS `items_phone`, `items`.`percent` AS `items_percent`, `items`.`percentMat` AS `items_percentMat`, `items`.`sumTotal` AS `items_sumTotal`, `items`.`sumSelf` AS `items_sumSelf`, `items`.`sumPaid` AS `items_sumPaid`, `items`.`access` AS `items_access`
                FROM `mod_{$this->module}_masters` AS `items`
                $where
                $order
                $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function getAdmin($id){ global $Db;
            $item = array();
            if ($id == 'admin') $item = array(
                'items_fio'      => ADMIN_FIO,
                'items_email'    => ADMIN_EMAIL,
                'items_sumTotal' => 0,
                'items_sumSelf'  => 0,
                'items_sumPaid'  => 0,
                'items_percent'  => 0
            );
            elseif ($id){
                $sql = $Db->query("
                    SELECT `items`.`fio` AS `items_fio`, `items`.`email` AS `items_email`, `items`.`sumTotal` AS `items_sumTotal`, `items`.`sumSelf` AS `items_sumSelf`, `items`.`sumPaid` AS `items_sumPaid`, `items`.`percent` AS `items_percent`
                    FROM `admins` AS `items`
                    WHERE `items`.`id` = '$id'
                ");
                $item = $sql->fetch();
            }
            return $this->replaceDot($item);
        }
        public function editAdmin($id=false, $item){ global $Db;
            $item = $this->arrHTMLtoSQL($item);
            if ($id){
                $update = $this->genUpdateVarsVals($item, 'items');
                $sql    = $Db->prepare("UPDATE `admins` SET $update WHERE `id` = '$id'");
                $sql->execute($this->addKeyColon($item, 'items'));
            }
            return $id;
        }
        public function getAdmins($limit=true, $order='', $public=false){ global $Db;
            $where = $this->genDBwhere('', '', $public);
            $limit = $limit ? $this->genDBlimit('admins', '', $where) : '';
            $order = !$order ? $this->genDBorder() : 'ORDER BY '.$order;
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`fio` AS `items_fio`, `items`.`email` AS `items_email`, `items`.`sumTotal` AS `items_sumTotal`, `items`.`sumSelf` AS `items_sumSelf`, `items`.`sumPaid` AS `items_sumPaid`, `items`.`percent` AS `items_percent`, `items`.`access` AS `items_access`
                FROM `admins` AS `items`
                $where
                $order
                $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function getService($id=false){ global $Db;
            $item = array();
            if ($id){
                $sql = $Db->query("
                    SELECT `items`.`title` AS `items_title`, `items`.`type` AS `items_type`
                    FROM `mod_{$this->module}_services` AS `items`
                    WHERE `items`.`id` = '$id'
                ");
                $item = $sql->fetch();
            }
            else $item['items_title'] = $item['items_type'] = '';
            return $this->replaceDot($item);
        }
        public function editService($id=false, $item){ global $Db;
            $item = $this->arrHTMLtoSQL($item);
            if ($id){
                $update = $this->genUpdateVarsVals($item, 'items');
                $sql    = $Db->prepare("UPDATE `mod_{$this->module}_services` SET $update WHERE `id` = '$id'");
                $sql->execute($this->addKeyColon($item, 'items'));
            }
            else{
                $arr = $this->genInsertVarsVals($item, 'items');
                $sql = $Db->prepare("INSERT INTO `mod_{$this->module}_services` ($arr->vars) VALUES($arr->vals)");
                $sql->execute($this->addKeyColon($item, 'items'));
                $id  = $Db->lastInsertId();
            }
            return $id;
        }
        public function getServices($limit=true, $order='', $public=false){ global $Db;
            $where = $this->genDBwhere('`items`.`type`', '', $public);
            $limit = $limit ? $this->genDBlimit("mod_{$this->module}_services", '', $where) : '';
            $order = !$order ? $this->genDBorder() : 'ORDER BY '.$order;
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, `items`.`title` AS `items_title`, `items`.`type` AS `items_type`, `items`.`public` AS `items_public`
                FROM `mod_{$this->module}_services` AS `items`
                $where
                $order
                $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function getServicesTypes(){ global $Db;
            $sql = $Db->query("SELECT * FROM `mod_{$this->module}_services_types`");
            $arr = array();
            while ($row = $sql->fetch()) $arr[$row['key']] = $row['title'];
            return $arr;
        }
        public function getMailerSettings(){ global $Db;
            $sql    = $Db->query("SELECT * FROM `mod_{$this->module}_mailer` ORDER BY `var` ASC");
            $items  = array();
            while ($row = $sql->fetch()) $items[$row['var']] = $row['val'];
            $sql    = $Db->query("SELECT COUNT(*) AS `phones` FROM `mod_{$this->module}_mailer_phones`");
            $row    = $sql->fetch();
            $items += $row;
            $sql    = $Db->query("SELECT COUNT(*) AS `emails` FROM `mod_{$this->module}_mailer_emails`");
            $row    = $sql->fetch();
            $items += $row;
            return $items;
        }
        public function setMailerSettings($item){ global $Db;
            $item = $this->arrHTMLtoSQL($item);
            foreach ($item as $k=>$v){
                $sql = $Db->prepare("UPDATE `mod_{$this->module}_mailer` SET `val` = :val WHERE `var` = :var");
                $sql->execute(array(':var'=>$k, ':val'=>$v));
            }
        }
        public function addPhonesToMailer(){ global $Db;
            $sql = $Db->query("SELECT `val` FROM `mod_{$this->module}_mailer` WHERE `var` = 'sms_text'");
            $row = $sql->fetch();
            $sms = $row['val'];
            $sql = $Db->query("SELECT `phone`, `name` FROM `mod_{$this->module}_clients` WHERE `phone` <> '' AND `access` = '1'");
            while ($row = $sql->fetch()){
                $phone = $row['phone'];
                $msg   = str_replace(':user:', $row['name'], $sms);
                $Db->query("INSERT INTO `mod_{$this->module}_mailer_phones` (`phone`, `sms`) VALUES('$phone', '$msg')");
            }
        }
        public function addPhoneToMailer($id){ global $Db;
            $sql   = $Db->query("SELECT `val` FROM `mod_{$this->module}_mailer` WHERE `var` = 'sms_text'");
            $row   = $sql->fetch();
            $sms   = $row['val'];
            $sql   = $Db->query("SELECT `phone`, `name` FROM `mod_{$this->module}_clients` WHERE `id` = '$id'");
            $row   = $sql->fetch();
            $phone = $row['phone'];
            $msg   = str_replace(':user:', $row['name'], $sms);
            $Db->query("INSERT INTO `mod_{$this->module}_mailer_phones` (`phone`, `sms`) VALUES('$phone', '$msg')");
        }
        public function addEmailsToMailer(){ global $Db;
            $sql     = $Db->query("SELECT `val` FROM `mod_{$this->module}_mailer` WHERE `var` = 'email_title'");
            $row     = $sql->fetch();
            $title   = $row['val'];
            $sql     = $Db->query("SELECT `val` FROM `mod_{$this->module}_mailer` WHERE `var` = 'email_content'");
            $row     = $sql->fetch();
            $content = $row['val'];
            $sql     = $Db->query("SELECT `email`, `name` FROM `mod_{$this->module}_clients` WHERE `email` IS NOT NULL AND `access` = '1'");
            while ($row = $sql->fetch()){
                $email = $row['email'];
                $msg   = str_replace(':user:', $row['name'], $title);
                $Db->query("INSERT INTO `mod_{$this->module}_mailer_emails` (`email`, `title`, `content`) VALUES('$email', '$msg', '$content')");
            }
        }
        public function addEmailToMailer($id){ global $Db;
            $sql     = $Db->query("SELECT `val` FROM `mod_{$this->module}_mailer` WHERE `var` = 'email_title'");
            $row     = $sql->fetch();
            $title   = $row['val'];
            $sql     = $Db->query("SELECT `val` FROM `mod_{$this->module}_mailer` WHERE `var` = 'email_content'");
            $row     = $sql->fetch();
            $content = $row['val'];
            $sql     = $Db->query("SELECT `email`, `name` FROM `mod_{$this->module}_clients` WHERE `id` = '$id'");
            $row     = $sql->fetch();
            $email   = $row['email'];
            $msg     = str_replace(':user:', $row['name'], $title);
            $Db->query("INSERT INTO `mod_{$this->module}_mailer_emails` (`email`, `title`, `content`) VALUES('$email', '$msg', '$content')");
        }
        public function cron_mailerSendPhones(){ global $Db, $AlphaSMS;    // В 1 СМС 70 символов (если хотя бы 1 русский, или 160 если все латиницей), если больше - присылает 2 СМС
            $sql = $Db->query("SELECT * FROM `mod_{$this->module}_mailer_phones` LIMIT 0,30");
            while ($row = $sql->fetch()){
                $Db->query("DELETE FROM `mod_{$this->module}_mailer_phones` WHERE `id` = '{$row['id']}'");
                $AlphaSMS->sendSMS('Red&Black', $row['phone'], $row['sms']);
            }
        }
        public function cron_mailerSendEmails(){ global $Db, $WWcms;
            $sql = $Db->query("SELECT * FROM `mod_{$this->module}_mailer_emails` LIMIT 0,30");
            while ($row = $sql->fetch()){
                $Db->query("DELETE FROM `mod_{$this->module}_mailer_emails` WHERE `id` = '{$row['id']}'");
                $WWcms->sendMail($row['email'], $row['title'], $row['content'], "Content-type: text/html; charset=CP1251\r\nFrom: ".ADMIN_EMAIL);
            }
        }
        public function cron_addPhonesBirthToMailer($date){ global $Db;
            $sql = $Db->query("SELECT `val` FROM `mod_{$this->module}_mailer` WHERE `var` = 'sms_text_birth'");
            $row = $sql->fetch();
            $sms = $row['val'];
            $sql = $Db->query("SELECT * FROM `mod_{$this->module}_clients` WHERE `phone` <> '' AND `access` = '1'        AND `id` = '2'");
            while ($row = $sql->fetch()){
                $uDate = substr($row['birthday'], 5, 2).'-'.substr($row['birthday'], 8, 2);
                $phone = $row['phone'];
                $msg   = str_replace(':user:', $row['name'], $sms);
                if ($date == $uDate) $Db->query("INSERT INTO `mod_{$this->module}_mailer_phones` (`phone`, `sms`) VALUES('$phone', '$msg')");
            }
        }
        public function cron_addEmailsBirthToMailer($date){ global $Db;
            $sql     = $Db->query("SELECT `val` FROM `mod_{$this->module}_mailer` WHERE `var` = 'email_title_birth'");
            $row     = $sql->fetch();
            $title   = $row['val'];
            $sql     = $Db->query("SELECT `val` FROM `mod_{$this->module}_mailer` WHERE `var` = 'email_content_birth'");
            $row     = $sql->fetch();
            $content = $row['val'];
            $sql     = $Db->query("SELECT * FROM `mod_{$this->module}_clients` WHERE `email` IS NOT NULL AND `access` = '1'       AND `id` = '2'");
            while ($row = $sql->fetch()){
                $uDate = substr($row['birthday'], 5, 2).'-'.substr($row['birthday'], 8, 2);
                $email = $row['email'];
                $msg   = str_replace(':user:', $row['name'], $title);
                if ($date == $uDate) $Db->query("INSERT INTO `mod_{$this->module}_mailer_emails` (`email`, `title`, `content`) VALUES('$email', '$msg', '$content')");
            }
        }
        public function getWorkers($limit=true, $order='', $public=false){
            $workers = array();
            $items   = $this->getAdmins($limit, $order, $public);
            foreach ($items as $v){
                $v['wid']  = 'a_'.$v['items_id'];
                $v['type'] = 'modStoremanicure_admin';
                $workers[] = $v;
            }
            $items   = $this->getMasters($limit, $order, $public);
            foreach ($items as $v){
                $v['wid']  = 'm_'.$v['items_id'];
                $v['type'] = 'modStoremanicure_master';
                $workers[] = $v;
            }
            return $workers;
        }
        public function getActions($limit=true, $order='', $whereAdd=''){ global $Db;
            $where = $this->genDBwhere('`items`.`type`', '`items`.`date`', false, $whereAdd);
            $limit = $limit ? $this->genDBlimit("mod_{$this->module}_actions", '', $where) : '';
            $order = !$order ? $this->genDBorder() : 'ORDER BY '.$order;
            $sql   = $Db->prepare("
                SELECT `items`.`id` AS `items_id`, DATE_FORMAT(`items`.`date`, '%d.%m.%Y, %H:%i') AS `items_date`, `items`.`type` AS `items_type`, `items`.`sum` AS `items_sum`, `items`.`comment` AS `items_comment`, `a`.`fio` AS `items_admin`, `m`.`fio` AS `items_master`, `s`.`title` AS `items_service`, `c`.`fio` AS `items_client`
                FROM `mod_{$this->module}_actions` AS `items`
                    LEFT JOIN `admins` AS `a` ON `a`.`id` = `items`.`aid`
                    LEFT JOIN `mod_{$this->module}_masters` AS `m` ON `m`.`id` = `items`.`mid`
                    LEFT JOIN `mod_{$this->module}_services` AS `s` ON `s`.`id` = `items`.`sid`
                    LEFT JOIN `mod_{$this->module}_clients` AS `c` ON `c`.`id` = `items`.`cid`
                $where
                $order
                $limit
            ");
            $sql->execute($this->addKeyColonGETvars());
            $items = array();
            while ($row = $sql->fetch()) $items[] = $this->arrSQLtoHTML($row);
            return $items;
        }
        public function getActionsSums($whereAdd=''){ global $Db;
            $where = $this->genDBwhere('', '`items`.`date`', false, $whereAdd);
            $sql   = $Db->prepare("
                SELECT SUM(`items`.`sum`) AS `sumTotal`,  SUM(`items`.`sum` - (SELECT SUM(`sum`) FROM `mod_{$this->module}_actions` WHERE `pid` = `items`.`id`)) AS `sumProfit`
                FROM `mod_{$this->module}_actions` AS `items`
                    LEFT JOIN `admins` AS `a` ON `a`.`id` = `items`.`aid`
                    LEFT JOIN `mod_{$this->module}_masters` AS `m` ON `m`.`id` = `items`.`mid`
                    LEFT JOIN `mod_{$this->module}_services` AS `s` ON `s`.`id` = `items`.`sid`
                $where
            ");
            $sql->execute($this->addKeyColonGETvars());
            $row = $sql->fetch();
            $arr = array();
            $arr['sumTotal']  = !empty($row['sumTotal']) ? $row['sumTotal'] : 0;
            $arr['sumProfit'] = !empty($row['sumProfit']) ? round($row['sumProfit'], 2) : 0;
            return $arr;
        }
        public function getActionsTypes(){ global $Db;
            $sql = $Db->query("SELECT * FROM `mod_{$this->module}_actions_types`");
            $arr = array();
            while ($row = $sql->fetch()) $arr[$row['key']] = $row['title'];
            return $arr;
        }
        public function getAction(){
            $item                  = array();
            $item['items_cid']     = $item['items_aid'] = $item['items_sid'] = $item['items_mid'] = $item['items_pid'] = '0';
            $item['items_sum']     = '0.00';
            $item['items_comment'] = $item['items_type'] = '';
            return $item;
        }
        public function getActionArr(){
            $item['items_pid']     = $item['items_cid'] = $item['items_aid'] = 0;
            $item['items_type']    = 'prihod';
            $item['items_comment'] = '';
            $item['items_sid']     = $item['items_mid'] = $item['items_sum'] = array();
            return $item;
        }
        public function addAction($type, $sum, $comment, $IDs){ global $Db;
            $item                  = array();
            $item['items_type']    = $type;
            $item['items_date']    = date("Y-m-d H:i:s");
            $item['items_sum']     = $sum;
            $item['items_comment'] = $comment;
            foreach ($IDs as $k=>$v) $item['items_'.$k] = $v;
            $item = $this->arrHTMLtoSQL($item);
            $arr  = $this->genInsertVarsVals($item, 'items');
            $sql  = $Db->prepare("INSERT INTO `mod_{$this->module}_actions` ($arr->vars) VALUES($arr->vals)");
            $sql->execute($this->addKeyColon($item, 'items'));
            $id   = $Db->lastInsertId();
            return $id;
        }
        public function editCash($sum){  global $Adminka;
            $settings = $Adminka->getSettings();
            $settings['SITE_CASH'] = $settings['SITE_CASH'] * 1 + $sum * 1;
            $Adminka->setSettings(array('SITE_CASH'=>$settings['SITE_CASH']));
            return $settings['SITE_CASH'];
        }
        public function incSumAdmin($id, $sum){ global $Db;
            foreach ($sum as $k=>$v) $Db->query("UPDATE `admins` SET `$k` = `$k` + $v WHERE `id` = $id");
        }
        public function incSumMaster($id, $sum){ global $Db;
            foreach ($sum as $k=>$v) $Db->query("UPDATE `mod_{$this->module}_masters` SET `$k` = `$k` + $v WHERE `id` = $id");
        }
        public function incSumClient($id, $sum){ global $Db;
            foreach ($sum as $k=>$v) $Db->query("UPDATE `mod_{$this->module}_clients` SET `$k` = `$k` + $v WHERE `id` = $id");
        }
        public function getTimes($begin, $end, $step){
            $h     = $begin;
            $m     = 0;
            $times = array();
            while ($h < $end){
                $h = strlen($h) == 1 ? '0'.$h : $h;
                $m = strlen($m) == 1 ? '0'.$m : $m;
                $times[] = array(
                    'time'    => $h.':'.$m,
                    'minutes' => $h * 60 + $m * 1
                );
                $m += $step;
                if ($m >= 60){
                    $h++;
                    $m = 0;
                }
            }
            return $times;
        }
        public function getMarks($date){ global $Db;
            $date = substr($date, 6, 4).'-'.substr($date, 3, 2).'-'.substr($date, 0, 2);
            $sql = $Db->query("SELECT `id`, DATE_FORMAT(`date`, '%H:%i') AS `date`, `length`, `mid`, `title` FROM `mod_{$this->module}_plan` AS `items` WHERE `date` >= '$date 00:00:00' AND `date` <= '$date 23:59:59'");
            $marks = array();
            while ($row = $sql->fetch()){
                $row['minutes'] = substr($row['date'], 0, 2) * 60 + substr($row['date'], 3, 2) * 1;
                $marks[]        = $row;
            }
            return $marks;
        }
        public function delMark($id=false){ global $Db; $Db->query("DELETE FROM `mod_{$this->module}_plan` WHERE `id` = '$id'");}
        public function editMark($id=false, $item){ global $Db;
            $item = $this->arrHTMLtoSQL($item);
            if ($id){}
            else{
                $Db->query("INSERT INTO `mod_{$this->module}_plan` (`date`, `length`, `mid`, `title`) VALUES('{$item['date']}', '{$item['length']}', '{$item['mid']}', '{$item['title']}')");
                $id  = $Db->lastInsertId();
            }
            return $id;
        }
        public function __destruct(){}
    }
?>