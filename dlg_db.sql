-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 02, 2020 at 07:53 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

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
(2, 'Undersider', '?page=list_pages', 'list_pages'),
(3, 'Produkter', '?page=list_products', 'list_products'),
(4, 'Beskeder', '?page=beskeder', 'beskeder'),
(5, 'Nyheder', '?page=list_news', 'list_news'),
(6, 'Kontakt informationer', '?page=contact_information', 'contact_information');

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
(15, 'Sabine', 'Sabine@sabine.dk', 'Hej Dejlig side', '18:00', '28.02.20');

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
(3, 'Endnu end titel TEST', 'Dette er en tekst Content title', 'images/billede-paa-vej.jpg', '27.02.20', '16:01'),
(9, 'Mere grønt, mindre kød - økologisk naturligvis', 'Forskerne peger på, at noget af det vigtigste, vi kan gøre for klimaet, er at omlægge til en mere plantebaseret kost med færre animalske produkter samt at minimere madspild. Økologisk Landsforening arbejder for et dansk landbrug med større vægt på plantebaseret kost og en natur- og klimatilpasset husdyrproduktion, hvis størrelse er i harmoni med jordens ydeevne.\r\n\r\nØkologi bliver ofte skudt i skoen, at den er mindre klimavenlig, fordi den kræver plads. Det er faktisk en af økologiens styrker, at vi ikke kan og skal opretholde den nuværende store husdyrproduktion, hvis landbruget omlægges til økologisk drift. Den samlede danske husdyrproduktion vil falde i takt med, at andelen af økologiske landbrug øges, fordi økologiske husdyr har langt mere plads og kommer ud på marken, og fordi der er krav om, at økologer selv skal producere en del af deres foder.\r\n\r\nEn mindre intensiv husdyrproduktion, der tilpasses arealet og baseres på lokalt foder og en masse græs, vil bidrage til et samlet mere klimavenligt landbrug og til en sundere kost med et bedre forhold mellem plantebaserede og animalske fødevarer.\r\n\r\nAllerede i dag ved vi fra kantiner og storkøkkener, der omlægger til økologisk kost, at forbruget af kød falder til gavn for både sundhed og klima.', 'images/guleroedder.jpg', '28.02.20', '10:42'),
(10, 'Roer er det nye sort', 'Rodfrugter er fællesbetegnelse for en række grøntsager, hvor det hovedsageligt er roden der anvendes, rodknolde eller en fortykkelse på stængelen under jordoverfladen. Nogle rodfrugter er opdaget af de første jæger- og samlersamfund, andre er forædlet gennem udvælgelse og dyrkning.\r\n\r\nI nogle tilfælde, f.eks. rødbeder, anvendes også unge skud (blade) til salater. Modsat andre frugter optræder roden i rodfrugter ikke som skjul for kerner til formering, dog med undtagelse af kartofler som kan formeres gennem skud fra rodknoldene. Ved rodfrugter anvendes knoldene eller fortykkelsen af stænglerne som forråd for planten, hvoraf nogle er toårige, næring opsamles i første vækstår, for at kunne bruges til stok, blomster og frø den efterfølgende sæson. Betegnelsen frugt er formodentligt tilføjet på grund af det spiselige \"frugtkød\" i roden. ', 'images/rod-frugt.jpg', '28.02.20', '10:43'),
(11, 'Gendyrket spidskål i salaten', 'Spidskålssalaten er let, frisk og kan pifte selv de mest almindelige hverdagsretter op. Jeg kan godt lide at servere spidskålssalat sammen med fisk såsom fiskefilet, laksefilet eller marinerede tigerrejer som på billedet herunder (hvor spidskålssalaten i øvrigt er piftet op med både chili og koriander), men den gør sig altså også ganske glimrende som sidestykke til en hakkebøf, kylling eller en god steak.', 'images/spidskaalssalat-opskrift.jpg', '28.02.20', '10:45'),
(12, 'Kom og klap en ko', 'De ældste tegn på tæmning af uroksen stammer fra \"den frugtbare halvmåne\", hvor man har fundet rester af tamkvæg i Çatal Hüyük i Lilleasien fra ca. 4000 år fvt. Mens andre tamdyr primært blev holdt som husdyr for kødets skyld (og andre animalske produkter som æg, mælk og uld), blev tamkvæget også brugt trækdyr. Dette var en af forudsætningerne for at det første primitive landbrug med svedjebrug udviklede sig til mere intensive landbrug med anvendelse af plov, så de første højere kulturer opstod i Nildalen og Mesopotamien. I længden menes anvendelsen af trækdyr at være hovedårsagen til, at f.eks. den europæiske kultur i 1500-tallet kunne vinde over de indianske højkulturer, som også havde tamdyr (lamaer), men ikke udnyttede dem som trækdyr.\r\n\r\nKvæg har historisk set været et udtryk for rigdom. Således er det latinske ord for kvæg pecus (d.s.s. da. fæ) oprindelsen til ordet pecunia (da. penge), som har afledninger på mange europæiske sprog (eng. penny, ty. pfennig). ', 'images/cow.jpg', '28.02.20', '10:49');

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
(30, 'CREME', 'Vi har fået stole i blå. Det er vores nye creme. Det er vores nye creme. Det er vores nye creme. Det er vores nye creme. Det er vores nye creme. Det er vores nye creme. Det er vores nye creme. ', 'creme', '');

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
(4, 'Økologisk Sandpapir', 'KORN 120. Velegnet til at slibe alt træ. Utroligt fleksible og praktiske slibeblade til universelle og brede anvendelsesområder. Kan nemt skæres til i den ønskede længde. Passer til alle gængse planslibere, fordi bredden er forskåret. Velegnet til tør- og vådslibning (uden el-værktøj) \"Rullebredde mm: 93 Rullelængde mtr: 5', '20,00', 'images/sandpapir.jpg', NULL);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

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
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
