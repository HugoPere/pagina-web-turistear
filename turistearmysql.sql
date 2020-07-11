-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql.turistear.usmgames.cl
-- Tiempo de generación: 11-07-2020 a las 14:08:37
-- Versión del servidor: 5.7.28-log
-- Versión de PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turistearmysql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `INFORMACION_EVENTOS`
--

CREATE TABLE `INFORMACION_EVENTOS` (
  `id` int(11) NOT NULL,
  `titulo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `informacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lugar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_qr` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  `id_img` int(11) DEFAULT NULL,
  `id_proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Información dínamica de eventos ';

--
-- Volcado de datos para la tabla `INFORMACION_EVENTOS`
--

INSERT INTO `INFORMACION_EVENTOS` (`id`, `titulo`, `informacion`, `lugar`, `id_qr`, `posicion`, `id_img`, `id_proyecto`) VALUES
(78, 'Pepito Grillo', 'Una deliciosa hamburguesa', 'Fonda', 1, 1, 12, 42),
(79, 'no_name', 'no_text', 'Fonda', 1, 2, NULL, 42),
(80, 'no_name', 'no_text', 'Fonda', 2, 1, NULL, 42),
(81, 'no_name', 'no_text', 'Fonda', 2, 2, NULL, 42),
(82, 'no_name', 'no_text', 'Fonda', 3, 1, NULL, 42),
(83, 'no_name', 'no_text', 'Fonda', 3, 2, NULL, 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `INFO_IMAGENES`
--

CREATE TABLE `INFO_IMAGENES` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unique_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ruta_imagen` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_boton_asociado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `INFO_IMAGENES`
--

INSERT INTO `INFO_IMAGENES` (`id`, `nombre`, `descripcion`, `unique_name`, `ruta_imagen`, `id_boton_asociado`) VALUES
(6, 'hamburguesa.png', NULL, '5ef51108d70e07.73175856.png', 'pictures/5ef51108d70e07.73175856.png', 78),
(7, 'Cheeseburger.jpg', NULL, '5f00f51b318712.16122053.jpg', 'pictures/5f00f51b318712.16122053.jpg', 78),
(8, 'Cheeseburger.jpg', NULL, '5f039ae6c6f2f5.66493345.jpg', 'pictures/5f039ae6c6f2f5.66493345.jpg', 78),
(9, 'hamburguesa.png', NULL, '5f03a7251e62f6.67425388.png', 'pictures/5f03a7251e62f6.67425388.png', 78),
(10, 'hamburguesa.png', NULL, '5f03a73aefae13.68485951.png', 'pictures/5f03a73aefae13.68485951.png', 78),
(11, 'hamburguesa.png', NULL, '5f03a9fbbd1077.96624291.png', 'pictures/5f03a9fbbd1077.96624291.png', 78),
(12, 'hamburguesa.png', NULL, '5f03ad7b258099.41209870.png', 'pictures/5f03ad7b258099.41209870.png', 78);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MODELOS`
--

CREATE TABLE `MODELOS` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `disponibilidad` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `MODELOS`
--

INSERT INTO `MODELOS` (`id`, `nombre`, `path`, `clave`, `descripcion`, `disponibilidad`) VALUES
(1, 'Calle con auto', 'modelos/street_1.png', 'street_1', 'TESTING, una calle simple', 0),
(2, 'Oficina con computadores', 'modelos/office_1.png', 'office_1', 'TESTING, una oficina simple', 0),
(3, 'Frascos de laboratorio', 'modelos/lab_1.png', 'lab_1', 'TESTING, un laboratorio simple', 0),
(4, 'Parque con banca', 'modelos/park_1.png', 'park_1', 'TESTING, un parque simple', 0),
(6, 'Calle decorada', 'modelos/street_2.png', 'street_2', 'Una hermosa calle comercial de vida nocturna', 0),
(9, 'no_model', '', 'no_model', 'TESTING, NO USAR', 0),
(10, 'Hamburguesa', 'modelos/food_1.png', 'food_1', 'Una deliciosa hamburguesa con papas fritas', 0),
(11, 'Banda basica', 'music_1.png', 'music_1', 'Unos alegres instrumentos para avivar el ambiente', 0),
(12, 'Diana con dardos', 'modelos/game_1.png', 'game_1', 'Unos divertidos dardos para apostar con los amigos', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PROYECTO`
--

CREATE TABLE `PROYECTO` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `PROYECTO`
--

INSERT INTO `PROYECTO` (`id`, `nombre`) VALUES
(42, 'Fonda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `QR_CODES`
--

CREATE TABLE `QR_CODES` (
  `id` int(11) NOT NULL,
  `id_modelo` int(11) DEFAULT NULL,
  `path` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `disponibilidad` tinyint(1) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `nombre_proyecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_assigned` int(11) NOT NULL,
  `url_local` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `QR_CODES`
--

INSERT INTO `QR_CODES` (`id`, `id_modelo`, `path`, `disponibilidad`, `id_proyecto`, `nombre_proyecto`, `user_assigned`, `url_local`) VALUES
(1, 10, 'QR/1.png', 0, 42, 'Fonda', 2, 'https://www.ubereats.com/cl/valparaiso/food-delivery/roof-burger-renaca/aN8Z5XZ6SWWUPlHfv-pPqA'),
(2, 9, 'QR/2.png', 0, 42, 'Fonda', 0, ''),
(3, 9, 'QR/3.png', 0, 42, 'Fonda', 0, ''),
(4, 9, 'QR/4.png', 0, 0, '', 0, ''),
(5, 9, 'QR/5.png', 0, 0, '', 0, ''),
(6, 9, 'QR/6.png', 0, 0, '', 0, ''),
(7, 9, 'QR/7.png', 0, 0, '', 0, ''),
(8, 9, 'QR/8.png', 0, 0, '', 0, ''),
(9, 9, 'QR/9.png', 0, 0, '', 0, ''),
(10, 9, 'QR/10.png', 0, 0, '', 0, ''),
(11, 9, 'QR/11.png', 0, 0, '', 0, ''),
(12, 9, 'QR/12.png', 0, 0, '', 0, ''),
(13, 9, 'QR/13.png', 0, 0, '', 0, ''),
(14, 9, 'QR/14.png', 0, 0, '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIOS`
--

CREATE TABLE `USUARIOS` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `id_proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Usuarios a cambiar la información';

--
-- Volcado de datos para la tabla `USUARIOS`
--

INSERT INTO `USUARIOS` (`id`, `usuario`, `password`, `email`, `tipo`, `id_proyecto`) VALUES
(1, 'admin', 'admin', 'admin@admin', 1, 0),
(2, 'user', 'user', 'user@user.cl', 2, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `INFORMACION_EVENTOS`
--
ALTER TABLE `INFORMACION_EVENTOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `INFO_IMAGENES`
--
ALTER TABLE `INFO_IMAGENES`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `MODELOS`
--
ALTER TABLE `MODELOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `PROYECTO`
--
ALTER TABLE `PROYECTO`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `QR_CODES`
--
ALTER TABLE `QR_CODES`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `INFORMACION_EVENTOS`
--
ALTER TABLE `INFORMACION_EVENTOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `INFO_IMAGENES`
--
ALTER TABLE `INFO_IMAGENES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `MODELOS`
--
ALTER TABLE `MODELOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `PROYECTO`
--
ALTER TABLE `PROYECTO`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `QR_CODES`
--
ALTER TABLE `QR_CODES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
