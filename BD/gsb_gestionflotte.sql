-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 19 Octobre 2018 à 08:32
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gsb_gestionflotte`
--
CREATE DATABASE IF NOT EXISTS `gsb_gestionflotte` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gsb_gestionflotte`;

-- --------------------------------------------------------

--
-- Structure de la table `entretien`
--

CREATE TABLE IF NOT EXISTS `entretien` (
  `Eid` int(11) NOT NULL AUTO_INCREMENT,
  `Edate` date NOT NULL,
  `Etechnicien` varchar(200) DEFAULT NULL,
  `Edescriptif` varchar(400) DEFAULT NULL,
  `Eimmat` varchar(9) NOT NULL,
  PRIMARY KEY (`Eid`),
  KEY `entretien_ibfk_1` (`Eimmat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `entretien`
--

INSERT INTO `entretien` (`Eid`, `Edate`, `Etechnicien`, `Edescriptif`, `Eimmat`) VALUES
(1, '2016-10-26', 'Alexandre PINQUIER', 'Montage pneus avants neige', 'DW-456-TR'),
(2, '2017-05-10', 'Julien LACAZE', 'Montage pneus avants été', 'DW-456-TR'),
(3, '2017-06-15', 'Julien LACAZE', 'Rendez-vous garage Toyota - Entretien garantie 15000km', 'DW-456-TR'),
(4, '2017-11-02', 'Alexandre PINQUIER', 'Montage 4 pneus 4 saisons', 'DW-456-TR'),
(5, '2017-11-03', 'Alexandre PINQUIER', 'Montage 4 pneus 4 saisons', 'EA-236-GA'),
(6, '2017-11-04', 'Alexandre PINQUIER', 'Montage 4 pneus 4 saisons', 'EG-504-FP'),
(7, '2018-12-19', 'Julien LACAZE', 'Changement pare-brise', 'EA-236-GA'),
(8, '2018-01-24', 'Julien LACAZE', 'Rendez-vous garage Toyota - Entretien garantie 30000km', 'DW-456-TR'),
(9, '2018-02-13', 'Alexandre PINQUIER', 'Changement ampoule clignotant avant-droit', 'EG-504-FP'),
(12, '2018-04-11', 'Julien LACAZE', 'Réglage optiques', 'EG-504-FP'),
(13, '2018-05-11', 'Alexandre PINQUIER', 'Rendez-vous garage Renault - Entretien garantie 30000km', 'EA-236-GA'),
(14, '2018-07-03', 'Alexandre PINQUIER', 'Changement filtre habitacle', 'DW-456-TR'),
(15, '2018-09-19', 'Julien LACAZE', 'Rendez-vous garage Peugeot - Entretien garantie 25000km', 'EG-504-FP');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE IF NOT EXISTS `vehicule` (
  `Vimmat` varchar(9) NOT NULL DEFAULT '',
  `VdateAchat` date NOT NULL,
  `Vmodele` varchar(200) NOT NULL,
  `Venergie` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Vimmat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Structure de la table `technicien`
--

CREATE TABLE IF NOT EXISTS 'technicien'(
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`Vimmat`, `VdateAchat`, `Vmodele`, `Venergie`) VALUES
('DW-456-TR', '2016-10-21', 'TOYOTA Auris II (2) HYBRIDE 136H DYNAMIC BUSINESS', 'Hybride Essence Electrique'),
('EA-236-GA', '2017-03-07', 'RENAULT Mégane IV 1.5 DCI 110 ENERGY LIFE', 'Diesel'),
('EG-504-FP', '2017-10-24', 'PEUGEOT 208 (2) 1.6 BLUEHDI 100 ALLURE 5P', 'Diesel'),
('EK-812-HH', '2018-02-24', 'DS DS3 (2) 1.2 PURETECH 82 DRIVE EFFICIENCY SO CHIC', 'Essence');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `entretien`
--
ALTER TABLE `entretien`
  ADD CONSTRAINT `entretien_ibfk_1` FOREIGN KEY (`Eimmat`) REFERENCES `vehicule` (`Vimmat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
