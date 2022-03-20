-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 05:32 AM
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
-- Database: `idiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(6) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `created`) VALUES
(1, 'Python', 'Python is a popular programming language.\r\n\r\nPython can be used on a server to create web applications.', '2022-02-21 13:15:50'),
(2, 'JavaScript', 'JavaScript is the world\'s most popular programming language.\r\n\r\nJavaScript is the programming language of the Web.\r\n\r\nJavaScript is easy to learn.\r\n\r\nThis tutorial will teach you JavaScript from basic to advanced.', '2022-02-21 13:16:29'),
(3, 'React JS', 'React (also known as React.js or ReactJS) is a free and open-source front-end JavaScript library for building user interfaces based on UI components. It is maintained by Meta (formerly Facebook) and a community of individual developers and companies.', '2022-02-21 13:34:43'),
(4, 'PHP', 'PHP is a popular general-purpose scripting language that is especially suited to web development.\r\n\r\nFast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.', '2022-02-25 16:15:10'),
(5, 'Laravel', 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.', '2022-02-25 16:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(30) NOT NULL,
  `comment_by` int(9) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(1, 'nice one haha', 1, 1, '2022-02-21 19:53:48'),
(2, 'dsfas', 1, 2, '2022-02-21 20:05:56'),
(3, 'retew', 5, 3, '2022-02-21 20:06:09'),
(4, 'fsaf', 1, 1, '2022-02-23 19:23:03'),
(5, 'this is not working', 7, 1, '2022-02-24 17:01:36'),
(6, 'dgsd', 1, 10, '2022-02-24 17:19:25'),
(7, 'now now\r\n', 1, 10, '2022-02-24 17:19:33'),
(8, 'dsafs', 1, 10, '2022-02-24 17:22:35'),
(9, 'ggd', 1, 10, '2022-02-24 17:23:26'),
(10, 'ewtet', 8, 10, '2022-02-24 17:30:28'),
(11, 'afsdfasd', 11, 10, '2022-02-24 19:20:20'),
(12, 'sdfdsf', 11, 10, '2022-02-24 19:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(11) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(11) NOT NULL,
  `thread_user_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(1, 'Unable to install Django', 'please help me. Im in great trouble', 1, 1, '2022-02-21 16:20:57'),
(2, 'javascript not working', 'im in great problem in javascript', 2, 2, '2022-02-21 16:21:44'),
(3, '', '', 1, 3, '2022-02-21 18:50:22'),
(4, 'install error', 'runtime error 302', 1, 5, '2022-02-21 18:50:47'),
(5, 'embers at all', ' dsfsdfsd', 2, 4, '2022-02-21 18:52:36'),
(6, 'Copyright All rights reserved', ' xfsdfsdfsd', 2, 6, '2022-02-21 18:55:14'),
(7, 'help me ', 'my code is not working', 1, 7, '2022-02-24 17:01:14'),
(8, 'terw', 'ert', 1, 10, '2022-02-24 17:30:19'),
(9, 'what to do now', 'please let me know', 1, 10, '2022-02-24 19:00:44'),
(10, 'ewrwaf', 'sdfaf', 1, 10, '2022-02-24 19:19:58'),
(11, 'aaaaaaa', 'aaaaaaaee', 1, 10, '2022-02-24 19:20:14'),
(12, 'python', 'python', 1, 11, '2022-02-25 12:04:38'),
(13, 'python', 'javascript', 1, 11, '2022-02-25 12:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `timestamp`) VALUES
(1, 'trpt@gjg.com', '$2y$10$ZmcaPHPHtWGyC5ltxZoUYusQSuK4bc7sRTm373Pmgg/tzFr0mcWLS', '2022-02-23 12:59:59'),
(2, 'trpdt@gjg.com', '$2y$10$fZPS4gok925G/lCMTsGxLud7etnpHHLVy7SX86N9X166gjQjte05K', '2022-02-23 13:04:39'),
(3, 'tra@g.com', '$2y$10$LfE1hi31qn4dQDJxcpRYcuXHsEGIYTjRhuBPvz5oTRDrmE2DoWPcG', '2022-02-23 15:56:37'),
(4, 'tra@gg.com', '$2y$10$6J9y80ig/d0DzJKFCyefceNnjrfVjyj68pfzLFVihto6v5dVDxKX2', '2022-02-23 16:09:20'),
(5, 'vic@gma.com', '$2y$10$muOlOBiW8ADX94P6IdqbN.Md7FzFOACRoLdNCLmWhhN122586S3nK', '2022-02-23 16:36:37'),
(6, 'trpt@gdjg.com', '$2y$10$okD3JwZB99/KYSa/c.iCiua5j5KUFa/uwYbO5IWRxE0rfDVlWHFqW', '2022-02-23 18:01:26'),
(7, 'trpt@gjg.coma', '$2y$10$eOnhqIK7cZNz76atSZVC1e7s0XLA1OjO1bIRPzaZ8i1vcISSnm5.W', '2022-02-23 19:15:22'),
(8, 'trpt@gjaag.com', '$2y$10$y6LF4HrHQuYuP5FT6dxwI.z1y.2fN.O63czP./2w/RsX0lTkKgcWm', '2022-02-23 19:22:37'),
(9, 'vicky@a.com', '$2y$10$GgzABo0qqR7UEkDJkaYLIufopFXat0r3.Ryvb1kFFjWFA3zeBZwoS', '2022-02-24 17:00:52'),
(10, 'vvv@gjg.com', '$2y$10$BC55VGlDutg9fW3ZYsak5esqLryBIPr5rtgKRWiQch46Y7bBw0Zd6', '2022-02-24 17:19:07'),
(11, 'taaarpt@gjg.com', '$2y$10$yMcycwbN66rsnRbgLzy5UO/63WSSwYKVrlapNcq5qJJY9/yTQgybm', '2022-02-25 12:04:15'),
(12, 'trpt@gjg.comaa', '$2y$10$aCi9j20jrmXlY8/CecmLfO9Has9pHL30rFw0aAoxlAKNmxNTibwlq', '2022-02-25 16:04:19'),
(13, 'trpt@gjg.comaaa', '$2y$10$GK.jDFBg3.EkoowTu0C1Q.NtTMLB9wTicY5veOJoSsaWBXTWfWSU2', '2022-02-25 16:04:40'),
(14, 'trpt@gjg.comaaaq', '$2y$10$czqynW4xFXJxlG.4PNhY6Og2DJAZGh/fkJRWGjDgg2Ac5b5SWs7he', '2022-02-25 17:16:51'),
(15, 'trpt@gjg.com1', '$2y$10$jq5Xsl9lbMkqQhm8T3oixu/RAqXXhUnVDYDuCvz0VsTpXnpV1l9hu', '2022-03-01 12:19:08'),
(16, 'trpt@gjg.com111', '$2y$10$iyfEeqU8MQuJVrKHs3H3n.jsHbW6cXF6Atd2WR52Nhluz.WfTZKUK', '2022-03-01 13:28:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
