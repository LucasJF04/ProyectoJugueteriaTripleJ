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
    

    <!-- Main content -->
    <section class="content container mt-5">
  <h2 class="text-center mb-5">Carrito de Compras</h2>

  <div class="table-responsive">
    <table class="table table-bordered align-middle text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Producto</th>
          <th scope="col">Nombre</th>
          <th scope="col">Precio Unitario</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Subtotal</th>
          <th scope="col">Acción</th>
        </tr>
      </thead>
      <tbody id="tablaCarrito">
        <!-- Aquí se cargará dinámicamente el contenido del carrito -->
      </tbody>
    </table>
  </div>
</section>

<script>
  function agregarAlCarrito(producto) {
  let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

  // Ver si el producto ya existe en el carrito
  const existe = carrito.some(p => p.id_producto === producto.id_producto);

  if (existe) {
    // Si existe, actualizar la cantidad
    carrito = carrito.map(p => {
      if (p.id_producto === producto.id_producto) {
        p.cantidad += producto.cantidad;
        p.subtotal = p.precio * p.cantidad;
      }
      return p;
    });
  } else {
    // Si no existe, agregar al carrito
    carrito.push(producto);
  }

  // Guardar carrito en localStorage
  localStorage.setItem('carrito', JSON.stringify(carrito));

  // Actualizar la tabla del carrito
  cargarCarrito();
}

function cargarCarrito() {
  const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
  const tbodyCarrito = document.getElementById('tbodyCarrito');
  
  // Limpiar la tabla
  tbodyCarrito.innerHTML = '';

  carrito.forEach(producto => {
    const tr = document.createElement('tr');
    tr.innerHTML = `
      <td><img src="${producto.imagen}" class="img-fluid rounded shadow-sm" style="max-width: 80px;" alt="${producto.nombre}"></td>
      <td class="align-middle">${producto.nombre}</td>
      <td class="align-middle">Bs${producto.precio.toFixed(2)}</td>
      <td class="align-middle">${producto.cantidad}</td>
      <td class="align-middle">Bs${producto.subtotal.toFixed(2)}</td>
      <td class="align-middle">
        <button class="btn btn-outline-danger btn-sm" onclick="eliminarDelCarrito(${producto.id_producto})">
          <i class="bi bi-trash"></i> Eliminar
        </button>
      </td>
    `;
    tbodyCarrito.appendChild(tr);
  });
}

function eliminarDelCarrito(id_producto) {
  let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

  // Eliminar el producto del carrito
  carrito = carrito.filter(p => p.id_producto !== id_producto);

  // Actualizar el localStorage y la tabla
  localStorage.setItem('carrito', JSON.stringify(carrito));
  cargarCarrito();
}

</script>

<!-- Modal -->
<div class="modal fade" id="modalTransferencia" tabindex="-1" role="dialog" aria-labelledby="transferModalLabel" aria-hidden="true">
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
</body>
</html>
