<?php
// check apakah tidak ada data get yang di kirim $
if (!isset($_GET['nama']) || !isset($_GET['tahun']) || !isset($_GET['genre']) || !isset($_GET['rating']) || !isset($_GET['produser']) || !isset($_GET['image'])) {
	//redirect
	header("location: latihan1.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail Movie</title>
</head>

<body>
	<ul>
		<li><img src="img/<?= $_GET['image']; ?>"></li>
		<li><?= $_GET['nama']; ?></li>
		<li><?= $_GET['tahun']; ?></li>
		<li><?= $_GET['genre']; ?></li>
		<li><?= $_GET['rating']; ?></li>
		<li><?= $_GET['produser']; ?></li>
	</ul>

	<a href="latihan1.php">Kembali Ke Daftar film</a>
</body>

</html>