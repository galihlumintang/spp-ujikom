<!DOCTYPE html>
<html>
<head>
	<title>Edit Data SPP | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Data_Spp/Edit_Data_Spp.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
		<h5>Edit Data SPP</h5><br>
		<form method="post" action="<?php echo site_url('Admin/Proses_Edit_Data_Spp/'.$spp->id_spp) ?>" class="form-group col-md-6">
			Tahun Ke :
			<input type="text" name="tahun" required="" placeholder="Tahun..." value="<?php echo $spp->tahun ?>" class="form-control">
			Nominal 1 Tahun :
			<input type="text" name="nominal" required="" placeholder="Nominal..." value="<?php echo $spp->nominal ?>" class="form-control"><br>
			<button class="btn btn-sm btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Simpan</button>
		</form>
	</div>
</body>
</html>