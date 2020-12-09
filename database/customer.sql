-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 08:23 PM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(5) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_password` varchar(15) NOT NULL,
  `c_fname` varchar(10) NOT NULL,
  `c_lname` varchar(10) NOT NULL,
  `c_street` varchar(25) NOT NULL,
  `c_city` varchar(25) NOT NULL,
  `c_state` varchar(25) NOT NULL,
  `c_pincode` int(6) NOT NULL,
  `c_phone_number` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_email`, `c_password`, `c_fname`, `c_lname`, `c_street`, `c_city`, `c_state`, `c_pincode`, `c_phone_number`) VALUES
(1, '2018.bhavesh.lohana@ves.ac.in', 'bhavesh', 'Bhavesh', 'Lohana', 'Section-20, Ulhasnagar', 'Ulhasnagar', 'Maharashtra', 421002, 2147483647),
(2, 'bhaveshlohana1@gmail.com', 'bhavesh', 'Bhavesh', 'Lohana', 'Section-20, Ulhasnagar', 'Ulhasnagar', 'Maharashtra', 421002, 123456788),
(3, 'abc@gmail.com', '1234', 'Bhavesh', 'Lohana', 'Section-20, Ulhasnagar', 'Ulhasnagar', 'Maharashtra', 421002, 2147483647),
(4, 'abc@xyz.com', 'aditya', 'Aditya', 'Mohan', 'xyz', 'Chembur', 'Maharashtra', 0, 123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
