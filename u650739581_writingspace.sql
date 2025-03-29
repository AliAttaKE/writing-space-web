-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2023 at 02:06 PM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u650739581_writingspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_levels`
--

CREATE TABLE `academic_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_academic_name` varchar(255) DEFAULT NULL,
  `erp_status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_levels`
--

INSERT INTO `academic_levels` (`id`, `erp_user_id`, `erp_academic_name`, `erp_status`, `created_at`, `updated_at`) VALUES
(3, 1, 'one', '1', '2021-12-25 23:13:42', '2021-12-25 23:13:42'),
(4, 1, 'two', '1', '2021-12-25 23:13:51', '2021-12-25 23:13:51'),
(5, 1, 'Thhr', '1', '2022-02-18 06:38:24', '2022-02-18 06:38:24'),
(6, 1, 'Bachelors', '1', '2022-03-29 13:07:48', '2022-03-29 13:07:48'),
(7, 1, 'Masters', '1', '2022-03-29 13:07:57', '2022-03-29 13:07:57'),
(8, 1, 'Under Graduate', '1', '2022-03-29 13:08:05', '2022-03-29 13:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `team_order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `commission_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `hours` varchar(220) DEFAULT NULL,
  `ext_source` int(11) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `spacing` int(11) DEFAULT NULL,
  `commission_rate` int(11) DEFAULT NULL,
  `payment_status` int(11) DEFAULT NULL COMMENT '0-pending 1-process 2-complete',
  `order_status` int(11) DEFAULT 0 COMMENT '0-created 1-new 2-inprogress 3-complete 4-cancel 5-refunded 6-disputed 7-flag	',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `order_id`, `team_order_id`, `user_id`, `commission_id`, `title`, `hours`, `ext_source`, `pages`, `spacing`, `commission_rate`, `payment_status`, `order_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(251, 604, 1352, 137, 77, 'Testing with a 10 day deadline', 'erp_fourteen_plus_days', 0, 12, 1, 13, 0, 0, NULL, '2023-10-16 19:34:26', '2023-10-16 19:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `add_commission`
--

CREATE TABLE `add_commission` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_role_id` int(10) UNSIGNED DEFAULT NULL,
  `erp_level_id` int(10) UNSIGNED DEFAULT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `erp_daily_bids` int(15) DEFAULT NULL,
  `erp_daily_claims` int(15) DEFAULT NULL,
  `erp_eight_hrs` int(15) DEFAULT NULL,
  `erp_tf_hrs` int(15) DEFAULT NULL,
  `erp_fe_hrs` int(15) DEFAULT NULL,
  `erp_three_days` int(15) DEFAULT NULL,
  `erp_five_days` int(15) DEFAULT NULL,
  `erp_seven_days` int(15) DEFAULT NULL,
  `erp_fourteen_days` int(15) DEFAULT NULL,
  `erp_fourteen_plus_days` int(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_commission`
--

INSERT INTO `add_commission` (`id`, `erp_role_id`, `erp_level_id`, `package_name`, `erp_daily_bids`, `erp_daily_claims`, `erp_eight_hrs`, `erp_tf_hrs`, `erp_fe_hrs`, `erp_three_days`, `erp_five_days`, `erp_seven_days`, `erp_fourteen_days`, `erp_fourteen_plus_days`, `created_at`, `updated_at`) VALUES
(71, 5, 13, 'prof-reader', 4, 23, 9, 1, 5, 24, 12, 16, 17, 8, '2022-05-22 14:25:46', '2022-05-22 14:25:46'),
(72, 4, 13, 'Researcher', 13, 13, 81, 17, 71, 12, 21, 17, 9, 6, '2022-05-22 14:26:15', '2022-05-22 14:26:15'),
(73, 12, 13, 'Reviewer', 7, 25, 91, 31, 22, 5, 25, 27, 23, 2, '2022-05-22 14:27:31', '2022-05-22 14:27:31'),
(74, 19, 13, 'Academic-writer', 23, 5, 87, 58, 91, 26, 7, 16, 20, 22, '2022-05-22 14:28:00', '2022-05-22 14:28:00'),
(77, 1, 13, 'writer bronze', 13, 2, 16, 38, 27, 16, 10, 2, 1, 13, '2022-05-22 20:17:20', '2022-05-22 20:17:20'),
(78, 1, 15, 'Writer gold', 27, 18, 19, 70, 96, 7, 19, 11, 25, 24, '2022-05-22 20:17:37', '2022-05-22 20:17:37'),
(79, 1, 15, 'DEMO', 10, 5, 1, 5, 23, 56, 78, 23, 23, 23, '2022-06-16 20:08:03', '2022-06-16 20:08:03'),
(80, 19, 14, 'Fletcher Graves', 6, 18, 94, 90, 50, 2, 14, 11, 2, 9, '2022-09-11 12:42:49', '2022-09-11 12:42:49'),
(81, 1, 13, 'Rashad Washington', 3, 2, 79, 52, 51, 1, 14, 3, 9, 3, '2022-09-11 12:49:40', '2022-09-11 12:49:40'),
(82, 19, 15, 'Testing Package 1', 2, 3, 7, 7, 7, 7, 7, 7, 7, 7, '2023-11-13 15:31:40', '2023-11-13 15:31:40'),
(83, 4, 16, 'Testing Package 2', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, '2023-11-13 15:33:08', '2023-11-13 15:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_title` varchar(255) DEFAULT NULL,
  `erp_timetype` varchar(255) DEFAULT NULL,
  `Date` varchar(255) DEFAULT NULL,
  `erp_status` varchar(255) DEFAULT NULL,
  `erp_message` text DEFAULT NULL,
  `erp_file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `erp_title`, `erp_timetype`, `Date`, `erp_status`, `erp_message`, `erp_file`, `created_at`, `updated_at`) VALUES
(13, 'testing announcement !!!', 'immediate', NULL, '1', 'This is testing announcment !!!', '1648537504520.docx', '2022-03-29 12:05:04', '2022-03-29 12:05:04'),
(14, 'Another TEster', 'immediate', NULL, '1', 'One more test', '1648538519445.docx', '2022-03-29 12:21:27', '2022-03-29 12:21:59'),
(15, 'scheduled announcement 1', 'date', '2022-03-29', '1', 'our first scheduled announcement 1', '', '2022-03-29 12:26:47', '2022-03-29 12:26:47'),
(16, 'At provident sunt t', 'date', NULL, '1', 'Excepteur commodi is', '1650709493651.jpeg', '2022-04-23 15:24:38', '2022-04-23 15:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `assignquiz`
--

CREATE TABLE `assignquiz` (
  `id` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `quizzes` int(10) UNSIGNED DEFAULT NULL,
  `quiz_is_done` int(10) UNSIGNED DEFAULT NULL,
  `quiz_is_passed` int(11) DEFAULT NULL,
  `order_by` varchar(255) DEFAULT NULL,
  `quiz_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_role_id` int(10) UNSIGNED NOT NULL,
  `erp_bids` int(255) DEFAULT NULL,
  `erp_claims` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `erp_user_id`, `erp_role_id`, `erp_bids`, `erp_claims`, `created_at`, `updated_at`) VALUES
(66, 106, 1, 32, 213, '2022-04-03 15:08:12', '2022-05-13 19:55:50'),
(67, 106, 4, 25, 12, '2022-04-03 15:08:32', '2022-04-03 15:08:32'),
(68, 78, 1, 7, 11, '2022-04-03 15:17:22', '2022-06-13 19:19:47'),
(69, 83, 1, 10, 16, '2022-04-03 15:17:27', '2022-04-03 15:17:27'),
(70, 85, 1, 10, 16, '2022-04-03 15:17:32', '2022-04-03 15:17:32'),
(71, 86, 1, 10, 16, '2022-04-03 15:17:38', '2022-04-03 15:17:38'),
(72, 87, 1, 10, 16, '2022-04-03 15:17:44', '2022-04-03 15:17:44'),
(73, 88, 1, 10, 16, '2022-04-03 15:17:56', '2022-04-03 15:17:56'),
(74, 89, 1, 10, 10, '2022-04-03 15:18:02', '2022-04-09 15:47:48'),
(75, 90, 1, 10, 16, '2022-04-03 15:18:08', '2022-04-03 15:18:08'),
(76, 92, 1, 10, 16, '2022-04-03 15:18:14', '2022-04-03 15:18:14'),
(77, 107, 1, 10, 16, '2022-04-03 15:18:20', '2022-04-03 15:18:20'),
(78, 78, 4, 25, 12, '2022-04-03 15:22:24', '2022-04-03 15:22:24'),
(79, 112, 1, 17, 14, '2022-04-04 15:27:20', '2022-04-04 15:27:20'),
(80, 84, 1, 20, 20, '2022-04-04 15:27:27', '2022-04-04 15:27:27'),
(81, 116, 4, 24, 8, '2022-04-13 01:19:42', '2022-05-22 19:37:50'),
(82, 131, 1, 215, 23444, '2022-05-18 19:12:25', '2022-09-12 12:05:29'),
(83, 131, 1, 24, 15, '2022-05-22 14:31:32', '2022-05-22 14:31:32'),
(84, 106, 1, 24, 15, '2022-05-22 14:32:04', '2022-05-22 14:32:04'),
(85, 78, 4, 13, 13, '2022-05-22 14:32:24', '2022-05-22 14:32:24'),
(86, 93, 4, 13, 13, '2022-05-22 14:33:33', '2022-05-22 14:33:33'),
(87, 111, 5, 4, 23, '2022-05-22 14:33:57', '2022-05-22 14:33:57'),
(88, 88, 5, 4, 23, '2022-05-22 14:34:06', '2022-05-22 14:34:06'),
(89, 86, 12, 7, 25, '2022-05-22 14:34:59', '2022-05-22 14:34:59'),
(90, 85, 12, 7, 25, '2022-05-22 14:35:14', '2022-05-22 14:35:14'),
(91, 116, 19, 23, 5, '2022-05-22 14:35:26', '2022-05-22 14:35:26'),
(92, 87, 19, 23, 5, '2022-05-22 14:36:09', '2022-05-22 14:36:09'),
(93, 106, 1, 24, 15, '2022-05-22 20:16:14', '2022-05-22 20:16:14'),
(94, 131, 1, 13, 2, '2022-05-22 20:18:07', '2022-05-22 20:18:07'),
(95, 106, 1, 27, 18, '2022-05-22 20:18:22', '2022-05-22 20:18:22'),
(96, 131, 12, 7, 25, '2022-06-11 16:06:37', '2022-06-11 16:06:37'),
(97, 93, 5, 4, 23, '2022-06-11 16:10:33', '2022-06-11 16:10:33'),
(98, 78, 19, 23, 5, '2022-06-11 16:10:40', '2022-06-11 16:10:40'),
(99, 133, 4, 13, 13, '2022-06-11 18:53:21', '2022-06-11 18:53:21'),
(100, 78, 1, 13, 2, '2022-06-11 20:23:11', '2022-06-11 20:23:11'),
(101, 78, 19, 6, 18, '2022-09-11 12:48:05', '2022-09-11 12:48:05'),
(102, 134, 4, 13, 13, '2022-09-11 15:26:37', '2022-09-11 15:26:37'),
(103, 137, 4, 13, 12, '2023-10-14 16:05:26', '2023-10-16 19:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `bounaspenalties`
--

CREATE TABLE `bounaspenalties` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `team_order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `commission_id` int(10) UNSIGNED NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jane Ross', 'Fuga Iure quis non', '', '0', '2022-03-07 18:47:20', '2022-03-07 18:47:20'),
(2, 'Ramona Sosa', 'Veniam aut est ani', '1646632096357.pdf', '1', '2022-03-07 18:48:16', '2022-03-07 18:48:16'),
(3, 'silver', 'silver', '1646633047958.png', '1', '2022-03-07 19:04:07', '2022-03-07 19:04:07'),
(4, 'Dana Soto', 'Id sed distinctio', '', '1', '2022-03-16 12:15:14', '2022-03-16 12:15:14'),
(5, 'Simone Oneill', 'Nihil amet quidem a', '', '1', '2022-03-21 18:46:12', '2022-03-21 18:46:12'),
(6, 'Sarah William', 'Eos consequuntur su', '', '0', '2022-03-21 18:46:20', '2022-03-21 18:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `citation__styles`
--

CREATE TABLE `citation__styles` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_title` varchar(255) DEFAULT NULL,
  `erp_citation_message` varchar(255) DEFAULT NULL,
  `erp_file_type` varchar(255) DEFAULT NULL,
  `erp_datetime` varchar(255) DEFAULT NULL,
  `erp_date` varchar(255) DEFAULT NULL,
  `erp_status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `citation__styles`
--

INSERT INTO `citation__styles` (`id`, `erp_user_id`, `erp_title`, `erp_citation_message`, `erp_file_type`, `erp_datetime`, `erp_date`, `erp_status`, `created_at`, `updated_at`) VALUES
(15, 1, 'APA', 'APA', '1652885938982.txt', 'immediate', NULL, '1', '2022-04-01 18:24:42', '2022-05-18 19:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE `commission` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_commission_level` varchar(255) DEFAULT NULL,
  `erp_commission_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commission`
--

INSERT INTO `commission` (`id`, `erp_user_id`, `erp_commission_level`, `erp_commission_status`, `created_at`, `updated_at`) VALUES
(13, 1, 'Bronze', '1', '2022-03-29 15:31:40', '2022-03-29 15:31:40'),
(14, 1, 'Silver', '1', '2022-03-29 15:31:49', '2022-03-29 15:31:49'),
(15, 1, 'Gold', '1', '2022-03-29 15:31:57', '2022-03-29 15:31:57'),
(16, 1, 'Platinum', '1', '2023-11-13 15:32:12', '2023-11-13 15:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `create_orders`
--

CREATE TABLE `create_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_status` varchar(255) NOT NULL DEFAULT '0' COMMENT '0-created 1-new 2-inprogress 3-complete 4-cancel 5-refunded 6-disputed 7-flag',
  `reason` text DEFAULT NULL,
  `return_user` int(11) UNSIGNED DEFAULT NULL,
  `erp_order_topic` longtext DEFAULT NULL,
  `erp_order_message` longtext DEFAULT NULL,
  `erp_academic_name` varchar(255) DEFAULT NULL,
  `erp_paper_type` int(10) UNSIGNED NOT NULL,
  `papertype_desc` longtext DEFAULT NULL,
  `papertype_file` varchar(255) DEFAULT NULL,
  `erp_subject_name` varchar(255) DEFAULT NULL,
  `erp_paper_format` int(10) UNSIGNED NOT NULL,
  `paperformat_file` varchar(255) DEFAULT NULL,
  `paperformat_desc` longtext DEFAULT NULL,
  `erp_team` int(10) UNSIGNED DEFAULT NULL,
  `all_team` varchar(255) DEFAULT NULL,
  `erp_language_name` varchar(255) DEFAULT NULL,
  `erp_resource_materials` varchar(255) DEFAULT NULL,
  `erp_resource_file` varchar(255) DEFAULT NULL,
  `erp_number_Pages` int(15) DEFAULT NULL,
  `erp_spacing` int(15) DEFAULT NULL,
  `erp_powerPoint_slides` varchar(255) DEFAULT NULL,
  `erp_extra_source` varchar(255) DEFAULT NULL,
  `erp_previous` varchar(255) DEFAULT NULL,
  `erp_deadline` varchar(255) DEFAULT NULL,
  `erp_datetime` varchar(255) DEFAULT NULL,
  `erp_copy_sources` varchar(255) DEFAULT NULL,
  `erp_page_summary` varchar(255) DEFAULT NULL,
  `erp_paper_outline` varchar(255) DEFAULT NULL,
  `erp_abstract_page` varchar(255) DEFAULT NULL,
  `erp_statistical_analysis` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `create_orders`
--

INSERT INTO `create_orders` (`id`, `erp_user_id`, `erp_status`, `reason`, `return_user`, `erp_order_topic`, `erp_order_message`, `erp_academic_name`, `erp_paper_type`, `papertype_desc`, `papertype_file`, `erp_subject_name`, `erp_paper_format`, `paperformat_file`, `paperformat_desc`, `erp_team`, `all_team`, `erp_language_name`, `erp_resource_materials`, `erp_resource_file`, `erp_number_Pages`, `erp_spacing`, `erp_powerPoint_slides`, `erp_extra_source`, `erp_previous`, `erp_deadline`, `erp_datetime`, `erp_copy_sources`, `erp_page_summary`, `erp_paper_outline`, `erp_abstract_page`, `erp_statistical_analysis`, `created_at`, `updated_at`) VALUES
(598, 1, '4', 'hh', NULL, 'science', '<p>frwfrw</p>', 'dff', 13, 'wacwcwc', '1651049215228.txt', 'science', 15, '1652885938982.txt', 'APA', 98, '[\"98\",\"100\"]', 'American English', 'yes', '', 927, 1, '76', '37', NULL, 'erp_five_days', '2022-09-17 12:04:00', 'Yes', 'No', 'No', 'No', 'No', '2022-09-12 12:04:00', '2023-02-15 20:47:57'),
(599, 1, '1', NULL, NULL, 'science', '<p>frwfrw</p>', 'dff', 13, 'wacwcwc', '1651049215228.txt', 'science', 15, '1652885938982.txt', 'APA', 98, '[\"98\",\"100\"]', 'American English', 'yes', '', 927, 1, '76', '37', NULL, 'erp_five_days', '2022-09-17 12:04:00', 'Yes', 'No', 'No', 'No', 'No', '2023-02-15 20:47:57', '2023-02-15 23:19:56'),
(600, 1, '1', NULL, NULL, 'pstr', '<p>Ullamco voluptas har.</p>', 'one', 13, 'wacwcwc', '1651049215228.txt', 'pstr', 15, '1652885938982.txt', 'APA', NULL, '[\"100\"]', 'British English', 'yes', '', 47, 1, '91', '82', NULL, 'erp_three_days', '2023-02-18 20:48:41', 'No', 'Yes', 'Yes', 'Yes', 'Yes', '2023-02-15 20:48:41', '2023-10-14 16:08:00'),
(601, 1, '1', NULL, NULL, 'web', '<p>hhhhhhhhhhhhhhhhhhhhhhhh</p>', 'Masters', 13, 'wacwcwc', '1651049215228.txt', 'web', 15, '1652885938982.txt', 'APA', NULL, '[\"98\"]', 'British English', 'No', '', 994, 1, '82', '89', NULL, 'erp_eight_hrs', '2023-02-16 18:09:04', 'No', 'Yes', 'Yes', 'No', 'No', '2023-02-16 10:09:04', '2023-10-14 16:08:00'),
(602, 1, '1', NULL, NULL, 'urdu', '<p>Aliqua. Voluptas sun.</p>', 'Masters', 13, 'wacwcwc', '1651049215228.txt', 'urdu', 15, '1652885938982.txt', 'APA', NULL, '[\"100\"]', 'British English', 'yes', '1677659941966.pdf', 107, 2, '56', '23', NULL, 'erp_five_days', '2023-03-06 13:39:01', 'No', 'No', 'Yes', 'Yes', 'Yes', '2023-03-01 13:39:01', '2023-10-14 16:08:00'),
(603, 1, '1', NULL, NULL, 'web', '<p>This is a trst during world cup match</p>', 'Masters', 13, 'wacwcwc', '1651049215228.txt', 'web', 15, '1652885938982.txt', 'APA', NULL, '[\"98\"]', 'American English', 'No', '', 3, 1, '3', '12', NULL, 'erp_three_days', '2023-10-13 21:51:16', 'No', 'No', 'Yes', 'Yes', 'No', '2023-10-10 21:51:16', '2023-10-14 16:08:00'),
(604, 1, '2', NULL, NULL, 'Testing with a 10 day deadline', '<p>Testing with a 10 day deadline</p>', 'Masters', 13, 'wacwcwc', '1651049215228.txt', 'discrete', 15, '1652885938982.txt', 'APA', 98, '[\"98\"]', 'American English', 'No', '', 12, 1, '12', '0', NULL, 'erp_fourteen_plus_days', '2023-11-09 19:32:20', 'No', 'No', 'No', 'No', 'No', '2023-10-16 19:32:20', '2023-10-16 19:34:26'),
(605, 1, '1', NULL, NULL, 'Computer', '<p>testing as new order</p>', 'Bachelors', 13, 'wacwcwc', '1651049215228.txt', 'Computer', 15, '1652885938982.txt', 'APA', NULL, '[\"98\"]', 'American English', 'No', '', 14, 1, '0', '0', NULL, 'erp_fourteen_plus_days', '2023-11-24 14:24:21', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '2023-10-31 14:24:21', '2023-10-31 14:24:50'),
(606, 1, '0', NULL, NULL, 'physics', '<p>We have created this document to provide information to our customers and visitors who are interested in our use of cookies, web beacons, and other tracking tools and methodologies. These technologies may be applied to our website, apps, and other connected platforms. All policies and statements here apply to our use of these technologies as well as our vendors, associates, and contractors&nbsp; in their&nbsp; use of these technologies as authorized agents of ours.</p>', 'one', 13, 'wacwcwc', '1651049215228.txt', 'physics', 15, '1652885938982.txt', 'APA', NULL, '[\"98\"]', 'American English', 'yes', '', 1, 2, '10', '1', NULL, 'erp_eight_hrs', '2023-11-06 21:09:55', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '2023-11-06 13:09:55', '2023-11-06 13:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) UNSIGNED NOT NULL,
  `iata` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `iata`, `title`, `created_at`, `updated_at`) VALUES
(1, 'isb', 'islamabad\r\n', NULL, NULL),
(2, 'khi', 'karachi\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `document_types`
--

CREATE TABLE `document_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_document_title` varchar(255) DEFAULT NULL,
  `erp_document_message` varchar(255) DEFAULT NULL,
  `erp_document_file` varchar(255) DEFAULT NULL,
  `erp_status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_types`
--

INSERT INTO `document_types` (`id`, `erp_user_id`, `erp_document_title`, `erp_document_message`, `erp_document_file`, `erp_status`, `created_at`, `updated_at`) VALUES
(13, 1, 'A4 paper', 'wacwcwc', '1651049215228.txt', '1', '2022-04-01 18:24:16', '2022-04-27 13:46:55');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_coutomer_services` varchar(255) DEFAULT NULL,
  `erp_feedback_beans` varchar(255) DEFAULT NULL,
  `erp_delivery_drives` varchar(255) DEFAULT NULL,
  `erp_requirement_need` varchar(255) DEFAULT NULL,
  `erp_general_feedback` varchar(255) DEFAULT NULL,
  `erp_beans_clients` varchar(255) DEFAULT NULL,
  `erp_feedback_message` varchar(255) DEFAULT NULL,
  `erp_suggestion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instruction_pivots`
--

CREATE TABLE `instruction_pivots` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_users_id` int(10) UNSIGNED NOT NULL,
  `erp_order_id` int(10) UNSIGNED NOT NULL,
  `erp_message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instruction_pivots`
--

INSERT INTO `instruction_pivots` (`id`, `erp_users_id`, `erp_order_id`, `erp_message`, `created_at`, `updated_at`) VALUES
(8, 1, 553, 'dddsfsdfsdfdsf', '2022-06-07 16:43:08', '2022-06-07 16:43:08'),
(9, 1, 553, '1234567890', '2022-06-07 16:43:27', '2022-06-07 16:43:27'),
(10, 1, 555, 'wjkeuo13o', '2022-06-10 19:05:22', '2022-06-10 19:05:22'),
(11, 1, 555, 'hfy8', '2022-06-11 15:37:00', '2022-06-11 15:37:00'),
(12, 1, 555, 'kgyifuv', '2022-06-11 15:37:07', '2022-06-11 15:37:07'),
(13, 1, 569, 'dwdwwwwwwwwww', '2022-06-11 16:08:41', '2022-06-11 16:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `in_progress_orders`
--

CREATE TABLE `in_progress_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_status` varchar(255) NOT NULL DEFAULT '1',
  `erp_order_topic` varchar(255) DEFAULT NULL,
  `erp_order_text` varchar(255) DEFAULT NULL,
  `erp_order_message` varchar(255) DEFAULT NULL,
  `erp_academic_name` varchar(255) DEFAULT NULL,
  `erp_academic_description` varchar(255) DEFAULT NULL,
  `erp_paper_type` varchar(255) DEFAULT NULL,
  `erp_paper_description` varchar(255) DEFAULT NULL,
  `erp_subject_name` varchar(255) DEFAULT NULL,
  `erp_subject_description` varchar(255) DEFAULT NULL,
  `erp_paper_format` varchar(255) DEFAULT NULL,
  `erp_format_description` varchar(255) DEFAULT NULL,
  `erp_commission_level` varchar(255) DEFAULT NULL,
  `erp_language_name` varchar(255) DEFAULT NULL,
  `erp_resource_materials` varchar(255) DEFAULT NULL,
  `erp_resource_file` varchar(255) DEFAULT NULL,
  `erp_number_Pages` varchar(255) DEFAULT NULL,
  `erp_spacing` varchar(255) DEFAULT NULL,
  `erp_powerPoint_slides` varchar(255) DEFAULT NULL,
  `erp_extra_source` varchar(255) DEFAULT NULL,
  `erp_deadline` varchar(255) DEFAULT NULL,
  `erp_copy_sources` varchar(255) DEFAULT NULL,
  `erp_page_summary` varchar(255) DEFAULT NULL,
  `erp_paper_outline` varchar(255) DEFAULT NULL,
  `erp_abstract_page` varchar(255) DEFAULT NULL,
  `erp_statistical_analysis` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `language_styles`
--

CREATE TABLE `language_styles` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_language_name` varchar(255) DEFAULT NULL,
  `erp_status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language_styles`
--

INSERT INTO `language_styles` (`id`, `erp_user_id`, `erp_language_name`, `erp_status`, `created_at`, `updated_at`) VALUES
(3, 1, 'American English', '1', '2021-12-25 23:12:03', '2022-03-29 13:11:49'),
(5, 1, 'British English', '1', '2022-03-29 13:11:29', '2022-03-29 13:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `reciever_id` int(10) UNSIGNED DEFAULT NULL,
  `sender_id` int(10) UNSIGNED DEFAULT NULL,
  `team_id` int(11) UNSIGNED DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `commission_id` int(10) UNSIGNED DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `erp_file` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `message_for_receiver` longtext DEFAULT NULL,
  `message_for_sender` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `reciever_id`, `sender_id`, `team_id`, `order_id`, `commission_id`, `subject`, `description`, `erp_file`, `status`, `message_for_receiver`, `message_for_sender`, `created_at`, `updated_at`, `deleted_at`) VALUES
(258, 131, 1, 98, 598, 77, 'Hey This is subject', 'Hey i have query lorem ipsum dollar emmit', NULL, 0, NULL, NULL, '2022-12-26 21:59:34', '2022-12-26 21:59:34', NULL),
(259, NULL, 137, 98, 604, 73, 'hhhhhhhhhh', 'dasdasd', '1698817775778.docx', NULL, NULL, NULL, '2023-11-01 10:49:35', '2023-11-01 10:49:35', NULL);

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
(5, '2021_09_09_100528_create_quizzes_table', 1),
(6, '2021_09_09_101847_create_questions_table', 1),
(7, '2021_09_10_123454_create_question_datas_table', 1),
(8, '2021_09_13_064636_create_academic_levels_table', 1),
(9, '2021_09_13_121632_create_subject_types_table', 1),
(10, '2021_09_13_124420_create_paper_format_table', 1),
(11, '2021_09_15_085350_create_work_flow_table', 1),
(12, '2021_09_15_091716_create_paper_types_table', 1),
(13, '2021_09_15_122439_create_commission_table', 1),
(14, '2021_09_15_124332_create_document_types_table', 1),
(15, '2021_09_15_144239_create_citation__styles_table', 1),
(16, '2021_09_15_145903_create_announcements_table', 1),
(17, '2021_09_16_094546_create_language_styles_table', 1),
(18, '2021_09_16_095822_create_add_commission_table', 1),
(19, '2021_09_17_102119_create_user_roles_table', 1),
(20, '2021_09_21_122155_create_roles_assigns_table', 1),
(21, '2021_09_23_111804_create_assignquiz_table', 1),
(22, '2021_09_24_130645_create_worker_quiz_answers_table', 1),
(23, '2021_09_25_084644_create_create_orders_table', 1),
(24, '2021_09_25_104450_create_panelties_table', 1),
(25, '2021_09_27_094559_create_in_progress_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0000ebec-a7f4-42d3-a7c5-57d9d9b6b5cd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"529\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-26 17:15:57', '2022-05-26 17:15:57'),
('00375323-4687-43e4-90a3-9d801e4eb889', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"446\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 446\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 17:51:38', '2022-04-09 17:51:38'),
('0042fba7-f75e-41b1-849d-8c6644291b0c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:55:54', '2022-05-16 19:55:54'),
('004eaa2d-dfd7-4f9e-bb29-4dbc45bc3777', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 14:47:18', '2022-04-18 14:47:18'),
('005bf9f3-525e-41e0-92f0-9b8c4252ebe4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:34', '2022-05-10 17:28:34'),
('0082753e-7f29-414f-91bb-3364fe783ff9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:48', '2022-04-28 14:11:48'),
('00862ba2-d12b-4af5-b4c5-5d137a137784', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"Worker has Claimed on Order ID Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-06 14:58:17', '2022-04-06 14:58:17'),
('00b37d3f-7423-4482-97d6-a5a039f15132', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:11', '2022-03-24 18:17:11'),
('00c38afc-8414-4b87-a0ad-90006a2382b7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:48', '2022-04-28 14:28:48'),
('00c93880-0c4d-4c49-ae5c-06f47e17ab8b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":522,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-20 19:43:20', '2022-05-20 19:43:20'),
('014fca85-d431-4b77-90a4-dbb737057943', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"365\",\"msg\":\"Worker has Claimed on Order ID Order ID- 365\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/365\"}', NULL, '2022-03-25 00:17:33', '2022-03-25 00:17:33'),
('01855b36-bb28-46ca-8d14-ed70db4f4cf6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:07:58', '2022-05-20 19:07:58'),
('018827a3-03fe-480d-bfb2-de96cf97c0b5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:26', '2022-04-27 14:33:26'),
('01a871a9-47e9-4def-929f-e5d9bb4a56ad', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:16:14', '2022-05-16 20:16:14'),
('01c27b7f-3b93-44b5-8cb9-449a20d59809', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"422\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 16:43:27', '2022-04-07 16:43:27'),
('020ccc45-3278-4279-bd13-fd0191651240', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:10', '2022-03-25 00:27:10'),
('022bc444-91f7-490f-906a-d7bfbf7d5446', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"586\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-14 18:51:07', '2022-06-14 18:51:07'),
('02358fee-8448-4c2e-9d99-33389e0a23be', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:13:48', '2022-04-07 00:13:48'),
('02457b29-4f36-4223-b4c3-a6a0e4964e76', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":538,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-03 16:22:06', '2022-06-03 16:22:06'),
('0250c8ed-27b6-4247-b3df-bd54f809c062', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"439\",\"msg\":\"A File has been uploaded for admin for  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:11:59', '2022-04-08 16:11:59'),
('025b0079-6267-48ad-8cd2-ff5861c44917', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"454\",\"msg\":\"A File has been uploaded for admin for  Order ID- 454\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/454\"}', NULL, '2022-04-13 12:20:58', '2022-04-13 12:20:58'),
('027a3e56-28e9-48b8-bef3-671a9188c182', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:41:55', '2022-04-12 23:41:55'),
('0296354e-a630-4a4f-a389-8989ef33ab66', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:41:35', '2022-04-12 23:41:35'),
('029b0b70-686f-47ca-942b-f39886b095bc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:14', '2022-05-20 17:57:14'),
('02f21f0d-4859-4afc-b496-c1018e440b8d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"434\",\"msg\":\"A File has been uploaded for admin for  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 13:37:30', '2022-04-08 13:37:30'),
('03177529-5556-48ad-9ee8-ab5cad947feb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:07:15', '2022-05-20 19:07:15'),
('032a878d-b049-43b0-b1ee-5f81e3a77186', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:42:12', '2022-03-24 19:42:12'),
('03315759-17fb-4292-ac74-8aa7a9e675d9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:34:37', '2022-04-28 14:34:37'),
('03350d65-b5a1-4d5e-b4ff-2437c10b7a32', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"444\",\"msg\":\"A File has been uploaded for admin for  Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 15:45:27', '2022-04-09 15:45:27'),
('035201dd-e610-4d4d-a270-905e9342f4a6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:45', '2022-03-24 18:16:45'),
('03696bbb-9ae3-464e-8f7a-3df5f692fb3a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"533\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 19:43:38', '2022-05-29 19:43:38'),
('037462d8-3315-4988-84e4-58c788bf50a2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"599\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2023-02-15 23:19:58', '2023-02-15 23:19:58'),
('03cb52af-a5bd-4695-802c-a0a4d36d7525', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:58:57', '2022-04-22 11:58:57'),
('03dae632-76ec-49ea-b53e-1d8d55b039ba', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"486\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 13:38:42', '2022-04-28 13:38:42'),
('03e657ac-61ba-489b-b2b9-b816422b6253', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"433\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:12:32', '2022-04-08 13:12:32'),
('03ebcec6-88a6-4a66-a080-9806c0f077f5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"421\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-01 18:25:53', '2022-04-01 18:25:53'),
('03ef4bcb-04c1-4012-a954-ab300ec073ff', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"20\",\"msg\":\"Your Page request has been Approved Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/355\"}', NULL, '2022-03-24 17:42:28', '2022-03-24 17:42:28'),
('04174200-385e-4855-aeec-a1c4521d6b25', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:23', '2022-05-16 19:57:23'),
('0418a8e3-0137-474a-98d2-29d56307bd27', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:10', '2022-05-16 19:49:10'),
('041a3bfd-0c5f-4be8-a8bf-8f45802a319b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"492\",\"msg\":\"Worker has bid on Order ID- 492\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:27:46', '2022-04-28 14:27:46'),
('0430528c-a901-4117-b936-1243184c6726', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 14:47:27', '2022-04-18 14:47:27'),
('045ccf3d-e473-4d34-ac1e-0e52ee093d78', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"363\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:00:49', '2022-03-25 00:00:49'),
('046f1e9d-338b-4192-8676-6c1347a9ee0f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"589\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 589\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-06-15 17:19:55', '2022-06-15 17:19:55'),
('04769d0d-8ed1-4f63-b4c6-f6635d32a1fb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"451\",\"msg\":\"Worker has bid on Order ID- 451\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-12 14:39:08', '2022-04-12 14:39:08'),
('0477611e-6a6b-4c76-911d-0b99b02a5f29', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:55:30', '2022-05-16 19:55:30'),
('049b9380-81f7-4fa4-9363-0b83463fd946', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"348\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-03 18:57:58', '2022-03-03 18:57:58'),
('04a19105-ab34-46b3-8062-e4a7ea05ee38', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"522\",\"msg\":\"A File has been uploaded for admin for  Order ID- 522\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/522\"}', NULL, '2022-05-20 19:46:49', '2022-05-20 19:46:49'),
('04b9bf72-dad3-44d4-81c9-75cd46876cca', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:24', '2022-05-16 19:57:24'),
('04c32222-88cc-42fd-8d7e-7eea60338bd5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":481,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-23 13:10:07', '2022-04-23 13:10:07'),
('05431489-9f96-4a59-bdc3-cb602865198f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"Worker has Claimed on Order ID Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 16:40:19', '2022-04-07 16:40:19'),
('0547f360-db54-4ee3-8213-85381d974a77', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":452,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-12 14:59:53', '2022-04-12 14:59:53'),
('05613b96-8e74-4a35-8a13-111285a5d68e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:26:14', '2022-03-04 11:26:14'),
('05663503-829b-4f99-84aa-bb163ae69319', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":355,\"msg\":\"A File Message has been uploaded for Order ID 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/355\"}', NULL, '2022-03-24 17:36:02', '2022-03-24 17:36:02'),
('056ff119-4fb6-44cd-91f7-b8a7fa3bd5a5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:36', '2022-05-10 19:32:36'),
('05700228-dbf4-4bc0-b64e-6975fa7a0b50', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"480\",\"msg\":\"Worker has Claimed on Order ID Order ID- 480\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/480\"}', NULL, '2022-04-25 16:45:30', '2022-04-25 16:45:30'),
('05ad0bbf-4ab0-4dbc-8f7d-cfd6e91c0999', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:07:06', '2022-04-13 16:07:06'),
('05c4bf42-2fb2-46de-8f7f-436c4f285623', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"571\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:33:01', '2022-06-11 16:33:01'),
('05cae3ba-382c-4b90-ad22-91e94e328b6c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 13:09:35', '2022-04-18 13:09:35'),
('05d3de37-6b67-4600-a5ef-57121e732e48', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"430\",\"msg\":\"Worker has Claimed on Order ID Order ID- 430\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/430\"}', NULL, '2022-04-08 12:21:43', '2022-04-08 12:21:43'),
('05d3fedf-68bd-4dd2-92f1-930f47e62cee', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"551\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 20:16:52', '2022-06-03 20:16:52'),
('060a9911-6562-4c21-80ef-3ee43a2441b7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"490\",\"msg\":\"Worker has bid on Order ID- 490\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:14:13', '2022-04-28 14:14:13'),
('062536d4-a810-4c11-9c39-9e5fb1b9be6e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"571\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:33:08', '2022-06-11 16:33:08'),
('0625ef06-da7b-4094-8dbe-9c4424528f8b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"442\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 13:34:47', '2022-04-09 13:34:47'),
('062987c4-c82f-4afe-bc9e-85fad7ac8e27', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"524\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 17:11:10', '2022-05-22 17:11:10'),
('06377a18-f778-4d2b-9789-ae06b46d8df5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"581\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:52:42', '2022-06-11 20:52:42'),
('066fe2f9-a75b-4b7f-973a-31ac4a6adc79', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"522\",\"msg\":\"A File has been uploaded for admin for  Order ID- 522\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/522\"}', NULL, '2022-05-20 19:46:49', '2022-05-20 19:46:49'),
('0684b129-99fd-485c-a127-15720e254318', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"434\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:36:01', '2022-04-08 13:36:01'),
('06ea2a1a-71a1-4e42-aebe-68a1e357b870', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"490\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:12:03', '2022-04-28 14:12:03'),
('07517dd9-29cb-4cc3-8a21-c10949a95cfd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"568\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 15:45:55', '2022-06-11 15:45:55'),
('075f6ad4-1e81-4ecd-9263-0f180b5df3c5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:26:04', '2022-04-18 12:26:04'),
('078b69ed-f5a5-48c2-b328-abbff0bed0d1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"439\",\"msg\":\"A File has been uploaded for admin for  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:12:02', '2022-04-08 16:12:02'),
('079ac4c9-ec62-4142-bf32-f81fea077e87', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"360\",\"msg\":\"Worker has Claimed on Order ID Order ID- 360\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/360\"}', NULL, '2022-03-24 19:05:45', '2022-03-24 19:05:45'),
('07a6fec9-edc0-4732-9375-2f71d914be01', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"356\",\"msg\":\"A File has been uploaded for admin for  Order ID- 356\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/356\"}', NULL, '2022-03-24 18:14:10', '2022-03-24 18:14:10'),
('07b49eb8-4b44-4a45-ad47-0850f20dc596', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"481\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-23 13:10:28', '2022-04-23 13:10:28'),
('07bacc3c-1b51-47bf-ba70-67462ac8d39f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"486\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 13:38:39', '2022-04-28 13:38:39'),
('07ca18e0-17d0-4593-97b7-02ff4a681b96', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"356\",\"msg\":\"Order has been  completed  Order ID- 356\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/356\"}', NULL, '2022-03-24 18:14:23', '2022-03-24 18:14:23'),
('07cbbc15-2fd8-475e-aa59-e8e2929281ab', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"360\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:29:31', '2022-03-24 18:29:31'),
('07e58ab1-466e-4800-b591-ff25e05bc782', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"440\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 16:32:37', '2022-04-08 16:32:37'),
('07ebb596-9771-4ecd-b10e-1619457d1c68', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"Worker has Claimed on Order ID Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-05 11:16:53', '2022-04-05 11:16:53'),
('08131a6e-a38d-45fa-8d8c-9ae0991dcc17', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:07:23', '2022-04-13 16:07:23'),
('081fe55f-a0d6-42af-ac7b-90d71cbe137a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:09', '2022-03-23 13:43:09'),
('085f4011-5793-45ca-918a-c502c84bdfaa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"549\",\"msg\":\"Worker has Claimed on Order ID Order ID- 549\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/549\"}', NULL, '2022-06-03 20:00:10', '2022-06-03 20:00:10'),
('08b82851-5c0e-4c7a-a783-9b1796d75ae6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"439\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:37:24', '2022-04-08 15:37:24'),
('08c475b6-a5d6-4e0f-abfe-005c48d49bd9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:32', '2022-05-16 19:56:32'),
('08e4cefc-df1b-4e85-bec0-70f3d6339a51', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:23:38', '2022-04-28 14:23:38'),
('08ea852b-fef6-4a29-b845-255da2d36b32', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:35', '2022-03-25 00:27:35'),
('091dbfb0-5b84-4cd5-830e-87db944ab798', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"452\",\"msg\":\"A File has been uploaded for admin for  Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-12 15:14:04', '2022-04-12 15:14:04'),
('093a8994-5b15-486e-b6cd-059ea3a1c5d0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"576\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:44:19', '2022-06-11 20:44:19'),
('09735595-74bd-4740-b2a8-3834e449fe38', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:33:10', '2022-03-24 19:33:10'),
('09ad71f5-3246-4792-8524-33ffafdcd6fb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:51', '2022-05-16 19:42:51'),
('0a23c949-4ec3-4e4e-8dea-d2c22db0aeb5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"574\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:29:14', '2022-06-11 20:29:14'),
('0a3fc70c-d7dc-4f56-9ee6-27b81360c830', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:45', '2022-04-18 11:50:45'),
('0a61526a-cb81-4e49-828a-65064a363af3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"Order has been  completed  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 15:27:36', '2022-04-18 15:27:36'),
('0a7113ca-e56c-4203-b68e-04d3e0727d97', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:55', '2022-03-24 18:16:55'),
('0a75a0da-0b66-445d-84a4-88a3a51907a4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:59:03', '2022-04-27 13:59:03'),
('0aa7fb20-273e-46ae-9667-1f2bbf9d91b3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"365\",\"msg\":\"Worker has Claimed on Order ID Order ID- 365\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/365\"}', NULL, '2022-03-25 00:17:39', '2022-03-25 00:17:39'),
('0abda465-6ed4-4db7-b646-7b164eb20d6b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"423\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 21:36:04', '2022-04-07 21:36:04'),
('0ac66cb9-c020-4d31-93f7-d30742263159', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"427\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 22:40:24', '2022-04-07 22:40:24'),
('0accacdb-ce00-40d6-be2f-d509a61bc44c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 94, '{\"order_id\":\"416\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-01 14:50:26', '2022-04-01 14:50:26'),
('0af14771-4524-4ca0-ba82-1452838d24ea', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"435\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:03:11', '2022-04-08 15:03:11'),
('0b288b3c-a559-4f18-8620-5bb47cc28809', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"538\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:21:27', '2022-06-03 16:21:27'),
('0b2e7f79-1a4c-4a09-b4f0-ef3e73c13c05', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:27', '2022-03-24 18:17:27'),
('0b2efd09-fa3b-4ad5-87e3-f6a8ef94e0d5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"436\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:06:23', '2022-04-08 15:06:23'),
('0b35fd5e-0ad6-470f-ac0a-77654d6a52e6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":507,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-13 19:55:50', '2022-05-13 19:55:50'),
('0b3b8c5f-de74-4a1f-bfcf-9f958564e25f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:49:57', '2022-04-09 17:49:57'),
('0b43d655-b83c-4293-8b73-c5034eee9bb9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":520,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-20 19:49:32', '2022-05-20 19:49:32'),
('0b48e5ce-b9c5-404b-8072-38fac6e7a7f3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"434\",\"msg\":\"A File has been uploaded for admin for  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:01:09', '2022-04-08 15:01:09'),
('0b4bb099-a5fa-4501-90cc-e67dd8e7baa6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 14:50:12', '2022-04-18 14:50:12'),
('0b4dbcbe-8362-4a3d-8f26-6a8726dc659b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:59:09', '2022-04-22 11:59:09'),
('0b54cafe-9ea3-4a83-a1d7-cafe0ba09bad', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:35:12', '2022-04-28 14:35:12'),
('0b7145e1-35b9-43cb-a4a8-df65ac6c7727', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"568\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 15:45:51', '2022-06-11 15:45:51'),
('0b7cc11f-7668-4b8c-9f45-943071b051dc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:07:49', '2022-05-20 19:07:49'),
('0b8bce51-f206-4294-beac-39a2de31c7ff', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"434\",\"msg\":\"Worker has Claimed on Order ID Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 13:36:53', '2022-04-08 13:36:53'),
('0bdd41e1-100d-4e82-bf62-fb1a6e49fc79', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:22', '2022-05-16 19:58:22'),
('0be78b0d-ea8b-4391-9615-29e8607b011e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:42', '2022-04-28 14:30:42'),
('0bf1423a-145e-4dd0-ab57-7d8e6acbf5cb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"440\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 440\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-08 16:36:53', '2022-04-08 16:36:53'),
('0c046d77-6546-4c82-a307-dec0e68923dd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"554\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 20:20:19', '2022-06-03 20:20:19'),
('0c17e614-0a6e-4034-88dc-7ef761f7ded2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"452\",\"msg\":\"A File has been uploaded for admin for  Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-12 15:14:11', '2022-04-12 15:14:11'),
('0c206588-8cde-44d3-b779-dfad2c145013', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"439\",\"msg\":\"A File has been uploaded for admin for  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:04:41', '2022-04-08 16:04:41'),
('0c72ccdb-a64e-4fe1-a39a-463f6a2b8083', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:28:02', '2022-03-25 00:28:02'),
('0cb6c964-6553-459a-9790-e0f3f4e5fbf7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:56', '2022-05-16 19:42:56'),
('0ce1de3b-46bc-4195-8d99-e44098f3c51f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:34:47', '2022-04-28 14:34:47'),
('0ce7f13f-1a28-4ef4-a2a8-cbb201ec64c5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:49:41', '2022-04-18 11:49:41'),
('0d3f2cac-5a5f-4659-88a9-0cc8353a029b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:57', '2022-05-10 19:32:57'),
('0d586d81-b62e-460b-85d9-d2234e91ff0e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"582\",\"msg\":\"Worker has Claimed on Order ID Order ID- 582\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/582\"}', NULL, '2022-06-13 19:01:08', '2022-06-13 19:01:08'),
('0d7e350e-2438-4e00-a108-ec50a5a2f554', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:30', '2022-03-24 18:17:30'),
('0d86c2c9-8acb-4407-b805-10c0db7b315d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"442\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 13:35:21', '2022-04-09 13:35:21'),
('0d8bbb86-9dab-41bc-b98f-93019fcaffce', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:59', '2022-03-24 18:16:59'),
('0d9c60ce-d7cc-4806-8a3b-ce13437f385c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:26:36', '2022-03-25 00:26:36'),
('0dba5438-3a82-4e61-9b82-6d204399b017', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"440\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 16:32:26', '2022-04-08 16:32:26'),
('0dbf7bff-01bf-40ef-9abb-79182f7a7ed8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:30:42', '2022-03-24 19:30:42'),
('0e454240-6827-40fb-9a08-68dd533e7aea', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:25:31', '2022-03-04 11:25:31'),
('0e462b84-33dd-4459-8c53-6936b6846a86', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"445\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 16:42:54', '2022-04-09 16:42:54'),
('0e59fb51-28e0-4f4f-ac15-51845033b95c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"442\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 13:34:53', '2022-04-09 13:34:53'),
('0e5a9b13-1f8b-4f87-a7c1-1123532def61', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:59', '2022-04-27 14:33:59'),
('0e5d59a3-3a6f-4e1a-8001-4e297048d026', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"425\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 21:56:44', '2022-04-07 21:56:44'),
('0ec70b2a-26e2-4b05-a411-a1a7b6b30db1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 14:47:21', '2022-04-18 14:47:21'),
('0f19d60b-7031-460c-8c51-9e32726d402b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"353\",\"msg\":\"Worker has Claimed on Order ID Order ID- 353\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/353\"}', NULL, '2022-03-23 13:44:29', '2022-03-23 13:44:29'),
('0f29dacf-b228-455a-b7b4-45c050478196', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"481\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-23 13:09:39', '2022-04-23 13:09:39'),
('0f37554c-7548-4e77-ae6b-7b849533e895', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"444\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 14:51:03', '2022-04-09 14:51:03'),
('0f3e20c7-fcf1-4a99-83e9-39b0d4e0f281', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:44', '2022-05-10 17:28:44'),
('0f515251-a4f1-4260-877d-b137d5da9927', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 11:55:31', '2022-04-07 11:55:31'),
('0f5b6c13-c89f-44a4-8592-91e4b7ee66d9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"452\",\"msg\":\"A File has been uploaded for admin for  Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-12 15:14:21', '2022-04-12 15:14:21'),
('0f5b9964-7b35-44ad-b926-61eb994042c1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:34', '2022-04-28 14:11:34'),
('0f64caf0-d3d9-42ad-afab-7c9e4fdcee60', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"569\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:04:36', '2022-06-11 16:04:36'),
('0f9b687c-6fdd-46d0-8cb1-79e511bd2aa0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"528\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 20:19:39', '2022-05-22 20:19:39'),
('0f9ceb13-6045-4a24-9b08-615f977c40ce', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:30', '2022-04-28 14:30:30'),
('0fc44685-99fb-487e-8f1e-b6c54c8a7dd7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"524\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 524\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-05-22 18:18:03', '2022-05-22 18:18:03'),
('0fc463c3-3910-4a96-be96-e66121dfe287', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"574\",\"msg\":\"Worker has bid on Order ID- 574\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-11 20:35:46', '2022-06-11 20:35:46'),
('0fc824dd-4b74-45a6-bc40-5345d04c68b6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"348\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-03 18:56:55', '2022-03-03 18:56:55'),
('0feedbbf-8e58-4bba-bc95-2082ae91d71a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":452,\"msg\":\"A File Message has been uploaded for Order ID 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/452\"}', NULL, '2022-04-12 15:02:14', '2022-04-12 15:02:14'),
('1002575e-7dc6-4ea3-9f1f-129d95a8a397', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:54', '2022-04-28 14:11:54'),
('1062ad8a-afb8-489b-975d-bf420c7d298f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"356\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 356\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 17:51:29', '2022-03-24 17:51:29'),
('1068943b-9cfc-49d1-8f5a-5a9adfffe703', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:26', '2022-05-16 19:58:26'),
('106b84bc-cad3-4479-b0db-146b15ab172c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:10:53', '2022-03-25 00:10:53'),
('107ab4c9-3e1e-4785-b585-d2c0b405e185', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"597\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 11:58:34', '2022-09-12 11:58:34'),
('109852bc-45ae-4caf-b2ff-71bc2c6903c6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"571\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:32:59', '2022-06-11 16:32:59'),
('10a06aa2-b641-4670-93bd-21143acaad35', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"584\",\"msg\":\"Worker has Claimed on Order ID Order ID- 584\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/584\"}', NULL, '2022-06-12 09:57:32', '2022-06-12 09:57:32'),
('10a0f3d0-4fab-43c6-9b5e-9cd65531f848', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:13:31', '2022-04-08 15:13:31');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('10a8ab77-f10e-4ee3-af38-919fe1d374c0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 94, '{\"order_id\":\"420\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-01 18:05:24', '2022-04-01 18:05:24'),
('10c7283f-40ae-466b-bf2a-975faecb0251', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 137, '{\"order_id\":604,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"https:\\/\\/writing-space.com\\/wms\\/public\\/in-progress-orders\"}', NULL, '2023-10-16 19:34:26', '2023-10-16 19:34:26'),
('10d38665-58de-42e4-a534-5f2e24d83afd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:16', '2022-03-24 18:17:16'),
('10d784ed-6e5e-4d5d-8e69-19b1f6276b76', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"423\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 21:36:11', '2022-04-07 21:36:11'),
('10e19ec8-88e3-43ff-9326-f6a992e087aa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"520\",\"msg\":\"Worker has Claimed on Order ID Order ID- 520\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/520\"}', NULL, '2022-05-20 19:49:37', '2022-05-20 19:49:37'),
('10f43baa-4ecd-4a9b-b827-7b702cac0fa1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:07:42', '2022-04-18 12:07:42'),
('10fd5473-0d1c-448a-b378-eb4a14a97442', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"439\",\"msg\":\"Worker has Claimed on Order ID Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:09:46', '2022-04-08 16:09:46'),
('111adfea-36dd-435b-89f7-d6fd8acd8d1f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"368\",\"msg\":\"Worker has Claimed on Order ID Order ID- 368\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/368\"}', NULL, '2022-03-25 00:28:09', '2022-03-25 00:28:09'),
('1188d8ed-9968-43d1-aa50-6bf609299782', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:34:20', '2022-04-28 14:34:20'),
('11c6f41f-fb1f-46cc-a90d-e37c8ac8f031', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"590\",\"msg\":\"Worker has bid on Order ID- 590\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-16 18:47:31', '2022-06-16 18:47:31'),
('121170cf-1eac-41b0-8b10-9fc33921446e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"368\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:45', '2022-03-25 00:27:45'),
('1279a19c-5c14-45d7-8efe-2f225a1e994f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:36', '2022-03-24 18:16:36'),
('12880118-8010-4e32-bbfd-7c90773bb794', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:25', '2022-05-16 19:58:25'),
('12967e26-0bfb-4ab7-aeb1-798a1f969a7c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:12', '2022-03-24 18:16:12'),
('12b9066a-8a9a-4f1b-9d3d-2edc16668a23', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:59:11', '2022-04-22 11:59:11'),
('12d7a3c6-6e4a-41cf-adaf-65db81850e5d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:55:40', '2022-05-16 19:55:40'),
('13470787-e948-4725-92f8-6012f313063e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:35', '2022-05-16 19:49:35'),
('13876093-5db1-48eb-a1e0-e6ad965cee3b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:48', '2022-03-24 18:16:48'),
('139b203e-fac7-4378-b39f-04d18dd4bc73', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:04', '2022-05-16 19:58:04'),
('13aac1b6-2499-4fbb-b902-153bfca0f4fc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"438\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:12:40', '2022-04-08 15:12:40'),
('13c557cc-ca81-4d50-b028-f00eb9d1902e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"422\",\"msg\":\"Worker has Claimed on Order ID Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 17:17:51', '2022-04-07 17:17:51'),
('13f63a4b-4f9c-4adb-968c-19b3c394443a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:18', '2022-05-16 19:58:18'),
('14108b21-1d31-4da0-b2ab-22ce1337ae15', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:26:58', '2022-03-25 00:26:58'),
('14278ecb-1e62-45b0-84a7-fe003cfba67a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"538\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:21:28', '2022-06-03 16:21:28'),
('143693dd-81d4-41a5-b282-f5ea5ce64fb3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"435\",\"msg\":\"A File has been uploaded for admin for  Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/435\"}', NULL, '2022-04-08 15:06:20', '2022-04-08 15:06:20'),
('143bd454-fc8f-4b44-95b4-ab5f19ee209d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"444\",\"msg\":\"Worker has Claimed on Order ID Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 15:48:05', '2022-04-09 15:48:05'),
('143c903e-e846-433b-b115-da89ea49982d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"529\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-26 17:16:02', '2022-05-26 17:16:02'),
('1477145b-d11b-4f11-ac7b-769358800c2b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"439\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:37:14', '2022-04-08 15:37:14'),
('1496e82e-78c7-4581-b964-f36c946c0e59', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"423\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 21:36:03', '2022-04-07 21:36:03'),
('14e68fa5-0ce8-4002-94cc-a5d211932d73', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:25:47', '2022-03-04 11:25:47'),
('14fab3ec-9087-4b2d-9d26-f21ad42c6384', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"429\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 429\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-07 22:55:25', '2022-04-07 22:55:25'),
('14fc62c2-9764-445d-b929-ba53287072a1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":527,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-22 19:37:50', '2022-05-22 19:37:50'),
('1515307c-a2ab-4f4b-8d16-861f0d16d6ab', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"490\",\"msg\":\"Worker has bid on Order ID- 490\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:14:02', '2022-04-28 14:14:02'),
('1539f9af-dd03-4521-a497-eedd214ab1e0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:51', '2022-05-10 19:32:51'),
('15a06edf-4a63-41f3-b4a0-2bafc92d2b34', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:30', '2022-05-16 19:57:30'),
('15a6a539-198e-49b5-bb23-b6806cfdc00b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:30', '2022-05-20 17:58:30'),
('15fc57c8-05ea-4f1b-8edd-01a1a61d5e5a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:50:28', '2022-04-09 17:50:28'),
('161a760c-9490-4361-96c3-e3b38e0d14ac', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:59:00', '2022-04-22 11:59:00'),
('164e8a7f-41e0-48cd-bd9b-b0336efc1695', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:05:16', '2022-04-18 16:05:16'),
('1665c043-de6b-4a96-a3cb-c45c984cfe62', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:58:29', '2022-04-18 12:58:29'),
('167abbc0-9495-42c8-87ac-83cbc22150fe', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"433\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:12:20', '2022-04-08 13:12:20'),
('1687b260-0f1e-477c-90c9-2595091251d3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 13:03:16', '2022-03-24 13:03:16'),
('16c9a4b0-95e7-483a-86de-b7bba69fb37c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 18:14:30', '2022-05-10 18:14:30'),
('16d2c405-8cc1-4685-ad88-aeae125e8852', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"593\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:38:29', '2022-06-16 19:38:29'),
('174763af-2105-457c-a516-950d369fc6fc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"348\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 348\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-04 11:23:55', '2022-03-04 11:23:55'),
('174fc2a0-8c68-4eec-b0a3-cdd0e17e1155', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:50', '2022-05-20 19:26:50'),
('175e0efb-1dfb-4c38-a8c6-84d46018bac7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"445\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 16:43:31', '2022-04-09 16:43:31'),
('178251c1-b62f-45eb-95da-9dc63a5683aa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"494\",\"msg\":\"Worker has bid on Order ID- 494\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:30:12', '2022-04-28 14:30:12'),
('1785dd1c-444f-4f34-a4f7-afecc7a51aff', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:31', '2022-05-10 17:28:31'),
('179e2d8d-629d-4ead-abba-e92c7fd165d9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"569\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:04:35', '2022-06-11 16:04:35'),
('17f60d27-faa1-4126-9f64-d425911904ce', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"439\",\"msg\":\"Order has been  completed  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:20:39', '2022-04-08 16:20:39'),
('181d5e9f-cab7-4e25-b633-32ac57e40f1e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:31:57', '2022-03-24 19:31:57'),
('183cdc01-54af-47ca-9c30-4da4d7069bbd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:45', '2022-04-28 14:30:45'),
('184251a8-a3fa-4954-9c43-f1cd46e54aa1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"528\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 20:19:40', '2022-05-22 20:19:40'),
('184ef896-2dfb-4163-b75c-bffd91d3ced5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"532\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 19:02:40', '2022-05-29 19:02:40'),
('188797ae-22a2-4536-8274-9cfb243e6bb9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:49', '2022-05-20 19:26:49'),
('18d0c263-f9d6-484f-a876-5c97b0356656', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:13', '2022-05-16 19:56:13'),
('191fdaca-6044-4f49-a952-5ff1ba49ae3f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 13:14:36', '2022-04-18 13:14:36'),
('192786d3-4bd0-40e1-b194-04b6f5b940f5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"542\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 17:06:08', '2022-06-03 17:06:08'),
('19564b76-d538-440a-8d80-ab1a60d8311f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"541\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:47:47', '2022-06-03 16:47:47'),
('195b8cd9-551a-45c1-acf6-770959963f4a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:33', '2022-05-16 19:57:33'),
('197e0c10-adce-4088-8faa-aad16e93e14b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"477\",\"msg\":\"A File has been uploaded for admin for  Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 14:45:31', '2022-04-18 14:45:31'),
('199beace-9605-488d-afbc-7718512b8253', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:59', '2022-03-25 00:27:59'),
('19a008a4-1045-4ef5-a8d4-608d14a9504d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"439\",\"msg\":\"Order has been  completed  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:25:35', '2022-04-08 16:25:35'),
('19b03a89-d2c5-456d-a1ac-3c69973bbcc4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:37:20', '2022-03-24 19:37:20'),
('19bae059-0e4b-4617-883f-4d4b5da94e6f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:35', '2022-04-27 14:33:35'),
('19c3c71a-18b9-4464-bb07-7250fc43f351', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:53', '2022-03-25 00:27:53'),
('19d4c927-6225-414e-bf24-0916950a5bcd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"439\",\"msg\":\"Order has been  completed  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:20:33', '2022-04-08 16:20:33'),
('19d78268-e2ff-4672-b2b1-105143a460a5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"433\",\"msg\":\"Worker has Claimed on Order ID Order ID- 433\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/433\"}', NULL, '2022-04-08 13:13:01', '2022-04-08 13:13:01'),
('19fcc198-17bd-4c3a-9c4a-f293e8c7d9a6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"587\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-14 20:00:41', '2022-06-14 20:00:41'),
('1a109eb5-dfa3-45bd-8ce0-a4b9dcf39f13', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"444\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 14:50:56', '2022-04-09 14:50:56'),
('1a97220b-4aec-47b9-9a41-5679a90349f2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:55:28', '2022-05-16 19:55:28'),
('1a9c71fb-9154-4850-864d-bc9ac9f4a7ce', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:21', '2022-05-16 19:56:21'),
('1a9eb30f-37c9-4abf-955f-66af29bbaa5c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"433\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:12:14', '2022-04-08 13:12:14'),
('1aa91e3c-e590-4161-8299-c42189fd400c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":439,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-08 16:09:32', '2022-04-08 16:09:32'),
('1ab5642e-4bc4-4d59-bfb0-8048244b46e3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-05 16:36:07', '2022-04-05 16:36:07'),
('1aef3368-228f-4b2c-a356-66631c7684ba', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"477\",\"msg\":\"A File has been uploaded for admin for  Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:54:24', '2022-04-18 12:54:24'),
('1af85dfa-d7fb-4c45-8983-e0a85d5de732', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"359\",\"msg\":\"A File has been uploaded for admin for  Order ID- 359\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/359\"}', NULL, '2022-03-24 18:19:41', '2022-03-24 18:19:41'),
('1af97240-8288-40d7-b9c0-04f5b52e8fe8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"490\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:12:15', '2022-04-28 14:12:15'),
('1b0780c8-6f03-4851-82a3-2ecc577063bf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"438\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:13:12', '2022-04-08 15:13:12'),
('1b224610-817d-4766-9eae-544f667af5be', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:26:15', '2022-03-04 11:26:15'),
('1b23663d-0f98-4e8f-af78-5c10d77771b2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"452\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:56:34', '2022-04-12 14:56:34'),
('1b676cba-4578-4a4b-9212-14e6b33916a8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:54', '2022-03-24 18:16:54'),
('1b742f0c-f4fb-4082-a50f-a7f96e1b6ec5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"355\",\"msg\":\"Worker has Claimed on Order ID Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/355\"}', NULL, '2022-03-24 14:57:15', '2022-03-24 14:57:15'),
('1b8b7dce-b7a9-47e7-a310-f2e0a0e8f16b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"535\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 535\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-06-01 15:09:14', '2022-06-01 15:09:14'),
('1bc932cb-7e12-4fce-92ff-9cb51148fcb9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"454\",\"msg\":\"A File has been uploaded for admin for  Order ID- 454\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/454\"}', NULL, '2022-04-13 12:21:10', '2022-04-13 12:21:10'),
('1bd98323-02d9-4ee4-ac07-0cc40b2ac6c5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:40', '2022-05-20 19:26:40'),
('1c158fa2-09b0-4a3d-af4f-4e03a9f29fc0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"574\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:29:19', '2022-06-11 20:29:19'),
('1c41ddc6-1319-44ee-80d8-d24d5c0b3020', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:25', '2022-05-10 19:32:25'),
('1c533cbd-e2bd-4c62-86af-8ce9d71dd5a5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"452\",\"msg\":\"A File has been uploaded for admin for  Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-12 15:14:24', '2022-04-12 15:14:24'),
('1c5b3064-b289-4772-85e0-6196b20ede63', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"428\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 22:41:10', '2022-04-07 22:41:10'),
('1c7264cc-b4c4-4c9c-9d0a-b9cedc3e6c46', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"540\",\"msg\":\"Worker has Claimed on Order ID Order ID- 540\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/540\"}', NULL, '2022-06-03 16:35:49', '2022-06-03 16:35:49'),
('1c824cf3-c780-48ec-97c6-57c742d8cdf1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"523\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 14:40:51', '2022-05-22 14:40:51'),
('1caa14c9-d295-46a8-a83e-92d73f6996a6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:33', '2022-05-10 17:28:33'),
('1cceac71-970c-43c0-9265-e54dd98d7e37', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:34:57', '2022-04-28 14:34:57'),
('1cded4bf-f7ad-471e-9225-c04e77f6b152', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 15:27:20', '2022-04-18 15:27:20'),
('1d0c814b-3a35-4476-9105-df21c99e8dd8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:24', '2022-04-18 11:50:24'),
('1d23201f-61a8-4b05-b4f7-315e0a7d8983', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"368\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:54', '2022-03-25 00:27:54'),
('1d40b5d9-0cf3-41a4-af4d-774c525b40eb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:11:46', '2022-04-07 00:11:46'),
('1d491ae6-3576-4602-9f1b-13f9b7813327', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:56', '2022-03-25 00:27:56'),
('1d8f52e4-15d8-4c37-a743-ea6cf29addca', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:49:53', '2022-04-09 17:49:53'),
('1dbf5a14-b996-4082-a8c8-bbd9b4f84e43', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"363\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:00:36', '2022-03-25 00:00:36'),
('1dde49b7-5188-4520-ab5c-1fdf2f96afd7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:06:32', '2022-04-13 16:06:32'),
('1df301d0-23cd-431d-a5d8-c683a59bdc98', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:49:54', '2022-04-18 11:49:54'),
('1e2a21ab-8f8e-428c-91c7-0fe563504436', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-06 16:51:14', '2022-04-06 16:51:14'),
('1e2f3b0b-ea47-4e20-be5a-c4bf04ac5fdc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:12:54', '2022-04-08 15:12:54'),
('1e2f3cb3-7df7-4d93-991a-853e8e76c864', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"570\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:28:42', '2022-06-11 16:28:42'),
('1e31beb2-05b5-47da-9311-57d115b8e338', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"590\",\"msg\":\"Worker has bid on Order ID- 590\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-16 18:08:17', '2022-06-16 18:08:17'),
('1e52a769-d1ff-45cf-918e-8c6ce0291d69', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"527\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 19:37:04', '2022-05-22 19:37:04'),
('1eaf73dd-3e42-43b0-b4f5-71a7e690dd61', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"454\",\"msg\":\"Worker has bid on Order ID- 454\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-12 23:42:03', '2022-04-12 23:42:03'),
('1ec37238-3cc3-404d-adc2-94e19a12ec74', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:57', '2022-05-20 17:58:57'),
('1ee23650-fef2-4539-ac2d-ff214129edf0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:05', '2022-03-24 18:17:05'),
('1eead8f0-e5a1-4aea-b539-9424bc1a4e89', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:29:42', '2022-04-28 14:29:42'),
('1f318236-c796-48ba-a0e9-e46c3a428ce6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":479,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-21 17:01:07', '2022-04-21 17:01:07'),
('1f827740-521d-470c-a5a7-edeec5c0db54', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":553,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-09 12:33:37', '2022-06-09 12:33:37'),
('1f832bad-1cf3-4c4c-882a-3ecc55403692', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"424\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 21:55:15', '2022-04-07 21:55:15'),
('1f8fef90-0f55-4409-a24b-650d9d75cbe8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"434\",\"msg\":\"Order has been  completed  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:01:27', '2022-04-08 15:01:27'),
('1fc24535-5dda-4b24-8fa1-c804817b95c6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:06:35', '2022-04-13 16:06:35'),
('20067d06-5670-4e08-a19c-ea4d0a21f37f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:13:37', '2022-04-08 15:13:37'),
('20231546-6f8c-4804-8c5f-753bf1418f26', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:45', '2022-03-25 00:27:45'),
('2025d6aa-2d28-4bbc-9f5e-b35c2851e1d5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"534\",\"msg\":\"A File has been uploaded for admin for  Order ID- 534\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/534\"}', NULL, '2022-05-31 13:16:47', '2022-05-31 13:16:47'),
('2067869a-c3f6-41b3-98d1-1503db46f301', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"574\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:29:17', '2022-06-11 20:29:17'),
('208aca87-8b2b-428f-a673-88b05007ff7c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"513\",\"msg\":\"A File has been uploaded for admin for  Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 17:26:57', '2022-05-20 17:26:57'),
('20a534a9-4ccd-4204-bb6f-7adfd48c82d3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"439\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:37:27', '2022-04-08 15:37:27'),
('20f460e3-7fff-4fb7-bae9-cb5d5e627536', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"381\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-30 19:26:29', '2022-03-30 19:26:29'),
('210b622c-982a-48cb-84b8-6060ff5968d7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"586\",\"msg\":\"Worker has Claimed on Order ID Order ID- 586\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/586\"}', NULL, '2022-06-15 14:22:36', '2022-06-15 14:22:36'),
('211762d5-4836-48ea-b085-3f80ab0d5dae', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"356\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 356\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 17:51:39', '2022-03-24 17:51:39'),
('212a0ab7-2af2-4d9c-bcde-006e8bfeb200', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"358\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:15:24', '2022-03-24 18:15:24'),
('21438a41-e6b6-4367-8e71-94f058a38ea8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:26:40', '2022-03-04 11:26:40'),
('21707747-221f-42de-bdc4-2de4582c6b60', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"598\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 12:04:45', '2022-09-12 12:04:45'),
('219b47ee-43aa-4e71-ba58-03476d8fb2f1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"434\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:35:55', '2022-04-08 13:35:55'),
('21dbe124-8e89-48eb-b1e1-7408367b2875', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:41', '2022-05-20 17:58:41'),
('21ea4129-6cb1-4d0c-bd1b-079a75c879be', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:52', '2022-05-10 19:32:52'),
('220c1d3c-9bd3-4471-a2a0-3a15fee0171c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"445\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 16:42:57', '2022-04-09 16:42:57'),
('2275c5a4-d7ef-4082-b899-cc0e61e08235', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:19', '2022-04-28 14:11:19'),
('228a95a3-19b8-4691-a2f8-70f2be2d41b9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:32', '2022-05-10 19:32:32'),
('229f5bdc-477d-4a9f-a75e-978806d22d58', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"599\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2023-02-15 23:20:00', '2023-02-15 23:20:00'),
('22ab52c3-0b3f-44b8-9ff8-01df746564aa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"360\",\"msg\":\"Worker has Claimed on Order ID Order ID- 360\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/360\"}', NULL, '2022-03-24 19:04:54', '2022-03-24 19:04:54'),
('22d4b081-2646-4317-800a-333d1e0d73fb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"442\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 13:34:44', '2022-04-09 13:34:44'),
('22ef5bfc-f644-4c56-987f-6b0b924d1af1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"348\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-03 18:57:57', '2022-03-03 18:57:57'),
('22ef9ebf-d864-4b62-bca8-10761e37da48', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"489\",\"msg\":\"Worker has bid on Order ID- 489\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:12:38', '2022-04-28 14:12:38'),
('231c0d91-419b-4349-a64e-a809bdc3d48f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"349\",\"msg\":\"Worker has Claimed on Order ID Order ID- 349\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/349\"}', NULL, '2022-03-04 11:22:19', '2022-03-04 11:22:19'),
('232eb5f6-9002-4505-aadc-11ad564fb4f3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:03', '2022-03-25 00:27:03'),
('233c64c7-9d2d-4f41-8c19-a1f2f2e32ee9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:38', '2022-04-28 14:11:38'),
('2386a445-3c00-422a-8237-99e32338a831', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"568\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 15:45:46', '2022-06-11 15:45:46'),
('2401b435-eb81-4d2c-a620-956a8fc09708', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"452\",\"msg\":\"A File has been uploaded for admin for  Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-13 12:29:40', '2022-04-13 12:29:40'),
('2410d3fe-60dc-4536-b50b-f662925f319d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"428\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 428\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-07 22:41:57', '2022-04-07 22:41:57'),
('2419f213-431a-42ee-afeb-1e75fe48b864', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"541\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:47:50', '2022-06-03 16:47:50'),
('244b4cb0-6141-4439-8c85-a157c4e03556', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":524,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-22 19:04:41', '2022-05-22 19:04:41'),
('2485a69e-3a33-431e-a612-28e6c1666560', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"357\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 17:24:40', '2022-03-24 17:24:40'),
('24c18923-dd9c-40e7-b381-eddcebac4b5d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:35:18', '2022-04-28 14:35:18'),
('24d3d731-f071-43e4-9124-4cb30671582a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:29', '2022-05-10 17:28:29'),
('24d92d34-6ada-4b2c-8a6e-2d418ef15ae2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:20', '2022-05-16 19:58:20'),
('25098ff3-0c5c-4b0a-a501-ecb07e655d0b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"439\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:37:38', '2022-04-08 15:37:38'),
('2509d46e-1e78-48f5-9d4c-5f04343e7a9d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"524\",\"msg\":\"Worker has Claimed on Order ID Order ID- 524\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/524\"}', NULL, '2022-05-22 19:04:42', '2022-05-22 19:04:42'),
('25729c45-55cd-42a6-b2f0-2651ae120a07', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"574\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:29:18', '2022-06-11 20:29:18'),
('2574f3a0-d840-41b6-aa5d-7322508380af', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:25:45', '2022-04-08 15:25:45'),
('257bd83b-02a1-44c8-9cc2-0357506ebd2e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-04 15:42:35', '2022-04-04 15:42:35'),
('25951c53-1988-4b33-add5-d83fc8d7968a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"477\",\"msg\":\"A File has been uploaded for admin for  Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:54:31', '2022-04-18 12:54:31');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('25af309e-c2e0-4a92-b7f0-90c05855bf25', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"Order has been  completed  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 15:27:38', '2022-04-18 15:27:38'),
('25b93c58-fae6-4485-a853-7caf868b8ef7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"480\",\"msg\":\"Worker has Claimed on Order ID Order ID- 480\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/480\"}', NULL, '2022-04-25 16:45:33', '2022-04-25 16:45:33'),
('25c3e35b-2716-41ea-ae63-71f06b4ce869', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:24', '2022-05-10 19:32:24'),
('25c5a579-270c-4180-a6e5-ab0b5bcc3bee', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":421,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-04 15:41:29', '2022-04-04 15:41:29'),
('25de4648-fac0-4324-b349-ea37e8a30055', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"436\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:06:32', '2022-04-08 15:06:32'),
('26202cc1-6954-4c98-9c9f-4d685da62489', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"352\",\"msg\":\"Worker has Claimed on Order ID Order ID- 352\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/352\"}', NULL, '2022-03-23 13:40:55', '2022-03-23 13:40:55'),
('2654abb9-2164-4ba4-a8ae-ac2d71f25865', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:15', '2022-03-24 18:17:15'),
('265d5a0f-9699-4487-9826-3bfdcdbad0b8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:59:55', '2022-04-27 13:59:55'),
('26704c51-127c-4ae9-bc1f-f3dbf1988016', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 13:28:10', '2022-03-24 13:28:10'),
('26b7d340-daad-4598-b52c-2cf5aea7bcb1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:13', '2022-05-16 19:56:13'),
('26ced800-0580-41b0-b20b-716ee5952f6c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:58:43', '2022-04-27 13:58:43'),
('272be192-f6a4-4951-bcdc-2ae7cd97e7ea', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"589\",\"msg\":\"Worker has bid on Order ID- 589\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-15 18:18:59', '2022-06-15 18:18:59'),
('2734f1de-ace6-464d-8448-f29b5aa0f9ef', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"570\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:28:45', '2022-06-11 16:28:45'),
('278f313e-9d1a-4eef-a113-043c47133ba7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:38', '2022-04-27 14:33:38'),
('27d718d5-6a24-4449-be16-c2dc34716424', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"553\",\"msg\":\"Worker has Claimed on Order ID Order ID- 553\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/553\"}', NULL, '2022-06-09 12:33:38', '2022-06-09 12:33:38'),
('2806b525-2980-4378-a8ab-1b92af663af5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:22', '2022-05-16 19:57:22'),
('280abae5-77a5-4f13-9f83-0682657f4c9d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":355,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-03-24 13:42:08', '2022-03-24 13:42:08'),
('2812416a-9a2d-48ee-aa40-22d24933563b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:05:01', '2022-04-18 16:05:01'),
('281b74df-3bc6-4a53-a4af-bd6b629687c6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 18:14:24', '2022-05-10 18:14:24'),
('284c2eaf-74d3-43c8-90a4-da464693e7f8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:26:39', '2022-03-04 11:26:39'),
('2880425a-2c4f-4a67-8aa9-687223739d12', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"435\",\"msg\":\"Worker has Claimed on Order ID Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/435\"}', NULL, '2022-04-08 15:04:26', '2022-04-08 15:04:26'),
('28a65ce4-7306-4119-af79-6aafbf9dc805', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:21', '2022-03-24 18:17:21'),
('28c409f2-5a79-4447-8a3d-e4d19a6f64c0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"523\",\"msg\":\"Worker has bid on Order ID- 523\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', '0000-00-00 00:00:00', '2022-05-22 14:43:33', '2022-05-22 14:43:33'),
('28cf335e-da74-4107-8693-c61a906426a2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 14:18:15', '2022-03-24 14:18:15'),
('28dfa983-ce99-4a73-b735-b78edb85272f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:04', '2022-03-24 18:17:04'),
('2934bb9c-389d-4366-bb9d-41ae0e307a23', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:28', '2022-05-16 19:49:28'),
('294f913e-6433-4f0a-956e-c0a3ded2c98f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"438\",\"msg\":\"Worker has Claimed on Order ID Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:14:25', '2022-04-08 15:14:25'),
('29542f1e-91c8-414f-86eb-5b16fac2032f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:15:04', '2022-04-18 16:15:04'),
('2959a2e2-6eb4-4056-aaa7-2f4b7f273565', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"572\",\"msg\":\"Worker has Claimed on Order ID Order ID- 572\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/572\"}', NULL, '2022-06-11 17:24:54', '2022-06-11 17:24:54'),
('298ab61a-0ce3-4284-b74b-b2981cfa051c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:59:15', '2022-04-22 11:59:15'),
('29c32b70-731f-4a0a-8520-3209f0fdd60b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:46', '2022-05-16 19:57:46'),
('2a69a52e-b56c-42ce-b2f8-ff9400fcd46f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":584,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-12 09:57:31', '2022-06-12 09:57:31'),
('2a6e74ef-11b0-4168-a8c0-922bb74a4dfc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:34', '2022-05-20 17:58:34'),
('2a7e9bd7-40ed-44d7-9ac0-5c0d244cf6f9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', '0000-00-00 00:00:00', '2022-03-24 13:41:13', '2022-03-24 13:41:13'),
('2ae799c6-2de2-4817-b248-3dfb2ac6d101', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:22', '2022-04-28 14:11:22'),
('2ae82977-443e-4fa2-a642-75618fb63847', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"524\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 17:11:09', '2022-05-22 17:11:09'),
('2af9fb06-31b2-4852-a917-b44f23ece22a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"436\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:06:29', '2022-04-08 15:06:29'),
('2b270b06-3d1d-4e6c-a918-23784a960efb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"531\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 01:34:42', '2022-05-29 01:34:42'),
('2b38e884-ceae-4fb5-98b0-c85aff91a51e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"422\",\"msg\":\"Worker has Claimed on Order ID Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 17:17:54', '2022-04-07 17:17:54'),
('2b53651d-5690-42fa-b271-535fe578f623', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:49:51', '2022-04-09 17:49:51'),
('2b573d0d-8d7e-4ee0-b428-69764f92c4af', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:10:42', '2022-03-25 00:10:42'),
('2b97dcdc-c59c-407f-8082-aa3c0ede121c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:14', '2022-05-10 17:28:14'),
('2b9b8e4e-c8a9-4a73-9fd1-578c0ab8bdd5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"432\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:07:47', '2022-04-08 13:07:47'),
('2bc69cfe-702c-4f64-9719-2eb98e5bd003', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"477\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-16 14:43:54', '2022-04-16 14:43:54'),
('2bc7c8d1-c9b0-4c1e-b354-6ac5c9fe74e2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:32:00', '2022-03-24 19:32:00'),
('2bce4177-35d7-4995-a28c-568d89e6d80f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:30', '2022-05-20 19:26:30'),
('2beff863-55fc-4a10-8d17-03cf881a6f01', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"505\",\"msg\":\"Worker has bid on Order ID- 505\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-05-10 23:46:00', '2022-05-10 23:46:00'),
('2bf7cb7f-fbd4-487a-bd15-520b7022b522', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:10:33', '2022-03-25 00:10:33'),
('2c29b77c-fa10-4140-b36c-f8eb090ffc79', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"448\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:09:21', '2022-04-11 13:09:21'),
('2c560bd5-603b-477f-b672-4d7ecd8d9042', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"491\",\"msg\":\"Worker has bid on Order ID- 491\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:24:20', '2022-04-28 14:24:20'),
('2c7950b1-deb9-41fd-ab3a-8d3b3e372184', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:15:52', '2022-05-16 20:15:52'),
('2c7a2cb5-0c5d-441b-be31-c0d051cacdc5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"523\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 14:40:52', '2022-05-22 14:40:52'),
('2c8f2acc-925d-435a-b75e-6ef41bd09905', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"360\",\"msg\":\"Worker has Claimed on Order ID Order ID- 360\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/360\"}', NULL, '2022-03-24 19:05:38', '2022-03-24 19:05:38'),
('2cc8745f-59b4-468e-987f-7056dd8a8d5a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":572,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-11 17:24:53', '2022-06-11 17:24:53'),
('2cd9163b-a8ed-4a5b-85c8-ea09f4ef3a92', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":494,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-28 14:30:34', '2022-04-28 14:30:34'),
('2cfcbbef-6722-4f63-a749-ed7a9f072216', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":486,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-28 13:39:01', '2022-04-28 13:39:01'),
('2d1cbf6c-82e1-4b9b-8b40-68673ec0efc1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:52', '2022-05-20 19:26:52'),
('2d837b93-7585-4493-a139-bb506603af54', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"439\",\"msg\":\"A File has been uploaded for admin for  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:20:31', '2022-04-08 16:20:31'),
('2e078951-f746-4cd9-b7f9-fec7eaae2cf9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"580\",\"msg\":\"Worker has bid on Order ID- 580\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', '0000-00-00 00:00:00', '2022-06-11 20:48:42', '2022-06-11 20:48:42'),
('2e0aa19d-4802-47fb-9b15-bb36ac3c5c52', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"355\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 12:59:43', '2022-03-24 12:59:43'),
('2e0c443b-0854-41b8-bf19-473974c20984', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"444\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 15:32:58', '2022-04-09 15:32:58'),
('2e13f145-f694-4a73-af5e-4e642301a9ee', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"436\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:06:14', '2022-04-08 15:06:14'),
('2e24bea7-df4e-4185-9efd-58847fea717f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"523\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 523\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', '0000-00-00 00:00:00', '2022-05-22 14:46:16', '2022-05-22 14:46:16'),
('2e5eb6ea-f9f4-4eec-8285-434fc055a9cb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"451\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 451\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-12 14:40:42', '2022-04-12 14:40:42'),
('2e88cc1b-2b9e-42e2-bc41-8a2c2bac00ac', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"477\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-16 14:44:43', '2022-04-16 14:44:43'),
('2f20a3f7-a710-40da-b535-b98f38faf4fa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 13:01:38', '2022-03-24 13:01:38'),
('2f4a0d68-3d3c-452e-82cb-d3af77c2f799', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"527\",\"msg\":\"Worker has Claimed on Order ID Order ID- 527\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/527\"}', NULL, '2022-05-22 19:37:50', '2022-05-22 19:37:50'),
('2f525311-bc21-4a17-887b-0d78777e3ee9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"447\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:00:43', '2022-04-11 13:00:43'),
('2f6d6e3f-5777-47a7-870b-48b5df84b86d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:57', '2022-04-18 11:50:57'),
('2f7672ea-2075-4828-b19b-92298527eaad', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:31', '2022-05-16 19:56:31'),
('2f821782-bddd-4be8-9eaf-3f96f00265c8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 13:03:19', '2022-03-24 13:03:19'),
('2fac8f06-4dfe-4042-af67-ee0b7a53aecc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:47', '2022-05-16 19:57:47'),
('2fd15618-7720-4b28-aa48-3d9e6def1661', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":484,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-27 14:31:38', '2022-04-27 14:31:38'),
('2fda927f-6b27-449e-bcd1-b1320001ed79', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:26', '2022-05-16 19:58:26'),
('2fe3c6a1-2a6d-4622-9373-fa6b70087e13', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:30:34', '2022-04-13 12:30:34'),
('30348408-05a8-492b-bb12-ff0b0da3b1bf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"31\",\"msg\":\"Your Page request has been Approved Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/444\"}', NULL, '2022-04-09 15:18:59', '2022-04-09 15:18:59'),
('3034c13f-4c48-4592-b117-9f2a521ab1f8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 17:31:42', '2022-03-24 17:31:42'),
('303ee3b3-07f6-46e5-8a1b-8d09c843a86c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"435\",\"msg\":\"A File has been uploaded for admin for  Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/435\"}', NULL, '2022-04-08 15:09:07', '2022-04-08 15:09:07'),
('30634578-7665-420e-8641-7870b65d9e5d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:47', '2022-03-23 13:43:47'),
('308a9323-55eb-46e1-8b99-b1d6194852df', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"507\",\"msg\":\"Worker has Claimed on Order ID Order ID- 507\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/507\"}', NULL, '2022-05-13 19:55:55', '2022-05-13 19:55:55'),
('30a519ae-bafb-44ca-9e18-36a0bfe5fdcb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:14', '2022-05-16 19:49:14'),
('30bb0b3b-790c-467d-af67-f8ddd3ce75fb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:51', '2022-04-18 11:50:51'),
('30e69360-b8ed-4bb0-9a9b-e48360de04b2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:38', '2022-05-10 17:28:38'),
('30eb4138-0b73-4189-b727-553cd1a56a38', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:16', '2022-05-16 19:49:16'),
('310bfd33-6463-4f66-853c-5b032bffffec', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":506,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-13 18:57:11', '2022-05-13 18:57:11'),
('3127fea2-388a-41e3-8587-c6407eb81b47', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"359\",\"msg\":\"Worker has Claimed on Order ID Order ID- 359\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/359\"}', NULL, '2022-03-24 18:18:07', '2022-03-24 18:18:07'),
('316ffd1d-3f33-4995-b177-ac47402c48ec', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"439\",\"msg\":\"Order has been  completed  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:12:16', '2022-04-08 16:12:16'),
('31865759-2fe0-407d-b70b-b161bd168afd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"529\",\"msg\":\"Worker has Claimed on Order ID Order ID- 529\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/529\"}', NULL, '2022-05-28 18:10:51', '2022-05-28 18:10:51'),
('31866cb1-1bef-407b-b7a6-313b7ea31ff0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"436\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:06:35', '2022-04-08 15:06:35'),
('31bb0301-b155-4028-8cd4-92bbd7fe3874', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"440\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 16:32:29', '2022-04-08 16:32:29'),
('31c4c3a1-635d-41cd-9a8f-f1be3f540798', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"591\",\"msg\":\"Worker has bid on Order ID- 591\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-16 19:27:20', '2022-06-16 19:27:20'),
('31c804d6-dd72-4abb-803b-6c4335c3b4a6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:01', '2022-04-18 11:50:01'),
('31f87fb5-efae-439d-8d87-b078c32073e1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:08:47', '2022-04-07 00:08:47'),
('32040557-b7fc-4bab-904b-26d8ff1db310', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:53', '2022-04-27 14:33:53'),
('323c6c55-b04e-40b3-a59a-174f14ac8057', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"434\",\"msg\":\"A File has been uploaded for admin for  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:01:12', '2022-04-08 15:01:12'),
('32573bf6-8bb9-4ba7-a710-91c70d9fd053', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"488\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 13:40:12', '2022-04-28 13:40:12'),
('3277435c-9e3e-49ef-934b-48235c497586', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:43', '2022-05-20 17:58:43'),
('327c3c7e-ca38-4834-96a0-fab96fe3243f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:50:19', '2022-04-09 17:50:19'),
('3293be2e-f772-4f3f-82a0-f548273e8547', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"446\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 446\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 17:51:31', '2022-04-09 17:51:31'),
('32a2c5ba-8ebd-408b-9fff-a94b39ae6e28', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"364\",\"msg\":\"Order has been  completed  Order ID- 364\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/364\"}', '0000-00-00 00:00:00', '2022-03-25 00:07:52', '2022-03-25 00:07:52'),
('32ae11d9-bd2b-4f71-9659-595bf9bbcb63', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:06', '2022-03-23 13:43:06'),
('32b24cc5-a954-4ec8-9e8e-620db0c2e755', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-01 18:28:56', '2022-04-01 18:28:56'),
('32b6df51-8ec1-46bb-a256-60d2e207cdfd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:20', '2022-05-16 19:58:20'),
('32e52442-61ee-4f98-bb04-a5992ce791e4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"Worker has Claimed on Order ID Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-06 14:58:11', '2022-04-06 14:58:11'),
('3359dd99-94fb-49d3-a0a4-b83d98a551ec', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":594,\"msg\":\"A new Message has been posted for Order ID- 594\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/594\"}', NULL, '2022-06-23 16:26:36', '2022-06-23 16:26:36'),
('336c3f75-ff7e-4d49-b4ac-aed99e5788fa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"435\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-08 15:07:41', '2022-04-08 15:07:41'),
('339f5c78-b324-4200-913d-01cff54c706d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"434\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:35:49', '2022-04-08 13:35:49'),
('33b9d5bf-86ea-455f-b4e4-8ee8b33c002d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:36', '2022-05-10 17:28:36'),
('33c2427b-e7f2-4dc2-9ac1-1de9aeb6482f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:43', '2022-05-20 17:58:43'),
('33f5b51c-96fb-4082-8522-0ed0e4d887e3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"435\",\"msg\":\"Order has been  completed  Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/435\"}', NULL, '2022-04-08 15:09:20', '2022-04-08 15:09:20'),
('3405d9d6-b02c-4883-82c9-3a8fe674d5f1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:40:38', '2022-03-24 19:40:38'),
('340c02d2-2c02-4ad0-9759-2cbd87c8ec02', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:36', '2022-05-16 19:56:36'),
('34333a35-57e6-48ac-b80e-b15ad0ea62e2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:29', '2022-05-16 19:49:29'),
('343ac2e9-ea59-4487-afcc-9ba81cd2c6af', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"481\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-23 13:09:49', '2022-04-23 13:09:49'),
('34600b51-9039-493b-be38-e95448fc677d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:24', '2022-03-24 18:16:24'),
('3490483e-e4a1-43cc-bed9-287d37db2987', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"481\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-23 13:09:46', '2022-04-23 13:09:46'),
('349f0715-d14a-428e-b789-9212ea8c99af', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"490\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:12:21', '2022-04-28 14:12:21'),
('34a52d8d-02d7-4afb-9dae-3cb94e8f36b2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:26:42', '2022-03-25 00:26:42'),
('34d34194-5fda-4f23-bb9a-9146d26bedab', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"444\",\"msg\":\"A File has been uploaded for admin for  Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 15:29:03', '2022-04-09 15:29:03'),
('35071e2d-9004-4615-9352-b13b02e42b21', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:13:38', '2022-04-07 00:13:38'),
('3547af02-656a-42f1-bada-4109ea9361bd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"445\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 445\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 16:44:14', '2022-04-09 16:44:14'),
('355f58d2-0709-4d93-b450-a471ba5ed25e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"570\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:28:47', '2022-06-11 16:28:47'),
('356abed1-fdcf-4661-aff0-3621706d000c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"484\",\"msg\":\"Worker has Claimed on Order ID Order ID- 484\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/484\"}', NULL, '2022-04-27 14:31:45', '2022-04-27 14:31:45'),
('359555b2-a508-4a77-aad3-2b01e33c1f72', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:07:35', '2022-04-13 16:07:35'),
('35c3b00c-d539-4fa1-a97b-42f2744b25ec', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"445\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 16:43:24', '2022-04-09 16:43:24'),
('35de6ff3-5020-4c08-a5bb-8db3c3dc6bdf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:15:57', '2022-05-16 20:15:57'),
('361dc633-c461-4fca-a34f-d3e926f7e4c1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 14:50:18', '2022-04-18 14:50:18'),
('36658ace-1921-42bc-a486-cfb1ea7ad146', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:32', '2022-04-28 14:28:32'),
('3667fd3f-e72e-4128-8f7b-489cd70d7451', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"490\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:12:12', '2022-04-28 14:12:12'),
('36829249-98d0-4e74-98b1-5fb8779189d3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:56', '2022-05-20 17:58:56'),
('368e6bed-2bc5-4e61-b914-28107b4f77d2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 13:41:17', '2022-03-24 13:41:17'),
('36d733a9-d7f6-4bb8-9a8d-41fe092f94d7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:31', '2022-04-28 14:11:31'),
('36da038e-f762-45ce-9969-7adb319cbc8e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:10', '2022-05-16 19:58:10'),
('36daa240-95f8-4af3-9e76-7c79e863f3d3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:48', '2022-05-16 19:57:48'),
('36e3b204-f595-45ba-94ee-e3afb58ee7d9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"580\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:47:39', '2022-06-11 20:47:39'),
('36e7f2c0-0fd7-44dc-a859-0ef52c94602a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"592\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:35:27', '2022-06-16 19:35:27'),
('36ef7653-d02c-4f09-840f-6d29d8d095fb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:12', '2022-05-16 19:58:12'),
('36fc3a2f-a380-4502-a2f9-02f7eb73012c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:59:05', '2022-04-22 11:59:05'),
('3702334a-413c-4ad9-922c-73986d87d588', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":575,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-11 20:41:30', '2022-06-11 20:41:30'),
('3717868f-c737-4693-b09c-7d6a53fdab14', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"438\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:12:34', '2022-04-08 15:12:34'),
('37190a5e-dbaf-4984-b481-50055336fb68', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:42', '2022-05-10 19:32:42'),
('3740590d-e56a-4893-b0d6-1b75c0878dc7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"348\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 348\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-04 11:23:57', '2022-03-04 11:23:57'),
('3755c4ae-151b-41bf-a6a1-8884d3f784f5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"430\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 12:20:43', '2022-04-08 12:20:43'),
('375650fc-a0df-4c02-9b93-357556186a31', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:47:07', '2022-04-08 15:47:07'),
('377f30cb-05c0-4521-a746-0f2caafa433f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"597\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 11:58:33', '2022-09-12 11:58:33'),
('37b078be-7e9d-4503-8d54-46ba1f944a4b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:12:19', '2022-04-07 00:12:19'),
('37d3f7d2-1bf3-46a2-a373-682752ea12d4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"447\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:00:33', '2022-04-11 13:00:33'),
('37ea6c0a-bda8-49bb-b700-c04b270bd757', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:25', '2022-05-10 17:28:25'),
('37f00933-a4d0-4f5d-bd19-b77b735a7f4f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:58:26', '2022-04-18 12:58:26'),
('38562517-29f6-408e-baa3-3e6de7f68be5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"433\",\"msg\":\"A File has been uploaded for admin for  Order ID- 433\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/433\"}', NULL, '2022-04-08 13:33:52', '2022-04-08 13:33:52'),
('3858ee41-e93d-4f3b-9966-9aaa819cca41', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:33', '2022-05-10 17:28:33'),
('3896d830-babd-4070-824a-047eab904956', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:21', '2022-05-16 19:57:21'),
('38a12849-0b77-4590-acde-3b69f99a2627', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:48', '2022-05-10 19:32:48'),
('38a5ce70-b943-48a0-b32f-1afa01e562e1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"571\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:32:54', '2022-06-11 16:32:54'),
('391864da-d445-4822-b819-ce03eccf1f9a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"448\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:09:56', '2022-04-11 13:09:56'),
('395826b2-1289-439d-b0a1-a54800316660', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:50:31', '2022-04-09 17:50:31'),
('3978e20e-fd06-4500-b8c5-e43415123b40', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"528\",\"msg\":\"Worker has Claimed on Order ID Order ID- 528\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/528\"}', NULL, '2022-05-29 01:33:09', '2022-05-29 01:33:09'),
('398c7a95-992e-4a6e-a019-8579310b19ed', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":479,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 15:29:26', '2022-04-18 15:29:26'),
('39e2000a-8e05-4a03-8106-82f1873a5c0b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"352\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:20:53', '2022-03-23 13:20:53');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('3ab76285-afae-4513-aa0a-5e713f810acb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:15:01', '2022-04-18 16:15:01'),
('3aeb7f39-d389-454e-bb68-6f90aa4219d6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:26:33', '2022-03-25 00:26:33'),
('3b12328a-5974-447c-8c06-037fc0ade4f5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"590\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 18:07:38', '2022-06-16 18:07:38'),
('3b501881-9edc-470e-92c4-600ea5c6ec23', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"570\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:28:41', '2022-06-11 16:28:41'),
('3b558e55-5ed5-4971-bd63-672ba2f4ab79', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"365\",\"msg\":\"Worker has Claimed on Order ID Order ID- 365\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/365\"}', NULL, '2022-03-25 00:12:24', '2022-03-25 00:12:24'),
('3b55ec32-fd18-4399-b668-c1c0dd5bf484', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"592\",\"msg\":\"Worker has bid on Order ID- 592\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-16 19:35:43', '2022-06-16 19:35:43'),
('3b813879-59ec-4873-b265-bdd24199f6b1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"540\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:34:24', '2022-06-03 16:34:24'),
('3ba7b590-5808-4322-b49c-ffe1bc9ea005', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:19', '2022-05-10 19:32:19'),
('3bcb175b-ac7a-4fad-bb2c-85ae2dfceb4f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:54', '2022-04-28 14:28:54'),
('3bf600fe-aa1a-4420-9b66-7d0ccc0f651c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"438\",\"msg\":\"Worker has Claimed on Order ID Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:13:13', '2022-04-08 15:13:13'),
('3c469cce-86a2-46db-a516-bf1827d0fe29', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"350\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 350\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 12:14:49', '2022-03-24 12:14:49'),
('3c57c444-cf21-465d-b033-44b804288f59', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"435\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:03:30', '2022-04-08 15:03:30'),
('3cb7b256-6ef3-468c-8953-aab86ac7f3c8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"454\",\"msg\":\"Worker has bid on Order ID- 454\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-12 23:42:00', '2022-04-12 23:42:00'),
('3cce6ba6-5a8c-4eec-b1f9-d6e10962f6c4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:34:01', '2022-03-24 19:34:01'),
('3cd624e8-26cc-4d9c-9e66-45330076a94d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:21', '2022-05-10 17:28:21'),
('3cf0fad4-6ff8-4312-bfb1-68fa3350eb1b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"569\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 569\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-06-11 16:13:49', '2022-06-11 16:13:49'),
('3cf3fd9e-70eb-48ad-bd5c-ae97c80fa1f4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:30:57', '2022-04-13 12:30:57'),
('3cfc4956-10f8-46ce-9da6-715fcf1f1704', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"440\",\"msg\":\"Worker has Claimed on Order ID Order ID- 440\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/440\"}', NULL, '2022-04-09 14:08:11', '2022-04-09 14:08:11'),
('3d018edb-daee-4dd5-9768-269110a61153', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:25', '2022-05-16 19:57:25'),
('3d0a7dea-ddad-4822-86f5-0408feeb7840', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:03', '2022-04-28 14:30:03'),
('3d268a27-c6c1-4678-bf5a-3026fe5c2ead', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:31', '2022-05-10 17:28:31'),
('3d6a74ff-5185-43e2-9cdb-431fd8b5bbd9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":430,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-08 12:21:32', '2022-04-08 12:21:32'),
('3d6d7560-1634-4428-8c9b-cc3dc7aafc18', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:13', '2022-04-28 14:11:13'),
('3d95b717-d403-4e28-bd46-7eff87839d82', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 13:01:41', '2022-03-24 13:01:41'),
('3dc3a062-b72c-47ef-b425-df230b33322a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"352\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:20:50', '2022-03-23 13:20:50'),
('3dcc3362-5c16-4bba-bba3-3665e7aa0214', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"589\",\"msg\":\"A File has been uploaded for admin for  Order ID- 589\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/589\"}', NULL, '2022-06-15 17:33:23', '2022-06-15 17:33:23'),
('3e527bd8-c587-46a3-8e84-7d90ff4c0f4a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"348\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-03 18:56:54', '2022-03-03 18:56:54'),
('3e79d983-4cb1-40b8-a56b-cbe3798b8170', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"586\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-14 18:51:08', '2022-06-14 18:51:08'),
('3e7d4b5b-95db-458f-8735-7ede828eeb6f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"451\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:32:38', '2022-04-12 14:32:38'),
('3e97163f-b934-406a-9895-31e7920e5bf7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:42:06', '2022-03-24 19:42:06'),
('3ee5330d-b678-4959-b1f1-7809671115a7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":505,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-10 23:47:21', '2022-05-10 23:47:21'),
('3f431dba-7a1b-4efa-a416-50f4b1aa198f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:58:45', '2022-04-22 11:58:45'),
('3f4e1469-6695-46be-a831-9f408db39244', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"569\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:04:36', '2022-06-11 16:04:36'),
('3f516c28-422a-4d42-ac0d-1a2bdd2ef928', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"442\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 13:35:00', '2022-04-09 13:35:00'),
('3f72e8dc-0597-4f98-bbf0-f8cc4a2aa9d4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:16', '2022-05-20 17:57:16'),
('3f91bd3c-5e99-4bf5-8a65-c5ac9defdeaf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:39', '2022-05-10 17:28:39'),
('3f961faa-cfbd-4530-83ef-cfd4d2bda666', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:55', '2022-05-10 19:32:55'),
('3fab407c-a353-4fa6-8f16-9d0564f29785', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"Worker has Claimed on Order ID Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-04 15:41:32', '2022-04-04 15:41:32'),
('3fd5e7eb-ee73-4e32-864c-9fd895b667c1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"479\",\"msg\":\"Worker has Claimed on Order ID Order ID- 479\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/479\"}', NULL, '2022-04-18 15:29:33', '2022-04-18 15:29:33'),
('3fd9b02b-5b6d-4611-a2af-ec0aadea02bb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"354\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 19:58:33', '2022-03-23 19:58:33'),
('3fffb948-5bc5-49f2-9e93-1a4a92fef347', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 94, '{\"order_id\":\"419\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-01 18:00:06', '2022-04-01 18:00:06'),
('400e3269-13fa-4f51-9ec5-c3b3910410f8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"430\",\"msg\":\"Worker has Claimed on Order ID Order ID- 430\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/430\"}', NULL, '2022-04-08 12:21:46', '2022-04-08 12:21:46'),
('401ec5be-9e5f-4324-b9f3-bf05c11a943a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"434\",\"msg\":\"A File has been uploaded for admin for  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:00:25', '2022-04-08 15:00:25'),
('40218409-5c68-4e72-b600-ec8126953cbd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"572\",\"msg\":\"Worker has bid on Order ID- 572\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', '0000-00-00 00:00:00', '2022-06-11 17:09:00', '2022-06-11 17:09:00'),
('40434026-4e86-4dcb-ba98-55c0452afaa0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":530,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-28 13:54:34', '2022-05-28 13:54:34'),
('405ccc93-4407-4785-8f9a-eeef98f7dd52', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"548\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:58:03', '2022-06-03 19:58:03'),
('40603306-0355-41f0-8b2d-af607f901991', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"440\",\"msg\":\"Worker has Claimed on Order ID Order ID- 440\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/440\"}', NULL, '2022-04-09 14:08:17', '2022-04-09 14:08:17'),
('40be0a5b-0aa3-4ca5-9f0e-49286559c8db', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:21', '2022-04-28 14:11:21'),
('40fff416-f53f-4863-8800-28463d3b0c38', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"594\",\"msg\":\"Worker has bid on Order ID- 594\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-16 19:41:12', '2022-06-16 19:41:12'),
('41208cac-b29e-485b-953e-53db587169c5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:19', '2022-05-16 19:56:19'),
('414a6561-b22e-412e-ae90-cf6ad4005591', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"34\",\"msg\":\"Your Page request has been Approved Order ID- 451\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/451\"}', NULL, '2022-04-12 14:50:48', '2022-04-12 14:50:48'),
('416abce7-c607-4a7e-b555-f4d42c69364d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"533\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 19:43:41', '2022-05-29 19:43:41'),
('41b9d19d-ad00-4dd3-84f5-2914e76eb4a3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"438\",\"msg\":\"Order has been  completed  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:21:46', '2022-04-08 15:21:46'),
('41cbd93a-12f3-4cb0-8277-af1e33f9f8b3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:57', '2022-05-10 17:28:57'),
('4217404a-ce3f-45f7-87d6-179c4ea54016', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"506\",\"msg\":\"Worker has bid on Order ID- 506\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-05-13 18:55:45', '2022-05-13 18:55:45'),
('4220963f-4f52-4f35-834a-944e9b782331', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"507\",\"msg\":\"Worker has Claimed on Order ID Order ID- 507\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/507\"}', NULL, '2022-05-13 19:56:00', '2022-05-13 19:56:00'),
('423c453a-b4a3-4ffe-8206-dc7d73f4454e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":421,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-07 16:40:13', '2022-04-07 16:40:13'),
('424e81c0-9822-4661-8a4f-e04945aec379', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":492,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-28 14:28:27', '2022-04-28 14:28:27'),
('42725fd9-7504-4366-b2b6-1661352049c6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"449\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:17:20', '2022-04-12 14:17:20'),
('4280f9b2-251c-4485-b921-6965dbbb8799', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:51:03', '2022-04-18 11:51:03'),
('42a8f7c5-31d5-4603-8e3b-e6d8d4dec026', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"528\",\"msg\":\"Worker has bid on Order ID- 528\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-05-27 13:31:42', '2022-05-27 13:31:42'),
('42c5752c-bc87-4d38-989f-98be6ef2625f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"570\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:28:44', '2022-06-11 16:28:44'),
('42ca9dab-8228-48ba-ba76-39de32090451', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"588\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-15 15:05:20', '2022-06-15 15:05:20'),
('4301b26e-bdbf-49eb-827d-fccd00fc45b0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"435\",\"msg\":\"Worker has Claimed on Order ID Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/435\"}', NULL, '2022-04-08 15:04:29', '2022-04-08 15:04:29'),
('435e5ece-ad71-4209-8c3a-355599ef0bd5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"422\",\"msg\":\"Worker has Claimed on Order ID Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 16:44:16', '2022-04-07 16:44:16'),
('436169f0-c69b-4789-857c-09376c4e1ead', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"349\",\"msg\":\"Worker has Claimed on Order ID Order ID- 349\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/349\"}', NULL, '2022-03-04 11:22:17', '2022-03-04 11:22:17'),
('43a4d3ba-92da-4127-9c0e-fb85c9aa91bf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:07:15', '2022-05-20 19:07:15'),
('43dae804-a0a8-4375-bfe6-b14c4383d457', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"479\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 13:05:23', '2022-04-18 13:05:23'),
('4416abba-5619-46ea-ab5e-80a0008a0438', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:25:51', '2022-03-04 11:25:51'),
('44364591-1064-4455-9a91-4cc0542f734e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"477\",\"msg\":\"Order has been  completed  Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 14:45:37', '2022-04-18 14:45:37'),
('44722f84-0a43-4da9-babb-eb5b10667e79', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"526\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 19:33:52', '2022-05-22 19:33:52'),
('44796bfc-4367-47cc-b471-5bbe2736d21b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:06:19', '2022-04-13 16:06:19'),
('447cd610-1e72-425d-a3f2-ca258c60fd20', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:23:32', '2022-04-28 14:23:32'),
('44841b5d-da46-4843-a408-ec16de8c282b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":477,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 11:47:40', '2022-04-18 11:47:40'),
('4495c455-3448-4acd-8287-e70b64b83a0b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:39', '2022-05-20 19:26:39'),
('44abd61d-f31d-4956-98ce-aa456c273d4a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":477,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 12:50:15', '2022-04-18 12:50:15'),
('44c56305-6eed-4f93-ac0a-a17ebfd22e59', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"492\",\"msg\":\"Worker has bid on Order ID- 492\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:27:53', '2022-04-28 14:27:53'),
('44f28526-8744-4f84-b187-e63d7ad7786d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"535\",\"msg\":\"Worker has Claimed on Order ID Order ID- 535\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/535\"}', NULL, '2022-05-31 13:41:53', '2022-05-31 13:41:53'),
('4541ccc0-fb82-412d-8821-7baa9ac73980', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"439\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:37:35', '2022-04-08 15:37:35'),
('45a8507c-5c62-4712-a143-d30c42188ae5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:34:02', '2022-04-27 14:34:02'),
('45c20457-9435-4fd8-80ef-c877043f16e1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"426\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 426\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-07 22:36:22', '2022-04-07 22:36:22'),
('45f2eb19-bc02-48ad-80bd-2083dabebc7b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:25:36', '2022-04-28 14:25:36'),
('46015f0b-452e-448b-98f1-7b59985a960c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"526\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 19:33:57', '2022-05-22 19:33:57'),
('462fbf4e-dbaa-4692-80ef-7a12f3fc5a6a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"371\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-29 13:08:17', '2022-03-29 13:08:17'),
('4647dc8f-9ea7-4728-ba96-683c6ca7f8c8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"551\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 20:16:53', '2022-06-03 20:16:53'),
('465b304f-4d40-4b6b-8316-be463943980f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"543\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:31:33', '2022-06-03 19:31:33'),
('467c6cf5-64e1-4723-ac47-349bd42a8e92', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:35:24', '2022-04-28 14:35:24'),
('468fe699-8fd2-477a-9f31-f38db1f71466', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:24:52', '2022-04-28 14:24:52'),
('46b5b00e-321b-402d-a829-eaf62790d9b5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":594,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-16 19:41:26', '2022-06-16 19:41:26'),
('46fbeba0-6ade-4aa4-8340-3fe0131b9276', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"531\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 01:34:43', '2022-05-29 01:34:43'),
('4745caad-b22e-4c67-8893-3d0a21a144e8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"438\",\"msg\":\"Order has been  completed  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:23:54', '2022-04-08 15:23:54'),
('47648a0f-49bd-4205-8fa3-589ce88d9548', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:59:16', '2022-04-27 13:59:16'),
('476f2319-0771-426d-a9dd-a2b4f487dd76', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":349,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-03-04 11:20:27', '2022-03-04 11:20:27'),
('477c76e4-692e-4fc4-9659-c52187d6b845', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:27', '2022-05-10 17:28:27'),
('4795089e-7bf5-48e3-b125-06f5ec82c02a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:10:47', '2022-03-25 00:10:47'),
('47b711e0-1b01-4e17-b36a-f4fec4cf2497', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:51', '2022-05-20 19:26:51'),
('47c0ae88-68d8-4fcd-a82c-f072181df0e2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:23', '2022-05-16 19:58:23'),
('47efbfa6-0771-4bfa-8e28-b627344b8ad5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"445\",\"msg\":\"A File has been uploaded for admin for  Order ID- 445\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/445\"}', NULL, '2022-04-09 16:50:22', '2022-04-09 16:50:22'),
('47f819c9-310e-457f-9c06-f532d192f26f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"448\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:09:33', '2022-04-11 13:09:33'),
('482d70d1-fb92-47ae-85e4-67d365bbae35', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"481\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-23 13:10:14', '2022-04-23 13:10:14'),
('482f8a4b-5593-4bd3-8125-d24b453f72bc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:30:14', '2022-05-20 19:30:14'),
('487bb2f1-61bc-4f63-8fc0-d3d50ed4e8db', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"489\",\"msg\":\"Worker has bid on Order ID- 489\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:12:44', '2022-04-28 14:12:44'),
('48a6606a-64a6-4361-a15b-6d7bb8786966', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"355\",\"msg\":\"Order has been  completed  Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/355\"}', NULL, '2022-03-24 17:45:48', '2022-03-24 17:45:48'),
('48a930d3-0c68-4c66-bc3e-fd2ff5770f3e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:21', '2022-05-16 19:58:21'),
('48cc3794-8d3a-4c42-b871-697cfeb3b328', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:44', '2022-05-20 17:58:44'),
('48ce2e5b-08f7-4791-abba-e1fe62a64ad7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"444\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 14:50:42', '2022-04-09 14:50:42'),
('48db4307-cb22-4b3b-8584-c6e5dd8233c7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:26', '2022-05-10 19:32:26'),
('48ed805e-a5a8-43ce-8103-c5a320f8312d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"433\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:12:11', '2022-04-08 13:12:11'),
('48fa3b1d-143c-46b3-a121-1ed729e4eaa5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"592\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:35:26', '2022-06-16 19:35:26'),
('48fbd12e-4339-4f99-8309-c9fa17e2ee02', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"434\",\"msg\":\"A File has been uploaded for admin for  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:01:18', '2022-04-08 15:01:18'),
('493da308-30e5-4924-9753-36b9c70aaf5e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:11:02', '2022-03-25 00:11:02'),
('49829b35-43d2-4ae5-8b14-8bf298af24ca', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"569\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:04:33', '2022-06-11 16:04:33'),
('499c1a6c-dc7d-40b7-890a-3f4b47075aa7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"422\",\"msg\":\"Worker has Claimed on Order ID Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 16:44:06', '2022-04-07 16:44:06'),
('49ec8309-a598-4327-a135-8e1ea04e07ae', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:27:58', '2022-04-28 14:27:58'),
('49ff08d0-fb43-4f5a-9267-b26baef08730', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":589,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-15 16:45:20', '2022-06-15 16:45:20'),
('4a1920a1-328f-46d5-96c2-597fc5258251', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:07', '2022-03-25 00:27:07'),
('4a356dfd-e696-4221-803a-605a2a17103c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:15', '2022-05-10 17:28:15'),
('4a48f220-f72d-44c7-bd79-3d937462fed8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:29:48', '2022-04-28 14:29:48'),
('4a64f129-ce01-43d5-9a4b-4d1f53d27dfa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"588\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-15 15:05:21', '2022-06-15 15:05:21'),
('4a6560d5-8a4d-4239-aa7d-9adb4e9e55f0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"353\",\"msg\":\"Worker has Claimed on Order ID Order ID- 353\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/353\"}', NULL, '2022-03-23 13:44:26', '2022-03-23 13:44:26'),
('4a92ce1c-f136-4d4d-a76e-c1c23e62870a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"591\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:26:34', '2022-06-16 19:26:34'),
('4a9d6cd3-5d36-4877-bb94-973b33937ed7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:35:21', '2022-04-28 14:35:21'),
('4aa75ced-218e-4f35-9519-653ffd9b6033', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:07:32', '2022-04-13 16:07:32'),
('4afa5a20-c11a-4a5e-86f9-d3b988619900', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:21:14', '2022-04-08 15:21:14'),
('4afba77c-c2db-49dd-9588-d2a32aab63f4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:29', '2022-05-20 17:58:29'),
('4b538dfd-35d6-41e8-a69b-ad0edaf512c7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:09:00', '2022-04-07 00:09:00'),
('4b703512-a471-4ab4-9ad5-0931365e132d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:10', '2022-04-28 14:28:10'),
('4b7a31e6-fc9c-4e2c-9c51-5e25dd5a8c7a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:49', '2022-05-16 19:42:49'),
('4b7cb2dc-a353-4ecd-a57c-4be3cd0554a0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:24', '2022-05-10 17:28:24'),
('4b85cc08-f427-4588-b27a-4074e0c4afbc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:07:11', '2022-04-13 16:07:11'),
('4b908f43-7526-41c6-8f64-3f7afd32e229', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"552\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 20:18:32', '2022-06-03 20:18:32'),
('4bbbc045-f51d-451e-a3f4-cd9408fe9dcf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"359\",\"msg\":\"Worker has Claimed on Order ID Order ID- 359\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/359\"}', NULL, '2022-03-24 18:18:48', '2022-03-24 18:18:48'),
('4bc457dc-cd88-4e81-b7db-11478d5e9b09', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"479\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 13:05:40', '2022-04-18 13:05:40'),
('4bd96929-cf4a-461c-b6c0-0a3fd87e6793', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"416\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-01 14:50:29', '2022-04-01 14:50:29'),
('4c1e0436-b1b7-4ac7-a89c-b46de4aa9b7d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"541\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:47:49', '2022-06-03 16:47:49'),
('4c633cea-4ce4-4b0f-92cf-3f7fc151caf0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"545\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:45:34', '2022-06-03 19:45:34'),
('4c6ae6ab-f2fe-40d8-93a7-7507c403a69a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":569,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', '0000-00-00 00:00:00', '2022-06-11 16:08:50', '2022-06-11 16:08:50'),
('4c6c258c-517c-41fc-bb08-971f2e3a3f60', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"597\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 11:58:27', '2022-09-12 11:58:27'),
('4c877dc0-99da-49b4-ae4f-7f097a9bcc2a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:13:54', '2022-04-07 00:13:54'),
('4d3fe82d-e496-4589-a59b-7a4dbb540658', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"444\",\"msg\":\"Worker has Claimed on Order ID Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 15:47:51', '2022-04-09 15:47:51'),
('4d402fc6-0454-4f07-9b02-0109cc434059', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":439,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-08 15:37:30', '2022-04-08 15:37:30'),
('4d5ddceb-45b0-4856-aafa-5881f676a4db', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:42', '2022-03-25 00:27:42'),
('4d7de8fb-f51a-4145-aea1-e7241c88d319', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:08:07', '2022-05-20 19:08:07'),
('4d9eea6e-eec9-43af-bcdf-2b15b79d5869', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:48', '2022-05-16 19:57:48'),
('4dbfa4fc-7f73-45b3-96b0-917bbd60d722', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"438\",\"msg\":\"Order has been  completed  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:25:51', '2022-04-08 15:25:51'),
('4dbfcdab-20ca-44de-b163-2a08a4aaf555', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:15:58', '2022-05-16 20:15:58'),
('4dc51e56-e91e-4cbb-9f5d-385fdad975fd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"435\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:03:33', '2022-04-08 15:03:33'),
('4e060446-94b8-45ed-bb08-ed0e11c0b28a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"529\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-26 17:16:02', '2022-05-26 17:16:02'),
('4e29fd4c-cc43-4b8e-9b95-5b66d021e780', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:35', '2022-04-28 14:28:35'),
('4e3bc41e-c4fc-4dab-b24d-6a7b682cd9fd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"Worker has Claimed on Order ID Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:14:28', '2022-04-08 15:14:28'),
('4eb059a6-564b-407e-8325-f824f034ce5e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:15:46', '2022-05-16 20:15:46'),
('4eb342a1-9054-437e-a4fd-bd260e379944', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":572,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-11 20:26:32', '2022-06-11 20:26:32'),
('4ec27840-e825-4bb5-a3c1-5d58e84c662f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":580,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-11 20:49:04', '2022-06-11 20:49:04'),
('4f0b4e1c-18bc-4052-add8-fab7b4354370', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"349\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 349\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-04 11:20:04', '2022-03-04 11:20:04'),
('4f13448f-85d5-4d80-bbb8-a538ebca04de', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"504\",\"msg\":\"Worker has bid on Order ID- 504\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-05-10 19:34:41', '2022-05-10 19:34:41'),
('4f3ecdeb-791b-4783-aa64-eea568da300f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:51', '2022-05-16 19:57:51'),
('4f449786-2ecf-481b-abd3-13f25c81da81', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-05 16:36:10', '2022-04-05 16:36:10'),
('4f5733c1-e205-409f-8dac-8af535403bca', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:58', '2022-05-16 19:42:58'),
('4f70721f-ec23-474d-9842-f3198c5ddf45', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"533\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 19:43:40', '2022-05-29 19:43:40'),
('4f7e2e0b-dc1f-447a-94fb-370a96d15eac', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 11:55:15', '2022-04-07 11:55:15');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('4f84b7c7-deab-45af-8c8f-a7d02587f027', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:23:45', '2022-04-08 15:23:45'),
('4f857a22-a1f6-436a-a564-001a13294d21', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"513\",\"msg\":\"A File has been uploaded for admin for  Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 17:54:37', '2022-05-20 17:54:37'),
('4fbb6a8b-4cb8-4105-a526-219bbe8b0c99', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"434\",\"msg\":\"Worker has Claimed on Order ID Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:00:03', '2022-04-08 15:00:03'),
('50240137-0c7e-4b21-bc22-dd2c14b75e81', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"364\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:05:17', '2022-03-25 00:05:17'),
('5025b27f-5624-4490-a208-9ba85f3e870a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":355,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', '0000-00-00 00:00:00', '2022-03-24 13:29:50', '2022-03-24 13:29:50'),
('502c7e73-a770-42e8-b7d0-54c7545be621', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:27', '2022-04-18 11:50:27'),
('502c8376-8dd3-48be-aa16-b08912dcec39', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:47:10', '2022-04-08 15:47:10'),
('503381b2-2a46-49bc-a262-bfcc813e8cae', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"439\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:37:32', '2022-04-08 15:37:32'),
('504cc563-c9b7-454c-972a-3b1f11e5e11c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:29:58', '2022-05-20 19:29:58'),
('508586fd-8594-430f-b339-8bac3bed6219', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":540,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-03 16:35:45', '2022-06-03 16:35:45'),
('50946633-cb76-4140-b788-2603f31fa481', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:35', '2022-05-10 17:28:35'),
('509f31ac-d6d1-49c4-a705-8ca717cdff69', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:07', '2022-05-16 19:56:07'),
('50e4b6fe-e9f1-496e-ab3c-bb20c28fb232', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":478,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 16:02:36', '2022-04-18 16:02:36'),
('50e8a8de-f58a-42f2-a9f7-c2f42df8a19b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"356\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 356\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 17:51:32', '2022-03-24 17:51:32'),
('51125d22-06ca-4ad4-a391-4ce9e4073e48', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:07:20', '2022-04-13 16:07:20'),
('514cf8cc-29ea-49b0-907b-90e2d3fa90e1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:30:24', '2022-04-13 12:30:24'),
('515abdd6-5299-4066-98ac-df2ba63489ca', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"438\",\"msg\":\"Order has been  completed  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:21:28', '2022-04-08 15:21:28'),
('515b5198-fede-434c-954a-2378a6b1f742', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":477,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 12:07:36', '2022-04-18 12:07:36'),
('516ff30b-3a01-41b5-becc-7a69040d1a5b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:28', '2022-05-10 17:28:28'),
('51b8ffe8-7c19-47b7-8425-76d63e190eaa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"439\",\"msg\":\"A File has been uploaded for admin for  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:25:32', '2022-04-08 16:25:32'),
('51dd89b8-773f-49fd-ac76-25cb47b1b794', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"589\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-15 15:15:48', '2022-06-15 15:15:48'),
('520245dc-aa1a-4f68-8b06-13f2af5f4b07', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"532\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 19:02:41', '2022-05-29 19:02:41'),
('52698ddd-03a1-4c4b-a68c-e7f243ec342c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"486\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 13:39:01', '2022-04-28 13:39:01'),
('529f15ea-5bf9-4bc6-ae34-1c9c5e609bfd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:50', '2022-05-10 19:32:50'),
('52b55233-1bb5-4aa8-8e8f-83901813f2be', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:49:48', '2022-04-09 17:49:48'),
('52b6713c-944c-4d3b-9347-8e06ab0fc241', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"504\",\"msg\":\"Worker has bid on Order ID- 504\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-05-10 19:34:40', '2022-05-10 19:34:40'),
('52da86c3-d4d6-49c9-8520-2c01d7b6f78a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:25', '2022-05-10 19:32:25'),
('52e36cc5-bd17-4eb3-8f13-469bbab2d53e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"542\",\"msg\":\"Worker has Claimed on Order ID Order ID- 542\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/542\"}', NULL, '2022-06-03 17:10:41', '2022-06-03 17:10:41'),
('53396edb-9987-42a6-a5f9-6d03cc3b20ba', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":451,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', '0000-00-00 00:00:00', '2022-04-12 14:39:51', '2022-04-12 14:39:51'),
('533f9a30-5edf-41f2-b11f-75f62565a527', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"477\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-16 14:44:03', '2022-04-16 14:44:03'),
('5366dc6c-20ab-4280-bc42-6d6d9431f13a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"477\",\"msg\":\"A File has been uploaded for admin for  Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:54:43', '2022-04-18 12:54:43'),
('536a569f-58a9-492d-a6f2-17c49530afe3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"Order has been  completed  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:21:35', '2022-04-08 15:21:35'),
('53b52109-138a-4cb3-8f81-f41fd5d0ff55', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"534\",\"msg\":\"Order has been  completed  Order ID- 534\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/534\"}', NULL, '2022-05-31 13:16:47', '2022-05-31 13:16:47'),
('53bfccf6-0490-4f97-96a8-e89813beeba4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"426\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 22:34:18', '2022-04-07 22:34:18'),
('53d3e742-9dc9-478f-a257-304323373c50', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:50', '2022-05-16 19:42:50'),
('54219b50-88df-4b3c-a982-17f0348dd66e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:13:41', '2022-04-07 00:13:41'),
('54945aaa-110a-4078-8ea8-66f1d52341a9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:46', '2022-05-16 19:57:46'),
('54b7bcb8-8422-4663-b4f5-d586f17d0b9c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"445\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 445\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 16:48:44', '2022-04-09 16:48:44'),
('55098b3a-d902-41bd-a9ad-1edf2535a0b6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:37', '2022-05-10 19:32:37'),
('5529cf03-6bf8-4310-beb1-d6eca173976f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:37:07', '2022-03-24 19:37:07'),
('5536aaee-e314-4e05-a83f-3ef2c0f56e76', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":491,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-28 14:26:41', '2022-04-28 14:26:41'),
('55451eec-c4bd-46aa-bcde-afc7cd8c450b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"548\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:57:58', '2022-06-03 19:57:58'),
('5556bfd7-a5b9-474e-b391-8fa97d4a7974', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:24', '2022-05-16 19:57:24'),
('555d106d-565e-459f-a11e-e23bd0c705c9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"533\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 19:43:39', '2022-05-29 19:43:39'),
('55ab78c7-a76e-47b4-8b39-a163b8791700', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:23', '2022-04-27 14:33:23'),
('55c0c3dd-9fb3-4a7c-a6e1-14f52675defb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"537\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 14:22:09', '2022-06-03 14:22:09'),
('560bc009-0499-471f-b8c2-85cb308692dc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"585\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-13 19:18:47', '2022-06-13 19:18:47'),
('562d3f5e-785c-491b-8989-b219f22a6ef0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:38', '2022-05-10 17:28:38'),
('563d6e65-96a6-4cac-8a1d-c4432838a2c9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"440\",\"msg\":\"Worker has Claimed on Order ID Order ID- 440\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/440\"}', NULL, '2022-04-09 14:08:14', '2022-04-09 14:08:14'),
('566a777b-998c-42e1-ba47-23f889c4a71d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:07:39', '2022-05-20 19:07:39'),
('567ba608-5bc7-4663-999e-8727f46e9a00', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:59:25', '2022-04-27 13:59:25'),
('567edf2a-5784-4660-9487-6263e132bfcb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:30:14', '2022-05-20 19:30:14'),
('569f404a-dd38-413e-a933-c12cae54bc05', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 14:51:58', '2022-04-18 14:51:58'),
('56aaf317-56e5-451a-9eb4-0883ebb7b140', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:58:50', '2022-04-22 11:58:50'),
('56be2a69-f215-49a3-ac47-737361dc5e10', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:41:05', '2022-04-12 23:41:05'),
('56edb178-38ef-4b84-9ef0-84d2f3a94d92', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:34', '2022-05-16 19:49:34'),
('572aacb1-00da-4791-8e60-536e86f2932f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:26:30', '2022-03-25 00:26:30'),
('5730a1e1-3053-43ac-a8b4-ebe0c74e9c61', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"529\",\"msg\":\"A File has been uploaded for admin for  Order ID- 529\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/529\"}', NULL, '2022-05-27 20:00:24', '2022-05-27 20:00:24'),
('573a7fdc-9277-4586-8596-321e9b57a49d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:30:01', '2022-05-20 19:30:01'),
('57a0ec0f-d48c-4327-a68e-65a957298205', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 13:04:26', '2022-04-18 13:04:26'),
('57af3bfd-e987-4949-91be-762cc248e319', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"435\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:03:14', '2022-04-08 15:03:14'),
('57cde277-67ef-48fd-9ca7-6c56b2053b93', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"433\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:12:29', '2022-04-08 13:12:29'),
('57fd5561-a59b-4140-a6c9-204a2a36e309', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"Order has been  completed  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:15:16', '2022-04-18 16:15:16'),
('580ef301-f0aa-4a63-b8dc-f1d201603959', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"513\",\"msg\":\"Worker has Claimed on Order ID Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 12:32:49', '2022-05-20 12:32:49'),
('58195784-de25-47f6-85e5-7c7f56059b97', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"490\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:12:18', '2022-04-28 14:12:18'),
('5826c5a2-f5b7-48bb-95e6-0f4cb9d17d7b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"569\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:04:34', '2022-06-11 16:04:34'),
('5831f6d2-1384-433c-b3f7-bd2d8224085f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"452\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:56:49', '2022-04-12 14:56:49'),
('5884ffa4-b4bc-4357-8924-47ed63ba956a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:25:29', '2022-03-04 11:25:29'),
('58c06d53-3acf-4f2e-b1ed-e9a4f4575dfa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"492\",\"msg\":\"Worker has bid on Order ID- 492\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:27:56', '2022-04-28 14:27:56'),
('59295a1e-31e6-4b58-8685-3f5f481bb89e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 15:27:23', '2022-04-18 15:27:23'),
('592bc085-75ba-41c4-a775-167672f81b10', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:02:45', '2022-04-18 16:02:45'),
('592c422b-4787-4d99-8f86-19255bb811a6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:33', '2022-05-10 19:32:33'),
('59b5b2bf-f38e-4eb3-9346-febd72082154', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:06:29', '2022-04-13 16:06:29'),
('59f19253-4042-44e7-9e8c-2f2bcce3cf78', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"438\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:13:00', '2022-04-08 15:13:00'),
('5a3ab2cb-e8a4-4592-ad8c-e76e4c6d9d7d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"445\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 445\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 16:48:50', '2022-04-09 16:48:50'),
('5a60a08b-a980-47d8-b169-ba2e1801e086', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"531\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 01:34:48', '2022-05-29 01:34:48'),
('5a9682b9-5649-4397-ae28-33fbfc6cf5cc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:04', '2022-05-20 17:57:04'),
('5a97fa3e-7d5f-4b9e-bfcb-6e57287c308d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"506\",\"msg\":\"A File has been uploaded for admin for  Order ID- 506\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/506\"}', NULL, '2022-05-16 17:31:41', '2022-05-16 17:31:41'),
('5aa57197-fc7d-40cf-894e-87a93f7fe186', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"427\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 22:40:21', '2022-04-07 22:40:21'),
('5ad54669-913b-4db1-a7db-ac4077ff38be', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"429\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 429\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-07 22:51:27', '2022-04-07 22:51:27'),
('5ad8473c-2c62-4acd-97c7-58270a598284', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"597\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 11:58:33', '2022-09-12 11:58:33'),
('5b38910c-0375-45c7-828b-d0d7d78a9ab0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"570\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:28:47', '2022-06-11 16:28:47'),
('5b6234dc-5de7-48fd-b1c3-f037bbd616cf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:53', '2022-05-10 19:32:53'),
('5b7a24f2-a934-4d9b-871a-e601305dad40', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:39', '2022-03-24 18:16:39'),
('5ba808fc-11d7-4e96-be27-d03aa0fd232f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"442\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 442\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 13:35:38', '2022-04-09 13:35:38'),
('5bd52496-3b6d-48a9-8629-11ab64672fc6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-04 15:42:42', '2022-04-04 15:42:42'),
('5c00ecab-acdf-471f-943e-5a7862304246', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"572\",\"msg\":\"Worker has Claimed on Order ID Order ID- 572\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/572\"}', NULL, '2022-06-11 20:26:33', '2022-06-11 20:26:33'),
('5c0da53d-cb2a-4377-8894-8df18a92ec64', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"452\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:56:55', '2022-04-12 14:56:55'),
('5c2425d2-54b2-44c2-9750-7611e371aefa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:41', '2022-05-20 19:26:41'),
('5c621f2d-d56d-4700-bb49-a9ead82a1933', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:15', '2022-03-23 13:43:15'),
('5c754a56-7de1-4a65-846f-a73036a4d487', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"586\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-14 18:51:06', '2022-06-14 18:51:06'),
('5c86e98c-dede-4fa6-b7ff-196d62aadc68', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"490\",\"msg\":\"Worker has bid on Order ID- 490\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:13:59', '2022-04-28 14:13:59'),
('5caacb12-e3ec-49cf-8f43-5666df59962f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":444,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-09 15:47:48', '2022-04-09 15:47:48'),
('5d15917a-df72-44ae-b5ff-4abf6ceaa797', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"490\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:12:40', '2022-04-28 14:12:40'),
('5d6105f2-3525-48de-a1b5-1a1ec7282b3f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:27:55', '2022-04-28 14:27:55'),
('5dca5fa0-972f-48a3-91c5-125fa19861df', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:55:29', '2022-05-16 19:55:29'),
('5dcf6452-e6c0-4533-85c2-c0f39c9cb29d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"434\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:35:39', '2022-04-08 13:35:39'),
('5df619b3-3b10-4c7f-9169-01d74009d1b0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"356\",\"msg\":\"Order has been  completed  Order ID- 356\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/356\"}', NULL, '2022-03-24 18:14:16', '2022-03-24 18:14:16'),
('5e1eb859-564d-4b3d-8af3-c75eee872216', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"578\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:45:07', '2022-06-11 20:45:07'),
('5e272b74-e0c3-4d9e-8e18-4f026afabc6c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:12', '2022-05-20 17:57:12'),
('5e4c1471-8401-4e59-8ed5-5e206c5ab5b5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:23:48', '2022-04-28 14:23:48'),
('5e679e4b-1493-4555-8870-1233f568ce3d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"439\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:37:44', '2022-04-08 15:37:44'),
('5e91b801-1a20-42a6-b445-a88e870b0117', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:36', '2022-05-10 17:28:36'),
('5ea6ef82-55c4-494b-b417-7bae44ee9212', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"384\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-31 13:10:29', '2022-03-31 13:10:29'),
('5ee43952-fc08-42fc-ae7d-2633adadc9ba', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 15:27:26', '2022-04-18 15:27:26'),
('5ef1b5a3-0bf4-41f9-bc95-7df7d93835b9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:07:20', '2022-05-20 19:07:20'),
('5ef518d6-2fac-48e6-9f4f-3287d405eae1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:49:56', '2022-04-09 17:49:56'),
('5f08fe28-a7e2-4f4f-b2a0-c7c8007289b3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"574\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:29:15', '2022-06-11 20:29:15'),
('5f22ee30-3444-4888-85fd-46e8ef5e12d1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:55', '2022-05-20 17:58:55'),
('5f247a8a-c2c6-4a83-aa16-55eab7c6e7ca', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"355\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 12:59:41', '2022-03-24 12:59:41'),
('5f34c70c-4a71-4b8f-9de3-fb23485edf54', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"532\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 19:02:38', '2022-05-29 19:02:38'),
('5f37eb90-e158-4590-8003-a3e6045b6fa8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"572\",\"msg\":\"A File has been uploaded for admin for  Order ID- 572\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/572\"}', NULL, '2022-06-11 17:48:51', '2022-06-11 17:48:51'),
('5f74a739-759b-4035-bb5e-0077b7b8e006', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"479\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 13:05:56', '2022-04-18 13:05:56'),
('5f7938aa-d647-475f-86e0-1b1177e594aa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"361\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 19:17:14', '2022-03-24 19:17:14'),
('5f79ff85-c3a5-4e8b-8fdc-f503883dd9d4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"439\",\"msg\":\"A File has been uploaded for admin for  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:12:09', '2022-04-08 16:12:09'),
('5fee2689-2561-49d6-94af-67ebf96cc0d5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"435\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:03:27', '2022-04-08 15:03:27'),
('602482fc-2fd2-498c-93fe-26a592d8582e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"481\",\"msg\":\"Worker has Claimed on Order ID Order ID- 481\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/481\"}', NULL, '2022-04-23 13:10:28', '2022-04-23 13:10:28'),
('60959a3b-9d9a-427c-bc5c-05cebbaf6e4f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"33\",\"msg\":\"Your Page request has been Approved Order ID- 445\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/445\"}', NULL, '2022-04-09 16:46:55', '2022-04-09 16:46:55'),
('60aba164-b62d-4b65-80a4-8e1bbf563cd9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:23:51', '2022-04-28 14:23:51'),
('60b3a02f-eff9-438e-9ab6-692b19438be7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"477\",\"msg\":\"A File has been uploaded for admin for  Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:54:38', '2022-04-18 12:54:38'),
('60dd059d-c480-49e2-b050-057f596f6525', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:41:44', '2022-04-12 23:41:44'),
('60ddec4d-b311-4037-8ab9-30090ebb6caf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"479\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 13:05:59', '2022-04-18 13:05:59'),
('612c7a35-1a0a-41ba-9cdd-15c960f26ece', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"358\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:15:21', '2022-03-24 18:15:21'),
('615664b3-855b-4783-ab46-00f00bad5f00', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:34:23', '2022-04-28 14:34:23'),
('6186ccfb-2b87-487a-9647-8ef59a104886', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"436\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:06:03', '2022-04-08 15:06:03'),
('6194eeb3-7706-439c-9eb1-54065995ed4e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:54', '2022-05-10 19:32:54'),
('61d6b515-5ab9-4827-9ba8-ef4a38ddaa57', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"364\",\"msg\":\"A File has been uploaded for admin for  Order ID- 364\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/364\"}', NULL, '2022-03-25 00:07:39', '2022-03-25 00:07:39'),
('61df941c-8e0e-4ad4-a716-16c59535e253', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"439\",\"msg\":\"Order has been  completed  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:12:19', '2022-04-08 16:12:19'),
('61e3ff13-fde1-43a6-9bba-b7b5d16aa64e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"442\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 13:35:15', '2022-04-09 13:35:15'),
('62108558-a305-483c-9b67-cf9a1eabeaae', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"481\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-23 13:09:59', '2022-04-23 13:09:59'),
('621394ee-df38-41bc-82d9-9d839f3b5f6b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:06:10', '2022-04-13 16:06:10'),
('6215d53b-a047-4df1-abac-d4589079d3af', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:15:47', '2022-05-16 20:15:47'),
('62310977-0136-4f35-b9cf-7a4ee7f943eb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:23', '2022-05-16 19:57:23'),
('62311dee-f382-4313-b7e7-82fb8c1f1ca5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:39', '2022-05-20 19:26:39'),
('62601ccb-8ae4-4ad5-9c24-515f16bf39dd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":444,\"msg\":\"A File Message has been uploaded for Order ID 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/444\"}', NULL, '2022-04-09 15:30:14', '2022-04-09 15:30:14'),
('626b3b48-6f7d-41b4-a676-ebd603c646ce', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":542,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-03 17:10:41', '2022-06-03 17:10:41'),
('62a1eb19-d804-4e38-916c-0416654bc138', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:48', '2022-04-28 14:30:48'),
('63174fe7-843c-4160-96f2-24c5b2287f88', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:07:26', '2022-04-13 16:07:26'),
('6390c4c4-a098-402c-b1da-9f1db88100f9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:04', '2022-05-16 19:56:04'),
('63c7ca04-1ea2-494f-8012-f560663f8d11', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"551\",\"msg\":\"Worker has bid on Order ID- 551\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-03 20:17:22', '2022-06-03 20:17:22'),
('63ec67f8-c21c-4b97-9320-9cec3c3c4eec', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"347\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-03 18:56:19', '2022-03-03 18:56:19'),
('64106d50-9859-4203-b377-f5688c3bda8a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:53', '2022-05-10 19:32:53'),
('641df636-706b-4536-9c77-e933244d1a5b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:37:10', '2022-03-24 19:37:10'),
('6432072b-44f2-4063-90e4-0cb45603c961', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"355\",\"msg\":\"A File has been uploaded for admin for  Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/355\"}', NULL, '2022-03-24 17:45:42', '2022-03-24 17:45:42'),
('6490b188-dfe6-4bc5-84c4-eae026528714', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"444\",\"msg\":\"A File has been uploaded for admin for  Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 15:27:42', '2022-04-09 15:27:42'),
('649b317d-cee0-43ed-aad8-74e631eb24fa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:51:00', '2022-04-18 11:51:00'),
('64b0bdf3-1365-44c3-907e-02f31c007eac', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:10:50', '2022-03-25 00:10:50'),
('64bd0d82-11ff-4ed7-a3dd-1849368474b4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:12:09', '2022-04-07 00:12:09'),
('64caa458-2eef-495a-b3c9-de3d064b66d9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:12:25', '2022-04-07 00:12:25'),
('64d2ca4e-a9a1-45df-8824-7e57c37ce459', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"435\",\"msg\":\"A File has been uploaded for admin for  Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/435\"}', NULL, '2022-04-08 15:09:10', '2022-04-08 15:09:10'),
('651ef61c-b2de-45a9-ae1b-9c9a64f5cbab', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":434,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-08 13:36:46', '2022-04-08 13:36:46'),
('6522fc9b-28b1-4dfa-8fd0-7abdd5c1a26c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":593,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-16 19:39:26', '2022-06-16 19:39:26'),
('652895b3-4603-4c3c-aec4-e2c945325f97', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"350\",\"msg\":\"Your Deadline Request has been Accepted\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/350\"}', NULL, '2022-03-24 12:17:41', '2022-03-24 12:17:41'),
('65525651-a50f-484b-b8b7-3c584056e161', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"429\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 22:50:09', '2022-04-07 22:50:09'),
('65685c5d-8e80-497d-b251-553c99af21d3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:15:53', '2022-05-16 20:15:53'),
('657cb74b-a026-4eda-82f8-ddd841b60e83', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:55', '2022-05-16 19:42:55'),
('657d4bd8-27e7-493a-866a-05f264c0158b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:55:30', '2022-05-16 19:55:30'),
('6581fd0a-c145-41ab-98b3-6c383d85765f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"32\",\"msg\":\"Your Page request has been Approved Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/444\"}', NULL, '2022-04-09 15:19:50', '2022-04-09 15:19:50'),
('6585bc79-f7f1-4ac5-a635-fd378da19f2e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:45', '2022-05-10 17:28:45');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('65dad1fc-2376-4113-959e-ebb63e009bce', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"23\",\"msg\":\"Your Page request has been Approved Order ID- 429\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/429\"}', NULL, '2022-04-07 23:16:14', '2022-04-07 23:16:14'),
('66943b89-736c-49cf-ae2f-89a7cc4ff5f1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"Worker has Claimed on Order ID Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-05 11:16:56', '2022-04-05 11:16:56'),
('66dc2d23-ae23-45b9-890e-58ca52454886', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:59:12', '2022-04-22 11:59:12'),
('67420bdf-bcdd-420f-9d3c-a17d6b1462dd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"579\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:45:34', '2022-06-11 20:45:34'),
('674db84a-b878-4f98-a92b-24edbecafe6d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"513\",\"msg\":\"Worker has Claimed on Order ID Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 12:32:49', '2022-05-20 12:32:49'),
('674fe6ea-c167-439f-99fa-5f3222bdf0e3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"485\",\"msg\":\"Worker has bid on Order ID- 485\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-27 14:33:01', '2022-04-27 14:33:01'),
('676cc4b3-5739-43f0-8c90-d600dd33ba73', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"495\",\"msg\":\"Worker has bid on Order ID- 495\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:34:44', '2022-04-28 14:34:44'),
('67789058-ff9b-49a5-bac2-24a3d426c6cf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"571\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:33:07', '2022-06-11 16:33:07'),
('680f19f2-1d0c-469b-b03d-b6899aa9577e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:38', '2022-05-16 19:56:38'),
('6863ef0d-d146-4c88-b50e-1411fabb03fd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":440,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-08 16:33:35', '2022-04-08 16:33:35'),
('686e7228-ad22-4fa8-b0d3-ddd3a3334ece', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"357\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 17:24:33', '2022-03-24 17:24:33'),
('68b3db20-6e63-4aab-a820-7fe077400f09', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:13:34', '2022-04-08 15:13:34'),
('68bf6af7-d547-466a-b51b-ab2f3d6528f9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"479\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 13:05:37', '2022-04-18 13:05:37'),
('68c1fd9a-e94b-4d9b-909b-440e7a396b60', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"444\",\"msg\":\"A File has been uploaded for admin for  Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 15:27:53', '2022-04-09 15:27:53'),
('68fa3023-f035-40e5-bfde-0e75cd056755', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:50', '2022-03-25 00:27:50'),
('69152aa7-d8ea-459d-9194-211440bf6396', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"485\",\"msg\":\"Worker has bid on Order ID- 485\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-27 14:33:12', '2022-04-27 14:33:12'),
('69495172-0ffa-4dc9-b76d-4df1e82820e0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:02', '2022-03-24 18:17:02'),
('696fc9c5-bea1-49e7-bd33-4aceb455738b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"553\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 20:20:25', '2022-06-03 20:20:25'),
('69967e1b-e2e0-478e-a49b-94050c152ae0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:16', '2022-04-27 14:33:16'),
('699e5b2b-567d-4203-ac28-68462ba82ac0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"507\",\"msg\":\"Worker has Claimed on Order ID Order ID- 507\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/507\"}', NULL, '2022-05-13 19:55:50', '2022-05-13 19:55:50'),
('69a479d1-6cac-47c1-b838-c0291736c5ca', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:23', '2022-05-10 17:28:23'),
('69d8ad88-f8c3-47ea-8f66-198381d9a96a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"359\",\"msg\":\"Worker has Claimed on Order ID Order ID- 359\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/359\"}', NULL, '2022-03-24 18:18:18', '2022-03-24 18:18:18'),
('69e8e77f-8f55-4ce1-8b2b-4d8c58f70113', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"356\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 356\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 17:51:34', '2022-03-24 17:51:34'),
('6acbc033-ab63-4f1e-8524-9701d3d16d4f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:20', '2022-05-16 19:56:20'),
('6ae9172c-e2dd-48a8-a54b-882e0fcd97fb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":364,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', '0000-00-00 00:00:00', '2022-03-25 00:06:53', '2022-03-25 00:06:53'),
('6b41ef33-c0c4-436b-987c-cdca726f8781', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"362\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 19:14:37', '2022-03-24 19:14:37'),
('6b5c098d-9fe1-4bea-8263-72d94aaf1b29', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"551\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 20:16:54', '2022-06-03 20:16:54'),
('6b6c0cfd-8d8a-4e9c-8499-3a10a124b90a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"479\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 13:06:02', '2022-04-18 13:06:02'),
('6b838941-43c2-4ea1-afca-ae57b8fbea14', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"Worker has Claimed on Order ID Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:13:10', '2022-04-08 15:13:10'),
('6b901bda-abc9-4201-9374-ad6ca9ce8a34', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-01 18:28:50', '2022-04-01 18:28:50'),
('6babf71d-4194-4dfb-b623-af0a0a9ab24b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:26', '2022-05-16 19:49:26'),
('6bc97085-319f-474d-8e4e-9ccfa249521a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:50', '2022-05-16 19:57:50'),
('6c45080a-c981-4ee0-b7ab-cb1277586615', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:50:03', '2022-04-09 17:50:03'),
('6c5c0b20-2a5f-45f9-b421-f685362f29cc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"438\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:12:37', '2022-04-08 15:12:37'),
('6c7022ed-5c59-4f26-ab45-6b8221da4a9f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"360\",\"msg\":\"Worker has Claimed on Order ID Order ID- 360\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/360\"}', NULL, '2022-03-24 19:04:51', '2022-03-24 19:04:51'),
('6c7ffdaf-37fa-487a-9692-3171aa8c3229', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:26', '2022-03-23 13:43:26'),
('6c85cbd2-fc16-4bfc-9aee-24e62aa190ff', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:35', '2022-05-10 19:32:35'),
('6c86c563-f957-46ce-9b67-80322fed3496', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"438\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:12:51', '2022-04-08 15:12:51'),
('6cc2d9f0-7eb1-4f40-8662-cd66e5cc4ab9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"Order has been  completed  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:05:35', '2022-04-18 16:05:35'),
('6ce58e70-fbc4-48dc-8ad9-2ea536f8f176', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"513\",\"msg\":\"A File has been uploaded for admin for  Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 17:54:37', '2022-05-20 17:54:37'),
('6d060d3d-c728-4ba7-9780-a88a70bf1d9f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"353\",\"msg\":\"Worker has Claimed on Order ID Order ID- 353\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/353\"}', NULL, '2022-03-23 13:44:23', '2022-03-23 13:44:23'),
('6d0e634e-138f-4b0b-98ac-cb7268a35c6b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"440\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 440\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-08 16:36:56', '2022-04-08 16:36:56'),
('6d290dc0-6f52-4446-9172-b2376af7fcc0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:45', '2022-04-28 14:11:45'),
('6d30f851-8df3-4d54-9346-5626f2e46468', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:06', '2022-05-16 19:56:06'),
('6d3be3a8-b6a2-4669-8d5a-ec19ab6c2940', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":591,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-16 19:28:31', '2022-06-16 19:28:31'),
('6d5ed7ec-9a3f-4a40-8f3f-0592e2d79dcc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"360\",\"msg\":\"Worker has Claimed on Order ID Order ID- 360\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/360\"}', NULL, '2022-03-24 19:04:49', '2022-03-24 19:04:49'),
('6da8bc4b-7401-4386-b80c-15d04cbcfddc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:32', '2022-03-25 00:27:32'),
('6e2cfc5d-abba-4f03-b841-e4636a3d316e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"451\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:32:27', '2022-04-12 14:32:27'),
('6e5e0002-2197-443c-8682-4d33f4d0ebc0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"428\",\"msg\":\"A File has been uploaded for admin for  Order ID- 428\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/428\"}', NULL, '2022-04-07 22:43:57', '2022-04-07 22:43:57'),
('6e633221-db89-4481-bc70-b9a31abc9657', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:54', '2022-04-18 11:50:54'),
('6e82250c-3242-48d3-a24a-eb9b2aa64705', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"523\",\"msg\":\"Your Deadline Request has been Accepted\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/523\"}', NULL, '2022-05-22 14:46:43', '2022-05-22 14:46:43'),
('6eabffe7-7a7b-492b-abea-4499a5b569d1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":428,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-07 22:42:28', '2022-04-07 22:42:28'),
('6ebbca31-c17f-4644-933b-34f6198e4306', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"439\",\"msg\":\"A File has been uploaded for admin for  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:20:28', '2022-04-08 16:20:28'),
('6ed1b6f6-5af8-4740-8ef0-7cf23b559e29', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:34:54', '2022-04-28 14:34:54'),
('6ee5f816-6e4c-41b2-8b66-65bab661219b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"438\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:12:57', '2022-04-08 15:12:57'),
('6ef375c2-e4b2-4687-b100-a0f0d2d1a957', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"365\",\"msg\":\"Worker has Claimed on Order ID Order ID- 365\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/365\"}', NULL, '2022-03-25 00:17:36', '2022-03-25 00:17:36'),
('6f33fe25-70ea-47ff-aae6-395def394e28', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:23:35', '2022-04-28 14:23:35'),
('6f4148b4-664e-49fb-877e-cc3f8d81e1ff', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:17', '2022-04-28 14:28:17'),
('6f500227-2a38-4d6c-8106-fa446cfbb33c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:29:57', '2022-05-20 19:29:57'),
('6f70198b-d708-49a1-a6be-42bf6244dabe', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:01', '2022-04-28 14:28:01'),
('6f718ee2-83c3-4ed5-879e-47511351adf1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:20', '2022-04-28 14:28:20'),
('6f8d34bc-57c1-4328-9409-73e837187147', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"506\",\"msg\":\"A File has been uploaded for admin for  Order ID- 506\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/506\"}', NULL, '2022-05-16 17:31:41', '2022-05-16 17:31:41'),
('6fa0432d-b313-4035-90c5-4c495ab33d91', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"441\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 16:36:11', '2022-04-08 16:36:11'),
('6fca228e-a989-440c-81ce-3c082d3626d8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 11:47:57', '2022-04-18 11:47:57'),
('6fcae95d-0dc8-485c-b9e1-4e7befd6d23d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"439\",\"msg\":\"Order has been  completed  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:20:36', '2022-04-08 16:20:36'),
('6ff69ec8-f4e5-4cfc-abd5-07ed2ed108ad', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"451\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:33:06', '2022-04-12 14:33:06'),
('70463223-f2ef-43b4-a73e-f71d88f0982a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":367,\"msg\":\"A File Message has been uploaded for Order ID 367\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/367\"}', NULL, '2022-03-26 02:03:17', '2022-03-26 02:03:17'),
('704851b4-ccde-4d24-95cd-2e2aaf0a3777', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"434\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:36:14', '2022-04-08 13:36:14'),
('705aedbb-f8ae-4842-a91f-187e64e8003d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:47', '2022-03-24 18:16:47'),
('70845fd5-750b-4fb4-9f09-13439ac4328c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"440\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 16:32:32', '2022-04-08 16:32:32'),
('70acec86-5370-4613-8cf7-73408dce985d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":529,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-26 17:16:58', '2022-05-26 17:16:58'),
('70ad5f5b-3d32-485c-b0ce-5e61caff2bf6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:40', '2022-05-20 17:58:40'),
('70b5ddfd-f0fd-4b38-a502-ded7705c4760', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"568\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 15:45:45', '2022-06-11 15:45:45'),
('70eb35a8-6647-4488-b99f-3c745e062830', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:49:54', '2022-04-09 17:49:54'),
('71029998-5c66-4b48-b60c-6d29564a1a84', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"440\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 16:32:49', '2022-04-08 16:32:49'),
('71029e4e-4afd-4344-81e9-a36767d413f0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"429\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 429\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-07 22:55:18', '2022-04-07 22:55:18'),
('71123441-3461-437a-8b12-5e100c2aaa38', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:54', '2022-05-16 19:42:54'),
('7115db21-102f-4030-8786-cf52e4e83719', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"428\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 22:41:13', '2022-04-07 22:41:13'),
('711b5806-3b2e-4ca9-9d19-5ad6e5b70999', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"433\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:12:17', '2022-04-08 13:12:17'),
('711e9336-9995-4bdb-b84d-826cdb39a56e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:53', '2022-05-16 19:42:53'),
('71d9b49c-1d6d-42bd-9fc5-9e8ce1ef5be4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":\"348\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-03 18:56:53', '2022-03-03 18:56:53'),
('71e465b2-3649-41f1-9fd9-0131b7ee273b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"366\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:12:18', '2022-03-25 00:12:18'),
('72067a00-81a4-4633-89f8-4f0907148f24', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 13:13:50', '2022-04-18 13:13:50'),
('720d5102-1418-4fb1-8d88-0390c41d75ec', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"586\",\"msg\":\"Worker has bid on Order ID- 586\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-14 19:49:01', '2022-06-14 19:49:01'),
('7231a763-28a5-424b-b497-e81a8bf0fa8a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:23', '2022-05-10 17:28:23'),
('726027b0-543a-4ab9-97e7-eafe64c0e779', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"448\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 448\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-11 13:09:56', '2022-04-11 13:09:56'),
('7267cbba-8875-4599-9c8e-0ad5ad815566', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"434\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:35:42', '2022-04-08 13:35:42'),
('727a7761-2ee0-4d8e-8a37-668b40573e5d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:31:09', '2022-04-13 12:31:09'),
('728859a3-8c33-4733-a87e-cfbb23fa349f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:33:58', '2022-03-24 19:33:58'),
('72968d76-d1d7-4948-a7e5-932f605748e1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:18', '2022-05-10 19:32:18'),
('72996a6e-9dc5-441d-ae25-f2535f3d4239', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"430\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 12:20:46', '2022-04-08 12:20:46'),
('729d19c4-099c-45cd-b51e-1e04c2d6a659', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:59', '2022-05-16 19:42:59'),
('72f1cc0e-eea9-4248-ad75-da99da1c4181', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"479\",\"msg\":\"Worker has Claimed on Order ID Order ID- 479\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/479\"}', NULL, '2022-04-21 17:01:14', '2022-04-21 17:01:14'),
('72f67ac5-bd9c-4053-9d5d-9d93224c460a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"490\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:12:09', '2022-04-28 14:12:09'),
('7339e9fe-219e-42df-818d-400e52fa9a16', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"428\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 428\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-07 22:42:03', '2022-04-07 22:42:03'),
('7377025d-7038-46e0-9302-34631da3ec04', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:30:29', '2022-05-10 17:30:29'),
('73780390-eaf2-42b0-8f89-7426312c0ca3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:51', '2022-04-28 14:11:51'),
('7394d225-7ec4-44c6-8592-eaa989d457fc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"434\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:35:52', '2022-04-08 13:35:52'),
('740bcab4-55d3-4c03-af1d-0ac99505bd43', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 13:03:26', '2022-03-24 13:03:26'),
('7431ee41-31a7-4e39-918d-d0903fcf4ac7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"366\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:12:04', '2022-03-25 00:12:04'),
('743a026f-8c4e-4e32-9673-26dd605a81da', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"442\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 13:35:18', '2022-04-09 13:35:18'),
('74502d87-f135-4f8b-84b8-9b101e4c6246', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"Worker has Claimed on Order ID Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-04 15:41:38', '2022-04-04 15:41:38'),
('745a36a9-299e-4667-87ec-840efcef1426', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:00:13', '2022-04-27 14:00:13'),
('74619138-8fd4-47fd-a5b3-53793a2fd193', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"452\",\"msg\":\"Worker has Claimed on Order ID Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-12 15:00:10', '2022-04-12 15:00:10'),
('74645920-0512-46a0-b17b-afe5f657bd0c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:33', '2022-05-16 19:57:33'),
('746ee7ef-0ecc-4c28-9a0c-92f383765969', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"541\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:47:48', '2022-06-03 16:47:48'),
('74aa0df6-ab29-46da-9abe-366d9df737a2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"438\",\"msg\":\"Order has been  completed  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 16:00:41', '2022-04-08 16:00:41'),
('74ab7133-91de-443b-8064-5bea09c00ef2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:31', '2022-05-10 19:32:31'),
('74e99c6e-5e46-4102-99b7-887e79344f2b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:23:51', '2022-04-08 15:23:51'),
('74eeaa80-ae0a-4bb8-9fff-0926fb3dbbcd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":\"348\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-03 18:57:55', '2022-03-03 18:57:55'),
('74f5ef44-5365-4bb3-8352-cd3a4632fe8c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:26', '2022-05-16 19:56:26'),
('74f69dcc-07ca-45cb-b5a8-69f38e7ccb0d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"364\",\"msg\":\"Order has been  completed  Order ID- 364\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/364\"}', NULL, '2022-03-25 00:08:01', '2022-03-25 00:08:01'),
('752e5633-1dfa-48f4-b561-f8001741479f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":495,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-28 16:18:11', '2022-04-28 16:18:11'),
('754901b8-d143-494c-9982-445f082b89b8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:06:26', '2022-04-13 16:06:26'),
('754a18df-e698-4a91-b278-92e35827d365', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"452\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:56:25', '2022-04-12 14:56:25'),
('7556cccc-03c7-469f-ae3e-4189e2ba4e2d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"439\",\"msg\":\"Worker has Claimed on Order ID Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 15:37:36', '2022-04-08 15:37:36'),
('75b06316-be9d-49c5-bd57-d46e148aaa0a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:02:42', '2022-04-18 16:02:42'),
('75bca01a-abb9-4aa7-b889-1ca1f96df424', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"589\",\"msg\":\"Worker has bid on Order ID- 589\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-15 15:16:14', '2022-06-15 15:16:14'),
('75c46d05-0841-44cc-a833-ac4392e0989a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"360\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:29:28', '2022-03-24 18:29:28'),
('75c89c26-9b8f-493d-81a2-8a2c723d17be', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:16:00', '2022-05-16 20:16:00'),
('75ccc523-3115-4aff-bd9c-8321870c876a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"454\",\"msg\":\"A File has been uploaded for admin for  Order ID- 454\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/454\"}', NULL, '2022-04-13 12:21:13', '2022-04-13 12:21:13'),
('760d607c-c1af-40f9-91ca-a9a46be5d3fe', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:06:44', '2022-04-13 16:06:44'),
('76432ef5-21ac-4100-bec0-2c005b2edb91', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"570\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:28:46', '2022-06-11 16:28:46'),
('764bcc53-9c5f-4a0f-8964-064434162ecc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:41:58', '2022-04-12 23:41:58'),
('7666adc3-6d76-4ade-8e15-37b1d5513da7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"445\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 16:43:00', '2022-04-09 16:43:00'),
('768f28da-b0a3-443a-a8f1-80f45d7d489b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 14:18:18', '2022-03-24 14:18:18'),
('769134be-14a4-468d-9018-6aad2095e22d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:25:42', '2022-04-08 15:25:42'),
('76914f0e-3630-49d2-aa0c-fb6ece82dd55', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"440\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 16:32:46', '2022-04-08 16:32:46'),
('769f9d34-9103-4f1c-b501-232264efc253', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:11', '2022-05-20 17:57:11'),
('76a923cf-fad5-4e25-8a6b-129705e2c79f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:23', '2022-04-28 14:28:23'),
('76dcda43-ad6e-4c5b-9306-d6289dff09a0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:18', '2022-03-24 18:17:18'),
('76ea3213-19ec-4be3-8fb6-0826c640d86e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"569\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:04:37', '2022-06-11 16:04:37'),
('77051f2c-203c-4a2a-80c0-61808c9d8480', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"545\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:45:32', '2022-06-03 19:45:32'),
('770aa067-f180-42f8-9ba7-dc6d6085f5a7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"486\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 13:38:55', '2022-04-28 13:38:55'),
('7711facf-6ebe-48b8-8c36-359a512143ae', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"439\",\"msg\":\"Order has been  completed  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:12:22', '2022-04-08 16:12:22'),
('77206b0f-fbf3-4fc1-a079-2325ba423743', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:08:08', '2022-05-20 19:08:08'),
('77350323-f2db-444b-b696-9d67a3dbf0ee', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"593\",\"msg\":\"Worker has bid on Order ID- 593\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-16 19:39:10', '2022-06-16 19:39:10'),
('775587bc-6f3d-43e4-965d-5a047ab85e0f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"571\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:32:59', '2022-06-11 16:32:59'),
('7763bc00-8fb4-46f1-9a97-9572989bb932', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"590\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 18:07:40', '2022-06-16 18:07:40'),
('77702405-23b1-49de-948d-91958a8110a8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:33', '2022-05-16 19:49:33'),
('777cc132-5b5d-4f85-94c6-297b4f956e7e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:48', '2022-05-10 19:32:48'),
('77802222-2d7c-4c43-b992-50906a6914cb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"485\",\"msg\":\"Worker has bid on Order ID- 485\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-27 14:33:15', '2022-04-27 14:33:15'),
('779d12ed-cbb4-4655-aa2d-aab62a32db44', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"356\",\"msg\":\"A File has been uploaded for admin for  Order ID- 356\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/356\"}', NULL, '2022-03-24 18:14:13', '2022-03-24 18:14:13'),
('77d4a04a-1ae0-4c6c-8b5d-b9ee5d4423a5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:19', '2022-05-16 19:58:19'),
('77d96668-68d8-4863-b10b-fb578d477ba7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:25:28', '2022-03-04 11:25:28'),
('77e72eb2-c7fe-4e67-ad7a-766781c13ed5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"486\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 13:38:52', '2022-04-28 13:38:52'),
('780c2dbe-c853-4fa7-9ba5-15516b0e84c8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"527\",\"msg\":\"A File has been uploaded for admin for  Order ID- 527\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/527\"}', NULL, '2022-05-22 19:53:44', '2022-05-22 19:53:44'),
('7813f8fe-f2a2-44a2-a665-4891640c9ab8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:58:47', '2022-04-22 11:58:47'),
('7837ab38-a9d7-4f72-9d2d-19cee0769d2f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:30:08', '2022-05-20 19:30:08'),
('78407fcc-c3ce-4379-90c4-fe2bd06f953c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"451\",\"msg\":\"Worker has bid on Order ID- 451\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-12 14:39:01', '2022-04-12 14:39:01'),
('784641f4-5e8d-4d31-8560-a1ad2be7c892', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"570\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:28:43', '2022-06-11 16:28:43'),
('784839e8-f868-4d75-9b50-b7cc09e44eda', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"574\",\"msg\":\"Worker has Claimed on Order ID Order ID- 574\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/574\"}', NULL, '2022-06-11 20:31:04', '2022-06-11 20:31:04'),
('7870cf2f-a7b5-46dc-9cdc-8c49f75abada', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"448\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 448\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-11 13:10:03', '2022-04-11 13:10:03'),
('7878be93-b1be-4b79-9302-8f0b82a2c828', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:01', '2022-03-24 18:17:01'),
('78b0c5d3-50cd-4567-bdfc-78792c449c48', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"364\",\"msg\":\"Worker has Claimed on Order ID Order ID- 364\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/364\"}', NULL, '2022-03-25 00:14:12', '2022-03-25 00:14:12'),
('78c8ded4-9031-4e40-ac8d-25f9e6206240', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:12:03', '2022-04-07 00:12:03'),
('78ccb945-348c-4458-8191-2fb9381d0605', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"360\",\"msg\":\"Worker has Claimed on Order ID Order ID- 360\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/360\"}', NULL, '2022-03-24 19:06:42', '2022-03-24 19:06:42'),
('78d223a8-16a8-497c-9ad4-433e53763d16', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"570\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:28:42', '2022-06-11 16:28:42'),
('78d3cabd-83c5-4dbf-8a47-6f84eb61d1cf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"Worker has Claimed on Order ID Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 16:40:22', '2022-04-07 16:40:22'),
('78d6fb5d-98e7-47a2-a794-1f84655d8181', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"548\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:58:05', '2022-06-03 19:58:05');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('790cc9e8-eeb1-4809-8055-ad8cc626d14d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"568\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 15:45:50', '2022-06-11 15:45:50'),
('797b549a-1b5b-4b0f-9d59-96fcb4974fee', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"355\",\"msg\":\"A File has been uploaded for admin for  Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/355\"}', NULL, '2022-03-24 17:45:39', '2022-03-24 17:45:39'),
('797c1b4f-2cd5-4e52-8e31-dcc954a99506', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:07:29', '2022-04-13 16:07:29'),
('798ec3ba-8144-4aa5-ad8e-140f4abf29da', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:33', '2022-04-28 14:30:33'),
('7997170d-6dd9-4692-825e-c4388de3582c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"598\",\"msg\":\"Worker has Claimed on Order ID Order ID- 598\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/598\"}', '0000-00-00 00:00:00', '2022-09-12 12:05:29', '2022-09-12 12:05:29'),
('79a12571-a147-4902-9d44-ca3b6caf11ef', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:32', '2022-04-27 14:33:32'),
('79c97e91-89ae-48ea-ab3a-95371bfdd3dd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', '0000-00-00 00:00:00', '2022-03-24 17:31:32', '2022-03-24 17:31:32'),
('79d02228-736f-4cb0-ad34-f04001402876', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"553\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 20:20:24', '2022-06-03 20:20:24'),
('7a197673-de03-4e4a-8b83-2126bfa34ccc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:27', '2022-04-28 14:30:27'),
('7a37568b-a5f0-4775-a3f7-29572df7b5d3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:20', '2022-05-10 19:32:20'),
('7a72113f-686e-4c03-a22e-54ceac0638c8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:07', '2022-04-28 14:28:07'),
('7a896185-bc9f-4dfe-a1af-c031e024717a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"434\",\"msg\":\"Worker has Claimed on Order ID Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 13:37:00', '2022-04-08 13:37:00'),
('7a899d32-56b7-4734-b053-1b37c0fd38d9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:25:30', '2022-03-04 11:25:30'),
('7acd9ca7-b719-4e1a-bef7-4bc9b14eaf4d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 13:01:35', '2022-03-24 13:01:35'),
('7b370a25-ab3e-4eee-878f-123f0ff216ee', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"439\",\"msg\":\"A File has been uploaded for admin for  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:25:26', '2022-04-08 16:25:26'),
('7b5943df-e3f5-4a20-8b4c-1d43b958aa59', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:27', '2022-05-10 19:32:27'),
('7b735257-4e17-481d-b717-cdd95c459d41', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:04:30', '2022-04-18 16:04:30'),
('7b85f96f-122c-4287-846f-dd9c22ac9806', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:04:10', '2022-04-18 16:04:10'),
('7b97f722-1652-4b11-873d-f8ff681a2541', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:57', '2022-05-16 19:42:57'),
('7b99f220-0c29-4cb6-8bc8-7ec7b55e0fe0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"438\",\"msg\":\"Order has been  completed  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 16:00:51', '2022-04-08 16:00:51'),
('7bc4c88a-aaa7-4b5d-aec7-1a6a6c0bdf1f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:27:28', '2022-04-28 14:27:28'),
('7bcd983a-207a-46d2-b8c5-45363235a5e3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:09', '2022-05-20 17:57:09'),
('7bd1af75-2264-4f67-affb-cf5cc626ffb0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"543\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:31:32', '2022-06-03 19:31:32'),
('7c0979a4-0094-4f5d-8e63-fa63800c2cf9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"513\",\"msg\":\"A File has been uploaded for admin for  Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 17:54:32', '2022-05-20 17:54:32'),
('7c29b144-2c43-4787-a2d4-a3a36b3a50f8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"598\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 12:04:49', '2022-09-12 12:04:49'),
('7c38f920-a3d1-4b64-9582-b9f98fea3ee5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"447\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:00:27', '2022-04-11 13:00:27'),
('7c3d5e5f-66e9-489b-b042-692e0682d4ef', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:12:22', '2022-04-07 00:12:22'),
('7c760df4-3b45-44ed-bd36-b350537b5413', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:39', '2022-03-24 18:16:39'),
('7cf8dba6-2569-451c-b483-70b1da75f3ca', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":581,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-11 20:53:17', '2022-06-11 20:53:17'),
('7cfef523-8e88-4190-9eca-057dac2e4f8d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"477\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-16 14:44:29', '2022-04-16 14:44:29'),
('7d18083e-de05-45b9-9954-cec09fbf2034', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:29', '2022-04-27 14:33:29'),
('7d388f8e-e9e4-4ed4-bbe4-efdf420ab257', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"447\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:00:21', '2022-04-11 13:00:21'),
('7d3c31fe-b807-4a8e-82de-40d0b89798e1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"451\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:32:45', '2022-04-12 14:32:45'),
('7d3dac76-b073-4ce5-9fa9-3fd93d6bbc31', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"522\",\"msg\":\"Order has been  completed  Order ID- 522\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/522\"}', NULL, '2022-05-20 19:46:52', '2022-05-20 19:46:52'),
('7d48d729-1da2-4ce5-a49d-91a032f456b2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 94, '{\"order_id\":\"421\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-01 18:25:46', '2022-04-01 18:25:46'),
('7d4c2384-da6c-44fb-912c-c0cb61ba49a9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:54', '2022-05-10 19:32:54'),
('7d8cd1eb-c70c-4b8c-a947-f24194048668', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:17', '2022-05-16 19:58:17'),
('7da76976-c20f-42cb-a633-6f661db4036b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":429,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-07 22:52:06', '2022-04-07 22:52:06'),
('7db4aa83-83f4-4bf7-8d03-2e876c6f7403', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"523\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 14:40:53', '2022-05-22 14:40:53'),
('7db65f0b-3f0f-4249-be94-4d8cd42a5d51', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:18', '2022-04-28 14:30:18'),
('7dd17526-0241-4f58-bb38-73043229b4e4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"447\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:00:53', '2022-04-11 13:00:53'),
('7dd30e23-f82f-4ea9-9ed5-cf3cd74cbe49', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:56', '2022-05-10 19:32:56'),
('7dd6b123-af4e-45ac-ae8a-a40b3e2b0619', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"597\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 11:58:28', '2022-09-12 11:58:28'),
('7dedd3b7-54a5-4559-ac70-3a63df940c55', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"574\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:29:14', '2022-06-11 20:29:14'),
('7dfe94aa-4d59-42ab-9b8d-652d8326c210', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":551,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-03 20:17:33', '2022-06-03 20:17:33'),
('7e5a055d-40a4-4ff2-a590-d0541fbf3df6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"486\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 13:38:58', '2022-04-28 13:38:58'),
('7e5bfec1-695e-4a8e-91f4-ae4b02067437', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:57', '2022-03-24 18:16:57'),
('7e5ea76e-4de8-4dc0-8793-eb6678eed88c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:37:04', '2022-03-24 19:37:04'),
('7e9c6437-8fe9-4da5-bd04-ebbc38588ec7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:04:27', '2022-04-18 16:04:27'),
('7ea277b5-7317-48f0-9291-9cbd5d82b469', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:42', '2022-05-20 17:58:42'),
('7eb54b0c-a01e-4038-9e12-95062d9062eb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"355\",\"msg\":\"Order has been  completed  Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/355\"}', NULL, '2022-03-24 17:46:02', '2022-03-24 17:46:02'),
('7ec4bbcc-a6df-4a1d-ba72-a52f5b77056c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:30:09', '2022-05-20 19:30:09'),
('7ed2e8fd-b962-454b-9953-8f6334149f61', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"425\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 21:56:47', '2022-04-07 21:56:47'),
('7eebdc9e-5bac-4351-bc50-441956eeada9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:07:38', '2022-04-13 16:07:38'),
('7f033db4-ccb0-4f78-8fc2-73aa44e24a85', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:42', '2022-04-18 11:50:42'),
('7f2babf0-6b4c-4c1c-9d9c-a1ac148bfe52', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:16', '2022-05-16 19:49:16'),
('7f33260d-318b-4006-95a0-b5a27b29a9df', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:07:25', '2022-05-20 19:07:25'),
('7f343261-5c5d-45f6-854a-6b71cff52a1d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"548\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:58:02', '2022-06-03 19:58:02'),
('7f623d6f-d74c-481d-ad81-fb44ad12cc2e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:24', '2022-04-28 14:30:24'),
('7f78a307-0538-4811-876d-9c229e8072ef', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"431\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:05:17', '2022-04-08 13:05:17'),
('7f7d3055-3ad3-4eca-a09a-ffa47025d73e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:50:38', '2022-04-09 17:50:38'),
('7f9138cf-d282-4ec7-9f8f-b7a383422ecc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:05:04', '2022-04-18 16:05:04'),
('7fb4ffd0-e3c7-4341-96a8-affbb0305263', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"495\",\"msg\":\"Worker has bid on Order ID- 495\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:34:47', '2022-04-28 14:34:47'),
('801bca1b-38a3-45e7-9845-6c52184254a3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"451\",\"msg\":\"Your Deadline Request has been Declined\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/451\"}', NULL, '2022-04-12 14:46:07', '2022-04-12 14:46:07'),
('802b8dff-f857-42f8-9342-d5988d23336a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:44', '2022-05-20 17:58:44'),
('80636e38-5e33-4c79-b57d-0fd8722cecd9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:14', '2022-05-20 17:57:14'),
('80864b43-bb27-4cb5-a3a5-0e77751c50b0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:41', '2022-03-23 13:43:41'),
('808d5ea7-3c60-4983-80ff-5ddc365feeb7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 94, '{\"order_id\":\"384\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-31 13:10:25', '2022-03-31 13:10:25'),
('809bb965-0d05-443e-a18c-61df2be40188', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"489\",\"msg\":\"Worker has bid on Order ID- 489\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:12:41', '2022-04-28 14:12:41'),
('80ccd9ce-f657-49f5-89f4-adfd81957f61', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:22', '2022-05-16 19:49:22'),
('80d46825-e948-41f2-97e2-5e96532fa86f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"551\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 20:16:51', '2022-06-03 20:16:51'),
('80e5548e-2024-4af4-b638-db124aae5fda', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:51', '2022-04-28 14:28:51'),
('80e560e4-162a-4755-880d-afe55b048b96', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"505\",\"msg\":\"Worker has bid on Order ID- 505\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-05-10 23:45:59', '2022-05-10 23:45:59'),
('8122edb6-2dd6-415a-913a-f4f8b4c676aa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"434\",\"msg\":\"Order has been  completed  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:01:14', '2022-04-08 15:01:14'),
('812667fe-9f5e-4c3d-9fbd-40ce7a4c898f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"448\",\"msg\":\"Worker has bid on Order ID- 448\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-11 13:22:10', '2022-04-11 13:22:10'),
('814dc8cb-4176-4ebc-a8db-149608af81cd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"444\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 14:51:10', '2022-04-09 14:51:10'),
('815a56bb-b00f-4b29-901a-798020f2c059', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:19', '2022-05-10 17:28:19'),
('815b868c-4096-4f6e-8e9d-d24e34207b57', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"364\",\"msg\":\"Order has been  completed  Order ID- 364\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/364\"}', NULL, '2022-03-25 00:07:59', '2022-03-25 00:07:59'),
('818bddfb-2984-45de-a835-605a351ac1c9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:55:48', '2022-05-16 19:55:48'),
('81b93a09-eea0-4c80-a6a1-b4e06babc256', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"442\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 13:35:09', '2022-04-09 13:35:09'),
('81c12f83-a4fb-49a1-9818-a6ac2dba1c2c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:30', '2022-05-10 17:28:30'),
('81c296b5-99aa-4cb4-acd9-34174668b984', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"356\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 17:22:46', '2022-03-24 17:22:46'),
('8264095f-cf5a-45df-85a7-bb7539eb288a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"552\",\"msg\":\"Worker has bid on Order ID- 552\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-03 20:18:54', '2022-06-03 20:18:54'),
('82d14b71-2ed9-4a09-a1d2-0de4328c5bcb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:59:03', '2022-05-20 17:59:03'),
('82e27762-7c53-4b59-9abb-a1577e7d2b7a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"568\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 15:45:44', '2022-06-11 15:45:44'),
('82fa98d3-6f29-49ce-8a70-8442c7a8bf8d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:08', '2022-03-24 18:17:08'),
('8326e208-07f1-4897-ae21-edd75ca64e64', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":478,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 16:04:58', '2022-04-18 16:04:58'),
('835ad8e7-94cb-4190-b2da-9cd182b4fb5b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"451\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:33:03', '2022-04-12 14:33:03'),
('8367ff78-4442-4b5c-a0e8-2a72744da32e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":590,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-16 18:10:10', '2022-06-16 18:10:10'),
('838db5ab-8085-4f59-9457-84c688dc3347', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"451\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:33:20', '2022-04-12 14:33:20'),
('84190107-ea73-4a2d-ad67-5f814b962f3b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:51', '2022-04-28 14:30:51'),
('841bc4e1-093c-49bf-a816-c2d8681b80e5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"571\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:33:07', '2022-06-11 16:33:07'),
('8422e832-ca72-4871-85f3-eeb45c776dbd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:26', '2022-04-28 14:11:26'),
('84399c1e-e1b6-44d5-84f8-c0ffdcbc6098', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:31:54', '2022-03-24 19:31:54'),
('8443c1d1-2d30-4b3c-897b-99acf6e4f167', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":590,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-16 18:48:03', '2022-06-16 18:48:03'),
('84471e6c-b372-490f-8312-c63ad41280f5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:35:33', '2022-04-28 14:35:33'),
('847018a4-8bf1-49ce-95ff-adb1d46ea0b3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:19', '2022-05-10 19:32:19'),
('8478afbe-c953-4f71-8712-cfb8f5c44aa3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:04:24', '2022-04-18 16:04:24'),
('849f1392-1fe6-4e20-8832-509b4da311b2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"365\",\"msg\":\"Worker has Claimed on Order ID Order ID- 365\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/365\"}', NULL, '2022-03-25 00:12:21', '2022-03-25 00:12:21'),
('84d68777-d017-4591-9a08-1efa5b9ac7ad', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"422\",\"msg\":\"Worker has Claimed on Order ID Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 17:17:40', '2022-04-07 17:17:40'),
('84fa94d8-1dd2-4320-9f5f-4a2ae2838372', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:59:32', '2022-04-27 13:59:32'),
('8506b944-a4c1-41d3-824c-7330fd9531c6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:05', '2022-05-16 19:56:05'),
('85238434-f8d3-417b-899f-a64f9a28f6da', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:46', '2022-05-10 17:28:46'),
('853f7de6-c122-43d7-bf24-b392232921c2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"444\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 15:32:55', '2022-04-09 15:32:55'),
('8569a06f-68d3-4516-8846-d5f2f6756929', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"433\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:12:04', '2022-04-08 13:12:04'),
('857fe118-42ee-4a3c-ad00-3bc380feaaa5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"Order has been  completed  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:15:11', '2022-04-18 16:15:11'),
('8588aab4-95c6-4550-82fb-6f5bba81db99', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:24:55', '2022-04-28 14:24:55'),
('8592b178-43f1-4e04-903b-04703adf8d19', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:59:48', '2022-04-27 13:59:48'),
('85ba1be7-876a-49bb-b444-30f696302c80', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:21', '2022-05-16 19:58:21'),
('85df6c6e-a0b8-4937-b6eb-9557eecb54e0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:16:05', '2022-05-16 20:16:05'),
('85f73839-8f32-4b29-86e9-b004cc5adb9b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:50:13', '2022-04-09 17:50:13'),
('85f7b8aa-cbcc-4047-ba0a-7127e6edc41a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:29', '2022-05-10 17:28:29'),
('86482d5a-25e1-44be-b7f1-192596e63ee6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":548,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-03 19:58:59', '2022-06-03 19:58:59'),
('867de5ce-2cfb-4294-806b-288aa0000570', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"444\",\"msg\":\"Worker has Claimed on Order ID Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 14:51:14', '2022-04-09 14:51:14'),
('8683114c-1c70-4cc3-895b-29ff19ebe552', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:18', '2022-03-24 18:16:18'),
('86870ffe-0c6e-406b-8a27-61d9e569ca1f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:00:37', '2022-04-27 14:00:37'),
('8695c50c-001d-4562-8d8f-94e966ef5da8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:30:03', '2022-05-20 19:30:03'),
('86a2743c-ae98-49e7-bea0-914af587db15', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":572,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-11 17:47:32', '2022-06-11 17:47:32'),
('86e217ee-b9b1-4143-9dc1-add43666bbb2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:54', '2022-05-16 19:42:54'),
('86e87c49-fe45-456e-8185-d271ae196ae4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:49:45', '2022-04-09 17:49:45'),
('870d75ab-e3d3-46c6-88d7-c91f31c1df00', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":356,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-03-24 17:52:42', '2022-03-24 17:52:42'),
('87aa7c5b-b3be-4e25-bc5f-1a59bb04d6ee', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":\"352\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:20:47', '2022-03-23 13:20:47'),
('87c5e12b-85e4-44bf-8424-ed08b4d2f4d1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:55:31', '2022-05-16 19:55:31'),
('8826effb-8de0-462e-9b37-62e6ff105e46', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:12:06', '2022-04-07 00:12:06'),
('885b207d-9b5d-43f8-909b-18e35a3213b0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"447\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:00:50', '2022-04-11 13:00:50'),
('887cd1ad-c956-4d86-a579-944169e2fb03', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:35:27', '2022-04-28 14:35:27'),
('8885a523-4a47-4f3d-9c6b-55db1632787e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"439\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:37:41', '2022-04-08 15:37:41'),
('88a26307-6d89-4b6b-8a98-f350c8480bb8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"445\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 16:42:51', '2022-04-09 16:42:51'),
('88ada4f3-fb44-475f-8221-1e784175d290', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"434\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:36:11', '2022-04-08 13:36:11'),
('88b0b651-1b5d-4151-b4e7-16966dcc3c8a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:06', '2022-05-16 19:56:06'),
('88e3af2e-fd8a-41cb-ad61-1518c1133c0e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"595\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 12:00:39', '2022-09-12 12:00:39'),
('88e7c1fd-d25c-4e25-a5df-170c0aaeb4e4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 137, '{\"order_id\":604,\"msg\":\"A File Message has been uploaded for Order ID 604\",\"url\":\"https:\\/\\/writing-space.com\\/wms\\/public\\/in-progress-orders\\/604\"}', NULL, '2023-11-13 15:34:18', '2023-11-13 15:34:18'),
('88f99a28-edf2-4fdb-90d4-e2d4e442657d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"585\",\"msg\":\"Worker has Claimed on Order ID Order ID- 585\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/585\"}', NULL, '2022-06-13 19:19:48', '2022-06-13 19:19:48'),
('88fa1ecb-22dd-44c1-a023-75101e913102', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:59', '2022-05-16 19:42:59'),
('8939818e-a076-4231-a91c-f57be5118b74', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"445\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 445\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 16:48:47', '2022-04-09 16:48:47'),
('895d98d2-0213-41c1-be92-cc945f177cbb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"435\",\"msg\":\"Order has been  completed  Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/435\"}', NULL, '2022-04-08 15:09:23', '2022-04-08 15:09:23'),
('896e663d-77cc-4653-8b57-847e8101e490', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"513\",\"msg\":\"A File has been uploaded for admin for  Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 17:26:51', '2022-05-20 17:26:51'),
('898ac2c8-5317-4e32-ad93-1d2a6e771b82', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":545,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-03 19:46:36', '2022-06-03 19:46:36'),
('89caa7b5-c561-4f82-a569-f3a667407834', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:17', '2022-05-16 19:57:17'),
('89d2fb92-7ba1-4b1a-b255-8670f81dce03', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"479\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 13:06:05', '2022-04-18 13:06:05'),
('89d54c58-1903-474a-bcf2-8e201e4f9cd5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:46', '2022-05-10 17:28:46'),
('89fa0b89-1364-4562-a4bd-296cd642b1e8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"477\",\"msg\":\"A File has been uploaded for admin for  Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 14:45:34', '2022-04-18 14:45:34'),
('89fd4dee-1386-4ba3-a191-32c9ec7b95b4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 16:00:23', '2022-04-08 16:00:23'),
('8a008756-cb76-4555-9d30-b8aacccdafb8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 94, '{\"order_id\":\"418\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-01 14:51:49', '2022-04-01 14:51:49'),
('8a2bb931-656e-4612-bea1-5d084f2e10cc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:28', '2022-05-20 19:26:28'),
('8a9b6af4-1095-49f7-a71c-71cd99f18e37', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"477\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-16 14:44:15', '2022-04-16 14:44:15'),
('8ab51d16-0f74-4698-8c50-c4ae1dd5ecb8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":478,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 14:51:49', '2022-04-18 14:51:49'),
('8ad87af2-44eb-4310-98bf-e45e7c19263b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:52', '2022-05-16 19:42:52'),
('8ae1479a-49c2-4ac7-a127-5ec9e0924b25', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"433\",\"msg\":\"A File has been uploaded for admin for  Order ID- 433\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/433\"}', NULL, '2022-04-08 13:33:58', '2022-04-08 13:33:58'),
('8ae3e8de-5f85-4ad4-9464-936817529e13', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 17:39:56', '2022-03-24 17:39:56'),
('8b0a0cb2-3415-4bbd-b998-f497ba20ddb7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"444\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 14:50:39', '2022-04-09 14:50:39'),
('8b0dc679-dead-4042-bccb-0a8d666e023f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:26', '2022-05-16 19:56:26'),
('8b1030d4-0f40-4d57-aeb8-893f3c3660cf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"428\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 428\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-07 22:42:00', '2022-04-07 22:42:00'),
('8b36854c-9abc-4b00-b87c-3e4b05b1e974', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"540\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:34:18', '2022-06-03 16:34:18'),
('8b384b25-d55d-4cc1-8f64-fa953ab7c7ca', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":478,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 13:12:53', '2022-04-18 13:12:53'),
('8b398c09-dcb0-4c7a-a192-cd933ab06a42', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"426\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 22:34:23', '2022-04-07 22:34:23'),
('8b3af487-25ad-4a41-8352-0d6e202e4bb5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"452\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:56:43', '2022-04-12 14:56:43'),
('8b55c9fe-65e0-438d-a83e-8ec6108ec4f2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"356\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 17:22:43', '2022-03-24 17:22:43'),
('8b99e11c-a34b-4285-9826-7c49a0431b8c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"597\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 11:58:26', '2022-09-12 11:58:26');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('8bb9d8de-4208-4560-b0f0-25ebde829f91', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"443\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 14:50:08', '2022-04-09 14:50:08'),
('8bf56de8-495d-4eff-9ff6-77c7c679bf44', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":438,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-08 15:13:04', '2022-04-08 15:13:04'),
('8c226f1b-8ada-43c2-8372-16bb4d2a2f96', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"425\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 21:56:50', '2022-04-07 21:56:50'),
('8c290091-a063-4337-8689-d15f50d5161f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":452,\"msg\":\"A File Message has been uploaded for Order ID 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/452\"}', NULL, '2022-04-12 15:01:33', '2022-04-12 15:01:33'),
('8c2d6660-9e02-4b3c-8e87-de46d408d03b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 13:09:45', '2022-04-18 13:09:45'),
('8c69249c-0f71-494b-a9a1-0f3c0deb49cf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:09', '2022-03-24 18:16:09'),
('8c6b46e3-f732-4ec7-93d8-627e336b2c3b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"434\",\"msg\":\"Worker has Claimed on Order ID Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:00:09', '2022-04-08 15:00:09'),
('8c802a80-8871-4e9d-8a05-6f8176d7a615', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":477,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 12:26:01', '2022-04-18 12:26:01'),
('8c9941c1-a713-44c7-93ce-aa5fa9d6dea2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"429\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 429\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-07 22:51:24', '2022-04-07 22:51:24'),
('8cad82bd-e325-4377-ad65-54962e5a9d7e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":452,\"msg\":\"A File Message has been uploaded for Order ID 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/452\"}', NULL, '2022-04-12 23:03:36', '2022-04-12 23:03:36'),
('8cb822b4-11e5-4819-ba20-1004c75de9f6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"548\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:58:03', '2022-06-03 19:58:03'),
('8d502e0f-d359-4606-9955-4f2fcfed0282', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"448\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:09:36', '2022-04-11 13:09:36'),
('8d7acbdf-10ad-448b-b066-9d9f5eeda064', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"439\",\"msg\":\"Worker has Claimed on Order ID Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 15:37:33', '2022-04-08 15:37:33'),
('8d7d0901-9b13-4833-8c41-ec179d6040e5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"524\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 17:11:09', '2022-05-22 17:11:09'),
('8de4c9f3-9f66-4163-af4e-8116750ee147', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"Worker has Claimed on Order ID Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-06 14:58:14', '2022-04-06 14:58:14'),
('8e027607-1c8a-4171-a6a8-e5ed1ec7e178', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:26:45', '2022-03-25 00:26:45'),
('8e10fbb4-56c9-4fce-b6e6-2bb6eb0dd7c5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"527\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 19:37:04', '2022-05-22 19:37:04'),
('8e412534-80dd-41f7-84ba-4cb7de69d96c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:09:14', '2022-04-07 00:09:14'),
('8e427a4d-fb4d-4a63-897a-7a1364b87f83', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"438\",\"msg\":\"Order has been  completed  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:23:59', '2022-04-08 15:23:59'),
('8e4bd4f3-c275-4edd-971b-632f9f9d52eb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"423\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 21:36:00', '2022-04-07 21:36:00'),
('8e51c5a7-94d5-4cf6-90f5-a97615daa9e0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"364\",\"msg\":\"Worker has Claimed on Order ID Order ID- 364\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/364\"}', NULL, '2022-03-25 00:06:59', '2022-03-25 00:06:59'),
('8e5bc09d-250c-4dd3-8e88-6edd4b9d487d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:08', '2022-05-16 19:56:08'),
('8e762f7b-1172-48f0-8088-beeff7636768', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":594,\"msg\":\"A new Message has been posted for Order ID- 594\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/594\"}', NULL, '2022-06-20 17:33:41', '2022-06-20 17:33:41'),
('8e879b4a-f172-4631-bc76-043881c8c6b1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:56', '2022-04-27 14:33:56'),
('8e88b7e9-5fa3-4434-b324-f8aba823a321', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"479\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 13:05:43', '2022-04-18 13:05:43'),
('8e964a28-4c35-4c08-bcea-f9b1cf8aaf48', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:05:07', '2022-04-18 16:05:07'),
('8e9760cc-66a2-4c52-9516-340e7fbc6312', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"522\",\"msg\":\"Worker has Claimed on Order ID Order ID- 522\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/522\"}', NULL, '2022-05-20 19:43:44', '2022-05-20 19:43:44'),
('8eafa28d-2756-40fb-b0c4-5386e6a8fce4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"579\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:45:33', '2022-06-11 20:45:33'),
('8eb48f68-635c-4509-b69b-909bf76471c0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:30:07', '2022-05-20 19:30:07'),
('8eb9cb62-94f4-489a-9d16-b80cb59e6f9d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:29:59', '2022-05-20 19:29:59'),
('8ed634bb-3476-4170-acb1-1e8fbd1fb3ba', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"481\",\"msg\":\"Worker has Claimed on Order ID Order ID- 481\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/481\"}', NULL, '2022-04-23 13:10:21', '2022-04-23 13:10:21'),
('8ed8e8d4-cc1a-4841-8b75-da6a49aae396', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"440\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 16:32:43', '2022-04-08 16:32:43'),
('8eeb4094-a2bf-4178-a1d2-0adc680d50be', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:08', '2022-05-20 17:57:08'),
('8f607246-b75a-4635-955f-9ab41f124d38', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 11:55:12', '2022-04-07 11:55:12'),
('8f6cfbc6-e7c9-4786-a6a6-12680b72e491', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:29:00', '2022-04-28 14:29:00'),
('8f751960-b1f8-467e-81d9-0307f202b6c3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:35:40', '2022-04-28 14:35:40'),
('8f808f00-8398-41b8-8f7d-6914699234d9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"572\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:39:54', '2022-06-11 16:39:54'),
('8f9ad9e2-a8ff-45b1-aafe-136d41ea2063', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"439\",\"msg\":\"A File has been uploaded for admin for  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:20:25', '2022-04-08 16:20:25'),
('8fa34e5e-0d47-493e-9612-7774d0c41401', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:14', '2022-03-25 00:27:14'),
('8fa4c8c7-183e-421d-aa6f-d573f2f5bd9c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"368\",\"msg\":\"Worker has Claimed on Order ID Order ID- 368\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/368\"}', NULL, '2022-03-25 00:28:12', '2022-03-25 00:28:12'),
('8fafad4c-2efc-4cde-bfed-99d148cb0948', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:49:51', '2022-04-18 11:49:51'),
('901368b0-33cd-429d-be50-88b7b1f13dd4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:41:41', '2022-04-12 23:41:41'),
('902ee286-f878-458b-b17a-0ddd8e409c60', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"422\",\"msg\":\"Worker has Claimed on Order ID Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 16:49:52', '2022-04-07 16:49:52'),
('906406b6-0041-43ca-80df-a7c2c581e2c4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":529,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-28 18:10:51', '2022-05-28 18:10:51'),
('906e370b-68e8-4a2d-86ef-1ff2741c50a2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:44', '2022-03-24 18:16:44'),
('90894c46-557f-4042-af7c-781f11e6aa34', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:00', '2022-04-28 14:30:00'),
('90ad179f-1b3f-4525-b6a3-d70a05640352', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:17', '2022-04-18 11:50:17'),
('9102c3ff-cdb3-4baa-82e7-6093b3fc59cf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":524,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', '0000-00-00 00:00:00', '2022-05-22 17:50:57', '2022-05-22 17:50:57'),
('91420273-77be-4dc3-9ba1-1e8bd20b07ee', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"442\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 13:35:03', '2022-04-09 13:35:03'),
('918ca19c-7c6b-47a2-b437-1c5b2a91fef3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"355\",\"msg\":\"Order has been  completed  Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/355\"}', NULL, '2022-03-24 17:45:59', '2022-03-24 17:45:59'),
('91a37011-00bb-4b58-be0c-1c644c2c2249', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:24', '2022-03-24 18:17:24'),
('91a5f8cf-51b4-4126-ada5-ee02140e70b6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:33:55', '2022-03-24 19:33:55'),
('91a96f24-befe-439a-addc-c7ecfbbc14f8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:32:39', '2022-04-27 14:32:39'),
('91afd408-1c98-41a7-b66f-406a26735832', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-06 16:51:04', '2022-04-06 16:51:04'),
('91b85c4a-985c-4f6e-8bd3-c4b2e3ec48b6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"445\",\"msg\":\"Your Deadline Request has been Declined\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/445\"}', NULL, '2022-04-09 16:49:55', '2022-04-09 16:49:55'),
('91c3009d-36f7-48c5-8821-ec5fb48d3033', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:17', '2022-05-16 19:58:17'),
('91d7a618-d0ae-4c02-bcf3-3166dc63c4ef', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"352\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:20:56', '2022-03-23 13:20:56'),
('91db9645-5ca3-4118-a21d-5799a6478b89', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"Order has been  completed  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:25:54', '2022-04-08 15:25:54'),
('92224cb3-23d7-4f5a-9efb-c7add0e944ec', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"434\",\"msg\":\"Worker has Claimed on Order ID Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:00:06', '2022-04-08 15:00:06'),
('9223d54b-7af7-4fab-9bd8-5991b29eb185', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"444\",\"msg\":\"A File has been uploaded for admin for  Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 15:45:31', '2022-04-09 15:45:31'),
('923a9af8-0eae-46f2-9767-bf20ffb23902', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":435,\"msg\":\"A File Message has been uploaded for Order ID 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/435\"}', NULL, '2022-04-08 15:10:12', '2022-04-08 15:10:12'),
('925356b7-28c2-4e5c-be99-b463c196d3d3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"447\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:00:40', '2022-04-11 13:00:40'),
('9255b615-80e5-4e81-a725-4afdc47437ed', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:17', '2022-03-23 13:43:17'),
('9279f83f-f2b1-4333-9d31-15e273b4743c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"568\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 15:45:45', '2022-06-11 15:45:45'),
('92844d7a-9f39-4e24-98ba-76f131683032', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:25', '2022-04-28 14:11:25'),
('928b048c-625c-4c7f-a681-2526f17aa366', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"440\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 440\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-08 16:36:58', '2022-04-08 16:36:58'),
('92acb865-9219-4d84-93a9-95b8ae970a41', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"477\",\"msg\":\"Order has been  completed  Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 14:45:43', '2022-04-18 14:45:43'),
('92dd76ef-e93e-4cef-aeb6-d1d9d2c4f543', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:24', '2022-05-16 19:58:24'),
('9301bc70-b411-4dda-b39b-f606bc7b96d1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"522\",\"msg\":\"Order has been  completed  Order ID- 522\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/522\"}', NULL, '2022-05-20 19:46:50', '2022-05-20 19:46:50'),
('93053bc3-8096-4125-96f7-cd2a440569ad', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"355\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 12:59:46', '2022-03-24 12:59:46'),
('930d7657-92b8-4380-8395-7633438a86b3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:25:25', '2022-04-28 14:25:25'),
('9344be14-aeef-4222-9879-689a6e80b7e0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"354\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 19:58:30', '2022-03-23 19:58:30'),
('93a61080-a8c3-4e9b-9c6e-29fd632dcfd6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:51', '2022-03-24 18:16:51'),
('93b7722b-1dd6-4eda-ac01-35674b258ca8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"367\",\"msg\":\"Worker has Claimed on Order ID Order ID- 367\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/367\"}', NULL, '2022-03-25 00:28:57', '2022-03-25 00:28:57'),
('93d15b97-3f1c-46c4-996b-d2b00df67966', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"593\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:38:32', '2022-06-16 19:38:32'),
('940085d4-6ed9-4475-9056-fe5c4d42d2ae', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:15:40', '2022-03-24 19:15:40'),
('9409a907-0294-407d-8f42-e687acfc51fe', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"452\",\"msg\":\"A File has been uploaded for admin for  Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', '0000-00-00 00:00:00', '2022-04-12 15:15:39', '2022-04-12 15:15:39'),
('940bd561-e409-4ca7-8e60-a490c91420fa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"439\",\"msg\":\"Order has been  completed  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:25:40', '2022-04-08 16:25:40'),
('94374dc2-d5a2-499b-b31c-40dd3beea890', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"529\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 529\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-05-29 20:23:21', '2022-05-29 20:23:21'),
('943c60d3-b448-45c2-8ff7-edeef6b107d4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:07:34', '2022-05-20 19:07:34'),
('94532dab-7204-4d28-99d2-a32bedeeaf56', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"538\",\"msg\":\"Worker has Claimed on Order ID Order ID- 538\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/538\"}', NULL, '2022-06-03 16:22:06', '2022-06-03 16:22:06'),
('94830cf0-b97e-40c4-90b9-7b00ec6305b6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:35', '2022-04-28 14:11:35'),
('94845409-b770-4182-b0a3-c02058571bfb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:23', '2022-05-20 19:26:23'),
('948e1cab-d25e-4b78-8fd9-74d04856b2a4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 17:40:03', '2022-03-24 17:40:03'),
('948e4909-7a01-49fb-9a00-8989cb0b16d3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"433\",\"msg\":\"A File has been uploaded for admin for  Order ID- 433\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/433\"}', NULL, '2022-04-08 13:33:55', '2022-04-08 13:33:55'),
('94c6be50-1c0b-46ee-bbfd-7de32499856c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:29', '2022-04-28 14:28:29'),
('94d01fdb-0488-4b5e-abb2-f179927d113c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"444\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 14:50:48', '2022-04-09 14:50:48'),
('950c9521-cdd3-4256-8cfb-eb5f17846370', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:15', '2022-05-20 17:57:15'),
('9516d6b2-c5c5-458a-9f28-aa1f872b9710', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"513\",\"msg\":\"A File has been uploaded for admin for  Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 17:54:50', '2022-05-20 17:54:50'),
('952074db-62e2-44a8-aa71-4c3c192fd3ae', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:44', '2022-05-16 19:49:44'),
('952423c8-cd0e-4ef5-a222-f3a2616627bf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"524\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 17:11:08', '2022-05-22 17:11:08'),
('955e8553-c1c4-40dc-a611-6de0d68da749', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"574\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:29:09', '2022-06-11 20:29:09'),
('95821616-28f6-4865-88dd-b30e64465b37', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:28:05', '2022-03-25 00:28:05'),
('95a2417d-680f-4d49-9e95-952aa7c4c817', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":422,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-07 16:43:56', '2022-04-07 16:43:56'),
('962b174d-e598-435c-915b-8e3b173c440e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"570\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:28:44', '2022-06-11 16:28:44'),
('96558827-9815-42ee-b7f7-39ec9e841e2d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":444,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-09 14:51:00', '2022-04-09 14:51:00'),
('967b3f62-ab77-4557-a126-0837edafca10', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"534\",\"msg\":\"Worker has Claimed on Order ID Order ID- 534\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/534\"}', NULL, '2022-05-30 20:22:40', '2022-05-30 20:22:40'),
('96a64237-71f2-40e6-8277-e8126ffc0c47', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:04:13', '2022-04-18 16:04:13'),
('96be50e4-af6f-4a7d-a3a8-bf22702ceae2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":523,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-22 19:32:49', '2022-05-22 19:32:49'),
('96c6e5b9-0ff0-431d-98d7-1d9a98b29b1a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"349\",\"msg\":\"Worker has Claimed on Order ID Order ID- 349\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/349\"}', NULL, '2022-03-04 11:22:18', '2022-03-04 11:22:18'),
('9709ef09-4dfa-4c4d-9e5f-d91a0bed1c3e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:21', '2022-03-24 18:16:21'),
('971ae65c-efd5-4fb7-95f6-5cb8df7e5edb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":435,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-08 15:04:19', '2022-04-08 15:04:19'),
('972cf462-7007-4226-8033-8068b603a2ec', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:37:23', '2022-03-24 19:37:23'),
('973c15b9-3798-4fa1-8626-d14261217cb3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:02:39', '2022-04-18 16:02:39'),
('975bfaa2-8ccd-4b2b-8df1-f021a84d5487', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 16:00:16', '2022-04-08 16:00:16'),
('977d88f0-2ade-453e-b6f6-71a881f93fa9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"569\",\"msg\":\"Worker has bid on Order ID- 569\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', '0000-00-00 00:00:00', '2022-06-11 16:07:52', '2022-06-11 16:07:52'),
('97987d25-a759-436e-bbde-580e1a1cf6c1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":421,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-06 14:58:08', '2022-04-06 14:58:08'),
('97a7e0fa-a93c-44a5-9332-dacda516c616', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"451\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:32:48', '2022-04-12 14:32:48'),
('97b00ca9-3c93-4cdb-ac4b-450e2e39cfc8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"484\",\"msg\":\"Worker has Claimed on Order ID Order ID- 484\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/484\"}', NULL, '2022-04-27 14:31:48', '2022-04-27 14:31:48'),
('97b3fd2e-ecc4-4761-954a-b4d0f4f1eb95', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"352\",\"msg\":\"Worker has Claimed on Order ID Order ID- 352\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/352\"}', NULL, '2022-03-23 13:41:01', '2022-03-23 13:41:01'),
('97feba75-ab4e-4802-8215-532498d01bd1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:49:44', '2022-04-18 11:49:44'),
('97ff00ca-b102-4cff-840e-7a29ea425e21', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"350\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 350\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 12:14:51', '2022-03-24 12:14:51'),
('980709bc-9497-4107-8560-46342d92f3a0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"587\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-14 20:00:41', '2022-06-14 20:00:41'),
('981c20e9-dbfc-45e9-ab81-631b3536eefd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:21', '2022-03-23 13:43:21'),
('9827407d-d154-4947-be6d-0c1ec883e8d2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"451\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:32:57', '2022-04-12 14:32:57'),
('982b9e80-6d01-4edf-8d6f-38e8ee480d1a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:42', '2022-03-24 18:16:42'),
('984adbb9-8310-4179-aa4b-ab5f528261ee', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"36\",\"msg\":\"Your Page request has been Approved Order ID- 524\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/524\"}', NULL, '2022-05-22 18:22:51', '2022-05-22 18:22:51'),
('98621b76-f836-4897-81fa-c484791d13e0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"434\",\"msg\":\"A File has been uploaded for admin for  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:00:59', '2022-04-08 15:00:59'),
('986fa22e-50a4-408f-a151-5c876678d5ed', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":477,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 12:58:06', '2022-04-18 12:58:06'),
('987e8fb1-087b-4f32-bf6b-4ea7ef347e98', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:06', '2022-05-16 19:58:06'),
('987f7d07-66b2-4727-8b36-940b2d6c9ff5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:25', '2022-03-24 18:17:25'),
('989398ff-a164-4e01-b307-a936d386f268', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:48:57', '2022-05-16 19:48:57'),
('98a33b7e-ba94-40f7-a911-1fb5ab1d4d86', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:32', '2022-05-10 19:32:32'),
('98b8fecc-dd4b-429d-a20f-326acb8e0a0c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:26', '2022-04-28 14:28:26'),
('98ff432e-ed04-4ba6-8f9e-764f7c2ccdc2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"530\",\"msg\":\"Worker has Claimed on Order ID Order ID- 530\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/530\"}', NULL, '2022-05-28 13:54:35', '2022-05-28 13:54:35'),
('99235094-63af-413e-9f02-d7460de1b040', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:49', '2022-05-16 19:42:49'),
('99247ade-a2a4-4832-a780-736957d45ad7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"580\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:47:40', '2022-06-11 20:47:40'),
('993ca5ec-5f95-40ef-b872-7233fdc62dc4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:24:46', '2022-04-28 14:24:46'),
('994a53bf-1256-4402-a435-478ff6c0715f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:00:34', '2022-04-27 14:00:34'),
('99a9ca05-7229-45a8-a298-804dd717ed16', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:29:51', '2022-04-28 14:29:51'),
('99da32d8-a1d6-45a7-a3ee-38c3a743f42d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:12', '2022-03-23 13:43:12'),
('99e04b31-2238-4b0e-ab20-b1b699b55dd4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"Worker has Claimed on Order ID Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 16:40:16', '2022-04-07 16:40:16'),
('99efa85b-2df5-453a-b286-af6ea5bf3654', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"435\",\"msg\":\"A File has been uploaded for admin for  Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/435\"}', NULL, '2022-04-08 15:06:23', '2022-04-08 15:06:23'),
('99fadb23-0ae9-4d48-89f7-9ffbc8bdb887', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":490,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-28 14:18:03', '2022-04-28 14:18:03'),
('99fc6fee-eb79-423a-bb11-b1e0908e3b05', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"435\",\"msg\":\"A File has been uploaded for admin for  Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/435\"}', NULL, '2022-04-08 15:09:04', '2022-04-08 15:09:04'),
('9a2fcb58-bde4-4730-94cf-9257722a9d82', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"436\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:06:42', '2022-04-08 15:06:42'),
('9a4e3aca-7db8-4588-94a9-3aa957864794', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"366\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:12:07', '2022-03-25 00:12:07'),
('9a877b6e-2d02-4756-a393-a15bfe63d02c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":433,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-08 13:12:55', '2022-04-08 13:12:55'),
('9acafd22-41af-40de-9807-a71d3a3d3ea9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:50:00', '2022-04-09 17:50:00'),
('9b530358-5c9a-44cb-b252-797586f158b0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"350\",\"msg\":\"Worker has Claimed on Order ID Order ID- 350\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/350\"}', NULL, '2022-03-23 20:01:52', '2022-03-23 20:01:52'),
('9b67f6e1-f6cb-4584-8ee8-08f6955c852c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"452\",\"msg\":\"A File has been uploaded for admin for  Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-12 15:14:27', '2022-04-12 15:14:27'),
('9b813ec9-db00-4136-aab1-e33d8e1157b3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:44', '2022-04-27 14:33:44'),
('9b906423-feeb-4af3-9e58-e284b7a976f3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"533\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 19:43:40', '2022-05-29 19:43:40'),
('9b95bfbf-cdc9-49c5-945b-3bc6e1304680', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:31:07', '2022-04-13 12:31:07'),
('9ba822eb-d658-4692-b3cc-4678403cc69c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:49:50', '2022-04-09 17:49:50'),
('9bb76806-277f-4e33-9f07-7e6bfe9e1e8e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"422\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 16:43:24', '2022-04-07 16:43:24'),
('9bde003e-5e0b-4263-ae7a-366d7b91f05a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:23:48', '2022-04-08 15:23:48'),
('9c066415-315a-4513-bd36-ee4c883c4323', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:36', '2022-04-18 11:50:36'),
('9c0a47e1-c73d-42c1-a326-828a85a2ca11', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:57', '2022-05-16 19:42:57'),
('9c2e9c1f-5d7c-42ca-8f1a-cff67ff5f32b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:08:50', '2022-04-07 00:08:50'),
('9c3549fb-d2df-4ace-b89d-851eef7fd10b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"540\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:34:23', '2022-06-03 16:34:23'),
('9c39a895-c4ec-41e0-a67f-2a5642e8cb67', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"444\",\"msg\":\"Worker has Claimed on Order ID Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 14:51:03', '2022-04-09 14:51:03'),
('9c3af976-7e41-4828-87d1-a07e58459c86', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:24:36', '2022-04-28 14:24:36'),
('9c5bd32a-810f-494d-82f1-5ee157278e52', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"444\",\"msg\":\"Your Deadline Request has been Accepted\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/444\"}', NULL, '2022-04-09 15:33:56', '2022-04-09 15:33:56'),
('9c77995c-66e7-426c-958d-76e8c3080cd3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"520\",\"msg\":\"Worker has Claimed on Order ID Order ID- 520\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/520\"}', NULL, '2022-05-20 19:49:36', '2022-05-20 19:49:36'),
('9c7cb1f9-4a2b-4655-9b0b-6fbd4869b858', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"Order has been  completed  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:05:25', '2022-04-18 16:05:25'),
('9ceba3cf-2659-4dc7-a0c3-3bbd4e3f166e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:15:43', '2022-03-24 19:15:43'),
('9cf48e86-1e58-4427-9f7a-6e450c42ecc0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:17', '2022-03-25 00:27:17'),
('9cfae0e2-3642-425d-9301-7654916ab9f0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"549\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:59:38', '2022-06-03 19:59:38'),
('9d0a4058-a326-4481-9dbd-75a203aaa810', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"349\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 349\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-04 11:19:53', '2022-03-04 11:19:53');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('9d108bf5-467e-4108-83c7-a781d9e1f8be', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":422,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-07 22:13:55', '2022-04-07 22:13:55'),
('9d1a8eec-cf62-46e8-ad69-439fc9a3bdf2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"589\",\"msg\":\"Your Deadline Request has been Accepted\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/589\"}', NULL, '2022-06-15 17:20:45', '2022-06-15 17:20:45'),
('9d1be07f-3076-4361-9f4d-92087784a780', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:58:13', '2022-04-18 12:58:13'),
('9d21c929-aee2-4039-8efe-aa9c2cf7c237', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"571\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:33:01', '2022-06-11 16:33:01'),
('9d4f2e5f-93cc-4e87-8226-d965c6ff0e12', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"366\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:12:01', '2022-03-25 00:12:01'),
('9d6f1d6a-ba40-4045-893d-bf06804a0698', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:29', '2022-05-20 19:26:29'),
('9d77a174-3239-415e-8e0d-9633e10f28e2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:47:04', '2022-04-08 15:47:04'),
('9d7d1a43-f6f5-475e-9ec6-a46c3d40a10e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"359\",\"msg\":\"A File has been uploaded for admin for  Order ID- 359\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/359\"}', NULL, '2022-03-24 18:19:48', '2022-03-24 18:19:48'),
('9da683f4-f8cc-4532-be78-4dbd1f35932c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"350\",\"msg\":\"Worker has Claimed on Order ID Order ID- 350\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/350\"}', NULL, '2022-03-23 20:01:49', '2022-03-23 20:01:49'),
('9dec395d-12f7-4bb4-85ce-c0068f90305e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:54', '2022-05-10 19:32:54'),
('9df464ae-20a7-42d0-ab43-bbbade26a552', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"477\",\"msg\":\"A File has been uploaded for admin for  Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:54:40', '2022-04-18 12:54:40'),
('9e725e0b-be3d-4e3a-8079-5f3d19378c11', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"346\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-02-21 15:22:22', '2022-02-21 15:22:22'),
('9e76f19b-3596-4170-ac16-b9c5b492b410', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"592\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:35:25', '2022-06-16 19:35:25'),
('9e801a5b-173a-487d-806e-0ad071e1730d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"426\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 22:34:21', '2022-04-07 22:34:21'),
('9e89a146-8bda-4d7a-8326-8aba3605736b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"586\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-14 18:51:07', '2022-06-14 18:51:07'),
('9ecb7707-137a-42be-ba7b-22c80957ec20', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:16', '2022-04-28 14:11:16'),
('9ee4fcf0-ed47-43a3-a586-4e122954f2bb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"355\",\"msg\":\"Your Deadline Request has been Accepted\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/355\"}', NULL, '2022-03-24 17:41:08', '2022-03-24 17:41:08'),
('9ef05f1d-1f34-4334-bc7c-bcffbe57c142', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:58', '2022-03-24 18:16:58'),
('9f0c494b-ba0f-4dc4-bbd4-b3be631e2dd4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"446\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 446\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 17:51:28', '2022-04-09 17:51:28'),
('9f1ddf34-bdf2-402b-8e1d-fc45783d5063', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"529\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-26 17:16:07', '2022-05-26 17:16:07'),
('9f287e68-a15e-4b18-a66a-bb5cf0b02ffb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"369\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-29 12:47:16', '2022-03-29 12:47:16'),
('9f4da33a-2605-4474-a862-0bf497265fbf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"451\",\"msg\":\"Worker has bid on Order ID- 451\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', '0000-00-00 00:00:00', '2022-04-12 14:38:58', '2022-04-12 14:38:58'),
('9f52d7e4-ea5d-49a6-b5a4-eb480fcd95cd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"486\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 13:38:45', '2022-04-28 13:38:45'),
('9f71499f-06e0-47e9-9912-bc351eb98083', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:32:06', '2022-03-24 19:32:06'),
('9fa1ff88-7868-4192-8928-1b415dc7f2b4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:35:04', '2022-04-28 14:35:04'),
('9fac51fc-3256-4284-95f2-52ee5283147a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"479\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 13:05:50', '2022-04-18 13:05:50'),
('9fb11bde-4715-4086-b0f5-7f1a5e025b2d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"486\",\"msg\":\"Worker has Claimed on Order ID Order ID- 486\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/486\"}', NULL, '2022-04-28 13:39:14', '2022-04-28 13:39:14'),
('9fd6a071-6ba2-4042-9917-21ca2817239d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:25:15', '2022-04-28 14:25:15'),
('9fe29b73-807d-464e-8467-089088a3eef7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-06 16:51:11', '2022-04-06 16:51:11'),
('9fe66484-936d-4654-8e09-9a1f7aa3ec70', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"422\",\"msg\":\"A File has been uploaded for admin for  Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 22:15:49', '2022-04-07 22:15:49'),
('a009043c-ba5e-4e40-a9f4-8289727eede5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:31:04', '2022-04-13 12:31:04'),
('a0176fbb-8c56-44c6-918c-65cc78e231ba', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:28', '2022-04-28 14:11:28'),
('a0255721-1e75-4baf-8d6f-bdf6a59f0c56', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"445\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 16:43:10', '2022-04-09 16:43:10'),
('a040c134-8492-4a4a-93c3-9d94a2266f74', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:10:36', '2022-03-25 00:10:36'),
('a04e23a9-ab08-4e5f-a739-a6e52ea28ba1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:24:58', '2022-04-28 14:24:58'),
('a05cac26-005e-41f4-9083-facf19a5db25', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"587\",\"msg\":\"Worker has Claimed on Order ID Order ID- 587\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/587\"}', NULL, '2022-06-15 14:21:29', '2022-06-15 14:21:29'),
('a097d67f-f5bc-4e15-8d3c-a287463a5b7c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"537\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 14:22:13', '2022-06-03 14:22:13'),
('a09e9941-b7df-4d42-a599-fea98628ab18', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:30:00', '2022-05-20 19:30:00'),
('a0ba69b0-6836-4717-a415-77909495f84f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"422\",\"msg\":\"A File has been uploaded for admin for  Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 22:15:46', '2022-04-07 22:15:46'),
('a137effa-6728-4037-b978-f3d136289216', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 94, '{\"order_id\":588,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-15 15:13:15', '2022-06-15 15:13:15'),
('a13c323e-e033-49b7-9f0b-565b320dee9a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"486\",\"msg\":\"Worker has Claimed on Order ID Order ID- 486\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/486\"}', NULL, '2022-04-28 13:39:08', '2022-04-28 13:39:08'),
('a17c3a72-eacd-41c3-85fb-709f0d7405b2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 11:55:18', '2022-04-07 11:55:18'),
('a1a812b6-9952-49c3-85a8-e206c3574983', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"435\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-08 15:07:44', '2022-04-08 15:07:44'),
('a1be70a0-6a9f-4d9c-86a8-6bd1a68006d1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"479\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 13:05:30', '2022-04-18 13:05:30'),
('a1d11475-1633-4cea-aab7-3238fe847fb9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"445\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 16:43:13', '2022-04-09 16:43:13'),
('a1dcf5be-e9e7-424c-8dbc-edf8fedbfd6b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"435\",\"msg\":\"Order has been  completed  Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/435\"}', NULL, '2022-04-08 15:09:13', '2022-04-08 15:09:13'),
('a1dd9a10-4e2e-4797-9f11-9b97db2c329d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:07', '2022-05-16 19:56:07'),
('a1ee63de-4535-486e-8ce8-129dfa46b190', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:08:07', '2022-05-20 19:08:07'),
('a2120583-9c84-4e0d-8c79-439e2ef073a7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"440\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 16:32:20', '2022-04-08 16:32:20'),
('a22e401b-2512-47f5-bcd7-25871ddcf09c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"356\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 17:22:53', '2022-03-24 17:22:53'),
('a2470494-275c-463d-a50e-ce7d90898443', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"448\",\"msg\":\"Worker has bid on Order ID- 448\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-11 13:22:17', '2022-04-11 13:22:17'),
('a264e1a5-c7f6-414e-8680-75758b637558', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"527\",\"msg\":\"A File has been uploaded for admin for  Order ID- 527\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/527\"}', NULL, '2022-05-22 19:52:34', '2022-05-22 19:52:34'),
('a2719168-9d84-47fe-85a0-d4c61523195b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:39', '2022-04-18 11:50:39'),
('a28a4928-afc3-4449-ba31-613cdfe78928', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"569\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:04:34', '2022-06-11 16:04:34'),
('a2904cbc-e0c2-42cf-a604-24e5af9dddb0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"355\",\"msg\":\"Worker has Claimed on Order ID Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/355\"}', NULL, '2022-03-24 14:57:18', '2022-03-24 14:57:18'),
('a2f710d6-9fcb-4e19-810f-a88da13e247f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"434\",\"msg\":\"A File has been uploaded for admin for  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:00:23', '2022-04-08 15:00:23'),
('a3127579-8828-4f84-a6eb-54d927228ea7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:24', '2022-05-16 19:58:24'),
('a326838c-f8d5-4d7a-ad96-d89866ab60a8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:13:57', '2022-04-07 00:13:57'),
('a369fb6f-6fd6-495e-a9ef-f46f506ebbb2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"452\",\"msg\":\"Worker has Claimed on Order ID Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-12 15:00:03', '2022-04-12 15:00:03'),
('a3872224-f365-4e13-97b9-437fa8ed939e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"355\",\"msg\":\"Worker has Claimed on Order ID Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/355\"}', NULL, '2022-03-24 14:57:12', '2022-03-24 14:57:12'),
('a38fd0a8-650f-4e25-bf60-315c8e920e34', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:25', '2022-05-16 19:56:25'),
('a39c02a3-5d4f-4938-b459-05eba76ff334', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:54', '2022-05-20 17:58:54'),
('a3cd296d-3acd-4465-8211-5b4de931d586', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":528,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-29 01:33:08', '2022-05-29 01:33:08'),
('a3f241fb-f4be-4649-84b8-3f6ec1c88a6d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":523,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', '0000-00-00 00:00:00', '2022-05-22 14:43:57', '2022-05-22 14:43:57'),
('a4adc511-c993-473b-a8c4-b5dcdb3bc800', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:26:13', '2022-03-04 11:26:13'),
('a4c7159b-b3f7-4871-90b6-24c5d372a82a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"484\",\"msg\":\"Worker has Claimed on Order ID Order ID- 484\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/484\"}', NULL, '2022-04-27 14:31:55', '2022-04-27 14:31:55'),
('a4e28e20-de80-46a2-a084-33c66a8e5464', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"434\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:35:58', '2022-04-08 13:35:58'),
('a4f313e7-4697-4ca7-babd-c7fad5bdc132', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"481\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-23 13:10:01', '2022-04-23 13:10:01'),
('a4f5bbe6-4759-4249-b667-99dd351d3119', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"433\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:12:23', '2022-04-08 13:12:23'),
('a51e6cdb-37fe-4b5a-a262-537cc8f09560', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:33', '2022-03-24 18:16:33'),
('a5269c17-edae-41a3-8594-6e0c3edb7f79', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 13:41:25', '2022-03-24 13:41:25'),
('a56a56e5-7ad3-4b6e-8d14-f6785e1dd0ef', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-06 16:50:52', '2022-04-06 16:50:52'),
('a5830da7-a781-4896-bb6b-f52d38003dff', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:44', '2022-05-20 17:58:44'),
('a59171c8-bbfe-497e-b79e-08cfecf4b80c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:35:15', '2022-04-28 14:35:15'),
('a5cc7745-38b0-45ae-a3b7-055029b214ab', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"597\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 11:58:32', '2022-09-12 11:58:32'),
('a5d90376-b746-48c0-9a0c-ffd7a64ff844', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"513\",\"msg\":\"A File has been uploaded for admin for  Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 17:24:06', '2022-05-20 17:24:06'),
('a5e2fabf-5eb7-40d6-b264-9b0c5837ee1d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:07:45', '2022-04-18 12:07:45'),
('a606c39a-0c6a-44b5-8b52-d809d3ceb5c9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"Order has been  completed  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:23:56', '2022-04-08 15:23:56'),
('a61adeff-5bc4-44c5-8ad2-f81098f2bd9b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":438,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-08 15:14:22', '2022-04-08 15:14:22'),
('a61c9581-c587-4ca9-ae9a-f58ed89ca0a0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"513\",\"msg\":\"Worker has Claimed on Order ID Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 12:32:50', '2022-05-20 12:32:50'),
('a65a59cb-ab1c-44ae-99eb-c77d71ce0b56', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:11:08', '2022-03-25 00:11:08'),
('a65d6971-6404-45b9-9beb-a4da4ad165ef', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:32:33', '2022-04-27 14:32:33'),
('a6888102-0dce-4756-b7b1-8c30a928fa0d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:27:46', '2022-04-28 14:27:46'),
('a69cb95a-dddb-4e15-9605-13904772b639', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"495\",\"msg\":\"Worker has bid on Order ID- 495\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:34:41', '2022-04-28 14:34:41'),
('a69ccbc0-a09d-4480-bce7-991209de74e9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:18', '2022-05-16 19:58:18'),
('a6c01cf7-ea5b-4ef8-8dda-b2d8dc087012', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"451\",\"msg\":\"Your Deadline Request has been Accepted\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/451\"}', NULL, '2022-04-12 14:43:45', '2022-04-12 14:43:45'),
('a6d0f485-7c27-4622-815c-500846d9c98e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:34', '2022-05-10 17:28:34'),
('a6dcd686-0d06-4b53-94df-e44818b974ec', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:26:39', '2022-03-25 00:26:39'),
('a6ead9ef-9b0b-4790-ae0a-5a37a907dfff', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:32:51', '2022-04-27 14:32:51'),
('a6f9f86d-fc18-46ef-b63b-cad257138138', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"524\",\"msg\":\"Worker has bid on Order ID- 524\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', '0000-00-00 00:00:00', '2022-05-22 17:50:17', '2022-05-22 17:50:17'),
('a6fab77b-9377-44db-a7f4-4dd18d5cd508', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"569\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:04:37', '2022-06-11 16:04:37'),
('a7140e3d-78d9-429c-ba02-64447d808a93', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"435\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:03:20', '2022-04-08 15:03:20'),
('a778fc81-9d37-445f-90af-a2ca3f47a28d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:11:56', '2022-04-07 00:11:56'),
('a7aa2215-3d03-4fbe-9ff1-b585a13dcdcb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"572\",\"msg\":\"Worker has bid on Order ID- 572\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-11 17:39:26', '2022-06-11 17:39:26'),
('a7fa2aee-e1c9-4e5c-ade2-31a68e102f8a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":478,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 13:09:21', '2022-04-18 13:09:21'),
('a81df8d9-6082-4057-b5c0-0c84440afbe8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:48', '2022-03-24 18:16:48'),
('a8204c60-5187-45c8-b245-58ac1646e7af', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:41:07', '2022-04-12 23:41:07'),
('a826198d-d548-4681-8848-c6d1efb184f7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:15:59', '2022-05-16 20:15:59'),
('a85013aa-7105-4e7f-a728-9dcae2c49437', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 14:51:55', '2022-04-18 14:51:55'),
('a8698f1a-6ceb-4421-9246-88ed9e7e8f96', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"348\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-03 18:56:57', '2022-03-03 18:56:57'),
('a88dec1d-e3fd-41c4-823b-c7fe8819b7d4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"445\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 445\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 16:44:11', '2022-04-09 16:44:11'),
('a8b8ba5b-bcf3-495d-bf02-c20c22f58644', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:43:01', '2022-05-16 19:43:01'),
('a8ba1f5d-b781-47b6-bb47-a7c2cfa27229', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"571\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:33:13', '2022-06-11 16:33:13'),
('a8c2f76b-406c-46ce-9456-c91f2b69386c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"477\",\"msg\":\"A File has been uploaded for admin for  Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 14:45:24', '2022-04-18 14:45:24'),
('a904ef2d-3355-4152-971a-e445f4e17ece', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"507\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 507\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-05-16 18:43:37', '2022-05-16 18:43:37'),
('a917d0fa-7701-48d4-979e-dbe772987a11', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:32', '2022-03-23 13:43:32'),
('a91e777e-6e7a-4d6d-9fe0-91ff59cb6db7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:58:54', '2022-04-22 11:58:54'),
('a94d3486-6f8e-463a-bcc7-acff3eb74d78', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"447\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:00:16', '2022-04-11 13:00:16'),
('a9836489-dfa2-44a9-9903-565196f1b4e2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:17', '2022-05-16 19:49:17'),
('a9bff3d1-cada-4796-9d2a-678923d1e294', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"442\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 13:35:12', '2022-04-09 13:35:12'),
('a9d4e977-1d67-44a2-b2a2-2a5a139786a6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"352\",\"msg\":\"Worker has Claimed on Order ID Order ID- 352\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/352\"}', NULL, '2022-03-23 13:40:58', '2022-03-23 13:40:58'),
('a9f6981f-67ea-4f09-ab11-58cd71ed4aa7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"359\",\"msg\":\"A File has been uploaded for admin for  Order ID- 359\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/359\"}', NULL, '2022-03-24 18:19:51', '2022-03-24 18:19:51'),
('aa07c691-2df1-446d-be3c-9ada89c53db4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:07:39', '2022-05-20 19:07:39'),
('aa2d5a5a-4606-44c3-88f0-0dddd1222f65', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"479\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 13:05:53', '2022-04-18 13:05:53'),
('aa4466e4-b527-44ef-87d0-e9d07f56ec15', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:32', '2022-05-16 19:57:32'),
('aa6360ba-02c5-4ee4-aeab-005905a62038', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:31:18', '2022-04-13 12:31:18'),
('aadf9f34-c146-4812-b06e-13a1f2d69515', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"451\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:32:54', '2022-04-12 14:32:54'),
('ab07c571-c32f-4697-bba9-455aaff60b6e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"448\",\"msg\":\"Worker has bid on Order ID- 448\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', '0000-00-00 00:00:00', '2022-04-11 13:22:03', '2022-04-11 13:22:03'),
('ab16c6aa-5e54-4983-8c65-43f8731a71ff', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:31:12', '2022-04-13 12:31:12'),
('ab1903bf-ff4d-4728-b980-b7b03805f197', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"452\",\"msg\":\"A File has been uploaded for admin for  Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-12 15:15:42', '2022-04-12 15:15:42'),
('ab46731f-e4e7-4b99-a0d3-e9e2789fe79f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:15:59', '2022-05-16 20:15:59'),
('ab62e7d2-e8af-4e00-9eb9-c20a681ab80d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 13:13:43', '2022-04-18 13:13:43'),
('ab7845b6-3ea8-4f76-818b-069d649ce556', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:30:13', '2022-04-13 12:30:13'),
('ab8aea9c-d4a3-4971-85ac-e884d5158aa3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"430\",\"msg\":\"Worker has Claimed on Order ID Order ID- 430\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/430\"}', NULL, '2022-04-08 12:21:49', '2022-04-08 12:21:49'),
('ab91bef3-f2e8-4143-ab0b-a12c7fa6146a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"538\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:21:28', '2022-06-03 16:21:28'),
('ab9e0138-76e9-43fe-a126-289f7fc1aa87', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:41', '2022-04-27 14:33:41'),
('abe26fed-3e59-4532-b99f-3ca1bcaa8f9f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"356\",\"msg\":\"Order has been  completed  Order ID- 356\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/356\"}', NULL, '2022-03-24 18:14:26', '2022-03-24 18:14:26'),
('abfc5b24-d51b-4462-82ac-d01a76d788d7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"439\",\"msg\":\"A File has been uploaded for admin for  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:25:29', '2022-04-08 16:25:29'),
('ac1a9a27-b80a-4d5f-8dfa-fb0bc6355c33', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"452\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:56:52', '2022-04-12 14:56:52'),
('ac41196b-9b47-495c-ac52-fe88c5624f9c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"356\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 356\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 17:51:44', '2022-03-24 17:51:44'),
('ac7fed54-ce4d-47c9-ab80-e2f4dcb36afe', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"522\",\"msg\":\"Worker has Claimed on Order ID Order ID- 522\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/522\"}', NULL, '2022-05-20 19:43:29', '2022-05-20 19:43:29'),
('ac8b54ef-7688-4196-9f24-06c4c794b0f8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:41:38', '2022-04-12 23:41:38'),
('acba975d-29e7-43b3-a783-80d9276888e7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:32:04', '2022-03-24 19:32:04'),
('acbbdbcf-b064-431b-bd54-e7c45fcce9d4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"438\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:13:03', '2022-04-08 15:13:03'),
('acf6c7a8-adeb-4742-b14c-3842179f9a21', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:21:21', '2022-04-08 15:21:21'),
('acfcb9fc-b5f6-472e-a1d5-60e0512caaa3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:30:36', '2022-03-24 19:30:36'),
('ad0d0d7c-f676-4bf8-b0cb-67c2caf8c4ba', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"435\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-08 15:07:38', '2022-04-08 15:07:38'),
('ad0d3580-7fab-4761-83dd-6c28e3792ec2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"451\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 451\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-12 14:40:53', '2022-04-12 14:40:53'),
('ad9f1745-8863-4ad8-a3a4-55a7455c2c0c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:30:31', '2022-04-13 12:30:31'),
('add29b24-eb6c-46a2-a2e0-d3fbf10ece5a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:00:31', '2022-04-27 14:00:31'),
('ae2536ba-ead7-404e-98dc-c3aaa3cfd8b9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"590\",\"msg\":\"A File has been uploaded for admin for  Order ID- 590\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/590\"}', NULL, '2022-06-16 18:48:58', '2022-06-16 18:48:58'),
('ae3248da-ea43-4931-b5ac-5ab9e52469fc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:38', '2022-05-16 19:57:38'),
('aea2ed7f-e655-4a15-a3db-d69f66dde29e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:32', '2022-05-10 17:28:32'),
('aeb7b214-bf1e-4193-b343-a5a8b07bd85c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"479\",\"msg\":\"Worker has Claimed on Order ID Order ID- 479\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/479\"}', NULL, '2022-04-21 17:01:10', '2022-04-21 17:01:10'),
('aebedda5-68f5-4aca-b935-d8a42ead501a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"491\",\"msg\":\"Worker has bid on Order ID- 491\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:24:17', '2022-04-28 14:24:17'),
('aec0d29a-4ae4-4468-8ac6-96e197e57fc6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:34', '2022-05-16 19:49:34'),
('aec169e1-a681-49bf-ab6e-29f4f75d2946', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"448\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:09:49', '2022-04-11 13:09:49'),
('aecbcc60-7744-4f01-8ffe-e986194b54a9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"551\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 20:16:52', '2022-06-03 20:16:52'),
('aeccf618-66f2-493d-a45a-085b751d8473', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"513\",\"msg\":\"A File has been uploaded for admin for  Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 17:26:56', '2022-05-20 17:26:56'),
('af706e9c-6e30-4595-a7ce-529bde02b0aa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"538\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:21:26', '2022-06-03 16:21:26'),
('afaadbf4-ce17-47e6-9367-77e8ce959093', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:26:48', '2022-03-25 00:26:48'),
('afadf9e7-97a2-4850-ab48-1e1960c1e190', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 13:14:33', '2022-04-18 13:14:33'),
('afdaf4e8-6cf2-44c7-a972-34a485821175', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:27', '2022-05-10 17:28:27'),
('afee957e-6f90-4e24-9044-73c782a3bb10', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:12', '2022-05-16 19:58:12'),
('affd0ddf-58d8-4aea-8456-955b856518b8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":480,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-25 16:45:26', '2022-04-25 16:45:26'),
('b007fb5d-eaf0-4536-bbc4-338bfb9c037e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"436\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:06:17', '2022-04-08 15:06:17'),
('b0127f82-4fbd-4ddc-902b-6e5974d8eb04', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"447\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:00:19', '2022-04-11 13:00:19'),
('b02a1edd-4380-4da2-9271-2dc44525dd87', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":359,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-03-24 18:18:03', '2022-03-24 18:18:03'),
('b04989d2-1688-4fc2-a8eb-cb4532c74afa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:07:39', '2022-04-18 12:07:39'),
('b0533ca5-a921-4b5f-8570-5d38ece27b95', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:59:03', '2022-05-20 17:59:03');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('b05ffba0-7446-431c-b771-9b9528e6e3a3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"589\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-15 15:15:46', '2022-06-15 15:15:46'),
('b0622348-6179-4224-b4c5-f258bd78841b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"593\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:38:31', '2022-06-16 19:38:31'),
('b08f6c18-cca0-41d4-84dc-f48d4317a22f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"445\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 16:43:33', '2022-04-09 16:43:33'),
('b099b68b-c1f2-4216-bef7-a8999eb5cc38', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"434\",\"msg\":\"A File has been uploaded for admin for  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 13:37:27', '2022-04-08 13:37:27'),
('b0c50562-dc29-41fe-ae07-c0b6a0e35e66', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"513\",\"msg\":\"A File has been uploaded for admin for  Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 17:24:11', '2022-05-20 17:24:11'),
('b0f29f73-edb4-4b51-b4b3-aa52d52237db', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"595\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 12:00:13', '2022-09-12 12:00:13'),
('b125bb1c-608e-42fd-9830-57358214ec29', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"585\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-13 19:18:48', '2022-06-13 19:18:48'),
('b1a1d99f-6a86-4434-92ef-b9ce7522d55f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"434\",\"msg\":\"Order has been  completed  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:01:21', '2022-04-08 15:01:21'),
('b1bbacdc-8795-40dc-b2f8-2438a9f11ac1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"523\",\"msg\":\"Worker has Claimed on Order ID Order ID- 523\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/523\"}', NULL, '2022-05-22 19:32:49', '2022-05-22 19:32:49'),
('b1cbdd71-a63a-4c55-8fdd-0547df0a6006', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:07:17', '2022-04-13 16:07:17'),
('b1ceffba-5b57-41ba-a79d-310345046141', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:21', '2022-05-10 17:28:21'),
('b259b53d-00ca-4467-a746-60baa478358b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":418,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-01 14:52:05', '2022-04-01 14:52:05'),
('b26ceef1-0dd8-4b88-9529-10ab32b32829', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:30:08', '2022-05-20 19:30:08'),
('b2736ca8-f8f2-4113-a721-6eb2859dcc05', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 18:14:31', '2022-05-10 18:14:31'),
('b280328d-550b-4acb-a125-b8cc814450f8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":529,\"msg\":\"A File Message has been uploaded for Order ID 529\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/529\"}', NULL, '2022-05-27 19:42:42', '2022-05-27 19:42:42'),
('b281d3d5-ef92-4fa4-8029-beb4fe6dca21', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"452\",\"msg\":\"Worker has Claimed on Order ID Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-12 14:59:56', '2022-04-12 14:59:56'),
('b2a0db39-7b55-48d5-8902-fb8346ce082b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"346\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-02-21 15:22:23', '2022-02-21 15:22:23'),
('b2b374f1-dadc-442d-ba97-e94b3ae388fc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"523\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 14:40:52', '2022-05-22 14:40:52'),
('b2b51a93-0d4b-400a-92da-0354c24a9ae1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"444\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 14:50:59', '2022-04-09 14:50:59'),
('b2cb7093-5c0e-4f78-a696-2e819a512b25', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"541\",\"msg\":\"Worker has Claimed on Order ID Order ID- 541\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/541\"}', NULL, '2022-06-03 16:58:03', '2022-06-03 16:58:03'),
('b2d6d6b2-6c68-441e-a81d-2c751eaeb774', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:12:32', '2022-04-07 00:12:32'),
('b2dd5176-47b3-4a0a-8483-05f5ed4de5af', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:10:45', '2022-03-25 00:10:45'),
('b2e89c9b-b3d9-4932-bdd6-876ede44b29e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:11', '2022-05-16 19:58:11'),
('b2f90c63-cd68-4a0c-b59b-198e9484dc30', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:55:54', '2022-05-16 19:55:54'),
('b2fb7fbf-26d6-4c3e-93ff-f166fa6f85ac', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":594,\"msg\":\"A new Message has been posted for Order ID- 594\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/594\"}', NULL, '2022-06-20 17:58:40', '2022-06-20 17:58:40'),
('b2fdc44c-1ccc-47ea-8aa6-37dd264639d3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"589\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-15 15:15:47', '2022-06-15 15:15:47'),
('b312eb06-9850-416c-8e1b-7b328bef4323', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-01 18:28:53', '2022-04-01 18:28:53'),
('b3a03a6a-a421-46c3-a411-4d533b55731c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"545\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:45:31', '2022-06-03 19:45:31'),
('b3ce49e8-413a-46fc-810a-1b2ea1e9ce01', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"434\",\"msg\":\"Order has been  completed  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:01:24', '2022-04-08 15:01:24'),
('b3e4c308-053c-49f3-8e47-0e2878edf18d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":355,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-03-24 14:19:39', '2022-03-24 14:19:39'),
('b3f6cdaa-0a28-4790-b22b-7a51fc6ff0a7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"545\",\"msg\":\"Worker has bid on Order ID- 545\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-03 19:46:14', '2022-06-03 19:46:14'),
('b43873b4-1097-4b58-a037-ce7f8d05ef89', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"587\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-14 20:00:42', '2022-06-14 20:00:42'),
('b44ca61e-26af-4bd8-b3b8-4f233cf6b1a2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"595\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 12:00:38', '2022-09-12 12:00:38'),
('b4644e1e-43ee-46d7-8aaf-4ea6cbfe45f7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', '0000-00-00 00:00:00', '2022-04-05 16:36:04', '2022-04-05 16:36:04'),
('b474a4b3-7f3d-4bc2-aef1-400c12222d57', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:06', '2022-04-28 14:30:06'),
('b4930c4f-d887-4830-8de9-68c958a58d0d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"531\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 01:34:42', '2022-05-29 01:34:42'),
('b49adae1-aa9c-4fcf-ab20-f4379b6a4ccd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":534,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-30 20:22:39', '2022-05-30 20:22:39'),
('b4c2f629-e838-46f5-bc7b-c5566bf07ad0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"590\",\"msg\":\"Worker has bid on Order ID- 590\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-16 18:23:21', '2022-06-16 18:23:21'),
('b4dab102-c82d-4819-be00-9ca5ee1f654c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:12:39', '2022-04-07 00:12:39'),
('b4f0bbfc-b523-4cd7-a170-2cf8aec7351a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:15:37', '2022-03-24 19:15:37'),
('b4fb858b-7334-4f15-8c9a-d2beae8cae26', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"506\",\"msg\":\"A File has been uploaded for admin for  Order ID- 506\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/506\"}', NULL, '2022-05-16 17:31:40', '2022-05-16 17:31:40'),
('b5653e42-3786-4ab2-889b-596f34c12687', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"447\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:00:30', '2022-04-11 13:00:30'),
('b56ebb07-b042-47a1-9021-d38697b75f03', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:16', '2022-04-28 14:30:16'),
('b56f1093-e313-4e10-b4f0-3680bdf075c5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:50', '2022-04-27 14:33:50'),
('b5760b1b-27ca-495c-a2d2-e218d1284570', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"589\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-15 15:15:47', '2022-06-15 15:15:47'),
('b58d3130-dfc6-4316-91da-504115787bea', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"436\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:06:26', '2022-04-08 15:06:26'),
('b593dac5-373d-4174-a34f-d9ae62562364', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"349\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 349\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-04 11:20:03', '2022-03-04 11:20:03'),
('b5953f09-223a-4d82-b7c2-52317d9077b1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:29', '2022-04-28 14:11:29'),
('b59851ac-4690-43c7-b24b-bf53a5f46d7c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:57', '2022-04-28 14:28:57'),
('b5eed672-8ed2-4e94-8d7e-9cc6fe504e5d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:56', '2022-05-16 19:42:56'),
('b604a9bc-9e98-40ed-b383-fd6b15f18fa5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"429\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 429\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-07 22:51:30', '2022-04-07 22:51:30'),
('b6191716-7f88-4bb8-a761-3ce2a938d60b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"433\",\"msg\":\"Worker has Claimed on Order ID Order ID- 433\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/433\"}', NULL, '2022-04-08 13:13:04', '2022-04-08 13:13:04'),
('b6418a08-740f-4648-bb58-c0d073dc7f6c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"529\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-26 17:16:07', '2022-05-26 17:16:07'),
('b6639109-b7d7-4dba-8f76-c07e6025a787', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"529\",\"msg\":\"Worker has Claimed on Order ID Order ID- 529\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/529\"}', NULL, '2022-05-26 17:16:59', '2022-05-26 17:16:59'),
('b684e90c-df70-4b00-8f5f-112fba50386c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"539\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:33:27', '2022-06-03 16:33:27'),
('b68ccfa9-9b4e-4bd9-a28f-ed931bf345c8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:59:43', '2022-04-27 13:59:43'),
('b69a7467-6f22-4822-82e4-6944b2414144', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:50:25', '2022-04-18 12:50:25'),
('b6cbfea0-2047-4f45-a1dc-9043c8b67d30', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:35:09', '2022-04-28 14:35:09'),
('b6f7bf24-9096-408c-9e17-b346c7519a85', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:23', '2022-03-23 13:43:23'),
('b6fb789a-5989-4815-8f3f-1e889aa70696', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:37:17', '2022-03-24 19:37:17'),
('b74b9080-f115-4221-9517-6294ffa951c6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:11', '2022-04-18 11:50:11'),
('b75572a7-64f5-495f-a6fe-7e3b60354b59', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:49:34', '2022-04-09 17:49:34'),
('b78da66e-2191-4a13-b183-820fe8203600', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"532\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 19:02:39', '2022-05-29 19:02:39'),
('b7c704db-75ef-4238-a62c-23db2947614e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"360\",\"msg\":\"Worker has Claimed on Order ID Order ID- 360\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/360\"}', NULL, '2022-03-24 19:05:38', '2022-03-24 19:05:38'),
('b7f26fb2-0af4-48ed-b462-b026a4c5555b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"452\",\"msg\":\"A File has been uploaded for admin for  Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-12 15:15:45', '2022-04-12 15:15:45'),
('b84e3ee9-0ec3-455a-b5af-78cc4a3fdf2b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"520\",\"msg\":\"Worker has Claimed on Order ID Order ID- 520\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/520\"}', NULL, '2022-05-20 19:49:38', '2022-05-20 19:49:38'),
('b860b5e0-ed30-4c92-b4c6-847291060963', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"418\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-01 14:51:52', '2022-04-01 14:51:52'),
('b87a8bda-73ee-4317-841e-c8d86c187d21', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"422\",\"msg\":\"Worker has Claimed on Order ID Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 16:49:46', '2022-04-07 16:49:46'),
('b87e6679-6cbd-4f24-b9ab-a3c528c3876b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":454,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-12 23:42:04', '2022-04-12 23:42:04'),
('b8cd5257-f9de-4587-bef3-6b5792de594e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:10:39', '2022-03-25 00:10:39'),
('b8e7d7af-98aa-4ceb-a8f2-77ec53c3836f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"539\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:33:27', '2022-06-03 16:33:27'),
('b8fcfe57-b98c-4742-a72d-81f7dd5f4183', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"540\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:34:18', '2022-06-03 16:34:18'),
('b91396e9-4ecf-4e4e-b892-d1c19dc5df5f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"477\",\"msg\":\"A File has been uploaded for admin for  Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:54:46', '2022-04-18 12:54:46'),
('b916d5c6-24c0-4ebf-9a02-3898357362e4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:50:10', '2022-04-09 17:50:10'),
('b9681fab-f5ee-4ce5-aa9b-0c151bb772b4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 13:13:00', '2022-04-18 13:13:00'),
('b96a2e35-8a5d-4cf7-8939-477ab8309109', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:04', '2022-04-28 14:28:04'),
('ba2d8cd1-320f-4f68-a764-7ba7fe7911bf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"420\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-01 18:05:27', '2022-04-01 18:05:27'),
('ba87131e-60f2-4126-b9be-e73e124e6ae4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"448\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:09:23', '2022-04-11 13:09:23'),
('ba8c3c02-4175-43f8-bfff-2248545f41e8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":478,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 13:14:30', '2022-04-18 13:14:30'),
('bace2267-45e5-4680-aa63-ca6726065bdb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"434\",\"msg\":\"A File has been uploaded for admin for  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 13:37:24', '2022-04-08 13:37:24'),
('badcd163-c5ca-46ce-89a7-4fb12cef2dad', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"594\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:40:51', '2022-06-16 19:40:51'),
('bae5f232-fa09-4f84-b303-cf58b9aae2b4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:59:08', '2022-04-22 11:59:08'),
('baff8b89-baf4-4df7-9b15-3bb1492d37a1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"452\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:56:31', '2022-04-12 14:56:31'),
('bb3b9b84-f1d1-442d-bd8d-35867a987cf7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 16:00:30', '2022-04-08 16:00:30'),
('bb8cb4aa-90c0-419e-b9c7-5a5fe3ebe61b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:59:45', '2022-04-27 13:59:45'),
('bb9229c2-0f44-4336-821e-8de463b1cd3c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:53', '2022-03-23 13:43:53'),
('bbb0ee11-2f0e-42df-9f81-360192a0dcbe', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"527\",\"msg\":\"A File has been uploaded for admin for  Order ID- 527\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/527\"}', NULL, '2022-05-22 19:56:52', '2022-05-22 19:56:52'),
('bbbcdb9f-576e-4e13-a779-c097dc807241', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:47', '2022-03-25 00:27:47'),
('bc297a2a-3bba-4923-adc0-4988a36b16e5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":422,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-07 17:17:33', '2022-04-07 17:17:33'),
('bc2a0bc5-8015-46f3-832f-b06f01464dfa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:25:50', '2022-03-04 11:25:50'),
('bc8712b7-67b8-41be-bd57-f304802f6c05', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"550\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 20:09:17', '2022-06-03 20:09:17'),
('bcaa9feb-4b95-4407-8e5a-7950763e1225', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"507\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 507\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-05-16 18:43:33', '2022-05-16 18:43:33'),
('bce62e57-b719-4573-ac5b-2323e6711c92', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"42\",\"msg\":\"Your Page request has been Approved Order ID- 569\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/569\"}', NULL, '2022-06-11 16:23:56', '2022-06-11 16:23:56'),
('bce7f3c8-3fba-4901-92ad-e2403255c937', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:19', '2022-05-10 17:28:19'),
('bd2abbf1-59fc-47bc-9998-fd58c6fa01a5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"349\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 349\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-04 11:19:54', '2022-03-04 11:19:54'),
('bd43a239-beca-47bf-8d75-272f467c3c94', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"545\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:45:32', '2022-06-03 19:45:32'),
('bd5395d1-f74a-497e-8224-16a01fc2b2b2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 18:14:25', '2022-05-10 18:14:25'),
('bd5c25e1-ffff-428c-86e1-d12b6da63b0a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:00:16', '2022-04-27 14:00:16'),
('bd8903e8-6feb-4193-8cc7-51bb754fba1d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"422\",\"msg\":\"Worker has Claimed on Order ID Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 22:14:01', '2022-04-07 22:14:01'),
('bd894dc3-86c5-4da6-8423-5d5208eefffa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:07:25', '2022-05-20 19:07:25'),
('bda90c3d-02dc-40f2-b1ea-0e607d39e7a4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"594\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:40:50', '2022-06-16 19:40:50'),
('bdea6613-5f6a-46c3-b461-6b656818eda0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"477\",\"msg\":\"Order has been  completed  Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 14:45:40', '2022-04-18 14:45:40'),
('be3cfb5e-184d-46df-a1ad-90f7de0a592b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"506\",\"msg\":\"Worker has bid on Order ID- 506\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-05-13 18:55:50', '2022-05-13 18:55:50'),
('be585cd6-0a4d-4238-8760-7808c6b1678d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"379\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 379\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-30 19:27:18', '2022-03-30 19:27:18'),
('bebb05d6-102d-4484-ba7a-7a19f28c8ce6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:58:50', '2022-04-27 13:58:50'),
('bee0a31e-9f45-4bb4-9224-374690be6076', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"422\",\"msg\":\"A File has been uploaded for admin for  Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 22:15:43', '2022-04-07 22:15:43'),
('bf4b9e81-bcdc-465e-8c67-57fd11c77a57', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":448,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', '0000-00-00 00:00:00', '2022-04-11 13:22:35', '2022-04-11 13:22:35'),
('bf508266-9bc6-4415-99cd-2062121cb1b0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:15', '2022-03-24 18:16:15'),
('bfc1670e-b57b-46fa-bd1b-f95396119383', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:28', '2022-05-10 17:28:28'),
('bfc63951-86eb-4b18-8de0-32ecd9ae7ef5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:48', '2022-04-18 11:50:48'),
('bffb0391-aa83-4185-87b7-7dbda96f30b5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"364\",\"msg\":\"A File has been uploaded for admin for  Order ID- 364\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/364\"}', NULL, '2022-03-25 00:07:49', '2022-03-25 00:07:49'),
('c04122da-cfe2-4ed2-b834-08bee56513c5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"435\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:02:58', '2022-04-08 15:02:58'),
('c0445e4a-cca2-4651-8863-439d7fed4628', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:31', '2022-05-16 19:57:31'),
('c04768a4-8f45-48ac-8d49-813e4fbc21bc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":529,\"msg\":\"A File Message has been uploaded for Order ID 529\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/529\"}', NULL, '2022-05-27 19:46:19', '2022-05-27 19:46:19'),
('c04cd099-82d3-4452-a47c-c158fd4d59f1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"452\",\"msg\":\"A File has been uploaded for admin for  Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-12 15:14:14', '2022-04-12 15:14:14'),
('c06ee554-347c-4b3e-90f2-9a304f65838f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"360\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:29:25', '2022-03-24 18:29:25'),
('c091df33-ea0c-4bd9-942d-f60a1491be82', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:26:38', '2022-03-04 11:26:38'),
('c0a9d6a8-ed44-4704-aa8d-344095b26ca9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:05:19', '2022-04-18 16:05:19'),
('c0ccfc97-6907-434d-b536-2dd476a08fcf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:13:51', '2022-04-07 00:13:51'),
('c0e1d73b-7022-4748-bd6d-ddf0435dfd28', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:10', '2022-04-28 14:11:10'),
('c0fffee2-5c5d-4075-b7cf-23a4a654fefa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:25:49', '2022-03-04 11:25:49'),
('c10328c5-57e7-4a00-a845-261c57e897f8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:30', '2022-03-24 18:16:30'),
('c12783ea-c22f-404c-82fd-f4d3bf38a325', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":549,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-03 20:00:10', '2022-06-03 20:00:10'),
('c13ac66e-6a3c-458e-acb4-9e05308dac33', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 11:47:44', '2022-04-18 11:47:44'),
('c195e5ce-8431-4403-8672-74dc530bc42c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 13:09:28', '2022-04-18 13:09:28'),
('c196a220-51b2-4d72-8e4e-d7034c969869', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"568\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 15:45:56', '2022-06-11 15:45:56'),
('c199789c-f8ec-4f39-a3e9-bc7d84a720c1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:41:25', '2022-04-12 23:41:25'),
('c1a2dd26-7afa-4d58-9652-ee192a890601', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:32:49', '2022-04-27 14:32:49'),
('c1a8a59f-ed4f-49c9-a3a0-814605991b01', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"434\",\"msg\":\"A File has been uploaded for admin for  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:01:15', '2022-04-08 15:01:15'),
('c1a8ee06-f6ff-4f20-ae86-dd0488ff4d7e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"434\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:36:04', '2022-04-08 13:36:04'),
('c1aaecab-951f-48f3-b317-881792de871b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"371\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-29 13:08:13', '2022-03-29 13:08:13'),
('c1b1dd52-ae70-4cea-b020-388074068650', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:59:03', '2022-04-22 11:59:03'),
('c1ee65ce-636a-4c3e-be04-63b8c79d1430', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"349\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 349\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-04 11:19:55', '2022-03-04 11:19:55'),
('c1f7fe3b-3d11-4bf0-85b0-63b2bb3d5938', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:05:22', '2022-04-18 16:05:22'),
('c209f9f7-a602-480e-b0b4-4155e1ed39b6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:55:55', '2022-05-16 19:55:55'),
('c2425df7-b64f-410b-bad8-a24e64f782e7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:42:09', '2022-03-24 19:42:09'),
('c2523b2c-e4bb-444b-8948-12803ac73d96', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"507\",\"msg\":\"Your Deadline Request has been Accepted\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/507\"}', NULL, '2022-05-16 18:44:03', '2022-05-16 18:44:03'),
('c25456ec-02e6-4ed7-ba4d-38e0aae9af43', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:35:30', '2022-04-28 14:35:30'),
('c26117e0-1822-4ead-a703-195c1eacebbe', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"522\",\"msg\":\"Order has been  completed  Order ID- 522\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/522\"}', NULL, '2022-05-20 19:46:51', '2022-05-20 19:46:51'),
('c2783b37-10e9-44c1-b1c6-88d2992137eb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:37', '2022-05-10 17:28:37'),
('c2cc0731-8e0a-46db-be7f-47fa767d64e9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"364\",\"msg\":\"Worker has Claimed on Order ID Order ID- 364\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/364\"}', NULL, '2022-03-25 00:06:56', '2022-03-25 00:06:56'),
('c2da0521-cb34-4a1b-a1a9-06fee46040d5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"369\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-29 12:47:13', '2022-03-29 12:47:13'),
('c30b95c4-e911-4679-b1a1-b94c05944e43', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"448\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:09:30', '2022-04-11 13:09:30'),
('c30dbd2e-fe6f-4926-a0e8-67146f5c5cc5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"444\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 14:50:54', '2022-04-09 14:50:54'),
('c3362674-a7fa-4422-8875-855b1795a7f5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:42:01', '2022-04-12 23:42:01'),
('c3491c7d-b67e-4ae1-abe3-ffc564bcf793', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:32:46', '2022-04-27 14:32:46'),
('c36b4494-21d0-4f4f-b134-460d0bb7a6e3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 11:55:28', '2022-04-07 11:55:28'),
('c37112e7-72b2-4abd-b1d8-ee65063f1eb8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"364\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:05:23', '2022-03-25 00:05:23'),
('c37baa64-8c6f-461b-8795-25deb728dbb6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"362\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 19:14:34', '2022-03-24 19:14:34'),
('c380bb65-ba42-4977-b94f-f2ae1d75b7fa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"445\",\"msg\":\"Your Deadline Request has been Accepted\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/445\"}', NULL, '2022-04-09 16:47:46', '2022-04-09 16:47:46'),
('c3c9068f-1d0c-4e98-95cb-83adb07e5656', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"452\",\"msg\":\"A File has been uploaded for admin for  Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-13 12:29:34', '2022-04-13 12:29:34'),
('c3dabaff-4bfd-42b1-9060-b1aa5089ea69', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:15', '2022-05-16 19:49:15'),
('c3f23cc5-c6bf-4b0d-a995-408111caef2d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"592\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:35:25', '2022-06-16 19:35:25'),
('c4057923-148d-415e-9548-0db671462789', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":421,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-05 11:16:46', '2022-04-05 11:16:46'),
('c425e77d-4779-4d33-9f52-8e77c4637e17', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"352\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:20:59', '2022-03-23 13:20:59'),
('c431bc64-ffd8-4057-a1ea-e38f1ba4f21f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"575\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:37:03', '2022-06-11 20:37:03'),
('c446e43e-e669-4e1c-866c-4c9128b1181c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"573\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 17:54:25', '2022-06-11 17:54:25'),
('c4479ed6-49b1-418c-8c63-2557122e9e02', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"362\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 19:14:29', '2022-03-24 19:14:29'),
('c4cb0885-1632-4a01-b6b8-491efe17632a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:47', '2022-04-27 14:33:47');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('c4cbcf90-7a47-4655-8abc-3553d87e5926', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"528\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 20:19:45', '2022-05-22 20:19:45'),
('c4d1258d-5421-4f27-ba67-35e13a87654d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"439\",\"msg\":\"A File has been uploaded for admin for  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:04:35', '2022-04-08 16:04:35'),
('c4e7b6b4-761e-487f-801e-b035e5a58024', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"585\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-13 19:18:49', '2022-06-13 19:18:49'),
('c4ec71e7-0856-4208-854a-7c3502225f80', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"428\",\"msg\":\"A File has been uploaded for admin for  Order ID- 428\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/428\"}', NULL, '2022-04-07 22:44:00', '2022-04-07 22:44:00'),
('c50fd69f-1e29-4017-a498-19c3d6f38d9a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:29:45', '2022-04-28 14:29:45'),
('c5484ced-e5de-4685-9488-ba30ebc3d76d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:11:53', '2022-04-07 00:11:53'),
('c5504978-549f-4c3f-abb1-fb1d419081c9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:42', '2022-03-24 18:16:42'),
('c552bd5a-7adc-4295-98fb-7bc5440c28ea', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:05', '2022-04-27 14:33:05'),
('c5661db4-7548-4454-afc5-0467e91ece69', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"434\",\"msg\":\"A File has been uploaded for admin for  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:01:06', '2022-04-08 15:01:06'),
('c576ce48-83c2-4080-b2d7-b32d8665cb88', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"555\",\"msg\":\"Worker has Claimed on Order ID Order ID- 555\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/555\"}', '0000-00-00 00:00:00', '2022-06-11 15:37:59', '2022-06-11 15:37:59'),
('c5e5aee8-2186-4bb0-b020-79ea9b2e46ca', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"528\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 20:19:46', '2022-05-22 20:19:46'),
('c616fdb0-a798-4bb0-a9b6-356023152d98', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"364\",\"msg\":\"Worker has Claimed on Order ID Order ID- 364\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/364\"}', NULL, '2022-03-25 00:14:15', '2022-03-25 00:14:15'),
('c659fbc8-dd56-407b-ba2d-404b27783ebf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"570\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:28:45', '2022-06-11 16:28:45'),
('c66ea312-55fd-4c74-a2d5-d8a68dae64ae', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:31:15', '2022-04-13 12:31:15'),
('c6bbc9f8-25d5-4a75-8146-d9c8865b7651', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:06:54', '2022-04-13 16:06:54'),
('c72af6a7-3d9d-4418-b06c-db9255d71984', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:26:10', '2022-04-18 12:26:10'),
('c72c8ba4-22fa-4f5b-945d-1e2d1dbb0b25', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"435\",\"msg\":\"A File has been uploaded for admin for  Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/435\"}', NULL, '2022-04-08 15:06:26', '2022-04-08 15:06:26'),
('c741ffe9-b3c7-4ac5-ac38-1da1911f1ddf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"548\",\"msg\":\"Worker has bid on Order ID- 548\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-03 19:58:44', '2022-06-03 19:58:44'),
('c7464e7d-35c6-4a9f-9cc4-160a3ab0af2b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"433\",\"msg\":\"Worker has Claimed on Order ID Order ID- 433\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/433\"}', NULL, '2022-04-08 13:12:58', '2022-04-08 13:12:58'),
('c74b95ee-3b92-45b7-9c35-a40c16519448', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"348\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 348\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-04 11:23:56', '2022-03-04 11:23:56'),
('c75707c2-30dc-4bc8-9fa2-63a86695dfae', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"531\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 01:34:41', '2022-05-29 01:34:41'),
('c77501ca-aee2-4692-aaab-b02a2e897954', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"356\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 356\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 17:51:37', '2022-03-24 17:51:37'),
('c78a4848-f31d-42a0-9143-e5d7d627fee2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"572\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:39:55', '2022-06-11 16:39:55'),
('c79cf9fd-8cbb-4b1c-97c1-99e95c808151', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":523,\"msg\":\"A File Message has been uploaded for Order ID 523\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/523\"}', NULL, '2022-05-22 14:44:15', '2022-05-22 14:44:15'),
('c7a974e9-74d1-4687-842a-5c7bcaf15955', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"368\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:51', '2022-03-25 00:27:51'),
('c7d4daf2-6dfd-47e1-9a39-69a10208eb90', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:55:56', '2022-05-16 19:55:56'),
('c7e8dd83-f00c-433d-851d-e71b440b61f1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:58', '2022-05-10 19:32:58'),
('c7eb9df0-74c3-4ef0-b1fe-39f489b81708', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"545\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:45:30', '2022-06-03 19:45:30'),
('c833cf57-00b2-447c-bb8b-722cf6df264a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:29:03', '2022-04-28 14:29:03'),
('c869f3dd-1b36-4369-abcf-aa96f02b104f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"481\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-23 13:10:21', '2022-04-23 13:10:21'),
('c86c056b-ba4e-4dbc-8062-1781e2f49894', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:34', '2022-05-10 19:32:34'),
('c89dbdf2-2c52-4b29-80a3-54cc25b30c2e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"490\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:12:24', '2022-04-28 14:12:24'),
('c8d27f40-6eb0-4b5b-98a6-2de46df720d6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":504,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-10 19:35:21', '2022-05-10 19:35:21'),
('c8fd2198-2c62-4e45-8196-72ed20960f01', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"440\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 16:32:34', '2022-04-08 16:32:34'),
('c901a76d-9c7c-42c5-a501-dd6fc06823d2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"594\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:40:53', '2022-06-16 19:40:53'),
('c925d847-838a-40ce-9adc-83e70888ac93', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:27', '2022-05-16 19:49:27'),
('c93bc9ad-b0e9-4e6b-b3e6-126a3821a24c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"438\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:13:06', '2022-04-08 15:13:06'),
('c944d57c-e2b6-4422-9bae-3779dd70cf01', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:26:42', '2022-03-04 11:26:42'),
('c94768cf-c2be-4c90-b2c6-07cfe71d2cff', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:59:19', '2022-04-27 13:59:19'),
('c961ace2-6dce-4262-a9d6-13babb0ae029', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"434\",\"msg\":\"Worker has Claimed on Order ID Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 13:37:07', '2022-04-08 13:37:07'),
('c963eecd-4e44-4a4e-9510-6a3f38f07a20', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"506\",\"msg\":\"Worker has bid on Order ID- 506\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-05-13 18:55:50', '2022-05-13 18:55:50'),
('c97fc24e-d3de-46e4-8c16-7a20ed31c74e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"365\",\"msg\":\"Worker has Claimed on Order ID Order ID- 365\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/365\"}', NULL, '2022-03-25 00:12:27', '2022-03-25 00:12:27'),
('c981bea0-8a44-4a96-9969-1c7c672ca21a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:28:41', '2022-04-28 14:28:41'),
('c994fe6b-939f-429f-aa3a-1062b3bf6205', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"418\",\"msg\":\"Worker has Claimed on Order ID Order ID- 418\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/418\"}', NULL, '2022-04-01 14:52:14', '2022-04-01 14:52:14'),
('c9ab5bbb-b2a5-4766-8cc6-afde04ae870a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":445,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-09 16:44:27', '2022-04-09 16:44:27'),
('c9ab857d-d84f-4a98-a823-376baa90d335', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:38', '2022-03-23 13:43:38'),
('c9cfce7e-a370-4229-ac46-895f0794a06e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":586,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-15 14:22:31', '2022-06-15 14:22:31'),
('ca0dd204-72e5-4f65-ba19-b30e16cc2cbf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:43:00', '2022-05-16 19:43:00'),
('ca293f9e-6e2c-4ff3-bbfb-4db27b905161', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"540\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:34:19', '2022-06-03 16:34:19'),
('ca4f8243-6c7f-477d-9f60-55862f6ae9bd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:27:35', '2022-04-28 14:27:35'),
('ca753265-0a01-4809-b9b9-be672dfa2ee6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:04', '2022-04-18 11:50:04'),
('caa19437-e9ac-4769-af95-de637590509b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"445\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 16:43:03', '2022-04-09 16:43:03'),
('cab6f2d8-d5f9-4432-901a-c1b368308825', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"438\",\"msg\":\"Worker has Claimed on Order ID Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:13:07', '2022-04-08 15:13:07'),
('cb1b5e86-71d8-45c9-8e46-6919c8b38998', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:13', '2022-04-28 14:30:13'),
('cb30da8f-9e02-4da4-b5e3-9a9f757cac4d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:00', '2022-04-28 14:11:00'),
('cb41875c-aab6-42d0-9291-485de5605c29', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"350\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 350\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 12:14:54', '2022-03-24 12:14:54'),
('cb6d6b94-aa0a-47b4-8112-c3f999d77e05', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"Worker has Claimed on Order ID Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-05 11:16:49', '2022-04-05 11:16:49'),
('cbb80f50-7a53-4c61-a646-69f5ddf7ec37', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"571\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:33:09', '2022-06-11 16:33:09'),
('cbe0c18b-1940-4161-a3ad-361b9fe0ce22', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:29:59', '2022-05-20 19:29:59'),
('cbe69145-882e-471e-b2f2-7e998190b3b4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:26:16', '2022-03-04 11:26:16'),
('cc02396d-9ba3-4ed1-8f42-3efc7b2b9542', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"364\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:05:26', '2022-03-25 00:05:26'),
('cc41cb00-c6f9-41d2-8407-f451c7f8c95e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:51', '2022-05-20 19:26:51'),
('cc6f8906-faef-43db-9863-014ff3bf6d94', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:24', '2022-05-10 17:28:24'),
('cc73bf63-9fd5-40e4-ac94-aa5a20ac28ef', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"532\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-29 19:02:38', '2022-05-29 19:02:38'),
('cc9ab26a-89d0-4657-a165-f166d08cb6aa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"481\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-23 13:10:04', '2022-04-23 13:10:04'),
('ccb86c04-ccb5-4f31-bb61-89d22e1f6038', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:07:57', '2022-05-20 19:07:57'),
('ccd4970e-cc22-4735-960a-22b5cb1d3fff', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":350,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-03-23 20:01:39', '2022-03-23 20:01:39'),
('cce80317-36c9-4eb4-890d-b8b318138051', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:34', '2022-05-10 19:32:34'),
('ccf52892-8a61-45f2-b456-2f3fd85edb8d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"486\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 13:38:22', '2022-04-28 13:38:22'),
('ccfa4d0f-2cb5-4be5-a0c0-0f820b382408', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:24:39', '2022-04-28 14:24:39'),
('cd55d338-4525-45a8-9624-f4c5f2f5a3ba', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"444\",\"msg\":\"A File has been uploaded for admin for  Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 15:27:39', '2022-04-09 15:27:39'),
('cd57cef7-590c-4e74-a669-e03e531985b6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"424\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 21:55:12', '2022-04-07 21:55:12'),
('cd692a3d-adc5-42b9-9dc3-1232d5f3dcb9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"504\",\"msg\":\"Worker has bid on Order ID- 504\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-05-10 19:34:41', '2022-05-10 19:34:41'),
('cd7e92b9-04d8-486b-84f7-5a33838d101f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"356\",\"msg\":\"A File has been uploaded for admin for  Order ID- 356\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/356\"}', NULL, '2022-03-24 18:14:07', '2022-03-24 18:14:07'),
('cd80a5bb-db4f-409c-b0c2-cf9391b524db', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:55:53', '2022-05-16 19:55:53'),
('cdbd6caf-727e-41fe-b537-ff1e16fb709a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:40', '2022-05-16 19:49:40'),
('cdd31f13-386a-442a-b26b-76e5f46c95b7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"486\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 13:38:29', '2022-04-28 13:38:29'),
('cded4be3-87d4-4e2d-ab71-c5ccf80550fb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:00:19', '2022-04-27 14:00:19'),
('ce442708-21f6-4efb-be88-24ee56af251d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"444\",\"msg\":\"A File has been uploaded for admin for  Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 15:29:17', '2022-04-09 15:29:17'),
('ce4e8f7e-e209-435f-b4c8-1efecd007e01', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:27', '2022-05-16 19:49:27'),
('ce4fdd1f-54eb-40ce-89f9-f363098651b3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:56', '2022-05-20 17:58:56'),
('ce548005-cc5e-4c22-8483-c6c400258af0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"355\",\"msg\":\"A File has been uploaded for admin for  Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/355\"}', NULL, '2022-03-24 17:45:45', '2022-03-24 17:45:45'),
('ce9e8eff-7bb8-4b50-977c-fa75f4171830', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:16:06', '2022-05-16 20:16:06'),
('cec4c3c7-eea7-4bf2-886a-6cd903fbea68', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"436\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:06:20', '2022-04-08 15:06:20'),
('ced85160-6049-44cf-8e1e-89d24c4ac01f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:33:08', '2022-03-24 19:33:08'),
('ced93c98-646d-4f08-807c-c5254ebf7031', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"588\",\"msg\":\"Worker has bid on Order ID- 588\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-15 15:06:09', '2022-06-15 15:06:09'),
('cee2d6f9-1df7-4273-9067-9006daada069', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 17:40:10', '2022-03-24 17:40:10'),
('cef26391-e9c5-414f-a17f-981d9ff859e0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:07:08', '2022-04-13 16:07:08'),
('cf03dd25-1554-428c-9af7-effc2b6e75f2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"360\",\"msg\":\"Worker has Claimed on Order ID Order ID- 360\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/360\"}', NULL, '2022-03-24 19:06:36', '2022-03-24 19:06:36'),
('cf263e2d-5206-48b6-a77e-dfbac26f2a66', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":355,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-03-24 17:33:31', '2022-03-24 17:33:31'),
('cf7c0052-2a25-4722-b852-36922ac16698', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-06 16:50:59', '2022-04-06 16:50:59'),
('cfa1e057-f820-4f6b-93e9-50f704cd6a41', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"367\",\"msg\":\"Worker has Claimed on Order ID Order ID- 367\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/367\"}', NULL, '2022-03-25 00:28:54', '2022-03-25 00:28:54'),
('cfb02645-56b6-4389-a816-23308d881931', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"513\",\"msg\":\"A File has been uploaded for admin for  Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 17:54:45', '2022-05-20 17:54:45'),
('cfb3890a-e4d4-432d-a1ea-7bf43b7633e3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:15:58', '2022-05-16 20:15:58'),
('cfbcd8a9-bef7-42cb-adbb-9eebc46ad8dc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 18:14:25', '2022-05-10 18:14:25'),
('cfe1377e-5e51-4ee7-a5e3-ca66a21b6b7c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:43', '2022-05-10 19:32:43'),
('d010889d-64c8-4692-ada2-2a37b5d78034', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"479\",\"msg\":\"Worker has Claimed on Order ID Order ID- 479\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/479\"}', NULL, '2022-04-21 17:01:17', '2022-04-21 17:01:17'),
('d019f52d-9576-4a32-a9dc-b7b1e4b03b4f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"440\",\"msg\":\"Worker has Claimed on Order ID Order ID- 440\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/440\"}', NULL, '2022-04-08 16:33:38', '2022-04-08 16:33:38'),
('d0352c69-ea47-4716-a827-924f11da53b5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:40', '2022-05-10 17:28:40'),
('d0422407-0d5e-4975-8b44-476263c28347', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"448\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:09:18', '2022-04-11 13:09:18'),
('d07103dd-3bda-4bd0-9044-4019ddc1b2ba', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:13', '2022-03-24 18:17:13'),
('d0734b25-d7ff-420a-8dea-236b40f91cea', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:52', '2022-05-10 19:32:52'),
('d08f2cff-75ea-48e3-9c50-2c2c981f5d6e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"523\",\"msg\":\"A File has been uploaded for admin for  Order ID- 523\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/523\"}', NULL, '2022-05-22 17:00:04', '2022-05-22 17:00:04'),
('d0b11b08-19b3-47cb-a6aa-a45db958a46c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:00:22', '2022-04-27 14:00:22'),
('d1072276-751f-4e99-92ca-3468eef3c9a7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"442\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 13:35:06', '2022-04-09 13:35:06'),
('d14b9046-405c-4137-9d98-5a6fa424a685', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"480\",\"msg\":\"Worker has Claimed on Order ID Order ID- 480\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/480\"}', NULL, '2022-04-25 16:45:40', '2022-04-25 16:45:40'),
('d15e9818-ae27-4cf8-a5b9-32913e906d02', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"434\",\"msg\":\"Order has been  completed  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:01:12', '2022-04-08 15:01:12'),
('d17594ce-4c13-4bc3-b2b0-0f835349de8b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:21', '2022-03-25 00:27:21'),
('d1a99f5c-716a-43d7-a8af-a2b537b6b1b6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:32', '2022-04-28 14:11:32'),
('d1c4567b-68fd-43b4-b828-6c85d56a79c3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:34:30', '2022-04-28 14:34:30'),
('d1e7ed72-f272-4264-98e6-27e82d54e9d9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":552,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-03 20:19:34', '2022-06-03 20:19:34'),
('d1fcd0ee-67b1-48d0-903d-664c2e1e49d6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:25:30', '2022-03-04 11:25:30'),
('d24f8f24-72b2-47fa-b7f8-08e76b1d6dcb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"480\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-22 11:59:06', '2022-04-22 11:59:06'),
('d2ec7893-befb-4c83-9f9e-e5730d002863', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 94, '{\"order_id\":\"381\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-30 19:26:26', '2022-03-30 19:26:26'),
('d2fba252-5c88-46e1-a9c6-698ddb0570c4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"581\",\"msg\":\"Worker has Claimed on Order ID Order ID- 581\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/581\"}', NULL, '2022-06-11 20:53:18', '2022-06-11 20:53:18'),
('d31c507c-77f5-4439-bf5c-347d9c8bc470', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"428\",\"msg\":\"A File has been uploaded for admin for  Order ID- 428\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/428\"}', NULL, '2022-04-07 22:43:46', '2022-04-07 22:43:46'),
('d32544a5-24be-4020-a06b-174d7e9bba7e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:10:56', '2022-03-25 00:10:56'),
('d3507be1-3f8b-4447-8dfa-4a78d8cf89af', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":541,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-03 16:57:58', '2022-06-03 16:57:58'),
('d392b484-351f-4dec-bb48-d9fabd82f0e6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"513\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 20:15:47', '2022-05-16 20:15:47'),
('d396b7cf-8562-4d65-84c4-76617c227b73', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:25:48', '2022-03-04 11:25:48'),
('d398d520-7d86-4023-b225-ad20acda79bf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:44', '2022-03-23 13:43:44'),
('d3e96ca8-bcb0-49b7-ad04-229ffceaef92', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":535,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-31 13:41:52', '2022-05-31 13:41:52'),
('d3fafb34-05b1-42fe-8ce5-cde25483e7ce', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"379\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 379\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-30 19:27:15', '2022-03-30 19:27:15'),
('d4277c93-7110-404d-9d73-2c013a575c95', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"477\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-16 14:43:57', '2022-04-16 14:43:57'),
('d432cd1c-e39f-4c05-a453-7e1a984870e3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:14', '2022-04-18 11:50:14'),
('d435a1b8-66e0-448b-94b2-74f99e7c2467', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:50', '2022-05-10 19:32:50'),
('d4520314-ed88-4a9a-a01d-36654172ebb1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 13:28:07', '2022-03-24 13:28:07'),
('d45f42f0-3341-48b4-bc4b-ea79ea56e41a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"447\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:00:24', '2022-04-11 13:00:24'),
('d461e4ca-f911-4676-b4fe-a4d0cea5f712', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:40:35', '2022-03-24 19:40:35'),
('d465d556-2527-4e4c-b154-9f35fb63541f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:00:28', '2022-04-27 14:00:28'),
('d466e24b-7c1d-4f81-974c-eb424169d588', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"444\",\"msg\":\"A File has been uploaded for admin for  Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 15:45:34', '2022-04-09 15:45:34'),
('d46b9004-b125-4d69-b92a-fc2c0778baef', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"581\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:52:41', '2022-06-11 20:52:41'),
('d4dce2f9-cdb4-4a16-96f4-734df7d00625', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"439\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:37:11', '2022-04-08 15:37:11'),
('d4f0b838-4952-4cef-8771-7c08806afb98', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:25:48', '2022-04-08 15:25:48'),
('d50fb487-4ce7-46f1-b0c9-e7e599f9e7ef', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:26:41', '2022-03-04 11:26:41'),
('d529d54c-505f-4c0e-b07a-976cafebcc7b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"490\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:12:37', '2022-04-28 14:12:37'),
('d540fa07-0172-4483-bbdf-ea928c91888d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":422,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-07 16:49:42', '2022-04-07 16:49:42'),
('d5c28f89-b0e3-47ca-aac0-40196b9f262d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":489,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-28 14:13:08', '2022-04-28 14:13:08'),
('d60b0526-64dd-4f6b-a8f3-7a39690b22eb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"522\",\"msg\":\"Worker has Claimed on Order ID Order ID- 522\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/522\"}', NULL, '2022-05-20 19:43:44', '2022-05-20 19:43:44'),
('d6116c5c-968d-4f73-8352-5afa69141bce', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"347\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-03 18:56:20', '2022-03-03 18:56:20'),
('d6154b85-3e9e-4359-8897-62ba294a6265', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 14:51:52', '2022-04-18 14:51:52'),
('d61c31a1-fe91-45f7-8ffb-69f1e16d01e5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:59:22', '2022-04-27 13:59:22'),
('d63f28d7-bb50-4d01-bf2b-b54691e3752b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"429\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 22:50:12', '2022-04-07 22:50:12'),
('d648f875-8deb-4189-91ec-b7652fa2dc0d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"520\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:07:40', '2022-05-20 19:07:40'),
('d6d7359a-e319-474d-ba6b-3feb21d2c569', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"494\",\"msg\":\"Worker has bid on Order ID- 494\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:30:15', '2022-04-28 14:30:15'),
('d6f054eb-6a5f-463d-93fa-63a8db75aeb6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:26:55', '2022-03-25 00:26:55'),
('d701c2a4-49e6-434f-b22d-cb4414ea3608', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:45', '2022-05-20 17:58:45'),
('d70356c8-4663-4bb1-bd19-a39cc7c58bed', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:42:48', '2022-05-16 19:42:48'),
('d7087b90-82ee-48ee-849c-65da70b97a4b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:55', '2022-05-10 19:32:55'),
('d717a87b-8178-4ff6-9781-c81ae82081f7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":435,\"msg\":\"A File Message has been uploaded for Order ID 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/435\"}', NULL, '2022-04-08 15:10:15', '2022-04-08 15:10:15'),
('d718739e-78f7-4d7b-8fd7-9e18ce5a99ad', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"433\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:11:58', '2022-04-08 13:11:58'),
('d726fec4-96ac-41dd-8b75-cfb9bdb22477', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"432\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:07:50', '2022-04-08 13:07:50'),
('d73b7127-815f-4ccf-850a-b5b36e29d3d6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:49', '2022-05-10 19:32:49'),
('d7b1669c-96c8-40b6-861f-80cbcd5543eb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-04 15:42:32', '2022-04-04 15:42:32'),
('d7be61a8-04ed-488b-92c8-1ff27ced542d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:50:28', '2022-04-18 12:50:28'),
('d87f1911-a201-4172-9ab6-5f72b8f77969', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 11:55:21', '2022-04-07 11:55:21'),
('d8e48176-68ad-40f0-83a2-c3fb91914c95', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:52', '2022-05-10 19:32:52'),
('d90e4848-130e-4478-9aa9-1d64fcdfb9da', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"435\",\"msg\":\"Worker has Claimed on Order ID Order ID- 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/435\"}', NULL, '2022-04-08 15:04:32', '2022-04-08 15:04:32'),
('d92ca0aa-cccd-4a92-823c-e5d6fda29bfa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"359\",\"msg\":\"Worker has Claimed on Order ID Order ID- 359\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/359\"}', NULL, '2022-03-24 18:18:51', '2022-03-24 18:18:51'),
('d9365af5-0119-4d76-a208-20fd3132734e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:14', '2022-05-16 19:56:14');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('d94cda47-7562-4a98-8cf6-a951b1974076', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:32', '2022-05-20 17:58:32'),
('d968f628-18c0-47fd-b3f8-8ad75bdcfadc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:01', '2022-03-25 00:27:01'),
('d97a4790-c272-4092-9038-d82206359342', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"444\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 14:50:51', '2022-04-09 14:50:51'),
('d97cacaa-94ee-4b7b-8673-1488dfd8b821', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:32:09', '2022-03-24 19:32:09'),
('d9daa864-8677-4449-a288-afa0c77e9833', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"418\",\"msg\":\"Worker has Claimed on Order ID Order ID- 418\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/418\"}', NULL, '2022-04-01 14:52:08', '2022-04-01 14:52:08'),
('d9e0e1d7-7521-42a3-99b0-bc75d65c00db', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"439\",\"msg\":\"Worker has Claimed on Order ID Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:09:35', '2022-04-08 16:09:35'),
('d9e97a39-e16b-4f3d-b215-b1e07980cdd8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:20', '2022-05-10 17:28:20'),
('d9fc5bf1-da9a-4d3b-9762-d8e85b7638d2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:32:30', '2022-04-27 14:32:30'),
('da3b697b-eede-47fa-8eaf-33ed7f2e148e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"545\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:45:33', '2022-06-03 19:45:33'),
('da6fa118-8ebe-49dd-ba30-1fb88d831270', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":435,\"msg\":\"A File Message has been uploaded for Order ID 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/435\"}', NULL, '2022-04-08 15:10:39', '2022-04-08 15:10:39'),
('da93f2d0-779e-4870-adcc-6b4ceb80cf00', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":355,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-03-24 13:02:31', '2022-03-24 13:02:31'),
('da9f17df-87d6-4029-8a65-d60352cdb107', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:44', '2022-05-20 17:58:44'),
('daaeadf0-2813-4c6c-82f3-71c97989618d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:10:59', '2022-03-25 00:10:59'),
('dab7d9c9-210c-471d-bba1-09d2973a9034', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"451\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:32:51', '2022-04-12 14:32:51'),
('dad4ae44-f56d-4a41-a615-35bcfb647687', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:30:54', '2022-04-13 12:30:54'),
('dae3a989-896c-4d95-bae2-a7088df340cb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"477\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-16 14:44:00', '2022-04-16 14:44:00'),
('daec5097-7ab6-4f6a-99d0-5d8eea1dcd4e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"452\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:56:46', '2022-04-12 14:56:46'),
('dafbb2d7-9728-4bd5-812d-115e85932079', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:41:14', '2022-04-12 23:41:14'),
('db261bcf-6a5f-444b-a0d1-86bf162c1835', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"591\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:26:35', '2022-06-16 19:26:35'),
('db4617e3-9d75-4e59-a620-181cf14a6817', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":353,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-03-23 13:44:20', '2022-03-23 13:44:20'),
('db74c6de-6695-46e6-bfab-bbc80a711380', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"439\",\"msg\":\"A File has been uploaded for admin for  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:04:38', '2022-04-08 16:04:38'),
('db77e2d1-ad7d-44b1-bfba-cdaea9831f51', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:55', '2022-05-16 19:57:55'),
('dba6534b-d13d-435d-8bbd-b472f9f7ea52', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":574,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-11 20:31:03', '2022-06-11 20:31:03'),
('dbb6a45f-bf8c-4ca2-8f5b-9b8c5aad238e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":592,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-16 19:35:57', '2022-06-16 19:35:57'),
('dbbac692-2e1a-4a6e-b483-00cd70502d19', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:38', '2022-05-20 19:26:38'),
('dbdabce9-fc06-46ed-87be-a48484a07a4f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"418\",\"msg\":\"Worker has Claimed on Order ID Order ID- 418\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/418\"}', NULL, '2022-04-01 14:52:11', '2022-04-01 14:52:11'),
('dbf1dbf1-b79e-401f-82c6-acb3dee18425', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:42', '2022-05-20 17:58:42'),
('dc5868e1-5e7f-44a7-a76e-ff9e27a055f9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:18', '2022-05-16 19:56:18'),
('dc73659e-8ab8-426a-a2e2-3af811327981', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"597\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 11:58:28', '2022-09-12 11:58:28'),
('dc9453fb-abd1-4c6d-ae2c-54725b9938ae', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:23', '2022-05-16 19:58:23'),
('dc9b3319-ce62-401f-a4ea-30b8d3c7b15d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:12', '2022-05-20 17:57:12'),
('dce3029b-fe47-4363-b74e-ad2511979612', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:25:08', '2022-04-28 14:25:08'),
('dcfe750f-1261-4641-97a2-cbb19f82f371', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:41:28', '2022-04-12 23:41:28'),
('dd0a81e9-0e23-49fb-b72b-2fc5ac21fadc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"589\",\"msg\":\"Worker has Claimed on Order ID Order ID- 589\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/589\"}', NULL, '2022-06-15 16:45:21', '2022-06-15 16:45:21'),
('dd6abdd2-ad8a-43b3-9eb5-7bae194ac03d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"368\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:48', '2022-03-25 00:27:48'),
('dd6db210-f393-456d-a4ed-cad5288d4af8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"439\",\"msg\":\"Order has been  completed  Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:25:37', '2022-04-08 16:25:37'),
('dd816a94-8b85-4615-a879-baeb037a909a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:12:50', '2022-04-07 00:12:50'),
('ddb1ed88-069e-4064-bbae-68d06b98daa5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:06:47', '2022-04-13 16:06:47'),
('ddbedb63-f896-409a-b5bd-7940f60ef086', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"452\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:56:28', '2022-04-12 14:56:28'),
('ddd634b9-6748-4357-b1a4-04104a44a36c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"591\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:26:33', '2022-06-16 19:26:33'),
('de1afc27-e4ef-40ad-82e7-105adb0c961e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"367\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:27:04', '2022-03-25 00:27:04'),
('de2e3fe5-da13-4a4f-b067-23546a7bf34c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"360\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:29:14', '2022-03-24 18:29:14'),
('de9d4250-6bc9-4552-add2-24b8c23bfece', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"438\",\"msg\":\"Worker has Claimed on Order ID Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:14:31', '2022-04-08 15:14:31'),
('dedcee3f-f6b6-4ea9-8b2b-afce5da124c1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:29', '2022-03-23 13:43:29'),
('df069865-b1f6-4a3e-bf71-81d9d707192a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"492\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:27:53', '2022-04-28 14:27:53'),
('df406c3b-cfe4-4db9-a35c-cb3e27099289', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":598,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-09-12 12:05:29', '2022-09-12 12:05:29'),
('df50a78f-3098-4e8c-95d8-be20e6bd3e10', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"455\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 12:30:41', '2022-04-13 12:30:41'),
('df7ad850-401c-4231-8308-76cbb96af779', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 114, '{\"order_id\":590,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-16 18:51:49', '2022-06-16 18:51:49'),
('dfe852ae-7841-4f5e-9138-33275437abb9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"363\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:00:39', '2022-03-25 00:00:39'),
('dfec7dd6-ecee-4195-9f84-c9c71c3c675a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"439\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:37:21', '2022-04-08 15:37:21'),
('dfeca9e0-2a18-4007-986a-3a06934eba26', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:16', '2022-05-20 17:57:16'),
('e0197f54-1169-49a6-bb24-2b29b78e18aa', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"509\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:43:00', '2022-05-16 19:43:00'),
('e0ae24de-9557-4bee-b853-948fc295fd27', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:49:38', '2022-04-18 11:49:38'),
('e0e8836e-1852-48cc-b8b8-cf9e95b213ce', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"573\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 17:54:26', '2022-06-11 17:54:26'),
('e11037e8-976e-4945-b816-b8011ab036f5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:51', '2022-05-10 19:32:51'),
('e15654d0-df09-4336-a9d6-1d2e8d6fef43', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"538\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:21:25', '2022-06-03 16:21:25'),
('e1581ff9-dc04-40c7-945c-2452b2cae79d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:29:39', '2022-04-28 14:29:39'),
('e1611fa9-554e-40f8-b994-5789ef273c9b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"422\",\"msg\":\"Worker has Claimed on Order ID Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 22:13:58', '2022-04-07 22:13:58'),
('e161613c-a505-4c63-85a1-8cfdb3a24fe3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"585\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-13 19:18:48', '2022-06-13 19:18:48'),
('e16b9361-099c-489d-afc4-d127315ee662', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":478,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 16:04:05', '2022-04-18 16:04:05'),
('e16e5038-1d8d-45af-ab37-c380d915b1cc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:30', '2022-05-20 17:58:30'),
('e17990f9-c03f-4cf9-a60c-4a7924c8daa8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"510\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:49:01', '2022-05-16 19:49:01'),
('e1bbe4c0-50b5-42e8-8d5f-eb69af1bb9b4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"588\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-15 15:05:21', '2022-06-15 15:05:21'),
('e1c7db36-6950-4aa6-9b7d-4be8c69e334a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:14:58', '2022-04-18 16:14:58'),
('e1f28493-a263-4314-a2b6-28c062733a51', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"445\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 16:43:27', '2022-04-09 16:43:27'),
('e205df77-b233-4108-839f-0bccafad47d8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:50:34', '2022-04-18 11:50:34'),
('e239f456-227c-4d2b-b78f-b133a1e93191', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"362\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 19:14:32', '2022-03-24 19:14:32'),
('e2585000-36cb-43af-8e96-a054f9630ba3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"477\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-16 14:44:12', '2022-04-16 14:44:12'),
('e2646dff-f9e4-44a9-b5e7-c3949f6793a3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"452\",\"msg\":\"A File has been uploaded for admin for  Order ID- 452\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/452\"}', NULL, '2022-04-13 12:29:37', '2022-04-13 12:29:37'),
('e2853559-ee2e-453f-a0a6-fe985f0a7f45', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:08:57', '2022-04-07 00:08:57'),
('e2a986b2-25ad-4bff-9a5f-aa15d48414d7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:24:29', '2022-04-28 14:24:29'),
('e2aea2d4-8d7a-47aa-8ab9-dc5895b8709c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"440\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 16:32:40', '2022-04-08 16:32:40'),
('e308693c-9476-4e47-90bd-5a446a0ec8f2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:26:07', '2022-04-18 12:26:07'),
('e308ed8d-ab4f-44c7-a153-1edcaf3c840a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"434\",\"msg\":\"Order has been  completed  Order ID- 434\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/434\"}', NULL, '2022-04-08 15:01:17', '2022-04-08 15:01:17'),
('e3663a9f-1e16-47c6-9239-ec4f1a68d2e5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"594\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:40:52', '2022-06-16 19:40:52'),
('e3765678-a4ad-4281-aac9-7a9a7b681b25', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"439\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:37:29', '2022-04-08 15:37:29'),
('e37df168-e6e4-4dee-bda0-7108ba889b09', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"426\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 22:34:26', '2022-04-07 22:34:26'),
('e3a7d960-476c-4b55-ba21-7233c56f0ef8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"426\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 426\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-07 22:36:25', '2022-04-07 22:36:25'),
('e3b7ac10-d52b-4717-9c1e-85e9416a9eee', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 11:47:55', '2022-04-18 11:47:55'),
('e3d1c61f-37b1-4db6-81ee-9b9337b818e4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:54', '2022-05-20 17:58:54'),
('e3ecaa9a-10f6-4394-8a42-42e8107893e0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 14:47:30', '2022-04-18 14:47:30'),
('e4030b38-fb9a-4c14-87c1-e3bbf0ba7dbe', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"426\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 426\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-07 22:36:28', '2022-04-07 22:36:28'),
('e4176840-ca16-4107-87bd-84a5ad7cc245', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:19', '2022-03-24 18:17:19'),
('e423fba6-add5-4f42-b07d-0a6cc4bdbb05', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:50:22', '2022-04-09 17:50:22'),
('e42c3a25-9574-47d3-b5db-399b4270801a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:25:05', '2022-04-28 14:25:05'),
('e42cd2d3-8bb2-4127-ad28-e98eb35d2082', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:09', '2022-05-20 17:57:09'),
('e433b170-741a-4537-90ef-30a9e6dedc8e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:35:06', '2022-04-28 14:35:06'),
('e46625ce-542b-48d4-86a0-71648f65dc2a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"Worker has Claimed on Order ID Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-04 15:41:35', '2022-04-04 15:41:35'),
('e4b26c27-7bc6-464b-bcae-0b9f81910b69', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"494\",\"msg\":\"Worker has bid on Order ID- 494\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:30:09', '2022-04-28 14:30:09'),
('e4f88e3b-49f3-440f-9de1-0b56dfa61835', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"422\",\"msg\":\"Worker has Claimed on Order ID Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 16:49:55', '2022-04-07 16:49:55'),
('e5065926-ee74-4438-9735-afc0c8127758', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":572,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-11 17:09:55', '2022-06-11 17:09:55'),
('e50a52b1-7fe9-4a63-9d93-c94c81dd30be', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"445\",\"msg\":\"A File has been uploaded for admin for  Order ID- 445\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/445\"}', NULL, '2022-04-09 16:50:27', '2022-04-09 16:50:27'),
('e50edade-9a13-49e3-891f-5a91e3f39df1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:29:54', '2022-04-28 14:29:54'),
('e51b9830-3342-4037-989c-6c7de2784ef4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"433\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:12:01', '2022-04-08 13:12:01'),
('e5351c96-9040-42bf-a6fa-0a8b5346d187', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:11:05', '2022-03-25 00:11:05'),
('e54ad592-717c-41e4-83e7-5ec3b519ccf8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"451\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 451\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', '0000-00-00 00:00:00', '2022-04-12 14:40:39', '2022-04-12 14:40:39'),
('e5b34660-45d5-495c-8d3e-b73b4016884c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"571\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:33:02', '2022-06-11 16:33:02'),
('e5bbb8f9-558e-477d-929e-89604bd1cd9d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"580\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:47:39', '2022-06-11 20:47:39'),
('e5db94a5-755d-4907-8b3a-fc8c9080b29a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:49', '2022-05-16 19:57:49'),
('e60fae9e-0742-4d20-87b0-6f9ac936d74c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"490\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:12:06', '2022-04-28 14:12:06'),
('e629e89e-7c58-4818-ad34-7cc47a24485a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"491\",\"msg\":\"Worker has bid on Order ID- 491\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-28 14:24:14', '2022-04-28 14:24:14'),
('e6510cd5-b562-4ac0-81b6-a5e98a314207', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 14:18:12', '2022-03-24 14:18:12'),
('e6e94d62-4d32-4b77-8f4c-f9c79f9e5f3b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:05', '2022-05-16 19:58:05'),
('e6fa7098-8479-4a54-a775-e7fdfe315e29', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:04:08', '2022-04-18 16:04:08'),
('e7025d70-629d-40a1-b148-4591ff839ae0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:10', '2022-05-20 17:57:10'),
('e70491a1-4388-42ce-a8c3-aad8bad9a526', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"490\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:12:26', '2022-04-28 14:12:26'),
('e71e2dc7-442d-46ab-860b-7b1b2d0cf772', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":435,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-08 15:08:00', '2022-04-08 15:08:00'),
('e72eb1cf-019b-4fdd-9138-682eb1b2f200', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"505\",\"msg\":\"Worker has bid on Order ID- 505\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-05-10 23:46:10', '2022-05-10 23:46:10'),
('e757414b-160d-4395-8dbe-2feaeac278f6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"574\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:29:18', '2022-06-11 20:29:18'),
('e7644e00-6f95-4210-81e5-9f56e04079ae', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"511\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:56:37', '2022-05-16 19:56:37'),
('e7736f9a-5dc7-4e19-9a2e-e5997c4cd634', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"359\",\"msg\":\"Worker has Claimed on Order ID Order ID- 359\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/359\"}', NULL, '2022-03-24 18:19:04', '2022-03-24 18:19:04'),
('e7978c34-c418-4437-9937-00f998cda161', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"452\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:56:37', '2022-04-12 14:56:37'),
('e799f30d-8b9e-48f2-a659-460e2cf00175', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"513\",\"msg\":\"A File has been uploaded for admin for  Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 17:54:44', '2022-05-20 17:54:44'),
('e7a0cc2b-7ab4-4329-981a-469c44202cc5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"522\",\"msg\":\"A File has been uploaded for admin for  Order ID- 522\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/522\"}', NULL, '2022-05-20 19:46:50', '2022-05-20 19:46:50'),
('e7a5354d-5207-41b1-b88f-8c1dae1a9638', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:40:41', '2022-03-24 19:40:41'),
('e7ae59ee-cc9b-4243-8289-bdb7ebbe5208', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:58:40', '2022-04-27 13:58:40'),
('e7b31541-caad-4518-a46a-f14b15735822', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"571\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:33:00', '2022-06-11 16:33:00'),
('e7bf847c-a498-465c-b652-8eed6154db12', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 112, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:53', '2022-05-20 17:58:53'),
('e7e5bd04-8489-485c-89f0-03f86c349601', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 13:13:53', '2022-04-18 13:13:53'),
('e80aecce-a2ed-4713-a8ba-8c671136745a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"364\",\"msg\":\"A File has been uploaded for admin for  Order ID- 364\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/364\"}', NULL, '2022-03-25 00:07:46', '2022-03-25 00:07:46'),
('e8177347-e98a-495d-9268-df6f86b5ad38', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"507\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 507\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-05-16 18:43:38', '2022-05-16 18:43:38'),
('e8a29de5-c41a-4094-a544-867becafc185', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"528\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 20:19:45', '2022-05-22 20:19:45'),
('e8a925ba-dcd8-4caf-90b9-ed6d0e20ff13', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"419\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-01 18:00:13', '2022-04-01 18:00:13'),
('e8af018a-0364-4fb3-b66f-e4188ca20757', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"533\",\"msg\":\"Worker has bid on Order ID- 533\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-05-29 20:39:16', '2022-05-29 20:39:16'),
('e8cdb7fe-cd2a-40f8-ad20-1e9c5c8922c0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:21', '2022-04-28 14:30:21'),
('e8dd8a33-5a35-4390-9028-8dc9b4c2132f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"438\",\"msg\":\"Order has been  completed  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 16:00:44', '2022-04-08 16:00:44'),
('e8f2ebea-a415-4548-816c-b513d7b64efb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"435\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:03:05', '2022-04-08 15:03:05'),
('e90cb398-2fc9-4de9-86fb-6f3f44f2d917', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 77, '{\"order_id\":348,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-03-04 11:24:17', '2022-03-04 11:24:17'),
('e93bf47f-f825-4b1f-b578-81c788b38b8b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"527\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 19:37:03', '2022-05-22 19:37:03'),
('e9abe2b7-3d3f-4ac8-8bd8-33a0026c193a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:07', '2022-04-28 14:11:07'),
('e9b6dbf4-795b-4772-805f-b1748a6daa48', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"367\",\"msg\":\"Worker has Claimed on Order ID Order ID- 367\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/367\"}', NULL, '2022-03-25 00:29:04', '2022-03-25 00:29:04'),
('e9c94a13-af00-41dd-bf1f-2b5174c6bb65', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:30:29', '2022-05-10 17:30:29'),
('e9e39a31-2a31-4260-b4d1-02110456c88c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:36', '2022-04-28 14:30:36'),
('ea37bc4d-24c1-42e6-a49b-38aa8b38a3df', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"448\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:09:42', '2022-04-11 13:09:42'),
('ea3d3f03-7643-4d11-8cb9-1282bb407156', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:11', '2022-05-20 17:57:11'),
('ea7ef88b-40cc-49b9-af09-8403235abe34', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-24 17:31:35', '2022-03-24 17:31:35'),
('ea8de5b4-84eb-49cc-a2fd-60f7b7137f50', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"486\",\"msg\":\"Worker has Claimed on Order ID Order ID- 486\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/486\"}', NULL, '2022-04-28 13:39:11', '2022-04-28 13:39:11'),
('eb07294e-214d-4c99-a19e-8d5fdc7a9ff8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"434\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:36:17', '2022-04-08 13:36:17'),
('eb465490-27e3-49f1-bff6-b7f5a710c2d1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":594,\"msg\":\"A new Message has been posted for Order ID- 594\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/594\"}', '0000-00-00 00:00:00', '2022-06-22 15:30:31', '2022-06-22 15:30:31'),
('eb7f0e5e-1403-4950-af78-3c96a7a1374c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:18', '2022-05-10 17:28:18'),
('eb9acbe5-5c13-4b1c-b500-cdfa5558519d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":574,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-11 20:36:06', '2022-06-11 20:36:06'),
('eb9c8a65-8c81-4291-95c2-7a620fba0dd6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"445\",\"msg\":\"Your Deadline Request has been Accepted\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/445\"}', NULL, '2022-04-09 16:47:21', '2022-04-09 16:47:21'),
('eba2b59b-9b14-4e04-8cf3-6e39b25551c4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"442\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 442\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 13:35:55', '2022-04-09 13:35:55'),
('eba57859-601d-4ac6-9e34-cc0e4e18ad6c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"350\",\"msg\":\"Worker has Claimed on Order ID Order ID- 350\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/350\"}', NULL, '2022-03-23 20:01:46', '2022-03-23 20:01:46'),
('ebf1a845-958e-4809-a888-aec2ec9bf64f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"365\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:10:30', '2022-03-25 00:10:30'),
('ec046b79-2f73-47eb-abdc-933f26a6f6bb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"481\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-23 13:09:52', '2022-04-23 13:09:52'),
('ec67026a-05b0-479d-801c-73b309b5a539', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"454\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 23:41:02', '2022-04-12 23:41:02'),
('ec967414-c372-4eea-909d-088ac7cd5b55', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"429\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 429\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-07 22:55:28', '2022-04-07 22:55:28'),
('eccfebdb-fd97-4cbe-8d2b-8f26efb29af6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"577\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:44:45', '2022-06-11 20:44:45'),
('ecdc4843-dbca-404b-a1f0-6c0169d84da6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":435,\"msg\":\"A File Message has been uploaded for Order ID 435\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/435\"}', NULL, '2022-04-08 15:10:32', '2022-04-08 15:10:32'),
('ece03ef9-1eaa-48bb-8478-c9503e7a733e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"486\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 13:38:32', '2022-04-28 13:38:32'),
('ece20334-8181-402f-ad70-8be1c2bb70c1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"444\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 15:32:48', '2022-04-09 15:32:48'),
('ecff4519-baca-4b8c-83cc-eaa8ddaf3e4f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"364\",\"msg\":\"Worker has Claimed on Order ID Order ID- 364\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/364\"}', NULL, '2022-03-25 00:07:02', '2022-03-25 00:07:02'),
('ed2227eb-1a9c-4a9d-a782-9c1946956580', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"451\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:33:13', '2022-04-12 14:33:13'),
('ed92761e-0262-46d8-b11c-2f6af58863c3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"454\",\"msg\":\"Worker has bid on Order ID- 454\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-04-12 23:41:56', '2022-04-12 23:41:56'),
('edb1a825-f4f5-41fd-81e5-4128b916404b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:16:27', '2022-03-24 18:16:27'),
('edd54320-9eae-4baf-b351-8f6706b01773', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":477,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-18 13:04:19', '2022-04-18 13:04:19'),
('ee0539ac-b785-480f-9568-904894e489ca', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:30:02', '2022-05-20 19:30:02'),
('ee0f47cc-9297-41b5-b7e9-a732470d2af0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:33:02', '2022-04-27 14:33:02'),
('ee3d38b9-14f0-4be6-96e6-11aba566822b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"360\",\"msg\":\"Worker has Claimed on Order ID Order ID- 360\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/360\"}', NULL, '2022-03-24 19:06:55', '2022-03-24 19:06:55');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('ee56649c-b1c5-4130-8f51-c72cdc832708', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:06:13', '2022-04-13 16:06:13'),
('ee64d717-1316-415a-833e-1c22f1fd6f75', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:06:16', '2022-04-13 16:06:16'),
('ee78d6dc-6a57-4476-98c8-d2a61e024ec9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"356\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 17:22:49', '2022-03-24 17:22:49'),
('eecd8d42-4233-432d-9a1d-659c51ed287f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:16', '2022-05-10 17:28:16'),
('ef125341-e147-44ae-b3c5-96896cc1e34d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"435\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:03:36', '2022-04-08 15:03:36'),
('ef25aab4-083e-4925-a714-61f828d06c53', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"588\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-15 15:05:20', '2022-06-15 15:05:20'),
('ef3c883b-458e-4c44-a030-a054d9eb811e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"444\",\"msg\":\"A File has been uploaded for admin for  Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 15:29:06', '2022-04-09 15:29:06'),
('ef62ed83-0969-4968-bc7c-78dd4302ba78', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"489\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:11:24', '2022-04-28 14:11:24'),
('ef865550-fcc5-4888-85e0-5c9c36cb88f1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"486\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 13:39:04', '2022-04-28 13:39:04'),
('efc7c39a-f2c3-49a8-b47c-8a15e0c87de2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"438\",\"msg\":\"Order has been  completed  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:25:57', '2022-04-08 15:25:57'),
('efd83a16-034a-462b-948d-302260cb3f5f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"442\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 442\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 13:35:44', '2022-04-09 13:35:44'),
('efedc1df-05e0-4792-b97e-4fec1f48122e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"495\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:34:44', '2022-04-28 14:34:44'),
('effbf3a3-b724-45c8-8a4e-558ecbac4f0f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":446,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-09 17:52:14', '2022-04-09 17:52:14'),
('f00ddf82-5b42-4929-976c-7f46615ec182', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":440,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-09 14:08:04', '2022-04-09 14:08:04'),
('f036853a-550b-435a-a082-5f5ddac241a7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"355\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 12:59:49', '2022-03-24 12:59:49'),
('f049a35c-0c48-4905-aeae-b13819d3286a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"438\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:13:09', '2022-04-08 15:13:09'),
('f06014e9-67b9-4685-9482-f1a41d129724', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"575\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:37:03', '2022-06-11 20:37:03'),
('f06684d9-71c3-402e-ae8d-1a28d8ce98ce', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"Order has been  completed  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:15:13', '2022-04-18 16:15:13'),
('f0c921d2-61ac-4ab2-813e-0b86b8c9f3d0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"444\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 14:50:36', '2022-04-09 14:50:36'),
('f1124671-9e63-48a0-a9b4-678b04d812bb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"593\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:38:30', '2022-06-16 19:38:30'),
('f1320f29-a9bc-411b-97ca-127545751c96', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"421\",\"msg\":\"A File has been uploaded for admin for  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-06 16:51:02', '2022-04-06 16:51:02'),
('f1339ff1-dfb2-4cbf-a713-acd27790d49f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"348\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-03 18:57:56', '2022-03-03 18:57:56'),
('f13be4a3-3328-49dc-b0f4-776e77261618', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"477\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-16 14:44:40', '2022-04-16 14:44:40'),
('f14e6363-c74a-4a94-b2ed-5dd986bf5460', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"425\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-07 21:56:53', '2022-04-07 21:56:53'),
('f1559af4-dade-4350-833d-6e14424c908f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"551\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 20:16:53', '2022-06-03 20:16:53'),
('f158defc-7176-4a6c-b379-513665c5277e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 116, '{\"order_id\":\"541\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 16:47:49', '2022-06-03 16:47:49'),
('f17619b7-6c8e-4d21-b986-bbf7d3c48c4b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"440\",\"msg\":\"Worker has Claimed on Order ID Order ID- 440\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/440\"}', NULL, '2022-04-08 16:33:41', '2022-04-08 16:33:41'),
('f1a57ad7-2cdc-497d-a1ba-7104f4db5c81', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"491\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:24:49', '2022-04-28 14:24:49'),
('f1ae8714-6cd8-48e2-9466-4666cc718871', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"578\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:45:06', '2022-06-11 20:45:06'),
('f1e89da9-bdff-4afe-ae2d-88d0c4a9c7f2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":587,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-15 14:21:27', '2022-06-15 14:21:27'),
('f2646a60-c5b7-4fd1-82a5-cbd1e8704cba', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":434,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-04-08 15:00:00', '2022-04-08 15:00:00'),
('f27c47ec-3d89-44bf-ac59-5aaa8df9229e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:37', '2022-05-10 19:32:37'),
('f289d479-bd61-460a-9c91-9d8c326fc184', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 84, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 13:58:29', '2022-04-27 13:58:29'),
('f298e915-f734-4439-a400-acaebeabeb42', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"360\",\"msg\":\"Worker has Claimed on Order ID Order ID- 360\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/360\"}', NULL, '2022-03-24 19:05:58', '2022-03-24 19:05:58'),
('f2a37892-fefa-4539-b304-23d9f92273ab', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":585,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-13 19:19:47', '2022-06-13 19:19:47'),
('f2ba40dd-24ef-428d-9441-ac7264a69540', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"576\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:44:20', '2022-06-11 20:44:20'),
('f2efe413-07f6-47d9-af22-0bcaf6398e7d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"361\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 19:17:12', '2022-03-24 19:17:12'),
('f2f2a0ec-b045-497a-9586-7b4d1e741cb8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"Order has been  completed  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 16:05:32', '2022-04-18 16:05:32'),
('f3051095-17ca-4cb8-b529-0658f669c872', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"580\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:47:40', '2022-06-11 20:47:40'),
('f30b3ef9-c599-405b-bf3c-59e0b0cfca07', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"448\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', '0000-00-00 00:00:00', '2022-04-11 13:09:15', '2022-04-11 13:09:15'),
('f310a684-461e-4cb3-a12e-94f3f68c8c4c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"359\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-24 18:17:22', '2022-03-24 18:17:22'),
('f366bb4c-3cc8-4b86-8d56-cedef11c05e7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:54', '2022-05-20 17:58:54'),
('f3a57dcb-a3f0-4589-a095-7295f7b59a90', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:59:02', '2022-05-20 17:59:02'),
('f3b5bebd-e82f-4874-b1d2-20949c1d6ffd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"448\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-11 13:09:39', '2022-04-11 13:09:39'),
('f3b8f4cf-6a3b-4f4a-a23d-08e3242a865c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"587\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-14 20:00:43', '2022-06-14 20:00:43'),
('f407bc42-76de-4f0a-a043-06b1ccb15374', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"421\",\"msg\":\"Order has been  completed  Order ID- 421\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/421\"}', NULL, '2022-04-07 00:09:07', '2022-04-07 00:09:07'),
('f40a25cf-3416-4835-b751-13ec5bd77ab6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:50', '2022-03-23 13:43:50'),
('f40c8e66-1dbe-4041-8873-45de3517ddf9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"598\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 12:04:44', '2022-09-12 12:04:44'),
('f46e4ff0-3769-4b2f-9ffa-742919b0aa4c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"348\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-03 18:57:59', '2022-03-03 18:57:59'),
('f4a8ece4-a018-4c37-8d5b-5511071aff4b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"591\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 19:26:33', '2022-06-16 19:26:33'),
('f4ee38c2-b485-4e47-a6e1-1d4fe25d521f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:30:39', '2022-03-24 19:30:39'),
('f51e2d15-0340-47b5-b787-83c454d6ff3e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"477\",\"msg\":\"Worker has Claimed on Order ID Order ID- 477\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/477\"}', NULL, '2022-04-18 12:50:22', '2022-04-18 12:50:22'),
('f523c4b4-1850-485c-9b0b-e4387be06e2e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"364\",\"msg\":\"Worker has Claimed on Order ID Order ID- 364\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/364\"}', NULL, '2022-03-25 00:14:09', '2022-03-25 00:14:09'),
('f5ca07a0-d134-4319-a631-0f3f5be8e5ce', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"419\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-01 18:00:16', '2022-04-01 18:00:16'),
('f5eed6a7-69d9-481e-ab10-e286de32bf4a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:16', '2022-05-10 17:28:16'),
('f68e57c7-8988-4de1-8632-596bac54c56c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":555,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-11 15:37:58', '2022-06-11 15:37:58'),
('f6933e29-78ff-423e-9c51-ad22710999c5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"577\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 20:44:46', '2022-06-11 20:44:46'),
('f697c607-b072-4b1c-a4c7-601f9022821b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"590\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 18:07:38', '2022-06-16 18:07:38'),
('f6d87bd0-8d13-453a-b5a6-7fae01a76cc9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"440\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 16:32:23', '2022-04-08 16:32:23'),
('f72077df-327a-481e-9c9e-94eb1dcb4c32', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"436\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:05:52', '2022-04-08 15:05:52'),
('f737b6b4-295e-4930-8824-af1436e3f84a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":594,\"msg\":\"A new Message has been posted for Order ID- 594\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/594\"}', NULL, '2022-06-23 16:51:46', '2022-06-23 16:51:46'),
('f7b30730-5fee-46a2-9c60-7d4699c308d3', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"590\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-16 18:07:37', '2022-06-16 18:07:37'),
('f7b43f41-7902-4cb0-bfb7-ff2f9793f4c2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"481\",\"msg\":\"Worker has Claimed on Order ID Order ID- 481\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/481\"}', NULL, '2022-04-23 13:10:14', '2022-04-23 13:10:14'),
('f7b987d5-8c11-4832-8a23-e259faf73585', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:31', '2022-05-20 17:58:31'),
('f7f0ff0b-e314-4b0c-ab11-bc6f42e0cdbb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:07:14', '2022-04-13 16:07:14'),
('f7f7e4d9-5fce-4eeb-aa38-fba9dc4ebd04', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:29', '2022-05-20 17:58:29'),
('f834bda8-b792-4f62-ab25-0fe4f96a6d01', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"422\",\"msg\":\"Worker has Claimed on Order ID Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 16:44:09', '2022-04-07 16:44:09'),
('f89eefa0-0fd9-41c3-911c-9841dfff7ce9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"589\",\"msg\":\"Worker has bid on Order ID- 589\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-15 15:17:22', '2022-06-15 15:17:22'),
('f8ad4ae2-7fe2-407e-98fe-7e332c2a5f21', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"527\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-22 19:37:03', '2022-05-22 19:37:03'),
('f8ae3347-644b-4d9b-b9c0-1b8ff8768ddd', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"433\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 13:12:26', '2022-04-08 13:12:26'),
('f8b4bf28-edb4-4227-a24f-6e2ab0020474', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:57:30', '2022-05-16 19:57:30'),
('f8b5d12b-1967-4f38-b12d-7f74b4de639f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":368,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-03-25 00:28:07', '2022-03-25 00:28:07'),
('f8cb4914-923a-43b9-ad45-a6aeb3f7ebed', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"362\",\"msg\":\"Worker has Claimed on Order ID Order ID- 362\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/362\"}', NULL, '2022-03-24 19:33:13', '2022-03-24 19:33:13'),
('f8fdda58-ed69-44d7-b416-a8a8a8284a4e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"439\",\"msg\":\"Worker has Claimed on Order ID Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 15:37:39', '2022-04-08 15:37:39'),
('f90d62b2-250a-425c-a0e9-5f832f324fd1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:35', '2022-05-10 19:32:35'),
('f924e762-a970-4d0a-b5a0-2c5a284d3358', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"448\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 448\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-11 13:09:50', '2022-04-11 13:09:50'),
('f9731c84-e8eb-43cb-a9cd-ac3dfbdee5ad', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"457\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-13 16:06:38', '2022-04-13 16:06:38'),
('f978e08a-6106-4aeb-ba96-9fc82d17559d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"452\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-12 14:56:40', '2022-04-12 14:56:40'),
('f978fe58-2ba4-42d2-a73b-7e09f28b2106', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"534\",\"msg\":\"A File has been uploaded for admin for  Order ID- 534\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/534\"}', NULL, '2022-05-30 20:23:23', '2022-05-30 20:23:23'),
('f98940a6-8ca2-4c56-ab3d-c345ac3c60a6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":367,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-03-25 00:28:47', '2022-03-25 00:28:47'),
('f99806fd-6d69-4799-a282-8864a5281728', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"598\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 12:04:50', '2022-09-12 12:04:50'),
('f9a79b12-6b55-409d-9cbb-042d7b29ef65', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:57', '2022-05-10 19:32:57'),
('f9ae1b2f-80ba-409f-90e8-61b0d1a013a2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"438\",\"msg\":\"A File has been uploaded for admin for  Order ID- 438\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/438\"}', NULL, '2022-04-08 15:21:07', '2022-04-08 15:21:07'),
('f9f60ed8-646c-493b-8628-4ff2cab97c1f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"485\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:32:36', '2022-04-27 14:32:36'),
('f9f93dd9-f4c3-4289-a4a1-ea3136ccd67c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"364\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:05:20', '2022-03-25 00:05:20'),
('fa31285f-60f0-425c-b474-3368f82458f0', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 14:50:15', '2022-04-18 14:50:15'),
('fa3788c4-ad15-4e8d-8be0-116db6c513d5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"595\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-09-12 12:00:38', '2022-09-12 12:00:38'),
('fa4f4505-27de-42b6-9bbe-12f0522c61c1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"481\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-23 13:10:07', '2022-04-23 13:10:07'),
('fa50f401-a59f-452c-8182-de1d11eaf4bf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"548\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-03 19:58:04', '2022-06-03 19:58:04'),
('fa625b01-de34-4d20-a0e9-618446c557e4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"444\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 14:50:45', '2022-04-09 14:50:45'),
('fa62baf1-da62-46d1-9236-223ec007716a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"518\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:57:13', '2022-05-20 17:57:13'),
('fa66228f-0414-47e8-b113-be8d94db5618', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 90, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:22', '2022-05-10 17:28:22'),
('fa67dcaa-7582-4e07-bcb6-a781df3cd792', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"477\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-16 14:44:26', '2022-04-16 14:44:26'),
('fa691698-e997-4a6f-a362-a36d508510b6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"445\",\"msg\":\"A File has been uploaded for admin for  Order ID- 445\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/445\"}', NULL, '2022-04-09 16:50:24', '2022-04-09 16:50:24'),
('fa883c91-1fec-46a2-9c32-25263e4a2ab7', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"444\",\"msg\":\"Worker has Claimed on Order ID Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 14:51:07', '2022-04-09 14:51:07'),
('fa96a5d5-9e0b-4292-80eb-3a2d345c9ccf', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"439\",\"msg\":\"Worker has Claimed on Order ID Order ID- 439\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/439\"}', NULL, '2022-04-08 16:09:53', '2022-04-08 16:09:53'),
('faa04e7e-14bc-49a7-aaee-7b81a8731bb9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"440\",\"msg\":\"Worker has Claimed on Order ID Order ID- 440\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/440\"}', NULL, '2022-04-08 16:33:44', '2022-04-08 16:33:44'),
('faa6fbc2-92ae-4cc1-84ff-0343698dfe61', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 91, '{\"order_id\":\"348\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-03 18:56:56', '2022-03-03 18:56:56'),
('fac01aab-37f3-40d4-b160-0f363f5706c6', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"477\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-16 14:44:10', '2022-04-16 14:44:10'),
('fac9f2db-c8ee-4a07-b077-5513de37d6a1', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:53', '2022-05-20 17:58:53'),
('fad493c5-8f8d-4f4f-8049-d04758cdfd78', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:30:39', '2022-04-28 14:30:39'),
('fb02233f-880d-484c-845b-8938dfba681a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"444\",\"msg\":\"Worker has Claimed on Order ID Order ID- 444\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/444\"}', NULL, '2022-04-09 15:47:54', '2022-04-09 15:47:54'),
('fb503e29-f359-40ed-b728-e1041752988f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"422\",\"msg\":\"Worker has Claimed on Order ID Order ID- 422\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/422\"}', NULL, '2022-04-07 22:14:04', '2022-04-07 22:14:04'),
('fb98a2cb-080c-49a6-b246-2147e85b571f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"349\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 349\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-04 11:20:02', '2022-03-04 11:20:02'),
('fbb682a9-10aa-4abb-beba-abd39deabf4a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"355\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', '0000-00-00 00:00:00', '2022-03-24 13:28:04', '2022-03-24 13:28:04'),
('fc793edb-db4d-4e50-a7f1-3c01de07060e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 89, '{\"order_id\":\"446\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-09 17:50:25', '2022-04-09 17:50:25'),
('fc9698fe-a724-4ff9-8d2f-3e0d8e10a4da', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"363\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-25 00:00:46', '2022-03-25 00:00:46'),
('fcb334db-6424-4067-9ecb-1a3ec1b6cf0b', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 94, '{\"order_id\":\"419\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-01 18:00:13', '2022-04-01 18:00:13'),
('fcca1c36-2730-4f19-95e3-612be16d971e', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"478\",\"msg\":\"Worker has Claimed on Order ID Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 13:14:39', '2022-04-18 13:14:39'),
('fccf3d16-4abf-4ebc-84e0-6480b9512d1f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"513\",\"msg\":\"A File has been uploaded for admin for  Order ID- 513\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/513\"}', NULL, '2022-05-20 17:24:02', '2022-05-20 17:24:02'),
('fd234157-7a44-45ac-a1d4-b59bac5670ab', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"575\",\"msg\":\"Worker has Claimed on Order ID Order ID- 575\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/575\"}', NULL, '2022-06-11 20:41:30', '2022-06-11 20:41:30'),
('fd6920f2-7057-45dd-90aa-9a5e3dfe6abb', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"521\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:26:29', '2022-05-20 19:26:29'),
('fd8418df-8882-43a1-8e29-4e625a334975', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"505\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 19:32:52', '2022-05-10 19:32:52'),
('fd9b11d2-7832-4451-8c7d-07e0dffe6848', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"A File has been uploaded for admin for  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 14:47:24', '2022-04-18 14:47:24'),
('fdc1cb78-a768-4af7-9509-12c438497bb5', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"368\",\"msg\":\"Worker has Claimed on Order ID Order ID- 368\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/368\"}', NULL, '2022-03-25 00:28:15', '2022-03-25 00:28:15'),
('fdd4f63c-3464-498c-aabe-ebcbd6095995', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"379\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 379\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-03-30 19:27:25', '2022-03-30 19:27:25'),
('fdddf0b1-bdbe-4d9f-940c-34baa347985a', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"350\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-04 11:26:15', '2022-03-04 11:26:15'),
('fdde7269-4387-4e35-8eae-62dedc54ce67', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":513,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-05-20 12:32:44', '2022-05-20 12:32:44'),
('fdf7a837-b611-4046-86f7-19ba6ea68bc2', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"353\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-03-23 13:43:35', '2022-03-23 13:43:35'),
('fe016e7d-280e-4770-8d25-34436f09630d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 107, '{\"order_id\":\"478\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-18 11:51:06', '2022-04-18 11:51:06'),
('fe1d1b21-a862-4e5f-9ddc-e752b23654a9', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 83, '{\"order_id\":\"435\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:03:08', '2022-04-08 15:03:08'),
('fe29c91d-c8dd-4fe8-869d-8683a95a4243', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 78, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:00:06', '2022-04-27 14:00:06'),
('fe32b3ec-9a80-4e5c-acf1-cde1e460896c', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"522\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 19:30:00', '2022-05-20 19:30:00'),
('fe609028-6a4c-4034-a084-fa8221c6420d', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"590\",\"msg\":\"Worker has bid on Order ID- 590\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\"}', NULL, '2022-06-16 18:09:54', '2022-06-16 18:09:54'),
('fe7e66ac-2e95-47c2-a647-711c6cae3d6f', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 1, '{\"order_id\":\"478\",\"msg\":\"Order has been  completed  Order ID- 478\",\"url\":\"http:\\/\\/wms.writing-space.com\\/new-order\\/478\"}', NULL, '2022-04-18 15:27:29', '2022-04-18 15:27:29'),
('feae9389-1f21-44e1-be9a-42a7addc6ed4', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"512\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-16 19:58:00', '2022-05-16 19:58:00'),
('febf6798-ac38-4ddc-88fc-97db4a74f478', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 106, '{\"order_id\":\"18\",\"msg\":\"Your Page request has been Approved Order ID- 355\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\\/355\"}', NULL, '2022-03-24 13:19:49', '2022-03-24 13:19:49'),
('fec89361-124c-4bbb-9eee-ac7518482d41', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":\"570\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-06-11 16:28:48', '2022-06-11 16:28:48'),
('fee468bd-6ba2-46e0-ab34-eebfa1f4fef8', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 86, '{\"order_id\":\"494\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-28 14:29:57', '2022-04-28 14:29:57'),
('fef1d8a1-c136-4700-aaed-69eb6a1ade25', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 92, '{\"order_id\":\"519\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-20 17:58:42', '2022-05-20 17:58:42'),
('ff2a1f0c-c7cf-4ec2-b8dd-69e84814e6fc', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 131, '{\"order_id\":589,\"msg\":\"Congrats! Order Has Been Assign To You\",\"url\":\"http:\\/\\/wms.writing-space.com\\/in-progress-orders\"}', NULL, '2022-06-15 19:31:18', '2022-06-15 19:31:18'),
('ff30c295-bed9-428d-8421-e3c4f5a42aba', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 93, '{\"order_id\":\"445\",\"msg\":\"Worker has Requested for Deadline Extension For Order ID- 445\",\"url\":\"http:\\/\\/wms.writing-space.com\\/deadline\"}', NULL, '2022-04-09 16:44:17', '2022-04-09 16:44:17'),
('ff438c08-ee8d-42b9-b0f1-c734b9003b91', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 85, '{\"order_id\":\"504\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-05-10 17:28:26', '2022-05-10 17:28:26'),
('ff482178-25df-409f-a453-9361c3605d48', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 88, '{\"order_id\":\"484\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-27 14:00:25', '2022-04-27 14:00:25'),
('ff657d09-b055-4b57-ba01-6ec5645cb925', 'App\\Notifications\\OrderNotifications', 'App\\Models\\User', 87, '{\"order_id\":\"435\",\"msg\":\"A New Order has been Posted in the Writing-Space System\",\"url\":\"http:\\/\\/wms.writing-space.com\\/user-dashboard\"}', NULL, '2022-04-08 15:03:17', '2022-04-08 15:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `orderstatuspivots`
--

CREATE TABLE `orderstatuspivots` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panelties`
--

CREATE TABLE `panelties` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_users_id` int(10) UNSIGNED NOT NULL,
  `erp_title` varchar(255) DEFAULT NULL,
  `erp_status` varchar(255) DEFAULT NULL,
  `erp_message` text DEFAULT NULL,
  `erp_panelty` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paper_formats`
--

CREATE TABLE `paper_formats` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_paper_format` varchar(255) DEFAULT NULL,
  `erp_status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paper_formats`
--

INSERT INTO `paper_formats` (`id`, `erp_user_id`, `erp_paper_format`, `erp_status`, `created_at`, `updated_at`) VALUES
(3, 1, 'APA', '1', '2022-03-29 13:10:08', '2022-03-29 13:10:08'),
(4, 1, 'MLA', '1', '2022-03-29 13:10:14', '2022-03-29 13:10:14'),
(5, 1, 'Chicago', '1', '2022-03-29 13:10:21', '2022-03-29 13:10:21'),
(6, 1, 'Turabian', '1', '2022-03-29 13:10:32', '2022-03-29 13:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `paper_types`
--

CREATE TABLE `paper_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_paper_type` varchar(255) DEFAULT NULL,
  `erp_status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paper_types`
--

INSERT INTO `paper_types` (`id`, `erp_user_id`, `erp_paper_type`, `erp_status`, `created_at`, `updated_at`) VALUES
(4, 1, 'Essay1', '1', '2022-03-29 13:08:35', '2022-03-29 13:08:35'),
(5, 1, 'Thesis', '1', '2022-03-29 13:08:41', '2022-03-29 13:08:41'),
(6, 1, 'Analytical Papers', '1', '2022-03-29 13:08:52', '2022-03-29 13:08:52');

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
-- Table structure for table `productpivots`
--

CREATE TABLE `productpivots` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `duration_type` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `pages_no` varchar(255) DEFAULT NULL,
  `price_pp` varchar(255) DEFAULT NULL,
  `actual_price` varchar(255) DEFAULT NULL,
  `compare_price` varchar(255) DEFAULT NULL,
  `product_type` varchar(255) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `min_purchase` varchar(255) DEFAULT NULL,
  `max_purchase` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productpivots`
--

INSERT INTO `productpivots` (`id`, `product_id`, `duration`, `duration_type`, `start_date`, `pages_no`, `price_pp`, `actual_price`, `compare_price`, `product_type`, `stock`, `min_purchase`, `max_purchase`, `created_at`, `updated_at`) VALUES
(9, 31, NULL, NULL, NULL, 'Ullamco ut laudantiu', '536', '263', '456', 'product', NULL, NULL, NULL, '2022-03-21 18:19:08', '2022-03-21 18:19:08'),
(10, 32, NULL, NULL, NULL, 'Ad pariatur Iusto q', '454', '682', '878', 'product', NULL, NULL, NULL, '2022-03-21 18:20:34', '2022-03-21 18:20:34'),
(11, 33, '22', 'days', '27', 'Sint officia maiores', '945', '845', '336', 'product', NULL, NULL, NULL, '2022-03-21 18:22:57', '2022-03-21 18:22:57'),
(12, 34, '45', 'month', '0', 'Quasi sint velit omn', '382', '582', '586', 'product', NULL, NULL, NULL, '2022-03-21 18:31:01', '2022-03-21 18:31:01'),
(13, 45, '62', 'weeks', '12', 'Obcaecati sit accus', '670', '751', '561', 'product', '73', '79', '38', '2022-03-23 12:40:04', '2022-03-23 12:40:04'),
(14, 46, '89', 'weeks', '2', 'Repudiandae natus qu', '944', '79', '292', 'product', '50', '15', '50', '2022-04-01 19:51:18', '2022-04-01 19:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_quiz_id` int(10) UNSIGNED NOT NULL,
  `erp_quiz_type` varchar(255) DEFAULT NULL,
  `erp_question_text` varchar(255) DEFAULT NULL,
  `erp_order_by` varchar(255) DEFAULT NULL,
  `erp_status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `erp_quiz_id`, `erp_quiz_type`, `erp_question_text`, `erp_order_by`, `erp_status`, `created_at`, `updated_at`) VALUES
(60, 19, 'check_boxes', '<p>What does CSS stand for?</p>', NULL, '1', '2021-12-13 23:41:48', '2021-12-13 23:41:48'),
(61, 19, 'check_boxes', '<p>What is the correct HTML for referring to an external style sheet?</p>', NULL, '1', '2021-12-13 23:42:55', '2021-12-13 23:42:55'),
(63, 20, 'check_boxes', '<p>what is your name?</p>', NULL, '1', '2021-12-14 20:49:02', '2021-12-14 20:49:02'),
(64, 20, 'check_boxes', '<p>who is your father&nbsp;</p>', NULL, '1', '2021-12-14 20:49:38', '2021-12-14 20:49:38'),
(66, 19, 'comment_box', '<p>Write an Essay on disciplining children</p>', NULL, '1', '2022-03-29 14:54:21', '2022-03-29 14:54:21'),
(67, 21, 'check_boxes', '<p>what is chemistry</p>', NULL, '1', '2022-04-11 15:23:50', '2022-04-11 15:23:50'),
(69, 19, 'file_upload', '<p>d2d2d2d</p>', NULL, '1', '2022-04-16 16:28:12', '2022-04-16 16:28:12'),
(70, 19, 'file_upload', '<p>DCWFW</p>', NULL, '1', '2022-04-16 16:50:44', '2022-04-16 16:50:44'),
(71, 21, 'check_boxes', '<p>Another name of bibliography is?</p>', NULL, '1', '2022-05-17 12:36:27', '2022-05-17 12:36:27'),
(73, 23, 'check_boxes', '<p>tufyigug</p>', NULL, '1', '2022-05-22 16:34:04', '2022-05-22 16:34:04'),
(74, 25, 'check_boxes', '<p>dqdqdqd</p>', NULL, '1', '2022-06-01 20:26:32', '2022-06-01 20:26:32'),
(75, 26, 'check_boxes', '<p>2233434343434</p>', NULL, '1', '2022-06-07 16:55:24', '2022-06-07 16:55:24'),
(76, 27, 'check_boxes', '<p>why are two options being displayed here??</p>', NULL, '1', '2022-06-10 11:59:39', '2022-06-10 11:59:39'),
(77, 27, 'check_boxes', '<p>What is the solution?</p>', NULL, '1', '2022-06-10 12:00:17', '2022-06-10 12:00:17'),
(78, 27, 'check_boxes', '<p>What other problems are we facing ??</p>', NULL, '1', '2022-06-10 12:00:59', '2022-06-10 12:00:59'),
(79, 27, 'check_boxes', '<p>Are you sure there are several other problems ??</p>', NULL, '1', '2022-06-10 12:01:25', '2022-06-10 12:01:25'),
(80, 27, 'check_boxes', '<p>In Edit, Passing questions is not showing&nbsp;</p>', NULL, '1', '2022-06-10 12:02:51', '2022-06-10 12:02:51'),
(81, 27, 'check_boxes', '<p>Why is this question being posted?</p>', NULL, '1', '2022-06-10 12:03:25', '2022-06-10 12:03:25'),
(82, 25, 'check_boxes', '<p>Full name and last name</p>', NULL, '1', '2023-10-11 16:09:41', '2023-10-11 16:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `question_datas`
--

CREATE TABLE `question_datas` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_quiz_id` int(10) UNSIGNED NOT NULL,
  `erp_question_id` int(10) UNSIGNED NOT NULL,
  `erp_question_text` varchar(255) DEFAULT NULL,
  `erp_question_type` varchar(255) DEFAULT NULL,
  `erp_checkbox_option` varchar(255) DEFAULT NULL,
  `erp_checkbox_hints` varchar(255) DEFAULT NULL,
  `erp_file` varchar(255) DEFAULT NULL,
  `erp_file_type` varchar(255) DEFAULT NULL,
  `erp_comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_datas`
--

INSERT INTO `question_datas` (`id`, `erp_quiz_id`, `erp_question_id`, `erp_question_text`, `erp_question_type`, `erp_checkbox_option`, `erp_checkbox_hints`, `erp_file`, `erp_file_type`, `erp_comment`, `created_at`, `updated_at`) VALUES
(60, 19, 60, '<p>What does CSS stand for?</p>', 'check_boxes', '{\"Creative Style Sheets\":\"0\",\"Computer Style Sheets\":\"0\",\"Cascading Style Sheets\":\"1\"}', 'Cascading Style Sheets', NULL, NULL, NULL, '2021-12-13 23:41:48', '2021-12-13 23:41:48'),
(61, 19, 61, '<p>What is the correct HTML for referring to an external style sheet?</p>', 'check_boxes', '{\"<stylesheet>mystyle.css<\\/stylesheet>\":\"0\",\"<link rel=\\\"stylesheet\\\" type=\\\"text\\/css\\\" href=\\\"mystyle.css\\\">\":\"1\"}', '<link rel=\"stylesheet\" type=\"text/css\" href=\"mystyle.css\">', NULL, NULL, NULL, '2021-12-13 23:42:55', '2021-12-13 23:42:55'),
(63, 20, 63, '<p>what is your name?</p>', 'check_boxes', '{\"John\":\"0\",\"Pettter\":\"0\",\"Obama\":\"1\"}', 'Obama', NULL, NULL, NULL, '2021-12-14 20:49:02', '2021-12-14 20:49:02'),
(64, 20, 64, '<p>who is your father&nbsp;</p>', 'check_boxes', '{\"a man\":\"0\",\"a woman\":\"0\",\"a boy\":\"0\"}', '0', NULL, NULL, NULL, '2021-12-14 20:49:38', '2021-12-14 20:49:38'),
(66, 19, 66, '<p>Write an Essay on disciplining children</p>', 'comment_box', NULL, NULL, NULL, NULL, NULL, '2022-03-29 14:54:21', '2022-03-29 14:54:21'),
(67, 21, 67, '<p>what is chemistry</p>', 'check_boxes', '{\"Chemistry\":\"1\",\"wow 5\":\"0\",\"wow 3\":\"0\",\"yjytjyjytjujyjuju\":\"0\"}', 'Chemistry', NULL, NULL, NULL, '2022-04-11 15:23:50', '2022-04-11 15:25:21'),
(69, 19, 69, '<p>d2d2d2d</p>', 'file_upload', NULL, NULL, 'Null', 'pdf', NULL, '2022-04-16 16:28:12', '2022-04-16 16:28:12'),
(70, 19, 70, '<p>DCWFW</p>', 'file_upload', NULL, NULL, 'Null', '[\"pdf\",\"doc\",\"png\"]', NULL, '2022-04-16 16:50:44', '2022-04-16 16:50:44'),
(71, 21, 71, '<p>Another name of bibliography is?</p>', 'check_boxes', '{\"Reference List\":\"1\",\"America\":\"0\",\"Ukraine\":\"0\",\"Russia\":\"0\",\"Pakistan\":\"0\"}', 'Reference List', NULL, NULL, NULL, '2022-05-17 12:36:27', '2022-05-17 12:36:27'),
(73, 23, 73, '<p>tufyigug</p>', 'check_boxes', '{\"rty\":\"0\",\"6i\":\"0\",\"yigi\":\"0\"}', '0', NULL, NULL, NULL, '2022-05-22 16:34:04', '2022-05-22 16:34:04'),
(74, 25, 74, '<p>dqdqdqd</p>', 'check_boxes', '{\"scfwcw\":\"1\",\"wvw\":\"1\",\"fwfw\":\"0\"}', 'scfwcw', NULL, NULL, NULL, '2022-06-01 20:26:32', '2022-06-01 20:26:32'),
(75, 26, 75, '<p>2233434343434</p>', 'check_boxes', '{\"1\":\"0\"}', '0', NULL, NULL, NULL, '2022-06-07 16:55:24', '2022-06-07 16:55:24'),
(76, 27, 76, '<p>why are two options being displayed here??</p>', 'check_boxes', '{\"because it is an error\":\"1\",\"because it is an Bug\":\"0\",\"because it is an Oversight\":\"1\",\"\":\"0\"}', 'because it is an error', NULL, NULL, NULL, '2022-06-10 11:59:39', '2022-06-10 11:59:39'),
(77, 27, 77, '<p>What is the solution?</p>', 'check_boxes', '{\"Talk to Yasir\":\"1\",\"Ignore it\":\"0\",\"Work on it Later\":\"0\"}', 'Talk to Yasir', NULL, NULL, NULL, '2022-06-10 12:00:17', '2022-06-10 12:00:17'),
(78, 27, 78, '<p>What other problems are we facing ??</p>', 'check_boxes', '{\"Several Problems\":\"1\",\"No Further Problems\":\"0\",\"A few other problems\":\"0\"}', 'Several Problems', NULL, NULL, NULL, '2022-06-10 12:00:59', '2022-06-10 12:00:59'),
(79, 27, 79, '<p>Are you sure there are several other problems ??</p>', 'check_boxes', '{\"Yes\":\"1\",\"No\":\"0\",\"\":\"0\"}', 'Yes', NULL, NULL, NULL, '2022-06-10 12:01:25', '2022-06-10 12:01:25'),
(80, 27, 80, '<p>In Edit, Passing questions is not showing&nbsp;</p>', 'check_boxes', '{\"I am certain it is not showing\":\"1\",\"Let me check again\":\"0\",\"\":\"0\"}', 'I am certain it is not showing', NULL, NULL, NULL, '2022-06-10 12:02:51', '2022-06-10 12:02:51'),
(81, 27, 81, '<p>Why is this question being posted?</p>', 'check_boxes', '{\"To complete the quiz\":\"1\",\"It is necessary\":\"0\",\"\":\"0\"}', 'To complete the quiz', NULL, NULL, NULL, '2022-06-10 12:03:25', '2022-06-10 12:03:25'),
(82, 25, 82, '<p>Full name and last name</p>', 'check_boxes', '{\"No Name\":\"0\",\"Yes I have a name\":\"1\"}', 'Yes I have a name', NULL, NULL, NULL, '2023-10-11 16:09:41', '2023-10-11 16:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_quiz_name` varchar(255) DEFAULT NULL,
  `erp_quiz_passage` varchar(255) DEFAULT NULL,
  `erp_quiz_type` varchar(255) DEFAULT NULL,
  `erp_quiz_formats` varchar(255) DEFAULT NULL,
  `erp_quiz_timer` varchar(255) DEFAULT NULL,
  `erp_quiz_status` varchar(255) NOT NULL DEFAULT '0',
  `erp_quiz_passing` varchar(255) DEFAULT NULL,
  `erp_quiz_result` varchar(255) DEFAULT NULL,
  `erp_order_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `erp_user_id`, `erp_quiz_name`, `erp_quiz_passage`, `erp_quiz_type`, `erp_quiz_formats`, `erp_quiz_timer`, `erp_quiz_status`, `erp_quiz_passing`, `erp_quiz_result`, `erp_order_by`, `created_at`, `updated_at`) VALUES
(18, 1, 'Welcome Quiz', 'dwdwfdwfwfw', 'signup', 'multiple', '10', '1', '2', 'immediate', NULL, '2021-12-13 23:35:31', '2022-06-28 14:05:51'),
(19, 1, 'CSS QUIZ', 'jyfr68fyi', 'login', 'multiple', '10', '1', '2', 'normal', NULL, '2021-12-13 23:41:03', '2022-03-29 14:52:56'),
(20, 1, 'testing', 'hgygjuob', 'signup', 'multiple', '5', '1', '1', 'normal', '3', '2021-12-14 20:48:10', '2023-10-11 16:12:47'),
(21, 1, 'Creating Bibliography', 'dwdwdwfjwihvcjkafuov', 'login', 'single', '30', '1', '10', 'normal', NULL, '2022-03-29 14:38:41', '2022-05-17 12:38:25'),
(23, 1, 'abc', 'dwdwdw', 'signup', 'single', '12', '1', NULL, 'normal', NULL, '2022-05-22 16:33:45', '2022-05-22 16:33:45'),
(25, 1, 'test', 'hgiyfvhb;gaduncgfpaeu', 'signup', 'single', '20', '1', '2', 'immediate', NULL, '2022-06-01 20:25:25', '2022-06-01 20:25:25'),
(26, 1, 'test', 'wewqewqeqwe', 'signup', 'single', '12', '1', NULL, 'normal', NULL, '2022-06-07 16:54:50', '2022-06-07 16:54:50'),
(27, 1, 'Checking Fields', 'This is being created to check all the fields of the Quiz Section', 'signup', 'multiple', '9', '1', '6', 'immediate', NULL, '2022-06-10 11:58:04', '2022-06-10 11:58:04'),
(28, 1, 'Coupon Discounts', 'testing for testing', 'signup', 'multiple', '10', '1', '10', 'immediate', NULL, '2023-10-11 16:02:58', '2023-10-11 16:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `registrationquizzes`
--

CREATE TABLE `registrationquizzes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `quiz_id` int(10) UNSIGNED DEFAULT NULL,
  `quiz_type` varchar(255) DEFAULT NULL,
  `quiz_reorder` varchar(255) DEFAULT NULL,
  `quiz_is_done` varchar(255) DEFAULT NULL,
  `quiz_is_passed` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrationquizzes`
--

INSERT INTO `registrationquizzes` (`id`, `user_id`, `quiz_id`, `quiz_type`, `quiz_reorder`, `quiz_is_done`, `quiz_is_passed`, `created_at`, `updated_at`, `deleted_at`) VALUES
(85, 78, 20, 'signup', NULL, '1', NULL, '2021-12-25 23:00:18', '2021-12-25 23:00:28', NULL),
(86, 78, 18, 'signup', '1', '1', NULL, '2021-12-25 23:00:18', '2021-12-25 23:01:44', NULL),
(97, 84, 20, 'signup', NULL, '1', NULL, '2022-01-12 22:04:30', '2022-01-12 22:04:42', NULL),
(98, 84, 18, 'signup', '1', '1', '1', '2022-01-12 22:04:30', '2022-01-12 22:04:57', NULL),
(99, 85, 20, 'signup', NULL, '1', NULL, '2022-01-12 22:16:41', '2022-01-12 22:16:51', NULL),
(100, 85, 18, 'signup', '1', '1', NULL, '2022-01-12 22:16:41', '2022-01-12 22:17:00', NULL),
(101, 86, 20, 'signup', NULL, '1', NULL, '2022-01-12 22:21:24', '2022-01-12 22:21:34', NULL),
(102, 86, 18, 'signup', '1', '1', NULL, '2022-01-12 22:21:24', '2022-01-12 22:21:42', NULL),
(103, 87, 20, 'signup', NULL, '1', NULL, '2022-01-12 22:23:58', '2022-01-12 22:24:06', NULL),
(104, 87, 18, 'signup', '1', '1', NULL, '2022-01-12 22:23:58', '2022-01-12 22:24:13', NULL),
(105, 88, 20, 'signup', NULL, '1', NULL, '2022-01-12 22:26:09', '2022-01-12 22:26:20', NULL),
(106, 88, 18, 'signup', '1', '1', NULL, '2022-01-12 22:26:09', '2022-01-12 22:26:27', NULL),
(113, 92, 20, 'signup', NULL, '1', NULL, '2022-01-12 22:39:58', '2022-01-12 22:40:10', NULL),
(114, 92, 18, 'signup', '1', '1', '1', '2022-01-12 22:39:58', '2022-01-12 22:40:25', NULL),
(115, 93, 20, 'signup', NULL, '1', NULL, '2022-01-12 22:42:42', '2022-01-12 22:48:07', NULL),
(116, 93, 18, 'signup', '1', '1', NULL, '2022-01-12 22:42:42', '2022-01-12 22:48:16', NULL),
(137, 106, 20, 'signup', NULL, '1', NULL, '2022-03-23 19:46:11', '2022-03-23 19:46:27', NULL),
(138, 106, 18, 'signup', '1', '1', NULL, '2022-03-23 19:46:11', '2022-03-23 19:46:36', NULL),
(151, 111, 20, 'signup', NULL, '1', NULL, '2022-03-29 19:47:27', '2022-03-29 19:47:44', NULL),
(152, 111, 21, 'signup', NULL, '1', NULL, '2022-03-29 19:47:27', '2022-03-29 19:47:50', NULL),
(153, 111, 18, 'signup', '1', '1', NULL, '2022-03-29 19:47:27', '2022-03-29 19:47:58', NULL),
(157, 113, 20, 'signup', NULL, '1', NULL, '2022-04-09 16:53:34', '2022-04-09 16:54:01', NULL),
(158, 113, 21, 'signup', NULL, '1', NULL, '2022-04-09 16:53:34', '2022-04-09 16:54:22', NULL),
(159, 113, 18, 'signup', '1', '1', NULL, '2022-04-09 16:53:34', '2022-04-09 16:54:39', NULL),
(160, 114, 20, 'signup', NULL, '1', NULL, '2022-04-13 01:01:05', '2022-04-13 01:01:36', NULL),
(161, 114, 21, 'signup', NULL, '1', NULL, '2022-04-13 01:01:05', '2022-04-13 01:01:43', NULL),
(162, 114, 18, 'signup', '1', '1', NULL, '2022-04-13 01:01:05', '2022-04-13 01:01:51', NULL),
(163, 115, 20, 'signup', NULL, '1', NULL, '2022-04-13 01:03:54', '2022-04-13 01:04:14', NULL),
(164, 115, 21, 'signup', NULL, '1', NULL, '2022-04-13 01:03:54', '2022-04-13 01:04:21', NULL),
(165, 115, 18, 'signup', '1', '1', '1', '2022-04-13 01:03:54', '2022-04-13 01:04:30', NULL),
(166, 116, 20, 'signup', NULL, '1', NULL, '2022-04-13 01:18:21', '2022-04-13 01:18:47', NULL),
(167, 116, 21, 'signup', NULL, '1', NULL, '2022-04-13 01:18:21', '2022-04-13 01:18:54', NULL),
(168, 116, 18, 'signup', '1', '1', NULL, '2022-04-13 01:18:21', '2022-04-13 01:19:02', NULL),
(169, 117, 20, 'signup', NULL, NULL, NULL, '2022-04-13 13:09:17', '2022-04-13 13:09:17', NULL),
(170, 117, 21, 'signup', NULL, NULL, NULL, '2022-04-13 13:09:17', '2022-04-13 13:09:17', NULL),
(171, 117, 18, 'signup', '1', NULL, NULL, '2022-04-13 13:09:17', '2022-04-13 13:09:17', NULL),
(172, 118, 20, 'signup', NULL, '1', NULL, '2022-04-23 13:31:59', '2022-04-23 13:32:25', NULL),
(173, 118, 21, 'signup', NULL, '1', NULL, '2022-04-23 13:31:59', '2022-04-23 13:32:31', NULL),
(174, 118, 18, 'signup', '1', '1', NULL, '2022-04-23 13:31:59', '2022-04-23 13:32:40', NULL),
(193, 131, 20, 'signup', NULL, '1', NULL, '2022-05-18 19:00:47', '2022-05-18 19:01:43', NULL),
(194, 131, 18, 'signup', '1', '1', '1', '2022-05-18 19:00:47', '2022-05-18 19:01:51', NULL),
(195, 132, 20, 'signup', NULL, NULL, NULL, '2022-06-01 20:21:12', '2022-06-01 20:21:12', NULL),
(196, 132, 23, 'signup', NULL, NULL, NULL, '2022-06-01 20:21:12', '2022-06-01 20:21:12', NULL),
(197, 132, 18, 'signup', '1', NULL, NULL, '2022-06-01 20:21:12', '2022-06-01 20:21:12', NULL),
(198, 133, 20, 'signup', NULL, '1', NULL, '2022-06-01 20:27:57', '2022-06-01 20:31:17', NULL),
(199, 133, 23, 'signup', NULL, '1', NULL, '2022-06-01 20:27:57', '2022-06-01 20:31:52', NULL),
(200, 133, 25, 'signup', NULL, '1', NULL, '2022-06-01 20:27:57', '2022-06-01 20:38:32', NULL),
(201, 133, 18, 'signup', '1', '1', NULL, '2022-06-01 20:27:57', '2022-06-01 20:38:59', NULL),
(202, 134, 18, 'signup', NULL, NULL, NULL, '2022-09-11 15:22:57', '2022-09-11 15:22:57', NULL),
(203, 134, 20, 'signup', NULL, NULL, NULL, '2022-09-11 15:22:57', '2022-09-11 15:22:57', NULL),
(204, 134, 23, 'signup', NULL, NULL, NULL, '2022-09-11 15:22:57', '2022-09-11 15:22:57', NULL),
(205, 134, 25, 'signup', NULL, NULL, NULL, '2022-09-11 15:22:57', '2022-09-11 15:22:57', NULL),
(206, 134, 26, 'signup', NULL, NULL, NULL, '2022-09-11 15:22:57', '2022-09-11 15:22:57', NULL),
(207, 134, 27, 'signup', NULL, NULL, NULL, '2022-09-11 15:22:57', '2022-09-11 15:22:57', NULL),
(208, 135, 18, 'signup', NULL, '1', NULL, '2022-09-12 11:28:01', '2022-09-12 11:28:50', NULL),
(209, 135, 20, 'signup', NULL, '1', NULL, '2022-09-12 11:28:01', '2022-09-12 11:28:58', NULL),
(210, 135, 23, 'signup', NULL, '1', NULL, '2022-09-12 11:28:01', '2022-09-12 11:29:06', NULL),
(211, 135, 25, 'signup', NULL, '1', NULL, '2022-09-12 11:28:01', '2022-09-12 11:29:12', NULL),
(212, 135, 26, 'signup', NULL, '1', NULL, '2022-09-12 11:28:01', '2022-09-12 11:29:18', NULL),
(213, 135, 27, 'signup', NULL, '1', NULL, '2022-09-12 11:28:01', '2022-09-12 11:29:27', NULL),
(214, 136, 18, 'signup', NULL, '1', NULL, '2022-09-12 11:36:50', '2022-09-12 11:37:15', NULL),
(215, 136, 20, 'signup', NULL, '1', NULL, '2022-09-12 11:36:50', '2022-09-12 11:37:22', NULL),
(216, 136, 23, 'signup', NULL, '1', NULL, '2022-09-12 11:36:50', '2022-09-12 11:37:30', NULL),
(217, 136, 25, 'signup', NULL, '1', NULL, '2022-09-12 11:36:50', '2022-09-12 11:37:35', NULL),
(218, 136, 26, 'signup', NULL, '1', NULL, '2022-09-12 11:36:50', '2022-09-12 11:37:41', NULL),
(219, 136, 27, 'signup', NULL, '1', NULL, '2022-09-12 11:36:50', '2022-09-12 11:37:49', NULL),
(220, 137, 18, 'signup', NULL, '1', '1', '2023-10-10 22:19:59', '2023-10-14 15:55:59', NULL),
(221, 137, 20, 'signup', NULL, '1', NULL, '2023-10-10 22:19:59', '2023-10-14 15:59:23', NULL),
(222, 137, 23, 'signup', NULL, '1', NULL, '2023-10-10 22:19:59', '2023-10-14 15:59:33', NULL),
(223, 137, 25, 'signup', NULL, '1', NULL, '2023-10-10 22:19:59', '2023-10-14 15:59:44', NULL),
(224, 137, 26, 'signup', NULL, '1', NULL, '2023-10-10 22:19:59', '2023-10-14 15:59:52', NULL),
(225, 137, 27, 'signup', NULL, '1', NULL, '2023-10-10 22:19:59', '2023-10-14 16:00:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requestpages`
--

CREATE TABLE `requestpages` (
  `id` int(10) UNSIGNED NOT NULL,
  `team_order_id` int(10) UNSIGNED DEFAULT NULL,
  `pages_no` varchar(255) DEFAULT NULL,
  `DateTime` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_pivots`
--

CREATE TABLE `request_pivots` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_status` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_pivots`
--

INSERT INTO `request_pivots` (`id`, `erp_status`, `name`, `description`, `created_at`, `updated_at`) VALUES
(6, 1, 'sick', 'Soluta aliquid quam', '2022-05-30 18:54:32', '2022-05-30 19:05:33'),
(7, 1, 'Load sheddding', 'Officia porro labore', '2022-05-30 18:54:46', '2022-05-30 19:05:43'),
(8, 1, 'fever', 'fwf', '2022-05-30 19:06:05', '2022-05-30 19:06:32'),
(9, 1, 'Emergency', 'xd', '2022-05-30 19:06:40', '2022-05-30 19:06:40'),
(10, 1, 'family problem', 'dq', '2022-05-30 19:06:50', '2022-05-30 19:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `roles_assigns`
--

CREATE TABLE `roles_assigns` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED NOT NULL,
  `commission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles_assigns`
--

INSERT INTO `roles_assigns` (`id`, `user_id`, `role_id`, `level_id`, `commission_id`, `created_at`, `updated_at`) VALUES
(169, 78, 4, 13, 72, '2022-05-22 14:32:24', '2022-05-22 14:32:24'),
(170, 93, 4, 13, 72, '2022-05-22 14:33:33', '2022-05-22 14:33:33'),
(171, 111, 5, 13, 71, '2022-05-22 14:33:57', '2022-05-22 14:33:57'),
(172, 88, 5, 13, 71, '2022-05-22 14:34:06', '2022-05-22 14:34:06'),
(173, 86, 12, 13, 73, '2022-05-22 14:34:59', '2022-05-22 14:34:59'),
(174, 85, 12, 13, 73, '2022-05-22 14:35:14', '2022-05-22 14:35:14'),
(175, 116, 19, 13, 74, '2022-05-22 14:35:26', '2022-05-22 14:35:26'),
(176, 87, 19, 13, 74, '2022-05-22 14:36:09', '2022-05-22 14:36:09'),
(178, 131, 1, 13, 77, '2022-05-22 20:18:07', '2022-05-22 20:18:07'),
(179, 106, 1, 15, 78, '2022-05-22 20:18:22', '2022-05-22 20:18:22'),
(180, 131, 12, 13, 73, '2022-06-11 16:06:37', '2022-06-11 16:06:37'),
(181, 93, 5, 13, 71, '2022-06-11 16:10:33', '2022-06-11 16:10:33'),
(182, 78, 19, 13, 74, '2022-06-11 16:10:40', '2022-06-11 16:10:40'),
(183, 133, 4, 13, 72, '2022-06-11 18:53:21', '2022-06-11 18:53:21'),
(184, 78, 1, 13, 77, '2022-06-11 20:23:11', '2022-06-11 20:23:11'),
(185, 78, 19, 14, 80, '2022-09-11 12:48:05', '2022-09-11 12:48:05'),
(186, 134, 4, 13, 72, '2022-09-11 15:26:37', '2022-09-11 15:26:37'),
(187, 118, 12, 13, 73, '2023-10-14 16:05:26', '2023-11-10 13:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `subject_types`
--

CREATE TABLE `subject_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_subject_name` varchar(255) DEFAULT NULL,
  `erp_status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_types`
--

INSERT INTO `subject_types` (`id`, `erp_user_id`, `erp_subject_name`, `erp_status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Computer', '1', '2021-10-05 11:06:35', '2021-10-05 11:06:35'),
(4, 1, 'physics', '1', '2021-10-05 11:06:35', '2021-10-05 11:06:35'),
(5, 1, 'programmng\r\n', '1', '2021-10-05 11:06:35', '2021-10-05 11:06:35'),
(6, 1, 'data structures', '1', '2021-10-05 11:06:35', '2021-10-05 11:06:35'),
(7, 1, 'discrete', '1', '2021-10-05 11:06:35', '2021-10-05 11:06:35'),
(8, 1, 'pstr', '1', '2021-10-05 11:06:35', '2021-10-05 11:06:35'),
(9, 1, 'urdu', '1', '2021-10-05 11:06:35', '2021-10-05 11:06:35'),
(10, 1, 'science', '1', '2021-10-05 11:06:35', '2021-10-05 11:06:35'),
(11, 1, 'web', '1', '2021-10-05 11:06:35', '2021-10-05 11:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `commission_id` int(10) UNSIGNED NOT NULL,
  `team_order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sec_title` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `cat_1` varchar(255) DEFAULT NULL,
  `cat_2` varchar(255) DEFAULT NULL,
  `main_file` varchar(255) DEFAULT NULL,
  `sources` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `order_id`, `commission_id`, `team_order_id`, `user_id`, `title`, `sec_title`, `keywords`, `description`, `cat_1`, `cat_2`, `main_file`, `sources`, `deleted_at`, `created_at`, `updated_at`) VALUES
(335, 604, 77, 1352, 1, 'vxcvxcvvcxvcxv', NULL, 'null', 'cvcxvcxv', NULL, NULL, '1699871656501.docx', '[\"1699871656396.docx\"]', NULL, '2023-11-13 15:34:16', '2023-11-13 15:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionpivots`
--

CREATE TABLE `subscriptionpivots` (
  `id` int(10) UNSIGNED NOT NULL,
  `subscription_id` int(10) UNSIGNED NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `duration_type` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `pages_no` varchar(255) DEFAULT NULL,
  `price_pp` varchar(255) DEFAULT NULL,
  `actual_price` varchar(255) DEFAULT NULL,
  `compare_price` varchar(255) DEFAULT NULL,
  `product_type` varchar(255) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `min_purchase` varchar(255) DEFAULT NULL,
  `max_purchase` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptionpivots`
--

INSERT INTO `subscriptionpivots` (`id`, `subscription_id`, `duration`, `duration_type`, `start_date`, `pages_no`, `price_pp`, `actual_price`, `compare_price`, `product_type`, `stock`, `min_purchase`, `max_purchase`, `created_at`, `updated_at`) VALUES
(3, 10, NULL, NULL, NULL, 'Qui voluptatem ab u', '790', '415', '825', 'subscription', NULL, NULL, NULL, '2022-03-17 15:14:03', '2022-03-17 15:14:03'),
(4, 11, '20', 'days', '20', '11', '22', '12', '56', 'subscription', NULL, NULL, NULL, '2022-03-17 18:12:46', '2022-03-17 18:12:46'),
(5, 12, '28', 'month', '10', 'Recusandae Temporib', '336', '388', '747', 'subscription', NULL, NULL, NULL, '2022-03-17 18:14:58', '2022-03-17 18:14:58'),
(6, 35, '25', 'year', '0', '53', '99', '209', '107', 'subscription', NULL, NULL, NULL, '2022-03-22 20:00:52', '2022-03-22 20:00:52'),
(7, 36, '70', 'year', '0', '24', '736', '749', '792', 'subscription', NULL, NULL, NULL, '2022-03-22 20:04:01', '2022-03-22 20:04:01'),
(8, 38, '4', 'year', '21', '23', '843', '38', '750', 'subscription', '45', '42', NULL, '2022-03-22 20:07:06', '2022-03-22 20:07:06'),
(9, 39, '53', 'month', '17', '85', '762', '167', '290', 'subscription', '39', '7', NULL, '2022-03-22 20:09:21', '2022-03-22 20:09:21'),
(10, 41, '50', 'month', '0', '91', '366', '182', '338', 'subscription', '100', '20', NULL, '2022-03-22 20:10:50', '2022-03-22 20:10:50'),
(11, 42, '36', 'month', '0', '25', '496', '586', '182', 'subscription', '89', '54', '21', '2022-03-22 20:11:23', '2022-03-22 20:11:23'),
(12, 43, '77', 'year', '13', '15', '850', '756', '21', 'subscription', '63', '25', '49', '2022-03-23 11:46:04', '2022-03-23 11:46:04'),
(13, 47, '23', 'month', '0', '33', '526', '137', '535', 'subscription', '52', '44', '71', '2022-04-01 19:51:44', '2022-04-01 19:51:44'),
(14, 48, '12', 'month', '0', '1500', '15', '12', '12', 'subscription', '1000', '50', '100', '2022-09-07 10:52:17', '2022-09-07 10:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `actual_price` varchar(255) DEFAULT NULL,
  `compare_price` varchar(255) DEFAULT NULL,
  `product_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `name`, `description`, `slug`, `status`, `actual_price`, `compare_price`, `product_type`, `created_at`, `updated_at`) VALUES
(10, 'abc', 'dummmy text here', 'dummytexthere__', '0', '415', '825', 'subscription', '2022-03-17 15:14:03', '2022-03-17 15:14:03'),
(11, 'abc', 'scwfwfwfwf', 'abv', '1', '12', '56', 'subscription', '2022-03-17 18:12:46', '2022-03-17 18:12:46'),
(12, 'Wade Murray', 'Sit sed est eligendi', 'Eos aut tempora numq', '1', '388', '747', 'subscription', '2022-03-17 18:14:58', '2022-03-17 18:14:58'),
(13, 'Madonna Ratliff', 'Laborum et sed natus', NULL, '1', '840', '431', 'subscription', '2022-03-21 17:32:24', '2022-03-21 17:32:24'),
(14, 'Madonna Ratliff', 'Laborum et sed natus', NULL, '1', '840', '431', 'subscription', '2022-03-21 17:32:48', '2022-03-21 17:32:48'),
(15, 'Madonna Ratliff', 'Laborum et sed natus', NULL, '1', '840', '431', 'subscription', '2022-03-21 17:32:51', '2022-03-21 17:32:51'),
(16, 'Madonna Ratliff', 'Laborum et sed natus', NULL, '1', '840', '431', 'subscription', '2022-03-21 17:35:18', '2022-03-21 17:35:18'),
(17, 'Madonna Ratliff', 'Laborum et sed natus', NULL, '1', '840', '431', 'subscription', '2022-03-21 17:35:25', '2022-03-21 17:35:25'),
(18, 'Madonna Ratliff', 'Laborum et sed natus', NULL, '1', '840', '431', 'subscription', '2022-03-21 17:35:56', '2022-03-21 17:35:56'),
(19, 'Madonna Ratliff', 'Laborum et sed natus', NULL, '1', '840', '431', 'subscription', '2022-03-21 17:36:00', '2022-03-21 17:36:00'),
(20, 'Hilda Hodges', 'Sunt eligendi quam o', NULL, '0', '405', '130', 'product', '2022-03-21 17:40:45', '2022-03-21 17:40:45'),
(21, 'Hilda Hodges', 'Sunt eligendi quam o', NULL, '0', '405', '130', 'product', '2022-03-21 17:41:31', '2022-03-21 17:41:31'),
(22, 'Lance Jacobs', 'Suscipit obcaecati i', NULL, '1', '263', '456', 'product', '2022-03-21 17:41:43', '2022-03-21 17:41:43'),
(23, 'Lance Jacobs', 'Suscipit obcaecati i', NULL, '1', '263', '456', 'product', '2022-03-21 17:42:22', '2022-03-21 17:42:22'),
(24, 'Lance Jacobs', 'Suscipit obcaecati i', NULL, '1', '263', '456', 'product', '2022-03-21 17:42:27', '2022-03-21 17:42:27'),
(25, 'Lance Jacobs', 'Suscipit obcaecati i', NULL, '1', '263', '456', 'product', '2022-03-21 17:43:01', '2022-03-21 17:43:01'),
(26, 'Lance Jacobs', 'Suscipit obcaecati i', NULL, '1', '263', '456', 'product', '2022-03-21 17:43:13', '2022-03-21 17:43:13'),
(27, 'Lance Jacobs', 'Suscipit obcaecati i', NULL, '1', '263', '456', 'product', '2022-03-21 17:43:15', '2022-03-21 17:43:15'),
(28, 'Lance Jacobs', 'Suscipit obcaecati i', NULL, '1', '263', '456', 'product', '2022-03-21 18:17:34', '2022-03-21 18:17:34'),
(29, 'Lance Jacobs', 'Suscipit obcaecati i', NULL, '1', '263', '456', 'product', '2022-03-21 18:17:41', '2022-03-21 18:17:41'),
(30, 'Lance Jacobs', 'Suscipit obcaecati i', NULL, '1', '263', '456', 'product', '2022-03-21 18:18:09', '2022-03-21 18:18:09'),
(31, 'Lance Jacobs', 'Suscipit obcaecati i', NULL, '1', '263', '456', 'product', '2022-03-21 18:19:08', '2022-03-21 18:19:08'),
(32, 'Aline Combs', 'Quibusdam quia totam', NULL, '1', '682', '878', 'product', '2022-03-21 18:20:34', '2022-03-21 18:20:34'),
(33, 'Bert Reeves', 'Aliquid do et rem pr', NULL, '0', '845', '336', 'product', '2022-03-21 18:22:57', '2022-03-21 18:22:57'),
(34, 'Nadine Bates', 'Sint in odit ab qui', NULL, '1', '582', '586', 'product', '2022-03-21 18:31:01', '2022-03-21 18:31:01'),
(35, 'Reece Noble', 'Sit nulla saepe ull', NULL, '1', '209', '107', 'subscription', '2022-03-22 20:00:52', '2022-03-22 20:00:52'),
(36, 'Vaughan Cole', 'Dolores ut dignissim', NULL, '1', '749', '792', NULL, '2022-03-22 20:04:01', '2022-03-22 20:04:01'),
(37, 'Charles Crawford', 'Mollitia ut qui quis', NULL, '0', '38', '750', NULL, '2022-03-22 20:05:30', '2022-03-22 20:05:30'),
(38, 'Charles Crawford', 'Mollitia ut qui quis', NULL, '0', '38', '750', NULL, '2022-03-22 20:07:06', '2022-03-22 20:07:06'),
(39, 'Arsenio Robinson', 'Rerum accusantium al', NULL, '1', '167', '290', NULL, '2022-03-22 20:09:21', '2022-03-22 20:09:21'),
(40, 'Kendall Schwartz', 'In cillum quia in qu', NULL, '1', '600', '204', NULL, '2022-03-22 20:10:35', '2022-03-22 20:10:35'),
(41, 'Ralph Riddle', 'Ullam harum qui repr', NULL, '1', '182', '338', NULL, '2022-03-22 20:10:50', '2022-03-22 20:10:50'),
(42, 'Jason Byers', 'Sed incidunt volupt', NULL, '1', '586', '182', NULL, '2022-03-22 20:11:23', '2022-03-22 20:11:23'),
(43, 'Colette Beck', 'Enim laborum Quae f', NULL, '1', '756', '21', NULL, '2022-03-23 11:46:04', '2022-03-23 11:46:04'),
(44, 'Caleb Whitley', 'Aut ea voluptate iur', NULL, '1', '751', '561', 'product', '2022-03-23 12:37:51', '2022-03-23 12:37:51'),
(45, 'Caleb Whitley', 'Aut ea voluptate iur', NULL, '1', '751', '561', 'product', '2022-03-23 12:40:04', '2022-03-23 12:40:04'),
(46, 'Rama Chan', 'Fuga Commodi aut co', NULL, '1', '79', '292', 'product', '2022-04-01 19:51:18', '2022-04-01 19:51:18'),
(47, 'Jaime Erickson', 'Sint non perspiciat', NULL, '0', '137', '535', NULL, '2022-04-01 19:51:44', '2022-04-01 19:51:44'),
(48, 'ccxc', 'xcxcx', NULL, '1', '12', '12', NULL, '2022-09-07 10:52:17', '2022-09-07 10:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(20) UNSIGNED NOT NULL,
  `erp_team_name` varchar(255) DEFAULT NULL,
  `erp_status` varchar(255) DEFAULT NULL,
  `erp_package` varchar(255) DEFAULT NULL,
  `dependent_package` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `erp_team_name`, `erp_status`, `erp_package`, `dependent_package`, `created_at`, `updated_at`) VALUES
(98, 'team 1', '1', '[\"77\",\"73\"]', 77, '2022-06-11 16:38:16', '2022-06-11 16:38:31'),
(100, 'team 2', '1', '[\"77\",\"73\"]', 77, '2022-06-11 16:39:24', '2022-06-11 16:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `team_orders`
--

CREATE TABLE `team_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_team_id` int(10) UNSIGNED DEFAULT NULL,
  `erp_commission_id` int(10) UNSIGNED DEFAULT NULL,
  `erp_order_id` int(10) UNSIGNED DEFAULT NULL,
  `erp_user_id` int(10) UNSIGNED DEFAULT NULL,
  `available_status` varchar(255) DEFAULT NULL,
  `pick_status` varchar(255) DEFAULT NULL,
  `complete_status` varchar(255) DEFAULT NULL,
  `bid_date` varchar(255) DEFAULT NULL,
  `order_status` int(11) DEFAULT 0 COMMENT '1-deadline ext 2-revision 3-late 4-return',
  `reason` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_orders`
--

INSERT INTO `team_orders` (`id`, `erp_team_id`, `erp_commission_id`, `erp_order_id`, `erp_user_id`, `available_status`, `pick_status`, `complete_status`, `bid_date`, `order_status`, `reason`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1350, 98, 77, 599, NULL, '1', '0', '0', NULL, 0, NULL, '2023-02-15 20:47:57', '2023-02-15 23:19:56', NULL),
(1351, 98, 73, 599, NULL, '0', '0', '0', NULL, 0, NULL, '2023-02-15 20:47:57', '2023-02-15 20:47:57', NULL),
(1352, 98, 77, 604, 137, '1', '1', '0', NULL, 0, NULL, '2023-10-16 19:34:26', '2023-10-16 19:34:26', NULL),
(1353, 98, 73, 604, NULL, '0', '0', '0', NULL, 0, NULL, '2023-10-16 19:34:26', '2023-10-16 19:34:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userpivots`
--

CREATE TABLE `userpivots` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `monitor` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `erp_terminate` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userpivots`
--

INSERT INTO `userpivots` (`id`, `erp_user_id`, `monitor`, `status`, `erp_terminate`, `created_at`, `updated_at`) VALUES
(4, 106, '1', '1', NULL, '2022-04-07 13:16:33', '2022-04-07 13:16:33'),
(5, 106, '1', '0', NULL, '2022-04-07 15:24:35', '2022-04-07 15:24:35'),
(6, 106, '0', '0', NULL, '2022-04-07 15:24:51', '2022-04-07 15:24:51'),
(7, 106, '1', '1', NULL, '2022-04-07 15:25:05', '2022-04-07 15:25:05'),
(8, 106, '1', '2', NULL, '2022-04-07 15:25:12', '2022-04-07 15:25:12'),
(9, 106, '1', '0', NULL, '2022-04-07 15:38:23', '2022-04-07 15:38:23'),
(10, 106, '1', '1', NULL, '2022-04-07 16:07:30', '2022-04-07 16:07:30'),
(11, 106, '1', '1', NULL, '2022-04-08 11:55:29', '2022-04-08 11:55:29'),
(12, 106, '1', '1', NULL, '2022-04-08 11:58:17', '2022-04-08 11:58:17'),
(13, 106, '1', '1', NULL, '2022-04-08 11:58:17', '2022-04-08 11:58:17'),
(14, 113, '1', '1', NULL, '2022-04-09 16:56:05', '2022-04-09 16:56:05'),
(15, 92, '1', '1', NULL, '2022-04-11 15:37:57', '2022-04-11 15:37:57'),
(16, 92, '1', '1', NULL, '2022-04-11 15:53:34', '2022-04-11 15:53:34'),
(17, 106, '1', '1', NULL, '2022-04-11 15:53:42', '2022-04-11 15:53:42'),
(18, 106, '1', '1', NULL, '2022-04-11 15:54:04', '2022-04-11 15:54:04'),
(19, 106, '1', '1', NULL, '2022-04-11 16:01:16', '2022-04-11 16:01:16'),
(20, 106, '1', '1', NULL, '2022-04-11 16:02:16', '2022-04-11 16:02:16'),
(21, 106, '1', '1', NULL, '2022-04-11 16:04:34', '2022-04-11 16:04:34'),
(22, 106, '1', '1', NULL, '2022-04-11 16:04:56', '2022-04-11 16:04:56'),
(23, 106, '1', '1', NULL, '2022-04-11 16:05:16', '2022-04-11 16:05:16'),
(24, 106, '1', '0', NULL, '2022-04-11 16:07:05', '2022-04-11 16:07:05'),
(25, 106, '1', '1', NULL, '2022-04-11 16:11:58', '2022-04-11 16:11:58'),
(26, 106, '1', '1', NULL, '2022-04-11 16:12:19', '2022-04-11 16:12:19'),
(27, 106, '1', '1', NULL, '2022-04-11 16:12:22', '2022-04-11 16:12:22'),
(28, 106, '1', '2', NULL, '2022-04-11 16:13:00', '2022-04-11 16:13:00'),
(29, 106, '1', '1', NULL, '2022-04-12 14:24:31', '2022-04-12 14:24:31'),
(30, 114, '1', '1', NULL, '2022-04-13 01:02:27', '2022-04-13 01:02:27'),
(31, 115, '1', '1', NULL, '2022-04-13 01:04:56', '2022-04-13 01:04:56'),
(32, 116, '0', '1', NULL, '2022-04-13 01:18:39', '2022-04-13 01:18:39'),
(33, 116, '1', '1', NULL, '2022-05-16 19:05:28', '2022-05-16 19:05:28'),
(34, 116, '1', '1', NULL, '2022-05-16 19:05:38', '2022-05-16 19:05:38'),
(35, 116, '0', '1', NULL, '2022-05-16 19:06:22', '2022-05-16 19:06:22'),
(37, 131, '1', '1', NULL, '2022-05-18 19:03:14', '2022-05-18 19:03:14'),
(38, 78, '1', '0', NULL, '2022-05-28 15:38:28', '2022-05-28 15:38:28'),
(39, 78, '1', '1', NULL, '2022-05-31 14:12:12', '2022-05-31 14:12:12'),
(40, 78, '1', '1', '1', '2022-05-31 14:26:04', '2022-05-31 14:26:04'),
(41, 78, '1', '1', '0', '2022-05-31 14:27:10', '2022-05-31 14:27:10'),
(42, 78, '1', '2', '0', '2022-05-31 14:31:44', '2022-05-31 14:31:44'),
(43, 78, '1', '0', '1', '2022-05-31 14:32:00', '2022-05-31 14:32:00'),
(44, 78, '1', '0', '0', '2022-05-31 14:44:56', '2022-05-31 14:44:56'),
(45, 78, '1', '1', '0', '2022-05-31 14:45:07', '2022-05-31 14:45:07'),
(46, 78, '1', '1', '1', '2022-05-31 14:48:19', '2022-05-31 14:48:19'),
(47, 78, '1', '1', '1', '2022-05-31 14:59:40', '2022-05-31 14:59:40'),
(48, 78, '1', '1', '0', '2022-05-31 15:00:59', '2022-05-31 15:00:59'),
(49, 78, '1', '1', '1', '2022-05-31 15:01:18', '2022-05-31 15:01:18'),
(50, 131, '1', '1', '1', '2022-06-01 20:04:47', '2022-06-01 20:04:47'),
(51, 131, '1', '1', '0', '2022-06-01 20:07:11', '2022-06-01 20:07:11'),
(52, 132, '0', '1', NULL, '2022-06-01 20:23:29', '2022-06-01 20:23:29'),
(53, 133, '0', '1', NULL, '2022-06-01 20:28:50', '2022-06-01 20:28:50'),
(54, 133, '0', '1', '1', '2022-06-01 20:40:51', '2022-06-01 20:40:51'),
(55, 78, '1', '0', '1', '2022-06-07 19:05:58', '2022-06-07 19:05:58'),
(56, 78, '1', '2', '1', '2022-06-07 19:06:28', '2022-06-07 19:06:28'),
(57, 78, '1', '2', '0', '2022-06-07 19:22:09', '2022-06-07 19:22:09'),
(58, 78, '1', '1', '0', '2022-06-10 16:02:01', '2022-06-10 16:02:01'),
(59, 78, '1', '2', '0', '2022-06-10 16:02:12', '2022-06-10 16:02:12'),
(60, 133, '1', '1', NULL, '2022-06-11 18:52:55', '2022-06-11 18:52:55'),
(61, 78, '1', '1', NULL, '2022-06-11 20:24:56', '2022-06-11 20:24:56'),
(62, 78, '1', '0', NULL, '2022-09-11 12:47:12', '2022-09-11 12:47:12'),
(63, 78, '1', '1', NULL, '2022-09-11 12:47:24', '2022-09-11 12:47:24'),
(64, 134, '0', '1', NULL, '2022-09-11 15:24:44', '2022-09-11 15:24:44'),
(65, 135, '0', '1', NULL, '2022-09-12 11:30:06', '2022-09-12 11:30:06'),
(66, 136, '0', '1', NULL, '2022-09-12 11:38:24', '2022-09-12 11:38:24'),
(67, 137, '0', '1', NULL, '2023-10-14 15:54:23', '2023-10-14 15:54:23'),
(68, 137, '1', '1', NULL, '2023-10-14 16:04:00', '2023-10-14 16:04:00'),
(69, 85, NULL, '1', NULL, '2023-10-16 18:26:40', '2023-10-16 18:26:40'),
(70, 135, '1', '1', NULL, '2023-10-16 18:27:15', '2023-10-16 18:27:15'),
(71, 78, '1', '2', '0', '2023-10-16 18:28:43', '2023-10-16 18:28:43'),
(72, 137, '1', '2', '0', '2023-10-16 18:30:30', '2023-10-16 18:30:30'),
(73, 137, '1', '1', '0', '2023-10-16 18:31:25', '2023-10-16 18:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `erp_image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `quiz_is_done` varchar(255) DEFAULT NULL,
  `register_quiz` varchar(255) DEFAULT NULL,
  `user_is_approved` int(11) DEFAULT NULL,
  `cell_number` varchar(255) DEFAULT NULL,
  `alternative_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `erp_terminate` int(11) DEFAULT 0,
  `monitor` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_type`, `erp_image`, `email`, `email_verified_at`, `password`, `quiz_is_done`, `register_quiz`, `user_is_approved`, `cell_number`, `alternative_number`, `address`, `country`, `status`, `erp_terminate`, `monitor`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad yasir', 'admin', '1655120542811.jpg', 'info@admin.com', NULL, '$2y$10$IVhOGkOZok4Anj9xGH9eM.AlUZTN88i1QD8XateJLZik/YSygvUd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, 'bh6fkZCz5vQFgjnPThYZ1pKiOa0ButV0hYaznfOpKzUgHCLk14ay76prW7yp', '2021-10-03 06:56:49', '2022-06-13 16:42:22'),
(78, 'Yasir Khattak', 'worker', '1655127076437.jpg', 'Yasirkhattak46@gmail.com', '2021-12-25 23:02:21', '$2y$10$VCS2FdDY0f/VCBSiHl4oYOgIAAWzN/PsUyUmwyDGRJQFLo9padAQy', NULL, NULL, 2, NULL, NULL, NULL, NULL, 2, 0, '1', NULL, '2021-12-25 23:00:18', '2023-10-16 18:28:43'),
(84, 'john', 'worker', NULL, 'yasirkhattak@gmail.com', '2022-01-12 22:35:25', '$2y$10$fsoiR70s0gialihdLjOlKO5xt.KpHAnBUBKgdLDKFaGoKB3FTSwk2', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '1', NULL, '2022-01-12 22:04:30', '2022-01-12 22:35:25'),
(85, 'Muzammil', 'worker', NULL, 'muzammil@gmail.com', '2022-01-12 22:18:17', '$2y$10$mHmOuMffAqsix2RjviwwqOZzLQQFdMO5hBPsL0fuM1PHtNKNoaPhy', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2022-01-12 22:16:41', '2023-10-16 18:26:40'),
(86, 'aijaz', 'worker', NULL, 'muhammadaijaz711@gmail.com', '2022-01-12 22:23:26', '$2y$10$uTcU9zP1LxCpsPb2z98xHOPE/gdzyv0LUaBiKCCivpryVWZK0swyu', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '1', NULL, '2022-01-12 22:21:24', '2022-01-12 22:23:26'),
(87, 'yousufi', 'worker', NULL, 'naveedyousufi@gmail.com', '2022-01-12 22:25:12', '$2y$10$uJVACSWJk4hit89/cpzWtOeqvPD9aJNrY9EvNp4abihpSHUIUYXpC', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '1', NULL, '2022-01-12 22:23:58', '2022-01-12 22:25:12'),
(88, 'Moazzam', 'worker', NULL, 'moazzam@gmail.com', '2022-01-12 22:29:00', '$2y$10$A6l6lgmU02/iSQo1QjEHjec8/XBEWM03bMC88/N/G6RQW.XbMUgpi', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '1', NULL, '2022-01-12 22:26:09', '2022-01-12 22:29:00'),
(92, 'minhaj', 'worker', NULL, 'naveedullahwhere@gmail.com', '2022-01-12 22:41:12', '$2y$10$o99CQhcoG2xzMaBHfjRagenybUA7nE4QPa7MK5BVgWBgasPlyDd3S', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '1', NULL, '2022-01-12 22:39:58', '2022-03-03 16:45:02'),
(93, 'Naveed ullah', 'worker', NULL, 'naveedullahhere@gmail.com', '2022-01-12 22:49:54', '$2y$10$9qdrxWjosGbkiWsDLSs5luCLDvm.Lma7z4qN6NDhiKGD2O1GkY7WW', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '1', 'wM6oQQkaUMFzKKc7WVa9WVbavy8iJoGaUxvNGcYd6nQ3wBr3PYQOOEmoYZ4h', '2022-01-12 22:42:42', '2022-01-12 22:49:54'),
(94, 'Muhammad yas', 'customer', NULL, 'yasirshdwdahpk8@gmail.com', '2021-12-25 22:35:52', '$2y$10$KQmRLoPC9OJhCx1Pg4JIMOpOb.pNdefaMK.aw/i6QzU3VEp2euVSq', NULL, NULL, 1, '03132121', '097345', 'shahfaisal colony', 'pakistannnn', 1, 0, '1', 'LFHkQIiUaHFojyZhK4xCYET1ru4l7ya0drMuG3syTjCkSKkXoZWZ6giOlfvD', '2021-12-25 22:16:02', '2022-03-03 18:55:37'),
(106, 'Zeeshan Ali', 'worker', NULL, 'zeeshanali@gmail.com', '2022-03-23 19:47:46', '$2y$10$jgXF3jmk8vgC6dN4i8xvEOJUlRegr6FeNl.KZBAFVsU.e6FjFCv7e', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '1', NULL, '2022-03-23 19:46:11', '2022-04-12 14:24:31'),
(111, 'raza ahmed', 'worker', NULL, 'razaahmed@gmail.com', '2022-03-29 19:49:22', '$2y$10$5v5/ngPiRGclmZFbx8yFquMfOI7J181xxFZ2yA98Ebhfi8xD9fuYe', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '0', NULL, '2022-03-29 19:47:27', '2022-03-29 19:49:22'),
(113, 'Ejaz', 'worker', NULL, 'ejazhussain2050@gmail.com', '2022-04-09 16:54:17', '$2y$10$kTOC2f3k37Ij6ccApGxqzeQK5PTUULXYmf1gejua.uQg6p.xylr3q', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '1', NULL, '2022-04-09 16:53:34', '2022-04-09 16:56:05'),
(114, 'jack', 'worker', NULL, 'jaxkbilaakber362@gmail.com', NULL, '$2y$10$9lYy9W.Y8O9NPosZKKHYSOQklGWaYjTN0GxVPmKoIC2b0kLKGSj8W', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '1', NULL, '2022-04-13 01:01:05', '2022-04-13 01:02:27'),
(115, 'arix', 'worker', NULL, 'arizlakber362@gmail.com', '2022-04-13 01:05:49', '$2y$10$N/yG57yX3rhAVeTgwtWCPuSMYpQlaciXMiTNuXvN.MD2IKx8BKYjW', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '1', NULL, '2022-04-13 01:03:54', '2022-04-13 01:05:49'),
(116, 'bilal akber', 'worker', NULL, 'bilalakber362@gmail.com', '2022-04-13 01:19:18', '$2y$10$bb9hkNRMEsbsT5N8TVjTC.3BmCM/PE.yHVdJ6GBtulFdlHkqGLm2i', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '0', NULL, '2022-04-13 01:18:21', '2022-05-21 20:11:06'),
(117, 'Its a Writer', 'worker', NULL, 'itswriter03@gmail.com', NULL, '$2y$10$cfe/pqjVFjCfTrd7BRk/r.XrAK6SRHcPBF/6VyBnd0SVJCr1b24lm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2022-04-13 13:09:17', '2022-04-13 13:09:17'),
(118, 'uj', 'worker', NULL, 'njdbvhwb@gmail.com', NULL, '$2y$10$DeAs7Qg59yo2PRD3gKrxQeqVZFto2LzN/82eSpyZgiXpKmQ2etW1e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2022-04-23 13:31:59', '2022-04-23 13:31:59'),
(131, 'Ali Atta', 'worker', '1655120592894.jpg', 'yasirshahpk88@gmail.com', '2022-05-18 19:01:28', '$2y$10$Yf6lnksNC8QjVcwBX0943.k6xRCgrw3J93lYU9NYgnBoAa2nCZ7Lu', NULL, NULL, 1, '0311144037', '32101144556', 'nothing avenue', 'Pakistan', 1, 0, '1', NULL, '2022-05-18 19:00:47', '2022-06-13 16:43:12'),
(132, 'yas', 'worker', NULL, 'dqwd@gmail.com', NULL, '$2y$10$jPcUBwSFxYNVF/e9qzaA2uMRs0ugc63mVbJMFdAFqb7Fie9Hf/3QS', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, '0', NULL, '2022-06-01 20:21:12', '2022-06-01 20:23:29'),
(133, 'yasii', 'worker', NULL, 'yasirshahpkk8@gmail.com', '2022-06-01 20:31:00', '$2y$10$dKwkNeyKU0H7ZS1nK.PSZOg.A6KIpshqJM3d0EMcn03yy.8H98Db2', NULL, '1', 1, NULL, NULL, NULL, NULL, 1, NULL, '1', NULL, '2022-06-01 20:27:57', '2022-06-14 18:10:01'),
(134, 'Researcher 01', 'worker', NULL, 'itsaresearcher01@gmail.com', '2022-09-11 16:46:51', '$2y$10$uIYekwSqd5JHZbltGQGtUOgyswQbwvn2XCzEyFMXdmKhpMGyPgNyC', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, '0', 'SoeHnSgHsqG9a5pM6GK9kQSzGKtVy7V9TcGRNqp0Dwy9Ew5idN7NHFhRHb53', '2022-09-11 15:22:57', '2022-09-11 16:46:51'),
(135, 'Muhammad Yasir', 'worker', NULL, 'yasirshahpkkkk8@gmail.com', '2022-09-12 11:28:40', '$2y$10$iXFB0WMgmXk4jQlwIoPdXeOWPCCdgHx4JAg.OLmP9HUZNsPSKAFZ6', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, '1', NULL, '2022-09-12 11:28:01', '2023-10-16 18:27:15'),
(136, 'Muhammad Yasir', 'worker', NULL, 'yasirshahpk8@gmail.com', '2022-09-12 11:37:05', '$2y$10$Pa85KUhHMgR7UYlQ4mIxyu1wHsAVnQKydkhF083kvVYa2/kuEQfBi', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, '0', NULL, '2022-09-12 11:36:50', '2022-09-12 11:38:24'),
(137, 'Naveed', 'worker', NULL, 'spinizer346@gmail.com', '2023-10-14 15:55:44', '$2y$10$iCJMT4ZtH2vWOYBrAss8Y.oNehOGkhvoKOovda4j5cjAqASZjXNEG', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 0, '1', 'gPh6ZyRU9z6wFHzzjYiz920mZqylPINKD9VtwyqZklIRSoW2E638LOeQAu0p', '2023-10-10 22:19:58', '2023-10-16 18:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_bids`
--

CREATE TABLE `user_bids` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_order_id` int(10) UNSIGNED NOT NULL,
  `commission_id` int(10) UNSIGNED NOT NULL,
  `erp_status` varchar(255) NOT NULL DEFAULT '0',
  `erp_team_id` varchar(255) DEFAULT NULL,
  `erp_description` varchar(255) DEFAULT NULL,
  `erp_previous` varchar(255) DEFAULT NULL,
  `erp_datetime` varchar(255) DEFAULT NULL,
  `deadlineext` varchar(255) DEFAULT NULL,
  `exttype` varchar(250) DEFAULT NULL,
  `deadlinestatus` varchar(250) DEFAULT NULL COMMENT '0-pending 1-approved 2-reject',
  `reason` text DEFAULT NULL,
  `erp_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_bids`
--

INSERT INTO `user_bids` (`id`, `erp_user_id`, `erp_order_id`, `commission_id`, `erp_status`, `erp_team_id`, `erp_description`, `erp_previous`, `erp_datetime`, `deadlineext`, `exttype`, `deadlinestatus`, `reason`, `erp_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(451, 131, 598, 77, '1', '98', '<p>fwfwfwfwffw</p>', NULL, '2022-09-16 12:06:00', NULL, NULL, NULL, NULL, 'claim', '2022-09-12 12:05:29', '2022-09-12 12:05:29', NULL),
(452, 137, 604, 77, '1', '98', '<p>I can do this in no time&nbsp;</p>', NULL, '2023-10-17 07:34:00', NULL, NULL, NULL, NULL, 'claim', '2023-10-16 19:34:26', '2023-10-16 19:34:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `worker_quiz_answers`
--

CREATE TABLE `worker_quiz_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `erp_quiz_id` int(10) UNSIGNED NOT NULL,
  `erp_quiz_type` varchar(255) DEFAULT NULL,
  `erp_question_answer` varchar(255) DEFAULT NULL,
  `quiz_is_passed` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `worker_quiz_answers`
--

INSERT INTO `worker_quiz_answers` (`id`, `user_id`, `erp_quiz_id`, `erp_quiz_type`, `erp_question_answer`, `quiz_is_passed`, `created_at`, `updated_at`) VALUES
(96, 78, 20, 'signup', '{\"63\":\"Pettter\",\"64\":\"a woman\"}', NULL, '2021-12-25 23:00:27', '2021-12-25 23:00:27'),
(97, 78, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"Dell\",\"59\":\"JavaScript\"}', 0, '2021-12-25 23:01:44', '2021-12-25 23:01:44'),
(108, 84, 20, 'signup', '{\"63\":\"Pettter\",\"64\":\"a woman\"}', NULL, '2022-01-12 22:04:42', '2022-01-12 22:04:42'),
(109, 84, 18, 'signup', '{\"57\":\"Writing Management System\",\"58\":\"Dell\",\"59\":\"JavaScript\"}', 1, '2022-01-12 22:04:57', '2022-01-12 22:04:57'),
(110, 85, 20, 'signup', '{\"63\":\"John\",\"64\":\"a boy\"}', NULL, '2022-01-12 22:16:51', '2022-01-12 22:16:51'),
(111, 85, 18, 'signup', '{\"57\":\"Work Management System\",\"58\":\"HP\",\"59\":\"JavaScript\"}', 0, '2022-01-12 22:17:00', '2022-01-12 22:17:00'),
(112, 86, 20, 'signup', '{\"63\":\"Obama\",\"64\":\"a boy\"}', NULL, '2022-01-12 22:21:34', '2022-01-12 22:21:34'),
(113, 86, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"Mac book\",\"59\":\"JS\"}', 0, '2022-01-12 22:21:42', '2022-01-12 22:21:42'),
(114, 87, 20, 'signup', '{\"63\":\"Obama\",\"64\":\"a boy\"}', NULL, '2022-01-12 22:24:06', '2022-01-12 22:24:06'),
(115, 87, 18, 'signup', '{\"57\":\"Writing Management System\",\"58\":\"HP\",\"59\":\"JS\"}', 0, '2022-01-12 22:24:13', '2022-01-12 22:24:13'),
(116, 88, 20, 'signup', '{\"63\":\"John\",\"64\":\"a boy\"}', NULL, '2022-01-12 22:26:20', '2022-01-12 22:26:20'),
(117, 88, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"HP\",\"59\":\"JS\"}', 0, '2022-01-12 22:26:27', '2022-01-12 22:26:27'),
(124, 92, 20, 'signup', '{\"63\":\"Pettter\",\"64\":\"a woman\"}', NULL, '2022-01-12 22:40:10', '2022-01-12 22:40:10'),
(125, 92, 18, 'signup', '{\"57\":\"Writing Management System\",\"58\":\"Mac book\",\"59\":\"JS\"}', 1, '2022-01-12 22:40:25', '2022-01-12 22:40:25'),
(126, 93, 20, 'signup', '{\"63\":\"Pettter\",\"64\":\"a boy\"}', NULL, '2022-01-12 22:48:07', '2022-01-12 22:48:07'),
(127, 93, 18, 'signup', '{\"57\":\"Work Management System\",\"58\":\"Mac book\",\"59\":\"JS\"}', 0, '2022-01-12 22:48:16', '2022-01-12 22:48:16'),
(143, 106, 20, 'signup', '{\"63\":\"Pettter\",\"64\":\"a woman\"}', NULL, '2022-03-23 19:46:27', '2022-03-23 19:46:27'),
(144, 106, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"Dell\",\"59\":\"JavaScript\"}', 0, '2022-03-23 19:46:36', '2022-03-23 19:46:36'),
(148, 111, 20, 'signup', '{\"63\":\"Pettter\",\"64\":\"a woman\"}', NULL, '2022-03-29 19:47:44', '2022-03-29 19:47:44'),
(149, 111, 21, 'signup', '{\"65\":\"yes\"}', NULL, '2022-03-29 19:47:50', '2022-03-29 19:47:50'),
(150, 111, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"Dell\",\"59\":\"JavaScript\"}', 0, '2022-03-29 19:47:58', '2022-03-29 19:47:58'),
(154, 113, 20, 'signup', '{\"63\":\"Obama\",\"64\":\"a woman\"}', NULL, '2022-04-09 16:54:01', '2022-04-09 16:54:01'),
(155, 113, 21, 'signup', '{\"65\":\"yes\"}', NULL, '2022-04-09 16:54:22', '2022-04-09 16:54:22'),
(156, 113, 18, 'signup', '{\"57\":\"Work Management System\",\"58\":\"HP\",\"59\":\"JavaScript\"}', 0, '2022-04-09 16:54:39', '2022-04-09 16:54:39'),
(157, 114, 20, 'signup', '{\"63\":\"John\",\"64\":\"a man\"}', NULL, '2022-04-13 01:01:36', '2022-04-13 01:01:36'),
(158, 114, 21, 'signup', '{\"67\":\"Chemistry\"}', NULL, '2022-04-13 01:01:43', '2022-04-13 01:01:43'),
(159, 114, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"Dell\",\"59\":\"JavaScript\"}', 0, '2022-04-13 01:01:51', '2022-04-13 01:01:51'),
(160, 115, 20, 'signup', '{\"63\":\"Pettter\",\"64\":\"a woman\"}', NULL, '2022-04-13 01:04:14', '2022-04-13 01:04:14'),
(161, 115, 21, 'signup', '{\"67\":\"wow 3\"}', NULL, '2022-04-13 01:04:21', '2022-04-13 01:04:21'),
(162, 115, 18, 'signup', '{\"57\":\"Writing Management System\",\"58\":\"Dell\",\"59\":\"JavaScript\"}', 1, '2022-04-13 01:04:30', '2022-04-13 01:04:30'),
(163, 116, 20, 'signup', '{\"63\":\"Pettter\",\"64\":\"a woman\"}', NULL, '2022-04-13 01:18:47', '2022-04-13 01:18:47'),
(164, 116, 21, 'signup', '{\"67\":\"Chemistry\"}', NULL, '2022-04-13 01:18:54', '2022-04-13 01:18:54'),
(165, 116, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"Dell\",\"59\":\"JavaScript\"}', 0, '2022-04-13 01:19:02', '2022-04-13 01:19:03'),
(166, 118, 20, 'signup', '{\"63\":\"Pettter\",\"64\":\"a man\"}', NULL, '2022-04-23 13:32:25', '2022-04-23 13:32:25'),
(167, 118, 21, 'signup', '{\"67\":\"Chemistry\"}', NULL, '2022-04-23 13:32:31', '2022-04-23 13:32:31'),
(168, 118, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"Dell\",\"59\":\"JavaScript\"}', 0, '2022-04-23 13:32:40', '2022-04-23 13:32:40'),
(173, 131, 20, 'signup', '{\"63\":\"Pettter\",\"64\":\"a woman\"}', NULL, '2022-05-18 19:01:43', '2022-05-18 19:01:43'),
(174, 131, 18, 'signup', '{\"57\":\"Writing Management System\",\"58\":\"Dell\",\"59\":\"JavaScript\"}', 1, '2022-05-18 19:01:51', '2022-05-18 19:01:51'),
(199, 131, 21, 'login', '{\"67\":\"wow 5\"}', NULL, '2022-05-31 20:02:17', '2022-05-31 20:02:17'),
(200, 131, 21, 'login', '{\"67\":\"wow 5\"}', NULL, '2022-05-31 20:48:35', '2022-05-31 20:48:35'),
(202, 133, 20, 'signup', 'null', 1, '2022-06-01 20:31:17', '2022-06-14 18:10:01'),
(203, 133, 23, 'signup', 'null', 1, '2022-06-01 20:31:52', '2022-06-14 18:10:15'),
(204, 133, 25, 'signup', 'null', NULL, '2022-06-01 20:38:20', '2022-06-01 20:38:20'),
(205, 133, 25, 'signup', 'null', NULL, '2022-06-01 20:38:26', '2022-06-01 20:38:26'),
(206, 133, 25, 'signup', '{\"74\":\"wvw\"}', 0, '2022-06-01 20:38:32', '2022-06-01 20:38:32'),
(207, 133, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"HP\",\"59\":\"JavaScript\"}', 0, '2022-06-01 20:38:59', '2022-06-01 20:38:59'),
(240, 131, 19, 'login', '{\"60\":\"Computer Style Sheets\",\"61\":\"<stylesheet>mystyle.css<\\/stylesheet>\",\"66\":\"wd\",\"69\":null,\"70\":null}', NULL, '2022-06-14 13:29:22', '2022-06-14 13:29:22'),
(241, 131, 21, 'login', '{\"67\":\"Chemistry\",\"71\":\"America\"}', NULL, '2022-06-14 13:31:16', '2022-06-14 13:31:16'),
(242, 131, 21, 'login', '{\"67\":\"wow 5\",\"71\":\"America\"}', NULL, '2022-06-14 13:34:50', '2022-06-14 13:34:50'),
(247, 131, 19, 'login', '{\"60\":\"Computer Style Sheets\",\"61\":\"<stylesheet>mystyle.css<\\/stylesheet>\",\"66\":null,\"69\":null,\"70\":null}', NULL, '2022-06-14 17:56:30', '2022-06-14 17:56:30'),
(248, 131, 21, 'login', '{\"67\":\"wow 5\",\"71\":\"Ukraine\"}', NULL, '2022-06-14 17:58:15', '2022-06-14 17:58:15'),
(249, 135, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"Dell\",\"59\":\"JavaScript\"}', 0, '2022-09-12 11:28:50', '2022-09-12 11:28:50'),
(250, 135, 20, 'signup', '{\"63\":\"Pettter\",\"64\":\"a woman\"}', NULL, '2022-09-12 11:28:58', '2022-09-12 11:28:58'),
(251, 135, 23, 'signup', '{\"73\":\"6i\"}', NULL, '2022-09-12 11:29:06', '2022-09-12 11:29:06'),
(252, 135, 25, 'signup', '{\"74\":\"wvw\"}', 0, '2022-09-12 11:29:12', '2022-09-12 11:29:12'),
(253, 135, 26, 'signup', '{\"75\":\"1\"}', NULL, '2022-09-12 11:29:18', '2022-09-12 11:29:18'),
(254, 135, 27, 'signup', '{\"76\":\"because it is an Bug\",\"80\":\"Let me check again\",\"81\":\"It is necessary\"}', 0, '2022-09-12 11:29:27', '2022-09-12 11:29:27'),
(255, 136, 18, 'signup', '{\"57\":\"Work Management System\",\"58\":\"HP\",\"59\":\"JS\"}', 0, '2022-09-12 11:37:15', '2022-09-12 11:37:15'),
(256, 136, 20, 'signup', '{\"63\":\"Pettter\",\"64\":\"a man\"}', NULL, '2022-09-12 11:37:22', '2022-09-12 11:37:22'),
(257, 136, 23, 'signup', '{\"73\":\"rty\"}', NULL, '2022-09-12 11:37:30', '2022-09-12 11:37:30'),
(258, 136, 25, 'signup', '{\"74\":\"wvw\"}', 0, '2022-09-12 11:37:35', '2022-09-12 11:37:35'),
(259, 136, 26, 'signup', '{\"75\":\"1\"}', NULL, '2022-09-12 11:37:41', '2022-09-12 11:37:41'),
(260, 136, 27, 'signup', '{\"76\":null,\"77\":\"Talk to Yasir\",\"78\":\"Several Problems\",\"79\":\"No\",\"80\":null,\"81\":\"To complete the quiz\"}', 0, '2022-09-12 11:37:49', '2022-09-12 11:37:49'),
(261, 137, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"Mac book\",\"59\":\"JavaScript\"}', 1, '2023-10-14 15:55:59', '2023-10-14 15:55:59'),
(262, 137, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"Mac book\",\"59\":\"JavaScript\"}', 1, '2023-10-14 15:56:32', '2023-10-14 15:56:32'),
(263, 137, 18, 'signup', '{\"57\":\"Word Management System\",\"58\":\"Mac book\",\"59\":\"JavaScript\"}', 1, '2023-10-14 15:57:59', '2023-10-14 15:57:59'),
(264, 137, 20, 'signup', '{\"63\":\"Obama\",\"64\":\"a man\"}', NULL, '2023-10-14 15:59:23', '2023-10-14 15:59:23'),
(265, 137, 23, 'signup', '{\"73\":\"yigi\"}', NULL, '2023-10-14 15:59:33', '2023-10-14 15:59:33'),
(266, 137, 25, 'signup', '{\"74\":\"wvw\",\"82\":\"Yes I have a name\"}', 0, '2023-10-14 15:59:44', '2023-10-14 15:59:44'),
(267, 137, 26, 'signup', '{\"75\":\"1\"}', NULL, '2023-10-14 15:59:52', '2023-10-14 15:59:52'),
(268, 137, 27, 'signup', '{\"76\":\"because it is an Oversight\",\"77\":\"Talk to Yasir\",\"78\":\"Several Problems\",\"79\":\"Yes\",\"80\":\"Let me check again\",\"81\":\"To complete the quiz\"}', 0, '2023-10-14 16:00:23', '2023-10-14 16:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `work_flow`
--

CREATE TABLE `work_flow` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_work_flow_role` varchar(255) DEFAULT NULL,
  `erp_work_flow_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_flow`
--

INSERT INTO `work_flow` (`id`, `erp_user_id`, `erp_work_flow_role`, `erp_work_flow_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Writer', '1', '2021-10-05 18:18:08', '2021-10-12 16:51:55'),
(4, 1, 'Researcher', '1', '2021-10-05 18:26:49', '2021-10-05 18:26:49'),
(5, 1, 'Prof-reader', '1', '2021-10-05 18:30:25', '2021-10-05 18:30:25'),
(12, 1, 'Reviewer', '1', '2021-12-17 23:33:03', '2022-03-29 15:29:22'),
(19, 1, 'academic-writer', '1', '2022-05-22 14:23:33', '2022-05-22 14:23:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_levels`
--
ALTER TABLE `academic_levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academic_levels_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accounts_order_id_foreign` (`order_id`),
  ADD KEY `accounts_team_order_id_foreign` (`team_order_id`),
  ADD KEY `accounts_user_id_foreign` (`user_id`),
  ADD KEY `accounts_commission_id_foreign` (`commission_id`);

--
-- Indexes for table `add_commission`
--
ALTER TABLE `add_commission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `add_commission_erp_role_id_foreign` (`erp_role_id`),
  ADD KEY `add_commission_erp_level_id_foreign` (`erp_level_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignquiz`
--
ALTER TABLE `assignquiz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assignquiz_users_id_foreign` (`users_id`),
  ADD KEY `assignquiz_role_id_foreign` (`role_id`),
  ADD KEY `assignquiz_level_id_foreign` (`level_id`),
  ADD KEY `assignquiz_quizzes_foreign` (`quizzes`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bids_erp_user_id_foreign` (`erp_user_id`),
  ADD KEY `bids_erp_role_id_foreign` (`erp_role_id`);

--
-- Indexes for table `bounaspenalties`
--
ALTER TABLE `bounaspenalties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bounaspenalties_order_id_foreign` (`order_id`),
  ADD KEY `bounaspenalties_team_order_id_foreign` (`team_order_id`),
  ADD KEY `bounaspenalties_user_id_foreign` (`user_id`),
  ADD KEY `bounaspenalties_commission_id_foreign` (`commission_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citation__styles`
--
ALTER TABLE `citation__styles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citation__styles_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `commission`
--
ALTER TABLE `commission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commission_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `create_orders`
--
ALTER TABLE `create_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `create_orders_erp_user_id_foreign` (`erp_user_id`),
  ADD KEY `create_orders_erp_return_user_foreign` (`return_user`),
  ADD KEY `create_orders_erp_team` (`erp_team`),
  ADD KEY `erp_paper_type` (`erp_paper_type`),
  ADD KEY `erp_paper_format` (`erp_paper_format`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_types`
--
ALTER TABLE `document_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_types_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `instruction_pivots`
--
ALTER TABLE `instruction_pivots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instruction_pivots_erp_users_id_foreign` (`erp_users_id`),
  ADD KEY `instruction_pivots_erp_order_id_foreign` (`erp_order_id`);

--
-- Indexes for table `in_progress_orders`
--
ALTER TABLE `in_progress_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `in_progress_orders_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `language_styles`
--
ALTER TABLE `language_styles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_styles_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_auth_id_foreign` (`sender_id`),
  ADD KEY `messages_user_id_foreign` (`reciever_id`),
  ADD KEY `messages_commission_id_foreign` (`commission_id`),
  ADD KEY `messages_order_id_foreign` (`order_id`),
  ADD KEY `messages_team_id_foreign` (`team_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orderstatuspivots`
--
ALTER TABLE `orderstatuspivots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderstatuspivots_erp_user_id_foreign` (`erp_user_id`),
  ADD KEY `orderstatuspivots_order_id_foreign` (`order_id`);

--
-- Indexes for table `panelties`
--
ALTER TABLE `panelties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panelties_erp_users_id_foreign` (`erp_users_id`);

--
-- Indexes for table `paper_formats`
--
ALTER TABLE `paper_formats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paper_formats_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `paper_types`
--
ALTER TABLE `paper_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paper_types_erp_user_id_foreign` (`erp_user_id`);

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
-- Indexes for table `productpivots`
--
ALTER TABLE `productpivots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productpivots_product_id_foreign` (`product_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_erp_quiz_id_foreign` (`erp_quiz_id`);

--
-- Indexes for table `question_datas`
--
ALTER TABLE `question_datas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_datas_erp_quiz_id_foreign` (`erp_quiz_id`),
  ADD KEY `question_datas_erp_question_id_foreign` (`erp_question_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `registrationquizzes`
--
ALTER TABLE `registrationquizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registrationquizzes_user_id_foreign` (`user_id`),
  ADD KEY `registrationquizzes_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `requestpages`
--
ALTER TABLE `requestpages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requestpages_team_order_id_foreign` (`team_order_id`);

--
-- Indexes for table `request_pivots`
--
ALTER TABLE `request_pivots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_assigns`
--
ALTER TABLE `roles_assigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_assigns_user_id_foreign` (`user_id`),
  ADD KEY `roles_assigns_role_id_foreign` (`role_id`),
  ADD KEY `roles_assigns_level_id_foreign` (`level_id`),
  ADD KEY `roles_assigns_commission_id_foreign` (`commission_id`);

--
-- Indexes for table `subject_types`
--
ALTER TABLE `subject_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_types_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submissions_order_id_foreign` (`order_id`),
  ADD KEY `submissions_team_order_id_foreign` (`team_order_id`),
  ADD KEY `submissions_user_id_foreign` (`user_id`),
  ADD KEY `submissions_commission_id_foreign` (`commission_id`);

--
-- Indexes for table `subscriptionpivots`
--
ALTER TABLE `subscriptionpivots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptionpivots_subscription_id_foreign` (`subscription_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_orders`
--
ALTER TABLE `team_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_orders_erp_commission_id_foreign` (`erp_commission_id`),
  ADD KEY `team_orders_erp_team_id_foreign` (`erp_team_id`),
  ADD KEY `team_orders_erp_user_id_foreign` (`erp_user_id`),
  ADD KEY `team_orders_erp_order_id_foreign` (`erp_order_id`);

--
-- Indexes for table `userpivots`
--
ALTER TABLE `userpivots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userpivots_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_bids`
--
ALTER TABLE `user_bids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_bids_erp_user_id_foreign` (`erp_user_id`),
  ADD KEY `user_bids_erp_order_id_foreign` (`erp_order_id`),
  ADD KEY `user_bids_erp_add_comission_id_foreign` (`commission_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `worker_quiz_answers`
--
ALTER TABLE `worker_quiz_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `worker_quiz_answers_user_id_foreign` (`user_id`),
  ADD KEY `worker_quiz_answers_erp_quiz_id_foreign` (`erp_quiz_id`);

--
-- Indexes for table `work_flow`
--
ALTER TABLE `work_flow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_flow_erp_user_id_foreign` (`erp_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_levels`
--
ALTER TABLE `academic_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `add_commission`
--
ALTER TABLE `add_commission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `assignquiz`
--
ALTER TABLE `assignquiz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `bounaspenalties`
--
ALTER TABLE `bounaspenalties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `citation__styles`
--
ALTER TABLE `citation__styles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `commission`
--
ALTER TABLE `commission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `create_orders`
--
ALTER TABLE `create_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=607;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `document_types`
--
ALTER TABLE `document_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `instruction_pivots`
--
ALTER TABLE `instruction_pivots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `in_progress_orders`
--
ALTER TABLE `in_progress_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `language_styles`
--
ALTER TABLE `language_styles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orderstatuspivots`
--
ALTER TABLE `orderstatuspivots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `panelties`
--
ALTER TABLE `panelties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paper_formats`
--
ALTER TABLE `paper_formats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paper_types`
--
ALTER TABLE `paper_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productpivots`
--
ALTER TABLE `productpivots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `question_datas`
--
ALTER TABLE `question_datas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `registrationquizzes`
--
ALTER TABLE `registrationquizzes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `requestpages`
--
ALTER TABLE `requestpages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `request_pivots`
--
ALTER TABLE `request_pivots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles_assigns`
--
ALTER TABLE `roles_assigns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `subject_types`
--
ALTER TABLE `subject_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT for table `subscriptionpivots`
--
ALTER TABLE `subscriptionpivots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `team_orders`
--
ALTER TABLE `team_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1354;

--
-- AUTO_INCREMENT for table `userpivots`
--
ALTER TABLE `userpivots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `user_bids`
--
ALTER TABLE `user_bids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=453;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `worker_quiz_answers`
--
ALTER TABLE `worker_quiz_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `work_flow`
--
ALTER TABLE `work_flow`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_levels`
--
ALTER TABLE `academic_levels`
  ADD CONSTRAINT `academic_levels_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_commission_id_foreign` FOREIGN KEY (`commission_id`) REFERENCES `add_commission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `accounts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `create_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `accounts_team_order_id_foreign` FOREIGN KEY (`team_order_id`) REFERENCES `team_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `add_commission`
--
ALTER TABLE `add_commission`
  ADD CONSTRAINT `add_commission_erp_level_id_foreign` FOREIGN KEY (`erp_level_id`) REFERENCES `commission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `add_commission_erp_role_id_foreign` FOREIGN KEY (`erp_role_id`) REFERENCES `work_flow` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `assignquiz`
--
ALTER TABLE `assignquiz`
  ADD CONSTRAINT `assignquiz_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `commission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assignquiz_quizzes_foreign` FOREIGN KEY (`quizzes`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assignquiz_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `work_flow` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assignquiz_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `erp_role_id` FOREIGN KEY (`erp_role_id`) REFERENCES `work_flow` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bounaspenalties`
--
ALTER TABLE `bounaspenalties`
  ADD CONSTRAINT `bounaspenalties_commission_id_foreign` FOREIGN KEY (`commission_id`) REFERENCES `add_commission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bounaspenalties_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `create_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bounaspenalties_team_order_id_foreign` FOREIGN KEY (`team_order_id`) REFERENCES `team_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bounaspenalties_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `citation__styles`
--
ALTER TABLE `citation__styles`
  ADD CONSTRAINT `citation__styles_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `commission`
--
ALTER TABLE `commission`
  ADD CONSTRAINT `commission_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `create_orders`
--
ALTER TABLE `create_orders`
  ADD CONSTRAINT `create_orders_erp_return_user_foreign` FOREIGN KEY (`return_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `create_orders_erp_team` FOREIGN KEY (`erp_team`) REFERENCES `teams` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `create_orders_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `erp_paper_format` FOREIGN KEY (`erp_paper_format`) REFERENCES `citation__styles` (`id`),
  ADD CONSTRAINT `erp_paper_type` FOREIGN KEY (`erp_paper_type`) REFERENCES `document_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `document_types`
--
ALTER TABLE `document_types`
  ADD CONSTRAINT `document_types_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `instruction_pivots`
--
ALTER TABLE `instruction_pivots`
  ADD CONSTRAINT `instruction_pivots_erp_users_id_foreign` FOREIGN KEY (`erp_users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `in_progress_orders`
--
ALTER TABLE `in_progress_orders`
  ADD CONSTRAINT `in_progress_orders_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `language_styles`
--
ALTER TABLE `language_styles`
  ADD CONSTRAINT `language_styles_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_auth_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_commission_id_foreign` FOREIGN KEY (`commission_id`) REFERENCES `add_commission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `create_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`reciever_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orderstatuspivots`
--
ALTER TABLE `orderstatuspivots`
  ADD CONSTRAINT `orderstatuspivots_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orderstatuspivots_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `create_orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `panelties`
--
ALTER TABLE `panelties`
  ADD CONSTRAINT `panelties_erp_users_id_foreign` FOREIGN KEY (`erp_users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `paper_formats`
--
ALTER TABLE `paper_formats`
  ADD CONSTRAINT `paper_formats_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `paper_types`
--
ALTER TABLE `paper_types`
  ADD CONSTRAINT `paper_types_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `productpivots`
--
ALTER TABLE `productpivots`
  ADD CONSTRAINT `productpivots_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `subscriptions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_erp_quiz_id_foreign` FOREIGN KEY (`erp_quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `question_datas`
--
ALTER TABLE `question_datas`
  ADD CONSTRAINT `question_datas_erp_question_id_foreign` FOREIGN KEY (`erp_question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_datas_erp_quiz_id_foreign` FOREIGN KEY (`erp_quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registrationquizzes`
--
ALTER TABLE `registrationquizzes`
  ADD CONSTRAINT `registrationquizzes_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registrationquizzes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `requestpages`
--
ALTER TABLE `requestpages`
  ADD CONSTRAINT `requestpages_team_order_id_foreign` FOREIGN KEY (`team_order_id`) REFERENCES `team_orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `roles_assigns`
--
ALTER TABLE `roles_assigns`
  ADD CONSTRAINT `roles_assigns_commission_id_foreign` FOREIGN KEY (`commission_id`) REFERENCES `add_commission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_assigns_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `commission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_assigns_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `work_flow` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_assigns_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subject_types`
--
ALTER TABLE `subject_types`
  ADD CONSTRAINT `subject_types_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `submissions_commission_id_foreign` FOREIGN KEY (`commission_id`) REFERENCES `add_commission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `submissions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `create_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `submissions_team_order_id_foreign` FOREIGN KEY (`team_order_id`) REFERENCES `team_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `submissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subscriptionpivots`
--
ALTER TABLE `subscriptionpivots`
  ADD CONSTRAINT `subscriptionpivots_subscription_id_foreign` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_orders`
--
ALTER TABLE `team_orders`
  ADD CONSTRAINT `team_orders_erp_commission_id_foreign` FOREIGN KEY (`erp_commission_id`) REFERENCES `add_commission` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `team_orders_erp_order_id_foreign` FOREIGN KEY (`erp_order_id`) REFERENCES `create_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `team_orders_erp_team_id_foreign` FOREIGN KEY (`erp_team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `team_orders_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userpivots`
--
ALTER TABLE `userpivots`
  ADD CONSTRAINT `userpivots_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_bids`
--
ALTER TABLE `user_bids`
  ADD CONSTRAINT `user_bids_ibfk_1` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_bids_ibfk_2` FOREIGN KEY (`erp_order_id`) REFERENCES `create_orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `worker_quiz_answers`
--
ALTER TABLE `worker_quiz_answers`
  ADD CONSTRAINT `worker_quiz_answers_erp_quiz_id_foreign` FOREIGN KEY (`erp_quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `worker_quiz_answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `work_flow`
--
ALTER TABLE `work_flow`
  ADD CONSTRAINT `work_flow_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
