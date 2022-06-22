-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 06:47 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

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
(1, 's22 ultra', 'samsung', '22500.00', '4', 'phone', 's22 ultra12gb.jpg', 10, '1'),
(2, '\r\nInfinix Hot S3 (Sandstone Black, 32 GB)  (3 GB RAM)', 'Infinix', '8999.00', '3', 'phone', 'image-2.jpeg', 10, '1'),
(3, 'tablet s8', 'Samsung', '15000.00', '4', 'Laptop', 'image-3.jpeg', 10, '1'),
(4, 'Mac S14', 'Apple', '24000.00', '3', 'laptop', 'mac14.jpg', 10, '1'),
(5, 'Lg 42 inch ', 'Lg', '47000.00', '3', 'Television', 'N01.jpg', 10, '1'),
(6, 'Redmi wrist band', 'xioami', '2500.00', '3', 'smartwatch', 'redmiwatch.jpg', 10, '1'),
(7, 'Oppo wrist watch band', 'oppo', '2500.00', '2', 'smartwatch', 'oppob.jpg', 10, '1'),
(8, 'pova a2', 'Nokia', '5999.00', '1', 'phone', 'pova2.jpg', 10, '1'),
(9, 'OPPO F5 (Black, 64 GB)  (6 GB RAM)', 'OPPO', '19990.00', '6', 'phone', 'image-9.jpeg', 10, '1'),
(10, 'harman speaker', 'speaker', '2000.00', '3', 'speaker', 'harman.jpg', 10, '1'),
(12, 'Galaxy A0', 'Galaxy', '10999.00', '3', 'Phone', 'GA0.jpg', 10, '1'),
(14, 'xioami airdots', 'xioami', '3000.00', '4', 'earpods', 'xiamiairdots.jpg', 10, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
