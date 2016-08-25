<?php
include('../inc/php/classes/Configuration/information.php');
include('../inc/php/classes/Divers/autoload.php');
$oPage = new \Page\structure('Espace Administrateur', 'adminEntete.php', 'adminPied.php');

$blnEnvoie = isset($_POST['btn']);

settype($strPrenom, 'string');
settype($strPrenomError, 'string');
settype($strNom, 'string');
settype($strNomError, 'string');
settype($strIdentifiant, 'string');
settype($strIdentifiantError, 'string');
settype($strMail, 'string');
settype($strMailError, 'string');
settype($strMdp, 'string');
settype($strMdpError, 'string');
settype($strQuestion, 'string');
settype($strQuestionError, 'string');
settype($strReponse, 'string');
settype($strReponseError, 'string');
settype($intDateDeNaissance, 'string');
settype($strDateDeNaissanceError, 'string');
settype($strHide, 'string');
settype($strValidation, 'string');
settype($blnError, 'bool');

if ($blnEnvoie) {
    
    $strNom = trim(strip_tags($_POST['nom']));
    if ($strNom == '') {
        $strNomError = "<span></span>";
        $blnError = true;
    }
    $strPrenom = trim(strip_tags($_POST['prenom']));
    if ($strPrenom == '') {
        $strPrenomError = "<span></span>";
        $blnError = true;
    }
    $strIdentifiant = trim(strip_tags($_POST['identifiant']));
    if ($strIdentifiant == '') {
        $strIdentifiantError = "<span></span>";
        $blnError = true;
    }
    $strMail = trim(strip_tags($_POST['mail']));
    if ($strMail == '') {
        $strMailError = "<span></span>";
        $blnError = true;
    }
    $strMdp = trim(strip_tags($_POST['mdp']));
    if ($strMdp == '') {
        $strMdpError = "<span></span>";
        $blnError = true;
    }
    $strQuestion = trim(strip_tags($_POST['question']));
    if ($strQuestion == '') {
        $strQuestionError = "<span></span>";
        $blnError = true;
    }
    $strReponse = trim(strip_tags($_POST['reponse']));
    if ($strReponse == '') {
        $strReponseError = "<span></span>";
        $blnError = true;
    }
    $intDateDeNaissance = trim(strip_tags($_POST['datedenaissance']));
    if ($intDateDeNaissance == '') {
        $strDateDeNaisanceError = "<span></span>";
        $blnError = true;
    }
    
    if (!$blnError) {
        $oConnexion = new Bdd\Connexion();
        $oPrepare = $oConnexion->oPDO->prepare('INSERT INTO identification(nom, prenom, identifiant, questionsecrete, motdepasse, email, datedenaissance, reponsesecrete) VALUES(:nom, :prenom, :identifiant, :questionsecrete, :motdepasse, :email, :datedenaissance, :reponsesecrete)');
        $oPrepare->bindValue(':nom', $strNom);
        $oPrepare->bindValue(':prenom', $strPrenom);
        $oPrepare->bindValue(':identifiant', $strIdentifiant);
        $oPrepare->bindValue(':motdepasse', $strMdp);
        $oPrepare->bindValue(':questionsecrete', $strQuestion);
        $oPrepare->bindValue(':reponsesecrete', $strReponse);
        $oPrepare->bindValue(':email', $strMail);
        $oPrepare->bindValue(':datedenaissance', $intDateDeNaissance);
        $oPrepare->execute();
        $strHide = 'hide';
        ?>
    <section>
        <h2>L'artiste et sa biographie on bien été créé</h2>
        <a class="boutonConfirm" href="index.php">retour à la création des Artistes</a>
    </section>
    <?php
    }
}
?>
        <section>
            <h2>Ajouter un artiste</h2>
            <?php echo $strValidation ?>
                <form action="" method="POST" class="borderRadius10px <?php echo $strHide ?>">
                    <label>Nom</label>
                    <input type="text" name="nom" value="<?php echo $strNom ?>" placeholder="Nom" />
                    <?php echo $strNomError ?>
                    <label>Prénom</label>
                    <input type="text" name="prenom" value="<?php echo $strPrenom ?>" placeholder="Prénom" />
                    <?php echo $strPrenomError ?>
                    <label>Votre Identifiant</label>
                    <input type="text" name="identifiant" value="<?php echo $strIdentifiant ?>" placeholder="Votre Identifiant" />
                    <?php echo $strIdentifiantError ?>
                    <label>Votre mot de passe</label>
                    <input type="text" name="mdp" value="<?php echo $strMdp ?>" placeholder="Votre Mot de passe" />
                    <?php echo $strMdpError ?>
                    <label>Votre email</label>
                    <input type="text" name="mail" value="<?php echo $strMail ?>" placeholder="Votre e-mail" />
                    <?php echo $strMailError ?>
                    <label>La question secrète</label>
                    <input type="text" name="question" value="<?php echo $strQuestion ?>" placeholder="Choisissez votre question secrète" />
                    <?php echo $strQuestionError ?>
                    <label>Votre réponse</label>
                    <input type="text" name="reponse" value="<?php echo $strReponse ?>" placeholder="Choisissez votre réponse" />
                    <?php echo $strReponseError ?>
                    <label>Votre date de naissance</label>
                    <input type="date" name="datedenaissance" value="<?php echo $intDateDeNaissance ?>" placeholder="Inscrivez votre date" />
                    <?php echo $strDateDeNaissanceError ?>
                    <input class="boutonConfirm" type="submit" value="ENVOYER" name="btn" />
                </form>
        </section>