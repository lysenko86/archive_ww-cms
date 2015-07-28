<?php
/*
    Класс для работы с языками
*/
    class classLangs{
        private $langs       = array();
        private $lang        = '';
        private $langDefault = 'ru';
        private $sesVar      = 'lang';
        private $titles      = array();
        private $jsTitles    = array();
        public function __construct(){
            global $Db;
            $sql = $Db->query("SELECT * FROM `languages` WHERE `active` = '1' ORDER BY `key` ASC");
            while ($row = $sql->fetch()) $this->langs[$row['key']] = $row['title'];
            $this->lang = classSession::getVar($this->sesVar) ? classSession::getVar($this->sesVar) : $this->langDefault;
            $sql = $Db->query("SELECT `var`, `val` FROM `languages_titles` WHERE `key` = '$this->lang' ORDER BY `var` ASC");
            while ($row = $sql->fetch()){
                if (substr($row['var'], 0, 3) == 'js_') $this->jsTitles[$row['var']] = $row['val'];
                else $this->titles[$row['var']] = $row['val'];
            }
        }
        public function addModuleTitles($module){
            global $Db;
            $sql = $Db->query("SELECT `var`, `val` FROM `mod_{$module}_titles` WHERE `key` = '$this->lang' ORDER BY `var` ASC");
            while ($row = $sql->fetch()){
                if (substr($row['var'], 0, 3) == 'js_') $this->jsTitles['js_mod'.ucfirst($module).'_'.substr($row['var'], 3)] = $row['val'];
                else $this->titles['mod'.ucfirst($module).'_'.$row['var']] = $row['val'];
            }
        }
        public function getLangs(){ return $this->langs; }
        public function getLang(){ return $this->lang; }
        public function getLangTitle(){ return $this->langs[$this->lang]; }
        public function setLang($lng=false){
            $this->lang = $lng ? $lng : $this->langDefault;
            classSession::setVar($this->sesVar, $this->lang);
        }
        public function getTitle($key){ return $this->titles[$key]; }
        public function getJStitle($key){ return $this->jsTitles[$key]; }
        public function getTitles(){ return $this->titles; }
        public function getJStitles(){ return $this->jsTitles; }
        public function getAdmMenu(){
            $arr = array();
            foreach ($this->titles as $k=>$v) if (substr_count($k, 'adm_leftMenu_')) $arr[$k] = $v;
            return $arr;
        }
        public function __destruct(){}
    }
?>