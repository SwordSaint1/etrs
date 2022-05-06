-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 10:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etrs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `etrs_account`
--

CREATE TABLE `etrs_account` (
  `id` int(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `section` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_account`
--

INSERT INTO `etrs_account` (`id`, `username`, `password`, `role`, `section`) VALUES
(1, 'jj_admin', 'admin', 'admin', 'PTT'),
(2, 'jj_mntt', 'admin', 'admin', 'MNTT'),
(3, 'jj_sep', 'admin', 'admin', 'SEP'),
(4, 'jj_initial', 'admin', 'initial', 'PTT-Initial'),
(5, 'admin_initial', 'admin', 'initial', 'PTT'),
(6, 'admin_final', 'admin', 'final', 'PTT'),
(7, 'admin_theory', 'admin', 'theory', 'PTT');

-- --------------------------------------------------------

--
-- Table structure for table `etrs_final`
--

CREATE TABLE `etrs_final` (
  `id` int(50) NOT NULL,
  `emp_id` varchar(100) DEFAULT NULL,
  `final_process` varchar(100) DEFAULT NULL,
  `final_status` varchar(100) DEFAULT NULL,
  `final_training_date` varchar(100) DEFAULT NULL,
  `final_registration_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_final`
--

INSERT INTO `etrs_final` (`id`, `emp_id`, `final_process`, `final_status`, `final_training_date`, `final_registration_code`) VALUES
(1, '21-07087', 'Sub_Assembly_Process', 'Passed', '2022-04-29', 'FTC:22042929972');

-- --------------------------------------------------------

--
-- Table structure for table `etrs_initial`
--

CREATE TABLE `etrs_initial` (
  `id` int(50) NOT NULL,
  `emp_id` varchar(100) DEFAULT NULL,
  `initial_process` varchar(100) DEFAULT NULL,
  `initial_status` varchar(100) DEFAULT NULL,
  `initial_training_date` varchar(100) DEFAULT NULL,
  `initial_registration_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_initial`
--

INSERT INTO `etrs_initial` (`id`, `emp_id`, `initial_process`, `initial_status`, `initial_training_date`, `initial_registration_code`) VALUES
(1, '21-07087', 'First_Process', 'Passed', '2022-04-29', 'ITC:22042920019');

-- --------------------------------------------------------

--
-- Table structure for table `etrs_training_record`
--

CREATE TABLE `etrs_training_record` (
  `id` int(50) NOT NULL,
  `batch_no` varchar(100) DEFAULT NULL,
  `employee_num` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `theory_training` varchar(100) DEFAULT NULL,
  `training_date` varchar(100) DEFAULT NULL,
  `theory_remarks` varchar(100) DEFAULT NULL,
  `registration_code` varchar(100) DEFAULT NULL,
  `date_hired` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_training_record`
--

INSERT INTO `etrs_training_record` (`id`, `batch_no`, `employee_num`, `gender`, `full_name`, `department`, `position`, `theory_training`, `training_date`, `theory_remarks`, `registration_code`, `date_hired`) VALUES
(2, '250', '20-05545', 'Female', 'Panambo, Erica Marie D.', 'Production 1 Department', 'Associate', 'Passed', '2019-04-04', '', 'TC:22050535185', '2019-01-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etrs_account`
--
ALTER TABLE `etrs_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etrs_final`
--
ALTER TABLE `etrs_final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etrs_initial`
--
ALTER TABLE `etrs_initial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etrs_training_record`
--
ALTER TABLE `etrs_training_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etrs_account`
--
ALTER TABLE `etrs_account`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `etrs_final`
--
ALTER TABLE `etrs_final`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `etrs_initial`
--
ALTER TABLE `etrs_initial`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `etrs_training_record`
--
ALTER TABLE `etrs_training_record`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
