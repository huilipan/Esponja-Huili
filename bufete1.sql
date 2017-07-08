-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2017 a las 16:13:43
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bufete1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abogado`
--

CREATE TABLE `abogado` (
  `idAbogado` int(11) NOT NULL,
  `RutAbogado` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `NombreAbogado` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `ApellidoAbogado` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `abogado`
--

INSERT INTO `abogado` (`idAbogado`, `RutAbogado`, `NombreAbogado`, `ApellidoAbogado`) VALUES
(1, '555551155', 'juan', 'florez'),
(2, '18323659', 'JOSE', 'HUILIPAN'),
(3, '18323659', 'xxxx', 'juan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion`
--

CREATE TABLE `atencion` (
  `idAtencion` int(11) NOT NULL,
  `FechaAtencion` date DEFAULT NULL,
  `HoraAtencion` datetime DEFAULT NULL,
  `ClienteAtendido` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `AbogadoAtencion` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `TipoEstado` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Abogodo_idAbogado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `atencion`
--

INSERT INTO `atencion` (`idAtencion`, `FechaAtencion`, `HoraAtencion`, `ClienteAtendido`, `AbogadoAtencion`, `TipoEstado`, `Abogodo_idAbogado`) VALUES
(1, '2017-07-11', '2017-07-11 00:00:00', 'huilli', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `RutCliente` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `NombreCliente` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `ApellidoCliente` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `TipoPresona` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Direccion` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Estado_idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `RutCliente`, `NombreCliente`, `ApellidoCliente`, `TipoPresona`, `Direccion`, `Telefono`, `Usuario_idUsuario`, `Estado_idEstado`) VALUES
(1, '2245-5', 'cliente', 'acliente', '1', 'av cliente', 1255555, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `NombreEstado` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `NombreEstado`) VALUES
(1, 'vivo'),
(2, 'muerte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL,
  `TipoPerfil` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `TipoPerfil`, `Usuario_idUsuario`) VALUES
(1, 'abopdas', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `NombreUsuario` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `User` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Clave` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `Abogado_idAbogado` int(11) NOT NULL,
  `Cliente_idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `NombreUsuario`, `User`, `Clave`, `Abogado_idAbogado`, `Cliente_idCliente`) VALUES
(1, 'huili', 'huili', '1234', 1, 0),
(5, 'huili', 'flopez', '81dc9bdb52d04dc20036dbd8313ed055', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abogado`
--
ALTER TABLE `abogado`
  ADD PRIMARY KEY (`idAbogado`);

--
-- Indices de la tabla `atencion`
--
ALTER TABLE `atencion`
  ADD PRIMARY KEY (`idAtencion`),
  ADD UNIQUE KEY `Abogodo_idAbogodo` (`Abogodo_idAbogado`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `Usuario_idUsuario` (`Usuario_idUsuario`),
  ADD UNIQUE KEY `Estado_idEstado` (`Estado_idEstado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`),
  ADD UNIQUE KEY `Usuario_idUsuario` (`Usuario_idUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `Abogodo_idAbogodo` (`Abogado_idAbogado`),
  ADD KEY `Cliente_idCliente` (`Cliente_idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abogado`
--
ALTER TABLE `abogado`
  MODIFY `idAbogado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `atencion`
--
ALTER TABLE `atencion`
  MODIFY `idAtencion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
