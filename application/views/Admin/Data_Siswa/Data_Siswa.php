<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Data_Siswa/Data_Siswa.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
		<a href="<?php echo site_url('Admin/Tambah_Data_Siswa') ?>" class="btn btn-outline-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data Siswa</a><br><br>
		<table class="table table-striped">
			<thead class="thead-light">
				<tr>
					<th>NO</th>
					<th>NISN</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>KELAS</th>
					<th>ALAMAT</th>
					<th>NO TELP</th>
					<th>SPP TAHUN</th>
					<th>OPTION</th>
				</tr>
			</thead>
			<?php $no=1; foreach($siswa as $s){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $s['nisn']; ?></td>
				<td><?php echo $s['nis']; ?></td>
				<td><?php echo $s['nama']; ?></td>
				<td><?php echo $s['nama_kelas'].' '.$s['kompetensi_keahlian']; ?></td>
				<td><?php echo $s['alamat']; ?></td>
				<td><?php echo $s['no_telp']; ?></td>
				<td><?php echo 'Tahun Ke '.$s['tahun']; ?></td>
				<td><a href="<?php echo site_url('Admin/Edit_Data_Siswa/'.$s['nisn']) ?>" class="btn btn-outline-success"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit</a><a href="<?php echo site_url('Admin/Hapus_data_Siswa/'.$s['nisn']) ?>" class="btn btn-outline-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Hapus</a></td>
			</tr>
			<?php } ?>
		</table>
	</div>

</body>
</html>