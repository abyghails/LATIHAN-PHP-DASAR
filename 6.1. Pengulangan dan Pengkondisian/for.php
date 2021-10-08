<?php
// pengulangan
// while 
// do.. while
// foreach:perulangan khusus array

// for($i = 0; $i < 5; $i++){
// 	echo "Abyghails <br>";
// }


// $i = 0;	

// 	while( $i < 5 ){
// 		echo "Abyghails <br>";

// 		$i++;
// 	}

//bedanya untuk do while = akan ditampilkan terlebih dahulu satu kali meskipun false

// 	$i = 0;
// 	do {
// 		echo "ABYGHAILS <br>";

// 		$i++;

// 	} while ( $i < 5 );
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan Flow Control</title>
</head>

<body>
	<table border="2" cellpadding="10" cellspacing="0">
		<?php for ($i = 1; $i <= 3; $i++) : ?>

			<tr>
				<?php for ($j = 1; $j <= 5; $j++) : ?>

					<td><?php echo "$i, $j"; ?></td>

				<?php endfor; ?>

			</tr>

		<?php endfor; ?>
	</table>


</body>

</html>