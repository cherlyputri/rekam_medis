<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $judul; ?>
    </h1>
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang <span><?= $dokter['nama']; ?></span> </h1>
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

    <!-- Ini buat nampilin box jumlah data resep obat -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?= $jumlahresepobat; ?></h3>
          <!-- Ini buat nampilin angkanya, ambil dari controller Dokter -->

          <p>Data (Resep Obat)</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <!--buat button redirect ke halaman data resep obat. resep_obat itu nama controller -->
        <a href="<?= base_url('resep_obat'); ?>" class="small-box-footer">Lihat Data Resep Obat <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- Ini buat nampilin box jumlah data tindakan -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $jumlahtindakan; ?></h3>
          <!-- Ini buat nampilin angkanya, ambil dari controller Dokter -->

          <p>Data (Tindakan)</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <!--buat button redirect ke halaman data tindakan. tindakan itu nama controller -->
        <a href="<?= base_url('tindakan'); ?>" class="small-box-footer">Lihat Data Tindakan <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- Ini buat nampilin box jumlah data aturan pakai -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?= $jumlahaturanpakai; ?></h3>
          <!-- Ini buat nampilin angkanya, ambil dari controller Dokter -->

          <p>Data (Aturan Pakai)</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <!--buat button redirect ke halaman data aturan pakai. aturan_pakai itu nama controller -->
        <a href="<?= base_url('aturan_pakai'); ?>" class="small-box-footer">Lihat Data Aturan Pakai <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

</div>
</section>