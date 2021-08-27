<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>REKAM MEDIS KELUARGA</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->

		<?php echo link_tag('assets/css/bootstrap.css');?>
		<?php echo link_tag('assets/css/font-awesome.css');?>

		<!-- text fonts -->
		<?php echo link_tag('assets/css/ace-fonts.css');?>

		<!-- ace styles -->
		<?php echo link_tag('assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" ');?>

		<!-- Datatables -->
	    <?php echo link_tag('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>
	    <?php echo link_tag('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'); ?>
	    <?php echo link_tag('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'); ?>
	    <?php echo link_tag('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'); ?>
	    <?php echo link_tag('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'); ?>

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url() ?>assets/js/ace-extra.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="../assets/js/html5shiv.js"></script>
		<script src="../assets/js/respond.js"></script>
		<![endif]-->
	</head>
	
	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<?php echo $_menu; ?>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			<?php echo $_sidebar; ?>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						

						<!-- #section:basics/content.searchbox -->
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->

						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<?php echo $_content; ?>
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<?php echo $_footer; ?>
					<!-- /section:basics/footer -->
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url() ?>assets/js/jquery.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url() ?>assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="../assets/js/excanvas.js"></script>
		<![endif]-->
		<script src="<?php echo base_url() ?>assets/js/jquery-ui.custom.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.ui.touch-punch.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.easypiechart.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.sparkline.js"></script>
		<script src="<?php echo base_url() ?>assets/js/flot/jquery.flot.js"></script>
		<script src="<?php echo base_url() ?>assets/js/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url() ?>assets/js/flot/jquery.flot.resize.js"></script>

		<!-- page specific plugin scripts -->
		<script src="<?php echo base_url() ?>assets/js/dataTables/jquery.dataTables.js"></script>
		<script src="<?php echo base_url() ?>assets/js/dataTables/jquery.dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url() ?>assets/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js"></script>
		<script src="<?php echo base_url() ?>assets/js/dataTables/extensions/ColVis/js/dataTables.colVis.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url() ?>assets/js/ace/elements.scroller.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/elements.colorpicker.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/elements.fileinput.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/elements.typeahead.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/elements.wysiwyg.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/elements.spinner.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/elements.treeview.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/elements.wizard.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/elements.aside.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.ajax-content.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.touch-drag.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.sidebar.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.sidebar-scroll-1.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.submenu-hover.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.widget-box.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.settings.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.settings-rtl.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.settings-skin.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.widget-on-reload.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.searchbox-autocomplete.js"></script>

		<!-- inline scripts related to this page -->

		<!-- Datatables -->
	    <script>
	      $(document).ready(function() {
	        var handleDataTableButtons = function() {
	          if ($("#datatable-buttons").length) {
	            $("#datatable-buttons").DataTable({
	              dom: "Bfrtip",
	              buttons: [
	                {
	                  extend: "copy",
	                  className: "btn-default"
	                },
	                {
	                  extend: "csv",
	                  className: "btn-default"
	                },
	                {
	                  extend: "excel",
	                  className: "btn-default"
	                },
	                {
	                  extend: "pdfHtml5",
	                  className: "btn-default"
	                },
	                {
	                  extend: "print",
	                  className: "btn-default"
	                },
	              ],
	              responsive: true
	            });
	          }
	        };

	        TableManageButtons = function() {
	          "use strict";
	          return {
	            init: function() {
	              handleDataTableButtons();
	            }
	          };
	        }();

	        $('#datatable').dataTable();

	        $('#datatable-keytable').DataTable({
	          keys: true
	        });

	        $('#datatable-responsive').DataTable();

	        $('#datatable-scroller').DataTable({
	          ajax: "js/datatables/json/scroller-demo.json",
	          deferRender: true,
	          scrollY: 380,
	          scrollCollapse: true,
	          scroller: true
	        });

	        $('#datatable-fixed-header').DataTable({
	          fixedHeader: true
	        });

	        var $datatable = $('#datatable-checkbox');

	        $datatable.dataTable({
	          'order': [[ 1, 'asc' ]],
	          'columnDefs': [
	            { orderable: false, targets: [0] }
	          ]
	        });
	        $datatable.on('draw.dt', function() {
	          $('input').iCheck({
	            checkboxClass: 'icheckbox_flat-green'
	          });
	        });

	        TableManageButtons.init();
	      });
	    </script>
	    <!-- /Datatables -->

		<!-- the following scripts are used in demo only for onpage help and you don't need them -->
		<?php echo link_tag('assets/css/ace.onpage-help.css');?>

		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="<?php echo base_url() ?>assets/js/ace/elements.onpage-help.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace/ace.onpage-help.js"></script>

		<!-- Datatables -->
	    <script src="<?php echo base_url(); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	    <script src="<?php echo base_url(); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
	    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
	    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
	    <script src="<?php echo base_url(); ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
	    <script src="<?php echo base_url(); ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	    <script src="<?php echo base_url(); ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	    <script src="<?php echo base_url(); ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
	    <script src="<?php echo base_url(); ?>vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>

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

	</body>
</html>
