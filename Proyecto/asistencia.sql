CREATE TABLE `asistencia` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nombre` text COLLATE utf8mb4_spanish2_ci NOT NULL,
    `nombre_usuario` text COLLATE utf8mb4_spanish2_ci NOT NULL,
    `no_cuenta` text COLLATE utf8mb4_spanish2_ci NOT NULL,
    `direccion` text COLLATE utf8mb4_spanish2_ci NOT NULL,
    `telefono` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
    `correo` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;