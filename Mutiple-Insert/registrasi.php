<?php
session_start();
// if (!isset($_SESSION['login'])) {
// 	header("location: login.php");
// 	exit;
// }

require 'function.php';

if (isset($_POST['register'])) {
	if (registrasi($_POST) > 0) {
		echo "<script> 
						alert('Berhasil Menambahkan User');
					</script>";
	} else {
		echo mysqli_error($koneksi);
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		label {
			display: block;
		}
	</style>
	<title>Registrasi User</title>
</head>

<body>

	<h1>Halaman Registrasi</h1>
	<form action="" method="post">
		<ul>
			<li><label for="username">Username : </label></li>
			<li><input type="text" name="username" id="username" placeholder="Masukkan username.." required></li>
			<li><label for="password">Password : </label></li>
			<li><input type="password" name="password" id="password" placeholder="Masukkan password.." required></li>
			<li><label for="password2">Confirm Password : </label></li>
			<li><input type="password" name="password2" id="password" placeholder="Ulangi password.." required></li>

			<li><button type="submit" name="register">Daftar</button></li>
		</ul>
	</form>

</body>

</html>