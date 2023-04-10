-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 03:29 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `godyvn`
--
CREATE DATABASE IF NOT EXISTS `godyvn` DEFAULT CHARACTER SET utf8 COLLATE utf8_vietnamese_ci;
USE `godyvn`;

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `subject`, `content`, `url`, `method`, `ip`, `agent`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 15:49 PM ngày 26/03/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, '2023-03-26 08:49:52', '2023-03-26 08:49:52'),
(2, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 22:46 PM ngày 26/03/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, '2023-03-26 15:46:29', '2023-03-26 15:46:29'),
(3, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 22:47 PM ngày 26/03/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, '2023-03-26 15:47:51', '2023-03-26 15:47:51'),
(4, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 14:38 PM ngày 02/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/public/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, '2023-04-02 07:38:14', '2023-04-02 07:38:14'),
(5, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 15:05 PM ngày 02/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/public/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, '2023-04-02 08:05:57', '2023-04-02 08:05:57'),
(6, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 10:13 AM ngày 08/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-08 03:13:07', '2023-04-08 03:13:07'),
(7, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 11:49 AM ngày 08/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-08 04:49:46', '2023-04-08 04:49:46'),
(8, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 17:15 PM ngày 08/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-08 10:15:15', '2023-04-08 10:15:15'),
(9, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 20:08 PM ngày 08/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-08 13:08:32', '2023-04-08 13:08:32'),
(10, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 23:08 PM ngày 08/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-08 16:08:56', '2023-04-08 16:08:56'),
(11, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 09:17 AM ngày 09/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-09 02:17:21', '2023-04-09 02:17:21'),
(12, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 09:22 AM ngày 09/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-09 02:22:39', '2023-04-09 02:22:39'),
(13, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 09:32 AM ngày 09/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-09 02:32:24', '2023-04-09 02:32:24'),
(14, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 11:07 AM ngày 09/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-09 04:07:13', '2023-04-09 04:07:13'),
(15, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 15:04 PM ngày 09/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-09 08:04:14', '2023-04-09 08:04:14'),
(16, 'Đăng nhập', 'Tài khoản admin@gmail.com đăng nhập CMS vào lúc 15:17 PM ngày 09/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/login', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-09 08:17:01', '2023-04-09 08:17:01'),
(17, 'Tạo mới điểm đến', 'Tài khoản admin@gmail.com tạo mới điểm đến An Giang vào lúc 15:23 PM ngày 09/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/locations/store', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-09 08:23:01', '2023-04-09 08:23:01'),
(18, 'Sửa điểm đến', 'Tài khoản admin@gmail.com sửa điểm đến An Giang vào lúc 17:08 PM ngày 09/04/2023', 'https://127.0.0.1/php_laravel_godyvn/cms/locations/update/1', 'POST', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 1, '2023-04-09 10:08:59', '2023-04-09 10:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `author_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `published_at` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `share_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_hot_blogger` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `is_godygram` tinyint(3) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `share_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `has_questions` tinyint(4) DEFAULT 0,
  `category_type` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_actived` tinyint(3) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `share_url`, `description`, `parent_id`, `has_questions`, `category_type`, `meta_title`, `meta_keyword`, `meta_description`, `is_actived`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu', 'gioi-thieu', '/gioi-thieu', 'Giới thiệu', 0, 0, NULL, 'Giới thiệu', 'Giới thiệu', 'Giới thiệu', 1, '2023-04-09 02:32:40', '2023-04-09 02:32:40'),
(2, 'Liên hệ', 'lien-he', '/lien-he', 'Liên hệ', 0, 0, NULL, 'Liên hệ', 'Liên hệ', 'Liên hệ', 1, '2023-04-09 02:49:48', '2023-04-09 02:49:48'),
(3, 'Chính sách bảo mật', 'chinh-sach-bao-mat', '/chinh-sach-bao-mat', 'Chính sách bảo mật', 0, 0, NULL, 'Chính sách bảo mật', 'Chính sách bảo mật', 'Chính sách bảo mật', 1, '2023-04-09 02:50:22', '2023-04-09 02:50:22'),
(4, 'Chính sách quyền riêng tư', 'chinh-sach-quyen-rieng-tu', '/chinh-sach-quyen-rieng-tu', 'Chính sách quyền riêng tư', 0, 0, NULL, 'Chính sách quyền riêng tư', 'Chính sách quyền riêng tư', 'Chính sách quyền riêng tư', 1, '2023-04-09 03:53:53', '2023-04-09 03:53:53'),
(5, 'Chính sách sử dụng', 'chinh-sach-su-dung', '/chinh-sach-su-dung', 'Chính sách sử dụng', 0, 0, NULL, 'Chính sách sử dụng', 'Chính sách sử dụng', 'Chính sách sử dụng', 1, '2023-04-09 03:55:02', '2023-04-09 03:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `category_has_posts`
--

CREATE TABLE `category_has_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` mediumint(9) NOT NULL,
  `disease_id` mediumint(9) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `author_phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_ip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_agent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `published_at` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(3) UNSIGNED DEFAULT 0,
  `deleted_at` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_closed` tinyint(3) UNSIGNED DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_employees` smallint(5) UNSIGNED DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_search` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `hot_location` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `popular_location` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `continent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `slug`, `top_search`, `hot_location`, `popular_location`, `continent`, `content`, `country`, `city`, `meta_title`, `meta_keyword`, `meta_description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'An Giang', 'an-giang', 0, 0, 0, 'Châu Á', '<p>An Giang được xem l&agrave; v&ugrave;ng đất linh thi&ecirc;ng với sự nổi tiếng của miếu b&agrave; ch&uacute;a Xứ. Sự nổi tiếng của miếu b&agrave; đ&ocirc;i khi &ldquo;lấn &aacute;t&rdquo; suy nghĩ của du kh&aacute;ch về những cảnh đẹp kh&aacute;c, ở An Giang c&ograve;n c&oacute; nhiều địa điểm rất kh&aacute;c đ&aacute;ng đến. V&agrave; ng&agrave;y nay, đến du lịch v&ugrave;ng đất An Giang người ta kh&ocirc;ng chỉ nhắc đến những chuyến h&agrave;nh hương về ch&ugrave;a Ch&acirc;u Đốc m&agrave; c&ograve;n l&agrave; những chuyến du ngoạn kh&aacute;m ph&aacute; những địa điểm du lịch nổi tiếng kh&aacute;c. Những rừng tr&agrave;m xanh biếc hay vườn quốc gia U&nbsp; minh thật sự rất đ&aacute;ng để bạn đặt ch&acirc;n đến kh&aacute;m ph&aacute;.</p>\r\n<br />\r\nAn Giang l&agrave; một tỉnh thuộc v&ugrave;ng đồng bằng s&ocirc;ng Cửu Long, Việt Nam. An Giang l&agrave; tỉnh c&oacute; d&acirc;n số đ&ocirc;ng nhất ở v&ugrave;ng Đồng bằng s&ocirc;ng Cửu Long, đồng thời cũng l&agrave; tỉnh c&oacute; d&acirc;n số đ&ocirc;ng thứ 6 tại Việt Nam (sau Th&agrave;nh phố Hồ Ch&iacute; Minh, H&agrave; Nội, Thanh H&oacute;a, Nghệ An v&agrave; Đồng Nai). Một phần diện t&iacute;ch của tỉnh An Giang nằm trong v&ugrave;ng tứ gi&aacute;c Long Xuy&ecirc;n.\r\n<h3>1. Tổng Quan</h3>\r\n\r\n<h3>1. ĐỊA L&Yacute;</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tỉnh An Giang c&oacute; diện t&iacute;ch 3.536,7 km&sup2;, bằng 1,03% diện t&iacute;ch cả nước v&agrave; đứng thứ 4 so với 13 tỉnh đồng bằng s&ocirc;ng Cửu Long, c&oacute; vị tr&iacute; địa l&yacute;:</p>\r\n\r\n<ul>\r\n	<li>Ph&iacute;a đ&ocirc;ng gi&aacute;p tỉnh Đồng Th&aacute;p.</li>\r\n	<li>Ph&iacute;a bắc v&agrave; t&acirc;y bắc gi&aacute;p hai tỉnh Kandal v&agrave; Tak&eacute;o của Campuchia với đường bi&ecirc;n giới d&agrave;i gần 104 km</li>\r\n	<li>Ph&iacute;a t&acirc;y nam gi&aacute;p tỉnh Ki&ecirc;n Giang.</li>\r\n	<li>Ph&iacute;a nam gi&aacute;p th&agrave;nh phố Cần Thơ.</li>\r\n	<li>Điểm cực Bắc của tỉnh nằm ở vĩ độ 10&deg;57&#39;B (x&atilde; Kh&aacute;nh An, huyện An Ph&uacute;), cực Nam ở vĩ độ 10&deg;12&#39;B (x&atilde; Thoại Giang, huyện Thoại Sơn), cực T&acirc;y ở 104&deg;46&#39;Đ (x&atilde; Vĩnh Gia, huyện Tri T&ocirc;n), cực Đ&ocirc;ng tr&ecirc;n kinh độ 105&deg;35&#39;Đ (x&atilde; B&igrave;nh Phước Xu&acirc;n, huyện Chợ Mới).</li>\r\n</ul>\r\n\r\n<p>Khoảng c&aacute;ch lớn nhất theo hướng bắc - nam l&agrave; 86 km v&agrave; đ&ocirc;ng - t&acirc;y l&agrave; 87,2 km.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>2. THỜI TIẾT DU LỊCH TH&Iacute;CH HỢP</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>An Giang c&oacute; vị tr&iacute; địa l&yacute; nằm gần x&iacute;ch đạo n&ecirc;n kh&iacute; hậu nơi đ&acirc;y c&oacute; những n&eacute;t tương đương với kh&iacute; hậu x&iacute;ch đạo. M&ugrave;a mưa ở An Giang k&eacute;o d&agrave;i từ th&aacute;ng 5 đến th&aacute;ng 11 n&ecirc;n nếu đi v&agrave;o thời điểm n&agrave;y bạn đừng qu&ecirc;n mang theo &aacute;o mưa.</p>\r\n\r\n<p>Nhiệt độ ở đ&acirc;y kh&aacute; ổn định, dao động trong khoảng 26-28&ordm;C. Tuy m&ugrave;a n&agrave;o An Giang cũng sở hữu vẻ đẹp ri&ecirc;ng, tuy nhi&ecirc;n, nếu đến đ&acirc;y v&agrave;o th&aacute;ng 4 hoặc th&aacute;ng 8 &acirc;m lịch, bạn sẽ được h&ograve;a m&igrave;nh v&agrave;o hai lễ hội lớn nhất nơi đ&acirc;y ch&iacute;nh l&agrave; lễ hội b&agrave; ch&uacute;a Xứ n&uacute;i Sam (23/4 &ndash; 27/4) v&agrave; lễ hội đua b&ograve; (cuối th&aacute;ng 8).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>3. DANH LAM THẮNG CẢNH NỔI TIẾNG</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Rừng tr&agrave;m Tr&agrave; Sư</li>\r\n	<li>Chợ nổi Long Xuy&ecirc;n</li>\r\n	<li>B&uacute;ng B&igrave;nh Thi&ecirc;n</li>\r\n	<li>N&uacute;i Vĩnh Tế</li>\r\n	<li>V&ugrave;ng Thất Sơn (v&ugrave;ng Bảy N&uacute;i)</li>\r\n	<li>Khu di chỉ &Oacute;c Eo</li>\r\n	<li>Khu du lịch N&uacute;i Sập</li>\r\n	<li>Khu di chỉ Tức Dụp</li>\r\n	<li>L&agrave;ng dệt thổ cẩm Ch&acirc;u Giang</li>\r\n	<li>N&uacute;i Cấm</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>4. VĂN H&Oacute;A</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>L&agrave; một trong số &iacute;t tỉnh ở ĐBSCL c&oacute; cả 4 d&acirc;n tộc Kinh, Chăm, Hoa, Khmer c&ugrave;ng sinh sống, đ&atilde; tạo cho An Giang sự đa dạng về m&agrave;u sắc văn h&oacute;a. Mỗi d&acirc;n tộc mang trong m&igrave;nh một bản sắc đặc trưng ri&ecirc;ng, h&ograve;a chung d&ograve;ng chảy thời gian, tạo n&ecirc;n sự cộng hưởng tr&ecirc;n mọi mặt của đời sống.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>2. Phương tiện</h3>\r\n\r\n<h3>1. GIAO TH&Ocirc;NG LI&Ecirc;N TỈNH</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Xe kh&aacute;ch</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>2. PHƯƠNG TIỆN TRONG TH&Agrave;NH PHỐ</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Taxi</strong></p>\r\n\r\n<p>Taxi hẳn sẽ l&agrave; lựa chọn h&agrave;ng đầu khi du lịch đến bất cứ nơi đ&acirc;u. Vừa tr&aacute;nh được nắng n&oacute;ng gay gắt, lại c&oacute; thể di chuyển một c&aacute;ch nhanh ch&oacute;ng, đi được nhiều người v&agrave; tương đối an to&agrave;n so với những phương tiện di chuyển kh&aacute;c. Hiện nay, c&oacute; th&ecirc;m dịch vụ book chuyến đi bằng Grab hay Uber, nhanh ch&oacute;ng v&agrave; tiết kiệm.</p>\r\n\r\n<p><strong>Xe m&aacute;y</strong></p>\r\n\r\n<p>C&oacute; hai h&igrave;nh thức di chuyển bằng xe m&aacute;y chủ yếu: xe &ocirc;m v&agrave; thu&ecirc; xe m&aacute;y tự l&aacute;i. Khi đi xe &ocirc;m, bạn chỉ cần n&oacute;i địa chỉ v&agrave; y&ecirc;n t&acirc;m ngồi sau những b&aacute;c xe &ocirc;m dễ thương để đến được địa điểm m&agrave; m&igrave;nh muốn.</p>\r\n\r\n<p><strong>Xe bus</strong></p>\r\n\r\n<p>Xe bu&yacute;t l&agrave; phương tiện c&ocirc;ng cộng rẻ nhất.</p>\r\n\r\n<p><strong>X&iacute;ch l&ocirc;</strong></p>\r\n\r\n<p>X&iacute;ch l&ocirc; kh&ocirc;ng chỉ được du kh&aacute;ch nước ngo&agrave;i m&agrave; c&ograve;n cả du kh&aacute;ch trong nước ưa chuộng. Tham quan th&agrave;nh phố, c&ugrave;ng ngắm nh&igrave;n d&ograve;ng xe đ&ocirc;ng đ&uacute;c qua từng v&ograve;ng quay chầm chậm của chiếc x&iacute;ch l&ocirc;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>3. S&Acirc;N BAY QUỐC TẾ</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kh&ocirc;ng c&oacute;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>3. Mạng &amp; internet</h3>\r\n\r\n<h3>1. MẠNG</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&aacute;c nh&agrave; mạng phổ biến: Mobiphone, Viettel, Vinaphone,...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>2. INTERNET</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Mạng 3G, 4G</li>\r\n	<li>Wifi c&oacute; ở nhiều nơi kh&aacute;ch sạn, nh&agrave; h&agrave;ng, qu&aacute;n c&agrave; ph&ecirc;,..</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>4. Tiền tệ</h3>\r\n\r\n<h3>1. THẺ T&Iacute;N DỤNG</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&aacute;c trung t&acirc;m thương mại lớn chấp nhận vẻ Visa &amp; Master. Một số cửa h&agrave;ng ăn uống v&agrave; nh&agrave; h&agrave;ng cũng sử dụng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>2. MỨC TI&Ecirc;U THỤ</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>1,5 l&iacute;t nước kho&aacute;ng: 20.000-30.000 đồng,</li>\r\n	<li>Một b&aacute;t phở 20.000-90.000 đồng,</li>\r\n	<li>Một cơm chi&ecirc;n 30.000-100.000 đồng, t&ugrave;y theo cấp bậc v&agrave; địa điểm của nh&agrave; h&agrave;ng</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>3. ĐỔI TIỀN</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đồng tiền của Việt Nam l&agrave; Việt Nam Đồng, viết tắt l&agrave; VND, đồng đ&ocirc; la Mỹ cũng c&oacute; thể được sử dụng, ng&acirc;n h&agrave;ng v&agrave; một số kh&aacute;ch sạn c&oacute; thể được trao đổi,nhưng tỷ gi&aacute; hối đo&aacute;i rất k&eacute;m. Đồng đ&ocirc; la Mỹ được đổi lấy đồng Việt Nam v&agrave; tỷ gi&aacute; hối đo&aacute;i mệnh gi&aacute; lớn cao hơn tỷ gi&aacute; hối đo&aacute;i mệnh gi&aacute; nhỏ, chẳng hạn như tỷ gi&aacute; hối đo&aacute;i 100 USD cho tỷ gi&aacute; hối đo&aacute;i&gt; 50 USD.</p>\r\n\r\n<p>Đổi tiền tại c&aacute;c ng&acirc;n h&agrave;ng lớn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>5. Ẩm thực</h3>\r\n\r\n<h3>1. ẨM THỰC</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>B&uacute;n c&aacute; M&oacute;n b&uacute;n c&aacute; Ch&acirc;u Đốc v&agrave; b&uacute;n c&aacute; Long Xuy&ecirc;n l&agrave; m&oacute;n ăn trứ danh của v&ugrave;ng đất An Giang.</li>\r\n	<li>Canh chua m&ugrave;a nước nổi.</li>\r\n	<li>B&aacute;nh tằm b&igrave; T&acirc;n Ch&acirc;u.</li>\r\n	<li>Lẩu mắm Ch&acirc;u Đốc.</li>\r\n	<li>B&ograve; bảy m&oacute;n N&uacute;i Sam.</li>\r\n	<li>Cơm tấm Long Xuy&ecirc;n.</li>\r\n	<li>X&ocirc;i phồng Chợ Mới.</li>\r\n	<li>B&aacute;nh x&egrave;o rau rừng.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>6. Lễ Hội</h3>\r\n\r\n<h3>1. LỄ HỘI</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>C&aacute;c lễ hội ch&iacute;nh ở An Giang.</li>\r\n	<li>Hội đ&igrave;nh Long Ph&uacute; Thời gian: 7/1 &acirc;m lịch.</li>\r\n	<li>Hội đền Bảo Sanh. Thời gian: 15/1 &acirc;m lịch.</li>\r\n	<li>Hội đền Nguyễn Trung Trực. Thời gian: 18 - 19/ 10 &acirc;m lịch.</li>\r\n	<li>Hội miếu Bằng Lang. Thời gian: 15 - 16/3 &acirc;m lịch.</li>\r\n	<li>Lễ Đ&ocirc;lta v&agrave; hội đua b&ograve;</li>\r\n	<li>Lễ hội đ&igrave;nh Ch&acirc;u Ph&uacute;</li>\r\n	<li>Lễ hội miếu B&agrave; Ch&uacute;a Xứ</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>7. Lời khuy&ecirc;n</h3>\r\n\r\n<h3>1. Y TẾ</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bạn c&oacute; thể mua thuốc tại c&aacute;c hiệu thuốc cho c&aacute;c bệnh thường như cảm, ho, sổ mũi. Bệnh nặng v&agrave; c&aacute;c trường hợp khẩn cấp li&ecirc;n hệ bệnh viện gần nhất.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>2. LI&Ecirc;N HỆ KHẨN CẤP</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&aacute;c số điện thoại khẩn cấp:</strong></p>\r\n\r\n<ul>\r\n	<li>Cứu thương 115</li>\r\n	<li>Ph&ograve;ng ch&aacute;y chữa ch&aacute;y 114</li>\r\n	<li>Cảnh s&aacute;t cơ động 113</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'Việt Nam', 'An Giang', 'An Giang', 'An Giang', 'An Giang', '', '2023-04-09 08:23:01', '2023-04-09 10:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `has_child` tinyint(4) DEFAULT 0,
  `category_id` int(11) DEFAULT NULL,
  `position` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `item_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_actived` tinyint(4) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_26_115212_create_permissions_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_09_23_071326_create_categories_table', 1),
(6, '2019_09_30_032513_create_pages_table', 1),
(7, '2019_10_07_112111_create_activities_table', 1),
(8, '2019_11_03_092510_create_posts_table', 1),
(9, '2019_11_03_152516_create_category_has_posts_table', 1),
(10, '2019_11_03_154848_create_post_has_tags_table', 1),
(11, '2019_12_11_074656_create_widgets_table', 1),
(12, '2019_12_11_105857_create_templates_table', 1),
(13, '2019_12_27_155202_create_tags_table', 1),
(14, '2020_01_06_162935_create_menus_table', 1),
(15, '2020_01_15_105351_create_settings_table', 1),
(16, '2020_06_05_224251_create_sliders_table', 1),
(17, '2021_03_17_084018_create_partners_table', 1),
(18, '2021_03_17_100947_create_comments_table', 1),
(19, '2021_03_17_113728_create_authors_table', 1),
(20, '2021_03_17_113808_create_customers_table', 1),
(21, '2021_03_17_132235_create_solutions_table', 1),
(22, '2021_03_18_211240_create_banners_table', 1),
(23, '2019_10_14_155941_create_questions_table', 2),
(24, '2019_10_18_085553_create_answers_table', 2),
(25, '2023_03_26_160244_add_columns_to_posts_table', 2),
(26, '2023_03_26_161259_add_columns_to_authors_table', 2),
(27, '2023_04_02_143559_create_locations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `plain_text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `author_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `thumbnail_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` bigint(20) DEFAULT NULL,
  `latitude` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitude` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `share_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plain_text` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `author_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `published_at` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_background_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_comment` tinyint(4) DEFAULT 1,
  `comment_count` smallint(6) DEFAULT 0,
  `post_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `category_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subdistrict` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner_template` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT 0,
  `disease_id` int(11) DEFAULT 0,
  `is_deleted` tinyint(4) DEFAULT 0,
  `deleted_at` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_highlight` tinyint(4) DEFAULT 0,
  `showon_homepage` tinyint(4) DEFAULT 0,
  `time_expired_deal` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_editor_pick` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `is_most_viewed` tinyint(3) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_has_tags`
--

CREATE TABLE `post_has_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `tag_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` bigint(20) DEFAULT 0,
  `author_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `published_at` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `disease_id` int(11) DEFAULT 0,
  `tags` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` tinyint(3) UNSIGNED DEFAULT 0,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` tinyint(4) DEFAULT -1,
  `is_highlight` tinyint(3) UNSIGNED DEFAULT 0,
  `has_answer` tinyint(3) UNSIGNED DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `share_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_template` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$oMLMg5vT2QcYn0lb9SORjO4/./4DZcMCrG6WUHX4bkzyWH5DuFhSS', NULL, NULL, '2023-03-26 08:49:18', '2023-03-26 08:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `template_id` int(11) DEFAULT 0,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_has_posts`
--
ALTER TABLE `category_has_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_has_tags`
--
ALTER TABLE `post_has_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_has_posts`
--
ALTER TABLE `category_has_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_has_tags`
--
ALTER TABLE `post_has_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
