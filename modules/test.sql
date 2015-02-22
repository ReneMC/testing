-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2015 a las 02:16:39
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE IF NOT EXISTS `catalogo` (
`id` int(11) NOT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `precio` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `producto`, `precio`) VALUES
(1, 'Mouse alambrico', '150.00'),
(2, 'Termo rojo', '200.00'),
(3, 'Gato cholo', '55.00'),
(4, 'Carpeta blanca', '35.00'),
(5, 'iPod nano', '1300.00'),
(6, 'Isolated earbuds', '200.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cim`
--

CREATE TABLE IF NOT EXISTS `cim` (
`id` int(16) NOT NULL,
  `tipo` varchar(16) NOT NULL,
  `codigo` varchar(16) NOT NULL,
  `nombre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `unidad_medida` varchar(16) NOT NULL,
  `precio` decimal(9,2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `cim`
--

INSERT INTO `cim` (`id`, `tipo`, `codigo`, `nombre`, `unidad_medida`, `precio`) VALUES
(1, 'PAQUETE', '01-ECO', 'LONA ECONOMICA PROMOCIONAL CON ESPALDA GRIS PARA CAMPAÑA POLITICA, NO TIENE GARANTIA', 'MT2', '40.00'),
(2, 'PAQUETE  ', '02', 'TABLOIDE IMPRESO EN ALTA DEFINICION. TAMAÑO DE 12" X 18"', 'PZA', '25.00'),
(3, 'PAQUETE', '02-08', 'TABLOIDE PAPEL ENGOMADO MATE, IMPRESO EN ALTA DEFINICION. TAMAÑO DE 12" X 18"', 'UNIDAD', '32.00'),
(4, 'PAQUETE  ', '10', 'COROPLAST IMPRESO 4MM', 'MT2', '485.00'),
(5, 'PAQUETE  ', '115-8X8', 'CARPA 8X8 PIES PROMOCIONAL CON IMPRESION EN 4 CARAS A 1 TINTA', 'PZA', '2154.31'),
(6, 'PAQUETE  ', '13', 'BASTIDOR METALICO TENSADO', 'MT2', '620.00'),
(7, 'PAQUETE  ', '19 ', 'PAPEL FOTOGRAFICO ECOPRINT - IMPRESO EN NUESTRA TECNOLOGIA LATEX DE HP A MAXIMA CALIDAD. ', 'MT2', '221.00'),
(8, 'PAQUETE', '02-08', 'TABLOIDE PAPEL ENGOMADO MATE, IMPRESO EN ALTA DEFINICION. TAMAÑO DE 12" X 18"', 'UNIDAD', '32.00'),
(9, 'PAQUETE  ', '10', 'COROPLAST IMPRESO 4MM', 'MT2', '485.00'),
(10, 'PAQUETE  ', '115-8X8', 'CARPA 8X8 PIES PROMOCIONAL CON IMPRESION EN 4 CARAS A 1 TINTA', 'PZA', '2154.31'),
(11, 'PAQUETE  ', '13', 'BASTIDOR METALICO TENSADO', 'MT2', '620.00'),
(12, 'PAQUETE  ', '19 ', 'PAPEL FOTOGRAFICO ECOPRINT - IMPRESO EN NUESTRA TECNOLOGIA LATEX DE HP A MAXIMA CALIDAD. ', 'MT2', '221.80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cim`
--
ALTER TABLE `cim`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cim`
--
ALTER TABLE `cim`
MODIFY `id` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
