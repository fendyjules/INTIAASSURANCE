-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 27 sep. 2024 à 04:08
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `intiadata`
--

-- --------------------------------------------------------

--
-- Structure de la table `agenceintia`
--

CREATE TABLE `agenceintia` (
  `id_agence` int(5) NOT NULL,
  `intitule_agence` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agenceintia`
--

INSERT INTO `agenceintia` (`id_agence`, `intitule_agence`) VALUES
(1, 'Yaoundé'),
(2, 'Douala');

-- --------------------------------------------------------

--
-- Structure de la table `clientintia`
--

CREATE TABLE `clientintia` (
  `id_client` int(5) NOT NULL,
  `categorie_client` varchar(20) NOT NULL,
  `agence_client` varchar(20) NOT NULL,
  `nom_client` varchar(100) NOT NULL,
  `prenom_client` varchar(100) NOT NULL,
  `sigle_client` varchar(20) NOT NULL,
  `raison_client` varchar(10) NOT NULL,
  `adresse_client` varchar(200) NOT NULL,
  `autreinformation_client` varchar(200) NOT NULL,
  `id_agence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clientintia`
--

INSERT INTO `clientintia` (`id_client`, `categorie_client`, `agence_client`, `nom_client`, `prenom_client`, `sigle_client`, `raison_client`, `adresse_client`, `autreinformation_client`, `id_agence`) VALUES
(1, 'personnemorale', 'Nom de l&#039;agence', 'AFREETECH', '', 'AFREETECH', 'SARL', 'YAOUNDE', 'NOUVELLE ROUTE BASTOS', 2),
(2, 'personnephysique', 'Nom de l&#039;agence', 'BELINGA', 'JULES', '', '', 'YAOUNDE', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_intia`
--

CREATE TABLE `user_intia` (
  `id_user` int(5) NOT NULL,
  `username_intia` varchar(100) NOT NULL,
  `mdp_user` varchar(5000) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `prenom_user` varchar(50) NOT NULL,
  `fonction_user` varchar(20) NOT NULL,
  `token` varchar(100) NOT NULL,
  `id_agence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user_intia`
--

INSERT INTO `user_intia` (`id_user`, `username_intia`, `mdp_user`, `nom_user`, `prenom_user`, `fonction_user`, `token`, `id_agence`) VALUES
(1, 'Adminadmin', '$2y$10$.mZ6zmHIOT9lzmpQNe0kg.q9a9u6r06fJ7zykIxPEJvcWdXApdy66', 'BELINGA', 'JULES', '', '10e4c9288dde20e1335b4152dc267e8a90d255ce01937e6d433f920e41e71e593822e15347e648c8d8b8fc1f650218a089c2', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agenceintia`
--
ALTER TABLE `agenceintia`
  ADD PRIMARY KEY (`id_agence`);

--
-- Index pour la table `clientintia`
--
ALTER TABLE `clientintia`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_agence` (`id_agence`);

--
-- Index pour la table `user_intia`
--
ALTER TABLE `user_intia`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_agence` (`id_agence`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agenceintia`
--
ALTER TABLE `agenceintia`
  MODIFY `id_agence` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `clientintia`
--
ALTER TABLE `clientintia`
  MODIFY `id_client` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user_intia`
--
ALTER TABLE `user_intia`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clientintia`
--
ALTER TABLE `clientintia`
  ADD CONSTRAINT `clientintia_ibfk_1` FOREIGN KEY (`id_agence`) REFERENCES `agenceintia` (`id_agence`);

--
-- Contraintes pour la table `user_intia`
--
ALTER TABLE `user_intia`
  ADD CONSTRAINT `user_intia_ibfk_1` FOREIGN KEY (`id_agence`) REFERENCES `agenceintia` (`id_agence`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
