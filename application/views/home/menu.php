<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Halaman Login dengan Bootstrap</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
<style type="text/css">
/*! LETAKKAN CSS TAMBAHAN "FORM LOGIN" DIBAWAH INI */


</style>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<!-- LETAKKAN "FORM LOGIN" DIBAWAH INI -->
<div class="container">
<form class="form-signin" action="<?php echo site_url('admin/login');?>" method="post" onSubmit="return cekform();">
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-lock"></span> Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
      
      <?php
      $info = $this->session->flashdata('info');
      if (!empty($info))
      {
        echo $info;
      }
      ?>
      
          <button type="submit" class="btn btn-block">Login 
            <span class="glyphicon glyphicon-log-in"></span>
          </button>
        </form>
       </div> 





</body>
</html> 





