<?php
require 'function.php';
$nama = $_POST['nama'];

$rand = rand();
$rand2 = rand();
$ekstensi = array('pdf');
$filename = $_FILES['ktp']['name'];
$filename2 = $_FILES['kk']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$ext2 = pathinfo($filename2, PATHINFO_EXTENSION);

$ktp = $rand . '_' . $filename;
$kk = $rand2 . '_' . $filename2;

move_uploaded_file($_FILES['ktp']['tmp_name'], 'berkas/' . $rand . '_' . $filename);
move_uploaded_file($_FILES['kk']['tmp_name'], 'berkas/' . $rand2 . '_' . $filename2);

mysqli_query($koneksi, "INSERT INTO upload_pdf VALUES('', '$nama', '$ktp', '$kk')");
header("location:index.php");
