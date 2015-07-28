<?php
/*
    Класс-ядро движка
*/
    class classWWcms{
        private $authSesVar    = 'auth';
        private $admAuthSesVar = 'admAuth';
        private $siteOffSesVar = 'siteOff';
        private $message       = array('msg'=>'', 'type'=>'', 'ses'=>false);
        private $msgSesVar     = 'message';
        private $fTypes        = array(
            'all'    => array('.jpg', '.png', '.gif', '.doc', '.xls', '.txt', '.csv', '.xml'),
            'docs'   => array('.doc', '.xls', '.txt', '.csv', '.xml'),
            'images' => array('.jpg', '.png', '.gif')
        );
        const   MSG_ERROR = 0;
        const   MSG_INFO  = 1;
        const   MSG_GOOD  = 2;
        public function __construct(){
            $br = $_SERVER['HTTP_USER_AGENT'];
            if (stripos($br, 'MSIE 6.0') || stripos($br, 'MSIE 7.0')) self::reLoad('includes/ie6/ie6.html');
            else{
                global $ROOT_DIR;
                define('DIR_ROOT',     $ROOT_DIR);
                define('DIR_INCLUDES', DIR_ROOT.'includes/');
                define('DIR_KERNEL',   DIR_ROOT.'kernel/');
                define('DIR_MODULES',  DIR_ROOT.'modules/');
                define('DIR_TEMPLATE', DIR_ROOT.'template/');
                define('DIR_TMP',      DIR_ROOT.'tmp/');
                define('DIR_UPLOAD',   DIR_ROOT.'upload/');

                define('REG_CODE',     "/^\w{1,50}$/u");
                define('REG_EMAIL',    "/^[\w\-\.]{1,30}@[\w\-\.]{1,30}\.[\w]{1,5}$/u");
                define('REG_FIO',      "/^\w{1,30}$/u");
                define('REG_IP',       "/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\.$/");
                define('REG_LINK',     "/^[\w:\/\.=?&_#-]+$/u");
                define('REG_LOGIN',    "/^[A-Za-z_]{1}[A-Za-z0-9_@\.]{2,19}$/i");
                define('REG_MESSAGE',  "/^[\w\d\s\.\-!?,;:\"\')(]+$/u");
                define('REG_NUMBERS',  "/^[\d\.]+$/");
                define('REG_PASSWORD', "/^[A-Za-z0-9-_]{6,18}$/");
                define('REG_PHONE',    "/^[\d\+]{13}$/i");
                define('REG_VAR',      "/^[A-Za-z_]{1}[A-Za-z0-9_]{2,}$/i");
            }
        }
        static function reLoad($link='?'){ header("location: $link"); }
        static function debug($var){
            echo '<html>
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                    <title>ОТЛАДКА</title>
                </head>
                <body style="margin: 0px; padding: 0px;">
                    <div style="background-color: #4B90FA; padding: 30px 0px; text-align: center; color: #FFFFFF; font-size: 24px; line-height: 26px; font-weight: bold; font-family: monospace;">ОТЛАДКА</div>
                    <div style="font-family: monospace; font-size: 14px; line-height: 16px; padding: 20px; white-space: pre;">';
                        var_dump($var);
                    echo '</div>
                    <div style="background-color: #DDDDDD; height: 20px;">&nbsp;</div>
                </body>
            </html>';
            exit;
        }
        public function initClass($class){
            $class = strtolower($class);
            if (!include_once DIR_KERNEL."class_$class.php") fatalError("Не могу подключить класс \"/kernel/class_$class.php\"");
            $class = 'class'.ucfirst($class);
            return new $class();
        }
        public function initModule($module){
            if (!include_once DIR_MODULES."$module/model.php") fatalError("Не могу подключить модель модуля \"/modules/$module/model.php\"");
            if (!include_once DIR_MODULES."$module/controller.php") fatalError("Не могу подключить контроллер модуля \"/modules/$module/controller.php\"");
            return true;
        }
        public function initModuleModel($module){
            $module = strtolower($module);
            if (!include_once DIR_MODULES."$module/model.php") fatalError("Не могу подключить модель модуля \"/modules/$module/model.php\"");
            $module = 'class'.ucfirst($module);
            return new $module();
        }
        public function initSettings(){
            global $Db;
            $sql = $Db->query("SELECT * FROM `settings` ORDER BY `var`");
            while ($row = $sql->fetch()) if (!defined($row['var'])) define($row['var'], $row['val']);
        }
        public function getAuth(){ return classSession::getVar($this->authSesVar);; }
        public function setAuth($id=false){ classSession::setVar($this->authSesVar, $id); }
        public function getAdmAuth(){ return classSession::getVar($this->admAuthSesVar); }
        public function setAdmAuth($id=false){ classSession::setVar($this->admAuthSesVar, $id); }
        public function getSiteOff(){ return classSession::getVar($this->siteOffSesVar); }
        public function setSiteOff($id=false){ classSession::setVar($this->siteOffSesVar, $id); }
        static function checkModule($module){
            global $Db;
            $result = false;
            $sql    = $Db->query("SELECT * FROM `modules` WHERE `name` = '$module'");
            $row    = $sql->fetch();
            if ($row['active'] != '1') $result = 'off';
            elseif (!file_exists(DIR_MODULES."$module/model.php") ||
                    !file_exists(DIR_MODULES."$module/controller.php") ||
                    !file_exists(DIR_MODULES."$module/template.tpl")) $result = 'nofiles';
            else $result = 'good';
            return $result;
        }
        public function setMsg($txt, $type=self::MSG_ERROR, $ses=false){
            $this->message['msg'] = $txt;
            switch ($type){
                case self::MSG_INFO:  $this->message['type'] = 'info'; break;
                case self::MSG_GOOD:  $this->message['type'] = 'good'; break;
                case self::MSG_ERROR: $this->message['type'] = 'error'; break;
            }
            if ($ses){
                $this->message['ses'] = true;
                classSession::setVar($this->msgSesVar, $this->message);                
            }
        }
        public function getMsg(){
            if (classSession::getVar($this->msgSesVar) && !$this->message['ses']){
                $this->message = classSession::getVar($this->msgSesVar);
                classSession::delVar($this->msgSesVar);
            }
            return $this->message;
        }
        static function sendMail($adr, $title, $msg, $headers=''){ mail($adr, iconv("UTF-8", "CP1251", $title), iconv("UTF-8", "CP1251", $msg), $headers); }
        static function isLoadFile($inputName){
            if (!empty($_FILES[$inputName]['name'])){
                $type = $_FILES[$inputName]['name'];
                $type = strtolower(substr($type, strlen($type)-4, strlen($type)));
                return $type;
            }
            else return false;
        }
        public function checkFileType($type, $pattern=false){
            if (!$pattern) $pattern = 'all';
            if (in_array($type, $this->fTypes[$pattern])) return true;
            else return false;
        }
        static function genCapture(){
            $var     = rand(1000, 9999);
            $saveVar = $var;
            $arr     = array();
            for ($i=0; $var>0;){
                $tempVar = $var%10;
                switch ($tempVar){
                    case 0: $arr[] = 'nolj.jpg'; break;
                    case 1: $arr[] = 'odin.jpg'; break;
                    case 2: $arr[] = 'dva.jpg'; break;
                    case 3: $arr[] = 'tri.jpg'; break;
                    case 4: $arr[] = 'chetyre.jpg'; break;
                    case 5: $arr[] = 'pjatj.jpg'; break;
                    case 6: $arr[] = 'shestj.jpg'; break;
                    case 7: $arr[] = 'semj.jpg'; break;
                    case 8: $arr[] = 'vosemj.jpg'; break;
                    case 9: $arr[] = 'devjatj.jpg'; break;
                }
                $var = floor($var/10);
            }
            $arr = array_reverse($arr);
            return array('arr'=>$arr, 'val'=>$saveVar);
        }
        static function genRandom($count, $onlyNumbers=false){
            $string = '';
            $max    = $onlyNumbers ? 9 : 35;
            $arr    = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
            for ($i=1; $i<=$count; $i++) $string .= $arr[rand(0, $max)];
            return $string;
        }
        public function __destruct(){}
    }










/*
    Абстрактный класс для любого модуля, должны быть реализованы кроме прочих следующие методы:
        + методы по работе с категориями любой вложенности;
        + методы работы с переменными фильтров (+page, +searchField, +searchValue, +filter, +dateFrom, +dateTo, +orderField, +orderValue)
        + методы работы с элементами модуля (список, редактирование, добавление, удаление элемента)
*/
    abstract class classModule{
        protected $module    = '';
        protected $rows      = 1;
        protected $count     = 0;
        protected $depth     = 3;
        protected $maxLevels = 0;
        protected $GETvars   = array('GVpage'=>1, 'GVsearchField'=>false, 'GVsearchValue'=>false, 'GVfilter'=>false, 'GVdateFrom'=>false, 'GVdateTo'=>false, 'GVorderField'=>false, 'GVorderValue'=>false);
        protected function __construct($module){
            $this->module = $module;
            foreach ($this->GETvars as $k=>$v) $this->GETvars[$k] = classRequest::get($k) ? classRequest::get($k) : (classRequest::post($k) ? classRequest::post($k) : false);
            if (!$this->GETvars['GVpage']) $this->GETvars['GVpage'] = 1;
        }
        public function getModuleInfo(){
            global $Db;
            $sql = $Db->query("SELECT * FROM `modules` WHERE `name` = '$this->module'");
            return $sql->fetch();
        }
        protected function replaceDot($arr){
            $rez = array();
            foreach ($arr as $k=>$v) $rez[str_replace('.', '_', $k)] = $v;
            return $rez;
        }
        protected function addKeyColon($arr, $table){
            $rez = array();
            foreach ($arr as $k=>$v) if (substr_count($k, $table.'_')) $rez[":$k"] = $v;
            return $rez;
        }
        protected function addKeyColonGETvars(){
            $rez = array();
            foreach ($this->GETvars as $k=>$v) if (!empty($v)) $rez[":$k"] = $v;
            unset($rez[':GVsearchField'], $rez[':GVorderField'], $rez[':GVorderValue'], $rez[':GVpage'], $rez[':GVdateFrom'], $rez[':GVdateTo']);
            if (array_key_exists(':GVsearchValue', $rez)) $rez[':GVsearchValue'] = "%{$rez[':GVsearchValue']}%";
            if (array_key_exists(':GVorderValue', $rez)) $rez[':GVorderValue'] = strtoupper($rez[':GVorderValue']);
            return $rez;
        }
        protected function genInsertVarsVals($arr, $table){
            $table .= '_';
            $vars = $vals = '';
            foreach ($arr as $k=>$v) if (substr_count($k, $table)){
                $vars .= '`'.substr($k, strlen($table)).'`, ';
                $vals .= ":$k, ";
            }
            $vars = substr($vars, 0, strlen($vars)-2);
            $vals = substr($vals, 0, strlen($vals)-2);
            return json_decode(json_encode(array('vars'=>$vars, 'vals'=>$vals)));
        }
        protected function genUpdateVarsVals($arr, $table){
            $table .= '_';
            $update = '';
            foreach ($arr as $k=>$v) if (substr_count($k, $table)) $update .= '`'.substr($k, strlen($table))."` = :$k, ";
            return substr($update, 0, strlen($update)-2);
        }
        public function varHTMLtoSQL($var){ $var = trim($var); }
        public function arrHTMLtoSQL($arr){
            foreach ($arr as $k=>$v) $arr[$k] = trim($v);
            return $arr;
        }
        public function varSQLtoHTML($var){ return htmlspecialchars($var, ENT_QUOTES); }
        public function arrSQLtoHTML($arr){
            foreach ($arr as $k=>$v) $arr[$k] = htmlspecialchars($v, ENT_QUOTES);
            return $arr;
        }
        public function getGETvars(){ return $this->GETvars; }
        public function getGETvarsToString(){
            $str = '';
            foreach ($this->GETvars as $k=>$v) if (!empty($v)) $str .= "&$k=$v";
            return $str;
        }
        public function genDBwhere($GVfilter='', $GVdate='', $public=false){
            global $Db;
            $where  = '';
            $where .= !empty($this->GETvars['GVsearchValue']) ? ' AND `'.str_replace('_', '`.`', $this->GETvars['GVsearchField']).'` LIKE :GVsearchValue' : '';
            $where .= !empty($this->GETvars['GVfilter']) ? " AND $GVfilter = :GVfilter" : '';
            $where .= !empty($this->GETvars['GVdateFrom']) ? " AND $GVdate >= '".$Db->dateTimeToSQL($this->GETvars['GVdateFrom'])." 00:00:00'" : '';
            $where .= !empty($this->GETvars['GVdateTo']) ? " AND $GVdate <= '".$Db->dateTimeToSQL($this->GETvars['GVdateTo'])." 23:59:59'" : '';
            $where .= $public ? " AND $public = '1'" : '';
            if ($where) $where = 'WHERE'.substr($where, 4);
            return $where;
        }
        public function genDBlimit($table, $join='', $where){
            global $Db;
            $sql = $Db->prepare("
                SELECT COUNT(*) AS `count`
                FROM `$table` AS `items`
                $join
                $where
            ");
            $sql->execute($this->addKeyColonGETvars());
            $row = $sql->fetch();
            $this->count = $row['count'];
            if ($this->GETvars['GVpage'] * 1 < 1) $this->GETvars['GVpage'] = 1;
            if ($this->GETvars['GVpage'] * 1 > ceil($this->count / $this->rows)) $this->GETvars['GVpage'] = ceil($this->count / $this->rows);
            return 'LIMIT '.(!empty($this->GETvars['GVpage']) ? ($this->GETvars['GVpage'] - 1) * $this->rows : 0).", $this->rows";
        }
        public function genDBorder(){ return !empty($this->GETvars['GVorderField']) ? 'ORDER BY `'.str_replace('_', '`.`', $this->GETvars['GVorderField']).'` '.($this->GETvars['GVorderValue'] == 'up' ? 'ASC' : 'DESC') : false; }
        public function getPager(){
            $count = ceil($this->count / $this->rows);
            if ($count == 0) $count = 1;
            return range(1, $count);
        }
        protected function genItemOrder($table, $where=''){
            global $Db;
            $sql = $Db->query("SELECT MAX(`ord`) AS `ord` FROM `$table` $where");
            $row = $sql->fetch();
            return $row['ord'] == NULL ? '1' : $row['ord'] + 1;
        }
        protected function genItemLevel($table, $where=''){
            global $Db;
            $sql = $Db->query("SELECT `level` FROM `$table` $where");
            $row = $sql->fetch();
            return !$row ? '1' : $row['level'] + 1;
        }
        public function checkItemStructure($table, $id, $pid){
            global $Db;
            $return = false;
            if ($id) for ($i=1; $i<=$this->depth; $i++){
                if ($id == $pid) $return = true;
                if ($pid != 0){
                    $sql = $Db->query("SELECT `pid` FROM `$table` WHERE `id` = '$pid'");
                    $row = $sql->fetch();
                    $pid = $row['pid'];
                }
            }
            return $return;
        }
        protected function getItemMaxLevel($table, $id){
            global $Db;
            $sql = $Db->query("SELECT `id`, `level` FROM `$table` WHERE `pid` = '$id'");
            while ($row = $sql->fetch()){
                $this->getItemMaxLevel($table, $row['id']);
                if ($this->maxLevels < $row['level']) $this->maxLevels = $row['level'];
            }
            return true;
        }
        public function checkItemDepth($table, $id, $pid){
            global $Db;
            $return = false;
            $sql = $Db->query("SELECT `level` FROM `$table` WHERE `id` = '$pid'");
            $row = $sql->fetch();
            if ($row['level'] >= $this->depth) $return = true;
            if ($id){
                $pid_level = $row['level'];
                $this->maxLevels = 0;
                $this->getItemMaxLevel($table, $id);
                if ($this->maxLevels + $pid_level > $this->depth) $return = true;
            }
            return $return;
        }
        protected function changeItemOrder($table, $where=''){
            global $Db;
            $sql = $Db->query("SELECT `id` FROM `$table` $where ORDER BY `ord` ASC");
            $index = 1;
            while ($row = $sql->fetch()) $Db->query("UPDATE `$table` SET `ord` = '".$index++."' WHERE `id` = '{$row['id']}'");
            return true;
        }
        protected function changeItemLevel($table, $id, $level){
            global $Db;
            $sql = $Db->query("SELECT `id`, `level` FROM `$table` WHERE `pid` = '$id'");
            while ($row = $sql->fetch()){
                $this->changeItemLevel($table, $row['id'], $row['level']+1);
                $Db->query("UPDATE `$table` SET `level` = '$level' WHERE `id` = '$id'");
            }
            return true;
        }
        public function moveItemOrder($table, $id_old, $step){
            global $Db;
            $step    = $step == 'down' ? +1 : -1;
            $sql     = $Db->query("SELECT `ord`, `pid` FROM `$table` WHERE `id` = '$id_old'");
            $row     = $sql->fetch();
            $pid     = $row['pid'];
            $ord_old = $row['ord'];
            $ord_new = $ord_old + $step;
            $sql     = $Db->query("SELECT `id` FROM `$table` WHERE `ord` = '$ord_new' AND `pid` = '$pid'");
            $row     = $sql->fetch();
            $id_new  = $row['id'];
            $sql     = $Db->query("SELECT MAX(`ord`) AS `ord` FROM `$table` WHERE `pid` = '$pid'");
            $row     = $sql->fetch();
            $ord_max = $row['ord'];
            $ord_min = 1;
            if ($ord_new >= $ord_min && $ord_new <= $ord_max){
                $Db->query("UPDATE `$table` SET `ord` = '$ord_new' WHERE `id` = '$id_old'");
                $Db->query("UPDATE `$table` SET `ord` = '$ord_old' WHERE `id` = '$id_new'");
            }
            else return false;
        }
        protected function getItemsJOIN($tableItems, $tableDescr, $lng){
            $join = '';
            for ($i=1; $i<$this->depth; $i++) $join .= "
                LEFT JOIN `$tableItems` AS `items$i` ON `items$i`.`pid` = `items".($i-1 == 0 ? '' : $i-1)."`.`id`
                LEFT JOIN `$tableDescr` AS `descr$i` ON `descr$i`.`id` = `items$i`.`id` AND `descr$i`.`lng` = '$lng'
            ";
            return $join;
        }
        protected function getItemsSELECT($fields){
            $select = '';
            for ($i=1; $i<$this->depth; $i++) foreach ($fields as $v) $select .= ', `'.substr($v, 0, strpos($v, '_')).$i.'`.`'.substr($v, strpos($v, '_')+1).'` AS `'.substr($v, 0, strpos($v, '_')).$i.'_'.substr($v, strpos($v, '_')+1).'`';
            return $select;
        }
        protected function getItemsORDER(){
            $order = '';
            for ($i=1; $i<$this->depth; $i++) $order .= ", `items$i`.`ord` ASC";
            return $order;
        }
        protected function NSnodeAdd($pid){   // type = 1) узел добавляется в родительский узел; 2) узел добавляется в корень; 3) добавляется первый узел в таблицу
            global $Db;
            $sql      = $Db->query("SELECT `level`, `keyRight` FROM `mod_{$this->module}_items` WHERE `id` = '$pid'");
            $row      = $sql->fetch();
            $level    = 1;
            $keyRight = 1;
            $type     = 3;
            if (!$row){
                $sql = $Db->query("SELECT MAX(`keyRight`) AS `keyRight` FROM `mod_{$this->module}_items`");
                $row = $sql->fetch();
                if ($row['ord'] != NULL){
                    $keyRight = $row['keyRight'] + 1;
                    $type     = 2;
                }
            }
            else{
                $level    = $row['level'] + 1;
                $keyRight = $row['keyRight'];
                $type     = 1;
            }
            if ($type == 1) $Db->query("UPDATE `mod_{$this->module}_items` SET `keyLeft` = `keyLeft` + 2, `keyRight` = `keyRight` + 2 WHERE `keyLeft` > $keyRight");
            if ($type == 1) $Db->query("UPDATE `mod_{$this->module}_items` SET `keyRight` = `keyRight` + 2 WHERE `keyRight` >= $keyRight AND `keyLeft` < $keyRight");
            $Db->query("INSERT INTO `mod_{$this->module}_items` (`keyLeft`, `keyRight`, `level`) VALUES('$keyRight', '$keyRight + 1', '$level')");
            return $Db->lastInsertId();
        }
        protected function NSnodeDel($id){
            global $Db;
            $sql      = $Db->query("SELECT `keyLeft`, `keyRight` FROM `mod_{$this->module}_items` WHERE `id` = '$id'");
            $row      = $sql->fetch();
            $Db->query("DELETE FROM `mod_{$this->module}_items` WHERE `keyLeft` >= {$row['keyLeft']} AND `keyRight` <= {$row['keyRight']}");
            $Db->query("UPDATE `mod_{$this->module}_items` SET `keyRight` = `keyRight` – ({$row['keyRight']} - {$row['keyLeft']} + 1) WHERE `keyRight` > {$row['keyRight']} AND `keyLeft` < {$row['keyLeft']}");
            $Db->query("UPDATE `mod_{$this->module}_items` SET `keyLeft` = `keyLeft` – ({$row['keyRight']} - {$row['keyLeft']} + 1), `keyRight` = `keyRight` – ({$row['keyRight']} - {$row['keyLeft']} + 1) WHERE `keyLeft` > {$row['keyRight']}");
        }
        protected function __destruct(){}
    }
?>