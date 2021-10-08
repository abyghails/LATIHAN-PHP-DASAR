<!-- pengingat -->
<!-- <?php
			//array 
			// cara membuat array 
			$bulan = array("Januari", "Maret", "April"); // cara lama
			$hari = ["Senin", "Selasa", "Rabu"]; // cara baru
			$arr = ["Abyghails", 100, true]; // bisa menggunakan banyak tipe data 

			//menampilkan array 
			// versi debugging (untuk developer) biasanya.
			var_dump($bulan);
			echo "<br>";
			print_r($hari);
			//untuk menampilkan nilai atau element array
			echo $arr[1];
			?> -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Associative</title>
	<style>
		.kotak {
			width: 30px;
			height: 30px;
			background-color: #BADA55;
			text-align: center;
			line-height: 30px;
			margin: 3px;
			float: left;
			transition: 1s;
		}

		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}

		.clear {
			clear: both;
		}
	</style>
</head>

<body>
	<?php
	$angka = [
		["1", "2", "3"],
		["4", "5", "6"],
		["7", "8", "9"]
	];
	// echo $angka[2][2]; // mencetak array dalam array
	?>

	<?php foreach ($angka as $a) : ?>
		<?php foreach ($a as $b) : ?>

			<div class="kotak"><?= $b; ?></div>

		<?php endforeach; ?>
		<div class="clear"></div>
	<?php endforeach; ?>

</body>

</html>