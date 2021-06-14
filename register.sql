-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 03:52 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`name`, `email`, `message`) VALUES
('malcolm', 'malcolmdsouza376@gmail.com', 'good'),
('malcolm', 'malcolmdsouza@gmail.com', 'good'),
('malcolm', 'malcolmdsouza@gmail.com', 'good'),
('malcolm', 'malcolmdsouza@gmail.com', 'good'),
('shweta', 'shwetapai1999@gmail.com', 'good'),
('malcolm', 'malcolmdsouza@gmail.com', 'good bakery\r\n'),
('Ravi', 'ravi@gmail.com', 'nice products here'),
('Ravi', 'ravi@gmail.com', 'nice products here'),
('Ravi', 'ravi@gmail.com', 'nice products here'),
('rutvi', 'rutvishahrocks@gmail.com', 'nice !!!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(18, 'Shweta', 'shwetapai1999@gmail.com', 'd828a5b9b09b334ce76bf241ca16c4eb', '2019-11-05 11:15:27'),
(21, 'Ravi', 'ravi@gmail.com', '63dd3e154ca6d948fc380fa576343ba6', '2019-11-06 04:56:56'),
(22, 'malcolm', 'malcolmdsouza376@gmail.com', '749dfe7c0cd3b291ec96d0bb8924cb46', '2019-11-06 06:41:53'),
(23, 'malcolm', 'malcolmdsouza376@gmail.com', '749dfe7c0cd3b291ec96d0bb8924cb46', '2019-11-06 06:43:39'),
(24, 'malcolm', 'malcolmdsouza@gmail.com', '749dfe7c0cd3b291ec96d0bb8924cb46', '2019-11-06 06:45:18'),
(25, 'malcolm', 'malcolmdsouza@gmail.com', '749dfe7c0cd3b291ec96d0bb8924cb46', '2019-11-06 06:51:04'),
(26, 'malcolm', 'malcolmdsouza@gmail.com', '749dfe7c0cd3b291ec96d0bb8924cb46', '2019-11-06 06:51:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
