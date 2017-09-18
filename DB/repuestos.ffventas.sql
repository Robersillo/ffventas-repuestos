-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-09-2017 a las 16:01:41
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `repuestos.ffventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_repuestos`
--

CREATE TABLE IF NOT EXISTS `informacion_repuestos` (
  `codigo` varchar(45) NOT NULL DEFAULT '',
  `tipo_repuesto` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `modelos` varchar(45) DEFAULT NULL,
  `ano` varchar(45) DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `costo_dolar` decimal(10,2) DEFAULT NULL,
  `informacion_repuestoscol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informacion_repuestos`
--

INSERT INTO `informacion_repuestos` (`codigo`, `tipo_repuesto`, `marca`, `modelos`, `ano`, `cantidad`, `costo_dolar`, `informacion_repuestoscol`) VALUES
('76527', 'Kit de tiempo - CADENA', 'Toyota', 'Samuray-Machito 4.5 (6comp.)', 'Todos', '5', '27.69', NULL),
('TK-110', 'Kit de tiempo', 'Chevrolet', 'Corsa 1.4 & 1.6', 'Todos', '10', '13.06', NULL),
('TK-112', 'Kit de tiempo', 'Chevrolet', 'Spark 1.0 & 1.2', '2003-2009', '10', '15.88', NULL),
('TK-115', 'Kit de tiempo', 'Chevrolet', 'Aveo 1.6', 'Todos', '30', '21.56', NULL),
('TK-120', 'Kit de tiempo', 'Chevrolet', 'Optra 1.8 Limited', '2004-2010', '20', '31.18', NULL),
('TK-122', 'Kit de tiempo', 'Chevrolet', 'Optra 1.8 Desin', '2004-2010', '20', '37.95', NULL),
('TK-133', 'Kit de tiempo', 'Chevrolet', 'Luv 2.2', '2001-2010', '2', '36.78', NULL),
('TK-135', 'Kit de tiempo', 'Chevrolet', 'D-Max 3.5 Lt', '1998-2004', '6', '60.59', NULL),
('TK-202', 'Kit de tiempo', 'Ford', 'Fiesta 1.6 SOCH', '2011-2014', '5', '20.96', NULL),
('TK-245-2', 'Kit de tiempo', 'Chrysler', 'Civic 1.6 (D16Y7)', '1996-2000', '5', '16.53', NULL),
('TK-263', 'Kit de tiempo', 'Hyunday ', 'Lancer 1.3 & 1.5', '1991-1996', '10', '12.52', NULL),
('TK-292', 'Kit de tiempo', 'Honda', 'Lancer Touring 2.0', '2002-2007', '10', '19.88', NULL),
('TK-302', 'Kit de tiempo', 'Mitsubishi', 'Neon 2.0', '1999-2005', '5', '27.26', NULL),
('TK-313', 'Kit de tiempo', 'Mitsubishi', 'Accent, Getz 1.6', '1996-2011', '10', '19.38', NULL),
('TK-314', 'Kit de tiempo', 'Mitsubishi', 'Signo 1.5', '1997-2002', '10', '18.69', NULL),
('TK-364', 'Kit de tiempo', 'Toyota', 'Corolla 1.6', '1995-2002', '10', '13.94', NULL),
('TK-366', 'Kit de tiempo', 'Toyota', 'Corolla 1.8', '1994-2002', '10', '15.51', NULL),
('TK-370', 'Kit de tiempo', 'Toyota', 'Camry 2.2', '1992-2001', '5', '32.04', NULL),
('TK-404', 'Kit de tiempo', 'Renault', 'Twingo 1.2 8 Valvulas', 'Todos', '5', '11.20', NULL),
('TK-407', 'Kit de tiempo', 'Renault', 'Twingo 1.2 16 Valvulas', 'Todos', '5', '23.01', NULL),
('TK-601', 'Kit de tiempo', 'Fiat', 'Palio, Adventure 1.6', '2003-2007', '5', '21.71', NULL),
('TK-603', 'Kit de tiempo', 'Fiat', 'Palio, Siena 1.3 8 Valvulas', '1998-2004', '5', '10.92', NULL),
('TK-604', 'Kit de tiempo', 'Fiat', 'Palio, Siena, Stilo, Idea 1.8', '2005-2008', '5', '14.82', NULL),
('TK-730', 'Kit de tiempo', 'Mitsubishi', 'Lancer 1.6', '2002-2014', '10', '14.78', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
