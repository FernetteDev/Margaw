<?php
include('inc/php/classes/Configuration/information.php');
include('inc/php/classes/Divers/autoload.php');
$oPage = new Page\structure('MarGaW - Vos commentaires - Nouvelle d\'auteur', 'entete.php', 'footer.php', '
<script src="inc/js/styles.js"></script>
<script src="inc/js/ckeditor/ckeditor.js"></script>
<script src="inc/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
	$(document).ready(function(){
        // remplacement du textarea par celui de CKEditor
        CKEDITOR.replace(\'editeur\');
        // Changement de la barre de scroll verticale
		$("article").mCustomScrollbar({
			theme:"minimal-dark",
			axis:"y"
			});
		});
</script>
');

$blnComValid = isset($_POST['btn']);

settype($strNom, 'string');
settype($strNomError, 'string');
settype($strCom, 'string');
settype($strComError, 'string');
settype($strHide, 'string');
settype($strValidation, 'string');
settype($blnErreur, 'bool');

if ($blnComValid) {
    $strNom = trim(strip_tags($_POST['txtNom']));
    if ($strNom == '') {
        $strNomError = "Votre nom ou pseudo est obligatoire.";
        $blnErreur = true;
    }
    $strCom = trim($_POST['txtCommentaire']);
    if ($strCom == '') {
        $strComError = "Votre commentaire est obligatoire.";
        $blnErreur = true;
    }
    if (!$blnErreur) {
        $oConnexion = new Bdd\Connexion();
        $oPrepare = $oConnexion->oPDO->prepare('INSERT INTO forum(message, pseudo) VALUES(:message, :pseudo)');
        $oPrepare->bindValue(':message', $strCom);
        $oPrepare->bindValue(':pseudo', $strNom);
        $oPrepare->execute();
        $strHide = 'hide';
        $strValidation = '
            <p>votre message a été envoyé avec succès</p><br>
            <a class="bouton" href="bioAuteur.php">retour aux commentaires</a>';
    }
}
?>
<section class="commentaire">
    <article>
        <?php echo $strValidation ?>
        <p class="<?php echo $strHide ?>">Commentaire des lecteurs :</p>
        <form action="" method="POST" class=" <?php echo $strHide ?>">
            <input type="text" name="txtNom" placeholder="entrer votre nom"/><?php echo ' ' . $strComError ?>
            <textarea id="editeur" name="txtCommentaire" placeholder="merci pour votre commentaire"></textarea><br>
            <input type="submit" value="ENVOYER" name="btn"/>
        </form>
    </article>
</section>