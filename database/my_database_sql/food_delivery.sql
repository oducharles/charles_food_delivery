-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2018 at 07:42 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

DROP TABLE IF EXISTS `foods`;
CREATE TABLE IF NOT EXISTS `foods` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `food_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=221 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `food_name`, `price`, `category`, `created_at`, `updated_at`) VALUES
(220, 'Chicken Tikka', '25000', 'takeaway', '2018-07-20 15:51:47', '2018-07-20 15:51:47'),
(219, 'Posho', '2000', 'local food', '2018-07-20 14:48:31', '2018-07-20 14:48:31'),
(218, 'Matooke', '2000', 'local food', '2018-07-20 14:43:19', '2018-07-20 14:43:19'),
(217, 'Rice', '300', 'Take away', '2018-07-20 14:42:47', '2018-07-20 14:42:47'),
(212, 'Pilao', '7000', 'Take Away', '2018-07-20 13:41:06', '2018-07-20 13:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_17_114813_create_foods_table', 1),
(4, '2018_07_17_120628_create_ordercategorgies_table', 1),
(5, '2018_07_17_120847_create_orders_table', 1),
(6, '2018_07_18_181835_modify_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ordercategorgies`
--

DROP TABLE IF EXISTS `ordercategorgies`;
CREATE TABLE IF NOT EXISTS `ordercategorgies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_type` enum('local food','take away') COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordercategorgies`
--

INSERT INTO `ordercategorgies` (`id`, `order_type`, `food_photo`, `created_at`, `updated_at`) VALUES
(23, 'take away', 'https://lorempixel.com/640/480/?69236', NULL, NULL),
(22, 'local food', 'https://lorempixel.com/640/480/?33952', NULL, NULL),
(21, 'take away', 'https://lorempixel.com/640/480/?29708', NULL, NULL),
(14, 'local food', '4', NULL, NULL),
(15, 'take away', '9', NULL, NULL),
(16, 'take away', '6', NULL, NULL),
(17, 'take away', '3', NULL, NULL),
(18, 'local food', '9', NULL, NULL),
(19, 'local food', '6', NULL, NULL),
(20, 'local food', '5', NULL, NULL),
(24, 'take away', 'https://lorempixel.com/640/480/?45947', NULL, NULL),
(25, 'take away', 'https://lorempixel.com/640/480/?35177', NULL, NULL),
(26, 'take away', 'https://lorempixel.com/100/100/?57455', NULL, NULL),
(27, 'local food', 'https://lorempixel.com/100/100/?78361', NULL, NULL),
(28, 'local food', 'https://lorempixel.com/100/100/?78517', NULL, NULL),
(29, 'take away', 'https://lorempixel.com/100/100/?15615', NULL, NULL),
(30, 'take away', 'https://lorempixel.com/100/100/?92345', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `delivery_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` enum('not paid','paid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciept_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_status` enum('waiting','delivered') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_food_name_foreign` (`food_name`),
  KEY `orders_order_category_foreign` (`order_category`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `food_name`, `order_category`, `quantity`, `price`, `delivery_time`, `payment_status`, `reciept_number`, `delivery_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Beans', 'yes', 1, 5000, '1:00 pm', 'not paid', 'str_rand(8)', 'waiting', '2018-07-18 11:25:22', '2018-07-18 11:25:22'),
(2, '5', 'Peas', 'yes', 1, 5000, '1:00 pm', 'not paid', 'str_rand(8)', 'waiting', '2018-07-18 12:34:22', '2018-07-18 12:34:22'),
(3, '6', 'Peas', 'yes', 1, 5000, '1:00 pm', 'paid', '$this->id', 'delivered', '2018-07-18 18:46:36', '2018-07-20 13:12:23'),
(8, '7', 'beans', 'yes', 1, 5000, '2:30 pm', 'paid', '7', 'delivered', '2018-07-20 00:47:10', '2018-07-20 00:47:10'),
(5, '6', 'beans', 'yes', 1, 5000, '2:30 pm', 'paid', '6', 'delivered', '2018-07-19 03:13:33', '2018-07-19 03:13:33'),
(6, '6', 'beans', 'yes', 1, 5000, '2:30 pm', 'paid', '6', 'delivered', '2018-07-19 07:18:22', '2018-07-19 07:18:22'),
(7, '6', 'beans', 'yes', 1, 5000, '1:00 pm', 'paid', '6', 'delivered', '2018-07-19 08:59:05', '2018-07-19 08:59:05'),
(9, '7', 'beans', 'yes', 4, 5000, '1:00 pm', 'paid', '7', 'delivered', '2018-07-20 01:15:18', '2018-07-20 01:15:18'),
(10, '7', 'beans', 'yes', 1, 5000, '1:00 pm', 'not paid', '7', 'waiting', '2018-07-20 08:50:40', '2018-07-20 08:50:40'),
(11, '7', 'beans', 'yes', 1, 5000, '1:00 pm', 'not paid', '7', 'waiting', '2018-07-20 08:55:44', '2018-07-20 08:55:44'),
(12, '7', 'beans', 'yes', 1, 5000, '1:00 pm', 'not paid', '7', 'waiting', '2018-07-20 09:04:30', '2018-07-20 09:04:30'),
(13, '7', 'beans', 'yes', 1, 5000, '1:00 pm', 'not paid', '7', 'waiting', '2018-07-20 09:04:41', '2018-07-20 09:04:41'),
(14, '7', 'beans', 'yes', 1, 5000, '1:00 pm', 'not paid', '7', 'waiting', '2018-07-20 09:05:13', '2018-07-20 09:05:13'),
(15, '8', 'beans', 'yes', 1, 5000, '1:00 pm', 'not paid', '8', 'waiting', '2018-07-20 09:19:08', '2018-07-20 09:19:08'),
(16, '8', 'beans', 'yes', 1, 5000, '1:00 pm', 'not paid', '8', 'waiting', '2018-07-20 10:56:15', '2018-07-20 10:56:15'),
(17, '8', 'beans', 'yes', 1, 5000, '1:00 pm', 'not paid', '8', 'waiting', '2018-07-20 10:56:41', '2018-07-20 10:56:41'),
(18, '8', 'beans', 'yes', 1, 5000, '1:00 pm', 'not paid', '8', 'waiting', '2018-07-20 10:58:48', '2018-07-20 10:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `address`, `phone_number`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'ghjk', 'hjk', 'hjk', '789987', 'tom@tom.com', '$2y$10$qGVeH1r/AT7NpvpMNDHuguQmagTBcHnkO0FcmGG02FtaOQalOI5NO', 'WBpYTZIRrQRYdI7Y7wvjDhoKICU2BEcmWoFhzfoZ9E49Q69nGBQeAN0LBoPr', '2018-07-18 09:38:03', '2018-07-18 09:38:03'),
(3, 'ocl', 'Carolus', 'Mitchel', '0794370683', 'ocl@ocl.com', '$2y$10$Cnk.5sJDTF8pZV8OQepdH.YcfQHtXC8IIup/O0E8p.WObaJp7XUmm', '1oORc3xjhRlbUlnuJBuPzzpXuIbiDnLEk3Fe9d7k1oi4SZRtEqlFchUspkuX', '2018-07-18 09:40:38', '2018-07-18 09:40:38'),
(4, 'fghjk', 'fghjk', 'fghjk', '5678', '123@123.com', '$2y$10$oreY2EEIeP1yxZ8He2D/NOHpG6m5KHeZjgDwsHpFVFiwPZ8g6PrDS', 'kEx707wZ1VvFsq4ypeEFxk6dn1s85QLENINY6zJ5TI6GNjt7mnRMm9pFWi9k', '2018-07-18 09:57:42', '2018-07-18 09:57:42'),
(5, 'james', 'ian', 'uh', '0794370683', 'james@james.com', '$2y$10$8sQnZ.CTq6QVpEhWoO0ZqudyzM0Lef6V0oPMuOBmW5QpcDPdahKnm', 'XYEU8n3Q5hhy7nhT6PGSEG50NPPWDdPE43T6fi7LPzgcZZAFge69oJe2wAIb', '2018-07-18 12:31:09', '2018-07-18 12:31:09'),
(6, 'charles', 'lwanga', 'senate buliding', '0782928349', 'charles@test.com', '$2y$10$mU2002gBGc5rveCQRDReM.z2dPkUxr89w8e17.3vv6c/QrgA042LW', 'MJ1NLmUFfz2wAHYHf6L8kHNgT19n7TjUz69aPM1OwcjRo8hvAZIkfJkQvXQg', '2018-07-18 13:45:09', '2018-07-18 13:45:09'),
(7, 'joel', 'okello', 'Livingsone hall', '0777521185', 'okello@joel.com', '$2y$10$kVCDgps60wFzZQE3/VyOyedSGJypdDOMNDrbfjZJZLosL6O8Kc9xO', 'SXMCnax2gbq5b9kRb9G012NaVVZMUo8xVNIiQMzSFUaea4r9zbE37gvsaQ3P', '2018-07-20 00:38:26', '2018-07-20 00:38:26'),
(8, 'Okonye', 'John', 'Africa Hall', '0777521185', 'john@f.com', '$2y$10$ZQ4HHqUJfxAOAY/asmXD1OkCCYqyNLcxZwks.fOWTnzd6.lpAyO9C', 'xJG7fjIgQju0S78K5mYW8QvfKx1DEmju5LbjimDliQKVsJACJ4vfaIHPsVHQ', '2018-07-20 09:13:23', '2018-07-20 10:56:41'),
(9, 'Jane', 'Doe', 'Complex Hall', '0794370683', 'jane@jane.com', '$2y$10$jrXFC7zu6T05Wb90l/wzc.15ehWAU9A.cwIAkzF5t47YN1D3UQyVC', '4MgbgGLD0ShxT5w8gELliA9Ov4xZUxXB4xXGl5rTlbaK6jumTFECoZZJfzsi', '2018-07-20 09:20:52', '2018-07-20 09:20:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
