<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('pestana')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Mi Sitio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/presentacion">Presentación</a></li>
        <li class="nav-item"><a class="nav-link" href="/caracteristicas">Características</a></li>
        <li class="nav-item"><a class="nav-link" href="/historia">Historia</a></li>
        <li class="nav-item"><a class="nav-link" href="/ubicacion">Ubicación</a></li>
        <li class="nav-item"><a class="nav-link" href="/formulario-opinion">Opinión</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
    <h1>@yield('titulo')</h1>
    <div>
        @yield('contenido')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>