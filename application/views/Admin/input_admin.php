<!DOCTYPE html>

<html lang="en">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta charset="utf-8" />

	<title>REKAM MEDIS KELUARGA</title>



	<meta name="description" content="User login page" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />



	<!-- bootstrap & fontawesome -->

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />



	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>



	<!-- text fonts -->

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fonts.googleapis.com.css" />



	<!-- ace styles -->

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace.min.css" />



		<!--[if lte IE 9]>

			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />

			<![endif]-->

			<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-rtl.min.css" />



		<!--[if lte IE 9]>

		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />

		  <![endif]-->



		  <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->



		<!--[if lte IE 8]>

		<script src="assets/js/html5shiv.min.js"></script>

		<script src="assets/js/respond.min.js"></script>

		<![endif]-->

	</head>



	<body class="login-layout">

		<div class="main-container">

			<div class="main-content">

				<div class="row">

					<div class="col-sm-10 col-sm-offset-1">

						<div class="login-container">

							<div class="center">

								<h1>

									<i class="ace-icon fa fa-user green"></i>

									<span class="red">REGISTER</span>

								</h1>

							</div>



							<div class="space-6"></div>

							<div class="position-relative">

								<div id="login-box" class="login-box visible widget-box no-border">

									<div class="widget-body">

										<div class="widget-main">

											<h4 class="header green lighter bigger">

												<i class="ace-icon fa fa-user blue"></i>

												Pendaftaran Admin Baru

											</h4>



											<?php

											echo validation_errors();

											echo form_open_multipart('Login/tambahAdmin');

											?>

											<div class="alert alert-info">

											<fieldset>

											

												<label class="block clearfix">Nomor KTP

													<span class="block input-icon input-icon-right">

														<input type="text" onkeypress="return hanyaAngka(event)" maxlength="16" class="form-control" name="id_admin" placeholder="No KTP" value="<?php echo set_value('id_admin') ?>"required />

														<i class="ace-icon fa fa-key"></i>

													</span>

												</label>



												<label class="block clearfix">Nama Lengkap

													<span class="block input-icon input-icon-right">

														<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama') ?>"required />

														<i class="ace-icon fa fa-user"></i>

													</span>

												</label>



												<label class="block clearfix">Tanggal Lahir

													<span class="block input-icon input-icon-right">

														<input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo set_value('tgl_lahir') ?>"required />

														<i class="ace-icon fa fa-birthday-cake"></i>

													</span>

												</label>



												<label class="block clearfix">Jenis Kelamin

													<span class="block input-icon input-icon-right">

														<div class="form-control">

															<?php 

															if (set_value('jenis_kelamin')=='L') {$a=true;}else{$a=false;}

															if (set_value('jenis_kelamin')=='P') {$b=true;}else{$b=false;}

															echo "";

															echo form_radio('jenis_kelamin', 'L',$a)."<i class='ace-icon fa fa-male'></i> Laki-Laki  ".

															form_radio('jenis_kelamin', 'P',$b)."<i class='ace-icon fa fa-female'></i> Perempuan  ";

															?>

														</div>

													</span>

												</label>



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



												<div class='form-group'>

													<label>Kecamatan</label>

													<select class='form-control' id='kecamatan' name="kecamatan" required/>

														<option value=''>--pilih--</option>

													</select>

												</div>



												<div class='form-group'>

													<label>Kelurahan/Desa</label>

													<select class='form-control' id='kelurahan-desa' name="kelurahan" required/>

														<option value=''>--pilih--</option>

													</select>

												</div>



												<label class="block clearfix">Alamat

													<span class="block input-icon input-icon-right">

														<textarea class="form-control" name="alamat" placeholder="Alamat" value="<?php echo set_value('alamat') ?>"required ></textarea>

													</span>

												</label>



												<label class="block clearfix">Nomor Handphone

													<span class="block input-icon input-icon-right">

														<input type="text" class="form-control" name="no_hp" placeholder="Nomor Handphone" value="<?php echo set_value('no_hp') ?>"required />

														<i class="ace-icon fa fa-phone"></i>

													</span>

												</label>



												<label class="block clearfix">Username

													<span class="block input-icon input-icon-right">

														<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username') ?>"required />

														<i class="ace-icon fa fa-user"></i>

													</span>

												</label>



												<label class="block clearfix">Password

													<span class="block input-icon input-icon-right">

														<input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password') ?>"required />

														<i class="ace-icon fa fa-lock"></i>

													</span>

												</label>



												<label class="block clearfix">Foto

													<span class="block input-icon input-icon-right">

														<input type="file" name="userfile" class="form-control" value= "<?php echo set_value('upload_gambar');?>" size="50" required />

													</span>

												</label>



												<div class="clearfix">

													<button type="reset" class="width-30 pull-left btn btn-sm">

														<i class="ace-icon fa fa-refresh"></i>

														<span class="bigger-110">Reset</span>

													</button>



													<button type="submit" class="width-65 pull-right btn btn-sm btn-success">

														<span class="bigger-110">Register</span>



														<i class="ace-icon fa fa-arrow-right icon-on-right"></i>

													</button>

												</div>

											</fieldset>

											</div>

											<?php echo form_close(); ?>

										</div>

									</div><!-- /.widget-main -->



									<div class="toolbar clearfix">

										<div>

										</div>



										<div>

											<a href="<?php echo base_url('index.php/Login'); ?>" class="user-signup-link">

												Back to Login

												<i class="ace-icon fa fa-arrow-right"></i>

											</a>

										</div>

									</div>

								</div><!-- /.widget-body -->

							</div><!-- /.login-box -->

						</div><!-- /.position-relative -->

					</div>

				</div><!-- /.col -->

			</div><!-- /.row -->

		</div><!-- /.main-content -->

	</div><!-- /.main-container -->



	<!-- basic scripts -->



	<!--[if !IE]> -->

	<script src="assets/js/jquery-2.1.4.min.js"></script>



	<!-- <![endif]-->



		<!--[if IE]>

<script src="assets/js/jquery-1.11.3.min.js"></script>

<![endif]-->

<script type="text/javascript">

	if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url() ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");

</script>



<!-- inline scripts related to this page -->

<script type="text/javascript">

	jQuery(function($) {

		$(document).on('click', '.toolbar a[data-target]', function(e) {

			e.preventDefault();

			var target = $(this).data('target');

				$('.widget-box.visible').removeClass('visible');//hide others

				$(target).addClass('visible');//show target

			});

	});



</script>

<script type="text/javascript">



	$(function(){



		$.ajaxSetup({

			type:"POST",

			url: "<?php echo base_url('index.php/Login/ambil_data') ?>",

			cache: false,

		});



		$("#provinsi").change(function(){



			var value=$(this).val();

			if(value>0){

				$.ajax({

					data:{modul:'kabupaten',id:value},

					success: function(respond){

						$("#kabupaten-kota").html(respond);

					}

				})

			}



		});





		$("#kabupaten-kota").change(function(){

			var value=$(this).val();

			if(value>0){

				$.ajax({

					data:{modul:'kecamatan',id:value},

					success: function(respond){

						$("#kecamatan").html(respond);

					}

				})

			}

		})



		$("#kecamatan").change(function(){

			var value=$(this).val();

			if(value>0){

				$.ajax({

					data:{modul:'kelurahan',id:value},

					success: function(respond){

						$("#kelurahan-desa").html(respond);

					}

				})

			} 

		})



	})



</script>

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