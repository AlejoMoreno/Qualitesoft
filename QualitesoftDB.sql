-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 18-04-2015 a las 14:05:39
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `ingenium`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `auditoriagacf1102a`
-- 

CREATE TABLE `auditoriagacf1102a` (
  `id_auditoria` int(11) NOT NULL auto_increment,
  `id_usuario` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `confirmadofecha` date NOT NULL,
  `horainicio` datetime NOT NULL,
  `horafinal` datetime NOT NULL,
  `objetivo` varchar(700) NOT NULL,
  `alcance` varchar(700) NOT NULL,
  `criterio` varchar(700) NOT NULL,
  `Actividades` varchar(700) NOT NULL,
  `vistobueno` int(11) NOT NULL,
  `usuario_auditor` int(11) NOT NULL,
  PRIMARY KEY  (`id_auditoria`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_empresa` (`id_empresa`),
  KEY `usuario_auditor` (`usuario_auditor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `auditoriagacf1102a`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `criterio`
-- 

CREATE TABLE `criterio` (
  `id_criterio` int(11) NOT NULL auto_increment,
  `nombre` varchar(700) NOT NULL,
  `referenciaRequerimiento` varchar(700) NOT NULL,
  PRIMARY KEY  (`id_criterio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `criterio`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cronogramagacf1100_1`
-- 

CREATE TABLE `cronogramagacf1100_1` (
  `id_cronograma` int(11) NOT NULL auto_increment,
  `año` varchar(100) NOT NULL,
  `id_auditoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha_auditoria` date NOT NULL,
  `proceso` int(11) NOT NULL,
  `aprovado` varchar(100) NOT NULL,
  `enviado` varchar(100) NOT NULL,
  `fechaconfirmado` date NOT NULL,
  PRIMARY KEY  (`id_cronograma`),
  KEY `id_auditoria` (`id_auditoria`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_empresa` (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `cronogramagacf1100_1`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cumplimientos`
-- 

CREATE TABLE `cumplimientos` (
  `id_cumplimiento` int(11) NOT NULL auto_increment,
  `nombre` varchar(700) NOT NULL,
  PRIMARY KEY  (`id_cumplimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `cumplimientos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `dependenciavertical`
-- 

CREATE TABLE `dependenciavertical` (
  `id_dependenciaVertical` int(11) NOT NULL auto_increment,
  `nombre` varchar(700) NOT NULL,
  PRIMARY KEY  (`id_dependenciaVertical`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `dependenciavertical`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `empresas`
-- 

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL auto_increment,
  `razonsocial` varchar(700) NOT NULL,
  `id_dependenciaVertical` int(11) NOT NULL,
  `id_proceso` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `rut` varchar(1000) NOT NULL,
  `urlCamaraComercio` varchar(1000) NOT NULL,
  `urlRut` varchar(1000) NOT NULL,
  `urlCDF` varchar(1000) NOT NULL,
  `urlWebSite` varchar(1000) NOT NULL,
  PRIMARY KEY  (`id_empresa`),
  KEY `id_dependenciaVertical` (`id_dependenciaVertical`),
  KEY `id_proceso` (`id_proceso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `empresas`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `formularios`
-- 

CREATE TABLE `formularios` (
  `id_formulario` int(11) NOT NULL auto_increment,
  `titulo` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `revision` varchar(100) NOT NULL,
  `subtitulo` varchar(700) NOT NULL,
  `fecha` date NOT NULL,
  `id_item` int(11) NOT NULL,
  `id_auditoria` int(11) NOT NULL,
  `aceptado` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id_formulario`),
  KEY `id_item` (`id_item`),
  KEY `id_auditoria` (`id_auditoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `formularios`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `historial`
-- 

CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `url` varchar(700) NOT NULL,
  PRIMARY KEY  (`id_historial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `historial`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `informe`
-- 

CREATE TABLE `informe` (
  `id_informe` int(11) NOT NULL auto_increment,
  `id_auditoria` int(11) NOT NULL,
  `fecha_informe` date NOT NULL,
  `fecha_auditoria` date NOT NULL,
  `id_proceso` int(11) NOT NULL,
  `criterio` varchar(700) NOT NULL,
  `seguimiento` varchar(700) NOT NULL,
  `aspectosFavorables` varchar(700) NOT NULL,
  `resultados` varchar(700) NOT NULL,
  `id_NC` int(11) NOT NULL,
  PRIMARY KEY  (`id_informe`),
  KEY `id_auditoria` (`id_auditoria`),
  KEY `id_proceso` (`id_proceso`),
  KEY `id_NC` (`id_NC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `informe`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `items`
-- 

CREATE TABLE `items` (
  `id_item` int(11) NOT NULL auto_increment,
  `id_referencia` int(11) NOT NULL,
  `requerimiento` varchar(1000) NOT NULL,
  `id_cumplimiento` int(11) NOT NULL,
  `observaciones` varchar(2000) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  PRIMARY KEY  (`id_item`),
  KEY `id_referencia` (`id_referencia`),
  KEY `id_cumplimiento` (`id_cumplimiento`),
  KEY `id_tipo` (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `items`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `nc`
-- 

CREATE TABLE `nc` (
  `id_NC` int(11) NOT NULL auto_increment,
  `id_auditoria` int(11) NOT NULL,
  `id_criterio` int(11) NOT NULL,
  `descripcion` varchar(700) NOT NULL,
  `categoria` varchar(700) NOT NULL,
  PRIMARY KEY  (`id_NC`),
  KEY `id_auditoria` (`id_auditoria`),
  KEY `id_criterio` (`id_criterio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `nc`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `procesos`
-- 

CREATE TABLE `procesos` (
  `id_proceso` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_proceso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `procesos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `referencias`
-- 

CREATE TABLE `referencias` (
  `id_referencia` int(11) NOT NULL auto_increment,
  `nombre` varchar(700) NOT NULL,
  PRIMARY KEY  (`id_referencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `referencias`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `regauditoria`
-- 

CREATE TABLE `regauditoria` (
  `id_regAuditoria` int(11) NOT NULL auto_increment,
  `id_auditoria` int(11) NOT NULL,
  `fecha_auditoria` date NOT NULL,
  `tipo_auditoria` varchar(700) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_auditado` int(11) NOT NULL,
  `aceptado` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id_regAuditoria`),
  KEY `id_auditoria` (`id_auditoria`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_auditado` (`id_auditado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `regauditoria`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tipos_programas`
-- 

CREATE TABLE `tipos_programas` (
  `id_tipo_programa` int(11) NOT NULL auto_increment,
  `nombre` varchar(700) NOT NULL,
  PRIMARY KEY  (`id_tipo_programa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tipos_programas`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `type`
-- 

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) NOT NULL,
  `permisos` int(11) NOT NULL,
  PRIMARY KEY  (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `type`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `id_type` int(11) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_usuario`),
  KEY `id_type` (`id_type`),
  KEY `id_empresa` (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 


-- 
-- Filtros para las tablas descargadas (dump)
-- 

-- 
-- Filtros para la tabla `auditoriagacf1102a`
-- 
ALTER TABLE `auditoriagacf1102a`
  ADD CONSTRAINT `auditoriagacf1102a_ibfk_10` FOREIGN KEY (`usuario_auditor`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auditoriagacf1102a_ibfk_8` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auditoriagacf1102a_ibfk_9` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Filtros para la tabla `cronogramagacf1100_1`
-- 
ALTER TABLE `cronogramagacf1100_1`
  ADD CONSTRAINT `cronogramagacf1100_1_ibfk_1` FOREIGN KEY (`id_auditoria`) REFERENCES `auditoriagacf1102a` (`id_auditoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cronogramagacf1100_1_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cronogramagacf1100_1_ibfk_3` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Filtros para la tabla `empresas`
-- 
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`id_dependenciaVertical`) REFERENCES `dependenciavertical` (`id_dependenciaVertical`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `empresas_ibfk_2` FOREIGN KEY (`id_proceso`) REFERENCES `procesos` (`id_proceso`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Filtros para la tabla `formularios`
-- 
ALTER TABLE `formularios`
  ADD CONSTRAINT `formularios_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `items` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formularios_ibfk_2` FOREIGN KEY (`id_auditoria`) REFERENCES `auditoriagacf1102a` (`id_auditoria`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Filtros para la tabla `informe`
-- 
ALTER TABLE `informe`
  ADD CONSTRAINT `informe_ibfk_3` FOREIGN KEY (`id_NC`) REFERENCES `nc` (`id_NC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `informe_ibfk_1` FOREIGN KEY (`id_auditoria`) REFERENCES `auditoriagacf1102a` (`id_auditoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `informe_ibfk_2` FOREIGN KEY (`id_proceso`) REFERENCES `procesos` (`id_proceso`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Filtros para la tabla `items`
-- 
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`id_referencia`) REFERENCES `referencias` (`id_referencia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`id_cumplimiento`) REFERENCES `cumplimientos` (`id_cumplimiento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `items_ibfk_3` FOREIGN KEY (`id_tipo`) REFERENCES `tipos_programas` (`id_tipo_programa`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Filtros para la tabla `nc`
-- 
ALTER TABLE `nc`
  ADD CONSTRAINT `nc_ibfk_2` FOREIGN KEY (`id_criterio`) REFERENCES `criterio` (`id_criterio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nc_ibfk_1` FOREIGN KEY (`id_auditoria`) REFERENCES `auditoriagacf1102a` (`id_auditoria`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Filtros para la tabla `regauditoria`
-- 
ALTER TABLE `regauditoria`
  ADD CONSTRAINT `regauditoria_ibfk_3` FOREIGN KEY (`id_auditado`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `regauditoria_ibfk_1` FOREIGN KEY (`id_auditoria`) REFERENCES `auditoriagacf1102a` (`id_auditoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `regauditoria_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Filtros para la tabla `usuarios`
-- 
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;
