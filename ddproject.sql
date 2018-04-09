-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 07:49 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddproject`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `dd`
-- (See below for the actual view)
--
CREATE TABLE `dd` (
`id` int(11)
,`subject` varchar(10)
,`date` date
,`attendance` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `username` varchar(20) NOT NULL,
  `password` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `sub_assign` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`username`, `password`, `name`, `sub_assign`) VALUES
('sameer123', 123456, 'sameer', 'DD'),
('tirth123', 123456, 'tirth', 'MCC'),
('pratik123', 123456, 'pratik', 'SPCC'),
('sanjeev123', 123456, 'sanjeev', 'SE');

-- --------------------------------------------------------

--
-- Stand-in structure for view `mcc`
-- (See below for the actual view)
--
CREATE TABLE `mcc` (
`id` int(11)
,`subject` varchar(10)
,`date` date
,`attendance` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `se`
-- (See below for the actual view)
--
CREATE TABLE `se` (
`id` int(11)
,`subject` varchar(10)
,`date` date
,`attendance` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `spcc`
-- (See below for the actual view)
--
CREATE TABLE `spcc` (
`id` int(11)
,`subject` varchar(10)
,`date` date
,`attendance` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(20) NOT NULL,
  `password` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `password`, `name`, `id`) VALUES
('sameeryadav', 123456, 'sameer', 111),
('tirthtdt', 123456, 'tirth', 112);

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `id` int(11) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `attendance` int(10) NOT NULL,
  `defaulter` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`id`, `subject`, `date`, `attendance`, `defaulter`) VALUES
(111, 'DD', '2018-04-11', 1, 1),
(112, 'DD', '2018-04-11', 1, 1),
(111, 'DD', '2018-04-18', 1, 1),
(112, 'DD', '2018-04-18', 1, 1),
(111, 'DD', '2018-04-24', 0, 1),
(112, 'DD', '2018-04-24', 1, 1),
(111, 'DD', '2018-04-07', 1, 0),
(112, 'DD', '2018-04-07', 0, 0),
(111, 'DD', '0000-00-00', 0, 0),
(112, 'DD', '0000-00-00', 1, 0),
(111, 'DD', '2018-04-08', 1, 0),
(112, 'DD', '2018-04-08', 1, 0),
(34, 'DD', '2018-04-08', 0, 0),
(111, 'DD', '2018-04-08', 0, 0);

-- --------------------------------------------------------

--
-- Structure for view `dd`
--
DROP TABLE IF EXISTS `dd`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dd`  AS  select `student_record`.`id` AS `id`,`student_record`.`subject` AS `subject`,`student_record`.`date` AS `date`,`student_record`.`attendance` AS `attendance` from `student_record` where ((`student_record`.`subject` = 'DD') and (`student_record`.`defaulter` = 0)) ;

-- --------------------------------------------------------

--
-- Structure for view `mcc`
--
DROP TABLE IF EXISTS `mcc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mcc`  AS  select `student_record`.`id` AS `id`,`student_record`.`subject` AS `subject`,`student_record`.`date` AS `date`,`student_record`.`attendance` AS `attendance` from `student_record` where ((`student_record`.`subject` = 'MCC') and (`student_record`.`defaulter` = 0)) ;

-- --------------------------------------------------------

--
-- Structure for view `se`
--
DROP TABLE IF EXISTS `se`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `se`  AS  select `student_record`.`id` AS `id`,`student_record`.`subject` AS `subject`,`student_record`.`date` AS `date`,`student_record`.`attendance` AS `attendance` from `student_record` where ((`student_record`.`subject` = 'SE') and (`student_record`.`defaulter` = 0)) ;

-- --------------------------------------------------------

--
-- Structure for view `spcc`
--
DROP TABLE IF EXISTS `spcc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `spcc`  AS  select `student_record`.`id` AS `id`,`student_record`.`subject` AS `subject`,`student_record`.`date` AS `date`,`student_record`.`attendance` AS `attendance` from `student_record` where ((`student_record`.`subject` = 'SPCC') and (`student_record`.`defaulter` = 0)) ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
