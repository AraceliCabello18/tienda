create database tienda;
use tienda;

CREATE TABLE `t_accesorios` (
  `id_imagen` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `t_imagenes` (
  `id_imagen` int(11) NOT NULL,
  `modelo` text DEFAULT NULL,
  `ruta` text DEFAULT NULL,
  `extension` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `t_ropa` (
  `id_imagen` int(11) NOT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` varchar(245) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

