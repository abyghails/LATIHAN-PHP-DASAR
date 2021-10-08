<!-- <?php
			//membuat array dengan nama buah-buahan
			$buah = array('semangka', 'jeruk', 'apel', 'anggur');

			//count() untuk mengihtung isi array
			for ($x = 0; $x < count($buah); $x++) {
				echo $buah[$x] . "</br>";
			}
			?> -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coba For dan ForEach</title>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}

		.clear {
			clear: both;
		}
	</style>
</head>

<!-- tanda perhatikan tanda {} pada for dan foreach. Di pisahkan dari syntax php agar bisa menuliskan html lebih mudah  -->

<body>
	<?php
	// for each
	$angka = [3, 2, 15, 20, 11, 77];
	?>
	<!-- ini cara pertama menggunakan for -->
	<!-- <?php for ($i = 0; $i < count($angka); $i++) { ?>
		<div class="kotak><?php echo $angka[$i]; ?></div>
	<?php } ?> -->

	<div class="clear"></div>
	<!-- sekarang menggunakan for each. Lebih simpel -->
	<?php foreach ($angka as $a) { ?>
		<div class="kotak"><?php echo $a; ?></div>
	<?php } ?>

	<div class="clear"></div>

	<?php foreach ($angka as $a) : ?>
		<div class="kotak"><?php echo $a; ?></div> <!-- echo bisa di ganti menjadi seperti ini   -->
	<?php endforeach; ?>
</body>

</html>