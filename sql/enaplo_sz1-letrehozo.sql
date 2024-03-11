-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Már 11. 20:02
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `enaplo_sz1`
--
CREATE DATABASE IF NOT EXISTS `enaplo_sz1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `enaplo_sz1`;

DELIMITER $$
--
-- Eljárások
--
DROP PROCEDURE IF EXISTS `diakfelvetel`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `diakfelvetel` (`inev` VARCHAR(45), `ioktazon` BIGINT, `iosztaly_id` INT, `iszuldatum` DATE, `iszulhely` VARCHAR(45), `ianyja_neve` VARCHAR(45), `ilakcim` VARCHAR(45), `iemail` TEXT)   BEGIN
DECLARE jogid INT DEFAULT 1;
DECLARE userid INT DEFAULT 0;
SELECT id INTO jogid FROM jogok WHERE megnevezes = "diák";
INSERT INTO felhasznalok (name, password, email, jog_id) VALUES (ioktazon, iszuldatum, iemail, jogid);
SELECT id INTO userid FROM felhasznalok WHERE email = iemail;
INSERT INTO diakok(oktazon, osztaly_id, nev, szuldatum, szulhely, anyja_neve, lakcim, felhasznalo_id) VALUES (ioktazon, iosztaly_id, iszuldatum, iszulhely, ianyja_neve, ilakcim, userid);
END$$

DROP PROCEDURE IF EXISTS `tanarfelvetel`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `tanarfelvetel` (`inev` VARCHAR(45), `iusername` TEXT, `ipassword` TEXT, `iemail` TEXT)   BEGIN
DECLARE jogid INT DEFAULT 1;
DECLARE userid INT DEFAULT 0;
SELECT id INTO jogid FROM jogok WHERE megnevezes = "tanár";
INSERT INTO felhasznalok (name, password, email, jog_id) VALUES (iusername, ipassword, iemail, jogid);
SELECT id INTO userid FROM felhasznalok WHERE name = iusername AND email = iemail;
INSERT INTO tanarok(nev, felhasznalo_id) VALUES (inev, userid);
END$$

DROP PROCEDURE IF EXISTS `tantargy_feltolt`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `tantargy_feltolt` (IN `tantargy` VARCHAR(45))   INSERT INTO tantargyak (megnevezes)
SELECT tantargy WHERE (SELECT count(megnevezes) FROM tantargyak WHERE tantargy = megnevezes) = 0$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `beallitasok`
--

DROP TABLE IF EXISTS `beallitasok`;
CREATE TABLE `beallitasok` (
  `felhasznalo_id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `diakok`
--

DROP TABLE IF EXISTS `diakok`;
CREATE TABLE `diakok` (
  `oktazon` bigint(20) NOT NULL,
  `osztaly_id` int(11) NOT NULL,
  `nev` varchar(45) NOT NULL,
  `szuldatum` date NOT NULL,
  `szulhely` varchar(45) NOT NULL,
  `anyja_neve` varchar(45) NOT NULL,
  `lakcim` varchar(45) NOT NULL,
  `felhasznalo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- A tábla adatainak kiíratása `diakok`
--

INSERT INTO `diakok` (`oktazon`, `osztaly_id`, `nev`, `szuldatum`, `szulhely`, `anyja_neve`, `lakcim`, `felhasznalo_id`) VALUES
(72012345678, 1, 'Kis Pista', '1972-01-23', 'Budapest', 'Mária József', '1234 Város, utca utca házszám.', 15);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ertekelesek`
--

DROP TABLE IF EXISTS `ertekelesek`;
CREATE TABLE `ertekelesek` (
  `orarend_id` int(11) NOT NULL,
  `diakok_oktazon` bigint(20) NOT NULL,
  `tipus_id` int(11) NOT NULL,
  `leiras` varchar(45) NOT NULL,
  `ertekeles` int(1) NOT NULL,
  `szazalek` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ertekeles_tipusok`
--

DROP TABLE IF EXISTS `ertekeles_tipusok`;
CREATE TABLE `ertekeles_tipusok` (
  `id` int(11) NOT NULL,
  `leiras` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='							';

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

DROP TABLE IF EXISTS `felhasznalok`;
CREATE TABLE `felhasznalok` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `telszam` int(11) DEFAULT NULL,
  `jog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `name`, `password`, `email`, `telszam`, `jog_id`) VALUES
(13, 'Rendszergazda', '$2y$12$4kd4cHgBo4zgH6sXghRUROYgeKpfxM9y1T0cMtKA1ItzIMIgk4Oie', 'admin@admin.hu', NULL, 4),
(14, 'pista.bacsi', '$2y$12$J278ZGx8sPb35Ehhm4AECuvRb.9esd6eRuNTkHkrnM8qKEVe6xND6', 'pista@bacsi.hu', NULL, 2),
(15, '72012345678', '$2y$12$/nlAFNzObJg8OusuVUsaL.dQdkeuYExGQTDhOOQFLzQj0RgV02Zwa', 'kis.pista@gmail.com', NULL, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hianyzasok`
--

DROP TABLE IF EXISTS `hianyzasok`;
CREATE TABLE `hianyzasok` (
  `ora_id` int(11) NOT NULL,
  `diakok_oktazon` bigint(20) NOT NULL,
  `keses` tinyint(1) NOT NULL,
  `keses_perc` int(11) DEFAULT NULL,
  `igazolasok_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `igazolasok`
--

DROP TABLE IF EXISTS `igazolasok`;
CREATE TABLE `igazolasok` (
  `id` int(11) NOT NULL,
  `megnevezes` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `jogok`
--

DROP TABLE IF EXISTS `jogok`;
CREATE TABLE `jogok` (
  `id` int(11) NOT NULL,
  `megnevezes` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- A tábla adatainak kiíratása `jogok`
--

INSERT INTO `jogok` (`id`, `megnevezes`) VALUES
(1, 'diák'),
(2, 'tanár'),
(3, 'intézményvezető'),
(4, 'admin');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orarend`
--

DROP TABLE IF EXISTS `orarend`;
CREATE TABLE `orarend` (
  `id` int(11) NOT NULL,
  `osztaly_id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `ora_szama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orarend-tanitott`
--

DROP TABLE IF EXISTS `orarend-tanitott`;
CREATE TABLE `orarend-tanitott` (
  `orarend_id` int(11) NOT NULL,
  `tantargyak-tanitott_kapcs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `osztalyok`
--

DROP TABLE IF EXISTS `osztalyok`;
CREATE TABLE `osztalyok` (
  `osztaly_id` int(11) NOT NULL,
  `osztalyfonok_id` int(11) NOT NULL,
  `megnevezes` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- A tábla adatainak kiíratása `osztalyok`
--

INSERT INTO `osztalyok` (`osztaly_id`, `osztalyfonok_id`, `megnevezes`) VALUES
(1, 4, '14/Pista');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tanarok`
--

DROP TABLE IF EXISTS `tanarok`;
CREATE TABLE `tanarok` (
  `tanar_id` int(11) NOT NULL,
  `nev` varchar(45) NOT NULL,
  `felhasznalo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- A tábla adatainak kiíratása `tanarok`
--

INSERT INTO `tanarok` (`tanar_id`, `nev`, `felhasznalo_id`) VALUES
(4, 'Pista bácsi', 14);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tanitott-tantargyak`
--

DROP TABLE IF EXISTS `tanitott-tantargyak`;
CREATE TABLE `tanitott-tantargyak` (
  `id` int(11) NOT NULL,
  `tantargyak_tantargy_id` int(11) NOT NULL,
  `tanarok_tanar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tantargyak`
--

DROP TABLE IF EXISTS `tantargyak`;
CREATE TABLE `tantargyak` (
  `tantargy_id` int(11) NOT NULL,
  `megnevezes` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `temak`
--

DROP TABLE IF EXISTS `temak`;
CREATE TABLE `temak` (
  `id` int(11) NOT NULL,
  `megnevezes` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `beallitasok`
--
ALTER TABLE `beallitasok`
  ADD PRIMARY KEY (`felhasznalo_id`),
  ADD KEY `fk_beallitasok_felhasznalok1_idx` (`felhasznalo_id`),
  ADD KEY `fk_beallitasok_temak1_idx` (`tema_id`);

--
-- A tábla indexei `diakok`
--
ALTER TABLE `diakok`
  ADD PRIMARY KEY (`oktazon`),
  ADD KEY `fk_diakok_osztalyok1_idx` (`osztaly_id`),
  ADD KEY `fk_diakok_felhasznalok1_idx` (`felhasznalo_id`);

--
-- A tábla indexei `ertekelesek`
--
ALTER TABLE `ertekelesek`
  ADD PRIMARY KEY (`orarend_id`,`diakok_oktazon`),
  ADD KEY `fk_orarend_has_diakok_diakok1_idx` (`diakok_oktazon`),
  ADD KEY `fk_orarend_has_diakok_orarend1_idx` (`orarend_id`),
  ADD KEY `fk_ertekelesek_ertekeles_tipusok1_idx` (`tipus_id`);

--
-- A tábla indexei `ertekeles_tipusok`
--
ALTER TABLE `ertekeles_tipusok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_felhasznalok_jogok1_idx` (`jog_id`);

--
-- A tábla indexei `hianyzasok`
--
ALTER TABLE `hianyzasok`
  ADD PRIMARY KEY (`ora_id`,`diakok_oktazon`),
  ADD KEY `fk_orarend_has_hianyzasok_orarend1_idx` (`ora_id`),
  ADD KEY `fk_orarend_has_hianyzasok_diakok1_idx` (`diakok_oktazon`),
  ADD KEY `fk_orarend_has_hianyzasok_igazolasok1_idx` (`igazolasok_id`);

--
-- A tábla indexei `igazolasok`
--
ALTER TABLE `igazolasok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `jogok`
--
ALTER TABLE `jogok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `orarend`
--
ALTER TABLE `orarend`
  ADD PRIMARY KEY (`id`),
  ADD KEY `osztaly_id` (`osztaly_id`);

--
-- A tábla indexei `orarend-tanitott`
--
ALTER TABLE `orarend-tanitott`
  ADD PRIMARY KEY (`orarend_id`),
  ADD KEY `fk_orarend-tanitott_kapcs_tantargyak-tanitott_kapcs1_idx` (`tantargyak-tanitott_kapcs_id`);

--
-- A tábla indexei `osztalyok`
--
ALTER TABLE `osztalyok`
  ADD PRIMARY KEY (`osztaly_id`),
  ADD KEY `fk_osztalyok_tanarok_idx` (`osztalyfonok_id`);

--
-- A tábla indexei `tanarok`
--
ALTER TABLE `tanarok`
  ADD PRIMARY KEY (`tanar_id`),
  ADD KEY `fk_tanarok_felhasznalok1_idx` (`felhasznalo_id`);

--
-- A tábla indexei `tanitott-tantargyak`
--
ALTER TABLE `tanitott-tantargyak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tantargyak_has_tanitott_tantargyak_tantargyak1_idx` (`tantargyak_tantargy_id`),
  ADD KEY `fk_tantargyak-tanitott_kapcs_tanarok1_idx` (`tanarok_tanar_id`);

--
-- A tábla indexei `tantargyak`
--
ALTER TABLE `tantargyak`
  ADD PRIMARY KEY (`tantargy_id`);

--
-- A tábla indexei `temak`
--
ALTER TABLE `temak`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `jogok`
--
ALTER TABLE `jogok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `orarend`
--
ALTER TABLE `orarend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `osztalyok`
--
ALTER TABLE `osztalyok`
  MODIFY `osztaly_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `tanarok`
--
ALTER TABLE `tanarok`
  MODIFY `tanar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `tanitott-tantargyak`
--
ALTER TABLE `tanitott-tantargyak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `beallitasok`
--
ALTER TABLE `beallitasok`
  ADD CONSTRAINT `fk_beallitasok_felhasznalok1` FOREIGN KEY (`felhasznalo_id`) REFERENCES `felhasznalok` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_beallitasok_temak1` FOREIGN KEY (`tema_id`) REFERENCES `temak` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Megkötések a táblához `diakok`
--
ALTER TABLE `diakok`
  ADD CONSTRAINT `fk_diakok_felhasznalok1` FOREIGN KEY (`felhasznalo_id`) REFERENCES `felhasznalok` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_diakok_osztalyok1` FOREIGN KEY (`osztaly_id`) REFERENCES `osztalyok` (`osztaly_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Megkötések a táblához `ertekelesek`
--
ALTER TABLE `ertekelesek`
  ADD CONSTRAINT `fk_ertekelesek_ertekeles_tipusok1` FOREIGN KEY (`tipus_id`) REFERENCES `ertekeles_tipusok` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orarend_has_diakok_diakok1` FOREIGN KEY (`diakok_oktazon`) REFERENCES `diakok` (`oktazon`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orarend_has_diakok_orarend1` FOREIGN KEY (`orarend_id`) REFERENCES `orarend` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Megkötések a táblához `hianyzasok`
--
ALTER TABLE `hianyzasok`
  ADD CONSTRAINT `fk_orarend_has_hianyzasok_diakok1` FOREIGN KEY (`diakok_oktazon`) REFERENCES `diakok` (`oktazon`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orarend_has_hianyzasok_igazolasok1` FOREIGN KEY (`igazolasok_id`) REFERENCES `igazolasok` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orarend_has_hianyzasok_orarend1` FOREIGN KEY (`ora_id`) REFERENCES `orarend` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
