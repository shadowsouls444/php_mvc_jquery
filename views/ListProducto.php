<?php

require_once __DIR__ . '/../controllers/ProductoController.php';

$productoController = new ProductoController();
$productos = $productoController->obtenerProductos();
                
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>MAB Ingenieria de valor</title>
</head>

<body>
    <nav class="bg-dark p-3">
        <form class="form-inline">
            <a href="views/ListProducto.php" class="btn btn-success">
    Ver todos los productos
</a>

<a href="views/FormProducto.php" class="btn btn-primary">
    Añadir
</a>
        </form>
    </nav>

    <br>

    <div class="container">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) { ?>
                <tr>
                    <td><?= $producto['nombre'] ?></td>
                    <td>$<?= $producto['precio'] ?></td>
                    <td><?= $producto['stock'] ?></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Editar</a>
                        <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>

    <script>
        $(document).ready(function () {

            $('#btnVerTodos').click(function () {
        
            console.log($productos)

            })

        })
    </script>
</body>

</html>