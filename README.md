1 clone the repository 
2 use docker compose up --build


CREATE DATABASE IF NOT EXISTS usuarios
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE usuarios;

CREATE TABLE IF NOT EXISTS visitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_fecha (fecha_registro DESC)
) ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;
