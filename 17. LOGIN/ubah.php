<!-- cek tombol apakah udah di submit -->
<?php
require 'functions.php';

// ambil data di url
$id = $_GET['id'];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];



// cek tombol submit sudah di  tekan atau belum 
if (isset($_POST['submit'])) {

	// cek apakah data berhasil di ubah atau tidak
	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert('data BERHASIL di UBAH!!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data GAGAL di UBAH!!');
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
	<h1>Ubah Data </h1>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<input type="hidden" name="id" value="<?= $mhs['id']; ?>">
			<input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">

			<tr>
				<td><label for="nama">Nama : </label></td>
				<td><input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>"></td>
			</tr>
			<tr>
				<td><label for="nrp">NRP : </label></td>
				<td><input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"] ?>"></td>
			</tr>
			<tr>
				<td><label for="email">Email : </label></td>
				<td><input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>"></td>
			</tr>
			<tr>
				<td><label for="jurusan">Jurusan : </label></td>
				<td><input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>"></td>
			</tr>
			<tr>

				<td><label for="gambar">Gambar : </label></td>
				<td><img src="img/<?= $mhs["gambar"]; ?>" width="90" alt="foto mahasiswa"></td>
				<td><input type="file" name="gambar" id="gambar" required"></td>
			</tr>

			<tr>
				<td><button type="submit" name="submit">Ubah Data!</button></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>

</html>