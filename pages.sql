-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 27, 2020 at 07:55 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dlg`
--

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
(27, 'GÅRDEN', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa unde earum nemo iste, labore, asperiores consequuntur quasi pariatur quam facilis quod provident?\r\nExpedita nobis hic itaque saepe? Quos illo fuga quasi autem vero! Expedita dolor a doloribus aliquid ipsum sequi quo, fuga fugit ab dicta vitae,\r\natque suscipit! Similique rerum impedit at tempore nobis quaerat sequi culpa rem autem repellendus. Tempora sunt consectetur similique laborum optio atque inventore eos voluptatibus nobis ipsam doloribus quos quia nisi blanditiis, exercitationem quasi neque dicta vel architecto.', 'gaarden', 'gard.jpg'),
(28, 'MARKEN', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa unde earum nemo iste, labore, asperiores consequuntur quasi pariatur quam facilis quod provident?\r\nExpedita nobis hic itaque saepe? Quos illo fuga quasi autem vero! Expedita dolor a doloribus aliquid ipsum sequi quo, fuga fugit ab dicta vitae,\r\natque suscipit! Similique rerum impedit at tempore nobis quaerat sequi culpa rem autem repellendus. Tempora sunt consectetur similique laborum optio atque inventore eos voluptatibus nobis ipsam doloribus quos quia nisi blanditiis, exercitationem quasi neque dicta vel architecto.', 'marken', 'ashim-d-silva-WeYamle9fDM-unsplash.jpg'),
(30, 'CREME', 'Det er vores nye creme. Det er vores nye creme. Det er vores nye creme. Det er vores nye creme. Det er vores nye creme. Det er vores nye creme. Det er vores nye creme. ', 'creme', 'the-honest-company-iop1VUrHF_U-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
