-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 06:34 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campionat_mondial`
--

-- --------------------------------------------------------

--
-- Table structure for table `echipe`
--

CREATE TABLE `echipe` (
  `Id_Echipa` int(11) UNSIGNED NOT NULL,
  `Nume_Echipa` varchar(20) NOT NULL,
  `Id_Grupa` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `echipe`
--

INSERT INTO `echipe` (`Id_Echipa`, `Nume_Echipa`, `Id_Grupa`) VALUES
(1, 'Rusia', 1),
(2, 'Germania', 2),
(3, 'Anglia', 3),
(4, 'Belgia', 4),
(5, 'Spania', 5),
(6, 'Polonia', 6),
(7, 'Islanda', 7),
(8, 'Serbia', 8),
(9, 'Franta', 1),
(10, 'Portugalia', 2),
(11, 'Elvetia', 3),
(12, 'Croatia', 4),
(13, 'Suedia', 5),
(14, 'Danemarca', 6),
(15, 'Nigeria', 7),
(16, 'Egipt', 8),
(17, 'Senegal', 1),
(18, 'Maroc', 2),
(19, 'Tunisia', 3),
(20, 'Mexic', 4),
(21, 'Costa Rica', 5),
(22, 'Panama', 6),
(23, 'Brazilia', 7),
(24, 'Uruguay', 8),
(25, 'Argentina', 1),
(26, 'Columbia', 2),
(27, 'Peru', 3),
(28, 'Iran', 4),
(29, 'Japonia', 5),
(30, 'Coreea de Sud', 6),
(31, 'Arabia Saudita', 7),
(32, 'Australia', 8);

-- --------------------------------------------------------

--
-- Table structure for table `echipe_meciuri`
--

CREATE TABLE `echipe_meciuri` (
  `Id_Echipa` int(11) UNSIGNED NOT NULL,
  `Id_Meci` int(11) UNSIGNED NOT NULL,
  `Numar_Echipa` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `echipe_meciuri`
--

INSERT INTO `echipe_meciuri` (`Id_Echipa`, `Id_Meci`, `Numar_Echipa`) VALUES
(1, 1, 1),
(1, 3, 2),
(1, 5, 2),
(2, 7, 2),
(2, 10, 2),
(2, 12, 2),
(3, 13, 2),
(3, 15, 1),
(3, 17, 1),
(4, 19, 2),
(4, 21, 2),
(4, 23, 1),
(5, 26, 1),
(5, 27, 1),
(5, 30, 1),
(6, 32, 1),
(6, 34, 1),
(6, 35, 2),
(7, 38, 1),
(7, 40, 1),
(7, 41, 1),
(8, 43, 2),
(8, 45, 2),
(8, 47, 2),
(9, 2, 2),
(9, 4, 2),
(9, 5, 1),
(10, 8, 1),
(10, 10, 1),
(10, 11, 2),
(11, 14, 2),
(11, 15, 2),
(11, 18, 1),
(12, 20, 1),
(12, 22, 2),
(12, 23, 2),
(13, 26, 2),
(13, 28, 1),
(13, 29, 2),
(14, 31, 1),
(14, 34, 2),
(14, 36, 1),
(15, 37, 2),
(15, 39, 1),
(15, 41, 2),
(16, 43, 1),
(16, 46, 1),
(16, 48, 1),
(17, 2, 1),
(17, 3, 1),
(17, 6, 2),
(18, 7, 1),
(18, 9, 1),
(18, 11, 1),
(19, 13, 1),
(19, 16, 1),
(19, 18, 2),
(20, 20, 2),
(20, 21, 1),
(20, 24, 2),
(21, 25, 2),
(21, 27, 2),
(21, 29, 1),
(22, 31, 2),
(22, 33, 1),
(22, 35, 1),
(23, 37, 1),
(23, 40, 2),
(23, 42, 2),
(24, 44, 1),
(24, 45, 1),
(24, 48, 2),
(25, 1, 2),
(25, 4, 1),
(25, 6, 1),
(26, 8, 2),
(26, 9, 2),
(26, 12, 1),
(27, 14, 1),
(27, 16, 2),
(27, 17, 2),
(28, 19, 1),
(28, 22, 1),
(28, 24, 1),
(29, 25, 1),
(29, 28, 2),
(29, 30, 2),
(30, 32, 2),
(30, 33, 2),
(30, 36, 2),
(31, 38, 2),
(31, 39, 2),
(31, 42, 1),
(32, 44, 2),
(32, 46, 2),
(32, 47, 1);

-- --------------------------------------------------------

--
-- Table structure for table `grupe`
--

CREATE TABLE `grupe` (
  `Id_Grupa` int(11) UNSIGNED NOT NULL,
  `Nume_Grupa` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grupe`
--

INSERT INTO `grupe` (`Id_Grupa`, `Nume_Grupa`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G'),
(8, 'H');

-- --------------------------------------------------------

--
-- Table structure for table `meciuri`
--

CREATE TABLE `meciuri` (
  `Id_Meci` int(11) UNSIGNED NOT NULL,
  `Ora_Meciului` varchar(13) NOT NULL,
  `Data_Meciului` varchar(13) NOT NULL,
  `Id_Stadion` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meciuri`
--

INSERT INTO `meciuri` (`Id_Meci`, `Ora_Meciului`, `Data_Meciului`, `Id_Stadion`) VALUES
(1, '19:30', '14/06/2018', 1),
(2, '19:30', '14/06/2018', 2),
(3, '19:30', '15/06/2018', 3),
(4, '19:30', '15/06/2018', 4),
(5, '19:30', '16/06/2018', 5),
(6, '19:30', '16/06/2018', 6),
(7, '19:30', '14/06/2018', 7),
(8, '19:30', '14/06/2018', 8),
(9, '19:30', '15/06/2018', 9),
(10, '19:30', '15/06/2018', 10),
(11, '19:30', '16/06/2018', 11),
(12, '19:30', '16/06/2018', 12),
(13, '21:30', '14/06/2018', 1),
(14, '21:30', '14/06/2018', 2),
(15, '21:30', '15/06/2018', 3),
(16, '21:30', '15/06/2018', 4),
(17, '21:30', '16/06/2018', 5),
(18, '21:30', '16/06/2018', 6),
(19, '21:30', '14/06/2018', 7),
(20, '21:30', '14/06/2016', 8),
(21, '21:30', '15/06/2018', 9),
(22, '21:30', '15/06/2018', 10),
(23, '21:30', '16/06/2018', 11),
(24, '21:30', '16/06/2018', 12),
(25, '17:30', '14/06/2018', 1),
(26, '17:30', '14/06/2018', 2),
(27, '17:30', '15/06/2018', 3),
(28, '17:30', '15/06/2018', 4),
(29, '17:30', '16/06/2018', 5),
(30, '17:30', '16/06/2018', 6),
(31, '17:30', '14/06/2018', 7),
(32, '17:30', '14/06/2018', 8),
(33, '17:30', '15/06/2018', 9),
(34, '17:30', '15/06/2018', 10),
(35, '17:30', '16/06/2018', 11),
(36, '17:30', '16/06/2018', 12),
(37, '15:30', '14/06/2018', 1),
(38, '15:30', '14/06/2018', 2),
(39, '15:30', '15/06/2018', 3),
(40, '15:30', '15/06/2018', 4),
(41, '15:30', '16/06/2018', 5),
(42, '15:30', '16/06/2018', 6),
(43, '15:30', '14/06/2018', 7),
(44, '15:30', '14/06/2018', 8),
(45, '15:30', '15/06/2018', 9),
(46, '15:30', '15/06/2018', 10),
(47, '15:30', '16/06/2018', 11),
(48, '15:30', '16/06/2018', 12);

-- --------------------------------------------------------

--
-- Table structure for table `selectioneri`
--

CREATE TABLE `selectioneri` (
  `Id_Selectioner` int(10) UNSIGNED NOT NULL,
  `Nume_Selectioner` text NOT NULL,
  `Prenume_Selectioner` text NOT NULL,
  `Id_Echipa` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selectioneri`
--

INSERT INTO `selectioneri` (`Id_Selectioner`, `Nume_Selectioner`, `Prenume_Selectioner`, `Id_Echipa`) VALUES
(2, 'Joachim', 'Low', 2),
(3, 'Allardyce', 'Sam', 3),
(4, 'Martinez', 'Roberto', 4),
(5, 'Lobetequi', 'Julen', 5),
(6, 'Daum', 'Christoph', 6),
(7, 'Hallgrimsson', 'Heimir', 7),
(8, 'Muslin', 'Slavo', 8),
(9, 'Deschamps', 'Didier', 9),
(10, 'Santos', 'Fernando', 10),
(11, 'Petkovic', 'Vladimir', 11),
(13, 'Andersson', 'Janne', 13),
(14, 'Hareide', 'Age', 14),
(15, 'Keshi', 'Stephen', 15),
(16, 'Cuper', 'Raul', 16),
(17, 'Giresse', 'Alain', 17),
(18, 'Blinda', 'Abdellah', 18),
(19, 'Trabelsi', 'Sami', 19),
(20, 'Osorio', 'Juan', 20),
(21, 'Ramirez', 'Oscar', 21),
(22, 'Lawrence', 'Dennis', 22),
(23, 'Bacchi', 'Adenor', 23),
(24, 'Tabarez', 'Oscar', 24),
(25, 'Sampaoli', 'Jorge', 25),
(26, 'Pekerman', 'Jose', 26),
(27, 'Gareca', 'Ricardo', 27),
(28, 'Queiroz', 'Carlos', 28),
(29, 'Zaccheroni', 'Alberto', 29),
(30, 'Stielike', 'Uli', 30),
(31, 'Pizzi', 'Juan', 31),
(32, 'Postecoglou', 'Ange', 32),
(34, 'Stanislav', 'Cercesov', 1),
(35, 'Kovaci', 'Niko', 12);

-- --------------------------------------------------------

--
-- Table structure for table `stadioane`
--

CREATE TABLE `stadioane` (
  `Id_Stadion` int(10) UNSIGNED NOT NULL,
  `Nume_Stadion` varchar(20) NOT NULL,
  `Locatie_Stadion` text NOT NULL,
  `Numar_Locuri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stadioane`
--

INSERT INTO `stadioane` (`Id_Stadion`, `Nume_Stadion`, `Locatie_Stadion`, `Numar_Locuri`) VALUES
(1, 'Lujniki', 'Moscova', '89318'),
(2, 'Gazprom Arena', 'Sankt Petersburg', '69501'),
(3, 'Fist', 'Soci', '47659'),
(4, 'Spartak', 'Moscova', '46990'),
(5, 'Kaliningrad', 'Kaliningrad', '45015'),
(6, 'Baltika', 'Kazan', '45015'),
(7, 'Volgograd', 'Volgograd', '45015'),
(8, 'Mordovia', 'Saransk', '45015'),
(9, 'Cosmos Arena', 'Samara', '44918'),
(10, 'Nijni Novgorod', 'Nijni Novgorod', '44899'),
(11, 'Stadion Central', 'Ekaterinburg', '44130'),
(12, 'Rostov Arena', 'Rostov pe Don', '43702'),
(13, 'dadas', 'sdasd', '122'),
(16, 'Adaa', 'Moscova', '1222'),
(17, 'Mada', 'masda', '1123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `echipe`
--
ALTER TABLE `echipe`
  ADD PRIMARY KEY (`Id_Echipa`),
  ADD KEY `Id_Grupa` (`Id_Grupa`);

--
-- Indexes for table `echipe_meciuri`
--
ALTER TABLE `echipe_meciuri`
  ADD PRIMARY KEY (`Id_Echipa`,`Id_Meci`),
  ADD KEY `Id_Echipa` (`Id_Echipa`),
  ADD KEY `Meciuri` (`Id_Meci`);

--
-- Indexes for table `grupe`
--
ALTER TABLE `grupe`
  ADD PRIMARY KEY (`Id_Grupa`);

--
-- Indexes for table `meciuri`
--
ALTER TABLE `meciuri`
  ADD PRIMARY KEY (`Id_Meci`),
  ADD KEY `Id_Stadion` (`Id_Stadion`);

--
-- Indexes for table `selectioneri`
--
ALTER TABLE `selectioneri`
  ADD PRIMARY KEY (`Id_Selectioner`),
  ADD KEY `Id_Echipa` (`Id_Echipa`);

--
-- Indexes for table `stadioane`
--
ALTER TABLE `stadioane`
  ADD PRIMARY KEY (`Id_Stadion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `echipe`
--
ALTER TABLE `echipe`
  MODIFY `Id_Echipa` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `grupe`
--
ALTER TABLE `grupe`
  MODIFY `Id_Grupa` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `meciuri`
--
ALTER TABLE `meciuri`
  MODIFY `Id_Meci` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `selectioneri`
--
ALTER TABLE `selectioneri`
  MODIFY `Id_Selectioner` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `stadioane`
--
ALTER TABLE `stadioane`
  MODIFY `Id_Stadion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `echipe`
--
ALTER TABLE `echipe`
  ADD CONSTRAINT `Grupe-Echipe` FOREIGN KEY (`Id_Grupa`) REFERENCES `grupe` (`Id_Grupa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `echipe_meciuri`
--
ALTER TABLE `echipe_meciuri`
  ADD CONSTRAINT `Echipe` FOREIGN KEY (`Id_Echipa`) REFERENCES `echipe` (`Id_Echipa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Meciuri` FOREIGN KEY (`Id_Meci`) REFERENCES `meciuri` (`Id_Meci`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `meciuri`
--
ALTER TABLE `meciuri`
  ADD CONSTRAINT `Stadioane-Meciuri` FOREIGN KEY (`Id_Stadion`) REFERENCES `stadioane` (`Id_Stadion`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `selectioneri`
--
ALTER TABLE `selectioneri`
  ADD CONSTRAINT `Echipe-Selectioneri` FOREIGN KEY (`Id_Echipa`) REFERENCES `echipe` (`Id_Echipa`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
