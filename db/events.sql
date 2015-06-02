-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2015 at 07:14 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `liitle_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`id` int(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `type`, `name`, `date`) VALUES
(1, 'Social', 'gaoo', '2334-04-04'),
(2, 'Social', 'gaoo', '2334-04-04'),
(3, 'sds', 'Cultural', '2334-04-04'),
(4, 'sds', 'Cultural', '2334-04-04'),
(5, 'none', 'Social', '0000-00-00'),
(6, 'none', 'Social', '0000-00-00'),
(7, 'sac', 'Social', '0000-00-00'),
(8, 'sd', 'national', '2015-05-14'),
(9, 'sac', 'Social', '0000-00-00'),
(10, 'sac', 'Social', '0000-00-00'),
(11, 'sac', 'Social', '0000-00-00'),
(12, 'sac', 'Social', '0000-00-00'),
(13, 'Social', 'sac', '0000-00-00'),
(14, 'Social', 'sac', '0000-00-00'),
(15, 'Social', 'sac', '0000-00-00'),
(16, 'Social', 'sac', '0000-00-00'),
(17, 'Social', 'sac', '0000-00-00'),
(18, 'Cultural', 'ghhg', '0000-00-00'),
(19, 'National', 'hfjjj', '2334-04-04'),
(20, 'national', 'home', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
