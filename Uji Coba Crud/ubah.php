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

// ambil id dari index data
$id = $_GET['id'];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

if (isset($_POST['submit'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
						alert('Data Berhasil di Ubah');
						document.location.href = 'index.php';
					</script>";
	} else {
		echo "<script>
		alert('Data Gagal di Ubah');
					document.location.href = 'index.php';
					</script>";
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah data</title>
</head>

<body>
	<h1>Ubah Data Mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<td><input type="hidden" name="id" value="<?= $mhs['id']; ?>"></td>
			<td><input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>"></td>

			<tr>
				<td><label for="name">Nama : </label></td>
				<td><input type="text" name="nama" id="nama" value="<?= $mhs['nama']; ?>" required></td>
			</tr>

			<tr>
				<td><label for="nrp">NRP : </label></td>
				<td><input type="text" name="nrp" id="nrp" value="<?= $mhs['nrp']; ?>" required></td>
			</tr>

			<tr>
				<td><label for="email">Email : </label></td>
				<td><input type="text" name="email" id="email" value="<?= $mhs['email']; ?>" required></td>
			</tr>

			<tr>
				<td><label for="jurusan">Jurusan : </label></td>
				<td><input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan']; ?>" required></td>
			</tr>

			<tr>
				<td><label for="gambar">Gambar : </label></td>
				<td><img src="img/<?= $mhs['gambar']; ?>" alt="foto mahasiswa" width="90"></td>
				<td><input type="file" name="gambar" id="gambar" required></td>
			</tr>
			<tr>
				<td><button type=" submit" name="submit"> Ubah Data!</button></td>
			</tr>
		</table>
	</form>
</body>

</html>