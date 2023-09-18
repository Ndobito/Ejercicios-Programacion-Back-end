-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2023 a las 17:17:25
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

CREATE TABLE `conductores` (
  `id` int(10) NOT NULL,
  `identificacion` int(10) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Direccion` varchar(25) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Edad` int(3) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `Correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `conductores`
--

INSERT INTO `conductores` (`id`, `identificacion`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `Edad`, `Genero`, `Correo`) VALUES
(1, 2151565, 'oscar', 'rosero', 'cra 6 # 16', '32131864', 25, 'Masculino', 'elvacano@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infraccion`
--

CREATE TABLE `infraccion` (
  `Id` int(10) NOT NULL,
  `Tipo_Infraccion` varchar(30) NOT NULL,
  `N_Infraccion` varchar(30) NOT NULL,
  `Hora` time(6) NOT NULL,
  `Fecha` date NOT NULL,
  `Lugar` varchar(30) NOT NULL,
  `Valor` varchar(30) NOT NULL,
  `Descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `infraccion`
--

INSERT INTO `infraccion` (`Id`, `Tipo_Infraccion`, `N_Infraccion`, `Hora`, `Fecha`, `Lugar`, `Valor`, `Descripcion`) VALUES
(1, 'hggkk', 'ghkghkhgk', '21:25:19.000000', '2023-06-27', 'casa', '161651516', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `Id` int(10) NOT NULL,
  `Tipo_de_Vehiculo` varchar(11) NOT NULL,
  `Color` varchar(25) NOT NULL,
  `Marca` varchar(25) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `Placa` varchar(6) NOT NULL,
  `Chasis` varchar(28) NOT NULL,
  `Numero_Motor` varchar(28) NOT NULL,
  `Kilometraje` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`Id`, `Tipo_de_Vehiculo`, `Color`, `Marca`, `Modelo`, `Estado`, `Placa`, `Chasis`, `Numero_Motor`, `Kilometraje`) VALUES
(1, 'Automotor', 'azul', 'Bugatti', 'Bugatti Chiron 2023', 'Nuevo', '6LNE87', '9FMJA2593MF001158', 'JA25E-4635050', '000001');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductores`
--
ALTER TABLE `conductores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `infraccion`
--
ALTER TABLE `infraccion`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conductores`
--
ALTER TABLE `conductores`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `infraccion`
--
ALTER TABLE `infraccion`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
