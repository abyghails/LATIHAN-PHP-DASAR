<?php
require 'functions.php';
if (isset($_POST['submit'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
					alert('Berhasil Ditambah');
					document.location.href= 'index.php';
					</script>";
	} else {
		echo "<script>
					alert('Gagal Ditambah');
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
	<title>testing</title>
</head>

<body>

	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form action="" method="post">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" id="nama" class="form-control">
					</div>

					<div class="form-group">
						<label for="no_ktp">Nomor KTP</label>
						<input type="text" name="no_ktp" id="no_ktp" class="form-control">
					</div>

					<div class="form-group">
						<label for="no_kk">Nomor KK</label>
						<input type="text" name="no_kk" id="no_kk" class="form-control">
					</div>

					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" name="alamat" id="alamat" class="form-control">
					</div>

					<button name="submit" class="btn btn-primary btn-sm">Tambah</button>
				</form>
			</div>
		</div>
	</div>

</body>

</html>