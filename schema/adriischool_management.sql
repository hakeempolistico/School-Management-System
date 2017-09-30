-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 01:48 PM
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
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `id` int(11) NOT NULL,
  `year_start` int(4) NOT NULL,
  `year_end` int(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`id`, `year_start`, `year_end`, `date_created`, `date_modified`) VALUES
(1, 2017, 2018, '2017-09-20 09:18:54', '2017-09-20 09:18:54'),
(2, 2018, 2019, '2017-09-20 09:18:54', '2017-09-20 09:18:54'),
(3, 2019, 2020, '2017-09-20 09:19:20', '2017-09-20 09:19:20'),
(4, 2020, 2021, '2017-09-20 09:19:20', '2017-09-20 09:19:20'),
(5, 2021, 2022, '2017-09-20 09:19:34', '2017-09-20 09:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `registered_student_lrn` int(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `registered_student_lrn`, `street`, `barangay`, `city`, `province`) VALUES
(1, 11111, '#211 Ph9 Barietto st., Bahayang Pag-asa', 'Brgy. Maharlika', 'Imus', 'Cavite'),
(2, 22222, 'Talaba st.', 'Baranggay Talaba', 'Bacoor', 'Cavite'),
(3, 33333, 'Paco st', 'Barangay Paco', 'Paco city', 'Manila'),
(4, 44444, 'Golden st.', 'Barangay Golden', 'Dasma', 'Cavite'),
(5, 55555, 'Citta st,', 'Barangay Italia', 'Imus', 'Cavite');

-- --------------------------------------------------------

--
-- Table structure for table `class_subjects`
--

CREATE TABLE `class_subjects` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_subjects`
--

INSERT INTO `class_subjects` (`id`, `section_id`, `subject_id`, `teacher_id`, `date_created`, `date_modified`) VALUES
(3, 9, 9, 1, '2017-09-21 10:33:15', '0000-00-00 00:00:00'),
(4, 9, 9, 5, '2017-09-21 10:33:15', '0000-00-00 00:00:00'),
(331, 1, 1, 1, '2017-09-21 18:20:04', '0000-00-00 00:00:00'),
(219, 3, 3, 7, '2017-09-21 18:01:27', '0000-00-00 00:00:00'),
(330, 1, 5, 5, '2017-09-21 18:20:04', '0000-00-00 00:00:00'),
(218, 3, 3, 1, '2017-09-21 18:01:27', '0000-00-00 00:00:00'),
(217, 3, 3, 4, '2017-09-21 18:01:27', '0000-00-00 00:00:00'),
(329, 1, 4, 4, '2017-09-21 18:20:04', '0000-00-00 00:00:00'),
(104, 2, 2, 3, '2017-09-21 17:41:32', '0000-00-00 00:00:00'),
(103, 2, 2, 1, '2017-09-21 17:41:32', '0000-00-00 00:00:00'),
(328, 1, 3, 3, '2017-09-21 18:20:04', '0000-00-00 00:00:00'),
(327, 1, 2, 2, '2017-09-21 18:20:04', '0000-00-00 00:00:00'),
(326, 1, 5, 5, '2017-09-21 18:20:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_students`
--

CREATE TABLE `enrolled_students` (
  `id` int(50) NOT NULL,
  `registered_student_lrn` int(50) NOT NULL,
  `note` text NOT NULL,
  `section_id` varchar(15) NOT NULL,
  `academic_year_id` int(50) NOT NULL,
  `date_enrolled` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int(11) NOT NULL,
  `registered_student_lrn` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `relationship` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `registered_student_lrn`, `name`, `contact`, `relationship`) VALUES
(1, 11111, 'Gema Mestiola', '09204260692', 'Mother'),
(2, 22222, 'Mother Polistico', 'MotherPoli cont', 'Mother'),
(3, 33333, 'Mother Guzman', 'MotherGuz conta', 'Mother'),
(4, 44444, 'Mother Salva', 'MotherSalva con', 'Mother'),
(5, 55555, 'Roman Ferrer', 'FatherFerrer co', 'Father');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `registered_student_lrn` int(11) NOT NULL,
  `mother_name` varchar(70) NOT NULL,
  `mother_contact` varchar(15) NOT NULL,
  `father_name` varchar(70) NOT NULL,
  `father_contact` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `registered_student_lrn`, `mother_name`, `mother_contact`, `father_name`, `father_contact`) VALUES
(1, 11111, 'Gema Mestiola', '09204260692', 'Wilson Escaro', '09179430720'),
(2, 22222, 'Mother Polistico', 'MotherPoli cont', 'Father Polistico', 'FatherPoli cont'),
(3, 33333, 'Mother Guzman', 'MotherGuz conta', 'Father Guzman', 'FatherGuz conta'),
(4, 44444, 'Mother Salva', 'MotherSalva con', 'Father Salva', 'FatherSalva con'),
(5, 55555, 'fukIforgot Ferrer', 'MotherFerrer co', 'Roman Ferrer', 'FatherFerrer co');

-- --------------------------------------------------------

--
-- Table structure for table `registered_students`
--

CREATE TABLE `registered_students` (
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
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_students`
--

INSERT INTO `registered_students` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `sex`, `contact_number`, `birth_date`, `birth_place`, `age`, `mother_tongue`, `religion`, `online_applicant`, `date_registered`, `date_modified`) VALUES
(1, 11111, 'Adrielle Kristine Nicolette', 'Mestiola', 'Escaro', 'Female', '09355156653', '1998-06-24', 'Quezon City', 19, 'Tagalog', 'Catholic', b'0', '2017-09-20 09:17:57', '0000-00-00 00:00:00'),
(2, 22222, 'Hakeem', 'Joshua', 'Polistico', 'Male', '09558874822', '1995-07-22', 'Hospital Bed', 22, 'Tagalog', 'Catholic', b'0', '2017-09-20 09:29:40', '0000-00-00 00:00:00'),
(3, 33333, 'John', 'Patrick', 'Guzman', 'Male', '09333333333', '2017-09-05', 'Hospital Bed', 0, 'Tagalog', 'Catholic', b'0', '2017-09-20 09:32:58', '0000-00-00 00:00:00'),
(4, 44444, 'Jasver', 'Anlouis', 'Salva', 'Female', '09444444444', '2017-09-22', 'Hospital Bed', 0, 'Tagalog', 'Catholic', b'0', '2017-09-20 09:35:08', '0000-00-00 00:00:00'),
(5, 55555, 'Journacel', 'Urgel', 'Ferrer', 'Female', '09555555555', '1997-10-10', 'Hospital Bed', 19, 'Tagalog', 'Catholic', b'0', '2017-09-20 09:37:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `enrolled_student_id` varchar(15) NOT NULL,
  `requirement` varchar(40) NOT NULL,
  `date_given` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(100) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `building` varchar(200) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `day` enum('Monday','Tuesday','Wednesday','Thursday','Friday') NOT NULL
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
(2, 'STEM', 1, 'B', 45),
(3, 'GAS', 2, 'A', 40),
(4, 'GAS', 1, 'A', 40),
(7, 'TVL-HE', 1, 'A', 45),
(11, 'STEM', 2, 'A', 40),
(12, 'STEM', 2, 'B', 45),
(13, 'GAS', 1, 'B', 45),
(14, 'GAS', 2, 'B', 45),
(15, 'HUMSS', 1, 'A', 40),
(16, 'HUMSS', 2, 'A', 40),
(17, 'ABM', 1, 'A', 40),
(18, 'ABM', 2, 'A', 40),
(19, 'TVL-HE', 2, 'A', 40),
(20, 'TVL-AS', 1, 'A', 40),
(21, 'TVL-AS', 2, 'A', 40),
(22, 'HUMSS', 1, 'B', 45),
(23, 'HUMSS', 2, 'B', 45),
(24, 'ABM', 1, 'B', 45),
(25, 'ABM', 2, 'B', 45),
(26, 'TVL-HE', 2, 'B', 45),
(27, 'TVL-HE', 1, 'B', 45),
(28, 'TVL-AS', 1, 'B', 45),
(29, 'TVL-AS', 2, 'B', 45);

-- --------------------------------------------------------

--
-- Table structure for table `strands`
--

CREATE TABLE `strands` (
  `id` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strands`
--

INSERT INTO `strands` (`id`, `code`, `name`) VALUES
(1, 'STEM', 'Science, Technology, Engineering, and Mathematics'),
(2, 'GAS', 'General Academic Strand'),
(3, 'HUMSS', 'Humanities and Social Sciences'),
(4, 'ABM', 'Accountancy, Business, and Management'),
(5, 'TVL-HE', 'Technical Vocational Livelihood: Home Economics'),
(6, 'TVL-AS', 'Technical Vocational Livelihood: Automative Services');

-- --------------------------------------------------------

--
-- Table structure for table `student_contacts`
--

CREATE TABLE `student_contacts` (
  `id` int(11) NOT NULL,
  `registered_student_id` int(11) NOT NULL,
  `parents_id` int(11) NOT NULL,
  `guardian_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `code`, `name`, `type`, `description`, `date_created`, `date_modified`) VALUES
(1, 'CHM', 'CHEMISTRY', 'SCIENCE', 'GRADE 11 SCIENCE', NULL, NULL),
(2, 'PHYS', 'PHYSICS', 'SCIENCE', 'GRADE 12 SCIENCE', NULL, NULL),
(3, 'WOLT', 'WORLD LITERATURE', 'ENGLISH', 'GRADE 11 ENGLISH', NULL, NULL),
(4, 'ORCM', 'ORAL COMMUNICATION', 'ENGLISH', 'GRADE 12 ENGLISH', NULL, NULL),
(5, 'CALC', 'CALCULUS', 'MATH', 'GRADE 12 MATH', NULL, NULL),
(6, 'ALGB', 'ALGEBRA', 'MATH', 'GRADE 11 MATH', NULL, NULL);

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
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `major`, `position`, `status`) VALUES
(1, '0001', 'May', '', 'Garcia', 'Science', 'Teacher', 'Active'),
(2, '0002', 'Rommel', '', 'Faustino', 'IT', 'Senior Manager', 'Active'),
(3, '0003', 'Rellmon', '', 'Ponce', 'Web Development', 'Teacher', 'Active'),
(4, '0004', 'Fernando', '', 'Renegado', 'SAD', 'Department Head', 'Active'),
(5, '0005', 'Sarah', '', 'Fortune', 'Physical Education', 'Teacher', 'Active'),
(7, '001', 'James Kevin', 'Movera', 'Fernandez', 'Math', 'Professor', 'Active'),
(8, '0006', 'Luxanna', 'Demacia', 'Crownguard', 'Physics', 'Head', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `position`, `date_created`, `date_modified`) VALUES
(1, 'admin', 'admin', 'Adrielle', 'Escaro', 'Admin', '2017-09-20 03:49:17', '2017-09-20 03:49:17');

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
-- Indexes for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registered_student_lrn` (`registered_student_lrn`);

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
  ADD PRIMARY KEY (`id`,`lrn`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `class_subjects`
--
ALTER TABLE `class_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;
--
-- AUTO_INCREMENT for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registered_students`
--
ALTER TABLE `registered_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `strands`
--
ALTER TABLE `strands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `student_contacts`
--
ALTER TABLE `student_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `year_levels`
--
ALTER TABLE `year_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
