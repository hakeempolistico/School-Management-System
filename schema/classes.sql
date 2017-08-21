CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `adviser` int(11) NOT NULL,
  `occupants` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `date_created` timestamp NOT NULL,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `classes` (`id`, `class_name`, `year`, `adviser`, `occupants`, `capacity`, `date_created`, `date_modified`) VALUES
(1, 'STEM1', 'Grade 11', 4245744, 35, 40, '2017-08-21 07:22:42', '2017-08-21 07:22:42'),
(2, 'GAS2', 'Grade 12', 4245745, 36, 40, '2017-08-21 07:23:22', '2017-08-21 07:23:22'),
(3, 'HUMSS3', 'Grade 11', 4245746, 37, 40, '2017-08-21 07:23:58', '2017-08-21 07:23:58'),
(4, 'ABM4', 'Grade 12', 4245747, 38, 40, '2017-08-21 07:24:45', '2017-08-21 07:24:45'),
(5, 'TVLHE5', 'Grade 11', 4245748, 39, 40, '2017-08-21 07:25:28', '2017-08-21 07:25:28');

ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;