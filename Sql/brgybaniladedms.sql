-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 10:17 AM
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
  `settlement` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amicable_settlement`
--

INSERT INTO `amicable_settlement` (`amicable_settlement_id`, `requests_forms_id`, `complainant_name`, `respondent_name`, `settlement`) VALUES
(1, 12, 'Complaints Name', 'Respondents Name', 'Praesent rhoncus aliquam ante, sed eleifend elit tempus ac. Vivamus fringilla, libero at pharetra congue, magna orci fermentum justo, ac consequat mauris libero sed urna. Phasellus egestas facilisis faucibus. Donec imperdiet est est, vel vulputate ex interdum non. Quisque sed est gravida, aliquet tellus non, pellentesque urna. Nunc neque urna, blandit vitae lacus eu, volutpat commodo velit. Praesent eget maximus enim. Nam in malesuada tortor. Fusce aliquam lorem quis sem vulputate venenatis. Nam vitae purus ante. Aenean malesuada nibh sed massa aliquet interdum. Quisque scelerisque molestie mauris, at dictum nulla. Etiam eu lacus porttitor, egestas lacus at, commodo est. Sed semper sagittis dapibus.\n\nNam aliquam nisi id nisl egestas molestie. Nam a felis quis urna sodales tincidunt et eu leo. Nam lobortis efficitur mi, eget iaculis sem maximus ut. Etiam nec pretium nisl. Sed vitae dui sed leo interdum blandit sit amet sed eros. Ut viverra, felis ornare accumsan bibendum, felis eros porttitor magna, eu consequat leo dolor id ante. Pellentesque quis ipsum sit amet velit elementum volutpat. Curabitur vitae nunc sem. Mauris elementum nisl nibh, eu pellentesque leo sagittis at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce auctor in nibh id lacinia. Proin pharetra bibendum tristique. Sed in mauris justo. Vestibulum purus odio, sagittis in cursus ut, condimentum lobortis erat.\n\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut placerat a lacus nec ultrices. Sed imperdiet nulla gravida magna vestibulum, suscipit iaculis enim rutrum. Aenean quis ligula vitae mauris commodo luctus eu in elit. Quisque posuere at tortor eleifend egestas. Vestibulum ut aliquet nisi. In faucibus enim pellentesque, hendrerit diam at, tristique nunc. Maecenas sed volutpat ipsum. Cras pellentesque leo est, nec eleifend orci commodo a. Vivamus efficitur mauris sed commodo aliquet. Sed sagittis tincidunt neque efficitur ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dapibus vitae dui et facilisis. Nam in libero eu ipsum tempus pulvinar.');

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
  `capitalinvested` double DEFAULT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay_clearance`
--

INSERT INTO `barangay_clearance` (`brgy_clearance_id`, `resident_id`, `requests_forms_id`, `businessname`, `businessaddress`, `business_line`, `capitalinvested`, `amount`) VALUES
(1, 0, 1, 'Just Business', 'Lapu Lapu', '["Business Descr 1","Business Descr 2","Business Descr 3","Business Descr 4","Business Descr 5"]', 1000000, 20000),
(2, 0, 2, 'Just Business Again', 'Lapu Lapu', '["Business Descrp 1","Business Descrp 2","Business Descrp 3","Business Descrp 4","Business Descrp 5"]', 200000, 20000),
(3, 0, 3, 'Business Name', 'Business Address', '["Desc 1","Desc 2","Desc 3","Desc 4"]', 150000, 20000),
(4, 0, 13, 'Business Name', 'Business Address', '["Desc 1","Desc 2","Desc 3"]', 10000, 2222),
(5, 0, 14, 'New', 'New', '["Desc1","Desc1"]', 100, 200),
(6, 0, 15, 'new', 'new', '["llll","9999"]', 888, 999);

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
(1, 10, 'Complaints NAME', 'Complaints Name', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed semper nisl ex. Morbi justo lacus, consectetur vel elit eget, accumsan semper neque. Aenean mi dolor, ultrices ut metus condimentum, lacinia rhoncus enim. Nam risus est, pharetra sed porta sit a');

-- --------------------------------------------------------

--
-- Table structure for table `erpat`
--

CREATE TABLE `erpat` (
  `erpat_id` int(11) NOT NULL,
  `requests_forms_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erpat`
--

INSERT INTO `erpat` (`erpat_id`, `requests_forms_id`) VALUES
(1, 11);

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
  `relationship` enum('father','mother','sister','brother','guardian','son','daughter','none') DEFAULT NULL,
  `contact_number` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_composition`
--

INSERT INTO `family_composition` (`family_composition_id`, `user_id`, `name`, `family_status`, `family_age`, `family_occupation`, `dateofbirth`, `family_educational_attainment`, `monthly_salary`, `relationship`, `contact_number`) VALUES
(3, 5, 'Adolfo Kinaadman', 'Married', 45, 'Pilot', '1976-12-18', 'collegegraduate', 5000000, 'father', '0912345678'),
(4, 5, 'Maria Kinaadman', 'Married', 41, 'House Wife', '1977-11-12', 'collegegraduate', 0, 'mother', '098765431'),
(6, 4, 'War', 'Married', 45, 'Cook', '1975-06-15', 'elementarygraduate', 11111100, 'father', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) UNSIGNED NOT NULL,
  `resident_id` int(11) DEFAULT NULL,
  `sent_to` int(11) DEFAULT NULL,
  `sent_from` int(11) DEFAULT NULL,
  `message` text,
  `seen_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `resident_id`, `sent_to`, `sent_from`, `message`, `seen_at`) VALUES
(1, NULL, 4, 2, 'THERE''S AN ERROR', '2017-02-16 06:11:09'),
(2, NULL, 4, 2, 'no comment', '2017-02-16 08:21:08');

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
  `id_ref_no` int(11) DEFAULT NULL,
  `sss_no` int(11) DEFAULT NULL,
  `gsis_no` int(11) DEFAULT NULL,
  `pag_ibig_no` int(11) DEFAULT NULL,
  `philhealth_no` int(11) DEFAULT NULL,
  `philhealth_status` enum('member','member_dependent','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `government`
--

INSERT INTO `government` (`resident_id`, `id_ref_no`, `sss_no`, `gsis_no`, `pag_ibig_no`, `philhealth_no`, `philhealth_status`) VALUES
(4, 123, 1111, 222, 333, 444, 'member_dependent'),
(5, NULL, 111, 222, 333, 444, NULL);

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
(1, 8, 0, 'Name of Company', 'Company Address', '2221111', '2223333', 'Spouse', 'Adress', 20, '1997-11-11', 'College Graduate', 'House Wife', '{"title":["Seminar 1","Seminar 2"],"date":["2016-01-02","2015-01-04"]}', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kasambahay`
--

CREATE TABLE `kasambahay` (
  `kasambahay_id` int(11) NOT NULL,
  `requests_forms_id` int(11) NOT NULL,
  `nature_of_work` enum('general_househelp','cook','laundry_person','yaya','gardener','other') DEFAULT NULL,
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

INSERT INTO `kasambahay` (`kasambahay_id`, `requests_forms_id`, `nature_of_work`, `employment_arrangement`, `name_of_employer`, `employers_home_address`, `employers_sitio`, `employers_barangay`, `employers_province`, `employers_municipality`, `incase_of_emergency`, `emergency_contact_no`, `monthly_salary`) VALUES
(1, 7, 'gardener', 'live-out', 'Name of Employer', 'Home Address', 'Sitio', 'Barangay', 'Province', 'Municipality', 'WAR', '111111000', 12345);

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
(1, 5, 'ngo', 123, 'Cebu City', '2017-02-16 03:51:11');

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
(1, 4, 0, 1, 'multiple', '', 'congenital', NULL, 'unemployed', NULL, NULL, 'b+', 'ORGANIZATION AFFILIATED:', 'CONTACT PERSON:', 'OFFICE ADDRESS:', 'None', NULL, 'NAME OF REPORTING UNIT', 123, '');

-- --------------------------------------------------------

--
-- Table structure for table `requests_forms`
--

CREATE TABLE `requests_forms` (
  `requests_forms_id` int(11) NOT NULL,
  `requests_forms_type` varchar(255) NOT NULL,
  `forms_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `request_status` enum('pending','approved','paid','reviewed') NOT NULL,
  `requests_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_cleared` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `sms_code` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests_forms`
--

INSERT INTO `requests_forms` (`requests_forms_id`, `requests_forms_type`, `forms_id`, `resident_id`, `request_status`, `requests_created`, `date_cleared`, `sms_code`) VALUES
(1, '', 1, 5, 'pending', '2017-02-16 05:37:26', '2017-02-15 20:41:23', 'raxy0'),
(2, '', 1, 5, 'paid', '2017-02-16 08:47:58', '2017-02-15 20:41:09', 'eSI2h'),
(3, '', 1, 4, 'pending', '2017-02-16 07:13:22', '0000-00-00 00:00:00', NULL),
(4, '', 8, 4, 'pending', '2017-02-16 05:37:50', '0000-00-00 00:00:00', NULL),
(5, '', 9, 4, 'pending', '2017-02-16 05:37:38', '0000-00-00 00:00:00', NULL),
(6, '', 2, 4, 'pending', '2017-02-16 05:38:09', '0000-00-00 00:00:00', NULL),
(7, '', 5, 4, 'pending', '2017-02-16 05:37:58', '0000-00-00 00:00:00', NULL),
(8, '', 3, 4, 'pending', '2017-02-16 05:38:06', '0000-00-00 00:00:00', NULL),
(9, '', 7, 4, 'pending', '2017-02-16 05:37:53', '0000-00-00 00:00:00', NULL),
(10, '', 10, 4, 'pending', '2017-02-16 05:37:35', '0000-00-00 00:00:00', NULL),
(11, '', 6, 4, 'pending', '2017-02-16 05:37:55', '0000-00-00 00:00:00', NULL),
(12, '', 4, 4, 'pending', '2017-02-16 05:38:02', '0000-00-00 00:00:00', NULL),
(13, '', 1, 7, 'pending', '2017-02-16 07:04:45', '2017-02-15 23:02:53', 'dDUHL'),
(14, '', 1, 7, 'approved', '2017-02-16 08:50:35', '2017-02-16 01:50:35', 'Sn1Vz'),
(15, '', 1, 4, 'pending', '2017-02-16 08:42:23', '2017-02-16 01:40:45', 'FsHdy');

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
(1, 6, 1, '{"name":["Name 1","Name 2","Name 3"],"position":["POSTION 1","POSTION 2","POSTION 3"],"year_service":["1","2","3"]}', 'Spouse', 2222);

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
(1, 9, 22222, 'Class', 'Needs', 'Family Resource');

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
(1, 'captain', 'captain', 'ab334feeb31c05124cb73fa12571c2f6', 'captain@gmail.com', 'Leyson, Jr.', 'Nicolas', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1978-02-09', NULL, 'Male', NULL, 39, NULL, NULL, '', '09153211234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'secretary', 'secretary', '889b2b111b4bc3adb722f0fcff480901', 'secretary@gmail.com', 'secretary', 'secretary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, 'treasurer', 'treasurer', '242fb277e2e5ebd600540af0c99edfb6', 'treasurer@gmail.com', 'treasurer', 'treasurer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, 'resident', 'm3flores', '4aa7acf1a7748675f7f0dc95f2b0a141', 'thirdeeme34@gmail.com', 'Flores III', 'Manuel', 'Duterte', 'M3', 'R Landon', 'Pagadian', 'Cogon Ramos', 'R Landon', 'Cebu', '7', '1996-11-03', 'Cebu City', 'Male', 'Single', 20, 'Catholic', 'Filipino', 'None', '09294805417', 'collegegraduate', 'Skills', 'Other Skills', 'Hobbies', 'Talent', 0, 'Student', '14199582_10202235298880459_8764049787278467576_n2.jpg', 1),
(5, 'resident', 'kristian', 'f82b3a3f2786107859afbe386cca8255', 'kristiankinaadman@gmail.com', 'Kinaadman', 'Kristian', '', 'Master', 'Lapu Lapu City', 'Lapu Lapu City', 'Lapu Lapu City', 'Lapu Lapu City', 'Lapu Lapu City', 'Lapu Lapu City', '1996-10-09', 'Cebu City', 'Male', 'Single', 20, '', 'Filipino', 'None', '09228606249', 'collegeundergraduate', 'Skills', 'Other Skills', 'Hobbies', 'Talent', 0, 'Student', 'avatar5.png', 1),
(6, 'resident', 'mikebryan', '18126e7bd3f84b3f3e4df094def5b7de', 'mikebryanseabrook@gmail.com', 'Seabrook', 'Mike Bryan', 'C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1996-11-18', NULL, 'Male', NULL, 20, NULL, NULL, '', '09420291187', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 'resident', 'angie', 'ca611ff5688d31eecbe58cd802d812d7', 'angieceniza@gmail.com', 'Ceniza', 'Angie', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1976-08-19', NULL, 'Female', NULL, 40, NULL, NULL, '', '09330608043', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

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
  MODIFY `brgy_clearance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `complaint_form`
--
ALTER TABLE `complaint_form`
  MODIFY `complaint_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `erpat`
--
ALTER TABLE `erpat`
  MODIFY `erpat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `family_composition`
--
ALTER TABLE `family_composition`
  MODIFY `family_composition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `pwd_financial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pwd_registry`
--
ALTER TABLE `pwd_registry`
  MODIFY `pwd_registry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
