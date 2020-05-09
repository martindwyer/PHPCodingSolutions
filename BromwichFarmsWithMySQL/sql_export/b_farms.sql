-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2018 at 03:06 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b_farms`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_num` int(11) NOT NULL,
  `email_one` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pass_one` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `image_path` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `member_type` varchar(75) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_num`, `email_one`, `pass_one`, `fname`, `lname`, `address`, `city`, `state`, `zip`, `image_path`, `member_type`) VALUES
(12, 'martin.dwyer@outlook.com', '793914c9c583d9d86d0f4ed8c521b0c1', 'Martin', 'Dwyer', '168 16th Ave SW', 'Cedar Rapids', 'IA', '52404', 'avi/profile.png', 'admin'),
(13, 'sam@stone.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Sam', 'Stone', 'Stone Street', 'Stone City', 'IA', '52400', '', 'customer'),
(14, 'fred@flintstone.com', '633de4b0c14ca52ea2432a3c8a5c4c31', 'Fred', 'Flintstone', '123 Rocky Road', 'Bedrock', 'AZ', '99999', '', 'customer'),
(15, 'barney@rubble.com', 'dc634e2072827fe0b5be9a2063390544', 'Barney', 'Rubble', 'Rocky Road', 'Bedrock', 'AZ', '99999', 'avi/download.jpeg', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
