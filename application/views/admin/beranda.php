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
                       width:350,
                     is3D: true,
                       height:250};

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
          ['3 Bulan Mutqin', 2],
          ['1 Bulan', 2],
          ['3 Pekan', 2],
          ['2 Pekan', 4],
          ['1 Pekan', 4],
          ['Weekend Tahfizh ', 3],
          ['Weekend Tahsin ', 3]
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'Persentase Akhwat Angkatan 43',
        				is3D:true,
                       width:350,
                       height:250};

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
          ['3 Bulan Mutqin', <?php echo $program_mutqin_ig; ?>],
          ['1 Bulan', <?php echo $program_sebulan_ig; ?>],
          ['3 Pekan', <?php echo $program_3pekan_ig; ?>],
          ['2 Pekan', <?php echo $program_2pekan_ig; ?>],
          ['1 Pekan', <?php echo $program_1pekan_ig; ?>],
          ['Weekend Tahfizh ', <?php echo $program_weekend_ig_tahfizh; ?>],
          ['Weekend Tahsin ', <?php echo $program_weekend_ig_tahsin; ?>]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'Persentase  Ikhwan Angkatan 44',
                       width:350,
                     is3D: true,
                       height:250};

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
          ['3 Bulan Mutqin', <?php echo $program_mutqin_ig; ?>],
          ['1 Bulan', <?php echo $program_sebulan_ig; ?>],
          ['3 Pekan', <?php echo $program_3pekan_ig; ?>],
          ['2 Pekan', <?php echo $program_2pekan_ig; ?>],
          ['1 Pekan', <?php echo $program_1pekan_ig; ?>],
          ['Weekend Tahfizh ', <?php echo $program_weekend_ig_tahfizh; ?>],
          ['Weekend Tahsin ', <?php echo $program_weekend_ig_tahsin; ?>]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'Persentase  Akhwat Angkatan 44',
                       width:350,
                     is3D: true,
                       height:250};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('akhwat_genap_chart_div'));
        chart.draw(data, options);
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
<table class="columns">
      <tr>
        <td><div id="ikhwan_chart_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="akhwat_chart_div" style="border: 1px solid #ccc"></div></td>       
        
       </tr>
       <tr>
       	<td><div id="ikhwan_genap_chart_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="akhwat_genap_chart_div" style="border: 1px solid #ccc"></div></td>

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
      <h3>Angkatan 43</h3>
      <h4>Akhwat</h4>
      <p>Total Pendaftar : 400 </p>
      Program : <br>
      	<ul style="text-align: left;">
      		<li>3 Bulan Mutqin : </li>
      		<li>Satu Bulan : </li>
      		<li>3 Pekan  : </li>
      		<li>2 Pekan : </li>
      		<li>1 Pekan  : </li>
      		<li>Weekend : </li>
      	</ul>  
 
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Angkatan 44</h3>
      <h4>Ikhwan</h4>
      <p>Total Pendaftar : 400 </p>
      Program : <br>
      	<ul style="text-align: left;">
      		<li>3 Bulan Mutqin : </li>
      		<li>Satu Bulan : </li>
      		<li>3 Pekan  : </li>
      		<li>2 Pekan : </li>
      		<li>1 Pekan  : </li>
      		<li>Weekend : </li>
      	</ul>  
 
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3>Angkatan 44</h3>
      <h4>Akhwat</h4>
      <p>Total Pendaftar : 400 </p>
      Program : <br>
      	<ul style="text-align: left;">
      		<li>3 Bulan Mutqin : </li>
      		<li>Satu Bulan : </li>
      		<li>3 Pekan  : </li>
      		<li>2 Pekan : </li>
      		<li>1 Pekan  : </li>
      		<li>Weekend : </li>
      	</ul>  
 
    </div>
  </div>


  
</div>

</body>
</html>


