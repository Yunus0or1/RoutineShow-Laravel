-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 05:51 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'aaa', 'aaa@aaa', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batchname`
--
ALTER TABLE `batchname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
