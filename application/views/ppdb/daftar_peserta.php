<div class="container">
		<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>No Peserta</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Kota</th>
					<th>Provinsi</th>
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
					<td><?php echo $peserta->provinsi;?></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>