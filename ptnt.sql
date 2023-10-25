-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2008 at 11:03 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ptnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(50) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `hospital_no` varchar(100) NOT NULL,
  `yschima_no` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `doctor_name`, `patient_name`, `date`, `time`, `hospital_no`, `yschima_no`, `age`, `sex`) VALUES
(1, 'dr sanda', 'bello', '2009-01-13', '17:00', '417', '418', '45', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE IF NOT EXISTS `diagnosis` (
  `diagnos_id` int(11) NOT NULL AUTO_INCREMENT,
  `weight` varchar(100) NOT NULL,
  `tempreture` varchar(100) NOT NULL,
  `bp` varchar(100) NOT NULL,
  `family_history` varchar(100) NOT NULL,
  `examination` varchar(100) NOT NULL,
  `test` varchar(100) NOT NULL,
  `complain_date` date NOT NULL,
  `hospital_no` varchar(100) NOT NULL,
  `complain` varchar(500) NOT NULL,
  PRIMARY KEY (`diagnos_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`diagnos_id`, `weight`, `tempreture`, `bp`, `family_history`, `examination`, `test`, `complain_date`, `hospital_no`, `complain`) VALUES
(1, '75', '36', '134/80', 'nil', 'nil', 'mp', '2009-01-01', '417', ''),
(2, '67', '65', '134/80', 'nil', 'nil', 'mp', '2009-01-01', '417', 'headache');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_patient_relation`
--

CREATE TABLE IF NOT EXISTS `doctor_patient_relation` (
  `relation_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `appointment` varchar(50) NOT NULL,
  PRIMARY KEY (`relation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `nhis_no` varchar(50) NOT NULL,
  `yschima_no` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `hospital_no` varchar(50) NOT NULL,
  `demographic` varchar(100) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `address`, `age`, `sex`, `nhis_no`, `yschima_no`, `phone_no`, `hospital_no`, `demographic`, `staff_name`, `registration_date`) VALUES
(1, 'santali', 'geidam', 50, 'male', '222', '223', '098', '224', 'geidam', 'admin', '2009-01-01 00:24:39'),
(2, 'bello', 'geidam', 45, 'male', '419', '418', '08095949622', '417', 'gu ', 'khalil', '2009-01-01 01:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_no` varchar(50) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `hospital_no`, `staff_name`, `date`, `time`) VALUES
(1, '224', 'admin', '2009-01-01', '01:24:39 am'),
(2, '417', 'khalil', '2009-01-01', '02:03:01 am');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `position`) VALUES
(1, 'khalil', '12345', 'Admin'),
(5, 'santali', '12345', 'Staff'),
(6, 'dr sanda', '', 'Select rank'),
(7, 'dr sanda', '123', 'Doctor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
