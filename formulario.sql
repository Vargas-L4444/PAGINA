-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 16-05-2025 a las 04:13:50
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
-- Base de datos: `formulario`
--
CREATE DATABASE IF NOT EXISTS `formulario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `formulario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensaje` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `telefono`, `email`, `mensaje`) VALUES
(3, 'Richi', '3216549873', 'firrcrack@gmail.com', 'gracias'),
(4, 'juan pepe', '3259874612', 'locos@gmail.com', 'pipillo'),
(5, 'jorge Góngora', '3542654845', 'holaxd@gmail.com', 'firma.'),
(6, 'Richard Lote', '9512357864', 'hoy@hotmail.com', 'sabado.'),
(21, 'Lionel V', '3125449475', 'virtualcash@yahoo.com', 'Pili!'),
(22, 'Nelson Lote', '3137160682', 'nelsonlotte1997@gmail.com', 'ñañai'),
(25, 'Alex Davilla', '3216549870', 'alex.davilla@gmail.com', 'Quiero agendar una cita!'),
(26, 'Andres Lotte', '9512357640', 'andruW@gmail.com', 'El Inge Andres.'),
(27, 'richi', '2596321458', 'rich@gmail.com', 'consulta!');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;