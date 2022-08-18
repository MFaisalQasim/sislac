-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2022 at 06:12 PM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u931124233_sislas_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(2, 52, 'inh2Nfc9XhQ1X9AOHhxXl3ueiZNbXbgw', 1, '2022-06-19 00:02:49', '2022-06-19 00:02:49', '2022-06-19 00:02:49'),
(3, 53, 'VSQJNY1pxluUs9rxZPatqN5OXcNpk2Xv', 1, '2022-06-20 21:02:23', '2022-06-20 21:02:23', '2022-06-20 21:02:23'),
(4, 55, 'FJKuCXoWOKhq9GIQHL4yerG5ksZSPUJj', 1, '2022-06-20 21:04:20', '2022-06-20 21:04:20', '2022-06-20 21:04:20'),
(5, 56, 'gWqTlObmi061MJ8MPoe3oaPyaJ0SlLcd', 1, '2022-06-20 21:05:29', '2022-06-20 21:05:29', '2022-06-20 21:05:29'),
(6, 57, 'JfTjrSvJSlGA7Z7y2eL3szVcK28CPVLM', 1, '2022-06-20 21:07:16', '2022-06-20 21:07:16', '2022-06-20 21:07:16'),
(7, 58, 'IDYOYiGA4NNzQjMxvnjXmuXnPVeYQyqV', 1, '2022-06-20 21:21:38', '2022-06-20 21:21:38', '2022-06-20 21:21:38'),
(8, 59, '0SmktPPPHXFxi5h6yBxU55tXa3GnIwi4', 1, '2022-06-20 21:28:16', '2022-06-20 21:28:16', '2022-06-20 21:28:16'),
(9, 60, 'yPZshcsEml0yYQDRH5FDwsu4FHUZr5KW', 1, '2022-06-22 19:53:11', '2022-06-22 19:53:11', '2022-06-22 19:53:11'),
(10, 61, 'eGMULS9dXLkHY1QTZIxqA9vM0Zg50m4d', 1, '2022-06-22 19:53:45', '2022-06-22 19:53:45', '2022-06-22 19:53:45'),
(11, 62, 'MDpha11htuelIutgojEfxnuxtg6g5Xf3', 1, '2022-06-22 20:23:54', '2022-06-22 20:23:54', '2022-06-22 20:23:54'),
(12, 63, 'Ca6Qkbn5rx0f5Yxjb63mzLnmF03oV8NM', 1, '2022-06-22 20:32:39', '2022-06-22 20:32:39', '2022-06-22 20:32:39'),
(13, 64, '3xmIaHRVWkj5DBsC5muqR5XIaGofMOUz', 1, '2022-06-22 20:41:53', '2022-06-22 20:41:53', '2022-06-22 20:41:53'),
(14, 65, 'FJi16eIwfAO039wDEHuRsReflNBQ20JB', 1, '2022-06-22 23:20:11', '2022-06-22 23:20:11', '2022-06-22 23:20:11'),
(15, 66, 'CUzC363RY9dBe50DdWx07lopcJ5Alx6f', 1, '2022-06-22 23:21:27', '2022-06-22 23:21:27', '2022-06-22 23:21:27'),
(16, 67, 'tfsZ1eKcgbmiRGzOfrTTUYxom9waMuNb', 1, '2022-06-22 23:21:30', '2022-06-22 23:21:30', '2022-06-22 23:21:30'),
(17, 68, 'blLHZExztoLq0jHS16tfzIgYIeR9lyMu', 1, '2022-06-23 00:13:58', '2022-06-23 00:13:58', '2022-06-23 00:13:58'),
(18, 70, 'RkdW6jpsUAH2QvhAkHxIYsU8VcWYp7ro', 1, '2022-06-23 03:27:23', '2022-06-23 03:27:23', '2022-06-23 03:27:23'),
(19, 71, 'taxDcWExan4Cj5mMBXFGdQIInfq3pwmc', 1, '2022-06-23 19:40:48', '2022-06-23 19:40:48', '2022-06-23 19:40:48'),
(20, 72, 'p7keZ7mA1gkaMVMHL7k527Z1FNb15QUX', 1, '2022-06-23 19:42:19', '2022-06-23 19:42:19', '2022-06-23 19:42:19'),
(21, 73, 'RlXVvJkhLTJeu6QLQ7eA3T5rdJN0xNJI', 1, '2022-06-23 19:43:03', '2022-06-23 19:43:03', '2022-06-23 19:43:03'),
(22, 74, 'RB9EifS53IRIWIxtxxZcIAx0u3q9eutS', 1, '2022-06-23 19:44:09', '2022-06-23 19:44:09', '2022-06-23 19:44:09'),
(23, 75, 'jKiOO1Key9QQy4X7e2hm4365Qa1Q12rp', 1, '2022-06-23 19:59:06', '2022-06-23 19:59:06', '2022-06-23 19:59:06'),
(24, 76, 'nElTXgb81zXgtkDX67PmYKr1aq78fhrr', 1, '2022-06-23 20:13:46', '2022-06-23 20:13:46', '2022-06-23 20:13:46'),
(25, 77, 'muFQHdHr2loBrsmym282EfVnTa3Jvu55', 1, '2022-06-23 21:15:11', '2022-06-23 21:15:11', '2022-06-23 21:15:11'),
(26, 79, 'jgoFysCjYpp1Y21AR9a2FxyByrI9JFnD', 1, '2022-06-23 21:17:07', '2022-06-23 21:17:07', '2022-06-23 21:17:07'),
(27, 80, 'GrmqeAdchPHcu13zqRi3HvuRr9gnY7VU', 1, '2022-06-23 21:17:35', '2022-06-23 21:17:35', '2022-06-23 21:17:35'),
(28, 81, 'wDRSm6Q7gQQDR4uliwc2Hlw5IVfAvXMO', 1, '2022-06-23 21:49:27', '2022-06-23 21:49:27', '2022-06-23 21:49:27'),
(29, 82, 'i9QYg7aZEvOiRfUnp23HtJpbHnjvEpF5', 1, '2022-06-24 02:51:58', '2022-06-24 02:51:58', '2022-06-24 02:51:58'),
(30, 83, '8kigcAX2nX0rLGYjXY6cuQcxVM78jLMO', 1, '2022-06-24 02:52:55', '2022-06-24 02:52:55', '2022-06-24 02:52:55'),
(31, 84, 'E2kICPpois2Z8pXjFydUgmAO6tKHmTjO', 1, '2022-06-24 05:34:25', '2022-06-24 05:34:25', '2022-06-24 05:34:25'),
(32, 85, 'ot2FhqMidHvFPDqUgu5M0zidPs5A55Dk', 1, '2022-06-24 05:38:33', '2022-06-24 05:38:33', '2022-06-24 05:38:33'),
(33, 86, 'dhv3uunloTpFNTYvBnV1NLn8Q4FVjX5q', 1, '2022-06-29 20:33:46', '2022-06-29 20:33:46', '2022-06-29 20:33:46'),
(34, 87, 'd9qwWaDvhgtJyqygT8SawgRGZSQoIn0S', 1, '2022-07-02 23:44:51', '2022-07-02 23:44:51', '2022-07-02 23:44:51'),
(35, 88, '71lKDyDbJfp8mnZ7tKXqcMiFQh3jiPL2', 1, '2022-07-02 23:48:54', '2022-07-02 23:48:54', '2022-07-02 23:48:54'),
(36, 89, 'poXLOuhZ0lxFXRL2i0SfWdvyVqiRWNQk', 1, '2022-07-02 23:50:58', '2022-07-02 23:50:58', '2022-07-02 23:50:58'),
(37, 90, 'miI7T0lpjRndFlodYvqC7MWuXryztu0C', 1, '2022-07-06 01:40:05', '2022-07-06 01:40:05', '2022-07-06 01:40:05'),
(38, 91, 'Wn6uaJY3ehgxhEqFK4LXKS6Vv26dCran', 1, '2022-07-06 01:40:33', '2022-07-06 01:40:33', '2022-07-06 01:40:33'),
(39, 92, 'ct0TAiLcdW3UshOkOvhETEz6uA42yl1W', 1, '2022-07-06 21:47:22', '2022-07-06 21:47:22', '2022-07-06 21:47:22'),
(40, 93, 'i7Zxp4IWh3UM3QFcYhrUBoLRdoJOMQxM', 1, '2022-07-07 00:51:24', '2022-07-07 00:51:24', '2022-07-07 00:51:24'),
(41, 94, 'BNaduBMn6zOwGscHclgFYJoYlidiQXlg', 1, '2022-07-12 21:05:13', '2022-07-12 21:05:13', '2022-07-12 21:05:13'),
(42, 95, '40tp7mxwwMaB7tIjMfjmp2YxI5TNBtej', 1, '2022-07-12 21:05:45', '2022-07-12 21:05:45', '2022-07-12 21:05:45'),
(43, 96, 'iYb4YeeRoOYshDM0ghdkzizfXm5nKVO1', 1, '2022-07-14 02:47:24', '2022-07-14 02:47:24', '2022-07-14 02:47:24'),
(44, 97, 'h89XSmw8g8TsdedhiLOnjinGrUKsugIO', 1, '2022-07-14 02:47:49', '2022-07-14 02:47:49', '2022-07-14 02:47:49'),
(45, 98, '1R8EOPtUrbnPDiaLijfSpinAMKy03Y4j', 1, '2022-07-15 22:02:47', '2022-07-15 22:02:47', '2022-07-15 22:02:47'),
(46, 99, 'HqL6EB6cjNUNDzUKD3u3SJoj2Ryus2j3', 1, '2022-07-23 06:10:35', '2022-07-23 06:10:35', '2022-07-23 06:10:35'),
(47, 100, 'blGIbm74JZhHOM7ErpsaKj4uKtj9gw2u', 1, '2022-07-23 06:24:39', '2022-07-23 06:24:39', '2022-07-23 06:24:39'),
(48, 101, 'fpf7mG0YOScU6EXwCqblFITrkS5abBIe', 1, '2022-07-26 00:05:31', '2022-07-26 00:05:31', '2022-07-26 00:05:31'),
(49, 102, 'yNHyb54iyI1EX7cEsFmC70x6oRYnNuuT', 1, '2022-07-26 00:05:47', '2022-07-26 00:05:47', '2022-07-26 00:05:47'),
(50, 103, 'juCJ7C3sZJ64j1UWSsaSM125WPkEEx4L', 1, '2022-07-26 00:34:08', '2022-07-26 00:34:08', '2022-07-26 00:34:08'),
(51, 104, 'oMSpJN6HQheiXkcwTwFZ8GooxyrIlX3g', 1, '2022-07-29 02:40:54', '2022-07-29 02:40:54', '2022-07-29 02:40:54'),
(52, 105, 'GiPd4WIatYmxL7flbzNdNoWc9f8MWz7A', 1, '2022-07-30 01:28:55', '2022-07-30 01:28:55', '2022-07-30 01:28:55'),
(53, 1000, 'KVpQ4DkyzMaSMPx0ZZGFfm2izGWgMm2I', 1, '2022-08-05 20:01:03', '2022-08-05 20:01:03', '2022-08-05 20:01:03'),
(54, 1001, '66ScoR8tScs4dzeoLantDwpzLTvs1xak', 1, '2022-08-05 20:05:48', '2022-08-05 20:05:48', '2022-08-05 20:05:48'),
(55, 1002, 'u7syuBRwZxbQmTrzWAyjL5wAV0phSAbE', 1, '2022-08-05 23:30:27', '2022-08-05 23:30:27', '2022-08-05 23:30:27'),
(56, 1003, 'cqsizYknWwVmNe9FPKKR6qoy4fV2IgyF', 1, '2022-08-06 21:24:15', '2022-08-06 21:24:15', '2022-08-06 21:24:15'),
(57, 1005, 'wEwWI9cShsuMbanHCPPmNV2vzqJitoEy', 1, '2022-08-06 21:26:12', '2022-08-06 21:26:12', '2022-08-06 21:26:12'),
(58, 1007, 'ETJhLzQPfNEkRGtw8z3RFW0618bdTZqc', 1, '2022-08-06 21:27:18', '2022-08-06 21:27:18', '2022-08-06 21:27:18'),
(59, 1009, 'qXsvmQ27cEnRu9DvyDJtlUH1ywBz7R8Z', 1, '2022-08-06 21:27:58', '2022-08-06 21:27:58', '2022-08-06 21:27:58'),
(60, 1010, 'xfThMCiISP39qNjuiRJpU7C0Gj0ADkML', 1, '2022-08-07 00:17:23', '2022-08-07 00:17:23', '2022-08-07 00:17:23'),
(61, 1011, 'DOjITkjU6IKmjXRZI77vuxGJ9OeCfzNb', 1, '2022-08-16 16:28:27', '2022-08-16 16:28:27', '2022-08-16 16:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `patient_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fast` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicines` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `entrance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `booked_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_with` bigint(20) UNSIGNED DEFAULT NULL,
  `available_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=>pending,1=>complete,2=>cancel',
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `appointment_for` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `user_id`, `patient_name`, `password`, `gender`, `appointment_date`, `zip_code`, `address`, `birthdate`, `age`, `rg`, `cpf`, `city`, `phone`, `responsible`, `email`, `doctor`, `code`, `insurance`, `ins_company`, `fast`, `dum`, `diagnosis`, `medicines`, `comments`, `sub_total`, `disc`, `total`, `entrance`, `booked_by`, `appointment_with`, `available_time`, `status`, `is_deleted`, `created_at`, `updated_at`, `appointment_for`) VALUES
(10083, 4, 70, 'VERONICA GOMES', 'k1a5tB', NULL, '2022-07-29', NULL, 'admin@themesbrand.website', '1988-11-13', NULL, NULL, NULL, NULL, '83999998877', NULL, 'site23@teste.com', 'ALAN DANTAS S. OLIVEIRA', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '100.00', '0.00', '100.00', '0.00', '52', 85, '09:00', '1', 0, '2022-07-29 00:14:57', '2022-08-16 23:33:50', NULL),
(10084, 3, 67, 'JOSÉ LUCAS DA SILVA', 'bbdHqb', 'Masculino', '2022-07-29', NULL, 'admin@themesbrand.website', '1999-02-13', NULL, NULL, NULL, NULL, '83999672999', NULL, 'site@teste.com', 'MARIA APARECIDA', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '20.00', '0.00', '20.00', '0.00', '52', 86, '09:00', '1', 0, '2022-07-29 00:17:13', '2022-08-13 15:23:07', NULL),
(10085, 6, 82, 'PATRICIA ABRAVANEL', 'OatsNu', 'Feminino', '2022-08-04', '8', 'AVENIDA TESTE', '1980-11-03', NULL, NULL, NULL, 'SAO JOSE DO BREJO DO CRUZ', NULL, NULL, 'marcos.1lsaraiva@gmail.com', 'DAMARES CAVALCANTE', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '100.00', '0.00', '100.00', '0.00', '52', 89, '09:00', '0', 0, '2022-08-04 03:48:06', '2022-08-13 15:23:08', NULL),
(10086, 4, 70, 'VERONICA GOMES', 'cyaaep', 'Male', '2022-08-04', '456', 'admin@themesbrand.website', '1988-11-13', NULL, NULL, NULL, NULL, '83999998877', NULL, 'site23@teste.com', 'MARIA APARECIDA', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '120.00', '0.00', '120.00', '0.00', '74', 86, '09:00', '0', 0, '2022-08-04 21:12:47', '2022-08-11 07:54:01', NULL),
(10087, 9, 93, 'JESSICA GOMES DA COSTA', '3tuzjt', NULL, '2022-08-07', NULL, 'admin@themesbrand.website', '1990-04-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ELISA LISBOA', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '20.00', '0.00', '20.00', '0.00', '52', 87, '09:00', '0', 0, '2022-08-06 23:08:27', '2022-08-06 23:08:27', NULL),
(10088, 8, 90, 'SEBASTIANA VITAL', '5FGHc4', 'Feminino', '2022-08-07', NULL, NULL, '2001-05-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'JOSÉ GERALDO', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '100.00', '0.00', '100.00', '0.00', '52', 1002, '09:00', '0', 0, '2022-08-07 00:14:02', '2022-08-07 00:14:02', NULL),
(10089, 12, 97, 'EDINETE DUARTE', 'elbw8q', 'Feminino', '2022-08-07', NULL, 'admin@themesbrand.website', '1998-12-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ELISEU CARDOSO', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '100.00', '0.00', '100.00', '0.00', '74', 1010, '09:00', '0', 0, '2022-08-07 00:21:20', '2022-08-11 00:45:41', NULL),
(10090, 15, 103, 'SAPNA DEVI', 'i80Gln', 'Feminino', '2022-08-09', NULL, NULL, '1990-09-11', NULL, NULL, '987.789.654-45', NULL, NULL, NULL, 'sapna@site.com', 'ALAN DANTAS S. OLIVEIRA', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '13.00', '0.00', '13.00', '0.00', '52', 85, '09:00', '0', 0, '2022-08-09 06:41:43', '2022-08-11 08:15:56', NULL),
(10091, 11, 96, 'ANTONIO ROQUE', 'OA5ehl', 'Masculino', '2022-08-10', NULL, 'admin@themesbrand.website', '2001-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ALAN DANTAS S. OLIVEIRA', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '20.00', '0.00', '20.00', '0.00', '52', 85, '09:00', '1', 0, '2022-08-10 01:58:42', '2022-08-11 00:45:34', NULL),
(10092, 14, 100, 'ELIONE CARDOSO', 'vNey3q', 'Masculino', '2022-08-10', NULL, NULL, '1988-09-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ELISEU CARDOSO', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '20.00', '0.00', '20.00', '0.00', '52', 1010, '09:00', '1', 0, '2022-08-10 02:04:13', '2022-08-13 15:22:06', NULL),
(10093, 10, 94, 'GILSON SARAIVA', 'co5veD', 'Masculino', '2022-08-11', NULL, 'admin@themesbrand.website', '1960-03-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'JOSÉ GERALDO', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '20.00', '0.00', '20.00', '0.00', '52', 1002, '09:00', '0', 0, '2022-08-11 07:54:29', '2022-08-11 07:54:38', NULL),
(10094, 16, 104, 'CÉLIDA MARIA OLIVEIRA', 'siMJb7', 'Feminino', '2022-08-13', '8', 'RUA PEDO ELOI', '1970-02-25', NULL, NULL, NULL, 'BREJO DO CRUZ', NULL, NULL, NULL, 'MARIA APARECIDA', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '100.00', '0.00', '100.00', '0.00', '52', 86, '09:00', '0', 0, '2022-08-13 00:14:00', '2022-08-13 15:22:16', NULL),
(10096, 15, 103, 'SAPNA DEVI', 'E9IOMA', 'Feminino', '2022-08-13', NULL, NULL, '1990-09-11', NULL, NULL, '987.789.654-45', NULL, NULL, NULL, 'sapna@site.com', 'ELISEU CARDOSO', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '100.00', '0.00', '100.00', '0.00', '52', 1010, '09:00', '0', 0, '2022-08-13 01:33:56', '2022-08-13 01:34:31', NULL),
(10097, 3, 67, 'JOSÉ LUCAS DA SILVA', 'v3PiaL', NULL, '2022-08-16', NULL, 'admin@themesbrand.website', '1999-02-13', NULL, NULL, NULL, NULL, '83999672999', NULL, 'site@teste.com', 'ELISA LISBOA', NULL, NULL, NULL, 'Sim', NULL, NULL, NULL, NULL, '0', '0.00', '0', '0.00', '52', 87, '09:00', '0', 0, '2022-08-16 15:43:46', '2022-08-16 15:43:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_exams`
--

CREATE TABLE `appointment_exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointments_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_exams`
--

INSERT INTO `appointment_exams` (`id`, `appointments_id`, `exam_id`, `name`, `description`, `price`) VALUES
(101, '10083', '16', 'CITOLÓGIA CÉRVICO-VAGINAL', 'CITOLÓGIA CÉRVICO-VAGINAL', '100'),
(102, '10084', '23', 'GLICOSURIA 24 HORAS', 'GLICOSURIA 24 HORAS', '20'),
(103, '10085', '16', 'CITOLÓGIA CÉRVICO-VAGINAL', 'CITOLÓGIA CÉRVICO-VAGINAL', '100'),
(105, '10086', '23', 'GLICOSURIA 24 HORAS', 'GLICOSURIA 24 HORAS', '20'),
(106, '10086', '16', 'CITOLÓGIA CÉRVICO-VAGINAL', 'CITOLÓGIA CÉRVICO-VAGINAL', '100'),
(107, '10087', '23', 'GLICOSURIA 24 HORAS', 'GLICOSURIA 24 HORAS', '20'),
(108, '10088', '16', 'CITOLÓGIA CÉRVICO-VAGINAL', 'CITOLÓGIA CÉRVICO-VAGINAL', '100'),
(109, '10089', '16', 'CITOLÓGIA CÉRVICO-VAGINAL', 'CITOLÓGIA CÉRVICO-VAGINAL', '100'),
(110, '10090', '24', 'CITOLÓGIA', 'CITOLÓGIA', '13'),
(111, '10091', '25', 'COLESTEROL TOTAL E FRAÇÕES', 'COLESTEROL TOTAL E FRAÇÕES', '20'),
(112, '10092', '23', 'GLICOSURIA 24 HORAS', 'GLICOSURIA 24 HORAS', '20'),
(113, '10093', '23', 'GLICOSURIA 24 HORAS', 'GLICOSURIA 24 HORAS', '20'),
(114, '10094', '16', 'CITOLÓGIA CÉRVICO-VAGINAL', 'CITOLÓGIA CÉRVICO-VAGINAL', '100'),
(115, '10095', '16', 'CITOLÓGIA CÉRVICO-VAGINAL', 'CITOLÓGIA CÉRVICO-VAGINAL', '100'),
(116, '10096', '16', 'CITOLÓGIA CÉRVICO-VAGINAL', 'CITOLÓGIA CÉRVICO-VAGINAL', '100');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `abbreviation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `abbreviation`, `name`, `created_at`, `updated_at`) VALUES
(2, 'ANA', 'ANATOMO PATOLOGICOOO', NULL, NULL),
(3, 'BAC', 'BACTERIOLOGIA', NULL, NULL),
(4, 'BIO', 'BIOQUIMICA', NULL, NULL),
(5, 'CIT', 'CITOLOGIA', NULL, NULL),
(6, 'DIV', 'DIVERSOS', NULL, NULL),
(7, 'ESP', 'ESPERMOGRAMA', NULL, NULL),
(8, 'HEM', 'HEMATOLOGIA', NULL, NULL),
(9, 'HOR', 'HORMONIOS', NULL, NULL),
(10, 'IMU', 'IMUNOLOGIA', NULL, NULL),
(11, 'MIC', 'MICROBIOLOGIA', NULL, NULL),
(12, 'PAR', 'PARASITOLOGIA', NULL, NULL),
(13, 'URI', 'URINALISE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cytologies`
--

CREATE TABLE `cytologies` (
  `id` int(255) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cytologies`
--

INSERT INTO `cytologies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(24, 'SATISFACTORY', NULL, NULL),
(25, 'UNSATISFACTORY', NULL, NULL),
(26, 'MICROBIOLOGY', NULL, NULL),
(27, 'SAMPLE STANDARD', NULL, NULL),
(28, 'EPITHELIALS', NULL, NULL),
(29, 'CHANGES 1', NULL, NULL),
(30, 'CHANGES 2', NULL, NULL),
(31, 'CHANGES 3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cytology_subitems`
--

CREATE TABLE `cytology_subitems` (
  `id` int(11) NOT NULL,
  `cytology_subitem` text DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `cytology_Id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cytology_subitems`
--

INSERT INTO `cytology_subitems` (`id`, `cytology_subitem`, `code`, `cytology_Id`) VALUES
(75, 'Yes', '1', '24'),
(76, 'No', '2', '24'),
(102, 'Hypocellular material in less than 10% of the smear', '1', '25'),
(103, 'Presence of blood in more than 75% of the smear', '2', '25'),
(104, 'Presence of leukocytes in more than 75% of the smear', '3', '25'),
(105, 'Desiccation artifacts in more than 75% of the smear', '4', '25'),
(106, 'Intense cellular overlap in more than 75% of the smear', '5', '25'),
(107, 'Others', '6', '25'),
(108, 'Lactobacillus sp.', '1', '26'),
(109, 'coconuts', '2', '26'),
(110, 'Fungal organisms morphologically consistent with Candida\nsp.', '3', '26'),
(111, 'Trichomonas Varginalis', '4', '26'),
(112, 'Supracytoplasmic bacilli (suggestive of Gardnerella sp./Mobiluncus sp.)', '5', '26'),
(113, 'Cocobacilli', '6', '26'),
(114, 'Morphologically compatible bacteria with Actinomyces sp.Bactérias Morfologicamente compatíveis com Actinomyces sp.\n', '7', '26'),
(115, 'Cytopathic effect compatible with viruses of the Herpes simplex group.', '8', '26'),
(116, 'Suggestive of Chlamydia sp.', '9', '26'),
(117, 'Leptothrix Vaginalis\n', '10', '26'),
(118, 'Fusobacterium spp', '11', '26'),
(119, 'other bacilli', '12', '26'),
(120, 'Bacteria\n', '13', '26'),
(121, 'NOTE: Abundant bacterial flora.', '14', '26'),
(122, 'Nothing noteworthy.', '15', '26'),
(123, 'Trophic', '1', '27'),
(124, 'Atrophic', '2', '27'),
(125, 'scaly', '1', '28'),
(126, 'scaly and glandular', '2', '28'),
(127, 'Squamous, Glandular and Metaplastic', '3', '28'),
(128, 'Scaly and Metaplastic', '4', '28'),
(129, 'Inflammation', '1', '29'),
(130, 'Atrophy with inflammation (Atrophic Vaginitis)', '2', '29'),
(131, 'immature squamous metaplasia', '3', '29'),
(132, 'Morphological changes compatible with radiation', '4', '29'),
(133, 'cell cytolysis', '5', '29'),
(134, 'Abundant presence of leukocytes', '6', '29'),
(135, 'Typical repair', '7', '29'),
(136, 'IUD-compatible cell reaction', '8', '29'),
(137, 'Note: We suggest treating the atrophy and repeating for better\noncotic evaluation, or at medical discretion.', '9', '29'),
(138, 'Note: Due to inflammation, we suggest treating and repeating for\na better assessment.', '10', '29'),
(139, 'Note: Borderline cellularity', '11', '29'),
(141, 'Scaly atypia of undetermined significance -\npossibly non-neoplastic - ASC-US', '1', '30'),
(142, 'Low-grade intraepithelial lesion - LSIL (comprising\nHPV / CIN I)', '2', '30'),
(143, 'Atypia in squamous cells, it is not possible to exclude a\nHSIL (ASC-H)\nAtypia in squamous cells, it is not possible to exclude a\nHSIL (ASC-H)', '3', '30'),
(144, 'High-grade intraepithelial lesion - HSIL (comprising\nNIC II and III)', '4', '30'),
(145, 'High-grade intraepithelial lesion, which cannot be excluded\nmicroinvasion.', '5', '30'),
(146, 'Invasive squamous cell carcinoma.', '6', '30'),
(147, 'Atypia in glandular cells - AGC', '1', '31'),
(148, 'Atypical endocervical cells not otherwise specified\n- AGC-SOE', '2', '31'),
(149, 'Atypical endocervical cells, possibly neoplastic\n- AGC-NOE', '3', '31'),
(150, 'Endocervical adenocarcinoma in situ (AIS)', '4', '31'),
(151, 'Invasive endocervical adenocarcinoma', '5', '31'),
(152, 'Note', '6', '31'),
(153, 'Hypotrophic', '3', '27');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_CPF` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_CRM` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_Advice` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_specialty` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot_time` int(11) DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `title`, `fees`, `degree`, `doc_CPF`, `doc_CRM`, `doc_Advice`, `doc_specialty`, `experience`, `slot_time`, `is_deleted`, `created_at`, `updated_at`) VALUES
(2, 60, 'Mr.', 'NA', 'NA', 'tes', '236622', '02 - COREN', 'General Clinic', 'NA', NULL, 0, '2022-06-22 19:53:11', '2022-06-23 00:27:07'),
(3, 66, 'Mr.', 'NA', 'NA', '678', '11030', '01 - CRAS', 'General Clinic', 'NA', NULL, 0, '2022-06-22 23:21:27', '2022-06-23 00:27:35'),
(4, 72, NULL, 'NA', 'NA', NULL, 'test', NULL, NULL, 'NA', NULL, 0, '2022-06-23 19:42:19', '2022-06-23 19:56:57'),
(5, 75, NULL, 'NA', 'NA', NULL, 'test', NULL, NULL, 'NA', NULL, 0, '2022-06-23 19:59:06', '2022-07-02 23:35:56'),
(6, 76, NULL, 'NA', 'NA', NULL, 'test', NULL, NULL, 'NA', NULL, 0, '2022-06-23 20:13:46', '2022-06-23 21:23:14'),
(7, 83, NULL, 'NA', 'NA', NULL, '1988', '01 - CRAS', 'Doctor', 'NA', NULL, 0, '2022-06-24 02:52:55', '2022-07-02 23:38:22'),
(8, 85, NULL, 'NA', 'NA', NULL, '2020202', NULL, NULL, 'NA', NULL, 0, '2022-06-24 05:38:33', '2022-06-29 07:45:59'),
(9, 86, NULL, 'NA', 'NA', NULL, '123', '08 - CRO', 'Nurse', 'NA', NULL, 0, '2022-06-29 20:33:46', '2022-06-29 20:33:46'),
(10, 87, NULL, 'NA', 'NA', NULL, '01', 'Outro', 'General Clinic', 'NA', NULL, 0, '2022-07-02 23:44:51', '2022-07-02 23:44:51'),
(11, 88, NULL, 'NA', 'NA', NULL, '123456', 'CRM', 'Doctor', 'NA', NULL, 0, '2022-07-02 23:48:54', '2022-07-02 23:48:54'),
(12, 89, NULL, 'NA', 'NA', NULL, '56789', 'CRO', 'Doctor', 'NA', NULL, 0, '2022-07-02 23:50:58', '2022-07-07 17:59:48'),
(13, 91, NULL, 'NA', 'NA', NULL, '101010', '01 - CRAS', 'Doctor', 'NA', NULL, 0, '2022-07-06 01:40:33', '2022-07-07 01:22:17'),
(14, 92, NULL, 'NA', 'NA', NULL, '333', NULL, NULL, 'NA', NULL, 0, '2022-07-06 21:47:22', '2022-07-07 00:40:29'),
(15, 95, NULL, 'NA', 'NA', NULL, '988', NULL, 'Doctor', 'NA', NULL, 0, '2022-07-12 21:05:45', '2022-07-22 03:00:11'),
(16, 1001, NULL, 'NA', 'NA', NULL, '345444', 'CRO', 'VET', 'NA', NULL, 0, '2022-08-05 20:05:48', '2022-08-05 20:05:48'),
(17, 1002, NULL, 'NA', 'NA', NULL, '1235487', 'CRAS', 'Doctor', 'NA', NULL, 0, '2022-08-05 23:30:27', '2022-08-05 23:30:27'),
(18, 1010, NULL, 'NA', 'NA', NULL, '10001', 'CRM', 'Doctor', 'NA', NULL, 0, '2022-08-07 00:17:23', '2022-08-07 00:17:23'),
(19, 1011, NULL, 'NA', 'NA', NULL, 'asda', NULL, NULL, 'NA', NULL, 0, '2022-08-16 16:28:27', '2022-08-16 16:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_available_days`
--

CREATE TABLE `doctor_available_days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `sun` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>not available,1=>available',
  `mon` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>not available,1=>available',
  `tue` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>not available,1=>available',
  `wen` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>not available,1=>available',
  `thu` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>not available,1=>available',
  `fri` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>not available,1=>available',
  `sat` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>not available,1=>available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_available_slots`
--

CREATE TABLE `doctor_available_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_available_time_id` bigint(20) UNSIGNED NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_available_times`
--

CREATE TABLE `doctor_available_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `abbreviation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destiny` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_kit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_support` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_editor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deadline` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `abbreviation`, `name`, `category`, `destiny`, `label_group`, `quantity_label`, `exam_kit`, `exam_support`, `exam_price`, `exam_editor`, `created_at`, `updated_at`, `deadline`, `deleted_at`) VALUES
(16, 'CITCV', 'CITOLÓGIA CÉRVICO-VAGINAL', 'CIT', NULL, '1', '1', '1', NULL, '100', NULL, NULL, NULL, 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_infos`
--

CREATE TABLE `medical_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pulse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allergy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_pressure` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respiration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_infos`
--

INSERT INTO `medical_infos` (`id`, `user_id`, `height`, `b_group`, `pulse`, `allergy`, `weight`, `b_pressure`, `respiration`, `diet`, `is_deleted`, `created_at`, `updated_at`) VALUES
(4, 61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-22 19:53:45', '2022-06-22 19:53:45'),
(5, 65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-22 23:20:11', '2022-06-22 23:20:11'),
(6, 67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-22 23:21:30', '2022-06-22 23:21:30'),
(7, 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-23 03:27:23', '2022-06-23 03:27:23'),
(8, 80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-23 21:17:35', '2022-06-23 21:17:35'),
(9, 82, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-24 02:51:58', '2022-06-24 02:51:58'),
(10, 84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-06-24 05:34:25', '2022-06-24 05:34:25'),
(11, 90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-07-06 01:40:05', '2022-07-06 01:40:05'),
(12, 93, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-07-07 00:51:24', '2022-07-07 00:51:24'),
(13, 94, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-07-12 21:05:13', '2022-07-12 21:05:13'),
(14, 96, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-07-14 02:47:24', '2022-07-14 02:47:24'),
(15, 97, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-07-14 02:47:49', '2022-07-14 02:47:49'),
(16, 98, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-07-15 22:02:47', '2022-07-15 22:02:47'),
(17, 103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-07-26 00:34:08', '2022-07-26 00:34:08'),
(18, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-07-29 02:40:54', '2022-07-29 02:40:54'),
(19, 105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-07-30 01:28:55', '2022-07-30 01:28:55'),
(20, 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-08-05 20:01:03', '2022-08-05 20:01:03'),
(21, 1009, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-08-06 21:27:58', '2022-08-06 21:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prescription_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(2, '2020_06_02_181105_create_patients_table', 1),
(3, '2020_06_02_190516_create_medical_infos_table', 1),
(4, '2020_06_15_193503_create_doctors_table', 1),
(5, '2020_08_12_192435_create_appointments_table', 1),
(6, '2020_08_23_204021_create_prescriptions_table', 1),
(7, '2020_08_23_204823_create_medicines_table', 1),
(8, '2020_08_23_204910_create_test_reports_table', 1),
(9, '2020_08_27_005231_create_invoices_table', 1),
(10, '2020_08_27_013259_create_invoice__details_table', 1),
(11, '2021_10_14_110108_create_reception_list_doctors_table', 1),
(12, '2021_10_25_105909_create_notification_types_table', 1),
(13, '2021_10_25_110054_create_notifications_table', 1),
(14, '2021_10_26_163942_create_doctor_available_days_table', 1),
(15, '2021_10_27_152952_create_doctor_available_times_table', 1),
(16, '2021_10_27_154530_create_doctor_available_slots_table', 1),
(17, '2021_11_01_152756_add_foreign_keys_to_appointments_table', 1),
(18, '2021_12_28_173014_create_transactions_table', 1),
(19, '2022_01_13_142321_create_payment_apis_table', 1),
(20, '2022_05_16_133057_create_new_parameter_table', 1),
(21, '2022_05_18_195127_create_appointment_exams_table', 1),
(23, '2022_06_03_224852_create_category_table', 2),
(24, '2022_06_03_225351_create_exam_table', 3),
(25, '2022_06_16_212905_add_fields_to_patients_table', 4),
(26, '2022_06_17_011819_add_deadline_to_exams_table', 4),
(27, '2022_06_22_013422_create_column_new_exam', 5),
(28, '2022_06_23_010001_add_deleted_at_to_exams_table', 6),
(29, '2022_06_23_235200_add_column_result_to_new_parameter_table', 7),
(31, '2022_06_24_000216_add_column_result_to_new_parameter_table', 8),
(33, '2022_07_09_023231_create_results_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `new_parameter`
--

CREATE TABLE `new_parameter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parameter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abbreviations` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formula` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decimal_places` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decimal_mask` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>no,1=>yes',
  `minimum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maximum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block_recording` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>no,1=>yes',
  `mandatory_parameter` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>no,1=>yes',
  `imp_ruler` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=>no,1=>yes',
  `previous_imp` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=>no,1=>yes',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_parameter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evolutionary_report_parameter` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=>no,1=>yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `exam_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_parameter`
--

INSERT INTO `new_parameter` (`id`, `parameter`, `type`, `unit`, `abbreviations`, `standard_value`, `formula`, `size`, `decimal_places`, `decimal_mask`, `minimum`, `maximum`, `block_recording`, `mandatory_parameter`, `imp_ruler`, `previous_imp`, `description`, `reference_value`, `support_parameter`, `evolutionary_report_parameter`, `created_at`, `updated_at`, `exam_id`) VALUES
(291, '##GLIC##', 'numeric', NULL, NULL, NULL, NULL, '5', '2', 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 07:48:10', '2022-08-11 07:48:10', 23),
(292, '##OBS##', 'text', NULL, NULL, NULL, NULL, '150', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 07:48:24', '2022-08-11 07:48:24', 23),
(293, '##SATISFACTORY##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:11:31', '2022-08-11 08:11:31', 24),
(294, '##STANDARD##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:11:39', '2022-08-11 08:11:39', 24),
(295, '##UNSATISFACTORY1##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:11:48', '2022-08-11 08:11:48', 24),
(296, '##UNSATISFACTORY2##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:11:56', '2022-08-11 08:11:56', 24),
(297, '##MIC1##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:12:06', '2022-08-11 08:12:06', 24),
(298, '##MIC2##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:12:12', '2022-08-11 08:12:12', 24),
(299, '##MIC3##', 'text', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:12:29', '2022-08-11 08:12:29', 24),
(300, '##MIC4##', 'text', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:12:36', '2022-08-11 08:12:36', 24),
(301, '##EPITHELIUM##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:13:30', '2022-08-11 08:13:30', 24),
(302, '##CHANGES##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:13:40', '2022-08-11 08:13:40', 24),
(303, '##CHANGES1##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:13:45', '2022-08-11 08:13:45', 24),
(304, '##1CELLS1##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:13:53', '2022-08-11 08:13:53', 24),
(305, '##1CELLS2##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:13:59', '2022-08-11 08:13:59', 24),
(306, '##1CELLS3##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:14:05', '2022-08-11 08:14:05', 24),
(307, '##1CELLS4##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:14:10', '2022-08-11 08:14:10', 24),
(308, '##1MIC1##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:14:20', '2022-08-11 08:14:20', 24),
(309, '##1MIC2##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:14:25', '2022-08-11 08:14:25', 24),
(310, '##1MIC3##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:14:32', '2022-08-11 08:14:32', 24),
(311, '##1MIC4##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:14:37', '2022-08-11 08:14:37', 24),
(312, '##CHANGES2##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:14:49', '2022-08-11 08:14:49', 24),
(313, '##2CELLS1##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:15:26', '2022-08-11 08:15:26', 24),
(314, '##2CELLS2##', 'numeric', NULL, NULL, NULL, NULL, '2', NULL, 0, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, 1, '2022-08-11 08:15:32', '2022-08-11 08:15:32', 24);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notification_type_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_user` bigint(20) UNSIGNED NOT NULL,
  `to_user` bigint(20) UNSIGNED NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '0=>Active, 1=>Deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification_types`
--

CREATE TABLE `notification_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '0=>Active, 1=>Deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification_types`
--

INSERT INTO `notification_types` (`id`, `type`, `is_deleted`, `created_at`, `updated_at`) VALUES
(5, 'Appointment Added', 0, '2022-06-19 00:02:49', NULL),
(6, 'Appointment Confirm', 0, '2022-06-19 00:02:49', NULL),
(7, 'Appointment Cancel', 0, '2022-06-19 00:02:49', NULL),
(8, 'Invoice Generated', 0, '2022-06-19 00:02:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `patient_dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_Age` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_rg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_CPF` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_responsible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_health` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_enrollment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_observation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_social_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `user_id`, `age`, `gender`, `address`, `is_deleted`, `created_at`, `updated_at`, `patient_dob`, `patient_Age`, `patient_rg`, `patient_CPF`, `patient_responsible`, `patient_health`, `patient_company`, `patient_enrollment`, `patient_plan`, `patient_observation`, `patient_social_name`) VALUES
(1, 61, NULL, NULL, NULL, 0, '2022-06-22 19:53:45', '2022-07-23 00:45:11', '2022-06-16', NULL, NULL, NULL, NULL, 'test', 'test', 'tet', 'test', 'test', 'test'),
(2, 65, NULL, NULL, NULL, 0, '2022-06-22 23:20:11', '2022-06-22 23:20:11', NULL, '23', '44', '444', 'yup', '-', '-', '-', '-', '-', '-'),
(3, 67, NULL, NULL, NULL, 0, '2022-06-22 23:21:30', '2022-06-22 23:21:30', '1999-02-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 70, NULL, NULL, NULL, 0, '2022-06-23 03:27:23', '2022-06-23 03:27:23', '1988-11-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 80, NULL, NULL, NULL, 0, '2022-06-23 21:17:35', '2022-06-23 23:24:23', '2022-06-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 82, NULL, NULL, NULL, 0, '2022-06-24 02:51:58', '2022-07-22 04:26:07', '1980-11-03', NULL, '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 84, NULL, NULL, NULL, 0, '2022-06-24 05:34:25', '2022-07-23 00:44:30', '2001-03-13', NULL, '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 90, NULL, NULL, NULL, 0, '2022-07-06 01:40:05', '2022-07-06 01:40:05', '2001-05-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 93, NULL, NULL, NULL, 0, '2022-07-07 00:51:24', '2022-07-23 00:44:44', '1990-04-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 94, NULL, NULL, NULL, 0, '2022-07-12 21:05:13', '2022-07-12 21:05:13', '1960-03-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 96, NULL, NULL, NULL, 0, '2022-07-14 02:47:24', '2022-07-14 02:47:24', '2001-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 97, NULL, NULL, NULL, 0, '2022-07-14 02:47:49', '2022-07-23 00:44:51', '1998-12-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 98, NULL, NULL, NULL, 0, '2022-07-15 22:02:47', '2022-08-05 20:04:28', '1985-07-26', NULL, NULL, '110.000.000-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 100, NULL, NULL, NULL, 0, '2022-07-24 00:21:32', '2022-07-24 00:21:32', '1988-09-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 103, NULL, NULL, NULL, 0, '2022-07-26 00:34:08', '2022-08-06 00:08:53', '1990-09-11', NULL, NULL, '987.789.654-45', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 104, NULL, NULL, NULL, 0, '2022-07-29 02:40:54', '2022-07-29 02:40:54', '1970-02-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 105, NULL, NULL, NULL, 0, '2022-07-30 01:28:55', '2022-07-30 01:28:55', '1970-02-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 1000, NULL, NULL, NULL, 0, '2022-08-05 20:01:03', '2022-08-06 21:23:05', '2022-08-05', NULL, '1232133', '987.654.634-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 1009, NULL, NULL, NULL, 0, '2022-08-06 21:27:58', '2022-08-08 23:07:17', '2022-08-13', NULL, '12346', '110.000.000-00', NULL, 'tes', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patients1`
--

CREATE TABLE `patients1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `patient_dob` date DEFAULT NULL,
  `patient_Age` int(10) DEFAULT NULL,
  `patient_rg` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_CPF` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_responsible` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_health` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_company` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_enrollment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_plan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_observation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_social_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients1`
--

INSERT INTO `patients1` (`id`, `user_id`, `patient_dob`, `patient_Age`, `patient_rg`, `patient_CPF`, `patient_responsible`, `patient_health`, `patient_company`, `patient_enrollment`, `patient_plan`, `patient_observation`, `patient_social_name`, `age`, `gender`, `address`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, 'Male', '9988 Alphonso Glen Suite 041\nNorth Lavinatown, NH 09116-7023', 0, '2022-06-04 02:42:59', '2022-06-04 02:42:59'),
(2, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, 'Male', '2259 Sarai Point\nNew Meaghan, NM 43373', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(3, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, 'Male', '444 Rodriguez Gateway\nPort Pabloville, NV 54682', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(4, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, 'Male', '37987 Katelynn Island Suite 332\nCummerataborough, AZ 16145-4960', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(5, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, 'Male', '2568 Connelly Junctions Apt. 483\nSerenitymouth, KS 19133-1812', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(6, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, 'Male', '93771 Kolby Lock Suite 940\nBradland, ID 47860-7159', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(7, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, 'Male', '242 Blanca Mountains\nNorth Rosamouth, MI 90988-9210', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(8, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, 'Male', '2272 Schiller Pass\nMorganmouth, CT 48364', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(9, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, 'Male', '8365 Jacky Parks\nLake Roxane, CT 87181-6866', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(10, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, 'Male', '1935 Ahmad Loop Suite 546\nPort Lomaview, CA 32068', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(11, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, 'Male', '5123 Dickinson Falls Suite 833\nBartolettibury, AK 25596', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(12, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, 'Male', '517 Vidal Land\nFeestland, MS 77072-0628', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(13, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, 'Male', '1356 Corwin Points Apt. 147\nSouth Shayna, IN 81863-2542', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(14, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 29, 'Male', '30963 Considine Ramp Apt. 911\nLake Ally, WY 10565', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00'),
(15, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, 'Male', '59921 Barrows Street Apt. 521\nTessieburgh, NH 41139-7372', 0, '2022-06-04 02:43:00', '2022-06-04 02:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_apis`
--

CREATE TABLE `payment_apis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gateway_type` tinyint(4) NOT NULL COMMENT '1=>Razorpay',
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '0=>Active, 1=>Deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(287, 84, 'iIwiedo4x4ji4CkqYuEVKW69v4Wbz3SN', '2022-07-22 04:44:29', '2022-07-22 04:44:29'),
(296, 84, 'fOPdwSOAGCJxehqe9q8YVC6vpPAWcNRW', '2022-07-23 03:03:35', '2022-07-23 03:03:35'),
(301, 98, 'vpEmbRS7lV6wiUmz3BQ6aBSQcOuela4R', '2022-07-23 18:19:45', '2022-07-23 18:19:45'),
(333, 91, 'rBukstqzAehelnqnH1hRZlK7ThHNNnjb', '2022-07-26 05:16:05', '2022-07-26 05:16:05'),
(363, 103, 'vzEWUJ6v6xUaGz2iHpnVEr918mmZ8MEm', '2022-07-28 03:18:41', '2022-07-28 03:18:41'),
(393, 73, 'ln1g9hkZxBrhwOXGQ0hYKDKH3ly68v1L', '2022-08-03 04:04:48', '2022-08-03 04:04:48'),
(428, 66, 'P51DZqmkUEQ8PGQn0IonFl80vLnUvVax', '2022-08-05 20:08:24', '2022-08-05 20:08:24'),
(495, 52, 'jRRJFXGmtFLyyc5q6Wxr32hzlvzwEijK', '2022-08-14 04:30:23', '2022-08-14 04:30:23'),
(496, 52, 'ZlM1zwzhef6AhCqTMB8PhfReoHhYL3jr', '2022-08-14 16:01:32', '2022-08-14 16:01:32'),
(497, 52, 'NHXCripjhWYeSFpFizQDbEGe6gCCM8H9', '2022-08-14 18:39:48', '2022-08-14 18:39:48'),
(498, 52, 'FHiaOGtiNPOxUhAonCdTSji8DFoiMNW6', '2022-08-15 03:42:25', '2022-08-15 03:42:25'),
(499, 52, '8oAy6bp5wAlmLm3Hc75ieUvI5A7mrVZ8', '2022-08-15 18:20:35', '2022-08-15 18:20:35'),
(500, 52, 'me9pnrcaS2AcXe0uyW4uleOyHC8e9E3O', '2022-08-15 21:55:46', '2022-08-15 21:55:46'),
(501, 52, 'B3o7FgyaNXTwmYwx3NiHyqduC971p7Or', '2022-08-16 02:01:41', '2022-08-16 02:01:41'),
(502, 52, '1xwd54K6uH717duseYOS7vxtMqizgd4A', '2022-08-16 04:42:42', '2022-08-16 04:42:42'),
(503, 52, 'oCs6saVnaJZYrBmu4nbWCgeLe4iaQ1CL', '2022-08-16 07:14:21', '2022-08-16 07:14:21'),
(504, 52, 'HyV33rN4C6RnUfD0Tk06aX0c9E9IxZNJ', '2022-08-16 14:07:35', '2022-08-16 14:07:35'),
(505, 52, 'mF51BBHraiM7Cc9zKDWdJFjyWhP7BXUR', '2022-08-16 19:54:40', '2022-08-16 19:54:40'),
(506, 52, '1IRG8BTTEdjm1JL2sc86RrCwr6hx96ls', '2022-08-16 22:21:07', '2022-08-16 22:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `symptoms` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reception_list_doctors`
--

CREATE TABLE `reception_list_doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `reception_id` bigint(20) UNSIGNED NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `new_parameter_id` int(11) NOT NULL,
  `exams_id` int(11) NOT NULL,
  `result` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `appointment_id`, `new_parameter_id`, `exams_id`, `result`, `created_at`, `updated_at`) VALUES
(147, 10084, 246, 23, '30', NULL, NULL),
(155, 10091, 283, 25, '150', NULL, NULL),
(156, 10091, 284, 25, '190', NULL, NULL),
(157, 10091, 285, 25, '45', NULL, NULL),
(158, 10091, 286, 25, '100', NULL, NULL),
(159, 10091, 287, 25, '160', NULL, NULL),
(160, 10091, 288, 25, '100', NULL, NULL),
(161, 10092, 246, 23, '0.10', NULL, NULL),
(162, 10092, 290, 23, '', NULL, NULL),
(171, 10083, 0, 16, '<div style=\"display:flex;flex-wrap: wrap;\" class=\"main\"><h5>SATISFACTORY</h5><input onkeyup=\"getCode(this)\" value=\"1\" type=\"text\" id=\"SATISFACTORY\" data-id=\"24\" style=\"width:50px !important;\" class=\"form-control cytology_subitem\"><h6>Yes</h6></div><div style=\"display:flex\" class=\"mt-3 second_question\"><h5>Sample Standard:</h5><input onkeyup=\"anotherQuestion(this)\" type=\"text\" value=\"1\" id=\"SAMPLE STANDARD\" data-id=\"27\" style=\"width:50px !important;\" class=\"form-control second_question_parameter\"><h6>Trophic</h6></div><div style=\"display:flex; flex-wrap: wrap;\" class=\"mt-3 third_question\"><h5>EPITHELIALS:</h5><input onkeyup=\"thirdQuestion(this)\" value=\"1\" id=\"EPITHELIALS:\" style=\"width:50px !important;\" type=\"text\" data-id=\"\" class=\"form-control third_question_parameter_1\"><h6>scaly</h6></div><div style=\"display:flex; flex-wrap: wrap;\" class=\"mt-3 third_question_changes\"><h5>Changes?</h5><input value=\"2\" onkeyup=\"changes_parameter_keyup(this,event)\" id=\"Changes?\" style=\"width:50px !important;\" type=\"text\" data-id=\"24\" class=\"form-control \"><h6>No</h6></div><div class=\"all_div\"><div style=\"display:flex; width:100% !important;\" class=\"mt-3 fourth_question\"><h5>MICROBIOLOGY:</h5><input onkeyup=\"fourth_Question(this)\" style=\"width:50px !important;\" type=\"text\" data-id=\"\" class=\"form-control FOURTH_question_parameter\" value=\"1\"><h6>Lactobacillus sp.</h6></div><div style=\"display:flex\" class=\"mt-3 fourth_question1\"><input onkeyup=\"fourth_Question(this)\" style=\"width:50px !important;\" type=\"text\" data-id=\"\" class=\"form-control FOURTH_question_parameter\"></div><div style=\"display:flex\" class=\"mt-3 fourth_question2\"><input onkeyup=\"fourth_Question(this)\" style=\"width:50px !important;\" type=\"text\" data-id=\"\" class=\"form-control FOURTH_question_parameter\"></div><div style=\"display:flex\" class=\"mt-3 fourth_question3\"><input onkeyup=\"fourth_Question(this)\" style=\"width:50px !important;\" type=\"text\" data-id=\"\" class=\"form-control FOURTH_question_parameter\"></div></div>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '{\"doctor.list\":true,\"doctor.create\":true,\"doctor.view\":true,\"doctor.update\":true,\"doctor.delete\":true,\"doctor.time_edit\":true,\"profile.update\":true,\"patient.list\":true,\"patient.create\":true,\"patient.update\":true,\"patient.delete\":true,\"patient.view\":true,\"receptionist.list\":true,\"receptionist.create\":true,\"receptionist.update\":true,\"receptionist.delete\":true,\"receptionist.view\":true,\"appointment.list\":true,\"appointment.status\":true,\"prescription.show\":true,\"invoice.show\":true,\"api.create\":true,\"api.list\":true,\"api.delete\":true,\"api.update\":true}', '2022-06-19 00:02:49', '2022-06-19 00:02:49'),
(2, 'doctor', 'Doctor', '{\"receptionist.list\":true,\"doctor.time_edit\":true,\"doctor.delete\":true,\"profile.update\":true,\"patient.list\":true,\"patient.create\":true,\"patient.update\":true,\"patient.delete\":true,\"patient.view\":true,\"appointment.list\":true,\"appointment.create\":true,\"appointment.status\":true,\"prescription.list\":true,\"prescription.create\":true,\"prescription.update\":true,\"prescription.delete\":true,\"prescription.show\":true,\"invoice.show\":true,\"invoice.list\":true,\"invoice.create\":true,\"invoice.update\":true,\"invoice.delete\":true,\"invoice.edit\":true}', '2022-06-19 00:02:49', '2022-06-19 00:02:49'),
(3, 'receptionist', 'Receptionist', '{\"doctor.list\":true,\"doctor.create\":true,\"doctor.view\":true,\"doctor.update\":true,\"patient.list\":true,\"profile.update\":true,\"patient.create\":true,\"patient.update\":true,\"patient.delete\":true,\"patient.view\":true,\"appointment.list\":true,\"appointment.create\":true,\"appointment.status\":true,\"prescription.list\":true,\"prescription.show\":true,\"invoice.show\":true,\"invoice.list\":true,\"invoice.create\":true,\"invoice.update\":true,\"invoice.delete\":true,\"receptionist.delete\":true,\"invoice.edit\":true}', '2022-06-19 00:02:49', '2022-08-04 22:47:23'),
(4, 'patient', 'Patient', '{\"doctor.list\":true,\"profile.update\":true,\"patient-appointment.list\":true,\"appointment.create\":true,\"appointment.status\":true}', '2022-06-19 00:02:49', '2022-06-19 00:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(52, 1, '2022-06-19 00:02:49', '2022-06-19 00:02:49'),
(60, 2, '2022-06-22 19:53:11', '2022-06-22 19:53:11'),
(61, 4, '2022-06-22 19:53:45', '2022-06-22 19:53:45'),
(64, 3, '2022-06-22 20:41:53', '2022-06-22 20:41:53'),
(65, 4, '2022-06-22 23:20:11', '2022-06-22 23:20:11'),
(66, 1, '2022-06-22 23:21:27', '2022-06-22 23:21:27'),
(67, 4, '2022-06-22 23:21:30', '2022-06-22 23:21:30'),
(68, 3, '2022-06-23 00:13:58', '2022-06-23 00:13:58'),
(70, 4, '2022-06-23 03:27:23', '2022-06-23 03:27:23'),
(71, 2, '2022-06-23 19:40:48', '2022-06-23 19:40:48'),
(72, 2, '2022-06-23 19:42:19', '2022-06-23 19:42:19'),
(73, 3, '2022-06-23 19:43:03', '2022-06-23 19:43:03'),
(74, 3, '2022-06-23 19:44:09', '2022-06-23 19:44:09'),
(75, 2, '2022-06-23 19:59:06', '2022-06-23 19:59:06'),
(76, 2, '2022-06-23 20:13:46', '2022-06-23 20:13:46'),
(77, 4, '2022-06-23 21:15:11', '2022-06-23 21:15:11'),
(79, 4, '2022-06-23 21:17:07', '2022-06-23 21:17:07'),
(80, 4, '2022-06-23 21:17:35', '2022-06-23 21:17:35'),
(81, 3, '2022-06-23 21:49:27', '2022-06-23 21:49:27'),
(82, 4, '2022-06-24 02:51:58', '2022-06-24 02:51:58'),
(83, 2, '2022-06-24 02:52:55', '2022-06-24 02:52:55'),
(84, 4, '2022-06-24 05:34:25', '2022-06-24 05:34:25'),
(85, 2, '2022-06-24 05:38:33', '2022-06-24 05:38:33'),
(86, 2, '2022-06-29 20:33:46', '2022-06-29 20:33:46'),
(87, 2, '2022-07-02 23:44:51', '2022-07-02 23:44:51'),
(88, 2, '2022-07-02 23:48:54', '2022-07-02 23:48:54'),
(89, 2, '2022-07-02 23:50:58', '2022-07-02 23:50:58'),
(90, 4, '2022-07-06 01:40:05', '2022-07-06 01:40:05'),
(91, 2, '2022-07-06 01:40:33', '2022-07-06 01:40:33'),
(92, 2, '2022-07-06 21:47:22', '2022-07-06 21:47:22'),
(93, 4, '2022-07-07 00:51:24', '2022-07-07 00:51:24'),
(94, 4, '2022-07-12 21:05:13', '2022-07-12 21:05:13'),
(95, 2, '2022-07-12 21:05:45', '2022-07-12 21:05:45'),
(96, 4, '2022-07-14 02:47:24', '2022-07-14 02:47:24'),
(97, 4, '2022-07-14 02:47:49', '2022-07-14 02:47:49'),
(98, 4, '2022-07-15 22:02:47', '2022-07-15 22:02:47'),
(99, 4, '2022-07-23 06:10:35', '2022-07-23 06:10:35'),
(100, 4, '2022-07-23 06:24:39', '2022-07-23 06:24:39'),
(101, 4, '2022-07-26 00:05:31', '2022-07-26 00:05:31'),
(102, 4, '2022-07-26 00:05:47', '2022-07-26 00:05:47'),
(103, 4, '2022-07-26 00:34:08', '2022-07-26 00:34:08'),
(104, 4, '2022-07-29 02:40:54', '2022-07-29 02:40:54'),
(105, 4, '2022-07-30 01:28:55', '2022-07-30 01:28:55'),
(1000, 4, '2022-08-05 20:01:03', '2022-08-05 20:01:03'),
(1001, 2, '2022-08-05 20:05:48', '2022-08-05 20:05:48'),
(1002, 2, '2022-08-05 23:30:27', '2022-08-05 23:30:27'),
(1003, 4, '2022-08-06 21:24:15', '2022-08-06 21:24:15'),
(1005, 4, '2022-08-06 21:26:12', '2022-08-06 21:26:12'),
(1007, 4, '2022-08-06 21:27:18', '2022-08-06 21:27:18'),
(1009, 4, '2022-08-06 21:27:58', '2022-08-06 21:27:58'),
(1010, 2, '2022-08-07 00:17:23', '2022-08-07 00:17:23'),
(1011, 2, '2022-08-16 16:28:27', '2022-08-16 16:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `test_reports`
--

CREATE TABLE `test_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prescription_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2022-06-18 23:51:00', '2022-06-18 23:51:00'),
(2, NULL, 'ip', '187.19.203.39', '2022-06-18 23:51:00', '2022-06-18 23:51:00'),
(3, 51, 'user', NULL, '2022-06-18 23:51:00', '2022-06-18 23:51:00'),
(4, NULL, 'global', NULL, '2022-06-18 23:51:11', '2022-06-18 23:51:11'),
(5, NULL, 'ip', '187.19.203.39', '2022-06-18 23:51:11', '2022-06-18 23:51:11'),
(6, NULL, 'global', NULL, '2022-06-18 23:51:33', '2022-06-18 23:51:33'),
(7, NULL, 'ip', '223.189.0.72', '2022-06-18 23:51:33', '2022-06-18 23:51:33'),
(8, NULL, 'global', NULL, '2022-06-19 02:13:25', '2022-06-19 02:13:25'),
(9, NULL, 'ip', '175.107.207.123', '2022-06-19 02:13:25', '2022-06-19 02:13:25'),
(10, NULL, 'global', NULL, '2022-06-23 02:02:12', '2022-06-23 02:02:12'),
(11, NULL, 'ip', '187.19.195.114', '2022-06-23 02:02:12', '2022-06-23 02:02:12'),
(12, NULL, 'global', NULL, '2022-06-24 19:54:39', '2022-06-24 19:54:39'),
(13, NULL, 'ip', '223.184.216.230', '2022-06-24 19:54:39', '2022-06-24 19:54:39'),
(14, 82, 'user', NULL, '2022-06-24 19:54:39', '2022-06-24 19:54:39'),
(15, NULL, 'global', NULL, '2022-07-06 03:14:02', '2022-07-06 03:14:02'),
(16, NULL, 'ip', '61.246.6.198', '2022-07-06 03:14:02', '2022-07-06 03:14:02'),
(17, 82, 'user', NULL, '2022-07-06 03:14:02', '2022-07-06 03:14:02'),
(18, NULL, 'global', NULL, '2022-07-06 03:14:48', '2022-07-06 03:14:48'),
(19, NULL, 'ip', '61.246.6.198', '2022-07-06 03:14:48', '2022-07-06 03:14:48'),
(20, 82, 'user', NULL, '2022-07-06 03:14:48', '2022-07-06 03:14:48'),
(21, NULL, 'global', NULL, '2022-07-06 03:14:53', '2022-07-06 03:14:53'),
(22, NULL, 'ip', '187.19.203.34', '2022-07-06 03:14:53', '2022-07-06 03:14:53'),
(23, 90, 'user', NULL, '2022-07-06 03:14:53', '2022-07-06 03:14:53'),
(24, NULL, 'global', NULL, '2022-07-06 03:15:13', '2022-07-06 03:15:13'),
(25, NULL, 'ip', '61.246.6.198', '2022-07-06 03:15:13', '2022-07-06 03:15:13'),
(26, 82, 'user', NULL, '2022-07-06 03:15:13', '2022-07-06 03:15:13'),
(27, NULL, 'global', NULL, '2022-07-06 03:18:17', '2022-07-06 03:18:17'),
(28, NULL, 'ip', '61.246.6.198', '2022-07-06 03:18:17', '2022-07-06 03:18:17'),
(29, NULL, 'global', NULL, '2022-07-06 03:19:52', '2022-07-06 03:19:52'),
(30, NULL, 'ip', '61.246.6.198', '2022-07-06 03:19:52', '2022-07-06 03:19:52'),
(31, 82, 'user', NULL, '2022-07-06 03:19:52', '2022-07-06 03:19:52'),
(32, NULL, 'global', NULL, '2022-07-08 00:08:23', '2022-07-08 00:08:23'),
(33, NULL, 'ip', '61.246.6.198', '2022-07-08 00:08:23', '2022-07-08 00:08:23'),
(34, 52, 'user', NULL, '2022-07-08 00:08:23', '2022-07-08 00:08:23'),
(35, NULL, 'global', NULL, '2022-07-12 23:46:20', '2022-07-12 23:46:20'),
(36, NULL, 'ip', '61.246.6.198', '2022-07-12 23:46:20', '2022-07-12 23:46:20'),
(37, NULL, 'global', NULL, '2022-07-13 22:17:49', '2022-07-13 22:17:49'),
(38, NULL, 'ip', '223.184.206.122', '2022-07-13 22:17:49', '2022-07-13 22:17:49'),
(39, 82, 'user', NULL, '2022-07-13 22:17:49', '2022-07-13 22:17:49'),
(40, NULL, 'global', NULL, '2022-07-14 00:32:36', '2022-07-14 00:32:36'),
(41, NULL, 'ip', '49.156.115.174', '2022-07-14 00:32:36', '2022-07-14 00:32:36'),
(42, NULL, 'global', NULL, '2022-07-14 00:32:43', '2022-07-14 00:32:43'),
(43, NULL, 'ip', '49.156.115.174', '2022-07-14 00:32:43', '2022-07-14 00:32:43'),
(44, NULL, 'global', NULL, '2022-07-14 00:36:35', '2022-07-14 00:36:35'),
(45, NULL, 'ip', '49.156.115.174', '2022-07-14 00:36:35', '2022-07-14 00:36:35'),
(46, NULL, 'global', NULL, '2022-07-14 00:38:21', '2022-07-14 00:38:21'),
(47, NULL, 'ip', '49.156.115.174', '2022-07-14 00:38:21', '2022-07-14 00:38:21'),
(48, NULL, 'global', NULL, '2022-07-16 21:18:36', '2022-07-16 21:18:36'),
(49, NULL, 'ip', '167.249.79.128', '2022-07-16 21:18:36', '2022-07-16 21:18:36'),
(50, 52, 'user', NULL, '2022-07-16 21:18:36', '2022-07-16 21:18:36'),
(51, NULL, 'global', NULL, '2022-07-16 23:15:07', '2022-07-16 23:15:07'),
(52, NULL, 'ip', '171.51.222.67', '2022-07-16 23:15:07', '2022-07-16 23:15:07'),
(53, NULL, 'global', NULL, '2022-07-16 23:15:11', '2022-07-16 23:15:11'),
(54, NULL, 'ip', '171.51.222.67', '2022-07-16 23:15:11', '2022-07-16 23:15:11'),
(55, NULL, 'global', NULL, '2022-07-16 23:15:18', '2022-07-16 23:15:18'),
(56, NULL, 'ip', '171.51.222.67', '2022-07-16 23:15:18', '2022-07-16 23:15:18'),
(57, NULL, 'global', NULL, '2022-07-16 23:15:31', '2022-07-16 23:15:31'),
(58, NULL, 'ip', '171.51.222.67', '2022-07-16 23:15:31', '2022-07-16 23:15:31'),
(59, NULL, 'global', NULL, '2022-07-17 00:30:26', '2022-07-17 00:30:26'),
(60, NULL, 'ip', '187.19.203.40', '2022-07-17 00:30:26', '2022-07-17 00:30:26'),
(61, 74, 'user', NULL, '2022-07-17 00:30:26', '2022-07-17 00:30:26'),
(62, NULL, 'global', NULL, '2022-07-17 00:31:07', '2022-07-17 00:31:07'),
(63, NULL, 'ip', '187.19.203.40', '2022-07-17 00:31:07', '2022-07-17 00:31:07'),
(64, NULL, 'global', NULL, '2022-07-17 00:32:26', '2022-07-17 00:32:26'),
(65, NULL, 'ip', '187.19.203.40', '2022-07-17 00:32:26', '2022-07-17 00:32:26'),
(66, NULL, 'global', NULL, '2022-07-17 19:19:34', '2022-07-17 19:19:34'),
(67, NULL, 'ip', '2804:29b8:5049:2d2:94bc:7345:824e:ee07', '2022-07-17 19:19:34', '2022-07-17 19:19:34'),
(68, NULL, 'global', NULL, '2022-07-17 19:20:04', '2022-07-17 19:20:04'),
(69, NULL, 'ip', '2804:29b8:5049:2d2:94bc:7345:824e:ee07', '2022-07-17 19:20:04', '2022-07-17 19:20:04'),
(70, NULL, 'global', NULL, '2022-07-17 19:20:41', '2022-07-17 19:20:41'),
(71, NULL, 'ip', '2804:29b8:5049:2d2:94bc:7345:824e:ee07', '2022-07-17 19:20:41', '2022-07-17 19:20:41'),
(72, NULL, 'global', NULL, '2022-07-17 19:21:46', '2022-07-17 19:21:46'),
(73, NULL, 'ip', '2804:29b8:5049:2d2:94bc:7345:824e:ee07', '2022-07-17 19:21:46', '2022-07-17 19:21:46'),
(74, NULL, 'global', NULL, '2022-07-17 19:23:34', '2022-07-17 19:23:34'),
(75, NULL, 'ip', '2804:29b8:5049:2d2:94bc:7345:824e:ee07', '2022-07-17 19:23:34', '2022-07-17 19:23:34'),
(76, NULL, 'global', NULL, '2022-07-18 15:26:53', '2022-07-18 15:26:53'),
(77, NULL, 'ip', '167.249.79.128', '2022-07-18 15:26:53', '2022-07-18 15:26:53'),
(78, NULL, 'global', NULL, '2022-07-18 15:27:15', '2022-07-18 15:27:15'),
(79, NULL, 'ip', '167.249.79.128', '2022-07-18 15:27:15', '2022-07-18 15:27:15'),
(80, NULL, 'global', NULL, '2022-07-18 15:28:44', '2022-07-18 15:28:44'),
(81, NULL, 'ip', '167.249.79.128', '2022-07-18 15:28:44', '2022-07-18 15:28:44'),
(82, NULL, 'global', NULL, '2022-07-18 15:29:52', '2022-07-18 15:29:52'),
(83, NULL, 'ip', '167.249.79.128', '2022-07-18 15:29:52', '2022-07-18 15:29:52'),
(84, NULL, 'global', NULL, '2022-07-18 18:31:28', '2022-07-18 18:31:28'),
(85, NULL, 'ip', '2804:29b8:5049:2d2:283a:202d:9f33:5850', '2022-07-18 18:31:28', '2022-07-18 18:31:28'),
(86, NULL, 'global', NULL, '2022-07-20 23:25:24', '2022-07-20 23:25:24'),
(87, NULL, 'ip', '2804:29b8:5049:2d2:79c3:50eb:68a3:7a70', '2022-07-20 23:25:24', '2022-07-20 23:25:24'),
(88, NULL, 'global', NULL, '2022-07-20 23:26:36', '2022-07-20 23:26:36'),
(89, NULL, 'ip', '2804:29b8:5049:2d2:79c3:50eb:68a3:7a70', '2022-07-20 23:26:36', '2022-07-20 23:26:36'),
(90, NULL, 'global', NULL, '2022-07-21 16:39:52', '2022-07-21 16:39:52'),
(91, NULL, 'ip', '191.253.87.98', '2022-07-21 16:39:52', '2022-07-21 16:39:52'),
(92, NULL, 'global', NULL, '2022-07-21 19:28:48', '2022-07-21 19:28:48'),
(93, NULL, 'ip', '27.63.12.157', '2022-07-21 19:28:48', '2022-07-21 19:28:48'),
(94, NULL, 'global', NULL, '2022-07-21 23:52:15', '2022-07-21 23:52:15'),
(95, NULL, 'ip', '39.40.49.127', '2022-07-21 23:52:15', '2022-07-21 23:52:15'),
(96, NULL, 'global', NULL, '2022-07-21 23:52:22', '2022-07-21 23:52:22'),
(97, NULL, 'ip', '39.40.49.127', '2022-07-21 23:52:22', '2022-07-21 23:52:22'),
(98, NULL, 'global', NULL, '2022-07-21 23:53:02', '2022-07-21 23:53:02'),
(99, NULL, 'ip', '39.40.49.127', '2022-07-21 23:53:02', '2022-07-21 23:53:02'),
(100, NULL, 'global', NULL, '2022-07-22 03:28:38', '2022-07-22 03:28:38'),
(101, NULL, 'ip', '61.246.6.198', '2022-07-22 03:28:38', '2022-07-22 03:28:38'),
(102, NULL, 'global', NULL, '2022-07-22 03:28:42', '2022-07-22 03:28:42'),
(103, NULL, 'ip', '61.246.6.198', '2022-07-22 03:28:42', '2022-07-22 03:28:42'),
(104, NULL, 'global', NULL, '2022-07-22 03:29:06', '2022-07-22 03:29:06'),
(105, NULL, 'ip', '61.246.6.198', '2022-07-22 03:29:06', '2022-07-22 03:29:06'),
(106, NULL, 'global', NULL, '2022-07-22 04:39:21', '2022-07-22 04:39:21'),
(107, NULL, 'ip', '187.19.203.35', '2022-07-22 04:39:21', '2022-07-22 04:39:21'),
(108, 74, 'user', NULL, '2022-07-22 04:39:21', '2022-07-22 04:39:21'),
(109, NULL, 'global', NULL, '2022-07-22 04:40:30', '2022-07-22 04:40:30'),
(110, NULL, 'ip', '187.19.203.35', '2022-07-22 04:40:30', '2022-07-22 04:40:30'),
(111, 74, 'user', NULL, '2022-07-22 04:40:30', '2022-07-22 04:40:30'),
(112, NULL, 'global', NULL, '2022-07-22 04:42:49', '2022-07-22 04:42:49'),
(113, NULL, 'ip', '187.19.203.35', '2022-07-22 04:42:49', '2022-07-22 04:42:49'),
(114, 84, 'user', NULL, '2022-07-22 04:42:49', '2022-07-22 04:42:49'),
(115, NULL, 'global', NULL, '2022-07-23 17:31:53', '2022-07-23 17:31:53'),
(116, NULL, 'ip', '223.182.160.64', '2022-07-23 17:31:53', '2022-07-23 17:31:53'),
(117, NULL, 'global', NULL, '2022-07-23 20:24:58', '2022-07-23 20:24:58'),
(118, NULL, 'ip', '187.19.203.40', '2022-07-23 20:24:58', '2022-07-23 20:24:58'),
(119, 99, 'user', NULL, '2022-07-23 20:24:58', '2022-07-23 20:24:58'),
(120, NULL, 'global', NULL, '2022-07-23 20:25:06', '2022-07-23 20:25:06'),
(121, NULL, 'ip', '187.19.203.40', '2022-07-23 20:25:06', '2022-07-23 20:25:06'),
(122, 99, 'user', NULL, '2022-07-23 20:25:06', '2022-07-23 20:25:06'),
(123, NULL, 'global', NULL, '2022-07-25 05:29:45', '2022-07-25 05:29:45'),
(124, NULL, 'ip', '2804:214:85c6:86b0:bc8b:f85d:73ef:1908', '2022-07-25 05:29:45', '2022-07-25 05:29:45'),
(125, NULL, 'global', NULL, '2022-07-25 22:52:21', '2022-07-25 22:52:21'),
(126, NULL, 'ip', '61.246.6.198', '2022-07-25 22:52:21', '2022-07-25 22:52:21'),
(127, NULL, 'global', NULL, '2022-07-25 22:52:39', '2022-07-25 22:52:39'),
(128, NULL, 'ip', '61.246.6.198', '2022-07-25 22:52:39', '2022-07-25 22:52:39'),
(129, NULL, 'global', NULL, '2022-07-25 22:53:01', '2022-07-25 22:53:01'),
(130, NULL, 'ip', '61.246.6.198', '2022-07-25 22:53:01', '2022-07-25 22:53:01'),
(131, NULL, 'global', NULL, '2022-07-25 23:20:42', '2022-07-25 23:20:42'),
(132, NULL, 'ip', '61.246.6.198', '2022-07-25 23:20:42', '2022-07-25 23:20:42'),
(133, NULL, 'global', NULL, '2022-07-25 23:41:15', '2022-07-25 23:41:15'),
(134, NULL, 'ip', '61.246.6.198', '2022-07-25 23:41:15', '2022-07-25 23:41:15'),
(135, 99, 'user', NULL, '2022-07-25 23:41:15', '2022-07-25 23:41:15'),
(136, NULL, 'global', NULL, '2022-07-25 23:42:21', '2022-07-25 23:42:21'),
(137, NULL, 'ip', '61.246.6.198', '2022-07-25 23:42:21', '2022-07-25 23:42:21'),
(138, 98, 'user', NULL, '2022-07-25 23:42:21', '2022-07-25 23:42:21'),
(139, NULL, 'global', NULL, '2022-07-26 00:27:10', '2022-07-26 00:27:10'),
(140, NULL, 'ip', '61.246.6.198', '2022-07-26 00:27:10', '2022-07-26 00:27:10'),
(141, 52, 'user', NULL, '2022-07-26 00:27:10', '2022-07-26 00:27:10'),
(142, NULL, 'global', NULL, '2022-07-26 00:27:30', '2022-07-26 00:27:30'),
(143, NULL, 'ip', '61.246.6.198', '2022-07-26 00:27:30', '2022-07-26 00:27:30'),
(144, 52, 'user', NULL, '2022-07-26 00:27:30', '2022-07-26 00:27:30'),
(145, NULL, 'global', NULL, '2022-07-26 00:47:55', '2022-07-26 00:47:55'),
(146, NULL, 'ip', '39.40.22.38', '2022-07-26 00:47:55', '2022-07-26 00:47:55'),
(147, NULL, 'global', NULL, '2022-07-26 00:49:12', '2022-07-26 00:49:12'),
(148, NULL, 'ip', '61.246.6.198', '2022-07-26 00:49:12', '2022-07-26 00:49:12'),
(149, 52, 'user', NULL, '2022-07-26 00:49:12', '2022-07-26 00:49:12'),
(150, NULL, 'global', NULL, '2022-07-27 04:27:31', '2022-07-27 04:27:31'),
(151, NULL, 'ip', '61.246.6.198', '2022-07-27 04:27:31', '2022-07-27 04:27:31'),
(152, NULL, 'global', NULL, '2022-07-27 04:30:43', '2022-07-27 04:30:43'),
(153, NULL, 'ip', '61.246.6.198', '2022-07-27 04:30:43', '2022-07-27 04:30:43'),
(154, NULL, 'global', NULL, '2022-07-27 04:30:47', '2022-07-27 04:30:47'),
(155, NULL, 'ip', '61.246.6.198', '2022-07-27 04:30:47', '2022-07-27 04:30:47'),
(156, NULL, 'global', NULL, '2022-07-27 04:31:54', '2022-07-27 04:31:54'),
(157, NULL, 'ip', '61.246.6.198', '2022-07-27 04:31:54', '2022-07-27 04:31:54'),
(158, NULL, 'global', NULL, '2022-07-27 04:31:57', '2022-07-27 04:31:57'),
(159, NULL, 'ip', '61.246.6.198', '2022-07-27 04:31:57', '2022-07-27 04:31:57'),
(160, NULL, 'global', NULL, '2022-07-27 05:00:41', '2022-07-27 05:00:41'),
(161, NULL, 'ip', '61.246.6.198', '2022-07-27 05:00:41', '2022-07-27 05:00:41'),
(162, NULL, 'global', NULL, '2022-07-27 05:29:08', '2022-07-27 05:29:08'),
(163, NULL, 'ip', '61.246.6.198', '2022-07-27 05:29:08', '2022-07-27 05:29:08'),
(164, 52, 'user', NULL, '2022-07-27 05:29:08', '2022-07-27 05:29:08'),
(165, NULL, 'global', NULL, '2022-07-27 21:01:28', '2022-07-27 21:01:28'),
(166, NULL, 'ip', '39.40.60.161', '2022-07-27 21:01:28', '2022-07-27 21:01:28'),
(167, NULL, 'global', NULL, '2022-07-27 22:59:09', '2022-07-27 22:59:09'),
(168, NULL, 'ip', '61.246.6.198', '2022-07-27 22:59:09', '2022-07-27 22:59:09'),
(169, NULL, 'global', NULL, '2022-07-27 23:56:39', '2022-07-27 23:56:39'),
(170, NULL, 'ip', '61.246.6.198', '2022-07-27 23:56:39', '2022-07-27 23:56:39'),
(171, 103, 'user', NULL, '2022-07-27 23:56:39', '2022-07-27 23:56:39'),
(172, NULL, 'global', NULL, '2022-07-28 00:40:23', '2022-07-28 00:40:23'),
(173, NULL, 'ip', '61.246.6.198', '2022-07-28 00:40:23', '2022-07-28 00:40:23'),
(174, NULL, 'global', NULL, '2022-07-28 00:42:04', '2022-07-28 00:42:04'),
(175, NULL, 'ip', '61.246.6.198', '2022-07-28 00:42:04', '2022-07-28 00:42:04'),
(176, NULL, 'global', NULL, '2022-07-28 00:42:04', '2022-07-28 00:42:04'),
(177, NULL, 'ip', '61.246.6.198', '2022-07-28 00:42:04', '2022-07-28 00:42:04'),
(178, NULL, 'global', NULL, '2022-07-28 00:42:22', '2022-07-28 00:42:22'),
(179, NULL, 'ip', '203.135.45.201', '2022-07-28 00:42:22', '2022-07-28 00:42:22'),
(180, NULL, 'global', NULL, '2022-07-28 00:44:01', '2022-07-28 00:44:01'),
(181, NULL, 'ip', '61.246.6.198', '2022-07-28 00:44:01', '2022-07-28 00:44:01'),
(182, NULL, 'global', NULL, '2022-07-28 00:45:15', '2022-07-28 00:45:15'),
(183, NULL, 'ip', '61.246.6.198', '2022-07-28 00:45:15', '2022-07-28 00:45:15'),
(184, NULL, 'global', NULL, '2022-07-28 00:46:51', '2022-07-28 00:46:51'),
(185, NULL, 'ip', '187.19.203.35', '2022-07-28 00:46:51', '2022-07-28 00:46:51'),
(186, NULL, 'global', NULL, '2022-07-28 00:47:08', '2022-07-28 00:47:08'),
(187, NULL, 'ip', '187.19.203.35', '2022-07-28 00:47:08', '2022-07-28 00:47:08'),
(188, NULL, 'global', NULL, '2022-07-28 00:47:19', '2022-07-28 00:47:19'),
(189, NULL, 'ip', '187.19.203.35', '2022-07-28 00:47:19', '2022-07-28 00:47:19'),
(190, NULL, 'global', NULL, '2022-07-28 00:49:57', '2022-07-28 00:49:57'),
(191, NULL, 'ip', '187.19.203.35', '2022-07-28 00:49:57', '2022-07-28 00:49:57'),
(192, NULL, 'global', NULL, '2022-07-28 00:59:09', '2022-07-28 00:59:09'),
(193, NULL, 'ip', '187.19.203.35', '2022-07-28 00:59:09', '2022-07-28 00:59:09'),
(194, NULL, 'global', NULL, '2022-07-28 00:59:43', '2022-07-28 00:59:43'),
(195, NULL, 'ip', '203.135.45.201', '2022-07-28 00:59:43', '2022-07-28 00:59:43'),
(196, NULL, 'global', NULL, '2022-07-28 01:43:57', '2022-07-28 01:43:57'),
(197, NULL, 'ip', '203.135.45.201', '2022-07-28 01:43:57', '2022-07-28 01:43:57'),
(198, NULL, 'global', NULL, '2022-07-28 01:49:16', '2022-07-28 01:49:16'),
(199, NULL, 'ip', '61.246.6.198', '2022-07-28 01:49:16', '2022-07-28 01:49:16'),
(200, NULL, 'global', NULL, '2022-07-28 01:51:43', '2022-07-28 01:51:43'),
(201, NULL, 'ip', '187.19.203.35', '2022-07-28 01:51:43', '2022-07-28 01:51:43'),
(202, NULL, 'global', NULL, '2022-08-02 17:53:55', '2022-08-02 17:53:55'),
(203, NULL, 'ip', '167.249.79.128', '2022-08-02 17:53:55', '2022-08-02 17:53:55'),
(204, NULL, 'global', NULL, '2022-08-02 17:54:24', '2022-08-02 17:54:24'),
(205, NULL, 'ip', '167.249.79.128', '2022-08-02 17:54:24', '2022-08-02 17:54:24'),
(206, NULL, 'global', NULL, '2022-08-02 17:55:15', '2022-08-02 17:55:15'),
(207, NULL, 'ip', '167.249.79.128', '2022-08-02 17:55:15', '2022-08-02 17:55:15'),
(208, NULL, 'global', NULL, '2022-08-02 23:33:50', '2022-08-02 23:33:50'),
(209, NULL, 'ip', '39.48.190.2', '2022-08-02 23:33:50', '2022-08-02 23:33:50'),
(210, NULL, 'global', NULL, '2022-08-03 04:16:24', '2022-08-03 04:16:24'),
(211, NULL, 'ip', '187.19.203.34', '2022-08-03 04:16:24', '2022-08-03 04:16:24'),
(212, NULL, 'global', NULL, '2022-08-03 15:12:06', '2022-08-03 15:12:06'),
(213, NULL, 'ip', '124.253.20.16', '2022-08-03 15:12:06', '2022-08-03 15:12:06'),
(214, NULL, 'global', NULL, '2022-08-03 15:12:20', '2022-08-03 15:12:20'),
(215, NULL, 'ip', '124.253.20.16', '2022-08-03 15:12:20', '2022-08-03 15:12:20'),
(216, NULL, 'global', NULL, '2022-08-03 15:15:08', '2022-08-03 15:15:08'),
(217, NULL, 'ip', '39.48.241.9', '2022-08-03 15:15:08', '2022-08-03 15:15:08'),
(218, NULL, 'global', NULL, '2022-08-03 15:16:18', '2022-08-03 15:16:18'),
(219, NULL, 'ip', '124.253.20.16', '2022-08-03 15:16:18', '2022-08-03 15:16:18'),
(220, NULL, 'global', NULL, '2022-08-03 15:16:44', '2022-08-03 15:16:44'),
(221, NULL, 'ip', '124.253.20.16', '2022-08-03 15:16:44', '2022-08-03 15:16:44'),
(222, NULL, 'global', NULL, '2022-08-03 15:17:51', '2022-08-03 15:17:51'),
(223, NULL, 'ip', '124.253.20.16', '2022-08-03 15:17:51', '2022-08-03 15:17:51'),
(224, NULL, 'global', NULL, '2022-08-03 15:18:25', '2022-08-03 15:18:25'),
(225, NULL, 'ip', '39.48.241.9', '2022-08-03 15:18:25', '2022-08-03 15:18:25'),
(226, NULL, 'global', NULL, '2022-08-03 15:18:49', '2022-08-03 15:18:49'),
(227, NULL, 'ip', '39.48.241.9', '2022-08-03 15:18:49', '2022-08-03 15:18:49'),
(228, NULL, 'global', NULL, '2022-08-03 15:28:54', '2022-08-03 15:28:54'),
(229, NULL, 'ip', '124.253.20.16', '2022-08-03 15:28:54', '2022-08-03 15:28:54'),
(230, NULL, 'global', NULL, '2022-08-03 15:29:48', '2022-08-03 15:29:48'),
(231, NULL, 'ip', '124.253.20.16', '2022-08-03 15:29:48', '2022-08-03 15:29:48'),
(232, NULL, 'global', NULL, '2022-08-03 15:32:07', '2022-08-03 15:32:07'),
(233, NULL, 'ip', '124.253.20.16', '2022-08-03 15:32:07', '2022-08-03 15:32:07'),
(234, NULL, 'global', NULL, '2022-08-03 15:59:29', '2022-08-03 15:59:29'),
(235, NULL, 'ip', '124.253.20.16', '2022-08-03 15:59:29', '2022-08-03 15:59:29'),
(236, NULL, 'global', NULL, '2022-08-03 19:25:46', '2022-08-03 19:25:46'),
(237, NULL, 'ip', '124.253.20.16', '2022-08-03 19:25:46', '2022-08-03 19:25:46'),
(238, NULL, 'global', NULL, '2022-08-03 19:44:16', '2022-08-03 19:44:16'),
(239, NULL, 'ip', '124.253.20.16', '2022-08-03 19:44:16', '2022-08-03 19:44:16'),
(240, NULL, 'global', NULL, '2022-08-03 19:44:45', '2022-08-03 19:44:45'),
(241, NULL, 'ip', '124.253.20.16', '2022-08-03 19:44:45', '2022-08-03 19:44:45'),
(242, NULL, 'global', NULL, '2022-08-04 04:27:09', '2022-08-04 04:27:09'),
(243, NULL, 'ip', '187.19.203.38', '2022-08-04 04:27:09', '2022-08-04 04:27:09'),
(244, NULL, 'global', NULL, '2022-08-04 05:45:55', '2022-08-04 05:45:55'),
(245, NULL, 'ip', '187.19.203.38', '2022-08-04 05:45:55', '2022-08-04 05:45:55'),
(246, NULL, 'global', NULL, '2022-08-04 20:34:22', '2022-08-04 20:34:22'),
(247, NULL, 'ip', '171.51.196.90', '2022-08-04 20:34:22', '2022-08-04 20:34:22'),
(248, NULL, 'global', NULL, '2022-08-04 20:35:03', '2022-08-04 20:35:03'),
(249, NULL, 'ip', '171.51.196.90', '2022-08-04 20:35:03', '2022-08-04 20:35:03'),
(250, NULL, 'global', NULL, '2022-08-04 20:36:32', '2022-08-04 20:36:32'),
(251, NULL, 'ip', '171.51.196.90', '2022-08-04 20:36:32', '2022-08-04 20:36:32'),
(252, 74, 'user', NULL, '2022-08-04 20:36:32', '2022-08-04 20:36:32'),
(253, NULL, 'global', NULL, '2022-08-04 21:21:25', '2022-08-04 21:21:25'),
(254, NULL, 'ip', '187.19.203.38', '2022-08-04 21:21:25', '2022-08-04 21:21:25'),
(255, 74, 'user', NULL, '2022-08-04 21:21:25', '2022-08-04 21:21:25'),
(256, NULL, 'global', NULL, '2022-08-04 21:21:31', '2022-08-04 21:21:31'),
(257, NULL, 'ip', '187.19.203.38', '2022-08-04 21:21:31', '2022-08-04 21:21:31'),
(258, NULL, 'global', NULL, '2022-08-04 22:19:22', '2022-08-04 22:19:22'),
(259, NULL, 'ip', '187.19.203.38', '2022-08-04 22:19:22', '2022-08-04 22:19:22'),
(260, 74, 'user', NULL, '2022-08-04 22:19:22', '2022-08-04 22:19:22'),
(261, NULL, 'global', NULL, '2022-08-04 22:19:56', '2022-08-04 22:19:56'),
(262, NULL, 'ip', '187.19.203.38', '2022-08-04 22:19:56', '2022-08-04 22:19:56'),
(263, 74, 'user', NULL, '2022-08-04 22:19:56', '2022-08-04 22:19:56'),
(264, NULL, 'global', NULL, '2022-08-04 22:20:52', '2022-08-04 22:20:52'),
(265, NULL, 'ip', '187.19.203.38', '2022-08-04 22:20:52', '2022-08-04 22:20:52'),
(266, 74, 'user', NULL, '2022-08-04 22:20:52', '2022-08-04 22:20:52'),
(267, NULL, 'global', NULL, '2022-08-04 22:21:25', '2022-08-04 22:21:25'),
(268, NULL, 'ip', '187.19.203.38', '2022-08-04 22:21:25', '2022-08-04 22:21:25'),
(269, 74, 'user', NULL, '2022-08-04 22:21:25', '2022-08-04 22:21:25'),
(270, NULL, 'global', NULL, '2022-08-04 22:49:13', '2022-08-04 22:49:13'),
(271, NULL, 'ip', '171.51.196.90', '2022-08-04 22:49:13', '2022-08-04 22:49:13'),
(272, NULL, 'global', NULL, '2022-08-04 22:49:19', '2022-08-04 22:49:19'),
(273, NULL, 'ip', '171.51.196.90', '2022-08-04 22:49:19', '2022-08-04 22:49:19'),
(274, 74, 'user', NULL, '2022-08-04 22:49:19', '2022-08-04 22:49:19'),
(275, NULL, 'global', NULL, '2022-08-04 22:49:24', '2022-08-04 22:49:24'),
(281, NULL, 'global', NULL, '2022-08-04 23:36:03', '2022-08-04 23:36:03'),
(282, NULL, 'ip', '187.19.203.38', '2022-08-04 23:36:03', '2022-08-04 23:36:03'),
(283, 52, 'user', NULL, '2022-08-04 23:36:03', '2022-08-04 23:36:03'),
(284, NULL, 'global', NULL, '2022-08-04 23:36:08', '2022-08-04 23:36:08'),
(285, NULL, 'ip', '187.19.203.38', '2022-08-04 23:36:08', '2022-08-04 23:36:08'),
(286, NULL, 'global', NULL, '2022-08-04 23:36:12', '2022-08-04 23:36:12'),
(287, NULL, 'ip', '187.19.203.38', '2022-08-04 23:36:12', '2022-08-04 23:36:12'),
(288, NULL, 'global', NULL, '2022-08-04 23:36:19', '2022-08-04 23:36:19'),
(289, NULL, 'ip', '187.19.203.38', '2022-08-04 23:36:19', '2022-08-04 23:36:19'),
(290, 52, 'user', NULL, '2022-08-04 23:36:19', '2022-08-04 23:36:19'),
(291, NULL, 'global', NULL, '2022-08-04 23:36:23', '2022-08-04 23:36:23'),
(292, NULL, 'ip', '187.19.203.38', '2022-08-04 23:36:23', '2022-08-04 23:36:23'),
(293, NULL, 'global', NULL, '2022-08-04 23:51:19', '2022-08-04 23:51:19'),
(294, NULL, 'ip', '187.19.203.38', '2022-08-04 23:51:19', '2022-08-04 23:51:19'),
(295, 52, 'user', NULL, '2022-08-04 23:51:19', '2022-08-04 23:51:19'),
(296, NULL, 'global', NULL, '2022-08-04 23:51:32', '2022-08-04 23:51:32'),
(297, NULL, 'ip', '187.19.203.38', '2022-08-04 23:51:32', '2022-08-04 23:51:32'),
(298, 52, 'user', NULL, '2022-08-04 23:51:32', '2022-08-04 23:51:32'),
(299, NULL, 'global', NULL, '2022-08-04 23:51:36', '2022-08-04 23:51:36'),
(300, NULL, 'ip', '187.19.203.38', '2022-08-04 23:51:36', '2022-08-04 23:51:36'),
(301, NULL, 'global', NULL, '2022-08-04 23:59:45', '2022-08-04 23:59:45'),
(302, NULL, 'ip', '187.19.203.38', '2022-08-04 23:59:45', '2022-08-04 23:59:45'),
(303, 52, 'user', NULL, '2022-08-04 23:59:45', '2022-08-04 23:59:45'),
(304, NULL, 'global', NULL, '2022-08-04 23:59:50', '2022-08-04 23:59:50'),
(305, NULL, 'ip', '187.19.203.38', '2022-08-04 23:59:50', '2022-08-04 23:59:50'),
(306, 52, 'user', NULL, '2022-08-04 23:59:50', '2022-08-04 23:59:50'),
(307, NULL, 'global', NULL, '2022-08-05 00:06:35', '2022-08-05 00:06:35'),
(308, NULL, 'ip', '187.19.203.38', '2022-08-05 00:06:35', '2022-08-05 00:06:35'),
(309, 52, 'user', NULL, '2022-08-05 00:06:35', '2022-08-05 00:06:35'),
(310, NULL, 'global', NULL, '2022-08-05 00:07:08', '2022-08-05 00:07:08'),
(311, NULL, 'ip', '187.19.203.38', '2022-08-05 00:07:08', '2022-08-05 00:07:08'),
(312, 74, 'user', NULL, '2022-08-05 00:07:08', '2022-08-05 00:07:08'),
(313, NULL, 'global', NULL, '2022-08-05 00:09:35', '2022-08-05 00:09:35'),
(314, NULL, 'ip', '187.19.203.38', '2022-08-05 00:09:35', '2022-08-05 00:09:35'),
(315, 74, 'user', NULL, '2022-08-05 00:09:35', '2022-08-05 00:09:35'),
(316, NULL, 'global', NULL, '2022-08-05 19:45:27', '2022-08-05 19:45:27'),
(317, NULL, 'ip', '39.40.182.146', '2022-08-05 19:45:27', '2022-08-05 19:45:27'),
(318, NULL, 'global', NULL, '2022-08-05 19:46:34', '2022-08-05 19:46:34'),
(319, NULL, 'ip', '39.40.182.146', '2022-08-05 19:46:34', '2022-08-05 19:46:34'),
(320, NULL, 'global', NULL, '2022-08-05 19:56:43', '2022-08-05 19:56:43'),
(321, NULL, 'ip', '39.40.182.146', '2022-08-05 19:56:43', '2022-08-05 19:56:43'),
(322, NULL, 'global', NULL, '2022-08-05 19:57:04', '2022-08-05 19:57:04'),
(323, NULL, 'ip', '39.40.182.146', '2022-08-05 19:57:04', '2022-08-05 19:57:04'),
(324, NULL, 'global', NULL, '2022-08-05 20:05:31', '2022-08-05 20:05:31'),
(325, NULL, 'ip', '106.194.246.124', '2022-08-05 20:05:31', '2022-08-05 20:05:31'),
(326, NULL, 'global', NULL, '2022-08-05 20:06:01', '2022-08-05 20:06:01'),
(327, NULL, 'ip', '106.194.246.124', '2022-08-05 20:06:01', '2022-08-05 20:06:01'),
(328, 52, 'user', NULL, '2022-08-05 20:06:01', '2022-08-05 20:06:01'),
(329, NULL, 'global', NULL, '2022-08-05 20:06:08', '2022-08-05 20:06:08'),
(330, NULL, 'ip', '106.194.246.124', '2022-08-05 20:06:08', '2022-08-05 20:06:08'),
(331, 52, 'user', NULL, '2022-08-05 20:06:08', '2022-08-05 20:06:08'),
(332, NULL, 'global', NULL, '2022-08-05 20:06:55', '2022-08-05 20:06:55'),
(333, NULL, 'ip', '106.194.246.124', '2022-08-05 20:06:55', '2022-08-05 20:06:55'),
(334, 66, 'user', NULL, '2022-08-05 20:06:55', '2022-08-05 20:06:55'),
(335, NULL, 'global', NULL, '2022-08-05 20:59:06', '2022-08-05 20:59:06'),
(336, NULL, 'ip', '167.249.79.128', '2022-08-05 20:59:06', '2022-08-05 20:59:06'),
(337, 52, 'user', NULL, '2022-08-05 20:59:06', '2022-08-05 20:59:06'),
(338, NULL, 'global', NULL, '2022-08-05 20:59:23', '2022-08-05 20:59:23'),
(339, NULL, 'ip', '167.249.79.128', '2022-08-05 20:59:23', '2022-08-05 20:59:23'),
(340, 52, 'user', NULL, '2022-08-05 20:59:23', '2022-08-05 20:59:23'),
(341, NULL, 'global', NULL, '2022-08-06 01:03:00', '2022-08-06 01:03:00'),
(342, NULL, 'ip', '61.246.6.198', '2022-08-06 01:03:00', '2022-08-06 01:03:00'),
(343, 52, 'user', NULL, '2022-08-06 01:03:00', '2022-08-06 01:03:00'),
(344, NULL, 'global', NULL, '2022-08-06 20:00:02', '2022-08-06 20:00:02'),
(345, NULL, 'ip', '167.249.79.128', '2022-08-06 20:00:02', '2022-08-06 20:00:02'),
(346, 52, 'user', NULL, '2022-08-06 20:00:02', '2022-08-06 20:00:02'),
(347, NULL, 'global', NULL, '2022-08-06 20:00:17', '2022-08-06 20:00:17'),
(348, NULL, 'ip', '167.249.79.128', '2022-08-06 20:00:17', '2022-08-06 20:00:17'),
(349, NULL, 'global', NULL, '2022-08-06 20:00:27', '2022-08-06 20:00:27'),
(350, NULL, 'ip', '167.249.79.128', '2022-08-06 20:00:27', '2022-08-06 20:00:27'),
(351, NULL, 'global', NULL, '2022-08-06 20:48:14', '2022-08-06 20:48:14'),
(352, NULL, 'ip', '106.194.246.124', '2022-08-06 20:48:14', '2022-08-06 20:48:14'),
(353, 52, 'user', NULL, '2022-08-06 20:48:14', '2022-08-06 20:48:14'),
(354, NULL, 'global', NULL, '2022-08-06 20:48:22', '2022-08-06 20:48:22'),
(355, NULL, 'ip', '106.194.246.124', '2022-08-06 20:48:22', '2022-08-06 20:48:22'),
(356, 52, 'user', NULL, '2022-08-06 20:48:22', '2022-08-06 20:48:22'),
(357, NULL, 'global', NULL, '2022-08-06 21:16:23', '2022-08-06 21:16:23'),
(358, NULL, 'ip', '167.249.79.128', '2022-08-06 21:16:23', '2022-08-06 21:16:23'),
(359, 52, 'user', NULL, '2022-08-06 21:16:23', '2022-08-06 21:16:23'),
(360, NULL, 'global', NULL, '2022-08-06 21:24:32', '2022-08-06 21:24:32'),
(361, NULL, 'ip', '39.48.217.234', '2022-08-06 21:24:32', '2022-08-06 21:24:32'),
(362, 52, 'user', NULL, '2022-08-06 21:24:32', '2022-08-06 21:24:32'),
(363, NULL, 'global', NULL, '2022-08-07 00:10:27', '2022-08-07 00:10:27'),
(364, NULL, 'ip', '187.19.203.38', '2022-08-07 00:10:27', '2022-08-07 00:10:27'),
(365, 74, 'user', NULL, '2022-08-07 00:10:27', '2022-08-07 00:10:27'),
(366, NULL, 'global', NULL, '2022-08-08 16:44:16', '2022-08-08 16:44:16'),
(367, NULL, 'ip', '191.253.87.98', '2022-08-08 16:44:16', '2022-08-08 16:44:16'),
(368, 52, 'user', NULL, '2022-08-08 16:44:16', '2022-08-08 16:44:16'),
(369, NULL, 'global', NULL, '2022-08-08 16:44:23', '2022-08-08 16:44:23'),
(370, NULL, 'ip', '191.253.87.98', '2022-08-08 16:44:23', '2022-08-08 16:44:23'),
(371, 52, 'user', NULL, '2022-08-08 16:44:23', '2022-08-08 16:44:23'),
(372, NULL, 'global', NULL, '2022-08-09 00:51:49', '2022-08-09 00:51:49'),
(373, NULL, 'ip', '61.246.6.198', '2022-08-09 00:51:49', '2022-08-09 00:51:49'),
(374, NULL, 'global', NULL, '2022-08-09 00:52:27', '2022-08-09 00:52:27'),
(375, NULL, 'ip', '61.246.6.198', '2022-08-09 00:52:27', '2022-08-09 00:52:27'),
(376, NULL, 'global', NULL, '2022-08-11 16:37:01', '2022-08-11 16:37:01'),
(377, NULL, 'ip', '167.249.79.128', '2022-08-11 16:37:01', '2022-08-11 16:37:01'),
(378, 52, 'user', NULL, '2022-08-11 16:37:01', '2022-08-11 16:37:01'),
(379, NULL, 'global', NULL, '2022-08-11 16:37:12', '2022-08-11 16:37:12'),
(380, NULL, 'ip', '167.249.79.128', '2022-08-11 16:37:12', '2022-08-11 16:37:12'),
(381, 52, 'user', NULL, '2022-08-11 16:37:12', '2022-08-11 16:37:12'),
(382, NULL, 'global', NULL, '2022-08-12 15:20:18', '2022-08-12 15:20:18'),
(383, NULL, 'ip', '5.62.60.163', '2022-08-12 15:20:18', '2022-08-12 15:20:18'),
(384, 52, 'user', NULL, '2022-08-12 15:20:18', '2022-08-12 15:20:18'),
(385, NULL, 'global', NULL, '2022-08-13 02:18:29', '2022-08-13 02:18:29'),
(386, NULL, 'ip', '187.19.203.39', '2022-08-13 02:18:29', '2022-08-13 02:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `billing_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'card',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_sex` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>active,1=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `full_name`, `user_sex`, `zip_code`, `user_address`, `city`, `mobile`, `profile_photo`, `email`, `password`, `created_by`, `updated_by`, `permissions`, `last_login`, `is_deleted`, `created_at`, `updated_at`) VALUES
(52, 'Marcos', 'Lisboa', NULL, NULL, NULL, NULL, NULL, '1234567891', 'avatar-5.jpg', 'contato@labvidaoficial.com.br', '$2y$10$y73VGunO4kJPHF32/U5OAeTjbezkDenD6L8bdf0ub98damnlUl.d.', NULL, '52', NULL, '2022-08-16 22:21:07', 0, '2022-06-19 00:02:49', '2022-08-16 22:21:07'),
(60, NULL, NULL, 'IZAYANE FERNANDES DE ANDRADE', 'Male', '987654', NULL, 'test', '9876543210', NULL, 'test2@mail.ccom', '$2y$10$6nN1Fsap9w5cpFXW.6QuAuH1Ngh0RTuMLecjskavnuNHILEwhCtt6', '52', '52', NULL, NULL, 1, '2022-06-22 19:53:11', '2022-07-02 23:43:49'),
(61, NULL, NULL, 'test11', 'Masculino', NULL, NULL, 'test', '9876543210', '1637837270.png', 'Doctor@mail.com', '$2y$10$3LSbTJpK5CEoJPYQIYY49.bRFnZG2I1bWQHm4TD5y9OcaaMLka7he', '52', '52', NULL, NULL, 1, '2022-06-22 19:53:45', '2022-08-05 01:50:53'),
(64, 'newtest', 'test', 'newtest test', NULL, NULL, NULL, NULL, '9876543210', NULL, 'testmail@mail.com', '$2y$10$fKhp3Fg2YDCpYTj2Rpf0VOpCfGjmdmQOATu9QqVAKr2edqrFdsqu2', '52', '52', NULL, NULL, 1, '2022-06-22 20:41:53', '2022-06-23 21:48:00'),
(65, NULL, NULL, 'abc', 'Male', '342345', 'fgg', 'xyz', '2345635467', '1637837270.png', 'admin@gmail.com', '$2y$10$fNWw91ZaV5wnEUt/VV5YFO9gR4QImAUcV5ztwRu5TNA/maR9dM7me', '52', '52', NULL, NULL, 1, '2022-06-22 23:20:11', '2022-06-23 21:29:23'),
(66, NULL, NULL, 'FILIPE GUEDES PIRES MENDONÇA', 'Fêmea', '342345', 'fgg', NULL, '2345635467', NULL, 'admin@themesbrand.in', '$2y$10$EUsk9/lD0NZVWgOGQCNQoetyzygGx127S0vzqVM8MCLBwIjPeFri.', '52', '52', NULL, '2022-08-05 20:08:24', 1, '2022-06-22 23:21:27', '2022-08-05 20:08:24'),
(67, NULL, NULL, 'JOSÉ LUCAS DA SILVA', 'Masculino', NULL, 'admin@themesbrand.website', NULL, '83999672999', '1637837270.png', 'site@teste.com', '$2y$10$2Xm5U8QgWGdqNyR/FzqatuNy5vT4t0GDI0dQ9a9jLHoyyACcvZpii', '52', '52', NULL, NULL, 0, '2022-06-22 23:21:30', '2022-07-23 02:20:15'),
(68, 'demo', 'work', 'demo work', NULL, NULL, NULL, NULL, '78956987561', '1655923438.png', 'admin@demo.com', '$2y$10$R6D8A5MGUlsFFyZP3dTR2u48GguuTAJjnAK8eFp1FI95HPBj6n1jW', '52', '52', NULL, NULL, 1, '2022-06-23 00:13:58', '2022-06-29 08:14:40'),
(70, NULL, NULL, 'VERONICA GOMES', 'Feminino', '58893 - 000', 'admin@themesbrand.website', NULL, '(83) 8 3999 - 9988', '1637837270.png', 'site23@teste.com', '$2y$10$d.dJENEVxvyBV/OSRohT4O1D3jNF0CrhTVVh4AYl1Z/IzK.i0ktA2', '52', '52', NULL, NULL, 0, '2022-06-23 03:27:23', '2022-08-06 19:50:38'),
(72, NULL, NULL, 'abhi', 'Male', NULL, NULL, NULL, '12345678901', NULL, 'abhi@mail.com', '$2y$10$oIAWM9tnuQIwDRUDkM4ZFeYUz56bMv5m3mcvT4pRMMY8/.mv8IyD2', '52', '52', NULL, NULL, 1, '2022-06-23 19:42:19', '2022-07-02 23:43:59'),
(74, 'Rodrigo', 'Santos', 'Maria Aparecida', NULL, NULL, NULL, NULL, '21234567891', '1655993649.jpg', 'marcus.saraiva@hotmail.com', '$2y$10$EUsk9/lD0NZVWgOGQCNQoetyzygGx127S0vzqVM8MCLBwIjPeFri.', '52', '52', NULL, '2022-08-10 01:36:39', 0, '2022-06-23 19:44:09', '2022-08-10 01:36:39'),
(75, 'ANDREA', 'F.', 'ANDREA F. MORAES', 'Masculino', NULL, NULL, NULL, NULL, NULL, 'ANDREA@mail.com', '$2y$10$i.ZEhAw3djJFN.FS0siMv.CannS.60v7lU8AHddBEJ35JqwsSWRwe', '52', '52', NULL, NULL, 1, '2022-06-23 19:59:06', '2022-07-02 23:43:25'),
(76, 'ANDREA1', '2.', 'ANDREA1 2. alves', 'Male', NULL, NULL, NULL, NULL, NULL, 'ANDREA1@mail.com', '$2y$10$KVkUBN8coAAJPVdyT1gFI.0X8BgGlV4gdsMd0HxgJj6hnxd9EXJxm', '52', '52', NULL, NULL, 1, '2022-06-23 20:13:46', '2022-07-02 23:43:15'),
(80, NULL, NULL, 'new penntine', 'Male', NULL, NULL, NULL, NULL, '1637837270.png', 'Doctorpentine@mail.com', '$2y$10$c8fWCoYvUTJTovhRdBbanexAu1i.8tCbSL9JojXv.D.Zy6/brH1QW', '52', '52', NULL, NULL, 1, '2022-06-23 21:17:35', '2022-07-22 03:00:00'),
(81, 'estmail', 'test', 'estmail test', NULL, NULL, NULL, NULL, '98765432100', NULL, 'estmail@mail.com', '$2y$10$I4SLly4CHElhqkIc/bUr7egXCyj4C2gLsbbkikSo15SmjU7SiMfmW', '52', '52', NULL, NULL, 1, '2022-06-23 21:49:27', '2022-06-29 08:14:51'),
(82, NULL, NULL, 'PATRICIA ABRAVANEL', 'Feminino', '8', 'AVENIDA TESTE', 'SAO JOSE DO BREJO DO CRUZ', NULL, '1637837270.png', 'marcos.1lsaraiva@gmail.com', '$2y$10$QsHxYEPNTjugWLoKvgIXte0YGX.D2NYNcZvAcruqm.1IyjpUiXOuq', '52', '52', NULL, NULL, 0, '2022-06-24 02:51:58', '2022-07-22 04:26:07'),
(83, 'SILVIO', 'SANTOS', 'SILVIO SANTOS', 'Masculino', NULL, NULL, NULL, NULL, NULL, 'marcos.lsaraiva2@gmail.com', '$2y$10$cdhTU4IEZVJnOFJH3uUr9e1/kJjk3jCXlI8HVsiK.sjiC88cznpAW', '52', '52', NULL, NULL, 1, '2022-06-24 02:52:55', '2022-07-02 23:43:03'),
(84, NULL, NULL, 'RENATA SANTOS', 'Feminino', '8', 'admin@themesbrand.website', NULL, NULL, '1637837270.png', 'renata@site.com', '$2y$10$OV.XwdonJqbLMgVDcnzv0eUzWMXR86BxOCnnbb/AzpHkHaxhysyx2', '52', '52', NULL, '2022-07-23 03:03:35', 0, '2022-06-24 05:34:25', '2022-07-23 03:03:35'),
(85, 'ALAN', 'DANTAS', 'ALAN DANTAS S. OLIVEIRA', 'Male', NULL, NULL, NULL, NULL, NULL, 'marcos.lsaraivaS2@gmail.com', '$2y$10$RELs8yn9drHe/i9d74Dn0uNSYZ.kwpsRHv5eqCS/bp4xZN4BVpoEy', '52', '52', NULL, NULL, 0, '2022-06-24 05:38:33', '2022-06-24 05:39:23'),
(86, 'MARIA', 'APARECIDA', 'MARIA APARECIDA', 'Feminino', '8', 'AV TESTE', 'JOAO PESSOA', '83999989999', NULL, 'MARIA@TESTE.COM', '$2y$10$SZjalO6cAT.HBrLRPWAjreIFXdBW.VLmPa6aR/G8KFTAUimKhoYQS', '52', '52', NULL, NULL, 0, '2022-06-29 20:33:46', '2022-06-29 20:33:46'),
(87, 'ELISA', 'LISBOA', 'ELISA LISBOA', 'Feminino', '8', NULL, NULL, NULL, NULL, 'elisa@site.com', '$2y$10$mU9sl5yXYy7PqmqIXFayAeNiBAomGdcG3futM17WWsTKxoiHjXfOG', '52', '52', NULL, NULL, 0, '2022-07-02 23:44:51', '2022-07-02 23:44:51'),
(88, 'JUNIOR', 'ALENCAR', 'JUNIOR ALENCAR MAIA', 'Masculino', '8', 'admin@themesbrand.website', NULL, NULL, NULL, 'JUNIOR@SITE.COM', '$2y$10$u7DCEVQPtcQ1GHY/P8zQsOlu/dReKpaybEEfot5lwHY3t2b7agUM2', '52', '52', NULL, NULL, 0, '2022-07-02 23:48:54', '2022-07-02 23:48:54'),
(89, 'DAMARES', 'CAVALCANTE', 'DAMARES CAVALCANTE', 'Feminino', '58890000', NULL, 'Brejo do Cruz', '11234567899', NULL, 'damares@site.com', '$2y$10$B3U8G3QtwITjA4WrgF2EE.bBJE9WP9g7Us5iUvBDSip7JvJ4fqvZG', '52', '52', NULL, NULL, 0, '2022-07-02 23:50:58', '2022-07-07 17:59:48'),
(90, NULL, NULL, 'SEBASTIANA VITAL', 'Feminino', NULL, NULL, NULL, NULL, '1637837270.png', NULL, '$2y$10$JzEb.Nro6h8d.bc/Y2JQxeeY0alvqln.TJxtRPwkJgyf8dQf0B3Be', '52', '52', NULL, NULL, 0, '2022-07-06 01:40:05', '2022-07-07 01:21:39'),
(91, 'UMAIR', 'UMER', 'UMAIR UMER', 'Masculino', NULL, 'admin@themesbrand.website', NULL, '83987896655', NULL, 'UMAIR@SITE.COM.BR', '$2y$10$OV.XwdonJqbLMgVDcnzv0eUzWMXR86BxOCnnbb/AzpHkHaxhysyx2', '52', '52', NULL, '2022-07-26 05:16:05', 0, '2022-07-06 01:40:33', '2022-07-26 05:16:05'),
(92, 'Umair', 'ibne', 'Umair ibne umer', 'Masculino', '46000', NULL, 'Rawalpindi', '03335137544', NULL, 'theumair55@gmail.com', '$2y$10$2.VPuNIf5Ouw/Cbt7BYvl.cNAhY8fXhTQmO/uwAnZwAuSV9UQG7jq', '52', '52', NULL, NULL, 0, '2022-07-06 21:47:22', '2022-07-07 00:40:29'),
(93, NULL, NULL, 'JESSICA GOMES DA COSTA', 'Feminino', NULL, 'admin@themesbrand.website', NULL, NULL, '1637837270.png', NULL, '$2y$10$XQ4YEGxQVaXsILmMdJ4bOekcRepW9D/.5iDyU07YINGs0.yqakfwu', '52', '52', NULL, NULL, 0, '2022-07-07 00:51:24', '2022-07-07 00:51:24'),
(94, NULL, NULL, 'GILSON SARAIVA', 'Masculino', NULL, 'admin@themesbrand.website', NULL, NULL, '1637837270.png', NULL, '$2y$10$iH9iawAS6RVwWeJBGpTMS.deVIagN4NxLL5f8vQqxhV0.0eDv0Ppe', '52', '52', NULL, NULL, 0, '2022-07-12 21:05:13', '2022-07-12 21:05:13'),
(95, 'DOULAS', 'MAX', 'DOULAS MAX', 'Masculino', NULL, 'admin@themesbrand.website', NULL, NULL, NULL, 'DOUGLAS@SITE.COM', '$2y$10$oCGjQffcwzLAX6UCWimdAufZbfRXSE5N4fIE7fpXDg9IIuwJtT0EG', '52', '52', NULL, NULL, 1, '2022-07-12 21:05:45', '2022-07-22 03:00:19'),
(96, NULL, NULL, 'ANTONIO ROQUE', 'Masculino', NULL, 'admin@themesbrand.website', NULL, NULL, '1637837270.png', NULL, '$2y$10$4fjCak/Gc5/QdKxjg/9ICOtd6v0uYy9DbMCQ0OXEtzLhkKzyePwGi', '52', '52', NULL, NULL, 0, '2022-07-14 02:47:24', '2022-07-14 02:47:24'),
(97, NULL, NULL, 'EDINETE DUARTE', 'Feminino', NULL, 'admin@themesbrand.website', NULL, NULL, '1637837270.png', NULL, '$2y$10$DHhj.FYizu2j5nrOK.OFbOpVt0TRxdB/yDhNvGIRFS2czs37cPDcy', '52', '52', NULL, NULL, 0, '2022-07-14 02:47:49', '2022-07-14 02:47:49'),
(98, NULL, NULL, 'JOSÉ SALDANHA', 'Feminino', '80000 - 000', 'Avenida Fundador Saraiva Leão', 'JOÃO PESSOA/PB', '(83) 1 2345 - 6789', '1637837270.png', NULL, '$2y$10$OV.XwdonJqbLMgVDcnzv0eUzWMXR86BxOCnnbb/AzpHkHaxhysyx2', '52', '74', NULL, '2022-07-23 18:19:45', 0, '2022-07-15 22:02:47', '2022-08-05 20:04:28'),
(99, NULL, NULL, 'ELIONE CARDOSO', 'Masculino', NULL, NULL, NULL, NULL, '1637837270.png', '123456789123456@sislac.com.br', '$2y$10$E576oNBwLhqVyhEt6if6qubguBfgGrPy8rjXZAdWv53OtoiKXoptW', '52', '52', NULL, NULL, 1, '2022-07-23 06:10:35', '2022-07-23 06:23:56'),
(100, NULL, NULL, 'ELIONE CARDOSO', 'Masculino', NULL, NULL, NULL, NULL, '1637837270.png', NULL, '$2y$10$z6TB6zvMYZm67cInnZ8u3u9JpU/NHW/ik7HRgNBaKoM4V.nphF25C', '52', '52', NULL, NULL, 0, '2022-07-23 06:24:39', '2022-07-24 00:21:32'),
(103, NULL, NULL, 'SAPNA DEVI', 'Feminino', NULL, NULL, NULL, NULL, '1637837270.png', 'sapna@site.com', '$2y$10$OV.XwdonJqbLMgVDcnzv0eUzWMXR86BxOCnnbb/AzpHkHaxhysyx2', '52', '52', NULL, '2022-07-28 03:18:41', 0, '2022-07-26 00:34:08', '2022-07-28 03:18:41'),
(104, NULL, NULL, 'CÉLIDA MARIA OLIVEIRA', 'Feminino', '8', 'RUA PEDO ELOI', 'BREJO DO CRUZ', NULL, '1637837270.png', NULL, '$2y$10$9lEh9fkEwelhjNWUXHo23OW/aqBoO8ni6QEAowrngAk5yokc9f/Fu', '52', '52', NULL, NULL, 0, '2022-07-29 02:40:54', '2022-07-29 02:40:54'),
(105, NULL, NULL, 'MARIA JOSÉ', 'Feminino', '58893-000', NULL, NULL, NULL, '1637837270.png', NULL, '$2y$10$Ako6aM60o0azBJccZJQaW.TOIwuFXnP8DgU7pm2oysnje6pYiH5Ri', '52', '52', NULL, NULL, 0, '2022-07-30 01:28:55', '2022-07-30 01:28:55'),
(150, 'Françuar', 'Junior', NULL, NULL, NULL, NULL, NULL, '1234567891', 'avatar-5.jpg', 'contato1@labvidaoficial.com.br', '$2y$10$OV.XwdonJqbLMgVDcnzv0eUzWMXR86BxOCnnbb/AzpHkHaxhysyx2', NULL, '52', NULL, '2022-08-02 23:06:05', 0, '2022-06-19 00:02:49', '2022-08-02 23:06:05'),
(1000, NULL, NULL, 'test user', 'Masculino', '55555 - 555', NULL, NULL, '(83) 9 8765 - 4512', '1637837270.png', 'test@mail.com', '$2y$10$GSPFJ7o/bqSigSdOhgDnzeQVFCASHnIw8WOGQexR5EZb6cspqHEly', '74', '52', NULL, NULL, 0, '2022-08-05 20:01:03', '2022-08-05 21:49:30'),
(1001, 'umair', 'umer', 'umair umer', NULL, '23423-423', 'contato@labvidaoficial.com.br', 'rawalpindig', '3335137544', NULL, NULL, '$2y$10$F17J3GV3Cd1eb3oE.y98ye.ARG6oItHz1yiPNvHGcb2jCPVEfyo1S', '52', '52', NULL, NULL, 0, '2022-08-05 20:05:48', '2022-08-05 20:05:48'),
(1002, 'JOSÉ', 'GERALDO', 'JOSÉ GERALDO', 'Masculino', '58893-000', NULL, NULL, NULL, NULL, NULL, '$2y$10$uq5iCFiZFl3YNUrA9GjUdeMQPp6WY9c6vEvgVLeBk6n3vWHl7mYvO', '52', '52', NULL, NULL, 0, '2022-08-05 23:30:27', '2022-08-05 23:30:27'),
(1009, NULL, NULL, 'abhidamail', 'Masculino', '55555 - 555', NULL, NULL, '(83) 9 9999 - 9999', '1637837270.png', 'abhida@mail.in', '$2y$10$xb/35xYIM5hKyTR2PqlFlOJZ1kGqlUWl5mf7G8u0EYzffiATM/SGC', '52', '52', NULL, NULL, 0, '2022-08-06 21:27:58', '2022-08-06 21:27:58'),
(1010, 'ELISEU', 'CARDOSO', 'ELISEU CARDOSO', 'Masculino', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$OQjeRQTjAvZb9URANfnXuuv8q4vPScNTMH2P2NJTJqH5.2SBHVhiu', '74', '74', NULL, NULL, 0, '2022-08-07 00:17:23', '2022-08-07 00:17:23'),
(1011, 'Muhammad', 'Faisal', 'Muhammad Faisal Qasim', NULL, '75260', 'contato@labvidaoficial.com.br', 'karachi', NULL, NULL, 'mfaisalqasimtesting123@gmail.com', '$2y$10$qTAdnyuNN8ofsJHyN6mR8OZtJsFZRE/RKT1JRTpZjPnCjfPtgfb.C', '52', '52', NULL, NULL, 1, '2022-08-16 16:28:27', '2022-08-16 16:29:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_exams`
--
ALTER TABLE `appointment_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cytologies`
--
ALTER TABLE `cytologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cytology_subitems`
--
ALTER TABLE `cytology_subitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_user_id_foreign` (`user_id`);

--
-- Indexes for table `doctor_available_days`
--
ALTER TABLE `doctor_available_days`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_available_days_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `doctor_available_slots`
--
ALTER TABLE `doctor_available_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_available_slots_doctor_id_foreign` (`doctor_id`),
  ADD KEY `doctor_available_slots_doctor_available_time_id_foreign` (`doctor_available_time_id`);

--
-- Indexes for table `doctor_available_times`
--
ALTER TABLE `doctor_available_times`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_available_times_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_patient_id_foreign` (`patient_id`),
  ADD KEY `invoices_created_by_foreign` (`created_by`),
  ADD KEY `invoices_updated_by_foreign` (`updated_by`),
  ADD KEY `invoices_doctor_id_foreign` (`doctor_id`),
  ADD KEY `invoices_appointment_id_foreign` (`appointment_id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_details_invoice_id_foreign` (`invoice_id`);

--
-- Indexes for table `medical_infos`
--
ALTER TABLE `medical_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medical_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicines_prescription_id_foreign` (`prescription_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_parameter`
--
ALTER TABLE `new_parameter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notification_type_id_foreign` (`notification_type_id`),
  ADD KEY `notifications_from_user_foreign` (`from_user`),
  ADD KEY `notifications_to_user_foreign` (`to_user`);

--
-- Indexes for table `notification_types`
--
ALTER TABLE `notification_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_user_id_foreign` (`user_id`);

--
-- Indexes for table `patients1`
--
ALTER TABLE `patients1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_user_id_foreign` (`user_id`);

--
-- Indexes for table `payment_apis`
--
ALTER TABLE `payment_apis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescriptions_patient_id_foreign` (`patient_id`),
  ADD KEY `prescriptions_appointment_id_foreign` (`appointment_id`),
  ADD KEY `prescriptions_created_by_foreign` (`created_by`),
  ADD KEY `prescriptions_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `reception_list_doctors`
--
ALTER TABLE `reception_list_doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reception_list_doctors_doctor_id_foreign` (`doctor_id`),
  ADD KEY `reception_list_doctors_reception_id_foreign` (`reception_id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `test_reports`
--
ALTER TABLE `test_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_reports_prescription_id_foreign` (`prescription_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10098;

--
-- AUTO_INCREMENT for table `appointment_exams`
--
ALTER TABLE `appointment_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cytologies`
--
ALTER TABLE `cytologies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `cytology_subitems`
--
ALTER TABLE `cytology_subitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `doctor_available_days`
--
ALTER TABLE `doctor_available_days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_available_slots`
--
ALTER TABLE `doctor_available_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_available_times`
--
ALTER TABLE `doctor_available_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_infos`
--
ALTER TABLE `medical_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `new_parameter`
--
ALTER TABLE `new_parameter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_types`
--
ALTER TABLE `notification_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `patients1`
--
ALTER TABLE `patients1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment_apis`
--
ALTER TABLE `payment_apis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=507;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reception_list_doctors`
--
ALTER TABLE `reception_list_doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test_reports`
--
ALTER TABLE `test_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=387;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `doctor_available_days`
--
ALTER TABLE `doctor_available_days`
  ADD CONSTRAINT `doctor_available_days_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `doctor_available_slots`
--
ALTER TABLE `doctor_available_slots`
  ADD CONSTRAINT `doctor_available_slots_doctor_available_time_id_foreign` FOREIGN KEY (`doctor_available_time_id`) REFERENCES `doctor_available_times` (`id`),
  ADD CONSTRAINT `doctor_available_slots_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `doctor_available_times`
--
ALTER TABLE `doctor_available_times`
  ADD CONSTRAINT `doctor_available_times_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `invoices_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `invoices_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `invoices_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `invoices_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoice_details_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`);

--
-- Constraints for table `medical_infos`
--
ALTER TABLE `medical_infos`
  ADD CONSTRAINT `medical_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `medicines`
--
ALTER TABLE `medicines`
  ADD CONSTRAINT `medicines_prescription_id_foreign` FOREIGN KEY (`prescription_id`) REFERENCES `prescriptions` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_from_user_foreign` FOREIGN KEY (`from_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notifications_notification_type_id_foreign` FOREIGN KEY (`notification_type_id`) REFERENCES `notification_types` (`id`),
  ADD CONSTRAINT `notifications_to_user_foreign` FOREIGN KEY (`to_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`),
  ADD CONSTRAINT `prescriptions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `prescriptions_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `prescriptions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `reception_list_doctors`
--
ALTER TABLE `reception_list_doctors`
  ADD CONSTRAINT `reception_list_doctors_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reception_list_doctors_reception_id_foreign` FOREIGN KEY (`reception_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `test_reports`
--
ALTER TABLE `test_reports`
  ADD CONSTRAINT `test_reports_prescription_id_foreign` FOREIGN KEY (`prescription_id`) REFERENCES `prescriptions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
