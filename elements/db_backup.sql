-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 28, 2020 at 08:34 AM
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
(2, 'List pages', '?page=list_pages', 'list_pages'),
(3, 'Beskeder', '?page=beskeder', 'beskeder'),
(4, 'Kontakt Informationer', '?page=contact_information', 'contact_information');

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
(13, 'Frederik Holstad Mandrup-Møller', 'frederik.holstad@yahoo.dk', 'Hej med dig, jeg \r\n\r\n', '09:45', '26.02.20'),
(14, 'dfsafsd', 'text@mail.com', 'asdfdsafasdf', '11:16', '26.02.20'),
(15, 'dfsafsd', 'text@mail.com', 'asdfdsafasdf', '11:17', '26.02.20'),
(16, 'asdfasdfsadf', 'fredrik@gadsfasdf', 'sdafadsf', '12:48', '26.02.20');

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
(3, 'OM OS', 'om_os'),
(4, 'KONTAKT', 'kontakt');

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `static_pages`
--
ALTER TABLE `static_pages`
  ADD PRIMARY KEY (`static_page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_pages`
--
ALTER TABLE `admin_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `static_pages`
--
ALTER TABLE `static_pages`
  MODIFY `static_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
