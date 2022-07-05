<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Cetak Rekamides</title>
<link rel="icon" type="image/x-icon" href="<?= base_url('img/icon/logo1.png') ?>" />
</head>
<style type="text/css">
/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 11pt "Times New Roman";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        size: A4 landscape;
        width: 297mm;
        height: 209.91mm;
        padding: 0mm 10mm 0mm 10mm; /*atas,kanan,bawah,kiri*/
        border: 1px #fff solid;
        background: white;
    }
    .tabel1{
        font: 9pt "Times New Roman";
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
    }

    .table th,
    .table td {
        padding: 0.35rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        font-weight: 600;
        padding: 0.5rem;
        vertical-align: middle;
        border-bottom: 2px solid #dee2e6;
    }

    .table .table {
        background-color: #fff;
    }

    .table {
        border-collapse: collapse !important;
    }

    .table td,
    .table th {
        background-color: #fff !important;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6 !important;
    }

    @page {
        size: A4 landscape;
        margin: 0;
    }

    @media print {
        /* html, body {
            width: 210mm;
            height: 297mm;        
        } */
        .page {
            margin: 0;
        }
    } 
</style>


<body>
<div class="book">
    <div class="page">
          <!-- <h3 style="font-size: 14pt;" align="center">Data Rekamedis</h3> -->
          <h6 style="font-size: 12pt; font-weight:600; font-family:'Times New Roman', Times, serif" align="center"> PEMERINTAH KOTA TIDORE KEPULAUAN <br>
          UPT PUSKESMAS TALAGAMORI <br>
          Jl. Gita - Payahe, Talagamori, Oba Kota Tidore Kepulauan Maluku Utara <hr></h6>

          <h6 style="font-size: 12pt; font-weight:600; font-family:'Times New Roman', Times, serif" align="center"> <u>DATA REKAMEDIS PASIEN</u></h6>
          
          <div class="tabel1 mt-2">
              <table width="100%">
              <?php foreach ($pasien as $d) { ?>
                  <tr>
                      <td width="15%">Kode Periksa</td>
                      <td width="35%"> : <?= $d->id_periksa ?></td>
                      <td width="15%">Tinggi Badan</td>
                      <td width="35%"> :<?= $d->tb ?></td>
                  </tr>
                  <tr>
                      <td width="15%">Nama Pasien</td>
                      <td width="35%"> : <?= $d->nama_pasien ?></td>
                      <td width="15%">Berat Badan</td>
                      <td width="35%"> :<?= $d->bb ?></td>
                  </tr>
                  <tr>
                      <td width="15%">Nama Dokter</td>
                      <td width="35%"> : <?= $d->nama ?></td>
                      <td width="15%">Tekanan Darah</td>
                      <td width="35%"> :<?= $d->td ?></td>
                  </tr>
                  <tr>
                      <td width="15%">Nama Perawat</td>
                      <td width="35%"> : <?= $d->nama_perawat ?></td>
                      <td width="15%">Alergi</td>
                      <td width="35%"> :<?= $d->alergi ?></td>
                  </tr>
                  <tr>
                      <td width="15%">Keluhan</td>
                      <td width="35%"> : <?= $d->keluhan ?></td>
                  </tr>
                  <?php } ?>
                  
                  
              </table><br>
              <table class="table table-bordered" width="100%" style="height: 20px;">
                  <thead>
                      <tr align="center">
                          <th width="1%">NO</th>
                          <th width="13%">Kode Resep</th>
                          <th width="50%">Obat</th>
                          <th width="0%">Aturan Pakai</th>
                          <th width="15%">Jumlah</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                    foreach ($pemeriksaan as $r) { ?>
                      <tr align="center">
                          <td width="1%"><?php echo $no++ ?></td>
                          <td width="13%"><?php echo $r->kd_resep ?></td>
                          <td width="50%"><?php echo $r->nama_obat ?></td>
                          <td width="0%"><?php echo $r->aturan_pakai ?></td>
                          <td width="15%"><?php echo $r->stok_out ?></td>
                      </tr>
                  <?php } ?>
                  </tbody>
              </table>

              
              <!-- <table class="mt-3" width="100%">
                  <tr align="center" aria-colspan="4">
                      <td width="25%">Mengetahui Camat</td>
                      <td width="25%">KEPALA DESA/KEL</td>
                      <td width="25%">KETUA RT .../RW...</td>
                      <td width="25%">Tanggal, .............. <br>KEPALA KELUARGA</td>
                  </tr>
                  <tr align="center">
                      <td width="25%" style="padding-top: 80px;"> ........................... </td>
                      <td width="25%" style="padding-top: 80px;"> ........................... </td>
                      <td width="25%" style="padding-top: 80px;"> ........................... </td>
                      <td width="25%" style="padding-top: 80px;"> ........................... </td>
                  </tr>
              </table> -->
          </div>
    </div>

</div>
</body>
</html>
<script type="text/javascript">window.print();</script>