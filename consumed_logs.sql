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
-- Table structure for table `consumed_logs`
--

CREATE TABLE `consumed_logs` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` int(11) NOT NULL,
  `employee_name` bigint(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumed_logs`
--

INSERT INTO `consumed_logs` (`id`, `product`, `date`, `amount`, `employee_name`) VALUES
(1, 'BEEF', '2017-09-13 16:00:00', 5, 0),
(2, 'BEEF', '2017-09-14 14:17:47', 8, 0),
(3, 'CHICKEN', '2017-09-14 14:32:17', 3, 0),
(4, 'BEEF', '2017-09-14 14:47:54', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumed_logs`
--
ALTER TABLE `consumed_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consumed_logs`
--
ALTER TABLE `consumed_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
