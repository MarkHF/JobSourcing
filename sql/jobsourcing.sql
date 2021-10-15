-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2021 at 10:44 AM
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
-- Database: `joblister`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `dateTimeCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateTimeUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `course`, `remarks`, `dateTimeCreated`, `dateTimeUpdated`) VALUES
(1, 'BSCS', '', '2021-10-13 22:03:34', '2021-10-13 22:05:13'),
(2, 'BSCrim', '', '2021-10-13 22:06:26', '2021-10-13 22:06:26'),
(3, 'HRM', '', '2021-10-13 22:06:26', '2021-10-13 22:06:26'),
(4, 'Business', '', '2021-10-13 22:07:43', '2021-10-13 22:07:43'),
(5, 'BSA', '', '2021-10-13 22:07:58', '2021-10-13 22:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(20) NOT NULL,
  `departmentID` int(20) NOT NULL,
  `company` varchar(50) NOT NULL,
  `companyOverview` varchar(500) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  `time` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `requirements` varchar(500) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contactUser` varchar(50) NOT NULL,
  `contactEmail` varchar(50) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `dateTimeCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateTimeUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `departmentID`, `company`, `companyOverview`, `jobTitle`, `time`, `description`, `requirements`, `salary`, `location`, `contactUser`, `contactEmail`, `remarks`, `dateTimeCreated`, `dateTimeUpdated`) VALUES
(1, 1, 'Astra', 'We, at Astra (Philippines) Inc., are committed to: Develop the very best software and hardware solutions that satisfy customer requirements. Deal with customers and partners on principles of politeness, courtesy, humility and cooperation and safeguard our long-term relationships with them.', 'Junior-Programmer', 'Part-Time', 'A Computer Programmer, or Systems Programmer, writes code to help software applications operate more', '(1.) Ability to learn – being receptive to new ideas and concepts, and the commitment to practice them is what coding is all about.\r\n(2.) Work ethic – becoming a developer means lots of hard work and dedication. ...\r\n(3.) Problem-solver – You\'re going to use code to solve problems, so motivation is key!', '20k', 'Quezon City', 'mam mo', 'mama@gmail.com', '', '2021-10-13 22:21:43', '2021-10-15 06:55:20'),
(2, 2, 'BANTAY INC', '', 'Guard', 'Full-Time', 'Security Guards duties often include securing premises and personnel by patrolling property, monitoring surveillance equipment and inspecting buildings and equipment. Security Guards duties can also access points as well as permitting or prohibiting entry.', '', '15k', 'Quezon City', 'papa mo', 'papa@gmail.com', '', '2021-10-13 22:21:43', '2021-10-15 03:54:44'),
(3, 1, 'TECH', '', 'System Analyst', 'Full-Time', 'A Computer Programmer, or Systems Programmer, writes code to help software applications operate more', '', '25k', 'Quezon City', 'mame mo', 'mame@gmail.com', '', '2021-10-13 22:23:33', '2021-10-15 03:54:15'),
(4, 5, 'Bangko', '', 'Taga bilang nang piso', 'Full-Time', 'Preparing accounts and tax returns. Monitoring spending and budgets. Auditing and analysing financial performance. ... Compiling and presenting financial and budget reports. Ensure that financial statements and records comply with laws and regulations.', '', '20k', 'Taguig', 'ate momo', 'ate@gmail.com', '', '2021-10-14 00:57:56', '2021-10-15 03:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactNo` int(20) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  `dateTimeCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateTimeUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_ibfk_1` (`departmentID`),
  ADD KEY `company` (`company`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `department` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
