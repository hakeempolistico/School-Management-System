CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(50) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `adviser` int(11) DEFAULT NULL,
  `occupants` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL,
  `date_modified` timestamp NOT NULL,
  `strand` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`, `year`, `adviser`, `occupants`, `capacity`, `date_created`, `date_modified`, `strand`) VALUES
(1, 'STEM-1', 'Grade 11', 4245744, 35, 40, '2017-08-20 15:22:42', '2017-08-20 15:22:42', 'STEM'),
(2, 'GAS-2', 'Grade 12', 4245745, 36, 40, '2017-08-20 15:23:22', '2017-08-20 15:23:22', 'GAS'),
(3, 'HUMSS-3', 'Grade 11', 4245746, 37, 40, '2017-08-20 15:23:58', '2017-08-20 15:23:58', 'HUMSS'),
(4, 'ABM-4', 'Grade 12', 4245747, 40, 40, '2017-08-20 15:24:45', '2017-08-20 15:24:45', 'ABM'),
(5, 'TVLHE-5', 'Grade 11', 4245748, 40, 40, '2017-08-20 15:25:28', '2017-08-20 15:25:28', 'TVLHE'),
(6, 'TVLAS-6', 'Grade 12', 4245749, 21, 40, '2017-08-21 05:14:18', '2017-08-21 05:14:18', 'TVLAS');

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
(1, '14038027', 'Grade 12', 'Adrielle', 'Mestiola', 'Escaro', 'Female', '09355156653', '1998-06-24', 'quezon city', '19', 'tagalog', 'catholic', 'barietto st', 'maharlika', 'imus', 'cavite', 'wilson escaro', 'gema escaro', '09179430720', '09204260692', 'lea cultivo', 'yaya', '0290242342', 'ff', '1'),
(2, '14038028', 'Grade 11', 'Marc', 'Inzon', 'Terrobias', 'Male', '093224241', '1998-06-24', 'Mandaluyong', '19', 'Tagalog', 'catholic', 'mandaluyong st', 'mandaluyong', 'mandaluyong', 'mandaluyong', 'mark terrobias', 'monica terrobias', '84294829184', '29823479284', 'N/A', 'N/A', 'N/A', 'ds', '2'),
(3, '14038029', 'Grade 12', 'Jasver', 'Anlouise', 'Salva', 'Female', '983294820', '1998-06-24', 'Pedro Gil', '18', 'Tagalog', 'Catholic', 'Pedro st.', 'Gil', 'Pedro', 'Gil', 'Father Salva', 'Mother Salva', 'Fsalva contact', 'Msalva contact', 'N/A', 'N/A', 'N/A', 'N/A', '3'),
(4, '14038030', 'Grade 11', 'John', 'Patrick', 'Guzman', 'Male', '983294820', '1998-06-24', 'Pedro Gil', '18', 'Tagalog', 'Catholic', 'Pedro st.', 'Gil', 'Pedro', 'Gil', 'Father Guzman', 'Mother Guzman', 'Fguzman contact', 'Mguzman contact', 'N/A', 'N/A', 'N/A', 'N/A', '4'),
(5, '14038031', 'Grade 12', 'Hakeem', 'Joshua', 'Polistico', 'Male', '983294820', '1998-07-22', 'Talaba', '23', 'Tagalog', 'Catholic', 'Talaba st.', 'Talaba', 'Talaba', 'Talaba', 'Father Polistico', 'Mother Polistico', 'Fpolis contact', 'Mpolis contact', 'N/A', 'N/A', 'N/A', 'N/A', '5');

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
(1, '14038020', 'Form 137', '2017-08-20 17:11:41'),
(2, '14038020', 'Form 138', '2017-08-20 17:11:41'),
(3, '14038020', 'NSO Birth Certificate', '2017-08-20 17:11:41'),
(4, '14038021', 'Form 137', '2017-08-20 17:15:39'),
(5, '14038021', 'Form 138', '2017-08-20 17:15:39'),
(6, '14038021', 'NSO Birth Certificate', '2017-08-20 17:15:39'),
(7, '14038022', 'Form 137', '2017-08-20 18:54:29'),
(8, '14038022', 'Form 138', '2017-08-20 18:54:29'),
(9, '14038022', 'NSO Birth Certificate', '2017-08-20 18:54:29'),
(10, '14038023', 'Form 137', '2017-08-20 18:57:09'),
(11, '14038023', 'Form 138', '2017-08-20 18:57:09'),
(12, '14038023', 'NSO Birth Certificate', '2017-08-20 18:57:09'),
(13, '14038024', 'Form 137', '2017-08-20 18:59:27'),
(14, '14038024', 'Form 138', '2017-08-20 18:59:27'),
(15, '14038024', 'NSO Birth Certificate', '2017-08-20 18:59:27');

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
  `status` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_id`, `room_name`, `building`, `class_id`, `status`, `date_created`, `date_modified`) VALUES
(1, '123', 'AVR', 'Engineering Building', 1, 'OCCUPIED', '2017-08-20 16:46:19', '2017-08-20 16:46:19'),
(2, '234', 'Lab 1', 'Social Studies Building', 2, 'OCCUPIED', '2017-08-20 16:46:47', '2017-08-20 16:46:47'),
(3, '345', 'Lab 2', 'Araullo Building', 3, 'OCCUPIED', '2017-08-20 16:47:17', '2017-08-20 16:47:17'),
(4, '456', 'Lab 3', 'Science Building', 4, 'OCCUPIED', '2017-08-20 16:47:50', '2017-08-20 16:47:50'),
(5, '567', 'Lab 4', 'Mathematics Building', 5, 'OCCUPIED', '2017-08-20 16:48:20', '2017-08-20 16:48:20'),
(6, '169', 'Private Room', 'Faculty Building', 0, 'AVAILABLE', '2017-08-21 05:09:21', '2017-08-21 05:09:21');

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
  `note` varchar(255) NOT NULL,
  `strand` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `lrn`, `grade`, `first_name`, `middle_name`, `last_name`, `sex`, `contact`, `birth_date`, `birth_place`, `age`, `mother_tongue`, `religion`, `street`, `barangay`, `city`, `province`, `father_name`, `mother_name`, `father_contact`, `mother_contact`, `guardian`, `relationship`, `guardian_contact`, `requirements`, `note`, `strand`) VALUES
(1, '14038020', 'Grade 11', 'Aaron', 'James', 'Alcantara', 'Male', '09222222222', '2017-08-15', 'Laguna', 20, 'Tagalog', 'Catholic', 'Laguna st.', 'Laguna', 'Laguna', 'Laguna', 'Father Alcantara', 'Mother Alcantara', 'Falcan contact', 'Malcan contact', 'N/A', 'N/A', 'N/A', 'COMPLETE', '1', 'STEM'),
(2, '14038021', 'Grade 12', 'Jan', 'Diether', 'Francia', 'Male', '09333333333', '2017-08-25', 'Caloocan', 19, 'Tagalog', 'Catholic', 'Caloocan st.', 'Caloocan', 'Caloocan', 'Caloocn', 'Father Francia', 'Mother Francia', 'Ffrancia contact', 'Mfrancia contact', 'N/A', 'N/A', 'N/A', 'COMPLETE', '2', 'GAS'),
(3, '14038022', 'Grade 11', 'Rie', 'John', 'Torres', 'Male', '09444444444', '2017-08-23', 'Fairview', 19, 'Tagalog', 'Catholic', 'Fairview st.', 'Fairview', 'Fairview', 'Fairview', 'Father Torres', 'Mother Torres', 'Ftorres contact', 'Mtorres contact', 'N/A', 'N/A', 'N/A', 'COMPLETE', '3', 'HUMSS'),
(4, '14038023', 'Grade 12', 'John', 'Robert', 'Capistrano', 'Male', '09555555555', '2017-08-01', 'Monumento', 20, 'Tagalog', 'Catholic', 'Monumento st.', 'Monumento', 'Monumento', 'Monumento', 'Father Capistrano', 'Mother Capistrano', 'Fcapis contact', 'Mcapis contact', 'N/A', 'N/A', 'N/A', 'COMPLETE', '4', 'ABM'),
(5, '14038024', 'Grade 12', 'Shanai', 'Hazel', 'Zulueta', 'Female', '09666666666', '2017-07-31', 'Bicol', 19, 'Tagalog', 'Catholic', 'Bicol st.', 'Bicol', 'Bicol', 'Bicol', 'Father Zulueta', 'Mother Zulueta', 'Fzulueta contact', 'Mzulueta contact', 'N/A', 'N/A', 'N/A', 'COMPLETE', '5', 'TVL-HE'),
(6, '14038025', 'Grade 12', 'Shiela', 'May', 'Morales', 'Female', '09777777777', '1997-05-03', 'Pampanga', 20, 'Tagalog', 'Catholic', 'Pampanga st.', 'Pampanga', 'Pampanga', 'Pampanga', 'Father Morales', 'Mother Morales', 'Fmorales contact', 'Mmorales contact', 'N/A', 'N/A', 'N/A', 'COMPLETE', '6', 'TVL-AS');

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
  `status` varchar(50) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `age` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(100) NOT NULL,
  `mother_tongue` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  `date_modified` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `major`, `position`, `status`, `sex`, `age`, `birth_date`, `birth_place`, `mother_tongue`, `contact`, `street`, `barangay`, `city`, `province`, `religion`, `note`, `date_modified`) VALUES
(1, '4245744', 'Luxanna', 'Draven', 'Crownguard', 'chemitstry', 'admin', 'ACTIVE', 'Female', 21, '2017-08-07', 'Demacia', 'english', '09123456789', '#123 Barietto St.', 'Barangay Mahalkita', 'Bacolod', 'Batangas', 'Catholic', 'Kapatid ni Garen', '2017-08-20 14:40:49'),
(2, '4245745', 'Garen', 'Draven', 'Crownguard', 'Physical Education', 'superadmin', 'ACTIVE', 'Male', 28, '2017-08-11', 'Demacia', 'english', '09987654321', '#211 Bariettoo st.', 'Barangay moto', 'Ionia', 'Cavite', 'Catholic', 'Kapatid ni Lux', '2017-08-20 14:44:43'),
(3, '4245746', 'Aiella', 'Mestiola', 'Escaro', 'Math', 'teacher', 'ACTIVE', 'Female', 18, '1998-12-26', 'Hostpital bed', 'Tagalog', '0999999999', '#211 Domingo st.', 'Barangay Maharlika', 'Imus', 'Cavite', 'Catholic', 'Yon', '2017-08-20 14:59:41'),
(4, '4245747', 'Jeru', 'Something', 'Valenzuela', 'Physics', 'teacher', 'INACTIVE', 'Female', 19, '2017-06-26', 'Hospital bed', 'Tagalog', '09333333333', 'Panget st.', 'Barangay Panget', 'Panget city', 'Panget Province', 'Catholic', 'Yoko na', '2017-08-20 15:13:14'),
(5, '4245748', 'Adolf', 'Hitler', 'Junior', 'Terrorism', 'teacher', 'ACTIVE', 'male', 56, '2017-08-09', 'UAE', 'Arabian', '09444444444', 'Saudi st.', 'Barangay Saudi', 'Saudi City', 'Saudi Province', 'Catholic', 'aaaaaahk', '2017-08-20 15:21:05');

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
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `position`, `date_created`, `date_modified`) VALUES
(1, 'admin', 'admin', 'Hakeem', 'Polistico', 'superadmin', '2017-08-20 16:49:08', '2017-08-20 16:49:08'),
(2, 'adriitakumi', 'hakeemjoshua', 'Adrielle', 'Escaro', 'admin', '2017-08-20 16:50:36', '2017-08-20 16:50:36'),
(3, 'jassyber', 'ilovetolove', 'Jasver', 'Salva', 'admin', '2017-08-20 16:51:15', '2017-08-20 16:51:15'),
(4, 'iamteacher', 'iamteacher', 'Teacher', 'IsMe', 'teacher', '2017-08-20 16:51:48', '2017-08-20 16:51:48'),
(5, 'studentisme', 'studentisme', 'Student', 'IsMe', 'student', '2017-08-20 16:52:27', '2017-08-20 16:52:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_applicants`
--
ALTER TABLE `online_applicants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lrn` (`lrn`);

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lrn` (`lrn`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `online_applicants`
--
ALTER TABLE `online_applicants`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
