### Instrucciones para correr en el back el servidor

## 1. PREPARAR LA BASE DE DATOS
1. Abre MySQL (puede ser MySQL Workbench o consola).
2. Ejecuta el siguiente Script en MySQL:

```sql
CREATE DATABASE MAB;

USE MAB;

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL
);

INSERT INTO productos (nombre, precio, stock) VALUES
('Esponja', 2500.00, 10),
('Laptop', 3500000.00, 5),
('Mouse', 80000.00, 20),
('Teclado', 150000.00, 15),
('Monitor', 900000.00, 8);
```

## 2. CONFIGURACION DEL BACKEND
1. Clonar o copiar el proyecto dentro de: **C:\xampp\htdocs**
2. Iniciar servicios en XAMPP:
- Apache
- MySQL

## 3. INGRESAR AL INDEX.PHP
ingresa esta url en el buscador: **http://localhost/MAB/index.php**
