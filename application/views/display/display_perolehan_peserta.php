<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container" align='center'>
  <h3>DISPLAY PEROLEHAN PESERTA</h3>
    <H4>
        KARANTINA TAHFIZH AL-QUR'AN NASIONAL <BR>
        ANGKATAN KE <?PHP ECHO '__'?>
    </H4>

  <div class="w3-bar w3-iceblue" >
    <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'ikhwan_harian')">Ikwan (Harian)</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'ikhwan_perjuz')">Ikhwan (Perjuz)</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'akhwat_harian')">Akhwat (Harian)</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'akhwat_perjuz')">Akhwat (Perjuz)</button>
  </div>
  
  <div id="ikhwan_harian" class="w3-container w3-border city">
  <table style="font-size: 9pt; text-align: center; border-color: skyblue" border='2' width="100%">
						
							<tr>
                           
                          
								<td colspan="36" bgcolor="#ccffcc" > <h4>Perolehan Perhari</h4>
								<td rowspan='2'> <h4 >Total </h4>
                                </td>
                            
								<tr align="center">
                                    <td rowspans='2' bgcolor="#e0dedc" >No </td>
									<td bgcolor="#e0dedc">Hari Ke - </td> 
								    <td bgcolor="#e0dedc">_1</td><td bgcolor="#e0dedc">_2</td><td bgcolor="#e0dedc">_3</td><td bgcolor="#e0dedc">_4</td><td bgcolor="#e0dedc">_5</td>
									<td bgcolor="#e0dedc">_6</td><td bgcolor="#e0dedc">_7</td><td bgcolor="#e0dedc">_8</td><td bgcolor="#e0dedc">_9</td><td bgcolor="#e0dedc">10</td>
									<td bgcolor="#e0dedc">11</td><td bgcolor="#e0dedc">12</td><td bgcolor="#e0dedc">13</td><td bgcolor="#e0dedc">14</td><td bgcolor="#e0dedc">15</td>
									<td bgcolor="#e0dedc">16</td><td bgcolor="#e0dedc">17</td><td bgcolor="#e0dedc">18</td><td bgcolor="#e0dedc">19</td><td bgcolor="#e0dedc">20</td>
									<td bgcolor="#e0dedc">21</td><td bgcolor="#e0dedc">22</td><td bgcolor="#e0dedc">23</td><td bgcolor="#e0dedc">24</td><td bgcolor="#e0dedc">25</td>
									<td bgcolor="#e0dedc">26</td><td bgcolor="#e0dedc">27</td><td bgcolor="#e0dedc">28</td><td bgcolor="#e0dedc">29</td><td bgcolor="#e0dedc">30</td>
									<td bgcolor="#e0dedc">31</td>
									<td bgcolor="#e0dedc">32</td>
									<td bgcolor="#e0dedc">33</td>
										
								</tr>
							</tr>

							<tr>

                         
                           
                           
                            <?php 
                             $no = 0  ;
                             $no++;
                            foreach ($peserta_ikhwan as $peserta) 
                                { 

                                
                                  
                                    ?>
                                <td bgcolor="#e0dedc"><?php echo $no++;?></td>
                                <td  align="Left"><?php echo $peserta->nama_lengkap;?></td>
                           
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
								

							
								<td colspan='2'> 
                                    <?php 
                                    $total= 
                                    $peserta->h1+$peserta->h2+$peserta->h3+$peserta->h4+$peserta->h5+$peserta->h6+$peserta->h7+$peserta->h8+$peserta->h9+$peserta->h10+
                                    $peserta->h11+$peserta->h12+$peserta->h13+$peserta->h14+$peserta->h15+$peserta->h16+$peserta->h17+$peserta->h18+$peserta->h19+$peserta->h20+
                                    $peserta->h21+$peserta->h22+$peserta->h23+$peserta->h24+$peserta->h25+$peserta->h26+$peserta->h27+$peserta->h28+$peserta->h29+$peserta->h30+
                                    $peserta->h31+$peserta->h32+$peserta->h33+$peserta->h34;
                                    
                                    echo $total;
                                    echo " halaman";
                                    ?>


                                </td>
								

							</tr>
                                <?php }?>
					</table>
  </div>

  <div id="ikhwan_perjuz" class="w3-container w3-border city" style="display:none">
  <table style="font-size: 9pt; text-align: center; border-color: skyblue" border='2' width="100%">
						
                        <tr>
                       
                      
                            <td colspan="33" bgcolor="#ccffcc" > <h4>Perolehan Perjuz</h4>
                            <td rowspan='2'> <h4 >Total </h4>
                            </td>
                        
                            <tr align="center">
                                <td rowspans='2' bgcolor="#e0dedc" >No </td>
                                <td bgcolor="#e0dedc">Juz Ke - </td> 
                                <td bgcolor="#e0dedc">_1</td><td bgcolor="#e0dedc">_2</td><td bgcolor="#e0dedc">_3</td><td bgcolor="#e0dedc">_4</td><td bgcolor="#e0dedc">_5</td>
                                <td bgcolor="#e0dedc">_6</td><td bgcolor="#e0dedc">_7</td><td bgcolor="#e0dedc">_8</td><td bgcolor="#e0dedc">_9</td><td bgcolor="#e0dedc">10</td>
                                <td bgcolor="#e0dedc">11</td><td bgcolor="#e0dedc">12</td><td bgcolor="#e0dedc">13</td><td bgcolor="#e0dedc">14</td><td bgcolor="#e0dedc">15</td>
                                <td bgcolor="#e0dedc">16</td><td bgcolor="#e0dedc">17</td><td bgcolor="#e0dedc">18</td><td bgcolor="#e0dedc">19</td><td bgcolor="#e0dedc">20</td>
                                <td bgcolor="#e0dedc">21</td><td bgcolor="#e0dedc">22</td><td bgcolor="#e0dedc">23</td><td bgcolor="#e0dedc">24</td><td bgcolor="#e0dedc">25</td>
                                <td bgcolor="#e0dedc">26</td><td bgcolor="#e0dedc">27</td><td bgcolor="#e0dedc">28</td><td bgcolor="#e0dedc">29</td><td bgcolor="#e0dedc">30</td>
                              
                                    
                            </tr>
                        </tr>

                        <tr>

                     
                       
                       
                        <?php 
                         $no = 0  ;
                         $no++;
                        foreach ($peserta_ikhwan as $peserta) 
                            { 

                            
                              
                                ?>
                            <td bgcolor="#e0dedc"><?php echo $no++;?></td>
                            <td  align="Left"><?php echo $peserta->nama_lengkap;?></td>
                       
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
                                echo "Juz";
                                ?>


                            </td>
                            

                        </tr>
                            <?php }?>
                </table>
  </div>
  
  <div id="akhwat_harian" class="w3-container w3-border city" style="display:none">
  <table style="font-size: 9pt; text-align: center; border-color: skyblue" border='2' width="100%">
						
                        <tr>
                       
                      
                            <td colspan="36" bgcolor="#ccffcc" > <h4>Perolehan Perhari</h4>
                            <td rowspan='2'> <h4 >Total </h4>
                            </td>
                        
                            <tr align="center">
                                <td rowspans='2' bgcolor="#e0dedc" >No </td>
                                <td bgcolor="#e0dedc">Hari Ke - </td> 
                                <td bgcolor="#e0dedc">_1</td><td bgcolor="#e0dedc">_2</td><td bgcolor="#e0dedc">_3</td><td bgcolor="#e0dedc">_4</td><td bgcolor="#e0dedc">_5</td>
                                <td bgcolor="#e0dedc">_6</td><td bgcolor="#e0dedc">_7</td><td bgcolor="#e0dedc">_8</td><td bgcolor="#e0dedc">_9</td><td bgcolor="#e0dedc">10</td>
                                <td bgcolor="#e0dedc">11</td><td bgcolor="#e0dedc">12</td><td bgcolor="#e0dedc">13</td><td bgcolor="#e0dedc">14</td><td bgcolor="#e0dedc">15</td>
                                <td bgcolor="#e0dedc">16</td><td bgcolor="#e0dedc">17</td><td bgcolor="#e0dedc">18</td><td bgcolor="#e0dedc">19</td><td bgcolor="#e0dedc">20</td>
                                <td bgcolor="#e0dedc">21</td><td bgcolor="#e0dedc">22</td><td bgcolor="#e0dedc">23</td><td bgcolor="#e0dedc">24</td><td bgcolor="#e0dedc">25</td>
                                <td bgcolor="#e0dedc">26</td><td bgcolor="#e0dedc">27</td><td bgcolor="#e0dedc">28</td><td bgcolor="#e0dedc">29</td><td bgcolor="#e0dedc">30</td>
                                <td bgcolor="#e0dedc">31</td>
                                <td bgcolor="#e0dedc">32</td>
                                <td bgcolor="#e0dedc">33</td>
                                    
                            </tr>
                        </tr>

                        <tr>

                     
                       
                       
                        <?php 
                         $no = 0  ;
                         $no++;
                        foreach ($peserta_akhwat as $pa) 
                            { 

                            
                              
                                ?>
                            <td bgcolor="#e0dedc"><?php echo $no++;?></td>
                            <td  align="Left"><?php echo $pa->nama_lengkap;?></td>
                       
                            <td><?php echo $pa->h1;?></td>
                            <td><?php echo $pa->h2;?></td>
                            <td><?php echo $pa->h3;?></td>
                            <td><?php echo $pa->h4;?></td>
                            <td><?php echo $pa->h5;?></td>
                            <td><?php echo $pa->h6;?></td>
                            <td><?php echo $pa->h7;?></td>
                            <td><?php echo $pa->h8;?></td>
                            <td><?php echo $pa->h9;?></td>
                            <td><?php echo $pa->h10;?></td>
                            <td><?php echo $pa->h11;?></td>
                            <td><?php echo $pa->h12;?></td>
                            <td><?php echo $pa->h13;?></td>
                            <td><?php echo $pa->h14;?></td>
                            <td><?php echo $pa->h15;?></td>
                            <td><?php echo $pa->h16;?></td>
                            <td><?php echo $pa->h17;?></td>
                            <td><?php echo $pa->h18;?></td>
                            <td><?php echo $pa->h19;?></td>
                            <td><?php echo $pa->h20;?></td>
                            <td><?php echo $pa->h21;?></td>
                            <td><?php echo $pa->h22;?></td>
                            <td><?php echo $pa->h23;?></td>
                            <td><?php echo $pa->h24;?></td>
                            <td><?php echo $pa->h25;?></td>
                            <td><?php echo $pa->h26;?></td>
                            <td><?php echo $pa->h27;?></td>
                            <td><?php echo $pa->h28;?></td>
                            <td><?php echo $pa->h29;?></td>
                            <td><?php echo $pa->h30;?></td>
                            <td><?php echo $pa->h31;?></td>
                            <td><?php echo $pa->h32;?></td>
                            <td><?php echo $pa->h33;?></td>
                            <td><?php echo $pa->h34;?></td>
                            

                        
                            <td colspan='2'> 
                                <?php 
                                $total= 
                                $pa->h1+$pa->h2+$pa->h3+$pa->h4+$pa->h5+$pa->h6+$pa->h7+$pa->h8+$pa->h9+$pa->h10+
                                $pa->h11+$pa->h12+$pa->h13+$pa->h14+$pa->h15+$pa->h16+$pa->h17+$pa->h18+$pa->h19+$pa->h20+
                                $pa->h21+$pa->h22+$pa->h23+$pa->h24+$pa->h25+$pa->h26+$pa->h27+$pa->h28+$pa->h29+$pa->h30+
                                $pa->h31+$pa->h32+$pa->h33+$pa->h34;
                                
                                echo $total;
                                echo " halaman";
                                ?>


                            </td>
                            

                        </tr>
                            <?php }?>
                </table>
  </div>

  <div id="akhwat_perjuz" class="w3-container w3-border city" style="display:none">
  <table style="font-size: 9pt; text-align: center; border-color: skyblue" border='2' width="100%">
						
                        <tr>
                       
                      
                            <td colspan="33" bgcolor="#ccffcc" > <h4>Perolehan Perjuz</h4>
                            <td rowspan='2'> <h4 >Total </h4>
                            </td>
                        
                            <tr align="center">
                                <td rowspans='2' bgcolor="#e0dedc" >No </td>
                                <td bgcolor="#e0dedc">Juz Ke - </td> 
                                <td bgcolor="#e0dedc">_1</td><td bgcolor="#e0dedc">_2</td><td bgcolor="#e0dedc">_3</td><td bgcolor="#e0dedc">_4</td><td bgcolor="#e0dedc">_5</td>
                                <td bgcolor="#e0dedc">_6</td><td bgcolor="#e0dedc">_7</td><td bgcolor="#e0dedc">_8</td><td bgcolor="#e0dedc">_9</td><td bgcolor="#e0dedc">10</td>
                                <td bgcolor="#e0dedc">11</td><td bgcolor="#e0dedc">12</td><td bgcolor="#e0dedc">13</td><td bgcolor="#e0dedc">14</td><td bgcolor="#e0dedc">15</td>
                                <td bgcolor="#e0dedc">16</td><td bgcolor="#e0dedc">17</td><td bgcolor="#e0dedc">18</td><td bgcolor="#e0dedc">19</td><td bgcolor="#e0dedc">20</td>
                                <td bgcolor="#e0dedc">21</td><td bgcolor="#e0dedc">22</td><td bgcolor="#e0dedc">23</td><td bgcolor="#e0dedc">24</td><td bgcolor="#e0dedc">25</td>
                                <td bgcolor="#e0dedc">26</td><td bgcolor="#e0dedc">27</td><td bgcolor="#e0dedc">28</td><td bgcolor="#e0dedc">29</td><td bgcolor="#e0dedc">30</td>
                           
                                    
                            </tr>
                        </tr>

                        <tr>

                     
                       
                       
                        <?php 
                         $no = 0  ;
                         $no++;
                        foreach ($peserta_akhwat as $pa) 
                            { 

                            
                              
                                ?>
                            <td bgcolor="#e0dedc"><?php echo $no++;?></td>
                            <td  align="Left"><?php echo $pa->nama_lengkap;?></td>
                       
                            <td><?php echo $pa->j1;?></td>
                            <td><?php echo $pa->j2;?></td>
                            <td><?php echo $pa->j3;?></td>
                            <td><?php echo $pa->j4;?></td>
                            <td><?php echo $pa->j5;?></td>
                            <td><?php echo $pa->j6;?></td>
                            <td><?php echo $pa->j7;?></td>
                            <td><?php echo $pa->j8;?></td>
                            <td><?php echo $pa->j9;?></td>
                            <td><?php echo $pa->j10;?></td>
                            <td><?php echo $pa->j11;?></td>
                            <td><?php echo $pa->j12;?></td>
                            <td><?php echo $pa->j13;?></td>
                            <td><?php echo $pa->j14;?></td>
                            <td><?php echo $pa->j15;?></td>
                            <td><?php echo $pa->j16;?></td>
                            <td><?php echo $pa->j17;?></td>
                            <td><?php echo $pa->j18;?></td>
                            <td><?php echo $pa->j19;?></td>
                            <td><?php echo $pa->j20;?></td>
                            <td><?php echo $pa->j21;?></td>
                            <td><?php echo $pa->j22;?></td>
                            <td><?php echo $pa->j23;?></td>
                            <td><?php echo $pa->j24;?></td>
                            <td><?php echo $pa->j25;?></td>
                            <td><?php echo $pa->j26;?></td>
                            <td><?php echo $pa->j27;?></td>
                            <td><?php echo $pa->j28;?></td>
                            <td><?php echo $pa->j29;?></td>
                            <td><?php echo $pa->j30;?></td>
                      
                            

                        
                            <td colspan='2'> 
                                <?php 
                                $total= 
                                $pa->j1+$pa->j2+$pa->j3+$pa->j4+$pa->j5+$pa->j6+$pa->j7+$pa->j8+$pa->j9+$pa->j10+
                                $pa->j11+$pa->j12+$pa->j13+$pa->j14+$pa->j15+$pa->j16+$pa->j17+$pa->j18+$pa->j19+$pa->j20+
                                $pa->j21+$pa->j22+$pa->j23+$pa->j24+$pa->j25+$pa->j26+$pa->j27+$pa->j28+$pa->j29+$pa->j30;
                              
                                
                                echo $total;
                                echo "Juz";
                                ?>


                            </td>
                            

                        </tr>
                            <?php }?>
                </table>
  </div>

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
