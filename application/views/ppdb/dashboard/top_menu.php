<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/bootstrap/css/custom.css');?>" rel="stylesheet">
<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
   
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Beranda</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         
          <li>
            <a href="<?php echo site_url('ppdb/form_biodata');?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Biodata</a>
        </li>
        
         <li>
          <a href="<?php echo site_url('ppdb/form_preview');?>"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>Cetak Formulir</a>
       </li>

        

        <!-- <li role="separator" class="divider"></li>
        <li> 
          <a href="<    ?php echo site_url('ppdb/pengumuman');?>"> <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>Peserta</a> 
        </li> -->

			<li>
        <a href="<?php echo site_url('ppdb/jadwal');?>"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Arahan Kedatangan </a>
      </li>    

        
        


          <!--
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Bantuan <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('ppdb/kontak');?>"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Kontak</a></li>
            
          </ul>
        </li> -->

	
      

         
     <!--
		<li><a href="<?php echo site_url('ppdb/status/');?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Status</a></li> -->
      
	  
	  <ul class="nav navbar-nav navbar-right">
    
		<li> <a  href="<?php echo site_url('ppdb/logout');?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> (Logout)</a></li>
		</ul>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


































