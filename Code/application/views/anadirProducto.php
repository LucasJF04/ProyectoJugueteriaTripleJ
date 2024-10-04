

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Widgets</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Widgets</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
           
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
           
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
           
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- =========================================================== -->
       
        <div class="row">
  <!-- Fila 1 -->
  <div class="col-md-12 col-sm-6 col-12">
    <div class="card">
      <div class="card-body">
        <h1>Gestion de Productos</h1>
        <!-- Menús para Añadir y Editar Productos -->
        <div class="row mb-4">
          <div class="col-md-6">
            <!-- Botón para abrir el modal de Añadir Producto -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAgregarProducto">
              <i class="fas fa-plus"></i> Añadir Producto
            </button>
          </div>
          <div class="col-md-6">
            <!-- Botón para abrir el modal de Editar Producto -->
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editarModal">
                Editar Producto
            </button>
          </div>
        </div>

        <!-- Modal para Añadir Producto -->
        <div class="modal fade" id="modalAgregarProducto" tabindex="-1" aria-labelledby="modalAgregarProductoLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarProductoLabel">Añadir Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('index.php/productos/agregar'); ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="imagenProducto">Imagen del Producto:</label>
                    <input type="file" class="form-control-file" id="imagenProducto" name="imagenProducto" accept="image/*">
                  </div>
                  <div class="form-group">
                    <label for="nombreProducto">Nombre del Producto:</label>
                    <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" placeholder="Ingrese el nombre" required>
                  </div>
                  <div class="form-group">
                    <label for="descripcionProducto">Descripción:</label>
                    <input type="text" class="form-control" id="descripcionProducto" name="descripcionProducto" placeholder="Ingrese la descripción">
                  </div>
                  <div class="form-group">
                    <label for="precioProducto">Precio:</label>
                    <input type="number" step="0.01" class="form-control" id="precioProducto" name="precioProducto" placeholder="Ingrese el precio" required>
                  </div>
                  <div class="form-group">
                    <label for="stockProducto">Stock:</label>
                    <input type="number" class="form-control" id="stockProducto" name="stockProducto" placeholder="Ingrese el stock disponible" required>
                  </div>
                  <button type="submit" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Agregar
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal para Editar Producto -->
        <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editarModalLabel">Editar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Campo de búsqueda en el modal -->
        <input type="text" id="buscarProductoEditar" class="form-control mb-3" placeholder="Buscar por nombre o descripción">

        <!-- Lista de productos que se mostrarán y se filtrarán -->
        <div id="listaProductosEditar" style="max-height: 300px; overflow-y: auto;"></div>

        <!-- Formulario para editar el producto seleccionado -->
        <form id="formEditarProducto" style="display: none;" method="POST" action="<?= base_url('index.php/productos/editar'); ?>">
          <input type="hidden" id="productoId" name="productoId">
          <div class="form-group">
            <label for="nombreProductoEditarForm">Nombre del Producto:</label>
            <input type="text" class="form-control" id="nombreProductoEditarForm" name="nombreProducto" required>
          </div>
          <div class="form-group">
            <label for="descripcionProductoEditarForm">Descripción:</label>
            <input type="text" class="form-control" id="descripcionProductoEditarForm" name="descripcionProducto">
          </div>
          <div class="form-group">
            <label for="precioProductoEditarForm">Precio:</label>
            <input type="number" step="0.01" class="form-control" id="precioProductoEditarForm" name="precioProducto" required>
          </div>
          <div class="form-group">
            <label for="stockProductoEditarForm">Stock:</label>
            <input type="number" class="form-control" id="stockProductoEditarForm" name="stockProducto" required>
          </div>
          <button type="submit" class="btn btn-success">Guardar Cambios</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script>
  // Buscar producto por nombre o descripción
  document.getElementById('buscarProductoEditar').addEventListener('keyup', function() {
    var criterio = this.value;

    // Realizar petición AJAX para buscar productos
    $.ajax({
      url: '<?= base_url("index.php/productos/buscar"); ?>',
      method: 'POST',
      data: { criterio: criterio },
      success: function(response) {
        var productos = JSON.parse(response);
        var lista = $('#listaProductosEditar');
        lista.empty();
        
        if (productos.length > 0) {
          productos.forEach(function(producto) {
            lista.append(`
              <div class="producto-item-editar" data-id="${producto.id}">
                <h5 class="nombreProductoEditar">${producto.nombre}</h5>
                <p class="descripcionProductoEditar">${producto.descripcion}</p>
                <button type="button" class="btn btn-primary seleccionarProducto" data-id="${producto.id}">
                  Editar este producto
                </button>
                <hr>
              </div>
            `);
          });
        } else {
          lista.append('<p>No se encontraron productos.</p>');
        }
      }
    });
  });

  // Manejar la selección de producto
  $(document).on('click', '.seleccionarProducto', function() {
    var productoId = $(this).data('id');

    // Rellenar el formulario con los datos del producto seleccionado (puedes obtener los datos por AJAX si es necesario)
    $.ajax({
      url: '<?= base_url("index.php/productos/detalle"); ?>/' + productoId,
      method: 'GET',
      success: function(response) {
        var producto = JSON.parse(response);

        $('#productoId').val(producto.id);
        $('#nombreProductoEditarForm').val(producto.nombre);
        $('#descripcionProductoEditarForm').val(producto.descripcion);
        $('#precioProductoEditarForm').val(producto.precio);
        $('#stockProductoEditarForm').val(producto.stock);

        // Mostrar el formulario
        $('#formEditarProducto').show();
      }
    });
  });
</script>


<!-- Modal -->
<div class="modal fade" id="transferModal" tabindex="-1" role="dialog" aria-labelledby="transferModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="transferModalLabel">Formulario de Transferencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario de Transferencia -->
        <form action="<?php echo site_url('usuarios/transferir'); ?>" method="post">
          <div class="form-group">
            <label for="idCuentaOrigen">Cuenta Origen:</label>
            <input type="text" name="idCuentaOrigen" id="idCuentaOrigen" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="idCuentaDestino">Cuenta Destino:</label>
            <input type="text" name="idCuentaDestino" id="idCuentaDestino" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary">Transferir</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

  <div class="col-md-3 col-sm-6 col-12">
    
  </div>
  <div class="col-md-3 col-sm-6 col-12">
    
  </div>
  <div class="col-md-3 col-sm-6 col-12">
   
  </div>
</div>



  


    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
