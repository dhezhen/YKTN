
<link rel="stylesheet" type="text/css" href="http://www.arabic-keyboard.org/keyboard/keyboard.css"> 
  <script type="text/javascript" src="http://www.arabic-keyboard.org/keyboard/keyboard.js" charset="UTF-8"></script> 


<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Formulir Pendaftaran</h3>
  </div>
  <div class="panel-body">
  
  <?php
  $info = $this->session->flashdata('info');
  if (!empty($info))
  {
    echo $info;
  }
  ?>
   
  <h1>Data Calon Peserta Karantina</h1>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    <span class="sr-only">100% Complete</span>
  </div>
</div>
    
      <?= form_open_multipart('ppdb/up_biodata', ['class'=>'form-horizontal']) ?>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Program</label>
<div class="col-sm-10">
    <select class="form-control" name="program">
     <option> <?php echo $peserta->program;?> </option>
     <option value="-">-- Pilih Program---</option>
     <option value="3 Bulan Mutqin">3 Bulan Mutqin</option>
     <option value="1 Bulan 30 Juz"> 1 Bulan 30 Juz</option>
     <option value="3 Pekan 15 Juz">3 Pekan 15 Juz </option>
     <option value="2 Pekan 10 Juz">2 Pekan 10 Juz</option>
     <option value="Sabtu - Ahad 1 Juz">Sabtu - Ahad 1 Juz</option>
     <option value="Sabtu - Ahad Tahsin Tuntas">Sabtu - Ahad Tahsin Tuntas</option>
    
      </select>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Angkatan</label>
<div class="col-sm-10">
    <select class="form-control" name="angkatan">
     <option> <?php echo $peserta->angkatan;?> </option>
     <option value="-">-- Pilih angkatan ---</option>
     <option value="44 (20 Oktober - 24 November 2019)">44 (20 Oktober - 24 November 2019)</option>
     <option value="45 (1 Desember - 5 Januari 2020)">45 (1 Desember 2019 - 5 Januari 2020)</option>
      </select>
    </div>
</div>

 


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="email" name="email" value="<?php echo $peserta->email;?>">
    </div>
  </div>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">No Hp</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="No Handphone" name="no_handphone" value="<?php echo $peserta->no_handphone;?>">
    </div>
  </div>

<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Kontak Darurat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Kontak Darurat" name="no_darurat" value="<?php echo $peserta->no_darurat;?>">
    </div>
  </div>

   

<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
    <div class="col-sm-10">
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Nama" name="nama_lengkap" value="<?php echo $peserta->nama_lengkap;?>">
    </div>
    <label for="inputEmail3" class="col-sm-2 control-label">Nama Arab</label>
    <div class="col-sm-4">
     <input type="text" name="nama_lengkap_arab" id="nama_lengkap_arab" value="<?php echo $peserta->nama_lengkap_arab?>"  dir="rtl" class="keyboardInput" >

    </div>
    </div>
  
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama Ayah </label>
      <div class="col-sm-10">
      <div class="col-sm-4">
        <input type="text" class="form-control" id="inputPassword3" placeholder="Nama" name="nama_ayah" value="<?php echo $peserta->nama_ayah;?>">
      </div>
      <label for="inputEmail3" class="col-sm-2 control-label">Nama Arab</label>
      <div class="col-sm-4">
       <input type="text" name="nama_ayah_arab" id="nama_ayah_arab" value="<?php echo $peserta->nama_ayah_arab?>"  dir="rt2" class="keyboardInput" >

    </div>
    </div>
</div>










  
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Pekerjaan" name="pekerjaan" value="<?php echo $peserta->pekerjaan;?>">
    </div>
  </div>

   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">No Identitas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="No Identitas ex:KTP/KK?Kartu Pelajat/SIM/PASSPORT" name="no_identitas" value="<?php echo $peserta->no_identitas;?>">

      
    </div>
  </div>


  

  
 
  
  
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select class="form-control" name="jenis_kelamin">
      <option><?php echo $peserta->jenis_kelamin;?></option>
      <option value="Laki - Laki"> Laki - Laki</option>
      <option value="Perempuan"> Perempuan</option>
      
      </select>
    </div>
  </div>
    
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Tempat Lahir</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Mis: Bekasi" name="tempat_lahir" value="<?php echo $peserta->tempat_lahir;?>">
    </div>
  
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>
    <div class="col-sm-10">
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEmail3" name="tanggal_lahir" value="<?php echo $peserta->tanggal_lahir;?>" placeholder="Tanggal Lahir(xx)">
    </div>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEmail3" name="bulan_lahir" value="<?php echo $peserta->bulan_lahir;?>" placeholder="Bulan Lahir(xx)">
    </div>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputEmail3" name="tahun_lahir" value="<?php echo $peserta->tahun_lahir;?>" placeholder="Tahun lahir(xxxx)">
    </div>
    </div>
  </div>

<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <textarea row="5" class="form-control" id="inputPassword3" name="alamat" value="<?php echo $peserta->alamat;?>" placeholder="Alamat"><?php echo $peserta->alamat;?></textarea>

    </div>
  </div>

 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Kabupaten / Kota</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Kota / Kabupaten" name="kabupaten" value="<?php echo $peserta->kabupaten;?>">
    </div>
  
  </div> 
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Provinsi</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword3" placeholder="provinsi" name="provinsi" value="<?php echo $peserta->provinsi;?>">
    </div>
  
  </div>



 


  
 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Status Pernikahan </label>
    <div class="col-sm-10">
         <select class="form-control" name="status_pernikahan">
      <option> <?php echo $peserta->status_pernikahan;?> </option>
      <option value="Lajang"> Lajang</option>
      <option value="Duda">Duda</option>
      <option value="Janda">janda</option>
      </SELECT>
    </div>
  </div>


   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Status Peserta </label>
    <div class="col-sm-10">
      <select class="form-control" name="status_peserta">
      <option><?php echo $peserta->status_peserta;?></option>
      <option>Baru</option>
      <option>Alumni</option>
      </select>
    </div>
  </div>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Kewarganegaraan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Kewarganegaraan" name="kewarganegaraan" value="<?php echo $peserta->kewarganegaraan;?>">
    </div>
  </div>
  
  
 
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label  ">Stok Hafalan</label>
    <div class="col-sm-5">
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

  
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Ukuran Baju</label>
    <div class="col-sm-5">
     <SELECT class="form-control"name="ukuran_baju">
        <option><?php echo $peserta->ukuran_baju;?></option>
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
  
 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Asal Sekolah / Instansi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Asal Sekolah / Instansi" name="sekolah_instansi" value="<?php echo $peserta->sekolah_instansi;?>">
    </div>
  </div>


<h1>UPLOAD FILE </h1>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    <span class="sr-only">100% Complete</span>
  </div>
</div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Foto Diri</label>
    <div class="col-sm-9">
      <input type="file" class="form-control" name="userfile">
    </div>                                                                            
  </div>

  
<input type="hidden" name="id_peserta" value="<?php echo $peserta->id_peserta;?>"/>
<button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
<?= form_close() ?>
  

  
  </div>  
</div>



