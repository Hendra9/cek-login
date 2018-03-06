<?php

$Tempat1=$_POST['nama1'];
$Tempat2=$_POST['nama2'];
$Tempat3=$_POST['nama3'];
$Tempat4=$_POST['nama4'];
$Tgl1=$_POST['tgl1'];
$Bln1=$_POST['Bln1'];
$Thn1=$_POST['Thn1'];

$Tglll2=$_POST['tglll2'];
$Blnll2=$_POST['Blnll2'];
$Thnll2=$_POST['Thnll2'];

echo "Transaksi peminjaman buku : $Tempat1,$Tempat2,$Tempat3,$Tempat4,$Tgl1/$Bln1/$Thn1-$Tglll2/$Blnll2/$Thnll2<br>";

?>
<html>
	<head>
		<title>terima data</title>
	</head>
	<body>
	<h3>berikut Tanggal peminjaman & pengembalian buku,<?php echo $Tgl1; ?><?php echo $Bln1; ?><?php echo $Thn1; ?>-<?php echo $Tglll2; ?><?php echo $Blnll2; ?><?php echo $Thnll2; ?>
	<a href="transaksi_data1.php">Rubah inputan anggota anda</a>
	</body>
</html>
