-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 04:08 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vespool`
--

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `Organization_ID` int(11) NOT NULL,
  `Organization_Name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`Organization_ID`, `Organization_Name`) VALUES
(202, 'KJSCE'),
(201, 'VESIT');

-- --------------------------------------------------------

--
-- Table structure for table `request rides`
--

CREATE TABLE `request rides` (
  `Request_ID` int(11) NOT NULL,
  `Ride_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Ride_Status` varchar(64) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Flag` varchar(64) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request rides`
--

INSERT INTO `request rides` (`Request_ID`, `Ride_ID`, `User_ID`, `Ride_Status`, `Time`, `Flag`) VALUES
(24, 101, 14, 'Single', '2017-10-20 10:12:49', 'Done'),
(25, 101, 30, 'Single', '2017-10-20 10:14:35', 'Done'),
(32, 101, 37, 'Single', '2017-10-20 19:15:35', 'Done'),
(33, 101, 14, 'Single', '2017-10-20 19:42:28', 'Done'),
(34, 101, 39, 'Single', '2017-10-21 16:27:50', 'Done'),
(35, 101, 39, 'Double', '2017-10-21 16:29:27', 'Done'),
(36, 101, 39, 'Single', '2017-10-21 16:35:51', 'Done'),
(37, 101, 39, 'Double', '2017-10-21 16:43:01', 'Done'),
(38, 101, 39, 'Single', '2017-10-21 16:43:35', 'Done'),
(39, 101, 39, 'Single', '2017-10-21 16:51:19', 'Done'),
(40, 101, 30, 'Single', '2017-10-21 16:52:01', 'Done'),
(41, 101, 37, 'Double', '2017-10-21 16:52:59', 'Done'),
(42, 101, 39, 'Single', '2017-10-21 17:41:53', 'Done'),
(43, 101, 39, 'Single', '2017-10-21 17:43:37', 'Done'),
(44, 101, 39, 'Single', '2017-10-21 17:54:38', 'Done'),
(45, 101, 39, 'Single', '2017-10-21 17:58:21', 'Done'),
(46, 101, 39, 'Single', '2017-10-21 18:24:06', 'Done'),
(47, 103, 39, 'Single', '2017-10-21 20:00:29', 'Done'),
(48, 103, 30, 'Single', '2017-10-22 04:40:19', 'Done'),
(49, 103, 37, 'Single', '2017-10-22 08:52:52', 'Done'),
(50, 101, 19, 'Single', '2017-10-22 10:00:27', 'Done'),
(51, 101, 30, 'Single', '2017-10-22 10:03:06', 'Done'),
(52, 101, 39, 'Single', '2017-10-22 10:08:18', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `ride`
--

CREATE TABLE `ride` (
  `Ride_ID` int(11) NOT NULL,
  `Ride_Source` varchar(124) NOT NULL,
  `Ride_Destination` varchar(124) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ride`
--

INSERT INTO `ride` (`Ride_ID`, `Ride_Source`, `Ride_Destination`) VALUES
(101, 'Kurla Station', 'VESIT'),
(102, 'VESIT', 'Kurla Station'),
(103, 'Chembur Station', 'VESIT'),
(104, 'VESIT', 'Chembur Station'),
(105, 'Vidyavihar Station', 'KJSCE'),
(106, 'KJSCE', 'Vidyavihar Station');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `User_Name` text NOT NULL,
  `User_Mobile_No` varchar(10) NOT NULL,
  `User_email` varchar(255) NOT NULL,
  `User_password` varchar(255) NOT NULL,
  `User_City` varchar(255) NOT NULL,
  `User_state` varchar(255) NOT NULL,
  `User_Pincode` varchar(10) NOT NULL,
  `Study_At_or_Work_At` varchar(255) NOT NULL,
  `User_Gender` varchar(10) NOT NULL,
  `User_DateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_Name`, `User_Mobile_No`, `User_email`, `User_password`, `User_City`, `User_state`, `User_Pincode`, `Study_At_or_Work_At`, `User_Gender`, `User_DateOfBirth`) VALUES
(1, 'Abcd', '9920456585', 'abcd@gmail.com', '123456789', 'Mumbai', 'Maharashtra', '400089', 'VESIT', 'Male', '2017-10-02'),
(12, 'Abcde', '7744558866', 'abcde@gmail.com', '123456789', 'mumbai', 'maharashtra', '400056', 'VESIT', 'male', '1987-12-14'),
(14, 'Abcdef', '7744558899', 'abcdef@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'mumbai', 'maharashtra', '400089', 'VESIT', 'male', '1997-10-14'),
(19, 'Abcdefg', '7744551122', 'abcdefg@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'mumbai', 'maharashtra', '400256', 'VESIT', 'male', '1987-10-14'),
(22, 'Abcdefgh', '7744551121', 'abcdefgh@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Mumbai', 'Maharashtra', '400256', 'VESIT', 'Male', '1987-10-14'),
(24, 'Abcdefghi', '7744551123', 'abcdefghi@gmail.com', '884ce4bb65d328ecb03c598409e2b168', 'Mumbai', 'Maharashtra', '400256', 'VESIT', 'Male', '1987-10-14'),
(26, 'Abcdefghij', '7788552211', 'abcdefghij@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Mumbai', 'Maharashtra', '400089', 'VESIT', 'Male', '1998-10-14'),
(30, 'GG', '8844556677', 'gg@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Mumbai', 'Maharashtra', '400089', 'VESIT', 'Female', '1997-10-14'),
(31, 'Asdfg', '9977663355', 'asdfg@yahoo.co.in', '25f9e794323b453885f5181f1b624d0b', 'Mumbai', 'Maharashtra', '400025', 'KJSCE', 'Female', '1995-05-25'),
(33, 'Sophia', '9977443355', 'sophia@yahoo.co.in', '25f9e794323b453885f5181f1b624d0b', 'Mumbai', 'Maharashtra', '400025', 'KJSCE', 'Female', '1998-04-27'),
(35, 'Anushka', '9787443355', 'anushka1601@yahoo.co.in', '25f9e794323b453885f5181f1b624d0b', 'Mumbai', 'Maharashtra', '400087', 'KJSCE', 'Female', '1994-01-16'),
(36, 'Gagan', '9787414355', 'gagan18@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Mumbai', 'Maharashtra', '400087', 'KJSCE', 'Female', '1999-02-18'),
(37, 'Raj', '8877445566', 'raj06@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Mumbai', 'Maharashtra', '400089', 'VESIT', 'Male', '1990-05-06'),
(39, 'Rajani', '9988774455', 'rajani@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Mumbai', 'Maharashtra', '400085', 'VESIT', 'Male', '1998-05-06'),
(40, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`Organization_ID`),
  ADD UNIQUE KEY `Organization_Name` (`Organization_Name`);

--
-- Indexes for table `request rides`
--
ALTER TABLE `request rides`
  ADD PRIMARY KEY (`Request_ID`),
  ADD KEY `Ride_ID` (`Ride_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `ride`
--
ALTER TABLE `ride`
  ADD PRIMARY KEY (`Ride_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `User_Mobile_No` (`User_Mobile_No`),
  ADD UNIQUE KEY `User_email` (`User_email`),
  ADD KEY `Study_At_or_Work_At` (`Study_At_or_Work_At`),
  ADD KEY `Study_At_or_Work_At_2` (`Study_At_or_Work_At`),
  ADD KEY `Study_At_or_Work_At_3` (`Study_At_or_Work_At`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `Organization_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
--
-- AUTO_INCREMENT for table `request rides`
--
ALTER TABLE `request rides`
  MODIFY `Request_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `ride`
--
ALTER TABLE `ride`
  MODIFY `Ride_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `request rides`
--
ALTER TABLE `request rides`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
