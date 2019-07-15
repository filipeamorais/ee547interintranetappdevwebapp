-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2014 at 09:50 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rootsdb`
--
CREATE DATABASE `rootsdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rootsdb`;

-- --------------------------------------------------------

-- --
-- -- Table structure for table `tblaccount`
-- --

-- CREATE TABLE `tblaccount` (
--   `account_no` int(10) NOT NULL auto_increment,
--   `user_id` int(15) NOT NULL,
--   `username` varchar(50) NOT NULL,
--   `password` varchar(50) NOT NULL,
--   PRIMARY KEY  (`account_no`)
-- ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --
-- -- Dumping data for table `tblaccount`
-- --

-- INSERT INTO `tblaccount` (`account_no`, `user_id`, `username`, `password`) VALUES
-- (1, 444, 's', 's'),
-- (2, 111, 'we', 'we'),
-- (3, 555, 'x', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `prod_no` int(10) NOT NULL auto_increment,
  `prod_id` int(15) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_descr` text NOT NULL,
  `prod_cat` varchar(100) NOT NULL,
  `prod_price` float NOT NULL,
  `prod_quan` int(10) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY  (`prod_no`),
  UNIQUE KEY `prod_id` (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`prod_no`, `prod_id`, `prod_name`, `prod_descr`, `prod_cat`, `prod_price`, `prod_quan`, `date_added`) VALUES
(1, 0111, 'Brazil Plato Azul Farm', 'The Plato Azul Farm was established in the 1990''s in Cerrado Mineiro, a property with a suitable regime of rains, absence of frost, and with the latitude and longitude appropriate for the cultivation of coffee.', 'Whole Bean', 50, 50, '2019-07-14 00:28:15');

-- --------------------------------------------------------

-- --
-- -- Table structure for table `tblusers`
-- --

-- CREATE TABLE `tblusers` (
--   `user_no` int(10) NOT NULL auto_increment,
--   `user_id` int(15) NOT NULL,
--   `fname` varchar(50) NOT NULL,
--   `mname` varchar(50) NOT NULL,
--   `lname` varchar(50) NOT NULL,
--   `no_street` varchar(50) NOT NULL,
--   `city` varchar(50) NOT NULL,
--   `contact_no` bigint(15) NOT NULL,
--   `dob` date NOT NULL,
--   `age` int(3) NOT NULL,
--   `gender` varchar(6) NOT NULL,
--   `user_type` varchar(50) NOT NULL,
--   PRIMARY KEY  (`user_no`),
--   UNIQUE KEY `user_id` (`user_id`)
-- ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --
-- -- Dumping data for table `tblusers`
-- --

-- INSERT INTO `tblusers` (`user_no`, `user_id`, `fname`, `mname`, `lname`, `no_street`, `city`, `contact_no`, `dob`, `age`, `gender`, `user_type`) VALUES
-- (3, 222, 'wawx', 'wowx', 'asdx', 'www', 'sss', 1231231, '2002-02-03', 20, '', ''),
-- (4, 333, 'waw', 'wow', 'asd', 'www', 'xxxxxx', 1231231, '2002-02-03', 20, 'Male', ''),
-- (5, 444, 'Von', 'Vol', 'Volol', '123 Magallanes Street', 'Surigao City', 9090909099, '2002-02-03', 20, 'Male', 'Administrator'),
-- (6, 111, 'asd', 'Gwapo', 'ss', '123 Magallanes Street', 'Surigao City', 1111111111, '2002-02-03', 14, 'Female', ''),
-- (7, 555, 'we', 'we', 'we', 'asd', 'asd', 123, '2002-12-12', 12, 'Female', 'Clerk');
