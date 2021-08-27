    <?php echo validation_errors(); ?>



    <?php echo form_open_multipart('Admin/tambahPetugas'); ?>

    <html>

    <head>

      <title>REKAM MEDIS KELUARGA </title>

  </head>

  <body>

    <div class="page-header" align="center">

        <h3> INPUT PETUGAS </h3>

    </div>

   <div class="col-sm-6 col-sm-offset-3">

    <div class="position-relative">

            <div class="alert alert-info">

                <div class="form-group">

                    <label for="varchar">No KTP <?php echo form_error('no_ktp') ?></label>

                    <input type="text" onkeypress="return hanyaAngka(event)" maxlength="16" class="form-control" name="id_petugas" id="id_petugas" placeholder="No KTP" value="<?php echo set_value('id_petugas') ?>" required />

                </div>

                <div class="form-group">

                    <label for="varchar">Nama Lengkap <?php echo form_error('nama') ?></label>

                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama') ?>" required />

                </div>

                <div class="form-group">

                    <label for="date">Tanggal Lahir <?php echo form_error('tgl_lahir') ?></label>

                    <input type="date" name="tgl_lahir" id="datepicker" class="form-control hasDatepicker" value="<?php echo set_value('tgl_lahir') ?>" required/>

                </div>

                <div class="form-group">

                    <label for="varchar">Jenis Kelamin<?php echo form_error('jenis_kelamin') ?></label></br>

                    <div class="form-control">

                        <?php 

                        if (set_value('jenis_kelamin')=='L') {$a=true;}else{$a=false;}

                        if (set_value('jenis_kelamin')=='P') {$b=true;}else{$b=false;}

                        echo "";

                        echo form_radio('jenis_kelamin', 'L',$a)."<i class='ace-icon fa fa-male'></i> Laki-Laki  ".

                        form_radio('jenis_kelamin', 'P',$b)."<i class='ace-icon fa fa-female'></i> Perempuan  ";

                        ?>

                    </div>

                </div>

                <div class='form-group'>

                    <label>Provinsi</label>

                    <select class='form-control' id='provinsi' name="provinsi" required/>

                    <option value=''>--pilih--</option>

                    <?php 

                    foreach ($provinsi as $prov) {

                        echo "<option value='$prov[id_provinsi]'>$prov[nama_provinsi]</option>";

                    }

                    ?>

                </select>

            </div>



            <div class='form-group'>

                <label>Kabupaten/Kota</label>

                <select class='form-control' id='kabupaten-kota' name="kabupaten" required/>

                <option value=''>--pilih--</option>

            </select>

        </div>



<div class="form-group">

    <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>

    <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo set_value('alamat') ?>" required /></textarea>

</div>

<div class="form-group">

    <label for="varchar">No Handphone <?php echo form_error('no_hp') ?></label>

    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Handphone" value="<?php echo set_value('no_hp') ?>" required />

</div>

<div class="form-group">

    <label for="varchar">Nama Klinik/Rumah Sakit <?php echo form_error('nama_klinik') ?></label>

    <input type="text" class="form-control" name="nama_klinik" id="nama_klinik" placeholder="Nama Klinik/Rumah Sakit" value="<?php echo set_value('nama_klinik') ?>" required />

</div>

<div class="form-group">

    <label for="varchar">Izin Praktek <?php echo form_error('izin_praktek') ?></label>

    <input type="text" class="form-control" name="izin_praktek" id="izin_praktek" placeholder="Izin Praktek" value="<?php echo set_value('izin_praktek') ?>" required />

</div>

<div class="form-group">

    <label for="varchar">Email <?php echo form_error('username') ?></label>

    <input type="email" class="form-control" name="username" id="username" placeholder="Email" value="<?php echo set_value('Username') ?>" required />

</div>

<div class="form-group">

    <label for="varchar">Password <?php echo form_error('password') ?></label>

    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo set_value('password') ?>" required />

</div>

<div class="form-group">

    <label for="varchar">Foto <?php echo form_error('foto') ?></label>

    <input type="file" name="userfile" class="form-control" value= "<?php echo set_value('upload_gambar') ?>" size="50" required />

</div>

<?php echo form_close(); ?>    

<div>

    <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-check"></span> Simpan </button>

    <a href="<?php echo base_url('index.php/Admin/lihat_petugas') ?>">

        <button class="btn btn-primary" type="button" value="Batal"><span class="fa fa-undo"></span> Batal</button>

    </a>

</div>

</div>

</div>

</div>

<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>

</body>

</html>