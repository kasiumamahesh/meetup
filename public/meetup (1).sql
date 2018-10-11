-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 08:11 PM
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
-- Database: `meetup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tab`
--

CREATE TABLE `admin_tab` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `mobileno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tab`
--

INSERT INTO `admin_tab` (`id`, `name`, `email`, `password`, `photo`, `location`, `mobileno`) VALUES
(1, 'gfdfdhgggf', 'admin@gmail.com', 'admin@gmail.com', 'profile/Q3j49qe194fnCQgBqRvSNt76TkMAmtUSgG2onTlO.png', '', '1234567774');

-- --------------------------------------------------------

--
-- Table structure for table `cat_tab`
--

CREATE TABLE `cat_tab` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `deleted_time` datetime DEFAULT NULL,
  `deleted_by` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment_reply_tab`
--

CREATE TABLE `comment_reply_tab` (
  `parent_comment_id` bigint(14) NOT NULL,
  `child_comment_id` bigint(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment_tab`
--

CREATE TABLE `comment_tab` (
  `id` bigint(10) NOT NULL,
  `comment` text NOT NULL,
  `event_id` int(10) NOT NULL,
  `commented_by` int(10) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) DEFAULT NULL,
  `deleted_by` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_photos_tab`
--

CREATE TABLE `event_photos_tab` (
  `event_id` int(9) NOT NULL,
  `photo_name` varchar(300) NOT NULL,
  `photo_id` bigint(12) NOT NULL,
  `upload_by` int(10) NOT NULL,
  `upload_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `deleted_by` int(10) DEFAULT NULL,
  `description` text,
  `deleted_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_tab`
--

CREATE TABLE `event_tab` (
  `id` int(10) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `no_tickets` int(11) NOT NULL,
  `ticket_price` float NOT NULL,
  `group_id` int(10) NOT NULL,
  `created_time` datetime NOT NULL,
  `location` varchar(300) NOT NULL,
  `event_about` text NOT NULL,
  `event_date` datetime NOT NULL,
  `time` time NOT NULL,
  `created_by` int(10) NOT NULL,
  `deleted_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_cat_tab`
--

CREATE TABLE `group_cat_tab` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_cat_tab`
--

INSERT INTO `group_cat_tab` (`id`, `group_id`, `cat_id`) VALUES
(5, 1, 2),
(6, 1, 6),
(11, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `group_review_tab`
--

CREATE TABLE `group_review_tab` (
  `id` int(10) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `group_id` int(10) NOT NULL,
  `created_by` int(10) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_by` int(10) DEFAULT NULL,
  `deleted_time` datetime DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_tab`
--

CREATE TABLE `group_tab` (
  `id` int(11) NOT NULL,
  `group_name` varchar(200) NOT NULL,
  `group_type` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `group_profile_photo` varchar(300) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) DEFAULT 'active',
  `deleted_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_tab`
--

INSERT INTO `group_tab` (`id`, `group_name`, `group_type`, `location`, `group_profile_photo`, `created_by`, `created_time`, `status`, `deleted_time`) VALUES
(2, 'gfdgdf', 'public', '', NULL, 1001, '2018-10-08 16:59:23', 'active', '2018-10-08 16:59:23'),
(3, 'ggg', '', '', NULL, 1001, '2018-10-08 17:24:21', 'active', '2018-10-08 17:24:21'),
(4, 'fgf', '', '', NULL, 1, '2018-10-08 17:30:22', 'active', '2018-10-08 17:30:22'),
(5, 'fddf', '', '', NULL, 1, '2018-10-08 17:32:45', 'active', '2018-10-08 17:32:45'),
(6, 'etrt', '', '', NULL, 1, '2018-10-08 17:45:17', 'active', '2018-10-08 17:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `location_tab`
--

CREATE TABLE `location_tab` (
  `id` int(10) NOT NULL,
  `location_name` varchar(200) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members_tab`
--

CREATE TABLE `members_tab` (
  `id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `is_admin` varchar(6) NOT NULL,
  `joined_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `left_date` datetime DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members_tab`
--

INSERT INTO `members_tab` (`id`, `group_id`, `user_id`, `is_admin`, `joined_date`, `left_date`, `status`) VALUES
(1, 1, 1, 'no', '2018-10-09 08:21:53', NULL, 'active'),
(2, 1, 2, 'no', '2018-10-09 08:23:35', NULL, 'active'),
(3, 1, 2, 'no', '2018-10-09 08:23:39', NULL, 'active'),
(4, 2, 1, 'no', '2018-10-09 11:09:57', NULL, 'active'),
(5, 2, 1, 'no', '2018-10-09 11:10:01', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments_tab`
--

CREATE TABLE `payments_tab` (
  `id` int(11) NOT NULL,
  `payment_by` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `amount` float NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments_tab`
--

INSERT INTO `payments_tab` (`id`, `payment_by`, `group_id`, `amount`, `date`) VALUES
(3, 1004, 3, 199, '2018-10-11 23:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fb_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `fb_id`, `google_id`) VALUES
(1004, 'kasie@gmail.com', 'kasi@gmail.com', NULL, '$2y$10$gGrK10kl.rVl02PyFrY1..ZicAOtnBrLS0IzZnc75biNxVAnU7vRW', NULL, '2018-10-08 04:44:28', '2018-10-08 04:44:28', '', ''),
(1005, 'kasie@gmail.com', 'kasis@gmail.com', NULL, '$2y$10$aSXRzyKgxVi38qIxuwXSouV/tgd2osm55wKMfEeWY5rQvRXCG17WG', NULL, '2018-10-08 04:45:53', '2018-10-08 04:45:53', '', ''),
(1006, 'kasiumamahesh', 'kasdifd@gmail.com', NULL, '$2y$10$QyHFkpClt/rYwgbAgyeQdOKJ7L5BpkAX2qV2rlPqAKITXCHh4mOeq', NULL, '2018-10-08 05:19:14', '2018-10-08 05:19:14', '', ''),
(1007, 'kasiumamahesh', 'kadkd@gmail.com', NULL, '$2y$10$bnijB7R0Hm96sZztUdZjU.OgBtddidJ54GuK9hnxY9bglE76uDA3u', NULL, '2018-10-08 05:20:57', '2018-10-08 05:20:57', '', ''),
(1008, 'kasiumamahesh', 'dkadkd@gmail.com', NULL, '$2y$10$rGPSATJ1nhR6nXc0GPOcVeU9aY6peA3ZfNrTa3TGluoP6Nis.mvB.', NULL, '2018-10-08 05:25:46', '2018-10-08 05:25:46', '', ''),
(1009, 'kasie@gmail.com', '1meashok.radha07@gmail.com', NULL, '$2y$10$Uq8lCevoHuEw8g9FkDUaAO.NRGY/wUtz4r1B.CUoBkmjNMcf1HCnO', NULL, '2018-10-08 06:02:16', '2018-10-08 06:02:16', '', ''),
(1010, 'kasiumamahesh', 'meashok.radfha07@gmail.com', NULL, '$2y$10$xAJfqpid55vb4Dff8Ug5RuNvRFWXLd5VYtYCgKFdrLRr2Q2dPv2ba', NULL, '2018-10-08 06:07:42', '2018-10-08 06:07:42', '', ''),
(1011, 'kdkdk', 'meashok.ddradha07@gmail.com', NULL, '$2y$10$t00nSAstrA4grkGfqhnf6u5F0897i.vnmVzNsPdzk1hbVV0GfJlS.', NULL, '2018-10-08 06:10:00', '2018-10-08 06:10:00', '', ''),
(1012, 'kasie@gmail.com', 'meashok.raddha07@gmail.com', NULL, '$2y$10$e0z1q3R2qzdh3nCj8Ai7/u.QIiHDN/vdbTrY9aHsw4S722kcTrOkq', NULL, '2018-10-08 06:12:01', '2018-10-08 06:12:01', '', ''),
(1013, 'kasiumamahesh', 'meashokd.radha07@gmail.com', NULL, '$2y$10$xwQR2sGUvZGpvVmsoVYUxepCpRp3PES9JrqnUvGLY10cE1pFmoja2', NULL, '2018-10-08 06:20:13', '2018-10-08 06:20:13', '', ''),
(1014, 'kasiumamahesh', 'meashokdcvb.radha07@gmail.com', NULL, '$2y$10$Jn.1/6jMWy3hbekiWLGa4esSZTuRx6CgaHiRt7PHUDSIUkR3ENkYi', NULL, '2018-10-08 06:20:56', '2018-10-08 06:20:56', '', ''),
(1015, 'kasie@gmail.com123', 'measchvok.radha07@gmail.com', NULL, '$2y$10$.QrEI.91.mTgPplMQjdV.eHKse/DEfYN2uz4bGpYoX4ccFONsyZia', NULL, '2018-10-08 06:51:33', '2018-10-08 06:51:33', '', ''),
(1016, 'kasie@gmail.com123', 'measchvcccok.radha07@gmail.com', NULL, '$2y$10$pKgFM4vYI.XMNJNM8TDGmu.kJ6xRBOGxtazvID36aaT3qeZnRxeL6', NULL, '2018-10-08 06:52:18', '2018-10-08 06:52:18', '', ''),
(1017, 'fdfw', 'meashogggk.radha07@gmail.com', NULL, '$2y$10$RQryM6N2TOI56mFfbHvha.Ir6Sa0YopZffFmJ6Br1B30qGr9mbpeC', NULL, '2018-10-08 09:54:35', '2018-10-08 09:54:35', '', ''),
(1018, 'rgtrg', 'meashfdyhcok.radha07@gmail.com', NULL, '$2y$10$7p3QqoD8.4hItXRgX1aYNOIpOS29Q4T82hSlZwrwKj/h6T9EzoA0y', NULL, '2018-10-08 09:56:20', '2018-10-08 09:56:20', '', ''),
(1019, 'rgtrg', 'meashfdyfhcok.radha07@gmail.com', NULL, '$2y$10$0Cu1l0yG6KXApCK04sXhFuVO7YacEWXXx6vm2K3GCmQiWa.f1mEim', NULL, '2018-10-08 09:57:26', '2018-10-08 09:57:26', '', ''),
(1020, 'rgtrg', 'meashfdyfcchcok.radha07@gmail.com', NULL, '$2y$10$.OzOlZNmUQgEof44p0Heju109UDZ8qNzaJHVZ8X3rOaYEC7AnsuW2', NULL, '2018-10-08 10:02:50', '2018-10-08 10:02:50', '', ''),
(1021, 'fdfdd', 'fdfd4meashok.radha07@gmail.com', NULL, '$2y$10$pPkvwJpzF.ZfdF/qrt24cuFZQsogv.vSDRsqc1v7.QQpf.0dL5k26', NULL, '2018-10-08 10:10:39', '2018-10-08 10:10:39', '', ''),
(1022, 'tre', 'meashoffffk.radha07@gmail.com', NULL, '$2y$10$0PFKUE3hRPQ0T92j62YasO2PPRCjTKJy1vB3gRd5yx1iRw6H41eY2', NULL, '2018-10-08 10:16:09', '2018-10-08 10:16:09', '', ''),
(1023, 'ff', 'mffdffeashok.radha07@gmail.com', NULL, '$2y$10$FKVNQhkNi1S/nJWfJzAYLuMzpvEHYtA1SRCq1RrVNS8LNMiEQhGiq', NULL, '2018-10-08 10:22:48', '2018-10-08 10:22:48', '', ''),
(1024, 'lklll', 'meashok.rakkjjhgghdha07@gmail.com', NULL, '$2y$10$24xuH2RdNwX.d3njVyswK.gDNyK.ygtLNlrswBD7icSFri33Y9tFi', NULL, '2018-10-08 10:31:30', '2018-10-08 10:31:30', '', ''),
(1025, 'kkk', '78yjjmeashok.radha07@gmail.com', NULL, '$2y$10$kimC7y6sxsYjyot7U5yV1uXClM4bk2hAcOvfLEDwP5ODN4GsVC9pK', NULL, '2018-10-08 10:32:45', '2018-10-08 10:32:45', '', ''),
(1027, 'kasie@gmail.com', 'meashok.radhaeeeww07@gmail.come', NULL, '$2y$10$.fucj3qIKS0wTDY3zbmtU.wKF0QbeIrerg8BpvXLNTxtn4VW1iCk.', NULL, '2018-10-08 10:38:24', '2018-10-08 10:38:24', '', ''),
(1028, 'fdfdd', 'gfr455edsmeashok.radha07@gmail.com', NULL, '$2y$10$eVMDy.Qj9XqLdrX.6l9fFu0.NbXwSJTNM7/FlHg0OOlqa4jMWFOfG', NULL, '2018-10-08 10:56:07', '2018-10-08 10:56:07', '', ''),
(1031, 'kasi', 'meashok.radha07@gmail.comddd', NULL, '$2y$10$QNqEiAFbZVbmRaEp8R497eP30zBdyvDK3AAO.Jvh.Rf6X85AVqBBS', NULL, '2018-10-09 03:51:04', '2018-10-09 03:51:04', NULL, NULL),
(1032, 'kasie@gmail.com', 'meashok.eeeeeeeeeradha07@gmail.com', NULL, '$2y$10$2apKhU2WaKNwxNGiymvZneSOt4eUyRicKaDq3.B9ZaQPAYaTtW.2y', NULL, '2018-10-09 03:54:32', '2018-10-09 03:54:32', NULL, NULL),
(1033, 'kasi Uma mahesh S', 'kasimahesh34@gmail.com', NULL, NULL, NULL, '2018-10-09 06:03:33', '2018-10-09 06:03:33', NULL, '104211969128009622555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tab`
--
ALTER TABLE `admin_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_tab`
--
ALTER TABLE `cat_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_tab`
--
ALTER TABLE `event_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_cat_tab`
--
ALTER TABLE `group_cat_tab`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_id` (`group_id`,`cat_id`);

--
-- Indexes for table `group_tab`
--
ALTER TABLE `group_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_tab`
--
ALTER TABLE `members_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments_tab`
--
ALTER TABLE `payments_tab`
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
-- AUTO_INCREMENT for table `admin_tab`
--
ALTER TABLE `admin_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cat_tab`
--
ALTER TABLE `cat_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event_tab`
--
ALTER TABLE `event_tab`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_cat_tab`
--
ALTER TABLE `group_cat_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `group_tab`
--
ALTER TABLE `group_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members_tab`
--
ALTER TABLE `members_tab`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments_tab`
--
ALTER TABLE `payments_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1034;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
