@extends('master')

@section('pestana')
</title>Formulario</title>
@endsection

@section('titulo')
</h1>Formulario de opinion</h1>
@stop

@section('contenido')
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validar</title>
</head>
<body>
  
  <form id="formulario" action="{{url('/guardarOpinion') }}" method="post">
    @csrf
  <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <br>
    <label for="opinion">Opinión:</label>
    <select id="opinion" name="opinion">
        <option value="">Seleccione una opción</option>
        <option value="1">Buena</option>
        <option value="2">Medio</option>
        <option value="3">Mala</option>
    </select>
    <br>
    <input type="checkbox" id="terminos" name="terminos">
    <label for="terminos" class="labelCheck">Acepto los términos</label>
    <br>
    <button type="submit">Enviar</button>
    <p id="mensajeError"></p>
</form>


</body>
</html>
@stop
