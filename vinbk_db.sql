-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 09:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinbk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_bag`
--

CREATE TABLE `access_bag` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_bag`
--

INSERT INTO `access_bag` (`id`, `name`, `cost`, `quantity`, `rating`) VALUES
(1, 'Gucchi 2021', 202.1, 13, 4.4);

-- --------------------------------------------------------

--
-- Table structure for table `access_caps`
--

CREATE TABLE `access_caps` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_caps`
--

INSERT INTO `access_caps` (`id`, `name`, `cost`, `quantity`, `rating`) VALUES
(1, 'honda', 30, 500, 1.2);

-- --------------------------------------------------------

--
-- Table structure for table `access_glass`
--

CREATE TABLE `access_glass` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_glass`
--

INSERT INTO `access_glass` (`id`, `name`, `cost`, `quantity`, `rating`) VALUES
(1, 'intense', 300, 15, 4.8);

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(8) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `firstName`, `lastName`, `birthday`, `email`, `password`) VALUES
(1, 'Admin', 'Admin', '2001-02-13', 'admin.admin@hcmut.edu.vn', '1910000');

-- --------------------------------------------------------

--
-- Table structure for table `pants_jeans`
--

CREATE TABLE `pants_jeans` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pants_jeans`
--

INSERT INTO `pants_jeans` (`id`, `name`, `cost`, `quantity`, `rating`) VALUES
(1, 'big black', 119, 78, 2.2);

-- --------------------------------------------------------

--
-- Table structure for table `pants_jog`
--

CREATE TABLE `pants_jog` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pants_jog`
--

INSERT INTO `pants_jog` (`id`, `name`, `cost`, `quantity`, `rating`) VALUES
(1, 'TNT', 349.7, 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pants_lounges`
--

CREATE TABLE `pants_lounges` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pants_lounges`
--

INSERT INTO `pants_lounges` (`id`, `name`, `cost`, `quantity`, `rating`) VALUES
(1, 'C6H12O6', 999.9, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `shirt_polo`
--

CREATE TABLE `shirt_polo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shirt_polo`
--

INSERT INTO `shirt_polo` (`id`, `name`, `cost`, `quantity`, `rating`) VALUES
(1, 'LV for spring', 300, 15, 4.8),
(2, 'winter 2021', 299.5, 30, 3.3);

-- --------------------------------------------------------

--
-- Table structure for table `shirt_shirt`
--

CREATE TABLE `shirt_shirt` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(8) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shirt_shirt`
--

INSERT INTO `shirt_shirt` (`id`, `name`, `cost`, `quantity`, `rating`) VALUES
(1, 'Toyota 1900', 34.5, 100, 2.4);

-- --------------------------------------------------------

--
-- Table structure for table `shirt_tshirt_vest`
--

CREATE TABLE `shirt_tshirt_vest` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shirt_tshirt_vest`
--

INSERT INTO `shirt_tshirt_vest` (`id`, `name`, `cost`, `quantity`, `rating`) VALUES
(1, 'var', 249.5, 45, 3.7);

-- --------------------------------------------------------

--
-- Table structure for table `shoes_sandals_slippers`
--

CREATE TABLE `shoes_sandals_slippers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes_sandals_slippers`
--

INSERT INTO `shoes_sandals_slippers` (`id`, `name`, `cost`, `quantity`, `rating`) VALUES
(1, 'nike win', 666, 6, 4.6);

-- --------------------------------------------------------

--
-- Table structure for table `shoes_shocks`
--

CREATE TABLE `shoes_shocks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes_shocks`
--

INSERT INTO `shoes_shocks` (`id`, `name`, `cost`, `quantity`, `rating`) VALUES
(1, 'bitis Marvel', 105.5, 78, 4.5);

-- --------------------------------------------------------

--
-- Table structure for table `shoes_trainers`
--

CREATE TABLE `shoes_trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes_trainers`
--

INSERT INTO `shoes_trainers` (`id`, `name`, `cost`, `quantity`, `rating`) VALUES
(1, 'tanker', 374, 68, 3.1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `category` varchar(150) NOT NULL,
  `clothID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userID`, `category`, `clothID`) VALUES
(1, 1, 'pants_jeans', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_bag`
--
ALTER TABLE `access_bag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `access_caps`
--
ALTER TABLE `access_caps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `access_glass`
--
ALTER TABLE `access_glass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pants_jeans`
--
ALTER TABLE `pants_jeans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pants_jog`
--
ALTER TABLE `pants_jog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pants_lounges`
--
ALTER TABLE `pants_lounges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shirt_polo`
--
ALTER TABLE `shirt_polo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shirt_shirt`
--
ALTER TABLE `shirt_shirt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shirt_tshirt_vest`
--
ALTER TABLE `shirt_tshirt_vest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes_sandals_slippers`
--
ALTER TABLE `shoes_sandals_slippers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes_shocks`
--
ALTER TABLE `shoes_shocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes_trainers`
--
ALTER TABLE `shoes_trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_bag`
--
ALTER TABLE `access_bag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `access_caps`
--
ALTER TABLE `access_caps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `access_glass`
--
ALTER TABLE `access_glass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pants_jeans`
--
ALTER TABLE `pants_jeans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pants_jog`
--
ALTER TABLE `pants_jog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pants_lounges`
--
ALTER TABLE `pants_lounges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shirt_polo`
--
ALTER TABLE `shirt_polo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shirt_shirt`
--
ALTER TABLE `shirt_shirt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shirt_tshirt_vest`
--
ALTER TABLE `shirt_tshirt_vest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoes_sandals_slippers`
--
ALTER TABLE `shoes_sandals_slippers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoes_shocks`
--
ALTER TABLE `shoes_shocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoes_trainers`
--
ALTER TABLE `shoes_trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
