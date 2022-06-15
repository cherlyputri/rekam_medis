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
					<?php if (validation_errors()) : ?>
						<div class="alert alert-danger" role="alert">
							<?= validation_errors(); ?>
						</div>
					<?php endif; ?>
					<div class="box-body">
						<form action="" method="post">
							<div class="form-group row">
								<?= $this->session->flashdata('message'); ?>
								<label for="nama" class="col-sm-2 col-form-label">Nama Aturan Pakai</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="nama_aturan" name="nama_aturan" placeholder="Masukan Nama Tindakan" value="<?= set_value('nama_aturan') ?>">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-10">
									<button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
									<a href="<?= base_url('aturan_pakai/index'); ?>" class="btn btn-success">Kembali</a>
								</div>
							</div>
						</form>

					</div>

				</div>
			</div>
		</div>