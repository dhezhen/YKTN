<!-- <!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Login Admin</title>
<link rel="stylesheet" href=<?php echo base_url ("assets/bootstrap/css/bootstrap.css")?> type="text/css">
<link rel="stylesheet" href=<?php echo base_url("assets/bootstrap/css/bootstrap-theme.css")?> type="text/css">
<style type="text/css">
/*! LETAKKAN CSS TAMBAHAN "FORM LOGIN" DIBAWAH INI */


</style>
<script src=<?php echo base_url("assets/jquery/jquery-2.2.3.min.js")?>></script>
<script src=<?php echo base_url("assets/bootstrap/js/bootstrap.js")?>></script>
</head>
<body>
<!-- LETAKKAN "FORM LOGIN" DIBAWAH INI 
<div class="container">
<form class="form-signin" action="<?php echo site_url('admin/login');?>" method="post" onSubmit="return cekform();">
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-user"></span> Email </label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
          </div>

          <div class="form-group">
            <label for="Email"><span class="glyphicon glyphicon-lock"></span> Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>

          <div class="form-group">
            <label for="Angkatan"><span class="glyphicon glyphicon-number"></span>Pilih Angkatan</label>
            <select name='angkatan' class='form-control' >
                    <option value='43'>43</option>
                    <option value='44'>44</option>
                    <option value='45'>45</option>
                    <option value='46'>46</option>
                  
            </select>

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




 -->
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Administrator</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href=<?php echo base_url("assets/images/icons/favicon.ico")?>/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/vendor/animate/animate.css")?>>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/vendor/css-hamburgers/hamburgers.min.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/vendor/select2/select2.min.css")?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/css/util.css")?>>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/css/main.css")?>>
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
	
		<div class="container-login100">
	
			<div class="wrap-login100">
		
				<div class="login100-pic js-tilt" data-tilt>
					<img src=<?php echo base_url("assets/images/logo2.png")?> alt="IMG">
					
				</div>
					
				<!-- <form class="form-signin" action="< ?php echo site_url('admin/login');?>" method="post" onSubmit="return cekform();"> -->
				<form class="login100-form validate-form" action="<?php echo site_url('admin/login')?>"  onSubmit="return cekform();" method="post">
				<center style="color: white">
				<span data-tilt>
				Sistem Informasi Karantina Tahfihz Al-Quran Nasional
					</span>
					</center>
					
				
					<span class="login100-form-title" data-tilt>
						Silahkan Login
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="masukan email anda">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "angkatan is required">
						
				 <select name='angkatan' class='input100' >
                    <option value='43'>43</option>
                    <option value='44'>44</option>
                    <option value='45'>45</option>
                    <option value='46'>46</option>
                    <option value='47'>47</option>
                    <option value='48'>48</option>

					</select>
						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-number" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
				
					</div>
          </form>
					
		<div class="text-center p-t-12">
					<?php
      $info = $this->session->flashdata('info');
      if (!empty($info))
      {
        echo $info;
      }
      ?>
					</div>

					
			
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src=<?php ECHO base_url("assets/vendor/jquery/jquery-3.2.1.min.js")?>></script>
<!--===============================================================================================-->
	<script src=<?php ECHO base_url("assets/vendor/bootstrap/js/popper.js")?>></script>
	<script src=<?php ECHO base_url("assets/vendor/bootstrap/js/bootstrap.min.js")?>></script>
<!--===============================================================================================-->
	<script src=<?php ECHO base_url("assets/vendor/select2/select2.min.js")?>></script>
<!--===============================================================================================-->
	<script src=<?php ECHO base_url("assets/vendor/tilt/tilt.jquery.min.js")?>></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src= <?php echo base_url("assets/js/main.js")?>></script>

</body>
</html>