-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 09:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surfside`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `uid`, `pid`, `name`, `email`, `product_name`, `qty`, `price`, `image`, `created_at`, `updated_at`) VALUES
(14, 4, 12, 'Ram', 'ram@gmail.com', 'air Jordan 10', 1, 599, 'https://tse1.mm.bing.net/th?id=OIP.rxHh5R_T5DnltN5DzSueywHaFj&pid=Api&P=0', '2022-12-20 09:08:17', '2022-12-20 09:08:17'),
(15, 4, 13, 'Ram', 'ram@gmail.com', 'Jordan 9', 1, 799, 'https://wallpapercave.com/dwp1x/HLMQWhC.jpg', '2022-12-20 09:08:19', '2022-12-20 09:08:19'),
(26, 1, 17, 'kumar', 'kumarbhetwal25@gmail.com', 'Air 9 Retro', 1, 799, 'https://tse3.mm.bing.net/th?id=OIP.CrkoAyIhgx4vtRfpMvj1lAHaE8&pid=Api&P=0', '2022-12-24 01:32:42', '2022-12-24 01:32:42'),
(27, 4, 12, 'Ram', 'ram@gmail.com', 'air Jordan 10', 1, 599, 'https://tse1.mm.bing.net/th?id=OIP.rxHh5R_T5DnltN5DzSueywHaFj&pid=Api&P=0', '2023-02-19 08:12:05', '2023-02-19 08:12:05'),
(29, 1, 12, 'kumar', 'kumarbhetwal25@gmail.com', 'air Jordan 10', 1, 599, 'https://tse1.mm.bing.net/th?id=OIP.rxHh5R_T5DnltN5DzSueywHaFj&pid=Api&P=0', '2023-02-19 08:30:06', '2023-02-19 08:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `checkout_productname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_price` int(11) DEFAULT NULL,
  `checkout_quantity` int(11) DEFAULT NULL,
  `checkout_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_number` int(11) DEFAULT NULL,
  `checkout_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `checkout_productname`, `checkout_price`, `checkout_quantity`, `checkout_name`, `checkout_number`, `checkout_email`, `checkout_method`, `checkout_state`, `checkout_city`, `checkout_status`, `created_at`, `updated_at`) VALUES
(17, 'air Jordan 10 |', 599, 1, 'Kumar', 98, 'Kumarbhetwal25@gmail.com', 'cash on delivery', 'bagmati', 'narayanghat', 'Completed', '2022-12-20 07:19:48', '2022-12-20 09:26:54'),
(18, 'Nike Air | air Jordan 10 |', 1599, 2, 'Coomar', 12, 'kumar@gmail.com', 'cash on delivery', 'bagmati', 'narayanghat', NULL, '2022-12-20 07:20:18', '2022-12-20 07:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `number`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'kumar', 'kumarbhetwal25@gmail.com', '1', 'this is the very first message', '2022-12-15 10:37:11', '2022-12-15 10:37:11'),
(2, 'Kumar Chaudhary', 'hari@gmail.com', '1424354645', '1232423435345446', '2022-12-15 10:45:50', '2022-12-15 10:45:50'),
(3, 'pc', 'roshan@gmail.com', '1312432424', 'hello there', '2022-12-15 11:03:35', '2022-12-15 11:03:35'),
(4, 'hari', 'hari1@gmail.com', '1233243534', 'hello', '2022-12-15 11:04:45', '2022-12-15 11:04:45'),
(5, 'hari', 'hari@gmail.com', '1231231', 'faasfaf', '2022-12-15 11:06:33', '2022-12-15 11:06:33'),
(6, 'Kumar Chaudhary', 'kumarbhetwal25@gmail.com', '9867872978', 'Hello', '2022-12-20 09:18:22', '2022-12-20 09:18:22');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_09_083821_create_products_table', 2),
(6, '2022_12_09_094705_create_products_table', 3),
(7, '2022_12_11_151959_create_carts_table', 4),
(8, '2022_12_11_174715_create_carts_table', 5),
(9, '2022_12_11_183816_create_carts_table', 6),
(10, '2022_12_13_162948_create_checkouts_table', 7),
(11, '2022_12_15_155205_create_messages_table', 8),
(12, '2022_12_15_160610_create_messages_table', 9),
(13, '2022_12_19_140350_create_newcarts_table', 10),
(14, '2022_12_20_095656_create_newcarts_table', 11),
(15, '2022_12_20_101430_create_newcarts_table', 12),
(16, '2022_12_20_105033_create_carts_table', 13),
(17, '2022_12_20_112638_create_newcheckouts_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `newcheckouts`
--

CREATE TABLE `newcheckouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `checkout_productname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_price` int(11) DEFAULT NULL,
  `checkout_quantity` int(11) DEFAULT NULL,
  `checkout_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_number` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newcheckouts`
--

INSERT INTO `newcheckouts` (`id`, `uid`, `pid`, `checkout_productname`, `checkout_price`, `checkout_quantity`, `checkout_name`, `checkout_number`, `checkout_email`, `checkout_method`, `checkout_state`, `checkout_city`, `checkout_status`, `created_at`, `updated_at`) VALUES
(19, 4, 13, 'Jordan 9 | air Jordan 10 | Nike Air |', 6398, 7, 'ram', '12', 'Ram@gmail.com', 'cash on delivery', 'bagmati', 'ktm', 'Completed', '2022-12-20 09:10:14', '2022-12-21 09:35:09'),
(20, 1, 13, 'Jordan 9 | Jordan 9 | air Jordan 10 | Nike Air |', 7197, 8, 'Kumar', '9867872978', 'Kumarbhetwal25@gmail.com', 'cash on delivery', 'bagmati', 'narayanghat', 'Completed', '2022-12-20 09:11:47', '2023-02-20 11:15:10'),
(21, 1, 13, 'Jordan 9 | Jordan 9 | air Jordan 10 | Nike Air |', 7197, 8, 'Kumar', '9867872978', 'Kumarbhetwal25@gmail.com', 'cash on delivery', 'bagmati', 'narayanghat', 'Pending', '2022-12-20 09:17:12', '2023-02-20 11:15:16'),
(22, 1, 12, 'air Jordan 10 | air Jordan 10 | Air CP3 | Jordan 9 | Jordan 9 | air Jordan 10 | Nike Air |', 9194, 11, 'Kumar', '12', 'Kumarbhetwal25@gmail.com', 'cash on delivery', 'bagmati', 'narayanghat', NULL, '2022-12-21 02:21:22', '2022-12-21 02:21:22'),
(23, 1, 12, 'air Jordan 10 | air Jordan 10 | Air CP3 | Jordan 9 | Jordan 9 | air Jordan 10 | Nike Air |', 9194, 11, 'third', '21132433', 'Ram@gmail.com', 'cash on delivery', 'bagmati', 'narayanghat', NULL, '2022-12-21 02:30:00', '2022-12-21 02:30:00'),
(24, 1, 12, 'air Jordan 10 | air Jordan 10 | Air CP3 | Jordan 9 | Jordan 9 | air Jordan 10 | Nike Air |', 9194, 11, 'third', '21132433', 'Ram@gmail.com', 'cash on delivery', 'bagmati', 'narayanghat', NULL, '2022-12-21 02:30:00', '2022-12-21 02:30:00'),
(25, 1, 12, 'air Jordan 10 | Air Jordan First Copy | Jordan 9 | air Jordan 10 |', 2596, 4, 'sixth', '32', 'Kumarbhetwal25@gmail.com', 'cash on delivery', 'bagmati', 'narayanghat', NULL, '2022-12-21 02:31:30', '2022-12-21 02:31:30'),
(26, 1, 12, 'air Jordan 10 | Jordan 9 | air Jordan 10 |', 1997, 3, 'Kumar', '9867872978', 'Kumarbhetwal25@gmail.com', 'Pay with khalti', 'bagmati', 'narayanghat', NULL, '2022-12-24 01:10:54', '2022-12-24 01:10:54'),
(27, 1, 12, 'air Jordan 10 | Jordan 9 | air Jordan 10 |', 1997, 3, 'sunday', '322', 'Kumarbhetwal25@gmail.com', 'Pay with khalti', 'bagmati', 'narayanghat', NULL, '2022-12-24 01:15:57', '2022-12-24 01:15:57'),
(28, 4, 13, 'Jordan 9 | air Jordan 10 |', 1398, 2, 'ball', '233', 'Kumarbhetwal25@gmail.com', 'Pay with khalti', 'bagmati', 'narayanghat', NULL, '2022-12-24 01:16:47', '2022-12-24 01:16:47'),
(29, 1, 12, 'air Jordan 10 | Jordan 9 | air Jordan 10 |', 1997, 3, 'Coomar', '22', 'kumar@gmail.com', 'cash on delivery', 'bagmati', 'narayanghat', NULL, '2022-12-24 01:21:31', '2022-12-24 01:21:31'),
(30, 1, 13, 'Jordan 9 | Jordan 9 | air Jordan 10 |', 2197, 3, 'cat', '11', 'Ram@gmail.com', 'cash on delivery', 'bagmati', 'narayanghat', NULL, '2022-12-24 01:23:30', '2022-12-24 01:23:30'),
(31, 1, 13, 'Jordan 9 | Jordan 9 | air Jordan 10 |', 2197, 3, 'cat', '11', 'Ram@gmail.com', 'cash on delivery', 'bagmati', 'narayanghat', NULL, '2022-12-24 01:24:27', '2022-12-24 01:24:27'),
(32, 4, 13, 'Jordan 9 | air Jordan 10 |', 1398, 2, 'Dog', '33', 'Kumarbhetwal25@gmail.com', 'cash on delivery', 'bagmati', 'narayanghat', NULL, '2022-12-24 01:26:00', '2022-12-24 01:26:00'),
(33, 4, 13, 'Jordan 9 | air Jordan 10 |', 1398, 2, 'Kumar', '12', 'Kumarbhetwal25@gmail.com', 'Pay with khalti', 'bagmati', 'narayanghat', NULL, '2022-12-24 01:27:06', '2022-12-24 01:27:06'),
(34, 4, 13, 'Jordan 9 | air Jordan 10 |', 1398, 2, 'Kumar', '12', 'Kumarbhetwal25@gmail.com', 'Pay with khalti', 'bagmati', 'narayanghat', NULL, '2022-12-24 01:29:53', '2022-12-24 01:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `created_at`, `updated_at`) VALUES
(11, 'Nike Air', 1000, 'https://wallpapercave.com/dwp1x/r6j43os.jpg', 'hello', '2022-12-17 07:35:55', '2022-12-17 08:16:52'),
(12, 'air Jordan 10', 599, 'https://tse1.mm.bing.net/th?id=OIP.rxHh5R_T5DnltN5DzSueywHaFj&pid=Api&P=0', 'air Jordan', '2022-12-17 07:37:52', '2022-12-17 07:37:52'),
(13, 'Jordan 9', 799, 'https://wallpapercave.com/dwp1x/HLMQWhC.jpg', '9', '2022-12-17 07:39:09', '2022-12-17 07:39:09'),
(14, 'Air Jordan First Copy', 599, 'https://wallpapercave.com/wp/wp2762018.jpg', 'This is first copy', '2022-12-20 09:20:32', '2022-12-20 09:20:32'),
(15, 'Air CP3', 799, 'https://i5.walmartimages.com/asr/c865e758-aaf4-4f66-9b6e-f8fdb973c7ea_1.ab5e3260a30b13933b2470f6757e7024.jpeg', 'This is Cp3 model', '2022-12-20 09:41:22', '2022-12-20 09:41:22'),
(17, 'Air 9 Retro', 799, 'https://tse3.mm.bing.net/th?id=OIP.CrkoAyIhgx4vtRfpMvj1lAHaE8&pid=Api&P=0', 'Air 9 retro', '2022-12-20 09:45:41', '2022-12-20 09:45:41'),
(18, 'Neplease Style Goldstar', 20, 'https://tse2.mm.bing.net/th?id=OIP.T47Ktom33b2YppKqsVSVvwHaEK&pid=Api&P=0', 'This is neplease style goldstar', '2022-12-20 09:47:30', '2022-12-20 09:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for admin and USR for normal user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kumar', 'kumarbhetwal25@gmail.com', NULL, '$2y$10$DSdY9EgiD7u4rc0xD6Cs2.UZC/vwYYXsS7C9xd/byL.EVt1awmWp6', 'USR', 'ikroNvIU2uIQ788kX2StAvYzwkfAGhwM0fPofbfSRK731mY5kqVGAvgyEHZ7', '2022-12-08 03:52:26', '2022-12-08 03:52:26'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$nkiBM8RsBAQNsoSSC4pB5ObMy.tJDO5laKifyxJfSo9rosHmQgRQS', 'ADM', NULL, '2022-12-08 03:53:31', '2022-12-08 03:53:31'),
(3, 'Roshan', 'roshan@gmail.com', NULL, '$2y$10$MxoBIeen13r0iKWrQcxveOFjA0liOVNFRyCMcC3MrmKmEcSJbjTWG', 'USR', NULL, '2022-12-11 10:15:17', '2022-12-11 10:15:17'),
(4, 'Ram', 'ram@gmail.com', NULL, '$2y$10$BTxZb1aQvluWgxx8gJOte.BIKOHDyGBgXsEaMPbhmIiMbYlgCuVQG', 'USR', '2jxiZMXMp02pc73z91eoKj61wfYrRwinGxHzFcION9b7OvJshhu7JMYa8Bhz', '2022-12-17 10:36:06', '2022-12-17 10:36:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newcheckouts`
--
ALTER TABLE `newcheckouts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `newcheckouts`
--
ALTER TABLE `newcheckouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
