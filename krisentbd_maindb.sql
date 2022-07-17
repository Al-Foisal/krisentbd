-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2022 at 02:41 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krisentbd_maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `title`, `details`, `created_at`, `updated_at`, `bn_title`, `bn_details`) VALUES
(4, 'images/about/1729068674496540.png', 'Krisent Sales & Service Technology', '<h1 style=\"\"><b>We Secure You World</b></h1><h1 style=\"\"><b><br></b></h1><h3>Using Krisent security device and you can forget the word theft like us. Krisent brings you the latest technology security devices for your home, vehicle and business. Krisent security devices at home, outdoors or on the go will keep you up to date with the latest security updates on your home, vehicle and business, fish hatchery, cattle farm. It immediately notifies the user by sending a direct alert to 5 registered mobile numbers via Call &amp; SMS.</h3>', '2022-03-10 02:48:21', '2022-04-03 15:03:59', 'ক্রিসেন্ট সেলস অ্যান্ড সার্ভিস টেকনোলজি', '<h2 style=\"unicode-bidi: isolate; line-height: 32px; border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; overflow: hidden; width: 270px; overflow-wrap: break-word;\">আমরা সুরক্ষিত রাখব তোমার পৃথিবী</h2><h3 style=\"unicode-bidi: isolate; line-height: 32px; border: none; padding: 2px 0.14em 2px 0px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; overflow: hidden; width: 270px; overflow-wrap: break-word;\"><br><br>ক্রিসেন্ট এর সিকিউরিটি ডিভাইস ব্যাবহার করে আমাদের মত আপনিও ভুলে যেতে পারেন চুরি নামক শব্দটি । আপনার ঘর , যানবাহন এবং ব্যাবসা প্রতিষ্ঠানের জন্য ক্রিসেন্ট নিয়ে এলো লেটেষ্ট টেকনোলজির সিকিউরিটি ডিভাইস সমূহ । ঘরে , বাইরে কিংবা চলার পথে ক্রিসেন্টের সিকিউরিটি ডিভাইস আপনাকে জানিয়ে দিবে আপনার ঘর , যানবাহন এবং ব্যবসা প্রতিষ্ঠানের , মাছের হ্যাচারী , গরুর ফার্ম , লেটেষ্ট সিকিউরিটি আপডেট ।এটি অবিলম্বে কল এবং এসএমএসের মাধ্যমে 5টি নিবন্ধিত মোবাইল নম্বরে একটি সরাসরি সতর্কতা পাঠিয়ে ব্যবহারকারীকে অবহিত করে।</h3>'),
(5, 'images/about/1729067450023292.jpg', 'Md. Jahangir Alam', '<h1 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-size: 2.5rem; font-weight: bolder;\">Managing Partner</span></h1><h1 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\"></span></h1><h2 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Krisent Sales &amp; Service Technology</h2><h3 style=\"margin-bottom: 1rem; font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41); font-size: 16px;\">Mobile-01839733944<br>Mail-managing-director@krisentbd.com<br>Gmail-prioalam@gmail.com</h3>', '2022-03-10 02:48:21', '2022-04-03 13:26:58', 'মোঃজাহাঈীর আলম', '<h1 style=\"margin-top: -2px; margin-bottom: -2px; font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; line-height: 32px; color: rgb(33, 37, 41); unicode-bidi: isolate; border: none; padding: 2px 0.14em 2px 0px; position: relative; resize: none; overflow: hidden; width: 270px; overflow-wrap: break-word;\"><span style=\"font-weight: bolder;\"><span style=\"font-size: 24px; white-space: pre-wrap;\">পরিচালনা অংশীদার</span><br></span></h1><pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" dir=\"ltr\" style=\"font-family: inherit; font-size: 24px; margin-top: -2px; margin-bottom: -2px; overflow: hidden; padding: 2px 0.14em 2px 0px; unicode-bidi: isolate; line-height: 32px; border: none; position: relative; resize: none; width: 270px; white-space: pre-wrap; overflow-wrap: break-word;\"><span class=\"Y2IQFc\" lang=\"bn\"><font color=\"#000000\"><span style=\"font-weight: bolder;\"><br></span></font></span><h2><span class=\"Y2IQFc\" lang=\"bn\"><span style=\"color: rgb(32, 33, 36); background-color: rgb(248, 249, 250);\">ক্রিসেন্ট সেলস </span>এবংসার্ভিস টেকনোলজি</span></h2><span class=\"Y2IQFc\" lang=\"bn\"><span style=\"color: rgb(32, 33, 36); background-color: rgb(248, 249, 250);\">\r\n</span></span><h3 style=\"margin-top: -2px; margin-bottom: -2px; line-height: 32px; font-size: 24px; unicode-bidi: isolate; border: none; padding: 2px 0.14em 2px 0px; position: relative; resize: none; overflow: hidden; width: 270px; overflow-wrap: break-word;\"><span class=\"Y2IQFc\" lang=\"bn\"><span style=\"color: rgb(32, 33, 36); background-color: rgb(248, 249, 250);\">মোবা-</span>০১৮৩৯৭৩৩৯৪৪</span><span class=\"Y2IQFc\" lang=\"bn\"><span style=\"color: rgb(32, 33, 36); background-color: rgb(248, 249, 250);\"><br></span></span><span class=\"Y2IQFc\" lang=\"bn\"><span style=\"color: rgb(32, 33, 36); background-color: rgb(248, 249, 250);\">মেইল- </span>managing-director@krisentbd.com</span><span class=\"Y2IQFc\" lang=\"bn\"><span style=\"color: rgb(32, 33, 36); background-color: rgb(248, 249, 250);\"><br></span></span><span class=\"Y2IQFc\" lang=\"bn\"><span style=\"color: rgb(32, 33, 36); background-color: rgb(248, 249, 250);\">জিমেইল-</span></span>prioalam@gmail.com</h3></pre>'),
(8, 'images/about/1729067557717484.jpg', 'Nayan Majumder', '<h1 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Partner</span></h1><h1 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Krisent Sales &amp; Service Technology</h1><p><br></p><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Mobile-01684785990</h3><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Mail-ceo@krisentbd.com</h3><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Gmail-neel01735@gmail.com</h3>', '2022-04-03 13:28:41', '2022-04-03 15:09:59', 'নয়ন মজুমদার', '<h2 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><b>অংশীদার</b></h2><p><br></p><p><br></p><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">ক্রিসেন্ট সেলস অ্যান্ড সার্ভিস টেকনোলজি</h3><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><br>মোবাইল-০১৬৮৪৭৮৫৯৯০</h3><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><br>মেইল-ceo@krisentbd.com</h3><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><br>জিমেইল-neel01735@gmail.com</h3>'),
(9, 'images/about/1729067810440617.jpeg', 'Sowrov Howlader', '<h1 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41); text-align: justify;\"><span style=\"font-weight: bolder;\">Admin Officer</span></h1><h1 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41); text-align: justify;\">Krisent Sales &amp; Service Technology</h1><h3 style=\"text-align: justify;\"><br></h3><h1 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41); text-align: justify;\"><span style=\"color: inherit; font-family: inherit; font-size: 2rem;\"></span></h1><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41); text-align: justify;\">Mobile-01722276177l</h3><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41); text-align: justify;\">Mail-admin@krisentbd.com</h3><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41); text-align: justify;\">Gmail-neel76177@gmail.com</h3>', '2022-04-03 13:32:45', '2022-04-03 13:33:08', 'সৌরভ হাওলাদার', '<h2 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">প্রশাসনিক কর্মকর্তা</span></h2><h1 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\"><br></span></h1><h1 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\"><br></span></h1><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">ক্রিসেন্ট সেলস অ্যান্ড সার্ভিস টেকনোলজি</h3><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><br>মোবাইল-০১৭২২২৭৬১৭৭</h3><p><span style=\"font-size: 1.75rem;\"><br></span></p><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">মেইল-admin@krisentbd.com</h3><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><br>জিমেইল-neel76177@gmail.com</h3>');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `slider` tinyint(1) DEFAULT NULL,
  `main_menu` tinyint(1) DEFAULT NULL,
  `product` tinyint(1) DEFAULT NULL,
  `order_history` tinyint(1) DEFAULT NULL,
  `company_info` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `status`, `image`, `remember_token`, `admin`, `slider`, `main_menu`, `product`, `order_history`, `company_info`, `created_at`, `updated_at`) VALUES
(1, 'Miss Michaela Cronin MD', 'quicktechitltd@gmail.com', '2022-03-09 21:46:15', '$2y$10$/XqPUYUGkdC8kybvMh2Xt.NzT.ttwVn7ggTknSNV50wzUfLmYLXha', '5666', 'Mirpur 10', 1, 'images/admin/1726883874273389.jpg', 'JsvfCJG2UrLA8AT89eCNHjQVnDheFlp2L2E1Hf501Q7Vai99cfFF4Eckt98l', 1, 1, 1, 1, 1, 1, '2022-03-09 21:46:15', '2022-03-13 05:44:54'),
(3, 'Krisent', 'krisentssc@gmail.com', NULL, '$2y$10$86u6Qeb45Ho3LhP2d1Ez0u2j/Zfh4UqAMMQPk/8klL7wF4emKPOj.', '01794637054', 'test', 1, 'images/admin/1728431744944380.jpeg', NULL, 1, 1, 1, 1, 1, 1, '2022-03-27 13:02:42', '2022-03-27 13:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_page` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_author` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `admin_id`, `image`, `name`, `author`, `details`, `front_page`, `created_at`, `updated_at`, `bn_name`, `bn_details`, `bn_author`) VALUES
(2, 1, 'images/blog/1726906032058704.jpg', 'Contrary to popular Contrary to popular2', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Where does it come from?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 0, '2022-03-10 03:52:09', '2022-04-06 16:11:19', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog_blog_category`
--

CREATE TABLE `blog_blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_blog_category`
--

INSERT INTO `blog_blog_category` (`id`, `blog_id`, `blog_category_id`, `created_at`, `updated_at`) VALUES
(7, 2, 3, NULL, NULL),
(8, 2, 4, NULL, NULL),
(9, 2, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_blog_tag`
--

CREATE TABLE `blog_blog_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `blog_tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_blog_tag`
--

INSERT INTO `blog_blog_tag` (`id`, `blog_id`, `blog_tag_id`, `created_at`, `updated_at`) VALUES
(6, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `created_at`, `updated_at`, `bn_name`) VALUES
(1, 'First Category', '2022-03-10 03:48:47', '2022-03-10 03:48:47', ''),
(2, 'Second Category', '2022-03-10 03:48:47', '2022-03-10 03:48:47', ''),
(3, 'Third Category', '2022-03-10 03:48:47', '2022-03-10 03:48:47', ''),
(4, 'Fourth Category', '2022-03-10 03:48:47', '2022-03-10 03:48:47', ''),
(5, 'Sixth Category', '2022-03-10 03:48:47', '2022-03-10 03:48:47', ''),
(6, 'Seventh Category', '2022-03-10 03:48:47', '2022-03-10 03:48:47', ''),
(8, 'me', '2022-03-22 00:12:48', '2022-03-22 00:12:48', 'অর্থহীন'),
(9, 'mee', '2022-03-22 00:12:48', '2022-03-22 00:12:48', 'অর্থহী');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `blog_id`, `name`, `email`, `comment`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 2, 'al Foisal', 'rr@gmailo.com', 'Contrary to popular Contrary to popular2Contrary to popular Contrary to popular2Contrary to popular Contrary to popular2Contrary to popular Contrary to popular2Contrary to popular Contrary to popular2Contrary to popular Contrary to popular2Contrary to popular Contrary to popular2Contrary to popular Contrary to popular2Contrary to popular Contrary to popular2Contrary to popular Contrary to popular2Contrary to popular Contrary to popular2Contrary to popular Contrary to popular2', 1, NULL, '2022-03-10 04:57:01'),
(2, 2, 'dfxg df', NULL, 'rrrdxfg drg dxfg dxfg', 1, '2022-03-12 03:50:52', '2022-03-12 03:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `name`, `created_at`, `updated_at`, `bn_name`) VALUES
(1, 'Tag One', '2022-03-10 03:46:14', '2022-03-10 03:46:14', ''),
(2, 'Tag Two', '2022-03-10 03:46:14', '2022-03-10 03:46:14', ''),
(3, 'Tag Three', '2022-03-10 03:46:14', '2022-03-10 03:46:14', ''),
(4, 'Tag Four', '2022-03-10 03:46:14', '2022-03-10 03:46:14', ''),
(6, 'mt', '2022-03-22 00:13:33', '2022-03-22 00:13:33', 'অর্থহীনঅর্থহীন'),
(7, 'mmtt', '2022-03-22 00:13:33', '2022-03-22 00:13:33', 'অর্থহীন অর্থহীন অর্থহীন');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`, `created_at`, `updated_at`, `bn_brand`) VALUES
(1, 'Krisent', '2022-03-12 22:01:20', '2022-03-29 11:55:56', 'ক্রিসেন্ট');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`, `bn_name`) VALUES
(1, 'Shop`s', 'shops', 1, '2022-03-12 21:46:24', '2022-03-28 18:51:57', 'দোকান'),
(2, 'Home`s', 'homes', 1, '2022-03-12 21:46:34', '2022-03-28 17:02:31', 'বাড়ি'),
(3, 'Vehicle`s', 'vehicles', 1, '2022-03-12 21:46:47', '2022-03-28 17:04:54', 'যানবাহন'),
(4, 'Industrial Area', 'industrial-area', 1, '2022-03-12 21:46:56', '2022-03-28 17:10:10', 'বাণিজ্যিক এলাকা'),
(5, 'Farm`s', 'farms', 1, '2022-03-23 02:00:37', '2022-03-28 17:11:02', 'খামার'),
(6, 'Mobile Phone', 'mobile-phone', 1, '2022-06-27 14:12:22', '2022-06-27 14:12:22', 'মোবাইল ফোন');

-- --------------------------------------------------------

--
-- Table structure for table `childcategories`
--

CREATE TABLE `childcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `childcategories`
--

INSERT INTO `childcategories` (`id`, `category_id`, `subcategory_id`, `name`, `slug`, `status`, `created_at`, `updated_at`, `bn_name`) VALUES
(1, 1, 1, 'MC1', 'mc1', 0, '2022-03-12 21:48:46', '2022-03-28 18:57:20', 'প্রচেষ্টা'),
(2, 1, 2, 'CM2', 'cm2', 0, '2022-03-12 21:49:02', '2022-03-28 18:57:14', 'বাংলার'),
(3, 2, 3, 'WC1', 'wc1', 0, '2022-03-12 21:49:15', '2022-03-28 18:56:32', 'ইংরেজির'),
(4, 2, 4, 'WC2', 'wc2', 0, '2022-03-12 21:49:26', '2022-03-28 18:57:09', 'ইংরেজির'),
(5, 3, 7, 'KK1', 'kk1', 0, '2022-03-23 02:11:17', '2022-03-28 18:56:26', 'সমস্যাটার');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `url`, `created_at`, `updated_at`) VALUES
(1, 'images/client/164690382472.png', '#', '2022-03-10 03:17:04', '2022-03-10 03:17:04'),
(2, 'images/client/164690382488.png', '#', '2022-03-10 03:17:04', '2022-03-10 03:17:04'),
(3, 'images/client/164690382522.png', '#', '2022-03-10 03:17:05', '2022-03-10 03:17:05'),
(4, 'images/client/164690382562.png', '#', '2022-03-10 03:17:05', '2022-03-10 03:17:05'),
(5, 'images/client/164690382974.png', '#', '2022-03-10 03:17:09', '2022-03-10 03:17:09'),
(6, 'images/client/164690382927.png', '#', '2022-03-10 03:17:09', '2022-03-10 03:17:09'),
(7, 'images/client/164690382976.png', '#', '2022-03-10 03:17:09', '2022-03-10 03:17:09'),
(8, 'images/client/164690382961.png', '#', '2022-03-10 03:17:09', '2022-03-10 03:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color`, `color_code`, `created_at`, `updated_at`, `bn_color`) VALUES
(1, 'Red', '#ff0000', '2022-03-12 22:03:41', '2022-03-23 03:52:11', 'বাংলার'),
(2, 'Black', '#000000', '2022-03-12 22:03:41', '2022-03-23 03:52:23', 'হাত'),
(3, 'Pink', '#ff0095', '2022-03-23 03:52:44', '2022-03-23 03:52:44', 'খলজী');

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE `color_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_infos`
--

CREATE TABLE `company_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_phone_one` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_phone_two` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_phone_three` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_infos`
--

INSERT INTO `company_infos` (`id`, `about`, `address`, `phone_one`, `phone_two`, `phone_three`, `email`, `logo`, `favicon`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `pinterest`, `created_at`, `updated_at`, `bn_about`, `bn_address`, `bn_phone_one`, `bn_phone_two`, `bn_phone_three`) VALUES
(1, 'Hii..!!', 'House No-644,Jonokollan Moshzid Goli,Middle Monipur,Barek Molla,60Fit Road,Mirpur-2,Dhaka-1216', '01722276177', '01839733944', '01964061529', 'krisentssc@gmail.com', 'images/logo/1726883660712878.png', 'images/logo/1728159974938114.png', 'https://www.facebook.com/krisentssc', 'https://twitter.com/KrisentSales', 'https://www.instagram.com/krisentsalesservice/', 'https://www.youtube.com/channel/UCXaUKHd83idYec73a_gO4QA', 'https://www.linkedin.com/in/krisent-sales-service-technology-94a990234/', 'https://www.pinterest.com/krisentsales', '2022-03-09 21:56:34', '2022-03-28 16:25:52', 'আমরা বাংলায় ওয়েব ডেডলপমেন্ট নিয়ে কাজ করতে গিয়ে প্রথম যে সমস্যাটার মুখোমুখি হই, সেটা হলো, বাংলা ডেমো টেক্সট।', 'আমরা বাংলায় ওয়েব ডেডলপমেন্ট নিয়ে কাজ করতে গিয়ে প্রথম যে সমস্যাটার মুখোমুখি হই, সেটা হলো, বাংলা ডেমো টেক্সট।', '১২০৫১২০৬', '১২০৫১২০৬', '১২০৫১২০৬');

-- --------------------------------------------------------

--
-- Table structure for table `company_sliders`
--

CREATE TABLE `company_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_sliders`
--

INSERT INTO `company_sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(7, 'images/company_slider/1728430174641823.png', '2022-03-27 12:37:45', '2022-03-27 12:37:45'),
(8, 'images/company_slider/1728430183019415.png', '2022-03-27 12:37:53', '2022-03-27 12:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Oxygen', 'quicktechitltd@gmail.com', '+8801756232223', 'Web Development', 'www', '2022-03-12 05:01:02', '2022-03-12 05:01:02'),
(4, 'Oxygen', 'user1@gmail.com', '+8801756232223', 'Web Development', 'q', '2022-03-13 21:27:28', '2022-03-13 21:27:28'),
(5, 'Oxygen', 'admin@admin.com', '+8801756232223', 'Web Development', 'ok', '2022-03-21 03:54:41', '2022-03-21 03:54:41'),
(6, 'Oxygen', 'user1@gmail.com', '+8801756232223', 'Web Development', 'hg', '2022-03-23 06:12:20', '2022-03-23 06:12:20'),
(7, 'Harry Williams', 'harrywilliams.web01@gmail.com', '3862024511', 'Question about your websites', 'Hey,\r\n\r\nYour website\'s design is absolutely brilliant. The visuals really enhance your message and the content compels action. I\'ve forwarded it to a few of my contacts who I think could benefit from your services.\r\n\r\nWhen I was looking at your site, though, I noticed some mistakes that you\'ve made re: search engine optimization (SEO) which may be leading to a decline in your organic SEO results. Would you like to fix it so that you can get maximum exposure/presence on Google, Bing, Yahoo and web traffic to your website?\r\n\r\nIt\'s a relatively simple fix. If this is a priority.\r\n\r\nPlease share your “Mobile Number\" and a suitable time to talk, so I can help you in that.\r\n\r\n\r\nRegards,\r\nHarry Williams\r\nDigital Marketing Expert\r\n\r\nYou can call also our Support Assistant\r\nMiss Sharon: 1-386-202-4511\r\nMiss Catherine: 1-620-765-4699', '2022-03-25 03:51:50', '2022-03-25 03:51:50'),
(8, 'Harry Williams', 'harrywilliams.web01@gmail.com', '3862024511', 'Question about your websites', 'Hey,\r\n\r\nYour website\'s design is absolutely brilliant. The visuals really enhance your message and the content compels action. I\'ve forwarded it to a few of my contacts who I think could benefit from your services.\r\n\r\nWhen I was looking at your site, though, I noticed some mistakes that you\'ve made re: search engine optimization (SEO) which may be leading to a decline in your organic SEO results. Would you like to fix it so that you can get maximum exposure/presence on Google, Bing, Yahoo and web traffic to your website?\r\n\r\nIt\'s a relatively simple fix. If this is a priority.\r\n\r\nPlease share your “Mobile Number\" and a suitable time to talk, so I can help you in that.\r\n\r\n\r\nRegards,\r\nHarry Williams\r\nDigital Marketing Expert\r\n\r\nYou can call also our Support Assistant\r\nMiss Sharon: 1-386-202-4511\r\nMiss Catherine: 1-620-765-4699', '2022-03-25 03:58:06', '2022-03-25 03:58:06'),
(9, 'Jerald Kuhn', '������ Choose Your Theme And Start Your Tube Site', '(07) 5653 7721', '(07) 5653 7721', 'Make your own XVIDEOS porn tube VTUBE Theme allows you to make a real XVIDEOS clone tube.\r\n\r\n=>> https://createporntubesites.blogspot.com/\r\n\r\nOne of the most visited porn site ever and one of the most requested theme by customers.\r\n\r\n=>> https://createporntubesites.blogspot.com/', '2022-03-28 15:53:46', '2022-03-28 15:53:46'),
(10, 'sowrov howader', 'neel76177@gmail.com', '01722276177', 'sdfgh', 'hii', '2022-03-31 13:34:21', '2022-03-31 13:34:21'),
(11, 'Jc Arnett', 'Newbie 10X His Business With This Roadmap', '67 551 72 30', '67 551 72 30', 'Randy spent 9 months and only made one thousand dollars UNTIL he got his hands on the Roadmap that took his earnings to Ten Thousand in a matter of weeks\r\n\r\nWanna see the roadmap? \r\n\r\n>>>See the 7 figure road map ->>> https://7figureaffiliatesystem.blogspot.com/\r\n\r\nTalk soon', '2022-04-08 06:47:31', '2022-04-08 06:47:31'),
(12, 'Cierra Morisset', 'Making Money Has Never Been This Easy', '30-26-66-70', '30-26-66-70', 'Hi,\r\n\r\nWould you believe me if I told you that you can get paid to speak without using your voice? It\'s true! \r\n\r\nYou could be making $50 for every audio file you upload...\r\n\r\nAll it takes is 3 steps...\r\n\r\nStep 1: Create Your Account\r\nCreate your account here\r\n\r\nStep 2: Pick Your Favourite Artist\r\nSelect from thousands of artists and vibe to the music\r\n\r\nStep 3: Get Paid\r\nThat\'s it, for every song you steam...\r\n\r\n=> Click here right now to start instantly\r\n=> https://freespoticash.blogspot.com/\r\n\r\nSincerely,', '2022-04-09 23:57:06', '2022-04-09 23:57:06'),
(13, 'Becky McCarren', 'Explainer Videos for krisentbd.com', '078 4938 0361', '078 4938 0361', 'Hi,\r\n\r\nWe\'d like to introduce to you our explainer video service, which we feel can benefit your site krisentbd.com.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=zvGF7uRfH04\r\nhttps://www.youtube.com/watch?v=cZPsp217Iik\r\nhttps://www.youtube.com/watch?v=JHfnqS2zpU8\r\n\r\nAll of our videos are in a similar animated format as the above examples, and we have voice over artists with US/UK/Australian/Canadian accents.\r\nWe can also produce voice overs in languages other than English.\r\n\r\nThey can show a solution to a problem or simply promote one of your products or services. They are concise, can be uploaded to video sites such as YouTube, and can be embedded into your website or featured on landing pages.\r\n\r\nOur prices are as follows depending on video length:\r\nUp to 1 minute = $239\r\n1-2 minutes = $339\r\n2-3 minutes = $439\r\n\r\n*All prices above are in USD and include an engaging, captivating video with full script and voice-over.\r\n\r\nIf this is something you would like to discuss further, don\'t hesitate to reply.\r\n\r\nKind Regards,\r\nBecky', '2022-04-14 22:59:36', '2022-04-14 22:59:36'),
(14, 'Antonia Larsen', 'DA50 Backlink to krisentbd.com', '070 7580 7299', '070 7580 7299', 'Hi, \r\n\r\nWe\'re wondering if you\'d be interested in a backlink to krisentbd.com from our website that has a Moz Domain Authority of 50?\r\n\r\nWe charge just $50 (USD) to be paid via Paypal, card, or cryptocurrency. This is a one-time fee, so there are no extra charges and the link is permanent.\r\n\r\nIf you\'d like to know more about the site, please reply to this email and we can discuss further.\r\n\r\nKind Regards,\r\nAntonia', '2022-04-20 15:36:59', '2022-04-20 15:36:59'),
(15, 'Carin Rounds', 'Become A Highly Paid Leader In A 586.9 BILLION Dollar Market In 24 Hours', '022 904 30 32', '022 904 30 32', 'Online shopping is a 586.9 BILLION dollar market and today is your chance to become a highly paid leader and “go-to” person IN that market and earn commissions on autopilot.\r\n\r\nWhen you’re looking at a 586.9 BILLION dollar Market you want to be at the top 10% of that market.\r\n\r\nBasically, you want to be the one people listen to in that market,\r\nThe one people buy from.\r\n\r\n==>> https://freeamazestore.blogspot.com/\r\n\r\nAnd the fastest and easiest way to do so, is to build an online store, which makes you an instant authority, which establishes you as a leader, which is filled with quality content in the niche you chose and affiliate links to the products you promote.\r\n\r\nIn fact, just one store that takes off can make you a million dollars in commissions by the end of 2022.\r\n\r\nAnd what’s a million dollars out of 586.9 BILLION? Practically nothing.\r\n\r\nSo how do you create these high authority stores in multiple niches?\r\n\r\nWell, there’s a new software called Amaze which is going live tomorrow,\r\nThat creates these automated stores in crypto, amazon and clickbank (you choose which and what you want to earn money with) and each store it creates is ready for traffic and to earn your commissions.\r\n\r\nCompletely automated.\r\n\r\n==>> https://freeamazestore.blogspot.com/\r\n\r\nAnd on top of that, in 1 click the software gets you free traffic in less than 60 seconds  with a powerful traffic engine which is specially designed for this.\r\n\r\nAnd all this beauty in just a few clicks.\r\n\r\nAmaze goes live tomorrow at 11:00 AM ET, and when it launches,\r\nThe early bird pricing will be activated so this will be very affordable.\r\n\r\nCheck out my bonuses that you can expect first thing tomorrow at 11:00 AM EST, delivered directly to your inbox:\r\n\r\n==>> https://freeamazestore.blogspot.com/\r\n\r\nExpect a sleepless night tonight out of excitement.', '2022-04-27 08:23:59', '2022-04-27 08:23:59'),
(16, 'Kourtney Pirkle', 'Cryptocurrency: How a bot can multiply 10x your investment daily', '078 0776 2444', '078 0776 2444', 'Hi there,\r\n\r\nHave you ever wondered why new tokens listed on Uniswap, Pancakeswap or any decentralized exchange are always subject to insane price volatility?\r\n\r\nDid you know that front running bots have been dominating the market and profiting due to that?\r\n\r\nCheck out our new Youtube video for a free and detailed tutorial on how to deploy your own front running bot:\r\nhttps://youtu.be/SQHFveYdjV8\r\n\r\nKind Regards,\r\nKourtney', '2022-06-13 17:51:23', '2022-06-13 17:51:23'),
(17, 'MD. MOMINUL ISLAM', 'mominuloo420@gmail.com', '01732534288', 'Xdcdxvzv', 'asdgdbxfggvfagsfg', '2022-06-20 09:36:53', '2022-06-20 09:36:53'),
(18, 'Numbers Gow', 'I’m Looking for Partners to Join Me in This $212,910 / Month Business…', '471 2885', '471 2885', 'I’m Looking for Partners to Join Me in This \r\n$212,910 / Month Business…\r\n\r\n\r\n=>>>> https://partner-profit.blogspot.com/\r\n\r\nThat Means You Don’t Have To Create A Product, Fulfil Any Services, Run Ads, or Do Any Customer Service\r\n – And Best of All — You Get To Partner With Me On Your New 7-Figure Business.\r\n\r\n=>>>> https://partner-profit.blogspot.com/', '2022-07-10 22:18:58', '2022-07-10 22:18:58'),
(19, 'Valorie Langston', '1 Click = Create & Host LIVE TV Channels & Get FREE Targeted Traffic In Just 2 Minutes FLAT!  Which Banks Us $489.72 Per Day', '(02) 6727 2833', '(02) 6727 2833', 'Hi, \r\n\r\n1 Click = Create & Host LIVE TV Channels & Get FREE Targeted Traffic In Just 2 Minutes FLAT!  Which Banks Us $489.72 Per Day\r\n\r\n=>>> https://tvpayz.blogspot.com/\r\n\r\n[Brahma]', '2022-07-10 22:19:29', '2022-07-10 22:19:29'),
(20, 'John Theissen', 'Watch How We Get Paid Every Time We Use Our Phone To Scan A receipt…', '0338 6691197', '0338 6691197', 'Watch How We Get Paid Every Time We Use Our Phone To Scan A receipt…\r\n\r\nTurn Your Pile Of Old Receipts\r\n\r\nInto Instant Piles Of Cold Hard Cash\r\n\r\nFor the first time ever…\r\n\r\n​=>>>> https://scan-n-bank.blogspot.com/\r\n\r\nWe’re getting paid to upload receipts after purchasing products whose barcodes are scanned.\r\n\r\nWe didn’t even have to put in any work...\r\n\r\n​\r\n\r\nIt literally took us just minutes to receive each of those payments…\r\n\r\n=>>>> https://scan-n-bank.blogspot.com/', '2022-07-10 22:20:13', '2022-07-10 22:20:13'),
(21, 'Katy Trilly', 'Explainer Videos for krisentbd.com', '079 5563 4720', '079 5563 4720', 'Hi,\r\n\r\nWe\'d like to introduce to you our explainer video service, which we feel can benefit your site krisentbd.com.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=ivTmAwuli14\r\nhttps://www.youtube.com/watch?v=uywKJQvfeAM\r\nhttps://www.youtube.com/watch?v=oPNdmMo40pI\r\nhttps://www.youtube.com/watch?v=6gRb-HPo_ck\r\n\r\nAll of our videos are in a similar animated format as the above examples, and we have voice over artists with US/UK/Australian/Canadian accents.\r\nWe can also produce voice overs in languages other than English.\r\n\r\nThey can show a solution to a problem or simply promote one of your products or services. They are concise, can be uploaded to video sites such as YouTube, and can be embedded into your website or featured on landing pages.\r\n\r\nOur prices are as follows depending on video length:\r\nUp to 1 minute = $259\r\n1-2 minutes = $379\r\n2-3 minutes = $489\r\n\r\n*All prices above are in USD and include an engaging, captivating video with full script and voice-over.\r\n\r\nIf this is something you would like to discuss further, don\'t hesitate to reply.\r\n\r\nKind Regards,\r\nKate', '2022-07-11 10:12:17', '2022-07-11 10:12:17'),
(22, 'Eric Jones', 'Turn Surf-Surf-Surf into Talk Talk Talk', '555-555-1212', '555-555-1212', 'Hello, my name’s Eric and I just ran across your website at krisentbd.com...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing though…\r\n\r\nA QUICK, EASY way to connect with you NOW.\r\n\r\nBecause studies show that a web lead like me will only hang out a few seconds – 7 out of 10 disappear almost instantly, Surf Surf Surf… then gone forever.\r\n\r\nI have the solution:\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE https://jumboleadmagnet.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation pronto… which is so powerful, because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n \r\nCLICK HERE https://jumboleadmagnet.com to discover what Talk With Web Visitor can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://jumboleadmagnet.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://jumboleadmagnet.com/unsubscribe.aspx?d=krisentbd.com', '2022-07-14 15:44:13', '2022-07-14 15:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `one_count` int(10) UNSIGNED NOT NULL,
  `two_count` int(10) UNSIGNED NOT NULL,
  `three_count` int(10) UNSIGNED NOT NULL,
  `four_count` int(10) UNSIGNED NOT NULL,
  `one_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `three_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `four_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_one_count` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_two_count` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_three_count` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_four_count` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_one_title` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_two_title` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_three_title` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_four_title` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `one_count`, `two_count`, `three_count`, `four_count`, `one_title`, `two_title`, `three_title`, `four_title`, `created_at`, `updated_at`, `bn_one_count`, `bn_two_count`, `bn_three_count`, `bn_four_count`, `bn_one_title`, `bn_two_title`, `bn_three_title`, `bn_four_title`) VALUES
(1, 3455, 34545, 2343, 234, 'Happy Clients', 'Complete Project', 'xyz', 'abcd', '2022-03-10 05:18:53', '2022-03-23 03:28:43', '১৮৫৭', '১৮৫৭', '১৮৫৭', '১৮৫৭', 'থেকেই বাংলা ডেমো', 'ইংরেজির জন্য', 'টেক্সট তৈরীর চেষ্টা', 'টেক্সট তৈরীর চেষ্টা');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_date` date NOT NULL,
  `coupon_type` int(10) UNSIGNED NOT NULL,
  `coupon_discount` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `type`, `image`, `name`, `details`, `phone`, `address`, `email`, `created_at`, `updated_at`, `bn_name`, `bn_details`, `bn_phone`, `bn_address`) VALUES
(1, 2, 'images/distributor/1729350472587043.jpg', 'Md. Golam Odudh', 'Those who are close to Rajshahi and Chapainawabganj will also be able to take security system with Golam Odudh.', '01719133261', 'Capainobabgonj, Rajshahi.', 'duetcomputerbd@gmail.com', '2022-03-10 05:57:50', '2022-04-10 13:10:43', 'মোঃ গোলাম ওদুদ', 'যারা রাজশাহী ও চাঁপাইনবাবগঞ্জের কাছাকাছি আছেন তারাও গোলাম ওদদু  সাথে সিকিউরিটি সিস্টেম নিতে পারবেন।', '০১৭১৯১৩৩২৬১', 'চাঁপাইনবাবগঞ্জ, রাজশাহী'),
(2, 2, 'images/distributor/1729701499791002.jpg', 'Md. Ziyauddin Sheikh', 'Those who are close to Pirojpur will also be able to take security system with Md. Ziyauddin Sheikh', '01712237234', 'Pirojpur, Barishal', 'ziya@gmail.com', '2022-04-10 13:24:55', '2022-04-10 13:25:34', 'মোহাম্মদ জিয়াউদ্দিন শেখ', 'যারা  সিকিউরিটি  নিতে চান তারা বরিশাল বিভাগের পিরোজপুর জেলার মোহাম্মদ জিয়াউদ্দিন শেখ এর সাথে যোগাযোগ করুন ।', '01712237234', 'পিরোজপুর, বরিশাল'),
(3, 2, 'images/distributor/1729701955110914.jpg', 'Md. Saddam Hossin', 'Those who want to take the system should contact Md. Saddam Hussein of Meherpur district', '01893700519', 'Meherpur, Khulna', 'saddam@gmail.com', '2022-04-10 13:32:09', '2022-04-10 13:32:09', 'মোঃ সাদ্দাম হোসেনে', 'যারা  সিস্টেমটি  নিতে চান তারা মেহেরপুর জেলার মোঃ সাদ্দাম হোসেনের সাথে যোগাযোগ করুন', '01893700519', 'মেহেরপুর, খুলনা'),
(4, 2, 'images/distributor/1729702260712167.jpg', 'Md. Anowar Hossin', 'Those who want to take security should contact Mohammad Anwar Hossain of Gazipur district of Dhaka division.', '01738689899', 'Gazipur,Dhaka', 'anowar@gmail.com', '2022-04-10 13:37:01', '2022-04-10 13:37:01', 'মোহাম্মদ আনোয়ার হোসেন', 'যারা  সিকিউরিটি  নিতে চান তারা ঢাকা বিভাগের গাজীপুর জেলার মোহাম্মদ আনোয়ার হোসেন এর সাথে যোগাযোগ করুন ।', '01738689899l', 'গাজীপুর, ঢাকা');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `title`, `created_at`, `updated_at`, `bn_title`) VALUES
(1, 'images/gallery/164690411773.jpg', 'title one', '2022-03-10 03:21:57', '2022-03-10 03:21:57', ''),
(2, 'images/gallery/164690411753.jpg', 'title one', '2022-03-10 03:21:57', '2022-03-10 03:21:57', ''),
(3, 'images/gallery/164690411737.jpg', 'title one', '2022-03-10 03:21:57', '2022-03-10 03:21:57', ''),
(4, 'images/gallery/164690411784.jpg', 'title one', '2022-03-10 03:21:57', '2022-03-10 03:21:57', ''),
(5, 'images/gallery/164690411868.jpg', 'title one', '2022-03-10 03:21:58', '2022-03-10 03:21:58', ''),
(6, 'images/gallery/164690411893.jpg', 'title one', '2022-03-10 03:21:58', '2022-03-10 03:21:58', ''),
(7, 'images/gallery/16469041188.jpg', 'title one', '2022-03-10 03:21:58', '2022-03-10 03:21:58', ''),
(8, 'images/gallery/164690411859.jpg', 'title one', '2022-03-10 03:21:58', '2022-03-10 03:21:58', ''),
(9, 'images/gallery/16469041245.jpg', 'title one', '2022-03-10 03:22:04', '2022-03-10 03:22:04', ''),
(10, 'images/gallery/164690412498.jpg', 'title one', '2022-03-10 03:22:04', '2022-03-10 03:22:04', ''),
(11, 'images/gallery/164690412410.jpg', 'title one', '2022-03-10 03:22:04', '2022-03-10 03:22:04', ''),
(12, 'images/gallery/164690412442.jpg', 'title one', '2022-03-10 03:22:04', '2022-03-10 03:22:04', ''),
(13, 'images/gallery/164690413364.jpg', 'title one', '2022-03-10 03:22:13', '2022-03-10 03:22:13', ''),
(14, 'images/gallery/164690413378.jpg', 'title one', '2022-03-10 03:22:13', '2022-03-10 03:22:13', ''),
(15, 'images/gallery/164690413368.jpg', 'title one', '2022-03-10 03:22:13', '2022-03-10 03:22:13', ''),
(16, 'images/gallery/1646904133100.jpg', 'title one', '2022-03-10 03:22:13', '2022-03-10 03:22:13', ''),
(17, 'images/gallery/164793376450.jpg', 'title one', '2022-03-22 01:22:44', '2022-03-22 01:22:44', 'নে রাখবে লেখা অর্থহীন হয়, যখন');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2022_02_26_041929_create_admins_table', 1),
(6, '2022_02_26_100210_create_company_infos_table', 1),
(7, '2022_02_26_104201_create_categories_table', 1),
(8, '2022_02_27_032954_create_subcategories_table', 1),
(9, '2022_02_27_053402_create_childcategories_table', 1),
(11, '2022_02_27_071011_create_colors_table', 1),
(12, '2022_02_27_071024_create_sizes_table', 1),
(13, '2022_02_27_071603_create_product_images_table', 1),
(14, '2022_02_27_072701_create_brands_table', 1),
(15, '2022_02_27_074037_create_coupons_table', 1),
(16, '2022_02_27_074416_create_orders_table', 1),
(17, '2022_02_27_074506_create_order_products_table', 1),
(18, '2022_02_28_120845_create_sliders_table', 1),
(19, '2022_03_01_041749_create_shipping_charges_table', 1),
(20, '2022_03_10_041334_create_blogs_table', 2),
(21, '2022_03_10_041447_create_blog_categories_table', 2),
(22, '2022_03_10_041540_create_blog_tags_table', 2),
(23, '2022_03_10_041607_create_blog_comments_table', 2),
(24, '2022_03_10_043328_create_galleries_table', 2),
(25, '2022_03_10_043443_create_clients_table', 2),
(26, '2022_03_10_043602_create_testimonials_table', 2),
(27, '2022_03_10_044138_create_abouts_table', 2),
(28, '2022_03_10_044244_create_services_table', 2),
(29, '2022_03_10_044805_create_counters_table', 2),
(30, '2022_03_10_045058_create_contacts_table', 2),
(31, '2022_03_10_045415_create_distributors_table', 2),
(32, '2022_03_10_050418_create_home_sliders_table', 2),
(33, '2022_03_10_120400_create_company_sliders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `total_price` int(10) UNSIGNED NOT NULL,
  `subtotal_price` int(10) UNSIGNED NOT NULL,
  `discount_price` int(10) UNSIGNED NOT NULL,
  `paid_amount` int(10) UNSIGNED NOT NULL,
  `shipping_charge` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `additional_charge` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `coupon_discount` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'COD',
  `payment_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `total_price`, `subtotal_price`, `discount_price`, `paid_amount`, `shipping_charge`, `additional_charge`, `coupon_code`, `coupon_discount`, `payment_type`, `payment_number`, `trx_id`, `name`, `phone`, `email`, `city`, `area`, `zip_code`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 3000, 3000, 0, 3000, 35, 0, 'N/A', 0, 'COD', NULL, NULL, 'Leatha Vandervort I', '1238', 'quicktech.foisal@gmail.com', 'Dhaka', 'Dhaka', '1216', 'Mirpur - 10', '2022-03-31 15:28:50', '2022-04-03 12:58:55'),
(2, 1, 3, 3000, 3000, 0, 3000, 35, 0, 'N/A', 0, 'COD', NULL, NULL, 'Leatha Vandervort I', '1238', 'quicktech.foisal@gmail.com', 'Dhaka', 'Dhaka', '1216', 'Mirpur - 10', '2022-03-31 15:30:16', '2022-04-03 12:58:50'),
(3, 1, 3, 3000, 3000, 0, 3000, 60, 0, 'N/A', 0, 'COD', NULL, NULL, 'Leatha Vandervort I', '1238', 'quicktech.foisal@gmail.com', 'Dhaka', 'Dhaka', '1216', 'Mirpur - 10', '2022-03-31 15:31:19', '2022-03-31 15:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `qty`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 1, 19, 1, 3000, '2022-03-31 15:28:50', '2022-03-31 15:28:50'),
(2, 2, 19, 1, 3000, '2022-03-31 15:30:16', '2022-03-31 15:30:16'),
(3, 3, 19, 1, 3000, '2022-03-31 15:31:19', '2022-03-31 15:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `details`, `status`, `created_at`, `updated_at`, `bn_title`, `bn_details`) VALUES
(2, 'Privacy policy', 'privacy-policy', '<p></p><p>dd</p><p></p>', 1, '2022-03-22 05:00:04', '2022-03-23 05:47:16', 'আমরা বাংলায় ওয়েব', '<p>&nbsp; জীবের মধ্যে সবচেয়ে সম্পূর্ণতা মানুষের। কিন্তু সবচেয়ে অসম্পূর্ণ হয়ে সে জন্মগ্রহণ করে। বাঘ ভালুক তার জীবনযাত্রার পনেরো- আনা মূলধন নিয়ে আসে প্রকৃতির মালখানা থেকে। জীবরঙ্গভূমিতে মানুষ এসে দেখা দেয় দুই শূন্য হাতে মুঠো বেঁধে।</p><p>&nbsp; &nbsp;</p><p>&nbsp; &nbsp;মানুষ আসবার পূর্বেই জীবসৃষ্টিযজ্ঞে প্রকৃতির ভূরিব্যয়ের পালা শেষ হয়ে এসেছে। বিপুল মাংস, কঠিন বর্ম, প্রকাণ্ড লেজ নিয়ে জলে স্থলে পৃথুল দেহের যে অমিতাচার প্রবল হয়ে উঠেছিল তাতে ধরিত্রীকে দিলে ক্লান্ত করে। প্রমাণ হল আতিশয্যের পরাভব অনিবার্য। পরীক্ষায় এটাও স্থির হয়ে গেল যে, প্রশ্রয়ের পরিমাণ যত বেশি হয় দুর্বলতার বোঝাও তত দুর্বহ হয়ে ওঠে। নূতন পর্বে প্রকৃতি যথাসম্ভব মানুষের বরাদ্দ কম করে দিয়ে নিজে রইল নেপথ্যে।</p><p>&nbsp; &nbsp;</p><p>&nbsp; &nbsp;মানুষকে দেখতে হল খুব ছোটো, কিন্তু সেটা একটা কৌশল মাত্র। এবারকার জীবযাত্রার পালায় বিপুলতাকে করা হল বহুলতায় পরিণত। মহাকায় জন্তু ছিল প্রকাণ্ড একলা, মানুষ হল দূরপ্রসারিত অনেক।</p>'),
(3, 'Terms and Condition', 'terms-and-condition', '<p><span style=\"color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span><br></p>', 1, '2022-03-22 05:00:22', '2022-03-23 05:47:28', 'আমরা বাংলায় ওয়েব', '<p>&nbsp; জীবের মধ্যে সবচেয়ে সম্পূর্ণতা মানুষের। কিন্তু সবচেয়ে অসম্পূর্ণ হয়ে সে জন্মগ্রহণ করে। বাঘ ভালুক তার জীবনযাত্রার পনেরো- আনা মূলধন নিয়ে আসে প্রকৃতির মালখানা থেকে। জীবরঙ্গভূমিতে মানুষ এসে দেখা দেয় দুই শূন্য হাতে মুঠো বেঁধে।</p><p>&nbsp; &nbsp;</p><p>&nbsp; &nbsp;মানুষ আসবার পূর্বেই জীবসৃষ্টিযজ্ঞে প্রকৃতির ভূরিব্যয়ের পালা শেষ হয়ে এসেছে। বিপুল মাংস, কঠিন বর্ম, প্রকাণ্ড লেজ নিয়ে জলে স্থলে পৃথুল দেহের যে অমিতাচার প্রবল হয়ে উঠেছিল তাতে ধরিত্রীকে দিলে ক্লান্ত করে। প্রমাণ হল আতিশয্যের পরাভব অনিবার্য। পরীক্ষায় এটাও স্থির হয়ে গেল যে, প্রশ্রয়ের পরিমাণ যত বেশি হয় দুর্বলতার বোঝাও তত দুর্বহ হয়ে ওঠে। নূতন পর্বে প্রকৃতি যথাসম্ভব মানুষের বরাদ্দ কম করে দিয়ে নিজে রইল নেপথ্যে।</p><p>&nbsp; &nbsp;</p><p>&nbsp; &nbsp;মানুষকে দেখতে হল খুব ছোটো, কিন্তু সেটা একটা কৌশল মাত্র। এবারকার জীবযাত্রার পালায় বিপুলতাকে করা হল বহুলতায় পরিণত। মহাকায় জন্তু ছিল প্রকাণ্ড একলা, মানুষ হল দূরপ্রসারিত অনেক।</p>');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('quicktech.foisal@gmail.com', '$2y$10$oO7uR9sEtPruwS3Buk7Dg.6SnAEJqXcC8slSQt16P9fJkci67FenC', '2022-05-23 17:28:08');

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
  `category_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED DEFAULT NULL,
  `childcategory_id` int(10) UNSIGNED DEFAULT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buying` int(11) DEFAULT NULL,
  `selling` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_charge` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_selling` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_discount` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_discount_price` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_specification` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bn_additional_charge` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `childcategory_id`, `brand_id`, `status`, `name`, `slug`, `buying`, `selling`, `discount`, `discount_price`, `quantity`, `details`, `specification`, `additional_charge`, `created_at`, `updated_at`, `bn_name`, `bn_selling`, `bn_discount`, `bn_discount_price`, `bn_details`, `bn_specification`, `bn_additional_charge`) VALUES
(14, 1, 1, NULL, 1, 1, 'GSM Multi Shutter Siren', 'gsm-multi-shutter-siren', NULL, 7500, NULL, NULL, 1, '<p>Shutter Security Device</p>', NULL, NULL, '2022-03-29 13:15:46', '2022-03-29 13:37:15', 'জিএসএম মাল্টি শাটার সাইরেন', '৭৫০০', NULL, NULL, '<p>শাটার নিরাপত্তা ডিভাইস<br></p>', NULL, NULL),
(15, 2, 3, NULL, 1, 1, 'GSM Multi Door Siren', 'gsm-multi-door-siren', NULL, 7500, NULL, NULL, 11, '<p>Door Security Device</p>', NULL, NULL, '2022-03-29 13:34:40', '2022-04-05 16:47:01', 'জিএসএম মাল্টি ডোর সাইরেন', '৭৫০০', NULL, NULL, '<p>ডোর সিকিউরিটি ডিভাইস<br></p>', NULL, NULL),
(16, 3, 5, NULL, 1, 1, 'Bike Security', 'bike-security', NULL, 4000, NULL, NULL, 1, '<p><font color=\"#000000\"><span style=\"background-color: rgb(255, 0, 0);\"><b>Bike Security Device</b></span></font><br></p>', '<p>* 1 Year Replacement Guarantee</p><p><br></p><p>* 2 Years Service Warranty</p><p><br></p><p>* There are also many benefits</p>', NULL, '2022-03-29 13:48:53', '2022-03-29 18:23:52', 'বাইক নিরাপত্তা', '৪০০০', NULL, NULL, '<p>বাইক সিকিউরিটি ডিভাইস<br></p>', '<p>*১ বছরের প্রতিস্থাপন গ্যারান্টি</p><p><br></p><p>* ২ বছরের সার্ভিস ওয়ারেন্টি</p><p><br></p><p>* এছাড়াও অনেক সুবিধা আছে</p>', NULL),
(17, 4, NULL, NULL, 1, 1, 'Eco-5', 'eco-5', NULL, 8500, NULL, NULL, 1, '<p>Industrial area security device<br></p>', '<p>* 1 Year replacement Guarantee</p><p><br></p><p>* 2 Year Service Warranty</p><p><br></p><p>* There are also many&nbsp; benefits</p>', NULL, '2022-03-29 14:10:32', '2022-03-29 14:10:32', 'ইকো-৫', '৮৫০০', NULL, NULL, '<p>শিল্প এলাকা সুরক্ষা ডিভাইস<br></p>', '<p>*১ বছরের প্রতিস্থাপন গ্যারান্টি</p><p><br></p><p>* ২ বছরের সার্ভিস ওয়ারেন্টি</p><p><br></p><p>* এছাড়াও অনেক সুবিধা আছে</p>', NULL),
(18, 5, NULL, NULL, 1, 1, 'HYBRID-10', 'hybrid-10', NULL, 12000, NULL, NULL, 1, '<p>Farm security device<br></p>', '<p>* 1 Year replacement Guarantee</p><p><br></p><p>* 2 Year Service Warranty</p><p><br></p><p>* There are also many&nbsp; benefits</p>', NULL, '2022-03-29 14:23:19', '2022-03-29 14:23:19', 'হাইব্রিড-১০', '১২০০০', NULL, NULL, '<p>খামার সুরক্ষা ডিভাইস<br></p>', '<p>*১ বছরের প্রতিস্থাপন গ্যারান্টি</p><p><br></p><p>* ২ বছরের সার্ভিস ওয়ারেন্টি</p><p><br></p><p>* এছাড়াও অনেক সুবিধা আছে</p>', NULL),
(19, 1, 2, NULL, 1, 1, 'Non GSM Shutter Siren', 'non-gsm-shutter-siren', NULL, 3000, NULL, NULL, 2, '<p>Shutter Security Device</p>', NULL, NULL, '2022-03-29 16:30:37', '2022-04-06 10:35:02', 'নন জিএসএম শাটার সাইরেন', '৩০০০', NULL, NULL, '<p>শাটার নিরাপত্তা ডিভাইস<br></p>', NULL, NULL),
(20, 2, 4, 4, 1, 1, 'Non GSM Door Siren', 'non-gsm-door-siren', NULL, 3000, NULL, NULL, 1, '<p>Door Security Device</p>', NULL, NULL, '2022-03-29 16:35:58', '2022-04-05 16:46:27', 'নন জিএসএম ডোর সাইরেন', '৩০০০', NULL, NULL, '<p>ডোর সিকিউরিটি ডিভাইস<br></p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(41, 14, 'images/product/1728615076548872.jpg', '2022-03-29 13:15:46', '2022-03-29 13:36:41'),
(42, 15, 'images/product/164853568052.jpg', '2022-03-29 13:34:40', '2022-03-29 13:34:40'),
(43, 16, 'images/product/164853653385.jpg', '2022-03-29 13:48:53', '2022-03-29 13:48:53'),
(44, 17, 'images/product/164853783254.jpg', '2022-03-29 14:10:32', '2022-03-29 14:10:32'),
(45, 18, 'images/product/164853860037.jpg', '2022-03-29 14:23:20', '2022-03-29 14:23:20'),
(46, 19, 'images/product/164854623743.jpg', '2022-03-29 16:30:38', '2022-03-29 16:30:38'),
(47, 20, 'images/product/164854655987.jpg', '2022-03-29 16:35:59', '2022-03-29 16:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(4, 2, 1, NULL, NULL),
(5, 2, 2, NULL, NULL),
(6, 2, 3, NULL, NULL),
(7, 3, 1, NULL, NULL),
(8, 3, 2, NULL, NULL),
(9, 3, 3, NULL, NULL),
(10, 4, 1, NULL, NULL),
(11, 4, 2, NULL, NULL),
(12, 4, 3, NULL, NULL),
(13, 5, 1, NULL, NULL),
(14, 5, 2, NULL, NULL),
(15, 5, 3, NULL, NULL),
(16, 6, 1, NULL, NULL),
(17, 6, 2, NULL, NULL),
(18, 6, 3, NULL, NULL),
(19, 7, 1, NULL, NULL),
(20, 7, 2, NULL, NULL),
(21, 7, 3, NULL, NULL),
(22, 8, 1, NULL, NULL),
(23, 8, 2, NULL, NULL),
(24, 8, 3, NULL, NULL),
(25, 9, 1, NULL, NULL),
(26, 9, 2, NULL, NULL),
(27, 9, 3, NULL, NULL),
(28, 10, 1, NULL, NULL),
(29, 10, 2, NULL, NULL),
(30, 10, 3, NULL, NULL),
(31, 11, 1, NULL, NULL),
(32, 11, 2, NULL, NULL),
(33, 11, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `details`, `created_at`, `updated_at`, `bn_title`, `bn_details`) VALUES
(3, 'images/service/1729078542665388.jpg', 'Door Siren', '<h5>1. Hard acoustic siren.<br>2. Arm and Disarm by key<br>3. Dry battery operated</h5><h5></h5><h3><b>Exclusive Features:</b></h3><h5>1. Standby battery life up to 2 year<br>2. Low battery alert</h5>', '2022-03-10 03:00:26', '2022-04-03 16:25:40', 'দরজা সাইরেন', '<p style=\"text-align: justify;\"><font color=\"#555555\" face=\"Roboto\">1. হার্ড অ্যাকোস্টিক সাইরেন।</font></p><p style=\"text-align: justify;\"><font color=\"#555555\" face=\"Roboto\">2. চাবি&nbsp;দ্বারা বাহু এবং নিরস্ত্র</font></p><p style=\"text-align: justify;\"><font color=\"#555555\" face=\"Roboto\">3. শুকনো ব্যাটারি চালিত</font></p><p style=\"text-align: justify;\"><font color=\"#555555\" face=\"Roboto\"><b>একচেটিয়া বৈশিষ্ট্য:</b></font></p><p style=\"text-align: justify;\"><font color=\"#555555\" face=\"Roboto\">1. স্ট্যান্ডবাই ব্যাটারি লাইফ 2 বছর পর্যন্ত</font></p><p style=\"text-align: justify;\"><font color=\"#555555\" face=\"Roboto\">2. কম ব্যাটারি সতর্কতা</font></p>'),
(4, 'images/service/1729078935131293.jpg', 'Shutter Siren', '<h5 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">1. Hard acoustic siren.<br>2. Arm and Disarm by key<br>3. Dry battery operated</h5><h5 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"></h5><h3 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Exclusive Features:</span></h3><h5 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">1. Standby battery life up to 2 year<br>2. Low battery alert</h5>', '2022-03-10 03:00:26', '2022-04-03 16:29:31', 'শাটার সাইরেন', '<p style=\"text-align: justify;\"><font color=\"#555555\" face=\"Roboto\">1. হার্ড অ্যাকোস্টিক সাইরেন।</font></p><p style=\"text-align: justify;\"><font color=\"#555555\" face=\"Roboto\">2. চাবি&nbsp;দ্বারা বাহু এবং নিরস্ত্র</font></p><p style=\"text-align: justify;\"><font color=\"#555555\" face=\"Roboto\">3. শুকনো ব্যাটারি চালিত</font></p><p style=\"text-align: justify;\"><font color=\"#555555\" face=\"Roboto\"><span style=\"font-weight: bolder;\">একচেটিয়া বৈশিষ্ট্য:</span></font></p><p style=\"text-align: justify;\"><font color=\"#555555\" face=\"Roboto\">1. স্ট্যান্ডবাই ব্যাটারি লাইফ 2 বছর পর্যন্ত</font></p><p style=\"text-align: justify;\"><font color=\"#555555\" face=\"Roboto\">2. কম ব্যাটারি সতর্কতা</font></p>'),
(7, 'images/service/1729080316874398.png', 'GSM Multi Door Siren', '<h5><b>1. Alert up to 5 mobile number via call/sms/app.<br></b><b>2. Gsm signal, battery, balance con check via sms/app.<br></b><b>3. 10 Days stand by battery backup.<br></b><b>4. Auto arm &amp; disarm facility.<br></b><b>5. ROHS PCB<br></b><b>6. Can attach 5 wireless sensors like Door, Motion, Fire, Gas, Panic...etc</b></h5>', '2022-04-03 16:51:32', '2022-04-03 18:18:33', 'জিএসএম মাল্টি ডোর সাইরেন', '<p>1. কল/এসএমএস/অ্যাপের মাধ্যমে 5টি মোবাইল নম্বর পর্যন্ত সতর্কতা।</p><p>2. জিএসএম সিগন্যাল, ব্যাটারি, এসএমএস/অ্যাপের মাধ্যমে ব্যালেন্স চেক করুন।</p><p><span style=\"font-size: 1rem;\">3. 10 দিন ব্যাটারি ব্যাকআপ দ্বারা স্ট্যান্ড</span><span style=\"font-size: 1rem;\">।</span><br></p><p><span style=\"font-size: 1rem;\">4. স্বয়ংক্রিয় হাত এবং নিরস্ত্রীকরণ সুবিধা।</span><br></p><p><span style=\"font-size: 1rem;\">5. আর ও এইচ এস পিসিবি</span><span style=\"font-size: 1rem;\">।</span><br></p><p><span style=\"font-size: 1rem;\">6. 5 টি ওয়্যারলেস সেন্সর যেমন ডোর, মোশন, ফায়ার, গ্যাস, প্যানিক...ইত্যাদি সংযুক্ত করতে পারে</span><span style=\"font-size: 1rem;\">।</span><br></p>'),
(8, 'images/service/1729080629524586.png', 'Gsm Multi Shutter Siren', '<h5><b>1. Alert up to 5 mobile number via call/sms/app.<br></b><b>2. Gsm signal, battery, balance con check via sms/app.<br></b><b>3. 10 Days stand by battery backup.<br></b><b>4. Auto arm &amp; disarm facility.<br></b><b>5. ROHS PCB<br></b><b>6. Can attach 5 wireless sensors like Door, Motion, Fire, Gas, Panic...etc</b></h5>', '2022-04-03 16:56:29', '2022-04-03 18:19:41', 'জিএসএম মাল্টি শাটার সাইরেন', '<p>1. কল/এসএমএস/অ্যাপের মাধ্যমে 5টি মোবাইল নম্বর পর্যন্ত সতর্কতা।</p><p><span style=\"font-size: 1rem;\">2. জিএসএম সিগন্যাল, ব্যাটারি, এসএমএস/অ্যাপের মাধ্যমে ব্যালেন্স চেক করুন।</span><br></p><p><span style=\"font-size: 1rem;\">3. 10 দিন ব্যাটারি ব্যাকআপ দ্বারা স্ট্যান্ড</span><span style=\"font-size: 1rem;\">।</span><br></p><p><span style=\"font-size: 1rem;\">4. স্বয়ংক্রিয় হাত এবং নিরস্ত্রীকরণ সুবিধা।</span><br></p><p><span style=\"font-size: 1rem;\">5. আর ও এইচ এস পিসিবি</span><span style=\"font-size: 1rem;\">।</span><br></p><p><span style=\"font-size: 1rem;\">6. 5 টি ওয়্যারলেস সেন্সর যেমন ডোর, মোশন, ফায়ার, গ্যাস, প্যানিক...ইত্যাদি সংযুক্ত করতে পারে</span><span style=\"font-size: 1rem;\">।</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charges`
--

CREATE TABLE `shipping_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inside` int(11) NOT NULL,
  `outside` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_charges`
--

INSERT INTO `shipping_charges` (`id`, `inside`, `outside`, `created_at`, `updated_at`) VALUES
(1, 50, 100, NULL, '2022-04-03 16:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_size` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `created_at`, `updated_at`, `bn_size`) VALUES
(1, 'M', '2022-03-12 22:02:12', '2022-03-23 03:44:11', 'ইস্ট'),
(2, 'XL', '2022-03-12 22:02:12', '2022-03-23 03:44:25', 'করে'),
(3, 'XXL', '2022-03-12 22:02:12', '2022-03-23 03:44:37', 'লাভ');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(4, 'images/slider/1728430115200739.png', '2022-03-27 12:36:48', '2022-03-27 12:36:48'),
(5, 'images/slider/1728430131062993.png', '2022-03-27 12:37:03', '2022-03-27 12:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `slug`, `status`, `created_at`, `updated_at`, `bn_name`) VALUES
(1, 1, 'GSM', 'gsm', 1, '2022-03-12 21:47:18', '2022-03-28 18:56:09', 'শব্দ+ফোন কল'),
(2, 1, 'NON GSM', 'non-gsm', 1, '2022-03-12 21:47:27', '2022-03-28 18:27:26', 'শব্দ'),
(3, 2, 'GSM', 'gsm', 1, '2022-03-12 21:47:40', '2022-03-28 18:28:58', 'শব্দ+ফোন কল'),
(4, 2, 'NON GSM', 'non-gsm', 1, '2022-03-12 21:47:48', '2022-03-28 18:40:23', 'শব্দ'),
(5, 3, 'Bike', 'bike', 1, '2022-03-12 21:47:59', '2022-03-28 18:30:38', 'মোটর সাইকেল'),
(6, 3, 'Car', 'car', 1, '2022-03-12 21:48:13', '2022-03-28 18:31:11', 'গাড়ী'),
(7, 3, 'K1', 'k1', 0, '2022-03-23 02:07:28', '2022-03-28 18:50:22', 'টেক্তরীর'),
(8, 6, 'iPhone - Apple', 'iphone-apple', 1, '2022-06-27 14:13:59', '2022-06-27 14:13:59', 'আইফোন - অ্যাপল'),
(9, 6, 'Google Pixel', 'google-pixel', 1, '2022-06-27 14:16:29', '2022-06-27 14:16:29', 'গুগল পিক্সেল'),
(10, 6, 'Sony', 'sony', 1, '2022-06-27 14:16:59', '2022-06-27 14:16:59', 'সোনি'),
(11, 6, 'Samsung', 'samsung', 1, '2022-06-27 14:17:53', '2022-06-27 14:17:53', 'স্যামসাং');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_details` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `designation`, `details`, `created_at`, `updated_at`, `bn_name`, `bn_designation`, `bn_details`) VALUES
(1, 'images/testimonial/1726903436420022.png', 'Contrary to popular', 'Lorem Ipsum is', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', '2022-03-10 03:10:54', '2022-03-12 00:16:01', '', '', ''),
(2, 'images/testimonial/1726903436862397.png', 'Contrary to popular', 'Lorem Ipsum is', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', '2022-03-10 03:10:54', '2022-03-23 06:17:45', 'ফরম্যাটেই', 'ওয়েব ডেডলপ', 'সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই'),
(3, 'images/testimonial/1726903457334967.jpg', 'Contrary to popular', 'Lorem Ipsum is', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', '2022-03-10 03:11:14', '2022-03-23 06:17:30', 'অর্থহীন লেখা', 'ওয়েব ডেডলপ', 'সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই'),
(4, 'images/testimonial/1726903457925433.jpg', 'Contrary to popular', 'Lorem Ipsum is', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', '2022-03-10 03:11:14', '2022-03-23 06:17:10', 'অর্থহীন লেখা', 'ওয়েব ডেডলপ', 'সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই সেই ধারনা থেকেই'),
(5, 'images/testimonial/1728074786008019.jpg', 'Mr. Alexgender', 'web develop[er', 'df dfg', '2022-03-23 01:29:00', '2022-03-23 01:29:00', 'অর্থহীন লেখা', 'ওয়েব ডেডলপ', 'আমরা বাংলায় ওয়েব ডেডলপমেন্ট নিয়ে কাজ করতে গিয়ে প্রথম যে সমস্যাটার মুখোমুখি হই, সেটা হলো, বাংলা ডেমো টেক্সট। ইংরেজির জন্য lorem ipsum তো আছে । বাংলার জন্য কি আছে? সেই ধারনা থেকেই বাংলা ডেমো টেক্সট তৈরীর চেষ্টা। HTML এর প্রয়োজনীয় প্রায় সব ফরম্যাটেই বাংলা ডেমো টেক্সট তুলে ধরা হয়েছে। আশা করছি, এরি ক্ষুদ্র প্রচেষ্টা আপনাদের কাজে আসবে।');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Leatha Vandervort I', 'quicktech.foisal@gmail.com', '2022-03-13 03:18:20', '$2y$10$7rZLXRCp9x8XxMUxiEflHO6r81OKashr5TGf4Lt35LcM81lQZje7y', 'lj8ZfXxXEb1FRLitA1YY1M8jGj6YoOLtaOVJfhUhJHVK5FiEb3efp53JauCj', '2022-03-13 03:18:20', '2022-03-28 18:00:39'),
(2, 'Mr. Alexgender', 'user2@gmail.com', NULL, '$2y$10$3Upx.8UZb9r62kNvJrc47O0UIJFwRICOGkO3JpXzhBCJujoiJeaFi', NULL, '2022-03-21 04:41:43', '2022-03-21 04:41:43'),
(3, 'jahangir alam', 'prioalam@gmail.com', NULL, '$2y$10$CxIG1SGZL2oG8VG1gjuTe.qD1SxPzs28yT2LRcwypyA6vn5b8RcYe', NULL, '2022-03-27 18:07:57', '2022-03-27 18:07:57'),
(4, 'sowrov howader', 'neel76177@gmail.com', NULL, '$2y$10$PaoPTVBWIzpQbd1Yq1GJnOn79vtT3zq/pPkwkZ9gwH0iWUVbdfwOW', NULL, '2022-03-28 11:48:08', '2022-03-28 11:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `image`, `name`, `phone`, `email`, `city`, `area`, `zip_code`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/customer/1727179767743240.jpg', 'Leatha Vandervort I', '1238', 'quicktech.foisal@gmail.com', 'Dhaka', 'Dhaka', '1216', 'Mirpur - 10', NULL, '2022-03-29 18:22:18'),
(2, 4, NULL, 'sowrov howader', '01722276177', 'neel76177@gmail.com', 'Dhaka', 'asdfgbn', '1216', 'zgsfdfbng  rsgrdhtfhgh tdhtfyhgjh d jtfyugj', '2022-03-28 11:54:51', '2022-03-28 11:54:51'),
(3, 3, NULL, 'jahangir alam', '01842449085', 'prioalam@gmail.com', 'drtyuiop', 'drftgyuio', '1216', 'house -563/1,mirpur -2', '2022-03-29 16:49:53', '2022-03-29 16:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 1, 101, '2022-02-12 00:49:32', '2022-02-12 00:49:32'),
(7, 1, 100, '2022-02-12 01:24:04', '2022-02-12 01:24:04'),
(8, 1, 92, '2022-03-13 04:39:36', '2022-03-13 04:39:36'),
(10, 1, 1, '2022-03-23 04:56:51', '2022-03-23 04:56:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_blog_category`
--
ALTER TABLE `blog_blog_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_blog_category_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_blog_category_blod_category_id_foreign` (`blog_category_id`);

--
-- Indexes for table `blog_blog_tag`
--
ALTER TABLE `blog_blog_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_blog_tag_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_blog_tag_blod_tag_id_foreign` (`blog_tag_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childcategories`
--
ALTER TABLE `childcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `childcategories_category_id_foreign` (`category_id`),
  ADD KEY `childcategories_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_product_product_id_foreign` (`product_id`),
  ADD KEY `color_product_color_id_foreign` (`color_id`);

--
-- Indexes for table `company_infos`
--
ALTER TABLE `company_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_sliders`
--
ALTER TABLE `company_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
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
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`),
  ADD KEY `order_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_size_product_id_foreign` (`product_id`),
  ADD KEY `product_size_size_id_foreign` (`size_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_blog_category`
--
ALTER TABLE `blog_blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog_blog_tag`
--
ALTER TABLE `blog_blog_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `childcategories`
--
ALTER TABLE `childcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `color_product`
--
ALTER TABLE `color_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `company_infos`
--
ALTER TABLE `company_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_sliders`
--
ALTER TABLE `company_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_blog_category`
--
ALTER TABLE `blog_blog_category`
  ADD CONSTRAINT `blog_blog_category_blod_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_blog_category_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_blog_tag`
--
ALTER TABLE `blog_blog_tag`
  ADD CONSTRAINT `blog_blog_tag_blod_tag_id_foreign` FOREIGN KEY (`blog_tag_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_blog_tag_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `childcategories`
--
ALTER TABLE `childcategories`
  ADD CONSTRAINT `childcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `childcategories_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `color_product`
--
ALTER TABLE `color_product`
  ADD CONSTRAINT `color_product_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `color_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
