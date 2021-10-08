Cara membuat cookie :

setcookie('nama', 'abyghails', time());

nanti dihalaman selanjutnya bisa gunakan fungsi dibawah ini untuk memanggil:

echo $\_COOKIE['nama']; <!-- tanpa menggunakan \ -->
