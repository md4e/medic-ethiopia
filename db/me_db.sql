-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2020 at 10:31 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `me_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_table`
--

DROP TABLE IF EXISTS `admission_table`;
CREATE TABLE IF NOT EXISTS `admission_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_card_number` varchar(45) NOT NULL,
  `employee_id` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` varchar(45) NOT NULL,
  `bed_number` varchar(45) NOT NULL,
  `examination_room` varchar(45) NOT NULL,
  `refered_from` varchar(45) NOT NULL,
  `allergies` varchar(45) NOT NULL,
  `remarks` json NOT NULL,
  `admission_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_admission_table_patient_table1_idx` (`patient_card_number`),
  KEY `fk_admission_table_employee_table1_idx` (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admission_table`
--

INSERT INTO `admission_table` (`id`, `patient_card_number`, `employee_id`, `created_at`, `status`, `bed_number`, `examination_room`, `refered_from`, `allergies`, `remarks`, `admission_date`) VALUES
(2, 'ZMRH0000000020', '000001', '2020-09-16 00:00:00', '', '', '', '', '', '[\"He is fine\"]', '2020-09-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `diagnos_vital_sign_table`
--

DROP TABLE IF EXISTS `diagnos_vital_sign_table`;
CREATE TABLE IF NOT EXISTS `diagnos_vital_sign_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_card_number` varchar(45) NOT NULL,
  `employee_id` varchar(45) NOT NULL,
  `blood_pressure` int(11) NOT NULL,
  `pluse_rate` int(11) NOT NULL,
  `respiration` int(11) NOT NULL,
  `temprature` int(11) NOT NULL,
  `oxygen_saturation` int(11) NOT NULL,
  `radom_blood_sugar` int(11) NOT NULL,
  `fasting_blood_sugar` int(11) DEFAULT NULL,
  `remarks` json DEFAULT NULL,
  `created_at` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_diagnos_vital_sign_table_patient_table1_idx` (`patient_card_number`),
  KEY `fk_diagnos_vital_sign_table_employee_table1_idx` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

DROP TABLE IF EXISTS `employee_table`;
CREATE TABLE IF NOT EXISTS `employee_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) NOT NULL,
  `job_titile` varchar(45) NOT NULL,
  `signature` varchar(45) NOT NULL,
  `registered_date` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idusers_UNIQUE` (`id`),
  UNIQUE KEY `employee_id_UNIQUE` (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`id`, `employee_id`, `first_name`, `last_name`, `age`, `gender`, `email`, `phone`, `job_titile`, `signature`, `registered_date`, `status`, `role`) VALUES
(1, '000001', 'Hailu', 'Mergia', 35, 'M', 'entisar@gmail.com', '123456789', 'Dr.', 'Dr.Entisar', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lab_queue`
--

DROP TABLE IF EXISTS `lab_queue`;
CREATE TABLE IF NOT EXISTS `lab_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_card_number` varchar(45) NOT NULL,
  `employee_id` varchar(45) NOT NULL,
  `lab_table_id` int(11) DEFAULT NULL,
  `lab_request_data` longtext,
  `requested_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_lab_queue_employee_table1_idx` (`employee_id`),
  KEY `fk_lab_queue_patient_table1_idx` (`patient_card_number`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lab_queue`
--

INSERT INTO `lab_queue` (`id`, `patient_card_number`, `employee_id`, `lab_table_id`, `lab_request_data`, `requested_on`) VALUES
(41, 'ZMRH000000001', '000001', 1, '{\"1\":\"6\",\"2\":\"9\",\"3\":\"12\",\"4\":\"15\",\"5\":\"26\",\"6\":\"13\",\"7\":\"10\",\"8\":\"7\",\"9\":\"4\",\"10\":\"1\",\"12\":\"3\",\"13\":\"2\",\"14\":\"5\",\"15\":\"8\",\"16\":\"11\",\"17\":\"14\"}', '2020-09-26 22:06:53'),
(42, 'ZMRH000000001', '000001', 3, '{\"2\":\"3\",\"3\":\"6\",\"4\":\"9\",\"5\":\"12\",\"6\":\"15\",\"7\":\"16\",\"8\":\"13\",\"9\":\"10\",\"10\":\"7\",\"11\":\"4\",\"12\":\"1\",\"13\":\"2\",\"14\":\"5\",\"15\":\"8\",\"16\":\"11\",\"17\":\"14\"}', '2020-09-26 22:07:49'),
(43, 'ZMRH000000001', '000001', 4, '{\"2\":\"3\",\"3\":\"6\",\"4\":\"9\",\"5\":\"12\",\"6\":\"15\",\"7\":\"18\",\"8\":\"21\",\"9\":\"22\",\"10\":\"19\",\"11\":\"16\",\"12\":\"13\",\"13\":\"10\",\"14\":\"7\",\"15\":\"4\",\"16\":\"1\",\"17\":\"2\",\"18\":\"5\",\"19\":\"8\",\"20\":\"11\",\"21\":\"14\",\"22\":\"17\",\"23\":\"20\",\"24\":\"23\"}', '2020-09-26 22:22:14'),
(44, 'ZMRH000000001', '000001', 5, '{\"1\":\"14\",\"2\":\"17\"}', '2020-09-26 22:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `lab_serology_coagulation_table`
--

DROP TABLE IF EXISTS `lab_serology_coagulation_table`;
CREATE TABLE IF NOT EXISTS `lab_serology_coagulation_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_card_number` varchar(45) NOT NULL,
  `employee_id` varchar(45) NOT NULL,
  `request_date` datetime NOT NULL,
  `completed_date` datetime NOT NULL,
  `results` json NOT NULL,
  `status` varchar(45) NOT NULL,
  `employee_table_id` int(11) NOT NULL,
  `patient_table_patient_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lab_serology_coagulation_table_employee_table1_idx` (`employee_id`),
  KEY `fk_lab_serology_coagulation_table_patient_table1_idx` (`patient_card_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient_journal`
--

DROP TABLE IF EXISTS `patient_journal`;
CREATE TABLE IF NOT EXISTS `patient_journal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_card_number` varchar(45) NOT NULL,
  `employee_id` varchar(45) NOT NULL,
  `journal_long` longtext NOT NULL,
  `journal_summary` longtext NOT NULL,
  `journal_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idpatient_journal_UNIQUE` (`id`),
  KEY `fk_patient_journal_patient_table1_idx` (`patient_card_number`),
  KEY `fk_patient_journal_employee_table1_idx` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

DROP TABLE IF EXISTS `patient_table`;
CREATE TABLE IF NOT EXISTS `patient_table` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_card_number` varchar(45) NOT NULL,
  `patient_first_name` varchar(45) NOT NULL,
  `patient_last_name` varchar(45) NOT NULL,
  `patient_email` varchar(45) DEFAULT NULL,
  `patient_phone` varchar(45) NOT NULL,
  `patient_job_titile` varchar(45) DEFAULT NULL,
  `patient_signature` varchar(45) DEFAULT NULL,
  `patient_registered_date` varchar(45) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_gender` varchar(45) NOT NULL,
  `patient_status` varchar(45) NOT NULL,
  `patient_wereda` int(11) DEFAULT NULL,
  `patient_kebele` int(11) DEFAULT NULL,
  `patient_address` varchar(45) NOT NULL,
  `patient_session_status` varchar(45) NOT NULL DEFAULT 'closed',
  `patient_session_open_at` datetime NOT NULL,
  `patient_session_closed_at` datetime NOT NULL,
  PRIMARY KEY (`patient_id`),
  UNIQUE KEY `idusers_UNIQUE` (`patient_id`),
  UNIQUE KEY `patient_card_number_UNIQUE` (`patient_card_number`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_table`
--

INSERT INTO `patient_table` (`patient_id`, `patient_card_number`, `patient_first_name`, `patient_last_name`, `patient_email`, `patient_phone`, `patient_job_titile`, `patient_signature`, `patient_registered_date`, `patient_age`, `patient_gender`, `patient_status`, `patient_wereda`, `patient_kebele`, `patient_address`, `patient_session_status`, `patient_session_open_at`, `patient_session_closed_at`) VALUES
(1, 'ZMRH000000001', 'Teklu Duri Gizaw', 'na', 'teklu.duri.gizaw@gmail.com', '1234567891', 'na', 'x', '44093', 15, 'M', 'na', 10, 90, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(2, 'ZMRH000000002', 'Tewfeeq Rada Gulema', 'na', 'tewfeeq.rada.gulema@gmail.com', '1234567891', 'na', 'x', '44093', 14, 'M', 'na', 17, 45, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(3, 'ZMRH000000003', 'Desta Danichew Trefe', 'na', 'desta.danichew.trefe@gmail.com', '1234567891', 'na', 'x', '44093', 36, 'M', 'na', 15, 19, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(4, 'ZMRH000000004', 'Petros Barnabas Jember', 'na', 'petros.barnabas.jember@gmail.com', '1234567891', 'na', 'x', '44093', 21, 'M', 'na', 17, 77, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(5, 'ZMRH000000005', 'Bililign Meherka Yared', 'na', 'bililign.meherka.yared@gmail.com', '1234567891', 'na', 'x', '44093', 16, 'M', 'na', 13, 79, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(6, 'ZMRH000000006', 'Yitayew Yihun Zeki', 'na', 'yitayew.yihun.zeki@gmail.com', '1234567891', 'na', 'x', '44093', 23, 'M', 'na', 13, 40, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(7, 'ZMRH000000007', 'Benyam Bona Mekdem', 'na', 'benyam.bona.mekdem@gmail.com', '1234567891', 'na', 'x', '44093', 16, 'M', 'na', 17, 2, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(8, 'ZMRH000000008', 'Wolitigna Anom Gizaw', 'na', 'wolitigna.anom.gizaw@gmail.com', '1234567891', 'na', 'x', '44093', 38, 'M', 'na', 13, 42, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(9, 'ZMRH000000009', 'Berhanu Wagaye Liben', 'na', 'berhanu.wagaye.liben@gmail.com', '1234567891', 'na', 'x', '44093', 31, 'M', 'na', 5, 90, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(10, 'ZMRH0000000010', 'Abeselome Adamu Biruh', 'na', 'abeselome.adamu.biruh@gmail.com', '1234567891', 'na', 'x', '44093', 37, 'M', 'na', 19, 5, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(11, 'ZMRH0000000011', 'Bililign Ahemed Bessufekad', 'na', 'bililign.ahemed.bessufekad@gmail.com', '1234567891', 'na', 'x', '44093', 14, 'M', 'na', 9, 27, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(12, 'ZMRH0000000012', 'Eba Dula Yared', 'na', 'eba.dula.yared@gmail.com', '1234567891', 'na', 'x', '44093', 26, 'M', 'na', 9, 79, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(13, 'ZMRH0000000013', 'Yitayew Atikem Habtamu', 'na', 'yitayew.atikem.habtamu@gmail.com', '1234567891', 'na', 'x', '44093', 18, 'M', 'na', 1, 87, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(14, 'ZMRH0000000014', 'Zeki Yoni Benti', 'na', 'zeki.yoni.benti@gmail.com', '1234567891', 'na', 'x', '44093', 20, 'M', 'na', 13, 47, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(15, 'ZMRH0000000015', 'Yisake Getachew Retta', 'na', 'yisake.getachew.retta@gmail.com', '1234567891', 'na', 'x', '44093', 42, 'M', 'na', 17, 67, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(16, 'ZMRH0000000016', 'Abebe Kidane Degu', 'na', 'abebe.kidane.degu@gmail.com', '1234567891', 'na', 'x', '44093', 47, 'M', 'na', 13, 1, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(17, 'ZMRH0000000017', 'Trefe Dawit Tabor', 'na', 'trefe.dawit.tabor@gmail.com', '1234567891', 'na', 'x', '44093', 45, 'M', 'na', 11, 57, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(18, 'ZMRH0000000018', 'Mussie Elshaday Teka', 'na', 'mussie.elshaday.teka@gmail.com', '1234567891', 'na', 'x', '44093', 46, 'M', 'na', 11, 35, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(19, 'ZMRH0000000019', 'Fassilidas Amsalu Nerayo', 'na', 'fassilidas.amsalu.nerayo@gmail.com', '1234567891', 'na', 'x', '44093', 43, 'M', 'na', 16, 15, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(20, 'ZMRH0000000020', 'Mulu Tesheme Berihu', 'na', 'mulu.tesheme.berihu@gmail.com', '1234567891', 'na', 'x', '44093', 46, 'M', 'na', 10, 20, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(21, 'ZMRH0000000021', 'Tesfai Ezkeiel Sirak', 'na', 'tesfai.ezkeiel.sirak@gmail.com', '1234567891', 'na', 'x', '44093', 81, 'M', 'na', 5, 61, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(22, 'ZMRH0000000022', 'Bsrat Dagim Ashenafi', 'na', 'bsrat.dagim.ashenafi@gmail.com', '1234567891', 'na', 'x', '44093', 49, 'M', 'na', 1, 18, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(23, 'ZMRH0000000023', 'Wandafera Wolitigna Endale', 'na', 'wandafera.wolitigna.endale@gmail.com', '1234567891', 'na', 'x', '44093', 50, 'M', 'na', 9, 62, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(24, 'ZMRH0000000024', 'Yitbarek Adane Alemu', 'na', 'yitbarek.adane.alemu@gmail.com', '1234567891', 'na', 'x', '44093', 49, 'M', 'na', 3, 2, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(25, 'ZMRH0000000025', 'Wolitigna Liben Petros', 'na', 'wolitigna.liben.petros@gmail.com', '1234567891', 'na', 'x', '44093', 49, 'M', 'na', 14, 94, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(26, 'ZMRH0000000026', 'Teshale Tegene Sentayhu', 'na', 'teshale.tegene.sentayhu@gmail.com', '1234567891', 'na', 'x', '44093', 44, 'M', 'na', 14, 40, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(27, 'ZMRH0000000027', 'Desta Asrat Zemichael', 'na', 'desta.asrat.zemichael@gmail.com', '1234567891', 'na', 'x', '44093', 48, 'M', 'na', 14, 54, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(28, 'ZMRH0000000028', 'Girum Ephrem Mitiku', 'na', 'girum.ephrem.mitiku@gmail.com', '1234567891', 'na', 'x', '44093', 44, 'M', 'na', 9, 57, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(29, 'ZMRH0000000029', 'Zema Dibaba Endale', 'na', 'zema.dibaba.endale@gmail.com', '1234567891', 'na', 'x', '44093', 42, 'M', 'na', 8, 100, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(30, 'ZMRH0000000030', 'Bsrat Abdikarim Kidane', 'na', 'bsrat.abdikarim.kidane@gmail.com', '1234567891', 'na', 'x', '44093', 40, 'M', 'na', 20, 34, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(31, 'ZMRH0000000031', 'Liben Teshome Barnabas', 'na', 'liben.teshome.barnabas@gmail.com', '1234567891', 'na', 'x', '44093', 46, 'M', 'na', 13, 60, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(32, 'ZMRH0000000032', 'Cherenebereck Kidane Danichew', 'na', 'cherenebereck.kidane.danichew@gmail.com', '1234567891', 'na', 'x', '44093', 49, 'M', 'na', 5, 83, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(33, 'ZMRH0000000033', 'Mike Robel Tewfeeq', 'na', 'mike.robel.tewfeeq@gmail.com', '1234567891', 'na', 'x', '44093', 50, 'M', 'na', 13, 76, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(34, 'ZMRH0000000034', 'Shale Beca Dejen', 'na', 'shale.beca.dejen@gmail.com', '1234567891', 'na', 'x', '44093', 44, 'M', 'na', 5, 89, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(35, 'ZMRH0000000035', 'Basliel Kirubel Dejen', 'na', 'basliel.kirubel.dejen@gmail.com', '1234567891', 'na', 'x', '44093', 49, 'M', 'na', 16, 74, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(36, 'ZMRH0000000036', 'Siyoum Amir Afewerek', 'na', 'siyoum.amir.afewerek@gmail.com', '1234567891', 'na', 'x', '44093', 45, 'M', 'na', 13, 56, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(37, 'ZMRH0000000037', 'Shale Tamrat Abera', 'na', 'shale.tamrat.abera@gmail.com', '1234567891', 'na', 'x', '44093', 43, 'M', 'na', 4, 16, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(38, 'ZMRH0000000038', 'Sentayhu Basliel Kaleb', 'na', 'sentayhu.basliel.kaleb@gmail.com', '1234567891', 'na', 'x', '44093', 47, 'M', 'na', 17, 4, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(39, 'ZMRH0000000039', 'Wendimu Iskinder Workneh', 'na', 'wendimu.iskinder.workneh@gmail.com', '1234567891', 'na', 'x', '44093', 46, 'M', 'na', 15, 18, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(40, 'ZMRH0000000040', 'Bitwoded Galawdeyos Tamru', 'na', 'bitwoded.galawdeyos.tamru@gmail.com', '1234567891', 'na', 'x', '44093', 49, 'M', 'na', 10, 70, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(41, 'ZMRH0000000041', 'Nebiat Natnael Amde', 'na', 'nebiat.natnael.amde@gmail.com', '1234567891', 'na', 'x', '44093', 45, 'M', 'na', 12, 18, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(42, 'ZMRH0000000042', 'Alazar Chernebereck Negus', 'na', 'alazar.chernebereck.negus@gmail.com', '1234567891', 'na', 'x', '44093', 46, 'M', 'na', 8, 8, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(43, 'ZMRH0000000043', 'Mirtus Wolitigna Bekila', 'na', 'mirtus.wolitigna.bekila@gmail.com', '1234567891', 'na', 'x', '44093', 66, 'M', 'na', 8, 48, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(44, 'ZMRH0000000044', 'Tedros Lemma Kahsai', 'na', 'tedros.lemma.kahsai@gmail.com', '1234567891', 'na', 'x', '44093', 62, 'M', 'na', 17, 38, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(45, 'ZMRH0000000045', 'Misgina Chirkos Tesheme', 'na', 'misgina.chirkos.tesheme@gmail.com', '1234567891', 'na', 'x', '44093', 61, 'M', 'na', 11, 62, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(46, 'ZMRH0000000046', 'Yohannes Mesfin Wendimu', 'na', 'yohannes.mesfin.wendimu@gmail.com', '1234567891', 'na', 'x', '44093', 63, 'M', 'na', 4, 35, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(47, 'ZMRH0000000047', 'Robel Feleke Yihun', 'na', 'robel.feleke.yihun@gmail.com', '1234567891', 'na', 'x', '44093', 69, 'M', 'na', 11, 29, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(48, 'ZMRH0000000048', 'Beheilu Shawel Liben', 'na', 'beheilu.shawel.liben@gmail.com', '1234567891', 'na', 'x', '44093', 63, 'M', 'na', 14, 74, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(49, 'ZMRH0000000049', 'Melaku Nahom Frayzer', 'na', 'melaku.nahom.frayzer@gmail.com', '1234567891', 'na', 'x', '44093', 67, 'M', 'na', 4, 93, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(50, 'ZMRH0000000050', 'Teoflyos Alemayehu Afewerek', 'na', 'teoflyos.alemayehu.afewerek@gmail.com', '1234567891', 'na', 'x', '44093', 61, 'M', 'na', 1, 94, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(51, 'ZMRH0000000051', 'Hezbalem Jember Kassa', 'na', 'hezbalem.jember.kassa@gmail.com', '1234567891', 'na', 'x', '44093', 61, 'F', 'na', 10, 70, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(52, 'ZMRH0000000052', 'Melkamnesh Tegene Mesay', 'na', 'melkamnesh.tegene.mesay@gmail.com', '1234567891', 'na', 'x', '44093', 63, 'F', 'na', 11, 8, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(53, 'ZMRH0000000053', 'Fesesework Kaleyesus Getahun', 'na', 'fesesework.kaleyesus.getahun@gmail.com', '1234567891', 'na', 'x', '44093', 67, 'F', 'na', 12, 9, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(54, 'ZMRH0000000054', 'Tsigereda Anom Demessie', 'na', 'tsigereda.anom.demessie@gmail.com', '1234567891', 'na', 'x', '44093', 61, 'F', 'na', 7, 29, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(55, 'ZMRH0000000055', 'Sewit Alem Mulu', 'na', 'sewit.alem.mulu@gmail.com', '1234567891', 'na', 'x', '44093', 61, 'F', 'na', 1, 71, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(56, 'ZMRH0000000056', 'Birkeye Abey Abenet', 'na', 'birkeye.abey.abenet@gmail.com', '1234567891', 'na', 'x', '44093', 65, 'F', 'na', 1, 21, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(57, 'ZMRH0000000057', 'Mariame Amir Armah', 'na', 'mariame.amir.armah@gmail.com', '1234567891', 'na', 'x', '44093', 66, 'F', 'na', 14, 4, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(58, 'ZMRH0000000058', 'Nigist Endale Yessuf', 'na', 'nigist.endale.yessuf@gmail.com', '1234567891', 'na', 'x', '44093', 63, 'F', 'na', 4, 63, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(59, 'ZMRH0000000059', 'Rahnia Tsegaye Ahemed', 'na', 'rahnia.tsegaye.ahemed@gmail.com', '1234567891', 'na', 'x', '44093', 66, 'F', 'na', 19, 76, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(60, 'ZMRH0000000060', 'Masresha Ayene Dawit', 'na', 'masresha.ayene.dawit@gmail.com', '1234567891', 'na', 'x', '44093', 62, 'F', 'na', 8, 26, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(61, 'ZMRH0000000061', 'Terhas Gedeyon Abdella', 'na', 'terhas.gedeyon.abdella@gmail.com', '1234567891', 'na', 'x', '44093', 66, 'F', 'na', 14, 91, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(62, 'ZMRH0000000062', 'Salem Anwar Bona', 'na', 'salem.anwar.bona@gmail.com', '1234567891', 'na', 'x', '44093', 17, 'F', 'na', 19, 49, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(63, 'ZMRH0000000063', 'Safiyeh Tamru Yaaseen', 'na', 'safiyeh.tamru.yaaseen@gmail.com', '1234567891', 'na', 'x', '44093', 16, 'F', 'na', 4, 94, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(64, 'ZMRH0000000064', 'Fozia Siyoum Iyoas', 'na', 'fozia.siyoum.iyoas@gmail.com', '1234567891', 'na', 'x', '44093', 36, 'F', 'na', 13, 11, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(65, 'ZMRH0000000065', 'Hawani Abdimelech Yafet', 'na', 'hawani.abdimelech.yafet@gmail.com', '1234567891', 'na', 'x', '44093', 12, 'F', 'na', 14, 49, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(66, 'ZMRH0000000066', 'Rediet Zeru Gedeyon', 'na', 'rediet.zeru.gedeyon@gmail.com', '1234567891', 'na', 'x', '44093', 15, 'F', 'na', 6, 7, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(67, 'ZMRH0000000067', 'Gete Gabra Selassie', 'na', 'gete.gabra.selassie@gmail.com', '1234567891', 'na', 'x', '44093', 25, 'F', 'na', 13, 42, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(68, 'ZMRH0000000068', 'Mahalet Bezuayehu Amde', 'na', 'mahalet.bezuayehu.amde@gmail.com', '1234567891', 'na', 'x', '44093', 22, 'F', 'na', 16, 63, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(69, 'ZMRH0000000069', 'Konjit Benyam Bayissa', 'na', 'konjit.benyam.bayissa@gmail.com', '1234567891', 'na', 'x', '44093', 27, 'F', 'na', 1, 59, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(70, 'ZMRH0000000070', 'Belaynesh Tiruneh Asmelash', 'na', 'belaynesh.tiruneh.asmelash@gmail.com', '1234567891', 'na', 'x', '44093', 36, 'F', 'na', 3, 98, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(71, 'ZMRH0000000071', 'Zahera Theofeleios Rediat', 'na', 'zahera.theofeleios.rediat@gmail.com', '1234567891', 'na', 'x', '44093', 20, 'F', 'na', 12, 76, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(72, 'ZMRH0000000072', 'Fozeia Gebriael Lemma', 'na', 'fozeia.gebriael.lemma@gmail.com', '1234567891', 'na', 'x', '44093', 12, 'F', 'na', 7, 72, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(73, 'ZMRH0000000073', 'Tsehai Abebe Melku', 'na', 'tsehai.abebe.melku@gmail.com', '1234567891', 'na', 'x', '44093', 28, 'F', 'na', 10, 97, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(74, 'ZMRH0000000074', 'Shefena Tewfeeq Yideg', 'na', 'shefena.tewfeeq.yideg@gmail.com', '1234567891', 'na', 'x', '44093', 28, 'F', 'na', 16, 58, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(75, 'ZMRH0000000075', 'Adowa Wasie Demeke', 'na', 'adowa.wasie.demeke@gmail.com', '1234567891', 'na', 'x', '44093', 41, 'F', 'na', 14, 4, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(76, 'ZMRH0000000076', 'Yeshi Aron Elias', 'na', 'yeshi.aron.elias@gmail.com', '1234567891', 'na', 'x', '44093', 44, 'F', 'na', 12, 64, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(77, 'ZMRH0000000077', 'Denkenesh Darge Yitbarek', 'na', 'denkenesh.darge.yitbarek@gmail.com', '1234567891', 'na', 'x', '44093', 45, 'F', 'na', 11, 20, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(78, 'ZMRH0000000078', 'Mare Workneh Mulu', 'na', 'mare.workneh.mulu@gmail.com', '1234567891', 'na', 'x', '44093', 48, 'F', 'na', 3, 38, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(79, 'ZMRH0000000079', 'Asnaku Esra Gukssa', 'na', 'asnaku.esra.gukssa@gmail.com', '1234567891', 'na', 'x', '44093', 26, 'F', 'na', 19, 77, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(80, 'ZMRH0000000080', 'Makeda Cherenebereck Bullo', 'na', 'makeda.cherenebereck.bullo@gmail.com', '1234567891', 'na', 'x', '44093', 22, 'F', 'na', 5, 94, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(81, 'ZMRH0000000081', 'Birhun Workneh Hailu', 'na', 'birhun.workneh.hailu@gmail.com', '1234567891', 'na', 'x', '44093', 18, 'F', 'na', 19, 83, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(82, 'ZMRH0000000082', 'Edna Hadgu Getasew', 'na', 'edna.hadgu.getasew@gmail.com', '1234567891', 'na', 'x', '44093', 24, 'F', 'na', 1, 43, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(83, 'ZMRH0000000083', 'Mariame Kelile Alemayehu', 'na', 'mariame.kelile.alemayehu@gmail.com', '1234567891', 'na', 'x', '44093', 13, 'F', 'na', 14, 1, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(84, 'ZMRH0000000084', 'Akrham Darge Mebrete', 'na', 'akrham.darge.mebrete@gmail.com', '1234567891', 'na', 'x', '44093', 23, 'F', 'na', 4, 50, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(85, 'ZMRH0000000085', 'Fesesework Adugna Gedarm', 'na', 'fesesework.adugna.gedarm@gmail.com', '1234567891', 'na', 'x', '44093', 12, 'F', 'na', 2, 17, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(86, 'ZMRH0000000086', 'Abenet Godefai Kassa', 'na', 'abenet.godefai.kassa@gmail.com', '1234567891', 'na', 'x', '44093', 21, 'F', 'na', 2, 71, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(87, 'ZMRH0000000087', 'Mascara Abebaw Natnael', 'na', 'mascara.abebaw.natnael@gmail.com', '1234567891', 'na', 'x', '44093', 10, 'F', 'na', 5, 89, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(88, 'ZMRH0000000088', 'Almaz Getasew Nerayo', 'na', 'almaz.getasew.nerayo@gmail.com', '1234567891', 'na', 'x', '44093', 12, 'F', 'na', 17, 45, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(89, 'ZMRH0000000089', 'Agere Tarik Mekbib', 'na', 'agere.tarik.mekbib@gmail.com', '1234567891', 'na', 'x', '44093', 15, 'F', 'na', 8, 71, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(90, 'ZMRH0000000090', 'Meseret Petros Berhe', 'na', 'meseret.petros.berhe@gmail.com', '1234567891', 'na', 'x', '44093', 37, 'F', 'na', 18, 11, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(91, 'ZMRH0000000091', 'Buzinesh Alem Mebrete', 'na', 'buzinesh.alem.mebrete@gmail.com', '1234567891', 'na', 'x', '44093', 38, 'F', 'na', 1, 23, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(92, 'ZMRH0000000092', 'Abey Assefa Amha', 'na', 'abey.assefa.amha@gmail.com', '1234567891', 'na', 'x', '44093', 45, 'F', 'na', 4, 34, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(93, 'ZMRH0000000093', 'Bogale Eyob Mebreatu', 'na', 'bogale.eyob.mebreatu@gmail.com', '1234567891', 'na', 'x', '44093', 43, 'F', 'na', 1, 33, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(94, 'ZMRH0000000094', 'Tesfaye Ashenafi Sirak', 'na', 'tesfaye.ashenafi.sirak@gmail.com', '1234567891', 'na', 'x', '44093', 15, 'F', 'na', 2, 75, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(95, 'ZMRH0000000095', 'Gizaw Caleb Yitay', 'na', 'gizaw.caleb.yitay@gmail.com', '1234567891', 'na', 'x', '44093', 18, 'F', 'na', 5, 77, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(96, 'ZMRH0000000096', 'Buzinesh Giday Brehan', 'na', 'buzinesh.giday.brehan@gmail.com', '1234567891', 'na', 'x', '44093', 18, 'F', 'na', 14, 51, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(97, 'ZMRH0000000097', 'Mekdes Abenet Yieshak', 'na', 'mekdes.abenet.yieshak@gmail.com', '1234567891', 'na', 'x', '44093', 60, 'F', 'na', 12, 90, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(98, 'ZMRH0000000098', 'Tidani Legesse Daniachew', 'na', 'tidani.legesse.daniachew@gmail.com', '1234567891', 'na', 'x', '44093', 67, 'F', 'na', 1, 29, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00'),
(99, 'ZMRH0000000099', 'Nishan Giday Tewodros', 'na', 'nishan.giday.tewodros@gmail.com', '1234567891', 'na', 'x', '44093', 13, 'F', 'na', 18, 93, 'na', 'closed', '2044-09-03 00:00:00', '2044-09-03 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admission_table`
--
ALTER TABLE `admission_table`
  ADD CONSTRAINT `fk_admission_table_employee_table1` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_admission_table_patient_table1` FOREIGN KEY (`patient_card_number`) REFERENCES `patient_table` (`patient_card_number`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `diagnos_vital_sign_table`
--
ALTER TABLE `diagnos_vital_sign_table`
  ADD CONSTRAINT `fk_diagnos_vital_sign_table_employee_table1` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_diagnos_vital_sign_table_patient_table1` FOREIGN KEY (`patient_card_number`) REFERENCES `patient_table` (`patient_card_number`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lab_queue`
--
ALTER TABLE `lab_queue`
  ADD CONSTRAINT `fk_lab_queue_employee_table1` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lab_queue_patient_table1` FOREIGN KEY (`patient_card_number`) REFERENCES `patient_table` (`patient_card_number`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lab_serology_coagulation_table`
--
ALTER TABLE `lab_serology_coagulation_table`
  ADD CONSTRAINT `fk_lab_serology_coagulation_table_employee_table1` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lab_serology_coagulation_table_patient_table1` FOREIGN KEY (`patient_card_number`) REFERENCES `patient_table` (`patient_card_number`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patient_journal`
--
ALTER TABLE `patient_journal`
  ADD CONSTRAINT `fk_patient_journal_employee_table1` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_patient_journal_patient_table1` FOREIGN KEY (`patient_card_number`) REFERENCES `patient_table` (`patient_card_number`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
