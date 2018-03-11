CREATE TABLE `mother_tongue` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mother_tongue`
--

INSERT INTO `mother_tongue` (`id`, `name`) VALUES
(1, 'Tagalog'),
(2, 'English'),
(3, 'Aklanon'),
(4, 'Alta, Northern'),
(5, 'Alta, Southern'),
(6, 'Atta'),
(7, 'Bikol'),
(8, 'Cebuano'),
(9, 'Chavacano'),
(10, 'Ga\'dang'),
(11, 'Gaddang'),
(12, 'Hiligaynon'),
(13, 'Ibanag'),
(14, 'Ilocano'),
(15, 'Isinai'),
(16, 'Isnag'),
(17, 'Itawis'),
(18, 'Itneg'),
(19, 'Ivatan'),
(20, 'Kankanaey'),
(21, 'Kapampangan'),
(22, 'Kinaray-a'),
(23, 'Labin Agta'),
(24, 'Maguindanao'),
(25, 'Manobo'),
(26, 'Maranao'),
(27, 'Pangasinan'),
(28, 'Sambal'),
(29, 'Surigaonon'),
(30, 'Tausug'),
(31, 'Waray'),
(32, 'Yakan'),
(33, 'Yogad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mother_tongue`
--
ALTER TABLE `mother_tongue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mother_tongue`
--
ALTER TABLE `mother_tongue`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
