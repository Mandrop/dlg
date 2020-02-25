-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Vært: localhost:8889
-- Genereringstid: 25. 02 2020 kl. 12:29:51
-- Serverversion: 5.7.26
-- PHP-version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dlg`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
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
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_content`, `product_price`, `product_image`, `product_slug`) VALUES
(1, 'Økologisk Mel', 'Ølandshvede er en gammel kornsort, hvis bageegenskaber minder om speltmel. Denne meltype har en blødere glutenstruktur, som man også finder ved speltmelet.\r\n\r\nBrød og boller bagt med ølandshvede giver et brunere resultat med en \"mørkere\" smag. Desuden suger denne meltype godt, hvilket gør brød og boller bagt med ølandshvede dejlig fugtig med en god holdbarhed.', '39,95', 'images/mel2.jpg', NULL),
(2, 'Økologisk Pils', '\r\n\r\nTjekkisk-inspireret pilsner, som er lys i farven og har et hvidt skum. Brygget med mere humle end en traditionel danske pilsner, men med en behagelig rund eftersmag.\r\n\r\nØllet er ikke filtreret.\r\n\r\n \r\n\r\nBrygget af Økologisk bygmant, økologisk humle og gær\r\n\r\n \r\n\r\n50 cl\r\n\r\nAlc. 5.5% vol\r\n\r\n \r\n\r\nPrisen er inkl. pant\r\n\r\n \r\n\r\nBrygget af Herslev Bryghus\r\n', '29,95', 'images/oeko-oel-white-bg.jpg', NULL),
(3, 'Økologisk Olie', 'Hørfrøolie er rig på flerumættede fedtsyrer. Især sit høje indhold af omega 3-fedtsyrer, som kun fås via andre olier.\r\n\r\nDet er frisk presset og pakket i en lysskærmende flaske.\r\n\r\nOlien kan blandt andet bruges sammen med Quark, kogte kartofler og grøntsager. ', '49,95', 'images/rapsolie-white-bg.jpg', NULL),
(4, 'Økologisk Sandpapir', 'KORN 120. Velegnet til at slibe alt træ. Utroligt fleksible og praktiske slibeblade til universelle og brede anvendelsesområder. Kan nemt skæres til i den ønskede længde. Passer til alle gængse planslibere, fordi bredden er forskåret. Velegnet til tør- og vådslibning (uden el-værktøj) \"Rullebredde mm: 93 Rullelængde mtr: 5', '20,00', 'images/sandpapir.jpg', NULL);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
