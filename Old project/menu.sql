-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2016 at 07:59 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `foodName` varchar(255) COLLATE utf8_bin NOT NULL,
  `smallPrice` int(255) NOT NULL,
  `bigPrice` int(255) NOT NULL,
  `comboSmallnum` varchar(255) COLLATE utf8_bin NOT NULL,
  `comboLargenum` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `foodName`, `smallPrice`, `bigPrice`, `comboSmallnum`, `comboLargenum`) VALUES
(1, 'rice', 15, 20, 'cobosmall1', 'combolarge1'),
(2, 'big mac', 20, 30, 'combosmall2', 'combolarge2'),
(3, 'chicken', 22, 30, 'combosmall3', 'combosmall3\r\n'),
(4, 'pasta', 10, 20, 'combosmall4', 'combosmall4\r\n'),
(5, 'fatta', 20, 30, 'combosmall5', 'comboslarge5'),
(6, 'mexicano', 22, 28, 'combosmall6', 'combolarge6\r\n'),
(7, 'shawerma', 20, 21, 'combosmall7', 'combolarge7\r\n'),
(8, 'grilled fish', 30, 40, 'combosmall8', 'combolarge8'),
(9, 'crunchy sandwitch', 18, 20, 'combosmall9', 'combolarge9'),
(10, 'smoked sandwitch', 13, 17, 'combosmall10', 'combolarge10'),
(11, 'vienna shandwich', 19, 22, 'combosmall11', 'combolarge11'),
(12, 'supreme sandwich', 15, 19, 'combosmall12', 'combolarge12'),
(13, 'nuggets', 11, 17, 'combosmall13', 'combolarge13'),
(14, 'rosto sandwich', 16, 19, 'combosmall14', 'combosmall14'),
(15, 'twister sandwich', 17, 22, 'combosmall15', 'combolarge15'),
(16, 'pizza', 22, 30, 'combosmall16', 'combolarge16'),
(17, 'pepesi machine', 7, 9, 'combosmall17', 'combolarge17'),
(18, 'fresh orange', 12, 15, 'combosmall18', 'combolarge18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
