<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(ikhwan_chart);
      google.charts.setOnLoadCallback(akhwat_chart);
      google.charts.setOnLoadCallback(akhwat_ikhwan_chart);
     

      // Callback that draws the pie chart for Sarah's pizza.
      function ikhwan_chart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'kategori');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['3 Bulan Mutqin', <?php echo $program_mutqin_i; ?>],
          ['1 Bulan', <?php echo $program_sebulan_i; ?>],
          ['3 Pekan', <?php echo $program_3pekan_i; ?>],
          ['2 Pekan', <?php echo $program_2pekan_i; ?>],
          ['1 Pekan', <?php echo $program_1pekan_i; ?>],
          ['Weekend Tahfizh ', <?php echo $program_weekend_i_tahfizh; ?>],
          ['Weekend Tahsin ', <?php echo $program_weekend_i_tahsin; ?>]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'Persentase  Ikhwan Angkatan <?php echo $this->session->userdata('angkatan');?>',
                       width:350,
                     is3D: true,
                       height:250};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('ikhwan_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function akhwat_chart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'kategori');
        data.addColumn('number', 'Slices');
        data.addRows([
         ['3 Bulan Mutqin', <?php echo $program_mutqin_a; ?>],
          ['1 Bulan', <?php echo $program_sebulan_a; ?>],
          ['3 Pekan', <?php echo $program_3pekan_a; ?>],
          ['2 Pekan', <?php echo $program_2pekan_a; ?>],
          ['1 Pekan', <?php echo $program_1pekan_a; ?>],
          ['Weekend Tahfizh ', <?php echo $program_weekend_a_tahfizh; ?>],
          ['Weekend Tahsin ', <?php echo $program_weekend_a_tahsin; ?>]
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'Persentase program Akhwat Angkatan <?php echo $this->session->userdata('angkatan');?>',
        				is3D:true,
                       width:350,
                       height:250};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('akhwat_chart_div'));
        chart.draw(data, options);
      }

//genap
  // Callback that draws the pie chart for Sarah's pizza.
      
// grafik presentase 


      function akhwat_ikhwan_chart() { 

      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Persentaes', 'ikhwan akhwat'],
          ['Ikhwan',  <?php echo $jumlah_i;?>],
          ['Akhwat',    <?php echo $jumlah_a;?>]
        ]);

        var options = {
          title: 'Persetase Peserta Akhwat Ikhwan Angkatan <?php echo $this->session->userdata('angkatan');?>',
          width: 500, height: 250,
          pieHole: 0.3,
        };

        var chart = new google.visualization.PieChart(document.getElementById('akhwat_ikhwan_chart_div'));
        chart.draw(data, options);
      }

     } 

     



    </script>

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ddccff;
}
.tengah{

	text-align: center;;
}
</style>
</head>
<body>

<h2 class="tengah">Statistik Report Pendaftaran <br>Karantina Tahfihz Al-Qurán Nasional </h2>
<h2 class="tengah">Angkatan  <?php echo $this->session->userdata('angkatan');?></h2>
<table align="center"  style="margin-left:0px; margin-bottom: 20px ">
      <tr>
        <td><div id="ikhwan_chart_div" style="border: 3px solid #99bbff"></div></td>
        <td><div id="akhwat_chart_div" style="border: 3px solid #99bbff"></div></td>       
        <td><div id="akhwat_ikhwan_chart_div" style="border: 3px solid #99bbff"></div></td>       
        
       </tr>
      
      
    </table>


 
<table>
<div class="row">

  <div class="column">

    <div class="card">
        
      <h2>Ikhwan</h2>
      <hr>
      <h3>Total Pendaftar : <?php echo $jumlah_i; ?> </h3>
      Rincian Program : <br>

      	<ul style="text-align: left;">
      		<li>3 Bulan Mutqin : <?php echo $program_mutqin_i; ?></li>
      		<li>Satu Bulan : <?php echo $program_sebulan_i; ?> </li>
      		<li>3 Pekan  : <?php echo $program_3pekan_i; ?></li>
      		<li>2 Pekan : <?php echo $program_2pekan_i; ?></li>
      		<li>1 Pekan  : <?php echo $program_1pekan_i; ?></li>
      		<li>Weekend Tahsin: <?php echo $program_weekend_i_tahsin; ?></li>
      		<li>Weekend Tahfizh : <?php echo $program_weekend_i_tahfizh; ?></li>
      	</ul>  
 
    </div>
  </div> 


  <div class="column">
    <div class="card">

    <h2>Akhwat</h2>
      <hr>
      <h3>Total Pendaftar : <?php echo $jumlah_a; ?> </h3>
      Rincian Program : <br>

        <ul style="text-align: left;">
          <li>3 Bulan Mutqin : <?php echo $program_mutqin_a; ?></li>
          <li>Satu Bulan : <?php echo $program_sebulan_a; ?> </li>
          <li>3 Pekan  : <?php echo $program_3pekan_a; ?></li>
          <li>2 Pekan : <?php echo $program_2pekan_a; ?></li>
          <li>1 Pekan  : <?php echo $program_1pekan_a; ?></li>
          <li>Weekend Tahsin: <?php echo $program_weekend_a_tahsin; ?></li>
          <li>Weekend Tahfizh : <?php echo $program_weekend_a_tahfizh; ?></li>
        </ul>  
 
    </div>
  </div>
  <div class="column">
    <div class="card">
    <h1>  
        Total Pendaftar : <br>
        <hr border='1'>
        <?php echo $total_peserta;?>
    </h1>

      
 
    </div>
  </div>



  


</div>




</body>
</html>


