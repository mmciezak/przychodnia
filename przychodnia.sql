-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Maj 2024, 14:11
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `przychodnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gabinety`
--

CREATE TABLE `gabinety` (
  `id_gabinetu` int(11) NOT NULL,
  `numer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `gabinety`
--

INSERT INTO `gabinety` (`id_gabinetu`, `numer`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lekarze`
--

CREATE TABLE `lekarze` (
  `id_lekarza` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `ulica` varchar(50) NOT NULL,
  `nr_domu` int(11) NOT NULL,
  `miejscowosc` varchar(50) NOT NULL,
  `pesel` varchar(11) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_urodzenia` date NOT NULL,
  `specjalizacja` int(11) NOT NULL,
  `gabinet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `lekarze`
--

INSERT INTO `lekarze` (`id_lekarza`, `imie`, `nazwisko`, `ulica`, `nr_domu`, `miejscowosc`, `pesel`, `telefon`, `email`, `data_urodzenia`, `specjalizacja`, `gabinet`) VALUES
(1, 'Marian', 'Nowak', 'Lawendowa', 5, 'Lublin', '80045027616', '567678789', 'nowak@cdt.medicus.eu', '1980-03-21', 1, 1),
(2, 'Konrad', 'Czerwiński', 'Lipowa', 9, 'Lublin', '02302863114', '733456123', 'czerwinski@cdt.medicus.eu', '1973-04-26', 2, 2),
(3, 'Zuza', 'Wojciechowska', 'Wojciechowska', 1, 'Lublin', '00034598908', '669809980', 'wojciechowska@cdt.medicus.eu', '1900-04-04', 3, 3),
(4, 'Bogumiła', 'Zielińska', 'Dębowa', 5, 'Lublin', '69060994008', '609006309', 'znielinska@cdt.medicus.eu', '1960-10-01', 4, 4),
(5, 'Maria', 'Ciężak', 'Raszyńska', 69, 'Lublin', '02161127616', '669700800', 'ciezak@cdt.medicus.eu', '2002-11-16', 5, 5),
(6, 'Dorota', 'Adamczyk', 'Raszyńska', 69, 'Lublin', '02161127221', '669721345', 'admczyk@cdt.medicus.eu', '2002-11-16', 6, 3),
(7, 'Dariusz', 'Fiołek', 'Raszyńska', 69, 'Lublin', '02161122211', '669721111', 'fiolek@cdt.medicus.eu', '2002-11-16', 7, 7),
(8, 'Adam', 'Niedzielski', 'Raszyńska', 69, 'Lublin', '32145678908', '669721123', 'niedzielski@cdt.medicus.eu', '2002-11-16', 8, 4),
(9, 'Radek', 'Kukiełka', 'Raszyńska', 69, 'Lublin', '56743218901', '669721098', 'kukielka@cdt.medicus.eu', '2002-11-16', 9, 8),
(10, 'Arkadiusz', 'Gugała', 'Raszyńska', 69, 'Lublin', '56743212134', '669721098', 'gugala@cdt.medicus.eu', '2002-11-16', 10, 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pacjenci`
--

CREATE TABLE `pacjenci` (
  `id_pacjenta` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `ulica` varchar(50) NOT NULL,
  `nr_domu` int(11) NOT NULL,
  `miejscowosc` varchar(50) NOT NULL,
  `kod_pocztowy` varchar(8) NOT NULL,
  `pesel` varchar(11) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `data_urodzenia` date NOT NULL,
  `haslo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pacjenci`
--

INSERT INTO `pacjenci` (`id_pacjenta`, `imie`, `nazwisko`, `ulica`, `nr_domu`, `miejscowosc`, `kod_pocztowy`, `pesel`, `telefon`, `data_urodzenia`, `haslo`) VALUES
(2, 'Maria', 'Ciężak', 'Kwiatowa', 213, 'Lublin', '21-117', '12345678901', '123456789', '2002-03-21', 'b03ddf3ca2e714a6548e7495e2a03f5e824eaac9837cd7f159c67b90fb4b7342'),
(25, 'Anna', 'Nowak', 'Kwiatowa', 45, 'Lublin', '20-020', '12345678900', '666777888', '2021-05-08', 'b03ddf3ca2e714a6548e7495e2a03f5e824eaac9837cd7f159c67b90fb4b7342');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `specjalizacje`
--

CREATE TABLE `specjalizacje` (
  `id_specjalizacji` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `lekarz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `specjalizacje`
--

INSERT INTO `specjalizacje` (`id_specjalizacji`, `nazwa`, `lekarz`) VALUES
(1, 'Ortopeda', 1),
(2, 'Neurolog', 2),
(3, 'Endokrynolog', 3),
(4, 'Laryngolog', 4),
(5, 'Kardiolog', 5),
(6, 'Reumatolog', 6),
(7, 'Pediatra', 7),
(8, 'stomatolog', 8),
(9, 'Okulista', 9),
(10, 'Lekarz ogólny', 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `id_uslugi` int(11) NOT NULL,
  `nazwa` varchar(100) NOT NULL,
  `specjalizacja` int(11) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`id_uslugi`, `nazwa`, `specjalizacja`, `cena`) VALUES
(2, 'audiometria', 4, 100),
(3, 'badania usg', 1, 150),
(4, 'badanie echo serca', 5, 200),
(5, 'badanie eeg', 2, 200),
(6, 'badanie ekg', 5, 170),
(7, 'densytometria', 1, 210),
(10, 'pantomogram', 8, 200),
(11, 'pole widzenia', 9, 160),
(13, 'zdjęcia rtg', 1, 180),
(15, 'szczepienie', 10, 0),
(17, 'wizyta kontrolna', 10, 20);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytkownika` int(11) NOT NULL,
  `login` varchar(256) NOT NULL,
  `haslo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzytkownika`, `login`, `haslo`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wizyty`
--

CREATE TABLE `wizyty` (
  `id_wizyty` int(11) NOT NULL,
  `pacjent` int(11) NOT NULL,
  `data_godzina` datetime NOT NULL,
  `powod` varchar(100) NOT NULL,
  `usluga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wizyty`
--

INSERT INTO `wizyty` (`id_wizyty`, `pacjent`, `data_godzina`, `powod`, `usluga`) VALUES
(2, 2, '2021-02-01 14:12:30', 'Ból brzucha', 3),
(6, 2, '2020-12-01 14:32:00', 'Wypisanie recepty', 17),
(9, 2, '2021-05-11 14:50:00', 'Zawał', 4),
(29, 2, '2021-05-08 21:45:00', 'Obowiązkowe szczepienie', 15);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gabinety`
--
ALTER TABLE `gabinety`
  ADD PRIMARY KEY (`id_gabinetu`);

--
-- Indeksy dla tabeli `lekarze`
--
ALTER TABLE `lekarze`
  ADD PRIMARY KEY (`id_lekarza`),
  ADD KEY `specjalizacja` (`specjalizacja`),
  ADD KEY `gabinet` (`gabinet`);

--
-- Indeksy dla tabeli `pacjenci`
--
ALTER TABLE `pacjenci`
  ADD PRIMARY KEY (`id_pacjenta`);

--
-- Indeksy dla tabeli `specjalizacje`
--
ALTER TABLE `specjalizacje`
  ADD PRIMARY KEY (`id_specjalizacji`),
  ADD KEY `lekarz` (`lekarz`);

--
-- Indeksy dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id_uslugi`),
  ADD KEY `specjalizacja` (`specjalizacja`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytkownika`);

--
-- Indeksy dla tabeli `wizyty`
--
ALTER TABLE `wizyty`
  ADD PRIMARY KEY (`id_wizyty`),
  ADD KEY `pacjent` (`pacjent`),
  ADD KEY `usluga` (`usluga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `gabinety`
--
ALTER TABLE `gabinety`
  MODIFY `id_gabinetu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `lekarze`
--
ALTER TABLE `lekarze`
  MODIFY `id_lekarza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `pacjenci`
--
ALTER TABLE `pacjenci`
  MODIFY `id_pacjenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `specjalizacje`
--
ALTER TABLE `specjalizacje`
  MODIFY `id_specjalizacji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id_uslugi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `wizyty`
--
ALTER TABLE `wizyty`
  MODIFY `id_wizyty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `lekarze`
--
ALTER TABLE `lekarze`
  ADD CONSTRAINT `lekarze_ibfk_2` FOREIGN KEY (`gabinet`) REFERENCES `gabinety` (`id_gabinetu`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `specjalizacje`
--
ALTER TABLE `specjalizacje`
  ADD CONSTRAINT `specjalizacje_ibfk_1` FOREIGN KEY (`lekarz`) REFERENCES `lekarze` (`id_lekarza`);

--
-- Ograniczenia dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  ADD CONSTRAINT `uslugi_ibfk_1` FOREIGN KEY (`specjalizacja`) REFERENCES `specjalizacje` (`id_specjalizacji`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `wizyty`
--
ALTER TABLE `wizyty`
  ADD CONSTRAINT `wizyty_ibfk_2` FOREIGN KEY (`pacjent`) REFERENCES `pacjenci` (`id_pacjenta`),
  ADD CONSTRAINT `wizyty_ibfk_4` FOREIGN KEY (`usluga`) REFERENCES `uslugi` (`id_uslugi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
