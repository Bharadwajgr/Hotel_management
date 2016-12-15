-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2012 at 04:34 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotelmgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(35) NOT NULL,
  `pass` varchar(35) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `user`, `pass`) VALUES
(1, 'root', 'asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `empid` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `date` date NOT NULL,
  `present` varchar(8) NOT NULL,
  KEY `empid` (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`empid`, `name`, `date`, `present`) VALUES
(12, 'Reshma Maria Saldanha', '2012-03-12', 'yes'),
(13, 'Shifa', '2012-03-12', 'no'),
(14, 'Prajwal', '2012-03-12', 'yes'),
(15, 'franklin', '2012-03-12', 'yes'),
(12, 'Reshma Maria Saldanha', '2012-03-13', 'no'),
(13, 'Shifa', '2012-03-13', 'yes'),
(14, 'Prajwal', '2012-03-13', 'no'),
(15, 'franklin', '2012-03-13', 'yes'),
(16, 'vani bhat', '2012-03-13', 'yes'),
(12, 'Reshma Maria Saldanha', '2012-03-14', 'no'),
(13, 'Shifa', '2012-03-14', 'no'),
(14, 'Prajwal', '2012-03-14', 'yes'),
(15, 'franklin', '2012-03-14', 'yes'),
(16, 'vani bhat', '2012-03-14', 'no'),
(17, 'rsahmi', '2012-03-14', 'yes'),
(12, 'Reshma Maria Saldanha', '2012-03-19', 'yes'),
(13, 'Shifa', '2012-03-19', 'yes'),
(14, 'Prajwal', '2012-03-19', 'yes'),
(15, 'franklin', '2012-03-19', 'no'),
(16, 'vani bhat', '2012-03-19', 'yes'),
(17, 'rsahmi', '2012-03-19', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `bankdetails`
--

CREATE TABLE IF NOT EXISTS `bankdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `bankname` varchar(30) NOT NULL,
  `balance` int(11) NOT NULL,
  `cardno` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`id`, `username`, `bankname`, `balance`, `cardno`, `password`) VALUES
(5, 'akshitha', 'Canara Bank', 335400, '11111', '22222'),
(6, '', 'Canara Bank', 25000, '33333', '44444'),
(7, '', 'SB', 14600, '111111', '222222'),
(8, '', 'SB', 25000, '333333', '44444'),
(9, '', 'Syndicate', 19800, '1111111', '2222222'),
(10, '', 'Syndicate', 25000, '3333333', '44444');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(27, 'maya', 'a@yahoo.com', 1234567890, 'hello hello hello'),
(28, 'tfrty', 'a@yahoo.com', 1234567890, 'swdcw\r\ndc\r\nsc\r\n'),
(31, 'shifa', 'shifa@gmail.com', 9880056892, 'asdfghjkl\r\nqwertyuiop\r\nzxcvbnm\r\ndghchjkjh\r\ncghvkgg'),
(32, 'reshma', 'reshu1990@yahoo.com', 9902644204, 'want to book hall for 3 days, is it possible'),
(33, 'akshitha', 'a@yahoo.com', 9901346680, 'helloooooo......');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `empid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `dob` date NOT NULL,
  `category` varchar(35) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `address` text NOT NULL,
  `joiningdate` date NOT NULL,
  `experience` int(11) NOT NULL,
  `photo` varchar(75) NOT NULL,
  PRIMARY KEY (`empid`),
  KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `name`, `dob`, `category`, `phone`, `email`, `address`, `joiningdate`, `experience`, `photo`) VALUES
(12, 'Reshma Maria Saldanha', '1990-11-09', 'manager', 9902644204, 'resh@gmail.com', 'Thakode Bettu House\r\nBelady Post\r\nKanthavara Village  ', '2012-03-11', 3, 'upload/aa.JPG'),
(13, 'Shifa', '1991-11-19', 'accountant', 9902435678, 'itz.shifa@gmail.com', 'shifa manzil\r\nnear new bus-stand\r\nBandimat Karkala', '2012-03-11', 1, 'upload/a4.JPG'),
(14, 'Prajwal', '1990-02-02', 'nonvegchef', 9902644563, 'praj@yahoo.com', 'sasx\r\nxsx\r\nxs', '2012-03-11', 1, 'upload/a.jpg'),
(15, 'franklin', '1991-03-10', 'generalmanager', 9902644203, 'franklinroystan@gmail.com', 'swddef\r\nfdgf\r\nddfd', '2012-03-08', 4, 'upload/AAA48.JPG'),
(16, 'vani bhat', '1990-02-28', 'supervisor', 9901346680, 'aaaa@yahoo.com', 'karkala...\r\nkarnatka..\r\nindia....', '2012-03-02', 1, 'upload/Clg52).jpg'),
(17, 'rsahmi', '1990-02-02', 'nonvegchef', 9901346680, 'Raksha@yahoo.in', 'mysore\r\nkarnataka', '2012-03-14', 7, 'upload/Clg day-2012 (52).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hallbooking`
--

CREATE TABLE IF NOT EXISTS `hallbooking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `ndays` int(11) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hallbooking`
--


-- --------------------------------------------------------

--
-- Table structure for table `monthlysalary`
--

CREATE TABLE IF NOT EXISTS `monthlysalary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employeetype` varchar(35) NOT NULL,
  `salary` int(11) NOT NULL,
  `daily_salary` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employeetype_2` (`employeetype`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `monthlysalary`
--

INSERT INTO `monthlysalary` (`id`, `employeetype`, `salary`, `daily_salary`) VALUES
(1, 'manager', 10000, '384.62'),
(2, 'supervisor', 5000, '192.31'),
(3, 'vegchef', 8000, '307.69'),
(4, 'nonvegchef', 10000, '384.62'),
(5, 'cook', 4000, '153.85'),
(6, 'homekeeping', 4000, '153.85'),
(7, 'waiter', 4000, '153.85'),
(8, 'generalmanager', 12000, '461.54'),
(9, 'security', 3500, '134.62'),
(10, 'storekeeper', 4000, '153.85'),
(11, 'receptionist', 3800, '146.15'),
(12, 'electrician', 4000, '153.85'),
(13, 'accountant', 4000, '153.85');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `transid` varchar(20) NOT NULL,
  `bankname` varchar(30) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `cardno` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=203 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `username`, `transid`, `bankname`, `amount`, `cardno`, `password`) VALUES
(154, 'akshitha', '1330876221', 'Canara Bank', '700.00', '11111', '22222'),
(155, 'akshitha', '1330876346', 'Canara Bank', '2800.00', '11111', '22222'),
(156, 'akshitha', '1330882035', 'Canara Bank', '25000.00', '11111', '22222'),
(157, 'qwerty', '1330898643', 'Canara Bank', '25000.00', '11111', '22222'),
(158, 'qwerty', '1330898797', 'Canara Bank', '25000.00', '11111', '22222'),
(159, 'qwerty', '1330898844', 'Canara Bank', '25000.00', '11111', '22222'),
(160, 'qwerty', '1330899657', 'Canara Bank', '25000.00', '11111', '22222'),
(161, 'qwerty', '1330899806', 'Canara Bank', '25000.00', '11111', '22222'),
(162, 'qwerty', '1330899845', 'Canara Bank', '25000.00', '11111', '22222'),
(163, 'qwerty', '1330899845', 'Canara Bank', '25000.00', '11111', '22222'),
(164, 'qwerty', '1330899944', 'Canara Bank', '25000.00', '11111', '22222'),
(165, 'qwerty', '1330900114', 'Canara Bank', '25000.00', '11111', '22222'),
(166, 'qwerty', '1330900114', 'Canara Bank', '25000.00', '11111', '22222'),
(167, 'qwerty', '1330901238', 'Canara Bank', '25000.00', '11111', '22222'),
(168, 'qwerty', '1330902017', 'Canara Bank', '2800.00', '11111', '22222'),
(169, 'akshitha', '1330922731', 'Canara Bank', '1400.00', '11111', '22222'),
(170, 'akshitha', '1330923410', 'Canara Bank', '1400.00', '11111', '22222'),
(171, 'akshitha', '1330923650', 'Canara Bank', '1400.00', '11111', '22222'),
(172, 'akshitha', '1330923650', 'Canara Bank', '1400.00', '11111', '22222'),
(173, 'akshitha', '1330955775', 'Canara Bank', '700.00', '11111', '22222'),
(174, 'akshitha', '1330956718', 'Canara Bank', '10500.00', '11111', '22222'),
(175, 'akshitha', '1330956962', 'Canara Bank', '25000.00', '11111', '22222'),
(176, 'akshitha', '1330957179', 'Canara Bank', '25000.00', '11111', '22222'),
(177, 'akshitha', '1330962365', 'Canara Bank', '3500.00', '11111', '22222'),
(178, 'akshitha', '1330965199', 'canara Bank', '3500.00', '11111', '22222'),
(179, 'akshitha', '1331007927', 'Canara Bank', '4200.00', '11111', '22222'),
(180, 'Shifa', '1331009374', 'Syndicate', '1000.00', '1111111', '2222222'),
(181, 'Shifa', '1331010742', 'Syndicate', '700.00', '1111111', '2222222'),
(182, 'Shifa', '1331028489', 'Syndicate', '700.00', '1111111', '2222222'),
(183, 'akshitha', '1331182728', 'Canara Bank', '700.00', '11111', '22222'),
(184, 'akshitha', '1331183603', 'Canara Bank', '25000.00', '11111', '22222'),
(185, 'akshitha', '1331185712', 'Canara Bank', '25000.00', '11111', '22222'),
(186, 'akshitha', '1331185784', 'Canara Bank', '700.00', '11111', '22222'),
(187, 'akshitha', '1331186253', 'Canara Bank', '700.00', '11111', '22222'),
(188, 'akshitha', '1331186824', 'Canara Bank', '25000.00', '11111', '22222'),
(189, 'akshitha', '1331186942', 'Canara Bank', '700.00', '11111', '22222'),
(190, 'akshitha', '1331186985', 'Canara Bank', '25000.00', '11111', '22222'),
(191, 'akshitha', '1331187836', 'Canara Bank', '50000.00', '11111', '22222'),
(192, 'akshitha', '1331187887', 'Canara Bank', '2100.00', '11111', '22222'),
(193, 'akshitha', '1331279883', 'Canara Bank', '700.00', '11111', '22222'),
(194, 'akshitha', '1331280350', 'Canara Bank', '700.00', '11111', '22222'),
(195, 'akshitha', '1331287042', 'Canara Bank', '700.00', '11111', '22222'),
(196, 'akshitha', '1331570963', 'Canara Bank', '700.00', '11111', '22222'),
(197, 'akshitha', '1331628792', 'Canara Bank', '700.00', '11111', '22222'),
(198, 'akshitha', '1331661249', 'canara Bank', '700.00', '11111', '22222'),
(199, 'akshitha', '1331706839', 'Canara Bank', '700.00', '11111', '22222'),
(200, 'akshitha', '1332135522', 'Canara Bank', '7000.00', '11111', '22222'),
(201, 'akshitha', '1332139497', 'Canara Bank', '700.00', '11111', '22222'),
(202, 'akshitha', '1332140068', 'Canara Bank', '3500.00', '11111', '22222');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(35) NOT NULL,
  `user` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(35) NOT NULL,
  `state` varchar(35) NOT NULL,
  `country` varchar(35) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `security_question` text NOT NULL,
  `answer` varchar(35) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `user`, `password`, `gender`, `city`, `state`, `country`, `phone`, `email`, `security_question`, `answer`) VALUES
(63, 'akshitha poojary', 'akshitha', 'asdfg', 'Female', 'karkala', 'karnatakaaa', 'india', 9980360135, 'akshitha.a.amin@gmail.com', 'Which is your favourite juice?', 'apple'),
(64, 'reshma', 'reshma', 'reshma', 'Female', 'karkala', 'karnataka', 'india', 9900223344, 'reshu1990@yahoo.com', 'which is your favourite dish?', 'daal'),
(82, 'Shifa', 'Shifa', 'shifa', 'Female', 'karkala', 'karnataka', 'india', 9886285646, 'shifa@gmail.com', 'which is your favourite hotel?', 'suraj'),
(83, 'aaaa', 'kripa', 'kripa', 'Female', 'karkala', 'karnataka', 'india', 9901346680, 'a@yahoo.com', 'which is your favourite dish?', 'apple'),
(84, 'akshitha', 'mayaa', 'mayaa', 'Female', 'karkala', 'karnataka', 'india', 9900345678, 'a@yahoo.com', 'which is your favourite dish?', 'mayaa'),
(85, 'gopi', 'gopii', 'gopii', 'Male', 'karkala', 'karnataka', 'india', 9901346680, 'a@yahoo.com', 'Which is your favourite juice?', 'saisuraj');

-- --------------------------------------------------------

--
-- Table structure for table `roombooking`
--

CREATE TABLE IF NOT EXISTS `roombooking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `roomno` int(11) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `ndays` int(11) NOT NULL,
  `category` varchar(35) NOT NULL,
  `type` varchar(35) NOT NULL,
  `option` varchar(35) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `roombooking`
--

INSERT INTO `roombooking` (`id`, `username`, `roomno`, `checkindate`, `checkoutdate`, `ndays`, `category`, `type`, `option`, `rate`) VALUES
(20, 'akshitha', 101, '2012-03-19', '2012-03-19', 1, 'room', 'single', 'nonac', '700.00'),
(21, 'akshitha', 102, '2012-03-19', '2012-03-21', 3, 'room', 'single', 'nonac', '700.00'),
(22, 'akshitha', 103, '2012-03-21', '2012-03-23', 3, 'room', 'single', 'nonac', '700.00');

-- --------------------------------------------------------

--
-- Table structure for table `roomtypes`
--

CREATE TABLE IF NOT EXISTS `roomtypes` (
  `roomno` int(11) NOT NULL,
  `roomtype` varchar(35) NOT NULL,
  `ac` varchar(6) NOT NULL DEFAULT 'Non ac',
  PRIMARY KEY (`roomno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomtypes`
--

INSERT INTO `roomtypes` (`roomno`, `roomtype`, `ac`) VALUES
(100, 'single', 'Non ac'),
(101, 'single', 'Non ac'),
(102, 'single', 'Non ac'),
(103, 'single', 'Non ac'),
(104, 'single', 'Non ac'),
(105, 'single', 'Non ac'),
(106, 'single', 'Non ac'),
(107, 'single', 'Non ac'),
(108, 'single', 'Non ac'),
(109, 'single', 'Non ac'),
(110, 'single', 'Non ac'),
(111, 'single', 'Ac'),
(112, 'single', 'Ac'),
(113, 'single', 'Ac'),
(114, 'single', 'Ac'),
(115, 'single', 'Ac'),
(116, 'single', 'Ac'),
(117, 'single', 'Ac'),
(118, 'single', 'Ac'),
(119, 'single', 'Ac'),
(120, 'single', 'Ac'),
(121, 'deluxe', 'Non ac'),
(122, 'deluxe', 'Non ac'),
(123, 'deluxe', 'Non ac'),
(124, 'deluxe', 'Non ac'),
(125, 'deluxe', 'Non ac'),
(126, 'deluxe', 'Non ac'),
(127, 'deluxe', 'Non ac'),
(128, 'deluxe', 'Non ac'),
(150, 'suite', 'Ac'),
(151, 'suite', 'Ac'),
(152, 'suite', 'Non ac'),
(153, 'suite', 'Ac'),
(154, 'suite', 'Ac'),
(155, 'single', 'Ac'),
(250, 'single', 'Ac');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `noofdays` int(11) NOT NULL,
  `sal` decimal(10,2) NOT NULL,
  `exp` int(11) NOT NULL,
  `inc` decimal(10,2) NOT NULL,
  `tot_sal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `name`, `noofdays`, `sal`, `exp`, `inc`, `tot_sal`) VALUES
(1, 'akshitha', 0, '0.00', 2, '0.00', '0.00'),
(2, 'qqq', 0, '0.00', 2, '0.00', '0.00'),
(3, 'aaa', 0, '0.00', 3, '0.00', '0.00'),
(4, '', 1, '0.00', 0, '0.00', '0.00'),
(5, 'Shifa', 1, '153.85', 1, '7.69', '161.54'),
(6, 'aa', 1, '384.62', 2, '38.46', '423.08'),
(7, 'Reshma Maria Saldanha', 1, '384.62', 3, '57.69', '442.31'),
(8, 'Prajwal', 2, '769.24', 1, '38.46', '807.70'),
(9, 'franklin', 3, '1384.62', 4, '276.93', '1661.55'),
(10, 'vani bhat', 1, '192.31', 1, '9.62', '201.93'),
(11, 'rsahmi', 1, '384.62', 7, '134.62', '519.24');

-- --------------------------------------------------------

--
-- Table structure for table `tariff`
--

CREATE TABLE IF NOT EXISTS `tariff` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tariff`
--

INSERT INTO `tariff` (`no`, `name`, `rate`) VALUES
(1, 'Single Room Non AC 	', '700.00'),
(2, 'Single Room AC', '9000.00'),
(3, 'Deluxe Room Non AC', '1200.00'),
(4, 'Deluxe Room AC', '1500.00'),
(5, 'Suite Room AC', '2500.00'),
(6, 'Hall', '50000.00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`) ON DELETE CASCADE ON UPDATE CASCADE;
