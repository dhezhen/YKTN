<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Peserta</title>
    <script src='<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>'></script>
    <link href="<?php echo base_url().'assets/datatables/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css');?>" />
</head>
<body>
 

<div >
								<h3 class="header smaller lighter blue"> 
									Total Peserta angkatan   <?php echo $this->session->userdata('angkatan');?> :<br>
									  <?PHP echo $total_peserta; ?> Orang


							</h3> 
								<table class="table table-striped table-bordered data">
									<button><a href="<?php echo site_url('admin/tambahpeserta');?>">Tambah Peserta</a></button>

			<thead>
				<tr>			
					<!-- <th>No Registrasi</th> -->
					<th>No</th>
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
			<?php 
				$no=0; 
				$no++;
					
					foreach ($peserta as $peserta)


				{
				?>
				<tr>
					<!--<td>< ?php echo $peserta->id_peserta;?></td>-->
					<td><?php echo $no++;?></td>
					<td><?php echo $peserta->angkatan;?></td>
					<td><?php echo $peserta->program;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->jenis_kelamin;?></td>
					<td><?php echo $peserta->kabupaten ."-".$peserta->provinsi ?></td>
				
					<td><?php echo $peserta->no_handphone;?></td>
					<td><img style="width:75px; height: 75px"src="<?php echo base_url() .'uploads/Dokumen/'.$peserta->foto_diri ?>"> </td>
					<!--<td><a href="<?php echo site_url('admin/download/'.$peserta->dokumen);?>">Download Lampiran</a></td> -->
					<td><a href="<?php echo site_url('admin/biodatapeserta/'.$peserta->id_peserta);?>"><i class='fas fa-user' style='font-size:30px color:blue' ></i></a>
				<a href="<?php echo site_url('admin/editpeserta/'.$peserta->id_peserta);?>"><i class='far fa-edit' style='font-size:15px'></i></a>
					<a onclick =" "href="<?php echo site_url('admin/hapus_peserta/'.$peserta->id_peserta);?>"><i class='fas fa-trash' style='font-size:30px color:red' ></i></a>
					</td>
					
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>