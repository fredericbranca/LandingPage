-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour landingpage
CREATE DATABASE IF NOT EXISTS `landingpage` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `landingpage`;

-- Listage de la structure de table landingpage. email
CREATE TABLE IF NOT EXISTS `email` (
  `id_email` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Listage des données de la table landingpage.email : ~4 rows (environ)
INSERT INTO `email` (`id_email`, `email`) VALUES
	(1, 'test@gmail.com'),
	(2, 'test2@gmail.com'),
	(3, 'gregher@mail.com'),
	(4, 'email@email.fr'),
	(5, 'gre@gre.fr');

-- Listage de la structure de table landingpage. pricing
CREATE TABLE IF NOT EXISTS `pricing` (
  `id_pricing` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `sale` int NOT NULL,
  `bandwidth` int NOT NULL,
  `onlineSpace` float NOT NULL,
  `support` tinyint NOT NULL,
  `domain` varchar(50) NOT NULL,
  `hiddenFees` tinyint NOT NULL,
  `compteur` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pricing`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Listage des données de la table landingpage.pricing : ~3 rows (environ)
INSERT INTO `pricing` (`id_pricing`, `name`, `price`, `sale`, `bandwidth`, `onlineSpace`, `support`, `domain`, `hiddenFees`, `compteur`) VALUES
	(1, 'Started', 9, 0, 1, 0.5, 0, '1', 0, 91),
	(2, 'Advanced', 19, 20, 2, 1, 1, '3', 0, 63),
	(3, 'Professional', 29, 0, 3, 2, 1, 'Unlimited', 0, 19);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
