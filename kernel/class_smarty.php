﻿<?php
/*
    Класс для работы с шаблонизатором Smarty, расширение Smarty
*/
    if (!include_once DIR_INCLUDES.'smarty-3.1.11/Smarty.class.php') fatalError('Не могу подключить шаблонизатор Smarty "/includes/smarty-3.1.11/Smarty.class.php"');
    class classSmarty extends Smarty{
        private $TPL         = array();
        private $breadCrumbs = array();
        private $template    = 'home.tpl';
        private $dirs        = array();
        public function classSmarty(){
            parent::__construct();
            $this->template_dir = DIR_TEMPLATE;
            $this->compile_dir  = DIR_TMP.'smarty_templates_c/';
            $this->cache_dir    = DIR_TMP.'smarty_cache/';
            $this->dirs         = array(
                'includes' => 'includes/',
                'kernel'   => 'kernel/',
                'modules'  => 'modules/',
                'template' => 'template/',
                'upload'   => 'upload/',
                'tmp'      => 'tmp/'
            );
        }
        public function getTPL(){ return $this->TPL; }
        public function setTPL($key, $var){ $this->TPL[$key] = $var; }
        public function initVars($vars){ foreach ($vars as $k=>$v) $this->assign($k, $v); }
        public function getTemplate(){ return $this->template; }
        public function setTemplate($template){ $this->template = $template; }
        public function getBreadCrumbs(){ return $this->breadCrumbs; }
        public function addBreadCrumbs($title, $link){ $this->breadCrumbs[] = array('link'=>$link, 'title'=>$title); }
        public function getDirs(){ return $this->dirs; }
        public function display(){ parent::display($this->getTemplate()); }
    }
?>