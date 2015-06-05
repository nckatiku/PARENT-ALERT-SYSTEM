-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2015 at 10:57 AM
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
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
`student_id` int(10) NOT NULL,
  `student` varchar(30) NOT NULL,
  `class` varchar(15) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `mother` varchar(30) NOT NULL,
  `father` varchar(50) NOT NULL,
  `guardian` varchar(30) NOT NULL DEFAULT 'none'
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `student`, `class`, `contact`, `mother`, `father`, `guardian`) VALUES
(1, 'AAKARSHA BHATNAGAR', 'Nursery', 8103939656, '', 'DEEPAK BHATNAGAR', 'none'),
(2, 'AANYA PATNI', 'Nursery', 8109198407, '', 'ARIHANT PATNI', 'none'),
(3, 'AARNA CHOUKSEY', 'Nursery', 9575916660, '', 'JAGDISH CHOUKSEY', 'none'),
(4, 'AARUSH CHOKSHI', 'Nursery', 9977136905, '', 'JILESH CHOKSHI', 'none'),
(5, 'AASHI KANSAL', 'Nursery', 8435100075, '', 'MAHESH KANSAL', 'none'),
(6, 'AKSHANSH MALVIYA', 'Nursery', 9753221790, '', 'VIKAS MALVIYA', 'none'),
(7, 'ALOK RASEUE', 'Nursery', 9644336804, '', 'RAVI RASEUE', 'none'),
(8, 'AANANYA YADAV', 'Nursery', 9926448847, '', 'SANDEEP YADAV', 'none'),
(9, 'ANJANI PUROHIT', 'Nursery', 8109469474, '', 'ANIL PUROHIT', 'none'),
(10, 'ARINDHAM SHRIWAS', 'Nursery', 9993345520, '', 'RAHUL SHRIWAS', 'none'),
(11, 'ARNAV YADAV', 'Nursery', 9685557788, '', 'RAJENDRA YADAV', 'none'),
(12, 'ARSH ANSARI', 'Nursery', 9039542346, '', 'NAFEES AHMAD ANSARI', 'none'),
(13, 'ATHARV SINGH KUSHWAH', 'Nursery', 9827261400, '', 'SURENDRA SINGH KUSHWAH', 'none'),
(14, 'ATHARV SINGHEL', 'Nursery', 7566702646, '', 'TILAK RAJ SINGHEL', 'none'),
(15, 'AVANYA AGRAWAL', 'Nursery', 9039864533, '', 'AASHISH KUMAR GARG', 'none'),
(16, 'AYUSHI THAKUR', 'Nursery', 9301868482, '', 'AMIT THAKUR', 'none'),
(17, 'AZLAAN HUSSAIN', 'Nursery', 9165267415, '', 'ASLAM HUSSAIN', 'none'),
(18, 'AARYA PRADHAN', 'Nursery', 9589871444, '', 'ASHISH PRADHAN', 'none'),
(19, 'ADARSH GUJAR', 'Nursery', 8305698845, '', 'NARSINGH GURJAR', 'none'),
(20, 'ANISHKA SHARMA', 'Nursery', 9893700556, '', 'MAHESH SHARMA', 'none'),
(21, 'AADITYA MALVIYA', 'Nursery', 9826851852, '', 'JITENDRA MALVIYA', 'none'),
(22, 'AARAV GOHIYA', 'Nursery', 9755675045, '', 'YOGESH GOHIYA', 'none'),
(23, 'AISHWARY SINGH CHOUHAN', 'Nursery', 9691625788, '', 'NILESH SINGH CHOUHAN', 'none'),
(24, 'DAKSH PATIL', 'Nursery', 9303966627, '', 'NEERAJ PATIL', 'none'),
(25, 'DEVANSHI BIYANI', 'Nursery', 9406869651, '', 'SUMIT BIYANI', 'none'),
(26, 'DEVANSH GOUR', 'Nursery', 9993546740, '', 'SANJAY GOUR', 'none'),
(27, 'DEVANSH RANA', 'Nursery', 9584413283, '', 'PIYUSH RANA', 'none'),
(28, 'DISHA GADEKAR', 'Nursery', 9098243639, '', 'SANTOSH GADEKAR', 'none'),
(29, 'DARSHAN VADNERE', 'Nursery', 9179682010, '', 'PANKAJ VADNERE', 'none'),
(30, 'DEVANSH DESHMUKH', 'Nursery', 8251054220, '', 'VITTHAL DESHMUKH', 'none'),
(31, 'DHRUVI YADAV', 'Nursery', 9926924389, '', ' MAHESH YADAV', 'none'),
(32, 'GARVITA PARASHAR', 'Nursery', 8821858887, '', 'YOGESH PARASHAR', 'none'),
(33, 'GITANSHI PANDIT', 'Nursery', 9977771043, '', 'MANISH PANDIT', 'none'),
(34, 'GOURANSH BANGAR', 'Nursery', 9630792302, '', 'NAND KISHORE BANGAR', 'none'),
(35, 'GARV JAIN', 'Nursery', 9669897409, '', 'ABHISHEK JAIN', 'none'),
(36, 'GOURAV KUSHWAH', 'Nursery', 8359856798, '', 'CHANDRA MOHAN KUSHWAH', 'none'),
(37, 'HANSHIKA RANAWAT', 'Nursery', 9926094520, '', 'ASHOK RANAWAT', 'none'),
(38, 'HARSHVARDHAN TAYADE', 'Nursery', 9098893852, '', 'HEMANT TAYADE', 'none'),
(39, 'HITASHI YADAV', 'Nursery', 8827532356, '', 'CHANDRASHEKHAR YADAV', 'none'),
(40, 'JAYESH JANGID', 'Nursery', 9575815150, '', 'PRAVEEN JANGID', 'none'),
(41, 'JYOTSANA PUROHIT', 'Nursery', 9993275974, '', 'GAUTAM KUMAR PUROHIT', 'none'),
(42, 'KASHVI SHRIVASTAV', 'Nursery', 9425956332, '', 'JITENDRA SHRIVASTAV', 'none'),
(43, 'KAVYA CHOUHAN', 'Nursery', 8085640981, '', 'RAJEEV CHOUHAN', 'none'),
(44, 'KAVYA MATHE', 'Nursery', 9907473860, '', 'VINAY MATHE', 'none'),
(45, 'KARNIKA PAWAR', 'Nursery', 9589126988, '', 'ASHOK PAWAR', 'none'),
(46, 'KANISHKA BOHRA', 'Nursery', 9200003620, '', 'KAILASH BOHRA', 'none'),
(47, 'KANAK KUSHWAH', 'Nursery', 7489568185, '', 'MANISH KUSHWAH', 'none'),
(48, 'KANISH PATEL', 'Nursery', 8462906106, '', 'JITENDRA PATEL', 'none'),
(49, 'KHUSHBOO BARADIYA', 'Nursery', 9691080888, '', 'SANTOSH BARADIYA', 'none'),
(50, 'LAVANYA CHOUHAN', 'Nursery', 8827666653, '', 'RAVINDRA SINGH CHOUHAN', 'none'),
(51, 'LAKSHAY CHOUKSEY', 'Nursery', 9907276161, '', 'VISHAL CHOUKSEY', 'none'),
(52, 'LAKSHIT JAIN', 'Nursery', 8989549801, '', 'SUMIT JAIN', 'none'),
(53, 'MOKSHIT PRAJAPAT', 'Nursery', 9009193763, '', 'SHALIGRAM PRAJAPAT', 'none'),
(54, 'MRATYUMJAY VERMA', 'Nursery', 9827352802, '', 'ADARSH VERMA', 'none'),
(55, 'MODH MUNEEB', 'Nursery', 9589996894, '', 'MODH MUSHTAG', 'none'),
(56, 'NAKSH NAWAL', 'Nursery', 9229133801, '', 'CHANDRASHEKHAR NAWAL', 'none'),
(57, 'NAMAN SINGH SHEKHAWAT', 'Nursery', 9009041818, '', 'JAY SINGH SHEKHAWAT', 'none'),
(58, 'NAZIYA KHAN', 'Nursery', 9893902567, '', 'MODH. SHARIF KHAN', 'none'),
(59, 'NILAKSHI MAHSKE', 'Nursery', 7898420705, '', 'DEVENDRA MAHSKE', 'none'),
(60, 'NISHCHAL PANDEY', 'Nursery', 7509536318, '', 'ANAND PANDEY', 'none'),
(61, 'NIYATI PARMAR', 'Nursery', 9009572896, '', 'VIJAY PARMAR', 'none'),
(62, 'NAITIK RAJPUT ', 'Nursery', 9575368396, '', 'ANAND RAJPUT', 'none'),
(63, 'OJASVI BHALAVE', 'Nursery', 9300742911, '', 'TRILOK SINGH BHALAVE', 'none'),
(64, 'PARTH KOLTE', 'Nursery', 9713618410, '', 'BHAVESH KOLTE', 'none'),
(65, 'PEHR CHOUHAN', 'Nursery', 9977446232, '', 'SARVPRIYA CHOUHAN', 'none'),
(66, 'PRAN MALVIYA', 'Nursery', 9669192645, '', 'YOGESH MALVIYA', 'none'),
(67, 'PRANAV GARG', 'Nursery', 9479555513, '', 'MANOJ GARG', 'none'),
(68, 'PRASUK GANDHI', 'Nursery', 9826843331, '', 'AASHISH GANDHI', 'none'),
(69, 'PRITY BISWAS', 'Nursery', 9883407401, '', 'SAMEER BISWAS', 'none'),
(70, 'PARTH SOLANKI', 'Nursery', 9098895672, '', 'LOVE SOLANKI', 'none'),
(71, 'PIYUSH SHARMA JANGID', 'Nursery', 9926036265, '', 'RAKESH SHARMA', 'none'),
(72, 'RAGINI GAUTAM ', 'Nursery', 9589991750, '', 'RAMSURESH GAUTAM', 'none'),
(73, 'RAJVEER SINGH CHANDEL', 'Nursery', 9826071730, '', 'TRILOK SINGH CHANDEL', 'none'),
(74, 'RANVEER YADAV', 'Nursery', 8871714717, '', 'RITESH YADAV', 'none'),
(75, 'RHYTHM SAHU', 'Nursery', 9617373453, '', 'HARISH SAHU', 'none'),
(76, 'RIDDHVIK SINGH SHEKHAWAT', 'Nursery', 9826735317, '', 'UDAY SHEKHAWAT', 'none'),
(77, 'RIZA SHEIKH', 'Nursery', 9589122500, '', 'SALIM SHEIKH', 'none'),
(78, 'RUSU TAMRAKAR', 'Nursery', 8224079778, '', 'SUNIL TAMRAKAR', 'none'),
(79, 'RAGHAV DALE', 'Nursery', 9753700479, '', 'AMIT DALE', 'none'),
(80, 'RISHABH SHIVHARE', 'Nursery', 9826440485, '', 'GIRENDRA SHIVHARE', 'none'),
(81, 'SANIDHYA AMBASELKAR', 'Nursery', 9424911912, '', 'SHAILESH AMBASELKAR', 'none'),
(82, 'SAUMYA KUSHWAH', 'Nursery', 9826495886, '', 'SANJAY KUSHWAH', 'none'),
(83, 'SHAGUN KUMAWAT', 'Nursery', 9826450001, '', 'PURAN KUMAWAT', 'none'),
(84, 'SHAMBHAVI CHOUHAN', 'Nursery', 9425319199, '', 'SHIVENDRA CHOUHAN', 'none'),
(85, 'SHRESHTHA CHOUHAN', 'Nursery', 9926188220, '', 'SATYENDRA SINGH CHOUHAN', 'none'),
(86, 'SHOURYA KUMAWAT', 'Nursery', 9753059395, '', 'RAJENDRA KUMAWAT', 'none'),
(87, 'SIDDHANT SONI', 'Nursery', 9009357658, '', 'HEMANT SONI', 'none'),
(88, 'SIMMI SAYED', 'Nursery', 8871344991, '', 'SIKANDAR SAYED', 'none'),
(89, 'SPARSH BARDE', 'Nursery', 8878163391, '', 'SACHIN BARDE', 'none'),
(90, 'SUNNY JAISWAL', 'Nursery', 9993598460, '', 'NIRAJ JAISWAL', 'none'),
(91, 'SAVIO ALPHONSE', 'Nursery', 9754199040, '', 'MR.ALPHONSE', 'none'),
(92, 'SHREYA BIRLA', 'Nursery', 9826627999, '', 'JARACHAND BIRLA', 'none'),
(93, 'SAKSHI KOUL', 'Nursery', 8982520083, '', 'AJAY KOUL', 'none'),
(94, 'SAMRUDDHI MITTAL', 'Nursery', 9479444577, '', 'ABHAY MITTAL', 'none'),
(95, 'SHRASTI DUBEY', 'Nursery', 8871880657, '', 'RAJKUMAR DUBEY', 'none'),
(96, 'SHOURYADITYA SINGH SIKARWAR', 'Nursery', 9617597061, '', 'DEVENDRA SINGH SIKARWAR', 'none'),
(97, 'SAJID HUSSAIN', 'Nursery', 9098872799, '', 'HUSSAIN AHMED', 'none'),
(98, 'TANISHKA SHARMA', 'Nursery', 9009553646, '', 'PRADEEP SHARMA', 'none'),
(99, 'TANISH GANDHI', 'Nursery', 9826843331, '', 'RAHUL GANDHI', 'none'),
(100, 'TARENDRA SINGH TOMAR', 'Nursery', 9009444889, '', 'BRAJESH TOMAR', 'none'),
(101, 'TITHI AGRAWAL', 'Nursery', 9479823400, '', 'SANJAY AGRAWAL ', 'none'),
(102, 'TANESH NARWAL', 'Nursery', 9752473195, '', 'PAWAN KUMAR NARWAL', 'none'),
(103, 'VANSH BENDWAL', 'Nursery', 9826497556, '', 'MAHENDRA BENDWAL', 'none'),
(104, 'VANYA KANSAL', 'Nursery', 7805087601, '', 'NAVIN KANSAL ', 'none'),
(105, 'VEDEHI GOUR', 'Nursery', 9926366626, '', 'RAHUL GOUR', 'none'),
(106, 'VEDIK YADAV', 'Nursery', 9826018089, '', 'DINESH YADAV', 'none'),
(107, 'VIRAJ DHERAN', 'Nursery', 9039511978, '', 'VINIT DHERAN', 'none'),
(108, 'YASH JEJURKAR', 'Nursery', 9993950810, '', 'SANTOSH RAO JEJURKAR', 'none'),
(109, 'YASHMITA CHOUDHARY', 'Nursery', 9826669666, '', 'VISHAL CHOUDHARY', 'none'),
(110, 'YATHARTH VERMA', 'Nursery', 9827265777, '', 'PRAKASH VERMA', 'none'),
(111, 'YASHIKA VERMA', 'Nursery', 9893309850, '', 'ASHOK VERMA', 'none'),
(112, 'ANUJ JAT', 'KG-II', 9977944044, '', '', 'none'),
(113, 'AKSHAT VARAT', 'KG-II', 9926133344, '', '', 'none'),
(114, 'ABHIGYAN KUMAR', 'KG-II', 8226031122, '', '', 'none'),
(115, 'AARAV SINGH JADON', 'KG-II', 9425311836, '', '', 'none'),
(116, 'AANANYA PUROHIT', 'KG-II', 9826673989, '', '', 'none'),
(117, 'AKSHANSH AGRAWAL', 'KG-II', 9300231463, '', '', 'none'),
(118, 'ARNAV MALVIYA', 'KG-II', 9977333458, '', '', 'none'),
(119, 'AARYAN RAGHUVANSHI', 'KG-II', 9893593338, '', '', 'none'),
(120, 'AARADHYA SONI', 'KG-II', 9826636673, '', '', 'none'),
(121, 'AKANSHI CHOPRA', 'KG-II', 9425064923, '', '', 'none'),
(122, 'AADITYA MISHRA', 'KG-II', 9893849482, '', '', 'none'),
(123, 'ANANYA NEGI', 'KG-II', 8878600172, '', '', 'none'),
(124, 'ANGET MALVIYA', 'KG-II', 9329464453, '', '', 'none'),
(125, 'ADITI KETHUNIYA', 'KG-II', 9893290561, '', '', 'none'),
(126, 'AYUSH SHARMA', 'KG-II', 9406666523, '', '', 'none'),
(127, 'AARADHYA KHALE', 'Playgroup', 9009094090, '', 'VISHAL KHALE', 'none'),
(128, 'AARUSH PATIL', 'Playgroup', 9826522878, '', 'SURAJ PATIL', 'none'),
(129, 'ABHINAV KUMAR', 'Playgroup', 9009988780, '', 'PRAMOD KUMAR', 'none'),
(130, 'ANISHKA PAL', 'Playgroup', 9981437461, '', 'NAVIN PAL', 'none'),
(131, 'ANSHUL VERMA', 'Playgroup', 9165331111, '', 'MAHESH VERMA', 'none'),
(132, 'ARYAN MANDOLA', 'Playgroup', 8085444378, '', '', 'none'),
(133, 'ANVI TALDER', 'Playgroup', 9826098003, '', '', 'none'),
(134, 'ADITI RAUT', 'Playgroup', 9575301803, '', 'GANESH RAUT', 'none'),
(135, 'AADIV SINJONIYA', 'Playgroup', 9827250720, '', 'MUKESH SINJONIYA', 'none'),
(136, 'ANUSHREE PAL', 'Playgroup', 9826021122, '', 'SUNIL PAL', 'none'),
(137, 'ABHYUDAYA DANDERWAL', 'Playgroup', 9039802117, '', 'RAVINDRA DANDERWAL', 'none'),
(138, 'ANJALI LOGRE', 'Playgroup', 8602206069, '', 'JITENDRA LOGRE', 'none'),
(139, 'ANAY JOSHI', 'Playgroup', 9977262807, '', 'SAMIR JOSHI', 'none'),
(140, 'AAARADHYA SIKARWAR', 'Playgroup', 8827991007, '', 'LOKENDRA SIKARWAR', 'none'),
(141, 'ANSH PAL', 'Playgroup', 9826550844, '', 'VIRENDRA PAL', 'none'),
(142, 'AARAV UPADHYAY ', 'Playgroup', 8818885057, '', 'ANIL UPADHYAY', 'none'),
(143, 'ADITI MALVIYA', 'Playgroup', 9826851852, '', 'JITENDRA MALVIYA', 'none'),
(144, 'BHAVYA SHARMA', 'Playgroup', 9302255664, '', 'MANISH SHARMA', 'none'),
(145, 'DAKSH TRIVEDI', 'Playgroup', 9425125086, '', 'RAJENDRA TRIVEDI', 'none'),
(146, 'DAKSH SONI', 'Playgroup', 9826127187, '', 'NITIN SONI', 'none'),
(147, 'DARSH MANKAR', 'Playgroup', 9893435680, '', 'SAMESH MANKAR', 'none'),
(148, 'GUNNIKA JAIN', 'Playgroup', 8085677727, '', 'TAPAS JAIN', 'none'),
(149, 'GARVIT SONI', 'Playgroup', 9826671003, '', 'VISHAL SONI', 'none'),
(150, 'HARSHIT KAUSHAL', 'Playgroup', 9425959048, '', 'SAURABH KAUSHAL', 'none'),
(151, 'HIMANSH LOT', 'Playgroup', 9826022287, '', 'HEMRAJ LOT', 'none'),
(152, 'HARSHIT VISHWAKARMA', 'Playgroup', 9977777103, '', 'DEEPAK VISHWAKARMA', 'none'),
(153, 'HANA NAZ', 'Playgroup', 9329043153, '', 'SHAKEEL AHMED', 'none'),
(154, 'ISHA RAI', 'Playgroup', 9893748883, '', 'DINESH RAI', 'none'),
(155, 'KHUSHI BAIRAGI', 'Playgroup', 9009076997, '', 'DEEPAK BAIRAGI', 'none'),
(156, 'LAKSHYADITYA DANDERWAL', 'Playgroup', 9039802117, '', 'RAVINDRA DANDERWAL', 'none'),
(157, 'LABHANSHI SISODIYA', 'Playgroup', 9977759949, '', 'MANOJ SISODIYA', 'none'),
(158, 'MRINANK HAGDE', 'Playgroup', 9630093894, '', 'NITIN HAGDE', 'none'),
(159, 'MANAS SINGH THAKUR', 'Playgroup', 9826072278, '', 'SURAJ SINGH THAKUR', 'none'),
(160, 'NEEL ROY', 'Playgroup', 986033333, '', 'ANIMESH ROY', 'none'),
(161, 'OJASVANI PANCHOLI', 'Playgroup', 9806746353, '', 'SANDEEP PANCHOLI', 'none'),
(162, 'PRISHA THAKUR', 'Playgroup', 9993131336, '', 'RAVI SHANKAR SINGH', 'none'),
(163, 'RAKSHIT KUMAWAT', 'Playgroup', 9826082695, '', 'SUSHIL KUMAWAT', 'none'),
(164, 'RASHI PALSIKAR', 'Playgroup', 9329159848, '', 'AJIT PALSIKAR', 'none'),
(165, 'RHYTHM AGRAWAL', 'Playgroup', 9827500402, '', 'UMESH AGRAWAL', 'none'),
(166, 'RIDDHIMA KUMAWAT', 'Playgroup', 8120867775, '', 'MANOJ KUMAWAT', 'none'),
(167, 'RUDRA BHALEKAR', 'Playgroup', 9993110032, '', 'RAMESH BHALEKAR', 'none'),
(168, 'RAKSHIT PORWAL', 'Playgroup', 9713013145, '', 'SAURABH PORWAL', 'none'),
(169, 'SURYANSH VERMA', 'Playgroup', 9754221100, '', 'MANOHAR VERMA', 'none'),
(170, 'SHIVAM PRATAP SINGH CHOUHAN', 'Playgroup', 9893382696, '', 'RAKESH SINGH CHOUHAN', 'none'),
(171, 'SNIGDHA KUNDU', 'Playgroup', 9098788100, '', '', 'none'),
(172, 'SHABIHA PATEL', 'Playgroup', 9424880743, '', 'AMIT PATEL', 'none'),
(173, 'SHUBH VERMA', 'Playgroup', 9926009700, '', 'JAYANT VERMA', 'none'),
(174, 'SHAGUN CHOUHAN', 'Playgroup', 8889523079, '', 'NAVAL KISHORE CHOUHAN', 'none'),
(175, 'SATAKSHI RAGHUVANSHI', 'Playgroup', 9329672200, '', 'BHARAT SINGH RAGHUVANSHI', 'none'),
(176, 'TRISHA GUPTA', 'Playgroup', 9425070776, '', 'VISHAL GUPTA', 'none'),
(177, 'TEJASV THAKUR', 'Playgroup', 8819088888, '', 'MAHENDRA THAKUR', 'none'),
(178, 'VIRAJ LOKHANDE', 'Playgroup', 9827524027, '', 'YOGESH LOKHANDE', 'none'),
(179, 'VIRAT SINGH PAWAR', 'Playgroup', 9827543903, '', 'INDRAJEET SINGH PAWAR', 'none'),
(180, 'VIDHI SHARMA', 'Playgroup', 7697370940, '', 'RAJKUMAR SHARMA', 'none'),
(181, 'VEDANT MALVIYA', 'Playgroup', 9039325976, '', 'TRILOK CHANDRA MALVIYA', 'none'),
(182, 'VIRAT GUPTA', 'Playgroup', 8959585858, '', 'VIVEK GUPTA', 'none'),
(183, 'VIRAT KAKDE', 'Playgroup', 9753573415, '', 'MAHESH KAKDE', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
 ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=184;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
