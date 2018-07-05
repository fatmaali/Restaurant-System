-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2017 at 11:45 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bp`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `MenuID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `ItemDescription` text NOT NULL,
  `Rate` float NOT NULL,
  `NumbOfOrders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `ID` int(11) NOT NULL,
  `fromUser` int(11) NOT NULL,
  `toUser` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `orderID` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `ID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `IsDeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`ID`, `PID`, `CID`, `ItemID`, `IsDeleted`) VALUES
(1, 1, 2, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `providerID` int(11) NOT NULL,
  `workingHours` varchar(100) NOT NULL,
  `hotLine` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `menuID` int(11) NOT NULL,
  `available` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`providerID`, `workingHours`, `hotLine`, `address`, `menuID`, `available`) VALUES
(21, 'nytn4hnynm', 54154, 'jjjjjjjk', 555, 127),
(22, 'nytn4hnynm', 54154, 'jjjjjjjk', 555, 127),
(23, 'rrrrrrrrrrr', 54154, 'rrrrrrrrrr', 555, 127),
(26, 'wwwwwww', 54154, 'wwwwwwwww', 1, 127),
(27, 'wwwwwww', 54154, 'wwwwwwwww', 2, 127),
(28, 'pppppppppp', 54154, 'pppppppppp', 3, 127),
(29, 'pppppppppp', 54154, 'pppppppppp', 4, 127),
(30, 'pppppppppp', 54154, 'pppppppppp', 5, 127),
(31, 'pppppppppp', 54154, 'pppppppppp', 6, 127),
(32, 'pppppppppp', 54154, 'pppppppppp', 7, 127),
(33, 'pppppppppp', 54154, 'pppppppppp', 8, 127),
(34, 'pppppppppp', 54154, 'pppppppppp', 9, 127),
(35, 'pppppppppp', 54154, 'pppppppppp', 10, 127),
(36, 'pppppppppp', 54154, 'pppppppppp', 11, 127),
(37, 'pppppppppp', 54154, 'pppppppppp', 12, 127),
(38, 'pppppppppp', 54154, 'pppppppppp', 13, 127),
(39, 'pppppppppp', 54154, 'pppppppppp', 14, 127),
(40, 'pppppppppp', 54154, 'pppppppppp', 15, 127),
(41, 'pppppppppp', 54154, 'pppppppppp', 16, 127),
(42, 'pppppppppp', 54154, 'pppppppppp', 17, 127),
(43, 'pppppppppp', 54154, 'pppppppppp', 18, 127),
(44, 'pppppppppp', 54154, 'pppppppppp', 19, 127),
(45, 'pppppppppp', 54154, 'pppppppppp', 20, 127),
(46, 'pppppppppp', 54154, 'pppppppppp', 21, 127),
(47, 'pppppppppp', 54154, 'pppppppppp', 22, 127),
(48, 'pppppppppp', 54154, 'pppppppppp', 23, 127),
(49, 'pppppppppp', 54154, 'pppppppppp', 24, 127),
(50, 'pppppppppp', 54154, 'pppppppppp', 25, 127);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `ID` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `fromUser` int(11) NOT NULL,
  `toUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`ID`, `Rate`, `fromUser`, `toUser`) VALUES
(1, 4, 20, 50);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `clientID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `rate`, `comment`, `clientID`, `itemID`) VALUES
(1, 4, 'cccccccccccc', 51, 1010);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specialorder`
--

CREATE TABLE `specialorder` (
  `ID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `CID` int(11) NOT NULL,
  `OrderDescription` text NOT NULL,
  `IsDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userType` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `gov` varchar(50) NOT NULL,
  `removed` tinyint(1) NOT NULL,
  `TotalRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userType`, `fname`, `lname`, `userName`, `email`, `mobile`, `password`, `gender`, `gov`, `removed`, `TotalRate`) VALUES
(3, 'user', 'sama', 'amer', 'sama3amer', 'sama.3amer1@gmail.com', 153281865, '391445a6c19f2656726deea68dab8a9a56d11522', 'female', 'giza', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ordeID` (`orderID`),
  ADD KEY `fromUser` (`fromUser`,`toUser`),
  ADD KEY `toUser` (`toUser`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`providerID`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `specialorder`
--
ALTER TABLE `specialorder`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `specialorder`
--
ALTER TABLE `specialorder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`clientID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`fromUser`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`toUser`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `provider`
--
ALTER TABLE `provider`
  ADD CONSTRAINT `provider_ibfk_1` FOREIGN KEY (`providerID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
