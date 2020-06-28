-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 28 juin 2020 à 23:55
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis ipsum rutrum, sodales lacus in, gravida arcu. Nam nunc ligula, varius a mauris vitae, faucibus tincidunt mi. Nullam varius nisi et orci hendrerit ultrices. Praesent tellus diam, sodales in consectetur vitae, imperdiet non diam. Nunc nec lacus lacinia, semper mi ac, semper odio. Vestibulum interdum neque sem, sit amet gravida odio ullamcorper vitae. Donec rutrum quam vel feugiat elementum. Morbi elementum orci molestie dapibus fringilla. Cras faucibus facilisis sagittis. Integer imperdiet tincidunt ipsum in laoreet. Maecenas sit amet aliquet nulla. Cras pretium condimentum turpis, et venenatis velit aliquet id. Proin sit amet tortor in ligula feugiat scelerisque. Maecenas quis sapien nec enim posuere sagittis.', 1, '2020-06-28 20:18:26'),
(2, 'Proin sed ante elementum, facilisis tortor ac, lobortis erat. Nam nec mi eget enim consectetur laoreet. Quisque nulla nisi, fringilla non interdum eu, rhoncus et nisl. Etiam sit amet mauris diam. Donec tincidunt lectus velit, eu ornare sem dictum a. Sed feugiat mi ante, eget tristique leo pellentesque et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus convallis libero a leo maximus maximus. Aliquam turpis massa, molestie in ex quis, euismod interdum urna. Nunc vulputate quam fringilla odio finibus ullamcorper et quis diam. Morbi vel nisi quis urna volutpat volutpat quis id felis. Mauris efficitur nisl id lacus sagittis, eget dignissim ipsum sagittis.', 2, '2020-06-28 20:19:16'),
(3, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc iaculis arcu at risus volutpat fringilla. Aliquam rutrum nec nisi et tempus. Sed suscipit lorem vel sagittis ullamcorper. Phasellus feugiat malesuada felis tincidunt imperdiet. Aenean nec fermentum elit, eu laoreet urna. Aliquam tellus metus, lobortis commodo dolor quis, rhoncus lacinia felis. In hac habitasse platea dictumst. Sed ut dolor orci. Curabitur non ornare purus.', 3, '2020-06-28 20:20:13'),
(4, 'Sed id vestibulum mi. Aenean hendrerit lectus non est pulvinar, in lobortis turpis fermentum. Fusce dictum eget justo et varius. Etiam auctor iaculis lectus, quis lobortis dolor pulvinar ut. Fusce lectus est, commodo eget nisl in, eleifend vestibulum felis. Curabitur sodales viverra metus quis porta. Donec neque metus, hendrerit tempus iaculis non, semper sed arcu. Etiam quis tellus eros. Morbi eget nisi a lacus sollicitudin vestibulum ac a turpis. Phasellus sed erat gravida, consequat purus nec, interdum magna. Praesent enim ligula, facilisis ut felis ac, tincidunt dapibus est. Nullam et posuere nunc. Nullam aliquam justo ut eros commodo egestas. Etiam fermentum eleifend sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 4, '2020-06-28 20:22:31'),
(5, 'Aliquam vulputate erat libero, vitae convallis dolor tempor rhoncus. Sed finibus leo nec blandit ornare. Morbi ultrices egestas consectetur. Pellentesque imperdiet nulla id libero lobortis, vitae rutrum dui porta. Nulla elementum ligula non dui tempor feugiat. Phasellus risus dui, ultrices non viverra et, lacinia ut velit. Proin elit risus, mollis eu finibus quis, scelerisque id lectus. Nunc arcu arcu, interdum non commodo rhoncus, suscipit vel arcu.', 5, '2020-06-28 20:24:24'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel volutpat orci. Fusce porttitor eget augue sit amet rhoncus. Integer pellentesque id odio sed rutrum. Phasellus tempor, augue at ultricies feugiat, velit dolor mattis lectus, eu pretium arcu velit sit amet velit. Nunc sollicitudin, tellus vehicula porttitor pellentesque, nisi augue posuere nulla, ac tempus neque mi sed quam. Pellentesque sapien magna, lobortis suscipit aliquet vel, consequat vel diam. Aliquam ullamcorper viverra vulputate. Vivamus vel nisl sodales, porttitor libero ac, ullamcorper erat. Cras consectetur et dolor at elementum. Aliquam iaculis porta nisi, at efficitur quam molestie id.', 3, '2020-06-28 20:26:40');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'Admin', '$2y$10$aSzFqNBS01D88Cf1tvEAf.tVIKMGIUSwaDLo1xwDxk.nAp66MtP3u'),
(2, 'Marine', '$2y$10$Wv8kcH5k.dh0sQZJA4/EEuKuCMB24wUagQAkmduO2gPWAOc9HEi.y'),
(3, 'Louis', '$2y$10$0jKaITq583uv4CynXZAUe.XhKK.1FqfKmVI3D/NTWWJw8c8TU.huS'),
(4, 'Xavier', '$2y$10$yjHAPSh2NW4YoWN2nvdchet5Ogb6iOEm2JYFVZiaIkp5Kre4E8tWi'),
(5, 'Elodie', '$2y$10$4yp18lQvaAuBDrG23dL0L..F5HU5sCedyKsaexuDffcbVz.9cyaxG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
