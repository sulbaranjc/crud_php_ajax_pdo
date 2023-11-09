<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Página con Bootstrap 5</title>

  <link rel="stylesheet" href="./css/estilos.css">
  <!-- CSS de Bootstrap -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="https://cdn.datatables.net/v/bs5/dt-1.13.7/datatables.min.css" rel="stylesheet">
 



</head>
<body>

<div class="container">
  <h1 class="text-center">CRUD con PHP, PDO, Ajax y Datatables.js</h1>
  <h1 class="text-center">Ing. Juan Carlos Sulbaran</h1>
  <div class="row">
    <div class="col-2 offset-10">
      <div class="text-center">
      <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary w-100"
                data-bs-toggle="modal" data-bs-target="#modalUsuario"
                id="botonCrear">
            <i class="bi bi-plus-circle-fill"></i> Crear
        </button>
      </div>
    </div>
  </div>
</div>

  <footer class="text-muted py-4">
    <div class="container">
      <p class="mb-0">Pie de página</p>
    </div>
  </footer>

  <!-- JavaScript -->
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/v/bs5/dt-1.13.7/datatables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
