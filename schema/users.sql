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

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `position`, `date_created`, `date_modified`) VALUES
(1, 'admin', 'admin', 'Hakeem', 'Polistico', 'superadmin', '2017-08-21 08:49:08', '2017-08-21 08:49:08'),
(2, 'adriitakumi', 'hakeemjoshua', 'Adrielle', 'Escaro', 'admin', '2017-08-21 08:50:36', '2017-08-21 08:50:36'),
(3, 'jassyber', 'ilovetolove', 'Jasver', 'Salva', 'admin', '2017-08-21 08:51:15', '2017-08-21 08:51:15'),
(4, 'iamteacher', 'iamteacher', 'Teacher', 'IsMe', 'teacher', '2017-08-21 08:51:48', '2017-08-21 08:51:48'),
(5, 'studentisme', 'studentisme', 'Student', 'IsMe', 'student', '2017-08-21 08:52:27', '2017-08-21 08:52:27');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
