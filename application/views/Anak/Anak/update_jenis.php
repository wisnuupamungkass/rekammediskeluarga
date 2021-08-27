<html>
<head>
  <title>REKAM MEDIS KELUARGA </title>
</head>
  <body>
    <div class="page-header" align="center">
        <h3> UPDATE JENIS IMUNISASI </h3>
    </div>

    <?php echo validation_errors(); ?>

    <?php echo form_open_multipart('Admin/updateJenisImunisasi/'.$id_jenis); ?>
<div class="col-sm-6 col-sm-offset-3">
    <div class="position-relative">
    <div class="alert alert-info">
        <div class="form-group">
            <label for="varchar">Kode Jenis <?php echo form_error('id_jenis') ?></label>
            <input type="text" class="form-control" name="id_jenis" id="id_jenis" placeholder="ID Jenis" value="<?php echo $id_jenis?>" required />
        </div>
        <div class="form-group">
            <label for="date">Nama Imunisasi<?php echo form_error('nama_imunisasi') ?></label>
            <input type="text" class="form-control" name="nama_imunisasi" id="nama_imunisasi" placeholder="Nama Imunisasi" value="<?php echo $nama_imunisasi?>" required />
        </div>
        <div class="form-group">
            <label for="varchar"> Umur <?php echo form_error('umur') ?></label>
            <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" value="<?php echo $umur?>" required />
        </div>
        <div>
            <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-check"></span> Simpan </button>
            <a href="<?php echo base_url('index.php/Admin/lihat_jenis') ?>">
                <button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-undo"></span> Batal</button>
            </a>
        </div>
</div>
</div>
</div>
</body>
</html>