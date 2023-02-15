-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 06:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orderlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `S_no` int(11) NOT NULL,
  `Reg_Id` varchar(30) NOT NULL,
  `sub_date` date NOT NULL DEFAULT current_timestamp(),
  `SM140` int(11) DEFAULT NULL,
  `SM500` int(11) DEFAULT NULL,
  `FCM500` int(11) DEFAULT NULL,
  `SM1L` int(11) DEFAULT NULL,
  `FCM1L` int(11) DEFAULT NULL,
  `C140` int(11) DEFAULT NULL,
  `C500` int(11) DEFAULT NULL,
  `CUP100` int(11) DEFAULT NULL,
  `CUP200` int(11) DEFAULT NULL,
  `BTMILK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `S_no` int(11) NOT NULL,
  `Reg_Id` varchar(30) NOT NULL,
  `fName` varchar(30) DEFAULT NULL,
  `Ph_no` varchar(15) NOT NULL,
  `Area` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`S_no`, `Reg_Id`, `fName`, `Ph_no`, `Area`) VALUES
(1, 'GKM_1', 'G.K.milk', '9787577142', 'Thammampatty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`S_no`),
  ADD UNIQUE KEY `Reg_Id` (`Reg_Id`),
  ADD UNIQUE KEY `Ph_no` (`Ph_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
