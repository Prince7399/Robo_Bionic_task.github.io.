-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 05:43 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bionic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `date`) VALUES
(0, 'Prince', 'Talaviya@gmail.com', 'dca0a5afd0b457ee36f8862369c7fda58c162b25', '2022-03-29 14:03:33'),
(0, 'Prince', 'Talaviya@gmail.com', 'dca0a5afd0b457ee36f8862369c7fda58c162b25', '2022-03-29 14:08:49'),
(0, 'Prince', 'Talaviya@123gmail.com', 'dca0a5afd0b457ee36f8862369c7fda58c162b25', '2022-03-29 16:08:43'),
(0, 'Biotech', 'biotech123@gmail.com', '8f4ebb4ffff4a3f4af3af0030fd1b0afadf11b1d', '2022-04-01 05:04:32'),
(0, 'Biotech12345', 'biotech12345@gmail.com', '9275c8c9a006f1a377528a884ee4680aab37d285', '2022-04-01 16:28:26'),
(0, 'Hello', 'hello123@gmail.com', '51cdd864d82b87aa88ed557d56035f785581ce3b', '2022-04-01 16:30:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`),
  ADD KEY `date` (`date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
