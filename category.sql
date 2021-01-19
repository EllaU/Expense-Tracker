-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 04:11 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expense`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `status` varchar(1000) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `cdate`, `status`, `uid`) VALUES
(1, 'Food', '2004-09-01', 'Active', 1),
(2, 'Health', '2021-01-16', 'Active', 1),
(3, 'Transport', '2021-01-16', 'Active', 1),
(4, 'Bills', '2021-01-16', 'Active', 1),
(5, 'Appliances', '2021-01-16', 'Active', 1),
(6, 'Housing', '2021-01-17', 'Disable', 1),
(7, 'Decoration', '2021-01-17', 'Active', 1),
(8, 'Rent', '2021-01-17', 'Active', 1),
(9, 'Furniture', '2021-01-17', 'Active', 1),
(10, 'Fashion', '2021-01-17', 'Active', 1),
(11, 'Feeding', '2021-01-17', 'Active', 1),
(12, 'Rent', '2021-01-17', 'Disable', 1),
(13, 'Telephone', '2021-01-17', 'Disable', 1),
(14, 'Utilities', '2021-01-17', 'Active', 1),
(15, 'Electricity', '2021-01-17', 'Disable', 1),
(16, 'Fees', '2021-01-17', 'Active', 1),
(17, 'House Maintainance', '2021-01-17', 'Disable', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
