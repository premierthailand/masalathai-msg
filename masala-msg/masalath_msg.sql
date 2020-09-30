-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 12:22 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masalath_msg`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `category_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_isActive` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_isActive`, `timestamp`) VALUES
(1, 'Hotel', 1, '2020-09-21 09:37:20'),
(2, 'Hospital', 1, '2020-09-21 09:37:30'),
(3, 'School', 1, '2020-09-21 09:37:45'),
(4, 'Travel', 1, '2020-09-22 09:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `issue_id` int(10) NOT NULL,
  `issue_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`issue_id`, `issue_name`, `timestamp`) VALUES
(0, 'No Issue', '2020-09-22 10:24:45'),
(1, 'Refuse to accept', '2020-09-21 09:35:45'),
(2, 'Need a contact person', '2020-09-21 09:35:45'),
(3, 'Other', '2020-09-21 09:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(10) NOT NULL,
  `location_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_houseno` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_soi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_soi_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_subsoi_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_road` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_District` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_Province` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_postno` int(10) NOT NULL,
  `location_area` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_count` int(10) NOT NULL,
  `location_contact_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_contact_phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_category_id` int(10) NOT NULL,
  `Location_isActive` tinyint(1) NOT NULL,
  `location_update_id` int(10) NOT NULL,
  `location_create_id` int(10) NOT NULL,
  `location_update_time` datetime NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `location_address`, `location_houseno`, `location_soi`, `location_soi_number`, `location_subsoi_number`, `location_road`, `location_District`, `location_Province`, `location_postno`, `location_area`, `location_img`, `location_count`, `location_contact_name`, `location_contact_phone`, `location_category_id`, `Location_isActive`, `location_update_id`, `location_create_id`, `location_update_time`, `timestamp`) VALUES
(1, 'Premeir Thailand', '85/5 Sukhumvit 12/1 Road klong-toey Bangkok 10110', '85/5', 'Sukhumvit', '12', '1', 'Road', 'klong-toey', 'Bangkok', 10110, 'Sukhumvit', '01.jpg', 15, 'Premier Support team', '060-1112345', 2, 1, 1, 1, '2020-09-21 15:09:18', '2020-09-30 08:48:56'),
(2, 'Novotel', '19/1 Sukhumvit 20/1 Road klong-toey Bangkok 10110', '19/1', 'Sukhumvit', '20', '1', 'Road', 'klong-toey', 'Bangkok', 10110, 'Riverside', '0oybzph2p78kfp6xvo9.jpg', 1, 'Somporn Sompong', '060-0001111', 1, 1, 1, 0, '2020-09-22 10:35:00', '2020-09-30 09:32:12'),
(3, 'SKYVIEW Hotel Bangkok', '12 Sukhumvit 20/1 Road klong-toey Bangkok 10110', '12', 'Sukhumvit', '20', '1', 'Road', 'klong-toey', 'Bangkok', 10110, 'beach', '0zxkhquxrnmfkfp6y4yo.jpg', 1, 'Song wannawong', '090-1010000', 1, 1, 1, 1, '2020-09-22 00:00:00', '2020-09-30 09:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `magazinetype`
--

CREATE TABLE `magazinetype` (
  `magazineType_id` int(1) NOT NULL,
  `magazineType_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magazinetype`
--

INSERT INTO `magazinetype` (`magazineType_id`, `magazineType_name`, `timestamp`) VALUES
(1, 'masala', '2020-09-23 06:12:40'),
(2, 'lite', '2020-09-23 06:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `magazinevol`
--

CREATE TABLE `magazinevol` (
  `magazineVol_id` int(10) NOT NULL,
  `magazineType_id` int(10) NOT NULL,
  `magazineVol_Month_id` int(2) NOT NULL,
  `magazineVol_Month` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `magazineVol_Year` int(4) NOT NULL,
  `timpstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magazinevol`
--

INSERT INTO `magazinevol` (`magazineVol_id`, `magazineType_id`, `magazineVol_Month_id`, `magazineVol_Month`, `magazineVol_Year`, `timpstamp`) VALUES
(1, 1, 1, 'December - January 2020', 2020, '2020-09-23 08:00:53'),
(2, 1, 3, 'February - March 2020', 2020, '2020-09-23 08:01:00'),
(3, 1, 5, 'April - May 2020', 2020, '2020-09-23 08:01:06'),
(4, 1, 7, 'June - July 2020', 2020, '2020-09-23 08:01:15'),
(5, 1, 9, 'August - September 2020', 2020, '2020-09-23 08:01:17'),
(6, 1, 11, 'October - November 2020', 2020, '2020-09-23 08:01:20'),
(7, 2, 1, 'January 2020', 2020, '2020-09-23 08:01:23'),
(8, 2, 2, 'February 2020', 2020, '2020-09-23 08:01:25'),
(9, 2, 3, 'March 2020', 2020, '2020-09-23 08:01:28'),
(10, 2, 4, 'April 2020', 2020, '2020-09-23 08:01:31'),
(11, 2, 5, 'May 2020', 2020, '2020-09-23 08:01:33'),
(12, 2, 6, 'June 2020', 2020, '2020-09-23 08:01:35'),
(13, 2, 7, 'July 2020', 2020, '2020-09-23 08:01:37'),
(14, 2, 8, 'August 2020', 2020, '2020-09-23 08:01:39'),
(15, 2, 9, 'September 2020', 2020, '2020-09-23 08:01:43'),
(16, 2, 10, 'October 2020', 2020, '2020-09-23 08:01:45'),
(17, 2, 11, 'November 2020', 2020, '2020-09-23 08:01:47'),
(18, 2, 12, 'December 2020', 2020, '2020-09-23 08:01:50'),
(25, 1, 1, 'December - January 2021', 2021, '2020-09-23 08:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `messenger`
--

CREATE TABLE `messenger` (
  `messenger_id` int(10) NOT NULL,
  `messenger_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `messenger_phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `messenger_isActive` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messenger`
--

INSERT INTO `messenger` (`messenger_id`, `messenger_name`, `messenger_phone`, `messenger_isActive`, `timestamp`) VALUES
(1, 'Sompong', '084-4445555', 1, '2020-09-21 09:50:54'),
(2, 'samon', '085-5556666', 1, '2020-09-21 09:50:57'),
(3, 'sutisuk', '060-0007777', 1, '2020-09-23 01:58:41'),
(4, 'sakhon', '069-33311111', 1, '2020-09-21 09:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(1) NOT NULL,
  `role_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `timestamp`) VALUES
(1, 'webDev', '2020-09-21 09:45:17'),
(2, 'Manager', '2020-09-28 07:01:07'),
(3, 'Admin', '2020-09-28 07:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE `transection` (
  `transection_id` int(10) NOT NULL,
  `messenger_id` int(10) NOT NULL,
  `location_id` int(10) NOT NULL,
  `transection_delivery_date` date NOT NULL,
  `transection_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `transection_isActive` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL,
  `transection_comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `magazineVol_id` int(10) NOT NULL,
  `transection_update_id` int(10) NOT NULL,
  `transection_create_id` int(10) NOT NULL,
  `transection_update_time` datetime NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`transection_id`, `messenger_id`, `location_id`, `transection_delivery_date`, `transection_img`, `transection_isActive`, `issue_id`, `transection_comment`, `magazineVol_id`, `transection_update_id`, `transection_create_id`, `transection_update_time`, `timestamp`) VALUES
(1, 1, 1, '2020-09-20', 'o0w7x2e4s17kfp55lfz.jpg', 1, 0, '', 1, 1, 1, '2020-09-30 03:42:20', '2020-09-30 08:42:20'),
(2, 3, 1, '2020-09-22', '06.jpg', 1, 0, '', 2, 1, 1, '2020-09-28 02:56:03', '2020-09-28 07:57:18'),
(3, 4, 1, '2020-09-22', '', 1, 0, '', 3, 1, 1, '2020-09-28 02:56:24', '2020-09-29 07:26:42'),
(4, 1, 3, '2020-09-20', '', 1, 0, '', 1, 1, 1, '2020-09-21 15:13:25', '2020-09-29 07:26:44'),
(5, 2, 2, '2020-09-20', '06.jpg', 1, 0, '', 7, 1, 1, '2020-09-21 15:13:25', '2020-09-28 07:57:14'),
(6, 1, 1, '2020-09-20', '06.jpg', 1, 0, '', 8, 1, 1, '2020-09-21 15:13:25', '2020-09-28 07:57:13'),
(7, 1, 3, '2020-09-20', '06.jpg', 1, 0, '', 8, 1, 1, '2020-09-21 15:13:25', '2020-09-24 03:29:09'),
(21, 4, 1, '2020-09-25', '06.jpg', 1, 0, '', 5, 0, 0, '2020-09-28 02:56:45', '2020-09-28 07:57:09'),
(23, 4, 1, '2020-09-25', '06.jpg', 1, 0, '', 5, 0, 0, '2020-09-28 02:56:37', '2020-09-28 07:57:12'),
(26, 4, 1, '2020-09-25', '7q7qx88s3dnkfi0lo0j.jpg', 1, 1, '', 15, 0, 0, '2020-09-25 04:00:25', '2020-09-25 09:00:25'),
(27, 4, 1, '2020-09-30', '', 1, 0, '', 5, 0, 0, '2020-09-30 03:31:54', '2020-09-30 08:31:54'),
(28, 2, 2, '2020-09-30', 'dof0auaxihskfp4swcf.jpg', 1, 0, '', 5, 0, 0, '2020-09-30 03:40:56', '2020-09-30 08:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_isActive` tinyint(1) NOT NULL,
  `role_id` int(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_username`, `user_password`, `user_isActive`, `role_id`, `timestamp`) VALUES
(1, 'masalaDev ', 'masalaDev', 'f1526aaeca91e40472abcf937fa4c3b0', 1, 1, '2020-09-28 06:56:05'),
(2, 'manager', 'Manager', 'e10adc3949ba59abbe56e057f20f883e', 1, 2, '2020-09-30 05:40:43'),
(3, 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, 3, '2020-09-30 05:40:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `magazinetype`
--
ALTER TABLE `magazinetype`
  ADD PRIMARY KEY (`magazineType_id`);

--
-- Indexes for table `magazinevol`
--
ALTER TABLE `magazinevol`
  ADD PRIMARY KEY (`magazineVol_id`);

--
-- Indexes for table `messenger`
--
ALTER TABLE `messenger`
  ADD PRIMARY KEY (`messenger_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `transection`
--
ALTER TABLE `transection`
  ADD PRIMARY KEY (`transection_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `issue_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `magazinetype`
--
ALTER TABLE `magazinetype`
  MODIFY `magazineType_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `magazinevol`
--
ALTER TABLE `magazinevol`
  MODIFY `magazineVol_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `messenger`
--
ALTER TABLE `messenger`
  MODIFY `messenger_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transection`
--
ALTER TABLE `transection`
  MODIFY `transection_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
