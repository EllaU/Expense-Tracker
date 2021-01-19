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
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `pname` varchar(1000) DEFAULT NULL,
  `amt` int(11) DEFAULT NULL,
  `narr` varchar(1000) DEFAULT NULL,
  `cat` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `payment` varchar(1000) DEFAULT NULL,
  `location` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `uid`, `pname`, `amt`, `narr`, `cat`, `date`, `payment`, `location`) VALUES
(1, 1, 'HoneyWell Spaghetti', 12000, 'For the kids lunch break', 1, '2021-01-03', 'Card', ''),
(2, 1, 'HoneyWell Spaghetti', 12000, 'For the kids lunch break', 1, '2012-03-01', 'Card', 'Lagos,Nigeria'),
(3, 1, 'Malaria medicine', 500, 'i bought three packs ', 2, '2021-01-16', 'Cash', 'Lagos,Nigeria'),
(4, 1, 'Microwave', 30000, 'For the kitchen', 5, '2021-01-16', 'Cash', 'Lagos,Nigeria'),
(5, 1, 'Fridge', 20000, 'To store perishable foods', 5, '2021-01-16', 'Cash', 'Lagos,Nigeria'),
(6, 1, 'Casscade Bottle Water', 600, 'Bought a packet for drinking ', 1, '2021-01-19', 'Cash', 'Lagos,Nigeria'),
(7, 1, 'Samsung television', 70000, 'New Television for the sitting room', 5, '2021-01-19', 'Cash', 'Lagos,Nigeria'),
(8, 1, '2nd Term school fees', 350000, 'Full payment for second temn school fees ', 16, '2021-01-19', 'Cash', 'Lagos,Nigeria'),
(9, 1, 'Mac Book Pro', 43000, 'Bought for Cindys school projects', 5, '2021-01-19', 'Cash', 'Lagos,Nigeria'),
(10, 1, '2021 rent', 150000, 'Rent for Mrs Abiodun(Landlady)', 8, '2021-01-19', 'Card', 'Lagos,Nigeria'),
(11, 1, 'Nepa bill for March and April', 8000, 'Paid to IKEDC', 4, '2021-01-19', 'Card', 'Ikeja,Lagos'),
(12, 1, 'Cindy\'s Transport ', 50000, 'Her back to school transport for second semester', 3, '2021-01-19', 'Cash', 'Lagos,Nigeria'),
(13, 1, 'Kenstar air conditioner', 130000, 'A/C for masters bedroom', 5, '2021-01-19', 'Card', 'Ikeja,Lagos'),
(14, 1, 'Palm Tree ', 12000, 'For the sitting room', 7, '2021-01-19', 'Cash', 'Lagos,Nigeria'),
(15, 1, 'Fuel', 500, 'fuel', 3, '2021-01-19', 'Card', 'Lagos,Nigeria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
