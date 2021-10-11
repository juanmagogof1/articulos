-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2021 a las 17:32:08
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

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
-- Estructura de tabla para la tabla `catproductos`
--

CREATE TABLE `catproductos` (
  `eIdProducto` int(11) NOT NULL,
  `txtNomProd` varchar(30) NOT NULL,
  `ePrecioVenta` decimal(8,2) NOT NULL,
  `eStock` int(11) NOT NULL,
  `fhCreacion` datetime DEFAULT current_timestamp(),
  `fhActualizacion` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catproductos`
--

INSERT INTO `catproductos` (`eIdProducto`, `txtNomProd`, `ePrecioVenta`, `eStock`, `fhCreacion`, `fhActualizacion`) VALUES
(1, 'Goma', '2.00', 10, '2021-10-07 08:55:54', '2021-10-07 08:55:54'),
(2, 'Lapiz', '0.50', 10, '2021-10-07 08:55:54', '2021-10-07 08:55:54'),
(3, 'Lapicera', '0.80', 10, '2021-10-07 08:55:54', '2021-10-07 08:55:54'),
(4, 'Cuaderno', '1.50', 10, '2021-10-07 08:55:54', '2021-10-07 08:55:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catproductos`
--
ALTER TABLE `catproductos`
  ADD PRIMARY KEY (`eIdProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catproductos`
--
ALTER TABLE `catproductos`
  MODIFY `eIdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
