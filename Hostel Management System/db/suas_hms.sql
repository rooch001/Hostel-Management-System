-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 06:45 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suas_hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `stu_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `gender` enum('m','f') NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`stu_id`, `name`, `dob`, `email`, `phone`, `gender`, `city`, `state`, `username`, `PASSWORD`) VALUES
(101, 'Roochin Dwivedi', '2016-07-31', 'dwivediroochin@gmail.com', 7415140895, 'm', 'Indore', 'Madhya Pradesh', 'roochin', 'roochin'),
(102, 'Samyak Jain', '2016-11-06', 'capsam@gmail.com', 6576349271, 'm', 'IIM', 'Madhya Pradesh', 'samyak', 'samyak'),
(103, 'Ishan Patle', '2016-10-06', 'ishanpatle@gmail.com', 9845670234, 'm', 'indore', 'Madhya Pradesh', 'ishan', 'ishan'),
(104, 'Harsh Sharma', '2017-11-14', 'sharmaharsh@gmail.com', 8787876554, 'm', 'Indore', 'Madhya Pradesh', 'harsh', 'harsh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
