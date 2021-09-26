-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 04:54 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsourcing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ContactEmail` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Remarks` varchar(100) NOT NULL,
  `DateTimeCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `DateTimeUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `Cid` int(11) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Overview` varchar(250) NOT NULL,
  `ContactUser` varchar(20) NOT NULL,
  `ContactEmail;` varchar(20) NOT NULL,
  `ContactNo` int(20) NOT NULL,
  `Remarks` varchar(100) NOT NULL,
  `DateTimeCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `DateTimeUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Did` int(10) NOT NULL,
  `Sid` int(11) NOT NULL,
  `Course` text NOT NULL,
  `Remarks` varchar(100) NOT NULL,
  `DateTimeCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `DateTimeUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Did`, `Sid`, `Course`, `Remarks`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(1, 120120, 'BSCS', '', '2021-09-26 02:38:58', '2021-09-26 02:47:27'),
(2, 123455, 'BSCrim', '', '2021-09-26 02:38:58', '2021-09-26 02:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `Jid` int(11) NOT NULL,
  `Did` int(11) NOT NULL,
  `Cid` int(11) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Salary` varchar(20) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Remarks` varchar(100) NOT NULL,
  `DateTimeCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `DateTimeUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Sid` int(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `MiddleName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNo` int(20) NOT NULL,
  `Remarks` varchar(100) NOT NULL,
  `DateTimeCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `DateTimeUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Sid`, `FirstName`, `MiddleName`, `LastName`, `DateOfBirth`, `Email`, `ContactNo`, `Remarks`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(120120, 'Mark Herbert', 'Paylaga', 'Francisco', '2021-09-01', 'markherbertfrancisco@gmail.com', 999999999, 'Napaka Pogi Talaga', '2021-09-26 00:37:18', '2021-09-26 00:52:36'),
(123455, 'mark', 'pay', 'fran', '2021-08-01', 'asnjdjasdf@gmail.com', 988888888, 'asdasd', '2021-09-26 02:40:05', '2021-09-26 02:40:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Did`),
  ADD KEY `Sid` (`Sid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`Jid`),
  ADD KEY `Did` (`Did`,`Cid`),
  ADD KEY `Cid` (`Cid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `Jid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`Did`) REFERENCES `department` (`Did`),
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`Cid`) REFERENCES `companies` (`Cid`),
  ADD CONSTRAINT `jobs_ibfk_3` FOREIGN KEY (`Jid`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`Sid`) REFERENCES `department` (`Sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
