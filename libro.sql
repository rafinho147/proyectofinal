-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2016 a las 18:18:56
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(11) NOT NULL,
  `libro` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `link` varchar(255) NOT NULL,
  `id_idioma` int(255) NOT NULL,
  `id_categoria` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `libro`, `foto`, `fecha`, `link`, `id_idioma`, `id_categoria`) VALUES
(136, 'Negocios Internacionales', 'https://i2.wp.com/loslibrosquenecesitogratis.com/wp-content/uploads/2016/05/3-2.jpg?resize=200%2C238', '2013-12-09', 'https://mega.nz/#!qpdWGS5C!KaFVW3SCYPuev8GZY6u2ic0y1-BPvPgAOyoWl7DGiuY', 30, 37),
(137, 'conocimientos de Avion', 'https://i1.wp.com/loslibrosquenecesitogratis.com/wp-content/uploads/2015/02/49e4d5e19ce7becf944579cd', '2013-12-09', 'http://bc.vc/7blyh7', 30, 37);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `id_idioma` (`id_idioma`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para libro
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
