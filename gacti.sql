-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 09 mai 2023 à 20:13
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gacti`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `CODEANIM` char(8) NOT NULL,
  `DATEACT` date NOT NULL,
  `CODEETATACT` char(2) NOT NULL,
  `HRRDVACT` time DEFAULT NULL,
  `PRIXACT` decimal(7,2) DEFAULT NULL,
  `HRDEBUTACT` time DEFAULT NULL,
  `HRFINACT` time DEFAULT NULL,
  `DATEANNULEACT` date DEFAULT NULL,
  `NOMRESP` char(40) DEFAULT NULL,
  `PRENOMRESP` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`CODEANIM`, `DATEACT`, `CODEETATACT`, `HRRDVACT`, `PRIXACT`, `HRDEBUTACT`, `HRFINACT`, `DATEANNULEACT`, `NOMRESP`, `PRENOMRESP`) VALUES
('01', '2023-06-13', 'A', '08:00:00', '15.00', '09:00:00', '11:00:00', NULL, 'De Castro', 'Alexis'),
('02', '2023-06-23', 'B', '14:00:00', '25.00', '15:00:00', '17:00:00', NULL, 'Damoiselet', 'Emmy'),
('03', '2023-06-13', 'C', '19:00:00', '50.00', '20:00:00', '22:00:00', NULL, 'De Castro', 'Evann'),
('04', '2023-06-04', 'A', '06:00:00', '60.00', '07:00:00', '10:00:00', NULL, 'Borderie', 'Mathis'),
('05', '2023-06-03', 'B', '10:00:00', '40.00', '11:00:00', '13:00:00', NULL, 'Damoiselet', 'Celia');

-- --------------------------------------------------------

--
-- Structure de la table `animation`
--

CREATE TABLE `animation` (
  `CODEANIM` char(8) NOT NULL,
  `CODETYPEANIM` char(5) NOT NULL,
  `NOMANIM` char(40) DEFAULT NULL,
  `DATECREATIONANIM` date DEFAULT NULL,
  `DATEVALIDITEANIM` date DEFAULT NULL,
  `DUREEANIM` double(5,0) DEFAULT NULL,
  `LIMITEAGE` int(2) DEFAULT NULL,
  `TARIFANIM` decimal(7,2) DEFAULT NULL,
  `NBREPLACEANIM` int(2) DEFAULT NULL,
  `DESCRIPTANIM` char(250) DEFAULT NULL,
  `COMMENTANIM` char(250) DEFAULT NULL,
  `DIFFICULTEANIM` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animation`
--

INSERT INTO `animation` (`CODEANIM`, `CODETYPEANIM`, `NOMANIM`, `DATECREATIONANIM`, `DATEVALIDITEANIM`, `DUREEANIM`, `LIMITEAGE`, `TARIFANIM`, `NBREPLACEANIM`, `DESCRIPTANIM`, `COMMENTANIM`, `DIFFICULTEANIM`) VALUES
('01', 'A1', 'Balade a cheval', '2023-06-07', '2023-11-08', 90, 10, '20.00', 15, 'Balade a cheval dans les montagnes afin de decouvrir de superbes paysages', 'Venez avec des vieux vetements', 'Moyenne'),
('02', 'A2', 'Descente en kayak', '2023-06-05', '2023-10-18', 60, 14, '30.00', 15, 'Descente en kayak du Rhone', 'Prenez une combinaison', 'Difficile'),
('03', 'A3', 'Randonne en montagne', '2023-06-15', '2023-09-23', 120, 6, '19.00', 40, 'Balade dans les montagnes', 'Prenez de bonne chaussure', 'Moyenne'),
('04', 'A4', 'Yoga', '2023-06-01', '2023-09-06', 45, 5, '20.00', 20, 'Venez vous detendre', 'Affaire de sport', 'Facile'),
('05', 'A5', 'Escalade sur une montagne', '2023-06-22', '2023-08-11', 150, 18, '40.00', 10, 'Fan de sensation venez vous mettre a l\'epreuve', 'Prenez a boire', 'Difficile');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `USER` char(8) NOT NULL,
  `MDP` char(10) DEFAULT NULL,
  `NOMCOMPTE` char(40) DEFAULT NULL,
  `PRENOMCOMPTE` char(30) DEFAULT NULL,
  `DATEINSCRIP` date DEFAULT NULL,
  `DATEFERME` date DEFAULT NULL,
  `TYPEPROFIL` char(2) DEFAULT NULL,
  `DATEDEBSEJOUR` date DEFAULT NULL,
  `DATEFINSEJOUR` date DEFAULT NULL,
  `DATENAISCOMPTE` date DEFAULT NULL,
  `ADRMAILCOMPTE` char(70) DEFAULT NULL,
  `NOTELCOMPTE` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`USER`, `MDP`, `NOMCOMPTE`, `PRENOMCOMPTE`, `DATEINSCRIP`, `DATEFERME`, `TYPEPROFIL`, `DATEDEBSEJOUR`, `DATEFINSEJOUR`, `DATENAISCOMPTE`, `ADRMAILCOMPTE`, `NOTELCOMPTE`) VALUES
('Alexis', 'Alexis', 'De Castro', 'Alexis', '2022-09-08', '2022-09-24', 'an', NULL, NULL, '2022-09-07', 'decastroalexis5@gmail.com', '0788552865'),
('emmy', '1234', 'damoiselet', 'emmy', '2022-12-23', NULL, 'va', '2023-06-01', '2023-07-01', '2022-12-01', 'emmy.damoi@', '0788552865'),
('Evann', 'Evann', 'De Castro', 'Evann', '2022-09-06', '2022-09-08', 'va', '2023-06-01', '2023-07-01', '2022-09-29', 'evann.decastro@gmail.com', '0164481920');

-- --------------------------------------------------------

--
-- Structure de la table `etat_act`
--

CREATE TABLE `etat_act` (
  `CODEETATACT` char(2) NOT NULL,
  `NOMETATACT` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etat_act`
--

INSERT INTO `etat_act` (`CODEETATACT`, `NOMETATACT`) VALUES
('A', 'Ouverte'),
('B', 'Incertaine'),
('C', 'Annulee');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `NOINSCRIP` bigint(6) NOT NULL,
  `USER` char(8) NOT NULL,
  `CODEANIM` char(8) NOT NULL,
  `DATEACT` date NOT NULL,
  `DATEINSCRIP` date DEFAULT NULL,
  `DATEANNULE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`NOINSCRIP`, `USER`, `CODEANIM`, `DATEACT`, `DATEINSCRIP`, `DATEANNULE`) VALUES
(1, 'Evann', '01', '2022-09-24', '2022-12-23', '2022-12-23'),
(2, 'emmy', '01', '2023-01-04', '2022-12-23', NULL),
(4, 'Evann', '01', '2023-06-13', '2023-04-13', '2023-04-14'),
(5, 'evann', '02', '2023-06-23', '2023-04-14', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_anim`
--

CREATE TABLE `type_anim` (
  `CODETYPEANIM` char(5) NOT NULL,
  `NOMTYPEANIM` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_anim`
--

INSERT INTO `type_anim` (`CODETYPEANIM`, `NOMTYPEANIM`) VALUES
('A1', 'Sortie pedestre'),
('A2', 'Descente de riviere'),
('A3', 'Sortie d\'etudes de la flore'),
('A4', 'Cours de remise en forme'),
('A5', 'Sortie d\'escalade');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`CODEANIM`,`DATEACT`),
  ADD KEY `I_FK_ACTIVITE_ANIMATION` (`CODEANIM`),
  ADD KEY `I_FK_ACTIVITE_ETAT_ACT` (`CODEETATACT`);

--
-- Index pour la table `animation`
--
ALTER TABLE `animation`
  ADD PRIMARY KEY (`CODEANIM`),
  ADD KEY `I_FK_ANIMATION_TYPE_ANIM` (`CODETYPEANIM`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`USER`);

--
-- Index pour la table `etat_act`
--
ALTER TABLE `etat_act`
  ADD PRIMARY KEY (`CODEETATACT`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`NOINSCRIP`),
  ADD KEY `I_FK_INSCRIPTION_COMPTE` (`USER`),
  ADD KEY `I_FK_INSCRIPTION_ACTIVITE` (`CODEANIM`,`DATEACT`);

--
-- Index pour la table `type_anim`
--
ALTER TABLE `type_anim`
  ADD PRIMARY KEY (`CODETYPEANIM`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `NOINSCRIP` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `activite_ibfk_1` FOREIGN KEY (`CODEANIM`) REFERENCES `animation` (`CODEANIM`),
  ADD CONSTRAINT `activite_ibfk_2` FOREIGN KEY (`CODEETATACT`) REFERENCES `etat_act` (`CODEETATACT`);

--
-- Contraintes pour la table `animation`
--
ALTER TABLE `animation`
  ADD CONSTRAINT `animation_ibfk_1` FOREIGN KEY (`CODETYPEANIM`) REFERENCES `type_anim` (`CODETYPEANIM`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`USER`) REFERENCES `compte` (`USER`),
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`CODEANIM`,`DATEACT`) REFERENCES `activite` (`CODEANIM`, `DATEACT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
