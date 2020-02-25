-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2020 at 06:56 PM
-- Server version: 10.0.38-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moktamco_hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `description`, `description_ar`, `home_description`, `home_description_ar`, `created_at`, `updated_at`) VALUES
(1, '645_1577865714.png', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</p>\r\n\r\n<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق &quot;ليتراسيت&quot; (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل &quot;ألدوس بايج مايكر&quot; (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>', '2019-12-29 09:17:53', '2020-01-01 08:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'fekra', 'fekra@fekra.com', '$2y$10$87oB9ToSnO8M2JHI.BErHOEkYLdCHGmNvl26yx/mF5S.TcuEE.RBm', 'qmWXwbOykqIS6PzONEGosS2HVHZMgtTWmcyXuUcKRQjD6TYW9Bh6B6cNVhSM', '2019-11-20 06:16:35', '2019-11-20 09:59:15', 1),
(4, 'Ahmed', 'ahmed@ahmed.com', '$2y$10$1lvfTeic7rpetG0d5Wrdau3fTnhxvTwuY5WkfX96zW2Q9GVauegUq', NULL, '2019-12-30 15:02:01', '2019-12-30 15:02:26', 1),
(6, 'ahmed', 'a@a.com', '$2y$10$rP63avTxklGd5el2iTd9m.SxD3ZapIavHo6Nx9UgqsK8swgZ.owFK', NULL, '2020-02-25 12:10:48', '2020-02-25 12:10:48', 3);

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carier_employees`
--

CREATE TABLE `carier_employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `years_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `military_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forth_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carier_employees`
--

INSERT INTO `carier_employees` (`id`, `user_id`, `name`, `slug`, `email`, `phone`, `gender`, `address`, `birth_date`, `education`, `job_title`, `years_experience`, `personal_info`, `military_service`, `image`, `status`, `first_skill`, `second_skill`, `third_skill`, `forth_skill`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Omar Ashraf', 'omar-ashraf-2', 'omar@omar.com', '0111111111111111', '1', '28 Lincoln Blvd, Santa Monica', '2019-12-31', 'Sailor', 'WEb Developer', 'ex year', '<p>description</p>', '1', '01_1575204180.jpg', '1', '10', '', '', '', '2019-12-01 10:29:13', '2019-12-07 10:55:24'),
(3, NULL, 'Mohamed Ahmed', 'mohamed-ahmed-3', 'wr@wr.com', '01010101010', '1', '28 Lincoln Blvd, Santa Monica', '2019-12-01', 'Sailor', 'job title', 'ex year', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>', '1', '04_1575208953.jpg', '1', NULL, NULL, NULL, NULL, '2019-12-01 12:02:33', '2019-12-01 12:02:33'),
(4, NULL, 'Rachel Green', 'rachel-green-5de3caf2ee541', 'sa@sa.com', '01010101010', '1', '28 Lincoln Blvd, Santa Monica', '2019-12-07', '21', 'job title', 'ex year', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>', '1', '06_1575209162.jpg', '1', NULL, NULL, NULL, NULL, '2019-12-01 12:06:02', '2019-12-01 12:15:14'),
(5, NULL, 'Chandleer Bing', 'chandleer-bing-5de3cbb9c7363', 'ch@ch.com', '01010101010', '1', '28 Lincoln Blvd, Santa Monica', '2020-01-09', 'Comic Maker', 'WEb Developer', 'ex year', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>', '1', '05_1575209913.jpg', '1', NULL, NULL, NULL, NULL, '2019-12-01 12:18:33', '2019-12-01 12:19:16'),
(6, NULL, 'Omar Ashraf', 'omar-ashraf-5de7d907dee1a', 'omar@omar.com', '0101010101010', '1', '28 Lincoln Blvd, Santa Monica', '2019-12-03', '21', 'WEb Developer', '2', '<p>Personal Experience</p>', '1', '06_1575475463.jpg', '1', '30', '30', '80', '100', '2019-12-04 14:04:23', '2019-12-04 14:04:23'),
(12, NULL, 'Hello World', 'hello-world-5de8d140d6b92', 'fekra@fekra.com', '01010101010', '1', '28 Lincoln Blvd, Santa Monica', '2019-12-02', 'Sailor', 'WEb Developer', 'ex year', '<p>desc</p>', '1', '08_1575539008.jpg', '1', '10', '10', '10', '10', '2019-12-05 07:43:28', '2019-12-05 07:43:28'),
(13, NULL, 'Hello World', 'hello-world-5de8d1973e78d', 'fekra@fekra.com', '01010101010', '1', '28 Lincoln Blvd, Santa Monica', '2019-12-02', 'Sailor', 'WEb Developer', 'ex year', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '1', '08_1575539095.jpg', '1', '10', '10', '10', '10', '2019-12-05 07:44:55', '2019-12-05 10:20:08'),
(14, NULL, 'Nami', 'nami-5de8f7c8efa22', 'nami@nami.com', '01010101010', '2', '28 Lincoln Blvd, Santa Monica', '2019-12-05', 'Comic Maker', 'WEb Developer', 'ex year', '<p>description</p>', '1', '01_1575548872.jpg', '1', '30', '80', '60', '40', '2019-12-05 10:27:52', '2019-12-05 10:27:52'),
(18, 9, 'Omar Ashraf Mohamed', 'omar-ashraf-mohamed-5e316fe9b2428', 'omar@siteEmployeeCarier.com', '123213213213', '1', NULL, '2019-11-27', 'education', 'Web Designer', '2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2', '06_1580298217.jpg', '1', '100', '100', '100', '100', '2019-12-07 06:30:18', '2020-01-29 11:45:25'),
(19, NULL, 'Omar Ashraf', 'omar-ashraf-5df2306e86642', 'dd@dd.com', '123213213213', '1', 'Mansoura-21 Mansoura street', '2019-12-01', 'Educational Qualification', 'Web Designer', NULL, '<p>asdasd</p>', '1', '08_1576153198.jpg', '1', '10', '10', '10', '10', '2019-12-12 10:19:58', '2019-12-12 10:19:58'),
(21, 17, 'Omar', 'omar-5df23f5351099', 'employeee@carier.com', '01010101010', '2', '28 Lincoln Blvd, Santa Monica', '2019-12-01', 'Sailor', 'WEb Developer', NULL, 'asdasdsad', '1', '05_1576157011.jpg', '0', '40', '90', '30', '80', '2019-12-12 11:23:31', '2019-12-12 11:23:31'),
(22, 21, 'Study Employee', 'study-employee-5df4bb183bcfa', 'employee@study.com', '01010101010', '1', '28 Lincoln Blvd, Santa Monica', '2019-12-08', 'Sailor', 'Teacher', '2 Years', '<p>Teacher</p>', '1', '05_1576319768.jpg', '1', '30', '70', '100', '90', '2019-12-14 08:36:08', '2020-01-30 15:02:29'),
(23, 23, 'Carier Site Employee', 'carier-site-employee-5e0b03b02fefd', 'carierEmployee@site.com', '123213213213', '2', NULL, '2019-12-02', NULL, 'Accountant', NULL, 'Lorem', '2', '04_1577780144.jpg', '0', '10', '10', '10', '10', '2019-12-31 08:15:44', '2019-12-31 08:15:44'),
(24, 29, 'Omar Ashraf', 'omar-ashraf-5e2edf7ba3c4b', 'to@ca.com', '123213213213', '1', 'Mansoura-21 Mansoura street', '2020-01-21', 'Educational Qualification', 'Web Designer', '2', 'aaaa', '2', '07_1580130171.jpg', '0', '40', '70', '60', '90', '2020-01-27 13:02:51', '2020-01-27 13:02:51'),
(25, 32, 'ahmed gamal', 'ahmed-gamal-5e2fddb3a8d29', 'fekra@yahoo.com', '01093174220', '1', 'mokttam', '2018-05-14', 'bacylore', 'web designer', '3 years', 'kdakjlfajdela', '1', '_1580195251.jpg', '0', '10', '10', '10', '10', '2020-01-28 07:07:31', '2020-01-28 07:07:31'),
(26, 36, 'Fekra House', 'fekra-house-5e31772773431', 'employee@carier.com', '123213213213', '1', 'Mansoura-21 Mansoura street', '2020-01-02', 'Educational Qualification', 'Web Designer', '2 Yers', 'kkkkkkk', '2', 'cover2_1580300071.jpg', '0', '10', '10', '10', '10', '2020-01-29 12:14:31', '2020-01-29 12:14:31'),
(27, 39, 'ahmed', 'ahmed-5e3ecee737524', 'alfa_graphic1987@yahoo.com', '01093174220', '1', 'moktam', '1987-01-08', 'bacholer', 'web designer', '12', 'hello', '2', 'adv_2_1581174503.png', '0', '10', '10', '10', '10', '2020-02-08 15:08:23', '2020-02-08 15:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `carier_static_names`
--

CREATE TABLE `carier_static_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_level_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_years` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_years_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_skill_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_skill_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_skill_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forth_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forth_skill_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificates_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_info_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `talk_about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `talk_about_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `select_employee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_employee_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_employee_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_employee_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_company_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_company_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_company_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carier_static_names`
--

INSERT INTO `carier_static_names` (`id`, `company_name`, `company_name_ar`, `job_title`, `job_title_ar`, `experience_level`, `experience_level_ar`, `education`, `education_ar`, `experience_years`, `experience_years_ar`, `job_description`, `job_description_ar`, `first_skill`, `first_skill_ar`, `second_skill`, `second_skill_ar`, `third_skill`, `third_skill_ar`, `forth_skill`, `forth_skill_ar`, `certificates`, `certificates_ar`, `personal_info`, `personal_info_ar`, `talk_about`, `talk_about_ar`, `qualification`, `qualification_ar`, `job_type`, `job_type_ar`, `created_at`, `updated_at`, `select_employee`, `select_employee_ar`, `select_employee_slug`, `select_employee_slug_ar`, `select_company`, `select_company_ar`, `select_company_slug`, `select_company_slug_ar`) VALUES
(1, 'Company Name', 'أسم الشركة', 'Job Title', 'عنوان الوظيفة', 'Experience Level', 'الخبرة', 'Educational Qualification', 'الموهلات الدراسية', 'Years of experience', 'سنوات الخبرة', 'Job Required', 'الوظيفة المطلوبة', 'Communcation', 'المهارة الاولى', 'Second Skill', 'المهارة الثانية', 'Third Skill', 'المهارة الثالثة', 'Forth Skill', 'المهارة الرابعة', 'Certificates', 'الشهادات', 'Personal Information', 'المعلومات الشخصية', 'Talk About your self', 'تكلم عن نفسك', 'Qualifications', 'المؤهلات', 'Job Type', 'نوع الوظيفة', NULL, '2020-01-04 13:26:13', 'Employee', 'موظف', 'Looking For Company', 'يبحث عن شركه', 'Company', 'شركه', 'Looking For Employee', 'تبحث عن موظف');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `type`, `name`, `certificate`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 1, 'email', 'email_1575548873.pdf', 14, '2019-12-05 10:27:53', '2019-12-05 10:27:53'),
(13, 1, '07', '07_1575548873.jpg', 14, '2019-12-05 10:27:53', '2019-12-05 10:27:53'),
(14, 1, '03', '03_1575548873.jpg', 14, '2019-12-05 10:27:53', '2019-12-05 10:27:53'),
(15, 1, '08', '08_1575548873.jpg', 14, '2019-12-05 10:27:53', '2019-12-05 10:27:53'),
(23, 1, '07', '07_1575707418.jpg', 18, '2019-12-07 06:30:18', '2019-12-07 06:30:18'),
(29, 1, 'email', 'email_1576157011.pdf', 21, '2019-12-12 11:23:31', '2019-12-12 11:23:31'),
(31, 2, '01', '01_1576158204.jpg', 5, '2019-12-12 11:43:24', '2019-12-12 11:43:24'),
(32, 2, '06', '06_1576158204.jpg', 5, '2019-12-12 11:43:24', '2019-12-12 11:43:24'),
(33, 2, '08', '08_1576158204.jpg', 5, '2019-12-12 11:43:24', '2019-12-12 11:43:24'),
(34, 2, '07', '07_1576159513.jpg', 6, '2019-12-12 12:05:13', '2019-12-12 12:05:13'),
(36, 1, '05', '05_1576319768.jpg', 22, '2019-12-14 08:36:08', '2019-12-14 08:36:08'),
(37, 1, '01', '01_1576319768.jpg', 22, '2019-12-14 08:36:08', '2019-12-14 08:36:08'),
(38, 1, 'email', 'email_1576319768.pdf', 22, '2019-12-14 08:36:08', '2019-12-14 08:36:08'),
(47, 3, '07', '07_1576323612.jpg', 2, '2019-12-14 09:40:12', '2019-12-14 09:40:12'),
(49, 1, '1', '1_1577722432.jpg', 5, '2019-12-30 16:13:52', '2019-12-30 16:13:52'),
(50, 1, '11', '11_1577722432.jpg', 5, '2019-12-30 16:13:52', '2019-12-30 16:13:52'),
(51, 1, '1', '1_1577722432.png', 5, '2019-12-30 16:13:52', '2019-12-30 16:13:52'),
(52, 1, '2', '2_1577722432.png', 5, '2019-12-30 16:13:52', '2019-12-30 16:13:52'),
(53, 1, '07', '07_1580130171.jpg', 24, '2020-01-27 13:02:51', '2020-01-27 13:02:51'),
(54, 2, '07', '07_1580130511.jpg', 9, '2020-01-27 13:08:31', '2020-01-27 13:08:31'),
(56, 1, '-Maredy', '-Maredy_1580195251.png', 25, '2020-01-28 07:07:31', '2020-01-28 07:07:31'),
(57, 1, 'girl_short', 'girl_short_1580298287.png', 18, '2020-01-29 11:44:47', '2020-01-29 11:44:47'),
(58, 2, 'girl_short', 'girl_short_1580298555.png', 5, '2020-01-29 11:49:15', '2020-01-29 11:49:15'),
(59, 2, '01', '01_1580298927.jpg', 10, '2020-01-29 11:55:27', '2020-01-29 11:55:27'),
(60, 3, 'girl_short', 'girl_short_1580299139.png', 3, '2020-01-29 11:58:59', '2020-01-29 11:58:59'),
(61, 3, '07', '07_1580299261.jpg', 4, '2020-01-29 12:01:01', '2020-01-29 12:01:01'),
(62, 3, 'girl_short', 'girl_short_1580299261.png', 4, '2020-01-29 12:01:01', '2020-01-29 12:01:01'),
(63, 1, '1', '1_1580300071.png', 26, '2020-01-29 12:14:31', '2020-01-29 12:14:31'),
(64, 1, '1', '1_1580300071.png', 26, '2020-01-29 12:14:31', '2020-01-29 12:14:31'),
(65, 2, '2', '2_1580300253.png', 11, '2020-01-29 12:17:33', '2020-01-29 12:17:33'),
(66, 3, '1', '1_1580300463.png', 5, '2020-01-29 12:21:03', '2020-01-29 12:21:03'),
(67, 3, '1', '1_1580300463.png', 5, '2020-01-29 12:21:03', '2020-01-29 12:21:03'),
(68, 3, '1', '1_1580300463.jpg', 5, '2020-01-29 12:21:03', '2020-01-29 12:21:03'),
(69, 3, '1569414043', '1569414043_1580300463.jpg', 5, '2020-01-29 12:21:03', '2020-01-29 12:21:03'),
(70, 1, 'adv_1', 'adv_1_1581174503.png', 27, '2020-02-08 15:08:23', '2020-02-08 15:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `title_ar`, `description`, `description_ar`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Cuntact Us', 'إتصل بنا', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما-</p>', '1_1577370898.jpg', NULL, '2019-12-26 12:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Omar Ashraf', 'omar@omar.com', '123213213213', 'asdsadasdasd', '2019-12-26 13:12:20', '2019-12-26 13:12:20'),
(2, 'osama', 'omar@omar.com', '01093174220', 'شسيشسي                          ضصضصي', '2019-12-26 13:46:45', '2019-12-26 13:46:45'),
(3, 'Name', 'fekra@admin.com', '123213213213', 'شسيشسي', '2019-12-26 13:48:42', '2019-12-26 13:48:42'),
(5, 'Omar Ashraf', 'omar@omar.com', '01093174220', 'Please Contact US', '2019-12-26 14:07:49', '2019-12-26 14:07:49'),
(6, 'media', 'media@media.com', '010101010101010', 'Lorem', '2019-12-31 08:37:16', '2019-12-31 08:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'omar', 'omar@omar.com', '$2y$10$S3EUP5ljp7RkKvuIhcuxt.wxYv4BRpwBQW/GJ/eTaH1poLtOTvJ96', 'W0NhIPknfvDx6cI382nM3QNb0UNiV1HFi0nGXWjyrhyURYv5nfKnwgl1jneZ', '2019-11-20 06:18:59', '2019-11-20 06:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `employee_password_resets`
--

CREATE TABLE `employee_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `image`, `type`, `link`, `created_at`, `updated_at`) VALUES
(1, '1_1577634439.jpg', 'firstSlider', NULL, '2019-12-29 13:47:19', '2019-12-29 13:47:19'),
(2, '1_1577634490.png', 'secondSlider', 'https://www.google.com', '2019-12-29 13:48:10', '2020-01-29 13:08:01'),
(3, '2_1577634499.png', 'secondSlider', 'https://www.google.com', '2019-12-29 13:48:19', '2020-01-29 11:00:15'),
(5, 'image-2_1577635947.jpg', 'firstSlider', NULL, '2019-12-29 14:12:27', '2019-12-29 14:12:27'),
(6, 'image-2_1577636542.jpg', 'thirdSlider', NULL, '2019-12-29 14:22:22', '2019-12-29 14:22:22'),
(7, 'image-1_1577636564.jpg', 'thirdSlider', NULL, '2019-12-29 14:22:44', '2019-12-29 14:22:44'),
(8, 'cover_1580302718.jpg', 'secondSlider', NULL, '2020-01-29 10:58:38', '2020-01-29 13:14:37'),
(9, 'cover_1580302841.jpg', 'firstSlider', NULL, '2020-01-29 11:00:41', '2020-01-29 11:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `job_companies`
--

CREATE TABLE `job_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `years_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_companies`
--

INSERT INTO `job_companies` (`id`, `user_id`, `name`, `slug`, `phone`, `address`, `email`, `job_title`, `exp_level`, `gender`, `education`, `job_time`, `years_experience`, `job_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(7, NULL, 'Name-2', 'Name-2-7', '01010101010', 'Mansoura-21 Mansoura street', 'os@os.com', 'Title', 'level', '2', 'education', '1', '2', '<p>description</p>', '2_1575184680.jpg', '1', '2019-12-01 05:18:00', '2019-12-01 05:52:41'),
(8, NULL, 'Name-1', 'Name-1-8', '01010101010', 'cairo 21', 'os@os.com', 'Title', 'level', NULL, 'education', '2', '2', '<p>description</p>', '1537591603_1575185012.png', '1', '2019-12-01 05:20:08', '2019-12-01 05:52:32'),
(11, 3, 'Hello World', 'Hello-11', '01010101010', '28 Lincoln Blvd, Santa Monica', 'as@as.com', 'WEb Developer', 'Seniro', '1', '21', NULL, 'ex year', 'description', '01_1575455321.jpg', '1', '2019-12-04 08:28:41', '2019-12-04 09:15:24'),
(13, 4, 'New Company', 'New-Company-13', '01010101010', '28 Lincoln Blvd, Santa Monica', 'd@d.com', 'job title', 'Seniro', '1', 'Sailor', NULL, '2 Years', 'description', NULL, '1', '2019-12-04 10:32:43', '2019-12-30 15:46:24'),
(14, NULL, 'Omar Ashraf', 'omar-ashraf-5de7b48c775f8', '01010101010', '28 Lincoln Blvd, Santa Monica', 'o@o.com', 'job title', 'Seniro', '2', '21', '2', 'ex year', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>', '06_1575465741.jpg', '1', '2019-12-04 11:22:21', '2019-12-04 12:22:42'),
(15, NULL, 'New Company', 'new-company-5de7b517ac966', '01010101010', NULL, 'wr@wr.com', 'WEb Developer', NULL, NULL, NULL, NULL, NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>', NULL, '1', '2019-12-04 11:31:03', '2019-12-04 12:34:07'),
(16, NULL, 'Tourism Trips', 'tourism-trips-5de8bbbc68afe', '01010101010', '28 Lincoln Blvd, Santa Monica', 'sa@sa.com', 'job title', 'Seniro', '1', '21', NULL, '2 Years', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>', '01_1575533499.jpg', '1', '2019-12-05 06:11:40', '2019-12-30 15:42:21'),
(18, NULL, 'Carier Company', 'carier-company-5e0a1b5dadb85', '123213213213', 'Mansoura-21 Mansoura street', 'carierCompany@admin.com', 'Accountant', 'Juniro', '1', 'Educational Qualification', '1', '2', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>', '11_1577720669.jpg', '1', '2019-12-30 15:44:29', '2019-12-30 15:44:29'),
(19, 22, 'Fekra House', 'fekra-house-5e302c1556bf4', '123213213213', 'Mansoura-21 Mansoura street', 'carrierCompany@site.com', 'Accountant', NULL, '1', NULL, '1', '2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', '11_1580215288.jpg', '1', '2019-12-30 15:48:27', '2020-01-28 12:41:57'),
(20, 26, 'fekra', 'fekra-5e0c433338cac', '01093174220', 'mokttam', 'alfa_graphic@yahoo.com', 'web designer', 'level', '1', NULL, '1', NULL, 'web designer', 'LOGO3-Recovered (1)_1577861939.png', '0', '2020-01-01 06:58:59', '2020-01-01 06:58:59'),
(21, 27, 'fekracompany', 'fekracompany-5e1090e6650ee', '01093174', 'mokttam', 'gemy@yahoo.com', 'web designer', 'mid level', '1', 'bacholer', '1', '7 years', 'web designer requiredd', 'Contact-us-2-1_1578143974.jpg', '0', '2020-01-04 13:19:34', '2020-01-04 13:19:34'),
(22, NULL, 'Omar Ashraf', 'omar-ashraf-5e302d76e3797', '123213213213', 'Mansoura-21 Mansoura street', 'carierCompanySite@admin.com', 'Web Designer', 'Juniro', '1', 'Educational Qualification', NULL, '2', '<p>aaaaa</p>', '1_1580215670.jpg', '1', '2020-01-28 12:47:50', '2020-01-28 12:49:02'),
(23, 33, 'Fekra House', 'fekra-house-5e31747ca39b3', '01093174220', 'Mansoura-21 Mansoura street', 'carier@companyCarier.com', 'Web Designer', 'Juniro', '1', 'Educational Qualification', '1', '2 Yers', 'lllllllllllll', '11_1580299388.jpg', '0', '2020-01-29 12:03:08', '2020-01-29 12:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `media_companies`
--

CREATE TABLE `media_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `years_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_companies`
--

INSERT INTO `media_companies` (`id`, `user_id`, `name`, `phone`, `address`, `email`, `job_title`, `exp_level`, `gender`, `education`, `job_time`, `years_experience`, `job_description`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(2, NULL, 'fekra', '123213213213', 'Mansoura-21 Mansoura street', 'da@d.com', 'Web Designer', 'level', '1', 'eng', '1', '1', '<p>desc</p>', '04_1575975365.jpg', '1', 'fekra-5ded06ef0ddfe', '2019-12-08 12:21:34', '2019-12-10 08:56:05'),
(3, NULL, 'Fekra House Media', '123213213213', 'Mansoura-21 Mansoura street', 'fekra@mediaAdmin.com', 'Web Designer', 'Juniro', '1', 'Educational Qualification', '2', '2', '<p>description</p>', '1_1580216388.png', '1', 'fekra-house-media-5e303044b72fc', '2019-12-08 12:25:25', '2020-01-28 12:59:48'),
(4, NULL, 'Media Company', '123213213213', 'Mansoura-21 Mansoura street', 'media@company.com', 'Photographer', 'level', '1', 'education', '1', '2', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '01_1575975211.jpg', '1', 'media-company-5def788951923', '2019-12-10 08:50:48', '2019-12-10 08:53:31'),
(5, 25, 'Fekra Media', '01010101010', 'Mansoura-21 Mansoura street', 'fekra@mediasite.com', 'Director', NULL, '1', 'Educational Qualification', '2', '2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '1_1580216250.png', '1', 'fekra-media-5e302fbacef87', '2019-12-31 08:39:29', '2020-01-28 12:57:30'),
(6, 34, 'Fekra House', '01093174220', 'Mansoura-21 Mansoura street', 'media@companymedia.com', 'Web Designer', 'level', '1', 'Educational Qualification', '2', '2', 'nnnnnn', 'cover2_1580299540.jpg', '0', 'fekra-house-5e31751450587', '2020-01-29 12:05:40', '2020-01-29 12:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `media_employees`
--

CREATE TABLE `media_employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `years_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `military_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forth_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_employees`
--

INSERT INTO `media_employees` (`id`, `user_id`, `name`, `slug`, `email`, `phone`, `gender`, `address`, `birth_date`, `education`, `job_title`, `years_experience`, `personal_info`, `military_service`, `status`, `first_skill`, `second_skill`, `third_skill`, `forth_skill`, `video`, `image`, `created_at`, `updated_at`) VALUES
(5, 18, 'Omar m Ashraf', 'omar-m-ashraf-5e3171099d99c', 'omar@omarMediaEmployee.com', '01010101010', '1', '28 Lincoln Blvd, Santa Monica', '2019-12-01', '2years', 'Photographer', '2 Years', 'Lorem', '2', '1', '80', '80', '80', '80', 'https://www.youtube.com/watch?v=syfjVetUfws', '07_1580298505.jpg', '2019-12-12 11:43:24', '2020-01-29 11:51:00'),
(6, NULL, 'Omar Ashraf', 'omar-ashraf-5df24919bf329', 'daaa@d.com', '123213213213', '1', 'Mansoura-21 Mansoura street', '2019-11-24', 'Educational Qualification', 'Web Designer', '2', '<p>Personal Experience</p>', '1', '1', '80', '60', '80', '80', 'https://www.youtube.com/watch?v=CYAhxgU5PtQ', '04_1576159513.jpg', '2019-12-12 12:05:13', '2019-12-12 12:05:13'),
(7, 24, 'Media Site Employee', 'media-site-employee-5e0b071d61062', 'mediaEmployee@site.com', '123213213213', '1', NULL, '2019-11-24', NULL, 'Photographer', NULL, 'Lorem', '2', '0', '10', '10', '10', '10', NULL, '01_1577781021.jpg', '2019-12-31 08:30:21', '2019-12-31 08:30:21'),
(8, 28, 'Bandar Sabry', 'bandar-sabry-5e1095180b34e', 'bandarini@gmail.com', '01284488338', '1', 'October', '1979-01-13', NULL, 'Singer', '10', 'jhjhjhjhjhhjhjhhjhjhhjhjhjhjhjhjhjjhjhjhhjhjhjhjhjhjh', '2', '0', '70', '10', '10', '10', 'https://www.youtube.com/watch?v=g_2oyq65ZCQ', 'thumb_290_301_dreamstime_53069478_resizeimZz_1578145048.jpg', '2020-01-04 13:37:28', '2020-01-04 13:37:28'),
(9, 30, 'Omar Ashraf', 'omar-ashraf-5e2ee0cf18681', 'from@me.com', '123213213213', '1', 'Mansoura-21 Mansoura street', '2020-01-13', 'Educational Qualification', 'Web Designer', '2', 'aaaa', '2', '0', '40', '30', '80', '70', NULL, '07_1580130511.jpg', '2020-01-27 13:08:31', '2020-01-27 13:08:31'),
(10, NULL, 'Fekra House', 'fekra-house-5e3172af518d9', 'media@mediaEmployee.com', '123213213213', '1', 'Mansoura-21 Mansoura street', '2020-11-04', 'Educational Qualification', 'Web Designer', '2 Yers', '<p>asdasdasd</p>', '2', '1', '40', '80', '90', '100', 'https://www.google.com/', '07_1580298927.jpg', '2020-01-29 11:55:27', '2020-01-29 11:55:27'),
(11, 37, 'Omar Ashraf', 'omar-ashraf-5e3177ddd8906', 'employee@media.com', '123213213213', '1', 'Mansoura-21 Mansoura street', '2020-01-04', 'Educational Qualification', 'Web Designer', '2', 'pppppp', '2', '0', '50', '60', '60', '80', 'https://www.google.com/', 'cover2_1580300253.jpg', '2020-01-29 12:17:33', '2020-01-29 12:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `media_static_names`
--

CREATE TABLE `media_static_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_employee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_employee_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_employee_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_employee_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_company_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_company_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_company_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_level_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_years` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_years_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_skill_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_skill_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_skill_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forth_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forth_skill_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificates_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_info_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `talk_about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `talk_about_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_static_names`
--

INSERT INTO `media_static_names` (`id`, `company_name`, `company_name_ar`, `job_title`, `job_title_ar`, `select_employee`, `select_employee_ar`, `select_employee_slug`, `select_employee_slug_ar`, `select_company`, `select_company_ar`, `select_company_slug`, `select_company_slug_ar`, `experience_level`, `experience_level_ar`, `education`, `education_ar`, `experience_years`, `experience_years_ar`, `job_description`, `job_description_ar`, `first_skill`, `first_skill_ar`, `second_skill`, `second_skill_ar`, `third_skill`, `third_skill_ar`, `forth_skill`, `forth_skill_ar`, `certificates`, `certificates_ar`, `personal_info`, `personal_info_ar`, `talk_about`, `talk_about_ar`, `qualification`, `qualification_ar`, `job_type`, `job_type_ar`, `created_at`, `updated_at`) VALUES
(1, 'Company Name', 'أسم الشركة', 'Talented Title', 'عنوان الوظيفة', 'Talented', 'موهوبين', 'Looking For Producation Companines', 'يبحث عن شركات إنتاج', 'Producation Companines and competitions', 'شركات أنتاج', 'Looking Fro Talented', 'تبحث عن موهوبين', 'Experience Level', 'الخبرة', 'Educational Qualification', 'الموهلات الدراسية', 'Years of experience', 'سنوات الخبرة', 'Talented Required', 'الوظيفة المطلوبة', 'First Skill Media', 'المهارة الاولى', 'Second Skill Media', 'المهارة الثانية', 'Third Skill Media', 'المهارة الثالثة', 'Forth Skill Media', 'المهارة الرابعة', 'Certificates', 'الشهادات', 'Personal Information', 'المعلومات الشخصية', 'Talk About your self', 'تكلم عن نفسك', 'Qualifications', 'المؤهلات', 'Talented Type', 'نوع الوظيفة', '2019-12-11 09:44:24', '2019-12-14 12:10:52');

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
(3, '2019_11_20_081422_create_admins_table', 1),
(4, '2019_11_20_081423_create_admin_password_resets_table', 1),
(5, '2019_11_20_081741_create_employees_table', 2),
(6, '2019_11_20_081742_create_employee_password_resets_table', 2),
(7, '2019_11_20_111257_add_role_to_admins_table', 3),
(8, '2019_11_20_140613_create_settings_table', 4),
(9, '2019_12_01_051846_create_job_companies_table', 5),
(10, '2019_12_01_062009_add_job_title_to_job_compnies_table', 6),
(11, '2019_12_01_082922_create_carier_employees_table', 7),
(12, '2019_12_01_090122_add_militry_services_to_carier_employees_table', 8),
(13, '2019_12_01_134611_add_slug_to_carier_employee_table', 9),
(14, '2019_12_01_142134_create_sliders_table', 10),
(15, '2019_12_03_141053_add_type_to_users_table', 11),
(16, '2019_12_04_122054_create_notifications_table', 12),
(17, '2019_12_04_124551_add_slug_column_to_job_companies_table', 13),
(18, '2019_12_04_154403_add_columns_to_carier_employees_table', 14),
(19, '2019_12_04_160956_create_certificates_table', 15),
(20, '2019_12_05_084358_aa_user_id_to_certificates_table', 16),
(21, '2019_12_07_075752_create_work_experiences_table', 17),
(22, '2019_12_07_131522_create_carier_static_names_table', 18),
(23, '2019_12_07_132730_create_static_names_table', 18),
(24, '2019_12_07_153440_alter_table_carier_static_names', 19),
(25, '2019_12_08_111208_alter_static_names_yable', 20),
(26, '2019_12_08_113504_alter_static_names_table', 21),
(27, '2019_12_08_131844_create_media_companies_table', 22),
(28, '2019_12_10_134929_create_media_employees_table', 23),
(29, '2019_12_10_135533_add_vider_to_media_employees_table', 24),
(30, '2019_12_11_093646_create_media_static_names_table', 25),
(31, '2019_12_11_110910_alter_carier_static_names_table', 26),
(32, '2019_12_11_121531_add_contact_us_column_to_static_names', 27),
(33, '2019_12_11_131505_add_contact_us_columns_to_static_names', 28),
(34, '2019_12_11_135547_add_more_info_column_to_static_names', 29),
(35, '2019_12_12_105027_alter_table_static_names_add_company_date', 30),
(36, '2019_12_12_112059_create_militray_services_table', 31),
(37, '2019_12_12_133933_add_image_to_media_employees_table', 32),
(38, '2019_12_14_080749_create_study_companies_table', 33),
(39, '2019_12_14_095132_create_study_employees_table', 34),
(40, '2019_12_14_123559_create_study_static_names_table', 35),
(41, '2019_12_14_134049_add_video_to_static_names', 36),
(42, '2019_12_26_141152_create_contacts_table', 37),
(43, '2019_12_26_145027_alter_setting_table', 38),
(44, '2019_12_26_150536_create_contact_messages_table', 39),
(45, '2019_12_26_172013_add_get_in_totch_to_static_table', 40),
(46, '2019_12_29_090247_create_abouts_table', 41),
(47, '2019_12_29_132904_create_services_table', 42),
(48, '2019_12_29_141443_alter_services_table', 43),
(49, '2019_12_29_143041_alter_abouts_table', 44),
(50, '2019_12_29_145926_create_home_sliders_table', 45),
(51, '2019_12_30_082101_add_icarier_to_static_names_table', 46);

-- --------------------------------------------------------

--
-- Table structure for table `militray_services`
--

CREATE TABLE `militray_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `militray_services`
--

INSERT INTO `militray_services` (`id`, `name`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, 'Finished', 'منتهى', '2019-12-12 09:37:35', '2019-12-12 09:41:13'),
(2, 'Student', 'طالب', '2019-12-30 15:13:09', '2019-12-30 15:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('06364226-8c94-4e39-be1b-77eb563b5b99', 'App\\Notifications\\CarierCompanyRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Carier Company Request\",\"link\":\"admin.carierCompanyRequests\"}', NULL, '2020-01-29 12:03:08', '2020-01-29 12:03:08'),
('09d96e8f-1e92-4c33-a6ae-ec32fc98a18d', 'App\\Notifications\\carierEmployeeRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Carier Employee Request\",\"link\":\"admin.carierEmployeesRequests\"}', NULL, '2020-01-27 13:02:51', '2020-01-27 13:02:51'),
('10a7495c-38f8-48c3-8189-515a3136c654', 'App\\Notifications\\MediaCompanyRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Media Company Request\",\"link\":\"admin.mediaCompanyRequests\"}', NULL, '2020-01-29 12:05:40', '2020-01-29 12:05:40'),
('165cc9f2-fabf-4981-9e82-4e2a57a2532a', 'App\\Notifications\\carierEmployeeRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Carier Employee Request\",\"link\":\"admin.carierEmployeesRequests\"}', NULL, '2019-12-31 08:15:44', '2019-12-31 08:15:44'),
('18bbaf06-96d7-4467-9350-666267883a94', 'App\\Notifications\\CarierCompanyRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Carier Company Request\",\"link\":\"admin.carierCompanyRequests\"}', NULL, '2019-12-30 15:48:28', '2019-12-30 15:48:28'),
('19fe42bb-aa09-4a84-8d8c-f80050950e55', 'App\\Notifications\\ContactUsMessage', 'App\\Admin', 3, '{\"data\":\"You Have New Contact Message\",\"link\":\"admin.contactMessage\"}', NULL, '2019-12-26 14:07:49', '2019-12-26 14:07:49'),
('1d5ed77e-88bc-4b50-9814-77598fe39a85', 'App\\Notifications\\mediaEmployeeRequest', 'App\\Admin', 3, '{\"data\":\"You Have New Media Employee Request\",\"link\":\"admin.mediaEmployeesRequests\"}', NULL, '2019-12-12 11:43:25', '2019-12-12 11:43:25'),
('1e5ce14d-ff11-4759-b078-82229c18d7e3', 'App\\Notifications\\StudyEmployeeRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Study Employee Request\",\"link\":\"admin.studyEmployeesRequests\"}', NULL, '2020-01-29 12:21:03', '2020-01-29 12:21:03'),
('210939af-0325-459e-8c52-065dd8c27e38', 'App\\Notifications\\carierEmployeeRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Carier Employee Request\",\"link\":\"admin.carierEmployeesRequests\"}', NULL, '2020-01-29 12:14:31', '2020-01-29 12:14:31'),
('220003fc-ef60-4ce1-b1b6-85ddd963b8ac', 'App\\Notifications\\MediaCompanyRequest', 'App\\Admin', 3, '{\"data\":\"You Have New Media Company Request\",\"link\":\"admin.mediaCompanyRequests\"}', NULL, '2019-12-10 09:45:20', '2019-12-10 09:45:20'),
('24d17c41-0d8c-4f96-9d59-add3ed509420', 'App\\Notifications\\carierEmployeeRequest', 'App\\Admin', 3, '{\"data\":\"You Have New Carier Employee Request\",\"link\":\"admin.carierEmployeesRequests\"}', NULL, '2019-12-14 08:36:08', '2019-12-14 08:36:08'),
('2641d90f-b774-4300-8158-d8e0bd3062e6', 'App\\Notifications\\ContactUsMessage', 'App\\Admin', 4, '{\"data\":\"You Have New Contact Message\",\"link\":\"admin.contactMessage\"}', NULL, '2019-12-31 08:37:17', '2019-12-31 08:37:17'),
('26b9fc9f-f022-4080-a4b3-47a517c70ce2', 'App\\Notifications\\CarierCompanyRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Carier Company Request\",\"link\":\"admin.carierCompanyRequests\"}', NULL, '2020-01-01 06:58:59', '2020-01-01 06:58:59'),
('2b2b9a87-2f4a-49d0-95a8-9e419b4ec2de', 'App\\Notifications\\carierEmployeeRequest', 'App\\Admin', 3, '{\"data\":\"You Have New Carier Employee Request\",\"link\":\"admin.carierEmployeesRequests\"}', NULL, '2019-12-07 06:27:37', '2019-12-07 06:27:37'),
('2c566503-c9ec-48a8-99b9-36b9e1eb4749', 'App\\Notifications\\carierEmployeeRequest', 'App\\Admin', 3, '{\"data\":\"You Have New Carier Employee Request\",\"link\":\"admin.carierEmployeesRequests\"}', NULL, '2019-12-12 11:23:32', '2019-12-12 11:23:32'),
('2e73f771-e937-49b6-aaec-f0fff95e8436', 'App\\Notifications\\CarierCompanyRequest', 'App\\Admin', 3, '{\"data\":\"You Have New Carier Company Request\",\"link\":\"admin.carierCompanyRequests\"}', NULL, '2019-12-04 10:32:44', '2019-12-04 10:32:44'),
('326df18e-6d06-435a-93be-0925d1ca9b86', 'App\\Notifications\\mediaEmployeeRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Media Employee Request\",\"link\":\"admin.mediaEmployeesRequests\"}', NULL, '2020-01-29 12:17:33', '2020-01-29 12:17:33'),
('46459a87-a819-46ec-8ddf-a137c36588b4', 'App\\Notifications\\MediaCompanyRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Media Company Request\",\"link\":\"admin.mediaCompanyRequests\"}', NULL, '2020-01-29 12:05:40', '2020-01-29 12:05:40'),
('54bb2f50-e08c-49dd-a9d7-08027fcd2355', 'App\\Notifications\\StudyCompanyRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Study Company Request\",\"link\":\"admin.studyCompanyRequests\"}', NULL, '2020-01-29 12:07:06', '2020-01-29 12:07:06'),
('55288d32-095d-4449-9c9c-a01ed87b3ddd', 'App\\Notifications\\mediaEmployeeRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Media Employee Request\",\"link\":\"admin.mediaEmployeesRequests\"}', NULL, '2020-01-04 13:37:28', '2020-01-04 13:37:28'),
('55f95058-ae7d-41bf-92db-cfa4be6de53f', 'App\\Notifications\\mediaEmployeeRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Media Employee Request\",\"link\":\"admin.mediaEmployeesRequests\"}', NULL, '2020-01-27 13:08:31', '2020-01-27 13:08:31'),
('5efb470b-173a-4c67-bca7-89b5a959284b', 'App\\Notifications\\ContactUsMessage', 'App\\Admin', 4, '{\"data\":\"You Have New Contact Message\",\"link\":\"admin.contactMessage\"}', NULL, '2019-12-30 16:30:00', '2019-12-30 16:30:00'),
('61ff293c-d27e-40ce-b8b8-0697d1720564', 'App\\Notifications\\mediaEmployeeRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Media Employee Request\",\"link\":\"admin.mediaEmployeesRequests\"}', NULL, '2019-12-31 08:30:22', '2019-12-31 08:30:22'),
('6ba8eb12-f500-4cc4-b527-21a699518516', 'App\\Notifications\\mediaEmployeeRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Media Employee Request\",\"link\":\"admin.mediaEmployeesRequests\"}', NULL, '2020-01-27 13:08:31', '2020-01-27 13:08:31'),
('74520bdb-b4a4-45fc-894a-4ae87c2acdac', 'App\\Notifications\\StudyEmployeeRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Study Employee Request\",\"link\":\"admin.studyEmployeesRequests\"}', NULL, '2020-01-29 12:21:03', '2020-01-29 12:21:03'),
('754a731d-1f5f-44a4-8076-745775fd106a', 'App\\Notifications\\mediaEmployeeRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Media Employee Request\",\"link\":\"admin.mediaEmployeesRequests\"}', NULL, '2020-01-04 13:37:28', '2020-01-04 13:37:28'),
('8acacceb-c35e-4d11-9857-4b1d223f61fc', 'App\\Notifications\\MediaCompanyRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Media Company Request\",\"link\":\"admin.mediaCompanyRequests\"}', NULL, '2019-12-31 08:39:29', '2019-12-31 08:39:29'),
('8c5b5e6f-c047-4de7-9e9d-535c8f5ee5fb', 'App\\Notifications\\carierEmployeeRequest', 'App\\Admin', 3, '{\"data\":\"You Have New Carier Employee Request\",\"link\":\"admin.carierEmployeesRequests\"}', NULL, '2019-12-07 06:30:18', '2019-12-07 06:30:18'),
('a2c6412b-1963-4af8-9040-172f6f0f8f0a', 'App\\Notifications\\carierEmployeeRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Carier Employee Request\",\"link\":\"admin.carierEmployeesRequests\"}', NULL, '2020-02-08 15:08:23', '2020-02-08 15:08:23'),
('b1fb39f1-aaf0-4548-a3c9-ae0a1fe08731', 'App\\Notifications\\CarierCompanyRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Carier Company Request\",\"link\":\"admin.carierCompanyRequests\"}', NULL, '2020-01-04 13:19:34', '2020-01-04 13:19:34'),
('b33c290d-34c4-4131-b769-d85250af36d3', 'App\\Notifications\\mediaEmployeeRequest', 'App\\Admin', 3, '{\"data\":\"You Have New Media Employee Request\",\"link\":\"admin.mediaEmployeesRequests\"}', NULL, '2019-12-11 06:05:28', '2019-12-11 06:05:28'),
('b5c75fdf-6407-41cd-82ac-068dc72501bb', 'App\\Notifications\\StudyCompanyRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Study Company Request\",\"link\":\"admin.studyCompanyRequests\"}', NULL, '2020-01-29 12:07:06', '2020-01-29 12:07:06'),
('b8f252cd-9c00-4110-b765-c9a1c811bd74', 'App\\Notifications\\CarierCompanyRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Carier Company Request\",\"link\":\"admin.carierCompanyRequests\"}', NULL, '2020-01-01 06:58:59', '2020-01-01 06:58:59'),
('bd1230da-7ac5-458d-9a5d-b17b35414334', 'App\\Notifications\\CarierCompanyRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Carier Company Request\",\"link\":\"admin.carierCompanyRequests\"}', NULL, '2020-01-04 13:19:34', '2020-01-04 13:19:34'),
('be53c7c8-7643-4470-a948-90d614b15265', 'App\\Notifications\\carierEmployeeRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Carier Employee Request\",\"link\":\"admin.carierEmployeesRequests\"}', NULL, '2020-01-27 13:02:51', '2020-01-27 13:02:51'),
('c3798381-2647-438a-8aa7-317a0b2d67f1', 'App\\Notifications\\StudyEmployeeRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Study Employee Request\",\"link\":\"admin.studyEmployeesRequests\"}', NULL, '2020-01-27 13:50:33', '2020-01-27 13:50:33'),
('cdd9f0d9-1d53-4431-8e09-d8d4e0240a87', 'App\\Notifications\\carierEmployeeRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Carier Employee Request\",\"link\":\"admin.carierEmployeesRequests\"}', NULL, '2020-01-28 07:07:31', '2020-01-28 07:07:31'),
('cfc3cd33-06ca-4c98-adbc-36e61ee72719', 'App\\Notifications\\ContactUsMessage', 'App\\Admin', 1, '{\"data\":\"You Have New Contact Message\",\"link\":\"admin.contactMessage\"}', NULL, '2019-12-31 08:37:17', '2019-12-31 08:37:17'),
('d34ae994-2093-4b89-97f5-aeb8b51686d3', 'App\\Notifications\\carierEmployeeRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Carier Employee Request\",\"link\":\"admin.carierEmployeesRequests\"}', NULL, '2019-12-31 08:15:44', '2019-12-31 08:15:44'),
('d965c805-17cb-4c90-819a-8deff33d7474', 'App\\Notifications\\StudyCompanyRequest', 'App\\Admin', 3, '{\"data\":\"You Have New Study Company Request\",\"link\":\"admin.studyCompanyRequests\"}', NULL, '2019-12-14 07:20:04', '2019-12-14 07:20:04'),
('db80759c-0133-442f-b4d9-37733b1715da', 'App\\Notifications\\CarierCompanyRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Carier Company Request\",\"link\":\"admin.carierCompanyRequests\"}', NULL, '2020-01-29 12:03:08', '2020-01-29 12:03:08'),
('e4bc583d-42e5-4e60-a83d-fd30c148a809', 'App\\Notifications\\carierEmployeeRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Carier Employee Request\",\"link\":\"admin.carierEmployeesRequests\"}', NULL, '2020-01-28 07:07:31', '2020-01-28 07:07:31'),
('e73976aa-18ea-4bfc-be51-c07110fd78b4', 'App\\Notifications\\MediaCompanyRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Media Company Request\",\"link\":\"admin.mediaCompanyRequests\"}', NULL, '2019-12-31 08:39:29', '2019-12-31 08:39:29'),
('eec24336-754a-4386-a221-93a580126899', 'App\\Notifications\\mediaEmployeeRequest', 'App\\Admin', 4, '{\"data\":\"You Have New Media Employee Request\",\"link\":\"admin.mediaEmployeesRequests\"}', NULL, '2019-12-31 08:30:22', '2019-12-31 08:30:22'),
('f28bde25-edf2-4ca9-a302-a4d7db856e90', 'App\\Notifications\\mediaEmployeeRequest', 'App\\Admin', 3, '{\"data\":\"You Have New Media Employee Request\",\"link\":\"admin.mediaEmployeesRequests\"}', NULL, '2019-12-10 13:39:54', '2019-12-10 13:39:54'),
('f2a1e7da-3aea-452c-8f20-c61c6dd5882c', 'App\\Notifications\\mediaEmployeeRequest', 'App\\Admin', 1, '{\"data\":\"You Have New Media Employee Request\",\"link\":\"admin.mediaEmployeesRequests\"}', NULL, '2020-01-29 12:17:33', '2020-01-29 12:17:33'),
('f3431e69-390c-4bac-8adf-c847add5fa88', 'App\\Notifications\\mediaEmployeeRequest', 'App\\Admin', 3, '{\"data\":\"You Have New Media Employee Request\",\"link\":\"admin.mediaEmployeesRequests\"}', NULL, '2019-12-10 12:03:09', '2019-12-10 12:03:09'),
('f48303bd-303c-44ef-8cc5-efbb90557275', 'App\\Notifications\\StudyEmployeeRequest', 'App\\Admin', 3, '{\"data\":\"You Have New Study Employee Request\",\"link\":\"admin.studyEmployeesRequests\"}', NULL, '2019-12-14 08:44:34', '2019-12-14 08:44:34');

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
-- Table structure for table `select_images`
--

CREATE TABLE `select_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selectType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `select_images`
--

INSERT INTO `select_images` (`id`, `image`, `type`, `selectType`, `created_at`, `updated_at`) VALUES
(1, 'location_1580115000.png', 'Company', 'ICarier', '2020-01-27 08:45:08', '2020-01-27 06:50:00'),
(2, 'suitcase_1580115014.png', 'Employee', 'ICarier', '2020-01-27 08:45:08', '2020-01-27 06:50:14'),
(3, 'comptetion_1580115126.png', 'Company', 'IMedia', '2020-01-27 08:47:41', '2020-01-27 06:52:06'),
(4, 'Talentd_1580115135.png', 'Employee', 'IMedia', '2020-01-27 08:47:41', '2020-01-27 06:52:15'),
(5, 'comptetion_1580116718.png', 'Company', 'IStudy', '2020-01-27 08:46:41', '2020-01-27 09:18:38'),
(6, 'Talentd_1580115164.png', 'Employee', 'IStudy', '2020-01-27 08:46:41', '2020-01-27 06:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `title_ar`, `description`, `description_ar`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Football', 'كرة القدم', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution</p>', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>', '4_1580061123.png', '2019-12-29 11:46:01', '2019-12-29 12:23:11'),
(3, 'How To Use WebSite', 'كيفية إستخدام الموقع', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>', '8_1580061111.png', '2019-12-29 12:08:13', '2019-12-29 12:23:00'),
(4, 'Title', 'عنوان', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>', '11_1580061099.png', '2019-12-29 12:09:07', '2019-12-29 12:22:37'),
(5, 'Carier Importince', 'أهميه الكارير', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>', '9_1580061088.png', '2019-12-29 12:13:31', '2019-12-29 12:22:01'),
(6, 'Cuntact Us', 'إتصل بنا', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>', '3_1580061078.png', '2019-12-29 12:23:31', '2019-12-29 12:23:31'),
(7, 'Media', 'ميديا', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>', '10_1580061066.png', '2019-12-30 07:10:45', '2019-12-30 07:10:45'),
(8, 'Study', 'دراسة', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>', '<p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوري</p>', '1_1580061041.png', '2019-12-30 16:27:22', '2019-12-30 16:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dribbble` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `address`, `website`, `facebook`, `twitter`, `linkedin`, `dribbble`, `created_at`, `updated_at`) VALUES
(1, 'Ceo@fekra-web.com', '02505221155', 'Mokttam', 'https://www.fekra-web.com', 'https://www.fekra-web.com', 'https://www.fekra-web.com', 'https://www.fekra-web.com', NULL, NULL, '2020-01-04 12:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `title_ar`, `description`, `description_ar`, `image`, `type`, `created_at`, `updated_at`) VALUES
(1, 'iCarier', 'iCarier', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>', '<p>وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.</p>', '1_1575212578.jpg', 'ICarier', '2019-12-01 13:02:58', '2020-01-28 08:11:43'),
(2, 'iStudy', 'iStudy', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<p>وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.</p>', '1_1575217352.jpg', 'IStudy', '2019-12-01 14:22:32', '2020-01-28 08:11:23'),
(3, 'iMedia', 'iMedia', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>', '<p>وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.</p>', '1_1575219929.jpg', 'IMedia', '2019-12-01 14:23:15', '2020-01-28 08:10:58'),
(4, 'About', NULL, NULL, NULL, '1_1577635102.jpg', 'About', '2019-12-29 14:45:18', '2019-12-30 15:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `static_names`
--

CREATE TABLE `static_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `icarier` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icarier_ar` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `istudy` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `istudy_ar` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imedia` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imedia_ar` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ilife` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ilife_ar` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_more` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_more_ar` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_ar` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_us` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_us_ar` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_ar` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_ar` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_ar` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_in_touch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_in_touch_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `re_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `re_password_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `register` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_now` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_now_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_now` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_now_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_account_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_experience_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `military_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `military_service_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_time_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `part_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `part_time_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freelance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freelance_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_work_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_work_date_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `more_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `more_info_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `write_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `write_email_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static_names`
--

INSERT INTO `static_names` (`id`, `icarier`, `icarier_ar`, `istudy`, `istudy_ar`, `imedia`, `imedia_ar`, `ilife`, `ilife_ar`, `read_more`, `read_more_ar`, `phone`, `phone_ar`, `contact_us`, `contact_us_ar`, `gender`, `gender_ar`, `address`, `address_ar`, `image`, `image_ar`, `video`, `video_ar`, `get_in_touch`, `get_in_touch_ar`, `submit`, `submit_ar`, `email`, `email_ar`, `password`, `password_ar`, `re_password`, `re_password_ar`, `login`, `login_ar`, `register`, `register_ar`, `login_now`, `login_now_ar`, `register_now`, `register_now_ar`, `create_account`, `create_account_ar`, `birth_date`, `birth_date_ar`, `work_experience`, `work_experience_ar`, `military_service`, `military_service_ar`, `contact`, `contact_ar`, `skills`, `skills_ar`, `name`, `name_ar`, `job`, `job_ar`, `location`, `location_ar`, `full_time`, `full_time_ar`, `part_time`, `part_time_ar`, `freelance`, `freelance_ar`, `date`, `date_ar`, `company_work_date`, `company_work_date_ar`, `more_info`, `more_info_ar`, `write_email`, `write_email_ar`, `created_at`, `updated_at`) VALUES
(1, 'iCareer', 'iCareer', 'iStudy', 'iStudy', 'iMedia', 'iMedia', 'iLife', 'iLife', 'Read More', 'إفرأ المزيد', 'Phone', 'رقم التلبفون', 'Contatc Us', 'إتصل بنا', 'Gender', 'الجنس', 'Address', 'العنوان', 'Image', 'الصورة', 'Youtube Video', 'فديو', 'Get In Touch', 'تواصل معنا', 'Send', 'أرسل', 'Email', 'الآيميل', 'Password', 'كلمة المرور', 'Re_password', 'اعادة كلمة المرور', 'Login', 'تسجيل الدخول', 'Register', 'تسجيل حساب', 'Login Now', 'سجل دخول الآن', 'Register Now', 'سجل الآن', 'Create Account', 'تسجيل حساب', 'Birth Day', 'تاريخ الميلاد', 'Work Experience', 'خبرات العمل', 'Military Service', 'الخدمة العسكريه', 'Contact', 'التواصل', 'Skills', 'المهارات', 'Name', 'الاسم', 'Job', 'الوظيفة', 'Location', 'العنوان', 'Full Time', 'دوام كامل', 'Part Time', 'دوام جزئى', 'Freelance', 'فريلانس', 'Date', 'تاريخ النشر', 'Date', 'تاريخ العمل بالشركه', 'For More Info Call', 'لمزيد من المعلومات إتصل ب', 'or Write an Email', 'أو أرسل يميل على', '2019-12-08 08:21:54', '2020-01-28 07:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `study_companies`
--

CREATE TABLE `study_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `years_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_companies`
--

INSERT INTO `study_companies` (`id`, `user_id`, `name`, `phone`, `address`, `email`, `job_title`, `exp_level`, `gender`, `education`, `job_time`, `years_experience`, `job_description`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(2, NULL, 'company Study', '123213213213', 'Mansoura-21 Mansoura street', 'fekra@studyCompany.com', 'Web Designer', 'Juniro', '2', 'Educational Qualification', '1', '2', '<p>description</p>', '02_1576314879.jpg', '1', 'company-study-5e303156b529b', '2019-12-14 07:00:17', '2020-01-28 13:04:22'),
(3, 20, 'Fekra Study', '01010101010', 'Mansoura-21 Mansoura street', 'fekra@study.com', 'Teacher', 'level', '1', 'Educational Qualification', '1', '2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '11_1580216491.jpg', '1', 'fekra-study-5e3030ab5c555', '2019-12-14 07:20:03', '2020-01-28 13:01:31'),
(4, 35, 'Omar Ashraf', '123213213213', 'Mansoura-21 Mansoura street', 'company@study.com', 'Web Designer', 'Juniro', '1', 'Educational Qualification', '1', '2 Yers', 'nnnnnnnnnnnnnnnnnnnnn', '1569414043_1580299626.jpg', '0', 'omar-ashraf-5e31756a909fa', '2020-01-29 12:07:06', '2020-01-29 12:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `study_employees`
--

CREATE TABLE `study_employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `years_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `military_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forth_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_employees`
--

INSERT INTO `study_employees` (`id`, `user_id`, `name`, `slug`, `email`, `phone`, `gender`, `address`, `birth_date`, `education`, `job_title`, `years_experience`, `personal_info`, `military_service`, `image`, `status`, `first_skill`, `second_skill`, `third_skill`, `forth_skill`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Omar Ashraf', 'omar-ashraf-5df4c24f55b09', 'employee2@study.com', '123213213213', '1', 'Mansoura-21 Mansoura street', '2019-11-24', 'Educational Qualification', 'Teacher', '2', '<p>description</p>', '1', '08_1576321615.jpg', '1', '20', '90', '90', '40', '2019-12-14 09:06:55', '2019-12-14 09:06:55'),
(3, 31, 'Omar Ashraf Mohamed', 'omar-ashraf-mohamed-5e317342d306e', 'omar@omarstydyEmployee.com', '123213213213', '1', 'Mansoura-21 Mansoura street', '2020-01-07', 'Educational Qualification', 'Web Designer', '2', '<p>aaaaa</p>', '1', '05_1580299074.jpg', '1', '80', '80', '100', '80', '2020-01-27 13:50:33', '2020-01-29 11:59:51'),
(4, NULL, 'Fekra House', 'fekra-house-5e3173fd1aa26', 'om@study.com', '123213213213', '2', 'Mansoura-21 Mansoura street', '2020-01-15', 'education', 'Web Designer', '2', '<p>xxxxxx</p>', '2', 'girl_short_1580299261.png', '1', '10', '10', '10', '10', '2020-01-29 12:01:01', '2020-01-29 12:01:01'),
(5, 38, 'Fekra House', 'fekra-house-5e3178afe32f0', 'employee@studyemployee.com', '01093174220', '2', 'Mansoura-21 Mansoura street', '2020-01-02', 'Educational Qualification', 'Web Designer', '2 Yers', 'ssssssssssss', '1', 'cover_1580300463.jpg', '0', '40', '60', '10', '10', '2020-01-29 12:21:03', '2020-01-29 12:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `study_static_names`
--

CREATE TABLE `study_static_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_employee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_employee_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_employee_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_employee_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_company_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_company_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_company_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_level_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_years` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_years_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_skill_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_skill_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_skill_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forth_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forth_skill_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificates_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_info_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `talk_about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `talk_about_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_static_names`
--

INSERT INTO `study_static_names` (`id`, `company_name`, `company_name_ar`, `job_title`, `job_title_ar`, `select_employee`, `select_employee_ar`, `select_employee_slug`, `select_employee_slug_ar`, `select_company`, `select_company_ar`, `select_company_slug`, `select_company_slug_ar`, `experience_level`, `experience_level_ar`, `education`, `education_ar`, `experience_years`, `experience_years_ar`, `job_description`, `job_description_ar`, `first_skill`, `first_skill_ar`, `second_skill`, `second_skill_ar`, `third_skill`, `third_skill_ar`, `forth_skill`, `forth_skill_ar`, `certificates`, `certificates_ar`, `personal_info`, `personal_info_ar`, `talk_about`, `talk_about_ar`, `qualification`, `qualification_ar`, `job_type`, `job_type_ar`, `created_at`, `updated_at`) VALUES
(1, 'Company Name', 'أسم الشركة', 'Job Title', 'عنوان الوظيفة', 'Teachers', 'مدرسين', 'Looking For Schools', 'يبحث عن شركه', 'Companines', 'شركه', 'Looking for Teachers', 'تبحث عن مدرس', 'Experience Level', 'الخبرة', 'Educational Qualification', 'الموهلات الدراسية', 'Years of experience', 'سنوات الخبرة', 'Job Required', 'الوظيفة المطلوبة', 'First Study', 'المهارة الاولى', 'Second Study', 'المهارة الثانية', 'Third Study', 'المهارة الثالثة', 'Forth Study', 'المهارة الرابعة', 'Certificates', 'الشهادات', 'Personal Information', 'المعلومات الشخصية', 'Talk About your self', 'تكلم عن نفسك', 'Qualifications', 'المؤهلات', 'Type Of The Job', 'نوع الوظيفة', NULL, '2019-12-14 11:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Site Company', 'omar@omar.com', '$2y$10$80943M3pQ5udoBQkyuhW0OLKX8JtWt2q/669YXwbMrK68c8in2eRi', 2, '1kgmbxY6jwUkQ1WZrzlxeZMRGFWgask7ym5UCnj0OTluJ5UKzAvBFullXXX8', '2019-12-03 12:34:34', '2019-12-03 12:34:34'),
(3, 'Hello World', 'as@as.com', '$2y$10$0malB/zr8HhdvJPAq0CLrOBXMwTWTzjGWvBe00q1kYQ6a.DhvZ6Fm', 1, 'xEOyQVB6hhs6gBSUpu2cHcSsHFkxMmCHAvAbmbtxkoAQykyMxUuzGjCw7tLn', '2019-12-04 08:28:41', '2019-12-04 08:28:41'),
(4, 'New Company', 'd@d.com', '$2y$10$YppOFzJZhhY7.QefuFnfO.WC5zyhGjhb9hlj8urWBtBGG0s0r1qYu', 1, 'tUObMgIlVb2UyFuShpq4Asyr4mUw7z7t9Slrd7kSbZNTkFM0jY0V5WuWg4hj', '2019-12-04 10:32:43', '2019-12-04 10:32:43'),
(5, 'Tourism Trips', 'ca@ca.com', '$2y$10$oUcpuuGKvmF6i5j8Y4DW9e1dp1wGjLUqaplX.Vz4xjxSJwGYEvRT6', 2, NULL, '2019-12-05 13:58:04', '2019-12-05 13:58:04'),
(8, 'osama', 'na@na.com', '$2y$10$cKtk9otCSBGTFD823NU3wOn01Ms7cy1P3F6xewBGOQSz2qsAlH4tC', 2, NULL, '2019-12-07 06:27:37', '2019-12-07 06:27:37'),
(9, 'Omar Ashraf Mohamed', 'omar@siteEmployeeCarier.com', '$2y$10$pqOTYmX411VZ/3SWINcsbuimpAJCV7vjQRnGgTOX0RLa9lFOaOSMW', 2, 'HKnX2KSdZbnOY3cHim08dF4iHNdZ6Ze42xDq39kAjGVqe7C3ZUaVdGZ7Czns', '2019-12-07 06:30:18', '2020-01-29 11:43:37'),
(17, 'Omar', 'employeee@carier.com', '$2y$10$IfIbJ2fzNuuzWcZwdNZb3ull7C5kU7ssrLKx7nFXJ2IpG012xMtUm', 2, 'SW39jcsUqdkbRNWhN3sro5ML4VX9tL3JPZF2xxc3fSKuAOaEwK6OSYypqkSH', '2019-12-12 11:23:30', '2019-12-12 11:23:30'),
(18, 'Omar m Ashraf', 'omar@omarMediaEmployee.com', '$2y$10$c.9DHxlPXI6TcbLLQgfjJeahj54mttUuKyaR5wENYmuxsSURpV8qe', 4, 'njPN7TvHc0ZcYkEiBPgGbhEA7gIDKFqgdr9XhqmnhUdvEKIESGdTXVrbhvXy', '2019-12-12 11:43:24', '2020-01-29 11:48:25'),
(20, 'Fekra Study', 'fekra@study.com', '$2y$10$n9rIXhmEt4LayfEPZLPfs.rDvN94FiRo4Ge1Gz78b13dADjL2z1lC', 5, 'j4quSGea0WeaI82YnBbBThw0gPCqZSnJ9es8LGqbcCBqhj6l47oHGVm3Z1Il', '2019-12-14 07:20:03', '2020-01-28 13:01:54'),
(21, 'Study Employee', 'employee@study.com', '$2y$10$HnmoMh4UiEBw0iz0vghlturiPDoyLHvrwFuuzi6o5vF0t.agqQIIG', 2, 'wuc86Wn9ySMXN4W3dBEPQvw5vAoNTLV3ifmYRfHNqyVtjg4Ljv4uyhGcXdxg', '2019-12-14 08:36:08', '2019-12-14 08:36:08'),
(22, 'Fekra House', 'carrierCompany@site.com', '$2y$10$5ytaYqttTXesHzEvx5xYp.p5IxOW5P4SboysFx/pF.e6Im.LZDDCa', 1, '0XHhGdDKD1CyvNRuvCPh5DuIvJLeOHr2PwAN3OAtn7Lxxlr4FlwN5rjofcYN', '2019-12-30 15:48:27', '2020-01-28 12:41:57'),
(23, 'Carier Site Employee', 'carierEmployee@site.com', '$2y$10$kNkYS0909NlbWxXeT9IBpus5PEBs9tzzEx9T33.6VeP0ccmniNm/S', 2, 'cQJnDVJMO0zlBWSaFdKIplu7hCcbF2BB0Dm3uztBAWa5hVGyLlDWXrKjUxT0', '2019-12-31 08:15:44', '2019-12-31 08:15:44'),
(24, 'Media Site Employee', 'mediaEmployee@site.com', '$2y$10$SnSGaV94zh7M.cWrRjclYeZ8jSxeooodKbRHmIkZUKgt15mU0S4sW', 4, 'Ig2gc6nfTVVL1uUs5mGXwEfgvaGN6PbCKcI1h2vcy1dwnSDNgbD5tCKFBwHD', '2019-12-31 08:30:21', '2019-12-31 08:30:21'),
(25, 'Fekra Media', 'fekra@mediasite.com', '$2y$10$W7Nh3As9oPLxg2FkrQHYL.E10Vj1BH6njKJPk7ZzejH/ttUX3e3I2', 3, 'W8ozDxz6XkZH4ykYmXeLtlIHzvHdw4kyylubge1mke4bu3Vk2AUhdzR6jLdz', '2019-12-31 08:39:29', '2020-01-28 12:57:30'),
(26, 'fekra', 'alfa_graphic@yahoo.com', '$2y$10$wtEUeQiDmMWujhx3o22Qg.WO1y4fQgwho4juGFmq30ezQ0o.AauA2', 1, 'eR3wtGo22kNHety7qXneuAf3Br9xN82R1MCtrlP99RBEckrpuKLLT9OixOxm', '2020-01-01 06:58:59', '2020-01-01 06:58:59'),
(27, 'fekracompany', 'gemy@yahoo.com', '$2y$10$hks3ZQwts75XAUVENmmfce5vmAx2geIfx8EOOLDWrchGrjwUme4Fy', 1, '45QSQg02yz5RLXetfYPnreJktLGQfdQmU0sD2Um8BFM6QBwLwkgcZCp7qkSW', '2020-01-04 13:19:34', '2020-01-04 13:19:34'),
(28, 'Bandar Sabry', 'bandarini@gmail.com', '$2y$10$UmpZKTrg7wPSDXPtMZhd4Ox1swJrklhv8R3F8dU1VEM/PomwiGe9y', 4, 'IX5k8Zhyms9uHMQ4y6MC2iefyrRgtc32gJGMGueEWgkdehrGvZJwWPXjoXPo', '2020-01-04 13:37:28', '2020-01-04 13:37:28'),
(29, 'Omar Ashraf', 'to@ca.com', '$2y$10$FCPInyHhSl8M5VZ.S0tV7.XuSe8JviAroO7DQJpP60nqZ1D2T4Nta', 2, 'TDmzcMRWrCN5Nicp4bp3kJygfXB57tzdb3dDjnCatjQkKtmCeoi9Cfm75sti', '2020-01-27 13:02:51', '2020-01-27 13:02:51'),
(30, 'Omar Ashraf', 'from@me.com', '$2y$10$UzsNwnwyIxK2wHAddN0UiOTkzWxsVEMJTYM1HvsKXKwqQrdiRdP1G', 4, 'ABZHLZocI3qcg6BzIP6Ar32Un4r14dcvVZBn6QkRySjeSPzmf1lbk5fLcHC7', '2020-01-27 13:08:31', '2020-01-27 13:08:31'),
(31, 'Omar Ashraf Mohamed', 'omar@omarstydyEmployee.com', '$2y$10$TaqqPYi0s8D1A/p1Ehutr.pf1qDPIStBp/JY2wzlunenOLHtF7ZNO', 6, 'GKo5vmaB0G0ouiOiiMoQtXO94gDHQDzg8cen2uPraUQbNyBaU4mqLE06VFGJ', '2020-01-27 13:50:33', '2020-01-29 11:57:54'),
(32, 'ahmed gamal', 'fekra@yahoo.com', '$2y$10$3q5HUvs9JlMumZ3FZ9ca1OlQUZvkiNmETcIaqfNH4IKJww1Yqdu8W', 2, NULL, '2020-01-28 07:07:31', '2020-01-28 07:07:31'),
(33, 'Fekra House', 'carier@companyCarier.com', '$2y$10$GuOsEU./Eyj/HAtER6NuFOSPtiN7/EXGiNGT9Z0eNMOD2vFL1cPP6', 1, 'Nl5sS0xXoC3xRGPzb1Q4UNpJP43fa5umn2YBAiSDKCkrjQ3TStIvL6JYxpgi', '2020-01-29 12:03:08', '2020-01-29 12:03:08'),
(34, 'Fekra House', 'media@companymedia.com', '$2y$10$8v52odfoe9cAdayKNN8TqObVCsTx1P2s/aQfDVnYscfy95pLX7dCK', 3, 'gLUh06NSYbXVRsC9KMR6qR0FSmwRQKdk8VrC4qLs7KAkc6UEAYsVCp53LZij', '2020-01-29 12:05:40', '2020-01-29 12:05:40'),
(35, 'Omar Ashraf', 'company@study.com', '$2y$10$KOJk5SjwpmBhyOKmKyp/cub2JCrk8c7tS4uDU3zPIeGF7FDMJhiPG', 5, 'xr5kXsQ1VpWZ2jzNqE7FrbLmmrvIlNUza549QsTwTMJWeMcIRBFrFa52nmXP', '2020-01-29 12:07:06', '2020-01-29 12:07:06'),
(36, 'Fekra House', 'employee@carier.com', '$2y$10$Oeid019O5XbGFMS.lFrWOuNzfGADS6awMTHMGX3pXvKhAE0fIQCuW', 2, 'BAcRkcq1D3mUj7F0PkyXt5hlPBtoiVGAzyKtp9rAzUcMNKcv0jWIIEukyr1R', '2020-01-29 12:14:31', '2020-01-29 12:14:31'),
(37, 'Omar Ashraf', 'employee@media.com', '$2y$10$CrsLhkXS.k8bfbGTmqCqiOt8AY0NwDiZuf7y0juHcYaxnTkBQ9RKK', 4, 'c3edMOVmjMwneepwbpOxUuj86DDcjFThPo3UUlsSEdDZ97IxqkJsQsD8sOgi', '2020-01-29 12:17:33', '2020-01-29 12:17:33'),
(38, 'Fekra House', 'employee@studyemployee.com', '$2y$10$fIQ4Z66RIfx9TG76P6s/m.6.mCOlD.xDNz6HDCNiA6tlxCJl/iJ9.', 6, '3yis12GxsegdS8B9kL2YMuLDXMwTDiZbOuhXyDCPKrb09Gy4rlQl4xE7YQZt', '2020-01-29 12:21:03', '2020-01-29 12:21:03'),
(39, 'ahmed', 'alfa_graphic1987@yahoo.com', '$2y$10$x6qfPFVfmMR8QoQJxh1rd.9o.V5oDCUhmIXPxVy1Qq7lUc.4B.zo.', 2, NULL, '2020-02-08 15:08:23', '2020-02-08 15:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `work_experiences`
--

CREATE TABLE `work_experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_experiences`
--

INSERT INTO `work_experiences` (`id`, `name`, `from_date`, `to_date`, `type`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Study Company 2', '2020-01-06', '2020-02-06', 3, 3, '2020-01-27 14:01:34', '2020-01-27 14:01:34'),
(2, 'fekra advertising', '2020-01-06', '2020-01-21', 1, 25, '2020-01-28 07:07:31', '2020-01-28 07:07:31'),
(4, 'Fekra House Media', '2019-12-30', '2020-02-08', 2, 5, '2020-01-29 11:48:49', '2020-01-29 11:48:49'),
(6, 'fekra', '2020-01-04', '2020-01-18', 1, 26, '2020-01-29 12:14:31', '2020-01-29 12:14:31'),
(7, 'fekra-web', '2020-01-16', '2020-02-08', 1, 26, '2020-01-29 12:14:31', '2020-01-29 12:14:31'),
(8, 'fekra-house', '2020-01-01', '2020-02-08', 1, 26, '2020-01-29 12:14:31', '2020-01-29 12:14:31'),
(9, '1', '2020-01-17', '2020-02-08', 2, 11, '2020-01-29 12:17:33', '2020-01-29 12:17:33'),
(10, 'fekra-web', '2020-01-18', '2020-02-08', 2, 11, '2020-01-29 12:17:33', '2020-01-29 12:17:33'),
(11, 'fekra', '2020-01-16', '2020-02-08', 3, 5, '2020-01-29 12:21:03', '2020-01-29 12:21:03'),
(12, 'fekra', '2020-02-03', '2020-02-04', 1, 27, '2020-02-08 15:08:23', '2020-02-08 15:08:23');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`(191)),
  ADD KEY `admin_password_resets_token_index` (`token`(191));

--
-- Indexes for table `carier_employees`
--
ALTER TABLE `carier_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carier_static_names`
--
ALTER TABLE `carier_static_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_companies`
--
ALTER TABLE `job_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_companies`
--
ALTER TABLE `media_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_employees`
--
ALTER TABLE `media_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_static_names`
--
ALTER TABLE `media_static_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `militray_services`
--
ALTER TABLE `militray_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `select_images`
--
ALTER TABLE `select_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- Indexes for table `static_names`
--
ALTER TABLE `static_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_companies`
--
ALTER TABLE `study_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_employees`
--
ALTER TABLE `study_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_static_names`
--
ALTER TABLE `study_static_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_experiences`
--
ALTER TABLE `work_experiences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carier_employees`
--
ALTER TABLE `carier_employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `carier_static_names`
--
ALTER TABLE `carier_static_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_companies`
--
ALTER TABLE `job_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `media_companies`
--
ALTER TABLE `media_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media_employees`
--
ALTER TABLE `media_employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `media_static_names`
--
ALTER TABLE `media_static_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `militray_services`
--
ALTER TABLE `militray_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `select_images`
--
ALTER TABLE `select_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `static_names`
--
ALTER TABLE `static_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `study_companies`
--
ALTER TABLE `study_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `study_employees`
--
ALTER TABLE `study_employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `study_static_names`
--
ALTER TABLE `study_static_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `work_experiences`
--
ALTER TABLE `work_experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
