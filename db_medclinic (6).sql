-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Gazda: 127.0.0.1
-- Timp de generare: 30 Iun 2019 la 09:23
-- Versiune server: 5.5.27
-- Versiune PHP: 7.2.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza de date: `db_medclinic`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `consultatie`
--

CREATE TABLE IF NOT EXISTS `consultatie` (
  `cod_cons` int(11) NOT NULL AUTO_INCREMENT,
  `medic_fk` int(11) DEFAULT NULL,
  `pacient_fk` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `observatii` char(255) DEFAULT NULL,
  `cod_programare` int(11) NOT NULL,
  PRIMARY KEY (`cod_cons`),
  UNIQUE KEY `cod_progamare` (`cod_programare`),
  KEY `medic_fk` (`medic_fk`),
  KEY `pacient_fk` (`pacient_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=805 ;

--
-- Salvarea datelor din tabel `consultatie`
--

INSERT INTO `consultatie` (`cod_cons`, `medic_fk`, `pacient_fk`, `data`, `observatii`, `cod_programare`) VALUES
(800, 600, 705, '2019-03-25', 'consultatie', 999),
(804, 600, 700, '2019-03-25', 'ok2', 920);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `cont`
--

CREATE TABLE IF NOT EXISTS `cont` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `cnp` varchar(50) DEFAULT NULL,
  `rol` char(50) DEFAULT NULL,
  `nume_user` varchar(20) DEFAULT NULL,
  `parola` varchar(10) DEFAULT NULL,
  `activ` tinyint(1) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Salvarea datelor din tabel `cont`
--

INSERT INTO `cont` (`cod`, `cnp`, `rol`, `nume_user`, `parola`, `activ`) VALUES
(1, '2800204297458', 'a', 'admin', 'admin', 1),
(2, '2900602298765', 'p', 'pacient2', '1234', 1),
(3, '2910902298777', 'p', 'pacient3', '1234', 1),
(4, '2800203297654', 'p', 'pacient4', '1234', 1),
(5, '1810312297403', 'p', 'pacient5', '1234', 1),
(7, '1890317297645', 'p', 'pacient6', '1234', 1),
(8, '1890517290987', 'p', 'pacient7', '1234', 1),
(10, '1820319290809', 'p', 'pacient9', '1234', 1),
(11, '2880317297634', 'p', 'pacient10', '1234', 1),
(12, '1810518290509', 'p', 'pacient11', '1234', 1),
(13, '1830307298768', 'p', 'pacient12', '1234', 1),
(14, '2001212298760', 'p', 'pacient1', '1234', 1),
(15, '2800202297456', 'o', 'operator1', '1234', 1),
(17, '1760602280907', 'm', 'medic1', '1234', 1),
(18, '1701111230987', 'm', 'medic18', '1234', 1),
(19, '1690706123456', 'm', 'medic19', '1234', 1),
(20, '2700809234567', 'm', 'medic20', '1234', 1),
(21, '2720303290908', 'm', 'medic21', '1234', 1),
(22, '2710802090987', 'm', 'medic22', '1234', 1),
(23, '2720202123456', 'm', 'medic23', '1234', 1),
(24, '2700923278888', 'm', 'medic24', '1234', 1),
(25, '1690324298766', 'm', 'medic25', '1234', 1),
(26, '2700303293455', 'm', 'medic26', '1234', 1),
(27, '2730210280999', 'm', 'medic27', '1234', 1),
(28, '2680225238888', 'm', 'medic28', '1234', 1),
(29, '1750312123333', 'm', 'medic29', '1234', 1);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `cod_factura` int(11) NOT NULL AUTO_INCREMENT,
  `descriere` char(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `moneda` char(10) DEFAULT NULL,
  `valoare` int(10) NOT NULL,
  `cod_pac_fk` int(11) NOT NULL,
  `platita` tinyint(1) NOT NULL,
  `anulata` tinyint(1) NOT NULL,
  PRIMARY KEY (`cod_factura`),
  KEY `cod_pac_fk` (`cod_pac_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1010 ;

--
-- Salvarea datelor din tabel `factura`
--

INSERT INTO `factura` (`cod_factura`, `descriere`, `data`, `moneda`, `valoare`, `cod_pac_fk`, `platita`, `anulata`) VALUES
(1001, 'servicii', '2019-03-14', 'RON', 200, 700, 1, 1),
(1002, 'analize de laborator', '2019-03-19', 'RON', 280, 701, 0, 1),
(1003, 'consultatie + analize', '2019-03-20', 'RON', 300, 702, 1, 0),
(1004, 'servicii', '2019-03-23', 'RON', 160, 706, 1, 1),
(1005, 'sercivii + analize', '2019-03-21', 'RON', 150, 703, 1, 0),
(1006, ' vvvv', '2013-04-30', 'RON', 250, 711, 0, 0),
(1007, ' test final', '2019-03-19', 'RON', 227, 702, 0, 0);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `medici`
--

CREATE TABLE IF NOT EXISTS `medici` (
  `cod` int(11) NOT NULL,
  `cont_fk` int(11) DEFAULT NULL,
  `specializare_fk` int(11) DEFAULT NULL,
  `nume` char(50) DEFAULT NULL,
  `titulatura` char(50) DEFAULT NULL,
  `durata_consultatie` int(11) DEFAULT NULL,
  `data_nasterii` date DEFAULT NULL,
  PRIMARY KEY (`cod`),
  UNIQUE KEY `cont_fk` (`cont_fk`),
  KEY `specializare_fk` (`specializare_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `medici`
--

INSERT INTO `medici` (`cod`, `cont_fk`, `specializare_fk`, `nume`, `titulatura`, `durata_consultatie`, `data_nasterii`) VALUES
(600, 17, 300, 'Dr. Serban Vasile', 'medic prima prof.dr', 30, '1976-06-02'),
(601, 19, 301, 'Dr. Mosoia-Plaviciosu Liviu', 'medic primar medicina interna', 30, '1969-07-06'),
(602, 20, 304, 'Dr. DOBRESCU MARIANA', 'medic primar medicina interna', 30, '1970-08-09'),
(603, 21, 304, 'Dr. FILIMON DILARA', 'medic specialist cardiologie', 30, '1972-03-03'),
(604, 22, 304, 'Dr. POPESCU CORALIA ROXANA', 'Medic specialist cardiologie, primar medicina inte', 30, '1971-08-02'),
(605, 23, 304, 'Dr. SIPCIU DOINA', 'medic primar Medicina interna, primar Cardiologie', 30, '1972-02-02'),
(606, 24, 302, 'Dr. TUDOSE ADRIANA', 'medic primar Alergologie si Imunologie clinica', 30, '1970-09-23'),
(607, 25, 303, 'Dr. COSTOVICI CATALIN', 'medic specialist oncologie medicala', 30, '1969-03-24'),
(608, 26, 300, 'Dr. ALEXANDRESCU DANIELA', 'medic primar oftalmologie', 30, '1970-03-03'),
(609, 27, 300, 'Dr. POPA CARMEN', 'medic specialist oftalmologie', 30, '1973-02-10'),
(610, 28, 301, 'Dr. RADU VICTOR GHEORGHE', 'Medic primar chirurgie generala', 30, '1968-02-25'),
(611, 29, 301, 'Dr. VASILE SERBAN', 'Medic specialist chirurgie generala', 30, '1975-03-12');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `pacienti`
--

CREATE TABLE IF NOT EXISTS `pacienti` (
  `cod` int(11) NOT NULL,
  `cont_fk` int(11) DEFAULT NULL,
  `nume` char(50) DEFAULT NULL,
  `data_nasterii` date DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `inaltime` int(11) DEFAULT NULL,
  `greutate` int(11) DEFAULT NULL,
  `telefon` int(11) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  PRIMARY KEY (`cod`),
  UNIQUE KEY `cont_fk` (`cont_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `pacienti`
--

INSERT INTO `pacienti` (`cod`, `cont_fk`, `nume`, `data_nasterii`, `sex`, `inaltime`, `greutate`, `telefon`, `email`) VALUES
(700, 2, 'Ion Maria', '1990-06-02', 'f', 170, 75, 734567890, 'ion@yahoo.com'),
(701, 3, 'Petrescu Mirela', '1991-09-02', 'f', 170, 57, 754326579, 'petrescu@yahoo.com'),
(702, 4, 'Ilie Ana', '1980-02-03', 'f', 169, 52, 721765438, 'iliea@yahoo.com'),
(703, 5, 'Ilie George', '1981-03-12', 'm', 167, 76, 738765249, 'ilieg@yahoo.com'),
(704, 14, 'Micu Ioana', '1987-09-25', 'f', 166, 72, 759876543, 'micu@yahoo.com'),
(705, 7, 'Popescu Marian', '1989-03-17', 'm', 172, 81, 723540987, 'popescu@yahoo.com'),
(706, 8, 'Gheorge Eduard', '1989-05-17', 'm', 170, 80, 712356779, 'gheorghe@yahoo.com'),
(708, 10, 'Iordache Ion', '1982-03-19', 'm', 165, 78, 754322145, 'iordache@yahoo.com'),
(709, 11, 'Avram Mirela', '1988-03-17', 'f', 171, 68, 789543211, 'avram@yahoo.com'),
(710, 12, 'Adam Irinel', '1981-05-18', 'm', 169, 75, 765432219, 'adam@yahoo.com'),
(711, 13, 'Grigore Andrei', '1983-03-07', 'm', 170, 76, 765433217, 'grigore@yahoo.com');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `programare`
--

CREATE TABLE IF NOT EXISTS `programare` (
  `cod_prog` int(11) NOT NULL AUTO_INCREMENT,
  `medic_fk` int(11) DEFAULT NULL,
  `pacient_fk` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `ora` time NOT NULL,
  `realizata` int(11) NOT NULL,
  `anulata` int(1) NOT NULL,
  PRIMARY KEY (`cod_prog`),
  KEY `medic_fk` (`medic_fk`),
  KEY `pacient_fk` (`pacient_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1000 ;

--
-- Salvarea datelor din tabel `programare`
--

INSERT INTO `programare` (`cod_prog`, `medic_fk`, `pacient_fk`, `data`, `ora`, `realizata`, `anulata`) VALUES
(1, 601, 709, '2019-03-26', '08:30:00', 0, 1),
(900, 601, 700, '2019-03-22', '13:30:00', 1, 0),
(901, 602, 701, '2019-03-21', '09:30:00', 0, 0),
(902, 602, 702, '2013-05-02', '10:00:00', 1, 0),
(903, 603, 703, '2013-04-09', '09:00:00', 1, 1),
(904, 604, 704, '2013-03-21', '11:00:00', 1, 0),
(905, 605, 706, '2013-03-11', '10:00:00', 1, 0),
(907, 604, 705, '2019-03-19', '12:00:00', 1, 0),
(908, 606, 702, '2019-03-22', '10:00:00', 0, 0),
(909, 601, 703, '2019-03-22', '14:00:00', 0, 0),
(910, 601, 705, '2019-03-22', '13:00:00', 0, 0),
(912, 601, 701, '2019-03-26', '10:00:00', 0, 0),
(913, 601, 702, '2019-03-26', '10:30:00', 0, 0),
(914, 601, 703, '2019-03-26', '12:00:00', 0, 0),
(915, 601, 710, '2019-03-26', '12:30:00', 0, 1),
(916, 602, 710, '2019-03-21', '09:00:00', 0, 0),
(917, 602, 711, '2019-03-21', '11:30:00', 0, 0),
(918, 602, 702, '2019-03-21', '11:00:00', 0, 0),
(919, 600, 702, '2019-03-25', '12:00:00', 0, 0),
(920, 600, 700, '2019-03-25', '10:00:00', 1, 0),
(922, 600, 706, '2019-03-26', '08:00:00', 0, 0),
(923, 601, 702, '2019-03-26', '08:00:00', 0, 0),
(924, 601, 704, '2019-03-26', '15:00:00', 0, 0),
(925, 601, 703, '2019-03-26', '15:30:00', 0, 1),
(926, 601, 703, '2019-03-26', '15:30:00', 0, 0),
(999, 600, 705, '2019-03-25', '08:30:00', 1, 0);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `rand_factura`
--

CREATE TABLE IF NOT EXISTS `rand_factura` (
  `cod_factura` int(11) NOT NULL,
  `pozitie` int(11) NOT NULL,
  `val_serv` char(50) DEFAULT NULL,
  `serviciu_fk` int(11) DEFAULT NULL,
  `cantitate` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_factura`,`pozitie`),
  KEY `serviciu_fk` (`serviciu_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `rand_factura`
--

INSERT INTO `rand_factura` (`cod_factura`, `pozitie`, `val_serv`, `serviciu_fk`, `cantitate`) VALUES
(1001, 1, '10', 117, 1),
(1001, 2, '10', 114, 1),
(1001, 3, '10', 115, 1),
(1002, 1, '10', 120, 1),
(1002, 2, '10', 125, 1),
(1002, 3, '10', 122, 1),
(1003, 1, '10', 111, 1),
(1003, 2, '10', 121, 1),
(1003, 3, '10', 122, 1),
(1004, 1, '10', 111, 1),
(1004, 2, '10', 113, 1),
(1004, 3, '10', 114, 1),
(1006, 2, '10', 116, 1),
(1006, 3, '10', 119, 1),
(1006, 4, '30', 128, 1),
(1006, 5, '100', 115, 2),
(1007, 1, '50', 123, 1),
(1007, 2, '145', 130, 1),
(1007, 3, '8', 141, 4);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `serviciu`
--

CREATE TABLE IF NOT EXISTS `serviciu` (
  `cod_serviciu` int(11) NOT NULL AUTO_INCREMENT,
  `denumire` char(255) DEFAULT NULL,
  `moneda` char(10) DEFAULT NULL,
  `pret` int(11) DEFAULT NULL,
  `specializare_fk` int(11) NOT NULL,
  PRIMARY KEY (`cod_serviciu`),
  UNIQUE KEY `cod_serviciu` (`cod_serviciu`),
  KEY `specializare_fk` (`specializare_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Salvarea datelor din tabel `serviciu`
--

INSERT INTO `serviciu` (`cod_serviciu`, `denumire`, `moneda`, `pret`, `specializare_fk`) VALUES
(111, 'consultatie medic prima prof.dr', 'RON', 125, 301),
(112, 'Consultatie+Prescriere de ochelari', 'RON', 135, 301),
(113, 'Consultatie oftalmologica pol anterior', 'RON', 35, 301),
(114, 'Prescriere de ochelari(fara consultatie)', 'RON', 60, 301),
(115, 'Camp vizual computerizat', 'EURO', 100, 301),
(116, 'Consultatie medic primar', 'RON', 155, 303),
(117, 'Consultatie medic specialist', 'RON', 145, 301),
(118, 'Control medic primar/specialist', 'RON', 85, 301),
(119, 'Consultatie Dr Mosoia-Plaviciosu Liviu', 'RON', 120, 302),
(120, 'Consultatie Dr. Serban Vasile', 'RON', 200, 301),
(121, 'Control Dr. Serban Vasile', 'RON', 100, 301),
(122, 'Consultatie Dr. Radu Victor Gheorghe', 'RON', 150, 301),
(123, 'Incizie abcese/ flegmoane', 'RON', 50, 301),
(124, 'Suturi plagi superficiale', 'RON', 75, 301),
(125, 'Tratament panaritii', 'RON', 45, 301),
(126, 'Consultatie', 'RON', 150, 300),
(127, 'Control', 'RON', 100, 302),
(128, 'Aerosoli cu medicatie inclusa', 'RON', 30, 303),
(129, 'Consultatie medic primar', 'RON', 155, 301),
(130, 'Consultatie medic specialist', 'RON', 145, 301),
(131, 'Control medic primar/specialist', 'RON', 85, 301),
(132, 'Consultatie pensionari', 'RON', 0, 304),
(133, 'Analiza-Alfa 1 Antitripsina', 'RON', 75, 301),
(134, 'Analiza-Alfa 1 Glicoproteina', 'RON', 90, 301),
(135, 'Analiza-Alfa 2 Macroglobulina', 'RON', 80, 301),
(136, 'Analiza-Amilaza in lichid de punctie', 'RON', 60, 301),
(137, 'Analiza-Anticorpi anti - 2 glicoproteina 1 - screening', 'RON', 75, 301),
(138, 'Analiza-Biopsie parafina bloc principal', 'RON', 110, 303),
(139, 'Analiza-Biopsie parafina bloc secundar', 'RON', 195, 303),
(140, 'Analiza-Brom in sange', 'RON', 100, 304),
(141, 'Colesterol total**', 'RON', 8, 304);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `specializare`
--

CREATE TABLE IF NOT EXISTS `specializare` (
  `cod_spec` int(11) NOT NULL,
  `denumire` char(50) DEFAULT NULL,
  `descriere` char(255) DEFAULT NULL,
  PRIMARY KEY (`cod_spec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `specializare`
--

INSERT INTO `specializare` (`cod_spec`, `denumire`, `descriere`) VALUES
(300, 'Oftalmologie', 'descriere'),
(301, 'Chirurgie', 'descriere'),
(302, 'Alerlogie', 'descriere'),
(303, 'Oncologie', 'o1'),
(304, 'Cardiologie', 'Cardiologie');

--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `consultatie`
--
ALTER TABLE `consultatie`
  ADD CONSTRAINT `consultatie_ibfk_1` FOREIGN KEY (`medic_fk`) REFERENCES `medici` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consultatie_ibfk_2` FOREIGN KEY (`pacient_fk`) REFERENCES `pacienti` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrictii pentru tabele `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`cod_pac_fk`) REFERENCES `pacienti` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrictii pentru tabele `medici`
--
ALTER TABLE `medici`
  ADD CONSTRAINT `medici_ibfk_1` FOREIGN KEY (`specializare_fk`) REFERENCES `specializare` (`cod_spec`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medici_ibfk_2` FOREIGN KEY (`cont_fk`) REFERENCES `cont` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrictii pentru tabele `pacienti`
--
ALTER TABLE `pacienti`
  ADD CONSTRAINT `pacienti_ibfk_1` FOREIGN KEY (`cont_fk`) REFERENCES `cont` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrictii pentru tabele `programare`
--
ALTER TABLE `programare`
  ADD CONSTRAINT `programare_ibfk_1` FOREIGN KEY (`medic_fk`) REFERENCES `medici` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programare_ibfk_2` FOREIGN KEY (`pacient_fk`) REFERENCES `pacienti` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrictii pentru tabele `rand_factura`
--
ALTER TABLE `rand_factura`
  ADD CONSTRAINT `rand_factura_ibfk_1` FOREIGN KEY (`serviciu_fk`) REFERENCES `serviciu` (`cod_serviciu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rand_factura_ibfk_2` FOREIGN KEY (`cod_factura`) REFERENCES `factura` (`cod_factura`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrictii pentru tabele `serviciu`
--
ALTER TABLE `serviciu`
  ADD CONSTRAINT `serviciu_ibfk_1` FOREIGN KEY (`specializare_fk`) REFERENCES `specializare` (`cod_spec`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
