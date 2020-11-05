-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2020 a las 18:44:19
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
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_admin` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_admin`, `nombre`, `password`) VALUES
(5, 'cristian', '$2y$10$DbHCvrX1ox1HIRUvRYVcVeHbYwDXvmPjnuV9zwwe2vUmLOTjC65RG'),
(6, 'admin1', '$2y$10$qxji52.b5XqoXWGt03BhIeRnPItVYMmrK4E.fETaGteK/jlJulC.y');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corredor`
--

CREATE TABLE `corredor` (
  `id` int(11) NOT NULL,
  `corredor` varchar(50) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `especialidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `corredor`
--

INSERT INTO `corredor` (`id`, `corredor`, `id_equipo`, `edad`, `especialidad`) VALUES
(1, 'Peter Sagan', 1, 32, 'Clasicomano'),
(2, 'Primoz Roglic', 2, 31, 'Vuelta por etapas'),
(3, 'Miguel Angel Lopez', 4, 26, 'Vuelta por etapas'),
(4, 'Tadeg Pogacar', 3, 22, 'Vuelta por etapas'),
(5, 'Patrick Konrad', 1, 29, 'Vuelta por etapas'),
(6, 'Egan Bernal', 5, 23, 'Vuelta por etapas'),
(9, 'Alejandro Valverde', 6, 40, 'vueltas de 1 semana'),
(10, 'Rafal Majka', 1, 31, 'Vuelta por etapas'),
(11, 'Adam Yates', 9, 29, 'Vuelta por etapas'),
(12, 'Maximiliano Richeze', 3, 35, 'gregario'),
(13, 'maciej bodnar', 1, 35, 'gregario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL,
  `equipo` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `equipo`, `division`) VALUES
(1, 'Bora', 'Word Tour'),
(2, 'Jumbo', 'Word Tour'),
(3, 'UAD', 'Word Tour'),
(4, 'Astana', 'Word Tour'),
(5, 'INEOS', 'Word Tour'),
(6, 'Movistar', 'Word Tour'),
(7, 'Trek', 'Word Tour'),
(8, 'CCC', 'Word Tour'),
(9, 'Mitchelton Scott', 'Word Tour'),
(11, 'Lotto', 'Word Tour'),
(12, 'NTT', 'Word Tour');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `corredor`
--
ALTER TABLE `corredor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `corredor`
--
ALTER TABLE `corredor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
