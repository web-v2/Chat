<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('#categoria').DataTable({
                "lengthMenu": [[5, 10, 20, 50, -1], [5, 10, 20, 50, "All"]]
            });
        });
    </script>

</head>
<body>
<div class="card">
  <div class="card-body">

<table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%" id="categoria">
    <thead class="bg-success text-white">
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col"><a href="categorias/create" class="btn btn-lg btn-warning">Crear</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
        <tr>
        <td scope="row" >{{$item->id}}</td>
        <td scope="row" >{{$item->name}}</td>
        <td scope="row" >{{$item->email}}</td>
        <td scope="row" >
        btn chat
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</body>
</html>
