<?php
session_start();
if(!isset($_SESSION['username'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=index1.php'>";
} else {

?>
<html> 
<head>
<title>Sistem Informasi Perpustakaan </title>
<link rel="stylesheet" type="text/css" href="../images/style.css" />
</head>

<body>
<!-- menu main sebagai div Utama -->

<div id="main">
	<!-- menu Header -->
    <div id="header">
    <img src="../images/pp.png" />
    </div>
    
    <!-- menu Header -->
    <div id="menu-atas">
    	<div id="menu_user">
        <span><?=$_SESSION['username'];?></span>
        </div>
        <div id="menu_tanggal" align="right">
        <span><?php
		 	$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 			$hr = $array_hr[date('N')];
			$tgl= date('j');
			$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
			$bln = $array_bln[date('n')];
			$thn = date('Y');
			echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
			?>
        </span>
        </div>
    </div>
    
    
<div>    
    <!-- menu Kiri -->
 	<div id="menu-kiri">
    	<div id="bg_menu">Menu Utama
    	</div>
    	<div id="left_menu">
        	<a href="index1.php" class="menu">&raquo; Home </a> <br />
        	<a href="?page=buku" class="menu">&raquo; Buku </a> <br />
        	<a href="?page=anggota" class="menu">&raquo; Anggota </a> <br />
        	<a href="?page=transaksi" class="menu">&raquo; Transaksi </a> <br />
            <a href="?page=laporan" class="menu">&raquo; Laporan </a> <br />
            <a href="../logout.php" class="menu">&raquo; Logout </a> <br />
        </div>
    </div>
	    
    	     <?php
				 error_reporting(0);
				 switch($_GET['page'])
				 	{
						default:
						include "../home.php";
						break;
						
						// menu buku				
						case "buku";
						include "buku_data1.php";
						break;
						case "buku_hasil";
						include "buku_hasil1.php";
						break;
						
												
						// anggota
						case "anggota";
						include "anggota1_data.php";
						break;
						case "anggotahasil1";
						include "anggotahasil1.php";
						break;
						
						
						
						// transaksi
						case "transaksi";
						include "transaksi_data1.php";
						break;
						
						
						
						// laporan
						case "laporan";
						include "../laporan.php";
						break;
						
						
						
					
					}
			?>

    
</div>
    <!-- menu Merapikan div content -->
    <div class="clear">
   	</div>
    
  	<!-- menu Footer -->
    <div id="footer"><center>Hendra deny &copy; 2018</center></div>
    
</div>

</body>
</html>

<?php } ?>