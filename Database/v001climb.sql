-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Jan 2020 um 09:43
-- Server-Version: 10.1.40-MariaDB
-- PHP-Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `v001climb`
--
CREATE DATABASE IF NOT EXISTS `v001climb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `v001climb`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_comment`
--

CREATE TABLE `xtf1_comment` (
  `commentid` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `route` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_design`
--

CREATE TABLE `xtf1_design` (
  `designid` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `xtf1_design`
--

INSERT INTO `xtf1_design` (`designid`, `name`) VALUES
(1, 'DEFAULT'),
(2, 'DARKMODE');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_follow`
--

CREATE TABLE `xtf1_follow` (
  `followid` int(11) NOT NULL,
  `follower` int(11) DEFAULT NULL,
  `subject` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_job`
--

CREATE TABLE `xtf1_job` (
  `jobid` int(11) NOT NULL,
  `jobname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `location` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_like`
--

CREATE TABLE `xtf1_like` (
  `likeid` int(11) NOT NULL,
  `route` int(11) DEFAULT NULL,
  `vote` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_location`
--

CREATE TABLE `xtf1_location` (
  `locationid` int(11) NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_message`
--

CREATE TABLE `xtf1_message` (
  `messageid` int(11) NOT NULL,
  `transmitter` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `subject` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `message_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_personaldata`
--

CREATE TABLE `xtf1_personaldata` (
  `personalid` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date DEFAULT '1900-01-01',
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_profile`
--

CREATE TABLE `xtf1_profile` (
  `profileid` int(11) NOT NULL,
  `apeindex` float(3,2) NOT NULL,
  `height` int(11) NOT NULL,
  `climbingscore` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` blob,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_rating`
--

CREATE TABLE `xtf1_rating` (
  `ratingid` int(11) NOT NULL,
  `route` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_role`
--

CREATE TABLE `xtf1_role` (
  `roleid` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `xtf1_role`
--

INSERT INTO `xtf1_role` (`roleid`, `name`) VALUES
(1, 'Boulderer'),
(2, 'Schrauber'),
(3, 'Hallenbesitzer'),
(4, 'Admin');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_route`
--

CREATE TABLE `xtf1_route` (
  `routeid` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL,
  `location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_scale`
--

CREATE TABLE `xtf1_scale` (
  `scaleid` int(11) NOT NULL,
  `scale_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `xtf1_scale`
--

INSERT INTO `xtf1_scale` (`scaleid`, `scale_name`) VALUES
(1, 'UIAA'),
(2, 'Französisch'),
(3, 'Sächsisch (Elbsandstein)'),
(4, 'British (Tech)'),
(5, 'British (Adj)'),
(6, 'USA (Sierra)'),
(7, 'Nordic (FIN)'),
(8, 'Nordic (SWE/NOR)'),
(9, 'V-Scale'),
(10, 'Fb-Skala'),
(11, 'Techn. Klettern'),
(12, 'Eisklettern');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_scalerating`
--

CREATE TABLE `xtf1_scalerating` (
  `scaleratingid` int(11) NOT NULL,
  `scaleid` int(11) DEFAULT NULL,
  `grade` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_token`
--

CREATE TABLE `xtf1_token` (
  `tokenid` int(11) NOT NULL,
  `token` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_user`
--

CREATE TABLE `xtf1_user` (
  `userid` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` int(11) NOT NULL DEFAULT '1',
  `design` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `xtf1_userlocation`
--

CREATE TABLE `xtf1_userlocation` (
  `userlocationid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `locationid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `xtf1_comment`
--
ALTER TABLE `xtf1_comment`
  ADD PRIMARY KEY (`commentid`),
  ADD KEY `user` (`user`),
  ADD KEY `rating` (`rating`),
  ADD KEY `route` (`route`);

--
-- Indizes für die Tabelle `xtf1_design`
--
ALTER TABLE `xtf1_design`
  ADD PRIMARY KEY (`designid`);

--
-- Indizes für die Tabelle `xtf1_follow`
--
ALTER TABLE `xtf1_follow`
  ADD PRIMARY KEY (`followid`),
  ADD KEY `follower` (`follower`),
  ADD KEY `subject` (`subject`);

--
-- Indizes für die Tabelle `xtf1_job`
--
ALTER TABLE `xtf1_job`
  ADD PRIMARY KEY (`jobid`),
  ADD KEY `location` (`location`);

--
-- Indizes für die Tabelle `xtf1_like`
--
ALTER TABLE `xtf1_like`
  ADD PRIMARY KEY (`likeid`),
  ADD KEY `route` (`route`),
  ADD KEY `user` (`user`);

--
-- Indizes für die Tabelle `xtf1_location`
--
ALTER TABLE `xtf1_location`
  ADD PRIMARY KEY (`locationid`);

--
-- Indizes für die Tabelle `xtf1_message`
--
ALTER TABLE `xtf1_message`
  ADD PRIMARY KEY (`messageid`),
  ADD KEY `transmitter` (`transmitter`),
  ADD KEY `receiver` (`receiver`);

--
-- Indizes für die Tabelle `xtf1_personaldata`
--
ALTER TABLE `xtf1_personaldata`
  ADD PRIMARY KEY (`personalid`),
  ADD KEY `user` (`user`);

--
-- Indizes für die Tabelle `xtf1_profile`
--
ALTER TABLE `xtf1_profile`
  ADD PRIMARY KEY (`profileid`),
  ADD KEY `user` (`user`);

--
-- Indizes für die Tabelle `xtf1_rating`
--
ALTER TABLE `xtf1_rating`
  ADD PRIMARY KEY (`ratingid`),
  ADD KEY `rating` (`rating`),
  ADD KEY `route` (`route`);

--
-- Indizes für die Tabelle `xtf1_role`
--
ALTER TABLE `xtf1_role`
  ADD PRIMARY KEY (`roleid`);

--
-- Indizes für die Tabelle `xtf1_route`
--
ALTER TABLE `xtf1_route`
  ADD PRIMARY KEY (`routeid`),
  ADD KEY `user` (`user`),
  ADD KEY `location` (`location`);

--
-- Indizes für die Tabelle `xtf1_scale`
--
ALTER TABLE `xtf1_scale`
  ADD PRIMARY KEY (`scaleid`);

--
-- Indizes für die Tabelle `xtf1_scalerating`
--
ALTER TABLE `xtf1_scalerating`
  ADD PRIMARY KEY (`scaleratingid`),
  ADD KEY `scaleid` (`scaleid`);

--
-- Indizes für die Tabelle `xtf1_token`
--
ALTER TABLE `xtf1_token`
  ADD PRIMARY KEY (`tokenid`),
  ADD KEY `user` (`user`);

--
-- Indizes für die Tabelle `xtf1_user`
--
ALTER TABLE `xtf1_user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role` (`role`),
  ADD KEY `design` (`design`);

--
-- Indizes für die Tabelle `xtf1_userlocation`
--
ALTER TABLE `xtf1_userlocation`
  ADD PRIMARY KEY (`userlocationid`),
  ADD UNIQUE KEY `unique_index` (`userid`,`locationid`),
  ADD KEY `locationid` (`locationid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `xtf1_comment`
--
ALTER TABLE `xtf1_comment`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `xtf1_design`
--
ALTER TABLE `xtf1_design`
  MODIFY `designid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `xtf1_like`
--
ALTER TABLE `xtf1_like`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `xtf1_location`
--
ALTER TABLE `xtf1_location`
  MODIFY `locationid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `xtf1_message`
--
ALTER TABLE `xtf1_message`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `xtf1_personaldata`
--
ALTER TABLE `xtf1_personaldata`
  MODIFY `personalid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `xtf1_profile`
--
ALTER TABLE `xtf1_profile`
  MODIFY `profileid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `xtf1_rating`
--
ALTER TABLE `xtf1_rating`
  MODIFY `ratingid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `xtf1_role`
--
ALTER TABLE `xtf1_role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `xtf1_route`
--
ALTER TABLE `xtf1_route`
  MODIFY `routeid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `xtf1_scale`
--
ALTER TABLE `xtf1_scale`
  MODIFY `scaleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `xtf1_scalerating`
--
ALTER TABLE `xtf1_scalerating`
  MODIFY `scaleratingid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `xtf1_token`
--
ALTER TABLE `xtf1_token`
  MODIFY `tokenid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `xtf1_user`
--
ALTER TABLE `xtf1_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `xtf1_comment`
--
ALTER TABLE `xtf1_comment`
  ADD CONSTRAINT `xtf1_comment_ibfk_1` FOREIGN KEY (`user`) REFERENCES `xtf1_user` (`userid`),
  ADD CONSTRAINT `xtf1_comment_ibfk_2` FOREIGN KEY (`rating`) REFERENCES `xtf1_rating` (`ratingid`),
  ADD CONSTRAINT `xtf1_comment_ibfk_3` FOREIGN KEY (`route`) REFERENCES `xtf1_route` (`routeid`);

--
-- Constraints der Tabelle `xtf1_follow`
--
ALTER TABLE `xtf1_follow`
  ADD CONSTRAINT `xtf1_follow_ibfk_1` FOREIGN KEY (`follower`) REFERENCES `xtf1_user` (`userid`),
  ADD CONSTRAINT `xtf1_follow_ibfk_2` FOREIGN KEY (`subject`) REFERENCES `xtf1_user` (`userid`);

--
-- Constraints der Tabelle `xtf1_job`
--
ALTER TABLE `xtf1_job`
  ADD CONSTRAINT `xtf1_job_ibfk_1` FOREIGN KEY (`location`) REFERENCES `xtf1_location` (`locationid`);

--
-- Constraints der Tabelle `xtf1_like`
--
ALTER TABLE `xtf1_like`
  ADD CONSTRAINT `xtf1_like_ibfk_1` FOREIGN KEY (`route`) REFERENCES `xtf1_route` (`routeid`),
  ADD CONSTRAINT `xtf1_like_ibfk_2` FOREIGN KEY (`user`) REFERENCES `xtf1_user` (`userid`);

--
-- Constraints der Tabelle `xtf1_message`
--
ALTER TABLE `xtf1_message`
  ADD CONSTRAINT `xtf1_message_ibfk_1` FOREIGN KEY (`transmitter`) REFERENCES `xtf1_user` (`userid`),
  ADD CONSTRAINT `xtf1_message_ibfk_2` FOREIGN KEY (`receiver`) REFERENCES `xtf1_user` (`userid`);

--
-- Constraints der Tabelle `xtf1_personaldata`
--
ALTER TABLE `xtf1_personaldata`
  ADD CONSTRAINT `xtf1_personaldata_ibfk_1` FOREIGN KEY (`user`) REFERENCES `xtf1_user` (`userid`);

--
-- Constraints der Tabelle `xtf1_profile`
--
ALTER TABLE `xtf1_profile`
  ADD CONSTRAINT `xtf1_profile_ibfk_1` FOREIGN KEY (`user`) REFERENCES `xtf1_user` (`userid`);

--
-- Constraints der Tabelle `xtf1_rating`
--
ALTER TABLE `xtf1_rating`
  ADD CONSTRAINT `xtf1_rating_ibfk_1` FOREIGN KEY (`rating`) REFERENCES `xtf1_scalerating` (`scaleratingid`),
  ADD CONSTRAINT `xtf1_rating_ibfk_2` FOREIGN KEY (`route`) REFERENCES `xtf1_route` (`routeid`);

--
-- Constraints der Tabelle `xtf1_route`
--
ALTER TABLE `xtf1_route`
  ADD CONSTRAINT `xtf1_route_ibfk_1` FOREIGN KEY (`user`) REFERENCES `xtf1_user` (`userid`),
  ADD CONSTRAINT `xtf1_route_ibfk_2` FOREIGN KEY (`location`) REFERENCES `xtf1_location` (`locationid`);

--
-- Constraints der Tabelle `xtf1_scalerating`
--
ALTER TABLE `xtf1_scalerating`
  ADD CONSTRAINT `xtf1_scalerating_ibfk_1` FOREIGN KEY (`scaleid`) REFERENCES `xtf1_scale` (`scaleid`);

--
-- Constraints der Tabelle `xtf1_token`
--
ALTER TABLE `xtf1_token`
  ADD CONSTRAINT `xtf1_token_ibfk_1` FOREIGN KEY (`user`) REFERENCES `xtf1_user` (`userid`);

--
-- Constraints der Tabelle `xtf1_user`
--
ALTER TABLE `xtf1_user`
  ADD CONSTRAINT `xtf1_user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `xtf1_role` (`roleid`),
  ADD CONSTRAINT `xtf1_user_ibfk_2` FOREIGN KEY (`design`) REFERENCES `xtf1_design` (`designid`);

--
-- Constraints der Tabelle `xtf1_userlocation`
--
ALTER TABLE `xtf1_userlocation`
  ADD CONSTRAINT `xtf1_userlocation_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `xtf1_user` (`userid`),
  ADD CONSTRAINT `xtf1_userlocation_ibfk_2` FOREIGN KEY (`locationid`) REFERENCES `xtf1_location` (`locationid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
