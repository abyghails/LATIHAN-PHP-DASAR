<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("location: login.php");
	exit;
}

require 'function.php';

$mahasiswa = query("SELECT * FROM test_data ORDER BY nama ASC");

if (isset($_POST['cari'])) {
	$mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Uji Coba CRUD</title>
</head>

<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<h1>Daftar Mahasiswa</h1>

				<a href="logout.php">Logout</a>
				<br>
				<br>
			</div>
			<div class="col-12 text-center">
				<!-- untuk admin -->
				<?php $level = $_SESSION['level'] == "ADMIN"; ?>
				<?php if ($level) : ?>
					<a class="text-center" href="tambah.php">Tambah data mahasiswa</a>
				<?php endif; ?>
			</div>
			<div class="col-12 text-center">
				<!-- untuk admin -->
				<?php $level = $_SESSION['level'] == "ADMIN"; ?>
				<?php if ($level) : ?>
					<a class="text-center" href="tambah-mutiple.php">Tambah data mutiple</a>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-12">

				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Jurusan</th>
						</tr>
					</thead>



					<?php $i = 1; ?>
					<?php foreach ($mahasiswa as $row) : ?>
						<tbody>
							<tr>
								<td><?= $i; ?></td>
								<td><?= $row['nama']; ?></td>
								<td><?= $row['jurusan']; ?></td>
							</tr>
						</tbody>
						<?php $i++; ?>
					<?php endforeach; ?>
				</table>

			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>