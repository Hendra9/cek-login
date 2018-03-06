
<?php

session_start();
$username = 'admin';
$password = 'admin';



	

	if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        //Membuat Session
        $_SESSION["username"] = $username; 
        echo "Anda Berhasil Login $username";
		echo "<meta http-equiv='refresh' content='0; url=admin/index1.php'>";
        /*Jika Ingin Pindah Ke Halaman Lain*/
        // header("Location: admin.php"); //Pindahkan Kehalaman Admin

    } else {
        // Tampilkan Pesan Error
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
	
}  
  
else { 
    display_login_form();
}

function display_login_form(){ ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
	<html>
	<body>
	<body background="images/log.png">
	<td>
    <table width="10%" style="background:#ii; ">
	<body>
	</td>
	<center>
    	<tr>
        	<td><font color="white" width="30%">Username </font></td>
            <td>:</td>
            <td><input type="text" name="username" size="30%" required></td>
        </tr>
        <tr>
        	<td><font color="white">Password</font></td>
            <td>:</td>
            <td><input type="password" name="password" size="30%" required></td>
        </tr>
        <tr>
        	<td></td>
            <td></td>
            <td><button type="submit" name="submit">LOGIN</td>
        </tr>
	</center>
    </table>
	</body>
	</html>
<?php } 


?>