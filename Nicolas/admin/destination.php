<?php

include('../inc/php/classes/Configuration/information.php');
include('../inc/php/classes/Divers/autoload.php');

$oPage = new \Page\structure('Espace Administrateur', 'adminEntete.php', 'adminPied.php');
$oConnexion = new Bdd\Connexion();
$oResultat = $oConnexion->oPDO->query('SELECT identifiant, motdepasse FROM identification ORDER BY id ASC');
$aResultats = $oResultat->fetchAll(pdo::FETCH_ASSOC);

// var_dump($aResultats);
for ($i = 0; $i < count($aResultats); $i++) {
    //Récupération des Identifiants et mot de passe en base de donnée
    $strLogin = $aResultats[$i]['identifiant'];
    $strMdp = $aResultats[$i]['motdepasse'];
    // on teste si nos variables sont définies
    if (isset($_POST['login']) && isset($_POST['pwd'])) {
        // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
        if ($strLogin == $_POST['login'] && $strMdp == $_POST['pwd']) {
            // dans ce cas, tout est ok, on peut démarrer notre session
            session_start();
            // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['pwd'] = $_POST['pwd'];
            // on redirige notre visiteur vers une page de notre section membre
            header('location: destination.php');
        } else {
            // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
            echo '<body onLoad="alert(\'Membre non reconnu...\')">';
            // puis on le redirige vers la page d'accueil
            echo '<meta http-equiv="refresh" content="0;URL=login.php">';
        }
    } else {
        echo 'Les variables du formulaire ne sont pas déclarées.';
    }
}