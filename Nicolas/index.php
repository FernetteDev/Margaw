<?php
	include('core/Autoload/autoloader.php');
	Autoload\autoloader::register();
	$oHead = new \Structure\head();
	$oHead->titre('Margaw');
	$oHead->description();
	$oHead->css(array('reset','bootstrap.min','bootstrap-theme.min','jquery.mCustomScrollbar.min','main'));
	$oHead->script(array('jquery-1.11.3.min','jquery.mCustomScrollbar.concat.min'));
	$oHead->javascript(
			'<script>
				$(document).ready(function(){
					$("article").mCustomScrollbar({
						theme:"minimal-dark",
						axis:"y"
					});
				});
			</script>'
		);
	$oHead->afficher_head();
?>
<header>
	<a href="index.php"><img src="inc/img/logo.png" alt="logo de margaw"></a>
	<h2>Mar<span class="rose">G</span>aW</h2>
</header>
<nav class="nav_general">
	<ul>
		<li><a id="index" href="index.php">Qui est Mar<span class="rose">G</span>aW ?</a></li>
		<li><a id="nouvelle" href="nouvelle.php">Des nouvelles de Mar<span class="rose">G</span>aW </a></li>
		<li><a id="reference" href="refAuteur.php">Influences de l'auteur</a></li>
		<li><a id="biographie" href="bioAuteur.php">Et l'auteur ?</a></li>
	</ul>
</nav>
<section class="index">
	<article>
		<p>Margaw... Qui es-tu, Margaw ?</p>
		<br>
		<p>Je t'appelle et tu ne réponds pas. Je te cherche et tu ne me trouves pas. Réalité ou fiction ? Tu as laissé des traces de sang à user tes poings contre le béton sale d'une cave sordide où se noient tous les espoirs, toutes les illusions, tous les rêves d'une vie. Es-tu un rêve ou un cauchemar, Margaw. Les méandres de la psyché, ses recoins les plus sinistres. On t'a tout fait ou peut-être rien.</p>
		<br>
		<p>Tu visites un labyrinthe tortueux, torturé, tourmenté. Tu es un homme, une femme, un enfant. Qu'importe. Tu es un lieu de petite mort, hanté d'ombres amies et de sombres zombies</p>
		<br>
		<p>Ce lieu est gris, noir, rouge parfois. Il dit la peur. Mais il dit l'amour aussi. Avec force et douceur, la douceur d'une âme trainée dans la boue, d'un être piégé dans le malheur. Ni l'exil ni les paradis artificiels n'y pourront rien.</p>
		<br>
		<p>La résilience viendra d'ailleurs, d'un autre, de cet autre qui s'est cru anéanti lui aussi, mais ça c'est une autre histoire. Margaw.</p>
		<footer>"Nicolas JOLIVALT"</footer>
	</article>
</section>