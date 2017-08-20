-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2017 at 04:51 AM
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
(3, '555555555555', 'Form 137', '2001-12-24 16:00:00'),
(4, '555555555555', 'Form 138', '2001-12-24 16:00:00'),
(5, '14038027', 'Form 137', '2001-12-24 16:00:00'),
(6, '14038027', 'Form 138', '2001-12-24 16:00:00'),
(7, '777777777777', 'Form 137', '2001-12-24 16:00:00'),
(8, '777777777777', 'Form 138', '2001-12-24 16:00:00'),
(9, '777777777777', 'NSO Birth Certificate', '2001-12-24 16:00:00'),
(10, 'dsfsdfsf', 'Form 137', '2017-08-19 19:33:01'),
(11, 'dsfsdfsf', 'Form 138', '2017-08-19 19:33:01'),
(12, 'dsfsdfsf', 'NSO Birth Certificate', '2017-08-19 19:33:01'),
(13, '8346735', 'Form 137', '2017-08-20 01:08:24'),
(14, '8346735', 'Form 138', '2017-08-20 01:08:24');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
