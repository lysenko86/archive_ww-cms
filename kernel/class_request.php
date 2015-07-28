<?php
/*
    Класс для работы с данными из GET и POST, их обработкой, передачей
*/
    class classRequest{
        public function __construct(){}
        static function get($var=false, $default=false){
            if ($var === false) return $_GET;
            elseif (isset($_GET[$var])) return $_GET[$var];
            else return $default;
        }
        static function post($var=false, $default=false){
            if ($var === false) return $_POST;
            elseif (isset($_POST[$var])) return $_POST[$var];
            else return $default;
        }
        static function isPost(){ return count($_POST) ? true : false; }
        static function isGet(){ return count($_GET) ? true : false; }
        static function testVar($var, $template='', $empty=false){
            $var = trim($var);
            if (empty($var) && !$empty) return false;
            else{
                if ($template && !empty($var)){
                    if (preg_match($template, $var)) return $var;
                    else return false;
                }
                if (empty($var)) return true;
                else return $var;
            }
        }
        static function testArr($arr, $template='', $empty=false){
            $check = true;
            foreach ($arr as $k=>$v){
                $arr[$k] = trim($v);
                if (empty($arr[$k]) && !$empty) $check = false;
                elseif ($template && !empty($arr[$k]) && !preg_match($template, $arr[$k])) $check = false;
            }
            return $check;
        }
        public function __destruct(){}
    }
?>