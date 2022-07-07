-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 04:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vps`
--

-- --------------------------------------------------------

--
-- Table structure for table `fir_details`
--

CREATE TABLE `fir_details` (
  `ID` int(50) NOT NULL,
  `Complainant_name` varchar(50) NOT NULL,
  `Contact_No` int(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `AdhaarCard_No` int(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Complaint_Name` varchar(50) NOT NULL,
  `Complaint_Address` varchar(50) NOT NULL,
  `Complaint_AdhaarCard_No` int(50) NOT NULL,
  `Complaint_Subject` varchar(50) NOT NULL,
  `Occurance_date` date NOT NULL,
  `Detail_of_complaint` varchar(50) NOT NULL,
  `SHO_Sign` varbinary(50) NOT NULL,
  `Informer_Sign` varbinary(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fir_details`
--

INSERT INTO `fir_details` (`ID`, `Complainant_name`, `Contact_No`, `Email`, `AdhaarCard_No`, `Address`, `Complaint_Name`, `Complaint_Address`, `Complaint_AdhaarCard_No`, `Complaint_Subject`, `Occurance_date`, `Detail_of_complaint`, `SHO_Sign`, `Informer_Sign`) VALUES
(5, 'Anish', 45345, 'gf@vgh', 345345, 'dstggg', 'Amir', 'sf', 345345, 'gun', '2021-06-09', 'dfsgsfg', '', ''),
(6, 'Amir', 45345, 'fgdfg@nhgn', 23424234, 'dsfgdfg', 'dfgdsfg', '', 5464, 'sdfgsdfg', '2021-05-30', 'sdgdfg', 0x436170747572652e504e47, 0x4361707475726532302e504e47),
(7, 'Aman', 54654, 'fgdfg@nhgn', 4565, '4564gfdh', 'fghfgh', 'fghfgh', 6557567, 'ghnfgh', '2021-05-30', 'fghfgh', '', ''),
(30, 'Win', 75675, 'gf@vgh', 546456, 'fghfdfs', 'fghnsgh', 'hfgs', 0, 'fghbsfgh', '2021-05-31', 'fghjnfgh', 0x576970726f332e504e47, 0x776970726f342e504e47),
(31, 'Final', 676577657, 'fgdfg@nhgn', 56456456, 'fghfgjhngkmjhdgjkghjdjgdjghkj', 'gdjhgjgjgj', 'fgdhgjnhgdjgcjk', 67575757, 'vnhgjdghjghj', '2021-06-01', 'gdhjhjghjhjhjsjhtkykhkhgkgjghjhkjhf \r\ntuyjyjhjhgj', 0x576970726f466f726d2e504e47, 0x576970726f466f726d322e504e47),
(32, 'Final', 676577657, 'fgdfg@nhgn', 56456456, 'fghfgjhngkmjhdgjkghjdjgdjghkj', 'gdjhgjgjgj', 'fgdhgjnhgdjgcjk', 67575757, 'vnhgjdghjghj', '2021-06-01', 'gdhjhjghjhjhjsjhtkykhkhgkgjghjhkjhf \r\ntuyjyjhjhgj', 0x576970726f466f726d2e504e47, 0x576970726f466f726d322e504e47),
(33, 'Full N Final', 657567, 'gf@vgh', 5465, 'fgdhdggh', 'gfjnhgjg', 'ghjghjfj', 65757, 'jcfgjhgd', '2021-06-01', 'dgjghjgj', 0x436170747572652e504e47, 0x4361707475726532302e504e47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fir_details`
--
ALTER TABLE `fir_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fir_details`
--
ALTER TABLE `fir_details`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
