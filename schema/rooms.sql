CREATE TABLE `rooms` (
  `id` int(100) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `capacity` int(11) NOT NULL,
  `occupants` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `adviser_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `rooms` (`id`, `room_id`, `room_name`, `capacity`, `occupants`, `class_id`, `adviser_id`, `date_created`, `date_modified`) VALUES
(1, '123', 'AVR', 60, 55, 1, 1, '2017-08-21 08:46:19', '2017-08-21 08:46:19'),
(2, '234', 'Lab 1', 60, 56, 2, 2, '2017-08-21 08:46:47', '2017-08-21 08:46:47'),
(3, '345', 'Lab 2', 60, 57, 3, 3, '2017-08-21 08:47:17', '2017-08-21 08:47:17'),
(4, '456', 'Lab 3', 60, 58, 4, 4, '2017-08-21 08:47:50', '2017-08-21 08:47:50'),
(5, '567', 'Lab 4', 60, 59, 5, 5, '2017-08-21 08:48:20', '2017-08-21 08:48:20');

ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `rooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
