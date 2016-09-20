<?php
    /**
     * Created by PhpStorm.
     * User: Fernette Developpeme
     * Date: 13/07/2016
     * Time: 18:09
     */
    namespace Database;
    use Configuration\Information;
    use PDO;

    class Connexion extends Information {

        public $pdo_connect;
        private $db_name;
        private $user;
        private $pass;
        private $host;

        /**
         * Connexion constructor.
         * @param string $db_name nom de la base de données
         * @param string $user utilisateur de la base
         * @param string $pass mot de passe de l'utilisateur
         * @param string $host hôte d'hébergement
         */
        public function __construct($db_name = parent::BDD_BASE, $user = parent::BDD_USER, $pass = parent::BDD_PASS, $host = parent::BDD_HOTE) {
            $this->db_name = $db_name;
            $this->user = $user;
            $this->pass = $pass;
            $this->host = $host;
        }

        /**
         * @return null|PDO initialisation à la base de donnée ou persistance de la connection initiale
         */
        public function getPDO() {
            if($this->pdo_connect === null){
                $pdo_connect = new PDO(
                'mysql:dbname=' . parent::BDD_BASE . ';host=' . parent::BDD_HOTE . ';charset=UTF8' . ';port=' . parent::BDD_PORT,
                parent::BDD_USER,
                parent::BDD_PASS,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $this->pdo_connect = $pdo_connect;
            }
            return $this->pdo_connect;
        }

        /**
         * @param $statement string requête sql
         * Permet une requête de lecture simple de la base de données
         * @return array
         */
        public function query($statement){
            $requete = $this->getPDO()->query($statement);
            $donnees = $requete->fetchAll(PDO::FETCH_ASSOC);
            return $donnees;
        }

        /**
         * Déconnexion de la base de données par le destructeur.
         */
        public function __destruct() {
            $this->pdo_connect = null;
        }
    }