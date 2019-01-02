-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 03:35 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice01_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `address_id` int(10) UNSIGNED NOT NULL,
  `present_address_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address_street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address_barangay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address_zipcode` int(11) NOT NULL,
  `permanent_address_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address_street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address_barangay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address_zipcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`address_id`, `present_address_no`, `present_address_street`, `present_address_barangay`, `present_address_city`, `present_address_country`, `present_address_zipcode`, `permanent_address_no`, `permanent_address_street`, `permanent_address_barangay`, `permanent_address_city`, `permanent_address_country`, `permanent_address_zipcode`) VALUES
(1, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960),
(2, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960),
(3, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960),
(4, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960),
(5, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960),
(6, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960),
(7, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960),
(8, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960, '532', 'C. Francisco St.', 'Maybancal', 'Morong, Rizal', 'Philippines', 1960);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(10) UNSIGNED NOT NULL,
  `primary_school_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_school_year_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_school_year_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_school_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_school_year_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_school_year_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_school_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_school_course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_school_year_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_school_year_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `primary_school_name`, `primary_school_year_from`, `primary_school_year_to`, `secondary_school_name`, `secondary_school_year_from`, `secondary_school_year_to`, `college_school_name`, `college_school_course`, `college_school_year_from`, `college_school_year_to`, `created_at`, `updated_at`) VALUES
(1, 'Tomas Claudio Memorial Elementary Shool', '1999', '2004', 'Morong National High School', '2005', '2008', 'Our Lady of Fatima University', 'BSIT', '2009', '2013', '2019-01-02 23:26:35', '2019-01-02 22:55:53'),
(2, 'Tomas Claudio Memorial Elementary Shool', '1999', '2004', 'Morong National High School', '2005', '2008', 'Our Lady of Fatima University', 'BSIT', '2009', '2013', '2019-01-02 22:31:41', '2019-01-02 22:31:41'),
(3, 'Tomas Claudio Memorial Elementary Shool', '1999', '2004', 'Morong National High School', '2005', '2008', 'Our Lady of Fatima University', 'BSIT', '2009', '2013', '2019-01-02 22:32:04', '2019-01-02 22:32:04'),
(4, 'Tomas Claudio Memorial Elementary Shool', '1999', '2004', 'Morong National High School', '2005', '2008', 'Our Lady of Fatima University', 'BSIT', '2009', '2013', '2019-01-02 22:32:38', '2019-01-02 22:32:38'),
(5, 'Tomas Claudio Memorial Elementary Shool', '1999', '2004', 'Morong National High School', '2005', '2008', 'Our Lady of Fatima University', 'BSIT', '2009', '2013', '2019-01-02 23:13:20', '2019-01-02 23:13:20'),
(6, 'Tomas Claudio Memorial Elementary Shool', '1999', '2004', 'Morong National High School', '2005', '2008', 'Our Lady of Fatima University', 'BSIT', '2009', '2013', '2019-01-02 23:18:07', '2019-01-02 23:18:07'),
(7, 'Tomas Claudio Memorial Elementary Shool', '1999', '2004', 'Morong National High School', '2005', '2008', 'Our Lady of Fatima University', 'BSIT', '2009', '2013', '2019-01-02 23:18:47', '2019-01-02 23:18:47'),
(8, 'Tomas Claudio Memorial Elementary Shool', '1999', '2004', 'Morong National High School', '2005', '2008', 'Our Lady of Fatima University', 'BSIT', '2009', '2013', '2019-01-02 23:20:03', '2019-01-02 23:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(10) UNSIGNED NOT NULL,
  `userRandomId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `userRandomId`, `firstname`, `lastname`, `gender`, `birthday`, `phone`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'xwGd7P7xXPSuZqTfTqjHS5QNKBOFEuzIHVlWHI0De3wv0jbq7xOgTjDcNukc', 'Edizon', 'Villegas', 'Female', '2019-11-02', '123456', 'storage/uploads/employees/default/1546439558.jpg', 1, NULL, '2019-01-02 22:55:53'),
(2, 'tPGVVCcV1UAYavbPKMcMUvSLOXjI8AXG9BA6ZcOpwnUQ2DEgXfZymnY5Ph2C', 'test', 'test', 'Male', '2019-01-02', '123456', 'storage/uploads/employees/default/1546441999.jpg', 1, '2019-01-02 23:13:19', '2019-01-02 23:13:19'),
(3, '6TyOJKwyZJZzEXP6CmUMcyD6jzC5O3w0uRpun4LHhYILKTYyDj6K9N07tgwb', 'juan', 'pedro', 'Male', '2019-01-02', '123456', 'storage/uploads/employees/default/1546442287.jpg', 1, '2019-01-02 23:18:07', '2019-01-02 23:18:07'),
(4, 'vInqF2pRttpJQJp1ozyxeIO1LOrrlxjv1QWpuTK2xHmoj2J1uYImhPtQZiY7', 'juan', 'pedro', 'Male', '2019-01-02', '123456', 'storage/uploads/employees/default/1546442313.jpg', 1, '2019-01-02 23:18:33', '2019-01-02 23:18:33'),
(5, 'TeQKHqcaQ9WLvHlgv33H0uuqmjA1Tj7miY9ipFMg4hdFOMFSyXndpOrIlKZ4', 'juan', 'pedro', 'Male', '2019-01-02', '123456', 'storage/uploads/employees/default/1546442327.jpg', 1, '2019-01-02 23:18:47', '2019-01-02 23:18:47'),
(6, 'k7q2I6NYRkS6vA8et0tEEFWNcTaL25MJUxV0ZgwXMXrQ8NhpUDpIRhj2oeYg', 'juan', 'pedro', 'Male', '2019-01-02', '123456', 'storage/uploads/employees/default/1546442403.jpg', 1, '2019-01-02 23:20:03', '2019-01-02 23:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `experienced_id` int(10) UNSIGNED NOT NULL,
  `experienced_user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experienced_company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experienced_company_position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experienced_company_start` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experienced_company_end` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`experienced_id`, `experienced_user_id`, `experienced_company_name`, `experienced_company_position`, `experienced_company_start`, `experienced_company_end`, `created_at`, `updated_at`) VALUES
(1, 'k7q2I6NYRkS6vA8et0tEEFWNcTaL25MJUxV0ZgwXMXrQ8NhpUDpIRhj2oeYg', '532', 'web developer', '2017', '2018', '2019-01-02 23:20:03', '2019-01-02 23:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `family_id` int(10) UNSIGNED NOT NULL,
  `mother_firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_birthdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_occupation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_birthdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_occupation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`family_id`, `mother_firstname`, `mother_lastname`, `mother_birthdate`, `mother_occupation`, `father_firstname`, `father_lastname`, `father_birthdate`, `father_occupation`, `created_at`, `updated_at`) VALUES
(1, 'emilyn', 'Villegas', '2019-01-02', 'house wife', 'eduardo', 'Villegas', '2019-01-02', 'ofw', '2019-01-02 23:26:34', '2019-01-02 22:55:53'),
(2, 'emilyn', 'pedro', '2019-01-02', 'house wife', 'juan', 'pedro', '2019-01-02', 'ofw', '2019-01-02 22:31:41', '2019-01-02 22:31:41'),
(3, 'emilyn', 'pedro', '2019-01-02', 'house wife', 'juan', 'pedro', '2019-01-02', 'ofw', '2019-01-02 22:32:03', '2019-01-02 22:32:03'),
(4, 'emilyn', 'pedro', '2019-01-02', 'house wife', 'juan', 'pedro', '2019-01-02', 'ofw', '2019-01-02 22:32:38', '2019-01-02 22:32:38'),
(5, 'emilyn', 'Villegas', '2019-01-02', 'house wife', 'eduardo', 'Villegas', '2019-01-02', 'ofw', '2019-01-02 23:13:19', '2019-01-02 23:13:19'),
(6, 'Angelly', 'Cantor', '2019-01-02', 'house wife', 'edizon', 'Villegas', '2019-01-02', 'ofw', '2019-01-02 23:18:07', '2019-01-02 23:18:07'),
(7, 'Angelly', 'Cantor', '2019-01-02', 'house wife', 'edizon', 'Villegas', '2019-01-02', 'ofw', '2019-01-02 23:18:47', '2019-01-02 23:18:47'),
(8, 'Angelly', 'Cantor', '2019-01-02', 'house wife', 'edizon', 'Villegas', '2019-01-02', 'ofw', '2019-01-02 23:20:03', '2019-01-02 23:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(31, '2019_01_02_143923_create_tasks_table', 2),
(51, '2019_01_02_143700_create_barangay_table', 4),
(52, '2019_01_02_151249_create_cities_table', 5),
(53, '2019_01_02_152906_create_countries_table', 5),
(54, '2019_01_02_152914_create_zipcodes_table', 5),
(73, '2014_10_12_000000_create_users_table', 6),
(74, '2014_10_12_100000_create_password_resets_table', 6),
(75, '2018_12_23_030746_create_employees_table', 6),
(76, '2019_01_02_143359_create_addresses_table', 6),
(77, '2019_01_02_143441_create_families_table', 6),
(78, '2019_01_02_143923_create_projects_table', 6),
(79, '2019_01_02_145107_create_status_table', 6),
(80, '2019_01_02_145844_create_tasks_table', 6),
(81, '2019_01_02_152756_create_education_table', 7),
(82, '2019_01_02_144655_create_school_addresses_table', 8),
(84, '2019_01_02_150040_create_experienced_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_addresses`
--

CREATE TABLE `school_addresses` (
  `school_address_id` int(10) UNSIGNED NOT NULL,
  `primary_address_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_address_street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_address_barangay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_address_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_address_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_address_zipcode` int(11) NOT NULL,
  `secondary_address_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_address_street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_address_barangay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_address_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_address_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_address_zipcode` int(11) NOT NULL,
  `college_address_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_address_street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_address_barangay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_address_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_address_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_address_zipcode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_addresses`
--

INSERT INTO `school_addresses` (`school_address_id`, `primary_address_no`, `primary_address_street`, `primary_address_barangay`, `primary_address_city`, `primary_address_country`, `primary_address_zipcode`, `secondary_address_no`, `secondary_address_street`, `secondary_address_barangay`, `secondary_address_city`, `secondary_address_country`, `secondary_address_zipcode`, `college_address_no`, `college_address_street`, `college_address_barangay`, `college_address_city`, `college_address_country`, `college_address_zipcode`, `created_at`, `updated_at`) VALUES
(1, '123', 's', 'test', 'Morong, Rizal', 'Philippines', 1960, '456', 's', 'test', 'Morong, Rizal', 'Philippines', 1960, '111', 'C. Francisco St.', 'mayvanca', 'Morong, Rizal', 'Philippines', 1961, '2019-01-02 22:32:38', '2019-01-02 22:55:53'),
(2, '123', 'C. Francisco St.', 'test', 'Morong, Rizal', 'Philippines', 1960, '456', 'C. Francisco St.', 'test', 'Morong, Rizal', 'Philippines', 1960, '111', 'C. Francisco St.', 'mayvanca', 'Morong, Rizal', 'Philippines', 1960, '2019-01-02 23:13:20', '2019-01-02 23:13:20'),
(3, '123', 'C. Francisco St.', 'test', 'Morong, Rizal', 'Philippines', 1960, '456', 'C. Francisco St.', 'test', 'Morong, Rizal', 'Philippines', 1960, '111', 'C. Francisco St.', 'mayvanca', 'Morong, Rizal', 'Philippines', 1960, '2019-01-02 23:18:07', '2019-01-02 23:18:07'),
(4, '123', 'C. Francisco St.', 'test', 'Morong, Rizal', 'Philippines', 1960, '456', 'C. Francisco St.', 'test', 'Morong, Rizal', 'Philippines', 1960, '111', 'C. Francisco St.', 'mayvanca', 'Morong, Rizal', 'Philippines', 1960, '2019-01-02 23:18:48', '2019-01-02 23:18:48'),
(5, '123', 'C. Francisco St.', 'test', 'Morong, Rizal', 'Philippines', 1960, '456', 'C. Francisco St.', 'test', 'Morong, Rizal', 'Philippines', 1960, '111', 'C. Francisco St.', 'mayvanca', 'Morong, Rizal', 'Philippines', 1960, '2019-01-02 23:20:03', '2019-01-02 23:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `name`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'Active', 0, NULL, NULL),
(2, 'In-Active', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `tasks_id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_coder` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `position`, `email`, `created_at`, `updated_at`, `remember_token`) VALUES
(0, 'edizon villegas', '$2y$10$nPeu7B4LjvG7J2v/XULnuugoRHq/xPahF679DBAsSzD57a.I/knAa', '1', 'edizonv@gmail.com', NULL, NULL, 'y3EMdDQ17Z4XzPedai5VOkG6pyrhZ2W4DZQQnBQ030fhoBGIEFYTXag4Wb8O'),
(1, 'Edizon Villegas', '$2y$10$Ehb8CPgRDJD4q4ox40ZMuu/EGbhYfTbHQHVJL92ba03K74U.W3xlm', '2', 'test@gmail.coma', '2019-01-02 22:32:38', '2019-01-02 22:55:53', NULL),
(2, 'test ', '$2y$10$oZdp4z8xwmFNEznYleqJdO3KD9Ur7xnFMXDEtB4UqCpcvEgqVyF7u', '2', 'test@gmail.com', '2019-01-02 23:13:19', '2019-01-02 23:13:19', NULL),
(3, 'juan ', '$2y$10$jU5XLDh126M90Zig04BZUOmfjD9d0OkKwVeEJqRsYnyMixdKC5fQq', '2', 'juan@pedro.com', '2019-01-02 23:18:07', '2019-01-02 23:18:07', NULL),
(5, 'juan ', '$2y$10$YiVwH1B3LJgkD8z22FgCn.Hk//jTWs7BiK1lnFHZV6CVhpay3RFQm', '2', 'juan@pedro.comtest', '2019-01-02 23:18:47', '2019-01-02 23:18:47', NULL),
(6, 'juan ', '$2y$10$T2Z0sIVbojBKByzTNN.QReViTArqM1bvZs3MvF4wUjVV96TP310.u', '2', 'juan@pedro.comtessst', '2019-01-02 23:20:03', '2019-01-02 23:20:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`experienced_id`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`family_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `school_addresses`
--
ALTER TABLE `school_addresses`
  ADD PRIMARY KEY (`school_address_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`tasks_id`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `experienced_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `family_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_addresses`
--
ALTER TABLE `school_addresses`
  MODIFY `school_address_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `tasks_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
