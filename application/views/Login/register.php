<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?=base_url("assets2/")?>images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url("assets2/")?>vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?=base_url("assets2/")?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?=base_url("assets2/")?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url("assets2/")?>vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url("assets2/")?>vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url("assets2/")?>vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url("assets2/")?>vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url("assets2/")?>vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url("assets2/")?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url("assets2/")?>css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url('assets2/');?>images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<?= $this->session->flashdata('message')?>
				<form class="login100-form flex-sb flex-w" role="form" method="POST" action="<?=base_url('Auth/register')?>">
					<span class="login100-form-title p-b-53">
						Registration
					</span>

                    <div class="p-t-31 p-b-9">
						<span class="txt1">
							Nama
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="nama" value="<?=set_value('nama');?>">
						<?=form_error('nama','<small class="text-danger pl-3">','</small>');?>
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="email" name="email" value="<?=set_value('email');?>">
						<?=form_error('email','<small class="text-danger pl-3">','</small>');?>
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="password" name="password1" value="<?=set_value('password1');?>">
						<?=form_error('password','<small class="text-danger pl-3">','</small>');?>
						<span class="focus-input100"></span>
					</div>

                    <div class="p-t-13 p-b-9">
						<span class="txt1">
							Ulangi Password
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="password" name="password2" value="<?=set_value('password');?>">
						<?=form_error('password','<small class="text-danger pl-3">','</small>');?>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit">
							Daftar
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Sudah Punya Akun?
						</span>

						<a href="<?=base_url('Auth')?>" class="txt2 bo1">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="<?=base_url("assets2/")?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url("assets2/")?>vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url("assets2/")?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url("assets2/")?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url("assets2/")?>vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url("assets2/")?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url("assets2/")?>vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url("assets2/")?>vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?=base_url("assets2/")?>js/main.js"></script>

</body>

</html>
