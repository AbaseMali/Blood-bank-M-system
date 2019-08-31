-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 01:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `martial_status` varchar(100) NOT NULL,
  `blood_type` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` int(100) NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `full_name`, `gender`, `job`, `martial_status`, `blood_type`, `email`, `contact_no`, `unit`) VALUES
(14, 'Mohamed', 'M', 'Software Developer', 'Married', 'A+', 'cabdiqani.1@hotmail.com', 633864763, 12),
(15, 'Mohamed', 'M', 'Software Developer', 'Married', 'A+', 'cabdiqani.1@hotmail.com', 633864763, 12),
(16, 'Mohamed', 'M', 'Software Developer', 'Married', 'A+', 'cabdiqani.1@hotmail.com', 633864763, 12),
(17, 'Mohamed', 'M', 'Software Developer', 'Married', 'A+', 'maxamedxus2009@gmail.com', 633864763, 12);

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `labid` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `blood_type` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`labid`, `donor_id`, `fullname`, `gender`, `blood_type`, `unit`, `status`) VALUES
(1, 14, 'Mohamed', 'M', 'A+', '12', 'Positive'),
(2, 14, 'Mohamed', 'M', 'A+', '12', 'Negative'),
(3, 14, 'Mohamed', 'M', 'A+', '12', 'Negative'),
(4, 16, 'Mohamed', 'M', 'A+', '12', 'Positive');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `date_time` datetime(6) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `type_of_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `email`, `password`, `contact`, `type_of_user`) VALUES
(1, 'abdihamed', 'AYA', 'aya@hsgs.com', 'heheheheh', 99999, 'admin'),
(2, 'Ahmed', 'Abase Mohamed', 'Abase9201@admasuniversity.com', 'jhjhjg', 987976878, 'Lab'),
(3, 'Ahmed', 'jsshssh', 'kariye88@hotmail.com', 'kdwhkdadkjs', 987976878, 'Recipient'),
(4, 'jaajhas', 'jghagadjh', 'hahsh@aha', 'iuyahydha', 987976878, 'Lab'),
(5, 'jaajhas', '', 'kariye88@hotmail.com', '', 987976878, ''),
(6, 'kkkk', '', '', '', 0, 'Admin'),
(7, 'Mohamed', 'moha', 'maxamedxus2009@gmail.com', '123456', 659030466, 'Lab');

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
  MODIFY `donor_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `labid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
