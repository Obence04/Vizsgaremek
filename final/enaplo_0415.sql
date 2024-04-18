-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Ápr 15. 22:01
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
-- Adatbázis: `enaplo`
--
CREATE DATABASE IF NOT EXISTS `enaplo` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `enaplo`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `diakok`
--

CREATE TABLE `diakok` (
  `diak_id` bigint(20) NOT NULL,
  `diak_nev` varchar(45) NOT NULL,
  `diak_szuldatum` date NOT NULL,
  `diak_szulhely` varchar(45) NOT NULL,
  `diak_anyja` varchar(45) NOT NULL,
  `diak_lakcim` varchar(45) DEFAULT NULL,
  `oszt_id` int(11) NOT NULL,
  `fel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ertekelesek`
--

CREATE TABLE `ertekelesek` (
  `ert_id` int(11) NOT NULL,
  `ora_id` int(11) NOT NULL,
  `diak_id` bigint(20) NOT NULL,
  `ert_leiras` varchar(45) NOT NULL,
  `ert_jegy` int(1) NOT NULL,
  `ert_szazalek` int(4) NOT NULL,
  `ido_id` int(11) NOT NULL,
  `tip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ertidopontok`
--

CREATE TABLE `ertidopontok` (
  `ido_id` int(11) NOT NULL,
  `ido_nev` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `ertidopontok`
--

INSERT INTO `ertidopontok` (`ido_id`, `ido_nev`) VALUES
(1, 'Évközi értékelés'),
(2, 'Félévi értékelés'),
(3, 'Év végi értékelés');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `erttipusok`
--

CREATE TABLE `erttipusok` (
  `tip_id` int(11) NOT NULL,
  `tip_nev` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `erttipusok`
--

INSERT INTO `erttipusok` (`tip_id`, `tip_nev`) VALUES
(1, 'Írásbeli röpdolgozat'),
(2, 'Írásbeli témazáró dolgozat'),
(3, 'Szóbeli felelet'),
(4, 'Órai munka'),
(5, 'Projektfeladat'),
(6, 'Házi dolgozat'),
(7, 'Házi feladat'),
(8, 'Gyakorlati feladat');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `fel_id` int(11) NOT NULL,
  `fel_nev` text NOT NULL,
  `fel_jelszo` text NOT NULL,
  `fel_email` text NOT NULL,
  `fel_telszam` text DEFAULT NULL,
  `jog_id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`fel_id`, `fel_nev`, `fel_jelszo`, `fel_email`, `fel_telszam`, `jog_id`, `tema_id`) VALUES
(1, 'Admin', '$2y$12$eezrsyYnZ6v2rVcx1AVqQOyElxni/RlnZi/YjSdCa8z.4jWKqgt/y', 'admin@admin.hu', NULL, 4, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hianyzasok`
--

CREATE TABLE `hianyzasok` (
  `hia_id` int(11) NOT NULL,
  `ora_id` int(11) NOT NULL,
  `diak_id` bigint(20) NOT NULL,
  `hia_keses` tinyint(1) NOT NULL,
  `hia_perc` int(11) DEFAULT NULL,
  `iga_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `igazolasok`
--

CREATE TABLE `igazolasok` (
  `iga_id` int(11) NOT NULL,
  `iga_nev` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `igazolasok`
--

INSERT INTO `igazolasok` (`iga_id`, `iga_nev`) VALUES
(1, 'Szülői igazolás'),
(2, 'Orvosi igazolás'),
(3, 'Egyéb');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `jogok`
--

CREATE TABLE `jogok` (
  `jog_id` int(11) NOT NULL,
  `jog_nev` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `jogok`
--

INSERT INTO `jogok` (`jog_id`, `jog_nev`) VALUES
(1, 'diák'),
(2, 'tanár'),
(3, 'intézményvezető'),
(4, 'admin');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orak`
--

CREATE TABLE `orak` (
  `ora_id` int(11) NOT NULL,
  `oszt_id` int(11) NOT NULL,
  `ora_datum` date NOT NULL,
  `ora_szam` int(11) NOT NULL,
  `tanit_id` int(11) NOT NULL,
  `ora_terem` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Tábla szerkezet ehhez a táblához `osztalyok`
--

CREATE TABLE `osztalyok` (
  `oszt_id` int(11) NOT NULL,
  `oszt_nev` varchar(45) NOT NULL,
  `tanar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Tábla szerkezet ehhez a táblához `tanarok`
--

CREATE TABLE `tanarok` (
  `tanar_id` int(11) NOT NULL,
  `tanar_nev` varchar(45) NOT NULL,
  `fel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `tanarok`
--

INSERT INTO `tanarok` (`tanar_id`, `tanar_nev`, `fel_id`) VALUES
(1, 'Admin János', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tanitott`
--

CREATE TABLE `tanitott` (
  `tanit_id` int(11) NOT NULL,
  `tanar_id` int(11) NOT NULL,
  `tant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Tábla szerkezet ehhez a táblához `tantargyak`
--

CREATE TABLE `tantargyak` (
  `tant_id` int(11) NOT NULL,
  `tant_nev` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Tábla szerkezet ehhez a táblához `temak`
--

CREATE TABLE `temak` (
  `tema_id` int(11) NOT NULL,
  `tema_nev` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `temak`
--

INSERT INTO `temak` (`tema_id`, `tema_nev`) VALUES
(1, 'light'),
(2, 'dark'),
(3, 'spring'),
(4, 'summer'),
(5, 'autumn'),
(6, 'blue'),
(7, 'red');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `diakok`
--
ALTER TABLE `diakok`
  ADD PRIMARY KEY (`diak_id`),
  ADD KEY `oszt_id_idx` (`oszt_id`),
  ADD KEY `fel_id_idx` (`fel_id`);

--
-- A tábla indexei `ertekelesek`
--
ALTER TABLE `ertekelesek`
  ADD PRIMARY KEY (`ert_id`),
  ADD KEY `ora_idx` (`ora_id`),
  ADD KEY `diak_idx` (`diak_id`),
  ADD KEY `idopont_idx` (`ido_id`),
  ADD KEY `tipus_idx` (`tip_id`);

--
-- A tábla indexei `ertidopontok`
--
ALTER TABLE `ertidopontok`
  ADD PRIMARY KEY (`ido_id`);

--
-- A tábla indexei `erttipusok`
--
ALTER TABLE `erttipusok`
  ADD PRIMARY KEY (`tip_id`);

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`fel_id`),
  ADD KEY `jog_id_idx` (`jog_id`),
  ADD KEY `tema_id_idx` (`tema_id`);

--
-- A tábla indexei `hianyzasok`
--
ALTER TABLE `hianyzasok`
  ADD PRIMARY KEY (`hia_id`),
  ADD KEY `ora_idx` (`ora_id`),
  ADD KEY `diak_idx` (`diak_id`),
  ADD KEY `igazolas_idx` (`iga_id`);

--
-- A tábla indexei `igazolasok`
--
ALTER TABLE `igazolasok`
  ADD PRIMARY KEY (`iga_id`);

--
-- A tábla indexei `jogok`
--
ALTER TABLE `jogok`
  ADD PRIMARY KEY (`jog_id`);

--
-- A tábla indexei `orak`
--
ALTER TABLE `orak`
  ADD PRIMARY KEY (`ora_id`),
  ADD KEY `osztaly_idx` (`oszt_id`),
  ADD KEY `tanitott_idx` (`tanit_id`);

--
-- A tábla indexei `osztalyok`
--
ALTER TABLE `osztalyok`
  ADD PRIMARY KEY (`oszt_id`),
  ADD KEY `tanar_id_idx` (`tanar_id`);

--
-- A tábla indexei `tanarok`
--
ALTER TABLE `tanarok`
  ADD PRIMARY KEY (`tanar_id`),
  ADD KEY `fel_id_idx` (`fel_id`);

--
-- A tábla indexei `tanitott`
--
ALTER TABLE `tanitott`
  ADD PRIMARY KEY (`tanit_id`),
  ADD KEY `tantargy_idx` (`tant_id`),
  ADD KEY `tanar_idx` (`tanar_id`);

--
-- A tábla indexei `tantargyak`
--
ALTER TABLE `tantargyak`
  ADD PRIMARY KEY (`tant_id`);

--
-- A tábla indexei `temak`
--
ALTER TABLE `temak`
  ADD PRIMARY KEY (`tema_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `ertekelesek`
--
ALTER TABLE `ertekelesek`
  MODIFY `ert_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `ertidopontok`
--
ALTER TABLE `ertidopontok`
  MODIFY `ido_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `erttipusok`
--
ALTER TABLE `erttipusok`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `fel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `hianyzasok`
--
ALTER TABLE `hianyzasok`
  MODIFY `hia_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `igazolasok`
--
ALTER TABLE `igazolasok`
  MODIFY `iga_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `jogok`
--
ALTER TABLE `jogok`
  MODIFY `jog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `orak`
--
ALTER TABLE `orak`
  MODIFY `ora_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `osztalyok`
--
ALTER TABLE `osztalyok`
  MODIFY `oszt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `tanarok`
--
ALTER TABLE `tanarok`
  MODIFY `tanar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `tanitott`
--
ALTER TABLE `tanitott`
  MODIFY `tanit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `tantargyak`
--
ALTER TABLE `tantargyak`
  MODIFY `tant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `temak`
--
ALTER TABLE `temak`
  MODIFY `tema_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `diakok`
--
ALTER TABLE `diakok`
  ADD CONSTRAINT `diak_fel` FOREIGN KEY (`fel_id`) REFERENCES `felhasznalok` (`fel_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `diak_oszt` FOREIGN KEY (`oszt_id`) REFERENCES `osztalyok` (`oszt_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Megkötések a táblához `ertekelesek`
--
ALTER TABLE `ertekelesek`
  ADD CONSTRAINT `ert_diak` FOREIGN KEY (`diak_id`) REFERENCES `diakok` (`diak_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ert_ido` FOREIGN KEY (`ido_id`) REFERENCES `ertidopontok` (`ido_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ert_ora` FOREIGN KEY (`ora_id`) REFERENCES `orak` (`ora_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ert_tip` FOREIGN KEY (`tip_id`) REFERENCES `erttipusok` (`tip_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Megkötések a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD CONSTRAINT `fel_jog` FOREIGN KEY (`jog_id`) REFERENCES `jogok` (`jog_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fel_tema` FOREIGN KEY (`tema_id`) REFERENCES `temak` (`tema_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Megkötések a táblához `hianyzasok`
--
ALTER TABLE `hianyzasok`
  ADD CONSTRAINT `hia_diak` FOREIGN KEY (`diak_id`) REFERENCES `diakok` (`diak_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `hia_iga` FOREIGN KEY (`iga_id`) REFERENCES `igazolasok` (`iga_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `hia_ora` FOREIGN KEY (`ora_id`) REFERENCES `orak` (`ora_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Megkötések a táblához `orak`
--
ALTER TABLE `orak`
  ADD CONSTRAINT `ora_oszt` FOREIGN KEY (`oszt_id`) REFERENCES `osztalyok` (`oszt_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ora_tanit` FOREIGN KEY (`tanit_id`) REFERENCES `tanitott` (`tanit_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Megkötések a táblához `osztalyok`
--
ALTER TABLE `osztalyok`
  ADD CONSTRAINT `oszt_tanar` FOREIGN KEY (`tanar_id`) REFERENCES `tanarok` (`tanar_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Megkötések a táblához `tanarok`
--
ALTER TABLE `tanarok`
  ADD CONSTRAINT `tanar_fel` FOREIGN KEY (`fel_id`) REFERENCES `felhasznalok` (`fel_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Megkötések a táblához `tanitott`
--
ALTER TABLE `tanitott`
  ADD CONSTRAINT `tanit_tanar` FOREIGN KEY (`tanar_id`) REFERENCES `tanarok` (`tanar_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tanit_tant` FOREIGN KEY (`tant_id`) REFERENCES `tantargyak` (`tant_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
