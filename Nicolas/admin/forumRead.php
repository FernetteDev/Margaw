<?php
	include('../inc/php/classes/Configuration/information.php');
	include('../inc/php/classes/Divers/autoload.php');
	$oPage = new \Page\structure('Espace Administrateur', 'adminEntete.php', 'adminPied.php');
	$oConnexion = new Bdd\Connexion();
	$oResultat = $oConnexion->oPDO->query('SELECT * FROM forum ORDER BY id ASC');
	$aResultats = $oResultat->fetchAll(\PDO::FETCH_ASSOC);
?>
<article>
	<section>
		<table>
			<caption>Liste des messages du forum</caption>
			<thead>
			<tr>
				<th>Pseudo</th>
				<th>Message</th>
				<th>Date de publication</th>
				<th>Date de modification</th>
				<th>Modifier</th>
				<th>Effacer</th>
			</tr>
			</thead>
			<tbody>
			<?php
				for ($i = 0; $i < count($aResultats); $i++) {
					?>
					<tr>
						<td><?php echo $aResultats[$i]['pseudo']; ?></td>
						<td><?php echo $aResultats[$i]['message']; ?></td>
						<td><?php echo $aResultats[$i]['datePublication']; ?></td>
						<td><?php echo $aResultats[$i]['modifPublication']; ?></td>
						<td><a href="forumUpdate.php?id=<?php echo $aResultats[$i]['id']; ?>" class="glyphicon glyphicon-pencil"></a></td>
						<td><a href="forumDelete.php?id=<?php echo $aResultats[$i]['id']; ?>" class="glyphicon glyphicon-trash"></a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</section>
</article>