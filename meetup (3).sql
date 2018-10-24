-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 08:19 AM
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
(1, 'kasie@gmail.com', 'admin@gmail.com', 'admin@gmail.com', 'profile/nR4suKvIi8tCQYy3aSx5NEQZQauH7gLvkpdcAE5q.jpeg', 'hyderabaddgghhhggggggggggggggg', '9864646466');

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

--
-- Dumping data for table `cat_tab`
--

INSERT INTO `cat_tab` (`id`, `cat_name`, `created_time`, `created_by`, `status`, `deleted_time`, `deleted_by`) VALUES
(2, 'sports', '2018-10-13 16:15:51', 1, 'active', NULL, NULL),
(3, 'music', '2018-10-15 14:52:31', 1, 'active', NULL, NULL),
(4, 'singing', '2018-10-16 13:55:15', 1, 'active', NULL, NULL),
(5, 'kfkfkfk', '2018-10-17 11:07:49', 1, 'active', NULL, NULL),
(6, 'kfkfkfk', '2018-10-17 11:09:13', 1, 'active', NULL, NULL),
(7, 'fdfdf', '2018-10-22 18:45:36', 1, 'active', NULL, NULL),
(8, 'fdfsd', '2018-10-22 19:08:23', 1, 'active', NULL, NULL),
(9, 'rtre', '2018-10-22 19:13:10', 1, 'active', NULL, NULL),
(10, 'fdsf', '2018-10-22 19:13:50', 1, 'active', NULL, NULL),
(11, 'fh', '2018-10-22 19:14:26', 1, 'active', NULL, NULL),
(12, 'vfdvx', '2018-10-22 19:15:02', 1, 'active', NULL, NULL),
(13, 'vvcx', '2018-10-22 20:37:41', 1, 'active', NULL, NULL),
(14, 'jjjj', '2018-10-22 20:43:07', 1, 'active', NULL, NULL),
(15, 'm,', '2018-10-22 20:43:52', 1, 'active', NULL, NULL),
(16, 'nnnnn', '2018-10-22 20:44:45', 1, 'active', NULL, NULL),
(17, 'jjhklhj', '2018-10-22 20:45:14', 1, 'active', NULL, NULL),
(18, 'kjkkk', '2018-10-22 20:49:09', 1, 'active', NULL, NULL),
(19, 'jkkk', '2018-10-22 20:49:31', 1, 'active', NULL, NULL),
(20, 'vjvj', '2018-10-23 07:04:53', 1, 'active', NULL, NULL),
(21, 'hgthgh', '2018-10-23 09:59:57', 1, 'active', NULL, NULL),
(22, 'ttttt', '2018-10-23 10:00:07', 1, 'active', NULL, NULL),
(23, 'hhhhhhhhhhhhhhhh', '2018-10-23 10:00:19', 1, 'active', NULL, NULL),
(24, 'ddddddd', '2018-10-23 10:00:49', 1, 'active', NULL, NULL),
(25, 'fdfdf', '2018-10-23 10:17:30', 1, 'active', NULL, NULL),
(26, 'fdfd', '2018-10-23 10:20:32', 1, 'active', NULL, NULL),
(27, 'fd', '2018-10-23 10:21:00', 1, 'active', NULL, NULL),
(28, 'jhgj', '2018-10-23 10:28:18', 1, 'active', NULL, NULL),
(29, 'ggg', '2018-10-23 11:13:23', 1, 'active', NULL, NULL),
(30, 'fdfdffffff', '2018-10-23 11:39:21', 1, 'active', NULL, NULL),
(31, 'grgr', '2018-10-23 13:43:48', 1, 'active', NULL, NULL),
(32, 'gfdg', '2018-10-23 16:08:22', 1, 'active', NULL, NULL),
(33, 'fdgfdg', '2018-10-23 16:17:37', 1, 'active', NULL, NULL);

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
  `commented_by` int(10) UNSIGNED NOT NULL,
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
-- Table structure for table `forgot_password_tab`
--

CREATE TABLE `forgot_password_tab` (
  `id` int(11) NOT NULL,
  `token_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgot_password_tab`
--

INSERT INTO `forgot_password_tab` (`id`, `token_name`, `email`, `created_time`, `status`) VALUES
(1, '57508a04f21f0bbe5bd718920a6dea3947565d88', 'kasimahesh34@gmail.com', '2018-10-15 19:15:13', 0),
(2, '75c882478f2705ec1da4d56ff90cd09cc11522bc', 'kasimahesh34@gmail.com', '2018-10-15 19:15:23', 0),
(3, '82d1073488b2d1bf4104e69f16c366156b7531fc', 'kasimahesh34@gmail.com', '2018-10-15 19:16:11', 1),
(4, 'e4d957ef7bff783236be4e8a85f2305e170dc57e', 'admin@gmail.com', '2018-10-16 12:07:54', 1),
(5, '6103ac64cb4484b12998faaaee872dac9b47b1c0', 'admin@gmail.com', '2018-10-16 12:10:01', 1),
(6, '90febe893bbba173443ea6686af2ff041e889101', 'admin@gmail.com', '2018-10-16 12:13:42', 1),
(7, 'f6c1a1e7e8fab86ab0886fa039efc06875e942bf', 'admin@gmail.com', '2018-10-16 12:15:16', 1),
(8, 'b20a5e1c6a9ae4477d5ba3fe268c99569b0e4ea8', 'admin@gmail.com', '2018-10-16 12:16:53', 1),
(9, '98e22698569f35fe09528de10d0d7f510fc6f384', 'admin@gmail.com', '2018-10-16 12:52:50', 1),
(10, '2dc5deda594e6af212273ab397627110ec992c2e', 'admin@gmail.com', '2018-10-17 15:42:29', 1),
(11, '0c7a66fb476688576f5e03ca841b7f7b44aac19b', 'admin@gmail.com', '2018-10-17 15:44:08', 1);

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
(11, 2, 6),
(12, 8, 2),
(13, 8, 3),
(14, 8, 4);

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
  `group_type` varchar(100) NOT NULL DEFAULT 'public',
  `location` varchar(100) NOT NULL,
  `group_profile_photo` varchar(300) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) DEFAULT 'active',
  `deleted_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_tab`
--

INSERT INTO `group_tab` (`id`, `group_name`, `group_type`, `location`, `group_profile_photo`, `created_by`, `created_time`, `status`, `deleted_time`) VALUES
(2, 'gfdgdf', 'public', '', NULL, 1001, '2018-10-08 16:59:23', 'active', '2018-10-08 16:59:23'),
(3, 'ggg', '', '', NULL, 1001, '2018-10-08 17:24:21', 'active', '2018-10-08 17:24:21'),
(4, 'fgf', '', '', NULL, 1, '2018-10-08 17:30:22', 'active', '2018-10-08 17:30:22'),
(5, 'fddf', '', '', NULL, 1, '2018-10-08 17:32:45', 'active', '2018-10-08 17:32:45'),
(6, 'etrt', '', '', NULL, 1, '2018-10-08 17:45:17', 'active', '2018-10-08 17:45:17'),
(7, 'newgroup1', 'public', '2', NULL, 1048, '2018-10-24 10:52:42', 'active', NULL),
(8, 'newgroup1', 'public', '2', NULL, 1048, '2018-10-24 10:57:28', 'active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location_tab`
--

CREATE TABLE `location_tab` (
  `id` int(10) NOT NULL,
  `location_name` varchar(200) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_tab`
--

INSERT INTO `location_tab` (`id`, `location_name`, `created_time`) VALUES
(1, 'hyderabad', '2018-10-23 18:25:52'),
(2, 'chennai', '2018-10-23 18:25:52'),
(3, 'mumbai', '2018-10-23 18:26:29'),
(4, 'delhi', '2018-10-23 18:26:29');

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
-- Table structure for table `message_file_tab`
--

CREATE TABLE `message_file_tab` (
  `id` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `file_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_file_tab`
--

INSERT INTO `message_file_tab` (`id`, `file_name`, `file_path`) VALUES
(12, 'SCAN1261.jpg', 'uploads/a6W7Qi58RRUXoxC5eBsuLJOm3JILbwOOmfsmXAwE.jpeg'),
(12, 'SCAN1262.jpg', 'uploads/BwwNdZvJTxYwxoQYUatQHjSXYDy8ZyqtX7uuhlmy.jpeg'),
(13, '1f5b702ebe0fa1c3d15d7f622c12f6e5.jpg', 'uploads/W9ctuYe2dUDejgBnqqxosfqgUdMugvKQHNYoqWiG.jpeg'),
(13, '2670 (1).jpg', 'uploads/WwzlPH7cnJk5craFMK53lFnt56f8Epf1u8bQWCAV.jpeg'),
(14, 'miss-u-images-for-whatsaap-1024x876.jpg', 'uploads/2TScu848jFBZdBZ0bTv2E6C9ExQKENVMHCRmrJjz.jpeg'),
(14, 'openeyesmiss.png', 'uploads/dV1fjToMjiXtN4aZJyjLY0tFW4h5rJUz1DvDkEFl.png'),
(15, 'estimation.xlsx', 'uploads/BC3AuCLxXNqgFY1MdC993KzzwaXD21EPHH1381m9.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `message_tab`
--

CREATE TABLE `message_tab` (
  `id` int(11) NOT NULL,
  `sender_mail` varchar(200) NOT NULL,
  `recevier_mail` varchar(200) NOT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `message` text,
  `file_id` int(10) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) NOT NULL DEFAULT 'active',
  `read_status` varchar(200) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_tab`
--

INSERT INTO `message_tab` (`id`, `sender_mail`, `recevier_mail`, `subject`, `message`, `file_id`, `time`, `status`, `read_status`) VALUES
(5, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'fdsfjsdf', 'Messagejsdflsdflsdf', 1, '2018-10-13 23:31:24', 'active', 'unread'),
(6, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'fdsfjsdf', 'Messagejsdflsdflsdf', 2, '2018-10-13 23:31:48', 'active', 'unread'),
(7, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'fdsfjsdf', 'Messagejsdflsdflsdf', 3, '2018-10-13 23:32:16', 'active', 'unread'),
(8, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'fdsfjsdf', 'Messagejsdflsdflsdf', 4, '2018-10-13 23:33:31', 'active', 'read'),
(9, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'fdsfjsdf', 'Messagejsdflsdflsdf', 5, '2018-10-13 23:33:57', 'active', 'unread'),
(10, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'fdsfjsdf', 'Messagejsdflsdflsdf', 6, '2018-10-13 23:34:03', 'active', 'unread'),
(11, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'fdsfjsdf', 'Messagejsdflsdflsdf', 7, '2018-10-13 23:34:06', 'active', 'unread'),
(12, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'fdsfjsdf', 'Messagejsdflsdflsdf', 8, '2018-10-13 23:34:08', 'active', 'unread'),
(13, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'fdsfjsdf', 'Messagejsdflsdflsdf', 9, '2018-10-13 23:34:11', 'active', 'unread'),
(14, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'fdsfjsdf', 'Messagejsdflsdflsdf', 10, '2018-10-13 23:35:50', 'active', 'unread'),
(15, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'fdsfjsdf', 'Messagejsdflsdflsdf', 11, '2018-10-13 23:36:10', 'active', 'unread'),
(16, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'fdsfjsdf', 'Messagejsdflsdflsdf', 12, '2018-10-13 23:37:19', 'active', 'unread'),
(17, 'admin@gmail.com', 'meashok.radha07@gmail.com', 'fjfjfjk', 'Messagehtrhtrh', NULL, '2018-10-13 23:39:12', 'active', 'unread'),
(18, 'admin@gmail.com', 'meashok.radha07@gmail.com', 'kasidididf', 'Messagedfd', NULL, '2018-10-13 23:41:11', 'active', 'unread'),
(19, 'admin@gmail.com', 'meashok.radha07@gmail.com', NULL, 'Messagefdfds', NULL, '2018-10-13 23:46:21', 'active', 'unread'),
(20, 'admin@gmail.com', 'meashok.radha07@gmail.com', 'ktktk', 'Messagetkktkt', NULL, '2018-10-13 23:46:46', 'active', 'unread'),
(21, 'admin@gmail.com', 'meashok.radha07@gmail.com', 'fdsfsd', 'Messagefdsf', NULL, '2018-10-13 23:47:58', 'active', 'unread'),
(22, 'admin@gmail.com', 'meashok.radha07@gmail.com', 'fdsf', 'Messagefdsfs', NULL, '2018-10-13 23:49:07', 'active', 'unread'),
(23, 'admin@gmail.com', 'kasimahesh34@gmail.com', 'skdfkjfk', 'Messageldfkdfkdsf', 13, '2018-10-13 23:51:02', 'active', 'read'),
(24, 'admin@gmail.com', 'meashok.radha07@gmail.com', 'fkfk', 'jdkjdjdj', NULL, '2018-10-14 14:39:19', 'inactive', 'read'),
(25, 'admin@gmail.com', 'meashok.radha07@gmail.com', NULL, 'Message', NULL, '2018-10-14 14:40:13', 'active', 'unread'),
(26, 'kadkd@gmail.com', 'admin@gmail.com', 'some new content', 'every sing \r\ndsdfdffffffffffffffffffjjjjjjkkk', NULL, '2018-10-15 12:20:14', 'active', 'unread'),
(27, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-15 13:58:38', 'inactive', 'unread'),
(28, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-15 13:59:05', 'active', 'read'),
(29, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-15 14:15:27', 'active', 'read'),
(30, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-15 14:18:33', 'active', 'unread'),
(31, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-15 14:19:37', 'active', 'unread'),
(32, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-15 14:25:08', 'active', 'unread'),
(33, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-15 14:25:45', 'active', 'unread'),
(34, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-15 14:33:48', 'active', 'read'),
(35, 'admin@gmail.com', 'meashok.radha07@gmail.com', 'kasididid', 'kfkfkfg', 14, '2018-10-15 16:35:09', 'active', 'read'),
(36, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-16 10:04:21', 'active', 'unread'),
(37, 'admin@gmail.com', 'admin@gmail.com', NULL, 'Message', NULL, '2018-10-16 10:54:45', 'active', 'unread'),
(38, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-16 11:06:37', 'active', 'unread'),
(39, 'admin@gmail.com', 'vasu@gmail.com', 'test', 'like  this  Message', 15, '2018-10-16 13:02:14', 'active', 'unread'),
(40, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-23 16:08:08', 'active', 'unread'),
(41, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-23 16:08:13', 'active', 'unread'),
(42, 'admin@gmail.com', 'kadkd@gmail.com', 'gg', 'Messagehgfhgh', NULL, '2018-10-23 16:08:48', 'active', 'unread'),
(43, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Messagehghgf', NULL, '2018-10-23 16:08:55', 'inactive', 'unread'),
(44, 'admin@gmail.com', 'kadkd@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'Message', NULL, '2018-10-23 16:09:06', 'inactive', 'unread'),
(45, 'admin@gmail.com', 'kadkd@gmail.com', 'ffffffffgg', 'Messagegg', NULL, '2018-10-23 16:14:25', 'inactive', 'unread'),
(46, 'admin@gmail.com', 'meashok.radha07@gmail.com', 'fdsfjsdf', 'Messagefdf', NULL, '2018-10-23 16:16:59', 'active', 'unread'),
(49, 'admin@gmail.com', 'meashok.radha07@gmail.com', 'vff', 'Messageff', NULL, '2018-10-23 16:28:42', 'active', 'unread'),
(50, 'admin@gmail.com', 'meashok.radha07@gmail.com', NULL, 'Messagefdfd', NULL, '2018-10-23 16:32:22', 'active', 'unread'),
(51, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-23 16:35:28', 'active', 'unread'),
(52, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-23 16:35:32', 'active', 'unread'),
(53, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-23 16:35:37', 'active', 'unread'),
(54, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-23 16:36:27', 'active', 'unread'),
(55, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-23 16:37:48', 'active', 'unread'),
(56, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-23 16:37:53', 'active', 'unread'),
(57, 'admin@gmail.com', 'kadkd@gmail.com', NULL, 'Message', NULL, '2018-10-23 17:02:27', 'active', 'unread');

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
  `google_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `fb_id`, `google_id`, `photo`) VALUES
(1031, 'kasi', 'kadkd@gmail.com', NULL, '$2y$10$QNqEiAFbZVbmRaEp8R497eP30zBdyvDK3AAO.Jvh.Rf6X85AVqBBS', NULL, '2018-10-09 03:51:04', '2018-10-09 03:51:04', NULL, NULL, NULL),
(1032, 'kasie@gmail.com', 'meashok.eeeeeeeeeradha07@gmail.com', NULL, '$2y$10$2apKhU2WaKNwxNGiymvZneSOt4eUyRicKaDq3.B9ZaQPAYaTtW.2y', NULL, '2018-10-09 03:54:32', '2018-10-09 03:54:32', NULL, NULL, NULL),
(1035, 'kasiumamahesh', 'kasssss@gmail.com', NULL, '$2y$10$gdvt.mBD4eziPcxyxvU1zODMEOWE3DPavJRPH7rR4a22ediMt5NMe', NULL, '2018-10-23 06:59:43', '2018-10-23 06:59:43', NULL, NULL, NULL),
(1036, 'kasiumamahesh', 'kasssssuu@gmail.com', NULL, '$2y$10$7OPufQ0HU8yr426JOlpwSenFjSxix9rIjXzOxPwTiEbJF8W5syMFm', NULL, '2018-10-23 07:14:37', '2018-10-23 07:14:37', NULL, NULL, NULL),
(1037, 'kasie@gmail.com', 'meashok.rddddddddadha07@gmail.com', NULL, '$2y$10$/G1Iz5Z8XrVo1x5.r.ej9.MEI6ApfO0qDRKUc1ahmG9Pc4MqNuIa2', NULL, '2018-10-23 07:59:56', '2018-10-23 07:59:56', NULL, NULL, NULL),
(1038, 'kasiumamahesh', 'meashgggggggok.radha07@gmail.com', NULL, '$2y$10$YoGPKiFnMRiVWT7yJDAhA.CKCVQUHG9CHG2igmdf2unuUT84cS2uW', NULL, '2018-10-23 08:02:09', '2018-10-23 08:02:09', NULL, NULL, NULL),
(1040, 'kasiumamahesh', 'meashgggggggofk.radha07@gmail.com', NULL, '$2y$10$yqh/v3oJ2gQrF9qpnW3WieXfgZHkqlmeJDku6scYBf8TMXidsdf3a', NULL, '2018-10-23 08:19:50', '2018-10-23 08:19:50', NULL, NULL, NULL),
(1042, 'kasiumamahesh', 'meashgggggghhgofk.radha07@gmail.com', NULL, '$2y$10$f14iglvFfelxaDgU2Uo6deTcnd5hHfibA6jZk/p1RCke0lZramfN.', NULL, '2018-10-23 08:20:35', '2018-10-23 08:20:35', NULL, NULL, NULL),
(1043, 'kasiumamahesh', 'meashgggggghhgjjofk.radha07@gmail.com', NULL, '$2y$10$wTfSVsln62zrei6hqYtWT.0gNJKYZ6Oy.zla5l.SdCx1hw.wnyHQm', NULL, '2018-10-23 08:26:59', '2018-10-23 08:26:59', NULL, NULL, NULL),
(1044, 'kasiumamahesh', 'meashgggggguuhhgjjofk.radha07@gmail.com', NULL, '$2y$10$19k3TjY60IHXI2B3lhaTYO1gnMsgu1bkN6Ecwr28KQJM/S1wEOjEO', NULL, '2018-10-23 08:28:07', '2018-10-23 08:28:07', NULL, NULL, NULL),
(1045, 'kasiumamahesh', 'meashjjjjjyhok.radha07@gmail.com', NULL, '$2y$10$r7Pm34XqbJouyfieDdtH.OV10lZ1WosqisCZ6yiOqMZTN.a72THEm', NULL, '2018-10-23 23:23:06', '2018-10-23 23:23:06', NULL, NULL, NULL),
(1046, 'kasiumamahesh', 'meashjjjjjyffhok.radha07@gmail.com', NULL, '$2y$10$syhzUPL2jg0.DP8Xj4FWG.0MUyK1QieY.XboSZkdSLH.LUdD4mBri', NULL, '2018-10-23 23:28:53', '2018-10-23 23:28:53', NULL, NULL, NULL),
(1047, 'kasiumamahesh', 'meccvvashok.radha07@gmail.com', NULL, '$2y$10$jobUf20264/dmfjwr0uJaermEoY4YqrOm3qYnOob9j/OkpV8IKDsG', NULL, '2018-10-23 23:42:23', '2018-10-23 23:42:23', NULL, NULL, NULL),
(1048, 'ramesh', 'akasiphp55@gmail.com', NULL, '$2y$10$Zpb0RUu87Vp2TsFqUVI8Heoqwj99x25wn0k1gR8z9VaoJ0cRSJNpa', NULL, '2018-10-23 23:49:32', '2018-10-23 23:49:32', NULL, NULL, NULL);

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
-- Indexes for table `comment_reply_tab`
--
ALTER TABLE `comment_reply_tab`
  ADD KEY `comment_constraint` (`parent_comment_id`),
  ADD KEY `comment_cons2` (`child_comment_id`);

--
-- Indexes for table `comment_tab`
--
ALTER TABLE `comment_tab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constraint_comment1` (`commented_by`);

--
-- Indexes for table `event_tab`
--
ALTER TABLE `event_tab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_constraint` (`group_id`);

--
-- Indexes for table `forgot_password_tab`
--
ALTER TABLE `forgot_password_tab`
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
-- Indexes for table `location_tab`
--
ALTER TABLE `location_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_tab`
--
ALTER TABLE `members_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_tab`
--
ALTER TABLE `message_tab`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_constraint2` (`group_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `comment_tab`
--
ALTER TABLE `comment_tab`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_tab`
--
ALTER TABLE `event_tab`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forgot_password_tab`
--
ALTER TABLE `forgot_password_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `group_cat_tab`
--
ALTER TABLE `group_cat_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `group_tab`
--
ALTER TABLE `group_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `location_tab`
--
ALTER TABLE `location_tab`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members_tab`
--
ALTER TABLE `members_tab`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message_tab`
--
ALTER TABLE `message_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1049;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment_reply_tab`
--
ALTER TABLE `comment_reply_tab`
  ADD CONSTRAINT `comment_cons2` FOREIGN KEY (`child_comment_id`) REFERENCES `comment_tab` (`id`),
  ADD CONSTRAINT `comment_constraint` FOREIGN KEY (`parent_comment_id`) REFERENCES `comment_tab` (`id`);

--
-- Constraints for table `comment_tab`
--
ALTER TABLE `comment_tab`
  ADD CONSTRAINT `constraint_comment1` FOREIGN KEY (`commented_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `event_tab`
--
ALTER TABLE `event_tab`
  ADD CONSTRAINT `event_constraint` FOREIGN KEY (`group_id`) REFERENCES `group_tab` (`id`);

--
-- Constraints for table `payments_tab`
--
ALTER TABLE `payments_tab`
  ADD CONSTRAINT `payment_constraint2` FOREIGN KEY (`group_id`) REFERENCES `group_tab` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
