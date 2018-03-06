<html>
 <head>
  <title>Biodata</title>
 </head>
 <body>
 <form action="transaksihasil1.php" method="post">
	<p class="content"><font face="lucida calligraphy"><font size="3" color="black">
<td>nama user</td>
   <td>:</td>
   <td><input type=text name=nama1 size=15>
<td>Niap</td>
   <td>:</td>
   <td><input type=text name=nama2 size=15>
<td>Judul buku</td>
   <td>:</td>
   <td><input type=text name=nama3 size=15>
<td>Penerbit</td>
   <td>:</td>
   <td><input type=text name=nama4 size=15>
<td>tanggal pinjam</td>
   <select name=tgl1>
   <option name=tgl1>tgl
   <option name=tgl1>1
   <option name=tgl1>2
   <option name=tgl1>3
   <option name=tgl1>4
   <option name=tgl1>5
   <option name=tgl1>6
   <option name=tgl1>7
   <option name=tgl1>8
   <option name=tgl1>9
   <option name=tgl1>10
   <option name=tgl1>11
   <option name=tgl1>12
   <option name=tgl1>13
   </select>
   </select>
   <select name=Bln1>
   <option name=Bln1>Bln
   <option name=Bln1>Januari
   <option name=Bln1>Februari
   <option name=Bln1>Maret
   <option name=Bln1>April
   <option name=Bln1>Mei
   <option name=Bln1>Juni
   <option name=Bln1>Juli
   <option name=Bln1>Agustus
   <option name=Bln1>September
   <option name=Bln1>Oktober
   <option name=Bln1>November
   <option name=Bln1>Desember
   </select>
    <select name=Thn1>
   <option name=Thn1>Thn
   <option name=Thn1>2015
   <option name=Thn1>2016
   <option name=Thn1>2017
   <option name=Thn1>2018
   
   </select>
   <td>Tanggal kembali Buku</td>
    <select name=tglll2>
	<option name=tglll2>tgl
   <option name=tglll2>1
   <option name=tglll2>2
   <option name=tglll2>3
   <option name=tglll2>4
   <option name=tglll2>5
   <option name=tglll2>6
   <option name=tglll2>7
   <option name=tglll2>8
   <option name=tglll2>9
   <option name=tglll2>10
   <option name=tglll2>11
   <option name=tglll2>12
   <option name=tglll2>13
   </select>
   </select>
   <select name=Blnll2>
   <option name=Blnll2>Bln
   <option name=Blnll2>Januari
   <option name=Blnll2>Februari
   <option name=Blnll2>Maret
   <option name=Blnll2>April
   <option name=Blnll2>Mei
   <option name=Blnll2>Juni
   <option name=Blnll2>Juli
   <option name=Blnll2>Agustus
   <option name=Blnll2>September
   <option name=Blnll2>Oktober
   <option name=Blnll2>November
   <option name=Blnll2>Desember
   </select>
    <select name=Thnll2>
   <option name=Thnll2>Thn
   <option name=Thnll2>2015
   <option name=Thnll2>2016
   <option name=Thnll2>2017
   <option name=Thnll2>2018
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