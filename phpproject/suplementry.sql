-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2019 at 05:54 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suplementry`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `usn` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `proctor` varchar(50) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `sub6` varchar(50) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `semester`, `proctor`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
('', '', '', ' S.Ajitha', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
('1fg4', 'xsxxsx', '2', ' S.Ajitha', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
('1ms16mca23', 'sdwd', '3', ' Mrunalini M', 'MCAE01', 'MCAE02', 'MCAE03', 'MCAE04', 'NULL', 'NULL'),
('1ms17mc2', 'dfgh', '3', ' Dr. Evangelin Geetha D', 'MCA13', 'MCA25', 'NULL', 'NULL', 'NULL', 'NULL'),
('1ms17mca07', 'asha', '4', ' S.Ajitha', 'MCA42', 'MCA43', 'NULL', 'NULL', 'NULL', 'NULL'),
('1ms17mca08', 'xyz', '3', ' Dr. Evangelin Geetha D', 'MCA11', 'MCA13', 'MCA53', 'MCAE08', 'MCAE10', 'MCAE11'),
('1ms17mca41', 'ranjitha', '4', ' Sailaja Kumar K', 'MCA42', 'MCA43', 'NULL', 'NULL', 'NULL', 'NULL'),
('1ms17mca50', 'tarun', '4', 'Dr.Manish Kumar', 'MCA31', 'MCA33', 'MCA34', 'MCASC1', 'NULL', 'NULL'),
('1ms17mca55', 'yogi', '4', ' Nithya BN', 'MCA43', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
('1ms17mca65', 'xza', '4', 'Dr.Manish Kumar', 'MCA11', 'MCA25', 'MCA32', 'MCA43', 'MCA52', 'MCASC1'),
('1ms18mca52', 'divya', '4', ' Dr. Evangelin Geetha D', 'MCA52', 'MCA53', 'NULL', 'NULL', 'NULL', 'NULL'),
('1ms19mca5', 'vinayak', '3', ' Madhu Bhan', 'MCA16', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
('qw', '1', '4', ' Dr. Evangelin Geetha D', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
('ss', 'qssqqs', 'qs', 'Dr.Niranjanamurthy M', 'MCA32', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subcode` varchar(50) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `credits` varchar(50) NOT NULL,
  PRIMARY KEY (`subcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subcode`, `subname`, `credits`) VALUES
('MCA11', 'Problem Solving Using C (MCA11)', '3:1:1:0'),
('MCA12', 'Discrete Mathematics (MCA12)', '3:1:0:0'),
('MCA13', 'Fundamentals of Computer Organization (MCA13)', '4:0:0:0'),
('MCA14', 'Introduction to UNIX (MCA14)', '3:0:1:0'),
('MCA15', 'Professional Communication and Ethics(MCA15)', '3:1:0:0'),
('MCA16', 'Topics in Web Programming (MCA16)', '0:1:2:1'),
('MCA21', 'Object Oriented Programming with C++ (MCA21)', '3:1:1:0'),
('MCA22', 'Data Analysis using Spreadsheets(MCA22)', '0:1:2:1'),
('MCA23', 'Database Management Systems (MCA23)', '3:1:0:0'),
('MCA24', 'Data Structures Using C(MCA24)', '3:0:1:0'),
('MCA25', 'Management Information Systems (MCA25)', '4:0:0:0'),
('MCA31', 'operating Systems(MCA31)', '4:0:0:0'),
('MCA32', 'Design and Analysis of Algorithms(MCA32)', '3:0:1:0'),
('MCA33', 'Software Engineering(MCA33)', '4:0:0:0'),
('MCA34', 'Predictive Analytics(MCA34)', '3:0:1:0'),
('MCA41', 'Computer Networks(MCA41)', '3:0:1:0'),
('MCA42', 'object Oriented Modeling and Design Patterns(MCA42', '3:0:1:0'),
('MCA43', 'UNIX Systems Programming(MCA43)', '3:0:1:0'),
('MCA51', 'Mobile Application Development(MCA51)', '0:1:2:1'),
('MCA52', 'Information  Security(MCA52)', '3:0:1:0'),
('MCAE01', ' Programming in  Java (MCAE01)', '3:0:1:0'),
('MCAE02', 'Operations Research(MCAE02)', '3:1:0:0'),
('MCAE03', 'Machine Learning(MCAE03)', '3:0:1:0'),
('MCAE04', 'Web Programming with PHP and AJAX (MCAE04)', '0:1:2:1'),
('MCAE05', ' Computer Graphics and Animation (MCAE05)', '0:1:2:1'),
('MCAE06', 'Secure Coding in C and C++ (MCAE06)', '3:0:1:0'),
('MCAE07', 'NoSQL Databases(MCAE07)', '0:1:2:1'),
('MCAE08', 'Programming with Python(MCAE08)', '3:0:1:0'),
('MCAE09', 'Web Component Development with J2EE(MCAE09)', '0:1:2:1'),
('MCAE10', ' Programming with C#.Net (MCAE10)', '2:0:2:0'),
('MCAE11', 'Digital Forensic (MCAE11)', '3:0:1:0'),
('MCAE12', 'System Modeling and Simulation(MCAE12)', '3:0:1:0'),
('MCAE13', 'Cloud Computing(MCAE13)', '0:1:2:1'),
('MCAE14', ' Software Testing(MCAE14)', '3:0:1:0'),
('MCAE15', 'Programming IoT(MCAE15)', '0:1:2:1'),
('MCAE16', 'ASP.Net with C#(MCAE16)', '0:1:2:1'),
('MCASC1', 'Supply Chain Management(MCASC1)', '4:0:0:0'),
('MCASC2', 'Software Project Management(MCASC2)', '4:0:0:0'),
('MCASC3', 'Enterprise Resource Planning(MCASC3)', '4:0:0:0');
