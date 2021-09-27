-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2021 a las 07:38:29
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nugget`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofrecer`
--

CREATE TABLE `ofrecer` (
  `Usuario` varchar(25) NOT NULL,
  `NombreEmpresa` varchar(50) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `ImagenDeReferencia` varchar(500) NOT NULL,
  `Contacto` varchar(500) NOT NULL,
  `FechaDePublicacion` datetime NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ofrecer`
--

INSERT INTO `ofrecer` (`Usuario`, `NombreEmpresa`, `Descripcion`, `ImagenDeReferencia`, `Contacto`, `FechaDePublicacion`, `Codigo`) VALUES
('Franz', 'Las galletas de Franz', 'Las mejores galletas de la ciudad', 'https://cdn7.kiwilimon.com/recetaimagen/3329/1900x1080/38990.jpg.webp', 'castillocerna@gmail.com', '2021-09-20 00:20:51', 0),
('Alvin', 'Academia de baile Alvin', 'Todos hemos querido enseñarle a bailar a nuestra ardilla mascota... Alvin se pone a su diosposicion! Con los mejores pasos de baile, su ardilla saldra con los movimientos mas geniales.', 'https://c.tenor.com/09uldTF_OnIAAAAM/squirrel-dancing-squirrel.gif', 'academiaalvin@gmail.com', '2021-09-27 03:40:45', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitar`
--

CREATE TABLE `solicitar` (
  `Usuario` varchar(25) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `ImagenDeReferencia` varchar(500) NOT NULL,
  `Contacto` varchar(500) NOT NULL,
  `FechaDePublicacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitar`
--

INSERT INTO `solicitar` (`Usuario`, `Titulo`, `Descripcion`, `ImagenDeReferencia`, `Contacto`, `FechaDePublicacion`, `Codigo`) VALUES
('Gus', 'Necesito 500 galletas', 'Es el cumpleaños de mi hijo y le voy a hacer una fiesta. Necesito quien me pueda hacer 500 galletas de chispas de chocolate.', 'https://cdn7.kiwilimon.com/recetaimagen/28774/640x426/th5-640x426-29249.png.webp', 'Instagram: @gusanitor8', '2021-09-19 22:23:18', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
