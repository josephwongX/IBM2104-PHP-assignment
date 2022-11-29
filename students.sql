-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 09:33 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
