-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para cjn_ticket
CREATE DATABASE IF NOT EXISTS `cjn_ticket` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `cjn_ticket`;

-- Volcando estructura para tabla cjn_ticket.area
CREATE TABLE IF NOT EXISTS `area` (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `nom_area` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla cjn_ticket.area: ~2 rows (aproximadamente)
INSERT INTO `area` (`id_area`, `nom_area`) VALUES
	(1, 'sistemas'),
	(2, 'comercial');

-- Volcando estructura para tabla cjn_ticket.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla cjn_ticket.categoria: ~3 rows (aproximadamente)
INSERT INTO `categoria` (`id_cat`, `nom_cat`) VALUES
	(1, 'incidencia'),
	(2, 'solped'),
	(3, 'problema');

-- Volcando estructura para tabla cjn_ticket.estado
CREATE TABLE IF NOT EXISTS `estado` (
  `id_esta` int(11) NOT NULL AUTO_INCREMENT,
  `nom_esta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_esta`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla cjn_ticket.estado: ~4 rows (aproximadamente)
INSERT INTO `estado` (`id_esta`, `nom_esta`) VALUES
	(1, 'activo'),
	(2, 'cerrado'),
	(3, 'observado'),
	(4, 'pendiente');

-- Volcando estructura para tabla cjn_ticket.incidencia
CREATE TABLE IF NOT EXISTS `incidencia` (
  `id_inci` int(11) NOT NULL AUTO_INCREMENT,
  `nom_inci` varchar(150) CHARACTER SET utf32 COLLATE utf32_spanish_ci DEFAULT NULL,
  `email_inci` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_inci`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla cjn_ticket.incidencia: ~2 rows (aproximadamente)
INSERT INTO `incidencia` (`id_inci`, `nom_inci`, `email_inci`) VALUES
	(1, 'soporte', 'mesadeayudajn@sanpablo.com.pe'),
	(2, 'infraestructura', 'infraestructura@sanpablo.com.pe');

-- Volcando estructura para tabla cjn_ticket.piso
CREATE TABLE IF NOT EXISTS `piso` (
  `id_piso` int(11) NOT NULL AUTO_INCREMENT,
  `num_piso` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_piso`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla cjn_ticket.piso: ~10 rows (aproximadamente)
INSERT INTO `piso` (`id_piso`, `num_piso`) VALUES
	(1, '1'),
	(2, '2'),
	(3, '3'),
	(4, '4'),
	(5, '5'),
	(6, '6'),
	(7, 'uci'),
	(8, 'uci neo'),
	(9, 'sotano 1'),
	(10, 'sotano 2');

-- Volcando estructura para tabla cjn_ticket.prioridad
CREATE TABLE IF NOT EXISTS `prioridad` (
  `id_prio` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prio` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_prio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla cjn_ticket.prioridad: ~4 rows (aproximadamente)
INSERT INTO `prioridad` (`id_prio`, `nom_prio`) VALUES
	(1, 'baja'),
	(2, 'media'),
	(3, 'alta'),
	(4, 'urgente');

-- Volcando estructura para tabla cjn_ticket.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nom_rol` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla cjn_ticket.roles: ~2 rows (aproximadamente)
INSERT INTO `roles` (`id_rol`, `nom_rol`) VALUES
	(1, 'administrador'),
	(2, 'soporte');

-- Volcando estructura para tabla cjn_ticket.tecnico
CREATE TABLE IF NOT EXISTS `tecnico` (
  `id_tec` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tec` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass_tec` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tec`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `teccnico_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla cjn_ticket.tecnico: ~5 rows (aproximadamente)
INSERT INTO `tecnico` (`id_tec`, `nom_tec`, `pass_tec`, `id_rol`) VALUES
	(1, 'hanz', 'hanz', 2),
	(2, 'frederick', 'frederick', 2),
	(3, 'segundo', 'segundo', 2),
	(4, 'carlos', 'carlos', 2),
	(5, 'kevin', 'kevin', 1);

-- Volcando estructura para tabla cjn_ticket.ticket
CREATE TABLE IF NOT EXISTS `ticket` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `num_ticket` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descrip_ticket` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `img_ticket` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_usu` int(11) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `id_prio` int(11) DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `id_esta` int(11) DEFAULT 4,
  `id_tec` int(11) DEFAULT NULL,
  `id_piso` int(11) DEFAULT NULL,
  `capture_time` timestamp NULL DEFAULT NULL,
  `created_time` timestamp NULL DEFAULT current_timestamp(),
  `close_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT current_timestamp(),
  `observed_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ticket`),
  KEY `id_usu` (`id_usu`),
  KEY `id_tipo` (`id_tipo`),
  KEY `id_prio` (`id_prio`),
  KEY `id_cat` (`id_cat`),
  KEY `id_esta` (`id_esta`),
  KEY `id_tec` (`id_tec`),
  KEY `id_piso` (`id_piso`),
  CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`id_usu`),
  CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`),
  CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`id_prio`) REFERENCES `prioridad` (`id_prio`),
  CONSTRAINT `ticket_ibfk_4` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id_cat`),
  CONSTRAINT `ticket_ibfk_5` FOREIGN KEY (`id_esta`) REFERENCES `estado` (`id_esta`),
  CONSTRAINT `ticket_ibfk_6` FOREIGN KEY (`id_tec`) REFERENCES `tecnico` (`id_tec`),
  CONSTRAINT `ticket_ibfk_7` FOREIGN KEY (`id_piso`) REFERENCES `piso` (`id_piso`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla cjn_ticket.ticket: ~19 rows (aproximadamente)
INSERT INTO `ticket` (`id_ticket`, `num_ticket`, `descrip_ticket`, `img_ticket`, `id_usu`, `id_tipo`, `id_prio`, `id_cat`, `id_esta`, `id_tec`, `id_piso`, `capture_time`, `created_time`, `close_time`, `update_time`, `observed_time`) VALUES
	(1, 'T-0001', 'PRUEBA', NULL, 2, 1, 2, 2, 1, 2, 4, '2025-01-25 00:15:30', '2025-01-18 14:33:23', NULL, '2025-01-18 14:33:23', NULL),
	(2, 'T-0002', 'no prende pc', '', 6, 2, 1, 1, 1, 1, 2, NULL, '2025-01-18 22:16:54', NULL, '2025-01-18 22:16:54', NULL),
	(3, 'T-0003', 'prueba prueba', '', 6, 1, NULL, NULL, 1, NULL, 4, NULL, '2025-01-18 22:26:34', NULL, '2025-01-18 22:26:34', NULL),
	(4, 'T-0004', 'TEST 004', '', 6, 2, NULL, NULL, 1, NULL, 2, NULL, '2025-01-18 23:16:27', NULL, '2025-01-18 23:16:27', NULL),
	(5, 'T-0005', 'TESTE  05', '', 6, 3, NULL, NULL, 1, NULL, 3, NULL, '2025-01-18 23:21:52', NULL, '2025-01-18 23:21:52', NULL),
	(6, 'T-0006', 'chanchito', '', 6, 2, NULL, NULL, 1, NULL, 3, NULL, '2025-01-19 00:03:38', NULL, '2025-01-19 00:03:38', NULL),
	(7, 'T-0007', 'chanchicooooo', '', 6, 4, NULL, NULL, 1, NULL, 4, NULL, '2025-01-19 00:04:36', NULL, '2025-01-19 00:04:36', NULL),
	(8, 'T-0008', 'viviana', '', 6, 5, NULL, NULL, 1, NULL, 3, NULL, '2025-01-20 13:33:36', NULL, '2025-01-20 13:33:36', NULL),
	(9, 'T-0009', 'kevin', '', 2, 4, NULL, NULL, 1, NULL, 4, NULL, '2025-01-20 14:27:52', NULL, '2025-01-20 14:27:52', NULL),
	(10, 'T-00010', 'AIO de Emergencia Pediatrico con lineas en la pantalla y lenta para el procedimiento', '', 2, 2, NULL, NULL, 1, NULL, 1, NULL, '2025-01-20 14:40:49', NULL, '2025-01-20 14:40:49', NULL),
	(11, 'T-00011', 'holi ', '', 6, 8, NULL, NULL, 1, NULL, 3, NULL, '2025-01-20 17:33:10', NULL, '2025-01-20 17:33:10', NULL),
	(12, 'T-00012', 'sexio', '', 4, 9, NULL, NULL, 1, NULL, 7, NULL, '2025-01-21 20:10:39', NULL, '2025-01-21 20:10:39', NULL),
	(13, 'T-00013', 'sad', '', 2, 1, NULL, NULL, 1, NULL, 1, NULL, '2025-01-21 20:11:07', NULL, '2025-01-21 20:11:07', NULL),
	(14, 'T-00014', ',mczvxn bplñ', '', 2, 1, NULL, NULL, 1, NULL, 1, NULL, '2025-01-21 20:17:41', NULL, '2025-01-21 20:17:41', NULL),
	(15, 'T-00015', '65764', '', 6, 1, NULL, NULL, 1, NULL, 1, NULL, '2025-01-21 20:27:05', NULL, '2025-01-21 20:27:05', NULL),
	(16, 'T-00016', 'ktorresa', '', 2, 3, 1, 1, 4, 1, 6, NULL, '2025-01-22 21:05:00', NULL, '2025-01-22 21:05:00', NULL),
	(17, 'T-00017', 't', '', 6, 2, NULL, NULL, 4, NULL, 3, '2025-01-24 22:30:14', '2025-01-24 22:30:14', NULL, '2025-01-24 22:30:14', NULL),
	(18, 'T-00018', 'chakanica', '', 5, 1, NULL, NULL, 4, NULL, 6, '2025-01-24 23:48:46', '2025-01-24 23:48:46', NULL, '2025-01-24 23:48:46', NULL),
	(19, 'T-00019', 'dhasd', '', 4, 2, 1, 1, 1, 5, 1, '2025-01-28 22:05:22', '2025-01-25 00:10:29', NULL, '2025-01-25 00:10:29', NULL);

-- Volcando estructura para tabla cjn_ticket.tipo
CREATE TABLE IF NOT EXISTS `tipo` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tipo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla cjn_ticket.tipo: ~10 rows (aproximadamente)
INSERT INTO `tipo` (`id_tipo`, `nom_tipo`) VALUES
	(1, 'clinico'),
	(2, 'hardware'),
	(3, 'software'),
	(4, 'impresora laser'),
	(5, 'ticketera'),
	(6, 'matricial'),
	(7, 'impresora tinta'),
	(8, 'sap'),
	(9, 'red'),
	(10, 'correo');

-- Volcando estructura para tabla cjn_ticket.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `id_area` int(11) DEFAULT NULL,
  `nom_usu` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_usu` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_usu`),
  KEY `id_area` (`id_area`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla cjn_ticket.usuario: ~5 rows (aproximadamente)
INSERT INTO `usuario` (`id_usu`, `id_area`, `nom_usu`, `email_usu`, `created_time`, `update_time`) VALUES
	(2, 1, 'kevin', 'ktorresa@sanpablo.com.pe', '2025-01-13 16:43:52', '2025-01-13 16:43:52'),
	(3, 1, 'hanz', 'hharo@sanpablo.com.pe', '2025-01-14 00:08:54', '2025-01-14 00:08:54'),
	(4, 1, 'carlos', 'cflores@sanpablo.com.pe', '2025-01-14 00:09:14', '2025-01-14 00:09:14'),
	(5, 1, 'segundo', 'jsegundo@sanpablo.com.pe', '2025-01-14 00:09:32', '2025-01-14 00:09:32'),
	(6, 2, 'viviana', NULL, '2025-01-14 13:21:35', '2025-01-14 13:21:35');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
