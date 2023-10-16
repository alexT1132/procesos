-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2023 a las 01:55:03
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
(1, 'Dirección de Cadena de Suministro'),
(2, 'Direccion de Finanzas'),
(3, 'Direccion de Capital Humano');

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
(1, '4', 'Semanal'),
(2, '12', 'Mensual'),
(3, '1', 'Anual');

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
(8, '...', 1, '...');

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
  `nom_Subproceso` varchar(150) NOT NULL,
  `ID_Proceso` int(11) NOT NULL,
  `nom_proceso` varchar(50) NOT NULL,
  `ID_Actividad` int(11) NOT NULL,
  `nom_actividad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sub_proceso`
--

INSERT INTO `sub_proceso` (`ID_subProcesos`, `nom_Subproceso`, `ID_Proceso`, `nom_proceso`, `ID_Actividad`, `nom_actividad`) VALUES
(1, '...', 1, '...', 1, '...'),
(2, 'Actualizar catalogo de proveedores de insumos', 1, '...', 1, '...'),
(3, 'Asignación de SolP', 1, '...', 1, '...'),
(4, 'Atender consultas generales ', 1, '...', 1, '...'),
(5, 'Ciclo de compra y cumplimiento de proveedores', 1, '...', 1, '...'),
(6, 'Evaluar proveedores de servicios de proyectos ', 1, '...', 1, '...'),
(7, 'Evaluar proveedores SGC (Reevaluación)', 1, '...', 1, '...'),
(8, 'Fletes, traslado de proveedores nacionales/talleres/Ingenios', 1, '...', 1, '...'),
(9, 'Fletes, traslado nacional de proveedores extranjeros (Importación)', 1, '...', 1, '...'),
(10, 'Gestionar alta de DM de Proveedores', 1, '...', 1, '...'),
(11, 'Gestionar alta de DM de Proveedores (Portal)', 1, '...', 1, '...'),
(12, 'Gestionar auditoría interna y externa', 1, '...', 1, '...'),
(13, 'Gestionar bloqueo de proveedores', 1, '...', 1, '...'),
(14, 'Gestionar catálogo de proveedores de servicios (Excel)', 1, '...', 1, '...'),
(15, 'Gestionar compras de importación', 1, '...', 1, '...'),
(16, 'Gestionar contrato de servicios administrativos y de zafra', 1, '...', 1, '...'),
(17, 'Gestionar contrato de transportistas', 1, '...', 1, '...'),
(18, 'Gestionar contrato marco SAP', 1, '...', 1, '...'),
(19, 'Gestionar contratos de bodegas de azúcar', 1, '...', 1, '...'),
(20, 'Gestionar estrategia de fletes', 1, '...', 1, '...'),
(21, 'Gestionar modificación de DM de Proveedores', 1, '...', 1, '...'),
(22, 'Gestionar pedidos con convenio (Contrato Marco)', 1, '...', 1, '...'),
(23, 'Gestionar pedidos estándar (Compras mayores)', 1, '...', 1, '...'),
(24, 'Gestionar pedidos estándar (Compras menores)', 1, '...', 1, '...'),
(25, 'Gestionar pedidos por asignación directa', 1, '...', 1, '...'),
(26, 'Gestionar pedidos por concurso (proyectos)', 1, '...', 1, '...'),
(27, 'Realizar alta en catalogo de proveedores de insumos (SGC) ', 1, '...', 1, '...'),
(28, 'Realizar visita de seguimiento a proveedores', 1, '...', 1, '...'),
(29, 'Realizar visitas con nuevos proveedores de insumos (SGC) (Evaluación)', 1, '...', 1, '...'),
(30, 'Realizar visitas con proveedores de insumos existentes (SGC)', 1, '...', 1, '...'),
(31, 'Reporte anual de importaciones (Prosec)', 1, '...', 1, '...'),
(32, 'Reporte de servicios', 1, '...', 1, '...'),
(33, 'Reporte mensual ejecutivo', 1, '...', 1, '...'),
(34, 'Seguimiento de colocación de indicadores y de entregas', 1, '...', 1, '...'),
(35, 'Venta de bagazo', 1, '...', 1, '...'),
(36, 'Venta de chatarra (Spot)', 1, '...', 1, '...'),
(37, 'Venta de chatarra y envase de desechos', 1, '...', 1, '...'),
(38, 'Venta de equipo de fabrica', 1, '...', 1, '...');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `ID_Tipo` int(11) NOT NULL,
  `nom_tipo` varchar(50) NOT NULL,
  `ID_Actividad` int(11) NOT NULL,
  `nom_actividad` varchar(50) NOT NULL
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
(1, 'SIASA'),
(2, 'ITVSA'),
(3, 'IALMSA'),
(4, 'IPSLSA'),
(5, 'CIS'),
(6, 'PIASA');

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
(2, 'cliente', '1234', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_cliente`
--

CREATE TABLE `usuario_cliente` (
  `ID_empleado` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `ID_Unidad_Negocio` int(11) NOT NULL,
  `Nom_Unidad_Negocio` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `ID_Actividad` int(11) NOT NULL,
  `Nom_Actividad` varchar(50) NOT NULL,
  `ID_Nuevo_Puesto` int(11) NOT NULL,
  `Nom_Nuevo_Puesto` varchar(50) NOT NULL,
  `ID_Procesos` int(11) NOT NULL,
  `Nom_Proceso` varchar(50) NOT NULL,
  `ID_Direcciones` int(11) NOT NULL,
  `Nom_Direcciones` varchar(50) NOT NULL,
  `ID_Subproceso` int(11) NOT NULL,
  `Nom_Subproceso` varchar(50) NOT NULL,
  `ID_funcion` int(11) NOT NULL,
  `Nom_funcion` varchar(50) NOT NULL,
  `ID_Valor` int(11) NOT NULL,
  `Nom_Valor` varchar(50) NOT NULL,
  `Nom_frecuencia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD PRIMARY KEY (`ID_empleado`),
  ADD KEY `ID_Actividad` (`ID_Actividad`),
  ADD KEY `ID_Direcciones` (`ID_Direcciones`),
  ADD KEY `ID_Nuevo_Puesto` (`ID_Nuevo_Puesto`),
  ADD KEY `ID_Procesos` (`ID_Procesos`),
  ADD KEY `ID_Subproceso` (`ID_Subproceso`),
  ADD KEY `ID_Unidad_Negocio` (`ID_Unidad_Negocio`),
  ADD KEY `ID_Valor` (`ID_Valor`),
  ADD KEY `ID_funcion` (`ID_funcion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calculo`
--
ALTER TABLE `calculo`
  MODIFY `ID_Calculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_actividad`
--
ALTER TABLE `detalle_actividad`
  MODIFY `ID_Actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `ID_Direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `entrega`
--
ALTER TABLE `entrega`
  MODIFY `ID_entrega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ID_Eventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `ID_Nomen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nuevo_puesto`
--
ALTER TABLE `nuevo_puesto`
  MODIFY `ID_Nuevo_Puesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `ID_Procesos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `ID_Taxonomina` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `ID_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `unidad_negocio`
--
ALTER TABLE `unidad_negocio`
  MODIFY `ID_unidad_negocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usernames`
--
ALTER TABLE `usernames`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario_cliente`
--
ALTER TABLE `usuario_cliente`
  MODIFY `ID_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- Filtros para la tabla `usuario_cliente`
--
ALTER TABLE `usuario_cliente`
  ADD CONSTRAINT `usuario_cliente_ibfk_1` FOREIGN KEY (`ID_Actividad`) REFERENCES `detalle_actividad` (`ID_Actividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_2` FOREIGN KEY (`ID_Direcciones`) REFERENCES `direcciones` (`ID_Direccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_3` FOREIGN KEY (`ID_Nuevo_Puesto`) REFERENCES `nuevo_puesto` (`ID_Nuevo_Puesto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_4` FOREIGN KEY (`ID_Procesos`) REFERENCES `procesos` (`ID_Procesos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_5` FOREIGN KEY (`ID_Subproceso`) REFERENCES `sub_proceso` (`ID_subProcesos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_6` FOREIGN KEY (`ID_funcion`) REFERENCES `funciones` (`ID_funcion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_7` FOREIGN KEY (`ID_Unidad_Negocio`) REFERENCES `unidad_negocio` (`ID_unidad_negocio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_8` FOREIGN KEY (`ID_Valor`) REFERENCES `frecuencia` (`ID_Valor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cliente_ibfk_9` FOREIGN KEY (`ID_funcion`) REFERENCES `funciones` (`ID_funcion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;