-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 09, 2018 at 12:33 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stickning`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `registrera_garn` (`namn` VARCHAR(45), `material` VARCHAR(45))  BEGIN
insert into stickning.garn
values (null, nameManuf, material);


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `registrera_mottagare` (`namn` VARCHAR(45), `kontakt` VARCHAR(45))  BEGIN
insert into stickning.mottagare
values (null, namn, kontakt);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `alster`
--

CREATE TABLE `alster` (
  `ID` int(11) NOT NULL,
  `Mottagare_ID` int(11) NOT NULL,
  `Item_ID` int(11) NOT NULL,
  `teknik` varchar(45) DEFAULT NULL,
  `feature` varchar(45) DEFAULT NULL,
  `sticka` int(4) DEFAULT NULL,
  `pris` int(11) DEFAULT NULL,
  `datumFinish` date DEFAULT NULL,
  `kommentarer` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alster`
--

INSERT INTO `alster` (`ID`, `Mottagare_ID`, `Item_ID`, `teknik`, `feature`, `sticka`, `pris`, `datumFinish`, `kommentarer`) VALUES
(1, 1, 1, 'Rätstickning', NULL, NULL, NULL, NULL, NULL),
(2, 1, 6, 'Slätstickning', 'Vanlig häl', NULL, NULL, NULL, NULL),
(3, 1, 7, 'Resårstickning', 'Trippelt garn, lite reflex i knapparna', NULL, NULL, NULL, NULL),
(4, 4, 1, 'Rätstickning', NULL, NULL, NULL, NULL, NULL),
(5, 4, 1, 'Slätstickning', NULL, NULL, NULL, NULL, NULL),
(6, 6, 4, 'Slätstickning', 'Reflexbroderi i \"öronen\"', NULL, NULL, NULL, NULL),
(7, 5, 1, 'Rätstickning', NULL, NULL, NULL, NULL, NULL),
(8, 5, 4, 'Slätstickning', 'Reflexbroderi i \"öronen\"', NULL, NULL, NULL, NULL),
(9, 11, 8, 'Dubbel resår', NULL, NULL, NULL, NULL, NULL),
(10, 2, 1, 'Rätstickning', NULL, NULL, NULL, NULL, NULL),
(11, 2, 6, 'Slätstickning', 'Vanlig häl', NULL, NULL, NULL, NULL),
(12, 8, 1, 'Rätstickning', NULL, NULL, NULL, NULL, NULL),
(13, 3, 1, 'Rätstickning', NULL, NULL, NULL, NULL, NULL),
(14, 3, 6, 'Slätstickning', NULL, NULL, NULL, NULL, NULL),
(15, 3, 7, 'Enkel resårstickning', NULL, NULL, NULL, NULL, NULL),
(17, 15, 5, 'Dubbel resårstickning', 'Inga fransar.', 0, 0, '2016-01-01', '2 härvor garn. Tog slut, skarvade med rött garn sista varvet.'),
(25, 16, 1, 'Rätstickning', 'Hålmönster, utvidgande mittlinje', 0, 0, '0000-00-00', 'Lade in partier av turkos-på-vit och turkos-på-ljusgrå. Rundad form. STOR.'),
(26, 0, 1, 'Rätstickning', '', 0, 0, '0000-00-00', 'ev betalt för garnkostnad');

-- --------------------------------------------------------

--
-- Stand-in structure for view `alsterext2`
-- (See below for the actual view)
--
CREATE TABLE `alsterext2` (
`Mottagare` varchar(45)
,`Modell` varchar(60)
,`Garn` varchar(45)
,`Färg` varchar(45)
,`Särdrag` varchar(45)
,`Kommentarer` varchar(200)
,`Pris` int(11)
,`Avslutad` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `alsterid-mottagare-modell`
-- (See below for the actual view)
--
CREATE TABLE `alsterid-mottagare-modell` (
`AlsterID` int(11)
,`Mottagare` varchar(45)
,`Modell` varchar(60)
);

-- --------------------------------------------------------

--
-- Table structure for table `alster_has_garn_has_colour`
--

CREATE TABLE `alster_has_garn_has_colour` (
  `agcID` int(11) NOT NULL,
  `Alster_ID` int(11) NOT NULL,
  `Garn_has_colour_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alster_has_garn_has_colour`
--

INSERT INTO `alster_has_garn_has_colour` (`agcID`, `Alster_ID`, `Garn_has_colour_ID`) VALUES
(1, 1, 15),
(2, 4, 4),
(3, 7, 4),
(4, 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE `colour` (
  `fargNamn` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`fargNamn`) VALUES
('beige'),
('blå jeans'),
('cerise'),
('cerise-lila-grå-melerad'),
('cerise-röd'),
('gråmelerad'),
('hallonrosa'),
('höst'),
('karamellrosa'),
('kritvit'),
('krusbär'),
('lejongul på ljusgrå'),
('ljung'),
('ljusgrå'),
('mandel (melerad beige-brun)'),
('mellangrå'),
('mörk cerise'),
('mörk turkos'),
('mörkgrå'),
('mossgrön'),
('naturvit'),
('Neongul'),
('neonrosa'),
('orange-cerise'),
('pastell'),
('röd-svart melerad'),
('rosa-röd'),
('självrand:  ljusblå, rost, mullv, lite gult'),
('sky pink'),
('sky turkos'),
('svart'),
('turkos, klar'),
('turkos, melerad');

-- --------------------------------------------------------

--
-- Table structure for table `garn`
--

CREATE TABLE `garn` (
  `ID` int(11) NOT NULL,
  `nameManuf` varchar(45) DEFAULT NULL,
  `material` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `garn`
--

INSERT INTO `garn` (`ID`, `nameManuf`, `material`) VALUES
(1, 'Entrådigt ullgarn, Ullcentrum', '100% ull'),
(2, 'Tvåtrådigt ullgarn, Ullcentrum', '100% ull'),
(3, 'Svarta Katten Siri', '100% akryl'),
(4, 'Svarta Katten Freja', '100% akryl'),
(5, 'Järbo Lady', '100% akryl'),
(6, 'Svarta Katten Galaxy reflexgarn', 'akryl, reflex'),
(7, 'Järbo reflexgarn', 'ull, reflex'),
(8, 'Järbo Molly', '100% akryl'),
(9, '4-trådigt ullgarn, Ullcentrum ', '100% ull'),
(10, 'Drops Air', '70% Alpaca, 23% Polyamid, 7% Ull'),
(11, 'Big Verona Järbo', '100% akryl'),
(460, 'Järbo Vinga', 'ull, akryl'),
(461, 'Rustik', '80% ull, 20% polyamid'),
(463, 'Återvunnet garn, grön väst', '100% lin'),
(464, 'Entrådigt ullgarn, Agnetas Vävbod ', '100% ull');

-- --------------------------------------------------------

--
-- Stand-in structure for view `garn-och-färg`
-- (See below for the actual view)
--
CREATE TABLE `garn-och-färg` (
`Garn` varchar(45)
,`Material` varchar(45)
,`Färg` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `garn_has_colour`
--

CREATE TABLE `garn_has_colour` (
  `ID` int(11) NOT NULL,
  `Garn_ID` int(11) NOT NULL,
  `fargNamn` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `garn_has_colour`
--

INSERT INTO `garn_has_colour` (`ID`, `Garn_ID`, `fargNamn`) VALUES
(1, 5, 'cerise'),
(2, 1, 'ljusgrå'),
(3, 1, 'mellangrå'),
(4, 1, 'mörk cerise'),
(5, 1, 'mörk turkos'),
(6, 1, 'naturvit'),
(7, 1, 'röd-svart melerad'),
(8, 1, 'sky pink'),
(9, 8, 'hallonrosa'),
(10, 8, 'ljusgrå'),
(11, 8, 'mellangrå'),
(12, 8, 'mörkgrå'),
(13, 8, 'svart'),
(14, 1, 'höst'),
(15, 1, 'rosa-röd'),
(18, 460, 'ljusgrå'),
(19, 463, 'mossgrön'),
(20, 1, 'turkos, klar'),
(21, 1, 'orange-cerise'),
(22, 1, 'sky turkos'),
(23, 1, 'cerise-lila-grå-melerad'),
(24, 1, 'blå jeans'),
(25, 1, 'cerise-röd'),
(26, 1, 'pastell'),
(27, 1, 'gråmelerad'),
(28, 1, 'krusbär'),
(29, 2, 'lejongul på ljusgrå'),
(30, 1, 'mandel (melerad beige-brun)'),
(31, 464, 'Neongul');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ID` int(11) NOT NULL,
  `modellTyp` varchar(60) NOT NULL COMMENT 'Type of object, name of model, technique used, "Trekantssjal uppifrån och ner"',
  `Kategori_namn` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID`, `modellTyp`, `Kategori_namn`) VALUES
(1, 'Trekantssjal, nacke till spets, v-form', 'sjal'),
(2, 'Trekantssjal, spets till topp', 'sjal'),
(3, 'Dragspelssockar', 'sockar'),
(4, 'Pussyhat', 'mössa'),
(5, 'Halsduk', 'halsduk'),
(6, 'Raggsockar', 'sockar'),
(7, 'Selma-krage', 'krage'),
(8, 'Polokrage', 'krage'),
(11, 'Vantar i vriden resår', 'vantar');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `namn` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`namn`) VALUES
('halsduk'),
('klänning'),
('krage'),
('mössa'),
('påse'),
('sjal'),
('slipover'),
('sockar'),
('tofflor'),
('vantar');

-- --------------------------------------------------------

--
-- Table structure for table `mottagare`
--

CREATE TABLE `mottagare` (
  `ID` int(11) NOT NULL,
  `namn` varchar(45) NOT NULL,
  `kontakt` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mottagare`
--

INSERT INTO `mottagare` (`ID`, `namn`, `kontakt`) VALUES
(1, 'Kim', NULL),
(2, 'Hugo', NULL),
(3, 'Sami', NULL),
(4, 'Marie', 'messenger'),
(5, 'Eira', 'Marie'),
(6, 'Mamma', NULL),
(7, 'Fia Windh', NULL),
(8, 'Amal, Samis syster', NULL),
(9, 'Susanne', 'messenger'),
(10, 'Ulrika Morris', NULL),
(11, 'Claes', NULL),
(12, 'Gabriella', ''),
(14, 'Caroline', 'messenger'),
(15, 'AK / Frank', 'DS, sms'),
(16, 'Samuel', 'messenger');

-- --------------------------------------------------------

--
-- Structure for view `alsterext2`
--
DROP TABLE IF EXISTS `alsterext2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alsterext2`  AS  select `m`.`namn` AS `Mottagare`,`i`.`modellTyp` AS `Modell`,`g`.`nameManuf` AS `Garn`,`c`.`fargNamn` AS `Färg`,`a`.`feature` AS `Särdrag`,`a`.`kommentarer` AS `Kommentarer`,`a`.`pris` AS `Pris`,`a`.`datumFinish` AS `Avslutad` from ((((((`mottagare` `m` join `item` `i`) join `garn` `g`) join `colour` `c`) join `alster` `a`) join `alster_has_garn_has_colour` `agc`) join `garn_has_colour` `ghc`) where ((`a`.`Mottagare_ID` = `m`.`ID`) and (`a`.`Item_ID` = `i`.`ID`) and (`agc`.`Alster_ID` = `a`.`ID`) and (`agc`.`Garn_has_colour_ID` = `ghc`.`ID`) and (`ghc`.`Garn_ID` = `g`.`ID`) and (`ghc`.`fargNamn` = `c`.`fargNamn`)) ;

-- --------------------------------------------------------

--
-- Structure for view `alsterid-mottagare-modell`
--
DROP TABLE IF EXISTS `alsterid-mottagare-modell`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alsterid-mottagare-modell`  AS  select `a`.`ID` AS `AlsterID`,`m`.`namn` AS `Mottagare`,`i`.`modellTyp` AS `Modell` from ((`mottagare` `m` join `item` `i`) join `alster` `a`) where ((`a`.`Mottagare_ID` = `m`.`ID`) and (`a`.`Item_ID` = `i`.`ID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `garn-och-färg`
--
DROP TABLE IF EXISTS `garn-och-färg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `garn-och-färg`  AS  select `garn`.`nameManuf` AS `Garn`,`garn`.`material` AS `Material`,`colour`.`fargNamn` AS `Färg` from ((`garn_has_colour` join `garn`) join `colour`) where ((`garn_has_colour`.`Garn_ID` = `garn`.`ID`) and (`garn_has_colour`.`fargNamn` = `colour`.`fargNamn`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alster`
--
ALTER TABLE `alster`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indexes for table `alster_has_garn_has_colour`
--
ALTER TABLE `alster_has_garn_has_colour`
  ADD PRIMARY KEY (`agcID`);

--
-- Indexes for table `colour`
--
ALTER TABLE `colour`
  ADD PRIMARY KEY (`fargNamn`);

--
-- Indexes for table `garn`
--
ALTER TABLE `garn`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `garn_has_colour`
--
ALTER TABLE `garn_has_colour`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Garn_has_colour_colour1_idx` (`fargNamn`),
  ADD KEY `fk_Garn_has_colour_Garn1` (`Garn_ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`,`Kategori_namn`),
  ADD KEY `fk_Item_Kategori1_idx` (`Kategori_namn`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`namn`);

--
-- Indexes for table `mottagare`
--
ALTER TABLE `mottagare`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alster`
--
ALTER TABLE `alster`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `alster_has_garn_has_colour`
--
ALTER TABLE `alster_has_garn_has_colour`
  MODIFY `agcID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `garn`
--
ALTER TABLE `garn`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;
--
-- AUTO_INCREMENT for table `garn_has_colour`
--
ALTER TABLE `garn_has_colour`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mottagare`
--
ALTER TABLE `mottagare`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `garn_has_colour`
--
ALTER TABLE `garn_has_colour`
  ADD CONSTRAINT `fk_Garn_has_colour_Garn1` FOREIGN KEY (`Garn_ID`) REFERENCES `garn` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Garn_has_colour_colour1` FOREIGN KEY (`fargNamn`) REFERENCES `colour` (`fargNamn`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_Item_Kategori1` FOREIGN KEY (`Kategori_namn`) REFERENCES `kategori` (`namn`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
