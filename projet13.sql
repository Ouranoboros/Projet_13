-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 avr. 2023 à 09:24
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet13`
--

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `Sous_titre` varchar(50) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Texte_intro` text NOT NULL,
  `Titre_expli` varchar(50) NOT NULL,
  `Texte_expli` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `Titre`, `Sous_titre`, `Image`, `Texte_intro`, `Titre_expli`, `Texte_expli`) VALUES
(12, 'Projet 1', 'Communication', 'https://res.cloudinary.com/dmqusenyv/image/upload/v1682061109/texture-mur-stuc-bleu-marine-relief-decoratif-abstrait-grunge-fond-colore-rugueux-grand-angle_1258-28311_okugxk.avif', 'Nous avons pu travailler notre aisance orale et apprendre différentes techniques de présentation et d’argumentation grâce aux conseils de Lucile Doiteau, qui fut notre intervenante.', 'Projet réalisé individuellement', 'Il nous a permis d’apprendre à nous connaître au sein de notre promo de première année.\r\nNous avons dû réaliser une présentation de 5 minutes, autour d’un sujet qui nous tenait à cœur et le présenter devant tout le monde.'),
(13, 'Projet 2 ', 'Systèmes informatiques', 'https://res.cloudinary.com/dmqusenyv/image/upload/v1682061109/texture-mur-stuc-bleu-marine-relief-decoratif-abstrait-grunge-fond-colore-rugueux-grand-angle_1258-28311_okugxk.avif', 'Avec Kamel Miloudi, nous avons appris la virtualisation et commencé à utiliser Linux avec Kali et Ubuntu.', 'Projet réalisé en groupe', 'Avec : Alexandre Destres , Lou Jaouën et Leelou LEROUGE.\r\nNous avons également eu l’occasion de découvrir le modèle OSI et la configuration d’un DNS.'),
(14, 'Projet 3 ', 'Programmation Python', 'https://res.cloudinary.com/dmqusenyv/image/upload/v1682061109/texture-mur-stuc-bleu-marine-relief-decoratif-abstrait-grunge-fond-colore-rugueux-grand-angle_1258-28311_okugxk.avif', 'Nous avons dû développer un pierre - feuille - ciseaux qui se joue dans le terminale puis un morpion avec interface graphique.', 'Projet en groupe ', 'Avec : Alexandre Destres , Lou Jaouën et Leelou LEROUGE.\r\nNous avons présenté notre projet à Aymeric Guillochet qui nous a accompagnés sur ce projet.'),
(15, 'Projet 4 et 5', 'Développement web', 'https://res.cloudinary.com/dmqusenyv/image/upload/v1682061109/texture-mur-stuc-bleu-marine-relief-decoratif-abstrait-grunge-fond-colore-rugueux-grand-angle_1258-28311_okugxk.avif', 'Nous devions développer notre premier site web autour d’un jeu vidéo de notre choix.', 'Duo avec Lou Jaouen', 'Nous avons décidé de le faire autour de l’univers d’Assassin’s Creed et avons implémenté une navbar, un texte de présentation, des intégrations d’images et une intégration d’une vidéo à notre site.'),
(16, 'Projet 6 ', 'Réseau', 'https://res.cloudinary.com/dmqusenyv/image/upload/v1682061109/texture-mur-stuc-bleu-marine-relief-decoratif-abstrait-grunge-fond-colore-rugueux-grand-angle_1258-28311_okugxk.avif', 'Nous avons mis en place un réseau simple connectant 28 machines entre elles.', 'Projet en Groupe', 'Avec : Adrien JEGGE, Dayen Romdhane et Enzo Pacchiani.\r\n\r\nNous avons appris à utiliser Windows server et certains de ces services (DHCP et AD) et avons réalisé un document expliquant tous les services de Windows server.\r\nDe plus, nous avons revu le modèle OSI et appris à calculer des adresses IP et masque de sous-réseau. '),
(18, 'Projet 7', 'Développement web - Back', 'https://res.cloudinary.com/dmqusenyv/image/upload/v1682061109/texture-mur-stuc-bleu-marine-relief-decoratif-abstrait-grunge-fond-colore-rugueux-grand-angle_1258-28311_okugxk.avif', 'Nous avons découvert PHP et SQL et avons dû gérer un panel administrateur afin qu’il puisse modifier toutes les informations d’une page Web.', 'Projet en Groupe', 'J’ai été désigné comme chef d’équipe et j’ai travaillé avec : Mathis Parascandola, Sadok E. et Victor Guignard.');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'Administrateur', '$2y$10$59iBHtzE4ZVx9YB1JKY/4um.rEV5ShOSkexkuUo9vJ.xiVR1vz9CC');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
