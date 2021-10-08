<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Mahasiswa</title>
</head>

<body>
	<!-- ini contoh jika satu mahasiswa -->
	<!-- <?php
				$mahasiswa = ["Abyghails", "2016141739", "Teknik Informatika", "Abyghail10@gmail.com"];
				?> -->

	<!-- jika mahasiswa nya banyak kita bisa menggunakan array multidimensi yaitu array di dalam array  -->
	<?php
	$mahasiswa = [
		["Abyghails", "2016141739", "Teknik Informatika", "Abyghail10@gmail.com"],
		["Adi Surya", "2016424539", "Teknik Informatika", "Adiii0@gmail.com"],
		["Dedi Rosandi", "2013241739", "Teknik Informatika", "dediii0@gmail.com"],
	];
	?>

	<h1>Daftar Mahasiswa</h1>

	<!-- bisa di tulis seperti ini -->
	<!-- <ul>
		<?php foreach ($mahasiswa as $mhs) : ?>
			<li><?php echo $mhs; ?></li>
		<?php endforeach ?>
	</ul> -->

	<!-- atau seperti ini  -->
	<!-- 	
	<ul>
		<li><?php echo $mahasiswa[0]; ?> </li>
		<li><?php echo $mahasiswa[1]; ?> </li>
		<li><?php echo $mahasiswa[2]; ?> </li>
		<li><?php echo $mahasiswa[3]; ?> </li>
	</ul> -->

	<?php foreach ($mahasiswa as $mhs) : ?>
		<ul>
			<li>Nama :<?php echo $mhs[0]; ?> </li>
			<li>Nim :<?php echo $mhs[1]; ?> </li>
			<li>Jurusan :<?php echo $mhs[2]; ?> </li>
			<li>Email :<?php echo $mhs[3]; ?> </li>
		</ul>
	<?php endforeach; ?>
</body>

</html>