<?php
include('../inc/php/classes/Configuration/information.php');
include('../inc/php/classes/Divers/autoload.php');
if (!isset($_GET['id'])) {
    header('location: referenceCreate.php');
    die();
}
$intId = $_GET["id"];
$oPage = new \Page\structure('Espace Administrateur', 'adminEntete.php', 'adminPied.php');
$blnModifRef = isset($_POST['btn']);
settype($strReference, 'string');
settype($strReferenceErreur, 'string');
settype($strHide, 'string');
settype($strValidation, 'string');
settype($blnError, 'bool');
$oConnexion = new Bdd\Connexion();
if ($blnModifRef) {
    //récupération du choix de conserver l'image ou non.
    $blnChoix = isset($_POST['txtReference']);
    $strReference = trim(strip_tags($_POST['txtReference']));
    if ($strReference == '') {
        $strReferenceError = 'le pseudo est obligatoire';
        $blnError = true;
    }
    if (!$blnError) {
        $oPrepare = $oConnexion->oPDO->prepare('UPDATE reference SET categorie=:categorie WHERE id=:id');
        $oPrepare->bindValue(':categorie', $strReference);
        $oPrepare->bindValue(':id', $intId);
        $oPrepare->execute();
        $strHide = 'hide';
        $strValidation = '<p>Le nom de la catégorie a bien été modifié en "' . $strReference . '".</p><a href="referenceRead.php">retour à la modification des catégories de "référence" de l\'auteur</a>';
        $blnChoix = true;
    }
} else {
    $oPrepare = $oConnexion->oPDO->prepare('SELECT * FROM reference WHERE id = :id');
    $oPrepare->bindValue(':id', $intId);
    $oPrepare->execute(); //execution de la requête
    $aResultats = $oPrepare->fetch(\PDO::FETCH_ASSOC); // mise en tableau du résultat de la requête.
    //var_dump($aResultats['pseudo']); //visualisation de la requête.
    $strReference = $aResultats['categorie'];
}
?>
    <section>
    <h2>Modification du nom de la catégorie</h2>
       <h3>Entrez le nouveau nom de la catégorie</h3>
        <?php echo $strValidation ?>
            <form action="" method="POST" class="<?php echo $strHide ?>">
               <label id="changeRef">L'ancien nom est <?php echo $strReference ?></label>
                <input type="text" name="txtReference" value="" placeholder="Nom de la catégorie" />
                <?php echo $strReferenceErreur ?><br>
                    <input type="submit" value="ENVOYER" name="btn" />
            </form>
    </section>