<body class="hold-transition layout-top-nav layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?= base_url() ?>" class="navbar-brand">
        <img src="<?= base_url('assets/img/ticket.png') ?>" alt="IT Ticket Logo" class="brand-image">
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url('admin') ?>" class="nav-link <?= $active = $is_active == 'beranda' ? 'active' : '' ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/users') ?>" class="nav-link <?= $active = $is_active == 'users' ? 'active' : '' ?>">Pengguna</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Data Master</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Laporan</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Log</a>
          </li>
        </ul>

      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="<?= base_url('assets/img/admin-3d.png') ?>" class="user-image img-circle elevation-2" alt="User Image">
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-info">
              <img src="<?= base_url('assets/img/admin-3d.png') ?>" class="img-circle elevation-2" alt="User Image">

              <p>
                Superuser
                <small>Admin - IT</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <a href="#" class="btn btn-danger float-right"><i class="fas fa-sign-out-alt"></i></a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->
   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $page_title ?></h1>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->