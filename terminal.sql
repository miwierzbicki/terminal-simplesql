-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Lut 2020, 22:58
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `terminal`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id` int(10) UNSIGNED NOT NULL,
  `imie` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `konto_firmowe` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id`, `imie`, `nazwisko`, `email`, `konto_firmowe`) VALUES
(1, 'Adam', 'Małysz', 'adam.malysz@gmail.com', 0),
(2, 'Jan', 'Kowalski', 'jan.kowalski123@wp.pl', 1),
(3, 'Anna', 'Kowalska-Nowak', 'annakowalska@wp.pl', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `ilosc` int(11) NOT NULL,
  `cena` varchar(10) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id`, `nazwa`, `ilosc`, `cena`) VALUES
(42, 'XDDDDDDDDDDDDDDDDD', 1, '1'),
(43, '1', 1, '1'),
(44, 'XD', 12, '1'),
(45, '12', 12, '12'),
(46, 'XD', 1, '1'),
(47, 'XD', 1, '1'),
(48, '1', 1, '1'),
(49, '1', 1, '1'),
(50, 'gówno', 10, '10'),
(51, 'XD', 1, '1'),
(52, 'XD', 1, '1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `zamowienie_id` int(10) UNSIGNED NOT NULL,
  `klient_id` int(11) NOT NULL,
  `kwota` float UNSIGNED NOT NULL,
  `metoda_platnosci` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `data_zamowienia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`zamowienie_id`, `klient_id`, `kwota`, `metoda_platnosci`, `data_zamowienia`) VALUES
(1, 1, 989.99, 'karta', '2020-02-07'),
(2, 1, 19.99, 'karta', '2020-02-07'),
(3, 2, 150, 'gotowka', '2020-02-01'),
(4, 3, 2500, 'karta', '2020-02-03');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`zamowienie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `zamowienie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
