<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Upload PDF</title>
</head>

<body>
	<div class="container">
		<h1>Data Mahasiswa</h1>
		<table border="1" cellpadding="10" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>NRP</th>
					<th>Email</th>
					<th>Jurusan</th>
					<th>Gambar</th>
				</tr>
			</thead>
			<?php
			$i = 1;
			$mahasiswa = query("SELECT * FROM mahasiswa");
			?>
			<tbody>
				<?php foreach ($mahasiswa as $mhs) : ?>
					<tr>
						<td><?= $i++; ?></td>
						<td><?= $mhs['nama']; ?></td>
						<td><?= $mhs['nrp']; ?></td>
						<td><?= $mhs['email']; ?></td>
						<td><?= $mhs['jurusan']; ?></td>
						<td><?= $mhs['gambar']; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<br>
		<h2>Upload PDF</h2>
		<a href="formupload.php">Tambah Upload!</a>

		<?php
		$j = 1;
		$upload = query("SELECT * FROM upload_pdf");
		?>
		<table border="1" cellpadding="10" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>KTP</th>
					<th>KK</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
				foreach ($upload as $data) :
				?>
					<tr>
						<td><?= $j++; ?></td>
						<td><?= $data['nama']; ?></td>
						<?php if ($data['ktp'] != NULL && $data['kk'] == NULL) { ?>
							<td><a href="berkas/<?= $data['ktp']; ?>">Download</a></td>
							<td><button class="btn btn-warning">Belum Upload</button></td>
						<?php } else if ($data['kk'] != NULL && $data['ktp'] == NULL) { ?>
							<td><button class="btn btn-warning">Belum Upload</button></td>
							<td><a href="berkas/<?= $data['kk']; ?>">Download</a></td>
						<?php } else if ($data['ktp'] == NULL && $data['kk'] == NULL) { ?>
							<td><button class="btn btn-warning">Belum Upload</button></td>
							<td><button class="btn btn-warning">Belum Upload</button></td>
						<?php } else if ($data['ktp'] != NULL && $data['kk'] != NULL) { ?>
							<td><a href="berkas/<?= $data['ktp']; ?>">Download</a></td>
							<td><a href="berkas/<?= $data['kk']; ?>">Download</a></td>
							<!-- <td><a href="#">Download</a></td> -->
						<?php } ?>

						<td><a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-sm btn-secondary">Edit</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>

</html>