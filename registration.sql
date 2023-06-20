-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 02:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `teachername` varchar(30) NOT NULL,
  `experience` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `teachername`, `experience`) VALUES
(29, 'PROF. CHIRAG R PATEL', '16 year'),
(30, 'PROF. VRUTTI D. SHAH', '12 year'),
(31, 'PROF. DRASHTI J. CHAUHAN', '10 year'),
(32, 'PROF. ANALI SHAH', '7 year'),
(33, 'PROF. DIPALI B. SHAH', '8 year');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Username`, `Email`, `Password`) VALUES
('manav', 'mistrymanav@gmail.co', '123m'),
('harsh', 'harsh@gmail.com', '123h'),
('rahil', 'rahil1@gmail.com', 'rahil1'),
('ANAS', 'anas@gmail.com', '123a'),
('xyz', 'xyz@gmail.com', 'xyz123'),
('jitu', 'jitu@gmail.com', '321'),
('suresh', '', '123h'),
('suresh', 'suresh@gmail.com', '456'),
('suresh@gmail.com', '', '456'),
('smit', 'smit@gmail.com', '123'),
('ami', 'ami@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `new_admission`
--

CREATE TABLE `new_admission` (
  `Name` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `course` varchar(15) NOT NULL,
  `hsc` float NOT NULL,
  `address` varchar(100) NOT NULL,
  `father` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_admission`
--

INSERT INTO `new_admission` (`Name`, `phone`, `email`, `course`, `hsc`, `address`, `father`, `gender`) VALUES
('hjjy v g', 2147483647, 'harsh@gmail.com', 'M.Sc', 89.9, 'vou vh iudvbil', ' kc hgjyi', 'Male'),
('rahil', 2147483647, 'rahil@gmail.com', 'B.Pharm', 20, 'wetsv  xngwjgjw nbbsswb', 'nnnnn', 'Male'),
('suresh', 2147483647, 'suresh@1gmail.com', 'B.Sc', 90.9, 'a6,104', 'ramesh', 'male'),
('kevil', 2147483647, 'harsh@gmail.com', 'B.tech', 89.9, 'hhv', ' hjvk dy', 'male'),
('jkbdh', 1234567890, 'hc@gmail.com', 'M.Sc', 215, 'hgvv', 'xyz', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
