-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2017 at 04:58 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `lrn` varchar(15) NOT NULL,
  `grade` varchar(15) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `age` int(4) NOT NULL,
  `mother_tongue` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `father_contact` varchar(20) NOT NULL,
  `mother_contact` varchar(20) NOT NULL,
  `guardian` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `guardian_contact` varchar(20) NOT NULL,
  `requirements` varchar(20) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `lrn`, `grade`, `first_name`, `middle_name`, `last_name`, `sex`, `contact`, `birth_date`, `birth_place`, `age`, `mother_tongue`, `religion`, `street`, `barangay`, `city`, `province`, `father_name`, `mother_name`, `father_contact`, `mother_contact`, `guardian`, `relationship`, `guardian_contact`, `requirements`, `note`) VALUES
(2, 'rerrwrw', '', 'werwrwrw', 'rwrwrwer', 'erwerwrwer', 'Female', 'wrwerwwrw', '2017-08-09', 'wrwrw', 23, 'rwerwrwrw', 'rwrerwrwrwr', 'rwrwwr', 'wrwrwerwer', 'wrrewrwerw', 'rewrwrwrw', 'rwerwrwrw', 'rwerwerwer', 'werwerwer', 'wrwrwwr', 'wrwrwrwe', 'rwerwrwrw', 'rwerwerwrwe', '', ''),
(3, 'dasdada', '', 'dasdasdasd', 'dasdada', 'dadada', 'Female', 'dasdada', '2017-08-09', 'sdasdada', 12, 'sdadasda', 'dasdasdad', 'asdadasd', 'adadas', 'dasdad', 'adasdad', 'dadasda', 'dasdadas', 'ddasdasd', 'adadasasd', 'dasdasdas', 'dasdasdasd', 'asdasda', '', ''),
(4, 'dsadasd', '', 'dadad', 'asdasda', 'dasdas', 'Male', 'dasdads', '2017-08-29', 'sadada', 0, 'asdasda', 'dasdasda', 'dasdas', 'dasdas', 'dasda', 'dasda', 'dasdada', 'dasda', 'asdasd', 'dasdad', 'dasdad', 'dasda', 'dasda', '', ''),
(5, 'xzczxc', '', 'czxczx', 'czxczcz', 'czxczcz', 'Female', 'cxzczxcz', '2017-09-07', 'cxzczxcz', 12, 'cxvxvxcvx', 'vxcvxvxcv', 'xvxcv', 'xvxcv', 'xcvxcvx', 'vxcvx', 'xcvxcvx', 'cvxcvxcv', 'vcxvxcvxc', 'vxcvxc', 'xcvxcv', 'xcvxvxcv', 'xcvxcv', '', ''),
(6, 'adadad', '', 'dsadasd', 'adasdadad', 'asdasda', 'Male', 'dadada', '2017-08-16', 'dasdada', 45, 'dsass', 'ssssss', 'ssssssssss', 'sssssssssssssssssss', 'ssssssssssssssssssss', 'sssssssssssssssssssss', 'sssssssssssssssssss', 'sssssssssssssss', 'ssssssssssss', 'sssssssssssssss', 'sssssssssssssssssss', 'sssssssssssssss', 'sssssssssssssss', '', ''),
(7, 'fsdfsffds', '', 'fdsfsdfsd', 'fsdfsdfsd', 'fsdfsdfsd', 'Female', 'fsdfsdff', '2017-08-17', 'dsfsfsf', 34, 'fdsfsfs', 'sfsfsd', 'fsdfsdf', 'sfsdf', 'sfsdfsdfs', 'fsdsfs', 'fsdfsdfsd', 'fsdfsdfsdf', 'fsdfsfsd', 'fsdfsdfs', 'fsdfsfsdf', 'fsdfsdf', 'fsfsdfs', '', ''),
(8, '14038027', '', 'ewrwrw', 'rewrwrw', 'rwrwer', 'Male', '434344', '2017-08-09', 'rewrrw', 12, 'gfdgddg', 'dgdgd', 'dgdgd', 'gdfgdgd', 'gdgdgdg', 'gdgdgdfg', 'gdfgdfgdf', 'gdgdfgd', 'gdgdgdg', 'dgdfgdg', 'dgdfgdg', 'gdgdfgdfgd', 'gdfgdgd', '', ''),
(9, '777777777777', '', 'gjgjg', 'gjgjgjgh', 'jghjghjg', 'Female', 'ghjgjgjg', '2017-08-16', 'jhgjgjgjg', 67, 'jghjgjgjg', 'gjgjgj', 'gjgjgjg', 'jghjghjghjg', 'jgjgjgjg', 'jgjgjgjg', 'jgjgjgjgj', 'gjgjgj', 'gjgjgjghjg', 'jgjgjghjg', 'jghjgjg', 'jgjgjghjg', 'jghjgjg', '', ''),
(10, 'dsfsdfsf', '', 'fsdfsfsf', 'sdfsfsfs', 'fsdfsfsfs', 'Female', 'sfsfsfsf', '2017-08-23', 'sdfsfsf', 34, 'dsfsfsfs', 'fsfsfsfs', 'fsfsfsf', 'sfsfsf', 'sfsfsf', 'sfsfs', 'fsdfsdfsf', 'sdfsdfs', 'sfsfsf', 'sfsfsf', 'sfsfsf', 'sfsfsf', 'sdfsdfsd', '', ''),
(11, '8346735', '', 'katara', 'allahu', 'akbar', 'Female', '873429', '2017-08-08', 'kdfjsljkldf', 23, 'kdshfsdkjfhsdj', 'hjkhkjhk', 'hjkhkjhkjhk', 'kjhkjhk', 'hkjhkjhk', 'jhkhkjhkh', 'kjhkjhkjhkj', 'hkjhkjhkhjk', 'hjhkhkjhkhk', 'khkhjhkjh', 'kjhkjhkjh', 'jjkhkjhkjh', 'jhkjhkjhk', '', 'This is a shit pc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lrn` (`lrn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
