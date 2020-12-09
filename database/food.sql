-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 05:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorderingsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `f_id` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `f_price` int(10) NOT NULL,
  `f_description` varchar(255) NOT NULL,
  `f_special` tinyint(1) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`f_id`, `f_name`, `f_price`, `f_description`, `f_special`, `cat_id`, `image`) VALUES
(1, 'Burger', 70, 'abc', 0, 1, 'img\\menu\\2\\1.jpg'),
(2, 'Samosa', 50, 'def', 0, 2, 'img\\menu\\2\\2.jpg'),
(3, 'Dosa', 90, 'abc', 1, 2, 'img\\menu\\2\\3.jpg'),
(4, 'Pizza', 100, 'abc', 0, 1, 'img\\menu\\2\\4.jpg'),
(5, 'Dal Chawal', 110, 'Dal and Rice', 1, 3, 'img\\menu\\2\\dalchawal.jpg'),
(6, 'Chole Bhature', 80, 'Chickpea', 1, 4, 'img\\menu\\2\\chole.jpg'),
(7, 'Gulab Jamun', 60, 'Gulab Jamun', 0, 5, 'img\\menu\\2\\gulabjamun.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`f_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
