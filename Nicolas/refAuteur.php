<?php
	include('inc/php/classes/Configuration/information.php');
	include('inc/php/classes/Divers/autoload.php');
	$intIdCategorie = isset($_GET['id']) ? (int)$_GET['id'] : 0;
	$oPage = new Page\structure('MarGaW - Références culturelles de l\'auteur - Nouvelle d\'auteur', 'entete.php', 'footer.php', '
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
	$oConnexion = new \Bdd\Connexion();
	$oResultats = $oConnexion->oPDO->query('SELECT * FROM reference ORDER BY id ASC');
	$aResultats = $oResultats->fetchAll(\PDO::FETCH_ASSOC);
?>
<section class="refAuteur">
	<nav>
		<?php 
            for ($i = 0; $i < count($aResultats); $i++) {
				if ($intIdCategorie == 0) {
					$intIdCategorie = (int)$aResultats[$i]['id'];
				} ?>
				<li>
                    <a href="refAuteur.php?id=<?php echo $aResultats[$i]['id'] ?>"><?php echo $aResultats[$i]['categorie'] ?></a>
                </li>
        <?php } ?>
	</nav>
	<article>
		<?php
			//connexion artistes : table dépendante de navigation
			$oResultat = $oConnexion->oPDO->prepare('SELECT * FROM artistes WHERE idReference = :idReference ORDER BY id ASC');
			$oResultat->bindValue(':idReference', $intIdCategorie, \PDO::PARAM_INT);
			$oResultat->execute();
			$aResultat = $oResultat->fetchAll(\PDO::FETCH_ASSOC);

			for ($j = 0; $j < count($aResultat); $j++) {
				?>
				<aside>
					<h3><a href="<?php echo $aResultat[$j]['bioAuteur']; ?>"><?php echo $aResultat[$j]['nom'] ?> 
					</a>(<?php echo $aResultat[$j]['moisNaissance'] . ' ' . $aResultat[$j]['anneeNaissance'] ?><?php if ($aResultat[$j]['anneeDeces'] != 0) { ?><?php echo ' ~ ' . $aResultat[$j]['moisDeces'] . ' ' . $aResultat[$j]['anneeDeces'] ?>
					<?php } ?> )</h3>
					<h4>Oeuvres de l'artiste :</h4>
					<p><?php echo $aResultat[$j]['oeuvre'] ?></p>
					
				</aside>
        <?php } ?>
	</article>
</section>
