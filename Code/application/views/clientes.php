<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Search, Messages and Notifications Dropdowns -->
      <!-- Add your dropdowns here as per your original code -->
    </ul>
  </nav>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>NOMBRE</th>
                      <th>APELLIDO PATERNO</th>
                      <th>APELLIDO MATERNO</th>
                      <th>EMAIL</th>
                      <th>ROL</th>
                      <th>ACCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $numero = 1; ?>
                    <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                      <td><?= $numero++; ?></td>
                      <td><?= $usuario->nombre; ?></td>
                      <td><?= $usuario->apellido_Paterno; ?></td>
                      <td><?= $usuario->apellido_Materno; ?></td>
                      <td><?= $usuario->email; ?></td>
                      <td><?= $usuario->rol; ?></td>
                      <td>
                        <a href="#" class="btn btn-warning btn-sm btnEditar" data-toggle="modal" data-target="#modalEditarUsuario" data-id="<?= $usuario->id; ?>">Editar</a>
                        <a href="<?= base_url('index.php/usuarios/eliminar/' . $usuario->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">Eliminar</a>
                        <a href="<?= base_url('usuarios/deshabilitar/' . $usuario->id); ?>" class="btn btn-secondary btn-sm">Deshabilitar</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>N°</th>
                      <th>NOMBRE</th>
                      <th>APELLIDO PATERNO</th>
                      <th>APELLIDO MATERNO</th>
                      <th>EMAIL</th>
                      <th>ROL</th>
                      <th>ACCIONES</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

            <!-- Modal de edición -->
           <!-- Modal de edición -->
<div id="modalEditarUsuario" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open("usuarios/modificarbd", ['id' => 'formEditarUsuario']); ?>
          <input type="hidden" id="idUsuario" name="id">
          <div class="form-group">
            <label for="nombreUsuario">Nombre</label>
            <input type="text" class="form-control" id="nombreUsuario" name="nombre" value="">
          </div>
          <div class="form-group">
            <label for="apellido_PaternoUsuario">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellido_PaternoUsuario" name="apellido_Paterno" value="">
          </div>
          <div class="form-group">
            <label for="apellido_MaternoUsuario">Apellido Materno</label>
            <input type="text" class="form-control" id="apellido_MaternoUsuario" name="apellido_Materno" value="">
          </div>
          <div class="form-group">
            <label for="emailUsuario">Email</label>
            <input type="email" class="form-control" id="emailUsuario" name="email" value="">
          </div>
          <div class="form-group">
            <label for="rolUsuario">Rol</label>
            <input type="text" class="form-control" id="rolUsuario" name="rol" value="">
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
  <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar</button>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>

<!-- Agregar los scripts al final de la vista, antes del cierre de body -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Asegúrate de tener jQuery -->
        <script>
  $(document).ready(function() {
    $('.btnEditar').on('click', function() {
      var userId = $(this).data('id'); // Capturar el ID del usuario
      $.ajax({
        url: '<?= site_url("usuarios/getUsuario"); ?>', // URL del controlador para obtener datos del usuario
        type: 'GET',
        data: { id: userId }, // Pasar el ID del usuario
        dataType: 'json',
        success: function(data) {
          if (!data.error) {
            // Rellenar los campos del formulario con los datos del usuario
            $('#idUsuario').val(data.id);
            $('#nombreUsuario').val(data.nombre);
            $('#apellido_PaternoUsuario').val(data.apellido_Paterno);
            $('#apellido_MaternoUsuario').val(data.apellido_Materno);
            $('#emailUsuario').val(data.email);
            $('#rolUsuario').val(data.rol);
          } else {
            console.error(data.error);
          }
        }
      });
    });

    // Capturar el evento del botón "Guardar"
    $('#btnGuardar').on('click', function() {
      var formData = $('#formEditarUsuario').serialize(); // Serializar los datos del formulario

      $.ajax({
        url: '<?= site_url("usuarios/modificarbd"); ?>', // URL del controlador para modificar los datos
        type: 'POST',
        data: formData,
        success: function(response) {
          alert('Usuario actualizado correctamente.');
          $('#modalEditarUsuario').modal('hide'); // Cerrar el modal
          location.reload(); // Recargar la página para reflejar los cambios
        },
        error: function() {
          alert('Error al actualizar el usuario.');
        }
      });
    });
  });
</script>

        <?= form_close(); ?> <!-- Aquí termina el formulario -->
      </div>
    </div>
  </div>
</div>

          </div>
        </div>
      </div>
    </section>
  </div>
  
  <!-- Scripts -->


  <!-- DataTables Scripts -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
