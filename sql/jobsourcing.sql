-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 05:44 AM
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
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `dateTimeCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateTimeUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `userName`, `password`, `remarks`, `dateTimeCreated`, `dateTimeUpdated`) VALUES
(1, 'Mark Herbert', 'EwaN st.. qc', 'Mark@gmail.com', 'admin', 'admin', '', '2021-10-23 07:15:53', '2021-10-23 07:16:56');

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
  `time` varchar(50) NOT NULL,
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
(6, 1, 'FedEx ', 'FedEx Corp. is a holding company, which engages in the provision of a portfolio of transportation, e-commerce, and business services. It operates through the following segments: FedEx Express, FedEx Ground, FedEx Freight, FedEx Services, and Corporate, Other & Eliminations.', 'Senior Programmer', 'Part-Time( M-W 5-6 Hours)', 'Warehouse Worker Job Responsibilities: Completes shipments by processing and loading orders. Prepares orders by processing requests and supply orders; pulling materials; packing boxes; placing orders in delivery area. Completes deliveries by driving truck or van to and from vendors.', '18 years of age or older. Work experience as general laborer, preferably in warehouse. Ability to operate forklift proficiently. Completion of background investigation and drug screening. Strong people skills. Good moral character.', '18k', 'Mandaluyong', 'Reyna Padala', 'mark@gmail.com', '', '2021-10-23 04:25:40', '2021-10-23 05:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  `dateTimeCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateTimeUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstName`, `middleName`, `lastName`, `email`, `contactNo`, `password`, `remarks`, `dateTimeCreated`, `dateTimeUpdated`) VALUES
(1, 'MA YSABEL', 'PAYLAGA', 'FRANCISCO', 'mark@gmail.com', 999999999, '123', '', '2021-10-24 03:37:03', '2021-10-24 03:37:03'),
(123123, 'Mark Herbert', 'PAYLAGA', 'FRANCISCO', 'mark@gmail.com', 91234567899, '123', '', '2021-10-23 07:14:50', '2021-10-23 07:14:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
