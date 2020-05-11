-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 01:22 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `content`, `file`, `category`) VALUES
(1, 'BCA', 'hello', 'upload/Manipura_Chakra.jpg', 'Feed');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'vidhigajjar16@gmail.com', 'vidhi12345'),
(2, 'vidhigajjar16@gmail.com', 'vidhi123'),
(3, 'nilay12', 'nilay12345'),
(4, 'shivu12', 'shivangi123'),
(5, 'nilay12', 'nilay123'),
(6, 'vidhi123', 'vidhi12345'),
(7, 'vidhi123', 'vidhi12345'),
(8, 'nilay12', 'nilay12345'),
(9, 'shivu12', 'shivu12345'),
(10, '', ''),
(11, '', ''),
(12, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `gender`, `mobile`) VALUES
(1, 'vidhi', 'GAJJAR', 'Female', '9854632145'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, 'nilay', 'GAJJAR', 'Male', '8965412365'),
(5, 'shivangi', 'NAGAR', 'Female', '7896541230'),
(6, 'nilay', 'GAJJAR', 'Male', '4569874563'),
(7, 'vidhi', 'GAJJAR', 'Female', '8956412360'),
(8, '', '', '', ''),
(9, 'nilay', 'GAJJAR', 'Male', '4589562310'),
(10, 'shivangi', 'GAJJAR', 'Female', '8456231456'),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
