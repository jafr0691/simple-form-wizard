-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2021 a las 06:50:16
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formtest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `code_region`
--

CREATE TABLE `code_region` (
  `id_co_re` int(11) NOT NULL,
  `code` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `text_code` varchar(8) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `code_region`
--

INSERT INTO `code_region` (`id_co_re`, `code`, `text_code`) VALUES
(1, '376', 'AD'),
(2, '971', 'AE'),
(3, '93', 'AF'),
(4, '1268', 'AG'),
(5, '1 26', 'AI'),
(6, '355', 'AL'),
(7, '374', 'AM'),
(8, '599', 'AN'),
(9, '244', 'AO'),
(10, '54', 'AR'),
(11, '1 68', 'AS'),
(12, '43', 'AT'),
(13, '61', 'AU'),
(14, '297', 'AW'),
(15, '994', 'AZ'),
(16, '387', 'BA'),
(17, '1 24', 'BB'),
(18, '880', 'BD'),
(19, '32', 'BE'),
(20, '226', 'BF'),
(21, '359', 'BG'),
(22, '973', 'BH'),
(23, '257', 'BI'),
(24, '229', 'BJ'),
(25, '590', 'BL'),
(26, '1 44', 'BM'),
(27, '673', 'BN'),
(28, '591', 'BO'),
(29, '55', 'BR'),
(30, '1 24', 'BS'),
(31, '975', 'BT'),
(32, '267', 'BW'),
(33, '375', 'BY'),
(34, '501', 'BZ'),
(35, '1', 'CA'),
(36, '61', 'CC'),
(37, '243', 'CD'),
(38, '236', 'CF'),
(39, '242', 'CG'),
(40, '41', 'CH'),
(41, '225', 'CI'),
(42, '682', 'CK'),
(43, '56', 'CL'),
(44, '237', 'CM'),
(45, '86', 'CN'),
(46, '57', 'CO'),
(47, '506', 'CR'),
(48, '53', 'CU'),
(49, '238', 'CV'),
(50, '61', 'CX'),
(51, '537', 'CY'),
(52, '420', 'CZ'),
(53, '49', 'DE'),
(54, '253', 'DJ'),
(55, '45', 'DK'),
(56, '1 76', 'DM'),
(57, '1 84', 'DO'),
(58, '213', 'DZ'),
(59, '593', 'EC'),
(60, '372', 'EE'),
(61, '20', 'EG'),
(62, '291', 'ER'),
(63, '34', 'ES'),
(64, '251', 'ET'),
(65, '358', 'FI'),
(66, '679', 'FJ'),
(67, '500', 'FK'),
(68, '691', 'FM'),
(69, '298', 'FO'),
(70, '33', 'FR'),
(71, '241', 'GA'),
(72, '44', 'GB'),
(73, '1 47', 'GD'),
(74, '995', 'GE'),
(75, '594', 'GF'),
(76, '44', 'GG'),
(77, '233', 'GH'),
(78, '350', 'GI'),
(79, '299', 'GL'),
(80, '220', 'GM'),
(81, '224', 'GN'),
(82, '590', 'GP'),
(83, '240', 'GQ'),
(84, '30', 'GR'),
(85, '500', 'GS'),
(86, '502', 'GT'),
(87, '1 67', 'GU'),
(88, '245', 'GW'),
(89, '592', 'GY'),
(90, '852', 'HK'),
(91, '504', 'HN'),
(92, '385', 'HR'),
(93, '509', 'HT'),
(94, '36', 'HU'),
(95, '62', 'ID'),
(96, '353', 'IE'),
(97, '972', 'IL'),
(98, '972', 'IL'),
(99, '44', 'IM'),
(100, '91', 'IN'),
(101, '246', 'IO'),
(102, '964', 'IQ'),
(103, '98', 'IR'),
(104, '354', 'IS'),
(105, '39', 'IT'),
(106, '44', 'JE'),
(107, '1 87', 'JM'),
(108, '962', 'JO'),
(109, '81', 'JP'),
(110, '254', 'KE'),
(111, '996', 'KG'),
(112, '855', 'KH'),
(113, '686', 'KI'),
(114, '269', 'KM'),
(115, '1 86', 'KN'),
(116, '850', 'KP'),
(117, '82', 'KR'),
(118, '965', 'KW'),
(119, ' 345', 'KY'),
(120, '7 7', 'KZ'),
(121, '856', 'LA'),
(122, '961', 'LB'),
(123, '1 75', 'LC'),
(124, '423', 'LI'),
(125, '94', 'LK'),
(126, '231', 'LR'),
(127, '266', 'LS'),
(128, '370', 'LT'),
(129, '352', 'LU'),
(130, '371', 'LV'),
(131, '218', 'LY'),
(132, '212', 'MA'),
(133, '377', 'MC'),
(134, '373', 'MD'),
(135, '382', 'ME'),
(136, '590', 'MF'),
(137, '261', 'MG'),
(138, '692', 'MH'),
(139, '389', 'MK'),
(140, '223', 'ML'),
(141, '95', 'MM'),
(142, '976', 'MN'),
(143, '853', 'MO'),
(144, '1 67', 'MP'),
(145, '596', 'MQ'),
(146, '222', 'MR'),
(147, '1664', 'MS'),
(148, '356', 'MT'),
(149, '230', 'MU'),
(150, '960', 'MV'),
(151, '265', 'MW'),
(152, '52', 'MX'),
(153, '60', 'MY'),
(154, '258', 'MZ'),
(155, '264', 'NA'),
(156, '687', 'NC'),
(157, '227', 'NE'),
(158, '672', 'NF'),
(159, '234', 'NG'),
(160, '505', 'NI'),
(161, '31', 'NL'),
(162, '47', 'NO'),
(163, '977', 'NP'),
(164, '674', 'NR'),
(165, '683', 'NU'),
(166, '64', 'NZ'),
(167, '968', 'OM'),
(168, '507', 'PA'),
(169, '51', 'PE'),
(170, '689', 'PF'),
(171, '675', 'PG'),
(172, '63', 'PH'),
(173, '92', 'PK'),
(174, '48', 'PL'),
(175, '508', 'PM'),
(176, '872', 'PN'),
(177, '1 93', 'PR'),
(178, '970', 'PS'),
(179, '351', 'PT'),
(180, '680', 'PW'),
(181, '595', 'PY'),
(182, '974', 'QA'),
(183, '262', 'RE'),
(184, '40', 'RO'),
(185, '381', 'RS'),
(186, '7', 'RU'),
(187, '250', 'RW'),
(188, '966', 'SA'),
(189, '677', 'SB'),
(190, '248', 'SC'),
(191, '249', 'SD'),
(192, '46', 'SE'),
(193, '65', 'SG'),
(194, '290', 'SH'),
(195, '386', 'SI'),
(196, '47', 'SJ'),
(197, '421', 'SK'),
(198, '232', 'SL'),
(199, '378', 'SM'),
(200, '221', 'SN'),
(201, '252', 'SO'),
(202, '597', 'SR'),
(203, '239', 'ST'),
(204, '503', 'SV'),
(205, '963', 'SY'),
(206, '268', 'SZ'),
(207, '1 64', 'TC'),
(208, '235', 'TD'),
(209, '228', 'TG'),
(210, '66', 'TH'),
(211, '992', 'TJ'),
(212, '690', 'TK'),
(213, '670', 'TL'),
(214, '993', 'TM'),
(215, '216', 'TN'),
(216, '676', 'TO'),
(217, '90', 'TR'),
(218, '1 86', 'TT'),
(219, '688', 'TV'),
(220, '886', 'TW'),
(221, '255', 'TZ'),
(222, '380', 'UA'),
(223, '256', 'UG'),
(224, '1', 'US'),
(225, '598', 'UY'),
(226, '998', 'UZ'),
(227, '379', 'VA'),
(228, '1 78', 'VC'),
(229, '58', 'VE'),
(230, '1 28', 'VG'),
(231, '1 34', 'VI'),
(232, '84', 'VN'),
(233, '678', 'VU'),
(234, '681', 'WF'),
(235, '685', 'WS'),
(236, '967', 'YE'),
(237, '262', 'YT'),
(238, '27', 'ZA'),
(239, '260', 'ZM'),
(240, '263', 'ZW');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formdatos`
--

CREATE TABLE `formdatos` (
  `id_form` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `date_form` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `code_region`
--
ALTER TABLE `code_region`
  ADD PRIMARY KEY (`id_co_re`);

--
-- Indices de la tabla `formdatos`
--
ALTER TABLE `formdatos`
  ADD PRIMARY KEY (`id_form`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `code_region`
--
ALTER TABLE `code_region`
  MODIFY `id_co_re` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT de la tabla `formdatos`
--
ALTER TABLE `formdatos`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
