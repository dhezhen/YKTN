<!DOCTYPE html>
<html>
    <head>
<title>Perolehan Peserta</title>
    </head>
<!--     <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

    </style> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container" align='center'>
  <h3>DISPLAY PEROLEHAN PESERTA</h3>
    <H4>
        KARANTINA TAHFIZH AL-QUR'AN NASIONAL <BR>
        KHALQOH Ust./ustd <br> 
        <b> <?PHP ECHO $this->session->userdata('nama_p') ?> </b>
    </H4>
    <?php
  $info = $this->session->flashdata('info');
  if (!empty($info))
  {
    echo $info;
  }
  ?>
  <div class="w3-bar w3-iceblue" >
    <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'peserta_harian')">Perolehan Harian</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'peserta_perjuz')">peserta Perjuz</button>
  
  </div>
  
  <div id="peserta_harian" class="w3-container  city" style="overflow-x:auto;">
  <!-- style="font-size: 9pt; text-align: center; border-color: skyblue" border='1' -->
  <table class="table table-striped table-bordered data">                      
  <thead>
        <tr>      
          <th>No </th>
          <th>Nama</th>
          <th>Hari Ke </th>
          <th bgcolor="#e0dedc">_1</th>
        <th bgcolor="#e0dedc">_2</th><th bgcolor="#e0dedc">_3</th><th bgcolor="#e0dedc">_4</th><th bgcolor="#e0dedc">_5</th>
        <th bgcolor="#e0dedc">_6</th><th bgcolor="#e0dedc">_7</th><th bgcolor="#e0dedc">_8</th><th bgcolor="#e0dedc">_9</th><th bgcolor="#e0dedc">10</th>
        <th bgcolor="#e0dedc">11</th><th bgcolor="#e0dedc">12</th><th bgcolor="#e0dedc">13</th><th bgcolor="#e0dedc">14</th><th bgcolor="#e0dedc">15</th>
        <th bgcolor="#e0dedc">16</th><th bgcolor="#e0dedc">17</th><th bgcolor="#e0dedc">18</th><th bgcolor="#e0dedc">19</th><th bgcolor="#e0dedc">20</th>
        <th bgcolor="#e0dedc">21</th><th bgcolor="#e0dedc">22</th><th bgcolor="#e0dedc">23</th><th bgcolor="#e0dedc">24</th><th bgcolor="#e0dedc">25</th>
        <th bgcolor="#e0dedc">26</th><th bgcolor="#e0dedc">27</th><th bgcolor="#e0dedc">28</th><th bgcolor="#e0dedc">29</th><th bgcolor="#e0dedc">30</th>
        <th bgcolor="#e0dedc">31</th>
        <th bgcolor="#e0dedc">32</th>
        <th bgcolor="#e0dedc">33</th>
        <th bgcolor="#e0dedc">34</th>
        <th bgcolor="#e0dedc">Total (Halaman)</th>       
      
                                                                                                                                                                                            
        </tr>
      </thead>
                                     
                                    
                                    
										
								</tr>
							</tr>

							<tr>

                         
                           
                           
                            <?php 
                             $no = 0  ;
                             $no++;
                            foreach ($peserta as $peserta) 
                                { 

                                
                                  
                                    ?>
                                <td bgcolor="#e0dedc"><?php echo $no++;?></td>
                                <td  align="Left"><?php echo $peserta->nama_lengkap;?></td>
                           
                                <td><a href="<?php echo site_url('pengajar/perolehan_hari/'.$peserta->id_peserta);?>"><button class="btn btn-small btn-info"><i class="icon-pencil"></i>
                            </button></a></td>
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
								

							
								<td> <b style="font-color:red;">
                                    <?php 
                                    $total= 
                                    $peserta->h1+$peserta->h2+$peserta->h3+$peserta->h4+$peserta->h5+$peserta->h6+$peserta->h7+$peserta->h8+$peserta->h9+$peserta->h10+
                                    $peserta->h11+$peserta->h12+$peserta->h13+$peserta->h14+$peserta->h15+$peserta->h16+$peserta->h17+$peserta->h18+$peserta->h19+$peserta->h20+
                                    $peserta->h21+$peserta->h22+$peserta->h23+$peserta->h24+$peserta->h25+$peserta->h26+$peserta->h27+$peserta->h28+$peserta->h29+$peserta->h30+
                                    $peserta->h31+$peserta->h32+$peserta->h33+$peserta->h34;
                                    
                                    echo $total;
                                   
                                    ?>
                                    </b>

                                </td>
								

							</tr>
                                <?php }?>
					</table>
  </div>

  <div id="peserta_perjuz" class="w3-container  city" style="display:none;overflow-x:auto;">
  <table table class="table table-striped table-bordered data">
	<thead>
                                               
                           
                        
                      
        <th>No</th>
        <th bgcolor="#e0dedc">Juz Ke - </th> 
        <th bgcolor="#skyblue">Aksi</th>
        <th bgcolor="#e0dedc">_1</th>
        <th bgcolor="#e0dedc">_2</th><th bgcolor="#e0dedc">_3</th><th bgcolor="#e0dedc">_4</th><th bgcolor="#e0dedc">_5</th>
        <th bgcolor="#e0dedc">_6</th><th bgcolor="#e0dedc">_7</th><th bgcolor="#e0dedc">_8</th><th bgcolor="#e0dedc">_9</th><th bgcolor="#e0dedc">10</th>
        <th bgcolor="#e0dedc">11</th><th bgcolor="#e0dedc">12</th><th bgcolor="#e0dedc">13</th><th bgcolor="#e0dedc">14</th><th bgcolor="#e0dedc">15</th>
        <th bgcolor="#e0dedc">16</th><th bgcolor="#e0dedc">17</th><th bgcolor="#e0dedc">18</th><th bgcolor="#e0dedc">19</th><th bgcolor="#e0dedc">20</th>
        <th bgcolor="#e0dedc">21</th><th bgcolor="#e0dedc">22</th><th bgcolor="#e0dedc">23</th><th bgcolor="#e0dedc">24</th><th bgcolor="#e0dedc">25</th>
        <th bgcolor="#e0dedc">26</th><th bgcolor="#e0dedc">27</th><th bgcolor="#e0dedc">28</th>
        <th bgcolor="#e0dedc">29</th>
        <th bgcolor="#e0dedc">30</th>
        <th bgcolor="#e0dedc">Total</th>
                              
                                    
                          
                        

                                </tr>
            </thead>
                     
                       
                       
                        <?php 
                         $no = 0  ;
                         $no++;
                        foreach ($peserta_juz as $p) 
                            { 

                            
                              
                                ?>
                            <td bgcolor="#e0dedc"><?php echo $no++;?></td>
                            <td  align="Left"><?php echo $p->nama_lengkap;?></td>
                       
                          
                 
                            <td><a href="<?php echo site_url('pengajar/perolehan_juz/'.$peserta->id_peserta);?>"><button class="btn btn-small btn-info"><i class="icon-pencil"></i>

                            </a>
                                    
                            <td><?php echo $p->j1;?></td>
                            <td><?php echo $p->j2;?></td>
                            <td><?php echo $p->j3;?></td>
                            <td><?php echo $p->j4;?></td>
                            <td><?php echo $p->j5;?></td>
                            <td><?php echo $p->j6;?></td>
                            <td><?php echo $p->j7;?></td>
                            <td><?php echo $p->j8;?></td>
                            <td><?php echo $p->j9;?></td>
                            <td><?php echo $p->j10;?></td>
                            <td><?php echo $p->j11;?></td>
                            <td><?php echo $p->j12;?></td>
                            <td><?php echo $p->j13;?></td>
                            <td><?php echo $p->j14;?></td>
                            <td><?php echo $p->j15;?></td>
                            <td><?php echo $p->j16;?></td>
                            <td><?php echo $p->j17;?></td>
                            <td><?php echo $p->j18;?></td>
                            <td><?php echo $p->j19;?></td>
                            <td><?php echo $p->j20;?></td>
                            <td><?php echo $p->j21;?></td>
                            <td><?php echo $p->j22;?></td>
                            <td><?php echo $p->j23;?></td>
                            <td><?php echo $p->j24;?></td>
                            <td><?php echo $p->j25;?></td>
                            <td><?php echo $p->j26;?></td>
                            <td><?php echo $p->j27;?></td>
                            <td><?php echo $p->j28;?></td>
                            <td><?php echo $p->j29;?></td>
                            <td><?php echo $p->j30;?></td>
                      
                            

                        
                            <td colspan=''> 
                                <?php 
                                $total= 
                                $p->j1+$p->j2+$p->j3+$p->j4+$p->j5+$p->j6+$p->j7+$p->j8+$p->j9+$p->j10+
                                $p->j11+$p->j12+$p->j13+$p->j14+$p->j15+$p->j16+$p->j17+$p->j18+$p->j19+$p->j20+
                                $p->j21+$p->j22+$p->j23+$p->j24+$p->j25+$p->j26+$p->j27+$p->j28+$p->j29+$p->j30;
                              
                                
                                echo $total;
                                echo "Juz";
                                ?>


                            </td>
                            

                        </tr>
                            <?php }?>
                </table>
  </div>


<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-blue";
}
</script>

</body>
</html>
