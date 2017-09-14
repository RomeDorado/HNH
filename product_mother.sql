-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2017 at 05:08 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthy_corner`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_mother`
--

CREATE TABLE `product_mother` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `section` varchar(100) NOT NULL,
  `sales_count` int(100) NOT NULL,
  `employee_count` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_mother`
--

INSERT INTO `product_mother` (`id`, `name`, `section`, `sales_count`, `employee_count`) VALUES
(1, 'BEEF', 'MEAT', 4, 1),
(2, 'CHICKEN', 'MEAT', 21, 3),
(3, 'TUNA', 'MEAT', 10, 4),
(4, 'SALMON', 'MEAT', 1, 0),
(5, 'LAMB', 'MEAT', 0, 0),
(6, 'BROCCOLI', 'VEG', 4, 0),
(7, 'CARROTS', 'VEG', 20, 0),
(8, 'CORN', 'VEG', 18, 0),
(9, 'GARLIC', 'VEG', 1, 0),
(10, 'ONION', 'VEG', 0, 0),
(11, 'MALUNGGAY', 'VEG', 0, 0),
(12, 'SPINACH', 'VEG', 1, 0),
(13, 'BANANA', 'VEG', 19, 0),
(14, 'LEMON', 'VEG', 16, 0),
(15, 'GINGER', 'VEG', 0, 0),
(16, 'SCALLION', 'VEG', 0, 0),
(17, 'BLACK', 'RICE', 4, 0),
(18, 'BROWN', 'RICE', 14, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_mother`
--
ALTER TABLE `product_mother`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD KEY `id` (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_mother`
--
ALTER TABLE `product_mother`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
