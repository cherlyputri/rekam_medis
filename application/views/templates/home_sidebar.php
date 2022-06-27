  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">


        <?php if ($_SESSION["status"] == "dokter") { ?>
          <!-- Heading -->
          <li class="header">MENU DOKTER</li> <?php } ?>
        
        <?php if ($_SESSION["status"] == "perawat") { ?>
          <!-- Heading -->
          <li class="header">MENU PERAWAT</li> <?php } ?>


        <?php if ($_SESSION["status"] == "admin") { ?>
          <!-- Heading -->
          <li class="header">MENU ADMIN</li> <?php } ?>


        <?php if ($_SESSION["status"] == "apoteker") { ?>
          <!-- Heading -->
          <li class="header">MENU APOTEKER</li> <?php } ?>


        <?php if ($_SESSION["status"] == "admin") { ?>
          <li>
            <a href="<?= base_url('mimin'); ?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
              </span>

            </a>
          </li><?php } ?>
        <li>
          <?php if ($_SESSION["status"] == "dokter") { ?>
            <a href="<?= base_url('dokter'); ?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
              </span>
            </a> <?php } ?>
        </li>
        <li>
          <?php if ($_SESSION["status"] == "apoteker") { ?>
            <a href="<?= base_url('apoteker'); ?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
              </span>
            </a> <?php } ?>
        </li>
        <li>
          <?php if ($_SESSION["status"] == "perawat") { ?>
            <a href="<?= base_url('perawat'); ?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
              </span>
            </a> <?php } ?>
        </li>


        <?php if ($_SESSION["status"] == "admin") { ?>
          <li>
            <a href="<?= base_url('data_pasien'); ?>">
              <i class=" fa fa-fw fa-user"></i><span>Data Pasien</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Master User</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url('data_dokter'); ?>"><i class="fa fa-circle-o"></i> Data Dokter</a></li>
              <li><a href="<?= base_url('data_admin'); ?>"><i class="fa fa-circle-o"></i> Data Admin</a></li>
              <li><a href="<?= base_url('data_apoteker'); ?>"><i class="fa fa-circle-o"></i> Data Apoteker</a></li>
            </ul>
          </li>
        <?php } ?>


        <?php if ($_SESSION["status"] == "dokter") { ?>
          <li>
            <a href="<?= base_url('pemeriksaan'); ?>">
              <i class=" fa fa-fw fa-stethoscope"></i><span>Pemeriksaan</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('resep_obat'); ?>">
              <i class=" fa fa-fw fa-flask"></i><span>Resep Obat</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('rekam_medis'); ?>">
              <i class=" fa fa-fw fa-history"></i><span>Rekam Medis</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('tarif'); ?>">
              <i class="fa fa-fw fa-dollar"></i><span>Tindakan</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('aturan_pakai'); ?>">
              <i class="fa fa-fw fa-medkit"></i><span>Aturan Pakai</span>
            </a>
          </li>
        <?php   } ?>

        <?php if ($_SESSION["status"] == "perawat") { ?>
          <li>
            <a href="<?= base_url('pemeriksaan/perawat'); ?>">
              <i class=" fa fa-fw fa-stethoscope"></i><span>Pemeriksaan</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('rekam_medis'); ?>">
              <i class=" fa fa-fw fa-history"></i><span>Rekam Medis</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
        <?php   } ?>


        <?php if ($_SESSION["status"] == "apoteker") { ?>
          <li>
            <a href="<?= base_url('data_obat'); ?>">
              <i class=" fa fa-fw fa-medkit"></i><span>Data Obat</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('resep_obat/transaksi'); ?>">
              <i class=" fa fa-fw fa-exchange"></i><span>Transaksi</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li>
          <li>
            <a href="<?= base_url('obat_masuk'); ?>">
              <i class=" fa fa-fw fa-cubes"></i><span>Obat Masuk</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
        <?php   } ?>



        <?php if ($_SESSION["status"] == "admin") { ?>
          <li>
            <a href="<?= base_url('pembayaran'); ?>">
              <i class=" fa fa-fw fa-dollar"></i><span>Pembayaran</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
        <?php } ?>


        <?php if ($_SESSION["status"] == "admin") { ?>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Master Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url('pemeriksaan/laporan'); ?>"><i class="fa fa-circle-o"></i> Laporan Pemeriksaan</a></li>
              <li><a href="<?= base_url('data_pasien/laporan'); ?>"><i class="fa fa-circle-o"></i> Laporan Data Pasien</a></li>
              <li><a href="<?= base_url('data_obat/laporan'); ?>"><i class="fa fa-circle-o"></i> Laporan Data Obat</a></li>
              <li><a href="<?= base_url('resep_obat/laporan'); ?>"><i class="fa fa-circle-o"></i> Laporan Data Resep</a></li>
              <li><a href="<?= base_url('pembayaran/laporan'); ?>"><i class="fa fa-circle-o"></i> Laporan Data Pembayaran</a></li>
              <li><a href="<?= base_url('obat_masuk/laporan'); ?>"><i class="fa fa-circle-o"></i> Laporan Data Obat Masuk</a></li>
            </ul>
          </li><?php  } ?>
        <li>
          <a href="<?= base_url('auth/logout'); ?>">
            <i class="fa fa-fw fa-sign-out"></i><span>Logout</span>
            <span class="pull-right-container">
            </span> </a>
          </a>
        </li>
      </ul>


    </section>
  </aside>