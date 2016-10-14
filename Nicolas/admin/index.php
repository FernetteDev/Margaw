<?php
	include('../core/Autoload/autoloader.php');
	\Autoload\autoloader::register();
	$oAdmin = new \Structure\headAdmin();
	$oAdmin->titre('bienvenue sur l\'administration');
	$oAdmin->robot('noindex,nofollow');
	$oAdmin->css(array('reset','bootstrap.min','bootstrap-theme.min'));
	$oAdmin->script(array('jquery-1.11.3.min','bootstrap.min'));
	$oAdmin->afficher_head();
	include_once('nav_bar_admin.php');
?>

<section>

	<h1>Bienvenue sur la page d'administration du site de MarGaW</h1>

</section>
