-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 05:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `email`, `password`) VALUES
(13, 'shailesh', 'shaileshmouryaat2000@gmail.com', 'gaara');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_email` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `original_price` varchar(20) NOT NULL,
  `secondhand_price` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_email`, `product_id`, `product_name`, `original_price`, `secondhand_price`, `quantity`) VALUES
('shaileshmouryaat2000@gmail.com', ' f0e7b7e1-ba31-11ed-8308-510112577d6e', ' java (surbhi kakar)', ' 500', ' 250', 1),
('shaileshmouryaat2000@gmail.com', ' 232d9ed6-ba2d-11ed-8308-510112577d6e', ' Hindi 10th', ' 350', ' 170', 1),
('shaileshmouryaat2000@gmail.com', ' f0e5c7ba-ba2e-11ed-8308-510112577d6e', ' maths 1 10th', ' 200', ' 100', 1),
('shaileshmouryaat2000@gmail.com', ' 43e43d24-ba2f-11ed-8308-510112577d6e', ' political science 12th', ' 300', ' 160', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`group_id`, `id`, `imagename`, `book_name`, `original_price`, `secondhand_price`, `details`) VALUES
('home_page', '19835d30-ba2e-11ed-8308-510112577d6e', 'tenth_marathi.jpg', 'Marathi 10th', 300, 150, '[value-7]'),
('home_page', '232d9ed6-ba2d-11ed-8308-510112577d6e', 'tenth_hindi.jpg', 'Hindi 10th', 350, 170, '[value-7]'),
('home_page', '2ea6e90c-a6a8-11ed-8a0e-0ae0afb6075c', '12th_physics.jpg', 'Physics', 225, 100, '[value-7]'),
('home_page', '39c91711-ba2d-11ed-8308-510112577d6e', 'ninth_geography.jpg', 'Geography 9th', 300, 150, '[value-7]'),
('home_page', '43e43d24-ba2f-11ed-8308-510112577d6e', '12th_political_science.jpg', 'political science 12th', 300, 160, '[value-7]'),
('home_page', '4950d479-ba32-11ed-8308-510112577d6e', 'The-Practical-Guide-to-Become-a-Hacker(jim kou).jpg', 'Hacker(jim kou)', 500, 200, '[value-7]'),
('home_page', '694186d9-ba2f-11ed-8308-510112577d6e', '12th_math1(art&science).jpg', 'math1(art & science) 12th', 400, 200, '[value-7]'),
('home_page', '78a4f8a5-ba2d-11ed-8308-510112577d6e', 'ninth_english.jpg', 'English 9th', 300, 150, '[value-7]'),
('class_twelve', '9200ffb6-ba2f-11ed-8308-510112577d6e', 'tenth_marathi.jpg', 'Marathi 10th', 200, 100, '[value-7]'),
('home_page', '96b3d4df-ba32-11ed-8308-510112577d6e', '12th_it.jpg', 'it 12th', 120, 60, '[value-7]'),
('home_page', '97e57571-ba2d-11ed-8308-510112577d6e', '12th_political_science.jpg', 'Political Science 12th', 400, 200, '[value-7]'),
('home_page', 'db8336e3-ba31-11ed-8308-510112577d6e', 'python(howard hayes).jpg', 'python(howard hayes)', 600, 300, '[value-7]'),
('home_page', 'f0e5c7ba-ba2e-11ed-8308-510112577d6e', 'tenth_math2.png', 'maths 1 10th', 200, 100, '[value-7]'),
('home_page', 'f0e7b7e1-ba31-11ed-8308-510112577d6e', 'java (surbhi kakar).jpg', 'java (surbhi kakar)', 500, 250, '[value-7]'),
('home_page', 'f6102250-ba2c-11ed-8308-510112577d6e', 'ninth_math1.jpg', 'Maths 1 9th', 500, 250, '[value-7]'),
('home_page', 'fb239c12-ba2d-11ed-8308-510112577d6e', '12th_physics.jpg', 'Physics 12th', 400, 200, '[value-7]');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `customer_email` varchar(100) NOT NULL,
  `id` varchar(255) NOT NULL,
  `orderd_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrationform`
--

INSERT INTO `registrationform` (`id`, `first_name`, `last_name`, `email_id`, `password`, `phone_no`, `cu_address`) VALUES
(45, 'shailesh', 'king', 'king@gmail.com', 'dksdsdkfs', '0009945366', ''),
(46, 'shailesh', 'chan', 'dfsd@gmail.com', 'sdfdfsd', '565464646', ''),
(48, 'SHAILESH', 'YADAV', 'ssm.299mourya@gmail.com', '12345', '9987075096', 'har har mahadev chawl santosh bhuvan nallasopara east'),
(49, 'zoro', 'senpai', 'shaileshmouryaat2000@gmail.com', 'gaara', '9987075096', ''),
(50, 'zoro', 'senpai', 'shaileshmouryaat2000@gmail.com', 'vxfgdfgdf', '9987075096', ''),
(51, 'zoro', 'senpai', 'shaileshmouryaat2000@gmail.com', 'fff434tfrrsyyyyyytg6767', '9987075096', ''),
(52, 'zorojjjjjjjjj', 'senpai', 'shaileshuryaat2000@gmail.com', '66666666666kkkkkkkkk', '9987075088', ''),
(53, 'shai', 'mou123', 'shaileshmouryagg12@gmail.com', '343423dfdfss53', '9987075096', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `orderd_number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrationform`
--
ALTER TABLE `registrationform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
