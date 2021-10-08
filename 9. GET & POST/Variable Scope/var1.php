<?php
//variable scope / lingkup variable
$x = 10;
// echo $x;
function tampilX()
{
	global $x; //fungsi global adalah untuk mengambil variable global/di luar function
	echo $x;
}
tampilX();
?>

<!-- ada variable superglobal yang sudah tertanam di php. Yaitu : 
1. $_GET
2. $_POST
3. $_REQUEST
4. $_SESSION
5. $_COOKIE
6. $_SERVER
7. $_ENV
8. $_FILES
-->