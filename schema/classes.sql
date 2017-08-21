-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 11:01 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `adviser` int(11) NOT NULL,
  `occupants` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `date_created` timestamp NOT NULL,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`, `year`, `adviser`, `occupants`, `capacity`, `date_created`, `date_modified`) VALUES
(1, 'STEM1', 'Grade 11', 4245744, 35, 40, '2017-08-21 07:22:42', '2017-08-21 07:22:42'),
(2, 'GAS2', 'Grade 12', 4245745, 36, 40, '2017-08-21 07:23:22', '2017-08-21 07:23:22'),
(3, 'HUMSS3', 'Grade 11', 4245746, 37, 40, '2017-08-21 07:23:58', '2017-08-21 07:23:58'),
(4, 'ABM4', 'Grade 12', 4245747, 38, 40, '2017-08-21 07:24:45', '2017-08-21 07:24:45'),
(5, 'TVLHE5', 'Grade 11', 4245748, 39, 40, '2017-08-21 07:25:28', '2017-08-21 07:25:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
