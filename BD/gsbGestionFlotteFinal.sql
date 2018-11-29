-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 29 Novembre 2018 à 14:28
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gsb_gestionflotte`
--

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

CREATE TABLE `centre` (
  `Cagrement` varchar(8) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `CraisonSociale` varchar(80) CHARACTER SET utf8 DEFAULT NULL,
  `Cadresse` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `CcodePostal` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `Cville` varchar(80) CHARACTER SET utf8 DEFAULT NULL,
  `Ctelephone` varchar(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `centre`
--

INSERT INTO `centre` (`Cagrement`, `CraisonSociale`, `Cadresse`, `CcodePostal`, `Cville`, `Ctelephone`) VALUES
('S015C021', 'CONTROLE AUTO SECURITE SARL', '6 AVE G POMPIDOU', '15000', 'AURILLAC', '0471639550'),
('S015D052', 'LG AUTOCONTROLE', '27 AVE DES VOLONTAIRES', '15000', 'AURILLAC', NULL),
('S015S057', 'LGT AUTO CONTROLE', '159 AVENUE DU GENERAL LECLERC', '15000', 'AURILLAC', NULL),
('S015S058', 'LGT AUTOCONTROLE', '80 AVENUE DE CONTHE', '15000', 'AURILLAC', NULL),
('S015T035', 'AGREE AURILLAC AUTO CONTROLE', '86 BLD LOUIS DAUZIER ', '15000', 'AURILLAC', '0471648409'),
('S015T045', 'AGREE AURILLAC AUTO CONTROLE', '8 RUE GEORGES BRASSENS', '15000', 'AURILLAC', NULL),
('S015Z046', 'CONTROLE TECHNIQUE AURILLACOIS', '4 RUE DU 11 NOVEMBRE', '15000', 'AURILLAC', '0471484205'),
('S015Z053', 'CANTAL CONTROLES TECHNIQUES', '12 ZA DES QUATRE CHEMINS', '15250', 'NAUCELLES', NULL),
('S015Z055', 'AUTO CONTROLE QUERCY LIMOUSIN', '47 AVENUE DES PUPILLES DE LA NATION', '15000', 'AURILLAC', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `controle`
--

CREATE TABLE `controle` (
  `Cid` int(255) NOT NULL,
  `Cbilan` varchar(255) DEFAULT NULL,
  `Ccentre` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `entretien`
--

CREATE TABLE `entretien` (
  `Eid` int(255) NOT NULL,
  `Etechnicien` int(11) NOT NULL,
  `Edate` date NOT NULL,
  `Evehicule` varchar(10) NOT NULL,
  `Edescriptif` varchar(255) NOT NULL,
  `Eetat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `Ecode` int(11) NOT NULL,
  `Elibelle` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `Rid` int(11) NOT NULL,
  `Rlibelle` varchar(22) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

CREATE TABLE `salarie` (
  `Sid` int(11) NOT NULL,
  `Snom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Sprenom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Smail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Spassword` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Srole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `Vimmat` varchar(10) NOT NULL,
  `Vdateachat` date NOT NULL,
  `Vmodele` varchar(255) NOT NULL,
  `Venergie` varchar(255) NOT NULL,
  `Vcommercial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `centre`
--
ALTER TABLE `centre`
  ADD PRIMARY KEY (`Cagrement`);

--
-- Index pour la table `controle`
--
ALTER TABLE `controle`
  ADD PRIMARY KEY (`Cid`),
  ADD KEY `Ccentre` (`Ccentre`);

--
-- Index pour la table `entretien`
--
ALTER TABLE `entretien`
  ADD PRIMARY KEY (`Eid`),
  ADD KEY `Etechnicien` (`Etechnicien`),
  ADD KEY `Eetat` (`Eetat`),
  ADD KEY `Evehicule` (`Evehicule`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`Ecode`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Rid`);

--
-- Index pour la table `salarie`
--
ALTER TABLE `salarie`
  ADD PRIMARY KEY (`Sid`),
  ADD KEY `Srole` (`Srole`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`Vimmat`),
  ADD KEY `Vcommercial` (`Vcommercial`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `entretien`
--
ALTER TABLE `entretien`
  MODIFY `Eid` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `etat`
--
ALTER TABLE `etat`
  MODIFY `Ecode` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `Rid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `salarie`
--
ALTER TABLE `salarie`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `controle`
--
ALTER TABLE `controle`
  ADD CONSTRAINT `controle_ibfk_1` FOREIGN KEY (`Cid`) REFERENCES `entretien` (`Eid`),
  ADD CONSTRAINT `controle_ibfk_2` FOREIGN KEY (`Ccentre`) REFERENCES `centre` (`Cagrement`);

--
-- Contraintes pour la table `entretien`
--
ALTER TABLE `entretien`
  ADD CONSTRAINT `entretien_ibfk_1` FOREIGN KEY (`Etechnicien`) REFERENCES `salarie` (`Sid`),
  ADD CONSTRAINT `entretien_ibfk_3` FOREIGN KEY (`Eetat`) REFERENCES `etat` (`Ecode`),
  ADD CONSTRAINT `entretien_ibfk_4` FOREIGN KEY (`Evehicule`) REFERENCES `vehicule` (`Vimmat`);

--
-- Contraintes pour la table `salarie`
--
ALTER TABLE `salarie`
  ADD CONSTRAINT `salarie_ibfk_1` FOREIGN KEY (`Srole`) REFERENCES `role` (`Rid`);

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `vehicule_ibfk_1` FOREIGN KEY (`Vcommercial`) REFERENCES `salarie` (`Sid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
