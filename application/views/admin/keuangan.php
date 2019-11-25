<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='<?php echo base_url('assets/fontawesome/js/all.js');?>'></script>
<script src='<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>'></script>
<script src='<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css');?>'></script>

<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css');?>" />

<div>
								
							</h3> 
		<table class="table table-striped table-bordered data">

			<thead>
				<tr>			
					<!-- <th>No Registrasi</th> -->
					<th>Status Peserta </th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
                    <th>asal</th>
                    <th>No HP</th>
                    <th>Registrasi</th>
					<th>Akomodasi</th>
                    <th>Wakaf</th>
                    <th>Total</th>
					<th>Aksi</th>
				<!--<th>Dokumen</th> -->
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
                    $a = $peserta->uang_akomodasi;
                    $b = $peserta->uang_regis;
                    $c = $peserta->uang_wakaf;
                    $d = $a + $b +$c ;
                    ?>
				<tr>
                    
					<td><?php echo $peserta->status_peserta;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->jenis_kelamin;?></td>
					<td><?php echo $peserta->kabupaten?></td>
					<td><?php echo $peserta->no_handphone;?></td>
					<td><?php echo number_format($peserta->uang_regis);?></td>
					<td><?php echo number_format($peserta->uang_akomodasi);?></td>
                    <td><?php echo number_format($peserta->uang_wakaf);?></td>
                    <td><?php echo number_format($d);?></td>

       <td> <a href="<?php echo site_url('admin/form_pembayaran/'.$peserta->id_peserta);?>">update pembayaran</a></td>
<!-- 					<td><a href="< ? php echo site_url('admin/biodatapeserta/'.$peserta->id_peserta);?>"><i class='fas fa-user' style='font-size:30px color:blue' ></i></a>
					<!-- <a href="< ? php echo site_url('admin/hapus_peserta/'.$peserta->id_peserta);?>"><i class='fas fa-trash' style='font-size:30px color:red' ></i></a> -->
					</td>
					
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>