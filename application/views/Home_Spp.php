<!DOCTYPE html>
<html>
<head>
	<title>Website Pembayaran SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Home_SPP.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/bootstrap/js/bootstrap.min.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/bootstrap/js/jquery-3.2.1.js') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/font_awesome/css/all.css') ?>">
</head>
<body style="background-color: #7386D5;">
	<center>
	<div class="container" id="container-kotak">
		<div class="card bg-white col-md-5" >
			<div>
				<h4 style="padding: 40px 0 30px 0;">&nbsp;&nbsp;MASUK SEBAGAI</h4>
			</div>
			
			<div class="row">
				<div class="col">
					<a href="<?php echo site_url('Petugas') ?>" style="text-decoration: none;">
						<div class="btn btn-info" style="width: 200px;">
							<p class="card-text" style="padding: 10px 50px 10px 50px;"><i class="fa fa-user-circle"></i>&nbsp;Admin</p>
						</div>
					</a>
				</div>

				<div class="col">
					<a href="<?php echo site_url('Siswa/Login_Siswa') ?>" style="text-decoration: none;">
						<div class="btn btn-info" style="width: 200px;">
							<p class="card-text" style="padding: 10px 50px 10px 50px;"><i class="fa fa-user"></i>&nbsp;Siswa</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	</center>
</body>
</html>