-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2022 at 02:52 AM
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
('abangregory@gmail.com', 'Aban', 'user', 'Aban@123', '2001-04-21', 21, 'Male', 'A+', 65, 'Tholath house, \r\nCalicut road, \r\nkunnamkulam ', 'kunnamkulam', '9778383470'),
('abhinyameppayil@gmail.com', 'Abhinya', 'user', 'Abhinya@123', '2001-11-25', 20, 'Female', 'AB+', 50, 'Palayulla Parambath,\r\n meppayil (po),\r\nVadakara', 'vadakara', '7034307436'),
('adwaithk2001@gmail.com', 'Adwaith', 'user', 'Adwaith@123', '2001-05-02', 21, 'Male', 'A+', 62, 'Kaithakkatt house \r\nP.O Panangad', 'thrissur', '8848645829'),
('akhilajin619@gmail.com', 'Akhil', 'user', 'Akhil@123', '2001-05-03', 21, 'Male', 'O+', 65, 'Vadakkan house, \r\nchowannoor PO,\r\nKunnamkulam ', 'kunnamkulam', '8075620220'),
('aksharar79@gmail.com', 'Akshara', 'user', 'Akshara@123', '2002-11-01', 19, 'Female', 'AB-', 50, 'Thazhevalappil \r\nvilliapally\r\nvadakara', 'vadakara', '6282722360'),
('anandhajith@gmail.com', 'Anandhajith', 'user', 'Anandhajith@123', '1965-05-04', 57, 'Male', 'O-', 65, 'Ayyapath house \r\nPoosapilly\r\nmarathamcode', 'Marathamcode', '7896959595'),
('appu@gmail.com', 'Appu', 'user', 'Appus@123', '2006-11-09', 15, 'Male', 'A+', 70, 'Velithiruthi\r\nThrissur\r\nKerala', 'thrissur', '9072497852'),
('archachippy918@gmail.com', 'Archa', 'user', 'Archa@345', '2001-06-20', 21, 'Female', 'B+', 56, 'Anjanam, Madathilkarazhma p.o Oachira\r\nKollam', 'Kollam', '8281889315'),
('ashwinachu467@gmail.com', 'Ashwin', 'user', 'Ashwin@123', '1995-08-08', 27, 'Male', 'A+', 75, 'Kalathiprambil\r\nkumbalangi', 'alappey', '8304051125'),
('aswinachuo2001@gmail.com', 'Aswin', 'admin', 'Aswink@123', '2001-12-21', 20, 'Male', 'A+', 75, 'Kuttanchery House Marathamcode PO', 'Kunnamkulam', '8304984366'),
('aswinak@gmail.com', 'Aswin', 'user', 'Aswin@123', '2002-07-13', 20, 'Male', 'B-', 57, 'Kanimangalam kovilakam,\r\nErnakulam west', 'Kochi', '9856758685'),
('aswinka@gmail.com', 'Aswin', 'user', 'Aswinka@123', '2001-10-05', 20, 'Male', 'AB-', 70, 'Nellikal house Ezhupunna', 'Kumblangi', '9078451339'),
('aswinkumarpv239@gmail.com', 'Aswin', 'user', '@Swin239', '2002-09-23', 20, 'Male', 'A+', 75, 'Puthiya Veetill , Pallikkara , Neerukkil', 'Kasargod', '9961417912'),
('dakshinard3010@gmail.com', 'Dakshina', 'user', 'Dakshina@123', '2002-10-30', 19, 'Female', 'B+', 45, 'Nandhanam \r\nkumarapuram \r\np.o haripad', 'alappey', '9074240094'),
('fidasahoodap@gmail.com', 'Fida', 'user', 'Fida@1234', '2001-03-14', 21, 'Female', 'A+', 42, 'Kunnamangalam (po)\r\nCalicut \r\n673571', 'calicut', '8593006035'),
('hijas@gmail.com', 'Hijas', 'user', 'Hijas@123', '2002-01-01', 20, 'Male', 'A+', 50, 'Darussalam Thoravur PO', 'Cherthala', '8745305612'),
('jericsongeogre@gmail.com', 'Jericson', 'user', 'Jericson@123', '2001-05-12', 21, 'Male', 'B+', 90, 'madambally \r\nthrikakara\r\nernakulam ', 'erna', '9447137866'),
('jins.chamakalayil@gmail.com', 'jinsmon', 'user', 'Jinsmon@123', '2002-08-31', 19, 'Male', 'O+', 65, 'Chamakalayalil house \r\nkaipuza po \r\nKottayam ', 'kottayam', '7907703114'),
('joeltom58@gmail.com', 'Joel', 'user', 'Joeltom@123', '2002-11-14', 19, 'Male', 'O+', 85, 'rajagiri house\r\ngandhinagar\r\np.o kottayam', 'kottayam', '8281516551'),
('kannan@gmail.com', 'Kannan', 'user', 'Kannan@123', '1995-09-08', 26, 'Male', 'A-', 60, 'Manu villasam, \r\neroor po \r\nedappal', 'malappuram', '9825389361'),
('kurianbinu000@gmail.com', 'Kurian', 'user', 'Kurian@123', '2002-10-27', 19, 'Male', 'B+', 68, 'Njonginiyil , \r\nAthirampuzha p.o\r\nkottayam\r\n', 'kottayam', '7736229090'),
('megha200448@gmail.com', 'Megha', 'user', 'Megha@123', '2001-10-29', 20, 'Female', 'A+', 60, 'Shibu bhavan \r\nkarikkakam kuthirakulam p.o\r\n vembayam,TVM, Kerala', 'trivandrum', '8157065441'),
('prakasan@gmail.com', 'Prakasan', 'admin', 'Aswink@123', '1968-03-16', 54, 'Male', 'O+', 79, 'Kuttanchery house \r\nMarathamcode PO\r\n680604', 'Kunnamkulam', '9495552322'),
('pridhvi02@gmail.com', 'pridhvi', 'user', 'Qwertyuiop!1', '2002-03-12', 20, 'Male', 'A-', 72, 'kamblikkal house njarakkal p.o', 'kochi', '7356852580'),
('raghir97@gmail.com', 'Raghi', 'user', 'Raghi@123', '1997-10-19', 24, 'Female', 'AB-', 58, 'Tazhe valappil , \r\nvilliappally,vadakara,\r\nkozhikode,pin-673542', 'Vadakara', '6282486636'),
('rathukrishna4@gmail.com', 'Rathu', 'user', 'Rathu@123', '2002-05-28', 20, 'Female', 'A+', 74, 'A1-002 NTPC Township\r\nHotgi Station,Solapur', 'solapur', '8698801343'),
('sachintp1209@gmail.com', 'Sachin', 'user', 'Sachin@123', '2002-09-12', 19, 'Male', 'B+', 60, 'thalathilparambe\r\nedappal\r\nmalappuram', 'malappuram', '8547683903'),
('shankaranprivate@gmail.com', 'Shankaranarayanan', 'user', 'Shankaran@123', '2002-07-10', 20, 'Male', 'B+', 85, 'Plasseril house \r\nkarunagapalli\r\nkollam', 'kollam', '8547261713'),
('shiv@gmail.com', 'Shivanadh', 'user', 'Shivanadh@123', '2005-03-18', 17, 'Male', 'O-', 56, 'Kamblikkal house \r\nNjarakkal P.O Vypin ', 'Ernakulam', '7356852580'),
('sooryalakshmisooraj@gmail.com', 'Soorya', 'user', 'Soorya@123', '2002-08-09', 20, 'Female', 'A+', 62, 'Karthika nedumanal \r\nvettor po \r\nPATHANAMTHITTA ', 'pathanamthitta', '7907988147'),
('sreelakshmilachu2004@gmail.com', 'Sreelakshmi', 'user', 'Sreelakshmi@123', '2004-11-18', 17, 'Female', 'AB+', 44, 'Thalengattil house \r\npoosapilly \r\nmarathamcode', 'Kunnamkulam', '9037192597'),
('sreenath@gmail.com', 'Sreenath', 'user', 'Sreenath@123', '2001-09-29', 20, 'Male', 'AB+', 65, 'marathencode', 'Ernakulam', '9037002597'),
('sreenathkunjan2001@gmail.com', 'Sreenath', 'user', 'Sreenath@123', '2001-09-21', 20, 'Male', 'AB+', 49, 'Thalangattil house\r\nMarathencode\r\n(P.O) Thrissur', 'thrissur', '9037002597'),
('vigneshhari14@gmail.com', 'Vignesh', 'user', 'Vighnesh@123', '2002-08-14', 20, 'Male', 'O+', 65, 'Sreekadaksham \r\nhouse no 25B VVMRA\r\nattingal trivandrum \r\n', 'trivandrum', '9645969793');

-- --------------------------------------------------------

--
-- Table structure for table `last_donation_table`
--

CREATE TABLE `last_donation_table` (
  `email` varchar(100) NOT NULL,
  `days` int(100) NOT NULL,
  `last_don_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `last_donation_table`
--

INSERT INTO `last_donation_table` (`email`, `days`, `last_don_date`) VALUES
('abangregory@gmail.com', 91, '2022-05-31'),
('abhinyameppayil@gmail.com', 59, '2022-07-02'),
('adwaithk2001@gmail.com', 117, '2022-05-05'),
('akhilajin619@gmail.com', 25, '2022-08-05'),
('aksharar79@gmail.com', 87, '2022-06-04'),
('anandhajith@gmail.com', 123, '2022-04-29'),
('archachippy918@gmail.com', 21, '2022-08-07'),
('ashwinachu467@gmail.com', 116, '2022-05-06'),
('aswinak@gmail.com', 163, '2022-03-20'),
('aswinka@gmail.com', 117, '2022-05-05'),
('aswinkumarpv239@gmail.com', 27, '2022-08-03'),
('dakshinard3010@gmail.com', 234, '2022-01-08'),
('hijas@gmail.com', 136, '2022-04-14'),
('jericsongeogre@gmail.com', 150, '2022-04-02'),
('jins.chamakalayil@gmail.com', 200, '2022-02-11'),
('joeltom58@gmail.com', 157, '2022-03-26'),
('kannan@gmail.com', 29, '2022-08-01'),
('kurianbinu000@gmail.com', 86, '2022-06-05'),
('megha200448@gmail.com', 108, '2022-05-14'),
('pridhvi02@gmail.com', 23, '2022-08-05'),
('raghir97@gmail.com', 66, '2022-06-25'),
('rathukrishna4@gmail.com', 100, '2022-05-22'),
('sachintp1209@gmail.com', 27, '2022-08-03'),
('shankaranprivate@gmail.com', 52, '2022-07-09'),
('sooryalakshmisooraj@gmail.com', 24, '2022-08-06'),
('sreenath@gmail.com', 26, '2022-08-04'),
('sreenathkunjan2001@gmail.com', 115, '2022-05-07'),
('vigneshhari14@gmail.com', 207, '2022-02-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_table`
--
ALTER TABLE `donor_table`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `last_donation_table`
--
ALTER TABLE `last_donation_table`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
