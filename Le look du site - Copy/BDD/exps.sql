-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 02 avr. 2021 à 02:50
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
-- Structure de la table `exps`
--

CREATE TABLE `exps` (
  `expsId` int(11) NOT NULL,
  `expsType` varchar(100) NOT NULL,
  `expsSector` varchar(100) NOT NULL,
  `expsOrganisation` varchar(100) NOT NULL,
  `expsBeg` date NOT NULL,
  `expsEnd` date NOT NULL,
  `expsCity` varchar(100) NOT NULL,
  `expsDepartment` varchar(100) NOT NULL,
  `expsSalary` int(8) NOT NULL,
  `expsDescription` varchar(5000) NOT NULL,
  `expsVisibility` varchar(1) NOT NULL,
  `usersexpsId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `exps`
--

INSERT INTO `exps` (`expsId`, `expsType`, `expsSector`, `expsOrganisation`, `expsBeg`, `expsEnd`, `expsCity`, `expsDepartment`, `expsSalary`, `expsDescription`, `expsVisibility`, `usersexpsId`) VALUES
(1, 'sad', 'da', 'dsa', '2021-04-21', '2021-04-12', 'dad', 'da', 222, 'zxc', 'n', 0),
(2, 'fsd', 'er', 'we', '2021-04-28', '2021-04-07', 'wr', 'erw', 54, 'sd', 'n', 0),
(3, 'sdf', 'fdsf', 'sf', '2021-04-21', '2021-04-22', 'sdf', 'fs', 43, 'sdf', 'v', 0),
(4, 'fs', 'fs', 'fs', '2021-04-29', '2021-04-01', 'vd', 'er', 43, 'rew', 'n', 0),
(5, 'fsf', 'fs', 'fs', '2021-04-18', '2021-04-15', 'sff', 'fs', 23, 'sd', 'n', 0),
(6, 'tet', 'te', 'tet', '2021-04-15', '2021-04-05', 'te', 'tet', 54, 'rt', 'n', 0),
(7, 'dasd', 'dsa', 'as', '2021-04-08', '2021-03-30', 'daas', 'df', 432, 'ads', 'n', 0),
(8, 'sdf', 'fs', 'fs', '2021-05-01', '2021-04-23', 'fsd', 'fs', 23, 'dsa', 'v', 0),
(9, 'dsa', 'fsd', 'hfh', '2021-04-07', '2021-04-27', 'kjh', 'hjk', 76, 'jgh', 'v', 0),
(10, 'das', 'dads', 'dsa', '2021-04-04', '2021-04-28', 'das', 'as', 32, 'sad', 'n', 0),
(11, 'abdo', 'abdo', 'abod', '2021-04-27', '2021-04-21', 'abdo', 'abdo', 29, 'ando', 'v', 0),
(12, 'fsd', 'fs', 'sfd', '2021-04-06', '2021-04-14', 'fs', 'fs', 32, 'sad', 'n', 0),
(13, 'da', 'asd', 'das', '2021-03-30', '2021-04-08', 'dsa', 'ads', 32, 'sda', 'n', 0),
(14, 'ad', 'xc', 'cx', '2021-05-06', '2021-04-01', 'cx', 'zx', 34, 'cx', 'n', 0),
(15, 'as', 'das', 'ds', '2021-04-13', '2021-04-20', 'sad', 'fd', 23, 'dsz', 'n', 0),
(16, 'das', 'da', 'dsa', '2021-04-08', '2021-04-23', 'da', 'das', 21, 'das', 'n', 0),
(17, 'das', 'dsa', 'das', '2021-04-16', '2021-04-24', 'dsa', 'dasd', 23, 'dsa', 'n', 0),
(18, 'momo', 'momo', 'momo', '2021-05-04', '2021-04-07', 'momo', 'momo', 89, 'mom', 'n', 0),
(19, 'ds', 'ds', 'ds', '2021-04-16', '2021-04-07', 'das', 'da', 23, 'dsa', 'n', 5),
(20, 'fsd', 'fd', 'sf', '2021-05-07', '2021-04-16', 'fds', 'fds', 34, '432', 'n', 0),
(21, 'ds', 'as', 'ds', '2021-04-21', '2021-04-29', 'dsa', 'ds', 32, 'sad', 'v', 0),
(22, 'das', 'ds', 'as', '2021-03-30', '2021-05-05', 'da', 'sa', 23, 'dsa', 'n', 2),
(23, 'stage', 'finance', 'BNP-Paribas', '2021-04-13', '2021-03-29', 'Bordeaux', 'Gironde', 40000, 'rien', 'v', 2),
(24, 'CDI', 'Service', 'Thales', '2021-04-14', '2021-05-01', 'Paris', 'Ile de France', 60000, '', 'n', 5),
(25, 'CDD', '', 'AXA', '1970-01-01', '1970-01-01', '', '', 0, '', 'v', 5),
(26, '', '', '', '1970-01-01', '1970-01-01', '', '', 0, '', 'n', 5),
(27, '', '', '', '1970-01-01', '1970-01-01', '', '', 0, '', 'n', 5),
(28, '', '', '', '2021-04-13', '2021-04-20', '', '', 0, '', 'n', 5),
(29, 'MOMO', 'MIMI', '', '2021-04-14', '2021-04-26', '', '', 0, '', 'n', 5),
(30, 'dasd', '', 'das', '2021-04-14', '2021-04-14', '', '', 0, '', 'n', 5),
(31, 'contract', 'banque', 'ensc', '2020-02-02', '2021-02-02', 'Bordeaux', 'mas', 50000, 'pas trop', 'v', 5),
(32, 'CDi', 'maroc', 'msad', '2021-04-07', '2021-04-27', 'sa', 'sad', 3213, 'da', 'n', 5),
(34, 'putta madre', 'ds', 'ds', '2021-04-27', '2021-04-05', 'mami', 'momi', 5000, 'sda', 'v', 1),
(35, 'asd', 'da', '', '2021-04-14', '2021-04-20', '', '', 0, '', 'n', 1),
(36, 'CDD', 'Finance', 'Berkshire Hathaway', '2021-04-04', '2021-04-29', 'Nebraska', 'Omaha', 200000, 'I was the leading of this service and I was in charge of every financial detail in the firm. I was also the best who took decisions. I brought to the company organic growth of over 4% per 2 months. So I totally deserve fat checks with millions of dollars as I brought a lot of value to investors and share holders. Thanks to all the collaborators who made this success possible.', 'v', 1),
(37, 'merde', 'merde', 'merde', '2021-04-07', '2021-05-01', 'da', 'merde', 611161, 'merde', 'v', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `exps`
--
ALTER TABLE `exps`
  ADD PRIMARY KEY (`expsId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `exps`
--
ALTER TABLE `exps`
  MODIFY `expsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
