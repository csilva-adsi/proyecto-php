-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-09-2022 a las 01:29:30
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE IF NOT EXISTS `ciudad` (
  `idCiudad` int(11) NOT NULL AUTO_INCREMENT,
  `ciuNombre` varchar(150) NOT NULL,
  `ciuCodigo` varchar(15) DEFAULT NULL,
  `idDepartamento` int(11) NOT NULL,
  PRIMARY KEY (`idCiudad`),
  UNIQUE KEY `ciuCodigo_UNIQUE` (`ciuCodigo`),
  KEY `fk_ciudad_departamento1_idx` (`idDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idCiudad`, `ciuNombre`, `ciuCodigo`, `idDepartamento`) VALUES
(1, 'MEDELLIN', NULL, 1),
(2, 'CALI', NULL, 2),
(3, 'SAN CRISTOBAL', NULL, 3),
(4, 'BUCARAMANGA', NULL, 4),
(5, 'ENVIGADO', NULL, 1),
(6, 'SABANETA', NULL, 1),
(7, 'BUGA', NULL, 2),
(8, 'BUENAVENTURA', NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `cliNombres` varchar(100) NOT NULL,
  `cliApellidos` varchar(100) NOT NULL,
  `cliTipoDocumento` varchar(45) NOT NULL,
  `cliDocumento` varchar(20) NOT NULL,
  `cliFechaNacimiento` date NOT NULL,
  `cliEmail` varchar(100) DEFAULT NULL,
  `cliCelular` varchar(15) DEFAULT NULL,
  `cliDireccion` varchar(255) DEFAULT NULL,
  `cliBarrio` varchar(255) DEFAULT NULL,
  `cliDepartamento` varchar(100) DEFAULT NULL,
  `cliCiudad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `cliDocumento_UNIQUE` (`cliDocumento`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `cliNombres`, `cliApellidos`, `cliTipoDocumento`, `cliDocumento`, `cliFechaNacimiento`, `cliEmail`, `cliCelular`, `cliDireccion`, `cliBarrio`, `cliDepartamento`, `cliCiudad`) VALUES
(46, 'Josefa', 'Ruiz', '1', '555555', '1985-05-05', 'manuela@gmail.com', '3102136565', 'Carrera 30 numero 10', 'Chapinero', '3', '1'),
(50, 'Luis Alberto', 'Suarez Lopez', '1', '15445585', '1999-09-09', 'luis@gmail.com', '310154565', 'Avenica 3 55', 'San Marino', '4', '4'),
(51, 'Juan Pablo', 'Gonzalez', 'CC', '10852222', '2000-08-03', 'jg@gmail.com', '3101234567', 'Avenida 1 # 2-29', 'La Esperanza', 'Antioquia', 'Medellin'),
(74, 'Laura', 'Arevalo', '1', '25255', '2020-07-25', 'csilva@gmail.com', '3414141', 'Valle del Lili', 'Colina', '2', '2'),
(80, 'Josefa', 'Ruiz', '1', '5553555', '1985-05-05', 'manuela@gmail.com', '3102136565', 'Carrera 30 numero 10', 'Chapinero', '3', '1'),
(81, 'Luis Alberto', 'Suarez Lopez', '1', '153445585', '1999-09-09', 'luis@gmail.com', '310154565', 'Avenica 3 55', 'San Marino', '4', '4'),
(82, 'Juan Pablo', 'Gonzalez', '1', '100852222', '2000-08-03', 'jg@gmail.com', '3101234567', 'Avenida 1 # 2-29', 'La Esperanza', 'Antioquia', 'Medellin'),
(83, 'Luis Manuel', 'Perez', '1', '107285', '2022-08-01', 'luis@luis.com', '3101231231', 'Carrera 20 3 90', 'San Luis', '2', '2'),
(85, 'Josefa', 'Ruiz', '1', '55505', '1985-05-05', 'manuela@gmail.com', '3102136565', 'Carrera 30 numero 10', 'Chapinero', '3', '1'),
(86, 'Luis Alberto', 'Suarez Lopez', '1', '44558005', '1999-09-09', 'luis@gmail.com', '310154565', 'Avenica 3 55', 'San Marino', '4', '4'),
(87, 'Juan Pablo', 'Gonzalez', '1', '1008772', '2000-08-03', 'jg@gmail.com', '3101234567', 'Avenida 1 # 2-29', 'La Esperanza', 'Antioquia', 'Medellin'),
(88, 'Luis Manuel', 'Perez', '1', '10777285', '2022-08-01', 'luis@luis.com', '3101231231', 'Carrera 20 3 90', 'San Luis', '2', '2'),
(89, 'Laura', 'Arevalo', '1', '2525625', '2020-07-25', 'csilva@gmail.com', '3414141', 'Valle del Lili', 'Colina', '2', '2'),
(90, 'Josefa', 'Ruiz', '1', '55535559', '1985-05-05', 'manuela@gmail.com', '3102136565', 'Carrera 30 numero 10', 'Chapinero', '3', '1'),
(91, 'Luis Alberto', 'Suarez Lopez', '1', '1534495585', '1999-09-09', 'luis@gmail.com', '310154565', 'Avenica 3 55', 'San Marino', '4', '4'),
(92, 'Juan Pablo', 'Gonzalez', '1', '1008522292', '2000-08-03', 'jg@gmail.com', '3101234567', 'Avenida 1 # 2-29', 'La Esperanza', 'Antioquia', 'Medellin'),
(93, 'Luis Manuel', 'Perez', '1', '1097285', '2022-08-01', 'luis@luis.com', '3101231231', 'Carrera 20 3 90', 'San Luis', '2', '2'),
(94, 'Laura', 'Arevalo', '1', '2529565', '2020-07-25', 'csilva@gmail.com', '3414141', 'Valle del Lili', 'Colina', '2', '2'),
(95, 'Josefa', 'Ruiz', '1', '55535955', '1985-05-05', 'manuela@gmail.com', '3102136565', 'Carrera 30 numero 10', 'Chapinero', '3', '1'),
(97, 'Juan Pablo', 'Gonzalez', '2', '1008152222', '2000-08-03', 'jg@gmail.com', '3101234567', 'Avenida 1 # 2-29', 'La Esperanza', 'Antioquia', 'Medellin'),
(98, 'Luis Manuel', 'Perez', '1', '10728511', '2022-08-01', 'luis@luis.com', '3101231231', 'Carrera 20 3 90', 'San Luis', '2', '2'),
(99, 'Laura', 'Arevalo', '1', '252335', '2020-07-25', 'csilva@gmail.com', '3414141', 'Valle del Lili', 'Colina', '2', '2'),
(100, 'Josefa', 'Ruiz', '1', '5553995', '1985-05-05', 'manuela@gmail.com', '3102136565', 'Carrera 30 numero 10', 'Chapinero', '3', '1'),
(101, 'Luis Alberto', 'Suarez Lopez', '1', '152345585', '1999-09-09', 'luis@gmail.com', '310154565', 'Avenica 3 55', 'San Marino', '4', '4'),
(102, 'Juan Pablo', 'Gonzalez', '3', '100852002', '2000-08-03', 'jg@gmail.com', '3101234567', 'Avenida 1 # 2-29', 'La Esperanza', 'Antioquia', 'Medellin'),
(103, 'Luis Manuel', 'Perez', '1', '10798285', '2022-08-01', 'luis@luis.com', '3101231231', 'Carrera 20 3 90', 'San Luis', '2', '2'),
(104, 'Laura', 'Arevalo', '1', '252565', '2020-07-25', 'csilva@gmail.com', '3414141', 'Valle del Lili', 'Colina', '2', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `depNombre` varchar(100) NOT NULL,
  `depCodigo` varchar(45) DEFAULT NULL,
  `idPais` int(11) NOT NULL,
  PRIMARY KEY (`idDepartamento`),
  UNIQUE KEY `depCodigo_UNIQUE` (`depCodigo`),
  KEY `fk_departamento_pais_idx` (`idPais`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`idDepartamento`, `depNombre`, `depCodigo`, `idPais`) VALUES
(1, 'ANTIOQUIA', NULL, 1),
(2, 'VALLE', NULL, 1),
(3, 'TACHIRA', NULL, 2),
(4, 'SANTANDER', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `idPais` int(11) NOT NULL AUTO_INCREMENT,
  `paisNombre` varchar(45) NOT NULL,
  `paisCodigo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPais`),
  UNIQUE KEY `paisNombre_UNIQUE` (`paisNombre`),
  UNIQUE KEY `paisCodigo_UNIQUE` (`paisCodigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`idPais`, `paisNombre`, `paisCodigo`) VALUES
(1, 'COLOMBIA', NULL),
(2, 'VENEZUELA', NULL),
(3, 'MEXICO', NULL),
(4, 'ECUADOR', NULL),
(5, 'PANAMA', NULL),
(6, 'ARGENTINA', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuNombres` varchar(100) NOT NULL,
  `usuApellidos` varchar(100) NOT NULL,
  `usuEmail` varchar(100) NOT NULL,
  `usuPassword` varchar(20) NOT NULL,
  `usuRol` varchar(15) NOT NULL,
  `usuCelular` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `usuEmail_UNIQUE` (`usuEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuNombres`, `usuApellidos`, `usuEmail`, `usuPassword`, `usuRol`, `usuCelular`) VALUES
(1, 'Carlos', 'Silva', 'carlos@carlos', 'carlos', 'ADMIN', '31204071590');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_ciudad_departamento1` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `fk_departamento_pais` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
