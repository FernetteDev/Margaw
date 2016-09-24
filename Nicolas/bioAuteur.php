<?php
	include('inc/php/classes/Configuration/information.php');
	include('inc/php/classes/Divers/autoload.php');
	$oPage = new Page\structure('MarGaW - Biographie / Remerciement - Nouvelle d\'auteur', 'entete.php', 'footer.php', '
	<script src="inc/js/styles.js"></script>
	<script src="inc/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		$(document).ready(function(){
			$("article").mCustomScrollbar({
				theme:"minimal-dark",
				axis:"y"
				});
			});
	</script>
	');
	$oConnexion = new Bdd\Connexion();
	$oResultat = $oConnexion->oPDO->query('SELECT * FROM forum ORDER BY id DESC');
	$aResultats = $oResultat->fetchAll(\PDO::FETCH_ASSOC);
?>
<section class="bioAuteur">
	<nav>
		<li><a href="#chap1">Commentaires</a></li>
		<li><a href="#chap2">Contact</a></li>
		<li><a href="#chap3">Remerciements</a></li>
	</nav>
	<article id="chap1">
		<aside>
			<p>Vous souhaitez laisser un commentaire ?</p>
			<button><a href="commentaire.php">Laisser un commentaire</a></button>
		</aside>
		<p>Commentaires des lecteurs :</p>
		<?php for ($i = 0; $i < count($aResultats); $i++) { ?>
            <ul>
            	<li><?php echo $aResultats[$i]['pseudo'] ?> :</li>
            	<li><?php echo $aResultats[$i]['message'] ?></li>
            	<li>Publié le : <?php echo $aResultats[$i]['datePublication'] ?><br>
            	<?php if ($aResultats[$i]['modifPublication'] != NULL) { ?>
                Le contenu de ce commentaire à été modéré le : <?php echo $aResultats[$i]['modifPublication'] ?>
                <?php } ?>
            	</li>
            </ul>
        <?php } ?>
	</article>
	<article id="chap2" class="hide">
		<p>Retrouvez Nicolas JOLIVALT sur :</p>
		<a href="https://www.facebook.com/Jolivaltn"><img id="facebook" src="inc/img/icon/facebook.jpg" alt="logo facebook" /></a>
		<a href="https://twitter.com/NJolivalt"><img id="twitter" src="inc/img/icon/twitter.jpg" alt="logo twitter" /></a>
		<a href="https://soundcloud.com/search?q=nicolas%20jolivalt"><img id="soundCloud" src="inc/img/icon/soundCloud.png" alt="logo soundCloud" /></a>
	</article>
	<article id="chap3" class="hide">
		<p>Remerciement de l'auteur :</p>
		<p>Merci à ########### pour ses mots et ses conseils précieux qui ont permis entre autres choses la description de MarGaW.</p>
		<br>
		<p>Merci à ma famille et mes amis qui ont pu suivre le cheminement de MarGaW de près ou de loin.</p>
		<br>
		<p>Merci à Frédéric FERNETTE pour son incroyable patience dans la construction du site, d’avoir pu lui donner cette ambiance propre à MarGaW.</p>
		<br>
		<p>L’aventure ne fait que commencer…</p>
		<br>
		<p>Nicolas JOLIVALT</p>
	</article>
</section>