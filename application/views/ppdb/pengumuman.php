<style type="text/css">

	.header {
		text-align: center;
		text-decoration-style: bold;
		font-size: 16pt;
		font-style: bold;
		color:blue;


	}

</style>

<div class="header">
	
	Karantina Tahfizh Al-Qurán Nasional Angkatan ke 43 & 44<br>
	Daftar Peserta Yang telah Lolos melakukan Test Seleksi Administrasi dan Test Bacaan Al-Qur'an 

</div>
<hr style="border-color: blue;">
<br>


<div class="container">

<?php
	$pengumuman = $pengumuman->status;
	if ($pengumuman == 'dihidupkan')
	{
	?>
		<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>No Pendaftaran</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Asal kota</th>
					<th>Angkatan</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
				?>
				<tr>
					<td><?php echo $peserta->id_peserta;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->jenis_kelamin;?></td>
					<td><?php echo $peserta->kabupaten;?></td>
					<td><?php echo $peserta->angkatan;?></td>
					
					<td><?php echo $peserta->keterangan;?></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	<?php
	}
	else
	{
	?>
		<div class="alert alert-danger" role="alert">Maaf Pengumuman belum dibuka</div>
	<?php
	}
?>

		
	</div>