-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2025 at 10:40 AM
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
-- Database: `bots_drones`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Drones', 'Y', '2022-09-21 10:48:06', '2022-09-21 10:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `verification_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile_no`, `verification_code`, `country`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Rajesh', 'Rajesh@mailinator.com', '1222222222', NULL, 'India', 'Chennai', '2022-04-05 20:07:30', '2022-04-05 20:07:30'),
(2, 'Arun Kumar Thomas', 'hello@botsanddrones.co', '9840035125', NULL, 'India', 'Chennai', '2022-04-06 00:16:25', '2022-04-06 00:16:25'),
(3, 'Arun Kumar Thomas', 'hello@botsanddrones.co', '9840080297', NULL, 'India', 'Chennai', '2022-04-10 16:32:33', '2022-04-10 16:32:33'),
(4, 'Pallavi Agerwala', 'pallaviagerwala@gmail.com', '9599622314', NULL, 'India', 'kolkata', '2022-04-13 14:29:29', '2022-04-13 14:29:29'),
(5, 'Dr. Surender Ghonkrokta', 'sghonkrokta@hotmail.com', '+917982272844', '768608', 'New delhi', 'India', '2022-04-21 22:18:25', '2022-04-21 22:18:25'),
(6, 'TT', 'aruntj@hotmail.com', '+919840035125', '953471', 'Bengaluru', 'India', '2022-04-22 14:10:49', '2022-04-22 14:10:49'),
(7, 'Kumar', 'aruntj@hotmail.com', '+919840035125', '727914', 'Brussels', 'Belgium', '2022-04-22 16:17:40', '2022-04-22 16:17:40'),
(8, 'test', 'test@mailinator.com', '+91 8344645361', '578212', 'test', 'test', '2022-04-22 21:00:54', '2022-04-22 21:00:54'),
(9, 'Arun Kumar Thomas', 'hello@botsanddrones.co', '+919840035125', '437030', 'Chennai', 'India', '2022-05-06 22:24:09', '2022-05-06 22:24:09'),
(10, 'Sujit Subhash Shinde', 'Sujitshinde341@gmail.com', '+918380845229', '284986', 'Kolhapur', 'India', '2022-05-28 08:50:00', '2022-05-28 08:50:00'),
(11, 'Mallikarjun sheri', 'sheri.mallikarjun@gmail.com', '+91 9441205031', '383782', 'Narayankhed', 'India', '2022-06-08 15:02:33', '2022-06-08 15:02:33'),
(12, 'Dinesh G. Dhande', 'dineshdhande55@gmail.com', '+917666824660', '004701', 'Amravati', 'Indian', '2022-06-13 08:42:45', '2022-06-13 08:42:45'),
(13, 'Shandeep', 'shandeepgowda@gmail.com', '+917204965563', '348781', 'Nilgiris', 'India', '2022-06-21 12:07:33', '2022-06-21 12:07:33'),
(14, 'harish', 'amjha78@gmail.com', '+91 9094720547', '430531', 'chennai', 'india', '2022-06-27 18:00:50', '2022-06-27 18:00:50'),
(15, 'gopi', 'nrcb2022@gmail.com', '+91 9790440874', '593999', 'trichy', 'india', '2022-07-16 15:57:51', '2022-07-16 15:57:51'),
(16, 'Sourav Ghosh', 'ravseven.agri@gmail.com', '+91 8910190423', '620887', 'Kolkata', 'India', '2022-08-05 17:44:21', '2022-08-05 17:44:21'),
(17, 'Selwyn Edwards', 'edwards67@live.com', '+917305787013', '200793', 'Hosur', 'India', '2022-08-10 00:49:35', '2022-08-10 00:49:35'),
(18, 'Chakradhar Bhise', 'chakrabhise@gmail.com', '+917020305297', '292901', 'Latur', 'India', '2022-08-14 00:36:28', '2022-08-14 00:36:28'),
(19, 'Pranabananda Das', 'pranab@theworld.co.in', '+917381501444', '764050', 'bhubaneswar', 'india', '2022-08-20 16:45:15', '2022-08-20 16:45:15'),
(20, 'Chakradhar Bhise', 'chakrabhise@gmail.com', '+917020305297', '130248', 'Latur', 'India', '2022-08-21 23:01:06', '2022-08-21 23:01:06'),
(21, 'NARESH KAATABOINA', 'nareshkaataboina@gmail.com', '+91 9000716270', '315222', 'India', 'India', '2022-08-22 15:25:10', '2022-08-22 15:25:10'),
(22, 'K BHATTACHARYA', 'activeng19@gmail.com', '+91 7439229619', '255830', 'KOLKATA', 'INDIA', '2022-08-24 16:51:33', '2022-08-24 16:51:33'),
(23, 'senthilvinayagam p', 'senthilvinayakan@gmail.com', '+919787895300', '797535', 'gobichettipalayam,erode', 'india', '2022-08-27 07:29:10', '2022-08-27 07:29:10'),
(24, 'S. moutheesh Kumar', 'moutheesuraj@gmail.com', '+91 7373783366', '147676', 'ERODE', 'India', '2022-08-31 19:15:56', '2022-08-31 19:15:56'),
(25, 'Selwyn', 'srirasigreenfresh@gmail.com', '+91 7305787013', '565715', 'Hosur', 'India', '2022-08-31 22:34:23', '2022-08-31 22:34:23'),
(26, 'Arun', 'aruntj@yahoo.com', '+919840035125', '386572', 'MAA', 'India', '2022-09-13 17:47:54', '2022-09-13 17:47:54'),
(27, 'Ish Kumar Bhargava', 'ish@spectross.com', '+919811808102', '423245', 'New Delhi', 'India', '2022-09-24 17:22:45', '2022-09-24 17:22:45'),
(28, 'YASHRAJ', 'yashmunot987@gmail.com', '+919423839308', '365005', 'BARSHI', 'INDIA', '2022-10-03 15:17:33', '2022-10-03 15:17:33'),
(29, 'Mayur Virendrakumar Panchal', 'mayurvipanchal@gmail.com', '+91 9484775777', '574907', 'Bharuch', 'India', '2022-10-05 13:26:33', '2022-10-05 13:26:33'),
(30, 'gaurav ahir', 'gaurav3012.shriji@gmail.com', '+918530212766', '898846', 'gandhinagar', 'india', '2022-10-08 16:41:45', '2022-10-08 16:41:45'),
(31, 'Pratik Bhagwan Kudale', 'Pkudale13@gmail.com', '+919561004094', '751548', 'Pune', 'India', '2022-10-09 10:25:57', '2022-10-09 10:25:57'),
(32, 'baskaran', 'baskaran.durairaj@gmail.com', '+91 9444122734', '621625', 'chennai', 'india', '2022-10-11 12:17:09', '2022-10-11 12:17:09'),
(33, 'Shrijeet', 'shree2460@gmail.com', '+919834090241', '018244', 'Akola', 'India', '2022-10-13 20:19:38', '2022-10-13 20:19:38'),
(34, 'Mohit', 'sales@empiralenterprises.com', '+91 9625358290', '682104', 'Delhi', 'India', '2022-10-16 18:04:40', '2022-10-16 18:04:40'),
(35, 'Mahadev R M', 'amarnathsolar@gmail.com', '+919591847800', '418028', 'Gulbarga', 'India', '2022-10-18 09:11:30', '2022-10-18 09:11:30'),
(36, 'Rajiv', 'rajivfbd@gmail.com', '+919996120180', '380710', 'Fatehabad', 'India', '2022-10-23 11:10:58', '2022-10-23 11:10:58'),
(37, 'Ajinkya Chavan', 'ajinkyachavan146@gmail.com', '+91 9158555553', '902033', 'Pune', 'Indian', '2022-10-27 21:28:49', '2022-10-27 21:28:49'),
(38, 'PRIYANUZ GOSWAMI', 'priyanuzgoswami@gmail.com', '+917002520876', '730508', 'Jorhat', 'India', '2022-10-29 12:49:22', '2022-10-29 12:49:22'),
(39, 'Ritesh Otari', 'ritesh16.otari@gmail.com', '+917350000943', '829959', 'Pune', 'India', '2022-10-29 18:56:01', '2022-10-29 18:56:01'),
(40, 'PRIYANUZ GOSWAMI', 'priyanuzgoswami@gmail.com', '+917002520876', '692011', 'Jorhat', 'India', '2022-10-31 12:50:54', '2022-10-31 12:50:54'),
(41, 'Harsh Shah', 'harsh.shah@agrocastanalytics.com', '+91 9825236598', '727857', 'Ahmedabad', 'India', '2022-11-01 21:03:02', '2022-11-01 21:03:02'),
(42, 'S  R  KUMARSWAMY', 'sirswamygem@gmail.com', '+919866191606', '581963', 'HYDERABAD', 'INDIA', '2022-11-02 17:41:46', '2022-11-02 17:41:46'),
(43, 'Abhishek thakur', 'acubop.science@gmail.com', '+91 9102232360', '474364', 'Kolkata', 'India', '2022-11-03 20:25:38', '2022-11-03 20:25:38'),
(44, 'Lyster John', 'john.lyster@outlook.com', '+91 9972309970', '969954', 'Bangalore', 'India', '2022-11-08 13:05:59', '2022-11-08 13:05:59'),
(45, 'Dr. Debabrata Sethi', 'debabrata.sethi@icar.gov.in', '+91 7008103447', '954467', 'Bhubaneswar', 'India', '2022-11-10 16:52:21', '2022-11-10 16:52:21'),
(46, 'Arun G', 'arungsk@gmail.com', '+91 9952850725', '773865', 'Jaipur', 'India', '2022-11-16 18:22:26', '2022-11-16 18:22:26'),
(47, 'Varun Singh', 'rawaldally@gmail.com', '+91 9140299451', '984440', 'Delhi', 'India', '2022-11-24 20:05:33', '2022-11-24 20:05:33'),
(48, 'Varun Singh', 'rawaldally@gmail.com', '+91 9140299451', '984440', 'Delhi', 'India', '2022-11-24 20:05:52', '2022-11-24 20:05:52'),
(49, 'Varun Singh', 'rawaldally@gmail.com', '+91 9140299451', '984440', 'Delhi', 'India', '2022-11-24 20:05:54', '2022-11-24 20:05:54'),
(50, 'Varun Singh', 'rawaldally@gmail.com', '+91 9140299451', '984440', 'Delhi', 'India', '2022-11-24 20:06:09', '2022-11-24 20:06:09'),
(51, 'P.S. ENTERPRISE', 'psenterprise97@gmail.com', '+919437004176', '975156', 'Khordha', 'India', '2022-11-25 14:14:20', '2022-11-25 14:14:20'),
(52, 'P.S. ENTERPRISE', 'psenterprise97@gmail.com', '+919437004176', '975156', 'Khordha', 'India', '2022-11-25 14:14:26', '2022-11-25 14:14:26'),
(53, 'P.S. ENTERPRISE', 'psenterprise97@gmail.com', '+919437004176', '975156', 'Khordha', 'India', '2022-11-25 14:14:41', '2022-11-25 14:14:41'),
(54, 'Amit Jaiswal', 'amitjl19@gmail.com', '+919324739292', '678733', 'Nashik', 'India', '2022-11-27 00:07:13', '2022-11-27 00:07:13'),
(55, 'Manoj Kumar Sah', 'mkr.sah@gmail.com', '+919330618799', '440924', 'Madhubani', 'India', '2022-11-30 18:03:38', '2022-11-30 18:03:38'),
(56, 'P P Jambhulkar', 'ppjambhulkar@gmail.com', '+91 9983936683', '614345', 'Jhansi', 'India', '2022-12-01 17:55:39', '2022-12-01 17:55:39'),
(57, 'P P Jambhulkar', 'ppjambhulkar@gmail.com', '+91 9983936683', '614345', 'Jhansi', 'India', '2022-12-01 17:55:54', '2022-12-01 17:55:54'),
(58, 'P P Jambhulkar', 'ppjambhulkar@gmail.com', '+91 9983936683', '614345', 'Jhansi', 'India', '2022-12-01 17:56:05', '2022-12-01 17:56:05'),
(59, 'P P Jambhulkar', 'ppjambhulkar@gmail.com', '+91 9983936683', '614345', 'Jhansi', 'India', '2022-12-01 17:56:31', '2022-12-01 17:56:31'),
(60, 'P P Jambhulkar', 'ppjambhulkar@gmail.com', '+91 9983936683', '614345', 'Jhansi', 'India', '2022-12-01 17:56:51', '2022-12-01 17:56:51'),
(61, 'Mark', 'markinventory1@gmail.com', '+919599087220', '722531', 'New Delhi', 'india', '2022-12-02 13:39:36', '2022-12-02 13:39:36'),
(62, 'Mark', 'markinventory1@gmail.com', '+919599087220', '722531', 'New Delhi', 'india', '2022-12-02 13:39:44', '2022-12-02 13:39:44'),
(63, 'Dheeran bogi', 'dotcreativehub5@gmail.com', '+91 6305934016', '890035', 'Kamareddy', 'India', '2022-12-09 01:32:07', '2022-12-09 01:32:07'),
(64, 'Dheeran bogi', 'dotcreativehub5@gmail.com', '+91 6305934016', '890035', 'Kamareddy', 'India', '2022-12-09 01:32:23', '2022-12-09 01:32:23'),
(65, 'HARISH KUMAR CHANDRAKAR', 'harismsmd@gmail.com', '+917987056574', '308387', 'MAHASAMUND', 'India', '2022-12-10 20:06:25', '2022-12-10 20:06:25'),
(66, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:49:56', '2022-12-16 07:49:56'),
(67, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:49:58', '2022-12-16 07:49:58'),
(68, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:50:03', '2022-12-16 07:50:03'),
(69, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:50:09', '2022-12-16 07:50:09'),
(70, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:50:30', '2022-12-16 07:50:30'),
(71, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:28', '2022-12-16 07:51:28'),
(72, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:31', '2022-12-16 07:51:31'),
(73, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:36', '2022-12-16 07:51:36'),
(74, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:36', '2022-12-16 07:51:36'),
(75, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:37', '2022-12-16 07:51:37'),
(76, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:37', '2022-12-16 07:51:37'),
(77, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:38', '2022-12-16 07:51:38'),
(78, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:38', '2022-12-16 07:51:38'),
(79, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:38', '2022-12-16 07:51:38'),
(80, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:38', '2022-12-16 07:51:38'),
(81, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:38', '2022-12-16 07:51:38'),
(82, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:39', '2022-12-16 07:51:39'),
(83, 'Ojas Mishra', 'ojasmishra@gmail.com', '+919419401109', '559211', 'Bhuj', 'India', '2022-12-16 07:51:40', '2022-12-16 07:51:40'),
(84, 'Ranjeet Kolte', 'ranjeetkolte@gmail.com', '+919423148753', '625749', 'Aurangabad Maharashtra', 'India', '2022-12-17 15:04:10', '2022-12-17 15:04:10'),
(85, 'Ranjeet Kolte', 'ranjeetkolte@gmail.com', '+919423148753', '799359', 'Aurangabad Maharashtra', 'India', '2022-12-17 15:11:22', '2022-12-17 15:11:22'),
(86, 'Ranjeet Kolte', 'ranjeetkolte@gmail.com', '+919423148753', '994226', 'Aurangabad Maharashtra', 'India', '2022-12-17 15:13:59', '2022-12-17 15:13:59'),
(87, 'KARTHIKEYAN', 'sathish6365@gmail.com', '+919843046365', '328241', 'Thanjavur', 'India', '2022-12-18 18:59:07', '2022-12-18 18:59:07'),
(88, 'KARTHIKEYAN', 'sathish6365@gmail.com', '+919843046365', '328241', 'Thanjavur', 'India', '2022-12-18 18:59:10', '2022-12-18 18:59:10'),
(89, 'Shubham', 'patilshubham74460@gmail.com', '+91 9975919853', '125052', 'Islampur,Sangli, Maharashtra', 'India', '2022-12-26 17:12:44', '2022-12-26 17:12:44'),
(90, 'Shubham', 'patilshubham74460@gmail.com', '+91 9975919853', '125052', 'Islampur,Sangli, Maharashtra', 'India', '2022-12-26 17:12:49', '2022-12-26 17:12:49'),
(91, 'Murugan', 'gokri9547@gmail.com', '8939499880', '062160', 'VILLUPURAM', 'India', '2023-01-06 19:58:45', '2023-01-06 19:58:45'),
(92, 'Murugan', 'gokri9547@gmail.com', '8939499880', '062160', 'VILLUPURAM', 'India', '2023-01-06 19:58:55', '2023-01-06 19:58:55'),
(93, 'Rajneesh Patel', 'Rajneesh_patel2002@yahoo.com', '+918358984600', '731310', 'Hoshangabad', 'India', '2023-01-11 11:02:53', '2023-01-11 11:02:53'),
(94, 'Rajneesh Patel', 'Rajneesh_patel2002@yahoo.com', '+918358984600', '805466', 'TRACTOR NAGAR BUDNI', 'India', '2023-01-12 18:41:21', '2023-01-12 18:41:21'),
(95, 'Arun Trial', 'aruntj@yahoo.com', '+919840035125', '364789', 'Chennai', 'India', '2023-01-18 11:40:24', '2023-01-18 11:40:24'),
(96, 'Robin', 'robinjohnyk@gmail.com', '+919677967216', '047275', 'COIMBATORE', 'India', '2023-01-18 12:47:07', '2023-01-18 12:47:07'),
(97, 'Nikhil Mishra', 'Nikhilm75200@gmail.com', '+919724386145', '761518', 'Surat', 'India', '2023-01-20 10:24:44', '2023-01-20 10:24:44'),
(98, 'Nikhil Mishra', 'Nikhilm75200@gmail.com', '+919724386145', '761518', 'Surat', 'India', '2023-01-20 10:25:08', '2023-01-20 10:25:08'),
(99, 'Nikhil Mishra', 'Nikhilm75200@gmail.com', '+919724386145', '761518', 'Surat', 'India', '2023-01-20 10:26:03', '2023-01-20 10:26:03'),
(100, 'Nikhil Mishra', 'Nikhilm75200@gmail.com', '+919724386145', '021420', 'Surat', 'India', '2023-01-20 10:28:55', '2023-01-20 10:28:55'),
(101, 'Nikhil Mishra', 'nikhilm752000@gmail.com', '+919724386145', '429436', 'Surat', 'India', '2023-01-20 10:37:17', '2023-01-20 10:37:17'),
(102, 'Samujjal Baruah', 'samujjal.baruah@aau.ac.in', '+919957631788', '025557', 'Jorhat', 'India', '2023-01-21 00:57:16', '2023-01-21 00:57:16'),
(103, 'Samujjal Baruah', 'samujjal.baruah@aau.ac.in', '+919957631788', '025557', 'Jorhat', 'India', '2023-01-21 00:59:05', '2023-01-21 00:59:05'),
(104, 'Samujjal Baruah', 'samujjal.baruah@aau.ac.in', '+919957631788', '571960', 'Jorhat', 'India', '2023-01-21 01:03:35', '2023-01-21 01:03:35'),
(105, 'Richard', 'solankirichard1994@gmail.com', '+917567897521', '056333', 'Anand', 'India', '2023-01-23 20:56:05', '2023-01-23 20:56:05'),
(106, 'P L YADU', 'accountablemanager@rit.edu.in', '+91 9827130001', '068049', 'Raipur', 'India', '2023-01-30 15:10:07', '2023-01-30 15:10:07'),
(107, 'Devang', 'devangdhyani@gmail.com', '+918860165782', '893310', 'Delhi', 'India', '2023-01-31 21:47:24', '2023-01-31 21:47:24'),
(108, 'Dr. Debabrata Sethi', 'debabrata.sethi@icar.gov.in', '+91 7008103447', '563526', 'Bhubaneswar', 'India', '2023-02-02 21:27:13', '2023-02-02 21:27:13'),
(109, 'Dr. Debabrata Sethi', 'debabrata.sethi@icar.gov.in', '+91 7008103447', '563526', 'Bhubaneswar', 'India', '2023-02-02 21:27:35', '2023-02-02 21:27:35'),
(110, 'Dr. Debabrata Sethi', 'debabrata.sethi@icar.gov.in', '+91 7008103447', '563526', 'Bhubaneswar', 'India', '2023-02-02 21:27:39', '2023-02-02 21:27:39'),
(111, 'manasa', 'manasaanigi13@gmail.com', '+91 9611144558', '961907', 'chitradurga', 'india', '2023-02-05 23:52:42', '2023-02-05 23:52:42'),
(112, 'Baibhab', 'baibhab.roy@gmail.com', '+919831078813', '183251', 'Kolkata', 'India', '2023-02-07 16:17:47', '2023-02-07 16:17:47'),
(113, 'poonam verma', 'poonam12verma@gmail.com', '+91 9873354034', '845890', 'gurgaon', 'india', '2023-02-08 17:32:08', '2023-02-08 17:32:08'),
(114, 'MANIVANNAN', 'manivannan.m@astrox.co.in', '+91 8939368517', '849761', 'CHENNAI', 'INDIA', '2023-02-10 16:53:56', '2023-02-10 16:53:56'),
(115, 'Vijay Sharma', 'vijayksharma2@yahoo.com', '+919599736918', '495452', 'Gurugram', 'India', '2023-02-12 09:32:11', '2023-02-12 09:32:11'),
(116, 'Vijay Sharma', 'vijayksharma2@yahoo.com', '+919599736918', '495452', 'Gurugram', 'India', '2023-02-12 09:32:27', '2023-02-12 09:32:27'),
(117, 'Shreyas Shama', 'shreyas.shama54@gmail.com', '+918928220038', '818225', 'Mumbai', 'India', '2023-02-14 12:08:13', '2023-02-14 12:08:13'),
(118, 'Shreyas Shama', 'shreyas.shama54@gmail.com', '+918928220038', '818225', 'Mumbai', 'India', '2023-02-14 12:08:18', '2023-02-14 12:08:18'),
(119, 'sunny', 'sunnyxavier97@gmail.com', '+91 8187024850', '902701', 'hyderabad', 'india', '2023-02-22 15:21:56', '2023-02-22 15:21:56'),
(120, 'sunny', 'sunnyxavier97@gmail.com', '+91 8187024850', '902701', 'hyderabad', 'india', '2023-02-22 15:22:20', '2023-02-22 15:22:20'),
(121, 'sunny', 'sunnyxavier97@gmail.com', '+91 8187024850', '902701', 'hyderabad', 'india', '2023-02-22 15:22:35', '2023-02-22 15:22:35'),
(122, 'Biswajit Dey', 'biswajit@dronestechlab.com', '+917002960151', '988074', 'Guwahati', 'India', '2023-02-26 02:02:29', '2023-02-26 02:02:29'),
(123, 'Arun', 'aruntj@yahoo.com', '+919840035125', '916738', 'Chennai', 'India', '2023-03-03 13:47:37', '2023-03-03 13:47:37'),
(124, 'Arun', 'aruntj@yahoo.com', '+919840035125', '377428', 'Chennai', 'India', '2023-03-03 13:48:55', '2023-03-03 13:48:55'),
(125, 'Test', 'test@mailinator.com', '1234567890', '1234', 'Chennai', 'India', '2023-03-03 20:22:28', '2023-03-03 20:22:28'),
(126, 'Test', 'test@mailinator.com', '1234567890', '1234', 'Chennai', 'India', '2023-03-03 20:24:22', '2023-03-03 20:24:22'),
(127, 'Test', 'test@mailinator.com', '1234567890', '1234', 'Chennai', 'India', '2023-03-03 20:26:10', '2023-03-03 20:26:10'),
(128, 'Test', 'test@mailinator.com', '1234567890', '1234', 'Chennai', 'India', '2023-03-03 20:28:11', '2023-03-03 20:28:11'),
(129, 'Test', 'test@mailinator.com', '1234567890', '1234', 'Chennai', 'India', '2023-03-03 20:30:49', '2023-03-03 20:30:49'),
(130, 'Test', 'test@mailinator.com', '1234567890', '1234', 'Chennai', 'India', '2023-03-03 20:31:04', '2023-03-03 20:31:04'),
(131, 'Arun', 'aruntj@yahoo.com', '+919840035125', '845414', 'Chennai', 'India', '2023-03-03 20:54:55', '2023-03-03 20:54:55'),
(132, 'Arun', 'aruntj@yahoo.com', '+919840035125', '845414', 'Chennai', 'India', '2023-03-03 20:55:22', '2023-03-03 20:55:22'),
(133, 'Arun', 'aruntj@yahoo.com', '+919840035125', '845414', 'Chennai', 'India', '2023-03-03 20:55:58', '2023-03-03 20:55:58'),
(134, 'Thomas Arun', 'aruntj@yahoo.com', '+919840035125', '039017', 'Madurai', 'India', '2023-03-03 21:09:52', '2023-03-03 21:09:52'),
(135, 'Test', 'test@mailinator.com', '1234567191', '1234', 'Chennai', 'India', '2023-03-03 21:10:48', '2023-03-03 21:10:48'),
(136, 'prakash', 'purchase@krmangalam.com', '+919718496124', '266616', 'NEW DELHI', 'India', '2023-03-04 17:03:19', '2023-03-04 17:03:19'),
(137, 'Ethinraj B N', 'ethinrajbn@gmail.com', '+919980752290', '905163', 'Bengaluru', 'India', '2023-03-05 20:41:20', '2023-03-05 20:41:20'),
(138, 'SRI VINAYAGA AGENCIES', 'srivinayagaagencies1979@gmail.com', '+91 9629708264', '221758', 'CHEYYAR', 'INDIA', '2023-03-08 14:33:25', '2023-03-08 14:33:25'),
(139, 'Bots and Drones', 'thomas@botsanddrones.co', '+919840035125', '070198', 'Chennai', 'India', '2023-03-12 02:12:19', '2023-03-12 02:12:19'),
(140, 'Bots and Drones', 'thomas@botsanddrones.co', '+919840035125', '732529', 'Madurai', 'India', '2023-03-14 17:07:55', '2023-03-14 17:07:55'),
(141, 'Ravi Modi', 'ravi.modi@amns.in', '+91 9879103207', '749895', 'Surat/Hazira', 'India', '2023-03-17 13:09:37', '2023-03-17 13:09:37'),
(142, 'Rabinarayan Dash', 'sambitcs@gmail.com', '+91 6372-918922', '579820', 'Balasore', 'India', '2023-03-22 23:09:52', '2023-03-22 23:09:52'),
(143, 'Dhruv Verma', 'thedhruv007@gmail.com', '+91 9627957616', '230547', 'Muzaffarnagar', 'India', '2023-03-27 18:51:04', '2023-03-27 18:51:04'),
(144, 'Suniel khandpur', 'Sunielkhandpur@yahoo.com', '+91 9820124364', '319586', 'Mumbai', 'India', '2023-04-01 22:20:01', '2023-04-01 22:20:01'),
(145, 'Admire Ntuli', 'qc.lab@agricura.co.zw', '+263774925682', '248010', 'Zimbabwe', 'Zimbabwe', '2023-04-03 19:21:05', '2023-04-03 19:21:05'),
(146, 'Vikash', 'vikaschoudhary099@gmail.com', '+919992361802', '442081', 'Bhiwani', 'India', '2023-04-04 23:27:09', '2023-04-04 23:27:09'),
(147, 'Pravin Narayan Marathe', 'pravin.marathe2709@gmail.com', '+91 8080712623', '859761', 'dhule', 'India', '2023-04-15 20:48:16', '2023-04-15 20:48:16'),
(148, 'Nilesh chaudhari', 'smartagriculturalservices@gmail.com', '+91 9975707464', '080058', 'Nashik', 'India', '2023-04-18 23:20:22', '2023-04-18 23:20:22'),
(149, 'GOVINC DUBEY', 'govinddubey1211@gmail.com', '+91 8630888819', '627491', 'MATHURA', 'INDIA', '2023-04-27 16:35:10', '2023-04-27 16:35:10'),
(150, 'chauhan ashish', 'sunriseentp.rjk@gmail.com', '+91 9974099748', '724358', 'rajkot', 'India', '2023-05-08 19:42:31', '2023-05-08 19:42:31'),
(151, 'Mahendra Takawane', 'mdtakawane@yahoo.com', '+919970242400', '242959', 'Pune', 'India', '2023-05-20 01:47:05', '2023-05-20 01:47:05'),
(152, 'Narbert Raj', 'narbertraj.m@gmail.com', '+919940967630', '183121', 'Mannargudi', 'India', '2023-05-22 14:39:59', '2023-05-22 14:39:59'),
(153, 'Balaji Marisamy', 'mbalaji24@gmail.com', '+917824001140', '265741', 'chennai', 'India', '2023-05-22 17:49:30', '2023-05-22 17:49:30'),
(154, 'Tharan Vignesh', 'tharan.vignesh@gmail.com', '+919943586123', '934758', 'Tirupur', 'India', '2023-05-25 20:32:36', '2023-05-25 20:32:36'),
(155, 'uav', 'uavwingdte@gmail.com', '+91 7680982532', '283895', 'delhi', 'india', '2023-06-01 13:43:28', '2023-06-01 13:43:28'),
(156, 'Pavan', 'kolluripavankumar4@gmail.com', '+91 6304574945', '748552', 'Narasaraopeta', 'India', '2023-06-01 21:44:55', '2023-06-01 21:44:55'),
(157, 'Tejavardhanreddy', 'tejareddy7952@gmail.com', '+91 9010007952', '340051', 'Koilkuntla', 'India', '2023-06-03 00:27:51', '2023-06-03 00:27:51'),
(158, 'Subhanshu', 'raicoolboss123@gmail.com', '+91 7718980286', '678477', 'Azamgrah', 'India', '2023-06-12 10:58:26', '2023-06-12 10:58:26'),
(159, 'Kiran Kumar Vemula', 'kiranvemula709@gmail.com', '+919705716689', '562662', 'Guntur', 'India', '2023-06-13 00:18:52', '2023-06-13 00:18:52'),
(160, 'Dilip Kumar', 'subhkhyatiaero@gmail.com', '+91 7976357013', '669084', 'Jaipur', 'India', '2023-06-14 11:53:20', '2023-06-14 11:53:20'),
(161, 'sajid danai', 'sajideye@gmail.com', '+919824515245', '763092', 'junagadh', 'india', '2023-06-14 22:29:23', '2023-06-14 22:29:23'),
(162, 'Rahul Kumar', 'rahuldhaker888@gmail.com', '+91 9983011730', '763770', 'Ramganjmandi', 'India', '2023-06-16 23:36:44', '2023-06-16 23:36:44'),
(163, 'Aaishi Ashirbad', 'aaishi@leher.farm', '+91 7978997700', '999654', 'Gurgaon', 'India', '2023-06-19 16:31:19', '2023-06-19 16:31:19'),
(164, 'Srujan', 'srujangoud202@gmail.com', '+91 7036623964', '145364', 'vijayawada', 'india', '2023-06-23 14:29:34', '2023-06-23 14:29:34'),
(165, 'Srujan', 'srujangoud202@gmail.com', '+91 7036623964', '411189', 'vijayawada', 'india', '2023-06-23 14:30:38', '2023-06-23 14:30:38'),
(166, 'Dinesh', 'dinesh.ashani1@gmail.com', '+919773403018', '038092', 'RAMPAR-VEKRA', 'India', '2023-06-25 09:36:56', '2023-06-25 09:36:56'),
(167, 'Sudhir kumar chaudhary', 'legendchaudhary2563@gmail.com', '+916398119489', '097470', 'Aligarh', 'India', '2023-06-26 18:59:18', '2023-06-26 18:59:18'),
(168, 'Yagnesh Agrawal', 'agrawal.yagnesh93@gmail.com', '+91 9325951532', '991237', 'Latur', 'India', '2023-06-30 13:18:34', '2023-06-30 13:18:34'),
(169, 'Ganesh', 'siligerm@gmail.com', '+91 6383783217', '622514', 'Thanjavur', 'India', '2023-07-03 13:39:12', '2023-07-03 13:39:12'),
(170, 'Nirzar Lakhia', 'nirzarlakhia@gmail.com', '+918490849095', '037505', 'AHMEDABAD', 'India', '2023-07-04 22:42:12', '2023-07-04 22:42:12'),
(171, 'T N ARUNKUMAR', 'amarkrishi.ak@gmail.com', '+919343210028', '722622', 'Tiptur', 'India', '2023-07-06 11:23:49', '2023-07-06 11:23:49'),
(172, 'Srinivasan', 'omcinema@gmail.com', '+91 98414 46148', '676036', 'Chennai', 'India', '2023-07-14 13:04:46', '2023-07-14 13:04:46'),
(173, 'ranbir Singh', 'ranbir.singh1977s@gmail.com', '+91720619516310', '101552', 'Kurukshetra', 'India', '2023-07-15 10:41:40', '2023-07-15 10:41:40'),
(174, 'Prashant kaurav', 'prashantkaurav456@gmail.com', '+91 8602227331', '491957', 'Konch', 'India', '2023-07-17 15:29:00', '2023-07-17 15:29:00'),
(175, 'karthik', 'tech@indronovationlabs.com', '+91 8667257110', '744142', 'Begaluru', 'India', '2023-07-17 18:15:53', '2023-07-17 18:15:53'),
(176, 'Suman', 'suman@detecttechnologies.com', '+91 9819794550', '685738', 'India', 'India', '2023-07-21 16:48:09', '2023-07-21 16:48:09'),
(177, 'Vytla sekhar', 'sekhar.vytla99@gmail.com', '+91 8790053531', '341986', 'Chelluru', 'India', '2023-07-22 13:02:07', '2023-07-22 13:02:07'),
(178, 'Balaji', 'balajigunasekeran22@gmail.com', '+33751998238', '497822', 'Chennai', 'India', '2023-07-23 20:54:39', '2023-07-23 20:54:39'),
(179, 'Rajesh Rai', 'rajesh@terrapure.in', '+91-9350874166', '721054', 'Nagercoil, Kanyakumari', 'India', '2023-07-24 12:58:43', '2023-07-24 12:58:43'),
(180, 'V SRI HARI', 'hari3111992@gmail.com', '+91 9494303883', '889211', 'Naidupeta', 'India', '2023-07-30 14:59:43', '2023-07-30 14:59:43'),
(181, 'Nandagopal', 'nandagopal.kesavan@gmail.com', '+91 7680020553', '113561', 'Nellore', 'India', '2023-08-01 20:29:04', '2023-08-01 20:29:04'),
(182, 'K.vijayakumar', 'vijayakumar0203@gmail.com', '+919043124738', '441538', 'Thoothukudi', 'India', '2023-08-07 10:12:07', '2023-08-07 10:12:07'),
(183, 'Pankaj sheoran', 'pkjaries@gmail.com', '+91 9016038127', '343636', 'Bhiwani', 'Haryana', '2023-08-07 13:40:28', '2023-08-07 13:40:28'),
(184, 'Arunagiri', 'g.arungiri606@gmail.com', '+919994016087', '198464', 'Kumbakonam', 'India', '2023-08-08 21:00:08', '2023-08-08 21:00:08'),
(185, 'Yashraj', 'yashmunot987@gmail.com', '+919423839308', '170366', 'paranda', 'india', '2023-08-10 20:32:09', '2023-08-10 20:32:09'),
(186, 'Arun', 'sales@botsanddrones.uk', '+447585212969', '858691', 'Lincoln', 'India', '2023-08-11 03:33:04', '2023-08-11 03:33:04'),
(187, 'manish', 'pmmanish514@gmail.com', '+91 9133878251', '082994', 'hyderabad', 'india', '2023-08-17 03:36:15', '2023-08-17 03:36:15'),
(188, 'manish', 'pmmanish514@gmail.com', '+91 9133878251', '725893', 'hyderabad', 'india', '2023-08-17 04:14:47', '2023-08-17 04:14:47'),
(189, 'manish', 'pmmanish514@gmail.com', '+91 9133878251', '677981', 'hyderabad', 'india', '2023-08-17 04:23:43', '2023-08-17 04:23:43'),
(190, 'Lyster John', 'john.lyster07@gmail.com', '+91 9972309970', '912938', 'Bangalore', 'India', '2023-08-18 17:53:18', '2023-08-18 17:53:18'),
(191, 'Ragesh', 'rageshputhusseri@yahoo.com', '+919986600707', '721066', 'Kannut', 'India', '2023-08-20 19:32:45', '2023-08-20 19:32:45'),
(192, 'Chezhiyan', 'cheseg@gmail.com', '+97433257462', '178578', 'Thanjavur', 'Indis', '2023-08-21 13:48:00', '2023-08-21 13:48:00'),
(193, 'Rishad Lakhani', 'rktrade@yahoo.com', '+91 9099978784', '042568', 'Surat', 'INDIA', '2023-08-22 15:14:47', '2023-08-22 15:14:47'),
(194, 'Prempal Singh', 'prempal.singh03@gmail.com', '+919992010074', '340601', 'Khair- Aligarh', 'India', '2023-08-25 13:17:21', '2023-08-25 13:17:21'),
(195, 'Rushikesh', 'devrat8229@gmail.com', '+917057839090', '369878', 'Talsande Kolhapur Maharashtra', 'India', '2023-08-26 11:22:02', '2023-08-26 11:22:02'),
(196, 'S Kumar', 'srivanguardexports@yahoo.com', '+91 9941536505', '042137', 'Nilakottai  Dindigul district', 'India', '2023-08-26 12:48:42', '2023-08-26 12:48:42'),
(197, 'rohith kumar', 'rohitatukula@gmail.com', '+91 9666424264', '127103', 'Karimnagar', 'India', '2023-08-28 19:14:39', '2023-08-28 19:14:39'),
(198, 'jagmohan singh kaurav', 'jagmohansinghkaurav7@gmail.com', '+919039887509', '982312', 'gadarwara', 'india', '2023-08-29 02:46:04', '2023-08-29 02:46:04'),
(199, 'Tejas Rajendra Gadade', 'tejasgadade1115@gmail.com', '+91 9922481117', '653682', 'Tandali', 'India', '2023-09-01 09:12:01', '2023-09-01 09:12:01'),
(200, 'RAJPAL SINGH', 'MDNIKDU@GMAIL.COM', '+917404425125', '797298', 'HISAR', 'India', '2023-09-01 22:33:22', '2023-09-01 22:33:22'),
(201, 'Reggi Mathews', 'reggimathews@gmail.com', '+919746794567', '287680', 'Tripunithara, Kochi, Kerala', 'India', '2023-09-06 12:58:36', '2023-09-06 12:58:36'),
(202, 'abhinav kumar', 'emailofabhinav@yahoo.com', '+91 7011538616', '512020', NULL, NULL, '2023-09-09 16:35:00', '2023-09-09 16:35:00'),
(203, 'Hemant', 'in@in.com', '+919685045440', '269473', 'Mumbai', 'India', '2023-09-15 11:32:14', '2023-09-15 11:32:14'),
(204, 'Ashokbhai Poshiya', 'ashokposhya401@gmail.com', '+91 9879785533', '488178', 'Rajkot', 'India', '2023-09-20 17:18:02', '2023-09-20 17:18:02'),
(205, 'Mahesh K', 'kadlagmahi@gmail.com', '+917020898095', '145723', 'Akole', 'India', '2023-09-21 18:14:57', '2023-09-21 18:14:57'),
(206, 'Mahesh K', 'kadlagmahi@gmail.com', '+917020898095', '145723', 'Akole', 'India', '2023-09-21 18:15:10', '2023-09-21 18:15:10'),
(207, 'Sachin Verme', 'sachinverma342016@gmail.com', '+917439174301', '903467', 'INDORE', 'INDIA', '2023-09-27 12:39:56', '2023-09-27 12:39:56'),
(208, 'Sachin Verma', 'sachinverma342016@gmail.com', '+917439174301', '842009', 'INDORE', 'INDIA', '2023-09-27 12:41:39', '2023-09-27 12:41:39'),
(209, 'Sourabh bhalachandra mane', 'sourabhmane48@gmail.com', '+919886022119', '147804', 'BELAGAVI', 'India', '2023-09-29 19:15:26', '2023-09-29 19:15:26'),
(210, 'karthik', 'tech@indronovationlabs.com', '+91 8667257110', '990336', 'Begaluru', 'India', '2023-10-02 15:24:28', '2023-10-02 15:24:28'),
(211, 'Vibhaw Kumar', 'vibhaw.kumar@bernsbrettindia.com', '+91-9820137934', '568395', 'Mumbai', 'India', '2023-10-06 16:40:57', '2023-10-06 16:40:57'),
(212, 'lotto009', 'Feedback2016@gmail.com', '+66991653524', '952729', 'Muang', 'Thailand', '2023-10-06 19:04:56', '2023-10-06 19:04:56'),
(213, 'Perumalsamy', 'perumalmct@gmail.com', '+919600340933', '099835', 'Tamilnadu', 'India', '2023-10-12 17:59:30', '2023-10-12 17:59:30'),
(214, 'Machhindranath Hanamant Gurav', 'MACHINDRAMINA@GMAIL.COM', '+919405281181', '303681', 'Kolhapur Chandgad', 'India', '2023-10-13 10:46:45', '2023-10-13 10:46:45'),
(215, 'Rishi gogoria', 'rishigogoria.me@gmail.com', '+91 9413760801', '327866', 'Jaipur', 'India', '2023-10-13 16:06:27', '2023-10-13 16:06:27'),
(216, 'Tom Tom', 'tom@gmail.com', '+919840035125', '048322', 'Chennai', 'India', '2023-10-28 14:05:52', '2023-10-28 14:05:52'),
(217, 'Arun Kumar Thomas', 'aruntj@yahoo.com', '+919840035125', '578786', 'India', 'India', '2023-11-10 04:09:43', '2023-11-10 04:09:43'),
(218, 'Thusha', 'sethurasathushanth@gmail.com', '+94752653919', '637067', 'Trincomalee', 'Sri Lanka', '2023-11-12 18:50:57', '2023-11-12 18:50:57'),
(219, 'Sandeep', 'singhalsan37@gmail.com', '+919827044684', '909896', 'Vidisha', 'India', '2023-11-14 14:30:20', '2023-11-14 14:30:20'),
(220, 'TKS Consultancy Services', 'tkscsbbs@gmail.com', '+91 7008115339', '899176', 'BHUBANESWAR', 'India', '2023-11-18 18:04:08', '2023-11-18 18:04:08'),
(221, 'SANTANU MONDAL', 'santanumondal.uav@gmail.com', '+91 7439261734', '425118', 'KOLKATA', 'India', '2023-11-18 20:23:26', '2023-11-18 20:23:26'),
(222, 'Surendra Singh', 'kuntalsurendra16@gmail.com', '+919634542480', '937634', 'Mathura', 'Mathura', '2023-11-20 17:57:23', '2023-11-20 17:57:23'),
(223, 'Adityo Kumar Das', 'adityokrdas@gmail.com', '+919872399852', '901731', 'Purnia', 'India', '2023-11-26 19:50:18', '2023-11-26 19:50:18'),
(224, 'Pratik Dhore', 'pratikdhore257@gmail.com', '+919657785244', '921697', 'Tiosa', 'India', '2023-12-01 16:56:36', '2023-12-01 16:56:36'),
(225, 'Senior Scientist and Head', 'r.abraham@gov.in', '+91 9645027060', '782949', 'Thiruvalla', 'India', '2023-12-07 18:13:13', '2023-12-07 18:13:13'),
(226, 'R singh', 'raghav.rajput@gmail.com', '+919560870702', '242293', 'Azamgarh', 'India', '2023-12-26 12:35:11', '2023-12-26 12:35:11'),
(227, 'jyoti sharma', 'jyoti@force.org.in', '+91 9899812888', '412067', 'India', 'India', '2023-12-31 12:32:44', '2023-12-31 12:32:44'),
(228, 'Chiranjeevi Pippalla', 'chiranjeevipippalla@gmail.com', '+91 94412 01825', '019047', 'India', 'India', '2024-01-03 18:38:33', '2024-01-03 18:38:33'),
(229, 'Ganesh', 'satwanganesh57@gmail.com', '+91 9096686669', '160785', 'Pune', 'India', '2024-01-08 10:52:23', '2024-01-08 10:52:23'),
(230, 'Mohd Nadeem', 'mohd.nadeem@fidtr.com', '+91 9625172899', '625018', 'Gurugram', 'India', '2024-01-17 18:59:55', '2024-01-17 18:59:55'),
(231, 'Rahul chaughule', 'rahulchaughule76@gmail.com', '+919284283640', '045374', 'Kariwali', 'India', '2024-01-20 20:56:35', '2024-01-20 20:56:35'),
(232, 'Rana ji', 'mastboyrana007@gmail.com', '+919540210526', '290059', 'Meerut', 'India', '2024-04-02 12:42:29', '2024-04-02 12:42:29'),
(233, 'Dimos  assos', 'dimos.assos@fly4smart.com', '+917428591052', '552048', 'Larnaca', 'Cyprus', '2024-04-15 02:02:31', '2024-04-15 02:02:31'),
(234, 'Arun', 'aruntj@yahoo.com', '+919840035125', '510219', 'India', 'India', '2024-08-13 16:49:37', '2024-08-13 16:49:37'),
(235, 'Arun', 'aruntj@yahoo.com', '+91 9840035125', '154933', 'Chennai', 'India', '2024-08-24 21:21:03', '2024-08-24 21:21:03'),
(236, 'Naresh rajpoot', 'nnnklrajpoot1994@gmail.com', '+916392336506', '172761', 'Chiragan', 'India', '2024-08-29 21:14:52', '2024-08-29 21:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `suppliers_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `total_order_value` varchar(255) DEFAULT NULL,
  `usage_application` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `products_id`, `suppliers_id`, `customer_id`, `company_name`, `quantity`, `total_order_value`, `usage_application`, `created_at`, `updated_at`) VALUES
(1, 5, 61, '1', NULL, '2', '1200', 'test', '2022-04-05 20:07:30', '2022-04-05 20:07:30'),
(2, 6, 64, '2', NULL, '2', '100000', 'Agriculture', '2022-04-06 00:16:25', '2022-04-06 00:16:25'),
(3, 5, 61, '3', NULL, '1', '1', 'photography', '2022-04-10 16:32:33', '2022-04-10 16:32:33'),
(4, 3, 62, '4', NULL, '1', '1', 'Agriculture', '2022-04-13 14:29:29', '2022-04-13 14:29:29'),
(5, 6, 64, '5', NULL, '1', NULL, 'Spray on apple Trees', '2022-04-21 22:18:25', '2022-04-21 22:18:25'),
(6, 13, 58, '6', NULL, '1', NULL, 'Agriculture', '2022-04-22 14:10:49', '2022-04-22 14:10:49'),
(7, 12, 60, '7', 'XYZ Corp', '1', NULL, 'Survey', '2022-04-22 16:17:40', '2022-04-22 16:17:40'),
(8, 7, 61, '8', 'test', '1', NULL, 'test', '2022-04-22 21:00:54', '2022-04-22 21:00:54'),
(9, 17, 34, '9', 'Aktiv', '1', NULL, 'Agriculture', '2022-05-06 22:24:09', '2022-05-06 22:24:09'),
(10, 20, 58, '10', 'Individuals', '1', NULL, 'Farm', '2022-05-28 08:50:00', '2022-05-28 08:50:00'),
(11, 2, 62, '11', 'Farmar', '1', NULL, 'Agriculture', '2022-06-08 15:02:33', '2022-06-08 15:02:33'),
(12, 6, 64, '12', NULL, '1', NULL, 'For Agriculture', '2022-06-13 08:42:45', '2022-06-13 08:42:45'),
(13, 6, 64, '13', 'Farm', '1', NULL, 'Agriculture', '2022-06-21 12:07:33', '2022-06-21 12:07:33'),
(14, 8, 65, '14', NULL, '1', NULL, 'survey and mapping', '2022-06-27 18:00:50', '2022-06-27 18:00:50'),
(15, 23, 43, '15', 'icar -nrcb', '1', NULL, 'agri purpose', '2022-07-16 15:57:51', '2022-07-16 15:57:51'),
(16, 6, 64, '16', 'ICAR-Central Research Institute for Jute and Allied Fibres', '2', NULL, 'Demonstration', '2022-08-05 17:44:21', '2022-08-05 17:44:21'),
(17, 20, 58, '17', NULL, '1', NULL, 'Agricultural Spraying', '2022-08-10 00:49:35', '2022-08-10 00:49:35'),
(18, 20, 58, '18', 'Xiang india export company', '1', NULL, 'Agricultural', '2022-08-14 00:36:28', '2022-08-14 00:36:28'),
(19, 25, 69, '19', 'world consultancy services pvt ltd', '1', NULL, 'phtogrammetry mapping', '2022-08-20 16:45:15', '2022-08-20 16:45:15'),
(20, 20, 58, '20', 'Xiang india export company', '5', NULL, 'Agricultural', '2022-08-21 23:01:06', '2022-08-21 23:01:06'),
(21, 20, 58, '21', 'Personal', '1', NULL, 'Agriculture', '2022-08-22 15:25:10', '2022-08-22 15:25:10'),
(22, 25, 69, '22', 'ACTIVE ENGINEERING', '1', NULL, 'TOPOGRAPHICAL SURVEY WITH LIDAR', '2022-08-24 16:51:33', '2022-08-24 16:51:33'),
(23, 20, 58, '23', 'n/a', '-1', NULL, 'agriculer', '2022-08-27 07:29:10', '2022-08-27 07:29:10'),
(24, 20, 58, '24', 'Sm agency', '1', NULL, 'Usage', '2022-08-31 19:15:56', '2022-08-31 19:15:56'),
(25, 20, 58, '25', 'SRIRASIGREENFRESH', '1', NULL, 'SPRAYING', '2022-08-31 22:34:23', '2022-08-31 22:34:23'),
(26, 25, 69, '26', 'Aktiv', '1', NULL, 'Mapping', '2022-09-13 17:47:55', '2022-09-13 17:47:55'),
(27, 25, 69, '27', 'Spectross Digital Systems (P) Ltd.', '1', NULL, 'mapping', '2022-09-24 17:22:45', '2022-09-24 17:22:45'),
(28, 20, 58, '28', 'SELF USE', '1', NULL, 'SPRAYING', '2022-10-03 15:17:33', '2022-10-03 15:17:33'),
(29, 25, 69, '29', 'Udaan Group', '1', NULL, 'Survey', '2022-10-05 13:26:33', '2022-10-05 13:26:33'),
(30, 25, 69, '30', 'shriji technoaspire', '2', NULL, 'training purpose', '2022-10-08 16:41:45', '2022-10-08 16:41:45'),
(31, 20, 58, '31', 'Samrat agrotech', '1', NULL, 'Farm', '2022-10-09 10:25:57', '2022-10-09 10:25:57'),
(32, 34, 72, '32', NULL, '1', NULL, 'agriculture', '2022-10-11 12:17:09', '2022-10-11 12:17:09'),
(33, 6, 64, '33', NULL, '1', NULL, 'Agriculture', '2022-10-13 20:19:38', '2022-10-13 20:19:38'),
(34, 6, 64, '34', 'Empiral Enterprises', '1', NULL, 'Agriculture Spray Drone', '2022-10-16 18:04:40', '2022-10-16 18:04:40'),
(35, 17, 34, '35', 'Avighna Energy Solution pvt Ltd', '1', NULL, 'Agriculture purpose', '2022-10-18 09:11:30', '2022-10-18 09:11:30'),
(36, 20, 58, '36', 'Jain Agencies', '1', NULL, 'Reseller', '2022-10-23 11:10:58', '2022-10-23 11:10:58'),
(37, 25, 69, '37', 'Parnavi enterprises', '1', NULL, 'Servalance', '2022-10-27 21:28:49', '2022-10-27 21:28:49'),
(38, 25, 69, '38', 'Assam Agricultural University, Jorhat, Assam', '1', NULL, 'Mapping', '2022-10-29 12:49:22', '2022-10-29 12:49:22'),
(39, 17, 34, '39', 'Shree drone services', '1', NULL, 'Agriculture spraying', '2022-10-29 18:56:01', '2022-10-29 18:56:01'),
(40, 25, 69, '40', 'Assam Agricultural University, Jorhat, Assam', '1', NULL, 'Monitoring and mapping agricultural crop fields', '2022-10-31 12:50:54', '2022-10-31 12:50:54'),
(41, 25, 69, '41', 'AgroCast Analytics Pvt Ltd', '1', NULL, 'Topography survey', '2022-11-01 21:03:02', '2022-11-01 21:03:02'),
(42, 1, 62, '42', 'M/S. BENITA  INDUSTRIES   LTD.', '1', NULL, 'MINING SURVEYING  & DEM MODELE', '2022-11-02 17:41:46', '2022-11-02 17:41:46'),
(43, 25, 69, '43', 'Acubop Science', '20', NULL, 'City surveillance', '2022-11-03 20:25:38', '2022-11-03 20:25:38'),
(44, 34, 72, '44', 'Self', '1', NULL, 'Logistics', '2022-11-08 13:05:59', '2022-11-08 13:05:59'),
(45, 25, 69, '45', 'Indian Institute of Water Management', '1', NULL, 'Agricultural field application', '2022-11-10 16:52:22', '2022-11-10 16:52:22'),
(46, 25, 69, '46', 'Individual', '1', NULL, 'Survey of Environmentl Parameters', '2022-11-16 18:22:26', '2022-11-16 18:22:26'),
(47, 25, 69, '47', 'ABC', '1', NULL, 'Personal', '2022-11-24 20:05:33', '2022-11-24 20:05:33'),
(48, 25, 69, '48', 'ABC', '1', NULL, 'Personal', '2022-11-24 20:05:52', '2022-11-24 20:05:52'),
(49, 25, 69, '49', 'ABC', '1', NULL, 'Personal', '2022-11-24 20:05:54', '2022-11-24 20:05:54'),
(50, 25, 69, '50', 'ABC', '1', NULL, 'Personal', '2022-11-24 20:06:09', '2022-11-24 20:06:09'),
(51, 23, 43, '51', 'P.S.ENTERPRISE', '1', NULL, 'Agriculture', '2022-11-25 14:14:20', '2022-11-25 14:14:20'),
(52, 23, 43, '52', 'P.S.ENTERPRISE', '1', NULL, 'Agriculture', '2022-11-25 14:14:26', '2022-11-25 14:14:26'),
(53, 23, 43, '53', 'P.S.ENTERPRISE', '1', NULL, 'Agriculture', '2022-11-25 14:14:41', '2022-11-25 14:14:41'),
(54, 25, 69, '54', 'Regen Services', '1', NULL, 'Mapping', '2022-11-27 00:07:13', '2022-11-27 00:07:13'),
(55, 25, 69, '55', NULL, '1', NULL, 'Agri', '2022-11-30 18:03:38', '2022-11-30 18:03:38'),
(56, 25, 69, '56', 'rani lakshmi bai central agricultural university jhansi', '1', NULL, 'Spray pesticide', '2022-12-01 17:55:39', '2022-12-01 17:55:39'),
(57, 25, 69, '57', 'rani lakshmi bai central agricultural university jhansi', '1', NULL, 'Spray pesticide', '2022-12-01 17:55:54', '2022-12-01 17:55:54'),
(58, 25, 69, '58', 'rani lakshmi bai central agricultural university jhansi', '1', NULL, 'Spray pesticide', '2022-12-01 17:56:05', '2022-12-01 17:56:05'),
(59, 25, 69, '59', 'rani lakshmi bai central agricultural university jhansi', '1', NULL, 'Spray pesticide', '2022-12-01 17:56:31', '2022-12-01 17:56:31'),
(60, 25, 69, '60', 'rani lakshmi bai central agricultural university jhansi', '1', NULL, 'Spray pesticide', '2022-12-01 17:56:51', '2022-12-01 17:56:51'),
(61, 31, 72, '61', 'Bharat Aero', '1', NULL, 'Surveillance', '2022-12-02 13:39:36', '2022-12-02 13:39:36'),
(62, 31, 72, '62', 'Bharat Aero', '1', NULL, 'Surveillance', '2022-12-02 13:39:44', '2022-12-02 13:39:44'),
(63, 35, 73, '63', 'Dit creative hub', '1', NULL, 'Canera view', '2022-12-09 01:32:07', '2022-12-09 01:32:07'),
(64, 35, 73, '64', 'Dit creative hub', '1', NULL, 'Canera view', '2022-12-09 01:32:23', '2022-12-09 01:32:23'),
(65, 17, 34, '65', NULL, '1', NULL, 'household/rental servises', '2022-12-10 20:06:25', '2022-12-10 20:06:25'),
(66, 24, 56, '66', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:49:56', '2022-12-16 07:49:56'),
(67, 24, 56, '67', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:49:58', '2022-12-16 07:49:58'),
(68, 24, 56, '68', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:50:03', '2022-12-16 07:50:03'),
(69, 24, 56, '69', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:50:09', '2022-12-16 07:50:09'),
(70, 24, 56, '70', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:50:30', '2022-12-16 07:50:30'),
(71, 24, 56, '71', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:28', '2022-12-16 07:51:28'),
(72, 24, 56, '72', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:31', '2022-12-16 07:51:31'),
(73, 24, 56, '73', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:36', '2022-12-16 07:51:36'),
(74, 24, 56, '74', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:36', '2022-12-16 07:51:36'),
(75, 24, 56, '75', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:37', '2022-12-16 07:51:37'),
(76, 24, 56, '76', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:37', '2022-12-16 07:51:37'),
(77, 24, 56, '77', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:38', '2022-12-16 07:51:38'),
(78, 24, 56, '78', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:38', '2022-12-16 07:51:38'),
(79, 24, 56, '79', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:38', '2022-12-16 07:51:38'),
(80, 24, 56, '80', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:38', '2022-12-16 07:51:38'),
(81, 24, 56, '81', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:38', '2022-12-16 07:51:38'),
(82, 24, 56, '82', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:39', '2022-12-16 07:51:39'),
(83, 24, 56, '83', 'Govt of India', '02', NULL, 'Survey', '2022-12-16 07:51:40', '2022-12-16 07:51:40'),
(84, 20, 58, '84', 'Ranjeet Kolte', '1', NULL, 'Agricultural spraying use', '2022-12-17 15:04:10', '2022-12-17 15:04:10'),
(85, 13, 58, '85', 'Ranjeet Kolte', '1', NULL, 'Agricultural spraying use', '2022-12-17 15:11:22', '2022-12-17 15:11:22'),
(86, 13, 58, '86', 'Ranjeet Kolte', '1', NULL, 'Agricultural spraying use', '2022-12-17 15:13:59', '2022-12-17 15:13:59'),
(87, 20, 58, '87', 'RS farm', '1', NULL, 'Agricultural spray', '2022-12-18 18:59:07', '2022-12-18 18:59:07'),
(88, 20, 58, '88', 'RS farm', '1', NULL, 'Agricultural spray', '2022-12-18 18:59:10', '2022-12-18 18:59:10'),
(89, 19, 58, '89', 'Chatak Innovations LLp', '1', NULL, 'Seed Spreading', '2022-12-26 17:12:44', '2022-12-26 17:12:44'),
(90, 19, 58, '90', 'Chatak Innovations LLp', '1', NULL, 'Seed Spreading', '2022-12-26 17:12:49', '2022-12-26 17:12:49'),
(91, 25, 69, '91', 'individual', '2', NULL, 'personal purpose', '2023-01-06 19:58:46', '2023-01-06 19:58:46'),
(92, 25, 69, '92', 'individual', '2', NULL, 'personal purpose', '2023-01-06 19:58:55', '2023-01-06 19:58:55'),
(93, 25, 69, '93', 'CFMTTI, Budni', '01', NULL, 'Training', '2023-01-11 11:02:53', '2023-01-11 11:02:53'),
(94, 25, 69, '94', 'CFMTTI, Budni', '2', NULL, 'Photography', '2023-01-12 18:41:21', '2023-01-12 18:41:21'),
(95, 36, 73, '95', 'Aktiv', '1', NULL, 'Mapping', '2023-01-18 11:40:24', '2023-01-18 11:40:24'),
(96, 25, 69, '96', 'Nil', '1', NULL, 'Training', '2023-01-18 12:47:07', '2023-01-18 12:47:07'),
(97, 25, 69, '97', NULL, '4', NULL, 'Training', '2023-01-20 10:24:44', '2023-01-20 10:24:44'),
(98, 25, 69, '98', NULL, '4', NULL, 'Training', '2023-01-20 10:25:09', '2023-01-20 10:25:09'),
(99, 25, 69, '99', NULL, '4', NULL, 'Training', '2023-01-20 10:26:03', '2023-01-20 10:26:03'),
(100, 25, 69, '100', 'Nad', '4', NULL, 'Training', '2023-01-20 10:28:55', '2023-01-20 10:28:55'),
(101, 25, 69, '101', 'Nad', '4', NULL, 'Training', '2023-01-20 10:37:17', '2023-01-20 10:37:17'),
(102, 25, 69, '102', 'Assam Agricultural University, Jorhat', '1', NULL, 'Research Purpose', '2023-01-21 00:57:16', '2023-01-21 00:57:16'),
(103, 25, 69, '103', 'Assam Agricultural University, Jorhat', '1', NULL, 'Research Purpose', '2023-01-21 00:59:05', '2023-01-21 00:59:05'),
(104, 25, 69, '104', 'Assam Agricultural University, Jorhat', '1', NULL, 'Research Purpose', '2023-01-21 01:03:35', '2023-01-21 01:03:35'),
(105, 25, 69, '105', 'Self', '1', NULL, 'self', '2023-01-23 20:56:05', '2023-01-23 20:56:05'),
(106, 25, 69, '106', 'Raipur Institute of Technology, Raipur', '2', NULL, 'We are in process of  establishing R.P.T.O and required for Training purpose', '2023-01-30 15:10:08', '2023-01-30 15:10:08'),
(107, 25, 69, '107', 'Own', '1', NULL, 'Archeological', '2023-01-31 21:47:24', '2023-01-31 21:47:24'),
(108, 25, 69, '108', 'Indian Institute of Water Management', '1', NULL, 'Agricultural research field application', '2023-02-02 21:27:13', '2023-02-02 21:27:13'),
(109, 25, 69, '109', 'Indian Institute of Water Management', '1', NULL, 'Agricultural research field application', '2023-02-02 21:27:35', '2023-02-02 21:27:35'),
(110, 25, 69, '110', 'Indian Institute of Water Management', '1', NULL, 'Agricultural research field application', '2023-02-02 21:27:39', '2023-02-02 21:27:39'),
(111, 20, 58, '111', 'self', '01', NULL, 'agri', '2023-02-05 23:52:42', '2023-02-05 23:52:42'),
(112, 19, 58, '112', 'Pallishree Limited', '1', NULL, 'Drone Seedind', '2023-02-07 16:17:47', '2023-02-07 16:17:47'),
(113, 25, 69, '113', NULL, '02', NULL, 'training', '2023-02-08 17:32:08', '2023-02-08 17:32:08'),
(114, 25, 69, '114', 'ASTROX AEROSPACE', '1', NULL, 'JUST ENQUIRED', '2023-02-10 16:53:56', '2023-02-10 16:53:56'),
(115, 32, 72, '115', 'JASON SYSTEMS', '1', NULL, 'Demonstration to defence', '2023-02-12 09:32:11', '2023-02-12 09:32:11'),
(116, 32, 72, '116', 'JASON SYSTEMS', '1', NULL, 'Demonstration to defence', '2023-02-12 09:32:27', '2023-02-12 09:32:27'),
(117, 8, 65, '117', 'Modern Insulators Limited', '1', NULL, 'Transmission lines Insulator survey', '2023-02-14 12:08:13', '2023-02-14 12:08:13'),
(118, 8, 65, '118', 'Modern Insulators Limited', '1', NULL, 'Transmission lines Insulator survey', '2023-02-14 12:08:18', '2023-02-14 12:08:18'),
(119, 13, 58, '119', NULL, '15', NULL, 'personal', '2023-02-22 15:21:56', '2023-02-22 15:21:56'),
(120, 13, 58, '120', NULL, '15', NULL, 'personal', '2023-02-22 15:22:20', '2023-02-22 15:22:20'),
(121, 13, 58, '121', NULL, '15', NULL, 'personal', '2023-02-22 15:22:35', '2023-02-22 15:22:35'),
(122, 26, 70, '122', 'Drones Tech Lab', '5', NULL, 'delivery', '2023-02-26 02:02:29', '2023-02-26 02:02:29'),
(123, 32, 72, '123', 'Aktiv', '2', NULL, 'Survey', '2023-03-03 13:47:37', '2023-03-03 13:47:37'),
(124, 32, 72, '124', 'Aktiv', '2', NULL, 'Survey', '2023-03-03 13:48:55', '2023-03-03 13:48:55'),
(125, 38, 73, '125', 'test', '1', NULL, 'test', '2023-03-03 20:22:28', '2023-03-03 20:22:28'),
(126, 38, 73, '126', 'test', '1', NULL, 'test', '2023-03-03 20:24:22', '2023-03-03 20:24:22'),
(127, 38, 73, '127', 'test', '1', NULL, 'test', '2023-03-03 20:26:10', '2023-03-03 20:26:10'),
(128, 38, 73, '128', 'test', '1', NULL, 'test', '2023-03-03 20:28:11', '2023-03-03 20:28:11'),
(129, 38, 73, '129', 'test', '1', NULL, 'test', '2023-03-03 20:30:49', '2023-03-03 20:30:49'),
(130, 38, 73, '130', 'test', '1', NULL, 'test', '2023-03-03 20:31:04', '2023-03-03 20:31:04'),
(131, 20, 58, '131', 'Aktiv', '7', NULL, 'Agriculture', '2023-03-03 20:54:55', '2023-03-03 20:54:55'),
(132, 20, 58, '132', 'Aktiv', '7', NULL, 'Agriculture', '2023-03-03 20:55:22', '2023-03-03 20:55:22'),
(133, 20, 58, '133', 'Aktiv', '7', NULL, 'Agriculture', '2023-03-03 20:55:58', '2023-03-03 20:55:58'),
(134, 20, 58, '134', 'XYZ Tech', '4', NULL, 'Agriculture', '2023-03-03 21:09:52', '2023-03-03 21:09:52'),
(135, 38, 73, '135', 'test', '1', NULL, 'test', '2023-03-03 21:10:48', '2023-03-03 21:10:48'),
(136, 25, 69, '136', 'K.R Mangalam University , Sohna Road , Gurgaon', NULL, NULL, 'RPTO', '2023-03-04 17:03:19', '2023-03-04 17:03:19'),
(137, 25, 69, '137', 'Horizon Ventures', '1', NULL, 'survey', '2023-03-05 20:41:20', '2023-03-05 20:41:20'),
(138, 20, 58, '138', 'SRI VINAYAGA AGENCIES', '01', NULL, 'AGRICULTURE', '2023-03-08 14:33:25', '2023-03-08 14:33:25'),
(139, 13, 58, '139', 'Aktiv', '1', NULL, 'Agriculture', '2023-03-12 02:12:19', '2023-03-12 02:12:19'),
(140, 20, 58, '140', 'Own use', '1', NULL, 'Agriculture', '2023-03-14 17:07:55', '2023-03-14 17:07:55'),
(141, 25, 69, '141', 'AM/NS India', '1', NULL, 'For Thermography in Plant', '2023-03-17 13:09:37', '2023-03-17 13:09:37'),
(142, 20, 58, '142', 'Rabinarayan Dash', '1', NULL, 'Agriculture', '2023-03-22 23:09:52', '2023-03-22 23:09:52'),
(143, 13, 58, '143', 'None', '1', NULL, 'For spring in farm', '2023-03-27 18:51:04', '2023-03-27 18:51:04'),
(144, 35, 73, '144', 'Steadiview', '6', NULL, 'I Need TB48S batteries', '2023-04-01 22:20:01', '2023-04-01 22:20:01'),
(145, 23, 43, '145', 'Agricura', '2', NULL, 'agricultural spraying', '2023-04-03 19:21:06', '2023-04-03 19:21:06'),
(146, 17, 34, '146', NULL, '1', NULL, 'Agriculture', '2023-04-04 23:27:09', '2023-04-04 23:27:09'),
(147, 20, 58, '147', 'Minakshi Agro Sales', '5', NULL, 'Reselling', '2023-04-15 20:48:16', '2023-04-15 20:48:16'),
(148, 20, 58, '148', 'Smart Agricultural Services', '1', NULL, 'Spraying', '2023-04-18 23:20:22', '2023-04-18 23:20:22'),
(149, 25, 69, '149', 'APSS TECH.PVT LTD', '1', NULL, 'OIL AND GAS INSPECTION', '2023-04-27 16:35:10', '2023-04-27 16:35:10'),
(150, 13, 58, '150', 'sunrise enterprise', '10', NULL, 'resale', '2023-05-08 19:42:31', '2023-05-08 19:42:31'),
(151, 17, 34, '151', 'Riva Agro', '1', NULL, 'farming', '2023-05-20 01:47:05', '2023-05-20 01:47:05'),
(152, 13, 58, '152', 'Anbu bio world', '2', NULL, 'Agri', '2023-05-22 14:39:59', '2023-05-22 14:39:59'),
(153, 25, 69, '153', 'Drobots Tech Pvt Ltd', '2', NULL, 'RPTO Training purpose', '2023-05-22 17:49:30', '2023-05-22 17:49:30'),
(154, 13, 58, '154', NULL, '1', NULL, NULL, '2023-05-25 20:32:36', '2023-05-25 20:32:36'),
(155, 31, 72, '155', 'uav', '1', NULL, 'training', '2023-06-01 13:43:28', '2023-06-01 13:43:28'),
(156, 23, 43, '156', 'Bots & drons', '15', NULL, 'Farming purpose', '2023-06-01 21:44:55', '2023-06-01 21:44:55'),
(157, 23, 43, '157', 'Drone Raja 2.0', '1', NULL, 'Agriculture', '2023-06-03 00:27:51', '2023-06-03 00:27:51'),
(158, 17, 34, '158', NULL, '1', NULL, 'Agriculture', '2023-06-12 10:58:26', '2023-06-12 10:58:26'),
(159, 17, 34, '159', NULL, '1', NULL, NULL, '2023-06-13 00:18:52', '2023-06-13 00:18:52'),
(160, 17, 34, '160', 'Subhkhyati aerospace pvt ltd', '2', NULL, 'Training/spraying', '2023-06-14 11:53:20', '2023-06-14 11:53:20'),
(161, 19, 58, '161', 'Greenbox Enterprise', '1', NULL, 'seed sowing', '2023-06-14 22:29:23', '2023-06-14 22:29:23'),
(162, 20, 58, '162', NULL, '1', NULL, NULL, '2023-06-16 23:36:44', '2023-06-16 23:36:44'),
(163, 13, 58, '163', 'Leher', '5', NULL, 'Spraying and Crop Monitoring', '2023-06-19 16:31:19', '2023-06-19 16:31:19'),
(164, 17, 34, '164', 'Nestham Rural and Urban development society', '1', NULL, 'Agricultural sprayings', '2023-06-23 14:29:34', '2023-06-23 14:29:34'),
(165, 13, 58, '165', 'Nestham Rural and Urban development society', '1', NULL, 'Agricultural sprayings', '2023-06-23 14:30:38', '2023-06-23 14:30:38'),
(166, 13, 58, '166', 'Nothing', '1', NULL, 'Farmers help', '2023-06-25 09:36:56', '2023-06-25 09:36:56'),
(167, 23, 43, '167', 'Chaudhary sultan Singh farmer producer company ltd', '1', NULL, 'Farming purpose', '2023-06-26 18:59:18', '2023-06-26 18:59:18'),
(168, 13, 58, '168', 'Khatushyam Farmer producer company', '1', NULL, 'farming', '2023-06-30 13:18:34', '2023-06-30 13:18:34'),
(169, 13, 58, '169', NULL, '1', NULL, 'Agriculture for rent', '2023-07-03 13:39:12', '2023-07-03 13:39:12'),
(170, 35, 73, '170', 'IGRI', '1', NULL, 'Surveying', '2023-07-04 22:42:12', '2023-07-04 22:42:12'),
(171, 13, 58, '171', 'Amarnath krishi kendra', '1', NULL, 'For our Shop, our business is Agro related, like seeds pesticides and fertilizers', '2023-07-06 11:23:49', '2023-07-06 11:23:49'),
(172, 35, 73, '172', 'Omcinema', '1', NULL, 'Coastal and sea filming for Govt.Projects', '2023-07-14 13:04:46', '2023-07-14 13:04:46'),
(173, 13, 58, '173', NULL, NULL, NULL, NULL, '2023-07-15 10:41:40', '2023-07-15 10:41:40'),
(174, 13, 58, '174', 'Shri', '1', NULL, 'For business purposes (rent)', '2023-07-17 15:29:00', '2023-07-17 15:29:00'),
(175, 25, 69, '175', 'Indronovation labs', '1', NULL, 'Drone with RGB camera and gimbal', '2023-07-17 18:15:53', '2023-07-17 18:15:53'),
(176, 25, 69, '176', 'Detect Technologies Pvt Ltd', '0', NULL, 'Type certified UIN', '2023-07-21 16:48:09', '2023-07-21 16:48:09'),
(177, 17, 34, '177', 'Sri vigneswsra agros', '1', NULL, 'For agricultural purposes', '2023-07-22 13:02:07', '2023-07-22 13:02:07'),
(178, 20, 58, '178', 'S.B.Dairy Farms', '2', NULL, 'Agricultural', '2023-07-23 20:54:39', '2023-07-23 20:54:39'),
(179, 13, 58, '179', 'Villam Farms', '2', NULL, 'Agriculture', '2023-07-24 12:58:43', '2023-07-24 12:58:43'),
(180, 13, 58, '180', 'Lakshmi cheswika enterprises', '5', NULL, 'Paddy', '2023-07-30 14:59:43', '2023-07-30 14:59:43'),
(181, 13, 58, '181', 'SEIL ENERGY INDIA LTD', '1', NULL, 'Coal stock volume verification', '2023-08-01 20:29:05', '2023-08-01 20:29:05'),
(182, 13, 58, '182', NULL, '10', NULL, 'Agriculture', '2023-08-07 10:12:07', '2023-08-07 10:12:07'),
(183, 17, 34, '183', 'Individual farmer', '01', NULL, 'Pesticide spray', '2023-08-07 13:40:28', '2023-08-07 13:40:28'),
(184, 13, 58, '184', 'Sadasivam', '1', NULL, 'Agri', '2023-08-08 21:00:08', '2023-08-08 21:00:08'),
(185, 20, 58, '185', 'SELF USE', '1', NULL, 'SPRAYING', '2023-08-10 20:32:09', '2023-08-10 20:32:09'),
(186, 13, 58, '186', 'Bots & Drones UK Ltd', '1', NULL, 'Agriculture', '2023-08-11 03:33:04', '2023-08-11 03:33:04'),
(187, 17, 34, '187', 'AHAM', '1', NULL, 'agricultural use', '2023-08-17 03:36:15', '2023-08-17 03:36:15'),
(188, 13, 58, '188', 'AHAM', '1', NULL, 'agricultural use', '2023-08-17 04:14:47', '2023-08-17 04:14:47'),
(189, 41, 57, '189', 'AHAM', '1', NULL, 'agricultural use', '2023-08-17 04:23:43', '2023-08-17 04:23:43'),
(190, 40, 72, '190', 'StartUp (In formation)', '1', NULL, 'Payload of upto 5 Kg for at least 30 minutes', '2023-08-18 17:53:18', '2023-08-18 17:53:18'),
(191, 17, 34, '191', NULL, '1', NULL, NULL, '2023-08-20 19:32:45', '2023-08-20 19:32:45'),
(192, 13, 58, '192', 'Own use', '1', NULL, 'Farm Fertilizer sprayer', '2023-08-21 13:48:00', '2023-08-21 13:48:00'),
(193, 20, 58, '193', 'Rk trade', '1', NULL, 'Trading', '2023-08-22 15:14:47', '2023-08-22 15:14:47'),
(194, 13, 58, '194', NULL, '1', NULL, 'For Agriculture use, Spray and all', '2023-08-25 13:17:21', '2023-08-25 13:17:21'),
(195, 13, 58, '195', 'CBR AGRICULTURAL FARMS', '1', NULL, 'Spray', '2023-08-26 11:22:02', '2023-08-26 11:22:02'),
(196, 13, 58, '196', 'Sri Vanguard Exports', '2', NULL, 'Spray pesticides', '2023-08-26 12:48:42', '2023-08-26 12:48:42'),
(197, 23, 43, '197', NULL, '1', NULL, 'Farming', '2023-08-28 19:14:39', '2023-08-28 19:14:39'),
(198, 39, 72, '198', 'shri kuruvanshi traders', '2', NULL, 'aggri spray', '2023-08-29 02:46:04', '2023-08-29 02:46:04'),
(199, 17, 34, '199', 'Agribot, Garuda', '1', NULL, 'Agriculture', '2023-09-01 09:12:01', '2023-09-01 09:12:01'),
(200, 25, 69, '200', 'NIKDU FOUNDATION', '2', NULL, 'N', '2023-09-01 22:33:22', '2023-09-01 22:33:22'),
(201, 41, 57, '201', 'Green Acres LLP', '1', NULL, 'Aquaculture and Agro', '2023-09-06 12:58:36', '2023-09-06 12:58:36'),
(202, 25, 69, '202', NULL, NULL, NULL, NULL, '2023-09-09 16:35:00', '2023-09-09 16:35:00'),
(203, 17, 34, '203', 'Farmer', '1', NULL, 'Farming uses', '2023-09-15 11:32:15', '2023-09-15 11:32:15'),
(204, 6, 64, '204', 'Jay khodiyar Industries', '5', NULL, 'Farming', '2023-09-20 17:18:02', '2023-09-20 17:18:02'),
(205, 20, 58, '205', 'Shriniwas KSK', '1', NULL, 'Agriculture', '2023-09-21 18:14:57', '2023-09-21 18:14:57'),
(206, 20, 58, '206', 'Shriniwas KSK', '1', NULL, 'Agriculture', '2023-09-21 18:15:10', '2023-09-21 18:15:10'),
(207, 25, 69, '207', 'Scientech technology Pvt ltd', '1', NULL, 'mapping', '2023-09-27 12:39:56', '2023-09-27 12:39:56'),
(208, 41, 57, '208', 'Scientech technology Pvt ltd', '1', NULL, 'education', '2023-09-27 12:41:39', '2023-09-27 12:41:39'),
(209, 13, 58, '209', NULL, '1', NULL, 'Agriculture', '2023-09-29 19:15:26', '2023-09-29 19:15:26'),
(210, 25, 69, '210', 'Indronovation labs', '1', NULL, 'Drone with RGB camera and gimbal', '2023-10-02 15:24:28', '2023-10-02 15:24:28'),
(211, 5, 61, '211', 'Berns Brett India Insurance Broking Pvt. Ltd.', NULL, NULL, NULL, '2023-10-06 16:40:57', '2023-10-06 16:40:57'),
(212, 30, 70, '212', 'Prompt', NULL, NULL, NULL, '2023-10-06 19:04:57', '2023-10-06 19:04:57'),
(213, 20, 58, '213', 'Personal use', '1', NULL, 'Agricultural', '2023-10-12 17:59:30', '2023-10-12 17:59:30'),
(214, 39, 72, '214', 'Gokul Farm house', '1', NULL, 'Commercial purpose agriculture spray', '2023-10-13 10:46:45', '2023-10-13 10:46:45'),
(215, 25, 69, '215', 'Zerogravit aero system', '2', NULL, 'RPTO training', '2023-10-13 16:06:27', '2023-10-13 16:06:27'),
(216, 13, 58, '216', 'NA', '1', NULL, 'Agric', '2023-10-28 14:05:52', '2023-10-28 14:05:52'),
(217, 13, 58, '217', 'RISE', '1', NULL, 'Agriculture', '2023-11-10 04:09:43', '2023-11-10 04:09:43'),
(218, 13, 58, '218', NULL, NULL, NULL, NULL, '2023-11-12 18:50:57', '2023-11-12 18:50:57'),
(219, 25, 69, '219', 'Triveni', '5', NULL, NULL, '2023-11-14 14:30:20', '2023-11-14 14:30:20'),
(220, 25, 69, '220', 'TKS Consultancy Services', '1', NULL, 'Mapping', '2023-11-18 18:04:08', '2023-11-18 18:04:08'),
(221, 25, 69, '221', 'Redgrit Drones And Technologies Pvt ltd', '2', NULL, 'RPTO', '2023-11-18 20:23:26', '2023-11-18 20:23:26'),
(222, 17, 34, '222', 'Sk agriculture', NULL, NULL, 'Agriculture', '2023-11-20 17:57:23', '2023-11-20 17:57:23'),
(223, 35, 73, '223', 'ACDI', '1', NULL, 'Construction site monitoring', '2023-11-26 19:50:18', '2023-11-26 19:50:18'),
(224, 17, 34, '224', 'Personal', '1', NULL, 'Spraying', '2023-12-01 16:56:36', '2023-12-01 16:56:36'),
(225, 20, 58, '225', 'ICAR- Krishi Vigyan Kendra', '1', NULL, 'Agricultural use', '2023-12-07 18:13:13', '2023-12-07 18:13:13'),
(226, 13, 58, '226', 'Amari Agro', '2', NULL, 'Agricultural farming and rental', '2023-12-26 12:35:11', '2023-12-26 12:35:11'),
(227, 19, 58, '227', 'FORCE', '1', NULL, 'Demo farms for climate smart profitable farming', '2023-12-31 12:32:44', '2023-12-31 12:32:44'),
(228, 36, 73, '228', 'Urban Matrix Technologies', NULL, NULL, NULL, '2024-01-03 18:38:33', '2024-01-03 18:38:33'),
(229, 17, 34, '229', 'NA', '1', NULL, 'NA', '2024-01-08 10:52:23', '2024-01-08 10:52:23'),
(230, 17, 34, '230', 'Fore Institute of Drone Technology and Research', '2', NULL, 'Training', '2024-01-17 18:59:55', '2024-01-17 18:59:55'),
(231, 18, 67, '231', NULL, '1', NULL, NULL, '2024-01-20 20:56:35', '2024-01-20 20:56:35'),
(232, 23, 43, '232', NULL, '1', NULL, 'Agriculture drone', '2024-04-02 12:42:29', '2024-04-02 12:42:29'),
(233, 4, 61, '233', 'Fly4smart', '5', NULL, 'Private', '2024-04-15 02:02:31', '2024-04-15 02:02:31'),
(234, 5, 61, '234', 'Urban', '2', NULL, 'Trial', '2024-08-13 16:49:37', '2024-08-13 16:49:37'),
(235, 27, 71, '235', 'Bell', '2', NULL, 'Inspection', '2024-08-24 21:21:03', '2024-08-24 21:21:03'),
(236, 13, 58, '236', 'Garuda', '1', NULL, 'Agriculture', '2024-08-29 21:14:52', '2024-08-29 21:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries1`
--

CREATE TABLE `enquiries1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` int(10) UNSIGNED NOT NULL,
  `buyer_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries1`
--

INSERT INTO `enquiries1` (`id`, `seller_id`, `buyer_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '2022-09-21 07:46:15', '2022-09-21 07:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2022_03_26_111145_create_suppliers_table', 1),
(5, '2022_03_26_111157_create_products_table', 1),
(6, '2022_03_26_134422_create_customers_table', 2),
(7, '2022_03_26_134525_create_enquiries_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `supplier_id` int(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(10000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `pixel` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `supplier_id`, `name`, `product_code`, `description`, `link`, `image`, `brand`, `color`, `model_name`, `pixel`, `created_at`, `updated_at`) VALUES
(1, 62, 'Skykeeper X', 'Skykeeper X M/S', 'UAV Mapping & Surveying Drone', 'http://botsanddrones.biz/product/eyJpdiI6Ik56VHFvWXlhMHh5WmUzRkQ4YzhjS2c9PSIsInZhbHVlIjoiNVZIMVZRMm1NTUhsbzZlN1ZWTzNLdz09IiwibWFjIjoiOWMyYjdkN2QxOWEyMjYxYmE3YjZmYmIxZTVlZjVjNzUyZTFmMDJiNDQwZGMzMjJiYjA1ZGY2OGUwNTczNTA3NSJ9', 'http://botsanddrones.biz/public/images/1649591386.png', 'Skykeeper', 'Black', 'Skykeeper X Mapping/ Survey', NULL, '2022-03-30 07:53:42', '2022-04-10 18:49:46'),
(2, 62, 'Skykeeper X2', 'Skykeeper X2 AG', 'Agriculture Spraying Drone', 'http://botsanddrones.biz/product/eyJpdiI6IkM1UDQxNS8xckJ4cTUvemxuU2JoVmc9PSIsInZhbHVlIjoiZVVFYnVjKzBpZHBPSGNWQklkblhVUT09IiwibWFjIjoiNjY5YmY0YjcyOGMyNTgxM2I4M2QzYjE2MTM1OTcxYmNmNTQxMDE3MmRmNDU5YmFhMzEyNzc0NDAyMjgxZTY5NyJ9', 'http://botsanddrones.biz/public/images/1649590831.jpg', 'Skykeeper', 'black', 'Skykeeper X2', NULL, '2022-03-30 07:54:01', '2022-04-10 18:40:31'),
(3, 62, 'Skykeeper X4', 'Skykeeper X4 AG', 'Agriculture Spraying Drone', 'http://botsanddrones.biz/product/eyJpdiI6IkZwMHhmVWMxNXBxb2x1MldNZVRJNnc9PSIsInZhbHVlIjoia20vQUwxTFZJQlBINXFQelhEZXZNUT09IiwibWFjIjoiNDE5NTM2NDJhNGM1ZmQzOWYxN2ZlNmQyZGJlOWQ1MGVkYWIzNmM5YzA1MzcyYTg3MmFjMDM4MDNkZmMyMDMzZSJ9', 'http://botsanddrones.biz/public/images/1649589785.png', 'Skykeeper', 'white', 'Skykeeper X4', 'sdsd', '2022-03-30 07:54:17', '2022-04-10 18:23:06'),
(4, 61, 'Johnnette JF2 Fixed Wing Drone', 'MDJTJF2', 'Johnnette JF-2 is a lightweight fixed-wing drone that is simple to fly and is designed for surveillance and reconnaissance operations.', 'http://botsanddrones.biz/product/eyJpdiI6ImpLd0I1T25zNE1GMUJCTzNKUWxQb0E9PSIsInZhbHVlIjoiMnFiUzJpRGZRVTlHbmlkakNtcFJtQT09IiwibWFjIjoiNWE5NjQ0Njg1ZTBiNTY0YWI1ZDMzZGIzMjk1YjY2NDdiMzI5MDYwOTJjZGZjZjFjOTBjYjYyMzgyYmMyMWQ0NSJ9', 'http://botsanddrones.biz/public/images/1668429287.png', 'Johnnette Technologies', 'Black', 'JF2 Fixed Wing Drone', NULL, '2022-04-05 19:59:26', '2022-11-14 19:34:47'),
(5, 61, 'Johnnette JF 5 Military Drone', 'MDJTJF5', 'Johnnette JF-5 is a High-Altitude Long Endurance Strategic Unmanned Combat Aerial Vehicle.', 'http://botsanddrones.biz/product/eyJpdiI6IjRTbEdxdW5ROWNLS1JpV01GVnBCdkE9PSIsInZhbHVlIjoibXZTT09lYWVKVTNtSFJiazN5NUxzQT09IiwibWFjIjoiZTZiZWQwZWMyYzIxNTc1Nzg4Nzc0OGVjYjUzYTYyYjViOGJmZmY1ODliZTkyMjVjNjVlY2IyOWQyNmFkMjQ3MiJ9', 'http://botsanddrones.biz/public/images/1668429682.png', 'Johnnette Technologies', 'NA', 'JF 5 H.A.L.E Military Drone', NULL, '2022-04-05 20:06:07', '2022-11-14 19:41:22'),
(6, 64, 'Prime AG', 'Prime AG 10', 'Agriculture Spraying Drone', 'http://botsanddrones.biz/product/eyJpdiI6ImY5b0UrSnpOcFFBVk1Ha1NkYm4zWkE9PSIsInZhbHVlIjoieHpXMmptREZCTnY4N0Y3NG0xRnFZQT09IiwibWFjIjoiYzQyYjI0YmRjYjdmNGQ4NjE1MGFiNGRlMTc2M2E4MTg5NDE3NzEwNTAzYjIyNzkzYTE4ZjAxZDI3N2JiMmY0NCJ9', 'http://botsanddrones.biz/public/images/1649178861.JPG', 'Prime UAV', 'White', 'Prime Ag 10 Litre', NULL, '2022-04-06 00:14:21', '2022-04-20 01:19:14'),
(7, 61, 'JF 4 Tactical UAS', 'MDJTJF4', 'Johnnette JF-4 is a low costing Tactical UAS that combines an impressive performance envelope with extended operational coverage and a radically reduced logistical footprint.', 'http://botsanddrones.biz/product/eyJpdiI6InE4Rjlod0NVekRNZEJHNTJMdDFoUEE9PSIsInZhbHVlIjoiQ2hrcFRJdTFiNlc3MnRBZWZzamhGZz09IiwibWFjIjoiMzQ2ZGNkYWQyYTdkYzM2MDc2ZDUwNDllNDM4Y2JiNzkyMzNmMmYwMTFkZTY4MDgyOTkzYjQwMGIyZmRiNWY5YyJ9', 'http://botsanddrones.biz/public/images/1668430510.png', 'Johnnette Technologies', 'NA', 'JF 4 Tactical UAS', NULL, '2022-04-06 00:30:29', '2022-11-14 19:58:07'),
(8, 65, 'IG Drone 100/ 200', 'IG Micro Drone 100/ 200', 'Surveying, mapping, inspection, construction, mining, volumetrics and precision agriculture', 'http://botsanddrones.biz/product/eyJpdiI6ImQvSk5VbFFoSWxMdEV1YVRSR0lGMFE9PSIsInZhbHVlIjoiUmw2Ylc3Z3VpT01VUDdCbVk0OFBkZz09IiwibWFjIjoiNzk5NWE1MzJjZDA3YWNmMzdkMzRhODVhOGRjZjU5YTljMjk4N2Q3ODU2NjdmYmIyZGFjZmYyYTM3MzBiMzE4YyJ9', 'http://botsanddrones.biz/public/images/1650391117.webp', 'IG Drone', 'Black With Silver Highlights', 'IG Drone Micro', NULL, '2022-04-10 18:00:02', '2022-04-20 00:58:37'),
(9, 60, 'Shark Drone', 'Shark AMOS', 'A military grade drone, built with the focus on military operations, but it still has more applications than just that. Oil & Gas, Border Security, \r\nMining & Construction.', 'http://botsanddrones.biz/product/eyJpdiI6IjZVam1ESHQ5dGlQeGZhWUVuMjYyVFE9PSIsInZhbHVlIjoiLzhlVFdybzg2eHFmTjl4cnNhV0lBdz09IiwibWFjIjoiMmE5NzAzNWQ5OTE0ZDc2NjVlZGQ0ODNkM2Q2MGQxYmUxMjdlNzk2ZjUzYTMwMTIyMGMxN2Y3NzYzMTA4OGFhYSJ9', 'http://botsanddrones.biz/public/images/1649591917.png', 'AMOS', 'Black', 'Shark Military Grade Drone', NULL, '2022-04-10 18:58:37', '2022-04-10 18:58:37'),
(11, 60, 'BEE', 'AMOS BEE', 'Military Grade Drone', 'http://botsanddrones.biz/product/eyJpdiI6InI5Yk90dFJqMGNIZ0FPUEZNRFNkQ1E9PSIsInZhbHVlIjoiT2hsYm9OSytvNmZEcmcrcmJWUHpqZz09IiwibWFjIjoiY2U1MjIwNDQzMzdmNjJmZTVkMWVlYmE0YjYzNzA0YTlkNjdhMjczODk5NDUwOTc1YmRiN2Y5Njg4Y2Y0NmEyMyJ9', 'http://botsanddrones.biz/public/images/1650396127.png', 'AMOS', 'Camouflage', 'AMOS BEE', NULL, '2022-04-20 02:22:07', '2022-04-20 02:22:08'),
(12, 60, 'Beetle +', 'AMOS Beetle+', 'surveying, mapping, security & surveillance and more', 'http://botsanddrones.biz/product/eyJpdiI6ImJoaU1JTnk2emY3bnBQVDA1ZFVXbFE9PSIsInZhbHVlIjoiNWRMK1dnai9sWUZkYnRBVzh4bkZQUT09IiwibWFjIjoiYTcwYWE4NWFlMDQzNjM5NTU1N2I4YTdmZTVmYzJiODMwZjkzOGJjM2I3YmUzZGJmYTkyMGQ3ZDBkOTFkYjE1NiJ9', 'http://botsanddrones.biz/public/images/1650396616.png', 'AMOS', 'Camouflage', 'AMOS Beetle+', NULL, '2022-04-20 02:30:16', '2022-04-20 02:30:16'),
(13, 58, 'Agriculture Spraying Drone (Electric)', 'GA AG-E', 'Garuda Aerospace Electric - Spraying Drone', 'http://botsanddrones.biz/product/eyJpdiI6IkU3aktGdUZyYisrWDQyS3VNTmtWT2c9PSIsInZhbHVlIjoiL1hlYzk4ald0eTNNejJhQUdmbVBHUT09IiwibWFjIjoiZGQzN2U1YWUxZjY0ZjIwOTFjMzMxYjU3YjA3ZDc1NTc0NTVhN2UzMGQ5M2I1YjRlNjUxMThjMGYxMWY4NTI3ZiJ9', 'http://botsanddrones.biz/public/images/1724148446.webp', 'Garuda Aerospace', 'Black/White', 'Agriculture Spraying Drone (Electric)', NULL, '2022-04-22 14:06:56', '2024-08-20 17:07:26'),
(14, 60, 'Beetle', 'AMOS Beetle', 'Best for Photography & Videography', 'http://botsanddrones.biz/product/eyJpdiI6Ik90Sk41TG1yTmdMODA1UVFMNkNuUUE9PSIsInZhbHVlIjoiSCtyTkNuaUdQQ2hhS0JFOTNwbXAyZz09IiwibWFjIjoiNmRjODkzYjQ2MjgyMDRlMmJhMGJhZmI3YzE2OTdkY2Y2ZTc1MDkzYjE4MDZmMWQzMmEzNTA5NDBiNjYyOThmYiJ9', 'http://botsanddrones.biz/public/images/1650704247.png', 'AMOS', 'NA', 'AMOS Beetle', NULL, '2022-04-23 15:57:27', '2022-04-23 15:57:27'),
(15, 60, 'Vajra', 'AMOS Vajra', 'Security, Surveillance, Asset Inspections. Tethering & Batter Modes', 'http://botsanddrones.biz/product/eyJpdiI6ImowRjdDWTJBMG1zbFJvL3BYbkx5OXc9PSIsInZhbHVlIjoidS9Vd3FaVVN0SGJ0VzU4ZDNWOFc3Zz09IiwibWFjIjoiYmMzMWJhODRmZTZkMTAyNDllZmFkMzE3Mjg1NzI4MTZlNTM3NWRmZWM4OTYwOTVhYjJkOGEwZDQ2MTI5NDMxZCJ9', 'http://botsanddrones.biz/public/images/1650706264.png', 'AMOS', 'NA', 'AMOS Vajra', NULL, '2022-04-23 16:31:04', '2022-04-23 16:31:04'),
(16, 60, 'Panda', 'AMOS Panda', 'Training, Defence, Crowd Monitoring, Recreational', 'http://botsanddrones.biz/product/eyJpdiI6ImhWTzNjRU4wTjA3VCtPNzRwNlRYOHc9PSIsInZhbHVlIjoiUEhzeDVjRUVvbmtRL3QvZnlGRG0yUT09IiwibWFjIjoiNDJiOGM5NDZmZGNkNjZmNDA2YjczMTFiZTU1ZWYwM2MzNjQ3MTU2OWRjYTNjMzcwMDA4OGM1Mjc2MDZkYTU4YyJ9', 'http://botsanddrones.biz/public/images/1650706902.png', 'AMOS Panda', 'NA', 'AMOS PANDA', NULL, '2022-04-23 16:41:42', '2022-04-23 16:41:42'),
(17, 34, 'Agribot', 'IoTechW AG', 'Agriculture Drone for spraying liquids and broadcasting granules, 10L Capacity.', 'http://botsanddrones.biz/product/eyJpdiI6IllZMHpKOXNKbWhFaHdBaGdaS25FK1E9PSIsInZhbHVlIjoibjFuSG9iK1FzbVVyYXRMVHV2ZWs2Zz09IiwibWFjIjoiYWZhOWU0ZGFmZTJiODA1OThiYWZlNjUwMzZlNWI2MWVlOTJiZTU0YTI2ZGVkMTgwM2Q4ZjQ3ZmJjYzJiYzljMCJ9', 'http://botsanddrones.biz/public/images/1650969944.png', 'IoTechWorld Avigation', 'NA', 'Agribot 10L', NULL, '2022-04-26 17:45:44', '2022-04-26 17:45:44'),
(18, 67, 'Maruthi Delivery Drone', 'TSAWMD', 'Two Variants Available. Maruthi 1.0 and Maruthi 2.0', 'http://botsanddrones.biz/product/eyJpdiI6InZlQ25xNEdKZHh5ZWhUdk5GeGRxVEE9PSIsInZhbHVlIjoiMzR3N0xzaEFVNGk3ZUIzczJtaFRyQT09IiwibWFjIjoiNzY1MmQ1YmJhZWZjN2FiNGEyNjliMzFiYjMxY2QxZjJlMzE3NTZmZjk2NDYwMTVkNzgyOGU2MjUzNTZiZjAzMyJ9', 'http://botsanddrones.biz/public/images/1653385337.png', 'TSAW', 'NA', '1.0/ 2.0', NULL, '2022-05-24 16:42:17', '2022-05-24 16:42:17'),
(19, 58, 'Vriksh Vaahan (Seeding Drone)', 'GA-SD', 'Agriculture Drone For Aerial Seeding', 'http://botsanddrones.biz/product/eyJpdiI6IkQraGh2NlJIWUxZcjR4bVdub25sZmc9PSIsInZhbHVlIjoiS2lSakdpZHM3VFQrWXRUTkg5VlNpdz09IiwibWFjIjoiMjZhMzQ3OTI2YWE1YzkyYWVlNzg4YmViOWZiNGUxZjI4ZGZmYWVmNmQxM2E0YmVhZmRkNTEyNGQxNjE0ZDFiNyJ9', 'http://botsanddrones.biz/public/images/1653401932.png', 'Garuda Aerospace', 'NA', 'Seeding Drone', NULL, '2022-05-24 21:18:52', '2022-05-24 21:24:43'),
(20, 58, 'Hybrid Spraying Drone', 'GA-AGS-H', 'Power: 6000W Hybrid Power, Spraying Tank Volume: 16 Litre, \r\nFuel Tank Capacity: 3.5 Litre, Hybrid Model: Full Load 6000W, \r\nFull Load Flight Time: 45 Minutes', 'http://botsanddrones.biz/product/eyJpdiI6IjI5ckVRdjlyZWVKQytwZkI4Q3FDU1E9PSIsInZhbHVlIjoiWDN2QWxRUVJWQ3d2TnZocGcxUkpRUT09IiwibWFjIjoiNWZiZjZiY2E5ZmI4YjNhODY3MWEzZTYzNzk5ZTc2ZmNkYjlmZWFmNGM3NWI3Yjg5OWE0YzBjZTRhZWRhNGY2MyJ9', 'http://botsanddrones.biz/public/images/1653404140.jpg', 'Garuda', 'NA', 'Garuda Hybrid Spraying Drone', NULL, '2022-05-24 21:55:40', '2022-05-24 21:55:40'),
(21, 34, 'Heavybot', 'IOTW-HB', 'The main function of Heavybot is Logistics. It is designed and made to move goods', 'http://botsanddrones.biz/product/eyJpdiI6IjVNRDZqcDZYM3FGbjJkellEd1BudkE9PSIsInZhbHVlIjoiRXNjdGd4T1hrOUs3M21zaTYyQlVYQT09IiwibWFjIjoiNWY5MjM1NDI4OWUzMmQzYWZhYjdiNzUyMTFlOGY2YzI0YWQ5YTYzYjViOGJkNzMyNTA0NGM3MmMzZDU1YzZiOCJ9', 'http://botsanddrones.biz/public/images/1653420137.jpeg', 'IoTechWorld Avigation', 'NA', 'Heavybot', NULL, '2022-05-25 02:22:17', '2022-05-25 02:22:17'),
(22, 34, 'Surveybot', 'IOTW-SB', 'Survey Drone, by default comes with a 16 channel LiDAR.', 'http://botsanddrones.biz/product/eyJpdiI6IjFKcWozSzdQck1sejZ2MFJzcVRxamc9PSIsInZhbHVlIjoibjB4TGRLY2YwR1I1a0ZIcGVqVWd3dz09IiwibWFjIjoiZjRhZGQzZGM1NjNmNDk5NzQyYTM1OThmYzE2NmE0ZmFiZjkwNmI2Y2RhNmU0ZDI0NmJiN2RjOTQ5OTc2NWM4OSJ9', 'http://botsanddrones.biz/public/images/1653421261.png', 'IoTechWorld Avigation', 'NA', 'Surveybot', NULL, '2022-05-25 02:41:01', '2022-05-25 02:41:01'),
(23, 43, 'Drone Raja', 'FT-DR-AG', 'Two Variants: 10 Litres and 15 Litres Spraying Capacity.', 'http://botsanddrones.biz/product/eyJpdiI6IjNwRFZsd2xCZ3RSZDU4Nm9VRUdzZGc9PSIsInZhbHVlIjoiS3FsNzVJQXNNWVFIZzRwemFxWGYyQT09IiwibWFjIjoiNWRhMzQ3M2Y3YmQwYWQyMjIzNjk1M2Y5NjkxZWM2YzAzZmQ2MDliNmQwZDc0MTIxZDA1MzJhMmU5M2ZlOGExOCJ9', 'http://botsanddrones.biz/public/images/1653469869.webp', 'Fopple Tech', 'NA', 'Drone Raja 1.0/ 2.0', NULL, '2022-05-25 16:11:09', '2022-05-25 16:11:09'),
(24, 56, 'Astra UAV', 'DR-AU-MR', 'ASTRA UAV is a DGCA complaint & economical micro class UAV suitable for Aerial Surveillance, Monitoring, Surveying & Inspections.', 'http://botsanddrones.biz/product/eyJpdiI6IklOeEpPb3FNaW41UVRRakRUTWZuamc9PSIsInZhbHVlIjoiSW5BR1pVYW13d0Ewb0lMYmFmbk9VQT09IiwibWFjIjoiMzZlMmYxMDQyZTA2MDZjNjc0YzU0YjlkY2Q1MDUyZGYxODNkNDcwYzBiMzZmZGFjMjI2MWJjM2I4ZDU4Y2MwOSJ9', 'http://botsanddrones.biz/public/images/1653758548.png', 'Dronix', 'NA', 'Astra UAV Micro Drone', NULL, '2022-05-29 00:22:28', '2022-05-29 00:22:28'),
(25, 69, 'Mapping Drone', 'CD-CBMV-UAS', 'Model V is a type certified, high performance inspection UAV, a quad-copter equipped with multi-spectral camera.', 'http://botsanddrones.biz/product/eyJpdiI6IlJNbk1QdHd6aDFQNCs1UExUQ3E3eGc9PSIsInZhbHVlIjoiNWlVZGFzRjFxZmR4NllJQUU5OThydz09IiwibWFjIjoiYjNmYTQ2ZTNmOGI3ZTA0MmYyMDc4ZGNhZTBmZWFkNDkwYTU0ZjAyMDhmYzI3NjRkMWU1ZDJkNGRkZmQ5ZDFjNiJ9', 'http://botsanddrones.biz/public/images/1687856114.png', 'Crystal Ball', 'Black', 'Model V Mapping Drone', NULL, '2022-08-11 14:44:21', '2023-06-27 15:55:14'),
(26, 70, 'ZHT NAGA X8 UAV', 'CD-NAGX8-DD', 'NAGA X8 QUADCOPTER COAXIAL DRONE', 'http://botsanddrones.biz/product/eyJpdiI6InhuVy9aVlFlR2F3b2x6N1oxQzk3MlE9PSIsInZhbHVlIjoiY21lbFZHRUlkQzdIOG9zRlpMOXNvQT09IiwibWFjIjoiNmQ3OWY2YjM3NzNkZjUxY2QyM2IyNDE3NmYwYzgzMzQzNjMyZTNkNDZkMmNmMzk4ZWVkMzI1ZDJlYzYzZTI5NiJ9', 'http://botsanddrones.biz/public/images/1660892119.png', 'ZHT', 'NA', 'NAGA X8 COAXIAL DRONE', NULL, '2022-08-19 13:55:19', '2022-08-25 16:25:18'),
(27, 71, 'FLYABILITY INDOOR DRONES', 'CD-EL3-ID-AP', 'Elios 3 FIRST MAPPING & INSPECTION INDOOR DRONE', 'http://botsanddrones.biz/product/eyJpdiI6IkNWL0hFa2RpS0FPMit6eG4vV2dBcmc9PSIsInZhbHVlIjoiUVBCVG1kVkhSRnN6TjF5OU8zNG9VUT09IiwibWFjIjoiZjhiYmIzNDE4ODVlNTg4YjkyNDYwZjYzOGM1OWRjODUyNDQ0MDI4MTgxMjY2MjRmZGYyMTBiYTNiZmZjZmNhMCJ9', 'http://botsanddrones.biz/public/images/1660898721.jpg', 'FLYABILITY', 'NA', 'FLYABILITY ELIOS 3 INDOOR INSPECTION DRONE', NULL, '2022-08-19 15:45:21', '2022-08-25 16:52:22'),
(28, 71, 'FLYABILITY INDOOR DRONES', 'CD-FLYEL2-ID', 'Flyability Elios 2 Indoor Drone, Confined Space Inspection Drone', 'http://botsanddrones.biz/product/eyJpdiI6ImhTSTVnSDJyUk15R0xnTXBSMmRCRnc9PSIsInZhbHVlIjoiZmdtUFVnemY0U2pGS05ZR0toN3hJQT09IiwibWFjIjoiM2Q2MTZlNjhhNmU5ZGZkYTM2Y2RmNjdiMWJmNDRmNGZiZjI0MDNlMGZhN2Y5NDgxYWMyYTQ4MmFkMTA2ODQ0MiJ9', 'http://botsanddrones.biz/public/images/1660904167.png', 'FLYABILITY', 'NA', 'FLYABILITY ELIOS 2 INDOOR INSPECTION DRONE', NULL, '2022-08-19 17:16:07', '2022-08-25 16:51:00'),
(29, 71, 'FLYABILITY INDOOR DRONES', 'CD-FLYEL2RD-ID', 'ELIOS 2 RAD INDOOR REMOTE RADIATION DETECTION AND MAPPING', 'http://botsanddrones.biz/product/eyJpdiI6IktZd3p3aEczOEYrYXpOK1NBWU1IcWc9PSIsInZhbHVlIjoiTm9tQXh1Tng5YlBic1NXekhaSTR1dz09IiwibWFjIjoiODQyOGJiNWRmM2MwMDY0NWRhOTE3YmUxYmZiYzNjYmI5M2Q3MzRhOWFhN2Q3MjQ2NjZkOGI0YzI4OWNlZjQ1ZiJ9', 'http://botsanddrones.biz/public/images/1660905075.jpg', 'FLYABILITY', 'NA', 'FLYABILITY ELIOS 2 RAD', NULL, '2022-08-19 17:31:15', '2022-08-25 16:45:55'),
(30, 70, 'ZHT NAGA X4 UAV', 'CD-ZHTNG4-MRD', 'NAGA X4 IS A LONG ENDURANCE QUADCOPTER.', 'http://botsanddrones.biz/product/eyJpdiI6IlhXc3lscFFZV2RlYlhndmZOV050Rmc9PSIsInZhbHVlIjoiaXZobFBMTHVjQ24vcGdBSjUxM0RxUT09IiwibWFjIjoiMDcwOTEyMDc3YTZhOTA1ZTRkZTMzYWI1NGZmMGIzYTZhNTkzNjZjM2EyMTZiZDc4NWE2MGIxN2M1NjY5ZTEzNiJ9', 'http://botsanddrones.biz/public/images/1661419450.png', 'ZHT Drones', 'NA', 'NAGA X4 QUADCOPTER DRONE', NULL, '2022-08-25 16:04:56', '2022-08-25 16:24:10'),
(31, 72, 'VAANVILI Micro UAV', 'CD-GUVM-SD', 'VAANVILI Micro v0.1 is an Unmanned Aerial Vehicle ideal for surveillance and observation missions.', 'http://botsanddrones.biz/product/eyJpdiI6InA1Yk9FOE02WEJSU00wT0x2Y2ZVNEE9PSIsInZhbHVlIjoiYURQMlZ6Y1o3dVVrelZNaFl5dDQyUT09IiwibWFjIjoiZTY5NjNmZWMwMzQwMmY4NmEzZTI0NGZlZmY5OWM2MDhmMjRlNDg4ZjJmZjNiMzMxM2ViYjMzMjFjODJiZTc0MyJ9', 'http://botsanddrones.biz/public/images/1661489984.png', 'Garudan Unmanned Systems', 'NA', 'VAANVILI Micro v0.1 UAV', NULL, '2022-08-26 11:59:44', '2022-08-26 11:59:44'),
(32, 72, 'VAANVILI Nano UAV', 'CD-GUVN-SD', 'VAANVILI Nano v0.1 Quadcopter', 'http://botsanddrones.biz/product/eyJpdiI6Ik93YUttVXVkNTFKbi90Y29lcSs4UEE9PSIsInZhbHVlIjoiejBLSXpIQjJmdzUvZG5VU2dSMitMQT09IiwibWFjIjoiMjM5OGYxYTUyMTIzZmE4MGU5YjU1MjM0MDM2N2ZkNWM4MGI1MmMxZjc4NWU2NDk0NDJjODJlZjgyOTk5MTc0ZSJ9', 'http://botsanddrones.biz/public/images/1661605284.png', 'Garudan Unmanned Systems', 'NA', 'VAANVILI Nano v0.1 UAV', NULL, '2022-08-27 20:01:24', '2022-08-27 20:02:13'),
(33, 72, 'Garudan Vaanvili Medium UAV', 'CD-GUVMD-SD', 'VAANVILI Med v0.1 is an Unmanned Aerial Vehicle ideal for surveillance and observation missions.', 'http://botsanddrones.biz/product/eyJpdiI6IlBKSTg1UHphbXNHZU1uRFFwditaa3c9PSIsInZhbHVlIjoieTNwVklZSTNRNGRydTV5R1VZTFJ6QT09IiwibWFjIjoiZWZjM2RmOGJjNzA0NzI5NzUwMmZiMDFlODBkZmFkN2ViZjdlODg2YWMyMmIwZmM0ZmRiOGQ5Y2ZkMGVmZTI2ZSJ9', 'http://botsanddrones.biz/public/images/1661759522.png', 'Garudan Unmanned Systems', 'NA', 'Garudan Vaanvili Med UAV v0.1', NULL, '2022-08-29 14:52:02', '2022-08-29 14:52:02'),
(34, 72, 'Garudan Vaanvili Large UAV', 'CD-GUVL-SD', 'VAANVILI Large v0.1 is an Unmanned Aerial Vehicle ideal for surveillance and observation missions.', 'http://botsanddrones.biz/product/eyJpdiI6Im93L2xmdDdJY2ZzQnRlZC9pU1JacUE9PSIsInZhbHVlIjoibVg1SFBPeFhscHkyQUJRMkRFRDcrQT09IiwibWFjIjoiMTAxMjE4ZTBjNDYxMWVkMmNhOGEwNzY5Y2RiYTE5YjNjMjFkOTRlMTQzMGE5ODAzMTY1YzQ4YWEyYmRmNmM5MyJ9', 'http://botsanddrones.biz/public/images/1661760975.png', 'Garudan Unmanned Systems', 'NA', 'Garudan Vaanvili Large UAV v0.1', NULL, '2022-08-29 15:16:15', '2022-08-29 15:16:15'),
(35, 73, 'Surveillance Drone', 'CD-UMTH-4G', 'The UMT Hawk4G Automated Surveillance and Tracking Drone', 'http://botsanddrones.biz/product/eyJpdiI6ImxLWHczaUU1WS9vWlkrVlJ2bU10U2c9PSIsInZhbHVlIjoiRkpOemorclNvaTRvNEExR0dYanAzdz09IiwibWFjIjoiMGYzZDVkYTRiOGUzOTcyOTVmZWZjMDA1YTRmZWQ1NDg5ODZlYzQzNzI1Yzk4N2JjOWJlNDU4ZTMzMDQ4NmNlZCJ9', 'http://botsanddrones.biz/public/images/1687855843.jpg', 'UrbanMatrix Technologies', 'NA', 'UMT Hawk4G Surveillance Drone', NULL, '2022-09-15 14:32:20', '2023-06-27 15:50:44'),
(36, 73, 'Survey & Mapping Drone', 'CD-UMTS-PPK', 'The UMT Hawk4G Survey drone is our end-to-end solution for surveying.', 'http://botsanddrones.biz/product/eyJpdiI6Iitpa2lnaVpTTUZheW9OK0xSNzV0Q2c9PSIsInZhbHVlIjoiRjRkOG53cEhWN3ZJMEpSQkI2bEVpdz09IiwibWFjIjoiZWJmZjk4YmVhYTJlYjMwOGQ5MTU4MGExN2FmNzg4MDBhMTk3ZTVjYTk0ZmUzNjFjOWU1MDEwYWY5Y2Y1Y2YwNCJ9', 'http://botsanddrones.biz/public/images/1724741954.png', 'Urban Matrix Technologies', 'NA', 'UMT Hawk4G Survey Drone', NULL, '2022-09-15 14:58:08', '2024-08-27 14:00:25'),
(37, 76, 'DroneHawk Box', 'ACE-DHB', 'Build Industrial Grade UAV features in your own drone-fleet using our DroneHawk Box.', 'http://botsanddrones.biz/product/eyJpdiI6ImNDUmo5SXZhcnM2b1hEdlJUMSthSGc9PSIsInZhbHVlIjoiR2hPL1lqWitDQU40UGVoZGRyOFhXQT09IiwibWFjIjoiOTViNWVjZmRjODc1Y2U4YjJlMWQyYWZmNzNhNjNjODk0ZWZmOTQxODI0MGNmMmNjNmMxMTFjYTZmZDUzMjI3MyJ9', 'http://botsanddrones.biz/public/images/1676371594.jpg', 'DroneAI', 'Orange', 'DroneHawk Box', NULL, '2023-02-14 17:46:34', '2023-02-14 17:46:34'),
(38, 73, '4G Plug-N-Play Smart Module for Drone', 'ACE-M5G-UMT', 'NextCC plug-and-play module is an addition to a usual flight controller. Transforms drone into a 5G enabled drone system.', 'http://botsanddrones.biz/product/eyJpdiI6IlNPUTltSDFER3QzM3Q3MW5BbG5zZEE9PSIsInZhbHVlIjoiVHFmL0lKYXphdUNyVGdETkZqcG8rUT09IiwibWFjIjoiMjkyNDI2NjM5OThiNTdjNzY5MTVmM2ZhODEwMzU1MTcyYWI0NjVmNTBiZjgyMzQwZWM0NmE3NGMxZjRhMDFlYSJ9', 'http://botsanddrones.biz/public/images/1687856534.png', 'UrbanMatrix Technologies', 'NA', 'UMT Next CC 4G Module', NULL, '2023-02-14 18:11:35', '2023-06-27 16:02:14'),
(39, 72, 'Agriculture Spraying Drone', 'GUS-AG-16', 'Vaanvili Agriculture Spraying Drone, Agri v2, with 16 Litres Spraying Tank Capacity.', 'http://botsanddrones.biz/product/eyJpdiI6InJ5VUo1bTdyRFhlN0p6SWMvOHd0akE9PSIsInZhbHVlIjoiTkhRbjU1ZUdoUENlZnZGK3JPcUJDdz09IiwibWFjIjoiY2M5ODZlYTQ4ZjBiNTFhMDBhYTQ0YjJmZTc4YmJkYjUxNzY2NWE3MGIwZmRkYTE3Mzg4NTFkYzEwNDU0NjAwNiJ9', 'http://botsanddrones.biz/public/images/1687850511.png', 'Garudan Unmanned Systems', 'NA', 'Vaanvili Agriculture Drone - Agri v2 16L', NULL, '2023-06-27 14:21:51', '2023-06-27 14:21:51'),
(40, 72, 'Agriculture Spraying Drone', 'GUS-AG-10L', 'Agriculture Spraying Drone, with 10 Litre Spraying Tank Capacity.', 'http://botsanddrones.biz/product/eyJpdiI6IlorMW9SQ0ltYTBPTmZCMkdLampQQlE9PSIsInZhbHVlIjoiTnRHd3hPOFRPNmNnV3JhcEM3amFxdz09IiwibWFjIjoiZDRiYTU4N2EwMjdiMTRjOThiNmE3YzBmNzA3ZDQyNzA5MjQ5ZjlmOTkzYWQ2MGY0NGYxOTdmMmZkNzAyM2Q0MSJ9', 'http://botsanddrones.biz/public/images/1687851412.png', 'Garudan Unmanned Systems', 'NA', 'Vaanvili Agriculture Drone - Agri v1 10L', NULL, '2023-06-27 14:36:52', '2023-06-27 14:36:52'),
(41, 57, 'Agriculture Drone', 'MRT-AG-365', 'AG 365 Agriculture Drone can be used for both Agriculture Spraying & Crop Monitoring Use.', 'http://botsanddrones.biz/product/eyJpdiI6ImZCNklUei9WWW5zWTJqakR4QUM2MkE9PSIsInZhbHVlIjoiSnFmZVJtaTBRR0JSYW9FK2JnaUVpdz09IiwibWFjIjoiYjZlMjBjZjNjNzY2ZjRmYjcyMjdkZDA5ZWRjYzI3ODAzOGRmMWY3NjY2NzExYTc1MzhkYzg0NjgwOWRkNWNhNiJ9', 'http://botsanddrones.biz/public/images/1687853167.webp', 'Marut Drones', 'NA', 'Marut Drones AG 365 Agriculture Solution', NULL, '2023-06-27 15:06:07', '2023-06-27 15:06:07'),
(42, 77, 'Survey & Mapping Drone', 'AA-01-VED', 'Professional Grade Survey and Mapping Drone: Vedansh UAV - The Black Beetle, Made by Aerosys Aviation, India. Vedansh is a DGCA Type Certified Drone.', 'http://botsanddrones.biz/product/eyJpdiI6IjlsdFl3UXk2UVZaZC9zQzZtVGVjOWc9PSIsInZhbHVlIjoiS3hDYW43UDc2MmExQ20zd0dXS1Q4UT09IiwibWFjIjoiOTJkZGJkNTkxNjA2YTMyZTk1YWIzMDkwYmM5MmFiOTc4MzFkZmQwZGIwN2YyOTI5NTM4MTg2N2RjMzdjM2QyMSJ9', 'http://botsanddrones.biz/public/images/1724146637.jpg', 'Aerosys Aviation', 'NA', 'Vedansh Black Beetle', NULL, '2024-08-20 16:37:17', '2024-08-20 16:37:17'),
(43, 78, 'Survey & Mapping Drone', 'NT-01-SV1', 'Surveyaan - Mapping drone has never been so easy to use. A True companion for small and medium size surveying and consulting firms. Mapping large scale with high accuracy has never been so easy. Setup and Fly within 2 mins on the field.', 'http://botsanddrones.biz/product/eyJpdiI6IklmK2x4MVBxUHVYUGdjbFc0SzI1cmc9PSIsInZhbHVlIjoiM1ZRZXVmVzZXNnhkT211bElxcitMUT09IiwibWFjIjoiOWI4ODA4MzE3NWIyZDkyYTViMWNiNzdhOTUxZDk4ZGQzOGNiZGVkODRhOTU3NjNlM2QxMmMxYjc0ZGZlNGRjOCJ9', 'http://botsanddrones.biz/public/images/1724148259.jpg', 'Nibrus Technologies', 'NA', 'Surveyaan V1', NULL, '2024-08-20 17:04:19', '2024-08-20 17:04:19'),
(44, 54, 'Mapping & Inspection Drone', 'TA-01-DO', 'DOPO UAS is the ultimate solution for your mapping and inspection projects, with a DGCA type certified rotary design that can fly for 49 minutes.', 'http://botsanddrones.biz/product/eyJpdiI6Ik1lT0dGU1ovSGp6L0hkR1BrWlRxRXc9PSIsInZhbHVlIjoiUzl3OXh1WVhrWUlDRk9XSjVudFJVUT09IiwibWFjIjoiYTgxZjk1YmRkMzUzYTZmOWM3MTMzOThmZWI3MmJiMWY5NjRmZWI2OTg5NmZlNjlhMjQ2OWU4ZGQ1MGFiYzVmMiJ9', 'http://botsanddrones.biz/public/images/1724744658.png', 'TAS', 'NA', 'DOPO UAS', NULL, '2024-08-27 14:44:18', '2024-08-27 14:44:18'),
(45, 58, 'Camera Drone', 'GA-02-DR', 'Garuda\'s DRONI Drone Named After MS Dhoni, Droni Drone Manufactured by Garuda Aerospace. Droni Drone Price: Rs. 85,000 Inclusive of all taxes. Warranty: 6 Months.', 'http://botsanddrones.biz/product/eyJpdiI6Ik90WFM5Q3FzaDYwc3FFWUJIeWh3U0E9PSIsInZhbHVlIjoiWjByOUVVQi9vTElTMVEzS0N6NVJsZz09IiwibWFjIjoiYzdlMGY0NzU0MmMwMjc2YzY1ZDlkYzA2M2VhZjEwZjcxZGQ3YzI5Y2M0YTBmMGQyZjBlZWVlYjU0N2I2MmI2MCJ9', 'http://botsanddrones.biz/public/images/1724757525.png', 'Garuda Aerospace', 'White', 'Droni Drone', NULL, '2024-08-27 18:18:45', '2024-08-27 18:18:45'),
(46, 79, 'Inertial Navigation Systems', 'DS-01-INSU', 'The DILABS GPS Aided Inertial Navigation System (INS-U) is an IP67 rated version of new generation, fully integrated, combined Inertial Navigation System (INS) + Attitude & Heading Reference System (AHRS) + Air Data Computer (ADC)', 'http://botsanddrones.biz/product/eyJpdiI6InNFWGxZbk0rUEora28razhyNHlNbWc9PSIsInZhbHVlIjoiZDJ2ckNPVDVCMjZsVHhXNkRWdVpiUT09IiwibWFjIjoiNjUyNDVmMzE4ZTNiYTU0MDE3MjkzZjBhNTRkNmFiYzgwNWQ5MDA5MjRkNmJjOTgxNGI5ZDBlMDM2YTk5N2Y5OSJ9', 'http://botsanddrones.biz/public/images/1725272651.jpg', 'DILABS', 'NA', 'GPS Aided Inertial Navigation System (INS-U)', NULL, '2024-09-02 17:24:11', '2024-09-02 17:24:11'),
(47, 79, 'Inertial Navigation Systems', 'DS-02-IMUP', 'The DILABS Inertial Measurement Unit (IMU-P) is an advanced MEMS sensor based, compact, self contained strapdown, industrial and tactical grade Inertial Measurement Systems and Digital Tilt Sensor...', 'http://botsanddrones.biz/product/eyJpdiI6InV5aDZJaS93T2hZb1R3WGFSSU9JY2c9PSIsInZhbHVlIjoid200WUovM01ZQTdXOWJxUW92NExJZz09IiwibWFjIjoiMzNlOGFhNjUzODRlMTU0OGRiMDVkYTVhN2JlNzYwMzVmYTM3Y2U4ZjQxMWJmMDFmOThlMmZmYjQxOGI3YTRhZiJ9', 'http://botsanddrones.biz/public/images/1725272821.jpg', 'DILABS', 'NA', 'Inertial Measurement Unit (IMU-P)', NULL, '2024-09-02 17:27:01', '2024-09-02 17:27:01'),
(48, 79, 'Attitude and Heading Reference Systems', 'DS-03-AHRS2', 'DILABS Attitude and Heading Reference Systems, AHRS-II is the next generation of enhanced, high performance strap down systems that determines absolute orientation ( Heading, Pitch and Roll) for any device which is mounted', 'http://botsanddrones.biz/product/eyJpdiI6IjJrK1BNVDV2RDA2RzFQWXlsWkVrL1E9PSIsInZhbHVlIjoiMEQrbStzOElLRTlxZlRCdUM4c05Qdz09IiwibWFjIjoiOWU0NmM1ZjU5NGNhNzYwNDE5NDk3YThjYjNiOGIyNTdmNTBmMjlhYjE2ZmYzYzNiNWY3N2Y5MGVlODhiMDM2NSJ9', 'http://botsanddrones.biz/public/images/1725445824.jpg', 'DILABS', 'NA', 'AHRS-II-P', NULL, '2024-09-04 17:30:24', '2024-09-04 17:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `products1`
--

CREATE TABLE `products1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` varchar(200) DEFAULT NULL,
  `subcategory_id` varchar(200) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `model_year` varchar(255) NOT NULL,
  `year_of_purchase` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `UIN` varchar(255) DEFAULT NULL,
  `damages` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products1`
--

INSERT INTO `products1` (`id`, `user_id`, `category_id`, `subcategory_id`, `title`, `date`, `location`, `state`, `price`, `brand`, `model_name`, `model_year`, `year_of_purchase`, `description`, `owner`, `UIN`, `damages`, `slug`, `created_at`, `updated_at`) VALUES
(1, 2, '1', '2', 'Controlling Drones And UAVs: Advancements In Wireless Technologies', '2022-09-21', 'Trichy', 'Tamilnadu', '12000', 'WikiMedia', 'UNDD1210', '2019', '2020', 'Upgraded wireless communication systems, latest navigation technologies and advanced flight control programs are the key ingredients for advanced applications of drones and UAVs.', 'First Owner', NULL, NULL, 'Controlling-Drones-And-UAVs:-Advancements-In-Wireless-Technologies-2855', '2022-09-21 11:37:52', '2022-09-21 11:37:52'),
(2, 2, '1', '1', 'DJI Mavic 2 Pro/Zoom Parts, Motor, Arm, Leg, Propeller, Accessory', '2022-09-22', 'Chennai', 'Tamilnadu', '53000', 'DJI Mavic', 'UNDD1222', '2018', '2021', 'The Mavic 2 Pro is really a self explanatory drone. It’s the drone for pros who are looking for that next level cinematic image quality. Those who want to travel light but capture in the dark. Those who need to capture more dynamic range in harsh lighting conditions, and at those times when you need colors to look just right.', 'Third Owner', NULL, NULL, 'DJI-Mavic-2-Pro-2166', '2022-09-21 14:02:43', '2022-09-22 09:00:13'),
(3, 2, '1', '2', 'DJI Mini SE - Camera Drone with 3-Axis Gimbal, 2.7K Camera, GPS, ', '2022-08-16', 'Coimbatore', 'Tamilnadu', '12000', 'WikiMedia', 'UNDD1210', '2015', '2018', 'Upgraded wireless communication systems, latest navigation technologies and advanced flight control programs are the key ingredients for advanced applications of drones and UAVs.', 'Second Owner', NULL, NULL, 'Controlling-Drones-And-UAVs:-Advancements-In-Wireless-Technologies-2855-3', '2022-09-21 11:37:52', '2022-09-21 11:37:52'),
(4, 2, '1', '1', 'Holy Stone 2K GPS FPV RC Drone HS100 with HD Camera Live Video', '2022-09-22', 'Chennai', 'Tamilnadu', '35000', 'DJI Mavic', 'UNDD1222', '2013', '2017', 'The Mavic 2 Pro is really a self explanatory drone. It’s the drone for pros who are looking for that next level cinematic image quality. Those who want to travel light but capture in the dark. Those who need to capture more dynamic range in harsh lighting conditions, and at those times when you need colors to look just right.', 'More than 3', NULL, NULL, 'DJI-Mavic-2-Pro-2166-4', '2022-09-21 14:02:43', '2022-09-22 08:55:21'),
(5, 3, '1', '1', 'Agriculture Drone 2021 Model, Sparingly used', '2022-09-24', 'Chennai', 'Tamil Nadu', '300000', 'Garuda Aerospace', 'Hybrid Agriculture Drone', '2021', '2021', 'Sparingly used agriculture drone, 10 litres capacity, hybrid power.', 'First Owner', NULL, NULL, 'Agriculture-Drone-2021-Model,-Sparingly-used-3056', '2022-09-24 21:37:24', '2022-09-24 21:37:24');

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
(1, 1, '1', '16637548721.jpg', '2022-09-21 11:37:52', '2022-09-21 11:37:52'),
(2, 1, '2', '16637548722.jpg', '2022-09-21 11:37:52', '2022-09-21 11:37:52'),
(3, 1, '3', '16637548723.jpg', '2022-09-21 11:37:52', '2022-09-21 11:37:52'),
(4, 2, '1', '166376356311.jpg', '2022-09-21 14:02:43', '2022-09-21 14:02:43'),
(5, 2, '2', '16637635632.jpg', '2022-09-21 14:02:43', '2022-09-21 14:02:43'),
(6, 2, '3', '16637635643.jpg', '2022-09-21 14:02:44', '2022-09-21 14:02:44'),
(7, 4, '2', '16637548721.jpg', '2022-09-21 11:37:52', '2022-09-21 11:37:52'),
(8, 4, '1', '16637548722.jpg', '2022-09-21 11:37:52', '2022-09-21 11:37:52'),
(9, 4, '3', '16637548723.jpg', '2022-09-21 11:37:52', '2022-09-21 11:37:52'),
(10, 3, '3', '166376356311.jpg', '2022-09-21 14:02:43', '2022-09-21 14:02:43'),
(11, 3, '2', '16637635632.jpg', '2022-09-21 14:02:43', '2022-09-21 14:02:43'),
(12, 3, '1', '16637635643.jpg', '2022-09-21 14:02:44', '2022-09-21 14:02:44'),
(13, 5, '1', '1664030244msg1236859230-1013[405].jpg', '2022-09-24 21:37:24', '2022-09-24 21:37:24'),
(14, 5, '2', '1664030244garuda-aerospace-biz-july-2022-b.JPG', '2022-09-24 21:37:25', '2022-09-24 21:37:25');

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

--
-- Dumping data for table `product_packages`
--

INSERT INTO `product_packages` (`id`, `product_id`, `parameters`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'drone', '1', '2022-09-21 19:21:29', '2022-09-21 19:21:29'),
(2, 1, 'Camera', '1', '2022-09-21 19:21:29', '2022-09-21 19:21:29'),
(3, 2, 'Camera', '1', '2022-09-21 14:02:44', '2022-09-21 14:02:44'),
(4, 2, 'Sensor', '1', '2022-09-21 14:02:44', '2022-09-21 14:02:44'),
(5, 4, 'drone', '1', '2022-09-21 19:21:29', '2022-09-21 19:21:29'),
(6, 4, 'Camera', '1', '2022-09-21 19:21:29', '2022-09-21 19:21:29'),
(7, 3, 'Camera', '1', '2022-09-21 14:02:44', '2022-09-21 14:02:44'),
(8, 3, 'Sensor', '1', '2022-09-21 14:02:44', '2022-09-21 14:02:44'),
(9, 4, 'Sensor', '1', '2022-09-22 08:59:52', '2022-09-22 08:59:52'),
(10, 2, 'Drone', '1', '2022-09-22 09:00:13', '2022-09-22 09:00:13'),
(11, 5, 'Hybrid Drone', '1', '2022-09-24 21:37:25', '2022-09-24 21:37:25'),
(12, 5, 'Extra Propellers', '2', '2022-09-24 21:37:25', '2022-09-24 21:37:25');

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
(1, 1, 'weight', '500g', '2022-09-21 11:37:53', '2022-09-21 11:37:53'),
(2, 1, 'Remote ID', '87878RGF', '2022-09-21 11:37:53', '2022-09-21 11:37:53'),
(3, 2, 'Flight time', '31minutes', '2022-09-21 14:02:44', '2022-09-21 14:02:44'),
(4, 2, 'Control range', '8km', '2022-09-21 14:02:44', '2022-09-21 14:02:44'),
(5, 4, 'weight', '500g', '2022-09-21 11:37:53', '2022-09-21 11:37:53'),
(7, 3, 'Flight time', '31minutes', '2022-09-21 14:02:44', '2022-09-21 14:02:44'),
(8, 3, 'Control range', '8km', '2022-09-21 14:02:44', '2022-09-21 14:02:44'),
(9, 4, 'RemoteId', 'www3323', '2022-09-22 08:55:21', '2022-09-22 08:55:21'),
(10, 5, 'Spray Tank Capacity', '10 Litres', '2022-09-24 21:37:25', '2022-09-24 21:37:25'),
(11, 5, 'Flight Time', '41-50 Mins', '2022-09-24 21:37:25', '2022-09-24 21:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Survey/ Mapping', 'Survey/ Mapping', '2022-04-13 20:09:08', '2022-04-13 20:09:08'),
(2, 'Precision Agriculture', 'Precision Agriculture', '2022-04-13 20:09:19', '2022-04-13 20:09:19'),
(3, 'Drone Pilot Training', 'Drone Pilot Training', '2022-04-13 20:09:28', '2022-04-13 20:09:28'),
(4, 'Asset Inspections', 'Aerial Inspections of Infrastructure and Industrial Assets', '2022-04-19 13:00:40', '2022-04-19 13:00:40'),
(5, 'Drone Logistics', 'Drone Delivery/ Cargo', '2023-01-18 12:32:09', '2023-01-18 12:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `service_enquiries`
--

CREATE TABLE `service_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_person_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `verification_code` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `service_id` varchar(255) DEFAULT NULL,
  `requirement_details` varchar(255) DEFAULT NULL,
  `expected_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_enquiries`
--

INSERT INTO `service_enquiries` (`id`, `contact_person_name`, `company_name`, `email`, `mobile_no`, `verification_code`, `city`, `country`, `provider_id`, `service_id`, `requirement_details`, `expected_date`, `created_at`, `updated_at`) VALUES
(1, 'DD', 'Bell', 'bell@yahoo.com', '+91 9840035125', '352135', 'Chennai', 'India', '2', '1', 'Survey of granite mine', '2022-04-27', '2022-04-19 18:42:36', '2022-04-19 18:42:36'),
(2, 'thomas', NULL, 'ai@botsanddrones.in', '+919840035125', '372226', 'Madurai', 'India', '1', '1', 'land survey', '2022-04-29', '2022-04-21 01:24:51', '2022-04-21 01:24:51'),
(3, 'Thomas Arun', NULL, 'aruntj@yahoo.com', '+919840035125', '867416', 'Kochi', 'India', '1', '1', 'land survey', '2022-04-22', '2022-04-21 19:43:49', '2022-04-21 19:43:49'),
(4, 'Thomas', 'Aktiv Global', 'arun@aktivglobal.com', '+919840035125', '700438', 'Chennai', 'India', '2', '1', 'factory survey', '2022-05-08', '2022-04-22 16:44:56', '2022-04-22 16:44:56'),
(5, 'test', 'test', 'testeduser@mailinator.com', '+91 8344645361', '243782', 'test', 'test', '1', '1', 'test', '2022-04-22', '2022-04-22 21:02:12', '2022-04-22 21:02:12'),
(6, 'Arun Trial', 'Aktiv', 'aruntj@yahoo.com', '+919840035125', '246160', 'Chennai', 'India', '4', '1', 'Survey of Granite Mine', '2023-01-04', '2023-01-18 12:24:21', '2023-01-18 12:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `service_providers`
--

CREATE TABLE `service_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `service_id` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`id`, `name`, `email`, `mobile_no`, `location`, `service_id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Aeronica Advance Technologies', 'info@aeronica.in', '91 727 646 9160', 'Pune', '1', 'http://botsanddrones.biz/service/enquiry/eyJpdiI6IlRPdTF1cERNZnlQOWhzVGtmQ0U0TlE9PSIsInZhbHVlIjoiNnd1Y21RV0RrdnRMUU8vN0REOGV5dz09IiwibWFjIjoiOTk1NTE4NjkwZmFkMjY4MzM3YWVjY2VjNWJjMzcyNDlmYWM0MjU5Mjc2MTBiZjcyZWQ2YzFiZWRkMGFiZGIwOCJ9', '2022-04-13 20:10:13', '2022-04-13 20:10:13'),
(2, 'Bots and Drones', 'thomas@botsanddrones.co', '9840035125', 'Mumbai', '4, 2, 1', 'http://botsanddrones.biz/service/enquiry/eyJpdiI6IkxhaVBrbC9CVlVRT3NmeFdlakxvTVE9PSIsInZhbHVlIjoibzU3eE5iTlVoMjlNb3NKQzFqS1ZZZz09IiwibWFjIjoiODYwMTNjNzFjZDQ4MTNkNmQxZGQ0MjdiOTQ3YjI1MTg2NjJhNjE3MjNmNzA1ZjAwMGM2NDc5ZDNlMzEzYTU3YyJ9', '2022-04-19 18:39:16', '2022-04-19 18:39:16'),
(3, 'DroneAcharya Aerial Innovations', 'info@droneacharya.com', '9673608365', 'India', '3', 'http://botsanddrones.biz/service/enquiry/eyJpdiI6IktNd3NrOVBMWFV0ZHduNzlhM2htWUE9PSIsInZhbHVlIjoiV2xzUFpXMitKOVI3clRZQVpaWE0rdz09IiwibWFjIjoiZDgyMzNhZTUwMzU5Y2Y4NWUyY2U1OWQ5OWVlNTA3Yzc3NzY5ODAzMGE3YWZkYWQ5Y2IzMTA0MzhkMWMzYmM1NSJ9', '2022-08-01 19:01:57', '2022-08-01 19:01:57'),
(4, 'UrbanMatrix Technologies', 'contact@urbanmatrix.co.in', '+91 77959 85092', 'Bangalore', '4, 1', 'http://botsanddrones.biz/service/enquiry/eyJpdiI6ImRQQnR0dDBtOWpTQUVmekE2WVlNcVE9PSIsInZhbHVlIjoiY1AyNjJuSWtxVWJleFJqcXdMVjBMZz09IiwibWFjIjoiMDRjNmM1YWY2Mzg4NzlkMzkwOWM3OWVhZjhkNmU2NmE2ZDI0ZmRjZTEzZjJlYWRkY2RlNTI4YTY1NTIzMTc4YiJ9', '2023-01-18 12:16:46', '2023-01-18 12:16:46'),
(5, 'TSAW Drones', 'admin@tsaw.tech', '7905461842', 'Deoria, Uttar Pradesh', '5', 'http://botsanddrones.biz/service/enquiry/eyJpdiI6Ii9yZ1VpSU1OclUrWUxDMGt4dCtIWVE9PSIsInZhbHVlIjoicjdLcjNGaWJWdDFZdUpUcVhBaHU0Zz09IiwibWFjIjoiNmQ5ZmZmYWZmNWM1YTMwOTQ5NWQyZTQyZDBhYWMzZjFjZDQ3NWJlZDliMjhkYzQzZWQxYjdhOTI5Mzk1YTE4YSJ9', '2023-01-18 12:33:31', '2023-01-18 12:47:21'),
(6, 'GEO ADITHYA TECHNOLOGIES', 'info@geoadithya.com', '86088 777 66', 'Chennai, Tamil Nadu', '4, 1', 'http://botsanddrones.biz/service/enquiry/eyJpdiI6IjM4QjZTVHF1OG8xZE45dkpFZ2NEZEE9PSIsInZhbHVlIjoiUlZ5VVpkOXpFMjh5c1NnSkFmTHdvZz09IiwibWFjIjoiYzAzZDg4YWVjZDUyYmZjMWU5NzYzNjdmNTVkZDUxNmU4YmM4OGNjY2JiYWUxNzUxNTE3MDViMjZhY2JmNTVhOSJ9', '2023-01-18 12:53:01', '2023-01-18 12:53:01'),
(7, 'Garudan Unmanned System Private Limited', 'sales@garudan.in', '9443007607', 'Coimbatore', '4, 2, 1', 'http://botsanddrones.biz/service/enquiry/eyJpdiI6IkZHVklzMFBqWTN1TkN1c0o5bThuUEE9PSIsInZhbHVlIjoiWVU1d3RrYkdycmJKa2JSYUVZaW5aQT09IiwibWFjIjoiZDBiNjRkNTZhZWQ1ODc4MjEzYjhjZjRkOTUyMGZhMjU0ZWFiMmM0Zjg5YzE5MGJmZjYzMjE2ODI5ZjFhNTU1ZiJ9', '2023-01-18 13:07:38', '2023-01-18 13:07:38'),
(8, 'AUTOMICROUAS (AMOS)', 'automicrouas@gmail.com', '9433996985', 'Eranamkulam, Kerala', '5, 4, 1', 'http://botsanddrones.biz/service/enquiry/eyJpdiI6InFQdzl3VG1JZ1RObmtCZTJsZzc2N0E9PSIsInZhbHVlIjoiNkRYanNucWVzRjlxSGhFOWNlamZtZz09IiwibWFjIjoiYjZmZDZhMjdhMTZkNDQ1NjA0YmNiYmY3MzA3ZjkxNGE0ODk1MTE4Y2U3MDYyMzFhYjc4YzBjOTBhYTAzY2RiYiJ9', '2023-01-18 13:20:15', '2023-01-18 13:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Consumer drones', 'Y', '2022-09-21 11:57:04', '2022-09-21 11:57:04'),
(2, 1, 'Commercial drones', 'Y', '2022-09-21 11:57:04', '2022-09-21 11:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `mobile_no`, `address`, `created_at`, `updated_at`) VALUES
(33, 'Thanos Technologies', NULL, NULL, NULL, '2022-03-30 02:20:50', '2022-03-30 02:20:50'),
(34, 'IoTechWorld', 'sales@iotechworld.com', '917905262060', 'Plot No. 1643, Sector 52, Gurugram-122001, Haryana, INDIA', '2022-03-30 02:20:46', '2022-05-25 02:17:32'),
(35, 'Edall Systems', NULL, NULL, NULL, '2022-03-30 02:20:41', '2022-03-30 02:20:41'),
(36, 'VTOL Aviation', NULL, NULL, NULL, '2022-03-30 02:20:36', '2022-03-30 02:20:36'),
(37, 'DroneStark Technolgies', NULL, NULL, NULL, '2022-03-30 02:20:31', '2022-03-30 02:20:31'),
(38, 'SkyKrafts Aerospace', NULL, NULL, NULL, '2022-03-30 02:20:26', '2022-03-30 02:20:26'),
(39, 'Ayaan Autonomous Systems', NULL, NULL, NULL, '2022-03-30 02:20:22', '2022-03-30 02:20:22'),
(40, 'TechEagle Innovations', NULL, NULL, NULL, '2022-03-30 02:20:17', '2022-03-30 02:20:17'),
(41, 'Dynamatic Technologies', NULL, NULL, NULL, '2022-03-30 02:20:13', '2022-03-30 02:20:13'),
(42, 'CBAI Technologies', NULL, NULL, NULL, '2022-03-30 02:20:07', '2022-03-30 02:20:07'),
(43, 'Fopple Tech Pvt Ltd', 'foppletech@gmail.com', '9989838337', 'D/NO:10/9,NEAR CENTRAL BANK,KANKIPADU, VIJAYAWDA, Andhra Pradesh', '2022-03-30 02:20:05', '2022-07-18 12:38:41'),
(44, 'Tsalla Aerospace', NULL, NULL, NULL, '2022-03-30 02:19:24', '2022-03-30 02:19:24'),
(45, 'Endureair', NULL, NULL, NULL, '2022-03-30 02:19:19', '2022-03-30 02:19:19'),
(46, 'CD Space', NULL, NULL, NULL, '2022-03-30 02:19:14', '2022-03-30 02:19:14'),
(47, 'General Aeronautics', 'sales@generalaeronautics.com', '91 80-25654206', NULL, '2022-03-30 02:19:06', '2022-03-30 02:19:06'),
(48, 'Mirai Drones', 'info@mirai-drone.com', '91-981090357', NULL, '2022-03-30 02:18:43', '2022-03-30 02:18:43'),
(49, 'SkyteX Unmanned Aerial Solutions Pvt Ltd', 'info@theskytex.com', '91 98154 90918', NULL, '2022-03-30 02:18:33', '2022-03-30 02:18:33'),
(50, 'Centillion Networks Pvt Ltd.', NULL, 'Ph: +91 40 42200027', NULL, '2022-03-30 02:18:24', '2022-03-30 02:18:24'),
(51, 'Adroit Unmanned Aerial Vehicle', NULL, '91 949 218 8378', NULL, '2022-03-30 02:18:20', '2022-03-30 02:18:20'),
(52, 'Asap Agritech Llp', NULL, '(+91)077199 29555', NULL, '2022-03-30 02:18:13', '2022-03-30 02:18:13'),
(53, 'ideaForge', NULL, NULL, NULL, '2022-03-30 02:17:43', '2022-03-30 02:17:43'),
(54, 'TAS', 'contact@throttleaerospace.com', NULL, NULL, '2022-03-30 02:17:49', '2022-03-30 02:17:49'),
(55, 'Aerial Iq', 'info@aerialiq.in', NULL, NULL, '2022-03-30 02:17:25', '2022-03-30 02:17:25'),
(56, 'Dronix Technologies', 'support@aero360.co.in', NULL, NULL, '2022-03-30 02:17:10', '2022-03-30 02:17:10'),
(57, 'Marut Drone', 'prem@marutdrones.com', NULL, NULL, '2022-03-30 02:17:00', '2022-03-30 02:17:00'),
(58, 'Garuda Aerospace', 'info@garudaaerospace.com', NULL, NULL, '2022-03-30 02:16:50', '2022-03-30 02:16:50'),
(59, 'Asteria Aerospace', 'sales@asteria.co.in', NULL, NULL, '2022-03-30 02:16:40', '2022-03-30 02:16:40'),
(60, 'AutoMicroUAS', 'contact@automicrouas.com', '9433996985', 'No 488 , Ward 3 , Kalady Ernakulam , Kerala -683574', '2022-03-30 02:16:29', '2022-04-10 19:11:49'),
(61, 'Johnnette Technologies', 'av@johnnette.com', '7780108418', 'Wp 11,  Sector 71, Near Sapphire International School, UP-201307', '2022-03-30 02:16:19', '2022-04-10 16:13:33'),
(62, 'Aeronica Advance Technologies', 'info@aeronica.in', '7276469160', '6, Navshantiban Co-op. Hsg. Soc., Opp. Police Ground, Off F.C. Road, Shivajinagar, Pune, MH India 411016', '2022-03-30 02:16:08', '2022-04-10 18:18:53'),
(64, 'Prime UAV', 'sales@primeuav.com', '9979963653', 'SF-1,Khodiyar Arced ,B/H Someswar Mall,  GIDC Phase-1, Mehsana-384002,  Gujarat.', '2022-04-06 00:06:47', '2022-04-20 01:17:18'),
(65, 'IG Drones', 'info@igdrones.co', '9990500337', 'Address Second Floor, E-53-54, Block  E, Sector 3, Noida, Delhi NCR  201301.', '2022-04-10 17:56:41', '2022-04-10 17:56:41'),
(66, 'Bots And Drones India', 'ai@botsanddrones.in', '9840035125', 'Mumbai', '2022-04-19 18:31:45', '2022-04-19 18:31:45'),
(67, 'TSAW Drones', 'admin@tsaw.tech', '9179054618', '91 Springboard, 90B Sector 18, Gurugram Haryana 122008', '2022-05-24 16:37:30', '2022-05-24 16:37:30'),
(68, 'Automation AI', 'sales@automatonai.com', '9172005538', 'Pune', '2022-07-22 17:27:21', '2022-07-22 17:27:21'),
(69, 'CBAI TECHNOLOGIES PRIVATE LIMITED', 'sales@crystalball.ai', '7304847792', '12-13-635/4, NAGARJUNA NAGAR, TARNAKA, SECUNDERABAD, TS 500017', '2022-08-11 14:27:32', '2022-08-11 14:27:32'),
(70, 'Zhonghangtong Innovation (Tianjin) Technology Development Co., Ltd.', 'mia@zhtdrones.com', '0086185263', '3rd floor, Tianjin University Innovation Research Institute, Jiannan District, Tianjin, China.', '2022-08-19 13:51:28', '2022-08-19 13:51:28'),
(71, 'Flyability SA', 'info@flyability.com', '8614737499', '36 Carpenter St, #02-01, Carpenter Haus, Singapore 059915', '2022-08-19 15:40:22', '2022-08-19 15:40:22'),
(72, 'Garudan Unmanned Systems Pvt Ltd', 'sales@garudan.in', '9443007607', '238/1B, 20 Sulur Industrial Estate, Kadampady, Coimbatore.', '2022-08-26 11:55:21', '2022-08-26 11:55:21'),
(73, 'Urban Matrix Technologies', 'contact@urbanmatrix.co.in', '7795985092', 'First Floor, Plot Number 8, Jagivan Ramnagar Hulimangala Post, Jigani Hobli, Anekal, Taluk, Bengaluru, Karnataka 560105', '2022-09-15 14:13:50', '2022-09-15 14:13:50'),
(74, 'Club First Pvt Ltd', 'info@clubfirst.org', '8058496808', '306-335-Balaji Tower, Airport Plaza, Main Tonk Road, Durgapura, Jaipur-302018, INDIA', '2022-12-29 21:45:56', '2022-12-29 21:45:56'),
(75, 'D\'Aviators', 'info@daviators.com', '8383998169', '312, Shivlok House-1, Karampura commercial complex, New Delhi-110015', '2022-12-29 21:48:08', '2022-12-29 21:48:08'),
(76, 'EMVIRT SOLUTIONS/ DRONE AI', 'info@emvirt.com', '0000000000', 'Plot No. D-46-B, Ambition Tower, Agrasen Circle, Subhash Marg, C Scheme, Jaipur, Rajasthan 302004', '2023-02-14 17:42:24', '2023-02-14 17:42:24'),
(77, 'Aerosys Aviation', 'info@aerosysaviation.com', '8210160548', 'B-103,1ST FLOOR, SECTOR 6, NOIDA, UTTAR PRADESH-201301', '2024-08-20 16:04:41', '2024-08-20 16:04:41'),
(78, 'Nibrus Technologies', 'info@nibrus.in', '9606922556', '#196/26, HS Jayanthi Building,  Kaikondrahalli, Bengaluru 560037, India.', '2024-08-20 17:01:33', '2024-08-20 17:01:33'),
(79, 'DILAB SYSTEMS P LTD', 'info@dilabs.in', '9108687447', 'Bengaluru', '2024-09-02 17:21:00', '2024-09-02 17:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `trainee_enquiries`
--

CREATE TABLE `trainee_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `verification_code` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `training_course_id` varchar(255) NOT NULL,
  `center_id` varchar(255) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainee_enquiries`
--

INSERT INTO `trainee_enquiries` (`id`, `name`, `email`, `mobile_no`, `verification_code`, `city`, `country`, `training_course_id`, `center_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Arun', 'thomas@botsanddrones.co', '+919840035125', '720266', 'Chennai', 'India', '3', '2', 'Hi', '2022-08-01 19:37:28', '2022-08-01 19:37:28'),
(2, 'Arun', 'thomas@botsanddrones.co', '+919840035125', '864937', 'Chennai', 'India', '4', '2', 'hey', '2022-08-01 19:51:53', '2022-08-01 19:51:53'),
(3, 'Arun', 'thomas@botsanddrones.co', '+919840035125', '467988', 'Delhi', 'India', '10', '2', 'Hey 123', '2022-08-01 20:13:32', '2022-08-01 20:13:32'),
(4, 'Sohan prajapat', 'sohanp32@gmail.com', '+917002467084', '703520', 'Jorhat', 'India', '3', '2', 'Sir, I\'m intrested in multi drone pilot trenings pls gouid me', '2022-08-06 16:21:39', '2022-08-06 16:21:39'),
(5, 'Arun TZ', 'aruntj@hotmail.com', '+919840035125', '090868', 'Madurai', 'India', '5', '2', 'agriculture, training', '2022-08-10 15:29:08', '2022-08-10 15:29:08'),
(6, 'Subham Agrawal', 'subham2015@kcm.edu.np', '+9779849216217', '670102', 'Kathmandu', 'Nepal', '5', '2', 'Looking for extensive course in Agri drones', '2022-08-24 13:21:09', '2022-08-24 13:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `training_centers`
--

CREATE TABLE `training_centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `training_course_id` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_centers`
--

INSERT INTO `training_centers` (`id`, `name`, `email`, `mobile_no`, `location`, `training_course_id`, `link`, `created_at`, `updated_at`) VALUES
(2, 'DroneAcharya Aerial Innovations', 'hello@botsanddrones.co', '9673608365', 'India', '10, 9, 8, 7, 6, 5, 4, 3', 'http://botsanddrones.biz/trainee/enquiry/eyJpdiI6IjhEeEE3bGhJREdxWUIydjJlVW8zUGc9PSIsInZhbHVlIjoiRzF5ZDhMMEVETWk5YmVnM2VRaWdzZz09IiwibWFjIjoiNzYyYjY3OWE0OWYyMmNjYWQ0ODEwNDAzMDQzYWQxYzg1MGVlYjAzYWNmZjY4MGI4NWVmZmM1OWFmYTY1NGQ1OCJ9', '2022-04-19 19:17:47', '2022-08-01 20:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `training_courses`
--

CREATE TABLE `training_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_courses`
--

INSERT INTO `training_courses` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Multi-Copter Training', 'Multi-Copter Training', '2022-04-13 03:07:46', '2022-04-13 03:07:46'),
(2, 'Advanced Drone Pilot Training', 'Advanced Drone Pilot Training', '2022-04-13 03:08:05', '2022-04-13 03:08:05'),
(3, 'DGCA Certified Drone Pilot Training Course', '5 Days Course, Cost: Rs. 64,900', '2022-08-01 19:26:29', '2022-08-01 19:39:13'),
(4, 'Drone Building Course', '10 Days Course, Cost Rs. 44,999', '2022-08-01 19:43:26', '2022-08-01 19:44:33'),
(5, 'Drone Training for Agriculture', '5 Days Course, Cost Rs 29,999.', '2022-08-01 19:54:30', '2022-08-01 19:56:47'),
(6, 'Drone Training for Disaster Management', '5 Days Course, Cost Rs 29,999.', '2022-08-01 19:57:58', '2022-08-01 19:57:58'),
(7, 'Drone Data Processing Training Course', '5 Days Course, Cost Rs 29,999', '2022-08-01 20:00:05', '2022-08-01 20:00:05'),
(8, 'Aerial Cinematography Training Course', '5 Days Course, Cost Rs 29,999.', '2022-08-01 20:04:10', '2022-08-01 20:04:10'),
(9, 'Implement Python for GIS Certification Course', '7 Days Course, Cost Rs. 29,000', '2022-08-01 20:06:14', '2022-08-01 20:06:14'),
(10, 'Drone Racing Course', '5 Days Course, Cost Rs 34,999', '2022-08-01 20:08:03', '2022-08-01 20:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(200) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile_no`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@botsanddrones.in', NULL, NULL, '$2y$10$6IFeF7Q2MyEPzIywpgrR9u5TqNvjiEYK372bSaHEH5eafe0PagtNy', NULL, NULL, NULL),
(2, 'Ram', 'test@mailinator.com', '1234567191', NULL, '$2y$10$.NZIgIixFgjbAOwgrqLDP.glj3s6W9XXwyp0TV1pPx2kTCOfLOPYG', NULL, '2022-09-24 21:11:59', '2022-09-24 21:11:59'),
(3, 'Arun Kumar Thomas', 'hello@botsanddrones.co', '9840035125', NULL, '$2y$10$6N/NK0u3wNWX8F3GqSocD.Rm3ut7t/rCwqE1JH1/DJe.6r8rGzUf2', NULL, '2022-09-24 21:21:15', '2022-09-24 21:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `name`, `email`, `mobile_no`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Roselin', 'roselin@thulirsoft.com', '1234567890', NULL, '$2y$10$BExj5RA7LAQEtrBfl2JfreFixHAKdp9bdHMgnjo6C/L1psy8Lxj/m', NULL, '2022-09-21 01:42:49', '2022-09-21 01:42:49'),
(2, 'Ram', 'ram@mailinator.com', '1234567891', NULL, '$2y$10$ciPxK6EXohS.QXWfKsnv3OFPfOY8crXeWmiPkHP7jHX2/gW/ZIA5S', NULL, '2022-09-21 07:30:48', '2022-09-21 07:30:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enquiries_products_id_foreign` (`products_id`),
  ADD KEY `enquiries_suppliers_id_foreign` (`suppliers_id`);

--
-- Indexes for table `enquiries1`
--
ALTER TABLE `enquiries1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `products1`
--
ALTER TABLE `products1`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_enquiries`
--
ALTER TABLE `service_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_providers_email_unique` (`email`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_email_unique` (`email`);

--
-- Indexes for table `trainee_enquiries`
--
ALTER TABLE `trainee_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_centers`
--
ALTER TABLE `training_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_courses`
--
ALTER TABLE `training_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Users1_email_unique` (`email`),
  ADD UNIQUE KEY `Users1_mobile_no_unique` (`mobile_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `enquiries1`
--
ALTER TABLE `enquiries1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `products1`
--
ALTER TABLE `products1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_packages`
--
ALTER TABLE `product_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_specifications`
--
ALTER TABLE `product_specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_enquiries`
--
ALTER TABLE `service_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `trainee_enquiries`
--
ALTER TABLE `trainee_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `training_centers`
--
ALTER TABLE `training_centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `training_courses`
--
ALTER TABLE `training_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
