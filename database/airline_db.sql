-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2016 at 10:27 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `airline_db`

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'bibek', 'bibek@gmail.com', 'nice'),
(2, 'hari', 'hari@gmail.com', 'good'),
(6, 'Sangita', 'sangitayadav2015@gmail.com', '  good job!!!           '),
(7, 'Bibek', 'bibek011@live.com', ' owsm!           '),
(15, 'Ahmad', 'armirazai@gmail.com', '    This is a very good website.          '),
(16, 'bibek', 'bibek011@live.com', 'nice one!!!             '),
(17, 'niru', 'sdfsf', ' \r\n  nice            ');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `flight_id` int(11) NOT NULL,
  `flight_name` varchar(32) NOT NULL,
  `leaving_from` varchar(32) NOT NULL,
  `going_to` varchar(32) NOT NULL,
  `depart_date` text NOT NULL,
  `time` text NOT NULL,
  `arrival_date` text NOT NULL,
  `dest_time` time NOT NULL,
  `fare` int(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`flight_id`, `flight_name`, `leaving_from`, `going_to`, `depart_date`, `time`, `arrival_date`, `dest_time`, `fare`) VALUES
(1, 'an-001', 'Delhi', 'Bangalore', '2015-10-21', '20:00:00', '2015-10-21', '22:00:00', 6000),
(2, 'an-002', 'Bangalore', 'Delhi', '2015-10-25', '10:00:00', '2015-09-25', '12:25:00', 6500),
(3, 'an-003', 'Delhi', 'Bangalore', '2015-10-21', '14:45:00', '2015-10-21', '17:30:00', 7500),
(4, 'an-004', 'Bangalore', 'Delhi', '2015-10-25', '20:30:00', '2015-10-21', '23:00:00', 8000),
(7, 'an-007', 'Delhi', 'Paris', '2016-01-01', '15:00:00', '2016-01-01', '23:00:00', 50000),
(8, 'an-008', 'Mumbai', 'New York', '2015-10-25', '10:00:00', '2015-10-25', '21:10:00', 45000),
(9, 'an-009', 'Bangalore', 'Agra', '2015-10-21', '20:00:00', '2015-10-20', '23:30:00', 4500),
(10, 'an-0010', 'kabul', 'kathmandu', '2015-10-26', '09:00:00', '2015-10-26', '18:00:00', 35000),
(16, 'an-0016', 'Delhi', 'Bangalore', '2015:10:25', '12:30:00', '2015:10:25', '15:15:00', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE IF NOT EXISTS `passengers` (
  `passenger_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `passport` varchar(15) NOT NULL,
  `visa` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `email` varchar(32) NOT NULL,
  `contact` int(14) NOT NULL,
  `pin` varchar(11) NOT NULL,
  `leaving_from` varchar(32) NOT NULL,
  `going_to` varchar(32) NOT NULL,
  `depart_date` text NOT NULL,
  `depart_time` text NOT NULL,
  `arrival_time` text NOT NULL,
  `grand_fare` int(10) NOT NULL,
  `returning_from` varchar(32) NOT NULL DEFAULT '0',
  `returning_to` varchar(32) NOT NULL DEFAULT '0',
  `returning_date` text,
  `returning_time` text NOT NULL,
  `reaching_time` text NOT NULL,
  `fare` int(32) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`passenger_id`, `first_name`, `last_name`, `passport`, `visa`, `country`, `address1`, `address2`, `email`, `contact`, `pin`, `leaving_from`, `going_to`, `depart_date`, `depart_time`, `arrival_time`, `grand_fare`, `returning_from`, `returning_to`, `returning_date`, `returning_time`, `reaching_time`, `fare`) VALUES
(55, 'ahmad', 'reshad', '124563', '2548', '', 'kbl', 'afgan', 'ahmad@gmail.com', 58649754, '456', 'Delhi', 'Bangalore', '2015-10-21', '14:45:00', '17:30:00', 7500, 'Bangalore', 'Delhi', '2015-10-25', '14:45:00', '12:25:00', 6500),
(57, 'Ankit', 'Kumar', 'IN-96', 'Aj-64', '', 'Acharya,bangalore', '', 'ankit@gmail.com', 2147483647, '123ANK', 'Delhi', 'Bangalore', '2015-10-21', '14:45:00', '17:30:00', 7500, 'Bangalore', 'Delhi', '2015-10-25', '14:45:00', '23:00:00', 8000),
(58, 'fdgdfg', 'dffdg', 'dfgdfg', 'dfgdf', '', 'dfgdfg', 'dfgdf', 'dfdfgd', 2147483647, '123456', 'Delhi', 'Bangalore', '2015-10-21', '14:45:00', '17:30:00', 7500, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `type`) VALUES
(7, 'reshad', 'password', 'reshad', '', 'armirazai@gmail.com', 1),
(15, 'bibek', 'password', 'Bibek', 'kumar', 'bibek@gmail.com',  0),
(17, 'bale', 'password', 'Gareth', 'Bale', 'bale@gmail.com', 1),
(18, 'ankit', 'password', 'Ankit', 'Verma', 'ankit1@gmail.com',  0),
(19, 'abhinash', 'password', 'abhi', 'shah', 'abhi@gmail.com', 0),
(20, 'sonam', 'password', 'sonam', 'sherpa', 'sonam@gmail.com',  0),
(21, 'nikhil', 'password', 'nikhil', 'kumar', 'nikhil@gmail.com',  1),
(22, 'Aditya', 'password', 'Aditya', 'deshak', 'Aditya@gmail.com',  1),
(23, 'Sanket', 'password', 'Sanket', 'mahato', 'sanket@gmail.com',  0),
(24, 'test', 'password', 'Bebi', 'kumar', 'kumar@gmail.com', 0),
(25, 'niranjan', 'password', 'naranjan', 'yadav', 'niranjan@gmail.com',  1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`passenger_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
