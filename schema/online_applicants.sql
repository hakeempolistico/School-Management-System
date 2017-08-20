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
-- Table structure for table `online_applicants`
--

CREATE TABLE `online_applicants` (
  `id` int(255) NOT NULL,
  `lrn` varchar(15) NOT NULL,
  `grade` varchar(15) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `birth_date` varchar(15) NOT NULL,
  `birth_place` varchar(40) NOT NULL,
  `age` varchar(10) NOT NULL,
  `mother_tongue` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `street` varchar(40) NOT NULL,
  `barangay` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `province` varchar(40) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `mother_name` varchar(40) NOT NULL,
  `father_contact` varchar(15) NOT NULL,
  `mother_contact` varchar(15) NOT NULL,
  `guardian` varchar(40) NOT NULL,
  `relationship` varchar(30) NOT NULL,
  `guardian_contact` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_applicants`
--

INSERT INTO `online_applicants` (`id`, `lrn`, `grade`, `first_name`, `middle_name`, `last_name`, `sex`, `contact`, `birth_date`, `birth_place`, `age`, `mother_tongue`, `religion`, `street`, `barangay`, `city`, `province`, `father_name`, `mother_name`, `father_contact`, `mother_contact`, `guardian`, `relationship`, `guardian_contact`, `status`, `note`) VALUES
(1, '14038027', 'Grade 12', 'Adrii', 'Allahu', 'Akbar', 'Female', '745928324', '06/24/1998', 'qc', '19', 'Japanese', 'Filipino', '#211', 'kdshfksd', 'fksdhfksj', 'lkkjhkj', 'hkhkjhkj', 'hkjhkjhkj', 'hkjhkjhkjh', 'kjhkjhkjh', 'kjhkjhkjhkh', 'kjhkjhk', 'dasasda', 'Enrolled', 'dsfsdfs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `online_applicants`
--
ALTER TABLE `online_applicants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lrn` (`lrn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `online_applicants`
--
ALTER TABLE `online_applicants`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
