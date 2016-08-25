<?php
	include('../inc/php/classes/Configuration/information.php');
	include('../inc/php/classes/Divers/autoload.php');
	if (!isset($_GET['id'])) {
		header('location: artisteCreate.php');
		die();
	}
	$intId = $_GET["id"];
	$tab_mois = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
	$oPage = new \Page\structure('Espace Administrateur', 'adminEntete.php', 'adminPied.php', '<script src="../inc/js/script.js"></script>');

	settype($strIdReferenceError, 'string');
	settype($strNomError, 'string');
	settype($strBioError, 'string');
	settype($strOeuvreError, 'string');
	settype($strNaissanceError, 'string');
	settype($strMortError, 'string');
	settype($strHide, 'string');
	settype($strValidation, 'string');
	settype($blnError, 'bool');

	$oConnexion = new Bdd\Connexion();
	$blnModifRef = isset($_POST['txtNom']);
	if ($blnModifRef) {
		$intIdReference = $_POST['txtReference'];
		$strNom = trim(strip_tags($_POST['txtNom']));
		if ($strNom == '') {
			$strNomError = "Obligatoire pour créer une rubrique.";
			$blnError = true;
		}
		$strBio = trim(strip_tags($_POST['txtBio']));
		if ($strBio == '') {
			$strBioError = "Obligatoire pour créer une rubrique.";
			$blnError = true;
		}
		$strOeuvre = trim(strip_tags($_POST['txtOeuvre']));
		if ($strOeuvre == '') {
			$strOeuvreError = "Obligatoire pour créer une rubrique.";
			$blnError = true;
		}
		$strMoisNaissance = trim(strip_tags($_POST['moisNaissance']));
		if ($strMoisNaissance == '') {
			$strNaissanceError = "veuillez renseigner la date de naissance de l'artiste.";
			$blnError = true;
		}
		$intAnneeNaissance = $_POST['anneeNaissance'];
		if ($intAnneeNaissance == '') {
			$strNaissanceError = "veuillez renseigner la date de naissance de l'artiste.";
			$blnError = true;
		}
		$strMoisDeces = trim(strip_tags($_POST['moisDeces']));
		$intAnneeDeces = $_POST['anneeDeces'];
		if (!$blnError) {
			$oPrepare = $oConnexion->oPDO->prepare('UPDATE artistes SET idReference=:idReference, nom=:nom, bioAuteur=:bioAuteur, oeuvre=:oeuvre, moisNaissance=:moisNaissance, anneeNaissance=:anneeNaissance, moisDeces=:moisDeces, anneeDeces=:anneeDeces WHERE id=:id');
			$oPrepare->bindValue(':id', $intId);
			$oPrepare->bindValue(':nom', $strNom);
			$oPrepare->bindValue(':oeuvre', $strOeuvre);
			$oPrepare->bindValue(':bioAuteur', $strBio);
			$oPrepare->bindValue(':moisDeces', $strMoisDeces);
			$oPrepare->bindValue(':anneeDeces', $intAnneeDeces);
			$oPrepare->bindValue(':idReference', $intIdReference);
			$oPrepare->bindValue(':moisNaissance', $strMoisNaissance);
			$oPrepare->bindValue(':anneeNaissance', $intAnneeNaissance);
			$oPrepare->execute();
			$strHide = 'hide';
			?>
			<section>
				<h2>Les informations de : "<?php echo $strNom ?>" ont bien été mise à jour.</h2>
				<a class="boutonConfirm" href="artisteRead.php">retour aux artistes</a>
			</section>
			<?php
		}
	} else {
		$oPrepare = $oConnexion->oPDO->prepare('SELECT * FROM artistes WHERE id = :id');
		$oPrepare->bindValue(':id', $intId);
		$oPrepare->execute();
		$aResultats = $oPrepare->fetch(\PDO::FETCH_ASSOC);
		$strNom = $aResultats['nom'];
		$strOeuvre = $aResultats['oeuvre'];
		$strBio = $aResultats['bioAuteur'];
		$strMoisDeces = $aResultats['moisDeces'];
		$intAnneeDeces = $aResultats['anneeDeces'];
		$intIdReference = $aResultats['idReference'];
		$strMoisNaissance = $aResultats['moisNaissance'];
		$intAnneeNaissance = $aResultats['anneeNaissance'];
	}
?>

<section>
	<h2>Modifier un artiste</h2>
	<?php echo $strValidation ?>
	<form action="" method="POST" class="<?php echo $strHide ?>">
		<label>Section de l'artiste</label>
		<select name="txtReference">
			<?php
				$oResultat = $oConnexion->oPDO->query('SELECT * FROM reference ORDER BY categorie ASC');
				$aResultats = $oResultat->fetchAll(PDO::FETCH_ASSOC);
				for ($i = 0; $i < count($aResultats); $i++) {
					// Détection du choix initial :
					$strSelected = ($intIdReference == $aResultats[$i]['id'] ? 'selected="selected"' : '');
					?>
					<option value="<?php echo $aResultats[$i]['id'] ?>" <?php echo $strSelected ?>>
						<?php echo $aResultats[$i]['categorie'] ?>
					</option>
				<?php } ?>
		</select>
		<?php echo $strIdReferenceError ?>
		<label>Nom de l'artiste</label>
		<input type="text" name="txtNom" value="<?php echo $strNom ?>" placeholder="Nom de l'auteur" />
		<?php echo $strNomError ?>
		<label>Lien de la Biographie de l'artiste</label>
		<input type="text" name="txtBio" value="<?php echo $strBio ?>" placeholder="Lien Wikipédia de la bio de l'auteur" />
		<?php echo $strBioError ?>
		<label>Diverses oeuvres l'artiste</label>
		<input type="text" name="txtOeuvre" value="<?php echo $strOeuvre ?>" placeholder="Nom de la catégorie" />
		<?php echo $strOeuvreError ?>
		<label>Date de naissance de l'artiste</label>
		<select name="moisNaissance">
			<option><?php echo $strMoisNaissance ?></option>
			<?php
				foreach ($tab_mois as $MonthBorn) { echo '<option value="' . $MonthBorn . '">' . $MonthBorn . '</option>'; } ?>
		</select>
		<select name="anneeNaissance">
			<option><?php echo $intAnneeNaissance ?></option>
			<?php
				for ($y = date('Y'); $y >= 1730; $y--) { echo '<option value="' . $y . '">' . $y . '</option>'; } ?>
		</select>
		<?php echo $strNaissanceError ?>

		<label>Date du décès de l'artiste</label>
		<select name="moisDeces">
			<option><?php echo $strMoisDeces ?></option>
			<?php
				foreach ($tab_mois as $MonthDie) { echo '<option value="' . $MonthDie . '">' . $MonthDie . '</option>'; } ?>
		</select>
		<select name="anneeDeces">
			<option><?php echo $intAnneeDeces ?></option>
			<?php
				for ($y = date('Y'); $y >= 1730; $y--) { echo '<option value="' . $y . '">' . $y . '</option>'; } ?>
		</select>

		<input type="submit" value="ENVOYER" name="btn" />
	</form>
</section>