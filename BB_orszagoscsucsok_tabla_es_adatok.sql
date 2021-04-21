-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 10:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbolt`
--

-- --------------------------------------------------------

--
-- Table structure for table `orszagoscsucsok_tabla_es_adatok`
--

CREATE TABLE `orszagoscsucsok_tabla_es_adatok` (
  `ocs_id` int(11) NOT NULL,
  `ocs_nev` varchar(256) COLLATE utf8_hungarian_ci NOT NULL,
  `ocs_szuleve` smallint(6) NOT NULL,
  `ocs_hely` varchar(128) COLLATE utf8_hungarian_ci NOT NULL,
  `ocs_datum` date NOT NULL,
  `ocs_kategoria` varchar(64) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `orszagoscsucsok_tabla_es_adatok`
--

INSERT INTO `orszagoscsucsok_tabla_es_adatok` (`ocs_id`, `ocs_nev`, `ocs_szuleve`, `ocs_hely`, `ocs_datum`, `ocs_kategoria`) VALUES
(1, 'NÉMETH Roland', 1974, 'Budapest', '1999-06-09', '100 méter'),
(2, 'KOVÁCS Attila', 1960, 'Miskolc', '1987-08-21', '200 méter'),
(3, 'MOLNÁR Tamás', 1968, 'Nyíregyháza', '1992-07-26', '300 méter'),
(4, 'DEÁK NAGY Marcell', 1992, 'Tallinn', '2011-07-22', '400 méter'),
(5, 'KAZI Tamás', 1985, 'Rieti', '2013-09-08', '800 méter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orszagoscsucsok_tabla_es_adatok`
--
ALTER TABLE `orszagoscsucsok_tabla_es_adatok`
  ADD PRIMARY KEY (`ocs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orszagoscsucsok_tabla_es_adatok`
--
ALTER TABLE `orszagoscsucsok_tabla_es_adatok`
  MODIFY `ocs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
