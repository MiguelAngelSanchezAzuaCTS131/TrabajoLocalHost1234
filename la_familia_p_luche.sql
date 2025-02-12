-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2025 a las 20:04:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `la familia p.luche`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elenco`
--

CREATE TABLE `elenco` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `actor` varchar(50) NOT NULL,
  `peso` int(50) NOT NULL,
  `altura` int(50) NOT NULL,
  `aparicion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `elenco`
--

INSERT INTO `elenco` (`id`, `nombre`, `apellido`, `actor`, `peso`, `altura`, `aparicion`) VALUES
(1, 'Ludovico', 'Perez Luche', 'Eugenio Dervez', 74, 179, 'Capitulo piloto'),
(2, 'Federica ', 'Perez Luche', 'Consuelo Duval', 55, 165, 'Capitulo piloto'),
(3, 'Ludoviquito', 'Pérez Luche Dávalos', 'José Miguel Pérez Saint', 72, 172, 'Capitulo 1'),
(4, 'Bibiana', 'Pérez Luche Dávalos', 'Regina Blándon', 57, 170, 'Capitulo 1'),
(5, 'junior', 'Pérez Luche', 'Luis Manuel Avila', 68, 180, 'Capitulo 1'),
(6, 'Excelsa', '', 'Barbara Torres', 66, 171, 'Capitulo 1'),
(7, 'Maradonio', '', 'Brayan Gibran', 0, 0, '2014 Derribo un helicoptero'),
(8, 'Flabio', '', 'Brayan Gibran', 0, 0, '2014 Derribo un helicoptero'),
(9, 'Martina', '', 'Brayan Gibran', 0, 0, '2014 Derribo un helicoptero'),
(10, 'Don Camerino', '', 'Brayan Gibran', 0, 0, '2014 Derribo un helicoptero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `elenco`
--
ALTER TABLE `elenco`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `elenco`
--
ALTER TABLE `elenco`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
