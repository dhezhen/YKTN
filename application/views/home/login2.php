<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
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
					<img src=<?php echo base_url("assets/images/img-01.png")?> alt="IMG">
				</div>
				<!-- <form class="form-signin" action="< ?php echo site_url('admin/login');?>" method="post" onSubmit="return cekform();"> -->
				<form class="login100-f orm validate-form" action="<?php echo site_url('admin/login');?>"  onSubmit="return cekform();" method="post">
					<span class="login100-form-title">
						Silahkan Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
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

					</select>
						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
						</form>
					</div>
     
					
		<div class="text-center p-t-12">
					<?php
      $info = $this->session->flashdata('info');
      if (!empty($info))
      {
        echo $info;
      }
      ?>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
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