-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2024 a las 18:20:00
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
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `ID` int(11) NOT NULL,
  `ID_usuario` int(11) DEFAULT NULL,
  `ID_materia` int(11) DEFAULT NULL,
  `Dias` set('L','M','X','J','V') DEFAULT NULL,
  `Horario` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`ID`, `ID_usuario`, `ID_materia`, `Dias`, `Horario`) VALUES
(1, 1, 1, 'L,X', '10:00:00'),
(2, 4, 7, 'M,J', '10:00:00'),
(3, 7, 6, 'M,J', '08:00:00'),
(4, 3, 3, 'M,J', '10:00:00'),
(5, 6, 7, 'M,J', '10:00:00'),
(6, 7, 1, 'L,X', '10:00:00'),
(7, 7, 4, 'M,J', '14:00:00'),
(8, 3, 6, 'M,J', '08:00:00'),
(9, 3, 2, 'M,J', '14:00:00'),
(10, 7, 5, 'L,X', '14:00:00'),
(11, 6, 2, 'M,J', '14:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `id_asignatura` int(11) DEFAULT NULL,
  `asistencia` enum('presente','ausente','tarde') DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `ID` int(11) NOT NULL,
  `ID_Asignatura` int(11) DEFAULT NULL,
  `Nota` decimal(4,2) NOT NULL,
  `Trimestre` enum('1er','2do','3ro','DIC','FEB') DEFAULT NULL,
  `Fecha` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`ID`, `ID_Asignatura`, `Nota`, `Trimestre`, `Fecha`) VALUES
(1, 7, 9.01, '3ro', '2024-02-19 13:56:07'),
(2, 4, 6.84, '3ro', '2024-02-19 13:56:17'),
(3, 7, 3.92, '1er', '2024-02-19 13:56:18'),
(4, 8, 9.22, '3ro', '2024-02-19 13:56:19'),
(5, 11, 2.01, '1er', '2024-02-19 13:56:21'),
(6, 10, 1.82, '1er', '2024-02-19 13:56:21'),
(7, 7, 1.52, '1er', '2024-02-19 13:56:22'),
(8, 10, 2.65, '3ro', '2024-02-19 13:56:22'),
(9, 5, 1.06, '2do', '2024-02-19 13:56:23'),
(10, 3, 3.00, 'DIC', '2024-02-19 13:56:23'),
(11, 10, 1.67, '1er', '2024-02-19 13:56:23'),
(12, 4, 2.55, '1er', '2024-02-19 13:56:23'),
(13, 4, 9.07, '3ro', '2024-02-19 13:56:23'),
(14, 4, 6.73, '2do', '2024-02-19 13:56:24'),
(15, 4, 3.87, 'DIC', '2024-02-19 13:56:24'),
(16, 1, 7.89, '3ro', '2024-02-19 13:56:24'),
(17, 5, 6.49, '1er', '2024-02-19 13:56:24'),
(18, 7, 6.06, '2do', '2024-02-19 13:56:25'),
(19, 7, 9.33, '1er', '2024-02-19 13:56:29'),
(20, 3, 3.11, '3ro', '2024-02-19 13:56:30'),
(21, 9, 6.89, '1er', '2024-02-19 13:56:31'),
(22, 5, 7.18, '2do', '2024-02-19 13:56:31'),
(23, 9, 8.20, '3ro', '2024-02-19 13:56:31'),
(24, 1, 2.09, 'DIC', '2024-02-19 13:56:32'),
(25, 7, 6.08, '1er', '2024-02-19 13:56:32'),
(26, 10, 10.00, '2do', '2024-02-19 13:56:32'),
(27, 8, 5.60, '3ro', '2024-02-19 13:56:32'),
(28, 7, 7.94, '2do', '2024-02-19 13:56:32'),
(29, 4, 3.80, '1er', '2024-02-19 13:56:33'),
(30, 3, 9.64, '1er', '2024-02-19 13:56:33'),
(31, 7, 8.41, '2do', '2024-02-19 13:56:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuarios`
--

CREATE TABLE `datos_usuarios` (
  `id` int(11) NOT NULL,
  `id_Usuario` int(11) DEFAULT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Tipo_Documento` enum('DNI','LC','LE','CI','PASS') DEFAULT NULL,
  `Numero_Documento` varchar(20) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `id_Nacionalidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `datos_usuarios`
--

INSERT INTO `datos_usuarios` (`id`, `id_Usuario`, `Nombre`, `Apellido`, `Tipo_Documento`, `Numero_Documento`, `Direccion`, `id_Nacionalidad`) VALUES
(1, 1, 'GASTON', 'MOYANO', 'DNI', '38.701.365', NULL, NULL),
(2, 3, 'ALEJANDRO', 'GOMEZ', 'LE', '23.151.022', NULL, NULL),
(4, 4, 'Robert', 'Simpson', 'DNI', '25.678.098', 'Madrid 648', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`ID`, `nombre`, `descripcion`) VALUES
(1, 'Matematica', NULL),
(2, 'Historia', NULL),
(3, 'Literatura', NULL),
(4, 'Geografía', NULL),
(5, 'Música', NULL),
(6, 'Biología', NULL),
(7, 'Química', NULL),
(8, 'Artística', NULL),
(9, 'Física', NULL),
(10, 'Ed.Física', NULL),
(11, 'Politica y Ciudadania', NULL),
(12, 'Comunicación', NULL),
(13, 'Filosofía', NULL),
(14, 'Psicología', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `Activo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `Mail`, `clave`, `Activo`) VALUES
(1, 'GASTÓN', 'gasmoya1994@gmail.com', 'DORADO1994', 1),
(3, 'ALEJANDRO', 'alejandrogomez@gmail.com', 'perro1994', 1),
(4, 'Medina', 'Medina@gmail.com', 'Arlistan', 1),
(5, 'eliseo', 'eliseo@gmail.com', 'jrefprinter', 1),
(6, 'aymara', 'aymara@gmail.com', 'sabonis300', 1),
(7, 'gmoyano', 'gmoyano@gmail.com', 'panacom1994', 1),
(8, 'martinezalejandro', 'martinezalejandro@gmail.com', 'motorola324', 1),
(10, 'leon', 'leongomez@gmail.com', 'leon2017', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_usuario` (`ID_usuario`,`ID_materia`),
  ADD KEY `ID_materia` (`ID_materia`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_asignatura` (`id_asignatura`,`fecha`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Asignatura` (`ID_Asignatura`);

--
-- Indices de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Tipo_Documento` (`Tipo_Documento`,`Numero_Documento`),
  ADD UNIQUE KEY `id_Usuario` (`id_Usuario`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Nombre` (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD CONSTRAINT `asignaturas_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `asignaturas_ibfk_2` FOREIGN KEY (`ID_materia`) REFERENCES `materias` (`ID`);

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_asignatura`) REFERENCES `asignaturas` (`ID`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`ID_Asignatura`) REFERENCES `asignaturas` (`ID`);

--
-- Filtros para la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD CONSTRAINT `datos_usuarios_ibfk_1` FOREIGN KEY (`id_Usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
