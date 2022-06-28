<!DOCTYPE html>
<html lang="en">

<head>
	<title>Cetak Nota Pembayaran</title>
</head>
<style>
	.tbl {
		border: 1px solid #000000;
		border-radius: 3px;
		height: 800px;
		width: 700px
	}

	.pl-20 {
		padding-left: 20px;
	}

	@media print and (width: 21cm) and (height: 29.7cm) {
		@page {
			margin: 3cm;
		}
	}

	/* style sheet for "letter" printing */
	@media print and (width: 8.5in) and (height: 11in) {
		@page {
			margin: 1in;
		}
	}

	/* A4 Landscape*/
	@page {
		size: A5 potrait;
		margin: 10%;
	}
</style>

<body style="font-family:Times New Roman;font-size:30px">

	<center>
		<h1></h1>
	</center>
	<table id="example1" class="tbl">
		<tr align="center" border="1">
			<td colspan="3">
				<h1>Nota Pembayaran</h1>
				<h3><i>UPT Puskesmas Talagamori</i></h3>
				<hr>
			</td>
		</tr>

		<tr>
			<td><label class="pl-20">Kode Bayar</label>
				<hr>
			</td>
			<td>:
				<hr>
			</td>
			<td><?php echo $kd_bayar['kd_bayar'] ?>
				<hr>
			</td>
		</tr>

		<tr>
			<td><strong class="pl-20">Nama Layanan</strong>
				<hr>
			</td>
			<td>|
				<hr>
			</td>
			<td><strong>Biaya</strong>
				<hr>
			</td>
		</tr>
		<?php foreach ($bayar->result() as $row) { ?>
			<tr>
				<td><label class="pl-20"><?php echo $row->nama_tarif ?></label></td>
				<td>:</td>
				<td><?= "Rp. " . number_format($row->total, 0, ',', '.') ?></td>
			<?php } ?>
			</tr>


			<tr><?php foreach ($obat->result() as $row) { ?>
					<td><label class="pl-20">Biaya Obat</label></td>
					<td>:</td>
					<td><?php echo "Rp. " . number_format($row->subtotal, 0, ',', '.') ?></td>
			</tr>
			<tr>
				<td>
					<hr><label class="pl-20">Total Bayar</label>
					<hr>
				</td>
				<td>
					<hr>:
					<hr>
				</td>
				<td>
					<hr><b><?php echo "Rp. " . number_format($row->totalbayar, 0, ',', '.') ?></b>
					<hr>
				</td>
			</tr>
			<tr>

				<td>Tanda Tangan</td>
				<td></td>
				<td></td>
				<td>Tanda Tangan</td>
			</tr>
			<tr>
				<td>
					<br>
					<br>
					<br>
					<br>
					<?php echo $row->nama_pasien ?>
				</td>
				<td></td>
				<td></td>

				<td>
					<br>
					<br>
					<br>
					<br>
					<?php echo $row->nama ?>
				</td>



			</tr>
		<?php } ?>
	</table>
</body>
<script>
	print();
</script>

</html>