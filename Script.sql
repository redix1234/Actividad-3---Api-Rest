-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS TiendaElectronica;

-- Usar la base de datos
USE TiendaElectronica;

CREATE TABLE categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);

CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    cantidad INT NOT NULL,
    id_categoria INT NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
);

-- Inserción de categorías
INSERT INTO categorias (nombre) VALUES
('Smartphones'),
('Computadoras'),
('Accesorios'),
('Audio'),
('Televisores'),
('Electrodomésticos pequeños');

-- Inserción de productos
INSERT INTO productos (nombre, precio, cantidad, id_categoria) VALUES
-- Smartphones
('iPhone 14', 1200.00, 10, 1),
('Samsung Galaxy S23', 1100.00, 15, 1),
('Xiaomi Redmi Note 12', 300.00, 30, 1),
('Google Pixel 7', 900.00, 8, 1),

-- Computadoras
('MacBook Pro', 2000.00, 5, 2),
('Dell XPS 15', 1500.00, 7, 2),
('HP Pavilion', 700.00, 12, 2),
('Lenovo ThinkPad', 1000.00, 10, 2),

-- Accesorios
('Cargador inalámbrico', 40.00, 50, 3),
('Funda para celular', 15.00, 80, 3),
('Teclado mecánico', 100.00, 20, 3),
('Mouse inalámbrico', 30.00, 35, 3),

-- Audio
('Audífonos Sony WH-1000XM5', 300.00, 10, 4),
('Bocina JBL Charge 5', 180.00, 25, 4),
('Micrófono HyperX', 120.00, 15, 4),
('Barra de sonido Samsung', 250.00, 5, 4),

-- Televisores
('Samsung Smart TV 50\"', 600.00, 8, 5),
('LG OLED TV 55\"', 1200.00, 5, 5),
('TCL 4K TV 43\"', 400.00, 10, 5),
('Sony Bravia XR 65\"', 1400.00, 3, 5),

-- Electrodomésticos pequeños
('Aspiradora portátil', 150.00, 20, 6),
('Licuadora', 60.00, 25, 6),
('Cafetera eléctrica', 80.00, 15, 6),
('Horno microondas', 200.00, 8, 6);

SELECT * FROM categorias;
SELECT * FROM productos;

