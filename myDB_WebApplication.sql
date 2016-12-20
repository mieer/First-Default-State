-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2015 at 03:42 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `WebApplication`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(1, 'mieer', '601f1889667efaebb33b8c12572835da3f027f78'),
(2, 'jon snow', '0feca720e2c29dafb2c900713ba560e03b758711');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dag` date DEFAULT NULL,
  `heartrate` varchar(45) DEFAULT NULL,
  `acceleration` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `dag`, `heartrate`, `acceleration`) VALUES
(1, '2015-01-01', '72.5', '5'),
(2, '2015-01-02', '64', '6'),
(3, '2015-01-03', '100', '4'),
(4, '2015-01-04', '93', '1'),
(5, '2015-01-05', '98', '8'),
(6, '2015-01-06', '84', '9'),
(7, '2015-01-07', '74', '5'),
(8, '2015-01-08', '96', '6'),
(9, '2015-01-09', '68', '4'),
(10, '2015-01-10', '57', '7'),
(11, '2015-01-11', '83', '7'),
(12, '2015-01-12', '83', '7'),
(13, '2015-01-13', '110', '12');
