-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2016 at 05:46 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rosto`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Adult` int(12) NOT NULL,
  `Fromm` time NOT NULL,
  `Too` time NOT NULL,
  `Date` date NOT NULL,
  `Comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ID`, `Email`, `Phone`, `Adult`, `Fromm`, `Too`, `Date`, `Comment`) VALUES
(1, 'eslam.wael.8.ew@gmail.com', 1153014006, 4, '04:15:13', '09:33:35', '2016-04-05', 'ALLAH'),
(2, 'eslam.wael.8.ew@gmail.com', 1153014006, 4, '04:15:13', '09:33:35', '2016-04-05', 'ALLAH'),
(3, 'eslam.wael.8.ew@gmail.com', 1153014006, 8, '10:28:32', '20:52:52', '2016-04-06', 'wqwqwqwqwqwqw'),
(4, 'eslam.wael.8.ew@gmail.com', 1153014006, 8, '10:28:32', '20:52:52', '2016-04-06', 'wqwqwqwqwqwqw'),
(34, 'eslam.wael.8@gmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(35, 'eslam.wael.8@gmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(36, 'eslam.wael.8@gmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(37, 'eslam.wael.8@gmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(38, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(39, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(40, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(41, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(42, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(43, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(44, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(45, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(46, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(47, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(48, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(49, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(50, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(51, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(52, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(53, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(54, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(55, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(56, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(57, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(58, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(59, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(60, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(61, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(62, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(63, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(64, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(65, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(66, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(67, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(68, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(69, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(70, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(71, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(72, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(73, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(74, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(75, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(76, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(77, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(78, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(79, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(80, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(81, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn'),
(82, 'eslam.wael.8@gmmmmmmmmmmmail.com', 1067524006, 11, '01:01:00', '01:01:00', '0001-01-17', 'nnn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD UNIQUE KEY `UNIQUE` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
