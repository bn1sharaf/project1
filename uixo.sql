-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 11:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uixo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contant`
--

CREATE TABLE `contant` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `massage` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contant`
--

INSERT INTO `contant` (`id`, `name`, `phone`, `email`, `massage`) VALUES
(54, 'ali', 118896933, 'ali@gmail.com', 'السلام عليمكم موقعكم رائع جداً'),
(103, '', 0, '', ''),
(104, '', 0, '', ''),
(105, '', 0, '', ''),
(106, '', 0, '', ''),
(107, '', 0, '', ''),
(108, '', 0, '', ''),
(109, '', 0, '', ''),
(110, '', 0, '', ''),
(111, '', 0, '', ''),
(112, '', 0, '', ''),
(113, '', 0, '', ''),
(114, '', 0, '', ''),
(115, '', 0, '', ''),
(116, '', 0, '', ''),
(117, '', 0, '', ''),
(118, '', 0, '', ''),
(119, '', 0, '', ''),
(120, '', 0, '', ''),
(121, '', 0, '', ''),
(122, '', 0, '', ''),
(123, '', 0, '', ''),
(124, '', 0, '', ''),
(125, '', 0, '', ''),
(126, '', 0, '', ''),
(127, '', 0, '', ''),
(128, '', 0, '', ''),
(129, '', 0, '', ''),
(130, '', 0, '', ''),
(131, '', 0, '', ''),
(132, '', 0, '', ''),
(133, '', 0, '', ''),
(134, '', 0, '', ''),
(135, '', 0, '', ''),
(136, '', 0, '', ''),
(137, '', 0, '', ''),
(138, '', 0, '', ''),
(139, '', 0, '', ''),
(140, '', 0, '', ''),
(141, '', 0, '', ''),
(142, '', 0, '', ''),
(143, '', 0, '', ''),
(144, '', 0, '', ''),
(145, '', 0, '', ''),
(146, '', 0, '', ''),
(147, '', 0, '', ''),
(148, '', 0, '', ''),
(149, '', 0, '', ''),
(150, '', 0, '', ''),
(151, '', 0, '', ''),
(152, '', 0, '', ''),
(153, '', 0, '', ''),
(154, '', 0, '', ''),
(155, '', 0, '', ''),
(156, '', 0, '', ''),
(157, '', 0, '', ''),
(158, '', 0, '', ''),
(159, '', 0, '', ''),
(160, '', 0, '', ''),
(161, '', 0, '', ''),
(162, '', 0, '', ''),
(163, '', 0, '', ''),
(164, '', 0, '', ''),
(165, '', 0, '', ''),
(166, '', 0, '', ''),
(167, '', 0, '', ''),
(168, '', 0, '', ''),
(169, '', 0, '', ''),
(170, '', 0, '', ''),
(171, '', 0, '', ''),
(172, '', 0, '', ''),
(173, '', 0, '', ''),
(174, '', 0, '', ''),
(175, '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(13, 'dsa', 'asd', 'asd', 2500, 1, 2500, '2021-09-10 21:20:38', 'mohammed@gmail.com'),
(14, 'dsa', 'asd', 'asd', 2500, 1, 2500, '2021-09-10 21:42:49', 'mohammed@gmail.com'),
(15, 'dsa', 'asd', 'asd', 2500, 1, 2500, '2021-09-10 21:44:46', 'mohammed@gmail.com'),
(16, 'dsa', 'asd', 'asd', 2500, 1, 2500, '2021-09-10 21:48:37', 'mohammed@gmail.com'),
(17, 'dsa', 'asd', 'asd', 2500, 1, 2500, '2021-09-10 21:49:07', 'mohammed@gmail.com'),
(18, 'dsa', 'asd', 'asd', 2500, 1, 2500, '2021-09-10 22:22:57', 'mohammed@gmail.com'),
(19, 'dsa', 'asd', 'asd', 2500, 1, 2500, '2021-09-10 22:23:11', 'mohammed@gmail.com'),
(20, 'BOLT1', 'sport watch', 'With a clean vamp, tonal stitch details throughout, and a unique formstripe finish, the all new sports shoes fits the needs of multiple running consumers by offering an athletic and a lifestyle look.', 5000, 1, 5000, '2021-09-14 22:52:12', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, '1', 'Man Fashions', 'With a clean vamp, tonal stitch details throughout, and a unique formstripe finish, the all new sports shoes fits the needs of multiple running consumers by offering an athletic and a lifestyle look.', 'm-1', 24, '300.00'),
(2, '2', 'Man Fashions', 'asd', 'm-2', 32, '300.00'),
(3, '3', 'Man Fashions', 'asd', 'm-3', 28, '250.00'),
(4, '4', 'Man Fashions', 'germani', 'm-4', 20, '200.00');

-- --------------------------------------------------------

--
-- Table structure for table `products1`
--

CREATE TABLE `products1` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products1`
--

INSERT INTO `products1` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, '1', 'Woman Fashions', 'With a clean vamp, tonal stitch details throughout, and a unique formstripe finish, the all new sports shoes fits the needs of multiple running consumers by offering an athletic and a lifestyle look.', 'w-1', 24, '300.00'),
(2, '2', 'Woman Fashions', 'asd', 'w-2', 32, '300.00'),
(3, '3', 'Woman Fashions', 'asd', 'w-3', 28, '250.00'),
(4, '4', 'Woman Fashions', 'germani', 'w-4', 20, '200.00');

-- --------------------------------------------------------

--
-- Table structure for table `products2`
--

CREATE TABLE `products2` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products2`
--

INSERT INTO `products2` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, '1', 'Man watche', 'With a clean vamp, tonal stitch details throughout, and a unique formstripe finish, the all new sports shoes fits the needs of multiple running consumers by offering an athletic and a lifestyle look.', 'watch-1', 24, '300.00'),
(2, '2', 'Woman watche', 'asd', 'watch-2', 32, '300.00'),
(3, '3', 'Man watche', 'asd', 'watch-3', 28, '250.00'),
(4, '4', 'Woman watche', 'germani', 'watch-4', 20, '200.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(2, 'Admin', 'Webmaster', 'Internet', 'Electricity', 101010, 'admin@admin.com', 'admin', 'admin'),
(5, 'ahmed', 'azooz', 'ibb', 'ibb', 6, 'azooz@gmail.com', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contant`
--
ALTER TABLE `contant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `products1`
--
ALTER TABLE `products1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `products2`
--
ALTER TABLE `products2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contant`
--
ALTER TABLE `contant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products1`
--
ALTER TABLE `products1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products2`
--
ALTER TABLE `products2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
