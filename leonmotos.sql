-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 00:26:45
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
  `velocidadMaxima` varchar(250) NOT NULL,
  `potencia` varchar(250) NOT NULL,
  `encendido` varchar(250) NOT NULL,
  `url1` varchar(300) NOT NULL,
  `url2` varchar(300) NOT NULL,
  `url3` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `moto`
--

INSERT INTO `moto` (`marca`, `modelo`, `precio`, `descripcion`, `id`, `precioAnterior`, `tipo`, `url`, `activo`, `busqueda`, `codigo`, `llantas`, `peso`, `color`, `transmision`, `capacidadCombustible`, `suspencionDelantera`, `suspencionTrasera`, `frenoDelantero`, `frenoTrasero`, `motor`, `alimentacion`, `refrigeracion`, `cilindrada`, `velocidadMaxima`, `potencia`, `encendido`, `url1`, `url2`, `url3`) VALUES
('Gilera', 'AC4 250cc', 599, '', 1, 650, 'Moto', 'imagenes/promocionales/productos/gileraac42.jpeg', 1, 'moto Gilera ac4 250cc', 88, 'Rayos', 139, 'Negro', '6 Velocidades', 15.5, 'Horquilla Invertida', 'Monoamortiguador regulable en precarga', 'Disco, con pinza de doble pistón', 'Disco, con pinza de pistón simple', 'Monocilindrico, 4T, 2 Valvulas', 'Carburador', 'Aceite', '223cc', '115', '17.7hp a 8500rpm', 'Electrónico', '', '', ''),
('Mondiales', 'TD 250cc', 499, '', 2, 0, 'Moto', 'imagenes/promocionales/productos/mondialtd250.jpeg', 1, 'moto zanella due 100 classic', 6, '', 0, '', '5 Velocidades', 0, 'suspencionDelantera', 'suspencionTrasera', 'frenoDelantero', 'frenoTrasero', 'motor', 'alimentacion', 'refrigeracion', 'cilindrada', 'velocidadMaxima', 'potencia', 'encendido', '', '', ''),
('Motomel', 'Skua 150cc', 350, '', 3, 0, 'Moto', 'imagenes/productos/moto/skua150.png', 1, 'moto Motomel skua 150cc', 99, 'Rayos', 0, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Gilera', 'Sahel 150cc', 4450, '', 4, 0, 'Moto', 'imagenes/productos/moto/gilerasahel150.png', 1, 'moto sahel 150cc', 84, '', 0, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Zanella', 'due 110 classic', 199, '', 5, 0, 'Moto', 'imagenes/productos/moto/zanelladue100classic.jpg', 1, 'moto zanella due 100 classic', 55, '', 0, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Hero', 'Hunk 160R', 671, '', 35, 0, '', 'imagenes/productos/moto/hero160.jpeg', 1, 'hero hunk 160R moto', 899, 'Rayos', 139, 'Blanco, Negro y Azul', '6 Velocidades', 12, 'Hidraulica telescópica de 37mm', 'Monoamortiguador ajustable en 7 posiciones', 'Hidráulico de disco de 276mm / ABS monocanal', 'Hidráulico de disco de 220mm', 'Monocilíndrico/2 Válvulas /4 tiempos/', 'Inyeccion', 'Por Aire', 'cilindrada', '120', '15.2 hp @8500 rpm', 'Electronico y Pedal', 'imagenes/productos/moto/hero160blue-color.jpeg', 'imagenes/productos/moto/hero160red-color.jpeg', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `id` int(11) NOT NULL,
  `url` varchar(250) NOT NULL,
  `codigo` int(11) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `busqueda` varchar(285) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`id`, `url`, `codigo`, `tipo`, `marca`, `modelo`, `busqueda`) VALUES
(1, 'imagenes/promocionales/productos/gileraac42.jpeg', 88, 'Motocicleta', 'Gilera', 'AC4 250cc', 'gilera ac4 250 88'),
(2, 'imagenes/promocionales/productos/mondialtd250.jpeg', 6, 'Motocicleta', 'Mondial', 'TD 250cc', ''),
(3, 'imagenes/promocionales/productos/zanellaceccator150.jpeg', 99, 'Motocicleta', 'Zanella', 'Ceccato 150cc', ''),
(4, 'imagenes/promocionales/productos/gileravc150.jpeg', 1, 'Motocicleta', 'Gilera', 'VC 150cc', ''),
(5, 'imagenes/promocionales/productos/M0001400937-2022-mondial-td-250.png', 223, 'Bicicleta', 'kiko', 'asd', ''),
(6, 'imagenes/promocionales/productos/gileravc150.jpeg', 366, 'Bicicleta', 'qwe', 'qwe', '');

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
('LeonMotos', '$2y$10$mi9B92Hr0Bj4CxtPhbuPweCzi3NE/WwkUVIGCgRY/aYLBBQZ/Hf72'),
('LeonMotos', '$2y$10$N77/EVC.B9RRkWX8vulrwuAFVHl76wqPytC5EGJ3JAxG.mWbgtjqm'),
('LeonMotos', '$2y$10$8m72edLe5Kmm1aOj.8lCr.OMUMrRJmnHCip0ntg4lAVs5kCmq/7sK');

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
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
