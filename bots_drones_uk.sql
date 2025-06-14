-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2025 at 10:52 AM
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
-- Database: `bots_drones_uk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `mobile`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@botsanddrones.in', '$2y$10$Rb/g4u4dIC6Xq5JbH5ORvuMVrDwwdo2KFJwtV2gptsytkURrfLawW', NULL, NULL, '2022-10-05 07:53:08', '2022-10-05 07:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Image[5049]-1864827002-08_03_2023_07_37_am.jpeg', 'Active', '2022-11-04 09:43:12', '2023-08-03 14:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `category`, `status`, `created_at`, `updated_at`) VALUES
(57, 'DJI', 'consumer', 'Active', NULL, NULL),
(61, 'DJI', 'commercial', 'Active', '2024-01-04 14:06:52', '2024-01-04 14:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `home_page_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `show_in_home` enum('Y','N') NOT NULL DEFAULT 'N',
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `home_page_name`, `image`, `banner_image`, `show_in_home`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Drones', NULL, 'drone-2009430368-11_07_2022_12_45_pm.jpg', 'banner drone-396716589-11_07_2022_12_45_pm.jpeg', 'N', 'Used-Drones-9282', 'Active', '2022-10-10 14:53:08', '2022-11-07 19:45:24'),
(2, 'Accessories & Equipment', 'Accessories & Equipment', 'WhatsApp Image 2023-02-04 at 7.05.35 PM (1)-992891604-02_06_2023_01_58_pm.jpeg', 'Image[5052]-254133069-08_01_2023_12_01_pm.jpeg', 'Y', 'used-Accessories-1181', 'Active', '2022-10-10 14:53:08', '2023-08-01 19:01:52'),
(3, 'Robots', 'Robots', 'WhatsApp Image 2023-02-04 at 7.05.35 PM-721862928-02_06_2023_01_58_pm.jpeg', 'Image[5051]-1038011966-08_01_2023_12_01_pm.jpeg', 'Y', 'used-Robots-4046', 'Active', '2022-10-10 14:53:08', '2023-08-01 19:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, '1', 'Bath', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(3, '1', 'Birmingham', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(4, '1', 'Bradford', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(6, '1', 'Bristol', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(7, '1', 'Cambridge', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(8, '1', 'Canterbury', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(9, '1', 'Carlisle', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(10, '1', 'Chelmsford', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(12, '1', 'Chichester', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(13, '1', 'Coventry', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(14, '1', 'Derby', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(15, '1', 'Durham', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(16, '1', 'Ely', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(17, '1', 'Exeter', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(18, '1', 'Gloucester', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(19, '1', 'Hereford', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(20, '1', 'Kingston upon Hull', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(21, '1', 'Lancaster', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(22, '1', 'Leeds', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(23, '1', 'Leicester', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(24, '1', 'Lichfield', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(25, '1', 'Lincoln', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(26, '1', 'Liverpool', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(27, '1', 'City of London', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(28, '1', 'Manchester', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(29, '1', 'Newcastle upon Tyne', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(30, '1', 'Norwich', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(31, '1', 'Nottingham', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(32, '1', 'Oxford', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(33, '1', 'Peterborough', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(34, '1', 'Plymouth', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(35, '1', 'Portsmouth', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(36, '1', 'Preston', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(37, '1', 'Ripon', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(38, '1', 'Salford', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(39, '1', 'Salisbury', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(40, '1', 'Sheffield', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(41, '1', 'Southampton', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(42, '1', 'St Albans', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(43, '1', 'Stoke-on-Trent', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(44, '1', 'Sunderland', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(45, '1', 'Truro', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(46, '1', 'Wakefield', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(47, '1', 'Wells', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(48, '1', 'City of Westminster', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(49, '1', 'Winchester', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(50, '1', 'Wolverhampton', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(51, '1', 'Worcester', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(52, '1', 'York', 'Active', '2023-03-14 11:13:21', '2023-03-14 11:13:21'),
(54, '3', 'Aberdeen', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(55, '3', 'Dundee', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(56, '3', 'Dunfermline', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(57, '3', 'Edinburgh', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(58, '3', 'Glasgow', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(59, '3', 'Inverness', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(60, '3', 'Perth', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(62, '2', 'Bangor', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(63, '2', 'Cardiff', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(64, '2', 'Newport', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(65, '2', 'St Asaph', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(66, '2', 'St Davids', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(67, '2', 'Swansea', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(68, '2', 'Wrexham', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(70, '4', 'Bangor', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(71, '4', 'Belfast', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(72, '4', 'Lisburn', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(74, '4', 'Newry', 'Active', '2023-03-24 05:32:10', '2023-03-24 05:32:10'),
(76, '3', 'New City', 'Active', '2023-03-28 19:20:18', '2023-03-28 19:20:18'),
(82, '3', 'York', 'Active', '2023-03-29 12:10:42', '2023-03-29 12:10:42'),
(88, '3', 'Mascow', 'Active', '2024-01-04 14:25:19', '2024-01-04 14:25:19'),
(89, '1', 'Chesterfield', 'Active', '2024-02-05 14:38:08', '2024-02-05 14:38:08'),
(90, '1', 'Brighton and Hove', 'Active', '2024-02-05 14:39:48', '2024-02-05 14:39:48'),
(91, '3', 'Kilmarnock', 'Active', '2024-02-05 14:43:00', '2024-02-05 14:43:00'),
(92, '3', 'Ayr', 'Active', '2024-02-05 14:44:16', '2024-02-05 14:44:16'),
(93, '3', 'Coatbridge', 'Active', '2024-02-05 14:45:15', '2024-02-05 14:45:15'),
(94, '3', 'Greenock', 'Active', '2024-02-05 14:45:54', '2024-02-05 14:45:54'),
(95, '3', 'Glenrothes', 'Active', '2024-02-05 14:48:00', '2024-02-05 14:48:00'),
(96, '3', 'Stirling', 'Active', '2024-02-05 14:48:24', '2024-02-05 14:48:24'),
(97, '3', 'Airdrie', 'Active', '2024-02-05 14:49:05', '2024-02-05 14:49:05'),
(98, '3', 'Falkirk', 'Active', '2024-02-05 14:49:24', '2024-02-05 14:49:24'),
(99, '3', 'Irvine', 'Active', '2024-02-05 14:49:45', '2024-02-05 14:49:45'),
(100, '3', 'Dumfries', 'Active', '2024-02-05 14:50:06', '2024-02-05 14:50:06'),
(101, '3', 'Motherwell', 'Active', '2024-02-05 14:50:29', '2024-02-05 14:50:29'),
(102, '3', 'Rutherglen', 'Active', '2024-02-05 14:50:58', '2024-02-05 14:50:58'),
(103, '4', 'Derry', 'Active', '2024-02-05 14:58:39', '2024-02-05 14:58:39'),
(104, '4', 'Craigavon', 'Active', '2024-02-05 14:59:26', '2024-02-05 14:59:26'),
(105, '4', 'Newtownabbey', 'Active', '2024-02-05 15:00:08', '2024-02-05 15:00:08'),
(106, '4', 'Ballymena', 'Active', '2024-02-05 15:00:46', '2024-02-05 15:00:46'),
(107, '4', 'Newtownards', 'Active', '2024-02-05 15:01:39', '2024-02-05 15:01:39'),
(108, '4', 'Carrickfergus', 'Active', '2024-02-05 15:02:15', '2024-02-05 15:02:15'),
(109, '3', 'Paisley', 'Active', '2024-02-05 15:08:53', '2024-02-05 15:08:53'),
(110, '3', 'East Kilbride', 'Active', '2024-02-05 15:09:23', '2024-02-05 15:09:23'),
(111, '3', 'Livingston', 'Active', '2024-02-05 15:09:54', '2024-02-05 15:09:54'),
(112, '3', 'Hamilton', 'Active', '2024-02-05 15:10:14', '2024-02-05 15:10:14'),
(113, '3', 'Cumbernauld', 'Active', '2024-02-05 15:10:48', '2024-02-05 15:10:48'),
(114, '3', 'Kirkcaldy and Dysart', 'Active', '2024-02-05 15:11:35', '2024-02-05 15:11:35');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` text DEFAULT NULL,
  `requirement` longtext DEFAULT NULL,
  `otp_verified_at` varchar(255) DEFAULT NULL,
  `contact_confirm` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remainders` int(11) DEFAULT 0,
  `price_request` int(15) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `seller_id`, `buyer_id`, `product_id`, `quantity`, `requirement`, `otp_verified_at`, `contact_confirm`, `remark`, `status`, `created_at`, `updated_at`, `remainders`, `price_request`) VALUES
(5, 10, 11, 2, '1', 'Test', '2024-01-20', 'Yes', NULL, 'Y', '2024-01-23 07:15:09', '2024-01-23 14:15:09', 0, 1),
(8, 10, 11, 5, '1', 'Test', '2024-01-23', 'Yes', NULL, 'Y', '2024-01-23 06:53:46', '2024-01-23 13:53:46', 0, 2),
(9, 10, 33, 2, '1', 'Test', '2024-02-02', 'Yes', NULL, 'Y', '2024-02-02 09:30:28', '2024-02-02 16:30:28', 0, 0),
(11, 10, 34, 6, '1', 'Testing', '2024-02-03', 'No', NULL, NULL, '2024-02-03 13:30:11', '2024-02-03 13:30:11', 0, 0),
(12, 10, 34, 2, '1', 'Test', '2024-02-03', 'No', NULL, NULL, '2024-02-03 17:20:29', '2024-02-03 17:20:29', 0, 0),
(13, 10, 34, 2, '1', 'Test', '2024-02-06', 'No', NULL, NULL, '2024-02-06 18:11:16', '2024-02-06 18:11:16', 0, 0),
(14, 10, 34, 2, '1', 'Test', '2024-02-06', 'No', NULL, NULL, '2024-02-06 19:07:36', '2024-02-06 19:07:36', 0, 0),
(15, 10, 34, 6, '1', 'Test', '2024-02-06', 'Yes', NULL, 'Y', '2024-02-06 12:16:24', '2024-02-06 19:16:24', 0, 0),
(16, 10, 34, 2, '1', 'Test', '2024-02-06', 'No', NULL, NULL, '2024-02-06 20:20:17', '2024-02-06 20:20:17', 0, 0),
(17, 10, 34, 2, '1', 'Test', '2024-02-06', 'Yes', NULL, 'Y', '2024-02-06 13:20:59', '2024-02-06 20:20:59', 0, 0),
(18, 10, 24, 5, '1', 'for testing', '2024-03-15', 'No', NULL, NULL, '2024-03-15 12:27:17', '2024-03-15 12:27:17', 0, 0),
(19, 10, 24, 5, '1', 'for testing', '2024-03-15', 'Yes', NULL, 'Y', '2024-03-15 05:42:18', '2024-03-15 12:42:18', 0, 0),
(21, 10, 24, 6, '1', 'For testing', '2024-03-15', 'Yes', NULL, 'Y', '2024-03-15 11:49:57', '2024-03-15 18:49:57', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(2, 'Albania ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(3, 'Algeria ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(4, 'American Samoa ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(5, 'Andorra ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(6, 'Angola ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(7, 'Anguilla ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(8, 'Antigua & Barbuda ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(9, 'Argentina ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(10, 'Armenia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(11, 'Aruba ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(12, 'Australia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(13, 'Austria ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(14, 'Azerbaijan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(15, 'Bahamas, The ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(16, 'Bahrain ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(17, 'Bangladesh ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(18, 'Barbados ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(19, 'Belarus ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(20, 'Belgium ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(21, 'Belize ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(22, 'Benin ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(23, 'Bermuda ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(24, 'Bhutan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(25, 'Bolivia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(26, 'Bosnia & Herzegovina ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(27, 'Botswana ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(28, 'Brazil ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(29, 'British Virgin Is. ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(30, 'Brunei ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(31, 'Bulgaria ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(32, 'Burkina Faso ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(33, 'Burma ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(34, 'Burundi ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(35, 'Cambodia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(36, 'Cameroon ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(37, 'Canada ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(38, 'Cape Verde ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(39, 'Cayman Islands ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(40, 'Central African Rep. ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(41, 'Chad ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(42, 'Chile ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(43, 'China ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(44, 'Colombia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(45, 'Comoros ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(46, 'Congo, Dem. Rep. ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(47, 'Congo, Repub. of the ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(48, 'Cook Islands ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(49, 'Costa Rica ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(50, 'Cote d\'Ivoire ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(51, 'Croatia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(52, 'Cuba ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(53, 'Cyprus ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(54, 'Czech Republic ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(55, 'Denmark ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(56, 'Djibouti ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(57, 'Dominica ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(58, 'Dominican Republic ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(59, 'East Timor ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(60, 'Ecuador ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(61, 'Egypt ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(62, 'El Salvador ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(63, 'Equatorial Guinea ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(64, 'Eritrea ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(65, 'Estonia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(66, 'Ethiopia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(67, 'Faroe Islands ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(68, 'Fiji ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(69, 'Finland ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(70, 'France ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(71, 'French Guiana ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(72, 'French Polynesia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(73, 'Gabon ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(74, 'Gambia, The ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(75, 'Gaza Strip ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(76, 'Georgia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(77, 'Germany ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(78, 'Ghana ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(79, 'Gibraltar ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(80, 'Greece ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(81, 'Greenland ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(82, 'Grenada ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(83, 'Guadeloupe ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(84, 'Guam ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(85, 'Guatemala ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(86, 'Guernsey ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(87, 'Guinea ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(88, 'Guinea-Bissau ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(89, 'Guyana ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(90, 'Haiti ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(91, 'Honduras ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(92, 'Hong Kong ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(93, 'Hungary ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(94, 'Iceland ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(95, 'India ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(96, 'Indonesia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(97, 'Iran ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(98, 'Iraq ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(99, 'Ireland ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(100, 'Isle of Man ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(101, 'Israel ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(102, 'Italy ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(103, 'Jamaica ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(104, 'Japan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(105, 'Jersey ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(106, 'Jordan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(107, 'Kazakhstan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(108, 'Kenya ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(109, 'Kiribati ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(110, 'Korea, North ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(111, 'Korea, South ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(112, 'Kuwait ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(113, 'Kyrgyzstan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(114, 'Laos ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(115, 'Latvia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(116, 'Lebanon ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(117, 'Lesotho ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(118, 'Liberia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(119, 'Libya ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(120, 'Liechtenstein ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(121, 'Lithuania ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(122, 'Luxembourg ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(123, 'Macau ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(124, 'Macedonia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(125, 'Madagascar ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(126, 'Malawi ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(127, 'Malaysia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(128, 'Maldives ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(129, 'Mali ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(130, 'Malta ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(131, 'Marshall Islands ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(132, 'Martinique ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(133, 'Mauritania ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(134, 'Mauritius ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(135, 'Mayotte ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(136, 'Mexico ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(137, 'Micronesia, Fed. St. ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(138, 'Moldova ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(139, 'Monaco ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(140, 'Mongolia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(141, 'Montserrat ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(142, 'Morocco ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(143, 'Mozambique ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(144, 'Namibia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(145, 'Nauru ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(146, 'Nepal ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(147, 'Netherlands ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(148, 'Netherlands Antilles ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(149, 'New Caledonia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(150, 'New Zealand ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(151, 'Nicaragua ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(152, 'Niger ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(153, 'Nigeria ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(154, 'N. Mariana Islands ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(155, 'Norway ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(156, 'Oman ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(157, 'Pakistan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(158, 'Palau ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(159, 'Panama ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(160, 'Papua New Guinea ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(161, 'Paraguay ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(162, 'Peru ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(163, 'Philippines ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(164, 'Poland ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(165, 'Portugal ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(166, 'Puerto Rico ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(167, 'Qatar ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(168, 'Reunion ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(169, 'Romania ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(170, 'Russia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(171, 'Rwanda ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(172, 'Saint Helena ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(173, 'Saint Kitts & Nevis ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(174, 'Saint Lucia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(175, 'St Pierre & Miquelon ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(176, 'Saint Vincent and the Grenadines ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(177, 'Samoa ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(178, 'San Marino ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(179, 'Sao Tome & Principe ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(180, 'Saudi Arabia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(181, 'Senegal ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(182, 'Serbia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(183, 'Seychelles ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(184, 'Sierra Leone ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(185, 'Singapore ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(186, 'Slovakia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(187, 'Slovenia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(188, 'Solomon Islands ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(189, 'Somalia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(190, 'South Africa ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(191, 'Spain ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(192, 'Sri Lanka ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(193, 'Sudan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(194, 'Suriname ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(195, 'Swaziland ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(196, 'Sweden ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(197, 'Switzerland ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(198, 'Syria ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(199, 'Taiwan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(200, 'Tajikistan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(201, 'Tanzania ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(202, 'Thailand ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(203, 'Togo ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(204, 'Tonga ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(205, 'Trinidad & Tobago ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(206, 'Tunisia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(207, 'Turkey ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(208, 'Turkmenistan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(209, 'Turks & Caicos Is ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(210, 'Tuvalu ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(211, 'Uganda ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(212, 'Ukraine ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(213, 'United Arab Emirates ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(214, 'United Kingdom ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(215, 'United States ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(216, 'Uruguay ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(217, 'Uzbekistan ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(218, 'Vanuatu ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(219, 'Venezuela ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(220, 'Vietnam ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(221, 'Virgin Islands ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(222, 'Wallis and Futuna ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(223, 'West Bank ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(224, 'Western Sahara ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(225, 'Yemen ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(226, 'Zambia ', '2023-06-23 13:49:38', '2023-06-23 13:49:38'),
(227, 'Zimbabwe ', '2023-06-23 13:49:38', '2023-06-23 13:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `country_codes`
--

CREATE TABLE `country_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_codes`
--

INSERT INTO `country_codes` (`id`, `code`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '93', 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Afghanistan.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(2, '355', 'https://upload.wikimedia.org/wikipedia/commons/3/36/Flag_of_Albania.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(3, '213', 'https://upload.wikimedia.org/wikipedia/commons/7/77/Flag_of_Algeria.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(4, '376', 'https://upload.wikimedia.org/wikipedia/commons/1/19/Flag_of_Andorra.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(5, '244', 'https://upload.wikimedia.org/wikipedia/commons/9/9d/Flag_of_Angola.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(6, '1264', 'https://upload.wikimedia.org/wikipedia/commons/b/b4/Flag_of_Anguilla.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(7, '1268', 'https://upload.wikimedia.org/wikipedia/commons/8/89/Flag_of_Antigua_and_Barbuda.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(8, '54', 'https://upload.wikimedia.org/wikipedia/commons/1/1a/Flag_of_Argentina.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(9, '374', 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Flag_of_Armenia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(10, '297', 'https://upload.wikimedia.org/wikipedia/commons/f/f6/Flag_of_Aruba.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(11, '61', 'https://upload.wikimedia.org/wikipedia/commons/8/88/Flag_of_Australia_%28converted%29.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(12, '43', 'https://upload.wikimedia.org/wikipedia/commons/4/41/Flag_of_Austria.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(13, '994', 'https://upload.wikimedia.org/wikipedia/commons/d/dd/Flag_of_Azerbaijan.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(14, '1242', 'https://upload.wikimedia.org/wikipedia/commons/9/93/Flag_of_the_Bahamas.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(15, '973', 'https://upload.wikimedia.org/wikipedia/commons/2/2c/Flag_of_Bahrain.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(16, '880', 'https://upload.wikimedia.org/wikipedia/commons/f/f9/Flag_of_Bangladesh.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(17, '1246', 'https://upload.wikimedia.org/wikipedia/commons/e/ef/Flag_of_Barbados.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(18, '375', 'https://upload.wikimedia.org/wikipedia/commons/8/85/Flag_of_Belarus.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(19, '32', 'https://upload.wikimedia.org/wikipedia/commons/6/65/Flag_of_Belgium.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(20, '501', 'https://upload.wikimedia.org/wikipedia/commons/e/e7/Flag_of_Belize.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(21, '229', 'https://upload.wikimedia.org/wikipedia/commons/0/0a/Flag_of_Benin.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(22, '1441', 'https://upload.wikimedia.org/wikipedia/commons/b/bf/Flag_of_Bermuda.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(23, '975', 'https://upload.wikimedia.org/wikipedia/commons/9/91/Flag_of_Bhutan.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(24, '387', 'https://upload.wikimedia.org/wikipedia/commons/b/bf/Flag_of_Bosnia_and_Herzegovina.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(25, '267', 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Flag_of_Botswana.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(26, '55', 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Flag_of_Norway.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(27, '55', 'https://upload.wikimedia.org/wikipedia/en/0/05/Flag_of_Brazil.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(28, '246', 'https://upload.wikimedia.org/wikipedia/commons/6/6e/Flag_of_the_British_Indian_Ocean_Territory.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(29, '673', 'https://upload.wikimedia.org/wikipedia/commons/9/9c/Flag_of_Brunei.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(30, '359', 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Bulgaria.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(31, '226', 'https://upload.wikimedia.org/wikipedia/commons/3/31/Flag_of_Burkina_Faso.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(32, '257', 'https://upload.wikimedia.org/wikipedia/commons/5/50/Flag_of_Burundi.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(33, '855', 'https://upload.wikimedia.org/wikipedia/commons/8/83/Flag_of_Cambodia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(34, '237', 'https://upload.wikimedia.org/wikipedia/commons/4/4f/Flag_of_Cameroon.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(35, '1', 'https://upload.wikimedia.org/wikipedia/en/c/cf/Flag_of_Canada.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(36, '238', 'https://upload.wikimedia.org/wikipedia/commons/3/38/Flag_of_Cape_Verde.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(37, '1345', 'https://upload.wikimedia.org/wikipedia/commons/0/0f/Flag_of_the_Cayman_Islands.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(38, '236', 'https://upload.wikimedia.org/wikipedia/commons/6/6f/Flag_of_the_Central_African_Republic.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(39, '235', 'https://upload.wikimedia.org/wikipedia/commons/4/4b/Flag_of_Chad.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(40, '56', 'https://upload.wikimedia.org/wikipedia/commons/7/78/Flag_of_Chile.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(41, '86', 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Flag_of_the_People%27s_Republic_of_China.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(42, '61', 'https://upload.wikimedia.org/wikipedia/commons/6/67/Flag_of_Christmas_Island.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(43, '61', 'https://upload.wikimedia.org/wikipedia/commons/7/74/Flag_of_the_Cocos_%28Keeling%29_Islands.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(44, '57', 'https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(45, '269', 'https://upload.wikimedia.org/wikipedia/commons/9/94/Flag_of_the_Comoros.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(46, '242', 'https://upload.wikimedia.org/wikipedia/commons/9/92/Flag_of_the_Republic_of_the_Congo.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(47, '682', 'https://upload.wikimedia.org/wikipedia/commons/3/35/Flag_of_the_Cook_Islands.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(48, '506', 'https://upload.wikimedia.org/wikipedia/commons/b/bc/Flag_of_Costa_Rica_%28state%29.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(49, '385', 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Flag_of_Croatia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(50, '53', 'https://upload.wikimedia.org/wikipedia/commons/b/bd/Flag_of_Cuba.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(51, '357', 'https://upload.wikimedia.org/wikipedia/commons/d/d4/Flag_of_Cyprus.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(52, '420', 'https://upload.wikimedia.org/wikipedia/commons/c/cb/Flag_of_the_Czech_Republic.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(53, '45', 'https://upload.wikimedia.org/wikipedia/commons/9/9c/Flag_of_Denmark.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(54, '253', 'https://upload.wikimedia.org/wikipedia/commons/3/34/Flag_of_Djibouti.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(55, '1767', 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Flag_of_Dominica.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(56, '1849', 'https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_the_Dominican_Republic.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(57, '593', 'https://upload.wikimedia.org/wikipedia/commons/e/e8/Flag_of_Ecuador.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(58, '20', 'https://upload.wikimedia.org/wikipedia/commons/f/fe/Flag_of_Egypt.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(59, '503', 'https://upload.wikimedia.org/wikipedia/commons/3/34/Flag_of_El_Salvador.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(60, '240', 'https://upload.wikimedia.org/wikipedia/commons/3/31/Flag_of_Equatorial_Guinea.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(61, '291', 'https://upload.wikimedia.org/wikipedia/commons/2/29/Flag_of_Eritrea.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(62, '372', 'https://upload.wikimedia.org/wikipedia/commons/8/8f/Flag_of_Estonia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(63, '251', 'https://upload.wikimedia.org/wikipedia/commons/7/71/Flag_of_Ethiopia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(64, '500', 'https://upload.wikimedia.org/wikipedia/commons/8/83/Flag_of_the_Falkland_Islands.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(65, '298', 'https://upload.wikimedia.org/wikipedia/commons/3/3c/Flag_of_the_Faroe_Islands.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(66, '679', 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Flag_of_Fiji.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(67, '358', 'https://upload.wikimedia.org/wikipedia/commons/b/bc/Flag_of_Finland.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(68, '33', 'https://upload.wikimedia.org/wikipedia/en/c/c3/Flag_of_France.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(69, '594', 'https://upload.wikimedia.org/wikipedia/commons/2/29/Flag_of_French_Guiana.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(70, '689', 'https://upload.wikimedia.org/wikipedia/commons/d/db/Flag_of_French_Polynesia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(71, '241', 'https://upload.wikimedia.org/wikipedia/commons/0/04/Flag_of_Gabon.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(72, '220', 'https://upload.wikimedia.org/wikipedia/commons/7/77/Flag_of_The_Gambia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(73, '995', 'https://upload.wikimedia.org/wikipedia/commons/0/0f/Flag_of_Georgia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(74, '49', 'https://upload.wikimedia.org/wikipedia/en/b/ba/Flag_of_Germany.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(75, '233', 'https://upload.wikimedia.org/wikipedia/commons/1/19/Flag_of_Ghana.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(76, '350', 'https://upload.wikimedia.org/wikipedia/commons/0/02/Flag_of_Gibraltar.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(77, '30', 'https://upload.wikimedia.org/wikipedia/commons/5/5c/Flag_of_Greece.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(78, '299', 'https://upload.wikimedia.org/wikipedia/commons/0/09/Flag_of_Greenland.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(79, '1473', 'https://upload.wikimedia.org/wikipedia/commons/b/bc/Flag_of_Grenada.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(80, '590', 'https://upload.wikimedia.org/wikipedia/commons/e/e7/Unofficial_flag_of_Guadeloupe_%28local%29.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(81, '1671', 'https://upload.wikimedia.org/wikipedia/commons/0/07/Flag_of_Guam.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(82, '502', 'https://upload.wikimedia.org/wikipedia/commons/e/ec/Flag_of_Guatemala.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(83, '44', 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Flag_of_Guernsey.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(84, '224', 'https://upload.wikimedia.org/wikipedia/commons/e/ed/Flag_of_Guinea.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(85, '245', 'https://upload.wikimedia.org/wikipedia/commons/0/01/Flag_of_Guinea-Bissau.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(86, '592', 'https://upload.wikimedia.org/wikipedia/commons/9/99/Flag_of_Guyana.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(87, '509', 'https://upload.wikimedia.org/wikipedia/commons/5/56/Flag_of_Haiti.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(88, '672', 'https://upload.wikimedia.org/wikipedia/commons/b/bb/Proposed_flag_of_Antarctica_%28Graham_Bartram%29.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(89, '379', 'https://upload.wikimedia.org/wikipedia/commons/0/00/Flag_of_the_Vatican_City.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(90, '504', 'https://upload.wikimedia.org/wikipedia/commons/c/ca/Naval_Ensign_of_Honduras.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(91, '852', 'https://upload.wikimedia.org/wikipedia/commons/5/5b/Flag_of_Hong_Kong.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(92, '36', 'https://upload.wikimedia.org/wikipedia/commons/c/c1/Flag_of_Hungary.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(93, '354', 'https://upload.wikimedia.org/wikipedia/commons/c/ce/Flag_of_Iceland.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(94, '91', 'https://upload.wikimedia.org/wikipedia/en/4/41/Flag_of_India.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(95, '62', 'https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(96, '98', 'https://upload.wikimedia.org/wikipedia/commons/c/ca/Flag_of_Iran.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(97, '964', 'https://upload.wikimedia.org/wikipedia/commons/f/f6/Flag_of_Iraq.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(98, '353', 'https://upload.wikimedia.org/wikipedia/commons/4/45/Flag_of_Ireland.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(99, '44', 'https://upload.wikimedia.org/wikipedia/commons/b/bc/Flag_of_the_Isle_of_Man.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(100, '972', 'https://upload.wikimedia.org/wikipedia/commons/d/d4/Flag_of_Israel.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(101, '39', 'https://upload.wikimedia.org/wikipedia/en/0/03/Flag_of_Italy.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(102, '1876', 'https://upload.wikimedia.org/wikipedia/commons/0/0a/Flag_of_Jamaica.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(103, '81', 'https://upload.wikimedia.org/wikipedia/en/9/9e/Flag_of_Japan.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(104, '44', 'https://upload.wikimedia.org/wikipedia/commons/1/1c/Flag_of_Jersey.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(105, '962', 'https://upload.wikimedia.org/wikipedia/commons/c/c0/Flag_of_Jordan.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(106, '7', 'https://upload.wikimedia.org/wikipedia/commons/d/d3/Flag_of_Kazakhstan.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(107, '254', 'https://upload.wikimedia.org/wikipedia/commons/4/49/Flag_of_Kenya.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(108, '686', 'https://upload.wikimedia.org/wikipedia/commons/d/d3/Flag_of_Kiribati.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(109, '965', 'https://upload.wikimedia.org/wikipedia/commons/a/aa/Flag_of_Kuwait.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(110, '996', 'https://upload.wikimedia.org/wikipedia/commons/c/c7/Flag_of_Kyrgyzstan.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(111, '856', 'https://upload.wikimedia.org/wikipedia/commons/5/56/Flag_of_Laos.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(112, '371', 'https://upload.wikimedia.org/wikipedia/commons/8/84/Flag_of_Latvia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(113, '961', 'https://upload.wikimedia.org/wikipedia/commons/5/59/Flag_of_Lebanon.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(114, '266', 'https://upload.wikimedia.org/wikipedia/commons/4/4a/Flag_of_Lesotho.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(115, '231', 'https://upload.wikimedia.org/wikipedia/commons/b/b8/Flag_of_Liberia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(116, '423', 'https://upload.wikimedia.org/wikipedia/commons/4/47/Flag_of_Liechtenstein.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(117, '370', 'https://upload.wikimedia.org/wikipedia/commons/1/11/Flag_of_Lithuania.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(118, '352', 'https://upload.wikimedia.org/wikipedia/commons/d/da/Flag_of_Luxembourg.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(119, '853', 'https://upload.wikimedia.org/wikipedia/commons/6/63/Flag_of_Macau.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(120, '261', 'https://upload.wikimedia.org/wikipedia/commons/b/bc/Flag_of_Madagascar.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(121, '265', 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Flag_of_Malawi.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(122, '60', 'https://upload.wikimedia.org/wikipedia/commons/6/66/Flag_of_Malaysia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(123, '960', 'https://upload.wikimedia.org/wikipedia/commons/0/0f/Flag_of_Maldives.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(124, '223', 'https://upload.wikimedia.org/wikipedia/commons/9/92/Flag_of_Mali.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(125, '356', 'https://upload.wikimedia.org/wikipedia/commons/7/73/Flag_of_Malta.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(126, '692', 'https://upload.wikimedia.org/wikipedia/commons/2/2e/Flag_of_the_Marshall_Islands.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(127, '596', 'https://upload.wikimedia.org/wikipedia/commons/e/e7/Unofficial_flag_of_Guadeloupe_%28local%29.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(128, '222', 'https://upload.wikimedia.org/wikipedia/commons/4/43/Flag_of_Mauritania.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(129, '230', 'https://upload.wikimedia.org/wikipedia/commons/7/77/Flag_of_Mauritius.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(130, '262', 'https://upload.wikimedia.org/wikipedia/en/c/c3/Flag_of_France.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(131, '52', 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Flag_of_Mexico.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(132, '377', 'https://upload.wikimedia.org/wikipedia/commons/e/ea/Flag_of_Monaco.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(133, '976', 'https://upload.wikimedia.org/wikipedia/commons/4/4c/Flag_of_Mongolia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(134, '382', 'https://upload.wikimedia.org/wikipedia/commons/6/64/Flag_of_Montenegro.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(135, '1664', 'https://upload.wikimedia.org/wikipedia/commons/d/d0/Flag_of_Montserrat.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(136, '212', 'https://upload.wikimedia.org/wikipedia/commons/2/2c/Flag_of_Morocco.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(137, '258', 'https://upload.wikimedia.org/wikipedia/commons/d/d0/Flag_of_Mozambique.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(138, '95', 'https://upload.wikimedia.org/wikipedia/commons/8/8c/Flag_of_Myanmar.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(139, '264', 'https://upload.wikimedia.org/wikipedia/commons/0/00/Flag_of_Namibia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(140, '674', 'https://upload.wikimedia.org/wikipedia/commons/3/30/Flag_of_Nauru.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(141, '977', 'https://upload.wikimedia.org/wikipedia/commons/9/9b/Flag_of_Nepal.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(142, '31', 'https://upload.wikimedia.org/wikipedia/commons/2/20/Flag_of_the_Netherlands.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(143, '687', 'https://upload.wikimedia.org/wikipedia/commons/2/26/Flags_of_New_Caledonia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(144, '64', 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Flag_of_New_Zealand.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(145, '505', 'https://upload.wikimedia.org/wikipedia/commons/1/19/Flag_of_Nicaragua.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(146, '227', 'https://upload.wikimedia.org/wikipedia/commons/f/f4/Flag_of_Niger.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(147, '234', 'https://upload.wikimedia.org/wikipedia/commons/7/79/Flag_of_Nigeria.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(148, '683', 'https://upload.wikimedia.org/wikipedia/commons/0/01/Flag_of_Niue.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(149, '672', 'https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Norfolk_Island.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(150, '1670', 'https://upload.wikimedia.org/wikipedia/commons/e/e0/Flag_of_the_Northern_Mariana_Islands.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(151, '47', 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Flag_of_Norway.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(152, '968', 'https://upload.wikimedia.org/wikipedia/commons/d/dd/Flag_of_Oman.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(153, '92', 'https://upload.wikimedia.org/wikipedia/commons/3/32/Flag_of_Pakistan.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(154, '680', 'https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Palau.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(155, '507', 'https://upload.wikimedia.org/wikipedia/commons/a/ab/Flag_of_Panama.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(156, '675', 'https://upload.wikimedia.org/wikipedia/commons/e/e3/Flag_of_Papua_New_Guinea.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(157, '595', 'https://upload.wikimedia.org/wikipedia/commons/2/27/Flag_of_Paraguay.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(158, '51', 'https://upload.wikimedia.org/wikipedia/commons/c/cf/Flag_of_Peru.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(159, '63', 'https://upload.wikimedia.org/wikipedia/commons/9/99/Flag_of_the_Philippines.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(160, '870', 'https://upload.wikimedia.org/wikipedia/commons/8/88/Flag_of_the_Pitcairn_Islands.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(161, '48', 'https://upload.wikimedia.org/wikipedia/en/1/12/Flag_of_Poland.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(162, '351', 'https://upload.wikimedia.org/wikipedia/commons/5/5c/Flag_of_Portugal.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(163, '1939', 'https://upload.wikimedia.org/wikipedia/commons/2/28/Flag_of_Puerto_Rico.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(164, '974', 'https://upload.wikimedia.org/wikipedia/commons/6/65/Flag_of_Qatar.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(165, '262', 'https://upload.wikimedia.org/wikipedia/en/c/c3/Flag_of_France.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(166, '40', 'https://upload.wikimedia.org/wikipedia/commons/7/73/Flag_of_Romania.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(167, '250', 'https://upload.wikimedia.org/wikipedia/commons/1/17/Flag_of_Rwanda.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(168, '1869', 'https://upload.wikimedia.org/wikipedia/commons/f/fe/Flag_of_Saint_Kitts_and_Nevis.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(169, '1758', 'https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Saint_Lucia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(170, '508', 'https://upload.wikimedia.org/wikipedia/commons/7/74/Flag_of_Saint-Pierre_and_Miquelon.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(171, '1784', 'https://upload.wikimedia.org/wikipedia/commons/6/6d/Flag_of_Saint_Vincent_and_the_Grenadines.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(172, '685', 'https://upload.wikimedia.org/wikipedia/commons/3/31/Flag_of_Samoa.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(173, '378', 'https://upload.wikimedia.org/wikipedia/commons/b/b1/Flag_of_San_Marino.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(174, '239', 'https://upload.wikimedia.org/wikipedia/commons/4/4f/Flag_of_Sao_Tome_and_Principe.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(175, '966', 'https://upload.wikimedia.org/wikipedia/commons/0/0d/Flag_of_Saudi_Arabia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(176, '221', 'https://upload.wikimedia.org/wikipedia/commons/f/fd/Flag_of_Senegal.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(177, '381', 'https://upload.wikimedia.org/wikipedia/commons/f/ff/Flag_of_Serbia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(178, '248', 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Flag_of_Seychelles.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(179, '232', 'https://upload.wikimedia.org/wikipedia/commons/1/17/Flag_of_Sierra_Leone.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(180, '65', 'https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Singapore.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(181, '421', 'https://upload.wikimedia.org/wikipedia/commons/e/e6/Flag_of_Slovakia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(182, '386', 'https://upload.wikimedia.org/wikipedia/commons/f/f0/Flag_of_Slovenia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(183, '677', 'https://upload.wikimedia.org/wikipedia/commons/7/74/Flag_of_the_Solomon_Islands.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(184, '252', 'https://upload.wikimedia.org/wikipedia/commons/a/a0/Flag_of_Somalia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(185, '27', 'https://upload.wikimedia.org/wikipedia/commons/a/af/Flag_of_South_Africa.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(186, '500', 'https://upload.wikimedia.org/wikipedia/commons/e/ed/Flag_of_South_Georgia_and_the_South_Sandwich_Islands.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(187, '34', 'https://upload.wikimedia.org/wikipedia/en/9/9a/Flag_of_Spain.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(188, '94', 'https://upload.wikimedia.org/wikipedia/commons/1/11/Flag_of_Sri_Lanka.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(189, '249', 'https://upload.wikimedia.org/wikipedia/commons/0/01/Flag_of_Sudan.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(190, '597', 'https://upload.wikimedia.org/wikipedia/commons/6/60/Flag_of_Suriname.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(191, '268', 'https://upload.wikimedia.org/wikipedia/commons/3/38/Flag_of_Swaziland_1894.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(192, '46', 'https://upload.wikimedia.org/wikipedia/en/4/4c/Flag_of_Sweden.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(193, '41', 'https://upload.wikimedia.org/wikipedia/commons/0/08/Flag_of_Switzerland_%28Pantone%29.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(194, '963', 'https://upload.wikimedia.org/wikipedia/commons/5/53/Flag_of_Syria.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(195, '886', 'https://upload.wikimedia.org/wikipedia/commons/7/72/Flag_of_the_Republic_of_China.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(196, '992', 'https://upload.wikimedia.org/wikipedia/commons/d/d0/Flag_of_Tajikistan.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(197, '66', 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Flag_of_Thailand.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(198, '670', 'https://upload.wikimedia.org/wikipedia/commons/2/26/Flag_of_East_Timor.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(199, '228', 'https://upload.wikimedia.org/wikipedia/commons/6/68/Flag_of_Togo.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(200, '690', 'https://upload.wikimedia.org/wikipedia/commons/8/8e/Flag_of_Tokelau.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(201, '676', 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Tonga.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(202, '1868', 'https://upload.wikimedia.org/wikipedia/commons/6/64/Flag_of_Trinidad_and_Tobago.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(203, '216', 'https://upload.wikimedia.org/wikipedia/commons/c/ce/Flag_of_Tunisia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(204, '90', 'https://upload.wikimedia.org/wikipedia/commons/b/b4/Flag_of_Turkey.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(205, '993', 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Flag_of_Turkmenistan.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(206, '1649', 'https://upload.wikimedia.org/wikipedia/commons/a/a0/Flag_of_the_Turks_and_Caicos_Islands.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(207, '688', 'https://upload.wikimedia.org/wikipedia/commons/3/38/Flag_of_Tuvalu.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(208, '256', 'https://upload.wikimedia.org/wikipedia/commons/4/4e/Flag_of_Uganda.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(209, '380', 'https://upload.wikimedia.org/wikipedia/commons/4/49/Flag_of_Ukraine.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(210, '971', 'https://upload.wikimedia.org/wikipedia/commons/c/cb/Flag_of_the_United_Arab_Emirates.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(211, '44', 'https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(212, '1', 'https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(213, '1581', 'https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(214, '598', 'https://upload.wikimedia.org/wikipedia/commons/f/fe/Flag_of_Uruguay.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(215, '998', 'https://upload.wikimedia.org/wikipedia/commons/8/84/Flag_of_Uzbekistan.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(216, '678', 'https://upload.wikimedia.org/wikipedia/commons/b/bc/Flag_of_Vanuatu.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(217, '84', 'https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(218, '681', 'https://upload.wikimedia.org/wikipedia/commons/d/d2/Flag_of_Wallis_and_Futuna.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(219, '967', 'https://upload.wikimedia.org/wikipedia/commons/8/89/Flag_of_Yemen.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(220, '260', 'https://upload.wikimedia.org/wikipedia/commons/0/06/Flag_of_Zambia.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44'),
(221, '263', 'https://upload.wikimedia.org/wikipedia/commons/6/6a/Flag_of_Zimbabwe.svg', 'Active', '2023-09-22 13:23:44', '2023-09-22 13:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_type`
--

CREATE TABLE `equipment_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment_type`
--

INSERT INTO `equipment_type` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cameras', 'Active', NULL, NULL),
(2, 'Cases', 'Active', NULL, NULL),
(3, 'Docking Station', 'Active', NULL, NULL),
(4, 'Ground Control Stations', 'Active', NULL, NULL),
(5, 'Lenses', 'Active', NULL, NULL),
(6, 'Lens Filters', 'Active', NULL, NULL),
(7, 'Power Cables', 'Active', NULL, NULL),
(8, 'Sensors', 'Active', NULL, NULL),
(9, 'Spray Tank', 'Active', NULL, NULL),
(10, 'Spray Nozzles', 'Active', NULL, NULL),
(11, 'Batteries', 'Active', NULL, NULL),
(12, 'Communication Equipment', 'Active', NULL, NULL),
(13, 'Charging Equipment', 'Active', NULL, NULL),
(14, 'Navigation Equipment', 'Active', NULL, NULL),
(15, 'Propellers', 'Active', NULL, NULL),
(16, 'Remote Controllers', 'Active', NULL, NULL),
(17, 'Video Goggles', 'Active', NULL, NULL),
(18, 'Video Transmitters', 'Active', NULL, NULL),
(19, 'Wheels', 'Active', NULL, NULL),
(20, 'Equipment Other', 'Active', NULL, NULL),
(21, 'Battery', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_21_064220_create_products_table', 2),
(6, '2022_09_21_070417_create_product_images_table', 2),
(7, '2022_09_21_104607_create_categories_table', 3),
(8, '2022_09_21_112253_create_sub_categories_table', 4),
(9, '2022_09_21_121600_create_product_packages_table', 5),
(10, '2022_09_21_124619_create_enquiries_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `brand_id`, `name`, `category`, `status`, `created_at`, `updated_at`) VALUES
(116, '57', 'Air 3', 'consumer', 'Active', NULL, NULL),
(136, '61', 'Matrice 30T', 'commercial', 'Active', NULL, NULL),
(137, '61', 'Mavic 3E', 'commercial', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `publish_option` enum('now','later') NOT NULL,
  `start_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_date` date NOT NULL,
  `end_time` time NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `publish_option`, `start_date`, `start_time`, `end_date`, `end_time`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'later', '2024-03-08', '15:33:00', '2024-03-15', '16:34:00', 'Drone Alert Service', 'This service provides real-time alerts about drone incursions into your designated area. [OSL Drone Alert Service]', '2024-03-14 17:02:14', '2024-03-14 17:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `usage` varchar(255) NOT NULL,
  `tax_register_no` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `order_confirm` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mary@mailinator.com', '$2y$10$K3QcZzMHHsRV0QpN71Hen.TL.kzLPBxlU/sw4J480l7M5MKm8gNvS', '2022-10-27 20:08:38'),
('roselin@thulirsoft.com', '$2y$10$5ZzuAHSZaJW3htkA.pu9neih93yfFXePdVFPkcUPd11BaQxYnJbea', '2022-10-27 21:30:32'),
('hello@botsanddrones.co', '$2y$10$NPCmLMeOTJ01nPQ8bdXdl.Snl1m1LsiyewqhtpO9NtqfZn4sPjNea', '2022-11-01 17:11:07'),
('ram@mailinator.com', '$2y$10$hOC09jVkLkHWHeuA5gp80eousp4D8k6mfm.iqlm2uRXpnCvdHJWau', '2022-11-02 14:16:30'),
('matharasi@thulirsoft.com', '$2y$10$kdjzcznC5xgL1Jg885/bTOX6UmcqEnInQxm/ZI9xPxfRk1gdHmkoC', '2022-12-08 16:23:10'),
('aruntj@yahoo.com', '$2y$10$/vaWy5H/XSyxaRfeUFZOqew8GXUBLs82Y.YlDWH1n3rsH7WxLek9G', '2023-07-19 23:58:18'),
('mary@mailinator.com', '$2y$10$K3QcZzMHHsRV0QpN71Hen.TL.kzLPBxlU/sw4J480l7M5MKm8gNvS', '2022-10-27 20:08:38'),
('roselin@thulirsoft.com', '$2y$10$5ZzuAHSZaJW3htkA.pu9neih93yfFXePdVFPkcUPd11BaQxYnJbea', '2022-10-27 21:30:32'),
('hello@botsanddrones.co', '$2y$10$NPCmLMeOTJ01nPQ8bdXdl.Snl1m1LsiyewqhtpO9NtqfZn4sPjNea', '2022-11-01 17:11:07'),
('ram@mailinator.com', '$2y$10$hOC09jVkLkHWHeuA5gp80eousp4D8k6mfm.iqlm2uRXpnCvdHJWau', '2022-11-02 14:16:30'),
('matharasi@thulirsoft.com', '$2y$10$kdjzcznC5xgL1Jg885/bTOX6UmcqEnInQxm/ZI9xPxfRk1gdHmkoC', '2022-12-08 16:23:10'),
('aruntj@yahoo.com', '$2y$10$/vaWy5H/XSyxaRfeUFZOqew8GXUBLs82Y.YlDWH1n3rsH7WxLek9G', '2023-07-19 23:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` varchar(200) DEFAULT NULL,
  `subcategory_id` varchar(200) DEFAULT NULL,
  `visitors_count` int(100) DEFAULT NULL,
  `inner_category` varchar(255) DEFAULT NULL,
  `inner_subcategory` varchar(255) DEFAULT NULL,
  `uas_category` varchar(255) DEFAULT NULL,
  `robot_type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `state` int(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `price` bigint(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `propulsion` varchar(255) DEFAULT NULL,
  `aircraft_type` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `resolution` varchar(255) DEFAULT NULL,
  `video_resolution` varchar(255) DEFAULT NULL,
  `package_items` longtext DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `use_type` varchar(255) DEFAULT NULL,
  `application_used` varchar(255) DEFAULT NULL,
  `engine_type` varchar(255) DEFAULT NULL,
  `warranty_available` varchar(255) DEFAULT NULL,
  `finance` varchar(250) DEFAULT NULL,
  `compatible_with` varchar(250) DEFAULT NULL,
  `offers` varchar(250) DEFAULT NULL,
  `made_in` varchar(250) DEFAULT NULL,
  `product_brochure_link` varchar(250) DEFAULT NULL,
  `certification` varchar(255) DEFAULT NULL,
  `type_certified` varchar(255) DEFAULT NULL,
  `gst_included` varchar(255) NOT NULL DEFAULT 'N',
  `pricing_request` varchar(255) NOT NULL DEFAULT 'N',
  `delivery_lead_time` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(200) DEFAULT 'Y',
  `method` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `subcategory_id`, `visitors_count`, `inner_category`, `inner_subcategory`, `uas_category`, `robot_type`, `title`, `date`, `location`, `state`, `country`, `price`, `brand`, `model_name`, `propulsion`, `aircraft_type`, `description`, `resolution`, `video_resolution`, `package_items`, `manufacturer`, `use_type`, `application_used`, `engine_type`, `warranty_available`, `finance`, `compatible_with`, `offers`, `made_in`, `product_brochure_link`, `certification`, `type_certified`, `gst_included`, `pricing_request`, `delivery_lead_time`, `slug`, `status`, `method`, `created_at`, `updated_at`) VALUES
(2, 10, '1', '2', 57, NULL, NULL, 'na', NULL, 'Mavic', '2024-03-22', 'Ayr', 3, 'All', 250, 'DJI', 'Matrice 30T', 'Fuel', 'Fixed Wing', 'Test', NULL, NULL, 'Test', NULL, 'Agriculture Spraying', NULL, NULL, '2Y', 'Lease', NULL, '5 % off', '8', NULL, NULL, 'NA', 'Y', 'N', '3 days', 'Mavic-1527', 'Y', 'Contact Seller', '2024-01-05 13:16:23', '2024-04-03 13:50:38'),
(5, 10, '1', '1', 29, NULL, NULL, 'na', NULL, 'Mavic pro2', '2024-03-22', 'Newport', 2, 'All', 20000, 'DJI', 'Air 3', NULL, NULL, 'tes', NULL, NULL, 'uyg', NULL, 'Racing Drone', NULL, NULL, '1Y', 'Lease', NULL, NULL, '4', NULL, NULL, NULL, 'N', 'Y', 'Within 2  days', 'Mavic-pro2-5954', 'Y', 'Contact Seller', '2024-01-06 12:22:57', '2024-03-22 17:32:48'),
(6, 10, '2', '6', 26, NULL, 'Cameras', NULL, NULL, 'Test', '2024-03-22', 'Derby', 1, 'All', 5222, 'mavic', 'mavic', NULL, NULL, 'Test', NULL, NULL, 'tes', NULL, NULL, NULL, NULL, '1Y', 'Lease', '@', '2', '1', NULL, NULL, NULL, 'N', 'Y', '2', 'Test-6600', 'Y', 'Contact Seller', '2024-01-25 18:35:05', '2024-03-22 17:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `display_order` varchar(200) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `display_order`, `image`, `created_at`, `updated_at`) VALUES
(5, 2, '1', '1704435383commercial.jpg', '2024-01-05 13:16:23', '2024-01-05 13:16:23'),
(6, 2, '2', '1704435383commercial.jpg', '2024-01-05 13:16:23', '2024-01-05 13:16:23'),
(7, 2, '3', '1704435383commercial.jpg', '2024-01-05 13:16:23', '2024-01-05 13:16:23'),
(8, 2, '4', '1704435383commercial.jpg', '2024-01-05 13:16:23', '2024-01-05 13:16:23'),
(9, 3, '1', '1704436408accessories.jpg', '2024-01-05 13:33:28', '2024-01-05 13:33:28'),
(10, 3, '2', '1704436408accessories.jpg', '2024-01-05 13:33:28', '2024-01-05 13:33:28'),
(11, 3, '3', '1704436408accessories.jpg', '2024-01-05 13:33:28', '2024-01-05 13:33:28'),
(12, 3, '4', '1704436408accessories.jpg', '2024-01-05 13:33:28', '2024-01-05 13:33:28'),
(13, 4, '1', '1704436874robots.jpg', '2024-01-05 13:41:14', '2024-01-05 13:41:14'),
(14, 4, '2', '1704436874robots.jpg', '2024-01-05 13:41:14', '2024-01-05 13:41:14'),
(15, 4, '3', '1704436874robots.jpg', '2024-01-05 13:41:14', '2024-01-05 13:41:14'),
(16, 4, '4', '1704436874robots.jpg', '2024-01-05 13:41:14', '2024-01-05 13:41:14'),
(17, 5, '1', '1704518577consumer.jpg', '2024-01-06 12:22:57', '2024-01-06 12:22:57'),
(18, 5, '2', '1704518577commercial.jpg', '2024-01-06 12:22:57', '2024-01-06 12:22:57'),
(19, 5, '3', '1704518577consumer.jpg', '2024-01-06 12:22:57', '2024-01-06 12:22:57'),
(20, 5, '4', '1704795695consumer.jpg', '2024-01-09 17:21:35', '2024-01-09 17:21:35'),
(21, 5, '5', '1704795695consumer.jpg', '2024-01-09 17:21:35', '2024-01-09 17:21:35'),
(22, 6, '1', '1706182505accessories.jpg', '2024-01-25 18:35:05', '2024-01-25 18:35:05'),
(24, 8, '1', '1706944040consumer.jpg', '2024-02-03 14:07:20', '2024-02-03 14:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `product_packages`
--

CREATE TABLE `product_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `parameters` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_specifications`
--

CREATE TABLE `product_specifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `parameters` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_specifications`
--

INSERT INTO `product_specifications` (`id`, `product_id`, `parameters`, `value`, `created_at`, `updated_at`) VALUES
(5, 3, 'Test', '1', '2024-01-05 13:33:28', '2024-01-05 13:33:28'),
(6, 3, 'Test', '2', '2024-01-05 13:33:28', '2024-01-05 13:33:28'),
(7, 3, 'Test', '3', '2024-01-05 13:33:28', '2024-01-05 13:33:28'),
(8, 3, 'Test', '4', '2024-01-05 13:33:28', '2024-01-05 13:33:28'),
(9, 4, 'Test', '1', '2024-01-05 13:41:14', '2024-01-05 13:41:14'),
(10, 4, 'Test', '2', '2024-01-05 13:41:14', '2024-01-05 13:41:14'),
(11, 4, 'Test', '3', '2024-01-05 13:41:14', '2024-01-05 13:41:14'),
(12, 4, 'Test', '4', '2024-01-05 13:41:14', '2024-01-05 13:41:14'),
(13, 5, 'Test', '1', '2024-01-06 12:22:57', '2024-01-06 12:22:57'),
(14, 6, 'Test', '1', '2024-01-25 18:35:05', '2024-01-25 18:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `robot_type`
--

CREATE TABLE `robot_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `robot_type`
--

INSERT INTO `robot_type` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Active', NULL, NULL),
(2, 'Human Support', 'Active', NULL, NULL),
(3, 'Logistics', 'Active', NULL, NULL),
(4, 'Farm & Agriculture', 'Active', NULL, NULL),
(5, 'Healthcare', 'Active', NULL, NULL),
(6, 'Industrial', 'Active', NULL, NULL),
(7, 'Retail & Hospitality', 'Active', NULL, NULL),
(8, 'Security', 'Active', NULL, NULL),
(9, 'Multi-Role', 'Active', NULL, NULL),
(10, 'Testapp', 'Active', NULL, NULL),
(11, 'new', 'Active', NULL, NULL),
(12, 'Farming', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'England', 'Active', '2023-03-10 05:07:34', '2023-03-10 05:07:34'),
(2, 'Wales', 'Active', '2023-03-10 05:07:52', '2023-03-10 05:07:52'),
(3, 'Scotland', 'Active', '2023-03-10 05:08:34', '2023-03-10 05:08:34'),
(4, 'Nothern Ireland', 'Active', '2023-03-10 05:08:54', '2023-03-10 05:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subscription_type` enum('premium','standard','platinum') NOT NULL DEFAULT 'standard',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('active','inactive') DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `subscription_type`, `created_at`, `updated_at`, `status`) VALUES
(2, 10, 'standard', '2024-03-14 17:08:05', '2024-03-14 17:08:05', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `home_page_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `show_in_home` enum('Y','N') NOT NULL DEFAULT 'N',
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `home_page_name`, `image`, `banner_image`, `show_in_home`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Consumer Drones', 'Consumer UAV', 'WhatsApp Image 2023-02-04 at 7.05.34 PM-1789554143-02_06_2023_01_57_pm.jpeg', 'Image[5048]-786774836-08_01_2023_12_02_pm.jpeg', 'Y', 'Consumer-drones-9987', 'Active', '2022-09-21 18:57:04', '2023-08-01 19:02:24'),
(2, 1, 'Commercial Drones', 'Commerical UAV', 'WhatsApp Image 2023-02-04 at 7.05.34 PM (1)-1051701949-02_06_2023_01_58_pm.jpeg', 'Image[5050]-606214486-08_01_2023_12_02_pm.jpeg', 'Y', 'Commercial-drones-9222', 'Active', '2022-09-21 18:57:04', '2023-08-01 19:02:33'),
(3, 3, 'Consumer Use', NULL, 'con robo 1-1682209143-11_07_2022_01_03_pm.jpg', 'cons robo banner-748647221-11_07_2022_01_03_pm.webp', 'N', 'Consumer-robots-19987', 'Active', '2022-09-21 18:57:04', '2022-11-07 20:03:52'),
(4, 3, 'Commercial Use', NULL, 'robot 2-1311712866-11_07_2022_01_05_pm.jpg', 'com robo banner-2022360266-11_07_2022_01_05_pm.png', 'N', 'Commercial-Robots-98888', 'Active', '2022-09-21 18:57:04', '2022-11-07 20:05:07'),
(5, 2, 'Consumer Drones', NULL, 'con robo 1-1682209143-11_07_2022_01_03_pm.jpg', 'cons robo banner-748647221-11_07_2022_01_03_pm.webp', 'N', 'Consumer-accessories-drones-199287', 'Active', '2022-09-21 18:57:04', '2022-11-07 20:03:52'),
(6, 2, 'Commercial Drones', NULL, 'robot 2-1311712866-11_07_2022_01_05_pm.jpg', 'com robo banner-2022360266-11_07_2022_01_05_pm.png', 'N', 'Commercial-accessories-drones-199287', 'Active', '2022-09-21 18:57:04', '2022-11-07 20:05:07'),
(7, 2, 'Robots', NULL, 'robot 2-1311712866-11_07_2022_01_05_pm.jpg', 'com robo banner-2022360266-11_07_2022_01_05_pm.png', 'N', 'Commercial-robots-1992287', 'Active', '2022-09-21 18:57:04', '2022-11-07 20:05:07'),
(8, 2, 'Any', NULL, 'robot 2-1311712866-11_07_2022_01_05_pm.jpg', 'com robo banner-2022360266-11_07_2022_01_05_pm.png', 'N', 'Commercial-accessories-any-11221', 'Active', '2022-09-21 18:57:04', '2022-11-07 20:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `supporting_partners`
--

CREATE TABLE `supporting_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supporting_partners`
--

INSERT INTO `supporting_partners` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Supporting partners', 'b&d-1484999195-04_15_2024_06_08_am.png', 'Active', '2024-04-15 13:08:59', '2024-04-15 13:08:59'),
(2, 'Supporting partners2', 'b&d1-1655581168-04_15_2024_07_01_am.jpg', 'Active', '2024-04-15 14:01:53', '2024-04-15 14:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `registered_address` varchar(255) DEFAULT NULL,
  `address1` longtext DEFAULT NULL,
  `address2` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `registered_number` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `seller` varchar(200) DEFAULT NULL,
  `otp_verified_at` varchar(200) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` varchar(200) DEFAULT NULL,
  `is_deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile_no`, `email_verified_at`, `password`, `company_name`, `registered_address`, `address1`, `address2`, `city`, `state`, `pincode`, `country`, `registered_number`, `company_email`, `company_phone`, `otp`, `seller`, `otp_verified_at`, `remember_token`, `created_at`, `updated_at`, `is_deleted`, `is_deleted_at`, `status`) VALUES
(1, 'Arun Thomas', 'aruntj@yahoo.com', '9840035124', NULL, '$2y$10$ApRJ5f7Hux9hn4rHjFODoeFd2j/HaCJSJwAeC5y0H4C4cxwWN43tK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, 'PxDQvdUH23wtrgaDfJMRmjjSsErkoS3w28aj4UJNgOe3z5BtY0n4q6w67R3u', '2022-10-24 14:22:44', '2023-02-09 19:46:27', NULL, '0000-00-00 00:00:00', 'Active'),
(2, 'Bots & Drones', 'ai@botsanddrones.in', '9840035125', NULL, '$2y$10$n7and2gQ7SBD2f0JLe8dtO2WCu4JPoOfAZbCJJzYKRf.qHpR3pk66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-01-21 23:47:53', '2023-01-21 23:47:53', NULL, '0000-00-00 00:00:00', 'Active'),
(3, 'Bots and Drones', 'hello@botsanddrones.co', '9840080297', NULL, '$2y$10$7Lw57ctrABmL0DUrCulZiOdb4s901mnC5MUF9a5E.Y2rYwxVglkym', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-02-04 17:09:25', '2023-02-04 17:09:25', NULL, '0000-00-00 00:00:00', 'Active'),
(4, 'Bots and Drones Store', 'biz@botsanddrones.co', '9840080296', '2023-07-28 20:51:41', '$2y$10$7Lw57ctrABmL0DUrCulZiOdb4s901mnC5MUF9a5E.Y2rYwxVglkym', 'Bots and Drones Store', 'London, United Kingdom', NULL, NULL, NULL, NULL, NULL, NULL, '1223878', 'biz@botsanddrones.co', '7585212969', '913190', 'Y', '2023-07-10', NULL, '2023-02-06 15:13:18', '2023-07-15 17:17:02', 'R', '0000-00-00 00:00:00', 'Active'),
(5, 'Arun Thomas', 'hello@botsanddrones.uk', '+919840035125', NULL, '$2y$10$4yw4Jt6MDUxgOLvKKJC4XurPfuam62n5KyPtja63KkP5T2pGD09BO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '341349', 'N', '2023-07-19', NULL, '2023-06-29 03:18:07', '2023-07-20 00:08:25', 'R', '0000-00-00 00:00:00', 'Active'),
(6, 'Arun Thomas', 'thomas@botsanddrones.uk', '+44 7585 212969', '2023-07-28 20:51:41', '$2y$10$lBYzez.nSrOTsmj2g2HAVerCjJs85h1wm70j5n4kR5NHO4lo7RRF6', 'Bots & Drones UK Ltd', 'Unit 6, Dunholme Industrial Estate Honeyholes Lane Dunholme Lincoln LN2 3SU. UK.', NULL, NULL, NULL, NULL, NULL, NULL, 'Xxxxxx', 'thomas@botsanddrones.uk', '1673866315', '572449', 'Y', '2023-07-09', NULL, '2023-07-09 17:44:08', '2023-07-09 17:54:43', NULL, '0000-00-00 00:00:00', 'Active'),
(7, 'Paul', 'hello@botsanddrones.asia', NULL, NULL, '$2y$10$QjJLpNtmhHPrkjkYhd.aYelGx30eRbwYGCUWkERYvVK6OPu66EgjW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-07-10 18:09:50', '2023-07-10 18:09:50', NULL, '0000-00-00 00:00:00', 'Active'),
(8, 'Arun Thomas', 'aruntj@hotmail.com', NULL, NULL, '$2y$10$/L0GvDxa7HDU.LmdJWXHt.Qg.ClPoCnFz5q47DXjIhQNGrcpwg3J2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-07-12 16:35:25', '2023-07-12 16:35:25', NULL, '0000-00-00 00:00:00', 'Active'),
(10, 'Saranya', 'msd@mailinator.com', '+443456789821', '2024-01-03 10:44:25', '$2y$10$uD.1rknzKUuzBg26OTO6ju03cJcFds8cvWtmIchlOJcBzgUtmXXuC', 'MSD', NULL, '65,Velingston street', 'Ad2', 'London', 'England', 'LVMN 0KL', 'United Kingdom', '4335464523', 'msd@mailinator.com', '+44 6369057674', NULL, 'Y', NULL, NULL, '2024-01-03 05:09:34', '2024-02-02 17:14:31', 'N', '0000-00-00 00:00:00', 'Active'),
(11, 'Sivaranjani', 'siva@mailinator.com', '+916383614062', '2024-01-03 23:25:07', '$2y$10$cRqyVtCR19UfQ79zRHEAe.klDYv2/69J35z7W4US4RZuqMb/iw0Fi', 'abc', NULL, NULL, NULL, 'London', NULL, NULL, 'Engalnd', NULL, NULL, NULL, '775768', 'N', NULL, NULL, '2024-01-03 20:13:25', '2024-03-14 17:27:29', 'N', '0000-00-00 00:00:00', 'Active'),
(14, 'MSD', 'msmahi@mailinator.com', '+917826041579', '2024-01-04 12:34:51', '$2y$10$3rPWJBM3PQ6.1UucgohAS.0IuHV5UOWDJzX3DliF/ijlw7vwsWVAC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2024-01-04 12:33:05', '2024-01-04 12:34:51', 'N', '0000-00-00 00:00:00', 'Active'),
(16, 'Nivetha', 'nivetha@mailinator.com', '+916383614062', '2024-01-04 13:26:38', '$2y$10$gEwCa5VZYPYROVPX7Yl9.uUNYFsp7ntbTo63ieTgVHIoYMUg0kURa', 'abc', NULL, NULL, NULL, 'Tambaram/Chennai', NULL, NULL, 'India', NULL, NULL, NULL, '761446', 'N', NULL, NULL, '2024-01-04 13:25:05', '2024-01-05 14:12:31', 'N', '0000-00-00 00:00:00', 'Active'),
(24, 'Deepa', 'deepa@mailinator.com', '+916383614062', '2024-01-06 11:49:41', '$2y$10$cwu1eM60TRFv8jw78ap/nO3fAad0T4ih7N2MJE8CkAOkICgI62crO', 'abc', NULL, NULL, NULL, 'Tambaram/Chennai', NULL, NULL, 'India', NULL, NULL, NULL, '326206', 'N', NULL, NULL, '2024-01-06 11:37:04', '2024-03-15 18:49:36', 'N', '0000-00-00 00:00:00', 'Active'),
(33, 'Vijay', 'vijay@mailinator.com', ' +916383614062', '2024-01-06 11:49:41', '$2y$10$2OL/NJf94AKyG.vElD71C.F.s2ZU2hfj3QekNOMPUSns/pqa/MqR2', 'abc', NULL, NULL, NULL, 'Tambaram', NULL, NULL, 'India', NULL, NULL, NULL, '984015', NULL, NULL, NULL, '2024-01-09 19:23:18', '2024-02-02 16:37:43', 'N', '2024-01-09 12:23:18', 'Active'),
(34, 'Saranya@mailinator.com', 'thulirsoft@gmail.com', '+916383614062', '2024-01-09 19:32:00', '$2y$10$VYOV4.9TGJFik62f21Nyxe23Wqw2Q0KZ65gORPTGzFeVJg.lHCjDi', 'abc', NULL, NULL, NULL, 'Tambaram/Chennai', NULL, NULL, 'India', NULL, NULL, NULL, '984164', 'N', NULL, NULL, '2024-01-09 19:30:30', '2024-02-06 20:20:54', 'N', '2024-01-09 12:30:30', 'Active'),
(35, 'Banu', 'banu@mailinator.com', '+916383614062', NULL, '$2y$10$sGe3/pcptn7a1M1Ed.uuZOrmBEDyB/yM4P3G87NUaAjdFUlgOII5.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2024-02-14 12:01:13', '2024-02-14 12:01:13', 'N', '2024-02-14 05:01:13', 'Active'),
(36, 'Aarthi', 'aarthi@mailinator.com', '+916383614062', '2024-03-14 15:15:16', '$2y$10$J3iFTvfcn1yB6PbsTWfDi.6pI2mdLmS1iIMD6U1fPunNFqHrvb1Ke', 'abc', NULL, NULL, NULL, 'Chennai', NULL, NULL, 'Tamilnadu', NULL, NULL, NULL, '600986', 'N', NULL, NULL, '2024-03-14 15:13:25', '2024-04-09 12:51:45', 'N', '2024-03-14 08:13:25', 'Active'),
(37, 'veera', 'veeras@mailinator.com', '+916383614062', NULL, '$2y$10$aDuclngsthVmKf2Vo3XXUeHRkIVhiDf49VruMTirr4ciFTtxA3rNa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2024-03-14 17:30:28', '2024-03-14 17:30:28', 'N', '2024-03-14 10:30:28', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 16, 3, '2024-01-05 14:12:55', '2024-01-05 14:12:55'),
(2, 16, 2, '2024-01-05 14:13:02', '2024-01-05 14:13:02'),
(3, 10, 5, '2024-01-06 12:29:00', '2024-01-06 12:29:00'),
(4, 24, 4, '2024-01-09 16:48:31', '2024-01-09 16:48:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_type`
--
ALTER TABLE `equipment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_packages`
--
ALTER TABLE `product_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_specifications`
--
ALTER TABLE `product_specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `robot_type`
--
ALTER TABLE `robot_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supporting_partners`
--
ALTER TABLE `supporting_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `equipment_type`
--
ALTER TABLE `equipment_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_packages`
--
ALTER TABLE `product_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_specifications`
--
ALTER TABLE `product_specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `robot_type`
--
ALTER TABLE `robot_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supporting_partners`
--
ALTER TABLE `supporting_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
