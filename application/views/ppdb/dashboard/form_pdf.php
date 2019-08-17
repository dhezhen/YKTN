	<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<title>Pendaftaran Online YKTN</title>

	
</head>
	
	
<body background-color="#F0FFFF">
 	<img  style="width:195mm; height: 100px" src="<?php echo base_url() .'assets/images/header.png' ?>">
		<H4 align="center">
	 		
	 		<BR>
	 		<BR>
				FORMULIR PENDAFTARAN KARANTINA TAHFIZH AL-QURAN NASIONAL <BR>ANGKATAN KE <?php echo $peserta->angkatan;?>
				<br>
				<Font Style="font-size:14pt; color:green;"> (
				<?php echo $peserta->status_peserta;?> )</Font>

		</H4>
		
	
		

<table border="1" cellspacing="0" style=" border-color: #3A3A3A; width: 100%; border:2px solid;position: relative;">

<tr>
		<th style="text-align: center;">  Nama Lengkap : <br><?php echo $peserta->nama_lengkap;?> 
			<br><font style="font-size: 10pt; text-align: center;">Nama Arab : </font>
		</th>

		<th style="text-align: center;">   Nama Ayah  : <br><?php echo $peserta->nama_ayah;?> 
			<br><font style="font-size: 10pt; text-align: center;">
				Nama Arab :
			</font>
		</th>
		
		
	
		<td colspan="2"></td>
		
		<td ><img style="height: 125x;width:125px;" src="<?php echo base_url() .'uploads/Dokumen/'.$peserta->foto_diri ?>"></td>
			
	</tr>


	<tr>
		<th>================================</th>
		
		
		<td>================================</td>
		<td colspan="2">No : <?php echo $peserta->id_peserta;?></td>
		
		<td ></td>
			
	</tr>




</table>
<br>
<br>
<table>

	<tr>
		<th>E-mail</th>
		<td>:</td>
		<td><?php echo $peserta->email;?></td>
		
	</tr>
	<tr>
		<th>No Identitas</th>
		<td>:</td>
		<td><?php echo $peserta->no_identitas;?></td>
	</tr>
	
	<tr>
		<th>Jenis Kelamin</th>
		<td>:</td>
		<td><?php echo $peserta->jenis_kelamin;?></td>
	</tr>
	<tr>
		<th>Tempat & Tanggal Lahir</th>
		<td>:</td>
		<td><?php echo $peserta->tempat_lahir.", "; 
			 echo  $peserta->tanggal_lahir."-"; 
			  echo $peserta->bulan_lahir."-";  
			  echo $peserta->tahun_lahir; ?>
		</td>
	</tr>
	
	<tr>
		<th>Usia</th>
		<td>:</td>
		<td><?php echo $peserta->usia;?></td>
	</tr>

	<tr>
		<th>Alamat</th>
		<td>:</td>
		<td><?php echo $peserta->alamat;?></td>
	</tr>

	<tr>
		<th>Status</th>
		<td>:</td>
		<td><?php echo $peserta->status;?></td>
	</tr>
	<tr>
		<th>Pekerjaan</th>
		<td>:</td>
		<td><?php echo $peserta->pekerjaan;?></td>
	</tr>
	<tr>
		<th>Alamat Instansi / Sekolah </th>
		<td>:</td>
		<td><?php echo $peserta->sekolah_instansi;?></td>
	</tr>
	<tr>
		<th>No Hp  </th>
		<td>:</td>
		<td><?php echo $peserta->no_handphone;?></td>
	</tr>
	<tr>
		<th>No Darurat</th>
		<td>:</td>
		<td><?php echo $peserta->no_darurat;?></td>
	</tr>

   
</table >
<br>
<br>

Kuningan, <?php echo tgl_indo(date("Y-m-d")); ?>
<br>
Ttd Peserta 
<br><br><br><br><br><br><br>


<font style="font-color:grey">
<br>	matrai 6000
<br>
</font>
( <?php echo $peserta->nama_lengkap;?> )

<table style="border: 1;" border="1">
	<tr>
		
	<th rowspan="2" style="background-color: cyan"></th>
	<th></th><th></th>
	</tr>
	

</table>


<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>

<BR>
<img  style="width:195mm; height: 100px" src="<?php echo base_url() .'assets/images/header.png' ?>">



<H3 style="font-size: 16pt; text-align: center;"> SURAT PERNYATAAN</H3>
	<i style="text-align: center;">Bismillahirrahmanirrahim</i>

<br>
<br>
Saya yang bertanda tangan dibawah ini : 
<br>
<br>
<table border="0">
	
	<tr>
		<br>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><?php echo $peserta->nama_lengkap;?></td>
	</tr>
	<tr>
		<br>
		<td>Tempat, Tanggal Lair</td>
		<td>:</td>
		<td><?php echo $peserta->tempat_lahir.", "; 
			 echo  $peserta->tanggal_lahir."-"; 
			  echo $peserta->bulan_lahir."-";  
			  echo $peserta->tahun_lahir; ?>
		</td>
	</tr>

	
	<tr>
		<br>
		<td>Asal Daerah </td>
		<td>:</td>
		<td><?php echo $peserta->kabupaten."-"; echo $peserta->provinsi;?></td>
	</tr>
	<tr>
		<br>
		<td>Angkatan</td>
		<td>:</td>
		<td><?php echo $peserta->angkatan;?></td>
	</tr>
	<tr>
		<td><font style="color:white">====================</font></td>
		<td><font style="color:white">===</font></td>
		<td><font style="color:white">============================</font></td>
	</tr>
</table>
<br>

<br>
Dengan ini menyatakan bahwa saya bersedia mematuhi segala tata tertib,
 peraturan dan jadwal kegiatan Karantina Tahfizh Al Qur’an Nasional
 sebagaimana mestinya. <br> <br>

Apabila dalam pelaksanaannya saya melakukan 
pelanggaran dan atau mengundurkan diri secara
 sepihak, maka saya siap menerima konsekuensi, 
 teguran hingga pengguguran keikutsertaan sebagai 
 peserta tanpa menuntut apapun termasuk pengembalian 
 biaya akomodasi yang sudah dibayarkan.<br> <br> 

Dan apabila dalam pelaksanaan program ini 
saya membutuhkan penanganan medis dan harus 
dirujuk ke Rumah Sakit, maka saya/wali bersedia 
bertanggungjawab dalam hal biaya perawatan dll.
 <br><br>

Demikian surat pernyataan ini saya buat dengan penuh kesadaran untuk 
keberhasilan program Karantina Tahfizh Nasional yang sedang saya jalani.<br><br>




Kuningan, <?php echo tgl_indo(date("Y-m-d")); ?>
<br>
Ttd Peserta 
<br><br><br><br><br><br><br>


<font style="text-align:">
<br>	matrai 6000</font>
<br>

( <?php echo $peserta->nama_lengkap;?> )





<?php
		function tgl_indo($tanggal){
	$bulan = array (
		1 =>   "Januari",
		"Februari",
		"Maret",
		"April",
		"Mei",
		"Juni",
		"Juli",
		"Agustus",
		"September",
		"Oktober",
		"November",
		"Desember"
	);
	$pecahkan = explode("-", $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . " " . $bulan[ (int)$pecahkan[1] ] . " " . $pecahkan[0];
}
?>

</body>
</html>