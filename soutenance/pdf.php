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
		.body {

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

	<page class="couverture" style="text-align: center;" backtop="80px" backbottom="100px" backleft="30px" backright="30px">
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
				<td>Page 4</td>
			</tr>
			<tr>
				<td></td>
				<td>- Arborescence du site</td>
				<td>...............................................................</td>
				<td>Page</td>
			</tr>
			<tr>
				<td></td>
				<td>- Zonning</td>
				<td>...............................................................</td>
				<td>Page</td>
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
				<td style="width:10%">Page</td>
			</tr>
			<tr>
				<td></td>
				<td>- Charte graphique</td>
				<td>...............................................................</td>
				<td>Page</td>
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

	<page pageset="new" class="body" backtop="100px" backbottom="100px" backleft="60px" backright="60px">

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
				<td style="width:90%">L'adresse du site web : http://margaw.livehost.fr<br><br>Le site porte le nom du protagoniste : Margaw. On va
					y suivre durant neuf chapitre cette personne aux idées noire dont on ne sait rien du tout.</td>
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
					<span class="blue">Chef de projet :</span> Gestion de projet depuis l'établissement du cahier des charges jusqu'à la mise en 
					ligne du site
					.<br>
					<span class="blue">Graphiste :</span> Graphiste Création du logo de Margaw (Illustrator).<br>
					<span class="blue">Webdesigner :</span> Création du design du site et intégration des données.<br>
					<span class="blue">Développeur :</span> Développement du code du site en PHP5, HTML5/CSS3.<br>
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
				<td style="width:90%"></td>
			</tr>
		</table>

		<table class="page_titre">
			<tr>
				<td></td>
				<td></td>
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


<?php
	$contenu = ob_get_clean();
	try {
		$pdf = new HTML2PDF('P','A4','fr');
		$pdf->pdf->SetDisplayMode('fullpage');
		$pdf->writeHTML($contenu);
		$pdf->Output('soutenance.pdf');

	} catch(HTML2PDF_exception $exception) {
		die($exception);
	}