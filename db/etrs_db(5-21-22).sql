-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 10:40 AM
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
(5, 'admin_initial', 'initialadmin', 'initial', 'PTT'),
(6, 'admin_final', 'finaladmin', 'final', 'PTT'),
(7, 'admin_theory', 'theoryadmin', 'theory', 'PTT');

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
  `final_registration_code` varchar(100) DEFAULT NULL,
  `final_training_ends_dates` varchar(100) DEFAULT NULL,
  `final_remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `etrs_final_practice`
--

CREATE TABLE `etrs_final_practice` (
  `id` int(10) NOT NULL,
  `emp_id` varchar(100) DEFAULT NULL,
  `final_practice_process` varchar(100) DEFAULT NULL,
  `final_practice_status` varchar(100) DEFAULT NULL,
  `final_practice_training_date` varchar(100) DEFAULT NULL,
  `final_practice_registration_code` varchar(100) DEFAULT NULL,
  `final_practice_training_end_date` varchar(100) DEFAULT NULL,
  `final_practice_remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `etrs_final_practice_process`
--

CREATE TABLE `etrs_final_practice_process` (
  `id` int(10) NOT NULL,
  `final_practice_processs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_final_practice_process`
--

INSERT INTO `etrs_final_practice_process` (`id`, `final_practice_processs`) VALUES
(1, 'Sub_Assy_Process'),
(2, 'Lay_out_Process'),
(3, 'Option_Taping_Process'),
(4, 'Grommet_Insertion_Process'),
(5, 'Assy+Parts_Distribution'),
(6, 'Dimension_Inspection'),
(7, 'Electricity_Inspection'),
(8, 'Apperance_Inspection'),
(9, 'Tsumesen_Insertion'),
(10, 'Material_Handling_PD'),
(11, 'Arm_Type_Torque_Fixing_Process'),
(12, 'Grease_Injection_Process'),
(13, 'Fuse_Image_Inspection'),
(14, 'One_Liquid_Silicon_Injection_Helium_Leak_Checker'),
(15, 'TBO_Checking_Process'),
(16, 'Terminal_Removing_Person');

-- --------------------------------------------------------

--
-- Table structure for table `etrs_final_process`
--

CREATE TABLE `etrs_final_process` (
  `id` int(10) NOT NULL,
  `final_processs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_final_process`
--

INSERT INTO `etrs_final_process` (`id`, `final_processs`) VALUES
(1, 'Sub_Assembly_Process'),
(2, 'Assembly_Process'),
(3, 'Inspection_Process');

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
  `initial_registration_code` varchar(100) DEFAULT NULL,
  `initial_training_end_dates` varchar(100) DEFAULT NULL,
  `initial_remarks` varchar(100) DEFAULT NULL,
  `sp_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `etrs_initial_practice`
--

CREATE TABLE `etrs_initial_practice` (
  `id` int(20) NOT NULL,
  `emp_id` varchar(100) DEFAULT NULL,
  `initial_practice_process` varchar(100) DEFAULT NULL,
  `initial_practice_status` varchar(100) DEFAULT NULL,
  `initial_practice_training_date` varchar(100) DEFAULT NULL,
  `initial_practice_registration_code` varchar(100) DEFAULT NULL,
  `initial_practice_training_end_date` varchar(100) DEFAULT NULL,
  `initial_practice_remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `etrs_initial_practice_process`
--

CREATE TABLE `etrs_initial_practice_process` (
  `id` int(10) NOT NULL,
  `initial_practice_processs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_initial_practice_process`
--

INSERT INTO `etrs_initial_practice_process` (`id`, `initial_practice_processs`) VALUES
(1, 'First_Process'),
(2, 'Secondary_Process'),
(3, 'Gomusen_Insertion'),
(4, 'In-Process_Inspection'),
(5, 'Material_Handling_IP_OR_FP'),
(6, 'Material_Handling_PD'),
(7, 'Material_Handling_Zaihai'),
(8, 'Point_Marking'),
(9, 'Shield_Wire_Taping'),
(10, 'SAM'),
(11, 'Recrimping'),
(12, 'QA_Inspection'),
(13, 'QC_Mcrimp'),
(14, 'QC_Jcrimp'),
(15, 'QC_Res-J');

-- --------------------------------------------------------

--
-- Table structure for table `etrs_initial_process`
--

CREATE TABLE `etrs_initial_process` (
  `id` int(10) NOT NULL,
  `processs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_initial_process`
--

INSERT INTO `etrs_initial_process` (`id`, `processs`) VALUES
(1, 'First_Process'),
(2, 'Secondary_Process');

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
  `date_hired` varchar(100) DEFAULT NULL,
  `training_end_date` varchar(100) DEFAULT NULL,
  `provider` varchar(100) DEFAULT NULL,
  `maiden_name` varchar(100) DEFAULT NULL,
  `initial_process` varchar(100) DEFAULT NULL,
  `spdate_hired` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_training_record`
--

INSERT INTO `etrs_training_record` (`id`, `batch_no`, `employee_num`, `gender`, `full_name`, `department`, `position`, `theory_training`, `training_date`, `theory_remarks`, `registration_code`, `date_hired`, `training_end_date`, `provider`, `maiden_name`, `initial_process`, `spdate_hired`) VALUES
(1, '31', '14-01918', 'Female', 'Dimaculangan, Renelyn A.', 'HRM-RTS', 'Staff', 'Passed', '2013-10-07', 'N/A', 'TC:22052135665', '2014-06-02', '2014-06-02', '14-01918', 'Ona, Renelyn D.', NULL, '2013-10-07'),
(2, '20', '14-02270', 'Female', ' -', 'HRM-RTS', 'Staff', 'Passed', '2013-10-07', 'N/A', 'TC:22052129987', '2014-06-02', '2014-06-02', '14-02270', 'Mallari, Diviane B.', NULL, '2013-10-07'),
(3, '247', '21-07124', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', '19_PK29070', 'Alonzo, Charme Joy M.', NULL, '2019-01-09'),
(4, '247', '22-07796', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', 'BF-12774', 'Bacruya, Maica S.', NULL, '2019-01-09'),
(5, '247', '21-06880', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', '18_PK28924', 'Bueno, Daisy M.', NULL, '2019-01-09'),
(6, '247', '20-05681', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', 'BF-12650', 'Cabaysa, Airish C.', NULL, '2019-01-09'),
(7, '247', '21-06732', 'Female', ' -', 'HRD/ RTS', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', '18_PK25175', 'Catarroja, Mary Glaire M.', NULL, '2019-01-09'),
(8, '247', '20-05515', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', 'BF-12765', 'Chavez, Anna Marie M.', NULL, '2019-01-09'),
(9, '247', '21-07155', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', '18_PK29011', 'De Guzman, Linda R.', NULL, '2019-01-09'),
(10, '247', '22-07812', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', 'BF-12651', 'Dejino, Jinebeth P.', NULL, '2019-01-09'),
(11, '247', '21-06538', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', 'BF-12652', 'Ebora, Dona T.', NULL, '2019-01-09'),
(12, '247', '21-06312', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', '19_PK29065', 'Escolano, Elicca D.', NULL, '2019-01-09'),
(13, '247', '21-06314', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', 'BF-12654', 'Espiritu, Honeyleth Joy B.', NULL, '2019-01-09'),
(14, '247', '21-07028', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', 'BF-12749', 'Gualter, Maryrose P.', NULL, '2019-01-09'),
(15, '247', '21-06342', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', '18_PK28869', 'Liwanag, Evelyn A.', NULL, '2019-01-09'),
(16, '247', '21-06923', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', 'BF-12701', 'Malandac, Crisabel C.', NULL, '2019-01-09'),
(17, '247', '20-05706', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', '18_PK28990', 'Masilungan, Jenilyn T.', NULL, '2019-01-09'),
(18, '247', '21-07050', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', 'BF-12740', 'Mateo, Lezel B.', NULL, '2019-01-09'),
(19, '247', '20-05710', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', 'BF-12657', 'Mendoza, Eleza G.', NULL, '2019-01-09'),
(20, '247', '21-06159', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', '18_PK28980', 'Octavo, Christel M.', NULL, '2019-01-09'),
(21, '247', '21-06623', 'Male', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', '19_PK29048', 'Olea, Mark Kavin M. ', NULL, '2019-01-09'),
(22, '247', '21-07239', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', 'BF-12645', 'Udarbe, Agnes A.', NULL, '2019-01-09'),
(23, '247', '21-06674', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', '18_PK28972', 'Vergara, Nova B.', NULL, '2019-01-09'),
(24, '247', '21-07317', 'Female', ' -', 'Production', 'Associate', 'Passed', '2019-01-09', ' -', NULL, '2019-01-09', '2019-01-11', 'BF-12722', 'Zara, Rina P.', NULL, '2019-01-09');

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
-- Indexes for table `etrs_final_practice`
--
ALTER TABLE `etrs_final_practice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etrs_final_practice_process`
--
ALTER TABLE `etrs_final_practice_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etrs_final_process`
--
ALTER TABLE `etrs_final_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etrs_initial`
--
ALTER TABLE `etrs_initial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etrs_initial_practice`
--
ALTER TABLE `etrs_initial_practice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etrs_initial_practice_process`
--
ALTER TABLE `etrs_initial_practice_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etrs_initial_process`
--
ALTER TABLE `etrs_initial_process`
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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etrs_final_practice`
--
ALTER TABLE `etrs_final_practice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etrs_final_practice_process`
--
ALTER TABLE `etrs_final_practice_process`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `etrs_final_process`
--
ALTER TABLE `etrs_final_process`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `etrs_initial`
--
ALTER TABLE `etrs_initial`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etrs_initial_practice`
--
ALTER TABLE `etrs_initial_practice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etrs_initial_practice_process`
--
ALTER TABLE `etrs_initial_practice_process`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `etrs_initial_process`
--
ALTER TABLE `etrs_initial_process`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `etrs_training_record`
--
ALTER TABLE `etrs_training_record`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
