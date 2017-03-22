-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `quickstart2`;
CREATE DATABASE `quickstart2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `quickstart2`;

DROP TABLE IF EXISTS `auction products`;
CREATE TABLE `auction products` (
  `auction_no` int(255) unsigned NOT NULL,
  `auction_name` varchar(100) NOT NULL,
  `start date` datetime NOT NULL,
  `end date` datetime NOT NULL,
  `betting style` varchar(100) NOT NULL,
  `maximum` int(255) NOT NULL,
  `minimum` int(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2017_01_29_083525_create_tasks_table',	1),
(4,	'2017_03_09_000000_create_shoppingcart_table',	2),
(6,	'2017_03_14_021156_create_wishlist_table',	3)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `migration` = VALUES(`migration`), `batch` = VALUES(`batch`);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_no` int(255) unsigned NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` int(255) NOT NULL,
  `cost` int(255) NOT NULL,
  `specification` varchar(1000) NOT NULL,
  `Catalog` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `receivers`;
CREATE TABLE `receivers` (
  `receiver_name` varchar(1000) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tasks_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tasks` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(6,	2,	'123456',	'2017-03-05 22:22:10',	'2017-03-05 22:22:10'),
(7,	1,	'1234574646574',	'2017-03-07 23:08:23',	'2017-03-07 23:08:23')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `user_id` = VALUES(`user_id`), `name` = VALUES(`name`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `type_no` int(255) unsigned NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokens_quantity` int(255) NOT NULL,
  `credit card_number` int(255) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `birthday`, `phone_number`, `address`, `tokens_quantity`, `credit card_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Chang Yuwei',	'xinrudaogelweil@gmail.com',	'$2y$10$/0taZmwogIp2flSQFBBJD.HV5s7H/Ax6x7f5LddPRm31fT/le1Hn2',	'',	'0000-00-00',	'',	'',	0,	0,	'LUmt8AVbkrmrGIvkvqcnGwC2ojEIa32W5f7cBUa9LjoB36dMhCcyrGmJ1TNn',	'2017-03-01 20:18:17',	'2017-03-01 20:18:17'),
(2,	'林楷宇',	'ken91165@gmail.com',	'$2y$10$U971kd5ZCcVw416Nue5AUetn6XnWNIJKh.nQdZS9GtPNGeESEO6zO',	'',	'0000-00-00',	'',	'',	0,	0,	'0mGb9neHjy6G0acHOp1HvnejJ67hnxT29OrirFKQj6hzDundqUw4pvFUh1x0',	'2017-03-03 18:05:58',	'2017-03-03 18:05:58'),
(3,	'yyyyyyyyyyy',	'test1@gmail.com',	'$2y$10$X/iwcVxrrk64dvTA4NtcLefnSD6XPpBI9zvejVbfQ51dQmgp407om',	'',	'0000-00-00',	'',	'',	0,	0,	'ajCuJ8NDa6Aoml3fgGCVKruTGBBn377GZjQ5ds7kDgVNGI3Z6XDliZoukwp9',	'2017-03-08 01:29:03',	'2017-03-08 01:29:03')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `email` = VALUES(`email`), `password` = VALUES(`password`), `gender` = VALUES(`gender`), `birthday` = VALUES(`birthday`), `phone_number` = VALUES(`phone_number`), `address` = VALUES(`address`), `tokens_quantity` = VALUES(`tokens_quantity`), `credit card_number` = VALUES(`credit card_number`), `remember_token` = VALUES(`remember_token`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `wishlists`;
CREATE TABLE `wishlists` (
  `wish_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `aucyion_no` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`wish_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `wishlists` (`wish_id`, `id`, `aucyion_no`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1,	1,	1,	4,	NULL,	NULL,	NULL)
ON DUPLICATE KEY UPDATE `wish_id` = VALUES(`wish_id`), `id` = VALUES(`id`), `aucyion_no` = VALUES(`aucyion_no`), `quantity` = VALUES(`quantity`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`), `deleted_at` = VALUES(`deleted_at`);

-- 2017-03-22 04:01:03
