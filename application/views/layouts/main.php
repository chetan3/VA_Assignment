<!DOCTYPE html>
<html>
<head>
<title>Welcome To My Project</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js">

</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-2">
				<?php $this->load->view('leftNav_view'); ?>
			</div>
			<div class="col-10">
				<?php $this->load->view($main_view, $output); ?>
			</div>
		</div>
	</div>

</body>
</html>