-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2019 a las 16:31:02
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `final_ionic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `completar_mision`
--

CREATE TABLE `completar_mision` (
  `cod` int(4) NOT NULL,
  `idVacante` int(4) NOT NULL,
  `descMision` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_usu` int(3) NOT NULL,
  `imgMision` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `completar_mision`
--

INSERT INTO `completar_mision` (`cod`, `idVacante`, `descMision`, `foto`, `id_usu`, `imgMision`) VALUES
(0, 10, 'Prueba de envio', '../../Img/foto_mision/_DSC9713.jpg', 1, 'data:image/jpg;base64,');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(4) NOT NULL,
  `nameProveedor` varchar(50) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nameProveedor`, `logo`, `img`) VALUES
(27, 'Prueba', '../../Img/logo_prov/images (1).jpg', 'data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQSEhUUExQWFhUWGB0YGBgYGR0XHBofHB8aHBgbGBsfHSggHxwlGx8XITEhJSorLi4uHB8zODMsNygtLisBCgoKDg0OGxAQGy8kICUsLDQvNDAsLCwsNCw0LCwsLDQsLCwsLCwsLCw0LC'),
(28, 'Bimbo', '../../Img/logo_prov/ARL_8581.JPG', 'data:image/JPG;base64,');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(3) NOT NULL,
  `nombreRol` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombreRol`) VALUES
(1, 'Administrador'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(3) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `nombre_usuario` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `rol` int(3) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `codigo` int(10) NOT NULL,
  `id_vacante` int(4) NOT NULL,
  `poto_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nombre`, `mail`, `nombre_usuario`, `password`, `rol`, `apellido`, `codigo`, `id_vacante`, `poto_user`) VALUES
(1, 'Carlos ', 'carlitos.quintero0519@gmail.com', 'admin', '123', 1, ' Quintero Castillo', 1234, 0, ''),
(2, 'Administrador', 'admin@admin.com', 'admin2', '123', 1, '', 0, 0, ''),
(3, 'Administrador', 'admin@admin.com', 'admin3', '123', 1, 'admin ', 1, 1, 'm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes`
--

CREATE TABLE `vacantes` (
  `idVacante` int(4) NOT NULL,
  `codigoVacante` int(3) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `sede` varchar(50) NOT NULL,
  `Estado` int(2) NOT NULL,
  `fechaIni` date NOT NULL,
  `fechaFin` date NOT NULL,
  `requicitos` varchar(100) NOT NULL,
  `idProveedor` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vacantes`
--

INSERT INTO `vacantes` (`idVacante`, `codigoVacante`, `latitud`, `longitud`, `sede`, `Estado`, `fechaIni`, `fechaFin`, `requicitos`, `idProveedor`) VALUES
(10, 120, 3.5169899, -76.4973227, 'acopi', 1, '2018-09-19', '2018-09-29', 'Tomar fotografia de Nevera Principal', 27),
(11, 121, 3.4648774, -76.50138609999999, 'CC Unicentro', 0, '2018-12-19', '2018-12-26', 'Revisar surtido local lc654', 28),
(12, 122, 3.5171710999999997, -76.5083449, 'calle 5ta', 0, '2018-12-28', '2018-12-30', 'Revisar estante de cinta alambrada', 28);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `completar_mision`
--
ALTER TABLE `completar_mision`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `idVacante` (`idVacante`),
  ADD KEY `id_usu` (`id_usu`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  ADD PRIMARY KEY (`idVacante`),
  ADD KEY `idPrograma` (`idProveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  MODIFY `idVacante` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `completar_mision`
--
ALTER TABLE `completar_mision`
  ADD CONSTRAINT `completar_mision_ibfk_1` FOREIGN KEY (`idVacante`) REFERENCES `vacantes` (`idVacante`),
  ADD CONSTRAINT `completar_mision_ibfk_2` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`id_usu`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `vacantes`
--
ALTER TABLE `vacantes`
  ADD CONSTRAINT `vacantes_ibfk_1` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
