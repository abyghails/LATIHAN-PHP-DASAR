<?php
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");


function query($data)
{
	global $koneksi;
	$result = mysqli_query($koneksi, $data);

	$rows = [];

	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}
