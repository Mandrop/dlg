-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2020 at 08:41 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dlg`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(75) NOT NULL,
  `product_content` text NOT NULL,
  `product_price` varchar(11) NOT NULL,
  `product_image` varchar(75) NOT NULL,
  `product_slug` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_content`, `product_price`, `product_image`, `product_slug`) VALUES
(1, 'Test', 'Dette er en Test', '39,23', 'images/mel2.jpg', NULL),
(2, 'Øko Pils', 'Dette er en Øko Pils', '900', 'images/oeko-oel-white-bg.jpg', NULL),
(3, 'Øko Olie', 'Dette er en tekst omkring øko Olie', '40,34', 'images/mel.jpg', NULL),
(4, 'Øko Sandpapir', 'Dette er en tekst omkring øko Sandpapir', '30,34', 'images/mel.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
