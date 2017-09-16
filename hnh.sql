-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2017 at 06:50 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hnh`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `gethappy` ()  NO SQL
SELECT happy.*,  product_mother.* from happy join product_mother on happy.prod_fk = product_mother.id where 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `gethealthy` ()  NO SQL
SELECT healthy.*,  product_mother.* from healthy join product_mother on healthy.prod_fk = product_mother.id where 1$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `happy`
--

CREATE TABLE `happy` (
  `happy_id` bigint(20) UNSIGNED NOT NULL,
  `prod_fk` bigint(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `happy`
--

INSERT INTO `happy` (`happy_id`, `prod_fk`) VALUES
(2, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5),
(7, 6),
(8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `healthy`
--

CREATE TABLE `healthy` (
  `healthy_id` bigint(20) UNSIGNED NOT NULL,
  `prod_fk` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `healthy`
--

INSERT INTO `healthy` (`healthy_id`, `prod_fk`) VALUES
(1, 8),
(2, 9),
(3, 10),
(4, 11),
(5, 12),
(6, 13),
(7, 14),
(8, 15);

-- --------------------------------------------------------

--
-- Table structure for table `perium`
--

CREATE TABLE `perium` (
  `premium_id` bigint(20) UNSIGNED NOT NULL,
  `prod_fk` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_mother`
--

CREATE TABLE `product_mother` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `section` varchar(100) NOT NULL,
  `current` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `sales_count` int(100) NOT NULL,
  `alacarte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_mother`
--

INSERT INTO `product_mother` (`id`, `name`, `section`, `current`, `max`, `sales_count`, `alacarte`) VALUES
(1, '4 cheeese', '1', 1000, 1000, 0, 53),
(2, 'pepperoni', '1', 1000, 1000, 0, 53),
(3, 'hawaiian', '1', 1000, 1000, 0, 53),
(4, 'carbonara', '2', 1000, 1000, 0, 63),
(5, 'tuna pesto', '2', 1000, 1000, 0, 63),
(6, 'bolognese', '2', 1000, 1000, 0, 63),
(7, 'wedges', '3', 1000, 1000, 0, 43),
(8, 'brown', '1', 1000, 1000, 0, 23),
(9, 'black', '1', 1000, 1000, 0, 23),
(10, 'beef', '2', 1000, 1000, 0, 63),
(11, 'chicken', '2', 1000, 1000, 0, 63),
(12, 'tuna', '2', 1000, 1000, 0, 63),
(13, 'corn', '3', 1000, 1000, 0, 33),
(14, 'carrots', '3', 1000, 1000, 0, 33),
(15, 'broccoli', '3', 1000, 1000, 0, 33),
(16, 'grilled lamb', '2', 1000, 1000, 0, 159),
(17, 'grilled salmon', '2', 1000, 1000, 0, 179);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` bigint(20) UNSIGNED NOT NULL,
  `prod_fk` bigint(20) UNSIGNED NOT NULL,
  `itemcount` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_login`
--

CREATE TABLE `table_login` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_login`
--

INSERT INTO `table_login` (`user_id`, `username`, `password`) VALUES
(1, 'testuser', '$2y$10$GlyHFEL7J1uzm1zqKhcLOuAXrt1PMuVCemAn.Av/mcq5ALuD.g8BK');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `1` varchar(50) DEFAULT NULL,
  `2` varchar(50) DEFAULT NULL,
  `3` varchar(30) DEFAULT NULL,
  `type` varchar(5) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `1`, `2`, `3`, `type`, `price`) VALUES
(1, 'asdasd', 'adasd', 'asdasd', '=123', 123123);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transact_id` bigint(20) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `1` bigint(11) UNSIGNED NOT NULL,
  `2` bigint(11) UNSIGNED NOT NULL,
  `3` bigint(11) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transact_id`, `date`, `1`, `2`, `3`, `total`, `type`) VALUES
(1, '2017-09-14 14:16:01', 10, 6, 15, 123123, 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `trans_user`
--

CREATE TABLE `trans_user` (
  `user_fk` bigint(20) UNSIGNED NOT NULL,
  `trans_fk` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `happy`
--
ALTER TABLE `happy`
  ADD PRIMARY KEY (`happy_id`),
  ADD UNIQUE KEY `happy_id` (`happy_id`),
  ADD KEY `prod_fk` (`prod_fk`);

--
-- Indexes for table `healthy`
--
ALTER TABLE `healthy`
  ADD PRIMARY KEY (`healthy_id`),
  ADD UNIQUE KEY `healthy_id` (`healthy_id`),
  ADD KEY `prod_fk` (`prod_fk`);

--
-- Indexes for table `perium`
--
ALTER TABLE `perium`
  ADD PRIMARY KEY (`premium_id`),
  ADD UNIQUE KEY `premium_id` (`premium_id`),
  ADD KEY `prod_fk` (`prod_fk`);

--
-- Indexes for table `product_mother`
--
ALTER TABLE `product_mother`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD KEY `id` (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD UNIQUE KEY `sales_id` (`sales_id`),
  ADD KEY `prod_fk` (`prod_fk`);

--
-- Indexes for table `table_login`
--
ALTER TABLE `table_login`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transact_id`),
  ADD UNIQUE KEY `transact_id` (`transact_id`),
  ADD KEY `1` (`1`),
  ADD KEY `2` (`2`),
  ADD KEY `3` (`3`);

--
-- Indexes for table `trans_user`
--
ALTER TABLE `trans_user`
  ADD KEY `user_fk` (`user_fk`),
  ADD KEY `trans_fk` (`trans_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `happy`
--
ALTER TABLE `happy`
  MODIFY `happy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `healthy`
--
ALTER TABLE `healthy`
  MODIFY `healthy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `perium`
--
ALTER TABLE `perium`
  MODIFY `premium_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_mother`
--
ALTER TABLE `product_mother`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_login`
--
ALTER TABLE `table_login`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transact_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `happy`
--
ALTER TABLE `happy`
  ADD CONSTRAINT `happy_ibfk_1` FOREIGN KEY (`prod_fk`) REFERENCES `product_mother` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `healthy`
--
ALTER TABLE `healthy`
  ADD CONSTRAINT `healthy_ibfk_1` FOREIGN KEY (`prod_fk`) REFERENCES `product_mother` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `perium`
--
ALTER TABLE `perium`
  ADD CONSTRAINT `perium_ibfk_1` FOREIGN KEY (`prod_fk`) REFERENCES `product_mother` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`prod_fk`) REFERENCES `product_mother` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`1`) REFERENCES `product_mother` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`2`) REFERENCES `product_mother` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`3`) REFERENCES `product_mother` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `trans_user`
--
ALTER TABLE `trans_user`
  ADD CONSTRAINT `trans_user_ibfk_1` FOREIGN KEY (`trans_fk`) REFERENCES `transaction` (`transact_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `trans_user_ibfk_2` FOREIGN KEY (`user_fk`) REFERENCES `table_login` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
