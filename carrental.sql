-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 08:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `place` text NOT NULL,
  `pickupdate` date NOT NULL,
  `returndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `place`, `pickupdate`, `returndate`) VALUES
(1, 'pune', '2021-11-24', '2021-11-25'),
(2, 'mumbai', '2021-11-24', '2021-11-25'),
(3, 'mumbai', '2021-11-24', '2021-11-25'),
(132, 'gujrat', '2021-11-25', '2021-11-27'),
(133, 'pune', '2021-11-26', '2021-11-27'),
(173, '', '0000-00-00', '0000-00-00'),
(174, '', '0000-00-00', '0000-00-00'),
(175, 'pune', '2021-11-26', '2021-11-28'),
(176, 'mumbai', '2021-11-26', '2021-11-29'),
(177, 'mumbai', '2021-11-26', '2021-11-28'),
(178, 'pune', '2021-11-26', '2021-11-29'),
(179, 'pune', '2021-11-26', '2021-11-29'),
(180, 'gujrat', '2021-11-26', '2021-11-27'),
(181, 'pune', '2021-11-26', '2021-11-29'),
(182, 'mumbai', '2021-11-26', '2021-11-30'),
(183, 'pune', '2021-11-26', '2021-11-27'),
(184, 'pune', '2021-11-26', '2021-11-27'),
(185, 'pune', '2021-11-26', '2021-11-27'),
(186, 'pune', '2021-11-26', '2021-11-27'),
(187, 'pune', '2021-11-26', '2021-11-27'),
(188, 'pune', '2021-11-26', '2021-11-27'),
(189, 'pune', '2021-11-26', '2021-11-29'),
(190, 'hyderabad', '2021-11-28', '2021-12-15'),
(191, 'gujrat', '2021-11-30', '2021-12-03'),
(192, 'pune', '2021-11-30', '2021-12-08'),
(193, 'nagpur', '2021-12-04', '2021-12-15'),
(194, 'pune', '0000-00-00', '0000-00-00'),
(195, 'pune', '2021-12-09', '2021-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `car` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `car`) VALUES
(1, 'WagonR');

-- --------------------------------------------------------

--
-- Table structure for table `finalbooking`
--

CREATE TABLE `finalbooking` (
  `sr.no` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `CARNAME` varchar(255) NOT NULL,
  `PLACE` text NOT NULL,
  `PDATE` date NOT NULL,
  `RDATE` date NOT NULL,
  `TOTAL` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finalbooking`
--

INSERT INTO `finalbooking` (`sr.no`, `NAME`, `EMAIL`, `CARNAME`, `PLACE`, `PDATE`, `RDATE`, `TOTAL`) VALUES
(1, 'dd', 'aaaa@gmail.com', 'WagonR', 'pune', '2021-11-24', '2021-11-25', 500),
(10, 'dd', 'aaaa@gmail.com', 'Honda City', 'pune', '2021-11-25', '2021-11-27', 2000),
(11, 'dd', 'aaaa@gmail.com', 'Honda City', 'pune', '2021-11-25', '2021-11-27', 2000),
(12, 'dd', 'aaaa@gmail.com', 'Honda City', 'pune', '2021-11-25', '2021-11-27', 2000),
(13, 'dd', 'aaaa@gmail.com', 'Innova', 'pii', '2021-11-26', '2021-11-30', 8000),
(14, 'dd', 'aaaa@gmail.com', 'Innova', 'pii', '2021-11-26', '2021-11-30', 8000),
(15, 'dd', 'aaaa@gmail.com', 'Honda City', 'pune', '2021-11-26', '2021-11-27', 1000),
(16, 'dd', 'aaaa@gmail.com', 'Honda City', 'pune', '2021-11-26', '2021-11-27', 1000),
(17, 'dd', 'aaaa@gmail.com', 'BMW Eclass', 'pune', '2021-11-25', '2021-11-27', 6000),
(18, 'dd', 'aaaa@gmail.com', 'BMW Eclass', 'pune', '2021-11-25', '2021-11-27', 6000),
(19, 'hardik', 'qq@gmail.com', 'BMW Eclass', 'mumbai', '2021-11-26', '2021-11-28', 6000),
(20, 'hardik', 'qq@gmail.com', 'BMW Eclass', 'mumbai', '2021-11-26', '2021-11-28', 6000),
(50, 'dd', 'aaaa@gmail.com', 'BMW Eclass', 'pune', '2021-11-26', '2021-11-29', 9000),
(52, 'dd', 'aaaa@gmail.com', 'Mercedez C45E', 'gujrat', '2021-11-26', '2021-11-27', 2500),
(53, 'hhaardik', 'hardiknikam7@gmail.com', 'WagonR', 'pune', '2021-11-26', '2021-11-29', 1500),
(64, 'dd', 'aaaa@gmail.com', 'Innova', 'pune', '2021-11-26', '2021-11-29', 6000),
(65, 'omkar', 'omkar@gmail.com', 'BMW Eclass', 'hyderabad', '2021-11-28', '2021-12-15', 51000),
(66, 'omkar', 'omkar@gmail.com', 'BMW Eclass', 'hyderabad', '2021-11-28', '2021-12-15', 51000),
(67, 'dd', 'aaaa@gmail.com', 'BMW Eclass', 'gujrat', '2021-11-30', '2021-12-03', 9000),
(68, 'dd', 'aaaa@gmail.com', 'BMW Eclass', 'gujrat', '2021-11-30', '2021-12-03', 9000),
(69, 'dd', 'aaaa@gmail.com', 'WagonR', 'pune', '2021-11-30', '2021-12-08', 4000),
(70, 'dd', 'aaaa@gmail.com', 'Innova', 'nagpur', '2021-12-04', '2021-12-15', 22000),
(71, 'dd', 'aaaa@gmail.com', 'Innova', 'nagpur', '2021-12-04', '2021-12-15', 22000),
(72, 'dd', 'aaaa@gmail.com', 'Honda City', 'pune', '2021-12-09', '2021-12-16', 7000),
(73, 'dd', 'aaaa@gmail.com', 'Honda City', 'pune', '2021-12-09', '2021-12-16', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'dd', 'aaaa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'h111', 'hii@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'nick', 'nick@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'hardik', 'qq@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'hardik', 'dd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'pranav', 'ss@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'hhaardik', 'hardiknikam7@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'franky', 'hardiknikam1@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'omkar', 'omkar@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalbooking`
--
ALTER TABLE `finalbooking`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `finalbooking`
--
ALTER TABLE `finalbooking`
  MODIFY `sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
