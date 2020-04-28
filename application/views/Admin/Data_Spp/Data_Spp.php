<!DOCTYPE html>
<html>
<head>
	<title>Data SPP | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Data_Spp/Data_Spp.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
		<a href="<?php echo site_url('Admin/Tambah_Data_Spp') ?>" class="btn btn-outline-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;
Tambah Data SPP</a>
		<br><br>
		<table class="table table-striped">
			<tr class="thead-light">
				<th>NO</th>
				<th>TAHUN KE</th>
				<th>NOMINAL 1 TAHUN</th>
				<th>OPTION</th>
			</tr>
			<?php $no=1; foreach($spp as $s){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $s['tahun'] ?></td>
				<td><?php echo $s['nominal'] ?></td>
				<td><a href="<?php echo site_url('Admin/Edit_Data_Spp/'.$s['id_spp']) ?>" class="btn btn-outline-success"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit</a>&nbsp;&nbsp;<a href="<?php echo site_url('Admin/Hapus_Data_Spp/'.$s['id_spp']) ?>" class="btn btn-outline-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Hapus</a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>