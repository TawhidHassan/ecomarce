-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 05:57 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_email`, `admin_password`, `name`, `created_at`, `updated_at`) VALUES
(3, 'sifat@gmail.com', '123456', 'sifat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `categorey_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorey_discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Public_statas` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`category_id`, `categorey_name`, `categorey_discription`, `Public_statas`, `created_at`, `updated_at`) VALUES
(7, 'Others', 'this other', 1, NULL, NULL),
(9, 'Sports', 'This is sports&nbsp;', 1, NULL, NULL),
(10, 'Electronics', 'This electronics', 1, NULL, NULL),
(11, 'Cloth', 'this colots', 0, NULL, NULL),
(12, 'Furniture', 'Rhis furnicher', 1, NULL, NULL),
(13, 'womwen', 'this women', 1, NULL, NULL),
(14, 'cloeths', 'this is clothes', 1, NULL, NULL),
(15, 'baby', 'this is baby toy', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coustomer_tbl`
--

CREATE TABLE `coustomer_tbl` (
  `coustomer_id` int(10) UNSIGNED NOT NULL,
  `coustomer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coustomer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coustomer_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coustomer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coustomer_tbl`
--

INSERT INTO `coustomer_tbl` (`coustomer_id`, `coustomer_name`, `coustomer_email`, `coustomer_number`, `coustomer_password`, `created_at`, `updated_at`) VALUES
(1, 'sifat', 'sifat00@gmail.com', '1234567890', '123456', NULL, NULL),
(4, 'sifat', 'sifat00@gmail.com', '1234567890', '123456', NULL, NULL),
(5, 'sifat', 'sifat99@gmail.com', '1234567890', '123456', NULL, NULL),
(6, 'sihab', 'sifat@gmail.com', '1234567890', '123456', NULL, NULL),
(7, 'uhiuh', 'sifatkjhiu@gmail.com', '4567890-', '123456', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufactur`
--

CREATE TABLE `manufactur` (
  `manufactur_id` int(10) UNSIGNED NOT NULL,
  `manufactur_nmae` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufactur_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `public_states` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufactur`
--

INSERT INTO `manufactur` (`manufactur_id`, `manufactur_nmae`, `manufactur_description`, `public_states`, `created_at`, `updated_at`) VALUES
(1, 'samsang', 'this is ellectirc', 1, NULL, NULL),
(2, 'Zara', 'This is zara brand', 0, NULL, NULL),
(3, 'Autobee', 'This furnichar brands', 1, NULL, NULL),
(4, 'Apple', 'this apple brand', 1, NULL, NULL),
(5, 'addedas', 'this is addedas brand', 1, NULL, NULL),
(6, 'chillo rose', 'this is women brand', 1, NULL, NULL);

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
(1, '2018_09_24_063840_create_admin_login_table', 1),
(2, '2018_09_24_150218_create_category_tbl_table', 2),
(3, '2018_09_26_141040_create_manufactur_table', 3),
(4, '2018_09_27_052435_create_products_tbl_table', 4),
(5, '2018_09_28_044640_create_slider_tbl_table', 5),
(6, '2018_10_01_051048_create_coustomer_tbl_table', 6),
(7, '2018_10_01_055829_create_shiping_tbl_table', 7),
(8, '2018_10_02_141805_create_payment_tbl_table', 8),
(9, '2018_10_02_141859_create_order_tbl_table', 9),
(10, '2018_10_02_141939_create_order_details_tbl_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `order_details_tbl`
--

CREATE TABLE `order_details_tbl` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_sels_quntity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details_tbl`
--

INSERT INTO `order_details_tbl` (`order_details_id`, `order_id`, `product_id`, `product_name`, `products_price`, `products_sels_quntity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'iphone', '120000', '3', NULL, NULL),
(2, 2, 1, 'iphone', '120000', '3', NULL, NULL),
(3, 3, 1, 'iphone', '120000', '3', NULL, NULL),
(4, 4, 1, 'iphone', '120000', '3', NULL, NULL),
(5, 4, 3, 'iphonex', '190000', '3', NULL, NULL),
(6, 4, 4, 'sammang j7', '120000', '3', NULL, NULL),
(7, 5, 1, 'iphone', '120000', '3', NULL, NULL),
(8, 5, 3, 'iphonex', '190000', '3', NULL, NULL),
(9, 5, 4, 'sammang j7', '120000', '3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(11) NOT NULL,
  `shiping_id` int(11) NOT NULL,
  `coustomer_id` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_statas` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`order_id`, `payment_id`, `shiping_id`, `coustomer_id`, `order_total`, `order_statas`, `created_at`, `updated_at`) VALUES
(1, 12, 8, 1, '360,000.00', 'panding', '2018-10-03 13:45:28', NULL),
(2, 13, 8, 1, '360,000.00', 'panding', '2018-10-03 14:03:26', NULL),
(3, 14, 8, 1, '360,000.00', 'panding', '2018-10-03 14:03:32', NULL),
(4, 15, 8, 1, '1,290,000.00', 'panding', '2018-10-03 14:06:08', NULL),
(5, 16, 8, 1, '1,290,000.00', 'panding', '2018-10-03 14:10:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_statas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`payment_id`, `payment_method`, `payment_statas`, `created_at`, `updated_at`) VALUES
(1, 'visa', 'panding', NULL, NULL),
(2, 'visa', 'panding', NULL, NULL),
(3, 'hand_cash', 'panding', NULL, NULL),
(4, 'visa', 'panding', NULL, NULL),
(5, 'visa', 'panding', NULL, NULL),
(6, 'visa', 'panding', NULL, NULL),
(7, 'hand_cash', 'panding', NULL, NULL),
(8, 'visa', 'panding', NULL, NULL),
(9, 'visa', 'panding', NULL, NULL),
(10, 'visa', 'panding', NULL, NULL),
(11, 'visa', 'panding', NULL, NULL),
(12, 'visa', 'panding', NULL, NULL),
(13, 'visa', 'panding', NULL, NULL),
(14, 'hand_cash', 'panding', NULL, NULL),
(15, 'hand_cash', 'panding', NULL, NULL),
(16, 'hand_cash', 'panding', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `manufactur_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_sort_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_price` double(8,2) NOT NULL,
  `products_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_pulic_statas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`product_id`, `manufactur_id`, `category_id`, `product_name`, `products_sort_description`, `products_long_description`, `products_price`, `products_image`, `products_size`, `products_color`, `products_pulic_statas`, `created_at`, `updated_at`) VALUES
(1, 4, 7, 'iphone', 'this phone', 'iphone product use to text', 120000.00, 'image/agjnjYnQZo1vElJCiOA3.jpg', '5inch', 'black,red,gray', 1, NULL, NULL),
(3, 4, 7, 'iphonex', 'joos', 'mobile', 190000.00, 'image/gZdvjPXItHMKEwtn8Yb2.jpg', '32', 'green', 1, NULL, NULL),
(4, 1, 7, 'sammang j7', 'moile', 'samsang brand new mobile', 120000.00, 'image/pGn7AzrYTyUVlU8NiWHD.jpg', 'xll', 'black,red,gray', 1, NULL, NULL),
(5, 4, 7, 'iphone', 'dyudguydg', 'hjbiuji', 56789.00, 'image/WnLuF94y5UQg3iPsdKZc.jpg', '5inch', 'black,red,gray', 1, NULL, NULL),
(6, 4, 9, 'xxx', 'uihi', 'iubiun', 190000.00, 'image/LgRN3sh2XgzVwk5go5j5.jpg', '32', 'black,red,gray', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shiping_tbl`
--

CREATE TABLE `shiping_tbl` (
  `shiping_id` int(10) UNSIGNED NOT NULL,
  `siping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siping_zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siping_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shiping_tbl`
--

INSERT INTO `shiping_tbl` (`shiping_id`, `siping_email`, `siping_name`, `siping_address`, `siping_city`, `siping_zip`, `siping_mobile`, `created_at`, `updated_at`) VALUES
(1, 'sifat27@gmail.com', 'sifat', 'dhaka', 'dhaka', '1234', '4567890-', NULL, NULL),
(2, 'sifat@gmail.com', 'fghjkl', 'bnm', 'hjkl', '56789', '4567890', NULL, NULL),
(3, 'sifat27@gmail.com', 'sifat', 'dhaka', 'dhaka', '1234', '4567890-', NULL, NULL),
(4, 'sifat27@gmail.com', 'sifat', 'dhaka', 'dhaka', '1234', '4567890-', NULL, NULL),
(5, 'sifat27@gmail.com', 'sifat', 'dhaka', 'dhaka', '1234', '4567890-', NULL, NULL),
(6, 'sifat27@gmail.com', 'sifat', 'dhaka', 'dhaka', '1234', '4567890-', NULL, NULL),
(7, 'sifat27@gmail.com', 'sifat', 'dhaka', 'dhaka', '1234', '4567890-', NULL, NULL),
(8, 'sifat27@gmail.com', 'sifat', 'dhaka', 'dhaka', '1234', '4567890-', NULL, NULL),
(9, 'sifat@gmail.com', 'fghjkl', 'bnm', 'hjkl', '56789', '4567890', NULL, NULL),
(10, 'sifat@gmail.com', 'fghjkl', 'bnm', 'hjkl', '56789', '4567890', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_tbl`
--

CREATE TABLE `slider_tbl` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_titel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_fulldetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_public_statas` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_tbl`
--

INSERT INTO `slider_tbl` (`slider_id`, `slider_image`, `slider_titel`, `slider_fulldetails`, `slider_public_statas`, `created_at`, `updated_at`) VALUES
(4, 'image/MVa6DyHR6Suyguitucsf.jpg', 'Big boom offer', 'this only for you', 1, NULL, NULL),
(7, 'image/7neSKG7FkHN0WFKCrAvV.png', 'cool', 'jgdiush iushdiu sgsh siugsiuhs98sh jushiushsiunm&nbsp; ysbns sygskjs shjsius shs', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `coustomer_tbl`
--
ALTER TABLE `coustomer_tbl`
  ADD PRIMARY KEY (`coustomer_id`);

--
-- Indexes for table `manufactur`
--
ALTER TABLE `manufactur`
  ADD PRIMARY KEY (`manufactur_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details_tbl`
--
ALTER TABLE `order_details_tbl`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shiping_tbl`
--
ALTER TABLE `shiping_tbl`
  ADD PRIMARY KEY (`shiping_id`);

--
-- Indexes for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `coustomer_tbl`
--
ALTER TABLE `coustomer_tbl`
  MODIFY `coustomer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manufactur`
--
ALTER TABLE `manufactur`
  MODIFY `manufactur_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_details_tbl`
--
ALTER TABLE `order_details_tbl`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shiping_tbl`
--
ALTER TABLE `shiping_tbl`
  MODIFY `shiping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
