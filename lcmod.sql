-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 04:56 AM
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
-- Table structure for table `childa`
--

CREATE TABLE `childa` (
  `name` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `tname` varchar(11) DEFAULT NULL,
  `actualage` int(11) DEFAULT NULL,
  `expectedage` int(11) DEFAULT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q4` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `childa`
--

INSERT INTO `childa` (`name`, `gender`, `tname`, `actualage`, `expectedage`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`) VALUES
('abc', 'female', 'pqr', 10, 8, 5, 1, 1, 1, 1, 1),
('def', 'male', 'stu', 11, 11, 4, 2, 2, 1, 1, 1),
('ghi', 'male', 'vwx', 9, 11, 3, 5, 5, 5, 5, 5);

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

--
-- Dumping data for table `demographic`
--

INSERT INTO `demographic` (`name`, `age`, `gender`, `parentalstatus`, `occupation`, `income`) VALUES
('xyz', '12', 'female', 'married', 'farmer', 10000),
('ashg', '13', 'male', 'married', 'gajs', 1526),
('xyz', '12', 'female', 'married', 'farmer', 10000),
('ashg', '13', 'male', 'married', 'gajs', 1526),
('xyz', '12', 'female', 'married', 'farmer', 10000),
('ashg', '13', 'male', 'married', 'gajs', 1526),
('xyz', '12', 'female', 'married', 'farmer', 10000),
('ashg', '13', 'male', 'married', 'gajs', 1526),
('xyz', '12', 'female', 'married', 'farmer', 10000),
('ashg', '13', 'male', 'married', 'gajs', 1526),
('xyz', '12', 'female', 'married', 'farmer', 10000),
('ashg', '13', 'male', 'married', 'gajs', 1526);

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

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `name` varchar(20) NOT NULL,
  `eid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surveya`
--

CREATE TABLE `surveya` (
  `school` varchar(11) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `q1` varchar(11) DEFAULT NULL,
  `q2` varchar(11) DEFAULT NULL,
  `q3` varchar(11) DEFAULT NULL,
  `q4` varchar(11) DEFAULT NULL,
  `q5` varchar(11) DEFAULT NULL,
  `q6` varchar(11) DEFAULT NULL,
  `q7` varchar(11) DEFAULT NULL,
  `q8` varchar(11) DEFAULT NULL,
  `q9` varchar(11) DEFAULT NULL,
  `q10` varchar(11) DEFAULT NULL,
  `q11` varchar(11) DEFAULT NULL,
  `q12` varchar(11) DEFAULT NULL,
  `q13` varchar(11) DEFAULT NULL,
  `q14` varchar(11) DEFAULT NULL,
  `q15` varchar(11) DEFAULT NULL,
  `q16` varchar(11) DEFAULT NULL,
  `q17` varchar(11) DEFAULT NULL,
  `q18` varchar(11) DEFAULT NULL,
  `q19` varchar(11) DEFAULT NULL,
  `q20` varchar(11) DEFAULT NULL,
  `q21` varchar(11) DEFAULT NULL,
  `q22` varchar(11) DEFAULT NULL,
  `q23` varchar(11) DEFAULT NULL,
  `q24` varchar(11) DEFAULT NULL,
  `q25` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surveya`
--

INSERT INTO `surveya` (`school`, `class`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`) VALUES
('xyz', 1, 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '', ''),
('fgh', 2, 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '', ''),
('xyz', 1, 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '', ''),
('fgh', 2, 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '', ''),
('xyz', 1, 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
('fgh', 2, 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `table 5`
--

CREATE TABLE `table 5` (
  `COL 1` varchar(3) DEFAULT NULL,
  `COL 2` varchar(6) DEFAULT NULL,
  `COL 3` varchar(3) DEFAULT NULL,
  `COL 4` int(2) DEFAULT NULL,
  `COL 5` int(2) DEFAULT NULL,
  `COL 6` varchar(3) DEFAULT NULL,
  `COL 7` varchar(7) DEFAULT NULL,
  `COL 8` varchar(7) DEFAULT NULL,
  `COL 9` varchar(7) DEFAULT NULL,
  `COL 10` varchar(7) DEFAULT NULL,
  `COL 11` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table 5`
--

INSERT INTO `table 5` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`) VALUES
('abc', 'female', 'pqr', 10, 8, 'yes', 'not yet', 'not yet', 'not yet', 'not yet', 'not yet'),
('def', 'male', 'stu', 11, 11, 'yes', 'not yet', 'not yet', 'not yet', 'not yet', 'not yet'),
('ghi', 'male', 'vwx', 9, 11, 'yes', 'not yet', 'not yet', 'not yet', 'not yet', 'not yet');

-- --------------------------------------------------------

--
-- Table structure for table `table 7`
--

CREATE TABLE `table 7` (
  `COL 1` varchar(3) DEFAULT NULL,
  `COL 2` int(1) DEFAULT NULL,
  `COL 3` varchar(2) DEFAULT NULL,
  `COL 4` varchar(2) DEFAULT NULL,
  `COL 5` varchar(2) DEFAULT NULL,
  `COL 6` varchar(3) DEFAULT NULL,
  `COL 7` varchar(3) DEFAULT NULL,
  `COL 8` varchar(3) DEFAULT NULL,
  `COL 9` varchar(3) DEFAULT NULL,
  `COL 10` varchar(3) DEFAULT NULL,
  `COL 11` varchar(3) DEFAULT NULL,
  `COL 12` varchar(3) DEFAULT NULL,
  `COL 13` varchar(3) DEFAULT NULL,
  `COL 14` varchar(3) DEFAULT NULL,
  `COL 15` varchar(3) DEFAULT NULL,
  `COL 16` varchar(3) DEFAULT NULL,
  `COL 17` varchar(3) DEFAULT NULL,
  `COL 18` varchar(3) DEFAULT NULL,
  `COL 19` varchar(3) DEFAULT NULL,
  `COL 20` varchar(3) DEFAULT NULL,
  `COL 21` varchar(3) DEFAULT NULL,
  `COL 22` varchar(3) DEFAULT NULL,
  `COL 23` varchar(3) DEFAULT NULL,
  `COL 24` varchar(3) DEFAULT NULL,
  `COL 25` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table 7`
--

INSERT INTO `table 7` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`, `COL 12`, `COL 13`, `COL 14`, `COL 15`, `COL 16`, `COL 17`, `COL 18`, `COL 19`, `COL 20`, `COL 21`, `COL 22`, `COL 23`, `COL 24`, `COL 25`) VALUES
('xyz', 1, 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
('fgh', 2, 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` varchar(20) NOT NULL,
  `eid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phno` int(20) NOT NULL,
  `tid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `eid`, `password`, `phno`, `tid`) VALUES
('alekya', 'p@gmail.com', 'alekya', 12345, 'xyz');

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
