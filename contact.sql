-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 27, 2020 at 07:57 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dlg`
--

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
  `contact_tuesday` varchar(75) NOT NULL,
  `contact_wednesday` varchar(75) NOT NULL,
  `contact_thursday` varchar(75) NOT NULL,
  `contact_friday` varchar(75) NOT NULL,
  `contact_saturday` varchar(75) NOT NULL,
  `contact_sunday` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_shop_name`, `contact_street`, `contact_city_and_zip`, `contact_phone`, `contact_email`, `contact_monday`, `contact_tuesday`, `contact_wednesday`, `contact_thursday`, `contact_friday`, `contact_saturday`, `contact_sunday`) VALUES
('Den lille gårdbutik', 'Gårdvej 1', 'Viborg 8800', '11 22 33 44', 'denlillegaardbutik@gmail.dk', '09:00 - 17:30', '09:00 - 17:30', '09:00 - 17:30', '09:00 - 17:30', '09:00 - 18:00', '10:00 - 13:00', '10:00 - 13:00');
