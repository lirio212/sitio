@extens('master')

@section('pestaña')
      <title>Editar  Alumno</title>
@endsection

@section('titulo')
<h1>Editar alumno</h1>
@stop

@section('contenido')
<form action="{{url('/actualizarAlumnos')}}/{{ $alumno->id}}" method="POST">
</form>
@stop
