-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2021 a las 04:47:51
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `beltran`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `estado` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `titulo`, `descripcion`, `fecha`, `estado`) VALUES
(1, 'TAREA', 'Esto es la descripcion                  \r\n                        ', '2021-12-09 10:57:22', 0),
(2, 'Tarea', 'Descripcion de tarea\r\n                        ', '2021-12-09 11:03:01', 0),
(15, 'Leer', 'Terminar de leer el cisne\r\n                        ', '2021-12-09 15:39:50', 0),
(16, 'SO', 'Preparar temas para SO', '2021-12-09 15:40:14', 0),
(17, 'ionic', 'Terminar este app con ionic     \r\n                        ', '2021-12-09 15:40:51', 0),
(18, 'repasar ', 'repasar bd', '2021-12-09 18:19:08', 1),
(22, 'tarea', 'cumpleaños pa 14/12', '2021-12-09 19:53:32', 0),
(29, 'tarea', '11-egresados dani', '2021-12-09 23:23:33', 0),
(31, 'ddd', 'vbvb', '2021-12-09 23:48:14', 1),
(32, 'ghghgh', '4cvcv', '2021-12-10 00:32:20', 0),
(33, 'fgfg', 'g', '2021-12-10 00:32:50', 1),
(34, 'ddddd', 'dddd', '2021-12-10 00:34:09', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
