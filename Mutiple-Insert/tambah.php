<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("location: login.php");
	exit;
} else if ($_SESSION['level'] == "user") {
	header("location: index.php");
	exit;
}

require 'function.php';

if (isset($_POST["submit"])) {

	if (tambah($_POST) > 0) {
		echo "<script>
						alert('Data berhasil di tambahkan!!');
						document.location.href = 'index.php';
				</script>
		";
	} else {
		echo "<script>
		alert('Data Gagal di tambahkan!!');
		document.location.href = 'index.php';
					</script>
";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Tambah Data</title>
</head>

<body>
	<h1 class="ms-3">Tambah data mahasiswa</h1>

	<div class="ms-3">
		<form action="" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td><label for="nama">Nama : </label></td>
					<td><input type="text" name="nama" id="nama" class="form-control" required></td>
				</tr>

				<tr>
					<td><label for="nrp">NRP : </label></td>
					<td><input type="text" name="nrp" id="nrp" class="form-control" required></td>
				</tr>

				<tr>
					<td><label for="email">Email : </label></td>
					<td><input type="email" name="email" id="email" class="form-control" required></td>
				</tr>

				<tr>
					<td><label for="jurusan">Jurusan : </label></td>
					<td><input type="text" name="jurusan" class="form-control" required></td>
				</tr>

				<tr>
					<td><label for="gambar">Gambar : </label></td>
					<td><input type="file" name="gambar" class="form-input"></td>
				</tr>

				<tr>
					<td><button type="submit" name="submit" class="btn btn-primary mt-2">Tambah !</button></td>

				</tr>
			</table>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>