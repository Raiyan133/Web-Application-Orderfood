-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2018 at 09:40 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ftucafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID_C` int(5) UNSIGNED ZEROFILL NOT NULL,
  `name_c` varchar(30) NOT NULL,
  `email_c` varchar(30) NOT NULL,
  `username_c` varchar(30) NOT NULL,
  `password_c` varchar(30) NOT NULL,
  `gender_c` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID_C`, `name_c`, `email_c`, `username_c`, `password_c`, `gender_c`) VALUES
(00025, 'Raiyan Japakeeya', 'Raiyan@gmail.com', 'raiyan', 'raiyan', 'female'),
(00026, 'E-badiyah Chesenic', 'ebadiyah@gmail.com', 'ebadiyah', '12345', 'female'),
(00027, 'Afifah Chedeng', 'afifah@gmail.com', 'Afifah', 'afifah', 'male'),
(00028, 'Hannan Malee', 'Hannan123@mail.com', 'Hannan', '123', 'female'),
(00029, 'Rutiya Nawea', 'Rutia@GGG.com', 'Ru', '123', 'female'),
(00030, 'Sabina Ngadam', 'salsabil@hello.com', 'sabi', '123', 'male'),
(00031, 'Hiyam Sasu', 'Sasu@susu.com', 'Hiyam', '123', 'female'),
(00032, 'Fatihah waleh', 'itim@oo.com', 'itimmm', '123', 'female'),
(00033, 'Sarifah Nongjik', 'Sareee@hot.com', 'serifa', '123', 'male'),
(00034, 'Anas taw', 'Anas@email.com', 'anas', '123', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `deleted`) VALUES
(1, 'Bingsu Milo', 55, 0),
(2, 'Bingsu Strawberry', 65, 0),
(3, 'Bingsu Mango', 65, 0),
(4, 'Bingsu Banana', 55, 0),
(5, 'Bingsu Double Choco', 65, 0),
(6, 'Bingsu Mixed Fruit', 70, 0),
(7, 'Bingsu Caramel Confl', 55, 0),
(8, 'Bingsu Coco Crunch', 55, 0),
(9, 'Bingsu Green Tea', 60, 0),
(10, 'Milo ', 20, 0),
(11, 'Strawberry', 30, 0),
(12, 'Mango', 25, 1),
(13, 'Banana', 20, 0),
(14, 'Chocolate', 25, 0),
(15, 'Ovaltine', 50, 0),
(16, 'White Malt', 25, 0),
(17, 'Ceramel Milk', 30, 0),
(18, 'Green Tea', 25, 0),
(19, 'Popcorn', 50, 0),
(20, 'Cheeseburger', 80, 0),
(21, 'Fries', 70, 0),
(22, 'Hotdog', 90, 0),
(23, 'Hotdog Camdo', 80, 0),
(24, 'Noodle', 50, 0),
(25, 'Cheese Nuggets', 85, 0),
(26, 'Pizza', 100, 0),
(27, 'Chicken Roll', 150, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderfood`
--

CREATE TABLE `orderfood` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qt` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `cus` varchar(30) NOT NULL,
  `numtable` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderfood`
--

INSERT INTO `orderfood` (`id`, `item_id`, `qt`, `price`, `cus`, `numtable`) VALUES
(94, 4, 2, 110, 'Hiyam', 2),
(95, 15, 1, 50, 'Hiyam', 2),
(96, 20, 3, 240, 'Hiyam', 2),
(97, 5, 1, 65, 'Hannan', 5),
(98, 19, 1, 50, 'Hannan', 5),
(99, 14, 2, 50, 'sabi', 7),
(100, 22, 3, 270, 'sabi', 7),
(101, 24, 1, 50, 'Hannan', 10),
(102, 25, 2, 170, 'Hannan', 10),
(103, 26, 1, 100, 'Hannan', 10),
(104, 2, 1, 65, 'raiyan', 4),
(105, 7, 1, 55, 'raiyan', 4),
(106, 9, 2, 120, 'raiyan', 4),
(107, 22, 4, 360, 'anas', 8),
(108, 13, 2, 40, 'anas', 5),
(109, 16, 1, 25, 'anas', 5),
(110, 19, 3, 150, 'anas', 5);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `username_s` varchar(30) NOT NULL,
  `password_s` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`username_s`, `password_s`) VALUES
('admin', 'admin'),
('afeefah', 'afeefah'),
('ebadiyah', 'ebadiyah'),
('raiyan', 'raiyan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID_C`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderfood`
--
ALTER TABLE `orderfood`
  ADD PRIMARY KEY (`id`),
  ADD KEY `it` (`item_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`username_s`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID_C` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orderfood`
--
ALTER TABLE `orderfood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderfood`
--
ALTER TABLE `orderfood`
  ADD CONSTRAINT `it` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
