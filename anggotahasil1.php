<?php

$Tempat=$_POST['nama'];
$Tgl=$_POST['tgl'];
$Bln=$_POST['Bln'];
$Thn=$_POST['Thn'];
$status=$_POST['status'];

echo "Tempat dan Tanggal Lahir : $Tempat#, $Tgl/$Bln/$Thn,$status<br>";

?>
<html>
	<head>
		<title>terima data</title>
	</head>
	<body>
	<h3>berikut inputan agggota,<?php	echo $Tempat; ?>,<?php echo $Tgl; ?><?php echo $Bln; ?><?php echo $Thn; ?><?php echo $status; ?>
	<a href="anggota1_data.php">Rubah inputan anggota anda</a>
	</body>
</html>
