-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
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


-- Dumping database structure for favorit
CREATE DATABASE IF NOT EXISTS `favorit` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `favorit`;

-- Dumping structure for table favorit.tb_boomark
CREATE TABLE IF NOT EXISTS `tb_boomark` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_film` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Film` (`id_film`),
  KEY `FK_user` (`id_user`),
  CONSTRAINT `Film` FOREIGN KEY (`id_film`) REFERENCES `tb_film` (`id`),
  CONSTRAINT `FK_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table favorit.tb_boomark: ~0 rows (approximately)

-- Dumping structure for table favorit.tb_film
CREATE TABLE IF NOT EXISTS `tb_film` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Judul` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Id_produser` int NOT NULL DEFAULT '0',
  `thn_terbit` int NOT NULL DEFAULT '0',
  `Sinopsis` varchar(200) NOT NULL DEFAULT '0',
  `Status` varchar(20) NOT NULL DEFAULT '0',
  `filefilm` varchar(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `Id_produser` (`Id_produser`),
  CONSTRAINT `tb_produser` FOREIGN KEY (`Id_produser`) REFERENCES `tb_produser` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table favorit.tb_film: ~0 rows (approximately)

-- Dumping structure for table favorit.tb_film_genre
CREATE TABLE IF NOT EXISTS `tb_film_genre` (
  `Id__film` int NOT NULL,
  `Id_genre` int NOT NULL,
  KEY `FK_genre` (`Id_genre`),
  KEY `FK_film` (`Id__film`),
  CONSTRAINT `FK_film` FOREIGN KEY (`Id__film`) REFERENCES `tb_film` (`id`),
  CONSTRAINT `FK_genre` FOREIGN KEY (`Id_genre`) REFERENCES `tb_genre` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table favorit.tb_film_genre: ~0 rows (approximately)

-- Dumping structure for table favorit.tb_genre
CREATE TABLE IF NOT EXISTS `tb_genre` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table favorit.tb_genre: ~0 rows (approximately)

-- Dumping structure for table favorit.tb_produser
CREATE TABLE IF NOT EXISTS `tb_produser` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table favorit.tb_produser: ~0 rows (approximately)

-- Dumping structure for table favorit.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `pw` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table favorit.tb_user: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
