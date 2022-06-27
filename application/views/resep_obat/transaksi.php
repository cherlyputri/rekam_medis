<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $judul; ?>
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped ">
              <thead>



                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Kode Resep</th>
                  <th>Kode Pemeriksaan</th>
                  <th>Nama Dokter</th>
                  <th>Nama Pasien</th>
                  <!-- <th>Total Harga</th> -->
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <?php
                $id = 1;
                foreach ($pemeriksaan as $r) {
                ?>
                  <tr>
                    <td><?= $id++ ?></td>
                    <td><?= $r['tanggal_resep']; ?></td>
                    <td><?= $r['kd_resep']; ?></td>
                    <td><?= $r['id_pemeriksaan']; ?></td>
                    <td> <?= $r['nama_dokter']; ?></td>
                    <td> <?= $r['nama_pasien']; ?></td>
                    <!-- <td><?= $r['keluhan'] ?></td> -->
                    <td>
                      <!-- <a href="<?= base_url('resep_obat/detail/' . $r['id_periksa']) ?>" class="btn btn-success btn-xs">Tambah</a> -->
                      <a href="<?= base_url('resep_obat/detail_trans/' . $r['kd_resep']) ?>" class="btn btn-primary btn-xs "> Detail</a>
                    </td>
                  <?php } ?>
                  </tr>
              </tbody>

            </table>
          </div>
        </div>
      </div>
      <!-- 
        </div> -->
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>