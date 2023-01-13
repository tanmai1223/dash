-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 07:07 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `program` text NOT NULL,
  `intake` int(10) NOT NULL,
  `admitted` int(10) NOT NULL,
  `totaladmitted` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`program`, `intake`, `admitted`, `totaladmitted`) VALUES
('B.Tech', 1460, 1240, 1360),
('B.Sc', 200, 160, 190),
('B.Pharm', 170, 112, 137),
('BBA', 70, 55, 65),
('B.Com', 80, 54, 62),
('B.J', 81, 56, 68),
('B.A', 82, 51, 66),
('M.Tech', 394, 290, 340),
('M.Pharm', 79, 60, 70),
('MBA', 40, 25, 32),
('Ph.D', 123, 85, 105);

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE `contribution` (
  `student` text NOT NULL,
  `contribution` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contribution`
--

INSERT INTO `contribution` (`student`, `contribution`) VALUES
('harry', 10),
('marry', 20),
('hyft', 25),
('andy', 25),
('padma', 30);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `branch` varchar(50) NOT NULL,
  `phds` int(10) NOT NULL,
  `male` int(10) NOT NULL,
  `female` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`branch`, `phds`, `male`, `female`) VALUES
('Chemical', 2, 2, 5),
('Civil', 11, 25, 5),
('CSE', 9, 24, 26),
('EEE', 10, 32, 7),
('ECE', 16, 28, 18),
('IT', 6, 18, 10),
('Mechanical', 11, 23, 7),
('AI', 5, 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('tan@gmail.com', '1223'),
('teju@gmail.com', '1252');

-- --------------------------------------------------------

--
-- Table structure for table `loginu`
--

CREATE TABLE `loginu` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginu`
--

INSERT INTO `loginu` (`firstname`, `lastname`, `role`, `email`, `password`) VALUES
('Sindhu', 'G', 'admin', 'sindhu@gmail.com', '1219'),
('Neha', 'K', 'admin', 'neha@gmail.com', '1242'),
('Tanmai', 'H', 'admin', 'hta@gmail.com', '1223'),
('Thrinadh', 'B', 'user', 'thri@gmail.com', '1209'),
('Akshara', 'D', 'user', 'ak@gmail.com', '1222'),
('Nitya', 'S', 'user', 'nit@gmail.com', '1250'),
('Neha', 'N', 'user', 'nn@gmail.com', '1241'),
('Neha', 'N', 'user', 'nn@gmail.com', '1241'),
('Neha', 'N', 'user', 'nn@gmail.com', '1241');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `branch` varchar(50) NOT NULL,
  `placed` int(10) NOT NULL,
  `male` int(10) NOT NULL,
  `female` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`branch`, `placed`, `male`, `female`, `total`) VALUES
('IT', 123, 120, 80, 200),
('CSE', 156, 180, 170, 270),
('ECE', 145, 160, 100, 260),
('EEE', 124, 200, 80, 280),
('Civil', 125, 190, 85, 275),
('Mechanical', 110, 250, 40, 290),
('AI', 25, 35, 30, 65),
('Chemical', 49, 72, 54, 126);

-- --------------------------------------------------------

--
-- Table structure for table `upadd`
--

CREATE TABLE `upadd` (
  `id` varchar(40) NOT NULL,
  `path` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upadd`
--

INSERT INTO `upadd` (`id`, `path`) VALUES
('2018', '/2018.ods');

-- --------------------------------------------------------

--
-- Table structure for table `upexam`
--

CREATE TABLE `upexam` (
  `id` varchar(40) NOT NULL,
  `path` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upexam`
--

INSERT INTO `upexam` (`id`, `path`) VALUES
('2018', '/2018.ods');

-- --------------------------------------------------------

--
-- Table structure for table `upfac`
--

CREATE TABLE `upfac` (
  `id` varchar(40) NOT NULL,
  `path` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upfac`
--

INSERT INTO `upfac` (`id`, `path`) VALUES
('2018', '/2018.ods');

-- --------------------------------------------------------

--
-- Table structure for table `upprog`
--

CREATE TABLE `upprog` (
  `id` varchar(40) NOT NULL,
  `path` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upprog`
--

INSERT INTO `upprog` (`id`, `path`) VALUES
('2018', '/2018.ods'),
('2018', '/2018.ods');

-- --------------------------------------------------------

--
-- Table structure for table `upstud`
--

CREATE TABLE `upstud` (
  `id` varchar(40) NOT NULL,
  `path` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upstud`
--

INSERT INTO `upstud` (`id`, `path`) VALUES
('2018', '/2018.ods');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
