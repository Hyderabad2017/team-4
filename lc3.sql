-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 09:27 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lc`
--

-- --------------------------------------------------------

--
-- Table structure for table `demographic`
--

CREATE TABLE `demographic` (
  `name` varchar(11) NOT NULL,
  `age` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `parentalstatus` varchar(10) DEFAULT NULL,
  `occupation` varchar(10) DEFAULT NULL,
  `income` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dstudent`
--

CREATE TABLE `dstudent` (
  `stuid` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `sgender` varchar(20) NOT NULL,
  `sage` int(20) NOT NULL,
  `sps` varchar(20) NOT NULL,
  `sfamilytype` varchar(20) NOT NULL,
  `ssiblings` int(20) NOT NULL,
  `soob` int(20) NOT NULL,
  `spedul` varchar(20) NOT NULL,
  `sfamin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dstudent`
--

INSERT INTO `dstudent` (`stuid`, `sname`, `sgender`, `sage`, `sps`, `sfamilytype`, `ssiblings`, `soob`, `spedul`, `sfamin`) VALUES
('1', 'ramu', 'm', 10, 'bp', '', 2, 2, 'primary', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `name` varchar(20) NOT NULL,
  `eid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`name`, `eid`, `password`, `phno`) VALUES
('srikanth', '', '', 0),
('a', 'a', 'a', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` varchar(20) NOT NULL,
  `eid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `tid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `eid`, `password`, `phno`, `tid`) VALUES
('srikanth', 'srikanth@gmail.com', 'srikanth', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dstudent`
--
ALTER TABLE `dstudent`
  ADD PRIMARY KEY (`stuid`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
