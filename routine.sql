-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 07:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `routine`
--

-- --------------------------------------------------------

--
-- Table structure for table `batchname`
--

CREATE TABLE `batchname` (
  `id` int(30) NOT NULL,
  `batch_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batchname`
--

INSERT INTO `batchname` (`id`, `batch_name`) VALUES
(1, '1/2'),
(2, '2/2'),
(3, '3/2'),
(4, '4/2');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(30) NOT NULL,
  `news` varchar(200) DEFAULT NULL,
  `times` varchar(30) DEFAULT NULL,
  `time_day_of_week` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `times`, `time_day_of_week`) VALUES
(1, ' ', ' ', '4');

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `id` int(20) NOT NULL,
  `batch_name` varchar(100) NOT NULL,
  `day_number` varchar(30) DEFAULT NULL,
  `day_name` varchar(30) DEFAULT NULL,
  `eight_am_class` varchar(30) DEFAULT NULL,
  `eight_am_class_teacher` varchar(30) DEFAULT NULL,
  `nine_am_class` varchar(30) DEFAULT NULL,
  `nine_am_class_teacher` varchar(30) DEFAULT NULL,
  `ten_am_class` varchar(30) DEFAULT NULL,
  `ten_am_class_teacher` varchar(30) DEFAULT NULL,
  `eleven_am_class` varchar(30) DEFAULT NULL,
  `eleven_am_class_teacher` varchar(30) DEFAULT NULL,
  `twelve_pm_class` varchar(30) DEFAULT NULL,
  `twelve_pm_class_teacher` varchar(30) DEFAULT NULL,
  `one_pm_class` varchar(30) DEFAULT NULL,
  `one_pm_class_teacher` varchar(30) DEFAULT NULL,
  `two_pm_class` varchar(30) DEFAULT NULL,
  `two_pm_class_teacher` varchar(30) DEFAULT NULL,
  `three_pm_class` varchar(30) DEFAULT NULL,
  `three_pm_class_teacher` varchar(30) DEFAULT NULL,
  `four_pm_class` varchar(30) DEFAULT NULL,
  `four_pm_class_teacher` varchar(30) DEFAULT NULL,
  `five_pm_class` varchar(30) DEFAULT NULL,
  `five_pm_class_teacher` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`id`, `batch_name`, `day_number`, `day_name`, `eight_am_class`, `eight_am_class_teacher`, `nine_am_class`, `nine_am_class_teacher`, `ten_am_class`, `ten_am_class_teacher`, `eleven_am_class`, `eleven_am_class_teacher`, `twelve_pm_class`, `twelve_pm_class_teacher`, `one_pm_class`, `one_pm_class_teacher`, `two_pm_class`, `two_pm_class_teacher`, `three_pm_class`, `three_pm_class_teacher`, `four_pm_class`, `four_pm_class_teacher`, `five_pm_class`, `five_pm_class_teacher`) VALUES
(1, '1/2', '0', 'Sunday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '1/2', '1', 'Monday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '1/2', '2', 'Tuesday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '1/2', '3', 'Wednesday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '1/2', '4', 'Thursday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '1/2', '5', 'Friday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '1/2', '6', 'Saturday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '2/2', '0', 'Sunday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '2/2', '1', 'Monday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2/2', '2', 'Tuesday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '2/2', '3', 'Wednesday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2/2', '4', 'Thursday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '2/2', '5', 'Friday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2/2', '6', 'Saturday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '3/2', '0', 'Sunday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '3/2', '1', 'Monday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '3/2', '2', 'Tuesday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '3/2', '3', 'Wednesday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '3/2', '4', 'Thursday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '3/2', '5', 'Friday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '3/2', '6', 'Saturday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '4/2', '0', 'Sunday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '4/2', '1', 'Monday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '4/2', '2', 'Tuesday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '4/2', '3', 'Wednesday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '4/2', '4', 'Thursday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '4/2', '5', 'Friday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, '4/2', '6', 'Saturday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Yunus', 'ahmedyunuspilot@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batchname`
--
ALTER TABLE `batchname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
