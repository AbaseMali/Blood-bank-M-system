-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 02:29 PM
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
  `dateTime` datetime NOT NULL,
  `gender` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `martial_status` varchar(100) NOT NULL,
  `blood_type` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` int(100) NOT NULL,
  `unit` int(11) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `full_name`, `dateTime`, `gender`, `job`, `martial_status`, `blood_type`, `email`, `contact_no`, `unit`, `creation_date`) VALUES
(1, ' Amal Abdirahman', '2019-09-10 15:01:00', 'Female', 'student', 'Single', 'B-', 'amal@gmail.com', 987976878, 1000, '0000-00-00'),
(3, '4444', '2019-03-03 15:03:00', 'Female', 'student', 'Married', 'A+', 'amal@gmail.com', 987976878, 1000, '0000-00-00'),
(4, 'jama', '2019-09-09 08:08:00', 'Male', 'designer', 'Married', 'A+', 'abase.mohamed.ali@gmail.com', 987976878, 1000, '0000-00-00'),
(5, 'Ahmed', '2019-09-12 13:59:00', 'Female', 'designer', 'Single', 'A+', 'cabdimaxed@hotmail.com', 987976878, 1000, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
`labid` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dateTime` datetime NOT NULL,
  `gender` varchar(100) NOT NULL,
  `blood_type` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`labid`, `donor_id`, `fullname`, `dateTime`, `gender`, `blood_type`, `unit`, `status`) VALUES
(7, 1, ' Amal Abdirahman', '2019-09-10 15:01:00', 'Female', 'B-', '1000', 'Sended'),
(8, 3, '4444', '2019-03-03 15:03:00', 'Female', 'A+', '1000', 'Sended');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `name`, `gender`, `blood_group`, `date_time`, `phone`, `email`, `hospital`, `unit`) VALUES
(6, 'Abase Mohamed jama', 'Male', 'O+', '2018-10-03 03:20:00.000000', 987976878, 'cabdimaxed@hotmail.com', 'gargaar', '500ml'),
(7, 'Abase Mohamed', 'Male', 'A+', '2019-08-31 03:00:00.000000', 987976878, 'Abase9201@admasuniversity.com', 'gargaar', '500ml');

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
(4, 'jama', 'jamaMo', 'Jama@gmail.com', 'jama77', 5544, 'Recipient'),
(5, 'Abase', 'abase', 'abase@gmail.com', 'abase88', 9988087, 'Lab'),
(6, 'Amal', 'amaliza', 'amaliza@gmail.com', 'amal88', 4221937, 'Admin');

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
MODIFY `donor_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
MODIFY `labid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `request_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
