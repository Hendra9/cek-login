<html>
 <head>
  <title>Biodata</title>
 </head>
 <body>
 <form action="anggotahasil1.php" method="post">
	<p class="content"><font face="lucida calligraphy"><font size="3" color="black">
<td>nama anngota</td>
   <td>:</td>
   <td><input type=text name=nama size=15>
   <td>tanggal masuk</td>
   <select name=tgl>
   <option name=tgl>tgl
   <option name=tgl>1
   <option name=tgl>2
   <option name=tgl>3
   <option name=tgl>4
   <option name=tgl>5
   <option name=tgl>6
   <option name=tgl>7
   <option name=tgl>8
   <option name=tgl>9
   <option name=tgl>10
   <option name=tgl>11
   <option name=tgl>12
   
   
   </select>
   <select name=Bln>
   <option name=Bln>Bln
   <option name=Bln>Januari
   <option name=Bln>Februari
   <option name=Bln>Maret
   <option name=Bln>April
   <option name=Bln>Mei
   <option name=Bln>Juni
   <option name=Bln>Juli
   <option name=Bln>Agustus
   <option name=Bln>September
   <option name=Bln>Oktober
   <option name=Bln>November
   <option name=Bln>Desember
   </select>
    <select name=Thn>
   <option name=Thn>Thn
   <option name=Thn>2015
   <option name=Thn>2016
   <option name=Thn>2017
   <option name=Thn>2018
   
   </select>
   <td>status</td>
   <select name=status>
   <option name=status>Admin
   <option name=status>User
   </select>
   <tr>
   <td><input type="reset" name=hapus value=&lt&lt_Hapus>
   <input type="submit" name=tambah value=Tambah_Data></td>
  </tr>
  
  <tr>
         <td width="50%"></td>
         <td width="50%" align="right"><input type="text" name="cari" size="30" placeholder="NIAP, Nama"></td>
         <td><input type="submit" id="submit" value="cari"></td>
  </tr>
  
   <div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	            <th align="center" width="5%" >No</th>
   	            <th width="30%">NIAP</th>
   	            <th width="20%">Nama</th>
   	            <th width="15%">Status</th>
   	            <th width="15%">Edit</th>
              </tr>
            </thead>
            
            
            </tbody>
          </table>
          </div>
 </body>
</html>