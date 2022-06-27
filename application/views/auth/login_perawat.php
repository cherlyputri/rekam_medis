<div class="login-box">

  <!-- /.login-logo -->
  <div class="login-box-body">
    <h4 class="login-box-msg"><b>Halaman Login Perawat</b></h4>
    <center>
      <img src="<?php echo base_url() ?>assets/img/logo_puskesmas.png" width="100">
    </center>
    <br>
    <?= $this->session->flashdata('message'); ?>
    <form class="user" method="post" action="<?= base_url('auth/login_perawat') ?>">
      <div class="form-group">
        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukan username..." value="<?= set_value('username') ?>">
        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan password...">
        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info btn-user btn-block">
          Masuk
        </button>
      </div>

    </form>
    <hr>
    <div class="text-center">
      <a class="" href="<?= base_url('auth/login_admin'); ?>">Masuk sebagai <b>Admin!</b></a>
      <hr>
      <a class="" href="<?= base_url('auth/login_perawat'); ?>">Masuk sebagai <b>Perawat!</b></a>
      <hr>
      <a class="" href="<?= base_url('auth/login_apoteker'); ?>">Masuk sebagai <b>Apoteker!</b></a>
    </div>
  </div>
</div>