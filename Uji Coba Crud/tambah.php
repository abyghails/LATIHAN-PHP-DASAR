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
	<title>Tambah Data</title>
</head>

<body>
	<h1>Tambah data mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label for="nama">Nama : </label></td>
				<td><input type="text" name="nama" id="nama" required></td>
			</tr>

			<tr>
				<td><label for="nrp">NRP : </label></td>
				<td><input type="text" name="nrp" id="nrp" required></td>
			</tr>

			<tr>
				<td><label for="email">Email : </label></td>
				<td><input type="email" name="email" id="email" required></td>
			</tr>

			<tr>
				<td><label for="jurusan">Jurusan : </label></td>
				<td><input type="text" name="jurusan" required></td>
			</tr>

			<tr>
				<td><label for="gambar">Gambar : </label></td>
				<td><input type="file" name="gambar"></td>
			</tr>

			<tr>
				<td><button type="submit" name="submit">Tambah !</button></td>

			</tr>
		</table>
	</form>

</body>

</html>