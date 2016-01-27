-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2016 at 07:36 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `migs_`
--

-- --------------------------------------------------------

--
-- Table structure for table `bday_data`
--

CREATE TABLE `bday_data` (
  `BID` int(11) NOT NULL,
  `NAME_` varchar(100) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `PHOTO_` varchar(100) NOT NULL,
  `DOA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS` int(11) NOT NULL,
  `USERNAME_` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bday_data`
--

INSERT INTO `bday_data` (`BID`, `NAME_`, `DOB`, `PHOTO_`, `DOA`, `STATUS`, `USERNAME_`) VALUES
(1, 'Gunjan Mathur', '2016-01-27', '1.jpg', '2016-01-27 16:52:18', 1, 'nitin'),
(2, 'Nitin Deepak', '1978-11-13', '2.jpg', '2016-01-27 16:52:18', 1, 'nitin'),
(3, 'Mukesh Joshi', '2016-01-27', '3.jpg', '2016-01-27 17:19:43', 1, 'nitin'),
(4, 'Harsh Pant', '1976-12-01', '4.JPG', '2016-01-27 17:56:44', 1, 'nitin');

-- --------------------------------------------------------

--
-- Table structure for table `city_`
--

CREATE TABLE `city_` (
  `NAME_` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city_`
--

INSERT INTO `city_` (`NAME_`) VALUES
('HALDWANI'),
('BAZPUR');

-- --------------------------------------------------------

--
-- Table structure for table `country_`
--

CREATE TABLE `country_` (
  `ABREV_` varchar(5) NOT NULL,
  `NAME_` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country_`
--

INSERT INTO `country_` (`ABREV_`, `NAME_`) VALUES
('AF', 'Afghanistan'),
('AL', 'Albania'),
('DZ', 'Algeria'),
('AS', 'American Samoa'),
('AD', 'Andorra'),
('AO', 'Angola'),
('AI', 'Anguilla'),
('AQ', 'Antarctica'),
('AG', 'Antigua and Barbuda'),
('AR', 'Argentina'),
('AM', 'Armenia'),
('AW', 'Aruba'),
('AU', 'Australia'),
('AT', 'Austria'),
('AZ', 'Azerbaijan'),
('BS', 'Bahamas'),
('BH', 'Bahrain'),
('BD', 'Bangladesh'),
('BB', 'Barbados'),
('BY', 'Belarus'),
('BE', 'Belgium'),
('BZ', 'Belize'),
('BJ', 'Benin'),
('BM', 'Bermuda'),
('BT', 'Bhutan'),
('BO', 'Bolivia'),
('BA', 'Bosnia and Herzegovina'),
('BW', 'Botswana'),
('BV', 'Bouvet Island'),
('BR', 'Brazil'),
('BQ', 'British Antarctic Territo'),
('IO', 'British Indian Ocean Terr'),
('VG', 'British Virgin Islands'),
('BN', 'Brunei'),
('BG', 'Bulgaria'),
('BF', 'Burkina Faso'),
('BI', 'Burundi'),
('KH', 'Cambodia'),
('CM', 'Cameroon'),
('CA', 'Canada'),
('CT', 'Canton and Enderbury Isla'),
('CV', 'Cape Verde'),
('KY', 'Cayman Islands'),
('CF', 'Central African Republic'),
('TD', 'Chad'),
('CL', 'Chile'),
('CN', 'China'),
('CX', 'Christmas Island'),
('CC', 'Cocos [Keeling] Islands'),
('CO', 'Colombia'),
('KM', 'Comoros'),
('CG', 'Congo - Brazzaville'),
('CD', 'Congo - Kinshasa'),
('CK', 'Cook Islands'),
('CR', 'Costa Rica'),
('HR', 'Croatia'),
('CU', 'Cuba'),
('CY', 'Cyprus'),
('CZ', 'Czech Republic'),
('CI', 'C'),
('DK', 'Denmark'),
('DJ', 'Djibouti'),
('DM', 'Dominica'),
('DO', 'Dominican Republic'),
('NQ', 'Dronning Maud Land'),
('DD', 'East Germany'),
('EC', 'Ecuador'),
('EG', 'Egypt'),
('SV', 'El Salvador'),
('GQ', 'Equatorial Guinea'),
('ER', 'Eritrea'),
('EE', 'Estonia'),
('ET', 'Ethiopia'),
('FK', 'Falkland Islands'),
('FO', 'Faroe Islands'),
('FJ', 'Fiji'),
('FI', 'Finland'),
('FR', 'France'),
('GF', 'French Guiana'),
('PF', 'French Polynesia'),
('TF', 'French Southern Territori'),
('FQ', 'French Southern and Antar'),
('GA', 'Gabon'),
('GM', 'Gambia'),
('GE', 'Georgia'),
('DE', 'Germany'),
('GH', 'Ghana'),
('GI', 'Gibraltar'),
('GR', 'Greece'),
('GL', 'Greenland'),
('GD', 'Grenada'),
('GP', 'Guadeloupe'),
('GU', 'Guam'),
('GT', 'Guatemala'),
('GG', 'Guernsey'),
('GN', 'Guinea'),
('GW', 'Guinea-Bissau'),
('GY', 'Guyana'),
('HT', 'Haiti'),
('HM', 'Heard Island and McDonald'),
('HN', 'Honduras'),
('HK', 'Hong Kong SAR China'),
('HU', 'Hungary'),
('IS', 'Iceland'),
('IN', 'India'),
('ID', 'Indonesia'),
('IR', 'Iran'),
('IQ', 'Iraq'),
('IE', 'Ireland'),
('IM', 'Isle of Man'),
('IL', 'Israel'),
('IT', 'Italy'),
('JM', 'Jamaica'),
('JP', 'Japan'),
('JE', 'Jersey'),
('JT', 'Johnston Island'),
('JO', 'Jordan'),
('KZ', 'Kazakhstan'),
('KE', 'Kenya'),
('KI', 'Kiribati'),
('KW', 'Kuwait'),
('KG', 'Kyrgyzstan'),
('LA', 'Laos'),
('LV', 'Latvia'),
('LB', 'Lebanon'),
('LS', 'Lesotho'),
('LR', 'Liberia'),
('LY', 'Libya'),
('LI', 'Liechtenstein'),
('LT', 'Lithuania'),
('LU', 'Luxembourg'),
('MO', 'Macau SAR China'),
('MK', 'Macedonia'),
('MG', 'Madagascar'),
('MW', 'Malawi'),
('MY', 'Malaysia'),
('MV', 'Maldives'),
('ML', 'Mali'),
('MT', 'Malta'),
('MH', 'Marshall Islands'),
('MQ', 'Martinique'),
('MR', 'Mauritania'),
('MU', 'Mauritius'),
('YT', 'Mayotte'),
('FX', 'Metropolitan France'),
('MX', 'Mexico'),
('FM', 'Micronesia'),
('MI', 'Midway Islands'),
('MD', 'Moldova'),
('MC', 'Monaco'),
('MN', 'Mongolia'),
('ME', 'Montenegro'),
('MS', 'Montserrat'),
('MA', 'Morocco'),
('MZ', 'Mozambique'),
('MM', 'Myanmar [Burma]'),
('NA', 'Namibia'),
('NR', 'Nauru'),
('NP', 'Nepal'),
('NL', 'Netherlands'),
('AN', 'Netherlands Antilles'),
('NT', 'Neutral Zone'),
('NC', 'New Caledonia'),
('NZ', 'New Zealand'),
('NI', 'Nicaragua'),
('NE', 'Niger'),
('NG', 'Nigeria'),
('NU', 'Niue'),
('NF', 'Norfolk Island'),
('KP', 'North Korea'),
('VD', 'North Vietnam'),
('MP', 'Northern Mariana Islands'),
('NO', 'Norway'),
('OM', 'Oman'),
('PC', 'Pacific Islands Trust Ter'),
('PK', 'Pakistan'),
('PW', 'Palau'),
('PS', 'Palestinian Territories'),
('PA', 'Panama'),
('PZ', 'Panama Canal Zone'),
('PG', 'Papua New Guinea'),
('PY', 'Paraguay'),
('YD', 'People''s Democratic Repub'),
('PE', 'Peru'),
('PH', 'Philippines'),
('PN', 'Pitcairn Islands'),
('PL', 'Poland'),
('PT', 'Portugal'),
('PR', 'Puerto Rico'),
('QA', 'Qatar'),
('RO', 'Romania'),
('RU', 'Russia'),
('RW', 'Rwanda'),
('RE', 'R'),
('BL', 'Saint Barth'),
('SH', 'Saint Helena'),
('KN', 'Saint Kitts and Nevis'),
('LC', 'Saint Lucia'),
('MF', 'Saint Martin'),
('PM', 'Saint Pierre and Miquelon'),
('VC', 'Saint Vincent and the Gre'),
('WS', 'Samoa'),
('SM', 'San Marino'),
('SA', 'Saudi Arabia'),
('SN', 'Senegal'),
('RS', 'Serbia'),
('CS', 'Serbia and Montenegro'),
('SC', 'Seychelles'),
('SL', 'Sierra Leone'),
('SG', 'Singapore'),
('SK', 'Slovakia'),
('SI', 'Slovenia'),
('SB', 'Solomon Islands'),
('SO', 'Somalia'),
('ZA', 'South Africa'),
('GS', 'South Georgia and the Sou'),
('KR', 'South Korea'),
('ES', 'Spain'),
('LK', 'Sri Lanka'),
('SD', 'Sudan'),
('SR', 'Suriname'),
('SJ', 'Svalbard and Jan Mayen'),
('SZ', 'Swaziland'),
('SE', 'Sweden'),
('CH', 'Switzerland'),
('SY', 'Syria'),
('ST', 'S'),
('TW', 'Taiwan'),
('TJ', 'Tajikistan'),
('TZ', 'Tanzania'),
('TH', 'Thailand'),
('TL', 'Timor-Leste'),
('TG', 'Togo'),
('TK', 'Tokelau'),
('TO', 'Tonga'),
('TT', 'Trinidad and Tobago'),
('TN', 'Tunisia'),
('TR', 'Turkey'),
('TM', 'Turkmenistan'),
('TC', 'Turks and Caicos Islands'),
('TV', 'Tuvalu'),
('UM', 'U.S. Minor Outlying Islan'),
('PU', 'U.S. Miscellaneous Pacifi'),
('VI', 'U.S. Virgin Islands'),
('UG', 'Uganda'),
('UA', 'Ukraine'),
('SU', 'Union of Soviet Socialist'),
('AE', 'United Arab Emirates'),
('GB', 'United Kingdom'),
('US', 'United States'),
('ZZ', 'Unknown or Invalid Region'),
('UY', 'Uruguay'),
('UZ', 'Uzbekistan'),
('VU', 'Vanuatu'),
('VA', 'Vatican City'),
('VE', 'Venezuela'),
('VN', 'Vietnam'),
('WK', 'Wake Island'),
('WF', 'Wallis and Futuna'),
('EH', 'Western Sahara'),
('YE', 'Yemen'),
('ZM', 'Zambia'),
('ZW', 'Zimbabwe'),
('AX', '');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
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
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`feeID`, `regID`, `date`, `Amount`, `username`, `feetype`, `feemode`, `bankname`, `dd_ch_no`, `dd_ch_date`, `DOE_`) VALUES
(1, '2016011001', '09/01/2016', 1000, 'operator1', 'Registration', 'Cash', 'x', 'x', 'x', '2016-01-22 15:46:16'),
(2, '2016011002', '13/01/2016', 1000, 'operator1', 'Registration', 'Cash', 'x', 'x', 'x', '2016-01-22 15:46:16'),
(18, '2016011004', '16/01/2016', 1000, 'operator1', 'Registration', 'Cash', 'x', 'x', 'x', '2016-01-22 15:46:16'),
(21, '2016011003', '17/01/2016', 1000, 'nitin', 'Registration', 'CHEQUE', 'HDFC', '258456', '06/01/2016', '2016-01-22 15:46:16'),
(22, '2016011006', '18/01/2016', 1000, 'nitin', 'Registration', 'CHEQUE', 'SBI', '258930', '12/01/2016', '2016-01-22 15:46:16'),
(23, '2016011007', '18/01/2016', 1000, 'nitin', 'Registration', 'DD', 'HDFC', '587469', '18/01/2016', '2016-01-22 15:46:16'),
(24, '2016011008', '18/01/2016', 1000, 'nitin', 'Registration', 'Cash', 'x', 'x', 'x', '2016-01-22 15:46:16'),
(25, '2016011009', '18/01/2016', 1000, 'nitin', 'Registration', 'Cash', 'x', 'x', 'x', '2016-01-22 15:46:16'),
(26, '2016011010', '18/01/2016', 1000, 'nitin', 'Registration', 'CHEQUE', 'State Bank of India', '258963', '10/01/2016', '2016-01-22 15:46:16');

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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID_` int(11) NOT NULL,
  `MENU` varchar(30) NOT NULL,
  `USER_STATUS` varchar(5) NOT NULL,
  `PRIORITY_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `newsevents`
--

CREATE TABLE `newsevents` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `NEWS` text NOT NULL,
  `PATH_ATTACH` varchar(150) NOT NULL,
  `FONTJI` varchar(250) NOT NULL,
  `DATE_` varchar(25) NOT NULL,
  `TIME_` varchar(25) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '1',
  `USERNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsevents`
--

INSERT INTO `newsevents` (`ID`, `SUBJECT`, `NEWS`, `PATH_ATTACH`, `FONTJI`, `DATE_`, `TIME_`, `STATUS`, `USERNAME`) VALUES
(1, 'Happy New Year 2016', 'Wishing you all a very happy new year 2016. May this brings happiness and prosperity all-over.', '1.jpg', 'Arial', '28/12/2015', '08:11:43pm', 0, 'nitin'),
(1004, 'Happy New Year 2016', 'Happy New Year 2016 to all. May god grace every human being on this earth', 'x', 'Arial', '16/01/2016', '08:29:57pm', 1, 'nitin');

-- --------------------------------------------------------

--
-- Table structure for table `news_id_`
--

CREATE TABLE `news_id_` (
  `ID_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `online_enquiry`
--

CREATE TABLE `online_enquiry` (
  `ENQ_ID` int(11) NOT NULL,
  `NAME_` varchar(150) NOT NULL,
  `DOB_` varchar(25) NOT NULL,
  `EMAIL_` varchar(150) NOT NULL,
  `GENDER_` varchar(10) NOT NULL,
  `ADMISSION_SESSION` varchar(25) NOT NULL,
  `ADMISSION_FOR` int(11) NOT NULL,
  `CLASS_FOR_ADMISSION` int(11) NOT NULL,
  `FATHER_GUARDIAN` varchar(150) NOT NULL,
  `ADDRESS_` varchar(250) NOT NULL,
  `CITY_` varchar(50) NOT NULL,
  `STATE_` varchar(50) NOT NULL,
  `COUNTRY_` varchar(50) NOT NULL,
  `MOBILE_PH` varchar(30) NOT NULL,
  `ENQ_IN_DETAIL` text NOT NULL,
  `SOURCE_KNOWING_US` varchar(50) NOT NULL,
  `DOR_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `online_enquiry`
--

INSERT INTO `online_enquiry` (`ENQ_ID`, `NAME_`, `DOB_`, `EMAIL_`, `GENDER_`, `ADMISSION_SESSION`, `ADMISSION_FOR`, `CLASS_FOR_ADMISSION`, `FATHER_GUARDIAN`, `ADDRESS_`, `CITY_`, `STATE_`, `COUNTRY_`, `MOBILE_PH`, `ENQ_IN_DETAIL`, `SOURCE_KNOWING_US`, `DOR_`) VALUES
(1, 'Nitin Deepak', '2015-12-21', 'nitin.d12@amrapali.ac.in', 'Male', '2017', 0, 4, 'V K Mathur', 'Mukul vihar\r\nTalli bamori', 'Haldwani', 'Uttarakhand', 'India', '09760020667', 'ok', 'Through Campus Visit', '2016-01-26 16:07:33'),
(2, 'Madhav Bhuddi', '2009-12-08', 'pawan.allianz@gmail.com', 'Male', '2016', 0, 1, 'Amit Bhuddi', 'Kartarpur,Gadarpur', 'Gadarpur', 'Uttarakhand', 'India', '09639041222', 'I want to know them fee structure and something more about your school. Thank you ', 'Through School Presentation', '2016-01-26 16:07:33');

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

--
-- Dumping data for table `online_registration`
--

INSERT INTO `online_registration` (`regid`, `FULLNAME`, `GENDER`, `FATHER`, `NATIONALITY`, `STUDENT_INTEREST`, `ADMISSION_FOR`, `CLASS_FOR_ADMISSION`, `APPLIED_YEAR`, `TRANSPORT_REQUIRED`, `LAST_SCHOOL_NAME`, `LAST_SCHOOL_GRADE`, `ADDRESS_`, `CITY_`, `PINCODE_`, `STATE_`, `COUNTRY_`, `MOBILE_`, `EMAIL_`, `DOR_`) VALUES
(1, 'Mukul Joshi', 'Male', 'Mr Joshi', 'India', 'Algo', 'Day Boarder', '10', 2018, 'YES', 'Campus School', 'A', 'Haldwani', 'Haldwani', '263139', 'Uttarakhand', 'India', '97856466', 'mukul@gmail.com', '0000-00-00 00:00:00'),
(2, 'Nitin Deepak', 'Male', 'VKM', 'INDIAN', 'Cricket', 'Day Boarder', '6', 2017, 'YES', 'Campus School', 'A', 'Devki shri kunj,\r\nHaldwani', 'Haldwani', '263139', 'Uttarakhand', 'India', '0976002066', 'nitin.d12@gmail.com', '2017-01-26 15:30:00');

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
('2016011001', 'Tani Vij', 'Anmol Vij', '2012-09-23', 'no-image.jpg', 'F', '-x-', '-x-', 'Day Boarder', '1', 0, 'YES', 'Mother India Public School , Bazpur', 'Nur', 'Rampaleela Farm, NH-74, Doraha, Bazpur, U.S.Nagar, Uttarakhand ', 'Bazpur', '262401', '1', 'UL', 'India', 'x', 'vij_anmol@yahoo.com', '', '123456', '2016-01-22 15:46:16', 'operator1'),
('2016011002', 'Dheeraj sharma', 'Cp sharma', '2016-11-13', 'no-image.jpg', 'M', '-x-', '-x-', 'Day Boarder', '5', 2016, 'YES', 'Gagahahs', 'Gsgsvsvsv', 'Zbzbsbbssbb', 'Bazpur', '262401', '1', 'UL', 'India', 'x', 'gauravvijofficial@gmail.com', '', '123456', '2016-01-22 15:46:16', 'operator1'),
('2016011003', 'gaurav', 'ak vij', '2016-11-13', '2016011003.jpg', 'F', '-x-', '-x-', 'Day Boarder', '5', 2016, 'YES', 'hgfvuyhvguy', 'nur', 'bazpur', 'bazpur', '262401', '1', 'UL', 'India', 'x', 'gauravvijofficial@gmail.com', '', '123456', '2016-01-22 15:46:16', 'operator1'),
('2016011004', 'Nandani Vij', 'Gaurav Vij', '2010-04-04', '2016011004.jpg', 'F', '-x-', '-x-', 'Day Boarder', '1', 2016, 'YES', 'Mother India Public School', '4', 'Rampaleela Farm, NH.74 Doraha Bazpur', 'Bazpur', '262401', '1', 'UL', 'India', '9874563214', 'gauravvijofficial@gmail.com', 'Through Internet', '123456', '2016-01-22 15:46:16', 'nitin'),
('2016011006', 'Nitin Deepak', 'Virendra Kumar Mathur', '1978-11-30', '2016011006.jpg', 'M', '-x-', '-x-', 'Week Boarder', '1', 2016, 'YES', 'Campus School, Pantnagar', 'U-KG', 'Devki shri kunj,\r\nHaldwani', 'Haldwani', '263139', '1', 'UL', 'India', '9760020667', 'nitin.d12@gmail.com', 'Through Internet', '123456', '2016-01-22 15:46:16', 'nitin'),
('2016011007', 'Nitin Deepak', 'VKM', '2016-12-31', '2016011007.png', 'M', '-x-', '-x-', 'Day Boarder', '1', 2016, 'YES', 'Campus School', 'A', 'Devki shri kunj,\r\nHaldwani', 'Haldwani', '263139', '1', 'UL', 'India', '9760020667', 'nitin.d12@gmail.com', 'Through Internet', '123456', '2016-01-22 15:46:16', 'nitin'),
('2016011008', 'Nitin Deepak', 'VKM', '2016-12-31', '2016011008.jpg', 'M', '-x-', '-x-', 'Day Boarder', '3', 2016, 'NO', 'Campus School', 'Class 2', 'Devki shri kunj,\r\nHaldwani', 'Haldwani', '263139', '1', 'DL', 'India', '0976002066', 'nitin.d12@gmail.com', 'Through Internet', '123456', '2016-01-22 15:46:16', 'nitin'),
('2016011009', 'Gunjan Mathur', 'Late G Pathak', '1990-12-31', '2016011009.jpg', 'F', '-x-', '-x-', 'Day Boarder', 'U-KG', 2016, 'YES', 'Beershiba', '1', 'Badripura', 'haldwani', '263139', '1', 'UL', 'India', '9690173666', 'vivek@gmail.com', 'Through Internet', '123456', '2016-01-22 15:46:16', 'nitin'),
('2016011010', 'Gunjan Mathur', 'G Pathak', '1987-05-19', '2016011010.jpg', 'F', '-x-', '-x-', 'Team Boarder', '3', 2016, 'YES', 'Beersheeba', 'Class 2', 'Devki Shreekunj, \r\nMukul Vihar,\r\nTalli Bamori,', 'Haldwani', '263139', '1', 'UL', 'India', '9634944223', 'gunjan.m19@gmail.com', 'Through Internet', '123456', '2016-01-22 15:46:16', 'nitin'),
('2016011011', 'Nitin Deepak', 'VKM', '2016-12-31', 'no-image.jpg', 'M', '-x-', '-x-', 'Day Boarder', '9', 2016, 'YES', 'Beersheeba', 'None', 'Devki shri kunj,\r\nHaldwani', 'Haldwani', '263139', '1', 'UL', 'India', '0976002066', 'nitin.d12@gmail.com', 'Through Internet', '123456', '2016-01-22 15:46:16', 'operator1');

-- --------------------------------------------------------

--
-- Table structure for table `state_`
--

CREATE TABLE `state_` (
  `NAME_` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state_`
--

INSERT INTO `state_` (`NAME_`) VALUES
('UTTARAKHAND'),
('UTTAR PRADESH'),
('DELHI'),
('HARAYANA'),
('KARNATAKA'),
('MAHARASHTRA');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `ST_ID` varchar(5) NOT NULL,
  `STATUS` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`ST_ID`, `STATUS`) VALUES
('adm', 'Admin'),
('deo', 'Data Entry Operator'),
('fc', 'Faculty'),
('meo', 'Marks Entry Operator'),
('nw', 'news');

-- --------------------------------------------------------

--
-- Table structure for table `zone_`
--

CREATE TABLE `zone_` (
  `ID` int(11) NOT NULL,
  `ZONE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zone_`
--

INSERT INTO `zone_` (`ID`, `ZONE`) VALUES
(1, 'NORTH'),
(2, 'SOUTH'),
(3, 'EAST'),
(4, 'WEST'),
(5, 'NORTH EAST'),
(6, 'CENTRAL');

-- --------------------------------------------------------

--
-- Table structure for table `zone_region`
--

CREATE TABLE `zone_region` (
  `ID_` int(11) NOT NULL,
  `ZONE_` int(11) NOT NULL,
  `REGION` varchar(10) NOT NULL,
  `REG_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zone_region`
--

INSERT INTO `zone_region` (`ID_`, `ZONE_`, `REGION`, `REG_NAME`) VALUES
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
(1011, '2016011011');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bday_data`
--
ALTER TABLE `bday_data`
  ADD PRIMARY KEY (`BID`),
  ADD KEY `USERNAME_` (`USERNAME_`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`feeID`),
  ADD KEY `regID` (`regID`,`date`),
  ADD KEY `userID` (`username`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `regID_2` (`regID`),
  ADD KEY `feetype` (`feetype`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`USERNAME_`),
  ADD KEY `USER_STATUS` (`USER_STATUS`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID_`);

--
-- Indexes for table `newsevents`
--
ALTER TABLE `newsevents`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STATUS` (`STATUS`);

--
-- Indexes for table `news_id_`
--
ALTER TABLE `news_id_`
  ADD PRIMARY KEY (`ID_`);

--
-- Indexes for table `online_enquiry`
--
ALTER TABLE `online_enquiry`
  ADD PRIMARY KEY (`ENQ_ID`);

--
-- Indexes for table `online_registration`
--
ALTER TABLE `online_registration`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `register_with_us`
--
ALTER TABLE `register_with_us`
  ADD PRIMARY KEY (`regid`),
  ADD KEY `USERNAME_` (`USERNAME_`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Indexes for table `zone_`
--
ALTER TABLE `zone_`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `zone_region`
--
ALTER TABLE `zone_region`
  ADD PRIMARY KEY (`ID_`);

--
-- Indexes for table `_id_`
--
ALTER TABLE `_id_`
  ADD PRIMARY KEY (`ID_`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bday_data`
--
ALTER TABLE `bday_data`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `feeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID_` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `online_enquiry`
--
ALTER TABLE `online_enquiry`
  MODIFY `ENQ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `online_registration`
--
ALTER TABLE `online_registration`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zone_region`
--
ALTER TABLE `zone_region`
  MODIFY `ID_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `usrstatus_for_login` FOREIGN KEY (`USER_STATUS`) REFERENCES `user_status` (`ST_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
