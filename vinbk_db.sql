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
(1, 'Gucchi 2018', 202.1, 13, 4.4),
(2, 'Gucchi 2019', 688.1, 115, 1.2),
(3, 'Gucchi 2020', 390.2, 4, 1.2),
(4, 'Gucchi 2021', 880.9, 184, 4.9),
(5, 'Gucchi spring', 584.0, 37, 3.0),
(6, 'Gucchi summer', 603.4, 124, 3.9),
(7, 'Gucchi fall', 282.0, 179, 2.6),
(8, 'Gucchi winter', 590.6, 65, 1.6),
(9, 'Gucchi limited', 590.6, 6, 1.6),
(10, 'Gucchi trending', 64.0, 6, 4.3),
(11, 'Chanel 2018', 503.2, 107, 1.7),
(12, 'Chanel 2019', 650.6, 152, 4.9),
(13, 'Chanel 2020', 718.9, 25, 4.6),
(14, 'Chanel 2021', 900.8, 155, 1.7),
(15, 'Chanel spring', 154.3, 186, 1.1),
(16, 'Chanel summer', 18.9, 109, 2.8),
(17, 'Chanel fall', 236.5, 200, 1.6),
(18, 'Chanel winter', 678.8, 149, 3.0),
(19, 'Chanel limited', 756.2, 8, 3.1),
(20, 'Chanel trending', 68.7, 69, 1.6);

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
(1, 'Honda 2018', 202.1, 13, 4.4),
(2, 'Honda 2019', 688.1, 115, 1.2),
(3, 'Honda 2020', 390.2, 4, 1.2),
(4, 'Honda 2021', 880.9, 184, 4.9),
(5, 'Honda spring', 584.0, 37, 3.0),
(6, 'Honda summer', 603.4, 124, 3.9),
(7, 'Honda fall', 282.0, 179, 2.6),
(8, 'Honda winter', 590.6, 65, 1.6),
(9, 'Honda limited', 590.6, 6, 1.6),
(10, 'Honda trending', 64.0, 6, 4.3),
(11, 'Son 2018', 503.2, 107, 1.7),
(12, 'Son 2019', 650.6, 152, 4.9),
(13, 'Son 2020', 718.9, 25, 4.6),
(14, 'Son 2021', 900.8, 155, 1.7),
(15, 'Son spring', 154.3, 186, 1.1),
(16, 'Son summer', 18.9, 109, 2.8),
(17, 'Son fall', 236.5, 200, 1.6),
(18, 'Son winter', 678.8, 149, 3.0),
(19, 'Son limited', 756.2, 8, 3.1),
(20, 'Son trending', 68.7, 69, 1.6);

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
(1, 'led 2018', 202.1, 13, 4.4),
(2, 'led 2019', 688.1, 115, 1.2),
(3, 'led 2020', 390.2, 4, 1.2),
(4, 'led 2021', 880.9, 184, 4.9),
(5, 'led spring', 584.0, 37, 3.0),
(6, 'led summer', 603.4, 124, 3.9),
(7, 'led fall', 282.0, 179, 2.6),
(8, 'led winter', 590.6, 65, 1.6),
(9, 'led limited', 590.6, 6, 1.6),
(10, 'led trending', 64.0, 6, 4.3),
(11, 'poly 2018', 503.2, 107, 1.7),
(12, 'poly 2019', 650.6, 152, 4.9),
(13, 'poly 2020', 718.9, 25, 4.6),
(14, 'poly 2021', 900.8, 155, 1.7),
(15, 'poly spring', 154.3, 186, 1.1),
(16, 'poly summer', 18.9, 109, 2.8),
(17, 'poly fall', 236.5, 200, 1.6),
(18, 'poly winter', 678.8, 149, 3.0),
(19, 'poly limited', 756.2, 8, 3.1),
(20, 'poly trending', 68.7, 69, 1.6);

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
(1, 'Admin', 'Admin', '2001-02-13', 'admin.admin@hcmut.edu.vn', '1910000'),
(2, 'Admin', 'Admin', '2001-02-13', 'admin2.admin@hcmut.edu.vn', '1910000'),
(3, 'Tu', 'Le', '2001-02-13', 'tu.user@hcmut.edu.vn', '1915812'),
(4, 'Nhan', 'Nguyen', '2001-12-13', 'nhan.user@hcmut.edu.vn', '1914446'),
(5, 'Cong', 'Vu', '2001-07-13', 'cong.user@hcmut.edu.vn', '1912811'),
(6, 'Trong', 'Ho', '2001-05-13', 'trong.user@hcmut.edu.vn', '1915672');

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
(1, 'jj 2018', 202.1, 13, 4.4),
(2, 'jj 2019', 688.1, 115, 1.2),
(3, 'jj 2020', 390.2, 4, 1.2),
(4, 'jj 2021', 880.9, 184, 4.9),
(5, 'jj spring', 584.0, 37, 3.0),
(6, 'jj summer', 603.4, 124, 3.9),
(7, 'jj fall', 282.0, 179, 2.6),
(8, 'jj winter', 590.6, 65, 1.6),
(9, 'jj limited', 590.6, 6, 1.6),
(10, 'jj trending', 64.0, 6, 4.3),
(11, 'True Religion 2018', 503.2, 107, 1.7),
(12, 'True Religion 2019', 650.6, 152, 4.9),
(13, 'True Religion 2020', 718.9, 25, 4.6),
(14, 'True Religion 2021', 900.8, 155, 1.7),
(15, 'True Religion spring', 154.3, 186, 1.1),
(16, 'True Religion summer', 18.9, 109, 2.8),
(17, 'True Religion fall', 236.5, 200, 1.6),
(18, 'True Religion winter', 678.8, 149, 3.0),
(19, 'True Religion limited', 756.2, 8, 3.1),
(20, 'True Religion trending', 68.7, 69, 1.6);

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
(1, 'Cali 2018', 202.1, 13, 4.4),
(2, 'Cali 2019', 688.1, 115, 1.2),
(3, 'Cali 2020', 390.2, 4, 1.2),
(4, 'Cali 2021', 880.9, 184, 4.9),
(5, 'Cali spring', 584.0, 37, 3.0),
(6, 'Cali summer', 603.4, 124, 3.9),
(7, 'Cali fall', 282.0, 179, 2.6),
(8, 'Cali winter', 590.6, 65, 1.6),
(9, 'Cali limited', 590.6, 6, 1.6),
(10, 'Cali trending', 64.0, 6, 4.3),
(11, 'fit 2018', 503.2, 107, 1.7),
(12, 'fit 2019', 650.6, 152, 4.9),
(13, 'fit 2020', 718.9, 25, 4.6),
(14, 'fit 2021', 900.8, 155, 1.7),
(15, 'fit spring', 154.3, 186, 1.1),
(16, 'fit summer', 18.9, 109, 2.8),
(17, 'fit fall', 236.5, 200, 1.6),
(18, 'fit winter', 678.8, 149, 3.0),
(19, 'fit limited', 756.2, 8, 3.1),
(20, 'fit trending', 68.7, 69, 1.6);

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
(1, 'AX 2018', 202.1, 13, 4.4),
(2, 'AX 2019', 688.1, 115, 1.2),
(3, 'AX 2020', 390.2, 4, 1.2),
(4, 'AX 2021', 880.9, 184, 4.9),
(5, 'AX spring', 584.0, 37, 3.0),
(6, 'AX summer', 603.4, 124, 3.9),
(7, 'AX fall', 282.0, 179, 2.6),
(8, 'AX winter', 590.6, 65, 1.6),
(9, 'AX limited', 590.6, 6, 1.6),
(10, 'AX trending', 64.0, 6, 4.3),
(11, 'Lacoste 2018', 503.2, 107, 1.7),
(12, 'Lacoste 2019', 650.6, 152, 4.9),
(13, 'Lacoste 2020', 718.9, 25, 4.6),
(14, 'Lacoste 2021', 900.8, 155, 1.7),
(15, 'Lacoste spring', 154.3, 186, 1.1),
(16, 'Lacoste summer', 18.9, 109, 2.8),
(17, 'Lacoste fall', 236.5, 200, 1.6),
(18, 'Lacoste winter', 678.8, 149, 3.0),
(19, 'Lacoste limited', 756.2, 8, 3.1),
(20, 'Lacoste trending', 68.7, 69, 1.6);

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
(1, 'uniform 2018', 202.1, 13, 4.4),
(2, 'uniform 2019', 688.1, 115, 1.2),
(3, 'uniform 2020', 390.2, 4, 1.2),
(4, 'uniform 2021', 880.9, 184, 4.9),
(5, 'uniform spring', 584.0, 37, 3.0),
(6, 'uniform summer', 603.4, 124, 3.9),
(7, 'uniform fall', 282.0, 179, 2.6),
(8, 'uniform winter', 590.6, 65, 1.6),
(9, 'uniform limited', 590.6, 6, 1.6),
(10, 'uniform trending', 64.0, 6, 4.3),
(11, 'VinhPhuc 2018', 503.2, 107, 1.7),
(12, 'VinhPhuc 2019', 650.6, 152, 4.9),
(13, 'VinhPhuc 2020', 718.9, 25, 4.6),
(14, 'VinhPhuc 2021', 900.8, 155, 1.7),
(15, 'VinhPhuc spring', 154.3, 186, 1.1),
(16, 'VinhPhuc summer', 18.9, 109, 2.8),
(17, 'VinhPhuc fall', 236.5, 200, 1.6),
(18, 'VinhPhuc winter', 678.8, 149, 3.0),
(19, 'VinhPhuc limited', 756.2, 8, 3.1),
(20, 'VinhPhuc trending', 68.7, 69, 1.6);

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
(1, 'uniform 2018', 202.1, 13, 4.4),
(2, 'uniform 2019', 688.1, 115, 1.2),
(3, 'uniform 2020', 390.2, 4, 1.2),
(4, 'uniform 2021', 880.9, 184, 4.9),
(5, 'uniform spring', 584.0, 37, 3.0),
(6, 'uniform summer', 603.4, 124, 3.9),
(7, 'uniform fall', 282.0, 179, 2.6),
(8, 'uniform winter', 590.6, 65, 1.6),
(9, 'uniform limited', 590.6, 6, 1.6),
(10, 'uniform trending', 64.0, 6, 4.3),
(11, 'VinCloth 2018', 503.2, 107, 1.7),
(12, 'VinCloth 2019', 650.6, 152, 4.9),
(13, 'VinCloth 2020', 718.9, 25, 4.6),
(14, 'VinCloth 2021', 900.8, 155, 1.7),
(15, 'VinCloth spring', 154.3, 186, 1.1),
(16, 'VinCloth summer', 18.9, 109, 2.8),
(17, 'VinCloth fall', 236.5, 200, 1.6),
(18, 'VinCloth winter', 678.8, 149, 3.0),
(19, 'VinCloth limited', 756.2, 8, 3.1),
(20, 'VinCloth trending', 68.7, 69, 1.6);

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
(1, 'bitis 2018', 202.1, 13, 4.4),
(2, 'bitis 2019', 688.1, 115, 1.2),
(3, 'bitis 2020', 390.2, 4, 1.2),
(4, 'bitis 2021', 880.9, 184, 4.9),
(5, 'bitis spring', 584.0, 37, 3.0),
(6, 'bitis summer', 603.4, 124, 3.9),
(7, 'bitis fall', 282.0, 179, 2.6),
(8, 'bitis winter', 590.6, 65, 1.6),
(9, 'bitis limited', 590.6, 6, 1.6),
(10, 'bitis trending', 64.0, 6, 4.3),
(11, 'DepLao 2018', 503.2, 107, 1.7),
(12, 'DepLao 2019', 650.6, 152, 4.9),
(13, 'DepLao 2020', 718.9, 25, 4.6),
(14, 'DepLao 2021', 900.8, 155, 1.7),
(15, 'DepLao spring', 154.3, 186, 1.1),
(16, 'DepLao summer', 18.9, 109, 2.8),
(17, 'DepLao fall', 236.5, 200, 1.6),
(18, 'DepLao winter', 678.8, 149, 3.0),
(19, 'DepLao limited', 756.2, 8, 3.1),
(20, 'DepLao trending', 68.7, 69, 1.6);

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
(1, 'Addidas 2018', 202.1, 13, 4.4),
(2, 'Addidas 2019', 688.1, 115, 1.2),
(3, 'Addidas 2020', 390.2, 4, 1.2),
(4, 'Addidas 2021', 880.9, 184, 4.9),
(5, 'Addidas spring', 584.0, 37, 3.0),
(6, 'Addidas summer', 603.4, 124, 3.9),
(7, 'Addidas fall', 282.0, 179, 2.6),
(8, 'Addidas winter', 590.6, 65, 1.6),
(9, 'Addidas limited', 590.6, 6, 1.6),
(10, 'Addidas trending', 64.0, 6, 4.3),
(11, 'Sneaker 2018', 503.2, 107, 1.7),
(12, 'Sneaker 2019', 650.6, 152, 4.9),
(13, 'Sneaker 2020', 718.9, 25, 4.6),
(14, 'Sneaker 2021', 900.8, 155, 1.7),
(15, 'Sneaker spring', 154.3, 186, 1.1),
(16, 'Sneaker summer', 18.9, 109, 2.8),
(17, 'Sneaker fall', 236.5, 200, 1.6),
(18, 'Sneaker winter', 678.8, 149, 3.0),
(19, 'Sneaker limited', 756.2, 8, 3.1),
(20, 'Sneaker trending', 68.7, 69, 1.6);

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
(1, 'Addidas 2018', 202.1, 13, 4.4),
(2, 'Addidas 2019', 688.1, 115, 1.2),
(3, 'Addidas 2020', 390.2, 4, 1.2),
(4, 'Addidas 2021', 880.9, 184, 4.9),
(5, 'Addidas spring', 584.0, 37, 3.0),
(6, 'Addidas summer', 603.4, 124, 3.9),
(7, 'Addidas fall', 282.0, 179, 2.6),
(8, 'Addidas winter', 590.6, 65, 1.6),
(9, 'Addidas limited', 590.6, 6, 1.6),
(10, 'Addidas trending', 64.0, 6, 4.3),
(11, 'Nike 2018', 503.2, 107, 1.7),
(12, 'Nike 2019', 650.6, 152, 4.9),
(13, 'Nike 2020', 718.9, 25, 4.6),
(14, 'Nike 2021', 900.8, 155, 1.7),
(15, 'Nike spring', 154.3, 186, 1.1),
(16, 'Nike summer', 18.9, 109, 2.8),
(17, 'Nike fall', 236.5, 200, 1.6),
(18, 'Nike winter', 678.8, 149, 3.0),
(19, 'Nike limited', 756.2, 8, 3.1),
(20, 'Nike trending', 68.7, 69, 1.6);

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
(1, 3, 'pants_jeans', 2),
(2, 3, 'shirt_tshirt_vest', 3),
(3, 3, 'shoes_trainers', 10),
(4, 3, 'shirt_polo', 4),
(5, 3, 'shirt_polo', 8),
(6, 4, 'pants_jeans', 12),
(7, 4, 'shoes_shocks', 2),
(8, 4, 'access_caps', 1),
(9, 4, 'access_glass', 8),
(10, 4, 'access_bag', 6),
(11, 4, 'pants_jog', 2),
(12, 1, 'pants_jeans', 4),
(13, 1, 'shoes_sandals_slippers', 15),
(14, 1, 'shoes_trainers', 17),
(15, 1, 'shirt_tshirt_vest', 1),
(16, 1, 'pants_jeans', 13),
(17, 1, 'shoes_sandals_slippers', 16),
(18, 1, 'access_caps', 4),
(19, 1, 'shoes_shocks', 19),
(20, 1, 'shirt_tshirt_vest', 18);

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
