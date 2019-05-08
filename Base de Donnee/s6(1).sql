-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 08 Mai 2019 à 12:53
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `s6`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`Id`, `Nom`) VALUES
(1, 'Superheros'),
(2, 'Serie'),
(3, 'Animation');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Id` int(100) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`Id`, `Nom`, `Password`) VALUES
(1, 'admin', 'admin'),
(2, 'mikasa', 'mikasa');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `Id` int(100) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Categorie` varchar(100) NOT NULL,
  `DateAjout` date NOT NULL,
  `DateSortie` date NOT NULL,
  `Note` int(100) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Lien` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Background` varchar(200) NOT NULL,
  `Langue` varchar(10) NOT NULL,
  `Streaming` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`Id`, `Nom`, `Categorie`, `DateAjout`, `DateSortie`, `Note`, `Image`, `Lien`, `Description`, `Background`, `Langue`, `Streaming`) VALUES
(1, 'Avengers:Endgame', 'Superheros', '2019-05-03', '2019-04-24', 20, 'image1.jpg', 'https://www.youtube.com/watch?v=wV-Q0o2OQjQ', 'ceci est une description', 'background1.jpg', 'VF', '//streamango.com/v/d/rrbrobrektmqcmdn~1557387049~197.149.0.0~xQcNkHso/304'),
(2, 'Aquaman 2018', 'Superheros', '2019-05-03', '2018-12-07', 16, 'image2.jpg', 'https://www.youtube.com/watch?v=ivvOKs7B-Vw', 'Ceci est la description de Aquaman', 'background2.jpg', 'VF', 'https://www83.uptostream.com/a3ztcu3dc1/720/0/video.mp4'),
(3, 'Game of Thrones S8Ep3', 'Serie', '2019-05-06', '2019-05-06', 17, '4d9cf-51lfkfotn8l.jpg', 'https://www.youtube.com/watch?v=uNXOkRKivEU', 'Description game of thrones', '9daa5-game-of-thrones.jpg', 'VF', 'https://www73.uptostream.com/a3y4m0a45f/360/0/video.mp4'),
(39, 'Shazam', 'Superheros', '2019-05-07', '2019-04-05', 16, '400x400-ct.jpg', 'https://www.youtube.com/watch?v=m1eE2BE', 'Shazam', '1200x600.jpg', 'VF', '//streamango.com/v/d/btkenrnoldndpdkb~1557318947~197.149.0.0~z8cXrdSV/304'),
(40, 'DBS Broly', 'Animation', '2019-05-08', '2018-11-27', 17, 'broly.jpg', 'https://www.youtube.com/watch?v=FHgm89hKpXU', 'Dernier Film d animation de l anime DBS', 'dragon-ball-super-broly-film-broly-fond-d-ecran-1600x600-20214_84.jpg', 'VOSTFR', 'http://62.210.71.227/broly-2.mp4');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
