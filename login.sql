-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 11:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `username` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `password` varchar(123) NOT NULL,
  `usertype` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(12, 'irene', 'irene@gmail.com', 'irene', 'admin'),
(13, 'atuha', 'atuha@gmail.com', 'atuha', 'admin'),
(14, 'promise', 'promise@gmail.com', 'promise', 'attendant'),
(16, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(17, 'innocent', 'innocent@gmail.com', 'innocent', 'attendant'),
(18, 'ronnie', 'ronnie@gmail', 'ronnie', 'admin'),
(19, 'lubega', 'lubega@gmail.com', 'lubega', 'attendant'),
(20, 'andry', 'andry@gmail.com', 'andry', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `productname` varchar(123) NOT NULL,
  `price` int(123) NOT NULL,
  `quantity` int(123) NOT NULL,
  `regdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `price`, `quantity`, `regdate`) VALUES
(22, 'panado', 200, 100, '2022-09-07'),
(23, 'ovacado', 300, 250, '2022-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(122) NOT NULL,
  `productname` varchar(123) NOT NULL,
  `saleamount` int(123) NOT NULL,
  `user` varchar(30) NOT NULL,
  `sellsdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `productname`, `saleamount`, `user`, `sellsdate`) VALUES
(217, '', 0, '', '0000-00-00'),
(218, '', 0, '', '0000-00-00'),
(219, '', 0, '', '0000-00-00'),
(220, 'panado', 2000, 'innocent', '2022-09-03'),
(221, '', 0, '', '0000-00-00'),
(222, 'panado', 2000, 'innocent', '2022-09-04'),
(223, '', 0, '', '0000-00-00'),
(224, '', 0, '', '0000-00-00'),
(225, '', 0, '', '0000-00-00'),
(226, '', 0, '', '0000-00-00'),
(227, '', 0, '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(122) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
