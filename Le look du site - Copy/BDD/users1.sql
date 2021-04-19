-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 19 avr. 2021 à 16:04
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `users1`
--

CREATE TABLE `users1` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersFirstName` varchar(128) NOT NULL,
  `usersDateBirth` date NOT NULL,
  `usersPromo` int(4) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersSex` varchar(1) NOT NULL,
  `usersAddress` varchar(128) NOT NULL,
  `usersPhone` int(20) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `usersState` varchar(3) NOT NULL DEFAULT 'att'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users1`
--

INSERT INTO `users1` (`usersId`, `usersName`, `usersFirstName`, `usersDateBirth`, `usersPromo`, `usersUid`, `usersEmail`, `usersSex`, `usersAddress`, `usersPhone`, `usersPwd`, `usersState`) VALUES
(1, 'Bruzat', 'Melissa', '2021-03-18', 2020, 'projetweb', 'abderrahmane.larchi@gmail.com', 'm', 'makada siti', 2, '$2y$10$i.MrL/LmkA8MtAjLr3S4R.dscllYMXqS6QyLz.VtSo27lxgEmLX2m', 'ref'),
(2, 'Larchi', 'Abderrahmane', '2021-03-18', 2020, 'admin', 'abderrahmane.larchi2@gmail.com', 'm', 'makada siti', 2, '$2y$10$i.MrL/LmkA8MtAjLr3S4R.dscllYMXqS6QyLz.VtSo27lxgEmLX2m', 'val'),
(3, 'koko', 'kaki', '2021-03-08', 2018, 'koko', 'koko@gmail.com', 'f', 'makada siti', 50954, '$2y$10$seWzr/MPjEZPQmj/8JPAJ.Ey2poMFTMTazuhiLm39m3.ECo7uCLIm', 'ref'),
(4, 'mami', 'mami', '2021-03-31', 2030, 'mami', 'mami@mami.mami', 'f', 'makada siti', 32, '$2y$10$c.ANCJbK2QEs1qKjJB4.HegKMvh1g4gDCPqqYa6YFfJsDZndGNcia', 'val'),
(5, 'asd', 'asd', '2021-04-29', 2020, 'lolo', 'lolo@l.bom', 'f', 'makada siti', 20, '$2y$10$DCvopR9v97bT4IbGgXV1Res2f37G2YwnFauhu7wKr3pqDoPG4UWPe', 'val');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users1`
--
ALTER TABLE `users1`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
