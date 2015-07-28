<?php
/*
    Базовый модуль, единственный не съемный
*/
    class classEngine extends classModule{
        public function __construct(){ parent::__construct('engine'); }
        public function __destruct(){}
    }
?>