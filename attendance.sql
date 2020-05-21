-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 01:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `btcs502`
--

CREATE TABLE `btcs502` (
  `s_id` int(5) DEFAULT NULL,
  `sname` char(18) DEFAULT NULL,
  `rollno` int(8) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `btcs502`
--

INSERT INTO `btcs502` (`s_id`, `sname`, `rollno`, `status`) VALUES
(10105, 'Abhishek', 1731822, 'P'),
(10106, 'Aditya', 1731823, 'P'),
(10107, 'Amisha', 1731824, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `btcs503`
--

CREATE TABLE `btcs503` (
  `s_id` int(5) DEFAULT NULL,
  `sname` char(18) DEFAULT NULL,
  `rollno` int(8) DEFAULT NULL,
  `11/05/2020` char(1) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loginup`
--

CREATE TABLE `loginup` (
  `u_id` int(5) NOT NULL,
  `username` char(10) NOT NULL,
  `pswd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginup`
--

INSERT INTO `loginup` (`u_id`, `username`, `pswd`) VALUES
(1001, 'sastri5', 'btcs502');

-- --------------------------------------------------------

--
-- Table structure for table `stdlist`
--

CREATE TABLE `stdlist` (
  `s_id` int(11) NOT NULL,
  `rollno` int(8) NOT NULL,
  `s_name` char(18) NOT NULL,
  `tname` char(18) NOT NULL,
  `sub_code` varchar(8) NOT NULL,
  `26/03/2020` char(1) DEFAULT NULL,
  `27/03/2020` char(1) DEFAULT NULL,
  `11/05/2020` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdlist`
--

INSERT INTO `stdlist` (`s_id`, `rollno`, `s_name`, `tname`, `sub_code`, `26/03/2020`, `27/03/2020`, `11/05/2020`) VALUES
(10105, 1731822, 'Abhishek', 'Andrew Ng', 'BTCS502', 'P', 'P', 'P'),
(10106, 1731823, 'Aditya', 'Andrew Ng', 'BTCS502', 'A', 'P', 'P'),
(10107, 1731824, 'Amisha', 'Andrew Ng', 'BTCS502', 'A', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollno` int(7) NOT NULL,
  `s_name` char(18) NOT NULL,
  `sub_code` varchar(8) NOT NULL,
  `26/03/2020` char(1) DEFAULT NULL,
  `tname` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `s_name`, `sub_code`, `26/03/2020`, `tname`) VALUES
(1731842, 'Kushagra Mittal', '', '0', ''),
(1731842, 'Kushagra Mittal<br', '', '0', ''),
(1731842, 'Kushagra Mittal', '', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int(3) NOT NULL,
  `sub_code` int(8) NOT NULL,
  `sub_name` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(5) NOT NULL,
  `tname` char(18) NOT NULL,
  `sub_code` varchar(8) NOT NULL,
  `username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `tname`, `sub_code`, `username`) VALUES
(102, 'Sastri', 'BTCS503', 'sastri5'),
(1001, 'Andrew Ng', 'BTCS502', '');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `s_id` int(5) DEFAULT NULL,
  `sname` char(18) DEFAULT NULL,
  `rollno` int(8) DEFAULT NULL,
  `tname` char(18) DEFAULT NULL,
  `sub_code` varchar(8) DEFAULT NULL,
  `26/03/2020` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`s_id`, `sname`, `rollno`, `tname`, `sub_code`, `26/03/2020`) VALUES
(10105, 'Abhishek', 1731822, NULL, NULL, NULL),
(10106, 'Aditya', 1731823, NULL, NULL, NULL),
(10107, 'Amisha', 1731824, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginup`
--
ALTER TABLE `loginup`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginup`
--
ALTER TABLE `loginup`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
