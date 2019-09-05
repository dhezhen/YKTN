<div class="container">
								<h3 class="header smaller lighter blue">Peserta Yang Belum Verifikasi : <?php echo $jumlah;?></h3>
								<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>No Pendaftaran</th>
					<th>No Handphone</th>
					<th>Nama Lengkap</th>
					<th>Asal Daerah</th>
					<th>Jenis Kelamin</th>
					<th>Nilai Test</th>
					
			
				<!--	<th>Dokumen</th> -->                                                                                                                                                                                         
					<th align="center"><a href="<?php echo site_url('admin/tambahpeserta');?>">Action</a></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
				?>
				<tr>
					<td><?php echo $peserta->id_peserta;?></td>
					<td><?php echo $peserta->no_handphone;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->kabupaten." - ".$peserta->provinsi ?></td>
		
					<td><?php echo $peserta->jenis_kelamin;?></td>
					<td><?php echo $peserta->nilai_tahsin;?></td>
					<!--	<td><?php echo $peserta->usia;?></td>
					<td><?php echo $peserta->status;?></td>
					 <td><?php echo $peserta->keterangan;?></td> -->
					<td><a href="<?php echo site_url('admin/verifikasipeserta/'.$peserta->id_peserta);?>">Verifikasi</a></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>