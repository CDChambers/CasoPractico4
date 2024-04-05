-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-04-2024 a las 02:59:04
-- Versión del servidor: 8.2.0
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dulces`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dulces`
--

DROP TABLE IF EXISTS `dulces`;
CREATE TABLE IF NOT EXISTS `dulces` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Imagen` varchar(120) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `Nombre` varchar(60) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `Descripcion` varchar(200) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `Origen` varchar(60) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
