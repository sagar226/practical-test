-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `blogs` (`id`, `title`, `desc`, `category`, `created_at`, `updated_at`) VALUES
(1,	'Migration',	'Generating Migrations Each migration file name contains a timestamp, which allows Laravel to determine the order of the migrations.',	'Laravel',	NULL,	NULL),
(2,	'eloquent',	'The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database.',	'Laravel',	NULL,	NULL),
(3,	'Oracle support',	'This is an aggregated feed of various blogs of Oracle support staff who work and support MySQL customers and users. ',	'MySQL',	NULL,	NULL),
(4,	'Migration',	'Generating Migrations Each migration file name contains a timestamp, which allows Laravel to determine the order of the migrations.',	'Laravel',	'2020-10-27 06:30:36',	'2020-10-27 06:30:36'),
(5,	'eloquent',	'The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database.',	'Laravel',	'2020-10-27 06:30:36',	'2020-10-27 06:30:36'),
(6,	'Oracle support',	'This is an aggregated feed of various blogs of Oracle support staff who work and support MySQL customers and users. ',	'MySQL',	'2020-10-27 06:30:36',	'2020-10-27 06:30:36');

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_blog_id_foreign` (`blog_id`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `comments` (`id`, `comment`, `blog_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1,	'new comments',	1,	1,	'2020-10-27 13:11:32',	'2020-10-27 13:11:32'),
(2,	'sasasa',	1,	12,	'2020-10-27 09:11:49',	'2020-10-27 09:11:49'),
(3,	'234',	1,	12,	'2020-10-27 09:11:56',	'2020-10-27 09:11:56');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(8,	'2020_10_27_114433_create_blogs_table',	3),
(9,	'2020_10_27_130046_create_comments_table',	4);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'sagar',	'sagar@gmail.com',	'$2y$10$Ox.9AMwzLpPUMYfUl2QRhu5qYY/2pxDXVGI9w0IdenT0Mc0kcOUMW',	NULL,	'2020-03-06 01:50:39',	'2020-03-06 01:50:39'),
(2,	'sagar1',	'sagar1@gmail.com',	'$2y$10$/KHlWQonhgyxfQItP6Y1v..UKKy3GDc2IDdSLKP/WRVEqv16tHHo2',	NULL,	'2020-03-06 02:07:30',	'2020-03-06 02:07:30'),
(3,	'sagar2',	'sagar2@gmail.com',	'$2y$10$.0GdqITCqgiAyee4Z1916uhjhXVIJcVICCAvzGQADrL76zIDaVrQ2',	NULL,	'2020-03-06 02:07:50',	'2020-03-06 02:07:50'),
(4,	'sagar12',	'sagar12@gmail.com',	'$2y$10$ZXpmmb841dYnVQwB1XMm2.8RIlvQx2mMbTi4efSa5Kw4l1V8azf1O',	NULL,	'2020-03-06 02:19:48',	'2020-03-06 02:19:48'),
(5,	'sagar21',	'sagar45@gmail.com',	'$2y$10$1WiU7XOrOpgsFYJy5Kr4QOigUOqvz5sy2U0QHIkNGuKKizrAlJU.y',	NULL,	'2020-03-13 01:57:24',	'2020-03-13 01:57:24'),
(7,	'sagar',	'sagarc@gmail.com',	'$2y$10$kPfTebTOdv88t2KTtrcYv.iMbglyuZPYEqxOn/hGfqpfvMHJadShy',	NULL,	'2020-10-27 09:06:04',	'2020-10-27 09:06:04'),
(9,	'sagar',	'sagarc34@gmail.com',	'$2y$10$19fK4K9BbrWrSnPPQNpLxuHI.HgTg7dJdHyOd/oYKPRf7yA9mFLc6',	NULL,	'2020-10-27 09:06:42',	'2020-10-27 09:06:42'),
(10,	'sagar',	'sagarchauhan@gmail.com',	'$2y$10$Zxxg7.8cyPAxB3oHJJhih.z8AjQaE42be/tkm3oxu1OLoSPCswldK',	NULL,	'2020-10-27 09:07:05',	'2020-10-27 09:07:05'),
(12,	'sagar',	'sagarchauhan12@gmail.com',	'$2y$10$ivJeQy0wN96XztvnQDTX4.h6dRxW6WEB1Y9Yk9YJlOIwPY8abx.WC',	NULL,	'2020-10-27 09:07:52',	'2020-10-27 09:07:52');

-- 2020-10-27 14:52:29
