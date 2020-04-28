<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Siswa | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Data_Siswa/Tambah_Data_Siswa.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
		<h5>Input Data Siswa</h5><br>
		<form method="post" action="<?php echo site_url('Admin/Proses_Tambah_Data_Siswa') ?>" class="form-group col-md-6">
			Nomor Induk Siswa Nasional :
			<input type="text" name="nisn" placeholder="NISN..." required="" class="form-control">
			Nomor Induk Siswa :
			<input type="text" name="nis" placeholder="NIS..." required="" class="form-control">
			Nama Lengkap :
			<input type="text" name="nama" placeholder="Nama Lengkap..." required="" class="form-control">
			Kelas :
			<select name="kelas" required="" class="form-control">
				<option value="">- Pilih Kelas</option>
				<?php foreach($kelas as $k){ ?>
					<option value="<?php echo $k['id_kelas'] ?>"><?php echo $k['nama_kelas'].' '.$k['kompetensi_keahlian']; ?></option>
				<?php } ?>
			</select>
			Nomor Telepon :
			<input type="text" name="no_telp" placeholder="No Telp..." required="" class="form-control">
			Alamat :
			<textarea name="alamat" placeholder="Alamat..." required="" class="form-control"></textarea><br>
			<button class="btn btn-sm btn-primary">Tambah</button>
		</form>
	</div>

</body>
</html>