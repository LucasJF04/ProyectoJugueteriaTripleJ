<div class="modal fade" id="modalEditarUsuario" tabindex="-1" role="dialog" aria-labelledby="modalEditarUsuarioLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarUsuarioLabel">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formEditarUsuario" action="<?= site_url('usuarios/actualizar'); ?>" method="post">
                  <input type="hidden" id="idUsuario" name="id"> <!-- Campo oculto para el ID del usuario -->
                  <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" id="nombre" name="nombre" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="apellido_Paterno">Apellido Paterno</label>
                      <input type="text" id="apellido_Paterno" name="apellido_Paterno" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="apellido_Materno">Apellido Materno</label>
                      <input type="text" id="apellido_Materno" name="apellido_Materno" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="rol">Rol</label>
                      <select id="rol" name="rol" class="form-control" required>
                          <option value="admin">admin</option>
                          <option value="usuario">Cliente</option>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Actualizar</button>
              </form>
            </div>
        </div>
    </div>
</div>
<script>
function cargarDatosUsuario(id) {
    fetch('<?= base_url('usuarios/obtener_usuario/'); ?>' + id)
        .then(response => response.json())
        .then(data => {
            if (!data.error) {
                // Rellena el formulario del modal con los datos del usuario
                document.getElementById('idUsuario').value = data.id;
                document.getElementById('nombre').value = data.nombre;
                document.getElementById('apellido_Paterno').value = data.apellido_Paterno;
                document.getElementById('apellido_Materno').value = data.apellido_Materno;
                document.getElementById('email').value = data.email;
                document.getElementById('rol').value = data.rol;

                // Muestra el modal después de cargar los datos
                $('#modalEditarUsuario').modal('show');
            } else {
                console.error(data.error);
            }
        })
        .catch(error => console.error('Error:', error));
}
</script>

