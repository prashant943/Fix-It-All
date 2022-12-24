-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 07:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixitall`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `custid` bigint(20) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `customers`:
--

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custid`, `name`, `email`, `mobile`, `password`) VALUES
(726457977, 'SAILESH AMAN DOLA', 'saileshamandola@gmail.com', 7894561230, '73b25522615dac9cfd289ee35faef4ef'),
(1725439801, 'SREEJA KATURI', 'sreejakaturi@gmail.com', 9123456789, 'e1c989b6120a2911e3556f1219a03c78'),
(2941268157, 'MALAY BALDHA', 'malaybaldha@gmail.com', 7538642963, '54f09841de9e84b180588db9427c9976'),
(3024145589, 'NEHA ANN SHYGEN', 'nehaannshygen@gmail.com', 9638527410, 'f3de5e16d00fe7056839f6018f1f52ca'),
(3460804432, 'ARCHIT AGARWAL', 'architagarwal@gmail.com', 9654321987, 'faad19301a55b8eecc9ee67682807f78'),
(4003295161, 'MUSKAN MEHTA', 'muskanmehta@gmail.com', 8527894560, 'd55bac79f7c247e4054b7cc2785a0f47');

-- --------------------------------------------------------

--
-- Table structure for table `mechanics`
--

CREATE TABLE `mechanics` (
  `mechid` bigint(20) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `mechanics`:
--

--
-- Dumping data for table `mechanics`
--

INSERT INTO `mechanics` (`mechid`, `name`, `email`, `mobile`, `password`) VALUES
(1147545590, 'COSMO BRANTLEY', 'cosmobrantley@gmail.com', 7537417890, 'fd69a8c1511a1e7c75dc2f5609bdc2a1'),
(2191256873, 'TRISTON HAPPY', 'tristonhappy@gmail.com', 7894561230, '50d2548262c9c679475da5f1a3d6934c'),
(2563290419, 'DELL ANTON', 'dellanton@gmail.com', 8428624560, '3a9849218988fee7010ac49ad92112dd'),
(2665824519, 'YALE MOSS', 'yalemoss@gmail.com', 8524561230, '809475607c6e873613ee41dff637ff4d');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `servid` bigint(20) NOT NULL,
  `custid` bigint(20) NOT NULL,
  `mechid` bigint(20) NOT NULL,
  `servtype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `services`:
--   `custid`
--       `customers` -> `custid`
--   `mechid`
--       `mechanics` -> `mechid`
--

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`servid`, `custid`, `mechid`, `servtype`) VALUES
(82912168, 1725439801, 2191256873, 'Denting & Painting'),
(89924615, 2941268157, 2665824519, 'Dashboard'),
(500853666, 3024145589, 1147545590, 'Dashboard'),
(613588935, 3460804432, 2563290419, 'Brakes'),
(795429738, 4003295161, 2191256873, 'AC Service'),
(944393601, 726457977, 2665824519, 'Cooling System'),
(1091781767, 3024145589, 2563290419, 'Clutch & Filaments'),
(1199584872, 726457977, 2563290419, 'Brakes'),
(2341533385, 2941268157, 1147545590, 'Brakes'),
(2357120331, 1725439801, 2665824519, 'Clutch & Filaments'),
(2764003102, 1725439801, 2563290419, 'AC Service'),
(3275992557, 726457977, 1147545590, 'Dashboard'),
(3597162820, 1725439801, 1147545590, 'Battery Service'),
(3683233226, 726457977, 2191256873, 'Monthly Service');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`custid`),
  ADD UNIQUE KEY `custemail_unique` (`email`),
  ADD UNIQUE KEY `custmobile_unique` (`mobile`);

--
-- Indexes for table `mechanics`
--
ALTER TABLE `mechanics`
  ADD PRIMARY KEY (`mechid`),
  ADD UNIQUE KEY `mechemail_unique` (`email`),
  ADD UNIQUE KEY `mechmobile_unique` (`mobile`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`servid`),
  ADD KEY `custid_foreign` (`custid`),
  ADD KEY `mechid_foreign` (`mechid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `custid_foreign` FOREIGN KEY (`custid`) REFERENCES `customers` (`custid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mechid_foreign` FOREIGN KEY (`mechid`) REFERENCES `mechanics` (`mechid`) ON DELETE CASCADE ON UPDATE CASCADE;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table customers
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'vroom', 'customers', '{\"CREATE_TIME\":\"2022-04-25 09:26:28\"}', '2022-04-28 09:13:40');

--
-- Metadata for table mechanics
--

--
-- Metadata for table services
--

--
-- Metadata for database vroom
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
