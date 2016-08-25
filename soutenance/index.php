<?php
	require 'inc/class_php/class/Divers/autoload.php';
	\autoload\Autoloader::register();

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

		$insert = $oConnection->insert('soutenance_renseigement_doranco', 'nom,titre,adress_et_num,email,APE_SIRET', array($strNom,$strTitre,$strAdress,$strEmail,$strCode));
	}
?>

<h2>Ajouter un artiste</h2>
<form action="" method="POST" class="">
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