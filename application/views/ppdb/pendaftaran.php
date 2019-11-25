 <div class="panel panel-info">
	<div class="panel-heading">Form Pendaftaran </div>
	<div align="center"> Harap email dan password di catat </div>
  <div class="panel-body">
    <p>
	<form class="form-horizontal" action="<?php echo site_url('ppdb/proses_daftar');?>" method="post">
	<div class="col-sm-10 col-sm-offset-2">
	
	<?php $info=$this->session->flashdata('error');
		if (!empty($info))
		{
			echo $info;
		}
	?>
	
	<?php echo validation_errors();?>
	
	</div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="" class="form-control" name="nama_lengkap" value="<?php echo set_value('nama_lengkap')?>" id="nama_lengkap" placeholder="Nama Lengkap Tanpa Gelar">
    </div>

</div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="" class="form-control" name="email" value="<?php echo set_value('email')?>" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  
 
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  

  
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Daftar</button>
    </div>
  </div>
   
</form>
</p>
  </div>


</div>