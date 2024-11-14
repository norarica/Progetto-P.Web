-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Nov 14, 2024 alle 18:36
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pnldb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE `admin` (
  `Admin_cf` varchar(16) NOT NULL,
  `Email_a` varchar(50) NOT NULL,
  `Password_hash_a` varchar(255) NOT NULL,
  `Nome_a` varchar(100) NOT NULL,
  `Cognome_a` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `Id_prod` int(11) NOT NULL,
  `Utente_cf` varchar(16) NOT NULL,
  `Quantità` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `modifica`
--

CREATE TABLE `modifica` (
  `Id_prod` int(11) NOT NULL,
  `Admin_cf` varchar(16) NOT NULL,
  `Tipo` varchar(100) DEFAULT NULL,
  `Data_modifica` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotto`
--

CREATE TABLE `prodotto` (
  `Id_prod` int(11) NOT NULL,
  `Categoria` varchar(50) NOT NULL,
  `Descrizione` varchar(200) NOT NULL,
  `Dimensione` int(11) DEFAULT NULL,
  `Prezzo` decimal(7,2) NOT NULL,
  `Classe` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `Utente_cf` varchar(16) NOT NULL,
  `Email_u` varchar(50) NOT NULL,
  `Password_hash_u` varchar(255) NOT NULL,
  `Nome` varchar(32) NOT NULL,
  `Cognome` varchar(32) NOT NULL,
  `Datanascita_u` date NOT NULL,
  `Interesse` varchar(128) DEFAULT NULL,
  `Bloccato` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti_el`
--

CREATE TABLE `utenti_el` (
  `Utente_cf` varchar(16) NOT NULL,
  `DataEl` date NOT NULL,
  `Nome` varchar(32) NOT NULL,
  `Cognome` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_cf`),
  ADD UNIQUE KEY `Email_a` (`Email_a`);

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`Id_prod`,`Utente_cf`),
  ADD KEY `fk_UTENTE_c` (`Utente_cf`);

--
-- Indici per le tabelle `modifica`
--
ALTER TABLE `modifica`
  ADD PRIMARY KEY (`Id_prod`,`Admin_cf`),
  ADD KEY `fk_ADMIN` (`Admin_cf`);

--
-- Indici per le tabelle `prodotto`
--
ALTER TABLE `prodotto`
  ADD PRIMARY KEY (`Id_prod`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`Utente_cf`),
  ADD UNIQUE KEY `Email_u` (`Email_u`);

--
-- Indici per le tabelle `utenti_el`
--
ALTER TABLE `utenti_el`
  ADD PRIMARY KEY (`Utente_cf`,`DataEl`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `carrello`
--
ALTER TABLE `carrello`
  ADD CONSTRAINT `fk_PRODOTTO_c` FOREIGN KEY (`Id_prod`) REFERENCES `prodotto` (`Id_prod`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_UTENTE_c` FOREIGN KEY (`Utente_cf`) REFERENCES `utente` (`Utente_cf`) ON DELETE CASCADE;

--
-- Limiti per la tabella `modifica`
--
ALTER TABLE `modifica`
  ADD CONSTRAINT `fk_ADMIN` FOREIGN KEY (`Admin_cf`) REFERENCES `admin` (`Admin_cf`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_PRODOTTO` FOREIGN KEY (`Id_prod`) REFERENCES `prodotto` (`Id_prod`) ON DELETE CASCADE;
COMMIT;

--Merisi numero 1--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
