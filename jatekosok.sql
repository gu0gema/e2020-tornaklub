-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Feb 17. 10:41
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `gyasz`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `jatekosok`
--

CREATE TABLE `jatekosok` (
  `id` int(11) NOT NULL,
  `nev` varchar(100) NOT NULL,
  `pozicio` varchar(50) NOT NULL,
  `mezszam` int(11) DEFAULT NULL,
  `magassag` int(11) DEFAULT NULL,
  `szuletesi_datum` date NOT NULL,
  `utlevel` varchar(100) NOT NULL,
  `kep` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `jatekosok`
--

INSERT INTO `jatekosok` (`id`, `nev`, `pozicio`, `mezszam`, `magassag`, `szuletesi_datum`, `utlevel`, `kep`) VALUES
(1, 'ODYNTSOV ARTEM', 'KAPUS', 12, 195, '2000-11-09', 'UKR', NULL),
(2, 'SENTIĆ KARLO', 'KAPUS', 30, 193, '2001-06-03', 'CRO', NULL),
(3, 'DANILOVIĆ BRANISLAV', 'KAPUS', 44, 190, '1988-06-24', 'SRB, HUN', NULL),
(4, 'SZATMÁRI CSABA', 'VÉDŐ', 3, 198, '1994-06-14', 'HUN', NULL),
(5, 'LUND MARCO', 'VÉDŐ', 4, 183, '1996-06-30', 'DEN', NULL),
(6, 'CHORBADZHIYSKI BOZHIDAR', 'VÉDŐ', 5, 195, '1995-08-08', 'BUL', NULL),
(7, 'BÁRDOS BENCE', 'VÉDŐ', 6, 192, '1998-02-05', 'HUN', NULL),
(8, 'GERA DÁNIEL', 'VÉDŐ', 11, 180, '1995-08-29', 'HUN', NULL),
(9, 'SANIČANIN SINIŠA', 'VÉDŐ', 15, 190, '1995-04-24', 'BIH, SRB', NULL),
(10, 'KOMLÓSI BENCE', 'VÉDŐ', 16, NULL, '2005-09-01', 'HUN', NULL),
(11, 'DREZGIĆ UROŠ', 'VÉDŐ', 26, 190, '2002-10-04', 'SRB', NULL),
(12, 'ADEDOKUN VALENTINO', 'VÉDŐ', NULL, 176, '2003-02-14', 'IRL, NGR', NULL),
(13, 'HERBÁK MÁTÉ', 'KÖZÉPPÁLYÁS', 19, NULL, '2005-03-01', 'HUN', NULL),
(14, 'BÉNYEI ÁGOSTON', 'KÖZÉPPÁLYÁS', 20, 175, '2003-04-03', 'HUN', NULL),
(15, 'KLIMOVICH VLADISLAV', 'KÖZÉPPÁLYÁS', 21, 187, '1996-06-12', 'BLR', NULL),
(16, 'HOLDAMPF GERGŐ', 'KÖZÉPPÁLYÁS', 25, NULL, '1994-07-31', 'HUN', NULL),
(17, 'VALLEJO ALEXANDER', 'KÖZÉPPÁLYÁS', 50, 191, '1992-01-16', 'ESP', NULL),
(18, 'POPADIUC DORU', 'KÖZÉPPÁLYÁS', 59, 177, '1995-02-18', 'ROU', NULL),
(19, 'FERENCSIK BÁLINT', 'KÖZÉPPÁLYÁS', 66, NULL, '2005-09-24', 'HUN', NULL),
(20, 'VARGA ZÉTÉNY', 'KÖZÉPPÁLYÁS', NULL, NULL, '2006-07-19', 'HUN', NULL),
(21, 'RAKONJAC MARKO', 'TÁMADÓ', 7, 191, '2000-04-25', 'MNE, SRB', NULL),
(22, 'KAMPETSIS ARGYRIS', 'TÁMADÓ', 9, 186, '1999-05-06', 'GRE', NULL),
(23, 'JUREK GÁBOR', 'TÁMADÓ', 10, 183, '2004-06-04', 'HUN', NULL),
(24, 'ACOLATSE ELTON', 'TÁMADÓ', 17, NULL, '1995-07-25', 'NED, GHA', NULL),
(25, 'FEUILLASSIER FRANCISCO', 'TÁMADÓ', 29, NULL, '1998-05-12', 'ARG, ESP', NULL),
(26, 'EDOMWONYI BRIGHT', 'TÁMADÓ', 34, 186, '1994-07-24', 'NGR', NULL),
(27, 'RHARSALLA MOHAMMED', 'TÁMADÓ', 75, 184, '1993-09-15', 'MAR, ESP', NULL),
(28, 'FEKETE VINCE', 'TÁMADÓ', 87, NULL, '2005-07-09', 'HUN', NULL),
(29, 'POŽEG VANCAŠ RUDI', 'TÁMADÓ', 94, 174, '1994-03-15', 'SLO', NULL),
(30, 'HUSZÁR MARCELL', 'TÁMADÓ', 96, 191, '2005-05-07', 'HUN', NULL);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `jatekosok`
--
ALTER TABLE `jatekosok`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `jatekosok`
--
ALTER TABLE `jatekosok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
