<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Form Upload</title>
</head>

<body>
	<div class="container">
		<h2 class="text-center">Tambah Data</h2>
		<form action="action_upload.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" class="form-control">
			</div>
			<div class="form-group">
				<label for="ktp">KTP</label>
				<input type="file" name="ktp" id="ktp" class="form-control-file">
			</div>
			<div class="form-group">
				<label for="kk">KK</label>
				<input type="file" name="kk" id="kk" class="form-control-file">
			</div>

			<div class="button">
				<button class="btn btn-primary">Upload</button>
			</div>
		</form>
	</div>
</body>

</html>