-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 21 Mai 2020 à 11:54
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

CREATE TABLE `emprunter` (
  `CODEM` int(28) NOT NULL,
  `DateEmprunt` date NOT NULL,
  `CodeEtudiant` int(28) NOT NULL,
  `CodeLivre` int(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `emprunter`
--

INSERT INTO `emprunter` (`CODEM`, `DateEmprunt`, `CodeEtudiant`, `CodeLivre`) VALUES
(2, '2020-05-21', 5, 7),
(5, '2020-05-20', 10, 25),
(6, '2000-06-05', 6, 7),
(7, '2000-06-05', 6, 7),
(9, '2020-05-21', 9, 19),
(78, '2000-06-05', 6, 7),
(98, '2020-05-21', 10, 79),
(99, '2020-05-21', 89, 88),
(168, '2020-05-21', 6, 25),
(696, '2000-06-05', 6, 7),
(785, '2000-06-05', 6, 7),
(856, '2020-05-21', 1, 18),
(863, '1999-06-06', 1, 4),
(995, '2020-05-21', 1, 79),
(7855, '2000-06-05', 6, 7),
(86355, '1999-06-06', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `CodeEtudiant` int(8) NOT NULL,
  `nom` varchar(20) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(20) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(50) COLLATE utf8_bin NOT NULL,
  `Classe` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`CodeEtudiant`, `nom`, `prenom`, `adresse`, `Classe`) VALUES
(1, 'iheb', 'lansari', 'rue mansoura', 'sem21'),
(5, 'jamila', 'ben mouhamed', 'tunis kelibia', 'ti14'),
(6, 'manel', 'lansari', 'kelibia mansoura', 'sem21'),
(9, 'moura', 'ben ahmed', 'tunis kelibia', 'sem21'),
(10, 'maryem', 'ben ahmed', 'tunis kelibia', 'sem21'),
(12, 'nour', 'ben malek', 'tunis kelibia', 'sem'),
(15, 'nouha', 'ben ahmed', 'tunis kelibia', 'sem2'),
(78, 'rihem', 'lansari', 'tunis kelibia', 'ti'),
(89, 'chayma', 'ben ahmed', 'tunis kelibia', 'TI');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `CodeLivre` int(28) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `Auteur` varchar(50) NOT NULL,
  `DateEdition` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `livre`
--

INSERT INTO `livre` (`CodeLivre`, `Titre`, `Auteur`, `DateEdition`) VALUES
(4, 'Faust', ' Johann Wolfgang', '1999-02-01'),
(7, 'Le PÃ¨re Goriot', 'HonorÃ© de Balzac', '2020-05-02'),
(9, 'les pauvres', 'mickel', '2000-09-05'),
(18, 'Romancero gitano', 'Federico GarcÃ­a Lorca', '1999-04-21'),
(19, 'Cent ans de solitude', 'Gabriel GarcÃ­a MÃ¡rquez', '1990-08-02'),
(25, 'les blogueurs', 'john', '2020-05-09'),
(77, 'Faust', ' Johann Wolfgang', '1999-05-13'),
(79, 'les orphanages', 'Manel', '2020-05-13'),
(88, 'Maya', 'joelle', '1990-04-08'),
(1860, 'LÃ -bas', 'Joris-Karl Huysmans ', '2020-05-21');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD PRIMARY KEY (`CODEM`),
  ADD KEY `CodeEtudiant` (`CodeEtudiant`),
  ADD KEY `CodeLivre` (`CodeLivre`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`CodeEtudiant`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`CodeLivre`),
  ADD UNIQUE KEY `CodeLivre` (`CodeLivre`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `emprunter`
--
ALTER TABLE `emprunter`
  MODIFY `CODEM` int(28) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=995555557;
--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `CodeLivre` int(28) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8899997;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD CONSTRAINT `emprunter_ibfk_1` FOREIGN KEY (`CodeEtudiant`) REFERENCES `etudiant` (`CodeEtudiant`),
  ADD CONSTRAINT `emprunter_ibfk_2` FOREIGN KEY (`CodeLivre`) REFERENCES `livre` (`CodeLivre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
