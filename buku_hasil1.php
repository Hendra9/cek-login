<?php

$Tempat=$_POST['cari'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$jml=$_POST['jumblah'];


echo "nama buku dan jumblah ===> $Tempat,$pengarang,$penerbit, $jml<br>";


?>
<html>
	<head>
		<title>terima data</title>
	</head>
	<body>
	<h3>berikut inputan buku anda=>><?php	echo $Tempat; ?>,<?php echo $pengarang; ?>,<?php echo $penerbit; ?>,<?php echo $jml; ?>
	<a href="buku_data1.php">Rubah inputan</a>
	</body>
</html>
