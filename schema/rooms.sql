CREATE TABLE `rooms` (
  `id` int(100) NOT NULL,
  `room_id` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `rooms` (`id`, `room_id`, `room_name`, `class_id`, `status`, `date_created`, `date_modified`) VALUES
(1, '123', 'AVR', 1, 'OCCUPIED', '2017-08-21 00:46:19', '2017-08-21 00:46:19'),
(2, '234', 'Lab 1', 2, 'OCCUPIED', '2017-08-21 00:46:47', '2017-08-21 00:46:47'),
(3, '345', 'Lab 2', 3, 'OCCUPIED', '2017-08-21 00:47:17', '2017-08-21 00:47:17'),
(4, '456', 'Lab 3', 4, 'OCCUPIED', '2017-08-21 00:47:50', '2017-08-21 00:47:50'),
(5, '567', 'Lab 4', 5, 'OCCUPIED', '2017-08-21 00:48:20', '2017-08-21 00:48:20'),
(6, '169', 'Private Room', 0, 'AVAILABLE', '2017-08-21 13:09:21', '2017-08-21 13:09:21');

ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `rooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
