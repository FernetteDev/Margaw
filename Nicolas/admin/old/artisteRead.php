<?php
	include('../inc/php/classes/Configuration/information.php');
	include('../inc/php/classes/Divers/autoload.php');
	$intIdCategorie = isset($_GET['id']) ? (int)$_GET['id']: 0;
	$oPage = new Page\structure('Espace Administrateur', 'adminEntete.php', 'adminPied.php', '
	<script src="../../inc/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
	$(document).ready(function(){
        $("html").mCustomScrollbar({
            theme:"minimal-dark",
            axis:"y"
        });
	});
	</script>
	');
	$oConnexion = new Bdd\Connexion();
	$oResultat = $oConnexion->oPDO->query('SELECT * FROM reference ORDER BY id ASC');
	$aResultats = $oResultat->fetchAll(\PDO::FETCH_ASSOC);
?>
<section>
	<h2>Liste des artistes par catégories</h2>
	<ul>
		<?php
			for ($i = 0; $i < count($aResultats); $i++) {
				if ($intIdCategorie == 0) {
					$intIdCategorie = (int)$aResultats[$i]['id'];
				}
				?>
				<li><a href="artisteRead.php?id=<?php echo $aResultats[$i]['id']?>"><?php echo $aResultats[$i]['categorie']?></a></li>
			<?php } ?>
	</ul>
	<hr />
	<?php
		$oPrepare = $oConnexion->oPDO->prepare('SELECT * FROM artistes WHERE idReference = :idReference ORDER BY id ASC');
		$oPrepare->bindValue(':idReference', $intIdCategorie, \PDO::PARAM_INT);
		$oPrepare->execute();
		$aResultats = $oPrepare->fetchAll(\PDO::FETCH_ASSOC);
	?>
	<table>
		<tr>
			<th>Nom de l'artiste</th>
			<th>Bio de l'artiste</th>
			<th>oeuvre de l'artiste</th>
			<th>Naissance de l'artiste</th>
			<th>Decès de l'artiste</th>
			<th>Date de création de la publication</th>
			<th>Date de modification de la publication</th>
			<th>Modification</th>
			<th>Effacer</th>
		</tr>
		<?php
			for ($i = 0; $i < count($aResultats); $i++) {
				?>
				<tr>
					<td><?php echo $aResultats[$i]['nom']; ?></td>
					<td><?php echo $aResultats[$i]['bioAuteur']; ?></td>
					<td><?php echo $aResultats[$i]['oeuvre']; ?></td>
					<td><?php echo $aResultats[$i]['moisNaissance'] . ' ' . $aResultats[$i]['anneeNaissance']; ?></td>
					<td><?php echo $aResultats[$i]['moisDeces'] . ' ' . $aResultats[$i]['anneeDeces']; ?></td>
					<td><?php echo $aResultats[$i]['creation']; ?></td>
					<td><?php echo $aResultats[$i]['modification']; ?></td>
					<td><a href="artisteUpdate.php?id=<?php echo $aResultats[$i]['id']; ?>" class="glyphicon glyphicon-pencil"></a></td>
					<td><a href="artisteDelete.php?id=<?php echo $aResultats[$i]['id']; ?>" class="glyphicon glyphicon-trash"></a></td>
				</tr>
			<?php } ?>
	</table>
</section>