-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 04:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citadel_tsc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `usid` mediumint(9) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `pass` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `a_title` varchar(50) NOT NULL,
  `a_description` varchar(1000) NOT NULL,
  `a_date` varchar(20) NOT NULL,
  `date_added` varchar(20) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `a_title`, `a_description`, `a_date`, `date_added`, `images`) VALUES
(1, 'Night vigil', 'The will be night vigil that would hold on the 26th of this month please make sure you are present and don\'t miss for any reason!!! ', 'September 25, 2022', '', 'image.png');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` float NOT NULL,
  `members_name` varchar(225) NOT NULL,
  `members_department` varchar(225) NOT NULL,
  `members_dob` varchar(20) NOT NULL,
  `members_position` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` int(11) NOT NULL,
  `testifier_name` varchar(50) NOT NULL,
  `testimony` varchar(1000) NOT NULL,
  `date_added` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `testifier_name`, `testimony`, `date_added`) VALUES
(1, 'WIsdom Isaac Oku', 'I want to tank God for healing me from a very strong malaria fever that almost kill me. But I want to than God For His divine power and healing', ''),
(2, 'Mr. Timothy', 'I want to than God for his helping hands and his provision in our marriage that took place at Eko Hotel, I don\'t know how God did it.', ''),
(3, 'Pascal Moses', 'I want to thank God for adding a year to my life last Friday and His miracle hands. I also want to than all of us for the support and prayers towards my operation', '');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_event`
--

CREATE TABLE `upcoming_event` (
  `id` int(11) NOT NULL,
  `event_title` varchar(200) NOT NULL,
  `event_date` varchar(20) NOT NULL,
  `event_description` varchar(1000) NOT NULL,
  `event_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming_event`
--

INSERT INTO `upcoming_event` (`id`, `event_title`, `event_date`, `event_description`, `event_image`) VALUES
(1, 'Papa\'s Birthday', 'September 1, 2022', 'Join us to celebrate the grace and the power of God in the life of...', 'image.png'),
(2, 'Marriage of Wisdom & Mc Logquine', 'September 4, 2022', 'Wisdom is getting m,arried on the first of october please come with your agbada and shoe so that we can talk', 'img.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`usid`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_event`
--
ALTER TABLE `upcoming_event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `usid` mediumint(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upcoming_event`
--
ALTER TABLE `upcoming_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
