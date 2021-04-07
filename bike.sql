-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 11:02 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bike`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_service`
--

CREATE TABLE `add_service` (
  `id` int(11) NOT NULL,
  `services` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_service`
--

INSERT INTO `add_service` (`id`, `services`) VALUES
(1, 'Oil Change'),
(2, 'General Service Check-Up'),
(3, 'Water Wash');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
('admin44', 'ramanathan@gmail.com', 'cartrabbit');

-- --------------------------------------------------------

--
-- Table structure for table `customer_service`
--

CREATE TABLE `customer_service` (
  `id` int(11) NOT NULL,
  `serviceid` varchar(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `bikenumber` varchar(10) NOT NULL,
  `bikemodal` varchar(20) NOT NULL,
  `servicedate` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `avail_service` varchar(50) NOT NULL,
  `phoneno` bigint(13) NOT NULL,
  `altphoneno` bigint(13) NOT NULL,
  `idname` varchar(20) NOT NULL,
  `idnumber` varchar(20) NOT NULL,
  `address` mediumtext NOT NULL,
  `statusreport` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_service`
--

INSERT INTO `customer_service` (`id`, `serviceid`, `firstname`, `lastname`, `bikenumber`, `bikemodal`, `servicedate`, `email`, `avail_service`, `phoneno`, `altphoneno`, `idname`, `idnumber`, `address`, `statusreport`, `created_at`, `updated_at`) VALUES
(39, '1', 'Ramanathan', 'K', 'TN98Y7898', 'Pulsar', '2021-04-08', 'vkramanathan99@gmail.com', 'Oil Change', 8838027431, 9524848585, 'Aadhaar Card', '1230456978963', 'Tiruppur', 'Pending', '2021-04-07 08:25:02', '2021-04-07 08:25:02'),
(40, '1', 'Ramanathan', 'K', 'TN98Y7890', 'Pulsar', '2021-04-08', 'vkramanathan99@gmail.com', 'Oil Change', 8838027431, 9524848585, 'Aadhaar Card', '12542859621545245', 'Tiruppur', 'Completed', '2021-04-07 08:30:47', '2021-04-07 08:30:47'),
(41, '1', 'Karthick', 'R', 'TN09U8970', 'Discover 150', '2021-04-08', 'karthickking2233@gmail.com', 'Water Wash', 6381172834, 0, 'Voter ID', '516511655855', 'Tiruppur', 'Ready For Delivery', '2021-04-07 08:33:10', '2021-04-07 08:33:10'),
(42, '1', 'Jai Sri Ram', 'M', 'TN89J7890', 'Kawasaki Ninja 300', '2021-04-08', 'jaisriram8072141458@gmail.com', 'General Service Check-Up', 8072141458, 0, 'Aadhaar Card', '42156323451', 'Tiruppur', 'Booked', '2021-04-07 08:37:38', '2021-04-07 08:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `cpassword`, `created_at`, `updated_at`) VALUES
(1, 'Ramanathan', 'K', 'ram@gmail.com', 'ramanathan', 'ramanathan', '2021-04-04 12:36:33', '2021-04-04 12:36:33'),
(3, 'Karthick', 'R', 'karthick@gmail.com', 'karthick', 'karthick', '2021-04-04 12:37:54', '2021-04-04 12:37:54'),
(4, 'Karthick', 'R', 'karthick@gmail.com', 'karthick', 'karthick', '2021-04-04 16:09:13', '2021-04-04 16:09:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_service`
--
ALTER TABLE `add_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_service`
--
ALTER TABLE `customer_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_service`
--
ALTER TABLE `add_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_service`
--
ALTER TABLE `customer_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
