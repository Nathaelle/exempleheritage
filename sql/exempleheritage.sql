-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 01 fév. 2021 à 14:23
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `exempleheritage`
--

-- --------------------------------------------------------

--
-- Structure de la table `demandeurs`
--

DROP TABLE IF EXISTS `demandeurs`;
CREATE TABLE IF NOT EXISTS `demandeurs` (
  `id_utilisateur` int(11) NOT NULL,
  `id_demandeur` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `cp` char(5) NOT NULL,
  `email` varchar(70) NOT NULL,
  `passwd` varchar(70) NOT NULL,
  PRIMARY KEY (`id_utilisateur`,`id_demandeur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demandeurs`
--

INSERT INTO `demandeurs` (`id_utilisateur`, `id_demandeur`, `prenom`, `nom`, `cp`, `email`, `passwd`) VALUES
(9, 9, 'Raymond', 'Dupuis', '84400', 'dupuisr@gmail.com', 'test'),
(10, 10, 'Raymond', 'Dupuis', '84400', 'dupuisr@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `tarif` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `intitule` varchar(80) NOT NULL,
  `illustration` varchar(50) DEFAULT 'default.png',
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `travailleurs`
--

DROP TABLE IF EXISTS `travailleurs`;
CREATE TABLE IF NOT EXISTS `travailleurs` (
  `id_utilisateur` int(11) NOT NULL,
  `id_travailleur` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `cp` char(5) NOT NULL,
  `email` varchar(70) NOT NULL,
  `passwd` varchar(70) NOT NULL,
  PRIMARY KEY (`id_utilisateur`,`id_travailleur`),
  UNIQUE KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `cp` char(5) NOT NULL,
  `email` varchar(70) NOT NULL,
  `passwd` varchar(70) NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `prenom`, `nom`, `cp`, `email`, `passwd`) VALUES
(1, 'Jean', 'Dupond', '84400', 'dupont@gmail.com', 'test'),
(2, 'Jean', 'Dupond', '84400', 'dupont@gmail.com', 'test'),
(3, 'Jean', 'Dupond', '84400', 'dupont@gmail.com', 'test'),
(4, 'Jean', 'Dupond', '84400', 'dupont@gmail.com', 'test'),
(5, 'Jean', 'Dupond', '84400', 'dupont@gmail.com', 'test'),
(6, 'Raymond', 'Dupuis', '84400', 'dupuisr@gmail.com', 'test'),
(7, 'Raymond', 'Dupuis', '84400', 'dupuisr@gmail.com', 'test'),
(8, 'Raymond', 'Dupuis', '84400', 'dupuisr@gmail.com', 'test'),
(9, 'Raymond', 'Dupuis', '84400', 'dupuisr@gmail.com', 'test'),
(10, 'Raymond', 'Dupuis', '84400', 'dupuisr@gmail.com', 'test'),
(11, 'Raymond', 'Dupuis', '84400', 'dupuisr@gmail.com', 'test');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `travailleurs`
--
ALTER TABLE `travailleurs`
  ADD CONSTRAINT `Travailleur_Utilisateurs_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
