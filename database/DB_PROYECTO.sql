-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para movilidad_i
CREATE DATABASE IF NOT EXISTS `movilidad_i` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `movilidad_i`;

-- Volcando estructura para tabla movilidad_i.convenios
CREATE TABLE IF NOT EXISTS `convenios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `institucion` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_inicio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_finalizacion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `codigo_convenio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_pais` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'indefinido',
  `vigencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsable_inicial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion_correspondencia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_rector` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacto_sinu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objeto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `participacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=358 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla movilidad_i.curriculos
CREATE TABLE IF NOT EXISTS `curriculos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seccional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_conocimiento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facultad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `componente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `mes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `año` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla movilidad_i.idiomas
CREATE TABLE IF NOT EXISTS `idiomas` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `personas_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `FK_idiomas_personas` (`personas_id`),
  CONSTRAINT `FK_idiomas_personas` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla movilidad_i.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla movilidad_i.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla movilidad_i.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Identificacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tipo_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Programa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Año` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_nacimiento` date DEFAULT NULL,
  `Ciudad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `F_icfes` date DEFAULT NULL,
  `Puntaje_icfes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `N_madre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `N_padre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `N_hermano` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ocup_hermano` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ocup_madre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ocup_padre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bachillerato` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Año_grado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estudios_adicionales` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Idiomas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Opciones_carrera` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Autoconfianza` int(11) DEFAULT NULL,
  `Compromiso` int(11) DEFAULT NULL,
  `Expectativas` int(11) DEFAULT NULL,
  `Intereses` int(11) DEFAULT NULL,
  `Puntaje` int(11) DEFAULT NULL,
  `Admision` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Inscripcion` (`id`),
  UNIQUE KEY `Identificacion` (`Identificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=54776 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla movilidad_i.redes
CREATE TABLE IF NOT EXISTS `redes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unidad` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asociacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ubicacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objeto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `costo_membresia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `periodicidad_pago` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_vinculacion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado_vinculacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actividad_realizada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_actividad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_participantes` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `impacto_actividad` text COLLATE utf8mb4_unicode_ci,
  `responsable_unisinu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagina_web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla movilidad_i.tipo_usuario
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla movilidad_i.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TipoUsuario` int(11) NOT NULL,
  `Programa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
