-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 11:40 PM
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
  `phone` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `slot_id` int(11) NOT NULL,
  `approved` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `date`, `slot_id`, `approved`) VALUES
(18, 'Vandan Savla', 'vdsavla@gmail.com', '8424993458', '2023-05-23', 4, 1),
(19, 'Vandan Savla', 'vdsavla@gmail.com', '8424993458', '2023-05-23', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `approved_slots`
--

CREATE TABLE `approved_slots` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `slot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approved_slots`
--

INSERT INTO `approved_slots` (`id`, `date`, `slot_id`) VALUES
(115, '2023-05-23', 4);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `year` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `client` varchar(200) NOT NULL,
  `brief` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `name`, `address`, `year`, `area`, `client`, `brief`, `date`) VALUES
(12, 'Siddharth Singh', 'dasda', 21313, 123, '13123', '13231', 'Fri May 26, 2023 22:40:50'),
(13, 'Harmit Saini', '312312', 312313, 123123, '12123', '312312', 'Fri May 26, 2023 23:08:56'),
(15, 'Vandan', '12313', 12313, 132, '312312', '312312', 'Fri May 26, 2023 23:09:52'),
(16, 'Jainam', '313', 123123, 1231, '3123', '1312312', 'Fri May 26, 2023 23:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `project_image`
--

CREATE TABLE `project_image` (
  `photo_id` int(11) NOT NULL,
  `path` varchar(700) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_image`
--

INSERT INTO `project_image` (`photo_id`, `path`, `project_id`) VALUES
(5, 'Siddharth Singhappointment1.png', 12),
(6, 'Siddharth Singhappointment2.png', 12),
(7, 'Siddharth Singhcalendar.png', 12),
(8, 'Siddharth Singhcontactaddress.png', 12),
(9, 'Harmit Sainimhero.png', 13),
(10, 'Harmit Sainiproject1.png', 13),
(11, 'Harmit Sainiproject2.png', 13),
(12, 'Harmit Sainiproject3.png', 13),
(13, 'Jainamdarkwebsite.png', 14),
(14, 'Jainamfooterbg.png', 14),
(15, 'Jainamgroup10.png', 14),
(16, 'Jainamhero.png', 14),
(17, 'Vandanservice.png', 15),
(18, 'Vandanservice2.png', 15),
(19, 'Vandanservice3.png', 15),
(20, 'Vandansir.png', 15),
(21, 'Jainamproject3.png', 16),
(22, 'Jainamservice.png', 16),
(23, 'Jainamservice2.png', 16),
(24, 'Jainamservice3.png', 16);

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
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` longtext NOT NULL,
  `position` text NOT NULL,
  `company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', '$2y$10$G/9KebUvMdOg6B24Bo.Cm.enMzXH7ZRMlkR1bK1pctm3kv66DTF5W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved_slots`
--
ALTER TABLE `approved_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_image`
--
ALTER TABLE `project_image`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `approved_slots`
--
ALTER TABLE `approved_slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `project_image`
--
ALTER TABLE `project_image`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
