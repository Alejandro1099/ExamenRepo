<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>MostrarProducto</title>
</head>
<body>
<a href="{{route('producto.crear')}}" class="btn btn-primary">Crear Nuevo Producto</a>
    <table class="table">
    <thead>
    <tr>
        <th scope="col">Idproducto</th>
        <th scope="col">descripcion</th>
        <th scope="col">precio</th>
        <th scope="col">stock</th>
        <th scope="col">pagaIsv</th>
    </tr>
    </thead>
    <tbody>
        @foreach($productos as $item)
        <tr>
            <th scope="row">{{$item->Id}}</th>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->precio}}</td>
            <td>{{$item->stock}}</td>
            <td>{{$item->pagaIsv}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>