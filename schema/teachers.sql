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
(1, '14-038-014', 'Hakeem', 'Andaya', 'Polistico', 'Sex Education', 'Teacher 1', 'ACTIVE', 'male', 23, '1994-07-22', 'Mandaluyong City', 'Filipino', '0955-887-4822', '226B Evangelista St.', 'Talaba I', 'Bacoor City', 'Cavite', 'Roman Catholic', 'Graduate of Technological University of the Philippines', NULL);

ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
