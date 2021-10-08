<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		ul {
			float: left;
		}
	</style>
</head>

<body>

	<!-- data array -->
	<?php
	$movies = [
		[
			"nama" => "1917",
			"tahun" => "2012",
			"genre" => "action",
			"rating" => "8.7",
			"produser" => "abyghails",
			"image" => "1917.jpg"
		],
		[
			"nama" => "AFTER",
			"tahun" => "2019",
			"genre" => "horror",
			"rating" => "8.8",
			"produser" => "adi surya",
			"image" => "after.jpg"
		],
		[
			"nama" => "ASSASIN",
			"tahun" => "2020",
			"genre" => "action",
			"rating" => "7.7",
			"produser" => "Fahmi",
			"image" => "assasin.jpg"
		],
		[
			"nama" => "BUSINESS",
			"tahun" => "2019",
			"genre" => "action",
			"rating" => "8.0",
			"produser" => "Yoga",
			"image" => "business.jpg"
		],
		[
			"nama" => "COVER",
			"tahun" => "2021",
			"genre" => "action",
			"rating" => "6.9",
			"produser" => "Hilal",
			"image" => "cover.jpg"
		],
		[
			"nama" => "DIE",
			"tahun" => "2016",
			"genre" => "horror",
			"rating" => "6.6",
			"produser" => "Mujahid",
			"image" => "die.jpg"
		],
		[
			"nama" => "FREEDOM",
			"tahun" => "2019",
			"genre" => "action",
			"rating" => "8.9",
			"produser" => "abyghails",
			"image" => "freedom.jpg"
		],
		[
			"nama" => "IO",
			"tahun" => "2019",
			"genre" => "drama",
			"rating" => "8.6",
			"produser" => "Rizky Ubay",
			"image" => "io.jpeg"
		],
		[
			"nama" => "MAZE RUNNER",
			"tahun" => "2019",
			"genre" => "action",
			"rating" => "8.7",
			"produser" => "abyghails",
			"image" => "maze.jpg"
		],
		[
			"nama" => "THOR",
			"tahun" => "2012",
			"genre" => "action",
			"rating" => "8.2",
			"produser" => "abyghails",
			"image" => "thor.jpg"
		]
	];
	?>
	<!-- end data array -->

	<!-- melakukan perulangan array -->
	<?php foreach ($movies as $movie) : ?>
		<ul>
			<li><img src="img/<?= $movie["image"]; ?>"></li>
			<li>Nama : <?= $movie["nama"]; ?></li>
			<li>Tahun : <?= $movie["tahun"]; ?></li>
			<li>Genre : <?= $movie["genre"]; ?></li>
			<li>Rating : <?= $movie["rating"]; ?></li>
			<li>Produser : <?= $movie["produser"]; ?></li>
		</ul>
	<?php endforeach; ?>
	<!-- end array -->
</body>

</html>