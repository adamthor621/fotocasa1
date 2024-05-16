-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2024 a las 21:16:56
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fotocasa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contrasenya` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contrasenya`) VALUES
(6154965, 'alba', 'alba@ejemplo.com', 'b5c5167b15ccd1336900e40848aef675'),
(6154966, 'adam', 'thor@gmail.com', 'b5c5167b15ccd1336900e40848aef675'),
(6154967, 'adam', 'thor@gmail.com', 'b5c5167b15ccd1336900e40848aef675'),
(6154968, 'adam23', 'thor1@gmail.com', 'b5c5167b15ccd1336900e40848aef675'),
(6154969, 'ada9', 'thor1@gmail.com', 'b5c5167b15ccd1336900e40848aef675'),
(6154970, 'paco', 'paco@ejemplo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6154971, 'paco2', 'paco@ejemplo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6154972, 'paco2', 'paco@ejemplo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6154973, 'ejem', 'paco@ejemplo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6154974, 'ejem', 'paco@ejemplo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6154975, '', 'paco@ejemplo.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6154976;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
