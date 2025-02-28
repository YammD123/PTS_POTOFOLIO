-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2025 at 02:48 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porto`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(13, '876', 'huzafah990@gmail.com', 'wrerwrwrew', '2025-02-23 13:00:40'),
(14, '876', 'huzafah990@gmail.com', 'wrerwrwrew', '2025-02-23 13:14:48'),
(15, '876', 'huzafah990@gmail.com', 'wrerwrwrew', '2025-02-23 13:16:25'),
(16, 'SiamBonaparte', 'huzafah990@gmail.com', 'rwer', '2025-02-24 07:59:42'),
(17, 'Timoty Roland', 'huzafah990@gmail.com', 'q', '2025-02-26 05:27:28'),
(18, 'rg', 'huzafah990@gmail.com', 'hj', '2025-02-26 07:57:02'),
(19, 'kyfkjyf', 'huzafah990@gmail.com', 'uuuuuuu', '2025-02-26 08:20:27'),
(20, 'Siam Al Sobari', 'huzafah990@gmail.com', 'Testing....', '2025-02-27 15:35:35'),
(21, 'Siam Al Sobari', 'huzafah990@gmail.com', 'In adalah form yang terkonek ke database', '2025-02-27 15:50:03'),
(22, 'Siam Al Sobari', 'huzafah990@gmail.com', 'ini adalah test demo', '2025-02-28 02:34:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
