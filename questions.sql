-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2016 at 07:45 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `cr_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `cr_time`, `status`) VALUES
(1, 'Hi, can I know your name?', '2016-05-19 06:06:04', 0),
(2, 'Hi <span id="answer"></span>,  which domestic service/s you use?', '2016-05-19 06:06:40', 0),
(3, 'Does s/he is comes on time daily?', '2016-05-19 06:46:59', 0),
(4, 'How many uninformed holidays/leave your domestic helper take in a month?', '2016-05-19 06:46:59', 0),
(5, 'Does your domestic helper provide replacement when they take leave?', '2016-05-19 06:48:51', 0),
(6, 'Rate work quality of your domestic helper according to your need or requirement?', '2016-05-19 06:48:51', 0),
(7, 'Does your domestic helper have police verification/previous employment verification proof?', '2016-05-19 06:50:18', 0),
(8, 'Have you paid any service or security charges to any agency to get domestic helper?', '2016-05-19 06:50:18', 0),
(9, 'Hi <span id="answer"></span>, can I get your contact number?', '2016-05-19 06:52:29', 0),
(10, 'Hey <span id="answer"></span>, what''s your email-id?', '2016-05-19 06:52:29', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
