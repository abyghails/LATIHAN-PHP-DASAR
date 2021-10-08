<?php
$koneksi = mysqli_connect("localhost", "root", "", "test");

function query($query)
{
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];

	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data)
{
	global $koneksi;

	$nama = htmlspecialchars($data['nama']);
	$no_ktp = htmlspecialchars($data['no_ktp']);
	$no_kk = htmlspecialchars($data['no_kk']);
	$alamat = htmlspecialchars($data['alamat']);

	$query = "INSERT INTO warga (nama, no_ktp, no_kk, alamat) VALUES('$nama', '$no_ktp', '$no_kk', '$alamat')";
	mysqli_query($koneksi, $query);

	$warga = query("SELECT id_warga FROM warga ORDER BY id_warga DESC")[0];
	$id_warga = $warga['id_warga'];
	$query2 = "INSERT INTO berkas_warga (id_warga, no_ktp, no_kk) VALUES ('$id_warga', '$no_ktp', '$no_kk')";

	mysqli_query($koneksi, $query2);

	return mysqli_affected_rows($koneksi);
}


function ubah($data)
{
	global $koneksi;

	$id_warga = $data['id_warga'];
	$nama = htmlspecialchars($data['nama']);
	$no_ktp = htmlspecialchars($data['no_ktp']);
	$no_kk = htmlspecialchars($data['no_kk']);
	$alamat = htmlspecialchars($data['alamat']);

	$query = "UPDATE warga SET nama = '$nama', no_ktp = '$no_ktp', no_kk = '$no_kk', alamat = '$alamat' WHERE id_warga = '$id_warga'";
	mysqli_query($koneksi, $query);

	$query2 = "UPDATE berkas_warga SET no_ktp = '$no_ktp', no_kk = '$no_kk' WHERE id_warga = '$id_warga'";
	mysqli_query($koneksi, $query2);

	return mysqli_affected_rows($koneksi);
}

function hapus($id_warga)
{
	global $koneksi;

	$query = "DELETE FROM warga WHERE id_warga = $id_warga";
	mysqli_query($koneksi, $query);

	$query2 = "DELETE FROM berkas_warga WHERE id_warga = $id_warga";
	mysqli_query($koneksi, $query2);

	mysqli_affected_rows($koneksi);
}
