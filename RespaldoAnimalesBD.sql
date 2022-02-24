-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.7.1-MariaDB-1:10.7.1+maria~focal - mariadb.org binary distribution
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para Animales
CREATE DATABASE IF NOT EXISTS `Animales` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `Animales`;

-- Volcando estructura para tabla Animales.Gatos
CREATE TABLE IF NOT EXISTS `Gatos` (
  `id_gato` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `raza` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_gato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla Animales.Gatos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `Gatos` DISABLE KEYS */;
INSERT INTO `Gatos` (`id_gato`, `nombre`, `edad`, `raza`) VALUES
	(125, 'Miauricio', 1, 'Siames'),
	(126, 'Pescado', 5, 'MaineCoon'),
	(127, 'Cereal', 8, 'GatoPersa');
/*!40000 ALTER TABLE `Gatos` ENABLE KEYS */;

-- Volcando estructura para tabla Animales.Perros
CREATE TABLE IF NOT EXISTS `Perros` (
  `id_perro` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `raza` varchar(50) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_perro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla Animales.Perros: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `Perros` DISABLE KEYS */;
INSERT INTO `Perros` (`id_perro`, `nombre`, `raza`, `edad`) VALUES
	(225, 'Pit', 'Pug', 8),
	(226, 'Bololo', 'Golden_Retriever', 15),
	(227, 'Killer', 'Chihuahua', 2),
	(228, 'Pelk', 'Beagle', 2);
/*!40000 ALTER TABLE `Perros` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
