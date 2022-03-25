-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-03-2022 a las 15:07:27
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tareas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_03_24_200309_create_tareas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `nombre`, `fecha_inicio`, `fecha_fin`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'tarea-\'.0\'', NULL, NULL, 1, '2022-03-25 20:01:32', '2022-03-25 20:03:14'),
(2, 'tarea-\'.1\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(3, 'tarea-\'.2\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(4, 'tarea-\'.3\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(5, 'tarea-\'.4\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(6, 'tarea-\'.5\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(7, 'tarea-\'.6\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(8, 'tarea-\'.7\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(9, 'tarea-\'.8\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(10, 'tarea-\'.9\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(11, 'tarea-\'.10\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(12, 'tarea-\'.11\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(13, 'tarea-\'.12\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(14, 'tarea-\'.13\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(15, 'tarea-\'.14\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(16, 'tarea-\'.15\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(17, 'tarea-\'.16\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(18, 'tarea-\'.17\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(19, 'tarea-\'.18\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(20, 'tarea-\'.19\'', '2022-03-25', '2022-03-25', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(21, 'CREAR', '2022-03-25', '2022-03-31', NULL, '2022-03-25 20:03:40', '2022-03-25 20:03:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `nombre`, `telefono`, `direccion`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'usuario0', 'nombre0', NULL, 'direccion0', 'email0@gmail.com', NULL, '$2y$10$xPr.L4WE6.r6tomcBiKTC.vDQEFrU.a1myNGij7ND4nHWV08xkBKa', NULL, '2022-03-25 20:01:32', '2022-03-25 20:01:32'),
(2, 'usuario1', 'nombre1', NULL, 'direccion1', 'email1@gmail.com', NULL, '$2y$10$eYMXsMZWOa7i0CYk4gY/7uFlwHoHaxyvwpMfFUShbskXK6iMQ0452', NULL, '2022-03-25 20:01:33', '2022-03-25 20:01:33'),
(3, 'usuario2', 'nombre2', NULL, 'direccion2', 'email2@gmail.com', NULL, '$2y$10$iMZsj2OOdnB3to.22BoJ3Ob0OSs8PsFVFV7txtzSGsyM/1z6KKuue', NULL, '2022-03-25 20:01:33', '2022-03-25 20:01:33'),
(4, 'usuario3', 'nombre3', NULL, 'direccion3', 'email3@gmail.com', NULL, '$2y$10$ifjgIOCsvUnZJTnQFGukNeZRs5kYfxfuf1oKDomNZIH8PkBvzNYIm', NULL, '2022-03-25 20:01:33', '2022-03-25 20:01:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
