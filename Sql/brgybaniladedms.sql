-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2017 at 04:21 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brgybaniladedms`
--

-- --------------------------------------------------------

--
-- Table structure for table `amicable_settlement`
--

CREATE TABLE `amicable_settlement` (
  `amicable_settlement_id` int(11) NOT NULL,
  `requests_forms_id` int(11) NOT NULL,
  `complainant_name` varchar(100) DEFAULT NULL,
  `respondent_name` varchar(100) DEFAULT NULL,
  `settlement` text,
  `complaints_report` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amicable_settlement`
--

INSERT INTO `amicable_settlement` (`amicable_settlement_id`, `requests_forms_id`, `complainant_name`, `respondent_name`, `settlement`, `complaints_report`) VALUES
(1, 7, NULL, 'Loenard', 'Nakabayad na', '6');

-- --------------------------------------------------------

--
-- Table structure for table `barangay_clearance`
--

CREATE TABLE `barangay_clearance` (
  `brgy_clearance_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `requests_forms_id` int(11) NOT NULL,
  `businessname` varchar(255) DEFAULT NULL,
  `businessaddress` varchar(100) DEFAULT NULL,
  `business_line` text NOT NULL,
  `capitalinvested` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay_clearance`
--

INSERT INTO `barangay_clearance` (`brgy_clearance_id`, `resident_id`, `requests_forms_id`, `businessname`, `businessaddress`, `business_line`, `capitalinvested`) VALUES
(1, 0, 1, 'Mike''s Sisigan', 'Banilad, Cebu', '["Spicy Sisig","itlogsilog with extra itlog"]', 500000),
(2, 0, 8, 'Mike Sisigan', 'Banilad, Cebu', '["Sisig with Love"]', 2000),
(3, 0, 9, 'Leonard Sisigan and friends', 'Banilad Cebu City', '["Sisigan with toppings","Porkchop with toppings","Sisig with pork and toppings","Special Iced tea with rice"]', 10000),
(4, 0, 10, 'GuitarShoppe', 'Banilad Cebu City', '["Brand new Acoustic and Electric Guitars","HQ Speakers","HQ Amplifiers"]', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `complaint_form`
--

CREATE TABLE `complaint_form` (
  `complaint_form_id` int(11) NOT NULL,
  `requests_forms_id` int(11) NOT NULL,
  `complainant_name` varchar(100) NOT NULL,
  `respondent_name` varchar(100) NOT NULL,
  `complaint_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_form`
--

INSERT INTO `complaint_form` (`complaint_form_id`, `requests_forms_id`, `complainant_name`, `respondent_name`, `complaint_desc`) VALUES
(1, 6, '', 'Leonard Collamat', 'He didn''t pay his utang');

-- --------------------------------------------------------

--
-- Table structure for table `erpat`
--

CREATE TABLE `erpat` (
  `erpat_id` int(11) NOT NULL,
  `requests_forms_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `family_composition`
--

CREATE TABLE `family_composition` (
  `family_composition_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `family_status` varchar(55) DEFAULT NULL,
  `family_age` int(11) DEFAULT NULL,
  `family_occupation` varchar(100) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `family_educational_attainment` enum('elementarygraduate','elementaryundergraduate','highschoolgraduate','highschoolundergraduate','collegegraduate','collegeundergraduate','postgraduate','Vocational','None') DEFAULT NULL,
  `monthly_salary` float DEFAULT NULL,
  `relationship` enum('father','mother','sister','brother','guardian','son','daughter','none','spouse') DEFAULT NULL,
  `contact_number` varchar(11) DEFAULT NULL,
  `spouse_name` varchar(100) DEFAULT NULL,
  `spouse_age` int(11) DEFAULT NULL,
  `spouse_address` varchar(100) DEFAULT NULL,
  `spouse_dateofbirth` date DEFAULT NULL,
  `spouse_income` float DEFAULT NULL,
  `spouse_occupation` varchar(100) DEFAULT NULL,
  `spouse_educational_attainment` enum('elementarygraduate','elementaryundergraduate','highschoolundergraduate','highschoolgraduate','collegegraduate','collegeundergraduate','postgraduate','Vocational','none') DEFAULT NULL,
  `no_of_children` int(11) DEFAULT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_composition`
--

INSERT INTO `family_composition` (`family_composition_id`, `user_id`, `name`, `family_status`, `family_age`, `family_occupation`, `dateofbirth`, `family_educational_attainment`, `monthly_salary`, `relationship`, `contact_number`, `spouse_name`, `spouse_age`, `spouse_address`, `spouse_dateofbirth`, `spouse_income`, `spouse_occupation`, `spouse_educational_attainment`, `no_of_children`, `address`) VALUES
(1, 16, '', '', 0, '', '0000-00-00', '', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(5, 5, 'Bernadette Cometa', 'soloparent', 18, '', '1998-12-12', 'collegeundergraduate', 50000, 'mother', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(12, 25, 'Leonito Collamat', 'married', 58, 'Seaman', '1958-08-18', 'postgraduate', 0, 'father', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(13, 25, 'Lily Collamat', 'married', 49, 'Business woman', '1967-10-13', 'postgraduate', 0, 'mother', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(14, 25, 'Lizle Kaye Collamat', 'single', 18, 'Student', '1998-10-05', 'collegeundergraduate', 0, 'sister', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(21, 20, 'Warren Flores', 'married', 46, 'Cook', '1970-06-15', 'collegeundergraduate', 0, 'father', '54321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(22, 20, 'Marseille Flores', '', 44, 'NA', '1972-09-26', 'collegegraduate', 0, 'mother', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) UNSIGNED NOT NULL,
  `requests_forms_id` int(11) DEFAULT NULL,
  `resident_id` int(11) DEFAULT NULL,
  `sent_to` int(11) DEFAULT NULL,
  `sent_from` int(11) DEFAULT NULL,
  `message` text,
  `seen_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `requests_forms_id`, `resident_id`, `sent_to`, `sent_from`, `message`, `seen_at`) VALUES
(1, 2, NULL, 5, 2, 'Please Update your Educational Attainment. ', '2017-03-03 05:07:40'),
(2, 4, NULL, 5, 3, 'Add Affilation Company', '2017-03-05 15:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `form_types`
--

CREATE TABLE `form_types` (
  `form_types_id` int(11) NOT NULL,
  `form_type` varchar(255) NOT NULL,
  `form_desc` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_types`
--

INSERT INTO `form_types` (`form_types_id`, `form_type`, `form_desc`, `date_created`) VALUES
(1, 'Business Clearance', NULL, '2017-02-15 16:52:19'),
(2, 'Senior Citizen', NULL, '2017-02-15 16:51:29'),
(3, 'Kalipi Federation\n', NULL, '2017-02-15 16:52:37'),
(4, 'Amicable Settlement', NULL, '2017-01-30 17:12:58'),
(5, 'Kasambahay', NULL, '2017-01-30 17:13:36'),
(6, 'Erpat', NULL, '2017-01-30 17:14:37'),
(7, 'Solo Parents', NULL, '2017-01-30 17:14:55'),
(8, 'PWD Registry', NULL, '2017-02-15 16:51:22'),
(9, 'PWD Financial Assistance', NULL, '2017-02-01 05:45:15'),
(10, 'Complaint', NULL, '2017-02-04 06:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `government`
--

CREATE TABLE `government` (
  `resident_id` int(11) NOT NULL,
  `sss_no` varchar(13) DEFAULT NULL,
  `gsis_no` varchar(11) DEFAULT NULL,
  `tin_no` varchar(15) DEFAULT NULL,
  `pag_ibig_no` varchar(14) DEFAULT NULL,
  `philhealth_no` varchar(14) DEFAULT NULL,
  `philhealth_status` enum('member','member_dependent','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `government`
--

INSERT INTO `government` (`resident_id`, `sss_no`, `gsis_no`, `tin_no`, `pag_ibig_no`, `philhealth_no`, `philhealth_status`) VALUES
(5, '', '', '', '', '', NULL),
(16, '', '', '', '', '', NULL),
(20, '', '', '', '', '', NULL),
(25, '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kalipi_federation`
--

CREATE TABLE `kalipi_federation` (
  `kalipi_federation_id` int(11) NOT NULL,
  `requests_forms_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_of_company` varchar(100) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `telephone_no_res` varchar(11) NOT NULL,
  `telephone_no_off` varchar(11) NOT NULL,
  `name_of_spouse` varchar(100) NOT NULL,
  `address_of_spouse` varchar(100) NOT NULL,
  `spouse_age` int(11) DEFAULT NULL,
  `dateofbirth_of_spouse` date NOT NULL,
  `highest_educational_attainment` varchar(100) NOT NULL,
  `occupation_of_spouse` varchar(100) NOT NULL,
  `seminars_attended` text,
  `num_of_children` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kalipi_federation`
--

INSERT INTO `kalipi_federation` (`kalipi_federation_id`, `requests_forms_id`, `user_id`, `name_of_company`, `company_address`, `telephone_no_res`, `telephone_no_off`, `name_of_spouse`, `address_of_spouse`, `spouse_age`, `dateofbirth_of_spouse`, `highest_educational_attainment`, `occupation_of_spouse`, `seminars_attended`, `num_of_children`) VALUES
(1, 15, 0, 'adsadssad', 'asdasadsas', '1234567', '1234567', '', '', NULL, '0000-00-00', '', '', '{"title":["asdasasd"],"date":["2017-03-16"]}', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kasambahay`
--

CREATE TABLE `kasambahay` (
  `kasambahay_id` int(11) NOT NULL,
  `requests_forms_id` int(11) NOT NULL,
  `nature_of_work` enum('general_househelp','cook','laundry_person','yaya','gardener','other') DEFAULT NULL,
  `other` varchar(100) DEFAULT NULL,
  `employment_arrangement` enum('live_in','live-out','','') DEFAULT NULL,
  `name_of_employer` varchar(100) DEFAULT NULL,
  `employers_home_address` varchar(100) DEFAULT NULL,
  `employers_sitio` varchar(100) DEFAULT NULL,
  `employers_barangay` varchar(100) DEFAULT NULL,
  `employers_province` varchar(100) DEFAULT NULL,
  `employers_municipality` varchar(100) DEFAULT NULL,
  `incase_of_emergency` varchar(100) DEFAULT NULL,
  `emergency_contact_no` varchar(11) DEFAULT NULL,
  `monthly_salary` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasambahay`
--

INSERT INTO `kasambahay` (`kasambahay_id`, `requests_forms_id`, `nature_of_work`, `other`, `employment_arrangement`, `name_of_employer`, `employers_home_address`, `employers_sitio`, `employers_barangay`, `employers_province`, `employers_municipality`, `incase_of_emergency`, `emergency_contact_no`, `monthly_salary`) VALUES
(1, 14, 'general_househelp', '', 'live_in', 'asadf', 'b', 'b', 'b', 'a', 'a', 'a', '123456', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `pwd_financial`
--

CREATE TABLE `pwd_financial` (
  `pwd_financial_id` int(11) NOT NULL,
  `requests_forms_id` int(11) NOT NULL,
  `affiliated_org` enum('go','po','ngo','') DEFAULT NULL,
  `pwd_id_card_no` int(11) DEFAULT NULL,
  `issued_at` varchar(100) DEFAULT NULL,
  `issued_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pwd_financial`
--

INSERT INTO `pwd_financial` (`pwd_financial_id`, `requests_forms_id`, `affiliated_org`, `pwd_id_card_no`, `issued_at`, `issued_on`) VALUES
(1, 4, '', 1, NULL, '2017-03-03 05:25:15'),
(2, 12, 'ngo', 1234, NULL, '2017-03-05 15:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `pwd_registry`
--

CREATE TABLE `pwd_registry` (
  `pwd_registry_id` int(11) NOT NULL,
  `requests_forms_id` int(11) NOT NULL,
  `government_id` int(11) NOT NULL,
  `pwd_number` int(11) NOT NULL,
  `type_disability` enum('psychology','mental','hearing','chronic_illness','visual','speech_impairment','learning','orthopedic','multiple') DEFAULT NULL,
  `telephone_no` varchar(8) NOT NULL,
  `causes_of_disability` enum('congenital','illness','accident') DEFAULT NULL,
  `nature_of_employment` enum('private','government','','') DEFAULT NULL,
  `employment_status` enum('employed','unemployed') DEFAULT NULL,
  `type_of_employment` enum('contractual','permanent','self-employed','seasonal') DEFAULT NULL,
  `occupation` enum('officials','professionals','technandprofs','clerks','serviceandmarketworkers','farmersforestryandfisherman','trades','plantandmachine','laborers','unskilled','special','notapplicable') DEFAULT NULL,
  `blood_type` enum('a+','a-','b+','b-','ab+','ab-','o+','o-') DEFAULT NULL,
  `affilated_org` varchar(100) DEFAULT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `office_address` varchar(100) DEFAULT NULL,
  `office_telephone_no` varchar(8) DEFAULT NULL,
  `accomplished_by` varchar(100) DEFAULT NULL,
  `name_of_reporting_unit` varchar(100) DEFAULT NULL,
  `registration_no` int(11) DEFAULT NULL,
  `guardians_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pwd_registry`
--

INSERT INTO `pwd_registry` (`pwd_registry_id`, `requests_forms_id`, `government_id`, `pwd_number`, `type_disability`, `telephone_no`, `causes_of_disability`, `nature_of_employment`, `employment_status`, `type_of_employment`, `occupation`, `blood_type`, `affilated_org`, `contact_person`, `office_address`, `office_telephone_no`, `accomplished_by`, `name_of_reporting_unit`, `registration_no`, `guardians_name`) VALUES
(1, 2, 0, 1, 'mental', '', 'illness', NULL, 'unemployed', NULL, NULL, 'b+', 'Dynacom', 'Charles Quintin', 'Talamban', '1234567', NULL, NULL, NULL, ''),
(2, 3, 0, 1, 'mental', '', 'illness', NULL, 'unemployed', NULL, NULL, 'b+', 'Dynacom', 'Charles Quintin', 'Talamban', '1234567', NULL, NULL, NULL, ''),
(3, 11, 0, 1, 'learning', '', 'illness', NULL, 'unemployed', NULL, NULL, 'b+', 'Dynacom', 'Charles Allaga', 'Consolacion', '12345', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `requests_forms`
--

CREATE TABLE `requests_forms` (
  `requests_forms_id` int(11) NOT NULL,
  `requests_forms_type` varchar(255) NOT NULL,
  `forms_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `request_status` enum('pending','approved','paid','reviewed','cancelled','disapproved') NOT NULL,
  `requests_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_reviewed` timestamp NULL DEFAULT NULL,
  `date_cleared` timestamp NULL DEFAULT NULL,
  `sms_code` varchar(5) DEFAULT NULL,
  `or_number` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `date_paid` timestamp NULL DEFAULT NULL,
  `reviewed_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests_forms`
--

INSERT INTO `requests_forms` (`requests_forms_id`, `requests_forms_type`, `forms_id`, `resident_id`, `request_status`, `requests_created`, `date_reviewed`, `date_cleared`, `sms_code`, `or_number`, `amount`, `date_paid`, `reviewed_by`) VALUES
(1, '', 1, 5, 'approved', '2017-03-03 05:01:56', '2017-03-03 05:02:59', '2017-03-03 05:10:38', 'komZn', 1, 5000, '2017-03-03 05:04:49', 2),
(2, '', 8, 5, 'cancelled', '2017-03-03 05:06:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '', 8, 5, 'paid', '2017-03-03 05:08:46', '2017-03-03 05:09:00', NULL, '5htF0', 2, 12345, '2017-03-03 05:10:05', 2),
(4, '', 9, 5, 'cancelled', '2017-03-03 05:25:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '', 7, 5, 'reviewed', '2017-03-03 05:28:38', '2017-03-03 15:54:12', NULL, NULL, NULL, NULL, NULL, 3),
(6, '', 10, 5, 'approved', '2017-03-03 07:01:00', '2017-03-03 07:02:04', '2017-03-03 07:03:56', 'kJ2YB', 150, 3000, '2017-03-03 07:03:19', 3),
(7, '', 4, 5, 'disapproved', '2017-03-03 07:04:30', '2017-03-03 07:05:58', '2017-03-03 07:06:46', NULL, NULL, NULL, NULL, 3),
(8, '', 1, 5, 'paid', '2017-03-03 07:20:38', '2017-03-03 07:21:01', NULL, NULL, 150, 3000, '2017-03-03 07:21:12', 3),
(9, '', 1, 25, 'approved', '2017-03-03 12:28:21', '2017-03-03 13:00:07', '2017-03-03 13:02:15', 'd3eb0', 1, 5000, '2017-03-03 13:01:15', 3),
(10, '', 1, 20, 'approved', '2017-03-05 14:23:39', '2017-03-05 14:24:53', '2017-03-05 14:27:54', 'DL5ls', 1, 5000, '2017-03-05 14:27:13', 3),
(11, '', 8, 20, 'approved', '2017-03-05 14:40:12', '2017-03-05 14:41:06', '2017-03-05 14:43:38', 'ChfAg', 123, 30000, '2017-03-05 14:42:20', 3),
(12, '', 9, 20, 'approved', '2017-03-05 15:03:26', '2017-03-05 15:05:25', '2017-03-05 15:07:49', 'Xbkdp', 5, 123457000, '2017-03-05 15:06:44', 2),
(13, '', 2, 20, 'approved', '2017-03-05 15:11:53', '2017-03-05 15:12:11', '2017-03-05 15:14:50', NULL, 123122, 55555, '2017-03-05 15:14:18', 3),
(14, '', 5, 20, 'approved', '2017-03-05 15:15:47', '2017-03-05 15:16:01', '2017-03-05 15:16:36', NULL, 123, 55555, '2017-03-05 15:16:15', 3),
(15, '', 3, 20, 'approved', '2017-03-05 15:17:58', '2017-03-05 15:18:19', '2017-03-05 15:19:15', NULL, 12313312, 5555, '2017-03-05 15:18:36', 3);

-- --------------------------------------------------------

--
-- Table structure for table `senior_citizen`
--

CREATE TABLE `senior_citizen` (
  `senior_citizen_id` int(11) NOT NULL,
  `requests_forms_id` int(11) NOT NULL,
  `osca_id_no` int(11) NOT NULL,
  `organizational_membership` text NOT NULL,
  `name_of_spouse` varchar(100) DEFAULT NULL,
  `spouse_income` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senior_citizen`
--

INSERT INTO `senior_citizen` (`senior_citizen_id`, `requests_forms_id`, `osca_id_no`, `organizational_membership`, `name_of_spouse`, `spouse_income`) VALUES
(1, 13, 1, '{"name":["LaravelTuts","BiglangGwapoVentures"],"position":["Trainee","Student"],"year_service":["2","1"]}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `solo_parent`
--

CREATE TABLE `solo_parent` (
  `solo_parent_id` int(11) NOT NULL,
  `requests_forms_id` int(11) NOT NULL,
  `total_family_income` float DEFAULT NULL,
  `classifcation_desc` varchar(255) DEFAULT NULL,
  `needs_problems` varchar(255) DEFAULT NULL,
  `family_resources` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solo_parent`
--

INSERT INTO `solo_parent` (`solo_parent_id`, `requests_forms_id`, `total_family_income`, `classifcation_desc`, `needs_problems`, `family_resources`) VALUES
(1, 5, 500000, 'Classification Description', 'Needs and Problems', 'Family Resource');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_type` enum('resident','secretary','treasurer','captain') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `home_address` varchar(100) DEFAULT NULL,
  `prov_address` varchar(100) DEFAULT NULL,
  `barangay` varchar(100) DEFAULT NULL,
  `sitio` varchar(100) DEFAULT NULL,
  `municipality` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `dateofbirth` date NOT NULL,
  `placeofbirth` varchar(100) DEFAULT NULL,
  `sex` enum('Male','Female') DEFAULT NULL,
  `civil_status` enum('Single','Married','Widower','Separated','Co-habitation','Guardian','Soloparent') DEFAULT NULL,
  `age` int(11) NOT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `citizenship` varchar(100) DEFAULT NULL,
  `telephone_no` varchar(8) DEFAULT NULL,
  `cellphone_no` varchar(11) DEFAULT NULL,
  `educational_attainment` enum('elementarygraduate','elementaryundergraduate','highschoolgraduate','highschoolundergraduate','collegegraduate','collegeundergraduate','postgraduate','Vocational','None') DEFAULT NULL,
  `skills` varchar(100) DEFAULT NULL,
  `other_skills` varchar(100) DEFAULT NULL,
  `hobbies` varchar(100) DEFAULT NULL,
  `talent` varchar(100) DEFAULT NULL,
  `monthly_income` float DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `image_filename` varchar(255) DEFAULT NULL,
  `flag` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `username`, `password`, `email_address`, `lastname`, `firstname`, `middlename`, `nickname`, `home_address`, `prov_address`, `barangay`, `sitio`, `municipality`, `region`, `dateofbirth`, `placeofbirth`, `sex`, `civil_status`, `age`, `religion`, `citizenship`, `telephone_no`, `cellphone_no`, `educational_attainment`, `skills`, `other_skills`, `hobbies`, `talent`, `monthly_income`, `occupation`, `image_filename`, `flag`) VALUES
(1, 'captain', 'captain', 'ab334feeb31c05124cb73fa12571c2f6', 'nicolasleyson@gmail.com', 'Leyson, Jr.', 'Nicolas', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1967-04-15', NULL, 'Male', NULL, 49, NULL, NULL, '', '09123456789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'secretary', 'andrea', '1c42f9c1ca2f65441465b43cd9339d6c', 'andreahill@gmail.com', 'Hill', 'Andrea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 'secretary', 'annesimpson', 'ad7f3bdd6c6fc57b19a99637d23e338d', 'annesimpson@gmail.com', 'Simpson', 'Anne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 'treasurer', 'faith', 'ecee7df9bbac50b9b428483bfea1dd7c', 'faithcameron@gmail.com', 'Cameron', 'Faith', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 'resident', 'mikebryan', 'c8e130ffdd9ec728ee7eb48752e100b4', 'mikebryanseabrook@gmail.com', 'Seabrook', 'Mike Byran', 'Cometa', '', '123 Lahug', 'Bogo', NULL, 'bas', NULL, NULL, '1996-11-18', 'Cebu City', 'Male', 'Single', 20, 'Catholic', 'Filipino', '', '09420291187', 'collegeundergraduate', '', '', '', '', 0, 'Student', '15400904_1695969320693957_7310630843359616946_n.jpg', 1),
(7, 'resident', 'ronjudah', '4c0253226a1bfeacec42d0342d3408a6', 'ronjudaht@gmail.com', 'Tamayo', 'Ron Judah', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1995-11-26', NULL, 'Male', NULL, 21, NULL, NULL, '', '09323711846', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 'resident', 'kinjohn', 'eed71d859c2b48673fdf288e6be0ff25', 'kinjohnkiseo@gmail.com', 'Kiseo', 'Kin John', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1995-10-13', NULL, 'Male', NULL, 21, NULL, NULL, '', '09324574476', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 'resident', 'paulpineda', 'dcd5531f62589abb873e14fbc11c77f0', 'paulpineda@gmail.com', 'Pineda', 'Paul Anthony', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1996-05-12', NULL, 'Male', NULL, 20, NULL, NULL, '', '09222822023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, 'resident', 'jaketuna', '3bc0449b26c98b16423a1335e5423df1', 'jaketunacao@gmail.com', 'Tunacao', 'Jake', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1997-12-12', NULL, 'Male', NULL, 19, NULL, NULL, '', '09994573422', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, 'resident', 'marwin', '38a5d9570abdc35a5cf3588a926130c6', 'marwinybanez@gmail.com', 'Ybanez', 'Marwin', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1996-11-10', NULL, 'Male', NULL, 20, NULL, NULL, '', '09770818598', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, 'resident', 'adrian', '8c4205ec33d8f6caeaaaa0c10a14138c', 'biglanggwapoventures@gmail.com', 'Natabio', 'Adrian', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1995-02-12', NULL, 'Male', NULL, 22, NULL, NULL, '', '09233887588', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, 'resident', 'valerieq', '32122ca1c64de1150d2e457abe7a1ae5', 'valeriequijano@gmail.com', 'Quijano', 'Valerie', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1996-02-12', NULL, 'Female', NULL, 21, NULL, NULL, '', '09335326821', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, 'resident', 'baxal', '0d9914881b62c8e12f3f13b995720b87', 'joenillebaxa@gmail.com', 'Baxal', 'Joenille', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1996-02-15', NULL, 'Male', NULL, 21, NULL, NULL, '', '09366358246', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, 'resident', 'eunice', 'ea6328863b3cd900ee932e58d1d10424', 'eunicemoradas@gmail.com', 'Moradas', 'Eunice Marie', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1996-04-16', NULL, 'Female', NULL, 20, NULL, NULL, '', '09223755657', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(16, 'resident', 'DanFebra', '31606c153209f40d282c418785181e3a', 'dan.febz08@gmail.com', 'Febra', 'Dan Christian', '', '', '1234 Liloan Street', 'Cebu', NULL, 'atis', NULL, NULL, '1996-08-22', 'Cebu City', 'Male', 'Single', 20, 'Catholic', 'Filipino', '', '09232139607', 'collegeundergraduate', '', '', '', '', 0, 'Student', NULL, 1),
(17, 'resident', 'lianne', '8e9217bb7d907b9060664a1f5518dd9e', 'lianneestrella@gmail.com', 'Estrella', 'Lianne', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1996-06-01', NULL, 'Female', NULL, 20, NULL, NULL, '', '09236721207', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, 'resident', 'charles', 'a5410ee37744c574ba5790034ea08f79', 'distortion@gmail.com', 'Allaga', 'Charles Quintin', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1995-10-15', NULL, 'Male', NULL, 21, NULL, NULL, '', '09770182490', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(19, 'treasurer', 'diana', '3a23bb515e06d0e944ff916e79a7775c', 'diana@gmail.com', 'Gibson', 'Diana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(20, 'resident', 'm3flores', '4aa7acf1a7748675f7f0dc95f2b0a141', 'thirdeeme34@gmail.com', 'Flores III', 'Manuel', 'Duterte', 'M3', '0040 B Street', 'Pagadian ', NULL, 'baniladproper', NULL, NULL, '1996-11-03', 'Cebu City', 'Male', 'Single', 20, 'Catholic', 'Filipino', '', '09294805417', 'collegeundergraduate', '', '', '', '', 0, 'Student', '14199582_10202235298880459_8764049787278467576_n13.jpg', 1),
(21, 'resident', 'manuel', '96917805fd060e3766a9a1b834639d35', 'thirdeeme34@gmail.com', 'Flores', 'Manuel', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0001-01-01', NULL, 'Male', NULL, 2016, NULL, NULL, '', '09294805417', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(25, 'resident', 'lcollamat', 'd37d24e1caa1d3da3cf87e67e5f8b1b0', 'leonardcollamat@gmail.com', 'Collamat', 'Leonard', 'L', 'Nard', 'J. Fortich Street', 'Cebu', NULL, 'iccompound', NULL, NULL, '1997-02-12', 'Cebu City', 'Male', 'Single', 20, 'Roman Catholic', 'Filipino', '', '09994573422', 'collegeundergraduate', '', '', '', '', 0, 'Student', 'Loan_Solutions_21.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amicable_settlement`
--
ALTER TABLE `amicable_settlement`
  ADD PRIMARY KEY (`amicable_settlement_id`),
  ADD KEY `requests_forms_id` (`requests_forms_id`);

--
-- Indexes for table `barangay_clearance`
--
ALTER TABLE `barangay_clearance`
  ADD PRIMARY KEY (`brgy_clearance_id`),
  ADD KEY `requests_forms_id` (`requests_forms_id`);

--
-- Indexes for table `complaint_form`
--
ALTER TABLE `complaint_form`
  ADD PRIMARY KEY (`complaint_form_id`),
  ADD KEY `requests_forms_id` (`requests_forms_id`);

--
-- Indexes for table `erpat`
--
ALTER TABLE `erpat`
  ADD PRIMARY KEY (`erpat_id`),
  ADD KEY `requests_forms_id` (`requests_forms_id`);

--
-- Indexes for table `family_composition`
--
ALTER TABLE `family_composition`
  ADD PRIMARY KEY (`family_composition_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resident_id` (`resident_id`);

--
-- Indexes for table `form_types`
--
ALTER TABLE `form_types`
  ADD PRIMARY KEY (`form_types_id`);

--
-- Indexes for table `government`
--
ALTER TABLE `government`
  ADD PRIMARY KEY (`resident_id`);

--
-- Indexes for table `kalipi_federation`
--
ALTER TABLE `kalipi_federation`
  ADD PRIMARY KEY (`kalipi_federation_id`),
  ADD KEY `requests_forms_id` (`requests_forms_id`);

--
-- Indexes for table `kasambahay`
--
ALTER TABLE `kasambahay`
  ADD PRIMARY KEY (`kasambahay_id`),
  ADD KEY `requests_forms_id` (`requests_forms_id`);

--
-- Indexes for table `pwd_financial`
--
ALTER TABLE `pwd_financial`
  ADD PRIMARY KEY (`pwd_financial_id`),
  ADD KEY `requests_forms_id` (`requests_forms_id`);

--
-- Indexes for table `pwd_registry`
--
ALTER TABLE `pwd_registry`
  ADD PRIMARY KEY (`pwd_registry_id`),
  ADD KEY `requests_forms_id` (`requests_forms_id`);

--
-- Indexes for table `requests_forms`
--
ALTER TABLE `requests_forms`
  ADD PRIMARY KEY (`requests_forms_id`),
  ADD KEY `resident_id` (`resident_id`);

--
-- Indexes for table `senior_citizen`
--
ALTER TABLE `senior_citizen`
  ADD PRIMARY KEY (`senior_citizen_id`),
  ADD KEY `requests_forms_id` (`requests_forms_id`);

--
-- Indexes for table `solo_parent`
--
ALTER TABLE `solo_parent`
  ADD PRIMARY KEY (`solo_parent_id`),
  ADD KEY `requests_forms_id` (`requests_forms_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amicable_settlement`
--
ALTER TABLE `amicable_settlement`
  MODIFY `amicable_settlement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `barangay_clearance`
--
ALTER TABLE `barangay_clearance`
  MODIFY `brgy_clearance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `complaint_form`
--
ALTER TABLE `complaint_form`
  MODIFY `complaint_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `erpat`
--
ALTER TABLE `erpat`
  MODIFY `erpat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `family_composition`
--
ALTER TABLE `family_composition`
  MODIFY `family_composition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `form_types`
--
ALTER TABLE `form_types`
  MODIFY `form_types_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kalipi_federation`
--
ALTER TABLE `kalipi_federation`
  MODIFY `kalipi_federation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kasambahay`
--
ALTER TABLE `kasambahay`
  MODIFY `kasambahay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pwd_financial`
--
ALTER TABLE `pwd_financial`
  MODIFY `pwd_financial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pwd_registry`
--
ALTER TABLE `pwd_registry`
  MODIFY `pwd_registry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `requests_forms`
--
ALTER TABLE `requests_forms`
  MODIFY `requests_forms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `senior_citizen`
--
ALTER TABLE `senior_citizen`
  MODIFY `senior_citizen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `solo_parent`
--
ALTER TABLE `solo_parent`
  MODIFY `solo_parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `amicable_settlement`
--
ALTER TABLE `amicable_settlement`
  ADD CONSTRAINT `amicable_settlement_ibfk_1` FOREIGN KEY (`requests_forms_id`) REFERENCES `requests_forms` (`requests_forms_id`);

--
-- Constraints for table `barangay_clearance`
--
ALTER TABLE `barangay_clearance`
  ADD CONSTRAINT `barangay_clearance_ibfk_1` FOREIGN KEY (`requests_forms_id`) REFERENCES `requests_forms` (`requests_forms_id`);

--
-- Constraints for table `complaint_form`
--
ALTER TABLE `complaint_form`
  ADD CONSTRAINT `complaint_form_ibfk_1` FOREIGN KEY (`requests_forms_id`) REFERENCES `requests_forms` (`requests_forms_id`);

--
-- Constraints for table `erpat`
--
ALTER TABLE `erpat`
  ADD CONSTRAINT `erpat_ibfk_1` FOREIGN KEY (`requests_forms_id`) REFERENCES `requests_forms` (`requests_forms_id`);

--
-- Constraints for table `family_composition`
--
ALTER TABLE `family_composition`
  ADD CONSTRAINT `family_composition_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`resident_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `government`
--
ALTER TABLE `government`
  ADD CONSTRAINT `government_ibfk_1` FOREIGN KEY (`resident_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `kalipi_federation`
--
ALTER TABLE `kalipi_federation`
  ADD CONSTRAINT `kalipi_federation_ibfk_1` FOREIGN KEY (`requests_forms_id`) REFERENCES `requests_forms` (`requests_forms_id`);

--
-- Constraints for table `kasambahay`
--
ALTER TABLE `kasambahay`
  ADD CONSTRAINT `kasambahay_ibfk_1` FOREIGN KEY (`requests_forms_id`) REFERENCES `requests_forms` (`requests_forms_id`);

--
-- Constraints for table `pwd_financial`
--
ALTER TABLE `pwd_financial`
  ADD CONSTRAINT `pwd_financial_ibfk_1` FOREIGN KEY (`requests_forms_id`) REFERENCES `requests_forms` (`requests_forms_id`);

--
-- Constraints for table `pwd_registry`
--
ALTER TABLE `pwd_registry`
  ADD CONSTRAINT `pwd_registry_ibfk_1` FOREIGN KEY (`requests_forms_id`) REFERENCES `requests_forms` (`requests_forms_id`);

--
-- Constraints for table `requests_forms`
--
ALTER TABLE `requests_forms`
  ADD CONSTRAINT `requests_forms_ibfk_1` FOREIGN KEY (`resident_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `senior_citizen`
--
ALTER TABLE `senior_citizen`
  ADD CONSTRAINT `senior_citizen_ibfk_1` FOREIGN KEY (`requests_forms_id`) REFERENCES `requests_forms` (`requests_forms_id`);

--
-- Constraints for table `solo_parent`
--
ALTER TABLE `solo_parent`
  ADD CONSTRAINT `solo_parent_ibfk_1` FOREIGN KEY (`requests_forms_id`) REFERENCES `requests_forms` (`requests_forms_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
