<?php
/*
    Класс для работы с адресной строкой
*/
    class classUrl{
        private $http   = 'http';
        private $route  = 'engine/home';
        private $action = '';
        private $module = '';
        public function __construct(){
            if ($_SERVER['HTTP_X_FORWARDED_PROTO'] != $this->http) classWWcms::reLoad($this->http.'://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
            $firstVar = key($_GET);
            if ($firstVar != NULL && $firstVar == 'adminka') classWWcms::reLoad('/?route=engine/adminka');
            elseif ($firstVar != NULL && $firstVar == 'siteoff') classWWcms::reLoad('/?route=engine/siteoff');
            elseif ($firstVar != NULL && $firstVar != 'route') fatalError('Ссылка не соответсвует шаблону.');
            $this->route  = !empty($_GET['route']) ? $_GET['route'] : $this->route;
            $arr          = explode('/', $this->route);
            $this->module = strtolower($arr[0]);
            $this->action = !empty($arr[1]) ? $arr[1] : false;
        }
        public function getModule(){ return $this->module; }
        public function getAction(){ return $this->action; }
        public function __destruct(){}
    }
?>