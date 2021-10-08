<!-- <?php
			//penamaan isi array
			$buah['semangka'] = "isinya merah";
			$buah['jeruk'] = "rasanya manis";
			$buah['apel'] = "warnanya merah";
			$buah['anggur'] = "harganya mahal";

			echo $buah['apel'];
			?> -->


<!-- menggunakan syntax yang lain -->
<?php
//mengatur isi array variabel buah
$buah = array(
	'semangka' => "isinya merah",
	'jeruk' => "rasanya manis",
	'apel' => "warnanya merah",
	'anggur' => "harganya mahal"
);

// menampilkan isi array yang bernama jeruk
echo $buah['jeruk'];
?>