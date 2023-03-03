-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 11:19 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secondhand`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `group_id` varchar(25) NOT NULL,
  `id` char(40) NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `original_price` int(255) NOT NULL,
  `secondhand_price` int(255) NOT NULL,
  `details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`group_id`, `id`, `imagename`, `book_name`, `original_price`, `secondhand_price`, `details`) VALUES
('home_page', '4552e99e-c949-11ec-999f-0ae0afb6075c', '1 (56).png', 'gdg', 4543, 545, '[value-7]'),
('class_twelve', '72e7ef3c-c949-11ec-999f-0ae0afb6075c', '1 (55).png', 'queen3', 545, 445, '[value-7]'),
('class_ten', '908a7b86-c95a-11ec-999f-0ae0afb6075c', '1 (37).png', 'queen209', 89, 8, '[value-7]'),
('home_page', 'c713462e-c949-11ec-999f-0ae0afb6075c', '1 (95).png', 'queen20', 4575, 57, '[value-7]');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `customer_email` varchar(100) NOT NULL,
  `id` varchar(255) NOT NULL,
  `orderd_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`customer_email`, `id`, `orderd_number`) VALUES
('ssm.299mourya@gmail.com', ' 4552e99e-c949-11ec-999f-0ae0afb6075c', 1),
('ssm.299mourya@gmail.com', ' 908a7b86-c95a-11ec-999f-0ae0afb6075c', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registrationform`
--

CREATE TABLE `registrationform` (
  `id` int(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `cu_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrationform`
--

INSERT INTO `registrationform` (`id`, `first_name`, `last_name`, `email_id`, `password`, `phone_no`, `cu_address`) VALUES
(45, 'shailesh', 'king', 'king@gmail.com', 'dksdsdkfs', '0009945366', ''),
(46, 'shailesh', 'chan', 'dfsd@gmail.com', 'sdfdfsd', '565464646', ''),
(47, '', '', '', '', '', ''),
(48, 'SHAILESH', 'YADAV', 'ssm.299mourya@gmail.com', '12345', '9987075096', 'har har mahadev chawl santosh bhuvan nallasopara east');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `email`, `password`) VALUES
(13, 'shailesh', 'shaileshmouryaat2000@gmail.com', 'gaara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderd_number` (`orderd_number`);

--
-- Indexes for table `registrationform`
--
ALTER TABLE `registrationform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `orderd_number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrationform`
--
ALTER TABLE `registrationform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
