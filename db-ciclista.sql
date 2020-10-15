-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2020 a las 13:39:09
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db-ciclista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corredor`
--

CREATE TABLE `corredor` (
  `id` int(11) NOT NULL,
  `corredor` varchar(50) NOT NULL,
  `id_equipo` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `especialidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `corredor`
--

INSERT INTO `corredor` (`id`, `corredor`, `id_equipo`, `edad`, `especialidad`) VALUES
(1, 'Emmanuel Buchman', 'BORA', 27, 'Vuelta por etapas'),
(2, 'Alejandro Valverde', 'Movistar', 42, 'Vuelta de una semana'),
(6, 'Primoz Roglic', 'Jumbo', 31, 'Vuelta por etapas'),
(7, 'Eduardo Sepulveda', 'Movistar', 29, 'gregario'),
(9, 'Peter Sagan', 'BORA', 32, 'clasicomano'),
(10, 'Egan Bernal', 'INEOS', 24, 'Vuelta por etapas'),
(33, 'Cesare Benedeti', 'Bora', 34, 'gregario'),
(34, 'Arnaud Demare', 'FDJ', 29, 'sprinter'),
(36, 'Thibaut Pinot', 'FDJ', 30, 'Vuelta por etapas'),
(37, 'Chris Froome', 'INEOS', 35, 'Vuelta por etapas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `id` int(11) NOT NULL,
  `persona` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id`, `persona`, `password`) VALUES
(1, 'primerAdmin', 123456),
(2, 'segundoAdmin', 654321);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `division`, `pais`) VALUES
('AG2R', 'Word Tour', 'Francia'),
('Astana', 'Word Tour', 'Kazajistán'),
('Bahrain-McLaren', 'Word Tour', 'Gean Bretaña'),
('BORA', 'Word Tour', 'Alemania'),
('CCC', 'Word Tour', 'Polonia'),
('DQC', 'Word Tour', 'Belgica'),
('EF', 'Word Tour', 'EEUU'),
('FDJ', 'Word Tour', 'Francia'),
('INEOS', 'Word Tour', 'Gran Bretaña'),
('Israel Start-Up Nation', 'Word Tour', 'Israel'),
('Jumbo', 'Word Tour', 'Belgica'),
('Lotto Soudal', 'Word Tour', 'Belgica'),
('Mitchelton-Scott', 'Word Tour', 'Australia'),
('Movistar', 'Word Tour', 'España'),
('NTT Pro Cycling', 'Word-Tour', 'Sudafrica'),
('Team Sunweb', 'Word Tour', 'Belgica'),
('Trek', 'Word Tour', 'EEUU'),
('UAE', 'Word Tour', 'Emiratos Arabes Unidos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `corredor`
--
ALTER TABLE `corredor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `corredor`
--
ALTER TABLE `corredor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `corredor`
--
ALTER TABLE `corredor`
  ADD CONSTRAINT `corredor_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
