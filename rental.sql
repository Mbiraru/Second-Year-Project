-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 07:10 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `LandlordID` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `bedrooms` int(50) NOT NULL,
  `rent` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`LandlordID`, `name`, `PhoneNumber`, `location`, `bedrooms`, `rent`, `address`, `type`) VALUES
(1, 'Landlord', '0701664931', 'Kitengela', 2, '12000', '5066-00100', 'Flat'),
(2, 'Dennis', '0701664931', 'Ruiru', 3, '15000', '1069', 'Flat'),
(3, 'Dennis', '0701664931', 'Ruiru', 3, '15000', '1069', 'Flat'),
(4, 'Dennis', '0709102921', 'Kileleshwa', 3, '20000', '1000', 'Flat');

-- --------------------------------------------------------

--
-- Table structure for table `tenantdetails`
--

CREATE TABLE `tenantdetails` (
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phonenumber` bigint(30) NOT NULL,
  `Eday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenantdetails`
--

INSERT INTO `tenantdetails` (`firstname`, `middlename`, `lastname`, `phonenumber`, `Eday`) VALUES
('Derrick', 'Musuya', 'Akifenwa', 701664931, '0000-00-00'),
('Mbiraru', 'dennis', 'pos', 72234941, '2018-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `name`, `email`, `pass`, `role`) VALUES
(1, 'Mbiraru', 'Dennis.Mbiraru@strathmore.edu', 'Denn1s', 'Landlord'),
(2, 'Derrick', 'Derrick.Musuya@strathmore.edu', 'Derr1ck', 'Tenant');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `role`) VALUES
(1, 'Dennis', 'Denn1s1234', 'admin'),
(2, 'Derrick', 'Derr1ck90', 'landlord'),
(3, 'Mbiraru', 'Mb1raru98', 'tenant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`LandlordID`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `landlord`
--
ALTER TABLE `landlord`
  MODIFY `LandlordID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
