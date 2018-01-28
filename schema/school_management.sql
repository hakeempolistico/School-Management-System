-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 03:26 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

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
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `id` int(11) NOT NULL,
  `year_start` int(4) NOT NULL,
  `year_end` int(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`id`, `year_start`, `year_end`, `date_created`, `date_modified`) VALUES
(1, 2017, 2018, '2017-10-12 04:51:42', '2017-10-12 04:51:42'),
(2, 2018, 2019, '2018-01-15 07:44:47', '2018-01-15 07:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `students_info_lrn` int(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `students_info_lrn`, `street`, `barangay`, `city`, `province`) VALUES
(1, 14, 'Caloocan st.', 'Barangay Caloocan', 'Caloocan City', 'Caloocan Province'),
(2, 14038014, 'Monumento st.', 'Bago Bantay', 'Quezon City', 'Province'),
(3, 14038001, 'Street', 'Brgy', 'City', 'Province'),
(4, 14038002, 'Address Street', 'Address Brgy', 'Address City', 'Address Province'),
(5, 14038003, 'Street', 'Brgy', 'City', 'Province'),
(6, 14038019, 'Street', 'Brgy', 'City', 'Province'),
(7, 14038069, '169', 'Paco', 'Manila', 'Manila Province'),
(8, 14038070, '269', 'Paco', 'Manila', 'Province'),
(9, 14038059, '221', 'Brgy', 'Pasig', 'Province'),
(10, 14038005, '212', 'Brgy', 'Obando', 'Bulacan'),
(11, 14038096, 'Street', 'Brgy', 'Taguig', 'Province'),
(12, 14038021, '213', 'Brgy. 125', 'Caloocan City', 'Manila');

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE `audit_trail` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `sub_module` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `description` varchar(535) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`id`, `user`, `module`, `sub_module`, `action`, `description`, `date`) VALUES
(12, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'NAME - BS Information System 4 to BS Information System 4A.', '2018-01-24 16:24:42'),
(11, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'CODE - BSIS4 to BSIS4A.', '2018-01-24 16:24:42'),
(13, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'CODE - BSIS4A to .', '2018-01-24 16:42:48'),
(14, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'CODE - BSIS4A set to inactive', '2018-01-24 16:42:48'),
(15, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'CODE - BSIS4A to BSIS4.', '2018-01-24 16:43:48'),
(16, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'NAME - BS Information System 4A to BS Information System 4.', '2018-01-24 16:44:04'),
(17, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'CODE - BSIS4 to BSIS4A.', '2018-01-24 16:45:38'),
(18, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'NAME - BS Information System 4 to BS Information System 4A.', '2018-01-24 16:45:41'),
(19, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'CODE - BSIS4A set to active', '2018-01-24 16:45:46'),
(20, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'CODE - BSIS4A set to inactive', '2018-01-24 16:50:03'),
(21, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-01-24 16:56:29'),
(22, ' -  ', '-', '-', 'Logged In', '-', '2018-01-24 16:56:39'),
(23, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-01-24 16:57:30'),
(24, 'Teacher - Adrielle Escaro', '-', '-', 'Logged In', '-', '2018-01-24 16:57:35'),
(25, 'Teacher - Adrielle Escaro', '-', '-', 'Logged Out', '-', '2018-01-24 17:01:10'),
(26, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-01-24 17:01:14'),
(27, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-01-24 18:08:11'),
(28, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-01-24 18:08:14'),
(29, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'CODE - BSIS4A to BSIS4.', '2018-01-24 18:08:30'),
(30, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'NAME - BS Information System 4A to BS Information System 4.', '2018-01-24 18:08:34'),
(31, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'CODE - BSIS4 set to active', '2018-01-24 18:08:40'),
(35, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-01-25 02:01:15'),
(36, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-01-25 02:04:59'),
(33, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Activated', 'CODE - BSIS4 set to active', '2018-01-24 18:11:52'),
(34, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Deactivated', 'CODE - BSIS4 set to inactive', '2018-01-24 18:11:54'),
(37, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-01-25 02:05:04'),
(38, 'Administrator - Hakeem Polistico', 'Academic', 'Teachers', 'Activated', 'EMPLOYEE ID - 0006 set to active', '2018-01-25 02:14:14'),
(39, 'Administrator - Hakeem Polistico', 'Academics', 'Teachers', 'Deactivated', 'EMPLOYEE ID - 0006 set to inactive', '2018-01-25 02:14:18'),
(40, 'Administrator - Hakeem Polistico', 'Academic', 'Rooms', 'Activated', 'ROOM ID - Lab104 set to active', '2018-01-25 02:23:33'),
(41, 'Administrator - Hakeem Polistico', 'Academics', 'Rooms', 'Deactivated', 'ROOM ID - Lab104 set to inactive', '2018-01-25 02:23:37'),
(42, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-01-25 03:05:04'),
(43, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Activated', 'CODE - BSIS4 set to active', '2018-01-25 03:34:14'),
(44, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Deactivated', 'CODE - BSIS4 set to inactive', '2018-01-25 03:34:19'),
(45, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-01-25 03:45:57'),
(46, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-01-26 13:44:00'),
(47, 'Administrator - Hakeem Polistico', 'Academics', 'Strands', 'Updated Data', 'NAME - BS Information System 4 to BS Information System 5.', '2018-01-26 17:25:53'),
(48, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-01-26 17:35:26'),
(49, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-01-27 13:35:24'),
(50, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-01-27 16:14:15'),
(51, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-01-27 16:17:22'),
(52, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-01-28 04:47:29'),
(53, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-01-28 14:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `class_subjects`
--

CREATE TABLE `class_subjects` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `teacher_id` varchar(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_subjects`
--

INSERT INTO `class_subjects` (`id`, `section_id`, `subject_id`, `teacher_id`, `semester`, `date_created`, `date_modified`) VALUES
(1, 13, 'CS-5', '0001', 'First Semester', '2018-01-19 13:36:56', '0000-00-00 00:00:00'),
(2, 13, 'CS-6', '0004', 'Second Semester', '2018-01-19 13:36:56', '0000-00-00 00:00:00'),
(3, 13, 'SS-HUMSS-1', '0004', 'First Semester', '2018-01-19 13:36:56', '0000-00-00 00:00:00'),
(4, 13, 'CS-4', '0002', 'First Semester', '2018-01-19 13:36:56', '0000-00-00 00:00:00'),
(5, 13, 'CS-7', '0003', 'First Semester', '2018-01-19 13:36:56', '0000-00-00 00:00:00'),
(6, 13, 'SS-STEM-1', '0005', 'Second Semester', '2018-01-19 13:36:56', '0000-00-00 00:00:00'),
(7, 13, 'SS-STEM-2', '0003', 'Second Semester', '2018-01-19 13:36:56', '0000-00-00 00:00:00'),
(8, 13, 'CS-7', '0002', 'Second Semester', '2018-01-19 13:36:56', '0000-00-00 00:00:00'),
(9, 1, 'CS-4', '0002', 'First Semester', '2018-01-27 16:20:00', '0000-00-00 00:00:00'),
(10, 1, 'CS-6', '0002', 'Second Semester', '2018-01-27 16:20:00', '0000-00-00 00:00:00'),
(11, 1, 'CS-7', '0003', 'First Semester', '2018-01-27 16:20:00', '0000-00-00 00:00:00'),
(12, 1, 'SS-HUMSS-1', '0004', 'First Semester', '2018-01-27 16:20:00', '0000-00-00 00:00:00'),
(13, 1, 'CS-5', '0001', 'First Semester', '2018-01-27 16:20:00', '0000-00-00 00:00:00'),
(14, 1, 'SS-STEM-1', '0001', 'Second Semester', '2018-01-27 16:20:00', '0000-00-00 00:00:00'),
(15, 1, 'SS-STEM-2', '0003', 'Second Semester', '2018-01-27 16:20:00', '0000-00-00 00:00:00'),
(16, 1, 'CS-7', '0004', 'Second Semester', '2018-01-27 16:20:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(200) NOT NULL,
  `strand_code` varchar(100) NOT NULL,
  `year_level_id` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`id`, `subject_code`, `strand_code`, `year_level_id`, `semester`, `date_created`, `date_modified`) VALUES
(41, 'CS-5', 'STEM', 1, 'First Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'CS-4', 'STEM', 1, 'First Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'CS-7', 'STEM', 1, 'First Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'SS-HUMSS-1', 'STEM', 1, 'First Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'SS-STEM-1', 'STEM', 1, 'Second Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'CS-6', 'STEM', 1, 'Second Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'SS-STEM-2', 'STEM', 1, 'Second Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'CS-7', 'STEM', 1, 'Second Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'CS-4', 'GAS', 1, 'First Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_students`
--

CREATE TABLE `enrolled_students` (
  `id` int(50) NOT NULL,
  `students_info_lrn` int(50) NOT NULL,
  `note` text NOT NULL,
  `section_id` varchar(15) NOT NULL,
  `academic_year_id` int(50) NOT NULL,
  `date_enrolled` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled_students`
--

INSERT INTO `enrolled_students` (`id`, `students_info_lrn`, `note`, `section_id`, `academic_year_id`, `date_enrolled`, `date_modified`) VALUES
(1, 14038014, '', '1', 1, '2017-10-12 04:51:47', '0000-00-00 00:00:00'),
(2, 14, '', '5', 1, '2017-10-12 05:19:45', '0000-00-00 00:00:00'),
(3, 14038002, '', '5', 1, '2017-10-12 06:35:53', '0000-00-00 00:00:00'),
(4, 14038001, '', '1', 1, '2017-10-25 09:47:01', '0000-00-00 00:00:00'),
(5, 14038003, '', '1', 2, '2018-01-15 07:45:27', '0000-00-00 00:00:00'),
(6, 14038070, '', '1', 2, '2018-01-19 15:21:54', '0000-00-00 00:00:00'),
(7, 14038059, 'No shoes', '6', 2, '2018-01-19 18:46:26', '0000-00-00 00:00:00'),
(8, 14038005, '', '1', 2, '2018-01-19 19:39:57', '0000-00-00 00:00:00'),
(9, 14038096, '', '1', 2, '2018-01-22 13:47:23', '0000-00-00 00:00:00'),
(10, 14038021, '', '6', 2, '2018-01-25 03:30:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `lrn` varchar(20) NOT NULL,
  `semester` enum('First Semester','Second Semester') NOT NULL,
  `quarter` enum('First Quarter','Second Quarter') NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `grade` decimal(11,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `lrn`, `semester`, `quarter`, `subject_code`, `grade`) VALUES
(1, '14038014', 'First Semester', 'First Quarter', 'CS-4', '87.0'),
(2, '14038001', 'First Semester', 'First Quarter', 'CS-4', '76.0'),
(3, '14038003', 'First Semester', 'First Quarter', 'CS-4', '74.0'),
(4, '14038070', 'First Semester', 'First Quarter', 'CS-4', '75.0'),
(6, '14038005', 'First Semester', 'First Quarter', 'CS-4', '90.1'),
(7, '14038096', 'First Semester', 'First Quarter', 'CS-4', '95.1');

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int(11) NOT NULL,
  `students_info_lrn` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `students_info_lrn`, `name`, `contact`, `relationship`, `address`) VALUES
(1, 14, 'Mother Francia', '09111111112', 'Mother', ''),
(2, 14038014, 'Vong Navarro', '0955-887-4822', 'Father', ''),
(3, 14038001, 'Anne Curtis', '0955-887-4822', 'Mother', ''),
(4, 14038002, 'Tom Cruise', '0955-887-4822', 'Father', ''),
(5, 14038003, 'Tom Cruise', '0955-887-4822', 'Father', ''),
(6, 14038070, 'Father Guzman', '0955-887-4822', 'Father', '269, Paco, Manila, Province'),
(7, 14038059, 'Mother Alcantara', '0955-887-4822', 'Mother', '221, Brgy, Pasig, Province'),
(8, 14038005, 'Father Capistrano', '0955-887-4822', 'Father', 'Bacoor, Cavite'),
(9, 14038096, 'Mother Lazaro', '0955-887-4822', 'Mother', 'Street, Brgy, Taguig, Province'),
(10, 14038021, 'Anne Curtis', '0955-887-4822', 'Mother', '213, Brgy. 125, Caloocan City, Manila');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `students_info_lrn` int(11) NOT NULL,
  `mother_name` varchar(70) NOT NULL,
  `mother_contact` varchar(15) NOT NULL,
  `father_name` varchar(70) NOT NULL,
  `father_contact` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `students_info_lrn`, `mother_name`, `mother_contact`, `father_name`, `father_contact`) VALUES
(1, 14, 'Mother Francia', '09111111112', 'Father Francia', '09111111111'),
(2, 14038014, 'Anne Curtis', '0955-887-4822', 'Vong Navarro', '0955-887-4822'),
(3, 14038001, 'Anne Curtis', '0955-887-4822', 'Tom Cruise', '0955-887-4822'),
(4, 14038002, 'Marissa Tomei', '0955-887-4822', 'Tom Cruise', '0955-887-4822'),
(5, 14038003, 'Marissa Tomei', '0955-887-4822', 'Tom Cruise', '0955-887-4822'),
(6, 14038019, 'Mother Maiden Name', '123123123', 'Daddy', '912312312'),
(7, 14038069, 'Mother\'s Maiden Name', '0955-887-4822', 'Patrick\'s Father', '0955-887-4822'),
(8, 14038070, 'Mother Guzman', '0955-887-4822', 'Father Guzman', '0955-887-4822'),
(9, 14038059, 'Mother Alcantara', '0955-887-4822', 'Father Alcantara', '0955-887-4822'),
(10, 14038005, 'Mother Capistrano', '0955-887-4822', 'Father Capistrano', '0955-887-4822'),
(11, 14038096, 'Mother Lazaro', '0955-887-4822', 'Father Lazaro', '0955-887-4822'),
(12, 14038021, 'Anne Curtis', '0955-887-4822', 'Tom Cruise', '0955-887-4822');

-- --------------------------------------------------------

--
-- Table structure for table `registered_students`
--

CREATE TABLE `registered_students` (
  `id` int(15) NOT NULL,
  `students_info_lrn` varchar(15) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `enrolled_student_lrn` varchar(15) NOT NULL,
  `requirement` varchar(40) NOT NULL,
  `date_given` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `enrolled_student_lrn`, `requirement`, `date_given`) VALUES
(1, '14038014', 'NSO Birth Certificate', '2017-10-12 04:51:47'),
(2, '14038014', 'Form 137', '2017-10-12 04:51:47'),
(3, '14038014', 'form 138', '2017-10-12 04:51:47'),
(4, '14', 'NSO Birth Certificate', '2017-10-12 05:19:45'),
(5, '14', '', '2017-10-12 05:19:45'),
(6, '14', '', '2017-10-12 05:19:45'),
(7, '14038002', 'NSO Birth Certificate', '2017-10-12 06:35:53'),
(8, '14038002', '', '2017-10-12 06:35:53'),
(9, '14038002', '', '2017-10-12 06:35:53'),
(10, '14038001', '', '2017-10-25 09:47:01'),
(11, '14038001', '', '2017-10-25 09:47:01'),
(12, '14038001', 'form 138', '2017-10-25 09:47:01'),
(13, '14038003', 'NSO Birth Certificate', '2018-01-15 07:45:27'),
(14, '14038003', 'Form 137', '2018-01-15 07:45:27'),
(15, '14038003', 'form 138', '2018-01-15 07:45:27'),
(16, '14038070', 'NSO Birth Certificate', '2018-01-19 15:21:54'),
(17, '14038070', 'Form 137', '2018-01-19 15:21:55'),
(18, '14038070', 'form 138', '2018-01-19 15:21:55'),
(19, '14038059', 'NSO Birth Certificate', '2018-01-19 18:46:26'),
(20, '14038059', 'Form 137', '2018-01-19 18:46:26'),
(21, '14038059', 'form 138', '2018-01-19 18:46:26'),
(22, '14038005', 'NSO Birth Certificate', '2018-01-19 19:39:57'),
(23, '14038005', 'Form 137', '2018-01-19 19:39:57'),
(24, '14038005', 'form 138', '2018-01-19 19:39:57'),
(25, '14038096', 'NSO Birth Certificate', '2018-01-22 13:47:23'),
(26, '14038096', 'Form 137', '2018-01-22 13:47:23'),
(27, '14038096', 'form 138', '2018-01-22 13:47:23'),
(28, '14038021', 'NSO Birth Certificate', '2018-01-25 03:30:14'),
(29, '14038021', 'Form 137', '2018-01-25 03:30:14'),
(30, '14038021', 'form 138', '2018-01-25 03:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(100) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `building` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_id`, `room_name`, `building`, `status`) VALUES
(1, 'Lab101', 'Laboratory 101', 'College of Science', 'active'),
(2, 'Lab102', 'Laboratory 102', 'College of Industrial Engineering', 'active'),
(3, 'Lab103', 'Laboratory 103', 'CAFA', 'active'),
(4, 'Room 104', 'Room 104', 'College of Engineering', 'active'),
(5, 'Room 105', 'Room 105', 'CLA', 'inactive'),
(7, 'Lab104', 'Laboratory 104', 'COS', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `time_start` varchar(5) NOT NULL,
  `time_end` varchar(5) NOT NULL,
  `day` varchar(20) NOT NULL,
  `color` varchar(50) NOT NULL,
  `row` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `section_id`, `semester`, `subject_code`, `room_id`, `time_start`, `time_end`, `day`, `color`, `row`) VALUES
(133, 1, 'First Semester', 'CS-7', 'Lab102', '08:00', '09:00', 'Thursday', 'rgb(216, 27, 96)', 1),
(134, 1, 'First Semester', 'CS-7', 'Lab102', '08:00', '09:00', 'Wednesday', 'rgb(216, 27, 96)', 1),
(135, 1, 'First Semester', 'CS-7', 'Lab102', '08:00', '09:00', 'Tuesday', 'rgb(216, 27, 96)', 1),
(136, 1, 'First Semester', 'CS-7', 'Lab102', '08:00', '09:00', 'Friday', 'rgb(216, 27, 96)', 1),
(132, 1, 'First Semester', 'CS-7', 'Lab102', '08:00', '09:00', 'Monday', 'rgb(216, 27, 96)', 1),
(101, 1, 'Second Semester', 'CS-5', 'Lab101', '07:00', '08:00', 'Monday', 'rgb(0, 192, 239)', 0),
(131, 1, 'First Semester', 'CS-5', 'Lab101', '07:00', '08:00', 'Tuesday', 'rgb(0, 192, 239)', 0),
(129, 1, 'First Semester', 'CS-5', 'Lab101', '07:00', '08:00', 'Friday', 'rgb(0, 192, 239)', 0),
(130, 1, 'First Semester', 'CS-5', 'Lab101', '07:00', '08:00', 'Wednesday', 'rgb(0, 192, 239)', 0),
(128, 1, 'First Semester', 'CS-5', 'Lab101', '07:00', '08:00', 'Thursday', 'rgb(0, 192, 239)', 0),
(127, 1, 'First Semester', 'CS-5', 'Lab101', '07:00', '08:00', 'Monday', 'rgb(0, 192, 239)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `strand_code` varchar(50) NOT NULL,
  `year_level_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `capacity` int(2) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `strand_code`, `year_level_id`, `name`, `capacity`, `status`) VALUES
(1, 'STEM', 1, 'A', 40, 'active'),
(2, 'GAS', 1, 'A', 40, 'active'),
(3, 'HUMSS', 1, 'A', 40, 'active'),
(4, 'TVL-HE', 1, 'A', 40, 'active'),
(5, 'TVL-AS', 1, 'A', 40, 'active'),
(6, 'ABM', 1, 'A', 40, 'active'),
(7, 'ABM', 2, 'A', 45, 'active'),
(8, 'TVL-AS', 2, 'A', 45, 'active'),
(9, 'HUMSS', 2, 'A', 45, 'active'),
(10, 'GAS', 2, 'A', 45, 'active'),
(11, 'STEM', 2, 'A', 45, 'active'),
(12, 'TVL-HE', 2, 'A', 45, 'active'),
(13, 'STEM', 1, 'B', 45, 'active'),
(14, 'GAS', 1, 'B', 45, 'active'),
(15, 'HUMSS', 1, 'B', 45, 'active'),
(16, 'TVL-HE', 1, 'B', 45, 'active'),
(17, 'TVL-AS', 1, 'B', 45, 'active'),
(18, 'ABM', 1, 'B', 45, 'active'),
(20, 'STEM', 1, 'C', 40, 'active'),
(21, 'STEM', 1, 'D', 45, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `strands`
--

CREATE TABLE `strands` (
  `id` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `name` varchar(60) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `date_created` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strands`
--

INSERT INTO `strands` (`id`, `code`, `name`, `status`, `date_created`) VALUES
(1, 'STEM', 'Science, Technology, Engineering and Mathematics', 'active', '2018-01-17 14:54:40'),
(2, 'GAS', 'General Academic Strand', 'active', '0000-00-00 00:00:00'),
(3, 'HUMSS', 'Humanities and Social Sciences', 'active', '0000-00-00 00:00:00'),
(4, 'TVL-HE', 'Technical Vocational and Livelihood - Home Economics', 'active', '0000-00-00 00:00:00'),
(5, 'TVL-AS', 'Technical Vocational and Livelihood - Automative Services', 'active', '0000-00-00 00:00:00'),
(6, 'ABM', 'Accounting and Business Management', 'active', '0000-00-00 00:00:00'),
(17, 'asd', 'asd', 'inactive', '0000-00-00 00:00:00'),
(18, '123', 'asd', 'inactive', '0000-00-00 00:00:00'),
(19, '1231', 'asdasda', 'inactive', '0000-00-00 00:00:00'),
(20, 'BSIS4', 'BS Information System 5', 'inactive', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `id` int(11) NOT NULL,
  `lrn` int(12) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `mother_tongue` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `online_applicant` bit(1) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `sex`, `contact_number`, `birth_date`, `birth_place`, `age`, `mother_tongue`, `religion`, `online_applicant`, `date_registered`, `date_modified`) VALUES
(1, 14, 'Diether', '', 'Francia', 'Male', '09111111111', '1998-10-12', 'Caloocan City', 19, 'Tagalog', 'Catholic', b'0', '2017-10-12 04:44:58', '2017-10-12 04:44:58'),
(2, 14038014, 'Marc', 'Dominic', 'Terrobias', 'Male', '09222222222', '1998-10-13', 'Monumento City', 18, 'Filipino', 'Roman Catholic', b'0', '2017-10-12 04:47:46', '2017-10-12 04:47:46'),
(3, 14038001, 'Justin', '', 'Encarnacion', 'Male', '09222222222', '1997-02-22', 'Kawit', 20, 'Filipino', 'Roman Catholic', b'0', '2017-10-12 04:49:23', '2017-10-12 04:49:23'),
(4, 14038002, 'Shiela May', '', 'Morales', 'Female', '0955-887-4822', '2017-10-17', 'Mandaluyong City', 0, 'Filipino', 'Roman Catholic', b'0', '2017-10-12 05:07:05', '2017-10-12 05:07:05'),
(5, 14038003, 'Jasver', '', 'Salva', 'Female', '0955-887-4822', '1998-10-12', 'Cavite', 19, 'Filipino', 'Roman Catholic', b'0', '2017-10-12 05:08:38', '2017-10-12 05:08:38'),
(6, 14038019, 'Shan', '', 'Zulueta', 'Female', '12312312312', '2018-01-18', 'Mandaluyong City', 0, 'Filipino', 'Roman Catholic', b'0', '2018-01-16 07:09:16', '2018-01-16 07:09:16'),
(7, 14038069, 'Patrick', '', 'Guzman', 'Male', '0955-887-4822', '1997-01-09', 'Paco, Manila', 21, 'Filipino', 'Roman Catholic', b'0', '2018-01-19 13:46:19', '2018-01-19 13:46:19'),
(8, 14038070, 'Patrick', '', 'Guzman', 'Male', '09222222222', '2018-01-19', 'Paco, Manila', 0, 'Filipino', 'Roman Catholic', b'0', '2018-01-19 14:17:31', '2018-01-19 14:17:31'),
(9, 14038059, 'Aaron James', '', 'Alcantara', 'Male', '0955-887-4822', '1995-03-03', 'Pasig', 22, 'Filipino', 'Roman Catholic', b'0', '2018-01-19 18:24:51', '2018-01-19 18:24:51'),
(10, 14038005, 'John Robert', '', 'Capistrano', 'Male', '0955-887-4822', '1997-04-13', 'Bulacan', 20, 'Filipino', 'Roman Catholic', b'0', '2018-01-19 19:29:58', '2018-01-19 19:29:58'),
(11, 14038096, 'Meliton', '', 'Lazaro', 'Male', '0955-887-4822', '1997-02-23', 'Taguig', 20, 'Filipino', 'Roman Catholic', b'0', '2018-01-22 09:57:31', '2018-01-22 09:57:31'),
(12, 14038021, 'Christine', '', 'Canimo', 'Female', '0955-887-4822', '2018-01-25', 'Antipolo', 0, 'Filipino', 'Roman Catholic', b'0', '2018-01-25 03:27:50', '2018-01-25 03:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `student_contacts`
--

CREATE TABLE `student_contacts` (
  `id` int(11) NOT NULL,
  `students_info_lrn` varchar(15) NOT NULL,
  `parents_id` int(11) NOT NULL,
  `guardian_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_contacts`
--

INSERT INTO `student_contacts` (`id`, `students_info_lrn`, `parents_id`, `guardian_id`) VALUES
(1, '14', 1, 1),
(2, '14038014', 2, 2),
(3, '14038001', 3, 3),
(4, '14038002', 4, 4),
(5, '14038003', 5, 5),
(6, '14038070', 8, 6),
(7, '14038059', 9, 7),
(8, '14038005', 10, 8),
(9, '14038096', 11, 9),
(10, '14038021', 12, 10);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `code`, `name`, `type`, `description`, `status`, `date_created`, `date_modified`) VALUES
(9, 'CS-1', 'Oral Communication', 'Core Subject', '', 'inactive', NULL, NULL),
(10, 'CS-2', 'Personal Development', 'Core Subject', '', 'inactive', NULL, NULL),
(11, 'CS-3', 'Introduction to the Philosophy of the Human Person', 'Core Subject', '', 'active', NULL, NULL),
(12, 'CS-4', 'Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino', 'Core Subject', '', 'active', NULL, NULL),
(13, 'CS-5', 'General Mathematics', 'Core Subject', '', 'active', NULL, NULL),
(14, 'CS-6', 'Earth and Life Science', 'Core Subject', '', 'active', NULL, NULL),
(15, 'CS-7', 'PE and Health 1', 'Core Subject', '', 'active', NULL, NULL),
(16, 'SS-HUMSS-1', 'Philippine Politics and Governance', 'Specialized Subjects', '', 'active', NULL, NULL),
(17, 'SS-HUMSS-2', 'Discipline and Ideas in the Social Sciences', 'Specialized Subjects', '', 'active', NULL, NULL),
(18, 'SS-GAS-1', 'Elective 1 - General Biology 1', 'Specialized Subject', '', 'active', NULL, NULL),
(19, 'SS-HE-1', 'Food and Beverages Services 1 and 2', 'Specialized Subjects', '', 'active', NULL, NULL),
(20, 'SS-AUTOMOTIVE-1', 'Automotive Servicing 1 and 2', 'Specialized Subjects', '', 'active', NULL, NULL),
(21, 'SS-GAS SS-ABM', 'Organization and Management', 'Specialized Subjects', '', 'active', NULL, NULL),
(22, 'SS-ABM-1', 'Fundamentals of Accountancy, Business and Management 1', 'Specialized Subject', '', 'active', NULL, NULL),
(23, 'SS-STEM-1', 'Precalculus', 'Specialized Subject', '', 'active', NULL, NULL),
(24, 'SS-STEM-2', 'General Chemistry 1', 'Specialized Subject', 'ASD', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sex` enum('male','female') DEFAULT NULL,
  `major` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `advisory_class` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `birthdate`, `contact_no`, `email`, `sex`, `major`, `position`, `advisory_class`, `status`) VALUES
(1, '0001', 'Adrielle', 'Mestiola', 'Escaro', '', '', '', 'male', 'Computer', 'Teacher', '1', 'active'),
(2, '0002', 'John', 'Patrick', 'Guzman', '', '', '', 'male', 'Social Science', 'Teacher', '20', 'active'),
(3, '0003', 'Hannah', 'Patricia', 'Liao', '', '', '', 'male', 'Mathematics', 'Teacher', '21', 'active'),
(4, '0004', 'Aljohn', '', 'Pangilinan', '', '', '', 'male', 'Science', 'Teacher', '11', 'active'),
(5, '0005', 'May', '', 'Garcia', '', '', '', 'male', 'SAD', 'Teacher', '13', 'active'),
(9, '0006', 'Jasver', '', 'Salva', '', '', '', 'male', 'Computer Science', 'Teacher 1', '', 'inactive'),
(10, '0007', 'Aaron James', '', 'Alcantara', '', '', '', 'male', 'English', 'Teacher 1', '', 'active'),
(11, '0008', 'Jeru', '', 'Valenzuela', '01/10/2018', '09558874822', 'jeru_valenzuela@tup.edu.ph', 'female', 'English', 'Teacher 2', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `major` varchar(50) NOT NULL,
  `advisory_class` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_id`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `position`, `sex`, `birthdate`, `contact_no`, `email`, `major`, `advisory_class`, `status`, `date_created`, `date_modified`) VALUES
(1, '14038014', 'admin', 'admin', 'Hakeem', '', 'Polistico', 'Administrator', 'Male', '1994/07/22', '0955-887-4822', 'hakeem.polistico@tup.edu.ph', 'Mathematics', 0, 'active', '2017-10-12 04:21:44', '2017-10-12 04:21:44'),
(2, '0001', '0001', 'password', 'Adrielle', '', 'Escaro', 'Teacher', 'Female', '1998/06/24', '09355156653', 'adrielle.escaro@tup.edu.ph', 'English', 0, 'active', '2017-10-12 04:21:44', '2017-10-12 04:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `year_levels`
--

CREATE TABLE `year_levels` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_levels`
--

INSERT INTO `year_levels` (`id`, `name`) VALUES
(1, 'Grade 11'),
(2, 'Grade 12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_trail`
--
ALTER TABLE `audit_trail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registered_student_lrn` (`students_info_lrn`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_students`
--
ALTER TABLE `registered_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strands`
--
ALTER TABLE `strands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`id`,`lrn`);

--
-- Indexes for table `student_contacts`
--
ALTER TABLE `student_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `year_levels`
--
ALTER TABLE `year_levels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_years`
--
ALTER TABLE `academic_years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `class_subjects`
--
ALTER TABLE `class_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `registered_students`
--
ALTER TABLE `registered_students`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `strands`
--
ALTER TABLE `strands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `student_contacts`
--
ALTER TABLE `student_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `year_levels`
--
ALTER TABLE `year_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
