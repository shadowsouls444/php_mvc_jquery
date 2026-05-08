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
            <a href="http://localhost/MAB/views/ListProducto.php" class="btn btn-success">
                Gestionar productos
            </a>

            <a href="http://localhost/MAB/views/FormProducto.php" class="btn btn-primary">
                Añadir
            </a>
        </form>
    </nav>

    <br>

    <div class="container">
        <button id="btnVerTodos" class="btn btn-outline-primary">Ver todos los productos</button>

        <br>
        <br>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody id="tBody"></tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>

    <script>
        $(document).ready(function () {

            $('#btnVerTodos').click(function () {

                $.ajax({
                    type: 'GET',
                    url: 'http://localhost/MAB/controllers/ProductoController.php',
                    dataType: 'json',
                    data: {
                        accion: "obtenerProductos"
                    },
                    success: function (response) {

                        response.forEach(function (producto) {
                            var filas = '<tr>' +
                                '<td>' + producto['nombre'] + '</td>' +
                                '<td>' + producto['precio'] + '</td>' +
                                '<td>' + producto['stock'] + '</td>' +
                                '<td>' +
                                '<a href="#" class="btn btn-sm btn-primary">Editar</a>' +
                                '<a href="#" class="btn btn-sm btn-danger">Eliminar</a>' +
                                '</td>' +
                                '</tr>';

                            $('#tBody').append(filas);
                        })

                    },
                    error: function (response) {
                        alert('Ocurrio un error al consultar los productos')
                    }
                })

            })

        })
    </script>
</body>

</html>