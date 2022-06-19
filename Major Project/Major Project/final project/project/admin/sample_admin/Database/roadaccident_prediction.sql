-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 09:15 AM
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
-- Database: `roadaccident_prediction`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident_prediction`
--

CREATE TABLE `accident_prediction` (
  `prediction_id` int(50) NOT NULL,
  `prediction_country` varchar(100) NOT NULL,
  `prediction_state` varchar(100) NOT NULL,
  `prediction_city` varchar(100) NOT NULL,
  `prediction_place` varchar(100) NOT NULL,
  `prediction_area` varchar(100) NOT NULL,
  `prediction_junction` varchar(100) NOT NULL,
  `prediction_lattitude` varchar(50) NOT NULL,
  `prediction_longitude` varchar(50) NOT NULL,
  `prediction_vehiclenmae` varchar(20) NOT NULL,
  `prediction_vehicletype` varchar(100) NOT NULL,
  `prediction_licensetype` varchar(50) NOT NULL,
  `prediction_vehicleage` varchar(50) NOT NULL,
  `prediction_vehicleload` varchar(50) NOT NULL,
  `prediction_rulesviolation` varchar(50) NOT NULL,
  `prediction_accidentimage` text NOT NULL,
  `prediction_accidenttime` text NOT NULL,
  `prediction_membersinvehicle` varchar(20) NOT NULL,
  `prediction_desription` text NOT NULL,
  `prediction_roadtype` varchar(50) NOT NULL,
  `prediction_weather` varchar(50) NOT NULL,
  `prediction_persontype` varchar(50) NOT NULL,
  `prediction_age` varchar(50) NOT NULL,
  `prediction_gender` varchar(50) NOT NULL,
  `prediction_status` varchar(50) NOT NULL DEFAULT 'Not Verified',
  `prediction_cdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accident_prediction`
--

INSERT INTO `accident_prediction` (`prediction_id`, `prediction_country`, `prediction_state`, `prediction_city`, `prediction_place`, `prediction_area`, `prediction_junction`, `prediction_lattitude`, `prediction_longitude`, `prediction_vehiclenmae`, `prediction_vehicletype`, `prediction_licensetype`, `prediction_vehicleage`, `prediction_vehicleload`, `prediction_rulesviolation`, `prediction_accidentimage`, `prediction_accidenttime`, `prediction_membersinvehicle`, `prediction_desription`, `prediction_roadtype`, `prediction_weather`, `prediction_persontype`, `prediction_age`, `prediction_gender`, `prediction_status`, `prediction_cdate`) VALUES
(1, 'India', 'Telangana', 'Hyderabad', 'Urban', 'Residental Area', 'T-Junction', '1.98426429', '1.876348359', 'Sample', 'Pedestrian', 'License valid Parmanent', 'Less then 5 Years', 'Normal Loaded', 'Over Speeding', '0', '11:00', '1', 'sample', 'Straight Road', 'Clear', 'Driver', '18 Yrs', 'Male', 'Verified', '2022-04-22 07:09:06'),
(2, 'India', 'Telangana', 'Hyderabad', 'Urban', 'Residental Area', 'T-Junction', '1.98426429', '1.876348359', 'Sample', 'Pedestrian', 'License valid Parmanent', 'Less then 5 Years', 'Normal Loaded', 'Over Speeding', '0', '11:00', '1', 'sample', 'Straight Road', 'Clear', 'Driver', '18 Yrs', 'Male', 'Not Verified', '2022-04-22 07:10:57'),
(3, 'India', 'Telangana', 'Hyderabad', 'Urban', 'Institutional Area', 'T-Junction', '1.98426429', '1.876348359', 'Sample', 'Pedestrian', 'License valid Parmanent', '5.1-10 Years', 'Normal Loaded', 'Over Speeding', '0', '11:00', '1', 'sample', 'Straight Road', 'Clear', 'Driver', '18 Yrs', 'Male', 'Verified', '2022-04-22 07:13:06'),
(136, 'India', 'Telanagana', 'Hyderabad', 'Koti', 'Koti', 'Y - Junction', '2.976444', '2.96972', 'Sample', 'Bicycle', 'Without License', '10.1-15 Years', 'Normal Loaded', 'Drunking Driving', '0', '12:00', '20', 'Sampej jhgy jhg yd hgdtrdb yd tdsredh hfdtf bvtdgb vy', 'Bridge', 'Sunny', 'Owners', '35-45 Yrs', 'Other', 'Verified', '2022-04-22 11:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `login_id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`login_id`, `user_name`, `password`, `cdate`) VALUES
(1, 'admin', 'admin', '2022-04-21 07:18:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident_prediction`
--
ALTER TABLE `accident_prediction`
  ADD PRIMARY KEY (`prediction_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident_prediction`
--
ALTER TABLE `accident_prediction`
  MODIFY `prediction_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `login_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
