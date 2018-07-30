-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2017 at 02:13 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'bibek', 'bibek@gmail.com', 'nice'),
(2, 'hari', 'hari@gmail.com', 'good'),
(6, 'Sangita', 'sangitayadav2015@gmail.com', '	good job!!!				    '),
(7, 'Bibek', 'bibek011@live.com', '	owsm!				    '),
(15, 'Ahmad', 'armirazai@gmail.com', '		This is a very good website.			    '),
(16, 'bibek', 'bibek011@live.com', 'nice one!!!					    '),
(17, 'niru', 'sdfsf', ' \r\n	nice				    '),
(18, 'ME', 'YOU', 'DEM'),
(19, '', '', ''),
(20, 'iamhamisu', 'haahahha', 'ajjaj'),
(21, 'lawal', 'hamisu', 'alajfdl;d;s');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `flight_id` int(11) NOT NULL,
  `flight_name` varchar(32) NOT NULL,
  `leaving_from` varchar(32) NOT NULL,
  `going_to` varchar(32) NOT NULL,
  `depart_date` date NOT NULL,
  `time` text NOT NULL,
  `arrival_date` text NOT NULL,
  `dest_time` time NOT NULL,
  `fare` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`flight_id`, `flight_name`, `leaving_from`, `going_to`, `depart_date`, `time`, `arrival_date`, `dest_time`, `fare`) VALUES
(2, 'kne-002', 'Bangalore', 'Delhi', '2017-09-14', '10:00:00', '2015-09-25', '12:25:00', 6500),
(3, 'kne-003', 'Nigeria', 'Ghana', '2017-09-17', '14:45:00', '2015-10-21', '17:30:00', 7500),
(4, 'kne-004', 'Bangalore', 'Delhi', '2015-10-25', '20:30:00', '2015-10-21', '23:00:00', 8000),
(7, 'kne-007', 'Delhi', 'Paris', '2016-01-01', '15:00:00', '2016-01-01', '23:00:00', 50000),
(8, 'kne-008', 'Mumbai', 'New York', '2015-10-25', '10:00:00', '2015-10-25', '21:10:00', 45000),
(9, 'kne-009', 'Bangalore', 'Agra', '2015-10-21', '20:00:00', '2015-10-20', '23:30:00', 4500),
(10, 'kne-0010', 'kabul', 'kathmandu', '2015-10-26', '09:00:00', '2015-10-26', '18:00:00', 35000),
(16, 'kne-0016', 'Delhi', 'Bangalore', '2015-10-25', '12:30:00', '2015:10:25', '15:15:00', 7000),
(18, 'kne-0017', 'Saudi Arabia', 'Dubai', '2017-09-14', '13:59', '', '12:00:00', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `passenger_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `visa` int(30) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(32) NOT NULL,
  `contact` int(15) NOT NULL,
  `leaving_from` varchar(32) NOT NULL,
  `going_to` varchar(32) NOT NULL,
  `depart_date` date NOT NULL,
  `depart_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `fare` int(32) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`passenger_id`, `first_name`, `visa`, `country`, `address`, `email`, `contact`, `leaving_from`, `going_to`, `depart_date`, `depart_time`, `arrival_time`, `fare`) VALUES
(57, 'Ankit', 0, '', 'Acharya,bangalore', 'ankit@gmail.com', 2147483647, 'Delhi', 'Bangalore', '2015-10-21', '14:45:00', '17:30:00', 8000),
(58, 'fdgdfg', 0, '', 'dfgdfg', 'dfdfgd', 2147483647, 'Delhi', 'Bangalore', '2015-10-21', '14:45:00', '17:30:00', 0),
(68, 'hamisu', 9090, 'Nigeria', 'okene road nagazi', 'lahamisuahmed@gmail.com', 2147483647, 'Bangalore', 'Delhi', '2017-09-14', '10:00:00', '12:25:00', 6500),
(69, 'hamisu', 9090, 'Nigeria', 'okene road nagazi', 'lahamisuahmed@gmail.com', 2147483647, 'Bangalore', 'Delhi', '2017-09-14', '10:00:00', '12:25:00', 6500),
(70, 'lawal faisal', 8080, 'Nigeria', 'lugbe abuja', 'lafaisal@gmiaml.com', 983736363, 'Bangalore', 'Delhi', '2017-09-14', '10:00:00', '12:25:00', 6500),
(71, 'lawal faisal', 8080, 'Nigeria', 'lugbe abuja', 'lafaisal@gmiaml.com', 983736363, 'Bangalore', 'Delhi', '2017-09-14', '10:00:00', '12:25:00', 6500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `type` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `type`) VALUES
(7, 'reshad', 'password', 'reshad', '', 'armirazai@gmail.com', 1),
(15, 'bibek', 'password', 'Bibek', 'kumar', 'bibek@gmail.com', 0),
(17, 'bale', 'password', 'Gareth', 'Bale', 'bale@gmail.com', 1),
(18, 'ankit', 'password', 'Ankit', 'Verma', 'ankit1@gmail.com', 0),
(19, 'abhinash', 'password', 'abhi', 'shah', 'abhi@gmail.com', 0),
(20, 'sonam', 'password', 'sonam', 'sherpa', 'sonam@gmail.com', 0),
(21, 'nikhil', 'password', 'nikhil', 'kumar', 'nikhil@gmail.com', 1),
(22, 'Aditya', 'password', 'Aditya', 'deshak', 'Aditya@gmail.com', 1),
(23, 'Sanket', 'password', 'Sanket', 'mahato', 'sanket@gmail.com', 0),
(24, 'test', 'password', 'Bebi', 'kumar', 'kumar@gmail.com', 0),
(25, 'niranjan', 'password', 'naranjan', 'yadav', 'niranjan@gmail.com', 1),
(26, 'lawalhamisu', 'hamisu', 'hamisu', 'lawal', 'lahamisuahmed@gmail.com', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
