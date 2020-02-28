-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 28, 2020 at 08:38 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dlg`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(75) NOT NULL,
  `news_content` text NOT NULL,
  `news_image` varchar(75) NOT NULL,
  `news_date` varchar(15) NOT NULL,
  `news_time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_content`, `news_image`, `news_date`, `news_time`) VALUES
(1, 'Test', 'Test', 'images/billede-paa-vej.jpg', '27.02.20', '13:17'),
(2, 'Test Title', 'Dette er en test title', 'images/billede-paa-vej.jpg', '27.02.20', '13:18'),
(3, 'Endnu end titel TEST', 'Dette er en tekst Content title', 'images/billede-paa-vej.jpg', '27.02.20', '16:01'),
(4, 'Test 4', 'Dette er en nyheds tekst', 'images/billede-paa-vej.jpg', '28.02.20', '08:19'),
(5, 'NyhedsTest 5', 'Dette er nyhedstest 5', 'images/billede-paa-vej.jpg', '28.02.20', '08:20'),
(6, 'Test 6', 'Dette er en rigtigt lang tekst. Vi skriver meget for at teste om teksten bliver forkortet, sådan at man ikke kan se hele teksten på forsiden, men bare lidt af teksten. Testen er for at teste og teste og teste og teste........og teste', 'images/billede-paa-vej.jpg', '28.02.20', '08:24'),
(7, 'Dette er en lang title- måske er den for land', 'Test tekst halløj haøllj', 'images/billede-paa-vej.jpg', '28.02.20', '09:15'),
(8, 'Dette er en lang title- måske er den for land', 'Test 3', 'images/Groove Graphics KA.jpg', '28.02.20', '09:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
