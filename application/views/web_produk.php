<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>REKAM MEDIS KELUARGA</title>

        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <!-- font awesome -->
        <link rel="stylesheet" href="<?php echo base_url() ?>produk/web_produk/css/font-awesome/css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>produk/web_produk/css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>produk/web_produk/css/superslide/superslides.css">

        <link rel="stylesheet" href="<?php echo base_url() ?>produk/web_produk/css/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>produk/web_produk/css/nivo-lightbox/nivo-lightbox.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>produk/web_produk/css/themes/default/default.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>produk/web_produk/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>produk/web_produk/css/responsive.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>produk/web_produk/css/animate/animate.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>produk/web_produk/css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>produk/web_produk/css/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>produk/web_produk/css/owl-carousel/owl.transitions.css">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home" class="header navbar-fixed-top">
            <div class="navbar navbar-default main-menu">

                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a  href="<?php echo base_url('index.php/Login/login') ?>" class="navbar-brand"><img src="<?php echo base_url() ?>produk/web_produk/images/logo.png" alt="Logo" /></a>
                        <!-- <a class="navbar-brand" href="index.html"></a> -->
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#works" class="">Features</a></li>
                            <li><a href="#description" class="">Describe</a></li>
                            <li><a href="<?php echo base_url('index.php/Login/profil') ?>" class="">Profile</a></li>
                            <li><a href="#downloadApps" class="">Download</a></li>
                            <li><a href="http://d3ti.mipa.uns.ac.id/contact-us" class="">Contact</a></li>
                        </ul>

                    </div>
                </div>
            </div> <!-- end of navbar -->
        </header>

        <section id="home">
            <div id="bgimage" class="header-image">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-5 col-xs-12">
                            <div class="iphone center-content wow fadeInLeft" data-wow-duration="1s">
                                <img src="<?php echo base_url() ?>produk/web_produk/images/iphone.png" alt="" />
                            </div>
                        </div>

                        <div class="col-sm-7 col-xs-12 heading-text">
                            <div class="single_home_content wow zoomIn" data-wow-duration="1s">
								<h1>Rekam Medis Keluarga Berbasis Mobile </h1>
								<p class="bannerDescription">Merupakan aplikasi yang membantu pasien dan tenaga kesehatan medis dalam mencatat rekam medis pasien. Aplikasi ini cocok digunakan bagi pasien ibu hamil, balita dan pasien rawat jalan.</p>
								<div class="button">
									<a href="" class="btn white-btn"><i class="fa fa-download"></i>Downlod APP</a>
									<a href="" class="btn white-btn youtube-media"><i class="fa fa-play"></i> Watch video</a>
									<a href="<?php echo base_url() ?>produk/web_produk/Manual_Book.pdf" class="btn white-btn"><i class="fa fa-book"></i>Manual Books</a>
								</div>
							</div>
                        </div>

                    </div> <!-- end of row -->
                </div> <!-- end of container -->

                <div class="scrolldown">
                    <a href="#works_2" class="scroll_btn"></a>
                </div>

            </div>

        </section>


        <!-- Our Works Section -->

        <section id="works" class="center-content">
            <div class="container">
                <div class="row">
                    <div class="works_content text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration=".5s">
                                <i class="fa fa-male"></i>
                                <h3>Menu Profile</h3>
                                <p>Menu ini berisi identitas diri pengguna yang yang login. Menu ini dilengkapi update profil dan foto pengguna</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration=".8s">
                                <i class="fa fa-book"></i>
                                <h3>Menu Rekam Medis</h3>
                                <p>Menu ini berisi riwayat rekam medis pasien yang ditelah dilakukan pemeriksaan oleh petugas kesehatan (dokter)</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="1.2s">
                                <i class="fa fa-female"></i>
                                <h3>Menu Kandungan</h3>
                                <p>Menu ini berisi riwayat pemeriksaan kandungan. Menu ini hanya tersedia bagi pasien wanita (perempuan)</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="1.5s">
                                <i class="fa fa-stethoscope"></i>
                                <h3>Menu Imunisasi</h3>
                                <p>Menu ini berisi riwayat pemeriksaan imunisasi bagi balita. Menu ini hanya tersedia bagi pasien wanita (perempuan)</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="1.9s">
                                <i class="fa fa-medkit"></i>
                                <h3>Menu Pertumbuhan</h3>
                                <p>Menu ini berisi riwayat pemerikasaan pengukuran berat badan dan tinggi badan balita. Menu ini hanya tersedia bagi pasien wanita (perempuan)</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="2.3s">
                                <i class="fa fa-line-chart"></i>
                                <h3>Menu KMS</h3>
                                <p>Menu ini berisi grafik pertumbuhan balita yang telah dilakukan penimbangan berat badan. Menu ini hanya tersedia bagi pasien wanita (perempuan)</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="2.6s">
                                <i class="fa fa-image"></i>
                                <h3>Menu Gallery</h3>
                                <p>Menu ini berisi foto perkembangan balita dari umur 0 bulan sampai 5 tahun. Menu ini hanya tersedia bagi pasien wanita (perempuan)</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="2.9s">
                                <i class="fa fa-info"></i>
                                <h3>Menu Bantuan</h3>
                                <p>Menu ini berisi tata cara penggunaan aplikasi Rekam Medis Keluarga. Menu ini dilengkapi kontak email dan panggilan ke admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Description Section -->

        <section id="description">
            <div class="container">
                <div class="row main_description">
                    <div class="col-sm-6 col-xs-12">
                        <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                            <img src="<?php echo base_url() ?>produk/web_produk/images/iphone3.png" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                            <h1>Layout Menu Pria</h1>

                            <div class="right_desc_bottom_text">
                                <div class="right_single_bottom_text">
                                    <i class="fa fa-male"></i>
                                    <div class="right_bottom_description">
                                        <h6>Menu Profile</h6>
                                        <p>Pada menu ini berisi identitas diri pengguna yang dilengkapi dengan fasilitas update profile dan update foto pengguna</p>
                                    </div>
                                </div>

                                <div class="right_single_bottom_text">
                                    <i class="fa fa-book"></i>
                                    <div class="right_bottom_description">
                                        <h6>Menu Rekam Medis</h6>
                                        <p>Menu ini berisi riwayat rekam medis pasien yang telah melakukan pemeriksaan oleh petugas kesehatan yang mencatat menggunakan aplikasi ini</p>
                                    </div>
                                </div>

                                <div class="right_single_bottom_text">
                                    <i class="fa fa-info"></i>
                                    <div class="right_bottom_description">
                                        <h6>Menu Bantuan</h6>
                                        <p>Menu ini berisi tata cara penggunaan aplikasi bagi user dan dilengkapi dengan fasilitas kontak email dan panggilan telepon</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Description Second Section -->

        <section id="description_second">
            <div class="container">
                <div class="row">
                    <div class="main_description_second_contant">
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="1.5s">
                                <h1>Layout Menu Perempuan</h1>

                            <div class="second_bottom_text">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-male"></i>
                                            <div class="right_bottom_description">
                                                <h6>Menu Profile</h6>
                                                <p>Pada menu ini berisi identitas diri pengguna yang dilengkapi dengan fasilitas update profile dan update foto pengguna</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-female"></i>
                                            <div class="right_bottom_description">
                                                <h6>Menu Kandungan</h6>
                                                <p>Pada menu ini berisi riwayat pemeriksaan kandungan bagi ibu hamil dan dilengkapi dengan fasilitas lihat hasil usg kandungan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-child"></i>
                                            <div class="right_bottom_description">
                                                <h6>Menu Anak</h6>
                                                <p>Pada menu ini berisi list daftar anak yang dimiliki oleh ibu. Menu ini dilengkapi dengan fasilitas tambah anak</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-book"></i>
                                            <div class="right_bottom_description">
                                                <h6>Menu Rekam Medis</h6>
                                        		<p>Menu ini berisi riwayat rekam medis pasien yang telah melakukan pemeriksaan oleh petugas kesehatan</p>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-file-text"></i>
                                            <div class="right_bottom_description">
                                                <h6>Menu Pesan</h6>
                                                <p>Pada menu ini berisi daftar pesan remainder jadwal imunisasi bagi balita umur 0 bulan sampai 5 tahun</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-info"></i>
                                            <div class="right_bottom_description">
                                       			<h6>Menu Bantuan</h6>
                                        		<p>Menu ini berisi tata cara penggunaan aplikasi bagi user dan dilengkapi dengan fasilitas kontak email dan panggilan telepon</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-6 col-sm-6">
                            <div class="right_desc_img center-content wow fadeInRight" data-wow-duration="1.5s">
                                <img src="<?php echo base_url() ?>produk/web_produk/images/iphone4.png" alt="" />
								
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Description Third Section -->
        <section id="description_third">
            <div class="container">
                <div class="row">
                    <div class="main_des_third_contant">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                                <img src="<?php echo base_url() ?>produk/web_produk/images/iphone5.png" alt="" />
                            </div>
                        </div>
                            <div class="right_desc_text wow fadeIn" data-wow-duration="1.5s">
                                <h4>Layout Menu Petugas Kesehatan</h4>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-server"></i>
                                            <div class="right_bottom_description">
                                       			<h6>Menu Home</h6>
                                        		<p>Menu ini berisi form input nomor token pemeriksaan pasien yang dilakukan oleh petugas kesehatan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-male"></i>
                                            <div class="right_bottom_description">
                                       			<h6>Menu Profile</h6>
                                        		<p>Pada menu ini berisi identitas diri pengguna yang dilengkapi dengan fasilitas update profile dan update foto pengguna</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-info"></i>
                                            <div class="right_bottom_description">
                                       			<h6>Menu Bantuan</h6>
                                        		<p>Menu ini berisi tata cara penggunaan aplikasi bagi user dan dilengkapi dengan fasilitas kontak email dan panggilan telepon</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Apps Gallary  -->

        <section id="apps_gallery">
            <div class="container">
                <div class="row">
                    <div class="gallery_heading_text center-content">
                        <h1>Screenshot Aplikasi Rekam Medis Keluarga</h1>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                        <div class="gallery_carousel center-content">
                            <div class="single_gallery">
                                <img src="<?php echo base_url() ?>produk/web_produk/images/g1.png" alt="" />
                            </div>
                            <div class="single_gallery">
                                <img src="<?php echo base_url() ?>produk/web_produk/images/g2.png" alt="" />
                            </div>
                            <div class="single_gallery">
                                <img src="<?php echo base_url() ?>produk/web_produk/images/g3.png" alt="" />
                            </div>
                            <div class="single_gallery">
                                <img src="<?php echo base_url() ?>produk/web_produk/images/g4.png" alt="" />
                            </div>
                            <div class="single_gallery">
                                <img src="<?php echo base_url() ?>produk/web_produk/images/g5.png" alt="" />
                            </div>
                            <div class="single_gallery">
                                <img src="<?php echo base_url() ?>produk/web_produk/images/g6.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Download Section  -->

        <section id="downloadApps">
            <div class="container">
                <div class="row">
                    <div class="download_heading_text center-content">
                        <h1>Download Aplikasi Rekam Medis Keluarga Berbasis Mobile</h1>
                        <p>Berikut merupakan link untuk mendownload aplikasi Rekam Medis Keluarga Berbasis Mobile di Google PlayStore</p>

                        <div class="down_text_des wow fadeInUp" data-wow-duration="1.5s">
                            <a href=""><img src="<?php echo base_url() ?>produk/web_produk/images/d2.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="center-content">
           <div class="subcribe_overlay">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="socail_bookmark">
                            <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                            <a href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                            <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="copyright_text">
                            <p class=" wow zoomIn" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by <a href="">Wisnu Pamungkas</a>2017. Dibimbing Oleh Rudi Hartono, S.Si.,M.Eng</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url() ?>produk/web_produk/js/jquery/jquery.js"></script>

        <script src="<?php echo base_url() ?>produk/web_produk/js/script.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url() ?>produk/web_produk/js/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>produk/web_produk/js/fancybox/jquery.fancybox.pack.js"></script>
        <script src="<?php echo base_url() ?>produk/web_produk/js/nivo-lightbox/nivo-lightbox.min.js"></script>
        <script src="<?php echo base_url() ?>produk/web_produk/js/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL6gbhsnCEt4FS9D6BBl3mZO1xy-NcwpE&sensor=false"></script>
        <script src="<?php echo base_url() ?>produk/web_produk/js/jquery-easing/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url() ?>produk/web_produk/js/superslide/jquery.superslides.js"></script>
        <script src="<?php echo base_url() ?>produk/web_produk/js/wow/wow.min.js"></script>


    </body>
</html>