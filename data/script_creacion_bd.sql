-- Aquí se incluirá el script de creación de la base de datos con las tablas
-- y el usuario con permisos de CRUD en la base de datos

DROP DATABASE IF EXISTS tienda;
CREATE DATABASE tienda;
USE tienda;
CREATE TABLE usuarios (
   id INT AUTO_INCREMENT PRIMARY KEY,
   usuario VARCHAR(30) UNIQUE NOT NULL,
   password VARCHAR(100) NOT NULL,
   rol ENUM ('admin','usuario','invitado') DEFAULT 'usuario',
   ultimo_acceso TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);
CREATE TABLE productos (
   id_producto INT AUTO_INCREMENT PRIMARY KEY,
   nombre VARCHAR(30) NOT NULL,
   descripcion VARCHAR(100),
   precio float NOT NULL
);

CREATE USER IF NOT EXISTS usuario_tienda@'localhost' IDENTIFIED BY '1234';
GRANT SELECT, INSERT, UPDATE, DELETE on tienda.* TO usuario_tienda@'localhost';