-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2015 at 05:58 AM
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
-- Table structure for table `msg_count`
--

CREATE TABLE IF NOT EXISTS `msg_count` (
`id` int(10) NOT NULL,
  `msg_jan` int(10) NOT NULL,
  `msg_feb` int(10) NOT NULL,
  `msg_mar` int(10) NOT NULL,
  `msg_apr` int(10) NOT NULL,
  `msg_may` int(10) NOT NULL,
  `msg_jun` int(10) NOT NULL,
  `msg_jul` int(10) NOT NULL,
  `msg_aug` int(10) NOT NULL,
  `msg_sep` int(10) NOT NULL,
  `msg_oct` int(10) NOT NULL,
  `msg_nov` int(10) NOT NULL,
  `msg_dec` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg_count`
--

INSERT INTO `msg_count` (`id`, `msg_jan`, `msg_feb`, `msg_mar`, `msg_apr`, `msg_may`, `msg_jun`, `msg_jul`, `msg_aug`, `msg_sep`, `msg_oct`, `msg_nov`, `msg_dec`) VALUES
(1, 1, 1, 1, 1, 30, 2, 1, 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg_count`
--
ALTER TABLE `msg_count`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg_count`
--
ALTER TABLE `msg_count`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
