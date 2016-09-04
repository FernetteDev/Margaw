<?php
namespace Configuration;
/**
 * Classe regroupant toutes les informations du site
 * @author Fernette Développement
 */
class Information {
    
    /**
    * Chemin racine du site.
    */
    const CHEMIN_RACINE = "C:/wamp/www/Margaw/soutenance/"; //Pour Dev
    //const CHEMIN_RACINE = "/home/vsftpd/margaw_l2h5/margaw_l2h5/"; // Pour serveur Prod
    const autoload_ext = '.php';
    /**
    * Base de données.
    */
    const BDD_BASE = "soutenance"; //Pour Dev
    //const BDD_BASE = "drecks_fzi4"; // Pour serveur Prod
    const BDD_USER = "root"; //Pour Dev
    //const BDD_USER = "drecks_fzi4"; // Pour serveur Prod
    const BDD_PASS = ""; //Pour Dev
    //const BDD_PASS = "15121984"; // Pour serveur Prod
    const BDD_HOTE = "localhost";
    const BDD_PORT = 3306; // Port par défaut de MySQL
}
