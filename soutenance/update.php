<?php
	require 'inc/class_php/class/Divers/autoload.php';
	\autoload\Autoloader::register();

	if (!isset($_GET['id'])) {
		header('location: read.php');
		die();
	}
	$oPage = new Page\structure('Soutenance Développeur d\'Application Multimédia 2016', 'entete.php', 'footer.php');
	
	$oConnection = new Database\Connexion();

	settype($strNom, 'string');
	settype($strNomError, 'string');
	settype($strTitre, 'string');
	settype($strTitreError, 'string');
	settype($strAdress, 'string');
	settype($strAdressError, 'string');
	settype($strEmail, 'string');
	settype($strEmailError, 'string');
	settype($strCode, 'string');
	settype($strCodeError, 'string');
	settype($blnError, 'bool');
	
	$blnConnect = isset($_POST['btn']);
	
	if ($blnConnect) {
		$strNom = trim(strip_tags($_POST['txtNom']));
		if($strNom == '') {
			$strNomError = "Obligatoire";
			$blnError = true;
		}
		$strTitre = trim(strip_tags($_POST['txtTitre']));
		if($strTitre == '') {
			$strTitreError = "Obligatoire";
			$blnError = true;
		}
		$strAdress = trim(strip_tags($_POST['txtAdress']));
		if($strAdress == '') {
			$strAdressError = "Obligatoire";
			$blnError = true;
		}
		$strEmail = trim(strip_tags($_POST['txtEmail']));
		if($strEmail == '') {
			$strEmailError = "Obligatoire";
			$blnError = true;
		}
		$strCode = trim(strip_tags($_POST['txtCode']));
		if($strCode == '') {
			$strCodeError = "Obligatoire";
			$blnError = true;
		}

		
		
		//$insert = $oConnection->update('soutenance_renseigement_doranco', 'nom,titre,adress_et_num,email,APE_SIRET', array($strNom,$strTitre,$strAdress,$strEmail,$strCode));

		if (!$blnError) {
			$update_true = $oConnection->update_true('soutenance_renseigement_doranco', 'nom,titre,adress_et_num,email,APE_SIRET', array($strNom,$strTitre,$strAdress,$strEmail,$strCode), '<h2>Les informations de changement ont bien été mise à jour.</h2>');
		}
	} else {
		$update_false = $oConnection->update_false('soutenance_renseigement_doranco', '*');
		$strNom = $update_false[0];
		$strTitre = $update_false[1];
		$strAdress = $update_false[2];
		$strEmail = $update_false[3];
		$strCode = $update_false[4];
		
	}
	//else {
	//	$oPrepare = $oConnection->getPDO()->prepare('SELECT * FROM soutenance_renseigement_doranco WHERE id=:id');
	//	$oPrepare->bindValue(':id', $intId);
	//	$oPrepare->execute();
	//	$aResultats = $oPrepare->fetch(PDO::FETCH_ASSOC);
	//	$strNom = $aResultats['nom'];
	//	$strTitre = $aResultats['titre'];
	//	$strAdress = $aResultats['adress_et_num'];
	//	$strEmail = $aResultats['email'];
	//	$strCode = $aResultats['APE_SIRET'];
	//}

?>

<h2>update un artiste</h2>
<form action="#" method="POST">
	<label>Section de l'artiste</label><br>
	<label>Nom</label>
	<input type="text" name="txtNom" value="<?php echo $strNom ?>"/><br>
	<?php echo $strNomError ?>
	<label>titre</label>
	<input type="text" name="txtTitre" value="<?php echo $strTitre ?>"/><br>
	<?php echo $strTitreError ?>
	<label>adress</label>
	<input type="text" name="txtAdress" value="<?php echo $strAdress ?>"/><br>
	<?php echo $strAdressError ?>
	<label>email</label>
	<input type="text" name="txtEmail" value="<?php echo $strEmail ?>"/><br>
	<?php echo $strEmailError ?>
	<label>Code</label>
	<input type="text" name="txtCode" value="<?php echo $strCode ?>"/><br>
	<?php echo $strCodeError ?>
	<input class="boutonConfirm" type="submit" value="ENVOYER" name="btn" />
</form>