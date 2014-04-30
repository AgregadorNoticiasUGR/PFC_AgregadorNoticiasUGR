-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2014 a las 13:12:14
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `enlaces_ugr_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `cod_administrador` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) COLLATE utf8_bin NOT NULL,
  `pass` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cod_administrador`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `cod_administrador` (`cod_administrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`cod_administrador`, `user`, `pass`) VALUES
(2, 'pepe', 'pepe'),
(5, 'jose', 'jose');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `cod_categoria` int(30) NOT NULL AUTO_INCREMENT,
  `nom_categoria` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cod_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cod_categoria`, `nom_categoria`) VALUES
(1, 'Secretarías'),
(2, 'Facultades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enlace`
--

CREATE TABLE IF NOT EXISTS `enlace` (
  `cod_enlace` int(20) NOT NULL AUTO_INCREMENT,
  `url` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cod_enlace`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `enlace`
--

INSERT INTO `enlace` (`cod_enlace`, `url`, `descripcion`) VALUES
(1, 'url enlace 1', 'asasaasa enlace 1'),
(2, 'url enlace 2', 'ksksksks enlace 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pertenece`
--

CREATE TABLE IF NOT EXISTS `pertenece` (
  `cod_categoria` int(11) NOT NULL,
  `cod_enlace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pertenece`
--

INSERT INTO `pertenece` (`cod_categoria`, `cod_enlace`) VALUES
(1, 1),
(1, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
