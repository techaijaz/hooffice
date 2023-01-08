<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">

	     <title><?php echo $title_for_layout ?> | Inventory</title>

	    <!-- Custom fonts for this template-->
	    <link href="<?php echo base_url('assets/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
	        rel="stylesheet">

	    <!-- Custom styles for this template-->
	    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

	</head>

	<body class="bg-gradient-primary">
			
		<?php echo $content_for_layout; ?> 
	    

	    <!-- Custom scripts for all pages-->
	    <script src="<?php echo base_url('assets/js/jquery/jquery.min.js') ?>"></script>
	    <script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>
	    
	    <script><?php echo $extra_head; ?></script>
	    <script type="text/javascript">
			var base_url = '<?php echo base_url(); ?>'
		</script>
	</body>
</html>