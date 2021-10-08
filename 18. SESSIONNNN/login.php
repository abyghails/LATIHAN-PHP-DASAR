<?php
session_start();
if (isset($_SESSION['login'])) {
	header("location: index.php");
	exit;
}

require 'function.php';

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($koneksi, "SELECT * FROM users WHERE username ='$username'");

	// cek username
	if (mysqli_num_rows($result) === 1) {

		// sekarang cek password nya 
		$row = mysqli_fetch_assoc($result);
		$level = $row['level'];

		if (password_verify($password, $row['password'])) {
			$_SESSION['login'] = true;
			$_SESSION['level'] = $level;
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
	<title>Halaman Login</title>
</head>

<body>

	<h1>halaman login</h1>

	<!-- <?php if (isset($error)) : ?>
		<p style="color:red; font-style:italic;">Username dan Password salah nih cuy!</p>
	<?php endif; ?> -->


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