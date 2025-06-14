-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2025 at 10:51 AM
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
-- Database: `bots_drones_ind`
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
(1, 'Bots-and-drones-india-banner-1606586807-08_11_2023_10_53_am.jpeg', 'Active', '2023-08-11 17:53:09', '2023-08-11 17:53:09'),
(2, 'Image[5111](2)-1385611254-08_07_2023_11_56_am.jpeg', 'Active', '2022-11-04 09:43:12', '2023-08-07 18:56:37');

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
(15, 'Aereo', 'commercial', 'Active', NULL, NULL),
(16, 'Aerial Iq', 'commercial', 'Active', NULL, NULL),
(17, 'Aeronica Advanced Technologies', 'commercial', 'Active', NULL, NULL),
(18, 'Asap Agritech', 'commercial', 'Active', NULL, NULL),
(19, 'Asteria Aerospace', 'commercial', 'Active', NULL, NULL),
(20, 'AutoMicroUAS', 'commercial', 'Active', NULL, NULL),
(21, 'Ayan Autonomous Systems', 'commercial', 'Active', NULL, NULL),
(22, 'CBAI Technologies', 'commercial', 'Active', NULL, NULL),
(23, 'CD Space', 'commercial', 'Active', NULL, NULL),
(24, 'D\'Aviators', 'commercial', 'Active', NULL, NULL),
(25, 'DTown Robotics', 'commercial', 'Active', NULL, NULL),
(26, 'Defy Aerospace', 'commercial', 'Active', NULL, NULL),
(27, 'Dhaksha Unmanned Systems', 'commercial', 'Active', NULL, NULL),
(28, 'Dronix Technologies', 'commercial', 'Active', NULL, NULL),
(29, 'Eagletronics', 'commercial', 'Active', NULL, NULL),
(30, 'Edall Systems', 'commercial', 'Active', NULL, NULL),
(31, 'Endure Air', 'commercial', 'Active', NULL, NULL),
(32, 'Fopple Technologies', 'commercial', 'Active', NULL, NULL),
(33, 'Garuda Aerospace', 'commercial', 'Active', NULL, NULL),
(34, 'Garudan Unmanned Systems', 'commercial', 'Active', NULL, NULL),
(35, 'General Aeronautics ', 'commercial', 'Active', NULL, NULL),
(36, 'Hubblefly Technologies', 'commercial', 'Active', NULL, NULL),
(37, 'ideaForge ', 'commercial', 'Active', NULL, NULL),
(38, 'Indrones ', 'commercial', 'Active', NULL, NULL),
(39, 'IoTechWorld Avigation', 'commercial', 'Active', NULL, NULL),
(40, 'Kadet Defence Systems', 'commercial', 'Active', NULL, NULL),
(41, 'Karman Drones', 'commercial', 'Active', NULL, NULL),
(42, 'Marut Drones', 'commercial', 'Active', NULL, NULL),
(43, 'Multiplex Drone', 'commercial', 'Active', NULL, NULL),
(44, 'Paras Aerospace', 'commercial', 'Active', NULL, NULL),
(45, 'Paramanu Aerospace', 'commercial', 'Active', NULL, NULL),
(46, 'Prime UAV', 'commercial', 'Active', NULL, NULL),
(47, 'Sagar Defence Engineering', 'commercial', 'Active', NULL, NULL),
(48, 'Skykrafts Aerospace', 'commercial', 'Active', NULL, NULL),
(49, 'Thanos Technologies', 'commercial', 'Active', NULL, NULL),
(50, 'Throttle Aerospace TAS', 'commercial', 'Active', NULL, NULL),
(51, 'Tsalla Aerospace', 'commercial', 'Active', NULL, NULL),
(52, 'UrbanMatrix Technologies', 'commercial', 'Active', NULL, NULL),
(53, 'VTOL Aviation', 'commercial', 'Active', NULL, NULL),
(54, 'Vecros Technologies', 'commercial', 'Active', NULL, NULL),
(55, 'Wow Go Green', 'commercial', 'Active', NULL, NULL),
(56, 'Defy Aerospace', 'consumer', 'Active', NULL, NULL),
(57, 'DJI', 'consumer', 'Active', NULL, NULL),
(58, 'Flotanomers', 'consumer', 'Active', NULL, NULL),
(59, 'IZI', 'consumer', 'Active', NULL, NULL),
(60, 'Zuppa Geo', 'consumer', 'Active', NULL, NULL);

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
(1, 'Drones', NULL, 'bd3-1035823525-04_15_2024_01_09_pm.jpg', 'bd3-422818157-04_15_2024_01_09_pm.jpg', 'Y', 'Used-Drones-9282', 'Active', '2022-10-10 14:53:08', '2024-04-15 20:09:11'),
(2, 'Accessories & Equipment', 'Accessories & Equipment', 'WhatsApp Image 2023-02-04 at 7.05.35 PM (1)-992891604-02_06_2023_01_58_pm.jpeg', 'Image[5052]-134326896-08_01_2023_11_37_am.jpeg', 'Y', 'used-Accessories-1181', 'Active', '2022-10-10 14:53:08', '2023-08-01 18:37:26'),
(3, 'Robots', 'Robots', 'WhatsApp Image 2023-02-04 at 7.05.35 PM-721862928-02_06_2023_01_58_pm.jpeg', 'Image[5051]-483440955-08_01_2023_11_39_am.jpeg', 'Y', 'used-Robots-4046', 'Active', '2022-10-10 14:53:08', '2023-08-01 18:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(3, '2', 'Alluri Sitharama Raju', 'Active', NULL, NULL),
(4, '2', 'Anakapalli', 'Active', NULL, NULL),
(5, '2', 'Ananthapuramu', 'Active', NULL, NULL),
(6, '2', 'Annamayya', 'Active', NULL, NULL),
(7, '2', 'Bapatla', 'Active', NULL, NULL),
(8, '2', 'Chittoor', 'Active', NULL, NULL),
(9, '2', 'Dr. B.R. Ambedkar Konaseema', 'Active', NULL, NULL),
(10, '2', 'East Godavari', 'Active', NULL, NULL),
(11, '2', 'Eluru', 'Active', NULL, NULL),
(12, '2', 'Guntur', 'Active', NULL, NULL),
(13, '2', 'Kakinada', 'Active', NULL, NULL),
(14, '2', 'Krishna', 'Active', NULL, NULL),
(15, '2', 'Kurnool', 'Active', NULL, NULL),
(16, '2', 'Nandyal', 'Active', NULL, NULL),
(17, '2', 'NTR', 'Active', NULL, NULL),
(18, '2', 'Palnadu', 'Active', NULL, NULL),
(19, '2', 'Parvathipuram Manyam', 'Active', NULL, NULL),
(20, '2', 'Prakasam', 'Active', NULL, NULL),
(21, '2', 'Srikakulam', 'Active', NULL, NULL),
(22, '2', 'Sri Potti Sriramulu Nellore', 'Active', NULL, NULL),
(23, '2', 'Sri Sathya Sai', 'Active', NULL, NULL),
(24, '2', 'Tirupati', 'Active', NULL, NULL),
(25, '2', 'Visakhapatnam', 'Active', NULL, NULL),
(26, '2', 'Vizianagaram', 'Active', NULL, NULL),
(27, '2', 'West Godavari', 'Active', NULL, NULL),
(28, '2', 'YSR', 'Active', NULL, NULL),
(29, '3', 'Anjaw', 'Active', NULL, NULL),
(30, '3', 'Changlang', 'Active', NULL, NULL),
(31, '3', 'East Kameng', 'Active', NULL, NULL),
(32, '3', 'East Siang', 'Active', NULL, NULL),
(33, '3', 'Itanagar capital complex', 'Active', NULL, NULL),
(34, '3', 'Kamle', 'Active', NULL, NULL),
(35, '3', 'Kra Daadi', 'Active', NULL, NULL),
(36, '3', 'Kurung Kumey', 'Active', NULL, NULL),
(37, '3', 'Lepa Rada', 'Active', NULL, NULL),
(38, '3', 'Lohit', 'Active', NULL, NULL),
(39, '3', 'Longding', 'Active', NULL, NULL),
(40, '3', 'Lower Dibang Valley', 'Active', NULL, NULL),
(41, '3', 'Lower Siang', 'Active', NULL, NULL),
(42, '3', 'Lower Subansiri', 'Active', NULL, NULL),
(43, '3', 'Namsai', 'Active', NULL, NULL),
(44, '3', 'Pakke-Kessang', 'Active', NULL, NULL),
(45, '3', 'Papum Pare', 'Active', NULL, NULL),
(46, '3', 'Shi Yomi', 'Active', NULL, NULL),
(47, '3', 'Siang', 'Active', NULL, NULL),
(48, '3', 'Tawang', 'Active', NULL, NULL),
(49, '3', 'Tirap', 'Active', NULL, NULL),
(50, '3', 'Upper Dibang Valley', 'Active', NULL, NULL),
(51, '3', 'Upper Siang', 'Active', NULL, NULL),
(52, '3', 'Upper Subansiri', 'Active', NULL, NULL),
(53, '3', 'West Kameng', 'Active', NULL, NULL),
(54, '3', 'West Siang', 'Active', NULL, NULL),
(55, '4', 'Bajali', 'Active', NULL, NULL),
(56, '4', 'Baksa', 'Active', NULL, NULL),
(57, '4', 'Barpeta', 'Active', NULL, NULL),
(58, '4', 'Biswanath', 'Active', NULL, NULL),
(59, '4', 'Bongaigaon', 'Active', NULL, NULL),
(60, '4', 'Cachar', 'Active', NULL, NULL),
(61, '4', 'Charaideo', 'Active', NULL, NULL),
(62, '4', 'Chirang', 'Active', NULL, NULL),
(63, '4', 'Darrang', 'Active', NULL, NULL),
(64, '4', 'Dhemaji', 'Active', NULL, NULL),
(65, '4', 'Dhubri', 'Active', NULL, NULL),
(66, '4', 'Dibrugarh', 'Active', NULL, NULL),
(67, '4', 'Dima Hasao', 'Active', NULL, NULL),
(68, '4', 'Goalpara', 'Active', NULL, NULL),
(69, '4', 'Golaghat', 'Active', NULL, NULL),
(70, '4', 'Hailakandi', 'Active', NULL, NULL),
(71, '4', 'Hojai', 'Active', NULL, NULL),
(72, '4', 'Jorhat', 'Active', NULL, NULL),
(73, '4', 'Kamrup', 'Active', NULL, NULL),
(74, '4', 'Kamrup Metropolitan', 'Active', NULL, NULL),
(75, '4', 'Karbi Anglong', 'Active', NULL, NULL),
(76, '4', 'Karimganj', 'Active', NULL, NULL),
(77, '4', 'Kokrajhar', 'Active', NULL, NULL),
(78, '4', 'Lakhimpur', 'Active', NULL, NULL),
(79, '4', 'Majuli', 'Active', NULL, NULL),
(80, '4', 'Morigaon', 'Active', NULL, NULL),
(81, '4', 'Nagaon', 'Active', NULL, NULL),
(82, '4', 'Nalbari', 'Active', NULL, NULL),
(83, '4', 'Sivasagar', 'Active', NULL, NULL),
(84, '4', 'South Salmara Mankachar', 'Active', NULL, NULL),
(85, '4', 'Sonitpur', 'Active', NULL, NULL),
(86, '4', 'Tamulpur', 'Active', NULL, NULL),
(87, '4', 'Tinsukia', 'Active', NULL, NULL),
(88, '4', 'Udalguri', 'Active', NULL, NULL),
(89, '4', 'West Karbi Anglong', 'Active', NULL, NULL),
(90, '5', 'Araria', 'Active', NULL, NULL),
(91, '5', 'Arwal', 'Active', NULL, NULL),
(92, '5', 'Aurangabad', 'Active', NULL, NULL),
(93, '5', 'Banka', 'Active', NULL, NULL),
(94, '5', 'Begusarai', 'Active', NULL, NULL),
(95, '5', 'Bhagalpur', 'Active', NULL, NULL),
(96, '5', 'Bhojpur', 'Active', NULL, NULL),
(97, '5', 'Buxar', 'Active', NULL, NULL),
(98, '5', 'Darbhanga', 'Active', NULL, NULL),
(99, '5', 'East Champaran', 'Active', NULL, NULL),
(100, '5', 'Gaya', 'Active', NULL, NULL),
(101, '5', 'Gopalganj', 'Active', NULL, NULL),
(102, '5', 'Jamui', 'Active', NULL, NULL),
(103, '5', 'Jehanabad', 'Active', NULL, NULL),
(104, '5', 'Kaimur', 'Active', NULL, NULL),
(105, '5', 'Katihar', 'Active', NULL, NULL),
(106, '5', 'Khagaria', 'Active', NULL, NULL),
(107, '5', 'Kishanganj', 'Active', NULL, NULL),
(108, '5', 'Lakhisarai', 'Active', NULL, NULL),
(109, '5', 'Madhepura', 'Active', NULL, NULL),
(110, '5', 'Madhubani', 'Active', NULL, NULL),
(111, '5', 'Munger', 'Active', NULL, NULL),
(112, '5', 'Muzaffarpur', 'Active', NULL, NULL),
(113, '5', 'Nalanda', 'Active', NULL, NULL),
(114, '5', 'Nawada', 'Active', NULL, NULL),
(115, '5', 'Patna', 'Active', NULL, NULL),
(116, '5', 'Purnia', 'Active', NULL, NULL),
(117, '5', 'Rohtas', 'Active', NULL, NULL),
(118, '5', 'Saharsa', 'Active', NULL, NULL),
(119, '5', 'Samastipur', 'Active', NULL, NULL),
(120, '5', 'Saran', 'Active', NULL, NULL),
(121, '5', 'Sheikhpura', 'Active', NULL, NULL),
(122, '5', 'Sheohar', 'Active', NULL, NULL),
(123, '5', 'Sitamarhi', 'Active', NULL, NULL),
(124, '5', 'Siwan', 'Active', NULL, NULL),
(125, '5', 'Supaul', 'Active', NULL, NULL),
(126, '5', 'Vaishali', 'Active', NULL, NULL),
(127, '5', 'West Champaran', 'Active', NULL, NULL),
(128, '6', 'Balod', 'Active', NULL, NULL),
(129, '6', 'Baloda Bazar', 'Active', NULL, NULL),
(130, '6', 'Balrampur-Ramanujganj', 'Active', NULL, NULL),
(131, '6', 'Bastar', 'Active', NULL, NULL),
(132, '6', 'Bemetara', 'Active', NULL, NULL),
(133, '6', 'Bijapur', 'Active', NULL, NULL),
(134, '6', 'Bilaspur', 'Active', NULL, NULL),
(135, '6', 'Dantewada', 'Active', NULL, NULL),
(136, '6', 'Dhamtari', 'Active', NULL, NULL),
(137, '6', 'Durg', 'Active', NULL, NULL),
(138, '6', 'Gariaband', 'Active', NULL, NULL),
(139, '6', 'Gaurela-Pendra-Marwahi', 'Active', NULL, NULL),
(140, '6', 'Janjgir-Champa', 'Active', NULL, NULL),
(141, '6', 'Jashpur', 'Active', NULL, NULL),
(142, '6', 'Kabirdham', 'Active', NULL, NULL),
(143, '6', 'Kanker', 'Active', NULL, NULL),
(144, '6', 'Khairagarh-Chhuikhadan-Gandai', 'Active', NULL, NULL),
(145, '6', 'Kondagaon', 'Active', NULL, NULL),
(146, '6', 'Korba', 'Active', NULL, NULL),
(147, '6', 'Korea', 'Active', NULL, NULL),
(148, '6', 'Mahasamund', 'Active', NULL, NULL),
(149, '6', 'Manendragarh-Chirmiri-Bharatpur', 'Active', NULL, NULL),
(150, '6', 'Mohla-Manpur-Chowki', 'Active', NULL, NULL),
(151, '6', 'Mungeli', 'Active', NULL, NULL),
(152, '6', 'Narayanpur', 'Active', NULL, NULL),
(153, '6', 'Raigarh', 'Active', NULL, NULL),
(154, '6', 'Raipur', 'Active', NULL, NULL),
(155, '6', 'Rajnandgaon', 'Active', NULL, NULL),
(156, '6', 'Sarangarh-Bilaigarh', 'Active', NULL, NULL),
(157, '6', 'Shakti', 'Active', NULL, NULL),
(158, '6', 'Sukma', 'Active', NULL, NULL),
(159, '6', 'Surajpur', 'Active', NULL, NULL),
(160, '6', 'Surguja', 'Active', NULL, NULL),
(161, '7', 'North Goa', 'Active', NULL, NULL),
(162, '7', 'South Goa', 'Active', NULL, NULL),
(163, '8', 'Ahmedabad', 'Active', NULL, NULL),
(164, '8', 'Amreli', 'Active', NULL, NULL),
(165, '8', 'Anand', 'Active', NULL, NULL),
(166, '8', 'Aravalli', 'Active', NULL, NULL),
(167, '8', 'Banaskantha', 'Active', NULL, NULL),
(168, '8', 'Bharuch', 'Active', NULL, NULL),
(169, '8', 'Bhavnagar', 'Active', NULL, NULL),
(170, '8', 'Botad', 'Active', NULL, NULL),
(171, '8', 'Chhota Udaipur', 'Active', NULL, NULL),
(172, '8', 'Dahod', 'Active', NULL, NULL),
(173, '8', 'Dang', 'Active', NULL, NULL),
(174, '8', 'Devbhumi Dwarka', 'Active', NULL, NULL),
(175, '8', 'Gandhinagar', 'Active', NULL, NULL),
(176, '8', 'Gir Somnath', 'Active', NULL, NULL),
(177, '8', 'Jamnagar', 'Active', NULL, NULL),
(178, '8', 'Junagadh', 'Active', NULL, NULL),
(179, '8', 'Kheda', 'Active', NULL, NULL),
(180, '8', 'Kutch', 'Active', NULL, NULL),
(181, '8', 'Mahisagar', 'Active', NULL, NULL),
(182, '8', 'Mehsana', 'Active', NULL, NULL),
(183, '8', 'Morbi', 'Active', NULL, NULL),
(184, '8', 'Narmada', 'Active', NULL, NULL),
(185, '8', 'Navsari', 'Active', NULL, NULL),
(186, '8', 'Panchmahal', 'Active', NULL, NULL),
(187, '8', 'Patan', 'Active', NULL, NULL),
(188, '8', 'Porbandar', 'Active', NULL, NULL),
(189, '8', 'Rajkot', 'Active', NULL, NULL),
(190, '8', 'Sabarkantha', 'Active', NULL, NULL),
(191, '8', 'Surat', 'Active', NULL, NULL),
(192, '8', 'Surendranagar', 'Active', NULL, NULL),
(193, '8', 'Tapi', 'Active', NULL, NULL),
(194, '8', 'Vadodara', 'Active', NULL, NULL),
(195, '8', 'Valsad', 'Active', NULL, NULL),
(196, '9', 'Ambala', 'Active', NULL, NULL),
(197, '9', 'Bhiwani', 'Active', NULL, NULL),
(198, '9', 'Charkhi Dadri', 'Active', NULL, NULL),
(199, '9', 'Faridabad', 'Active', NULL, NULL),
(200, '9', 'Fatehabad', 'Active', NULL, NULL),
(201, '9', 'Gurugram', 'Active', NULL, NULL),
(202, '9', 'Hisar', 'Active', NULL, NULL),
(203, '9', 'Jhajjar', 'Active', NULL, NULL),
(204, '9', 'Jind', 'Active', NULL, NULL),
(205, '9', 'Kaithal', 'Active', NULL, NULL),
(206, '9', 'Karnal', 'Active', NULL, NULL),
(207, '9', 'Kurukshetra', 'Active', NULL, NULL),
(208, '9', 'Mahendragarh', 'Active', NULL, NULL),
(209, '9', 'Nuh', 'Active', NULL, NULL),
(210, '9', 'Palwal', 'Active', NULL, NULL),
(211, '9', 'Panchkula', 'Active', NULL, NULL),
(212, '9', 'Panipat', 'Active', NULL, NULL),
(213, '9', 'Rewari', 'Active', NULL, NULL),
(214, '9', 'Rohtak', 'Active', NULL, NULL),
(215, '9', 'Sirsa', 'Active', NULL, NULL),
(216, '9', 'Sonipat', 'Active', NULL, NULL),
(217, '9', 'Yamunanagar', 'Active', NULL, NULL),
(218, '10', 'Bilaspur', 'Active', NULL, NULL),
(219, '10', 'Chamba', 'Active', NULL, NULL),
(220, '10', 'Hamirpur', 'Active', NULL, NULL),
(221, '10', 'Kangra', 'Active', NULL, NULL),
(222, '10', 'Kinnaur', 'Active', NULL, NULL),
(223, '10', 'Kullu', 'Active', NULL, NULL),
(224, '10', 'Lahaul and Spiti', 'Active', NULL, NULL),
(225, '10', 'Mandi', 'Active', NULL, NULL),
(226, '10', 'Shimla', 'Active', NULL, NULL),
(227, '10', 'Sirmaur', 'Active', NULL, NULL),
(228, '10', 'Solan', 'Active', NULL, NULL),
(229, '10', 'Una', 'Active', NULL, NULL),
(230, '11', 'Bokaro', 'Active', NULL, NULL),
(231, '11', 'Chatra', 'Active', NULL, NULL),
(232, '11', 'Deoghar', 'Active', NULL, NULL),
(233, '11', 'Dhanbad', 'Active', NULL, NULL),
(234, '11', 'Dumka', 'Active', NULL, NULL),
(235, '11', 'East Singhbhum', 'Active', NULL, NULL),
(236, '11', 'Garhwa', 'Active', NULL, NULL),
(237, '11', 'Giridih', 'Active', NULL, NULL),
(238, '11', 'Godda', 'Active', NULL, NULL),
(239, '11', 'Gumla', 'Active', NULL, NULL),
(240, '11', 'Hazaribag', 'Active', NULL, NULL),
(241, '11', 'Jamtara', 'Active', NULL, NULL),
(242, '11', 'Khunti', 'Active', NULL, NULL),
(243, '11', 'Koderma', 'Active', NULL, NULL),
(244, '11', 'Latehar', 'Active', NULL, NULL),
(245, '11', 'Lohardaga', 'Active', NULL, NULL),
(246, '11', 'Pakur', 'Active', NULL, NULL),
(247, '11', 'Palamu', 'Active', NULL, NULL),
(248, '11', 'Ramgarh', 'Active', NULL, NULL),
(249, '11', 'Ranchi', 'Active', NULL, NULL),
(250, '11', 'Sahibganj', 'Active', NULL, NULL),
(251, '11', 'Seraikela-Kharsawan', 'Active', NULL, NULL),
(252, '11', 'Simdega', 'Active', NULL, NULL),
(253, '11', 'West Singhbhum', 'Active', NULL, NULL),
(254, '12', 'Bagalakote', 'Active', NULL, NULL),
(255, '12', 'Ballari', 'Active', NULL, NULL),
(256, '12', 'Belagavi', 'Active', NULL, NULL),
(259, '12', 'Bidar', 'Active', NULL, NULL),
(260, '12', 'Chamarajanagara', 'Active', NULL, NULL),
(261, '12', 'Chikkaballapura', 'Active', NULL, NULL),
(262, '12', 'Chikkamagaluru', 'Active', NULL, NULL),
(263, '12', 'Chitradurga', 'Active', NULL, NULL),
(264, '12', 'Dakshina Kannada', 'Active', NULL, NULL),
(265, '12', 'Davanagere', 'Active', NULL, NULL),
(266, '12', 'Dharwada', 'Active', NULL, NULL),
(267, '12', 'Gadaga', 'Active', NULL, NULL),
(268, '12', 'Kalaburagi', 'Active', NULL, NULL),
(269, '12', 'Hassan', 'Active', NULL, NULL),
(270, '12', 'Haveri', 'Active', NULL, NULL),
(271, '12', 'Kodagu', 'Active', NULL, NULL),
(272, '12', 'Kolar', 'Active', NULL, NULL),
(273, '12', 'Koppala', 'Active', NULL, NULL),
(274, '12', 'Mandya', 'Active', NULL, NULL),
(275, '12', 'Mysuru', 'Active', NULL, NULL),
(276, '12', 'Raichuru', 'Active', NULL, NULL),
(277, '12', 'Ramanagara', 'Active', NULL, NULL),
(278, '12', 'Shivamogga', 'Active', NULL, NULL),
(279, '12', 'Tumakuru', 'Active', NULL, NULL),
(280, '12', 'Udupi', 'Active', NULL, NULL),
(281, '12', 'Uttara Kannada', 'Active', NULL, NULL),
(282, '12', 'Vijayanagara', 'Active', NULL, NULL),
(283, '12', 'Vijayapura', 'Active', NULL, NULL),
(284, '12', 'Yadgiri', 'Active', NULL, NULL),
(285, '13', 'Alappuzha', 'Active', NULL, NULL),
(286, '13', 'Ernakulam', 'Active', NULL, NULL),
(287, '13', 'Idukki', 'Active', NULL, NULL),
(288, '13', 'Kannur', 'Active', NULL, NULL),
(289, '13', 'Kasaragod', 'Active', NULL, NULL),
(290, '13', 'Kollam', 'Active', NULL, NULL),
(291, '13', 'Kottayam', 'Active', NULL, NULL),
(292, '13', 'Kozhikode', 'Active', NULL, NULL),
(293, '13', 'Malappuram', 'Active', NULL, NULL),
(294, '13', 'Palakkad', 'Active', NULL, NULL),
(295, '13', 'Pathanamthitta', 'Active', NULL, NULL),
(296, '13', 'Thrissur', 'Active', NULL, NULL),
(297, '13', 'Thiruvananthapuram', 'Active', NULL, NULL),
(298, '13', 'Wayanad', 'Active', NULL, NULL),
(299, '14', 'Agar Malwa', 'Active', NULL, NULL),
(300, '14', 'Alirajpur', 'Active', NULL, NULL),
(301, '14', 'Anuppur', 'Active', NULL, NULL),
(302, '14', 'Ashoknagar', 'Active', NULL, NULL),
(303, '14', 'Balaghat', 'Active', NULL, NULL),
(304, '14', 'Barwani', 'Active', NULL, NULL),
(305, '14', 'Betul', 'Active', NULL, NULL),
(306, '14', 'Bhind', 'Active', NULL, NULL),
(307, '14', 'Bhopal', 'Active', NULL, NULL),
(308, '14', 'Burhanpur', 'Active', NULL, NULL),
(309, '14', 'Chhatarpur', 'Active', NULL, NULL),
(310, '14', 'Chhindwara', 'Active', NULL, NULL),
(311, '14', 'Damoh', 'Active', NULL, NULL),
(312, '14', 'Datia', 'Active', NULL, NULL),
(313, '14', 'Dewas', 'Active', NULL, NULL),
(314, '14', 'Dhar', 'Active', NULL, NULL),
(315, '14', 'Dindori', 'Active', NULL, NULL),
(316, '14', 'Guna', 'Active', NULL, NULL),
(317, '14', 'Gwalior', 'Active', NULL, NULL),
(318, '14', 'Harda', 'Active', NULL, NULL),
(319, '14', 'Hoshangabad', 'Active', NULL, NULL),
(320, '14', 'Indore', 'Active', NULL, NULL),
(321, '14', 'Jabalpur', 'Active', NULL, NULL),
(322, '14', 'Jhabua', 'Active', NULL, NULL),
(323, '14', 'Katni', 'Active', NULL, NULL),
(324, '14', 'Khandwa (East Nimar)', 'Active', NULL, NULL),
(325, '14', 'Khargone (West Nimar)', 'Active', NULL, NULL),
(326, '14', 'Mandla', 'Active', NULL, NULL),
(327, '14', 'Mandsaur', 'Active', NULL, NULL),
(328, '14', 'Morena', 'Active', NULL, NULL),
(329, '14', 'Narsinghpur', 'Active', NULL, NULL),
(330, '14', 'Neemuch', 'Active', NULL, NULL),
(331, '14', 'Niwari', 'Active', NULL, NULL),
(332, '14', 'Panna', 'Active', NULL, NULL),
(333, '14', 'Raisen', 'Active', NULL, NULL),
(334, '14', 'Rajgarh', 'Active', NULL, NULL),
(335, '14', 'Ratlam', 'Active', NULL, NULL),
(336, '14', 'Rewa', 'Active', NULL, NULL),
(337, '14', 'Sagar', 'Active', NULL, NULL),
(338, '14', 'Satna', 'Active', NULL, NULL),
(339, '14', 'Sehore', 'Active', NULL, NULL),
(340, '14', 'Seoni', 'Active', NULL, NULL),
(341, '14', 'Shahdol', 'Active', NULL, NULL),
(342, '14', 'Shajapur', 'Active', NULL, NULL),
(343, '14', 'Sheopur', 'Active', NULL, NULL),
(344, '14', 'Shivpuri', 'Active', NULL, NULL),
(345, '14', 'Sidhi', 'Active', NULL, NULL),
(346, '14', 'Singrauli', 'Active', NULL, NULL),
(347, '14', 'Tikamgarh', 'Active', NULL, NULL),
(348, '14', 'Ujjain', 'Active', NULL, NULL),
(349, '14', 'Umaria', 'Active', NULL, NULL),
(350, '14', 'Vidisha', 'Active', NULL, NULL),
(351, '15', 'Ahmednagar', 'Active', NULL, NULL),
(352, '15', 'Akola', 'Active', NULL, NULL),
(353, '15', 'Amravati', 'Active', NULL, NULL),
(354, '15', 'Beed', 'Active', NULL, NULL),
(355, '15', 'Bhandara', 'Active', NULL, NULL),
(356, '15', 'Buldhana', 'Active', NULL, NULL),
(357, '15', 'Chandrapur', 'Active', NULL, NULL),
(358, '15', 'Dharashiv', 'Active', NULL, NULL),
(359, '15', 'Dhule', 'Active', NULL, NULL),
(360, '15', 'Gadchiroli', 'Active', NULL, NULL),
(361, '15', 'Gondia', 'Active', NULL, NULL),
(362, '15', 'Hingoli', 'Active', NULL, NULL),
(363, '15', 'Jalgaon', 'Active', NULL, NULL),
(364, '15', 'Jalna', 'Active', NULL, NULL),
(365, '15', 'Kolhapur', 'Active', NULL, NULL),
(366, '15', 'Latur', 'Active', NULL, NULL),
(367, '15', 'Mumbai', 'Active', NULL, NULL),
(368, '15', 'Mumbai Suburban', 'Active', NULL, NULL),
(369, '15', 'Nanded', 'Active', NULL, NULL),
(370, '15', 'Nandurbar', 'Active', NULL, NULL),
(371, '15', 'Nagpur', 'Active', NULL, NULL),
(372, '15', 'Nashik', 'Active', NULL, NULL),
(373, '15', 'Palghar', 'Active', NULL, NULL),
(374, '15', 'Parbhani', 'Active', NULL, NULL),
(375, '15', 'Pune', 'Active', NULL, NULL),
(376, '15', 'Raigad', 'Active', NULL, NULL),
(377, '15', 'Ratnagiri', 'Active', NULL, NULL),
(378, '15', 'Sambhajinagar', 'Active', NULL, NULL),
(379, '15', 'Sangli', 'Active', NULL, NULL),
(380, '15', 'Satara', 'Active', NULL, NULL),
(381, '15', 'Sindhudurg', 'Active', NULL, NULL),
(382, '15', 'Solapur', 'Active', NULL, NULL),
(383, '15', 'Thane', 'Active', NULL, NULL),
(384, '15', 'Wardha', 'Active', NULL, NULL),
(385, '15', 'Washim', 'Active', NULL, NULL),
(386, '15', 'Yavatmal', 'Active', NULL, NULL),
(387, '16', 'Bishnupur', 'Active', NULL, NULL),
(388, '16', 'Chandel', 'Active', NULL, NULL),
(389, '16', 'Churachandpur', 'Active', NULL, NULL),
(390, '16', 'Imphal East', 'Active', NULL, NULL),
(391, '16', 'Imphal West', 'Active', NULL, NULL),
(392, '16', 'Jiribam', 'Active', NULL, NULL),
(393, '16', 'Kakching', 'Active', NULL, NULL),
(394, '16', 'Kamjong', 'Active', NULL, NULL),
(395, '16', 'Kangpokpi', 'Active', NULL, NULL),
(396, '16', 'Noney', 'Active', NULL, NULL),
(397, '16', 'Pherzawl', 'Active', NULL, NULL),
(398, '16', 'Senapati', 'Active', NULL, NULL),
(399, '16', 'Tamenglong', 'Active', NULL, NULL),
(400, '16', 'Tengnoupal', 'Active', NULL, NULL),
(401, '16', 'Thoubal', 'Active', NULL, NULL),
(402, '16', 'Ukhrul', 'Active', NULL, NULL),
(403, '17', 'East Garo Hills', 'Active', NULL, NULL),
(404, '17', 'East Khasi Hills', 'Active', NULL, NULL),
(405, '17', 'East Jaintia Hills', 'Active', NULL, NULL),
(406, '17', 'Eastern West Khasi Hills', 'Active', NULL, NULL),
(407, '17', 'North Garo Hills', 'Active', NULL, NULL),
(408, '17', 'Ri Bhoi', 'Active', NULL, NULL),
(409, '17', 'South Garo Hills', 'Active', NULL, NULL),
(410, '17', 'South West Garo Hills', 'Active', NULL, NULL),
(411, '17', 'South West Khasi Hills', 'Active', NULL, NULL),
(412, '17', 'West Garo Hills', 'Active', NULL, NULL),
(413, '17', 'West Jaintia Hills', 'Active', NULL, NULL),
(414, '17', 'West Khasi Hills', 'Active', NULL, NULL),
(415, '18', 'Aizawl', 'Active', NULL, NULL),
(416, '18', 'Champhai', 'Active', NULL, NULL),
(417, '18', 'Hnahthial', 'Active', NULL, NULL),
(418, '18', 'Khawzawl', 'Active', NULL, NULL),
(419, '18', 'Kolasib', 'Active', NULL, NULL),
(420, '18', 'Lawngtlai', 'Active', NULL, NULL),
(421, '18', 'Lunglei', 'Active', NULL, NULL),
(422, '18', 'Mamit', 'Active', NULL, NULL),
(423, '18', 'Saiha', 'Active', NULL, NULL),
(424, '18', 'Saitual', 'Active', NULL, NULL),
(425, '18', 'Serchhip', 'Active', NULL, NULL),
(426, '19', 'Chümoukedima', 'Active', NULL, NULL),
(427, '19', 'Dimapur', 'Active', NULL, NULL),
(428, '19', 'Kiphire', 'Active', NULL, NULL),
(429, '19', 'Kohima', 'Active', NULL, NULL),
(430, '19', 'Longleng', 'Active', NULL, NULL),
(431, '19', 'Mokokchung', 'Active', NULL, NULL),
(432, '19', 'Mon', 'Active', NULL, NULL),
(433, '19', 'Niuland', 'Active', NULL, NULL),
(434, '19', 'Noklak', 'Active', NULL, NULL),
(435, '19', 'Peren', 'Active', NULL, NULL),
(436, '19', 'Phek', 'Active', NULL, NULL),
(437, '19', 'Shamator', 'Active', NULL, NULL),
(438, '19', 'Tseminyü', 'Active', NULL, NULL),
(439, '19', 'Tuensang', 'Active', NULL, NULL),
(440, '19', 'Wokha', 'Active', NULL, NULL),
(441, '19', 'Zunheboto', 'Active', NULL, NULL),
(442, '20', 'Angul', 'Active', NULL, NULL),
(443, '20', 'Boudh (Bauda)', 'Active', NULL, NULL),
(444, '20', 'Bhadrak', 'Active', NULL, NULL),
(445, '20', 'Balangir', 'Active', NULL, NULL),
(446, '20', 'Bargarh (Baragarh)', 'Active', NULL, NULL),
(447, '20', 'Balasore', 'Active', NULL, NULL),
(448, '20', 'Cuttack', 'Active', NULL, NULL),
(449, '20', 'Debagarh (Deogarh)', 'Active', NULL, NULL),
(450, '20', 'Dhenkanal', 'Active', NULL, NULL),
(451, '20', 'Ganjam', 'Active', NULL, NULL),
(452, '20', 'Gajapati', 'Active', NULL, NULL),
(453, '20', 'Jharsuguda', 'Active', NULL, NULL),
(454, '20', 'Jajpur', 'Active', NULL, NULL),
(455, '20', 'Jagatsinghpur', 'Active', NULL, NULL),
(456, '20', 'Khordha', 'Active', NULL, NULL),
(457, '20', 'Kendujhar', 'Active', NULL, NULL),
(458, '20', 'Kalahandi', 'Active', NULL, NULL),
(459, '20', 'Kandhamal', 'Active', NULL, NULL),
(460, '20', 'Koraput', 'Active', NULL, NULL),
(461, '20', 'Kendrapara', 'Active', NULL, NULL),
(462, '20', 'Malkangiri', 'Active', NULL, NULL),
(463, '20', 'Mayurbhanj', 'Active', NULL, NULL),
(464, '20', 'Nabarangpur', 'Active', NULL, NULL),
(465, '20', 'Nuapada', 'Active', NULL, NULL),
(466, '20', 'Nayagarh', 'Active', NULL, NULL),
(467, '20', 'Puri', 'Active', NULL, NULL),
(468, '20', 'Rayagada', 'Active', NULL, NULL),
(469, '20', 'Sambalpur', 'Active', NULL, NULL),
(470, '20', 'Subarnapur (Sonepur)', 'Active', NULL, NULL),
(471, '20', 'Sundargarh', 'Active', NULL, NULL),
(472, '21', 'Amritsar', 'Active', NULL, NULL),
(473, '21', 'Barnala', 'Active', NULL, NULL),
(474, '21', 'Bathinda', 'Active', NULL, NULL),
(475, '21', 'Firozpur', 'Active', NULL, NULL),
(476, '21', 'Faridkot', 'Active', NULL, NULL),
(477, '21', 'Fatehgarh Sahib', 'Active', NULL, NULL),
(478, '21', 'Fazilka', 'Active', NULL, NULL),
(479, '21', 'Gurdaspur', 'Active', NULL, NULL),
(480, '21', 'Hoshiarpur', 'Active', NULL, NULL),
(481, '21', 'Jalandhar', 'Active', NULL, NULL),
(482, '21', 'Kapurthala', 'Active', NULL, NULL),
(483, '21', 'Ludhiana', 'Active', NULL, NULL),
(484, '21', 'Malerkotla', 'Active', NULL, NULL),
(485, '21', 'Mansa', 'Active', NULL, NULL),
(486, '21', 'Moga', 'Active', NULL, NULL),
(487, '21', 'Sri Muktsar Sahib', 'Active', NULL, NULL),
(488, '21', 'Pathankot', 'Active', NULL, NULL),
(489, '21', 'Patiala', 'Active', NULL, NULL),
(490, '21', 'Rupnagar', 'Active', NULL, NULL),
(491, '21', 'Sahibzada Ajit Singh Nagar', 'Active', NULL, NULL),
(492, '21', 'Sangrur', 'Active', NULL, NULL),
(493, '21', 'Shahid Bhagat Singh Nagar', 'Active', NULL, NULL),
(494, '21', 'Tarn Taran', 'Active', NULL, NULL),
(495, '22', 'Ajmer', 'Active', NULL, NULL),
(496, '22', 'Alwar', 'Active', NULL, NULL),
(497, '22', 'Bikaner', 'Active', NULL, NULL),
(498, '22', 'Barmer', 'Active', NULL, NULL),
(499, '22', 'Banswara', 'Active', NULL, NULL),
(500, '22', 'Bharatpur', 'Active', NULL, NULL),
(501, '22', 'Baran', 'Active', NULL, NULL),
(502, '22', 'Bundi', 'Active', NULL, NULL),
(503, '22', 'Bhilwara', 'Active', NULL, NULL),
(504, '22', 'Churu', 'Active', NULL, NULL),
(505, '22', 'Chittorgarh', 'Active', NULL, NULL),
(506, '22', 'Dausa', 'Active', NULL, NULL),
(507, '22', 'Dholpur', 'Active', NULL, NULL),
(508, '22', 'Dungarpur', 'Active', NULL, NULL),
(509, '22', 'Sri Ganganagar', 'Active', NULL, NULL),
(510, '22', 'Hanumangarh', 'Active', NULL, NULL),
(511, '22', 'Jhunjhunu', 'Active', NULL, NULL),
(512, '22', 'Jalore', 'Active', NULL, NULL),
(513, '22', 'Jodhpur', 'Active', NULL, NULL),
(514, '22', 'Jaipur', 'Active', NULL, NULL),
(515, '22', 'Jaisalmer', 'Active', NULL, NULL),
(516, '22', 'Jhalawar', 'Active', NULL, NULL),
(517, '22', 'Karauli', 'Active', NULL, NULL),
(518, '22', 'Kota', 'Active', NULL, NULL),
(519, '22', 'Nagaur', 'Active', NULL, NULL),
(520, '22', 'Pali', 'Active', NULL, NULL),
(521, '22', 'Pratapgarh', 'Active', NULL, NULL),
(522, '22', 'Rajsamand', 'Active', NULL, NULL),
(523, '22', 'Sikar', 'Active', NULL, NULL),
(524, '22', 'Sawai Madhopur', 'Active', NULL, NULL),
(525, '22', 'Sirohi', 'Active', NULL, NULL),
(526, '22', 'Tonk', 'Active', NULL, NULL),
(527, '22', 'Udaipur', 'Active', NULL, NULL),
(528, '23', 'East Sikkim', 'Active', NULL, NULL),
(529, '23', 'North Sikkim', 'Active', NULL, NULL),
(530, '23', 'Pakyong', 'Active', NULL, NULL),
(531, '23', 'Soreng', 'Active', NULL, NULL),
(532, '23', 'South Sikkim', 'Active', NULL, NULL),
(533, '23', 'West Sikkim', 'Active', NULL, NULL),
(534, '24', 'Ariyalur', 'Active', NULL, NULL),
(535, '24', 'Chengalpattu', 'Active', NULL, NULL),
(536, '24', 'Chennai', 'Active', NULL, NULL),
(537, '24', 'Coimbatore', 'Active', NULL, NULL),
(538, '24', 'Cuddalore', 'Active', NULL, NULL),
(539, '24', 'Dharmapuri', 'Active', NULL, NULL),
(540, '24', 'Dindigul', 'Active', NULL, NULL),
(541, '24', 'Erode', 'Active', NULL, NULL),
(542, '24', 'Kallakurichi', 'Active', NULL, NULL),
(543, '24', 'Kanchipuram', 'Active', NULL, NULL),
(544, '24', 'Kanyakumari', 'Active', NULL, NULL),
(545, '24', 'Karur', 'Active', NULL, NULL),
(546, '24', 'Krishnagiri', 'Active', NULL, NULL),
(547, '24', 'Madurai', 'Active', NULL, NULL),
(548, '24', 'Mayiladuthurai', 'Active', NULL, NULL),
(549, '24', 'Nagapattinam', 'Active', NULL, NULL),
(550, '24', 'Nilgiris', 'Active', NULL, NULL),
(551, '24', 'Namakkal', 'Active', NULL, NULL),
(552, '24', 'Perambalur', 'Active', NULL, NULL),
(553, '24', 'Pudukkottai', 'Active', NULL, NULL),
(554, '24', 'Ramanathapuram', 'Active', NULL, NULL),
(555, '24', 'Ranipet', 'Active', NULL, NULL),
(556, '24', 'Salem', 'Active', NULL, NULL),
(557, '24', 'Sivaganga', 'Active', NULL, NULL),
(558, '24', 'Tenkasi', 'Active', NULL, NULL),
(559, '24', 'Tiruppur', 'Active', NULL, NULL),
(560, '24', 'Tiruchirappalli', 'Active', NULL, NULL),
(561, '24', 'Theni', 'Active', NULL, NULL),
(562, '24', 'Tirunelveli', 'Active', NULL, NULL),
(563, '24', 'Thanjavur', 'Active', NULL, NULL),
(564, '24', 'Thoothukudi', 'Active', NULL, NULL),
(565, '24', 'Tirupattur', 'Active', NULL, NULL),
(566, '24', 'Tiruvallur', 'Active', NULL, NULL),
(567, '24', 'Tiruvarur', 'Active', NULL, NULL),
(568, '24', 'Tiruvannamalai', 'Active', NULL, NULL),
(569, '24', 'Vellore', 'Active', NULL, NULL),
(570, '24', 'Viluppuram', 'Active', NULL, NULL),
(571, '24', 'Virudhunagar', 'Active', NULL, NULL),
(572, '25', 'Adilabad', 'Active', NULL, NULL),
(573, '25', 'Bhadradri Kothagudem', 'Active', NULL, NULL),
(574, '25', 'Hanamkonda', 'Active', NULL, NULL),
(575, '25', 'Hyderabad', 'Active', NULL, NULL),
(576, '25', 'Jagtial', 'Active', NULL, NULL),
(577, '25', 'Jangaon', 'Active', NULL, NULL),
(578, '25', 'Jayashankar Bhupalpally', 'Active', NULL, NULL),
(579, '25', 'Jogulamba Gadwal', 'Active', NULL, NULL),
(580, '25', 'Kamareddy', 'Active', NULL, NULL),
(581, '25', 'Karimnagar', 'Active', NULL, NULL),
(582, '25', 'Khammam', 'Active', NULL, NULL),
(583, '25', 'Kumuram Bheem Asifabad', 'Active', NULL, NULL),
(584, '25', 'Mahabubabad', 'Active', NULL, NULL),
(585, '25', 'Mahbubnagar', 'Active', NULL, NULL),
(586, '25', 'Mancherial', 'Active', NULL, NULL),
(587, '25', 'Medak', 'Active', NULL, NULL),
(588, '25', 'Medchal–Malkajgiri', 'Active', NULL, NULL),
(589, '25', 'Mulugu', 'Active', NULL, NULL),
(590, '25', 'Nalgonda', 'Active', NULL, NULL),
(591, '25', 'Narayanpet', 'Active', NULL, NULL),
(592, '25', 'Nagarkurnool', 'Active', NULL, NULL),
(593, '25', 'Nirmal', 'Active', NULL, NULL),
(594, '25', 'Nizamabad', 'Active', NULL, NULL),
(595, '25', 'Peddapalli', 'Active', NULL, NULL),
(596, '25', 'Rajanna Sircilla', 'Active', NULL, NULL),
(597, '25', 'Ranga Reddy', 'Active', NULL, NULL),
(598, '25', 'Sangareddy', 'Active', NULL, NULL),
(599, '25', 'Siddipet', 'Active', NULL, NULL),
(600, '25', 'Suryapet', 'Active', NULL, NULL),
(601, '25', 'Vikarabad', 'Active', NULL, NULL),
(602, '25', 'Wanaparthy', 'Active', NULL, NULL),
(603, '25', 'Warangal', 'Active', NULL, NULL),
(604, '25', 'Yadadri Bhuvanagiri', 'Active', NULL, NULL),
(605, '26', 'Dhalai', 'Active', NULL, NULL),
(606, '26', 'Gomati', 'Active', NULL, NULL),
(607, '26', 'Khowai', 'Active', NULL, NULL),
(608, '26', 'North Tripura', 'Active', NULL, NULL),
(609, '26', 'Sepahijala', 'Active', NULL, NULL),
(610, '26', 'South Tripura', 'Active', NULL, NULL),
(611, '26', 'Unakoti', 'Active', NULL, NULL),
(612, '26', 'West Tripura', 'Active', NULL, NULL),
(613, '27', 'Agra', 'Active', NULL, NULL),
(614, '27', 'Aligarh', 'Active', NULL, NULL),
(615, '27', 'Ambedkar Nagar', 'Active', NULL, NULL),
(616, '27', 'Amethi', 'Active', NULL, NULL),
(617, '27', 'Amroha', 'Active', NULL, NULL),
(618, '27', 'Auraiya', 'Active', NULL, NULL),
(619, '27', 'Ayodhya', 'Active', NULL, NULL),
(620, '27', 'Azamgarh', 'Active', NULL, NULL),
(621, '27', 'Bagpat', 'Active', NULL, NULL),
(622, '27', 'Bahraich', 'Active', NULL, NULL),
(623, '27', 'Ballia', 'Active', NULL, NULL),
(624, '27', 'Balrampur', 'Active', NULL, NULL),
(625, '27', 'Banda', 'Active', NULL, NULL),
(626, '27', 'Barabanki', 'Active', NULL, NULL),
(627, '27', 'Bareilly', 'Active', NULL, NULL),
(628, '27', 'Basti', 'Active', NULL, NULL),
(629, '27', 'Bhadohi', 'Active', NULL, NULL),
(630, '27', 'Bijnor', 'Active', NULL, NULL),
(631, '27', 'Budaun', 'Active', NULL, NULL),
(632, '27', 'Bulandshahr', 'Active', NULL, NULL),
(633, '27', 'Chandauli', 'Active', NULL, NULL),
(634, '27', 'Chitrakoot', 'Active', NULL, NULL),
(635, '27', 'Deoria', 'Active', NULL, NULL),
(636, '27', 'Etah', 'Active', NULL, NULL),
(637, '27', 'Etawah', 'Active', NULL, NULL),
(638, '27', 'Farrukhabad', 'Active', NULL, NULL),
(639, '27', 'Fatehpur', 'Active', NULL, NULL),
(640, '27', 'Firozabad', 'Active', NULL, NULL),
(641, '27', 'Gautam Buddha Nagar', 'Active', NULL, NULL),
(642, '27', 'Ghaziabad', 'Active', NULL, NULL),
(643, '27', 'Ghazipur', 'Active', NULL, NULL),
(644, '27', 'Gonda', 'Active', NULL, NULL),
(645, '27', 'Gorakhpur', 'Active', NULL, NULL),
(646, '27', 'Hamirpur', 'Active', NULL, NULL),
(647, '27', 'Hapur', 'Active', NULL, NULL),
(648, '27', 'Hardoi', 'Active', NULL, NULL),
(649, '27', 'Hathras', 'Active', NULL, NULL),
(650, '27', 'Jalaun', 'Active', NULL, NULL),
(651, '27', 'Jaunpur', 'Active', NULL, NULL),
(652, '27', 'Jhansi', 'Active', NULL, NULL),
(653, '27', 'Kannauj', 'Active', NULL, NULL),
(654, '27', 'Kanpur Dehat', 'Active', NULL, NULL),
(655, '27', 'Kanpur Nagar', 'Active', NULL, NULL),
(656, '27', 'Kasganj', 'Active', NULL, NULL),
(657, '27', 'Kaushambi', 'Active', NULL, NULL),
(658, '27', 'Kushinagar', 'Active', NULL, NULL),
(659, '27', 'Lakhimpur Kheri', 'Active', NULL, NULL),
(660, '27', 'Lalitpur', 'Active', NULL, NULL),
(661, '27', 'Lucknow', 'Active', NULL, NULL),
(662, '27', 'Maharajganj', 'Active', NULL, NULL),
(663, '27', 'Mahoba', 'Active', NULL, NULL),
(664, '27', 'Mainpuri', 'Active', NULL, NULL),
(665, '27', 'Mathura', 'Active', NULL, NULL),
(666, '27', 'Mau', 'Active', NULL, NULL),
(667, '27', 'Meerut', 'Active', NULL, NULL),
(668, '27', 'Mirzapur', 'Active', NULL, NULL),
(669, '27', 'Moradabad', 'Active', NULL, NULL),
(670, '27', 'Muzaffarnagar', 'Active', NULL, NULL),
(671, '27', 'Pilibhit', 'Active', NULL, NULL),
(672, '27', 'Pratapgarh', 'Active', NULL, NULL),
(673, '27', 'Prayagraj', 'Active', NULL, NULL),
(674, '27', 'Raebareli', 'Active', NULL, NULL),
(675, '27', 'Rampur', 'Active', NULL, NULL),
(676, '27', 'Saharanpur', 'Active', NULL, NULL),
(677, '27', 'Sambhal', 'Active', NULL, NULL),
(678, '27', 'Sant Kabir Nagar', 'Active', NULL, NULL),
(679, '27', 'Shahjahanpur', 'Active', NULL, NULL),
(680, '27', 'Shamli', 'Active', NULL, NULL),
(681, '27', 'Shravasti', 'Active', NULL, NULL),
(682, '27', 'Siddharthnagar', 'Active', NULL, NULL),
(683, '27', 'Sitapur', 'Active', NULL, NULL),
(684, '27', 'Sonbhadra', 'Active', NULL, NULL),
(685, '27', 'Sultanpur', 'Active', NULL, NULL),
(686, '27', 'Unnao', 'Active', NULL, NULL),
(687, '27', 'Varanasi', 'Active', NULL, NULL),
(688, '28', 'Almora', 'Active', NULL, NULL),
(689, '28', 'Bageshwar', 'Active', NULL, NULL),
(690, '28', 'Chamoli', 'Active', NULL, NULL),
(691, '28', 'Champawat', 'Active', NULL, NULL),
(692, '28', 'Dehradun', 'Active', NULL, NULL),
(693, '28', 'Haridwar', 'Active', NULL, NULL),
(694, '28', 'Nainital', 'Active', NULL, NULL),
(695, '28', 'Pauri Garhwal', 'Active', NULL, NULL),
(696, '28', 'Pithoragarh', 'Active', NULL, NULL),
(697, '28', 'Rudraprayag', 'Active', NULL, NULL),
(698, '28', 'Tehri Garhwal', 'Active', NULL, NULL),
(699, '28', 'Udham Singh Nagar', 'Active', NULL, NULL),
(700, '28', 'Uttarkashi', 'Active', NULL, NULL),
(701, '29', 'Alipurduar', 'Active', NULL, NULL),
(702, '29', 'Bankura', 'Active', NULL, NULL),
(703, '29', 'Birbhum', 'Active', NULL, NULL),
(704, '29', 'Cooch Behar', 'Active', NULL, NULL),
(705, '29', 'Dakshin Dinajpur', 'Active', NULL, NULL),
(706, '29', 'Darjeeling', 'Active', NULL, NULL),
(707, '29', 'Hooghly', 'Active', NULL, NULL),
(708, '29', 'Howrah', 'Active', NULL, NULL),
(709, '29', 'Jalpaiguri', 'Active', NULL, NULL),
(710, '29', 'Jhargram', 'Active', NULL, NULL),
(711, '29', 'Kalimpong', 'Active', NULL, NULL),
(712, '29', 'Kolkata', 'Active', NULL, NULL),
(713, '29', 'Maldah', 'Active', NULL, NULL),
(714, '29', 'Murshidabad', 'Active', NULL, NULL),
(715, '29', 'Nadia', 'Active', NULL, NULL),
(716, '29', 'North 24 Parganas', 'Active', NULL, NULL),
(717, '29', 'Paschim Bardhaman', 'Active', NULL, NULL),
(718, '29', 'Paschim Medinipur', 'Active', NULL, NULL),
(719, '29', 'Purba Bardhaman', 'Active', NULL, NULL),
(720, '29', 'Purba Medinipur', 'Active', NULL, NULL),
(721, '29', 'Purulia', 'Active', NULL, NULL),
(722, '29', 'South 24 Parganas', 'Active', NULL, NULL),
(723, '29', 'Uttar Dinajpur', 'Active', NULL, NULL),
(724, '12', 'Bengaluru', 'Active', NULL, NULL),
(725, '2', 'Hyderabad', 'Active', '2023-07-24 00:12:36', '2023-07-24 00:12:36'),
(726, '24', 'Kallakurichi', 'Active', '2023-07-27 14:50:13', '2023-07-27 14:50:13'),
(727, '16', 'Imphal', 'Active', '2023-08-14 19:15:29', '2023-08-14 19:15:29'),
(728, '7', 'Impia', 'Active', '2023-08-14 19:21:25', '2023-08-14 19:21:25'),
(729, '7', 'Impiala', 'Active', '2023-08-14 19:26:11', '2023-08-14 19:26:11'),
(730, '7', 'Panaji', 'Active', '2023-08-14 19:26:45', '2023-08-14 19:26:45'),
(731, '7', 'Vagator', 'Active', '2023-08-14 19:29:38', '2023-08-14 19:29:38'),
(732, '7', 'Palolem', 'Active', '2023-08-14 19:32:37', '2023-08-14 19:32:37'),
(733, '36', 'Karatti', 'Active', '2024-01-31 17:08:24', '2024-01-31 17:08:24'),
(734, '33', 'Delhi NCT', 'Active', '2024-01-31 18:57:53', '2024-01-31 18:57:53'),
(735, '36', 'LAksha', 'Active', '2024-03-11 13:24:41', '2024-03-11 13:24:41');

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
  `price_request` int(15) NOT NULL DEFAULT 0,
  `finance_required` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `seller_id`, `buyer_id`, `product_id`, `quantity`, `requirement`, `otp_verified_at`, `contact_confirm`, `remark`, `status`, `created_at`, `updated_at`, `remainders`, `price_request`, `finance_required`) VALUES
(1, 1, 2, 1, '1', 'Mapping', NULL, 'No', NULL, NULL, '2023-08-02 08:13:34', '2023-07-22 22:40:52', 0, 0, NULL),
(2, 1, 2, 1, '1', 'Msg', NULL, 'No', NULL, NULL, '2023-08-02 08:13:37', '2023-07-22 23:22:16', 0, 0, NULL),
(3, 1, 2, 1, '1', 'Testing', NULL, 'No', NULL, NULL, '2023-08-02 08:13:36', '2023-07-22 23:37:55', 0, 0, NULL),
(6, 1, 3, 2, '1', 'Survey Drone for mapping', NULL, 'Yes', NULL, 'Y', '2023-08-02 08:13:39', '2023-07-23 23:30:15', 0, 0, NULL),
(7, 4, 3, 2, '1', 'Camera drone', NULL, 'Yes', NULL, 'Y', '2023-08-02 08:13:42', '2023-07-24 00:29:17', 0, 0, NULL),
(9, 1, 4, 2, '1', 'testing', NULL, 'Yes', NULL, 'Y', '2023-08-02 08:13:40', '2023-07-25 14:12:22', 0, 0, NULL),
(10, 1, 4, 5, '1', 'testing', NULL, 'Yes', NULL, 'Y', '2023-08-02 08:13:55', '2023-07-25 14:32:43', 0, 0, NULL),
(11, 1, 3, 4, '1', 'testing', NULL, 'Yes', NULL, 'Y', '2023-08-02 08:13:51', '2023-08-02 02:10:09', 0, 0, NULL),
(13, 1, 2, 5, '1', 'Training purpose', NULL, 'Yes', 'Pending', 'Y', '2023-08-06 15:42:48', '2023-08-06 22:42:48', 0, 0, NULL),
(14, 1, 2, 3, '1', 'Training purpose', NULL, 'Yes', 'Closed', 'Y', '2023-08-06 15:42:28', '2023-08-06 22:42:28', 0, 0, NULL),
(15, 1, 3, 18, '1', 'Firefighting', NULL, 'Yes', NULL, 'Y', '2023-08-06 17:10:55', '2023-08-07 00:10:55', 0, 0, NULL),
(16, 8, 9, 14, '1', 'For home', '2023-08-08', 'Yes', NULL, 'Y', '2023-08-08 07:05:10', '2023-08-08 14:05:10', 0, 0, NULL),
(18, 4, 1, 9, '1', 'camera drone', '2023-08-08', 'Yes', NULL, 'Y', '2023-08-08 08:48:56', '2023-08-08 15:48:56', 0, 0, NULL),
(19, 8, 14, 13, '1', 'For surveying', '2023-08-08', 'Yes', NULL, 'Y', '2023-08-08 11:15:20', '2023-08-08 18:15:20', 0, 0, NULL),
(20, 8, 15, 13, '1', 'For agri', '2023-08-08', 'Yes', NULL, 'Y', '2023-08-08 11:36:31', '2023-08-08 18:36:31', 0, 0, NULL),
(21, 8, 9, 15, '1', 'For', '2023-08-08', 'Yes', NULL, 'Y', '2023-08-08 11:54:15', '2023-08-08 18:54:15', 0, 0, NULL),
(23, 1, 14, 17, '1', 'test', '2023-08-10', 'Yes', NULL, 'Y', '2023-08-10 12:49:17', '2023-08-10 19:49:17', 0, 0, NULL),
(24, 8, 9, 16, '5', 'Test', '2023-08-11', 'No', NULL, NULL, '2023-08-11 11:42:50', '2023-08-11 11:42:50', 0, 0, NULL),
(26, 1, 10, 17, '1', 'test', '2023-08-11', 'No', NULL, NULL, '2023-08-11 12:04:57', '2023-08-11 12:04:57', 0, 0, NULL),
(27, 8, 10, 16, '1', 'Test', '2023-08-11', 'No', NULL, NULL, '2023-08-11 12:15:35', '2023-08-11 12:15:35', 0, 0, NULL),
(29, 8, 9, 16, '1', 'Test', '2023-08-11', 'No', NULL, NULL, '2023-08-11 12:29:52', '2023-08-11 12:29:52', 0, 0, NULL),
(30, 8, 10, 16, '1', 'Test', '2023-08-11', 'Yes', NULL, 'Y', '2023-08-11 05:33:26', '2023-08-11 12:33:26', 0, 0, NULL),
(31, 4, 21, 9, '1', 'Test', '2023-08-11', 'Yes', NULL, 'Y', '2023-08-11 11:58:45', '2023-08-11 18:58:45', 0, 0, NULL),
(32, 1, 9, 7, '1', 'For testing', '2023-08-14', 'No', NULL, NULL, '2023-08-14 17:58:54', '2023-08-14 17:58:54', 0, 0, NULL),
(33, 1, 9, 5, '1', 'For testing', '2023-08-14', 'No', NULL, NULL, '2023-08-14 18:04:41', '2023-08-14 18:04:41', 0, 0, NULL),
(34, 1, 9, 10, '1', 'tets', '2023-08-14', 'No', NULL, NULL, '2023-08-14 18:07:45', '2023-08-14 18:07:45', 0, 0, NULL),
(35, 25, 26, 21, '1', 'test', '2023-08-18', 'Yes', NULL, 'Y', '2023-08-18 12:57:40', '2023-08-18 19:57:40', 0, 0, NULL),
(36, 25, 27, 21, '1', NULL, '2023-08-19', 'Yes', NULL, 'Y', '2023-08-19 06:37:52', '2023-08-19 13:37:52', 0, 0, NULL),
(37, 25, 27, 20, '1', NULL, '2023-08-19', 'Yes', NULL, 'Y', '2023-08-19 06:43:15', '2023-08-19 13:43:15', 0, 0, NULL),
(38, 1, 29, 5, '1', 'For fishing', '2023-08-23', 'No', NULL, NULL, '2023-08-23 12:40:49', '2023-08-23 12:40:49', 0, 0, NULL),
(39, 1, 29, 5, '1', 'For fishing', '2023-08-23', 'Yes', NULL, 'Y', '2023-08-23 05:42:52', '2023-08-23 12:42:52', 0, 0, NULL),
(40, 1, 29, 1, '1', 'For fishing', '2023-08-23', 'Yes', NULL, 'Y', '2023-08-23 12:56:11', '2023-08-23 19:56:11', 0, 0, NULL),
(41, 25, 9, 22, '1', 'For test', '2023-08-23', 'No', NULL, NULL, '2023-08-23 20:16:24', '2023-08-23 20:16:24', 0, 0, NULL),
(42, 25, 9, 21, '1', 'For testing', '2023-08-25', 'No', NULL, NULL, '2023-08-25 17:16:24', '2023-08-25 17:16:24', 0, 0, NULL),
(43, 25, 9, 19, '1', 'For testing', '2023-08-25', 'No', NULL, NULL, '2023-08-25 17:32:21', '2023-08-25 17:32:21', 0, 0, NULL),
(44, 25, 36, 21, '1', 'sjafdvn', '2023-08-25', 'Yes', NULL, 'Y', '2023-08-25 11:12:00', '2023-08-25 18:12:00', 0, 0, NULL),
(45, 25, 37, 20, '1', 'For testing', '2023-08-25', 'No', NULL, NULL, '2023-08-25 19:24:05', '2023-08-25 19:24:05', 0, 0, NULL),
(46, 25, 38, 21, '1', 'For testing', '2023-08-25', 'Yes', NULL, 'Y', '2023-08-25 12:28:00', '2023-08-25 19:28:00', 0, 0, NULL),
(50, 4, 25, 9, '1', 'For testing', '2023-08-28', 'Yes', NULL, 'Y', '2023-11-23 07:40:41', '2023-11-23 14:40:41', 3, 0, NULL),
(54, 1, 25, 5, '1', 'For agri', '2023-11-23', 'Yes', NULL, 'Y', '2023-12-25 11:05:15', '2023-12-25 18:05:15', 18, 0, NULL),
(56, 25, 24, 28, '1', 'test', '2023-11-27', 'No', NULL, NULL, '2023-11-27 12:55:30', '2023-11-27 12:55:30', 0, 0, NULL),
(57, 1, 24, 10, '1', 'test', '2023-11-28', 'Yes', NULL, 'Y', '2024-01-26 17:34:09', '2024-01-27 00:34:09', 1, 0, NULL),
(58, 25, 48, 28, '1', 'Test', '2023-12-14', 'Yes', NULL, 'Y', '2023-12-14 05:46:56', '2023-12-14 12:46:56', 0, 0, NULL),
(59, 1, 24, 4, '1', 'For agri', '2023-12-25', 'No', NULL, NULL, '2023-12-25 11:36:36', '2023-12-25 11:36:36', 0, 0, NULL),
(60, 1, 24, 8, '1', 'For testing', '2023-12-25', 'No', NULL, NULL, '2023-12-25 11:41:06', '2023-12-25 11:41:06', 0, 0, NULL),
(61, 1, 25, 8, '1', 'test', '2023-12-25', 'No', NULL, NULL, '2023-12-25 11:55:55', '2023-12-25 11:55:55', 0, 0, NULL),
(62, 1, 25, 2, '1', 'Test', '2023-12-26', 'No', NULL, NULL, '2023-12-26 13:55:24', '2023-12-26 13:55:24', 0, 0, NULL),
(63, 25, 57, 29, '1', 'Test', '2023-12-27', 'Yes', NULL, 'Y', '2023-12-27 13:28:08', '2023-12-27 20:28:08', 22, 0, NULL),
(64, 25, 63, 23, '1', 'Test', '2023-12-28', 'Yes', NULL, 'Y', '2023-12-28 05:27:36', '2023-12-28 12:27:36', 0, 0, NULL),
(65, 25, 63, 27, '1', 'Test', '2023-12-28', 'Yes', NULL, 'Y', '2023-12-28 05:28:58', '2023-12-28 12:28:58', 0, 0, NULL),
(69, 25, 44, 30, '1', 'Test', '2024-01-09', 'Yes', NULL, 'Y', '2024-01-09 12:14:47', '2024-01-09 19:14:47', 0, 0, NULL),
(70, 25, 44, 26, '1', 'Test', '2024-01-09', 'Yes', NULL, 'Y', '2024-01-09 12:15:21', '2024-01-09 19:15:21', 0, 0, NULL),
(71, 25, 24, 29, '1', 'Test', '2024-01-20', 'Yes', NULL, 'Y', '2024-01-26 05:24:17', '2024-01-26 12:24:17', 0, 2, NULL),
(75, 1, 24, 18, '1', 'Testing', '2024-01-22', 'Yes', NULL, 'Y', '2024-01-22 06:38:30', '2024-01-22 13:38:30', 0, 0, NULL),
(77, 50, 24, 35, '1', 'Test', '2024-01-25', 'Yes', NULL, 'Y', '2024-01-25 12:10:14', '2024-01-25 19:10:14', 0, 0, NULL),
(78, 25, 24, 30, '1', 'Test', '2024-01-26', 'Yes', NULL, 'Y', '2024-01-26 05:24:35', '2024-01-26 12:24:35', 0, 2, NULL),
(79, 25, 24, 20, '1', 'Test', '2024-01-26', 'No', NULL, NULL, '2024-01-26 12:25:39', '2024-01-26 12:25:39', 0, 0, NULL),
(80, 1, 24, 1, '1', 'Test', '2024-01-26', 'Yes', NULL, 'Y', '2024-01-26 09:35:04', '2024-01-26 16:35:04', 0, 0, NULL),
(88, 43, 24, 38, '1', 'Test', '2024-02-02', 'Yes', NULL, 'Y', '2024-02-02 09:25:28', '2024-02-02 16:25:28', 1, 0, NULL),
(89, 25, 50, 27, '1', 'Test', '2024-02-03', 'Yes', NULL, 'Y', '2024-02-03 09:59:13', '2024-02-03 16:59:13', 0, 0, 'yes'),
(90, 25, 50, 23, '1', 'Test', '2024-02-03', 'Yes', NULL, 'Y', '2024-02-03 10:47:06', '2024-02-03 17:47:06', 0, 0, 'yes'),
(94, 25, 24, 28, '1', 'For testing', '2024-02-29', 'Yes', NULL, 'Y', '2024-02-29 07:22:39', '2024-02-29 14:22:39', 0, 0, 'yes'),
(95, 50, 25, 33, '1', 'For testing', '2024-02-29', 'Yes', NULL, 'Y', '2024-02-29 07:27:56', '2024-02-29 14:27:56', 0, 0, 'yes'),
(96, 50, 74, 35, '1', 'For testing', '2024-03-01', 'Yes', NULL, 'Y', '2024-03-01 05:25:54', '2024-03-01 12:25:54', 0, 0, 'yes'),
(99, 25, 50, 30, '1', 'For testing', '2024-03-04', 'Yes', NULL, 'Y', '2024-03-04 04:48:31', '2024-03-04 11:48:31', 0, 0, 'yes'),
(100, 25, 50, 28, '1', 'For testing', '2024-03-06', 'Yes', NULL, 'Y', '2024-03-06 05:20:14', '2024-03-06 12:20:14', 0, 0, 'yes'),
(101, 25, 50, 20, '1', 'For testing', '2024-03-06', 'Yes', NULL, 'Y', '2024-03-06 12:56:26', '2024-03-06 19:56:26', 0, 0, 'yes');

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
(21, 'Battery', 'Active', NULL, NULL),
(22, 'Battery', 'Active', NULL, NULL);

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
(1, '15', 'Insight PPK Multicopter', 'commercial', 'Active', NULL, NULL),
(2, '16', 'Aviral RH8 ', 'commercial', 'Active', NULL, NULL),
(3, '17', 'Skykeeper X4', 'commercial', 'Active', NULL, NULL),
(4, '18', 'Avtaar AG1.04', 'commercial', 'Active', NULL, NULL),
(5, '19', 'A200', 'commercial', 'Active', NULL, NULL),
(6, '20', 'Panda', 'commercial', 'Active', NULL, NULL),
(7, '21', 'SPYD-2', 'commercial', 'Active', NULL, NULL),
(8, '22', 'Model V ', 'commercial', 'Active', NULL, NULL),
(9, '23', 'Snap M', 'commercial', 'Active', NULL, NULL),
(10, '24', 'Kisaan K400', 'commercial', 'Active', NULL, NULL),
(11, '25', 'DTR 450', 'commercial', 'Active', NULL, NULL),
(12, '26', 'Birdy FW', 'commercial', 'Active', NULL, NULL),
(13, '27', 'DHVT-HT', 'commercial', 'Active', NULL, NULL),
(14, '28', 'Aero360 Hybrid', 'commercial', 'Active', NULL, NULL),
(15, '29', 'EA 10Q', 'commercial', 'Active', NULL, NULL),
(16, '30', 'Spidex 600', 'commercial', 'Active', NULL, NULL),
(17, '31', 'Vibhram', 'commercial', 'Active', NULL, NULL),
(18, '32', 'Drone Raja 1.0', 'commercial', 'Active', NULL, NULL),
(19, '33', 'Kisan Drone Electric', 'commercial', 'Active', NULL, NULL),
(20, '34', 'Vaanvili Micro UAV v0.1,', 'commercial', 'Active', NULL, NULL),
(21, '35', 'Krishak', 'commercial', 'Active', NULL, NULL),
(22, '36', 'StarLite', 'commercial', 'Active', NULL, NULL),
(23, '37', 'Ryno UAV', 'commercial', 'Active', NULL, NULL),
(24, '38', 'Sigma 55', 'commercial', 'Active', NULL, NULL),
(25, '39', 'Agribot', 'commercial', 'Active', NULL, NULL),
(26, '40', 'Silverbee UAS', 'commercial', 'Active', NULL, NULL),
(27, '41', 'Pratham UAV', 'commercial', 'Active', NULL, NULL),
(28, '42', 'AG 365', 'commercial', 'Active', NULL, NULL),
(29, '43', 'MD 5Q', 'commercial', 'Active', NULL, NULL),
(30, '44', 'Agricopter', 'commercial', 'Active', NULL, NULL),
(31, '45', 'Agro Squad', 'commercial', 'Active', NULL, NULL),
(32, '46', 'Agriculture Drone Kit', 'commercial', 'Active', NULL, NULL),
(33, '47', 'Spectre M', 'commercial', 'Active', NULL, NULL),
(34, '48', 'Kisan Drone (Beta)', 'commercial', 'Active', NULL, NULL),
(35, '49', 'Syena H10', 'commercial', 'Active', NULL, NULL),
(36, '50', 'TALV-TACT', 'commercial', 'Active', NULL, NULL),
(37, '51', 'Dexter S', 'commercial', 'Active', NULL, NULL),
(38, '52', 'Hawk4G Survey ', 'commercial', 'Active', NULL, NULL),
(39, '53', 'Abhay 4R4', 'commercial', 'Active', NULL, NULL),
(40, '54', 'Athera', 'commercial', 'Active', NULL, NULL),
(41, '55', 'Krishi Viman KV10++', 'commercial', 'Active', NULL, NULL),
(42, '16', 'Octo RH8', 'commercial', 'Active', NULL, NULL),
(43, '17', 'Skykeeper X2', 'commercial', 'Active', NULL, NULL),
(44, '18', 'Avtaar AG1.08', 'commercial', 'Active', NULL, NULL),
(45, '19', 'A400', 'commercial', 'Active', NULL, NULL),
(46, '20', 'Vajra', 'commercial', 'Active', NULL, NULL),
(47, '21', 'SPYD-4', 'commercial', 'Active', NULL, NULL),
(48, '24', 'Kisaan K600', 'commercial', 'Active', NULL, NULL),
(49, '25', 'DTR 640', 'commercial', 'Active', NULL, NULL),
(50, '26', 'Solfox', 'commercial', 'Active', NULL, NULL),
(51, '27', 'DH-HM Hybrid', 'commercial', 'Active', NULL, NULL),
(52, '28', 'Aero 360 Tethered', 'commercial', 'Active', NULL, NULL),
(53, '29', 'EA 10H', 'commercial', 'Active', NULL, NULL),
(54, '30', 'EDS 580', 'commercial', 'Active', NULL, NULL),
(55, '31', 'BITS', 'commercial', 'Active', NULL, NULL),
(56, '32', 'Drone Raja 2.0', 'commercial', 'Active', NULL, NULL),
(57, '33', 'Kisan Drone Hybrid', 'commercial', 'Active', NULL, NULL),
(58, '34', 'Vaanvili Nano UAV', 'commercial', 'Active', NULL, NULL),
(59, '36', 'StarEdge', 'commercial', 'Active', NULL, NULL),
(60, '37', 'Ninja UAV', 'commercial', 'Active', NULL, NULL),
(61, '38', 'Sigma 75', 'commercial', 'Active', NULL, NULL),
(62, '39', 'Agribot A6', 'commercial', 'Active', NULL, NULL),
(63, '41', 'Sakshin UAV', 'commercial', 'Active', NULL, NULL),
(64, '43', 'MD 10Q', 'commercial', 'Active', NULL, NULL),
(65, '47', 'Spectre P', 'commercial', 'Active', NULL, NULL),
(66, '48', 'RAV', 'commercial', 'Active', NULL, NULL),
(67, '50', 'Dopo', 'commercial', 'Active', NULL, NULL),
(68, '52', 'Hawk4G Surveillance', 'commercial', 'Active', NULL, NULL),
(69, '53', 'Ahan EHL2', 'commercial', 'Active', NULL, NULL),
(70, '17', 'Skykeeper X', 'commercial', 'Active', NULL, NULL),
(71, '19', 'A200XT', 'commercial', 'Active', NULL, NULL),
(72, '20', 'Beetle', 'commercial', 'Active', NULL, NULL),
(73, '21', 'Airavat', 'commercial', 'Active', NULL, NULL),
(74, '24', 'Agnya UAV', 'commercial', 'Active', NULL, NULL),
(75, '25', 'DTR Monal', 'commercial', 'Active', NULL, NULL),
(76, '26', 'Solfox Mini', 'commercial', 'Active', NULL, NULL),
(77, '27', 'DH Quad', 'commercial', 'Active', NULL, NULL),
(78, '28', 'Astra UAV', 'commercial', 'Active', NULL, NULL),
(79, '29', 'EA 16H', 'commercial', 'Active', NULL, NULL),
(80, '33', 'Vriksh Vaahan ', 'commercial', 'Active', NULL, NULL),
(81, '34', 'Vaanvili Med UAV', 'commercial', 'Active', NULL, NULL),
(82, '37', 'Q Series', 'commercial', 'Active', NULL, NULL),
(83, '38', 'Vector ', 'commercial', 'Active', NULL, NULL),
(84, '43', 'MD 16P', 'commercial', 'Active', NULL, NULL),
(85, '48', 'ahaDrone', 'commercial', 'Active', NULL, NULL),
(86, '50', 'Med Copter', 'commercial', 'Active', NULL, NULL),
(87, '19', 'A410 XT', 'commercial', 'Active', NULL, NULL),
(88, '20', 'Beetle+', 'commercial', 'Active', NULL, NULL),
(89, '24', 'Dhrishti UAV', 'commercial', 'Active', NULL, NULL),
(90, '27', 'DH Mapper', 'commercial', 'Active', NULL, NULL),
(91, '29', 'Hybrid VTOL', 'commercial', 'Active', NULL, NULL),
(92, '34', 'Vaanvili Large UAV', 'commercial', 'Active', NULL, NULL),
(93, '37', 'Switch UAV', 'commercial', 'Active', NULL, NULL),
(94, '50', 'Defender', 'commercial', 'Active', NULL, NULL),
(95, '19', 'AT 15', 'commercial', 'Active', NULL, NULL),
(96, '20', 'Bee', 'commercial', 'Active', NULL, NULL),
(97, '24', 'Krishak', 'commercial', 'Active', NULL, NULL),
(98, '27', 'DH Micro Quad', 'commercial', 'Active', NULL, NULL),
(99, '29', 'Vedansh', 'commercial', 'Active', NULL, NULL),
(100, '34', 'Agri v1 10 Litres', 'commercial', 'Active', NULL, NULL),
(101, '37', 'Netra V Series ', 'commercial', 'Active', NULL, NULL),
(102, '50', 'Nimble-I', 'commercial', 'Active', NULL, NULL),
(103, '20', 'Shark', 'commercial', 'Active', NULL, NULL),
(104, '27', 'DH Heli Hybrid', 'commercial', 'Active', NULL, NULL),
(105, '34', 'Agri v2 (16 Litres)', 'commercial', 'Active', NULL, NULL),
(106, '37', 'Netra Pro', 'commercial', 'Active', NULL, NULL),
(107, '27', 'DH Agrigator', 'commercial', 'Active', NULL, NULL),
(108, '37', 'Netra V4 Pro', 'commercial', 'Active', NULL, NULL),
(109, '27', 'DH Q4', 'commercial', 'Active', NULL, NULL),
(110, '27', 'DH Agrigator E10', 'commercial', 'Active', NULL, NULL),
(111, '56', 'Solfox Mini', 'consumer', 'Active', NULL, NULL),
(112, '57', 'Mini 3', 'consumer', 'Active', NULL, NULL),
(113, '58', 'AirDoe', 'consumer', 'Active', NULL, NULL),
(114, '59', 'IZI Pro Nano', 'consumer', 'Active', NULL, NULL),
(115, '60', 'Ajeet Mini', 'consumer', 'Active', NULL, NULL),
(116, '57', 'Air 3', 'consumer', 'Active', NULL, NULL),
(117, '58', 'Skyper', 'consumer', 'Active', NULL, NULL),
(118, '59', 'IZI Fly ', 'consumer', 'Active', NULL, NULL),
(119, '57', 'Air 2 S', 'consumer', 'Active', NULL, NULL),
(120, '58', 'Wazp', 'consumer', 'Active', NULL, NULL),
(121, '59', 'IZI Sky ', 'consumer', 'Active', NULL, NULL),
(122, '57', 'Mavic Air 2', 'consumer', 'Active', NULL, NULL),
(123, '59', 'IZI Sky with OA', 'consumer', 'Active', NULL, NULL),
(124, '57', 'Mavic 3', 'consumer', 'Active', NULL, NULL),
(125, '57', 'Mavic 3 Pro', 'consumer', 'Active', NULL, NULL),
(126, '57', 'Avata', 'consumer', 'Active', NULL, NULL),
(127, '57', 'FPV', 'consumer', 'Active', NULL, NULL),
(134, '59', 'IZI Pro', 'consumer', 'Active', '2023-08-07 19:23:14', '2023-08-07 19:23:14'),
(139, NULL, 'Test', NULL, 'Active', '2024-03-06 20:43:56', '2024-03-06 20:43:56');

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
(3, 'now', NULL, NULL, '2024-03-14', '11:30:00', 'Drone Alert Service', 'This service provides real-time alerts about drone incursions into your designated area. [OSL Drone Alert Service]', '2024-03-14 18:23:44', '2024-03-14 18:23:44'),
(4, 'later', '2024-03-14', '11:30:00', '2024-03-15', '12:30:00', 'Drone Alert Service', 'This service provides real-time alerts about drone incursions into your designated area. [OSL Drone Alert Service]', '2024-03-14 18:25:21', '2024-03-14 18:25:21');

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
('ram@mailinator.com', '$2y$10$hOC09jVkLkHWHeuA5gp80eousp4D8k6mfm.iqlm2uRXpnCvdHJWau', '2022-11-02 14:16:30'),
('matharasi@thulirsoft.com', '$2y$10$kdjzcznC5xgL1Jg885/bTOX6UmcqEnInQxm/ZI9xPxfRk1gdHmkoC', '2022-12-08 16:23:10');

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
(1, 1, '1', '2', 62, NULL, NULL, 'Small', NULL, 'Garuda Kisan Drone, Agriculture Drone', '2023-08-07', 'Chennai', 24, 'All', 550000, 'Garuda Aerospace', 'Kisan Drone Electric', 'Electric', 'Multi-Rotor', 'Garuda\'s Agricultural Drones are unmanned aerial vehicles that help with agricultural production, crop growth monitoring, and agriculture operations optimization.', NULL, NULL, '1 Multicopter Drone, 1 Battery', NULL, 'Agriculture Spraying', NULL, NULL, '1Y', 'Lease', NULL, 'Government Subsidy', '95', 'https://botsanddrones.in/agriculture-drones/f/garuda-electric-spraying-agriculture-drone', NULL, 'Y', 'N', 'Y', NULL, 'Garuda-Kisan-Drone,-Agriculture-Drone-4789', 'Y', 'Contact Seller', '2023-07-22 19:25:40', '2024-01-26 16:33:56'),
(2, 1, '1', '2', 30, NULL, NULL, 'Medium', NULL, 'Agribot Agriculture Spraying Drone 10 Litres', '2023-08-06', 'Gurugram', 9, 'All', 800000, 'IoTechWorld Avigation', 'Agribot', 'Electric', 'Multi-Rotor', 'Agribot is tested by IARI, PAU, HAU, and many corporations as the best suited agricultural Drone for spraying over all types of crops and farmlands.', NULL, NULL, '1 Drone, 2 Batteries', NULL, 'Agriculture Spraying', NULL, NULL, '1Y', 'Lease', NULL, 'Govt Subsidy Available', '95', 'https://botsanddrones.in/agriculture-drones/f/agribot', NULL, 'Y', 'N', 'N', NULL, 'Agribot-Agriculture-Spraying-Drone-10-Litres-6722', 'Y', 'Contact Seller', '2023-07-22 19:55:45', '2024-02-29 14:27:24'),
(3, 1, '1', '2', 44, NULL, NULL, 'Micro', NULL, 'Model V Mapping Drone', '2023-08-09', 'Hyderabad', 25, 'All', 700000, 'CBAI Technologies', 'Model V', 'Electric', 'Multi-Rotor', 'Model V is a certified, high performance inspection UAV, a quad-copter equipped with multi-spectral camera.', NULL, NULL, '1 Drone, 1 Battery', NULL, 'Survey & Mapping', NULL, NULL, '1Y', 'Not Lease', NULL, NULL, '95', 'https://botsanddrones.in/commercial-drones/f/model-v?blogcategory=%40+CBAI+Technologies', NULL, 'Y', 'N', 'N', NULL, 'Model-V-Mapping-Drone-2663', 'Y', 'Contact Seller', '2023-07-22 20:12:18', '2023-08-14 18:06:31'),
(4, 1, '1', '2', 49, NULL, NULL, 'Micro', NULL, 'UMT Hawk 4G Survey Drone', '2023-08-06', 'Bengaluru', 12, 'All', 700000, 'UrbanMatrix Technologies', 'Hawk4G Survey', 'Electric', 'Multi-Rotor', 'The UMT Hawk4G Survey drone is our end-to-end solution for surveying. Capable of covering hundreds of acres in a single flight, this UAV cuts down on time and money spent on standard surveying methods.', NULL, NULL, '1 Drone, 2 batteries', NULL, 'Survey & Mapping', NULL, NULL, '1Y', 'Not Lease', NULL, NULL, '95', 'https://botsanddrones.in/commercial-drones/f/urban-matrix-technologies-umt-sparrow-ppk--commercial-drone-guide?blogcategory=%40+UrbanMatrix+Technologies', NULL, 'Y', 'N', 'N', NULL, 'UMT-Hawk-4G-Survey-Drone-6456', 'Y', 'Contact Seller', '2023-07-22 20:30:22', '2024-01-02 12:47:02'),
(5, 1, '1', '2', 119, NULL, NULL, 'Micro', NULL, 'UMT Hawk4G Surveillance Drone', '2023-08-06', 'Bengaluru', 12, 'All', 700000, 'UrbanMatrix Technologies', 'Hawk4G Surveillance', 'Electric', 'Multi-Rotor', 'The UMT Hawk4G has been designed to revolutionize the world of automated surveillance and tracking, with longer flight times and autonomous patrolling capabilities. It is India\'s first 4G drone - allowing viewing of live video feeds from anywhere in the world. Armed with Al-powered processing of the video feeds for human and object detection, the Hawk is a game-changer in security and reconnaissance.', NULL, NULL, '1 Drone, 2 Batteries', NULL, 'Security', NULL, NULL, '1Y', 'Not Lease', NULL, NULL, '95', 'https://botsanddrones.in/commercial-drones/f/urban-matrix-umt-hawk-4g-drone', NULL, 'Y', 'N', 'N', NULL, 'UMT-Hawk4G-Surveillance-Drone-7399', 'Y', 'Contact Seller', '2023-07-22 21:24:46', '2023-12-27 20:59:28'),
(6, 1, '2', '6', 37, NULL, 'Communication Equipment', NULL, NULL, 'UMT NEXT CC 4G', '2023-08-09', 'Bengaluru', 12, 'All', 50, 'UrbanMatrix Technologies', 'Next CC 4G', NULL, NULL, 'NextCC is an edge computing device that comes with a powerful and dynamic Operating System, NextOS. It provides the critical software layer for drones, enabling secure and centralised drone operations at scale. With years of R&D and thousands of flights, NextCC promises reliability and stability for your drones. ​', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1Y', 'Not Lease', 'PX  or Ardupilot based flight controllers(FC).', NULL, '95', 'https://botsanddrones.in/drone-hardware-components/f/matrix-cc-urbanmatrix', NULL, NULL, 'N', 'N', NULL, 'UMT-NEXT-CC-4G-1887', 'Y', 'Contact Seller', '2023-07-22 21:44:34', '2023-11-17 16:55:25'),
(7, 1, '2', '8', 54, NULL, 'Cases', NULL, NULL, 'DroneAi DroneHawk Box', '2023-08-05', 'Jaipur', 22, 'All', 50, 'CD Space', 'Snap M', NULL, NULL, 'The drone brain is Pixhawk Autopilot + a companion computer + 4G/5G communication + OnBoard EdgeAI.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6M', 'Not Lease', 'Drones', NULL, '95', 'https://botsanddrones.in/drone-hardware-components/f/dronehawk-box', NULL, NULL, 'N', 'N', NULL, 'DroneAi-DroneHawk-Box-776', 'Y', 'Contact Seller', '2023-07-22 22:01:35', '2023-12-28 11:54:54'),
(8, 1, '1', '1', 114, NULL, NULL, 'Micro', NULL, 'IZI Sky 4K 20MP CMOS 1/3.06 Camera Drone', '2023-08-09', 'Pune', 15, 'All', 43999, 'IZI', 'IZI Sky', NULL, NULL, 'UPGRADED 20MP 4K 3-AXIS GIMBAL CAMERA DRONE- Powered with 20MP CMOS sensor 1/3.06″ to take cinematic videos with a wide angle lens to unleash visual brilliance. With a stable 3-axis gimbal camera and enhanced stability, enjoy smooth flight maneuvers and unlock your creativity by exploring new perspectives with 4x Zoom.', NULL, NULL, '1 x Drone, 2 x Smart batteries, 1x Remote controller, 1 x Carry case, 4x Extra propellers, 1 x Charging Hub, 1x USB cables, 3x Transmission cables, 1 x Screwdriver, 1 x User manual.', NULL, 'Camera Drone', NULL, NULL, '1Y', 'Not Lease', NULL, 'Discounted Price', '95', 'https://botsanddrones.in/consumer-drones/f/izi-sky-4k-20mp-camera-drone---india-consumer-drone-guide', NULL, NULL, 'N', 'N', NULL, 'IZI-Sky-4K-20MP-CMOS-1-3.06-Camera-Drone-376', 'Y', 'Contact Seller', '2023-07-23 22:41:20', '2023-12-25 12:21:15'),
(9, 4, '1', '1', 120, NULL, NULL, 'Micro', NULL, 'IZI Sky 4K 20MP CMOS 1/3.06 Camera Drone, 360 Obstacle Avoidance', '2023-07-23', 'Hyderabad', 2, 'All', 48999, 'IZI', 'IZI Sky', NULL, NULL, 'NEXT GEN OBSTACLE SENSORS – Equipped with vision sensors and a high-performance computing engine, it ensures precise 360° obstacle detection. It plans a safe path for flying, making sure to avoid obstacles and keep your drone safe during the entire flight.', NULL, NULL, '1 x Drone, 2 x Smart batteries, 1x Remote controller, 1 x Carry case, 4x Extra propellers, 1 x Charging Hub, 1x USB cables, 3x Transmission cables, 1 x Screwdriver, 1 x User manual.', NULL, 'Camera Drone', NULL, NULL, '1Y', 'Not Lease', NULL, 'Discounted Price', '95', 'https://izicart.com/products/drones/product/izi-sky-20-mp-4k-camera-drone-oa/', NULL, NULL, 'N', 'N', NULL, 'IZI-Sky-4K-20MP-CMOS-1-3.06-Camera-Drone,-360-Obstacle-Avoidance-9442', 'Y', 'Contact Seller', '2023-07-24 00:12:36', '2023-12-26 13:48:12'),
(10, 1, '1', '1', 49, NULL, NULL, 'Nano', NULL, 'IZI Pro Nano Drone 720P HD Camera', '2023-08-09', 'Mumbai', 15, 'All', 8999, 'IZI', 'IZI Pro Nano', NULL, NULL, 'Portable Nano Drone – User-friendly mini drone with one-key auto take-off/land function. High-quality meticulous body design. Ergonomically designed in India. Bears high impacts easily. Durable drone camera with safety- super lightweight and easy to carry. 4 propellers with a guard give more flight safety and relaxation. Also makes it more durable and ultrastable than any other product in the market globally.', NULL, NULL, '1 Drone\r\n1 Charging cable\r\n1 Screwdriver\r\n2 Re-chargeable smart batteries\r\n1 Remote control\r\n4 Extra blades\r\n1 Propeller removal tool\r\n1 User manual', NULL, 'Camera Drone', NULL, NULL, '1Y', 'Not Lease', NULL, 'None', '95', 'https://izicart.com/products/drones/product/izi-sky-20-mp-4k-camera-drone-non-oa/', NULL, NULL, 'N', 'N', NULL, 'IZI-Pro-Nano-Drone-720P-HD-Camera-6166', 'Y', 'Contact Seller', '2023-08-04 17:38:44', '2024-01-27 00:34:17'),
(13, 8, '1', '1', 8, NULL, NULL, 'Nano', NULL, 'Test', '2023-08-08', 'Thrissur', 13, 'All', 15000, 'DJI', 'Mavic 3', NULL, NULL, NULL, NULL, NULL, 'Test', NULL, 'Racing Drone', NULL, NULL, '1Y', 'Lease', NULL, '10%', '95', 'https://www.example.com', NULL, NULL, 'N', 'N', NULL, 'Test-3128', 'N', 'Contact Seller', '2023-08-05 20:02:51', '2023-08-08 18:37:35'),
(14, 8, '1', '2', 16, NULL, NULL, 'Medium', NULL, 'Test', '2023-08-08', 'Botad', 8, 'All', 35000, 'Asap Agritech', 'Avtaar AG1.08', 'Hybrid-Electric', 'Fixed Wing', NULL, NULL, NULL, 'Test', NULL, 'Industrial Inspections', NULL, NULL, '1Y', 'Lease', NULL, NULL, '9', 'https://www.example.com', NULL, 'Y', 'N', 'N', NULL, 'Test-6826', 'N', 'Contact Seller', '2023-08-05 20:17:07', '2023-08-08 14:24:21'),
(15, 8, '2', '6', 7, NULL, 'Wheels', NULL, NULL, 'Test', '2023-08-08', 'Wokha', 19, 'All', 25000, 'Dji', 'djipro', NULL, NULL, NULL, NULL, NULL, 'Test', NULL, NULL, NULL, NULL, '1Y', 'Lease', 'Test', NULL, '18', 'https://www.example.com', NULL, NULL, 'N', 'N', NULL, 'Test-8281', 'N', 'Contact Seller', '2023-08-05 20:22:43', '2023-08-08 18:57:07'),
(16, 8, '3', '3', 30, NULL, NULL, NULL, 'Home', 'Test', '2023-08-08', 'Aurangabad', 5, 'All', 5000, 'Dji', 'Djipro', NULL, NULL, 'Test', NULL, NULL, NULL, NULL, NULL, NULL, 'Fuel', '2Y', 'Lease', NULL, NULL, '2', 'https://www.example.com', 'Test', NULL, 'N', 'N', NULL, 'Test-2245', 'N', 'Contact Seller', '2023-08-05 20:33:43', '2023-08-11 14:41:33'),
(17, 1, '3', '4', 26, NULL, 'Cameras', NULL, 'Cleaning Robot', 'Xena Drainage Cleaning Robot', '2023-08-06', 'Jaipur', 22, 'All', 400000, 'Club First', 'Xena 6.0', NULL, NULL, 'Xena 6.0 Drainage cleaning robot collects and lifts the solid waste from a manhole and collects it in a chamber. CCTVs are equipped on robotic machine to monitor the cleaning.', NULL, NULL, '1 Robot', NULL, NULL, NULL, 'Electric', '1Y', 'Not Lease', NULL, '2 Year Service Free of Cost', '95', 'https://botsanddrones.in/commercial-robots/f/xena-60-drainage-cleaning-robot', 'CE', NULL, 'N', 'N', NULL, 'Xena-Drainage-Cleaning-Robot-8380', 'Y', 'Contact Seller', '2023-08-06 23:14:56', '2023-11-28 16:24:57'),
(18, 1, '3', '4', 27, NULL, NULL, NULL, 'Industrial', 'Xena ATV Robot', '2023-08-09', 'Jaipur', 22, 'All', 400000, 'Club First', 'Xena 5.0', NULL, NULL, 'RC Control ATV robotic platform\r\nHeat Proof, Water Proof, Smart Obstacle Avoidance technology, Heavy Duty Work.\r\n \r\nApplications:\r\nDisaster Management, Fire Fighting, Off Road Material Handling', NULL, NULL, '1 ATV Robot', NULL, NULL, NULL, 'Electric', '1Y', 'Not Lease', NULL, NULL, '95', 'https://botsanddrones.in/commercial-robots/f/club-first-xena-50-atv-robot', 'CC', NULL, 'N', 'N', NULL, 'Xena-ATV-Robot-6255', 'Y', 'Contact Seller', '2023-08-06 23:50:55', '2024-01-22 13:37:26'),
(19, 25, '1', '1', 41, NULL, NULL, 'Nano', NULL, 'Test cons', '2023-09-28', 'Senapati', 16, 'All', 50000, 'DJI', 'Mavic 3 Pro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Other', NULL, NULL, '6M', 'Not Lease', NULL, 'None', '4', 'https://www.example.com', NULL, NULL, 'Y', 'N', NULL, 'Test-cons-3210', 'Y', 'Contact Seller', '2023-08-14 19:15:29', '2024-03-06 19:53:28'),
(20, 25, '1', '2', 69, NULL, NULL, 'Small', NULL, 'Com', '2023-10-06', 'Panaji', 7, 'All', 54520, 'Aeronica Advanced Technologies', 'Skykeeper X2', 'Hybrid-Electric', 'Multi-Rotor', NULL, NULL, NULL, NULL, NULL, 'Agriculture Spraying', NULL, NULL, '2Y', 'Lease', NULL, NULL, '19', 'https://www.example.com', NULL, 'N', 'Y', 'N', NULL, 'Com-4854', 'Y', 'Contact Seller', '2023-08-14 19:21:25', '2024-03-06 19:54:28'),
(21, 25, '2', '6', 52, NULL, 'Wheels', NULL, NULL, 'Test', '2023-10-06', 'Vagator', 7, 'All', 55000, 'Test', 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6M', 'Lease', '@test', NULL, '4', 'https://www.example.com', NULL, NULL, 'N', 'Y', NULL, 'Test-7490', 'Y', 'Contact Seller', '2023-08-14 19:29:38', '2024-03-19 22:36:30'),
(22, 25, '3', '3', 26, NULL, NULL, NULL, 'For fishing', 'Test', '2023-09-26', 'Palolem', 7, 'All', 600000, 'Robot', 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Fuel', '6M', 'Lease', NULL, NULL, '220', 'https://www.example.com', 'Test', NULL, 'Y', 'Y', NULL, 'Test-8861', 'Y', 'Contact Seller', '2023-08-14 19:32:37', '2024-03-06 19:53:16'),
(23, 25, '1', '2', 13, NULL, NULL, 'Nano', NULL, 'Commercial test', '2023-12-27', 'Mamit', 18, 'All', 1000, 'Asap Agritech', 'Avtaar AG1.04', 'Hybrid-Electric', 'Fixed Wing', 'test', NULL, NULL, 'test', NULL, 'Camera Drone', NULL, NULL, '2Y', 'Not Lease', NULL, NULL, '12', 'https://www.example.com', NULL, 'N', 'N', 'N', '2 days', 'Commercial-test-5343', 'Y', 'Contact Seller', '2023-09-26 13:41:41', '2024-02-03 17:46:41'),
(25, 25, '1', '1', 26, NULL, NULL, 'Micro', NULL, 'Testcon', '2023-12-27', 'Bajali', 4, 'All', 16000, 'Flotanomers', 'AirDoe', NULL, NULL, 'test', NULL, NULL, 'test', NULL, 'Camera Drone', NULL, NULL, '6M', 'Lease', NULL, '15', '2', 'https://www.example.com', NULL, NULL, 'Y', 'N', '5', 'Testcon-8422', 'Y', 'Contact Seller', '2023-09-26 16:37:24', '2024-01-22 13:36:45'),
(26, 25, '1', '1', 17, NULL, NULL, 'Micro', NULL, 'Test', '2023-10-06', 'Alluri Sitharama Raju', 2, 'All', 18000, 'DJI', 'Avata', NULL, NULL, 'Test', NULL, NULL, 'Test', NULL, 'Camera Drone', NULL, NULL, '1Y', 'Lease', NULL, '23%', '3', 'https://www.example.com', NULL, NULL, 'N', 'Y', '7', 'Test-5544', 'Y', 'Contact Seller', '2023-10-06 18:43:32', '2024-02-29 13:56:08'),
(27, 25, '1', '2', 39, NULL, NULL, 'Small', NULL, 'Test1', '2024-01-24', 'East Siang', 3, 'All', 15500, 'Asap Agritech', 'Avtaar AG1.04', 'Solar + Electric', 'Multi-Rotor', 'Test', NULL, NULL, NULL, NULL, 'Crop Monitoring', NULL, NULL, '6M', 'Lease', NULL, NULL, '6', 'https://www.example.com', NULL, 'Y', 'N', 'Y', '5', 'Test1-7968', 'Y', 'Contact Seller', '2023-10-06 18:47:13', '2024-02-29 14:06:47'),
(28, 25, '2', '7', 46, NULL, 'Video Transmitters', NULL, NULL, 'Test3', '2024-01-24', 'Bilaspur', 6, 'All', 25500, 'Test', 'Test', NULL, NULL, 'Test', NULL, NULL, 'Test', NULL, NULL, NULL, NULL, '2Y', 'Lease', '@', '20%', '7', NULL, NULL, NULL, 'N', 'Y', '4', 'Test3-7678', 'Y', 'Contact Seller', '2023-10-06 18:52:02', '2024-03-25 01:47:32'),
(29, 25, '3', '3', 54, NULL, NULL, NULL, 'Human Support', 'Test', '2024-01-24', 'Changlang', 3, 'All', 165000, 'Test', 'Test', NULL, NULL, 'Test', NULL, NULL, 'Test', NULL, NULL, NULL, 'Fuel + Electric', '2Y', 'Lease', NULL, '2', '2', 'https://www.example.com', '@test', NULL, 'N', 'Y', '6 days', 'Test-5735', 'N', 'Contact Seller', '2023-10-06 18:55:53', '2024-03-01 17:24:03'),
(30, 25, '1', '1', 22, NULL, NULL, 'Micro', NULL, 'Test', '2024-01-26', NULL, 24, 'All', 0, 'DJI', 'Air 3', NULL, NULL, 'Consumer drone', NULL, NULL, 'Drone', NULL, 'Racing Drone', NULL, NULL, '2Y', 'Lease', NULL, '2%', '1', 'https://www.example.com', NULL, NULL, 'N', 'Y', '5 days', 'Test-7999', 'Y', 'Contact Seller', '2023-11-17 20:50:06', '2024-03-04 11:47:50'),
(31, 50, '1', '1', 7, NULL, NULL, 'Nano', NULL, 'Test', '2024-03-07', 'Coimbatore', 24, 'All', 5000, 'Defy Aerospace', 'Solfox Mini', NULL, NULL, 'Test', NULL, NULL, NULL, NULL, 'Camera Drone', NULL, NULL, '6M', 'Lease', NULL, '2 %', '2', 'https://www.example.com', NULL, NULL, 'N', 'N', 'Within 2 days', 'Test-8139', 'Y', 'Contact Seller', '2024-01-22 19:58:11', '2024-03-25 16:01:19'),
(33, 50, '1', '1', 12, NULL, NULL, 'Nano', NULL, 'Test', '2024-01-22', 'Changlang', 3, 'All', 60000, 'IZI', 'IZI Pro Nano', NULL, NULL, 'Test', NULL, NULL, NULL, NULL, 'Camera Drone', NULL, NULL, '2Y', 'Lease', NULL, '3', '18', 'https://www.example.com', NULL, NULL, 'N', 'Y', 'within 2 days', 'Test-4345', 'Y', 'Contact Seller', '2024-01-22 20:02:58', '2024-03-25 17:30:31'),
(36, 43, '1', '1', 6, NULL, NULL, NULL, NULL, 'd', '2024-01-31', 'e', 30, 'All', 555, 'Defy Aerospace', 'Solfox Mini', NULL, NULL, 'des', NULL, NULL, 'ds', NULL, 'Camera Drone', NULL, NULL, '2Y', 'Lease', NULL, NULL, '1', 'https://www.example.com', NULL, NULL, 'N', 'N', 'r', 'd-5526', 'Y', 'Contact Seller', '2024-01-30 06:58:37', '2024-03-25 16:44:53'),
(37, 43, '1', '1', NULL, NULL, NULL, 'Nano', NULL, 'fd', '2024-01-31', 'Eluru', 2, 'All', 34, 'Defy Aerospace', 'Solfox Mini', NULL, NULL, '324', NULL, NULL, '312', NULL, 'Camera Drone', NULL, NULL, '2Y', 'Lease', NULL, '342', '17', NULL, NULL, NULL, 'N', 'Y', '423', 'fd-9253', 'P', 'Contact Seller', '2024-01-31 01:57:10', '2024-01-31 01:57:10'),
(38, 43, '3', '3', NULL, NULL, NULL, NULL, 'Human Support', 'f', '2024-01-31', 'Wayanad', 13, 'All', 4, '4', '4', NULL, NULL, '4', NULL, NULL, '4', NULL, NULL, NULL, 'Fuel', '2Y', 'Lease', NULL, NULL, '16', NULL, '444', NULL, 'N', 'N', '4', 'f-7223', 'Y', 'Contact Seller', '2024-01-31 02:30:38', '2024-01-31 05:23:03'),
(39, 43, '2', '5', NULL, NULL, 'Cameras', NULL, NULL, 'sdfs', '2024-01-31', 'Kalaburagi', 12, 'All', 423, 'fsdf', 'sdf', NULL, NULL, 'dfsdfdf', NULL, NULL, 'sdfsdf', NULL, NULL, NULL, NULL, '1Y', 'Lease', NULL, NULL, '17', NULL, NULL, NULL, 'N', 'Y', '234', 'sdfs-6459', 'P', 'Contact Seller', '2024-01-31 05:32:48', '2024-01-31 05:32:48'),
(40, 25, '3', '3', 8, NULL, 'Cameras', NULL, 'Home', 'Testrobo', '2024-03-11', 'LAksha', 36, 'All', 1500, 'DJi', 'dji', NULL, NULL, 'TEst', NULL, NULL, 'Test', NULL, NULL, NULL, 'Fuel', '2Y', 'Lease', NULL, NULL, '19', NULL, '@certified', NULL, 'N', 'N', '2', 'Testrobo-8893', 'Y', 'Contact Seller', '2024-03-11 13:24:41', '2024-03-25 15:38:07'),
(41, 43, '1', '1', NULL, NULL, NULL, 'Micro', NULL, 'trr', '2024-04-12', 'Anakapalli', 2, 'All', 5221, 'Defy Aerospace', 'Solfox Mini', NULL, NULL, 'Test', NULL, NULL, 'Tets', NULL, 'Other', NULL, NULL, '2Y', 'Lease', NULL, NULL, '16', NULL, NULL, NULL, 'N', 'N', 'two days', 'trr-7106', 'Y', 'Contact Seller', '2024-04-12 18:45:37', '2024-04-12 18:45:58'),
(42, 43, '1', '2', NULL, NULL, NULL, 'Micro', NULL, 'ynn', '2024-04-12', 'Alluri Sitharama Raju', 2, 'All', 111, 'Aeronica Advanced Technologies', 'Skykeeper X2', 'Electric', 'Fixed Wing', 'Tesg', NULL, NULL, 'Tesst', NULL, 'Camera Drone', NULL, NULL, '1Y', 'Lease', NULL, NULL, '3', NULL, NULL, NULL, 'N', 'N', 'two daya', 'ynn-4132', 'Y', 'Contact Seller', '2024-04-12 18:48:16', '2024-04-12 18:48:16');

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
(1, 1, '1', '1690028740garuda-aerospace-pr-jan-o4-2023.png', '2023-07-22 19:25:40', '2023-07-22 19:25:40'),
(2, 1, '2', '1690028740dgca-approved-agriculture-drone-2.webp', '2023-07-22 19:25:40', '2023-07-22 19:25:40'),
(3, 1, '3', '1690028740Kisan Drone-Garuda Aerospace.jpg', '2023-07-22 19:25:40', '2023-07-22 19:25:40'),
(5, 2, '1', '1690030545agribot-drone-iotech-world-m3.png', '2023-07-22 19:55:45', '2023-07-22 19:55:45'),
(6, 2, '2', '1690030545agribot-drone-iotech-world-m2.png', '2023-07-22 19:55:45', '2023-07-22 19:55:45'),
(7, 2, '3', '1690030545iotechworld-graphic.jpg', '2023-07-22 19:55:45', '2023-07-22 19:55:45'),
(8, 3, '1', '1690031538model-v-training-drone.png', '2023-07-22 20:12:18', '2023-07-22 20:12:18'),
(9, 3, '2', '1690031538model-v-cbai.webp', '2023-07-22 20:12:18', '2023-07-22 20:12:18'),
(10, 4, '1', '1690032622UMT-4.jpg', '2023-07-22 20:30:22', '2023-07-22 20:30:22'),
(11, 4, '2', '1690032622DGCA-TC-HAWK-4G-DRONE.jpg', '2023-07-22 20:30:22', '2023-07-22 20:30:22'),
(12, 4, '3', '1690032622umt-launchpad-app.png', '2023-07-22 20:30:22', '2023-07-22 20:30:22'),
(13, 5, '1', '1690035886UMT-3.jpg', '2023-07-22 21:24:46', '2023-07-22 21:24:46'),
(14, 5, '2', '1690035886DGCA-TC-HAWK-4G-DRONE.jpg', '2023-07-22 21:24:46', '2023-07-22 21:24:46'),
(15, 6, '1', '1690037074nextcc-4g-module.png', '2023-07-22 21:44:34', '2023-07-22 21:44:34'),
(16, 6, '2', '1690037074nextcc-4g-module-layer.png', '2023-07-22 21:44:34', '2023-07-22 21:44:34'),
(17, 6, '3', '1690037074matrixcc-how-it-works.png', '2023-07-22 21:44:34', '2023-07-22 21:44:34'),
(18, 7, '1', '1690038095emvirt-dronehawk-box.jpg', '2023-07-22 22:01:35', '2023-07-22 22:01:35'),
(19, 7, '2', '1690038095emvirt-dronehawk-box-4.jpg', '2023-07-22 22:01:35', '2023-07-22 22:01:35'),
(21, 8, '1', '1690126880A.png', '2023-07-23 22:41:20', '2023-07-23 22:41:20'),
(22, 8, '2', '1690126880B.png', '2023-07-23 22:41:20', '2023-07-23 22:41:20'),
(23, 8, '3', '1690126880C (1).png', '2023-07-23 22:41:20', '2023-07-23 22:41:20'),
(24, 8, '4', '1690126880D.png', '2023-07-23 22:41:20', '2023-07-23 22:41:20'),
(25, 9, '1', '1690132356IZI-SKY-OA.png', '2023-07-24 00:12:36', '2023-07-24 00:12:36'),
(26, 9, '2', '1690132356IZI-SKY-OA-2.png', '2023-07-24 00:12:36', '2023-07-24 00:12:36'),
(27, 9, '3', '1690132356IZI-SKY-OA-3.png', '2023-07-24 00:12:36', '2023-07-24 00:12:36'),
(28, 9, '4', '1690132356IZI-SKY-OA-4.png', '2023-07-24 00:12:36', '2023-07-24 00:12:36'),
(29, 10, '1', '1691145524IZI-PRO-NANO-DRONE.jpg', '2023-08-04 17:38:44', '2023-08-04 17:38:44'),
(30, 10, '2', '1691145524IZI-PRO-NANO-DRONE-2.jpg', '2023-08-04 17:38:44', '2023-08-04 17:38:44'),
(31, 10, '3', '1691145524IZI-PRO-NANO-DRONE-3.jpg', '2023-08-04 17:38:45', '2023-08-04 17:38:45'),
(32, 10, '4', '1691145525IZI-PRO-NANO-DRONE-BATTLE-MODE.jpg', '2023-08-04 17:38:45', '2023-08-04 17:38:45'),
(35, 1, '4', '16912372941690028740dgca-approved-agriculture-drone-1000x1000.webp', '2023-08-05 19:08:14', '2023-08-05 19:08:14'),
(36, 7, '3', '16912373841690038095emvirt-dronehawk-box-5.jpg', '2023-08-05 19:09:44', '2023-08-05 19:09:44'),
(37, 13, '1', '1691240571Con.jpg', '2023-08-05 20:02:51', '2023-08-05 20:02:51'),
(38, 13, '2', '1691240944com.jpg', '2023-08-05 20:02:51', '2023-08-05 20:09:04'),
(40, 14, '1', '1691241427com2.jpg', '2023-08-05 20:17:07', '2023-08-05 20:17:07'),
(41, 14, '2', '1691241427com2.jpg', '2023-08-05 20:17:07', '2023-08-05 20:17:07'),
(42, 14, '3', '1691241427com2.jpg', '2023-08-05 20:17:07', '2023-08-05 20:17:07'),
(44, 15, '1', '1691241763acce2.jpg', '2023-08-05 20:22:43', '2023-08-05 20:22:43'),
(45, 15, '2', '1691241763acce2.jpg', '2023-08-05 20:22:43', '2023-08-05 20:22:43'),
(47, 16, '1', '1691242423Robot.jpg', '2023-08-05 20:33:43', '2023-08-05 20:33:43'),
(48, 16, '2', '1691242423Robot.jpg', '2023-08-05 20:33:43', '2023-08-05 20:33:43'),
(51, 17, '1', '169133849645E24CB3-1C5E-4532-BAC6-75299EE70A02.webp', '2023-08-06 23:14:56', '2023-08-06 23:14:56'),
(52, 18, '1', '169134065547BDD6FE-AE74-4DAA-8CFB-CF91381FEA81.webp', '2023-08-06 23:50:55', '2023-08-06 23:50:55'),
(56, 20, '1', '1692015685com.jpg', '2023-08-14 19:21:25', '2023-08-14 19:21:25'),
(57, 20, '2', '1692015685com.jpg', '2023-08-14 19:21:25', '2023-08-14 19:21:25'),
(58, 20, '3', '1692015685com.jpg', '2023-08-14 19:21:25', '2023-08-14 19:21:25'),
(59, 21, '1', '1692016178acce2.jpg', '2023-08-14 19:29:38', '2023-08-14 19:29:38'),
(60, 21, '2', '1692016178acce2.jpg', '2023-08-14 19:29:38', '2023-08-14 19:29:38'),
(61, 22, '1', '1692016357Robot.jpg', '2023-08-14 19:32:37', '2023-08-14 19:32:37'),
(62, 23, '1', '1703656389com.jpg', '2023-09-26 13:41:41', '2023-12-27 12:53:09'),
(66, 27, '1', '1696592833com.jpg', '2023-10-06 18:47:13', '2023-10-06 18:47:13'),
(67, 28, '1', '1696593122acce2.jpg', '2023-10-06 18:52:02', '2023-10-06 18:52:02'),
(68, 29, '1', '1696593353Robot.jpg', '2023-10-06 18:55:53', '2023-10-06 18:55:53'),
(70, 27, '2', '1704782731commercial.jpg', '2024-01-09 13:45:31', '2024-01-09 13:45:31'),
(71, 27, '3', '1704782731commercial.jpg', '2024-01-09 13:45:31', '2024-01-09 13:45:31'),
(72, 27, '4', '1704782731commercial.jpg', '2024-01-09 13:45:31', '2024-01-09 13:45:31'),
(73, 27, '5', '1704782731commercial.jpg', '2024-01-09 13:45:31', '2024-01-09 13:45:31'),
(74, 28, '2', '1704786323accessories.jpg', '2024-01-09 14:45:23', '2024-01-09 14:45:23'),
(75, 28, '3', '1704786323accessories.jpg', '2024-01-09 14:45:23', '2024-01-09 14:45:23'),
(76, 28, '4', '1704786323accessories.jpg', '2024-01-09 14:45:23', '2024-01-09 14:45:23'),
(77, 29, '2', '1704786350robots.jpg', '2024-01-09 14:45:50', '2024-01-09 14:45:50'),
(78, 29, '3', '1704786350robots.jpg', '2024-01-09 14:45:50', '2024-01-09 14:45:50'),
(79, 29, '4', '1704786350robots.jpg', '2024-01-09 14:45:50', '2024-01-09 14:45:50'),
(80, 29, '5', '1704786350robots.jpg', '2024-01-09 14:45:50', '2024-01-09 14:45:50'),
(81, 31, '1', '1705928291consumer.jpg', '2024-01-22 19:58:11', '2024-01-22 19:58:11'),
(82, 31, '2', '1705928291consumer.jpg', '2024-01-22 19:58:11', '2024-01-22 19:58:11'),
(83, 31, '3', '1705928291consumer.jpg', '2024-01-22 19:58:11', '2024-01-22 19:58:11'),
(84, 31, '4', '1705928291consumer.jpg', '2024-01-22 19:58:11', '2024-01-22 19:58:11'),
(85, 31, '5', '1705928291consumer.jpg', '2024-01-22 19:58:11', '2024-01-22 19:58:11'),
(91, 33, '1', '1705928578consumer.jpg', '2024-01-22 20:02:58', '2024-01-22 20:02:58'),
(93, 35, '1', '1705928818commercial.jpg', '2024-01-22 20:05:49', '2024-01-22 20:06:58'),
(94, 36, '1', '1706677314consumer.jpg', '2024-01-31 12:01:54', '2024-01-31 12:01:54'),
(99, 36, '2', '1706678251consumer.jpg', '2024-01-31 12:17:31', '2024-01-31 12:17:31'),
(100, 36, '3', '1706678251consumer.jpg', '2024-01-31 12:17:31', '2024-01-31 12:17:31'),
(101, 36, '4', '1706678251consumer.jpg', '2024-01-31 12:17:31', '2024-01-31 12:17:31'),
(102, 36, '5', '1706678251consumer.jpg', '2024-01-31 12:17:31', '2024-01-31 12:17:31'),
(103, 37, '1', '1706695704commercial.jpg', '2024-01-31 17:08:24', '2024-01-31 17:08:24'),
(104, 37, '2', '1706695946commercial.jpg', '2024-01-31 17:12:26', '2024-01-31 17:12:26'),
(105, 37, '3', '1706695946commercial.jpg', '2024-01-31 17:12:26', '2024-01-31 17:12:26'),
(106, 38, '1', '1706697036robots.jpg', '2024-01-31 17:30:36', '2024-01-31 17:30:36'),
(107, 39, '1', '1706702273accessories.jpg', '2024-01-31 18:57:53', '2024-01-31 18:57:53'),
(108, 40, '1', '1710138281consumer drone.png', '2024-03-11 13:24:41', '2024-03-11 13:24:41'),
(109, 41, '1', '1712902537b&d.png', '2024-04-12 18:45:37', '2024-04-12 18:45:37'),
(110, 42, '1', '1712902696b&d1.jpg', '2024-04-12 18:48:16', '2024-04-12 18:48:16');

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
(1, 1, 'Max Flight Endurance', '15 Minutes', '2023-07-10 01:40:05', '2023-08-06 19:28:09'),
(4, 1, 'Max Take Off Weight', '24.56', '2023-07-10 01:40:05', '2023-08-06 19:28:09'),
(7, 2, 'Max Take off Weight', '23.2 kg', '2023-07-10 02:14:51', '2023-08-06 19:05:16'),
(8, 3, 'Max Speed', '16 m/s', '2023-07-10 02:43:58', '2023-08-06 20:03:13'),
(9, 3, 'Max Endurance', '40 minutes', '2023-07-10 02:43:58', '2023-08-06 20:03:13'),
(12, 4, 'Max Speed', '43 km/h', '2023-07-10 03:13:42', '2023-08-06 20:16:13'),
(13, 4, 'Max Endurance', '59 minutes', '2023-07-10 03:13:42', '2023-08-06 20:16:13'),
(14, 4, 'Max Weight', '3.2 kgs', '2023-07-10 03:13:42', '2023-08-06 20:16:13'),
(15, 4, 'Max Altitude', '400 feet', '2023-07-10 03:13:42', '2023-08-06 20:16:13'),
(17, 5, 'Max Speed', '43.2 km/h', '2023-07-16 00:36:55', '2023-08-06 20:26:04'),
(19, 5, 'Max Endurance', '59 Minutes', '2023-07-16 00:36:55', '2023-08-06 20:26:04'),
(24, 13, 'Test', '1', '2023-08-05 20:02:51', '2023-08-05 20:02:51'),
(25, 13, 'Test', '2', '2023-08-05 20:02:51', '2023-08-05 20:02:51'),
(26, 13, 'Test', '3', '2023-08-05 20:02:51', '2023-08-05 20:02:51'),
(28, 14, 'Test', '1', '2023-08-05 20:17:07', '2023-08-05 20:17:07'),
(29, 14, 'Test', '2', '2023-08-05 20:17:07', '2023-08-05 20:17:07'),
(30, 14, 'Test', '3', '2023-08-05 20:17:07', '2023-08-05 20:17:07'),
(33, 15, 'Test', '1', '2023-08-05 20:22:43', '2023-08-05 20:22:43'),
(34, 15, 'Test', '2', '2023-08-05 20:22:43', '2023-08-05 20:22:43'),
(35, 15, 'Test', '3', '2023-08-05 20:22:43', '2023-08-05 20:22:43'),
(37, 16, 'Test', '1', '2023-08-05 20:33:43', '2023-08-05 20:33:43'),
(38, 16, 'Test', '2', '2023-08-05 20:33:43', '2023-08-05 20:33:43'),
(45, 8, 'Weight', '530 gms', '2023-08-06 18:09:14', '2023-08-06 18:09:14'),
(46, 8, 'Max Altitude', '800 metres', '2023-08-06 18:09:14', '2023-08-06 18:09:14'),
(47, 8, 'Max Flight Time', '70 minutes', '2023-08-06 18:20:56', '2023-08-06 18:20:56'),
(48, 8, 'Max Speed', '62 km/h', '2023-08-06 18:24:14', '2023-08-06 18:24:14'),
(49, 8, 'Camera', '20 MP', '2023-08-06 18:28:36', '2023-08-06 18:28:36'),
(51, 2, 'Maximum Flight Time', '20 minutes', '2023-08-06 19:05:16', '2023-08-06 19:05:16'),
(52, 2, 'Maximum Speed', '8 m/s', '2023-08-06 19:05:16', '2023-08-06 19:05:16'),
(53, 2, 'Maximum Flying Height', '98.43 feet', '2023-08-06 19:05:16', '2023-08-06 19:50:53'),
(54, 2, 'Maximum Range LOS', '5 km', '2023-08-06 19:05:16', '2023-08-06 19:05:16'),
(58, 1, 'Max Altitude', '49.21 feet', '2023-08-06 19:47:43', '2023-08-06 19:47:43'),
(60, 3, 'Max Weight', '5.43 kgs', '2023-08-06 20:03:13', '2023-08-06 20:03:13'),
(61, 3, 'Max Altitude', '400 feet', '2023-08-06 20:03:13', '2023-08-06 20:03:13'),
(62, 3, 'Max Range VLOS', '440 metres', '2023-08-06 20:06:36', '2023-08-06 20:06:36'),
(64, 4, 'Max Range', '15 Km', '2023-08-06 20:16:13', '2023-08-06 20:16:13'),
(65, 5, 'Max Take Off Weight', '3.2 kgs', '2023-08-06 20:26:04', '2023-08-06 20:26:04'),
(66, 5, 'Max Altitude', '400 feet', '2023-08-06 20:26:04', '2023-08-06 20:26:04'),
(67, 5, 'Max Range LOS', '15 km', '2023-08-06 20:26:04', '2023-08-06 20:26:04'),
(68, 17, 'Weight', '75 Kg', '2023-08-06 23:14:56', '2023-08-06 23:14:56'),
(69, 17, 'Endurance', '12 hours', '2023-08-06 23:14:56', '2023-08-06 23:14:56'),
(70, 17, 'Voltage', '24V DC', '2023-08-06 23:14:56', '2023-08-06 23:14:56'),
(71, 17, 'Battery', '40000 mah', '2023-08-06 23:14:56', '2023-08-06 23:14:56'),
(72, 18, 'Max Speed', '25 km/h', '2023-08-06 23:50:55', '2023-08-06 23:50:55'),
(73, 18, 'Weight', '45 kg', '2023-08-06 23:50:55', '2023-08-06 23:50:55'),
(75, 18, 'Battery', '40000 mah', '2023-08-06 23:50:55', '2023-08-06 23:50:55'),
(76, 1, 'Spray Tank Volume 10', '10 Litres', '2023-08-07 12:04:16', '2023-08-07 12:04:16'),
(77, 1, 'Max Speed', '5 m/s', '2023-08-07 16:43:22', '2023-08-07 16:43:22'),
(78, 13, 'Test', '4', '2023-08-08 12:56:31', '2023-08-08 12:56:31'),
(80, 13, 'Test', '6', '2023-08-08 12:56:31', '2023-08-08 12:56:31'),
(81, 14, 'Test', '5', '2023-08-08 13:05:33', '2023-08-08 13:05:33'),
(82, 14, 'Test', '6', '2023-08-08 13:05:33', '2023-08-08 13:05:33'),
(83, 15, 'Test', '4', '2023-08-08 13:10:52', '2023-08-08 13:10:52'),
(84, 15, 'Test', '6', '2023-08-08 13:10:52', '2023-08-08 13:10:52'),
(85, 15, 'Test', '7', '2023-08-08 13:10:52', '2023-08-08 13:10:52'),
(86, 16, 'Test', '3', '2023-08-08 13:31:42', '2023-08-08 13:31:42'),
(88, 16, 'Test', '6', '2023-08-08 13:31:42', '2023-08-08 13:31:42'),
(89, 18, 'Endurance', '3 Hours', '2023-08-09 13:22:01', '2023-08-09 13:22:01'),
(90, 10, 'Weight', '68 gms', '2023-08-09 13:26:22', '2023-08-09 13:26:22'),
(91, 10, 'Flying Time', '10 Minutes', '2023-08-09 13:26:22', '2023-08-09 13:26:22'),
(94, 10, 'Camera', '720 P HD', '2023-08-09 13:26:22', '2023-08-09 13:26:22'),
(95, 19, 'Test', '1', '2023-08-14 19:15:29', '2023-08-14 19:15:29'),
(96, 19, 'Test', '2', '2023-08-14 19:15:29', '2023-08-14 19:15:29'),
(97, 19, 'Test', '3', '2023-08-14 19:15:29', '2023-08-14 19:15:29'),
(99, 19, 'Test', '4', '2023-08-14 19:15:29', '2023-08-14 19:15:53'),
(100, 20, 'Test', '1', '2023-08-14 19:21:25', '2023-08-14 19:21:25'),
(101, 20, 'Test', '2', '2023-08-14 19:21:25', '2023-08-14 19:21:25'),
(102, 20, 'Test', '3', '2023-08-14 19:21:25', '2023-08-14 19:21:25'),
(103, 20, 'Test', '4', '2023-08-14 19:21:25', '2023-08-14 19:21:25'),
(104, 20, 'Test', '5', '2023-08-14 19:21:25', '2023-08-14 19:21:25'),
(105, 21, 'Test', '1', '2023-08-14 19:29:38', '2023-08-14 19:29:38'),
(106, 21, 'Test', '2', '2023-08-14 19:29:38', '2023-08-14 19:29:38'),
(107, 21, 'Test', '3', '2023-08-14 19:29:38', '2023-08-14 19:29:38'),
(108, 21, 'Test', '4', '2023-08-14 19:29:38', '2023-08-14 19:29:38'),
(109, 22, 'Test', '1', '2023-08-14 19:32:37', '2023-08-14 19:32:37'),
(110, 25, 'Test', '1', '2023-09-26 16:37:24', '2023-09-26 16:37:24'),
(111, 26, 'Test', '1', '2023-10-06 18:43:32', '2023-10-06 18:43:32'),
(112, 27, 'Test', '1', '2023-10-06 18:47:13', '2023-10-06 18:47:13'),
(113, 28, 'Test', '1', '2023-10-06 18:52:02', '2023-10-06 18:52:02'),
(114, 29, 'Test', '1', '2023-10-06 18:55:53', '2023-10-06 18:55:53'),
(115, 30, 'Test', '1', '2023-11-17 20:50:06', '2023-11-17 20:50:06'),
(116, 31, 'Test', '1', '2024-01-22 19:58:11', '2024-01-22 19:58:11'),
(117, 31, 'Test', '2', '2024-01-22 19:58:11', '2024-01-22 19:58:11'),
(119, 33, 'Test', '1', '2024-01-22 20:02:58', '2024-01-22 20:02:58'),
(121, 35, 'Test', '1', '2024-01-22 20:05:49', '2024-01-22 20:05:49'),
(122, 38, 'Test', '1', '2024-01-31 17:37:51', '2024-01-31 17:37:51');

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
(11, 'Cleaning Robot', 'Inactive', NULL, NULL),
(12, 'For fishing', 'Active', NULL, NULL);

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
(2, 'Andhra Pradesh', 'Active', NULL, NULL),
(3, 'Arunachal Pradesh', 'Active', NULL, NULL),
(4, 'Assam', 'Active', NULL, NULL),
(5, 'Bihar ', 'Active', NULL, NULL),
(6, 'Chhattisgarh', 'Active', NULL, NULL),
(7, 'Goa', 'Active', NULL, NULL),
(8, 'Gujarat', 'Active', NULL, NULL),
(9, 'Haryana', 'Active', NULL, NULL),
(10, 'Himachal Pradesh', 'Active', NULL, NULL),
(11, 'Jharkhand', 'Active', NULL, NULL),
(12, 'Karnataka', 'Active', NULL, NULL),
(13, 'Kerala', 'Active', NULL, NULL),
(14, 'Madhya Pradesh', 'Active', NULL, NULL),
(15, 'Maharashtra', 'Active', NULL, NULL),
(16, 'Manipur', 'Active', NULL, NULL),
(17, 'Meghalaya', 'Active', NULL, NULL),
(18, 'Mizoram', 'Active', NULL, NULL),
(19, 'Nagaland', 'Active', NULL, NULL),
(20, 'Odisha', 'Active', NULL, NULL),
(21, 'Punjab', 'Active', NULL, NULL),
(22, 'Rajasthan', 'Active', NULL, NULL),
(23, 'Sikkim', 'Active', NULL, NULL),
(24, 'Tamil Nadu', 'Active', NULL, NULL),
(25, 'Telangana ', 'Active', NULL, NULL),
(26, 'Tripura', 'Active', NULL, NULL),
(27, 'Uttarakhand', 'Active', NULL, NULL),
(28, 'Uttar Pradesh ', 'Active', NULL, NULL),
(29, 'West Bengal', 'Active', NULL, NULL),
(30, 'Andaman & Nicobar', 'Active', '2024-01-26 15:12:52', '2024-01-26 15:12:52'),
(31, 'Chandigarh', 'Active', '2024-01-26 15:13:09', '2024-01-26 15:13:09'),
(32, 'Dadra and Nagar Haveli', 'Active', '2024-01-26 15:13:21', '2024-01-26 15:13:21'),
(33, 'Delhi', 'Active', '2024-01-26 15:13:36', '2024-01-26 15:13:36'),
(34, 'Jammu and Kashmir', 'Active', '2024-01-26 15:13:48', '2024-01-26 15:13:48'),
(35, 'Ladakh', 'Active', '2024-01-26 15:14:05', '2024-01-26 15:14:05'),
(36, 'Lakshadweep', 'Active', '2024-01-26 15:14:21', '2024-01-31 14:51:08'),
(37, 'Puducherry', 'Active', '2024-01-26 15:14:31', '2024-01-26 15:14:31');

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
(3, 25, 'standard', '2024-04-12 18:41:25', '2024-04-12 18:41:25', 'inactive'),
(4, 43, 'standard', '2024-04-12 18:46:29', '2024-04-12 18:46:48', 'active');

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
(1, 1, 'Consumer Drones', 'Consumer UAV', 'b&d-890205754-04_15_2024_01_07_pm.png', 'b&d-296782728-04_15_2024_01_07_pm.png', 'Y', 'Consumer-drones-9987', 'Active', '2022-09-21 18:57:04', '2024-04-15 20:07:28'),
(2, 1, 'Commercial Drones', 'Commerical UAV', 'WhatsApp Image 2023-02-04 at 7.05.34 PM (1)-1051701949-02_06_2023_01_58_pm.jpeg', 'Image[5050]-324901036-08_01_2023_11_41_am.jpeg', 'Y', 'Commercial-drones-9222', 'Active', '2022-09-21 18:57:04', '2023-08-01 18:41:26'),
(3, 3, 'Consumer Use', NULL, 'con robo 1-1682209143-11_07_2022_01_03_pm.jpg', 'cons robo banner-748647221-11_07_2022_01_03_pm.webp', 'Y', 'Consumer-robots-19987', 'Active', '2022-09-21 18:57:04', '2022-11-07 20:03:52'),
(4, 3, 'Commercial Use', NULL, 'robot 2-1311712866-11_07_2022_01_05_pm.jpg', 'com robo banner-2022360266-11_07_2022_01_05_pm.png', 'Y', 'Commercial-Robots-98888', 'Active', '2022-09-21 18:57:04', '2022-11-07 20:05:07'),
(5, 2, 'Consumer Drones', NULL, 'con robo 1-1682209143-11_07_2022_01_03_pm.jpg', 'cons robo banner-748647221-11_07_2022_01_03_pm.webp', 'Y', 'Consumer-accessories-drones-199287', 'Active', '2022-09-21 18:57:04', '2022-11-07 20:03:52'),
(6, 2, 'Commercial Drones', NULL, 'robot 2-1311712866-11_07_2022_01_05_pm.jpg', 'com robo banner-2022360266-11_07_2022_01_05_pm.png', 'Y', 'Commercial-accessories-drones-199287', 'Active', '2022-09-21 18:57:04', '2022-11-07 20:05:07'),
(7, 2, 'Robots', NULL, 'robot 2-1311712866-11_07_2022_01_05_pm.jpg', 'com robo banner-2022360266-11_07_2022_01_05_pm.png', 'Y', 'Commercial-accessories-robots-1992287', 'Active', '2022-09-21 18:57:04', '2022-11-07 20:05:07'),
(8, 2, 'Any', NULL, 'robot 2-1311712866-11_07_2022_01_05_pm.jpg', 'com robo banner-2022360266-11_07_2022_01_05_pm.png', 'Y', 'Commercial-accessories-any-11221', 'Active', '2022-09-21 18:57:04', '2022-11-07 20:05:07');

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
(1, 'Supporting  partners1', 'bd2-1695053641-04_15_2024_12_26_pm.jpg', 'Inactive', '2024-04-15 06:57:36', '2024-04-15 19:27:36'),
(2, 'Supporting partner2', 'b&d1-565086451-04_15_2024_12_23_pm.jpg', 'Active', '2024-04-15 19:23:11', '2024-04-15 19:23:11'),
(3, 'Supporing 3', 'b&d-887339887-04_15_2024_12_23_pm.png', 'Active', '2024-04-15 19:23:30', '2024-04-15 19:23:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
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
  `country` varchar(255) DEFAULT 'India',
  `registered_number` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `seller` varchar(200) NOT NULL DEFAULT 'N',
  `otp_verified_at` varchar(200) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` varchar(200) DEFAULT NULL,
  `is_deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile_no`, `email_verified_at`, `password`, `company_name`, `registered_address`, `address1`, `address2`, `city`, `state`, `pincode`, `country`, `registered_number`, `company_email`, `company_phone`, `otp`, `seller`, `otp_verified_at`, `remember_token`, `created_at`, `updated_at`, `is_deleted`, `is_deleted_at`, `status`) VALUES
(1, 'Arun Thomas', 'hello@botsanddrones.co', '+91 9840079208', '2023-07-28 20:51:41', '$2y$10$7Lw57ctrABmL0DUrCulZiOdb4s901mnC5MUF9a5E.Y2rYwxVglkym', 'Aktiv Global', NULL, 'Harrington Rd', 'Chetpet', 'Chennai', 'Tamil Nadu', '600031', 'India', '33ABKPT6828L2ZZ', 'hello@botsanddrones.co', '+91 9840079208', '256892', 'Y', '2023-07-22', 'ZciudBtG0dH8QvhkABmjQ4FAsWkD2opy3NAuv8K7JiwikGpTn7TRLKa5DadZ', '2023-07-22 03:28:57', '2024-03-06 12:26:05', 'N', '0000-00-00 00:00:00', 'Active'),
(2, 'Arun TJ', 'aruntj@yahoo.com', '+91 9840035125', NULL, '$2y$10$IKCXr2WMWKu5Qx4.gwfmYunVqOrFN1toM1qX2RDP6IVr7h.hgXANS', 'Global Co Ltd', NULL, NULL, NULL, 'Sivakasi', NULL, NULL, 'India', NULL, NULL, NULL, '478632', '', '2023-08-06', NULL, '2023-07-22 22:39:35', '2023-08-06 22:29:42', 'N', '0000-00-00 00:00:00', 'Active'),
(3, 'Thomas J', 'aruntj@hotmail.com', '+91 9840035124', NULL, '$2y$10$FJNHFLAXV40Y7gm2jPCERe2Q.pX0RTE8Zg4E55m2U3Cnd0y4UrMxW', 'Thomas & Co', NULL, NULL, NULL, 'Chennai', NULL, NULL, 'India', NULL, NULL, NULL, '573359', '', '2023-08-06', NULL, '2023-07-23 23:22:23', '2023-08-07 00:10:55', 'N', '0000-00-00 00:00:00', 'Active'),
(4, 'Assan', 'hello@botsanddrones.asia', '+91 9840762476', '2023-07-28 20:51:41', '$2y$10$y6cmdRS1csJyE8hdE6/rB.A9LZhXsdLAvvuJqErwXfALdfa.N2WnG', 'XYZ Tech', NULL, 'No.62, paranur village, near old paranur rice mill,', 'Malayambakkam rd, Mahindra world city - 603002.', 'Chengelpet', 'Tamil Nadu', '600031', 'India', '22ABKPT6828L2ZZ', 'hello@botsanddrones.asia', '+91 9840762476', '510908', 'Y', '2023-07-25', NULL, '2023-07-23 23:47:36', '2023-08-08 15:55:10', 'N', '0000-00-00 00:00:00', 'Active'),
(5, 'Anand', 'dji@mailinator.com', '+91 9632541023', NULL, '$2y$10$BfU.StPAI/ieWd7Ds34TLud8WPfvvZzOS5goJSJBaqZg76bhMemWq', 'Dji', NULL, 'South Street', NULL, 'Chennai', 'Tamil Nadu', '609405', 'India', '123654887', 'dji@mailinator.com', '+91 6383222999', NULL, 'Y', NULL, NULL, '2023-08-04 15:18:30', '2023-08-04 15:18:30', 'N', '0000-00-00 00:00:00', 'Active'),
(8, 'Raju', 'swellpro@mailinator.com', '+91 365412000', '2023-08-05 19:54:56', '$2y$10$WqsbqWCCrP.GWoWNYFZ5NOYZ.K8XsxIZp8nFyq/qr06sw0NKEgpbe', 'Swellpro', NULL, 'Test', 'Test', 'Test', 'Himachal Pradesh', '123654', 'India', '123654', 'swellpro@mailinator.com', '+91 6383612262', NULL, 'Y', NULL, NULL, '2023-08-05 19:53:35', '2023-08-14 18:18:29', 'N', '0000-00-00 00:00:00', 'Active'),
(9, 'Mithun', 'mithun@mailinator.com', '6368057679', NULL, '$2y$10$6ODwNIXx6mSNVs.24ynOrumEpLbkwJxOASMyHUxaKd.n2.4avD6uu', 'Chakaravarthi', NULL, NULL, NULL, 'Chennai', NULL, NULL, 'India', NULL, NULL, '+44 ', '163234', '', NULL, NULL, '2023-08-08 13:50:57', '2024-03-01 14:24:53', 'N', '0000-00-00 00:00:00', 'Active'),
(10, 'Minnal', 'max@mailinator.com', '+91 9999999999', '2023-08-08 14:14:31', '$2y$10$2GclnP5Ni/tg7fvV1t4Fy.fj4XysbdEmDO8tTWsDLrveOqc2cNfjK', 'Djimax', NULL, 'Test', 'Tesst', 'Test', 'Mizoram', '9635241', 'testt', '632514', 'max@mailinator.com', '+91 6383612211', '916093', 'Y', NULL, NULL, '2023-08-08 14:13:14', '2023-08-11 18:40:53', 'N', '0000-00-00 00:00:00', 'Active'),
(14, 'Ananya', 'ananya11@mailinator.com', '+91 8610292918', NULL, '$2y$10$aiOaeNT2J0CxDdM0ZCvDVejDnPZNB9DoRV7VeGHv3LT3Cuq4jX1wS', 'Thulirsoft', NULL, NULL, NULL, 'Chennai', NULL, NULL, 'India', NULL, NULL, NULL, '265406', 'N', NULL, NULL, '2023-08-08 18:11:46', '2023-08-14 18:14:00', 'N', '0000-00-00 00:00:00', 'Active'),
(15, 'Ananya', 'thulir@mailinator.com', '+91 1234567890', '2023-08-08 18:35:36', '$2y$10$.JYZM2BQeVuzAS4allX7R.w44EV0VRG8ueApp.ONtCknjQR0u8d5q', 'Thulirsoft', NULL, 'Main Street', NULL, 'Chennai', 'Tamil Nadu', '614325', 'India', '6354123654', 'thulir@mailinator.com', '+91 6383614112', '467557', 'Y', NULL, NULL, '2023-08-08 18:33:36', '2023-08-08 18:36:24', 'N', '0000-00-00 00:00:00', 'Active'),
(16, 'Thoma', 'thomas@botsanddrones.co', '+91 9840035125', '2023-08-09 16:01:41', '$2y$10$edyPa40xcC88c3mEAPNhvurTsZvVOz/4YceMQC8XSdhDFwiuzURX2', 'UAV & Co.', NULL, NULL, NULL, 'Bengaluru', NULL, NULL, 'India', NULL, NULL, NULL, '703495', '', NULL, NULL, '2023-08-09 15:56:14', '2023-08-09 17:31:25', 'N', '0000-00-00 00:00:00', 'Active'),
(21, 'TJ', 'sales@botsanddrones.uk', '+44 7585212969', NULL, '$2y$10$NAUNbsvNP.uJVmSKR5TRru//ij3mhzMsTN/N9o3K4g4/QQPifHwLa', 'BD UK', NULL, NULL, NULL, 'Lincoln', NULL, NULL, 'United Kingdom', NULL, NULL, NULL, '246649', 'N', NULL, NULL, '2023-08-11 18:08:41', '2023-08-11 18:58:34', 'N', '0000-00-00 00:00:00', 'Active'),
(23, 'Arun Kumar Thomas', 'sales_leads@botsanddrones.in', '+91 9840080297', NULL, '$2y$10$sTKJ1ynCui6WO8RlkSOULeEglFtDg5Kebd2OMKPZbZoSNU7jCuljq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-08-14 15:34:28', '2023-08-14 15:34:28', 'N', '0000-00-00 00:00:00', 'Active'),
(24, 'Fireball', 'fire@mailinator.com', ' +916383614062', '2023-08-14 18:52:42', '$2y$10$DP8TguErlyYjNHVe5zpr4eXLalw82cBiSnT3IhSKT.CuQb1dSJd1e', 'abc', NULL, NULL, NULL, 'Chennai', NULL, NULL, 'India', NULL, NULL, '+44 ', '592857', '', NULL, NULL, '2023-08-14 18:33:04', '2024-03-25 01:47:00', 'Y', '0000-00-00 00:00:00', 'Active'),
(25, 'Ananthi', 'fireball@mailinator.com', '+91 9874521002', '2023-08-14 18:52:42', '$2y$10$6/dxpNJk4f37fzi0Ge35I.aUYPE87e8V2EhmfcjTPwWKNa8r5Fvre', 'Fire', NULL, '65,Main Street', NULL, 'Chennai', 'Tamil Nadu', '600231', 'India', '514263245LMNA', 'fireball@mailinator.com', '+91 6383612345', '680525', 'Y', NULL, NULL, '2023-08-14 18:50:34', '2024-03-07 14:17:07', 'N', '0000-00-00 00:00:00', 'Active'),
(26, 'Roselin', 'roselin@mailinator.com', '+91 8610292918', '2023-08-14 19:05:54', '$2y$10$FlRYjpMe0QS5Tb.xl0lzzuYE8ZnZ4tKhVedL7C2FR0TJTT7D4M/.W', NULL, NULL, NULL, NULL, 'test', NULL, NULL, 'test', NULL, NULL, '+44 ', '349287', '', NULL, NULL, '2023-08-14 19:04:25', '2023-08-28 12:43:16', 'N', '0000-00-00 00:00:00', 'Active'),
(27, 'Priya', 'saran@mailinator.com', '+91 638361112', NULL, '$2y$10$aUI3kOEbxqN4EsU5GWC0kOJDl4k6UQjO19v4cnPCHwXIMSKsgue/G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '654767', '', NULL, NULL, '2023-08-19 13:28:57', '2023-08-19 14:02:43', 'N', '0000-00-00 00:00:00', 'Active'),
(28, NULL, 'testseller12@mailinator.com', NULL, NULL, '$2y$10$t8Sx9bKWG90a66QCliC6Mu4yZvBIyqZMdK7OkPhhKePbaiJYJ2PTa', 'TestSeller2', NULL, 'test', NULL, 'test', 'Tamil Nadu', '8999999', 'India', 'test', 'testseller12@mailinator.com', '+91 8610292918', NULL, 'Y', NULL, NULL, '2023-08-23 12:29:01', '2023-08-23 12:29:01', 'N', '0000-00-00 00:00:00', 'Active'),
(29, NULL, 'yuneec@mailinator.com', NULL, '2023-08-23 12:33:06', '$2y$10$ILDdR.zCthE0sHu4lr0rPuZI6EdEBF4TxXapga84Jq.NeMS.SqRAq', 'Yuneec', NULL, 'South Street', 'Anna Nagar', 'Chennai', 'Tamil Nadu', '6145120', 'India', 'LMN123654', 'yuneec@mailinator.com', '+91 6383614061', '780850', 'Y', NULL, NULL, '2023-08-23 12:31:30', '2023-08-23 19:55:53', 'N', '0000-00-00 00:00:00', 'Active'),
(32, 'Rathika', 'rathika@mailinator.com', '+91 9876543210', NULL, '$2y$10$hZw5yMrxnAZGug9uUKeiqODpRQt/v8TEPOPwz0pp1rE1PSPuHCi8m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-08-25 17:43:22', '2023-08-25 17:43:22', 'N', '0000-00-00 00:00:00', 'Active'),
(33, 'Muthu', 'muthu@mailinator.com', '+91 9638527410', NULL, '$2y$10$ZXJZ6l9ZnQ7.0A9RvVOw6.bQ9xs53GCkvYTwgMPe1aVeDhPw9Rlty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-08-25 17:48:09', '2024-03-01 14:20:47', 'N', '0000-00-00 00:00:00', 'Active'),
(34, 'aradhana', 'aradhana@mailinator.com', '6368057679', NULL, '$2y$10$i1QFJ7XRUw7vA3UAhVu6juIIpQZBPiLbBIAcqg0So.icqcS7Ze1n6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-08-25 17:50:48', '2023-08-25 17:52:52', 'N', '0000-00-00 00:00:00', 'Active'),
(35, 'Banu', 'banu@mailinator.com', '+91 8963524100', NULL, '$2y$10$fueDbPDLGcJtLCeFwhFGa.S9OfHRO7wF0cUaN7wV7RhPtnpkqMjk2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-08-25 18:04:34', '2023-08-25 18:04:34', 'N', '0000-00-00 00:00:00', 'Active'),
(36, 'vinoth', 'kumarvinoth982@gmail.com', '+91 9600627537', NULL, '$2y$10$9NwlyyZieYxjO/4LTq3WZeZSfLlPKca6dM6L9USJfRkMhGVaHqfwm', NULL, NULL, NULL, NULL, 'tirunelveli', NULL, NULL, 'India', NULL, NULL, NULL, '673397', 'N', NULL, NULL, '2023-08-25 18:07:33', '2023-08-25 18:11:48', 'N', '0000-00-00 00:00:00', 'Active'),
(37, 'Ananya', 'ananya@mailinator.com', '6368057679', NULL, '$2y$10$lRDQ/1E4LKJ8CnQx/FocteO1W9hkMvS7bn10e9nw7DitcBSFBeo1y', NULL, NULL, NULL, NULL, 'Chennai', NULL, NULL, 'India', NULL, NULL, NULL, '614681', '', NULL, NULL, '2023-08-25 19:22:03', '2023-08-25 19:24:05', 'N', '0000-00-00 00:00:00', 'Active'),
(38, 'Sanya', 'sanya@mailinator.com', '6368057679', NULL, '$2y$10$Dx5CX8.0ZaVh3JRMB4RmCu.u0srfTunzOXGUSmxS5dsTTdUiBC5Fq', NULL, NULL, NULL, NULL, 'Chennai', NULL, NULL, 'India', NULL, NULL, NULL, '193569', '', NULL, NULL, '2023-08-25 19:26:08', '2023-08-25 19:27:25', 'N', '0000-00-00 00:00:00', 'Active'),
(39, 'Abirami', 'abirami@mailinator.com', '6368057679', NULL, '$2y$10$sDT2KQni/LCaOM6Cd8LJAu6DsmdFKYSzxgnmP/ODaOLgF7QUtQbEG', NULL, NULL, NULL, NULL, 'Trichy', NULL, NULL, 'India', NULL, NULL, NULL, '657680', '', NULL, NULL, '2023-08-28 12:27:25', '2023-08-28 12:31:26', 'N', '0000-00-00 00:00:00', 'Active'),
(40, 'Akila', 'akila@mailinator.com', '6368057679', NULL, '$2y$10$6F/l.BFwbA/4RS6x6LXTvONZm16z8Hmy7hLxFcgnLTYKe2Kb/Q9su', 'Skylines', NULL, NULL, NULL, 'Madurai', NULL, NULL, 'India', NULL, NULL, NULL, '322499', '', NULL, NULL, '2023-08-28 12:51:17', '2023-08-28 12:54:52', 'N', '0000-00-00 00:00:00', 'Active'),
(41, 'Anand', 'bots&drones@gmail.com', '6368057679', NULL, '$2y$10$egjEfxJpCHByMWoxvfzY3.g/bPITkBnsVgR.P0kYlcKfF8g6.pHVG', 'Bots', NULL, 'South Street', NULL, 'Thiruvarur', 'Tamil Nadu', '613714', 'India', 'KLMN 2365 4521', 'bots&drones@gmail.com', '+91 9443273780', NULL, 'Y', NULL, NULL, '2023-09-26 12:52:57', '2023-09-26 12:52:57', 'N', '0000-00-00 00:00:00', 'Active'),
(42, 'Saranya', 'saranya@mailinator.com', '6368057679', NULL, '$2y$10$8Y5GZ3HchZmy8ifjGtLPOu.eFtpC2ihxYt3vC6MY6x9YPmAI55s5i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, '', NULL, NULL, '2023-11-18 15:07:08', '2023-11-18 15:07:47', 'N', '0000-00-00 00:00:00', 'Active'),
(43, 'Saranya', 'info@thulirsoft.com', '6386614061', '2024-01-01 18:08:12', '$2y$10$e0HchPD9nId0p1MJn6RxJODvGzaNxPeYlfw9dYVjiPwQuHaT9h4cO', 'Thulirsoft', NULL, 'Pudhupet street', NULL, 'Chennai', 'Tamil Nadu', '614713', 'India', '123456797', 'info@thulirsoft.com', '+91 6383614061', '166419', 'Y', NULL, NULL, '2023-11-27 12:23:38', '2024-02-01 17:49:17', 'N', '0000-00-00 00:00:00', 'Active'),
(44, 'Saranya', 'saran@thulirsoft.com', '6368057679', '2024-03-06 12:26:23', '$2y$10$nle1fJ5uf7DlMzo/fYhzBOyka7YdmCa1LXMDeamzEpeIIw5jszOhW', 'Infosoft', NULL, 'South street', NULL, 'Chennai', 'Tamil Nadu', '613714', 'India', '236541233', 'saran@thulirsoft.com', '+91 6383614066', '695194', 'Y', NULL, NULL, '2023-11-27 12:59:02', '2024-03-06 12:26:23', 'N', '0000-00-00 00:00:00', 'Active'),
(45, 'saranya', 'Veeraselvan@mailinator.com', '6368057679', '2023-12-01 17:23:11', '$2y$10$9zgRPhBQWxPWqe0NtT0SiOTtew3eyLre40Es/BDEL7vukrRSol76S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-01 17:21:23', '2023-12-01 17:23:11', 'N', '0000-00-00 00:00:00', 'Active'),
(46, 'Veeraselvan', 'vs@mailinator.com', '6368057679', '2023-12-01 20:54:31', '$2y$10$6.Co7MBmV7ByeEqzf8.8T.i7fQs.jg8FXCixorPKUH9xZYh0R0sK6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-01 20:47:51', '2023-12-01 20:54:31', 'N', '0000-00-00 00:00:00', 'Active'),
(47, 'Selvi', 'selvi@mailinator.com', '6368057679', '2023-12-01 21:11:22', '$2y$10$Sqr9.4Yea9aGNp9RFeUJceAdC9rANsqUiXZrLIw4X1gPa6LqPkMZO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-01 21:09:04', '2023-12-01 21:11:22', 'N', '0000-00-00 00:00:00', 'Active'),
(48, 'Saranya', 'thulirsofts@gmail.com', '91 6383614069', '2023-12-14 12:51:34', '$2y$10$qcQWHVjrH9u9s8FthrwQPOc8tiQ6pxL6WbSJkv5KZT.twX1KE4DhG', 'Thulirsoft', NULL, NULL, NULL, 'Chennai', NULL, NULL, 'India', NULL, NULL, NULL, '667162', '', NULL, NULL, '2023-12-14 12:45:56', '2024-03-05 20:39:20', 'N', '0000-00-00 00:00:00', 'Inactive'),
(50, 'Contact Name', 'msd@mailinator.com', NULL, '2023-12-15 13:27:33', '$2y$10$3R.gXk04sq1D23laWz3bOuhEf9t9njLusfIU1dn0TMciDlPusbr12', 'abc', NULL, 'Address 1', 'Address 2', 'City / Town', 'Andhra Pradesh', '6666666', 'India', '12344321', 'msd@mailinator.com', '+91 7826041576', '718584', 'Y', NULL, NULL, '2023-12-15 13:25:29', '2024-03-06 19:56:20', 'N', '0000-00-00 00:00:00', 'Active'),
(51, 'Thulirsoft', 'veera@mailinator.com', '93 9443273755', NULL, '$2y$10$.iRO1M1ogfB9so6BsWM1ju/P/7oA3P7ici4HSX.RLq424SCqP9exW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-15 15:00:44', '2023-12-15 15:00:44', 'N', '0000-00-00 00:00:00', 'Active'),
(53, 'Saranya', 'saranya@thulirsoft.com', '66677', NULL, '$2y$10$hOyPOVfGYS424Esr4QnnQehFxlueJSnpPk9p6TyvWQhkqz2iHEMWC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-25 11:43:53', '2023-12-25 11:43:53', 'N', '0000-00-00 00:00:00', 'Active'),
(54, 'Rani', 'rani@mailinator.com', '93 6389636320', '2023-12-25 17:55:35', '$2y$10$Y.CK.ugIdjWbE.lKGz3qlep9Kb8ftXnFp8gb.6z8et0PgSN4Ikmjm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-25 17:54:13', '2024-03-05 20:38:52', 'N', '0000-00-00 00:00:00', 'Inactive'),
(55, 'seetha', 'seetha@mailinator.com', '93 8963524107', NULL, '$2y$10$6wBuQSB8GGerdimtIu9Kn.c5xySgAbzXn/Qf4YufTShFbaAScyPiS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-25 18:01:20', '2023-12-25 18:01:20', 'N', '0000-00-00 00:00:00', 'Active'),
(56, 'Sarathy', 'sarathy@mailinator.com', '91 638361406', NULL, '$2y$10$io75jnD1CENwjtkKhg9u2OmKVztmi8vFaSAevUjM6UdRs7oUkhuaC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-27 13:46:01', '2023-12-27 13:46:01', 'N', '0000-00-00 00:00:00', 'Active'),
(57, 'santhosh', 'santhosh@mailinator.com', '91 8939108274', '2023-12-27 13:59:20', '$2y$10$BNXkPDCHLK2d4Yby8X2fWeVzD/rLk8oWzyht/qIe53HtoJbRfFg/S', 'Thulirsoft', NULL, NULL, NULL, 'Chennai', NULL, NULL, 'India', NULL, NULL, NULL, '566968', '', NULL, NULL, '2023-12-27 13:47:39', '2023-12-27 14:43:17', 'N', '0000-00-00 00:00:00', 'Active'),
(58, 'Ranjith', 'ranjith@maiinator.com', '91 9638527410', NULL, '$2y$10$/xBeFldAZVJzDq.nohFv3.I5obVXe2XRG3qzF9vP3q8W5Jfrv4xtu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-27 13:56:58', '2023-12-27 13:56:58', 'N', '0000-00-00 00:00:00', 'Active'),
(59, 'John', 'john@mailinator.com', '91 9876509876', NULL, '$2y$10$tL.EJW8T5MdDbyPZv2D9xeWylssGJVF9s6u229BI4JuOhG6o.r0/S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-27 14:15:38', '2023-12-27 14:15:38', 'N', '0000-00-00 00:00:00', 'Active'),
(60, 'Geetha', 'geetha@mailinator.com', '91 968523471', '2023-12-27 14:52:51', '$2y$10$VZx0601LKNOvQNDQ39LJYuUcXXKbcS8uUueSxLbi4otJhDmYlPj/S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-27 14:50:57', '2023-12-27 14:52:51', 'N', '0000-00-00 00:00:00', 'Active'),
(61, 'Ajith', 'ajith@mailinator.com', '+91 89391 08274', NULL, '$2y$10$Ix7KLtjz870uZriINM0B5eVePkN815UoLZAabisp/0/Zy8t9uSHim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-27 20:30:12', '2023-12-27 20:30:12', 'N', '0000-00-00 00:00:00', 'Active'),
(63, 'Lenin', 'lenin@mailinator.com', ' +91638361406', NULL, '$2y$10$OuPSKip/AGqZjFr7hJTZJuslpoCI7EJX/5Yd3ywH7b3Ov.RLZFVvS', 'abc', NULL, NULL, NULL, 'UK', NULL, NULL, 'India', NULL, NULL, NULL, '129749', '', NULL, NULL, '2023-12-28 11:54:23', '2023-12-28 12:29:33', 'N', '0000-00-00 00:00:00', 'Active'),
(64, 'Rahath', 'rahath@mailinator.com', '+447590258298', NULL, '$2y$10$G9cdX7QNZ/04/lYsnqA7mefjX/tpyObr8w69cGeO/F2fLPztNsQDq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-28 19:22:45', '2023-12-28 19:22:45', 'N', '0000-00-00 00:00:00', 'Active'),
(65, 'Rathi', 'rathi@mailinator.com', '+447590258298', '2024-03-01 14:38:19', '$2y$10$4jeU2T.oc6BHKAXgxyZZSusyPcfty9dWOx8MkmL0pHDDCO4n1VcFK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2023-12-28 19:25:18', '2024-03-01 14:38:19', 'N', '0000-00-00 00:00:00', 'Active'),
(70, 'rrm', 'rr@gmail.com', '9360733688', NULL, '$2y$10$00EeQSQs.dWnZ.ceuzppvOVEWyo.5t1ya1n6sGRcoe.tgCptyxChW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2024-01-26 19:04:56', '2024-01-26 19:04:56', 'N', '0000-00-00 00:00:00', 'Active'),
(72, 'Saranya', 'Info@mailinator.com', '6383614061', NULL, '$2y$10$VPlDcRAqw8ySWICYJGxXO.VM.PBWrcKzULta02Vx6nJdUA1WE2CIm', 'Infotech', NULL, 'South street', NULL, 'Tambaram', 'Tamil Nadu', '614713', 'India', '12345', 'Info@mailinator.com', '+91 6383614062', NULL, 'Y', NULL, NULL, '2024-02-14 12:05:57', '2024-02-14 12:05:57', 'N', '0000-00-00 00:00:00', 'Active'),
(73, 'Saranya', 'thulirsoft@gmail.com', '6383614061', '2024-03-01 14:26:46', '$2y$10$23LrTbMJk5yJrKB8cEsLTOohpwRnEatLzp1PTNf1BZgkvxkGG3kHm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2024-02-14 12:07:59', '2024-03-01 14:26:46', 'N', '0000-00-00 00:00:00', 'Active'),
(74, 'MNO', 'mno@mailinator.com', '+916383614062', '2024-03-01 12:21:30', '$2y$10$AouD9vlzyvp8xAfjTgW1k.yYqgxwUgig/mJoyAprZN5bxkhI7IltC', 'Test', NULL, NULL, NULL, 'Chennai', NULL, NULL, 'India', NULL, NULL, NULL, '258489', 'N', NULL, NULL, '2024-03-01 12:19:11', '2024-03-02 20:20:54', 'N', '0000-00-00 00:00:00', 'Active'),
(75, 'Balu', 'balu@mailinator.com', '+916383614062', '2024-03-04 11:38:04', '$2y$10$2pMZgK//NTyqjfIMifQN4u8E01lWXKpyXH4.plqMl6N3ZtCICGA5u', NULL, NULL, NULL, NULL, 'Tambaram', NULL, NULL, 'India', NULL, NULL, NULL, '342929', 'N', NULL, NULL, '2024-03-04 11:37:01', '2024-03-04 11:39:29', 'N', '0000-00-00 00:00:00', 'Active'),
(76, 'Buyer', 'ramesharavind2490@gmail.com', '9360733688', '2024-03-25 15:43:02', '$2y$10$vJhrZT1ET6WqJMQPxwf5S.1XaeE8Zw7PEJfQKO7ztOU13d7OgqxFq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, 'N', NULL, NULL, '2024-03-25 15:41:26', '2024-03-25 16:16:03', 'N', '0000-00-00 00:00:00', 'Active');

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
(1, 1, 1, '2023-07-22 04:32:09', '2023-07-22 04:32:09'),
(2, 2, 2, '2023-07-22 23:32:34', '2023-07-22 23:32:34'),
(4, 3, 6, '2023-07-23 23:22:23', '2023-07-23 23:22:23'),
(5, 4, 8, '2023-07-25 14:22:41', '2023-07-25 14:22:41'),
(6, 2, 4, '2023-07-30 17:21:44', '2023-07-30 17:21:44'),
(7, 3, 7, '2023-08-02 02:00:58', '2023-08-02 02:00:58'),
(9, 8, 14, '2023-08-05 20:18:44', '2023-08-05 20:18:44'),
(10, 2, 5, '2023-08-06 22:25:30', '2023-08-06 22:25:30'),
(11, 2, 3, '2023-08-06 22:28:00', '2023-08-06 22:28:00'),
(12, 3, 18, '2023-08-07 00:04:25', '2023-08-07 00:04:25'),
(13, 3, 17, '2023-08-07 00:04:35', '2023-08-07 00:04:35'),
(14, 9, 14, '2023-08-08 13:52:23', '2023-08-08 13:52:23'),
(16, 16, 17, '2023-08-09 15:57:02', '2023-08-09 15:57:02'),
(17, 16, 6, '2023-08-09 15:57:13', '2023-08-09 15:57:13'),
(18, 9, 16, '2023-08-11 11:58:35', '2023-08-11 11:58:35'),
(19, 9, 5, '2023-08-11 12:23:37', '2023-08-11 12:23:37'),
(21, 27, 21, '2023-08-19 13:35:57', '2023-08-19 13:35:57'),
(22, 25, 5, '2023-11-23 20:12:48', '2023-11-23 20:12:48'),
(23, 24, 28, '2024-01-02 12:30:20', '2024-01-02 12:30:20'),
(26, 25, 40, '2024-03-11 13:24:59', '2024-03-11 13:24:59'),
(27, 24, 40, '2024-03-25 15:37:44', '2024-03-25 15:37:44'),
(29, 76, 33, '2024-03-25 16:01:07', '2024-03-25 16:01:07'),
(30, 76, 36, '2024-03-25 16:44:53', '2024-03-25 16:44:53');

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
-- Indexes for table `country_codes`
--
ALTER TABLE `country_codes`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=736;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `country_codes`
--
ALTER TABLE `country_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `equipment_type`
--
ALTER TABLE `equipment_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `product_packages`
--
ALTER TABLE `product_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_specifications`
--
ALTER TABLE `product_specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `robot_type`
--
ALTER TABLE `robot_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `supporting_partners`
--
ALTER TABLE `supporting_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
