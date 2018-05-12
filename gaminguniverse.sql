-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 12 mai 2018 à 22:22
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gaminguniverse`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `book_item`
--

CREATE TABLE `book_item` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id`, `title`, `price`, `description`) VALUES
(1, 'The Witcher 3 : Wild Hunt', 19.99, 'The Witcher 3 : Wild Hunt est un Action-RPG se déroulant dans un monde ouvert. Troisième épisode de la série du même nom, inspirée des livres du polonais Andrzej Sapkowski, cet opus relate la fin de l\'histoire de Geralt de Riv.'),
(2, 'Far Cry 5', 49.99, 'Far Cry 5 est un jeu d\'action / aventure jouable en solo. Bienvenue à Hope County dans le Montana, terre de liberté et de bravoure qui abrite un culte fanatique prêchant la fin du monde : Eden’s Gate. Défiez son chef, Joseph Seed, et ses frères et soeur, et libérez les citoyens.'),
(3, 'Assassin\'s Creed Origins', 39.99, 'Assassin\'s Creed Origins est un action RPG en monde ouvert incluant des mécaniques d\'infiltration. Le titre vous fait visiter les terres mystérieuses de l\'Egypte antique dans la peau de Bayek, nouveau héros d\'un épisode nous dévoilant les origines de la création de la confrérie des assassins chère à la série phare d\'Ubisoft.'),
(4, 'Dragon Ball FighterZ', 50.99, 'Dragon Ball FighterZ est un jeu de combat 2D développé par Arc System Works et édité par Bandai Namco. Cette nouvelle adaptation de la franchise Dragon Ball met en scène les personnages iconiques de la série dans des affrontements explosifs en 3 versus 3.'),
(5, 'Final Fantasy XV', 39.99, 'Final Fantasy XV est un jeu de rôle japonais. Le joueur y suit les aventures de Noctis, un jeune homme taciturne et héritier du trône. Il voyagera avec ses compagnons dans un monde à la fois moderne et fantastique.'),
(6, 'Dark Souls Remastered', 19.99, 'Dark Souls Remastered sur PC est un jeu de rôle orienté action très difficile se déroulant dans un univers infesté de démons. Dans la peau d\'un mort-vivant, le joueur doit se battre contre de nombreux types d\'ennemis et de boss pour avoir une chance de retourner dans le monde des hommes. 10 classes de personnages et diverses techniques sont disponibles pour tenter de relever les défis extrêmement relevés qui se dressent à tout moment sur notre route en solo comme en multi.'),
(7, 'Call of Duty : WWII', 47.99, 'Call of Duty : WWII sur PC est un jeu d\'action FPS du studio Sledgehammer Games. Pour cet opus, les développeurs ont opéré un retour aux sources de la saga en traitant la période historique de la Seconde Guerre mondiale. Cette fois-ci, exit les conflits futuristes et manichéens et place à un traitement plus réaliste et viscéral de ce conflit qui a chamboulé le monde entier.'),
(8, 'FIFA 18', 43.95, 'FIFA 18 est un jeu de simulation de football sur PC édité par Electronic Arts. Le mode aventure promet d\'être retravaillé en profondeur, tout en faisant suite à celui du précédent opus. Le championnat chinois fera également son apparition pour la première fois, sans oublier les traditionnelles améliorations apportées aux graphismes et au gameplay, ainsi que le retour de Pierre Ménès et Hervé Mathoux aux commentaires.'),
(9, 'A Way Out', 29.99, ' A Way Out est un jeu d\'action en coopération, jouable en ligne ou en local, en écran splitté. Dans cette aventure, les deux joueurs incarnent Leo et Vincent, deux prisonniers qui vont se rencontrer et coopérer pour s\'évader. Le titre mélange gameplay coop en temps réel et asymétrique.');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'attente'),
(2, 'validee');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `role_id`) VALUES
(1, 'admin', '$2y$10$cVF1uw5wwMtEn/6tNp58DOEgMLteib4AtB/4cJ9fAMTMnUBdHkcdW', 1),
(2, 'toto', '$2y$10$Fm2xj6YbrhhGxlPt83yMUeLUn.RgXovtcFQfoORsUIZ4FJIV.WWwq', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Index pour la table `book_item`
--
ALTER TABLE `book_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `book_item`
--
ALTER TABLE `book_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

--
-- Contraintes pour la table `book_item`
--
ALTER TABLE `book_item`
  ADD CONSTRAINT `book_item_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_item_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
