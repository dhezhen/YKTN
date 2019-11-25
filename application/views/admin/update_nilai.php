
<!DOCTYPE html>
<html>
<head>
	<title> Data Peserta Karantina</title>
</head>

<link rel="stylesheet" type="text/css" href="http://www.arabic-keyboard.org/keyboard/keyboard.css"> 
  <script type="text/javascript" src="http://www.arabic-keyboard.org/keyboard/keyboard.js" charset="UTF-8"></script> 

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
    <h3 class="panel-title">Update Nilai Tahsin</h3>
  </div>
  <div class="panel-body">
  
   
  <h1>Data Peserta Karantina</h1>
<div class="progress" data-percent="">
		<div class="bar" style="width:100%;"></div>
					</div>

    
		 <?= form_open_multipart('admin/proses_update_nilai', ['class'=>'form-horizontal']) ?>



<div class="control-group">
		<label class="control-label" for="form-field-2">Masukan Nilai Tes</label>
		<div class="controls">
			<input type="number"   name="nilai_tahsin" min='10' max='100' value="<?php echo $peserta->nilai_tahsin;?>" />						
		</div>
	</div>


       


		</div>
	</div>






    <input type="hidden" name="id_peserta" value="<?php echo $peserta->id_peserta;?>"/>



<button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
<?= form_close() ?>

	
	
  </div>

</body>
</html>


