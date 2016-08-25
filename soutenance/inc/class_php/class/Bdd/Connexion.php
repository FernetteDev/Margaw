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
         * @param       $table string nom de la table à remplir
         * @param       $fields string nom des champs de la table à remplir
         * @param array $variable array nom des variables à associer aux champs
         * L'ordre des champs doit être le même que celui des variables
         */
        public function insert($table, $fields, $variable){
            $field = explode(',', $fields);
            for($i=0; $i<count($field); $i++){
                $prepare_field[$i] = substr_replace($field[$i], ':', 0, 0);
            }
            $prepare_fields = implode(',', $prepare_field);
            $requete = $this->getPDO()->prepare('INSERT INTO ' . $table . ' (' . $fields . ') VALUES(' . $prepare_fields . ')');
            for($i=0; $i < count($prepare_field); $i++){
                $requete->bindValue($prepare_field[$i], $variable[$i]);
            }
            $requete->execute();
        }


        public function update_true($table, $fields, $variable, $confirm) {
            $get_Id = $_GET["id"];
            $field = explode(',', $fields);
            for($i = 0; $i < count($field); $i ++) {
                $prepare_field[$i] = substr_replace($field[$i], ':', 0, 0);
            }
            for($i = 0; $i < count($field); $i ++) {
                $prepare_fields[$i] = $field[$i] . '=' . $prepare_field[$i];
            }
            $prepare_fields = implode(',', $prepare_fields);
            $requete = $this->getPDO()->prepare('UPDATE ' . $table . ' SET ' . $prepare_fields . ' WHERE id=:id');
            $requete->bindValue(':id', $get_Id);
            for($i = 0; $i < count($prepare_field); $i ++) {
                $requete->bindValue($prepare_field[$i], $variable[$i]);
            }
            $requete->execute();
            echo $confirm;
        }


        public function update_false($table, $fields){
            $a=0; $cle=''; $valeur='';
            $get_Id = $_GET["id"];

            $requete = $this->getPDO()->prepare('SELECT ' . $fields . ' FROM ' . $table . ' WHERE id=:id');
            //var_dump($get_Id); // ok
            $requete->bindValue(':id', $get_Id);
            $requete->execute();
            //$variables = explode(',', $variable);
            $aResultats = $requete->fetch(PDO::FETCH_ASSOC);
            unset($aResultats['id']);
            //var_dump($aResultats);
            foreach($aResultats as $key => $value){
                $cle[$a] = $key;
                $valeur[$a] = $value;
                $a++;
            }
            return $valeur;
        }


        public function delete($isset, $table, $field_if_false, $question, $msg_confirm) {
            $getId = $_GET["id"];
            if($isset) {
                $delete = $this->getPDO()->prepare('DELETE FROM ' . $table . ' WHERE id=:id');
                $delete->bindValue(":id", $getId);
                $delete->execute();
                 echo $msg_confirm;
            } else {
                $prepare = $this->getPDO()->prepare('SELECT ' . $field_if_false . ' FROM '. $table . ' WHERE id=:id');
                $prepare->bindValue(':id', $getId);
                $prepare->execute();
                //$resultats = $prepare->fetch();
                echo $question;
                //var_dump($resultats);
                //return $resultats;
            }
        }
        /**
         * Déconnexion de la base de données par le destructeur.
         */
        public function __destruct() {
            $this->pdo_connect = null;
        }
    }