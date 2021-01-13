-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2021 at 02:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cedcab`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `S_No` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Number` bigint(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Date` datetime DEFAULT current_timestamp(),
  `Is_Admin` tinyint(1) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`S_No`, `Email`, `Name`, `Number`, `Password`, `Date`, `Is_Admin`, `status`) VALUES
(8, 'admin@gmail.com', 'Admin', 9786754699, 'Password123$', '2021-01-06 11:28:07', 1, 2),
(10, 'sheruk7898@gmail.com', 'sher', 8548568524, 'sheru', '2021-01-07 10:57:35', 0, 0),
(13, 'mouryasuneelsm.sm93@gmail.com', 'raj', 7574757567, '1234', '2021-01-08 16:03:41', 0, 1),
(14, 'singhsumit880@gmail.com', 'sumit', 9668678678, 'sumit', '2021-01-08 16:04:42', 0, 1),
(15, 'mnckumar0522@gmail.com', 'monu', 6445645646, 'monu', '2021-01-08 20:06:56', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `distance` bigint(100) NOT NULL,
  `is_available` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `name`, `distance`, `is_available`) VALUES
(2, 'Indra Nagar', 10, 'available'),
(3, 'BBD', 30, 'available'),
(4, 'Barabanki', 60, 'available'),
(5, 'Faizabad', 100, 'available'),
(6, 'Basti', 150, 'available'),
(7, 'Gorakhpur', 210, 'available'),
(8, 'Charbagh', 0, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rides`
--

CREATE TABLE `tbl_rides` (
  `ride_id` int(100) NOT NULL,
  `ride_date` datetime NOT NULL DEFAULT current_timestamp(),
  `ride_from` varchar(100) NOT NULL,
  `ride_to` varchar(100) NOT NULL,
  `total_distance` bigint(100) NOT NULL,
  `luggage` bigint(100) NOT NULL,
  `total_fare` bigint(100) NOT NULL,
  `status` int(100) NOT NULL,
  `user_id` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rides`
--

INSERT INTO `tbl_rides` (`ride_id`, `ride_date`, `ride_from`, `ride_to`, `total_distance`, `luggage`, `total_fare`, `status`, `user_id`) VALUES
(6, '2021-01-07 14:53:49', 'Indira Nagar', 'Barabanki', 50, 11, 915, 2, 10),
(7, '2021-01-07 14:54:28', 'Charbagh', 'Barabanki', 60, 11, 1045, 2, 10),
(8, '2021-01-07 14:55:37', 'Charbagh', 'Barabanki', 60, 11, 1155, 2, 10),
(9, '2021-01-07 15:57:32', 'BBD', 'Indira Nagar', 20, 11, 525, 2, 10),
(13, '2021-01-07 19:17:54', 'Indira Nagar', 'Basti', 140, 1, 1601, 2, 11),
(14, '2021-01-07 19:18:30', 'Charbagh', 'Basti', 150, 1, 1703, 2, 11),
(15, '2021-01-07 19:18:50', 'Charbagh', 'Basti', 150, 1, 1703, 2, 11),
(16, '2021-01-07 19:19:08', 'Charbagh', 'Basti', 150, 0, 1703, 2, 11),
(17, '2021-01-07 19:22:22', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 11),
(18, '2021-01-07 19:24:07', 'Charbagh', 'BBD', 30, 0, 425, 2, 11),
(19, '2021-01-07 19:25:30', 'Charbagh', 'BBD', 30, 0, 425, 2, 11),
(20, '2021-01-07 20:25:25', 'Charbagh', 'BBD', 30, 0, 425, 2, 12),
(21, '2021-01-08 09:21:35', 'Indira Nagar', 'Barabanki', 50, 0, 665, 2, 11),
(22, '2021-01-08 09:30:11', 'Charbagh', 'BBD', 30, 0, 635, 2, 11),
(23, '2021-01-08 11:31:06', 'Charbagh', 'BBD', 30, 0, 555, 2, 11),
(25, '2021-01-08 16:31:36', 'Charbagh', 'Barabanki', 60, 0, 785, 2, 14),
(26, '2021-01-08 17:40:51', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 10),
(27, '2021-01-08 17:41:37', 'Indira Nagar', 'Charbagh', 10, 0, 185, 2, 10),
(28, '2021-01-08 17:43:04', 'Indira Nagar', 'Charbagh', 10, 0, 185, 2, 10),
(29, '2021-01-08 17:43:32', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 10),
(30, '2021-01-08 17:43:39', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 10),
(31, '2021-01-08 17:43:39', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 10),
(32, '2021-01-08 17:43:40', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 10),
(33, '2021-01-08 17:43:40', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 10),
(34, '2021-01-08 17:43:40', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 10),
(35, '2021-01-08 17:45:30', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 13),
(36, '2021-01-08 17:48:18', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 13),
(37, '2021-01-08 17:48:35', 'Charbagh', 'Barabanki', 60, 0, 785, 2, 13),
(38, '2021-01-08 17:58:18', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 13),
(41, '2021-01-08 20:45:18', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 13),
(42, '2021-01-08 20:45:33', 'Indira Nagar', 'Charbagh', 10, 0, 295, 2, 13),
(43, '2021-01-08 20:56:01', 'Indira Nagar', 'Charbagh', 10, 0, 185, 2, 13),
(44, '2021-01-08 20:56:17', 'Charbagh', 'Indira Nagar', 10, 0, 185, 2, 13),
(45, '2021-01-08 21:05:51', 'Charbagh', 'BBD', 30, 0, 425, 2, 13),
(46, '2021-01-08 21:05:59', 'BBD', 'Charbagh', 30, 0, 555, 0, 13),
(47, '2021-01-08 21:06:06', 'Charbagh', 'Barabanki', 60, 0, 785, 2, 13),
(48, '2021-01-08 21:06:15', 'Barabanki', 'Indira Nagar', 50, 0, 665, 0, 13),
(52, '2021-01-09 09:13:34', 'Charbagh', 'BBD', 30, 0, 425, 0, 14),
(53, '2021-01-09 09:13:46', 'BBD', 'Indira Nagar', 20, 0, 305, 0, 14),
(54, '2021-01-09 11:14:28', 'Charbagh', 'Indira Nagar', 10, 0, 185, 0, 13),
(55, '2021-01-09 11:14:40', 'Barabanki', 'Charbagh', 60, 0, 785, 0, 13),
(56, '2021-01-09 11:18:48', 'Charbagh', 'Indira Nagar', 10, 0, 185, 0, 13),
(57, '2021-01-09 11:21:47', 'Charbagh', 'BBD', 30, 0, 425, 0, 13),
(58, '2021-01-09 11:33:41', 'BBD', 'Indira Nagar', 20, 0, 305, 1, 13),
(59, '2021-01-09 11:58:43', 'Charbagh', 'BBD', 30, 0, 425, 1, 14),
(60, '2021-01-09 11:59:03', 'Indira Nagar', 'BBD', 20, 0, 305, 1, 14),
(61, '2021-01-09 12:01:10', 'Charbagh', 'BBD', 30, 0, 425, 1, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`S_No`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rides`
--
ALTER TABLE `tbl_rides`
  ADD PRIMARY KEY (`ride_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `S_No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_rides`
--
ALTER TABLE `tbl_rides`
  MODIFY `ride_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
