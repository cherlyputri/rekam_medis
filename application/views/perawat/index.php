<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $judul; ?>
    </h1>
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang <span><?= $perawat['nama']; ?></span> </h1>
  </section>

  <!-- Ini buat nampilin box jumlah data pasien -->
  <!-- Main content -->
  <section class="content">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?= $jumlahrm; ?></h3>

          <p>Data (Pemeriksaan)</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="<?= base_url('pemeriksaan'); ?>" class="small-box-footer">Lihat Data Pemeriksaan <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>