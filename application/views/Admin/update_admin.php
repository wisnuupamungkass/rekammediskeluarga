<html>
<head>
  <title>REKAM MEDIS KELUARGA </title>
</head>
  <body>
    <div class="page-header" align="center">
        <h3> UPDATE PROFILE ADMIN</h3>
    </div>

    <?php echo validation_errors(); ?>

    <?php echo form_open_multipart('Admin/update_admin/'.$id_admin); ?>
<div class="col-sm-6 col-sm-offset-3">
    <div class="position-relative">
    <div class="alert alert-info">
        <div class="form-group">
            <label for="varchar">Nama Lengkap <?php echo form_error('nama_admin') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo $nama?>" required />
        </div>
        <div class="form-group">
            <label for="date">Tanggal Lahir<?php echo form_error('tgl_lahir') ?></label>
            <input type="date" name="tgl_lahir" id="datepicker" class="form-control hasDatepicker" value="<?php echo $tgl_lahir ?>" required/>
        </div>
        <div class="form-group">
            <label for="varchar">Jenis Kelamin<?php echo form_error('jenis_kelamin') ?></label></br>
            <div class="form-control">
                <?php
                    if ($jenis_kelamin=='L') {$a=true;}else{$a=false;}
                    if ($jenis_kelamin=='P') {$b=true;}else{$b=false;}
                    echo "";
                    echo form_radio('jenis_kelamin', 'L',$a)."<i class='ace-icon fa fa-male'></i> Laki-Laki ".
                    form_radio('jenis_kelamin', 'P',$b)."<i class='ace-icon fa fa-female'></i> Perempuan";
                ?>
            </div>
        </div>
        <div class="form-group">
            <label for="varchar">Provinsi <?php echo form_error('provinsi') ?></label>
            <select class='form-control' id='provinsi' name="provinsi" required/>
                <option value='<?php echo $id_provinsi ?>'><?php echo $nama_provinsi ?></option>
                <?php 
                foreach ($provinsi as $prov) {
                    echo "<option value='$prov[id_provinsi]'>$prov[nama_provinsi]</option>";
                }
                ?>
            </select>
        </div>
        <div class='form-group'>
            <label>Kabupaten/Kota <?php echo form_error('kabupaten') ?></label>
            <select class='form-control' id='kabupaten-kota' name="kabupaten" required/>
                <option value='<?php echo $id_kabupaten ?>'><?php echo $nama_kabupaten ?></option>
            </select>
        </div>
        <div class='form-group'>
            <label>Kecamatan <?php echo form_error('kecamatan') ?></label>
            <select class='form-control' id='kecamatan' name="kecamatan" required/>
                <option value='<?php echo $id_kecamatan ?>'><?php echo $nama_kecamatan ?></option>
            </select>
        </div>

        <div class='form-group'>
            <label>Kelurahan/Desa <?php echo form_error('kelurahan') ?></label>
            <select class='form-control' id='kelurahan-desa' name="kelurahan" required/>
                <option value='<?php echo $id_kelurahan ?>'><?php echo $nama_kelurahan ?></option>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat" required /><?php echo $alamat ?></textarea>
        </div>
        <div class="form-group">
            <label for="varchar">No Handphone <?php echo form_error('no_hp') ?></label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Handphone" value="<?php echo $no_hp ?>" required />
        </div>        
    <div>
        <button class="btn btn-success" type="submit" value="Simpan"><span class="fa fa-check"></span> Simpan </button>
    </div>
</div>
</div>
</div>
</body>
</html>