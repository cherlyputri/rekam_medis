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
						<!-- /.box -->
						<?php foreach ($aturan_pakai as $d) { ?>
							<form action="<?= base_url('aturan_pakai/update'); ?>" method="post">
								<div class="form-group row">
									<input type="hidden" name="id" value="<?= $d->id ?>">
									<label for="nama" class="col-sm-2 col-form-label">Nama Aturan Pakai</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="nama" name="nama_aturan" value="<?= $d->nama_aturan ?>">
									</div>
								<?php } ?>
								<div class="form-group row">
									<div class="col-sm-1">
										<button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
										<a href="<?= base_url('aturan_pakai/index'); ?>" class="btn btn-success">Kembali</a>
									</div>
								</div>
							</form>

					</div>

				</div>
			</div>
		</div>
</div>
</div>
</div>