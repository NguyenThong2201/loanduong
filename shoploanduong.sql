-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 06:04 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoploanduong`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_sale` varchar(255) NOT NULL,
  `description` text CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `title`, `title_sale`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Quần Jen Nữ', 'Quan-Jen-Nu', 'Hàng nhập khẩu', '2018-09-29 09:14:32', '2018-09-29 09:14:32'),
(2, 'Ảo Sơ Mi Nam', 'ao-So-Mi-Nam', 'Áo sơ mi đẹp , hàng nhập khẩu', '2018-09-29 09:15:47', '2018-09-29 09:15:47'),
(3, 'Áo Thun Nam', 'ao-Thun-Nam', 'Áo thun cao cấp', '2018-09-29 09:17:14', '2018-09-29 09:17:14'),
(4, 'Quần Jen Nam', 'Quan-Jen-Nam', 'Quần chất lượng', '2018-09-29 09:40:46', '2018-09-29 09:40:46'),
(5, 'Quần Tây', 'Quan-Tay', 'Quần tây kiểu dáng đẹp', '2018-09-29 09:41:17', '2018-09-29 09:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `img_name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `product_id`, `img_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pem_555.png', NULL, '2018-09-29 09:31:39', '2018-09-29 09:31:39'),
(2, 1, 'kek_hhh.png', NULL, '2018-09-29 09:31:39', '2018-09-29 09:31:39'),
(3, 1, 'Sfo_nn.png', NULL, '2018-09-29 09:31:39', '2018-09-29 09:31:39'),
(4, 2, 'gDZ_somi.jpg', NULL, '2018-09-29 09:38:26', '2018-09-29 09:38:26'),
(5, 2, 'M75_somi2.jpg', NULL, '2018-09-29 09:38:26', '2018-09-29 09:38:26'),
(6, 2, '7xP_somi3.jpg', NULL, '2018-09-29 09:38:26', '2018-09-29 09:38:26'),
(7, 3, 'mTT_34c1c56jen.jpg', NULL, '2018-09-29 09:42:39', '2018-09-29 09:42:39'),
(8, 3, 'NCT_c6c3jenhh.jpg', NULL, '2018-09-29 09:42:39', '2018-09-29 09:42:39'),
(9, 3, 'uyf_iẹn6.jpg', NULL, '2018-09-29 09:42:39', '2018-09-29 09:42:39'),
(10, 3, '1HM_jenh9.jpg', NULL, '2018-09-29 09:42:39', '2018-09-29 09:42:39'),
(11, 4, '9Ih_bd94f3fsomif.jpg', NULL, '2018-09-29 10:24:42', '2018-09-29 10:24:42'),
(12, 4, '43T_somiec.jpg', NULL, '2018-09-29 10:24:42', '2018-09-29 10:24:42'),
(13, 4, '6Qd_sommm.jpg', NULL, '2018-09-29 10:24:42', '2018-09-29 10:24:42'),
(14, 4, 'wMZ_trr1.jpg', NULL, '2018-09-29 10:24:42', '2018-09-29 10:24:42'),
(15, 5, 'gcN_d07pkle.jpg', NULL, '2018-09-29 10:27:08', '2018-09-29 10:27:08'),
(16, 5, 'fO9_hh0.jpg', NULL, '2018-09-29 10:27:08', '2018-09-29 10:27:08'),
(17, 5, '9hG_ô.jpg', NULL, '2018-09-29 10:27:08', '2018-09-29 10:27:08'),
(18, 5, 'IZe_pp.jpg', NULL, '2018-09-29 10:27:08', '2018-09-29 10:27:08'),
(19, 5, 'kXe_ppp3.jpg', NULL, '2018-09-29 10:27:08', '2018-09-29 10:27:08'),
(20, 6, '4u1_04.jpg', NULL, '2018-10-02 06:33:03', '2018-10-02 06:33:03'),
(21, 6, 'a7E_05.jpg', NULL, '2018-10-02 06:33:03', '2018-10-02 06:33:03'),
(22, 6, 'mVg_08.jpg', NULL, '2018-10-02 06:33:03', '2018-10-02 06:33:03'),
(23, 6, 'F7E_16.jpg', NULL, '2018-10-02 06:33:03', '2018-10-02 06:33:03'),
(24, 7, 'hzF_10.jpg', NULL, '2018-10-02 06:35:12', '2018-10-02 06:35:12'),
(25, 7, '5og_11.jpg', NULL, '2018-10-02 06:35:12', '2018-10-02 06:35:12'),
(26, 7, 'hZj_12.jpg', NULL, '2018-10-02 06:35:12', '2018-10-02 06:35:12'),
(27, 7, 'RB7_13.jpg', NULL, '2018-10-02 06:35:12', '2018-10-02 06:35:12'),
(28, 7, 'egr_14.jpg', NULL, '2018-10-02 06:35:12', '2018-10-02 06:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `title_sale` varchar(255) DEFAULT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `sex` int(11) NOT NULL,
  `unit_price` float NOT NULL,
  `promotion_price` float NOT NULL,
  `time_open` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `unit` int(11) NOT NULL,
  `display_home` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `title`, `title_sale`, `image`, `description`, `sex`, `unit_price`, `promotion_price`, `time_open`, `unit`, `display_home`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Quần jen nữ 375', 'quan-jen-nu-375', 'zFt_nn.png', 'Quần nhập khẩu từ trung quốc. hàng chất lượng', 1, 180000, 170000, '2018-09-29 17:34:43', 21, NULL, 1, '2018-09-29 09:31:39', '2018-09-29 09:31:39'),
(2, 2, 'Sơ Mi Nam No Style', 'so-mi-nam-no-style', 'k5U_somi3.jpg', 'Áo nhập từ yame', 2, 180000, 150000, '2018-09-29 17:34:57', 30, NULL, 1, '2018-09-29 09:38:26', '2018-09-29 09:38:26'),
(3, 4, 'Quần Jean Nam No Style Dài A25', 'quan-jean-nam-no-style-dai-a25', '5zr_jenh9.jpg', 'Quân jen cao cấp', 2, 250000, 230000, '2018-09-29 17:34:55', 36, NULL, 1, '2018-09-29 09:42:39', '2018-09-29 09:42:39'),
(4, 2, 'Sơ Mi Adachi B07', 'so-mi-adachi-b07', 'bXs_bd94f3fsomif.jpg', 'Sơ mi cao cấp', 2, 245000, 230000, '2018-09-29 17:35:01', 32, NULL, 1, '2018-09-29 10:24:42', '2018-09-29 10:24:42'),
(5, 3, 'Áo Thun Nam Adachi Basic BA01', 'ao-thun-nam-adachi-basic-ba01', 'buW_pp.jpg', 'Áo thun cho nam', 3, 150000, 130000, '2018-09-29 17:35:05', 123, NULL, 1, '2018-09-29 10:27:08', '2018-09-29 10:27:08'),
(6, 1, 'Quần Jen Nữ JOLA', 'quan-jen-nu-jola', 'JoZ_16.jpg', 'Hàng xuất khẩu giá cao', 1, 250000, 160000, '2018-10-02 13:33:03', 32, NULL, 1, '2018-10-02 06:33:03', '2018-10-02 06:33:03'),
(7, 4, 'Quần jen nam pro', 'quan-jen-nam-pro', 'B1u_10.jpg', 'Hàng mỹ nhập về', 2, 320000, 250000, '2018-10-02 13:35:12', 32, NULL, 1, '2018-10-02 06:35:12', '2018-10-02 06:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyen Ba Thong', 'nguyenbathong@kng.vn', '$2y$10$RGoA8465kgj4E.v/XHzzwOxmugCKJp1yUN1tupT4tJi2qL4cdVzHe', NULL, '2018-09-28 09:22:28', '2018-09-28 09:22:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
