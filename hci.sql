-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 07:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_address` varchar(25) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_password` varchar(25) NOT NULL,
  `role` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `email_address`, `user_name`, `user_password`, `role`) VALUES
(1, 'Cindy', 'Guii', 'hudson@gmail.com', 'nat', '124455', 'client'),
(2, 'n', 'nnm', 'ccv@gmail.com', 'hh', 'hhh', 'client'),
(3, 'b', 'b', 'b@gmail.com', 'client', 'qw', 'client'),
(7, 'Billy', 'Goat', 'billgt@gmail.com', 'BillyGoat', 'Billyboy', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
