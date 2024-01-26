-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2024 a las 05:06:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_patitassv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_adopcion`
--

CREATE TABLE `tbl_adopcion` (
  `id_adopcion` int(11) NOT NULL,
  `tipo_animal` varchar(5) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ayuda`
--

CREATE TABLE `tbl_ayuda` (
  `id_ayuda` int(11) NOT NULL,
  `tipo_ayuda` varchar(18) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE `tbl_persona` (
  `id_persona` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_adopcion`
--
ALTER TABLE `tbl_adopcion`
  ADD PRIMARY KEY (`id_adopcion`),
  ADD UNIQUE KEY `id_adopcion` (`id_adopcion`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `tbl_ayuda`
--
ALTER TABLE `tbl_ayuda`
  ADD PRIMARY KEY (`id_ayuda`),
  ADD UNIQUE KEY `id_ayuda` (`id_ayuda`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_persona` (`id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_adopcion`
--
ALTER TABLE `tbl_adopcion`
  MODIFY `id_adopcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_ayuda`
--
ALTER TABLE `tbl_ayuda`
  MODIFY `id_ayuda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_adopcion`
--
ALTER TABLE `tbl_adopcion`
  ADD CONSTRAINT `tbl_adopcion_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `tbl_persona` (`id_persona`);

--
-- Filtros para la tabla `tbl_ayuda`
--
ALTER TABLE `tbl_ayuda`
  ADD CONSTRAINT `tbl_ayuda_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `tbl_persona` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
