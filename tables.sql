-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2016 at 05:34 PM
-- Server version: 5.6.28-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE `Items` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `CustomName` varchar(50) DEFAULT NULL,
  `Size` int(11) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`id`, `type`, `CustomName`, `Size`, `Age`) VALUES
(1, 'Loewe', 'Kurt', 190, 10),
(2, 'Elefant', 'Hans', 350, 31),
(8, 'Katze', 'Hans', 20, 3),
(9, 'Katze', 'Katze', 20, 3),
(28, 'Elefant', 'HÃ¤ssliches RÃ¼sseltier', 350, 31),
(29, 'Elefant', 'Drumbo', 350, 31),
(48, 'Giraffe', 'Adelheit', 310, 4),
(49, 'Giraffe', 'Giraffie', 310, 4),
(88, 'Rabe', 'Korax', 30, 7),
(89, 'Rabe', 'Korax', 30, 7),
(90, 'Rabe', 'Korax', 30, 7),
(91, 'Rabe', 'Korax', 30, 7),
(92, 'Rabe', 'Korax', 30, 7),
(93, 'Rabe', 'Korax', 30, 7),
(94, 'Rabe', 'Korax', 30, 7),
(95, 'Rabe', 'Korax', 30, 7),
(96, 'Rabe', 'Korax', 30, 7),
(97, 'Rabe', 'Korax', 30, 7);

-- --------------------------------------------------------

--
-- Table structure for table `Types`
--

CREATE TABLE `Types` (
  `type` char(50) NOT NULL,
  `picture` char(150) DEFAULT NULL,
  `name` char(50) DEFAULT NULL,
  `latName` char(50) NOT NULL,
  `CustomNameDefault` char(50) DEFAULT NULL,
  `Info` mediumtext,
  `SizeDefault` int(11) DEFAULT NULL,
  `AgeDefault` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Types`
--

INSERT INTO `Types` (`type`, `picture`, `name`, `latName`, `CustomNameDefault`, `Info`, `SizeDefault`, `AgeDefault`) VALUES
('Elefant', 'https://upload.wikimedia.org/wikipedia/commons/5/5b/Serengeti_Elefantenherde1.jpg', 'Afrikanischer Elefant', 'Loxodonta africana', 'Drumbo', 'Der Afrikanische Elefant, auch Afrikanischer Steppenelefant, ist eine Art der Familie der Elefanten. Er ist das größte gegenwärtig lebende Landsäugetier.', 350, 31),
('Giraffe', 'https://upload.wikimedia.org/wikipedia/commons/6/68/Giraffen.jpg', 'Giraffe', 'Giraffa camelopardalis', 'Giraffie', 'Die Giraffe ist ein Säugetier aus der Ordnung der Paarhufer und die einzige Art der Gattung Giraffa. Sie ist das höchste landlebende Tier der Welt.', 310, 4),
('Katze', 'http://localhost/SRZ/wallpaper.png', 'Hauskatze', 'Felis silvestris catus', 'K&auml;tzchen', 'Die Hauskatze ist eine Unterart der Wildkatze und deren Haustierform. Sie ist ein Fleischfresser und zählt zu den beliebtesten Heimtieren.', 20, 3),
('Loewe', 'https://upload.wikimedia.org/wikipedia/commons/e/e0/Panthera_leo_bleyenberghi_2013.jpg', 'L&ouml;we', 'Panthera leo', 'Leo', 'Der Löwe ist eine Art der Katzen. Er lebt im Unterschied zu anderen Katzen in Rudeln, ist durch die Mähne des Männchens gekennzeichnet und ist heute in Afrika sowie im indischen Bundesstaat Gujarat beheimatet.', 190, 10),
('Rabe', 'http://www.herr-m.at/wp-content/uploads/2011/04/Rabensteinbruch-92BA.jpg', 'Kolkrabe', 'Corvus corax', 'Korax', 'Ein schÃ¶ner schwarzer Vogel mit melodischem Ruf im Gegensatz zum KrÃ¤chzen der KrÃ¤he.', 30, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Types`
--
ALTER TABLE `Types`
  ADD PRIMARY KEY (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
