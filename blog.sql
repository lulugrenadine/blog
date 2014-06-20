-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 17 Juin 2014 à 11:41
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `text`, `date`) VALUES
(1, 'Mon premier article', 'Voila, c''est parti pour les articles.', '2014-06-13 14:33:05'),
(2, 'mon deuxième article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra urna non velit interdum egestas. Nullam sodales metus et orci condimentum ornare. Nam nunc sem, luctus in ullamcorper a, lobortis eget justo. Nulla rutrum vitae mi vel suscipit. Sed aliquet lorem vitae mauris convallis, vel placerat sem gravida. Vivamus rutrum mi libero, eleifend posuere lectus placerat ac. Nam commodo condimentum rhoncus. Integer et tellus eu velit suscipit semper.\r\nFin du deuxième article.', '2014-06-13 16:09:44'),
(3, 'mon troisème article', 'Nullam iaculis dolor turpis, at elementum libero aliquam nec. Curabitur ullamcorper diam at mauris porta, ut cursus enim fermentum. Vestibulum nisi purus, adipiscing ut faucibus sed, adipiscing sed erat. Maecenas a diam in justo pulvinar molestie eget vel magna.\r\nFin du troisième article.', '2014-06-13 16:10:53');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`role`) VALUES
('administrateur'),
('auteur'),
('invité');

--
-- Déclencheurs `roles`
--
DROP TRIGGER IF EXISTS `RoleNotNullUpdate`;
DELIMITER //
CREATE TRIGGER `RoleNotNullUpdate` BEFORE UPDATE ON `roles`
 FOR EACH ROW IF NEW. `role` = '' THEN
	SET NEW.`role` = NULL;
END IF
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `role` (`role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `role`, `date`) VALUES
(1, 'Véronique', '3e00a301d58779cb026a320354ab09137c674a1e', 'administrateur', '2014-06-12 00:00:00'),
(2, 'Constant', '0f1a7843e84b40861c586cbc367c10981ad31249', 'administrateur', '0000-00-00 00:00:00');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Users_Role_Roles_Role` FOREIGN KEY (`role`) REFERENCES `roles` (`role`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
