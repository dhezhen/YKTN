<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>SISINFO YKTN</title>
	
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/bootstrap/css/custom2.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">

	
		
	
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo base_url('assets/images/slogan.png');?>">
				</div>
				<div class="col-md-5 col-md-offset-3">
					<br/>
					<h2><p align="right">Yayasan Karantina Tahfizh Al-Quran Nasional</p></h2>
					<h5><p align="right">Jl. Baru Obyek Wisata Cibulan Rt. 17 Rw. 04 Maniskidul – Jalaksana, Kuningan Jawa barat 45554</p></h5>
					<h5><p align="right">E-mail:hafalquransebulan@gmail.com</p></h5>
			</div>
		</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<?php echo $_top_menu;?>
			</div>
		</div>
		
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php echo $_content;?>
			</div>
		</div>
		
	</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datepicker/js/bootstrap-datetimepicker.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script>
$(document).ready(function(){
$(‘.datepicker’).datepicker();
});
</script>
<script type="text/javascript" src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</body>
</html>

























