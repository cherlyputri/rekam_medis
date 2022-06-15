  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url('apoteker') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
        <img src="<?php echo base_url() ?>assets/img/logo_puskesmas.png" width="60">

      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
        <img src="<?php echo base_url() ?>assets/img/logo_puskesmas.png" width="60">
        <small><strong>Puskesmas Talagamori</strong></small>
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Apoteker <?= $petugas_obat['nama'] ?></span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>