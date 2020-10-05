-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 08:35 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `s_no` int(255) NOT NULL,
  `sample` varchar(255) NOT NULL,
  `dropdown` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `period` int(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`s_no`, `sample`, `dropdown`, `model`, `year`, `size`, `owner`, `user`, `loc`, `period`, `start_date`, `end_date`, `remarks`) VALUES
(1, 'ok', 'Panel', 'test', 't', 't', 't', 'praveen', 'rack 5', 6, '2020-09-12', '2020-09-18', 'y'),
(2, 'ok', 'Soundbar', 'test2', 'test2', 't', 't', 'praveen', 'rack 5', 6, '2020-09-12', '2020-09-18', 'n'),
(3, 'ok', 'PDM', 'ok', 'ok', 'ok', 'ok', 'praveen', 'rack 5', 6, '2020-09-12', '2020-09-18', 'yes'),
(4, 'ok', 'MSPG', 'test3', 'test3', 't', 't', 'praveen', 'rack 5', 6, '2020-09-12', '2020-09-18', 'yes'),
(5, 'ok', 'Soundbar', '56', '54', '89', '45', 'praveen', 'rack 5', 6, '2020-09-12', '2020-09-18', 'No'),
(6, 'ok', 'PDM', '98', '89', '45', '78', 'praveen', 'rack 5', 6, '2020-09-12', '2020-09-18', 'no'),
(7, 'ok', 'Network Speaker', '123', '321', '123', '321', 'praveen', 'rack 5', 6, '2020-09-12', '2020-09-18', 'no'),
(8, '89', 'Panel', '56', '45', '36', '78', 'puneet', 'rack3', 7, '', '', 'n'),
(9, 'nice', 'MSPG', 'nice', 'nice', 'nice', 'nice', 'ni', 'ui', 6, '2020-09-13', '2020-09-19', 'no'),
(10, 'yes', 'Panel', 'ya', 'ya', '78', '67', '45', '90', 5, '2020-09-13', '2020-09-18', 'no'),
(11, '1456', 'Panel', '5689', '2020', '6', 'puneet', 'puneet', 'seat-180', 3, '', '', 'no'),
(12, '12345', 'Soundbar', '19', '19', '55', 'puneet', 'puneet', 'rack3', 0, '', '', 'no'),
(13, '1458', 'Test Phone', '19', '89', '56', '78', '45', '45', 0, '', '', 'no'),
(14, '1234567', 'Network Speaker', 'Q70', '2019', '55', 'praveen', 'puneet', '3B-165', 7, '2020-09-29', '2020-10-06', 'Not working');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `s_no` int(11) NOT NULL,
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`s_no`, `id`, `email`, `password`) VALUES
(2, 123, 'link', 'test'),
(3, 19537643, 'link', 'Samsung@135'),
(4, 0, 'test2@gmail.com', 'asdfgh'),
(5, 0, '', ''),
(6, 0, 'test3@gmail.com', 'qwerty'),
(7, 58595, 'test4@gmail.com', 'test4'),
(8, 878956, 'ok@gmail.com', 'zxcvbn'),
(9, 1234567, 'praveensamal@gmail.com', 'Samsung@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `s_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
