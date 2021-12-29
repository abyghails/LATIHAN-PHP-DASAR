<?php
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
	global $koneksi;
	$data = mysqli_query($koneksi, $query);

	$rows = [];
	while ($row = mysqli_fetch_assoc($data)) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data)
{
	global $koneksi;
	// ambil data dari tiap element form
	$nama = htmlspecialchars($data['nama']);
	$nrp = htmlspecialchars($data['nrp']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);

	// upload gambar 
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	// query  insert data 
	$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp' , '$email', '$jurusan', '$gambar')";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function upload()
{
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang di upload 
	if ($error == 4) {
		echo "<script>
						alert('Masukkan gambar terlebih dahulu!!! ');
					</script>";

		return false;
	}

	// cek dan memastikan bahwa yang di upload adalah gambar 
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
						alert('yang anda upload bukan gambar!!');
					</script>";
		return false;
	}

	// sekarang cek ukuran files jika terlalu besar tidak boleh hitungan byte
	if ($ukuranFile > 1000000) {
		echo "<script>
						alert('ukuran gambar yang anda upload terlalu besar!!');
					</script>";
		return false;
	}

	// lolos pengecekan gambar diatas dan siap di upload 
	// generate nama gambar yang baru agar tidak terjadi kesamaan gambar pada user
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
	return $namaFileBaru;
}


function ubah($data)
{
	global $koneksi;

	$id = $data['id'];
	$nama = htmlspecialchars($data['nama']);
	$nrp = htmlspecialchars($data['nrp']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambarLama = htmlspecialchars($data['gambarLama']);

	// cek gambar di pilih atau tidak 
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}


	// update query nih jangan lupa 
	$query = "UPDATE mahasiswa SET  nama = '$nama', nrp = '$nrp', email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE id = $id ";
	mysqli_query($koneksi, $query);

	// mengembalikan fungsi jumlah baris yang terkena dampak di SELECT sebelumnya, INSERT, UPDATE, REPLACE, atau DELETE query.
	return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{
	$query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' OR gambar LIKE '%$keyword%'";

	return query($query);
}

function registrasi($data)
{
	global $koneksi;
	$username = strtolower(stripslashes($data['username']));
	$password = mysqli_real_escape_string($koneksi, $data['password']);
	$password2 = mysqli_real_escape_string($koneksi, $data['password2']);

	// cek username sudah ada atau belum 
	$result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
							alert('Username yang anda masukkan sudah terdaftar !!');
					</script>";
		return false;
	}

	// sekarang cek password dan confirm password 
	if ($password !== $password2) {
		echo "<script>
							alert('Password yang anda masukkan tidak sesuai !!');
					</script>";
		return false;
	}

	// mengamankan password dengan enkripsi 
	$password = password_hash($password, PASSWORD_DEFAULT);

	// setelah diatas semua baru kita masukkan ke table users di database 
	mysqli_query($koneksi, "INSERT INTO users VALUES('', '$username', '$password')");

	return mysqli_affected_rows($koneksi);
}
