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

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kode Periksa </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Pasien</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Dokter</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Perawat</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Keluhan</label>
                                <div class="col-sm-7">
                                    <!-- <input type="text" class="form-control" value="<?= $r->keluhan ?>" readonly> -->
                                    <textarea name="keluhan" class="form-control" id="keluhan" readonly>efefe</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Pasien</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Dokter </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Keluhan</label>
                                <div class="col-sm-7">
                                    <!-- <input type="text" class="form-control" value="<?= $r->keluhan ?>" readonly> -->
                                    <textarea name="keluhan" class="form-control" id="keluhan" readonly>efefe</textarea>
                                </div>
                            </div>
                        </div>

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