-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 12:15 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mess`
--

-- --------------------------------------------------------

--
-- Table structure for table `mondaybreakfast`
--

CREATE TABLE `mondaybreakfast` (
  `item1` varchar(40) NOT NULL,
  `item2` varchar(40) NOT NULL,
  `item3` varchar(40) NOT NULL,
  `item4` varchar(40) NOT NULL,
  `item5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mondaybreakfast`
--

INSERT INTO `mondaybreakfast` (`item1`, `item2`, `item3`, `item4`, `item5`) VALUES
('idli', 'vadai', 'sambar', 'chatni', 'coffee');

-- --------------------------------------------------------

--
-- Table structure for table `mondaydinner`
--

CREATE TABLE `mondaydinner` (
  `item1` varchar(40) NOT NULL,
  `item2` varchar(40) NOT NULL,
  `item3` varchar(40) NOT NULL,
  `item4` varchar(40) NOT NULL,
  `item5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mondaylunch`
--

CREATE TABLE `mondaylunch` (
  `item1` varchar(40) NOT NULL,
  `item2` varchar(40) NOT NULL,
  `item3` varchar(40) NOT NULL,
  `item4` varchar(40) NOT NULL,
  `item5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thrusdaybreakfast`
--

CREATE TABLE `thrusdaybreakfast` (
  `item1` varchar(40) NOT NULL,
  `item2` varchar(40) NOT NULL,
  `item3` varchar(40) NOT NULL,
  `item4` varchar(40) NOT NULL,
  `item5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuesdaybreakfast`
--

CREATE TABLE `tuesdaybreakfast` (
  `item1` varchar(40) NOT NULL,
  `item2` varchar(40) NOT NULL,
  `item3` varchar(40) NOT NULL,
  `item4` varchar(40) NOT NULL,
  `item5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuesdaydinner`
--

CREATE TABLE `tuesdaydinner` (
  `item1` varchar(40) NOT NULL,
  `item2` varchar(40) NOT NULL,
  `item3` varchar(40) NOT NULL,
  `item4` varchar(40) NOT NULL,
  `item5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuesdaylunch`
--

CREATE TABLE `tuesdaylunch` (
  `item1` varchar(40) NOT NULL,
  `item2` varchar(40) NOT NULL,
  `item3` varchar(40) NOT NULL,
  `item4` varchar(40) NOT NULL,
  `item5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phonenum` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `phonenum`) VALUES
('surya', 'surya', 8680049391),
('admin', 'admin123', 8786433564);

-- --------------------------------------------------------

--
-- Table structure for table `wednesdaybreakfast`
--

CREATE TABLE `wednesdaybreakfast` (
  `item1` varchar(40) NOT NULL,
  `item2` varchar(40) NOT NULL,
  `item3` varchar(40) NOT NULL,
  `item4` varchar(40) NOT NULL,
  `item5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wednesdaybreakfast`
--

INSERT INTO `wednesdaybreakfast` (`item1`, `item2`, `item3`, `item4`, `item5`) VALUES
('dosa', 'sambar', 'chutni', 'tea', 'coffee');

-- --------------------------------------------------------

--
-- Table structure for table `wednesdaydinner`
--

CREATE TABLE `wednesdaydinner` (
  `item1` varchar(40) NOT NULL,
  `item2` varchar(40) NOT NULL,
  `item3` varchar(40) NOT NULL,
  `item4` varchar(40) NOT NULL,
  `item5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wednesdaydinner`
--

INSERT INTO `wednesdaydinner` (`item1`, `item2`, `item3`, `item4`, `item5`) VALUES
('chappathi', 'dal', 'rice', 'potatoe-fry', 'curd');

-- --------------------------------------------------------

--
-- Table structure for table `wednesdaylunch`
--

CREATE TABLE `wednesdaylunch` (
  `item1` varchar(40) NOT NULL,
  `item2` varchar(40) NOT NULL,
  `item3` varchar(40) NOT NULL,
  `item4` varchar(40) NOT NULL,
  `item5` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wednesdaylunch`
--

INSERT INTO `wednesdaylunch` (`item1`, `item2`, `item3`, `item4`, `item5`) VALUES
('rice', 'puli-sambar', 'rasam', 'potatoe-fry', 'curd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
