<?php
require 'functions.php';

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

	// cek username
	// mysqli_num_rows() itu untuk cek ada berapa baris yang di kembalikan dari query
	if (mysqli_num_rows($result) ===  1) {

		// cek password
		$row = mysqli_fetch_assoc($result);

		if (password_verify($password, $row['password'])) {
			header("location:index.php");
			exit;
		}
	}
	$error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
</head>

<body>
	<h1>Halaman Login</h1>

	<?php if (isset($error)) : ?>
		<p style="color:red; font-style:italic;">Username atau Password SALAH!</p>
	<?php endif; ?>

	<form action="" method="post">

		<ul>
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username" required>
			</li>

			<li>
				<label for="password">Password : </label>
				<input type="password" name="password" id="password" required>
			</li>

			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>


	</form>
</body>

</html>