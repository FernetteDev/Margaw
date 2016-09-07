<?php
	require('inc/class_php/class/Divers/autoload.php');
	autoload\Autoloader::register();
	require('inc/html2pdf/vendor/autoload.php');
	$oConnexion = new Database\Connexion();
	$requete = $oConnexion->query('SELECT * FROM soutenance_renseigement_doranco ORDER BY id ASC');
	//var_dump($requete);
	//die();
	ob_start();
?>
	<style>
		table {
			width:100%;
		}
		.couverture table {
			margin-top: 50px;
		}
		.sommaire_titre {
			margin-top: 25px;
		}
		.sommaire_categories {
			margin-top: 5px;
		}
		.sommaire_titre td {
			font-size: 22px;
		}
		.sommaire_categories td {
			font-size: 18px;
		}
		.page_section {
			background-color: darkgrey;
			font-size:22px;
			margin-top: 40px;
		}
		.page_titre {
			color: #832a63;
			font-size:18px;
			margin-top: 15px;
			text-decoration-line: underline;
		}
		.page_contenu {
			font-size: 14px;
			margin-top: 10px;
			padding-right: 10%;
		}
		.blue {
			color: royalblue;;
		}

	</style>

	<page pageset="new" class="couverture" style="text-align: center;" backtop="80px" backbottom="100px" backleft="30px" backright="30px">
		<table>
			<tr><td style="width:100%;"><img style="width:250px" src="inc/img/logo_doranco.jpg" alt="Logo centre de formation Doranco Espace
			Multimédia"></td></tr>
		</table>
		<table>
			<tr><td style="width: 100%"><h1>Mémoire présenté devant le jury</h1></td></tr>
			<tr><td style="font-size: 14pt;">pour l'obtention du titre de</td></tr>
		</table>
		<table>
			<tr><td style="width: 100%"><strong style="font-size: 16pt">Développeur d'Application Multimédia</strong></td></tr>
			<tr><td><strong style="font-size: 12pt; margin-top: 5px">Option Développement</strong></td></tr>
			<tr><td>Niveau III (Bac+2)</td></tr>
		</table>
		<table>
			<tr><td style="width: 100%"><h3><strong>FERNETTE Frédéric</strong></h3></td></tr>
			<tr><td style="font-size:12pt; margin-top:-4px; margin-bottom:4px">http://margaw.livehost.fr</td></tr>
			<tr><td>PARIS, le <?php echo date('d/m/Y'); ?></td></tr>
		</table>
		<table>
			<tr>
				<td style="width: 50%;"><img style="width:150px" src="inc/img/logo-isq.jpg" alt="logo de la Qualification des Services
				Intellectuels"></td>
				<td style="width: 50%;"><img style="width:150px" src="inc/img/logo_ffp.jpg" alt="logo de la Fédération de la Formation Professionnelle"></td>
			</tr>
		</table>
		<page_footer style="text-align: center;">
			<table>
				<tr><td style="font-size=10pt;width:100%; color: red;"><?php echo $requete[0]['nom'] ?></td></tr>
				<tr><td style="font-size=10pt;color: darkred"><?php echo $requete[0]['titre'] ?></td></tr>
				<tr><td style="font-size:8pt"><?php echo $requete[0]['adress_et_num'] ?></td></tr>
				<tr><td style="font-size:8pt"><?php echo $requete[0]['email'] ?></td></tr>
				<tr><td style="font-size:8pt"><?php echo $requete[0]['APE_SIRET'] ?></td></tr>
			</table>
		</page_footer>
	</page>

	<!-- ####################### -->
	<!-- ## couverture validé ## -->
	<!-- ####################### -->

	<page pageset="new" class="sommaire" backtop="80px" backbottom="80px" backleft="30px" backright="30px">

		<page_header style="margin-top: 40px">
			<table>
				<tr>
					<td style="text-align:center; width:100%; font-size:26px;">SOMMAIRE</td>
				</tr>
			</table>
		</page_header>

		<table class="sommaire_titre" style="margin-top: 40px">
			<tr>
				<td>1 - Présentation personnelle</td>
			</tr>
		</table>

		<table class="sommaire_categories">
			<tr><td style="width: 5%;"></td>
				<td style="width: 35%;">- Coordonnées</td>
				<td style="width: 50%;">...............................................................</td>
				<td style="width: 10%;">Page 3</td>
			</tr>
			<tr>
				<td></td>
				<td>- Historique</td>
				<td>...............................................................</td>
				<td>Page 3</td>
			</tr>
		</table>

		<table class="sommaire_titre">
			<tr>
				<td>2 - Présentation du projet</td>
			</tr>
		</table>

		<table class="sommaire_categories">
			<tr>
				<td style="width:5%;"></td>
				<td style="width:35%;">- Description du site</td>
				<td style="width:50%;">...............................................................</td>
				<td style="width:10%;">Page 3</td>
			</tr>
			<tr>
				<td></td>
				<td>- Mon rôle</td>
				<td>...............................................................</td>
				<td>Page 3</td>
			</tr>
			<tr>
				<td></td>
				<td>- Objectif du site</td>
				<td>...............................................................</td>
				<td>Page 3</td>
			</tr>
			<tr>
				<td></td>
				<td>- Zoning</td>
				<td>...............................................................</td>
				<td>Page 4</td>
			</tr>
			<tr>
				<td></td>
				<td>- Arborescence du site</td>
				<td>...............................................................</td>
				<td>Page 5</td>
			</tr>
		</table>

		<table class="sommaire_titre">
			<tr>
				<td>3 - Développement du site</td>
			</tr>
		</table>

		<table class="sommaire_categories">
			<tr>
				<td style="width:5%;"></td>
				<td style="width:35%;">- Environnement du site</td>
				<td style="width:50%;">...............................................................</td>
				<td style="width:10%">Page 6</td>
			</tr>
			<tr>
				<td></td>
				<td>- Charte graphique</td>
				<td>...............................................................</td>
				<td>Page 7</td>
			</tr>
			<tr>
				<td></td>
				<td>- Structure du site</td>
				<td>...............................................................</td>
				<td>Page</td>
			</tr>
			<tr>
				<td></td>
				<td>- Langage de programmation</td>
				<td>...............................................................</td>
				<td>Page</td>
			</tr>
			<tr>
				<td></td>
				<td>- Hébergement</td>
				<td>...............................................................</td>
				<td>Page</td>
			</tr>
		</table>

		<table class="sommaire_titre">
			<tr>
				<td>4 - Information annexe</td>
			</tr>
		</table>

		<table class="sommaire_categories">
			<tr>
				<td style="width:5%;"></td>
				<td style="width:35%;">- Coût / investissement</td>
				<td style="width:50%;">...............................................................</td>
				<td style="width:10%;">Page</td>
			</tr>
		</table>

		<table class="sommaire_titre">
			<tr>
				<td>5 - Conclusion</td>
			</tr>
		</table>

		<table class="sommaire_categories">
			<tr>
				<td style="width:5%;"></td>
				<td style="width:35%;">- Conclusion</td>
				<td style="width:50%;">...............................................................</td>
				<td style="width:10%;">Page</td>
			</tr>
			<tr>
				<td></td>
				<td>- Remerciement</td>
				<td>...............................................................</td>
				<td>Page</td>
			</tr>
		</table>

		<page_footer>
			<table style="text-align:right;">
				<tr>
					<td style="width:95%;">Page 2</td>
					<td style="width:5%;"></td>
				</tr>
			</table>
		</page_footer>

	</page>

	<!-- ##################### -->
	<!-- ## sommaire validé ## -->
	<!-- ##################### -->

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">

		<page_header></page_header>

		<table class="page_section" style="margin-top:0;">
			<tr>
				<td style="width:100%;">1 - Présentation personnelle</td>
			</tr>
		</table>

		<table class="page_titre">
			<tr>
				<td style="width:5%;"></td>
				<td style="width:95%;">Coordonnées</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%;"></td>
				<td style="width:90%;">FERNETTE Frédéric</td>
			</tr>
			<tr>
				<td></td>
				<td>1 Square des coquelicots</td>
			</tr>
			<tr>
				<td></td>
				<td>91370 Verrières le Buisson</td>
			</tr>
			<tr>
				<td></td>
				<td>Tel : 06.69.56.02.16</td>
			</tr>
			<tr>
				<td></td>
				<td>E-mail : drecks.fernette@gmail.com</td>
			</tr>
		</table>

		<table class="page_titre">
			<tr>
				<td style="width:5%;"></td>
				<td style="width:95%;">Historique</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%;"></td>
				<td>Cursus: Diplomé du CAP & BEP Hotellerie - Restauration</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:90%;">
					Evolution actuelle : Ancien cuisinier de formation, j'ai toujours eu une grande passion pour l'informatique. Suite à
					divers évènement personnel, j'ai donc choisi de prendre un tournant dans ma carrière professionnelle.
					J'ai donc choisi de repartir dans la formation d'une branche qui me passionne.
					Pour cela, j'ai donc choisi le centre Doranco pour effectuer ma formation et depuis Septembre 2015.
					Je cherche donc à augmenter mes compétences afin d'être en phase avec à la fois le marché du travail et la voix professionnelle que j'ai choisi, ce que je vais développer tout au long de ce projet.
				</td>
			</tr>
		</table>

		<table class="page_section">
			<tr>
				<td>2 - Présentation du projet</td>
			</tr>
		</table>
		<table class="page_titre">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">Description du site</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%"></td>
				<td style="width:90%">
					L'adresse du site web : http://margaw.livehost.fr<br><br>
					Le site porte le nom du protagoniste : Margaw. On va y suivre durant neuf chapitre cette personne aux idées noire dont on ne sait rien du tout.
				</td>
			</tr>
		</table>

		<table class="page_titre">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%;">Mon rôle</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%;"></td>
				<td style="width:90%;">
					Pour développer ce projet dans son intégralité, j'ai dû revétir plusieurs "casquettes" :<br><br>
					<span class="blue">Chef de projet :</span>Gestion de projet depuis l'établissement du cahier des charges jusqu'à la mise en ligne du site.<br>
					<span class="blue">Graphiste :</span>Graphiste Création du logo de Margaw (Illustrator).<br>
					<span class="blue">Webdesigner :</span>Création du design du site et intégration des données.<br>
					<span class="blue">Développeur :</span>Développement du code du site en PHP5, HTML5/CSS3.<br>
				</td>
			</tr>
		</table>

		<table class="page_titre">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">Objectif du site</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%"></td>
				<td style="width:90%">
					Le site à pour objectif de permettre à l'auteur de réaliser son rêve en de contant l'histoire de Margaw un
					personnage énigmatique et autobiographique aux travers de neuf chapitres.
				</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%"></td>
				<td style="width:90%">
					Ce site est aussi pour moi une façon de montrer mes compétences au travers de divers techniques de programmation que je
					développerai tout au long de cette présentation.
				</td>
			</tr>
		</table>

		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 3</td>
					<td style="width: 5%;"></td>
				</tr>
			</table>
		</page_footer>

	</page>

	<!-- ################### -->
	<!-- ## page 3 validé ## -->
	<!-- ################### -->

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">

		<page_header></page_header>

		<table class="page_titre" style="margin-top: 0">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">Zoning</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%"></td>
				<td style="width:90%">Schéma du zoning du site.</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:100%">
					<img src="inc/img/zoning.jpg" style="width:80%; margin-left: 70px;" alt="">
				</td>
			</tr>
		</table>

		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 4</td>
					<td style="width: 5%;"></td>
				</tr>
			</table>
		</page_footer>

	</page>

	<!-- ################### -->
	<!-- ## page 4 validé ## -->
	<!-- ################### -->

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">

		<page_header></page_header>

		<table class="page_titre" style="margin-top: 0">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">Arborescence du site</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:100%">
					<img src="inc/img/arborescence.jpg" style="width:80%; margin-left: 70px;" alt="">
				</td>
			</tr>
		</table>

		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 5</td>
					<td style="width: 5%;"></td>
				</tr>
			</table>
		</page_footer>

	</page>

	<!-- ################### -->
	<!-- ## page 5 validé ## -->
	<!-- ################### -->

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">

		<page_header></page_header>

		<table class="page_section" style="margin-top:0;">
			<tr>
				<td style="width:100%;">3 - Développement du site</td>
			</tr>
		</table>

		<table class="page_titre">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">Environnement du site</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%"></td>
				<td style="width:90%">
					Afin de réaliser ce site, et de mettre en pratique les connaissances aquisent tout au long de cette année au sein du centre de formation Doranco j'ai choisi le langage de programmation HTML5/CSS3 et PHP5 afin de pouvoir rendre le site dynamique de façon à ce que le site puisse être gérer entièrement par son propiétaire.
				</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%"></td>
				<td style="width:90%">
					Je vais au travers de ce mémoire développer un certain nombre de sujet et montrer un certain nombre de technique par choix de diversité.
					Ce site a pour vocation d'évoluer à terme afin que le propriétaire soit intégralement autonome sur l'édition de ses nouvelles.
				</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%"></td>
				<td style="width:90%">
					J'ai envisagé trois façons de développer ce projet, en CMS, à l'aide d'un framework, ou "à l'ancienne".<br>
					Je n'ai pas choisi le CMS car développer un site sans n'avoir rien d'autre à faire que de l'installer, je ne considère pas cela comme le travaille du développeur que j'aspire devenir.<br>
					La maîtrise d'au moins un framework étant très apprécié auprès des entreprises j'aurais pu choisir travailler ainsi, cependant je tenais à montrer mes capacités de développeur.<br>
					J'ai donc développé ce site "à la main", sans autres aide que les connaissances acquisent auprès du centre de formation Doranco, du travail effectué en entreprise auprès de l'équipe de Isart Digital et en particulier de mon tuteur de stage Mr Louis Nicolas, ainsi que des nombreuses heures que j'ai passé en recherche et auto-formation.
				</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%"></td>
				<td style="width:90%">
					Etant aussi très sensibilisé par mon entourage professionnel au responsive design et le portage des différents navigateurs, le site est donc lié par média queries au format tablette.<br>
					L'adaptation pour téléphone portable n'a pas été mis en place sur la demande du propriétaire du site. <br>
					Concernant le portage des différents navigateurs, les principaux sont en mesure de lire correctement le code et d'afficher le site sans faute. (Internet Explorer, Chrome, Firefox).
				</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%"></td>
				<td style="width:90%">
					Ayant une soif d'apprendre permanente, ce projet est (ou seront pour certain de mes prochains projets) en partage collaboratif via Github.<br>
					Je remercie vraiment Mr Louis Nicolas pour sa très grande sensibilisation à l'utilisation de Git et la ligne de commande car cela m'a permis durant mon stage de pouvoir travailler en collaboration avec le reste de l'équipe et cela à permis la réalisation du projet défini lors de l'entretien et de le mettre en place au sein de l'entreprise Isart Digital.
				</td>
			</tr>
		</table>

		<table class="page_titre">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">Charte graphique</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:10%"></td>
				<td style="width:90%">

				</td>
			</tr>
		</table>

		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 6</td>
					<td style="width: 5%;"></td>
				</tr>
			</table>
		</page_footer>

	</page>
	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">

		<page_header></page_header>

		<table class="page_titre">
			<tr>
				<td style="width:10%"></td>
				<td style="width:90%">Structure du site</td>
			</tr>
		</table>

		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 7</td>
					<td style="width: 5%;"></td>
				</tr>
			</table>
		</page_footer>

	</page>

<?php
	$contenu = ob_get_clean();
	try {
		$pdf = new HTML2PDF('P','A4','fr');
		$pdf->pdf->SetDisplayMode('fullpage');
		$pdf->writeHTML($contenu);
		$pdf->Output('Soutenance_Mr_Fernette.pdf');

	} catch(HTML2PDF_exception $exception) {
		die($exception);
	}