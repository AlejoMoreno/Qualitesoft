-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 20-04-2015 a las 14:05:39
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `ingenium`
-- 

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `auditoriagacf1102a`
-- 

INSERT INTO `auditoriagacf1102a` VALUES 
(1, 2, 1, '2015-04-20', '2015-04-22 22:25:16', '2015-04-22 22:25:23', 'Objetivo ejemplo auditar este proceso', 
	'Alcance ejemplo', 'Criterio de evaluacion ejemplo', 'actividad1, actividad2, actividad3', 1, 1);

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `criterio`
-- 

INSERT INTO `criterio` VALUES (1, 'este es un criterio de ejemplo', 'La primera referencia');

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `cronogramagacf1100_1`
-- 

INSERT INTO `cronogramagacf1100_1` VALUES (1, '2015', 1, 1, 1, '2015-04-22', 1, 'si', 'si', '2015-04-21');

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `cumplimientos`
-- 

INSERT INTO `cumplimientos` VALUES (1, 'Si');
INSERT INTO `cumplimientos` VALUES (2, 'No');
INSERT INTO `cumplimientos` VALUES (3, 'N/A');
INSERT INTO `cumplimientos` VALUES (4, 'blanco');

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `dependenciavertical`
-- 

INSERT INTO `dependenciavertical` VALUES (1, 'dependenciaPrueba');

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `empresas`
-- 

INSERT INTO `empresas` VALUES (
	1, 'Empresa Ejemplo', 1, 1, 80000000, 'RUT8000000', 'http://www.camaradecomercio.com', 
	'http://www.rut.com', 'http://www.cdf.com', 'http://www.website.com');

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `formularios`
-- 

INSERT INTO `formularios` VALUES (
	1, 'LISTA DE CHEQUEO CHECK LIST', 'GACF-1103', 'REV: 06', 
	'TALLERES AERONÁUTICOS CONTRATADOS (CONTRACTED AERONAUTIC AUDIT REPAIR STATION CHECKLIST)', '2015-04-21', 1, 1, 1);

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `historial`
-- 

INSERT INTO `historial` VALUES (1, 'prueba', '2015-04-20', 'http://192.168.0.51');

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `informe`
-- 

INSERT INTO `informe` VALUES (
	1, 1, '2015-04-21', '2015-04-21', 1, 'primer criterio', 'este es el consejo para esta empresa', 
	'los aspectos son todos buenos', 'los resultados fueron favorables', 1);

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `items`
-- 

INSERT INTO `items` VALUES (
	1, 1, 'El proveedor cuenta con una certificación por parte de la autoridad aeronáutica Registre el número del certificado____________ Does vendor hold a CAA repair station certification? Record certificate number___________', 
	4, '1', 1);

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `nc`
-- 

INSERT INTO `nc` VALUES (1, 1, 1, 'es la primera NC', 'en la categoria x');

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `procesos`
-- 

INSERT INTO `procesos` VALUES (1, 'ProcesoEjemplo');

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `referencias`
-- 

INSERT INTO `referencias` VALUES (1, 'la primera referencia');

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `regauditoria`
-- 

INSERT INTO `regauditoria` VALUES (1, 1, '2015-04-20', 'ejemplo', 1, 2, 1);

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `tipos_programas`
-- 

INSERT INTO `tipos_programas` VALUES (1, 'primer tipo de programa');

-- --------------------------------------------------------

-- 
-- Volcar la base de datos para la tabla `type`
-- 

INSERT INTO `type` VALUES (1, 'superUsuario', 1);
INSERT INTO `type` VALUES (2, 'Auditor', 2);
INSERT INTO `type` VALUES (3, 'auditado', 3);
INSERT INTO `type` VALUES (4, 'dirAuditor', 4);

-- --------------------------------------------------------

INSERT INTO `usuarios` VALUES (1, 'nombre prueba', 1, '3212112121', 'nombre@nombre.com', 'nombre', 'nombre', 1, 'ejemplo', 'superusuario');
INSERT INTO `usuarios` VALUES (2, 'auditado', 1, '52525252', 'auditado@auditado.com', 'auditado', 'auditado', 3, 'ejemplo', 'gerente');

-- --------------------------------------------------------

