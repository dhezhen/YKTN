
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
    <h3 class="panel-title">Formulir Pendaftaran</h3>
  </div>
  <div class="panel-body">
  
   
  <h1>Data Peserta Karantina</h1>
<div class="progress" data-percent="">
		<div class="bar" style="width:100%;"></div>
					</div>

    
		 <?= form_open_multipart('admin/proses_edit', ['class'=>'form-horizontal']) ?>

<div class="control-group">
		<label class="control-label" for="form-field-2" >Status Peserta</label>
		<div class="controls">
			<select name="status_peserta">
				<option> <?php echo $peserta->status_peserta; ?></option>
				<option>---Pilih Salah Satu ----</option>
				<option  value="Peserta Baru">Peserta Baru</option>
				<option value="Alumni">Alumni</option>
					

			</select>					
		</div>
	</div>



<div class="control-group">
		<label class="control-label" for="form-field-3">Angkatan </label>
		<div class="controls">
			<select class="font" name="angkatan">
     <option> <?php echo $peserta->angkatan;?> </option>
     <option value="-">-- Pilih angkatan ---</option>

     <option value="43">43 (8 September - 13 Oktober 2019)</option>
     <option value="44">44 (20 Oktober - 24 November 2019)</option>
     <option value="45">45 (1 Desember 2019 - 5 Januari 2020)</option>
      </select>	
		</div>
</div>

<div class="control-group">
		<label class="control-label" for="form-field-3"> Program </label>
		<div class="controls">
			<select class="form-control" name="program">
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
		
		<label class="control-label" for="form-field-2">Email</label>
			<div class="controls">
				<input type="text"  id="font"  placeholder="" name="email" value="<?php echo $peserta->email;?>" />			
			</div>
	</div>	

	<div class="control-group">
		
		<label class="control-label" for="form-field2">Usename</label>
			<div class="controls">
				<input type="text"  id="font"  placeholder="" name="email" value="<?php echo $peserta->username;?>" />			
			</div>
	</div>	
	<div class="control-group">
		
		<label class="control-label" for="form-field2">Password</label>
			<div class="controls">
				<input type="text"  id="font"  placeholder="" name="Password" value="<?php echo $peserta->password;?>" />			
			</div>
	</div>	
	
	<div class="control-group">
		<label class="control-label" for="form-field-2">No HP</label>
		<div class="controls">
			<input type="text" id="font" placeholder="" name="no_handphone" value="<?php echo $peserta->no_handphone;?>" />						
		</div>
	</div>	

	<div class="control-group">
		<label class="control-label" for="form-field-2">Kontak Darurat</label>
		<div class="controls">
			<input type="text" id="font"  placeholder="" name="no_darurat" value="<?php echo $peserta->no_darurat;?>" />						
		</div>
	</div>

<div class="control-group">
		<label class="control-label" for="form-field-2">No Identitas</label>
		<div class="controls">
			<input type="text" id="font"  placeholder="" name="no_identitas" value="<?php echo $peserta->no_identitas;?>" />						
		</div>
	</div>

	<div class="control-group">
			<label class="control-label" for="form-field-2">Nama Lengkap</label>
				<div class="controls">
					<input type="text" id="font"  placeholder="" name="nama_lengkap" value="<?php echo $peserta->nama_lengkap;?>" />	 

					Nama Arabic : 	
					<input type="text" style="font-size: 18pt; color:black" placeholder="" name="nama_lengkap_arab" dir="rt2" class="keyboardInput" value="<?php echo $peserta->nama_lengkap_arab;?>" />						
				</div> 
			
				
	</div>	
<div class="control-group">
			<label class="control-label" for="form-field-2">Nama Ayah</label>
				<div class="controls">
					<input type="text"  id="font" name="nama_ayah" value="<?php echo $peserta->nama_ayah;?>" />	 

					Nama Arabic : 	
					<input style="font-size: 18pt; color: black" type="text"  placeholder="" name="nama_ayah_arab"  dir="rt2" class="keyboardInput" value="<?php echo $peserta->nama_ayah_arab;?>" />						
				</div> 	
	</div>	

<div class="control-group">
		<label class="control-label" for="form-field-2">Pekerjaan</label>
		<div class="controls">
			<input type="text" id="font"  placeholder="" name="pekerjaan" value="<?php echo $peserta->pekerjaan;?>" />						
		</div>
	</div>




	<div class="control-group">
		<label class="control-label" for="form-field-2">Jenis Kelamin</label>
		<div class="controls">
			<select name="jenis_kelamin">
				<option><?php echo $peserta->jenis_kelamin; ?></option>
				<option >Pilih Jenis Kelamin</option>
				<option value="Laki - Laki"> Laki - Laki </option>
				<option value="Perempuan">Perempuan </option>


			</select>
	</div>
</div>




<div class="control-group">
		<label class="control-label" for="form-field-2">Tempat, Tanggal Lahir</label>
		<div class="controls">
<input type="text" id="font" placeholder="Tempat Lahir"   name="tempat_lahir" value="<?php echo $peserta->tempat_lahir;?>" />
<input type="date"  placeholder="Tanggal Lahir"  name="tanggal_lahir" value="<?php echo $peserta->tanggal_lahir;?>" />


		</div>
	</div>

<div class="control-group">
		<label class="control-label" for="form-field-2">Alamat</label>
		<div class="controls">
			<textarea id="font" placeholder="" name="alamat" maxlength="100" style="width: 649px; height: 211px;">
			<?php echo  $peserta->alamat; ?>
			</textarea>			
		</div>
	</div>

<div class="control-group">
		<label class="control-label" for="form-field-2">Kewarganegaraan</label>
		<div class="controls">
			<input type="text" id="font"   name="kewarganegaraan" value="<?php echo $peserta->kewarganegaraan;?>" />						
		</div>
	</div>

<div class="control-group">
		<label class="control-label" for="form-field-2">Kabupaten</label>
		<div class="controls">
			<input type="text" id="font"   name="kabupaten" value="<?php echo $peserta->kabupaten;?>" />	

			Provisi : 
			<input type="text" id="font"   name="provinsi" value="<?php echo $peserta->provinsi;?>" />	

		</div>
	</div>


<div class="control-group">
		<label class="control-label" for="form-field-2">Status Pernikahan</label>
		<div class="controls">
			<select name="status_pernikahan">
				<option><?php echo $peserta->status_pernikahan?></option>
				<option>--Pilih Salah Satu--</option>
				<option value="Menikah">Menikah</option>
				<option value="Lajang">Lajang</option>
				<option value="Duda">Duda</option>
				<option value="Janda">janda</option>

			</select>					
		</div>
	</div>   
<div class="control-group">
		<label class="control-label" for="form-field-2">Stok Hafalan</label>
		<div class="controls">
			<select class="form-control" name="stok_hafalan">
      <option><?php echo $peserta->stok_hafalan;?></option>
      <option value="1 Juz"> 1 Juz</option>
      <option value="2 Juz">2 Juz</option>
      <option value="3 Juz"> 3 Juz</opti5on>
      <option value="4 Juz"> 4 Juz</option>
      <option value="5 Juz"> 5 Juz</option>
      <option value="6 Juz"> 6 Juz</option>
      <option value="7 Juz"> 7 Juz</option>
      <option value="8 Juz"> 8 Juz</option>
      <option value="9 Juz"> 9 Juz</option>
      <option value="10 Juz"> 10 Juz</option>
      <option value="12 Juz"> 12 Juz</option>
      <option value="13 Juz"> 13 Juz</option>
      <option value="14 Juz"> 14 Juz</option>
      <option value="15 Juz"> 15 Juz</option>
      <option value="16 Juz"> 16 Juz</option>
      <option value="17 Juz"> 17 Juz</option>
      <option value="18 Juz"> 18 Juz</option>
      <option value="19 Juz"> 19 Juz</option>
      <option value="20 Juz"> 20 Juz</option>
      <option value="21 Juz"> 21 Juz</option>
      <option value="22 Juz"> 22 Juz</option>
      <option value="23 Juz"> 23 Juz</option>
      <option value="24 Juz"> 24 Juz</option>
      <option value="25 Juz"> 25 Juz</option>
      <option value="26 Juz"> 26 Juz</option>
      <option value="27 Juz"> 27 Juz</option>
      <option value="28 Juz"> 28 Juz</option>
      <option value="29 Juz"> 29 Juz</option>
      <option value="30 Juz"> 30 Juz</option>
      </select>				
		</div>
	</div>   

<div class="control-group">
		<label class="control-label" for="form-field-2">Asal Sekolah / Instansi</label>
		<div class="controls">
			<input type="text" id="font"   name="sekolah_instansi" value="<?php echo $peserta->sekolah_instansi;?>" />						
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="form-field-2">Ukuran Baju </label>
		<div class="controls">
			<SELECT class="form-control" name="ukuran_baju">
        <option><?php echo $peserta->ukuran_baju;?></option>
        <option >--Pilih Ukuran Baju--</option>
       <option value="S Anak - Anak">S Anak - Anak</option>
       <option value="M Anak - Anak">M Anak - Anak</option>
       <option value="L Anak - Anak">L Anak - Anak</option>
       <option value="LL Anak - Anak">LL Anak - Anak</option>
       <option value="Xl Anak - Anak">XL Anak - Anak</option>
       <option value="S Dewasa">S Dewasa</option>
      <option value="M Dewasa">M Dewasa</option>
      <option value="L Dewasa">L Dewasa</option>
      <option value="LL Dewasa">LL Dewasa</option>
      <option value="XL Dewasa">XL Dewasa</option>
       

     </SELECT>

		</div>
	</div>






    <input type="hidden" name="id_peserta" value="<?php echo $peserta->id_peserta;?>"/>



<button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
<?= form_close() ?>

	
	
  </div>

</body>
</html>


