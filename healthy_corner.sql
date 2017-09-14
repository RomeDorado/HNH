-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 07:34 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
-- Table structure for table `banana`
--

CREATE TABLE `banana` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banana`
--

INSERT INTO `banana` (`id`, `name`, `current_size`, `max_size`) VALUES
(13, 'BANANA', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `beef`
--

CREATE TABLE `beef` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beef`
--

INSERT INTO `beef` (`id`, `name`, `current_size`, `max_size`) VALUES
(1, 'BEEF', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `black rice`
--

CREATE TABLE `black rice` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `black rice`
--

INSERT INTO `black rice` (`id`, `name`, `current_size`, `max_size`) VALUES
(17, 'BLACK', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `broccoli`
--

CREATE TABLE `broccoli` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broccoli`
--

INSERT INTO `broccoli` (`id`, `name`, `current_size`, `max_size`) VALUES
(6, 'BROCCOLI', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `brown rice`
--

CREATE TABLE `brown rice` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brown rice`
--

INSERT INTO `brown rice` (`id`, `name`, `current_size`, `max_size`) VALUES
(18, 'BROWN', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `carrots`
--

CREATE TABLE `carrots` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrots`
--

INSERT INTO `carrots` (`id`, `name`, `current_size`, `max_size`) VALUES
(7, 'CARROTS', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `chicken`
--

CREATE TABLE `chicken` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicken`
--

INSERT INTO `chicken` (`id`, `name`, `current_size`, `max_size`) VALUES
(2, 'CHICKEN', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `corn`
--

CREATE TABLE `corn` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corn`
--

INSERT INTO `corn` (`id`, `name`, `current_size`, `max_size`) VALUES
(8, 'CORN', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `garlic`
--

CREATE TABLE `garlic` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garlic`
--

INSERT INTO `garlic` (`id`, `name`, `current_size`, `max_size`) VALUES
(9, 'GARLIC', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `ginger`
--

CREATE TABLE `ginger` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ginger`
--

INSERT INTO `ginger` (`id`, `name`, `current_size`, `max_size`) VALUES
(15, 'GINGER', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `lamb`
--

CREATE TABLE `lamb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lamb`
--

INSERT INTO `lamb` (`id`, `name`, `current_size`, `max_size`) VALUES
(5, 'LAMB', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `lemon`
--

CREATE TABLE `lemon` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lemon`
--

INSERT INTO `lemon` (`id`, `name`, `current_size`, `max_size`) VALUES
(14, 'LEMON', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `malunggay`
--

CREATE TABLE `malunggay` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `malunggay`
--

INSERT INTO `malunggay` (`id`, `name`, `current_size`, `max_size`) VALUES
(11, 'MALUNGGAY', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `onion`
--

CREATE TABLE `onion` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onion`
--

INSERT INTO `onion` (`id`, `name`, `current_size`, `max_size`) VALUES
(10, 'ONION', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `product_mother`
--

CREATE TABLE `product_mother` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_mother`
--

INSERT INTO `product_mother` (`id`, `name`, `section`) VALUES
(1, 'BEEF', 'MEAT'),
(2, 'CHICKEN', 'MEAT'),
(3, 'TUNA', 'MEAT'),
(4, 'SALMON', 'MEAT'),
(5, 'LAMB', 'MEAT'),
(6, 'BROCCOLI', 'VEG'),
(7, 'CARROTS', 'VEG'),
(8, 'CORN', 'VEG'),
(9, 'GARLIC', 'VEG'),
(10, 'ONION', 'VEG'),
(11, 'MALUNGGAY', 'VEG'),
(12, 'SPINACH', 'VEG'),
(13, 'BANANA', 'VEG'),
(14, 'LEMON', 'VEG'),
(15, 'GINGER', 'VEG'),
(16, 'SCALLION', 'VEG'),
(17, 'BLACK', 'RICE'),
(18, 'BROWN', 'RICE');

-- --------------------------------------------------------

--
-- Table structure for table `salmon`
--

CREATE TABLE `salmon` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salmon`
--

INSERT INTO `salmon` (`id`, `name`, `current_size`, `max_size`) VALUES
(4, 'SALMON', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `scallion`
--

CREATE TABLE `scallion` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scallion`
--

INSERT INTO `scallion` (`id`, `name`, `current_size`, `max_size`) VALUES
(16, 'SCALLION', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `spinach`
--

CREATE TABLE `spinach` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spinach`
--

INSERT INTO `spinach` (`id`, `name`, `current_size`, `max_size`) VALUES
(12, 'SPINACH', 1000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `table_login`
--

CREATE TABLE `table_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_login`
--

INSERT INTO `table_login` (`id`, `username`, `password`) VALUES
(1, 'testuser', '$2y$10$GlyHFEL7J1uzm1zqKhcLOuAXrt1PMuVCemAn.Av/mcq5ALuD.g8BK');

-- --------------------------------------------------------

--
-- Table structure for table `tuna`
--

CREATE TABLE `tuna` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `current_size` int(11) NOT NULL,
  `max_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuna`
--

INSERT INTO `tuna` (`id`, `name`, `current_size`, `max_size`) VALUES
(3, 'TUNA', 1000, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banana`
--
ALTER TABLE `banana`
  ADD KEY `id` (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `name_2` (`name`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `beef`
--
ALTER TABLE `beef`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `id_2` (`id`),
  ADD KEY `name_2` (`name`),
  ADD KEY `name_3` (`name`),
  ADD KEY `id_3` (`id`);

--
-- Indexes for table `black rice`
--
ALTER TABLE `black rice`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `broccoli`
--
ALTER TABLE `broccoli`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `brown rice`
--
ALTER TABLE `brown rice`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `carrots`
--
ALTER TABLE `carrots`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `chicken`
--
ALTER TABLE `chicken`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `corn`
--
ALTER TABLE `corn`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `garlic`
--
ALTER TABLE `garlic`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ginger`
--
ALTER TABLE `ginger`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `lamb`
--
ALTER TABLE `lamb`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `lemon`
--
ALTER TABLE `lemon`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `malunggay`
--
ALTER TABLE `malunggay`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `onion`
--
ALTER TABLE `onion`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

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
-- Indexes for table `salmon`
--
ALTER TABLE `salmon`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `scallion`
--
ALTER TABLE `scallion`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`),
  ADD KEY `name_2` (`name`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `spinach`
--
ALTER TABLE `spinach`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `table_login`
--
ALTER TABLE `table_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tuna`
--
ALTER TABLE `tuna`
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_mother`
--
ALTER TABLE `product_mother`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `table_login`
--
ALTER TABLE `table_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
