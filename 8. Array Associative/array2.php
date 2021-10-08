<!-- <?php
			$mahasiswa = [
				["Abyghails", "2016141739", "Abyghail10@gmail.com", "Teknik Informatika"],
				["Dedi Rosandi", "2016112771", "Dedirosandi@gmail.com", "Teknik Informatika"]
			];

			?> -->


<!-- array assosiative -->
<!-- key-nya adalah string yang kita buat sendiri  -->
<?php
$mahasiswa = [
	[
		"nama" => "Abyghail",
		"nim" => "2016141739",
		"email" => "abyghail0@gmail.com",
		"jurusan" => "Teknik Informatika"
	],
	[
		"nama" => "Dedi Rosandi",
		"nim" => "201614249",
		"email" => "dedirosandi@gmail.com",
		"jurusan" => "Teknik Informatika"
	]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Mahasiswa</title>
</head>

<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach ($mahasiswa as $a) : ?>
		<ul>
			<li>Nama : <?= $a["nama"]; ?></li>
			<li>Nim : <?= $a["nim"]; ?></li>
			<li>Email : <?= $a["email"]; ?></li>
			<li>Jurusan : <?= $a["jurusan"]; ?></li>
		</ul>
	<?php endforeach; ?>
</body>

</html>