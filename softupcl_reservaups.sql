-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-04-2018 a las 12:39:59
-- Versión del servidor: 5.5.51-38.2
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `softupcl_reservaups`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RESERVA`
--

CREATE TABLE IF NOT EXISTS `RESERVA` (
  `ID_RESERVA` int(11) NOT NULL,
  `CORREO` varchar(255) DEFAULT NULL,
  `FECHA` varchar(255) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `RESERVA`
--

INSERT INTO `RESERVA` (`ID_RESERVA`, `CORREO`, `FECHA`, `CANTIDAD`) VALUES
(1, 'dchicaizah1@est.ups.edu.ec', '130617100113', 1),
(2, 'kbaldeone@est.ups.edu', '130617100350', 1),
(3, 'keencons@hotmail.com', '130617100707', 1),
(4, 'cmazag@est.ups.edu.ec', '130617100918', 2),
(5, 'falvearr@est.ups.edu.ec', '130617101212', 1),
(6, 'jdominguezo1@est.ups.edu.ec', '130617102030', 2),
(7, 'cron@est.ups.edu.ec', '130617102822', 1),
(8, 'mespinozar@est.ups.edu.ec', '130617103218', 1),
(9, 'fborjav@est.ups.edu.ec', '130617103317', 1),
(10, 'jvillacresp@est.ups.edu.ec', '130617105534', 1),
(11, 'jmezat@est.ups.edu.ec', '130617111315', 1),
(12, '''%''@est.ups.edu.ec', '130617111841', 3),
(13, 'stixilemaa@est.ups.edu.ec', '140617063616', 3),
(14, 'javilesv1@est.ups.edu.ec', '140617075715', 1),
(15, 'cguamanzara@est.ups.edu.ec', '140617112721', 3),
(16, 'dfernandezp2@est.ups.edu.ec', '140617032508', 1),
(17, 'bgualotunap@est.ups.edu.ec', '140617040923', 1),
(18, 'kzapatao@est.ups.edu.ec', '140617114153', 1),
(19, 'atocagonc@est.ups.edu.ec', '150617115005', 1),
(20, 'alopezm5@est.ups.edu.ec', '180617055346', 2),
(21, 'vrivadeneirab@est.ups.edu.ec', '260617111004', 2),
(22, 'balseca@ups.edu.ec', '050717080831', 2),
(23, 'dchicaiza@hotmail.com', '160717115100', 2),
(24, 'asdas@lo.com', '310717032253', 3),
(25, 'hola@hotmail.com', '010817083411', 3),
(26, '', '060817101102', 2),
(27, 'juan@est.ups.edu.ec', '050218081645', 3),
(28, 'diegochicai1za1@hotmail.com', '010418114523', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `RESERVA`
--
ALTER TABLE `RESERVA`
  ADD PRIMARY KEY (`ID_RESERVA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `RESERVA`
--
ALTER TABLE `RESERVA`
  MODIFY `ID_RESERVA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
