
<table class="table table-striped table-responsive table-bordered">
 
	<tr>
		<td colspan="3"><H4 align="center">FORMULIR PENDAFTARAN<br/>
			KARANTINA TAHFIZH AL-QURAN NASIONAL <br>ANGKATAN KE <B><?php echo $peserta->angkatan ?><B> </H4></td>
	</TR>
	<tr>
		<td colspan="2"><br>
			
		</td>
		<td >No Pendaftaran : <br> <b><?php echo $peserta->id_peserta?><b> </td>
		
		
		
	</tr>
	<tr class="info" >
		<td colspan="2"><h4 align="center"> DATA PESERTA KARANTINA 
			</h4></td>
			<td ><b><font style="font-size: 20pt;"><?php echo $peserta->status_peserta?><b> </td>
	</tr>
	<tr>
		<th style="width:20%;">Nama Lengkap : <br><?php echo $peserta->nama_lengkap;?></th>
		
		<td   style="width:60%;">Nama Arab : <br><font style="font-size: 25pt;">
				<?php echo $peserta->nama_lengkap_arab;?></font>

		</td>
		<td rowspan="3"><img style="height: 125x;width:125px;" src="<?php echo base_url() .'uploads/Dokumen/'.$peserta->foto_diri ?>"></td>
	</tr>
	
	<tr>
		<th>Nama Ayah : <br> <?php echo $peserta->nama_ayah;?></th>
		
		<td>Nama Arab :  <br><font style="font-size: 20pt;">
				<?php echo $peserta->nama_ayah_arab;?>
		</font>
		</td>
		
	</tr>
	
 
</table>
<table class="table table-striped table-responsive table-bordered">
	 <tr>
		<th style="width:25%;">Program   </th>

			<td style="width:2%;">:</td>
			<td><?php echo $peserta->program ?></td>
		</tr>
	<tr>
		<th style="width:25%;"> Angkatan  </th>

			<td style="width:2%;">:</td>
			<td><?php echo $peserta->angkatan ?></td>
		</tr>
		<tr>
		<th style="width:25%;"> No Identitas </th>

			<td style="width:2%;">:</td>
			<td><?php echo $peserta->no_identitas ?></td>
		</tr>
	<tr>
		<th style="width:25%;">Tempat, Tgl Lahir </th>

			<td style="width:2%;">:</td>
			<td><?php echo $peserta->tempat_lahir.", ". 
				$peserta->tanggal_lahir."-".
				$peserta->bulan_lahir."-".
				$peserta->tahun_lahir;

			?></td>
		</tr>

		<th style="width:25%;">Jenis Kelamin </th>

			<td style="width:2%;">:</td>
			<td><?php echo $peserta->jenis_kelamin

			?></td>
		</tr>
		<th style="width:25%;">Stok Hafalan</th>

			<td style="width:2%;">:</td>
			<td><?php echo $peserta->stok_hafalan ?></td>
		</tr>
		<tr>
			<th style="width:25%;">Status</th>

				<td style="width:2%;">:</td>
				<td><?php echo $peserta->status_pernikahan ?></td>
		</tr>

		<tr>
			<th style="width:25%;">Alamat</th>

				<td style="width:2%;">:</td>
				<td><?php echo $peserta->alamat ?></td>
		</tr>

		<tr>
			<th style="width:25%;">Pekerjaan</th>

				<td style="width:2%;">:</td>
				<td><?php echo $peserta->pekerjaan ?></td>
		</tr>

		

		<tr>
			<th style="width:25%;">Alamat Instansi/ Sekolah </th>

				<td style="width:2%;">:</td>
				<td><?php echo $peserta->sekolah_instansi ?></td>
		</tr>
		<tr>
				<th style="width:25%;">No Hp</th>
				<td style="width:2%;">:</td>
				<td><?php echo $peserta->no_handphone ?></td>
		</tr>
		<tr>
				<th style="width:25%;">No Darurat</th>
				<td style="width:2%;">:</td>
				<td><?php echo $peserta->no_darurat ?></td>
		</tr>

		<tr>
				<th style="width:25%;">Ukuran Baju</th>
				<td style="width:2%;">:</td>
				<td><?php echo $peserta->ukuran_baju ?></td>
		</tr>






		<tr>
		<th><a href="<?php echo site_url('admin/cetak/'.$peserta->id_peserta);?>"> Cetak</a></th>
	</tr>
 
	<table>