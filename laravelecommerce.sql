-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 07:32 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Super Admin' COMMENT 'Admin|Super Admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone_no`, `avatar`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ibu', 'ibrahim.sagar.15@gmail.com', '$2y$10$NWMtvF0DJaJnAWLy8wXaF.2hXEHBN0JmhDf1/TYkVb7pKt6UQlhHy', '01677051700', NULL, 'Super Admin', 'mWXrIqbI2o8Jm9voPDGijGvlMqrRFXvUBHvrep0tKirdxy6wnfSA86taLFHt', '2019-11-17 16:19:18', '2020-02-10 16:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'leading mobile brand', '1581701716.png', '2020-02-14 11:35:17', '2020-02-14 11:35:17'),
(2, 'Samsung', 'Phone', NULL, '2020-02-14 11:45:02', '2020-02-14 11:45:02'),
(3, 'NIKE', 'Shoes Brand', NULL, '2020-02-14 15:29:38', '2020-02-14 15:29:38'),
(4, 'ADiDAS', 'shoe', NULL, '2020-02-14 15:30:39', '2020-02-14 15:30:39'),
(5, 'Puma', 'Branded shoes', NULL, '2020-02-14 15:31:40', '2020-02-14 15:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `order_id`, `ip_address`, `product_quantity`, `created_at`, `updated_at`) VALUES
(11, 28, NULL, NULL, '::1', 1, '2020-02-14 07:42:18', '2020-02-14 07:42:18'),
(12, 35, NULL, NULL, '::1', 2, '2020-02-15 01:53:36', '2020-02-15 02:30:34'),
(13, 35, NULL, NULL, '::1', 1, '2020-02-15 01:53:36', '2020-02-15 01:53:36'),
(14, 34, NULL, NULL, '::1', 1, '2020-02-15 01:54:16', '2020-02-15 01:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(8, 'Mobile Phone', '{Branded gadget only}', NULL, NULL, '2019-12-26 20:43:25', '2020-02-14 10:45:54'),
(9, 'Sports', NULL, NULL, NULL, '2020-02-14 10:44:36', '2020-02-14 10:44:36'),
(10, 'Shoes & Snickers', 'All the branded shoes are here', NULL, NULL, '2020-02-14 15:28:25', '2020-02-14 15:28:25'),
(13, 'Women Fashion', 'ads', NULL, NULL, '2020-02-14 16:06:25', '2020-02-14 16:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `division_id`, `created_at`, `updated_at`) VALUES
(1, 'Jhalokathi', 2, '2019-11-07 14:00:11', '2019-11-07 14:00:11'),
(3, 'Savar', 1, '2019-11-07 14:08:00', '2019-11-07 14:08:00'),
(4, 'Munshigonj', 1, '2019-11-08 11:01:34', '2019-11-19 13:49:40'),
(5, 'Bogra', 3, '2019-11-08 11:04:24', '2019-11-08 11:05:18'),
(8, 'jessore', 5, '2019-11-19 13:48:57', '2019-11-19 13:48:57'),
(9, 'Tangail', 9, '2019-11-19 13:55:37', '2019-11-19 13:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1, '2019-11-07 12:57:38', '2019-11-07 12:57:38'),
(2, 'Barisal', 5, '2019-11-07 12:58:26', '2019-11-07 13:00:03'),
(3, 'Rajshahi', 2, '2019-11-07 13:00:42', '2019-11-07 13:00:42'),
(4, 'Chittagong', 3, '2019-11-07 13:02:26', '2019-11-07 13:02:49'),
(5, 'Khulna', 4, '2019-11-07 13:03:13', '2019-11-07 13:03:13'),
(6, 'Sylhet', 6, '2019-11-08 10:58:29', '2019-11-08 10:58:29'),
(7, 'Rangpur', 7, '2019-11-08 10:59:10', '2019-11-08 10:59:10'),
(9, 'Mymensingh', 8, '2019-11-19 13:54:38', '2019-11-19 13:54:38');

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
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_05_05_090334_create_categories_table', 2),
(14, '2019_05_05_090514_create_products_table', 2),
(16, '2019_05_05_095046_create_product_images_table', 2),
(17, '2019_05_15_080339_create_product_ratings_table', 3),
(19, '2019_11_07_132405_create_divisions_table', 5),
(20, '2019_11_07_132436_create_districts_table', 5),
(25, '2019_11_11_194539_create_carts_table', 7),
(26, '2019_11_12_185320_create_settings_table', 7),
(27, '2019_11_12_191638_create_settings_table', 8),
(28, '2019_11_13_200246_create_payments_table', 9),
(30, '2019_11_14_192926_create_sliders_table', 11),
(32, '2019_05_05_090538_create_admins_table', 12),
(34, '2014_10_12_000000_create_users_table', 13),
(36, '2019_11_11_194511_create_orders_table', 14),
(37, '2019_05_05_090446_create_brands_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `is_seen_by_admin` tinyint(1) NOT NULL DEFAULT '0',
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_id`, `ip_address`, `name`, `phone_no`, `email`, `shipping_address`, `message`, `is_paid`, `is_completed`, `is_seen_by_admin`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, '::1', 'Md.Ibrahim sagar', NULL, 'ibrahim@blog.com', 'buet', NULL, 0, 0, 1, NULL, '2020-02-09 14:03:23', '2020-02-09 14:04:15'),
(2, NULL, 1, '::1', 'Md.Ibrahim sagar', NULL, 'admin@blog.com', 'moiut', NULL, 1, 1, 1, NULL, '2020-02-14 04:45:06', '2020-02-14 05:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mibrahim133061@bscse.uiu.ac.bd', '$2y$10$gwnt6KKkVKHP/boKrN/Ii.6YGVNX6rymCHo61/Stna4vr2u2GJ59u', '2019-11-06 10:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(4) NOT NULL DEFAULT '1',
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Payment No',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'agent|personal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `image`, `priority`, `short_name`, `no`, `type`, `created_at`, `updated_at`) VALUES
(1, 'cash In', 'cash.jpg', 1, 'cash_in', NULL, NULL, '2020-01-11 12:24:06', '2020-01-11 12:24:06'),
(2, 'Bkash', 'bkash.jpg', 2, 'bkash', NULL, NULL, '2020-01-11 12:26:03', '2020-01-11 12:26:03'),
(3, 'Rocket', 'rocket.jpg', 3, 'rocket', NULL, NULL, '2020-01-11 12:26:03', '2020-01-11 12:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `offer_price` int(11) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `description`, `slug`, `quantity`, `price`, `status`, `offer_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(24, 1, 1, 'I Phone 11', 'Apple\r\niPhone 11\r\nThe phone is powered by Hexa Core (2.65 GHz, Dual core, Lightning + 1.8 GHz, Quad core, Thunder) processor.\r\n It runs on the Apple A13 Bionic Chipset. It has 4 GB RAM and 64 GB internal storage. \r\nApple iPhone 11 smartphone has a IPS LCD display.', 'i-phone-11', 50, 78000, 1, NULL, 1, '2019-12-26 18:32:54', '2019-12-26 18:32:54'),
(25, 1, 1, 'Mi A3', 'The Mi A3 is the third smartphone in the series of Android One smartphones from Xiaomi. It sports a 6.08-inch display with HD+ resolution. ... The Mi A3 is powered by a Qualcomm Snapdragon 665 SoC and comes in two variants, 4GB RAM with 64GB of storage and 6GB RAM with 128GB of storage.', 'mi-a3', 150, 18000, 1, NULL, 1, '2019-12-26 18:49:05', '2019-12-26 18:49:05'),
(26, 1, 1, 'SAMSUNG S10', 'Samsung, South Korean company that is one of the world\'s largest producers of electronic devices. Samsung specializes in the production of a wide variety of consumer and industry electronics, including appliances, digital media devices, semiconductors, memory chips, and integrated systems.\r\nDate founded: March 1, 1938\r\nOrganization type: Company\r\nFounders: Lee Byung-chul\r\nGeographic scope: Korea', 'samsung-s10', 150, 80000, 1, NULL, 1, '2019-12-26 19:02:04', '2019-12-26 19:02:04'),
(27, 1, 1, 'Motorola Razr 2019', 'The Motorola Razr (styled RAZR, pronounced \"razor\"; sometimes also Siliqua) was a series of mobile phones by Motorola, part of the 4LTR line. The V3 was the first phone released in the series and was introduced in July 2004 and released in the market in the third quarter of 2004.', 'motorola-razr-2019', 50, 127245, 1, NULL, 1, '2019-12-26 19:12:16', '2019-12-26 19:12:16'),
(28, 1, 1, 'One Plus 7', 'The OnePlus 7 features a 6.4-inch Optic AMOLED screen at 1080x2280 pixels resolution. Design-wise, the phone adopts the notched design. It houses the selfie camera in a teardrop notch on top of the screen. Under the hood, the phone is powered by Qualcomm\'s powerful Snapdragon 855 processor paired with Adreno 640 GPU.', 'one-plus-7', 15, 55000, 1, NULL, 1, '2019-12-26 19:20:47', '2019-12-26 19:20:47'),
(29, 1, 1, 'iPad Pro 2018', 'The new iPad Pro, released in November 2018, is a story of impressive hardware and untapped potential: A device that still hasn\'t taken the final leap into being the \"everything\" computer for my needs. It has a great keyboard case, though it could use a trackpad. It\'s got a big, laptop-like screen.', 'ipad-pro-2018', 50, 95000, 1, NULL, 1, '2019-12-26 19:33:09', '2019-12-26 19:33:09'),
(30, 1, 1, 'Huawei P30 Pro', 'The Huawei P30 Pro is an impressive piece of kit. It has a gorgeous curved screen, flagship Kirin 980 processor, IP68 water and dust resistance, reverse wireless charging, a faster in-display fingerprint scanner, and more.', 'huawei-p30-pro', 100, 90000, 1, NULL, 1, '2019-12-26 19:35:03', '2019-12-26 19:35:03'),
(33, 1, 1, 'Nike Shoes', 'brand', 'nike-shoes', 2, 15000, 1, NULL, 1, '2020-02-14 08:04:26', '2020-02-14 08:04:26'),
(34, 1, 1, 'Hockey', 'ad', 'hockey', 2, 5000, 1, NULL, 1, '2020-02-14 12:00:47', '2020-02-14 12:00:47'),
(35, 1, 1, 'Adidas shoes', 'Adidas AG is a multinational corporation, founded and headquartered in Herzogenaurach, Germany, that designs and manufactures shoes, clothing and accessories. It is the largest sportswear manufacturer in Europe, and the second largest in the world, after Nike.', 'adidas-shoes', 25, 15000, 1, NULL, 1, '2020-02-14 15:35:18', '2020-02-14 15:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'samsung.png', NULL, NULL),
(2, 2, 'MIA2.png', NULL, NULL),
(5, 19, '1572889926.jpg', '2019-11-04 11:52:06', '2019-11-04 11:52:06'),
(6, 19, '1572889927.png', '2019-11-04 11:52:07', '2019-11-04 11:52:07'),
(15, 24, '15774067740.jpg', '2019-12-26 18:32:54', '2019-12-26 18:32:54'),
(16, 24, '15774067741.jpg', '2019-12-26 18:32:54', '2019-12-26 18:32:54'),
(17, 24, '15774067752.jpg', '2019-12-26 18:32:55', '2019-12-26 18:32:55'),
(18, 25, '15774077450.jpg', '2019-12-26 18:49:05', '2019-12-26 18:49:05'),
(19, 25, '15774077451.jpg', '2019-12-26 18:49:05', '2019-12-26 18:49:05'),
(20, 25, '15774077452.jpg', '2019-12-26 18:49:05', '2019-12-26 18:49:05'),
(21, 26, '15774085240.jpg', '2019-12-26 19:02:05', '2019-12-26 19:02:05'),
(22, 26, '15774085251.jpg', '2019-12-26 19:02:05', '2019-12-26 19:02:05'),
(23, 26, '15774085252.jpg', '2019-12-26 19:02:06', '2019-12-26 19:02:06'),
(24, 27, '15774091360.jpg', '2019-12-26 19:12:17', '2019-12-26 19:12:17'),
(25, 27, '15774091371.jpg', '2019-12-26 19:12:17', '2019-12-26 19:12:17'),
(26, 28, '15774096500.jpg', '2019-12-26 19:20:50', '2019-12-26 19:20:50'),
(27, 28, '15774096511.jpg', '2019-12-26 19:20:51', '2019-12-26 19:20:51'),
(28, 29, '15774103890.jpg', '2019-12-26 19:33:10', '2019-12-26 19:33:10'),
(29, 29, '15774103901.jpg', '2019-12-26 19:33:10', '2019-12-26 19:33:10'),
(30, 29, '15774103902.jpg', '2019-12-26 19:33:11', '2019-12-26 19:33:11'),
(31, 30, '15774105030.jpg', '2019-12-26 19:35:03', '2019-12-26 19:35:03'),
(32, 30, '15774105041.jpg', '2019-12-26 19:35:04', '2019-12-26 19:35:04'),
(33, 30, '15774105042.jpg', '2019-12-26 19:35:04', '2019-12-26 19:35:04'),
(35, 33, '15816890660.jpg', '2020-02-14 08:04:26', '2020-02-14 08:04:26'),
(36, 34, '15817032470.jpg', '2020-02-14 12:00:48', '2020-02-14 12:00:48'),
(37, 35, '15817161180.jpg', '2020-02-14 15:35:19', '2020-02-14 15:35:19'),
(38, 35, '15817161191.jpg', '2020-02-14 15:35:19', '2020-02-14 15:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_ratings`
--

CREATE TABLE `product_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` int(10) UNSIGNED NOT NULL DEFAULT '100',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `address`, `shipping_cost`, `created_at`, `updated_at`) VALUES
(1, 'test@example.com', '01316992475', 'Barisal', 100, '2019-11-12 19:19:20', '2019-11-12 19:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT '10',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `button_text`, `button_link`, `priority`, `created_at`, `updated_at`) VALUES
(10, 'Sports', '1581692952.jpg', 'Sports Products', 'http://priyofashion.com/', 3, '2020-02-14 09:09:12', '2020-02-14 09:09:12'),
(12, 'Book Shop', '1581693400.jpg', 'Shipping are so easy!!', 'http://priyofashion.com/', 1, '2020-02-14 09:16:40', '2020-02-14 09:16:40'),
(15, 'Mobile Shop', '1581693672.jpg', 'Shipping are so easy!!', 'http://priyofashion.com/', 4, '2020-02-14 09:21:12', '2020-02-14 09:21:12'),
(16, 'All types of Gadget', '1581693714.jpg', 'Shipping are so easy!!', 'http://priyofashion.com/', 2, '2020-02-14 09:21:54', '2020-02-14 09:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL COMMENT 'Division Table ID',
  `district_id` int(10) UNSIGNED NOT NULL COMMENT 'District Table ID',
  `status` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0=Inactive|1=Active|2=Baned',
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `phone_no`, `password`, `street_address`, `division_id`, `district_id`, `status`, `ip_address`, `avatar`, `shipping_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(15, 'Ibrahim', 'sagar', 'ibrahimsagar', 'ibrahim.sagar.15@gmail.com', '123456', '$2y$10$6tBWHefHMabqkA7Cy/WIHOj5KgHLMjCrJ4ni6GLsXpvvusMThfvhS', 'Azimpur', 1, 3, 1, '::1', NULL, NULL, NULL, '2019-11-28 17:21:29', '2020-01-10 23:34:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`) USING BTREE,
  ADD KEY `carts_order_id_foreign` (`order_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_short_name_unique` (`short_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_ratings`
--
ALTER TABLE `product_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_email_unique` (`email`) USING BTREE,
  ADD KEY `users_phone_no_unique` (`phone_no`) USING BTREE;
ALTER TABLE `users` ADD FULLTEXT KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product_ratings`
--
ALTER TABLE `product_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
