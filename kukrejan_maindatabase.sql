-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2015 at 02:05 PM
-- Server version: 5.5.9-log
-- PHP Version: 5.4.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kukrejan_maindatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminLogin`
--

CREATE TABLE IF NOT EXISTS `adminLogin` (
  `id` int(11) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminLogin`
--

INSERT INTO `adminLogin` (`id`, `pass`) VALUES
(1, 'admin'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adminTable`
--

CREATE TABLE IF NOT EXISTS `adminTable` (
  `adminID` int(11) DEFAULT NULL,
  `adminFname` varchar(50) NOT NULL,
  `adminLname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminTable`
--

INSERT INTO `adminTable` (`adminID`, `adminFname`, `adminLname`) VALUES
(1, 'Naren', 'Kukreja'),
(2, 'Zaid', 'Kaleem');

-- --------------------------------------------------------

--
-- Table structure for table `citizen_status`
--

CREATE TABLE IF NOT EXISTS `citizen_status` (
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizen_status`
--

INSERT INTO `citizen_status` (`status`) VALUES
('International'),
('Canadian Citizen/Permanent Resident');

-- --------------------------------------------------------

--
-- Table structure for table `employerTable`
--

CREATE TABLE IF NOT EXISTS `employerTable` (
  `orgName` varchar(255) NOT NULL,
  `empType` varchar(255) NOT NULL,
  `contactPerson` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `website` varchar(255) NOT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employerTable`
--

INSERT INTO `employerTable` (`orgName`, `empType`, `contactPerson`, `address`, `website`, `telephone`, `email`) VALUES
('Apple', 'Company', 'Tim Cook', 'Cupertino, CA, United States of America', 'apple.com', '1-(800) 676-2775', 'apple@apple.com'),
('Google', 'Company', 'Larry Page', '1600 Mountain View, CA 94043, United States', 'www.google.com', '1-650-253-0000', 'google@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `internshipTable`
--

CREATE TABLE IF NOT EXISTS `internshipTable` (
  `internshipID` int(11) NOT NULL,
  `orgName` varchar(255) NOT NULL,
  `empPosition` varchar(255) DEFAULT NULL,
  `numPos` int(11) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `jobResp` varchar(255) DEFAULT NULL,
  `jobReq` varchar(255) DEFAULT NULL,
  `salaryInfo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internshipTable`
--

INSERT INTO `internshipTable` (`internshipID`, `orgName`, `empPosition`, `numPos`, `startDate`, `endDate`, `jobResp`, `jobReq`, `salaryInfo`) VALUES
(1, 'Google', 'QA Tester', 3, '2015-07-01', '2015-12-31', 'Quality Assurance', 'Understand Data', 5000),
(2, 'Apple', 'Developer', 3, '2015-07-01', '2015-12-31', 'Develop Apps', 'Understand Development Process', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `project_internship`
--

CREATE TABLE IF NOT EXISTS `project_internship` (
  `project_internship` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_internship`
--

INSERT INTO `project_internship` (`project_internship`) VALUES
('Project'),
('Internship');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE IF NOT EXISTS `student_login` (
  `id` int(11) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`id`, `pass`) VALUES
(102, 'pass123'),
(103, 'ayy');

-- --------------------------------------------------------

--
-- Table structure for table `student_personal_info`
--

CREATE TABLE IF NOT EXISTS `student_personal_info` (
  `id` int(11) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `term_admit` varchar(10) NOT NULL,
  `year_admit` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal` varchar(50) NOT NULL,
  `province` varchar(50) DEFAULT NULL,
  `country` varchar(25) NOT NULL,
  `citizen_status` varchar(50) NOT NULL,
  `eng_read` varchar(50) DEFAULT NULL,
  `eng_write` varchar(50) DEFAULT NULL,
  `eng_speak` varchar(50) DEFAULT NULL,
  `undergrad_text` varchar(255) DEFAULT NULL,
  `major` varchar(50) DEFAULT NULL,
  `undergrad_gpa` float DEFAULT NULL,
  `university` varchar(50) DEFAULT NULL,
  `unicountry` varchar(50) DEFAULT NULL,
  `grad_date` date DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `datefrom` date DEFAULT NULL,
  `dateto` date DEFAULT NULL,
  `position_com` varchar(50) DEFAULT NULL,
  `duties` varchar(255) DEFAULT NULL,
  `asp` varchar(50) DEFAULT NULL,
  `c_lang` varchar(50) DEFAULT NULL,
  `cpp` varchar(50) DEFAULT NULL,
  `csharp` varchar(50) DEFAULT NULL,
  `coldfusion` varchar(50) DEFAULT NULL,
  `flex` varchar(50) DEFAULT NULL,
  `java` varchar(50) DEFAULT NULL,
  `javascript` varchar(50) DEFAULT NULL,
  `lisp` varchar(50) DEFAULT NULL,
  `matlab` varchar(50) DEFAULT NULL,
  `mysql` varchar(50) DEFAULT NULL,
  `objc` varchar(50) DEFAULT NULL,
  `pascal_lang` varchar(50) DEFAULT NULL,
  `perl` varchar(50) DEFAULT NULL,
  `php` varchar(50) DEFAULT NULL,
  `prolog` varchar(50) DEFAULT NULL,
  `python` varchar(50) DEFAULT NULL,
  `r` varchar(50) DEFAULT NULL,
  `ruby` varchar(50) DEFAULT NULL,
  `sqloracle` varchar(50) DEFAULT NULL,
  `tcl` varchar(50) DEFAULT NULL,
  `tsql` varchar(50) DEFAULT NULL,
  `vbnet` varchar(50) DEFAULT NULL,
  `otherskill` varchar(50) DEFAULT NULL,
  `otherskillcomp` varchar(50) DEFAULT NULL,
  `project_internship` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_personal_info`
--

INSERT INTO `student_personal_info` (`id`, `fname`, `lname`, `gender`, `term_admit`, `year_admit`, `email`, `telephone`, `address`, `city`, `postal`, `province`, `country`, `citizen_status`, `eng_read`, `eng_write`, `eng_speak`, `undergrad_text`, `major`, `undergrad_gpa`, `university`, `unicountry`, `grad_date`, `company`, `datefrom`, `dateto`, `position_com`, `duties`, `asp`, `c_lang`, `cpp`, `csharp`, `coldfusion`, `flex`, `java`, `javascript`, `lisp`, `matlab`, `mysql`, `objc`, `pascal_lang`, `perl`, `php`, `prolog`, `python`, `r`, `ruby`, `sqloracle`, `tcl`, `tsql`, `vbnet`, `otherskill`, `otherskillcomp`, `project_internship`) VALUES
(103, 'Naren', 'Kukreja', 'Male', 'Fall', 2015, 'kukrejan@uwindsor.ca', '5192504912', '2425 St. Patrick''s', 'WINDSOR', 'N9E 4V9', 'Ontario', 'Canada', 'International', 'Fluent', 'Fluent', 'Fluent', ' Business & Computer Science', 'Double Major', 3.5, 'University of Windsor', 'Canada', '2016-01-01', 'Parcelhop', '2015-01-01', '2015-07-01', 'CTO', ' CTO Duties', 'Not Competent at all', 'Little Competent', 'Not Competent at all', 'Not Competent at all', 'Not Competent at all', 'Not Competent at all', 'Extremely Competent', 'Moderately Competent', 'Moderately Competent', 'Moderately Competent', 'Moderately Competent', 'Moderately Competent', 'Moderately Competent', 'Moderately Competent', 'Moderately Competent', 'Moderately Competent', 'Extremely Competent', 'Very Moderately Competent', 'Extremely Competent', 'Extremely Competent', 'Extremely Competent', 'Very Moderately Competent', 'Extremely Competent', 'Android', 'Very Moderately Competent', NULL),
(102, 'Zaid', 'Kaleem', 'Male', 'Winter', 2015, 'kaleemz@uwindsor.ca', '', '203 Sunset Ave', 'Windsor', 'N9B3N8', 'Ontario', 'Canada', 'Canadian Citizen/Permanent Resident', 'Very Good', 'Good', 'Very Good', ' Business Admin & CompSci', 'Double Major', 3.4, 'University of Windsor', 'Canada', '2015-12-13', 'ABC College', '2015-01-01', '2015-04-29', 'Analyst', ' Make excel spreadsheets.', 'Very Moderately Competent', 'Moderately Competent', 'Very Moderately Competent', 'Extremely Competent', 'Very Moderately Competent', 'Very Moderately Competent', 'Moderately Competent', 'Moderately Competent', 'Very Moderately Competent', 'Very Moderately Competent', 'Extremely Competent', 'Little Competent', 'Very Moderately Competent', 'Very Moderately Competent', 'Moderately Competent', 'Very Moderately Competent', 'Very Moderately Competent', 'Not Competent at all', 'Little Competent', 'Very Moderately Competent', 'Little Competent', 'Not Competent at all', 'Little Competent', 'Photoshop', 'Moderately Competent', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminLogin`
--
ALTER TABLE `adminLogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employerTable`
--
ALTER TABLE `employerTable`
  ADD PRIMARY KEY (`orgName`);

--
-- Indexes for table `internshipTable`
--
ALTER TABLE `internshipTable`
  ADD PRIMARY KEY (`internshipID`), ADD KEY `orgName` (`orgName`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `internshipTable`
--
ALTER TABLE `internshipTable`
ADD CONSTRAINT `internshipTable_ibfk_1` FOREIGN KEY (`orgName`) REFERENCES `employerTable` (`orgName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
