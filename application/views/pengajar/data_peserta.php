<script src='<?php echo base_url('assets/fontawesome/js/all.js');?>'></script>

<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css');?>" />

						<!-- 		<h3 class="header smaller lighter blue">Peserta Yang Telah Verifikasi : <?php var_dump($jumlah);?></h3> -->
<div class="container"> 
 <a href="<?php echo base_url() ?>excel/export"> <i class='fas fa-file-excel ' style='font-size:36px;color:green'></i></a>
</div>
								 
								</button>
								<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Nama + Ayah (arab)</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>asal </th>
					<th>Perolehan</th>
					<th>Niai</th>
					<th>Aksi</th>
					
				</tr>
			</thead>
			<tbody>
                
               
                <?php
                 $no = 0  ;
                 $no++;
                foreach ($peserta as $peserta)
                  
				{
                 
				?>
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->nama_syahadah;?></td>
					<td><?php echo $peserta->tempat_lahir;?></td>
					<td><?php echo $peserta->tanggal_lahir;?></td>
					<td><?php echo $peserta->kabupaten."-".$peserta->provinsi;?></td>
					<td><?php echo $peserta->perolehan;?></td>
					<td><?php echo $peserta->nilai_syahadah;?></td>
					
					
					<td><a href="<?php echo site_url('pengajar/verifikasi_syahadah/'.$peserta->id_peserta);?>"><button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button></a></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>