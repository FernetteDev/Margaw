<?php
include('../inc/php/classes/Configuration/information.php');
include('../inc/php/classes/Divers/autoload.php');
$oPage = new \Page\structure('Espace Administrateur', 'adminEntete.php', 'adminPied.php');
?>
<form action="destination.php" method="post">
    <input type="text" name="login" placeholder="login"/>
    <input type="password" name="pwd" placeholder="password"/>
    <input type="submit" value="connexion"/>
</form>