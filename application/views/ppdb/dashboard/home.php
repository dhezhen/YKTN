<div class="jumbotron">
  <h1>Selamat Datang <?php echo $this->session->userdata('nama_panggilan');?>! </h1>
  <p>Jika anda belum melengkapi biodata, silahkan melengkapinya dengan mengklik <b>Biodata</b> dibawah ini</p>
  <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('ppdb/update_biodata/'.$this->session->userdata('id_peserta'));?>" role="button">Biodata</a></p>
  <hr>
 

<h3><p><div class="alert alert-success" role="alert">

Akun anda <?php echo $peserta->status;
			if ($peserta->status=='belum diverifikasi')
			{
				echo "<br> <b> Silahkan Lakukan Pembayaran Unag Registrasi Rp. 100.000',- Ke No Rekening 79999 54547(BSM)
				<br> atas nama Yayayasan Karantina Tafizh  Al-Quran Nasional <br>
				<img style=" width:'100%';" src="<?php echo base_url() .'assets/images/alur.png' ?>">
				";
						  

				}
			else 
			{
				echo 'akun anda telah di verifikasi 
					<br> Silahkan Mencetak Formulir dan Membawanya saat registrasi
				';

			}


	?></div> 


</p></h3>







  
</div>