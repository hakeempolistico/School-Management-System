-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 12:34 AM
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
(6, 14038019, 'Street', 'Brgy', 'City', 'Province');

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
(5, 14038003, '', '1', 2, '2018-01-15 07:45:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int(11) NOT NULL,
  `students_info_lrn` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `relationship` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `students_info_lrn`, `name`, `contact`, `relationship`) VALUES
(1, 14, 'Mother Francia', '09111111112', 'Mother'),
(2, 14038014, 'Vong Navarro', '0955-887-4822', 'Father'),
(3, 14038001, 'Anne Curtis', '0955-887-4822', 'Mother'),
(4, 14038002, 'Tom Cruise', '0955-887-4822', 'Father'),
(5, 14038003, 'Tom Cruise', '0955-887-4822', 'Father');

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
(6, 14038019, 'Mother Maiden Name', '123123123', 'Daddy', '912312312');

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
(15, '14038003', 'form 138', '2018-01-15 07:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(100) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `building` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_id`, `room_name`, `building`) VALUES
(1, 'Lab101', 'Laboratory 101', 'College of Science'),
(2, 'Lab102', 'Laboratory 102', 'College of Industrial Engineering'),
(3, 'Lab103', 'Laboratory 103', 'CAFA'),
(4, 'Room 104', 'Room 104', 'College of Engineering'),
(5, 'Room 105', 'Room 105', 'CLA'),
(7, 'Lab104', 'Laboratory 104', 'COS');

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

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `strand_code` varchar(50) NOT NULL,
  `year_level_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `capacity` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `strand_code`, `year_level_id`, `name`, `capacity`) VALUES
(1, 'STEM', 1, 'A', 40),
(2, 'GAS', 1, 'A', 40),
(3, 'HUMSS', 1, 'A', 40),
(4, 'TVL-HE', 1, 'A', 40),
(5, 'TVL-AS', 1, 'A', 40),
(6, 'ABM', 1, 'A', 40),
(7, 'ABM', 2, 'A', 45),
(8, 'TVL-AS', 2, 'A', 45),
(9, 'HUMSS', 2, 'A', 45),
(10, 'GAS', 2, 'A', 45),
(11, 'STEM', 2, 'A', 45),
(12, 'TVL-HE', 2, 'A', 45),
(13, 'STEM', 1, 'B', 45),
(14, 'GAS', 1, 'B', 45),
(15, 'HUMSS', 1, 'B', 45),
(16, 'TVL-HE', 1, 'B', 45),
(17, 'TVL-AS', 1, 'B', 45),
(18, 'ABM', 1, 'B', 45),
(20, 'STEM', 1, 'C', 40);

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
(1, 'STEM', 'Science, Technology, Engineering and Mathematics', 'inactive', '2018-01-17 14:54:40'),
(2, 'GAS', 'General Academic Strand', 'inactive', '0000-00-00 00:00:00'),
(3, 'HUMSS', 'Humanities and Social Sciences', 'inactive', '0000-00-00 00:00:00'),
(4, 'TVL-HE', 'Technical Vocational and Livelihood - Home Economics', 'active', '0000-00-00 00:00:00'),
(5, 'TVL-AS', 'Technical Vocational and Livelihood - Automative Services', 'active', '0000-00-00 00:00:00'),
(6, 'ABM', 'Accounting and Business Management', 'active', '0000-00-00 00:00:00'),
(17, 'asd', 'asd', 'active', '0000-00-00 00:00:00');

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
(6, 14038019, 'Shan', '', 'Zulueta', 'Female', '12312312312', '2018-01-18', 'Mandaluyong City', 0, 'Filipino', 'Roman Catholic', b'0', '2018-01-16 07:09:16', '2018-01-16 07:09:16');

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
(5, '14038003', 5, 5);

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
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `major` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `major`, `position`, `status`) VALUES
(1, '0001', 'Adrielle', 'Mestiola', 'Escaro', 'Computer', 'Teacher', 'active'),
(2, '0002', 'John', 'Patrick', 'Guzman', 'Social Science', 'Teacher', 'active'),
(3, '0003', 'Hannah', 'Patricia', 'Liao', 'Mathematics', 'Teacher', 'inactive'),
(4, '0004', 'Aljohn', '', 'Pangilinan', 'Science', 'Teacher', 'inactive'),
(5, '0005', 'May', '', 'Garcia', 'SAD', 'Teacher', 'active');

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
  `last_name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `major` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_id`, `username`, `password`, `first_name`, `last_name`, `position`, `sex`, `birthdate`, `contact_no`, `email`, `major`, `date_created`, `date_modified`) VALUES
(1, '14038014', 'admin', 'admin', 'Hakeem', 'Polistico', 'Administrator', 'Male', '1994/07/22', '0955-887-4822', 'hakeem.polistico@tup.edu.ph', 'Mathematics', '2017-10-12 04:21:44', '2017-10-12 04:21:44'),
(2, '0001', '0001', 'password', 'Adrielle', 'Escaro', 'Teacher', 'Female', '1998/06/24', '09355156653', 'adrielle.escaro@tup.edu.ph', 'English', '2017-10-12 04:21:44', '2017-10-12 04:21:44');

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
  ADD UNIQUE KEY `employee_id` (`employee_id`,`username`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `class_subjects`
--
ALTER TABLE `class_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `registered_students`
--
ALTER TABLE `registered_students`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `strands`
--
ALTER TABLE `strands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `student_contacts`
--
ALTER TABLE `student_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `year_levels`
--
ALTER TABLE `year_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
