-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2019 a las 01:15:53
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id7450474_hola`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `codigo` int(11) NOT NULL,
  `identificacion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `documento` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(4) NOT NULL,
  `direccion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `examen` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `personal` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(30) NOT NULL,
  `cosa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codigo`);

ALTER TABLE `clientes`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

INSERT INTO `clientes` (`codigo`, `identificacion`, `documento`, `nombre`, `apellido`, `genero`, `edad`, `direccion`, `telefono`, `examen`, `personal`, `precio`, `cosa`, `fecha`) VALUES
(112, 'CC', '232345', 'Joan', 'Rayuela', '', 23, 'esquina de don chucho', '23234545', 'Examen', 'Empresa', 200000, 'Paciente con sueño', '2018-10-01'),
(132, 'TT', '123123', 'jose luis', 'humberto ovalle', 'Mujer', 0, 'dsasd', '456465456456', 'Orina', 'Particular', 100000, '4564', '2018-10-12'),
(133, 'TI', '123123', 'jose luis', 'mora roncancio', 'Hombre', 22, 'Camino Ganadero', '456465456456', 'Orina', 'Particular', 100000, '4564', '2018-10-16'),
(134, 'TT', '123123', 'Conciertos', 'mora roncancio', 'Genero', 22, 'Camino Ganadero', '456465456', 'Examen', 'Empresa', 100000, '', '2018-10-29'),
(135, 'TI', '1122139816', 'jose luis', 'mora roncancio', 'Hombre', 22, 'Camino Ganadero', '456465456456', 'Sangre', 'Particular', 100000, '', '2018-10-29'),
(136, 'TT', '123123', 'ghjghjjh', 'ghjgjj', 'Mujer', 22, 'dsasd', '456465456456', 'Coprologico', 'Empresa', 100000, '4564', '2018-10-29'),
(139, 'CC', '1234567890', 'Mari', 'Juana', 'Otro', 420, 'Thcarrera 420', '01 - 800 PGL', 'Sangre', 'Particular', 0, '', '2018-10-29'),
(140, 'CC', '1111111', 'CArlonia', 'Feina', 'Mujer', 29, 'cra 19 No 36-45', '1234562', 'Examen', 'Particular', 150000, 'que diablo es', '2018-10-29'),
(141, 'TI', '4', '25', '6', 'Genero', 56, '55', '55555', 'Examen', 'Particular', 8888, '555', '2018-11-20'),
(142, 'CC', '4564654', 'camilo', 'mora', '', 20, '45645 jhhjk', '456456456456456', 'Examen', 'Empresa', 10000, 'Entregado', '2019-02-23'),
(143, 'Empresa', '12312345', 'dolly', 'roncancio', 'Mujer', 56, '23132123123', '3114804111', 'Examen', 'Empresa', 456456456, 'Entregado', '2019-02-23'),
(144, 'Empresa', '11223135', 'hgrgfdsgfd', 'bgfbgfd', 'Hombre', 12, 'cll 79', '4856', 'Examen', 'Empresa', 56132, 'Pendiente', '2019-03-05');
--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
