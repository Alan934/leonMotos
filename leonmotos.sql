-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2022 a las 19:59:14
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
-- Estructura de tabla para la tabla `imagenpromocion`
--

CREATE TABLE `imagenpromocion` (
  `id` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenpromocion`
--

INSERT INTO `imagenpromocion` (`id`, `url`, `codigo`, `nombre`) VALUES
(1, 'imagenes/promocionales/productos/gileraac4.jpeg', 88, 'Gilera AC4 250cc'),
(2, 'imagenes/promocionales/productos/mondialtd250.jpeg', 6, 'Mondial td 250'),
(3, 'imagenes/promocionales/productos/zanellaceccator150.jpeg', 56, 'Zanella ceccato 150cc');

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
  `busqueda` varchar(500) NOT NULL,
  `codigo` int(11) NOT NULL,
  `llantas` varchar(250) NOT NULL,
  `peso` double NOT NULL,
  `color` varchar(250) NOT NULL,
  `transmision` varchar(250) NOT NULL,
  `capacidadCombustible` float NOT NULL,
  `suspencionDelantera` varchar(250) NOT NULL,
  `suspencionTrasera` varchar(250) NOT NULL,
  `frenoDelantero` varchar(250) NOT NULL,
  `frenoTrasero` varchar(250) NOT NULL,
  `motor` varchar(250) NOT NULL,
  `alimentacion` varchar(250) NOT NULL,
  `refrigeracion` varchar(250) NOT NULL,
  `cilindrada` varchar(250) NOT NULL,
  `velocidadMaxima` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `moto`
--

INSERT INTO `moto` (`marca`, `modelo`, `precio`, `descripcion`, `id`, `precioAnterior`, `tipo`, `url`, `activo`, `busqueda`, `codigo`, `llantas`, `peso`, `color`, `transmision`, `capacidadCombustible`, `suspencionDelantera`, `suspencionTrasera`, `frenoDelantero`, `frenoTrasero`, `motor`, `alimentacion`, `refrigeracion`, `cilindrada`, `velocidadMaxima`) VALUES
('Gilera', 'AC4 205cc', 599, '', 1, 650, 'Moto', 'imagenes/productos/moto/gileraac4.png', 1, 'moto Gilera ac4 250cc', 88, 'Rayos', 139, 'Negro', '6 Velocidades', 15.5, 'Horquilla Invertida', 'Monoamortiguador regulable en precarga', 'Disco, con pinza de doble pistón', 'Disco, con pinza de pistón simple', 'Monocilindrico, 4T, 2 Valvulas', 'Carburador', 'Aceite', '223cc', '115'),
('Mondial', 'TD 250cc', 499, '', 2, 0, 'Moto', 'imagenes/productos/moto/mondialtd250.jpg', 1, 'moto zanella due 100 classic', 6, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
('Motomel', 'Skua 150cc', 350, '', 3, 0, 'Moto', 'imagenes/productos/moto/skua150.png', 1, 'moto Motomel skua 150cc', 99, 'Rayos', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
('Gilera', 'Sahel 150cc', 4450, '', 4, 0, 'Moto', 'imagenes/productos/moto/gilerasahel150.png', 1, 'moto sahel 150cc', 84, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
('Zanella', 'due 110 classic', 199, '', 5, 0, 'Moto', 'imagenes/productos/moto/zanelladue100classic.jpg', 1, 'moto zanella due 100 classic', 55, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
('Gilera', 'AC4 250cc', 111, '', 14, 0, '', 'imagenes/productos/moto/gileraac42.jpeg', 2, '', 88, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
('Mondial', 'TD 250cc', 111, '', 15, 0, '', 'imagenes/productos/moto/mondialtd250.jpeg', 2, '6', 6, '', 0, '', '', 0, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `nombre` varchar(250) NOT NULL,
  `contrasena` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`nombre`, `contrasena`) VALUES
('asd', 'asd'),
('LeonMotos', '$2y$10$mi9B92Hr0Bj4CxtPhbuPweCzi3NE/WwkUVIGCgRY/aYLBBQZ/Hf72');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenpromocion`
--
ALTER TABLE `imagenpromocion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenpromocion`
--
ALTER TABLE `imagenpromocion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `moto`
--
ALTER TABLE `moto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
