<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
    <img src="<?= base_url('adminlte/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">JugueteriaTripleJ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('adminlte/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">
        <?php echo $this->session->userdata('nombre') . ' ' . $this->session->userdata('apellido_Paterno'); ?>
        </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
        <a href="<?= site_url('usuarios/dashboard'); ?>" class="nav-link <?= ($this->uri->segment(2) == 'dashboard') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Panel
            </p>
        </a>
        </li>

        <li class="nav-item">
        <a href="<?= site_url('productos/catalogo'); ?>" class="nav-link <?= ($this->uri->segment(2) == 'catalogo') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Catálogo
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="<?= site_url('productos/gestion'); ?>" class="nav-link <?= ($this->uri->segment(2) == 'gestion') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Gestion
            </p>
        </a>
        </li>
        <?php if($this->session->userdata('rol')==='admin'): ?>
        <li class="nav-item">
        <a href="<?= site_url('productos/anadir'); ?>" class="nav-link <?= ($this->uri->segment(2) == 'anadir') ? 'active' : ''; ?>">
            <i class="fas  fa-plus"></i>
            <p>
                Gestion de productos
            </p>
        </a>
        </li>

        <li class="nav-item">
        <a href="<?= site_url('productos/Gventas'); ?>" class="nav-link <?= ($this->uri->segment(2) == 'Gventas') ? 'active' : ''; ?>">
            <i class="fas  fa-chart-line"></i>
            <p>
              Ventas
            </p>
        </a>
        </li>

       
        
        <li class="nav-item">
        <a href="<?= site_url('usuarios/clientes'); ?>" class="nav-link <?= ($this->uri->segment(2) == 'clientes') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
            Clientes
            </p>
        </a>
        </li>
        <?php endif; ?>


        <li class="nav-item">
        <a href="<?= site_url('productos/carrito'); ?>" class="nav-link <?= ($this->uri->segment(2) == 'carrito') ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p>
            Carrito
            </p>
        </a>
        </li>
          <li class="nav-item">
            <a href="<?= site_url('usuarios/reportes'); ?>" class="nav-link <?= ($this->uri->segment(2) == 'reportes') ? 'active' : ''; ?>" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Reportes
              </p>
            </a>
            
          </li>
          
             
          <li class="nav-item">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendario
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Correo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="examples/faq.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Salir
              </p>
            </a>
            
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>