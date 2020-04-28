<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Petugas | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Data_Petugas/Edit_Data_Petugas.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
		<h5>Edit Data Petugas</h5><br>
		<form method="post" action="<?php echo site_url('Admin/Proses_Edit_Data_Petugas/'.$petugas->id_petugas) ?>" class="form-group col-md-6">
			Nama Petugas :
			<input type="text" name="nama" required="" placeholder="Nama Petugas..." value="<?php echo $petugas->nama_petugas ?>" class="form-control">
			Level :
			<input type="text" name="level" required="" placeholder="Level..." value="<?php echo $petugas->level ?>" class="form-control">
			Username :
			<input type="text" name="username" required="" placeholder="Username..." value="<?php echo $petugas->username ?>" class="form-control">
			Password : 
			<input type="password" id="myInput" name="password" required="" placeholder="Password..." value="<?php echo $petugas->password ?>" class="form-control">
			<input type="checkbox" onclick="myFunction()">Show Password
			<br><br>
			<button class="btn btn-sm btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Simpan</button>
		</form>
	</div>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>