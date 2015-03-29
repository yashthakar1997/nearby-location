-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2015 at 03:19 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ReEmail` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Conformpassword` varchar(30) NOT NULL,
  `Birthdate` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `Email`, `ReEmail`, `Password`, `Conformpassword`, `Birthdate`, `Location`) VALUES
(111, 'ef', 'efe', 'fefef', 'efef', 'efef', 'efefeff', 'efef'),
(111, 'ef', 'efe', 'fefef', 'efef', 'efef', 'efefeff', 'efef'),
(1111, 'wer', 'rg', 'gg', 'ggg', 'gg', 'gg', 'ggg');
