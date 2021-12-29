<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("location: login.php");
	exit;
}

require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY nama ASC");

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
				<form action="" method="post">

					<div class="form-group">
						<input type="text" name="keyword" class="form-control" size="30" autofocus placeholder="masukkan keyword.." autocomplete="off">
						<button class="btn btn-primary mt-1" type="submit" name="cari">Cari</button>
					</div>
				</form>

				<br>
				<br>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>NRP</th>
							<th>Email</th>
							<th>Jurusan</th>
							<th>Gambar</th>

							<!-- untuk admin -->
							<?php $level = $_SESSION['level'] == "admin"; ?>
							<?php if ($level) : ?>
								<th>Aksi</th>
							<?php endif; ?>
						</tr>
					</thead>



					<?php $i = 1; ?>
					<?php foreach ($mahasiswa as $row) : ?>
						<tbody>
							<tr>
								<td><?= $i; ?></td>
								<td><?= $row['nama']; ?></td>
								<td><?= $row['nrp']; ?></td>
								<td><?= $row['email']; ?></td>
								<td><?= $row['jurusan']; ?></td>
								<td><img src="img/<?= $row['gambar']; ?>" width="50" alt="Picture"></td>

								<!-- untuk admin -->
								<?php
								$level = $_SESSION['level'] == "admin";
								?>
								<?php if ($level) : ?>
									<td>
										<a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> |
										<a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
									</td>
								<?php endif; ?>
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