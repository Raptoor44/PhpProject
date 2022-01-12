-- phpMyAdmin SQL Dump
-- version 5.1.0-dev
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 12 jan. 2022 à 15:00
-- Version du serveur :  10.3.27-MariaDB-0+deb10u1
-- Version de PHP : 7.3.27-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `info2_i200045_Liste_Etudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `Admin`
--

CREATE TABLE `Admin` (
  `Nom` varchar(255) NOT NULL,
  `Prénom` varchar(255) NOT NULL,
  `MDP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Admin`
--

INSERT INTO `Admin` (`Nom`, `Prénom`, `MDP`) VALUES
('Léger', 'Arthur', ''),
('Ernet', 'Bruno', '');

-- --------------------------------------------------------

--
-- Structure de la table `Enseignant`
--

CREATE TABLE `Enseignant` (
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `MDP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Enseignant`
--

INSERT INTO `Enseignant` (`Nom`, `Prenom`, `MDP`) VALUES
('Vieillard', 'Nathalie', NULL),
('Ernet', 'Bruno', NULL),
('Laforcade', 'Pierre', NULL),
('Decellières', 'Charles', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Etudiant`
--

CREATE TABLE `Etudiant` (
  `Promo` varchar(255) NOT NULL,
  `Groupe_TD` int(11) NOT NULL,
  `Groupe_TP` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `MDP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Etudiant`
--

INSERT INTO `Etudiant` (`Promo`, `Groupe_TD`, `Groupe_TP`, `Prenom`, `Nom`, `MDP`) VALUES
('BUT1', 11, 'A', 'Aimée', 'PERRAUDIN', NULL),
('BUT1', 11, 'A', 'Alain', 'FLINOIS', NULL),
('BUT1', 11, 'A', 'Annette', 'MASURE', NULL),
('BUT1', 11, 'A', 'Aurélie', 'SOLON', NULL),
('DUT2', 21, 'A', 'Agnès', 'GUNEY', NULL),
('DUT2', 21, 'A', 'Alain', 'MOURAUD', NULL),
('DUT2', 21, 'A', 'Ambroise', 'CROIX', NULL),
('DUT2', 21, 'A', 'Antoine', 'AOUIZERATE', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Responsable-année`
--

CREATE TABLE `Responsable-année` (
  `Nom` varchar(255) NOT NULL,
  `Prénom` varchar(255) NOT NULL,
  `MDP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Responsable-année`
--

INSERT INTO `Responsable-année` (`Nom`, `Prénom`, `MDP`) VALUES
('Roulin', 'Olivier', NULL),
('Laforcade', 'Pierre', NULL),
('Marfisi', 'Iza', NULL),
('Georges', 'Sébastien', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
