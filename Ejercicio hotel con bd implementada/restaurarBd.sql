-- Script para restaurar la base de datos

-- Eliminar la tabla si existe
DROP TABLE IF EXISTS hoteles;

-- Crear la tabla de nuevo
CREATE TABLE hoteles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Estrellas INT NOT NULL,
    Habitaciones INT NOT NULL,
    Poblacion VARCHAR(255) NOT NULL,
    Direccion VARCHAR(255) NOT NULL,
    UNIQUE (id)
);

-- Insertar datos de ejemplo
INSERT INTO hoteles (Nombre, Estrellas, Habitaciones, Poblacion, Direccion) VALUES
('Bellagio Las Vegas', 5, 3933, 'Las Vegas, Nevada 89109', '3600 Las Vegas Boulevard South'),
('Commodore Hotel Busan', 4, 500, 'Busan, Corea del Sur', '151 Junggu-ro, Jung-gu'),
('Excalibur Hotel & Casino', 3, 3991, 'Las Vegas, Nevada 89109', '3850 Las Vegas Boulevard South'),
('Hotel Las Arenas Balneario Resort', 5, 253, 'Valencia, España', 'Eugenia Viñes 22-24, 46011'),
('Hotel Burj Al Arab', 7, 202, 'Dubai, Emiratos Árabes Unidos', 'Umm Suqeim 3'),
('Four Seasons Hotel George-V', 5, 244, 'Paris, Francia', '31 Av. George V'),
('Hotel Chicote', 4, 456, 'Rio de Janeiro, Brasil', 'Gran Via'),
('Hotel Rey Vincius jr II', 5, 500, 'Rio de Janeiro, Brasil', '5600, Avenida Pele VI');
