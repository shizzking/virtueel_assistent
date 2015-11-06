-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 05 nov 2015 om 15:28
-- Serverversie: 5.6.24
-- PHP-versie: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `virtueel_assistent`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zip` text NOT NULL,
  `numb` int(10) NOT NULL,
  `kvk` int(15) NOT NULL,
  `btwnr` text NOT NULL,
  `avatar` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `company`
--

INSERT INTO `company` (`company_id`, `name`, `description`, `email`, `street`, `zip`, `numb`, `kvk`, `btwnr`,`avatar`) VALUES
(1, 'Fabiano_inc', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren ''60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.', 'f.meijer@fabiano.nl', 'fabiano van mooiboylaan', '1111AA', 1, 2147483647, 'NL012345678B01','fabiano.jpg'),
(2, 'Bob & Co', 'Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren ''60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.', 'bobby@is.back', 'bobbyjaanlandlaan', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `company_dienst`
--

CREATE TABLE IF NOT EXISTS `company_dienst` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `dienst_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `company_dienst`
--

INSERT INTO `company_dienst` (`id`, `company_id`, `dienst_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contactpersonen`
--

CREATE TABLE IF NOT EXISTS `contactpersonen` (
  `contact_id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `functie` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vast_tel` varchar(10) NOT NULL,
  `mob_tel` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `contactpersonen`
--

INSERT INTO `contactpersonen` (`contact_id`, `voornaam`, `achternaam`, `username`, `password`, `functie`, `email`, `vast_tel`, `mob_tel`) VALUES
(1, 'Bob', 'Ruis', 'admin', 'contactpassword', 'admin', 'asdfsdafasd@hotmail.com', '0629605380', '5656565656'),
(3, 'Jeffrey', 'appel', 'blabla', 'iets', 'iets', 'iets@hotmail.com', '2315661456', '1564564665');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `diensten`
--

CREATE TABLE IF NOT EXISTS `diensten` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `diensten`
--

INSERT INTO `diensten` (`ID`, `name`) VALUES
(1, 'Schoonmaken'),
(2, 'Programmeren');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `content` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `company_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `function` varchar(30) NOT NULL,
  `mob_tel` varchar(10) NOT NULL,
  `vast_tel` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `company_id`, `username`, `password`, `email`, `avatar`, `firstname`, `lastname`, `function`, `mob_tel`, `vast_tel`) VALUES
(1, 0, 'fabiano', 'd95e9796398a6087d3fb67947e5776c26b264733', 'f@meijer.nl', 'Cool-Wallpapers-3B9.jpg', 'Fabiano', 'Meijer', '', '', ''),
(2, 0, 'bob', '48181acd22b3edaebc8a447868a7df7ce629920a', 'bob@bob.bob', 'bob_de_bouwer.png', 'bob', 'ruis', 'ontwerper', '0612345678', '0701234567'),
(9, 0, 'bobber', 'bobber', 'bobber@hotmail.com', '', 'Bob', 'Ruis', 'admin', '0629605380', '0701234567'),
(14, 0, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@test.nl', '', '', '', '', '', ''),
(15, 0, 'test1', '8efd86fb78a56a5145ed7739dcb00c78581c5375', 'test@test.nl1', '', '', '', '', '', ''),
(16, 0, 'fdjakfjdsak', '3da541559918a808c2402bba5012f6c60b27661c', 'aaaa@hotmail.com', '', '', '', '', '', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexen voor tabel `company_dienst`
--
ALTER TABLE `company_dienst`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `contactpersonen`
--
ALTER TABLE `contactpersonen`
  ADD PRIMARY KEY (`contact_id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexen voor tabel `diensten`
--
ALTER TABLE `diensten`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_mail` (`email`), ADD UNIQUE KEY `gebruikersnaam_2` (`username`), ADD KEY `gebruikersnaam` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `company_dienst`
--
ALTER TABLE `company_dienst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `contactpersonen`
--
ALTER TABLE `contactpersonen`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `diensten`
--
ALTER TABLE `diensten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
