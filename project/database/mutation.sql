-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 03:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mutation`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `transid` int(11) NOT NULL,
  `placenumber` text NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `buyerid` varchar(16) NOT NULL,
  `assetlocation` varchar(200) NOT NULL,
  `seller` varchar(255) NOT NULL,
  `sellerid` varchar(16) NOT NULL,
  `recoverid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `caseid` varchar(100) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `placeid` varchar(200) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `idno` varchar(16) NOT NULL,
  `telno` varchar(12) NOT NULL,
  `district` varchar(40) NOT NULL,
  `sector` varchar(40) NOT NULL,
  `cell` varchar(40) NOT NULL,
  `village` varchar(40) NOT NULL,
  `tax` float NOT NULL,
  `purpose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`placeid`, `owner`, `idno`, `telno`, `district`, `sector`, `cell`, `village`, `tax`, `purpose`) VALUES
('1', 'Kanuma', '1200080112197090', '0780787811', 'Rubavu', 'Nyakiriba', 'Kanyefurwe', 'Kayove', 0, 'Ubuhinzi');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `ud` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `deci` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`ud`, `email`, `password`, `role`, `deci`) VALUES
(9, 'josiaszacharie@gmail.com', 'c13d88cb4cb02003daedb8a84e5d272a', 'Approval', 'Yes'),
(10, 'ndayishimye@gmail.com', 'c13d88cb4cb02003daedb8a84e5d272a', 'Admin', 'Yes'),
(11, 'micheline005@gmail.com', '202cb962ac59075b964b07152d234b70', 'Branch manager', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `transid` int(11) NOT NULL,
  `placenumber` varchar(16) NOT NULL,
  `ownername` varchar(255) NOT NULL,
  `ownerid` varchar(16) NOT NULL,
  `ownerphone` varchar(12) NOT NULL,
  `assetlocation` varchar(200) NOT NULL,
  `buyername` varchar(255) NOT NULL,
  `buyerid` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`transid`),
  ADD UNIQUE KEY `recover` (`recoverid`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD UNIQUE KEY `unique` (`caseid`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`ud`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`transid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `transid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `ud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `transid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
