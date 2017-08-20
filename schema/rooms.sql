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
(1, '1', 'Room', 40, 39, 1, 1, '2017-08-20 05:55:28', '2017-08-20 05:55:28');

ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `rooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
