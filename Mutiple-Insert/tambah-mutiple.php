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
	<h1 class="ms-5">Tambah data mahasiswa</h1>

	<div class="row">
		<div class="col-6">
			<div class="ms-5">
				<form action="proses-mutiple.php" method="POST">
					<div class="add-after-more">
						<div class="grouping-add">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" name="nama[]" id="nama" class="form-control">
							</div>
							<div class="form-group">
								<label for="jurusan">Jurusan</label>
								<input type="text" name="jurusan[]" id="jurusan" class="form-control">
							</div>
							<button type="button" class="btn btn-info button-add-more mt-1">Add more</button>
						</div>
					</div>
					<div class="d-flex justify-content-end">
						<button class="btn btn-primary" type="submit" name="submit">Tambah data</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="data-copy d-none">
		<div class="grouping-add">
			<div class="form-group mt-3">
				<label for="nama">Nama</label>
				<input type="text" name="nama[]" id="nama" class="form-control">
			</div>
			<div class="form-group">
				<label for="jurusan">Jurusan</label>
				<input type="text" name="jurusan[]" id="jurusan" class="form-control">
			</div>
			<button type="button" class="btn btn-danger mt-1 mb-3" id="tombol-hapus">Delete</button>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function() {
			$(".button-add-more").click(function() {
				let copy = $(".data-copy").html();
				$(".add-after-more").after(copy);
			});

			$("body").on("click", "#tombol-hapus", function() {
				$(this).parents(".grouping-add").remove();
			});
		});
	</script>
</body>

</html>