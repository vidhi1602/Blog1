-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 01:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `class` varchar(200) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `href` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `class`, `cat_name`, `href`) VALUES
(1, 'fa-list icon', 'Feed', '#Feed'),
(2, 'fa-heartbeat icon', 'Health', '#Health'),
(3, 'fa-book-open icon', 'Books', '#Books'),
(4, ' fa-plane-departure icon', 'Visiting and Travel', '#Visiting a'),
(5, 'fa-egg icon', 'Food', '#Food'),
(6, 'fa-graduation-cap icon', 'Education', '#Education'),
(7, 'fa-music icon', 'Music', '#Music'),
(8, 'fa-chart-line icon', 'Business', '#Business'),
(9, 'fa-camera-retro icon', 'Movies', '#Movies'),
(10, 'fa-ubuntu icon', 'Science', '#Science'),
(11, 'fa-ubuntu icon', 'Technology', '#Technology'),
(12, 'fa-users-cog icon', 'Software Development', '#Software D'),
(13, 'fa-handshake icon', 'Jobs and Careers in software Enginering', '#Jobs and C'),
(14, 'fa-microphone icon', 'Sessions', '#Sessions');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
