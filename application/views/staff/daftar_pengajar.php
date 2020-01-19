<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Pengajar</title>
    <script src='<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>'></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href="<?php echo base_url().'assets/datatables/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css');?>" />
</head>
<script type="text/javascript">
	var url="<?php  echo site_url('staff/delete/'.$p->id_pengajar);?>";
	function hapus() {
			
Swal.fire({
  title: 'Hapus Data ',
  text: "Apakah Anda Yakin!",
  icon: 'warning',

  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Hapus Data'
}).then((result) => {
	if (result.value) {
		
		Swal.fire(
		  'Berhasil',
		  'Data telah Dihapus',
		  'success'
		  )
		  location.href = url;
		  }
})} 
</script>



<body>
 

     

<button><a href="<?php echo site_url('staff/tambah_pengajar');?>">
<i class="icon-add"></i>
Tambah Pengajar

</a></button>

<div>
                <h3 class="header smaller lighter blue">Jumlah Pengajar : <?php echo $jumlah;?></h3>
 <table class="table table-striped table-bordered data">
      <thead>
        <tr>      
          <th>Kode pengajar</th>
          <th>Nama Lengkap</th>
          <th>Usia</th>
          <th>Angkatan</th>
          <th>Program </th>
          <th>Jenis Kelamin</th>
          <th>No Handphone</th>
       <!--    <th>Foto</th> -->
          <th>Status</th>
          <th >aksi</a></th>
          
          
      
        <!--  <th>Dokumen</th> -->                                                                                                                                                                                         
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pengajar as $p)
        {
        ?>
        <tr>
          <td><?php echo $p->id_pengajar;?></td>
          <td><?php echo $p->nama_p;?></td>
          <td><?php echo $p->usia_p;?></td>
          <td><?php echo $p->angkatan;?></td>
          <td><?php echo $p->program_p;?></td>
          <td><?php echo $p->jenis_k; ?></td>
          <td><?php echo $p->no_hp;?></td>
          <!-- <td><img style="width:75px; height: 75px"src="< php echo base_url().'uploads/pengajar/'.$p->foto_diri ?>"> </td> -->
          <td><?php echo $p->status_keaktifan;?></td>


          <td><a href="<?php echo site_url('staff/update/'.$p->id_pengajar);?>" ><i class='fas fa-edit' style='font-size:20px; color:blue' ></i></a>
					<a href="javascript:void(0);"  onclick='hapus()' href="<?php echo site_url('admin/hapus_peserta/'.$p->id_pengajar);?>"><i class='fas fa-trash' style='font-size:20px; color:red' ></i></a>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

     
</div>


</body>
</html>
