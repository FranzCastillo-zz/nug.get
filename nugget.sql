-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2021 a las 00:26:11
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
  `Titulo` varchar(50) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `LinkImagen` varchar(500) NOT NULL,
  `LinkContacto` varchar(500) NOT NULL,
  `FechaDePublicacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ofrecer`
--

INSERT INTO `ofrecer` (`Usuario`, `Titulo`, `Descripcion`, `LinkImagen`, `LinkContacto`, `FechaDePublicacion`) VALUES
('Marcelo Cano', 'Vendo Guitarra', 'Vendo guitarra eléctrica Telecaster ', 'https://i5.walmartimages.com/asr/902be9e5-ff9b-4ea3-a3a0-b9bcc40eae7d.163f0517760d59b35089770f6cb15367.jpeg', 'https://www.instagram.com/marcaruu/', '2021-10-25 05:39:55'),
('Javilejo', 'Entrenador de perros', 'Soy entrenador de perros y entreno perros', 'https://wagurtaildogtraining.com/wp-content/uploads/2019/07/small-dog-being-trained.jpg', 'https://www.instagram.com/javilejo/', '2021-11-21 22:53:23'),
('Genba', 'Vendo Brownies', 'Deliciosos brownies, perfectos para celebraciones de todo tipo', 'https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2019/01/como-hacer-los-brownies-perfectos.jpg', 'https://www.instagram.com/genba.gt/?hl=es', '2021-11-21 23:21:57'),
('franz_castillo', 'Creo páginas web', 'Ofrezco mis servicios como programador web, horario flexible.', 'https://www.codeimmersives.com/wp-content/uploads/2021/04/term1.png', 'https://www.instagram.com/franz_castillo/?hl=es', '2021-11-21 23:25:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitar`
--

CREATE TABLE `solicitar` (
  `Usuario` varchar(25) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `LinkImagen` varchar(500) NOT NULL,
  `LinkContacto` varchar(500) NOT NULL,
  `FechaDePublicacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitar`
--

INSERT INTO `solicitar` (`Usuario`, `Titulo`, `Descripcion`, `LinkImagen`, `LinkContacto`, `FechaDePublicacion`) VALUES
('Gabriel García', 'Busco Funko Pop', 'Estoy buscando una funko pop de Deadpool dinosaurio (Dinopool)', 'https://ae01.alicdn.com/kf/U848f4ea16c324b7baadced96369a72d2T/FUNKO-POP-Deadpool-Dinopool-original-toys-boys-girls-gift-headrest-with-box-official-license.jpg_Q90.jpg_.webp', 'https://www.instagram.com/gegd.gt/', '2021-10-25 05:31:53'),
('FerEsq', 'Busco Caracal', 'Quiero comprar un caracal aquí en Guatemala, alguien sabe donde puedo adquirirlo?', 'https://www.tiposdegatos.com/wp-content/uploads/2020/09/Gato-Salvaje-caracal-caracal.jpg', 'https://www.instagram.com/fer_esq/', '2021-10-26 02:04:36'),
('Tomás', 'Busco estudiantes', 'De poo', 'https://foundersguide.com/wp-content/uploads/2020/11/programming-1.jpg', 'https://discord.gg/meNZVxPF', '2021-11-21 22:48:18'),
('gusanitor8', 'Busco Mesa', 'Que se pueda armar y desarmar y que además ocupe poco espacio.', 'https://assets.tramontina.com.br/upload/tramon/imagens/BEL/10835076PNM001G.png', 'https://www.instagram.com/gusanitor8/', '2021-11-21 23:20:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
