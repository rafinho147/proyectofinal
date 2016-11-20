-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2016 a las 02:23:22
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
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `autor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `autor`) VALUES
(43, 'Franz Kafkann'),
(44, 'Franz Kafkann'),
(45, 'robert'),
(46, 'rafael castaÃ±eda'),
(47, 'ANGIE DIAZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor_libro`
--

CREATE TABLE `autor_libro` (
  `id_autor` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autor_libro`
--

INSERT INTO `autor_libro` (`id_autor`, `id_libro`) VALUES
(46, 78),
(47, 79);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(37, 'ADMINISTRACION'),
(38, 'AERONAUTICA'),
(39, 'AJEDREZ'),
(40, 'ALBAÑILERIA'),
(41, 'AMOR Y PAREJA'),
(42, 'ANTROPOLOGIA'),
(43, 'APRENDIZAJE'),
(44, 'APRENDIZAJE MUSICAL'),
(45, 'ACHIVISTICA'),
(46, 'ARMAS Y BALISTICA'),
(47, 'ARQUITECTURA'),
(48, 'ARTE'),
(49, 'ARTES MARCIALES'),
(50, 'ASTRONOMIA'),
(51, 'AUDITORIA'),
(52, 'BELLEZA'),
(53, 'BIOLOGIA'),
(54, 'BOTANICA'),
(55, 'CARPINTERIA'),
(56, 'COCINA'),
(57, 'COMUNICACION'),
(58, 'CONTABILIDAD'),
(59, 'COSMETOLOGIA'),
(60, 'DEPORTES Y ENTRENAMIENTO'),
(61, 'DERECHO'),
(62, 'DESARROLLO PERSONAL'),
(63, 'DISEÑO INDUSTRIAL'),
(64, 'ECOLOGIA'),
(65, 'ECONOMIA'),
(66, 'ELECTRICIDAD'),
(67, 'ELECTRONICA'),
(68, 'EFERMERIA'),
(69, 'ETICA'),
(70, 'FILOSOFIA'),
(71, 'FINANZAS'),
(72, 'FISICA'),
(73, 'FISIOTERAPEUTA'),
(74, 'FOTOGRAFIA'),
(75, 'GEOLOGIA'),
(76, 'HACKING Y CRACKING'),
(77, 'HERRERIA Y FUNDICION'),
(78, 'HIDRAULICA'),
(79, 'HISTORIA'),
(80, 'HUMOR'),
(81, 'INFANTIL'),
(82, 'INFORMATICA'),
(83, 'INGENIERIA AMBIENTAL'),
(84, 'INGENIERIA CIVIL'),
(85, 'INGENIERIA MECANICA'),
(86, 'INTERNET'),
(87, 'JARDINERIA'),
(88, 'JOYERIA'),
(89, 'LIBROS SENSORADOS'),
(90, 'LINGUISTICA'),
(91, 'LITERATURA'),
(92, 'MANUALES Y TUTORIALES'),
(93, 'MASCOTAS'),
(94, 'MATEMATICAS'),
(95, 'MEDICINA'),
(96, 'MEDICINA ALTERNATIVA'),
(97, 'MERCADOTECNIA'),
(98, 'METODOLOGIA DE INVESTIGACION'),
(99, 'MINERIA'),
(100, 'MODA'),
(101, 'MODELISMO'),
(102, 'NEGOCIO Y EMPRESA'),
(103, 'NUTRICION'),
(104, 'ODONTOLOGIA'),
(105, 'OFICCE'),
(106, 'PEDAGOGIA'),
(107, 'PERIODISMO'),
(108, 'PESCA'),
(109, 'PINTURA Y DIBUJO'),
(110, 'POKER'),
(111, 'POLITICA'),
(112, 'PROGRAMACION'),
(113, 'PSICOLOGIA'),
(114, 'QUIMICA'),
(115, 'RELIGION'),
(116, 'ROBOTICA'),
(117, 'SALUD'),
(118, 'SEXUALIDAD'),
(119, 'SOCIOLOGIA'),
(120, 'SOFTWARE'),
(121, 'SOLDADURA'),
(122, 'TECNOLOGIA'),
(123, 'TURISMO'),
(124, 'VARIOS'),
(125, 'VENTAS'),
(126, 'VENTERINARIA'),
(127, 'VINOS Y SOMMELIERS'),
(128, 'TODAS LAS REVISTAS'),
(129, 'OTRAS CATEGORIAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `nombre_quien_comenta` varchar(100) NOT NULL,
  `id_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `id_idioma` int(11) NOT NULL,
  `idioma` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`id_idioma`, `idioma`) VALUES
(30, 'Español'),
(31, 'Ingles'),
(32, 'Frances'),
(33, 'Italiano'),
(34, 'Latin'),
(35, 'Griego'),
(36, 'Hebreo');

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
(78, 'tecnicas de jaque', 'foto123', '2013-12-09', 'www.gabo.com', 31, 39),
(79, 'EL ARTE DE LA ETERNA JUVENTUD', 'ARTE.COM', '2013-12-12', 'www.google.com.co', 34, 52);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`) VALUES
(1, 'rafinho147', '73610053468f3a52186ead7db4d00d9b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `autor_libro`
--
ALTER TABLE `autor_libro`
  ADD UNIQUE KEY `id_libro_2` (`id_libro`),
  ADD UNIQUE KEY `id_autor_2` (`id_autor`),
  ADD KEY `id_libro` (`id_libro`),
  ADD KEY `id_autor` (`id_autor`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_libro` (`id_libro`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id_idioma`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `id_idioma` (`id_idioma`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id_idioma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autor_libro`
--
ALTER TABLE `autor_libro`
  ADD CONSTRAINT `autor_libro_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`);


--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para autor
--

--
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'biblioteca', 'autor', '[]', '2016-11-08 19:36:12');

--
-- Metadatos para autor_libro
--

--
-- Metadatos para categoria
--

--
-- Metadatos para comentario
--

--
-- Metadatos para idioma
--

--
-- Metadatos para libro
--

--
-- Metadatos para usuario
--

--
-- Metadatos para biblioteca
--

--
-- Volcado de datos para la tabla `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('biblioteca', 'autor', 'id_autor', 'biblioteca', 'autor_libro', 'id_autor'),
('biblioteca', 'autor_libro', 'id_autor', 'biblioteca', 'autor', 'id_autor'),
('biblioteca', 'autor_libro', 'id_libro', 'biblioteca', 'libro', 'id_libro'),
('biblioteca', 'libro', 'id_categoria', 'biblioteca', 'categoria', 'id_categoria'),
('biblioteca', 'libro', 'id_idioma', 'biblioteca', 'idioma', 'id_idioma');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
