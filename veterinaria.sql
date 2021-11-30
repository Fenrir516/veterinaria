-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2021 a las 02:05:37
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estetico`
--

CREATE TABLE `estetico` (
  `baño_masaje` varchar(45) DEFAULT NULL,
  `secado_rapido` varchar(45) DEFAULT NULL,
  `uñas` varchar(45) DEFAULT NULL,
  `limpi_oidos` varchar(45) DEFAULT NULL,
  `corte_pelo` varchar(45) DEFAULT NULL,
  `lav_dientes` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estetico`
--

INSERT INTO `estetico` (`baño_masaje`, `secado_rapido`, `uñas`, `limpi_oidos`, `corte_pelo`, `lav_dientes`) VALUES
('si', 'si', 'si', 'si', 'si', 'si'),
('si', 'si', 'mo', 'si', 'si', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `Raza` varchar(45) DEFAULT NULL,
  `sintomas` varchar(45) DEFAULT NULL,
  `comportamiento` varchar(45) DEFAULT NULL,
  `peso` varchar(45) DEFAULT NULL,
  `altura` varchar(45) DEFAULT NULL,
  `alergias` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`Raza`, `sintomas`, `comportamiento`, `peso`, `altura`, `alergias`) VALUES
('Pitbull', 'moco', 'docil', '24 kg', '63 cm', 'ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_cita` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Nombre_mascota` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `telf` varchar(45) DEFAULT NULL,
  `horario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_cita`, `Nombre`, `Apellido`, `Nombre_mascota`, `correo`, `telf`, `horario`) VALUES
(1, 'Fernando', 'Estrada', '', '', '', ''),
(2, 'Fernando', 'Estrada', 'Luna', 'fernandoestradaxd516@gmail.com', '6561292777', '2021-11-28'),
(3, 'Fernando', 'Estrada', 'pepe', 'fernandoestradaxd516@gmail.com', '6561292777', '2021-11-29'),
(4, 'pepe', 'hernandez', 'juan', 'hola@gmail.com', '56656658', '2021-11-09'),
(5, 'al', 'as', 'ds', 'as@gmail.com', '545456', '2021-11-01'),
(6, 'al', 'as', 'ds', 'as@gmail.com', '545456', '2021-11-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_cita`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
