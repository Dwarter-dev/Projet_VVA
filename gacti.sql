-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 28 fév. 2021 à 13:29
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gacti`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `NOACT` int(4) NOT NULL AUTO_INCREMENT,
  `CODEANIM` char(8) NOT NULL,
  `CODEETATACT` char(2) NOT NULL,
  `DATEACT` date NOT NULL,
  `HRRDVACT` time DEFAULT NULL,
  `PRIXACT` decimal(7,2) DEFAULT NULL,
  `HRDEBUTACT` time DEFAULT NULL,
  `HRFINACT` time DEFAULT NULL,
  `DATEANNULEACT` date DEFAULT NULL,
  `NOMRESP` char(40) DEFAULT NULL,
  `PRENOMRESP` char(30) DEFAULT NULL,
  PRIMARY KEY (`NOACT`),
  KEY `I_FK_ACTIVITE_ANIMATION` (`CODEANIM`),
  KEY `I_FK_ACTIVITE_ETAT_ACT` (`CODEETATACT`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`NOACT`, `CODEANIM`, `CODEETATACT`, `DATEACT`, `HRRDVACT`, `PRIXACT`, `HRDEBUTACT`, `HRFINACT`, `DATEANNULEACT`, `NOMRESP`, `PRENOMRESP`) VALUES
(3, 'SKI', 'LB', '2020-12-10', '09:45:00', '100.00', '10:00:00', '13:00:00', '0000-00-00', 'Thomas', 'Le Bret'),
(2, 'BABYFOOT', 'LB', '2020-08-15', '13:30:00', '5.00', '14:00:00', '16:00:00', '0000-00-00', 'Da Costa', 'Steven'),
(4, 'REPNOEL', 'LB', '2020-12-24', '17:30:00', '2.00', '18:00:00', '23:00:00', '0000-00-00', 'Thomas', 'Le Bret'),
(9, 'LUGE', '', '2021-02-25', '11:20:00', '15.00', '12:05:00', '14:20:00', '2021-02-27', 'Steven', 'Da Costa'),
(6, 'RANDONNE', 'FE', '2021-01-16', '23:23:00', '25.00', '05:34:00', '04:35:00', '2021-02-11', 'Da Costa', 'Steven');

-- --------------------------------------------------------

--
-- Structure de la table `animation`
--

DROP TABLE IF EXISTS `animation`;
CREATE TABLE IF NOT EXISTS `animation` (
  `CODEANIM` char(8) NOT NULL,
  `CODETYPEANIM` char(5) NOT NULL,
  `NOMANIM` char(40) DEFAULT NULL,
  `DATECREATIONANIM` date DEFAULT NULL,
  `DATEVALIDITEANIM` date DEFAULT NULL,
  `DUREEANIM` double(5,0) DEFAULT NULL,
  `LIMITEAGE` int(2) DEFAULT NULL,
  `TARIFANIM` decimal(7,2) DEFAULT NULL,
  `NBREPLACEANIM` int(2) DEFAULT NULL,
  `DESCRIPTANIM` char(250) DEFAULT NULL,
  `COMMENTANIM` char(250) DEFAULT NULL,
  `DIFFICULTEANIM` char(40) DEFAULT NULL,
  PRIMARY KEY (`CODEANIM`),
  KEY `I_FK_ANIMATION_TYPE_ANIM` (`CODETYPEANIM`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animation`
--

INSERT INTO `animation` (`CODEANIM`, `CODETYPEANIM`, `NOMANIM`, `DATECREATIONANIM`, `DATEVALIDITEANIM`, `DUREEANIM`, `LIMITEAGE`, `TARIFANIM`, `NBREPLACEANIM`, `DESCRIPTANIM`, `COMMENTANIM`, `DIFFICULTEANIM`) VALUES
('Rando', 'EXT', 'Randonnée', '2020-06-10', '2020-06-17', 150, 90, '10.00', 15, 'Parcours de randonnée des environs', 'Je recommande pour la visite des environs', 'Facile'),
('Ski', 'SKI', 'Séance de Ski', '2020-12-01', '2020-12-07', 180, 7, '100.00', 20, 'Séance de ski dans la zone indiqué', 'C\'est fun, surtout en famille', 'Moyen'),
('Rep Noël', 'INT', 'Repas de noêl', '2020-12-10', '2020-12-20', 300, NULL, '2.00', 75, 'Repas de noël organisé à l\'occasion des fêtes de noël', 'Venez Nombreux :) !', 'Aucune'),
('Babyfoot', 'INT', 'Tournoi de Babyfoot', '2020-08-04', '2020-08-13', 120, 10, '5.00', 40, 'Tournois de Babyfoot organisé par l\'établissement pour gagner le respect du village vacances', 'Jouer pour le respect :)', 'Avancé');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `USER` char(8) NOT NULL,
  `MDP` char(10) DEFAULT NULL,
  `NOMCOMPTE` char(40) DEFAULT NULL,
  `PRENOMCOMPTE` char(30) DEFAULT NULL,
  `DATEINSCRIP` date DEFAULT NULL,
  `DATEFERME` date DEFAULT NULL,
  `TYPEPROFIL` char(2) DEFAULT NULL,
  `DATEDEBSEJOUR` date DEFAULT NULL,
  `DATEFINSEJOUR` date DEFAULT NULL,
  `DATENAISCOMPTE` date DEFAULT NULL,
  `ADRMAILCOMPTE` char(70) DEFAULT NULL,
  `NOTELCOMPTE` char(15) DEFAULT NULL,
  PRIMARY KEY (`USER`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`USER`, `MDP`, `NOMCOMPTE`, `PRENOMCOMPTE`, `DATEINSCRIP`, `DATEFERME`, `TYPEPROFIL`, `DATEDEBSEJOUR`, `DATEFINSEJOUR`, `DATENAISCOMPTE`, `ADRMAILCOMPTE`, `NOTELCOMPTE`) VALUES
('Tho_03', 'MDP04', 'Thomas', 'LeBret', '2020-11-23', '2021-02-10', 'EN', '2020-10-04', '2020-12-30', '2000-04-06', 'thomas.LeBret@vva.com', '0679846513'),
('Max_02', 'MDP02', 'Max', 'GABRIEL', '2020-01-15', '2021-04-07', 'VA', '2020-06-02', '2020-06-24', '1995-04-22', 'max.Gabriel@vva.com', '0633333333'),
('Adri_01', 'MDP03', 'Adri', 'UN', '2020-05-05', '2021-12-18', 'VA', '2020-12-02', '2020-12-30', '1999-03-18', 'adri.deux@vva.com', '0615263580'),
('Steve_00', 'MDP01', 'Steven', 'DA COSTA', '2020-04-07', '2021-03-08', 'EN', '2020-06-05', '2020-08-31', '2000-07-15', 'steven.dacosta@vva.com', '0601020304');

-- --------------------------------------------------------

--
-- Structure de la table `etat_act`
--

DROP TABLE IF EXISTS `etat_act`;
CREATE TABLE IF NOT EXISTS `etat_act` (
  `CODEETATACT` char(2) NOT NULL,
  `NOMETATACT` char(25) DEFAULT NULL,
  PRIMARY KEY (`CODEETATACT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `NOINSCRIP` bigint(6) NOT NULL AUTO_INCREMENT,
  `USER` char(8) NOT NULL,
  `NOACT` int(4) NOT NULL,
  `DATEINSCRIP` date DEFAULT NULL,
  `DATEANNULE` date DEFAULT NULL,
  PRIMARY KEY (`NOINSCRIP`),
  KEY `I_FK_INSCRIPTION_COMPTE` (`USER`),
  KEY `I_FK_INSCRIPTION_ACTIVITE` (`NOACT`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`NOINSCRIP`, `USER`, `NOACT`, `DATEINSCRIP`, `DATEANNULE`) VALUES
(7, 'Max_02', 2, '2021-02-25', '0000-00-00'),
(26, 'Max_02', 3, '2021-02-28', '0000-00-00'),
(17, 'Steve_00', 9, '2021-02-26', '0000-00-00'),
(8, 'Steve_00', 3, '2021-02-27', '2021-02-26'),
(25, 'Max_02', 2, '2021-02-28', '0000-00-00'),
(24, 'Max_02', 3, '2021-02-28', '0000-00-00'),
(15, 'Steve_00', 4, '2021-02-25', '0000-00-00'),
(14, 'Steve_00', 3, '2021-02-25', '0000-00-00'),
(13, 'Steve_00', 3, '2021-02-25', '0000-00-00'),
(23, 'Max_02', 3, '2021-02-28', '0000-00-00'),
(22, 'Steve_00', 3, '2021-02-28', '0000-00-00'),
(27, 'Max_02', 4, '2021-02-28', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `type_anim`
--

DROP TABLE IF EXISTS `type_anim`;
CREATE TABLE IF NOT EXISTS `type_anim` (
  `CODETYPEANIM` char(5) NOT NULL,
  `NOMTYPEANIM` char(50) DEFAULT NULL,
  PRIMARY KEY (`CODETYPEANIM`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
