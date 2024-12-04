-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 29, 2024 at 04:04 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinejobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE IF NOT EXISTS `applications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `job_listing_id` int NOT NULL,
  `job_seeker_id` int NOT NULL,
  `status` enum('submitted','approved','rejected') COLLATE utf8mb4_general_ci DEFAULT 'submitted',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cover_latter` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `expierence` int NOT NULL,
  `qualification` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `job_listing_id` (`job_listing_id`),
  KEY `job_seeker_id` (`job_seeker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `job_listing_id`, `job_seeker_id`, `status`, `created_at`, `updated_at`, `cover_latter`, `resume`, `expierence`, `qualification`) VALUES
(7, 7, 9, 'submitted', '2024-07-11 15:36:58', '2024-07-11 15:36:58', '0', '0', 0, ''),
(8, 8, 10, 'submitted', '2024-07-11 15:36:58', '2024-07-11 15:36:58', '0', '0', 0, ''),
(9, 9, 9, 'submitted', '2024-07-11 15:36:58', '2024-07-11 15:36:58', '0', '0', 0, ''),
(10, 8, 11, 'submitted', '2024-07-23 14:21:51', '2024-07-23 14:21:51', '', '', 0, ''),
(11, 8, 11, 'submitted', '2024-07-23 14:28:03', '2024-07-23 14:28:03', '', '', 0, ''),
(12, 9, 11, 'submitted', '2024-07-23 14:31:33', '2024-07-23 14:31:33', 'cover_latters/lyYp59d6KsFqhIfZOX27e21YYlBzvciVpEKUQj9G.pdf', 'resumes/M2wCbdevCLeQWPLNXajkixlUN1VIOprNjW2XUr46.pdf', 0, ''),
(13, 12, 11, 'submitted', '2024-07-24 14:15:21', '2024-07-24 14:15:21', 'cover_latters/NRhR0pS2rEXYkq2eYVYrl7J5BZCp3XVT78u1fdqH.png', 'resumes/4fyyBgPOTLUfVshfX28V6Lpf4eCH60w3jIZjVaqx.png', 0, ''),
(14, 12, 11, 'submitted', '2024-07-24 14:15:55', '2024-07-24 14:15:55', 'cover_latters/zjhcqwx1O9clirF9KKNS2wvZ7Ze59U92T1JzHCz9.png', 'resumes/WFxY4PeIuTUGJWd0AjqC0YTh8ABwDUC4wCQzOL8s.png', 0, ''),
(15, 7, 11, 'submitted', '2024-07-25 11:11:00', '2024-07-25 11:11:00', 'cover_latters/t9TTWOwdL3ZlcsHHnt2faj31H0DXfPwfXjc1GhyX.jpg', 'resumes/7bAkyQgLdWYgcbmW6p3zJuray6PptZPCsIdEpeuw.jpg', 0, ''),
(16, 17, 14, 'submitted', '2024-07-25 11:24:06', '2024-07-25 11:24:06', 'cover_latters/5tPvKQhFMSlChXZ5SfU2v9lzJtOvGKlaTnkxTLMR.jpg', 'resumes/1GIElImqJbSGi2OhlqVFhboDWvH6pq5c4H75EzbW.jpg', 0, ''),
(17, 18, 14, 'submitted', '2024-07-26 12:16:39', '2024-07-26 12:16:39', 'cover_latters/v3eMY7tTcccNHiPL8JD61aMaJr52fDzYQPuaYSoI.jpg', 'resumes/sVgPAblxhJCOPLkvI4NmfCaTJfXuj55nujAJ1eWp.jpg', 0, ''),
(18, 9, 14, 'submitted', '2024-07-26 14:35:27', '2024-07-26 14:35:27', 'cover_latters/NQiICzAe9caogoxFX5XGbBVgbwbpOtxghxczsftD.jpg', 'resumes/ypSF0WNd6BoE4Ggzbhc0iGiu0UpJmVMSgUdWaGrV.jpg', 0, ''),
(19, 19, 18, 'submitted', '2024-11-24 12:18:00', '2024-11-25 04:55:46', 'cover_latters/WPyKI80Wzl62eqEIQ2B49jMw5JBlMYmjTOxWee5n.png', 'resumes/Xy1koIzzTHZtjPLve8oLd17AGs6qw2TR0pCyBm0u.png', 0, ''),
(20, 20, 16, 'submitted', '2024-11-24 12:46:54', '2024-11-24 12:46:54', 'cover_latters/ZVLSo9xKo1rb3P32ZwgbyHtXCJzphuTw6gHIUt3i.png', 'resumes/84iYS42eRVxYFjCTqnzmkmo8WNJ0LAr01yFNmgGJ.png', 0, ''),
(21, 20, 19, 'submitted', '2024-11-27 16:39:41', '2024-11-27 16:39:41', 'cover_latters/vDflpINGzyiEiUcBXj5XsEKf0irv9HEMVUViGm1g.png', 'resumes/NlvLeVvQc7DmAfuB0iTpz7nCsgsYq237pCcFwZwu.png', -1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

DROP TABLE IF EXISTS `employers`;
CREATE TABLE IF NOT EXISTS `employers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_general_ci,
  `logo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `employer_image` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `user_id`, `company_name`, `contact_person`, `phone`, `address`, `logo`, `created_at`, `updated_at`, `employer_image`) VALUES
(1, 2, 'ABC Company', 'John Doe', '123-456-7890', '123 Main St, City, Country', 'company_logo1.png', '2024-07-18 12:05:24', '2024-07-18 12:05:24', '0'),
(2, 3, 'XYZ Corporation', 'Jane Smith', '987-654-3210', '456 Oak Ave, Town, Country', 'company_logo2.png', '2024-07-18 12:05:24', '2024-07-18 12:05:24', '0'),
(3, 11, 'xilist', NULL, '03174756311', 'Muzaffargarh, Pakistan, 34200', NULL, '2024-07-18 07:18:15', '2024-07-19 15:33:33', '0'),
(4, 12, 'abdullah', NULL, NULL, NULL, NULL, '2024-07-19 10:41:34', '2024-07-22 19:43:05', '0'),
(5, 13, 'Asad', NULL, NULL, NULL, NULL, '2024-07-19 10:52:56', '2024-07-22 19:43:10', '0'),
(6, 15, 'xilist', NULL, '03039027736', 'Muzaffargarh, Pakistan, 34200', NULL, '2024-07-25 11:20:27', '2024-07-25 11:22:52', NULL),
(7, 16, NULL, NULL, NULL, NULL, NULL, '2024-07-26 14:55:01', '2024-07-26 14:55:01', NULL),
(8, 17, 'Zuhaab Manufactures', NULL, '03000000000', 'Lahore, PK', NULL, '2024-11-23 23:31:32', '2024-11-24 12:45:52', NULL),
(9, 18, 'Zuhaab Manufactures', NULL, '03000000000', 'Lahore, PK', NULL, '2024-11-24 12:12:15', '2024-11-24 12:16:00', NULL),
(10, 19, NULL, NULL, NULL, NULL, NULL, '2024-11-24 23:55:13', '2024-11-24 23:55:13', NULL),
(11, 20, NULL, NULL, NULL, NULL, NULL, '2024-11-27 02:03:29', '2024-11-27 02:03:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_listings`
--

DROP TABLE IF EXISTS `job_listings`;
CREATE TABLE IF NOT EXISTS `job_listings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employer_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `requirements` text COLLATE utf8mb4_general_ci,
  `location` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job_type` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `qualification` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `expierence` int NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `employer_id` (`employer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_listings`
--

INSERT INTO `job_listings` (`id`, `employer_id`, `title`, `description`, `requirements`, `location`, `job_type`, `salary`, `qualification`, `expierence`, `status`, `created_at`, `updated_at`) VALUES
(7, 2, 'Web Developer', 'We are looking for a skilled web developer to join our team.', 'Experience with HTML, CSS, JavaScript required.', 'City A', 'Full-time', 60000.00, '', 0, NULL, '2024-07-11 15:32:38', '2024-07-11 15:32:38'),
(8, 2, 'Marketing Manager', 'Seeking a dynamic individual to lead our marketing efforts.', 'Experience in digital marketing and team management.', 'City B', 'Full-time', 70000.00, '', 0, NULL, '2024-07-11 15:32:38', '2024-07-11 15:32:38'),
(9, 1, 'Software Engineer', 'Join our innovative team working on cutting-edge technologies.', 'Strong background in Java and Python.', 'City C', 'Full-time', 80000.00, '', 0, NULL, '2024-07-11 15:32:38', '2024-07-11 15:32:38'),
(12, 3, 'qwe', 'eew', 'qwe', 'wq', '1', 12334.00, '', 0, NULL, '2024-07-18 15:25:31', '2024-07-18 15:25:31'),
(13, 3, 'pp', 'sss', 'aaaa', 'llll', 'Part Time', 77388.00, '', 0, NULL, '2024-07-18 15:27:11', '2024-07-19 15:40:11'),
(14, 5, 'Web Develpor', 'some some', 'Full stack develpore , Bootstarp', 'Lahore', 'Part Time', 20000.00, '', 0, 'active', '2024-07-19 10:55:02', '2024-07-19 10:55:02'),
(17, 6, 'Mobile Application', 'Do all type of work', 'Flutter', 'Pindi', 'Online', 100000.00, '', 0, 'active', '2024-07-25 11:22:09', '2024-07-25 11:22:09'),
(18, 6, 'Flutter', 'KKHHGGGGGGGG', 'html ,bootstrap', 'Ali pur', 'Online', 20000.00, '', 0, 'active', '2024-07-26 12:15:00', '2024-07-26 12:15:00'),
(19, 9, 'Web Development', 'description', 'Maximum 6 year expierence\r\nGood grid git/github or any remote collab system', 'Ali town, Lahore', 'Full Time', 300000.00, '', 0, 'active', '2024-11-24 12:14:19', '2024-11-24 12:14:19'),
(20, 8, 'Laravel Developer', 'description', '6monrth expierence', 'Ali town, Lahore', 'Full Time', 45000.00, '', 0, 'active', '2024-11-24 12:44:08', '2024-11-24 12:44:08'),
(23, 11, 'Web Development', 'afsg', 'asfg', 'LHR', 'Full Time', 2342344.00, '', 12, 'active', '2024-11-27 16:40:26', '2024-11-27 16:40:26'),
(24, 11, 'Muhammadz', 'khajkshfjkasdhjk', 'kjahjkfahsdkf', 'jhkfsahjk', 'Full Time', 12000.00, 'msc', 12, 'active', '2024-11-28 23:01:45', '2024-11-28 23:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `job_seekers`
--

DROP TABLE IF EXISTS `job_seekers`;
CREATE TABLE IF NOT EXISTS `job_seekers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_general_ci,
  `resume` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cover_letter` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_seekers`
--

INSERT INTO `job_seekers` (`id`, `user_id`, `first_name`, `last_name`, `phone`, `address`, `resume`, `cover_letter`, `created_at`, `updated_at`) VALUES
(9, 3, 'Michael', 'Johnson', '555-123-4567', '789 Elm Rd, Village, Country', 'resume_michael.pdf', 'Cover letter text goes here', '2024-07-18 12:04:38', '2024-07-18 12:04:38'),
(10, 2, 'Emily', 'Brown', '555-987-6543', '321 Maple Dr, Suburb, Country', 'resume_emily.pdf', 'Cover letter text goes here', '2024-07-18 12:04:38', '2024-07-18 12:04:38'),
(11, 11, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-18 07:18:15', '2024-07-18 07:18:15'),
(12, 12, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-19 10:41:34', '2024-07-19 10:41:34'),
(13, 13, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-19 10:52:56', '2024-07-19 10:52:56'),
(14, 15, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-25 11:20:27', '2024-07-25 11:20:27'),
(15, 16, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-26 14:55:01', '2024-07-26 14:55:01'),
(16, 17, NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-23 23:31:32', '2024-11-23 23:31:32'),
(17, 18, NULL, NULL, NULL, NULL, NULL, NULL, '2024-11-24 12:12:15', '2024-11-24 12:12:15'),
(18, 19, 'Muhammad Zuhaab', NULL, NULL, NULL, NULL, NULL, '2024-11-24 23:55:13', '2024-11-24 23:55:13'),
(19, 20, 'Muhammad Zuhaab UR Rahman', NULL, NULL, NULL, NULL, NULL, '2024-11-27 02:03:29', '2024-11-27 02:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sender_id` int NOT NULL,
  `receiver_id` int NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `sender_id` (`sender_id`),
  KEY `receiver_id` (`receiver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `created_at`) VALUES
(1, 2, 3, 'Regarding Job Application', 'Hello Michael, thank you for applying to the Web Developer position.', '2024-07-11 15:38:19'),
(2, 3, 2, 'Job Inquiry', 'Hi Jane, I am interested in learning more about the Software Engineer role.', '2024-07-11 15:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2024_07_12_114733_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
CREATE TABLE IF NOT EXISTS `reports` (
  `id` int NOT NULL AUTO_INCREMENT,
  `report_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `report_type` enum('job_listings','user_engagement','application_statistics') COLLATE utf8mb4_general_ci NOT NULL,
  `report_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `generated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `report_name`, `report_type`, `report_data`, `generated_at`) VALUES
(1, 'Job Listings Report', 'job_listings', '{\"total_count\": 3, \"active_count\": 3}', '2024-07-11 15:42:27'),
(2, 'User Engagement Report', 'user_engagement', '{\"total_users\": 3, \"active_users\": 3}', '2024-07-11 15:42:27'),
(3, 'Application Statistics', 'application_statistics', '{\"total_applications\": 3, \"pending_applications\": 3}', '2024-07-11 15:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qKqPp4HeNKjVY5UYnEEnzWee3RQY3Ri4V68vMwzm', 20, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'ZXlKcGRpSTZJakJIUkVSeVJsTk1ZbFJXY0U1d1EwcE9PRnBaVm5jOVBTSXNJblpoYkhWbElqb2lRVkZGYTBSQlJDODJOR0ZxWkhORU5GQm5TM1ZqTVVOTlFXUlZjMlpQVEhselVHSmxjV1JvUWs4NVVESkxXRGdyV0VOcFYwbFpVVGRsY0dGT2FXMDNTVE5OY2xOaU5XaEpNM0ZzTVc5dWNqQlNjVTR4VFZWdFJ6TkpaMUZxZVVSbGJteHBSMjl1UlZCaVNVa3JVR05JUjFKM2RGTlZibGR0VEUxRmVqaFJSSEZ1ZUVGS1drdFZTalZzVkhwc2RUVm9jREZZYkVFMVJuWkpiWHBvU0dZM05rWnBjeXR2VWs5SlJHaEJSMWxSYUZKVE5scGhOelZtYUZONVQzWjNRVGhzSzNnMU5UTnlZazVCUVVsTWVXdzVaRVY1TTB4aFp6WjBNRkpzV1ZGWk1reDVOQzlwT0RSTlQybFJPV2ROYm5KaFRWVmlVMDUzWlRWV1NHbHdZMU5VVHpaa0wyRTBPU3RJVWsxTFptb3dNbHByUVdGdE1FVjJhbHBIU2xwTmVrZFRaMnhvTWpsUlRYaHpWM1JNT0VWV1ozVkZWVW80Wkd0d2NXRnZTMkZ6Tm01eFlVdEtiUzl5TTBaa01ISm5XRFZaVEVjMFRsbEpRbkYxV1hWaGNEZG5UVVE0VFhOSE0zbzRTa3hqUFNJc0ltMWhZeUk2SWpka09XWXpOV0pqT0RjeU9EZ3dNMkk1WmpSaE5ETmxabU5tWVRsaE5tUXhOVFl4WWpOaE9XTmhOekF6WVRoaVlUWXlPREl6WldSbU1UWXdaakUxWm1FaUxDSjBZV2NpT2lJaWZRPT0=', 1732852968);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','employer','job_seeker') COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@example.com', 'password', 'admin', '2024-07-11 12:36:33', '2024-07-11 12:36:33'),
(2, 'Employer User', 'employer@example.com', 'password', 'employer', '2024-07-11 12:36:33', '2024-07-11 12:36:33'),
(3, 'Job Seeker User', 'jobseeker@example.com', 'password', 'job_seeker', '2024-07-11 12:36:33', '2024-07-11 12:36:33'),
(11, 'Zuhaab', 'su92-f22-bssem-034@superior.edu.pk', '$2y$12$4IZ2DVBcLiXSIun2Tp3al.eL4W/o5.8sEYaWZz4HBCCcbN2DA8F2O', 'employer', '2024-07-18 07:18:15', '2024-07-19 17:14:39'),
(12, 'Zuhaab', 'su92-bssem-f22-036@superior.edu.pk', '$2y$12$tUXFI6xIB1w8yEtsMAFuw.6iEtqb4r06FcFpr/6RBKJ23dVsqi.5u', 'employer', '2024-07-19 10:41:34', '2024-07-19 22:08:00'),
(13, 'Abdullah', 'sadaqatameen039@gmail.com', '$2y$12$sCQqLx.cwJ1bjvFHw/E8WugDZJWXjMhF2OMD/Tw3aDfFkY796bsOW', 'employer', '2024-07-19 10:52:56', '2024-07-19 10:52:56'),
(14, 'ALi Ahmad', 'AbdullahSadaqat.235@gmail.com', '$2y$12$TroLQ3J5DSNIRCIRIBh8Ueg8zFyV6QfLwHkDeCtFn33BfKmoAFSS6', 'employer', '2024-07-25 11:18:19', '2024-07-25 11:18:19'),
(15, 'ALi Ahmad', 'abdullahsadaqat.232@gmail.com', '$2y$12$sfnKJPRw/TmzYVc4wQkSQunx9VWoU2s6IC8Ar5W0HL7zIK7ASJX9m', 'employer', '2024-07-25 11:20:27', '2024-07-26 11:19:10'),
(16, 'Saqib', 'saqiba.739@gmail.com', '$2y$12$qNnIo2YEfaRQHCeXzzTU1u3WU.nMIn8iTHpZUOeqlXGd0fY.YhpWC', 'employer', '2024-07-26 14:55:01', '2024-07-26 14:55:01'),
(17, 'Muhammad Zuhaab', 'muhamamdzuhaab0009@gmail.com', '$2y$12$QsdWTttAVfqtdk53jlZ3keT21qAx2yVwe58AyoJCe.2oYdJ4lJMa2', 'employer', '2024-11-23 23:31:32', '2024-11-24 12:45:52'),
(18, 'Muhammad Zuhaab', 'muhammadzuhaab@admin.com', '$2y$12$Vlpt.nYMRZNLmUu/IuzA3u609YWXf./o.dvWxXNAOqJI4LIgLksR2', 'employer', '2024-11-24 12:12:15', '2024-11-24 12:16:00'),
(19, 'Muhammad Zuhaab', 'muhammadzuhaab0@admin.com', '$2y$12$i0p98nX.4cXGx4sxMrOlfeShass26KkPWJ2fRyXbGhP49/QcgEBRO', 'employer', '2024-11-24 23:55:13', '2024-11-24 23:55:13'),
(20, 'Muhammad Zuhaab UR Rahman', 'muhammadzuhaab009@gmail.com', '$2y$12$xhjACflYpFXof3GKNGzB6uOa/q9II3RgCful4jOAO31OGJvW6utF6', 'employer', '2024-11-27 02:03:29', '2024-11-27 02:03:29');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`job_listing_id`) REFERENCES `job_listings` (`id`),
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seekers` (`id`);

--
-- Constraints for table `employers`
--
ALTER TABLE `employers`
  ADD CONSTRAINT `employers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `job_listings`
--
ALTER TABLE `job_listings`
  ADD CONSTRAINT `job_listings_ibfk_1` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`);

--
-- Constraints for table `job_seekers`
--
ALTER TABLE `job_seekers`
  ADD CONSTRAINT `job_seekers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
