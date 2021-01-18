-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 09:47 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `global_virtual_summit`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `BlogTitle` varchar(200) NOT NULL,
  `BlogQuote` varchar(200) NOT NULL,
  `BlogContent` text NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_update` varchar(50) DEFAULT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `BlogTitle`, `BlogQuote`, `BlogContent`, `file_name`, `create_date`, `last_update`, `time`, `userID`) VALUES
(49, 'trial change', ' njj', 'njnknkn ', '58709_497681120242744_813086825_n.jpg', '2020-11-10 07:42:42', '10/2020 01:13:00', '13:12:42', 8),
(51, 'mayanks blog', 'Education is the most powerful weapon  which you can change the world', 'content of Education society ', '3D-Wallpaper-of-Tiger.jpg', '2020-11-10 08:35:43', '10/2020 02:08:24', '14:05:43', 9);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `f_name`, `l_name`, `email`, `username`, `password`) VALUES
(8, 'shubham', 'ameta', 'shubhamameta1998@gmail.com', 'shubham98', '$2y$10$l5GNNBu1hNC./RtXDJ9mGuouuUdzLRMcLhh9KlLgDPf06QHMdIZpW'),
(9, 'Mayank', 'sharma', 'mayank1998@gmail.com', 'mayank1998', '$2y$10$pZJ5.0SO/yR/ko7OqKcqmufNKpG6LyhEIcuI1KfaeWXHIEAPijLOK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
