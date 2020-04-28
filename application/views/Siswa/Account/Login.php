<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Siswa/Account/Login.css') ?>">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/bootstrap/js/bootstrap.min.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/bootstrap/js/jquery-3.2.1.js') ?>">
</head>
<body style="background-color: #6d7fcc;">
	<center>
	<div class="card" id="card-login">
		<form method="post" action="<?php echo site_url('Siswa/Proses_Login') ?>" class="form-group">
			<div>
				<h4 style="padding: 40px 0 30px 0;"><i class="fa fa-user"></i>&nbsp;&nbsp;LOGIN SISWA</h4>
			</div>
			<div class="container">
				<div class="card-text">
					<div class="input-group flex-nowrap">
						<div class="input-group-prepend">
							<span class="input-group-text" id="addon-wrapping"><i class="fa fa-id-card"></i></span>
						</div>
						<input type="text" name="nis" class="form-control" placeholder="Masukan NIS..." aria-label="username" aria-describedy="addon-wrapping">
					</div><br>
					<div class="input-group flex-nowrap">
						<div class="input-group-prepend">
							<span class="input-group-text" id="addon-wrapping"><i class="fa fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Masukan Password.." aria-label="username" aria-describedy="addon-wrapping">
					</div><br>
					<button class="btn btn-primary">Login</button>
				</div>
			</div>
		</form>
	</div>
	</center>
</body>
</html>