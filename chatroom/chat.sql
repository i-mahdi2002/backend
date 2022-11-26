-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 06:36 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

CREATE TABLE `chatroom` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `message` varchar(2048) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `chatroom`
--

INSERT INTO `chatroom` (`id`, `username`, `message`, `time`) VALUES
(135, 'ali', 'slm', '2022-10-16 06:22:45'),
(136, 'ali', 'slm', '2022-10-16 06:22:48'),
(137, 'ali', 'slm', '2022-10-16 06:22:52'),
(138, 'ali', 'heloo', '2022-10-16 06:23:02'),
(139, 'ali', 'slm', '2022-10-16 06:25:24'),
(140, 'mahdi', 'ss\n', '2022-10-16 06:25:38'),
(141, 'ali', 'hello', '2022-10-16 06:25:48'),
(142, 'ali', 'hello', '2022-10-16 06:25:51'),
(143, 'ali', 'heillo', '2022-10-16 06:25:53'),
(144, 'ali', 'slm', '2022-10-16 06:25:55'),
(145, 'ali', 'slm', '2022-10-16 06:25:57'),
(146, 'mahdi', '\nslm', '2022-10-16 06:26:18'),
(147, 'ali', 'slm', '2022-10-16 06:26:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
