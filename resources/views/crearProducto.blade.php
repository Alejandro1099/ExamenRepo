<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Crear Empleado</title>
</head>
<body>
<div class="container">

    <h1>Creación Producto</h1>
    
    <form method="POST" action="{{ route('producto.crear') }}">

        @csrf
        @method('POST')

        <div class="row">

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="titulo" placeholder="Another input placeholder">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">precio</label>
                <input type="text" class="form-control" name="precio" id="anioDebut" placeholder="Another input placeholder">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">stock</label>
                <input type="text" class="form-control" name="stock" id="duracion" placeholder="Another input placeholder">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">ISV</label>
                <input type="text" class="form-control" name="isv" id="genero" placeholder="Another input placeholder">
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a class="btn btn-secondary" data-bs-dismiss="modal" href="{{ route('producto.mostrar') }}">Cancelar</a>

        </div>

    </form>

  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>