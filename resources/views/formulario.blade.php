@extens('master')

@section('pagina')
@stop

@section('pestaña')
      <title>formulario</title>
@endsection

@section('contenido')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,instial-scale-1.0">
        <title>Validar</title>
</head>
<body>
    <form id="formulario" action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <label for="opinion">Opinión:</label>
        <select id="opinion" name="opinion">
            <option value="">Selectione una opción</opinion>

