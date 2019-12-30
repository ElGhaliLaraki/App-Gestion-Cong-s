-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 08 nov. 2018 à 21:15
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `conge`
--

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

DROP TABLE IF EXISTS `conge`;
CREATE TABLE IF NOT EXISTS `conge` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `nbjd` int(11) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `num` varchar(255) NOT NULL,
  `idt` int(11) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conge`
--

INSERT INTO `conge` (`numero`, `datedebut`, `datefin`, `nbjd`, `statut`, `num`, `idt`) VALUES
(1, '2018-11-10', '2018-11-15', 5, 'valide', 'AB5544', 2),
(3, '2018-11-25', '2018-11-27', 2, 'refuse', 'AB5544', 2),
(5, '2018-11-16', '2018-11-17', 0, 'valide', 'AB5544', 3),
(4, '2018-11-15', '2018-11-23', 0, 'refuse', 'AB5544', 4),
(6, '2018-11-16', '2018-11-19', 0, 'encours', 'AB5544', 4),
(7, '2018-11-23', '2018-11-29', 6, 'encours', 'AB5544', 3);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `cin` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `dateembouche` date NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`cin`, `nom`, `prenom`, `email`, `telephone`, `login`, `password`, `adresse`, `dateembouche`, `type`) VALUES
('GR0022', 'El Ghali', 'laraki', 'ghali@gmail.com', '09988998899', 'ghali', 'ghali', '10 rue salam mohammedia', '2017-11-08', 'rh'),
('HHHHH', 'KK', 'K', 'imt@gmail.com', 'K', 'K', 'LL', 'hhh', '2018-10-09', 'employe'),
('AB5544', 'Maqdad', 'ayoub', 'gkk@ggg.gg', 'gh', 'ayoub', 'ayoub', 'gggggggggggggg', '2018-10-04', 'employe'),
('FF', 'gg', 'g', 'gharib@gmail.com', 'g', 'ggg', 'g', 'g', '2018-11-28', 'employe');

-- --------------------------------------------------------

--
-- Structure de la table `typeconge`
--

DROP TABLE IF EXISTS `typeconge`;
CREATE TABLE IF NOT EXISTS `typeconge` (
  `idtype` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`idtype`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typeconge`
--

INSERT INTO `typeconge` (`idtype`, `libelle`) VALUES
(3, 'Formation'),
(2, 'Maladie'),
(4, 'Mariage');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
