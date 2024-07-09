-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-07-2024 a las 20:28:47
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_Categoria` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(254) COLLATE utf8mb4_es_trad_0900_as_cs NOT NULL,
  PRIMARY KEY (`id_Categoria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_es_trad_0900_as_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_Empresa` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(254) COLLATE utf8mb4_es_trad_0900_as_cs NOT NULL,
  PRIMARY KEY (`id_Empresa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_es_trad_0900_as_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

DROP TABLE IF EXISTS `juego`;
CREATE TABLE IF NOT EXISTS `juego` (
  `id_Juego` int NOT NULL AUTO_INCREMENT,
  `id_Tipo_Juego` int NOT NULL,
  `nombre` varchar(254) COLLATE utf8mb4_es_trad_0900_as_cs NOT NULL,
  `empresa` int NOT NULL,
  `categoria` int NOT NULL,
  `fecha_salida` date NOT NULL,
  `descripcion` varchar(254) COLLATE utf8mb4_es_trad_0900_as_cs NOT NULL,
  `plataforma` int NOT NULL,
  `critica` varchar(254) COLLATE utf8mb4_es_trad_0900_as_cs NOT NULL,
  `puntaje_1` int NOT NULL,
  `puntaje_2` int NOT NULL,
  `puntaje_3` int NOT NULL,
  `puntaje_4` int NOT NULL,
  `puntaje_5` int NOT NULL,
  `puntaje_6` int NOT NULL,
  `puntaje_General` int NOT NULL,
  PRIMARY KEY (`id_Juego`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_es_trad_0900_as_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma`
--

DROP TABLE IF EXISTS `plataforma`;
CREATE TABLE IF NOT EXISTS `plataforma` (
  `id_Categoria` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(254) COLLATE utf8mb4_es_trad_0900_as_cs NOT NULL,
  PRIMARY KEY (`id_Categoria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_es_trad_0900_as_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_juego`
--

DROP TABLE IF EXISTS `tipo_juego`;
CREATE TABLE IF NOT EXISTS `tipo_juego` (
  `id_Tipo_Juego` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(254) COLLATE utf8mb4_es_trad_0900_as_cs NOT NULL,
  PRIMARY KEY (`id_Tipo_Juego`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_es_trad_0900_as_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_Tipo_Usuario` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(254) COLLATE utf8mb4_es_trad_0900_as_cs NOT NULL,
  PRIMARY KEY (`id_Tipo_Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_es_trad_0900_as_cs;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_Usuario` int NOT NULL AUTO_INCREMENT,
  `tipo` int DEFAULT NULL,
  `nombre` varchar(254) COLLATE utf8mb4_es_trad_0900_as_cs DEFAULT NULL,
  `contraseña` varchar(254) COLLATE utf8mb4_es_trad_0900_as_cs DEFAULT NULL,
  PRIMARY KEY (`id_Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_es_trad_0900_as_cs;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
