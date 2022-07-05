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
                                    <th>Kode Pemeriksaan</th>
                                    <th>Nama</th>
                                    <th>Diagnosa</th>
                                    <th>Tindakan</th>
                                    <!-- <th>Obat</th> -->
                                    <th>Tanggal Pemeriksaan</th>
                                    <th>Subtotal</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $id = 1;
                                foreach ($data as $r) {
                                ?>
                                    <tr>
                                        <td><?= $id++ ?></td>
                                        <td><?= $r['id_periksa']; ?></td>
                                        <td><?= $r['nama_pasien']; ?></td>
                                        <td><?= $r['diagnosa'] ?></td>
                                        <td><?= $r['tindakan'] ?></td>
                                        <td><?= $r['tanggal'] ?></td>
                                        <td><?= $r['tanggal_resep'] ?></td>
                                        <td class="text-right">Rp <?= number_format($r['subtotal'], 0, ',', '.') ?></td>
                                        <td>
                                            <!-- <a href="#" data-toggle="modal" data-target="#detail-<?= $r['id_periksa'] ?>" class="badge badge-warning">Detail</a> -->
                                            <a href="<?= base_url('rekam_medis/detailRekam/' . $r['id_periksa']) ?>" class="badge badge-warning">Detail</a>
                                            <a href="#" data-toggle="modal" data-target="#resep-<?= $r['kd_resep'] ?>" class="badge badge-primary">Resep</a>
                                        </td>
                                    </tr>
                                <?php } ?>
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

        <?php foreach ($detail as $r) : ?>
            <div class="modal" id="detail-<?= $r['id_periksa'] ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Detail Pemeriksaan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5><?= $r['nama_pasien'] ?></h5>
                            <h5><?= $r['nama_obat'] ?></h5>
                            <!-- <p>Modal body text goes here.</p> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php foreach ($resep as $rsp) : ?>
            <div class="modal" id="resep-<?= $rsp['kd_resep'] ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Detail Resep</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table id="example1" class="table table-bordered table-striped ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Resep</th>
                                        <th>Obat</th>
                                        <th>Aturan Pakai</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $id = 1;
                                    foreach ($resep as $sp) {
                                    ?>
                                        <tr>
                                            <td><?= $id++ ?></td>
                                            <td><?= $sp['kd_resep']; ?></td>
                                            <td><?= $sp['nama_obat']; ?></td>
                                            <td><?= $sp['aturan_pakai']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>