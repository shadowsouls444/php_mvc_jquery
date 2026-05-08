<?php

require_once __DIR__ . '/../models/Producto.php';

class ProductoController {

    private $model;

    public function __construct() {
        $this->model = new Producto();
    }

    public function obtenerProductos(){

        try {

            $productos = $this->model->getAllProductos();
            return json_encode($productos);

        } catch (Exception $e){

            return 'Ocurrio un error';

        }
    }

    public function obtenerProductoPorId($id){
        try {

            $producto = $this->model->getProductoById($id);
            return json_encode($producto);

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

// Recibir peticiones
if(isset($_POST['accion']) && $_POST['accion'] == 'insertar'){

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $productoController = new ProductoController();
    $productoController->insertarProducto($nombre, $precio, $stock);

}

if(isset($_GET['accion']) && $_GET['accion'] == 'obtenerProductos'){

    $productoController = new ProductoController();
    $productos = $productoController->obtenerProductos();
    echo $productos;
}

?>