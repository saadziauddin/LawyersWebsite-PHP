-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2025 at 04:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyers_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(11) NOT NULL,
  `C_Name` varchar(255) NOT NULL,
  `C_Email` varchar(255) NOT NULL,
  `C_Contact` int(11) NOT NULL,
  `Law_ID` int(11) NOT NULL,
  `Law_Name` varchar(255) NOT NULL,
  `Case_Subject` varchar(255) NOT NULL,
  `App_Date` varchar(255) NOT NULL,
  `App_Time` varchar(255) NOT NULL,
  `Lawyer_Department` varchar(255) NOT NULL,
  `Meeting_Place` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `App_Booking_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `C_Name`, `C_Email`, `C_Contact`, `Law_ID`, `Law_Name`, `Case_Subject`, `App_Date`, `App_Time`, `Lawyer_Department`, `Meeting_Place`, `Description`, `App_Booking_Date`, `Status`) VALUES
(1, 'Ali', 'ali@gmail.com', 2147483647, 2, 'Raza', 'Divorce', '2023-04-04', '16:02', 'Criminal', 'Hyderabad', 'Jiyea Bhutto', '2023-04-06 05:16:45', 'Rejected'),
(2, 'Awais', 'awais@gmail.com', 303030303, 2, 'Raza', 'Divorce', '2023-04-04', '16:10', 'Criminal', 'Lahore', 'Jiyea Bhutto', '2023-04-06 05:16:51', 'Approved'),
(3, 'Wasi', 'wasi@gmail.com', 123456789, 7, 'Amir', 'Affidavit', '2023-04-20', '07:13', 'Affidavit', 'Karachi', 'Jiyea Bhutto', '2023-04-06 05:16:56', 'Pending'),
(4, 'Ali', 'ali@gmail.com', 123456789, 3, 'Zuhaib', 'Divorce', '2023-04-20', '22:16', 'Divorce', 'Karachi', 'hello baby', '2023-04-06 05:16:24', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Contact` int(12) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `Email`, `Password`, `Contact`, `Address`, `City`, `Country`, `Role`, `Date`) VALUES
(1, 'Ali', 'ali@gmail.com', 'ali123', 123456789, 'Karachi', 'Karachi', 'Pakistan', 'customer', '2023-04-05 01:32:05'),
(2, 'Awais', 'awais@gmail.com', 'awais123', 123456789, 'Lahore', 'Lahore', 'Pakistan', 'customer', '2023-04-03 17:40:05'),
(3, 'Hassan', 'hassan@gmail.com', 'hassan123', 123456789, 'Karachi', 'Karachi', 'Pakistan', 'customer', '2023-04-06 03:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(11) NOT NULL,
  `D_Name` varchar(255) NOT NULL,
  `D_Image` varchar(255) NOT NULL,
  `Uploaded_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `D_Name`, `D_Image`, `Uploaded_Date`) VALUES
(2, 'Civil Litigation', 'CivilLitigation.jpg', '2023-03-28 06:28:18'),
(3, 'Criminal', 'criminal.jpg', '2023-03-28 06:49:17'),
(5, 'Divorce', 'divorse.jpg', '2023-03-28 06:52:28'),
(6, 'Accident', 'Accident.jpg', '2023-04-01 06:30:39'),
(7, 'Business Taxation', 'BusinessTaxation.jpg', '2023-04-01 06:32:22'),
(8, 'Finance', 'Financelaw.jpg', '2023-04-01 05:19:16'),
(13, 'Affidavit', 'affidavit.jpg', '2023-03-28 17:56:49'),
(16, 'Employment', 'employment.jpg', '2023-04-01 06:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Contact` int(12) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`ID`, `Name`, `Email`, `Password`, `Department`, `Contact`, `Address`, `City`, `Country`, `Image`, `Role`, `Date`) VALUES
(1, 'Ahmed', 'ahmed@gmail.com', 'ahmed123', 'Civil Litigation', 123456789, 'Hyderabad', 'Hyderabad', 'Pakistan', 'lawyer_1.jpeg', 'lawyer', '2023-04-05 01:48:37'),
(2, 'Raza', 'raza@gmail.com', 'raza123', 'Criminal', 123456789, 'Hyderabad', 'Hyderabad', 'Pakistan', 'lawyer_2.png', 'lawyer', '2023-04-05 02:07:56'),
(3, 'Zuhaib', 'zuhaib@gmail.com', 'zuhaib123', 'Divorce', 123456789, 'Lahore', 'Lahore', 'Pakistan', 'lawyer_3.png', 'lawyer', '2023-04-05 01:51:47'),
(4, 'Hamza', 'hamza@gmail.com', 'hamza123', 'Accident', 123456789, 'Karachi', 'Karachi', 'Pakistan', 'lawyer_4.png', 'lawyer', '2023-04-05 01:52:00'),
(5, 'Ahsan', 'ahsan@gmail.com', 'ahsan123', 'Business Taxation', 123456789, 'Lahore', 'Lahore', 'Pakistan', 'lawyer_5.png', 'lawyer', '2023-04-05 01:52:16'),
(6, 'Mustafa', 'mustafa@gmail.com', 'mustafa123', 'Finance', 123456789, 'Hyderabad', 'Hyderabad', 'Pakistan', 'lawyer_6.png', 'lawyer', '2023-04-05 01:52:38'),
(7, 'Amir', 'amir@gmail.com', 'amir123', 'Affidavit', 123456789, 'Swaat', 'Swaat', 'Pakistan', 'lawyer_7.jpg', 'lawyer', '2023-04-05 01:52:54'),
(8, 'Bilal', 'bilal@gmail.com', 'bilal123', 'Employment', 123456789, 'Swaat', 'Swaat', 'Pakistan', 'lawyer_8.png', 'lawyer', '2023-04-05 01:53:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
