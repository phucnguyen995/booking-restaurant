-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2018 at 02:52 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_order` datetime NOT NULL,
  `total` double NOT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `user_id`, `date_order`, `total`, `address`, `created_at`, `updated_at`) VALUES
(4, 6, '2018-11-18 11:46:10', 32, 'Nguyen tat thanh - Kien Duc', '2018-11-18 04:46:10', '2018-11-18 04:46:10'),
(5, 6, '2018-11-18 12:34:58', 10, 'Nguyen tat thanh - Kien Duc', '2018-11-18 05:34:58', '2018-11-18 05:34:58'),
(9, 6, '2018-11-18 13:48:15', 30, '48, 48', '2018-11-18 06:48:15', '2018-11-18 06:48:15'),
(10, 6, '2018-11-18 13:48:52', 15, '111111111111111111', '2018-11-18 06:48:52', '2018-11-18 06:48:52'),
(11, 5, '2018-11-25 07:39:05', 10, '48, 48', '2018-11-25 00:39:05', '2018-11-25 00:39:05'),
(12, 5, '2018-11-25 07:40:58', 25, 'Nguyen tat thanh - Kien Duc', '2018-11-25 00:40:58', '2018-11-25 00:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE IF NOT EXISTS `bill_details` (
  `id` int(10) unsigned NOT NULL,
  `bill_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `subtotal` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`id`, `bill_id`, `food_id`, `qty`, `price`, `subtotal`, `created_at`, `updated_at`) VALUES
(2, 4, 3, 1, 25, 25, '2018-11-18 04:46:10', '2018-11-18 04:46:10'),
(3, 4, 7, 1, 7, 7, '2018-11-18 04:46:10', '2018-11-18 04:46:10'),
(4, 5, 4, 1, 10, 10, '2018-11-18 05:34:58', '2018-11-18 05:34:58'),
(5, 9, 9, 1, 20, 20, '2018-11-18 06:48:15', '2018-11-18 06:48:15'),
(6, 9, 12, 1, 10, 10, '2018-11-18 06:48:15', '2018-11-18 06:48:15'),
(7, 10, 5, 1, 15, 15, '2018-11-18 06:48:52', '2018-11-18 06:48:52'),
(8, 11, 4, 1, 10, 10, '2018-11-25 00:39:05', '2018-11-25 00:39:05'),
(9, 12, 4, 2, 10, 20, '2018-11-25 00:40:58', '2018-11-25 00:40:58'),
(10, 12, 11, 1, 5, 5, '2018-11-25 00:40:58', '2018-11-25 00:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_book` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `time_book` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `party_size` int(11) NOT NULL,
  `confirm` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `date_book`, `time_book`, `party_size`, `confirm`, `updated_at`, `created_at`) VALUES
(8, 5, '27-12-2018', '15:00PM', 8, 0, '2018-12-10 00:45:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cate_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cate_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `cate_img`, `cate_desc`, `created_at`, `updated_at`) VALUES
(1, 'pizzas', 'pizzas.png', 'Lorem ipsum dolor sit amet, cont tempor incididunt ut labore dolor adipiscing elit, sed do eiusmod et  magna aliquaquat officia.', '0000-00-00', '0000-00-00'),
(2, 'coffee', 'coffee.png', 'Lorem ipsum dolor sit amet, cont tempor incididunt ut labore dolor adipiscing elit, sed do eiusmod et  magna aliquaquat officia.', '0000-00-00', '0000-00-00'),
(3, 'burgers', 'burgers.png', 'Lorem ipsum dolor sit amet, cont tempor incididunt ut labore dolor adipiscing elit, sed do eiusmod et  magna aliquaquat officia.', '0000-00-00', '0000-00-00'),
(4, 'drinks', 'drinks.png', 'Lorem ipsum dolor sit amet, cont tempor incididunt ut labore dolor adipiscing elit, sed do eiusmod et  magna aliquaquat officia.', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `food_id`, `name`, `email`, `content`, `created_at`, `updated_at`) VALUES
(2, 2, 'Hanh', 'hanh@gmail.com', 'Hello', '2018-12-09 17:22:44', '2018-12-09 17:22:44'),
(3, 3, 'phuc nguyen', 'phuc.nv995@gmail.com', 'helo', '2018-12-09 17:28:00', '2018-12-09 17:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE IF NOT EXISTS `foods` (
  `id` int(11) NOT NULL,
  `food_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `food_cate` int(11) NOT NULL,
  `food_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `food_price` double NOT NULL,
  `food_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `food_name`, `food_cate`, `food_desc`, `food_price`, `food_img`, `updated_at`, `created_at`) VALUES
(2, 'Lasagne Pasta', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 16, 'pizza.jpg', '0000-00-00', '0000-00-00'),
(3, 'Hamburger', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 25, 'burgers.jpg', '0000-00-00', '0000-00-00'),
(4, 'Apple juice', 4, 'Lorem ipsum dolor sit amet, cont tempor incididunt....', 10, 'apple.jpg', '0000-00-00', '0000-00-00'),
(5, 'Capuchino', 2, 'Lorem ipsum dolor sit amet, cont tempor incididunt....', 15, 'capuchino.jpg', '0000-00-00', '0000-00-00'),
(6, 'Expresso', 2, 'Lorem ipsum dolor sit amet, cont tempor incididunt....', 13, 'expressso.jpg', '0000-00-00', '0000-00-00'),
(7, 'Coconut water', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 7, 'nuoc-dua.jpg', '0000-00-00', '0000-00-00'),
(8, 'Shrimp hamburger', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing....', 8, 'shirmp-hambuger.jpg', '0000-00-00', '0000-00-00'),
(9, 'Seafood pizza', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing....', 20, 'seafood-pizza.jpg', '0000-00-00', '0000-00-00'),
(10, 'Hamburger beef', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 7, 'hambuger-bo.jpg', '0000-00-00', '0000-00-00'),
(11, 'Orange juice', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing....', 5, 'nuoc-cam.jpg', '0000-00-00', '0000-00-00'),
(12, 'Aromatic juice', 4, 'Lorem ipsum dolor sit amet, cont tempor incididunt....', 10, 'nuoc-ep-thom.jpg', '0000-00-00', '0000-00-00'),
(13, 'Coffee-milk', 2, 'Lorem ipsum dolor sit amet, cont tempor incididunt....', 5, 'coffee-milk.jpg', '0000-00-00', '0000-00-00'),
(14, 'Matcha milk tea', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 'trasuamachat.jpg', '0000-00-00', '0000-00-00'),
(15, 'Chocolate', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5, 'Chocolate.jpg', '0000-00-00', '0000-00-00'),
(16, 'Pizza-beef', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 10, 'pizza-beef.jpg', '0000-00-00', '0000-00-00'),
(17, 'Pizza- mixed', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 15, 'pizza-thapcam.jpg', '0000-00-00', '0000-00-00'),
(18, 'Strawberry milk tea', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5, 'tra-sua-dau.jpg', '0000-00-00', '0000-00-00'),
(19, 'Buffalo chicken Pizza', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20, 'pizza-bufalo.jpg', '0000-00-00', '0000-00-00'),
(20, 'Magherita Pizza', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 15, 'margherita-pizza.jpg', '0000-00-00', '0000-00-00'),
(21, 'Hot and Spicy Pizza', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 14, 'hot-pizza.jpg', '0000-00-00', '0000-00-00'),
(22, 'The eternal burger', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20, 'burger-pho-mai.jpg', '0000-00-00', '0000-00-00'),
(23, 'Chicken burger with special sauce', 3, 'The sauce is a mixture of cream, cheese, and spicy, sweet Asian flavors that can become the main dish in your kitchen.', 15, 'burger-ga-sot.jpg', '0000-00-00', '0000-00-00'),
(24, 'Cheese cheddar chicken breast southwest with grilled onions', 3, 'A little wheat germ added nutrition, boost turkey flavor and spice up the Southwest style burger. To make it more spicy, use Monterey Jack cheese with Jalapeño chili.', 16, 'burger-ga-tay-nam.jpg', '0000-00-00', '0000-00-00'),
(25, 'Pudding-coffee', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 13, 'pudding-coffee.jpg', '0000-00-00', '0000-00-00'),
(27, 'Café de olla - Mexico', 2, 'Boiled with a cinnamon stick, traditional Mexican coffee uses piloncillo (raw sugar) and is served in a glass of pottery, locally considered to increase the taste of the coffee.\r\n', 23, 'cafe-mexico.jpg', '0000-00-00', '0000-00-00'),
(28, 'Irish coffee - Ireland', 2, 'This is a blend of coffee and cocktails including hot coffee, whiskey, sugar and a topping cream.\r\n', 25, 'cafe-ireland.jpg', '0000-00-00', '0000-00-00'),
(29, 'Soda', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Eceeur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5, 'soda.jpg', '0000-00-00', '0000-00-00');

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
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2018_11_18_111714_create_bills_table', 2),
('2018_11_18_111737_create_bill_details_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `gender`, `email`, `phone`, `user_level`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', '$2y$10$eFnd3VIxUNINnLWG5humdup2JfultDLz5IyJ3k6oN8BonAQLsIiUe', 1, 'admin@gmail.com', '99999999', 1, 'LD32HC7IWEs1Tu2ir7BKyWQ4h3XeuCnf9TQFVXIeaPF8aw0xEHX4lJiVHDUW', '2018-10-07 23:53:49', '2018-12-09 19:34:21'),
(5, 'Hanh', '$2y$10$oZ/R0HbZ1V5UMXg1SWjVu.EM1Xser3JcK8NhbvYWzk8nax7wrupje', 1, 'hanh@gmail.com', '1111111111', 0, 'bJdwHzwtWqcIQnA13hUS4UZ6bv0muelzXZuOSnPknQ1vvlxUnp3KAz7HdcG4', '2018-10-08 02:27:01', '2018-12-09 19:34:03'),
(6, 'phuc nguyen', '$2y$10$aVDcGgMOCg1/d0CE8DxmL.4gNltbRMCtV6nV0zWnvBYQADzooCbD2', 1, 'phuc@gmail.com', '1676093546', 0, '8gBRb23aehbSjSVNktIJ5TYOl1ioeCtdKXP41YeLOiUmGA1AvTnhxu6sC1CW', '2018-10-13 10:06:49', '2018-12-09 17:55:32'),
(7, 'hanh', '$2y$10$IfJzWU1wv8eMDWS9TKH5UOQUQ.1Rniw1LDPKyG3Xg3rdPX3yX2LIO', 0, 'admin1@gmail.com', '12345678910', 0, '4JToQiPMiaXcZivOZLHJC8nGCB41pxmA3xoXn81D6tsjEo8HRhdLnbcjYzp5', '2018-10-15 02:20:16', '2018-10-15 02:20:26'),
(8, 'Nguyen Van Phuc', '$2y$10$43373DiIAsmd88xzMfr6h.zwoInq/ZR5c5Q4d0EsSSiDJkM2UK3B6', 1, 'ebisu@gmail.com', '123456', 0, 'QBa6V7zMgT9UuzgxOMHuymePHYlSDu5hQ3zTv5T2zYNQfZ9IcKSxwE3nCkuC', '2018-11-18 07:18:59', '2018-11-18 07:19:08'),
(9, 'Test', '$2y$10$T0m6bV54ITKwY4mox66f6uqPDpFcVAvBb.GHqscmS62jN4E/zcAqa', 1, 'test@gmail.com', '01676093546', 0, 'fzkpUoCBuaYIgXlZjvSDg3Rs84uv6nh3k0C1HnEzLluV5raNyOgNF5ZHBEOG', '2018-12-09 17:56:08', '2018-12-09 18:30:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
