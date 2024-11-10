<?php
if (!defined('SESSION_INCLUDED')) {
    define('SESSION_INCLUDED', true);

    class Session {
        public static function init(){
            if (version_compare(phpversion(), '5.4.0', '<')) {
                if (session_id() == '') {
                    session_start();
                }
            } else {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
            }
        }

        public static function set($key, $val){
            $_SESSION[$key] = $val;
        }

        public static function get($key){
            if (isset($_SESSION[$key])) {
                return $_SESSION[$key];
            } else {
                return false;
            }
        }

        public static function checkLogin(){
            self::init();
            if (self::get("login") == true) {
                if (self::get("Role") === 'admin') {
                    header("Location:ad_review/index.php");
                    exit();
                } elseif (self::get("Role") === 'User') {
                    header("Location:index.php");
                    exit();
                }
            }
        }

        public static function checkSession(){
            self::init();
            if (self::get("login") == false) {
                self::destroy();
                header("Location:login.php");
                exit();
            }
        }

        public static function destroy(){
            session_destroy();
            header("Location:login.php");
            exit();
        }

        public static function destroyAd(){
            session_destroy();
            header("Location:../login.php");
            exit();
        }
    }
}
?>
