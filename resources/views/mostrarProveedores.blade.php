<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>mostrarProveedores</title>
</head>
<body>
<a href="{{route('proveedor.crear')}}" class="btn btn-primary">Crear Nuevo Proveedor</a>
    <table class="table">
    <thead>
    <tr>
        <th scope="col">Idproveedor</th>
        <th scope="col">Nombre</th>
        <th scope="col">FechaRegistro</th>
        <th scope="col">telefono</th>
        <th scope="col">correo</th>
    </tr>
    </thead>
    <tbody>
        @foreach($proveedor as $item)
        <tr>
            <th scope="row">{{$item->Idproveedor}}</th>
            <td>{{$item->nombre}}</td>
            <td>{{$item->fechaRegistro}}</td>
            <td>{{$item->telefono}}</td>
            <td>{{$item->correo}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>