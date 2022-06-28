<!-- /.box-header -->
<!-- form start -->

<div class="box-body">


  <form action="<?= base_url('pemeriksaan/tambah_aksi_perawat'); ?>" method="post">
    
    <div class="form-group row">
      
      <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Pemeriksaan </label>
      <div class="col-sm-4">
        <input type="hidden" class="form-control" id="kd_rm" name="kd_rm" value="<?php echo $datapasien ?>">
        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= date('Y-m-d') ?>">
      </div>
      <label for="id_periksa" class="col-sm-2 col-form-label">No. Pemeriksaan </label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="id_periksa" name="id_periksa" value="<?= $kodeperiksa; ?>" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label for="keluhan" class="col-sm-2 col-form-label">Keluhan</label>
      <div class="col-sm-4">
        <textarea class="form-control" id="keluhan" name="keluhan" rows="2" required="keluhan"></textarea>
      </div>
      <label for="keluhan" class="col-sm-2 col-form-label">Alergi</label>
      <div class="col-sm-4">
        <textarea class="form-control" id="alergi" name="alergi" rows="2" required="alergi"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="tanggal" class="col-sm-2 col-form-label">Tinggi Badan (cm)</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="tb" name="tb" placeholder="Tinggi Badan">
      </div>
    </div>
    <div class="form-group row">
      <label for="tanggal" class="col-sm-2 col-form-label">Berat Badan (Kg) </label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="bb" name="bb" placeholder="Berat Badan">
      </div>
    </div>
    <div class="form-group row">
      <label for="tanggal" class="col-sm-2 col-form-label">Tekanan Darah </label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="td" name="td" placeholder="Tekanan Badan">
      </div>
    </div>
    <div class="box-footer">
      <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
    </div>

  </form>
</div>

</div>
<div class="box box-success">
  <div class="box-header">
    <h3 class="box-title">Data Pemeriksaan</h3>

  </div>
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped ">
      <thead>
        <tr>
          <th>No.</th>
          <th>Tanggal</th>
          <th>Kode Pemeriksaan</th>
          <th>Tinggi Badan (cm)</th>
          <th>Berat Badan (kg)</th>
          <th>Tekanan Darah</th>
          <th>Keluhan</th>
          <th>Aksi</th>

        </tr>
      </thead>
      <tbody>
        <?php
        $no_rm = 1;
        foreach ($pemeriksaan as $r) {
        ?>
          <tr>
            <td><?= $no_rm++ ?></td>
            <td><?= $r->tanggal ?></td>
            <td><?= $r->id_periksa ?></td>
            <td><?= $r->tb ?></td>
            <td><?= $r->bb ?></td>
            <td><?= $r->td ?></td>
            <td><?= $r->keluhan ?></td>

            <td>

              <a href="<?= base_url('pemeriksaan/hapus_perawat/' . $r->id_periksa . "/" . $r->kd_rm) ?>" class="btn btn-danger float-right" onclick="return confirm('Apakah anda yakin ingin menghapus data pemeriksaan tersebut?');">Hapus</a>

            </td>




          </tr>
        <?php } ?>
      </tbody>

    </table>
  </div>
</div>
</div>


</div>

</div>
</div>
</div>
</div>