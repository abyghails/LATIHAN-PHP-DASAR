<?php
session_start();
require "function.php";

$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];;

$total = count($nama);

for ($i = 0; $i < $total; $i++) {
	$insert = mysqli_query($koneksi, "INSERT INTO test_data (nama, jurusan) VALUES ('$nama[$i]', '$jurusan[$i]')");
}

if ($insert) {
	echo "<script>
						alert('Data berhasil di tambahkan!!');
						document.location.href = 'index-mutiple.php';
				</script>
		";
} else {
	echo "<script>
						alert('Data gagal di tambahkan!!');
						document.location.href = 'index-mutiple.php';
				</script>
		";
}
