-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 17 nov. 2020 à 04:47
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `medias_paul_vente_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE `achats` (
  `achat_id` int(11) NOT NULL,
  `client_sid` int(11) NOT NULL,
  `livre_sid` int(11) NOT NULL,
  `date_achat` datetime NOT NULL,
  `qte_livre` int(11) NOT NULL,
  `prix_livre` float NOT NULL,
  `prix_total` float NOT NULL,
  `devise_prix` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `achats`
--

INSERT INTO `achats` (`achat_id`, `client_sid`, `livre_sid`, `date_achat`, `qte_livre`, `prix_livre`, `prix_total`, `devise_prix`) VALUES
(1, 4, 1, '2020-11-17 00:44:59', 2, 75, 150, 'USD');

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

CREATE TABLE `auteurs` (
  `aut_id` int(11) NOT NULL,
  `nom_auteur` varchar(25) NOT NULL,
  `prenom_auteur` varchar(25) NOT NULL,
  `contact` text NOT NULL,
  `domaine_experience` text NOT NULL,
  `biographie` text,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adresse_email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`aut_id`, `nom_auteur`, `prenom_auteur`, `contact`, `domaine_experience`, `biographie`, `date_ajout`, `adresse_email`) VALUES
(1, 'simbi', 'daniel', '0859952521', 'Informatique, Mathematique et Biologie-chimie', 'Concepteur des systemes d\'information et developpeur informatique depuis plus de 15 ans d\'experiences', '2020-11-17 00:32:51', 'daniel@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `cli_id` int(11) NOT NULL,
  `nom_client` varchar(75) NOT NULL,
  `phone_client` varchar(25) NOT NULL,
  `email_client` varchar(75) NOT NULL,
  `ville_client` varchar(75) NOT NULL,
  `code_postal` varchar(25) NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`cli_id`, `nom_client`, `phone_client`, `email_client`, `ville_client`, `code_postal`, `date_ajout`, `user_sid`) VALUES
(1, 'Mohamed Rubuz', '+243975556941', 'mohamed@gmail.com', 'Lubumbashi', '2223', '2020-11-16 22:13:13', 4);

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

CREATE TABLE `factures` (
  `fac_id` int(11) NOT NULL,
  `numer_facture` int(11) NOT NULL,
  `date_facture` datetime NOT NULL,
  `net_a_payer` float NOT NULL,
  `client_sid` int(11) NOT NULL,
  `etat_facture` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `liv_id` int(11) NOT NULL,
  `num_inventaire` varchar(25) NOT NULL,
  `etat_livre` varchar(75) NOT NULL,
  `prix_livre` float NOT NULL,
  `observation` text NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ouvrage_sid` int(11) NOT NULL,
  `devise_prix` varchar(10) NOT NULL,
  `date_pub` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`liv_id`, `num_inventaire`, `etat_livre`, `prix_livre`, `observation`, `date_ajout`, `ouvrage_sid`, `devise_prix`, `date_pub`) VALUES
(1, '2020-001', 'disponible', 75, 'Livre informatique aux editions eyrolles', '2020-11-17 00:49:24', 1, 'USD', '2020-01-17');

-- --------------------------------------------------------

--
-- Structure de la table `ouvrages`
--

CREATE TABLE `ouvrages` (
  `ouv_id` int(11) NOT NULL,
  `code_isbn` varchar(25) NOT NULL,
  `titre_ouvrage` text NOT NULL,
  `annee_pub` year(4) NOT NULL,
  `edition_pub` varchar(75) NOT NULL,
  `lieu_pub` varchar(75) NOT NULL,
  `nbre_livres` int(11) NOT NULL,
  `resume_ouvrage` text NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `auteur_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ouvrages`
--

INSERT INTO `ouvrages` (`ouv_id`, `code_isbn`, `titre_ouvrage`, `annee_pub`, `edition_pub`, `lieu_pub`, `nbre_livres`, `resume_ouvrage`, `date_ajout`, `auteur_sid`) VALUES
(1, 'ISBN-2020-001', 'Informaticien et son environnement', 2019, '2eme Ed.', 'Kinshasa', 5, 'Cet ouvrage a été réalise suite a une demande des internautes sur notre blog de Lubumbashi forum today', '2020-11-17 00:39:33', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_users`
--

CREATE TABLE `tb_im_users` (
  `id_asset` int(11) NOT NULL,
  `asset_fullname` varchar(75) NOT NULL,
  `asset_username` varchar(50) DEFAULT NULL,
  `asset_password` varchar(60) DEFAULT NULL,
  `asset_email` varchar(50) DEFAULT NULL,
  `asset_sexe` varchar(10) DEFAULT NULL,
  `asset_phone` varchar(50) DEFAULT NULL,
  `asset_type` varchar(20) DEFAULT 'logisticien',
  `date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_connected` timestamp NULL DEFAULT NULL,
  `account_activated` varchar(25) DEFAULT 'active',
  `asset_avatar` varchar(75) DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  `asset_fonction` varchar(75) NOT NULL,
  `asset_matricule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_users`
--

INSERT INTO `tb_im_users` (`id_asset`, `asset_fullname`, `asset_username`, `asset_password`, `asset_email`, `asset_sexe`, `asset_phone`, `asset_type`, `date_ajout`, `date_connected`, `account_activated`, `asset_avatar`, `date_update`, `asset_fonction`, `asset_matricule`) VALUES
(1, 'Elie Mwez', 'eliemwez', '$2y$12$lgSZ78FDfw7MUBBIrMgsfOB2BEBDapoD4jIJEtr.arj6dSYRoBDZG', 'eliemwez.rubuz@gmail.com', 'Masculin', '+243858533285', 'user', '2020-09-11 08:08:58', '2020-09-21 08:02:11', 'active', 'global/img/avatars/avatar-eliemwez2.jpg', '2020-09-19 14:07:30', 'logisticien', '11220'),
(2, 'Administrateur', 'admin', '$2y$12$bGYGbrhUKpkUVun35wVyq.E3xoHKEsztWso0Hw6xlP4pRPrhNqxpu', 'admin@gmail.com', 'Homme', '+243903774951', 'admin', '2020-09-21 08:01:52', '2020-11-16 21:52:58', 'active', 'global/img/avatars/precedent-icone-5823-128.png', '2020-11-15 21:57:03', 'admin', '2020010'),
(4, 'Mohamed Rubuz', 'mohamed', '$2y$12$bpht21c/qLCMUM4K7d6sS.IfVaTOZJjljlQYXEa.cLfnbz7rbA/qu', 'mohamed@gmail.com', 'masculin', '+243975556941', 'utilisateur', '2020-11-16 20:13:13', '2020-11-16 22:53:40', 'active', NULL, NULL, 'client', 'CWC83');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achats`
--
ALTER TABLE `achats`
  ADD PRIMARY KEY (`achat_id`);

--
-- Index pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`aut_id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`cli_id`);

--
-- Index pour la table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`fac_id`);

--
-- Index pour la table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`liv_id`);

--
-- Index pour la table `ouvrages`
--
ALTER TABLE `ouvrages`
  ADD PRIMARY KEY (`ouv_id`);

--
-- Index pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  ADD PRIMARY KEY (`id_asset`),
  ADD UNIQUE KEY `asset_username` (`asset_username`,`asset_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achats`
--
ALTER TABLE `achats`
  MODIFY `achat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `aut_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `factures`
--
ALTER TABLE `factures`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `livres`
--
ALTER TABLE `livres`
  MODIFY `liv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ouvrages`
--
ALTER TABLE `ouvrages`
  MODIFY `ouv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
