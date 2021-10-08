
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

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
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
	if ($error === 4) {
		echo "<script> 
						alert('pilih gambar terlebih dahulu!');
					</script>";

		return false;
	}

	//cek apakah yang di upload adalah gambar 
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script> 
						alert('yang anda upload bukan gambar!');
					</script>";
		return false;
	}

	// cek jika ukuran terlalu besar
	if ($ukuranFile > 1000000) {
		echo "<script> 
						alert('ukuran gambar terlalu besar!');
					</script>";
	}

	// lolos pengecekan gambar siap di upload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
	return $namaFileBaru;
}

function hapus($id)
{
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($koneksi);
}

function ubah($data)
{
	global $koneksi;
	// ambil data dari tiap element form
	$id = $data['id'];
	$nama = htmlspecialchars($data['nama']);
	$nrp = htmlspecialchars($data['nrp']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambarLama = htmlspecialchars($data['gambarLama']);

	// cek pilih gambar baru atau tidak 
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	} else {

		$gambar = upload();
	}

	// query  insert data 
	$query = "UPDATE mahasiswa SET nrp = '$nrp', nama = '$nama', email ='$email', jurusan = '$jurusan', gambar = '$gambar' WHERE id = $id";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{
	$query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";

	return query($query);
}

?>