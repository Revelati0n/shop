-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2016 at 02:57 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `UID` int(11) NOT NULL,
  `Username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `isMember` int(1) NOT NULL DEFAULT '1',
  `first_name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_district` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipcode` int(5) DEFAULT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`UID`, `Username`, `Password`, `isMember`, `first_name`, `last_name`, `address`, `sub_district`, `district`, `province`, `zipcode`, `tel`, `telephone`, `email`) VALUES
(1, 'admin', 'admin', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `categoryDescription` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`, `categoryDescription`) VALUES
(1, 'เสื้อ', NULL),
(2, 'ผู้ชาย', NULL),
(3, 'ผู้หญิง', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categoryparent`
--

CREATE TABLE `categoryparent` (
  `categoryParentID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `categoryParentName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `categoryParentDescription` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categoryparent`
--

INSERT INTO `categoryparent` (`categoryParentID`, `categoryID`, `categoryParentName`, `categoryParentDescription`) VALUES
(1, 1, 'test', ''),
(2, 1, 'test', ''),
(3, 1, '1', ''),
(4, 1, '1', ''),
(5, 1, '1', ''),
(6, 1, '1', ''),
(7, 1, '1', ''),
(8, 1, '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `categoryparent`
--
ALTER TABLE `categoryparent`
  ADD PRIMARY KEY (`categoryParentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categoryparent`
--
ALTER TABLE `categoryparent`
  MODIFY `categoryParentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
