-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2020 at 08:40 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dlg`
--

-- --------------------------------------------------------

--
-- Table structure for table `static_pages`
--

CREATE TABLE `static_pages` (
  `static_page_id` int(11) NOT NULL,
  `static_page_title` varchar(75) NOT NULL,
  `static_page_slug` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `static_pages`
--

INSERT INTO `static_pages` (`static_page_id`, `static_page_title`, `static_page_slug`) VALUES
(1, 'FORSIDE', 'forside'),
(2, 'PRODUKTER', 'produkter'),
(3, 'OM OS', 'om-os'),
(4, 'KONTAKT', 'kontakt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `static_pages`
--
ALTER TABLE `static_pages`
  ADD PRIMARY KEY (`static_page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `static_pages`
--
ALTER TABLE `static_pages`
  MODIFY `static_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
