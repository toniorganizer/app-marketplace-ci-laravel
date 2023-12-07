
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fab fa-free-code-camp"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TYF Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if($title == 'Dashboard') : ?> active <?php endif; ?>">
            <a class="nav-link" href="<?= base_url('index.php/DashboardController') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

          <!-- Nav Item - Dashboard -->
          <li class="nav-item <?php if($title == 'Daftar Barang') : ?> active <?php endif;?>">
              <a class="nav-link" href="<?= base_url('index.php/DashboardController/daftarBarang') ?>">
                <i class="fas fa-solid fa-database"></i>
                  <span>Daftar Barang</span></a>
          </li>

          <!-- Nav Item - Dashboard -->
          <li class="nav-item <?php if($title == 'Daftar Suplier') : ?> active <?php endif;?>">
              <a class="nav-link" href="<?= base_url('index.php/DashboardController/daftarSuplier') ?>">
                <i class="fas fa-solid fa-database"></i>
                  <span>Daftar Suplier</span></a>
          </li>

          <!-- Nav Item - Dashboard -->
          <li class="nav-item <?php if($title == 'Daftar Pembelian') : ?> active <?php endif;?>">
              <a class="nav-link" href="<?= base_url('index.php/DashboardController/daftarPembelian') ?>">
                <i class="fas fa-solid fa-database"></i>
                  <span>Daftar Pembelian</span></a>
          </li>

          <!-- Nav Item - Dashboard -->
          <li class="nav-item <?php if($title == 'Stock') : ?> active <?php endif;?>">
              <a class="nav-link" href="<?= base_url('index.php/DashboardController/stock') ?>">
                <i class="fas fa-solid fa-database"></i>
                  <span>Stock</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/AuthController/logout') ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->