-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 28, 2020 at 10:40 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dlg`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
