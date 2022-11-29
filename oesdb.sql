-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 04:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_drop`
--

CREATE TABLE `add_drop` (
  `ad_no` int(10) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `enroll_no` int(10) NOT NULL,
  `ad_action` varchar(15) NOT NULL,
  `subject_id` varchar(10) NOT NULL,
  `Section` varchar(10) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_drop`
--

INSERT INTO `add_drop` (`ad_no`, `student_id`, `enroll_no`, `ad_action`, `subject_id`, `Section`, `reason`, `Status`) VALUES
(1, 'J20032105', 4, 'ADD', 'IBM2101', 'Y1', 'Clearing failed subject for previous semester', 'Approved'),
(2, 'J20032860', 1, 'DROP', 'IBM2101', 'Y1', 'Accidentally choose wrong subject', 'Approved'),
(3, 'J20032860', 1, 'CHANGE SECTION', 'IBM2102', 'Y2', 'Accidentally choose wrong section', 'Approved'),
(4, 'J20032790', 2, 'ADD', 'IBM2101', 'Y1', 'Clearing failed subject for previous semester', 'Rejected'),
(5, 'J20032790', 2, 'ADD', 'IBM2102', 'Y1', 'Want to challenge myself', 'Approved'),
(6, 'J20032790', 2, 'CHANGE SECTION', 'IBM2104', 'Y2', 'Misread study plan', 'Rejected'),
(9, 'J20032790', 2, 'DROP', 'IBM2105', 'Y1', 'Took on too many subjects. Too stressed', 'Pending'),
(10, 'J20032790', 2, 'DROP', 'IBM2104', 'Y1', 'choose wrong', 'Pending'),
(11, 'J20032790', 2, 'DROP', 'IBM2106', 'Y1', 'FOLLOW instruction by HOP', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `employee_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`employee_id`, `name`, `position`, `password`) VALUES
('E00000001', 'Wong Wai Mun', 'HOP', '12345'),
('E00000002', 'Habsah Hassan', 'OAR Officer', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `enroll_no` int(10) NOT NULL,
  `student_id` varchar(10) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`enroll_no`, `student_id`) VALUES
(4, 'J20032105'),
(5, 'J20032732'),
(2, 'J20032790'),
(7, 'J20032790'),
(1, 'J20032860'),
(3, 'J20032920');

-- --------------------------------------------------------

--
-- Table structure for table `enroll_sub`
--

CREATE TABLE `enroll_sub` (
  `enroll_no` int(10) NOT NULL,
  `subject_id` varchar(10) NOT NULL,
  `Section` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll_sub`
--

INSERT INTO `enroll_sub` (`enroll_no`, `subject_id`, `Section`) VALUES
(1, 'IBM2102', 'Y2'),
(1, 'IBM2103', 'Y1'),
(2, 'IBM2101', 'Y1'),
(2, 'IBM2102', 'Y1'),
(2, 'IBM2104', 'Y1'),
(2, 'IBM2105', 'Y1'),
(3, 'IBM2107', 'Y1'),
(3, 'IBM2108', 'Y1'),
(3, 'IBM2109', 'Y1'),
(4, 'IBM2101', 'Y1'),
(4, 'IBM2110', 'Y1'),
(5, 'IBM2101', 'Y1');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pay_no` int(10) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `amount` decimal(50,0) NOT NULL,
  `receipt` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pay_no`, `student_id`, `card_number`, `amount`, `receipt`, `status`) VALUES
(1, 'J20032105', '9999999999999999', '1000', '../images/IMG_0001', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `contact_add` varchar(50) NOT NULL,
  `ic/passport` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `name`, `birthdate`, `contact_add`, `ic/passport`, `gender`, `password`) VALUES
('J20032105', 'Boh Ze Kai', '1997-03-13', 'J20032105@student.newinti.edu.my', '020527-10-7668', 'Male', '12345'),
('J20032395', 'Titus Ooi', '2002-05-30', 'J20032395@student.newinti.edu.my', '990416-10-1541', 'Male', '12345'),
('J20032410', 'Ng Bo Wei', '1997-11-22', 'J20032410@student.newinti.edu.my', '0302420-10-4321', 'Female', '12345'),
('J20032732', 'Aumpapat Tanehiron', '1995-06-21', 'J20032732@student.newinti.edu.my', '000217-10-1894', 'Female', '12345'),
('J20032790', 'Chew Zhen Yang', '2000-04-12', 'J20032790@student.newinti.edu.my', '090120-10-1674', 'Male', '12345'),
('J20032844', 'Kao Kai Siang', '1996-07-01', 'J20032844@student.newinti.edu.my', '030928-10-7547', 'Male', '12345'),
('J20032860', 'Joseph Wong Xin Xiang', '2001-11-05', 'j20032860@student.newinti.edu.my', '080130-10-1794', 'Male', '12345'),
('J20032920', 'Polensky Lee', '2002-10-14', 'J20032920@student.newinti.edu.my', '050424-10-1367', 'Male', '12345'),
('J20032923', 'Benjamin Ooi Kok Guan', '1998-01-03', 'J20032923@student.newinti.edu.my', '020220-10-1234', 'Female', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `subject_name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `credit_hour` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `subject_price` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `credit_hour`, `subject_price`) VALUES
('IBM2101', 'OBJECT-ORIENTED PROGRAMMING', '4', '1600'),
('IBM2102', 'INTRODUCTION TO MOBILE APPS DEVELOPMENT', '4', '1600'),
('IBM2103', 'Structured Programming', '4', '1600'),
('IBM2104', 'INTRODUCTION TO WEB PROGRAMMING WITH PHP', '4', '1600'),
('IBM2105', 'INTRODUCTION TO MOBILE APPS DEVELOPMENT', '4', '1600'),
('IBM2106', 'System Analysis & Design', '3', '1600'),
('IBM2107', 'Capstone Project', '2', '1000'),
('IBM2108', 'Structured Programming', '3', '1600'),
('IBM2109', 'Database Management', '4', '1600'),
('IBM2110', 'Quantitative Methods', '3', '1600');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_drop`
--
ALTER TABLE `add_drop`
  ADD PRIMARY KEY (`ad_no`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `enroll_no` (`enroll_no`) USING BTREE;

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enroll_no`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `enroll_sub`
--
ALTER TABLE `enroll_sub`
  ADD PRIMARY KEY (`enroll_no`,`subject_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pay_no`) USING BTREE,
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_drop`
--
ALTER TABLE `add_drop`
  MODIFY `ad_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `enroll_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pay_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_drop`
--
ALTER TABLE `add_drop`
  ADD CONSTRAINT `add_drop_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `enroll_sub`
--
ALTER TABLE `enroll_sub`
  ADD CONSTRAINT `enroll_sub_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `enroll_sub_ibfk_2` FOREIGN KEY (`enroll_no`) REFERENCES `enroll` (`enroll_no`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
