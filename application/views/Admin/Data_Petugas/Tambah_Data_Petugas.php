<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Petugas | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Data_Petugas/Tambah_Data_Petugas.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
		<h5>Input Data Petugas</h5><br>
		<form method="post" action="<?php echo site_url('Admin/Proses_Tambah_Data_Petugas') ?>" class="form-group col-md-6">
			Nama Petugas :
			<input type="text" name="nama" required="" placeholder="Nama Petugas..." class="form-control">
			Level :
			<select name="level" required="" class="form-control">
				<option value="">- Pilih Level </option>
				<option value="admin">Admin</option>
				<option value="petugas">Petugas</option>
			</select>
			Username :
			<input type="text" name="username" required="" placeholder="Username..." class="form-control">
			Password :
			<input type="password" name="password" required="" placeholder="Password..." class="form-control"><br>
			<button class="btn btn-sm btn-success">Tambah</button>
		</form>
	</div>
</body>
</html>