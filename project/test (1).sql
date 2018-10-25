-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2016 at 04:09 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `2_marks`
--

CREATE TABLE IF NOT EXISTS `2_marks` (
  `Exam_Type` varchar(20) NOT NULL,
  `Sub_Id` int(11) NOT NULL,
  `2_Marks` varchar(1000) NOT NULL,
  `Priority` int(11) NOT NULL,
  `Difficulty` varchar(30) NOT NULL,
  PRIMARY KEY (`Exam_Type`,`Sub_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `3_marks`
--

CREATE TABLE IF NOT EXISTS `3_marks` (
  `Exam_Type` varchar(20) NOT NULL,
  `Sub_Id` int(11) NOT NULL,
  `3_Marks` varchar(1000) NOT NULL,
  `Priority` int(11) NOT NULL,
  `Difficulty` varchar(30) NOT NULL,
  PRIMARY KEY (`Exam_Type`,`Sub_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `6_marks`
--

CREATE TABLE IF NOT EXISTS `6_marks` (
  `Exam_Type` varchar(20) NOT NULL,
  `Sub_Id` int(11) NOT NULL,
  `6_Marks` varchar(1000) NOT NULL,
  `Priority` int(11) NOT NULL,
  `Difficulty` varchar(30) NOT NULL,
  PRIMARY KEY (`Exam_Type`,`Sub_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE IF NOT EXISTS `img` (
  `Exam_Type` varchar(20) NOT NULL,
  `Sub_Id` int(11) NOT NULL,
  `Img` mediumblob NOT NULL,
  `Priority` int(11) NOT NULL,
  `Difficulty` varchar(30) NOT NULL,
  PRIMARY KEY (`Exam_Type`,`Sub_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `privilege` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE IF NOT EXISTS `mcq` (
  `Exam_Type` varchar(20) NOT NULL,
  `Sub_Id` int(11) NOT NULL,
  `MCQ` varchar(1000) NOT NULL,
  `Priority` int(11) NOT NULL,
  `Difficulty` varchar(30) NOT NULL,
  PRIMARY KEY (`Exam_Type`,`Sub_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE IF NOT EXISTS `sub` (
  `Sub_Id` int(11) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  PRIMARY KEY (`Sub_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
