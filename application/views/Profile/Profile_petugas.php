<!DOCTYPE html>
<html>
<head>
	<title>Profile | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Profile/Profile_petugas.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">

		<div class="card">
			<h5 class="card-header">Profile</h5>
				
			<div class="container" style="text-align: left;"><br>
				<div class="row">
					<div class="col">
						<p>Nama Petugas</p>
					</div>
					<div class="col" style="max-width: 5px;">
						:
					</div>
					<div class="col">
						<p class="card-text"><?php echo $profile->nama_petugas; ?></p>
					</div>
				</div>
					
				<div class="row">
					<div class="col">
						<p>Username</p>
					</div>
					<div class="col" style="max-width: 5px;">
						:
					</div>
					<div class="col">
						<p class="card-text"><?php echo $profile->username; ?></p>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<p>Level</p>
					</div>
					<div class="col" style="max-width: 5px;">
						:
					</div>
					<div class="col">
						<p class="card-text"><?php echo $profile->level; ?></p>
					</div>
				</div>

				<br>

			</div>
		</div>
		<br><br>
		<a href="<?php echo site_url('Petugas/Logout') ?>" class="btn btn-sm btn-danger"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a>
	</div>
</body>
</html>