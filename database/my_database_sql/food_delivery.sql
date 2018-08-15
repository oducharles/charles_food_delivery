-- MySQL dump 10.13  Distrib 5.5.61, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: food_delivery
-- ------------------------------------------------------
-- Server version	5.5.61-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `foods`
--

DROP TABLE IF EXISTS `foods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `food_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `food_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foods`
--

LOCK TABLES `foods` WRITE;
/*!40000 ALTER TABLE `foods` DISABLE KEYS */;
INSERT INTO `foods` VALUES (1,'Matooke','2500','localfood','2018-08-15 20:24:10','2018-08-15 20:24:10','/storage/LsJzMQhcIji942qXytMZmpdxDv7sdoDeJIjtHkbM.jpeg'),(2,'Sweet Potatoe with fish','4500','localfood','2018-08-15 20:24:58','2018-08-15 20:24:58','/storage/7I4ztEY65wff42eb8aT15xJUaUxThBbDVvBsyd9q.jpeg'),(3,'Kalo','5000','localfood','2018-08-15 20:26:38','2018-08-15 20:26:38','/storage/gXybpbZ7MD0WiZZzqdqi62QQCNHJi9LzSLXq85R5.jpeg'),(4,'Chips with fried Fish','7000','takeaway','2018-08-15 20:27:07','2018-08-15 20:27:07','/storage/QaM72MOZ3x8D0miFigPeMraBJNm1At4nEAAJUuRY.jpeg'),(5,'Rolex','3000','localfood','2018-08-15 20:27:33','2018-08-15 20:27:33','/storage/RVYDUMKTEcMcrXmDD0QGEnAbBIalxSKQ2NU2oR9m.jpeg'),(6,'Matooke,Posho and Chapati','9000','takeaway','2018-08-15 20:30:08','2018-08-15 20:30:08','/storage/iehAx5WptPElJ4wYaQDfc8SOze9SyKyZG7TloJhi.jpeg'),(7,'Rice and Fish','5000','takeaway','2018-08-15 20:30:43','2018-08-15 20:30:43','/storage/GVS9lUqQGtc6Ip1dRMu5v3R79eiZJCxFCAp2xrdJ.jpeg'),(8,'Pilau with Beans','4500','localfood','2018-08-15 20:31:23','2018-08-15 20:31:23','/storage/2liWmjPfbNf7WdeDfdvESEZiakmJieAsAXuUnE8B.jpeg'),(9,'All Foods','9000','takeaway','2018-08-15 20:32:27','2018-08-15 20:32:27','/storage/NYflpDKBTYN7JrW40aMrdvYEYDBCDQ10VjOOdy1Z.jpeg'),(10,'All Foods with bush meat','6000','takeaway','2018-08-15 20:32:57','2018-08-15 20:32:57','/storage/vZW2KFRBMjiTApcHDVqWjBfShsgCcJlT77rTIq9P.jpeg');
/*!40000 ALTER TABLE `foods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_07_17_114813_create_foods_table',1),(4,'2018_07_17_120628_create_ordercategorgies_table',1),(5,'2018_07_17_120847_create_orders_table',1),(6,'2018_07_18_181835_modify_users_table',1),(7,'2018_07_21_123001_modify_foods_table',1),(8,'2018_07_21_203102_modify_orders_table',1),(9,'2018_07_23_063204_drop_ordercategorgies_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
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
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'OduCharles','Lwanga','Wandegeya','0782928349','manager@food.com','$2y$10$kQh84vYryhU7CgFwZ4BpFOY7/o1oZP3xH0Ld.cm3zwESGatnPujXW',NULL,'2018-08-15 20:23:36','2018-08-15 20:23:36'),(2,'James','Gordon','Wandegeya','0799336678','man1@delivery.com','$2y$10$rxvmkI5g5clLrND2L12yI.3Lf4xapbZBg7rZkcT4yAsnnVOnKUEn6','0cHqPxkYwiaP1WwudRHGG40dZ0lQ9w0GJUcaCHMWUzOI62JzD5dLv4sKsf2M','2018-08-15 20:33:58','2018-08-15 20:33:58'),(3,'Joel','Okello','Livingstone Hall','0777521185','joel@okello.com','$2y$10$C02RhjCofqPVerUNhtrHzuq73RB97Y4kjykkdaTujEB00hqXL9anu','klFR9Rspr8nYExb2LiW350sgzyO3glnUskMMA9ukGDTbn6Z06Nq4AXMJBAea','2018-08-15 20:37:04','2018-08-15 20:37:04'),(4,'Esther','Auma','Dyno Camp','0786348849','esther@gmail.com','$2y$10$/0lnKq.vAGKFI1Gpnk8TMeE9sLwbItkbXxp2.PgOHsslGaLg17mQO',NULL,'2018-08-15 20:38:14','2018-08-15 20:38:14');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-15 22:45:32
