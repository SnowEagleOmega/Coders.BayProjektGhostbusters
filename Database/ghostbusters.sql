-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Dez 2019 um 14:36
-- Server-Version: 10.1.37-MariaDB
-- PHP-Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `ghostbusters`
--
CREATE DATABASE IF NOT EXISTS `ghostbusters` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ghostbusters`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sighting`
--

CREATE TABLE `sighting` (
  `sightID` int(15) NOT NULL,
  `sight_location` varchar(500) DEFAULT NULL,
  `sight_kind` varchar(42) DEFAULT NULL,
  `sight_description` varchar(2000) DEFAULT NULL,
  `user_userID` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `sighting`
--

INSERT INTO `sighting` (`sightID`, `sight_location`, `sight_kind`, `sight_description`, `user_userID`) VALUES
(19, 'Traun', 'Poltergeist', 'Ich bin kein Poltergeist', 18),
(20, 'Linz', 'Demon', 'Me no Demon', 19),
(21, 'Linz', 'Wisp', 'Maybe I a Wisp', 20),
(25, 'Linz', 'Poltergeist', 'slÃ¶dfjskdfks', 24);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `userID` int(15) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`userID`, `firstname`, `lastname`, `email`) VALUES
(18, 'Polter', 'Geist', 'poltergeist@ghostmail.com'),
(19, 'Np', 'Demon', 'Demon@ghostmail.com'),
(20, 'maybe', 'Wisp', 'Wisp@ghostmail.com'),
(24, 'becca', 'rotti', 'rebirotti@irgendwas.at');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `sighting`
--
ALTER TABLE `sighting`
  ADD PRIMARY KEY (`sightID`),
  ADD KEY `user_userID` (`user_userID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `sighting`
--
ALTER TABLE `sighting`
  MODIFY `sightID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `sighting`
--
ALTER TABLE `sighting`
  ADD CONSTRAINT `sighting_ibfk_1` FOREIGN KEY (`user_userID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
