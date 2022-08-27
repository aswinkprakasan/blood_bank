-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2022 at 02:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_table`
--

CREATE TABLE `donor_table` (
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userrole` varchar(50) NOT NULL DEFAULT 'user',
  `password` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `age` int(10) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `weight` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phonenumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_table`
--

INSERT INTO `donor_table` (`email`, `username`, `userrole`, `password`, `dob`, `age`, `sex`, `bloodgroup`, `weight`, `address`, `city`, `phonenumber`) VALUES
('aswinachuo2001@gmail.com', 'Aswin', 'admin', 'Aswink@123', '2001-12-21', 20, 'Male', 'A+', 75, 'Kuttanchery House Marathamcode PO', 'Kunnamkulam', '8304984366'),
('aswinka@gmail.com', 'Aswin', 'user', 'Aswinka@123', '2001-10-05', 20, 'Male', 'AB-', 70, 'Nellikal house Ezhupunna', 'Kumblangi', '9078451339'),
('hijas@gmail.com', 'Hijas', 'user', 'Hijas@123', '2002-01-01', 20, 'Male', 'A+', 59, 'Darussalam Thoravur PO', 'Cherthala', '8745305612'),
('prakasan@gmail.com', 'Prakasan', 'admin', 'Aswink@123', '1968-03-16', 54, 'Male', 'O+', 79, 'Kuttanchery house \r\nMarathamcode PO\r\n680604', 'Kunnamkulam', '9495552322'),
('sreenath@gmail.com', 'Sreenath', 'user', 'Sreenath@123', '2001-09-29', 20, 'Male', 'AB+', 65, 'marathencode', 'kunnamkulam', '9037002597');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_table`
--
ALTER TABLE `donor_table`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
