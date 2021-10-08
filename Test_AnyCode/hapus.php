<?php
require 'functions.php';

$id_warga = $_GET['id_warga'];

if (hapus($id_warga) >= 0) {
	echo "
	<script>
		alert('data BERHASIL di HAPUS!!');
		document.location.href = 'index.php';
	</script>
";
} else {
	echo "
	<script>
		alert('data GAGAL di HAPUS!!');
		document.location.href = 'index.php';
	</script>
";
}
