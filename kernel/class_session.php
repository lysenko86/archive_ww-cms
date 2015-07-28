<?php
/*
    Класс для работы с сессиями
*/
    class classSession{
        private $SID       = 'PHPSESSID';
        private $sessionID = '';
        private $lifetime  = 0;
        public function __construct(){
            $this->lifetime = 60*60*9;
            ini_set('session.gc_maxlifetime', $this->lifetime);
            ini_set('session.cookie_lifetime', $this->lifetime);
            session_start();
            if (isset($_SESSION[$this->SID])){
                $this->sessionID = $_SESSION[$this->SID];
                foreach ($_SESSION as $k=>$v) if ($k != $this->SID){
                    if (is_array($v)) foreach ($v as $kk=>$vv) setcookie($k.'['.$kk.']', $vv, time() + $this->lifetime);
                    else setcookie($k, $v, time() + $this->lifetime);
                }
            }
            elseif (isset($_COOKIE[$this->SID])){
                $_SESSION        = $_COOKIE;
                $this->sessionID = $_SESSION[$this->SID];
            }
            else self::delSession();

        }
        public function getSessionID(){ return $this->sessionID; }
        static function delSession(){
            foreach ($_COOKIE as $k=>$v) setcookie($k, '', 0);
            session_unset();
            session_destroy();
        }
        static function getVar($var){
            if (isset($_SESSION[$var])) return $_SESSION[$var];
            else return false;
        }
        static function setVar($var, $val){ $_SESSION[$var] = $val; }
        static function delVar($var){
            unset($_SESSION[$var]);
            setcookie($var, '', 0);
        }
        public function __destruct(){}
    }
?>