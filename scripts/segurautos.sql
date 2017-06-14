-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2017 a las 11:35:50
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `segurautos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `idmarcas` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `shortcode` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`idmarcas`, `nombre`, `shortcode`) VALUES
(1, 'Abarth', 'abarth'),
(2, 'Alfa Romeo', 'alfa-romeo'),
(3, 'Aro', 'aro'),
(4, 'Asia', 'asia'),
(5, 'Asia Motors', 'asia-motors'),
(6, 'Aston Martin', 'aston-martin'),
(7, 'Audi', 'audi'),
(8, 'Austin', 'austin'),
(9, 'Auverland', 'auverland'),
(10, 'Bentley', 'bentley'),
(11, 'Bertone', 'bertone'),
(12, 'BMW', 'bmw'),
(13, 'Cadillac', 'cadillac'),
(14, 'Chevrolet', 'chevrolet'),
(15, 'Chrysler', 'chrysler'),
(16, 'Citroen', 'citroen'),
(17, 'Corvette', 'corvette'),
(18, 'Dacia', 'dacia'),
(19, 'Daewoo', 'daewoo'),
(20, 'DAF', 'daf'),
(21, 'Daihatsu', 'daihatsu'),
(22, 'Daimler', 'daimler'),
(23, 'Dodge', 'dodge'),
(24, 'Ferrari', 'ferrari'),
(25, 'Fiat', 'fiat'),
(26, 'Ford', 'ford'),
(27, 'Galloper', 'galloper'),
(28, 'GMC', 'gmc'),
(29, 'Honda', 'honda'),
(30, 'Hummer', 'hummer'),
(31, 'Hyundai', 'hyundai'),
(32, 'Infiniti', 'infiniti'),
(33, 'Innocenti', 'innocenti'),
(34, 'Isuzu', 'isuzu'),
(35, 'Iveco', 'iveco'),
(36, 'Iveco-pegaso', 'iveco-pegaso'),
(37, 'Jaguar', 'jaguar'),
(38, 'Jeep', 'jeep'),
(39, 'Kia', 'kia'),
(40, 'Lada', 'lada'),
(41, 'Lamborghini', 'lamborghini'),
(42, 'Lancia', 'lancia'),
(43, 'Land-rover', 'land-rover'),
(44, 'LDV', 'ldv'),
(45, 'Lexus', 'lexus'),
(46, 'Lotus', 'lotus'),
(47, 'Mahindra', 'mahindra'),
(48, 'Maserati', 'maserati'),
(49, 'Maybach', 'maybach'),
(50, 'Mazda', 'mazda'),
(51, 'Mercedes-benz', 'mercedes-benz'),
(52, 'MG', 'mg'),
(53, 'Mini', 'mini'),
(54, 'Mitsubishi', 'mitsubishi'),
(55, 'Morgan', 'morgan'),
(56, 'Nissan', 'nissan'),
(57, 'Opel', 'opel'),
(58, 'Peugeot', 'peugeot'),
(59, 'Pontiac', 'pontiac'),
(60, 'Porsche', 'porsche'),
(61, 'Renault', 'renault'),
(62, 'Rolls-royce', 'rolls-royce'),
(63, 'Rover', 'rover'),
(64, 'Saab', 'saab'),
(65, 'Santana', 'santana'),
(66, 'Seat', 'seat'),
(67, 'Skoda', 'skoda'),
(68, 'Smart', 'smart'),
(69, 'Ssangyong', 'ssangyong'),
(70, 'Subaru', 'subaru'),
(71, 'Suzuki', 'suzuki'),
(72, 'Talbot', 'talbot'),
(73, 'Tata', 'tata'),
(74, 'Toyota', 'toyota'),
(75, 'Umm', 'umm'),
(76, 'Vaz', 'vaz'),
(77, 'Volkswagen', 'volkswagen'),
(78, 'Volvo', 'volvo'),
(79, 'Wartburg', 'wartburg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `idmodelos` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `shortcode` varchar(75) DEFAULT NULL,
  `idmarcas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`idmodelos`, `nombre`, `shortcode`, `idmarcas`) VALUES
(1, '500', '500', 1),
(2, 'Grande Punto', 'grande-punto', 1),
(3, 'Punto Evo', 'punto-evo', 1),
(4, '500c', '500c', 1),
(5, '695', '695', 1),
(6, 'Punto', 'punto', 1),
(7, '155', '155', 2),
(8, '156', '156', 2),
(9, '159', '159', 2),
(10, '164', '164', 2),
(11, '145', '145', 2),
(12, '147', '147', 2),
(13, '146', '146', 2),
(14, 'Gtv', 'gtv', 2),
(15, 'Spider', 'spider', 2),
(16, '166', '166', 2),
(17, 'Gt', 'gt', 2),
(18, 'Crosswagon', 'crosswagon', 2),
(19, 'Brera', 'brera', 2),
(20, '90', '90', 2),
(21, '75', '75', 2),
(22, '33', '33', 2),
(23, 'Giulietta', 'giulietta', 2),
(24, 'Sprint', 'sprint', 2),
(25, 'Mito', 'mito', 2),
(26, 'Expander', 'expander', 3),
(27, '10', '10', 3),
(28, '24', '24', 3),
(29, 'Dacia', 'dacia', 3),
(30, 'Rocsta', 'rocsta', 4),
(31, 'Rocsta', 'rocsta', 5),
(32, 'Db7', 'db7', 6),
(33, 'V8', 'v8', 6),
(34, 'Db9', 'db9', 6),
(35, 'Vanquish', 'vanquish', 6),
(36, 'V8 Vantage', 'v8-vantage', 6),
(37, 'Vantage', 'vantage', 6),
(38, 'Dbs', 'dbs', 6),
(39, 'Volante', 'volante', 6),
(40, 'Virage', 'virage', 6),
(41, 'Vantage V8', 'vantage-v8', 6),
(42, 'Vantage V12', 'vantage-v12', 6),
(43, 'Rapide', 'rapide', 6),
(44, 'Cygnet', 'cygnet', 6),
(45, '80', '80', 7),
(46, 'A4', 'a4', 7),
(47, 'A6', 'a6', 7),
(48, 'S6', 's6', 7),
(49, 'Coupe', 'coupe', 7),
(50, 'S2', 's2', 7),
(51, 'Rs2', 'rs2', 7),
(52, 'A8', 'a8', 7),
(53, 'Cabriolet', 'cabriolet', 7),
(54, 'S8', 's8', 7),
(55, 'A3', 'a3', 7),
(56, 'S4', 's4', 7),
(57, 'Tt', 'tt', 7),
(58, 'S3', 's3', 7),
(59, 'Allroad Quattro', 'allroad-quattro', 7),
(60, 'Rs4', 'rs4', 7),
(61, 'A2', 'a2', 7),
(62, 'Rs6', 'rs6', 7),
(63, 'Q7', 'q7', 7),
(64, 'R8', 'r8', 7),
(65, 'A5', 'a5', 7),
(66, 'S5', 's5', 7),
(67, 'V8', 'v8', 7),
(68, '200', '200', 7),
(69, '100', '100', 7),
(70, '90', '90', 7),
(71, 'Tts', 'tts', 7),
(72, 'Q5', 'q5', 7),
(73, 'A4 Allroad Quattro', 'a4-allroad-quattro', 7),
(74, 'Tt Rs', 'tt-rs', 7),
(75, 'Rs5', 'rs5', 7),
(76, 'A1', 'a1', 7),
(77, 'A7', 'a7', 7),
(78, 'Rs3', 'rs3', 7),
(79, 'Q3', 'q3', 7),
(80, 'A6 Allroad Quattro', 'a6-allroad-quattro', 7),
(81, 'S7', 's7', 7),
(82, 'Sq5', 'sq5', 7),
(83, 'Mini', 'mini', 8),
(84, 'Montego', 'montego', 8),
(85, 'Maestro', 'maestro', 8),
(86, 'Metro', 'metro', 8),
(87, 'Mini Moke', 'mini-moke', 8),
(88, 'Diesel', 'diesel', 9),
(89, 'Brooklands', 'brooklands', 10),
(90, 'Turbo', 'turbo', 10),
(91, 'Continental', 'continental', 10),
(92, 'Azure', 'azure', 10),
(93, 'Arnage', 'arnage', 10),
(94, 'Continental Gt', 'continental-gt', 10),
(95, 'Continental Flying Spur', 'continental-flying-spur', 10),
(96, 'Turbo R', 'turbo-r', 10),
(97, 'Mulsanne', 'mulsanne', 10),
(98, 'Eight', 'eight', 10),
(99, 'Continental Gtc', 'continental-gtc', 10),
(100, 'Continental Supersports', 'continental-supersports', 10),
(101, 'Freeclimber Diesel', 'freeclimber-diesel', 11),
(102, 'Serie 3', 'serie-3', 12),
(103, 'Serie 5', 'serie-5', 12),
(104, 'Compact', 'compact', 12),
(105, 'Serie 7', 'serie-7', 12),
(106, 'Serie 8', 'serie-8', 12),
(107, 'Z3', 'z3', 12),
(108, 'Z4', 'z4', 12),
(109, 'Z8', 'z8', 12),
(110, 'X5', 'x5', 12),
(111, 'Serie 6', 'serie-6', 12),
(112, 'X3', 'x3', 12),
(113, 'Serie 1', 'serie-1', 12),
(114, 'Z1', 'z1', 12),
(115, 'X6', 'x6', 12),
(116, 'X1', 'x1', 12),
(117, 'Seville', 'seville', 13),
(118, 'Sts', 'sts', 13),
(119, 'El Dorado', 'el-dorado', 13),
(120, 'Cts', 'cts', 13),
(121, 'Xlr', 'xlr', 13),
(122, 'Srx', 'srx', 13),
(123, 'Escalade', 'escalade', 13),
(124, 'Bls', 'bls', 13),
(125, 'Corvette', 'corvette', 14),
(126, 'Blazer', 'blazer', 14),
(127, 'Astro', 'astro', 14),
(128, 'Nubira', 'nubira', 14),
(129, 'Evanda', 'evanda', 14),
(130, 'Trans Sport', 'trans-sport', 14),
(131, 'Camaro', 'camaro', 14),
(132, 'Matiz', 'matiz', 14),
(133, 'Alero', 'alero', 14),
(134, 'Tahoe', 'tahoe', 14),
(135, 'Tacuma', 'tacuma', 14),
(136, 'Trailblazer', 'trailblazer', 14),
(137, 'Kalos', 'kalos', 14),
(138, 'Aveo', 'aveo', 14),
(139, 'Lacetti', 'lacetti', 14),
(140, 'Epica', 'epica', 14),
(141, 'Captiva', 'captiva', 14),
(142, 'Hhr', 'hhr', 14),
(143, 'Cruze', 'cruze', 14),
(144, 'Spark', 'spark', 14),
(145, 'Orlando', 'orlando', 14),
(146, 'Volt', 'volt', 14),
(147, 'Malibu', 'malibu', 14),
(148, 'Vision', 'vision', 15),
(149, '300m', '300m', 15),
(150, 'Grand Voyager', 'grand-voyager', 15),
(151, 'Viper', 'viper', 15),
(152, 'Neon', 'neon', 15),
(153, 'Voyager', 'voyager', 15),
(154, 'Stratus', 'stratus', 15),
(155, 'Sebring', 'sebring', 15),
(156, 'Sebring 200c', 'sebring-200c', 15),
(157, 'New Yorker', 'new-yorker', 15),
(158, 'Pt Cruiser', 'pt-cruiser', 15),
(159, 'Crossfire', 'crossfire', 15),
(160, '300c', '300c', 15),
(161, 'Le Baron', 'le-baron', 15),
(162, 'Saratoga', 'saratoga', 15),
(163, 'Xantia', 'xantia', 16),
(164, 'Xm', 'xm', 16),
(165, 'Ax', 'ax', 16),
(166, 'Zx', 'zx', 16),
(167, 'Evasion', 'evasion', 16),
(168, 'C8', 'c8', 16),
(169, 'Saxo', 'saxo', 16),
(170, 'C2', 'c2', 16),
(171, 'Xsara', 'xsara', 16),
(172, 'C4', 'c4', 16),
(173, 'Xsara Picasso', 'xsara-picasso', 16),
(174, 'C5', 'c5', 16),
(175, 'C3', 'c3', 16),
(176, 'C3 Pluriel', 'c3-pluriel', 16),
(177, 'C1', 'c1', 16),
(178, 'C6', 'c6', 16),
(179, 'Grand C4 Picasso', 'grand-c4-picasso', 16),
(180, 'C4 Picasso', 'c4-picasso', 16),
(181, 'Ccrosser', 'ccrosser', 16),
(182, 'C15', 'c15', 16),
(183, 'Jumper', 'jumper', 16),
(184, 'Jumpy', 'jumpy', 16),
(185, 'Berlingo', 'berlingo', 16),
(186, 'Bx', 'bx', 16),
(187, 'C25', 'c25', 16),
(188, 'Cx', 'cx', 16),
(189, 'Gsa', 'gsa', 16),
(190, 'Visa', 'visa', 16),
(191, 'Lna', 'lna', 16),
(192, '2cv', '2cv', 16),
(193, 'Nemo', 'nemo', 16),
(194, 'C4 Sedan', 'c4-sedan', 16),
(195, 'Berlingo First', 'berlingo-first', 16),
(196, 'C3 Picasso', 'c3-picasso', 16),
(197, 'Ds3', 'ds3', 16),
(198, 'Czero', 'czero', 16),
(199, 'Ds4', 'ds4', 16),
(200, 'Ds5', 'ds5', 16),
(201, 'C4 Aircross', 'c4-aircross', 16),
(202, 'Celysee', 'celysee', 16),
(203, 'Corvette', 'corvette', 17),
(204, 'Contac', 'contac', 18),
(205, 'Logan', 'logan', 18),
(206, 'Sandero', 'sandero', 18),
(207, 'Duster', 'duster', 18),
(208, 'Lodgy', 'lodgy', 18),
(209, 'Nexia', 'nexia', 19),
(210, 'Aranos', 'aranos', 19),
(211, 'Lanos', 'lanos', 19),
(212, 'Nubira', 'nubira', 19),
(213, 'Compact', 'compact', 19),
(214, 'Nubira Compact', 'nubira-compact', 19),
(215, 'Leganza', 'leganza', 19),
(216, 'Evanda', 'evanda', 19),
(217, 'Matiz', 'matiz', 19),
(218, 'Tacuma', 'tacuma', 19),
(219, 'Kalos', 'kalos', 19),
(220, 'Lacetti', 'lacetti', 19),
(221, 'Applause', 'applause', 21),
(222, 'Charade', 'charade', 21),
(223, 'Rocky', 'rocky', 21),
(224, 'Feroza', 'feroza', 21),
(225, 'Terios', 'terios', 21),
(226, 'Sirion', 'sirion', 21),
(227, 'Serie Xj', 'serie-xj', 22),
(228, 'Xj', 'xj', 22),
(229, 'Double Six', 'double-six', 22),
(230, 'Six', 'six', 22),
(231, 'Series Iii', 'series-iii', 22),
(232, 'Viper', 'viper', 23),
(233, 'Caliber', 'caliber', 23),
(234, 'Nitro', 'nitro', 23),
(235, 'Avenger', 'avenger', 23),
(236, 'Journey', 'journey', 23),
(237, 'F355', 'f355', 24),
(238, '360', '360', 24),
(239, 'F430', 'f430', 24),
(240, 'F512 M', 'f512-m', 24),
(241, '550 Maranello', '550-maranello', 24),
(242, '575m Maranello', '575m-maranello', 24),
(243, '599', '599', 24),
(244, '456', '456', 24),
(245, '456m', '456m', 24),
(246, '612', '612', 24),
(247, 'F50', 'f50', 24),
(248, 'Enzo', 'enzo', 24),
(249, 'Superamerica', 'superamerica', 24),
(250, '430', '430', 24),
(251, '348', '348', 24),
(252, 'Testarossa', 'testarossa', 24),
(253, '512', '512', 24),
(254, '355', '355', 24),
(255, 'F40', 'f40', 24),
(256, '412', '412', 24),
(257, 'Mondial', 'mondial', 24),
(258, '328', '328', 24),
(259, 'California', 'california', 24),
(260, '458', '458', 24),
(261, 'Ff', 'ff', 24),
(262, 'Croma', 'croma', 25),
(263, 'Cinquecento', 'cinquecento', 25),
(264, 'Seicento', 'seicento', 25),
(265, 'Punto', 'punto', 25),
(266, 'Grande Punto', 'grande-punto', 25),
(267, 'Panda', 'panda', 25),
(268, 'Tipo', 'tipo', 25),
(269, 'Coupe', 'coupe', 25),
(270, 'Uno', 'uno', 25),
(271, 'Ulysse', 'ulysse', 25),
(272, 'Tempra', 'tempra', 25),
(273, 'Marea', 'marea', 25),
(274, 'Barchetta', 'barchetta', 25),
(275, 'Bravo', 'bravo', 25),
(276, 'Stilo', 'stilo', 25),
(277, 'Brava', 'brava', 25),
(278, 'Palio Weekend', 'palio-weekend', 25),
(279, '600', '600', 25),
(280, 'Multipla', 'multipla', 25),
(281, 'Idea', 'idea', 25),
(282, 'Sedici', 'sedici', 25),
(283, 'Linea', 'linea', 25),
(284, '500', '500', 25),
(285, 'Fiorino', 'fiorino', 25),
(286, 'Ducato', 'ducato', 25),
(287, 'Doblo Cargo', 'doblo-cargo', 25),
(288, 'Doblo', 'doblo', 25),
(289, 'Strada', 'strada', 25),
(290, 'Regata', 'regata', 25),
(291, 'Talento', 'talento', 25),
(292, 'Argenta', 'argenta', 25),
(293, 'Ritmo', 'ritmo', 25),
(294, 'Punto Classic', 'punto-classic', 25),
(295, 'Qubo', 'qubo', 25),
(296, 'Punto Evo', 'punto-evo', 25),
(297, '500c', '500c', 25),
(298, 'Freemont', 'freemont', 25),
(299, 'Panda Classic', 'panda-classic', 25),
(300, '500l', '500l', 25),
(301, 'Maverick', 'maverick', 26),
(302, 'Escort', 'escort', 26),
(303, 'Focus', 'focus', 26),
(304, 'Mondeo', 'mondeo', 26),
(305, 'Scorpio', 'scorpio', 26),
(306, 'Fiesta', 'fiesta', 26),
(307, 'Probe', 'probe', 26),
(308, 'Explorer', 'explorer', 26),
(309, 'Galaxy', 'galaxy', 26),
(310, 'Ka', 'ka', 26),
(311, 'Puma', 'puma', 26),
(312, 'Cougar', 'cougar', 26),
(313, 'Focus Cmax', 'focus-cmax', 26),
(314, 'Fusion', 'fusion', 26),
(315, 'Streetka', 'streetka', 26),
(316, 'Cmax', 'cmax', 26),
(317, 'Smax', 'smax', 26),
(318, 'Transit', 'transit', 26),
(319, 'Courier', 'courier', 26),
(320, 'Ranger', 'ranger', 26),
(321, 'Sierra', 'sierra', 26),
(322, 'Orion', 'orion', 26),
(323, 'Pick Up', 'pick-up', 26),
(324, 'Capri', 'capri', 26),
(325, 'Granada', 'granada', 26),
(326, 'Kuga', 'kuga', 26),
(327, 'Grand Cmax', 'grand-cmax', 26),
(328, 'Bmax', 'bmax', 26),
(329, 'Tourneo Custom', 'tourneo-custom', 26),
(330, 'Exceed', 'exceed', 27),
(331, 'Santamo', 'santamo', 27),
(332, 'Super Exceed', 'super-exceed', 27),
(333, 'Accord', 'accord', 29),
(334, 'Civic', 'civic', 29),
(335, 'Crx', 'crx', 29),
(336, 'Prelude', 'prelude', 29),
(337, 'Nsx', 'nsx', 29),
(338, 'Legend', 'legend', 29),
(339, 'Crv', 'crv', 29),
(340, 'Hrv', 'hrv', 29),
(341, 'Logo', 'logo', 29),
(342, 'S2000', 's2000', 29),
(343, 'Stream', 'stream', 29),
(344, 'Jazz', 'jazz', 29),
(345, 'Frv', 'frv', 29),
(346, 'Concerto', 'concerto', 29),
(347, 'Insight', 'insight', 29),
(348, 'Crz', 'crz', 29),
(349, 'H2', 'h2', 30),
(350, 'H3', 'h3', 30),
(351, 'H3t', 'h3t', 30),
(352, 'Lantra', 'lantra', 31),
(353, 'Sonata', 'sonata', 31),
(354, 'Elantra', 'elantra', 31),
(355, 'Accent', 'accent', 31),
(356, 'Scoupe', 'scoupe', 31),
(357, 'Coupe', 'coupe', 31),
(358, 'Atos', 'atos', 31),
(359, 'H1', 'h1', 31),
(360, 'Atos Prime', 'atos-prime', 31),
(361, 'Xg', 'xg', 31),
(362, 'Trajet', 'trajet', 31),
(363, 'Santa Fe', 'santa-fe', 31),
(364, 'Terracan', 'terracan', 31),
(365, 'Matrix', 'matrix', 31),
(366, 'Getz', 'getz', 31),
(367, 'Tucson', 'tucson', 31),
(368, 'I30', 'i30', 31),
(369, 'Pony', 'pony', 31),
(370, 'Grandeur', 'grandeur', 31),
(371, 'I10', 'i10', 31),
(372, 'I800', 'i800', 31),
(373, 'Sonata Fl', 'sonata-fl', 31),
(374, 'Ix55', 'ix55', 31),
(375, 'I20', 'i20', 31),
(376, 'Ix35', 'ix35', 31),
(377, 'Ix20', 'ix20', 31),
(378, 'Genesis', 'genesis', 31),
(379, 'I40', 'i40', 31),
(380, 'Veloster', 'veloster', 31),
(381, 'G', 'g', 32),
(382, 'Ex', 'ex', 32),
(383, 'Fx', 'fx', 32),
(384, 'M', 'm', 32),
(385, 'Elba', 'elba', 33),
(386, 'Minitre', 'minitre', 33),
(387, 'Trooper', 'trooper', 34),
(388, 'Pick Up', 'pick-up', 34),
(389, 'D Max', 'd-max', 34),
(390, 'Rodeo', 'rodeo', 34),
(391, 'Dmax', 'dmax', 34),
(392, 'Trroper', 'trroper', 34),
(393, 'Daily', 'daily', 35),
(394, 'Massif', 'massif', 35),
(395, 'Daily', 'daily', 36),
(396, 'Duty', 'duty', 36),
(397, 'Serie Xj', 'serie-xj', 37),
(398, 'Serie Xk', 'serie-xk', 37),
(399, 'Xj', 'xj', 37),
(400, 'Stype', 'stype', 37),
(401, 'Xf', 'xf', 37),
(402, 'Xtype', 'xtype', 37),
(403, 'Wrangler', 'wrangler', 38),
(404, 'Cherokee', 'cherokee', 38),
(405, 'Grand Cherokee', 'grand-cherokee', 38),
(406, 'Commander', 'commander', 38),
(407, 'Compass', 'compass', 38),
(408, 'Wrangler Unlimited', 'wrangler-unlimited', 38),
(409, 'Patriot', 'patriot', 38),
(410, 'Sportage', 'sportage', 39),
(411, 'Sephia', 'sephia', 39),
(412, 'Sephia Ii', 'sephia-ii', 39),
(413, 'Pride', 'pride', 39),
(414, 'Clarus', 'clarus', 39),
(415, 'Shuma', 'shuma', 39),
(416, 'Carnival', 'carnival', 39),
(417, 'Joice', 'joice', 39),
(418, 'Magentis', 'magentis', 39),
(419, 'Carens', 'carens', 39),
(420, 'Rio', 'rio', 39),
(421, 'Cerato', 'cerato', 39),
(422, 'Sorento', 'sorento', 39),
(423, 'Opirus', 'opirus', 39),
(424, 'Picanto', 'picanto', 39),
(425, 'Ceed', 'ceed', 39),
(426, 'Ceed Sporty Wagon', 'ceed-sporty-wagon', 39),
(427, 'Proceed', 'proceed', 39),
(428, 'K2500 Frontier', 'k2500-frontier', 39),
(429, 'K2500', 'k2500', 39),
(430, 'Soul', 'soul', 39),
(431, 'Venga', 'venga', 39),
(432, 'Optima', 'optima', 39),
(433, 'Ceed Sportswagon', 'ceed-sportswagon', 39),
(434, 'Samara', 'samara', 40),
(435, 'Niva', 'niva', 40),
(436, 'Sagona', 'sagona', 40),
(437, 'Stawra 2110', 'stawra-2110', 40),
(438, '214', '214', 40),
(439, 'Kalina', 'kalina', 40),
(440, 'Serie 2100', 'serie-2100', 40),
(441, 'Priora', 'priora', 40),
(442, 'Gallardo', 'gallardo', 41),
(443, 'Murcielago', 'murcielago', 41),
(444, 'Aventador', 'aventador', 41),
(445, 'Delta', 'delta', 42),
(446, 'K', 'k', 42),
(447, 'Y10', 'y10', 42),
(448, 'Dedra', 'dedra', 42),
(449, 'Lybra', 'lybra', 42),
(450, 'Z', 'z', 42),
(451, 'Y', 'y', 42),
(452, 'Ypsilon', 'ypsilon', 42),
(453, 'Thesis', 'thesis', 42),
(454, 'Phedra', 'phedra', 42),
(455, 'Musa', 'musa', 42),
(456, 'Thema', 'thema', 42),
(457, 'Zeta', 'zeta', 42),
(458, 'Kappa', 'kappa', 42),
(459, 'Trevi', 'trevi', 42),
(460, 'Prisma', 'prisma', 42),
(461, 'A112', 'a112', 42),
(462, 'Ypsilon Elefantino', 'ypsilon-elefantino', 42),
(463, 'Voyager', 'voyager', 42),
(464, 'Range Rover', 'range-rover', 43),
(465, 'Defender', 'defender', 43),
(466, 'Discovery', 'discovery', 43),
(467, 'Freelander', 'freelander', 43),
(468, 'Range Rover Sport', 'range-rover-sport', 43),
(469, 'Discovery 4', 'discovery-4', 43),
(470, 'Range Rover Evoque', 'range-rover-evoque', 43),
(471, 'Maxus', 'maxus', 44),
(472, 'Ls400', 'ls400', 45),
(473, 'Ls430', 'ls430', 45),
(474, 'Gs300', 'gs300', 45),
(475, 'Is200', 'is200', 45),
(476, 'Rx300', 'rx300', 45),
(477, 'Gs430', 'gs430', 45),
(478, 'Gs460', 'gs460', 45),
(479, 'Sc430', 'sc430', 45),
(480, 'Is300', 'is300', 45),
(481, 'Is250', 'is250', 45),
(482, 'Rx400h', 'rx400h', 45),
(483, 'Is220d', 'is220d', 45),
(484, 'Rx350', 'rx350', 45),
(485, 'Gs450h', 'gs450h', 45),
(486, 'Ls460', 'ls460', 45),
(487, 'Ls600h', 'ls600h', 45),
(488, 'Ls', 'ls', 45),
(489, 'Gs', 'gs', 45),
(490, 'Is', 'is', 45),
(491, 'Sc', 'sc', 45),
(492, 'Rx', 'rx', 45),
(493, 'Ct', 'ct', 45),
(494, 'Elise', 'elise', 46),
(495, 'Exige', 'exige', 46),
(496, 'Bolero Pickup', 'bolero-pickup', 47),
(497, 'Goa Pickup', 'goa-pickup', 47),
(498, 'Goa', 'goa', 47),
(499, 'Cj', 'cj', 47),
(500, 'Pikup', 'pikup', 47),
(501, 'Thar', 'thar', 47),
(502, 'Ghibli', 'ghibli', 48),
(503, 'Shamal', 'shamal', 48),
(504, 'Quattroporte', 'quattroporte', 48),
(505, '3200 Gt', '3200-gt', 48),
(506, 'Coupe', 'coupe', 48),
(507, 'Spyder', 'spyder', 48),
(508, 'Gransport', 'gransport', 48),
(509, 'Granturismo', 'granturismo', 48),
(510, '430', '430', 48),
(511, 'Biturbo', 'biturbo', 48),
(512, '228', '228', 48),
(513, '224', '224', 48),
(514, 'Grancabrio', 'grancabrio', 48),
(515, 'Maybach', 'maybach', 49),
(516, 'Xedos 6', 'xedos-6', 50),
(517, '626', '626', 50),
(518, '121', '121', 50),
(519, 'Xedos 9', 'xedos-9', 50),
(520, '323', '323', 50),
(521, 'Mx3', 'mx3', 50),
(522, 'Rx7', 'rx7', 50),
(523, 'Mx5', 'mx5', 50),
(524, 'Mazda3', 'mazda3', 50),
(525, 'Mpv', 'mpv', 50),
(526, 'Demio', 'demio', 50),
(527, 'Premacy', 'premacy', 50),
(528, 'Tribute', 'tribute', 50),
(529, 'Mazda6', 'mazda6', 50),
(530, 'Mazda2', 'mazda2', 50),
(531, 'Rx8', 'rx8', 50),
(532, 'Mazda5', 'mazda5', 50),
(533, 'Cx7', 'cx7', 50),
(534, 'Serie B', 'serie-b', 50),
(535, 'B2500', 'b2500', 50),
(536, 'Bt50', 'bt50', 50),
(537, 'Mx6', 'mx6', 50),
(538, '929', '929', 50),
(539, 'Cx5', 'cx5', 50),
(540, 'Clase C', 'clase-c', 51),
(541, 'Clase E', 'clase-e', 51),
(542, 'Clase Sl', 'clase-sl', 51),
(543, 'Clase S', 'clase-s', 51),
(544, 'Clase Cl', 'clase-cl', 51),
(545, 'Clase G', 'clase-g', 51),
(546, 'Clase Slk', 'clase-slk', 51),
(547, 'Clase V', 'clase-v', 51),
(548, 'Viano', 'viano', 51),
(549, 'Clase Clk', 'clase-clk', 51),
(550, 'Clase A', 'clase-a', 51),
(551, 'Clase M', 'clase-m', 51),
(552, 'Vaneo', 'vaneo', 51),
(553, 'Slklasse', 'slklasse', 51),
(554, 'Slr Mclaren', 'slr-mclaren', 51),
(555, 'Clase Cls', 'clase-cls', 51),
(556, 'Clase R', 'clase-r', 51),
(557, 'Clase Gl', 'clase-gl', 51),
(558, 'Clase B', 'clase-b', 51),
(559, '100d', '100d', 51),
(560, '140d', '140d', 51),
(561, '180d', '180d', 51),
(562, 'Sprinter', 'sprinter', 51),
(563, 'Vito', 'vito', 51),
(564, 'Transporter', 'transporter', 51),
(565, '280', '280', 51),
(566, '220', '220', 51),
(567, '200', '200', 51),
(568, '190', '190', 51),
(569, '600', '600', 51),
(570, '400', '400', 51),
(571, 'Clase Sl R129', 'clase-sl-r129', 51),
(572, '300', '300', 51),
(573, '500', '500', 51),
(574, '420', '420', 51),
(575, '260', '260', 51),
(576, '230', '230', 51),
(577, 'Clase Clc', 'clase-clc', 51),
(578, 'Clase Glk', 'clase-glk', 51),
(579, 'Sls Amg', 'sls-amg', 51),
(580, 'Mgf', 'mgf', 52),
(581, 'Tf', 'tf', 52),
(582, 'Zr', 'zr', 52),
(583, 'Zs', 'zs', 52),
(584, 'Zt', 'zt', 52),
(585, 'Ztt', 'ztt', 52),
(586, 'Mini', 'mini', 52),
(587, 'Countryman', 'countryman', 52),
(588, 'Paceman', 'paceman', 52),
(589, 'Montero', 'montero', 54),
(590, 'Galant', 'galant', 54),
(591, 'Colt', 'colt', 54),
(592, 'Space Wagon', 'space-wagon', 54),
(593, 'Space Runner', 'space-runner', 54),
(594, 'Space Gear', 'space-gear', 54),
(595, '3000 Gt', '3000-gt', 54),
(596, 'Carisma', 'carisma', 54),
(597, 'Eclipse', 'eclipse', 54),
(598, 'Space Star', 'space-star', 54),
(599, 'Montero Sport', 'montero-sport', 54),
(600, 'Montero Io', 'montero-io', 54),
(601, 'Outlander', 'outlander', 54),
(602, 'Lancer', 'lancer', 54),
(603, 'Grandis', 'grandis', 54),
(604, 'L200', 'l200', 54),
(605, 'Canter', 'canter', 54),
(606, '300 Gt', '300-gt', 54),
(607, 'Asx', 'asx', 54),
(608, 'Imiev', 'imiev', 54),
(609, '44', '44', 55),
(610, 'Plus 8', 'plus-8', 55),
(611, 'Aero 8', 'aero-8', 55),
(612, 'V6', 'v6', 55),
(613, 'Roadster', 'roadster', 55),
(614, '4', '4', 55),
(615, 'Plus 4', 'plus-4', 55),
(616, 'Terrano Ii', 'terrano-ii', 56),
(617, 'Terrano', 'terrano', 56),
(618, 'Micra', 'micra', 56),
(619, 'Sunny', 'sunny', 56),
(620, 'Primera', 'primera', 56),
(621, 'Serena', 'serena', 56),
(622, 'Patrol', 'patrol', 56),
(623, 'Maxima Qx', 'maxima-qx', 56),
(624, '200 Sx', '200-sx', 56),
(625, '300 Zx', '300-zx', 56),
(626, 'Patrol Gr', 'patrol-gr', 56),
(627, '100 Nx', '100-nx', 56),
(628, 'Almera', 'almera', 56),
(629, 'Pathfinder', 'pathfinder', 56),
(630, 'Almera Tino', 'almera-tino', 56),
(631, 'Xtrail', 'xtrail', 56),
(632, '350z', '350z', 56),
(633, 'Murano', 'murano', 56),
(634, 'Note', 'note', 56),
(635, 'Qashqai', 'qashqai', 56),
(636, 'Tiida', 'tiida', 56),
(637, 'Vanette', 'vanette', 56),
(638, 'Trade', 'trade', 56),
(639, 'Vanette Cargo', 'vanette-cargo', 56),
(640, 'Pickup', 'pickup', 56),
(641, 'Navara', 'navara', 56),
(642, 'Cabstar E', 'cabstar-e', 56),
(643, 'Cabstar', 'cabstar', 56),
(644, 'Maxima', 'maxima', 56),
(645, 'Camion', 'camion', 56),
(646, 'Prairie', 'prairie', 56),
(647, 'Bluebird', 'bluebird', 56),
(648, 'Np300 Pick Up', 'np300-pick-up', 56),
(649, 'Qashqai2', 'qashqai2', 56),
(650, 'Pixo', 'pixo', 56),
(651, 'Gtr', 'gtr', 56),
(652, '370z', '370z', 56),
(653, 'Cube', 'cube', 56),
(654, 'Juke', 'juke', 56),
(655, 'Leaf', 'leaf', 56),
(656, 'Evalia', 'evalia', 56),
(657, 'Astra', 'astra', 57),
(658, 'Vectra', 'vectra', 57),
(659, 'Calibra', 'calibra', 57),
(660, 'Corsa', 'corsa', 57),
(661, 'Omega', 'omega', 57),
(662, 'Frontera', 'frontera', 57),
(663, 'Tigra', 'tigra', 57),
(664, 'Monterey', 'monterey', 57),
(665, 'Sintra', 'sintra', 57),
(666, 'Zafira', 'zafira', 57),
(667, 'Agila', 'agila', 57),
(668, 'Speedster', 'speedster', 57),
(669, 'Signum', 'signum', 57),
(670, 'Meriva', 'meriva', 57),
(671, 'Antara', 'antara', 57),
(672, 'Gt', 'gt', 57),
(673, 'Combo', 'combo', 57),
(674, 'Movano', 'movano', 57),
(675, 'Vivaro', 'vivaro', 57),
(676, 'Kadett', 'kadett', 57),
(677, 'Monza', 'monza', 57),
(678, 'Senator', 'senator', 57),
(679, 'Rekord', 'rekord', 57),
(680, 'Manta', 'manta', 57),
(681, 'Ascona', 'ascona', 57),
(682, 'Insignia', 'insignia', 57),
(683, 'Zafira Tourer', 'zafira-tourer', 57),
(684, 'Ampera', 'ampera', 57),
(685, 'Mokka', 'mokka', 57),
(686, 'Adam', 'adam', 57),
(687, '306', '306', 58),
(688, '605', '605', 58),
(689, '106', '106', 58),
(690, '205', '205', 58),
(691, '405', '405', 58),
(692, '406', '406', 58),
(693, '806', '806', 58),
(694, '807', '807', 58),
(695, '407', '407', 58),
(696, '307', '307', 58),
(697, '206', '206', 58),
(698, '607', '607', 58),
(699, '308', '308', 58),
(700, '307 Sw', '307-sw', 58),
(701, '206 Sw', '206-sw', 58),
(702, '407 Sw', '407-sw', 58),
(703, '1007', '1007', 58),
(704, '107', '107', 58),
(705, '207', '207', 58),
(706, '4007', '4007', 58),
(707, 'Boxer', 'boxer', 58),
(708, 'Partner', 'partner', 58),
(709, 'J5', 'j5', 58),
(710, '604', '604', 58),
(711, '505', '505', 58),
(712, '309', '309', 58),
(713, 'Bipper', 'bipper', 58),
(714, 'Partner Origin', 'partner-origin', 58),
(715, '3008', '3008', 58),
(716, '5008', '5008', 58),
(717, 'Rcz', 'rcz', 58),
(718, '508', '508', 58),
(719, 'Ion', 'ion', 58),
(720, '208', '208', 58),
(721, '4008', '4008', 58),
(722, 'Trans Sport', 'trans-sport', 59),
(723, 'Firebird', 'firebird', 59),
(724, 'Trans Am', 'trans-am', 59),
(725, '911', '911', 60),
(726, 'Boxster', 'boxster', 60),
(727, 'Cayenne', 'cayenne', 60),
(728, 'Carrera Gt', 'carrera-gt', 60),
(729, 'Cayman', 'cayman', 60),
(730, '928', '928', 60),
(731, '968', '968', 60),
(732, '944', '944', 60),
(733, '924', '924', 60),
(734, 'Panamera', 'panamera', 60),
(735, '918', '918', 60),
(736, 'Megane', 'megane', 61),
(737, 'Safrane', 'safrane', 61),
(738, 'Laguna', 'laguna', 61),
(739, 'Clio', 'clio', 61),
(740, 'Twingo', 'twingo', 61),
(741, 'Nevada', 'nevada', 61),
(742, 'Espace', 'espace', 61),
(743, 'Spider', 'spider', 61),
(744, 'Scenic', 'scenic', 61),
(745, 'Grand Espace', 'grand-espace', 61),
(746, 'Avantime', 'avantime', 61),
(747, 'Vel Satis', 'vel-satis', 61),
(748, 'Grand Scenic', 'grand-scenic', 61),
(749, 'Clio Campus', 'clio-campus', 61),
(750, 'Modus', 'modus', 61),
(751, 'Express', 'express', 61),
(752, 'Trafic', 'trafic', 61),
(753, 'Master', 'master', 61),
(754, 'Kangoo', 'kangoo', 61),
(755, 'Mascott', 'mascott', 61),
(756, 'Master Propulsion', 'master-propulsion', 61),
(757, 'Maxity', 'maxity', 61),
(758, 'R19', 'r19', 61),
(759, 'R25', 'r25', 61),
(760, 'R5', 'r5', 61),
(761, 'R21', 'r21', 61),
(762, 'R4', 'r4', 61),
(763, 'Alpine', 'alpine', 61),
(764, 'Fuego', 'fuego', 61),
(765, 'R18', 'r18', 61),
(766, 'R11', 'r11', 61),
(767, 'R9', 'r9', 61),
(768, 'R6', 'r6', 61),
(769, 'Grand Modus', 'grand-modus', 61),
(770, 'Kangoo Combi', 'kangoo-combi', 61),
(771, 'Koleos', 'koleos', 61),
(772, 'Fluence', 'fluence', 61),
(773, 'Wind', 'wind', 61),
(774, 'Latitude', 'latitude', 61),
(775, 'Grand Kangoo Combi', 'grand-kangoo-combi', 61),
(776, 'Siver Dawn', 'siver-dawn', 62),
(777, 'Silver Spur', 'silver-spur', 62),
(778, 'Park Ward', 'park-ward', 62),
(779, 'Silver Seraph', 'silver-seraph', 62),
(780, 'Corniche', 'corniche', 62),
(781, 'Phantom', 'phantom', 62),
(782, 'Touring', 'touring', 62),
(783, 'Silvier', 'silvier', 62),
(784, '800', '800', 63),
(785, '600', '600', 63),
(786, '100', '100', 63),
(787, '200', '200', 63),
(788, 'Coupe', 'coupe', 63),
(789, '400', '400', 63),
(790, '45', '45', 63),
(791, 'Cabriolet', 'cabriolet', 63),
(792, '25', '25', 63),
(793, 'Mini', 'mini', 63),
(794, '75', '75', 63),
(795, 'Streetwise', 'streetwise', 63),
(796, 'Sd', 'sd', 63),
(797, '900', '900', 64),
(798, '93', '93', 64),
(799, '9000', '9000', 64),
(800, '95', '95', 64),
(801, '93x', '93x', 64),
(802, '94x', '94x', 64),
(803, '300', '300', 65),
(804, '350', '350', 65),
(805, 'Anibal', 'anibal', 65),
(806, 'Anibal Pick Up', 'anibal-pick-up', 65),
(807, 'Ibiza', 'ibiza', 66),
(808, 'Cordoba', 'cordoba', 66),
(809, 'Toledo', 'toledo', 66),
(810, 'Marbella', 'marbella', 66),
(811, 'Alhambra', 'alhambra', 66),
(812, 'Arosa', 'arosa', 66),
(813, 'Leon', 'leon', 66),
(814, 'Altea', 'altea', 66),
(815, 'Altea Xl', 'altea-xl', 66),
(816, 'Altea Freetrack', 'altea-freetrack', 66),
(817, 'Terra', 'terra', 66),
(818, 'Inca', 'inca', 66),
(819, 'Malaga', 'malaga', 66),
(820, 'Ronda', 'ronda', 66),
(821, 'Exeo', 'exeo', 66),
(822, 'Mii', 'mii', 66),
(823, 'Felicia', 'felicia', 67),
(824, 'Forman', 'forman', 67),
(825, 'Octavia', 'octavia', 67),
(826, 'Octavia Tour', 'octavia-tour', 67),
(827, 'Fabia', 'fabia', 67),
(828, 'Superb', 'superb', 67),
(829, 'Roomster', 'roomster', 67),
(830, 'Scout', 'scout', 67),
(831, 'Pickup', 'pickup', 67),
(832, 'Favorit', 'favorit', 67),
(833, '130', '130', 67),
(834, 'S', 's', 67),
(835, 'Yeti', 'yeti', 67),
(836, 'Citigo', 'citigo', 67),
(837, 'Rapid', 'rapid', 67),
(838, 'Smart', 'smart', 68),
(839, 'Citycoupe', 'citycoupe', 68),
(840, 'Fortwo', 'fortwo', 68),
(841, 'Cabrio', 'cabrio', 68),
(842, 'Crossblade', 'crossblade', 68),
(843, 'Roadster', 'roadster', 68),
(844, 'Forfour', 'forfour', 68),
(845, 'Korando', 'korando', 69),
(846, 'Family', 'family', 69),
(847, 'K4d', 'k4d', 69),
(848, 'Musso', 'musso', 69),
(849, 'Korando Kj', 'korando-kj', 69),
(850, 'Rexton', 'rexton', 69),
(851, 'Rexton Ii', 'rexton-ii', 69),
(852, 'Rodius', 'rodius', 69),
(853, 'Kyron', 'kyron', 69),
(854, 'Actyon', 'actyon', 69),
(855, 'Sports Pick Up', 'sports-pick-up', 69),
(856, 'Actyon Sports Pick Up', 'actyon-sports-pick-up', 69),
(857, 'Kodando', 'kodando', 69),
(858, 'Legacy', 'legacy', 70),
(859, 'Impreza', 'impreza', 70),
(860, 'Svx', 'svx', 70),
(861, 'Justy', 'justy', 70),
(862, 'Outback', 'outback', 70),
(863, 'Forester', 'forester', 70),
(864, 'G3x Justy', 'g3x-justy', 70),
(865, 'B9 Tribeca', 'b9-tribeca', 70),
(866, 'Xt', 'xt', 70),
(867, '1800', '1800', 70),
(868, 'Tribeca', 'tribeca', 70),
(869, 'Wrx Sti', 'wrx-sti', 70),
(870, 'Trezia', 'trezia', 70),
(871, 'Xv', 'xv', 70),
(872, 'Brz', 'brz', 70),
(873, 'Maruti', 'maruti', 71),
(874, 'Swift', 'swift', 71),
(875, 'Vitara', 'vitara', 71),
(876, 'Baleno', 'baleno', 71),
(877, 'Samurai', 'samurai', 71),
(878, 'Alto', 'alto', 71),
(879, 'Wagon R', 'wagon-r', 71),
(880, 'Jimny', 'jimny', 71),
(881, 'Grand Vitara', 'grand-vitara', 71),
(882, 'Ignis', 'ignis', 71),
(883, 'Liana', 'liana', 71),
(884, 'Grand Vitara Xl7', 'grand-vitara-xl7', 71),
(885, 'Sx4', 'sx4', 71),
(886, 'Splash', 'splash', 71),
(887, 'Kizashi', 'kizashi', 71),
(888, 'Samba', 'samba', 72),
(889, 'Tagora', 'tagora', 72),
(890, 'Solara', 'solara', 72),
(891, 'Horizon', 'horizon', 72),
(892, 'Telcosport', 'telcosport', 73),
(893, 'Telco', 'telco', 73),
(894, 'Sumo', 'sumo', 73),
(895, 'Safari', 'safari', 73),
(896, 'Indica', 'indica', 73),
(897, 'Indigo', 'indigo', 73),
(898, 'Grand Safari', 'grand-safari', 73),
(899, 'Tl Pick Up', 'tl-pick-up', 73),
(900, 'Xenon Pick Up', 'xenon-pick-up', 73),
(901, 'Vista', 'vista', 73),
(902, 'Xenon', 'xenon', 73),
(903, 'Aria', 'aria', 73),
(904, 'Carina E', 'carina-e', 74),
(905, '4runner', '4runner', 74),
(906, 'Camry', 'camry', 74),
(907, 'Rav4', 'rav4', 74),
(908, 'Celica', 'celica', 74),
(909, 'Supra', 'supra', 74),
(910, 'Paseo', 'paseo', 74),
(911, 'Land Cruiser 80', 'land-cruiser-80', 74),
(912, 'Land Cruiser 100', 'land-cruiser-100', 74),
(913, 'Land Cruiser', 'land-cruiser', 74),
(914, 'Land Cruiser 90', 'land-cruiser-90', 74),
(915, 'Corolla', 'corolla', 74),
(916, 'Auris', 'auris', 74),
(917, 'Avensis', 'avensis', 74),
(918, 'Picnic', 'picnic', 74),
(919, 'Yaris', 'yaris', 74),
(920, 'Yaris Verso', 'yaris-verso', 74),
(921, 'Mr2', 'mr2', 74),
(922, 'Previa', 'previa', 74),
(923, 'Prius', 'prius', 74),
(924, 'Avensis Verso', 'avensis-verso', 74),
(925, 'Corolla Verso', 'corolla-verso', 74),
(926, 'Corolla Sedan', 'corolla-sedan', 74),
(927, 'Aygo', 'aygo', 74),
(928, 'Hilux', 'hilux', 74),
(929, 'Dyna', 'dyna', 74),
(930, 'Land Cruiser 200', 'land-cruiser-200', 74),
(931, 'Verso', 'verso', 74),
(932, 'Iq', 'iq', 74),
(933, 'Urban Cruiser', 'urban-cruiser', 74),
(934, 'Gt86', 'gt86', 74),
(935, '100', '100', 75),
(936, '121', '121', 75),
(937, '214', '214', 76),
(938, '110 Stawra', '110-stawra', 76),
(939, '111 Stawra', '111-stawra', 76),
(940, '215', '215', 76),
(941, '112 Stawra', '112-stawra', 76),
(942, 'Passat', 'passat', 77),
(943, 'Golf', 'golf', 77),
(944, 'Vento', 'vento', 77),
(945, 'Polo', 'polo', 77),
(946, 'Corrado', 'corrado', 77),
(947, 'Sharan', 'sharan', 77),
(948, 'Lupo', 'lupo', 77),
(949, 'Bora', 'bora', 77),
(950, 'Jetta', 'jetta', 77),
(951, 'New Beetle', 'new-beetle', 77),
(952, 'Phaeton', 'phaeton', 77),
(953, 'Touareg', 'touareg', 77),
(954, 'Touran', 'touran', 77),
(955, 'Multivan', 'multivan', 77),
(956, 'Caddy', 'caddy', 77),
(957, 'Golf Plus', 'golf-plus', 77),
(958, 'Fox', 'fox', 77),
(959, 'Eos', 'eos', 77),
(960, 'Caravelle', 'caravelle', 77),
(961, 'Tiguan', 'tiguan', 77),
(962, 'Transporter', 'transporter', 77),
(963, 'Lt', 'lt', 77),
(964, 'Taro', 'taro', 77),
(965, 'Crafter', 'crafter', 77),
(966, 'California', 'california', 77),
(967, 'Santana', 'santana', 77),
(968, 'Scirocco', 'scirocco', 77),
(969, 'Passat Cc', 'passat-cc', 77),
(970, 'Amarok', 'amarok', 77),
(971, 'Beetle', 'beetle', 77),
(972, 'Up', 'up', 77),
(973, 'Cc', 'cc', 77),
(974, '440', '440', 78),
(975, '850', '850', 78),
(976, 'S70', 's70', 78),
(977, 'V70', 'v70', 78),
(978, 'V70 Classic', 'v70-classic', 78),
(979, '940', '940', 78),
(980, '480', '480', 78),
(981, '460', '460', 78),
(982, '960', '960', 78),
(983, 'S90', 's90', 78),
(984, 'V90', 'v90', 78),
(985, 'Classic', 'classic', 78),
(986, 'S40', 's40', 78),
(987, 'V40', 'v40', 78),
(988, 'V50', 'v50', 78),
(989, 'V70 Xc', 'v70-xc', 78),
(990, 'Xc70', 'xc70', 78),
(991, 'C70', 'c70', 78),
(992, 'S80', 's80', 78),
(993, 'S60', 's60', 78),
(994, 'Xc90', 'xc90', 78),
(995, 'C30', 'c30', 78),
(996, '780', '780', 78),
(997, '760', '760', 78),
(998, '740', '740', 78),
(999, '240', '240', 78),
(1000, '360', '360', 78),
(1001, '340', '340', 78),
(1002, 'Xc60', 'xc60', 78),
(1003, 'V60', 'v60', 78),
(1004, 'V40 Cross Country', 'v40-cross-country', 78),
(1005, '353', '353', 79),
(1006, 'Mini', 'mini', 53),
(1007, 'Countryman', 'countryman', 53),
(1008, 'Paceman', 'paceman', 53);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idmarcas`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`idmodelos`),
  ADD KEY `fk_modelo_marcas_idx` (`idmarcas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `idmarcas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `idmodelos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD CONSTRAINT `fk_modelo_marcas` FOREIGN KEY (`idmarcas`) REFERENCES `marcas` (`idmarcas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
