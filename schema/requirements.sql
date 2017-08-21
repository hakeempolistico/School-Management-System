-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 11:02 AM
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
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `lrn` varchar(15) NOT NULL,
  `requirement` varchar(40) NOT NULL,
  `date_given` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `lrn`, `requirement`, `date_given`) VALUES
(1, '14038020', 'Form 137', '2017-08-21 09:11:41'),
(2, '14038020', 'Form 138', '2017-08-21 09:11:41'),
(3, '14038020', 'NSO Birth Certificate', '2017-08-21 09:11:41'),
(4, '14038021', 'Form 137', '2017-08-21 09:15:39'),
(5, '14038021', 'Form 138', '2017-08-21 09:15:39'),
(6, '14038021', 'NSO Birth Certificate', '2017-08-21 09:15:39'),
(7, '14038022', 'Form 137', '2017-08-21 10:54:29'),
(8, '14038022', 'Form 138', '2017-08-21 10:54:29'),
(9, '14038022', 'NSO Birth Certificate', '2017-08-21 10:54:29'),
(10, '14038023', 'Form 137', '2017-08-21 10:57:09'),
(11, '14038023', 'Form 138', '2017-08-21 10:57:09'),
(12, '14038023', 'NSO Birth Certificate', '2017-08-21 10:57:09'),
(13, '14038024', 'Form 137', '2017-08-21 10:59:27'),
(14, '14038024', 'Form 138', '2017-08-21 10:59:27'),
(15, '14038024', 'NSO Birth Certificate', '2017-08-21 10:59:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
