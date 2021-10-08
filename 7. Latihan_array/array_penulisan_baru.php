<!-- Penulisan cara baru -->
<!-- harus di ingat bahwa index array di mulai dari 0 -->
<!-- array itu bisa berbeda tipe data -->
<!-- <?php
			$bulan = [" ", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

			echo $bulan[11];
			?> -->

<!-- contoh array beda tipe data  -->
<!-- <?php
			$array1 = ["Ayghails", true, 30]; //true itu bernilai 1, kalo false itu kosong atau nol
			// echo $array1[1];
			var_dump($array1);
			?> -->
<!-- untuk menampilkan array bisa menggunakan var_dump() / print_r()  karena echo itu untuk mencetak nilainya. Jadi berbeda -->

<?php
$hari = ["Senin", "Selasa", "Rabu"];

// echo $hari[2];

// jika ingin menambahkan elemen array bisa di atas tapi bisa juga seperti di bawahi ini :
$hari[] = "Kamis"; //bisa di tulis seperti ini 
var_dump($hari);
?>
<!-- jadi var_dump() itu berguna untuk developer -->