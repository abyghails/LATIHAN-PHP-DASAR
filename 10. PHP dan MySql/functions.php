
<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");


//ambil data (fetch) dari object $result / mahasiswa
//mysqli_fetch_row(); //mengembalikan nilai array numeric $mhs = [0];
// mysqli_fetch_assoc(); // mengembalikan nilai array assosiative / string "nama" => "aby";
// mysqli_fetch_array(); // mengembalikan nilai array assosiative dan numeric. Lebih flexibel
// mysqli_fetch_object(); //

// while ($mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs);
// }
function query($query)
{
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	// cek datbaase
	if (!$result) {
		echo mysqli_error($koneksi);
	}
	// end

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}
?>