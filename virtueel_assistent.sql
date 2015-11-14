-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 nov 2015 om 13:05
-- Serverversie: 5.6.26
-- PHP-versie: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtueel_assistent`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL,
  `companyName` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `kvkNumber` int(15) NOT NULL,
  `btwNumber` varchar(50) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `categorie` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `company`
--

INSERT INTO `company` (`company_id`, `companyName`, `description`, `website`, `email`, `street`, `zipcode`, `phone`, `kvkNumber`, `btwNumber`, `avatar`, `categorie`) VALUES
(1, 'fabiano & Co', 'sdfdfadsfas', 'www.google.nl', 'bub@hotmail.com', 'bubstreet 15', '1111AA', '065145645', 1454645646, 'fdfadsfs', 'fabiano.jpg', 'ICT'),
(2, 'Bob & Co', 'blabalblal', 'www.google.nl', 'bob.ruis@l', 'Gaudilijn ', '2728AW', '0629605380', 1131132, '445612', '', ''),
(5, 'Rich Art', 'Nice art for rich people', 'richart.com', 'richstudios@richard.com', 'rich street', '2726RA', '079rich121', 1454645647, '486465453442343', 'korra.jpg', 'ICT'),
(6, 'iets', 'fjdkslafjasd;lkjfadklsjl', 'fjkdlafjdslajfdslj', 'fjdsaklfjsdal;kj', 'kljfdslakjfsadkljkl', '2728AW', '0629605380', 123456789, 'NJKLQNS', 'KLDCJDKLFJDKLNfkNEDQ', 'ICT');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `function` varchar(30) NOT NULL,
  `mob_tel` varchar(10) NOT NULL,
  `vast_tel` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `avatar`, `firstname`, `lastname`, `function`, `mob_tel`, `vast_tel`) VALUES
(1, 'fabiano', 'd95e9796398a6087d3fb67947e5776c26b264733', 'f@meijer.nl', 'Cool-Wallpapers-3B9.jpg', 'Fabiano', 'Meijer', 'owner', '0612345678', '0701234567'),
(2, 'bob', '48181acd22b3edaebc8a447868a7df7ce629920a', 'bob@bob.bob', 'bob_de_bouwer.png', 'Bob', 'Ruis', 'ontwerper', '0612345678', '0701234567'),
(17, 'dit', '925cb33436e2016e72c7f27b516c32f7f72d8bcd', 'dit@hotmail.com', '', 'Bob', 'Ruis', 'Applicatie Ontwikkelaar', '0629605380', '0709999999'),
(18, 'flesjewater', '925cb33436e2016e72c7f27b516c32f7f72d8bcd', 'flesje@hotmail.com', '', 'Bob', 'Ruis', 'Eigenaar', '0629605380', '0702525454');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_mail` (`email`),
  ADD UNIQUE KEY `gebruikersnaam_2` (`username`),
  ADD KEY `gebruikersnaam` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
