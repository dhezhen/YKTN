
<!DOCTYPE html>
<html>
<head>
	<title> Update Muahffizh / Muhaffizhah</title>
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
  
   
  <h2>Muhaffizh  - <?php echo $peserta->nama_lengkap;?></h2>
<div class="progress" data-percent="">
		<div class="bar" style="width:100%;"></div>
					</div>

    
		 <?= form_open_multipart('staff/proses_update_muhaffizh', ['class'=>'form-horizontal']) ?>


<table class="table" border='5' width="80%">
  <tr>
  <td>
   <!--  Muhaffizh Saat Ini < ? php echo $p->nama_p?> -->
  </td>
  </tr>
   <tr width="40%">
     <td>Pilih Muhaffizh
        <select class="form-control"  name='id_pengajar'>
          
      
            <option>-- silahkan pilih --</option> 
             <?php foreach ($pengajar as $p)
              {
            ?>
            <option value='<?php echo $p->id_pengajar?>'> <?php echo $p->nama_p?></option>
              <?php 
           
          };?>
        </select>
      </td> 
  </tr>
 
</table>





    <input type="hidden" name="id_peserta" value="<?php echo $peserta->id_peserta;?>"/>



<button type="submit" class="btn btn-primary small">Update</button>
<?= form_close() ?>

	
	
  </div>

</body>
</html>


