-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 06:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(23, 3, 2, '2022-03-15 05:44:32', '2022-03-15 05:44:32');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_03_14_044943_create_users_table', 1),
(3, '2022_03_14_062801_create_products_table', 2),
(5, '2022_03_14_114342_create_cart_table', 3),
(6, '2022_03_15_064608_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `status`, `payment_method`, `payment_status`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'pending', 'online payment', 'pending', 'abc', NULL, NULL),
(2, 2, 2, 'pending', 'online payment', 'pending', 'abc', NULL, NULL),
(3, 3, 2, 'pending', 'EMI', 'pending', 'ccc', NULL, NULL),
(4, 5, 2, 'pending', 'EMI', 'pending', 'ccc', NULL, NULL),
(5, 1, 2, 'pending', 'cash', 'pending', 'nvm', '2022-03-15 01:36:48', '2022-03-15 01:36:48'),
(6, 2, 2, 'pending', 'cash', 'pending', 'nvm', '2022-03-15 01:36:48', '2022-03-15 01:36:48'),
(7, 1, 2, 'pending', 'online payment', 'pending', 'abc xyz', NULL, NULL),
(8, 6, 2, 'pending', 'online payment', 'pending', 'abc xyz', NULL, NULL),
(9, 5, 2, 'pending', 'online payment', 'pending', 'abc xyz', NULL, NULL),
(10, 2, 3, 'pending', 'online payment', 'pending', 'Dhanbad', NULL, NULL),
(11, 3, 3, 'pending', 'online payment', 'pending', 'Dhanbad', NULL, NULL),
(12, 3, 1, 'pending', 'EMI', 'pending', 'uu', NULL, NULL),
(13, 5, 6, 'pending', 'online payment', 'pending', 'savsdaf', NULL, NULL),
(14, 2, 1, 'pending', 'online payment', 'pending', 'Amazing', NULL, NULL),
(15, 3, 1, 'pending', 'online payment', 'pending', 'Amazing', NULL, NULL),
(16, 4, 7, 'pending', 'EMI', 'pending', 'asdas', NULL, NULL);

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
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `description`, `gallery`, `created_at`, `updated_at`) VALUES
(1, 'LG mobile', '300', 'mobile', 'A smartphone with 8gb ram and much more feature', 'https://i.pinimg.com/originals/f9/e9/26/f9e9264c0ad200e6c608e7449334504e.png', NULL, NULL),
(2, 'Oneplus', '200', 'mobile', 'A smartphone with 8gb ram & stock ROM', 'https://assets.mspimages.in/wp-content/uploads/2020/04/oneplus-8-pro-featured-image.jpg', NULL, NULL),
(3, 'Redmi TV', '300', 'mobile', 'A smartphone with 8gb ram and with Vivd color and much much more feature', 'https://i02.appmifile.com/32_operator_in/09/02/2022/eca8c86940c8f7f866f50629e1111618.jpg', NULL, NULL),
(4, 'LG SmartTV', '30', 'TV', 'A smartphone with Vivd color and much more', 'https://khoslaonline.com/wp-content/uploads/2020/04/05.png', NULL, NULL),
(5, 'Godrej Fridge', '150', 'Electrical Applaiyance', 'A faster colling firdge', 'https://m.media-amazon.com/images/I/71-XsJoSe1L._SL1500_.jpg', NULL, NULL),
(6, 'Samsung washing machine', '250', 'Electrical Applaiyance', 'A faster colling firdge', 'https://img.republicworld.com/republic-prod/stories/promolarge/xhdpi/hweqgaectftztlmd_1587451503.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Rishabh', 'trapt00@gmail.com', '$2y$10$ryotisN4rrIxptF6kCNJZuhKqAS8aiiM0gYFNVf7iEs3Z00VtNCGG', NULL, NULL),
(2, 'Rohit', 'rohit@gmail.com', '$2y$10$Omfa8SkYWcZjRnAOhOLQoepCxca.511CnwQca9O4yB6TkkMdAJs3W', NULL, NULL),
(3, 'Golu', 'golu@gmail.com', '$2y$10$7Kw6y7iwP6Vodcv2lskC.OWHZcUihxp/eqhUQA4vIZ1R3reBpBJ7y', '2022-03-15 02:30:59', '2022-03-15 02:30:59'),
(4, 'amar', 'amar@gmail.com', '$2y$10$rDGU4Ef3Zxzi2xdildiFre.LLjxACx9rjtN48N61ZFAcBN7BsF.BO', '2022-03-15 05:50:26', '2022-03-15 05:50:26'),
(6, 'akshay', 'akshay@gmail.com', '$2y$10$zi.v8zw7b.rOya4XWqkUjuGMbHHk8GUkBUSXWCAkjPdd6/hjZrpj.', '2022-03-15 06:18:23', '2022-03-15 06:18:23'),
(7, 'vivek', 'trapt40@gmail.com', '$2y$10$iJJOi.MxgtTA3zZDksgjcOeLonGuL3Gbk4/FDqpjEi5hxwPRRxdE.', '2022-03-16 00:16:22', '2022-03-16 00:16:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
