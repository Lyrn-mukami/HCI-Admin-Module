-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 02:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hci`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(4) NOT NULL,
  `brand_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1101, 'Samsung'),
(1102, 'Oraimo'),
(1103, 'OPPO'),
(1104, 'Infinix'),
(1105, 'Nokia'),
(1106, 'Harman'),
(1107, 'Apple'),
(1108, 'LG'),
(1109, 'Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(4) NOT NULL,
  `category_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1001, 'Phone'),
(1002, 'Tablet'),
(1003, 'Speaker'),
(1004, 'Smart Watch'),
(1005, 'Laptop'),
(1006, 'Earpods'),
(1007, 'Television');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(120) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_ram` char(5) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_quantity` mediumint(5) NOT NULL,
  `product_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_brand`, `product_price`, `product_ram`, `product_category`, `product_image`, `product_quantity`, `product_status`) VALUES
(2, '\r\nInfinix Hot S3 (Sandstone Black, 32 GB)  (3 GB RAM)', 'Infinix', '8999.00', '3', 'phone', 'image-2.jpeg', 10, '1'),
(3, 'tablet s8', '', '15000.00', '4', '', '', 10, '1'),
(4, 'Mac S14', 'Apple', '24000.00', '3', 'laptop', 'mac14.jpg', 10, '1'),
(5, 'Lg 42 inch ', 'Lg', '47000.00', '3', 'Television', 'N01.jpg', 10, '1'),
(6, 'Redmi wrist band', 'xioami', '2500.00', '3', 'smartwatch', 'redmiwatch.jpg', 10, '1'),
(7, 'Oppo wrist watch band', 'oppo', '2500.00', '2', 'smartwatch', 'oppob.jpg', 10, '1'),
(8, 'pova a2', 'Nokia', '5999.00', '1', 'phone', 'pova2.jpg', 10, '1'),
(9, 'OPPO F5 (Black, 64 GB)  (6 GB RAM)', 'OPPO', '19990.00', '6', 'phone', 'image-9.jpeg', 10, '1'),
(10, 'harman speaker', 'speaker', '2000.00', '3', 'speaker', 'harman.jpg', 10, '1'),
(12, 'Galaxy A0', 'Galaxy', '10999.00', '3', 'Phone', 'GA0.jpg', 10, '1'),
(14, 'xioami airdots', 'xioami', '3000.00', '4', 'earpods', 'xiamiairdots.jpg', 10, '1'),
(15, 'Amber Serrano', 'Mollit vero molestia', '493.00', 'Conse', 'Officia quaerat nisi', '', 481, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1110;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
