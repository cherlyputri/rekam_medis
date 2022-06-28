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
                                    <th>Keluhan</th>
                                    <th>Diagnosa</th>
                                    <th>Tindakan</th>
                                    <th>Kode Resep</th>
                                    <th>Obat</th>
                                    <th>Tanggal Resep</th>
                                    <th>Subtotal</th>
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
                                        <td> <?= $r['nama_pasien']; ?></td>
                                        <td><?= $r['keluhan'] ?></td>
                                        <td><?= $r['diagnosa'] ?></td>
                                        <td><?= $r['tindakan'] ?></td>
                                        <td><?= $r['kd_resep'] ?></td>
                                        <td><?= $r['nama_obat'] ?></td>
                                        <td><?= $r['tanggal_resep'] ?></td>
                                        <td class="text-right">Rp <?= number_format($r['subtotal'], 0, ',', '.') ?></td>
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