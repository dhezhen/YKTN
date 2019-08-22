<div class="container">
								<h3 class="header smaller lighter blue">Peserta Yang Telah Verifikasi : <?php echo $jumlah;?></h3>
								<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>No Pendaftaran</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Asal Kota</th>
					<th>No Handphone</th>
					<th>Nilai Test</th>
					<th>Keterangan</th>
					<th>Aksi</th>
					
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
					<td><?php echo $peserta->kabupaten."-".$peserta->provinsi;?></td>
					<td><?php echo $peserta->no_handphone;?></td>
					<td><?php echo $peserta->nilai_tahsin;?></td>
					<td><?php echo $peserta->keterangan;?></td>
					
					<td><a href="<?php echo site_url('admin/unverifikasipeserta/'.$peserta->id_peserta);?>">UnVerifikasi</a></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>