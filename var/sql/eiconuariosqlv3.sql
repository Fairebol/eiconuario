-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 01:42:37
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
-- Base de datos: `eiconuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `name`) VALUES
(1, 'IPP'),
(2, 'IP'),
(3, 'MMO'),
(4, 'EIE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'profesor'),
(2, 'delegado'),
(3, 'destacado'),
(4, 'abanderado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `pathimg` varchar(100) NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `fullname`, `pathimg`, `course_id`, `role_id`) VALUES
(1, 'Moreno Jeziel ', 'IPP/1.jpg', 1, NULL),
(2, 'Diego Ayala DESTACADO', 'IPP/2.jpg', 1, 3),
(3, 'Cristian Diaz Zambrano', 'IPP/3.jpg', 1, NULL),
(4, 'Profe Aiani', 'IPP/4.jpg', 1, 1),
(5, 'Alejandro Villareal', 'IPP/1.jpg', 1, NULL),
(6, 'Cristian Diaz Zambrano', 'IPP/2.jpg', 1, 2),
(7, 'JJJJjjj', 'IPP/3.jpg', 1, NULL),
(8, 'profesor', 'IPP/4.jpg', 1, NULL),
(9, 'hola', 'IPP/1.jpg', 1, NULL),
(10, 'oña', 'IPP/2.jpg', 1, NULL),
(11, 'JJJJjjj', 'IPP/3.jpg', 1, NULL),
(12, 'profesor', 'IPP/4.jpg', 1, NULL),
(13, 'hola', 'IPP/1.jpg', 1, NULL),
(14, 'oña', 'IPP/2.jpg', 1, NULL),
(15, 'JJJJjjj', 'IPP/3.jpg', 1, NULL),
(16, 'profesor', 'IPP/4.jpg', 1, NULL),
(17, 'Gordox Romano', 'IPP/1.jpg', 1, 4),
(18, 'Diego Ayala Romano', 'IPP/2.jpg', 1, NULL),
(19, 'Cristian Diaz Zambrano', 'IPP/3.jpg', 1, NULL),
(20, 'Fernando Aiani', 'IPP/4.jpg', 1, NULL),
(21, 'Alejandro Villareal', 'IPP/1.jpg', 1, NULL),
(22, 'Cristian Diaz Zambrano', 'IPP/2.jpg', 1, NULL),
(23, 'JJJJjjj', 'IPP/3.jpg', 1, NULL),
(24, 'profesor', 'IPP/4.jpg', 1, NULL),
(25, 'hola', 'IPP/1.jpg', 1, NULL),
(26, 'oña', 'IPP/2.jpg', 1, NULL),
(27, 'JJJJjjj', 'IPP/3.jpg', 1, NULL),
(28, 'profesor', 'IPP/4.jpg', 1, NULL),
(29, 'hola', 'IPP/1.jpg', 1, NULL),
(30, 'oña', 'IPP/2.jpg', 1, NULL),
(31, 'JJJJjjj', 'IPP/3.jpg', 1, NULL),
(32, 'profesor', 'IPP/4.jpg', 1, NULL),
(33, 'Moreno Jeziel ', 'IPP/1.jpg', 1, NULL),
(34, 'Diego Ayala Romano', 'IPP/2.jpg', 1, NULL),
(35, 'Cristian Diaz Zambrano', 'IPP/3.jpg', 1, NULL),
(36, 'Fernando Aiani', 'IPP/4.jpg', 1, NULL),
(37, 'Alejandro Villareal', 'IPP/1.jpg', 1, NULL),
(38, 'Cristian Diaz Zambrano', 'IPP/2.jpg', 1, NULL),
(39, 'JJJJjjj', 'IPP/3.jpg', 1, NULL),
(40, 'profesor', 'IPP/4.jpg', 1, NULL),
(41, 'hola', 'IPP/1.jpg', 1, NULL),
(42, 'oña', 'IPP/2.jpg', 1, NULL),
(43, 'JJJJjjj', 'IPP/3.jpg', 1, NULL),
(44, 'profesor', 'IPP/4.jpg', 1, NULL),
(45, 'hola', 'IPP/1.jpg', 1, NULL),
(46, 'oña', 'IPP/2.jpg', 1, NULL),
(47, 'JJJJjjj', 'IPP/3.jpg', 1, NULL),
(48, 'profesor', 'IPP/4.jpg', 1, NULL),
(49, 'facundo Romano', 'IPP/1.jpg', 1, NULL),
(50, 'Diego Ayala Romano', 'IPP/2.jpg', 1, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_course` (`course_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_course` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
