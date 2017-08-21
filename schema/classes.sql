CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(50) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `adviser` int(11) DEFAULT NULL,
  `occupants` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `classes` (`id`, `class_name`, `year`, `adviser`, `occupants`, `capacity`, `date_created`, `date_modified`) VALUES
(1, 'STEM-1', 'Grade 11', 4245744, 35, 40, '2017-08-20 23:22:42', '2017-08-20 23:22:42'),
(2, 'GAS-2', 'Grade 12', 4245745, 36, 40, '2017-08-20 23:23:22', '2017-08-20 23:23:22'),
(3, 'HUMSS-3', 'Grade 11', 4245746, 37, 40, '2017-08-20 23:23:58', '2017-08-20 23:23:58'),
(4, 'ABM-4', 'Grade 12', 4245747, 40, 40, '2017-08-20 23:24:45', '2017-08-20 23:24:45'),
(5, 'TVLHE-5', 'Grade 11', 4245748, 40, 40, '2017-08-20 23:25:28', '2017-08-20 23:25:28'),
(0, '--', ' ', NULL, NULL, NULL, '2017-08-21 13:14:18', '2017-08-21 13:14:18');

ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
