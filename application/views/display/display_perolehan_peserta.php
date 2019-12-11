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
                            foreach ($peserta_ikhwan as $pi) 
                                { 

                                
                                  
                                    ?>
                                <td bgcolor="#e0dedc"><?php echo $no++;?></td>
                                <td  align="Left"><?php echo $pi->nama_lengkap;?></td>
                           
                                <td><?php echo $pi->h1;?></td>
                                <td><?php echo $pi->h2;?></td>
                                <td><?php echo $pi->h3;?></td>
                                <td><?php echo $pi->h4;?></td>
                                <td><?php echo $pi->h5;?></td>
                                <td><?php echo $pi->h6;?></td>
                                <td><?php echo $pi->h7;?></td>
                                <td><?php echo $pi->h8;?></td>
                                <td><?php echo $pi->h9;?></td>
                                <td><?php echo $pi->h10;?></td>
                                <td><?php echo $pi->h11;?></td>
                                <td><?php echo $pi->h12;?></td>
                                <td><?php echo $pi->h13;?></td>
                                <td><?php echo $pi->h14;?></td>
                                <td><?php echo $pi->h15;?></td>
                                <td><?php echo $pi->h16;?></td>
                                <td><?php echo $pi->h17;?></td>
                                <td><?php echo $pi->h18;?></td>
                                <td><?php echo $pi->h19;?></td>
                                <td><?php echo $pi->h20;?></td>
                                <td><?php echo $pi->h21;?></td>
                                <td><?php echo $pi->h22;?></td>
                                <td><?php echo $pi->h23;?></td>
                                <td><?php echo $pi->h24;?></td>
                                <td><?php echo $pi->h25;?></td>
                                <td><?php echo $pi->h26;?></td>
                                <td><?php echo $pi->h27;?></td>
                                <td><?php echo $pi->h28;?></td>
                                <td><?php echo $pi->h29;?></td>
                                <td><?php echo $pi->h30;?></td>
                                <td><?php echo $pi->h31;?></td>
                                <td><?php echo $pi->h32;?></td>
                                <td><?php echo $pi->h33;?></td>
                                <td><?php echo $pi->h34;?></td>
								

							
								<td colspan='2'> 
                                    <?php 
                                    $total= 
                                    $pi->h1+$pi->h2+$pi->h3+$pi->h4+$pi->h5+$pi->h6+$pi->h7+$pi->h8+$pi->h9+$pi->h10+
                                    $pi->h11+$pi->h12+$pi->h13+$pi->h14+$pi->h15+$pi->h16+$pi->h17+$pi->h18+$pi->h19+$pi->h20+
                                    $pi->h21+$pi->h22+$pi->h23+$pi->h24+$pi->h25+$pi->h26+$pi->h27+$pi->h28+$pi->h29+$pi->h30+
                                    $pi->h31+$pi->h32+$pi->h33+$pi->h34;
                                    
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
                        foreach ($peserta_ikhwan as $pi) 
                            { 

                            
                              
                                ?>
                            <td bgcolor="#e0dedc"><?php echo $no++;?></td>
                            <td  align="Left"><?php echo $pi->nama_lengkap;?></td>
                       
                            <td><?php echo $pi->j1;?></td>
                            <td><?php echo $pi->j2;?></td>
                            <td><?php echo $pi->j3;?></td>
                            <td><?php echo $pi->j4;?></td>
                            <td><?php echo $pi->j5;?></td>
                            <td><?php echo $pi->j6;?></td>
                            <td><?php echo $pi->j7;?></td>
                            <td><?php echo $pi->j8;?></td>
                            <td><?php echo $pi->j9;?></td>
                            <td><?php echo $pi->j10;?></td>
                            <td><?php echo $pi->j11;?></td>
                            <td><?php echo $pi->j12;?></td>
                            <td><?php echo $pi->j13;?></td>
                            <td><?php echo $pi->j14;?></td>
                            <td><?php echo $pi->j15;?></td>
                            <td><?php echo $pi->j16;?></td>
                            <td><?php echo $pi->j17;?></td>
                            <td><?php echo $pi->j18;?></td>
                            <td><?php echo $pi->j19;?></td>
                            <td><?php echo $pi->j20;?></td>
                            <td><?php echo $pi->j21;?></td>
                            <td><?php echo $pi->j22;?></td>
                            <td><?php echo $pi->j23;?></td>
                            <td><?php echo $pi->j24;?></td>
                            <td><?php echo $pi->j25;?></td>
                            <td><?php echo $pi->j26;?></td>
                            <td><?php echo $pi->j27;?></td>
                            <td><?php echo $pi->j28;?></td>
                            <td><?php echo $pi->j29;?></td>
                            <td><?php echo $pi->j30;?></td>
                      
                            

                        
                            <td colspan='2'> 
                                <?php 
                                $total= 
                                $pi->j1+$pi->j2+$pi->j3+$pi->j4+$pi->j5+$pi->j6+$pi->j7+$pi->j8+$pi->j9+$pi->j10+
                                $pi->j11+$pi->j12+$pi->j13+$pi->j14+$pi->j15+$pi->j16+$pi->j17+$pi->j18+$pi->j19+$pi->j20+
                                $pi->j21+$pi->j22+$pi->j23+$pi->j24+$pi->j25+$pi->j26+$pi->j27+$pi->j28+$pi->j29+$pi->j30;
                              
                                
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
