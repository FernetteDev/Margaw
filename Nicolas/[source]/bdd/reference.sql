-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 09 Mars 2016 à 12:34
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
-- Structure de la table `reference`
--

CREATE TABLE IF NOT EXISTS `reference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(50) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `categorie` (`categorie`),
  KEY `categorie_2` (`categorie`),
  KEY `categorie_3` (`categorie`),
  KEY `id_2` (`id`),
  KEY `categorie_4` (`categorie`),
  KEY `categorie_5` (`categorie`),
  KEY `categorie_6` (`categorie`),
  KEY `categorie_7` (`categorie`),
  KEY `id_3` (`id`),
  KEY `categorie_8` (`categorie`),
  KEY `categorie_9` (`categorie`),
  KEY `categorie_10` (`categorie`),
  KEY `categorie_11` (`categorie`),
  KEY `categorie_12` (`categorie`),
  KEY `id_4` (`id`),
  KEY `id_5` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `reference`
--

INSERT INTO `reference` (`id`, `categorie`, `creation`, `modification`) VALUES
(6, 'Littérature', '2016-02-28 14:45:21', NULL),
(7, 'Cinéma', '2016-02-28 14:45:25', '2016-03-01 17:50:16'),
(8, 'Musique', '2016-02-28 14:45:31', NULL),
(9, 'Artistes', '2016-03-01 17:48:54', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
