-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 10, 2020 at 02:10 PM
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
  `remarks` longtext NOT NULL,
  `admission_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_admission_table_patient_table1_idx` (`patient_card_number`),
  KEY `fk_admission_table_employee_table1_idx` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `remarks` longtext,
  `created_at` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_diagnos_vital_sign_table_patient_table1_idx` (`patient_card_number`),
  KEY `fk_diagnos_vital_sign_table_employee_table1_idx` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `drug_list_inhouse`
--

DROP TABLE IF EXISTS `drug_list_inhouse`;
CREATE TABLE IF NOT EXISTS `drug_list_inhouse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emplyee_id` int(11) NOT NULL,
  `name` longtext,
  `type` varchar(45) DEFAULT NULL,
  `quantity` int(25) NOT NULL DEFAULT '100',
  `status` varchar(45) NOT NULL DEFAULT 'limited',
  `created_on` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_drug_list_inhouse_employee_table1_idx` (`emplyee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=332 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drug_list_inhouse`
--

INSERT INTO `drug_list_inhouse` (`id`, `emplyee_id`, `name`, `type`, `quantity`, `status`, `created_on`) VALUES
(1, 1, 'Acetazolamide - 250mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:31'),
(2, 1, 'Acetylsalicylic Acid - 300mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:31'),
(3, 1, 'Acetylsalicylic Acid - 81mg - Tablet( Enteric Coated)', 'Tablet', 100, 'limited', '10/10/2020 09:22:31'),
(4, 1, 'Acyclovir - 200mg/5ml - Oral Suspension', '120ml', 100, 'limited', '10/10/2020 09:22:31'),
(5, 1, 'Acyclovir - 3% - Eye Ointment', '4.5gm', 100, 'limited', '10/10/2020 09:22:31'),
(6, 1, 'Adenosine - 3mg/ml in 2ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:31'),
(7, 1, 'Adrenaline (Epinephrine) - 0.1% in 1ml ampoule - Injection', 'Each', 100, 'limited', '10/10/2020 09:22:31'),
(8, 1, 'Albendazole - 200mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:31'),
(9, 1, 'Aluminium Hydroxide + Magnesium Hydroxide + Simethicon - (225mg + 200mg + 50mg)/5ml - Suspension', '200ml', 100, 'limited', '10/10/2020 09:22:31'),
(10, 1, 'Aluminium Hydroxide + Magnesium Trisilicate - (120mg + 250mg) - Tablet (Chewable)', 'Tablet', 100, 'limited', '10/10/2020 09:22:31'),
(11, 1, 'Aminophyline - 250mg/10ml in 10ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:31'),
(12, 1, 'Amiodarone - 100mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:31'),
(13, 1, 'Amitriptyline - 25mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:31'),
(14, 1, 'Amlodipine - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:31'),
(15, 1, 'Amoxicillin - 125mg - Tablet (Dispersible)', 'Tablet', 100, 'limited', '10/10/2020 09:22:31'),
(16, 1, 'Amoxicillin - 125mg/5ml - Oral Suspension', '100ml', 100, 'limited', '10/10/2020 09:22:31'),
(17, 1, 'Amoxicillin - 250mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 09:22:32'),
(18, 1, 'Amoxicillin - 250mg/5ml - Oral Suspension', '100ml', 100, 'limited', '10/10/2020 09:22:32'),
(19, 1, 'Amoxicillin - 500mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 09:22:32'),
(20, 1, 'Amoxicillin + Clavulanic Acid - (125mg + 31.25mg)/5ml - Oral Suspension', '100ml', 100, 'limited', '10/10/2020 09:22:32'),
(21, 1, 'Amoxicillin + Clavulanic Acid - 500mg + 125mg - Tablet (Film Coated)', 'Tablet', 100, 'limited', '10/10/2020 09:22:32'),
(22, 1, 'Amphotericin B - 50mg in vial - Powder for injection', 'Vial', 100, 'limited', '10/10/2020 09:22:32'),
(23, 1, 'Ampicillin Sodium - 500mg in Vial - Injection', 'Vial', 100, 'limited', '10/10/2020 09:22:32'),
(24, 1, 'Anti-Rho (D) Immune Globulin - 300mcg in 2ml Vial - Injection with 0.9% Sodium Chloride', 'Ampoule', 100, 'limited', '10/10/2020 09:22:32'),
(25, 1, 'Atenolol - 50mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:32'),
(26, 1, 'Atracurium Besylate - 10mg/ml in 5ml ampoule - Injection', 'Each', 100, 'limited', '10/10/2020 09:22:32'),
(27, 1, 'Atropine Sulphate - 0.50% - Eye Drop', '15ml', 100, 'limited', '10/10/2020 09:22:32'),
(28, 1, 'Atropine Sulphate - 1% eye drop -', '15ml', 100, 'limited', '10/10/2020 09:22:32'),
(29, 1, 'Atropine Sulphate - 1mg/ml in 1ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:32'),
(30, 1, 'Atrovastatin - 20mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:32'),
(31, 1, 'Atrovastatin - 40mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:32'),
(32, 1, 'Azithromycin - 500mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:32'),
(33, 1, 'Azithromycine - 200mg/5ml - Oral Suspension', '15ml', 100, 'limited', '10/10/2020 09:22:32'),
(34, 1, 'Benzhexol (Trihexyphenidyl HCL) - 2mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:32'),
(35, 1, 'Benzhexol (Trihexyphenidyl HCL) - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:32'),
(36, 1, 'Bromazepam - 1.5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:32'),
(37, 1, 'Bromazepam - 3mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:32'),
(38, 1, 'Bupivacaine - 0.5% in 10ml ampoule - Injection', 'Each', 100, 'limited', '10/10/2020 09:22:32'),
(39, 1, 'Calamine - 5% - Lotion', 'Bottle', 100, 'limited', '10/10/2020 09:22:32'),
(40, 1, 'Calcium Gluconate - 10% in 10ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:32'),
(41, 1, 'Candesartan - 8mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:32'),
(42, 1, 'Carbamazepine - 100mg/5ml - Syrup', '100ml', 100, 'limited', '10/10/2020 09:22:32'),
(43, 1, 'Carbamazepine - 200mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:32'),
(44, 1, 'Castor Oil - - Oral Solution', '60ml', 100, 'limited', '10/10/2020 09:22:32'),
(45, 1, 'Cefixime - 400mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:32'),
(46, 1, 'Ceftazidime - 1g in vial - Powder for injection', 'Each', 100, 'limited', '10/10/2020 09:22:32'),
(47, 1, 'Ceftriaxone - 1gm in Vial - Injection', 'Each', 100, 'limited', '10/10/2020 09:22:32'),
(48, 1, 'Cephalexine - 125mg/5ml - Oral Suspension', '100ml', 100, 'limited', '10/10/2020 09:22:32'),
(49, 1, 'Cephalexine - 500mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 09:22:32'),
(50, 1, 'Cetrizine - 10mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:33'),
(51, 1, 'Chlorpheniramine Maleate - 2mg/5ml - Syrup', '100ml', 100, 'limited', '10/10/2020 09:22:33'),
(52, 1, 'Chlorpheniramine Maleate - 4mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:33'),
(53, 1, 'Chlorpromazine HCL - 100mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:33'),
(54, 1, 'Cimetidine - 200mg/ml in 2ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:33'),
(55, 1, 'Ciprofloxacin - 0.30% - Eye Drop', '5ml', 100, 'limited', '10/10/2020 09:22:33'),
(56, 1, 'Ciprofloxacin - 2mg/ml in 100ml - Intravenous Infusion (as lactate)', 'Each', 100, 'limited', '10/10/2020 09:22:33'),
(57, 1, 'Ciprofloxacin - 500mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:33'),
(58, 1, 'Clarithromycin - 500mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:33'),
(59, 1, 'Clotrimazole - 1% - Cream', '20gm', 100, 'limited', '10/10/2020 09:22:33'),
(60, 1, 'Clotrimazole - 100mg - Tablet (Vaginal)', 'Tablet', 100, 'limited', '10/10/2020 09:22:33'),
(61, 1, 'Cloxacillin Sodium - 125 mg/5 ml - Syrup', 'Bottle', 100, 'limited', '10/10/2020 09:22:33'),
(62, 1, 'Cloxacillin Sodium - 250mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 09:22:33'),
(63, 1, 'Cloxacillin Sodium - 250mg/5ml - Oral Suspension', '100ml', 100, 'limited', '10/10/2020 09:22:33'),
(64, 1, 'Dexamethasone - 0.10% - Eye Drop', '10ml', 100, 'limited', '10/10/2020 09:22:33'),
(65, 1, 'Dexamethasone - 4mg/ml - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:33'),
(66, 1, 'Dextromethorphan Hydrobromide - 15mg/5ml - Syrup', '125ml', 100, 'limited', '10/10/2020 09:22:33'),
(67, 1, 'Dextrose - 40% in 20ml - Intravenous Infusion', 'Ampoule', 100, 'limited', '10/10/2020 09:22:33'),
(68, 1, 'Diazepam - 5 mg/ml in 2ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:33'),
(69, 1, 'Diazepam - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:33'),
(70, 1, 'Diclofenac Sodium - 25mg/ml in 3ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:33'),
(71, 1, 'Diclofenac Sodium - 50mg - Powder', 'Sachet', 100, 'limited', '10/10/2020 09:22:33'),
(72, 1, 'Diclofenac Sodium - 50mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:33'),
(73, 1, 'Digoxin - 0.25mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:33'),
(74, 1, 'Digoxin - 0.25mg/ml in 2ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:33'),
(75, 1, 'Dimenhydrinate - 50mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:33'),
(76, 1, 'Dopamine Hydrochloride - 40mg/ml in 5ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:33'),
(77, 1, 'Doxycycline - 100mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 09:22:33'),
(78, 1, 'Enalapril Maleate - 10mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(79, 1, 'Enalapril Maleate - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(80, 1, 'Erythromycin Stearate - 250 mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(81, 1, 'Esomeprazole - 40mg/5ml in Vial - Injection (Lypophlized)', 'Each', 100, 'limited', '10/10/2020 09:22:34'),
(82, 1, 'Felodipine - 10mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(83, 1, 'Felodipine - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(84, 1, 'Ferrous Gluconate - 300mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(85, 1, 'Ferrous Sulphate - 200mg/5ml - Syrup', '100ml', 100, 'limited', '10/10/2020 09:22:34'),
(86, 1, 'Ferrous Sulphate + Folic Acid - (150mg + 0.5mg) - Tablet (enteric coated)', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(87, 1, 'Fluoxetine - 20mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 09:22:34'),
(88, 1, 'Folic Acid - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(89, 1, 'Frusemide - 10mg/ml in 2ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:34'),
(90, 1, 'Frusemide - 40mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(91, 1, 'Gentamicin - 0.3% - Eye/Ear drop', '10 ml', 100, 'limited', '10/10/2020 09:22:34'),
(92, 1, 'Gentamicin - 40mg/ml in 2ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:34'),
(93, 1, 'Glibenclamide - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(94, 1, 'Glycerin - 900mg - Suppository', 'Suppository', 100, 'limited', '10/10/2020 09:22:34'),
(95, 1, 'Haloperidol - 1.5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(96, 1, 'Haloperidol - 2mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(97, 1, 'Haloperidol - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(98, 1, 'Haloperidol - 5mg/ml in 1ml Ampule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:34'),
(99, 1, 'Halothane - 250 ml - Inhalation', '250ml', 100, 'limited', '10/10/2020 09:22:34'),
(100, 1, 'Heparin Sulphate - 5000IU/ml in 1ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:34'),
(101, 1, 'Hydralazine - 20mg/ml in 1ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:34'),
(102, 1, 'Hydrochlorothiazide - 25mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(103, 1, 'Hydrocortisone Sodium Succinate - 50mg/ml in 2ml ampoule - Injection', 'Each', 100, 'limited', '10/10/2020 09:22:34'),
(104, 1, 'Hyoscine (Scopolamine) Butylbromide - 20mg/ml in 1ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:34'),
(105, 1, 'Ibuprofen - 400mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(106, 1, 'Icthamol - 10% - Topical Ointment', '20gm', 100, 'limited', '10/10/2020 09:22:34'),
(107, 1, 'Imipramine - 25mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:34'),
(108, 1, 'Indomethacin - 100mg - Suppository', 'Suppository', 100, 'limited', '10/10/2020 09:22:35'),
(109, 1, 'Insulin Isophane Human - 100IU/ml in 10ml Vial - Injection(Suspension)', 'Each', 100, 'limited', '10/10/2020 09:22:35'),
(110, 1, 'Insulin Soluble Human - 100IU/ml in 10ml Vial - Injection(Solution)', 'Each', 100, 'limited', '10/10/2020 09:22:35'),
(111, 1, 'Insulin Zinc Suspension/Insulin Lente - 100 Units/ml - Injection', 'Vial', 100, 'limited', '10/10/2020 09:22:35'),
(112, 1, 'Insuline Isophane Biphasic (Soluble/Isophane Mixture) - (30 + 70)IU/ml in 10ml Vial - Injection (Suspension)', 'Each', 100, 'limited', '10/10/2020 09:22:35'),
(113, 1, 'Isoflurane - 250ml - Inhalation', '250ml', 100, 'limited', '10/10/2020 09:22:35'),
(114, 1, 'Pancuronium Bromide - 2 mg/ml in 2ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:35'),
(115, 1, 'Paracetamol - 120mg/5ml - Syrup', '60ml', 100, 'limited', '10/10/2020 09:22:35'),
(116, 1, 'Paracetamol - 125mg - Suppository', 'Suppository', 100, 'limited', '10/10/2020 09:22:35'),
(117, 1, 'Paracetamol - 500mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:35'),
(118, 1, 'Penicillin G, Benzanthin - 1.2 MIU - Injection', 'Vial', 100, 'limited', '10/10/2020 09:22:35'),
(119, 1, 'Penicillin G, Benzanthin - 2.4 MIU - Injection', 'Vial', 100, 'limited', '10/10/2020 09:22:35'),
(120, 1, 'Pethidine HCL - 50mg/ml in 1ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:35'),
(121, 1, 'Phenobarbitone (Phenobarbital) - 100mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:35'),
(122, 1, 'Phenobarbitone (Phenobarbital) - 120mg/ml - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:35'),
(123, 1, 'Phenobarbitone (Phenobarbital) - 30mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:35'),
(124, 1, 'Phenytoin (Diphenhydantoin) Sodium - 250mg in Vial - Powder for injection', 'Each', 100, 'limited', '10/10/2020 09:22:35'),
(125, 1, 'Phenytoin (Diphenhydantoin) Sodium - 50mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:35'),
(126, 1, 'Pilocarpine HCL - 2% - Eye Drop', '15ml', 100, 'limited', '10/10/2020 09:22:35'),
(127, 1, 'Potassium Chloride - 600mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:35'),
(128, 1, 'Praziquantel - 600mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:35'),
(129, 1, 'Prednisolone - 5 mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:35'),
(130, 1, 'Promethazine HCL - 25mg/ml in 2ml - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:35'),
(131, 1, 'Propofol - 10mg/ml in 20ml - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:35'),
(132, 1, 'Propranolol - 10mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:35'),
(133, 1, 'Propranolol - 40mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:35'),
(134, 1, 'Propylthiouracil - 50mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:35'),
(135, 1, 'Resperidone - 4mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:35'),
(136, 1, 'Risperidone - 4mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:35'),
(137, 1, 'Salbutamol (Albuterol) - 0.1mg/dose - Aerosol (Oral Inhalation)', '200metered doses', 100, 'limited', '10/10/2020 09:22:36'),
(138, 1, 'Salbutamol (Albuterol) - 2mg/5ml - Syrup', '100ml', 100, 'limited', '10/10/2020 09:22:36'),
(139, 1, 'Spironolactone - 25mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:36'),
(140, 1, 'Sulphamethoxazole + Trimethoprim - (400mg + 80mg)/5ml - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:36'),
(141, 1, 'Suxamethonium Chloride (Succinylcholine) - 50 mg/ml in 10ml Vial - Powder for injection', 'Vial', 100, 'limited', '10/10/2020 09:22:36'),
(142, 1, 'Tetanus Antitoxin (TAT), Equine - 1,500 IU/ml in 1ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:36'),
(143, 1, 'Tetracycline - 0.01 - Eye Ointment', '4gm', 100, 'limited', '10/10/2020 09:22:36'),
(144, 1, 'Tetracycline - 1% - Eye Ointment', 'Each', 100, 'limited', '10/10/2020 09:22:36'),
(145, 1, 'Theophylline + Ephedrine - (120mg + 11mg) - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:36'),
(146, 1, 'Thiopental Sodium - 0.5 g - Powder for injection', 'Vial', 100, 'limited', '10/10/2020 09:22:36'),
(147, 1, 'Thyroxine Sodium - 0.05mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:36'),
(148, 1, 'Thyroxine Sodium - 0.1mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:36'),
(149, 1, 'Tramadol HCl - 50mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 09:22:36'),
(150, 1, 'Tramadol HCl - 50mg/ml in 2ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:36'),
(151, 1, 'Tropicamide - 0.01 - Eye Drop', '10ml', 100, 'limited', '10/10/2020 09:22:36'),
(152, 1, 'Valsartan - 160mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:36'),
(153, 1, 'Verapamil - 40mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:36'),
(154, 1, 'Vitamin B Complex Preparations - - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:36'),
(155, 1, 'Vitamin B1 + Vitamin B6 + Vitamin B12 - (100mg + 200mg + 1000mcg) - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:36'),
(156, 1, 'Warfarin Sodium - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 09:22:36'),
(157, 1, 'Vancomycin - 500mg - Injection', 'Each', 100, 'limited', '10/10/2020 09:22:36'),
(158, 1, 'Vancomycine - 1gm in Vial - Injection', 'Each', 100, 'limited', '10/10/2020 09:22:36'),
(159, 1, 'Vecuronium Bromide - 10 mg in vial - Powder for injection', 'Each', 100, 'limited', '10/10/2020 09:22:36'),
(160, 1, 'Vitamin B Complex Preparations - - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:36'),
(161, 1, 'Vitamin B12 - 100Ã‚Âµg/ml;1000Ã‚Âµg/ml in 1 ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:36'),
(162, 1, 'Vitamin K1 (Phytomenadione) - 10mg/ml in 1ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:36'),
(163, 1, 'Water For Injection - 5ml - Injection', 'Ampoule', 100, 'limited', '10/10/2020 09:22:36'),
(164, 1, 'White Petrolatum - - Ointment', '1Kg', 100, 'limited', '10/10/2020 09:22:36'),
(165, 1, 'Zinc Oxide - 0.15 - Ointment', '1Kg', 100, 'limited', '10/10/2020 09:22:36'),
(166, 1, 'Acetazolamide - 250mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:39'),
(167, 1, 'Acetylsalicylic Acid - 300mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:39'),
(168, 1, 'Acetylsalicylic Acid - 81mg - Tablet( Enteric Coated)', 'Tablet', 100, 'limited', '10/10/2020 10:08:39'),
(169, 1, 'Acyclovir - 200mg/5ml - Oral Suspension', '120ml', 100, 'limited', '10/10/2020 10:08:39'),
(170, 1, 'Acyclovir - 3% - Eye Ointment', '4.5gm', 100, 'limited', '10/10/2020 10:08:39'),
(171, 1, 'Adenosine - 3mg/ml in 2ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:39'),
(172, 1, 'Adrenaline (Epinephrine) - 0.1% in 1ml ampoule - Injection', 'Each', 100, 'limited', '10/10/2020 10:08:39'),
(173, 1, 'Albendazole - 200mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:39'),
(174, 1, 'Aluminium Hydroxide + Magnesium Hydroxide + Simethicon - (225mg + 200mg + 50mg)/5ml - Suspension', '200ml', 100, 'limited', '10/10/2020 10:08:39'),
(175, 1, 'Aluminium Hydroxide + Magnesium Trisilicate - (120mg + 250mg) - Tablet (Chewable)', 'Tablet', 100, 'limited', '10/10/2020 10:08:39'),
(176, 1, 'Aminophyline - 250mg/10ml in 10ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:39'),
(177, 1, 'Amiodarone - 100mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:39'),
(178, 1, 'Amitriptyline - 25mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:39'),
(179, 1, 'Amlodipine - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:39'),
(180, 1, 'Amoxicillin - 125mg - Tablet (Dispersible)', 'Tablet', 100, 'limited', '10/10/2020 10:08:39'),
(181, 1, 'Amoxicillin - 125mg/5ml - Oral Suspension', '100ml', 100, 'limited', '10/10/2020 10:08:39'),
(182, 1, 'Amoxicillin - 250mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 10:08:39'),
(183, 1, 'Amoxicillin - 250mg/5ml - Oral Suspension', '100ml', 100, 'limited', '10/10/2020 10:08:39'),
(184, 1, 'Amoxicillin - 500mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 10:08:39'),
(185, 1, 'Amoxicillin + Clavulanic Acid - (125mg + 31.25mg)/5ml - Oral Suspension', '100ml', 100, 'limited', '10/10/2020 10:08:39'),
(186, 1, 'Amoxicillin + Clavulanic Acid - 500mg + 125mg - Tablet (Film Coated)', 'Tablet', 100, 'limited', '10/10/2020 10:08:39'),
(187, 1, 'Amphotericin B - 50mg in vial - Powder for injection', 'Vial', 100, 'limited', '10/10/2020 10:08:39'),
(188, 1, 'Ampicillin Sodium - 500mg in Vial - Injection', 'Vial', 100, 'limited', '10/10/2020 10:08:39'),
(189, 1, 'Anti-Rho (D) Immune Globulin - 300mcg in 2ml Vial - Injection with 0.9% Sodium Chloride', 'Ampoule', 100, 'limited', '10/10/2020 10:08:39'),
(190, 1, 'Atenolol - 50mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:39'),
(191, 1, 'Atracurium Besylate - 10mg/ml in 5ml ampoule - Injection', 'Each', 100, 'limited', '10/10/2020 10:08:40'),
(192, 1, 'Atropine Sulphate - 0.50% - Eye Drop', '15ml', 100, 'limited', '10/10/2020 10:08:40'),
(193, 1, 'Atropine Sulphate - 1% eye drop -', '15ml', 100, 'limited', '10/10/2020 10:08:40'),
(194, 1, 'Atropine Sulphate - 1mg/ml in 1ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:40'),
(195, 1, 'Atrovastatin - 20mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(196, 1, 'Atrovastatin - 40mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(197, 1, 'Azithromycin - 500mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(198, 1, 'Azithromycine - 200mg/5ml - Oral Suspension', '15ml', 100, 'limited', '10/10/2020 10:08:40'),
(199, 1, 'Benzhexol (Trihexyphenidyl HCL) - 2mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(200, 1, 'Benzhexol (Trihexyphenidyl HCL) - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(201, 1, 'Bromazepam - 1.5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(202, 1, 'Bromazepam - 3mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(203, 1, 'Bupivacaine - 0.5% in 10ml ampoule - Injection', 'Each', 100, 'limited', '10/10/2020 10:08:40'),
(204, 1, 'Calamine - 5% - Lotion', 'Bottle', 100, 'limited', '10/10/2020 10:08:40'),
(205, 1, 'Calcium Gluconate - 10% in 10ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:40'),
(206, 1, 'Candesartan - 8mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(207, 1, 'Carbamazepine - 100mg/5ml - Syrup', '100ml', 100, 'limited', '10/10/2020 10:08:40'),
(208, 1, 'Carbamazepine - 200mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(209, 1, 'Castor Oil - - Oral Solution', '60ml', 100, 'limited', '10/10/2020 10:08:40'),
(210, 1, 'Cefixime - 400mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(211, 1, 'Ceftazidime - 1g in vial - Powder for injection', 'Each', 100, 'limited', '10/10/2020 10:08:40'),
(212, 1, 'Ceftriaxone - 1gm in Vial - Injection', 'Each', 100, 'limited', '10/10/2020 10:08:40'),
(213, 1, 'Cephalexine - 125mg/5ml - Oral Suspension', '100ml', 100, 'limited', '10/10/2020 10:08:40'),
(214, 1, 'Cephalexine - 500mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 10:08:40'),
(215, 1, 'Cetrizine - 10mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(216, 1, 'Chlorpheniramine Maleate - 2mg/5ml - Syrup', '100ml', 100, 'limited', '10/10/2020 10:08:40'),
(217, 1, 'Chlorpheniramine Maleate - 4mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(218, 1, 'Chlorpromazine HCL - 100mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:40'),
(219, 1, 'Cimetidine - 200mg/ml in 2ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:41'),
(220, 1, 'Ciprofloxacin - 0.30% - Eye Drop', '5ml', 100, 'limited', '10/10/2020 10:08:41'),
(221, 1, 'Ciprofloxacin - 2mg/ml in 100ml - Intravenous Infusion (as lactate)', 'Each', 100, 'limited', '10/10/2020 10:08:41'),
(222, 1, 'Ciprofloxacin - 500mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:41'),
(223, 1, 'Clarithromycin - 500mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:41'),
(224, 1, 'Clotrimazole - 1% - Cream', '20gm', 100, 'limited', '10/10/2020 10:08:41'),
(225, 1, 'Clotrimazole - 100mg - Tablet (Vaginal)', 'Tablet', 100, 'limited', '10/10/2020 10:08:41'),
(226, 1, 'Cloxacillin Sodium - 125 mg/5 ml - Syrup', 'Bottle', 100, 'limited', '10/10/2020 10:08:41'),
(227, 1, 'Cloxacillin Sodium - 250mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 10:08:41'),
(228, 1, 'Cloxacillin Sodium - 250mg/5ml - Oral Suspension', '100ml', 100, 'limited', '10/10/2020 10:08:41'),
(229, 1, 'Dexamethasone - 0.10% - Eye Drop', '10ml', 100, 'limited', '10/10/2020 10:08:41'),
(230, 1, 'Dexamethasone - 4mg/ml - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:41'),
(231, 1, 'Dextromethorphan Hydrobromide - 15mg/5ml - Syrup', '125ml', 100, 'limited', '10/10/2020 10:08:41'),
(232, 1, 'Dextrose - 40% in 20ml - Intravenous Infusion', 'Ampoule', 100, 'limited', '10/10/2020 10:08:41'),
(233, 1, 'Diazepam - 5 mg/ml in 2ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:41'),
(234, 1, 'Diazepam - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:41'),
(235, 1, 'Diclofenac Sodium - 25mg/ml in 3ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:41'),
(236, 1, 'Diclofenac Sodium - 50mg - Powder', 'Sachet', 100, 'limited', '10/10/2020 10:08:41'),
(237, 1, 'Diclofenac Sodium - 50mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:41'),
(238, 1, 'Digoxin - 0.25mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:41'),
(239, 1, 'Digoxin - 0.25mg/ml in 2ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:41'),
(240, 1, 'Dimenhydrinate - 50mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:41'),
(241, 1, 'Dopamine Hydrochloride - 40mg/ml in 5ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:41'),
(242, 1, 'Doxycycline - 100mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 10:08:41'),
(243, 1, 'Enalapril Maleate - 10mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:41'),
(244, 1, 'Enalapril Maleate - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:41'),
(245, 1, 'Erythromycin Stearate - 250 mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:41'),
(246, 1, 'Esomeprazole - 40mg/5ml in Vial - Injection (Lypophlized)', 'Each', 100, 'limited', '10/10/2020 10:08:41'),
(247, 1, 'Felodipine - 10mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:41'),
(248, 1, 'Felodipine - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(249, 1, 'Ferrous Gluconate - 300mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(250, 1, 'Ferrous Sulphate - 200mg/5ml - Syrup', '100ml', 100, 'limited', '10/10/2020 10:08:42'),
(251, 1, 'Ferrous Sulphate + Folic Acid - (150mg + 0.5mg) - Tablet (enteric coated)', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(252, 1, 'Fluoxetine - 20mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 10:08:42'),
(253, 1, 'Folic Acid - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(254, 1, 'Frusemide - 10mg/ml in 2ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:42'),
(255, 1, 'Frusemide - 40mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(256, 1, 'Gentamicin - 0.3% - Eye/Ear drop', '10 ml', 100, 'limited', '10/10/2020 10:08:42'),
(257, 1, 'Gentamicin - 40mg/ml in 2ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:42'),
(258, 1, 'Glibenclamide - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(259, 1, 'Glycerin - 900mg - Suppository', 'Suppository', 100, 'limited', '10/10/2020 10:08:42'),
(260, 1, 'Haloperidol - 1.5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(261, 1, 'Haloperidol - 2mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(262, 1, 'Haloperidol - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(263, 1, 'Haloperidol - 5mg/ml in 1ml Ampule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:42'),
(264, 1, 'Halothane - 250 ml - Inhalation', '250ml', 100, 'limited', '10/10/2020 10:08:42'),
(265, 1, 'Heparin Sulphate - 5000IU/ml in 1ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:42'),
(266, 1, 'Hydralazine - 20mg/ml in 1ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:42'),
(267, 1, 'Hydrochlorothiazide - 25mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(268, 1, 'Hydrocortisone Sodium Succinate - 50mg/ml in 2ml ampoule - Injection', 'Each', 100, 'limited', '10/10/2020 10:08:42'),
(269, 1, 'Hyoscine (Scopolamine) Butylbromide - 20mg/ml in 1ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:42'),
(270, 1, 'Ibuprofen - 400mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(271, 1, 'Icthamol - 10% - Topical Ointment', '20gm', 100, 'limited', '10/10/2020 10:08:42'),
(272, 1, 'Imipramine - 25mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(273, 1, 'Indomethacin - 100mg - Suppository', 'Suppository', 100, 'limited', '10/10/2020 10:08:42'),
(274, 1, 'Insulin Isophane Human - 100IU/ml in 10ml Vial - Injection(Suspension)', 'Each', 100, 'limited', '10/10/2020 10:08:42'),
(275, 1, 'Insulin Soluble Human - 100IU/ml in 10ml Vial - Injection(Solution)', 'Each', 100, 'limited', '10/10/2020 10:08:42'),
(276, 1, 'Insulin Zinc Suspension/Insulin Lente - 100 Units/ml - Injection', 'Vial', 100, 'limited', '10/10/2020 10:08:42'),
(277, 1, 'Insuline Isophane Biphasic (Soluble/Isophane Mixture) - (30 + 70)IU/ml in 10ml Vial - Injection (Suspension)', 'Each', 100, 'limited', '10/10/2020 10:08:42'),
(278, 1, 'Isoflurane - 250ml - Inhalation', '250ml', 100, 'limited', '10/10/2020 10:08:42'),
(279, 1, 'Pancuronium Bromide - 2 mg/ml in 2ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:42'),
(280, 1, 'Paracetamol - 120mg/5ml - Syrup', '60ml', 100, 'limited', '10/10/2020 10:08:42'),
(281, 1, 'Paracetamol - 125mg - Suppository', 'Suppository', 100, 'limited', '10/10/2020 10:08:42'),
(282, 1, 'Paracetamol - 500mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:42'),
(283, 1, 'Penicillin G, Benzanthin - 1.2 MIU - Injection', 'Vial', 100, 'limited', '10/10/2020 10:08:42'),
(284, 1, 'Penicillin G, Benzanthin - 2.4 MIU - Injection', 'Vial', 100, 'limited', '10/10/2020 10:08:42'),
(285, 1, 'Pethidine HCL - 50mg/ml in 1ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:42'),
(286, 1, 'Phenobarbitone (Phenobarbital) - 100mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(287, 1, 'Phenobarbitone (Phenobarbital) - 120mg/ml - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:43'),
(288, 1, 'Phenobarbitone (Phenobarbital) - 30mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(289, 1, 'Phenytoin (Diphenhydantoin) Sodium - 250mg in Vial - Powder for injection', 'Each', 100, 'limited', '10/10/2020 10:08:43'),
(290, 1, 'Phenytoin (Diphenhydantoin) Sodium - 50mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(291, 1, 'Pilocarpine HCL - 2% - Eye Drop', '15ml', 100, 'limited', '10/10/2020 10:08:43'),
(292, 1, 'Potassium Chloride - 600mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(293, 1, 'Praziquantel - 600mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(294, 1, 'Prednisolone - 5 mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(295, 1, 'Promethazine HCL - 25mg/ml in 2ml - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:43'),
(296, 1, 'Propofol - 10mg/ml in 20ml - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:43'),
(297, 1, 'Propranolol - 10mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(298, 1, 'Propranolol - 40mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(299, 1, 'Propylthiouracil - 50mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(300, 1, 'Resperidone - 4mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(301, 1, 'Risperidone - 4mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(302, 1, 'Salbutamol (Albuterol) - 0.1mg/dose - Aerosol (Oral Inhalation)', '200metered doses', 100, 'limited', '10/10/2020 10:08:43'),
(303, 1, 'Salbutamol (Albuterol) - 2mg/5ml - Syrup', '100ml', 100, 'limited', '10/10/2020 10:08:43'),
(304, 1, 'Spironolactone - 25mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(305, 1, 'Sulphamethoxazole + Trimethoprim - (400mg + 80mg)/5ml - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:43'),
(306, 1, 'Suxamethonium Chloride (Succinylcholine) - 50 mg/ml in 10ml Vial - Powder for injection', 'Vial', 100, 'limited', '10/10/2020 10:08:43'),
(307, 1, 'Tetanus Antitoxin (TAT), Equine - 1,500 IU/ml in 1ml Ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:43'),
(308, 1, 'Tetracycline - 0.01 - Eye Ointment', '4gm', 100, 'limited', '10/10/2020 10:08:43'),
(309, 1, 'Tetracycline - 1% - Eye Ointment', 'Each', 100, 'limited', '10/10/2020 10:08:43'),
(310, 1, 'Theophylline + Ephedrine - (120mg + 11mg) - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(311, 1, 'Thiopental Sodium - 0.5 g - Powder for injection', 'Vial', 100, 'limited', '10/10/2020 10:08:43'),
(312, 1, 'Thyroxine Sodium - 0.05mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(313, 1, 'Thyroxine Sodium - 0.1mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:43'),
(314, 1, 'Tramadol HCl - 50mg - Capsule', 'capsule', 100, 'limited', '10/10/2020 10:08:43'),
(315, 1, 'Tramadol HCl - 50mg/ml in 2ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:44'),
(316, 1, 'Tropicamide - 0.01 - Eye Drop', '10ml', 100, 'limited', '10/10/2020 10:08:44'),
(317, 1, 'Valsartan - 160mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:44'),
(318, 1, 'Verapamil - 40mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:44'),
(319, 1, 'Vitamin B Complex Preparations - - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:44'),
(320, 1, 'Vitamin B1 + Vitamin B6 + Vitamin B12 - (100mg + 200mg + 1000mcg) - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:44'),
(321, 1, 'Warfarin Sodium - 5mg - Tablet', 'Tablet', 100, 'limited', '10/10/2020 10:08:44'),
(322, 1, 'Vancomycin - 500mg - Injection', 'Each', 100, 'limited', '10/10/2020 10:08:44'),
(323, 1, 'Vancomycine - 1gm in Vial - Injection', 'Each', 100, 'limited', '10/10/2020 10:08:44'),
(324, 1, 'Vecuronium Bromide - 10 mg in vial - Powder for injection', 'Each', 100, 'limited', '10/10/2020 10:08:44'),
(325, 1, 'Vitamin B Complex Preparations - - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:44'),
(326, 1, 'Vitamin B12 - 100Ã‚Âµg/ml;1000Ã‚Âµg/ml in 1 ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:44'),
(327, 1, 'Vitamin K1 (Phytomenadione) - 10mg/ml in 1ml ampoule - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:44'),
(328, 1, 'Water For Injection - 5ml - Injection', 'Ampoule', 100, 'limited', '10/10/2020 10:08:44'),
(329, 1, 'White Petrolatum - - Ointment', '1Kg', 100, 'limited', '10/10/2020 10:08:44'),
(330, 1, 'Zinc Oxide - 0.15 - Ointment', '1Kg', 100, 'limited', '10/10/2020 10:08:44'),
(331, 1, 'asdr', 'asdr', 12345, 'limited', NULL);

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
  `phlebotomy_status` varchar(45) NOT NULL DEFAULT 'not started',
  `requested_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_lab_queue_employee_table1_idx` (`employee_id`),
  KEY `fk_lab_queue_patient_table1_idx` (`patient_card_number`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lab_queue`
--

INSERT INTO `lab_queue` (`id`, `patient_card_number`, `employee_id`, `lab_table_id`, `lab_request_data`, `phlebotomy_status`, `requested_on`) VALUES
(41, 'ZMRH000000001', '000001', 1, '{\"1\":\"6\",\"2\":\"9\",\"3\":\"12\",\"4\":\"15\",\"5\":\"26\",\"6\":\"13\",\"7\":\"10\",\"8\":\"7\",\"9\":\"4\",\"10\":\"1\",\"12\":\"3\",\"13\":\"2\",\"14\":\"5\",\"15\":\"8\",\"16\":\"11\",\"17\":\"14\"}', 'completed', '2020-09-26 22:06:53'),
(42, 'ZMRH000000001', '000001', 3, '{\"2\":\"3\",\"3\":\"6\",\"4\":\"9\",\"5\":\"12\",\"6\":\"15\",\"7\":\"16\",\"8\":\"13\",\"9\":\"10\",\"10\":\"7\",\"11\":\"4\",\"12\":\"1\",\"13\":\"2\",\"14\":\"5\",\"15\":\"8\",\"16\":\"11\",\"17\":\"14\"}', 'completed', '2020-09-26 22:07:49'),
(43, 'ZMRH000000001', '000001', 4, '{\"2\":\"3\",\"3\":\"6\",\"4\":\"9\",\"5\":\"12\",\"6\":\"15\",\"7\":\"18\",\"8\":\"21\",\"9\":\"22\",\"10\":\"19\",\"11\":\"16\",\"12\":\"13\",\"13\":\"10\",\"14\":\"7\",\"15\":\"4\",\"16\":\"1\",\"17\":\"2\",\"18\":\"5\",\"19\":\"8\",\"20\":\"11\",\"21\":\"14\",\"22\":\"17\",\"23\":\"20\",\"24\":\"23\"}', 'not started', '2020-09-26 22:22:14'),
(44, 'ZMRH000000001', '000001', 5, '{\"1\":\"14\",\"2\":\"17\"}', 'completed', '2020-09-26 22:22:41'),
(46, 'ZMRH0000000011', '000001', 1, '{\"1\":\"9\"}', 'completed', '2020-09-27 20:54:00'),
(47, 'ZMRH0000000013', '000001', 4, '{\"1\":\"6\",\"2\":\"4\",\"3\":\"5\"}', 'completed', '2020-09-28 12:55:15'),
(48, 'ZMRH0000000017', '000001', 4, '{\"1\":\"16\"}', 'completed', '2020-09-28 16:16:45'),
(49, 'ZMRH0000000021', '000001', 3, '{\"1\":\"12\"}', 'not started', '2020-09-28 18:07:33'),
(50, 'ZMRH0000000011', '000001', 1, '{\"1\":\"16\",\"2\":\"14\",\"3\":\"15\"}', 'completed', '2020-09-28 18:54:16'),
(51, 'ZMRH000000001', '000001', 3, '{\"1\":\"18\"}', 'completed', '2020-09-29 19:34:30'),
(52, 'ZMRH0000000053', '000001', 4, '{\"1\":\"4\"}', 'not started', '2020-10-04 07:03:01');

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
  `results` longtext NOT NULL,
  `status` varchar(45) NOT NULL,
  `employee_table_id` int(11) NOT NULL,
  `patient_table_patient_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lab_serology_coagulation_table_employee_table1_idx` (`employee_id`),
  KEY `fk_lab_serology_coagulation_table_patient_table1_idx` (`patient_card_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lab_supply_cat`
--

DROP TABLE IF EXISTS `lab_supply_cat`;
CREATE TABLE IF NOT EXISTS `lab_supply_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lab_supply_cat`
--

INSERT INTO `lab_supply_cat` (`id`, `name`, `created_on`) VALUES
(1, 'reception', '2020-10-07 11:52:48'),
(2, 'Coagulation reagent', '2020-10-07 11:52:48'),
(3, 'GB Electrolyte reagent', '2020-10-07 11:52:48'),
(4, 'Beck man coulter', '2020-10-07 11:52:48'),
(5, '5150 mindray hematology machine reagents', '2020-10-07 11:52:48'),
(6, 'Molecular and TB laboratory', '2020-10-07 11:52:48'),
(7, 'Serology reagent', '2020-10-07 11:52:48'),
(8, 'CD4 and viral load', '2020-10-07 11:52:48'),
(9, 'Hormonalysis vidas reagent', '2020-10-07 11:52:48'),
(10, 'Microbiology reagent and media', '2020-10-07 11:52:48'),
(11, 'Microbiology antibiotics discs', '2020-10-07 11:52:48'),
(12, 'Equipment', '2020-10-07 11:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `lab_supply_list`
--

DROP TABLE IF EXISTS `lab_supply_list`;
CREATE TABLE IF NOT EXISTS `lab_supply_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(45) NOT NULL,
  `catergory_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `current_amount` float DEFAULT NULL,
  `max_stock` float DEFAULT NULL,
  `min_stock` float DEFAULT NULL,
  `q4_consumption_b` float DEFAULT NULL,
  `annual_consumption_c` float DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_lab_supply_list_employee_table1_idx` (`employee_id`),
  KEY `fk_lab_supply_list_lab_supply_catergory1_idx` (`catergory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lab_supply_list`
--

INSERT INTO `lab_supply_list` (`id`, `employee_id`, `catergory_id`, `name`, `unit`, `current_amount`, `max_stock`, `min_stock`, `q4_consumption_b`, `annual_consumption_c`, `created_on`) VALUES
(20, '000001', 1, 'Blood lancet safety, depth 2mm,tip width1.5mm', 'Pk', 2, 2.5, 1.5, 7.5, 30, '2020-10-07 12:29:04'),
(21, '000001', 1, 'Examination glove', 'box', 120, 150, 90, 450, 1800, '2020-10-07 12:29:04'),
(22, '000001', 1, 'Guaze surgical 90cm*100cm', 'roll', 4, 5, 3, 15, 60, '2020-10-07 12:29:04'),
(23, '000001', 1, 'Blood glucose of 1*50 of test strips', 'Pk', 20, 25, 15, 75, 300, '2020-10-07 12:29:04'),
(24, '000001', 1, 'Syringe 10ml of 100', 'Box', 10, 12.5, 7.5, 37.5, 150, '2020-10-07 12:29:04'),
(25, '000001', 1, 'Cotton 500g', 'Roll', 30, 33, 27, 132, 528, '2020-10-07 12:29:04'),
(26, '000001', 1, 'Alcohol Prepad of 200', 'Pk ', 30, 33, 27, 132, 528, '2020-10-07 12:29:04'),
(27, '000001', 1, 'Serum separation tube yellow top 5ml of 100', 'Pk', 25, 26.25, 23.75, 78.75, 315, '2020-10-07 12:29:04'),
(28, '000001', 1, 'Sodium citrate of 4ml  test  tube of 100', 'Pk', 4, 5, 3, 15, 60, '2020-10-07 12:29:04'),
(29, '000001', 1, 'Safety box of (1x25pcs) ', 'pk', 4, 5, 3, 15, 60, '2020-10-07 12:29:04'),
(30, '000001', 1, 'Urine cup of 100', 'Bag', 25, 31.25, 18.75, 93.75, 375, '2020-10-07 12:29:04'),
(31, '000001', 1, 'Stool cup of 100', 'Bag', 8, 10, 6, 30, 120, '2020-10-07 12:29:04'),
(32, '000001', 1, 'Syringe 5ml of 100 ', 'Box', 50, 62.5, 37.5, 187.5, 750, '2020-10-07 12:29:05'),
(33, '000001', 1, 'Color coded waste segregation bin', 'each', NULL, NULL, NULL, NULL, 20, '2020-10-07 12:29:05'),
(34, '000001', 1, 'K2 EDTA test tube of 4ml of 100', 'Pk', 60, 75, 45, 225, 900, '2020-10-07 12:29:05'),
(35, '000001', 1, 'Plain tube of 100', 'pk', 4, 5, 3, 15, 60, '2020-10-07 12:29:05'),
(36, '000001', 1, 'ESR tube of 100', 'pk', 2, 2.5, 1.5, 7.5, 30, '2020-10-07 12:29:05'),
(37, '000001', 1, 'ESR thermal paper', 'rool', 1, 1.25, 0.75, 3.75, 15, '2020-10-07 12:29:05'),
(38, '000001', 1, 'Alcohol  70% of  1000ml', 'bottle', 4, 5, 3, 15, 60, '2020-10-07 12:29:05'),
(39, '000001', 2, 'Thrombin time reagent(10*2ml)', 'box', 1, 1, 0.95, 3.15, 12, '2020-10-07 12:29:05'),
(40, '000001', 2, 'APTT reagent 1(10*2ml)', 'Box', 1, 1, 0.95, 3.15, 12, '2020-10-07 12:29:05'),
(41, '000001', 2, 'APTT reagent 2(1*30ml)', 'Box', 1, 1, 0.95, 3.15, 12, '2020-10-07 12:29:05'),
(42, '000001', 2, 'Fibrinogen reagent 1(5*2ml)', 'Box', 1, 1, 0.75, 3.75, 15, '2020-10-07 12:29:05'),
(43, '000001', 2, 'Fibrinogen reagent  2(1*100ml)', 'Box', 1, 1, 0.75, 3.75, 15, '2020-10-07 12:29:05'),
(44, '000001', 2, 'Fibrinogen reagent  3(1*1ml)', 'Box', 1, 1, 0.75, 3.75, 15, '2020-10-07 12:29:05'),
(45, '000001', 2, 'Prothrombin time reagent(10*2ml)', 'Box', 1, 1, 0.75, 3.75, 15, '2020-10-07 12:29:05'),
(46, '000001', 2, 'D-Dimer reagent 1(6*3ml)', 'Box', 0.5, 0.5, 0.475, 1.575, 6, '2020-10-07 12:29:05'),
(47, '000001', 2, 'D-dimer reagent 2(2*3ml)', 'Box', 0.5, 0.5, 0.475, 1.575, 6, '2020-10-07 12:29:05'),
(48, '000001', 2, 'D-dimer control 1(1*1ml)', 'Box', 0.5, 0.5, 0.475, 1.575, 6, '2020-10-07 12:29:05'),
(49, '000001', 2, 'D-dimer control 2(1*1ml)', 'Box', 0.5, 0.5, 0.475, 1.575, 6, '2020-10-07 12:29:05'),
(50, '000001', 2, 'D- dimer calibrator(1*1ml)', 'Box', 0.5, 0.5, 0.475, 1.575, 6, '2020-10-07 12:29:05'),
(51, '000001', 2, 'Clot Cleaner of 30 ml', 'Each', 1, 1, 0.75, 3.75, 15, '2020-10-07 12:29:05'),
(52, '000001', 2, 'Sample cup of 100', 'pk', 1, 1, 0.75, 3.75, 15, '2020-10-07 12:29:05'),
(53, '000001', 2, 'Test cuvet of 100', 'pk', 1, 1, 0.75, 3.75, 15, '2020-10-07 12:29:05'),
(54, '000001', 3, 'Electrode washing solution of 5ml', 'bottle', NULL, NULL, NULL, NULL, 5, '2020-10-07 12:29:05'),
(55, '000001', 3, 'Reference electrode filing solution', 'bottle', NULL, NULL, NULL, NULL, 3, '2020-10-07 12:29:05'),
(56, '000001', 3, 'Electrode ion filing solution of 110ml', 'bottle', NULL, NULL, NULL, NULL, 3, '2020-10-07 12:29:05'),
(57, '000001', 3, 'QC solution of 110ml', 'bottle', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:05'),
(58, '000001', 3, 'Test cuvet of 100', 'Â pk', 1, 1.25, 0.75, 3.75, 15, '2020-10-07 12:29:06'),
(59, '000001', 3, 'Electrode (Na,K,Ca,Cl)', 'each', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:06'),
(60, '000001', 3, 'Maintenance kit', 'box', NULL, NULL, NULL, NULL, 6, '2020-10-07 12:29:06'),
(61, '000001', 3, 'Calibration A of 430 ml', 'bottle', NULL, NULL, NULL, NULL, 3, '2020-10-07 12:29:06'),
(62, '000001', 3, 'Calibration B of 110 ml', 'bottle', NULL, NULL, NULL, NULL, 3, '2020-10-07 12:29:06'),
(63, '000001', 4, 'Diluents of 10 L', 'Bag', 32, 40, 24, 120, 480, '2020-10-07 12:29:06'),
(64, '000001', 4, 'Diff pack ', 'pk', 4, 5, 3, 15, 60, '2020-10-07 12:29:06'),
(65, '000001', 4, 'Cleaner  ', 'pk', 4, 5, 3, 15, 60, '2020-10-07 12:29:06'),
(66, '000001', 4, 'Retick pack  ', 'pk', 1, 1.25, 0.75, 3.75, 15, '2020-10-07 12:29:06'),
(67, '000001', 4, 'Lyse', 'pk', 2, 2.5, 1.5, 7.5, 30, '2020-10-07 12:29:06'),
(68, '000001', 4, 'Coulter latron', 'each', 2, 2.5, 1.5, 7.5, 30, '2020-10-07 12:29:06'),
(69, '000001', 4, 'Coulter body fluid(level 1, 2, 3)', 'PK', 2, 2.5, 1.5, 7.5, 30, '2020-10-07 12:29:06'),
(70, '000001', 4, 'Coulter retic-x cell( level 1, 2, 3)', 'pk', 2, 2.5, 1.5, 7.5, 30, '2020-10-07 12:29:06'),
(71, '000001', 4, 'Coulter 6C cell( level 1, 2, 3)', 'pk', 2, 2.5, 1.5, 7.5, 30, '2020-10-07 12:29:06'),
(72, '000001', 4, 'Giemsa stain soln of 500 ml', 'Bottle ', 0.5, 0.525, 0.475, 1.575, 6.3, '2020-10-07 12:29:06'),
(73, '000001', 4, 'Write stain of 500 ml', 'Bottle ', 0.5, 0.525, 0.475, 1.575, 6.3, '2020-10-07 12:29:06'),
(74, '000001', 4, 'Blood group  each of 10 ml Anti-A', 'Vial', 12, 12.6, 11.4, 37.8, 151, '2020-10-07 12:29:06'),
(75, '000001', 4, 'Blood group  each of 10 ml Anti-B', 'Vial', 12, 12.6, 11.4, 37.8, 151, '2020-10-07 12:29:06'),
(76, '000001', 4, 'Blood group  each of 10 ml Anti-D', 'Vial', 12, 12.6, 11.4, 37.8, 151, '2020-10-07 12:29:06'),
(77, '000001', 5, 'H. pylori Ag test of  25 strip  ', 'Pk', 10, 12, 8, 36, 144, '2020-10-07 12:29:06'),
(78, '000001', 5, 'Frosted slides, 27x75mm,thickness 1.2mm', 'Pk', 10, 12, 8, 36, 144, '2020-10-07 12:29:06'),
(79, '000001', 5, 'Non frosted slide, 27x75mm,thickness 1.2mm', 'pk', 20, 21, 19, 63, 252, '2020-10-07 12:29:06'),
(80, '000001', 5, 'Normal saline of 1000ml ', 'Bag', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:06'),
(81, '000001', 5, 'Occult blood test strip of 25', 'pk', 4, 5, 3, 15, 60, '2020-10-07 12:29:06'),
(82, '000001', 5, 'Pregnancy test of  50 strips ', 'Pk', 3, 3.75, 2.25, 11.25, 45, '2020-10-07 12:29:06'),
(83, '000001', 6, 'Sputum cup of (1x100}', 'Box', 1, 1.25, 0.75, 3.75, 15, '2020-10-07 12:29:06'),
(84, '000001', 6, 'Carbolfuchsin of 1L', 'Bottle ', 1, 1.25, 0.75, 3.75, 15, '2020-10-07 12:29:06'),
(85, '000001', 6, 'Acid alcohol 3% of 1L', 'Bottle ', 1, 1.25, 0.75, 3.75, 15, '2020-10-07 12:29:06'),
(86, '000001', 6, 'Methylene blue 1% of 1L', 'Box', 1, 1.25, 0.75, 3.75, 15, '2020-10-07 12:29:06'),
(87, '000001', 6, 'G0xpert cartidlege', 'box', 6, 6.3, 5.7, 18.9, 75, '2020-10-07 12:29:06'),
(88, '000001', 6, 'DBS cartiradje', 'box', 1, 1.25, 0.75, 3.75, 15, '2020-10-07 12:29:07'),
(89, '000001', 7, 'RF(Rheumatoid factor)of 5 ml', 'vial', 1, 1.25, 0.75, 3.75, 15, '2020-10-07 12:29:07'),
(90, '000001', 7, 'C-reactive protein', 'vial', 1, 1.25, 0.75, 3.75, 15, '2020-10-07 12:29:07'),
(91, '000001', 7, 'Hepatitis B (HBSAg) tests  of  25strips', 'Box', 20, 24, 16, 72, 288, '2020-10-07 12:29:07'),
(92, '000001', 7, 'Hepatitis C (HC antibody) tests of 25 strips', 'Box', 20, 24, 16, 72, 288, '2020-10-07 12:29:07'),
(93, '000001', 7, 'RPR syphilis  rapid test kit of 25', 'Pk', 10, 12, 8, 36, 144, '2020-10-07 12:29:07'),
(94, '000001', 7, 'Anti streptolysin O (ASO)', 'vial', 1, 1.25, 0.75, 3.75, 15, '2020-10-07 12:29:07'),
(95, '000001', 7, 'H.pylori Ab test  of 25', 'box', 1, 1.25, 0.75, 3.75, 15, '2020-10-07 12:29:07'),
(96, '000001', 8, 'Fulcon  tube of 25', 'Pk', 4, 4.2, 3.8, 12.6, 50, '2020-10-07 12:29:07'),
(97, '000001', 8, 'Micropipette tips yellow of (1*1000)', 'Bag       ', 4, 4.2, 3.8, 12.6, 50, '2020-10-07 12:29:07'),
(98, '000001', 8, 'Micropipette tips blue of (1*1000)', 'Bag', 1, 1.05, 0.9, 3.15, 12, '2020-10-07 12:29:07'),
(99, '000001', 8, 'Facs presto cartilage', 'box', 5, 5.25, 4.75, 15.75, 63, '2020-10-07 12:29:07'),
(100, '000001', 9, 'AFP, 60 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:07'),
(101, '000001', 9, 'CA 125, 30 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 4, '2020-10-07 12:29:07'),
(102, '000001', 9, 'CA01503,30 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 4, '2020-10-07 12:29:07'),
(103, '000001', 9, 'CA 1909,30 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 4, '2020-10-07 12:29:07'),
(104, '000001', 9, 'CEA,30 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 4, '2020-10-07 12:29:07'),
(105, '000001', 9, 'Etradiol, 60 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:07'),
(106, '000001', 9, 'FSH, 60 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:07'),
(107, '000001', 9, 'LH, 60  tests per kit', 'Kit', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:07'),
(108, '000001', 9, 'Testosterone II 30 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:07'),
(109, '000001', 9, 'FPSA , 30 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 4, '2020-10-07 12:29:07'),
(110, '000001', 9, 'Progesterone, 60 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:07'),
(111, '000001', 9, 'Prolactin ,60 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:07'),
(112, '000001', 9, 'TPSA , 60 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:07'),
(113, '000001', 9, 'Total 250 OH vitamin D, 60 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 6, '2020-10-07 12:29:07'),
(114, '000001', 9, 'HS troponin I , 60 tests per kit', 'Kit', NULL, NULL, NULL, NULL, 8, '2020-10-07 12:29:07'),
(115, '000001', 9, 'FT3, 60 tests per kit', 'Kit', 3, 3.75, 2.25, 11.25, 45, '2020-10-07 12:29:07'),
(116, '000001', 9, 'FT4 , 60 tests per kit', 'Kit', 3, 3.75, 2.25, 11.25, 45, '2020-10-07 12:29:07'),
(117, '000001', 9, 'TSH, 60 tests per kit', 'Kit', 3, 3.75, 2.25, 11.25, 45, '2020-10-07 12:29:07'),
(118, '000001', 10, 'Crystal Violet soln  2% of 1L', 'bottle', 0.5, 0.525, 0.475, 1.575, 6, '2020-10-07 12:29:08'),
(119, '000001', 10, 'Grams iodine 1% of 1L', 'bottle', 0.5, 0.525, 0.475, 1.575, 6, '2020-10-07 12:29:08'),
(120, '000001', 10, 'Acetone Alc.50 % of 1L', 'bottle', 0.5, 0.525, 0.475, 1.575, 6, '2020-10-07 12:29:08'),
(121, '000001', 10, 'Safranin 0.25% of 1L', 'bottle', 0.5, 0.525, 0.475, 1.575, 6, '2020-10-07 12:29:08'),
(122, '000001', 10, 'WBC diluting fluid of 100 ml', 'bott', 0.5, 0.525, 0.475, 1.575, 6, '2020-10-07 12:29:08'),
(123, '000001', 10, 'Heavy Duty Aluminium Foil 37.5 meter ', 'Roll ', 1, 1.05, 0.9, 3.15, 12, '2020-10-07 12:29:08'),
(124, '000001', 10, 'Disposable Sterile plastic loops (1Âµl)', 'Box ', 2, 2.1, 1.9, 6.3, 25, '2020-10-07 12:29:08'),
(125, '000001', 10, 'Disposable Sterile plastic loops (2Âµl)', 'Box ', 2, 2.1, 1.9, 6.3, 25, '2020-10-07 12:29:08'),
(126, '000001', 10, 'Disposable Sterile plastic loops,(10Âµl)', 'Box ', 2, 2.1, 1.9, 6.3, 25, '2020-10-07 12:29:08'),
(127, '000001', 10, 'Pasteur Pipette of 500', 'pk', 1, 1.05, 0.9, 3.15, 12, '2020-10-07 12:29:08'),
(128, '000001', 10, 'KOH 10%of 1000ml', 'Bottel', NULL, NULL, NULL, NULL, NULL, '2020-10-07 12:29:08'),
(129, '000001', 10, 'Surgical blood ', 'pk', 1, 1.05, 0.9, 3.15, 12, '2020-10-07 12:29:08'),
(130, '000001', 10, 'Amies Transport Media of 500 gm', 'Tin ', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:08'),
(131, '000001', 10, 'Xylose Lysine Deoxycholate Agar of 500 gm', 'Tin', NULL, NULL, NULL, NULL, 4, '2020-10-07 12:29:08'),
(132, '000001', 10, 'Stuart transport medium of 500 gm', 'Tin', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:08'),
(133, '000001', 10, 'Thayer martin medium of 500 gm', 'Tin', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:08'),
(134, '000001', 10, 'Simmons Citrate Agar, Dehydrated of 500 gm', 'Tin', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:08'),
(135, '000001', 10, 'Transport media(carry blair) of 500 gm', 'Tin', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:08'),
(136, '000001', 10, 'Triple Sugar Iron Agar of 500 gm', 'Tin', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:08'),
(137, '000001', 10, 'PYR reagent disc of 50', 'pk', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:08'),
(138, '000001', 10, 'Catalase reagent (3% H2O2)', '2x5ml', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:08'),
(139, '000001', 10, 'GC Agar Base of 500 gm', 'Tin', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:08'),
(140, '000001', 10, 'Isovitalex/Vitox Enrichment', 'Box ', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:08'),
(141, '000001', 10, 'Kligler Iron Agar of 500 gm', 'Tin', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:08'),
(142, '000001', 10, 'Bile esculin agar of 500 gm', 'tin', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:08'),
(143, '000001', 10, 'Kovachâ€™s Reagent of 100ml', 'bottle', 1, 1.05, 0.9, 3.15, 12, '2020-10-07 12:29:08'),
(144, '000001', 10, 'Mannitol Salt Agar of 500 gm', 'Tin', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:08'),
(145, '000001', 10, 'Motility (S.I.M) Medium of 500 gm', 'Tin', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:08'),
(146, '000001', 10, 'Mueller â€“ Hinton Agar of 500 gm', 'Tin', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:08'),
(147, '000001', 10, 'Nutrient Agar of 500 gm', 'Tin', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:08'),
(148, '000001', 10, 'Oxidase reagents 0.75ml with droppers', '50x.75ml', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:08'),
(149, '000001', 10, 'Rabbit Plasma, 1x3.5ml in pack', 'pack', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:08'),
(150, '000001', 10, 'Sheep Blood Agar Base of 500 gm', 'tin', 1, 1.05, 0.9, 3.15, 12, '2020-10-07 12:29:08'),
(151, '000001', 10, 'Tryptone Soya Agar of 500 gm', 'tin', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:08'),
(152, '000001', 10, 'Urea 40% Solution(5x10ml)', 'pk', 1, 1.05, 0.9, 3.15, 12, '2020-10-07 12:29:09'),
(153, '000001', 10, 'Urea Agar Base of 500 gm', 'tin', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:09'),
(154, '000001', 10, 'X  and V factors', 'each', 2, 2.1, 1.9, 6.3, 25, '2020-10-07 12:29:09'),
(155, '000001', 11, 'Amikacin of 30Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(156, '000001', 11, 'Amoxicillin of 2Âµg ', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(157, '000001', 11, 'Meropenem of 30 Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(158, '000001', 11, 'Amoxicillin/clavulanic acid of 30Âµg disk ', 'cartridge', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:09'),
(159, '000001', 11, 'Bacitracin of 100unit', 'cartridge', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:09'),
(160, '000001', 11, 'Cefazolin 30 Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(161, '000001', 11, 'Cefepime of 30Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(162, '000001', 11, 'Cefixime of 50Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(163, '000001', 11, 'Cefotaxime of 30Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(164, '000001', 11, 'Cefotetan of 30Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(165, '000001', 11, 'Cefoxitin of 30Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(166, '000001', 11, 'Ceftazidime of 30Âµg', 'cartridge', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:09'),
(167, '000001', 11, 'Ceftriaxone of 5Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(168, '000001', 11, 'Cefuroxine sodium of 30Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(169, '000001', 11, 'Cephalothin of 30Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(170, '000001', 11, 'Chloramphenicol of 30Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(171, '000001', 11, 'Ciprofloxacin of 5Âµg', 'cartridge', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:09'),
(172, '000001', 11, 'Clarithromycin of 15Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(173, '000001', 11, 'Clindamycin of 5Âµg', 'cartridge', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:09'),
(174, '000001', 11, 'Sulphamthoxazole/trimethoprip 19:1', 'cartridge', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:09'),
(175, '000001', 11, 'Doxycycline of 30Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(176, '000001', 11, 'Erythromycin of 15Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(177, '000001', 11, 'Gentamicin of 10Âµg', 'cartridge', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:09'),
(178, '000001', 11, 'Furazolidone of 100 Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(179, '000001', 11, 'Imipenem of 10Âµg', 'cartridge', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:09'),
(180, '000001', 11, 'Methicillin (5 Âµg) disk', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(181, '000001', 11, 'Nalidixic acid of 30Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(182, '000001', 11, 'Nitrofurantoin of 300Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(183, '000001', 11, 'Norfloxacin of 10Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(184, '000001', 11, 'Novobiocin of 5 Âµg ', 'cartridge', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:09'),
(185, '000001', 11, 'Optochin discs (DD0001)', 'cartridge', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:09'),
(186, '000001', 11, 'Oxacillin of 1Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:09'),
(187, '000001', 11, 'Penicillin G of 10units', 'cartridge', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:09'),
(188, '000001', 11, 'Piperacillin of 100Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:10'),
(189, '000001', 11, 'Piperacillin0 tazobactam of 100/10 Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:10'),
(190, '000001', 11, 'Spectinomycin of 100 Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:10'),
(191, '000001', 11, 'Streptomycin of 10 Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:10'),
(192, '000001', 11, 'Tetracycline of 30 Âµg', 'cartridge', NULL, NULL, NULL, 1, 4, '2020-10-07 12:29:10'),
(193, '000001', 11, 'Ticarcillin of 75 Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:10'),
(194, '000001', 11, 'Tobramycin of 10 Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:10'),
(195, '000001', 11, 'Vancomycin of 30 Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:10'),
(196, '000001', 11, 'Streptomycin of 10 Âµg', 'cartridge', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:10'),
(197, '000001', 12, 'WBC manual counting chamber', 'each', NULL, NULL, NULL, NULL, 2, '2020-10-07 12:29:10'),
(198, '000001', 12, 'Digital Thermometer', 'each', NULL, NULL, NULL, NULL, 10, '2020-10-07 12:29:10'),
(199, '000001', 12, 'Dray Oven ', 'Each', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:10'),
(200, '000001', 12, 'Microbiology Incubator large size (50 L)', 'each', NULL, NULL, NULL, NULL, 1, '2020-10-07 12:29:10');

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

-- --------------------------------------------------------

--
-- Table structure for table `triage_queue`
--

DROP TABLE IF EXISTS `triage_queue`;
CREATE TABLE IF NOT EXISTS `triage_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_card_number` varchar(45) NOT NULL,
  `employee_id` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `requested_on` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_triage_queue_patient_table1_idx` (`patient_card_number`),
  KEY `fk_triage_queue_employee_table1_idx` (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `triage_queue`
--

INSERT INTO `triage_queue` (`id`, `patient_card_number`, `employee_id`, `department`, `requested_on`) VALUES
(4, 'ZMRH0000000010', '000001', 'Emergency', '2020-10-02 23:26:31'),
(5, 'ZMRH0000000010', '000001', 'Emergency', '2020-10-02 23:27:25'),
(6, 'ZMRH0000000029', '000001', 'Emergency', '2020-10-02 23:27:49'),
(7, 'ZMRH0000000013', '000001', 'OPD', '2020-10-02 23:33:44'),
(8, 'ZMRH0000000010', '000001', 'OPD', '2020-10-02 23:34:15'),
(9, 'ZMRH0000000014', '000001', 'OPD', '2020-10-02 23:38:07'),
(10, 'ZMRH0000000013', '000001', 'OPD', '2020-10-03 00:08:42'),
(11, 'ZMRH0000000099', '000001', 'OPD', '2020-10-03 07:27:04'),
(12, 'ZMRH0000000017', '000001', 'OPD', '2020-10-03 07:35:11'),
(13, 'ZMRH0000000010', '000001', 'Emergency', '2020-10-03 14:30:14');

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
-- Constraints for table `drug_list_inhouse`
--
ALTER TABLE `drug_list_inhouse`
  ADD CONSTRAINT `fk_drug_list_inhouse_employee_table1` FOREIGN KEY (`emplyee_id`) REFERENCES `employee_table` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `lab_supply_list`
--
ALTER TABLE `lab_supply_list`
  ADD CONSTRAINT `fk_lab_supply_list_employee_table1` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lab_supply_list_lab_supply_catergory1` FOREIGN KEY (`catergory_id`) REFERENCES `lab_supply_cat` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patient_journal`
--
ALTER TABLE `patient_journal`
  ADD CONSTRAINT `fk_patient_journal_employee_table1` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_patient_journal_patient_table1` FOREIGN KEY (`patient_card_number`) REFERENCES `patient_table` (`patient_card_number`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `triage_queue`
--
ALTER TABLE `triage_queue`
  ADD CONSTRAINT `fk_triage_queue_employee_table1` FOREIGN KEY (`employee_id`) REFERENCES `employee_table` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_triage_queue_patient_table1` FOREIGN KEY (`patient_card_number`) REFERENCES `patient_table` (`patient_card_number`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
