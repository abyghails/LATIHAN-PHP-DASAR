<?php
require 'functions.php';
$query = query("SELECT * FROM warga");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="jquery/jquery-3.6.0.min.js">
	<title>Testing</title>
</head>

<body>

	<div class="container-fluid">
		<h2 class="my-5">Data Warga</h2>
		<span><a href="tambah.php" style="text-decoration: none;">+Data Warga</a></span>
		<div class="table-responsive mt-2">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Nomor KTP</th>
						<th>Nomor KK</th>
						<th>Nomor Alamat</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($query as $data) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td><?= $data['nama']; ?></td>
							<td><?= $data['no_ktp']; ?></td>
							<td><?= $data['no_kk']; ?></td>
							<td><?= $data['alamat']; ?></td>
							<td width="150">
								<a class="btn btn-warning btn-sm" href="ubah.php?id_warga=<?= $data['id_warga']; ?>">Ubah</a>
								<a class="btn btn-danger btn-sm" href="hapus.php?id_warga=<?= $data['id_warga']; ?>" onclick="return confirm('Yakin Nih Diapus');">Hapus</a>
							</td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>