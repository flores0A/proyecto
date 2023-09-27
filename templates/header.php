<?php
$url_base="http://localhost/proyecto/";
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUF+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>


    
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <nav class="navbar navbar-dark bg-dark navbar-expand navbar-light bg-light">
      <ul class="nav navbar-nav">
          <li class="nav-item">
              <a class="nav-link active" href="#" aria-current="page"> Sistema Farmacia <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base; ?>secciones/empleados/">Empleados</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base; ?>secciones/clientes/">Clientes</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base; ?>secciones/Productos">Productos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base; ?>secciones/proveedores/">Proveedores</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base; ?>secciones/puestos">Puestos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base; ?>secciones/usuarios/">Usuario</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base; ?>secciones/ventas/">Ventas</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo $url_base; ?>secciones/empleados/">cerrar session</a>
          </li>
      </ul>
  </nav>
  <main class="container">