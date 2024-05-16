-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2024 a las 16:27:05
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fotocasa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extras`
--

CREATE TABLE `extras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `extras`
--

INSERT INTO `extras` (`id`, `nombre`) VALUES
(1, 'Ascensor'),
(2, 'Amueblado'),
(3, 'Garaje'),
(4, 'Piscina'),
(5, 'Calefacción '),
(6, 'Trastero'),
(7, 'Jardin'),
(8, 'No amueblado'),
(9, 'Aire acondicionado'),
(10, 'Electrodomesticos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles_categioria`
--

CREATE TABLE `inmuebles_categioria` (
  `id` int(3) NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `visible` tinyint(1) UNSIGNED NOT NULL COMMENT '0 no / 1 si'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inmuebles_categioria`
--

INSERT INTO `inmuebles_categioria` (`id`, `nombre`, `descripcion`, `visible`) VALUES
(1, 'Comprar', 'Casas para comprar ', 0),
(2, 'Vender', 'Casas que estan a la venta ', 1),
(3, 'Alquilar  ', 'Casas que se pueden alquilar  ', 1),
(4, 'Obra nueva', 'Casas que son de obra nueva', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles_tipo`
--

CREATE TABLE `inmuebles_tipo` (
  `Id` int(3) NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `visible` tinyint(1) NOT NULL COMMENT '0/No 1/Si'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inmuebles_tipo`
--

INSERT INTO `inmuebles_tipo` (`Id`, `nombre`, `visible`) VALUES
(1, 'Vivienda', 1),
(2, 'Inmueble', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `banos` int(11) NOT NULL,
  `superficie` decimal(10,2) NOT NULL,
  `extras` text NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `estado` varchar(50) NOT NULL,
  `imagen_url` varchar(255) NOT NULL,
  `disponibilidad` varchar(15) NOT NULL,
  `provincia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`id`, `titulo`, `descripcion`, `precio`, `id_tipo`, `habitaciones`, `banos`, `superficie`, `extras`, `fecha_publicacion`, `estado`, `imagen_url`, `disponibilidad`, `provincia`) VALUES
(1, 'Acogedor Apartamento en Madrid', 'Encantador apartamento en el corazón de Madrid', 180000.00, 2, 2, 1, 80.00, '2', '2024-05-01', 'Disponible', 'https://www.booking.com/hotel/es/acogedor-apartamento-madrid-centro-atocha.es.html#', 'Comprar', 'Madrid'),
(2, 'Ático Soleado en Barcelona', 'Ático impresionante con vistas panorámicas', 250000.00, 3, 3, 2, 150.00, '1,3', '2024-05-01', 'Disponible', 'https://www.booking.com/hotel/es/atico-soleado-en-centro-de-barcelona-barcelona2.es.html', 'Comprar', 'Barcelona'),
(3, 'Bajo con Encanto en Valencia', 'Hermoso bajo con jardín', 350000.00, 6, 4, 3, 200.00, '9,7', '2024-05-01', 'Disponible', 'https://www.google.com/imgres?q=Bajo%20con%20Encanto%20en%20Valencia&imgurl=https%3A%2F%2Fimages-re-inmofactory.milanuncios.com%2Fimages%2Finmofactory%2Fdocuments%2F1%2F109791%2F35892183%2F658575387.jpg%3Frule%3Dhw396_70&imgrefurl=https%3A%2F%2Fwww.milanu', 'Obra nueva', 'Valencia'),
(4, 'Loft Moderno en Sevilla', 'Loft contemporáneo en un distrito histórico', 120000.00, 5, 1, 1, 60.00, '6', '2024-05-01', 'Disponible', 'https://www.google.com/imgres?q=Loft%20Moderno%20en%20Sevilla&imgurl=https%3A%2F%2Fcf.bstatic.com%2Fxdata%2Fimages%2Fhotel%2Fmax1024x768%2F320845120.jpg%3Fk%3D30358f57924c3652caac773628015d398e7d11ae33eafeb50817f8c202fcc692%26o%3D%26hp%3D1&imgrefurl=https', 'Obra nueva', 'Sevilla'),
(5, 'Apartamento Frente al Mar en Málaga', 'Apartamento de lujo con vista al mar', 400000.00, 1, 2, 2, 100.00, '4,3', '2024-05-01', 'Disponible', 'http://ejemplo.com/imagen5.jpg', 'Comprar', 'Malaga'),
(6, 'Estudio en la coruña', 'Estudio gallego rodeada de naturaleza', 300000.00, 3, 2, 2, 180.00, '7,6', '2024-05-01', 'Disponible', 'https://www.fotocasa.es/es/comprar/vivienda/ribeira/parking-trastero/182569318/d?from=list', 'Alquilar', 'Coruña'),
(7, 'Apartamento en el Centro de la Ciudad en Malaga ', 'Apartamento conveniente cerca de servicios', 200000.00, 2, 1, 1, 70.00, '2', '2024-05-01', 'Disponible', 'http://ejemplo.com/imagen7.jpg', 'Alquilar', 'Malaga'),
(8, 'Duplex de Montaña en Sierra Nevada', 'Duplex acogedor en la montaña', 450000.00, 3, 3, 2, 220.00, '8,6', '2024-05-01', 'Disponible', 'https://www.google.com/imgres?q=Duplex%20de%20Monta%C3%B1a%20en%20Sierra%20Nevada&imgurl=https%3A%2F%2Fcf.bstatic.com%2Fxdata%2Fimages%2Fhotel%2Fmax1024x768%2F428290322.jpg%3Fk%3Dc3c1ad595576fd50b05f7f7dd40de5d061fd5e409bd65b1880779ad1cd0e301b%26o%3D%26hp', 'Comprar', 'Granada'),
(9, 'Casa Adosada en Toledo', 'Casa adosada histórica con comodidades modernas', 280000.00, 2, 2, 2, 120.00, '10', '2024-05-01', 'Disponible', 'https://www.google.com/imgres?q=Duplex%20de%20Monta%C3%B1a%20en%20Sierra%20Nevada&imgurl=https%3A%2F%2Fcf.bstatic.com%2Fxdata%2Fimages%2Fhotel%2Fmax1024x768%2F428290322.jpg%3Fk%3Dc3c1ad595576fd50b05f7f7dd40de5d061fd5e409bd65b1880779ad1cd0e301b%26o%3D%26hp', 'Comprar', 'Toledo'),
(10, 'Estudio en Asturias', 'Casa de campo pintoresca en un pueblo pintoresco', 150000.00, 7, 1, 1, 50.00, '7', '2024-05-01', 'Disponible', 'https://www.google.com/imgres?q=Duplex%20de%20Monta%C3%B1a%20en%20Sierra%20Nevada&imgurl=https%3A%2F%2Fcf.bstatic.com%2Fxdata%2Fimages%2Fhotel%2Fmax1024x768%2F428290322.jpg%3Fk%3Dc3c1ad595576fd50b05f7f7dd40de5d061fd5e409bd65b1880779ad1cd0e301b%26o%3D%26hp', 'Alquilar', 'Asturias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `nombre_provincia` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`nombre_provincia`) VALUES
('Álava'),
('Albacete'),
('Alicante'),
('Almería'),
('Ávila'),
('Badajoz'),
('Baleares'),
('Barcelona'),
('Burgos'),
('Cáceres'),
('Cádiz'),
('Castellón'),
('Ciudad Real'),
('Córdoba'),
('La Coruña'),
('Cuenca'),
('Gerona'),
('Granada'),
('Guadalajara'),
('Guipúzcoa'),
('Huelva'),
('Huesca'),
('Jaén'),
('León'),
('Lérida'),
('La Rioja'),
('Lugo'),
('Madrid'),
('Málaga'),
('Murcia'),
('Navarra'),
('Orense'),
('Asturias'),
('Palencia'),
('Las Palmas'),
('Pontevedra'),
('Salamanca'),
('Santa Cruz de Tenerife'),
('Cantabria'),
('Segovia'),
('Sevilla'),
('Soria'),
('Tarragona'),
('Teruel'),
('Toledo'),
('Valencia'),
('Valladolid'),
('Vizcaya'),
('Zamora'),
('Zaragoza'),
('Ceuta'),
('Melilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_casas`
--

CREATE TABLE `tipo_casas` (
  `cod_tipo` int(11) NOT NULL,
  `tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_casas`
--

INSERT INTO `tipo_casas` (`cod_tipo`, `tipo`) VALUES
(1, 'Casa de Campo'),
(2, 'Casa de Ciudad'),
(3, 'Casa de Playa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pisos`
--

CREATE TABLE `tipo_pisos` (
  `codigo_tipo` int(11) NOT NULL,
  `tipo` text NOT NULL,
  `extra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_pisos`
--

INSERT INTO `tipo_pisos` (`codigo_tipo`, `tipo`, `extra`) VALUES
(1, 'Plantas intermedias', NULL),
(2, 'Apartamento', NULL),
(3, 'Atico', NULL),
(4, 'Duplex', NULL),
(5, 'Loft', NULL),
(6, 'Planta baja', NULL),
(7, 'Estudio', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vivienda`
--

CREATE TABLE `tipo_vivienda` (
  `id_tipo` int(11) DEFAULT NULL,
  `Nombre` text DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Direccion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_vivienda`
--

INSERT INTO `tipo_vivienda` (`id_tipo`, `Nombre`, `Descripcion`, `Direccion`) VALUES
(NULL, 'Casa', 'Una casa con jardín', '123 Calle Principal'),
(NULL, 'Apartamento', 'Un apartamento en la ciudad', '456 Avenida Central'),
(NULL, 'Chalet', 'Un chalet en las montañas', '789 Calle de la Sierra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contrasenya` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contrasenya`) VALUES
(6154993, 'adam', 'Bellver@gmail.com', 'b5c5167b15ccd1336900e40848aef675');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inmuebles_categioria`
--
ALTER TABLE `inmuebles_categioria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inmuebles_tipo`
--
ALTER TABLE `inmuebles_tipo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_pisos`
--
ALTER TABLE `tipo_pisos`
  ADD KEY `extra` (`extra`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `extras`
--
ALTER TABLE `extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `inmuebles_categioria`
--
ALTER TABLE `inmuebles_categioria`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inmuebles_tipo`
--
ALTER TABLE `inmuebles_tipo`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pisos`
--
ALTER TABLE `pisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6154994;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tipo_pisos`
--
ALTER TABLE `tipo_pisos`
  ADD CONSTRAINT `tipo_pisos_ibfk_1` FOREIGN KEY (`extra`) REFERENCES `extras` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
