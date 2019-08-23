<div class="container">
								<h3 class="header smaller lighter blue"> 
									Total Peserta Ganjil:  <?PHP echo $jumlah_ganjil; ?>   
									|| Total Peserta Genap : <?PHP echo $jumlah_genap; ?>   


							</h3> 
								<table class="table table-striped table-bordered data">
									<button><a href="<?php echo site_url('admin/tambahpeserta');?>">Tambah Peserta</a></button>

			<thead>
				<tr>			
					<!-- <th>No Registrasi</th> -->
					<th>Angkatan</th>
					<th>Program </th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Kota</th>
					<th>No HP</th>
					<th>Foto</th>
					<th>Aksi</th>
				<!--<th>Dokumen</th> -->
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
				?>
				<tr>
					<!--<td><?php echo $peserta->id_peserta;?></td>-->
					<td><?php echo $peserta->angkatan;?></td>
					<td><?php echo $peserta->program;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->jenis_kelamin;?></td>
					<td><?php echo $peserta->kabupaten ."-".$peserta->provinsi ?></td>
				
					<td><?php echo $peserta->no_handphone;?></td>
					<td><img style="width:75px; height: 75px"src="<?php echo base_url() .'uploads/Dokumen/'.$peserta->foto_diri ?>"> </td>
					<!--<td><a href="<?php echo site_url('admin/download/'.$peserta->dokumen);?>">Download Lampiran</a></td> -->
					<td><a href="<?php echo site_url('admin/biodatapeserta/'.$peserta->id_peserta);?>">Detail | </a>
					<a href="<?php echo site_url('admin/editpeserta/'.$peserta->id_peserta);?>">Edit | </a>
					<a href="<?php echo site_url('admin/hapus_peserta/'.$peserta->id_peserta);?>">Hapus</a>
					</td>
					
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>