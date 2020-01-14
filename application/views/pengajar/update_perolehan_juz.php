
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
 
   
  <h3>Update Perolehan Perjuz </h3>
<div class="progress" data-percent="">
		<div class="bar" style="width:100%;"></div>
					</div>

    
		 <?= form_open_multipart('pengajar/proses_update_perolehan_juz', ['class'=>'form-horizontal']) ?>


<div style="overflow-x:auto;">
<table class="table table-striped table-bordered data" style="width: 50%;" >
      <thead>
        <tr>      
          <th>Juz Ke</th>
          <th>Jumlah Perolehan Juz</th>
                 
      
        <!--  <th>Dokumen</th> -->                                                                                                                                                                                         
        </tr>
      </thead>
      <tbody>
    <tr>
          <td>1</td>
          <td>
            <select name='j1'>
                    <option value=""><?php echo $peserta->j1;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>2</td>
          <td>
            <select name='j2'>
                    <option value=""><?php echo $peserta->j2;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>3</td>
          <td>
            <select name='j3'>
                    <option value=""><?php echo $peserta->j3;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>4</td>
          <td>
            <select name='j4'>
                    <option value=""><?php echo $peserta->j4;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>5</td>
          <td>
            <select name='j5'>
                    <option value=""><?php echo $peserta->j5;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>6</td>
          <td>
            <select name='j6'>
                    <option value=""><?php echo $peserta->j6;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>7</td>
          <td>
            <select name='j7'>
                    <option value=""><?php echo $peserta->j7;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>8</td>
          <td>
            <select name='j8'>
                    <option value=""><?php echo $peserta->j8;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>9</td>
          <td>
            <select name='j9'>
                    <option value=""><?php echo $peserta->j9;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>10</td>
          <td>
            <select name='j10'>
                    <option value=""><?php echo $peserta->j10;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>11</td>
          <td>
            <select name='j11'>
                    <option value=""><?php echo $peserta->j11;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>12</td>
          <td>
            <select name='j12'>
                    <option value=""><?php echo $peserta->j2;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>13</td>
          <td>
            <select name='j13'>
                    <option value=""><?php echo $peserta->j13;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>14</td>
          <td>
            <select name='j14'>
                    <option value=""><?php echo $peserta->j14;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>15</td>
          <td>
            <select name='j15'>
                    <option value=""><?php echo $peserta->j15;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>16</td>
          <td>
            <select name='j16'>
                    <option value=""><?php echo $peserta->j16;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>17</td>
          <td>
            <select name='j17'>
                    <option value=""><?php echo $peserta->j17;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>18</td>
          <td>
            <select name='j18'>
                    <option value=""><?php echo $peserta->j18;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>19</td>
          <td>
            <select name='j9'>
                    <option value=""><?php echo $peserta->j19;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>20</td>
          <td>
            <select name='j10'>
                    <option value=""><?php echo $peserta->j10;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>21</td>
          <td>
            <select name='j21'>
                    <option value=""><?php echo $peserta->j21;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>22</td>
          <td>
            <select name='j22'>
                    <option value=""><?php echo $peserta->j22;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>23</td>
          <td>
            <select name='j23'>
                    <option value=""><?php echo $peserta->j23;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>24</td>
          <td>
            <select name='j4'>
                    <option value=""><?php echo $peserta->j24;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
          <td>25</td>
          <td>
            <select name='j25'>
                    <option value=""><?php echo $peserta->j25;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>26</td>
          <td>
            <select name='j26'>
                    <option value=""><?php echo $peserta->j26;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>27</td>
          <td>
            <select name='j27'>
                    <option value=""><?php echo $peserta->j27;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>28</td>
          <td>
            <select name='j28'>
                    <option value=""><?php echo $peserta->j28;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>9</td>
          <td>
            <select name='j29'>
                    <option value=""><?php echo $peserta->j29;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>
    <tr>
        <td>30</td>
          <td>
            <select name='j30'>
                    <option value=""><?php echo $peserta->j30;?></option>    
                    <option value="1">selesai</option>    
                    <option value="0">belum</option>    
        </select>      
        </td>
    </tr>     

      </tbody>
    </table>
  </div>



	</div>


    <input type="hidden" name="id_peserta" value="<?php echo $peserta->id_peserta;?>"/>

<button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
<?= form_close() ?>


  </div>

</body>
</html>


