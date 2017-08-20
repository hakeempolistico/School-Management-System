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
(1, 'STEM - 1', '11', 1, 35, 40, '2017-08-20 06:58:20', '2017-08-20 06:58:20');

ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
