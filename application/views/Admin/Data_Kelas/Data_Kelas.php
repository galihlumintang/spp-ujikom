<!DOCTYPE html>
<html>
<head>
	<title>Data Kelas | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Data_Kelas/Data_Kelas.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
		<a href="<?php echo site_url('Admin/Tambah_Data_Kelas') ?>" class="btn btn-outline-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data Kelas</a>
		<br><br>
		<table class="table table-striped">
			<tr class="thead-light">
				<th>NO</th>
				<th>KELAS</th>
				<th>KOMPETENSI KEAHLIAN</th>
				<th>OPTION</th>
			</tr>
			<?php $no=1; foreach($kelas as $k){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $k['nama_kelas'] ?></td>
				<td><?php echo $k['kompetensi_keahlian'] ?></td>
				<td><a href="<?php echo site_url('Admin/Edit_Data_Kelas/'.$k['id_kelas']) ?>" class="btn btn-outline-success"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit<a href="<?php echo site_url('Admin/Hapus_Data_Kelas/'.$k['id_kelas']) ?>" class="btn btn-outline-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Hapus</a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>