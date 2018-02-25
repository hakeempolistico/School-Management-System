-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 10:01 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

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
  `status` enum('active','inactive') NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`id`, `year_start`, `year_end`, `status`, `date_created`, `date_modified`) VALUES
(1, 2017, 2018, 'active', '2018-02-25 09:55:51', '2017-10-12 04:51:42'),
(2, 2018, 2019, 'inactive', '2018-02-25 09:55:55', '2018-01-15 07:44:47');

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
(12, 14038021, '213', 'Brgy. 125', 'Caloocan City', 'Manila'),
(13, 2147483647, '#211 Barietto st.', 'Talaba I', 'Bacoor City', 'Cavite'),
(14, 897489232, 'fskdfhsdkj', 'hkjfdshkfj', 'kfskjdfh', 'kfsjkdhf'),
(15, 1231132333, '13123', 'Barangay', 'City', 'Province'),
(16, 2147483647, '226-b', 'Talaba I', 'Bacoor City', 'Cavite'),
(17, 78423973, '#211ehjf', 'sdmfbds', 'fshkdjfsh', 'kjfkjg'),
(18, 1233332123, '123', 'Brgy', 'City', 'Province'),
(19, 1228399495, '123', 'Brgy', 'City', 'Province'),
(20, 2147483647, '121231b', 'Brgy', 'City', 'Province'),
(21, 2147483647, '1231231', 'Barangay', 'City', 'Province'),
(22, 2147483647, '1231231231231', 'Barangay', 'City', 'Province'),
(23, 2147483647, '12312312', 'Barangay', 'City', 'Province'),
(24, 2147483647, '1231231', 'Barangay', 'City', 'Province'),
(25, 1231231235, '226-b', 'Brgy', 'City', 'Province'),
(26, 2147483647, '226-b', 'Brgy', 'City', 'Province'),
(27, 2147483647, '#211ehjf', 'Barangay', 'CItyyy', 'Provincee'),
(28, 0, 'Philippines', 'Philippines', 'Philippines', 'Philippines'),
(29, 2147483647, '2214C', 'Barangay', 'City', 'Province'),
(30, 981237122, '121231C', 'Barangay', 'City', 'Province'),
(31, 2147483647, '12312313', 'Barangay', 'City', 'Province'),
(32, 123122, '1231', 'Barangay', 'City', 'Province'),
(33, 4321, '2131231', 'Barangay', 'City', 'Province'),
(34, 54321, '9812', 'Barangay', 'City', 'Province');

-- --------------------------------------------------------

--
-- Table structure for table `advisory_class`
--

CREATE TABLE `advisory_class` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `section_id` int(11) NOT NULL,
  `academic_year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisory_class`
--

INSERT INTO `advisory_class` (`id`, `employee_id`, `section_id`, `academic_year`) VALUES
(1, '0001', 1, 1),
(2, '0002', 2, 1),
(3, '0003', 10, 1),
(4, '0004', 11, 1);

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
(1, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-02-25 06:57:00'),
(2, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-02-25 07:54:55'),
(3, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-02-25 07:55:13'),
(4, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-02-25 07:56:02'),
(5, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-02-25 07:56:05'),
(6, 'Administrator - Hakeem Polistico', 'Academics', 'Assign Subjects', 'Saved Data', 'Saved subjects for STEM-11A', '2018-02-25 08:13:25'),
(7, 'Administrator - Hakeem Polistico', 'Academics', 'Assign Subjects', 'Saved Data', 'Saved subjects for STEM-11A', '2018-02-25 08:13:52'),
(8, 'Administrator - Hakeem Polistico', 'Academics', 'Assign Subjects', 'Saved Data', 'Saved subjects for STEM-11A', '2018-02-25 08:16:03'),
(9, 'Administrator - Hakeem Polistico', 'Academics', 'Schedule', 'Saved Data', 'Saved schedule for STEM-11A', '2018-02-25 08:22:52'),
(10, 'Administrator - Hakeem Polistico', 'Academics', 'Assign Advisory Class', 'Assigned Class', 'Adrielle Mestiola Escaro assigned to -12', '2018-02-25 08:45:21'),
(11, 'Administrator - Hakeem Polistico', 'Academics', 'Assign Advisory Class', 'Assigned Class', 'John Patrick Guzman assigned to -12', '2018-02-25 08:45:48'),
(12, 'Administrator - Hakeem Polistico', 'Academics', 'Assign Advisory Class', 'Assigned Class', 'Hannah Patricia Liao assigned to -12', '2018-02-25 08:46:28'),
(13, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-02-25 09:26:07'),
(14, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-02-25 09:26:10'),
(15, 'Administrator - Hakeem Polistico', 'Academics', 'Curriculum', 'Added Data', 'CS-5 to STEM11 First Semester', '2018-02-25 09:26:35'),
(16, 'Administrator - Hakeem Polistico', 'Academics', 'Curriculum', 'Added Data', 'CS-4 to STEM11 First Semester', '2018-02-25 09:26:35'),
(17, 'Administrator - Hakeem Polistico', 'Academics', 'Curriculum', 'Added Data', 'SS-HUMSS-1 to STEM11 First Semester', '2018-02-25 09:26:35'),
(18, 'Administrator - Hakeem Polistico', 'Academics', 'Curriculum', 'Added Data', 'CS-7 to STEM11 First Semester', '2018-02-25 09:26:35'),
(19, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-02-25 09:29:35'),
(20, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-02-25 09:29:54'),
(21, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-02-25 09:43:39'),
(22, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-02-25 09:43:57'),
(23, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-02-25 09:48:07'),
(24, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-02-25 09:48:10'),
(25, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-02-25 09:48:22'),
(26, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-02-25 09:48:35'),
(27, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-02-25 09:53:42'),
(28, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-02-25 09:53:56'),
(29, 'Administrator - Hakeem Polistico', '-', '-', 'Logged Out', '-', '2018-02-25 09:55:34'),
(30, ' -  ', '-', '-', 'Logged Out', '-', '2018-02-25 09:55:57'),
(31, 'Administrator - Hakeem Polistico', '-', '-', 'Logged In', '-', '2018-02-25 09:56:00');

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
  `academic_year` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_subjects`
--

INSERT INTO `class_subjects` (`id`, `section_id`, `subject_id`, `teacher_id`, `semester`, `academic_year`, `date_created`) VALUES
(23, 1, 'CS-6', '0005', 'Second Semester', 1, '2018-02-25 08:16:03'),
(22, 1, 'SS-STEM-1', '0001', 'Second Semester', 1, '2018-02-25 08:16:03'),
(21, 1, 'CS-7', '0004', 'Second Semester', 1, '2018-02-25 08:16:03'),
(19, 1, 'CS-7', '0004', 'First Semester', 1, '2018-02-25 08:16:02'),
(20, 1, 'SS-HUMSS-1', '0001', 'First Semester', 1, '2018-02-25 08:16:03'),
(18, 1, 'CS-5', '0002', 'First Semester', 1, '2018-02-25 08:16:02'),
(17, 1, 'CS-4', '0003', 'First Semester', 1, '2018-02-25 08:16:02'),
(24, 1, 'SS-STEM-2', '0003', 'Second Semester', 1, '2018-02-25 08:16:03');

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
(54, 'SS-HUMSS-1', 'STEM', 1, 'First Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'CS-4', 'STEM', 1, 'First Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'SS-STEM-1', 'STEM', 1, 'Second Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'CS-6', 'STEM', 1, 'Second Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'SS-STEM-2', 'STEM', 1, 'Second Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'CS-7', 'STEM', 1, 'Second Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'CS-4', 'GAS', 1, 'First Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'CS-5', 'STEM', 1, 'First Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'CS-7', 'STEM', 1, 'First Semester', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(5, 14038003, '', '1', 1, '2018-02-25 09:33:18', '2018-02-25 09:33:18'),
(6, 14038070, '', '1', 1, '2018-02-25 09:33:54', '2018-02-25 09:33:54'),
(7, 14038059, 'No shoes', '6', 1, '2018-02-25 09:33:54', '2018-02-25 09:33:54'),
(8, 14038005, '', '1', 1, '2018-02-25 09:33:54', '2018-02-25 09:33:54'),
(9, 14038096, '', '1', 1, '2018-02-25 09:33:54', '2018-02-25 09:33:54'),
(10, 14038021, '', '6', 1, '2018-02-25 09:33:54', '2018-02-25 09:33:54'),
(11, 2147483647, 'Kalbo', '3', 1, '2018-02-25 09:33:54', '2018-02-25 09:33:54'),
(12, 1231132333, '', '1', 1, '2018-02-25 09:33:54', '2018-02-25 09:33:54'),
(13, 897489232, '', '1', 1, '2018-02-25 09:33:54', '2018-02-25 09:33:54'),
(14, 78423973, '', '1', 1, '2018-02-25 09:33:54', '2018-02-25 09:33:54'),
(15, 1233332123, '', '13', 1, '2018-02-25 09:55:01', '2018-02-25 09:55:01'),
(16, 1228399495, '', '2', 1, '2018-02-25 09:33:54', '2018-02-25 09:33:54');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `lrn` varchar(20) NOT NULL,
  `semester` enum('First Semester','Second Semester') NOT NULL,
  `quarter` enum('First Quarter','Second Quarter') NOT NULL,
  `academic_year` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `grade` decimal(11,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `lrn`, `semester`, `quarter`, `academic_year`, `subject_code`, `grade`) VALUES
(1, '14038014', 'First Semester', 'First Quarter', 1, 'CS-7', '85.0');

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
(10, 14038021, 'Anne Curtis', '0955-887-4822', 'Mother', '213, Brgy. 125, Caloocan City, Manila'),
(11, 2147483647, 'Father Name', '3246238427', 'Father', 'Somewhere over the rainbow'),
(12, 897489232, 'afkjhsdjk', '0979687689', 'Father', 'fskdfhsdkj, hkjfdshkfj, kfskjdfh, kfsjkdhf'),
(13, 1231132333, 'Father Brila', '0979687689', 'Father', '13123, Barangay, City, Province'),
(14, 2147483647, 'Father Brila', '0955-887-4822', 'Father', '226-b, Talaba I, Bacoor City, Cavite'),
(15, 78423973, 'dfndskjf', '389242', 'Father', '#211ehjf, sdmfbds, fshkdjfsh, kjfkjg'),
(16, 1233332123, 'Father Brila', '0955-887-4822', 'Father', '12, Brgy, City, Province'),
(17, 1228399495, 'N/A', '0901122344', 'Father', '123, Brgy, City, Province'),
(18, 2147483647, 'Father Brila', '09111111111', 'Father', '12, Brgy, City, Province'),
(19, 2147483647, 'Father Brila', '09111111111', 'Father', '1231231, Barangay, City, Province'),
(20, 2147483647, 'Father Brila', '09111111111', 'Father', '1231231231231, Barangay, City, Province'),
(21, 2147483647, 'Father Brila', '09111111111', 'Father', '12312312, Barangay, City, Province'),
(22, 2147483647, 'Father Brila', '09111111111', 'Father', '1231231, Barangay, City, Province'),
(23, 1231231235, 'Father Brila', '09111111111', 'Father', '226-b, Brgy, City, Province'),
(24, 2147483647, 'Father Brila', '09111111111', 'Father', '226-b, Brgy, City, Province'),
(25, 2147483647, 'Father Brila', '3242424', 'Father', '#211ehjf, Barangay, CItyyy, Provincee'),
(26, 0, 'Mother Capistrano', '0111111111', 'Mother', 'Philippines'),
(27, 2147483647, 'Father Brila', '09111111111', 'Father', '2214C, Barangay, City, Province'),
(28, 981237122, 'Father Polistico', '09111111111', 'Father', '121231C, Barangay, City, Province'),
(29, 2147483647, 'Father Polistico', '09111111111', 'Father', '12312313, Barangay, City, Province'),
(30, 123122, 'Father Polistico', '09111111111', 'Father', '1231, Barangay, City, Province'),
(31, 4321, 'Father Polistico', '09111111111', 'Father', '2131231, Barangay, City, Province'),
(32, 54321, 'Father Polistico', '09111111111', 'Father', '9812, Barangay, City, Province');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module_name`, `status`) VALUES
(1, 'Enrollment', 'inactive'),
(2, 'Academics', 'inactive'),
(7, 'Student Promotion', 'active'),
(8, 'Grades Management', 'active'),
(9, 'Teachers', 'inactive'),
(10, 'Strands', 'inactive'),
(11, 'Rooms', 'inactive'),
(12, 'Sections', 'inactive'),
(13, 'Subjects', 'inactive'),
(14, 'Curriculum', 'inactive'),
(15, 'Assign Subjects', 'inactive'),
(16, 'Schedule', 'inactive'),
(17, 'Assign Advisory', 'inactive');

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
(12, 14038021, 'Anne Curtis', '0955-887-4822', 'Tom Cruise', '0955-887-4822'),
(13, 2147483647, 'Mother Name', '8953875634', 'Father Name', '3246238427'),
(14, 897489232, 'jkgjh', '8796756', 'afkjhsdjk', '0979687689'),
(15, 1231132333, 'Mother Brila', '0955-887-4822', 'Father Brila', '0979687689'),
(16, 2147483647, 'Mother Brila', '09111111112', 'Father Brila', '0955-887-4822'),
(17, 78423973, 'hfdsfsdfs', '432876', 'dfndskjf', '389242'),
(18, 1233332123, 'Marissa Tomei', '09111111112', 'Father Brila', '0955-887-4822'),
(19, 1228399495, 'Marissa Tomei', '0955-887-4822', 'N/A', '0901122344'),
(20, 2147483647, 'Marissa Tomei', '09111111112', 'Father Brila', '09111111111'),
(21, 2147483647, 'Mother Brila', '09111111112', 'Father Brila', '09111111111'),
(22, 2147483647, 'Mother Brila', '09111111112', 'Father Brila', '09111111111'),
(23, 2147483647, 'Mother Brila', '09111111112', 'Father Brila', '09111111111'),
(24, 2147483647, 'Mother Brila', '09111111112', 'Father Brila', '09111111111'),
(25, 1231231235, 'Marissa Tomei', '09111111112', 'Father Brila', '09111111111'),
(26, 2147483647, 'Marissa Tomei', '09111111112', 'Father Brila', '09111111111'),
(27, 2147483647, 'Motherrrr', '55424234', 'Father Brila', '3242424'),
(28, 0, 'Mother Capistrano', '0111111111', 'Father Capistrano', '099999999'),
(29, 2147483647, 'Mother Brila', '09111111112', 'Father Brila', '09111111111'),
(30, 981237122, 'Mother Polistico', '09111111112', 'Father Polistico', '09111111111'),
(31, 2147483647, 'Mother Polistico', '09111111112', 'Father Polistico', '09111111111'),
(32, 123122, 'Mother Polistico', '09111111112', 'Father Polistico', '09111111111'),
(33, 4321, 'Mother Polistico', '09111111112', 'Father Polistico', '09111111111'),
(34, 54321, 'Mother Polistico', '09111111112', 'Father Polistico', '09111111111');

-- --------------------------------------------------------

--
-- Table structure for table `registered_students`
--

CREATE TABLE `registered_students` (
  `id` int(15) NOT NULL,
  `students_info_lrn` varchar(15) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_students`
--

INSERT INTO `registered_students` (`id`, `students_info_lrn`, `date_registered`) VALUES
(31, '54321', '2018-02-22 13:21:53'),
(30, '4321', '2018-02-22 13:13:22'),
(29, '123122', '2018-02-22 13:11:17');

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
(30, '14038021', 'form 138', '2018-01-25 03:30:14'),
(31, '2147483647', 'NSO Birth Certificate', '2018-02-06 12:53:29'),
(32, '2147483647', 'Form 137', '2018-02-06 12:53:29'),
(33, '2147483647', 'form 138', '2018-02-06 12:53:29'),
(34, '1231132333', 'NSO Birth Certificate', '2018-02-22 03:53:30'),
(35, '1231132333', 'Form 137', '2018-02-22 03:53:30'),
(36, '1231132333', 'form 138', '2018-02-22 03:53:30'),
(37, '897489232', 'NSO Birth Certificate', '2018-02-22 04:51:47'),
(38, '897489232', 'Form 137', '2018-02-22 04:51:47'),
(39, '897489232', 'form 138', '2018-02-22 04:51:47'),
(40, '78423973', 'NSO Birth Certificate', '2018-02-22 05:33:19'),
(41, '78423973', 'Form 137', '2018-02-22 05:33:19'),
(42, '78423973', 'form 138', '2018-02-22 05:33:19'),
(43, '1233332123', 'NSO Birth Certificate', '2018-02-22 06:34:00'),
(44, '1233332123', 'Form 137', '2018-02-22 06:34:00'),
(45, '1233332123', 'form 138', '2018-02-22 06:34:00'),
(46, '1228399495', 'NSO Birth Certificate', '2018-02-22 07:04:17'),
(47, '1228399495', 'Form 137', '2018-02-22 07:04:17'),
(48, '1228399495', 'form 138', '2018-02-22 07:04:17');

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
  `academic_year` int(11) NOT NULL,
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

INSERT INTO `schedules` (`id`, `section_id`, `semester`, `academic_year`, `subject_code`, `room_id`, `time_start`, `time_end`, `day`, `color`, `row`) VALUES
(1, 1, 'First Semester', 1, 'SS-HUMSS-1', 'Lab101', '07:00', '08:00', 'Thursday', 'rgb(221, 75, 57)', 0),
(2, 1, 'First Semester', 1, 'SS-HUMSS-1', 'Lab101', '07:00', '08:00', 'Wednesday', 'rgb(221, 75, 57)', 0),
(3, 1, 'First Semester', 1, 'SS-HUMSS-1', 'Lab101', '07:00', '08:00', 'Friday', 'rgb(221, 75, 57)', 0),
(4, 1, 'First Semester', 1, 'SS-HUMSS-1', 'Lab101', '07:00', '08:00', 'Monday', 'rgb(221, 75, 57)', 0),
(5, 1, 'First Semester', 1, 'SS-HUMSS-1', 'Lab101', '07:00', '08:00', 'Tuesday', 'rgb(221, 75, 57)', 0);

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
  `date_created` timestamp NOT NULL,
  `grade_requirement` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strands`
--

INSERT INTO `strands` (`id`, `code`, `name`, `status`, `date_created`, `grade_requirement`) VALUES
(1, 'STEM', 'Science, Technology, Engineering and Mathematics', 'active', '2018-02-06 05:30:57', 85),
(2, 'GAS', 'General Academic Strand', 'active', '2018-02-06 05:30:57', 65),
(3, 'HUMSS', 'Humanities and Social Sciences', 'active', '2018-02-06 05:30:57', 85),
(4, 'TVL-HE', 'Technical Vocational and Livelihood - Home Economics', 'active', '2018-02-06 05:30:57', 65),
(5, 'TVL-AS', 'Technical Vocational and Livelihood - Automative Services', 'active', '2018-02-06 05:30:57', 65),
(6, 'ABM', 'Accounting and Business Management', 'active', '2018-02-06 05:30:57', 85),
(25, 'CS', 'Computer Sciences', 'inactive', '0000-00-00 00:00:00', NULL),
(24, 'IS', 'Information System', 'inactive', '0000-00-00 00:00:00', NULL),
(23, 'IT', 'Information Technology', 'inactive', '0000-00-00 00:00:00', NULL);

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
(12, 14038021, 'Christine', '', 'Canimo', 'Female', '0955-887-4822', '2018-01-25', 'Antipolo', 0, 'Filipino', 'Roman Catholic', b'0', '2018-01-25 03:27:50', '2018-01-25 03:27:50'),
(13, 2147483647, 'Fernando', '', 'Renegado', 'Male', '479382424', '1998-10-27', 'Quezon City', 19, 'Tagalog', 'Catholic', b'0', '2018-02-22 06:22:04', '2018-02-22 06:22:04'),
(14, 897489232, 'dhjkdf', 'jhjkhk', 'jhkhjkh', 'Male', '75675765', '1994-07-20', 'dsjfkhfj', 23, 'jhjfdkshfkj', 'jhfkshskjdfh', b'0', '2018-02-06 12:54:41', '2018-02-06 12:54:41'),
(15, 1231132333, 'Jasver', 'Anlouise', 'Salva', 'Female', '0955-887-4822', '1998-02-06', 'daasdda', 20, 'Filipino', 'Catholic', b'0', '2018-02-22 03:52:14', '2018-02-22 03:52:14'),
(16, 2147483647, 'jasver', 'andaya', 'salva', 'Female', '09222222222', '1998-10-12', 'Muntinlupa', 19, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 04:47:40', '2018-02-22 04:47:40'),
(17, 78423973, 'Stay', 'Woke', 'Cake', 'Female', '43242342', '1994-07-22', 'Quezon City', 23, 'Tagalog', 'Catholic', b'0', '2018-02-22 05:32:31', '2018-02-22 05:32:31'),
(18, 1233332123, 'Justin', 'Andaya', 'Salva', 'Female', '0955-887-4822', '1998-02-07', 'Imus', 20, 'Filipino', 'Catholic', b'0', '2018-02-22 06:32:14', '2018-02-22 06:32:14'),
(19, 1228399495, 'Jasver', 'Anlouise', 'Salva', 'Female', '09162658478', '1999-02-11', 'Imus', 19, 'Filipino', 'Catholic', b'0', '2018-02-22 07:01:39', '2018-02-22 07:01:39'),
(20, 2147483647, 'Hello', 'Monday', 'Tuesday', 'Male', '09222222222', '1998-02-05', 'Mandaluyong City', 20, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 07:23:34', '2018-02-22 07:23:34'),
(21, 2147483647, 'Hello', 'Tuesday', 'Monday', 'Male', '09222222222', '1997-01-16', 'Mandaluyong City', 21, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 07:25:13', '2018-02-22 07:25:13'),
(22, 2147483647, 'Hello', 'Monday', 'Friday', 'Male', '09222222222', '2018-02-05', 'Monumento City', 0, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 07:27:48', '2018-02-22 07:27:48'),
(23, 2147483647, 'hakeem', 'polistico', 'andaya', 'Male', '09222222222', '1998-02-08', 'Mandaluyong City', 20, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 07:34:27', '2018-02-22 07:34:27'),
(24, 2147483647, 'hakem', 'asdfsa', 'ASDAS', 'Male', '09222222222', '1979-02-22', 'Mandaluyong City', 39, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 07:41:32', '2018-02-22 07:41:32'),
(25, 1231231235, 'Hakeem', 'Andaya', 'POlisticod', 'Male', '09222222222', '2018-02-14', 'Mandaluyong City', 0, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 07:43:39', '2018-02-22 07:43:39'),
(26, 2147483647, 'Hakeem', 'Andaya', 'POlisticod', 'Male', '09222222222', '2018-02-14', 'Mandaluyong City', 0, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 07:44:14', '2018-02-22 07:44:14'),
(27, 2147483647, 'Ivann', 'Marc', 'Biblanias', 'Male', '4234234', '1998-02-22', 'Hospital Bed', 20, 'Mother Tonguw', 'Catholic', b'0', '2018-02-22 07:57:37', '2018-02-22 07:57:37'),
(28, 0, 'John', 'Robert', 'Capistrano', 'Male', '092222654456', '1997-08-24', 'PGHospital', 20, 'Tagalog', 'Catholic', b'0', '2018-02-22 08:01:36', '2018-02-22 08:01:36'),
(29, 2147483647, 'Daniel', 'Andaya', 'Polistico', 'Male', '09222222222', '1998-02-14', 'Mandaluyong City', 20, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 12:46:07', '2018-02-22 12:46:07'),
(30, 98123712, 'Joseph', 'Andaya', 'Polistico', 'Male', '09222222222', '1993-01-29', 'Mandaluyong City', 25, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 12:52:35', '2018-02-22 12:52:35'),
(31, 981237122, 'Joseph', 'Andaya', 'Polistico', 'Male', '09222222222', '1993-01-29', 'Mandaluyong City', 25, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 12:53:32', '2018-02-22 12:53:32'),
(32, 2147483647, 'Gayle', 'Andaya', 'Polistico', 'Female', '09222222222', '1992-03-26', 'Monumento City', 25, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 12:58:45', '2018-02-22 12:58:45'),
(33, 123122, 'Jerry', 'Andaya', 'Polistico', 'Male', '09222222222', '1994-02-05', 'Muntinlupa', 24, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 13:11:17', '2018-02-22 13:11:17'),
(34, 4321, 'Jerome', 'Andaya', 'Polistio', 'Male', '09222222222', '1994-02-15', 'Muntinlupa', 24, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 13:13:22', '2018-02-22 13:13:22'),
(35, 54321, 'Jeremy', 'Andaya', 'Polistico', 'Male', '09222222222', '1997-02-22', 'Muntinlupa', 21, 'Filipino', 'Roman Catholic', b'0', '2018-02-22 13:21:53', '2018-02-22 13:21:53');

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
(10, '14038021', 12, 10),
(11, '2147483647', 13, 11),
(12, '897489232', 14, 12),
(13, '1231132333', 15, 13),
(14, '2147483647', 16, 14),
(15, '78423973', 17, 15),
(16, '1233332123', 18, 16),
(17, '1228399495', 19, 17),
(18, '2147483647', 20, 18),
(19, '2147483647', 21, 19),
(20, '2147483647', 22, 20),
(21, '2147483647', 23, 21),
(22, '2147483647', 24, 22),
(23, '1231231235', 25, 23),
(24, '2147483647', 26, 24),
(25, '2147483647', 27, 25),
(26, '0', 28, 26),
(27, '2147483647', 29, 27),
(28, '981237122', 30, 28),
(29, '12131312314123', 31, 29),
(30, '123122', 32, 30),
(31, '4321', 33, 31),
(32, '54321', 34, 32);

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
(1, '0001', 'Adrielle', 'Mestiola', 'Escaro', '', '', '', 'male', 'Computer', 'Teacher', '', 'active'),
(2, '0002', 'John', 'Patrick', 'Guzman', '', '', '', 'male', 'Social Science', 'Teacher', '', 'active'),
(3, '0003', 'Hannah', 'Patricia', 'Liao', '', '', '', 'male', 'Mathematics', 'Teacher', '', 'active'),
(4, '0004', 'Aljohn', '', 'Pangilinan', '', '', '', 'male', 'Science', 'Teacher', '', 'active'),
(5, '0005', 'May', '', 'Garcia', '', '', '', 'male', 'SAD', 'Teacher', '', 'active'),
(9, '0006', 'Jasver', '', 'Salva', '', '', '', 'male', 'Computer Science', 'Teacher 1', '', 'inactive'),
(10, '0007', 'Aaron James', '', 'Alcantara', '', '', '', 'male', 'English', 'Teacher 1', '', 'inactive'),
(11, '0009', 'Jeru', '', 'Valenzuela', '01/10/2018', '09558874822', 'jeru_valenzuela@tup.edu.ph', 'female', 'English', 'Teacher 2', '', 'inactive');

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
  `user_role` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_id`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `position`, `sex`, `birthdate`, `contact_no`, `email`, `major`, `advisory_class`, `user_role`, `status`, `date_created`, `date_modified`) VALUES
(1, '14038014', 'admin', 'admin', 'Hakeem', '', 'Polistico', 'Administrator', 'Male', '1994/07/22', '0955-887-4822', 'hakeem.polistico@tup.edu.ph', 'Mathematics', 0, 'admin', 'active', '2017-10-12 04:21:44', '2018-02-05 06:11:19'),
(12, '0001', '0001', 'password', 'Adrielle', 'Mestiola', 'Escaro', 'Teacher', 'male', '', '', '', 'Computer', 1, 'teacher', 'active', '2018-02-09 17:48:22', '0000-00-00 00:00:00'),
(16, '0005', '0005', 'P@ssword123', 'May', '', 'Garcia', 'Teacher', 'male', '', '', '', 'SAD', 13, 'teacher', 'active', '2018-02-19 18:05:22', '0000-00-00 00:00:00'),
(17, '0008', '0008', 'P@ssword123', 'Jeru', '', 'Valenzuela', 'Teacher 2', 'female', '01/10/2018', '09558874822', 'jeru_valenzuela@tup.edu.ph', 'English', 0, 'super_user', 'active', '2018-02-22 03:43:29', '0000-00-00 00:00:00'),
(22, '0009', '0009', 'P@ssword123', 'Jeru', '', 'Valenzuela', 'Teacher 2', 'female', '01/10/2018', '09558874822', 'jeru_valenzuela@tup.edu.ph', 'English', 0, 'teacher', 'inactive', '2018-02-24 15:08:16', '0000-00-00 00:00:00'),
(19, '0007', '0007', 'P@ssword123', 'Aaron James', '', 'Alcantara', 'Teacher 1', 'male', '', '', '', 'English', 0, 'teacher', 'inactive', '2018-02-22 06:38:56', '0000-00-00 00:00:00'),
(20, '0006', '0006', 'P@ssword123', 'Jasver', '', 'Salva', 'Teacher 1', 'male', '', '', '', 'Computer Science', 0, 'teacher', 'inactive', '2018-02-22 06:39:05', '0000-00-00 00:00:00'),
(21, '0002', '0002', 'P@ssword123', 'John', 'Patrick', 'Guzman', 'Teacher', 'male', '', '', '', 'Social Science', 20, 'teacher', 'active', '2018-02-22 08:34:34', '0000-00-00 00:00:00'),
(23, '0004', '0004', 'P@ssword123', 'Aljohn', '', 'Pangilinan', 'Teacher', 'male', '', '', '', 'Science', 11, 'teacher', 'active', '2018-02-24 15:08:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_permission`
--

CREATE TABLE `user_permission` (
  `id` int(11) NOT NULL,
  `module_name` varchar(500) NOT NULL,
  `admin` enum('active','inactive') NOT NULL,
  `teacher` enum('active','inactive') NOT NULL,
  `student` enum('active','inactive') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_permission`
--

INSERT INTO `user_permission` (`id`, `module_name`, `admin`, `teacher`, `student`) VALUES
(2, 'Enrollment', 'active', 'inactive', 'inactive'),
(3, 'Academics', 'active', 'inactive', 'inactive'),
(4, 'Student Promotion', 'active', 'inactive', 'inactive'),
(5, 'Grades Management', 'active', 'active', 'inactive'),
(6, 'Strands', 'active', 'inactive', 'inactive'),
(7, 'Rooms', 'active', 'inactive', 'inactive'),
(8, 'Sections', 'active', 'inactive', 'inactive'),
(9, 'Subjects', 'active', 'inactive', 'inactive'),
(10, 'Curriculum', 'active', 'inactive', 'inactive'),
(17, 'Teachers', 'active', 'inactive', 'inactive'),
(16, 'Assign Advisory', 'active', 'inactive', 'inactive'),
(14, 'Assign Subjects', 'active', 'inactive', 'inactive'),
(15, 'Schedule', 'active', 'inactive', 'inactive'),
(18, 'Advisory Class', 'active', 'active', 'inactive'),
(19, 'Reports', 'active', 'inactive', 'inactive'),
(20, 'Audit Trail', 'active', 'inactive', 'inactive');

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
-- Indexes for table `advisory_class`
--
ALTER TABLE `advisory_class`
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
-- Indexes for table `modules`
--
ALTER TABLE `modules`
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
-- Indexes for table `user_permission`
--
ALTER TABLE `user_permission`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `advisory_class`
--
ALTER TABLE `advisory_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `class_subjects`
--
ALTER TABLE `class_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `registered_students`
--
ALTER TABLE `registered_students`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `strands`
--
ALTER TABLE `strands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `student_contacts`
--
ALTER TABLE `student_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user_permission`
--
ALTER TABLE `user_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `year_levels`
--
ALTER TABLE `year_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
