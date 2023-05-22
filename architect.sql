-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 06:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `architect`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `date` date NOT NULL,
  `slot_id` int(11) NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `date`, `slot_id`, `approved`) VALUES
(3, 'Siddharth Singh', 'sidsingh0@gmail.com', 937264201, '2023-05-22', 1, 0),
(4, 'Siddharth Singh', 'sidsingh0@gmail.com', 937264201, '2023-05-22', 1, 1),
(5, 'Siddharth Singh', 'sidsingh0@gmail.com', 937264201, '2023-05-22', 1, 0),
(6, 'Siddharth Singh', 'sidsingh0@gmail.com', 937264201, '2023-05-22', 1, 0),
(7, 'Siddharth Singh', 'sidsingh0@gmail.com', 937264201, '2023-05-22', 1, 0),
(8, 'Siddharth Singh', 'sidsingh0@gmail.com', 937264201, '2023-05-22', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `slot_id` int(11) NOT NULL,
  `slot_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`slot_id`, `slot_name`) VALUES
(1, '10-11 a.m.'),
(2, '11-12 a.m.'),
(3, '12-1 p.m.'),
(4, '1-2 p.m.'),
(5, '2-3 p.m.'),
(6, '3-4 p.m.');

-- --------------------------------------------------------

--
-- Table structure for table `unapproved_slots`
--

CREATE TABLE `unapproved_slots` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `slot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unapproved_slots`
--

INSERT INTO `unapproved_slots` (`id`, `date`, `slot_id`) VALUES
(1, '2023-05-22', 4),
(2, '2023-05-22', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `unapproved_slots`
--
ALTER TABLE `unapproved_slots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unapproved_slots`
--
ALTER TABLE `unapproved_slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
