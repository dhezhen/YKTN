
<!DOCTYPE html>
<html>
<head>
	<title>Verifikasi Syahadah</title>
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

  
   
  <h1>Verifikasi Data Syahadah</h1>
<div class="progress" data-percent="">
		<div class="bar" style="width:100%;"></div>
					</div>

    
		 <?= form_open_multipart('pengajar/proses_edit', ['class'=>'form-horizontal']) ?>



<div class="control-group">
		<label class="control-label" for="form-field-3"> Program </label>
		<div class="controls">
	<select  name="program">
     <option> <?php echo $peserta->program;?> </option>
     <option value="3 Bulan Mutqin">3 Bulan Mutqin</option>
     <option value="1 Bulan 30 Juz"> 1 Bulan 30 Juz</option>
     <option value="3 Pekan 15 Juz">3 Pekan 15 Juz </option>
     <option value="2 Pekan 10 Juz">2 Pekan 10 Juz</option>
     <option value="1 Pekan 5 Juz">1 Pekan 5 Juz</option>
     <option value="weekend 1 Juz">Weekend 1 Juz</option>
     <option value="weekend Tahsin Tuntas">weekend Tahsin Tuntas</option>
    
      </select>
</div>	
</div>	


<div class="control-group">
			<label class="control-label" for="form-field-2">Nama Lengkap</label>
				<div class="controls">
					<input type="text"  id="font" name="nama_lengkap" value="<?php echo $peserta->nama_lengkap;?>" />	 
				
	        </div> 	
	</div>	

<div class="control-group">
			<label class="control-label" for="form-field-2">Nama lengkap + Nama Ayah (Arab)</label>
				<div class="controls">
				<input style="font-size: 18pt; color: black" hint='fulan bin fulan'type="text"  placeholder="" name="nama_syahadah"  dir="rt2" class="keyboardInput" value="<?php echo $peserta->nama_syahadah;?>" />						
	        </div> 	
</div>	

	<div class="control-group">
		<label class="control-label" for="form-field-2">Jenis Kelamin</label>
		<div class="controls">
			<select name="jenis_kelamin">
				<option><?php echo $peserta->jenis_kelamin; ?></option>
				<option >Pilih Jenis Kelamin</option>
				<option value="L"> Laki - Laki </option>
				<option value="P">Perempuan </option>


			</select>
	</div>
</div>




<div class="control-group">
		<label class="control-label" for="form-field-2">Tempat Lahir</label>
		<div class="controls">
        <input type="text" id="font" placeholder="Tempat Lahir"   name="tempat_lahir" value="<?php echo $peserta->tempat_lahir;?>" />
    </div>
</div>
<div class="control-group">
		<label class="control-label" for="form-field-2">Tanggal Lahir</label>
		<div class="controls">
        <input type="date" id="font" placeholder="Tanggal Lahir"   name="tanggal_lahir" value="<?php echo $peserta->tanggal_lahir;?>" />
    </div>
</div>


<div class="control-group">
		<label class="control-label" for="form-field-2">Kabupaten</label>
		<div class="controls">
			<input type="text" id="font"   name="kabupaten" value="<?php echo $peserta->kabupaten;?>" />	
		</div>
</div>
<div class="control-group">
		<label class="control-label" for="form-field-2">Provinsi</label>
		<div class="controls">
		<input type="text" id="font"   name="provinsi" value="<?php echo $peserta->provinsi;?>" />	
		</div>
</div>
    
    <div class="control-group">
			<label class="control-label" for="form-field-2">Perolehan </label>
				<div class="controls">
				<input style="font-size: 18pt; color: black" type="Number "  placeholder="" name="perolehan"  value="<?php echo $peserta->perolehan;?>" />						
	        </div> 	
    </div>	
    <div class="control-group">
			<label class="control-label" for="form-field-2">Nilai Syahadah</label>
				<div class="controls">
				<input style="font-size: 18pt; color: black" type="text"  placeholder="" name="nilai_syahadah"  dir="rt2" class="keyboardInput" value="<?php echo $peserta->nilai_syahadah;?>" />						
	        </div> 	
    </div>	


    <input type="hidden" name="id_peserta" value="<?php echo $peserta->id_peserta;?>"/>


<button type="submit" class="btn btn-primary btn-lg btn-block">Verifikasi</button>
<?= form_close() ?>

	
	
  </div>

</body>
</html>


