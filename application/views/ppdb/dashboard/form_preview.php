<!DOCTYPE html>
<html>
<script src='<?php echo base_url('assets/fontawesome/js/all.js');?>'></script>
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css');?>" />
<head>

	<title>Print Formulir</title>
</head>

<script>
function printDiv(elementId) {
    var a = document.getElementById('printing-css').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>

<style type="text/css">
.print_this{display:none;}
 
    @media print {
     .noprint{display: none;}
     .print_this {
       display: block;
     }
    }	

.button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
<body>


	<center><a href="javascript:printDiv('print-area-1');">
<button class="button">Print Formulir</button></a>

<center>

<div id="print-area-1" class="print-area">
<table class="table table-striped table-responsive table-bordered" border="0">
 
	<tr border="0">
		<td colspan="3">
		<img style="height:50% ;width:100%;" src="<?php echo base_url() .'assets/images/header.png' ?>">		
			<H4  align="center">FORMULIR PENDAFTARAN
			KARANTINA TAHFIZH AL-QURAN NASIONAL <br>ANGKATAN KE <B><?php echo $peserta->angkatan ?><B> </H4></td>
	</TR>
</table>
<table class="table table-striped table-responsive table-bordered"  border="1">

	<tr >
		</td>
		<td >No Pendaftaran : <br> <b><?php echo $peserta->id_peserta?><b> </td>
		<td colspan="" ><h4 align="center"> DATA PESERTA KARANTINA 
			</h4></td>
			<td ><b><font style="font-size: 15pt;text-align: center;"><?php echo $peserta->status_peserta?><b> </td>
	</tr>
	<tr>
		<th style="width:20%;">Nama Lengkap : <br><?php echo $peserta->nama_lengkap;?></th>
		
		<td   style="width:60%;">Nama Arab : <br><font style="font-size: 25pt;">
				<?php echo $peserta->nama_lengkap_arab;?></font>

		</td>
		<td rowspan="2"><img style="height: 140px;width:120px;" src="<?php echo base_url() .'uploads/Dokumen/'.$peserta->foto_diri ?>"></td>
	</tr>
	
	<tr>
		<th>Nama Ayah : <br> <?php echo $peserta->nama_ayah;?></th>
		
		<td>Nama Arab :  <br><font style="font-size: 20pt;">
				<?php echo $peserta->nama_ayah_arab;?>
		</font>
		</td>
		
	</tr>
	
 
</table>
<table class="table table-striped table-responsive table-bordered" border="">
	 <tr>
		<th style="width:20%;text-align: left;">Program  </th>

			<td style="width:1%">:</td>
			<td><?php echo $peserta->program ?></td>
		</tr>
	<tr>
		<th style="width:20%;text-align: left;"> Angkatan  </th>

			<td style="width:1%">:</td>
			<td><?php echo $peserta->angkatan ?></td>
		</tr>
		<tr>
		<th style="width:20%;text-align: left;"> No Identitas </th>

			<td style="width:1%">:</td>
			<td><?php echo $peserta->no_identitas ?></td>
		</tr>
	<tr>
		<th style="width:20%;text-align: left;">Tempat, Tgl Lahir </th>

			<td style="width:1%">:</td>
			<td><?php echo $peserta->tempat_lahir."  ,".
				date('d F Y', strtotime($peserta->tanggal_lahir))
				

			?> </td>
		</tr>
<tr>
		<th style="width:20%;text-align: left;">Usia</th>

			<td style="width:1%">:</td>
			<td><?php echo $peserta->usia; ?></td>
		</tr>
		<th style="width:20%;text-align: left;">Jenis Kelamin </th>

			<td style="width:1%">:</td>
			<td><?php echo $peserta->jenis_kelamin

			?></td>
		</tr>
		<tr>
		<th style="width:20%;text-align: left;">Stok Hafalan</th>

			<td style="width:1%">:</td>
			<td><?php echo $peserta->stok_hafalan ?></td>
		</tr>
		<tr>
			<th style="width:20%;text-align: left;">Status</th>

				<td style="width:1%">:</td>
				<td><?php echo $peserta->status_pernikahan ?></td>
		</tr>

		<tr>
			<th style="width:20%;text-align: left;">Alamat</th>

				<td style="width:1%">:</td>
				<td><?php echo $peserta->alamat ?></td>
		</tr>

		<tr>
			<th style="width:20%;text-align: left;">Pekerjaan</th>

				<td style="width:1%">:</td>
				<td><?php echo $peserta->pekerjaan ?></td>
		</tr>

		

		<tr>
			<th style="width:20%;text-align: left;">Alamat Instansi/ Sekolah </th>

				<td style="width:1%">:</td>
				<td><?php echo $peserta->sekolah_instansi ?></td>
		</tr>
		<tr>
				<th style="width:20%;text-align: left;">No Hp</th>
				<td style="width:1%">:</td>
				<td><?php echo $peserta->no_handphone ?></td>
		</tr>
		<tr>
				<th style="width:20%;text-align: left;">No Darurat</th>
				<td style="width:1%">:</td>
				<td><?php echo $peserta->no_darurat ?></td>
		</tr>

		<tr>
				<th style="width:20%;text-align: left;">Ukuran Baju</th>
				<td style="width:1%">:</td>
				<td><?php echo $peserta->ukuran_baju ?></td>
		</tr>

</table>
<table width="100%" border="0">
<tr>
<td width="45%">
</td>
<td align="right">



Kuningan, <?php echo tgl_indo(date("Y-m-d")); ?>
<br>Ttd Peserta
<br><br><br><br> 
<i>materai 6000</i>

<br>
<br>
(<?php echo $peserta->nama_lengkap; ?>)

</td width=1%>
</tr>
</table>
</table>
<table border="0">
	<tr>
	<td>
<img style="height:50% ;width:100%;" src="<?php echo base_url() .'assets/images/footer.png' ?>">
</td>
</tr>
</table>
<br><br><br>

<table>
	<tr>
	<td>
<img style="height:50% ;width:100%;" src="<?php echo base_url() .'assets/images/header.png' ?>">
</td>
</tr>
</table>
<b style="font-size:14;align:center;">

<b><center>SURAT PERNYATAAN</center></b>

<em>
Bismillaahirrahmaanirrahiim
</em>
<br>
<table border="0" width=95%>
<tr >
<td  >
Saya yang bertanda tangan dibawah ini :
</td>
</tr>
</table>
<table border="0" width=95%>
<tr>
<td><br></td><td></td><td></td>
</tr>
<tr>
	<td width=20%>Nama<br></td>
	<td width=1%>:</td>
	<td width=45%><?php echo $peserta->nama_lengkap; ?></td>
</tr>
<tr>
<td></td><td></td><td></td>
</tr>
<tr>
	<td width=20%>Tempat, Tanggal Lahir <br> </td>
	<td width=1%>:</td>
	<td width=45%><?php echo $peserta->tempat_lahir."  ,".
				date('d F Y', strtotime($peserta->tanggal_lahir))
				

			?></td>
</tr>
<tr>
<td></td><td></td><td></td>
</tr>
<tr>
	<td width=20%>Asal Daerah <br> </td>
	<td width=1%>:</td>
	<td width=45%><?php echo $peserta->kabupaten;?></td>
</tr>
<tr>
<td></td><td></td><td></td>
</tr>
<tr>
	<td width=20%>Angkatan  <br> </td>
	<td width=1%>:</td>
	<td width=45%><?php echo $peserta->angkatan; ?></td>
</tr>

<tr>
	<td width=20%>Program  <br> </td>
	<td width=1%>:</td>
	<td width=45%><?php echo $peserta->program ?></td>
</tr>

<tr>
<td colspan=3>
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
bertanggungjawab dalam hal biaya perawatan dll. <br><br>

Demikian surat pernyataan ini saya buat dengan penuh kesadaran untuk 
keberhasilan program Karantina Tahfizh Nasional yang sedang saya jalani.<br><br>

</td>
</tr>
</table>
<table width="100%" border="0">
<tr>
<td width="45%">
</td>
<td align="right">



Kuningan, <?php echo tgl_indo(date("Y-m-d")); ?>
<br>Ttd Peserta
<br><br><br>
<i>materai 6000</i>

<br>
<br>
(<?php echo $peserta->nama_lengkap; ?>)

</td width=1%>
</tr>
</table>
<table >
	<tr>
	<td>
<img style="height:50% ;width:100%;" src="<?php echo base_url() .'assets/images/footer.png' ?>">
</td>

<br>
<br>
<br>
<br>
	

</div>

</div>

</div>





		<tr>

		<!--<th><a href="<?php echo site_url('ppdb/cetak');?>"> Cetak</a></th> -->
		<th><a href="javascript:printDiv('print-area-1');">Print</a></th>
	
	</tr>
	</table>



	<textarea id="printing-css" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="1"] caption{border:none;font-style:italic}.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="" style="display:none;"></iframe>
		</body>
		</html>
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