-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2018 a las 00:10:13
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nexura2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRoles` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRoles`, `nombre`) VALUES
(1, 'admin'),
(2, 'webmaster'),
(3, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(60) NOT NULL,
  `uuid` int(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `roles` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `login` int(45) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `edad` int(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `imgperfil` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `uuid`, `nombre`, `roles`, `email`, `login`, `clave`, `edad`, `descripcion`, `imgperfil`, `sexo`) VALUES
(39, 1, 'develope', '', 'desarrollo3@gmail.com', 0, '12345Az!', 12, 'test', 'develope.jpeg', 'masculino'),
(40, 1, 'test2', '', 'dany525@gmail.com', 0, '12345Az!|', 35, 'desarrollo50000', 'test2.jpeg', 'masculino'),
(41, 1, 'desarrollo4', '', 'dany52@gmail.com', 0, '12345Az!!', 34, 'desarollo678', 'desarrollo4.jpeg', 'masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_has_roles`
--

CREATE TABLE `usuarios_has_roles` (
  `usuarios_idusuario` int(60) NOT NULL,
  `Roles_idRoles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios_has_roles`
--

INSERT INTO `usuarios_has_roles` (`usuarios_idusuario`, `Roles_idRoles`) VALUES
(39, 2),
(40, 2),
(41, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRoles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `usuarios_has_roles`
--
ALTER TABLE `usuarios_has_roles`
  ADD PRIMARY KEY (`usuarios_idusuario`,`Roles_idRoles`),
  ADD KEY `fk_usuarios_has_Roles_Roles1_idx` (`Roles_idRoles`),
  ADD KEY `fk_usuarios_has_Roles_usuarios_idx` (`usuarios_idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRoles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios_has_roles`
--
ALTER TABLE `usuarios_has_roles`
  ADD CONSTRAINT `fk_usuarios_has_Roles_Roles1` FOREIGN KEY (`Roles_idRoles`) REFERENCES `roles` (`idRoles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_Roles_usuarios` FOREIGN KEY (`usuarios_idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
