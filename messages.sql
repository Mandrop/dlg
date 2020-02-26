-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 26, 2020 at 08:58 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dlg`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `message_name` varchar(75) NOT NULL,
  `message_email` varchar(75) NOT NULL,
  `message_content` text NOT NULL,
  `message_time` varchar(15) NOT NULL,
  `message_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `message_name`, `message_email`, `message_content`, `message_time`, `message_date`) VALUES
(5, 'henrik', 'Henrik@test.dk', 'Detter er fra Henrik', '13:45', '25.02.20'),
(8, 'sadfsadf', 'frederik.holstad@yahoo.dk', 'Villestoftehegnet 69, Villestofte', '13:49', '25.02.20'),
(9, 'Frederik Holstad Mandrup-Møller', 'frederik.holstad@yahoo.dk', 'Villestoftehegnet 69, Villestofte', '13:49', '25.02.20'),
(10, 'Frederik Holstad Mandrup-Møller', 'frederik.holstad@yahoo.dk', 'Villestoftehegnet 69, Villestofte', '13:49', '25.02.20'),
(11, 'Frederik Holstad Mandrup-Møller', 'frederik.holstad@yahoo.dk', 'slijdfadjklsfjklasdfljkakljsdfjklsdaljkfljkasdfjlk', '13:51', '25.02.20'),
(12, 'Frederik Holstad Mandrup-Møller', 'frederik.holstad@yahoo.dk', 'Hej med dig, jeg \r\n\r\n', '08:59', '26.02.20'),
(13, 'Frederik Holstad Mandrup-Møller', 'frederik.holstad@yahoo.dk', 'Hej med dig, jeg \r\n\r\n', '09:45', '26.02.20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
