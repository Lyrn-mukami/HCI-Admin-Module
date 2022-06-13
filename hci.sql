-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 06:49 PM
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
-- Table structure for table `item_order`
--

CREATE TABLE `item_order` (
  `item_order_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_order`
--

INSERT INTO `item_order` (`item_order_id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 1, 8, 1),
(2, 2, 14, 5),
(3, 3, 1, 4),
(4, 3, 6, 1),
(5, 4, 1, 2),
(6, 5, 4, 2),
(7, 6, 1, 4),
(8, 7, 1, 7),
(9, 8, 6, 4),
(10, 9, 1, 2),
(11, 10, 6, 1),
(12, 10, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `date` date DEFAULT curdate(),
  `time` time DEFAULT curtime(),
  `total_price` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `date`, `time`, `total_price`, `status`) VALUES
(1, '2022-05-14', '14:58:01', 5999, 'pending'),
(2, '2022-05-14', '15:15:52', 15000, 'pending'),
(3, '2022-05-14', '15:25:43', 92500, 'pending'),
(4, '2022-05-16', '21:45:49', 45000, 'pending'),
(5, '2022-05-18', '07:15:36', 48000, 'pending'),
(6, '2022-05-18', '16:04:33', 90000, 'pending'),
(7, '2022-05-18', '16:08:46', 157500, 'pending'),
(8, '2022-05-25', '13:17:27', 10000, 'pending'),
(9, '2022-05-25', '13:59:34', 45000, 'pending'),
(10, '2022-06-02', '09:20:22', 11499, 'pending');

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
(1, 's22 ultra', 'samsung', '22500.00', '4', 'phone', 's22 ultra12gb.jpg', 6, '1'),
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
-- Table structure for table `shippingdetails`
--

CREATE TABLE `shippingdetails` (
  `order_id` int(11) NOT NULL,
  `shippingDetails_id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postalCode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shippingdetails`
--

INSERT INTO `shippingdetails` (`order_id`, `shippingDetails_id`, `fullName`, `address`, `email`, `phoneNo`, `city`, `postalCode`) VALUES
(8, 1, 'Kendii', 'Membley', 'kendii@gmail.com', '0711225678', 'Nairobi', '10010'),
(9, 2, 'Kendii', '222', 'kendii@gmail.com', '0786765543', 'Nairobi', '0100'),
(9, 3, 'Kendii', '222', 'kendii@gmail.com', '0786765543', 'Nairobi', '0100');

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
  `role` varchar(6) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `email_address`, `user_name`, `user_password`, `role`) VALUES
(1, 'Cindy', 'Guii', 'hudson@gmail.com', 'nat', '124455', 'client'),
(2, 'n', 'nnm', 'ccv@gmail.com', 'hh', 'hhh', 'client'),
(3, 'b', 'b', 'b@gmail.com', 'client', 'qw', 'client'),
(7, 'Billy', 'Goat', 'billgt@gmail.com', 'BillyGoat', 'Billyboy', 'admin'),
(8, 'Millicent', 'Wambui', 'mbui@gmail.com', 'MillWam', 'Milly123', 'admin'),
(9, 'Harry', 'Harold', 'hhar@gmail.com', 'Harhar', 'Password123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_order`
--
ALTER TABLE `item_order`
  ADD PRIMARY KEY (`item_order_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shippingdetails`
--
ALTER TABLE `shippingdetails`
  ADD PRIMARY KEY (`shippingDetails_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_order`
--
ALTER TABLE `item_order`
  MODIFY `item_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shippingdetails`
--
ALTER TABLE `shippingdetails`
  MODIFY `shippingDetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_order`
--
ALTER TABLE `item_order`
  ADD CONSTRAINT `item_order_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `item_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `shippingdetails`
--
ALTER TABLE `shippingdetails`
  ADD CONSTRAINT `shippingdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
