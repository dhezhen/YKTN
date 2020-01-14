
<!DOCTYPE html>
<html>

<head>
	<title>Update Perolehan Harian</title>
</head>

<link rel="stylesheet" type="text/css" href="http://www.arabic-keyboard.org/keyboard/keyboard.css"> 
  <script type="text/javascript" src="http://www.arabic-keyboard.org/keyboard/keyboard.js" charset="UTF-8"></script> 

<style type="text/css">
	
#font{

	font-size: 12pt;
	color:black;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
<body>
<?php
  $info = $this->session->flashdata('info');
  if (!empty($info))
  {
    echo $info;
  }
  ?>
 
   
  <h3>Update Perolehan Hafalan  Harian </h3>
<div class="progress" data-percent="">
		<div class="bar" style="width:100%;"></div>
					</div>

    
		 <?= form_open_multipart('pengajar/proses_update_perolehan_harian', ['class'=>'form-horizontal']) ?>


<div style="overflow-x:auto;">
<table class="table table-striped table-bordered data" style="width: 50%;" >
      <thead>
        <tr>      
          <th>Hari Ke</th>
          <th>Jumlah Perolehan</th>
                 
      
        <!--  <th>Dokumen</th> -->                                                                                                                                                                                         
        </tr>
      </thead>
        
        </tr>
          <td>1</td>
          <td><input type='text' name='h1'value='<?php echo $peserta->h1?>'></td>
        </tr>
        <tr>
          <td>2</td>
          <td><input type='text' name='h2'value='<?php echo $peserta->h2?>'></td>
        </tr>
        <tr>
          <td>3</td>
          <td><input type='text' name='h3'value='<?php echo $peserta->h3?>'></td>
        </tr>
        <tr>
          <td>4</td>
          <td><input type='text' name='h4'value='<?php echo $peserta->h4?>'></td>
        </tr>
        <tr>
          <td>5</td>
          <td><input type='text' name='h5'value='<?php echo $peserta->h5?>'></td>
        </tr>
        <tr>
          <td>6</td>
          <td><input type='text' name='h6'value='<?php echo $peserta->h6?>'></td>
        </tr>
        <tr>
          <td>7</td>
          <td><input type='text' name='h7'value='<?php echo $peserta->h7?>'></td>
        </tr>
        <tr>
          <td>8</td>
          <td><input type='text' name='h8'value='<?php echo $peserta->h8?>'></td>
        </tr>
        <tr>
          <td>9</td>
          <td><input type='text' name='h9'value='<?php echo $peserta->h9?>'></td>
        </tr>
        <tr>
          <td>10</td>
          <td><input type='text' name='h10'value='<?php echo $peserta->h10?>'></td>
        </tr>
        <tr>
          <td>11</td>
          <td><input type='text' name='h11'value='<?php echo $peserta->h11?>'></td>
        </tr>
        <tr>
          <td>12</td>
          <td><input type='text' name='h12'value='<?php echo $peserta->h12?>'></td>
        </tr>
        <tr>
          <td>13</td>
          <td><input type='text' name='h13'value='<?php echo $peserta->h13?>'></td>
        </tr>
        <tr>
          <td>14</td>
          <td><input type='text' name='h14'value='<?php echo $peserta->h14?>'></td>
        </tr>
        <tr>
          <td>15</td>
          <td><input type='text' name='h15'value='<?php echo $peserta->h15?>'></td>
        </tr>
        <tr>
          <td>16</td>
          <td><input type='text' name='h16'value='<?php echo $peserta->h16?>'></td>
        </tr>
        <tr>
          <td>17</td>
          <td><input type='text' name='h17'value='<?php echo $peserta->h17?>'></td>
        </tr>
        <tr>
          <td>18</td>
          <td><input type='text' name='h18'value='<?php echo $peserta->h18?>'></td>
        </tr>
        <tr>
          <td>19</td>
          <td><input type='text' name='h19'value='<?php echo $peserta->h19?>'></td>
        </tr>
        <tr>
          <td>20</td>
          <td><input type='text' name='h20'value='<?php echo $peserta->h20?>'></td>
        </tr>

        <tr>
          <td>21</td>
          <td><input type='text' name='h21'value='<?php echo $peserta->h21?>'></td>
        </tr>
        <tr>
          <td>22</td>
          <td><input type='text' name='h22'value='<?php echo $peserta->h22?>'></td>
        </tr>
        <tr>
          <td>23</td>
          <td><input type='text' name='h23'value='<?php echo $peserta->h23?>'></td>
        </tr>
        <tr>
          <td>24</td>
          <td><input type='text' name='h24'value='<?php echo $peserta->h24?>'></td>
        </tr>
        <tr>
          <td>25</td>
          <td><input type='text' name='h25'value='<?php echo $peserta->h25?>'></td>
        </tr>
        <tr>
          <td>26</td>
          <td><input type='text' name='h26'value='<?php echo $peserta->h26?>'></td>
        </tr>
        <tr>
          <td>27</td>
          <td><input type='text' name='h27'value='<?php echo $peserta->h27?>'></td>
        </tr>
        <tr>
          <td>28</td>
          <td><input type='text' name='h28'value='<?php echo $peserta->h28?>'></td>
        </tr>
        <tr>
          <td>29</td>
          <td><input type='text' name='h29'value='<?php echo $peserta->h29?>'></td>
        </tr>
        <tr>
          <td>30</td>
          <td><input type='text' name='h30'value='<?php echo $peserta->h30?>'></td>
        </tr>
        <tr>
          <td>30</td>
          <td><input type='text' name='h31'value='<?php echo $peserta->h31?>'></td>
        </tr>
        <tr>
          <td>32</td>
          <td><input type='text' name='h32'value='<?php echo $peserta->h32?>'></td>
        </tr>
        <tr>
          <td>33</td>
          <td><input type='text' name='h33'value='<?php echo $peserta->h33?>'></td>
        </tr>
        <tr>
          <td>34</td>
          <td><input type='text' name='h34'value='<?php echo $peserta->h34?>'></td>
        </tr>
   </table>
  </div>



	</div>


    <input type="hidden" name="id_peserta" value="<?php echo $peserta->id_peserta;?>"/>

<button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
<?= form_close() ?>


  </div>

</body>
</html>


