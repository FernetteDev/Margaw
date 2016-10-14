<?php
	include('../core/Autoload/autoloader.php');
	\Autoload\autoloader::register();
	$oAdmin = new \Structure\headAdmin();
	$oAdmin->titre('bienvenue sur l\'administration');
	$oAdmin->robot('noindex,nofollow');
	$oAdmin->css(array('reset','bootstrap.min','bootstrap-theme.min'));
	$oAdmin->script(array('jquery-1.11.3.min','bootstrap.min'));
	$oAdmin->afficher_head();

	isset($_GET['p']) ? $_GET['p'] : $_GET['p'] = 'read';

	if($_GET['p'] === 'read' || $_GET['p'] === 'create' || $_GET['p'] === 'update' || $_GET['p'] === 'delete'){
		include_once('nav_bar_admin.php');
		if ($_GET['p'] === 'read'){
			include_once('logo_titre/read.php');
		}elseif($_GET['p'] === 'create'){
			include_once('logo_titre/create.php');
		}elseif($_GET['p'] === 'update'){
			include_once('logo_titre/update.php');
		}elseif($_GET['p'] === 'delete'){
			include_once('logo_titre/delete.php');
		}
	}
	else{
		include_once('../page404.php');
	}

?>

<a href="logo_titre.php?p=read">read</a><br>
<a href="logo_titre.php?p=create">create</a><br>
<a href="logo_titre.php?p=update">update</a><br>
<a href="logo_titre.php?p=delete">delete</a><br>









