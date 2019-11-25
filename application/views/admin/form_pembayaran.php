
<!DOCTYPE html>
<html>
<head>
	<title> Data pembayaran peserta</title>
</head>


<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
	
#font{

	font-size: 12pt;
	color:black;
}

</style>
<body>
<?php
  $info = $this->session->flashdata('info');
  if (!empty($info))
  {
    echo $info;
  }
  ?>

<div class="panel-heading">

  </div>
  <div class="panel-body">
  
   
  <h1>Data Pembayaran Peserta Karantina</h1>
<div class="progress" data-percent="">
		<div class="bar" style="width:100%;"></div>
					</div>

    
		 <?= form_open_multipart('admin/update_pembayaran', ['class'=>'form-horizontal']) ?>


<table class="table" width="75%">
  
  <tr>
    <td>Jenis Pembayaran </td>  
    <td>Nominal  </td>  
      
  <tr>
  <tr>
      <td>Uang Registrasi</td>
      <td><input  name="uang_regis" value="<?php echo $peserta->uang_regis; ?>"></td>
  </tr>
  <tr>
      <td>Uang Akomodasi</td>
      <td><input  name="uang_akomodasi" value="<?php echo $peserta->uang_akomodasi; ?>"></td>
  </tr>
  <tr>
      <td>Uang Wakaf</td>
      <td><input  name="uang_wakaf" value="<?php echo $peserta->uang_wakaf; ?>"></td>
  </tr>

 
</table>





    <input type="hidden" name="id_peserta" value="<?php echo $peserta->id_peserta;?>"/>



<button type="submit" class="btn btn-primary small">Update</button>
<?= form_close() ?>

	
	
  </div>

</body>
</html>


