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
      google.charts.setOnLoadCallback(ikhwan_ganjil_chart);
      google.charts.setOnLoadCallback(akhwat_ganjil_chart);
      google.charts.setOnLoadCallback(ikhwan_genap_chart);
      google.charts.setOnLoadCallback(akhwat_genap_chart);
      google.charts.setOnLoadCallback(akhwat_ikhwan_ganjil_chart);
      google.charts.setOnLoadCallback(akhwat_ikhwan_genap_chart);

      // Callback that draws the pie chart for Sarah's pizza.
      function ikhwan_ganjil_chart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'kategori');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['3 Bulan Mutqin', <?php echo $program_mutqin_ig; ?>],
          ['1 Bulan', <?php echo $program_sebulan_ig; ?>],
          ['3 Pekan', <?php echo $program_3pekan_ig; ?>],
          ['2 Pekan', <?php echo $program_2pekan_ig; ?>],
          ['1 Pekan', <?php echo $program_1pekan_ig; ?>],
          ['Weekend Tahfizh ', <?php echo $program_weekend_ig_tahfizh; ?>],
          ['Weekend Tahsin ', <?php echo $program_weekend_ig_tahsin; ?>]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'Persentase  Ikhwan Angkatan 43',
                       width:400,
                     is3D: true,
                       height:300};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('ikhwan_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function akhwat_ganjil_chart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'kategori');
        data.addColumn('number', 'Slices');
        data.addRows([
         ['3 Bulan Mutqin', <?php echo $program_mutqin_ag; ?>],
          ['1 Bulan', <?php echo $program_sebulan_ag; ?>],
          ['3 Pekan', <?php echo $program_3pekan_ag; ?>],
          ['2 Pekan', <?php echo $program_2pekan_ag; ?>],
          ['1 Pekan', <?php echo $program_1pekan_ag; ?>],
          ['Weekend Tahfizh ', <?php echo $program_weekend_ag_tahfizh; ?>],
          ['Weekend Tahsin ', <?php echo $program_weekend_ag_tahsin; ?>]
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'Persentase program Akhwat Angkatan 43',
        				is3D:true,
                       width:400,
                       height:300};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('akhwat_chart_div'));
        chart.draw(data, options);
      }

//genap
  // Callback that draws the pie chart for Sarah's pizza.
      function ikhwan_genap_chart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'kategori');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['3 Bulan Mutqin', <?php echo $program_mutqin_ignp; ?>],
          ['1 Bulan', <?php echo $program_sebulan_ignp; ?>],
          ['3 Pekan', <?php echo $program_3pekan_ignp; ?>],
          ['2 Pekan', <?php echo $program_2pekan_ignp; ?>],
          ['1 Pekan', <?php echo $program_1pekan_ignp; ?>],
          ['Weekend Tahfizh ', <?php echo $program_weekend_ignp_tahfizh; ?>],
          ['Weekend Tahsin ', <?php echo $program_weekend_ignp_tahsin; ?>]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'Persentase program Ikhwan Angkatan 44',
                       width:400,
                     is3D: true,
                       height:300};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('ikhwan_genap_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
function akhwat_genap_chart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'kategori');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['3 Bulan Mutqin', <?php echo $program_mutqin_agnp; ?>],
          ['1 Bulan', <?php echo $program_sebulan_agnp; ?>],
          ['3 Pekan', <?php echo $program_3pekan_agnp; ?>],
          ['2 Pekan', <?php echo $program_2pekan_agnp; ?>],
          ['1 Pekan', <?php echo $program_1pekan_agnp; ?>],
          ['Weekend Tahfizh ', <?php echo $program_weekend_agnp_tahfizh; ?>],
          ['Weekend Tahsin ', <?php echo $program_weekend_agnp_tahsin; ?>]
        ]);

        // Set options for Sarah's pie chafrt.
        var options = {title:'Persentase  Program Akhwat Angkatan 44',
                       width:400,
                     is3D: true,
                       height:300};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('akhwat_genap_chart_div'));
        chart.draw(data, options);
      }
// grafik presentase 


      function akhwat_ikhwan_ganjil_chart() { 

      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Persentaes', 'ikhwan akhwat'],
          ['Ikhwan',  <?php echo $jumlah_ig;?>],
          ['Akhwat',    <?php echo $jumlah_ag;?>]
        ]);

        var options = {
          title: 'Persetase Peserta Akhwat Ikhwan Angkatan 43',
          width: 500, height: 300,
          pieHole: 0.3,
        };

        var chart = new google.visualization.PieChart(document.getElementById('akhwat_ikhwan_ganjil_chart_div'));
        chart.draw(data, options);
      }

     } 

     function akhwat_ikhwan_genap_chart() { 
        
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Persentaes', 'ikhwan akhwat'],
          ['Ikhwan',  <?php echo $jumlah_ignp;?>],
          ['Akhwat',    <?php echo $jumlah_agnp;?>]
        ]);

        var options = {
          title: 'Persetase Peserta Akhwat Ikhwan Angkatan 44',
          width: 500, height: 300,
          pieHole: 0.3,
        };

        var chart = new google.visualization.PieChart(document.getElementById('akhwat_ikhwan_genap_chart_div'));
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
<p class="tengah">Angkatan  43  & 44</p>
<table align="center"  style="margin-left:20px; margin-bottom: 20px ">
      <tr>
        <td><div id="ikhwan_chart_div" style="border: 3px solid #99bbff"></div></td>
        <td><div id="akhwat_chart_div" style="border: 3px solid #99bbff"></div></td>       
        <td><div id="akhwat_ikhwan_ganjil_chart_div" style="border: 3px solid #99bbff"></div></td>       
        
       </tr>
       <tr>
       	<td><div id="ikhwan_genap_chart_div" style="border: 3px solid #99bbff"></div></td>
        <td><div id="akhwat_genap_chart_div" style="border: 3px solid #99bbff"></div></td>
          <td><div id="akhwat_ikhwan_genap_chart_div" style="border: 3px solid #99bbff"></div></td> 

       </tr>
    </table>


 
<table>
<div class="row">

  <div class="column">

    <div class="card">
         <h3>Angkatan 43</h3>
      <h4>Ikhwan</h4>
      <p>Total Pendaftar : <?php echo $jumlah_ig; ?> </p>
      Program : <br>

      	<ul style="text-align: left;">
      		<li>3 Bulan Mutqin : <?php echo $program_mutqin_ig; ?></li>
      		<li>Satu Bulan : <?php echo $program_sebulan_ig; ?> </li>
      		<li>3 Pekan  : <?php echo $program_3pekan_ig; ?></li>
      		<li>2 Pekan : <?php echo $program_2pekan_ig; ?></li>
      		<li>1 Pekan  : <?php echo $program_1pekan_ig; ?></li>
      		<li>Weekend Tahsin: <?php echo $program_weekend_ig_tahsin; ?></li>
      		<li>Weekend Tahfizh : <?php echo $program_weekend_ig_tahfizh; ?></li>
      	</ul>  
 
    </div>
  </div> 


  <div class="column">
    <div class="card">
   

      <h3>Angkatan 43 </h3>
      <h4>Akhwat</h4>
      <p>Total Pendaftar : <?php echo $jumlah_ag; ?> </p>
      Program : <br>

        <ul style="text-align: left;">
          <li>3 Bulan Mutqin : <?php echo $program_mutqin_ag; ?></li>
          <li>Satu Bulan : <?php echo $program_sebulan_ag; ?> </li>
          <li>3 Pekan  : <?php echo $program_3pekan_ag; ?></li>
          <li>2 Pekan : <?php echo $program_2pekan_ag; ?></li>
          <li>1 Pekan  : <?php echo $program_1pekan_ag; ?></li>
          <li>Weekend Tahsin: <?php echo $program_weekend_ag_tahsin; ?></li>
          <li>Weekend Tahfizh : <?php echo $program_weekend_ag_tahfizh; ?></li>
        </ul>  
 
    </div>
  </div>

<!-- Genap -->
<div class="column">

    <div class="card">
         <h3>Angkatan 44</h3>
      <h4>Ikhwan</h4>
      <p>Total Pendaftar : <?php echo $jumlah_ignp; ?> </p>
      Program : <br>

        <ul style="text-alignpn: left;">
          <li>3 Bulan Mutqin : <?php echo $program_mutqin_ignp; ?></li>
          <li>Satu Bulan : <?php echo $program_sebulan_ignp; ?> </li>
          <li>3 Pekan  : <?php echo $program_3pekan_ignp; ?></li>
          <li>2 Pekan : <?php echo $program_2pekan_ignp; ?></li>
          <li>1 Pekan  : <?php echo $program_1pekan_ignp; ?></li>
          <li>Weekend Tahsin: <?php echo $program_weekend_ignp_tahsin; ?></li>
          <li>Weekend Tahfizh : <?php echo $program_weekend_ignp_tahfizh; ?></li>
        </ul>  
 
    </div>
  </div> 


  <div class="column">
    <div class="card">
   

      <h3>Angkatan 44 </h3>
      <h4>Akhwat</h4>
      <p>Total Pendaftar : <?php echo $jumlah_agnp; ?> </p>
      Program : <br>

        <ul style="text-alignpn: left;">
          <li>3 Bulan Mutqin : <?php echo $program_mutqin_agnp; ?></li>
          <li>Satu Bulan : <?php echo $program_sebulan_agnp; ?> </li>
          <li>3 Pekan  : <?php echo $program_3pekan_agnp; ?></li>
          <li>2 Pekan : <?php echo $program_2pekan_agnp; ?></li>
          <li>1 Pekan  : <?php echo $program_1pekan_agnp; ?></li>
          <li>Weekend Tahsin: <?php echo $program_weekend_agnp_tahsin; ?></li>
          <li>Weekend Tahfizh : <?php echo $program_weekend_agnp_tahfizh; ?></li>
        </ul>  
 
    </div>
  </div>


</div>
 <br>
<div class="column">
    <div class="card">
        <div > Total Peserta angkatan 43 <br> <?php echo $peserta_ganjil?> </div>
    </div>
</div>

<div class="column">
    <div class="card">
        <div > Total Peserta angkatan 44 <br> <?php echo $peserta_genap?> </div>
    </div>
</div>

</body>
</html>


