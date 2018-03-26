-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 03:30 AM
-- Server version: 5.7.21-log
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_registration`
--

CREATE TABLE `agent_registration` (
  `agentid` int(5) NOT NULL,
  `Licenceno` varchar(50) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `experienceinyears` int(3) NOT NULL,
  `contiresafiliates` varchar(60) NOT NULL,
  `universitiesafiliate` varchar(60) NOT NULL,
  `afname` varchar(40) NOT NULL,
  `alname` varchar(40) NOT NULL,
  `amname` varchar(40) NOT NULL,
  `agender` varchar(10) NOT NULL,
  `highesteducation` varchar(40) NOT NULL,
  `acontact` int(10) NOT NULL,
  `aemail` varchar(100) NOT NULL,
  `businesscard` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chooseprograms`
--

CREATE TABLE `chooseprograms` (
  `cpid` int(3) NOT NULL,
  `foiid` int(3) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chooseprograms`
--

INSERT INTO `chooseprograms` (`cpid`, `foiid`, `name`) VALUES
(1, 1, 'Diploma in Public Relations'),
(2, 1, 'BA in media marketing'),
(3, 1, 'Bachelor in Business Marketing'),
(4, 1, 'Diploma in Advertising '),
(5, 1, 'Bachelor of Business Administration'),
(11, 3, 'Bachelor Science in accounting and finance'),
(12, 3, 'Diploma in Accounting '),
(13, 3, 'Diploma in Finance'),
(14, 3, 'Bachelor in Banking and Finanace'),
(15, 3, 'Master of Accounting in Forensic Analysis'),
(17, 3, 'Diploma in Accounting '),
(18, 3, 'Diploma in Finance'),
(19, 3, 'Bachelor in Banking and Finanace'),
(20, 3, 'Master of Accounting in Forensic Analysis'),
(21, 7, 'Diploma in Corporate communication'),
(22, 7, 'Diploma in Mass communication'),
(23, 7, 'Diploma in Broadcast Journalism'),
(24, 7, 'DIP in Communication'),
(25, 7, 'Master of Corporate Governance'),
(26, 7, 'Diploma in Corporate communication'),
(27, 7, 'Diploma in Mass communication'),
(28, 7, 'Diploma in Broadcast Journalism'),
(29, 7, 'DIP in Communication'),
(30, 7, 'Master of Corporate Governance'),
(31, 9, 'Diploma in food science and technology'),
(32, 9, 'Diploma in Packaging, Design and Technology'),
(33, 9, 'Diploma in food Services'),
(34, 9, 'BSC in food science and nutrition'),
(35, 9, 'Diploma in Food Technology'),
(36, 9, 'Diploma in food science and technology'),
(37, 9, 'Diploma in Packaging, Design and Technology'),
(38, 9, 'Diploma in food Services'),
(39, 9, 'BSC in food science and nutrition'),
(40, 9, 'Diploma in Food Technology'),
(41, 11, 'MSC in Wireless and Satellite Communication'),
(42, 11, 'Diploma in Information and Communication Technology'),
(43, 11, 'B.Eng in Computing Engineering'),
(44, 11, 'B.Eng in Petrol engineering'),
(45, 11, 'B.Sc IT '),
(46, 11, 'MSC in Wireless and Satellite Communication'),
(47, 11, 'Diploma in Information and Communication Technology'),
(48, 11, 'B.Eng in Computing Engineering'),
(49, 11, 'B.Eng in Petrol engineering'),
(50, 11, 'B.Sc IT ');

-- --------------------------------------------------------

--
-- Table structure for table `fieldofinterest`
--

CREATE TABLE `fieldofinterest` (
  `foiid` int(5) NOT NULL,
  `Name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fieldofinterest`
--

INSERT INTO `fieldofinterest` (`foiid`, `Name`) VALUES
(1, 'Marketing and Sales'),
(3, 'Accounting and Finance '),
(7, 'Communication and Broadcasting'),
(9, 'Manufacturing and Processing '),
(11, 'Computing and IT');

-- --------------------------------------------------------

--
-- Table structure for table `stud_registration`
--

CREATE TABLE `stud_registration` (
  `srno` int(3) NOT NULL,
  `sfname` varchar(35) NOT NULL,
  `smname` varchar(35) NOT NULL,
  `sfamname` varchar(35) NOT NULL,
  `spfname` varchar(35) NOT NULL,
  `sgender` varchar(1) NOT NULL,
  `sfspokenlang` varchar(60) NOT NULL,
  `sdob` date NOT NULL,
  `contactno` int(10) NOT NULL,
  `nationality` varchar(35) NOT NULL,
  `hschool` varchar(100) NOT NULL,
  `postsecondary` varchar(100) NOT NULL,
  `fostudy` varchar(45) NOT NULL,
  `highesteducation` varchar(35) NOT NULL,
  `dosl` date NOT NULL,
  `dlaps` varchar(35) NOT NULL,
  `ieltsresult` int(4) NOT NULL,
  `currentadd` varchar(120) NOT NULL,
  `permanentadd` varchar(120) NOT NULL,
  `activated` int(1) NOT NULL DEFAULT '0',
  `semail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_registration`
--
ALTER TABLE `agent_registration`
  ADD PRIMARY KEY (`agentid`);

--
-- Indexes for table `chooseprograms`
--
ALTER TABLE `chooseprograms`
  ADD PRIMARY KEY (`cpid`);

--
-- Indexes for table `fieldofinterest`
--
ALTER TABLE `fieldofinterest`
  ADD PRIMARY KEY (`foiid`);

--
-- Indexes for table `stud_registration`
--
ALTER TABLE `stud_registration`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_registration`
--
ALTER TABLE `agent_registration`
  MODIFY `agentid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chooseprograms`
--
ALTER TABLE `chooseprograms`
  MODIFY `cpid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `fieldofinterest`
--
ALTER TABLE `fieldofinterest`
  MODIFY `foiid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stud_registration`
--
ALTER TABLE `stud_registration`
  MODIFY `srno` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
