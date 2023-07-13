-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 10:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `社員`
--

CREATE TABLE `社員` (
  `id` int(10) NOT NULL,
  `社員番号` text NOT NULL,
  `氏名` text NOT NULL,
  `部署` text NOT NULL,
  `性別` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ujis COLLATE=ujis_japanese_ci;

--
-- Dumping data for table `社員`
--

INSERT INTO `社員` (`id`, `社員番号`, `氏名`, `部署`, `性別`) VALUES
(1, 'a', 'a', 'c', 0),
(3, 'b', 'b', 'b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `社員`
--
ALTER TABLE `社員`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `社員`
--
ALTER TABLE `社員`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
