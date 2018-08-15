-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2018 at 01:42 PM
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
  `food_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `food_name`, `price`, `category`, `created_at`, `updated_at`, `food_photo`) VALUES
(1, 'Matooke', '6000', 'takeaway', '2018-08-15 01:46:37', '2018-08-15 01:49:16', '/storage/x8ldMPdJdXXR3Ntbbpfc2YewOC6npK57dGbyrYs9.jpeg'),
(2, 'Kalo mixed', '5000', 'localfood', '2018-08-15 01:48:01', '2018-08-15 01:48:01', '/storage/A32gs4Ppm0mjGeI4MZBFqCeg4Ka6F8aZPPT3zN2E.jpeg'),
(3, 'Matooke,Posho and Chapati', '7000', 'takeaway', '2018-08-15 03:28:37', '2018-08-15 03:28:37', '/storage/Dq5VBmfGVE3PuQlSCBV8ocM4oUewD9exA9oFYVuG.jpeg'),
(4, 'Chips with fried Fish', '9000', 'takeaway', '2018-08-15 03:33:37', '2018-08-15 03:33:37', '/storage/cf3kMhv5BVPjTJks4meGWCNOAfwEmGo1WZXmUHwV.jpeg'),
(5, 'Sweet Potatoe', '3500', 'takeaway', '2018-08-15 03:36:42', '2018-08-15 03:36:42', '/storage/PhJJ6Vul2c5I5rEcLLcOCGWPP4Wm7Co2jxmHQ66k.jpeg'),
(6, 'Rolex', '2500', 'takeaway', '2018-08-15 03:37:33', '2018-08-15 03:37:33', '/storage/eSVlW2ATlkiP4iAsuCY0HgOzcj2EC1CvKrKH8msk.jpeg'),
(7, 'Foods with Ovacado', '3000', 'localfood', '2018-08-15 10:32:40', '2018-08-15 10:32:40', '/storage/aRV9ggxp352Q1LiEchkiPjFwF5JXmxvN8RPpdJae.jpeg'),
(8, 'Pilau with beans', '4500', 'localfood', '2018-08-15 10:33:18', '2018-08-15 10:33:18', '/storage/flzfbdfJBhiTlk27LQV4DAMKSzBlyHm7wUlgv4v6.jpeg'),
(9, 'Sweet Potatoe with fish', '4500', 'localfood', '2018-08-15 10:34:22', '2018-08-15 10:34:22', '/storage/B4w8xiMoq163RbAbbqcO7AVo4ToTPO3FLYffKDed.jpeg'),
(10, 'All Foods with bush meat', '5000', 'localfood', '2018-08-15 10:35:08', '2018-08-15 10:35:08', '/storage/d4xoACi3mRydvQ8hObGsZZD84HgIKTQPEoVubfA1.jpeg');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_17_114813_create_foods_table', 1),
(4, '2018_07_17_120628_create_ordercategorgies_table', 1),
(5, '2018_07_17_120847_create_orders_table', 1),
(6, '2018_07_18_181835_modify_users_table', 1),
(7, '2018_07_21_123001_modify_foods_table', 1),
(8, '2018_07_21_203102_modify_orders_table', 1),
(9, '2018_07_23_063204_drop_ordercategorgies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `food_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `delivery_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` enum('not paid','paid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciept_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_status` enum('waiting','delivered') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `food_name`, `quantity`, `price`, `delivery_time`, `payment_status`, `reciept_number`, `delivery_status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sweet Potatoe', 1, 3500, '7:00 pm', 'paid', 'jsDpIFdMr2', 'delivered', '2018-08-15 04:00:21', '2018-08-15 04:04:28');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `address`, `phone_number`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Charles', 'Lwanga', 'Dyno Camp', '0794370683', 'manager@food.com', '$2y$10$U4rG3B2QZ9BwTNBdT0q0GehpcK50i9UFwpQcGW9Y6IG7KCHboeYRa', '15kvFg8hGEIL5Xqiekr6AomKNMEOhP1eFoJIYa2jJ4XDKcNee9hUwPCzUIHO', '2018-08-15 01:45:10', '2018-08-15 01:45:10'),
(2, 'Esther', 'Auma', 'Dyno Camp', 'o78943889', 'esther@gmail.com', '$2y$10$MBdFFIghAtMG2XsqGZD2pOOdbl6a.UFEXYR01CeodebaIA7JfoS7S', '7N5zsEFQvYjJH9axnHXhesFse406l1OzJ58oQCtIZeqnIudQZZei3jZoRorC', '2018-08-15 03:59:56', '2018-08-15 03:59:56'),
(3, 'James', 'Okoye', 'Wandegeya', '0786348849', 'man1@delivery.com', '$2y$10$zidUKyvKGkTBCpUBjleqYuibubU2NcEyuZnHMQNgHnEokna/1uaAC', 'ta0qaEmkgrbFU4U6vJFn6yjPIrnvJszrz5uawwp3Q8xXDjtQNtXB104oXgJm', '2018-08-15 10:40:49', '2018-08-15 10:40:49'),
(4, 'Joel', 'Okello', 'Wandegeya', '0777521185', 'joel@okello.com', '$2y$10$X1AR4hDHwHMlGoOIu/kBs.PQp5PQAdNrWl.xfC.FLPvDc.vG1KAWC', NULL, '2018-08-15 10:42:18', '2018-08-15 10:42:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
