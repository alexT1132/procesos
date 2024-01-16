-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2024 a las 00:27:00
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

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
  `nom_actividad` varchar(50) NOT NULL,
  `Tiempo` varchar(50) NOT NULL,
  `ID_Valor` int(11) NOT NULL,
  `Nom_Valor` varchar(50) NOT NULL,
  `Nom_frecuencia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente1`
--

CREATE TABLE `cliente1` (
  `id` int(11) NOT NULL,
  `proceso` varchar(255) NOT NULL,
  `subproceso` varchar(255) NOT NULL,
  `actividad` varchar(255) NOT NULL,
  `val_Frec` varchar(100) NOT NULL,
  `input` varchar(100) NOT NULL,
  `sistema` varchar(100) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `tiempo` varchar(100) NOT NULL,
  `vol` varchar(100) NOT NULL,
  `t_h` varchar(100) NOT NULL,
  `ftes` varchar(100) NOT NULL,
  `estado` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente1`
--

INSERT INTO `cliente1` (`id`, `proceso`, `subproceso`, `actividad`, `val_Frec`, `input`, `sistema`, `rol`, `tiempo`, `vol`, `t_h`, `ftes`, `estado`) VALUES
(1, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Firmar contrato', '4', 'fgdf', 'xxx', 'Ejecutar', '8', '4', '128', '0.8', '1'),
(2, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Recibir solicitud y propuestas', '4', 'fgdf', 'aaaaaa', 'Supervisar', '10', '2', '80', '0.5', '1'),
(3, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Validar posible transportista', '4', 'llamada', 'sap', 'Supervisar', '1', '10', '40', '0.25', '1'),
(4, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Visitar instalaciones', '4', 'llamada', 'outlook', 'Ejecutar', '2', '10', '80', '0.5', '1'),
(5, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Validar documentación', '4', 'correo', 'excel', 'Ejecutar', '1', '2', '8', '0.05', '1'),
(6, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Solicitar información correcta', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '10', '2', '80', '0.5', '1'),
(7, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Llenar contrato', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '10', '2', '80', '0.5', '1'),
(8, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Enviar contrato y documentación para validación', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '10', '2', '80', '0.5', '1'),
(9, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Corregir contrato', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '8', '2', '64', '0.4', '1'),
(10, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Firmar contrato', '', '', '', '', '', '', '', '', '0'),
(11, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Validar propuesta del proveedor', '', '', '', '', '', '', '', '', '0'),
(12, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Solicitar nueva cotización/propuesta', '', '', '', '', '', '', '', '', '0'),
(13, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Negociar con proveedor', '', '', '', '', '', '', '', '', '0'),
(14, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Recibir y validar documentación', '', '', '', '', '', '', '', '', '0'),
(15, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(16, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Revisar contrato firmado', '', '', '', '', '', '', '', '', '0'),
(17, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Actualizar contrato', '', '', '', '', '', '', '', '', '0'),
(18, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Llenar contrato', '', '', '', '', '', '', '', '', '0'),
(19, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Firmar contrato', '', '', '', '', '', '', '', '', '0'),
(20, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Enviar contrato y documentación para validación', '', '', '', '', '', '', '', '', '0'),
(21, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Corregir contrato', '', '', '', '', '', '', '', '', '0'),
(22, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Firmar contrato', '', '', '', '', '', '', '', '', '0'),
(23, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Recibir propuesta de proveedor', '', '', '', '', '', '', '', '', '0'),
(24, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Negociar condiciones comerciales', '', '', '', '', '', '', '', '', '0'),
(25, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Determinar mejor opción', '', '', '', '', '', '', '', '', '0'),
(26, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Llenar contrato', '', '', '', '', '', '', '', '', '0'),
(27, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Validar documentación', '', '', '', '', '', '', '', '', '0'),
(28, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(29, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Enviar contrato y documentación para validación', '', '', '', '', '', '', '', '', '0'),
(30, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Corregir contrato', '', '', '', '', '', '', '', '', '0'),
(31, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Enviar invitación de licitación', '', '', '', '', '', '', '', '', '0'),
(32, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Negociar y seleccionar proveedor', '', '', '', '', '', '', '', '', '0'),
(33, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Crear contrato', '', '', '', '', '', '', '', '', '0'),
(34, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Liberar contrato marco', '', '', '', '', '', '', '', '', '0'),
(35, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Buscar proveedores alternos', '', '', '', '', '', '', '', '', '0'),
(36, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Recibir solicitud de alta', '4', 'fgdf', 'xxx', 'Ejecutar', '10', '2', '80', '0.5', '1'),
(37, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Revisar información proporcionada', '', '', '', '', '', '', '', '', '0'),
(38, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(39, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Realizar alta del DM', '', '', '', '', '', '', '', '', '0'),
(40, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Notificar alta', '4', 'correo', 'sap', 'Ejecutar', '.25', '1', '1', '0.0063', '1'),
(41, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Recibir solicitud de modificación', '4', 'correo', 'sap', 'Supervisar', '1', '20', '80', '0.5', '1'),
(42, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Revisar información proporcionada', '', '', '', '', '', '', '', '', '0'),
(43, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(44, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Realizar modificación del DM', '', '', '', '', '', '', '', '', '0'),
(45, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Notificar la modificación', '', '', '', '', '', '', '', '', '0'),
(46, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Recibir solicitud de alta', '', '', '', '', '', '', '', '', '0'),
(47, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Notificar alta', '', '', '', '', '', '', '', '', '0'),
(48, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Revisar información proporcionada', '', '', '', '', '', '', '', '', '0'),
(49, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(50, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Realizar alta del DM', '', '', '', '', '', '', '', '', '0'),
(51, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Solicitar validación', '', '', '', '', '', '', '', '', '0'),
(52, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Notificar al proveedor', '', '', '', '', '', '', '', '', '0'),
(53, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Solicitar activación', '', '', '', '', '', '', '', '', '0'),
(54, 'Gestionar Datos Maestros de Proveedores', 'Gestionar bloqueo de proveedores', 'Recibir solicitud de bloqueo', '', '', '', '', '', '', '', '', '0'),
(55, 'Gestionar Datos Maestros de Proveedores', 'Gestionar bloqueo de proveedores', 'Realizar bloqueo\r\n', '', '', '', '', '', '', '', '', '0'),
(56, 'Gestionar Datos Maestros de Proveedores', 'Gestionar bloqueo de proveedores', 'Notificar bloqueo', '', '', '', '', '', '', '', '', '0'),
(57, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(58, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar petición de oferta en SAP', '', '', '', '', '', '', '', '', '0'),
(59, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir propuesta de proveedores', '', '', '', '', '', '', '', '', '0'),
(60, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Negociación y retroalimentación con proveedores', '', '', '', '', '', '', '', '', '0'),
(61, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', '0'),
(62, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Validar con usuarios y almacén / Retroalimentación proveedores', '', '', '', '', '', '', '', '', '0'),
(63, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Tomar decisión de compra', '', '', '', '', '', '', '', '', '0'),
(64, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(65, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido\r\n', '', '', '', '', '', '', '', '', '0'),
(66, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(67, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Notificar rechazo de liberación', '', '', '', '', '', '', '', '', '0'),
(68, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(69, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Dar seguimiento a la orden de compra', '', '', '', '', '', '', '', '', '0'),
(70, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir y registrar factura', '', '', '', '', '', '', '', '', '0'),
(71, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(72, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar petición de oferta en SAP', '', '', '', '', '', '', '', '', '0'),
(73, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir propuesta de proveedores', '', '', '', '', '', '', '', '', '0'),
(74, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Negociación y retroalimentación con proveedores', '', '', '', '', '', '', '', '', '0'),
(75, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', '0'),
(76, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Validar con usuarios y almacén / Retroalimentación proveedores', '', '', '', '', '', '', '', '', '0'),
(77, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Tomar decisión de compra', '', '', '', '', '', '', '', '', '0'),
(78, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(79, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(80, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Notificar rechazo de liberación', '', '', '', '', '', '', '', '', '0'),
(81, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(82, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Dar seguimiento a la orden de compra', '', '', '', '', '', '', '', '', '0'),
(83, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir y registrar factura', '', '', '', '', '', '', '', '', '0'),
(84, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(85, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(86, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(87, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Dar seguimiento a la orden de compra', '', '', '', '', '', '', '', '', '0'),
(88, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir y registrar factura', '', '', '', '', '', '', '', '', '0'),
(89, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(90, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Recibir autorización técnica', '', '', '', '', '', '', '', '', '0'),
(91, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(92, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(93, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(94, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Notificar rechazo', '', '', '', '', '', '', '', '', '0'),
(95, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(96, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Dar seguimiento a la orden de compra', '', '', '', '', '', '', '', '', '0'),
(97, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Recibir y registrar factura', '', '', '', '', '', '', '', '', '0'),
(98, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(99, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Generar petición de oferta por correo electrónico', '', '', '', '', '', '', '', '', '0'),
(100, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir propuestas de proveedores', '', '', '', '', '', '', '', '', '0'),
(101, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', '0'),
(102, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Revisar comparativo y propuesta proporcionada (Decisión de compra)', '', '', '', '', '', '', '', '', '0'),
(103, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir validación técnica (como anexo en la OC)', '', '', '', '', '', '', '', '', '0'),
(104, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Elaborar orden de compra', '', '', '', '', '', '', '', '', '0'),
(105, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(106, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(107, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Notificar rechazo', '', '', '', '', '', '', '', '', '0'),
(108, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(109, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(110, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Generar petición de oferta por correo electrónico', '', '', '', '', '', '', '', '', '0'),
(111, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir propuestas de proveedores', '', '', '', '', '', '', '', '', '0'),
(112, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', '0'),
(113, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Revisar comparativo y propuesta proporcionada', '', '', '', '', '', '', '', '', '0'),
(114, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir validación técnica (como anexo en la OC)', '', '', '', '', '', '', '', '', '0'),
(115, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Elaborar orden de compra', '', '', '', '', '', '', '', '', '0'),
(116, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido\r\n', '', '', '', '', '', '', '', '', '0'),
(117, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Notificar rechazo', '', '', '', '', '', '', '', '', '0'),
(118, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(119, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(120, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Solicitar cotización al proveedor y visto bueno usuario', '', '', '', '', '', '', '', '', '0'),
(121, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(122, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(123, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(124, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Recibir SolP ', '', '', '', '', '', '', '', '', '0'),
(125, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Revisar autorización técnica', '', '', '', '', '', '', '', '', '0'),
(126, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Generar pedido (Se adjunta el PDF de validación)', '', '', '', '', '', '', '', '', '0'),
(127, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(128, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(129, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Notificar rechazo', '', '', '', '', '', '', '', '', '0'),
(130, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(131, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(132, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir solicitud del área de proyectos', '', '', '', '', '', '', '', '', '0'),
(133, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Enviar invitación', '', '', '', '', '', '', '', '', '0'),
(134, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Realizar conferencia', '', '', '', '', '', '', '', '', '0'),
(135, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir propuestas de proveedores', '', '', '', '', '', '', '', '', '0'),
(136, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', '0'),
(137, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Revisar comparativo y propuesta proporcionada (Decisión de compra)', '', '', '', '', '', '', '', '', '0'),
(138, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir validación técnica', '', '', '', '', '', '', '', '', '0'),
(139, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Elaborar orden de compra', '', '', '', '', '', '', '', '', '0'),
(140, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(141, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Notificar rechazo', '', '', '', '', '', '', '', '', '0'),
(142, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(143, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Enlistar proveedores', '', '', '', '', '', '', '', '', '0'),
(144, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Evaluar y asignar calificación', '', '', '', '', '', '', '', '', '0'),
(145, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Enviar calificaciones a proyectos', '', '', '', '', '', '', '', '', '0'),
(146, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Enviar justificación de calificación (si aplica)', '', '', '', '', '', '', '', '', '0'),
(147, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Recibir retroalimentación del área de proyectos en cuanto a la calificación de los proveedores (calificación integral)', '', '', '', '', '', '', '', '', '0'),
(148, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Resguardar evaluación', '', '', '', '', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente2`
--

CREATE TABLE `cliente2` (
  `id` int(11) NOT NULL,
  `proceso` varchar(255) NOT NULL,
  `subproceso` varchar(255) NOT NULL,
  `actividad` varchar(255) NOT NULL,
  `val_Frec` varchar(100) NOT NULL,
  `input` varchar(100) NOT NULL,
  `sistema` varchar(100) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `tiempo` varchar(100) NOT NULL,
  `vol` varchar(100) NOT NULL,
  `t_h` varchar(100) NOT NULL,
  `ftes` varchar(100) NOT NULL,
  `estado` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente2`
--

INSERT INTO `cliente2` (`id`, `proceso`, `subproceso`, `actividad`, `val_Frec`, `input`, `sistema`, `rol`, `tiempo`, `vol`, `t_h`, `ftes`, `estado`) VALUES
(1, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Firmar contrato', '', '', '', '', '', '', '', '', '0'),
(2, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Recibir solicitud y propuestas', '', '', '', '', '', '', '', '', '0'),
(3, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Validar posible transportista', '', '', '', '', '', '', '', '', '0'),
(4, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Visitar instalaciones', '', '', '', '', '', '', '', '', '0'),
(5, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Validar documentación', '', '', '', '', '', '', '', '', '0'),
(6, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(7, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Llenar contrato', '', '', '', '', '', '', '', '', '0'),
(8, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Enviar contrato y documentación para validación', '', '', '', '', '', '', '', '', '0'),
(9, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Corregir contrato', '', '', '', '', '', '', '', '', '0'),
(10, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Firmar contrato', '', '', '', '', '', '', '', '', '0'),
(11, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Validar propuesta del proveedor', '', '', '', '', '', '', '', '', '0'),
(12, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Solicitar nueva cotización/propuesta', '', '', '', '', '', '', '', '', '0'),
(13, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Negociar con proveedor', '', '', '', '', '', '', '', '', '0'),
(14, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Recibir y validar documentación', '', '', '', '', '', '', '', '', '0'),
(15, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(16, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Revisar contrato firmado', '', '', '', '', '', '', '', '', '0'),
(17, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Actualizar contrato', '', '', '', '', '', '', '', '', '0'),
(18, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Llenar contrato', '', '', '', '', '', '', '', '', '0'),
(19, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Firmar contrato', '', '', '', '', '', '', '', '', '0'),
(20, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Enviar contrato y documentación para validación', '', '', '', '', '', '', '', '', '0'),
(21, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Corregir contrato', '', '', '', '', '', '', '', '', '0'),
(22, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Firmar contrato', '', '', '', '', '', '', '', '', '0'),
(23, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Recibir propuesta de proveedor', '', '', '', '', '', '', '', '', '0'),
(24, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Negociar condiciones comerciales', '', '', '', '', '', '', '', '', '0'),
(25, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Determinar mejor opción', '', '', '', '', '', '', '', '', '0'),
(26, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Llenar contrato', '', '', '', '', '', '', '', '', '0'),
(27, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Validar documentación', '', '', '', '', '', '', '', '', '0'),
(28, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(29, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Enviar contrato y documentación para validación', '', '', '', '', '', '', '', '', '0'),
(30, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Corregir contrato', '', '', '', '', '', '', '', '', '0'),
(31, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Enviar invitación de licitación', '', '', '', '', '', '', '', '', '0'),
(32, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Negociar y seleccionar proveedor', '', '', '', '', '', '', '', '', '0'),
(33, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Crear contrato', '', '', '', '', '', '', '', '', '0'),
(34, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Liberar contrato marco', '', '', '', '', '', '', '', '', '0'),
(35, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Buscar proveedores alternos', '', '', '', '', '', '', '', '', '0'),
(36, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Recibir solicitud de alta', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '10', '2', '80', '0.5', '1'),
(37, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Revisar información proporcionada', '', '', '', '', '', '', '', '', '0'),
(38, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(39, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Realizar alta del DM', '', '', '', '', '', '', '', '', '0'),
(40, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Notificar alta', '', '', '', '', '', '', '', '', '0'),
(41, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Recibir solicitud de modificación', '', '', '', '', '', '', '', '', '0'),
(42, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Revisar información proporcionada', '', '', '', '', '', '', '', '', '0'),
(43, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(44, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Realizar modificación del DM', '', '', '', '', '', '', '', '', '0'),
(45, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Notificar la modificación', '', '', '', '', '', '', '', '', '0'),
(46, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Recibir solicitud de alta', '', '', '', '', '', '', '', '', '0'),
(47, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Notificar alta', '', '', '', '', '', '', '', '', '0'),
(48, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Revisar información proporcionada', '', '', '', '', '', '', '', '', '0'),
(49, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(50, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Realizar alta del DM', '', '', '', '', '', '', '', '', '0'),
(51, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Solicitar validación', '', '', '', '', '', '', '', '', '0'),
(52, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Notificar al proveedor', '', '', '', '', '', '', '', '', '0'),
(53, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Solicitar activación', '', '', '', '', '', '', '', '', '0'),
(54, 'Gestionar Datos Maestros de Proveedores', 'Gestionar bloqueo de proveedores', 'Recibir solicitud de bloqueo', '', '', '', '', '', '', '', '', '0'),
(55, 'Gestionar Datos Maestros de Proveedores', 'Gestionar bloqueo de proveedores', 'Realizar bloqueo\r\n', '', '', '', '', '', '', '', '', '0'),
(56, 'Gestionar Datos Maestros de Proveedores', 'Gestionar bloqueo de proveedores', 'Notificar bloqueo', '', '', '', '', '', '', '', '', '0'),
(57, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir SolP', '4', 'llamada', 'fresh', 'Ejecutar', '5', '5', '100', '0.625', '1'),
(58, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar petición de oferta en SAP', '4', 'ticket', 'excel', 'Supervisar', '5', '5', '100', '0.625', '1'),
(59, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir propuesta de proveedores', '4', 'corre', 'fresh', 'Ejecutar', '5', '5', '100', '0.625', '1'),
(60, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Negociación y retroalimentación con proveedores', '', '', '', '', '', '', '', '', '0'),
(61, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', '0'),
(62, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Validar con usuarios y almacén / Retroalimentación proveedores', '', '', '', '', '', '', '', '', '0'),
(63, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Tomar decisión de compra', '', '', '', '', '', '', '', '', '0'),
(64, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(65, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido\r\n', '', '', '', '', '', '', '', '', '0'),
(66, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(67, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Notificar rechazo de liberación', '', '', '', '', '', '', '', '', '0'),
(68, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(69, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Dar seguimiento a la orden de compra', '', '', '', '', '', '', '', '', '0'),
(70, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir y registrar factura', '', '', '', '', '', '', '', '', '0'),
(71, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(72, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar petición de oferta en SAP', '', '', '', '', '', '', '', '', '0'),
(73, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir propuesta de proveedores', '', '', '', '', '', '', '', '', '0'),
(74, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Negociación y retroalimentación con proveedores', '', '', '', '', '', '', '', '', '0'),
(75, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', '0'),
(76, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Validar con usuarios y almacén / Retroalimentación proveedores', '', '', '', '', '', '', '', '', '0'),
(77, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Tomar decisión de compra', '', '', '', '', '', '', '', '', '0'),
(78, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(79, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(80, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Notificar rechazo de liberación', '', '', '', '', '', '', '', '', '0'),
(81, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(82, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Dar seguimiento a la orden de compra', '', '', '', '', '', '', '', '', '0'),
(83, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir y registrar factura', '', '', '', '', '', '', '', '', '0'),
(84, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(85, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(86, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(87, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Dar seguimiento a la orden de compra', '', '', '', '', '', '', '', '', '0'),
(88, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir y registrar factura', '', '', '', '', '', '', '', '', '0'),
(89, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Recibir SolP', '4', 'correo', 'sap', 'Ejecutar', '2', '1', '8', '0.05', '1'),
(90, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Recibir autorización técnica', '', '', '', '', '', '', '', '', '0'),
(91, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(92, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(93, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(94, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Notificar rechazo', '', '', '', '', '', '', '', '', '0'),
(95, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(96, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Dar seguimiento a la orden de compra', '', '', '', '', '', '', '', '', '0'),
(97, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Recibir y registrar factura', '', '', '', '', '', '', '', '', '0'),
(98, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(99, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Generar petición de oferta por correo electrónico', '', '', '', '', '', '', '', '', '0'),
(100, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir propuestas de proveedores', '', '', '', '', '', '', '', '', '0'),
(101, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', '0'),
(102, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Revisar comparativo y propuesta proporcionada (Decisión de compra)', '', '', '', '', '', '', '', '', '0'),
(103, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir validación técnica (como anexo en la OC)', '', '', '', '', '', '', '', '', '0'),
(104, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Elaborar orden de compra', '', '', '', '', '', '', '', '', '0'),
(105, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(106, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(107, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Notificar rechazo', '', '', '', '', '', '', '', '', '0'),
(108, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(109, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(110, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Generar petición de oferta por correo electrónico', '', '', '', '', '', '', '', '', '0'),
(111, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir propuestas de proveedores', '', '', '', '', '', '', '', '', '0'),
(112, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', '0'),
(113, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Revisar comparativo y propuesta proporcionada', '', '', '', '', '', '', '', '', '0'),
(114, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir validación técnica (como anexo en la OC)', '', '', '', '', '', '', '', '', '0'),
(115, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Elaborar orden de compra', '', '', '', '', '', '', '', '', '0'),
(116, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido\r\n', '', '', '', '', '', '', '', '', '0'),
(117, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Notificar rechazo', '', '', '', '', '', '', '', '', '0'),
(118, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(119, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(120, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Solicitar cotización al proveedor y visto bueno usuario', '', '', '', '', '', '', '', '', '0'),
(121, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(122, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(123, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(124, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Recibir SolP ', '', '', '', '', '', '', '', '', '0'),
(125, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Revisar autorización técnica', '', '', '', '', '', '', '', '', '0'),
(126, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Generar pedido (Se adjunta el PDF de validación)', '', '', '', '', '', '', '', '', '0'),
(127, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(128, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(129, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Notificar rechazo', '', '', '', '', '', '', '', '', '0'),
(130, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(131, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(132, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir solicitud del área de proyectos', '', '', '', '', '', '', '', '', '0'),
(133, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Enviar invitación', '', '', '', '', '', '', '', '', '0'),
(134, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Realizar conferencia', '', '', '', '', '', '', '', '', '0'),
(135, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir propuestas de proveedores', '', '', '', '', '', '', '', '', '0'),
(136, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', '0'),
(137, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Revisar comparativo y propuesta proporcionada (Decisión de compra)', '', '', '', '', '', '', '', '', '0'),
(138, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir validación técnica', '', '', '', '', '', '', '', '', '0'),
(139, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Elaborar orden de compra', '', '', '', '', '', '', '', '', '0'),
(140, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(141, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Notificar rechazo', '', '', '', '', '', '', '', '', '0'),
(142, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(143, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Enlistar proveedores', '', '', '', '', '', '', '', '', '0'),
(144, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Evaluar y asignar calificación', '', '', '', '', '', '', '', '', '0'),
(145, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Enviar calificaciones a proyectos', '', '', '', '', '', '', '', '', '0'),
(146, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Enviar justificación de calificación (si aplica)', '', '', '', '', '', '', '', '', '0'),
(147, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Recibir retroalimentación del área de proyectos en cuanto a la calificación de los proveedores (calificación integral)', '', '', '', '', '', '', '', '', '0'),
(148, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Resguardar evaluación', '', '', '', '', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_actividad`
--

CREATE TABLE `detalle_actividad` (
  `ID_Actividad` int(11) NOT NULL,
  `nom_actividad` varchar(120) NOT NULL,
  `Entregable` varchar(50) NOT NULL,
  `sistema` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_actividad`
--

INSERT INTO `detalle_actividad` (`ID_Actividad`, `nom_actividad`, `Entregable`, `sistema`, `Descripcion`) VALUES
(1, '...', '', '', ''),
(2, 'Actualizar con nuevas SolP que no tienen asignació', '', '', ''),
(3, 'Actualizar contrato', '', '', ''),
(4, 'Actualizar estatus de servicio', '', '', ''),
(5, 'Actualizar lista', '', '', ''),
(6, 'Asignar comprador y notificar al comprador', '', '', ''),
(7, 'Asignar SolP a compradores por grupo de compra', '', '', ''),
(8, 'Atender a proveedores directamente (Corp)', '', '', ''),
(9, 'Atender consulta o canalizar al área correspondien', '', '', ''),
(10, 'Autorizar tarifas Fletes', '', '', ''),
(11, 'Buscar proveedores alternos', '', '', ''),
(12, 'Capturar tarifas Fletes', '', '', ''),
(13, 'Cargar información de proveedores en Excel', '', '', ''),
(14, 'Cerrar acuerdo con comprador', '', '', ''),
(15, 'Comparar año anterior con año actual para evaluar ', '', '', ''),
(16, 'Comparar listado actual con listado pasado', '', '', ''),
(17, 'Consolidar en formato predefinido', '', '', ''),
(18, 'Consolidar en un Excel', '', '', ''),
(19, 'Consolidar evaluaciones y enviar al SGC', '', '', ''),
(20, 'Consolidar información', '', '', ''),
(21, 'Consolidar reportes en un archivo', '', '', ''),
(22, 'Coordinar con almacén si se requiere otra requisición (para ingresar y manipular mercancía)', '', '', ''),
(23, 'Coordinar visita', '', '', ''),
(24, 'Coordinar visita a proveedores', '', '', ''),
(25, 'Corregir contrato', '', '', ''),
(26, 'Crear contrato', '', '', ''),
(27, 'Dar seguimiento', '', '', ''),
(28, 'Dar seguimiento a la orden de compra', '', '', ''),
(29, 'Definir convenio de retiro de compra', '', '', ''),
(30, 'Definir posibles compradores', '', '', ''),
(31, 'Definir posibles compradores de chatarra', '', '', ''),
(32, 'Determinar mejor opción', '', '', ''),
(33, 'Determinar tipo de unidad', '', '', ''),
(34, 'Documentar la lista de empaque', '', '', ''),
(35, 'Elaborar orden de compra', '', '', ''),
(36, 'Elaborar orden de compra', '', '', ''),
(37, 'Enlistar proveedores', '', '', ''),
(38, 'Envase de desechos: Solicitar aprobación del área ', '', '', ''),
(39, 'Enviar a Dirección Ejecutiva', '', '', ''),
(40, 'Enviar archivo ', '', '', ''),
(41, 'Enviar calificaciones a proyectos', '', '', ''),
(42, 'Enviar catálogo de equipo (si aplica)', '', '', ''),
(43, 'Enviar contrato y documentación para validación', '', '', ''),
(44, 'Enviar convenio a aprobación', '', '', ''),
(45, 'Enviar formato y solicitar evaluación', '', '', ''),
(46, 'Enviar invitación', '', '', ''),
(47, 'Enviar invitación de licitación', '', '', ''),
(48, 'Enviar justificación de calificación (si aplica)', '', '', ''),
(49, 'Enviar listado a validación', '', '', ''),
(50, 'Enviar propuesta al área técnica, contraloría e in', '', '', ''),
(51, 'Enviar reporte', '', '', ''),
(52, 'Enviar reportes', '', '', ''),
(53, 'Enviar respuesta', '', '', ''),
(54, 'Evaluar y asignar calificación', '', '', ''),
(55, 'Exportación temporal: Fumigar equipo y consolidar ', '', '', ''),
(56, 'Exportación temporal: Solicitar información para g', '', '', ''),
(57, 'Firmar contrato', '', '', ''),
(58, 'Generar cuadro comparativo', '', '', ''),
(59, 'Generar pedido', '', '', ''),
(60, 'Generar pedido (Se adjunta el PDF de validación)', '', '', ''),
(61, 'Generar petición de oferta en SAP', '', '', ''),
(62, 'Generar petición de oferta por correo electrónico', '', '', ''),
(63, 'Hacer modificaciones (si se requiere)', '', '', ''),
(64, 'Imprimir y firmar catálogo', '', '', ''),
(65, 'Liberar contrato marco', '', '', ''),
(66, 'Liberar pedido', '', '', ''),
(67, 'Listar compras de más de 500,000 mxn', '', '', ''),
(68, 'Llenar contrato', '', '', ''),
(69, 'Llenar métricas de evaluación', '', '', ''),
(70, 'Llevar a cabo cierre de auditoría', '', '', ''),
(71, 'Medir cumplimiento de proveedores (tiempos de entrega)', '', '', ''),
(72, 'Monitorear colocaciones y entregas', '', '', ''),
(73, 'Negocación y retroalimentación con proveedores', '', '', ''),
(74, 'Negociar con proveedor', '', '', ''),
(75, 'Negociar condiciones comerciales', '', '', ''),
(76, 'Negociar propuesta con compradores según las validaciones de las áreas', '', '', ''),
(77, 'Negociar tarifas Fletes', '', '', ''),
(78, 'Negociar y proponer nuevo precio objetivo (si aplica)', '', '', ''),
(79, 'Negociar y seleccionar proveedor', '', '', ''),
(80, 'Notificación de ingenio:  Seleccionar comprador y condiciones de compra', '', '', ''),
(81, 'Notificación de ingenio: Notificar la venta a lista de compradores', '', '', ''),
(82, 'Notificar a almacén para coordinar descarga', '', '', ''),
(83, 'Notificar a ingenios comprador seleccionado, condiciones de pago, precio y volumen', '', '', ''),
(84, 'Notificar acuerdo a los ingenios', '', '', ''),
(85, 'Notificar al agente aduanal el transportista seleccionado', '', '', ''),
(86, 'Notificar al almacén el comprador designado', '', '', ''),
(87, 'Notificar al almacén el comprador y precio designado', '', '', ''),
(88, 'Notificar al proveedor', '', '', ''),
(89, 'Notificar al seguro', '', '', ''),
(90, 'Notificar alta', '', '', ''),
(91, 'Notificar bloqueo', '', '', ''),
(92, 'Notificar la modificación', '', '', ''),
(93, 'Notificar precio de compra al almacén', '', '', ''),
(94, 'Notificar precio de compra al almacén', '', '', ''),
(95, 'Notificar rechazo', '', '', ''),
(96, 'Notificar rechazo de liberación', '', '', ''),
(97, 'Presentar a la auditoría', '', '', ''),
(98, 'Presentar departamentos a evaluar y auditores', '', '', ''),
(99, 'Proporcionar documentación para carta porte', '', '', ''),
(100, 'Prospectar fletes disponibles', '', '', ''),
(101, 'Realizar alta del DM', '', '', ''),
(102, 'Realizar bloqueo', '', '', ''),
(103, 'Realizar conferencia', '', '', ''),
(104, 'Realizar evaluación (Si aplica)', '', '', ''),
(105, 'Realizar formato de acción correctiva', '', '', ''),
(106, 'Realizar modificación del DM', '', '', ''),
(107, 'Realizar venta spot', '', '', ''),
(108, 'Realizar visita', '', '', ''),
(109, 'Recibir actualización de precio de compra', '', '', ''),
(110, 'Recibir autorización técnica', '', '', ''),
(111, 'Recibir confirmación de la orden de compra', '', '', ''),
(112, 'Recibir evaluación', '', '', ''),
(113, 'Recibir evaluaciones del SGC', '', '', ''),
(114, 'Recibir notificación de auditoria', '', '', ''),
(115, 'Recibir propuesta de proveedor', '', '', ''),
(116, 'Recibir propuesta de proveedores', '', '', ''),
(117, 'Recibir propuestas de posibles compradores', '', '', ''),
(118, 'Recibir propuestas y seleccionar comprador', '', '', ''),
(119, 'Recibir reportes de agentes aduanales (se reciben del contacto de agencias aduanales del ejecutivo que tiene la cuenta)', '', '', ''),
(120, 'Recibir retroalimentación del área de proyectos en cuanto a la calificación de los proveedores (calificación integral)', '', '', ''),
(121, 'Recibir solicitud de alta', '', '', ''),
(122, 'Recibir solicitud de bloqueo', '', '', ''),
(123, 'Recibir solicitud de consulta', '', '', ''),
(124, 'Recibir solicitud de modificación', '', '', ''),
(125, 'Recibir solicitud de venta de bagazo (de ingenios o comprador)', '', '', ''),
(126, 'Recibir solicitud del área de proyectos', '', '', ''),
(127, 'Recibir solicitud y propuestas', '', '', ''),
(128, 'Recibir SolP', '', '', ''),
(129, 'Recibir validación técnica', '', '', ''),
(130, 'Recibir validación técnica (como anexo en la OC)', '', '', ''),
(131, 'Recibir y registrar factura', '', '', ''),
(132, 'Recibir y revisar propuestas de compra de equipo', '', '', ''),
(133, 'Recibir y validar documentación', '', '', ''),
(134, 'Recibir y validar reporte final de las áreas y si esta bien notificar al área para que haga el envío a economía', '', '', ''),
(135, 'Recopilar consolidaciones mensuales (evaluaciones) y documentación a revisar', '', '', ''),
(136, 'Recuperar información de tiempos de ciclo de compra', '', '', ''),
(137, 'Recuperar información en SAP', '', '', ''),
(138, 'Recuperar listado de SolP', '', '', ''),
(139, 'Registrar proveedores con resultados positivos', '', '', ''),
(140, 'Reportar comentarios de la visita', '', '', ''),
(141, 'Resguardar catálogo', '', '', ''),
(142, 'Resguardar evaluación', '', '', ''),
(143, 'Resguardar evaluaciones y métricas', '', '', ''),
(144, 'Revisar autorización técnica', '', '', ''),
(145, 'Revisar comparativo y propuesta proporcionada', '', '', ''),
(146, 'Revisar comparativo y propuesta proporcionada (Decisión de compra)', '', '', ''),
(147, 'Revisar contrato firmado', '', '', ''),
(148, 'Revisar información proporcionada', '', '', ''),
(149, 'Seleccionar proveedor', '', '', ''),
(150, 'Seleccionar proveedores a visitar', '', '', ''),
(151, 'Seleccionar proveedores más frecuentes', '', '', ''),
(152, 'Si no es igual, se hace observación a ingenio para que corrijan la informacion o soliciten aclaración con ejecutivos adu', '', '', ''),
(153, 'Solicitar activación', '', '', ''),
(154, 'Solicitar cotización al proveedor y visto bueno usuario', '', '', ''),
(155, 'Solicitar documentación vigente (si aplica)', '', '', ''),
(156, 'Solicitar información correcta', '', '', ''),
(157, 'Solicitar nueva cotización/propuesta  ', '', '', ''),
(158, 'Solicitar propuestas de compra', '', '', ''),
(159, 'Solicitar validación', '', '', ''),
(160, 'Solicitar validación con los ingenios', '', '', ''),
(161, 'Tomar decisión de compra', '', '', ''),
(162, 'Validar con ususarios y almacén / Retroalimentación proveedores', '', '', ''),
(163, 'Validar documentación', '', '', ''),
(164, 'Validar evaluaciones del proveedor', '', '', ''),
(165, 'Validar los registros de las gerencias administrativas y/o contabilidad vs los reportes aduanales', '', '', ''),
(166, 'Validar posible transportista', '', '', ''),
(167, 'Validar propuesta del proveedor', '', '', ''),
(168, 'Validar si se incluyen en la lista', '', '', ''),
(169, 'Verificar salidas o cambio de proveedor', '', '', ''),
(170, 'Visitar instalaciones', '', '', '');

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
(1, '...'),
(2, 'Direccion de Cadena de Suministro'),
(3, 'Dirección de Finanzas'),
(4, 'Dirección de Capital Humano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrega`
--

CREATE TABLE `entrega` (
  `ID_entrega` int(11) NOT NULL,
  `nom_entrega` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entrega`
--

INSERT INTO `entrega` (`ID_entrega`, `nom_entrega`) VALUES
(1, 'SI REMOTA'),
(3, 'NO SITIO');

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

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`ID_Eventos`, `Eventual`, `Por_Eventos`, `Continuos`, `Mensual`) VALUES
(2, '...', '...', '...', '...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frecuencia`
--

CREATE TABLE `frecuencia` (
  `ID_Valor` int(11) NOT NULL,
  `Nom_Valor` varchar(50) NOT NULL,
  `Nom_frecuencia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `frecuencia`
--

INSERT INTO `frecuencia` (`ID_Valor`, `Nom_Valor`, `Nom_frecuencia`) VALUES
(2, '4', 'Semanal'),
(3, '1', 'Mensual'),
(4, '12', 'Anual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones`
--

CREATE TABLE `funciones` (
  `ID_funcion` int(11) NOT NULL,
  `Nom_funcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `funciones`
--

INSERT INTO `funciones` (`ID_funcion`, `Nom_funcion`) VALUES
(1, '...'),
(2, 'Abastecimientos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomenclatura`
--

CREATE TABLE `nomenclatura` (
  `ID_Nomen` int(11) NOT NULL,
  `Nomenclatura` varchar(50) NOT NULL,
  `ID_Actividad` int(11) NOT NULL,
  `nom_actividad` varchar(50) NOT NULL,
  `ID_Procesos` int(11) NOT NULL,
  `Nom_Proceso` varchar(50) NOT NULL,
  `ID_Subproceso` int(11) NOT NULL,
  `Nom_Subproceso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nomenclatura`
--

INSERT INTO `nomenclatura` (`ID_Nomen`, `Nomenclatura`, `ID_Actividad`, `nom_actividad`, `ID_Procesos`, `Nom_Proceso`, `ID_Subproceso`, `Nom_Subproceso`) VALUES
(1, '...', 1, '...', 1, '...', 1, '...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevo_puesto`
--

CREATE TABLE `nuevo_puesto` (
  `ID_Nuevo_Puesto` int(11) NOT NULL,
  `Nuevo_Puesto` varchar(50) NOT NULL,
  `ID_Actividad` int(11) NOT NULL,
  `nom_actividad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nuevo_puesto`
--

INSERT INTO `nuevo_puesto` (`ID_Nuevo_Puesto`, `Nuevo_Puesto`, `ID_Actividad`, `nom_actividad`) VALUES
(8, '...', 1, '...'),
(10, 'Analista', 1, '...'),
(13, 'Coordinador', 1, '...'),
(14, 'Jefatura', 1, '...'),
(15, 'Dirección de área', 1, '...');

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
(1, '...'),
(2, 'Administrar proveedores'),
(3, 'Atender consultas internas y externas'),
(4, 'Gestión/Monitoreo de Indicadores y Reportes '),
(5, 'Gestionar auditorías'),
(6, 'Gestionar compras de materiales'),
(7, 'Gestionar compras de servicios'),
(8, 'Gestionar Contratos'),
(9, 'Gestionar Datos Maestros de Proveedores'),
(10, 'Gestionar venta de chatarra, bagazo y equipo'),
(11, 'Logística de materiales/equipos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos_consultas`
--

CREATE TABLE `procesos_consultas` (
  `id` int(11) NOT NULL,
  `proceso` varchar(255) DEFAULT NULL,
  `subproceso` varchar(255) DEFAULT NULL,
  `actividad` varchar(255) DEFAULT NULL,
  `val_frec` varchar(10) NOT NULL,
  `input` varchar(100) NOT NULL,
  `sistema` varchar(100) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `tiempo` varchar(100) NOT NULL,
  `vol` varchar(100) NOT NULL,
  `t_h` varchar(50) NOT NULL,
  `ftes` varchar(50) NOT NULL,
  `estado` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `procesos_consultas`
--

INSERT INTO `procesos_consultas` (`id`, `proceso`, `subproceso`, `actividad`, `val_frec`, `input`, `sistema`, `rol`, `tiempo`, `vol`, `t_h`, `ftes`, `estado`) VALUES
(1, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Firmar contrato', '', '', '', '', '', '', '', '', '0'),
(2, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Recibir solicitud y propuestas', '', '', '', '', '', '', '', '', '0'),
(3, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Validar posible transportista', '', '', '', '', '', '', '', '', '0'),
(4, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Visitar instalaciones', '', '', '', '', '', '', '', '', '0'),
(5, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Validar documentación', '', '', '', '', '', '', '', '', '0'),
(6, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(7, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Llenar contrato', '', '', '', '', '', '', '', '', '0'),
(8, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Enviar contrato y documentación para validación', '', '', '', '', '', '', '', '', '0'),
(9, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Corregir contrato', '', '', '', '', '', '', '', '', '0'),
(10, 'Gestionar Contratos', 'Gestionar contrato de transportistas', 'Firmar contrato', '', '', '', '', '', '', '', '', '0'),
(11, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Validar propuesta del proveedor', '', '', '', '', '', '', '', '', '0'),
(12, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Solicitar nueva cotización/propuesta', '', '', '', '', '', '', '', '', '0'),
(13, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Negociar con proveedor', '', '', '', '', '', '', '', '', '0'),
(14, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Recibir y validar documentación', '', '', '', '', '', '', '', '', '0'),
(15, 'Gestionar Contratos', 'Gestionar alta de DM de Proveedores', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(16, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Revisar contrato firmado', '', '', '', '', '', '', '', '', '0'),
(17, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Actualizar contrato', '', '', '', '', '', '', '', '', '0'),
(18, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Llenar contrato', '', '', '', '', '', '', '', '', '0'),
(19, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Firmar contrato', '', '', '', '', '', '', '', '', '0'),
(20, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Enviar contrato y documentación para validación', '', '', '', '', '', '', '', '', '0'),
(21, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Corregir contrato', '', '', '', '', '', '', '', '', '0'),
(22, 'Gestionar Contratos', 'Gestionar contratos de bodegas de azúcar', 'Firmar contrato', '', '', '', '', '', '', '', '', '0'),
(23, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Recibir propuesta de proveedor', '', '', '', '', '', '', '', '', '0'),
(24, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Negociar condiciones comerciales', '', '', '', '', '', '', '', '', '0'),
(25, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Determinar mejor opción', '', '', '', '', '', '', '', '', '0'),
(26, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Llenar contrato', '', '', '', '', '', '', '', '', '0'),
(27, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Validar documentación', '', '', '', '', '', '', '', '', '0'),
(28, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(29, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Enviar contrato y documentación para validación', '', '', '', '', '', '', '', '', '0'),
(30, 'Gestionar Contratos', 'Gestionar contrato de servicios administrativos y de zafra', 'Corregir contrato', '', '', '', '', '', '', '', '', '0'),
(31, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Enviar invitación de licitación', '', '', '', '', '', '', '', '', '0'),
(32, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Negociar y seleccionar proveedor', '', '', '', '', '', '', '', '', '0'),
(33, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Crear contrato', '', '', '', '', '', '', '', '', '0'),
(34, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Liberar contrato marco', '', '', '', '', '', '', '', '', '0'),
(35, 'Gestionar Contratos', 'Gestionar contrato marco SAP', 'Buscar proveedores alternos', '', '', '', '', '', '', '', '', '0'),
(36, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Recibir solicitud de alta', '', '', '', '', '', '', '', '', '0'),
(37, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Revisar información proporcionada', '', '', '', '', '', '', '', '', '0'),
(38, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(39, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Realizar alta del DM', '', '', '', '', '', '', '', '', '0'),
(40, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores', 'Notificar alta', '', '', '', '', '', '', '', '', '0'),
(41, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Recibir solicitud de modificación', '', '', '', '', '', '', '', '', '0'),
(42, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Revisar información proporcionada', '', '', '', '', '', '', '', '', '0'),
(43, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(44, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Realizar modificación del DM', '', '', '', '', '', '', '', '', '0'),
(45, 'Gestionar Datos Maestros de Proveedores', 'Gestionar modificación de DM de Proveedores', 'Notificar la modificación', '', '', '', '', '', '', '', '', '0'),
(46, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Recibir solicitud de alta', '', '', '', '', '', '', '', '', '0'),
(47, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Notificar alta', '', '', '', '', '', '', '', '', '0'),
(48, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Revisar información proporcionada', '', '', '', '', '', '', '', '', '0'),
(49, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Solicitar información correcta', '', '', '', '', '', '', '', '', '0'),
(50, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Realizar alta del DM', '', '', '', '', '', '', '', '', '0'),
(51, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Solicitar validación', '', '', '', '', '', '', '', '', '0'),
(52, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Notificar al proveedor', '', '', '', '', '', '', '', '', '0'),
(53, 'Gestionar Datos Maestros de Proveedores', 'Gestionar alta de DM de Proveedores (Portal)', 'Solicitar activación', '', '', '', '', '', '', '', '', '0'),
(54, 'Gestionar Datos Maestros de Proveedores', 'Gestionar bloqueo de proveedores', 'Recibir solicitud de bloqueo', '', '', '', '', '', '', '', '', '0'),
(55, 'Gestionar Datos Maestros de Proveedores', 'Gestionar bloqueo de proveedores', 'Realizar bloqueo\r\n', '', '', '', '', '', '', '', '', '0'),
(56, 'Gestionar Datos Maestros de Proveedores', 'Gestionar bloqueo de proveedores', 'Notificar bloqueo', '', '', '', '', '', '', '', '', '0'),
(57, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(58, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar petición de oferta en SAP', '', '', '', '', '', '', '', '', '0'),
(59, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir propuesta de proveedores', '', '', '', '', '', '', '', '', '0'),
(60, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Negociación y retroalimentación con proveedores', '', '', '', '', '', '', '', '', '0'),
(61, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', '0'),
(62, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Validar con usuarios y almacén / Retroalimentación proveedores', '', '', '', '', '', '', '', '', '0'),
(63, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Tomar decisión de compra', '', '', '', '', '', '', '', '', '0'),
(64, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(65, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido\r\n', '', '', '', '', '', '', '', '', '0'),
(66, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(67, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Notificar rechazo de liberación', '', '', '', '', '', '', '', '', '0'),
(68, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(69, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Dar seguimiento a la orden de compra', '', '', '', '', '', '', '', '', '0'),
(70, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir y registrar factura', '', '', '', '', '', '', '', '', '0'),
(71, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(72, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar petición de oferta en SAP', '', '', '', '', '', '', '', '', '0'),
(73, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir propuesta de proveedores', '', '', '', '', '', '', '', '', '0'),
(74, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Negociación y retroalimentación con proveedores', '', '', '', '', '', '', '', '', '0'),
(75, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', '0'),
(76, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Validar con usuarios y almacén / Retroalimentación proveedores', '', '', '', '', '', '', '', '', '0'),
(77, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Tomar decisión de compra', '', '', '', '', '', '', '', '', '0'),
(78, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(79, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(80, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Notificar rechazo de liberación', '', '', '', '', '', '', '', '', '0'),
(81, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(82, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Dar seguimiento a la orden de compra', '', '', '', '', '', '', '', '', '0'),
(83, 'Gestionar compras de materiales', 'Gestionar pedidos estándar (Compras menores)', 'Recibir y registrar factura', '', '', '', '', '', '', '', '', '0'),
(84, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(85, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(86, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(87, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Dar seguimiento a la orden de compra', '', '', '', '', '', '', '', '', '0'),
(88, 'Gestionar compras de materiales', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir y registrar factura', '', '', '', '', '', '', '', '', '0'),
(89, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(90, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Recibir autorización técnica', '', '', '', '', '', '', '', '', '0'),
(91, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Generar pedido', '', '', '', '', '', '', '', '', '0'),
(92, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(93, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Liberar pedido', '', '', '', '', '', '', '', '', '0'),
(94, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Notificar rechazo', '', '', '', '', '', '', '', '', '0'),
(95, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', '0'),
(96, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Dar seguimiento a la orden de compra', '', '', '', '', '', '', '', '', '0'),
(97, 'Gestionar compras de materiales', 'Gestionar pedidos por asignación directa', 'Recibir y registrar factura', '', '', '', '', '', '', '', '', '0'),
(98, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir SolP', '', '', '', '', '', '', '', '', '0'),
(99, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Generar petición de oferta por correo electrónico', '', '', '', '', '', '', '', '', '0'),
(100, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir propuestas de proveedores', '', '', '', '', '', '', '', '', '0'),
(101, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', ''),
(102, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Revisar comparativo y propuesta proporcionada (Decisión de compra)', '', '', '', '', '', '', '', '', ''),
(103, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir validación técnica (como anexo en la OC)', '', '', '', '', '', '', '', '', ''),
(104, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Elaborar orden de compra', '', '', '', '', '', '', '', '', ''),
(105, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido', '', '', '', '', '', '', '', '', ''),
(106, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido', '', '', '', '', '', '', '', '', ''),
(107, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Notificar rechazo', '', '', '', '', '', '', '', '', ''),
(108, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', ''),
(109, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir SolP', '', '', '', '', '', '', '', '', ''),
(110, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Generar petición de oferta por correo electrónico', '', '', '', '', '', '', '', '', ''),
(111, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir propuestas de proveedores', '', '', '', '', '', '', '', '', ''),
(112, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', ''),
(113, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Revisar comparativo y propuesta proporcionada', '', '', '', '', '', '', '', '', ''),
(114, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir validación técnica (como anexo en la OC)', '', '', '', '', '', '', '', '', ''),
(115, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Elaborar orden de compra', '', '', '', '', '', '', '', '', ''),
(116, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Liberar pedido\r\n', '', '', '', '', '', '', '', '', ''),
(117, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Notificar rechazo', '', '', '', '', '', '', '', '', ''),
(118, 'Gestionar compras de servicios', 'Gestionar pedidos estándar (Compras menores)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', ''),
(119, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir SolP', '', '', '', '', '', '', '', '', ''),
(120, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Solicitar cotización al proveedor y visto bueno usuario', '', '', '', '', '', '', '', '', ''),
(121, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Generar pedido', '', '', '', '', '', '', '', '', ''),
(122, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Liberar pedido', '', '', '', '', '', '', '', '', ''),
(123, 'Gestionar compras de servicios', 'Gestionar pedidos con convenio (Contrato Marco)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', ''),
(124, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Recibir SolP ', '', '', '', '', '', '', '', '', ''),
(125, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Revisar autorización técnica', '', '', '', '', '', '', '', '', ''),
(126, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Generar pedido (Se adjunta el PDF de validación)', '', '', '', '', '', '', '', '', ''),
(127, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Liberar pedido', '', '', '', '', '', '', '', '', ''),
(128, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Liberar pedido', '', '', '', '', '', '', '', '', ''),
(129, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Notificar rechazo', '', '', '', '', '', '', '', '', ''),
(130, 'Gestionar compras de servicios', 'Gestionar pedidos por asignación directa', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', ''),
(131, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir SolP', '', '', '', '', '', '', '', '', ''),
(132, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir solicitud del área de proyectos', '', '', '', '', '', '', '', '', ''),
(133, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Enviar invitación', '', '', '', '', '', '', '', '', ''),
(134, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Realizar conferencia', '', '', '', '', '', '', '', '', ''),
(135, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir propuestas de proveedores', '', '', '', '', '', '', '', '', ''),
(136, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Generar cuadro comparativo', '', '', '', '', '', '', '', '', ''),
(137, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Revisar comparativo y propuesta proporcionada (Decisión de compra)', '', '', '', '', '', '', '', '', ''),
(138, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir validación técnica', '', '', '', '', '', '', '', '', ''),
(139, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Elaborar orden de compra', '', '', '', '', '', '', '', '', ''),
(140, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Liberar pedido', '', '', '', '', '', '', '', '', ''),
(141, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Notificar rechazo', '', '', '', '', '', '', '', '', ''),
(142, 'Gestionar compras de servicios', 'Gestionar pedidos por concurso (proyectos)', 'Recibir confirmación de la orden de compra', '', '', '', '', '', '', '', '', ''),
(143, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Enlistar proveedores', '', '', '', '', '', '', '', '', ''),
(144, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Evaluar y asignar calificación', '', '', '', '', '', '', '', '', ''),
(145, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Enviar calificaciones a proyectos', '', '', '', '', '', '', '', '', ''),
(146, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Enviar justificación de calificación (si aplica)', '', '', '', '', '', '', '', '', ''),
(147, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Recibir retroalimentación del área de proyectos en cuanto a la calificación de los proveedores (calificación integral)', '', '', '', '', '', '', '', '', ''),
(148, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Resguardar evaluación', '', '', '', '', '', '', '', '', '');

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
(1, 'administrador'),
(2, 'visita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_proceso`
--

CREATE TABLE `sub_proceso` (
  `ID_subProcesos` int(11) NOT NULL,
  `nom_Subproceso` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sub_proceso`
--

INSERT INTO `sub_proceso` (`ID_subProcesos`, `nom_Subproceso`) VALUES
(1, '...'),
(2, 'Actualizar catalogo de proveedores de insumos'),
(3, 'Asignación de SolP'),
(4, 'Atender consultas generales '),
(5, 'Ciclo de compra y cumplimiento de proveedores'),
(6, 'Evaluar proveedores de servicios de proyectos '),
(7, 'Evaluar proveedores SGC (Reevaluación)'),
(8, 'Fletes, traslado de proveedores nacionales/talleres/Ingenios'),
(9, 'Fletes, traslado nacional de proveedores extranjeros (Importación)'),
(10, 'Gestionar alta de DM de Proveedores'),
(11, 'Gestionar alta de DM de Proveedores (Portal)'),
(12, 'Gestionar auditoría interna y externa'),
(13, 'Gestionar bloqueo de proveedores'),
(14, 'Gestionar catálogo de proveedores de servicios (Excel)'),
(15, 'Gestionar compras de importación'),
(16, 'Gestionar contrato de servicios administrativos y de zafra'),
(17, 'Gestionar contrato de transportistas'),
(18, 'Gestionar contrato marco SAP'),
(19, 'Gestionar contratos de bodegas de azúcar'),
(20, 'Gestionar estrategia de fletes'),
(21, 'Gestionar modificación de DM de Proveedores'),
(22, 'Gestionar pedidos con convenio (Contrato Marco)'),
(23, 'Gestionar pedidos estándar (Compras mayores)'),
(24, 'Gestionar pedidos estándar (Compras menores)'),
(25, 'Gestionar pedidos por asignación directa'),
(26, 'Gestionar pedidos por concurso (proyectos)'),
(27, 'Realizar alta en catalogo de proveedores de insumos (SGC) '),
(28, 'Realizar visita de seguimiento a proveedores'),
(29, 'Realizar visitas con nuevos proveedores de insumos (SGC) (Evaluación)'),
(30, 'Realizar visitas con proveedores de insumos existentes (SGC)'),
(31, 'Reporte anual de importaciones (Prosec)'),
(32, 'Reporte de servicios'),
(33, 'Reporte mensual ejecutivo'),
(34, 'Seguimiento de colocación de indicadores y de entregas'),
(35, 'Venta de bagazo'),
(36, 'Venta de chatarra (Spot)'),
(37, 'Venta de chatarra y envase de desechos'),
(38, 'Venta de equipo de fabrica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taxonomina`
--

CREATE TABLE `taxonomina` (
  `ID_Taxonomina` int(11) NOT NULL,
  `nom_taxonomina` varchar(50) NOT NULL,
  `ID_Actividad` int(11) NOT NULL,
  `nom_actividad` varchar(50) NOT NULL,
  `ID_proceso` int(11) NOT NULL,
  `nom_proceso` varchar(50) NOT NULL,
  `ID_Subproceso` int(11) NOT NULL,
  `nom_Subproceso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `taxonomina`
--

INSERT INTO `taxonomina` (`ID_Taxonomina`, `nom_taxonomina`, `ID_Actividad`, `nom_actividad`, `ID_proceso`, `nom_proceso`, `ID_Subproceso`, `nom_Subproceso`) VALUES
(1, '...', 1, '...', 1, '...', 1, '...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `ID_Tipo` int(11) NOT NULL,
  `nom_tipo` varchar(100) NOT NULL,
  `ID_Actividad` int(11) NOT NULL,
  `nom_actividad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`ID_Tipo`, `nom_tipo`, `ID_Actividad`, `nom_actividad`) VALUES
(1, '...', 1, '...');

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
(1, '...'),
(2, 'SAISA'),
(3, 'ITVSA'),
(4, 'IALMSA'),
(5, 'IPSLSA'),
(6, 'CIS'),
(7, 'PIASA');

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
(1, 'Administrador', 'Pi@5a.2E', 1),
(31, 'cliente1', '1234', 2),
(32, 'cliente2', '1234', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_cliente`
--

CREATE TABLE `usuario_cliente` (
  `ID_empleado` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Nom_Unidad_Negocio` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Nom_Actividad` varchar(300) NOT NULL,
  `Nom_Nuevo_Puesto` varchar(50) NOT NULL,
  `Nom_Proceso` varchar(300) NOT NULL,
  `Nom_Direcciones` varchar(50) NOT NULL,
  `Nom_Subproceso` varchar(300) NOT NULL,
  `Nom_funcion` varchar(50) NOT NULL,
  `val_Frec` varchar(255) NOT NULL,
  `input` varchar(255) NOT NULL,
  `sistema` varchar(255) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `tiempo` varchar(50) NOT NULL,
  `vol` varchar(50) NOT NULL,
  `t_h` varchar(100) NOT NULL,
  `ftes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario_cliente`
--

INSERT INTO `usuario_cliente` (`ID_empleado`, `Nombre`, `Apellido`, `Nom_Unidad_Negocio`, `Email`, `Area`, `Nom_Actividad`, `Nom_Nuevo_Puesto`, `Nom_Proceso`, `Nom_Direcciones`, `Nom_Subproceso`, `Nom_funcion`, `val_Frec`, `input`, `sistema`, `rol`, `tiempo`, `vol`, `t_h`, `ftes`) VALUES
(156, 'x', 'sss', 'SAISA', 'aaaaaaaa@gmail.com', 'ti', 'Firmar contrato', 'Analista', 'Gestionar Contratos', 'Direccion de Cadena de Suministro', 'Gestionar contrato de servicios administrativos y de zafra', 'Abastecimientos', '4', 'fgdf', 'xxx', 'Ejecutar', '8', '4', '128', '0.8'),
(157, 'diana', 'vera', 'SAISA', 'aaaaaaaa@gmail.com', 'x', 'Recibir solicitud de alta', 'Analista', 'Gestionar Datos Maestros de Proveedores', 'Direccion de Cadena de Suministro', 'Gestionar alta de DM de Proveedores', 'Abastecimientos', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '10', '2', '80', '0.5'),
(158, 'Fernando', 'osorio', 'CIS', 'fosorio@grupopiasa.com', 'administrativa', 'Notificar alta', 'Coordinador', 'Gestionar Datos Maestros de Proveedores', 'Direccion de Cadena de Suministro', 'Gestionar alta de DM de Proveedores', 'Abastecimientos', '4', 'correo', 'sap', 'Ejecutar', '.25', '1', '1', '0.0063'),
(159, 'Fernando', 'osorio', 'CIS', 'fosorio@grupopiasa.com', 'administrativa', 'Recibir solicitud de modificación', 'Coordinador', 'Gestionar Datos Maestros de Proveedores', 'Direccion de Cadena de Suministro', 'Gestionar modificación de DM de Proveedores', 'Abastecimientos', '4', 'correo', 'sap', 'Supervisar', '1', '20', '80', '0.5'),
(160, 'x', 'sss', 'SAISA', 'aaaaaaaa@gmail.com', 'ti', 'Recibir solicitud y propuestas', 'Analista', 'Gestionar Contratos', 'Direccion de Cadena de Suministro', 'Gestionar contrato de transportistas', 'Abastecimientos', '4', 'fgdf', 'aaaaaa', 'Supervisar', '10', '2', '80', '0.5'),
(161, 'x', 'sss', 'SAISA', 'aaaaaaaa@gmail.com', 'ti', 'Recibir solicitud de alta', 'Analista', 'Gestionar Datos Maestros de Proveedores', 'Direccion de Cadena de Suministro', 'Gestionar alta de DM de Proveedores', 'Abastecimientos', '4', 'fgdf', 'xxx', 'Ejecutar', '10', '2', '80', '0.5'),
(162, 'Arturo', 'Soler', 'CIS', 'fsoler@grupopiasa.com', 'administrativa', 'Validar posible transportista', 'Analista', 'Gestionar Contratos', 'Dirección de Finanzas', 'Gestionar contrato de transportistas', 'Abastecimientos', '4', 'llamada', 'sap', 'Supervisar', '1', '10', '40', '0.25'),
(163, 'Arturo', 'Soler', 'CIS', 'fsoler@grupopiasa.com', 'administrativa', 'Visitar instalaciones', 'Analista', 'Gestionar Contratos', 'Dirección de Finanzas', 'Gestionar contrato de transportistas', 'Abastecimientos', '4', 'llamada', 'outlook', 'Ejecutar', '2', '10', '80', '0.5'),
(164, 'hugo', 'sanchez', 'CIS', 'hsanchez@grupopiasa.com', 'administrativa', 'Recibir SolP', 'Coordinador', 'Gestionar compras de materiales', 'Direccion de Cadena de Suministro', 'Gestionar pedidos por asignación directa', 'Abastecimientos', '4', 'correo', 'sap', 'Ejecutar', '2', '1', '8', '0.05'),
(165, 'Javier', 'hernandez', 'SAISA', 'jhernendez@grupopiasa.com', 'operacion', 'Recibir SolP', 'Dirección de área', 'Gestionar compras de materiales', 'Direccion de Cadena de Suministro', 'Gestionar pedidos estándar (Compras menores)', 'Abastecimientos', '4', 'llamada', 'fresh', 'Ejecutar', '5', '5', '100', '0.625'),
(166, 'Javier', 'hernandez', 'SAISA', 'jhernendez@grupopiasa.com', 'operacion', 'Generar petición de oferta en SAP', 'Dirección de área', 'Gestionar compras de materiales', 'Direccion de Cadena de Suministro', 'Gestionar pedidos estándar (Compras menores)', 'Abastecimientos', '4', 'ticket', 'excel', 'Supervisar', '5', '5', '100', '0.625'),
(167, 'Javier', 'hernandez', 'SAISA', 'jhernendez@grupopiasa.com', 'operacion', 'Recibir propuesta de proveedores', 'Dirección de área', 'Gestionar compras de materiales', 'Direccion de Cadena de Suministro', 'Gestionar pedidos estándar (Compras menores)', 'Abastecimientos', '4', 'corre', 'fresh', 'Ejecutar', '5', '5', '100', '0.625'),
(168, 'guillermo', 'ochoa', 'IPSLSA', 'gochoa@grupopiasa.com', 'administrativa', 'Validar documentación', 'Jefatura', 'Gestionar Contratos', 'Direccion de Cadena de Suministro', 'Gestionar contrato de transportistas', 'Abastecimientos', '4', 'correo', 'excel', 'Ejecutar', '1', '2', '8', '0.05'),
(169, 'x', 'sss', 'SAISA', 'aaaaaaaa@gmail.com', 'ti', 'Solicitar información correcta', 'Analista', 'Gestionar Contratos', 'Direccion de Cadena de Suministro', 'Gestionar contrato de transportistas', 'Abastecimientos', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '10', '2', '80', '0.5'),
(170, 'x', 'sss', 'SAISA', 'aaaaaaaa@gmail.com', 'ti', 'Solicitar información correcta', 'Analista', 'Gestionar Contratos', 'Direccion de Cadena de Suministro', 'Gestionar contrato de transportistas', 'Abastecimientos', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '10', '2', '80', '0.5'),
(171, 'x', 'sss', 'SAISA', 'aaaaaaaa@gmail.com', 'ti', 'Solicitar información correcta', 'Analista', 'Gestionar Contratos', 'Direccion de Cadena de Suministro', 'Gestionar contrato de transportistas', 'Abastecimientos', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '10', '2', '80', '0.5'),
(172, 'x', 'sss', 'SAISA', 'aaaaaaaa@gmail.com', 'ti', 'Solicitar información correcta', 'Analista', 'Gestionar Contratos', 'Direccion de Cadena de Suministro', 'Gestionar contrato de transportistas', 'Abastecimientos', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '10', '2', '80', '0.5'),
(173, 'x', 'sss', 'SAISA', 'aaaaaaaa@gmail.com', 'ti', 'Solicitar información correcta', 'Analista', 'Gestionar Contratos', 'Direccion de Cadena de Suministro', 'Gestionar contrato de transportistas', 'Abastecimientos', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '10', '2', '80', '0.5'),
(174, 'x', 'sss', 'SAISA', 'aaaaaaaa@gmail.com', 'ti', 'Llenar contrato', 'Analista', 'Gestionar Contratos', 'Direccion de Cadena de Suministro', 'Gestionar contrato de transportistas', 'Abastecimientos', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '10', '2', '80', '0.5'),
(175, 'x', 'sss', 'SAISA', 'aaaaaaaa@gmail.com', 'ti', 'Enviar contrato y documentación para validación', 'Analista', 'Gestionar Contratos', 'Direccion de Cadena de Suministro', 'Gestionar contrato de transportistas', 'Abastecimientos', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '10', '2', '80', '0.5'),
(176, 'x', 'sss', 'SAISA', 'aaaaaaaa@gmail.com', 'ti', 'Corregir contrato', 'Analista', 'Gestionar Contratos', 'Direccion de Cadena de Suministro', 'Gestionar contrato de transportistas', 'Abastecimientos', '4', 'fgdf', 'aaaaaa', 'Ejecutar', '8', '2', '64', '0.4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calculo`
--
ALTER TABLE `calculo`
  ADD PRIMARY KEY (`ID_Calculo`),
  ADD KEY `ID_Actividad` (`ID_Actividad`),
  ADD KEY `ID_Valor` (`ID_Valor`);

--
-- Indices de la tabla `cliente1`
--
ALTER TABLE `cliente1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente2`
--
ALTER TABLE `cliente2`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`ID_entrega`);

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
-- Indices de la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD PRIMARY KEY (`ID_funcion`);

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
  ADD PRIMARY KEY (`ID_Nuevo_Puesto`),
  ADD KEY `ID_Actividad` (`ID_Actividad`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`ID_Procesos`);

--
-- Indices de la tabla `procesos_consultas`
--
ALTER TABLE `procesos_consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `sub_proceso`
--
ALTER TABLE `sub_proceso`
  ADD PRIMARY KEY (`ID_subProcesos`);

--
-- Indices de la tabla `taxonomina`
--
ALTER TABLE `taxonomina`
  ADD PRIMARY KEY (`ID_Taxonomina`),
  ADD KEY `ID_Actividad` (`ID_Actividad`),
  ADD KEY `ID_proceso` (`ID_proceso`),
  ADD KEY `ID_Subproceso` (`ID_Subproceso`);

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
  ADD PRIMARY KEY (`ID_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calculo`
--
ALTER TABLE `calculo`
  MODIFY `ID_Calculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente1`
--
ALTER TABLE `cliente1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT de la tabla `cliente2`
--
ALTER TABLE `cliente2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT de la tabla `detalle_actividad`
--
ALTER TABLE `detalle_actividad`
  MODIFY `ID_Actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `ID_Direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `entrega`
--
ALTER TABLE `entrega`
  MODIFY `ID_entrega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ID_Eventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `frecuencia`
--
ALTER TABLE `frecuencia`
  MODIFY `ID_Valor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `funciones`
--
ALTER TABLE `funciones`
  MODIFY `ID_funcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `nomenclatura`
--
ALTER TABLE `nomenclatura`
  MODIFY `ID_Nomen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nuevo_puesto`
--
ALTER TABLE `nuevo_puesto`
  MODIFY `ID_Nuevo_Puesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `ID_Procesos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `procesos_consultas`
--
ALTER TABLE `procesos_consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sub_proceso`
--
ALTER TABLE `sub_proceso`
  MODIFY `ID_subProcesos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `taxonomina`
--
ALTER TABLE `taxonomina`
  MODIFY `ID_Taxonomina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `ID_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `unidad_negocio`
--
ALTER TABLE `unidad_negocio`
  MODIFY `ID_unidad_negocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usernames`
--
ALTER TABLE `usernames`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usuario_cliente`
--
ALTER TABLE `usuario_cliente`
  MODIFY `ID_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calculo`
--
ALTER TABLE `calculo`
  ADD CONSTRAINT `calculo_ibfk_1` FOREIGN KEY (`ID_Actividad`) REFERENCES `detalle_actividad` (`ID_Actividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calculo_ibfk_2` FOREIGN KEY (`ID_Valor`) REFERENCES `frecuencia` (`ID_Valor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nomenclatura`
--
ALTER TABLE `nomenclatura`
  ADD CONSTRAINT `nomenclatura_ibfk_1` FOREIGN KEY (`ID_Actividad`) REFERENCES `detalle_actividad` (`ID_Actividad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nuevo_puesto`
--
ALTER TABLE `nuevo_puesto`
  ADD CONSTRAINT `nuevo_puesto_ibfk_1` FOREIGN KEY (`ID_Actividad`) REFERENCES `detalle_actividad` (`ID_Actividad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `taxonomina`
--
ALTER TABLE `taxonomina`
  ADD CONSTRAINT `taxonomina_ibfk_1` FOREIGN KEY (`ID_Actividad`) REFERENCES `detalle_actividad` (`ID_Actividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `taxonomina_ibfk_2` FOREIGN KEY (`ID_proceso`) REFERENCES `procesos` (`ID_Procesos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `taxonomina_ibfk_3` FOREIGN KEY (`ID_Subproceso`) REFERENCES `sub_proceso` (`ID_subProcesos`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
