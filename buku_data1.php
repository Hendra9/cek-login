<html>
 <head>
  <title>Biodata</title>
 </head>
 <body>
 <form action="buku_hasil1.php" method="post">
	<p class="content"><font face="lucida calligraphy"><font size="3" color="black">
<td>judul buku</td>
   <td>:</td>
   <td><input type=text name=cari size=15>
   <td>pengarang</td>
   <td>:</td>
   <td><input type=text name=pengarang size=15>
   <td>penerbit</td>
   <td>:</td>
   <td><input type=text name=penerbit size=15>
   <td>jumblah</td>
   <select name=jumblah>
   <option name=jumblah>jumblah
   <option name=jumblah>1
   <option name=jumblah>2
   <option name=jumblah>3
   <option name=jumblah>4
   
   </select>
   
   <tr>
   <td><input type="reset" name=hapus value=&lt&lt_Hapus>
   <input type="submit" name=tambah value=Tambah_Data>
   
   <tr>
        <td width="50%"></td>
        <td width="50%" align="right"><input type="text" name="cari" size="30" placeholder="Judul Buku, Pengarang"></td>
        <td><input type="submit" id="submit" value="cari"></td>
   </tr>
   
   <div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	            <th align="center" width="5%" >No</th>
   	            <th width="30%">Judul Buku</th>
   	            <th width="20%">Pengarang</th>
   	            <th width="15%">Penerbit</th>
   	            <th width="15%">Jumlah</th>
				<th width="15%">edit</th>
              </tr>
            </thead>
            
            
            </tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
			</table>
   
   </td>
  </tr>
  
  
  
 </body>
</html>