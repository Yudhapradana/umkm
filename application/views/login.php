<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php  echo base_url()?>assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url()?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url()?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url()?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url()?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url()?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url()?>assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url()?>assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url()?>assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url()?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url()?>assets/login/css/main.css">
	<script src="<?php echo base_url() ?>assets/js/sweetalert2@8.js"></script>
	
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<div class="login100-form validate-form flex-sb flex-w" >
					        <?php echo form_open('Login/cekLogin');?>
       
         <!-- <?=$this->session->flashdata('gglLogin')?>
         <?=$this->session->flashdata('waiting')?> -->
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" style="width: 400px" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="<?php echo site_url('Login/register') ?>" class="txt3">
								Register
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn" style="align-items: center;">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
						<?php echo form_close(); ?>
							<a href="<?php echo site_url('User') ?>" class="btn btn-outline-primary" style="margin-left: 180px">
							Home
						</a>
					
					</div>
					

				</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php  echo base_url()?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php  echo base_url()?>assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php  echo base_url()?>assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php  echo base_url()?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php  echo base_url()?>assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php  echo base_url()?>assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php  echo base_url()?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php  echo base_url()?>assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php  echo base_url()?>assets/login/js/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			<?php if($this->session->flashdata('gagallogin')): ?>
				Swal.fire({
					type: 'error',
					title: 'Ada Kesalahan',
					text: 'Username & Password Tidak Cocok',
        				})
			<?php endif; ?>

			<?php if($this->session->flashdata('waiting')): ?>
				Swal.fire({
					type: 'warning',
					title: 'Akun anda belum diaktifkan',
        				})
			<?php endif; ?>

			
		})
	</script>
</body>
</html>