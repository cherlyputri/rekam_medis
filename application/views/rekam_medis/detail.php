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
                    <?php foreach ($data as $d) { ?>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kode Periksa </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="<?= $d->id_periksa ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Pasien</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="<?= $d->nama_pasien ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Dokter</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="<?= $d->nama ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Perawat</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="<?= $d->nama_perawat ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Keluhan</label>
                                <div class="col-sm-7">
                                    <!-- <input type="text" class="form-control" value="<?= $r->keluhan ?>" readonly> -->
                                    <textarea name="keluhan" class="form-control" id="keluhan" readonly><?= $d->keluhan ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="<?= $d->tb ?> " readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Berat Badan</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="<?= $d->bb ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tekanan Darah</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="<?= $d->td ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Alergi</label>
                                <div class="col-sm-7">
                                    <!-- <input type="text" class="form-control" value="<?= $r->keluhan ?>" readonly> -->
                                    <textarea name="keluhan" class="form-control" id="keluhan" readonly><?= $d->alergi ?></textarea>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>




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
                                foreach ($pemeriksaan as $r) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $r->kd_resep ?></td>
                                    <td><?php echo $r->nama_obat ?></td>
                                    <td><?php echo $r->aturan_pakai ?></td>
                                    <td><?php echo $r->stok_out ?></td>
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