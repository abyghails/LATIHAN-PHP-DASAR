<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari table mahasiswa / query
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
// cek pesan error
if (!$result) {
	echo mysqli_error($koneksi);
}
//end

//ambil data (fetch) dari object $result / mahasiswa
//mysqli_fetch_row(); //mengembalikan nilai array numeric $mhs = [0];
// mysqli_fetch_assoc(); // mengembalikan nilai array assosiative / string "nama" => "aby";
// mysqli_fetch_array(); // mengembalikan nilai array assosiative dan numeric. Lebih flexibel
// mysqli_fetch_object(); //

// while ($mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>
</head>

<body>
	<h1>Daftar Mahasiswa</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nrp</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

		<?php $i = 1; ?>
		<?php while ($row = mysqli_fetch_assoc($result)) :  ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="#">Ubah</a> |
					<a href="#">Hapus</a>
				</td>
				<td><img src="img/<?= $row["gambar"] ?>" width="50" alt="Foto Mahasiswa"></td>
				<td><?= $row["nrp"]; ?></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= $row["jurusan"]; ?></td>
			</tr>

			<?php $i++; ?>
		<?php endwhile; ?>
	</table>
</body>

</html>