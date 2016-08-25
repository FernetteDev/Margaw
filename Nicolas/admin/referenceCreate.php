<?php
	include('../inc/php/classes/Configuration/information.php');
	include('../inc/php/classes/Divers/autoload.php');
	$oPage = new \Page\structure('Espace Administrateur', 'adminEntete.php', 'adminPied.php');


	settype($strReference, 'string');
	settype($strReferenceErreur, 'string');
	settype($strHide, 'string');
	settype($strValidation, 'string');
	settype($blnErreur, 'bool');

	$blnCreaRef = isset($_POST['btn']);
	if ($blnCreaRef) {
		$strReference = trim(strip_tags($_POST['txtReference']));
		if ($strReference == '') {
			$strReferenceErreur = "Obligatoire pour créer une rubrique.";
			$blnErreur = true;
		}
		if (!$blnErreur) {
			$oConnexion = new Bdd\Connexion();
			$oPrepare = $oConnexion->oPDO->prepare('INSERT INTO reference(categorie) VALUES(:categorie)');
			$oPrepare->bindValue(':categorie', $strReference);
			$oPrepare->execute();
			$strHide = 'hide';
			?>
			<section>
				<h2>La catégorie <?php echo $strReference ?> effectué avec succès !</h2>
				<a class="boutonConfirm" href="referenceCreate.php">retour à la création d'article</a>
			</section>
			<?php

		}
	}
?>
<section>
	<h2>Ajouter une catégorie</h2>
	<?php echo $strValidation ?>
	<form action="" method="POST" class="<?php echo $strHide ?>">
		<input type="text" name="txtReference" value="<?php echo $strReference ?>" placeholder="Nom de la catégorie" />
		<?php echo $strReferenceErreur ?>
		<br>
		<input  class="boutonConfirm" type="submit" value="ENVOYER" name="btn" />
	</form>
</section>