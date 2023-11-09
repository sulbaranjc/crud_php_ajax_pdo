drop database IF EXISTS crud_usuarios;
CREATE DATABASE IF NOT EXISTS crud_usuarios;
USE crud_usuarios; 
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    apellidos VARCHAR(150) NOT NULL,
    imagen VARCHAR(250) NOT NULL,
    telefono VARCHAR(30) NOT NULL,
    email VARCHAR(150) NOT NULL,
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO usuarios (nombre, apellidos, imagen, telefono, email) VALUES
('Juan', 'Pérez Gómez', 'juan_perez.jpg', '555-1234', 'juan.perez@example.com'),
('Ana', 'López Miró', 'ana_lopez.jpg', '555-5678', 'ana.lopez@example.com'),
('Carlos', 'Martín Ruiz', 'carlos_martin.jpg', '555-8765', 'carlos.martin@example.com'),
('Lucía', 'García Santos', 'lucia_garcia.jpg', '555-4321', 'lucia.garcia@example.com'),
('Elena', 'Torres Díaz', 'elena_torres.jpg', '555-9876', 'elena.torres@example.com');
