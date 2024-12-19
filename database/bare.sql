-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2017 at 05:01 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bare`
--
CREATE DATABASE `bare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bare`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `discussion_answer`
--

CREATE TABLE IF NOT EXISTS `discussion_answer` (
  `ans_id` int(5) NOT NULL AUTO_INCREMENT,
  `ques_id` int(5) NOT NULL,
  `user_id` int(6) NOT NULL,
  `answer` varchar(150) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `discussion_answer`
--

INSERT INTO `discussion_answer` (`ans_id`, `ques_id`, `user_id`, `answer`, `date`) VALUES
(1, 1, 1, 'works "created by people outside the professional art world... from their own depths and not from the stereotypes of Classical or fashionable art." ', '2017-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `discussion_question`
--

CREATE TABLE IF NOT EXISTS `discussion_question` (
  `ques_id` int(6) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `question` varchar(60) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ques_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `discussion_question`
--

INSERT INTO `discussion_question` (`ques_id`, `user_id`, `question`, `date`) VALUES
(1, 1, 'What are "brut art"?', '2017-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `news` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `date`) VALUES
(1, 'Modern Art Exhibition.. Coming Soon!!', '2017-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dateofbirth` date NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `currentstatus` varchar(10) NOT NULL,
  `address` varchar(70) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `gender`, `dateofbirth`, `mobile`, `email`, `password`, `currentstatus`, `address`, `state`, `city`, `pincode`, `status`) VALUES
(1, 'Sanya', 'Aru', 'female', '1995-12-02', '7376725313', 'sanu212rastogi@gmail.com', 'sanyaaru', 'Studying', 'Raja Bazar, Near Chowk', 'Uttar Pradesh', 'Lucknow', 226003, '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `uploaded_by` varchar(5) NOT NULL,
  `art_type` varchar(15) NOT NULL,
  `type` varchar(10) NOT NULL,
  `price` int(7) NOT NULL,
  `prop_photo` varchar(50) NOT NULL,
  `contact_person` varchar(30) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `uploaded_by`, `art_type`, `type`, `price`, `prop_photo`, `contact_person`, `contact_number`, `email`, `date`) VALUES
(1, 'user', 'Drawing', 'Showcase', 0, 'd1.jpg', 'Sanya Aru', '7376725313', 'sanu212rastogi@gmail', '2017-03-31'),
(4, 'admin', 'Collage', 'On Sale', 5000, 'collage5.jpg', 'Kartik Sinha', '7754965289', 'kartiksinha015@gmail', '2017-04-02');
