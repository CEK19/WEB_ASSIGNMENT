-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 12:00 AM
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
-- Database: `webass`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_bag`
--

CREATE TABLE `access_bag` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `detail` varchar(300) DEFAULT 'Đây là sự kết tinh ý tưởng thiết kế',
  `cost_origin` float DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `rating` float DEFAULT 1,
  `1star` int(11) DEFAULT 0,
  `2star` int(11) DEFAULT 0,
  `3star` int(11) DEFAULT 0,
  `4star` int(11) DEFAULT 0,
  `5star` int(11) DEFAULT 0,
  `num_review` int(11) DEFAULT 0,
  `wishList` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_bag`
--

INSERT INTO `access_bag` (`id`, `name`, `brand`, `detail`, `cost_origin`, `cost`, `quantity`, `rating`, `1star`, `2star`, `3star`, `4star`, `5star`, `num_review`, `wishList`) VALUES
(1, 'Gucchi 2018', 'Gucchi', 'Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018', 303.5, 202.1, 13, 4.4, 0, 0, 0, 2, 1, 3, 0),
(2, 'Gucchi 2019', 'Gucchi', 'Thời gian và xu thế, ấn tượng và lịch lãm', 700, 688.1, 115, 1.2, 3, 1, 0, 0, 0, 4, 0),
(3, 'Gucchi 2020', 'Gucchi', 'Mặc áo Gucchi đánh bại Co-viii', 420, 390.2, 4, 1.2, 0, 0, 0, 5, 0, 5, 0),
(4, 'Gucchi 2021', 'Gucchi', 'Hai - không - hai - một', 901.2, 880.9, 184, 4.9, 0, 0, 0, 1, 5, 6, 0),
(5, 'Gucchi spring', 'Gucchi', 'Xuân đang tới, nghĩa là xuân đang qua,\r\nXuân còn non, nghĩa là xuân sẽ già,\r\nMà xuân hết, nghĩa là tôi cũng mất. (Xuân Diệu)', 999, 584, 37, 3, 1, 0, 6, 0, 1, 8, 0),
(6, 'Gucchi summer', 'Gucchi', 'summer time with high fashion bikini', 700, 603.4, 124, 3.9, 0, 0, 2, 5, 0, 7, 0),
(7, 'Gucchi fall', 'Gucchi', 'Sáng sớm mùa hè\r\nTrời thật mát mẻ\r\nGió thổi nhè nhẹ\r\nNắng xuống đầy sân.', 300, 282, 179, 2.6, 0, 5, 8, 0, 0, 13, 0),
(8, 'Gucchi winter', 'Gucchi', 'Có một cô bé bán không bán được dim, cô bèn làm người mẫu ảnh cho Gucchi winter', 600.7, 590.6, 65, 1.6, 10, 0, 2, 0, 0, 12, 0),
(9, 'Gucchi limited', 'Gucchi', 'Bản mô phỏng của Gazebo trên nền áo tơ tầm thượng hạng', 901.2, 590.6, 6, 1.6, 5, 0, 3, 0, 0, 8, 0),
(10, 'Gucchi trending', 'Gucchi', 'Mang hình ảnh nón lá Việt Nam', 102.3, 64, 6, 4.3, 0, 0, 0, 1, 2, 3, 0),
(11, 'Chanel 2018', 'Chanel', 'Hai - không - một - tám', 600.7, 503.2, 107, 1.7, 3, 0, 1, 0, 0, 4, 0),
(12, 'Chanel 2019', 'Chanel', 'Năm tân hợi, áo tân hỉ', 700, 650.6, 152, 4.9, 1, 0, 0, 0, 8, 9, 0),
(13, 'Chanel 2020', 'Chanel', 'chất liệu polyme', 823.6, 718.9, 25, 4.6, 0, 0, 2, 0, 5, 7, 0),
(14, 'Chanel 2021', 'Channel', 'Thời trang tái chế', 999, 900.8, 155, 1.7, 2, 0, 1, 0, 0, 3, 0),
(15, 'Chanel spring', 'Chanel', 'lấy cảm hứng từ hoa anh đạo Nhật Bản', 303.5, 154.3, 186, 1.1, 5, 0, 3, 0, 0, 8, 0),
(16, 'Chanel summer', 'Chanel', 'Lấy ý tưởng từ bảo vệ môi trường biển', 60.3, 18.9, 109, 2.8, 0, 1, 3, 0, 0, 4, 0),
(17, 'Chanel fall', 'Chanel', 'Làng nước mùa thu, trong trẻo', 303.5, 236.5, 200, 1.6, 8, 4, 0, 0, 0, 12, 0),
(18, 'Chanel winter', 'Chanel', 'Noel - santa', 700, 678.8, 149, 3, 0, 0, 10, 0, 0, 10, 0),
(19, 'Chanel limited', 'Chanel', 'Lấy chất liệu từ vàng thỏi để trang trí', 901.2, 756.2, 8, 3.1, 0, 0, 10, 1, 0, 11, 0),
(20, 'Chanel trending', 'Chanel', 'vina house', 100, 68.7, 69, 1.6, 5, 2, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `access_caps`
--

CREATE TABLE `access_caps` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `detail` varchar(300) DEFAULT 'Đây là sự kết tinh ý tưởng thiết kế',
  `cost_origin` float DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `rating` float DEFAULT 1,
  `1star` int(11) DEFAULT 0,
  `2star` int(11) DEFAULT 0,
  `3star` int(11) DEFAULT 0,
  `4star` int(11) DEFAULT 0,
  `5star` int(11) DEFAULT 0,
  `num_review` int(11) DEFAULT 0,
  `wishList` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_caps`
--

INSERT INTO `access_caps` (`id`, `name`, `brand`, `detail`, `cost_origin`, `cost`, `quantity`, `rating`, `1star`, `2star`, `3star`, `4star`, `5star`, `num_review`, `wishList`) VALUES
(1, 'Honda 2018', 'Honda', 'Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018', 303.5, 202.1, 13, 4.4, 0, 0, 0, 2, 1, 3, 0),
(2, 'Honda 2019', 'Honda', 'Thời gian và xu thế, ấn tượng và lịch lãm', 700, 688.1, 115, 1.2, 3, 1, 0, 0, 0, 4, 0),
(3, 'Honda 2020', 'Honda', 'Mặc áo Gucchi đánh bại Co-viii', 420, 390.2, 4, 1.2, 0, 0, 0, 5, 0, 5, 0),
(4, 'Honda 2021', 'Honda', 'Hai - không - hai - một', 901.2, 880.9, 184, 4.9, 0, 0, 0, 1, 5, 6, 0),
(5, 'Honda spring', 'Honda', 'Xuân đang tới, nghĩa là xuân đang qua,\r\nXuân còn non, nghĩa là xuân sẽ già,\r\nMà xuân hết, nghĩa là tôi cũng mất. (Xuân Diệu)', 999, 584, 37, 3, 1, 0, 6, 0, 1, 8, 0),
(6, 'Honda summer', 'Honda', 'summer time with high fashion bikini', 700, 603.4, 124, 3.9, 0, 0, 2, 5, 0, 7, 0),
(7, 'Honda fall', 'Honda', 'Sáng sớm mùa hè\r\nTrời thật mát mẻ\r\nGió thổi nhè nhẹ\r\nNắng xuống đầy sân.', 300, 282, 179, 2.6, 0, 5, 8, 0, 0, 13, 0),
(8, 'Honda winter', 'Honda', 'Có một cô bé bán không bán được dim, cô bèn làm người mẫu ảnh cho Gucchi winter', 600.7, 590.6, 65, 1.6, 10, 0, 2, 0, 0, 12, 0),
(9, 'Honda limited', 'Honda', 'Bản mô phỏng của Gazebo trên nền áo tơ tầm thượng hạng', 901.2, 590.6, 6, 1.6, 5, 0, 3, 0, 0, 8, 0),
(10, 'Honda trending', 'Honda', 'Mang hình ảnh nón lá Việt Nam', 102.3, 64, 6, 4.3, 0, 0, 0, 1, 2, 3, 0),
(11, 'Son 2018', 'Son', 'Hai - không - một - tám', 600.7, 503.2, 107, 1.7, 3, 0, 1, 0, 0, 4, 0),
(12, 'Son 2019', 'Son', 'Năm tân hợi, áo tân hỉ', 700, 650.6, 152, 4.9, 1, 0, 0, 0, 8, 9, 0),
(13, 'Son 2020', 'Son', 'chất liệu polyme', 823.6, 718.9, 25, 4.6, 0, 0, 2, 0, 5, 7, 0),
(14, 'Son 2021', 'Son', 'Thời trang tái chế', 999, 900.8, 155, 1.7, 2, 0, 1, 0, 0, 3, 0),
(15, 'Son spring', 'Son', 'lấy cảm hứng từ hoa anh đạo Nhật Bản', 303.5, 154.3, 186, 1.1, 5, 0, 3, 0, 0, 8, 0),
(16, 'Son summer', 'Son', 'Lấy ý tưởng từ bảo vệ môi trường biển', 60.3, 18.9, 109, 2.8, 0, 1, 3, 0, 0, 4, 0),
(17, 'Son fall', 'Son', 'Làng nước mùa thu, trong trẻo', 303.5, 236.5, 200, 1.6, 8, 4, 0, 0, 0, 12, 0),
(18, 'Son winter', 'Son', 'Noel - santa', 700, 678.8, 149, 3, 0, 0, 10, 0, 0, 10, 0),
(19, 'Son limited', 'Son', 'Lấy chất liệu từ vàng thỏi để trang trí', 901.2, 756.2, 8, 3.1, 0, 0, 10, 1, 0, 11, 0),
(20, 'Son trending', 'Son', 'vina house', 100, 68.7, 69, 1.6, 5, 2, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `access_glass`
--

CREATE TABLE `access_glass` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `detail` varchar(300) DEFAULT 'Đây là sự kết tinh ý tưởng thiết kế',
  `cost_origin` float DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `rating` float DEFAULT 1,
  `1star` int(11) DEFAULT 0,
  `2star` int(11) DEFAULT 0,
  `3star` int(11) DEFAULT 0,
  `4star` int(11) DEFAULT 0,
  `5star` int(11) DEFAULT 0,
  `num_review` int(11) DEFAULT 0,
  `wishList` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_glass`
--

INSERT INTO `access_glass` (`id`, `name`, `brand`, `detail`, `cost_origin`, `cost`, `quantity`, `rating`, `1star`, `2star`, `3star`, `4star`, `5star`, `num_review`, `wishList`) VALUES
(1, 'led 2018', 'MCU', 'Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018', 303.5, 202.1, 13, 4.4, 0, 0, 0, 2, 1, 3, 0),
(2, 'led 2019', 'MCU', 'Thời gian và xu thế, ấn tượng và lịch lãm', 700, 688.1, 115, 1.2, 3, 1, 0, 0, 0, 4, 0),
(3, 'led 2020', 'MCU', 'Mặc áo Gucchi đánh bại Co-viii', 420, 390.2, 4, 1.2, 0, 0, 0, 5, 0, 5, 0),
(4, 'led 2021', 'MCU', 'Hai - không - hai - một', 901.2, 880.9, 184, 4.9, 0, 0, 0, 1, 5, 6, 0),
(5, 'led spring', 'MCU', 'Xuân đang tới, nghĩa là xuân đang qua,\r\nXuân còn non, nghĩa là xuân sẽ già,\r\nMà xuân hết, nghĩa là tôi cũng mất. (Xuân Diệu)', 999, 584, 37, 3, 1, 0, 6, 0, 1, 8, 0),
(6, 'led summer', 'MCU', 'summer time with high fashion bikini', 700, 603.4, 124, 3.9, 0, 0, 2, 5, 0, 7, 0),
(7, 'led fall', 'MCU', 'Sáng sớm mùa hè\r\nTrời thật mát mẻ\r\nGió thổi nhè nhẹ\r\nNắng xuống đầy sân.', 300, 282, 179, 2.6, 0, 5, 8, 0, 0, 13, 0),
(8, 'led winter', 'MCU', 'Có một cô bé bán không bán được dim, cô bèn làm người mẫu ảnh cho Gucchi winter', 600.7, 590.6, 65, 1.6, 10, 0, 2, 0, 0, 12, 0),
(9, 'led limited', 'MCU', 'Bản mô phỏng của Gazebo trên nền áo tơ tầm thượng hạng', 901.2, 590.6, 6, 1.6, 5, 0, 3, 0, 0, 8, 0),
(10, 'led trending', 'MCU', 'Mang hình ảnh nón lá Việt Nam', 102.3, 64, 6, 4.3, 0, 0, 0, 1, 2, 3, 0),
(11, 'poly 2018', 'CH4', 'Hai - không - một - tám', 600.7, 503.2, 107, 1.7, 3, 0, 1, 0, 0, 4, 0),
(12, 'poly 2019', 'CH4', 'Năm tân hợi, áo tân hỉ', 700, 650.6, 152, 4.9, 1, 0, 0, 0, 8, 9, 0),
(13, 'poly 2020', 'CH4', 'chất liệu polyme', 823.6, 718.9, 25, 4.6, 0, 0, 2, 0, 5, 7, 0),
(14, 'poly 2021', 'CH4', 'Thời trang tái chế', 999, 900.8, 155, 1.7, 2, 0, 1, 0, 0, 3, 0),
(15, 'poly spring', 'CH4', 'lấy cảm hứng từ hoa anh đạo Nhật Bản', 303.5, 154.3, 186, 1.1, 5, 0, 3, 0, 0, 8, 0),
(16, 'poly summer', 'CH4', 'Lấy ý tưởng từ bảo vệ môi trường biển', 60.3, 18.9, 109, 2.8, 0, 1, 3, 0, 0, 4, 0),
(17, 'poly fall', 'CH4', 'Làng nước mùa thu, trong trẻo', 303.5, 236.5, 200, 1.6, 8, 4, 0, 0, 0, 12, 0),
(18, 'poly winter', 'CH4', 'Noel - santa', 700, 678.8, 149, 3, 0, 0, 10, 0, 0, 10, 0),
(19, 'poly limited', 'CH4', 'Lấy chất liệu từ vàng thỏi để trang trí', 901.2, 756.2, 8, 3.1, 0, 0, 10, 1, 0, 11, 0),
(20, 'poly trending', 'CH4', 'vina house', 100, 68.7, 69, 1.6, 5, 2, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_id` int(8) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `firstName`, `lastName`, `birthday`, `email`, `password`, `level`) VALUES
(1, 'Admin', 'Admin', '2001-02-13', 'admin.admin@hcmut.edu.vn', '8c649e23ba34274f603b93d38e8840eb', 1),
(2, 'Admin', 'Admin', '2001-02-13', 'admin2.admin@hcmut.edu.vn', '8c649e23ba34274f603b93d38e8840eb', 1),
(3, 'Tu', 'Le', '2001-02-13', 'tu.user@hcmut.edu.vn', 'c5edba99599009bfa7b950c5c42825a0', 1),
(4, 'Nhan', 'Nguyen', '2001-12-13', 'nhan.user@hcmut.edu.vn', 'd2ad33faa1e2dd36709b17470b87e294', 1),
(5, 'Cong', 'Vu', '2001-07-13', 'cong.user@hcmut.edu.vn', 'bcbc63d8f601f17bd120890b8abb7578', 1),
(6, 'Trong', 'Ho', '2001-05-13', 'trong.user@hcmut.edu.vn', '59e14ba142a2bd4bc7426e158a01d435', 1),
(9, 'Kong', 'Cute', '2001-09-06', 'admin@gmail.com', 'e841d8cb3ebd2c1cb71c7a8c6f5306f3', 2),
(10, 'Coongkun', 'hahaa', '2001-09-06', 'congkun@gmail.com', '8a30d69f36c0035a0d67bfaaad132fc8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `clothID` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `star` int(11) DEFAULT 1,
  `comment` varchar(350) NOT NULL DEFAULT 'Tôi rất thích sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `email`, `clothID`, `category`, `star`, `comment`) VALUES
(1, 'tu.user@hcmut.edu.vn', 15, 'pants_jeans', 4, 'Sản phẩm đúng như mô tả, cám ơn vinBK rất nhiều'),
(2, 'cong.user@hcmut.edu.vn', 2, 'access_glass', 1, 'Mắt kính bị giòn, và rất dễ gãy, mong shop khắc phục'),
(3, 'tu.user@hcmut.edu.vn', 12, 'shirt_polo', 3, 'Giao hàng bị chậm, tôi phải chờ rất lâu'),
(4, 'nhan.user@hcmut.edu.vn', 8, 'pants_jog', 2, 'Quần bị lỏng dây thun, mặc vào là tuột'),
(5, 'trong.user@hcmut.edu.vn', 9, 'access_glass', 4, 'Tất cả đều oke.'),
(6, 'cong.user@hcmut.edu.vn', 15, 'shirt_shirt', 4, 'Tôi rất thích sản phẩm'),
(7, 'nhan.user@hcmut.edu.vn', 15, 'shirt_shirt', 2, 'Nhân viên giao hàng thái độ với khách, mong shop xử lý'),
(8, 'nhan.user@hcmut.edu.vn', 9, 'access_glass', 5, 'Sản phẩm rất tuyệt vời, tôi đeo rất êm, không bị nhức đầu'),
(9, 'trong.user@hcmut.edu.vn', 2, 'access_caps', 3, 'Ổn'),
(10, 'cong.user@hcmut.edu.vn', 8, 'pants_jog', 5, 'quần mặc rất sexy'),
(11, 'tu.user@hcmut.edu.vn', 9, 'access_glass', 5, 'đeo lên rất cool nha, có cả led chiếu chiếu nữa.'),
(12, 'cong.user@hcmut.edu.vn', 9, 'access_bags', 4, 'Sản phẩm rất tuyệt'),
(13, 'tu.user@hcmut.edu.vn', 2, 'access_caps', 5, 'Tôi rất thích nó'),
(14, 'tu.user@hcmut.edu.vn', 9, 'access_glass', 5, 'Tuyệt vời ông mặt trời'),
(15, 'nhan.user@hcmut.edu.vn', 9, 'access_glass', 2, 'Mắt kính không vừa với cái đầu bự của tôi'),
(16, 'trong.user@hcmut.edu.vn', 8, 'pants_jog', 4, 'Giao hàng ổn, mặt hàng đúng như mô tả'),
(17, 'trong.user@hcmut.edu.vn', 3, 'shoes_shocks', 1, 'Giao vớ bị lủng'),
(18, 'trong.user@hcmut.edu.vn', 2, 'shirt_shirt', 2, 'Áo bị bung chỉ'),
(19, 'cong.user@hcmut.edu.vn', 3, 'shirt_shirt', 3, 'Ngoài giao hàng chậm, còn lại đều ổn, tôi vote 3 sao'),
(20, 'tu.user@hcmut.edu.vn', 3, 'shoes_trainers', 5, 'Giày đi vừa chân, êm, chạy rất nhẹ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `clothID` int(11) NOT NULL,
  `category` varchar(150) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `deliveryMethod` varchar(100) NOT NULL DEFAULT 'fast',
  `paymentMethod` varchar(100) NOT NULL DEFAULT 'card',
  `cardNumber` varchar(100) NOT NULL,
  `e-wallet` varchar(100) NOT NULL DEFAULT 'paypal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `email`, `clothID`, `category`, `color`, `size`, `quantity`, `phone`, `address`, `deliveryMethod`, `paymentMethod`, `cardNumber`, `e-wallet`) VALUES
(2, 'tu.user@hcmut.edu.vn', 2, 'pants_jog', 'black', 'M', 2, '0915882865', 'Bình Hưng Hòa, Ga Hòa Hưng, kênh nhiêu lộc', 'fast', 'card', '123087653', 'paypal'),
(3, 'tu.user@hcmut.edu.vn', 9, 'shirt_shirt', 'white', 'XL', 1, '0915881865', 'Bình Hưng Hòa, Ga Hòa Hưng, kênh nhiêu lộc', 'fast', 'card', '123087653', 'paypal'),
(4, 'tu.user@hcmut.edu.vn', 15, 'shirt_polo', 'black', 'L', 2, '0915882865', 'Bình Hưng Hòa, Ga Hòa Hưng, kênh nhiêu lộc', 'fast', 'card', '123087653', 'paypal'),
(5, 'nhan.user@hcmut.edu.vn', 8, 'access_glass', 'white', 'XL', 10, '098123456', 'Gầm cầu Công Lý, Kênh Thị Nghè', 'normal', 'e-wallet', 'null', 'momo'),
(6, 'nhan.user@hcmut.edu.vn', 3, 'access_glass', 'black', 'M', 5, '098123456', 'Gầm cầu Công Lý, Kênh Thị Nghè', 'normal', 'e-wallet', 'null', 'momo'),
(7, 'nhan.user@hcmut.edu.vn', 12, 'access_bag', 'black', 'XL', 2, '098123456', 'Gầm cầu Công Lý, Kênh Thị Nghè', 'normal', 'e-wallet', 'null', 'momo'),
(8, 'nhan.user@hcmut.edu.vn', 4, 'shoes_trainers', 'black', 'S', 3, '098123456', 'Gầm cầu Công Lý, Kênh Thị Nghè', 'normal', 'e-wallet', 'null', 'paypal');

-- --------------------------------------------------------

--
-- Table structure for table `pants_jeans`
--

CREATE TABLE `pants_jeans` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `detail` varchar(300) DEFAULT 'Đây là sự kết tinh ý tưởng thiết kế',
  `cost_origin` float DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `rating` float DEFAULT 1,
  `1star` int(11) DEFAULT 0,
  `2star` int(11) DEFAULT 0,
  `3star` int(11) DEFAULT 0,
  `4star` int(11) DEFAULT 0,
  `5star` int(11) DEFAULT 0,
  `num_review` int(11) DEFAULT 0,
  `wishList` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pants_jeans`
--

INSERT INTO `pants_jeans` (`id`, `name`, `brand`, `detail`, `cost_origin`, `cost`, `quantity`, `rating`, `1star`, `2star`, `3star`, `4star`, `5star`, `num_review`, `wishList`) VALUES
(1, 'jj 2018', 'jj co.op', 'Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018', 303.5, 202.1, 13, 4.4, 0, 0, 0, 2, 1, 3, 0),
(2, 'jj 2019', 'jj co.op', 'Thời gian và xu thế, ấn tượng và lịch lãm', 700, 688.1, 115, 1.2, 3, 1, 0, 0, 0, 4, 0),
(3, 'jj 2020', 'jj co.op', 'Mặc áo Gucchi đánh bại Co-viii', 420, 390.2, 4, 1.2, 0, 0, 0, 5, 0, 5, 0),
(4, 'jj 2021', 'jj co.op', 'Hai - không - hai - một', 901.2, 880.9, 184, 4.9, 0, 0, 0, 1, 5, 6, 0),
(5, 'jj spring', 'jj co.op', 'Xuân đang tới, nghĩa là xuân đang qua,\r\nXuân còn non, nghĩa là xuân sẽ già,\r\nMà xuân hết, nghĩa là tôi cũng mất. (Xuân Diệu)', 999, 584, 37, 3, 1, 0, 6, 0, 1, 8, 0),
(6, 'jj summer', 'jj co.op', 'summer time with high fashion bikini', 700, 603.4, 124, 3.9, 0, 0, 2, 5, 0, 7, 0),
(7, 'jj fall', 'jj co.op', 'Sáng sớm mùa hè\r\nTrời thật mát mẻ\r\nGió thổi nhè nhẹ\r\nNắng xuống đầy sân.', 300, 282, 179, 2.6, 0, 5, 8, 0, 0, 13, 0),
(8, 'jj winter', 'jj co.op', 'Có một cô bé bán không bán được dim, cô bèn làm người mẫu ảnh cho Gucchi winter', 600.7, 590.6, 65, 1.6, 10, 0, 2, 0, 0, 12, 0),
(9, 'jj limited', 'jj co.op', 'Bản mô phỏng của Gazebo trên nền áo tơ tầm thượng hạng', 901.2, 590.6, 6, 1.6, 5, 0, 3, 0, 0, 8, 0),
(10, 'jj trending', 'jj co.op', 'Mang hình ảnh nón lá Việt Nam', 102.3, 64, 6, 4.3, 0, 0, 0, 1, 2, 3, 0),
(11, 'True Religion 2018', 'True Religion', 'Hai - không - một - tám', 600.7, 503.2, 107, 1.7, 3, 0, 1, 0, 0, 4, 0),
(12, 'True Religion 2019', 'True Religion', 'Năm tân hợi, áo tân hỉ', 700, 650.6, 152, 4.9, 1, 0, 0, 0, 8, 9, 0),
(13, 'True Religion 2020', 'True Religion', 'chất liệu polyme', 823.6, 718.9, 25, 4.6, 0, 0, 2, 0, 5, 7, 0),
(14, 'True Religion 2021', 'True Religion', 'Thời trang tái chế', 999, 900.8, 155, 1.7, 2, 0, 1, 0, 0, 3, 0),
(15, 'True Religion spring', 'True Religion', 'lấy cảm hứng từ hoa anh đạo Nhật Bản', 303.5, 154.3, 186, 1.1, 5, 0, 3, 0, 0, 8, 0),
(16, 'True Religion summer', 'True Religion', 'Lấy ý tưởng từ bảo vệ môi trường biển', 60.3, 18.9, 109, 2.8, 0, 1, 3, 0, 0, 4, 0),
(17, 'True Religion fall', 'True Religion', 'Làng nước mùa thu, trong trẻo', 303.5, 236.5, 200, 1.6, 8, 4, 0, 0, 0, 12, 0),
(18, 'True Religion winter', 'True Religion', 'Noel - santa', 700, 678.8, 149, 3, 0, 0, 10, 0, 0, 10, 0),
(19, 'True Religion limited', 'True Religion', 'Lấy chất liệu từ vàng thỏi để trang trí', 901.2, 756.2, 8, 3.1, 0, 0, 10, 1, 0, 11, 0),
(20, 'True Religion trending', 'True Religion', 'vina house', 100, 68.7, 69, 1.6, 5, 2, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pants_jog`
--

CREATE TABLE `pants_jog` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `detail` varchar(300) DEFAULT 'Đây là sự kết tinh ý tưởng thiết kế',
  `cost_origin` float DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `rating` float DEFAULT 1,
  `1star` int(11) DEFAULT 0,
  `2star` int(11) DEFAULT 0,
  `3star` int(11) DEFAULT 0,
  `4star` int(11) DEFAULT 0,
  `5star` int(11) DEFAULT 0,
  `num_review` int(11) DEFAULT 0,
  `wishList` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pants_jog`
--

INSERT INTO `pants_jog` (`id`, `name`, `brand`, `detail`, `cost_origin`, `cost`, `quantity`, `rating`, `1star`, `2star`, `3star`, `4star`, `5star`, `num_review`, `wishList`) VALUES
(1, 'legging 2018', 'Kini', 'Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018', 303.5, 202.1, 13, 4.4, 0, 0, 0, 2, 1, 3, 0),
(2, 'legging 2019', 'Kini', 'Thời gian và xu thế, ấn tượng và lịch lãm', 700, 688.1, 115, 1.2, 3, 1, 0, 0, 0, 4, 0),
(3, 'legging 2020', 'Kini', 'Mặc áo Gucchi đánh bại Co-viii', 420, 390.2, 4, 1.2, 0, 0, 0, 5, 0, 5, 0),
(4, 'legging 2021', 'Kini', 'Hai - không - hai - một', 901.2, 880.9, 184, 4.9, 0, 0, 0, 1, 5, 6, 0),
(5, 'legging spring', 'Kini', 'Xuân đang tới, nghĩa là xuân đang qua,\r\nXuân còn non, nghĩa là xuân sẽ già,\r\nMà xuân hết, nghĩa là tôi cũng mất. (Xuân Diệu)', 999, 584, 37, 3, 1, 0, 6, 0, 1, 8, 0),
(6, 'legging summer', 'Kini', 'summer time with high fashion bikini', 700, 603.4, 124, 3.9, 0, 0, 2, 5, 0, 7, 0),
(7, 'legging fall', 'Kini', 'Sáng sớm mùa hè\r\nTrời thật mát mẻ\r\nGió thổi nhè nhẹ\r\nNắng xuống đầy sân.', 300, 282, 179, 2.6, 0, 5, 8, 0, 0, 13, 0),
(8, 'legging winter', 'Kini', 'Có một cô bé bán không bán được dim, cô bèn làm người mẫu ảnh cho Gucchi winter', 600.7, 590.6, 65, 1.6, 10, 0, 2, 0, 0, 12, 0),
(9, 'legging limited', 'Kini', 'Bản mô phỏng của Gazebo trên nền áo tơ tầm thượng hạng', 901.2, 590.6, 6, 1.6, 5, 0, 3, 0, 0, 8, 0),
(10, 'legging trending', 'Kini', 'Mang hình ảnh nón lá Việt Nam', 102.3, 64, 6, 4.3, 0, 0, 0, 1, 2, 3, 0),
(11, 'asuna 2018', 'Nezuko', 'Hai - không - một - tám', 600.7, 503.2, 107, 1.7, 3, 0, 1, 0, 0, 4, 0),
(12, 'asuna 2019', 'Nezuko', 'Năm tân hợi, áo tân hỉ', 700, 650.6, 152, 4.9, 1, 0, 0, 0, 8, 9, 0),
(13, 'asuna 2020', 'Nezuko', 'chất liệu polyme', 823.6, 718.9, 25, 4.6, 0, 0, 2, 0, 5, 7, 0),
(14, 'asuna 2021', 'Nezuko', 'Thời trang tái chế', 999, 900.8, 155, 1.7, 2, 0, 1, 0, 0, 3, 0),
(15, 'asuna spring', 'Nezuko', 'lấy cảm hứng từ hoa anh đạo Nhật Bản', 303.5, 154.3, 186, 1.1, 5, 0, 3, 0, 0, 8, 0),
(16, 'asuna summer', 'Nezuko', 'Lấy ý tưởng từ bảo vệ môi trường biển', 60.3, 18.9, 109, 2.8, 0, 1, 3, 0, 0, 4, 0),
(17, 'asuna fall', 'Nezuko', 'Làng nước mùa thu, trong trẻo', 303.5, 236.5, 200, 1.6, 8, 4, 0, 0, 0, 12, 0),
(18, 'asuna winter', 'Nezuko', 'Noel - santa', 700, 678.8, 149, 3, 0, 0, 10, 0, 0, 10, 0),
(19, 'asuna limited', 'Nezuko', 'Lấy chất liệu từ vàng thỏi để trang trí', 901.2, 756.2, 8, 3.1, 0, 0, 10, 1, 0, 11, 0),
(20, 'asuna trending', 'Nezuko', 'vina house', 100, 68.7, 69, 1.6, 5, 2, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pants_lounges`
--

CREATE TABLE `pants_lounges` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `detail` varchar(300) DEFAULT 'Đây là sự kết tinh ý tưởng thiết kế',
  `cost_origin` float DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `rating` float DEFAULT 1,
  `1star` int(11) DEFAULT 0,
  `2star` int(11) DEFAULT 0,
  `3star` int(11) DEFAULT 0,
  `4star` int(11) DEFAULT 0,
  `5star` int(11) DEFAULT 0,
  `num_review` int(11) DEFAULT 0,
  `wishList` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pants_lounges`
--

INSERT INTO `pants_lounges` (`id`, `name`, `brand`, `detail`, `cost_origin`, `cost`, `quantity`, `rating`, `1star`, `2star`, `3star`, `4star`, `5star`, `num_review`, `wishList`) VALUES
(1, 'Cali 2018', 'Kini', 'Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018', 303.5, 202.1, 13, 4.4, 0, 0, 0, 2, 1, 3, 0),
(2, 'Cali 2019', 'Kini', 'Thời gian và xu thế, ấn tượng và lịch lãm', 700, 688.1, 115, 1.2, 3, 1, 0, 0, 0, 4, 0),
(3, 'Cali 2020', 'Kini', 'Mặc áo Gucchi đánh bại Co-viii', 420, 390.2, 4, 1.2, 0, 0, 0, 5, 0, 5, 0),
(4, 'Cali 2021', 'Kini', 'Hai - không - hai - một', 901.2, 880.9, 184, 4.9, 0, 0, 0, 1, 5, 6, 0),
(5, 'Cali spring', 'Kini', 'Xuân đang tới, nghĩa là xuân đang qua,\r\nXuân còn non, nghĩa là xuân sẽ già,\r\nMà xuân hết, nghĩa là tôi cũng mất. (Xuân Diệu)', 999, 584, 37, 3, 1, 0, 6, 0, 1, 8, 0),
(6, 'Cali summer', 'Kini', 'summer time with high fashion bikini', 700, 603.4, 124, 3.9, 0, 0, 2, 5, 0, 7, 0),
(7, 'Cali fall', 'Kini', 'Sáng sớm mùa hè\r\nTrời thật mát mẻ\r\nGió thổi nhè nhẹ\r\nNắng xuống đầy sân.', 300, 282, 179, 2.6, 0, 5, 8, 0, 0, 13, 0),
(8, 'Cali winter', 'Kini', 'Có một cô bé bán không bán được dim, cô bèn làm người mẫu ảnh cho Gucchi winter', 600.7, 590.6, 65, 1.6, 10, 0, 2, 0, 0, 12, 0),
(9, 'Cali limited', 'Kini', 'Bản mô phỏng của Gazebo trên nền áo tơ tầm thượng hạng', 901.2, 590.6, 6, 1.6, 5, 0, 3, 0, 0, 8, 0),
(10, 'Cali trending', 'Kini', 'Mang hình ảnh nón lá Việt Nam', 102.3, 64, 6, 4.3, 0, 0, 0, 1, 2, 3, 0),
(11, 'fit 2018', 'Nezuko', 'Hai - không - một - tám', 600.7, 503.2, 107, 1.7, 3, 0, 1, 0, 0, 4, 0),
(12, 'fit 2019', 'Nezuko', 'Năm tân hợi, áo tân hỉ', 700, 650.6, 152, 4.9, 1, 0, 0, 0, 8, 9, 0),
(13, 'fit 2020', 'Nezuko', 'chất liệu polyme', 823.6, 718.9, 25, 4.6, 0, 0, 2, 0, 5, 7, 0),
(14, 'fit 2021', 'Nezuko', 'Thời trang tái chế', 999, 900.8, 155, 1.7, 2, 0, 1, 0, 0, 3, 0),
(15, 'fit spring', 'Nezuko', 'lấy cảm hứng từ hoa anh đạo Nhật Bản', 303.5, 154.3, 186, 1.1, 5, 0, 3, 0, 0, 8, 0),
(16, 'fit summer', 'Nezuko', 'Lấy ý tưởng từ bảo vệ môi trường biển', 60.3, 18.9, 109, 2.8, 0, 1, 3, 0, 0, 4, 0),
(17, 'fit fall', 'Nezuko', 'Làng nước mùa thu, trong trẻo', 303.5, 236.5, 200, 1.6, 8, 4, 0, 0, 0, 12, 0),
(18, 'fit winter', 'Nezuko', 'Noel - santa', 700, 678.8, 149, 3, 0, 0, 10, 0, 0, 10, 0),
(19, 'fit limited', 'Nezuko', 'Lấy chất liệu từ vàng thỏi để trang trí', 901.2, 756.2, 8, 3.1, 0, 0, 10, 1, 0, 11, 0),
(20, 'fit trending', 'Nezuko', 'vina house', 100, 68.7, 69, 1.6, 5, 2, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shirt_polo`
--

CREATE TABLE `shirt_polo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `detail` varchar(300) DEFAULT 'Đây là sự kết tinh ý tưởng thiết kế',
  `cost_origin` float DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `rating` float DEFAULT 1,
  `1star` int(11) DEFAULT 0,
  `2star` int(11) DEFAULT 0,
  `3star` int(11) DEFAULT 0,
  `4star` int(11) DEFAULT 0,
  `5star` int(11) DEFAULT 0,
  `num_review` int(11) DEFAULT 0,
  `wishList` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shirt_polo`
--

INSERT INTO `shirt_polo` (`id`, `name`, `brand`, `detail`, `cost_origin`, `cost`, `quantity`, `rating`, `1star`, `2star`, `3star`, `4star`, `5star`, `num_review`, `wishList`) VALUES
(1, 'AX 2018', 'AX', 'Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018', 303.5, 202.1, 13, 4.4, 0, 0, 0, 2, 1, 3, 0),
(2, 'AX 2019', 'AX', 'Thời gian và xu thế, ấn tượng và lịch lãm', 700, 688.1, 115, 1.2, 3, 1, 0, 0, 0, 4, 0),
(3, 'AX 2020', 'AX', 'Mặc áo Gucchi đánh bại Co-viii', 420, 390.2, 4, 1.2, 0, 0, 0, 5, 0, 5, 0),
(4, 'AX 2021', 'AX', 'Hai - không - hai - một', 901.2, 880.9, 184, 4.9, 0, 0, 0, 1, 5, 6, 0),
(5, 'AX spring', 'AX', 'Xuân đang tới, nghĩa là xuân đang qua,\r\nXuân còn non, nghĩa là xuân sẽ già,\r\nMà xuân hết, nghĩa là tôi cũng mất. (Xuân Diệu)', 999, 584, 37, 3, 1, 0, 6, 0, 1, 8, 0),
(6, 'AX summer', 'AX', 'summer time with high fashion bikini', 700, 603.4, 124, 3.9, 0, 0, 2, 5, 0, 7, 0),
(7, 'AX fall', 'AX', 'Sáng sớm mùa hè\r\nTrời thật mát mẻ\r\nGió thổi nhè nhẹ\r\nNắng xuống đầy sân.', 300, 282, 179, 2.6, 0, 5, 8, 0, 0, 13, 0),
(8, 'AX winter', 'AX', 'Có một cô bé bán không bán được dim, cô bèn làm người mẫu ảnh cho Gucchi winter', 600.7, 590.6, 65, 1.6, 10, 0, 2, 0, 0, 12, 0),
(9, 'AX limited', 'AX', 'Bản mô phỏng của Gazebo trên nền áo tơ tầm thượng hạng', 901.2, 590.6, 6, 1.6, 5, 0, 3, 0, 0, 8, 0),
(10, 'AX trending', 'AX', 'Mang hình ảnh nón lá Việt Nam', 102.3, 64, 6, 4.3, 0, 0, 0, 1, 2, 3, 0),
(11, 'Lacoste 2018', 'Lacoste', 'Hai - không - một - tám', 600.7, 503.2, 107, 1.7, 3, 0, 1, 0, 0, 4, 0),
(12, 'Lacoste 2019', 'Lacoste', 'Năm tân hợi, áo tân hỉ', 700, 650.6, 152, 4.9, 1, 0, 0, 0, 8, 9, 0),
(13, 'Lacoste 2020', 'Lacoste', 'chất liệu polyme', 823.6, 718.9, 25, 4.6, 0, 0, 2, 0, 5, 7, 0),
(14, 'Lacoste 2021', 'Lacoste', 'Thời trang tái chế', 999, 900.8, 155, 1.7, 2, 0, 1, 0, 0, 3, 0),
(15, 'Lacoste spring', 'Lacoste', 'lấy cảm hứng từ hoa anh đạo Nhật Bản', 303.5, 154.3, 186, 1.1, 5, 0, 3, 0, 0, 8, 0),
(16, 'Lacoste summer', 'Lacoste', 'Lấy ý tưởng từ bảo vệ môi trường biển', 60.3, 18.9, 109, 2.8, 0, 1, 3, 0, 0, 4, 0),
(17, 'Lacoste fall', 'Lacoste', 'Làng nước mùa thu, trong trẻo', 303.5, 236.5, 200, 1.6, 8, 4, 0, 0, 0, 12, 0),
(18, 'Lacoste winter', 'Lacoste', 'Noel - santa', 700, 678.8, 149, 3, 0, 0, 10, 0, 0, 10, 0),
(19, 'Lacoste limited', 'Lacoste', 'Lấy chất liệu từ vàng thỏi để trang trí', 901.2, 756.2, 8, 3.1, 0, 0, 10, 1, 0, 11, 0),
(20, 'Lacoste trending', 'Lacoste', 'vina house', 100, 68.7, 69, 1.6, 5, 2, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shirt_shirt`
--

CREATE TABLE `shirt_shirt` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `detail` varchar(300) DEFAULT 'Đây là sự kết tinh ý tưởng thiết kế',
  `cost_origin` float DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(8) DEFAULT 0,
  `rating` float DEFAULT 1,
  `1star` int(11) DEFAULT 0,
  `2star` int(11) DEFAULT 0,
  `3star` int(11) DEFAULT 0,
  `4star` int(11) DEFAULT 0,
  `5star` int(11) DEFAULT 0,
  `num_review` int(11) DEFAULT 0,
  `wishList` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shirt_shirt`
--

INSERT INTO `shirt_shirt` (`id`, `name`, `brand`, `detail`, `cost_origin`, `cost`, `quantity`, `rating`, `1star`, `2star`, `3star`, `4star`, `5star`, `num_review`, `wishList`) VALUES
(1, 'uniform 2018', 'unisex', 'Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018', 303.5, 202.1, 13, 4.4, 0, 0, 0, 2, 1, 3, 0),
(2, 'uniform 2019', 'unisex', 'Thời gian và xu thế, ấn tượng và lịch lãm', 700, 688.1, 115, 1.2, 3, 1, 0, 0, 0, 4, 0),
(3, 'uniform 2020', 'unisex', 'Mặc áo Gucchi đánh bại Co-viii', 420, 390.2, 4, 1.2, 0, 0, 0, 5, 0, 5, 0),
(4, 'uniform 2021', 'unisex', 'Hai - không - hai - một', 901.2, 880.9, 184, 4.9, 0, 0, 0, 1, 5, 6, 0),
(5, 'uniform spring', 'unisex', 'Xuân đang tới, nghĩa là xuân đang qua,\r\nXuân còn non, nghĩa là xuân sẽ già,\r\nMà xuân hết, nghĩa là tôi cũng mất. (Xuân Diệu)', 999, 584, 37, 3, 1, 0, 6, 0, 1, 8, 0),
(6, 'uniform summer', 'unisex', 'summer time with high fashion bikini', 700, 603.4, 124, 3.9, 0, 0, 2, 5, 0, 7, 0),
(7, 'uniform fall', 'unisex', 'Sáng sớm mùa hè\r\nTrời thật mát mẻ\r\nGió thổi nhè nhẹ\r\nNắng xuống đầy sân.', 300, 282, 179, 2.6, 0, 5, 8, 0, 0, 13, 0),
(8, 'uniform winter', 'unisex', 'Có một cô bé bán không bán được dim, cô bèn làm người mẫu ảnh cho Gucchi winter', 600.7, 590.6, 65, 1.6, 10, 0, 2, 0, 0, 12, 0),
(9, 'uniform limited', 'unisex', 'Bản mô phỏng của Gazebo trên nền áo tơ tầm thượng hạng', 901.2, 590.6, 6, 1.6, 5, 0, 3, 0, 0, 8, 0),
(10, 'uniform trending', 'unisex', 'Mang hình ảnh nón lá Việt Nam', 102.3, 64, 6, 4.3, 0, 0, 0, 1, 2, 3, 0),
(11, 'sailor 2018', 'Tokio Cosplay', 'Hai - không - một - tám', 600.7, 503.2, 107, 1.7, 3, 0, 1, 0, 0, 4, 0),
(12, 'sailor 2019', 'Tokio Cosplay', 'Năm tân hợi, áo tân hỉ', 700, 650.6, 152, 4.9, 1, 0, 0, 0, 8, 9, 0),
(13, 'sailor 2020', 'Tokio Cosplay', 'chất liệu polyme', 823.6, 718.9, 25, 4.6, 0, 0, 2, 0, 5, 7, 0),
(14, 'sailor 2021', 'Tokio Cosplay', 'Thời trang tái chế', 999, 900.8, 155, 1.7, 2, 0, 1, 0, 0, 3, 0),
(15, 'sailor spring', 'Tokio Cosplay', 'lấy cảm hứng từ hoa anh đạo Nhật Bản', 303.5, 154.3, 186, 1.1, 5, 0, 3, 0, 0, 8, 0),
(16, 'sailor summer', 'Tokio Cosplay', 'Lấy ý tưởng từ bảo vệ môi trường biển', 60.3, 18.9, 109, 2.8, 0, 1, 3, 0, 0, 4, 0),
(17, 'sailor fall', 'Tokio Cosplay', 'Làng nước mùa thu, trong trẻo', 303.5, 236.5, 200, 1.6, 8, 4, 0, 0, 0, 12, 0),
(18, 'sailor winter', 'Tokio Cosplay', 'Noel - santa', 700, 678.8, 149, 3, 0, 0, 10, 0, 0, 10, 0),
(19, 'sailor limited', 'Tokio Cosplay', 'Lấy chất liệu từ vàng thỏi để trang trí', 901.2, 756.2, 8, 3.1, 0, 0, 10, 1, 0, 11, 0),
(20, 'sailor trending', 'Tokio Cosplay', 'vina house', 100, 68.7, 69, 1.6, 5, 2, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shirt_tshirt_vest`
--

CREATE TABLE `shirt_tshirt_vest` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `detail` varchar(300) DEFAULT 'Đây là sự kết tinh ý tưởng thiết kế',
  `cost_origin` float DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `rating` float DEFAULT 1,
  `1star` int(11) DEFAULT 0,
  `2star` int(11) DEFAULT 0,
  `3star` int(11) DEFAULT 0,
  `4star` int(11) DEFAULT 0,
  `5star` int(11) DEFAULT 0,
  `num_review` int(11) DEFAULT 0,
  `wishList` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shirt_tshirt_vest`
--

INSERT INTO `shirt_tshirt_vest` (`id`, `name`, `brand`, `detail`, `cost_origin`, `cost`, `quantity`, `rating`, `1star`, `2star`, `3star`, `4star`, `5star`, `num_review`, `wishList`) VALUES
(1, 'VinVest 2018', 'VinGroup', 'Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018', 303.5, 202.1, 13, 4.4, 0, 0, 0, 2, 1, 3, 0),
(2, 'VinVest 2019', 'VinGroup', 'Thời gian và xu thế, ấn tượng và lịch lãm', 700, 688.1, 115, 1.2, 3, 1, 0, 0, 0, 4, 0),
(3, 'VinVest 2020', 'VinGroup', 'Mặc áo Gucchi đánh bại Co-viii', 420, 390.2, 4, 1.2, 0, 0, 0, 5, 0, 5, 0),
(4, 'VinVest 2021', 'VinGroup', 'Hai - không - hai - một', 901.2, 880.9, 184, 4.9, 0, 0, 0, 1, 5, 6, 0),
(5, 'VinVest spring', 'VinGroup', 'Xuân đang tới, nghĩa là xuân đang qua,\r\nXuân còn non, nghĩa là xuân sẽ già,\r\nMà xuân hết, nghĩa là tôi cũng mất. (Xuân Diệu)', 999, 584, 37, 3, 1, 0, 6, 0, 1, 8, 0),
(6, 'VinVest summer', 'VinGroup', 'summer time with high fashion bikini', 700, 603.4, 124, 3.9, 0, 0, 2, 5, 0, 7, 0),
(7, 'VinVest fall', 'VinGroup', 'Sáng sớm mùa hè\r\nTrời thật mát mẻ\r\nGió thổi nhè nhẹ\r\nNắng xuống đầy sân.', 300, 282, 179, 2.6, 0, 5, 8, 0, 0, 13, 0),
(8, 'VinVest winter', 'VinGroup', 'Có một cô bé bán không bán được dim, cô bèn làm người mẫu ảnh cho Gucchi winter', 600.7, 590.6, 65, 1.6, 10, 0, 2, 0, 0, 12, 0),
(9, 'VinVest limited', 'VinGroup', 'Bản mô phỏng của Gazebo trên nền áo tơ tầm thượng hạng', 901.2, 590.6, 6, 1.6, 5, 0, 3, 0, 0, 8, 0),
(10, 'VinVest trending', 'VinGroup', 'Mang hình ảnh nón lá Việt Nam', 102.3, 64, 6, 4.3, 0, 0, 0, 1, 2, 3, 0),
(11, 'Lacoste 2018', 'Lacoste', 'Hai - không - một - tám', 600.7, 503.2, 107, 1.7, 3, 0, 1, 0, 0, 4, 0),
(12, 'Lacoste 2019', 'Lacoste', 'Năm tân hợi, áo tân hỉ', 700, 650.6, 152, 4.9, 1, 0, 0, 0, 8, 9, 0),
(13, 'Lacoste 2020', 'Lacoste', 'chất liệu polyme', 823.6, 718.9, 25, 4.6, 0, 0, 2, 0, 5, 7, 0),
(14, 'Lacoste 2021', 'Lacoste', 'Thời trang tái chế', 999, 900.8, 155, 1.7, 2, 0, 1, 0, 0, 3, 0),
(15, 'Lacoste spring', 'Lacoste', 'lấy cảm hứng từ hoa anh đạo Nhật Bản', 303.5, 154.3, 186, 1.1, 5, 0, 3, 0, 0, 8, 0),
(16, 'Lacoste summer', 'Lacoste', 'Lấy ý tưởng từ bảo vệ môi trường biển', 60.3, 18.9, 109, 2.8, 0, 1, 3, 0, 0, 4, 0),
(17, 'Lacoste fall', 'Lacoste', 'Làng nước mùa thu, trong trẻo', 303.5, 236.5, 200, 1.6, 8, 4, 0, 0, 0, 12, 0),
(18, 'Lacoste winter', 'Lacoste', 'Noel - santa', 700, 678.8, 149, 3, 0, 0, 10, 0, 0, 10, 0),
(19, 'Lacoste limited', 'Lacoste', 'Lấy chất liệu từ vàng thỏi để trang trí', 901.2, 756.2, 8, 3.1, 0, 0, 10, 1, 0, 11, 0),
(20, 'Lacoste trending', 'Lacoste', 'vina house', 100, 68.7, 69, 1.6, 5, 2, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shoes_sandals_slippers`
--

CREATE TABLE `shoes_sandals_slippers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `detail` varchar(300) DEFAULT 'Đây là sự kết tinh ý tưởng thiết kế',
  `cost_origin` float DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `rating` float DEFAULT 1,
  `1star` int(11) DEFAULT 0,
  `2star` int(11) DEFAULT 0,
  `3star` int(11) DEFAULT 0,
  `4star` int(11) DEFAULT 0,
  `5star` int(11) DEFAULT 0,
  `num_review` int(11) DEFAULT 0,
  `wishList` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes_sandals_slippers`
--

INSERT INTO `shoes_sandals_slippers` (`id`, `name`, `brand`, `detail`, `cost_origin`, `cost`, `quantity`, `rating`, `1star`, `2star`, `3star`, `4star`, `5star`, `num_review`, `wishList`) VALUES
(1, 'bitis 2018', 'British Council', 'Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018', 303.5, 202.1, 13, 4.4, 0, 0, 0, 2, 1, 3, 0),
(2, 'bitis 2019', 'British Council', 'Thời gian và xu thế, ấn tượng và lịch lãm', 700, 688.1, 115, 1.2, 3, 1, 0, 0, 0, 4, 0),
(3, 'bitis 2020', 'British Council', 'Mặc áo Gucchi đánh bại Co-viii', 420, 390.2, 4, 1.2, 0, 0, 0, 5, 0, 5, 0),
(4, 'bitis 2021', 'British Council', 'Hai - không - hai - một', 901.2, 880.9, 184, 4.9, 0, 0, 0, 1, 5, 6, 0),
(5, 'bitis spring', 'British Council', 'Xuân đang tới, nghĩa là xuân đang qua,\r\nXuân còn non, nghĩa là xuân sẽ già,\r\nMà xuân hết, nghĩa là tôi cũng mất. (Xuân Diệu)', 999, 584, 37, 3, 1, 0, 6, 0, 1, 8, 0),
(6, 'bitis summer', 'British Council', 'summer time with high fashion bikini', 700, 603.4, 124, 3.9, 0, 0, 2, 5, 0, 7, 0),
(7, 'bitis fall', 'British Council', 'Sáng sớm mùa hè\r\nTrời thật mát mẻ\r\nGió thổi nhè nhẹ\r\nNắng xuống đầy sân.', 300, 282, 179, 2.6, 0, 5, 8, 0, 0, 13, 0),
(8, 'bitis winter', 'British Council', 'Có một cô bé bán không bán được dim, cô bèn làm người mẫu ảnh cho Gucchi winter', 600.7, 590.6, 65, 1.6, 10, 0, 2, 0, 0, 12, 0),
(9, 'bitis limited', 'British Council', 'Bản mô phỏng của Gazebo trên nền áo tơ tầm thượng hạng', 901.2, 590.6, 6, 1.6, 5, 0, 3, 0, 0, 8, 0),
(10, 'bitis trending', 'British Council', 'Mang hình ảnh nón lá Việt Nam', 102.3, 64, 6, 4.3, 0, 0, 0, 1, 2, 3, 0),
(11, 'DepLao 2018', 'DepLao', 'Hai - không - một - tám', 600.7, 503.2, 107, 1.7, 3, 0, 1, 0, 0, 4, 0),
(12, 'DepLao 2019', 'DepLao', 'Năm tân hợi, áo tân hỉ', 700, 650.6, 152, 4.9, 1, 0, 0, 0, 8, 9, 0),
(13, 'DepLao 2020', 'DepLao', 'chất liệu polyme', 823.6, 718.9, 25, 4.6, 0, 0, 2, 0, 5, 7, 0),
(14, 'DepLao 2021', 'DepLao', 'Thời trang tái chế', 999, 900.8, 155, 1.7, 2, 0, 1, 0, 0, 3, 0),
(15, 'DepLao spring', 'DepLao', 'lấy cảm hứng từ hoa anh đạo Nhật Bản', 303.5, 154.3, 186, 1.1, 5, 0, 3, 0, 0, 8, 0),
(16, 'DepLao summer', 'DepLao', 'Lấy ý tưởng từ bảo vệ môi trường biển', 60.3, 18.9, 109, 2.8, 0, 1, 3, 0, 0, 4, 0),
(17, 'DepLao fall', 'DepLao', 'Làng nước mùa thu, trong trẻo', 303.5, 236.5, 200, 1.6, 8, 4, 0, 0, 0, 12, 0),
(18, 'DepLao winter', 'DepLao', 'Noel - santa', 700, 678.8, 149, 3, 0, 0, 10, 0, 0, 10, 0),
(19, 'DepLao limited', 'DepLao', 'Lấy chất liệu từ vàng thỏi để trang trí', 901.2, 756.2, 8, 3.1, 0, 0, 10, 1, 0, 11, 0),
(20, 'DepLao trending', 'DepLao', 'vina house', 100, 68.7, 69, 1.6, 5, 2, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shoes_shocks`
--

CREATE TABLE `shoes_shocks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `detail` varchar(300) DEFAULT 'Đây là sự kết tinh ý tưởng thiết kế',
  `cost_origin` float DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `rating` float DEFAULT 1,
  `1star` int(11) DEFAULT 0,
  `2star` int(11) DEFAULT 0,
  `3star` int(11) DEFAULT 0,
  `4star` int(11) DEFAULT 0,
  `5star` int(11) DEFAULT 0,
  `num_review` int(11) DEFAULT 0,
  `wishList` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes_shocks`
--

INSERT INTO `shoes_shocks` (`id`, `name`, `brand`, `detail`, `cost_origin`, `cost`, `quantity`, `rating`, `1star`, `2star`, `3star`, `4star`, `5star`, `num_review`, `wishList`) VALUES
(1, 'Addidas 2018', 'Addidas', 'Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018', 303.5, 202.1, 13, 4.4, 0, 0, 0, 2, 1, 3, 0),
(2, 'Addidas 2019', 'Addidas', 'Thời gian và xu thế, ấn tượng và lịch lãm', 700, 688.1, 115, 1.2, 3, 1, 0, 0, 0, 4, 0),
(3, 'Addidas 2020', 'Addidas', 'Mặc áo Gucchi đánh bại Co-viii', 420, 390.2, 4, 1.2, 0, 0, 0, 5, 0, 5, 0),
(4, 'Addidas 2021', 'Addidas', 'Hai - không - hai - một', 901.2, 880.9, 184, 4.9, 0, 0, 0, 1, 5, 6, 0),
(5, 'Addidas spring', 'Addidas', 'Xuân đang tới, nghĩa là xuân đang qua,\r\nXuân còn non, nghĩa là xuân sẽ già,\r\nMà xuân hết, nghĩa là tôi cũng mất. (Xuân Diệu)', 999, 584, 37, 3, 1, 0, 6, 0, 1, 8, 0),
(6, 'Addidas summer', 'Addidas', 'summer time with high fashion bikini', 700, 603.4, 124, 3.9, 0, 0, 2, 5, 0, 7, 0),
(7, 'Addidas fall', 'Addidas', 'Sáng sớm mùa hè\r\nTrời thật mát mẻ\r\nGió thổi nhè nhẹ\r\nNắng xuống đầy sân.', 300, 282, 179, 2.6, 0, 5, 8, 0, 0, 13, 0),
(8, 'Addidas winter', 'Addidas', 'Có một cô bé bán không bán được dim, cô bèn làm người mẫu ảnh cho Gucchi winter', 600.7, 590.6, 65, 1.6, 10, 0, 2, 0, 0, 12, 0),
(9, 'Addidas limited', 'Addidas', 'Bản mô phỏng của Gazebo trên nền áo tơ tầm thượng hạng', 901.2, 590.6, 6, 1.6, 5, 0, 3, 0, 0, 8, 0),
(10, 'Addidas trending', 'Addidas', 'Mang hình ảnh nón lá Việt Nam', 102.3, 64, 6, 4.3, 0, 0, 0, 1, 2, 3, 0),
(11, 'Sneaker 2018', 'Sneaker', 'Hai - không - một - tám', 600.7, 503.2, 107, 1.7, 3, 0, 1, 0, 0, 4, 0),
(12, 'Sneaker 2019', 'Sneaker', 'Năm tân hợi, áo tân hỉ', 700, 650.6, 152, 4.9, 1, 0, 0, 0, 8, 9, 0),
(13, 'Sneaker 2020', 'Sneaker', 'chất liệu polyme', 823.6, 718.9, 25, 4.6, 0, 0, 2, 0, 5, 7, 0),
(14, 'Sneaker 2021', 'Sneaker', 'Thời trang tái chế', 999, 900.8, 155, 1.7, 2, 0, 1, 0, 0, 3, 0),
(15, 'Sneaker spring', 'Sneaker', 'lấy cảm hứng từ hoa anh đạo Nhật Bản', 303.5, 154.3, 186, 1.1, 5, 0, 3, 0, 0, 8, 0),
(16, 'Sneaker summer', 'Sneaker', 'Lấy ý tưởng từ bảo vệ môi trường biển', 60.3, 18.9, 109, 2.8, 0, 1, 3, 0, 0, 4, 0),
(17, 'Sneaker fall', 'Sneaker', 'Làng nước mùa thu, trong trẻo', 303.5, 236.5, 200, 1.6, 8, 4, 0, 0, 0, 12, 0),
(18, 'Sneaker winter', 'Sneaker', 'Noel - santa', 700, 678.8, 149, 3, 0, 0, 10, 0, 0, 10, 0),
(19, 'Sneaker limited', 'Sneaker', 'Lấy chất liệu từ vàng thỏi để trang trí', 901.2, 756.2, 8, 3.1, 0, 0, 10, 1, 0, 11, 0),
(20, 'Sneaker trending', 'Sneaker', 'vina house', 100, 68.7, 69, 1.6, 5, 2, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shoes_trainers`
--

CREATE TABLE `shoes_trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `detail` varchar(300) DEFAULT 'Đây là sự kết tinh ý tưởng thiết kế',
  `cost_origin` float DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `rating` float DEFAULT 1,
  `1star` int(11) DEFAULT 0,
  `2star` int(11) DEFAULT 0,
  `3star` int(11) DEFAULT 0,
  `4star` int(11) DEFAULT 0,
  `5star` int(11) DEFAULT 0,
  `num_review` int(11) DEFAULT 0,
  `wishList` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes_trainers`
--

INSERT INTO `shoes_trainers` (`id`, `name`, `brand`, `detail`, `cost_origin`, `cost`, `quantity`, `rating`, `1star`, `2star`, `3star`, `4star`, `5star`, `num_review`, `wishList`) VALUES
(1, 'Addidas 2018', 'Addidas', 'Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018', 303.5, 202.1, 13, 4.4, 0, 0, 0, 2, 1, 3, 0),
(2, 'Addidas 2019', 'Addidas', 'Thời gian và xu thế, ấn tượng và lịch lãm', 700, 688.1, 115, 1.2, 3, 1, 0, 0, 0, 4, 0),
(3, 'Addidas 2020', 'Addidas', 'Mặc áo Gucchi đánh bại Co-viii', 420, 390.2, 4, 1.2, 0, 0, 0, 5, 0, 5, 0),
(4, 'Addidas 2021', 'Addidas', 'Hai - không - hai - một', 901.2, 880.9, 184, 4.9, 0, 0, 0, 1, 5, 6, 0),
(5, 'Addidas spring', 'Addidas', 'Xuân đang tới, nghĩa là xuân đang qua,\r\nXuân còn non, nghĩa là xuân sẽ già,\r\nMà xuân hết, nghĩa là tôi cũng mất. (Xuân Diệu)', 999, 584, 37, 3, 1, 0, 6, 0, 1, 8, 0),
(6, 'Addidas summer', 'Addidas', 'summer time with high fashion bikini', 700, 603.4, 124, 3.9, 0, 0, 2, 5, 0, 7, 0),
(7, 'Addidas fall', 'Addidas', 'Sáng sớm mùa hè\r\nTrời thật mát mẻ\r\nGió thổi nhè nhẹ\r\nNắng xuống đầy sân.', 300, 282, 179, 2.6, 0, 5, 8, 0, 0, 13, 0),
(8, 'Addidas winter', 'Addidas', 'Có một cô bé bán không bán được dim, cô bèn làm người mẫu ảnh cho Gucchi winter', 600.7, 590.6, 65, 1.6, 10, 0, 2, 0, 0, 12, 0),
(9, 'Addidas limited', 'Addidas', 'Bản mô phỏng của Gazebo trên nền áo tơ tầm thượng hạng', 901.2, 590.6, 6, 1.6, 5, 0, 3, 0, 0, 8, 0),
(10, 'Addidas trending', 'Addidas', 'Mang hình ảnh nón lá Việt Nam', 102.3, 64, 6, 4.3, 0, 0, 0, 1, 2, 3, 0),
(11, 'Nike 2018', 'Nike', 'Hai - không - một - tám', 600.7, 503.2, 107, 1.7, 3, 0, 1, 0, 0, 4, 0),
(12, 'Nike 2019', 'Nike', 'Năm tân hợi, áo tân hỉ', 700, 650.6, 152, 4.9, 1, 0, 0, 0, 8, 9, 0),
(13, 'Nike 2020', 'Nike', 'chất liệu polyme', 823.6, 718.9, 25, 4.6, 0, 0, 2, 0, 5, 7, 0),
(14, 'Nike 2021', 'Nike', 'Thời trang tái chế', 999, 900.8, 155, 1.7, 2, 0, 1, 0, 0, 3, 0),
(15, 'Nike spring', 'Nike', 'lấy cảm hứng từ hoa anh đạo Nhật Bản', 303.5, 154.3, 186, 1.1, 5, 0, 3, 0, 0, 8, 0),
(16, 'Nike summer', 'Nike', 'Lấy ý tưởng từ bảo vệ môi trường biển', 60.3, 18.9, 109, 2.8, 0, 1, 3, 0, 0, 4, 0),
(17, 'Nike fall', 'Nike', 'Làng nước mùa thu, trong trẻo', 303.5, 236.5, 200, 1.6, 8, 4, 0, 0, 0, 12, 0),
(18, 'Nike winter', 'Nike', 'Noel - santa', 700, 678.8, 149, 3, 0, 0, 10, 0, 0, 10, 0),
(19, 'Nike limited', 'Nike', 'Lấy chất liệu từ vàng thỏi để trang trí', 901.2, 756.2, 8, 3.1, 0, 0, 10, 1, 0, 11, 0),
(20, 'Nike trending', 'Nike', 'vina house', 100, 68.7, 69, 1.6, 5, 2, 0, 0, 0, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_bag`
--

CREATE TABLE `shopping_bag` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `clothID` int(11) NOT NULL,
  `category` varchar(150) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping_bag`
--

INSERT INTO `shopping_bag` (`id`, `email`, `clothID`, `category`, `color`, `size`, `quantity`) VALUES
(1, 'tu.user@hcmut.edu.vn', 2, 'pants_jog', 'black', 'M', 2),
(2, 'tu.user@hcmut.edu.vn', 9, 'shirt_shirt', 'white', 'XL', 1),
(3, 'tu.user@hcmut.edu.vn', 15, 'shirt_polo', 'black', 'L', 2),
(4, 'nhan.user@hcmut.edu.vn', 8, 'access_glass', 'white', 'XL', 10),
(5, 'nhan.user@hcmut.edu.vn', 3, 'access_glass', 'black', 'M', 5),
(6, 'nhan.user@hcmut.edu.vn', 12, 'access_bag', 'black', 'XL', 2),
(7, 'nhan.user@hcmut.edu.vn', 4, 'shoes_trainers', 'black', 'S', 3);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `clothID` int(11) NOT NULL,
  `category` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `email`, `clothID`, `category`) VALUES
(1, 'tu.user@hcmut.edu.vn', 2, 'pants_jeans'),
(2, 'tu.user@hcmut.edu.vn', 3, 'shirt_tshirt_vest'),
(3, 'tu.user@hcmut.edu.vn', 10, 'shoes_trainers'),
(4, 'tu.user@hcmut.edu.vn', 4, 'shirt_polo'),
(5, 'tu.user@hcmut.edu.vn', 8, 'shirt_polo'),
(6, 'nhan.user@hcmut.edu.vn', 12, 'pants_jeans'),
(7, 'nhan.user@hcmut.edu.vn', 2, 'shoes_shocks'),
(8, 'nhan.user@hcmut.edu.vn', 1, 'access_caps'),
(9, 'nhan.user@hcmut.edu.vn', 8, 'access_glass'),
(10, 'nhan.user@hcmut.edu.vn', 6, 'access_bag'),
(11, 'nhan.user@hcmut.edu.vn', 2, 'pants_jog'),
(12, 'cong.user@hcmut.edu.vn', 4, 'pants_jeans'),
(13, 'cong.user@hcmut.edu.vn', 15, 'shoes_sandals_slippers'),
(14, 'cong.user@hcmut.edu.vn', 17, 'shoes_trainers'),
(15, 'cong.user@hcmut.edu.vn', 1, 'shirt_tshirt_vest'),
(16, 'trong.user@hcmut.edu.vn', 13, 'pants_jeans'),
(17, 'trong.user@hcmut.edu.vn', 16, 'shoes_sandals_slippers'),
(18, 'trong.user@hcmut.edu.vn', 4, 'access_caps'),
(19, 'trong.user@hcmut.edu.vn', 19, 'shoes_shocks'),
(20, 'trong.user@hcmut.edu.vn', 18, 'shirt_tshirt_vest');

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
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `shopping_bag`
--
ALTER TABLE `shopping_bag`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `access_caps`
--
ALTER TABLE `access_caps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `access_glass`
--
ALTER TABLE `access_glass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pants_jeans`
--
ALTER TABLE `pants_jeans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pants_jog`
--
ALTER TABLE `pants_jog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pants_lounges`
--
ALTER TABLE `pants_lounges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shirt_polo`
--
ALTER TABLE `shirt_polo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shirt_shirt`
--
ALTER TABLE `shirt_shirt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shirt_tshirt_vest`
--
ALTER TABLE `shirt_tshirt_vest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shoes_sandals_slippers`
--
ALTER TABLE `shoes_sandals_slippers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shoes_shocks`
--
ALTER TABLE `shoes_shocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shoes_trainers`
--
ALTER TABLE `shoes_trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shopping_bag`
--
ALTER TABLE `shopping_bag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
