<?php
/*
    Класс для работы с БД, расширение PDO
*/
    class classDb extends PDO{
        private $driver   = 'mysql';
        private $host     = '';
        private $base     = '';
        private $login    = '';
        private $password = '';
        public function __construct(){
            $arr = file(DIR_ROOT.'kernel/dbconfig.sql');
            foreach ($arr as $k=>$v) $arr[$k] = trim($v);
            $this->host     = $arr[0];
            $this->base     = $arr[1];
            $this->login    = $arr[2];
            $this->password = $arr[3];
            try{ parent::__construct("$this->driver:host=$this->host;dbname=$this->base", $this->login, $this->password); }
            catch (Exception $e){ fatalError('Не могу подключиться к базе данных.'); }
            $this->setAttribute(parent::ATTR_DEFAULT_FETCH_MODE, parent::FETCH_ASSOC);
            $this->setAttribute(parent::ATTR_ERRMODE, parent::ERRMODE_SILENT);
            $this->setAttribute(parent::ATTR_PERSISTENT, FALSE);
            $this->query("SET CHARACTER_SET_CLIENT = 'utf8'");
            $this->query("SET CHARACTER_SET_RESULTS = 'utf8'");
            $this->query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
            return true;
        }
        public function query($sql){
            if (!$pdoStatement = parent::query($sql)){
                $error = $this->errorInfo();
                fatalError("Ошибка в SQL-запросе: $sql.<br/>Код: {$error[0]}.<br/>Код драйвера: {$error[1]}.<br/>Текст: {$error[2]}.");
            }
            else return $pdoStatement;
        }
        static function getAvailableDrivers($driver = NULL){
            $drivers = parent::getAvailableDrivers();
            if ($driver === NULL) return $drivers;
            else return array_search($driver, $drivers);
        }
        static function dateTimeFromSQL($dateTime){
            $date = explode('-', substr($dateTime, 0, 10));
            $time = substr($dateTime, 10);
            return $date[2].'.'.$date[1].'.'.$date[0].($time ? " $time" : '');
        }
        static function dateTimeToSQL($dateTime){
            $date = explode('.', substr($dateTime, 0, 10));
            $time = substr($dateTime, 10);
            return $date[2].'-'.$date[1].'-'.$date[0].($time ? " $time" : '');
        }
        public function checkIsValueInDB($table, $where=''){
            $sql = $this->query("SELECT COUNT(*) AS `count` FROM `$table` $where");
            $row = $sql->fetch();
            return $row['count'] > 0 ? true : false;
        }
        public function __destruct(){}
    }
?>