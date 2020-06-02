-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 02 juin 2020 à 02:42
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `database_trottinette`
--

-- --------------------------------------------------------

--
-- Structure de la table `geolocalisation`
--

CREATE TABLE `geolocalisation` (
  `id` int(11) NOT NULL,
  `id_trottinette` int(11) NOT NULL,
  `latitude` int(11) NOT NULL,
  `longitude` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `code_postal` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `geolocalisation`
--

INSERT INTO `geolocalisation` (`id`, `id_trottinette`, `latitude`, `longitude`, `city`, `country`, `code_postal`, `created_at`) VALUES
(1, 2, 3, 6, 'Paris', 'France', '75015', '2020-06-02 02:05:28');

-- --------------------------------------------------------

--
-- Structure de la table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `id_trottinette` int(11) NOT NULL,
  `pression_pneus` varchar(255) DEFAULT NULL,
  `roues` varchar(255) DEFAULT NULL,
  `freins` varchar(255) DEFAULT NULL,
  `remplacement` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `maintenance`
--

INSERT INTO `maintenance` (`id`, `id_trottinette`, `pression_pneus`, `roues`, `freins`, `remplacement`, `created_at`) VALUES
(1, 2, 'Effectue', 'Correcte', 'Fonctionne', 'Remplacement pneu avant', '2020-06-02 02:07:22');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `id_trottinette` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_reservation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `id_trottinette`, `id_user`, `date_reservation`) VALUES
(1, 2, 2, '2020-06-02 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `trottinette`
--

CREATE TABLE `trottinette` (
  `id` int(11) NOT NULL,
  `modele` varchar(255) DEFAULT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `autonomie` int(11) DEFAULT '0',
  `vitesse` int(11) NOT NULL DEFAULT '0',
  `kilometrage` int(11) NOT NULL DEFAULT '0',
  `temps_trajet` int(11) NOT NULL DEFAULT '0',
  `compteur_km` int(11) NOT NULL DEFAULT '0',
  `temperature` int(11) NOT NULL DEFAULT '0',
  `regulateur_vitesse` tinyint(1) NOT NULL DEFAULT '0',
  `feu_arriere` tinyint(1) NOT NULL DEFAULT '0',
  `feu_avant` tinyint(1) NOT NULL DEFAULT '0',
  `duree_vie` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `trottinette`
--

INSERT INTO `trottinette` (`id`, `modele`, `marque`, `autonomie`, `vitesse`, `kilometrage`, `temps_trajet`, `compteur_km`, `temperature`, `regulateur_vitesse`, `feu_arriere`, `feu_avant`, `duree_vie`, `created_at`) VALUES
(2, 'm365', 'xaomi', 100, 50, 80, 5, 8965, 15, 0, 0, 0, 5, '2020-06-01 22:15:52'),
(3, 'z7', 'kingsong', 100, 30, 32, 55, 156, 13, 0, 0, 0, 10, '2020-06-01 22:24:40'),
(4, 'm365', 'xaomi', 100, 4, 80, 30, 120, 60, 0, 0, 0, 4, '2020-06-01 22:34:01');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `prenom` varchar(200) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`, `role`, `status`, `created_at`, `delete_at`) VALUES
(1, 'fanny', 'moussokoura', 'tamsir.cissa@gmail.com', '$2y$10$ocRYc7wLIuplQStTPaqpg.XrmWjayZtwla8H4v0DlVZZIRp1QJi/2', 'ROLE_USER', 1, '2020-06-01 04:46:11', NULL),
(2, 'john', 'light', 'john@gmail.com', '$2y$10$tacpzz6h6EInBFgxdQfHtOvKZxiCDHTXlv3F93LMMB3UMdoMfO1hS', 'ROLE_USER', 1, '2020-06-01 04:48:41', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `geolocalisation`
--
ALTER TABLE `geolocalisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trottinette`
--
ALTER TABLE `trottinette`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `geolocalisation`
--
ALTER TABLE `geolocalisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `trottinette`
--
ALTER TABLE `trottinette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
