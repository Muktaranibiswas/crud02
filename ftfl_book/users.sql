-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2014 at 04:41 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftfl_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(127) NOT NULL,
  `password` varchar(127) NOT NULL,
  `gender` char(7) NOT NULL,
  `byear` year(4) NOT NULL,
  `bmonth` varchar(20) NOT NULL,
  `bday` int(11) NOT NULL,
  `hobby` text NOT NULL,
  `ffood` text NOT NULL,
  `Comment` longtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `gender`, `byear`, `bmonth`, `bday`, `hobby`, `ffood`, `Comment`, `created`, `modified`, `dob`) VALUES
(1, 'Mukta', 'Biswas', 'muktacdp@yahoo.com', '123456', 'Female', 2001, '1', 0, 'other', 'barger', 'mnnnnnnnnnnnnnnnnnn', '2014-12-29 07:00:00', '2014-12-29 08:00:00', '0000-00-00'),
(2, 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', 'mmm@y.com', '123456789', 'Female', 0000, '', 0, 'travelling', 'chicken fry', 'bnvvbbbbbbbbbbbbn', '2014-12-29 09:03:21', '2014-12-29 09:03:21', '0000-00-00'),
(4, 'mmmmmmmm', 'bbbbbbbbbbbbb', 'muktacdpa@yahoo.com', '123456', 'Female', 0000, '', 0, 'reading', 'barger', 'bbbbbbbbbbbb', '2014-12-29 09:42:19', '2014-12-29 09:42:19', '0000-00-00'),
(5, 'qqqqqqqq', 'qqqqqqqq', 'nbbbbb@gmail.com', '123456', 'Female', 0000, '', 0, 'gardening', 'chicken fry', 'ghhhhhhhhhhhhhhh', '2014-12-29 09:46:21', '2014-12-29 09:46:21', '0000-00-00'),
(8, 'bvvvvvn', 'vbbbbbbbb', 'muktacdpa@yahoo.com', '0000000', 'Female', 2001, '1', 0, 'reading', 'snacks', 'eeeeeeeeeee', '2014-12-29 09:57:38', '2014-12-29 09:57:38', '0000-00-00'),
(9, 'cvvvvvvvvvv', 'vbbc', 'vbbbbb@gmail.com', '0000000', 'Male', 0000, '', 0, 'reading', 'barger', 'bvvvvvvvvvvv', '2014-12-29 09:58:09', '2014-12-29 09:58:09', '0000-00-00'),
(10, 'bnnnnnnm', 'bnnnnnnnnn', 'mmmnmnm@yahoo.com', '123456', 'Female', 0000, '', 0, 'reading', 'snacks', 'fffffffff', '2014-12-29 10:07:38', '2014-12-29 10:07:38', '0000-00-00'),
(11, 'bnnnnnnm', 'bnnnnnnnnn', 'mmmnmnm@yahoo.com', '123456', 'Male', 0000, '', 0, 'reading', 'barger', 'gfhghjjjjjjjjjjjjj', '2014-12-29 10:07:46', '2014-12-29 10:07:46', '0000-00-00'),
(12, 'mmmmmmmm', 'mmmmm', 'mmmmmmmm@yahoo.com', '123456', 'male', 0000, '', 0, 'reading', 'barger', 'gffffffffffff', '2014-12-29 10:56:02', '2014-12-29 10:56:02', '0000-00-00'),
(13, 'bnnnnnm', 'bnnm', 'muktacdpa@yahoo.com', '123456', 'Female', 0000, '', 0, 'other', 'barger', 'mmmmmmmmmmmm', '2014-12-29 11:01:46', '2014-12-29 11:01:46', '0000-00-00'),
(18, 'dfffffff', 'dsgdddg', 'ghtyyyyyyyyyyy', '123456', 'Male', 0000, '', 0, 'other', 'barger', 'vbbbbbbbbbbbb', '2014-12-29 12:05:40', '2014-12-29 12:05:40', '0000-00-00'),
(19, 'bnnnnnm', 'bnnnnnnnnnnnn', 'mmmm@yahoo.com', '123456', 'Male', 0000, '', 0, 'other', 'barger', 'hggggggggggggggggg', '2014-12-29 12:06:37', '2014-12-29 12:06:37', '0000-00-00'),
(20, 'bvvvvvvvv', 'bvvvvvvvvvvv', 'muktacdpa@yahoo.com', '123456', 'Female', 0000, '', 0, 'other', 'barger', 'bvvvvvvvvvvvvvvvvvv', '2014-12-29 12:08:26', '2014-12-29 12:08:26', '0000-00-00'),
(22, 'nmmmmmmmm', 'mnnnnn', 'mmmm@yahoo.com', '123456', 'Male', 2001, '1', 0, 'other', 'snacks', 'mnnnnnnnnnnnnn', '2014-12-29 12:26:56', '2014-12-29 12:26:56', '0000-00-00'),
(23, 'bvvvvvvvv', 'bvvvvvvvvn', 'mmmmm@yahoo.com', '123456', 'female', 2000, 'january', 2014, 'bnnnnnnn', 'nbbbbbbbb', 'bnnnnnnnnnnnnnnn', '2014-12-29 12:48:05', '2014-12-29 12:48:05', '0000-00-00'),
(24, 'ghhhhhhhhh', 'hggggggggggg', 'muktacdpa@yahoo.com', '123456', 'Male', 2001, '1', 0, 'other', 'pizza', 'ghhhhhhhhhhhhh', '2014-12-29 13:00:41', '2014-12-29 13:00:41', '0000-00-00'),
(28, 'vggggggggff', 'gfffffffff', 'muudoututuio@mju.com', '000000', 'Male', 2001, '1', 0, '', 'barger', 'hjjjjjjjjjjjj', '2014-12-29 14:36:16', '0000-00-00 00:00:00', '0000-00-00'),
(37, 'ccccc', 'bvvvv', 'mmm@y.com', '123456', 'Female', 0000, '', 0, 'other', 'chicken fry', 'cfgggggggggggg', '2014-12-29 15:09:43', '2014-12-29 15:09:43', '1997-04-30'),
(38, 'nm', 'nmmmmmmmmmmmmmm', '', '', '', 0000, '', 0, 'other', 'choose your fast food item', '', '2014-12-29 16:35:32', '2014-12-29 16:35:32', '1999-12-04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
