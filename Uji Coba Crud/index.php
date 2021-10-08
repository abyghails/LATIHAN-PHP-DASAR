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
	<title>Uji Coba CRUD</title>
</head>

<body>

	<h1>Daftar Mahasiswa</h1>

	<a href="logout.php">Logout</a>
	<br>
	<br>

	<!-- untuk admin -->
	<?php $level = $_SESSION['level'] == "admin"; ?>
	<?php if ($level) : ?>
		<a href="tambah.php">Tambah data mahasiswa</a>
	<?php endif; ?>
	<br>
	<br>
	<form action="" method="post">
		<input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword.." autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>

	<br>
	<br>
	<table border="1" cellpadding="10" cellspacing="0">
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



		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $row) : ?>
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
			<?php $i++; ?>
		<?php endforeach; ?>
	</table>

</body>

</html>