<!DOCTYPE html>
<html>
<head>
	<title>Home | SPP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('./assets/css/Siswa/Home.css') ?>">
</head>
<body>
	<br><br><br>

	<center>
		<div class="container">
			<table class="table table-striped">
				<tr class="thead-light">
					<th>NO</th>
					<th>Tanggal Bayar</th>
					<th>Tahun Dibayar</th>
					<th>Jumlah Bulan Dibayar</th>
					<th>Nominal</th>
				</tr>
				<?php $no=1; foreach($data as $d){ ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $d['tgl_bayar'] ?></td>
					<td><?php echo 'Tahun Ke '.$d['tahun_dibayar'] ?></td>
					<td><?php echo $d['bulan_dibayar'].' Bulan' ?></td>
					<td><?php echo 'RP.'.$d['jumlah_bayar'].';' ?></td>
				</tr>
				<?php } ?>
				<tr>
					<th colspan="3" style="text-align: right;">Total: </th>
					<th><?php echo $jumlah_bulan->bulan_dibayar.' Bulan' ?></th>
					<th><?php echo 'Rp.'.$jumlah_bayar->jumlah_bayar.';'; ?></th>
				</tr>
			</table>
		</div>	
	</center>

	<br><br><br>
</body>
</html>