-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 02:41 PM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'starter'),
(2, 'breakfast'),
(3, 'lunch'),
(4, 'dinner'),
(5, 'desserts');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(5) NOT NULL,
  `c_email` varchar(40) NOT NULL,
  `c_password` varchar(15) NOT NULL,
  `c_fname` varchar(10) NOT NULL,
  `c_lname` varchar(10) NOT NULL,
  `c_street` varchar(25) NOT NULL,
  `c_city` varchar(25) NOT NULL,
  `c_state` varchar(25) NOT NULL,
  `c_pincode` int(6) NOT NULL,
  `c_phone_number` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_email`, `c_password`, `c_fname`, `c_lname`, `c_street`, `c_city`, `c_state`, `c_pincode`, `c_phone_number`) VALUES
(1, '2018.bhavesh.lohana@ves.ac.in', 'bhave', 'Bhavesh', 'Lohana', 'Section-20', 'Ulhasnagar', 'Maharashtra', 421002, 9322048502),
(2, 'bhaveshlohana1@gmail.com', 'bhavesh', 'Bhavesh', 'Lohana', 'Section-20, Ulhasnagar', 'Ulhasnagar', 'Maharashtra', 421002, 123456788),
(3, '2018.mayank.motwani@ves.ac.in', 'mayank', 'Mayank', 'Motwani', 'Section-20, Ulhasnagar', 'Ulhasnagar', 'Maharashtra', 421002, 2147483647),
(4, '2018.aditya.mohan@ves.ac.in', 'aditya', 'Aditya', 'Mohan', 'xyz', 'Chembur', 'Maharashtra', 0, 123456789),
(5, 'bhaveshlohana11@gmail.com', '12345', 'Bhavesh', 'Lohana', '123', 'Ulhasnagar', 'Maharashtra', 421003, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `d_id` int(11) NOT NULL,
  `agent_name` enum('Ajay','Naresh','Vivek','Jayesh') NOT NULL,
  `agent_number` enum('9999999999','9898989898','1212121212','9797989899') NOT NULL,
  `o_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`d_id`, `agent_name`, `agent_number`, `o_id`) VALUES
(11, 'Vivek', '9898989898', 23),
(12, 'Vivek', '9999999999', 24),
(13, 'Ajay', '9898989898', 25),
(14, 'Naresh', '1212121212', 26);

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
(1, 'Burger', 70, 'Veg Burger and Fries', 0, 1, 'img\\menu\\2\\1.jpg'),
(2, 'Samosa', 50, 'Indian Samosa', 0, 2, 'img\\menu\\2\\2.jpg'),
(3, 'Dosa', 90, 'Dosa', 1, 2, 'img\\menu\\2\\3.jpg'),
(4, 'Pizza', 100, 'Italian Pizza', 0, 1, 'img\\menu\\2\\4.jpg'),
(5, 'Dal Chawal', 110, 'Dal and Rice', 1, 3, 'img\\menu\\2\\dalchawal.jpg'),
(6, 'Chole Bhature', 80, 'Chickpea', 0, 4, 'img\\menu\\2\\chole.jpg'),
(7, 'Gulab Jamun', 60, 'Gulab Jamun', 0, 5, 'img\\menu\\2\\gulabjamun.jpg'),
(8, 'Chocolate cake', 90, 'Cake', 1, 5, 'img\\menu\\2\\cm.jpg'),
(9, 'Cheese Pizza', 20, 'Cheese Pizza', 0, 1, 'img\\menu\\2\\5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(5) NOT NULL,
  `c_id` int(11) NOT NULL,
  `o_price` int(5) NOT NULL,
  `o_no_of_items` int(10) NOT NULL,
  `o_status` varchar(20) NOT NULL DEFAULT 'Undelivered',
  `o_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `o_address` varchar(255) NOT NULL,
  `o_special_notes` varchar(255) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `c_id`, `o_price`, `o_no_of_items`, `o_status`, `o_time`, `o_address`, `o_special_notes`) VALUES
(20, 1, 50, 1, 'Undelivered', '2020-12-09 11:43:02', 'Section-20   Ulhasnagar Maharashtra 421002', 'Yes'),
(33, 1, 320, 5, 'Undelivered', '2020-12-09 16:00:20', 'Section-20   Ulhasnagar Maharashtra 421002', ''),
(34, 4, 1470, 6, 'Undelivered', '2020-12-09 16:07:43', 'xyz   Chembur Maharashtra 0', ''),
(35, 1, 1450, 3, 'Undelivered', '2020-12-09 16:08:39', 'Section-20   Ulhasnagar Maharashtra 421002', ''),
(36, 7, 1050, 5, 'Undelivered', '2020-12-09 16:14:12', 's20   UNR Maharashtra 421003', ''),
(37, 7, 180, 1, 'Undelivered', '2020-12-09 16:16:13', 's20   UNR Maharashtra 421003', ''),
(38, 1, 1090, 4, 'Undelivered', '2020-12-09 16:45:28', 'Section-20   Ulhasnagar Maharashtra 421002', ''),
(39, 1, 1020, 4, 'Undelivered', '2020-12-09 16:47:17', 'Section-20   Ulhasnagar Maharashtra 421002', ''),
(40, 1, 550, 1, 'Undelivered', '2020-12-09 19:15:13', 'On plot, Section-20   Ulhasnagar Maharashtra 421002', 'As fast as possible.');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `od_id` int(11) NOT NULL,
  `o_id` int(10) NOT NULL,
  `f_id` int(10) NOT NULL,
  `f_quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`od_id`, `o_id`, `f_id`, `f_quantity`) VALUES
(45, 33, 2, 1),
(46, 33, 4, 1),
(47, 33, 7, 1),
(48, 33, 8, 1),
(49, 33, 9, 1),
(50, 34, 1, 5),
(51, 34, 4, 5),
(52, 34, 7, 1),
(53, 34, 8, 5),
(54, 34, 9, 1),
(58, 35, 8, 5),
(70, 39, 4, 5),
(71, 39, 8, 5),
(72, 39, 9, 1),
(73, 40, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(10) NOT NULL,
  `o_id` int(10) NOT NULL,
  `p_mode` enum('COD','Online') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `o_id`, `p_mode`) VALUES
(3, 20, 'Online'),
(4, 21, 'Online'),
(25, 36, 'COD'),
(26, 37, 'Online'),
(27, 38, 'COD'),
(28, 39, 'COD'),
(29, 40, 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `c_id` int(10) NOT NULL,
  `f_id` int(10) NOT NULL,
  `r_id` int(10) NOT NULL,
  `r_rating` int(5) NOT NULL,
  `r_description` varchar(255) NOT NULL,
  `r_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`c_id`, `f_id`, `r_id`, `r_rating`, `r_description`, `r_time`) VALUES
(6, 2, 1, 3, 'good.', '2020-12-08 19:06:55'),
(1, 2, 2, 5, 'Nice.', '2020-12-08 19:08:02'),
(2, 2, 3, 2, 'Its nice.', '2020-12-08 19:49:19'),
(3, 3, 4, 4, 'Very Good.', '2020-12-08 19:50:57'),
(1, 2, 5, 5, 'Amazing!', '2020-12-09 10:35:03'),
(1, 1, 6, 1, 'Its good.', '2020-12-09 14:27:09'),
(7, 7, 7, 2, 'Not Good', '2020-12-09 16:13:38'),
(1, 2, 8, 3, 'Yes', '2020-12-09 16:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `c_id` int(10) NOT NULL,
  `ticket_id` int(10) NOT NULL,
  `ticket_query` varchar(255) NOT NULL,
  `ticket_response` varchar(255) NOT NULL DEFAULT '''Unanswered'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`c_id`, `ticket_id`, `ticket_query`, `ticket_response`) VALUES
(1, 1, 'What\'s the status?', '\'Unanswered\''),
(1, 2, 'Any updates?', '\'Unanswered\''),
(1, 3, 'Do let me know', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`od_id`),
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`o_id`) REFERENCES `orders` (`o_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
