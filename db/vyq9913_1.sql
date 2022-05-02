-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2022 at 03:17 PM
-- Server version: 5.5.56
-- PHP Version: 5.4.45-0+deb7u8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vyq9913`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `f_name` varchar(40) DEFAULT NULL,
  `l_name` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `u_name` varchar(20) DEFAULT NULL,
  `p_word` varchar(255) DEFAULT NULL,
  `question` varchar(50) DEFAULT NULL,
  `answer` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`f_name`, `l_name`, `email`, `u_name`, `p_word`, `question`, `answer`) VALUES
('jameson', 'yeo', 'yeoj1092@gmail.com', 'test', '76592b9de6d38238a52a3651867871e5c670e6320a8ef46a84b5590f8933f33e', 'In what city were you born?', 'ta'),
('jameson', 'yeo', 'yeoj1092@gmail.com', 'tesing', '76592b9de6d38238a52a3651867871e5c670e6320a8ef46a84b5590f8933f33e', 'what high school did you attend?', 'ta'),
('jameson', 'yeo', 'yeoj1092@gmail.com', 'yeoj1092', '76592b9de6d38238a52a3651867871e5c670e6320a8ef46a84b5590f8933f33e', '', 'ta');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `ID` varchar(10) NOT NULL,
  `Make` varchar(40) DEFAULT NULL,
  `Model` varchar(40) DEFAULT NULL,
  `Price` decimal(8,2) DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`ID`, `Make`, `Model`, `Price`) VALUES
('00001', 'Hyandai', 'Accent', 2000.00),
('00002', 'Mercedece-Benz', '230E', 3000.00),
('00003', 'Holden', 'HD', 5000.00),
('115', 'BMW', '1234', 1234.00);

-- --------------------------------------------------------

--
-- Table structure for table `statuspost`
--

CREATE TABLE IF NOT EXISTS `statuspost` (
  `Statuscode` varchar(5) NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Share` varchar(7) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `p_like` varchar(20) DEFAULT NULL,
  `p_comments` varchar(20) DEFAULT NULL,
  `p_share` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Statuscode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statuspost`
--

INSERT INTO `statuspost` (`Statuscode`, `Status`, `Share`, `Date`, `p_like`, `p_comments`, `p_share`) VALUES
('S0001', 'Creating the database', 'Public', '2022-04-10', 'Allow Like', 'Allow Comments', 'Allow Share'),
('S0002', 'max length of status code', 'Friends', '2022-04-10', '', 'Allow Comments', ''),
('S0012', 'Testing for space ?', 'Friends', '2022-04-12', '', 'Allow Comments', ''),
('S0523', '     a', 'Friends', '2022-04-13', '', '', ''),
('S0532', 'testing new variables?', 'Friends', '2022-04-13', '', '', ''),
('S1234', 'Hello i am testing if there is 255 characters allowed to be inserted into the database and will I be able to stop it with an error message', 'Only Me', '2022-04-12', '', 'Allow Comments', ''),
('S2010', 'testing within date values', 'Friends', '2022-04-13', '', 'Allow Comments', ''),
('S3213', 'Yeah boi', 'Friends', '2022-04-13', '', '', ''),
('S3245', 'test date again ', 'Public', '2022-04-06', '', 'Allow Comments', ''),
('S6345', 'test date ', 'Public', '2022-04-13', '', 'Allow Comments', ''),
('S6666', 'Let us get an A Grade', 'Public', '2022-04-10', 'Allow Like', '', ''),
('S6969', 'Hello world', 'Public', '2022-04-13', 'Allow Like', 'Allow Comments', 'Allow Share'),
('S7676', 'Yes', 'Only Me', '2022-04-13', 'Allow Like', 'Allow Comments', 'Allow Share'),
('S7777', 'Sunday night Market', 'Public', '2022-04-10', 'Allow Like', '', ''),
('S8888', 'Hi', 'Friends', '2022-04-10', 'Allow Like', '', ''),
('S9123', '2394jjj130  jidskam', 'Public', '2022-04-13', '', '', ''),
('S9874', 'test ing pages', 'Friends', '2022-04-19', '', 'Allow Comments', ''),
('S9999', 'OMG', 'Public', '2022-04-10', 'Allow Like', 'Allow Comments', 'Allow Share');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
