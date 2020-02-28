-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 28, 2020 at 08:31 AM
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
(1, 'Økologisk Mel', 'Ølandshvede er en gammel kornsort, hvis bageegenskaber minder om speltmel. Denne meltype har en blødere glutenstruktur, som man også finder ved speltmelet.\r\n\r\nBrød og boller bagt med ølandshvede giver et brunere resultat med en \"mørkere\" smag. Desuden suger denne meltype godt, hvilket gør brød og boller bagt med ølandshvede dejlig fugtig med en god holdbarhed.', '39,95', 'images/mel2.jpg', NULL),
(2, 'Økologisk Pils', '\r\n\r\nTjekkisk-inspireret pilsner, som er lys i farven og har et hvidt skum. Brygget med mere humle end en traditionel danske pilsner, men med en behagelig rund eftersmag.\r\n\r\nØllet er ikke filtreret.\r\n\r\n \r\n\r\nBrygget af Økologisk bygmant, økologisk humle og gær\r\n\r\n \r\n\r\n50 cl\r\n\r\nAlc. 5.5% vol\r\n\r\n \r\n\r\nPrisen er inkl. pant\r\n\r\n \r\n\r\nBrygget af Herslev Bryghus\r\n', '29,95', 'images/oeko-oel-white-bg.jpg', NULL),
(3, 'Økologisk Olie', 'Hørfrøolie er rig på flerumættede fedtsyrer. Især sit høje indhold af omega 3-fedtsyrer, som kun fås via andre olier.\r\n\r\nDet er frisk presset og pakket i en lysskærmende flaske.\r\n\r\nOlien kan blandt andet bruges sammen med Quark, kogte kartofler og grøntsager. ', '49,95', 'images/rapsolie-white-bg.jpg', NULL),
(4, 'Økologisk Sandpapir', 'KORN 120. Velegnet til at slibe alt træ. Utroligt fleksible og praktiske slibeblade til universelle og brede anvendelsesområder. Kan nemt skæres til i den ønskede længde. Passer til alle gængse planslibere, fordi bredden er forskåret. Velegnet til tør- og vådslibning (uden el-værktøj) \"Rullebredde mm: 93 Rullelængde mtr: 5', '20,00', 'images/sandpapir.jpg', NULL),
(5, 'TESTÆBLE', 'Dette er en æble test', '65', '', NULL),
(9, 'Dette er en test 4', 'Dett er en test', '234', 'images/billede-paa-vej.jpg', NULL),
(11, 'Dette er en test 6', 'Dette er en test', '34', 'rapsolie-white-bg2.jpg', NULL),
(12, 'Dette er en test 7', 'Dette er test', '45', 'rod-frugt.jpg', NULL),
(13, 'Dette er en test 7', 'TEST', '34', 'oel2.png', NULL),
(14, 'test34', 'ælajndfgslækndsafglkæn', '34', 'Thors-sab-edit.jpg', NULL),
(15, 'test', 'lkjsdfglæksg', '23', 'Thors-sab-edit.jpg', NULL),
(16, 'test test test', 'ælgjfælkdng', '23', 'Thors hammer.jpg', NULL),
(17, 'test test', 'lkjhasfglkjdsnfg', '34', '../images/Thors-sab-edit2.jpg', NULL),
(18, 'tetst', 'hdfhdgndfjfcg', 'test', 'images/thor.jpg', NULL),
(19, 'testtest', 'etst', '34', 'images/billede-paa-vej.jpg', NULL),
(20, 'Test test', 'testtes', '45', 'images/billede-paa-vej.jpg', NULL),
(22, 'twst', 'tesgfdgsdg', '34', 'images/', NULL),
(23, 'test 4535', 'sælkjfgsælknsfg', '56', 'images/', NULL),
(24, 'TEST', 'wqerwqr', '34', 'images/', NULL),
(25, 'test', 'teste', '34', 'images/', NULL),
(26, 'twwt', 'twtwet', '34', 'images/', NULL),
(27, 'test', 'test', '34', 'images/', NULL),
(28, 'test', 'test', '34', 'images/', NULL),
(29, 'test', 'test', '34', 'images/', NULL),
(30, 'test', 'test', '34', 'images/', NULL),
(31, 'test', 'test', '34', 'images/', NULL),
(32, 'teset', 'tet', '34', 'images/ . ', NULL),
(33, 'twst', 'test', '34', 'images/ . deer.jpg', NULL),
(34, 'test', 'test', '34', 'images/ . ', NULL),
(35, 'test', 'test', '34', 'images/', NULL),
(36, 'test', 'test', '34$', 'images/', NULL),
(38, 'twst', 'teset', '34', 'images/$tempImage', NULL),
(40, 'test', 'test', '34', 'images/billede-paa-vej.jpg', NULL),
(41, 'test', 'test', '34', 'images/billede-paa-vej.jpg', NULL),
(42, 'test', 'test', '34', 'images/billede-paa-vej.jpg', NULL),
(43, 'test', 'test', 'test', 'images/billede-paa-vej.jpg', NULL),
(44, 'tet', '', '', '', NULL),
(45, 'test', 'test', 'tetst', 'images/billede-paa-vej.jpg', NULL),
(46, 'test', 'teset', '34', 'images/billede-paa-vej.jpg', NULL),
(47, 'test', 'test', '34', 'images/viking circel.png', NULL),
(48, 'Halløj', 'Test', '34', 'images/virtual-studio-set-1-paris-wide.jpg', NULL),
(49, 'test', 'test', '34', 'images/billede-paa-vej.jpg', NULL),
(50, 'test', 'test', '34', 'images/bine.png', NULL),
(51, 'test', 'test', '34', 'images/Groove Graphics KA.jpg', NULL),
(52, 'test', 'test', '34', 'images/studentervogn.jpg', NULL),
(53, 'test', 'test', '34', 'images/billede-paa-vej.jpg', NULL),
(54, 'test', 'test', '34', 'images/billede-paa-vej.jpg', NULL),
(55, 'test', 'test', '34', 'images/billede-paa-vej.jpg', NULL),
(56, 'test', 'test', '34', 'images/billede-paa-vej.jpg', NULL),
(57, 'tet', 'test', '23', 'images/billede-paa-vej.jpg', NULL),
(58, 'test', 'test', '23', 'images/billede-paa-vej.jpg', NULL),
(59, 'test', 'teset', '34', 'images/billede-paa-vej.jpg', NULL),
(60, 'test ', 'test', '23', 'images/promocao_rebull_summer2.png', NULL),
(61, 'test', 'test', '34', 'images/back-alley-revisit.jpg', NULL),
(62, 'test', 'test', '34', 'images/billede-paa-vej.jpg', NULL);

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
