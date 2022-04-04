-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 28 mars 2022 à 14:57
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stagesuivi`
--

-- --------------------------------------------------------

--
-- Structure de la table `absences`
--

DROP TABLE IF EXISTS `absences`;
CREATE TABLE IF NOT EXISTS `absences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_absence` date NOT NULL,
  `nbr_heure_absence` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `alternants`
--

DROP TABLE IF EXISTS `alternants`;
CREATE TABLE IF NOT EXISTS `alternants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B508067E79F37AE5` (`id_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `centres`
--

DROP TABLE IF EXISTS `centres`;
CREATE TABLE IF NOT EXISTS `centres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_centre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complt_adresse_centre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220328135252', '2022-03-28 13:53:03', 254),
('DoctrineMigrations\\Version20220328141228', '2022-03-28 14:12:32', 42),
('DoctrineMigrations\\Version20220328143752', '2022-03-28 14:38:01', 81),
('DoctrineMigrations\\Version20220328144028', '2022-03-28 14:40:32', 32),
('DoctrineMigrations\\Version20220328145006', '2022-03-28 14:50:17', 103),
('DoctrineMigrations\\Version20220328145625', '2022-03-28 14:56:30', 69);

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heure_evenement` time NOT NULL,
  `date_evenement` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

DROP TABLE IF EXISTS `formateurs`;
CREATE TABLE IF NOT EXISTS `formateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FD80E57479F37AE5` (`id_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

DROP TABLE IF EXISTS `formations`;
CREATE TABLE IF NOT EXISTS `formations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sigle_formation` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intitule_formation` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_titre_formation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `millesime_formation` date NOT NULL,
  `date_parution_formation` date NOT NULL,
  `nsf_formation` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rome_formation` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_fin_valdte_aggrment_formation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `lieux_evenement`
--

DROP TABLE IF EXISTS `lieux_evenement`;
CREATE TABLE IF NOT EXISTS `lieux_evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_lieuevenement` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `responsables_legaux`
--

DROP TABLE IF EXISTS `responsables_legaux`;
CREATE TABLE IF NOT EXISTS `responsables_legaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3771A0C679F37AE5` (`id_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tuteurs`
--

DROP TABLE IF EXISTS `tuteurs`;
CREATE TABLE IF NOT EXISTS `tuteurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5831674379F37AE5` (`id_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `types_absence`
--

DROP TABLE IF EXISTS `types_absence`;
CREATE TABLE IF NOT EXISTS `types_absence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_typeabsence` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `types_evenement`
--

DROP TABLE IF EXISTS `types_evenement`;
CREATE TABLE IF NOT EXISTS `types_evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_typeevenement` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `name_user` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname_user` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddn_user` date NOT NULL,
  `adresse_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complt_adresse_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_tel_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `alternants`
--
ALTER TABLE `alternants`
  ADD CONSTRAINT `FK_B508067E79F37AE5` FOREIGN KEY (`id_user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `formateurs`
--
ALTER TABLE `formateurs`
  ADD CONSTRAINT `FK_FD80E57479F37AE5` FOREIGN KEY (`id_user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `responsables_legaux`
--
ALTER TABLE `responsables_legaux`
  ADD CONSTRAINT `FK_3771A0C679F37AE5` FOREIGN KEY (`id_user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `tuteurs`
--
ALTER TABLE `tuteurs`
  ADD CONSTRAINT `FK_5831674379F37AE5` FOREIGN KEY (`id_user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
