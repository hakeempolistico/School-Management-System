CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `lrn` varchar(15) NOT NULL,
  `requirement` varchar(40) NOT NULL,
  `date_given` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `requirements` (`id`, `lrn`, `requirement`, `date_given`) VALUES
(1, '14038020', 'Form 137', '2017-08-21 09:11:41'),
(2, '14038020', 'Form 138', '2017-08-21 09:11:41'),
(3, '14038020', 'NSO Birth Certificate', '2017-08-21 09:11:41'),
(4, '14038021', 'Form 137', '2017-08-21 09:15:39'),
(5, '14038021', 'Form 138', '2017-08-21 09:15:39'),
(6, '14038021', 'NSO Birth Certificate', '2017-08-21 09:15:39'),
(7, '14038022', 'Form 137', '2017-08-21 10:54:29'),
(8, '14038022', 'Form 138', '2017-08-21 10:54:29'),
(9, '14038022', 'NSO Birth Certificate', '2017-08-21 10:54:29'),
(10, '14038023', 'Form 137', '2017-08-21 10:57:09'),
(11, '14038023', 'Form 138', '2017-08-21 10:57:09'),
(12, '14038023', 'NSO Birth Certificate', '2017-08-21 10:57:09'),
(13, '14038024', 'Form 137', '2017-08-21 10:59:27'),
(14, '14038024', 'Form 138', '2017-08-21 10:59:27'),
(15, '14038024', 'NSO Birth Certificate', '2017-08-21 10:59:27');

ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
