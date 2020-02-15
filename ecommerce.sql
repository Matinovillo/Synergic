-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2020 a las 19:52:22
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `stock` varchar(1) DEFAULT NULL,
  `id_foto` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `Existencia` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `nombre`, `descripcion`, `precio`, `stock`, `id_foto`, `id_categoria`, `Existencia`) VALUES
(1, 'MOTHERBOARD ASUS PRIME X570-PRO V5 ATX AM4', 'Vestida con un atuendo profesional, la serie Prime X570 está pensada para los usuarios que realizan actividades serias y prefieren utilizar sus procesadores Ryzen™ para aplicaciones productivas. Conocida por sus equilibradas características y funciones exclusivas de ASUS', 29559, '1', 0, 5, 1),
(2, 'NOTEBOOK ASUS VIVOBOOK X512FL-EJ067 I5 8265U 8GB 1TB GF MX250 2GB D5 15.6', 'El portátil Asus VivoBook 15 X512FL-EJ202T Ultrabook (Core i5 8th Gen / 8 GB / 1TB / Windows 10/2 GB) tiene una pantalla de 15,6 pulgadas (39,62 cm) para sus necesidades diarias. Esta computadora portátil funciona con el procesador Intel Core i5-8265U (8a generación), junto con 8 GB de RAM y tiene 1 TB de almacenamiento.', 49000, '1', 0, 27, 1),
(3, 'MOTHERBOARD ASUS PRIME B365M-A M-ATX BOX 1151', 'Las placas base ASUS Prime 300 Series proporcionan la base sólida necesaria para su primera construcción, además de flexibilidad para crecer con sus ambiciones. Hemos combinado todas las cosas buenas que se incluyen en los últimos procesadores con el diseño e ingeniería esenciales de ASUS', 5989, '1', 0, 5, 1),
(4, 'PLACA DE VIDEO ASUS NVIDIA GEFORCE RTX 2070 8G SUPER DUAL EVO', 'Al ofrecer la última experiencia de juego NVIDIA Turing ™ en su forma más pura, la ASUS Dual GeForce RTX ™ 2070 EVO combina el rendimiento y la simplicidad como ningún otro. Aprovechando las tecnologías de enfriamiento avanzadas derivadas de las tarjetas gráficas emblemáticas Strix, la Dual GeForce RTX ™', 44499, '1', 0, 8, 1),
(5, 'IMPRESORA MULTIFUNCION EPSON L3150 SISTEMA CONTINUO WIFI', 'La multifunctional inalámbrica EcoTank L3150 te ofrece la revolucionaria impresión sin cartuchos, con nuevo diseño de tanques frontales, botellas de tinta con llenado automático y codificadas para llenado fácil de cada color. Con gran economía y tranquilidad en la impresión, la EcoTank L3150 te permite imprimir hasta 7.500 páginas a color o 4.500 páginas en negro con calidad profesional y alta velocidad.', 15222, '1', 0, 28, 1),
(6, 'PC INTEL CORE I3 8100 + MONITOR 19', 'La potencia de los procesadores i3 para que puedas realizar cualquier tarea sin problemas. Desde navegación por internet hasta trabajos con programas. Incluye monitor de 19 pulgadas Philips!', 32990, '1', 0, 22, 1),
(7, 'THERMALTAKE RISER PLACA DE VIDEO PCI-E 3.0 X16', 'El cable Riser PCI-E 3.0 de Thermaltake Gaming con una calidad excepcional está diseñado para cumplir con el sistema de juego más exigente. Admita una amplia gama de soluciones de GPU y combine el cable incluido en cualquier chasis de juegos.', 2549, '1', 0, 8, 1),
(8, ' PC AMD GAMER RZ MASTER RYZEN 5 3600 ATI RADEON RX 5700 8GB', 'La Pc única en su categoría. Preparada para el uso intensivo en juegos, streaming, edición y producción de contenido y más. La Pc está lista para rendir al máximo bajo cualquier circunstancia de exigencia. Incluye Wraith Cooler de AMD para mantener las temperaturas al mínimo bajo exigencia por largos períodos de tiempo. Tecnología de 3ª Generación de procesadores AMD Ryzen.', 70990, '1', 0, 21, 1),
(9, 'MONITOR 19 LED ACER V206HQL-BB HD', 'Los monitores de la Serie V6 cuentan con la tecnología Acer eColor para efectos visuales sorprendentes, y las innovaciones de Acer ComfyView que reducen el brillo para ofrecer una visualización más cómoda. Estos monitores robustos también tienen una amplia gama de puertos, por lo que puede conectar muchos tipos de dispositivos y hacer más a la vez. ', 7999, '1', 0, 11, 1),
(10, 'NOTEBOOK LENOVO V130 INTEL PENTIUM N5000 4G 500G 15.6 FREE', 'Ampliá tus posibilidades con la nueva generación de procesadores Intel Pentium. La notebook Lenovo ideal para tareas en la escuela o el hogar. Lista para ofrecerte el óptimo rendimiento en programas y software de oficina y navegación.', 24999, '1', 0, 25, 1),
(11, 'TECLADO COUGAR VANTAR MX LOW PROFILE MECANICO', 'COUGAR Vantar MX es un teclado para jugadores comprometidos. Con interruptores mecánicos, una retroiluminación RGB por tecla totalmente personalizable y uno de los diseños de teclado más resistentes que el mundo ha visto, todo lo que necesita para dominar a sus oponentes está aquí.', 4709, '1', 0, 16, 1),
(25, 'DISCO DURO 1 TB S-ATA III WESTERN DIGITAL', 'Interfaz SATA III (6 GB/s) Tamaño del búfer 64 MB Velocidad de rotación 7200 RPM Capacidad 1 TB Tiempos de acceso 0,6 ms (lectura) / 0,8 ms (escritura) Carga / descarga 300.000 veces', 3065, '1', 0, 29, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(100) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `contrasenia` varchar(100) DEFAULT NULL,
  `fechaAlta` date DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `id_sexo` int(11) DEFAULT NULL,
  `id_foto` int(11) DEFAULT NULL,
  `id_domicilio` int(11) DEFAULT NULL,
  `Existencia` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `nombre`, `apellido`, `contrasenia`, `fechaAlta`, `fechaNacimiento`, `id_sexo`, `id_foto`, `id_domicilio`, `Existencia`) VALUES
('amalia@gmail.com', 'Amalia', 'Granata', 'ami123', '0000-00-00', '1998-06-12', NULL, NULL, NULL, 1),
('amy@gmail.com', 'Amapola', 'Cuevas', 'Cuevas', '0000-00-00', '1996-11-01', NULL, NULL, NULL, 1),
('cosme@gmail.com', 'cosme', 'fulanito', 'fulano123', NULL, '1968-08-26', NULL, NULL, NULL, 1),
('jaime@gmail.com', 'jaime', 'cuernavaca', 'jaime123', '0000-00-00', '1975-09-01', NULL, NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PRODUCTO_CATEGORIA_idx` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`),
  ADD KEY `USUARIO_FOTO_idx` (`id_foto`),
  ADD KEY `USUARIO_SEXO_idx` (`id_sexo`),
  ADD KEY `USUARIO_DOMICILIO_idx` (`id_domicilio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `PRODUCTO_CATEGORIA` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `USUARIO_DOMICILIO` FOREIGN KEY (`id_domicilio`) REFERENCES `domicilios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `USUARIO_FOTO` FOREIGN KEY (`id_foto`) REFERENCES `fotos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `USUARIO_SEXO` FOREIGN KEY (`id_sexo`) REFERENCES `sexos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
