<!-- ada variable superglobal yang sudah tertanam di php. Yaitu : 
1. $_GET
2. $_POST
3. $_REQUEST
4. $_SESSION
5. $_COOKIE
6. $_SERVER
7. $_ENV
8. $_FILES
-->

<?php
// // $_GET
// $_GET["nama"] = "Abyghail Shiddiq";
// $_GET['Nim'] = "2016141739";

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
<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Movies</h1>

	<ul>

		<?php foreach ($movies as $movie) : ?>
			<li>
				<a href="latihan2.php?nama=<?= $movie["nama"]; ?>&tahun=<?= $movie["tahun"]; ?>&genre=<?= $movie["genre"]; ?>&rating=<?= $movie["rating"]; ?>&produser=<?= $movie["produser"]; ?>&image=<?= $movie["image"]; ?>"><?= $movie["nama"]; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</body>

</html>