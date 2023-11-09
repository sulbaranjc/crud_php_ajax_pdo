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

<div class="container fondo">
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
<br/>
<br/>
<div class="table-responsive">
    <table id="datos_usuario" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Imagen</th>
                <th>Fecha de Creación</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

  <footer class="text-muted py-4">
    <div class="container">
      <p class="mb-0">Pie de página</p>
    </div>
  </footer>

  <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  method="POST" id="formulario" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-body">
              <label for="nombre">Ingrese el nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control">
              <br />
              <label for="apellidos">Ingrese los apellidos</label>
              <input type="text" name="apellidos" id="apellidos" class="form-control">
              <br />

              <label for="telefono">Ingrese el teléfono</label>
              <input type="text" name="telefono" id="telefono" class="form-control">
              <br />

              <label for="email">Ingrese el email</label>
              <input type="email" name="telefono" id="email" class="form-control">
              <br />
              <label for="imagen">Seleccione una imagen</label>
              <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
              <span id="imagen-subida"></span>
              <br />
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_usuario" id="id_usuario">
              <input type="hidden" name="operacion" id="operacion">
              <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- JavaScript -->
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/v/bs5/dt-1.13.7/datatables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


 <script type="text/javascript">
  $(document).ready(function(){
    var dataTable = $('#datos_usuario').DataTable({
      "processing": true,
      "serverSide": true,
      "order": [],
      "ajax": {
          url: "obtener_registros.php",
          type: "POST"
      },
      "columnDefs": [
          {
              "targets": [0, 3, 4],
              "orderable": false,
          },
      ]
    });
  });
</script>
</body>
</html>
