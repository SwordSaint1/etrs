-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 10:12 AM
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
  `final_registration_code` varchar(100) DEFAULT NULL,
  `final_training_ends_dates` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_final`
--

INSERT INTO `etrs_final` (`id`, `emp_id`, `final_process`, `final_status`, `final_training_date`, `final_registration_code`, `final_training_ends_dates`) VALUES
(2, '21-07100', 'Sub_Assembly_Process', 'Passed', '2022-05-17', 'FTC:22051646763', '2022-05-18'),
(3, '21-07087', 'Sub_Assembly_Process', 'Passed', '2022-05-17', 'FTC:22051731450', '2022-05-17');

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
  `final_practice_training_end_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_final_practice`
--

INSERT INTO `etrs_final_practice` (`id`, `emp_id`, `final_practice_process`, `final_practice_status`, `final_practice_training_date`, `final_practice_registration_code`, `final_practice_training_end_date`) VALUES
(1, '21-07100', 'Lay_out_Process', 'Passed', '2022-05-16', 'FPTC:22051649923', '2022-05-17'),
(2, '21-07087', 'Sub_Assy_Process', 'Passed', '2022-05-18', 'FPTC:22051818781', '2022-05-18');

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
  `initial_training_end_dates` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_initial`
--

INSERT INTO `etrs_initial` (`id`, `emp_id`, `initial_process`, `initial_status`, `initial_training_date`, `initial_registration_code`, `initial_training_end_dates`) VALUES
(1, '21-07087', 'First_Process', 'Passed', '2022-05-16', 'ITC:22051714692', '2022-05-17');

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
  `initial_practice_training_end_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_initial_practice`
--

INSERT INTO `etrs_initial_practice` (`id`, `emp_id`, `initial_practice_process`, `initial_practice_status`, `initial_practice_training_date`, `initial_practice_registration_code`, `initial_practice_training_end_date`) VALUES
(1, '21-07099', 'First_Process', 'Passed', '2022-05-16', 'IPTC:22051612203', '2022-05-13'),
(2, '21-07100', 'First_Process', 'Passed', '2022-04-29', 'IPTC:22051636750', '2022-05-14'),
(3, '21-07087', 'First_Process', 'Passed', '2022-04-29', 'IPTC:22051620990', '2022-05-16'),
(4, '21-07100', 'Secondary_Process', 'Passed', '2022-05-16', 'IPTC:22051623800', '2022-05-16');

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
(2, 'Secondary_Process'),
(3, 'Material_Handling');

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
  `initial_process` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etrs_training_record`
--

INSERT INTO `etrs_training_record` (`id`, `batch_no`, `employee_num`, `gender`, `full_name`, `department`, `position`, `theory_training`, `training_date`, `theory_remarks`, `registration_code`, `date_hired`, `training_end_date`, `provider`, `maiden_name`, `initial_process`) VALUES
(2, '396', '21-07100', 'Female', 'tin', 'it', 'Associate', 'Passed', '2022-05-12', '', 'TC:22051449265', '2022-05-12', '2022-05-12', 'N/A', '', NULL),
(3, '5', '12-0104', 'Female', 'Matanguihan, April Lyn C.', 'Human Resource Management Department', 'Assistant Manager', 'Passed', '2012-10-01', '', 'TC:22051342639', '8012-10-01', '2012-10-06', 'N/A', 'Carolino, April Lyn H.', NULL),
(4, '1', '12-0068', 'Female', 'De Torres, Divina Amor T.', 'Human Resource Management Department', 'Supervisor', 'Passed', '2012-08-01', '', 'TC:22051342639', '2012-08-01', '2012-08-11', 'N/A', NULL, NULL),
(5, 'N/A', '12-0023', 'Female', 'Panghulan, Katherine B.', 'Human Resource Management Department', 'Assistant Manager', 'Passed', '0001-01-01', '', 'TC:22051342639', '2012-05-13', '0001-01-01', 'N/A', NULL, NULL),
(6, '7', '13-0205', 'Female', 'Asis, Monica C.', 'Human Resource Management Department', 'Supervisor', 'Passed', '2012-11-05', '', 'TC:22051342639', '2012-10-26', '2012-11-10', 'N/A', '', NULL),
(7, '13', '13-0568', 'Female', 'Forneloza, Jackielou L.', 'Human Resource Management Department', 'Staff', 'Passed', '2013-04-16', '', 'TC:22051342639', '2013-09-02', '2013-04-20', 'N/A', 'Latag, Jackielou M.', NULL),
(8, '15', '14-01314', 'Female', 'Torrejano, Renna G.', 'Human Resource Management Department', 'Supervisor', 'Passed', '2013-04-29', '', 'TC:22051342639', '2014-01-02', '2013-05-04', 'N/A', 'Gonzaga, Renna D.', NULL),
(9, '50', '14-01865', 'Female', 'Marcuap, Mhay V.', 'Human Resource Management Department', 'Supervisor', 'Passed', '2014-04-21', '', 'TC:22051312260', '2014-04-21', '2014-04-26', 'N/A', NULL, NULL),
(10, '21', '14-01883', 'Female', 'Ajon, Lea Angelica C.', 'Human Resource Management Department', 'Junior Staff', 'Passed', '2013-06-17', '', 'TC:22051312260', '2014-06-01', '2013-06-22', 'N/A', '', NULL),
(11, '31', '14-01918', 'Female', 'Ona, Renelyn D.', 'Human Resource Management Department', 'Staff', 'Passed', '2013-10-07', '', 'TC:22051312260', '2014-10-01', '2013-10-12', 'N/A', 'Dimaculangan, Renelyn', NULL),
(12, '31', '14-01978', 'Female', 'Barredo, Edrilyn P.', 'Human Resource Management Department', 'Staff', 'Passed', '2013-10-07', '', 'TC:22051312260', '2014-06-01', '2013-10-12', 'N/A', 'Pepito, Edrilyn', NULL),
(13, '45', '14-02184', 'Female', 'Pradeiz, Rhenalyn A.', 'Human Resource Management Department', 'Staff', 'Passed', '0001-01-01', '', 'TC:22051312260', '2014-10-01', '0001-01-01', 'N/A', 'Aba, Rhenalyn P.', NULL),
(14, '45', '14-02194', 'Female', 'Atienza, Ederlyn B.', 'Human Resource Management Department', 'Staff', 'Passed', '2014-02-24', '', 'TC:22051312260', '2014-10-01', '2014-03-01', 'N/A', NULL, NULL),
(15, '20', '14-02270', 'Female', 'Mallari, Diviane B.', 'Human Resource Management Department', 'Staff', 'Passed', '2013-06-10', '', 'TC:22051312260', '2014-10-01', '2013-06-15', 'N/A', NULL, NULL),
(16, '38', '14-02392', 'Female', 'Magsino, Lady Dawn R.', 'Human Resource Management Department', 'Staff', 'Passed', '2013-11-25', '', 'TC:22051312260', '2014-12-01', '2013-11-30', 'N/A', NULL, NULL),
(17, '221', '18-03558', 'Female', 'Magay, Jessica M.', 'Human Resource Management Department', 'Junior Staff', 'Passed', '0001-01-01', '', 'TC:22051312260', '2018-06-11', '0001-01-01', 'N/A', NULL, NULL),
(18, '223', '18-03567', 'Female', 'Nario, Maridelle C.', 'Human Resource Management Department', 'Staff', 'Passed', '2018-06-18', '', 'TC:22051312260', '2018-06-18', '2018-06-23', 'N/A', NULL, NULL),
(19, '165', '18-03886', 'Female', 'Parco, Airene S.', 'Human Resource Management Department', 'Junior Staff', 'Passed', '2017-06-20', '', 'TC:22051312260', '2018-10-01', '2017-06-25', 'N/A', NULL, NULL),
(20, '97', '18-03929', 'Female', 'Torres, Angeli M.', 'Human Resource Management Department', 'Associate', 'Passed', '2015-08-24', '', 'TC:22051312260', '2018-10-01', '2015-08-29', 'N/A', NULL, NULL),
(21, '172', '18-04095', 'Female', 'Magay, Mayvilyn B.', 'Human Resource Management Department', 'Junior Staff', 'Passed', '2017-08-14', '', 'TC:22051312260', '2018-11-16', '2017-08-19', 'N/A', NULL, NULL),
(22, '222', '19-05168', 'Female', 'De Chavez, Arrissa V.', 'Human Resource Management Department', 'Junior Staff', 'Passed', '2019-04-10', '', 'TC:22051312260', '2019-08-01', '2019-04-12', 'N/A', '', NULL),
(23, '253', '20-05837', 'Male', 'Tapero, Raymart C.', 'Human Resource Management Department', 'Associate', 'Passed', '2019-04-10', '', 'TC:22051312260', '2020-10-01', '2019-04-12', 'N/A', NULL, NULL),
(24, '331', '21-06511', 'Female', 'Conte, Sandra Mae M.', 'Human Resource Management Department', 'Associate', 'Passed', '2019-08-29', '', 'TC:22051312260', '2021-05-01', '2019-08-31', 'N/A', NULL, NULL),
(27, '329', '21-06518', 'Female', 'Culla, Linnsen Maeve V.', 'Human Resource Management Department', 'Associate', 'Passed', '2019-08-29', '', 'TC:22051430083', '2021-05-01', '2019-08-31', 'N/A', '', NULL),
(28, '247', '21-06732', 'Female', 'Catarroja, Mary Glaire M.', 'Human Resource Management Department', 'Associate', 'Passed', '2019-08-29', '', 'TC:22051425915', '2021-06-01', '2019-08-31', 'N/A', '', NULL),
(29, '332', '21-06751', 'Female', 'Dotado, Danna Ealyn M.', 'Human Resource Management Department', 'Associate', 'Passed', '2019-08-29', '', 'TC:22051635450', '2021-06-01', '2019-08-31', 'N/A', NULL, NULL),
(30, '432', '21-07112', 'Female', 'Falculan, Ma. Victoria M.', 'Human Resource Management Department', 'Staff', 'Passed', '2022-01-05', '', 'TC:22051635450', '2022-01-05', '2022-01-06', 'N/A', '', NULL),
(31, '268', '21-07192', 'Female', 'Lopez, Ariane A.', 'Human Resource Management Department', 'Associate', 'Passed', '2019-08-29', '', 'TC:22051635450', '2021-09-01', '2019-08-31', 'N/A', NULL, NULL),
(32, '370', '21-07212', 'Female', 'Natangcop, Rasmia D.', 'Human Resource Management Department', 'Associate', 'Passed', '2019-08-29', '', 'TC:22051635450', '2021-09-01', '2019-08-31', 'N/A', '', NULL),
(33, '417', '21-07323', 'Male', 'Dacera, Argie', 'Human Resource Management Department', 'Supervisor ', 'Passed', '2019-08-29', '', 'TC:22051635450', '2021-10-16', '2019-08-31', 'N/A', NULL, NULL),
(34, '418', '21-07330', 'Female', 'Hilario, Ronalyn M.', 'Human Resource Management Department', 'Associate', 'Passed', '2019-08-29', '', 'TC:22051635450', '2021-10-20', '2019-08-31', 'N/A', NULL, NULL),
(35, '418', '21-07332', 'Female', 'Lumbera, Lady Lyn L.', 'Human Resource Management Department', 'Associate', 'Passed', '2019-08-29', '', 'TC:22051635450', '2021-10-20', '2019-08-31', 'N/A', NULL, NULL),
(36, '428', '21-07445', 'Female', 'Javier, Juvy Anne M.', 'Human Resource Management Department', 'Associate', 'Passed', '2021-11-24', '', 'TC:22051635450', '2021-11-24', '2021-11-26', 'N/A', NULL, NULL),
(37, '1', '12-0061', 'Female', 'Valencia, Rhena T.', 'Human Resource Management Department', 'Assistant Manager', 'Passed', '0001-01-01', '', 'TC:22051635450', '2012-08-01', '0001-01-01', 'N/A', 'Tiquis, Rhena', NULL),
(38, '1', '12-0083', 'Female', 'Guce, Nelda Q.', 'Human Resource Management Department', 'Section Manager', 'Passed', '2012-08-01', '', 'TC:22051635450', '2012-08-01', '2012-08-11', 'N/A', NULL, NULL),
(39, 'N/A', '12-0087', 'Female', 'Tolentino, Kaeceleen G.', 'Human Resource Management Department', 'Supervisor', 'Pulled_Out', '0001-01-01', 'No Training', 'TC:22051635450', '2012-08-10', '0001-01-01', 'N/A', NULL, NULL),
(40, 'N/A', '12-0110', 'Female', 'Aquino, Chanel G.', 'Human Resource Management Department', 'Staff', 'Pulled_Out', '0001-01-01', 'No Training', 'TC:22051635450', '2012-10-03', '0001-01-01', 'N/A', NULL, NULL),
(41, '15', '13-0559', 'Female', 'Aldover, Sheela Mae Bernadette G.', 'Human Resource Management Department', 'Junior Staff', 'Passed', '2013-04-29', '', 'TC:22051635450', '2013-09-02', '2013-05-04', 'N/A', 'Guino, Sheela Mae Bernadette', NULL),
(42, 'SB9', '13-0630', 'Female', 'Camalig, Rose Ann C.', 'Human Resource Management Department', 'Assistant Manager', 'Passed', '2013-08-28', '', 'TC:22051635450', '2013-08-28', '2013-08-31', 'N/A', '', NULL),
(43, '15', '14-01523', 'Female', 'Oftial, Edralie T.', 'Human Resource Management Department', 'Staff', 'Passed', '2013-04-29', '', 'TC:22051635450', '2014-01-02', '2013-05-04', 'N/A', '', NULL),
(44, '14', '14-01685', 'Female', 'Lubigan, Beberly V.', 'Human Resource Management Department', 'Staff', 'Passed', '2013-04-22', '', 'TC:22051635450', '2014-01-02', '2013-04-27', 'N/A', 'Virrey, Beberly R.', NULL),
(45, '44', '14-02280', 'Female', 'Punzalan, Kimberly M.', 'Human Resource Management Department', 'Supervisor', 'Passed', '2014-02-17', '', 'TC:22051633812', '2014-10-01', '2014-02-22', 'N/A', NULL, NULL),
(46, '55', '15-02804', 'Female', 'Medallada, Carla Mariz B.', 'Human Resource Management Department', 'Associate', 'Passed', '2014-05-26', '', 'TC:22051633812', '2015-03-16', '2014-05-31', 'N/A', NULL, NULL),
(47, '213', '18-03536', 'Female', 'Danio, Marife W.', 'Human Resource Management Department', 'Junior Staff', 'Passed', '2018-04-17', '', 'TC:22051633812', '2018-04-17', '2018-04-20', 'N/A', NULL, NULL),
(48, '215', '18-03544', 'Female', 'Carrable, Kriselle Ann D.', 'Human Resource Management Department', 'Supervisor', 'Passed', '2018-05-02', '', 'TC:22051633812', '2018-05-02', '2018-05-05', 'N/A', NULL, NULL),
(49, '284', '19-05335', 'Female', 'Caasi, Lara-Joyce L.', 'Human Resource Management Department', 'Junior Staff', 'Passed', '2019-10-02', '', 'TC:22051633812', '2019-10-02', '2019-10-05', 'N/A', NULL, NULL),
(50, '304', '20-05574', 'Female', 'Pasahol, Ruby Anne C.', 'Human Resource Management Department', 'Staff', 'Passed', '2020-02-26', '', 'TC:22051633812', '2020-02-26', '2020-03-01', 'N/A', NULL, NULL),
(51, '325', '20-05730', 'Female', 'Lalusin, Rheamae M.', 'Human Resource Management Department', 'Staff', 'Passed', '2020-08-07', '', 'TC:22051633812', '2020-08-07', '2020-08-10', 'N/A', NULL, NULL),
(52, '327', '20-05740', 'Female', 'Rodriguez, Kriszia Micar T.', 'Human Resource Management Department', 'Staff', 'Passed', '2020-08-26', '', 'TC:22051633812', '2020-08-26', '2020-08-29', 'N/A', NULL, NULL),
(53, '342', '20-05861', 'Female', 'Tusi, Denise Maxim R.', 'Human Resource Management Department', 'Junior Staff', 'Passed', '2020-11-11', '', 'TC:22051633812', '2020-11-11', '2020-11-14', 'N/A', NULL, NULL),
(54, '349', '20-05915', 'Female', 'Cañobas, Jayn Betzaida L.', 'Human Resource Management Department', 'Junior Staff', 'Passed', '2020-12-10', '', 'TC:22051633812', '2020-12-10', '2020-12-13', 'N/A', NULL, NULL),
(55, '85', '21-06417', 'Female', 'Adriano, Marigold M.', 'Human Resource Management Department', 'Staff', 'Passed', '2021-04-16', '', 'TC:22051633812', '2021-04-16', '2021-04-20', 'N/A', NULL, NULL),
(56, '376', '21-06418', 'Female', 'Marquez, Dominga L.', 'Human Resource Management Department', 'Staff', 'Passed', '2021-04-16', '', 'TC:22051633812', '2021-04-16', '2021-04-20', 'N/A', NULL, NULL),
(57, '398', '21-07102', 'Female', 'Garcia, Leonellaine B.', 'Human Resource Management Department', 'Junior Staff', 'Passed', '2021-08-11', '', 'TC:22051633812', '2021-08-11', '2021-08-15', 'N/A', NULL, NULL),
(58, '430', '21-07111', 'Female', 'Asi, Carla Regina M.', 'Human Resource Management Department', 'Junior Staff', 'Passed', '2021-08-29', '', 'TC:22051633812', '2021-08-28', '2021-08-29', 'N/A', NULL, NULL),
(59, '420', '21-07337', 'Female', 'Pestaño, Cristi G. ', 'Human Resource Management Department', 'Junior Staff', 'Passed', '2021-10-27', '', 'TC:22051633812', '2021-10-27', '2021-10-30', 'N/A', NULL, NULL),
(60, 'N/A', '22-07619', 'Male', 'Bathan, Joshua A.', 'Human Resource Management Department', 'Staff', 'Passed', '0001-01-01', 'No Training', 'TC:22051618356', '2020-02-16', '0001-01-01', 'N/A', NULL, NULL),
(61, 'N/A', '22-07617', 'Female', 'Cuevas, Maria Gina L.', 'Human Resource Management Department', 'Staff', 'Passed', '0001-01-01', 'No Training', 'TC:22051618356', '2022-02-16', '0001-01-01', 'N/A', NULL, NULL),
(62, 'N/A', '22-07632', 'Female', 'Eresima, Emily L.', 'Human Resource Management Department', 'Staff', 'Passed', '0001-01-01', '', 'TC:22051618356', '2022-02-16', '0001-01-01', 'N/A', NULL, NULL),
(63, 'N/A', '22-07616', 'Female', 'Espiritu, Edelyn B.', 'Human Resource Management Department', 'Staff', 'Passed', '0001-01-01', '', 'TC:22051618356', '2021-02-16', '0001-01-01', 'N/A', NULL, NULL),
(64, 'N/A', '22-07618', 'Female', 'Palma, Ruffa Mae M.', 'Human Resource Management Department', 'Staff', 'Passed', '0001-01-01', '', 'TC:22051618356', '2022-02-01', '0001-01-01', 'N/A', NULL, NULL),
(65, 'N/A', '22-07633', 'Female', 'Panganiban, Jennifer Cien C.', 'Human Resource Management Department', 'Staff', 'Passed', '0001-01-01', '', 'TC:22051618356', '2022-02-16', '0001-01-01', 'N/A', NULL, NULL),
(66, 'N/A', '12-0037', 'Female', 'Cidro, Ma. Milahi O.', 'Accounting Department', 'Section Manager', 'Passed', '0001-01-01', 'No Training', 'TC:22051630348', '2012-06-19', '0001-01-01', 'N/A', NULL, NULL),
(67, '13', '13-0293', 'Female', 'Arellano, Nicole Jane E.', 'Accounting Department', 'Assistant Manager', 'Passed', '2013-04-16', '', 'TC:22051649129', '2013-04-16', '2013-04-20', 'N/A', NULL, NULL),
(68, '395', '21-07099', 'Female', 'Tintin', 'TRY', 'Associate', 'Passed', '2022-05-12', 'sample', 'TC:22051835535', '2022-05-12', '2022-05-12', 'N/A', 'TRY', NULL),
(69, '138', '16-03126', 'Female', 'Guce, Cryszel C.', 'Accounting Department', 'Supervisor', 'Passed', '2016-12-12', '', 'TC:22051645950', '2016-12-17', '2016-12-12', 'N/A', NULL, NULL),
(70, '243', '18-04195', 'Female', 'Villa, Rencie Mae M.', 'Accounting Department', 'Staff', 'Passed', '2018-11-19', '', 'TC:22051645950', '2018-11-19', '2018-11-19', 'N/A', NULL, NULL),
(71, '263', '19-04957', 'Female', 'De Torres, Maricel I.', 'Accounting Department', 'Staff', 'Passed', '2019-05-02', '', 'TC:22051645950', '2019-05-02', '2019-05-02', 'N/A', NULL, NULL),
(72, '265', '19-05009', 'Female', 'De Villa, Marife O.', 'Accounting Department', 'Staff', 'Passed', '2019-05-15', '', 'TC:22051645950', '2019-05-15', '2019-05-15', 'N/A', NULL, NULL),
(73, '281', '19-05271', 'Female', 'Llada, Clarisse Joy M.', 'Accounting Department', 'Staff', 'Passed', '2019-09-04', '', 'TC:22051645950', '2019-09-04', '2019-09-04', 'N/A', NULL, NULL),
(74, '291', '19-05382', 'Female', 'Almarez, Aizel D.', 'Accounting Department', 'Staff', 'Passed', '2019-11-27', '', 'TC:22051645950', '2019-11-27', '2019-11-27', 'N/A', NULL, NULL),
(75, '368', '21-06218', 'Female', 'Datinguinoo, Marie Anne P.', 'Accounting Department', 'Staff', 'Passed', '2021-05-10', '', 'TC:22051645950', '2021-05-10', '2021-05-10', 'N/A', NULL, NULL),
(76, '400', '21-07105', 'Female', 'Landig, Marinella Y.', 'Accounting Department', 'Staff', 'Passed', '2021-08-18', '', 'TC:22051645950', '2021-08-18', '2021-08-18', 'N/A', NULL, NULL),
(77, '51', '14-02143', 'Female', 'N/A', 'Production 1 Department', 'Associate', 'Passed', '2014-04-28', 'N/A', 'TC:22051632794', '2014-09-01', '2014-05-03', 'N/A', 'Mirana, Jessica C.', NULL),
(78, '16', '13-0339', 'Female', 'Belena, Renalyn', 'Production Engineering Department', 'Assistant Manager', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2013-05-06', '2013-05-11', 'N/A', 'Carandang, Renalyn B.', NULL),
(79, '16', '13-0563', 'Female', 'Julongbayan, Cherryza B.', 'Production Design Center', 'Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2013-09-02', '2013-05-11', 'PKI-13-FAS1452', 'N/A', NULL),
(80, '16', '13-0594', 'Female', 'Mauleon, Alison C.', 'Production 2 Department', 'Junior Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2013-09-02', '2013-05-11', 'PKI-13-FAS1459', 'N/A', NULL),
(81, '16', '14-01376', 'Female', 'Laylo, Emily J.', 'Production 1 Department', 'Junior Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-01-02', '2013-05-11', 'PKI-13-FAS1631', 'N/A', NULL),
(82, '16', '14-01383', 'Female', 'Lim, Vanessa', 'Production 2 Department', 'Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-01-02', '2013-05-11', 'N/A', 'Catibayan, Vanessa L.', NULL),
(83, '16', '14-01529', 'Female', 'Once, Rosalie', 'Production 2 Department', 'Junior Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-01-02', '2013-05-11', 'PKI-13-FAS1672', 'Vallesteros, Rosalie O.', NULL),
(84, '16', '14-01532', 'Female', 'Operiano, Jayzel D.', 'Production 1 Department', 'Junior Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-01-02', '2013-05-11', 'PKI-13-FAS1508', 'N/A', NULL),
(85, '16', '14-01573', 'Female', 'Puyo, Angelica Mae P.', 'Production 2 Department', 'Junior Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-01-02', '2013-05-11', 'PKI-13-FAS1430', 'N/A', NULL),
(86, '16', '14-01581', 'Female', 'Ramos, Joy Anne', 'Production 2 Department', 'Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-01-02', '2013-05-11', 'PKI-13-FAS1430', 'Chavez, Joy Anne R.', NULL),
(87, '16', '14-01602', 'Female', 'Rodriguez, Kristel C.', 'Production 1 Department', 'Associate', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-01-02', '2013-05-11', 'PKI-13-FAS1637', 'N/A', NULL),
(88, '16', '14-01626', 'Female', 'Sayosa, Ariana Jane N.', 'Production 2 Department', 'Junior Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-01-02', '2013-05-11', 'PKI-13-FAS1549', 'N/A', NULL),
(89, '16', '14-01665', 'Female', 'Umali, Sonia A.', 'Production 2 Department', 'Associate', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-01-02', '2013-05-11', 'PKI-13-FAS1434', 'N/A', NULL),
(90, '16', '14-01772', 'Female', 'Fortus, Sarah Jane O.', 'Production 1 Department', 'Junior Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-03-01', '2013-05-11', 'PKI-13-FAS1467', 'N/A', NULL),
(91, '16', '14-01894', 'Female', 'Balboa, Arlyn F.', 'Production 2 Department', 'Junior Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-06-01', '2013-05-11', 'PKI-13-FAS1656', 'N/A', NULL),
(92, '16', '14-01921', 'Female', 'Ebreo, Charlene Rose D.', 'Production 1 Department', 'Junior Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-06-01', '2013-05-11', 'PKI-13-FAS1641', 'N/A', NULL),
(93, '16', '14-01991', 'Female', 'Tobeo, Raquel', 'Production 2 Department', 'Junior Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-06-01', '2013-05-11', 'PKI-13-FAS1636', 'Mantal, Raquel T.', NULL),
(94, '16', '14-02192', 'Female', 'Arnoza, Mary Ann', 'Production 2 Department', 'Associate', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2014-10-01', '2013-05-11', 'PKI-13-FAS1638', 'Fajilagmago, Mary Ann A.', NULL),
(95, '16', '15-02617', 'Female', 'Mendoza, Merrycris L.', 'Production 2 Department', 'Junior Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2015-01-16', '2013-05-11', 'PKI-13-FAS1543', 'N/A', NULL),
(96, '16', '15-02648', 'Female', 'Pineda, Gracelle C.', 'Production 1 Department', 'Junior Staff', 'Passed', '2013-05-06', 'N/A', 'TC:22051640993', '2015-01-16', '2013-05-11', 'PKI-13-FAS1619', 'N/A', NULL),
(97, '396', '21-07087', 'Male', 'Buendia, JJ', 'IT', 'Associate', 'Passed', '2022-08-06', 'sample', 'TC:22051835535', '2022-08-04', '2022-08-06', 'N/A', 'N/A', 'First_Process'),
(98, '1', '12-0040', 'Female', 'N/A', 'Production Engineering Department', 'Section Manager', 'Passed', '2012-08-01', 'N/A', NULL, '2012-07-02', '2012-08-11', 'N/A', 'Adame, Leni N.', NULL),
(99, '1', '12-0042', 'Female', 'N/A', 'Production Management Department', 'Assistant Manager', 'Passed', '2012-08-01', 'N/A', NULL, '2012-07-02', '2012-08-11', 'N/A', 'Clemeno, Rochelle M.', NULL),
(100, '1', '12-0043', 'Female', 'N/A', 'Quality Assurance Department', 'Section Manager', 'Passed', '2012-08-01', 'N/A', NULL, '2012-07-02', '2012-08-11', 'N/A', 'Nachor, Annabel G.', NULL),
(101, '1', '12-0046', 'Female', 'Dela Roca, Babylyn R.', 'Quality Assurance Department', 'Section Manager', 'Passed', '2012-08-01', 'N/A', NULL, '2012-07-02', '2012-08-11', 'N/A', 'Ramirez, Babylyn C.', NULL),
(102, '1', '12-0059', 'Female', 'N/A', 'Quality Assurance Department', 'Assistant Manager', 'Passed', '2012-08-01', 'N/A', NULL, '2012-08-01', '2012-08-11', 'N/A', 'Recio, Christy T.', NULL),
(103, '1', '12-0062', 'Male', 'N/A', 'Production Engineering Department', 'Staff', 'Passed', '2012-08-01', 'N/A', NULL, '2012-08-01', '2012-08-11', 'N/A', 'Bagui, Sherwin S.', NULL),
(104, '1', '12-0063', 'Male', 'N/A', 'Production Engineering Department', 'Supervisor', 'Passed', '2012-08-01', 'N/A', NULL, '2012-08-01', '2012-08-11', 'N/A', 'Carandang, Joseph A.', NULL),
(105, '1', '12-0064', 'Male', 'N/A', 'NF Kaizen Department', 'Staff', 'Passed', '2012-08-01', 'N/A', NULL, '2012-08-01', '2012-08-11', 'N/A', 'Cullarin, Joel T.', NULL),
(106, '1', '12-0071', 'Female', 'N/A', 'Material Procurement Department', 'Supervisor', 'Passed', '2012-08-01', 'N/A', NULL, '2012-08-01', '2012-08-11', 'N/A', 'Sanchez, Lovely Joy D.', NULL),
(107, '1', '12-0073', 'Female', 'N/A', 'Production 1 Department', 'Assistant Manager', 'Passed', '2012-08-01', 'N/A', NULL, '2012-08-01', '2012-08-11', 'N/A', 'Vergara, Olive R.', NULL),
(108, '1', '12-0081', 'Male', 'N/A', 'Production 1 Department', 'Department Manager', 'Passed', '2012-08-01', 'N/A', NULL, '2012-08-01', '2012-08-11', 'N/A', 'Cailao, Eugenio V.', NULL),
(109, '1', '12-0082', 'Male', 'N/A', 'Production Engineering Department', 'Department Manager', 'Passed', '2012-08-01', 'N/A', NULL, '2012-08-01', '2012-08-11', 'N/A', 'Maiquez, Placido Q.', NULL),
(110, '1', '12-0085', 'Female', 'N/A', 'Material Procurement Department', 'Section Manager', 'Passed', '2012-08-01', 'N/A', NULL, '2012-08-01', '2012-08-11', 'N/A', 'Unico, Jonah M.', NULL),
(111, '1', '12-0116', 'Female', 'Malibiran, Mary Angelique C.', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-08-01', 'N/A', NULL, '2012-11-05', '2012-08-11', 'N/A', 'Cabello, Mary Angelique', NULL),
(112, '1', '12-0121', 'Female', 'Saludo, Alaiza V.', 'Production 2 Department', 'Supervisor', 'Passed', '2012-08-01', 'N/A', NULL, '2012-11-05', '2012-08-11', 'N/A', 'Vila, Alaiza', NULL),
(113, '1', '12-0135', 'Female', 'Edjan, Daisy P.', 'Production 2 Department', 'Supervisor', 'Passed', '2012-08-01', 'N/A', NULL, '2012-12-04', '2012-08-11', 'N/A', 'Perez, Daisy', NULL),
(114, '1', '12-0146', 'Female', 'Olaes, Annielyn L.', 'Production 2 Department', 'Supervisor', 'Passed', '2012-08-01', 'N/A', NULL, '2012-12-17', '2012-08-11', 'N/A', 'Lilio, Annielyn', NULL),
(115, '1', '13-0156', 'Female', 'N/A', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-08-01', 'N/A', NULL, '2013-01-03', '2012-08-11', 'N/A', 'Falogme, Jenny Ann F.', NULL),
(116, '1', '13-0157', 'Female', 'N/A', 'Production 2 Department', 'Supervisor', 'Passed', '2012-08-01', 'N/A', NULL, '2013-01-03', '2012-08-11', 'N/A', 'Landicho, Jennie Rose C.', NULL),
(117, '1', '13-0162', 'Female', 'Raz, Clarisse M.', 'Production 2 Department', 'Staff', 'Passed', '2012-08-01', 'N/A', NULL, '2013-01-03', '2012-08-11', 'N/A', 'Manalo, Clarisse', NULL),
(118, '1', '13-0175', 'Female', 'Valinado, Lea Rose C.', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-08-01', 'N/A', NULL, '2013-02-01', '2012-08-11', 'N/A', 'Carpio, Lea Rose', NULL),
(119, '1', '13-0188', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-08-01', 'N/A', NULL, '2013-02-01', '2012-08-11', 'N/A', 'Magpantay, Mary Anne O.', NULL),
(120, '1', '13-0197', 'Female', 'N/A', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-08-01', 'N/A', NULL, '2013-02-01', '2012-08-11', 'N/A', 'Rocafort, Ofelia L.', NULL),
(121, '1', '13-0242', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-08-01', 'N/A', NULL, '2013-04-01', '2012-08-11', 'N/A', 'De Guzman, Mary Rose U.', NULL),
(122, '1', '13-0263', 'Female', 'N/A', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-08-01', 'N/A', NULL, '2013-04-01', '2012-08-11', 'N/A', 'Moster, Cristy A.', NULL),
(123, '2', '12-0126', 'Female', 'N/A', 'Quality Assurance Department', 'Assistant Manager', 'Passed', '2012-08-28', 'N/A', NULL, '2012-12-04', '2012-09-13', 'N/A', 'Caguitla, Jesalyn R.', NULL),
(124, '2', '12-0138', 'Female', 'N/A', 'Production 1 Department', 'Staff', 'Passed', '2012-08-28', 'N/A', NULL, '2012-12-04', '2012-09-13', 'N/A', 'Zara, Mary Ann R.', NULL),
(125, '2', '13-0152', 'Female', 'N/A', 'Quality Assurance Department', 'Junior Staff', 'Passed', '2012-08-28', 'N/A', NULL, '2013-01-03', '2012-09-13', 'N/A', 'Cabataña, Ladylyn L.', NULL),
(126, '2', '13-0169', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-08-28', 'N/A', NULL, '2013-01-03', '2012-09-13', 'N/A', 'Valencia, Grace P.', NULL),
(127, '2', '13-0208', 'Female', 'N/A', 'Production 1 Department', 'Staff', 'Passed', '2012-08-28', 'N/A', NULL, '2013-03-01', '2012-09-13', 'N/A', 'Cantos, Baby Gretchen M.', NULL),
(128, '2', '13-0212', 'Female', 'Abaca, Jackielyn C.', 'Production 2 Department', 'Staff', 'Passed', '2012-08-28', 'N/A', NULL, '2013-03-01', '2012-09-13', 'N/A', 'Catipan, Jackielyn', NULL),
(129, '2', '13-0213', 'Female', 'N/A', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-08-28', 'N/A', NULL, '2014-02-28', '2012-09-13', 'N/A', 'Cuenca, Aida L.', NULL),
(130, '2', '13-0216', 'Female', 'N/A', 'Production 1 Department', 'Staff', 'Passed', '2012-08-28', 'N/A', NULL, '2013-03-01', '2012-09-13', 'N/A', 'Galang, Evelyn B.', NULL),
(131, '2', '13-0217', 'Female', 'Oberes, Catherine K.', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-08-28', 'N/A', NULL, '2013-03-01', '2012-09-13', 'N/A', 'Kalalo, Catherine', NULL),
(132, '2', '13-0222', 'Female', 'N/A', 'Production 1 Department', 'Staff', 'Passed', '2012-08-28', 'N/A', NULL, '2013-03-01', '2012-09-13', 'N/A', 'Matibag, Jannet M.', NULL),
(133, '2', '13-0225', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-08-28', 'N/A', NULL, '2013-03-01', '2012-09-13', 'N/A', 'Paglinawan, Rachelle R.', NULL),
(134, '3', '12-0097', 'Female', 'N/A', 'Material Procurement Department', 'Assistant Manager', 'Passed', '2012-09-10', 'N/A', NULL, '2012-09-10', '2012-09-19', 'N/A', 'Manalo, Melanie E.', NULL),
(135, '3', '12-0148', 'Female', 'N/A', 'Quality Assurance Department', 'Assistant Manager', 'Passed', '2012-09-10', 'N/A', NULL, '2012-12-17', '2012-09-19', 'N/A', 'Reyes, Jesselyn C.', NULL),
(136, '3', '13-0163', 'Female', 'N/A', 'Production 1 Department', 'Supervisor', 'Passed', '2012-09-10', 'N/A', NULL, '2013-01-03', '2012-09-19', 'N/A', 'Mojares, Julie M.', NULL),
(137, '3', '13-0167', 'Female', 'N/A', 'Production 2 Department', 'Staff', 'Passed', '2012-09-10', 'N/A', NULL, '2013-01-03', '2012-09-19', 'N/A', 'Silva, Romana B.', NULL),
(138, '3', '13-0179', 'Female', 'Sario, Larizza D.', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-09-10', 'N/A', NULL, '2013-02-01', '2012-09-19', 'N/A', 'Dimapilis, Larizza G.', NULL),
(139, '3', '13-0220', 'Female', 'N/A', 'Production 2 Department', 'Supervisor', 'Passed', '2012-09-10', 'N/A', NULL, '2013-03-01', '2012-09-19', 'N/A', 'Lumayag, Ann Leah D.', NULL),
(140, '3', '13-0258', 'Female', 'Manalo, Melissa L.', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-09-10', 'N/A', NULL, '2013-04-01', '2012-09-19', 'N/A', 'Lipa, Melissa S.', NULL),
(141, '3', '13-0259', 'Female', 'Sollosa, Junalyn L.', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-09-10', 'N/A', NULL, '2013-04-01', '2012-09-19', 'N/A', 'Lolong, Junalyn', NULL),
(142, '3', '13-0281', 'Female', 'Carandang, Sherly V.', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-09-10', 'N/A', NULL, '2013-04-01', '2012-09-19', 'N/A', 'Visleño, Sherly B.', NULL),
(143, '4', '13-0171', 'Female', 'N/A', 'Production 2 Department', 'Staff', 'Passed', '2012-09-17', 'N/A', NULL, '2013-01-07', '2012-09-29', 'N/A', 'Ilagan, Erica F.', NULL),
(144, '4', '13-0176', 'Female', 'N/A', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-09-17', 'N/A', NULL, '2013-02-01', '2012-09-29', 'N/A', 'Cometa, Luzviminda B.', NULL),
(145, '4', '13-0177', 'Female', 'N/A', 'Production Management Department', 'Junior Staff', 'Passed', '2012-09-17', 'N/A', NULL, '2013-02-01', '2012-09-22', 'N/A', 'Dapol, Cris F.', NULL),
(146, '4', '13-0200', 'Female', 'N/A', 'Production 1 Department', 'Supervisor', 'Passed', '2012-09-17', 'N/A', NULL, '2013-02-01', '2012-09-22', 'N/A', 'Urbano, May Ann M.', NULL),
(147, '4', '13-0224', 'Female', 'N/A', 'Quality Assurance Department', 'Junior Staff', 'Passed', '2012-09-17', 'N/A', NULL, '2013-03-01', '2012-09-29', 'N/A', 'Ortiz, Liza A.', NULL),
(148, '4', '13-0234', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-09-17', 'N/A', NULL, '2013-04-01', '2012-09-29', 'N/A', 'Beltran, Joy Ruth U.', NULL),
(149, '4', '13-0271', 'Female', 'N/A', 'Production 1 Department', 'Staff', 'Passed', '2012-09-17', 'N/A', NULL, '2013-04-01', '2012-09-29', 'N/A', 'Punzalan, Lizel G.', NULL),
(150, '4', '13-0273', 'Female', 'N/A', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-09-17', 'N/A', NULL, '2013-04-01', '2012-09-29', 'N/A', 'Rejoso, Glyza S.', NULL),
(151, '4', '13-0314', 'Female', 'N/A', 'Production Design Center', 'Staff', 'Passed', '2012-09-17', 'N/A', NULL, '2013-05-02', '2012-09-29', 'N/A', 'Esmana, Maricris D.', NULL),
(152, '4', '13-0375', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-09-17', 'N/A', NULL, '2013-06-17', '2012-09-29', 'N/A', 'Punio, Lea Grace N.', NULL),
(153, '4', '13-0480', 'Female', 'N/A', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-09-17', 'N/A', NULL, '2013-07-16', '2012-09-29', 'N/A', 'Javier, Mercy Joy A.', NULL),
(154, '4', '14-02144', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-09-17', 'N/A', NULL, '2014-09-01', '2012-09-29', 'N/A', 'Competente, Evelyn A.', NULL),
(155, '5', '12-0102', 'Female', 'Mendoza, Janice W.', 'Production Management Department', 'Assistant Manager', 'Passed', '2012-10-02', 'N/A', NULL, '2012-09-24', '2012-10-06', 'N/A', 'Wagan, Janice', NULL),
(156, '5', '13-0183', 'Female', 'N/A', 'Quality Assurance Department', 'Supervisor', 'Passed', '2012-10-02', 'N/A', NULL, '2013-02-01', '2012-10-06', 'N/A', 'Hernandez, Ivy E.', NULL),
(157, '5', '13-0194', 'Female', 'N/A', 'Quality Assurance Department', 'Staff', 'Passed', '2012-10-02', 'N/A', NULL, '2013-02-01', '2012-10-06', 'N/A', 'Nuhay, May D.', NULL),
(158, '5', '13-0196', 'Female', 'N/A', 'Quality Assurance Department', 'Supervisor', 'Passed', '2012-10-02', 'N/A', NULL, '2013-02-01', '2012-10-06', 'N/A', 'Prisco, Delia C.', NULL),
(159, '5', '13-0199', 'Female', 'N/A', 'Production 1 Department', 'Staff', 'Passed', '2012-10-02', 'N/A', NULL, '2013-02-01', '2012-10-06', 'N/A', 'Titular, Jasmine O.', NULL),
(160, '6', '13-0214', 'Female', 'N/A', 'Production 2 Department', 'Staff', 'Passed', '2012-10-24', 'N/A', 'TC:22051824762', '2013-03-01', '2012-10-31', 'N/A', 'Felimon, Crizelda E.', NULL),
(161, '6', '13-0223', 'Female', 'N/A', 'Quality Assurance Department', 'Assistant Manager', 'Passed', '2012-10-24', 'N/A', 'TC:22051824762', '2013-03-01', '2012-10-31', 'N/A', 'Morfe, Sharon Mae D.', NULL),
(162, '6', '13-0245', 'Female', 'N/A', 'Production Management Department', 'Junior Staff', 'Passed', '2012-10-24', 'N/A', 'TC:22051824762', '2013-04-01', '2012-10-31', 'N/A', 'Dimaunahan, Jenerose A.', NULL),
(163, '6', '13-0300', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-10-24', 'N/A', 'TC:22051824762', '2013-05-02', '2012-10-31', 'N/A', 'Cadiz, Laica May V.', NULL),
(164, '6', '13-0302', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-10-24', 'N/A', 'TC:22051824762', '2013-05-02', '2012-10-31', 'N/A', 'Care, Noreen C.', NULL),
(165, '6', '13-0308', 'Female', 'N/A', 'Material Procurement Department', 'Staff', 'Pulled Out', '2012-10-24', 'N/A', NULL, '2013-05-02', '0000-01-01', 'N/A', 'Cudiamat, Maria Crisol A.', NULL),
(166, '6', '13-0309', 'Female', 'Montiagodo, Roma C.', 'Quality Assurance Department', 'Staff', 'Passed', '2012-10-24', 'N/A', NULL, '2013-05-02', '2012-10-31', 'N/A', 'Cueto, Roma', NULL),
(167, '6', '13-0321', 'Female', 'Alde, Jenelyn M.', 'Material Procurement Department', 'Staff', 'Passed', '2012-10-24', 'N/A', NULL, '2013-05-02', '2012-10-31', 'N/A', 'Maliglig, Jenelyn', NULL),
(168, '6', '13-0323', 'Female', 'N/A', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-10-24', 'N/A', NULL, '2013-05-02', '2012-10-31', 'N/A', 'Masacayan, Jennifer I.', NULL),
(169, '6', '13-0329', 'Female', 'N/A', 'Production 2 Department', 'Supervisor', 'Passed', '2012-10-24', 'N/A', NULL, '2013-05-02', '2012-10-31', 'N/A', 'Pita, Michelle S.', NULL),
(170, '6', '13-0358', 'Female', 'N/A', 'Production 2 Department', 'Staff', 'Passed', '2012-10-24', 'N/A', NULL, '2013-06-17', '2012-10-31', 'N/A', 'De Torres, Marilou J.', NULL),
(171, '6', '13-0372', 'Female', 'De Silva, Emily L.', 'Production 2 Department', 'Staff', 'Passed', '2012-10-24', 'N/A', NULL, '2013-06-17', '2012-10-31', 'N/A', 'Luansing, Emily', NULL),
(172, '6', '13-0376', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-10-24', 'N/A', NULL, '2013-06-17', '2012-10-31', 'N/A', 'Ramos, Mylene G.', NULL),
(173, '6', '13-0450', 'Female', 'N/A', 'Production 1 Department', 'Associate', 'Passed', '2012-10-24', 'N/A', NULL, '2013-07-16', '2012-10-31', 'PKI-12-FAS238', 'Navarro, Marie Ellioshelle A.', NULL),
(174, '6', '13-0456', 'Female', 'N/A', 'Production 1 Department', 'Staff', 'Passed', '2012-10-24', 'N/A', NULL, '2013-07-16', '2012-10-31', 'N/A', 'Javier, Livie E.', NULL),
(175, '6', '13-0495', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-10-24', 'N/A', NULL, '2013-07-16', '2012-10-31', 'N/A', 'Afante, Catherine P.', NULL),
(176, '6', '13-0497', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-10-24', 'N/A', NULL, '2013-07-16', '2012-10-31', 'N/A', 'Ebreo, Regina P.', NULL),
(177, '6', '14-01544', 'Female', 'Manzanilla, Mary Grace P.', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-10-24', 'N/A', NULL, '2014-01-02', '2012-10-31', 'N/A', 'Palicpic, Mary Grace', NULL),
(178, '7', '13-0221', 'Female', 'N/A', 'Production Engineering Department', 'Supervisor', 'Passed', '2012-11-05', 'N/A', NULL, '2013-03-01', '2012-11-10', 'N/A', 'Manumbas, Paula Bianca M.', NULL),
(179, '7', '13-0226', 'Female', 'N/A', 'Production 2 Department', 'Staff', 'Passed', '2012-11-05', 'N/A', NULL, '2013-03-01', '2012-11-10', 'N/A', 'Reyes, Rose Ann B.', NULL),
(180, '7', '13-0227', 'Female', 'Amada, Jeren U.', 'Production Engineering Department', 'Supervisor', 'Passed', '2012-11-05', 'N/A', NULL, '2013-03-01', '2012-11-10', 'N/A', 'Uri, Jeren M. ', NULL),
(181, '7', '13-0249', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-11-05', 'N/A', NULL, '2013-04-01', '2012-11-10', 'N/A', 'Florendo, Rizalea B.', NULL),
(182, '7', '13-0253', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-11-05', 'N/A', NULL, '2013-04-01', '2012-11-10', 'N/A', 'Geneblazo, Jean M.', NULL),
(183, '7', '13-0257', 'Female', 'N/A', 'Quality Assurance Department', 'Supervisor', 'Passed', '2012-11-05', 'N/A', NULL, '2013-04-01', '2012-11-10', 'N/A', 'Lacorte, Rocelyn L.', NULL),
(184, '7', '13-0267', 'Female', 'Mojado, Crezalyn P.', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-11-05', 'N/A', NULL, '2013-04-01', '2012-11-10', 'N/A', 'Pamesaran, Crezalyn M.', NULL),
(185, '7', '13-0449', 'Female', 'N/A', 'Production 1 Department', 'Staff', 'Passed', '2012-11-05', 'N/A', NULL, '2013-07-16', '2012-11-10', 'N/A', 'Bagui, Pamela Jean R.', NULL),
(186, '7', '13-0452', 'Female', 'N/A', 'Production 2 Department', 'Staff', 'Passed', '2012-11-05', 'N/A', NULL, '2013-07-16', '2012-11-10', 'N/A', 'Cortez, Kimberly C.', NULL),
(187, '7', '13-0485', 'Female', 'N/A', 'Quality Assurance Department', 'Junior Staff', 'Passed', '2012-11-05', 'N/A', NULL, '2013-07-16', '2012-11-10', 'N/A', 'Cadano, Desiree M.', NULL),
(188, '7', '13-0487', 'Female', 'Solomon, Mary Ann R.', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-11-05', 'N/A', NULL, '2013-07-16', '2012-11-10', 'N/A', 'Ramos, Mary Ann', NULL),
(189, '7', '13-0489', 'Female', 'N/A', 'Production 1 Department', 'Associate', 'Passed', '2012-11-05', 'N/A', NULL, '2013-07-16', '2012-11-10', 'N/A', 'Del Mundo, Neslie L.', NULL),
(190, '7', '13-0493', 'Female', 'N/A', 'Production 2 Department', 'Junior Staff', 'Passed', '2012-11-05', 'N/A', NULL, '2013-07-16', '2012-11-10', 'N/A', 'Abraham, Ericka M.', NULL),
(191, '7', '14-01519', 'Female', 'Caguimbal, Rio Lyn O.', 'Production 1 Department', 'Associate', 'Passed', '2012-11-05', 'N/A', NULL, '2014-01-02', '2012-11-10', 'N/A', 'Obligar, Rio Lyn D.', NULL),
(192, '7', '14-01620', 'Female', 'N/A', 'Production 1 Department', 'Junior Staff', 'Passed', '2012-11-05', 'N/A', NULL, '2014-01-02', '2012-11-10', 'N/A', 'Santos, Judy Ann C.', NULL),
(193, '7', '15-02821', 'Female', 'N/A', 'Production 1 Department', 'Associate', 'Passed', '2012-11-05', 'N/A', NULL, '2015-03-16', '2012-11-10', 'N/A', 'Gonzales, Mylene L.', NULL);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `etrs_final_practice`
--
ALTER TABLE `etrs_final_practice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `etrs_initial_practice`
--
ALTER TABLE `etrs_initial_practice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
