-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2024 at 07:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kg school`
--

-- --------------------------------------------------------

--
-- Table structure for table `empolyee_creation`
--

CREATE TABLE `empolyee_creation` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `experience` int(2) NOT NULL,
  `qualification` varchar(15) NOT NULL,
  `aboutyou` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `empolyee_creation`
--

INSERT INTO `empolyee_creation` (`emp_id`, `emp_name`, `gender`, `dob`, `address`, `experience`, `qualification`, `aboutyou`) VALUES
(1, 'Mr. Ramesh', 'Male', '1995-08-24', 'Mysore Road, Sathy', 0, 'B.Sc', 'Always studying'),
(46, 'Periyasamy K', 'Male', '1993-08-24', 'Pasakuttai, Annur', 5, 'M.Sc', 'Always studying'),
(47, 'Sukeerthan', 'Male', '2020-10-31', 'Pasakuttai, Annur', 4, 'M.Sc', 'Always studying');

-- --------------------------------------------------------

--
-- Table structure for table `mark_sheet`
--

CREATE TABLE `mark_sheet` (
  `id` int(11) NOT NULL,
  `student_name` int(11) NOT NULL,
  `subject_1` int(11) NOT NULL,
  `subject_2` int(11) NOT NULL,
  `subject_3` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_dept_master`
--

CREATE TABLE `staff_dept_master` (
  `dep_id` int(11) NOT NULL,
  `department` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff_dept_master`
--

INSERT INTO `staff_dept_master` (`dep_id`, `department`) VALUES
(43, 'ABC Department'),
(44, 'MIS Department');

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `studuent_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `class` int(11) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `activity` varchar(200) NOT NULL,
  `area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`studuent_id`, `name`, `class`, `dob`, `address`, `activity`, `area`) VALUES
(1, 'sukeerthan', 5, '2024-12-26', 'Mysore Road, Sathy', 'cricket', 'Coimbatore'),
(11, 'Periyasamy', 5, '2024-12-04', 'Mysore Road, Sathy', 'cricket', 'Coimbatore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empolyee_creation`
--
ALTER TABLE `empolyee_creation`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `mark_sheet`
--
ALTER TABLE `mark_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_dept_master`
--
ALTER TABLE `staff_dept_master`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`studuent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empolyee_creation`
--
ALTER TABLE `empolyee_creation`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `mark_sheet`
--
ALTER TABLE `mark_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_dept_master`
--
ALTER TABLE `staff_dept_master`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `student_register`
--
ALTER TABLE `student_register`
  MODIFY `studuent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
