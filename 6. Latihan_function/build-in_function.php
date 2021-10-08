<?php
// function yang sering di pakai untuk date/ time 
// 1. time();
// 2. date();
// 3. mktime();
// 4. strtotime();
?>

<?php
// function yang berhubungan dengan string : 
// 1. strlen(); // untuk menghitung panjang sebuah string
// 2. strcmp(); string compare atau menggabungkan dua buah string
// 3. explode(); untuk memecah sebuah string menjadi array. dipakai ketika kita ingin mengambil nama sebuah file
// 4. htmlspecialchars(); // khusus menjaga kita dari orang yang iseng yang mau masuk ke website kita 
?>

<?php
// function utility atau bantuan : 
// var_dump(); // fungsi untuk mencetak isi dari sebuah variabel array atau object apapun
// isset(); // untuk mengecek apakah sebuah variabel sudah dibuat atau belum. Menghasilkan nilai boolean 'true' or 'false'. 
// empty(); // ngecek apakah variabel yang ada kosong atau tidak / ada isinya atau tidak
// die(); // untuk memberhentikan program kita. Ketika didalam baris mennemukan die(); program selanjutnya tidak akan dijalankan
// sleep(); // untuk memberhentikan program sementara.
?>


<!-- <?php
			function salam($waktu, $nama)
			{
				return "Selamat $waktu, $nama";
			}

			?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1><?php echo salam("Pagi", "Abyghail"); ?></h1>
</body>
</html> -->