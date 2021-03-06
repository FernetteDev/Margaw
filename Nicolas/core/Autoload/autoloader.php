<?php
    namespace Autoload;
    include_once ('c:/wamp/www/Margaw/Nicolas/core/Configuration/information.php');
    use \Configuration\information;

    class autoloader {

        private static $loader;

        public static function register(){
            if(self::$loader == null){
                self::$loader = new self();
            }
            return self::$loader;
        }

        private function __construct(){
            spl_autoload_register(array(__CLASS__, 'autoload'));
        }

        private function autoload($class_name){
            $class_name = str_replace('\\', '/', $class_name);
            if(file_exists(information::CHEMIN_RACINE . 'core/' . $class_name . information::AUTOLOAD_EXT)){
                require_once(information::CHEMIN_RACINE . 'core/' . $class_name . information::AUTOLOAD_EXT);
            }
        }
    }