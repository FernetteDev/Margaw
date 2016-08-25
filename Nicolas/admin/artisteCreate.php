<?php
	include('../inc/php/classes/Configuration/information.php');
	include('../inc/php/classes/Divers/autoload.php');

	$oPage = new \Page\structure('Espace Administrateur', 'adminEntete.php', 'adminPied.php', '<script src="../inc/js/styles.js"></script>');

	settype($intIdReference, 'int');
	settype($strIdReferenceError, 'string');
	settype($strNom, 'string');
	settype($strNomError, 'string');
	settype($strBio, 'string');
	settype($strBioError, 'string');
	settype($strOeuvre, 'string');
	settype($strOeuvreError, 'string');
	settype($strMoisNaissance, 'string');
	settype($intAnneeNaissance, 'int');
	settype($strNaissanceError, 'string');
	settype($strMoisDeces, 'string');
	settype($intAnneeDeces, 'int');
	settype($strDecesError, 'string');
	settype($strHide, 'string');
	settype($strValidation, 'string');
	settype($blnError, 'bool');

	$tab_mois = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");

	$oConnexion = new Bdd\Connexion();
	$oResultat = $oConnexion->oPDO->query('SELECT * FROM reference ORDER BY categorie ASC');
	$aResultats = $oResultat->fetchAll(pdo::FETCH_ASSOC);

	$blnCreaArtist = isset($_POST['btn']);
	if ($blnCreaArtist) {
		$intIdReference = trim(strip_tags($_POST['txtReference']));
		$strNom = trim(strip_tags($_POST['txtNom']));
		if ($strNom == '') {
			$strNomError = "Obligatoire pour créer un artiste.";
			$blnError = true;
		}
		$strBio = trim(strip_tags($_POST['txtBio']));
		if ($strBio == '') {
			$strBioError = "Obligatoire pour créer un artiste.";
			$blnError = true;
		}
		$strOeuvre = trim(strip_tags($_POST['txtOeuvre']));
		if ($strOeuvre == '') {
			$strOeuvreError = "Obligatoire pour créer un artiste.";
			$blnError = true;
		}
		$strMoisNaissance = trim(strip_tags($_POST['moisNaissance']));
		$intAnneeNaissance = trim(strip_tags($_POST['anneeNaissance']));
		if ($strMoisNaissance == '' || $intAnneeNaissance == '') {
			$strNaissanceError = "Veuillez renseigner la date de naissance de l'artiste.";
			$blnError = true;
		}
		$strMoisDeces = trim(strip_tags($_POST['moisDeces']));
		$intAnneeDeces = trim(strip_tags($_POST['anneeDeces']));

		if (!$blnError) {
			$oPrepare = $oConnexion->oPDO->prepare('INSERT INTO artistes(idReference, nom, bioAuteur, oeuvre,  moisNaissance, anneeNaissance, moisDeces, anneeDeces) VALUES(:idReference, :nom, :bioAuteur, :oeuvre, :moisNaissance, :anneeNaissance, :moisDeces, :anneeDeces)');
			$oPrepare->bindValue(':idReference', $intIdReference);
			$oPrepare->bindValue(':nom', $strNom);
			$oPrepare->bindValue(':bioAuteur', $strBio);
			$oPrepare->bindValue(':oeuvre', $strOeuvre);
			$oPrepare->bindValue(':moisNaissance', $strMoisNaissance);
			$oPrepare->bindValue(':anneeNaissance', $intAnneeNaissance);
			$oPrepare->bindValue(':moisDeces', $strMoisDeces);
			$oPrepare->bindValue(':anneeDeces', $intAnneeDeces);
			$oPrepare->execute();
			$strHide = 'hide';
			?>
			<section>
				<h2>L'artiste et sa biographie on bien été créé</h2>
				<a class="boutonConfirm" href="artisteCreate.php">retour à la création des Artistes</a>
			</section>
			<?php
		}
	}
?>
<section>
	<h2>Ajouter un artiste</h2>
	<?php echo $strValidation ?>
	<form action="" method="POST" class="<?php echo $strHide ?>">
		<label>Section de l'artiste</label>
		<select name="txtReference">
			<?php
				for ($i = 0; $i < count($aResultats); $i++) {
					$strSelected = $intIdCategorie == $tResultats[$i]['id'] ? ' selected="selected"' : '';
					?>
					<option value="<?php echo $aResultats[$i]['id'] . $strSelected; ?>">
						<?php echo $aResultats[$i]['categorie']; ?>
					</option>
				<?php } ?>
		</select>
		<?php echo $strIdReferenceError ?>
		<label>Nom de l'artiste</label>
		<input type="text" name="txtNom" value="<?php echo $strNom ?>" placeholder="Nom de l'artiste" />
		<?php echo $strNomError ?>
		<label>Lien de la Biographie de l'artiste</label>
		<input type="text" name="txtBio" value="<?php echo $strBio ?>" placeholder="Lien Wikipédia de la bio de l'auteur" />
		<?php echo $strBioError ?>
		<label>Diverses oeuvres l'artiste</label>
		<input type="text" name="txtOeuvre" value="<?php echo $strOeuvre ?>" placeholder="Nom de la catégorie" />
		<?php echo $strOeuvreError ?>
		<label>Date de naissance de l'artiste</label>
		<select name="moisNaissance">
			<option></option>
			<?php
				foreach ($tab_mois as $MonthBorn) {
					echo '<option value="' . $MonthBorn . '">' . $MonthBorn . '</option>';
				} ?>
		</select>
		<select name="anneeNaissance">
			<option></option>
			<?php
				for ($y = date('Y'); $y >= 1730; $y--) {
					echo '<option value="' . $y . '">' . $y . '</option>';
				} ?>
		</select>
		<?php echo $strNaissanceError ?>
		<label>Date du décès de l'artiste</label>
		<select name="moisDeces">
			<option></option>
			<?php
				foreach ($tab_mois as $MonthDie) {
					echo '<option value="' . $MonthDie . '">' . $MonthDie . '</option>';
				} ?>
		</select>
		<select name="anneeDeces">
			<option></option>
			<?php
				for ($y = date('Y'); $y >= 1730; $y--) {
					echo '<option value="' . $y . '">' . $y . '</option>';
				} ?>
		</select>
		<input class="boutonConfirm" type="submit" value="ENVOYER" name="btn" />
	</form>
</section>