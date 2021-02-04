-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 05:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`) VALUES
(2, 'blog-1', 0x746869732069732064656d6f20626c6f6720656469746564),
(3, 'blog-2', 0x74686973206973207365636f6e6420626c6f67200d0a),
(5, 'blog-3', 0x7468697264),
(9, 'abd', 0x536673666273746e736574796564726e7465726474);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'What does PHP stand for?', 'Preprocessed Hypertext Page', 'Hypertext Markup Language', 'Hypertext Preprocessor', 'Hypertext Transfer Protocol', 'Hypertext Preprocessor', 'Hypertext Transfer Protocol'),
(2, 'What will be the value of $var? ', '0', '1', '2', 'NULL', '0', 'NULL'),
(3, ' ____________ function in PHP Returns a list of response headers sent (or ready to send)', 'header', 'headers_list', 'header_sent', 'header_send', 'headers_list', 'header_send'),
(4, 'Which of the following is the Server Side Scripting Language?', 'HTML', 'CSS', 'JS', 'PHP', 'PHP', 'PHP'),
(5, 'From which website you download this source code?', 'Softglobe.net', 'w3school.com', 'technopoints.co.in', 'php.net', 'technopoints.co.in', 'php.net');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `page_id`, `name`, `content`, `rating`, `submit_date`) VALUES
(15, 1, 'samsung m51', 'this is good phone.', 5, '2021-01-14 23:06:58'),
(16, 1, 'samsung s21+', 'this is new upcoming phone\r\n', 5, '2021-01-14 23:09:23'),
(17, 1, 'name', 'name', 5, '2021-01-14 23:11:08'),
(18, 1, 'rahul', 'dsgfdsgerere', 5, '2021-01-15 14:12:21'),
(19, 1, 'Hello World', 'd', 1, '2021-01-15 14:15:04'),
(20, 1, 'rd', 'rd', 5, '2021-01-22 22:10:26'),
(21, 1, 'r', '4', 4, '2021-01-25 21:36:09'),
(22, 1, 'qqqq', 'wwwww', 2, '2021-01-25 22:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'rahul', '$2y$10$l9cdnZCENLW.6ZkzGivCX.rwMuAXVQIxnLwbajwCP5TIH1Jb2xpnq', '2021-01-12 13:37:29'),
(2, 'suyash', '$2y$10$YhXeOypHs/JJxrfswrM5ieYHQkKrxDJKvAg72aWyTyJM8Vh84GdMS', '2021-01-12 15:12:36'),
(3, 'baba', '$2y$10$uziXPN7PkWdDxVGQMu8X7OPVFgsEJfICzgv09J5t5S8TbBLUrCf7m', '2021-01-12 21:10:51'),
(4, 'aai', '$2y$10$cvUsaEvpGZyq.fzlJQGjYeGBLtcSdlFP5UgPpmg9DtKP.2ZC6fJVi', '2021-01-12 23:14:42'),
(5, 'pr', '$2y$10$Ak5LUUV.rfQ4rnLqdR9AGuZkm6IsPI/huSdIih2kH.UEMGUZuLSmC', '2021-01-20 01:22:39'),
(6, 'name', '$2y$10$aDQ1zcAw6re5pNMJKKcxK.7tBHNp5rb7QBnXrydlwe2L3p5jCZFdG', '2021-01-26 00:40:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
