-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.6-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para blog_practica
CREATE DATABASE IF NOT EXISTS `blog_practica` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `blog_practica`;

-- Volcando estructura para tabla blog_practica.articulos
CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) NOT NULL,
  `extracto` varchar(500) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `texto` text NOT NULL,
  `thumb` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla blog_practica.articulos: ~4 rows (aproximadamente)
DELETE FROM `articulos`;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`) VALUES
	(1, '1111', 'prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1', '2020-06-25 17:24:15', ' prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prue 1 prueba 1', 'qwee.png'),
	(2, '2222', 'prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1', '2020-06-25 17:22:52', ' prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1', '2.png'),
	(3, 'noticia 3', ' prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  ', '2020-06-23 17:09:33', ' prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1', '3.png'),
	(4, 'noticia 4', ' prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  ', '2020-06-23 17:09:36', ' prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1  prueba 1 prueba 1', '4.png');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
