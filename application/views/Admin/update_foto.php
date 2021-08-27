<html>
<head>
  <title>REKAM MEDIS KELUARGA </title>
</head>
  <body>
    <div class="page-header" align="center">
        <h3> UPDATE FOTO ADMIN</h3>
    </div>
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('Admin/update_foto/'.$id_admin); ?>
<div class="col-sm-6 col-sm-offset-3">
    <div class="position-relative">
    <div class="alert alert-info">
        <div class="form-group">
        <img src="<?php echo base_url('images/thumbnails/Admin/'.$foto);?>"><br><br>
            <input type="file" name="userfile" placeholder="Foto" class="form-control" value= "<?php echo $foto ?>" size="50" required/>
        </div> 
    <div>
        <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-check"></span> Simpan </button>
    </div>
</div>
</div>
</div>
</body>
</html>