-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 27 avr. 2021 à 18:08
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gymcenter`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `email` varchar(30) NOT NULL,
  `motdepass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`email`, `motdepass`) VALUES
('aymenchandra@admin.tn', '9205cc0e701acd8d6934c1f3c0d0dce6'),
('ibtihelbenrhouma@admin.tn', '9205cc0e701acd8d6934c1f3c0d0dce6');

-- --------------------------------------------------------

--
-- Structure de la table `registers`
--

CREATE TABLE `registers` (
  `email` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `motdepass` varchar(40) NOT NULL,
  `datenaissance` varchar(10) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `registers`
--

INSERT INTO `registers` (`email`, `nom`, `prenom`, `motdepass`, `datenaissance`, `age`) VALUES
('aymenchandra1@gmail.com', 'Chandra', 'Aymen', 'd41d8cd98f00b204e9800998ecf8427e', '29/12/2000', 20),
('aymenchandra@gmail.com', 'aymen', 'chandra', '8400e6c8f52c8860d9e9535991c39c81', '15/12/2000', 20),
('chandra_mohamed@hotmail.fr', 'Aezaze', 'Aezazeeaz', '2e9ec317e197819358fbc43afca7d837', '15/12/2000', 20),
('ibtihelbenrhouma1@gmail.com', 'ibtihel', 'ben rhouma', 'd41d8cd98f00b204e9800998ecf8427e', '15/12/1995', 25),
('ibtihelbenrhouma@gmail.com', 'ibtihel', 'benrhouma', '827ccb0eea8a706c4c34a16891f84e7b', '12/15/2005', 15);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
