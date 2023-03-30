-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 11:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aqaba_homes`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `item_id`, `created_at`, `updated_at`) VALUES
(9, 'logo-removebg-preview.png', 21, '2023-02-19 16:05:20', '2023-02-19 16:05:20'),
(10, 'Table Share.png', 21, '2023-02-19 16:05:20', '2023-02-19 16:05:20'),
(11, 'logo (2).png', 21, '2023-02-19 16:05:20', '2023-02-19 16:05:20'),
(13, 'logo-removebg-preview.png', 22, '2023-02-19 16:14:15', '2023-02-19 16:14:15'),
(14, 'Table Share.png', 22, '2023-02-19 16:14:15', '2023-02-19 16:14:15'),
(15, 'logo (2).png', 22, '2023-02-19 16:14:15', '2023-02-19 16:14:15'),
(16, '2533622-800x600.jpg', 32, '2023-03-04 13:18:25', '2023-03-04 13:18:25'),
(17, '2557948-800x600.jpg', 32, '2023-03-04 13:18:25', '2023-03-04 13:18:25'),
(18, '2557959-800x600.jpg', 32, '2023-03-04 13:18:25', '2023-03-04 13:18:25'),
(19, '2563440-800x600.jpg', 32, '2023-03-04 13:18:25', '2023-03-04 13:18:25'),
(20, '2563446-800x600.jpg', 32, '2023-03-04 13:18:25', '2023-03-04 13:18:25'),
(21, 'Table Share.png', 28, '2023-02-19 16:05:20', '2023-02-19 16:05:20'),
(22, 'Table Share.png', 28, '2023-02-19 16:14:15', '2023-02-19 16:14:15'),
(23, '2563440-800x600.jpg', 28, '2023-03-04 13:18:25', '2023-03-04 13:18:25'),
(24, '2563446-800x600.jpg', 28, '2023-03-04 13:18:25', '2023-03-04 13:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `is_furnished` int(11) NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `beds` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `street_name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `general_details` varchar(255) DEFAULT NULL,
  `added_features` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `frequency`, `location`, `price`, `is_furnished`, `service_id`, `user_id`, `type_id`, `status`, `beds`, `baths`, `area`, `house_number`, `street_name`, `description`, `general_details`, `added_features`, `created_at`, `updated_at`) VALUES
(21, 'Ihab Al-Kasasbeh Housing Company', 'Daily', 'Seventh Area', 21, 1, 1, 2, 2, 'Accepted', 2, 1, 120, '24', 'Ahmad bin Hanbal', 'An apartment is a flat — it\'s usually a few rooms that you rent in a building. Your apartment might be in a fancy high rise with a doorman and an elevator, or over your parents\' garage. Since the 1640s, an apartment has meant \"separate rooms within a house,\" from the Italian word appartimento, which literally means \"a separated place.\"', 'NULL', 'Descipe your Apartment/House', '2023-02-19 16:05:20', '2023-02-19 16:05:20'),
(22, 'ADBELMAJIED ABU SULIMAN', 'Daily', 'Aqaba', 15, 1, 1, 2, 1, 'Accepted', 3, 1, 12, '15', 'mar Bin Al-Khatab', 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', '2023-02-19 16:14:15', '2023-02-19 16:14:15'),
(23, 'ADBELMAJIED ABU SULIMAN', 'Daily', 'Descipe your Apartment/House', 61000, 1, 2, 2, 2, 'Pending', 1, 1, 12, 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', '2023-02-19 16:14:15', '2023-02-19 16:14:15'),
(24, 'Ihab Al-Kasasbeh Housing Company', 'Daily', 'Descipe your Apartment/House', 66400, 1, 2, 2, 1, 'Pending', 1, 1, 12, 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', '2023-02-19 16:14:15', '2023-02-19 16:14:15'),
(26, 'Ihab Al-Kasasbeh Housing Company', 'Daily', 'Descipe your Apartment/House', 18, 1, 1, 2, 2, 'Pending', 1, 1, 12, 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', '2023-02-19 16:14:15', '2023-02-19 16:14:15'),
(27, 'ADBELMAJIED ABU SULIMAN', 'Daily', 'Descipe your Apartment/House', 31000, 1, 2, 2, 1, 'Pending', 1, 1, 12, 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', '2023-02-19 16:14:15', '2023-02-19 16:14:15'),
(28, 'ADBELMAJIED ABU SULIMAN', 'Daily', 'Aqaba', 76400, 1, 2, 2, 1, 'Accepted', 3, 1, 12, '3', 'Second King Abdullah', 'Descipe your Apartment/House', 'Descipe your Apartment/House', 'Descipe your Apartment/House', '2023-02-19 16:14:15', '2023-02-19 16:14:15'),
(29, 'Abdelmajied', 'Daily', 'as', 332, 1, 1, 1, 1, 'Pending', 1, 1, 500, '2A', 'Descipe your Apartment/House', 'A modern floor plan is typically open, minimal, and flows easily between rooms. Look for large windows and doorways, a connected dining room and kitchen, and lots of lighting. Modern floor plans are all about utilizing space and light, and opening up to fantastic views of the cityscape', NULL, NULL, '2023-03-04 13:11:44', '2023-03-04 13:11:44'),
(30, 'Abdelmajied', 'Daily', 'as', 332, 1, 1, 1, 1, 'Pending', 1, 1, 500, '2A', 'Descipe your Apartment/House', 'A modern floor plan is typically open, minimal, and flows easily between rooms. Look for large windows and doorways, a connected dining room and kitchen, and lots of lighting. Modern floor plans are all about utilizing space and light, and opening up to fantastic views of the cityscape', NULL, NULL, '2023-03-04 13:11:59', '2023-03-04 13:11:59'),
(31, 'Abdelmajied', 'Daily', 'as', 332, 1, 1, 1, 1, 'Pending', 1, 1, 500, '2A', 'Descipe your Apartment/House', 'A modern floor plan is typically open, minimal, and flows easily between rooms. Look for large windows and doorways, a connected dining room and kitchen, and lots of lighting. Modern floor plans are all about utilizing space and light, and opening up to fantastic views of the cityscape', NULL, NULL, '2023-03-04 13:12:05', '2023-03-04 13:12:05'),
(32, 'سعدي و الغول', 'Monthly', 'المنطقة السكنية الخامسة', 325, 1, 1, 1, 2, 'Accepted', 3, 2, 185, '24', 'شارع الثورة العربية الكبرى', 'شقة في افخم مناطق العقبة , اطلالة بحرية. الشقة على الطابق الرابع و تحتوي على اثاث جديد. مناسبة لعائلة من5 الى 7 افراد. تحتوي على كراج خاص اسفل البناء و غرفة عبارة عن مستودع خاص بداخل الشقة. يوجد امامها ساحة و متنزهات مناسبة للعب للاطفال , موقع متميز بجانب العديد من المطاعم و المحلات', NULL, NULL, '2023-03-04 13:18:25', '2023-03-04 13:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_02_14_230502_create_services_table', 1),
(6, '2023_02_14_230600_create_types_table', 1),
(7, '2023_02_14_230636_create_contacts_table', 1),
(8, '2023_02_14_230699_create_items_table', 1),
(9, '2023_02_14_230779_create_reviews_table', 1),
(10, '2023_02_14_232153_create_images_table', 1),
(11, '2023_02_19_171645_create_favorites_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Rent', NULL, NULL),
(2, 'Sell', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'House', NULL, NULL),
(2, 'Apartment', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `image`, `mobile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$69qugvoZsD0T0f/U3ozEneYaE.E1v5AjsLIRzm1t6XFHfKnlJqAnK', 1, 'formalPIC.png', 778079497, NULL, '2023-02-19 15:38:03', '2023-02-19 18:46:44'),
(2, 'Abdelmajied', 'abdelmajied@yahoo.com', NULL, '$2y$10$IpkZ9f8d5w5H3oN6bByZGevZhynVQvwqP9aFWKeXrB5XJyAC.YXqm', 0, 'formalPIC.png', 778079497, NULL, '2023-02-19 16:37:13', '2023-02-20 09:28:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_item_id_foreign` (`item_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_service_id_foreign` (`service_id`),
  ADD KEY `items_user_id_foreign` (`user_id`),
  ADD KEY `items_type_id_foreign` (`type_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_item_id_foreign` (`item_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `items_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
