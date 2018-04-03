-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2018 at 08:48 PM
-- Server version: 5.7.21-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `E_COMMERCE`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `art_id` int(11) NOT NULL,
  `art_nom` varchar(250) NOT NULL,
  `art_prix` decimal(4,0) NOT NULL,
  `art_vendeur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`art_id`, `art_nom`, `art_prix`, `art_vendeur_id`) VALUES
(2, 'Parasol', '124', 1),
(3, 'Café', '3', 3),
(5, 'Banane', '2', 3),
(6, 'Chocolat', '2', 1),
(7, 'Poireau', '5', 4),
(8, 'Prune', '1', 3),
(9, 'Pomme', '4', 2),
(11, 'stylo', '333', 4),
(12, 'champignon', '4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `cli_id` int(11) NOT NULL,
  `cli_prenom` varchar(250) NOT NULL,
  `cli_nom` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`cli_id`, `cli_prenom`, `cli_nom`) VALUES
(1, 'Godbillon', 'Pascal'),
(2, 'Petit', 'Audrey'),
(3, 'Serge', 'Lehman'),
(10, 'Mathieu', 'Gaborit'),
(11, 'Fabrice', 'Colin'),
(12, 'Stéphane', 'Beauverger');

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `com_id` int(11) NOT NULL,
  `com_date` varchar(250) NOT NULL,
  `com_client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commandes`
--

INSERT INTO `commandes` (`com_id`, `com_date`, `com_client_id`) VALUES
(1, 'Noêl', 1),
(2, 'Noêl', 1),
(3, '2018-03-06', 10),
(4, '2018-03-06', 12),
(5, '2018-03-06', 3),
(6, '2018-03-05', 10),
(7, '2018-03-05', 2),
(8, '2018-03-13', 1),
(9, '2018-04-18', 1),
(10, '2018-04-17', 1),
(11, '2018-04-25', 1),
(12, '2018-04-18', 3),
(13, '2018-04-26', 11),
(14, '2018-04-11', 3),
(15, '2018-04-18', 10),
(16, '2018-04-18', 2),
(17, '2018-04-05', 10),
(18, '2018-04-12', 3),
(19, '2018-04-10', 10),
(20, '2018-04-04', 10),
(21, '2018-04-18', 3),
(22, '2018-04-11', 3),
(23, '2018-04-18', 10),
(24, '2018-04-25', 3),
(25, '2018-04-25', 3),
(26, '2018-04-25', 3),
(27, '2018-04-12', 12),
(28, '2018-04-17', 3),
(29, '2018-04-17', 3),
(30, '2018-03-27', 11),
(31, '2018-03-27', 11),
(32, '2018-03-27', 11),
(33, '2018-03-27', 11),
(34, '2018-03-27', 11),
(35, '2018-03-27', 11),
(36, '2018-03-27', 11),
(37, '2018-03-27', 11),
(38, '2018-03-27', 11),
(39, '2018-03-27', 11),
(40, '2018-03-27', 11),
(41, '2018-03-27', 11),
(42, '2018-03-27', 11),
(43, '2018-03-27', 11),
(44, '2018-03-27', 11),
(45, '2018-03-27', 11),
(46, '2018-03-27', 11),
(47, '2018-03-27', 11),
(48, '2018-03-27', 11),
(49, '2018-03-27', 11),
(50, '2018-03-27', 11),
(51, '2018-04-19', 1),
(52, '2018-04-19', 1),
(53, '2018-04-19', 1),
(54, '2018-04-19', 1),
(55, '2018-04-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `commandes_articles`
--

CREATE TABLE `commandes_articles` (
  `ID` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `asso_comm_id` int(11) NOT NULL,
  `asso_art_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vendeurs`
--

CREATE TABLE `vendeurs` (
  `ven_id` int(11) NOT NULL,
  `ven_nom` varchar(250) NOT NULL,
  `ven_prenom` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendeurs`
--

INSERT INTO `vendeurs` (`ven_id`, `ven_nom`, `ven_prenom`) VALUES
(1, 'Volper', 'Charlotte'),
(2, 'Guillot', 'Sébastien'),
(3, 'Dumay', 'Gilles'),
(4, 'Berthelot', 'Francis'),
(5, 'Adane', 'Nina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`art_id`),
  ADD KEY `art_vendeur_id` (`art_vendeur_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `com_client_id` (`com_client_id`);

--
-- Indexes for table `commandes_articles`
--
ALTER TABLE `commandes_articles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `asso_comm_id` (`asso_comm_id`),
  ADD KEY `asso_art_id` (`asso_art_id`);

--
-- Indexes for table `vendeurs`
--
ALTER TABLE `vendeurs`
  ADD PRIMARY KEY (`ven_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `commandes_articles`
--
ALTER TABLE `commandes_articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vendeurs`
--
ALTER TABLE `vendeurs`
  MODIFY `ven_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`art_vendeur_id`) REFERENCES `vendeurs` (`ven_id`);

--
-- Constraints for table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`com_client_id`) REFERENCES `clients` (`cli_id`);

--
-- Constraints for table `commandes_articles`
--
ALTER TABLE `commandes_articles`
  ADD CONSTRAINT `commandes_articles_ibfk_1` FOREIGN KEY (`asso_comm_id`) REFERENCES `commandes` (`com_id`),
  ADD CONSTRAINT `commandes_articles_ibfk_2` FOREIGN KEY (`asso_art_id`) REFERENCES `articles` (`art_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
