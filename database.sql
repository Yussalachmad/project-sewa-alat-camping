CREATE DATABASE IF NOT EXISTS fifa_adventure;
USE fifa_adventure;

CREATE TABLE barang (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  harga INT,
  gambar VARCHAR(100)
);

INSERT INTO barang (nama, harga, gambar) VALUES
('Tenda Dome 2 Orang', 50000, 'tenda.jpg'),
('Sleeping Bag Premium', 30000, 'sleepingbag.jpg'),
('Kompor Portable', 40000, 'kompor.jpg');
