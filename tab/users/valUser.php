<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rol_id = $_POST['rol_id'];

        // Genera un hash de la contraseña
        //$hash_contrasena = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO usernames(username, 
                                        password, 
                                        rol_id) VALUES ('$username',
                                                        '$password',
                                                        '$rol_id')";
        $result = mysqli_query($conexion, $query);

        if(!$result) {
            die("Query Failed.");
        } else {
            if ($rol_id == 2) {
            // Crear una nueva tabla con el nombre del usuario
            $sql_create_table = "CREATE TABLE $username (
                id INT AUTO_INCREMENT PRIMARY KEY,
                proceso VARCHAR(255) NOT NULL,
                subproceso VARCHAR(255) NOT NULL,
                actividad VARCHAR(255) NOT NULL,
                val_Frec VARCHAR(100) NOT NULL,
                input VARCHAR(100) NOT NULL,
                sistema VARCHAR(100) NOT NULL,
                rol VARCHAR(100) NOT NULL,
                tiempo VARCHAR(100) NOT NULL,
                vol VARCHAR(100) NOT NULL,
                t_h VARCHAR(100) NOT NULL,
                ftes VARCHAR(100) NOT NULL,
                estado VARCHAR(5) NOT NULL
            )";
            } else {
                header('Location: users.php');
            }

            if ($conexion->query($sql_create_table) === TRUE) {
                
                // Insertar un dato en la nueva tabla
                $sql_insert_data = "INSERT INTO $username (`id`, `proceso`, `subproceso`, `actividad`, `val_frec`, `input`, `sistema`, `rol`, `tiempo`, `vol`, `t_h`, `ftes`, `estado`) VALUES
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
(148, 'Gestionar compras de servicios', 'Evaluar proveedores de servicios de proyectos ', 'Resguardar evaluación', '', '', '', '', '', '', '', '', '0')";
            }
    
                if ($conexion->query($sql_insert_data) === TRUE) {
                    header('Location: users.php');
                } else {
                    echo "Error al insertar dato en la nueva tabla: ";
                }
    
        }

    }
?>