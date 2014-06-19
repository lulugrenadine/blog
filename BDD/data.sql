-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 19 Juin 2014 à 13:26
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

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `text`, `date`, `user`) VALUES
(1, 'Mon premier article', 'Voila, c''est parti pour les articles.', '2014-06-13 14:33:05', 2),
(2, 'mon deuxième article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra urna non velit interdum egestas. Nullam sodales metus et orci condimentum ornare. Nam nunc sem, luctus in ullamcorper a, lobortis eget justo. Nulla rutrum vitae mi vel suscipit. Sed aliquet lorem vitae mauris convallis, vel placerat sem gravida. Vivamus rutrum mi libero, eleifend posuere lectus placerat ac. Nam commodo condimentum rhoncus. Integer et tellus eu velit suscipit semper.\r\nFin du deuxième article.', '2014-06-13 16:09:44', 1),
(3, 'mon troisième article', 'Nullam iaculis dolor turpis, at elementum libero aliquam nec. Curabitur ullamcorper diam at mauris porta, ut cursus enim fermentum. Vestibulum nisi purus, adipiscing ut faucibus sed, adipiscing sed erat. Maecenas a diam in justo pulvinar molestie eget vel magna.\r\nFin du troisième article.', '2014-06-13 16:10:53', 1),
(4, 'mercredi 18 juin', 'Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. ', '2014-06-18 14:35:04', 1);

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`role`) VALUES
('administrateur'),
('auteur'),
('invité');

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `role`, `date`) VALUES
(1, 'Véronique', '3e00a301d58779cb026a320354ab09137c674a1e', 'administrateur', '2014-06-12 00:00:00'),
(2, 'Constant', '0f1a7843e84b40861c586cbc367c10981ad31249', 'administrateur', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
