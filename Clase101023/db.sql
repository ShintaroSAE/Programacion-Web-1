DROP SCHEMA IF EXISTS `asistencia`;

CREATE SCHEMA IF NOT EXISTS `asistencia` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

USE `asistencia`;

CREATE TABLE `usuarios`(
    `nombre` text not null,
    `direccion` text not null,
    `telefono` varchar(15) not null,
    `correo` text not null,
    `nombre_usuario` text not null,
    `password` varchar(25) not null,
    `fecha_registro` datetime not null default current_timestamp on update current_timestamp,
    `permisos` int(11) not null default '1',
    `id` int(11) not null auto_increment,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `usuarios` VALUES ('Aaron Velasco Agustin','Gloria no 15','5626198295','aaronvelasco@aragon.unam.mx','HuronMarron','123456','2023-08-22 17:20:57',1,1);
INSERT INTO `usuarios` VALUES ('Eduardo Salazar Aguilar','San Pedro 7','5624786689','eduardosalazar93@aragon.unam.mx','ShintaroSAE','12218476','2023-10-10 12:30:57',1,2);