<?php
    /**
     * Created by PhpStorm.
     * User: Fernette Developpeme
     * Date: 13/07/2016
     * Time: 15:33
     */
    namespace autoload;

    include_once('c:/wamp/www/soutenance/inc/class_php/class/Configuration/information.php');
    use Configuration\Information;
    class Autoloader extends Information {

        /**
         * définition des path de l'autoloader
         */
        private $chemin_repertoires = array(
            /**
             * coeur du site
             * accès vers les dossiers contenant :
             *  -> les classes de connexion
             */
        'inc/class_php/class/Bdd/',
        'inc/class_php/class/Page/',
        );

        public static $loader;

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
            $chemins = $this->chemin_repertoires;
            // Evite les problèmes de conversion sous Linux et Mac
            $class_name = str_replace('\\', '/', $class_name);
            // Sépare le namespace et la classe.
            $class_name = explode('/', $class_name);
            // sélectionne le dernier élément qui correspond à la classe
            $class_name = end($class_name);
            //Si elle trouve la même classe dans un répertoire plus tard, elle sera ignoré ! Parce que require once n'appellera la classe qu'une seule fois
            for($i = 0; $i < count($chemins); $i++){
                if(file_exists(Information::CHEMIN_RACINE . $chemins[$i] . $class_name . Information::autoload_ext)){
                    //die(Information::CHEMIN_RACINE . $chemins[$i] . $class_name . Information::autoload_ext);
                    require_once(Information::CHEMIN_RACINE . $chemins[$i] . $class_name . Information::autoload_ext);
                }
            }
        }
    }
