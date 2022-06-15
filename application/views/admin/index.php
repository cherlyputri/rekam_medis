<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $judul; ?>
    </h1>
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang <span><?= $admin['nama']; ?></span> </h1>
  </section>

  <!-- Ini buat nampilin box jumlah data pasien -->
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?= $jumlahpasien; ?></h3>
            <!-- Ini buat nampilin angkanya, ambil dari controller Mimin -->

            <p>Data (Pasien)</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <!-- buat button redirect ke halaman data pasien. data_pasien itu nama controller -->
          <a href="<?= base_url('data_pasien'); ?>" class="small-box-footer">Lihat Data Pasien <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Ini buat nampilin box jumlah data admin -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?= $jumlahadmin; ?></h3>
            <!-- Ini buat nampilin angkanya, ambil dari controller Mimin -->

            <p>Data (Admin)</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <!-- Line 42 buat button redirect ke halaman data admin. data_admin itu nama controller -->
          <a href="<?= base_url('data_admin'); ?>" class="small-box-footer">Lihat Data Admin <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Ini buat nampilin box jumlah data dokter -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?= $jumlahdokter; ?></h3>
            <!-- Ini buat nampilin angkanya, ambil dari controller Mimin -->

            <p>Data (Dokter)</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <!-- buat button redirect ke halaman data dokter. data_dokter itu nama controller -->
          <a href="<?= base_url('data_dokter'); ?>" class="small-box-footer">Lihat Data Dokter <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Ini buat nampilin box jumlah data apoteker -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?= $jumlahapoteker; ?></h3> <!-- Ini buat nampilin angkanya, ambil dari controller Mimin -->

            <p>Data (Apoteker)</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <!-- buat button redirect ke halaman data apoteker. data_apoteker itu nama controller -->
          <a href="<?= base_url('data_apoteker'); ?>" class="small-box-footer">Lihat Data Apoteker <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Ini buat nampilin box jumlah data pembayaran -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
          <div class="inner">
            <h3><?= $jumlahpembayaran; ?></h3>
            <!-- Ini buat nampilin angkanya, ambil dari controller Mimin -->

            <p>Data (Pembayaran)</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <!-- buat button redirect ke halaman pembayaran. pembayaran itu nama controller -->
          <a href="<?= base_url('pembayaran'); ?>" class="small-box-footer">Lihat Data Pembayaran <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

  </section>
</div>
</div>