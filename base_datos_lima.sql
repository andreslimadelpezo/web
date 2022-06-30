-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla web.estudiantes
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `est_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_nombres` varchar(50) DEFAULT NULL,
  `est_apellidos` varchar(50) DEFAULT NULL,
  `est_edad` int(11) DEFAULT NULL,
  `est_ciudad` varchar(50) DEFAULT NULL,
  `est_cedula` varchar(50) DEFAULT NULL,
  `est_genero` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`est_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla web.estudiantes: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` (`est_id`, `est_nombres`, `est_apellidos`, `est_edad`, `est_ciudad`, `est_cedula`, `est_genero`) VALUES
	(23, 'V DFGD', ' GDFG', 5646456, ' DFDD', 'FDF', 'iuiuiu');
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;

-- Volcando estructura para tabla web.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nombres` varchar(50) DEFAULT NULL,
  `usu_apellidos` varchar(50) DEFAULT NULL,
  `usu_edad` int(11) DEFAULT NULL,
  `usu_ciudad` varchar(50) DEFAULT NULL,
  `usu_cedula` varchar(50) DEFAULT NULL,
  `usu_genero` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla web.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`usu_id`, `usu_nombres`, `usu_apellidos`, `usu_edad`, `usu_ciudad`, `usu_cedula`, `usu_genero`) VALUES
	(5, 'VH', 'TH', 100, 'VRHT', '10', 'uiuiuiuuiuiuiu');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
