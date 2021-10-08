<!-- session adalah informasi yang di simpan di server -->
<!-- cookie adalah informasi yang di simpan di browser / client -->

<?php
require 'functions.php';

session_start();

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($koneksi, "SELECT username FROM users WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}
}

if (isset($_SESSION['login'])) {
	header("location: index.php");
	exit;
}


if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['pssword'];

	$result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

	// cek username
	// mysqli_num_rows() itu untuk cek ada berapa baris yang di kembalikan dari query
	if (mysqli_num_rows($result) ===  1) {

		// cek password
		$row = mysqli_fetch_assoc($result);

		if (password_verify($password, $row['password'])) {
			// set session
			$_SESSION['login'] = true;

			// cek remember me
			if (isset($_POST['remember'])) {
				// buat cookie
				setcookie('id', $row['id'], time() + 60);
				setcookie('key', hash('sha256', $row['username']), time() + 60);
			}

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
				<input type="password" name="pssword" id="password" required>
			</li>

			<li>
				<input type="checkbox" name="remember" id="remember">
				<label for="remember">Remember me : </label>
			</li>

			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>


	</form>
</body>

</html>