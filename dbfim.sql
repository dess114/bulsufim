-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 02:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfim`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facilities`
--

CREATE TABLE `tbl_facilities` (
  `FID` varchar(10) NOT NULL,
  `fac_name` varchar(20) NOT NULL,
  `fac_type` varchar(20) NOT NULL,
  `fac_loc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `itemID` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_type` varchar(20) NOT NULL,
  `custodian_ID` varchar(11) NOT NULL,
  `clname` varchar(30) NOT NULL,
  `cfname` varchar(30) NOT NULL,
  `cmname` varchar(30) NOT NULL,
  `FID` varchar(11) NOT NULL,
  `fac_name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `item_stat` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itemshift`
--

CREATE TABLE `tbl_itemshift` (
  `shiftID` int(11) NOT NULL,
  `shiftTime` time(6) NOT NULL,
  `shiftDate` date NOT NULL,
  `itemID` varchar(10) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `logID` varchar(10) NOT NULL,
  `details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profilelog`
--

CREATE TABLE `tbl_profilelog` (
  `LogID` int(11) NOT NULL,
  `PID` int(10) NOT NULL,
  `plname` varchar(30) NOT NULL,
  `pfname` varchar(30) NOT NULL,
  `pmname` varchar(30) NOT NULL,
  `pdesignation` varchar(20) NOT NULL,
  `shiftDate` date NOT NULL,
  `shiftTime` time(6) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_type` varchar(20) NOT NULL,
  `UID` int(11) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `initiatorID` int(11) NOT NULL,
  `inlname` varchar(30) NOT NULL,
  `infname` varchar(30) NOT NULL,
  `inmname` varchar(30) NOT NULL,
  `inDesignation` varchar(20) NOT NULL,
  `details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scheds`
--

CREATE TABLE `tbl_scheds` (
  `sch_ID` int(11) NOT NULL,
  `scDate` date NOT NULL,
  `scTime_start` time(6) NOT NULL,
  `scTime_end` time(6) NOT NULL,
  `UID` varchar(10) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `sc_class` varchar(30) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `FID` varchar(10) NOT NULL,
  `fac_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `UID` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pword` varchar(20) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `uDesignation` varchar(30) NOT NULL,
  `email_ad` varchar(30) NOT NULL,
  `cnum` varchar(11) NOT NULL,
  `user_pic` varchar(100) NOT NULL,
  `user_stat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`UID`, `uname`, `pword`, `lname`, `fname`, `mname`, `uDesignation`, `email_ad`, `cnum`, `user_pic`, `user_stat`) VALUES
(20240001, 'JuanD', 'user111', 'Juan', 'Dela Cruz', 'Smith', 'Professor', 'jd1@email.com', '09451234567', '?PNG\r\n\Z\n\0\0\0\rIHDR\0\0?\0\0?\0\0\0???\0\0\0KPLTE??????\0\0\0@@@,\'\rWN??2?t&@8-?qZ?ᴿ???????Ŀ??\0c?@??????????', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_facilities`
--
ALTER TABLE `tbl_facilities`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `tbl_itemshift`
--
ALTER TABLE `tbl_itemshift`
  ADD PRIMARY KEY (`shiftID`);

--
-- Indexes for table `tbl_profilelog`
--
ALTER TABLE `tbl_profilelog`
  ADD PRIMARY KEY (`LogID`);

--
-- Indexes for table `tbl_scheds`
--
ALTER TABLE `tbl_scheds`
  ADD PRIMARY KEY (`sch_ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_profilelog`
--
ALTER TABLE `tbl_profilelog`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_scheds`
--
ALTER TABLE `tbl_scheds`
  MODIFY `sch_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20240005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
