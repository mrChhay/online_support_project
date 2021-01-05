-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2021 at 03:09 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

DROP TABLE IF EXISTS `adminlogin_tb`;
CREATE TABLE IF NOT EXISTS `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(60) NOT NULL,
  `a_email` varchar(60) NOT NULL,
  `a_password` varchar(60) NOT NULL,
  PRIMARY KEY (`a_login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'admin', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `asset_tb`
--

DROP TABLE IF EXISTS `asset_tb`;
CREATE TABLE IF NOT EXISTS `asset_tb` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) NOT NULL,
  `pdop` date NOT NULL,
  `pava` int(11) NOT NULL,
  `ptotal` int(11) NOT NULL,
  `poriginalcost` int(11) NOT NULL,
  `psellingcost` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `asset_tb`
--

INSERT INTO `asset_tb` (`pid`, `pname`, `pdop`, `pava`, `ptotal`, `poriginalcost`, `psellingcost`) VALUES
(1, 'cisco router', '2020-12-31', 5, 5, 800, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `assignwork_tb`
--

DROP TABLE IF EXISTS `assignwork_tb`;
CREATE TABLE IF NOT EXISTS `assignwork_tb` (
  `rno` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) NOT NULL,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `request_name` varchar(60) NOT NULL,
  `request_add1` text NOT NULL,
  `request_add2` text NOT NULL,
  `request_city` varchar(60) NOT NULL,
  `request_state` varchar(60) NOT NULL,
  `request_zip` int(11) NOT NULL,
  `request_email` varchar(60) NOT NULL,
  `request_mobile` bigint(20) NOT NULL,
  `assign_tech` varchar(60) NOT NULL,
  `assign_date` date NOT NULL,
  PRIMARY KEY (`rno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignwork_tb`
--

INSERT INTO `assignwork_tb` (`rno`, `request_id`, `request_info`, `request_desc`, `request_name`, `request_add1`, `request_add2`, `request_city`, `request_state`, `request_zip`, `request_email`, `request_mobile`, `assign_tech`, `assign_date`) VALUES
(1, 1, 'keyboard not working ', 'keyboard ', 'ahka ', 'st172 ', 'st123 ', 'Phnom Penh ', '172 ', 12000, '123@gmail.com', 1111111, 'tech1', '2020-12-23'),
(3, 7, 'monitor not working ', 'my monitor not working  ', 'monitor ', '1235 ', 'pp ', 'xvxvxv ', 'vvv ', 12000, '123@gmail.com', 999877, 'tech2', '2020-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

DROP TABLE IF EXISTS `customer_tb`;
CREATE TABLE IF NOT EXISTS `customer_tb` (
  `cusid` int(11) NOT NULL AUTO_INCREMENT,
  `cusname` varchar(100) NOT NULL,
  `cusadd` varchar(100) NOT NULL,
  `cpname` varchar(100) NOT NULL,
  `cpqty` int(11) NOT NULL,
  `cpeach` int(11) NOT NULL,
  `cptotal` int(11) NOT NULL,
  `cpdate` date NOT NULL,
  PRIMARY KEY (`cusid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`cusid`, `cusname`, `cusadd`, `cpname`, `cpqty`, `cpeach`, `cptotal`, `cpdate`) VALUES
(1, 'sell1', 'pp', '', 1, 1200, 1200, '2020-12-31'),
(2, 'sell2', 'sell2', 'cisco router', 1, 1200, 1200, '2020-12-31'),
(3, 'ahka', 'st172', 'cisco router', 1, 1200, 1200, '2020-12-31'),
(4, 'ahka', 'st172', 'cisco router', 1, 1200, 1200, '2020-12-31'),
(5, 'customer name', 'sfsfsfs', 'cisco router', 1, 1200, 1200, '2020-12-31'),
(6, 'customer name', 'sfsfsfs', 'cisco router', 1, 1200, 1200, '2020-12-31'),
(7, 'ahka', 'st172', 'cisco router', 1, 1200, 1200, '2020-12-31'),
(8, 'dgdfgdg', 'cxvxv', 'cisco router', 1, 1200, 1200, '2021-01-01'),
(9, 'customer name', 'sfsfsfs', 'cisco router', 1, 1200, 1200, '2021-01-01'),
(10, 'testingvv', 'st172', 'cisco router', 2, 1200, 1200, '2021-01-01'),
(11, 'sokha', '124', 'cisco router', 2, 1200, 1200, '2021-01-02'),
(12, 'customer name', 'sfsfsfs', 'cisco router', 1, 1200, 1200, '2021-01-05'),
(13, 'dgdfgdg', 'cxvxv', 'cisco router', 2, 1200, 1200, '2021-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `requesterlogin_db`
--

DROP TABLE IF EXISTS `requesterlogin_db`;
CREATE TABLE IF NOT EXISTS `requesterlogin_db` (
  `r_login_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(60) NOT NULL,
  `r_email` varchar(60) NOT NULL,
  `r_password` varchar(60) NOT NULL,
  PRIMARY KEY (`r_login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requesterlogin_db`
--

INSERT INTO `requesterlogin_db` (`r_login_id`, `r_name`, `r_email`, `r_password`) VALUES
(6, '222', '222@gmail.com', '2222'),
(5, '1111', '123@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest_tb`
--

DROP TABLE IF EXISTS `submitrequest_tb`;
CREATE TABLE IF NOT EXISTS `submitrequest_tb` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `request_name` varchar(60) NOT NULL,
  `request_add1` text NOT NULL,
  `request_add2` text NOT NULL,
  `request_city` varchar(60) NOT NULL,
  `request_state` varchar(60) NOT NULL,
  `request_zip` int(11) NOT NULL,
  `request_email` varchar(60) NOT NULL,
  `request_mobile` bigint(20) NOT NULL,
  `request_date` date NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `submitrequest_tb`
--

INSERT INTO `submitrequest_tb` (`request_id`, `request_info`, `request_desc`, `request_name`, `request_add1`, `request_add2`, `request_city`, `request_state`, `request_zip`, `request_email`, `request_mobile`, `request_date`) VALUES
(1, 'keyboard not working', 'keyboard', 'ahka', 'st172', 'st123', 'Phnom Penh', '172', 12000, '123@gmail.com', 1111111, '2020-12-12'),
(7, 'monitor not working', 'my monitor not working ', 'monitor', '1235', 'pp', 'xvxvxv', 'vvv', 12000, '123@gmail.com', 999877, '2020-12-28'),
(8, 'mouse not working', 'my mouse not working ', 'monitor', '1235', 'pp', 'xvxvxv', 'vvv', 12000, '123@gmail.com', 999877, '2020-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

DROP TABLE IF EXISTS `technician_tb`;
CREATE TABLE IF NOT EXISTS `technician_tb` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(100) NOT NULL,
  `emp_city` varchar(100) NOT NULL,
  `emp_mobile` bigint(20) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`emp_id`, `emp_name`, `emp_city`, `emp_mobile`, `emp_email`) VALUES
(1, 'tech1', 'Phnom Penh', 1111, 'tech11@gmail.com'),
(2, 'tech2', 'Phnom Penh', 1111111, 'tech2@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
