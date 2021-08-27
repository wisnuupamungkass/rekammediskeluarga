    <?php echo validation_errors(); ?>

    <?php echo form_open_multipart('Admin/tambahJenisImunisasi'); ?>
<html>
<head>
  <title> REKAM MEDIS KELUARGA </title>
</head>
  <body>
    <div class="page-header" align="center">
        <h3> INPUT JENIS IMUNISASI </h3>
    </div>
<div class="col-sm-6 col-sm-offset-3">
    <div class="position-relative">
    <div class="alert alert-info">
        <div class="form-group">
            <label for="varchar">ID Jenis Imunisasi <?php echo form_error('id_jenis') ?></label>
            <input type="text" class="form-control" name="id_jenis" id="id_jenis" placeholder="ID Jenis Imunisasi" value="<?php echo set_value('id_jenis_imunisasi') ?>" required />
        </div>
        <div class="form-group">
            <label for="date"> Nama Imunisasi <?php echo form_error('nama_imunisasi') ?></label>
            <input type="text" name="nama_imunisasi" id="nama_imunisasi" class="form-control" placeholder="Nama Imunisasi" value="<?php echo set_value('nama_imunisasi') ?>" required/>
        </div>
        <div class="form-group">
            <label for="varchar"> Umur <?php echo form_error('umur') ?></label>
            <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" value="<?php echo set_value('umur') ?>" required/>
        </div>
    <div>
        <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-check"></span> Simpan </button>
        <a href="<?php echo base_url('index.php/Admin/lihat_jenis') ?>">
            <button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-undo"></span> Batal</button>
        </a>
    </div>
    <?php echo form_close(); ?>    
</div>
</div>
</div>
</body>
</html>