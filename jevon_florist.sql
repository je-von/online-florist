-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 03:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jevon_florist`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `cart_id` int(10) UNSIGNED NOT NULL,
  `flower_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`cart_id`, `flower_id`, `quantity`) VALUES
(1, 3, 4),
(1, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `name`, `shipping_cost`) VALUES
(1, 'JNE', 9000),
(2, 'Wahana', 5000),
(3, 'J&T', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE `flowers` (
  `id` int(10) UNSIGNED NOT NULL,
  `flower_type_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`id`, `flower_type_id`, `name`, `price`, `description`, `stock`, `image_path`) VALUES
(1, 1, 'Red Roses Bouquet', 599000, 'This beautiful rose bouquet is an all time favorite at Flower Chimp. No matter if for Valentine\'s Day, Anniversaries or Birthdays, this gorgeous arrangement never fails to succeed!', 77, 'flower/68ef723e-aac6-4bda-b70b-86d04705d63b.jpg'),
(2, 2, 'Lavish Lilies', 359000, 'Be still my heart! What an impression you\'ll make when you send her this gorgeous array of red roses and fragrant pink lilies in a classic reception vase.', 23, 'flower/7946acc7-9d5c-413b-a182-23b1be1fc6b3.png'),
(3, 1, 'Rose Merah', 35000, 'Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar', 7, 'flower/9399b8d7-a483-4223-95a0-51a72aefcdb0.jpg'),
(4, 1, 'Chantilly Pink Roses', 750000, 'Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar', 48, 'flower/d1a948e7-8856-449f-9ffa-cf91293c92c7.jpg'),
(5, 1, 'Romance of Roses', 899000, 'Classic Urn Vase, Foliage: Variegated Pittosporum, White Mini Sweetheart Or Spray Roses, Red Mini Sweetheart Or Spray Roses, Pink Mini Sweetheart Or Spray Roses, Bupleurum.', 48, 'flower/0610b1db-ea7f-4f1f-b878-16eba99b57b6.jpg'),
(6, 1, 'Red Roses Bouquet L', 599000, 'This beautiful rose bouquet is an all time favorite at Flower Chimp. No matter if for Valentine\'s Day, Anniversaries or Birthdays, this gorgeous arrangement never fails to succeed!', 77, 'flower/68ef723e-aac6-4bda-b70b-86d04705d63b.jpg'),
(7, 2, 'Lavish Lilies L', 359000, 'Be still my heart! What an impression you\'ll make when you send her this gorgeous array of red roses and fragrant pink lilies in a classic reception vase.', 23, 'flower/7946acc7-9d5c-413b-a182-23b1be1fc6b3.png'),
(8, 1, 'Rose Merah L', 35000, 'Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar', 7, 'flower/9399b8d7-a483-4223-95a0-51a72aefcdb0.jpg'),
(9, 1, 'Chantilly Pink Roses L', 750000, 'Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar', 48, 'flower/d1a948e7-8856-449f-9ffa-cf91293c92c7.jpg'),
(10, 1, 'Romance of Roses L', 899000, 'Classic Urn Vase, Foliage: Variegated Pittosporum, White Mini Sweetheart Or Spray Roses, Red Mini Sweetheart Or Spray Roses, Pink Mini Sweetheart Or Spray Roses, Bupleurum.', 48, 'flower/0610b1db-ea7f-4f1f-b878-16eba99b57b6.jpg'),
(11, 1, 'Red Roses Bouquet XL', 599000, 'This beautiful rose bouquet is an all time favorite at Flower Chimp. No matter if for Valentine\'s Day, Anniversaries or Birthdays, this gorgeous arrangement never fails to succeed!', 77, 'flower/68ef723e-aac6-4bda-b70b-86d04705d63b.jpg'),
(12, 2, 'Lavish Lilies XL', 359000, 'Be still my heart! What an impression you\'ll make when you send her this gorgeous array of red roses and fragrant pink lilies in a classic reception vase.', 23, 'flower/7946acc7-9d5c-413b-a182-23b1be1fc6b3.png'),
(13, 1, 'Rose Merah XL', 35000, 'Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar', 7, 'flower/9399b8d7-a483-4223-95a0-51a72aefcdb0.jpg'),
(14, 1, 'Chantilly Pink Roses XL', 750000, 'Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar Ini bunga mawar', 48, 'flower/d1a948e7-8856-449f-9ffa-cf91293c92c7.jpg'),
(15, 1, 'Romance of Roses XL', 899000, 'Classic Urn Vase, Foliage: Variegated Pittosporum, White Mini Sweetheart Or Spray Roses, Red Mini Sweetheart Or Spray Roses, Pink Mini Sweetheart Or Spray Roses, Bupleurum.', 48, 'flower/0610b1db-ea7f-4f1f-b878-16eba99b57b6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `flower_types`
--

CREATE TABLE `flower_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flower_types`
--

INSERT INTO `flower_types` (`id`, `type_name`) VALUES
(1, 'Rose'),
(2, 'Lily');

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
(2, '2021_06_30_134107_create_flower_types_table', 1),
(3, '2021_06_30_150425_create_flowers_table', 1),
(4, '2021_07_01_023347_create_couriers_table', 1),
(5, '2021_07_01_030455_create_carts_table', 1),
(6, '2021_07_01_030914_create_cart_details_table', 1),
(7, '2021_07_01_031455_create_transactions_table', 1),
(8, '2021_07_01_031940_create_transaction_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `transaction_date` datetime NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `courier_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `transaction_date`, `user_id`, `courier_id`) VALUES
(1, '2021-07-21 10:33:47', 2, 1),
(2, '2021-07-21 10:47:06', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `transaction_id` int(10) UNSIGNED NOT NULL,
  `flower_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`transaction_id`, `flower_id`, `quantity`) VALUES
(1, 3, 3),
(1, 5, 2),
(2, 1, 1),
(2, 6, 7),
(2, 11, 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `gender`, `address`, `profile_pic_path`, `role`) VALUES
(1, 'Administrator', 'admin@mail.com', '$2y$10$11Ry.VaJG3dLQxoPx5w6IuOjOqGfewmgqQ41spf1W6d4WMM7pnXz6', '99999999', 'male', '12345 Street', 'user/73b47e53-dccd-4baf-b6ba-b22824287bba.png', 'admin'),
(2, 'Dummy Account', 'dummy@mail.com', '$2y$10$oxxRkagayuFjXXWarqBknuf9ThDozed9x/AWf398UDXa7ekhfQdI.', '77777777', 'female', '6789 Street', 'user/73b47e53-dccd-4baf-b6ba-b22824287bba.png', 'member'),
(3, 'Jevon', 'jevon@mail.com', '$2y$10$PaIsYo9/L6DYEAB3Pu0uPu5wPQaLhkbVZAYtmQjmjrMxmAGpmE.Om', '123456789', 'male', 'Jalan Bedugul No. 1', 'user/18e31680-1cbc-4df8-9d2e-58ab90f7f562.jpg', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`cart_id`,`flower_id`),
  ADD KEY `cart_details_cart_id_index` (`cart_id`),
  ADD KEY `cart_details_flower_id_index` (`flower_id`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flowers_flower_type_id_foreign` (`flower_type_id`);

--
-- Indexes for table `flower_types`
--
ALTER TABLE `flower_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_courier_id_foreign` (`courier_id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`transaction_id`,`flower_id`),
  ADD KEY `transaction_details_transaction_id_index` (`transaction_id`),
  ADD KEY `transaction_details_flower_id_index` (`flower_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `flower_types`
--
ALTER TABLE `flower_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_details_flower_id_foreign` FOREIGN KEY (`flower_id`) REFERENCES `flowers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `flowers`
--
ALTER TABLE `flowers`
  ADD CONSTRAINT `flowers_flower_type_id_foreign` FOREIGN KEY (`flower_type_id`) REFERENCES `flower_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_courier_id_foreign` FOREIGN KEY (`courier_id`) REFERENCES `couriers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_flower_id_foreign` FOREIGN KEY (`flower_id`) REFERENCES `flowers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
