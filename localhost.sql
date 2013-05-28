-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2012 at 08:24 PM
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
  `thumbnail` varchar(300) NOT NULL,
  `mname` varchar(1) NOT NULL,
  `about_me` text NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `fname`, `lname`, `email`, `password`, `sex`, `bday_month`, `bday_day`, `bday_year`, `thumbnail`, `mname`, `about_me`) VALUES
('<SCRIPT> alert(â€œXSSâ€); </SCRIPT>', 'Markjp', 'Cabelinga', 'markjopriz@gmail.com', 'cdb3fff2b74393b87188f6844b47c500fe5c9a12', 'female', 'December', 25, 1982, '', 'O', ''),
('mark', 'Mark', 'Capa', 'mark@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'male', 'November', 14, 1987, '', 'C', 'I am supermark!'),
('markjop', 'Mark', 'Katrina', 'mark@hello.com', 'cdb3fff2b74393b87188f6844b47c500fe5c9a12', 'male', 'November', 1, 1981, '', 'T', ''),
('markjopriz', 'Mark', 'Aaaa', 'markhello', 'cdb3fff2b74393b87188f6844b47c500fe5c9a12', 'male', 'February', 18, 1978, '', 'S', ''),
('mcgironella', 'Mc', 'Santos', 'fracturedtales@gmail.com', 'b8797b3406a9b97f68a019b3c5403272e0304237', 'female', 'November', 13, 1986, '', 'G', ' :D :D'),
('McUseR', 'Jejemon', 'Santos', 'jejemon@yahoo.com', 'ad930d57ccd78b88bf3d2ef72d416fc146e98154', 'female', 'November', 17, 1978, '', 'G', 'jejej'),
('sheenks', 'Sheena', 'Katrina', 'iamsheena@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'female', 'August', 12, 1987, '', 'K', 'If you make small things right, big things can happen.'),
('travelguy', 'Steven', 'Alzaga', 'travelguy@yahoo.com', 'f0fed7e4932302916b4e9c73fe47edcafeed7c44', 'male', 'March', 14, 1981, '', 'B', 'pogi');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `post_id`, `username`, `comment_topost`, `date`, `time`) VALUES
(35, 48, 'sheenks', 'Heeeeelllooo!!!', 'October 3, 2012 6:48', '00:00:00'),
(36, 48, 'sheenks', 'I want to go there!', 'October 3, 2012 6:49', '00:00:00'),
(37, 48, 'mark', 'Lets gooo!!! ', 'October 3, 2012 6:52', '00:00:00'),
(38, 49, 'mcgironella', 'bongga ka ikaw na!', 'October 3, 2012 7:10', '00:00:00'),
(39, 49, 'travelguy', 'di nga... ikaw kaya', 'October 3, 2012 7:12', '00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `comment`, `username`, `date`, `time`) VALUES
(48, 'This is soooo great!!! I want to go there! <3', 'sheenks', 'October 3, 2012 6:47 am', ''),
(50, 'ganda naman dyan. magkano budget papunta dyan?', 'travelguy', 'October 3, 2012 6:59 am', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE IF NOT EXISTS `testing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `path`) VALUES
(1, 'img/WWW.YIFY-TORRENTS.COM.jpg'),
(2, 'img/pokerlogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `thumbnail`
--

CREATE TABLE IF NOT EXISTS `thumbnail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
