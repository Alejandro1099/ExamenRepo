<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>mostrarEmpleados</title>
</head>
<body>
    <a href="{{route('empleado.crear')}}" class="btn btn-primary">Crear Nuevo Empleado</a>
    <table class="table">
    <thead>
    <tr>
        <th scope="col">IdEmpleado</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">FechaIngreso</th>
        <th scope="col">Salario</th>
    </tr>
    </thead>
    <tbody>
        @foreach($empledos as $item)
        <tr>
            <th scope="row">{{$item->Idprestamo}}</th>
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellido}}</td>
            <td>{{$item->fechaIngreso}}</td>
            <td>{{$item->salario}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>