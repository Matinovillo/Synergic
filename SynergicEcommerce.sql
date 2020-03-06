-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2020 a las 02:40:29
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
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE `barrios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `id_localidad` int(11) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `id_categoria_padre` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesventas`
--

CREATE TABLE `detalles_ventas` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_unitario` double DEFAULT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE `domicilios` (
  `id` int(11) NOT NULL,
  `calle` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `codigo_postal` int(11) DEFAULT NULL,
  `id_barrio` int(11) DEFAULT NULL,
  `barrio` varchar(100) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `fecha_actividad` date DEFAULT NULL,
  `id_foto` int(11) DEFAULT NULL,
  `id_domicilio` int(11) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formasentregas`
--

CREATE TABLE `formas_entregas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formaspagos`
--

CREATE TABLE `formas_pagos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `id_provincia` int(11) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `stock` varchar(1) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosfavoritos`
--

CREATE TABLE `productos_favoritos` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha_alta` date DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolesusuarios`
--

CREATE TABLE `roles_usuarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `fecha_alta` date DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_cierre` date DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_fotos`
--

CREATE TABLE `productos_fotos` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_foto` int(11) DEFAULT NULL,
  `fecha_alta` date DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------


--
-- Estructura de tabla para la tabla `sexos`
--

CREATE TABLE `sexos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `id_sexo` int(11) DEFAULT NULL,
  `id_foto` int(11) DEFAULT NULL,
  `id_domicilio` int(11) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `id_forma_entrega` int(11) DEFAULT NULL,
  `id_forma_pago` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `precio_total` double DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barrios`
--
ALTER TABLE `barrios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `BARRIO_LOCALIDAD_idx` (`id_localidad`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CATEGORIA_PADRE_idx` (`id_categoria_padre`);

--
-- Indices de la tabla `detalles_ventas`
--
ALTER TABLE `detalles_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DETALLEVENTA_VENTA_idx` (`id_venta`),
  ADD KEY `DETALLEVENTA_PRODUCTO_idx` (`id_producto`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DOMICILIO_BARRIO_idx` (`id_barrio`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EMPRESA_FOTO_idx` (`id_foto`),
  ADD KEY `EMPRESA_DOMICILIO_idx` (`id_domicilio`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formas_entregas`
--
ALTER TABLE `formas_entregas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formaspagos`
--
ALTER TABLE `formas_pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `LOCALIDAD_PROVINCIA_idx` (`id_provincia`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PRODUCTO_CATEGORIA_idx` (`id_categoria`);

--
-- Indices de la tabla `productosfavoritos`
--
ALTER TABLE `productos_favoritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PRODUCTOSFAV_USUARIO_idx` (`id_usuario`),
  ADD KEY `PRODUCTOSFAV_PRODUCTO_idx` (`id_producto`);

--
-- Indices de la tabla `productos_fotos`
--
ALTER TABLE `productos_fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PRODUCTOSFOT_FOTO_idx` (`id_foto`),
  ADD KEY `PRODUCTOSFOT_PRODUCTO_idx` (`id_producto`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rolesusuarios`
--
ALTER TABLE `roles_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ROLESUSU_USUARIO_idx` (`id_usuario`),
  ADD KEY `ROLESUSU_ROL_idx` (`id_rol`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sexos`
--
ALTER TABLE `sexos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USUARIO_FOTO_idx` (`id_foto`),
  ADD KEY `USUARIO_SEXO_idx` (`id_sexo`),
  ADD KEY `USUARIO_DOMICILIO_idx` (`id_domicilio`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `VENTA_USUARIO_idx` (`id_usuario`),
  ADD KEY `VENTA_FORMAENTREGA_idx` (`id_forma_entrega`),
  ADD KEY `VENTA_FORMA_PAGO_idx` (`id_forma_pago`),
  ADD KEY `VENTA_ESTADO_idx` (`id_estado`);

--
-- AUTO_INCREMENT
--

ALTER TABLE `barrios` MODIFY COLUMN id int auto_increment;
ALTER TABLE `categorias` MODIFY COLUMN id int auto_increment;
ALTER TABLE `detalles_ventas` MODIFY COLUMN id int auto_increment;
ALTER TABLE `domicilios` MODIFY COLUMN id int auto_increment;
ALTER TABLE `empresas` MODIFY COLUMN id int auto_increment;
ALTER TABLE `estados` MODIFY COLUMN id int auto_increment;
ALTER TABLE `formas_entregas` MODIFY COLUMN id int auto_increment;
ALTER TABLE `formas_pagos` MODIFY COLUMN id int auto_increment;
ALTER TABLE `fotos` MODIFY COLUMN id int auto_increment;
ALTER TABLE `localidades` MODIFY COLUMN id int auto_increment;
ALTER TABLE `productos` MODIFY COLUMN id int auto_increment;
ALTER TABLE `productos_favoritos` MODIFY COLUMN id int auto_increment;
ALTER TABLE `provincias` MODIFY COLUMN id int auto_increment;
ALTER TABLE `roles` MODIFY COLUMN id int auto_increment;
ALTER TABLE `roles_usuarios` MODIFY COLUMN id int auto_increment;
ALTER TABLE `sesiones` MODIFY COLUMN id int auto_increment;
ALTER TABLE `productos_fotos` MODIFY COLUMN id int auto_increment;
ALTER TABLE `sexos` MODIFY COLUMN id int auto_increment;
ALTER TABLE `users` MODIFY COLUMN id int auto_increment;
ALTER TABLE `ventas` MODIFY COLUMN id int auto_increment;


--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `barrios`
--
ALTER TABLE `barrios`
  ADD CONSTRAINT `BARRIO_LOCALIDAD` FOREIGN KEY (`id_localidad`) REFERENCES `localidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `CATEGORIA_PADRE` FOREIGN KEY (`id_categoria_padre`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalles_ventas`
--
ALTER TABLE `detalles_ventas`
  ADD CONSTRAINT `DETALLEVENTA_VENTA` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `DETALLEVENTA_PRODUCTO` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD CONSTRAINT `DOMICILIO_BARRIO` FOREIGN KEY (`id_barrio`) REFERENCES `barrios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `EMPRESA_DOMICILIO` FOREIGN KEY (`id_domicilio`) REFERENCES `domicilios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `EMPRESA_FOTO` FOREIGN KEY (`id_foto`) REFERENCES `fotos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD CONSTRAINT `LOCALIDAD_PROVINCIA` FOREIGN KEY (`id_provincia`) REFERENCES `provincias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `PRODUCTO_CATEGORIA` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos_favoritos`
--
ALTER TABLE `productos_favoritos`
  ADD CONSTRAINT `PRODUCTOSFAV_PRODUCTO` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `PRODUCTOSFAV_USUARIO` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos_fotos`
--
ALTER TABLE `productos_fotos`
  ADD CONSTRAINT `PRODUCTOSFOT_PRODUCTO` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `PRODUCTOSFOT_FOTO` FOREIGN KEY (`id_foto`) REFERENCES `fotos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `roles_usuarios`
--
ALTER TABLE `roles_usuarios`
  ADD CONSTRAINT `ROLESUSU_ROL` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ROLESUSU_USUARIO` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `users`
  ADD CONSTRAINT `USUARIO_DOMICILIO` FOREIGN KEY (`id_domicilio`) REFERENCES `domicilios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `USUARIO_FOTO` FOREIGN KEY (`id_foto`) REFERENCES `fotos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `USUARIO_SEXO` FOREIGN KEY (`id_sexo`) REFERENCES `sexos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sesiones'
ALTER TABLE `sesiones`
  ADD CONSTRAINT `SESION_USUARIO` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `VENTA_ESTADO` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `VENTA_FORMAENTREGA` FOREIGN KEY (`id_forma_Entrega`) REFERENCES `formas_entregas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `VENTA_FORMA_PAGO` FOREIGN KEY (`id_forma_pago`) REFERENCES `formas_pagos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `VENTA_USUARIO` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
