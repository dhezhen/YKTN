

<div>
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
			<table style="font-size: 12pt; text-align: center; border-color: skyblue"  width="100%" border='2'>
							<tr>
								<td  colspan="37" style="font-size: 20pt; border-color:skyblue;">Muhaffizh / ah   :  Ust. </td>
								<td></td>
							</tr>
							<tr>
								
								<td colspan="35" bgcolor="#ccffcc" > <h4>Perolehan Perhari</h4>
								<td rowspan='2'> 
									<h4 >Total </h4>
								</td>
									<tr align="center">
								 
									<td>Hari Ke : </td> 
									<td width="">_1</td>
									<td width="">_2</td>
									<td width="">_3</td>
									<td width="">_4</td>
									<td width="">_5</td>
									<td width="">_6</td>
									<td width="">_7</td>
									<td width="">_8</td>
									<td width="">_9</td>
									<td width="">10</td>
									<td width="">11</td>
									<td width="">12</td>
									<td width="">13</td>
									<td width="">1</td>
									<td width="">15</td>
									<td width="">16</td>
									<td width="">17</td>
									<td width="">18</td>
									<td width="">19</td>
									<td width="">20</td>
									<td width="">21</td>
									<td width="">22</td>
									<td width="">23</td>
									<td width="">24</td>
									<td width="">25</td>
									<td width="">26</td>
									<td width="">27</td>
									<td width="">28</td>
									<td width="">29</td>
									<td width="">30</td>
									<td width="">31</td>
									<td width="">32</td>
									<td width="">33</td>
								
								
								

									

								</tr>
							</tr>
							
							<tr align="center">
								<td>Perolehan (Perhalaman)</td>
								<td><?php echo $peserta->h1;?></td>
                                <td><?php echo $peserta->h2;?></td>
                                <td><?php echo $peserta->h3;?></td>
                                <td><?php echo $peserta->h4;?></td>
                                <td><?php echo $peserta->h5;?></td>
                                <td><?php echo $peserta->h6;?></td>
                                <td><?php echo $peserta->h7;?></td>
                                <td><?php echo $peserta->h8;?></td>
                                <td><?php echo $peserta->h9;?></td>
                                <td><?php echo $peserta->h10;?></td>
                                <td><?php echo $peserta->h11;?></td>
                                <td><?php echo $peserta->h12;?></td>
                                <td><?php echo $peserta->h13;?></td>
                                <td><?php echo $peserta->h14;?></td>
                                <td><?php echo $peserta->h15;?></td>
                                <td><?php echo $peserta->h16;?></td>
                                <td><?php echo $peserta->h17;?></td>
                                <td><?php echo $peserta->h18;?></td>
                                <td><?php echo $peserta->h19;?></td>
                                <td><?php echo $peserta->h20;?></td>
                                <td><?php echo $peserta->h21;?></td>
                                <td><?php echo $peserta->h22;?></td>
                                <td><?php echo $peserta->h23;?></td>
                                <td><?php echo $peserta->h24;?></td>
                                <td><?php echo $peserta->h25;?></td>
                                <td><?php echo $peserta->h26;?></td>
                                <td><?php echo $peserta->h27;?></td>
                                <td><?php echo $peserta->h28;?></td>
                                <td><?php echo $peserta->h29;?></td>
                                <td><?php echo $peserta->h30;?></td>
                                <td><?php echo $peserta->h31;?></td>
                                <td><?php echo $peserta->h32;?></td>
                                <td><?php echo $peserta->h33;?></td>
                                <td><?php echo $peserta->h34;?></td>
								<td> <?php 
								
                                	$total=  $peserta->h1+$peserta->h2+$peserta->h3+$peserta->h4+$peserta->h5+$peserta->h6+$peserta->h7+$peserta->h8+$peserta->h9+$peserta->h10+
                                   $peserta->h11+$peserta->h12+$peserta->h13+$peserta->h14+$peserta->h15+$peserta->h16+$peserta->h17+$peserta->h18+$peserta->h19+$peserta->h20+
                                   $peserta->h21+$peserta->h22+$peserta->h23+$peserta->h24+$peserta->h25+$peserta->h26+$peserta->h27+$peserta->h28+$peserta->h29+$peserta->h30+
                                   $peserta->h31+$peserta->h32+$peserta->h33+$peserta->h34;
                                    
                                    echo $total;
                                    echo " halaman";
                                    ?>

								</td>

								


							</tr>

					</table>
					<br>
					<table style="font-size: 12pt; text-align: center; border-color: skyblue" width="100%" border='2'>
							<tr>
								<td colspan="32"> <h4>Perolehan  Juz</h4>
								<td rowspan='2'> <h4 >Total </h4>
								</td>
								<tr align="center">
									<td colspan="2">Juz Ke:</td> 
									
									<td width="">1</td><td width="">2</td><td width="">3</td><td width="">4</td><td width="">5</td>
                                    <td width="">6</td><td width="">7</td><td width="">8</td><td width="">9</td><td width="">10</td>
                                    <td width="">11</td><td width="">12</td><td width="">13</td><td width="">1</td><td width="">15</td>
                                    <td width="">16</td><td width="">17</td><td width="">18</td><td width="">19</td><td width="">20</td>
                                    <td width="">21</td><td width="">22</td><td width="">23</td><td width="">24</td><td width="">25</td>
                                    <td width="">26</td><td width="">27</td><td width="">28</td><td width="">29</td><td width="">30</td>

					

								</tr>
							</tr>

							<tr align="center">
								<td colspan="2">Perolehan</td>
								<td><?php echo $peserta->j1;?></td>
                            <td><?php echo $peserta->j2;?></td>
                            <td><?php echo $peserta->j3;?></td>
                            <td><?php echo $peserta->j4;?></td>
                            <td><?php echo $peserta->j5;?></td>
                            <td><?php echo $peserta->j6;?></td>
                            <td><?php echo $peserta->j7;?></td>
                            <td><?php echo $peserta->j8;?></td>
                            <td><?php echo $peserta->j9;?></td>
                            <td><?php echo $peserta->j10;?></td>
                            <td><?php echo $peserta->j11;?></td>
                            <td><?php echo $peserta->j12;?></td>
                            <td><?php echo $peserta->j13;?></td>
                            <td><?php echo $peserta->j14;?></td>
                            <td><?php echo $peserta->j15;?></td>
                            <td><?php echo $peserta->j16;?></td>
                            <td><?php echo $peserta->j17;?></td>
                            <td><?php echo $peserta->j18;?></td>
                            <td><?php echo $peserta->j19;?></td>
                            <td><?php echo $peserta->j20;?></td>
                            <td><?php echo $peserta->j21;?></td>
                            <td><?php echo $peserta->j22;?></td>
                            <td><?php echo $peserta->j23;?></td>
                            <td><?php echo $peserta->j24;?></td>
                            <td><?php echo $peserta->j25;?></td>
                            <td><?php echo $peserta->j26;?></td>
                            <td><?php echo $peserta->j27;?></td>
                            <td><?php echo $peserta->j28;?></td>
                            <td><?php echo $peserta->j29;?></td>
                            <td><?php echo $peserta->j30;?></td>
								
							<td colspan='2'> 
                                <?php 
                                $total= 
                                $peserta->j1+$peserta->j2+$peserta->j3+$peserta->j4+$peserta->j5+$peserta->j6+$peserta->j7+$peserta->j8+$peserta->j9+$peserta->j10+
                                $peserta->j11+$peserta->j12+$peserta->j13+$peserta->j14+$peserta->j15+$peserta->j16+$peserta->j17+$peserta->j18+$peserta->j19+$peserta->j20+
                                $peserta->j21+$peserta->j22+$peserta->j23+$peserta->j24+$peserta->j25+$peserta->j26+$peserta->j27+$peserta->j28+$peserta->j29+$peserta->j30;
                              
                                
                                echo $total;
                                echo " Juz";
                                ?>


                            </td>
							
							</tr>

						</table>






			</div>
			
			</h3>

<?php									
		}

?>










  
