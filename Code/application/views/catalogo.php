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
            <h1>CATALOGO</h1>
            
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
  <!-- Campo de búsqueda -->
  <div class="col-12 mb-4">
    <input type="text" id="buscarProducto" class="form-control" placeholder="Buscar producto por nombre o descripción...">
  </div>
</div>

<script>
 $(document).ready(function(){
  $('.btn-add-cart').click(function(e){
    e.preventDefault();

    // Obtener datos del producto
    let id_producto = $(this).data('id');
    let cantidad = $(this).siblings('.cantidad-producto').val();

    // Verificar si los datos se obtienen correctamente
    console.log("ID Producto:", id_producto);
    console.log("Cantidad:", cantidad);

    // Enviar datos al servidor usando AJAX
    $.ajax({
      url: '<?= site_url('carrito/agregar'); ?>',
      type: 'POST',
      data: {
        id_producto: id_producto,
        cantidad: cantidad
      },
      success: function(response) {
        console.log("Respuesta del servidor:", response); // Verificar la respuesta
        actualizarCarrito();
      },
      error: function(xhr, status, error) {
        console.log("Error en la solicitud:", error); // Verificar errores de solicitud
        alert('Error al añadir producto al carrito');
      }
    });
  });
});
  // Función para actualizar el carrito después de agregar un producto
  function actualizarCarrito() {
    $.ajax({
      url: '<?= site_url('carrito/mostrar'); ?>', // Método que muestra el carrito
      type: 'GET',
      success: function(response) {
        $('#tablaCarrito tbody').html(response); // Actualiza la tabla del carrito con los nuevos datos
      },
      error: function() {
        alert('Error al actualizar el carrito');
      }
    });
  }
</script>

<div class="row" id="contenedorProductos">
  <?php if (!empty($productos)) : ?>
    <?php foreach ($productos as $producto): ?>
    <div class="col-md-3 col-sm-6 col-12 producto">
      <div class="card" style="margin: 10px;">
        <img src="<?= base_url('uploads/' . $producto->imagen); ?>" class="card-img-top" alt="<?= $producto->nombre; ?>">
        <div class="card-body">
          <h5 class="card-title nombre-producto"><?= $producto->nombre; ?></h5>
          <p class="card-text descripcion-producto"><?= $producto->descripcion; ?></p>
          <p class="card-text"><strong>Precio:</strong> Bs<?= $producto->precio; ?></p>
          <p class="card-text"><strong>Stock:</strong> <?= $producto->stock; ?> unidades</p>
          <div class="d-flex justify-content-center">
              <button class="btn btn-primary btn-add-cart" data-id="<?= $producto->id_producto; ?>">Añadir al carrito</button>
              <input type="number" class="form-control mx-auto text-center cantidad-producto" style="width: 70px;" min="1" value="1">
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p>No hay productos disponibles en este momento.</p>
  <?php endif; ?>
</div>
<style>
    .card {
        margin: 10px;
        height: 400px; 
        display: flex;
        flex-direction: column; 
        justify-content: space-between; 
    }

    .card-img-top {
        height: 200px; 
        object-fit: contain; 
        width: 100%; 
        background-color: #f5f5f5; 
    }

    .card-body {
        flex: 1; 
        overflow: hidden; 
    }

    .card-text {
        margin-bottom: 10px; 
    }
</style>
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
        <form action="<?php echo site_url('transferencias/transferir'); ?>" method="post">
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




        <!-- /.row -->

        <!-- =========================================================== -->
        
        

        <!-- Small Box (Stat card) -->
        

        
         
        
         
          

          
          
              
          <!-- /.col -->
        
               
        <!-- /.row -->

        <!-- =========================================================== -->
       
          <!-- /.col -->
          

             
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



<!-- JavaScript para filtrar productos -->
<script>
  document.getElementById('buscarProducto').addEventListener('keyup', function() {
    var input = this.value.toLowerCase();
    var productos = document.querySelectorAll('.producto');

    productos.forEach(function(producto) {
      var nombre = producto.querySelector('.nombre-producto').textContent.toLowerCase();
      var descripcion = producto.querySelector('.descripcion-producto').textContent.toLowerCase();

      if (nombre.includes(input) || descripcion.includes(input)) {
        producto.style.display = 'block';
      } else {
        producto.style.display = 'none';
      }
    });
  });
</script>
</body>
</html>
