<?php
	require 'inc/class_php/class/Divers/autoload.php';
	\autoload\Autoloader::register();

	$oPage = new Page\structure('Soutenance Développeur d\'Application Multimédia 2016', 'entete.php', 'footer.php');

	$oConnexion = new Database\Connexion();

	$requete = $oConnexion->query('SELECT * FROM soutenance_renseigement_doranco ORDER BY id ASC');
?>

<section>
	<table>
		<?php
			for ($i = 0; $i < count($requete); $i++) {
				?>
				<tr>
					<td><?php echo $requete[$i]['nom'] ?></td>
					<td><?php echo $requete[$i]['titre'] ?></td>
					<td><?php echo $requete[$i]['adress_et_num'] ?></td>
					<td><?php echo $requete[$i]['email'] ?></td>
					<td><?php echo $requete[$i]['APE_SIRET'] ?></td>
					<td><a href="update.php?id=<?php echo $requete[$i]['id']; ?>">Modification</a></td>
					<td><a href="delete.php?id=<?php echo $requete[$i]['id']; ?>">Effacer</a></td>
				</tr>
			<?php 
			} 
		?>
	</table>
</section>