-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 09:06 AM
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
(1, 'Schools', 1, '2020-10-01 06:58:34'),
(2, 'Hospitals and Clinics', 1, '2020-10-01 06:59:00'),
(3, 'Condominiums', 1, '2020-10-01 06:59:00'),
(4, 'Corporate Offices', 1, '2020-10-01 07:00:13'),
(5, 'Restaurants', 1, '2020-10-01 07:00:13'),
(6, 'Stores', 1, '2020-10-01 07:00:13'),
(7, 'Salons', 1, '2020-10-01 07:00:13');

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
(2, 'Shangri-La Hotel Bangkok', '89 Wat Suan Phlu Alley, Khwaeng Bang Rak, Bang Rak, Bangkok 10500', '', '', '', '', '', '', 'Bangkok', 10500, '', '', 10, 'Khun Joanne Chung', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(3, 'Royal Orchid Sheraton Hotel & Towers', '2 Charoen Krung Road Soi 30 (Captain Bush Lane Siphya, Bang Rak, Bangkok 10500', '', '', '', '', 'Charoen Krung Road Soi 30', '', 'Bangkok', 10500, '', '', 10, 'Khun Arlada Jumsai Na Ayudhya', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(4, 'Milennum Hilton Bangkok', '123 Charoen Nakhon Rd, Khlong Ton Sai, Khlong San, Bangkok 10600', '', '', '', '', 'Charoen Nakhon Rd', '', 'Bangkok', 10600, '', '', 5, ' ', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(5, 'Anantara Riverside Bangkok Resort', '257 1-3 Charoen Nakhon Rd, Samre, Thon Buri, Bangkok 10600', '', '', '', '', 'Charoen Nakhon Rd', '', 'Bangkok', 10600, 'Riverside', '', 10, 'Khun Palkin Arneja', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(6, 'Avani Riverside Bangkok Resort', '257 Charoen Nakhon Rd, Samre, Thon Buri, Bangkok 10600?02 431 9100', '', '', '', '', 'Charoen Nakhon Rd', '', 'Bangkok', 10600, 'Riverside', '', 5, 'Khun Palkin Arneja', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(7, 'Amara Hotel Bangkok', '180/1 Thanon Surawong, Si Phraya, Bang Rak, Bangkok 10500', '', '', '', '', 'Thanon Surawong', '', 'Bangkok', 10500, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(8, 'Mandarin Oriental Hotel', '48 Oriental Ave, Khwaeng Bang Rak, Bang Rak, Bangkok 10500', '', '', '', '', '', '', 'Bangkok', 10500, '', '', 5, 'Khun Geoffrey Webb', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(9, 'The Peninsula', '333 Charoen Nakhon Rd, Khlong San, Bangkok 10600', '', '', '', '', 'Charoen Nakhon Rd', '', 'Bangkok', 10600, '', '', 5, 'Khun Khemwanta Tangon', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(10, 'Chatrium Hotel Riverside Bangkok', '28 Charoen Krung Rd, Watprayakrai, Bangkholame, Bangkok 10120?02 307 8888', '', '', '', '', 'Charoen Krung Rd', '', 'Bangkok', 10120, 'Riverside ', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(11, 'Ramada Plaza by Wyndham Bangkok Menam Riverside', '2074 Charoen Krung Rd, Khwaeng Wat Phraya Krai, Khet Bang Kho Laem, Bangkok 10120', '', '', '', '', 'Charoen Krung Rd', '', 'Bangkok', 10120, 'Riverside ', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(12, 'Riva Surya Bangkok', '23 Phra Athit Rd, Chana Songkhram, Phra Nakhon, Bangkok 10200', '', '', '', '', 'Phra Athit Rd', '', 'Bangkok', 10200, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(13, 'State Tower (Le Bua) ', '1055 Silom Road, Bangrak, Bangkok 10500, Thailand', '', '', '', '', 'Silom Road', '', 'Bangkok', 10500, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(14, 'The Siam Hotel', '3, 2 Khao Rd, Wachira Phayaban, Dusit District, Bangkok 10300', '', '', '', '', 'Khao Rd', '', 'Bangkok', 10300, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(15, 'Ad Lib Sukhumvit', '230 5 Sukhumvit 1 Sukhumvit Watthana Bangkok 10110', '230 5', 'Sukhumvit', '1', '', 'Sukhumvit', 'Watthana', 'Bangkok', 10110, 'Sukhumvit Soi 1', '', 1, '', '', 1, 1, 504, 1, '2001-10-20 10:00:00', '2020-10-01 06:57:28'),
(16, 'Skyy Hotel', '88/8 Sukhumvit 1 Alley, Khlong Toei Nuea, Watthana, Bangkok 10110', '', '', '', '', 'Sukhumvit 1', '', 'Bangkok', 10110, 'Sukhumvit Soi 1', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(17, 'Best Western Premier Sukhumvit', '78 Sukhumvit 1 Alley, Khlong Toei Nuea, Watthana, Bangkok 10110', '', '', '', '', 'Sukhumvit 1', '', 'Bangkok', 10110, 'Sukhumvit Soi 1', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(18, 'Furama Xclusive Sukhumvit', '27 Sukhumvit 1 Alley, Klongtoey-Nua Watthana, Bangkok 10110', '', '', '', '', 'Sukhumvit 1', '', 'Bangkok', 10110, 'Sukhumvit Soi 1', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(19, 'JW Marriott Bangkok', '4 Sukhumvit Rd, Khwaeng Khlong Toei, Khlong Toei, Bangkok 10110', '', '', '', '', 'Sukhumvit Rd', '', 'Bangkok', 10110, 'Sukhumvit Soi 2', '', 10, 'Khun Nisara Khampong', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(20, 'The Okura Prestige Bangkok', '57 Witthayu Rd, Khwaeng Lumphini, Khet Pathum Wan, Krung Thep Maha Nakhon 10330', '', '', '', '', 'Witthayu Rd', '', 'Bangkok', 10330, 'Witthayu', '', 5, 'Khun Vipasiri Napawongdee', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(21, 'The Athenee Hotel, a Luxury Collection Hotel, Bangkok', '61 Witthayu Rd, Lumphini, Pathum Wan District, Bangkok 10330', '', '', '', '', 'Witthayu Rd', '', 'Bangkok', 10330, 'Witthayu', '', 10, 'Khun Elizabeth Dass-Brown', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(22, 'Hotel Indigo Bangkok Wireless Road', '81, Witthayu Rd, Lumphini, Pathum Wan District, Bangkok 10330', '', '', '', '', 'Witthayu Rd', '', 'Bangkok', 10330, 'Witthayu', '', 5, 'Khun Thanit Isaramongkolpant (Por)', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(23, 'Conrad Hotel', '87/3 Witthayu Rd, Lumphini, Pathum Wan District, Bangkok 10330', '', '', '', '', 'Witthayu Rd', '', 'Bangkok', 10330, 'Witthayu', '', 10, 'Khun Kititat (Game)', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(24, 'Oriental Residence Bangkok', '110 Witthayu Rd, Lumphini, Pathum Wan District, Bangkok 10330', '', '', '', '', 'Witthayu Rd', '', 'Bangkok', 10330, 'Witthayu', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(25, 'Novotel/Ibis Sukhumvit 4', '27 Sukhumvit 4 Alley, Khwaeng Khlong Toei, Khlong Toei, Bangkok 10110', '', 'Sukhumvit Soi 4', '', '', 'Sukhumvit 4', '', 'Bangkok', 10110, 'Sukhumvit Soi 4', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(26, 'Grand Sukhumvit Hotel Bangkok', '99 Sukhumvit Rd, Khlong Tan, Khlong Toei, Bangkok 10110', '', '', '', '', 'Sukhumvit Rd', '', 'Bangkok', 10110, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(27, 'Landmark Hotel Bangkok', '138 Sukhumvit Rd, Khlong Toei Nuea, Watthana, Bangkok 10110', '', '', '', '', 'Sukhumvit Rd', '', 'Bangkok', 10110, '', '', 10, 'M.L. Chantanipa  Kasemsri', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(28, 'Boulevard Hotel', '2 Sukhumvit 5 Alley, Khlong Toei, Watthana, Bangkok 10110', '', '', '', '', '', '', 'Bangkok', 10110, 'Sukhumvit Soi 5', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(29, 'Belaire Hotel Bangkok', '16 Sukhumvit Rd, Khlong Toei Nuea, Watthana, Bangkok 10110', '', '', '', '', 'Sukhumvit Rd', '', 'Bangkok', 10110, 'Sukhumvit Soi 5', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(30, 'Rembrandt Hotel Bangkok', '19 Sukhumvit Soi 18, Khlong Toei, Bangkok 10110', '', '', '', '', 'Sukhumvit Soi 18', '', 'Bangkok', 10110, 'Sukhumvit Soi 18', '', 10, 'Khun Sundeep Nellore', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(31, 'Novotel Sukhumvit 20', '19 9 Sukhumvit 20 Alley, Khwaeng Khlong Toei, Klongton Bangkok 10110', '', 'Sukhumvit Soi 20', '', '', 'Sukhumvit 20', '', 'Bangkok', 10110, 'Sukhumvit Soi 20', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(32, 'Akyra Tas Sukhumvit Bangkok', '7 Sukhumvit 20 Alley, Khwaeng Khlong Toei, Khlong Toei, Bangkok 10110', '', 'Sukhumvit Soi 20', '', '', 'Sukhumvit 20', '', 'Bangkok', 10110, 'Sukhumvit Soi 20', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(33, 'Marriott Marquis Queens Park', '199 Soi Sukhumvit 22, Khlong Tan, Khlong Toei, Bangkok 10110', '', 'Sukhumvit Soi 22', '', '', 'Sukhumvit 22', '', 'Bangkok', 10110, 'Sukhumvit Soi 22', '', 20, 'Khun Variya Lulitanond', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(34, 'Holiday Inn Bangkok Sukhumvit', '1 Soi Sukhumvit 22, Klongton, Klongtoey, Bangkok 10110', '', 'Sukhumvit Soi 22', '', '', 'Sukhumvit 22', '', 'Bangkok', 10110, 'Sukhumvit Soi 22', '', 10, 'Khun Priya Banerjee', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(35, 'SKYVIEW Hotel Bangkok Sukhumvit 24', '12 Sukhumvit 24 Alley, Khlong Tan, Khlong Toei, Bangkok 10110', '', 'Sukhumvit Soi 24', '', '', 'Sukhumvit 24', '', 'Bangkok', 10110, 'Sukhumvit Soi 24', '', 10, '', '02 011 1111', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(36, 'Hilton Sukhumvit Bangkok ', '11 Sukhumvit 24 Alley, Khlong Tan, Khlong Toei, Bangkok 10110', '', 'Sukhumvit Soi 24', '', '', 'Sukhumvit 24', '', 'Bangkok', 10110, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(37, 'Sukhumvit Park, Bangkok - Marriott Executive Apartments', '90 Sukhumvit 24 Alley, Klongton, Klongtoey, Khlong Toei, Bangkok 10110', '', 'Sukhumvit Soi 24', '', '', 'Sukhumvit 24', '', 'Bangkok', 10110, '', '', 10, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(38, 'Hyatt Place Bangkok Sukhumvit', '22/5 Sukhumvit 24 Alley, Khlong Tan, Khlong Toei, Bangkok 10110', '', 'Sukhumvit Soi 24', '', '', 'Sukhumvit 24', '', 'Bangkok', 10110, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(39, 'Renaissance Bangkok Ratchaprasong', '518/8 Phloen Chit Rd, Lumphini, Khet Pathum Wan, Bangkok 10330', '', '', '', '', 'Phloen Chit Rd', '', 'Bangkok', 10330, '', '', 5, 'Khun Lars Kerfin ', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(40, 'Grand Hyatt Erawan', '494 Ratchadamri Rd, Lumphini, Pathum Wan District, Bangkok 10330', '', '', '', '', 'Ratchadamri Rd', '', 'Bangkok', 10330, '', '', 10, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(41, 'Anantara Siam Bangkok', '155 Ratchadamri Rd, Lumphini, Pathum Wan District, Bangkok 10330', '', '', '', '', 'Ratchadamri Rd', '', 'Bangkok', 10330, '', '', 10, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(42, 'Waldorf Astoria', '151 Ratchadamri Rd, Lumphini, Pathum Wan District, Bangkok 10330', '', '', '', '', 'Ratchadamri Rd', '', 'Bangkok', 10330, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(43, 'St Regis', '159 Rajadamri Road, Pathum Wan District, Bangkok 10330', '', '', '', '', 'Rajadamri Road', '', 'Bangkok', 10330, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(44, 'Park Hyatt Bangkok', 'CENTRAL EMBASSY, 88 Witthayu Rd, Lumphini, Pathum Wan District, Bangkok 10330', '', '', '', '', '', '', 'Bangkok', 10330, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(45, 'Movenpick BDMS', '2 Witthayu Rd, Khwaeng Lumphini, Khet Pathum Wan, Krung Thep Maha Nakhon 10330', '', '', '', '', '', '', 'Bangkok', 10330, '', '', 10, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(46, 'Rosewood Bangkok', '1041 38 Phloen Chit Rd, Lumphini, Pathum Wan District, Bangkok 10330', '', '', '', '', 'Phloen Chit Rd', '', 'Bangkok', 10330, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(47, 'Centara Grand @ Central World', '999 99 Rama I Rd, Pathum Wan, Pathum Wan District, Bangkok 10330', '', '', '', '', '', '', 'Bangkok', 10330, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(48, 'InterContinental Bangkok', '973 Phloen Chit Rd, Lumphini, Pathum Wan District, Bangkok 10330', '', '', '', '', 'Phloen Chit Rd', '', 'Bangkok', 10330, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(49, 'Siam Kempinski', '991/9 Rama I Rd, Pathum Wan, Pathum Wan District, Bangkok 10330', '', '', '', '', '', '', 'Bangkok', 10330, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00'),
(50, 'Como Metropolitan Hotel ', '27 S Sathon Rd, Thung Maha Mek, Sathon, Bangkok 10120', '', '', '', '', '', '', 'Bangkok', 10120, '', '', 5, '', '', 1, 1, 1, 1, '2001-10-20 10:00:00', '2001-10-20 03:00:00');

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
(7, 1, 11, 'October - November 2020', 2020, '2020-10-01 04:24:51'),
(8, 1, 1, 'December - January 2021', 2021, '2020-10-01 04:24:51'),
(9, 1, 3, 'February - March 2021', 2021, '2020-10-01 04:24:51'),
(10, 1, 5, 'April - May 2021', 2021, '2020-10-01 04:24:51'),
(11, 1, 7, 'June - July 2021', 2021, '2020-10-01 04:24:51'),
(12, 1, 9, 'August - September 2021', 2021, '2020-10-01 04:24:51'),
(13, 1, 11, 'October - November 2021', 2021, '2020-10-01 04:24:51'),
(14, 1, 1, 'December - January 2022', 2022, '2020-10-01 04:24:51'),
(15, 1, 3, 'February - March 2022', 2022, '2020-10-01 04:24:51'),
(16, 1, 5, 'April - May 2022', 2022, '2020-10-01 04:24:51'),
(17, 1, 7, 'June - July 2022', 2022, '2020-10-01 04:24:51'),
(18, 1, 9, 'August - September 2022', 2022, '2020-10-01 04:24:51'),
(19, 1, 11, 'October - November 2022', 2022, '2020-10-01 04:24:51'),
(20, 1, 1, 'December - January 2023', 2023, '2020-10-01 04:24:51'),
(21, 1, 3, 'February - March 2023', 2023, '2020-10-01 04:24:51'),
(22, 1, 5, 'April - May 2023', 2023, '2020-10-01 04:24:51'),
(23, 1, 7, 'June - July 2023', 2023, '2020-10-01 04:24:51'),
(24, 1, 9, 'August - September 2023', 2023, '2020-10-01 04:24:51'),
(25, 1, 11, 'October - November 2023', 2023, '2020-10-01 04:24:51'),
(26, 1, 1, 'December - January 2024', 2024, '2020-10-01 04:24:51'),
(27, 1, 3, 'February - March 2024', 2024, '2020-10-01 04:24:51'),
(28, 1, 5, 'April - May 2024', 2024, '2020-10-01 04:24:51'),
(29, 1, 7, 'June - July 2024', 2024, '2020-10-01 04:24:51'),
(30, 1, 9, 'August - September 2024', 2024, '2020-10-01 04:24:51'),
(31, 1, 11, 'October - November 2024', 2024, '2020-10-01 04:24:51'),
(32, 1, 1, 'December - January 2025', 2025, '2020-10-01 04:24:51'),
(33, 1, 3, 'February - March 2025', 2025, '2020-10-01 04:24:51'),
(34, 1, 5, 'April - May 2025', 2025, '2020-10-01 04:24:51'),
(35, 1, 7, 'June - July 2025', 2025, '2020-10-01 04:24:51'),
(36, 1, 9, 'August - September 2025', 2025, '2020-10-01 04:24:51'),
(37, 1, 11, 'October - November 2025', 2025, '2020-10-01 04:24:51'),
(38, 1, 1, 'December - January 2026', 2026, '2020-10-01 04:24:51'),
(39, 1, 3, 'February - March 2026', 2026, '2020-10-01 04:24:51'),
(40, 1, 5, 'April - May 2026', 2026, '2020-10-01 04:24:51'),
(41, 1, 7, 'June - July 2026', 2026, '2020-10-01 04:24:51'),
(42, 1, 9, 'August - September 2026', 2026, '2020-10-01 04:24:51'),
(43, 1, 11, 'October - November 2026', 2026, '2020-10-01 04:24:51'),
(44, 1, 1, 'December - January 2027', 2027, '2020-10-01 04:24:51'),
(45, 1, 3, 'February - March 2027', 2027, '2020-10-01 04:24:51'),
(46, 1, 5, 'April - May 2027', 2027, '2020-10-01 04:24:51'),
(47, 1, 7, 'June - July 2027', 2027, '2020-10-01 04:24:51'),
(48, 1, 9, 'August - September 2027', 2027, '2020-10-01 04:24:51'),
(49, 1, 11, 'October - November 2027', 2027, '2020-10-01 04:24:51'),
(50, 1, 1, 'December - January 2028', 2028, '2020-10-01 04:24:51'),
(51, 1, 3, 'February - March 2028', 2028, '2020-10-01 04:24:51'),
(52, 1, 5, 'April - May 2028', 2028, '2020-10-01 04:24:51'),
(53, 1, 7, 'June - July 2028', 2028, '2020-10-01 04:24:51'),
(54, 1, 9, 'August - September 2028', 2028, '2020-10-01 04:24:51'),
(55, 1, 11, 'October - November 2028', 2028, '2020-10-01 04:24:51'),
(56, 1, 1, 'December - January 2029', 2029, '2020-10-01 04:24:51'),
(57, 1, 3, 'February - March 2029', 2029, '2020-10-01 04:24:51'),
(58, 1, 5, 'April - May 2029', 2029, '2020-10-01 04:24:51'),
(59, 1, 7, 'June - July 2029', 2029, '2020-10-01 04:24:51'),
(60, 1, 9, 'August - September 2029', 2029, '2020-10-01 04:24:51'),
(61, 1, 11, 'October - November 2029', 2029, '2020-10-01 04:24:51'),
(62, 1, 1, 'December - January 2030', 2030, '2020-10-01 04:24:51'),
(63, 1, 3, 'February - March 2030', 2030, '2020-10-01 04:24:51'),
(64, 1, 5, 'April - May 2030', 2030, '2020-10-01 04:24:51'),
(65, 1, 7, 'June - July 2030', 2030, '2020-10-01 04:24:51'),
(66, 1, 9, 'August - September 2030', 2030, '2020-10-01 04:24:51'),
(67, 1, 11, 'October - November 2030', 2030, '2020-10-01 04:24:51'),
(68, 1, 1, 'December - January 2031', 2031, '2020-10-01 04:24:51'),
(69, 1, 3, 'February - March 2031', 2031, '2020-10-01 04:24:51'),
(70, 1, 5, 'April - May 2031', 2031, '2020-10-01 04:24:51'),
(71, 1, 7, 'June - July 2031', 2031, '2020-10-01 04:24:51'),
(72, 1, 9, 'August - September 2031', 2031, '2020-10-01 04:24:51'),
(73, 1, 11, 'October - November 2031', 2031, '2020-10-01 04:24:51'),
(74, 1, 1, 'December - January 2032', 2032, '2020-10-01 04:24:51'),
(75, 1, 3, 'February - March 2032', 2032, '2020-10-01 04:24:51'),
(76, 1, 5, 'April - May 2032', 2032, '2020-10-01 04:24:51'),
(77, 1, 7, 'June - July 2032', 2032, '2020-10-01 04:24:51'),
(78, 1, 9, 'August - September 2032', 2032, '2020-10-01 04:24:51'),
(79, 1, 11, 'October - November 2032', 2032, '2020-10-01 04:24:51'),
(80, 1, 1, 'December - January 2033', 2033, '2020-10-01 04:24:51'),
(81, 1, 3, 'February - March 2033', 2033, '2020-10-01 04:24:51'),
(82, 1, 5, 'April - May 2033', 2033, '2020-10-01 04:24:51'),
(83, 1, 7, 'June - July 2033', 2033, '2020-10-01 04:24:51'),
(84, 1, 9, 'August - September 2033', 2033, '2020-10-01 04:24:51'),
(85, 1, 11, 'October - November 2033', 2033, '2020-10-01 04:24:51'),
(86, 1, 1, 'December - January 2034', 2034, '2020-10-01 04:24:51'),
(87, 1, 3, 'February - March 2034', 2034, '2020-10-01 04:24:51'),
(88, 1, 5, 'April - May 2034', 2034, '2020-10-01 04:24:51'),
(89, 1, 7, 'June - July 2034', 2034, '2020-10-01 04:24:51'),
(90, 1, 9, 'August - September 2034', 2034, '2020-10-01 04:24:51'),
(91, 1, 11, 'October - November 2034', 2034, '2020-10-01 04:24:51'),
(92, 1, 1, 'December - January 2035', 2035, '2020-10-01 04:24:51'),
(93, 1, 3, 'February - March 2035', 2035, '2020-10-01 04:24:51'),
(94, 1, 5, 'April - May 2035', 2035, '2020-10-01 04:24:51'),
(95, 1, 7, 'June - July 2035', 2035, '2020-10-01 04:24:51'),
(96, 1, 9, 'August - September 2035', 2035, '2020-10-01 04:24:51'),
(97, 1, 11, 'October - November 2035', 2035, '2020-10-01 04:24:51'),
(98, 1, 1, 'December - January 2036', 2036, '2020-10-01 04:24:51'),
(99, 1, 3, 'February - March 2036', 2036, '2020-10-01 04:24:51'),
(100, 1, 5, 'April - May 2036', 2036, '2020-10-01 04:24:51'),
(101, 1, 7, 'June - July 2036', 2036, '2020-10-01 04:24:51'),
(102, 1, 9, 'August - September 2036', 2036, '2020-10-01 04:24:51'),
(103, 1, 11, 'October - November 2036', 2036, '2020-10-01 04:24:51'),
(104, 1, 1, 'December - January 2037', 2037, '2020-10-01 04:24:51'),
(105, 1, 3, 'February - March 2037', 2037, '2020-10-01 04:24:51'),
(106, 1, 5, 'April - May 2037', 2037, '2020-10-01 04:24:51'),
(107, 1, 7, 'June - July 2037', 2037, '2020-10-01 04:24:51'),
(108, 1, 9, 'August - September 2037', 2037, '2020-10-01 04:24:51'),
(109, 1, 11, 'October - November 2037', 2037, '2020-10-01 04:24:51'),
(110, 1, 1, 'December - January 2038', 2038, '2020-10-01 04:24:51'),
(111, 1, 3, 'February - March 2038', 2038, '2020-10-01 04:24:51'),
(112, 1, 5, 'April - May 2038', 2038, '2020-10-01 04:24:51'),
(113, 1, 7, 'June - July 2038', 2038, '2020-10-01 04:24:51'),
(114, 1, 9, 'August - September 2038', 2038, '2020-10-01 04:24:51'),
(115, 1, 11, 'October - November 2038', 2038, '2020-10-01 04:24:51'),
(116, 1, 1, 'December - January 2039', 2039, '2020-10-01 04:24:51'),
(117, 1, 3, 'February - March 2039', 2039, '2020-10-01 04:24:51'),
(118, 1, 5, 'April - May 2039', 2039, '2020-10-01 04:24:51'),
(119, 1, 7, 'June - July 2039', 2039, '2020-10-01 04:24:51'),
(120, 1, 9, 'August - September 2039', 2039, '2020-10-01 04:24:51'),
(121, 1, 11, 'October - November 2039', 2039, '2020-10-01 04:24:51'),
(122, 1, 1, 'December - January 2040', 2040, '2020-10-01 04:24:51'),
(123, 1, 3, 'February - March 2040', 2040, '2020-10-01 04:24:51'),
(124, 1, 5, 'April - May 2040', 2040, '2020-10-01 04:24:51'),
(125, 1, 7, 'June - July 2040', 2040, '2020-10-01 04:24:51'),
(126, 1, 9, 'August - September 2040', 2040, '2020-10-01 04:24:51'),
(127, 1, 11, 'October - November 2040', 2040, '2020-10-01 04:24:51'),
(128, 1, 1, 'December - January 2041', 2041, '2020-10-01 04:24:51'),
(129, 1, 3, 'February - March 2041', 2041, '2020-10-01 04:24:51'),
(130, 1, 5, 'April - May 2041', 2041, '2020-10-01 04:24:51'),
(131, 1, 7, 'June - July 2041', 2041, '2020-10-01 04:24:51'),
(132, 1, 9, 'August - September 2041', 2041, '2020-10-01 04:24:51'),
(133, 1, 11, 'October - November 2041', 2041, '2020-10-01 04:24:51'),
(134, 1, 1, 'December - January 2042', 2042, '2020-10-01 04:24:51'),
(135, 1, 3, 'February - March 2042', 2042, '2020-10-01 04:24:51'),
(136, 1, 5, 'April - May 2042', 2042, '2020-10-01 04:24:51'),
(137, 1, 7, 'June - July 2042', 2042, '2020-10-01 04:24:51'),
(138, 1, 9, 'August - September 2042', 2042, '2020-10-01 04:24:51'),
(139, 1, 11, 'October - November 2042', 2042, '2020-10-01 04:24:51'),
(140, 1, 1, 'December - January 2043', 2043, '2020-10-01 04:24:51'),
(141, 1, 3, 'February - March 2043', 2043, '2020-10-01 04:24:51'),
(142, 1, 5, 'April - May 2043', 2043, '2020-10-01 04:24:51'),
(143, 1, 7, 'June - July 2043', 2043, '2020-10-01 04:24:51'),
(144, 1, 9, 'August - September 2043', 2043, '2020-10-01 04:24:51'),
(145, 1, 11, 'October - November 2043', 2043, '2020-10-01 04:24:51'),
(146, 1, 1, 'December - January 2044', 2044, '2020-10-01 04:24:51'),
(147, 1, 3, 'February - March 2044', 2044, '2020-10-01 04:24:51'),
(148, 1, 5, 'April - May 2044', 2044, '2020-10-01 04:24:51'),
(149, 1, 7, 'June - July 2044', 2044, '2020-10-01 04:24:51'),
(150, 1, 9, 'August - September 2044', 2044, '2020-10-01 04:24:51'),
(151, 1, 11, 'October - November 2044', 2044, '2020-10-01 04:24:51'),
(152, 1, 1, 'December - January 2045', 2045, '2020-10-01 04:24:51'),
(153, 1, 3, 'February - March 2045', 2045, '2020-10-01 04:24:51'),
(154, 1, 5, 'April - May 2045', 2045, '2020-10-01 04:24:51'),
(155, 1, 7, 'June - July 2045', 2045, '2020-10-01 04:24:51'),
(156, 1, 9, 'August - September 2045', 2045, '2020-10-01 04:24:51'),
(157, 1, 11, 'October - November 2045', 2045, '2020-10-01 04:24:51'),
(158, 1, 1, 'December - January 2046', 2046, '2020-10-01 04:24:51'),
(159, 1, 3, 'February - March 2046', 2046, '2020-10-01 04:24:51'),
(160, 1, 5, 'April - May 2046', 2046, '2020-10-01 04:24:51'),
(161, 1, 7, 'June - July 2046', 2046, '2020-10-01 04:24:51'),
(162, 1, 9, 'August - September 2046', 2046, '2020-10-01 04:24:51'),
(163, 1, 11, 'October - November 2046', 2046, '2020-10-01 04:24:51'),
(164, 1, 1, 'December - January 2047', 2047, '2020-10-01 04:24:51'),
(165, 1, 3, 'February - March 2047', 2047, '2020-10-01 04:24:51'),
(166, 1, 5, 'April - May 2047', 2047, '2020-10-01 04:24:51'),
(167, 1, 7, 'June - July 2047', 2047, '2020-10-01 04:24:51'),
(168, 1, 9, 'August - September 2047', 2047, '2020-10-01 04:24:51'),
(169, 1, 11, 'October - November 2047', 2047, '2020-10-01 04:24:51'),
(170, 1, 1, 'December - January 2048', 2048, '2020-10-01 04:24:51'),
(171, 1, 3, 'February - March 2048', 2048, '2020-10-01 04:24:51'),
(172, 1, 5, 'April - May 2048', 2048, '2020-10-01 04:24:51'),
(173, 1, 7, 'June - July 2048', 2048, '2020-10-01 04:24:51'),
(174, 1, 9, 'August - September 2048', 2048, '2020-10-01 04:24:51'),
(175, 1, 11, 'October - November 2048', 2048, '2020-10-01 04:24:51'),
(188, 2, 10, 'October 2020', 2020, '2020-10-01 04:25:00'),
(189, 2, 11, 'November 2020', 2020, '2020-10-01 04:25:00'),
(190, 2, 12, 'December 2020', 2020, '2020-10-01 04:25:00'),
(191, 2, 1, 'January 2021', 2021, '2020-10-01 04:25:00'),
(192, 2, 2, 'February 2021', 2021, '2020-10-01 04:25:00'),
(193, 2, 3, 'March 2021', 2021, '2020-10-01 04:25:00'),
(194, 2, 4, 'April 2021', 2021, '2020-10-01 04:25:00'),
(195, 2, 5, 'May 2021', 2021, '2020-10-01 04:25:00'),
(196, 2, 6, 'June 2021', 2021, '2020-10-01 04:25:00'),
(197, 2, 7, 'July 2021', 2021, '2020-10-01 04:25:00'),
(198, 2, 8, 'August 2021', 2021, '2020-10-01 04:25:00'),
(199, 2, 9, 'September 2021', 2021, '2020-10-01 04:25:00'),
(200, 2, 10, 'October 2021', 2021, '2020-10-01 04:25:00'),
(201, 2, 11, 'November 2021', 2021, '2020-10-01 04:25:00'),
(202, 2, 12, 'December 2021', 2021, '2020-10-01 04:25:00'),
(203, 2, 1, 'January 2022', 2022, '2020-10-01 04:25:00'),
(204, 2, 2, 'February 2022', 2022, '2020-10-01 04:25:00'),
(205, 2, 3, 'March 2022', 2022, '2020-10-01 04:25:00'),
(206, 2, 4, 'April 2022', 2022, '2020-10-01 04:25:00'),
(207, 2, 5, 'May 2022', 2022, '2020-10-01 04:25:00'),
(208, 2, 6, 'June 2022', 2022, '2020-10-01 04:25:00'),
(209, 2, 7, 'July 2022', 2022, '2020-10-01 04:25:00'),
(210, 2, 8, 'August 2022', 2022, '2020-10-01 04:25:00'),
(211, 2, 9, 'September 2022', 2022, '2020-10-01 04:25:00'),
(212, 2, 10, 'October 2022', 2022, '2020-10-01 04:25:00'),
(213, 2, 11, 'November 2022', 2022, '2020-10-01 04:25:00'),
(214, 2, 12, 'December 2022', 2022, '2020-10-01 04:25:00'),
(215, 2, 1, 'January 2023', 2023, '2020-10-01 04:25:00'),
(216, 2, 2, 'February 2023', 2023, '2020-10-01 04:25:00'),
(217, 2, 3, 'March 2023', 2023, '2020-10-01 04:25:00'),
(218, 2, 4, 'April 2023', 2023, '2020-10-01 04:25:00'),
(219, 2, 5, 'May 2023', 2023, '2020-10-01 04:25:00'),
(220, 2, 6, 'June 2023', 2023, '2020-10-01 04:25:00'),
(221, 2, 7, 'July 2023', 2023, '2020-10-01 04:25:00'),
(222, 2, 8, 'August 2023', 2023, '2020-10-01 04:25:00'),
(223, 2, 9, 'September 2023', 2023, '2020-10-01 04:25:00'),
(224, 2, 10, 'October 2023', 2023, '2020-10-01 04:25:00'),
(225, 2, 11, 'November 2023', 2023, '2020-10-01 04:25:00'),
(226, 2, 12, 'December 2023', 2023, '2020-10-01 04:25:00'),
(227, 2, 1, 'January 2024', 2024, '2020-10-01 04:25:00'),
(228, 2, 2, 'February 2024', 2024, '2020-10-01 04:25:00'),
(229, 2, 3, 'March 2024', 2024, '2020-10-01 04:25:00'),
(230, 2, 4, 'April 2024', 2024, '2020-10-01 04:25:00'),
(231, 2, 5, 'May 2024', 2024, '2020-10-01 04:25:00'),
(232, 2, 6, 'June 2024', 2024, '2020-10-01 04:25:00'),
(233, 2, 7, 'July 2024', 2024, '2020-10-01 04:25:00'),
(234, 2, 8, 'August 2024', 2024, '2020-10-01 04:25:00'),
(235, 2, 9, 'September 2024', 2024, '2020-10-01 04:25:00'),
(236, 2, 10, 'October 2024', 2024, '2020-10-01 04:25:00'),
(237, 2, 11, 'November 2024', 2024, '2020-10-01 04:25:00'),
(238, 2, 12, 'December 2024', 2024, '2020-10-01 04:25:00'),
(239, 2, 1, 'January 2025', 2025, '2020-10-01 04:25:00'),
(240, 2, 2, 'February 2025', 2025, '2020-10-01 04:25:00'),
(241, 2, 3, 'March 2025', 2025, '2020-10-01 04:25:00'),
(242, 2, 4, 'April 2025', 2025, '2020-10-01 04:25:00'),
(243, 2, 5, 'May 2025', 2025, '2020-10-01 04:25:00'),
(244, 2, 6, 'June 2025', 2025, '2020-10-01 04:25:00'),
(245, 2, 7, 'July 2025', 2025, '2020-10-01 04:25:00'),
(246, 2, 8, 'August 2025', 2025, '2020-10-01 04:25:00'),
(247, 2, 9, 'September 2025', 2025, '2020-10-01 04:25:00'),
(248, 2, 10, 'October 2025', 2025, '2020-10-01 04:25:00'),
(249, 2, 11, 'November 2025', 2025, '2020-10-01 04:25:00'),
(250, 2, 12, 'December 2025', 2025, '2020-10-01 04:25:00'),
(251, 2, 1, 'January 2026', 2026, '2020-10-01 04:25:00'),
(252, 2, 2, 'February 2026', 2026, '2020-10-01 04:25:00'),
(253, 2, 3, 'March 2026', 2026, '2020-10-01 04:25:00'),
(254, 2, 4, 'April 2026', 2026, '2020-10-01 04:25:00'),
(255, 2, 5, 'May 2026', 2026, '2020-10-01 04:25:00'),
(256, 2, 6, 'June 2026', 2026, '2020-10-01 04:25:00'),
(257, 2, 7, 'July 2026', 2026, '2020-10-01 04:25:00'),
(258, 2, 8, 'August 2026', 2026, '2020-10-01 04:25:00'),
(259, 2, 9, 'September 2026', 2026, '2020-10-01 04:25:00'),
(260, 2, 10, 'October 2026', 2026, '2020-10-01 04:25:00'),
(261, 2, 11, 'November 2026', 2026, '2020-10-01 04:25:00'),
(262, 2, 12, 'December 2026', 2026, '2020-10-01 04:25:00'),
(263, 2, 1, 'January 2027', 2027, '2020-10-01 04:25:00'),
(264, 2, 2, 'February 2027', 2027, '2020-10-01 04:25:00'),
(265, 2, 3, 'March 2027', 2027, '2020-10-01 04:25:00'),
(266, 2, 4, 'April 2027', 2027, '2020-10-01 04:25:00'),
(267, 2, 5, 'May 2027', 2027, '2020-10-01 04:25:00'),
(268, 2, 6, 'June 2027', 2027, '2020-10-01 04:25:00'),
(269, 2, 7, 'July 2027', 2027, '2020-10-01 04:25:00'),
(270, 2, 8, 'August 2027', 2027, '2020-10-01 04:25:00'),
(271, 2, 9, 'September 2027', 2027, '2020-10-01 04:25:00'),
(272, 2, 10, 'October 2027', 2027, '2020-10-01 04:25:00'),
(273, 2, 11, 'November 2027', 2027, '2020-10-01 04:25:00'),
(274, 2, 12, 'December 2027', 2027, '2020-10-01 04:25:00'),
(275, 2, 1, 'January 2028', 2028, '2020-10-01 04:25:00'),
(276, 2, 2, 'February 2028', 2028, '2020-10-01 04:25:00'),
(277, 2, 3, 'March 2028', 2028, '2020-10-01 04:25:00'),
(278, 2, 4, 'April 2028', 2028, '2020-10-01 04:25:00'),
(279, 2, 5, 'May 2028', 2028, '2020-10-01 04:25:00'),
(280, 2, 6, 'June 2028', 2028, '2020-10-01 04:25:00'),
(281, 2, 7, 'July 2028', 2028, '2020-10-01 04:25:00'),
(282, 2, 8, 'August 2028', 2028, '2020-10-01 04:25:00'),
(283, 2, 9, 'September 2028', 2028, '2020-10-01 04:25:00'),
(284, 2, 10, 'October 2028', 2028, '2020-10-01 04:25:00'),
(285, 2, 11, 'November 2028', 2028, '2020-10-01 04:25:00'),
(286, 2, 12, 'December 2028', 2028, '2020-10-01 04:25:00'),
(287, 2, 1, 'January 2029', 2029, '2020-10-01 04:25:00'),
(288, 2, 2, 'February 2029', 2029, '2020-10-01 04:25:00'),
(289, 2, 3, 'March 2029', 2029, '2020-10-01 04:25:00'),
(290, 2, 4, 'April 2029', 2029, '2020-10-01 04:25:00'),
(291, 2, 5, 'May 2029', 2029, '2020-10-01 04:25:00'),
(292, 2, 6, 'June 2029', 2029, '2020-10-01 04:25:00'),
(293, 2, 7, 'July 2029', 2029, '2020-10-01 04:25:00'),
(294, 2, 8, 'August 2029', 2029, '2020-10-01 04:25:00'),
(295, 2, 9, 'September 2029', 2029, '2020-10-01 04:25:00'),
(296, 2, 10, 'October 2029', 2029, '2020-10-01 04:25:00'),
(297, 2, 11, 'November 2029', 2029, '2020-10-01 04:25:00'),
(298, 2, 12, 'December 2029', 2029, '2020-10-01 04:25:00'),
(299, 2, 1, 'January 2030', 2030, '2020-10-01 04:25:00'),
(300, 2, 2, 'February 2030', 2030, '2020-10-01 04:25:00'),
(301, 2, 3, 'March 2030', 2030, '2020-10-01 04:25:00'),
(302, 2, 4, 'April 2030', 2030, '2020-10-01 04:25:00'),
(303, 2, 5, 'May 2030', 2030, '2020-10-01 04:25:00'),
(304, 2, 6, 'June 2030', 2030, '2020-10-01 04:25:00'),
(305, 2, 7, 'July 2030', 2030, '2020-10-01 04:25:00'),
(306, 2, 8, 'August 2030', 2030, '2020-10-01 04:25:00'),
(307, 2, 9, 'September 2030', 2030, '2020-10-01 04:25:00'),
(308, 2, 10, 'October 2030', 2030, '2020-10-01 04:25:00'),
(309, 2, 11, 'November 2030', 2030, '2020-10-01 04:25:00'),
(310, 2, 12, 'December 2030', 2030, '2020-10-01 04:25:00'),
(311, 2, 1, 'January 2031', 2031, '2020-10-01 04:25:00'),
(312, 2, 2, 'February 2031', 2031, '2020-10-01 04:25:00'),
(313, 2, 3, 'March 2031', 2031, '2020-10-01 04:25:00'),
(314, 2, 4, 'April 2031', 2031, '2020-10-01 04:25:00'),
(315, 2, 5, 'May 2031', 2031, '2020-10-01 04:25:00'),
(316, 2, 6, 'June 2031', 2031, '2020-10-01 04:25:00'),
(317, 2, 7, 'July 2031', 2031, '2020-10-01 04:25:00'),
(318, 2, 8, 'August 2031', 2031, '2020-10-01 04:25:00'),
(319, 2, 9, 'September 2031', 2031, '2020-10-01 04:25:00'),
(320, 2, 10, 'October 2031', 2031, '2020-10-01 04:25:00'),
(321, 2, 11, 'November 2031', 2031, '2020-10-01 04:25:00'),
(322, 2, 12, 'December 2031', 2031, '2020-10-01 04:25:00'),
(323, 2, 1, 'January 2032', 2032, '2020-10-01 04:25:00'),
(324, 2, 2, 'February 2032', 2032, '2020-10-01 04:25:00'),
(325, 2, 3, 'March 2032', 2032, '2020-10-01 04:25:00'),
(326, 2, 4, 'April 2032', 2032, '2020-10-01 04:25:00'),
(327, 2, 5, 'May 2032', 2032, '2020-10-01 04:25:00'),
(328, 2, 6, 'June 2032', 2032, '2020-10-01 04:25:00'),
(329, 2, 7, 'July 2032', 2032, '2020-10-01 04:25:00'),
(330, 2, 8, 'August 2032', 2032, '2020-10-01 04:25:00'),
(331, 2, 9, 'September 2032', 2032, '2020-10-01 04:25:00'),
(332, 2, 10, 'October 2032', 2032, '2020-10-01 04:25:00'),
(333, 2, 11, 'November 2032', 2032, '2020-10-01 04:25:00'),
(334, 2, 12, 'December 2032', 2032, '2020-10-01 04:25:00'),
(335, 2, 1, 'January 2033', 2033, '2020-10-01 04:25:00'),
(336, 2, 2, 'February 2033', 2033, '2020-10-01 04:25:00'),
(337, 2, 3, 'March 2033', 2033, '2020-10-01 04:25:00'),
(338, 2, 4, 'April 2033', 2033, '2020-10-01 04:25:00'),
(339, 2, 5, 'May 2033', 2033, '2020-10-01 04:25:00'),
(340, 2, 6, 'June 2033', 2033, '2020-10-01 04:25:00'),
(341, 2, 7, 'July 2033', 2033, '2020-10-01 04:25:00'),
(342, 2, 8, 'August 2033', 2033, '2020-10-01 04:25:00'),
(343, 2, 9, 'September 2033', 2033, '2020-10-01 04:25:00'),
(344, 2, 10, 'October 2033', 2033, '2020-10-01 04:25:00'),
(345, 2, 11, 'November 2033', 2033, '2020-10-01 04:25:00'),
(346, 2, 12, 'December 2033', 2033, '2020-10-01 04:25:00'),
(347, 2, 1, 'January 2034', 2034, '2020-10-01 04:25:00'),
(348, 2, 2, 'February 2034', 2034, '2020-10-01 04:25:00'),
(349, 2, 3, 'March 2034', 2034, '2020-10-01 04:25:00'),
(350, 2, 4, 'April 2034', 2034, '2020-10-01 04:25:00'),
(351, 2, 5, 'May 2034', 2034, '2020-10-01 04:25:00'),
(352, 2, 6, 'June 2034', 2034, '2020-10-01 04:25:00'),
(353, 2, 7, 'July 2034', 2034, '2020-10-01 04:25:00'),
(354, 2, 8, 'August 2034', 2034, '2020-10-01 04:25:00'),
(355, 2, 9, 'September 2034', 2034, '2020-10-01 04:25:00'),
(356, 2, 10, 'October 2034', 2034, '2020-10-01 04:25:00'),
(357, 2, 11, 'November 2034', 2034, '2020-10-01 04:25:00'),
(358, 2, 12, 'December 2034', 2034, '2020-10-01 04:25:00'),
(359, 2, 1, 'January 2035', 2035, '2020-10-01 04:25:00'),
(360, 2, 2, 'February 2035', 2035, '2020-10-01 04:25:00'),
(361, 2, 3, 'March 2035', 2035, '2020-10-01 04:25:00'),
(362, 2, 4, 'April 2035', 2035, '2020-10-01 04:25:00'),
(363, 2, 5, 'May 2035', 2035, '2020-10-01 04:25:00'),
(364, 2, 6, 'June 2035', 2035, '2020-10-01 04:25:00'),
(365, 2, 7, 'July 2035', 2035, '2020-10-01 04:25:00'),
(366, 2, 8, 'August 2035', 2035, '2020-10-01 04:25:00'),
(367, 2, 9, 'September 2035', 2035, '2020-10-01 04:25:00'),
(368, 2, 10, 'October 2035', 2035, '2020-10-01 04:25:00'),
(369, 2, 11, 'November 2035', 2035, '2020-10-01 04:25:00'),
(370, 2, 12, 'December 2035', 2035, '2020-10-01 04:25:00'),
(371, 2, 1, 'January 2036', 2036, '2020-10-01 04:25:00'),
(372, 2, 2, 'February 2036', 2036, '2020-10-01 04:25:00'),
(373, 2, 3, 'March 2036', 2036, '2020-10-01 04:25:00'),
(374, 2, 4, 'April 2036', 2036, '2020-10-01 04:25:00'),
(375, 2, 5, 'May 2036', 2036, '2020-10-01 04:25:00'),
(376, 2, 6, 'June 2036', 2036, '2020-10-01 04:25:00'),
(377, 2, 7, 'July 2036', 2036, '2020-10-01 04:25:00'),
(378, 2, 8, 'August 2036', 2036, '2020-10-01 04:25:00'),
(379, 2, 9, 'September 2036', 2036, '2020-10-01 04:25:00'),
(380, 2, 10, 'October 2036', 2036, '2020-10-01 04:25:00'),
(381, 2, 11, 'November 2036', 2036, '2020-10-01 04:25:00'),
(382, 2, 12, 'December 2036', 2036, '2020-10-01 04:25:00'),
(383, 2, 1, 'January 2037', 2037, '2020-10-01 04:25:00'),
(384, 2, 2, 'February 2037', 2037, '2020-10-01 04:25:00'),
(385, 2, 3, 'March 2037', 2037, '2020-10-01 04:25:00'),
(386, 2, 4, 'April 2037', 2037, '2020-10-01 04:25:00'),
(387, 2, 5, 'May 2037', 2037, '2020-10-01 04:25:00'),
(388, 2, 6, 'June 2037', 2037, '2020-10-01 04:25:00'),
(389, 2, 7, 'July 2037', 2037, '2020-10-01 04:25:00'),
(390, 2, 8, 'August 2037', 2037, '2020-10-01 04:25:00'),
(391, 2, 9, 'September 2037', 2037, '2020-10-01 04:25:00'),
(392, 2, 10, 'October 2037', 2037, '2020-10-01 04:25:00'),
(393, 2, 11, 'November 2037', 2037, '2020-10-01 04:25:00'),
(394, 2, 12, 'December 2037', 2037, '2020-10-01 04:25:00'),
(395, 2, 1, 'January 2038', 2038, '2020-10-01 04:25:00'),
(396, 2, 2, 'February 2038', 2038, '2020-10-01 04:25:00'),
(397, 2, 3, 'March 2038', 2038, '2020-10-01 04:25:00'),
(398, 2, 4, 'April 2038', 2038, '2020-10-01 04:25:00'),
(399, 2, 5, 'May 2038', 2038, '2020-10-01 04:25:00'),
(400, 2, 6, 'June 2038', 2038, '2020-10-01 04:25:00'),
(401, 2, 7, 'July 2038', 2038, '2020-10-01 04:25:00'),
(402, 2, 8, 'August 2038', 2038, '2020-10-01 04:25:00'),
(403, 2, 9, 'September 2038', 2038, '2020-10-01 04:25:00'),
(404, 2, 10, 'October 2038', 2038, '2020-10-01 04:25:00'),
(405, 2, 11, 'November 2038', 2038, '2020-10-01 04:25:00'),
(406, 2, 12, 'December 2038', 2038, '2020-10-01 04:25:00'),
(407, 2, 1, 'January 2039', 2039, '2020-10-01 04:25:00'),
(408, 2, 2, 'February 2039', 2039, '2020-10-01 04:25:00'),
(409, 2, 3, 'March 2039', 2039, '2020-10-01 04:25:00'),
(410, 2, 4, 'April 2039', 2039, '2020-10-01 04:25:00'),
(411, 2, 5, 'May 2039', 2039, '2020-10-01 04:25:00'),
(412, 2, 6, 'June 2039', 2039, '2020-10-01 04:25:00'),
(413, 2, 7, 'July 2039', 2039, '2020-10-01 04:25:00'),
(414, 2, 8, 'August 2039', 2039, '2020-10-01 04:25:00'),
(415, 2, 9, 'September 2039', 2039, '2020-10-01 04:25:00'),
(416, 2, 10, 'October 2039', 2039, '2020-10-01 04:25:00'),
(417, 2, 11, 'November 2039', 2039, '2020-10-01 04:25:00'),
(418, 2, 12, 'December 2039', 2039, '2020-10-01 04:25:00'),
(419, 2, 1, 'January 2040', 2040, '2020-10-01 04:25:00'),
(420, 2, 2, 'February 2040', 2040, '2020-10-01 04:25:00'),
(421, 2, 3, 'March 2040', 2040, '2020-10-01 04:25:00'),
(422, 2, 4, 'April 2040', 2040, '2020-10-01 04:25:00'),
(423, 2, 5, 'May 2040', 2040, '2020-10-01 04:25:00'),
(424, 2, 6, 'June 2040', 2040, '2020-10-01 04:25:00'),
(425, 2, 7, 'July 2040', 2040, '2020-10-01 04:25:00'),
(426, 2, 8, 'August 2040', 2040, '2020-10-01 04:25:00'),
(427, 2, 9, 'September 2040', 2040, '2020-10-01 04:25:00'),
(428, 2, 10, 'October 2040', 2040, '2020-10-01 04:25:00'),
(429, 2, 11, 'November 2040', 2040, '2020-10-01 04:25:00'),
(430, 2, 12, 'December 2040', 2040, '2020-10-01 04:25:00'),
(431, 2, 1, 'January 2041', 2041, '2020-10-01 04:25:00'),
(432, 2, 2, 'February 2041', 2041, '2020-10-01 04:25:00'),
(433, 2, 3, 'March 2041', 2041, '2020-10-01 04:25:00'),
(434, 2, 4, 'April 2041', 2041, '2020-10-01 04:25:00'),
(435, 2, 5, 'May 2041', 2041, '2020-10-01 04:25:00'),
(436, 2, 6, 'June 2041', 2041, '2020-10-01 04:25:00'),
(437, 2, 7, 'July 2041', 2041, '2020-10-01 04:25:00'),
(438, 2, 8, 'August 2041', 2041, '2020-10-01 04:25:00'),
(439, 2, 9, 'September 2041', 2041, '2020-10-01 04:25:00'),
(440, 2, 10, 'October 2041', 2041, '2020-10-01 04:25:00'),
(441, 2, 11, 'November 2041', 2041, '2020-10-01 04:25:00'),
(442, 2, 12, 'December 2041', 2041, '2020-10-01 04:25:00'),
(443, 2, 1, 'January 2042', 2042, '2020-10-01 04:25:00'),
(444, 2, 2, 'February 2042', 2042, '2020-10-01 04:25:00'),
(445, 2, 3, 'March 2042', 2042, '2020-10-01 04:25:00'),
(446, 2, 4, 'April 2042', 2042, '2020-10-01 04:25:00'),
(447, 2, 5, 'May 2042', 2042, '2020-10-01 04:25:00'),
(448, 2, 6, 'June 2042', 2042, '2020-10-01 04:25:00'),
(449, 2, 7, 'July 2042', 2042, '2020-10-01 04:25:00'),
(450, 2, 8, 'August 2042', 2042, '2020-10-01 04:25:00'),
(451, 2, 9, 'September 2042', 2042, '2020-10-01 04:25:00'),
(452, 2, 10, 'October 2042', 2042, '2020-10-01 04:25:00'),
(453, 2, 11, 'November 2042', 2042, '2020-10-01 04:25:00'),
(454, 2, 12, 'December 2042', 2042, '2020-10-01 04:25:00'),
(455, 2, 1, 'January 2043', 2043, '2020-10-01 04:25:00'),
(456, 2, 2, 'February 2043', 2043, '2020-10-01 04:25:00'),
(457, 2, 3, 'March 2043', 2043, '2020-10-01 04:25:00'),
(458, 2, 4, 'April 2043', 2043, '2020-10-01 04:25:00'),
(459, 2, 5, 'May 2043', 2043, '2020-10-01 04:25:00'),
(460, 2, 6, 'June 2043', 2043, '2020-10-01 04:25:00'),
(461, 2, 7, 'July 2043', 2043, '2020-10-01 04:25:00'),
(462, 2, 8, 'August 2043', 2043, '2020-10-01 04:25:00'),
(463, 2, 9, 'September 2043', 2043, '2020-10-01 04:25:00'),
(464, 2, 10, 'October 2043', 2043, '2020-10-01 04:25:00'),
(465, 2, 11, 'November 2043', 2043, '2020-10-01 04:25:00'),
(466, 2, 12, 'December 2043', 2043, '2020-10-01 04:25:00'),
(467, 2, 1, 'January 2044', 2044, '2020-10-01 04:25:00'),
(468, 2, 2, 'February 2044', 2044, '2020-10-01 04:25:00'),
(469, 2, 3, 'March 2044', 2044, '2020-10-01 04:25:00'),
(470, 2, 4, 'April 2044', 2044, '2020-10-01 04:25:00'),
(471, 2, 5, 'May 2044', 2044, '2020-10-01 04:25:00'),
(472, 2, 6, 'June 2044', 2044, '2020-10-01 04:25:00'),
(473, 2, 7, 'July 2044', 2044, '2020-10-01 04:25:00'),
(474, 2, 8, 'August 2044', 2044, '2020-10-01 04:25:00'),
(475, 2, 9, 'September 2044', 2044, '2020-10-01 04:25:00'),
(476, 2, 10, 'October 2044', 2044, '2020-10-01 04:25:00'),
(477, 2, 11, 'November 2044', 2044, '2020-10-01 04:25:00'),
(478, 2, 12, 'December 2044', 2044, '2020-10-01 04:25:00'),
(479, 2, 1, 'January 2045', 2045, '2020-10-01 04:25:00'),
(480, 2, 2, 'February 2045', 2045, '2020-10-01 04:25:00'),
(481, 2, 3, 'March 2045', 2045, '2020-10-01 04:25:00'),
(482, 2, 4, 'April 2045', 2045, '2020-10-01 04:25:00'),
(483, 2, 5, 'May 2045', 2045, '2020-10-01 04:25:00'),
(484, 2, 6, 'June 2045', 2045, '2020-10-01 04:25:00'),
(485, 2, 7, 'July 2045', 2045, '2020-10-01 04:25:00'),
(486, 2, 8, 'August 2045', 2045, '2020-10-01 04:25:00'),
(487, 2, 9, 'September 2045', 2045, '2020-10-01 04:25:00'),
(488, 2, 10, 'October 2045', 2045, '2020-10-01 04:25:00'),
(489, 2, 11, 'November 2045', 2045, '2020-10-01 04:25:00'),
(490, 2, 12, 'December 2045', 2045, '2020-10-01 04:25:00'),
(491, 2, 1, 'January 2046', 2046, '2020-10-01 04:25:00'),
(492, 2, 2, 'February 2046', 2046, '2020-10-01 04:25:00'),
(493, 2, 3, 'March 2046', 2046, '2020-10-01 04:25:00'),
(494, 2, 4, 'April 2046', 2046, '2020-10-01 04:25:00'),
(495, 2, 5, 'May 2046', 2046, '2020-10-01 04:25:00'),
(496, 2, 6, 'June 2046', 2046, '2020-10-01 04:25:00'),
(497, 2, 7, 'July 2046', 2046, '2020-10-01 04:25:00'),
(498, 2, 8, 'August 2046', 2046, '2020-10-01 04:25:00'),
(499, 2, 9, 'September 2046', 2046, '2020-10-01 04:25:00'),
(500, 2, 10, 'October 2046', 2046, '2020-10-01 04:25:00'),
(501, 2, 11, 'November 2046', 2046, '2020-10-01 04:25:00'),
(502, 2, 12, 'December 2046', 2046, '2020-10-01 04:25:00'),
(503, 2, 1, 'January 2047', 2047, '2020-10-01 04:25:00'),
(504, 2, 2, 'February 2047', 2047, '2020-10-01 04:25:00'),
(505, 2, 3, 'March 2047', 2047, '2020-10-01 04:25:00'),
(506, 2, 4, 'April 2047', 2047, '2020-10-01 04:25:00'),
(507, 2, 5, 'May 2047', 2047, '2020-10-01 04:25:00'),
(508, 2, 6, 'June 2047', 2047, '2020-10-01 04:25:00'),
(509, 2, 7, 'July 2047', 2047, '2020-10-01 04:25:00'),
(510, 2, 8, 'August 2047', 2047, '2020-10-01 04:25:00'),
(511, 2, 9, 'September 2047', 2047, '2020-10-01 04:25:00'),
(512, 2, 10, 'October 2047', 2047, '2020-10-01 04:25:00'),
(513, 2, 11, 'November 2047', 2047, '2020-10-01 04:25:00'),
(514, 2, 12, 'December 2047', 2047, '2020-10-01 04:25:00'),
(515, 2, 1, 'January 2048', 2048, '2020-10-01 04:25:00'),
(516, 2, 2, 'February 2048', 2048, '2020-10-01 04:25:00'),
(517, 2, 3, 'March 2048', 2048, '2020-10-01 04:25:00'),
(518, 2, 4, 'April 2048', 2048, '2020-10-01 04:25:00'),
(519, 2, 5, 'May 2048', 2048, '2020-10-01 04:25:00'),
(520, 2, 6, 'June 2048', 2048, '2020-10-01 04:25:00'),
(521, 2, 7, 'July 2048', 2048, '2020-10-01 04:25:00'),
(522, 2, 8, 'August 2048', 2048, '2020-10-01 04:25:00'),
(523, 2, 9, 'September 2048', 2048, '2020-10-01 04:25:00'),
(524, 2, 10, 'October 2048', 2048, '2020-10-01 04:25:00'),
(525, 2, 11, 'November 2048', 2048, '2020-10-01 04:25:00'),
(526, 2, 12, 'December 2048', 2048, '2020-10-01 04:25:00');

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
(1, 'Moo', '', 1, '2020-10-01 07:00:43'),
(2, 'Lung Ong', '', 1, '2020-10-01 07:01:05'),
(3, 'Fluk', '', 1, '2020-10-01 07:01:05');

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
(1, 'webDev', 'webDev', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 1, '2020-10-01 07:05:54'),
(2, 'admin', 'admin', '84a072ffaee96bde750a27d5d3e58555', 1, 3, '2020-10-01 07:02:25'),
(3, 'manager', 'manager', '0795151defba7a4b5dfa89170de46277', 1, 2, '2020-10-01 07:02:39');

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
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `issue_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `magazinetype`
--
ALTER TABLE `magazinetype`
  MODIFY `magazineType_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `magazinevol`
--
ALTER TABLE `magazinevol`
  MODIFY `magazineVol_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=527;
--
-- AUTO_INCREMENT for table `messenger`
--
ALTER TABLE `messenger`
  MODIFY `messenger_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transection`
--
ALTER TABLE `transection`
  MODIFY `transection_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
