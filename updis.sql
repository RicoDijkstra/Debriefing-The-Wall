-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 apr 2019 om 09:24
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uploaddisplay`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `updis`
--

CREATE TABLE `updis` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `updis`
--

INSERT INTO `updis` (`id`, `name`, `title`, `description`) VALUES
(156, '200w.gif', 'K man', 'wtf'),
(158, 'gasoline ding.png', 'Gasoline', 'Gasoline'),
(159, 'badge.JPG', 'hoppa', 'hoppetee'),
(160, 'Achtergrond nieuw scratch.png', 'tief', 'tiet'),
(163, 'genjihanzo.jpg', 'cringe', 'yikes'),
(164, 'boom 2 knip klaar.png', 'w', 'et'),
(165, 'boom 2 knip klaar.png', 'w', 'et'),
(166, 'boom 2 knip klaar.png', 'w', 'et'),
(167, 'fietser.jpg', 'fietsings', 'bikares');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `updis`
--
ALTER TABLE `updis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `updis`
--
ALTER TABLE `updis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
