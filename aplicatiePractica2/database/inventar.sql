-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 02, 2020 at 12:22 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cardistryshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventar`
--

DROP TABLE IF EXISTS `inventar`;
CREATE TABLE IF NOT EXISTS `inventar` (
  `id_product` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `currency` varchar(5) NOT NULL,
  `edition` tinyint(1) NOT NULL,
  `in_stock` tinyint(1) NOT NULL,
  `producer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventar`
--

INSERT INTO `inventar` (`id_product`, `name`, `price`, `currency`, `edition`, `in_stock`, `producer`) VALUES
(1, 'Neon', 35.29, 'USD', 0, 1, 'Bicycle'),
(2, 'Carnival', 42.72, 'USD', 1, 0, 'Bicycle'),
(3, 'Dark Lordz', 39.95, 'USD', 1, 1, 'NOC Playing Card'),
(4, 'The Seers', 9.95, 'USD', 0, 1, 'Saxon Fullwood'),
(5, 'Hybrid', 9.5, 'USD', 0, 1, 'Bicycle'),
(6, 'Salem', 35.33, 'USD', 0, 1, 'Bicycle'),
(7, 'Six Strings', 35.29, 'USD', 0, 1, 'Bicycle'),
(8, 'BCA', 19.23, 'USD', 0, 1, 'Bicycle'),
(9, 'Derren Brown', 10.9, 'USD', 0, 1, 'Saxon Fullwood'),
(10, 'Divine', 19.35, 'USD', 1, 1, 'NOC Playing Card'),
(11, 'The Watcher', 19.35, 'USD', 0, 1, 'Bicycle'),
(12, 'Murphy\'s Magic', 7.5, 'USD', 0, 0, 'NOC Playing Card'),
(13, 'The One', 19.35, 'USD', 0, 1, 'MPC'),
(14, 'Chic Gaff', 6.6, 'USD', 0, 1, 'Bicycle'),
(15, 'Jurassic Park', 7.5, 'USD', 0, 1, 'NOC Playing Card'),
(16, 'Mechanic Deck VR2', 15.95, 'USD', 0, 1, 'Saxon Fullwood');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
