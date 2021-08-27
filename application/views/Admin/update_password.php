<html>
<head>
  <title>REKAM MEDIS KELUARGA </title>
</head>
  <body>
    <div class="page-header" align="center">
        <h3> UBAH USERNAME & PASSWORD </h3>
    </div>

    <?php echo validation_errors(); ?>

    <?php echo form_open_multipart('Admin/update_password/'.$username); ?>
<div class="col-sm-6 col-sm-offset-3">
    <div class="position-relative">
    <div class="alert alert-info">
        <div class="form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username?>" required />
        </div>
        <div class="form-group">
            <label for="varchar">Password Lama<?php echo form_error('lama') ?></label>
            <input type="password" class="form-control" name="lama" id="lama" placeholder="Password Lama" value="<?php echo set_value('lama') ?>" required />
        </div>
        <div class="form-group">
            <label for="varchar">Password Baru <?php echo form_error('baru') ?></label>
            <input type="password" class="form-control" name="baru" id="baru" placeholder="Password Baru" value="<?php echo set_value('baru') ?>" required />
        </div>
        <div class="form-group">
            <label for="varchar">Konfirmasi Password Baru <?php echo form_error('konfirm_baru') ?></label>
            <input type="password" class="form-control" name="konfirm_baru" id="konfirm_baru" placeholder="Konfirmasi Password Baru" value="<?php echo set_value('konfirm_baru') ?>" required />
        </div>
        <div>
            <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-check"></span> Simpan </button>
            <a href="<?php echo base_url('index.php/Admin') ?>">
                <button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-undo"></span> Batal</button>
            </a>
        </div>
</div>
</div>
</div>
</body>
</html>