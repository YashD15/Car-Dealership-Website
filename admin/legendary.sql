-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 12:31 PM
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
-- Database: `legendary`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `uname` varchar(50) DEFAULT NULL,
  `thoughts` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`uname`, `thoughts`) VALUES
('Vedant Bawkar', 'User-friendly website, detailed car listings, easy to navigate. However, lacking in interactive features and personal touch'),
('Yash Dhavde', 'Clear layout, easy navigation, detailed inventory with pricing. Contact information visible. Lack of customer reviews and interactive features.'),
('Amey Gaikwad', 'User-friendly website with detailed inventory and transparent pricing. Easy navigation, but lacking in customer reviews and interactive features.'),
('Sws', 'nice website'),
('Vedant Bakwar', 'I love Manthan Sawant.'),
('Vedant Bakwar', 'I love Manthan and am doing 69 with him'),
('Vedant Bawkar', 'Manthan Sawant, hell yeah!¡!'),
('or 1=1; truncate table users;', ''),
('Manthan Sawant', 'I love you too Vedant❤️'),
('69 vedant', 'Love you too manthan baby ♥️');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `contact` bigint(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `enquirytype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `fullname`, `contact`, `email`, `state`, `enquirytype`) VALUES
(1, 'Vedant Bawkar', 7354080866, 'vedant.bawkar04@gmail.com', 'Maharashtra', 'Pre-booking'),
(5, 'or 1=1; truncate table users;', 312313131, 'dadad@gmail.com', 'Meghalaya', 'Pre-booking');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `contact` bigint(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `livery` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `Delivered` text DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `fullname`, `contact`, `email`, `brand`, `model`, `livery`, `color`, `Delivered`) VALUES
(1, 'Vedant Bawkar', 7305099568, 'vedant.bawkar04@gmail.com', 'Pegassi', 'Infernus', 'Gulf', 'Blue', 'NO'),
(2, 'Yash Dhavde', 9546132588, 'yash.dhavde@gmail.com', 'Grotti', 'Cheetah', 'Castrol', 'Blue', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
