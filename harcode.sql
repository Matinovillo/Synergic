-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2020 a las 21:20:11
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `harcode`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` double NOT NULL,
  `categoria` varchar(150) DEFAULT NULL,
  `foto` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `categoria`, `foto`, `stock`) VALUES
(1, 'Notebook HP 245 G7', 'Ryzen 3 2200U 4G 1Tb 14 Free', 22000, 'notebooks', NULL, 1),
(2, 'NOTEBOOK ASUS VIVOBOOK X420FA', 'I5 8265U 8GB SSD 256GB 14 W10\n', 22000, 'notebooks', NULL, 1),
(3, 'PC INTEL CORE I5 9400', '8GB DDR4 1TB WIFI\n', 31990, 'Pc de escritorio', NULL, 1),
(4, 'MOCHILA PARA NOTEBOOK', 'NOOTEBOOKS DE 15,6 PULGADAS\n', 31990, 'accesorios', NULL, 1),
(5, 'PC AMD', 'AMD APU A6 7480 SSD 120GB 4GB\n', 15600, 'PC De escritorio', NULL, 1),
(6, 'TECLADO GENIUS KB-128 USB', 'TECLADO MARCA GENIUS', 15600, 'Perifericos', 1, 1),
(7, 'MONITOR 24 LED PHILIPS', 'MONITOR MARCA PHILIPS', 15600, 'Monitores', 2, 1),
(8, ' DISCO DURO EXTERNO SEAGATE 1 TB USB 3.0 EXPANSION', 'Disco duro externo', 1350, 'almacenamiento', 1, 1),
(9, 'NOTEBOOK DELL INSPIRON', ' I3 7020U 4GB 1TB 15.6', 45000, 'notebooks', 1, 1),
(10, 'IMPRESORA MULTIFUNCION HP 315 Z4B04A', 'IMPRESORA DE SISTEMA CONTINUO', 9099, 'impresoras', 1, 1),
(11, 'PLACA DE VIDEO ASUS NVIDIA GEFORCE GTX 1660 SUPER 6G PHOENIX', 'Placa de video marca asus nvdia', 19849, 'Placas de video', 0, 1),
(12, 'MONITOR 22 LED ASUS VT229H-CF TACTIL 60HZ', 'monitor 22\" pulgadas full hd', 29899, 'monitores', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fechaDeNacimiento` date NOT NULL,
  `sexo` text NOT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `domicilio` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `fechaDeNacimiento`, `sexo`, `telefono`, `celular`, `domicilio`) VALUES
(1, 'Roberto', 'Garcia', '1996-12-23', 'Hombre', NULL, '1561651561', 'B° Liceo III, Cordoba, Argentina'),
(2, 'Sofia', 'Martinez', '2000-03-13', 'Mujer', '4586151', '5545656', 'B° Liceo III, Cordoba, Argentina'),
(3, 'Monica', 'slup', '2003-07-30', 'Mujer', NULL, '655455489', 'B° General Paz, Cordoba, Argentina'),
(4, 'Raul', 'Zabala', '1995-07-18', 'Hombre', NULL, '25545561', 'B° Cofico, Cordoba, Argentina'),
(5, 'Sebastian', 'Ferreyra', '1998-03-23', 'Hombre', NULL, '351264286', 'B° Yofre Norte, Cordoba, Argentina'),
(6, 'Raul Carlos', 'Sanchez Villalba', '1988-07-20', 'hombre', '4926585', '3518623645', 'Av. Patria 5000 Cordoba,Cordoba Argentina');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
