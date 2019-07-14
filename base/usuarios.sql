-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2019 a las 04:10:35
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
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Usuario` varchar(10) NOT NULL,
  `Pasword` varchar(20) NOT NULL,
  `Tipo_usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
COMMIT;
INSERT INTO `usuarios` (`id`, `Nombre`, `Usuario`, `Pasword`, `Tipo_usuario`) VALUES
(1, 'Angel Alberto', 'Angel', '123', 'Admin'),
(2, 'Michelle Estefania\r\n', 'Michelle', '1234', 'Usuario'),
(3, 'Michael Varela', 'Michael', '12344', 'Usuario'),
(4, 'Jose Cardenas', 'Jose', '12345', 'Usuario'),
(5, 'Jorge Remache', 'Jorge', '12345', 'Usuario'),
(6, 'Manuelito', 'Manu', '123456', 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
