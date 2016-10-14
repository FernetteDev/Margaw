<?php
	include('../inc/php/classes/Configuration/information.php');
	include('../inc/php/classes/Divers/autoload.php');
	if (!isset($_GET['id'])) {
		header('location: forumRead.php');
		die();
	}
	$intId = $_GET["id"];
	$oPage = new \Page\structure('Espace Administrateur', 'adminEntete.php', 'adminPied.php', ');
        // Changement de la barre de scroll verticale
		$("article").mCustomScrollbar({
			theme:"minimal-dark",
			axis:"y"
			});
		});
	</script>
	\'');
	settype($strPseudo, 'string');
	settype($strPseudoError, 'string');
	settype($strCom, 'string');
	settype($strComError, 'string');
	settype($strValidation, 'string');
	settype($blnError, 'bool');
	$blnFrmEnvoye = isset($_POST['btn']);
	$oConnexion = new Bdd\Connexion();
	if ($blnFrmEnvoye) {
		$blnChoix = isset($_POST['txtNom']);
		$strPseudo = trim(strip_tags($_POST['txtNom']));
		if ($strPseudo == '') {
			$strPseudoError = 'le pseudo est obligatoire';
			$blnError = true;
		}
		$strCom = trim($_POST['txtCommentaire']);
		if ($strCom == '') {
			$strComError = 'le descriptif est obligatoire';
			$blnError = true;
		}
		if (!$blnError) {
			$oPrepare = $oConnexion->oPDO->prepare('UPDATE forum SET pseudo=:pseudo , message=:message WHERE id=:id');
			$oPrepare->bindValue(':pseudo', $strPseudo);
			$oPrepare->bindValue(':message', $strCom);
			$oPrepare->bindValue(':id', $intId);
			$oPrepare->execute();
			?>
			<section>
				<h2>La modération à été effectué avec succès !</h2>
				<a href="forumRead.php" class="bouton">Retour aux articles</a>
			</section>
			<?php
			$blnChoix = true;
		}
	} else {
		$oPrepare = $oConnexion->oPDO->prepare('SELECT * FROM forum WHERE id = :id');
		$oPrepare->bindValue(':id', $intId);
		$oPrepare->execute(); //execution de la requête
		$aResultats = $oPrepare->fetch(\PDO::FETCH_ASSOC); // mise en tableau du résultat de la requête.
		//var_dump($aResultats['pseudo']); //visualisation de la requête.
		$strPseudo = $aResultats['pseudo'];
		$strCom = $aResultats['message'];
	} ?>
		<section id="ref1">
			<h2>Modération des commentaires lecteurs</h2>
			<form action="" method="POST">
				<input type="text" value="<?php echo $strPseudo ?>" name="txtNom" placeholder="entrer votre nom"/><?php echo ' ' . $strPseudoError . ' ' ?><?php echo ' ' . $strComError ?>
				<textarea name="txtCommentaire" id="editeur" placeholder="merci pour votre commentaire" rows="5" cols="40"><?php echo $strCom ?></textarea><br>
				<input type="submit" value="ENVOYER" name="btn"/>
			</form>
		</section>