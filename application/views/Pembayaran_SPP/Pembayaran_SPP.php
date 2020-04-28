<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran SPP | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Pembayaran_SPP/Pembayaran_SPP.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
		<div class="hasil-search">
			<div class="row">
				<div class="col">
					<h5>Data Siswa/Siswi</h5><br>
					NISN <input type="text" name="nisn" readonly="" value="<?php echo $data_siswa->nisn ?>" class="form-control">
					NIS <input type="text" name="nis" readonly="" value="<?php echo $data_siswa->nis ?>" class="form-control">
					Nama Lengkap <input type="text" name="nama" readonly="" value="<?php echo $data_siswa->nama ?>" class="form-control">
					Kelas <input type="text" name="kelas" readonly="" value="<?php echo $data_siswa->nama_kelas.' '.$data_siswa->kompetensi_keahlian?>" class="form-control">
					Alamat <input type="text" name="alamat" readonly="" value="<?php echo $data_siswa->alamat ?>" class="form-control">
					Nomor Telepon <input type="text" name="no_telp" readonly="" value="<?php echo $data_siswa->no_telp ?>" class="form-control">
					SPP Bulan Ke <input type="text" name="spp" readonly="" value="<?php echo $data_siswa->id_spp ?>" class="form-control">
					
					
					
					
					
				</div>
				<div class="col">
					<h5>Pembayaran SPP</h5><br>
					<form method="post" action="<?php echo site_url('Pembayaran/Pembayaran_SPP/'.$data_siswa->nisn) ?>" class="form-group col-md-6">
						Jumlah Bulan Dibayar
						<select name="bulan" required="" class="form-control">
							<option value="">- Pilih Berapa Bulan</option>
							<option value="1">1 Bulan</option>
							<option value="2">2 Bulan</option>
							<option value="3">3 Bulan</option>
							<option value="4">4 Bulan</option>
							<option value="5">5 Bulan</option>
							<option value="6">6 Bulan</option>
							<option value="7">7 Bulan</option>
							<option value="8">8 Bulan</option>
							<option value="9">9 Bulan</option>
							<option value="10">10 Bulan</option>
							<option value="11">11 Bulan</option>
							<option value="12">12 Bulan</option>
						</select>
						Dibayar Tahun Ke :
						<input type="text" name="tahun" value="<?php echo $data_siswa->id_spp ?>" required="" readonly="" class="form-control">
						<input type="hidden" name="id_spp" value="<?php echo $data_siswa->id_spp ?>" required="" class="form-control"><br>
						<button class="btn btn-sm btn-success">Simpan Pembayaran</button>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>