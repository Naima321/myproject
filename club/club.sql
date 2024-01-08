-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 10:18 AM
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
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `email`, `message`) VALUES
(1, 'Naima', 'naimahanif8@gmail.com', 'Hello'),
(2, 'Mumenah Anus', 'tania@gmail.com', 'hello'),
(3, 'rida khan', 'rida@gmail.com', 'WORLD');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `eventname` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(250) NOT NULL,
  `ticket_price` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eventname`, `date`, `description`, `location`, `ticket_price`, `image`) VALUES
(1, 'Group tournament activities', '22 feb 2023', 'Golf Club is Bootstrap v5.3.0 HTML CSS template for your golf related websites. Anyone can download, edit and use this layout for commercial purposes.', ' Golf Club', 568, 'images/professional-golf-player.jpg'),
(2, 'Group tournament activities', '12 nov 2024', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'National Center, NYC', 350, 'images/girl-taking-selfie-with-friends-golf-field.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event_activity`
--

CREATE TABLE `event_activity` (
  `id` int(11) NOT NULL,
  `Golf insurance` tinyint(1) NOT NULL,
  `Club Facilities` tinyint(1) NOT NULL,
  `Country Club` tinyint(1) NOT NULL,
  `Weekend Seasonal` tinyint(1) NOT NULL,
  `Premium Courses` tinyint(1) NOT NULL,
  `Pro's Networking` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_activity`
--

INSERT INTO `event_activity` (`id`, `Golf insurance`, `Club Facilities`, `Country Club`, `Weekend Seasonal`, `Premium Courses`, `Pro's Networking`) VALUES
(1, 1, 0, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `membername` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `membername`, `password`, `email`) VALUES
(40, 'rida khan', 'ASD123,a', 'rda@gmail.com'),
(41, 'asd', 'ASD123,a', 'ria@gmail.com'),
(42, 'Aisha', 'ASD123,a', 'aisha.aptech1902b@gmail.com'),
(43, 'Mumenah Anus', 'ASD123,a', 'tani@gmail.com'),
(44, 'khan', 'ASD123,a', 'snia@gmail.com'),
(45, 'Mumenah Anus', 'ASD123,a', 'tania@gmail.com'),
(46, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_activity`
--
ALTER TABLE `event_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_activity`
--
ALTER TABLE `event_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
