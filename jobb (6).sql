-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 14 mai 2023 à 20:57
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jobb`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id-ad` int(6) NOT NULL,
  `nom_utilisateur` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id-ad`, `nom_utilisateur`, `email`, `mdp`) VALUES
(1, 'asma', 'asmabeztout1@gmail.com', 'asmabeztout1@gmail.com'),
(9, 'maissa', 'sahlimaissa2002@gmail.com', 'sahlimaissa2002@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID` int(26) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `datedenaissance` date NOT NULL,
  `ville` varchar(255) NOT NULL,
  `formation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`ID`, `nom`, `prenom`, `datedenaissance`, `ville`, `formation`, `email`, `mdp`) VALUES
(5, 'asma', 'beztout', '2001-04-23', 'alger', 'informatique', 'asmabeztout1@gmail.com', 'asmabeztout1@gmail.com'),
(8, 'turkia\r\n', 'khalfaoui\r\n', '2003-05-01', 'setif\r\n', 'st\r\n', 'khalfaouiturkia@gmail.com\r\n', 'khalfaouiturkia@gmail.com\r\n'),
(12, 'asma', 'beztout', '0000-00-00', 'alger', 'FO', 'asmabeztout1@gmail.com', 'khalfaouiturkia@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `opportunities`
--

CREATE TABLE `opportunities` (
  `id_o` int(20) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `vill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `opportunities`
--

INSERT INTO `opportunities` (`id_o`, `nom`, `domain`, `vill`) VALUES
(1, '', 'informatique', 'annaba'),
(9, '', 'informatique', 'annaba'),
(10, '', 'gestion', 'annaba'),
(12, '', 'architecte', 'oran'),
(13, '', 'math', 'oran'),
(14, '', 'st', 'annaba');

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `id` int(11) NOT NULL,
  `id_o` int(20) NOT NULL,
  `duree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id-ad`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `opportunities`
--
ALTER TABLE `opportunities`
  ADD PRIMARY KEY (`id_o`),
  ADD KEY `idx_id_ville` (`vill`);

--
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id-ad` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `ID` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `opportunities`
--
ALTER TABLE `opportunities`
  MODIFY `id_o` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `stage`
--
ALTER TABLE `stage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
