-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2021 a las 17:15:38
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `articulos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almfotos`
--

CREATE TABLE `almfotos` (
  `eIdFoto` int(11) NOT NULL,
  `txtNombre` varchar(35) NOT NULL,
  `txtURL` varchar(255) NOT NULL,
  `fk_eIdProducto` int(11) DEFAULT NULL,
  `bPrincipal` tinyint(1) DEFAULT 0,
  `fhCreatedAt` datetime DEFAULT current_timestamp(),
  `fhUpdatedAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catproductos`
--

CREATE TABLE `catproductos` (
  `eIdProducto` int(11) NOT NULL,
  `txtNomProd` varchar(30) NOT NULL,
  `ePrecioVenta` decimal(8,2) NOT NULL,
  `eStock` int(11) NOT NULL,
  `bActivo` tinyint(1) NOT NULL DEFAULT 1,
  `fhCreacion` datetime DEFAULT current_timestamp(),
  `fhActualizacion` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catproductos`
--

INSERT INTO `catproductos` (`eIdProducto`, `txtNomProd`, `ePrecioVenta`, `eStock`, `bActivo`, `fhCreacion`, `fhActualizacion`) VALUES
(1, 'Goma', '2.00', 10, 1, '2021-10-07 08:55:54', '2021-10-07 08:55:54'),
(2, 'Lapiz', '0.50', 10, 0, '2021-10-07 08:55:54', '2021-10-07 08:55:54'),
(3, 'Lapicera', '0.80', 10, 1, '2021-10-07 08:55:54', '2021-10-07 08:55:54'),
(4, 'Cuaderno raya', '12.50', 10, 0, '2021-10-07 08:55:54', '2021-10-14 12:44:18'),
(5, 'Cartulina Negra', '6.70', 15, 0, '2021-10-07 12:56:48', '2021-10-14 12:45:01'),
(6, 'Corrector Líquido', '25.00', 10, 1, '2021-10-11 12:00:52', '2021-10-11 12:00:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almfotos`
--
ALTER TABLE `almfotos`
  ADD PRIMARY KEY (`eIdFoto`);

--
-- Indices de la tabla `catproductos`
--
ALTER TABLE `catproductos`
  ADD PRIMARY KEY (`eIdProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almfotos`
--
ALTER TABLE `almfotos`
  MODIFY `eIdFoto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `catproductos`
--
ALTER TABLE `catproductos`
  MODIFY `eIdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
