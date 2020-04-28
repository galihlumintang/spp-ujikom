<!DOCTYPE html>
<html>
<head>
	<title>Data Petugas | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Data_Petugas/Data_Petugas.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
		<a href="<?php echo site_url('Admin/Tambah_Data_Petugas') ?>"class="btn btn-outline-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;
Tambah Data Petugas</a><br><br>
		<table class="table table-striped">
			<tr class="thead-light">
				<th>NO</th>
				<th>NAMA PETUGAS</th>
				<th>LEVEL</th>
				<th>USERNAME</th>
				<th>OPTION</th>
			</tr>
			<?php $no=1; foreach($petugas as $p){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $p['nama_petugas'] ?></td>
				<td><?php echo $p['level'] ?></td>
				<td><?php echo $p['username'] ?></td>
				<td><a href="<?php echo site_url('Admin/Edit_Data_Petugas/'.$p['id_petugas']) ?>"class="btn btn-outline-success"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit</a>&nbsp;&nbsp;<a href="<?php echo site_url('Admin/Hapus_Data_Petugas/'.$p['id_petugas']) ?>"class="btn btn-outline-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Hapus</a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>