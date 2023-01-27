-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 08:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Phone` int(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Last Name`, `Email`, `Address`, `City`, `Phone`, `Password`, `Picture`, `usertype`) VALUES
(6, 'Azlan', '876', 'azlankhan9t8@gmail.com', 'house no 15', 'karachi', 321356748, '123458', '', 0),
(8, 'waleed', 'ad', 'axgujyrf@gmail.com', 'adas rd fasf', 'karachi', 358596, '123456', '', 1),
(9, 'adil', '', 'adil@gmail.com', 'house no 15', 'karachi', 321587, '123', '', 2),
(10, 'sufyan', 'khan', 'adil@gmail.com', 'adas rd fasf', 'karachi', 854, '123', './picture/azlan.jpg', 3),
(12, '', '', '', '', '', 0, '', './picture/', 5),
(13, 'sufyan', 'khan', 'sufyan@gmail.com', 'adas rd fasf', 'karachi', 564545, '456', './picture/download.jpg', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
