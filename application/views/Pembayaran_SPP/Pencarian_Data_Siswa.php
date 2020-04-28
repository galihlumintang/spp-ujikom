<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran SPP | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Pembayaran_SPP/Pencarian_Data_SPP.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
		<h5>Cari Data Siswa</h5><br>
		<form method="post" action="<?php echo site_url('Pembayaran/Proses_Pencarian_Data_Siswa') ?>" class="form-group col-md-6">
			Masukan NIS Siswa :
			<input type="text" name="nis" required="" placeholder="NIS Siswa..." class="form-control"><br>
			<button class="btn btn-sm btn-info">Cari</button>
		</form>
	</div>
</body>
</html>