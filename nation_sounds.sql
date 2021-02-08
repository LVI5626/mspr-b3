-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 15 jan. 2021 à 07:52
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nation_sounds`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_title` varchar(100) CHARACTER SET utf32 NOT NULL,
  `news_picture` varchar(100) NOT NULL,
  `news_description` varchar(10000) NOT NULL,
  `news_link` varchar(100) CHARACTER SET utf32 NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`news_title`, `news_picture`, `news_description`, `news_link`, `id`) VALUES
('BLACK EYED PEAS SUR LA MAIN STAGE LE SAMEDI 3 JUILLET 2021', 'public/img/artists/black-and-peas.jpg', 'Alors que 26 groupes ou artistes ont confirmé leur présence au Main Square Festival en 2021, nous sommes heureux de vous annoncer que les BLACK EYED PEAS seront également de retour dans la Citadelle d\'Arras.\r\n\r\n\r\nAinsi, le trio américain qui avait embrasé la Citadelle en 2010 se produira sur la Main Stage le Samedi 3 Juillet 2021!\r\n\r\n\r\nLes billets sont en vente depuis le 4 Juin 2020. Et comme énoncé précédemment, les billets achetés cette année pour le Samedi 4 Juillet 2020 restent valables pour le Samedi 3 Juillet 2021.', '', 1),
('Angele', 'public/img/artists/angele.jpg', 'Alors que 26 groupes ou artistes ont confirmé leur présence au Main Square Festival en 2021, nous sommes heureux de vous annoncer que les BLACK EYED PEAS seront également de retour dans la Citadelle d\'Arras.\r\n\r\n\r\nAinsi, le trio américain qui avait embrasé la Citadelle en 2010 se produira sur la Main Stage le Samedi 3 Juillet 2021!\r\n\r\n\r\nLes billets sont en vente depuis le 4 Juin 2020. Et comme énoncé précédemment, les billets achetés cette année pour le Samedi 4 Juillet 2020 restent valables pour le Samedi 3 Juillet 2021.', '', 2),
('Eskemo', 'public/img/artists/eskemo.jpg', 'Alors que 26 groupes ou artistes ont confirmé leur présence au Main Square Festival en 2021, nous sommes heureux de vous annoncer que les BLACK EYED PEAS seront également de retour dans la Citadelle d\'Arras.\r\n\r\n\r\nAinsi, le trio américain qui avait embrasé la Citadelle en 2010 se produira sur la Main Stage le Samedi 3 Juillet 2021!\r\n\r\n\r\nLes billets sont en vente depuis le 4 Juin 2020. Et comme énoncé précédemment, les billets achetés cette année pour le Samedi 4 Juillet 2020 restent valables pour le Samedi 3 Juillet 2021.', '', 3);

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `partners_name` varchar(100) NOT NULL,
  `partners_picture` varchar(100) NOT NULL,
  `partners_theme` varchar(100) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `partners`
--

INSERT INTO `partners` (`partners_name`, `partners_picture`, `partners_theme`, `id`) VALUES
('Virgin Radio', 'public/img/partners/radios/virgin-radio.jpg', 'Radio', 1),
('NRJ', 'public/img/partners/radios/nrj-radio.png', 'Radio', 2),
('Fun Radio', 'public/img/partners/radios/fun-radio.png', 'Radio', 3),
('La Voix du Nord', 'public/img/partners/journaux/voix-du-nord.png', 'Journal', 4),
('Musique Journal', 'public/img/partners/journaux/musique-journal.png', 'Journal', 5),
('Nord Éclair', 'public/img/partners/journaux/nord-eclair.png', 'Journal', 6),
('Le Soir', 'public/img/partners/journaux/le-soir.png', 'Journal', 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
