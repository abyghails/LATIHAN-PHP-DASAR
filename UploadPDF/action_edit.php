<?php
require 'function.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$ktpLama = $_POST['ktp'];
$kkLama = $_POST['kk'];

$data = query("SELECT * FROM upload_file WHERE id = '$id'")[0];
$ktpOld = $data['ktp'];
$kkOld = $data['kk'];

if ($ktpOld !== $ktpLama) {
	unlink('berkas/' . $ktpOld);
} else if ($kkOld !== $kkOld) {
	unlink('berkas/' . $kkOld);
}


// cek pilih gambar baru atau tidak 
if ($_FILES['ktp']['error'] === 4) {
	$ktp = $ktpLama;
} else {

	$rand = rand();
	$rand2 = rand();
	$ekstensi = array('pdf');
	$filename = $_FILES['ktp']['name'];
	// $filename2 = $_FILES['kk']['name'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	// $ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
	$ktp = $rand . '_' . $filename;
}


// cek pilih gambar baru atau tidak 
if ($_FILES['kk']['error'] === 4) {
	$kk = $kkLama;
} else {

	$rand = rand();
	$rand2 = rand();
	$ekstensi = array('pdf');
	// $filename = $_FILES['ktp']['name'];
	$filename2 = $_FILES['kk']['name'];
	// $ext = pathinfo($filename, PATHINFO_EXTENSION);
	$ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
	// $ktp = $rand . '_' . $filename;
	$kk = $rand2 . '_' . $filename2;
}


move_uploaded_file($_FILES['ktp']['tmp_name'], 'berkas/' . $rand . '_' . $filename);
move_uploaded_file($_FILES['kk']['tmp_name'], 'berkas/' . $rand2 . '_' . $filename2);

mysqli_query($koneksi, "UPDATE upload_pdf SET nama = '$nama', ktp = '$ktp', kk = '$kk' WHERE id = '$id'");
header("location:index.php");
