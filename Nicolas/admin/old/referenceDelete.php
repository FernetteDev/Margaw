<?php
include('../inc/php/classes/Configuration/information.php');
include('../inc/php/classes/Divers/autoload.php');
if (!isset($_GET['id'])) {
    header('location: referenceRead.php');
    die();
}

$oPage = new \Page\structure('Espace Administrateur', 'adminEntete.php', 'adminPied.php');
$intId = $_GET["id"];
$oConnexion = new \Bdd\Connexion();

$bln = isset($_POST["btnOui"]);
if ($bln) {
    $oPrepare = $oConnexion->oPDO->prepare("DELETE FROM reference WHERE id=:id");
    $oPrepare->bindValue(":id", $intId);
    $oPrepare->execute();
    ?>
    <section>
        <h2>Suppression effectuée avec succès !</h2>
        <a class="boutonConfirm" href="referenceRead.php">retour aux articles</a>
    </section>
    <?php
} else {
    $oPrepare = $oConnexion->oPDO->prepare("SELECT * FROM reference WHERE id=:id");
    $oPrepare->bindValue(':id', $intId);
    $oPrepare->execute();
    $aResultats = $oPrepare->fetch();
    ?>    
    <section>
        <h2>Etes-vous sûr de vouloir supprimer l'article ?</h2>
        <form action="" method="POST">
            <input class="boutonConfirm" type="submit" value="OUI" name="btnOui"/>
            <input class="boutonConfirm" type="button" value="NON" name="btnNon" onclick="history.back()"/>
        </form>
    </section>
    <?php
}