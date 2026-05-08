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
        <form>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre del producto">
            </div>

            <br>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" placeholder="Precio del producto">
            </div>

            <br>

            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" placeholder="Stock del producto">
            </div>

            <br>

            <button id="btnSubmit" type="submit" class="btn btn-primary">Insertar producto</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#btnSubmit').click(function (e) {

                e.preventDefault();

                const nombre = $('#nombre').val()
                const precio = $('#precio').val()
                const stock = $('#stock').val()

                if (nombre === '' || precio === '' || stock === '') {
                    alert('Todos los campos son obligatorios');
                    return;
                }

                if (precio <= 0) {
                    alert("El precio debe ser mayor a 0")
                    return
                }

                if (precio >= 10000000) {
                    alert("El precio debe ser menor a 10,000,000 COP")
                    return
                }

                if (stock <= 0) {
                    alert("El stock debe ser mayor a 0")
                    return
                }

                if (stock >= 2000) {
                    alert("El stock debe ser menor a 2000 unidades")
                    return
                }

                let stockInt = Number(stock)
                if (!Number.isInteger(stockInt)) {
                    alert("El stock debe ser un numero entero")
                    return
                }

                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/MAB/controllers/ProductoController.php',
                    data: {
                        accion: "insertar",
                        nombre: nombre,
                        precio: precio,
                        stock: stock
                    },
                    success: function (response) {
                        alert('Producto insertado correctamente')
                        $('#nombre').val('')
                        $('#precio').val('')
                        $('#stock').val('')
                    },
                    error: function (response) {
                        alert('Ocurrio un error al insertar el producto')
                    }
                })
            });
        });
    </script>

</body>

</html>