-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 03:27 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_item`
--

CREATE TABLE `add_item` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Rating` int(11) NOT NULL,
  `OS` varchar(50) NOT NULL,
  `RAM` varchar(50) NOT NULL,
  `Manufacturer` varchar(100) NOT NULL,
  `Model Number` varchar(50) NOT NULL,
  `Details` varchar(100) NOT NULL,
  `Warrenty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_item`
--

INSERT INTO `add_item` (`Id`, `Name`, `Price`, `Category`, `Image`, `Rating`, `OS`, `RAM`, `Manufacturer`, `Model Number`, `Details`, `Warrenty`) VALUES
(1, 'Redmi k20', 20000, 'Mobile', 'upload/redmi_k20.jpg', 5, 'Oreo', '6GB , 128GB', 'Xiomi', 'G432', '28mp rear, 16mp front, 5000MHA', '1 year manufacturing warrenty.'),
(2, 'Iphone', 120000, 'Iphone', 'upload/iphone.jpg', 5, 'IOS', '6GB , 128GB', 'Apple', 'G432', '28mp rear, 16mp front, 5000MHA', '1 year manufacturing warrenty.'),
(3, 'redmi note 3', 10000, 'Mobile', 'upload/images (7).jpeg', 3, 'Oreo', '6GB , 128GB', 'Xiomi', '123456', '28mp rear, 16mp front, 5000MHA', '1 year manufacturing warrenty.'),
(4, 'redmi note 4', 12000, 'Mobile', 'upload/images (10).jpeg', 3, 'Oreo', '4GB,64GB', 'Xiomi', '1234234', '28mp rear, 16mp front, 5000MHA', '1 year manufacturing warrenty.'),
(5, 'redmi note 5 pro', 15000, 'Mobile', 'upload/images (11).jpeg', 5, 'Oreo', '4GB,64GB', 'Xiomi', 'G1232', '28mp rear, 16mp front, 5000MHA', '1 year manufacturing warrenty.'),
(6, 'Iphone 7', 50000, 'Iphone', 'upload/images (12).jpeg', 4, 'IOS', '4GB,64GB', 'Apple', '1234', '28mp rear, 16mp front, 5000MHA', '1 year manufacturing warrenty.'),
(7, 'Iphone 8', 60000, 'Iphone', 'upload/images (13).jpeg', 5, 'IOS', '6GB , 128GB', 'Apple', '1234', '28mp rear, 16mp front, 5000MHA', '1 year manufacturing warrenty.'),
(8, 'Iphone 11 ', 110000, 'Iphone', 'upload/images (14).jpeg', 5, 'IOS', '6GB , 128GB', 'Apple', '1234567', '28mp rear, 16mp front, 5000MHA', '1 year manufacturing warrenty.'),
(9, 'Ipad ', 80000, 'Tablet', 'upload/images (15).jpeg', 5, 'IOS', '4GB,64GB', 'Apple', 'G1232', '28mp rear, 16mp front, 5000MHA', '1 year manufacturing warrenty.'),
(10, 'Ipad pro', 100000, 'Tablet', 'upload/images (16).jpeg', 5, 'IOS', '6GB , 128GB', 'Apple', '1234567', '28mp rear, 16mp front, 5000MHA', '1 year manufacturing warrenty.'),
(11, 'Mobile', 200000, 'Mobile', 'upload/download (1).jpeg', 4, 'IOS', '4GB,64GB', 'Apple', 'G432', '28mp rear, 16mp front, 5000MHA', '1 year manufacturing warrenty.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Mobile` int(11) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Fname`, `Lname`, `Username`, `Password`, `Mobile`, `Gender`, `Address`) VALUES
(1, 'Akash', 'Jadhav', 'Akashjad05', 'akash', 123456789, 'Male', ''),
(2, 'Vikram', 'Parmar', 'Vikramp873', '123456', 1234567890, 'Male', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_item`
--
ALTER TABLE `add_item`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_item`
--
ALTER TABLE `add_item`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
