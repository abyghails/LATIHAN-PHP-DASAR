<?php
require 'functions.php';
$id_warga = $_GET['id_warga'];

$query = query("SELECT * FROM warga WHERE id_warga = '$id_warga'")[0];

if (isset($_POST['submit'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
					alert('Berhasil Diubah');
					document.location.href= 'index.php';
					</script>";
	} else {
		echo "<script>
					alert('Berhasil Diubah');
					document.location.href= 'index.php';
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
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="jquery/jquery-3.6.0.min.js">
	<title>Document</title>
</head>

<body>
	<div class="container my-5">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<form action="" method="post">
					<input type="hidden" name="id_warga" value="<?= $query['id_warga']; ?>">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" id="nama" class="form-control" value="<?= $query['nama']; ?>">
					</div>

					<div class="form-group">
						<label for="no_ktp">Nomor KTP</label>
						<input type="text" name="no_ktp" id="no_ktp" class="form-control" value="<?= $query['no_ktp']; ?>">
					</div>

					<div class="form-group">
						<label for="no_kk">Nomor KK</label>
						<input type="text" name="no_kk" id="no_kk" class="form-control" value="<?= $query['no_kk']; ?>">
					</div>

					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" name="alamat" id="alamat" class="form-control" value="<?= $query['alamat']; ?>">
					</div>

					<button class="btn btn-primary" name="submit">UBAH</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>