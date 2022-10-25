-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2022 a las 05:21:14
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `leonmotos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moto`
--

CREATE TABLE `moto` (
  `marca` varchar(260) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `id` int(11) NOT NULL,
  `precioAnterior` float NOT NULL,
  `tipo` varchar(150) NOT NULL,
  `url` varchar(250) NOT NULL,
  `activo` int(11) NOT NULL DEFAULT 1,
  `busqueda` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `moto`
--

INSERT INTO `moto` (`marca`, `modelo`, `precio`, `descripcion`, `id`, `precioAnterior`, `tipo`, `url`, `activo`, `busqueda`) VALUES
('Gilera', 'AC4 250cc ', 599.999, '', 1, 659.999, 'Moto', 'imagenes/productos/moto/gileraac4.png', 1, 'Gilera AC4 250cc promociones moto '),
('Mondial', 'TD 250 RD', 419.999, '', 2, 0, 'Moto', 'imagenes/productos/moto/mondialtd250.jpg', 1, 'Mondial rd 250cc rd '),
('Motomel', 'Skua 150cc', 349.999, '', 3, 0, 'Moto', 'imagenes/productos/moto/skua150.png', 1, 'motomel skua 150cc'),
('Gilera', 'Sahel 150cc', 349.999, '', 4, 0, 'Moto', 'imagenes/productos/moto/gilerasahel150.png', 1, 'Gilera sahel 150cc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `moto`
--
ALTER TABLE `moto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
