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

INSERT INTO `teachers` (`id`, `employee_id`, `first_name`, `middle_name`, `last_name`, `major`, `position`, `status`, `sex`, `age`, `birth_date`, `birth_place`, `mother_tongue`, `contact`, `street`, `barangay`, `city`, `province`, `religion`, `note`, `date_modified`) VALUES
(1, '4245744', 'Luxanna', 'Draven', 'Crownguard', 'chemitstry', 'admin', 'ACTIVE', 'Female', 21, '2017-08-07', 'Demacia', 'english', '09123456789', '#123 Barietto St.', 'Barangay Mahalkita', 'Bacolod', 'Batangas', 'Catholic', 'Kapatid ni Garen', '2017-08-20 22:40:49'),
(2, '4245745', 'Garen', 'Draven', 'Crownguard', 'Physical Education', 'superadmin', 'ACTIVE', 'Male', 28, '2017-08-11', 'Demacia', 'english', '09987654321', '#211 Bariettoo st.', 'Barangay moto', 'Ionia', 'Cavite', 'Catholic', 'Kapatid ni Lux', '2017-08-20 22:44:43'),
(3, '4245746', 'Aiella', 'Mestiola', 'Escaro', 'Math', 'teacher', 'ACTIVE', 'Female', 18, '1998-12-26', 'Hostpital bed', 'Tagalog', '0999999999', '#211 Domingo st.', 'Barangay Maharlika', 'Imus', 'Cavite', 'Catholic', 'Yon', '2017-08-20 22:59:41'),
(4, '4245747', 'Jeru', 'Something', 'Valenzuela', 'Physics', 'teacher', 'INACTIVE', 'Female', 19, '2017-06-26', 'Hospital bed', 'Tagalog', '09333333333', 'Panget st.', 'Barangay Panget', 'Panget city', 'Panget Province', 'Catholic', 'Yoko na', '2017-08-20 23:13:14'),
(5, '4245748', 'Adolf', 'Hitler', 'Junior', 'Terrorism', 'teacher', 'ACTIVE', 'male', 56, '2017-08-09', 'UAE', 'Arabian', '09444444444', 'Saudi st.', 'Barangay Saudi', 'Saudi City', 'Saudi Province', 'Catholic', 'aaaaaahk', '2017-08-20 23:21:05');

ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
