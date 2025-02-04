-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.32-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных site_info
CREATE DATABASE IF NOT EXISTS `site_info` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `site_info`;

-- Дамп структуры для таблица site_info.authorinfo
CREATE TABLE IF NOT EXISTS `authorinfo` (
  `authorID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `authorAge` varchar(50) DEFAULT NULL,
  `authorCity` varchar(50) DEFAULT NULL,
  `authorStudy` text DEFAULT NULL,
  `authorInterests` text DEFAULT NULL,
  `authorHobby` text DEFAULT NULL,
  `authorC#` int(10) unsigned NOT NULL DEFAULT 0,
  `authorPython` int(10) unsigned NOT NULL DEFAULT 0,
  `authorVSCode` int(10) unsigned NOT NULL DEFAULT 0,
  `cityAndYear` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`authorID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Дамп данных таблицы site_info.authorinfo: ~1 rows (приблизительно)
INSERT INTO `authorinfo` (`authorID`, `authorAge`, `authorCity`, `authorStudy`, `authorInterests`, `authorHobby`, `authorC#`, `authorPython`, `authorVSCode`, `cityAndYear`) VALUES
	(1, '18 лет', 'г. Шахтерск', 'ДонАУиГС, кафедра прикладной информатики, 2 курс', 'компьютерная тематика', 'рисование и монтаж видео', 30, 60, 50, 'г. Шахтерск, 2025г.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
