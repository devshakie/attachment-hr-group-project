-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 02:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paylee`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `employee_id` int(10) NOT NULL,
  `bankid` int(10) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `bankbranch` varchar(100) NOT NULL,
  `branchid` int(100) NOT NULL,
  `bankloanmonthlyinstalment` int(100) NOT NULL,
  `banksavings` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`employee_id`, `bankid`, `bankname`, `bankbranch`, `branchid`, `bankloanmonthlyinstalment`, `banksavings`) VALUES
(1, 345, 'coop', 'north-east', 124, 14345, 200),
(2, 456, 'equity', 'north', 134, 14345, 200);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Full_Name` varchar(100) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `department_id` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Full_Name`, `employee_id`, `department_id`, `Email`, `Message`) VALUES
('maura', 1, 'SOE', 'paylee@gmail.com', 'i reqiure departmen documents');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` varchar(10) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
('FIN', 'Finance'),
('ITDept', 'IT Department'),
('SOB', 'School Of Business'),
('SOE', 'School Of Engineering'),
('SOS', 'School Of Science'),
('SStaff', 'Support Staff');

-- --------------------------------------------------------

--
-- Table structure for table `dependants`
--

CREATE TABLE `dependants` (
  `employee_id` int(10) NOT NULL,
  `namedep` varchar(100) NOT NULL,
  `agedep` int(3) NOT NULL,
  `relationdep` varchar(100) NOT NULL,
  `phone_nodep` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dependants`
--

INSERT INTO `dependants` (`employee_id`, `namedep`, `agedep`, `relationdep`, `phone_nodep`) VALUES
(2, 'pete', 13, 'son', 112222),
(1, 'raymond', 13, 'son', 795426090);

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `employee_id` int(100) NOT NULL,
  `department_id` varchar(100) NOT NULL,
  `fulname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(2) NOT NULL,
  `phone` int(12) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `job` text NOT NULL,
  `hire` date NOT NULL,
  `account` varchar(100) NOT NULL,
  `kra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_id`, `department_id`, `fulname`, `email`, `age`, `phone`, `gender`, `job`, `hire`, `account`, `kra`) VALUES
(1, 'SOE', 'maura', 'paylee@gmail.com', 23, 795426090, 'female', 'admin', '2012-01-21', 'a1232333', 'A23456'),
(2, 'SOS', 'ann Macharia', 'paylee1234@gmail.com', 19, 795426090, 'FEMALE', 'Chef', '0000-00-00', 'a11111', 'A2222222');

-- --------------------------------------------------------

--
-- Table structure for table `leaveinfo`
--

CREATE TABLE `leaveinfo` (
  `employee_id` int(10) NOT NULL,
  `department_id` varchar(10) NOT NULL,
  `leavetype` varchar(100) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `leaveduration` int(10) NOT NULL,
  `remainingleavedays` int(10) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `hr_response` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaveinfo`
--

INSERT INTO `leaveinfo` (`employee_id`, `department_id`, `leavetype`, `datefrom`, `dateto`, `leaveduration`, `remainingleavedays`, `reason`, `hr_response`) VALUES
(1, 'SOE', 'vacation', '2023-04-10', '2023-04-18', 8, 0, 'vacation leave', 'APPROVED');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `employee_id` int(4) NOT NULL,
  `password` int(8) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`employee_id`, `password`, `email`) VALUES
(1, 0, 'paylee@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `next_of_kin`
--

CREATE TABLE `next_of_kin` (
  `employee_id` int(10) NOT NULL,
  `namekin` varchar(100) NOT NULL,
  `agekin` int(3) NOT NULL,
  `relationkin` varchar(10) NOT NULL,
  `phone_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `next_of_kin`
--

INSERT INTO `next_of_kin` (`employee_id`, `namekin`, `agekin`, `relationkin`, `phone_no`) VALUES
(2, 'maude', 20, 'sister', 2147483647),
(1, 'Wambui', 23, 'sister', 795426090);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `employee_id` int(10) NOT NULL,
  `department_id` varchar(10) NOT NULL,
  `job` varchar(100) NOT NULL,
  `basicpay` int(10) NOT NULL,
  `houseallowances` int(10) NOT NULL,
  `medallowances` int(10) NOT NULL,
  `grosspay` int(10) NOT NULL,
  `NHIF` int(10) NOT NULL,
  `NSSF` int(10) NOT NULL,
  `damages` int(10) NOT NULL,
  `pension` int(10) NOT NULL,
  `totdeduc` int(10) NOT NULL,
  `netsal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`employee_id`, `department_id`, `job`, `basicpay`, `houseallowances`, `medallowances`, `grosspay`, `NHIF`, `NSSF`, `damages`, `pension`, `totdeduc`, `netsal`) VALUES
(1, 'SOE', 'Chef', 35000, 1200, 1200, 37400, 500, 200, 0, 0, 9506, 27894);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bankid`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD KEY `contactus_ibfk_1` (`employee_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `dependants`
--
ALTER TABLE `dependants`
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `leaveinfo`
--
ALTER TABLE `leaveinfo`
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `employee_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank`
--
ALTER TABLE `bank`
  ADD CONSTRAINT `bank_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contactus`
--
ALTER TABLE `contactus`
  ADD CONSTRAINT `contactus_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dependants`
--
ALTER TABLE `dependants`
  ADD CONSTRAINT `dependants_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD CONSTRAINT `employee_details_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leaveinfo`
--
ALTER TABLE `leaveinfo`
  ADD CONSTRAINT `leaveinfo_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  ADD CONSTRAINT `next_of_kin_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
