-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 05:08 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumertable`
--

CREATE TABLE `costumertable` (
  `ID` int(11) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costumertable`
--

INSERT INTO `costumertable` (`ID`, `Fullname`, `Username`, `Password`, `Email`) VALUES
(1, 'Ahmad Ahmad Muhammad', 'Ahmadshehi', '123456', 'Ahmadshehi@yahoo.com'),
(2, 'Nabil Ahmad', 'Nabil', 'giggs', 'nabil@yahoo.com'),
(6, 'Shimaa', 'shimoo', 'giggs', 'shimaa@yahoo.com'),
(30, 'Shimaa', 'shimoo', '91dffd96fb6e25e6b52e537aa213d6e458c9c23f', 'shajvhgsav@yahoo.com'),
(31, 'aminu', 'jb', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'aminu@gmailcom'),
(32, 'aminu', 'jb', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'aminu@gmailcom'),
(35, 'hamidan', 'walo', '10b77183c531300e514b6f340fc5597d7eff77f0', 'hamidan@gmailcom'),
(36, 'Ramadan Kassim Umar', 'ramdy', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ramadana@gmailcom'),
(38, 'stop this', 'same', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'sorry@gmailcom'),
(41, 'Fatima Ali abdelwahab', 'fatma ali', '05a8ea5382b9fd885261bb3eed0527d1d3b07262', 'fatma@gmailcom'),
(47, 'Fatima  abdelwahab', 'faty', '05a8ea5382b9fd885261bb3eed0527d1d3b07262', 'faty@gmailcom'),
(48, 'Fatima  abdelwahab', 'faty', '05a8ea5382b9fd885261bb3eed0527d1d3b07262', 'faty@gmailcom'),
(358, 'hadi', 'kassim', '885c14c8838990420dee31863f52968cbcdd0996', 'sorry1@gmailcom'),
(359, 'hadi', 'kassim', '885c14c8838990420dee31863f52968cbcdd0996', 'sorry1@gmailcom'),
(363, 'amazing', 'names', '4ebba88e39e0169fd4c820e683461d554727e4cc', 'tahir'),
(364, 'amazing', 'names', '4ebba88e39e0169fd4c820e683461d554727e4cc', 'tahir'),
(365, 'amazing', 'names', '4ebba88e39e0169fd4c820e683461d554727e4cc', 'tahir'),
(377, 'Kabir', 'Usman', '47fabde81df47ac575fb11ef881d12d527238a4c', 'kabirusman@ok.com'),
(382, 'shimoo is wicked', 'but kind', 'dea742e166979027ae70b28e0a9006fb1010e760', 'kaabirusman@ok.com'),
(383, 'samaa', 'ali', 'c54650f9d7594d546e7de958c5ad36dd5643d365', 'fatma1@ymail.com');

-- --------------------------------------------------------

--
-- Table structure for table `evaluationtable`
--

CREATE TABLE `evaluationtable` (
  `ID` int(11) NOT NULL,
  `FoodQuality` varchar(30) NOT NULL,
  `TheMenu` varchar(30) NOT NULL,
  `Dishes` varchar(30) NOT NULL,
  `Service` varchar(30) NOT NULL,
  `Tables` varchar(30) NOT NULL,
  `WellCooked` varchar(30) NOT NULL,
  `FoodIsServedImpeccably` varchar(30) NOT NULL,
  `RestaurantAtmosphere` varchar(30) NOT NULL,
  `PriceLevel` varchar(30) NOT NULL,
  `Music` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluationtable`
--

INSERT INTO `evaluationtable` (`ID`, `FoodQuality`, `TheMenu`, `Dishes`, `Service`, `Tables`, `WellCooked`, `FoodIsServedImpeccably`, `RestaurantAtmosphere`, `PriceLevel`, `Music`) VALUES
(1, 'Excellent', 'VeryGood', 'Good', 'Bad', 'Excellent', 'Good', 'VeryGood', 'Good', 'Very good', 'Excellent'),
(2, 'Food Quality is Excellent', 'The Menu is Very Good', 'Dishes Are Excellent', 'Service is Very Good', 'Tables Are Always Excellent', 'Well Cooked Excellent', 'Food is served impeccably Good', 'Restaurant atmosphere is Good', 'Price Level is Very Good', 'Music is Bad'),
(3, 'Food Quality is Good', 'The Menu is Excellent', 'Dishes Are Very Good', 'Service is Very Good', 'Tables Are Always Excellent', 'Well Cooked Excellent', 'Food is served impeccably Good', 'Restaurant atmosphere is Good', 'Price Level is Very Good', 'Music is Bad'),
(4, 'Food Quality is Bad', 'The Menu is Very Good', 'Dishes Are Very Good', 'Service is Very Good', 'Tables Are Always Excellent', 'Well Cooked Excellent', 'Food is served impeccably Good', 'Restaurant atmosphere is Good', 'Price Level is Very Good', 'Music is Bad'),
(5, 'Food Quality is Bad', 'The Menu is Very Good', 'Dishes Are Very Good', 'Service is Very Good', 'Tables Are Always Excellent', 'Well Cooked Excellent', 'Food is served impeccably Good', 'Restaurant atmosphere is Good', 'Price Level is Very Good', 'Music is Bad'),
(6, '', 'The Menu is Excellent', '', '', 'Tables Are Always Bad', '', '', '', '', ''),
(7, 'Food Quality is Excellent', '', 'Dishes Are Very Good', 'Service is Excellent', 'Tables Are Always Excellent', '', 'Food is served impeccably Exce', 'Restaurant atmosphere is Very ', 'Price Level is Excellent', 'Music is Excellent'),
(8, 'Food Quality is Excellent', '', 'Dishes Are Very Good', 'Service is Excellent', 'Tables Are Always Excellent', 'Well Cooked Excellent', 'Food is served impeccably Exce', 'Restaurant atmosphere is Very ', 'Price Level is Excellent', 'Music is Excellent'),
(9, 'Food Quality is Excellent', 'The Menu is Excellent', 'Dishes Are Very Good', 'Service is Excellent', 'Tables Are Always Very Good', 'Well Cooked Excellent', 'Food is served impeccably Exce', 'Restaurant atmosphere is Very ', 'Price Level is Excellent', 'Music is Excellent'),
(10, 'Food Quality is Excellent', 'The Menu is Good', 'Dishes Are Very Good', 'Service is Excellent', 'Tables Are Always Very Good', 'Well Cooked Bad', 'Food is served impeccably Very', 'Restaurant atmosphere is Good', 'Price Level is Excellent', 'Music is Bad'),
(12, 'Food Quality is Excellent', '', '', 'Service is Excellent', '', '', 'Food is served impeccably Very', '', '', 'Music is Excellent'),
(13, 'Food Quality is Excellent', '', '', 'Service is Excellent', '', 'Well Cooked Bad', 'Food is served impeccably Exce', 'Restaurant atmosphere is Bad', '', 'Music is Bad'),
(14, 'Food Quality is Excellent', '', '', '', '', '', 'Food is served impeccably Very', '', '', ''),
(15, 'Food Quality is Excellent', '', '', '', '', '', 'Food is served impeccably Very', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumertable`
--
ALTER TABLE `costumertable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `evaluationtable`
--
ALTER TABLE `evaluationtable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costumertable`
--
ALTER TABLE `costumertable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=384;
--
-- AUTO_INCREMENT for table `evaluationtable`
--
ALTER TABLE `evaluationtable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
