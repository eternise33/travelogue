-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2012 at 05:47 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_website`
--
CREATE DATABASE `project_website` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project_website`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `bday_month` varchar(12) NOT NULL,
  `bday_day` int(5) NOT NULL,
  `bday_year` int(5) NOT NULL,
  `thumbnail` mediumtext NOT NULL,
  `mname` varchar(1) NOT NULL,
  `about_me` text NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `fname`, `lname`, `email`, `password`, `sex`, `bday_month`, `bday_day`, `bday_year`, `thumbnail`, `mname`, `about_me`) VALUES
('eternise31', 'Lawrence', 'Santos', 'law@yahoo.com', 'befa1a4282e6d0f62d0577e85ea75c00c4963196', 'female', '12', 18, 1994, '', 'T', ''),
('eternise32', 'Lawrence', 'Santos', 'lawa@yahoo.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'female', '12', 18, 1993, '', 'T', ''),
('eternise33', 'Lawrence', 'Santos', 'lawrence_tsantos@yahoo.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'female', '12', 17, 1995, '', 'T', ''),
('Karen', 'Karen', 'Sison', 'karensison@yahoo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'female', '2', 16, 1994, '', 'T', ''),
('lsantos', 'Lawrence', 'Santos', 'lawa1@yahoo.com', 'befa1a4282e6d0f62d0577e85ea75c00c4963196', 'female', '12', 18, 1977, '', 'T', 'ako ay isang mabait na tao'),
('mikochan_noda', 'Mc gironella', 'Gironella', 'enishi_girl@yahoo.com', 'f3575a1c8845c6e51d52fce5dd3eafcca5c8ebe2', 'female', '11', 13, 1986, '', 'G', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog_topic`
--

CREATE TABLE IF NOT EXISTS `blog_topic` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `author` varchar(60) NOT NULL,
  `date posted` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(200) NOT NULL AUTO_INCREMENT,
  `post_id` int(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment_topost` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `post_id`, `username`, `comment_topost`, `date`, `time`) VALUES
(1, 19, '', '', 'October 1, 2012 8:47', '00:00:00'),
(2, 19, '', '', 'October 1, 2012 8:49', '00:00:00'),
(3, 16, 'eternise33', '', 'October 1, 2012 9:06', '00:00:00'),
(4, 16, 'eternise33', '', 'October 1, 2012 9:07', '00:00:00'),
(5, 16, 'eternise33', '', 'October 1, 2012 9:08', '00:00:00'),
(6, 16, 'eternise33', '', 'October 1, 2012 9:08', '00:00:00'),
(7, 19, 'eternise33', '', 'October 1, 2012 9:22', '00:00:00'),
(8, 19, 'eternise33', '', 'October 1, 2012 9:23', '00:00:00'),
(9, 19, 'eternise33', '', 'October 1, 2012 9:25', '00:00:00'),
(10, 19, 'eternise33', '', 'October 1, 2012 9:25', '00:00:00'),
(11, 35, 'eternise33', '', 'October 2, 2012 2:15', '00:00:00'),
(12, 41, 'eternise33', '', 'October 2, 2012 2:27', '00:00:00'),
(13, 41, 'eternise33', '', 'October 2, 2012 2:37', '00:00:00'),
(14, 41, 'eternise33', '', 'October 2, 2012 2:38', '00:00:00'),
(15, 41, 'eternise33', '', 'October 2, 2012 2:39', '00:00:00'),
(16, 41, 'eternise33', 'wala ka na ba magawa', 'October 2, 2012 2:40', '00:00:00'),
(17, 41, 'eternise33', 'wala ka na ba magawa', 'October 2, 2012 2:40', '00:00:00'),
(18, 40, 'eternise33', 'wala ka na ba magawa', 'October 2, 2012 4:17', '00:00:00'),
(19, 41, 'eternise33', '', 'October 2, 2012 4:21', '00:00:00'),
(20, 41, 'eternise33', '', 'October 2, 2012 4:22', '00:00:00'),
(21, 41, 'eternise33', '', 'October 2, 2012 4:28', '00:00:00'),
(22, 42, 'eternise33', '', 'October 2, 2012 4:31', '00:00:00'),
(23, 42, 'eternise33', '', 'October 2, 2012 4:33', '00:00:00'),
(24, 42, 'eternise33', 'tang ina kahapon ka pa', 'October 2, 2012 4:34', '00:00:00'),
(25, 42, 'eternise33', 'shiena ika na', 'October 2, 2012 7:34', '00:00:00'),
(26, 44, 'eternise33', 'ano bang buhasy to', 'October 2, 2012 4:50', '00:00:00'),
(27, 44, 'eternise33', 'wala ka matino magawa', 'October 2, 2012 4:52', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(12) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `comment`, `username`, `date`, `time`) VALUES
(16, 'ikaw na lawrence ikaw na', 'mikochan_noda', '0000-00-00', '00:20:12'),
(35, 'ikaw na ', 'eternise33', 'October 1, 2012 9:24 pm', ''),
(37, '', 'eternise33', 'October 2, 2012 2:23 am', ''),
(38, '', 'eternise33', 'October 2, 2012 2:23 am', ''),
(42, 'shit happens', 'eternise33', 'October 2, 2012 4:28 am', ''),
(43, 'ikaw na', 'eternise33', 'October 2, 2012 4:37 pm', ''),
(44, 'ikaw na', 'eternise33', 'October 2, 2012 4:38 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `practice`
--

CREATE TABLE IF NOT EXISTS `practice` (
  `int` int(200) NOT NULL DEFAULT '0',
  `path` mediumtext NOT NULL,
  PRIMARY KEY (`int`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practice`
--

INSERT INTO `practice` (`int`, `path`) VALUES
(0, 'img/WWW.YIFY-TORRENTS.COM.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `status` text NOT NULL,
  `user` varchar(255) NOT NULL DEFAULT '',
  `date` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
