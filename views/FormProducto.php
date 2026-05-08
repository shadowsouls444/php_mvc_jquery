<?php

require_once __DIR__ . '/../controllers/ProductoController.php';

$productoController = new ProductoController();
                
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
            <button id="btnVerTodos" class="btn btn-success" type="button">Ver todos los productos</button>
            <button class="btn btn-primary" type="button">Añadir</button>
        </form>
    </nav>

    <br>

    <div class="container">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="float" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>

    <script>
        $(document).ready(function () {

            $('#btnVerTodos').click(function () {



            })

        })
    </script>
</body>

</html>