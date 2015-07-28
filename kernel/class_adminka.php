<?php
/*
    Класс для работы с админкой
*/
    class classAdminka{
        private $admMenuSesVar = 'admMenu';
        public function __construct(){}
        public function checkRights($admin, $module, $action=''){
            global $Db;
            $result = true;
            if ($admin && $admin != 'admin'){
                $sql = $Db->query("SELECT `aid` FROM `admins_rights` WHERE `aid` = '$admin' AND `module` = '$module'");
                $row = $sql->fetch();
                if ($sql->rowCount() || ($module == 'engine' && in_array($action, array('adminka', 'admExit', 'setLang')))) $result = true;
                else $result = false;
            }
            return $result;
        }
        public function admLogin($login, $password){
            global $Db;
            $sql   = $Db->query("SHOW TABLES");
            $table = false;
            while ($row = $sql->fetch($Db::FETCH_NUM)) if ($row[0] == 'admins') $table = true;
            $auth = false;
            if ($login == ADMIN_LOGIN && $password == ADMIN_PASSWORD) $auth = 'admin';
            elseif ($table){
                $sql = $Db->prepare("SELECT `id`, `access` FROM `admins` WHERE `login` = :login AND `password` = :password");
                $sql->execute(array(':login'=>$login, ':password'=>$password));
                $row = $sql->fetch();
                if     ($row && $row['id'] && !$row['access']) $auth = 'access';
                elseif (!$row) $auth = 'none';
                elseif ($row && $row['id'] && $row['access']) $auth = $row['id'];
            }
            else $auth = 'none';
            $file = fopen(DIR_ROOT.'tmp/auth.log', "a");
            fwrite($file, date("Y.m.d, h:i:s").", ".$_SERVER['REMOTE_ADDR'].", $auth\r\n");
            fclose($file);
            return $auth;
        }
        public function siteOffLogin($login, $password){ return ($login == ADMIN_LOGIN && $password == ADMIN_PASSWORD) ? true : false; }
        public function getMenu($menu, $admin){
            $items = array();
//            if ($this->checkRights($admin, 'engine')) $items['admins'] = array('title'=>$menu['adm_leftMenu_admins'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_admins1'], 'href'=>'?route=engine/listAdmins'),
//                array('title'=>$menu['adm_leftMenu_admins2'], 'href'=>'?route=engine/editAdmin'),
//                array('title'=>$menu['adm_leftMenu_storemanicure23'], 'href'=>'?route=engine/adminsSalary')
//            ));
//            if ($this->checkRights($admin, 'menu')) $items['menu'] = array('title'=>$menu['adm_leftMenu_menu'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_menu1'], 'href'=>'?route=menu/admList'),
//                array('title'=>$menu['adm_leftMenu_menu2'], 'href'=>'?route=menu/admEdit')
//            ));
//            if ($this->checkRights($admin, 'slider')) $items['slider'] = array('title'=>$menu['adm_leftMenu_slider'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_slider1'], 'href'=>'?route=slider/admList'),
//                array('title'=>$menu['adm_leftMenu_slider2'], 'href'=>'?route=slider/admEdit')
//            ));
//            if ($this->checkRights($admin, 'feedback')) $items['feedback'] = array('title'=>$menu['adm_leftMenu_feedback'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_feedback1'], 'href'=>'?route=feedback/admList')
//            ));
//            if ($this->checkRights($admin, 'comments')) $items['comments'] = array('title'=>$menu['adm_leftMenu_comments'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_comments1'], 'href'=>'?route=comments/admList')
//            ));
//            if ($this->checkRights($admin, 'reviews')) $items['reviews'] = array('title'=>$menu['adm_leftMenu_reviews'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_reviews1'], 'href'=>'?route=reviews/admList')
//            ));
//            if ($this->checkRights($admin, 'news')) $items['news'] = array('title'=>$menu['adm_leftMenu_news'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_news1'], 'href'=>'?route=news/admList'),
//                array('title'=>$menu['adm_leftMenu_news2'], 'href'=>'?route=news/admEdit')
//            ));
//            if ($this->checkRights($admin, 'pages')) $items['pages'] = array('title'=>$menu['adm_leftMenu_pages'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_pages1'], 'href'=>'?route=pages/admList'),
//                array('title'=>$menu['adm_leftMenu_pages2'], 'href'=>'?route=pages/admEdit')
//            ));
//            if ($this->checkRights($admin, 'photos')) $items['photos'] = array('title'=>$menu['adm_leftMenu_photos'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_photos1'], 'href'=>'?route=photos/admCatsList'),
//                array('title'=>$menu['adm_leftMenu_photos2'], 'href'=>'?route=photos/admCatEdit'),
//                array('title'=>$menu['adm_leftMenu_photos3'], 'href'=>'?route=photos/admPhotosList'),
//                array('title'=>$menu['adm_leftMenu_photos4'], 'href'=>'?route=photos/admPhotoEdit')
//            ));
//            if ($this->checkRights($admin, 'users')) $items['users'] = array('title'=>$menu['adm_leftMenu_users'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_users1'], 'href'=>'?route=users/admList'),
//                array('title'=>$menu['adm_leftMenu_users2'], 'href'=>'?route=users/admEdit')
//            ));
//            if ($this->checkRights($admin, 'storemanicure')) $items['storemanicure1'] = array('title'=>$menu['adm_leftMenu_storemanicure'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_storemanicure1'], 'href'=>'?route=storemanicure/admClientsList'),
//                array('title'=>$menu['adm_leftMenu_storemanicure2'], 'href'=>'?route=storemanicure/admClientEdit')
//            ));
//            if ($this->checkRights($admin, 'storemanicure')) $items['storemanicure3'] = array('title'=>$menu['adm_leftMenu_storemanicure8'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_storemanicure9'], 'href'=>'?route=storemanicure/admMastersList'),
//                array('title'=>$menu['adm_leftMenu_storemanicure10'], 'href'=>'?route=storemanicure/admMasterEdit'),
//                array('title'=>$menu['adm_leftMenu_storemanicure23'], 'href'=>'?route=storemanicure/admMastersSalary')
//            ));
//            if ($this->checkRights($admin, 'storemanicure')) $items['storemanicure4'] = array('title'=>$menu['adm_leftMenu_storemanicure11'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_storemanicure12'], 'href'=>'?route=storemanicure/admServicesList'),
//                array('title'=>$menu['adm_leftMenu_storemanicure13'], 'href'=>'?route=storemanicure/admServiceEdit')
//            ));
//            if ($this->checkRights($admin, 'storemanicure')) $items['storemanicure5'] = array('title'=>$menu['adm_leftMenu_storemanicure14'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_storemanicure16'], 'href'=>'?route=storemanicure/admFinanceList'),
//                array('title'=>$menu['adm_leftMenu_storemanicure15'], 'href'=>'?route=storemanicure/admFinancePrihod'),
//                array('title'=>$menu['adm_leftMenu_storemanicure19'], 'href'=>'?route=storemanicure/admFinanceSalary'),
//                array('title'=>$menu['adm_leftMenu_storemanicure17'], 'href'=>'?route=storemanicure/admFinanceInkass'),
//                array('title'=>$menu['adm_leftMenu_storemanicure22'], 'href'=>'?route=storemanicure/admFinanceAdd')
//            ));
//            if ($admin != 'admin') array_splice($items['storemanicure5']['items'], 3, 1);
//            if ($this->checkRights($admin, 'storemanicure')) $items['storemanicure2'] = array('title'=>$menu['adm_leftMenu_storemanicure7'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_storemanicure3'], 'href'=>'?route=storemanicure/admMailerSmsBirth'),
//                array('title'=>$menu['adm_leftMenu_storemanicure4'], 'href'=>'?route=storemanicure/admMailerSms'),
//                array('title'=>$menu['adm_leftMenu_storemanicure5'], 'href'=>'?route=storemanicure/admMailerEmailBirth'),
//                array('title'=>$menu['adm_leftMenu_storemanicure6'], 'href'=>'?route=storemanicure/admMailerEmail')
//            ));
//            if ($this->checkRights($admin, 'storemanicure')) $items['storemanicure6'] = array('title'=>$menu['adm_leftMenu_storemanicure18'], 'items'=>array(
//                array('title'=>$menu['adm_leftMenu_storemanicure21'], 'href'=>'?route=storemanicure/admManageStatistic'),
//                array('title'=>$menu['adm_leftMenu_storemanicure20'], 'href'=>'?route=storemanicure/admManagePlan')
//            ));
//            if ($admin != 'admin') array_splice($items['storemanicure6']['items'], 0, 1);
            if ($this->checkRights($admin, 'engine')) $items['settings'] = array('title'=>$menu['adm_leftMenu_settings'], 'items'=>array(
                array('title'=>$menu['adm_leftMenu_settings1'], 'href'=>'?route=engine/settAdmin'),
                array('title'=>$menu['adm_leftMenu_settings2'], 'href'=>'?route=engine/settSite'),
                array('title'=>$menu['adm_leftMenu_settings3'], 'href'=>'?route=engine/listModules'),
                array('title'=>$menu['adm_leftMenu_settings5'], 'href'=>'?route=engine/listLangs'),
                array('title'=>$menu['adm_leftMenu_settings6'], 'href'=>'?route=engine/editLang'),
                array('title'=>$menu['adm_leftMenu_settings7'], 'href'=>'?route=engine/listTitles'),
                array('title'=>$menu['adm_leftMenu_settings8'], 'href'=>'?route=engine/addTitle')
            ));
            if ($this->checkRights($admin, 'engine')) $items['utilities'] = array('title'=>$menu['adm_leftMenu_utilities'], 'items'=>array(
                array('title'=>$menu['adm_leftMenu_utilities1'], 'href'=>'?route=engine/utPhpinfo'),
                array('title'=>$menu['adm_leftMenu_utilities2'], 'href'=>'?route=engine/utDumper'),
                array('title'=>$menu['adm_leftMenu_utilities3'], 'href'=>'?route=engine/utChmod')
            ));
            if (!$arr = classSession::getVar($this->admMenuSesVar)){
                $arr = array();
                foreach ($items as $k=>$v) $arr[$k] = false;
                classSession::setVar($this->admMenuSesVar, $arr);
            }
            else{
                foreach ($items as $k=>$v) if (!array_key_exists($k, $arr)) $arr[$k] = false;
                classSession::setVar($this->admMenuSesVar, $arr);
            }
            foreach ($items as $k=>$v) $items[$k]['opened'] = $arr[$k];
            return $items;
        }
        public function isLoginAdmin($id, $login){
            global $Db;
            $sql = $Db->prepare("SELECT `id` FROM `admins` WHERE `login` = :login");
            $sql->execute(array(':login'=>$login));
            $row = $sql->fetch();
            if ($row != false && $id == 'admin') return true;
            elseif ($row != false && $row['id'] != $id) return true;
            elseif ($login == ADMIN_LOGIN && $id != 'admin') return true;
            else return false;
        }
        public function isEmailAdmin($id, $email){
            global $Db;
            $sql = $Db->prepare("SELECT `id` FROM `admins` WHERE `email` = :email");
            $sql->execute(array(':email'=>$email));
            $row = $sql->fetch();
            if ($row != false && $id == 'admin') return true;
            elseif ($row != false && $row['id'] != $id) return true;
            elseif ($email == ADMIN_EMAIL && $id != 'admin') return true;
            else return false;
        }
        public function getAdmins($public=false){
            global $Db;
            $public = $public ? "WHERE `access` = '1'" : '';
            $sql    = $Db->query("SELECT * FROM `admins` $public ORDER BY `fio` ASC");
            $arr    = array();
            while ($row = $sql->fetch()) $arr[] = $row;
            return $arr;
        }
        public function getAdminsSalary($dateFrom, $dateTo){ global $Db;
            $dateFrom = !empty($dateFrom) ? " AND `date` >= '".$Db->dateTimeToSQL($dateFrom)." 00:00:00'" : '';
            $dateTo   = !empty($dateTo) ? " AND `date` <= '".$Db->dateTimeToSQL($dateTo)." 23:59:59'" : '';
            $sql      = $Db->query("
                SELECT `items`.`id` AS `items_id`, `items`.`fio` AS `items_fio`, (SELECT ABS(IF(SUM(`sum`) IS NULL, 0, SUM(`sum`))) FROM `mod_storemanicure_actions` WHERE `type` = 'salary' AND `aid` = `items`.`id`$dateFrom$dateTo) AS `items_salary`
                FROM `admins` AS `items`
                ORDER BY `items`.`fio` ASC
            ");
            return $sql->fetchAll();
        }
        public function getAdmin($id=false){
            global $Db;
            $item = array();
            if ($id){
                $sql = $Db->query("SELECT `fio`, `email`, `login`, `password`, `percent` FROM `admins` WHERE `id` = '$id'");
                $row = $sql->fetch();
                if ($sql->rowCount()){
                    $item = $row;
                    $sql = $Db->query("
                        SELECT `m`.`name`, `m`.`title`, `m`.`descr`, IF (`r`.`aid` IS NULL, '0', '1') AS `check`
                        FROM `modules` AS `m`
                            LEFT JOIN `admins_rights` AS `r` ON `r`.`module` = `m`.`name` AND `r`.`aid` = '$id'
                        ORDER BY `m`.`name` ASC
                    ");
                    while ($row = $sql->fetch()) $item['rights'][$row['name']] = array('title'=>$row['title'], 'descr'=>$row['descr'], 'check'=>$row['check']);
                }
                else $item = false;
            }
            else{
                $item['fio']     = $item['email'] = $item['login'] = $item['password'] = '';
                $item['percent'] = 0;
                $sql = $Db->query("SELECT * FROM `modules` ORDER BY `name` ASC");
                while ($row = $sql->fetch()) $item['rights'][$row['name']] = array('title'=>$row['title'], 'descr'=>$row['descr'], 'check'=>'0');
            }
            return $item;
        }
        public function editAdmin($id=false, $fields){
            global $Db;
            if ($id){
                $sql = $Db->prepare("UPDATE `admins` SET `fio` = :fio, `email` = :email, `login` = :login, `password` = :password, `percent` = :percent WHERE `id` = '$id'");
                $sql->execute(array(':fio'=>$fields['fio'], ':email'=>$fields['email'], ':login'=>$fields['login'], ':password'=>$fields['password'], ':percent'=>$fields['percent']));
                $Db->query("DELETE FROM `admins_rights` WHERE `aid` = '$id'");
            }
            else{
                $sql = $Db->prepare("INSERT INTO `admins` (`fio`, `email`, `login`, `password`, `percent`, `access`) VALUES(:fio, :email, :login, :password, :percent, '1')");
                $sql->execute(array(':fio'=>$fields['fio'], ':email'=>$fields['email'], ':login'=>$fields['login'], ':password'=>$fields['password'], ':percent'=>$fields['percent']));
                $id = $Db->lastInsertId();
            }
            foreach ($fields['rights'] as $k=>$v) if ($v['check'] == '1') $Db->query("INSERT INTO `admins_rights` (`aid`, `module`) VALUES('$id', '$k')");
        }
        public function getSettings(){
            global $Db;
            $sql  = $Db->query("SELECT * FROM `settings` ORDER BY `var`");
            $item = array();
            while ($row = $sql->fetch()) $item[$row['var']] = $row['val'];
            return $item;
        }
        public function setSettings($fields){
            global $Db;
            foreach ($fields as $k=>$v){
                $sql = $Db->prepare("UPDATE `settings` SET `val` = :val WHERE `var` = :var");
                $sql->execute(array(':var'=>$k, ':val'=>$v));
            }
        }
        public function getImodules(){
            global $Db;
            $sql = $Db->query("SELECT * FROM `modules` ORDER BY `name` ASC");
            return $sql->fetchAll();
        }
        public function getNmodules(){
            $dir = opendir(DIR_MODULES);
            rewinddir($dir);
            $items = array();
            while (($module = readdir($dir)) !== false) if (!in_array($module, array('.', '..', 'index.html')) && file_exists(DIR_MODULES."$module/install.txt")){
                $arr     = file(DIR_MODULES."$module/install.txt");
                $items[] = array('name'=>$module, 'title'=>$arr[0], 'descr'=>$arr[1]);
            }
            closedir($dir);
            return $items;
        }
        public function installModule($module){
            global $Db;
            $arr = file(DIR_MODULES."$module/install.txt");
            $Db->query("INSERT INTO `modules` (`name`, `active`, `title`, `descr`) VALUES('$module', '1', '{$arr[0]}', '{$arr[1]}')");
            $content = file_get_contents(DIR_MODULES."$module/queries_add.sql");
            $arr     = explode('[[;;;]]', $content);
            foreach ($arr as $v) $Db->query(trim($v));
            rename(DIR_MODULES."$module/install.txt", DIR_MODULES."$module/installed.txt");
        }
        public function delModule($module){
            global $Db;
            $Db->query("DELETE FROM `modules` WHERE `name` = '$module'");
            $Db->query("DELETE FROM `admins_rights` WHERE `module` = '$module'");
            $content = file_get_contents(DIR_MODULES."$module/queries_del.sql");
            $arr     = explode('[[;;;]]', $content);
            foreach ($arr as $v) $Db->query(trim($v));
            rename(DIR_MODULES."$module/installed.txt", DIR_MODULES."$module/install.txt");
        }
        public function langsGetItems(){
            global $Db;
            $sql = $Db->query("SELECT * FROM `languages` ORDER BY `key` ASC");
            return $sql->fetchAll();
        }
        public function langsChangeActive($key){
            global $Db;
            $sql    = $Db->query("SELECT `active` FROM `languages` WHERE `key` = '$key'");
            $row    = $sql->fetch();
            $active = $row['active'] == 1 ? 0 : 1;
            $Db->query("UPDATE `languages` SET `active` = '$active' WHERE `key` = '$key'");
        }
        public function langsDelItem($key){
            global $Db;
            $Db->query("DELETE FROM `languages` WHERE `key` = '$key'");
            return true;
        }
        public function langsGetItem($key=false){
            global $Db;
            $item = array();
            if ($key){
                $sql  = $Db->query("SELECT `key`, `title` FROM `languages` WHERE `key` = '$key'");
                $item = $sql->fetch();
            }
            else $item['key'] = $item['title'] = '';
            return $item;
        }
        public function langsEditItem($key=false, $fields){
            global $Db;
            if ($key){
                $sql = $Db->prepare("UPDATE `languages` SET `key` = :key, `title` = :title WHERE `key` = '$key'");
                $sql->execute(array(':key'=>$fields['key'], ':title'=>$fields['title']));
            }
            else{
                $sql = $Db->prepare("INSERT INTO `languages` (`key`, `title`, `active`) VALUES(:key, :title, '1')");
                $sql->execute(array(':key'=>$fields['key'], ':title'=>$fields['title']));
            }
        }
        public function titlesGetTables(){
            global $Db;
            $sql    = $Db->query("SHOW TABLES");
            $tables = array();
            while ($row = $sql->fetch($Db::FETCH_NUM)) if (preg_match("/_titles$/", $row[0])) $tables[$row[0]] = $row[0];
            return $tables;
        }
        public function titlesGetItems($table){
            global $Db;
            $table = !empty($table) ? $table : 'languages_titles';
            $sql   = $Db->query("SELECT * FROM `$table` ORDER BY `var` ASC, `key` ASC");
            return $sql->fetchAll();
        }
        public function titlesGetItem(){ return array('table'=>'', 'var'=>'', 'key'=>''); }
        public function titlesAddItem($fields){
            global $Db;
            foreach ($fields as $k=>$v) if (preg_match("/^val_/", $k)){
                $arr = explode('_', $k);
                $sql = $Db->prepare("INSERT INTO `{$fields['table']}` (`var`, `key`, `val`) VALUES(:var, '{$arr[1]}', :val)");
                $sql->execute(array(':var'=>$fields['var'], ':val'=>$v));
            }
        }
        public function __destruct(){}
    }
?>