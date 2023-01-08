<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title><?php echo $title_for_layout ?> | Beehives</title> 

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('assets/css/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
	rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/css/toastr.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/fancyValidation/validationEngine.jquery.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
	<?php echo $this->layouts->css_includes(); ?>
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php //$this->load->view('layouts/sidebar'); ?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<?php $this->load->view('layouts/header'); ?>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">
					<?php echo $content_for_layout; ?> 
				</div>

			</div>
			<!-- End of Main Content -->
			<?php $this->load->view('layouts/footer'); ?>
			<!-- Footer -->

			<!-- End of Footer -->
		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?php echo base_url('auth/logout') ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
					<form id="logout-form" action="<?php echo base_url('auth/logout') ?>" method="POST" class="d-none">
						
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url('assets/js/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url('assets/js/jquery-easing/jquery.easing.min.js'); ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

	<!-- Page level plugins -->
	<script src="<?php //echo base_url('assets/js/chart.js/Chart.min.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js">
	</script>
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">
	</script>
	<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js">
	</script>
	<script src="<?php echo base_url('assets/js/sweetalert2@11.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/toastr.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/fancyValidation/languages/jquery.validationEngine-en.js'); ?>"></script>
	<script src="<?php echo base_url('assets/fancyValidation/jquery.validationEngine.js'); ?>"></script>
	<script src="<?php echo base_url('assets/fancyValidation/validator.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/common.js'); ?>"></script>

	<!-- Page level custom scripts -->
	<script><?php echo $extra_head; ?></script>
	<script>
		var base_url = "<?php echo base_url(); ?>";
	</script>
	<?php echo $this->layouts->js_includes(); ?>
    <!--<script src="js/demo/chart-area-demo.js"></script>
    	script src="js/demo/chart-pie-demo.js"></script>-->
    </body> 
    </html>
