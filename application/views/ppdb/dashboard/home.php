

<div class="jumbotron">
  <h1>Selamat Datang, <?php echo $peserta->nama_lengkap;?>! </h1>
  <p>Jika anda belum melengkapi biodata, silahkan melengkapinya dengan mengklik <b>Biodata</b> dibawah ini</p>
  <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('ppdb/update_biodata/'.$this->session->userdata('id_peserta'));?>" role="button">Biodata</a></p>
  <hr>
 

<h3><p>
  <?php 
			if ($peserta->status=='belum diverifikasi')
			{
				?>
				<div class="alert alert-danger" role="alert">
				<?php 
				echo "akun anda anda belum di verifikasi, silahkan ikuti alur di bawah ini : <br>" ;
				?>
				</div> 
				
				
				<img style="height:50% ;width:100%;" src="<?php echo base_url() .'assets/images/alur.png' ?>">
<?php 
				}
			else 
			{
				echo 'akun anda telah di verifikasi.';

				?>
			</p>
		
		<table class="table table-striped table-responsive table-bordered"  border="1">

<tr >
	</td>
	<td >No Pendaftaran : <br> <b><?php echo $peserta->id_peserta?><b> </td>
	<td colspan="" ><h4 align="center">  Progress Report  
		</h4></td>
		<td ><b><font style="font-size: 15pt;text-align: center;"><?php echo $peserta->status_peserta?></b> </td>
</tr>
<tr>
	<td style="width:20%;"> Nama Lengkap : <br><?php echo $peserta->nama_lengkap;?></td>
	
	<td   style="width:60%;">Nama Arab : <br><font style="font-size: 25pt;">
			<?php echo $peserta->nama_lengkap_arab;?></font>

	</td>
		
			
	
	<td rowspan="3">
	<img  style="height: 140px;width:120px;"  src="<?php echo base_url() .'uploads/Dokumen/'.$peserta->foto_diri ?>" class="rounded-cir" alt="...">
	</td>
</tr>

<tr>
	<td>Nama Ayah : <br> <?php echo $peserta->nama_ayah;?></td>
	
	<td>Nama Arab :  <br><font style="font-size: 20pt;">
			<?php echo $peserta->nama_ayah_arab;?>
	</font>
	</td>
	<tr>
	<td> Nilai Test : <br> <?= $peserta->nilai_tahsin?> </td>
	
	
	</tr>
</tr>



</table>
			<table style="font-size: 12pt; text-align: center; border-color: skyblue" border='2'>
							<tr>
								<td  colspan="37" style="font-size: 20pt; border-color:skyblue;">Muhaffizh / ah   :  Ust. </td>
								<td></td>
							</tr>
							<tr>
								
								<td colspan="36" bgcolor="#ccffcc" > <h4>Perolehan Perhari</h4>
								<td rowspan='2'> <h4 >Total </h4>
								</td>
								<tr align="center">
									<td>Hari Ke:</td> 
								<td width="3%">1</td><td width="3%">2</td><td width="3%">3</td><td width="3%">4</td><td width="3%">5</td>
									<td width="3%">6</td><td width="3%">7</td><td width="3%">8</td><td width="3%">9</td><td width="3%">10</td>
									<td width="3%">11</td><td width="3%">12</td><td width="3%">13</td><td width="3%">1</td><td width="3%">15</td>
									<td width="3%">16</td><td width="3%">17</td><td width="3%">18</td><td width="3%">19</td><td width="3%">20</td>
									<td width="3%">21</td><td width="3%">22</td><td width="3%">23</td><td width="3%">24</td><td width="3%">25</td>
									<td width="3%">26</td><td width="3%">27</td><td width="3%">28</td><td width="3%">29</td><td width="3%">30</td>
									<td width="3%">31</td>
									<td width="3%">32</td>
									<td width="3%">33</td>
									<td width="3%">34</td>
									<td width="3%">35</td>
								

									

								</tr>
							</tr>

							<tr align="center">
								<td>Perolehan (Perhalaman)</td>
								<td></td><td></td><td></td><td></td><td></td>
								<td></td><td></td><td></td><td></td><td></td>
								<td></td><td></td><td></td><td></td><td></td>
								<td></td><td></td><td></td><td></td><td></td>
								<td></td><td></td><td></td><td></td><td></td>
								<td></td><td></td><td></td><td></td><td></td>
								<td></td><td></td>
								<td></td><td></td><td>35</td>

								<td>100 Halaman</td>

							</tr>

					</table>
					<br>
					<table style="font-size: 12pt; text-align: center; border-color: skyblue" border='2'>
							<tr>
								<td colspan="32"> <h4>Perolehan  Juz</h4>
								<td rowspan='2'> <h4 >Total </h4>
								</td>
								<tr align="center">
									<td colspan="2">Juz Ke:</td> 
									
									<td width="4%">1</td><td width="4%">2</td><td width="4%">3</td><td width="4%">4</td><td width="4%">5</td>
                                    <td width="4%">6</td><td width="4%">7</td><td width="4%">8</td><td width="4%">9</td><td width="4%">10</td>
                                    <td width="4%">11</td><td width="4%">12</td><td width="4%">13</td><td width="4%">1</td><td width="4%">15</td>
                                    <td width="4%">16</td><td width="4%">17</td><td width="4%">18</td><td width="4%">19</td><td width="4%">20</td>
                                    <td width="4%">21</td><td width="4%">22</td><td width="4%">23</td><td width="4%">24</td><td width="4%">25</td>
                                    <td width="4%">26</td><td width="4%">27</td><td width="4%">28</td><td width="4%">29</td><td width="4%">30</td>

					

								</tr>
							</tr>

							<tr align="center">
								<td colspan="2">Perolehan</td>
								<td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td>
								<td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> 
								<td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> 
								<td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> 
								<td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> 
								<td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> <td width="3%">1</td> 
								 
								
								<td><br>--juz</td>
							
							</tr>

						</table>






			</div>
			
			</h3>

<?php									
		}

?>










  
