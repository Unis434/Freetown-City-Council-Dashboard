-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2019 at 12:52 PM
-- Server version: 5.6.45-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vitafoam_mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `taxpayer`
--

CREATE TABLE `taxpayer` (
  `pin` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ward` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `validity` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxpayer`
--

INSERT INTO `taxpayer` (`pin`, `name`, `address`, `ward`, `amount`, `validity`) VALUES
(5588, 'Adepoju Tofunmi Toluwani', '4F Peninsular Road Adonkia', '113b', 10000, '2019-10-24'),
(12345, 'medal', 'no 133 off blackhall road', '113a', 100000, '2019-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(3, 'isolhub', 'isolhub@gmail.com', 'user', '0a08f0bb50794ef14a66a150c70093b7'),
(6, 'admin', 'fccadmin@gmail.com', 'admin', 'e6cc536f478828d4ebe348cfe4fef171'),
(7, 'benita', 'fccbenita@gmail.com', 'admin', '47bcafc30446169a2e5f43904a1a6ce1'),
(9, 'money', 'enimoney@gmail.com', 'admin', '1ea69a36c8cf9a1a2783c5c8ab355241');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `id` int(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`id`, `user`, `time`, `type`) VALUES
(1, 'admin', '2019-10-11 06:00:34', 'View Record'),
(2, 'isolhub', '2019-10-11 06:02:37', 'View Record'),
(3, 'money', '2019-10-11 06:10:24', 'View Record');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taxpayer`
--
ALTER TABLE `taxpayer`
  ADD PRIMARY KEY (`pin`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taxpayer`
--
ALTER TABLE `taxpayer`
  MODIFY `pin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
