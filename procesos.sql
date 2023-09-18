-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2023 a las 21:46:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `procesos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calculo`
--

CREATE TABLE `calculo` (
  `ID_Calculo` int(11) NOT NULL,
  `ID_Actividad` int(11) NOT NULL,
  `Tiempo` varchar(50) NOT NULL,
  `Frecuencia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_actividad`
--

CREATE TABLE `detalle_actividad` (
  `ID_Actividad` int(11) NOT NULL,
  `nom_actividad` varchar(50) NOT NULL,
  `Entregable` varchar(50) NOT NULL,
  `sistema` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_actividad`
--

INSERT INTO `detalle_actividad` (`ID_Actividad`, `nom_actividad`, `Entregable`, `sistema`, `Descripcion`) VALUES
(2, 'asdfadf', 'No', 'procesos', 'Esto es solo una prueba v2'),
(6, 'sdfsdfa', 'si', 'Hidraulico', 'dsfsdfsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `ID_Direccion` int(11) NOT NULL,
  `Nom_Direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`ID_Direccion`, `Nom_Direccion`) VALUES
(1, 'T.I'),
(2, 'recursos humanos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `ID_Eventos` int(11) NOT NULL,
  `Eventual` varchar(50) NOT NULL,
  `Por_Eventos` varchar(50) NOT NULL,
  `Continuos` varchar(50) NOT NULL,
  `Mensual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frecuencia`
--

CREATE TABLE `frecuencia` (
  `ID_Valor` int(11) NOT NULL,
  `Nom_Valor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `frecuencia`
--

INSERT INTO `frecuencia` (`ID_Valor`, `Nom_Valor`) VALUES
(1, 'frecuencia ejemplo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomenclatura`
--

CREATE TABLE `nomenclatura` (
  `ID_Nomen` int(11) NOT NULL,
  `Nomenclatura` varchar(50) NOT NULL,
  `ID_Actividad` int(11) NOT NULL,
  `ID_Procesos` int(11) NOT NULL,
  `Nom_Proceso` varchar(50) NOT NULL,
  `Nom_Subproceso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevo_puesto`
--

CREATE TABLE `nuevo_puesto` (
  `ID_Nuevo_Puesto` int(11) NOT NULL,
  `nom_nuevo_puesto` varchar(50) NOT NULL,
  `ID_Actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `ID_Procesos` int(11) NOT NULL,
  `Nom_Procesos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`ID_Procesos`, `Nom_Procesos`) VALUES
(3, 'proceso 1'),
(4, 'proceso 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `ID_puesto` int(11) NOT NULL,
  `nom_puesto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`ID_puesto`, `nom_puesto`) VALUES
(1, 'Soporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID`, `rol`) VALUES
(1, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_proceso`
--

CREATE TABLE `sub_proceso` (
  `ID_subProcesos` int(11) NOT NULL,
  `ID_Proceso` int(11) NOT NULL,
  `Nom_Subproceso` varchar(50) NOT NULL,
  `ID_Actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taxonomina`
--

CREATE TABLE `taxonomina` (
  `ID_Taxonomina` int(11) NOT NULL,
  `ID_Actividad` int(11) NOT NULL,
  `ID_proceso` int(11) NOT NULL,
  `Subproceso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporalidad`
--

CREATE TABLE `temporalidad` (
  `ID_Temporalidad` int(11) NOT NULL,
  `Nom_Temporalidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `temporalidad`
--

INSERT INTO `temporalidad` (`ID_Temporalidad`, `Nom_Temporalidad`) VALUES
(1, 'dfasfsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `ID_Tipo` int(11) NOT NULL,
  `Transaccional` varchar(50) NOT NULL,
  `Estrategico` varchar(50) NOT NULL,
  `ID_Actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_negocio`
--

CREATE TABLE `unidad_negocio` (
  `ID_unidad_negocio` int(11) NOT NULL,
  `nom_unidad_negocio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `unidad_negocio`
--

INSERT INTO `unidad_negocio` (`ID_unidad_negocio`, `nom_unidad_negocio`) VALUES
(1, 'SAISA'),
(2, 'ITVSA'),
(3, 'IALMSA'),
(4, 'IPSLA'),
(5, 'PIASA'),
(6, 'CIS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usernames`
--

CREATE TABLE `usernames` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usernames`
--

INSERT INTO `usernames` (`ID`, `username`, `password`, `rol_id`) VALUES
(1, 'Diana', '1234', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_cliente`
--

CREATE TABLE `usuario_cliente` (
  `ID_empleado` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `apellido` int(11) NOT NULL,
  `ID_puesto` int(11) NOT NULL,
  `ID_unidad_negocio` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `direccion` int(11) NOT NULL,
  `ID_actividad` int(11) NOT NULL,
  `ID_nuevo_puesto` int(11) NOT NULL,
  `ID_procesos` int(11) NOT NULL,
  `ID_direccion` int(11) NOT NULL,
  `ID_subproceso` int(11) NOT NULL,
  `ID_Temporalidad` int(11) NOT NULL,
  `ID_Valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calculo`
--
ALTER TABLE `calculo`
  ADD PRIMARY KEY (`ID_Calculo`),
  ADD KEY `ID_Actividad` (`ID_Actividad`);

--
-- Indices de la tabla `detalle_actividad`
--
ALTER TABLE `detalle_actividad`
  ADD PRIMARY KEY (`ID_Actividad`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`ID_Direccion`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ID_Eventos`);

--
-- Indices de la tabla `frecuencia`
--
ALTER TABLE `frecuencia`
  ADD PRIMARY KEY (`ID_Valor`);

--
-- Indices de la tabla `nomenclatura`
--
ALTER TABLE `nomenclatura`
  ADD PRIMARY KEY (`ID_Nomen`),
  ADD KEY `ID_Actividad` (`ID_Actividad`);

--
-- Indices de la tabla `nuevo_puesto`
--
ALTER TABLE `nuevo_puesto`
  ADD PRIMARY KEY (`ID_Nuevo_Puesto`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`ID_Procesos`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`ID_puesto`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `sub_proceso`
--
ALTER TABLE `sub_proceso`
  ADD PRIMARY KEY (`ID_subProcesos`),
  ADD KEY `ID_Actividad` (`ID_Actividad`),
  ADD KEY `ID_Proceso` (`ID_Proceso`);

--
-- Indices de la tabla `taxonomina`
--
ALTER TABLE `taxonomina`
  ADD PRIMARY KEY (`ID_Taxonomina`),
  ADD KEY `ID_Actividad` (`ID_Actividad`),
  ADD KEY `ID_proceso` (`ID_proceso`);

--
-- Indices de la tabla `temporalidad`
--
ALTER TABLE `temporalidad`
  ADD PRIMARY KEY (`ID_Temporalidad`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`ID_Tipo`),
  ADD KEY `ID_Actividad` (`ID_Actividad`);

--
-- Indices de la tabla `unidad_negocio`
--
ALTER TABLE `unidad_negocio`
  ADD PRIMARY KEY (`ID_unidad_negocio`);

--
-- Indices de la tabla `usernames`
--
ALTER TABLE `usernames`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `usuario_cliente`
--
ALTER TABLE `usuario_cliente`
  ADD PRIMARY KEY (`ID_empleado`),
  ADD KEY `ID_puesto` (`ID_puesto`),
  ADD KEY `usuario_cliente_ibfk_1` (`ID_actividad`),
  ADD KEY `usuario_cliente_ibfk_2` (`ID_direccion`),
  ADD KEY `usuario_cliente_ibfk_3` (`ID_subproceso`),
  ADD KEY `usuario_cliente_ibfk_4` (`ID_procesos`),
  ADD KEY `usuario_cliente_ibfk_5` (`ID_nuevo_puesto`),
  ADD KEY `usuario_cliente_ibfk_6` (`ID_unidad_negocio`),
  ADD KEY `ID_Temporalidad` (`ID_Temporalidad`),
  ADD KEY `ID_Valor` (`ID_Valor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calculo`
--
ALTER TABLE `calculo`
  MODIFY `ID_Calculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_actividad`
--
ALTER TABLE `detalle_actividad`
  MODIFY `ID_Actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `ID_Direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ID_Eventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `frecuencia`
--
ALTER TABLE `frecuencia`
  MODIFY `ID_Valor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nomenclatura`
--
ALTER TABLE `nomenclatura`
  MODIFY `ID_Nomen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nuevo_puesto`
--
ALTER TABLE `nuevo_puesto`
  MODIFY `ID_Nuevo_Puesto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `ID_Procesos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `ID_puesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sub_proceso`
--
ALTER TABLE `sub_proceso`
  MODIFY `ID_subProcesos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `taxonomina`
--
ALTER TABLE `taxonomina`
  MODIFY `ID_Taxonomina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `temporalidad`
--
ALTER TABLE `temporalidad`
  MODIFY `ID_Temporalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `ID_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `unidad_negocio`
--
ALTER TABLE `unidad_negocio`
  MODIFY `ID_unidad_negocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usernames`
--
ALTER TABLE `usernames`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario_cliente`
--
ALTER TABLE `usuario_cliente`
  MODIFY `ID_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calculo`
--
ALTER TABLE `calculo`
  ADD CONSTRAINT `calculo_ibfk_1` FOREIGN KEY (`ID_Actividad`) REFERENCES `detalle_actividad` (`ID_Actividad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nomenclatura`
--
ALTER TABLE `nomenclatura`
  ADD CONSTRAINT `nomenclatura_ibfk_1` FOREIGN KEY (`ID_Actividad`) REFERENCES `detalle_actividad` (`ID_Actividad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sub_proceso`
--
ALTER TABLE `sub_proceso`
  ADD CONSTRAINT `sub_proceso_ibfk_1` FOREIGN KEY (`ID_Actividad`) REFERENCES `detalle_actividad` (`ID_Actividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_proceso_ibfk_2` FOREIGN KEY (`ID_Proceso`) REFERENCES `procesos` (`ID_Procesos`);

--
-- Filtros para la tabla `taxonomina`
--
ALTER TABLE `taxonomina`
  ADD CONSTRAINT `taxonomina_ibfk_1` FOREIGN KEY (`ID_Actividad`) REFERENCES `detalle_actividad` (`ID_Actividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `taxonomina_ibfk_2` FOREIGN KEY (`ID_proceso`) REFERENCES `procesos` (`ID_Procesos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD CONSTRAINT `tipo_ibfk_1` FOREIGN KEY (`ID_Actividad`) REFERENCES `detalle_actividad` (`ID_Actividad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usernames`
--
ALTER TABLE `usernames`
  ADD CONSTRAINT `usernames_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`ID`);

--
-- Filtros para la tabla `usuario_cliente`
--
ALTER TABLE `usuario_cliente`
  ADD CONSTRAINT `usuario_cliente_ibfk_1` FOREIGN KEY (`ID_actividad`) REFERENCES `detalle_actividad` (`ID_Actividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_2` FOREIGN KEY (`ID_direccion`) REFERENCES `direcciones` (`ID_Direccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_3` FOREIGN KEY (`ID_subproceso`) REFERENCES `sub_proceso` (`ID_subProcesos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_4` FOREIGN KEY (`ID_procesos`) REFERENCES `procesos` (`ID_Procesos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_5` FOREIGN KEY (`ID_nuevo_puesto`) REFERENCES `puestos` (`ID_puesto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_6` FOREIGN KEY (`ID_unidad_negocio`) REFERENCES `unidad_negocio` (`ID_unidad_negocio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_7` FOREIGN KEY (`ID_Temporalidad`) REFERENCES `temporalidad` (`ID_Temporalidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_8` FOREIGN KEY (`ID_Valor`) REFERENCES `frecuencia` (`ID_Valor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
