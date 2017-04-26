-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 03:32 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brian`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `nname` varchar(25) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `num` varchar(25) NOT NULL,
  `em` varchar(25) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `pic` varchar(10) NOT NULL,
  `hsc` varchar(25) NOT NULL,
  `ssc` varchar(25) NOT NULL,
  `dip` varchar(25) NOT NULL,
  `sem` varchar(25) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `achieve` varchar(50) NOT NULL,
  `progg` varchar(50) NOT NULL,
  `additional` varchar(50) NOT NULL,
  `projname` varchar(25) NOT NULL,
  `facmem` varchar(25) NOT NULL,
  `description` varchar(25) NOT NULL,
  `member` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`fname`, `lname`, `nname`, `dob`, `gender`, `num`, `em`, `addr`, `pic`, `hsc`, `ssc`, `dip`, `sem`, `skills`, `achieve`, `progg`, `additional`, `projname`, `facmem`, `description`, `member`) VALUES
('Brian', 'Castelino', 'Polly', '2017-12-31', 'Female', '9876543210', 'brian@gmail.com', 'iwaddvofcd  c c ', '', '89', '89', '89', '4', 'abrakadabra	', 'Abrakadabra', 'Android', 'ibjkjh', 'kjhvviuvy', 'ikbo8yv', 'ojbjkjn	ouyvvv u viuboif', 'ACM'),
('Brian', 'Polly', 'Polly', '1997-02-14', 'Male', '9876543210', 'abc@gmail.com', 'neverland', '', '89', '89', '89', '6', 'I can lift 100 kg deadlift', 'I have amazing biceps	', 'PS', 'Football', 'testing123', 'SIR', 'Amazing project	', 'IEEE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
