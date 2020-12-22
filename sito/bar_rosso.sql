-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 14, 2020 alle 14:54
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bar_rosso`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `IdUtenti` varchar(32) CHARACTER SET latin1 NOT NULL,
  `ordine` varchar(32) CHARACTER SET latin1 NOT NULL,
  `id` int(32) NOT NULL,
  `orario` varchar(11) CHARACTER SET latin1 NOT NULL,
  `totale` varchar(32) CHARACTER SET latin1 NOT NULL,
  `Classe` varchar(32) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `id` int(11) NOT NULL,
  `Nome` varchar(32) CHARACTER SET latin1 NOT NULL,
  `prezzo` decimal(10,2) NOT NULL,
  `genere` varchar(32) CHARACTER SET latin1 NOT NULL,
  `IdUtente` varchar(32) NOT NULL,
  `quantità` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `password` varchar(32) CHARACTER SET latin1 NOT NULL,
  `admin` tinyint(32) NOT NULL DEFAULT 0,
  `IdUtente` int(32) NOT NULL,
  `username` varchar(32) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`password`, `admin`, `IdUtente`, `username`) VALUES
('fcc8c0a57ab902388613f2782eae3dd6', 0, 4, 'Nanni'),
('4ca3f6e6b46b966e2306103ac09259c7', 0, 6, 'batman'),
('4ca3f6e6b46b966e2306103ac09259c7', 1, 7, 'samuele.fabiano'),
('4ca3f6e6b46b966e2306103ac09259c7', 0, 8, 'casetta'),
('4ca3f6e6b46b966e2306103ac09259c7', 0, 9, 'batman2'),
('ed743e37d5c7be42fd6902e1664feefb', 1, 10, 'admin');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`id`),
  ADD KEY `batman1` (`IdUtenti`);

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`IdUtente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `ordini`
--
ALTER TABLE `ordini`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `IdUtente` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
