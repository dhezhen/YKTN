<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<div class="container">


								<h3 class="header smaller lighter blue">Peserta Yang Telah Verifikasi : <?php echo $jumlah;?></h3>
								<div class="container"> 
 <button type="button" class="btn btn-outline-primary" ><a href="<?php echo base_url() ?>excel/export"> Download to Excel </a>
</button></div>
								 
								</button>
								<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>No Pendaftaran</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Asal Kota</th>
					<th>No Handphone</th>
					<th>Nilai Test</th>
					
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
					
					
					<td><a href="<?php echo site_url('admin/unverifikasipeserta/'.$peserta->id_peserta);?>">UnVerifikasi</a></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>