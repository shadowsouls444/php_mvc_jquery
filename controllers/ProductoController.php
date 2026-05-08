<?php

require_once 'models/Producto.php';

class ProductoController {

    private $model;

    public function __construct() {
        $this->model = new Producto();
    }

    public function obtenerProductos(){

        try {

            $productos = $this->model->getAllProductos();
            return $productos;

        } catch (Exception $e){

            return 'Ocurrio un error';

        }
    }

    public function obtenerProductoPorId($id){
        try {

            $producto = $this->model->getProductoById($id);
            return $producto;

        } catch (Exception $e) {

            return 'Ocurrio un error';

        }
    }

    public function insertarProducto($nombre, $precio, $stock){

        try {

            $this->model->createProducto($nombre, $precio, $stock);
            
        } catch (Exception $e){

            return 'Ocurrio un error';

        }
    }

    public function actualizarProducto($id, $nombre, $precio, $stock){

        try {

            $this->model->updateProducto($id, $nombre, $precio, $stock);
            
        } catch (Exception $e){

            return 'Ocurrio un error';

        }
    }

    public function eliminarProducto($id){

        try {

            $this->model->deleteProducto($id);

        } catch (Exception $e){

            return 'Ocurrio un error';

        }
    }

}

?>