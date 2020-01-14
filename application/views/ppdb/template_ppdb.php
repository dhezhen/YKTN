<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>SISINFO YKTN</title>
	
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/bootstrap/css/custom2.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">

	
			<script src="<?php echo base_url('assets/html5shiv.min.js');?>"></script>
			<script src="<?php echo base_url('assets/respond.min.js');?>"></script>
		
	
</head>
<body>
		<div class="container">
			<div class="row">
				<div align="center">
					<img style="width:100px;height: 100px;" src="<?php echo base_url('assets/images/logo.png');?>">
				</div>
				<div >
					<br/>
					<h2><p align="center">Yayasan Karantina Tahfizh Al-Quran Nasional</p></h2>
					<h4><p align="center" font-style="italic">Jl. Baru Obyek Wisata Cibulan Rt. 17 Rw. 04 Maniskidul – Jalaksana, Kuningan Jawa barat 45554</p>
					<p align="center">E-mail:hafalquransebulan@gmail.com</p></h4>
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
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</body>
</html>