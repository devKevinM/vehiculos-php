-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2022 a las 03:55:15
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vehiculos`
--
CREATE DATABASE IF NOT EXISTS `vehiculos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `vehiculos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

DROP TABLE IF EXISTS `vehiculo`;
CREATE TABLE IF NOT EXISTS `vehiculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `version` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `num_puestos` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `num_puertas` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `combustible` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `kilometros` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cilindraje` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
