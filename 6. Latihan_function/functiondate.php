
<?php
// function yang sering di pakai untuk date/ time 
// 1. time();
// 2. date();
// 3. mktime();
// 4. strtotime();
?>


<?php
// // date untuk menampilkan dengan format tertentu
// echo date("l, d-M-Y");


//time 
//UNIX timestamp / EPOCH time
// echo time();

// echo date("d M Y", time()+60*60*24*100);

//mktime
// membuat  detik sendiri
//mktime (0, 0, 0, 0, 0, 0)
// jam, menit, detik, bulan, tanggal, tahun

// echo date("l", mktime(0, 0, 0, 12, 24, 1998));

//strtotime
echo date("l", strtotime("24 Des 1998"));
?>
