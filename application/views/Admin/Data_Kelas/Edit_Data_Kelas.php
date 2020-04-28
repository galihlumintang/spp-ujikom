<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Kelas | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Data_Kelas/Edit_Data_Kelas.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
		<h5>Edit Data Kelas</h5><br>
		<form method="post" action="<?php echo site_url('Admin/Proses_Edit_Data_Kelas/'.$kelas->id_kelas) ?>" class="form-group col-md-6">
			Kelas :
			<input type="text" name="kelas" required="" value="<?php echo $kelas->nama_kelas ?>" class="form-control">
			Kompetensi Keahlian :
			<input type="text" name="kompetensi" required="" placeholder="Kompetensi Keahlian..." value="<?php echo $kelas->kompetensi_keahlian ?>" class="form-control"><br>
			<button class="btn btn-sm btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Simpan</button>
		</form>
	</div>
</body>
</html>