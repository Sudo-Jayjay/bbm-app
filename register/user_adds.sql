-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 12:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_adds`
--

CREATE TABLE `user_adds` (
  `id` int(11) NOT NULL,
  `user_region` varchar(200) NOT NULL,
  `user_province` varchar(200) DEFAULT NULL,
  `user_city` varchar(200) DEFAULT NULL,
  `user_barangay` varchar(200) DEFAULT NULL,
  `user_housenum` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_adds`
--

INSERT INTO `user_adds` (`id`, `user_region`, `user_province`, `user_city`, `user_barangay`, `user_housenum`) VALUES
(20, 'CORDILLERA ADMINISTRATIVE REGION (CAR)', 'APAYAO', 'CONNER', 'Puguin', 'the west');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_adds`
--
ALTER TABLE `user_adds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_adds`
--
ALTER TABLE `user_adds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
