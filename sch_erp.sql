-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2016 at 05:50 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sch_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_1_classes`
--

CREATE TABLE `class_1_classes` (
  `CLASSID` varchar(5) NOT NULL,
  `CLASS` varchar(100) NOT NULL,
  `SECTION` varchar(100) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class_1_classes`
--

INSERT INTO `class_1_classes` (`CLASSID`, `CLASS`, `SECTION`, `DATE_`) VALUES
('1', '1', '-', '2016-03-08 15:02:33'),
('1A', '1', 'A', '2016-03-08 15:00:37'),
('1B', '1', 'B', '2016-03-08 15:00:37'),
('2', '2', '-', '2016-03-08 15:02:33'),
('2A', '2', 'A', '2016-03-08 15:02:15'),
('3', '3', '-', '2016-03-08 15:02:41'),
('3A', '3', 'A', '2016-03-08 15:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `class_2_in_session`
--

CREATE TABLE `class_2_in_session` (
  `CLSSESSID` int(15) NOT NULL,
  `CLASSID` int(15) NOT NULL,
  `SESSID` varchar(20) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class_2_in_session`
--

INSERT INTO `class_2_in_session` (`CLSSESSID`, `CLASSID`, `SESSID`, `DATE_`) VALUES
(1, 1, '2015-16', '2016-03-08 15:10:44'),
(2, 2, '2015-16', '2016-03-08 15:10:44'),
(3, 3, '2015-16', '2016-03-08 15:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `class_3_class_wise_students`
--

CREATE TABLE `class_3_class_wise_students` (
  `ID_` int(15) NOT NULL,
  `regid` varchar(25) NOT NULL,
  `ROLLNO` int(11) NOT NULL,
  `CLSSESSID` int(15) NOT NULL,
  `USERNAME_` varchar(40) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fee_1_type`
--

CREATE TABLE `fee_1_type` (
  `FEETYPEID` int(15) NOT NULL,
  `TYPE_` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fee_2`
--

CREATE TABLE `fee_2` (
  `feeID` int(11) NOT NULL,
  `regID` varchar(25) NOT NULL,
  `date` varchar(20) NOT NULL,
  `Amount` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `feetype` varchar(20) NOT NULL,
  `feemode` varchar(20) NOT NULL,
  `bankname` varchar(50) NOT NULL,
  `dd_ch_no` varchar(20) NOT NULL,
  `dd_ch_date` varchar(20) NOT NULL,
  `DOE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fee_2`
--

INSERT INTO `fee_2` (`feeID`, `regID`, `date`, `Amount`, `username`, `feetype`, `feemode`, `bankname`, `dd_ch_no`, `dd_ch_date`, `DOE_`) VALUES
(1, '2016031001', '08/03/2016', 1000, 'naveen', 'Registration', 'Cash', 'x', 'x', 'x', '2016-03-08 06:54:24'),
(2, '2016031002', '12/03/2016', 1000, 'nitin', 'Registration', 'Cash', 'x', 'x', 'x', '2016-03-12 06:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `fee_3_static_heads`
--

CREATE TABLE `fee_3_static_heads` (
  `ST_HD_ID` int(15) NOT NULL,
  `FEE_HEAD` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fee_3_static_heads`
--

INSERT INTO `fee_3_static_heads` (`ST_HD_ID`, `FEE_HEAD`, `USERNAME`, `DATE_`) VALUES
(1, 'REGISTRATION', 'nitin', '2016-02-15 11:08:52'),
(2, 'ADMISSION', 'nitin', '2016-02-15 16:16:15'),
(9, 'WITHDRAWL', 'nitin', '2016-02-15 16:28:39'),
(10, 'TUITION', 'nitin', '2016-03-12 06:16:59'),
(11, 'BOOK BANK', 'nitin', '2016-03-12 06:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `fee_4_flexible_heads`
--

CREATE TABLE `fee_4_flexible_heads` (
  `FLX_HD_ID` int(15) NOT NULL,
  `FEE_HEAD` varchar(100) NOT NULL,
  `AMOUNT` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fee_4_flexible_heads`
--

INSERT INTO `fee_4_flexible_heads` (`FLX_HD_ID`, `FEE_HEAD`, `AMOUNT`, `USERNAME`, `DATE_`) VALUES
(1, 'EXAM FEE', '500', 'nitin', '2016-02-17 15:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `fee_5_add_flexi_head_to_students`
--

CREATE TABLE `fee_5_add_flexi_head_to_students` (
  `ADFLXFEESTUDID` int(15) NOT NULL,
  `REGID` varchar(100) NOT NULL,
  `CLSSESSID` int(15) NOT NULL,
  `SESSID` int(15) NOT NULL,
  `FLX_HD_ID` int(15) NOT NULL,
  `STATUS` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fee_6_invoice`
--

CREATE TABLE `fee_6_invoice` (
  `INVID` int(15) NOT NULL,
  `CFEESESSID` int(15) NOT NULL,
  `ADFLXFEESTUDID` int(15) NOT NULL,
  `ACTUAL_AMOUNT` float(11,2) NOT NULL,
  `DESCRIPTION_IFANY` text NOT NULL,
  `REGID` varchar(25) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fee_7_receipts`
--

CREATE TABLE `fee_7_receipts` (
  `RECPTID` int(15) NOT NULL,
  `FEEID` int(15) NOT NULL,
  `FLEXI_FEE_STATUS` varchar(100) NOT NULL,
  `ADFLXFEESTUDID` int(15) NOT NULL,
  `ANYDISCOUNT` varchar(10) NOT NULL,
  `DISCOUNT` varchar(10) NOT NULL,
  `DISCOUNT_AMOUNT` varchar(10) NOT NULL,
  `DESCRIPTION_IFANY` text NOT NULL,
  `INVID` int(15) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fee_8_class_fee`
--

CREATE TABLE `fee_8_class_fee` (
  `CFEEID` int(15) NOT NULL,
  `CLSSESSID` int(15) NOT NULL,
  `TOTFEE` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fee_8_class_fee`
--

INSERT INTO `fee_8_class_fee` (`CFEEID`, `CLSSESSID`, `TOTFEE`, `USERNAME`, `DATE_`) VALUES
(1, 1, '36200', 'nitin', '2016-03-12 07:48:54'),
(2, 2, '37200', 'nitin', '2016-03-12 07:49:45'),
(3, 3, '36200', 'nitin', '2016-03-12 07:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `fee_9_class_fee_split`
--

CREATE TABLE `fee_9_class_fee_split` (
  `CFEESPLITID` int(15) NOT NULL,
  `CFEEID` int(15) NOT NULL,
  `ST_HD_ID` int(15) NOT NULL,
  `AMOUNT` varchar(100) NOT NULL,
  `PAYMENT_STATUS` varchar(15) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fee_9_class_fee_split`
--

INSERT INTO `fee_9_class_fee_split` (`CFEESPLITID`, `CFEEID`, `ST_HD_ID`, `AMOUNT`, `PAYMENT_STATUS`, `USERNAME`, `DATE_`) VALUES
(1, 1, 10, '25000', '12', 'nitin', '2016-03-12 07:45:14'),
(2, 2, 10, '25000', '12', 'nitin', '2016-03-12 07:45:14'),
(3, 3, 10, '25000', '12', 'nitin', '2016-03-12 07:45:14'),
(4, 1, 11, '1200', '12', 'nitin', '2016-03-12 07:46:23'),
(5, 2, 11, '1200', '12', 'nitin', '2016-03-12 07:46:23'),
(6, 3, 11, '1200', '12', 'nitin', '2016-03-12 07:46:24'),
(7, 1, 2, '10000', '12', 'nitin', '2016-03-12 07:48:54'),
(8, 2, 2, '10000', '12', 'nitin', '2016-03-12 07:48:54'),
(9, 3, 2, '10000', '12', 'nitin', '2016-03-12 07:48:54'),
(10, 2, 1, '1000', '12', 'nitin', '2016-03-12 07:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `fee_10_class_fee_in_a_session`
--

CREATE TABLE `fee_10_class_fee_in_a_session` (
  `CFEESESSID` int(15) NOT NULL,
  `CFEEID` int(15) NOT NULL,
  `CLSSESSID` int(15) NOT NULL,
  `SESSID` int(15) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `USERNAME_` varchar(40) NOT NULL,
  `PASSWORD_` varchar(25) NOT NULL,
  `USER_STATUS` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USERNAME_`, `PASSWORD_`, `USER_STATUS`) VALUES
('deepak', '123', 'nw'),
('gopal', '123', 'adm'),
('naveen', '123', 'adm'),
('nitin', '123', 'adm'),
('operator1', 'oper$#1234', 'deo');

-- --------------------------------------------------------

--
-- Table structure for table `master_0_country_`
--

CREATE TABLE `master_0_country_` (
  `ABREV_` varchar(5) NOT NULL,
  `NAME_` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_0_country_`
--

INSERT INTO `master_0_country_` (`ABREV_`, `NAME_`) VALUES
('AD', 'Andorra'),
('AE', 'United Arab Emirates'),
('AF', 'Afghanistan'),
('AG', 'Antigua and Barbuda'),
('AI', 'Anguilla'),
('AL', 'Albania'),
('AM', 'Armenia'),
('AN', 'Netherlands Antilles'),
('AO', 'Angola'),
('AQ', 'Antarctica'),
('AR', 'Argentina'),
('AS', 'American Samoa'),
('AT', 'Austria'),
('AU', 'Australia'),
('AW', 'Aruba'),
('AX', ''),
('AZ', 'Azerbaijan'),
('BA', 'Bosnia and Herzegovina'),
('BB', 'Barbados'),
('BD', 'Bangladesh'),
('BE', 'Belgium'),
('BF', 'Burkina Faso'),
('BG', 'Bulgaria'),
('BH', 'Bahrain'),
('BI', 'Burundi'),
('BJ', 'Benin'),
('BL', 'Saint Barth'),
('BM', 'Bermuda'),
('BN', 'Brunei'),
('BO', 'Bolivia'),
('BQ', 'British Antarctic Territo'),
('BR', 'Brazil'),
('BS', 'Bahamas'),
('BT', 'Bhutan'),
('BV', 'Bouvet Island'),
('BW', 'Botswana'),
('BY', 'Belarus'),
('BZ', 'Belize'),
('CA', 'Canada'),
('CC', 'Cocos [Keeling] Islands'),
('CD', 'Congo - Kinshasa'),
('CF', 'Central African Republic'),
('CG', 'Congo - Brazzaville'),
('CH', 'Switzerland'),
('CI', 'C'),
('CK', 'Cook Islands'),
('CL', 'Chile'),
('CM', 'Cameroon'),
('CN', 'China'),
('CO', 'Colombia'),
('CR', 'Costa Rica'),
('CS', 'Serbia and Montenegro'),
('CT', 'Canton and Enderbury Isla'),
('CU', 'Cuba'),
('CV', 'Cape Verde'),
('CX', 'Christmas Island'),
('CY', 'Cyprus'),
('CZ', 'Czech Republic'),
('DD', 'East Germany'),
('DE', 'Germany'),
('DJ', 'Djibouti'),
('DK', 'Denmark'),
('DM', 'Dominica'),
('DO', 'Dominican Republic'),
('DZ', 'Algeria'),
('EC', 'Ecuador'),
('EE', 'Estonia'),
('EG', 'Egypt'),
('EH', 'Western Sahara'),
('ER', 'Eritrea'),
('ES', 'Spain'),
('ET', 'Ethiopia'),
('FI', 'Finland'),
('FJ', 'Fiji'),
('FK', 'Falkland Islands'),
('FM', 'Micronesia'),
('FO', 'Faroe Islands'),
('FQ', 'French Southern and Antar'),
('FR', 'France'),
('FX', 'Metropolitan France'),
('GA', 'Gabon'),
('GB', 'United Kingdom'),
('GD', 'Grenada'),
('GE', 'Georgia'),
('GF', 'French Guiana'),
('GG', 'Guernsey'),
('GH', 'Ghana'),
('GI', 'Gibraltar'),
('GL', 'Greenland'),
('GM', 'Gambia'),
('GN', 'Guinea'),
('GP', 'Guadeloupe'),
('GQ', 'Equatorial Guinea'),
('GR', 'Greece'),
('GS', 'South Georgia and the Sou'),
('GT', 'Guatemala'),
('GU', 'Guam'),
('GW', 'Guinea-Bissau'),
('GY', 'Guyana'),
('HK', 'Hong Kong SAR China'),
('HM', 'Heard Island and McDonald'),
('HN', 'Honduras'),
('HR', 'Croatia'),
('HT', 'Haiti'),
('HU', 'Hungary'),
('ID', 'Indonesia'),
('IE', 'Ireland'),
('IL', 'Israel'),
('IM', 'Isle of Man'),
('IN', 'India'),
('IO', 'British Indian Ocean Terr'),
('IQ', 'Iraq'),
('IR', 'Iran'),
('IS', 'Iceland'),
('IT', 'Italy'),
('JE', 'Jersey'),
('JM', 'Jamaica'),
('JO', 'Jordan'),
('JP', 'Japan'),
('JT', 'Johnston Island'),
('KE', 'Kenya'),
('KG', 'Kyrgyzstan'),
('KH', 'Cambodia'),
('KI', 'Kiribati'),
('KM', 'Comoros'),
('KN', 'Saint Kitts and Nevis'),
('KP', 'North Korea'),
('KR', 'South Korea'),
('KW', 'Kuwait'),
('KY', 'Cayman Islands'),
('KZ', 'Kazakhstan'),
('LA', 'Laos'),
('LB', 'Lebanon'),
('LC', 'Saint Lucia'),
('LI', 'Liechtenstein'),
('LK', 'Sri Lanka'),
('LR', 'Liberia'),
('LS', 'Lesotho'),
('LT', 'Lithuania'),
('LU', 'Luxembourg'),
('LV', 'Latvia'),
('LY', 'Libya'),
('MA', 'Morocco'),
('MC', 'Monaco'),
('MD', 'Moldova'),
('ME', 'Montenegro'),
('MF', 'Saint Martin'),
('MG', 'Madagascar'),
('MH', 'Marshall Islands'),
('MI', 'Midway Islands'),
('MK', 'Macedonia'),
('ML', 'Mali'),
('MM', 'Myanmar [Burma]'),
('MN', 'Mongolia'),
('MO', 'Macau SAR China'),
('MP', 'Northern Mariana Islands'),
('MQ', 'Martinique'),
('MR', 'Mauritania'),
('MS', 'Montserrat'),
('MT', 'Malta'),
('MU', 'Mauritius'),
('MV', 'Maldives'),
('MW', 'Malawi'),
('MX', 'Mexico'),
('MY', 'Malaysia'),
('MZ', 'Mozambique'),
('NA', 'Namibia'),
('NC', 'New Caledonia'),
('NE', 'Niger'),
('NF', 'Norfolk Island'),
('NG', 'Nigeria'),
('NI', 'Nicaragua'),
('NL', 'Netherlands'),
('NO', 'Norway'),
('NP', 'Nepal'),
('NQ', 'Dronning Maud Land'),
('NR', 'Nauru'),
('NT', 'Neutral Zone'),
('NU', 'Niue'),
('NZ', 'New Zealand'),
('OM', 'Oman'),
('PA', 'Panama'),
('PC', 'Pacific Islands Trust Ter'),
('PE', 'Peru'),
('PF', 'French Polynesia'),
('PG', 'Papua New Guinea'),
('PH', 'Philippines'),
('PK', 'Pakistan'),
('PL', 'Poland'),
('PM', 'Saint Pierre and Miquelon'),
('PN', 'Pitcairn Islands'),
('PR', 'Puerto Rico'),
('PS', 'Palestinian Territories'),
('PT', 'Portugal'),
('PU', 'U.S. Miscellaneous Pacifi'),
('PW', 'Palau'),
('PY', 'Paraguay'),
('PZ', 'Panama Canal Zone'),
('QA', 'Qatar'),
('RE', 'R'),
('RO', 'Romania'),
('RS', 'Serbia'),
('RU', 'Russia'),
('RW', 'Rwanda'),
('SA', 'Saudi Arabia'),
('SB', 'Solomon Islands'),
('SC', 'Seychelles'),
('SD', 'Sudan'),
('SE', 'Sweden'),
('SG', 'Singapore'),
('SH', 'Saint Helena'),
('SI', 'Slovenia'),
('SJ', 'Svalbard and Jan Mayen'),
('SK', 'Slovakia'),
('SL', 'Sierra Leone'),
('SM', 'San Marino'),
('SN', 'Senegal'),
('SO', 'Somalia'),
('SR', 'Suriname'),
('ST', 'S'),
('SU', 'Union of Soviet Socialist'),
('SV', 'El Salvador'),
('SY', 'Syria'),
('SZ', 'Swaziland'),
('TC', 'Turks and Caicos Islands'),
('TD', 'Chad'),
('TF', 'French Southern Territori'),
('TG', 'Togo'),
('TH', 'Thailand'),
('TJ', 'Tajikistan'),
('TK', 'Tokelau'),
('TL', 'Timor-Leste'),
('TM', 'Turkmenistan'),
('TN', 'Tunisia'),
('TO', 'Tonga'),
('TR', 'Turkey'),
('TT', 'Trinidad and Tobago'),
('TV', 'Tuvalu'),
('TW', 'Taiwan'),
('TZ', 'Tanzania'),
('UA', 'Ukraine'),
('UG', 'Uganda'),
('UM', 'U.S. Minor Outlying Islan'),
('US', 'United States'),
('UY', 'Uruguay'),
('UZ', 'Uzbekistan'),
('VA', 'Vatican City'),
('VC', 'Saint Vincent and the Gre'),
('VD', 'North Vietnam'),
('VE', 'Venezuela'),
('VG', 'British Virgin Islands'),
('VI', 'U.S. Virgin Islands'),
('VN', 'Vietnam'),
('VU', 'Vanuatu'),
('WF', 'Wallis and Futuna'),
('WK', 'Wake Island'),
('WS', 'Samoa'),
('YD', 'People''s Democratic Repub'),
('YE', 'Yemen'),
('YT', 'Mayotte'),
('ZA', 'South Africa'),
('ZM', 'Zambia'),
('ZW', 'Zimbabwe'),
('ZZ', 'Unknown or Invalid Region');

-- --------------------------------------------------------

--
-- Table structure for table `master_1_zone_`
--

CREATE TABLE `master_1_zone_` (
  `ID` int(11) NOT NULL,
  `ZONE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_1_zone_`
--

INSERT INTO `master_1_zone_` (`ID`, `ZONE`) VALUES
(1, 'NORTH'),
(2, 'SOUTH'),
(3, 'EAST'),
(4, 'WEST'),
(5, 'NORTH EAST'),
(6, 'CENTRAL');

-- --------------------------------------------------------

--
-- Table structure for table `master_2_zone_region`
--

CREATE TABLE `master_2_zone_region` (
  `ID_` int(11) NOT NULL,
  `ZONE_` int(11) NOT NULL,
  `REGION` varchar(10) NOT NULL,
  `REG_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_2_zone_region`
--

INSERT INTO `master_2_zone_region` (`ID_`, `ZONE_`, `REGION`, `REG_NAME`) VALUES
(1, 1, 'PB', 'Punjab'),
(2, 1, 'JK', 'Jammu & Kashmi'),
(3, 1, 'HR', 'Harayana'),
(4, 1, 'HP', 'Himanchal Pradesh'),
(5, 1, 'UP', 'Uttar Pradesh'),
(6, 1, 'UL', 'Uttarakhand'),
(7, 1, 'RJ', 'Rajasthan'),
(8, 1, 'CH', 'Chandigarh'),
(9, 1, 'DL', 'Delhi'),
(10, 2, 'AP', 'Andhra Pradesh'),
(11, 2, 'KA', 'Karnataka'),
(12, 2, 'KL', 'Kerala'),
(13, 2, 'TN', 'Tamil Nadu'),
(14, 2, 'TG', 'Telangana'),
(15, 3, 'WB', 'West Bengal'),
(16, 3, 'OS', 'Odisa'),
(17, 3, 'BR', 'Bihar'),
(18, 3, 'JH', 'Jharkhand'),
(19, 3, 'AN', 'Andaman and Nicobaar Islands'),
(20, 4, 'GJ', 'Gujrat'),
(21, 4, 'MH', 'Maharshtra'),
(22, 4, 'GO', 'Goa'),
(23, 4, 'DD', 'Daman and Diu'),
(24, 4, 'DN', 'Dadra and Nagar Havali'),
(25, 6, 'MP', 'Madhya Pradesh'),
(26, 6, 'CG', 'Chhatisgarh'),
(27, 5, 'AS', 'Assam'),
(28, 5, 'SK', 'Sikkim'),
(29, 5, 'NG', 'Nagaland'),
(30, 5, 'MG', 'Meghalaya'),
(31, 5, 'MN', 'Manipur'),
(32, 5, 'MZ', 'Mizoram'),
(33, 5, 'TR', 'Tripura'),
(34, 5, 'AZ', 'Arunachal Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `master_3_state_`
--

CREATE TABLE `master_3_state_` (
  `NAME_` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_3_state_`
--

INSERT INTO `master_3_state_` (`NAME_`) VALUES
('UTTARAKHAND'),
('UTTAR PRADESH'),
('DELHI'),
('HARAYANA'),
('KARNATAKA'),
('MAHARASHTRA');

-- --------------------------------------------------------

--
-- Table structure for table `master_4_city_`
--

CREATE TABLE `master_4_city_` (
  `NAME_` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_4_city_`
--

INSERT INTO `master_4_city_` (`NAME_`) VALUES
('HALDWANI');

-- --------------------------------------------------------

--
-- Table structure for table `master_5_user_status`
--

CREATE TABLE `master_5_user_status` (
  `ST_ID` varchar(5) NOT NULL,
  `STATUS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_5_user_status`
--

INSERT INTO `master_5_user_status` (`ST_ID`, `STATUS`) VALUES
('adm', 'Admin'),
('deo', 'Data Entry Operator'),
('fc', 'Faculty'),
('meo', 'Marks Entry Operator'),
('nw', 'news');

-- --------------------------------------------------------

--
-- Table structure for table `master_6_session`
--

CREATE TABLE `master_6_session` (
  `SESSID` varchar(20) NOT NULL,
  `SESSSTART` varchar(100) NOT NULL,
  `SESSEND` varchar(100) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_6_session`
--

INSERT INTO `master_6_session` (`SESSID`, `SESSSTART`, `SESSEND`, `DATE_`) VALUES
('2014-15', '2014', '2015', '2016-03-08 15:10:15'),
('2015-16', '2015', '2016', '2016-03-08 15:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `master_7_stud_personal`
--

CREATE TABLE `master_7_stud_personal` (
  `STUD_ID` int(11) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `MNAME` varchar(50) NOT NULL DEFAULT '-x-',
  `LNAME` varchar(50) NOT NULL DEFAULT '-x-',
  `DOB_` varchar(15) NOT NULL DEFAULT '00/00/0000',
  `FATHER` varchar(50) NOT NULL,
  `F_MOBILE` varchar(50) NOT NULL,
  `F_EMAIL` varchar(50) NOT NULL,
  `F_PROFESSION` varchar(25) NOT NULL,
  `MOTHER` varchar(50) NOT NULL,
  `M_MOBILE` varchar(50) NOT NULL,
  `M_EMAIL` varchar(50) NOT NULL,
  `M_PROFESSION` varchar(50) NOT NULL,
  `regid` varchar(25) NOT NULL,
  `USERNAME_` varchar(40) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `master_8_stud_academics`
--

CREATE TABLE `master_8_stud_academics` (
  `AC_ID` int(15) NOT NULL,
  `DOA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `CLASS_OF_ADMISSION` int(15) NOT NULL COMMENT 'ClassID from class_1_classes',
  `ANY_REMARK` text NOT NULL,
  `regid` varchar(25) NOT NULL,
  `USERNAME_` varchar(40) NOT NULL,
  `DATE_` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `master_9_stud_address`
--

CREATE TABLE `master_9_stud_address` (
  `ADDRID` int(15) NOT NULL,
  `STREET_1` text NOT NULL,
  `CITY_` varchar(25) NOT NULL,
  `PIN_` varchar(8) NOT NULL,
  `DISTT_` varchar(20) NOT NULL,
  `STATE_` varchar(50) NOT NULL,
  `COUNTRY_` varchar(25) NOT NULL,
  `DOC_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS` tinyint(1) NOT NULL COMMENT 'TRUE/FALSE OR 1/0',
  `ADDRESS_STATUS` varchar(25) NOT NULL COMMENT 'PERMANENT/LG/CORRESPONDANCE',
  `regid` varchar(25) NOT NULL,
  `USERNAME_` varchar(40) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `master_10_stud_contact`
--

CREATE TABLE `master_10_stud_contact` (
  `CNTCT_ID` int(15) NOT NULL,
  `MOBILE_S` varchar(50) NOT NULL,
  `PH_S` varchar(50) NOT NULL,
  `EMAIL_S` varchar(200) NOT NULL,
  `DOC_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS` tinyint(1) NOT NULL DEFAULT '1',
  `CONTACT_STATUS` varchar(20) NOT NULL COMMENT 'PERMANENT/LG/CORRESPONDANCE',
  `regid` varchar(25) NOT NULL,
  `USERNAME_` varchar(40) NOT NULL,
  `DATE_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu_1`
--

CREATE TABLE `menu_1` (
  `ID_` int(11) NOT NULL,
  `PRE_ICON` varchar(150) NOT NULL,
  `MENU` varchar(30) NOT NULL,
  `PATH_` varchar(300) NOT NULL,
  `PRIORITY_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_1`
--

INSERT INTO `menu_1` (`ID_`, `PRE_ICON`, `MENU`, `PATH_`, `PRIORITY_`) VALUES
(1, 'icon_house_alt', 'Dashboard', 'web', 1),
(2, 'fa fa-users', 'Registration', 'x', 2),
(3, 'fa fa-money', 'Fees', 'x', 4),
(4, 'fa fa-users', 'Admission', 'x', 3);

-- --------------------------------------------------------

--
-- Table structure for table `menu_2_submenu`
--

CREATE TABLE `menu_2_submenu` (
  `SUBMENUID` int(11) NOT NULL,
  `PRE_ICON` varchar(150) NOT NULL,
  `SUBMENU` varchar(150) NOT NULL,
  `PATH_` varchar(300) NOT NULL,
  `PRIORITY` int(11) NOT NULL,
  `ID_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_2_submenu`
--

INSERT INTO `menu_2_submenu` (`SUBMENUID`, `PRE_ICON`, `SUBMENU`, `PATH_`, `PRIORITY`, `ID_`) VALUES
(1, 'fa fa-child', 'New', 'web/stuRegistration', 1, 2),
(2, 'fa fa-pencil-square-o', 'Edit', 'web/editReg', 2, 2),
(3, 'fa fa-money', 'Add Fee head', 'fee', 3, 3),
(4, 'fa fa-money', 'Flexible head', 'fee/flexibleFee', 3, 3),
(5, 'fa fa-money', 'Add Fee to Class', 'fee/addStaticFeeToClass', 4, 3),
(6, 'fa fa-user', 'New Admission', 'adm/stuAdmission', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `online_registration`
--

CREATE TABLE `online_registration` (
  `regid` int(11) NOT NULL,
  `FULLNAME` varchar(150) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `FATHER` varchar(150) NOT NULL,
  `NATIONALITY` varchar(25) NOT NULL,
  `STUDENT_INTEREST` varchar(120) NOT NULL,
  `ADMISSION_FOR` varchar(25) NOT NULL,
  `CLASS_FOR_ADMISSION` varchar(5) NOT NULL,
  `APPLIED_YEAR` int(11) NOT NULL,
  `TRANSPORT_REQUIRED` varchar(5) NOT NULL,
  `LAST_SCHOOL_NAME` varchar(300) NOT NULL,
  `LAST_SCHOOL_GRADE` varchar(50) NOT NULL,
  `ADDRESS_` varchar(250) NOT NULL,
  `CITY_` varchar(50) NOT NULL,
  `PINCODE_` varchar(10) NOT NULL,
  `STATE_` varchar(50) NOT NULL,
  `COUNTRY_` varchar(50) NOT NULL,
  `MOBILE_` varchar(15) NOT NULL,
  `EMAIL_` varchar(100) NOT NULL,
  `DOR_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `register_with_us`
--

CREATE TABLE `register_with_us` (
  `regid` varchar(25) NOT NULL,
  `FULLNAME` varchar(150) NOT NULL,
  `FATHER` varchar(150) NOT NULL,
  `DOB_` varchar(150) NOT NULL,
  `PHOTO_` varchar(250) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `NATIONALITY` varchar(25) NOT NULL DEFAULT '-x-',
  `STUDENT_INTEREST` varchar(120) NOT NULL DEFAULT '-x-',
  `ADMISSION_FOR` varchar(25) NOT NULL,
  `CLASS_FOR_ADMISSION` varchar(5) NOT NULL,
  `APPLIED_YEAR` int(11) NOT NULL,
  `TRANSPORT_REQUIRED` varchar(5) NOT NULL,
  `LAST_SCHOOL_NAME` varchar(300) NOT NULL,
  `LAST_SCHOOL_GRADE` varchar(50) NOT NULL,
  `ADDRESS_` varchar(250) NOT NULL,
  `CITY_` varchar(50) NOT NULL,
  `PINCODE_` varchar(10) NOT NULL,
  `ZONE_` varchar(20) NOT NULL,
  `STATE_` varchar(50) NOT NULL,
  `COUNTRY_` varchar(50) NOT NULL,
  `MOBILE_` varchar(15) NOT NULL,
  `EMAIL_` varchar(100) NOT NULL,
  `KNOWN_SOURCE_` varchar(200) NOT NULL,
  `PASSWORD_` varchar(25) NOT NULL DEFAULT '123456',
  `DOR_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `USERNAME_` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register_with_us`
--

INSERT INTO `register_with_us` (`regid`, `FULLNAME`, `FATHER`, `DOB_`, `PHOTO_`, `GENDER`, `NATIONALITY`, `STUDENT_INTEREST`, `ADMISSION_FOR`, `CLASS_FOR_ADMISSION`, `APPLIED_YEAR`, `TRANSPORT_REQUIRED`, `LAST_SCHOOL_NAME`, `LAST_SCHOOL_GRADE`, `ADDRESS_`, `CITY_`, `PINCODE_`, `ZONE_`, `STATE_`, `COUNTRY_`, `MOBILE_`, `EMAIL_`, `KNOWN_SOURCE_`, `PASSWORD_`, `DOR_`, `USERNAME_`) VALUES
('2016031001', 'NAVEEN TEWARI', 'MR S C TEWARI', '1983-10-20', '2016031001.jpg', 'M', '-x-', '-x-', 'Day Boarder', '4', 2016, 'YES', 'ST PAULS', '3', 'MATTAR CHAYA', 'HALDWANI', '263139', '1', 'UL', 'India', '0789508999', 'navtewari@gmail.com', 'Through Internet', '123456', '2016-03-08 08:48:14', 'naveen'),
('2016031002', 'Gunjan Mathur', 'VKM', '2016-12-31', '2016031002.jpg', 'F', '-x-', '-x-', 'Day Boarder', 'Nurse', 2017, 'YES', 'BeerShiva', '8', 'Haldwani', 'Haldwani', '26139', '1', 'UL', 'India', '9760020667', 'nitin.d12@gmail.com', 'Through Internet', '123456', '2016-03-12 06:11:57', 'nitin');

-- --------------------------------------------------------

--
-- Table structure for table `_id_`
--

CREATE TABLE `_id_` (
  `ID_` int(11) NOT NULL,
  `regid_` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_id_`
--

INSERT INTO `_id_` (`ID_`, `regid_`) VALUES
(1002, '2016031002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_1_classes`
--
ALTER TABLE `class_1_classes`
  ADD PRIMARY KEY (`CLASSID`);

--
-- Indexes for table `class_2_in_session`
--
ALTER TABLE `class_2_in_session`
  ADD PRIMARY KEY (`CLSSESSID`);

--
-- Indexes for table `class_3_class_wise_students`
--
ALTER TABLE `class_3_class_wise_students`
  ADD PRIMARY KEY (`ID_`),
  ADD KEY `regid` (`regid`),
  ADD KEY `CLSSESSID` (`CLSSESSID`),
  ADD KEY `USERNAME_` (`USERNAME_`);

--
-- Indexes for table `fee_1_type`
--
ALTER TABLE `fee_1_type`
  ADD PRIMARY KEY (`FEETYPEID`);

--
-- Indexes for table `fee_2`
--
ALTER TABLE `fee_2`
  ADD PRIMARY KEY (`feeID`),
  ADD KEY `regID` (`regID`,`date`),
  ADD KEY `userID` (`username`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `regID_2` (`regID`),
  ADD KEY `feetype` (`feetype`);

--
-- Indexes for table `fee_3_static_heads`
--
ALTER TABLE `fee_3_static_heads`
  ADD PRIMARY KEY (`ST_HD_ID`);

--
-- Indexes for table `fee_4_flexible_heads`
--
ALTER TABLE `fee_4_flexible_heads`
  ADD PRIMARY KEY (`FLX_HD_ID`);

--
-- Indexes for table `fee_5_add_flexi_head_to_students`
--
ALTER TABLE `fee_5_add_flexi_head_to_students`
  ADD PRIMARY KEY (`ADFLXFEESTUDID`);

--
-- Indexes for table `fee_6_invoice`
--
ALTER TABLE `fee_6_invoice`
  ADD PRIMARY KEY (`INVID`);

--
-- Indexes for table `fee_7_receipts`
--
ALTER TABLE `fee_7_receipts`
  ADD PRIMARY KEY (`RECPTID`);

--
-- Indexes for table `fee_8_class_fee`
--
ALTER TABLE `fee_8_class_fee`
  ADD PRIMARY KEY (`CFEEID`);

--
-- Indexes for table `fee_9_class_fee_split`
--
ALTER TABLE `fee_9_class_fee_split`
  ADD PRIMARY KEY (`CFEESPLITID`);

--
-- Indexes for table `fee_10_class_fee_in_a_session`
--
ALTER TABLE `fee_10_class_fee_in_a_session`
  ADD PRIMARY KEY (`CFEESESSID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`USERNAME_`);

--
-- Indexes for table `master_0_country_`
--
ALTER TABLE `master_0_country_`
  ADD PRIMARY KEY (`ABREV_`);

--
-- Indexes for table `master_1_zone_`
--
ALTER TABLE `master_1_zone_`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `master_2_zone_region`
--
ALTER TABLE `master_2_zone_region`
  ADD PRIMARY KEY (`ID_`);

--
-- Indexes for table `master_4_city_`
--
ALTER TABLE `master_4_city_`
  ADD PRIMARY KEY (`NAME_`);

--
-- Indexes for table `master_5_user_status`
--
ALTER TABLE `master_5_user_status`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Indexes for table `master_6_session`
--
ALTER TABLE `master_6_session`
  ADD PRIMARY KEY (`SESSID`);

--
-- Indexes for table `master_7_stud_personal`
--
ALTER TABLE `master_7_stud_personal`
  ADD PRIMARY KEY (`STUD_ID`),
  ADD KEY `regid` (`regid`);

--
-- Indexes for table `master_8_stud_academics`
--
ALTER TABLE `master_8_stud_academics`
  ADD PRIMARY KEY (`AC_ID`),
  ADD KEY `regid` (`regid`);

--
-- Indexes for table `master_9_stud_address`
--
ALTER TABLE `master_9_stud_address`
  ADD KEY `CITY_` (`CITY_`),
  ADD KEY `regid` (`regid`);

--
-- Indexes for table `master_10_stud_contact`
--
ALTER TABLE `master_10_stud_contact`
  ADD PRIMARY KEY (`CNTCT_ID`);

--
-- Indexes for table `menu_1`
--
ALTER TABLE `menu_1`
  ADD PRIMARY KEY (`ID_`);

--
-- Indexes for table `menu_2_submenu`
--
ALTER TABLE `menu_2_submenu`
  ADD PRIMARY KEY (`SUBMENUID`),
  ADD KEY `ID_` (`ID_`);

--
-- Indexes for table `online_registration`
--
ALTER TABLE `online_registration`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `register_with_us`
--
ALTER TABLE `register_with_us`
  ADD PRIMARY KEY (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_2_in_session`
--
ALTER TABLE `class_2_in_session`
  MODIFY `CLSSESSID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `class_3_class_wise_students`
--
ALTER TABLE `class_3_class_wise_students`
  MODIFY `ID_` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fee_2`
--
ALTER TABLE `fee_2`
  MODIFY `feeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fee_3_static_heads`
--
ALTER TABLE `fee_3_static_heads`
  MODIFY `ST_HD_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fee_4_flexible_heads`
--
ALTER TABLE `fee_4_flexible_heads`
  MODIFY `FLX_HD_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fee_5_add_flexi_head_to_students`
--
ALTER TABLE `fee_5_add_flexi_head_to_students`
  MODIFY `ADFLXFEESTUDID` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fee_8_class_fee`
--
ALTER TABLE `fee_8_class_fee`
  MODIFY `CFEEID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fee_9_class_fee_split`
--
ALTER TABLE `fee_9_class_fee_split`
  MODIFY `CFEESPLITID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `master_7_stud_personal`
--
ALTER TABLE `master_7_stud_personal`
  MODIFY `STUD_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `master_8_stud_academics`
--
ALTER TABLE `master_8_stud_academics`
  MODIFY `AC_ID` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `master_10_stud_contact`
--
ALTER TABLE `master_10_stud_contact`
  MODIFY `CNTCT_ID` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu_1`
--
ALTER TABLE `menu_1`
  MODIFY `ID_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu_2_submenu`
--
ALTER TABLE `menu_2_submenu`
  MODIFY `SUBMENUID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `online_registration`
--
ALTER TABLE `online_registration`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_2_submenu`
--
ALTER TABLE `menu_2_submenu`
  ADD CONSTRAINT `menuid_for_submenu` FOREIGN KEY (`ID_`) REFERENCES `menu_1` (`ID_`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
