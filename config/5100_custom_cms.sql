-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Jan 2021 um 08:54
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `5100_custom_cms`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `alt` varchar(250) NOT NULL DEFAULT 'eine Abbildung',
  `filename` varchar(250) NOT NULL,
  `id_folder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `images`
--

INSERT INTO `images` (`id`, `alt`, `filename`, `id_folder`) VALUES
(1, 'Messer auf schwarzen Leder', 'messer.jpg', 5),
(2, 'Nadeln auf schwarzem Leder', 'nadeln.jpg', 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `image_folder`
--

CREATE TABLE `image_folder` (
  `id` int(11) NOT NULL,
  `folder` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `image_folder`
--

INSERT INTO `image_folder` (`id`, `folder`) VALUES
(1, 'logo_patterns'),
(2, 'favicon'),
(3, 'new'),
(4, 'work'),
(5, 'tools');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `text` int(11) NOT NULL,
  `bg_image` int(11) NOT NULL,
  `top_image` int(11) NOT NULL,
  `mid_image` int(11) NOT NULL,
  `bot_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(250) NOT NULL DEFAULT 'hammer.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `tools`
--

INSERT INTO `tools` (`id`, `title`, `subtitle`, `text`, `image`) VALUES
(2, '', '', '', ''),
(4, 'gdfgse', 'ztrzrzr', 'zzzzzzzzzzzzzz', 'nadeln.jpg'),
(9, 'ii', 'ooo', 'üüüüü üüüüüüüüüüü üüüüüüüüüüüüüüüüüüüüü üüüüüüüüüüüüüüüü üüüüüüüüüü üüüüüüüüüü üüüüüüüüüüü üüüüüüüüüüüü üüüüüüüüüüüüüüüüüüüü üüüüüüüü üüüü üüüüüüüüüüüüü üüüüüüüü üüüüüüü üüüüüüüüüüüüüü ', 'messer.jpg'),
(10, 'new', 'new', 'hi hallo', 'messer.jpg'),
(13, 'again', 'new', 'itwm', 'messer.jpg'),
(14, 'j', 'j', 'jjjjj', 'jzz.jpg'),
(15, 'messer', 'schneidet', 'Messer jfkljflds', 'messer.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `login_try` int(3) NOT NULL DEFAULT 0,
  `banned_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `password`, `role`, `login_try`, `banned_at`) VALUES
(1, 'lauralea@ledertatze.com', 'Laura Lea', 'Mueller', '$2y$10$kvesD0pTOWo.VrCHiQykJuvETvM.rz2SbkgXoa0TgXFEUlSfDfOpi', 'admin', 0, NULL),
(2, 'cmsuser@ledertatze.com', 'cms', 'user', '$2y$10$Bmp1bnVlURxW6urgqbb7duE0cSJ5BSNNYfCtlnQ5vHcjdALl7V7nW', 'user', 0, NULL),
(13, 'h@d.c', 'hi', 'new', '$2y$10$gaFbZzTXbD/lzlmAZ3sjqO8oqtP5RfBSsqZG91p5mlVkMj1cTMM7u', 'user', 2, '2021-01-19 14:05:03');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_images_folder` (`id_folder`);

--
-- Indizes für die Tabelle `image_folder`
--
ALTER TABLE `image_folder`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_images_bg` (`bg_image`),
  ADD KEY `fk_images_top` (`top_image`),
  ADD KEY `fk_images_mid` (`mid_image`),
  ADD KEY `fk_images_bot` (`bot_image`);

--
-- Indizes für die Tabelle `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `image_folder`
--
ALTER TABLE `image_folder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_folder` FOREIGN KEY (`id_folder`) REFERENCES `image_folder` (`id`);

--
-- Constraints der Tabelle `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_images_bg` FOREIGN KEY (`bg_image`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_images_bot` FOREIGN KEY (`bot_image`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_images_mid` FOREIGN KEY (`mid_image`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_images_top` FOREIGN KEY (`top_image`) REFERENCES `images` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
