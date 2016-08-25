<?php
	include('../inc/php/classes/Configuration/information.php');
	include('../inc/php/classes/Divers/autoload.php');
	$oPage = new Page\structure('Espace Administrateur', 'adminEntete.php', 'adminPied.php');
	$oConnexion = new Bdd\Connexion();
	$oResultat = $oConnexion->oPDO->query('SELECT * FROM reference ORDER BY id ASC');
	$aResultats = $oResultat->fetchAll(\PDO::FETCH_ASSOC);
?>
<section>
	<h2>Liste des messages du forum</h2>
	<table>
		<tr>
			<th>Référence</th>
			<th>Date de création de la publication</th>
			<th>Date de modification de la publication</th>
			<th>Modification</th>
			<th>Effacer</th>
		</tr>
		<?php for ($i = 0; $i < count($aResultats); $i++) { ?>
			<tr>
				<td><?php echo $aResultats[$i]['categorie']; ?></td>
				<td><?php echo $aResultats[$i]['creation']; ?></td>
				<td><?php echo $aResultats[$i]['modification']; ?></td>
				<td><a href="referenceUpdate.php?id=<?php echo $aResultats[$i]['id']; ?>" class="glyphicon glyphicon-pencil"></a></td>
				<td><a href="referenceDelete.php?id=<?php echo $aResultats[$i]['id']; ?>" class="glyphicon glyphicon-trash"></a></td>
			</tr>
		<?php } ?>
	</table>
</section>



