<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $judul; ?>
    </h1>
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang <span><?= $petugas_obat['nama']; ?></span> </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?= $jumlahobat; ?></h3>

            <p>Data Obat</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="<?= base_url('data_obat'); ?>" class="small-box-footer">Lihat Data Obat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </section>

</div>