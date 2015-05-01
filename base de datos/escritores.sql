-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-05-2015 a las 00:01:42
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `escritores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escritor`
--

CREATE TABLE IF NOT EXISTS `escritor` (
  `id_escritor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido_paterno` varchar(45) NOT NULL,
  `apellido_materno` varchar(45) NOT NULL,
  `edad` int(11) NOT NULL,
  PRIMARY KEY (`id_escritor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `escritor`
--

INSERT INTO `escritor` (`id_escritor`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`) VALUES
(6, 'GABRIEL', 'GARCIA', 'MARQUEZ', 86),
(7, 'MARIO', 'VARGAS', 'LLOSA', 79),
(8, 'CARLOS', 'GARRIDO', 'CHALEN', 66),
(9, 'OSCAR', 'WILLS', 'WILDE', 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `nombreGenero` varchar(45) NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombreGenero`) VALUES
(7, 'NOVELA'),
(8, 'REALISMO MAGICO'),
(9, 'NOVELA HISTORICA'),
(10, 'NARRATIVA GOTICA'),
(11, 'LITERATURA INFANTIL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE IF NOT EXISTS `libro` (
  `id_libro` int(11) NOT NULL AUTO_INCREMENT,
  `id_escritor` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `noPaginas` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_libro`),
  KEY `fk_Libro_Escritor_idx` (`id_escritor`),
  KEY `fk_Libro_genero1_idx` (`id_genero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `id_escritor`, `id_genero`, `noPaginas`, `titulo`) VALUES
(1, 6, 7, 106, 'CRONICA DE UNA MUERTE ANUNCIADA'),
(2, 6, 7, 576, 'VIVIR PARA CONTARLA'),
(3, 6, 8, 490, 'EL AMOR EN LOS TIEMPOS DEL COLERA'),
(4, 7, 7, 300, 'LA FIESTA DEL CHIVO'),
(5, 7, 9, 410, 'EL PARAISO EN LA NOTRA ESQUINA'),
(6, 9, 10, 255, 'EL RETRATO DE DORIAN GRAY'),
(7, 9, 11, 40, 'EL PRINCIPE FELIZ Y OTROS CUENTOS'),
(8, 6, 7, 271, 'EL OTOñO DEL PATRIARCA');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `fk_Libro_Escritor` FOREIGN KEY (`id_escritor`) REFERENCES `escritor` (`id_escritor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Libro_genero1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
