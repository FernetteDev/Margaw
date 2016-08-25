-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 09 Mars 2016 à 12:35
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `margaw`
--

-- --------------------------------------------------------

--
-- Structure de la table `artistes`
--

CREATE TABLE IF NOT EXISTS `artistes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idReference` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `bioAuteur` varchar(300) NOT NULL,
  `oeuvre` varchar(6000) NOT NULL,
  `moisNaissance` varchar(12) NOT NULL,
  `anneeNaissance` int(11) NOT NULL,
  `moisDeces` varchar(12) DEFAULT NULL,
  `anneeDeces` int(11) DEFAULT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idReference` (`idReference`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Contenu de la table `artistes`
--

INSERT INTO `artistes` (`id`, `idReference`, `nom`, `bioAuteur`, `oeuvre`, `moisNaissance`, `anneeNaissance`, `moisDeces`, `anneeDeces`, `creation`, `modification`) VALUES
(3, 7, 'Bruce LaBruce', 'https://fr.wikipedia.org/wiki/Bruce_LaBruce', 'Skin Flick , L.A. Zombie, Gerontophilia', 'janvier', 1964, '', 0, '2016-03-06 08:23:05', NULL),
(4, 7, 'Christophe Honoré', 'https://fr.wikipedia.org/wiki/Christophe_Honoré', 'Les Chansons d''amour, Les Bien-Aimés', 'avril', 1970, '', 0, '2016-03-06 08:24:48', '2016-03-06 08:31:43'),
(5, 7, 'David Lynch', 'https://fr.wikipedia.org/wiki/David_Lynch', 'Elephant Man, Blue Velvet, Eraserhead, Sailor et Lula, Mulholland Drive, Lost Highway, Dune', 'janvier', 1946, '', 0, '2016-03-06 08:29:42', '2016-03-06 08:31:58'),
(6, 7, 'Gus Van Sant', 'https://fr.wikipedia.org/wiki/Gus_Van_Sant', 'Drugstore Cowboy, My Own Private Idaho, Will Hunting, Elephant, Harvey Milk', 'juillet', 1952, '', 0, '2016-03-06 08:31:00', '2016-03-06 08:32:08'),
(7, 7, 'Lars Von Trier', 'https://fr.wikipedia.org/wiki/Lars_von_Trier', 'Breaking the Waves, Les Idiots, Dancer in the Dark, Dogville, Melancholia', 'avril', 1956, '', 0, '2016-03-06 08:33:43', NULL),
(8, 7, 'Michel Gondry', 'https://fr.wikipedia.org/wiki/Michel_Gondry', 'Eternal Sunshine of the Spotless Mind, Soyez sympas rembobinez, The Green Hornet', 'mai', 1963, '', 0, '2016-03-06 08:36:18', NULL),
(9, 7, 'Sofia Coppola', 'https://fr.wikipedia.org/wiki/Sofia_Coppola', 'Virgin Suicides, Lost in Translation, Marie-Antoinette, Somewhere, The Bling Ring', 'mai', 1971, '', 0, '2016-03-06 08:38:10', NULL),
(10, 7, 'Stanley Kubrick', 'https://fr.wikipedia.org/wiki/Stanley_Kubrick', 'Les Sentiers de la gloire, Spartacus, Docteur Folamour, 2001 l''Odyssée de l''espace, Orange mécanique, Barry Lyndon, Shining, Full Metal Jacket, Eyes Wide Shut', 'juillet', 1928, 'mars', 1999, '2016-03-06 08:48:56', '2016-03-06 08:49:17'),
(11, 7, 'Xavier Dolan', 'https://fr.wikipedia.org/wiki/Xavier_Dolan', 'J''ai tué ma mère (2009) Laurence Anyways (2012), Mommy (2014),', 'mars', 1989, '', 0, '2016-03-06 08:50:38', '2016-03-06 09:00:20'),
(12, 6, 'Amélie Nothomb', 'https://fr.wikipedia.org/wiki/Amélie_Nothomb', 'Légende peut-être un peu chinoise, Électre, Le Mystère par excellence, Aspirine, Le sabotage amoureux, Les Combustibles, Antéchrista, Ni d''Ève ni d''Adam', 'juillet', 1966, '', 0, '2016-03-06 08:55:37', NULL),
(13, 6, 'Anton Tchekov', 'https://fr.wikipedia.org/wiki/Anton_Tchekhov', 'La Steppe (1888), La Mouette (1896), Oncle Vania (1897), La Dame au petit chien (1899), Les Trois Sœurs (1901), La Cerisaie (1904)', 'janvier', 1860, 'juillet', 1904, '2016-03-06 08:57:50', NULL),
(14, 6, 'Arthur Rimbaud', 'https://fr.wikipedia.org/wiki/Arthur_Rimbaud', 'Le Bateau ivre (1871), Une saison en enfer (1873), Illuminations (1872-1875)', 'octobre', 1854, 'novembre', 1891, '2016-03-06 08:59:48', NULL),
(15, 6, 'Charles Baudelaire', 'https://fr.wikipedia.org/wiki/Charles_Baudelaire', 'Les Fleurs du mal (1857), Les Paradis artificiels (1860), Le Spleen de Paris (posthume 1846-1859)', 'avril', 1821, 'août', 1867, '2016-03-06 09:02:27', NULL),
(16, 6, 'Edgar Allan Poe', 'https://fr.wikipedia.org/wiki/Edgar_Allan_Poe', 'Les Aventures d''Arthur Gordon Pym, Ligeia, La Chute de la maison Usher, William Wilson, Double assassinat dans la rue Morgue, Le Masque de la Mort Rouge, Le Puits et le Pendule, Le Cœur révélateur, Le Scarabée d''or', 'janvier', 1809, 'octobre', 1849, '2016-03-06 09:05:08', NULL),
(17, 6, 'Émile Zola', 'https://fr.wikipedia.org/wiki/Émile_Zola', 'L''Assommoir (1876), Nana (1879), Germinal (1885)', 'septembre', 1840, 'septembre', 1902, '2016-03-06 09:08:09', '2016-03-06 09:26:10'),
(18, 6, 'Fiodor Dostoievski', 'https://fr.wikipedia.org/wiki/Fiodor_Dostoïevski', 'Les Carnets du sous-sol, Crime et Châtiment, L''Idiot, Les Démons, L''Adolescent, Les Frères Karamazov', 'novembre', 1821, 'février', 1881, '2016-03-06 09:10:51', '2016-03-06 09:29:35'),
(19, 6, 'François-René de Chateaubriand', 'https://fr.wikipedia.org/wiki/François-René_de_Chateaubriand', 'Atala (1801), René (1802), Génie du christianisme (1802), Mémoires d''outre-tombe (1848)', 'septembre', 1768, 'juillet', 1848, '2016-03-06 09:13:11', '2016-03-06 09:29:56'),
(20, 6, 'Franz Kafka', 'https://fr.wikipedia.org/wiki/Franz_Kafka', 'La Métamorphose (1915), La Colonie pénitentiaire (1919), Le Procès (1925), Le Château (1926), L''Amérique (1927)', 'juillet', 1883, 'juin', 1924, '2016-03-06 09:19:37', '2016-03-06 09:30:07'),
(22, 6, 'Guy de Maupassant', 'https://fr.wikipedia.org/wiki/Guy_de_Maupassant', 'Une vie (1883), Bel-Ami (1885), Pierre et Jean (1888), Le Horla (1887), Le Rosier de madame Husson (1887), La Parure (1884)', 'août', 1850, 'juillet', 1893, '2016-03-06 09:25:46', NULL),
(24, 6, 'Jean Genet', 'https://fr.wikipedia.org/wiki/Jean_Genet', 'Le Condamné à mort (poésie, 1942), Notre-Dame-des-Fleurs (roman, 1944), Miracle de la rose (roman, 1946), Les Bonnes (théâtre, 1947), Querelle de Brest (roman, 1947), Pompes funèbres (roman, 1947), Journal du voleur (autobiographie, 1949)', 'décembre', 1910, 'avril', 1986, '2016-03-06 09:58:28', NULL),
(25, 6, 'Jean-Paul Sartre', 'https://fr.wikipedia.org/wiki/Jean-Paul_Sartre', 'La Nausée (1938), Le Mur (1939), Les Mouches (1943), L''Être et le Néant (1943), Huis clos (1944), L''existentialisme est un humanisme (1945), Les Mains sales (1948), Critique de la raison dialectique (1960), Les Mots (1964)', 'juin', 1905, 'avril', 1980, '2016-03-06 10:13:10', NULL),
(26, 6, 'Léon Tolstoï', 'https://fr.wikipedia.org/wiki/Léon_Tolstoï', 'Guerre et Paix (1867-1869), Anna Karénine (1877), La Mort d''Ivan Ilitch (1886), Résurrection (1899)', 'septembre', 1828, 'novembre', 1910, '2016-03-06 10:20:28', NULL),
(27, 6, 'Milan Kundera', 'https://fr.wikipedia.org/wiki/Milan_Kundera', 'La Plaisanterie (1967), Risibles Amours (1971), Le Livre du rire et de l''oubli (1979), L''Insoutenable Légèreté de l''être (1984), L''Art du roman (1986), L''Immortalité (1990), Les Testaments Trahis (1993), L''Ignorance (2003)', 'avril', 1929, '', 0, '2016-03-06 10:22:57', NULL),
(28, 6, 'Paul Verlaine', 'https://fr.wikipedia.org/wiki/Paul_Verlaine', 'Poèmes saturniens (1866), Fêtes galantes (1869), Romances sans paroles (1874), Sagesse (1880), Les Poètes maudits (1884 et 1888)', 'mars', 1844, 'janvier', 1896, '2016-03-06 10:25:30', NULL),
(29, 6, 'Simone de Beauvoir', 'https://fr.wikipedia.org/wiki/Simone_de_Beauvoir', 'Le Deuxième Sexe, Les Mandarins, L''Invitée, Les Belles Images', 'janvier', 1908, 'avril', 1986, '2016-03-06 10:28:43', '2016-03-06 10:29:19'),
(30, 8, 'Alain Souchon', 'https://fr.wikipedia.org/wiki/Alain_Souchon', '1974 : J''ai dix ans, 1976 : Bidon, 1977 : Jamais content, 1978 : Toto 30 ans, rien que du malheur..., 1980 : Rame, 1983 : On avance, 1985 : C''est comme vous voulez, 1988 : Ultra moderne solitude', 'mai', 1944, '', 0, '2016-03-06 10:58:08', NULL),
(31, 8, 'Aphex Twin', 'https://fr.wikipedia.org/wiki/Aphex_Twin', '.', 'août', 1971, '', 0, '2016-03-06 11:03:38', '2016-03-06 11:44:08'),
(32, 8, 'Charlotte Gainsbourg', 'https://fr.wikipedia.org/wiki/Charlotte_Gainsbourg', 'Film : L''Effrontée, La Petite Voleuse, La Bûche, Ma femme est une actrice, Ils se marièrent et eurent beaucoup d''enfants, 21 Grammes, Prête-moi ta main, La Science des rêves, I''m Not There, Antichrist, L''Arbre, Melancholia / Musique : 1986 : Charlotte for Ever, 2006 : 5:55, 2009 : IRM, 2011 : Stage Whisper /', 'juillet', 1971, '', 0, '2016-03-06 11:07:35', NULL),
(33, 8, 'Etienne Daho', 'https://fr.wikipedia.org/wiki/étienne_Daho', 'Mythomane, La Notte la notte, Tombé pour la France, Reserection, Corps et Armes, L''Invitation, Les Chansons de l''innocence retrouvée', 'janvier', 1956, '', 0, '2016-03-06 11:28:41', NULL),
(34, 8, 'Lana Del Rey', 'https://fr.wikipedia.org/wiki/Lana_Del_Rey', 'Lana Del Ray, Born to Die, Ultraviolence, Honeymoon', 'juin', 1985, '', 0, '2016-03-06 11:33:00', '2016-03-06 11:44:17'),
(35, 8, 'Lescop', 'https://fr.wikipedia.org/wiki/Lescop', '2006 : Petits cauchemars entre amis, 2009 : Brûle brûle brûle, 2012 : Lescop', 'novembre', 1978, '', 0, '2016-03-06 11:34:32', '2016-03-06 11:44:29'),
(36, 8, 'Mylène Farmer', 'https://fr.wikipedia.org/wiki/Mylène_Farmer', 'musique : 1986 : Cendres de lune, 1988 : Ainsi soit je..., 1991 : L''autre..., 1995 : Anamorphosée, 1999 : Innamoramento, 2005 : Avant que l''ombre..., 2008 : Point de Suture, 2010 : Bleu Noir, 2012 : Monkey Me, 2015 : Interstellaires', 'septembre', 1961, '', 0, '2016-03-06 11:43:22', NULL),
(37, 8, 'Serge Gainsbourg', 'https://fr.wikipedia.org/wiki/Serge_Gainsbourg', 'You''re Under Arrest, Love on the Beat, Mauvaises Nouvelles des étoiles, Aux armes et cætera', 'avril', 1928, 'mars', 1991, '2016-03-06 16:07:45', NULL),
(38, 8, 'Sophie Hunger', 'https://fr.wikipedia.org/wiki/Sophie_Hunger', 'Fisher, Supermoon, The Danger of Light, Sketches on Sea', 'mars', 1983, '', 0, '2016-03-06 16:09:47', NULL),
(39, 8, 'Wax Taylor', 'https://fr.wikipedia.org/wiki/Wax_Tailor', 'Dusty Rainbow from the Dark, In the Mood for Life, Hope and Sorrow, Tales of the Forgotten Melodies', 'juillet', 1975, '', 0, '2016-03-06 16:11:45', '2016-03-06 16:12:35'),
(40, 9, 'Andy Warhol', 'https://fr.wikipedia.org/wiki/Andy_Warhol', 'Campbell''s Soup Cans, Diptyque Marilyn, Liz, Ten Lizes', 'août', 1928, 'février', 1987, '2016-03-06 16:15:34', NULL),
(41, 9, 'Egon Schiele', 'https://fr.wikipedia.org/wiki/Egon_Schiele', 'Auto-portrait de 1912, Portrait d''Albert Paris von Gütersloh, 1918', 'juin', 1890, 'octobre', 1918, '2016-03-06 16:17:09', NULL),
(42, 9, 'Eugène Delacroix', 'https://fr.wikipedia.org/wiki/Eugène_Delacroix', 'La Mort de Sardanapale; Femmes d''Alger dans leur appartement; Scène des massacres de Scio; La Liberté guidant le peuple', 'avril', 1796, 'août', 1863, '2016-03-06 16:19:19', NULL),
(43, 9, 'Francisco Goya', 'https://fr.wikipedia.org/wiki/Francisco_de_Goya', 'El quitasol - La Maja vêtue / La Maja nue - Los caprichos - Le Sabbat des Sorcières - La Famille de Charles IV - Tres de mayo - Dos de mayo Saturne dévorant un de ses fils - Peintures noires', 'mars', 1746, 'avril', 1828, '2016-03-06 16:20:24', NULL),
(44, 9, 'Gustav Klimt', 'https://fr.wikipedia.org/wiki/Gustav_Klimt', 'Judith I, Le Baiser, Portrait d''Adele Bloch-Bauer I, Danaé, Les Trois Âges de la femme, Frise Beethoven', 'juillet', 1862, 'février', 1918, '2016-03-06 16:21:38', NULL),
(45, 9, 'Henri Matisse', 'https://fr.wikipedia.org/wiki/Henri_Matisse', 'Nu bleu, Souvenir de Biskra, la Femme au chapeau, L''Atelier rouge, la Fenêtre ouverte, La Danse, La Joie de Vivre', 'décembre', 1869, 'novembre', 1954, '2016-03-06 16:22:32', NULL),
(46, 9, 'Jean Cocteau', 'https://fr.wikipedia.org/wiki/Jean_Cocteau', 'Le Sang d''un poète (1930), La Machine infernale (1934)', 'juillet', 1889, 'octobre', 1963, '2016-03-06 16:23:46', NULL),
(47, 9, 'Juan Miro', 'https://fr.wikipedia.org/wiki/Joan_Miro', 'Murs de céramique, Dona i ocell, Portrait de Vicenç Nubiola, Nord-Sud (Miró), Retrat d''una vaileta', 'avril', 1893, 'décembre', 1983, '2016-03-06 16:26:01', NULL),
(48, 9, 'Lucio Fontana', 'https://fr.wikipedia.org/wiki/Lucio_Fontana', 'Femme assise, Concetto spaziale, Concetto spaziale, Teatrino concetto spaziale', 'février', 1899, 'septembre', 1968, '2016-03-06 16:28:58', NULL),
(49, 9, 'Marc Chagall', 'https://fr.wikipedia.org/wiki/Marc_Chagall', 'plafond Opéra Garnier', 'juillet', 1887, 'mars', 1985, '2016-03-06 16:31:03', NULL),
(50, 9, 'Miss.Tic', 'https://fr.wikipedia.org/wiki/Miss.Tic', 'À la vie, à l''Amor', 'février', 1956, '', 0, '2016-03-06 16:32:24', NULL),
(51, 9, 'Pablo Picasso', 'https://fr.wikipedia.org/wiki/Pablo_Picasso', 'Les Demoiselles d''Avignon (1907), Guernica (1937)', 'octobre', 1881, 'avril', 1973, '2016-03-06 16:34:01', NULL),
(52, 9, 'Paul Gauguin', 'https://fr.wikipedia.org/wiki/Paul_Gauguin', 'Le Christ jaune, Manao Tupapau, Le café de nuit à Arles', 'juin', 1848, 'mai', 1903, '2016-03-06 16:35:04', NULL),
(53, 9, 'Pierre Soulages', 'https://fr.wikipedia.org/wiki/Pierre_Soulages', 'Outrenoirs', 'décembre', 1919, '', 0, '2016-03-06 16:36:21', NULL),
(54, 9, 'Salvador Dali', 'https://fr.wikipedia.org/wiki/Salvador_Dali', 'Le Torero hallucinogène, La Gare de Perpignan, Christ de saint Jean de la Croix, La Persistance de la mémoire', 'mai', 1904, 'janvier', 1989, '2016-03-06 16:38:55', NULL),
(55, 9, 'Théodore Géricault', 'https://fr.wikipedia.org/wiki/Théodore_Géricault', 'Officier de chasseurs à cheval de la garde impériale chargeant, Le Radeau de La Méduse,série des Monomanes, Tête de Cheval,', 'septembre', 1791, 'janvier', 1824, '2016-03-06 16:40:44', NULL),
(56, 9, 'Vassily Kandinsky', 'https://fr.wikipedia.org/wiki/Vassily_Kandinsky', 'Moscou. La place rouge, Peinture non objective, Improvisation avec formes froides', 'décembre', 1866, 'décembre', 1944, '2016-03-06 16:42:39', NULL),
(57, 9, 'Vincent Van Gogh', 'https://fr.wikipedia.org/wiki/Vincent_van_Gogh', 'Les Mangeurs de pommes de terre, La Chambre de Van Gogh à Arles, Les Tournesols, La Nuit étoilée, Portrait du docteur Gachet avec branche de digitale, La Maison blanche la nuit, Terrasse du café le soir', 'mars', 1853, 'juillet', 1890, '2016-03-06 16:44:40', NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `artistes`
--
ALTER TABLE `artistes`
  ADD CONSTRAINT `fk-categorie` FOREIGN KEY (`idReference`) REFERENCES `reference` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
