-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 10:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
`donor_id` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `martial_status` varchar(100) NOT NULL,
  `blood_type` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` int(100) NOT NULL,
  `unit` int(11) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `full_name`, `gender`, `job`, `martial_status`, `blood_type`, `email`, `contact_no`, `unit`, `creation_date`) VALUES
(18, 'fatima', 'Female', 'designer', 'Single', 'O+', 'kariye88@hotmail.com', 987976878, 1000, '2019-08-21'),
(19, 'Amal Abdirahman', 'Female', 'designer', 'Single', 'A+', 'amal@gmail.com', 987976878, 500, '0000-00-00'),
(20, 'jama', 'M', 'student', 'Single', 'B-', 'hahsh@aha', 987976878, 1000, '0000-00-00'),
(21, 'Amal ', 'Female', 'designer', 'Married', 'B+', 'amal@gmail.com', 987976878, 1000, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
`labid` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `blood_type` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`labid`, `donor_id`, `fullname`, `gender`, `blood_type`, `unit`, `status`) VALUES
(1, 14, 'Mohamed', 'M', 'A+', '12', 'Positive'),
(2, 14, 'Mohamed', 'M', 'A+', '12', 'Negative'),
(3, 14, 'Mohamed', 'M', 'A+', '12', 'Negative'),
(4, 16, 'Mohamed', 'M', 'A+', '12', 'Positive'),
(5, 14, 'Mohamed', 'M', 'A+', '12', 'Negative'),
(6, 14, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(7, 14, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(8, 14, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(9, 14, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(10, 14, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(11, 14, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(12, 14, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(13, 14, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(14, 15, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(15, 15, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(16, 14, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(17, 14, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(18, 14, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(19, 18, 'fatima', 'Female', 'O+', '1000', 'Sended'),
(20, 18, 'fatima', 'Female', 'O+', '1000', 'Sended'),
(21, 18, 'fatima', 'Female', 'O+', '1000', 'Sended'),
(22, 18, 'fatima', 'Female', 'O+', '1000', 'Sended'),
(23, 18, 'fatima', 'Female', 'O+', '1000', 'Sended'),
(24, 17, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(25, 16, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(26, 16, 'Mohamed', 'M', 'A+', '12', 'Sended'),
(27, 19, 'Amal Abdirahman', 'Female', 'B+', '500', 'Sended'),
(28, 19, 'Amal Abdirahman', 'Female', 'B+', '500', 'Sended'),
(29, 18, 'fatima', 'Female', 'O+', '1000', 'Sended'),
(30, 18, 'fatima', 'Female', 'O+', '1000', 'Sended'),
(31, 18, 'fatima', 'Female', 'O+', '1000', 'Sended'),
(32, 19, 'Amal Abdirahman', 'Female', 'A+', '500', 'Sended'),
(33, 19, 'Amal Abdirahman', 'Female', 'A+', '500', 'Sended'),
(34, 19, 'Amal Abdirahman', 'Female', 'A+', '500', 'Sended'),
(35, 19, 'Amal Abdirahman', 'Female', 'A+', '500', 'Sended'),
(36, 18, 'fatima', 'Female', 'O+', '1000', 'Sended'),
(37, 20, 'jama', 'M', 'B-', '1000', 'Negative');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`request_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `date_time` datetime(6) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `name`, `gender`, `blood_group`, `date_time`, `phone`, `email`, `hospital`, `unit`) VALUES
(1, 'Abase Mohamed', 'on', 'O+', '0000-00-00 00:00:00.000000', 987976878, 'Abase9201@admasuniversity.com', 'gargaar', 'Request'),
(2, 'Fatima osman', 'on', 'B-', '0000-00-00 00:00:00.000000', 987976878, 'fatima@gmail.com', 'gargaar', 'Request'),
(3, '', 'on', 'A+', '0000-00-00 00:00:00.000000', 0, '', '', 'Request'),
(4, 'Abase Mohamed', 'on', 'O-', '0000-00-00 00:00:00.000000', 987976878, 'Abase9201@admasuniversity.com', 'gargaar', 'Request');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `type_of_user` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `email`, `password`, `contact`, `type_of_user`) VALUES
(2, 'Ahmed', 'abase', 'Abase9201@admasuniversity.com', '123', 987976878, 'Lab'),
(4, 'jaajhas', 'jghagadjh', 'hahsh@aha', 'iuyahydha', 987976878, 'Lab'),
(5, 'jaajhas', 'ab', 'kariye88@hotmail.com', '123', 987976878, 'Recipient'),
(6, 'abas', 'abas', '', '123', 0, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
 ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
 ADD PRIMARY KEY (`labid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
MODIFY `donor_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
MODIFY `labid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `request_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
