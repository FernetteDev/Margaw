<?php
	require 'inc/class_php/class/Divers/autoload.php';
	\autoload\Autoloader::register();
	
	if (!isset($_GET['id'])) {
		header('location: read.php');
		die();
	}
	$oPage = new Page\structure('Soutenance Développeur d\'Application Multimédia 2016', 'entete.php', 'footer.php');
	
	$oConnection = new Database\Connexion();

	$delete = $oConnection->delete($bln = isset($_POST["btnOui"]), 'soutenance_renseigement_doranco', '*',
	'<h2>Etes-vous sûr de vouloir supprimer l\'article ?</h2>
	<form action="" method="POST">
		<input type="submit" value="OUI" name="btnOui"/>
		<input type="button" value="NON" name="btnNon" onclick="history.back()"/>
	</form>',
	'<h2>Suppression effectuée avec succès !</h2>');

