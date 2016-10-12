<?php
	//require('inc/class_php/class/Divers/autoload.php');
	//autoload\Autoloader::register();
	require('inc/html2pdf/vendor/autoload.php');
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
			margin-top: 25px;
		}
		.page_titre {
			color: #832a63;
			font-size:18px;
			margin-top: 15px;
		}
		.page_contenu {
			font-size: 14px;
			margin-top: 10px;
			text-align: justify;
		}
		.blue {
			color: royalblue;
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
				<tr>
					<td style="font-size=10pt;width:100%; color: red;">
						DORANCO ESPACE MULTIMEDIA
					</td>
				</tr>
				<tr>
					<td style="font-size=10pt;color: darkred">
						ORGANISME DE FORMATION & ETABLISSEMENT D'ENSEIGNEMENT SUPERIEUR TECHNIQUE PRIVE
					</td>
				</tr>
				<tr>
					<td style="font-size:8pt">
						10-12 RUE PLANCHAT | 75020 PARIS | TEL 01 55 25 28 00 | FAX 01 55 25 20 15
					</td>
				</tr>
				<tr>
					<td style="font-size:8pt">
						look@doranco.fr - www.doranco.fr
					</td>
				</tr>
				<tr>
					<td style="font-size:8pt">
						© DORANCO Espace Multimédia - Centre de Formation n°11751937075 - APE 8559A SIRET 389 358 854 00054
					</td>
				</tr>
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
				<td>Page 7</td>
			</tr>
			<tr>
				<td></td>
				<td>- Langage de programmation</td>
				<td>...............................................................</td>
				<td>Page 11</td>
			</tr>
			<tr>
				<td></td>
				<td>- Hébergement</td>
				<td>...............................................................</td>
				<td>Page 13</td>
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
				<td style="width:35%;">- Coût / Investissement</td>
				<td style="width:50%;">...............................................................</td>
				<td style="width:10.5%;">Page 14</td>
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
				<td style="width:10%;">Page 14</td>
			</tr>
			<tr>
				<td></td>
				<td>- Remerciement</td>
				<td>...............................................................</td>
				<td>Page 15</td>
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
				<td style="width:5%;"></td>
				<td style="width:95%;">FERNETTE Frédéric</td>
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
				<td style="width:5%;"></td>
				<td>
					<span class="blue">Cursus :</span><br>
					Diplomé du CAP & BEP Hotellerie - Restauration
				</td>
			</tr>
			<tr>
				<td></td>
				<td style="width:95%;">
					<span class="blue">Evolution actuelle :</span><br>
					Ancien cuisinier de formation, j'ai toujours eu une grande passion pour l'informatique. Suite à
					divers évènements personnel, j'ai donc choisi de prendre un tournant dans ma carrière professionnelle.
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
				<td style="width:5%"></td>
				<td style="width:95%">
					<span class="blue">L'adresse du site web :</span><br> http://margaw.livehost.fr<br><br>
					Le site porte le nom du protagoniste : "Margaw". On va y suivre durant neuf chapitres cette personne aux idées noire dont on ne sait rien du tout.
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
				<td style="width:5%;"></td>
				<td style="width:95%;">
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
				<td style="width:5%"></td>
				<td style="width:95%">
					Le site à pour objectif de permettre à l'auteur de conter l'histoire de Margaw un personnage énigmatique.
				</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">
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
				<td style="width:100%">
					<img src="inc/img/zoning.jpg" style="width:80%; margin-left: 70px;" alt="">
				</td>
			</tr>
			<tr>
				<td style="font-size: 10px; text-align: center">Présentation des zones du site</td>
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
		<table class="page_contenu" style="margin-top:20px">
			<tr>
				<td style="width:100%">
					<img src="inc/img/arborescence.jpg" style="width:80%; margin-left: 70px;" alt="">
				</td>
			</tr>
			<tr>
				<td style="font-size: 10px; text-align: center">
					Shéma de l'arborescence et des différents points de connection à la base de données
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
				<td style="width:5%"></td>
				<td style="width:95%">
					Afin de réaliser ce site, et de mettre en pratique les connaissances aquisent tout au long de cette année au sein du centre de formation Doranco, j'ai choisi le langage de programmation HTML5/CSS3 et PHP5 afin de pouvoir rendre le site dynamique de façon à ce que le site puisse être gérer entièrement par son propiétaire.
				</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">
					Je vais au travers de ce mémoire développer un certain nombre de sujet et montrer un certain nombre de technique par choix de diversité.
					Ce site a pour vocation d'évoluer à terme afin que le propriétaire soit intégralement autonome sur l'édition de ses nouvelles.
				</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">
					J'ai envisagé trois façons de développer ce projet, en CMS, à l'aide d'un framework, ou "à l'ancienne".<br>
					Je n'ai pas choisi le CMS car développer un site sans n'avoir rien d'autre à faire que de l'installer, je ne considère pas cela comme le travaille du développeur que j'aspire devenir.<br>
					La maîtrise d'au moins un framework étant très apprécié auprès des entreprises j'aurais pu choisir travailler ainsi, cependant je tenais à montrer mes capacités de développeur.<br><br>
					J'ai donc développé ce site "à la main", sans autres aide que les connaissances acquisent auprès du centre de formation Doranco, du travail effectué en entreprise auprès de l'équipe de IASRT Digital et en particulier de mon tuteur de stage Mr Louis Nicolas, ainsi que des nombreuses heures que j'ai passé en recherche et auto-formation.
				</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">
					Etant aussi très sensibilisé par mon entourage professionnel au responsive design et le portage des différents navigateurs, le site est donc lié par média queries au format tablette.<br>
					L'adaptation pour téléphone portable n'a pas été mis en place sur la demande du propriétaire du site. <br>
					Concernant le portage des différents navigateurs, les principaux sont en mesure de lire correctement le code et d'afficher le site sans faute. (Internet Explorer, Chrome, Firefox).
				</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">
					Ayant une soif d'apprendre permanente, ce projet est (ou seront pour certain de mes prochains projets) en partage collaboratif via Github.<br>
					Je remercie vraiment Mr Louis Nicolas pour sa très grande sensibilisation à l'utilisation de Git et la ligne de commande car cela m'a permis durant mon stage de pouvoir travailler en collaboration avec le reste de l'équipe et cela à permis la réalisation du projet défini lors de l'entretien et de le mettre en place au sein de l'entreprise ISART Digital.
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

	<!-- ################### -->
	<!-- ## page 6 validé ## -->
	<!-- ################### -->

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">

		<page_header></page_header>

		<table class="page_titre">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">Charte graphique</td>
			</tr>
		</table>
		<table class="page_contenu" style="margin-top:20px;text-align: center">
			<tr>
				<td style="width:100%">
					<img src="inc/img/logo_margaw.png" alt="">
				</td>
			</tr>
			<tr>
				<td style="font-size: 10px">Logo créé sur Illustrator</td>
			</tr>
		</table>
		<table class="page_contenu" style="margin-top:30px">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">
					Sur la demande de l'auteur, un logo a donc été créé à l'image du site et de l'histoire du protagoniste. <br>
					M - G - W les initiales de références de MarGaW, les lettres sont elles-même entre mélée à l'image de l'esprit tortueux et torturé du personnage.<br>
					L'auteur à souhaité que les couleurs ternes et sombres du site soit le reflet du personnage, sombre. <br>
					Cependant le "G" est en rose, celui-ci indique une lueur d'espoir, cette lueur qui rode dans l'esprit de Margaw sans jamais trouver la paix. Mais cette lueur existe.<br>
					L'image de fond est elle-même terne à l'image du reste du site. C'est la place de l'étoile à Paris, proche de l'avenue de Wagram, c'est de là que viens d'ailleurs le nom du personnage, un anagramme.
				</td>
			</tr>
		</table>

		<table class="page_titre">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">Structure du site</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">
					<div>Tout d'abord la racine : On va y trouver les trois éléments principaux du site.</div><br>
					<div style="margin-left: 15px">I<span style="margin-left: 12px">-</span> Les pages du sites, en effet nous y trouverons ici toutes les pages accessible du site.</div><br>
					<div style="margin-left: 15px">II<span style="margin-left: 7px">-</span><span style="margin-left: 3px">Le</span> dossier "inc" qui contient toutes les inclusions du site allant du fichier css au dossier contenant les classes php.</div><br>
					<div style="margin-left: 15px">III - Le dossier "admin", on y trouvera ici tous les CRUD en fonction de ce qu'il y a à modifier sur le site. Ce dernier étant dynamique dans sa quasi totalité il est donc normal que se dossier soit le plus important.</div><br><br>
					<div>L'accès aux pages admin étant la partie la plus sensible du site elles sont donc protégé par un code crypté et stocké en base de données.</div><br>
					<div>Concernant la structure. L'objet PHP gère la structure html, notamment la répétition du header et de la partie haute du site jusqu'à la navigation ainsi que le footer.</div>
					<div>Dans les photos ci-dessous, j'ai donc entouré les éléments de la structure html se rapportant au site.</div><br>
					<div>Comme il est montré dans la deuxième partie de la deuxième image Le Haut de la page comporte deux "include". Ce sont deux éléments très important puisque ses derniers permettent de partir rechercher toutes les différentes classes utilisable dans le site.</div>
				</td>
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

	<!-- ################### -->
	<!-- ## page 7 validé ## -->
	<!-- ################### -->

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">

		<page_header></page_header>

		<table class="page_contenu" style="margin-top:0">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%">
					<div>L'include "information.php" permet de donné accès à toutes les informations du site que j'ai souhaité rendre disponible pour les autres classes, se sont majoritairement des constantes notament pour la connection à la base de données.</div><br>
					<div>L'include "autoload.php" par rechercher automatiquement chercher les objets et gère seul les chemins d'accès aux objets, ceci permettant l'initialisation les objets soit directement soit précédé du namespace.</div><br>
					<div>Dans le cas où, le namespace n'est pas utilisé à l'initialisation de l'objet cela veut dire que ce dernier est déclaré à l'aide de "USE" en haut de page.</div>
				</td>
			</tr>
			<tr style="margin-top: 20px">
				<td></td>
				<td>
					<div>Concernant l'objet "structure" en lui même, je vais donc commenter les deux prochaines images.</div>
					<div>L'objet est stocké dans le namespace "Page". <br> Dans cet objet nous pouvons constater quatre variables :</div><br>
					<div style="margin-left:15px">La première, entouré en vert fait référence au titre que nous trouverons dans l'onglet du navigateur, lui même situé dans l'entête.</div><br>
					<div style="margin-left:15px">La deuxième, entouré en rouge appelle le fichier "entête.php" qui contient non seulement toute la partie du header mais aussi la partie haute du site. (Logo & navigation)</div><br>
					<div style="margin-left:15px">La troisième, entouré en jaune appelle le fichier "footer.php" ce dernier contenant lui même le contenu de la quatrième variable</div><br>
					<div style="margin-left:15px">La quatrième, entouré en bleu, contiendra tout les fichiers Javascript qui y seront appellé.</div><br>
					<div>Afin d'assurer un chargement plus rapide de la page, il est conseillé d'inscrire tout les codes Javascript en fin de page idéalement après le footer, c'est pourquoi la variable contenant les script est placé dans le footer qui est appelé dans le destructeur de l'objet, de cette façon je m'assure que le footer est bien appelé en dernier et donc que mes scripts soient bien appelé à la fin du chargement de ma page.</div><br>
					<div>Sur la première image je montre le détail de l'objet "structure" et les actions des variables.</div>
					<div>Toutes les variables sont initialisé dans le constructeur et devraient donc théoriquement être exécuter à la suite. Cependant nous utiliserons la portée de la variable "$this->" afin de pourvoir utiliser deux des quatre variables dans le destructeur.</div><br>
					<div>Dans la deuxième image je montrerais donc l'utilisation de l'objet.</div>
					<div>Le site étant de petite envergure, à but non lucratif et n'ayant pas vocation à s'étendre beaucoup plus, il n'était pas nécessaire de créer un objet complexe.
						En effet, l'avantage de ce "petit objet" est que tous les éléments dont nous avons besoin se trouvent directement à l'initialisation de l'objet.</div><br>
					<div>J'ai pour les besoins de la présentation "aéré" un peu plus l'objet en lui même et l'objet utilisé afin de bien montrer comment les différents paramètres sont appelé.</div>
					<div>Concernant le quatrième paramètre, tous les scripts quels qu'ils soient doivent être inscrit dans entre les mêmes guillemets, en effet si ce n'est pas le cas l'objet considèrera qu'il ya plus de paramètre. Afin d'éviter cela il est conseillé soit d'alterner avec les guillemets et les doubles-guillemets, soit d'utiliser des anti-slash.</div>
				</td>
			</tr>
		</table>

		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 8</td>
					<td style="width: 5%;"></td>
				</tr>
			</table>
		</page_footer>

	</page>

	<!-- ################### -->
	<!-- ## page 8 validé ## -->
	<!-- ################### -->

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">

		<page_header></page_header>

		<table class="page_contenu" style="margin-top:0">
			<tr>
				<td style="width:100%; text-align: center">
					Détail de l'objet page.
				</td>
			</tr>
		</table>

		<table style="margin-top: 20px">
			<tr>
				<td style="width:100%;text-align: center">
					<img src="inc/img/structure_html_objet.jpg" alt="objet structure">
				</td>
			</tr>
		</table>

		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 9</td>
					<td style="width: 5%;"></td>
				</tr>
			</table>
		</page_footer>
	</page>

	<!-- ################### -->
	<!-- ## page 9 validé ## -->
	<!-- ################### -->

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">

		<page_header></page_header>

		<table class="page_contenu" style="margin-top: 20px">
			<tr>
				<td style="width:100%;text-align: center; margin-top:0">
					Utilisation de l'objet structure.
				</td>
			</tr>
		</table>

		<table class="page_contenu" style="margin-top:20px">
			<tr>
				<td style="width:100%; text-align: center">
					<img src="inc/img/utilisation_objet.jpg" alt="modèle d'utilisation d'objet">
				</td>
			</tr>
		</table>

		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 10</td>
					<td style="width: 5%;"></td>
				</tr>
			</table>
		</page_footer>

	</page>

	<!-- #################### -->
	<!-- ## page 10 validé ## -->
	<!-- #################### -->

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">

		<page_header></page_header>

		<table class="page_titre" style="margin-top:0">
			<tr>
				<td style="width:5%"></td>
				<td style="width:95%;">
					Langage de programation
				</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width:5%;"></td>
				<td style="width:95%;">
					<div>
						Pour la réalisation de ce site, j'ai opté pour le langage PHP5. Associé au langage SQL, qui est le langage serveur permettant de gérer les données stockés en base, PHP5 permet de gérer dynamiquement les données du site.
					</div><br>
					<div>
						J'ai développé à l'aide de mes connaissances un certain nombres d'objets, d'une utilisation simple, ces derniers me permettent d'alléger mon code et d'éviter les erreurs d'écriture puisque l'execution du code ce fait en fonction de quelques paramètres saisis dans l'objet.
					</div><br>
					<div>
						PHP est un langage dit : "open source", ce qui peut me permettre à l'avenir de partager, sur des plates formes tel que GITHUB par exemple, tout ou partie de mon code afin de pouvoir l'améliorer en collaboration avec les personnes qui souhaiterons intéragir avec moi et me proposer leurs éventuelles améliorations.
					</div><br>
				</td>
			</tr>
		</table>
		<table class="page_contenu" style="text-align:center">
			<tr>
				<td style="width:100%;">
					<img src="inc/img/js_vs_php.jpg" style="width: 80%;" alt="">
				</td>
			</tr>
			<tr>
				<td style="font-size:10px">
					Le choix de la navigation, entre code en dure sur JS et choix dynamique sur PHP.
				</td>
			</tr>
		</table>



		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 11</td>
					<td style="width: 5%;"></td>
				</tr>
			</table>
		</page_footer>
	</page>

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">

		<page_header></page_header>

		<table class="page_contenu" style="margin-top:0">
			<tr>
				<td style="width:5%;"></td>
				<td style="width:95%;">
					<div>
						Afin de gérer l'aspect du site j'ai donc recouru aux langages HTML5/CSS3 qui permettent de gérer le côté front-end (design) du site.<br>
						Les nouvelles balises HTML5 permettent une meilleur hiérarchisation de la structure pour une lecture plus claire du code. <br>
						Le CSS3 permet de gérer tout le côté design du site en donnant "forme" aux balises.
					</div><br>
					<div>
						J'y ai aussi développer un peu de javascript, le site n'étant pas de grande envergure, et le propriétaire ne souhaitant pas y inclure d'animation même simple, je me suis contenté de quelques options montrant essenciellement où est-ce que nous nous situons dans le site ou dans las chapitres pour assurer un suivi de la lecture de l'utilisateur.
					</div><br>
					<div>
						La page "Des nouvelles de MarGaW" est, contrairement aux autres, écrite en "dure". En effet à terme cette page deviendra une page dynamique mais j'ai préféré exploiter le langage Javascript pour la gestion de cette page.
					</div><br>
					<div>
						Nous pouvons aussi trouver, dans la page "Et l'auteur", dans l'onglet commentaire, un "livre d'or" permettant aux lecteurs de laisser un message à l'auteur sur le site.
						<br><br>
						A ce titre, pour laisser un message à l'auteur j'ai opté pour un éditeur WYSIWIG tel que CKEditor.
						<br>
						L'avantage d'un éditeur tel que celui là est qu'il est dans un premier temps paramétrable, ce qui m'a permis déjà d'avoir un choix très précis de ce que je veux laisser comme choix d'action à l'utilisateur, et dans un deuxième temps, la sécurité est assuré par l'éditeur de texte en lui même.
						<br><br>
						j'ai aussi inclus un contrôle simple de champs de texte en Javascript afin d'indiquer à l'utilisateur s'il passe dessus si le champs est vide ou pas, ce qui lui évitera un rechargement de la page s'il oublie de renseigner son nom.
					</div><br>
					<div>
						Enfin pour évoquer un sujet d'actualité, je parlerai aussi des médias queries. L'auteur n'ayant pas souhaité que son oeuvre puisse être consulté sur mobile, je me suis donc uniquement contenté de quelques modifications changeant quasiment pas l'aspect du site sur tablette puisque les quelques média-queries que j'ai utilisé visaient à changer uniquement la taille du contenu principale et la taille des fonts.
						<br>
						N'ayant pas besoin de grand changement radicaux dans le site j'ai donc directement inclus mes média-quéries directement dans le fichier CSS d'origine.
					</div>
				</td>
			</tr>
		</table>

		<table class="page_contenu" style="text-align:center; margin-top: 20px">
			<tr>
				<td style="width:100%;">
					<img src="inc/img/mediaQueries.jpg" alt="">
				</td>
			</tr>
			<tr>
				<td style="font-size:10px">
					Extrait du fichier CSS.
				</td>
			</tr>
		</table>



		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 12</td>
					<td style="width: 5%;"></td>
				</tr>
			</table>
		</page_footer>

	</page>

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">
		<page_header></page_header>

		<table class="page_titre" style="margin-top:0">
			<tr>
				<td style="width: 5%;"></td>
				<td style="width: 95%;">Hébergement</td>
			</tr>
		</table>
		<table class="page_contenu" style="text-align:center; margin-top: 20px">
			<tr>
				<td style="width:100%;">
					<img src="inc/img/livehost.jpg" alt="">
				</td>
			</tr>
			<tr>
				<td style="font-size:10px">
					Extrait du compte livehost.
				</td>
			</tr>
		</table>
		<table class="page_contenu" style="margin-top: 30px">
			<tr>
				<td style="width: 5%;"></td>
				<td style="width: 95%">
					<div>
						L'auteur à préféré choisir un hébergement gratuit pour le moment, j'ai donc sélectionné l'hébergeur Livehost. <br><br>
						N'engageant pas de coût nous avons donc choisis l'offre FREE. Le site de l'auteur étant de petite taille et avec une petite base de données très peu sollicité, le contenu du service proposé est plus que raisonnable puisque nous n'utilisons que moins de 1% de la taille du disque mis à notre disposition.
					</div><br>
					<div>
						Un des avantages de cet hébergeur outre le fait qu'il soit gratuit c'est qu'il met à notre disposition dans cette offre un deuxième site et une deuxième base de donnée.
						<br><br>
						Concernant le deuxième site, l'avantage est que si l'auteur décide d'agrandir son site et de créer une version mobile, il nous sera donc possible de concevoir une application mobile dont nous pourrons gérer l'accès avec un fichier .HTACCESS pour la redirection. (développement avec Cordova par exemple pour une application Android)
					</div>
				</td>
			</tr>
		</table>

		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 13</td>
					<td style="width: 5%;"></td>
				</tr>
			</table>
		</page_footer>
	</page>

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">
		<page_header></page_header>

		<table class="page_section">
			<tr>
				<td style="width: 100%">4 - Information annexe</td>
			</tr>
		</table>
		<table class="page_titre">
			<tr>
				<td style="width: 5%"></td>
				<td style="width: 95%">Coût / Investissement</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width: 5%"></td>
				<td style="width: 95%">
					<div>
						<span class="blue">Bilan des coûts engagés :</span>
						<br><br>
						-> pas de déclaration du logo
						<br>
						-> pas d'image particulière acheté
						<br>
						-> choix de l'hébergement gratuit
					</div><br>
					<div>
						<span class="blue">Bilan de l'investissement personnel :</span>
						<br><br>
						-> 770 heures de formation au centre Doranco
						<br>
						-> nombre d'heures investi dans ce projet non calculé
						<br>
						-> nombre d'heures investi en auto-formation non calculé
					</div><br>
					<div>
						<span class="blue">Bilan global :</span>
						<br><br>
						Tout ce temps à été nécessaire pour la réalisation de ce premier projet. Partant réellement de zéro dans cette formation, puisque toutes ces technologies développées tout au long de ce projet était pour moi inconnu il y a un ans maintenant, je considère l'aboutissement de ce projet comme la conclusion de mon investissement.
					</div><br>
					<div>
						<span class="blue">Projet à venir :</span>
						<br>
						Je souhaite capitaliser mes acquis et continuer d'apprendre afin de gagner en efficacité pour que mes futurs projets soit viable en terme de rendement. (coût / temps de production)
					</div><br>
				</td>
			</tr>
		</table>

		<table class="page_section">
			<tr>
				<td style="width: 100%">5 - Conclusion</td>
			</tr>
		</table>
		<table class="page_titre">
			<tr>
				<td style="width: 5%"></td>
				<td style="width: 95%">Conclusion</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width: 5%"></td>
				<td style="width: 95%">
					<div>
						<span class="blue">Objectif :</span>
					</div><br>
					<div>
						Je pense avoir atteint mon objectif de départ. J'ai souhaité démontrer au travers de ce site, les connaissances acquises en HTML / CSS, PHP et JS.
						<br>
						Mon investissement personnel m'a permis aussi de beaucoup mieux comprendre la POO et je vais continuer d'approfondir ce point en essayant de concevoir mon propre coeur de framework dont je vous invite a suivre l'évolution et à collaborer avec moi si vous le souhaité sur mon GITHUB.
						<br>
						En tant que futur développeur j'ai souhaité utiliser au minimum les outils Adobe. <br>
						En effet, ce PDF est développé avec l'API HTML2PDF. Cependant toutes les images de ce PDF, à l'exception des logos de la page de garde et des imprim-écran, sont réalisé avec Illustrator.
					</div><br>
					<div>
						<span class="blue">Bilan :</span>
					</div><br>
					<div>
						Afin de pouvoir assurer un avenir professionnel, il me reste cependant beaucoup de travail à effectuer. Afin donc de pouvoir approfondir mes connaissances et mon expérience professionnelle, je suis en train de chercher une alternance pour passer la certification de Concepteur / Développeur Informatique. Le cas échéant je me lancerai dans la vie active et passerai cette certification d'ici trois ans en Validation par Acquis d'Expérience (VAE).
					</div>
				</td>
			</tr>
		</table>

		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 14</td>
					<td style="width: 5%;"></td>
				</tr>
			</table>
		</page_footer>
	</page>

	<page pageset="new" backtop="100px" backbottom="100px" backleft="60px" backright="60px">
		<page_header></page_header>

		<table class="page_titre">
			<tr>
				<td style="width: 5%"></td>
				<td style="width: 95%">Remerciement</td>
			</tr>
		</table>
		<table class="page_contenu">
			<tr>
				<td style="width: 5%"></td>
				<td style="width: 95%">
					<div>
						Je tiens à remercier toute l'équipe de Doranco ainsi que leurs intervenants extérieur pour leur patience, leur passion, leur pédagogie, ainsi que de leur disponibilité hors des cours.
						<br><br>
						Je remercie la direction de Doranco pour m'avoir donné les moyens de réussir cette reconversion professionnelle, tant par leur confiance et leur disponibilité que par le matériel et le choix des professionels qui nous ont encadré durant toute la formation.
						<br><br>
						Je remercie mes camarades de cette promotion, avec qui j'entends garder contact, de m'avoir enrichi tant sur le plan professionnel que personnel et pour m'avoir soutenu durant la formation.
						<br><br>
						Je tiens aussi à remercier la société ISART Digital, au travers de Mr Paul De Berranger et de Mr Nicolas Louis mon tuteur de stage, pour m'avoir permis de faire mon stage au sein de leur entreprise. J'ai grâce à eux appronfondi grandement mes connaissances mais j'ai aussi appris le travail collaboratif. J'ai aussi grâce à leur soutiens réussi à mettre en place le nouvel affichage du planning des élèves en fonction du design de leurs nouveaux locaux.
						<br><br>
						Enfin je remercie toutes les personnes qui m'ont soutenu et qui m'ont permis de réussir ce démarrage dans cette nouvelle carrière.
					</div>
				</td>
			</tr>
		</table>

		<page_footer>
			<table style="text-align: right;">
				<tr>
					<td style="width: 95%;">page 15</td>
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