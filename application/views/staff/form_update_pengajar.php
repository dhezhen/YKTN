
<!DOCTYPE html>
<html>
<head>
	<title> Data Muhaffizh</title>
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
    <h3 class="panel-title">Daftar Pengajar Karantina Tahfizh Al-Qur'an </h3>
  </div>
  <div class="panel-body">
  
   
  <h1>Data Muhaffizh - Muhaffizhah</h1>
<div class="progress" data-percent="">
		<div class="bar" style="width:100%;"></div>
					</div>

    
		 <?= form_open_multipart('Staff/update_pengajar',['class'=>'form-horizontal']) ?>
		

<!-- <div class="control-group">
			<label class="control-label" for="form-field-2">Kode Pengajar</label>
			<div class="controls">
				<input type="text"  id="font" value="< ?php echo $pengajar->id_pengajar; ?>" readonly name="id_pengajar" />	
			</div>
</div> -->

<div class="control-group">
			<label class="control-label" for="form-field-2">Nama Lengkap</label>
			<div class="controls">
				<input type="text"  id="font"  placeholder="" name="nama_p" value="<?php echo $pengajar->nama_p; ?>" />	
			</div>
</div>


<div class="control-group">
		<label class="control-label" for="form-field-3"> Program </label>
		<div class="controls">
<select class="form-control" name="program">
    
     <option> <?php echo $pengajar->program; ?></option>
     <option value="">-Pilih program-</option>
    <option value="3 Bulan Mutqin">3 Bulan Mutqin</option>
     <option value="1 Bulan 30 Juz"> 1 Bulan 30 Juz</option>
     <option value="3 Pekan 15 Juz">3 Pekan 15 Juz </option>
     <option value="2 Pekan 10 Juz">2 Pekan 10 Juz</option>
     <option value="weekend 1 Juz">Weekend 1 Juz</option>
     <option value="weekend Tahsin Tuntas">weekend Tahsin Tuntas</option>
    
      </select>
</div>
</div>

<div class="control-group">
			<label class="control-label" for="form-field-2">Angkatan</label>
			<div class="controls">
				<select name="angkatan" class='control'>
					<option ><?php echo $pengajar->angkatan; ?></option>
					<option value="">-Pilih angkatan-</option>
					<option value=44>44</option>
					<option value=45>45</option>
					<option value=46>46</option>
					<option value=47>47</option>
					<option value=48>48</option>
					

				</select>
			</div>
</div>	

<div class="control-group">
			<label class="control-label" for="form-field-2">Jenis Kelamin</label>
			<div class="controls">
			<select name='jenis_kelamin'>
  					<option> <?php echo $pengajar->jenis_kelamin; ?> </option>
  					<option> --silahkan pilih-- </option>
  					<option value='L'> Laki - Laki  </option>
  					<option value='P'> Perempuan </option>
				</select>
			</div>
</div>	
<div class="control-group">
			<label class="control-label" for="form-field-2">Status Pernikahan</label>
			<div class="controls">
				<select name='status_pernikahan'>
  					<option ><?php echo $pengajar->status_pernikahan; ?> </>
  					<option value=''> -silahkan pilih- </>
  					<option value='Menikah'> Menikah </>
  					<option value='lajang'> Lajang </>
  					<option value='Duda'> Duda </>
  					<option value='janda'> Janda </>
				</select>
			</div>
</div>	

<div class="control-group">
			<label class="control-label" for="form-field-2">Tempat, Lahir</label>
			<div class="controls">
				<input type="text"  id="font"  placeholder="" value="<?php echo $pengajar->tempat_lahir; ?>" name="tempat_lahir" />	
			</div>
</div>

<div class="control-group">
			<label class="control-label" for="form-field-2" >Tanggal Lahir</label>
			<div class="controls">
				<input type="date"  id="font" value="<?php echo $pengajar->tanggal_lahir; ?>" placeholder="" name="tanggal_lahir" />	
			</div>
</div>

<div class="control-group">
			<label class="control-label" for="form-field-2">alamat</label>
			<div class="controls">
				<textarea name="alamat" placeholder="masukan alamat lengkap">
				<?php echo $pengajar->alamat; ?>
				</textarea>
			</div>
</div>

<div class="control-group">
			<label class="control-label" for="form-field-2">No Handphone</label>
			<div class="controls">
			<input type="text"  id="font"  placeholder="" name="no_handphone" value="<?php echo $pengajar->no_handphone; ?>"/>	

			</div>
</div>

<div class="control-group">
			<label class="control-label" for="form-field-2">Status</label>
			<div class="controls">
			<select name="status_keaktifan">	
                <option ><?php echo $pengajar->status_keaktifan;?><option>
                <option value ="1">aktif</option>
                <option value ="0">Non Aktif</option>
            </select>
			</div>
</div>

<div class="control-group">
		<label class="control-label" for="form-field-2">Foto Diri</label>
		<div class="controls">
			<input type="file"   name="userfile"  />												
		</div>
    </div>
    <div class='control-group'>
    <td><img style="width:75px; height: 75px"src="<?php echo base_url().'uploads/pengajar/'.$pengajar->foto_diri ?>"> </td>

</div>
<input type="hidden" name='id_pengajar' value='<?php echo $pengajar->id_pengajar; ?>'>

<button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
<?= form_close() ?>

	
	
  </div>

</body>
</html>


