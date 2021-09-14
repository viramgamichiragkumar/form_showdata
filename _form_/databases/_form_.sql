-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 08:07 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_form_`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `id` int(4) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hobby` varchar(30) NOT NULL,
  `img` varchar(50) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`id`, `full_name`, `email`, `gender`, `hobby`, `img`, `tstamp`) VALUES
(1, 'user', 'user@gmail.com', 'female', 'cricket,gaming,', '71751pexels-kevin-ku-577585.jpg', '2021-09-14 11:08:46'),
(6, 'admin1', 'admin@gmail.com', 'female', 'sleeping,', '30247wp2234565-coding-wallpapers.jpg', '2021-09-14 11:09:28'),
(7, 'scorpion', 'scorpion@gmail.com', 'male', 'gaming,', 'images.jpg', '2021-09-13 17:36:00'),
(14, 'maulik', 'maulik@gmail.com', 'male', 'gaming,', 'wp1828900-programmer-wallpapers.png', '2021-09-10 16:47:13'),
(20, 'new user', 'user1@gmail.com', 'male', 'cricket,gaming,', '40964796839.jpg', '2021-09-14 11:11:40'),
(22, 'demo', 'demo@gmail.com', 'female', 'cricket,gaming,', '61981pexels-kevin-ku-577585.jpg', '2021-09-14 11:13:23'),
(23, 'admin', 'demo@gmail.com', 'male', 'cricket,', '89752wp1828929-coding-wallpapers.jpg', '2021-09-14 11:07:12'),
(24, 'demoo', 'dmeo@gmail.com', 'male', 'cricket,', '43785image.png', '2021-09-14 11:14:48'),
(25, 'adminp', 'admin@gmail.com', 'female', 'sleeping,', '46929160337.png', '2021-09-14 11:15:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
