-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2016 at 10:02 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mickey',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `company`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'siddartha k', 'mickey', 'siddartha1511996@gmail.com', 'hyderabad', '9573868368', '2016-02-23 09:08:34', '2016-02-23 13:52:20'),
(2, 'roman', 'mickey', 'atword@gmail.com', 'ohaio US', '7876876567', '2016-02-23 09:08:34', '2016-02-23 08:47:17'),
(3, 'vitaly', 'mickey', 'vitaly@gmail.com', 'moscow russia', '6767676767', '2016-02-23 09:08:34', '2016-02-23 08:47:17'),
(6, 'noha', 'mickey', 'noha@gmail.com', 'US', '9809878987', '2016-02-23 09:08:34', '2016-02-23 08:47:17'),
(7, 'kane', 'mickey', 'kane@gmail.com', 'US', '5656565656', '2016-02-23 09:08:34', '2016-02-23 08:47:17'),
(9, 'louis', 'mickey', 'louis@gmail.com', 'sethaphalmani', '1234567890', '2016-02-23 13:05:08', '2016-02-23 13:05:08'),
(10, 'siddu', 'sourceeasy', 'siddu@gmail.com', 'hyderabad', '1234567890', '2016-02-23 21:59:22', '2016-02-23 21:59:22'),
(11, 'prashanth', 'sourceeasy', 'prashanth@gmail.com', 'nagole', '1234567890', '2016-02-23 21:59:58', '2016-02-23 21:59:58'),
(12, 'sharath', 'tripod', 'sharath@gmail.com', 'hyderabad', '1234567890', '2016-02-23 22:00:24', '2016-02-23 22:00:24'),
(13, 'venkat', 'tripod', 'venkat@gmail.com', 'hyderabad', '1234567890', '2016-02-23 22:00:47', '2016-02-23 22:00:47'),
(14, 'ankur', 'sourceeasy', 'ankur@gmail.com', 'banjarahills', '9876543210', '2016-02-23 22:01:35', '2016-02-23 22:01:35'),
(15, 'himan', 'sourceeasy', 'himan@soueceeasy.com', 'banjarahills', '1234567890', '2016-02-23 22:01:59', '2016-02-23 22:01:59'),
(16, 'frena', 'sourceeasy', 'frena@gmail.com', 'gfdsa', '1234567890', '2016-02-24 14:16:03', '2016-02-24 14:16:03'),
(17, 'himan reddy', 'surceeasy', 'himan@gmail.com', 'banjarahills', '1234567890', '2016-02-25 05:33:52', '2016-02-25 05:33:52'),
(18, 'louisestherwatson', 'sourceeasy', 'hima@gmail.com', 'asdfghjk', '1234567890', '2016-02-25 20:31:16', '2016-02-25 20:31:16'),
(19, 'polisetty moulika', 'sourceeasy', 'mouli@gmail.com', 'hyd', '7702473815', '2016-03-01 03:16:43', '2016-03-01 03:22:46'),
(20, 'sai abhishek', 'sourceeasy', 'sai@gmail.com', 'hyderabad', '9866958028', '2016-03-01 03:27:14', '2016-03-01 03:57:54'),
(22, 'louis', 'google', 'louis@gmail.co', 'WERTYUIO', '1234567890', '2016-03-01 03:29:09', '2016-03-01 03:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_02_21_160810_create_products_table', 2),
('2016_02_22_060046_create_customers_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'all',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `customer_id`, `price`, `category`, `created_at`, `updated_at`) VALUES
(2, 'jeans', '1', 200, 'electronics', '2016-02-21 20:14:05', '2016-03-01 00:07:49'),
(3, 'Watch', '1', 2000, 'electronics', '2016-02-21 20:14:54', '2016-02-23 22:33:52'),
(4, 'mouse', '1', 500, 'electronics', '2016-02-21 20:14:54', '2016-02-23 22:33:21'),
(5, 'bag', '1', 600, 'bags', '2016-02-22 06:42:49', '2016-02-23 22:34:18'),
(6, 'sun glasses', '1', 6000, 'glasses', '2016-02-22 06:42:49', '2016-02-23 22:34:29'),
(9, 'iphone', '1', 50000, 'electronics', '2016-02-23 13:11:53', '2016-02-23 22:33:36'),
(10, 'camera', '1', 20000, 'electronics', '2016-02-23 22:38:13', '2016-02-23 23:03:12'),
(11, 'wallet', '1', 200, 'bags', '2016-02-23 22:38:31', '2016-02-23 23:03:19'),
(12, 'cube', '1', 300, 'toys', '2016-02-23 22:57:23', '2016-02-23 22:57:23'),
(13, 'cube', '2', 300, 'toys', '2016-02-23 23:32:39', '2016-02-23 23:32:39'),
(14, 'iphone', '2', 50000, 'electronics', '2016-02-23 23:33:07', '2016-02-23 23:33:07'),
(15, 'iphone', '1', 50000, 'electronics', '2016-02-23 23:33:23', '2016-02-23 23:33:23'),
(16, 'iphone', '3', 50000, 'electronics', '2016-02-24 13:41:19', '2016-02-24 13:41:19'),
(17, 'jeans', '15', 2000, 'pants', '2016-02-25 00:42:23', '2016-02-25 00:42:23'),
(18, 'Watch', '14', 2000, 'electronics', '2016-02-25 00:42:28', '2016-02-25 00:42:28'),
(19, 'mouse', '13', 500, 'electronics', '2016-02-25 00:42:33', '2016-02-25 00:42:33'),
(20, 'bag', '12', 600, 'bags', '2016-02-25 00:42:37', '2016-02-25 00:42:37'),
(21, 'sun glasses', '12', 6000, 'glasses', '2016-02-25 00:42:41', '2016-02-25 00:42:41'),
(22, 'iphone', '11', 50000, 'electronics', '2016-02-25 00:42:51', '2016-02-25 00:42:51'),
(23, 'camera', '16', 20000, 'electronics', '2016-02-25 05:34:25', '2016-02-25 05:34:25'),
(24, 'cube', '5', 300, 'toys', '2016-02-25 20:23:14', '2016-02-25 20:23:14'),
(25, 'cube', '10', 300, 'toys', '2016-02-25 20:30:42', '2016-02-25 20:30:42'),
(27, 'drone', '1', 2000, 'toys', '2016-02-25 22:35:26', '2016-02-25 22:35:26'),
(28, 'sun glasses', '1', 6000, 'glasses', '2016-02-26 00:37:09', '2016-02-26 00:37:09'),
(29, 'jeans', '2', 2000, 'pants', '2016-02-26 01:56:37', '2016-02-26 01:56:37'),
(30, 'jeans', '2', 2000, 'pants', '2016-02-26 02:03:37', '2016-02-26 02:03:37'),
(31, 'Watch', '5', 2000, 'electronics', '2016-02-26 02:21:10', '2016-02-26 02:21:10'),
(32, 'sun glasses', '1', 6000, 'glasses', '2016-03-01 00:06:20', '2016-03-01 00:06:20'),
(34, 'sun glasses', '19', 6000, 'glasses', '2016-03-01 03:23:57', '2016-03-01 03:23:57'),
(35, 'Watch', '19', 2000, 'electronics', '2016-03-01 03:24:08', '2016-03-01 03:24:08'),
(36, 'jeans', '19', 200, 'electronics', '2016-03-01 03:24:15', '2016-03-01 03:24:15'),
(37, 'jeans', '20', 200, 'electronics', '2016-03-01 03:29:45', '2016-03-01 03:29:45'),
(38, 'Watch', '20', 2000, 'electronics', '2016-03-01 03:29:53', '2016-03-01 03:29:53'),
(39, 'mouse', '20', 500, 'electronics', '2016-03-01 03:29:57', '2016-03-01 03:29:57'),
(40, 'bag', '20', 600, 'bags', '2016-03-01 03:30:02', '2016-03-01 03:30:02'),
(41, 'camera', '20', 20000, 'electronics', '2016-03-01 03:30:14', '2016-03-01 03:30:14'),
(42, 'cube', '20', 300, 'toys', '2016-03-01 03:30:21', '2016-03-01 03:30:21'),
(43, 'cube', '16', 300, 'toys', '2016-03-16 04:21:46', '2016-03-16 04:21:46'),
(44, 'mouse', '16', 500, 'electronics', '2016-03-16 04:23:10', '2016-03-16 04:23:10'),
(45, 'iphone', '16', 50000, 'electronics', '2016-03-16 04:23:31', '2016-03-16 04:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'sid', 'siddartha1511996@gmail.com', '$2y$10$1MmyhF6ZpNjhCYKSSQr6k.nf.dRNOsatUUODjWgP93nAJU1FRd3ba', 'eDPIKBFUgqkXC5VbozHf4ppCyfind44idBh65JXLvEMkav3JOL8aRkCRYyzM', '2016-02-21 10:35:37', '2016-03-16 04:29:30', 1),
(2, 'roman', 'roman@gmail.com', '$2y$10$9fEfWLKcQg7iJcY9YkfPF.aD08iwXBSxXtg430hBwn3qNru/l7TBq', 'fnrVicHjK7uY21RRY6icSfVpETKOnjaD257MsSPR6HmyDeN0ZyhBYzaQYQCi', '2016-02-21 13:02:47', '2016-02-21 13:21:04', 1),
(3, 'vitaly', 'vitaly@gmail.com', '$2y$10$.4vZwKp7FYUl9XGt2K5zf.NV9bR/w2v1l5LaqYcLwli62Dvww/RUq', 'UmjD53RgkvoXvK4lK8LLyPtQw2NWQHWDWyW4Ix6FZr7aSsXfhBe5ijVPgXjA', '2016-02-21 13:21:26', '2016-02-21 13:21:47', 0),
(4, 'denis', 'denis@gmail.com', '$2y$10$V8EU97HjTWzvyPelEKaSV.fx3OyHNxe3MFv5HEetrU/nmkH8N32CO', 'c8bVlOT68BoLYvt6mbmkrJghzDqAvy41EVJ5UdQoCvOX9d8BBMuL1KG1lGe0', '2016-02-21 13:22:37', '2016-02-21 13:24:20', 0),
(5, 'sam', 'sam@gmail.com', '$2y$10$/A4huxfY0KW1qXgVjI7M7uh/igm1noiBSy.7yJr4180FPIQoQ2OVS', 'SBDVV8m2e24bsgW1GjARHqGTHliQkLmo5xet7L0pmmzMugfZRlzjy9k6Ydxq', '2016-02-21 13:22:57', '2016-02-21 13:23:01', 0),
(6, 'john', 'john@gmail.com', '$2y$10$tabuYY9I7NsRaN5AGvY0dO7eHbUUv/nV5xoL6RKgDYMSQRZKFkg7K', 'Uu1kNcNLqAAy4qpOZMEnYiTj2bBCIw8LfqCbpYJWkQF3FfY3WiFC1zDqoiyB', '2016-02-21 13:23:21', '2016-02-21 13:23:42', 0),
(7, 'britney', 'britney@gmail.com', '$2y$10$f.R/YXzyGPTAYWEKstNHfuWEbHRJseG6faDlUvHP11Q7VBvE8836y', 'nlKRsG8rUdbD3wqqeUeUu4fprbzfVDaNBC79O3zKxngIDXmLktLEOWIrq015', '2016-02-21 13:24:56', '2016-02-21 13:25:00', 0),
(8, 'noha', 'noha@gmail.com', '$2y$10$DsGqSgCeTSmx117EIiTUR.YtQAtrguAdgkeI7INkPbxZaJjgrs/oi', 'oJWxLJKtz0tXzRdqyWhDkMGqdqezvCEfWl6Du1GXIiMYtP18tn3wswB1f064', '2016-02-21 13:25:20', '2016-02-21 13:25:26', 0),
(9, 'mickey', 'mickey@gmail.com', '$2y$10$MFV01ilTS6eQGDkCai/TQOXGmQkXv22cqNgRSrqx.Dn9.8LXwT88m', 'ph0TMLLEHbqijriBKk7fBVwjL4xarJhz0gWyckjhTINiBzLR7P3kIq124I1s', '2016-02-21 13:25:53', '2016-02-21 13:25:59', 0),
(10, 'louis', 'louis@gmail.com', '$2y$10$iBHe1aeapnPjyJDZtXczDOv25sE5a0NtmghuakXvRpxJgQ7zMIFdq', 'VWTGfbmvJXn0Oe4FXLcZVoEMWiYT4kAubvj3yNDbubKpINnCdVfwmcfTzz9Z', '2016-02-21 13:26:19', '2016-02-21 13:28:21', 0),
(11, 'mitra', 'mitra@gmail.com', '$2y$10$yhTH/1KOZjGQouRdRuDdruZNf2JvgZRsBy/F72H/jyNQctubhldfG', 'U4lMtDVPCVrcIAA2bxvFcfSq4uR9XMfqNRVnu7J5KGCY13QQAzOf2gqmHjd0', '2016-02-23 00:45:10', '2016-02-23 02:29:44', 1),
(12, 'maya', 'maya@gmail.com', '$2y$10$Tgz39eZaU8WYZiNA1RoZ2ud8PTZ2aTvlEq2GDnCb4/Fjp94vPkMOi', 'FbkY1whRf9XBfKou7FhAuHDMDIy7dWY9B1QkCOZhT0phnuIU2RQSf0Ss0QmR', '2016-02-23 13:41:56', '2016-02-23 13:49:59', 1),
(13, 'sid', 'dog@g.com', '$2y$10$MKLrvksVoPYP62LJ9rfnsejsp1kqX0XFoQRJK13vWTnUMi9aBYR2.', '5D98u7gGGCatlLOx8YuY6spcR3TRporrtc5a6lGLQaQdnFKVyXcp7ijj4drv', '2016-03-05 01:17:29', '2016-03-05 01:18:02', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
