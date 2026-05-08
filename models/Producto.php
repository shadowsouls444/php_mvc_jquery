<?php

require_once __DIR__ . '/../db/db.php';

class Producto {

    private $conexion;

    public function __construct(){
        $db = new DB();
        $this->conexion = $db->conectar(); 
    }

    public function getAllProductos(){
        $query = "SELECT nombre, precio, stock FROM productos";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getProductoById($id){
        $query = "SELECT nombre, precio, stock FROM productos WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute(['id' => $id]);

        return $stmt->fetch();
    }

    public function createProducto($nombre, $precio, $stock){
        $query = "INSERT INTO productos (nombre, precio, stock) VALUES (:nombre, :precio, :stock)";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute(['nombre' => $nombre, 'precio' => $precio, 'stock' => $stock]);
    }

    public function updateProducto($id, $nombre, $precio, $stock){
        $query = "UPDATE productos SET nombre = :nombre, precio = :precio, stock = :stock WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute(['nombre' => $nombre, 'precio' => $precio, 'stock' => $stock, 'id' => $id]);
    }

    public function deleteProducto($id){
        $query = "DELETE FROM productos WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute(['id' => $id]);
    }

}

?>