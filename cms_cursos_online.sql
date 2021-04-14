-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2021 a las 06:19:04
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms_cursos_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@admin.com', '123', '111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos`
--

CREATE TABLE `capitulos` (
  `id_capitulo` int(11) NOT NULL,
  `nombre_capitulo` varchar(50) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos-evento`
--

CREATE TABLE `capitulos-evento` (
  `id_capitulo` int(11) NOT NULL,
  `nombre_evento` varchar(100) NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `capitulos-evento`
--

INSERT INTO `capitulos-evento` (`id_capitulo`, `nombre_evento`, `id_evento`) VALUES
(1, 'Marcha', 1),
(2, 'ejee', 2),
(3, 'e', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id_category`, `category`) VALUES
(5, 'Java');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nombre_curso` varchar(50) NOT NULL,
  `categoria_curso` int(11) NOT NULL,
  `descripcion_curso` varchar(50) NOT NULL,
  `precio_curso` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `img_curso` varchar(50) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `profesor_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre_curso`, `categoria_curso`, `descripcion_curso`, `precio_curso`, `created_at`, `img_curso`, `id_admin`, `profesor_curso`) VALUES
(1, 'Node Js', 4, 'jejeje', '14', '1617557049', '6069f63910b76', 1, 2),
(2, 'PHP', 2, 'Drones', '12', '1617562263', '606a0a97dbc52', 1, 2),
(3, 'Java', 5, 'ejejejee', '12', '1617769469', '606d33fdc9319', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_users`
--

CREATE TABLE `cursos_users` (
  `id_cursos` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `nombre_evento` varchar(50) NOT NULL,
  `descripcion_evento` varchar(50) NOT NULL,
  `img_evento` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `profesor_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `nombre_evento`, `descripcion_evento`, `img_evento`, `created_at`, `id_admin`, `profesor_evento`) VALUES
(1, 'Charla de Programacion', 'teoria', '606a0af39c4bf', '1617562355', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_users`
--

CREATE TABLE `eventos_users` (
  `id_eventos` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id_posts` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img_posts` longblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id_profesor` int(11) NOT NULL,
  `nombre_profesor` varchar(50) NOT NULL,
  `descripcion_profesor` varchar(50) NOT NULL,
  `especialidad_profesor` varchar(50) NOT NULL,
  `img_profesor` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `nombre_profesor`, `descripcion_profesor`, `especialidad_profesor`, `img_profesor`, `created_at`, `id_admin`) VALUES
(1, 'Hans', 'Marido de Jerson', 'Java', '606a0b5089978', '1617562448', 1),
(2, 'Whiston', 'Marido de Ricardo', 'LLOfat a Bueno', '606d349a51d43', '1617769626', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `id_tema` int(11) NOT NULL,
  `nombre_tema` varchar(50) NOT NULL,
  `id_capitulos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id_tema`, `nombre_tema`, `id_capitulos`) VALUES
(7, 'Base de datos', 18),
(8, 'computacion en la nube', 19),
(9, 'ee', 21),
(10, 'as', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas-evento`
--

CREATE TABLE `temas-evento` (
  `id_tema` int(11) NOT NULL,
  `nombre_tema` varchar(100) NOT NULL,
  `id_capitulos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_users`, `name`, `lastname`, `username`, `email`, `password`, `created_at`, `imagen`) VALUES
(1, 'Piero', 'Becerra', 'Galdos5', 'piero_12@hotmail.com', '123', '1617574899', ''),
(2, 'Fernando', 'Tello', 'Cagon22', 'tello_21@hotmail.com', '$2y$10$t8yXgHqvFcL1voNMWMiQTezpMvbvel4JK5WYci1s.5L', '1617575623', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD PRIMARY KEY (`id_capitulo`);

--
-- Indices de la tabla `capitulos-evento`
--
ALTER TABLE `capitulos-evento`
  ADD PRIMARY KEY (`id_capitulo`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `cursos_users`
--
ALTER TABLE `cursos_users`
  ADD PRIMARY KEY (`id_cursos`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `eventos_users`
--
ALTER TABLE `eventos_users`
  ADD PRIMARY KEY (`id_eventos`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_posts`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indices de la tabla `temas-evento`
--
ALTER TABLE `temas-evento`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  MODIFY `id_capitulo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `capitulos-evento`
--
ALTER TABLE `capitulos-evento`
  MODIFY `id_capitulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cursos_users`
--
ALTER TABLE `cursos_users`
  MODIFY `id_cursos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eventos_users`
--
ALTER TABLE `eventos_users`
  MODIFY `id_eventos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id_posts` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `temas-evento`
--
ALTER TABLE `temas-evento`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
