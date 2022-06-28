  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $judul; ?>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <?php foreach ($pemeriksaan as $r) { ?>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Kode Rekam Medis </label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" value="<?= $r->kd_rm ?>" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Kode Pemeriksaan</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" value="<?= $r->id_periksa ?>" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tanggal Resep</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" value="<?= $r->tanggal_resep ?>" readonly>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama Pasien</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" value="<?= $r->nama_pasien ?>" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama Dokter </label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" value="<?= $r->nama ?>" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Keluhan</label>
                  <div class="col-sm-7">
                    <!-- <input type="text" class="form-control" value="<?= $r->keluhan ?>" readonly> -->
                    <textarea name="keluhan" class="form-control" id="keluhan" readonly><?= $r->keluhan ?></textarea>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
          
          <?php
            foreach ($obat as $data) { ?>
            <?php } ?>

            <?php
            if ($data->status==0) { 
            $segment = $this->uri->segment(3);
            ?>
            <input type="hidden" name="kd_resep" value="<?php echo $data->kd_resep ?>">
            <a href="<?= base_url('resep_obat/konfirm_resep/' . $data->kd_resep) ?>" id="konfirm" class="btn btn-primary margin-bottom"><i class="fa fa-check"></i>Konfirmasi</a>
            <?php }elseif($data->status==1){ ?>
            <a id="konfirmed" class="btn btn-success margin-bottom disabled"><i class="fa fa-check"></i>Telah Dikonfirmasi</a>
            <?php } ?>
          
          
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Detail Obat</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Resep</th>
                    <th>Obat</th>
                    <th>Aturan Pakai</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach ($obat as $data) { ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data->kd_resep ?></td>
                    <td><?php echo $data->nama_obat ?></td>
                    <td><?php echo $data->aturan_pakai ?></td>
                    <td><?php echo $data->stok_out ?></td>
                    <!-- <td><?php echo $data->status ?></td> -->
                  </tr>
                  <?php } ?>
                </tbody>


              </table>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<!-- <script src="text/javascript">
  $('#konfirmed').hide();
  $(document).ready(function() {
  })
</script> -->