-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 24, 2020 at 09:44 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dlg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(77) NOT NULL,
  `admin_password` varchar(77) NOT NULL,
  `admin_theme` varchar(77) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_password`, `admin_theme`) VALUES
(5, 'Frederik.holstad@yahoo.dk', '$2y$10$dG0bGUp9XSTIYyDdCQeBGuyO7SXo.o2rooBes4daeZD9ia6m43gh2', 'light');

-- --------------------------------------------------------

--
-- Table structure for table `admin_pages`
--

CREATE TABLE `admin_pages` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(77) NOT NULL,
  `page_link` varchar(77) NOT NULL,
  `page_slug` varchar(77) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_pages`
--

INSERT INTO `admin_pages` (`page_id`, `page_title`, `page_link`, `page_slug`) VALUES
(1, 'Users', '?page=users', 'users'),
(2, 'List pages', '?page=list_pages', 'list_pages');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_shop_name` varchar(75) NOT NULL,
  `contact_street` varchar(75) NOT NULL,
  `contact_city_and_zip` varchar(75) NOT NULL,
  `contact_phone` varchar(25) NOT NULL,
  `contact_email` varchar(75) NOT NULL,
  `contact_monday` varchar(75) NOT NULL,
  `contact_ tuesday` varchar(75) NOT NULL,
  `contact_wednesday` varchar(75) NOT NULL,
  `contact_thursday` varchar(75) NOT NULL,
  `contact_friday` varchar(75) NOT NULL,
  `contact_saturday` varchar(75) NOT NULL,
  `contact_sunday` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_shop_name`, `contact_street`, `contact_city_and_zip`, `contact_phone`, `contact_email`, `contact_monday`, `contact_ tuesday`, `contact_wednesday`, `contact_thursday`, `contact_friday`, `contact_saturday`, `contact_sunday`) VALUES
('Den lille gårdbutik', 'Gårdvej 1', 'Viborg 8800', '+45 11 22 33 44', 'denlillegaardbutik@gmail.dk', '09:00 - 17:30', '09:00 - 17:30', '09:00 - 17:30', '09:00 - 17:30', '09:00 - 18:00', '10:00 - 13:00', '10:00 - 13:00');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_name` varchar(75) NOT NULL,
  `message_email` varchar(75) NOT NULL,
  `message_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(75) NOT NULL,
  `page_content` text NOT NULL,
  `page_slug` varchar(75) NOT NULL,
  `page_image` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_title`, `page_content`, `page_slug`, `page_image`) VALUES
(1, 'Lorem Titel', 'lorem lorem lorem', 'lorem', ''),
(15, '2', '2', '2', ''),
(16, '2', '2', '2', ''),
(17, '2', '2', '2', 'grocery.jpg'),
(18, 'hej', 'hej', 'hej', 'oel2.png');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_pages`
--
ALTER TABLE `admin_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_pages`
--
ALTER TABLE `admin_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
