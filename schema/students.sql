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
  `strand` varchar(10) NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `students` (`id`, `lrn`, `grade`, `first_name`, `middle_name`, `last_name`, `sex`, `contact`, `birth_date`, `birth_place`, `age`, `mother_tongue`, `religion`, `street`, `barangay`, `city`, `province`, `father_name`, `mother_name`, `father_contact`, `mother_contact`, `guardian`, `relationship`, `guardian_contact`, `requirements`, `note`) VALUES
(1, '14038020', 'Grade 11', 'Aaron', 'James', 'Alcantara', 'Male', '09222222222', '2017-08-15', 'Laguna', 20, 'Tagalog', 'Catholic', 'Laguna st.', 'Laguna', 'Laguna', 'Laguna', 'Father Alcantara', 'Mother Alcantara', 'Falcan contact', 'Malcan contact', 'N/A', 'N/A', 'N/A', 'COMPLETE', '1'),
(2, '14038021', 'Grade 12', 'Jan', 'Diether', 'Francia', 'Male', '09333333333', '2017-08-25', 'Caloocan', 19, 'Tagalog', 'Catholic', 'Caloocan st.', 'Caloocan', 'Caloocan', 'Caloocn', 'Father Francia', 'Mother Francia', 'Ffrancia contact', 'Mfrancia contact', 'N/A', 'N/A', 'N/A', 'COMPLETE', '2'),
(3, '14038022', 'Grade 11', 'Rie', 'John', 'Torres', 'Male', '09444444444', '2017-08-23', 'Fairview', 19, 'Tagalog', 'Catholic', 'Fairview st.', 'Fairview', 'Fairview', 'Fairview', 'Father Torres', 'Mother Torres', 'Ftorres contact', 'Mtorres contact', 'N/A', 'N/A', 'N/A', 'COMPLETE', '3'),
(4, '14038023', 'Grade 12', 'John', 'Robert', 'Capistrano', 'Male', '09555555555', '2017-08-01', 'Monumento', 20, 'Tagalog', 'Catholic', 'Monumento st.', 'Monumento', 'Monumento', 'Monumento', 'Father Capistrano', 'Mother Capistrano', 'Fcapis contact', 'Mcapis contact', 'N/A', 'N/A', 'N/A', 'COMPLETE', '4'),
(5, '14038024', 'Grade 12', 'Shanai', 'Hazel', 'Zulueta', 'Female', '09666666666', '2017-07-31', 'Bicol', 19, 'Tagalog', 'Catholic', 'Bicol st.', 'Bicol', 'Bicol', 'Bicol', 'Father Zulueta', 'Mother Zulueta', 'Fzulueta contact', 'Mzulueta contact', 'N/A', 'N/A', 'N/A', 'COMPLETE', '5');
(5, '14038025', 'Grade 12', 'Shiela', 'May', 'Morales', 'Female', '09777777777', '1997-05-03', 'Pampanga', 20, 'Tagalog', 'Catholic', 'Pampanga st.', 'Pampanga', 'Pampanga', 'Pampanga', 'Father Morales', 'Mother Morales', 'Fmorales contact', 'Mmorales contact', 'N/A', 'N/A', 'N/A', 'COMPLETE', '6');

ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lrn` (`lrn`);

ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;