-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2015 at 07:12 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_account`
--

CREATE TABLE IF NOT EXISTS `b_account` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bank` varchar(30) NOT NULL,
  `account` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `b_account`
--

INSERT INTO `b_account` (`id`, `bank`, `account`) VALUES
(1, 'CBE', '1234567890123');

-- --------------------------------------------------------

--
-- Table structure for table `calculate_tax`
--

CREATE TABLE IF NOT EXISTS `calculate_tax` (
  `code` varchar(30) NOT NULL,
  `tax` int(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `paied` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculate_tax`
--

INSERT INTO `calculate_tax` (`code`, `tax`, `year`, `paied`) VALUES
('mer001', 75, '2015', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL,
  `target` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `complain`
--


-- --------------------------------------------------------

--
-- Table structure for table `hired`
--

CREATE TABLE IF NOT EXISTS `hired` (
  `code` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hired`
--

INSERT INTO `hired` (`code`, `first_name`, `last_name`, `gender`, `type`, `address`, `phone`, `email`, `username`, `password`) VALUES
('0010', 'xang', 'xang', 'male', 'admin', 'mekelle', 25134452, 'you@gmail.com', 'admin', 'admin'),
('emp001', 'Haftu', 'Bekele', 'male', 'employee', 'Mekelle', 945082274, 'had.hailu@gmail.com', 'emp', 'emp');

-- --------------------------------------------------------

--
-- Table structure for table `mar_doc`
--

CREATE TABLE IF NOT EXISTS `mar_doc` (
  `code` varchar(30) NOT NULL,
  `task` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mar_doc`
--

INSERT INTO `mar_doc` (`code`, `task`, `date`) VALUES
('', 'You Paied 5 Birr for 2015 ', '2015-06-05'),
('0007', 'You Paied  Birr for 2015 ', '2015-06-12'),
('0007', 'You Paied  Birr for 2015 ', '2015-06-12'),
('0007', 'You Paied  Birr for 2015 ', '2015-06-12'),
('0007', 'You Paied  Birr for 2015 ', '2015-06-12'),
('0007', 'You Paied  Birr for 2015 ', '2015-06-12'),
('0007', 'You Paied  Birr for 2015 ', '2015-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `merchants_info`
--

CREATE TABLE IF NOT EXISTS `merchants_info` (
  `code` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `intial_capital` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchants_info`
--

INSERT INTO `merchants_info` (`code`, `first_name`, `last_name`, `gender`, `address`, `intial_capital`, `email`, `phone`, `username`, `password`) VALUES
('mer001', 'Bekelle', 'Alula', 'male', 'Addis', 900, '0945082274', 0, 'mm', 'mm'),
('pa0010', 'fyori', 'lemlem', 'male', 'mekkelle', 4500, '343543', 0, 'f', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `payment_schedule`
--

CREATE TABLE IF NOT EXISTS `payment_schedule` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `intial` int(30) NOT NULL,
  `final` int(30) NOT NULL,
  `percent` int(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `payment_schedule`
--

INSERT INTO `payment_schedule` (`ID`, `intial`, `final`, `percent`, `date`) VALUES
(10, 2000, 4000, 10, '2015-06-12'),
(11, 4000, 6000, 15, '2015-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `replay`
--

CREATE TABLE IF NOT EXISTS `replay` (
  `ref` int(10) NOT NULL,
  `d_code` varchar(30) NOT NULL,
  `m_code` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  `date` date NOT NULL,
  `seen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replay`
--


-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_code` varchar(30) NOT NULL,
  `url` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `report`
--


-- --------------------------------------------------------

--
-- Table structure for table `schedule_date`
--

CREATE TABLE IF NOT EXISTS `schedule_date` (
  `i_amount` varchar(30) NOT NULL,
  `f_amount` varchar(30) NOT NULL,
  `tax` varchar(10) NOT NULL,
  `i_date` date NOT NULL,
  `f_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_date`
--

INSERT INTO `schedule_date` (`i_amount`, `f_amount`, `tax`, `i_date`, `f_date`) VALUES
('2500', '3500', 'A', '2015-05-06', '2015-09-08'),
('4000', '6000', 'B', '2015-05-06', '2015-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `tax_level`
--

CREATE TABLE IF NOT EXISTS `tax_level` (
  `intial` int(10) NOT NULL,
  `final` int(10) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_level`
--

INSERT INTO `tax_level` (`intial`, `final`, `level`) VALUES
(2500, 3500, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `yearly_income`
--

CREATE TABLE IF NOT EXISTS `yearly_income` (
  `code` varchar(30) NOT NULL,
  `income` int(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearly_income`
--

INSERT INTO `yearly_income` (`code`, `income`, `year`) VALUES
('pa0010', 3000, '2015'),
('mer001', 5000, '2015');
