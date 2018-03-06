
   
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Buku
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<form action="?page=buku_search" method="post">
        	<table width="100%" height="100%" style="border:1px solid #9cc;">
            	<tr>
                	<td width="50%"></td>
                    <td width="50%" align="right"><input type="text" name="cari" size="30" placeholder="Judul Buku, Pengarang"></td>
                    <td><input type="submit" id="submit" value="cari"></td>
                </tr>
            
            </table>
            </form>
            
    	</div>
   	    <div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	            <th align="center" width="5%" >No</th>
   	            <th width="30%">Judul Buku</th>
   	            <th width="20%">Pengarang</th>
   	            <th width="15%">Penerbit</th>
   	            <th width="15%">Jumlah</th>
              </tr>
            </thead>
            
            
            </tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> buku</td>
                    
                </tr>
            </table>
    	</div>
   	  </div>
    </div>