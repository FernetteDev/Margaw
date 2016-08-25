<?php
    namespace Bdd;
    use Configuration\Information;
    use PDO;

    class Connexion extends Information {
        /**
         * future instance de la Classe PDO
         * @var \PDO
         */
        public $oPDO = null;
        
        /**
         * Connexion à la base de données
         */
        public function __construct() {
            if($this->oPDO == null){
                $this->oPDO = new PDO('mysql:dbname=' . parent::BDD_BASE . ';host=' . parent::BDD_HOTE . ';charset=UTF8;port=' . parent::BDD_PORT, parent::BDD_USER, parent::BDD_PASS);
                $this->oPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } else {
                $this->oPDO = new PDO('mysql:dbname=' . parent::BDD_BASE . ';host=' . parent::BDD_HOTE . ';charset=UTF8;port=' . parent::BDD_PORT, parent::BDD_USER, parent::BDD_PASS);
            }
        }
        
        /**
         * Déconnexion de la base de données
         */
        public function __destruct() {
            $this->oPDO = null;
        }
    }