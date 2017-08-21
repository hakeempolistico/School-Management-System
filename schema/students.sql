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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `lrn` varchar(15) NOT NULL,
  `grade` varchar(15) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `age` int(4) NOT NULL,
  `mother_tongue` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `father_contact` varchar(20) NOT NULL,
  `mother_contact` varchar(20) NOT NULL,
  `guardian` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `guardian_contact` varchar(20) NOT NULL,
  `requirements` varchar(20) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `lrn`, `grade`, `first_name`, `middle_name`, `last_name`, `sex`, `contact`, `birth_date`, `birth_place`, `age`, `mother_tongue`, `religion`, `street`, `barangay`, `city`, `province`, `father_name`, `mother_name`, `father_contact`, `mother_contact`, `guardian`, `relationship`, `guardian_contact`, `requirements`, `note`) VALUES
(1, '14038020', 'Grade 11', 'Aaron', 'James', 'Alcantara', 'Male', '09222222222', '2017-08-15', 'Laguna', 20, 'Tagalog', 'Catholic', 'Laguna st.', 'Laguna', 'Laguna', 'Laguna', 'Father Alcantara', 'Mother Alcantara', 'Falcan contact', 'Malcan contact', 'N/A', 'N/A', 'N/A', 'complete', '1'),
(2, '14038021', 'Grade 12', 'Jan', 'Diether', 'Francia', 'Male', '09333333333', '2017-08-25', 'Caloocan', 19, 'Tagalog', 'Catholic', 'Caloocan st.', 'Caloocan', 'Caloocan', 'Caloocn', 'Father Francia', 'Mother Francia', 'Ffrancia contact', 'Mfrancia contact', 'N/A', 'N/A', 'N/A', 'complete', '2'),
(3, '14038022', 'Grade 11', 'Rie', 'John', 'Torres', 'Male', '09444444444', '2017-08-23', 'Fairview', 19, 'Tagalog', 'Catholic', 'Fairview st.', 'Fairview', 'Fairview', 'Fairview', 'Father Torres', 'Mother Torres', 'Ftorres contact', 'Mtorres contact', 'N/A', 'N/A', 'N/A', 'complete', '3'),
(4, '14038023', 'Grade 12', 'John', 'Robert', 'Capistrano', 'Male', '09555555555', '2017-08-01', 'Monumento', 20, 'Tagalog', 'Catholic', 'Monumento st.', 'Monumento', 'Monumento', 'Monumento', 'Father Capistrano', 'Mother Capistrano', 'Fcapis contact', 'Mcapis contact', 'N/A', 'N/A', 'N/A', 'complete', '4'),
(5, '14038024', 'Grade 12', 'Shanai', 'Hazel', 'Zulueta', 'Female', '09666666666', '2017-07-31', 'Bicol', 19, 'Tagalog', 'Catholic', 'Bicol st.', 'Bicol', 'Bicol', 'Bicol', 'Father Zulueta', 'Mother Zulueta', 'Fzulueta contact', 'Mzulueta contact', 'N/A', 'N/A', 'N/A', 'complete', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lrn` (`lrn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
