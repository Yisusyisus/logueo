-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2018 a las 20:13:13
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logueo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`name`, `password`, `id`) VALUES
('paul dali', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0),
('aldo', 'b104ab9a0e58c861b9628208b3fecd58', 0),
('aldo', 'b104ab9a0e58c861b9628208b3fecd58', 0),
('aldo', 'b104ab9a0e58c861b9628208b3fecd58', 0),
('aldo', 'b104ab9a0e58c861b9628208b3fecd58', 0),
('aldo', 'b104ab9a0e58c861b9628208b3fecd58', 0),
('negger', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('fran', '806119540e45af1f044b7a827623d25f', 0),
('tony', 'ddc5f5e86d2f85e1b1ff763aff13ce0a', 0),
('isaias', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0),
('juan', '827ccb0eea8a706c4c34a16891f84e7b', 0),
('tony', 'ddc5f5e86d2f85e1b1ff763aff13ce0a', 0),
('jose', '827ccb0eea8a706c4c34a16891f84e7b', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
