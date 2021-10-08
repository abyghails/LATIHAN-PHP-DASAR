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
	<title>Form Upload</title>
</head>

<?php
$id = $_GET['id'];
$data = query("SELECT * FROM upload_pdf WHERE id = '$id'")[0];
?>

<body>
	<div class="container">
		<h2 class="text-center">Tambah Data</h2>
		<form action="action_edit.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="hidden" name="id" id="id" value="<?= $data['id']; ?>">
				<input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama']; ?>">
			</div>
			<div class="form-group">
				<label for="ktp">KTP</label>
				<input type="file" name="ktp" id="ktp" class="form-control-file" value="<?= $data['ktp']; ?>">
			</div>
			<div class="form-group">
				<label for="kk">KK</label>
				<input type="file" name="kk" id="kk" class="form-control-file" value="<?= $data['kk']; ?>">
			</div>

			<div class="button">
				<button type="submit" name="submit" class="btn btn-primary">Edit!</button>
			</div>
		</form>
	</div>
</body>

</html>