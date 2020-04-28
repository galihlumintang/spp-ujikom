<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Siswa | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Data_Siswa/Edit_Data_Siswa.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
		<h5>Edit Data Siswa</h5><br>
		<form method="post" action="<?php echo site_url('Admin/Proses_Edit_Data_Siswa') ?>" class="form-group col-md-6">
			Nomor Induk Siswa Nasional :
			<input type="text" name="nisn" placeholder="NISN..." required="" readonly="" value="<?php echo $siswa->nisn ?>" class="form-control">
			Nomor Induk Siswa :
			<input type="text" name="nis" placeholder="NIS..." required="" value="<?php echo $siswa->nis ?>" class="form-control">
			Nama Lengkap :
			<input type="text" name="nama" placeholder="Nama Lengkap..." required="" value="<?php echo $siswa->nama ?>" class="form-control">
			Kelas :
			<input type="hidden" name="kelas" required="" readonly="" placeholder="Kelas..." value="<?php echo $siswa->id_kelas ?>" class="form-control">
			<input type="text" name="kelas-tampil"readonly="" value="<?php echo $siswa->nama_kelas.' '.$siswa->kompetensi_keahlian; ?>" class="form-control">
			Nomor Telepon :
			<input type="text" name="no_telp" placeholder="No Telp..." required="" value="<?php echo $siswa->no_telp ?>" class="form-control">
			Alamat :
			<textarea name="alamat" placeholder="Alamat..." required="" class="form-control"><?php echo $siswa->alamat ?></textarea>
			SPP Tahun Ke :
			<input type="text" name="id_spp" placeholder="id_spp" required="" readonly="" value="<?php echo $siswa->id_spp ?>" class="form-control"><br>
			<br>
			<button class="btn btn-sm btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Simpan</button>
		</form>
	</div>

</body>
</html>