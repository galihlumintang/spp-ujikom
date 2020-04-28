<!DOCTYPE html>
<html>
<head>
	<title>Data Pembayaran SPP | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Admin/Pembayaran_SPP/Data_Pembayaran_SPP.css') ?>">
</head>
<body>
	<br><br><br><br>

	<div class="content-home">
	<h5>Data Pembayaran SPP</h5><br>
	<form method="post" action="<?php echo site_url('Excel/Excel_Pembayaran') ?>">
			<input type="hidden" name="nis2" value="<?php echo $ket2['nis']; ?>">
			<input type="hidden" name="nama2" value="<?php echo $ket2['nama']; ?>">
			<input type="hidden" name="kelas2" value="<?php echo $ket2['id_kelas']; ?>">
			<input type="hidden" name="tb2" value="<?php echo $ket2['tahun_dibayar']; ?>">
			<input type="hidden" name="tgl2" value="<?php echo $ket2['tgl_bayar']; ?>">
			<button class="btn btn-sm btn-primary"><i class="fa fa-file"></i>&nbsp;&nbsp;Export Excel</button>
		</form>
		<form method="post" action="<?php echo site_url('Pembayaran/Data_Pembayaran_SPP') ?>" class="form-group">
			<div class="row">
				<div class="col">
					<input type="text" name="nis" placeholder="Cari NIS..." class="form-control">
				</div>
				<div class="col">
					<select name="tb" class="form-control">
						<option value="">- Pilih Tahun Dibayar</option>
						<option value="1">Tahun Pertama (1)</option>
						<option value="2">Tahun Kedua (2)</option>
						<option value="3">Tahun Ketiga (3)</option>
					</select> 
				</div>
				<div class="col">
					<input type="date" name="tgl" class="form-control">
				</div>
				<div class="col">
					<button class="btn btn-sm btn-info">Cari</button>
				</div>
			</div>
		</form>
		<br>
		<table class="table table-striped">
			<tr class="thead-light">
				<th>NO</th>
				<th>PETUGAS</th>
				<th>NIS</th>
				<th>SISWA/SISWI</th>
				<th>TGL BAYAR</th>
				<th>BULAN DIBAYAR</th>
				<th>TAHUN DIBAYAR</th>
				<th>JUMLAH BAYAR</th>
			</tr>
			<?php $no=1; foreach($data as $d){?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $d['nama_petugas'] ?></td>
				<td><?php echo $d['nis'] ?></td>
				<td><?php echo $d['nama'] ?></td>
				<td><?php echo $d['tgl_bayar'] ?></td>
				<td><?php echo $d['bulan_dibayar'] ?></td>
				<td><?php echo $d['tahun_dibayar'] ?></td>
				<td><?php echo $d['jumlah_bayar'] ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>