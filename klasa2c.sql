-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2025 at 03:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza_dannych`
--

-- --------------------------------------------------------

--
-- Table structure for table `klasa2c`
--

CREATE TABLE `klasa2c` (
  `id` int(11) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `ocena` int(1) NOT NULL,
  `czy_zdaje_z_praktyk` varchar(10) NOT NULL,
  `czy_zdaje_z_baz_dannych` varchar(10) NOT NULL,
  `czy_gra_genshina` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `klasa2c`
--

INSERT INTO `klasa2c` (`id`, `imie`, `nazwisko`, `ocena`, `czy_zdaje_z_praktyk`, `czy_zdaje_z_baz_dannych`, `czy_gra_genshina`) VALUES
(1, 'Wiktor', 'Gostomski', 0, 'może', 'może', 'oczywiście'),
(2, 'test', 'test', 0, 'tak ', 'tak ', 'tak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klasa2c`
--
ALTER TABLE `klasa2c`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klasa2c`
--
ALTER TABLE `klasa2c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
